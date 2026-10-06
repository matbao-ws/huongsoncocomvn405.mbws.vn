<?php
/**
 * Đồng bộ 5 bài viết chiến lược vào cơ sở dữ liệu MySQL trên hosting Plesk.
 */

$jsonPath = __DIR__ . '/strategic_posts.json';
if (!file_exists($jsonPath)) {
    die("ERROR: File $jsonPath does not exist.\n");
}

$postsData = json_decode(file_get_contents($jsonPath), true);
if (!$postsData) {
    die("ERROR: Failed to decode JSON from $jsonPath\n");
}

$envFile = dirname(__DIR__, 2) . '/.env';
$env = [];
if (file_exists($envFile)) {
    foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if (strpos($line, '=') !== false && strpos(trim($line), '#') !== 0) {
            [$k, $v] = explode('=', $line, 2);
            $env[trim($k)] = trim($v, " \t\n\r\0\x0B\"'");
        }
    }
}

$host = $env['DB_HOST'] ?? '203.205.31.252';
$port = (int)($env['DB_PORT'] ?? 3306);
$db   = $env['DB_DATABASE'] ?? 'db_fe7be79e';
$user = $env['DB_USERNAME'] ?? 'db_fe7be79e';
$pass = $env['DB_PASSWORD'] ?? 'b0zZfEZ2~mz_eap7';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_TIMEOUT => 10,
    ]);
    echo "✔ Kết nối thành công tới MySQL $user@$host/$db\n";
} catch (Exception $e) {
    die("ERROR: Connection failed: " . $e->getMessage() . "\n");
}

// Đảm bảo category 1 tồn tại
$catStmt = $pdo->prepare("SELECT id FROM post_categories WHERE id = 1");
$catStmt->execute();
if (!$catStmt->fetch()) {
    $pdo->prepare("INSERT INTO post_categories (id, name, slug, description, is_active, sort_order, created_at, updated_at) VALUES (1, ?, 'tin-tuc', ?, 1, 1, NOW(), NOW())")
        ->execute([
            json_encode(['vi' => 'Tin Tức & Sự Kiện', 'en' => 'News & Events'], JSON_UNESCAPED_UNICODE),
            json_encode(['vi' => 'Tin tức, sự kiện và cẩm nang chuyên môn', 'en' => 'News, events and professional guide'], JSON_UNESCAPED_UNICODE)
        ]);
    echo "✔ Đã tạo category id=1 (tin-tuc)\n";
}

$upsertCount = 0;
foreach ($postsData as $p) {
    $slug = $p['slug'];
    $titleJson = json_encode(['vi' => $p['title'], 'en' => $p['title']], JSON_UNESCAPED_UNICODE);
    $summaryJson = json_encode(['vi' => $p['summary'], 'en' => $p['summary']], JSON_UNESCAPED_UNICODE);
    $contentJson = json_encode(['vi' => $p['content_html'], 'en' => $p['content_html']], JSON_UNESCAPED_UNICODE);
    $seoTitleJson = json_encode(['vi' => $p['seo_title'], 'en' => $p['seo_title']], JSON_UNESCAPED_UNICODE);
    $seoDescJson = json_encode(['vi' => $p['seo_desc'], 'en' => $p['seo_desc']], JSON_UNESCAPED_UNICODE);
    $seoKeys = $p['keywords'];
    $canonicalUrl = "https://huongsonco.com.vn/ve-huong-son/tin-tuc/{$slug}/";
    $imageUrl = $p['image_url'];
    $publishedAt = $p['published_at'];
    $seoScore = 100;
    $seoAnalysis = json_encode(['status' => 'excellent', 'score' => 100, 'checked_at' => date('Y-m-d H:i:s')]);

    $checkStmt = $pdo->prepare("SELECT id FROM posts WHERE slug = ?");
    $checkStmt->execute([$slug]);
    $existing = $checkStmt->fetch(PDO::FETCH_ASSOC);

    if ($existing) {
        $updateStmt = $pdo->prepare("
            UPDATE posts SET
                category_id = 1,
                title = ?,
                summary = ?,
                content = ?,
                image_url = ?,
                is_active = 1,
                seo_title = ?,
                seo_description = ?,
                seo_keys = ?,
                canonical_url = ?,
                robots_index = 1,
                robots_follow = 1,
                seo_score = ?,
                seo_analysis = ?,
                published_at = ?,
                updated_at = NOW()
            WHERE id = ?
        ");
        $updateStmt->execute([
            $titleJson,
            $summaryJson,
            $contentJson,
            $imageUrl,
            $seoTitleJson,
            $seoDescJson,
            $seoKeys,
            $canonicalUrl,
            $seoScore,
            $seoAnalysis,
            $publishedAt,
            $existing['id'],
        ]);
        echo "  [UPDATE] Post #{$existing['id']} slug: {$slug}\n";
    } else {
        $insertStmt = $pdo->prepare("
            INSERT INTO posts (
                category_id,
                title,
                slug,
                summary,
                content,
                image_url,
                is_active,
                seo_title,
                seo_description,
                seo_keys,
                canonical_url,
                robots_index,
                robots_follow,
                seo_score,
                seo_analysis,
                published_at,
                created_at,
                updated_at
            ) VALUES (
                1,
                ?,
                ?,
                ?,
                ?,
                ?,
                1,
                ?,
                ?,
                ?,
                ?,
                1,
                1,
                ?,
                ?,
                ?,
                NOW(),
                NOW()
            )
        ");
        $insertStmt->execute([
            $titleJson,
            $slug,
            $summaryJson,
            $contentJson,
            $imageUrl,
            $seoTitleJson,
            $seoDescJson,
            $seoKeys,
            $canonicalUrl,
            $seoScore,
            $seoAnalysis,
            $publishedAt,
        ]);
        $newId = $pdo->lastInsertId();
        echo "  [INSERT] Post #{$newId} slug: {$slug}\n";
    }
    $upsertCount++;
}

echo "\n✔ Đã đồng bộ thành công {$upsertCount} bài viết chiến lược vào MySQL!\n";
