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
            [
                'name' => 'DUPLO (Nhật Bản)',
                'description' => 'Thương hiệu máy in nhân bản siêu tốc và thiết bị hoàn thiện sau in hàng đầu Nhật Bản.',
                'image_url' => '/assets/images/brand/logo-huong-son.svg',
                'is_active' => true,
            ]
        );

        $brandToshiba = Brand::query()->updateOrCreate(
            ['slug' => 'toshiba'],
            [
                'name' => 'TOSHIBA',
                'description' => 'Máy photocopy đa chức năng A3/A4, độ bền vượt trội và chi phí bản chụp tối ưu.',
                'image_url' => '/assets/images/brand/logo-huong-son.svg',
                'is_active' => true,
            ]
        );

        $brandHP = Brand::query()->updateOrCreate(
            ['slug' => 'hp'],
            [
                'name' => 'HP',
                'description' => 'Máy in laser đơn năng và đa chức năng tốc độ cao cho khối doanh nghiệp.',
                'image_url' => '/assets/images/brand/logo-huong-son.svg',
                'is_active' => true,
            ]
        );

        $brandFansipan = Brand::query()->updateOrCreate(
            ['slug' => 'fansipan'],
            [
                'name' => 'FANSIPAN',
                'description' => 'Nhãn hiệu mực in, cụm sấy, linh kiện tiêu hao độc quyền phân phối bởi Hương Sơn.',
                'image_url' => '/assets/images/brand/logo-huong-son.svg',
                'is_active' => true,
            ]
        );

        $brandKonica = Brand::query()->updateOrCreate(
            ['slug' => 'konica-minolta'],
            [
                'name' => 'KONICA MINOLTA',
                'description' => 'Dòng máy in và máy photocopy công nghiệp màu chất lượng cao.',
                'image_url' => '/assets/images/brand/logo-huong-son.svg',
                'is_active' => true,
            ]
        );

        $brandRicoh = Brand::query()->updateOrCreate(
            ['slug' => 'ricoh'],
            [
                'name' => 'RICOH',
                'description' => 'Thiết bị in ấn, sao chụp và số hóa văn phòng hiện đại.',
                'image_url' => '/assets/images/brand/logo-huong-son.svg',
                'is_active' => true,
            ]
        );

        // 2. Categories
        $catPhotocopy = Category::query()->updateOrCreate(
            ['slug' => 'photocopy-may-da-chuc-nang'],
            [
                'name' => ['vi' => 'Máy Photocopy & Đa Chức Năng', 'en' => 'Photocopiers & Multifunction'],
                'description' => ['vi' => 'Máy photocopy đa chức năng A3/A4 Toshiba, Konica Minolta chính hãng, phục vụ văn phòng và in ấn.', 'en' => 'Multifunction A3/A4 photocopiers Toshiba, Konica Minolta.'],
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

        $catConsumables = Category::query()->updateOrCreate(
            ['slug' => 'vat-tu-linh-kien-tieu-hao'],
            [
                'name' => ['vi' => 'Vật Tư & Linh Kiện Tiêu Hao', 'en' => 'Consumables & Spare Parts'],
                'description' => ['vi' => 'Master in Duplo, mực in nhân bản, mực photocopy, linh kiện thay thế chính hãng.', 'en' => 'Duplo master, ink and genuine spare parts.'],
                'image_url' => '/assets/images/products/vat-tu-linh-kien-tieu-hao.jpg',
                'sort_order' => 7,
                'is_active' => true,
            ]
        );

        $catClassroom = Category::query()->updateOrCreate(
            ['slug' => 'thiet-bi-phong-hoc-giao-duc'],
            [
                'name' => ['vi' => 'Thiết Bị Phòng Học & Giáo Dục', 'en' => 'Classroom & Education Equipment'],
                'description' => ['vi' => 'Màn hình tương tác, máy chiếu, âm thanh trợ giảng trường học.', 'en' => 'Interactive screens and education tech.'],
                'image_url' => '/assets/images/products/thiet-bi-phong-hoc-giao-duc.jpg',
                'sort_order' => 8,
                'is_active' => true,
            ]
        );

        $catOffice = Category::query()->updateOrCreate(
            ['slug' => 'thiet-bi-van-phong-hoi-hop'],
            [
                'name' => ['vi' => 'Thiết Bị Văn Phòng & Hội Họp', 'en' => 'Office & Meeting Equipment'],
                'description' => ['vi' => 'Máy hủy tài liệu, máy đóng chứng từ, thiết bị phòng họp trực tuyến.', 'en' => 'Shredders and conference systems.'],
                'image_url' => '/assets/images/products/thiet-bi-van-phong-hoi-hop.jpg',
                'sort_order' => 9,
                'is_active' => true,
            ]
        );

        // 3. Products
        Product::query()->updateOrCreate(
            ['slug' => 'duplo-dp-x550'],
            [
                'category_id' => $catDuplo->id,
                'brand_id' => $brandDuplo->id,
                'name' => ['vi' => 'Máy In Nhân Bản Siêu Tốc DUPLO DP-X550 (B4)', 'en' => 'DUPLO DP-X550 Digital Duplicator (B4)'],
                'sku' => 'DUPLO-DP-X550',
                'short_description' => ['vi' => 'Khổ B4, độ phân giải 300x600 dpi, tốc độ 130 trang/phút. Lựa chọn tiêu chuẩn cho các trường học và điểm in đề thi.', 'en' => 'B4 duplicator, 130 ppm, ideal for school exam printing.'],
                'description' => ['vi' => '<p>Máy in nhân bản siêu tốc <strong>DUPLO DP-X550</strong> sản xuất tại Nhật Bản, thiết kế chuyên biệt cho việc in số lượng lớn với chi phí bản in cực thấp. Tốc độ in lên tới 130 trang/phút, xử lý linh hoạt các khổ giấy từ B4 trở xuống.</p><p>Hệ thống nạp giấy thông minh, bảng điều khiển LCD trực quan giúp giáo viên và cán bộ vận hành dễ dàng thực hiện in sao đề thi, biểu mẫu, tài liệu bài giảng trong thời gian ngắn nhất.</p>', 'en' => '<p>DUPLO DP-X550 digital duplicator made in Japan, designed for high volume low cost printing.</p>'],
                'price' => 0,
                'stock_quantity' => 15,
                'image_url' => '/assets/images/products/duplo-dp-x550.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 1,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'duplo-dp-x650'],
            [
                'category_id' => $catDuplo->id,
                'brand_id' => $brandDuplo->id,
                'name' => ['vi' => 'Máy In Nhân Bản Siêu Tốc DUPLO DP-X650 (A3)', 'en' => 'DUPLO DP-X650 Digital Duplicator (A3)'],
                'sku' => 'DUPLO-DP-X650',
                'short_description' => ['vi' => 'Khổ A3 chuẩn, độ phân giải 300x600 dpi, tốc độ 150 trang/phút. Chuyên dụng cho hội đồng in sao đề thi và văn phòng lớn.', 'en' => 'A3 duplicator, 150 ppm for high volume printing.'],
                'description' => ['vi' => '<p><strong>DUPLO DP-X650</strong> là dòng máy in nhân bản khổ A3 cao cấp nhất của Duplo, đạt công suất ấn tượng 150 trang/phút. Độ phân giải 300x600 dpi cho chữ in sắc nét, không bị nhòe mực khi in liên tục hàng chục nghìn trang.</p><p>Được tin dùng tại hàng trăm Hội đồng thi THPT Quốc gia, Sở Giáo dục & Đào tạo, các trường đại học và cơ quan hành chính trên cả nước.</p>', 'en' => '<p>DUPLO DP-X650 A3 high-capacity duplicator for major institutions and exam boards.</p>'],
                'price' => 0,
                'stock_quantity' => 10,
                'image_url' => '/assets/images/products/duplo-dp-x650.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 2,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'duplo-dfc-122'],
            [
                'category_id' => $catDuplo->id,
                'brand_id' => $brandDuplo->id,
                'name' => ['vi' => 'Máy Phối Trang 12 Khay DUPLO DFC-122', 'en' => 'DUPLO DFC-122 12-Bin Friction Collator'],
                'sku' => 'DUPLO-DFC-122',
                'short_description' => ['vi' => 'Hệ thống 12 khay phối trang ma sát, lập trình thông minh, phối 4.200 bộ/giờ. Hoàn thiện tài liệu in đề thi, tập bài giảng.', 'en' => '12-bin friction collator, 4200 sets/hour.'],
                'description' => ['vi' => '<p>Hệ thống máy phối trang 12 khay <strong>DUPLO DFC-122</strong> giúp tự động gom và sắp xếp các trang tài liệu theo thứ tự chính xác tuyệt đối. Cảm biến thông minh phát hiện ngay lập tức tình trạng kẹt giấy, lấy trang đôi hoặc hết giấy.</p><p>Kết nối hoàn hảo với máy dập ghim tự động để tạo thành dây chuyền hoàn thiện tài liệu, đề thi và sách bài tập khép kín.</p>', 'en' => '<p>High efficiency 12-bin collator with auto error detection.</p>'],
                'price' => 0,
                'stock_quantity' => 8,
                'image_url' => '/assets/images/products/duplo-dfc-122.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 3,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'toshiba-e-studio-2329a'],
            [
                'category_id' => $catPhotocopy->id,
                'brand_id' => $brandToshiba->id,
                'name' => ['vi' => 'Máy Photocopy Đa Chức Năng TOSHIBA e-STUDIO 2329A', 'en' => 'TOSHIBA e-STUDIO 2329A Multifunction Copier'],
                'sku' => 'TOSHIBA-2329A',
                'short_description' => ['vi' => 'Đa chức năng A3 (Copy, In mạng, Scan màu), 23 trang/phút. Phù hợp văn phòng và cơ quan hành chính.', 'en' => 'A3 MFP, 23 ppm, network printing and color scan.'],
                'description' => ['vi' => '<p><strong>TOSHIBA e-STUDIO 2329A</strong> là giải pháp photocopy và in ấn đa nhiệm hoàn hảo cho văn phòng vừa và nhỏ. Thiết kế nhỏ gọn, vận hành êm ái, hỗ trợ kết nối mạng LAN để chia sẻ in ấn cho toàn bộ phòng ban.</p>', 'en' => '<p>Compact A3 monochrome multifunction system.</p>'],
                'price' => 0,
                'stock_quantity' => 20,
                'image_url' => '/assets/images/products/toshiba-e-studio-2329a.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 4,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'toshiba-e-studio-2829a'],
            [
                'category_id' => $catPhotocopy->id,
                'brand_id' => $brandToshiba->id,
                'name' => ['vi' => 'Máy Photocopy Đa Chức Năng TOSHIBA e-STUDIO 2829A', 'en' => 'TOSHIBA e-STUDIO 2829A Multifunction Copier'],
                'sku' => 'TOSHIBA-2829A',
                'short_description' => ['vi' => 'Đa chức năng A3, tốc độ 28 trang/phút, tự động đảo mặt 2 chiều (RADF). Chuyên dụng cho doanh nghiệp và trường học.', 'en' => 'A3 MFP, 28 ppm, automatic duplex standard.'],
                'description' => ['vi' => '<p>Dòng máy photocopy A3 chuyên nghiệp <strong>TOSHIBA e-STUDIO 2829A</strong> trang bị sẵn bộ nạp và đảo bản gốc tự động (RADF) cùng bộ đảo mặt bản sao (Duplex), giúp tăng năng suất sao chụp và tiết kiệm 50% lượng giấy in tiêu thụ.</p>', 'en' => '<p>High-reliability A3 copier with duplex features.</p>'],
                'price' => 0,
                'stock_quantity' => 18,
                'image_url' => '/assets/images/products/toshiba-e-studio-2829a.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 5,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'hp-laserjet-pro-mfp-m4103fdw'],
            [
                'category_id' => $catLaser->id,
                'brand_id' => $brandHP->id,
                'name' => ['vi' => 'Máy In Laser Đa Năng HP LaserJet Pro MFP M4103fdw', 'en' => 'HP LaserJet Pro MFP M4103fdw Printer'],
                'sku' => 'HP-M4103FDW',
                'short_description' => ['vi' => 'In, Scan, Copy, Fax hai mặt tự động, WiFi, tốc độ 40 trang/phút. Giải pháp in laser văn phòng tốc độ cao.', 'en' => 'Multifunction laser printer 40 ppm with WiFi.'],
                'description' => ['vi' => '<p><strong>HP LaserJet Pro MFP M4103fdw</strong> mang đến tốc độ in vượt trội 40 trang/phút, tích hợp bảo mật HP Wolf Pro Security và khả năng kết nối WiFi băng tần kép không dây tiện lợi.</p>', 'en' => '<p>Fast, secure, and smart laser printer for modern teams.</p>'],
                'price' => 0,
                'stock_quantity' => 25,
                'image_url' => '/assets/images/products/hp-laserjet-pro-mfp-m4103fdw.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 6,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'goi-thue-may-in-de-thi-giao-duc'],
            [
                'category_id' => $catEduSolutions->id,
                'brand_id' => $brandDuplo->id,
                'name' => ['vi' => 'Gói Cho Thuê Thiết Bị In Sao Đề Thi (HƯƠNG SƠN EDUCATION SOLUTIONS)', 'en' => 'Exam Printing Equipment Rental Package'],
                'sku' => 'HS-EDU-EXAM',
                'short_description' => ['vi' => 'Dịch vụ trọn gói máy in nhân bản siêu tốc Duplo, máy phối trang và kỹ thuật viên túc trực 24/7 trong suốt kỳ thi.', 'en' => 'All-inclusive exam printing equipment rental package with 24/7 on-site technicians.'],
                'description' => ['vi' => '<p>Giải pháp toàn diện cho các Sở GD&ĐT, Phòng GD&ĐT và Hội đồng thi: cung cấp dàn máy in nhân bản DUPLO đời mới, vật tư mực master chính hãng dự phòng 100%, cùng đội ngũ kỹ sư bảo mật túc trực tại điểm in cách ly.</p>', 'en' => '<p>Comprehensive exam printing package for education departments.</p>'],
                'price' => 0,
                'stock_quantity' => 50,
                'image_url' => '/assets/images/products/duplo-dp-x650.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 7,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'may-scan-so-hoa-tai-lieu-toc-do-cao'],
            [
                'category_id' => $catScan->id,
                'brand_id' => $brandRicoh->id,
                'name' => ['vi' => 'Máy Scan Số Hóa Tài Liệu Tốc Độ Cao Khổ A4/A3', 'en' => 'High Speed Document Scanner A4/A3'],
                'sku' => 'SCAN-RICOH-80',
                'short_description' => ['vi' => 'Tốc độ 80 tờ/phút (160 ảnh/phút), cảm biến phát hiện giấy kép siêu âm, hỗ trợ OCR nhận diện tiếng Việt chính xác.', 'en' => 'High speed dual scan 80 ppm with OCR.'],
                'description' => ['vi' => '<p>Thiết bị scan chuyên nghiệp phục vụ dự án số hóa hồ sơ cán bộ, học bạ điện tử, hồ sơ lưu trữ nhà nước và hồ sơ tín dụng ngân hàng.</p>', 'en' => '<p>Professional digitization scanner for government and banking.</p>'],
                'price' => 0,
                'stock_quantity' => 12,
                'image_url' => '/assets/images/products/may-scan-so-hoa.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 8,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'muc-in-cum-trong-fansipan-cao-cap'],
            [
                'category_id' => $catFansipan->id,
                'brand_id' => $brandFansipan->id,
                'name' => ['vi' => 'Mực In & Cụm Trống FANSIPAN Tiêu Chuẩn Cao Cấp', 'en' => 'FANSIPAN Premium Toner & Drum Units'],
                'sku' => 'FANSIPAN-PREMIUM',
                'short_description' => ['vi' => 'Vật tư mực in tương thích chất lượng cao độc quyền Hương Sơn, độ phủ chuẩn, bảo vệ trống gạt và tiết kiệm 40% chi phí.', 'en' => 'High quality compatible toner and drum units.'],
                'description' => ['vi' => '<p>Thương hiệu <strong>FANSIPAN</strong> do Hương Sơn độc quyền phân phối, mang lại độ đen bóng đậm nét, không tạo bột rơi vãi và bảo vệ tối đa độ bền của linh kiện máy in, máy photocopy.</p>', 'en' => '<p>FANSIPAN premium consumable products.</p>'],
                'price' => 0,
                'stock_quantity' => 500,
                'image_url' => '/assets/images/products/muc-in-fansipan.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 9,
            ]
        );

        // 4. Post Categories & Posts
        $postCatNews = PostCategory::query()->updateOrCreate(
            ['slug' => 'tin-tuc'],
            [
                'name' => ['vi' => 'Tin Tức & Sự Kiện', 'en' => 'News & Events'],
                'description' => ['vi' => 'Các hoạt động, sự kiện chuyển giao công nghệ và bàn giao thiết bị của Hương Sơn.', 'en' => 'Company news and technology updates.'],
                'is_active' => true,
            ]
        );

        $postCatKnowledge = PostCategory::query()->updateOrCreate(
            ['slug' => 'kien-thuc'],
            [
                'name' => ['vi' => 'Kiến Thức Chuyên Ngành', 'en' => 'Industry Knowledge'],
                'description' => ['vi' => 'Cẩm nang kỹ thuật, kinh nghiệm vận hành in ấn và so sánh giải pháp số hóa.', 'en' => 'Technical guides and printing insights.'],
                'is_active' => true,
            ]
        );

        // Posts
        Post::query()->updateOrCreate(
            ['slug' => 'huong-son-ban-giao-he-thong-in-de-thi-thpt-quoc-gia-2026'],
            [
                'category_id' => $postCatNews->id,
                'title' => ['vi' => 'Hương Sơn hoàn tất bàn giao & vận hành hệ thống máy in DUPLO cho kỳ thi THPT', 'en' => 'Huong Son completes delivery of DUPLO exam printing systems for National High School Exam'],
                'content' => [
                    'vi' => '<p>Tháng 06/2026, Công ty TNHH TM & DV Hương Sơn đã hoàn tất công tác lắp đặt, kiểm định và bàn giao hệ thống máy in nhân bản siêu tốc <strong>DUPLO DP-X650</strong> cùng máy phối trang 12 khay <strong>DUPLO DFC-122</strong> phục vụ Hội đồng in sao đề thi tại nhiều tỉnh thành miền Bắc và miền Trung.</p><p>Với yêu cầu nghiêm ngặt về tính bảo mật và tốc độ, toàn bộ hệ thống đã hoạt động liên tục 24/24 dưới sự giám sát của đội ngũ kỹ sư Hương Sơn, đảm bảo 100% đề thi sắc nét, đúng tiến độ và an toàn tuyệt đối.</p>',
                    'en' => '<p>Huong Son successfully delivers and operates Duplo digital duplicators for the 2026 National High School Exam boards.</p>'
                ],
                'is_active' => true,
                'published_at' => now()->subDays(5),
            ]
        );

        Post::query()->updateOrCreate(
            ['slug' => 'ra-mat-chuong-trinh-huong-son-education-solutions'],
            [
                'category_id' => $postCatNews->id,
                'title' => ['vi' => 'Chính thức triển khai giải pháp HƯƠNG SƠN EDUCATION SOLUTIONS cho khối trường học', 'en' => 'Official launch of HUONG SON EDUCATION SOLUTIONS for schools and academic institutions'],
                'content' => [
                    'vi' => '<p>Nhằm đồng hành cùng các trường học trong công cuộc chuyển đổi số, Hương Sơn chính thức giới thiệu gói giải pháp <strong>HƯƠNG SƠN EDUCATION SOLUTIONS</strong>.</p><p>Gói giải pháp bao gồm: Cho thuê máy photocopy chuẩn giáo dục, hệ thống máy in siêu tốc phục vụ thi cử, thiết bị scan số hóa học bạ điện tử và dịch vụ bảo trì định kỳ trọn gói không phát sinh chi phí linh kiện.</p>',
                    'en' => '<p>Huong Son Education Solutions offers all-in-one equipment and digitization packages for educational institutions.</p>'
                ],
                'is_active' => true,
                'published_at' => now()->subDays(12),
            ]
        );

        Post::query()->updateOrCreate(
            ['slug' => 'kinh-nghiem-chon-may-in-de-thi-tot-nghiep-thpt'],
            [
                'category_id' => $postCatKnowledge->id,
                'title' => ['vi' => 'Kinh nghiệm chọn máy in nhân bản và phương án dự phòng cho hội đồng in sao đề thi', 'en' => 'Best practices for exam printing duplicators and redundancy plans'],
                'content' => [
                    'vi' => '<p>Công tác in sao đề thi đòi hỏi tốc độ in cực cao (từ 130 trang/phút trở lên) cùng độ ổn định không được phép xảy ra sự cố gián đoạn trong khu vực cách ly 3 vòng.</p><p>Khi lựa chọn thiết bị, các đơn vị cần ưu tiên dòng máy in nhân bản công nghệ Master chất lượng cao như DUPLO DP-X550 / DP-X650, chuẩn bị đầy đủ mực in và master dự phòng, đồng thời bố trí máy dự phòng 1:1 để đảm bảo quy trình thông suốt.</p>',
                    'en' => '<p>Technical specifications and redundancy plans for high-stake exam printing operations.</p>'
                ],
                'is_active' => true,
                'published_at' => now()->subDays(20),
            ]
        );

        Post::query()->updateOrCreate(
            ['slug' => 'so-sanh-chi-phi-tco-mua-hay-thue-may-photocopy'],
            [
                'category_id' => $postCatKnowledge->id,
                'title' => ['vi' => 'So sánh chi phí TCO: Doanh nghiệp và trường học nên mua hay thuê máy photocopy?', 'en' => 'TCO Comparison: Should businesses and schools buy or rent photocopiers?'],
                'content' => [
                    'vi' => '<p>Bài toán chi phí sở hữu (Total Cost of Ownership - TCO) giữa việc mua đứt và thuê máy photocopy là mối quan tâm hàng đầu của các nhà quản lý tài chính.</p><p>Khi thuê máy photocopy tại Hương Sơn, đơn vị không cần bỏ vốn đầu tư ban đầu, được miễn phí toàn bộ mực in, linh kiện thay thế và chi phí bảo trì kỹ thuật, giúp tối ưu hóa ngân sách vận hành lên tới 35% mỗi năm.</p>',
                    'en' => '<p>Comprehensive TCO comparison between purchasing and renting office photocopiers.</p>'
                ],
                'is_active' => true,
                'published_at' => now()->subDays(28),
            ]
        );

        // 5. Site Settings
        $settings = [
            'shop_name' => 'CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ HƯƠNG SƠN',
            'logo_url' => '/assets/images/brand/HUONG_SON_logo.svg',
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
