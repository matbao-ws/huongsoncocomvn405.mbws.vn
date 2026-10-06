<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StrategicRoadmapTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test all 6 strategic rental landing pages return HTTP 200 and contain required SEO/AEO signals.
     */
    public function test_all_six_rental_landing_pages_return_ok_and_contain_schemas(): void
    {
        $rentalPages = [
            'thue-may-photocopy-ha-noi' => [
                'title' => 'Cho Thuê Máy Photocopy Tại Hà Nội',
                'service' => 'Dịch Vụ Cho Thuê Máy Photocopy Tại Hà Nội',
            ],
            'thue-may-in' => [
                'title' => 'Cho Thuê Máy In',
                'service' => 'Dịch Vụ Cho Thuê Máy In Văn Phòng Trọn Gói',
            ],
            'thue-may-photocopy-truong-hoc' => [
                'title' => 'Cho Thuê Máy Photocopy Cho Trường Học',
                'service' => 'Giải Pháp Cho Thuê Máy Photocopy Trường Học',
            ],
            'thue-may-photocopy-so-gd' => [
                'title' => 'Cho Thuê Máy Photocopy Cho Sở GD&ĐT',
                'service' => 'Dịch Vụ Thuê Máy Photocopy B2G & Sở GD&ĐT',
            ],
            'thue-may-in-de-thi' => [
                'title' => 'Cho Thuê Máy In Đề Thi',
                'service' => 'Dịch Vụ Thuê Máy In Siêu Tốc Phục Vụ Kỳ Thi',
            ],
            'thue-may-photocopy-ngan-hang' => [
                'title' => 'Cho Thuê Máy Photocopy Bảo Mật Cho Ngân Hàng',
                'service' => 'Giải Pháp Cho Thuê Máy Photocopy Bảo Mật Ngân Hàng',
            ],
        ];

        foreach ($rentalPages as $slug => $meta) {
            $response = $this->get('/' . $slug);
            $response->assertOk();
            $response->assertSee($meta['title']);
            $response->assertSee('application/ld+json', false);
            $response->assertSee('FAQPage');
            $response->assertSee('BreadcrumbList');
            $response->assertSee('LocalBusiness');
            $response->assertSee('SLA');
            $response->assertSee('Hương Sơn');
        }
    }

    /**
     * Test education hub and its 6 sub-solution pillars return HTTP 200.
     */
    public function test_education_hub_and_six_sub_solutions_return_ok(): void
    {
        $response = $this->get('/giai-phap/giao-duc');
        $response->assertOk();
        $response->assertSee('Hương Sơn Education Solutions');
        $response->assertSee('In sao đề thi siêu tốc');
        $response->assertSee('Thuê máy phục vụ kỳ thi');
        $response->assertSee('Thuê máy photocopy trường học');
        $response->assertSee('Số hóa học bạ điện tử');

        $subSolutions = [
            'in-de-thi',
            'thue-may-phuc-vu-ky-thi',
            'cho-thue-may-truong-hoc',
            'so-hoa-hoc-ba',
            'so-hoa-ho-so-truong-hoc',
            'thiet-bi-phong-hoc',
        ];

        foreach ($subSolutions as $slug) {
            $subResponse = $this->get('/giai-phap/giao-duc/' . $slug);
            $subResponse->assertOk();
            $subResponse->assertSee('Hương Sơn');
            $subResponse->assertSee('application/ld+json', false);
        }
    }

    /**
     * Test homepage displays the 3 strategic customer groups and rental hub.
     */
    public function test_homepage_highlights_three_customer_groups_and_rental_hub(): void
    {
        $response = $this->get('/');
        $response->assertOk();
        $response->assertSee('Giải Pháp May Đo Riêng Cho 3 Nhóm Khách Hàng Trọng Tâm');
        $response->assertSee('Khối Cơ Quan Nhà Nước &amp; Sở GD&amp;ĐT', false);
        $response->assertSee('Khối Doanh Nghiệp &amp; Ngân Hàng', false);
        $response->assertSee('Khối Trường Học &amp; Cơ Sở Giáo Dục', false);
        $response->assertSee('Hương Sơn Education Hub');
        $response->assertSee('6 Gói Thuê Thiết Bị Chuyên Sâu Tối Ưu TCO Cho Đơn Vị');
        $response->assertSee('/thue-may-photocopy-ha-noi/');
        $response->assertSee('/thue-may-in/');
        $response->assertSee('/thue-may-photocopy-truong-hoc/');
        $response->assertSee('/thue-may-photocopy-so-gd/');
        $response->assertSee('/thue-may-in-de-thi/');
        $response->assertSee('/thue-may-photocopy-ngan-hang/');
    }

    /**
     * Test navigation header and drawer menus have the new strategic hierarchy.
     */
    public function test_navigation_menu_hierarchy(): void
    {
        $response = $this->get('/');
        $response->assertOk();
        $response->assertSee('GIẢI PHÁP');
        $response->assertSee('CHO THUÊ &amp; DỊCH VỤ', false);
        $response->assertSee('THIẾT BỊ &amp; VẬT TƯ', false);
    }
}
