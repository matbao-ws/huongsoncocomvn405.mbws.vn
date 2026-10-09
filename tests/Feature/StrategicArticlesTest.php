<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StrategicArticlesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $category = PostCategory::create([
            'id' => 1,
            'name' => ['vi' => 'Tin Tức & Sự Kiện', 'en' => 'News & Events'],
            'slug' => 'tin-tuc',
            'is_active' => true,
            'sort_order' => 1,
        ]);

        $jsonPath = base_path('scripts/articles/strategic_posts.json');
        if (file_exists($jsonPath)) {
            $postsData = json_decode(file_get_contents($jsonPath), true);
            foreach ($postsData as $p) {
                Post::create([
                    'category_id' => 1,
                    'title' => ['vi' => $p['title'], 'en' => $p['title']],
                    'slug' => $p['slug'],
                    'summary' => ['vi' => $p['summary'], 'en' => $p['summary']],
                    'content' => ['vi' => $p['content_html'], 'en' => $p['content_html']],
                    'image_url' => $p['image_url'],
                    'is_active' => true,
                    'seo_title' => ['vi' => $p['seo_title'], 'en' => $p['seo_title']],
                    'seo_description' => ['vi' => $p['seo_desc'], 'en' => $p['seo_desc']],
                    'seo_keys' => $p['keywords'],
                    'canonical_url' => "https://huongsonco.com.vn/ve-huong-son/tin-tuc/{$p['slug']}/",
                    'published_at' => $p['published_at'],
                ]);
            }
        }
    }

    public function test_news_index_returns_ok_and_contains_strategic_pillars(): void
    {
        $response = $this->get('/ve-huong-son/tin-tuc');
        $response->assertOk();
        $response->assertSee('Chuyên đề chiến lược');
        $response->assertSee('Giải Pháp Máy In Nhân Bản Siêu Tốc Duplo In Sao Đề Thi THPT');
        $response->assertSee('Giải Pháp Cho Thuê Máy Photocopy & Quản Lý In Ấn Bảo Mật');
    }

    public function test_tin_tuc_alias_route_returns_ok(): void
    {
        $response = $this->get('/tin-tuc');
        $response->assertOk();
    }

    public function test_strategic_article_1_returns_ok_with_aeo_and_author_box(): void
    {
        $response = $this->get('/ve-huong-son/tin-tuc/giai-phap-may-in-sieu-toc-duplo-in-sao-de-thi-thpt-so-gddt');
        $response->assertOk();
        $response->assertSee('Giải Pháp Máy In Nhân Bản Siêu Tốc Duplo In Sao Đề Thi THPT');
        $response->assertSee('Nguyễn Công Thuận');
        $response->assertSee('Tác giả chuyên gia (E-E-A-T)');
        $response->assertSee('Tóm tắt giải pháp nhanh (AEO Key Takeaways)');
    }

    public function test_strategic_article_2_returns_ok_with_banking_security(): void
    {
        $response = $this->get('/ve-huong-son/tin-tuc/giai-phap-cho-thue-may-photocopy-bao-mat-ngan-hang-doanh-nghiep');
        $response->assertOk();
        $response->assertSee('DoD 5220.22-M');
        $response->assertSee('Vietcombank');
        $response->assertSee('Nguyễn Công Thuận');
    }

    public function test_strategic_article_3_returns_ok_with_flat_world_tco(): void
    {
        $response = $this->get('/ve-huong-son/tin-tuc/chuyen-dich-mo-hinh-tu-ban-may-sang-cho-thue-va-dich-vu-tron-goi');
        $response->assertOk();
        $response->assertSee('thế giới phẳng');
        $response->assertSee('TCO');
        $response->assertSee('SLA 4-Tier');
    }

    public function test_strategic_article_4_returns_ok_with_circular_02_and_moet(): void
    {
        $response = $this->get('/ve-huong-son/tin-tuc/quy-trinh-so-hoa-tai-lieu-thong-tu-02-va-hoc-ba-dien-tu-moet');
        $response->assertOk();
        $response->assertSee('Thông tư 02/2019/TT-BNV');
        $response->assertSee('fi-8170');
        $response->assertSee('học bạ điện tử');
    }

    public function test_strategic_article_5_returns_ok_with_duplo_dfc(): void
    {
        $response = $this->get('/ve-huong-son/tin-tuc/giai-phap-may-phoi-trang-gap-ghim-tu-dong-duplo-dfc-hoan-thien-sau-in');
        $response->assertOk();
        $response->assertSee('Duplo DFC');
        $response->assertSee('Gập Ghim');
        $response->assertSee('Nguyễn Công Thuận');
    }

    public function test_strategic_article_30_deacidification_returns_ok_with_deep_content(): void
    {
        $response = $this->get('/ve-huong-son/tin-tuc/quy-trinh-khu-axit-lam-phang-va-bao-quan-tai-lieu-giay-truoc-khi-scan');
        $response->assertOk();
        $response->assertSee('Quy Trình Khử Axit, Làm Phẳng &amp; Vệ Sinh Tài Liệu Giấy Cũ', false);
        $response->assertSee('AEO Direct Answer');
        $response->assertSee('1. Bản Chất Khoa Học');
        $response->assertSee('Máy scan văn phòng thông thường');
        $response->assertSee('Thông tư 02/2019/TT-BNV');
        $response->assertSee('Nguyễn Công Thuận');
        $response->assertSee('GEO Local Authority Card');
    }

    public function test_all_32_strategic_articles_return_ok(): void
    {
        $jsonPath = base_path('scripts/articles/strategic_posts.json');
        $postsData = json_decode(file_get_contents($jsonPath), true);
        $this->assertCount(32, $postsData);

        foreach ($postsData as $p) {
            $slug = $p['slug'];
            $res = $this->get("/ve-huong-son/tin-tuc/{$slug}");
            $res->assertOk();
            $res->assertSee($p['title']);
            $res->assertSee('Nguyễn Công Thuận');

            $aliasRes = $this->get("/tin-tuc/{$slug}");
            $aliasRes->assertOk();
        }
    }
}
