<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    use \Database\Seeders\Concerns\ClearsLocalizedSlugs;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
        Post::truncate();
        PostCategory::truncate();
        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();

        $this->clearLocalizedSlugs([Post::class, PostCategory::class]);

        $categories = [
            [
                'name' => ['vi' => 'Dự án & Triển khai', 'en' => 'Projects & Deployments'],
                'slug' => 'du-an-trien-khai',
                'description' => ['vi' => 'Các dự án thực tế bàn giao thiết bị, cho thuê máy in sao đề thi và máy photocopy cho Sở GD&ĐT, Ngân hàng và Doanh nghiệp.', 'en' => 'Real-world projects delivering equipment and rental services.'],
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'name' => ['vi' => 'Giải pháp chuyên sâu', 'en' => 'Specialized Solutions'],
                'slug' => 'giai-phap-chuyen-sau',
                'description' => ['vi' => 'Giải pháp in sao đề thi cách ly 3 vòng, cho thuê thiết bị Managed Print Services và số hóa hồ sơ lưu trữ.', 'en' => 'High-security exam printing, managed print services and document digitization.'],
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'name' => ['vi' => 'Công nghệ & Vật tư', 'en' => 'Technology & Supplies'],
                'slug' => 'cong-nghe-vat-tu',
                'description' => ['vi' => 'Kiến thức kỹ thuật về máy in siêu tốc Duplo, máy scan Ricoh và dòng mực in FANSIPAN độc quyền.', 'en' => 'Duplo duplicators, Ricoh scanners, and Fansipan compatible consumables.'],
                'is_active' => true,
                'sort_order' => 3,
            ],
        ];

        $categoryModels = [];
        foreach ($categories as $cat) {
            $categoryModels[] = PostCategory::create($cat);
        }

        $projectCat = $categoryModels[0];
        $solutionCat = $categoryModels[1];
        $techCat = $categoryModels[2];

        $posts = [
            [
                'category_id' => $projectCat->id,
                'title' => [
                    'vi' => 'Sở GD&ĐT Quảng Trị – Thuê máy in nhân bản siêu tốc Duplo 2026',
                    'en' => 'Quang Tri DOET – Digital Duplicator Rental 2026',
                ],
                'slug' => 'so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026',
                'summary' => [
                    'vi' => 'Hương Sơn hoàn tất bàn giao, lắp đặt và vận hành hệ thống máy in nhân bản siêu tốc Duplo DP-X550 phục vụ kỳ thi tuyển sinh và tốt nghiệp THPT tại Sở GD&ĐT Quảng Trị.',
                    'en' => 'Huong Son successfully deployed Duplo DP-X550 duplicators for exam printing at Quang Tri DOET.',
                ],
                'content' => [
                    'vi' => '<p>Nhằm chuẩn bị tối ưu cho kỳ thi tuyển sinh vào lớp 10 và kỳ thi tốt nghiệp THPT quốc gia năm 2026, Sở Giáo dục và Đào tạo tỉnh Quảng Trị đã ký kết hợp đồng thuê hệ thống máy in nhân bản siêu tốc công nghệ số Duplo với Công ty TNHH Thương mại và Dịch vụ Hương Sơn.</p><h2>1. Yêu cầu khắt khe của Hội đồng in sao đề thi</h2><p>Kỳ thi diễn ra trong khu vực cách ly 3 vòng độc lập nghiêm ngặt, tuyệt đối bảo mật. Thiết bị in sao phải đảm bảo tốc độ vượt trội từ 130 đến 150 trang/phút, không xảy ra sự cố dừng máy và chất lượng đồ họa sắc nét cho các bài thi môn Toán, Vật lý, Địa lý.</p><h2>2. Phương án triển khai và máy dự phòng N+1</h2><p>Hương Sơn cung cấp tổ hợp máy in Duplo DP-X550 kèm theo 1 máy dự phòng nóng cùng cấu hình (quy tắc N+1). Kỹ sư của Hương Sơn trực tiếp chấp hành lệnh cách ly, túc trực 24/24 giờ để kiểm tra bảo dưỡng và đảm bảo dây chuyền in sao vận hành liên tục không gián đoạn.</p><h2>3. Kết quả nghiệm thu thực tế</h2><p>Toàn bộ hàng triệu trang đề thi đã được in sao thành công, đóng gói bảo mật và bàn giao đúng tiến độ, nhận được đánh giá cao từ Hội đồng khảo thí Sở GD&ĐT Quảng Trị.</p>',
                    'en' => '<p>Huong Son Co., Ltd successfully deployed high-speed Duplo DP-X550 digital duplicators for Quang Tri DOET exam committee with strict security and 24/7 technical standby.</p>',
                ],
                'image_url' => '/assets/images/hero-education.jpg',
                'is_active' => true,
                'seo_title' => [
                    'vi' => 'Sở GD&ĐT Quảng Trị Thuê Máy In Nhân Bản Siêu Tốc Duplo | Hương Sơn',
                    'en' => 'Quang Tri DOET Duplo Duplicator Rental Project | Huong Son',
                ],
                'seo_description' => [
                    'vi' => 'Dự án Hương Sơn bàn giao máy in nhân bản siêu tốc Duplo DP-X550 cho Sở GD&ĐT Quảng Trị phục vụ in sao đề thi THPT an toàn bảo mật tuyệt đối.',
                    'en' => 'Huong Son delivers Duplo DP-X550 digital duplicator rental solution for Quang Tri Department of Education.',
                ],
                'seo_keys' => 'máy in nhân bản Duplo, thuê máy in đề thi, Sở GD&ĐT Quảng Trị',
                'published_at' => now(),
            ],
            [
                'category_id' => $projectCat->id,
                'title' => [
                    'vi' => 'Sở GD&ĐT Vĩnh Phúc – Thuê hệ thống máy photocopy sao in đề thi',
                    'en' => 'Vinh Phuc DOET – Exam Copier Rental System',
                ],
                'slug' => 'so-gddt-vinh-phuc-thue-may-photocopy-sao-in-de-thi',
                'summary' => [
                    'vi' => 'Dự án cung cấp và cho thuê hệ thống máy photocopy công suất lớn Toshiba và Duplo phục vụ in sao đề thi tốt nghiệp THPT tại Sở GD&ĐT Vĩnh Phúc.',
                    'en' => 'High-capacity copier and duplicator rental for Vinh Phuc DOET exam committee.',
                ],
                'content' => [
                    'vi' => '<p>Sở GD&ĐT Vĩnh Phúc là một trong những đơn vị có quy mô thí sinh dự thi tốt nghiệp THPT lớn tại miền Bắc. Hương Sơn tự hào là đối tác đồng hành cung cấp giải pháp máy in sao đề thi và máy photocopy công suất lớn phục vụ Hội đồng sao in.</p><h2>1. Quy trình chuẩn bị trước giờ G</h2><p>Trước ngày bắt đầu cách ly 7 ngày, đội ngũ kỹ thuật Hương Sơn tiến hành kiểm định tổng thể máy photocopy Toshiba e-STUDIO tốc độ 55–65 trang/phút và máy in nhân bản Duplo, thay mới toàn bộ vật tư mòn (trống drum, gạt, lô ép) và chạy thử nghiệm 50.000 bản in thực tế.</p><h2>2. Cam kết an toàn và bảo mật thông tin</h2><p>Tất cả thiết bị đều được định dạng xóa sạch bộ nhớ tạm ổ cứng trước và sau kỳ thi, có biên bản bàn giao và niêm phong cổng kết nối mạng theo đúng quy định an ninh Bộ Công an.</p>',
                    'en' => '<p>Huong Son provided high-speed Toshiba copiers and duplicators with 24/7 engineering standby for Vinh Phuc DOET.</p>',
                ],
                'image_url' => '/assets/images/hero-projects.jpg',
                'is_active' => true,
                'seo_title' => [
                    'vi' => 'Sở GD&ĐT Vĩnh Phúc Thuê Máy Photocopy Sao In Đề Thi | Hương Sơn',
                    'en' => 'Vinh Phuc DOET Copier Rental for Exam Printing | Huong Son',
                ],
                'seo_description' => [
                    'vi' => 'Hương Sơn triển khai dịch vụ cho thuê máy photocopy công suất lớn và máy in siêu tốc phục vụ sao in đề thi tốt nghiệp tại Sở GD&ĐT Vĩnh Phúc.',
                    'en' => 'Comprehensive copier and duplicator rental for exam printing at Vinh Phuc DOET.',
                ],
                'seo_keys' => 'thuê máy photocopy in đề thi, Sở GD&ĐT Vĩnh Phúc, máy in siêu tốc',
                'published_at' => now()->subDays(1),
            ],
            [
                'category_id' => $projectCat->id,
                'title' => [
                    'vi' => 'Cung cấp máy photocopy cho hệ thống Vietcombank toàn quốc',
                    'en' => 'Photocopier Supply for Vietcombank Network Nationwide',
                ],
                'slug' => 'vietcombank-cung-cap-may-photocopy',
                'summary' => [
                    'vi' => 'Hương Sơn triển khai cung cấp và bảo trì máy photocopy đa chức năng Toshiba e-STUDIO tại các chi nhánh và phòng giao dịch của Ngân hàng TMCP Ngoại thương Việt Nam (Vietcombank).',
                    'en' => 'Deployment of Toshiba multifunction copiers for Vietcombank branches nationwide.',
                ],
                'content' => [
                    'vi' => '<p>Trong các năm 2022–2024, Công ty Hương Sơn đã triển khai cung cấp các dòng máy photocopy đa chức năng Toshiba thế hệ mới cho hệ thống Ngân hàng TMCP Ngoại thương Việt Nam (Vietcombank).</p><h2>1. Yêu cầu khắt khe của khối Ngân hàng – Tài chính</h2><p>Ngân hàng đòi hỏi máy in – scan – copy phải hoạt động liên tục với công suất cao, độ bảo mật dữ liệu tuyệt đối (mã hóa chuẩn quân sự, xóa ghi đè dữ liệu ổ cứng SED HDD), và đặc biệt là thời gian phản hồi hỗ trợ kỹ thuật tận nơi phải dưới 2 giờ.</p><h2>2. Giải pháp Managed Print Services (MPS) của Hương Sơn</h2><p>Hương Sơn triển khai dịch vụ quản lý in ấn tập trung, cung cấp định kỳ mực in chính hãng và mực chất lượng cao FANSIPAN, cử kỹ thuật viên bảo dưỡng định kỳ hàng tháng, giúp Vietcombank tối ưu hóa 35% chi phí in ấn tài liệu giao dịch.</p>',
                    'en' => '<p>Huong Son delivered Toshiba copiers and managed print services for Vietcombank branches nationwide.</p>',
                ],
                'image_url' => '/assets/images/products/vietcombank-2024.jpg',
                'is_active' => true,
                'seo_title' => [
                    'vi' => 'Cung Cấp Máy Photocopy Cho Hệ Thống Vietcombank | Hương Sơn',
                    'en' => 'Supplying Photocopiers for Vietcombank Nationwide | Huong Son',
                ],
                'seo_description' => [
                    'vi' => 'Dự án cung cấp máy photocopy Toshiba e-STUDIO và dịch vụ quản lý in ấn toàn diện cho hệ thống Ngân hàng Vietcombank của Hương Sơn.',
                    'en' => 'Supplying Toshiba multifunction copiers and MPS for Vietcombank banking network.',
                ],
                'seo_keys' => 'máy photocopy ngân hàng, Vietcombank, cho thuê máy photocopy Toshiba',
                'published_at' => now()->subDays(2),
            ],
            [
                'category_id' => $solutionCat->id,
                'title' => [
                    'vi' => 'Giải pháp in sao đề thi THPT cách ly 3 vòng tuyệt đối bảo mật',
                    'en' => 'High-Security 3-Zone Exam Printing Solutions for DOET',
                ],
                'slug' => 'giai-phap-in-sao-de-thi-thpt-cach-ly-3-vong-bao-mat',
                'summary' => [
                    'vi' => 'Quy trình giải pháp in sao đề thi EXAM PRO: máy in nhân bản Duplo 130–180 ppm, phương án dự phòng nóng N+1, kỹ sư trực 24/24 trong khu vực cách ly độc lập.',
                    'en' => 'EXAM PRO printing solution with Duplo duplicators, N+1 redundancy, and 24/7 certified on-site engineers.',
                ],
                'content' => [
                    'vi' => '<p>Công tác in sao đề thi tốt nghiệp THPT là nhiệm vụ chính trị đặc biệt quan trọng của các Sở GD&ĐT. Giải pháp <strong>EXAM PRO</strong> do Hương Sơn thiết kế giải quyết triệt để mọi rủi ro về tiến độ, chất lượng và bảo mật.</p><h2>1. Công nghệ in nhân bản kỹ thuật số Duplo Nhật Bản</h2><p>Sử dụng các dòng máy Duplo DP-X550 / DP-X850 với tốc độ in từ 130 đến 180 bản/phút, in lạnh cơ học không sinh nhiệt, không gây cong vênh giấy và mực khô tức thì ngay khi ra khỏi máy.</p><h2>2. Nguyên tắc dự phòng N+1 không gián đoạn</h2><p>Mỗi hội đồng thi luôn được trang bị thêm máy dự phòng nóng cùng cấu hình. Nếu có bất kỳ sự cố nào, kỹ sư kỹ thuật đổi cụm trống in sang máy dự phòng chỉ trong 2 phút, đảm bảo dây chuyền in liên tục.</p><h2>3. Kỹ sư kỹ thuật trực 24/24 trong khu vực cách ly</h2><p>Kỹ sư Hương Sơn chấp hành lệnh cách ly 3 vòng, túc trực liên tục tại phòng máy với đầy đủ phụ tùng thay thế nhanh.</p>',
                    'en' => '<p>Complete EXAM PRO printing solution for National High School Exams with Duplo duplicators and 24/7 on-site technical standby.</p>',
                ],
                'image_url' => '/assets/images/banners/hero_edu_tech_1787899932385.jpg',
                'is_active' => true,
                'seo_title' => [
                    'vi' => 'Giải Pháp In Sao Đề Thi THPT Cách Ly 3 Vòng An Toàn | Hương Sơn',
                    'en' => 'High-Security Exam Printing Solutions for DOET | Huong Son',
                ],
                'seo_description' => [
                    'vi' => 'Giải pháp in sao đề thi THPT cách ly 3 vòng chuyên nghiệp cho Sở GD&ĐT: máy in Duplo siêu tốc 130-180 trang/phút, dự phòng N+1 và kỹ sư trực 24/24.',
                    'en' => 'Secure exam printing solution for education departments with high-speed Duplo duplicators.',
                ],
                'seo_keys' => 'in sao đề thi, máy in đề thi THPT, máy in nhân bản Duplo',
                'published_at' => now()->subDays(3),
            ],
            [
                'category_id' => $solutionCat->id,
                'title' => [
                    'vi' => 'Giải pháp cho thuê máy photocopy thế hệ mới: Cam kết SLA 2 giờ',
                    'en' => 'Next-Gen Copier Rental Solutions with 2-Hour SLA Commitment',
                ],
                'slug' => 'giai-phap-cho-thue-may-photocopy-doanh-nghiep-sla-2h',
                'summary' => [
                    'vi' => 'Dịch vụ cho thuê máy photocopy trọn gói: 0đ vốn đầu tư ban đầu, miễn phí 100% mực và linh kiện FANSIPAN, cam kết SLA kỹ thuật có mặt trong 2 giờ, đổi máy mới trong 24 giờ.',
                    'en' => 'Zero-capex copier rental with 100% free toner and parts, 2-hour on-site response SLA.',
                ],
                'content' => [
                    'vi' => '<p>Trong bối cảnh chi phí vận hành cần được tối ưu hóa tối đa, dịch vụ cho thuê máy photocopy trọn gói (Managed Print Services) của Hương Sơn là lựa chọn hàng đầu của hơn 500 doanh nghiệp và cơ quan tại miền Bắc.</p><h2>1. Lợi ích tài chính: 0 đồng vốn đầu tư ban đầu</h2><p>Doanh nghiệp không cần bỏ ra 50–100 triệu đồng mua máy. Toàn bộ chi phí thuê hàng tháng được tính vào chi phí vận hành (Opex) và được khấu trừ thuế VAT minh bạch.</p><h2>2. Bao trọn 100% mực in và linh kiện hao mòn</h2><p>Hương Sơn cung cấp miễn phí toàn bộ mực in, trống drum, gạt mực, sấy và công bảo dưỡng định kỳ hàng tháng. Khách hàng chỉ cần chuẩn bị giấy in.</p><h2>3. Cam kết SLA phản ứng nhanh trong 2 giờ</h2><p>Tiếp nhận sự cố trong ≤ 30 phút, kỹ thuật viên có mặt tại địa điểm trong ≤ 2 giờ. Nếu sự cố kéo dài quá 24h, Hương Sơn đổi máy tương đương miễn phí ngay lập tức.</p>',
                    'en' => '<p>Zero-capex copier rental with full-service toner, maintenance, and 2-hour SLA response for businesses and schools.</p>',
                ],
                'image_url' => '/assets/images/banners/hero_office_solutions_1787899910391.jpg',
                'is_active' => true,
                'seo_title' => [
                    'vi' => 'Cho Thuê Máy Photocopy Trọn Gói Cam Kết SLA 2 Giờ | Hương Sơn',
                    'en' => 'Managed Copier Rental with 2-Hour SLA Commitment | Huong Son',
                ],
                'seo_description' => [
                    'vi' => 'Dịch vụ cho thuê máy photocopy Toshiba, Ricoh trọn gói tại Hà Nội: 0đ vốn đầu tư, miễn phí mực và linh kiện, cam kết kỹ thuật có mặt trong 2h.',
                    'en' => 'Managed print services and copier rental with 2-hour technical SLA and zero initial capex.',
                ],
                'seo_keys' => 'cho thuê máy photocopy, thuê máy photocopy hà nội, SLA 2h',
                'published_at' => now()->subDays(4),
            ],
            [
                'category_id' => $solutionCat->id,
                'title' => [
                    'vi' => 'Số hóa hồ sơ học bạ và tài liệu lưu trữ chuẩn Thông tư 02/2019/TT-BNV',
                    'en' => 'School Records Digitization Matching National Archive Standards',
                ],
                'slug' => 'so-hoa-ho-so-hoc-ba-va-tai-lieu-luu-tru-chuan-quoc-gia',
                'summary' => [
                    'vi' => 'Giải pháp chuyển đổi số toàn diện cho trường học và cơ quan Nhà nước: máy scan chuyên dụng Ricoh Fujitsu 80–140 ppm kết hợp phần mềm OCR tiếng Việt bóc tách dữ liệu tức thì.',
                    'en' => 'Comprehensive document digitization with Ricoh high-speed scanners and Vietnamese OCR software.',
                ],
                'content' => [
                    'vi' => '<p>Thực hiện Đề án chuyển đổi số quốc gia và hướng dẫn của Bộ Giáo dục & Đào tạo, công tác số hóa sổ điểm, học bạ điện tử và hồ sơ cán bộ đang được triển khai khẩn trương tại các cơ sở giáo dục.</p><h2>1. Thiết bị quét chuyên dụng tốc độ cao Ricoh Fujitsu</h2><p>Trang bị các dòng máy Ricoh fi-8170 và fi-8270 tốc độ quét 70–90 tờ/phút (140–180 ảnh/phút), khay nạp ADF 100 tờ và cảm biến sóng siêu âm chống kẹt giấy, bảo vệ tài liệu lưu trữ lâu năm không bị rách mép.</p><h2>2. Nhận dạng ký tự quang học OCR tiếng Việt chính xác</h2><p>Hệ thống tự động nhận diện chữ tiếng Việt có dấu, bóc tách thông tin họ tên học sinh, năm sinh, điểm số và xuất ra định dạng PDF/A có lớp văn bản tìm kiếm được (Searchable PDF), giúp tra cứu học bạ cũ chỉ trong 3 giây.</p>',
                    'en' => '<p>Complete digitization solution for school records and public archives using Ricoh scanners and Vietnamese OCR software.</p>',
                ],
                'image_url' => '/assets/images/banners/highspeed_scanner_1787905830483.jpg',
                'is_active' => true,
                'seo_title' => [
                    'vi' => 'Số Hóa Học Bạ & Tài Liệu Lưu Trữ Chuẩn Quốc Gia | Hương Sơn',
                    'en' => 'Document Digitization Matching National Standards | Huong Son',
                ],
                'seo_description' => [
                    'vi' => 'Giải pháp số hóa hồ sơ học bạ và tài liệu lưu trữ cho trường học và cơ quan Nhà nước: máy scan Ricoh tốc độ cao, nhận dạng OCR tiếng Việt chuẩn Thông tư 02.',
                    'en' => 'Complete document digitization solution for schools and public agencies with Ricoh scanners.',
                ],
                'seo_keys' => 'số hóa học bạ, máy scan ricoh fi-8170, số hóa tài liệu lưu trữ',
                'published_at' => now()->subDays(5),
            ],
        ];

        foreach ($posts as $postData) {
            Post::create($postData);
        }
    }
}
