<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProjectSetting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HuongSonSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Categories
        $categories = [
            [
                'slug' => 'photocopy-may-da-chuc-nang',
                'name' => ['vi' => 'Máy Photocopy & Đa Chức Năng', 'en' => 'Photocopiers & Multifunction'],
                'description' => ['vi' => 'Máy photocopy đa chức năng A3/A4 Toshiba, Konica Minolta chính hãng.', 'en' => 'Multifunction A3/A4 photocopiers Toshiba, Konica Minolta.'],
                'sort_order' => 1,
            ],
            [
                'slug' => 'may-in-nhan-ban-toc-do-cao',
                'name' => ['vi' => 'Máy In Nhân Bản Siêu Tốc (Duplo)', 'en' => 'High-Speed Duplicators (Duplo)'],
                'description' => ['vi' => 'Dòng máy in nhân bản siêu tốc Duplo Nhật Bản tốc độ 130–150 trang/phút, chuyên dụng cho in đề thi, biểu mẫu.', 'en' => 'Duplo high-speed duplicators for exam printing.'],
                'sort_order' => 2,
            ],
            [
                'slug' => 'may-in-laser',
                'name' => ['vi' => 'Máy In Laser Văn Phòng', 'en' => 'Office Laser Printers'],
                'description' => ['vi' => 'Máy in laser đơn năng và đa chức năng tốc độ cao HP, Canon.', 'en' => 'High-speed laser printers.'],
                'sort_order' => 3,
            ],
            [
                'slug' => 'may-scan-so-hoa',
                'name' => ['vi' => 'Máy Scan & Số Hóa Tài Liệu', 'en' => 'Document Scanners & Digitization'],
                'description' => ['vi' => 'Thiết bị scan tốc độ cao, scan chuyên dụng 2 mặt phục vụ số hóa hồ sơ giáo dục, cơ quan nhà nước.', 'en' => 'High speed scanners for document digitization.'],
                'sort_order' => 4,
            ],
            [
                'slug' => 'may-phoi-trang-hoan-thien-sau-in',
                'name' => ['vi' => 'Máy Phối Trang & Hoàn Thiện Sau In', 'en' => 'Collators & Finishing Equipment'],
                'description' => ['vi' => 'Máy phối trang Duplo DFC series, máy dập ghim gập đôi hoàn thiện tài liệu sau in.', 'en' => 'Collators and booklet makers.'],
                'sort_order' => 5,
            ],
            [
                'slug' => 'fansipan',
                'name' => ['vi' => 'Mực & Linh Kiện FANSIPAN', 'en' => 'FANSIPAN Toners & Spare Parts'],
                'description' => ['vi' => 'Thương hiệu mực, cụm trống, linh kiện tiêu hao nhãn riêng FANSIPAN độc quyền bởi Hương Sơn.', 'en' => 'FANSIPAN toners, drums and parts.'],
                'sort_order' => 6,
            ],
            [
                'slug' => 'vat-tu-linh-kien-tieu-hao',
                'name' => ['vi' => 'Vật Tư & Linh Kiện Tiêu Hao', 'en' => 'Consumables & Spare Parts'],
                'description' => ['vi' => 'Master in Duplo, mực in nhân bản, mực photocopy, linh kiện thay thế chính hãng.', 'en' => 'Duplo master, ink and genuine spare parts.'],
                'sort_order' => 7,
            ],
            [
                'slug' => 'thiet-bi-phong-hoc-giao-duc',
                'name' => ['vi' => 'Thiết Bị Phòng Học & Giáo Dục', 'en' => 'Classroom & Education Equipment'],
                'description' => ['vi' => 'Màn hình tương tác, máy chiếu, âm thanh trợ giảng trường học.', 'en' => 'Interactive screens and education tech.'],
                'sort_order' => 8,
            ],
            [
                'slug' => 'thiet-bi-van-phong-hoi-hop',
                'name' => ['vi' => 'Thiết Bị Văn Phòng & Hội Họp', 'en' => 'Office & Meeting Equipment'],
                'description' => ['vi' => 'Máy hủy tài liệu, máy đóng chứng từ, thiết bị phòng họp trực tuyến.', 'en' => 'Shredders and conference systems.'],
                'sort_order' => 9,
            ],
        ];

        foreach ($categories as $catData) {
            Category::query()->updateOrCreate(
                ['slug' => $catData['slug']],
                [
                    'name' => $catData['name'],
                    'description' => $catData['description'],
                    'is_active' => true,
                    'sort_order' => $catData['sort_order'],
                ]
            );
        }

        // 2. Settings
        $settings = [
            'shop_name' => 'CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ HƯƠNG SƠN',
            'logo_url' => '/assets/images/brand/logo-huong-son.svg',
            'favicon_url' => '/assets/images/brand/favicon.svg',
            'contact' => [
                'phone' => '024 3972 9484',
                'email' => 'info@huongsonco.com.vn',
                'address' => 'Số 27, ngõ 523 phố Minh Khai, phường Vĩnh Tuy, TP. Hà Nội',
            ],
            'theme' => [
                'primary_color' => '#1f7c45',
                'layout' => 'default',
            ],
            'seo' => [
                'title' => 'Hương Sơn – Giải pháp thiết bị, in ấn, số hóa và dịch vụ',
                'description' => 'Chuyên cung cấp máy in siêu tốc Duplo, máy photocopy Toshiba, scan số hóa tài liệu cho Cơ quan Nhà nước, Giáo dục, Ngân hàng và Doanh nghiệp.',
            ],
        ];

        foreach ($settings as $key => $value) {
            ProjectSetting::query()->updateOrCreate(
                ['setting_key' => $key],
                ['setting_value' => $value, 'updated_at' => now()]
            );
        }
    }
}
