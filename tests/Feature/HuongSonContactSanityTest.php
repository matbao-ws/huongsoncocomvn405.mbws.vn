<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HuongSonContactSanityTest extends TestCase
{
    use RefreshDatabase;

    private array $forbiddenStrings = [
        '0913222003',
        '0913.222.003',
        '0913 222 003',
        '0913.222003',
        'Nguyễn Phong Sắc',
        'nguyễn phong sắc',
        'Nguyen Phong Sac',
        'Trần Quang Diệu',
        'trần quang diệu',
    ];

    private array $rentalRoutes = [
        '/thue-may-photocopy-ha-noi',
        '/thue-may-in',
        '/thue-may-photocopy-truong-hoc',
        '/thue-may-photocopy-so-gd',
        '/thue-may-in-de-thi',
        '/thue-may-photocopy-ngan-hang',
    ];

    public function test_homepage_has_zero_forbidden_contacts_and_contains_official_info(): void
    {
        $response = $this->get('/');
        $response->assertOk();
        $html = $response->getContent();

        foreach ($this->forbiddenStrings as $forbidden) {
            $this->assertStringNotContainsString(
                $forbidden,
                $html,
                "Homepage contains forbidden contact/address: {$forbidden}"
            );
        }

        $this->assertStringContainsString('091.113.8583', $html);
        $this->assertStringContainsString('0912.304.058', $html);
        $this->assertStringContainsString('Số 27, ngõ 523 phố Minh Khai', $html);
        $this->assertStringContainsString('500.000 đ/tháng', $html);
        $this->assertStringContainsString('800.000 đ/tháng', $html);
    }

    public function test_all_rental_landing_pages_have_zero_forbidden_contacts(): void
    {
        foreach ($this->rentalRoutes as $route) {
            $response = $this->get($route);
            $response->assertOk();
            $html = $response->getContent();

            foreach ($this->forbiddenStrings as $forbidden) {
                $this->assertStringNotContainsString(
                    $forbidden,
                    $html,
                    "Route {$route} contains forbidden contact/address: {$forbidden}"
                );
            }

            $this->assertStringContainsString('091.113.8583', $html, "Route {$route} missing official hotline 091.113.8583");
            $this->assertStringContainsString('Số 27, ngõ 523 phố Minh Khai', $html, "Route {$route} missing official address");
        }
    }

    public function test_all_strategic_articles_in_json_have_zero_forbidden_contacts(): void
    {
        $jsonPath = base_path('scripts/articles/strategic_posts.json');
        $this->assertFileExists($jsonPath);
        $posts = json_decode(file_get_contents($jsonPath), true);
        $this->assertIsArray($posts);
        $this->assertCount(32, $posts);

        foreach ($posts as $p) {
            $content = $p['content_html'] ?? '';
            foreach ($this->forbiddenStrings as $forbidden) {
                $this->assertStringNotContainsString(
                    $forbidden,
                    $content,
                    "Post #{$p['id']} ({$p['slug']}) contains forbidden string: {$forbidden}"
                );
            }
            $this->assertStringContainsString('091.113.8583', $content, "Post #{$p['id']} missing 091.113.8583");
            $this->assertStringContainsString('Số 27, ngõ 523 phố Minh Khai', $content, "Post #{$p['id']} missing official address");
        }
    }

    public function test_tu_lieu_thuc_te_pages_return_ok_and_have_zero_forbidden_contacts(): void
    {
        $galleryRoutes = [
            '/ve-huong-son/tu-lieu-thuc-te',
            '/tin-tuc/tu-lieu-thuc-te',
        ];

        foreach ($galleryRoutes as $route) {
            $response = $this->get($route);
            $response->assertOk();
            $html = $response->getContent();

            foreach ($this->forbiddenStrings as $forbidden) {
                $this->assertStringNotContainsString(
                    $forbidden,
                    $html,
                    "Route {$route} contains forbidden contact/address: {$forbidden}"
                );
            }

            $this->assertStringContainsString('091.113.8583', $html);
            $this->assertStringContainsString('Tư liệu ảnh & video thực tế', $html);
            $this->assertStringContainsString('gallery-lightbox', $html);
            $this->assertStringContainsString('gallery-filter-tabs', $html);
        }
    }

    public function test_navigation_header_and_drawer_contain_tu_lieu_thuc_te(): void
    {
        $response = $this->get('/');
        $response->assertOk();
        $html = $response->getContent();

        $this->assertStringContainsString('/ve-huong-son/tu-lieu-thuc-te/', $html);
        $this->assertStringContainsString('Tư liệu ảnh &amp; video thực tế', $html);
    }
}

