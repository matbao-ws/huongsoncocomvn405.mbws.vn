<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Product;
use App\Models\ProjectSetting;
use Illuminate\Database\Seeder;

class HuongSonSeeder extends Seeder
{
    use \Database\Seeders\Concerns\ClearsLocalizedSlugs;

    public function run(): void
    {
        // 1. Brands
        $brandDuplo = Brand::query()->updateOrCreate(
            ['slug' => 'duplo'],
            ['name' => 'DUPLO (Nhật Bản)', 'description' => 'Thương hiệu máy in nhân bản siêu tốc và thiết bị hoàn thiện sau in hàng đầu Nhật Bản.', 'is_active' => true]
        );

        $brandToshiba = Brand::query()->updateOrCreate(
            ['slug' => 'toshiba'],
            ['name' => 'TOSHIBA', 'description' => 'Máy photocopy đa chức năng, độ bền vượt trội và chi phí bản chụp tối ưu.', 'is_active' => true]
        );

        $brandHP = Brand::query()->updateOrCreate(
            ['slug' => 'hp'],
            ['name' => 'HP', 'description' => 'Máy in laser đơn năng và đa chức năng tốc độ cao cho văn phòng.', 'is_active' => true]
        );

        $brandFansipan = Brand::query()->updateOrCreate(
            ['slug' => 'fansipan'],
            ['name' => 'FANSIPAN', 'description' => 'Nhãn hiệu mực in, linh kiện tiêu hao độc quyền phân phối bởi Hương Sơn.', 'is_active' => true]
        );

        $brandKonica = Brand::query()->updateOrCreate(
            ['slug' => 'konica-minolta'],
            ['name' => 'KONICA MINOLTA', 'description' => 'Dòng máy in và máy photocopy công nghiệp chất lượng cao.', 'is_active' => true]
        );

        $brandRicoh = Brand::query()->updateOrCreate(
            ['slug' => 'ricoh'],
            ['name' => 'RICOH', 'description' => 'Thiết bị in ấn và số hóa văn phòng hiện đại.', 'is_active' => true]
        );

        // 2. Categories
        $catPhotocopy = Category::query()->updateOrCreate(
            ['slug' => 'photocopy-may-da-chuc-nang'],
            [
                'name' => ['vi' => 'Máy Photocopy & Đa Chức Năng', 'en' => 'Photocopiers & Multifunction'],
                'description' => ['vi' => 'Máy photocopy đa chức năng A3/A4 Toshiba, Konica Minolta chính hãng.', 'en' => 'Multifunction A3/A4 photocopiers Toshiba, Konica Minolta.'],
                'image_url' => '/assets/images/products/toshiba-e-studio-2829a.jpg',
                'sort_order' => 1,
                'is_active' => true,
            ]
        );

        $catDuplo = Category::query()->updateOrCreate(
            ['slug' => 'may-in-nhan-ban-toc-do-cao'],
            [
                'name' => ['vi' => 'Máy In Nhân Bản & Hoàn Thiện Sau In', 'en' => 'Duplicators & Finishing Equipment'],
                'description' => ['vi' => 'Dòng máy in nhân bản siêu tốc Duplo Nhật Bản (130–150 trang/phút) và máy phối trang dập ghim hoàn thiện sau in.', 'en' => 'Duplo high-speed duplicators and friction collators.'],
                'image_url' => '/assets/images/products/duplo-dp-x550.jpg',
                'sort_order' => 2,
                'is_active' => true,
            ]
        );

        $catEduSolutions = Category::query()->updateOrCreate(
            ['slug' => 'cho-thue-thiet-bi-giao-duc'],
            [
                'name' => ['vi' => 'Cho Thuê Thiết Bị Giáo Dục (HƯƠNG SƠN EDUCATION SOLUTIONS)', 'en' => 'Education Solutions (Rental & Tech)'],
                'description' => ['vi' => 'Gói giải pháp trọn gói cho khối Giáo dục: thuê máy in đề thi bí mật, thuê máy photocopy trường học, số hóa học bạ và thiết bị phòng học.', 'en' => 'All-in-one educational equipment rental and digitization solutions.'],
                'image_url' => '/assets/images/products/duplo-dp-x650.jpg',
                'sort_order' => 3,
                'is_active' => true,
            ]
        );

        $catLaser = Category::query()->updateOrCreate(
            ['slug' => 'may-in-laser'],
            [
                'name' => ['vi' => 'Máy In Laser Văn Phòng', 'en' => 'Office Laser Printers'],
                'description' => ['vi' => 'Máy in laser đơn năng và đa chức năng tốc độ cao HP, Canon.', 'en' => 'High-speed laser printers.'],
                'image_url' => '/assets/images/products/hp-laserjet-pro-mfp-m4103fdw.jpg',
                'sort_order' => 4,
                'is_active' => true,
            ]
        );

        $catScan = Category::query()->updateOrCreate(
            ['slug' => 'may-scan-so-hoa'],
            [
                'name' => ['vi' => 'Máy Scan & Số Hóa Tài Liệu', 'en' => 'Document Scanners & Digitization'],
                'description' => ['vi' => 'Thiết bị scan tốc độ cao, scan chuyên dụng 2 mặt phục vụ số hóa hồ sơ giáo dục, cơ quan nhà nước.', 'en' => 'High speed scanners for document digitization.'],
                'image_url' => '/assets/images/products/may-scan-so-hoa.jpg',
                'sort_order' => 5,
                'is_active' => true,
            ]
        );

        $catFansipan = Category::query()->updateOrCreate(
            ['slug' => 'fansipan'],
            [
                'name' => ['vi' => 'Mực & Linh Kiện FANSIPAN', 'en' => 'FANSIPAN Toners & Spare Parts'],
                'description' => ['vi' => 'Thương hiệu mực, cụm trống, linh kiện tiêu hao nhãn riêng FANSIPAN độc quyền bởi Hương Sơn.', 'en' => 'FANSIPAN toners, drums and parts.'],
                'image_url' => '/assets/images/products/muc-in-fansipan.jpg',
                'sort_order' => 6,
                'is_active' => true,
            ]
        );

        Category::query()->updateOrCreate(
            ['slug' => 'vat-tu-linh-kien-tieu-hao'],
            [
                'name' => ['vi' => 'Vật Tư & Linh Kiện Tiêu Hao', 'en' => 'Consumables & Spare Parts'],
                'description' => ['vi' => 'Master in Duplo, mực in nhân bản, mực photocopy, linh kiện thay thế chính hãng.', 'en' => 'Duplo master, ink and genuine spare parts.'],
                'sort_order' => 7,
                'is_active' => true,
            ]
        );

        Category::query()->updateOrCreate(
            ['slug' => 'thiet-bi-phong-hoc-giao-duc'],
            [
                'name' => ['vi' => 'Thiết Bị Phòng Học & Giáo Dục', 'en' => 'Classroom & Education Equipment'],
                'description' => ['vi' => 'Màn hình tương tác, máy chiếu, âm thanh trợ giảng trường học.', 'en' => 'Interactive screens and education tech.'],
                'sort_order' => 8,
                'is_active' => true,
            ]
        );

        Category::query()->updateOrCreate(
            ['slug' => 'thiet-bi-van-phong-hoi-hop'],
            [
                'name' => ['vi' => 'Thiết Bị Văn Phòng & Hội Họp', 'en' => 'Office & Meeting Equipment'],
                'description' => ['vi' => 'Máy hủy tài liệu, máy đóng chứng từ, thiết bị phòng họp trực tuyến.', 'en' => 'Shredders and conference systems.'],
                'sort_order' => 9,
                'is_active' => true,
            ]
        );

        // 3. Featured Products
        Product::query()->updateOrCreate(
            ['slug' => 'duplo-dp-x550'],
            [
                'category_id' => $catDuplo->id,
                'brand_id' => $brandDuplo->id,
                'name' => ['vi' => 'Máy In Nhân Bản Siêu Tốc DUPLO DP-X550', 'en' => 'DUPLO DP-X550 Digital Duplicator'],
                'sku' => 'DUPLO-DP-X550',
                'short_description' => ['vi' => 'Khổ B4, độ phân giải 300x600 dpi, tốc độ 130 trang/phút. Lựa chọn tiêu chuẩn cho các trường học và điểm in đề thi.', 'en' => 'B4 duplicator, 130 ppm.'],
                'description' => ['vi' => 'Dòng máy in nhân bản siêu tốc Duplo DP-X550 B4 tiêu chuẩn, bền bỉ, tiết kiệm chi phí bản in.', 'en' => 'High speed digital duplicator.'],
                'price' => 0,
                'stock_quantity' => 10,
                'image_url' => '/assets/images/products/duplo-dp-x550.jpg',
                'is_active' => true,
                'is_featured' => true,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'duplo-dp-x650'],
            [
                'category_id' => $catDuplo->id,
                'brand_id' => $brandDuplo->id,
                'name' => ['vi' => 'Máy In Nhân Bản Siêu Tốc DUPLO DP-X650 (A3)', 'en' => 'DUPLO DP-X650 Digital Duplicator (A3)'],
                'sku' => 'DUPLO-DP-X650',
                'short_description' => ['vi' => 'Khổ A3 chuẩn, độ phân giải 300x600 dpi, tốc độ 150 trang/phút. Chuyên dụng cho hội đồng in sao đề thi và văn phòng lớn.', 'en' => 'A3 duplicator, 150 ppm.'],
                'description' => ['vi' => 'Máy in nhân bản A3 công suất lớn DUPLO DP-X650 đáp ứng nhu cầu in số lượng cực lớn.', 'en' => 'A3 high capacity duplicator.'],
                'price' => 0,
                'stock_quantity' => 8,
                'image_url' => '/assets/images/products/duplo-dp-x650.jpg',
                'is_active' => true,
                'is_featured' => true,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'toshiba-e-studio-2329a'],
            [
                'category_id' => $catPhotocopy->id,
                'brand_id' => $brandToshiba->id,
                'name' => ['vi' => 'Máy Photocopy Đa Chức Năng TOSHIBA e-STUDIO 2329A', 'en' => 'TOSHIBA e-STUDIO 2329A Multifunction Copier'],
                'sku' => 'TOSHIBA-2329A',
                'short_description' => ['vi' => 'Đa chức năng A3 (Copy, In mạng, Scan màu), 23 trang/phút. Phù hợp văn phòng và cơ quan hành chính.', 'en' => 'A3 MFP, 23 ppm.'],
                'description' => ['vi' => 'Toshiba e-Studio 2329A đa chức năng hiện đại, bản in sắc nét, tiết kiệm điện năng.', 'en' => 'Multifunction copier.'],
                'price' => 0,
                'stock_quantity' => 15,
                'image_url' => '/assets/images/products/toshiba-e-studio-2329a.jpg',
                'is_active' => true,
                'is_featured' => true,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'toshiba-e-studio-2829a'],
            [
                'category_id' => $catPhotocopy->id,
                'brand_id' => $brandToshiba->id,
                'name' => ['vi' => 'Máy Photocopy Đa Chức Năng TOSHIBA e-STUDIO 2829A', 'en' => 'TOSHIBA e-STUDIO 2829A Multifunction Copier'],
                'sku' => 'TOSHIBA-2829A',
                'short_description' => ['vi' => 'Đa chức năng A3, tốc độ 28 trang/phút, tự động đảo mặt 2 chiều. Chuyên dụng cho doanh nghiệp và trường học.', 'en' => 'A3 MFP, 28 ppm, Duplex.'],
                'description' => ['vi' => 'Máy photocopy Toshiba e-Studio 2829A tốc độ cao, hỗ trợ in mạng và scan màu tiêu chuẩn.', 'en' => 'High speed Toshiba MFP.'],
                'price' => 0,
                'stock_quantity' => 12,
                'image_url' => '/assets/images/products/toshiba-e-studio-2829a.jpg',
                'is_active' => true,
                'is_featured' => true,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'hp-laserjet-pro-mfp-m4103fdw'],
            [
                'category_id' => $catLaser->id,
                'brand_id' => $brandHP->id,
                'name' => ['vi' => 'Máy In Laser Đa Năng HP LaserJet Pro MFP M4103fdw', 'en' => 'HP LaserJet Pro MFP M4103fdw Printer'],
                'sku' => 'HP-M4103FDW',
                'short_description' => ['vi' => 'In, Scan, Copy, Fax hai mặt tự động, WiFi, tốc độ 40 trang/phút. Giải pháp in laser văn phòng tốc độ cao.', 'en' => 'Multifunction laser printer 40 ppm.'],
                'description' => ['vi' => 'HP LaserJet Pro M4103fdw đa năng, kết nối không dây, in bảo mật cho doanh nghiệp.', 'en' => 'HP Laser MFP.'],
                'price' => 0,
                'stock_quantity' => 20,
                'image_url' => '/assets/images/products/hp-laserjet-pro-mfp-m4103fdw.jpg',
                'is_active' => true,
                'is_featured' => true,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'duplo-dfc-122'],
            [
                'category_id' => $catCollator->id,
                'brand_id' => $brandDuplo->id,
                'name' => ['vi' => 'Máy Phối Trang 12 Khay DUPLO DFC-122', 'en' => 'DUPLO DFC-122 12-Bin Friction Collator'],
                'sku' => 'DUPLO-DFC-122',
                'short_description' => ['vi' => 'Hệ thống 12 khay phối trang ma sát, lập trình thông minh, phối 4.200 bộ/giờ. Hoàn thiện tài liệu in đề thi, tập bài giảng.', 'en' => '12-bin collator, 4200 sets/hour.'],
                'description' => ['vi' => 'Duplo DFC-122 phối trang chính xác tuyệt đối, tích hợp cảm biến chống kẹt giấy và phát hiện trang đôi.', 'en' => 'Friction feed collator.'],
                'price' => 0,
                'stock_quantity' => 5,
                'image_url' => '/assets/images/products/duplo-dfc-122.jpg',
                'is_active' => true,
                'is_featured' => true,
            ]
        );

        // 4. Post Categories & Posts
        $postCatNews = PostCategory::query()->updateOrCreate(
            ['slug' => 'tin-tuc'],
            ['name' => ['vi' => 'Tin Tức & Sự Kiện', 'en' => 'News & Events'], 'is_active' => true]
        );

        $postCatKnowledge = PostCategory::query()->updateOrCreate(
            ['slug' => 'kien-thuc'],
            ['name' => ['vi' => 'Kiến Thức Chuyên Ngành', 'en' => 'Industry Knowledge'], 'is_active' => true]
        );

        Post::query()->updateOrCreate(
            ['slug' => 'kinh-nghiem-chon-may-in-de-thi-tot-nghiep-thpt'],
            [
                'category_id' => $postCatKnowledge->id,
                'title' => ['vi' => 'Kinh nghiệm chọn máy in nhân bản và phương án dự phòng đề thi', 'en' => 'Best practices for exam printing duplicators and redundancy plans'],
                'content' => ['vi' => 'Tổng hợp các yêu cầu kỹ thuật và phương án dự phòng khi vận hành in sao đề thi THPT, THCS và thi tuyển sinh.', 'en' => 'Technical specifications and redundancy plans for high-stake exam printing operations.'],
                'is_active' => true,
                'published_at' => now(),
            ]
        );

        // 5. Site Settings
        $settings = [
            'shop_name' => 'CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ HƯƠNG SƠN',
            'logo_url' => '/assets/images/brand/logo-huong-son.svg',
            'favicon_url' => '/assets/images/brand/favicon.svg',
            'contact' => [
                'phone' => '024 3972 9484',
                'hotlines' => '024 3972 9484 · 0913 237 302 · 091 113 8583',
                'email' => 'info@huongsonco.com.vn',
                'address' => 'Số 27, ngõ 523 phố Minh Khai, phường Vĩnh Tuy, TP. Hà Nội',
                'address_legal' => 'Số 2, ngõ 67 phố Đức Giang, tổ 21, phường Việt Hưng, quận Long Biên, TP. Hà Nội',
                'mst' => '0102759269',
                'bank_account' => '0531100329005 – MB Bank Long Biên',
            ],
            'theme' => [
                'primary_color' => '#1f7c45',
                'primary_hover' => '#176035',
                'layout' => 'default',
            ],
            'seo' => [
                'title' => 'Hương Sơn – Giải pháp thiết bị, in ấn, số hóa và dịch vụ',
                'description' => 'Đại lý ủy quyền DUPLO, TOSHIBA tại miền Bắc. Cung cấp máy in nhân bản siêu tốc, máy photocopy, scan số hóa tài liệu cho Cơ quan Nhà nước, Giáo dục, Ngân hàng và Doanh nghiệp.',
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
