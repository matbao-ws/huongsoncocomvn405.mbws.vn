# -*- coding: utf-8 -*-
"""
Chuẩn hóa toàn bộ thông số kỹ thuật và mô tả tính năng chi tiết cho:
- Máy in nhân bản siêu tốc DUPLO & thiết bị hoàn thiện sau in
- Máy photocopy đa chức năng TOSHIBA & Konica Minolta
theo đúng tiêu chuẩn chuyên nghiệp giống danh mục Máy Scan Ricoh.
"""

import json
import os
import re

DATA_PATH = 'build/data/products.json'

DUPLO_DATA = {
    "duplo-dp-x550": {
        "name": "Máy nhân bản siêu tốc Duplo DP-X550",
        "model": "DP-X550",
        "manufacturer": "Duplo (Nhật Bản)",
        "sku": "DUPLO-DPX550",
        "category_label": "Máy in nhân bản tốc độ cao",
        "specifications": {
            "Tốc độ in": "Lên đến 155 bản/phút (Điều chỉnh 3 mức: 60, 90, 155 bản/phút)",
            "Độ phân giải": "300 x 600 dpi (Chế bản nhiệt kỹ thuật số)",
            "Khổ bản gốc tối đa": "Mặt kính: A3 (297 x 432 mm); Khay nạp ADF (tùy chọn)",
            "Khổ giấy in hỗ trợ": "Tối đa 297 x 432 mm (A3), Tối thiểu 100 x 148 mm (A5 / Bưu thiếp)",
            "Định lượng giấy in": "45 g/m² – 210 g/m² (Hỗ trợ giấy in đề thi mỏng đến bìa dày)",
            "Công nghệ chế bản": "Chế bản nhiệt kỹ thuật số tự động hoàn toàn (Thermal Digital Master Maker)",
            "Thời gian tạo bản Master": "Khoảng 19 giây (khổ A4) / 21 giây (khổ A3)",
            "Thời gian in bản đầu tiên": "Khoảng 23 giây (khổ A4)",
            "Sức chứa khay nạp giấy": "1.500 tờ (định lượng 64 g/m²) / Chiều cao xấp giấy 150 mm",
            "Sức chứa khay nhận giấy": "1.500 tờ (định lượng 64 g/m²) / Chiều cao xấp giấy 150 mm",
            "Thu phóng hình ảnh (Zoom)": "50% – 200% (bước nhảy 1%); 7 mức tỷ lệ phóng/thu đặt sẵn (70%, 81%, 86%, 100%, 115%, 122%, 141%)",
            "Chế độ xử lý hình ảnh": "Chữ (Text), Hình ảnh (Photo), Kết hợp Chữ/Ảnh (Text & Photo), Chụp bút chì (Pencil)",
            "Màn hình bảng điều khiển": "Màn hình cảm ứng màu LCD lớn thông minh, hiển thị trực quan thông tin vận hành",
            "Dung lượng cuộn Master": "Cuộn Master DR-X55 khoảng 220 bản (A3)",
            "Dung lượng hộp mực": "Hộp mực Duplo CC Black / HD Black dung tích 1.000 ml",
            "Kết nối & Giao tiếp": "USB 2.0 High-Speed, Cổng mạng LAN Ethernet 10/100 Base-T (tùy chọn)",
            "Kích thước & Trọng lượng": "Vận hành: 1.405 x 688 x 1.080 mm | Trọng lượng: 102 kg",
            "Xuất xứ & Chứng nhận": "Chính hãng Duplo (Nhật Bản), đầy đủ chứng nhận CO/CQ",
            "Bảo hành & Hỗ trợ": "12 – 24 tháng chính hãng, bảo trì định kỳ tận nơi bởi kỹ sư Hương Sơn"
        },
        "description": """<div class='product-description-content'>
<p><strong>Máy nhân bản siêu tốc Duplo DP-X550</strong> là dòng máy in nhân bản kỹ thuật số khổ A3 chuyên dụng hàng đầu của Duplo (Nhật Bản), được thiết kế tối ưu cho các kỳ thi quốc gia, trường học, cơ quan hành chính và cơ sở in ấn đòi hỏi sản lượng lớn trong thời gian gấp rút.</p>
<p>Với tốc độ in vượt trội lên đến 155 trang/phút và khả năng vận hành bền bỉ 24/7, Duplo DP-X550 giúp tiết kiệm hơn 70% chi phí mực và điện năng so với máy photocopy truyền thống khi in số lượng lớn.</p>
<h4>Tính năng nổi bật và công nghệ vượt trội:</h4>
<ul>
<li><strong>Tốc độ in siêu tốc 155 bản/phút:</strong> Hoàn thành 10.000 bản in chỉ trong hơn 1 giờ đồng hồ, đáp ứng trọn vẹn tiến độ in sao đề thi và tài liệu khẩn cấp.</li>
<li><strong>Khay chứa giấy dung lượng lớn 1.500 tờ:</strong> Khay nạp và khay nhận giấy sức chứa tới 1.500 tờ giúp máy vận hành liên tục mà không cần nạp giấy gián đoạn.</li>
<li><strong>Độ phân giải 300 x 600 dpi sắc nét:</strong> Đầu ghi nhiệt kỹ thuật số tái tạo hoàn hảo các chi tiết chữ nhỏ, biểu đồ, hình vẽ kỹ thuật và công thức toán học phức tạp.</li>
<li><strong>Màn hình cảm ứng màu thông minh:</strong> Giao diện điều khiển cảm ứng LCD trực quan, hiển thị chi tiết số lượng in, mức mực, master và hướng dẫn từng bước khi vận hành.</li>
<li><strong>Cơ chế kéo giấy chống kẹt tối ưu:</strong> Hệ thống cuốn giấy 3 bánh xe cao su công nghiệp giúp nạp mượt mà mọi loại giấy từ giấy mỏng 45 g/m² đến giấy bìa 210 g/m².</li>
<li><strong>Bảo mật tài liệu tuyệt đối:</strong> Chế độ bảo vệ dữ liệu Confidential Mode tự động đẩy bản master cũ vào hộp chứa khóa an toàn sau khi in xong.</li>
</ul>
</div>"""
    },

    "duplo-dp-x650": {
        "name": "Máy nhân bản siêu tốc Duplo DP-X650 (A3 HD)",
        "model": "DP-X650",
        "manufacturer": "Duplo (Nhật Bản)",
        "sku": "DUPLO-DP-X650",
        "category_label": "Máy in nhân bản tốc độ cao",
        "specifications": {
            "Tốc độ in": "Lên đến 160 bản/phút (3 mức điều chỉnh: 60, 100, 160 bản/phút)",
            "Độ phân giải": "600 x 600 dpi HD (Đầu ghi nhiệt độ nét cao High-Definition Master Maker)",
            "Khổ bản gốc tối đa": "Mặt kính phẳng: A3 (297 x 432 mm)",
            "Khổ giấy in hỗ trợ": "Tối đa 297 x 432 mm (A3), Tối thiểu 100 x 148 mm",
            "Định lượng giấy in": "45 g/m² – 210 g/m² (Hỗ trợ giấy mỏng đề thi, giấy tái chế, giấy bìa)",
            "Công nghệ chế bản": "Chế bản nhiệt kỹ thuật số HD thế hệ mới (Thermal Digital Master Maker HD)",
            "Thời gian tạo bản Master": "Khoảng 18 giây (khổ A4) / 20 giây (khổ A3)",
            "Thời gian in bản đầu tiên": "Khoảng 21 giây (khổ A4)",
            "Sức chứa khay nạp giấy": "1.500 tờ (định lượng 64 g/m²)",
            "Sức chứa khay nhận giấy": "1.500 tờ (định lượng 64 g/m²)",
            "Thu phóng hình ảnh (Zoom)": "50% – 200% (bước nhảy 1%), 7 mức cài đặt sẵn",
            "Chế độ xử lý hình ảnh": "Chữ (Text), Ảnh (Photo), Chữ/Ảnh HD sắc nét cao, Bút chì (Pencil)",
            "Màn hình bảng điều khiển": "Cảm ứng màu LCD lớn thông minh thế hệ mới",
            "Dung lượng cuộn Master": "Cuộn Master DR-X65 HD (khoảng 220 bản A3)",
            "Dung lượng hộp mực": "Hộp mực Duplo HD Black 1.000 ml",
            "Kết nối & Giao tiếp": "USB 2.0 High Speed, Network LAN Card 10/100/1000 Base-T",
            "Kích thước & Trọng lượng": "1.405 x 688 x 1.080 mm | Trọng lượng: 104 kg",
            "Xuất xứ & Chứng nhận": "Chính hãng Duplo (Nhật Bản), đầy đủ CO/CQ",
            "Bảo hành & Hỗ trợ": "12 – 24 tháng chính hãng tại Hương Sơn"
        },
        "description": """<div class='product-description-content'>
<p><strong>Máy nhân bản siêu tốc Duplo DP-X650</strong> là dòng máy in nhân bản công nghệ HD cao cấp nhất của Duplo (Nhật Bản), đạt độ phân giải thực 600 x 600 dpi cùng tốc độ ấn tượng 160 bản/phút.</p>
<p>Được trang bị đầu ghi nhiệt HD thế hệ mới nhất, DP-X650 mang lại bản in sắc nét hoàn hảo như in offset, chuyên trị các tài liệu có độ phức tạp cao: đề thi trắc nghiệm có mã vạch, đồ thị hình học chi tiết, giáo trình hình ảnh và tài liệu biểu mẫu ngân hàng.</p>
<h4>Tính năng nổi bật và công nghệ vượt trội:</h4>
<ul>
<li><strong>Công nghệ Master HD 600 x 600 dpi:</strong> Tạo lỗ vi điểm siêu nhỏ giúp mực thẩm thấu đồng đều, đường nét chữ và hình ảnh mịn màng, không lem nhòe.</li>
<li><strong>Tốc độ in ấn tượng 160 trang/phút:</strong> Nâng cao năng suất làm việc vượt bậc cho các hội đồng in sao đề thi và nhà in nội bộ trường đại học.</li>
<li><strong>Màn hình cảm ứng LCD màu trực quan:</strong> Kiểm soát toàn diện quy trình in ấn, xem trước bản in (Preview) và điều chỉnh vị trí bản in điện tử bằng phím cảm ứng.</li>
<li><strong>Khay giấy nạp & nhận 1.500 tờ:</strong> Khả năng chứa giấy gấp 3 lần máy photocopy thông thường, tiết kiệm tối đa thời gian thao tác của nhân viên.</li>
<li><strong>Chế độ in 2 trong 1 (2-in-1 Mode):</strong> Tự động thu nhỏ và ghép 2 trang tài liệu gốc lên 1 mặt giấy in nhằm tiết kiệm 50% chi phí giấy và mực.</li>
<li><strong>Bảo hành chính hãng Hương Sơn:</strong> Đội ngũ kỹ sư tay nghề cao hỗ trợ kỹ thuật tận nơi, vật tư mực in và master HD luôn có sẵn số lượng lớn trong kho.</li>
</ul>
</div>"""
    },

    "duplo-dp-x850": {
        "name": "Máy In Nhân Bản Siêu Tốc DUPLO DP-X850",
        "model": "DP-X850",
        "manufacturer": "Duplo (Nhật Bản)",
        "sku": "DUPLO-DP-X850",
        "category_label": "Máy in nhân bản tốc độ cao",
        "specifications": {
            "Tốc độ in tối đa": "200 trang/phút (Tốc độ in cao nhất phân khúc toàn cầu)",
            "Độ phân giải": "600 x 600 dpi HD Master Maker",
            "Khổ bản gốc tối đa": "Mặt kính A3 phẳng (297 x 432 mm) + Tùy chọn khay nạp tự động ADF 100 tờ",
            "Khổ giấy in hỗ trợ": "Tối đa 297 x 432 mm (A3), Tối thiểu 100 x 148 mm",
            "Định lượng giấy in": "45 g/m² – 250 g/m² (Hỗ trợ từ giấy mỏng đề thi đến bìa dày, thiệp mời)",
            "Công nghệ chế bản": "Chế bản nhiệt kỹ thuật số công suất công nghiệp (Industrial Thermal Master Maker)",
            "Thời gian tạo bản Master": "Khoảng 18 giây (khổ A4) / 19 giây (khổ A3)",
            "Thời gian in bản đầu tiên": "Khoảng 21 giây (khổ A4)",
            "Sức chứa khay nạp giấy": "1.500 tờ (định lượng 64 g/m²) / Chiều cao xấp giấy 150 mm",
            "Sức chứa khay nhận giấy": "1.500 tờ (định lượng 64 g/m²) / Chiều cao xấp giấy 150 mm",
            "Thu phóng hình ảnh (Zoom)": "50% – 200% (bước nhảy 1%), 7 mức cài sẵn tiêu chuẩn",
            "Màn hình bảng điều khiển": "Cảm ứng LCD màu lớn thông minh, hiển thị tiến độ và định mức vật tư",
            "Chế độ in màu rời": "Hỗ trợ đổi hộp trống màu (Spare Color Drum) đỏ, xanh, vàng chỉ trong 10 giây",
            "Dung lượng cuộn Master": "Cuộn Master DR-X85 HD (khoảng 220 bản A3)",
            "Dung lượng hộp mực": "Hộp mực Duplo HD Black / Color Ink 1.000 ml",
            "Kết nối & Giao tiếp": "USB 2.0, Gigabit Ethernet 10/100/1000 Base-T, in trực tiếp từ máy tính",
            "Kích thước & Trọng lượng": "1.405 x 688 x 1.080 mm | Trọng lượng: 108 kg",
            "Xuất xứ & Chứng nhận": "Chính hãng Duplo (Nhật Bản), đầy đủ chứng nhận CO/CQ",
            "Bảo hành & Hỗ trợ": "12 – 24 tháng chính hãng, bảo dưỡng định kỳ miễn phí"
        },
        "description": """<div class='product-description-content'>
<p><strong>Máy In Nhân Bản Siêu Tốc DUPLO DP-X850</strong> là cỗ máy in siêu tốc khổ A3 đỉnh cao nhất của Duplo trên toàn cầu, xác lập kỷ lục tốc độ in lên đến 200 bản/phút cùng độ nét 600 x 600 dpi chân thực.</p>
<p>Thiết bị được chế tạo từ khung thép hợp kim nguyên khối chịu lực cao, thiết kế chuyên biệt phục vụ các Hội đồng in đề thi Quốc gia, nhà in xuất bản báo chí, Bộ Giáo dục và Đào tạo cùng các cơ quan Nhà nước đòi hỏi công suất in hàng trăm nghìn bản mỗi ngày với độ bảo mật tuyệt đối.</p>
<h4>Tính năng nổi bật và công nghệ vượt trội:</h4>
<ul>
<li><strong>Tốc độ kỷ lục 200 bản/phút:</strong> Khả năng in 12.000 trang trong một giờ đồng hồ, giải quyết toàn bộ khối lượng in tài liệu cao điểm trong tích tắc.</li>
<li><strong>Độ phân giải HD 600 x 600 dpi đỉnh cao:</strong> Công nghệ chế bản nhiệt thế hệ mới tạo độ nét hoàn mỹ cho văn bản chữ siêu nhỏ, hình ảnh chân dung và biểu đồ khoa học.</li>
<li><strong>Hỗ trợ định lượng giấy mở rộng từ 45 đến 250 g/m²:</strong> Xử lý linh hoạt từ giấy bãi bằng mỏng in đề thi đến các loại giấy bìa dầy, giấy kraft, phong bì và bao bì chuyên dụng.</li>
<li><strong>Hệ thống thay trống màu mô-đun siêu tốc:</strong> Thao tác tráo đổi cụm trống màu (Color Cylinder) chỉ mất đúng 10 giây để chuyển sang in màu đỏ, xanh dương, xanh lá hoặc vàng.</li>
<li><strong>Kết nối mạng Gigabit & In trực tiếp từ máy tính:</strong> Lệnh in được truyền trực tiếp từ mạng nội bộ với tốc độ cao, mã hóa dữ liệu đường truyền bảo mật an toàn.</li>
<li><strong>Cam kết dịch vụ độc quyền từ Hương Sơn:</strong> Cung cấp máy dự phòng 1-đổi-1 tại chỗ, đội ngũ kỹ thuật viên trực 24/24 trong các đợt thi cử trọng điểm.</li>
</ul>
</div>"""
    },

    "duplo-dp-g325": {
        "name": "Máy In Nhân Bản Siêu Tốc Duplo DP-G325",
        "model": "DP-G325",
        "manufacturer": "Duplo (Nhật Bản)",
        "sku": "DUPLO-DP-G325",
        "category_label": "Máy in nhân bản tốc độ cao",
        "specifications": {
            "Tốc độ in": "60 – 130 trang/phút (3 mức điều chỉnh tốc độ linh hoạt)",
            "Độ phân giải": "300 x 600 dpi",
            "Khổ giấy in tối đa": "B4 (257 x 364 mm), Tối thiểu khổ A5 (100 x 148 mm)",
            "Khổ bản gốc tối đa": "B4 (257 x 364 mm) trên mặt kính phẳng",
            "Định lượng giấy in": "45 g/m² – 210 g/m²",
            "Công nghệ chế bản": "Chế bản nhiệt kỹ thuật số tự động hoàn toàn",
            "Thời gian tạo bản Master": "Khoảng 21 giây (khổ B4)",
            "Sức chứa khay chứa giấy": "1.000 tờ (khay nạp) / 1.000 tờ (khay nhận)",
            "Thu phóng hình ảnh": "3 mức thu nhỏ, 3 mức phóng to (70%, 81%, 86%, 115%, 122%, 141%)",
            "Màn hình điều khiển": "Màn hình LCD và phím bấm chức năng trực quan, đèn LED báo trạng thái",
            "Kết nối": "USB 2.0 High Speed, tùy chọn cổng mạng LAN Card",
            "Dung lượng cuộn Master": "Cuộn Master DR-G32 (khoảng 250 bản B4)",
            "Dung lượng hộp mực": "Hộp mực Duplo CC Black 1.000 ml",
            "Kích thước & Trọng lượng": "1.360 x 688 x 1.080 mm | Trọng lượng: 90 kg",
            "Xuất xứ & Chứng nhận": "Chính hãng Duplo (Nhật Bản), đầy đủ CO/CQ",
            "Bảo hành & Hỗ trợ": "12 – 24 tháng chính hãng tại Hương Sơn"
        },
        "description": """<div class='product-description-content'>
<p><strong>Máy In Nhân Bản Siêu Tốc Duplo DP-G325</strong> là dòng máy in nhân bản khổ B4 kinh tế và bền bỉ của Duplo (Nhật Bản), mang lại hiệu quả in ấn vượt trội cho các trường THPT, THCS, UBND xã/phường và bệnh viện tuyến huyện.</p>
<p>Với tốc độ in đến 130 bản/phút và khả năng tiêu thụ điện năng cực thấp (chỉ bằng 1/10 máy photocopy laser), DP-G325 là giải pháp tối ưu cho việc in bài kiểm tra, đề thi định kỳ, phiếu thu và các văn bản hành chính.</p>
<h4>Tính năng nổi bật và công nghệ vượt trội:</h4>
<ul>
<li><strong>Tốc độ in nhanh 130 bản/phút:</strong> Tiết kiệm tối đa thời gian in ấn tài liệu bài giảng, đề cương cho giáo viên và học sinh.</li>
<li><strong>Chi phí bản in siêu tiết kiệm:</strong> Càng in nhiều chi phí càng giảm xuống mức dưới 20 đồng/trang in.</li>
<li><strong>Khổ in B4 đa dụng:</strong> Đáp ứng hoàn hảo các biểu mẫu thi cử chuẩn giáo dục và tài liệu học tập đóng tập.</li>
<li><strong>Thân thiện môi trường:</strong> Vận hành êm ái, không phát sinh nhiệt lượng, không khí thải ozone độc hại.</li>
<li><strong>Độ bền cơ học vượt trội:</strong> Thiết kế chuẩn công nghiệp Nhật Bản, ít hỏng hóc vặt, chi phí bảo trì thấp.</li>
</ul>
</div>"""
    },

    "duplo-dp-g205": {
        "name": "Máy In Nhân Bản Siêu Tốc Duplo DP-G205",
        "model": "DP-G205",
        "manufacturer": "Duplo (Nhật Bản)",
        "sku": "DUPLO-DP-G205",
        "category_label": "Máy in nhân bản tốc độ cao",
        "specifications": {
            "Tốc độ in": "60 – 130 trang/phút",
            "Độ phân giải": "300 x 600 dpi",
            "Khổ giấy in tối đa": "B4 (257 x 364 mm)",
            "Định lượng giấy": "45 g/m² – 140 g/m²",
            "Công nghệ chế bản": "Chế bản nhiệt kỹ thuật số tự động",
            "Thời gian tạo Master": "Khoảng 21 giây (B4)",
            "Sức chứa khay giấy": "1.000 tờ (khay nạp và nhận)",
            "Màn hình điều khiển": "Bảng điều khiển LED hiển thị số bản và trạng thái mực",
            "Kết nối": "USB 2.0 High Speed",
            "Dung lượng vật tư": "Master DR-G20 (250 bản) / Mực CC 1.000 ml",
            "Xuất xứ & Bảo hành": "Chính hãng Duplo Nhật Bản, bảo hành 12 tháng chính hãng"
        },
        "description": """<div class='product-description-content'>
<p><strong>Máy In Nhân Bản Siêu Tốc Duplo DP-G205</strong> là dòng máy in nhân bản khổ B4 nhỏ gọn, dễ vận hành với chi phí đầu tư ban đầu hợp lý cho trường tiểu học, trạm y tế và các văn phòng cơ quan.</p>
<h4>Tính năng nổi bật và công nghệ vượt trội:</h4>
<ul>
<li><strong>Vận hành đơn giản một chạm:</strong> Giao diện phím bấm trực quan, bất kỳ ai cũng có thể sử dụng dễ dàng chỉ sau 5 phút hướng dẫn.</li>
<li><strong>Tốc độ in 130 bản/phút:</strong> Xử lý nhanh các tập bài giảng, bài tập trắc nghiệm và thông báo nội bộ.</li>
<li><strong>Khay giấy 1.000 tờ:</strong> Giúp in ấn số lượng lớn liên tục không lo gián đoạn.</li>
</ul>
</div>"""
    },

    "duplo-dp-u950": {
        "name": "Máy In Siêu Tốc Duplo DP-U950",
        "model": "DP-U950",
        "manufacturer": "Duplo (Nhật Bản)",
        "sku": "DUPLO-DP-U950",
        "category_label": "Máy in nhân bản tốc độ cao",
        "specifications": {
            "Tốc độ in tối đa": "60 – 150 trang/phút (điều chỉnh 3 cấp độ)",
            "Độ phân giải": "600 x 600 dpi",
            "Khổ giấy in tối đa": "A3 (297 x 432 mm)",
            "Định lượng giấy": "45 g/m² – 210 g/m²",
            "Khay nạp và nhận giấy": "Sức chứa 1.500 tờ",
            "Công nghệ chế bản": "Chế bản nhiệt kỹ thuật số",
            "Màn hình hiển thị": "Màn hình LCD cảm ứng đồ họa thông minh",
            "Kết nối": "USB 2.0, Card mạng LAN",
            "Xuất xứ & Bảo hành": "Duplo Nhật Bản, bảo hành 12 - 24 tháng chính hãng"
        },
        "description": """<div class='product-description-content'>
<p><strong>Máy In Siêu Tốc Duplo DP-U950</strong> là dòng máy in nhân bản khổ A3 thế hệ cao cấp của Duplo, đáp ứng nhu cầu in ấn tài liệu, biểu mẫu khối lượng lớn cho các cơ quan, đơn vị đào tạo chuyên nghiệp.</p>
<h4>Tính năng nổi bật:</h4>
<ul>
<li><strong>Công suất in 150 bản/phút:</strong> In cực nhanh, sắc nét, tiết kiệm chi phí trên từng trang in.</li>
<li><strong>Khổ giấy A3 rộng rãi:</strong> Phù hợp cho việc in tài liệu khổ lớn, giáo trình gập đôi và báo cáo.</li>
<li><strong>Kết nối mạng toàn diện:</strong> Dễ dàng chia sẻ máy in cho nhiều phòng ban trong mạng LAN.</li>
</ul>
</div>"""
    },

    "duplo-dfc-122": {
        "name": "Máy Phối Trang 12 Khay Duplo DFC-122",
        "model": "DFC-122",
        "manufacturer": "Duplo (Nhật Bản)",
        "sku": "DUPLO-DFC-122",
        "category_label": "Thiết bị hoàn thiện sau in",
        "specifications": {
            "Số khay phối trang": "12 khay ma sát độc lập (hỗ trợ liên kết 2 máy thành hệ thống 24 khay)",
            "Tốc độ phối trang": "Lên đến 4.200 bộ/giờ (khổ A4) / 2.400 bộ/giờ (khổ A3)",
            "Khổ giấy phối": "Tối đa 320 x 450 mm (khổ A3 mở rộng), Tối thiểu 140 x 140 mm",
            "Định lượng giấy hỗ trợ": "52 g/m² – 160 g/m² (Khay 1 & 12 hỗ trợ giấy bìa đến 210 g/m²)",
            "Sức chứa mỗi khay": "28 mm / tương đương 300 tờ (định lượng 64 g/m²)",
            "Cơ chế phát hiện lỗi": "Cảm biến quang học phát hiện kẹt giấy, kẹp đúp 2 tờ (Double-feed), khay rỗng (No paper)",
            "Chế độ xếp chồng": "Xếp bằng hoặc xếp so le (Straight / Offset Stacking)",
            "Khả năng tích hợp": "Tích hợp trực tiếp máy giập ghim và gấp nếp tài liệu DFC-SII",
            "Bảng điều khiển": "Màn hình LED hiển thị vị trí lỗi chính xác theo từng khay",
            "Kích thước & Trọng lượng": "820 x 560 x 1.144 mm | Trọng lượng: 65 kg",
            "Xuất xứ & Chứng nhận": "Chính hãng Duplo (Nhật Bản), đầy đủ CO/CQ",
            "Bảo hành & Hỗ trợ": "12 tháng chính hãng tại Hương Sơn"
        },
        "description": """<div class='product-description-content'>
<p><strong>Máy Phối Trang 12 Khay Duplo DFC-122</strong> là thiết bị hoàn thiện sau in chuyên dụng hàng đầu thế giới của Duplo (Nhật Bản), giúp tự động hóa 100% công đoạn phân chia, sắp xếp và gom bộ đề thi, tập bài giảng, giáo trình theo thứ tự trang tuyệt đối chính xác.</p>
<p>Với năng suất phối lên tới 4.200 bộ/giờ, DFC-122 giải phóng hoàn toàn sức lao động thủ công, loại bỏ triệt để tình trạng nhầm trang, thiếu trang hoặc thừa trang trong các kỳ thi quan trọng.</p>
<h4>Tính năng nổi bật và công nghệ vượt trội:</h4>
<ul>
<li><strong>Tốc độ phối siêu tốc 4.200 bộ/giờ:</strong> Xử lý hàng chục nghìn trang tài liệu chỉ trong vài giờ làm việc.</li>
<li><strong>Cảm biến phát hiện đúp trang siêu nhạy:</strong> Tự động ngắt máy và cảnh báo chính xác vị trí khay bị lỗi khi có hiện tượng dính 2 tờ hoặc hụt trang.</li>
<li><strong>Khả năng nâng cấp 24 khay linh hoạt:</strong> Kết nối thông minh 2 tháp DFC-122 tạo thành hệ thống phối trang 24 khay hoàn chỉnh cho tài liệu dày.</li>
<li><strong>Tích hợp trực tiếp máy giập ghim Duplo DFC-SII:</strong> Tạo thành dây chuyền liên hoàn từ phối trang -> dập ghim -> gấp sách tự động.</li>
</ul>
</div>"""
    }
}

TOSHIBA_DATA = {
    "toshiba-e-studio-2329a": {
        "name": "Máy photocopy Toshiba e-STUDIO 2329A",
        "model": "e-STUDIO 2329A",
        "manufacturer": "Toshiba (Nhật Bản)",
        "sku": "TOSHIBA-2329A",
        "category_label": "Máy photocopy đa chức năng",
        "specifications": {
            "Chức năng chuẩn": "Copy + In mạng (Network Print) + Scan màu mạng (Color Scan) + Tự động đảo mặt (Duplex)",
            "Tốc độ in / sao chụp": "23 trang/phút (A4), 14 trang/phút (A3)",
            "Độ phân giải": "2.400 x 600 dpi (với Smoothing), Quét màu: 600 x 600 dpi",
            "Khổ giấy hỗ trợ": "Khổ từ A5-R đến A3",
            "Định lượng giấy": "Khay chuẩn: 64 – 80 g/m²; Khay tay (Bypass): 52 – 216 g/m²",
            "Thời gian khởi động / Bản đầu tiên": "Khoảng 15 giây / Khoảng 6.4 giây",
            "Bộ nạp & đảo bản gốc tự động": "Tùy chọn RADF MR-3032 nạp và đảo bản gốc tự động 50 tờ",
            "Chức năng tự động đảo hai mặt (Duplex)": "Tích hợp sẵn (Standard Automatic Duplex)",
            "Sức chứa khay chứa giấy": "1 khay x 250 tờ + Khay tay 100 tờ (Mở rộng tối đa 1.700 tờ với khay tùy chọn)",
            "Bộ vi xử lý & Bộ nhớ": "Cortex A8 500 MHz, RAM 512 MB",
            "Thu phóng hình ảnh (Zoom)": "25% – 400% (bước nhảy 1%)",
            "Ngôn ngữ in & Trình điều khiển": "GDI, PCL6 (tùy chọn), TWAIN / WIA Scan",
            "Chuẩn kết nối giao tiếp": "USB 2.0 High Speed, 10/100 Base-T Ethernet (in và scan qua mạng)",
            "Tính năng bảo mật & Quản lý": "Mã số quản lý 100 phòng ban/người dùng (Department Code), lọc địa chỉ IP/MAC",
            "Định mức mực (Toner Yield)": "Hộp mực T-2329P dung lượng khoảng 17.500 trang (độ phủ 5% A4)",
            "Kích thước & Trọng lượng": "575 x 540 x 402 mm | Trọng lượng: 27 kg (nhỏ gọn tối ưu bàn làm việc)",
            "Xuất xứ & Chứng nhận": "Chính hãng Toshiba Tec Corporation, đầy đủ CO/CQ",
            "Bảo hành & Hỗ trợ kỹ thuật": "12 – 24 tháng hoặc 80.000 bản chụp theo tiêu chuẩn hãng"
        },
        "description": """<div class='product-description-content'>
<p><strong>Máy photocopy Toshiba e-STUDIO 2329A</strong> là giải pháp máy photocopy đa chức năng A3/A4 kinh tế, nhỏ gọn và bền bỉ từ tập đoàn Toshiba Tec (Nhật Bản), được thiết kế tối ưu cho các văn phòng doanh nghiệp vừa và nhỏ, trường học, trạm y tế và ủy ban nhân dân cấp xã/phường.</p>
<p>Máy tích hợp sẵn trọn gói 4 tính năng: Copy, In mạng tốc độ 23 trang/phút, Quét tài liệu màu qua mạng và Đảo hai mặt tự động, giúp xử lý toàn diện mọi nhu cầu hành chính văn phòng với chi phí mực in cực kỳ tiết kiệm.</p>
<h4>Tính năng nổi bật và công nghệ vượt trội:</h4>
<ul>
<li><strong>Thiết kế nhỏ gọn, tiết kiệm không gian:</strong> Kích thước thân máy chỉ 575 x 540 mm dễ dàng đặt gọn gàng trên bàn làm việc hoặc góc văn phòng.</li>
<li><strong>In mạng & Scan màu tốc độ cao:</strong> Kết nối trực tiếp vào mạng LAN nội bộ, cho phép toàn bộ nhân viên trong phòng ban in ấn và số hóa tài liệu màu sắc nét mà không cần máy in riêng.</li>
<li><strong>Đảo mặt tự động Duplex tích hợp sẵn:</strong> Tiết kiệm 50% lượng giấy tiêu thụ và giảm chi phí lưu trữ hồ sơ tài liệu.</li>
<li><strong>Công nghệ xử lý hình ảnh 2.400 x 600 dpi Smoothing:</strong> Chữ in đen mịn, không răng cưa, hình vẽ kỹ thuật và biểu đồ sắc nét.</li>
<li><strong>Quản lý chi phí bằng Department Code:</strong> Cấp 100 mã phòng ban giúp ban lãnh đạo kiểm soát hạn mức in ấn của từng cá nhân, chống lãng phí.</li>
<li><strong>Vật tư mực in T-2329P dung lượng lớn:</strong> 17.500 trang in liên tục với chi phí bản chụp thấp nhất phân khúc.</li>
</ul>
</div>"""
    },

    "toshiba-e-studio-2829a": {
        "name": "Máy photocopy Toshiba e-STUDIO 2829A",
        "model": "e-STUDIO 2829A",
        "manufacturer": "Toshiba (Nhật Bản)",
        "sku": "TOSHIBA-2829A",
        "category_label": "Máy photocopy đa chức năng",
        "specifications": {
            "Chức năng chuẩn": "Copy + In mạng + Scan màu mạng + Đảo mặt tự động (Duplex)",
            "Tốc độ in / sao chụp": "28 trang/phút (A4), 14 trang/phút (A3)",
            "Độ phân giải": "2.400 x 600 dpi (với Smoothing), Quét màu: 600 x 600 dpi",
            "Khổ giấy hỗ trợ": "Khổ từ A5-R đến A3",
            "Định lượng giấy": "Khay chuẩn: 64 – 80 g/m²; Khay tay (Bypass): 52 – 216 g/m²",
            "Thời gian khởi động / Bản chụp đầu": "Khoảng 15 giây / Khoảng 6.4 giây",
            "Bộ nạp & đảo bản gốc tự động": "Tích hợp sẵn RADF MR-3032 nạp và đảo tự động 50 tờ",
            "Chức năng tự động đảo hai mặt (Duplex)": "Tích hợp sẵn (Standard Automatic Duplex)",
            "Sức chứa khay chứa giấy": "1 khay x 250 tờ + Khay tay 100 tờ (Mở rộng tối đa 1.700 tờ)",
            "Bộ nhớ RAM": "512 MB (hỗ trợ nâng cấp 1 GB)",
            "Thu phóng hình ảnh (Zoom)": "25% – 400% (bước nhảy 1%)",
            "Ngôn ngữ in & Trình điều khiển": "PCL6, GDI, TWAIN/WIA Scan",
            "Chuẩn kết nối giao tiếp": "USB 2.0 High Speed, Ethernet 10/100 Base-T",
            "Quản lý & Bảo mật": "100 mã bộ phận phân quyền bảo mật, lọc IP/MAC",
            "Định mức mực (Toner Yield)": "Hộp mực T-2329P dung tích lớn (~17.500 trang A4)",
            "Kích thước & Trọng lượng": "575 x 540 x 402 mm | Trọng lượng: 27 kg",
            "Xuất xứ & Chứng nhận": "Chính hãng Toshiba Tec Corporation, đầy đủ CO/CQ",
            "Bảo hành & Hỗ trợ kỹ thuật": "12 – 24 tháng hoặc 100.000 bản chụp chính hãng"
        },
        "description": """<div class='product-description-content'>
<p><strong>Máy photocopy Toshiba e-STUDIO 2829A</strong> là phiên bản nâng cấp tốc độ cao 28 trang/phút thuộc phân khúc máy photocopy đa chức năng khổ A3 tầm trung của Toshiba Tec, phù hợp hoàn hảo cho các đơn vị có sản lượng từ 5.000 đến 12.000 bản chụp mỗi tháng.</p>
<p>Sở hữu bộ nạp đảo bản gốc tự động RADF 50 tờ cùng khả năng kết nối mạng nội bộ mạnh mẽ, máy giúp nhân bản và số hóa tài liệu hồ sơ nhanh chóng, vận hành êm ái và siêu bền bỉ.</p>
<h4>Tính năng nổi bật và công nghệ vượt trội:</h4>
<ul>
<li><strong>Tốc độ sao chụp 28 trang/phút:</strong> Tăng 20% hiệu suất công việc so với các dòng máy cỡ nhỏ thông thường.</li>
<li><strong>Tích hợp sẵn RADF nạp đảo tự động:</strong> Tự động hút và đảo mặt 50 tờ tài liệu gốc để copy hoặc scan màu hai mặt mà không cần lật thủ công từng trang.</li>
<li><strong>Chất lượng in ấn 2.400 x 600 dpi siêu mịn:</strong> Bản sao rõ nét từ các dòng chữ nhỏ đến con dấu đỏ khi scan màu.</li>
<li><strong>Chi phí vận hành tiết kiệm tối đa:</strong> Cơ chế tái tuần hoàn mực thừa giúp tận dụng 100% lượng mực, bảo vệ môi trường và giảm chi phí thay thế vật tư.</li>
<li><strong>Hỗ trợ kỹ thuật chuyên nghiệp Hương Sơn:</strong> Bảo trì định kỳ miễn phí, linh kiện và mực in sẵn sàng thay thế ngay trong 2 giờ.</li>
</ul>
</div>"""
    },

    "toshiba-e-studio-2528a": {
        "name": "Máy photocopy Toshiba e-STUDIO 2528A",
        "model": "e-STUDIO 2528A",
        "manufacturer": "Toshiba (Nhật Bản)",
        "sku": "TOSHIBA-2528A",
        "category_label": "Máy photocopy đa chức năng",
        "specifications": {
            "Chức năng chuẩn": "Copy + In mạng + Scan màu mạng + Duplex tự động 2 mặt (Nền tảng e-BRIDGE Next cao cấp)",
            "Tốc độ in / sao chụp": "25 trang/phút (A4), 16 trang/phút (A3)",
            "Màn hình bảng điều khiển": "Màn hình cảm ứng màu thông minh 10.1 inch e-BRIDGE Next đa điểm, giao diện dạng tablet",
            "Độ phân giải": "2.400 x 600 dpi (với Smoothing) / 1.200 x 1.200 dpi (in chuẩn PS3)",
            "Khổ giấy hỗ trợ": "Khổ A5-R đến A3",
            "Định lượng giấy": "Khay chuẩn: 60 – 256 g/m²; Khay tay (Bypass): 52 – 256 g/m²",
            "Thời gian khởi động / Bản đầu tiên": "Khoảng 16 giây / Khoảng 4.3 giây",
            "Bộ nạp & đảo bản gốc tự động": "RADF 100 tờ hoặc DSDF 300 tờ (Dual Scan quét 2 mặt cùng lúc 240 ảnh/phút)",
            "Chức năng tự động đảo hai mặt (Duplex)": "Tích hợp sẵn (Standard Automatic Duplex)",
            "Sức chứa khay chứa giấy": "2 khay x 550 tờ + Khay tay 100 tờ (Tổng chuẩn 1.200 tờ, mở rộng tối đa 3.200 tờ)",
            "Bộ vi xử lý & Bộ nhớ": "Intel Atom Dual Core 1.33 GHz, RAM 4 GB, Ổ cứng 128 GB SSD tự mã hóa (SED)",
            "Ngôn ngữ in & Trình điều khiển": "PCL5e, PCL5c, PCL6 (PCL XL), PostScript 3, PDF, XPS",
            "Chuẩn kết nối giao tiếp": "10/100/1000 Base-T Gigabit Ethernet, USB 2.0 High Speed, AirPrint, Mopria",
            "Tính năng bảo mật cao cấp": "Ổ cứng SED mã hóa 256-bit AES chuẩn quân đội, xóa đè dữ liệu IEEE 2600.2, lọc IP/MAC",
            "Định mức mực (Toner Yield)": "Hộp mực T-3008P / T-5008P dung lượng lớn khoảng 43.900 trang A4 (độ phủ 5%)",
            "Kích thước & Trọng lượng": "585 x 586 x 787 mm | Trọng lượng: 55 kg",
            "Xuất xứ & Chứng nhận": "Chính hãng Toshiba Tec Corporation, chứng nhận CO/CQ, Energy Star",
            "Bảo hành & Hỗ trợ kỹ thuật": "12 – 24 tháng hoặc 100.000 bản chụp theo tiêu chuẩn nhà sản xuất"
        },
        "description": """<div class='product-description-content'>
<p><strong>Máy photocopy Toshiba e-STUDIO 2528A</strong> thuộc thế hệ máy photocopy đa chức năng kỹ thuật số e-BRIDGE Next cao cấp nhất hiện nay của Toshiba Tec (Nhật Bản). Máy được tích hợp bộ vi xử lý Intel đa lõi, màn hình cảm ứng điện dung 10.1 inch và ổ cứng thể rắn SSD tự mã hóa chuẩn bảo mật quốc tế.</p>
<p>Thiết bị được chuẩn hóa phục vụ các văn phòng tập đoàn, ngân hàng, trường học và cơ quan Nhà nước đòi hỏi chất lượng tài liệu cao cấp, bảo mật dữ liệu tuyệt đối và khả năng chịu tải hàng chục nghìn trang mỗi tháng.</p>
<h4>Tính năng nổi bật và công nghệ vượt trội:</h4>
<ul>
<li><strong>Màn hình cảm ứng 10.1 inch thông minh:</strong> Giao diện người dùng hiện đại tương tự máy tính bảng iPad, vuốt chạm mượt mà, tùy chỉnh menu theo thói quen của từng phòng ban.</li>
<li><strong>Bảo mật dữ liệu chuẩn quân đội SED 256-bit:</strong> Ổ cứng SSD tự mã hóa bảo vệ toàn bộ dữ liệu tài liệu, chống rò rỉ thông tin ngay cả khi tháo rời ổ đĩa.</li>
<li><strong>Tùy chọn khay quét 2 mặt Dual-Scan DSDF siêu tốc:</strong> Tốc độ quét 240 ảnh/phút (2 mặt cùng lúc), biến máy photocopy thành trạm số hóa tài liệu chuyên nghiệp.</li>
<li><strong>Sức chứa giấy tiêu chuẩn 1.200 tờ:</strong> Trang bị sẵn 2 khay x 550 tờ + khay tay 100 tờ, không phải nạp giấy thường xuyên.</li>
<li><strong>Hộp mực siêu bền 43.900 bản:</strong> Tiết kiệm chi phí vận hành ở mức tối đa, một hộp mực sử dụng kéo dài nhiều tháng liên tục.</li>
<li><strong>Hỗ trợ in ấn di động thông minh:</strong> In trực tiếp từ điện thoại thông minh, máy tính bảng qua Apple AirPrint, Mopria và ứng dụng e-BRIDGE Print & Capture.</li>
</ul>
</div>"""
    },

    "toshiba-e-studio-3028a": {
        "name": "Máy photocopy Toshiba e-STUDIO 3028A",
        "model": "e-STUDIO 3028A",
        "manufacturer": "Toshiba (Nhật Bản)",
        "sku": "TOSHIBA-3028A",
        "category_label": "Máy photocopy đa chức năng",
        "specifications": {
            "Chức năng chuẩn": "Copy + In mạng + Scan màu mạng + Đảo mặt tự động (Nền tảng e-BRIDGE Next cao cấp)",
            "Tốc độ in / sao chụp": "30 trang/phút (A4), 16 trang/phút (A3)",
            "Màn hình bảng điều khiển": "Cảm ứng màu 10.1 inch e-BRIDGE Next đa điểm",
            "Độ phân giải": "2.400 x 600 dpi (với Smoothing) / 1.200 x 1.200 dpi (PS3)",
            "Khổ giấy hỗ trợ": "Khổ A5-R đến A3",
            "Định lượng giấy": "Khay chuẩn: 60 – 256 g/m²; Khay tay (Bypass): 52 – 256 g/m²",
            "Thời gian khởi động / Bản đầu": "Khoảng 16 giây / Khoảng 4.3 giây",
            "Bộ nạp & đảo bản gốc tự động": "RADF 100 tờ hoặc DSDF 300 tờ (Dual Scan 240 ảnh/phút)",
            "Chức năng tự động đảo hai mặt (Duplex)": "Tích hợp sẵn (Standard Automatic Duplex)",
            "Sức chứa khay chứa giấy": "2 khay x 550 tờ + Khay tay 100 tờ (Tổng 1.200 tờ, mở rộng 3.200 tờ)",
            "Bộ vi xử lý & Bộ nhớ": "Intel Atom Dual Core 1.33 GHz, RAM 4 GB, Ổ cứng 128 GB SSD tự mã hóa (SED)",
            "Ngôn ngữ in & Trình điều khiển": "PCL5e, PCL6, PostScript 3, PDF, XPS",
            "Chuẩn kết nối giao tiếp": "Gigabit LAN 10/100/1000 Base-T, USB 2.0, AirPrint, Mopria",
            "Tính năng bảo mật cao cấp": "Ổ cứng SED 256-bit AES, xóa đè IEEE 2600.2, lọc IP/MAC",
            "Định mức mực (Toner Yield)": "Hộp mực T-3008P / T-5008P dung lượng lớn khoảng 43.900 trang A4",
            "Kích thước & Trọng lượng": "585 x 586 x 787 mm | Trọng lượng: 55 kg",
            "Xuất xứ & Chứng nhận": "Chính hãng Toshiba Tec Corporation, đầy đủ CO/CQ",
            "Bảo hành & Hỗ trợ kỹ thuật": "12 – 24 tháng hoặc 120.000 bản chụp theo tiêu chuẩn hãng"
        },
        "description": """<div class='product-description-content'>
<p><strong>Máy photocopy Toshiba e-STUDIO 3028A</strong> là cỗ máy in ấn đa chức năng A3 công suất cao 30 trang/phút, kết hợp hoàn hảo giữa hiệu năng xử lý mạnh mẽ của chip Intel và nền tảng thông minh e-BRIDGE Next của Toshiba.</p>
<p>Máy được các Sở Giáo dục, Ban Quản lý dự án, Khối Ngân hàng và các văn phòng quy mô 30–80 nhân viên tin dùng nhờ tốc độ in sao chụp nhanh chóng, khay giấy sức chứa lớn và hệ thống bảo mật dữ liệu nghiêm ngặt.</p>
<h4>Tính năng nổi bật và công nghệ vượt trội:</h4>
<ul>
<li><strong>Tốc độ in ấn mạnh mẽ 30 trang/phút:</strong> Bản in đầu tiên xuất xưởng chỉ trong 4.3 giây, không mất thời gian chờ đợi.</li>
<li><strong>Màn hình cảm ứng 10.1 inch màu đa điểm:</strong> Thao tác chạm, kéo thả, thu phóng hình ảnh mượt mà, hỗ trợ giao diện tiếng Việt thân thiện.</li>
<li><strong>Ổ cứng SSD SED bảo mật tự mã hóa:</strong> Mã hóa theo tiêu chuẩn FIPS 140-2, bảo vệ dữ liệu tuyệt đối trước mọi nguy cơ đánh cắp thông tin.</li>
<li><strong>Khay chứa giấy tiêu chuẩn 1.200 tờ:</strong> Cấu hình 2 khay x 550 tờ + khay tay 100 tờ cho phép nạp đồng thời khổ giấy A4 và A3 riêng biệt.</li>
<li><strong>Hộp mực lớn 43.900 trang:</strong> Tối ưu chi phí in ấn văn phòng xuống mức thấp nhất, tuổi thọ trống gạt lên đến hàng trăm nghìn bản.</li>
</ul>
</div>"""
    },

    "toshiba-e-studio-3528a": {
        "name": "Máy photocopy Toshiba e-STUDIO 3528A",
        "model": "e-STUDIO 3528A",
        "manufacturer": "Toshiba (Nhật Bản)",
        "sku": "TOSHIBA-3528A",
        "category_label": "Máy photocopy đa chức năng",
        "specifications": {
            "Chức năng chuẩn": "Copy + In mạng + Scan màu mạng + Đảo mặt tự động (e-BRIDGE Next)",
            "Tốc độ in / sao chụp": "35 trang/phút (A4), 18 trang/phút (A3)",
            "Màn hình bảng điều khiển": "Cảm ứng màu 10.1 inch e-BRIDGE Next đa điểm",
            "Độ phân giải": "2.400 x 600 dpi (với Smoothing) / 1.200 x 1.200 dpi (PS3)",
            "Khổ giấy hỗ trợ": "Khổ A5-R đến A3",
            "Định lượng giấy": "Khay chuẩn: 60 – 256 g/m²; Khay tay (Bypass): 52 – 256 g/m²",
            "Thời gian khởi động / Bản đầu": "Khoảng 16 giây / Khoảng 4.3 giây",
            "Bộ nạp & đảo bản gốc tự động": "RADF 100 tờ hoặc DSDF 300 tờ (Dual Scan 240 ảnh/phút)",
            "Khay chứa giấy": "2 khay x 550 tờ + Khay tay 100 tờ (Tổng 1.200 tờ, mở rộng 3.200 tờ)",
            "Bộ nhớ RAM / Ổ cứng": "4 GB RAM + 128 GB SSD tự mã hóa (SED)",
            "Ngôn ngữ in": "PCL5e, PCL6, PostScript 3, PDF, XPS",
            "Kết nối": "Gigabit Ethernet 10/100/1000 Base-T, USB 2.0, AirPrint, Mopria",
            "Bảo mật": "Ổ cứng SED 256-bit AES, xóa đè IEEE 2600.2, lọc IP/MAC",
            "Định mức mực": "Hộp mực T-3008P / T-5008P (~43.900 trang A4)",
            "Xuất xứ & Bảo hành": "Chính hãng Toshiba Tec Nhật Bản, bảo hành 12 - 24 tháng / 150.000 bản chụp"
        },
        "description": """<div class='product-description-content'>
<p><strong>Máy photocopy Toshiba e-STUDIO 3528A</strong> mang lại năng suất in ấn trung bình cao 35 trang/phút, phục vụ tối ưu cho các trung tâm đào tạo, văn phòng hành chính và doanh nghiệp có khối lượng tài liệu lớn cần xử lý liên tục.</p>
<h4>Tính năng nổi bật:</h4>
<ul>
<li><strong>Tốc độ in vượt trội 35 trang/phút:</strong> Xử lý nhanh các tập hồ sơ thầu, tài liệu dự án và báo cáo tài chính dày hàng trăm trang.</li>
<li><strong>Hệ thống quản trị mạng e-BRIDGE Next:</strong> Dễ dàng giám sát lượng trang in, tình trạng vật tư qua trình duyệt web từ xa.</li>
<li><strong>Khả năng nâng cấp khay giấy lên 3.200 tờ:</strong> Phục vụ các đợt in ấn cao điểm mà không lo hết giấy giữa chừng.</li>
</ul>
</div>"""
    },

    "toshiba-e-studio-4528a": {
        "name": "Máy photocopy Toshiba e-STUDIO 4528A",
        "model": "e-STUDIO 4528A",
        "manufacturer": "Toshiba (Nhật Bản)",
        "sku": "TOSHIBA-4528A",
        "category_label": "Máy photocopy đa chức năng",
        "specifications": {
            "Chức năng chuẩn": "Copy + In mạng + Scan màu mạng + Đảo mặt tự động (e-BRIDGE Next)",
            "Tốc độ in / sao chụp": "45 trang/phút (A4), 22 trang/phút (A3)",
            "Màn hình bảng điều khiển": "Cảm ứng màu 10.1 inch e-BRIDGE Next đa điểm",
            "Độ phân giải": "2.400 x 600 dpi (với Smoothing) / 1.200 x 1.200 dpi (PS3)",
            "Khổ giấy hỗ trợ": "Khổ A5-R đến A3",
            "Định lượng giấy": "Khay chuẩn: 60 – 256 g/m²; Khay tay (Bypass): 52 – 256 g/m²",
            "Thời gian khởi động / Bản đầu": "Khoảng 16 giây / Khoảng 3.6 giây",
            "Bộ nạp & đảo bản gốc tự động": "DSDF 300 tờ (Dual Scan quét 2 mặt đồng thời 240 ảnh/phút)",
            "Khay chứa giấy": "2 khay x 550 tờ + Khay tay 100 tờ (Tổng 1.200 tờ, mở rộng 3.200 tờ)",
            "Bộ nhớ RAM / Ổ cứng": "4 GB RAM + 128 GB SSD tự mã hóa (SED)",
            "Ngôn ngữ in": "PCL5e, PCL6, PostScript 3, PDF, XPS",
            "Kết nối": "Gigabit Ethernet 10/100/1000 Base-T, USB 2.0, AirPrint, Mopria",
            "Định mức mực": "Hộp mực T-3008P / T-5008P (~43.900 trang A4)",
            "Xuất xứ & Bảo hành": "Chính hãng Toshiba Tec Nhật Bản, bảo hành 12 - 24 tháng / 180.000 bản chụp"
        },
        "description": """<div class='product-description-content'>
<p><strong>Máy photocopy Toshiba e-STUDIO 4528A</strong> là model máy photocopy tốc độ cao 45 trang/phút, chuyên dụng cho các trung tâm hành chính công, sở ban ngành và các tập đoàn tài chính ngân hàng có nhu cầu in ấn công suất lớn.</p>
<h4>Tính năng nổi bật:</h4>
<ul>
<li><strong>Tốc độ in nhanh 45 trang/phút:</strong> Bản in đầu tiên xuất xưởng chỉ trong 3.6 giây.</li>
<li><strong>Khay DSDF Dual-Scan tiêu chuẩn:</strong> Quét 2 mặt cùng lúc 240 ảnh/phút, rút ngắn 50% thời gian số hóa hồ sơ.</li>
<li><strong>Độ bền cơ học vượt trội:</strong> Thiết kế bền bỉ đáp ứng khối lượng chụp hàng tháng lên tới 50.000 trang.</li>
</ul>
</div>"""
    },

    "toshiba-e-studio-5528a": {
        "name": "Máy photocopy Toshiba e-STUDIO 5528A",
        "model": "e-STUDIO 5528A",
        "manufacturer": "Toshiba (Nhật Bản)",
        "sku": "TOSHIBA-5528A",
        "category_label": "Máy photocopy đa chức năng",
        "specifications": {
            "Chức năng chuẩn": "Copy + In mạng + Scan màu mạng + Đảo mặt tự động (Phân khúc công suất cao High-Volume)",
            "Tốc độ in / sao chụp": "55 trang/phút (A4), 27 trang/phút (A3)",
            "Màn hình bảng điều khiển": "Cảm ứng màu 10.1 inch e-BRIDGE Next đa điểm",
            "Độ phân giải": "2.400 x 600 dpi / 1.200 x 1.200 dpi",
            "Thời gian khởi động / Bản đầu": "Khoảng 20 giây / Khoảng 4.3 giây",
            "Bộ nạp & đảo bản gốc": "DSDF 300 tờ quét 2 mặt siêu tốc 240 ảnh/phút",
            "Khay chứa giấy tiêu chuẩn": "2 khay x 550 tờ + Khay đôi Tandem 2.000 tờ + Khay tay 100 tờ (Tổng 3.200 tờ)",
            "Bộ nhớ RAM / Ổ cứng": "4 GB RAM + 128 GB SSD tự mã hóa (SED)",
            "Định mức mực": "Hộp mực T-3008P / T-5008P (~43.900 trang A4)",
            "Xuất xứ & Bảo hành": "Chính hãng Toshiba Tec Nhật Bản, bảo hành 12 - 24 tháng / 200.000 bản chụp"
        },
        "description": """<div class='product-description-content'>
<p><strong>Máy photocopy Toshiba e-STUDIO 5528A</strong> thuộc phân khúc công suất cao (High-Volume) của Toshiba Tec, tốc độ 55 trang/phút với khay giấy tiêu chuẩn 3.200 tờ sẵn sàng cho các kỳ in sao đề thi và dự án in ấn trọng điểm.</p>
<h4>Tính năng nổi bật:</h4>
<ul>
<li><strong>Tốc độ 55 trang/phút:</strong> Chuyên trị các lệnh in số lượng hàng chục nghìn trang.</li>
<li><strong>Khay Tandem dung lượng 3.200 tờ:</strong> Chứa trọn 6 ram giấy A4 mà không cần nạp thêm.</li>
<li><strong>Bền bỉ chuẩn công nghiệp:</strong> Khung máy đúc hợp kim chắc chắn, vận hành liên tục 24/7 ổn định.</li>
</ul>
</div>"""
    },

    "toshiba-e-studio-6528a": {
        "name": "Máy photocopy Toshiba e-STUDIO 6528A",
        "model": "e-STUDIO 6528A",
        "manufacturer": "Toshiba (Nhật Bản)",
        "sku": "TOSHIBA-6528A",
        "category_label": "Máy photocopy đa chức năng",
        "specifications": {
            "Chức năng chuẩn": "Copy + In mạng + Scan màu mạng + Đảo mặt tự động (Siêu tải trọng Heavy Duty)",
            "Tốc độ in / sao chụp": "65 trang/phút (A4), 30 trang/phút (A3)",
            "Màn hình bảng điều khiển": "Cảm ứng màu 10.1 inch e-BRIDGE Next đa điểm",
            "Độ phân giải": "2.400 x 600 dpi / 1.200 x 1.200 dpi",
            "Thời gian khởi động / Bản đầu": "Khoảng 20 giây / Khoảng 4.3 giây",
            "Bộ nạp & đảo bản gốc": "DSDF Dual-Scan 300 tờ (240 ảnh/phút)",
            "Khay chứa giấy tiêu chuẩn": "Tổng 3.200 tờ (Mở rộng tối đa 5.200 tờ với khay nạp LCF tùy chọn)",
            "Bộ nhớ RAM / Ổ cứng": "4 GB RAM + 128 GB SSD tự mã hóa (SED)",
            "Định mức mực": "Hộp mực T-3008P / T-5008P (~43.900 trang A4)",
            "Xuất xứ & Bảo hành": "Chính hãng Toshiba Tec Nhật Bản, bảo hành 12 - 24 tháng / 250.000 bản chụp"
        },
        "description": """<div class='product-description-content'>
<p><strong>Máy photocopy Toshiba e-STUDIO 6528A</strong> là cỗ máy photocopy đen trắng tốc độ cao nhất 65 bản/phút của dòng 28A series, chịu tải cực lớn cho các trung tâm in ấn dịch vụ, nhà in đại học và cơ quan đầu ngành.</p>
<h4>Tính năng nổi bật:</h4>
<ul>
<li><strong>Tốc độ 65 trang/phút đỉnh cao:</strong> Xử lý tức thì các đợt phát hành tài liệu văn bản quy mô hàng nghìn trang.</li>
<li><strong>Sức chứa giấy mở rộng tới 5.200 tờ:</strong> Vận hành suốt ngày dài không cần dừng máy nạp giấy.</li>
<li><strong>Hệ thống quét ảnh kép Dual-Scan DSDF:</strong> Quét 240 ảnh/phút siêu tốc cho các dự án số hóa hồ sơ khổng lồ.</li>
</ul>
</div>"""
    },

    "toshiba-e-studio-457": {
        "name": "Máy photocopy Toshiba e-STUDIO 457",
        "model": "e-STUDIO 457",
        "manufacturer": "Toshiba (Nhật Bản)",
        "sku": "TOSHIBA-457",
        "category_label": "Máy photocopy đa chức năng",
        "specifications": {
            "Chức năng chuẩn": "Copy + In mạng + Scan màu mạng + Đảo mặt tự động (Duplex)",
            "Tốc độ in / sao chụp": "45 trang/phút (A4), 25 trang/phút (A3)",
            "Màn hình bảng điều khiển": "Cảm ứng LCD 9 inch sắc nét",
            "Độ phân giải": "2.400 x 600 dpi (với Smoothing)",
            "Khổ giấy hỗ trợ": "Khổ A5-R đến A3",
            "Bộ nạp & đảo bản gốc tự động": "RADF 100 tờ nạp và đảo tự động",
            "Khay chứa giấy": "2 khay x 550 tờ + Khay tay 100 tờ (Tổng 1.200 tờ)",
            "Bộ nhớ RAM / Ổ cứng": "RAM 2 GB + Ổ cứng 320 GB Toshiba Secure HDD (SED tự mã hóa)",
            "Ngôn ngữ in": "PCL5e, PCL6, PostScript 3",
            "Định mức mực": "Hộp mực T-5070P (~36.600 trang A4)",
            "Xuất xứ & Bảo hành": "Chính hãng Toshiba Tec Nhật Bản, bảo hành 12 - 24 tháng"
        },
        "description": """<div class='product-description-content'>
<p><strong>Máy photocopy Toshiba e-STUDIO 457</strong> là dòng máy photocopy tốc độ cao 45 bản/phút đã được kiểm chứng về độ bền bỉ cơ học vượt trội, nồi đồng cối đá và cực kỳ thân thiện với người sử dụng văn phòng.</p>
<h4>Tính năng nổi bật:</h4>
<ul>
<li><strong>Tốc độ 45 bản/phút bền bỉ:</strong> Hoạt động ổn định liên tục, ít kẹt giấy và độ bền linh kiện cao.</li>
<li><strong>Ổ cứng mã hóa SED 320 GB:</strong> Lưu trữ tài liệu trực tiếp trên máy và bảo vệ an toàn dữ liệu.</li>
<li><strong>Chi phí vận hành tiết kiệm:</strong> Hộp mực lớn 36.600 trang, linh kiện thay thế thông dụng sẵn có.</li>
</ul>
</div>"""
    },

    "toshiba-e-studio-2500ac": {
        "name": "Máy photocopy Màu Toshiba e-STUDIO 2500AC",
        "model": "e-STUDIO 2500AC",
        "manufacturer": "Toshiba (Nhật Bản)",
        "sku": "TOSHIBA-2500AC",
        "category_label": "Máy photocopy màu đa chức năng",
        "specifications": {
            "Chức năng chuẩn": "Copy Màu + In Màu mạng + Scan Màu mạng + Đảo mặt tự động",
            "Tốc độ in / sao chụp": "25 trang/phút Màu & Đen trắng (A4), 15 trang/phút (A3)",
            "Màn hình bảng điều khiển": "Cảm ứng màu 10.1 inch e-BRIDGE Next đa điểm",
            "Độ phân giải": "600 x 600 dpi, 1.200 x 1.200 dpi (PS3), 3.600 x 1.200 dpi (với Smoothing)",
            "Khổ giấy hỗ trợ": "A5-R đến A3, hỗ trợ giấy Banner dài 1.200 mm",
            "Định lượng giấy": "Khay chuẩn: 60 – 163 g/m²; Khay tay (Bypass): 60 – 209 g/m²",
            "Bộ nạp & đảo bản gốc": "RADF 100 tờ hoặc DSDF 300 tờ",
            "Khay chứa giấy": "1 khay x 250 tờ + Khay tay 100 tờ (Mở rộng tới 2.900 tờ)",
            "Bộ nhớ RAM / Ổ cứng": "RAM 4 GB + Ổ cứng 320 GB Toshiba Secure HDD (SED tự mã hóa)",
            "Ngôn ngữ in": "PCL5c, PCL6, PostScript 3, PDF, XPS",
            "Xuất xứ & Bảo hành": "Chính hãng Toshiba Tec Nhật Bản, bảo hành 12 - 24 tháng"
        },
        "description": """<div class='product-description-content'>
<p><strong>Máy photocopy Màu Toshiba e-STUDIO 2500AC</strong> là giải pháp in màu laser khổ A3 chuyên nghiệp dành cho các doanh nghiệp thiết kế, công ty quảng cáo, trường quốc tế và khối văn phòng cần ấn phẩm màu sắc nét.</p>
<h4>Tính năng nổi bật:</h4>
<ul>
<li><strong>Chất lượng in màu sống động:</strong> Tái tạo màu sắc chân thực, gam màu rộng, chuẩn màu đồ họa thiết kế.</li>
<li><strong>Hỗ trợ in Banner dài 1.2m:</strong> Tự in poster, băng rôn, biểu ngữ quảng cáo ngay tại văn phòng.</li>
<li><strong>Màn hình cảm ứng 10.1 inch e-BRIDGE Next:</strong> Giao diện thông minh, dễ dùng như máy tính bảng.</li>
</ul>
</div>"""
    },

    "toshiba-e-studio-3005ac": {
        "name": "Máy photocopy Màu Toshiba e-STUDIO 3005AC",
        "model": "e-STUDIO 3005AC",
        "manufacturer": "Toshiba (Nhật Bản)",
        "sku": "TOSHIBA-3005AC",
        "category_label": "Máy photocopy màu đa chức năng",
        "specifications": {
            "Chức năng chuẩn": "Copy Màu + In Màu mạng + Scan Màu mạng + Đảo mặt tự động",
            "Tốc độ in / sao chụp": "30 trang/phút Màu & Đen trắng (A4), 16 trang/phút (A3)",
            "Màn hình bảng điều khiển": "Cảm ứng màu 10.1 inch e-BRIDGE Next đa điểm",
            "Độ phân giải": "600 x 600 dpi, 1.200 x 1.200 dpi (PS3)",
            "Khổ giấy hỗ trợ": "A5-R đến A3, giấy Banner 1.200 mm",
            "Định lượng giấy": "Khay chuẩn: 60 – 256 g/m²; Khay tay: 52 – 280 g/m²",
            "Bộ nạp & đảo bản gốc": "RADF 100 tờ hoặc DSDF 300 tờ",
            "Khay chứa giấy": "2 khay x 550 tờ + Khay tay 100 tờ (Tổng 1.200 tờ, mở rộng 3.200 tờ)",
            "Bộ nhớ RAM / Ổ cứng": "RAM 4 GB + Ổ cứng 320 GB SED tự mã hóa",
            "Xuất xứ & Bảo hành": "Chính hãng Toshiba Tec Nhật Bản, bảo hành 12 - 24 tháng"
        },
        "description": """<div class='product-description-content'>
<p><strong>Máy photocopy Màu Toshiba e-STUDIO 3005AC</strong> là thiết bị đa chức năng in màu A3 tốc độ 30 trang/phút, đáp ứng hoàn hảo nhu cầu in ấn tài liệu thuyết trình, catalogue và báo cáo thường niên cao cấp.</p>
<h4>Tính năng nổi bật:</h4>
<ul>
<li><strong>Tốc độ 30 trang/phút Màu & Đen trắng:</strong> Nhanh chóng, hiệu quả, tiết kiệm thời gian chờ đợi.</li>
<li><strong>In giấy dày tới 280 g/m²:</strong> Thoải mái in giấy bìa cứng, giấy ảnh, chứng chỉ và giấy khen.</li>
<li><strong>Quản lý chi phí in màu theo tài khoản:</strong> Phân quyền in màu cho từng phòng ban, tránh lãng phí.</li>
</ul>
</div>"""
    },

    "toshiba-e-studio-3505ac": {
        "name": "Máy photocopy Màu Toshiba e-STUDIO 3505AC",
        "model": "e-STUDIO 3505AC",
        "manufacturer": "Toshiba (Nhật Bản)",
        "sku": "TOSHIBA-3505AC",
        "category_label": "Máy photocopy màu đa chức năng",
        "specifications": {
            "Chức năng chuẩn": "Copy Màu + In Màu mạng + Scan Màu mạng + Đảo mặt tự động",
            "Tốc độ in / sao chụp": "35 trang/phút Màu & Đen trắng (A4), 18 trang/phút (A3)",
            "Màn hình bảng điều khiển": "Cảm ứng màu 10.1 inch e-BRIDGE Next đa điểm",
            "Độ phân giải": "600 x 600 dpi, 1.200 x 1.200 dpi (PS3)",
            "Khổ giấy hỗ trợ": "A5-R đến A3, giấy Banner 1.200 mm",
            "Định lượng giấy": "Khay chuẩn: 60 – 256 g/m²; Khay tay: 52 – 280 g/m²",
            "Bộ nạp & đảo bản gốc": "DSDF Dual-Scan quét 2 mặt siêu tốc 240 ảnh/phút",
            "Khay chứa giấy": "2 khay x 550 tờ + Khay tay 100 tờ (Tổng 1.200 tờ, mở rộng 3.200 tờ)",
            "Bộ nhớ RAM / Ổ cứng": "RAM 4 GB + Ổ cứng 320 GB SED tự mã hóa",
            "Xuất xứ & Bảo hành": "Chính hãng Toshiba Tec Nhật Bản, bảo hành 12 - 24 tháng"
        },
        "description": """<div class='product-description-content'>
<p><strong>Máy photocopy Màu Toshiba e-STUDIO 3505AC</strong> là cỗ máy in màu laser A3 tốc độ cao 35 trang/phút đỉnh cao của Toshiba, trang bị khay quét DSDF Dual-Scan quét 240 ảnh/phút siêu tốc.</p>
<h4>Tính năng nổi bật:</h4>
<ul>
<li><strong>Công suất in màu mạnh mẽ 35 trang/phút:</strong> Màu sắc chuẩn xác, đồng nhất trên từng trang in.</li>
<li><strong>Khay Dual-Scan DSDF 240 ảnh/phút:</strong> Quét màu 2 mặt đồng thời, biến máy thành trung tâm số hóa tài liệu màu chuyên nghiệp.</li>
<li><strong>Hỗ trợ in giấy dày 280 g/m² và Banner 1.2m:</strong> Sáng tạo mọi ấn phẩm truyền thông trực tiếp tại cơ quan.</li>
</ul>
</div>"""
    }
}

def update_products_json():
    with open(DATA_PATH, 'r', encoding='utf-8') as f:
        data = json.load(f)

    models = data.get('models', [])
    updated_count = 0

    all_updates = {**DUPLO_DATA, **TOSHIBA_DATA}

    for m in models:
        slug = m.get('slug')
        if slug in all_updates:
            up = all_updates[slug]
            if 'specifications' in up:
                m['specifications'] = up['specifications']
            if 'description' in up:
                m['description'] = up['description']
            if 'name' in up:
                m['name'] = up['name']
            if 'model' in up:
                m['model'] = up['model']
            if 'manufacturer' in up:
                m['manufacturer'] = up['manufacturer']
            updated_count += 1
            print(f"Updated {slug}: {len(m['specifications'])} spec rows, has_desc: {bool(m.get('description'))}")

    with open(DATA_PATH, 'w', encoding='utf-8') as f:
        json.dump(data, f, ensure_ascii=False, indent=2)

    print(f"\nSuccessfully updated {updated_count} models in {DATA_PATH}!")

if __name__ == '__main__':
    update_products_json()
