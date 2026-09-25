import os
import sys
import zipfile
import ftplib
import urllib.request
import urllib.error
import time

sys.stdout.reconfigure(encoding='utf-8')

WORKSPACE_DIR = r"d:\Workspace\matbao-ws\huongsoncocomvn405.mbws.vn"
ZIP_FILENAME = "deploy_update.zip"
ZIP_FILEPATH = os.path.join(WORKSPACE_DIR, ZIP_FILENAME)

def load_env_dict():
    env_vars = {}
    env_file = os.path.join(WORKSPACE_DIR, ".env")
    if os.path.exists(env_file):
        with open(env_file, 'r', encoding='utf-8') as f:
            for line in f:
                line = line.strip()
                if line and not line.startswith('#') and '=' in line:
                    k, v = line.split('=', 1)
                    env_vars[k.strip()] = v.strip().strip('"').strip("'")
    return env_vars

_env = load_env_dict()
FTP_HOST = _env.get("FTP_HOST", "203.205.31.252")
FTP_USER = _env.get("FTP_USER", "u08cb5313")
FTP_PASS = _env.get("FTP_PASS", "AKdmec3$E6v2fjt$")
DB_PASS = _env.get("DB_PASSWORD", "b0zZfEZ2~mz_eap7")

DIRECTORIES_TO_INCLUDE = [
    "ve-huong-son",
    "san-pham",
    "giai-phap",
    "dich-vu",
    "du-an",
    "cong-cu",
    "nhan-tu-van",
    "theme",
    "resources/views",
    "build",
    "database/seeders",
    "scripts",
]

ROOT_FILES_TO_INCLUDE = [
    "sitemap.xml",
    "robots.txt",
    "llms.txt",
    "index.html",
    "404.html",
    "HUONG_SON_logo.svg",
]

print("=== BẮT ĐẦU ĐÓNG GÓI BẢN CẬP NHẬT ===")
file_count = 0
total_uncompressed_bytes = 0

with zipfile.ZipFile(ZIP_FILEPATH, 'w', zipfile.ZIP_DEFLATED) as zipf:
    # Add individual root files
    for rf in ROOT_FILES_TO_INCLUDE:
        fpath = os.path.join(WORKSPACE_DIR, rf)
        if os.path.isfile(fpath):
            zipf.write(fpath, arcname=rf)
            size = os.path.getsize(fpath)
            total_uncompressed_bytes += size
            file_count += 1
            print(f"  + [file] {rf} ({size:,} bytes)")
        else:
            print(f"  ! Warning: {rf} does not exist locally")

    # Add directories recursively
    for dir_rel in DIRECTORIES_TO_INCLUDE:
        dir_abs = os.path.join(WORKSPACE_DIR, dir_rel)
        if not os.path.exists(dir_abs):
            print(f"  ! Warning: directory {dir_rel} not found")
            continue
        print(f"  * Đang quét thư mục: {dir_rel}")
        for root, dirs, files in os.walk(dir_abs):
            # Skip python cache
            dirs[:] = [d for d in dirs if d != '__pycache__']
            for file in files:
                # Skip temp/log files
                if file.endswith(('.pyc', '.bak', '.tmp', '.log')):
                    continue
                file_abs = os.path.join(root, file)
                arcname = os.path.relpath(file_abs, WORKSPACE_DIR).replace('\\', '/')
                zipf.write(file_abs, arcname=arcname)
                total_uncompressed_bytes += os.path.getsize(file_abs)
                file_count += 1

zip_size = os.path.getsize(ZIP_FILEPATH)
print(f"\n✔ Đã nén thành công {file_count} files.")
print(f"  Dung lượng giải nén: {total_uncompressed_bytes / (1024*1024):.2f} MB")
print(f"  Dung lượng file ZIP: {zip_size / (1024*1024):.2f} MB")

# Prepare PHP deployment trigger script
php_trigger_code = """<?php
header('Content-Type: text/plain; charset=utf-8');
set_time_limit(300);
ini_set('memory_limit', '512M');
echo "=== HUONG SON DEPLOY TRIGGER START ===\\n";
echo "PHP Version: " . PHP_VERSION . "\\n";

$baseDir = dirname(__DIR__); // /httpdocs
$publicDir = __DIR__;        // /httpdocs/public
$zipPath = $baseDir . '/deploy_update.zip';

if (!file_exists($zipPath)) {
    echo "ERROR: deploy_update.zip not found at: $zipPath\\n";
    exit(1);
}

// 1. Extract ZIP
echo "1. Extracting deploy_update.zip to $baseDir ...\\n";
$zip = new ZipArchive();
if ($zip->open($zipPath) === TRUE) {
    if ($zip->extractTo($baseDir)) {
        echo "SUCCESS: Extracted all files.\\n";
        $zip->close();
        @unlink($zipPath);
        echo "Deleted deploy_update.zip.\\n";
    } else {
        echo "ERROR: extractTo failed.\\n";
        $zip->close();
        exit(1);
    }
} else {
    echo "ERROR: Cannot open ZIP.\\n";
    exit(1);
}

// 2. Synchronize root SEO files into public/
echo "2. Syncing SEO files to public/ ...\\n";
$seoFiles = ['sitemap.xml', 'robots.txt', 'llms.txt'];
foreach ($seoFiles as $f) {
    $src = $baseDir . '/' . $f;
    $dst = $publicDir . '/' . $f;
    if (file_exists($src)) {
        copy($src, $dst);
        echo "  Copied $f to public/\\n";
    }
}

// 3. Update .env
echo "3. Updating .env ...\\n";
$envPath = $baseDir . '/.env';
if (file_exists($envPath)) {
    $envContent = file_get_contents($envPath);
    // Backup current .env
    file_put_contents($baseDir . '/.env.backup.' . date('Ymd_His'), $envContent);

    // Update DB_PASSWORD
    if (preg_match('/^DB_PASSWORD=.*$/m', $envContent)) {
        $envContent = preg_replace('/^DB_PASSWORD=.*$/m', 'DB_PASSWORD="b0zZfEZ2~mz_eap7"', $envContent);
    } else {
        $envContent .= "\\nDB_PASSWORD=\\"b0zZfEZ2~mz_eap7\\"\\n";
    }

    // Update APP_URL to https://huongsonco.com.vn if not already set
    if (preg_match('/^APP_URL=.*$/m', $envContent)) {
        $envContent = preg_replace('/^APP_URL=.*$/m', 'APP_URL=https://huongsonco.com.vn', $envContent);
    }

    file_put_contents($envPath, $envContent);
    echo "SUCCESS: .env updated (DB_PASSWORD and APP_URL set).\\n";
} else {
    echo "WARNING: .env not found at $envPath\\n";
}

// 4. Clear Laravel view and config caches manually
echo "4. Clearing framework caches manually ...\\n";
$cacheDirs = [
    $baseDir . '/storage/framework/views',
    $baseDir . '/storage/framework/cache/data',
    $baseDir . '/bootstrap/cache',
];

foreach ($cacheDirs as $cdir) {
    if (is_dir($cdir)) {
        $files = glob($cdir . '/*');
        foreach ($files as $file) {
            if (is_file($file) && !str_ends_with($file, '.gitignore')) {
                @unlink($file);
            }
        }
        echo "  Cleaned: " . basename($cdir) . "\\n";
    }
}

// 5. Try artisan optimize:clear via shell_exec or in-process
echo "5. Executing Laravel optimize:clear ...\\n";
$candidates = glob('/opt/plesk/php/*/bin/php') ?: [];
foreach (['php', '/usr/bin/php', '/usr/local/bin/php'] as $f) {
    $candidates[] = $f;
}
$phpCli = null;
foreach (array_unique($candidates) as $cmd) {
    $out = @shell_exec($cmd . ' -r "echo PHP_VERSION;" 2>&1');
    if ($out && version_compare(trim($out), '8.2', '>=')) {
        $phpCli = $cmd;
        break;
    }
}

if ($phpCli) {
    echo "Using PHP CLI: $phpCli\\n";
    $artisanOutput = shell_exec("cd " . escapeshellarg($baseDir) . " && $phpCli artisan optimize:clear 2>&1");
    echo $artisanOutput . "\\n";
} else {
    echo "No compatible PHP CLI found for shell_exec; calling in-process Artisan...\\n";
    try {
        require $baseDir . '/vendor/autoload.php';
        $app = require_once $baseDir . '/bootstrap/app.php';
        $kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
        $kernel->call('optimize:clear');
        echo "In-process optimize:clear executed successfully.\\n";
    } catch (Throwable $e) {
        echo "In-process error: " . $e->getMessage() . "\\n";
    }
}

echo "=== HUONG SON DEPLOY TRIGGER COMPLETE ===\\n";
// Self-destruct
@unlink(__FILE__);
?>"""

print("\n=== BẮT ĐẦU UPLOAD LÊN HOSTING QUA FTP ===")
ftp = ftplib.FTP()
ftp.connect(FTP_HOST, 21, timeout=60)
ftp.login(FTP_USER, FTP_PASS)
ftp.cwd('httpdocs')
print(f"Đã đăng nhập FTP {FTP_USER}@{FTP_HOST}, cwd: {ftp.pwd()}")

# Upload ZIP
print(f"Đang upload {ZIP_FILENAME} ({zip_size / (1024*1024):.2f} MB)...")
t0 = time.time()
with open(ZIP_FILEPATH, 'rb') as f:
    ftp.storbinary(f'STOR {ZIP_FILENAME}', f)
upload_time = time.time() - t0
print(f"✔ Đã upload {ZIP_FILENAME} thành công trong {upload_time:.1f} giây!")

# Upload trigger PHP to public/
import io
ftp.cwd('public')
trigger_name = "deploy_trigger_antigravity.php"
ftp.storbinary(f'STOR {trigger_name}', io.BytesIO(php_trigger_code.encode('utf-8')))
print(f"✔ Đã upload {trigger_name} vào public/.")
ftp.quit()

print("\n=== KÍCH HOẠT EXTRACT & OPTIMIZE TRÊN HOSTING ===")
trigger_url = f"https://huongsonco.com.vn/{trigger_name}"
print(f"Gửi HTTP GET tới {trigger_url} ...")

try:
    req = urllib.request.Request(trigger_url, headers={'User-Agent': 'AntigravityDeployer/1.0'})
    with urllib.request.urlopen(req, timeout=120) as resp:
        result = resp.read().decode('utf-8')
        print("Kết quả từ server:")
        print("--------------------------------------------------")
        print(result)
        print("--------------------------------------------------")
except Exception as e:
    print(f"Lỗi khi gọi trigger URL: {e}")

# Clean up local zip
if os.path.exists(ZIP_FILEPATH):
    os.remove(ZIP_FILEPATH)
    print(f"Đã dọn dẹp file local {ZIP_FILENAME}.")

print("\n🎉 TRIỂN KHAI HOÀN TẤT!")
