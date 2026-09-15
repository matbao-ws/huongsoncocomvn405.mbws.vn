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

        // 3. Products - Dynamically loaded from products.json
        $productsJsonPath = base_path('build/data/products.json');
        if (file_exists($productsJsonPath)) {
            $jsonData = json_decode(file_get_contents($productsJsonPath), true);
            $models = $jsonData['models'] ?? [];
            $categoryMap = [
                'photocopy-may-da-chuc-nang' => $catPhotocopy->id,
                'may-in-nhan-ban-toc-do-cao' => $catDuplo->id,
                'may-phoi-trang-hoan-thien-sau-in' => $catDuplo->id,
                'may-in-laser' => $catLaser->id,
                'may-scan-so-hoa' => $catScan->id,
                'cho-thue-thiet-bi-giao-duc' => $catEduSolutions->id,
                'thiet-bi-phong-hoc-giao-duc' => $catClassroom->id,
                'thiet-bi-van-phong-hoi-hop' => $catOffice->id,
                'vat-tu-linh-kien-tieu-hao' => $catConsumables->id,
                'fansipan' => $catFansipan->id,
            ];

            $brandMap = [
                'TOSHIBA' => $brandToshiba->id,
                'DUPLO' => $brandDuplo->id,
                'RICOH' => $brandRicoh->id,
                'KONICA MINOLTA' => $brandKonica->id,
                'HP' => $brandHP->id,
                'FANSIPAN' => $brandFansipan->id,
            ];

            foreach ($models as $idx => $m) {
                $catId = $categoryMap[$m['category'] ?? ''] ?? $catPhotocopy->id;
                $manuf = strtoupper($m['manufacturer'] ?? '');
                $brandId = null;
                foreach ($brandMap as $bName => $bId) {
                    if (str_contains($manuf, $bName) || str_contains(strtoupper($m['name'] ?? ''), $bName)) {
                        $brandId = $bId;
                        break;
                    }
                }
                if (!$brandId) {
                    $brandId = $brandToshiba->id;
                }

                $specsTable = '';
                if (!empty($m['specifications'])) {
                    $specsTable = '<table class="table table-bordered mt-3"><tbody>';
                    foreach ($m['specifications'] as $k => $v) {
                        $specsTable .= '<tr><th style="width:35%">' . htmlspecialchars((string) $k) . '</th><td>' . htmlspecialchars((string) $v) . '</td></tr>';
                    }
                    $specsTable .= '</tbody></table>';
                }

                $fullDescription = ($m['description'] ?? '') . $specsTable;
                if (empty($fullDescription)) {
                    $fullDescription = '<p>' . htmlspecialchars((string) ($m['summary'] ?? $m['name'])) . '</p>' . $specsTable;
                }

                $cleanNameVi = trim($m['name']);
                $metaTitleVi = str_contains(mb_strtolower($cleanNameVi), 'chính hãng')
                    ? ($cleanNameVi . ' | Giá Tốt Nhất | Hương Sơn')
                    : ($cleanNameVi . ' Chính Hãng | Giá Tốt Nhất | Hương Sơn');
                $cleanNameEn = $m['name_en'] ?? ($m['model'] ? ('Ricoh ' . $m['model'] . ' Scanner') : $m['name']);
                $metaTitleEn = $cleanNameEn . ' - Genuine Distributor | Huong Son';

                $rawSummary = strip_tags($m['summary'] ?? ($m['name'] . ' chính hãng tại Công ty Hương Sơn. Cam kết chất lượng, bảo hành chính hãng, đầy đủ CO/CQ và hỗ trợ kỹ thuật tận nơi.'));
                $metaDescVi = mb_substr($rawSummary, 0, 158);
                $metaDescEn = mb_substr($rawSummary, 0, 158);

                Product::query()->updateOrCreate(
                    ['slug' => $m['slug']],
                    [
                        'category_id' => $catId,
                        'brand_id' => $brandId,
                        'name' => ['vi' => $m['name'], 'en' => $cleanNameEn],
                        'sku' => $m['sku'] ?? strtoupper(str_replace('-', '_', $m['slug'])),
                        'short_description' => ['vi' => $m['summary'] ?? '', 'en' => $m['summary'] ?? ''],
                        'description' => ['vi' => $fullDescription, 'en' => $fullDescription],
                        'meta_title' => ['vi' => $metaTitleVi, 'en' => $metaTitleEn],
                        'meta_description' => ['vi' => $metaDescVi, 'en' => $metaDescEn],
                        'price' => (float) ($m['price'] ?? 0),
                        'stock_quantity' => 15,
                        'image_url' => $m['image'] ?? '/assets/images/products/toshiba-e-studio-2829a.jpg',
                        'is_active' => true,
                        'is_featured' => true,
                        'sort_order' => $idx + 1,
                    ]
                );
            }

            // Vô hiệu hoá các bản ghi demo/trùng lặp cũ trong danh mục scan
            Product::query()->whereIn('slug', ['may-scan-so-hoa-tai-lieu-toc-do-cao', 'ricoh-fujitsu-fi-7480'])->update(['is_active' => false]);
        }

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
                'summary' => ['vi' => 'Hương Sơn hoàn tất công tác lắp đặt, kiểm định và bàn giao dàn máy in nhân bản siêu tốc Duplo DP-X650 và máy phối trang DFC-122 cho Hội đồng in sao đề thi.', 'en' => 'Huong Son completes deployment of Duplo DP-X650 and DFC-122 systems.'],
                'image_url' => '/assets/images/products/duplo-dp-x650.jpg',
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
                'summary' => ['vi' => 'Gói giải pháp toàn diện bao gồm cho thuê máy photocopy, máy in đề thi và máy scan học bạ điện tử không phát sinh chi phí linh kiện.', 'en' => 'Comprehensive education printing and scanning packages.'],
                'image_url' => '/assets/images/hero-office.jpg',
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
                'summary' => ['vi' => 'Những tiêu chí quan trọng khi chọn máy in siêu tốc: tốc độ trên 130 trang/phút, độ nét cao, vật tư dự phòng và phương án dự phòng 1:1 trong phòng cách ly.', 'en' => 'Key criteria for selecting exam printing duplicators.'],
                'image_url' => '/assets/images/products/duplo-dp-x550.jpg',
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
                'summary' => ['vi' => 'Phân tích chi tiết tổng chi phí sở hữu (TCO) giữa mua đứt và thuê máy photocopy: tối ưu ngân sách vận hành lên tới 35% mỗi năm.', 'en' => 'In-depth TCO analysis between purchasing and leasing office equipment.'],
                'image_url' => '/assets/images/products/toshiba-e-studio-2829a.jpg',
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
                'phone' => '091.113.8583',
                'hotline' => '091.113.8583',
                'hotline_tech' => '0912.304.058',
                'hotlines' => '091.113.8583 (Hotline) · 0912.304.058 (Kỹ thuật) · 024 3972 9484',
                'email' => 'info@huongsonco.com.vn',
                'zalo' => 'https://zalo.me/0913237302',
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
