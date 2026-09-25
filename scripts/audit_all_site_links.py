import os
import re

ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
broken_links = []
checked_links = 0
checked_pages = 0

print("=== BẮT ĐẦU CRAWL VÀ KIỂM TRA TOÀN BỘ 146 TRANG TRÊN WEBSITE ===")

for dirpath, dirnames, filenames in os.walk(ROOT):
    # Bỏ qua node_modules, vendor, .git, scripts, storage
    if any(p in dirpath for p in [".git", "vendor", "node_modules", "storage", "database", "app", "config", "tests"]):
        continue
    for fname in filenames:
        if fname == "index.html" or fname == "404.html":
            checked_pages += 1
            fpath = os.path.join(dirpath, fname)
            rel_page = os.path.relpath(fpath, ROOT)
            with open(fpath, "r", encoding="utf-8") as f:
                content = f.read()

            hrefs = re.findall(r'<a[^>]+href="([^">]+)"', content)
            for href in hrefs:
                if href.startswith(("http://", "https://", "tel:", "mailto:", "javascript:", "#")):
                    continue
                checked_links += 1
                clean_href = href.split("?")[0].split("#")[0].strip()
                if not clean_href or clean_href == "/":
                    continue
                
                # Tìm đường dẫn tương ứng
                target_rel = clean_href.strip("/").replace("/", os.sep)
                target_path_dir = os.path.join(ROOT, target_rel)
                target_path_index = os.path.join(ROOT, target_rel, "index.html")
                target_path_file = os.path.join(ROOT, clean_href.lstrip("/").replace("/", os.sep))

                if not (os.path.isfile(target_path_index) or os.path.isfile(target_path_file) or os.path.isdir(target_path_dir)):
                    broken_links.append((rel_page, href))

print(f"\n✔ Đã quét {checked_pages} trang HTML, kiểm tra {checked_links} liên kết.")
if broken_links:
    print(f"❌ Phát hiện {len(broken_links)} liên kết có nguy cơ hỏng:")
    for src, link in set(broken_links):
        print(f"  - Tại [{src}] -> {link}")
else:
    print("✔ 100% LIÊN KẾT NỘI BỘ HỢP LỆ VÀ TỒN TẠI TRÊN ĐĨA!")
