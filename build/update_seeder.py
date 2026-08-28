# -*- coding: utf-8 -*-
import re

SEEDER_PATH = '/home/binhphan/matbao-ws/clients/huongsoncocomvn405.mbws.vn/database/seeders/HuongSonSeeder.php'

with open(SEEDER_PATH, 'r', encoding='utf-8') as f:
    content = f.read()

new_products_code = """        // 3. Products
        Product::query()->updateOrCreate(
            ['slug' => 'duplo-dp-x550'],
            [
                'category_id' => $catDuplo->id,
                'brand_id' => $brandDuplo->id,
                'name' => ['vi' => 'Máy In Nhân Bản Siêu Tốc DUPLO DP-X550', 'en' => 'DUPLO DP-X550 Digital Duplicator'],
                'sku' => 'DUPLO-DP-X550',
                'short_description' => ['vi' => 'Khổ A3, tốc độ 155 bản/phút. Tiêu chuẩn cho in đề thi tốt nghiệp THPT, giáo trình và tài liệu số lượng lớn.', 'en' => 'A3 duplicator, 155 ppm for school exams.'],
                'description' => ['vi' => '<p>Duplo DP-X550 đạt tốc độ đến 155 bản/phút với độ phân giải cao, tạo độ sắc nét cho khu vực hình ảnh khổ A3 — phù hợp cho nhu cầu nhân bản một văn bản gốc ra số lượng lớn trong thời gian ngắn như in đề thi, giáo trình, biểu mẫu.</p>', 'en' => '<p>High-speed A3 digital duplicator.</p>'],
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
                'name' => ['vi' => 'Máy In Nhân Bản Siêu Tốc DUPLO DP-X650 (A3 HD)', 'en' => 'DUPLO DP-X650 HD Digital Duplicator'],
                'sku' => 'DUPLO-DP-X650',
                'short_description' => ['vi' => 'Khổ A3, tốc độ 160 bản/phút, đầu ghi HD nét cao cho đồ thị và chữ nhỏ.', 'en' => 'A3 HD duplicator 160 ppm.'],
                'description' => ['vi' => '<p>DUPLO DP-X650 là dòng máy in nhân bản cao cấp nhất của Duplo, đạt công suất ấn tượng 160 trang/phút. Đầu ghi Master HD cho chữ in sắc nét tuyệt đối.</p>', 'en' => '<p>DUPLO DP-X650 HD duplicator.</p>'],
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
                'name' => ['vi' => 'Máy Phối Trang 12 Khay DUPLO DFC-122', 'en' => 'DUPLO DFC-122 12-Bin Collator'],
                'sku' => 'DUPLO-DFC-122',
                'short_description' => ['vi' => 'Hệ thống 12 khay phối trang ma sát, phối 4.200 bộ/giờ, tự phát hiện lỗi đôi trang.', 'en' => '12-bin collator 4200 sets/hour.'],
                'description' => ['vi' => '<p>Hệ thống máy phối trang 12 khay DUPLO DFC-122 giúp tự động gom và sắp xếp các trang tài liệu theo thứ tự chính xác tuyệt đối.</p>', 'en' => '<p>High-speed 12-bin collator.</p>'],
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
                'name' => ['vi' => 'Máy Photocopy Đa Chức Năng TOSHIBA e-STUDIO 2329A', 'en' => 'TOSHIBA e-STUDIO 2329A Copier'],
                'sku' => 'TOSHIBA-2329A',
                'short_description' => ['vi' => 'Đa chức năng A3 (Copy, In mạng, Scan màu), 23 trang/phút. Tiết kiệm điện và chi phí.', 'en' => 'A3 MFP 23 ppm.'],
                'description' => ['vi' => '<p>TOSHIBA e-STUDIO 2329A là giải pháp photocopy và in ấn đa nhiệm hoàn hảo cho văn phòng vừa và nhỏ.</p>', 'en' => '<p>Monochrome A3 MFP.</p>'],
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
                'name' => ['vi' => 'Máy Photocopy Đa Chức Năng TOSHIBA e-STUDIO 2829A', 'en' => 'TOSHIBA e-STUDIO 2829A Copier'],
                'sku' => 'TOSHIBA-2829A',
                'short_description' => ['vi' => 'Đa chức năng A3, tốc độ 28 trang/phút, đảo mặt tự động RADF. Dòng máy dự án Vietcombank & trường học.', 'en' => 'A3 MFP 28 ppm with RADF.'],
                'description' => ['vi' => '<p>Dòng máy photocopy A3 chuyên nghiệp TOSHIBA e-STUDIO 2829A trang bị sẵn bộ nạp đảo bản gốc tự động RADF và Duplex 2 mặt.</p>', 'en' => '<p>Reliable A3 duplex MFP.</p>'],
                'price' => 0,
                'stock_quantity' => 18,
                'image_url' => '/assets/images/products/toshiba-e-studio-2829a.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 5,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'toshiba-e-studio-3028a'],
            [
                'category_id' => $catPhotocopy->id,
                'brand_id' => $brandToshiba->id,
                'name' => ['vi' => 'Máy Photocopy TOSHIBA e-STUDIO 3028A (Cảm ứng 10.1 Inch)', 'en' => 'TOSHIBA e-STUDIO 3028A MFP'],
                'sku' => 'TOSHIBA-3028A',
                'short_description' => ['vi' => 'Dòng e-BRIDGE Next thế hệ mới 30 trang/phút, màn hình cảm ứng 10.1 inch, SSD tự mã hóa bảo mật.', 'en' => 'Next-gen 30 ppm A3 MFP with 10.1 inch touch.'],
                'description' => ['vi' => '<p>Toshiba e-STUDIO 3028A sở hữu nền tảng e-BRIDGE Next tiên tiến, bảo mật SED SSD FIPS 140-2 và kết nối đám mây.</p>', 'en' => '<p>Secure enterprise MFP.</p>'],
                'price' => 0,
                'stock_quantity' => 12,
                'image_url' => '/assets/images/products/toshiba-e-studio-3028a.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 6,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'toshiba-e-studio-2500ac'],
            [
                'category_id' => $catPhotocopy->id,
                'brand_id' => $brandToshiba->id,
                'name' => ['vi' => 'Máy Photocopy Màu TOSHIBA e-STUDIO 2500AC', 'en' => 'TOSHIBA e-STUDIO 2500AC Color MFP'],
                'sku' => 'TOSHIBA-2500AC',
                'short_description' => ['vi' => 'In & Scan Màu chuyên nghiệp khổ A3, 25 trang/phút màu sắc rực rỡ, in banner dài 1.2m.', 'en' => 'Color A3 MFP 25 ppm.'],
                'description' => ['vi' => '<p>Toshiba e-STUDIO 2500AC mang lại chất lượng in màu sắc nét, phù hợp cho brochure, catalogue và báo cáo thiết kế.</p>', 'en' => '<p>Color A3 MFP.</p>'],
                'price' => 0,
                'stock_quantity' => 8,
                'image_url' => '/assets/images/products/toshiba-e-studio-2500ac.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 7,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'konica-minolta-bizhub-360i'],
            [
                'category_id' => $catPhotocopy->id,
                'brand_id' => $brandKonica->id,
                'name' => ['vi' => 'Máy Photocopy KONICA MINOLTA bizhub 360i', 'en' => 'KONICA MINOLTA bizhub 360i MFP'],
                'sku' => 'KONICA-360I',
                'short_description' => ['vi' => 'Tốc độ 36 trang/phút, màn hình cảm ứng phong cách tablet, tích hợp quét diệt virus Bitdefender.', 'en' => 'Smart MFP 36 ppm with Bitdefender.'],
                'description' => ['vi' => '<p>Konica Minolta bizhub 360i mang lại trải nghiệm làm việc số thông minh với màn hình cảm ứng 10.1 inch đa điểm mượt mà.</p>', 'en' => '<p>Smart office MFP.</p>'],
                'price' => 0,
                'stock_quantity' => 10,
                'image_url' => '/assets/images/products/konica-minolta-bizhub-360i.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 8,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'hp-laserjet-pro-mfp-m4103fdw'],
            [
                'category_id' => $catLaser->id,
                'brand_id' => $brandHP->id,
                'name' => ['vi' => 'Máy In Laser Đa Năng HP LaserJet Pro MFP M4103fdw', 'en' => 'HP LaserJet Pro MFP M4103fdw'],
                'sku' => 'HP-M4103FDW',
                'short_description' => ['vi' => 'In, Scan, Copy, Fax hai mặt tự động, WiFi kép, 40 trang/phút cho phòng giáo vụ, khảo thí.', 'en' => 'Multifunction laser printer 40 ppm with WiFi.'],
                'description' => ['vi' => '<p>HP LaserJet Pro MFP M4103fdw mang đến tốc độ in 40 trang/phút, bảo mật HP Wolf Security và kết nối WiFi không dây tiện lợi.</p>', 'en' => '<p>Smart laser printer.</p>'],
                'price' => 0,
                'stock_quantity' => 25,
                'image_url' => '/assets/images/products/hp-laserjet-pro-mfp-m4103fdw.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 9,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'ricoh-fujitsu-fi-7160'],
            [
                'category_id' => $catScan->id,
                'brand_id' => $brandRicoh->id,
                'name' => ['vi' => 'Máy Scan Số Hóa Tài Liệu RICOH fi-7160 (Fujitsu)', 'en' => 'RICOH fi-7160 Document Scanner'],
                'sku' => 'RICOH-FI7160',
                'short_description' => ['vi' => 'Quét 2 mặt siêu tốc 60 trang/120 ảnh/phút, ADF 80 tờ, cảm biến sóng siêu âm chống kẹt giấy.', 'en' => 'High speed scanner 60 ppm/120 ipm.'],
                'description' => ['vi' => '<p>Ricoh fi-7160 là dòng máy quét số hóa hồ sơ học bạ, văn bằng, tài liệu lưu trữ chuẩn mực nhất thế giới.</p>', 'en' => '<p>High-speed document scanner.</p>'],
                'price' => 0,
                'stock_quantity' => 15,
                'image_url' => '/assets/images/products/ricoh-fujitsu-fi-7160.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 10,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'ricoh-fujitsu-fi-7480'],
            [
                'category_id' => $catScan->id,
                'brand_id' => $brandRicoh->id,
                'name' => ['vi' => 'Máy Scan Khổ A3 Tốc Độ Cao RICOH fi-7480', 'en' => 'RICOH fi-7480 A3 Scanner'],
                'sku' => 'RICOH-FI7480',
                'short_description' => ['vi' => 'Quét khổ A3 tốc độ 80 trang/phút, công suất 24.000 tờ/ngày cho cơ quan lưu trữ và UBND.', 'en' => 'A3 document scanner 80 ppm.'],
                'description' => ['vi' => '<p>Ricoh fi-7480 xử lý quét mượt mà từ danh thiếp đến bản vẽ A3 với độ phân giải cao và phần mềm PaperStream IP.</p>', 'en' => '<p>A3 heavy-duty scanner.</p>'],
                'price' => 0,
                'stock_quantity' => 5,
                'image_url' => '/assets/images/products/ricoh-fujitsu-fi-7480.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 11,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'goi-thue-may-in-nhan-ban-de-thi-thpt'],
            [
                'category_id' => $catEduSolutions->id,
                'brand_id' => $brandDuplo->id,
                'name' => ['vi' => 'Gói Thuê Máy In Nhân Bản In Đề Thi THPT & Tuyển Sinh', 'en' => 'Exam Printing Duplicator Rental Package'],
                'sku' => 'EDU-EXAM-01',
                'short_description' => ['vi' => 'Trọn gói máy in siêu tốc Duplo, máy phối trang DFC, vật tư mực master và trực kỹ thuật 24/7 khu vực cách ly.', 'en' => 'All-in-one exam printing solution.'],
                'description' => ['vi' => '<p>Gói giải pháp độc quyền phục vụ in sao đề thi THPT và tuyển sinh lớp 10 cho các Sở GD&ĐT miền Bắc.</p>', 'en' => '<p>Secure exam printing service.</p>'],
                'price' => 0,
                'stock_quantity' => 20,
                'image_url' => '/assets/images/products/duplo-dp-x550.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 12,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'goi-thue-may-photocopy-truong-hoc-toshiba'],
            [
                'category_id' => $catEduSolutions->id,
                'brand_id' => $brandToshiba->id,
                'name' => ['vi' => 'Gói Thuê Máy Photocopy Trường Học Định Mức Chi Phí', 'en' => 'School Copier Budget Rental Package'],
                'sku' => 'EDU-COPY-02',
                'short_description' => ['vi' => '0đ vốn ban đầu, cấp mã PIN phân quyền tổ bộ môn, miễn phí 100% mực in, trống và bảo dưỡng tận nơi.', 'en' => 'Zero-investment school copier rental.'],
                'description' => ['vi' => '<p>Gói thuê máy photocopy trường học tối ưu ngân sách giảng dạy, quản lý hạn mức in rõ ràng cho từng giáo viên.</p>', 'en' => '<p>Cost-effective school printing.</p>'],
                'price' => 0,
                'stock_quantity' => 30,
                'image_url' => '/assets/images/products/toshiba-e-studio-2829a.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 13,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'muc-in-master-duplo-chinh-hang'],
            [
                'category_id' => $catConsumables->id,
                'brand_id' => $brandDuplo->id,
                'name' => ['vi' => 'Mực In & Master In Chính Hãng DUPLO Nhật Bản', 'en' => 'Genuine DUPLO Ink & Master Roll'],
                'sku' => 'DUPLO-INK-MAT',
                'short_description' => ['vi' => 'Tuýp mực 1.000ml & Cuộn Master HD cho DP-X550, DP-X650, DP-F550. Khô nhanh, sắc nét, chính hãng Nhật Bản.', 'en' => 'Genuine Duplo ink and master.'],
                'description' => ['vi' => '<p>Mực in và cuộn phim Master in chính hãng Duplo Nhật Bản đảm bảo độ tương phản cao cho bản in đề thi.</p>', 'en' => '<p>Genuine Duplo consumables.</p>'],
                'price' => 0,
                'stock_quantity' => 100,
                'image_url' => '/assets/images/products/muc-in-master-duplo.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 14,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'trong-drum-bot-tu-photocopy'],
            [
                'category_id' => $catConsumables->id,
                'brand_id' => $brandToshiba->id,
                'name' => ['vi' => 'Trống Drum OPC & Bột Từ Developer Máy Photocopy', 'en' => 'OPC Drum & Developer Kit'],
                'sku' => 'DRUM-DEV-KIT',
                'short_description' => ['vi' => 'Độ bền 80.000–120.000 trang, phục hồi bản in sắc nét cho Toshiba 2329A/2829A/3008A, Ricoh MP.', 'en' => 'OPC Drum and Developer for Toshiba/Ricoh.'],
                'description' => ['vi' => '<p>Bộ Trống Drum OPC và Bột từ Developer chất lượng cao giúp duy trì độ ổn định tuyệt đối cho máy photocopy.</p>', 'en' => '<p>Photocopier imaging parts.</p>'],
                'price' => 0,
                'stock_quantity' => 50,
                'image_url' => '/assets/images/products/drum-bot-tu-photocopy.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 15,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'muc-fansipan-toner-toshiba-e-studio'],
            [
                'category_id' => $catFansipan->id,
                'brand_id' => $brandFansipan->id,
                'name' => ['vi' => 'Mực Photocopy FANSIPAN Toner Black Cho Toshiba e-STUDIO', 'en' => 'FANSIPAN Toner Black for Toshiba'],
                'sku' => 'FAN-TOSH-01',
                'short_description' => ['vi' => 'Mực nạp polymer siêu mịn tương thích Toshiba 2329A, 2829A, 2508A, 3008A, 3508A. Tiết kiệm 50% chi phí.', 'en' => 'FANSIPAN premium toner for Toshiba.'],
                'description' => ['vi' => '<p>FANSIPAN Toner Black cho Toshiba là thương hiệu mực độc quyền của Hương Sơn — đen bóng, không cặn, ít mực thải.</p>', 'en' => '<p>FANSIPAN compatible toner.</p>'],
                'price' => 0,
                'stock_quantity' => 200,
                'image_url' => '/assets/images/products/muc-fansipan-toner.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 16,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'muc-fansipan-toner-ricoh-aficio'],
            [
                'category_id' => $catFansipan->id,
                'brand_id' => $brandFansipan->id,
                'name' => ['vi' => 'Mực Photocopy FANSIPAN Toner Black Cho Ricoh Aficio', 'en' => 'FANSIPAN Toner Black for Ricoh'],
                'sku' => 'FAN-RICOH-02',
                'short_description' => ['vi' => 'Chai 1.000g nạp cho Ricoh MP 2001, 2554, 3054, 3554. Vận hành êm, bảo vệ trống từ.', 'en' => 'FANSIPAN toner for Ricoh MP series.'],
                'description' => ['vi' => '<p>Mực FANSIPAN cho Ricoh Aficio tương thích hoàn hảo, giúp doanh nghiệp và trường học cắt giảm chi phí.</p>', 'en' => '<p>FANSIPAN toner for Ricoh.</p>'],
                'price' => 0,
                'stock_quantity' => 150,
                'image_url' => '/assets/images/products/muc-fansipan-toner.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 17,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'man-hinh-tuong-tac-viewsonic-ifp6550'],
            [
                'category_id' => $catClassroom->id,
                'brand_id' => $brandGeneral->id,
                'name' => ['vi' => 'Màn Hình Tương Tác Thông Minh ViewSonic IFP6550 4K (65 Inch)', 'en' => 'ViewSonic IFP6550 65" 4K Interactive Display'],
                'sku' => 'VIEW-IFP6550',
                'short_description' => ['vi' => '4K Ultra HD, cảm ứng hồng ngoại 20 điểm chạm, loa Stereo 45W, phần mềm dạy học myViewBoard.', 'en' => '65 inch 4K interactive screen for classroom.'],
                'description' => ['vi' => '<p>Màn hình tương tác ViewSonic IFP6550 là trung tâm phòng học thông minh, hỗ trợ kết nối không dây đa thiết bị.</p>', 'en' => '<p>Interactive smart board.</p>'],
                'price' => 0,
                'stock_quantity' => 10,
                'image_url' => '/assets/images/products/viewsonic-ifp6550.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 18,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'camera-vat-the-aver-f17-8m'],
            [
                'category_id' => $catClassroom->id,
                'brand_id' => $brandGeneral->id,
                'name' => ['vi' => 'Camera Vật Thể Trình Chiếu Đa Năng AVer F17-8M (8MP Zoom 32X)', 'en' => 'AVerVision F17-8M Visualizer'],
                'sku' => 'AVER-F178M',
                'short_description' => ['vi' => 'Cảm biến 8MP, Zoom 32X, vùng chụp A3, cổ ngỗng xoay 360 độ chuyên dụng chấm chữa bài thi và giảng dạy.', 'en' => 'AVer 8MP visualizer with 32x zoom.'],
                'description' => ['vi' => '<p>Camera vật thể AVer F17-8M giúp giáo viên soi bài làm học sinh, chữa bài thi trực tiếp trên màn chiếu rõ nét từng chi tiết.</p>', 'en' => '<p>Classroom document camera.</p>'],
                'price' => 0,
                'stock_quantity' => 15,
                'image_url' => '/assets/images/products/camera-vat-the-aver.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 19,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'may-chieu-hoi-truong-panasonic-pt-vz580'],
            [
                'category_id' => $catOffice->id,
                'brand_id' => $brandGeneral->id,
                'name' => ['vi' => 'Máy Chiếu Hội Trường Văn Phòng Panasonic PT-VZ580 (5.000 Ansi)', 'en' => 'Panasonic PT-VZ580 High-Brightness Projector'],
                'sku' => 'PANA-VZ580',
                'short_description' => ['vi' => 'Độ sáng 5.000 ANSI Lumens, độ phân giải WUXGA (1920x1200), trình chiếu sắc nét không cần tắt đèn.', 'en' => '5000 lumens WUXGA conference projector.'],
                'description' => ['vi' => '<p>Panasonic PT-VZ580 mang lại độ sáng 5.000 Ansi Lumens mạnh mẽ cho hội trường, phòng họp lớn của cơ quan và trường học.</p>', 'en' => '<p>Conference room projector.</p>'],
                'price' => 0,
                'stock_quantity' => 8,
                'image_url' => '/assets/images/products/panasonic-pt-vz580.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 20,
            ]
        );

        Product::query()->updateOrCreate(
            ['slug' => 'he-thong-hoi-nghi-logitech-group'],
            [
                'category_id' => $catOffice->id,
                'brand_id' => $brandGeneral->id,
                'name' => ['vi' => 'Hệ Thống Hội Nghị Trực Tuyến LOGITECH GROUP Full HD', 'en' => 'LOGITECH GROUP ConferenceCam System'],
                'sku' => 'LOGI-GROUP',
                'short_description' => ['vi' => 'Camera PTZ Zoom 10x Full HD 1080p, loa ngoài khử vọng 360 độ, phục vụ phòng họp 14–20 người.', 'en' => 'Logitech video conferencing system.'],
                'description' => ['vi' => '<p>Logitech Group là giải pháp hội nghị truyền hình trực tuyến chuyên nghiệp qua Zoom, Teams, Google Meet cắm là chạy.</p>', 'en' => '<p>Video conference system.</p>'],
                'price' => 0,
                'stock_quantity' => 12,
                'image_url' => '/assets/images/products/logitech-group.jpg',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 21,
            ]
        );"""

pattern = r'// 3\. Products.*?// 4\. Featured News'
new_content = re.sub(pattern, new_products_code + '\n\n        // 4. Featured News', content, flags=re.DOTALL)

with open(SEEDER_PATH, 'w', encoding='utf-8') as f:
    f.write(new_content)

print('HuongSonSeeder.php successfully updated with 21 products!')
