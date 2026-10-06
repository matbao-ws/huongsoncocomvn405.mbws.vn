# -*- coding: utf-8 -*-
"""
Chuẩn hóa 100% hình ảnh không trùng lặp và tối ưu SEO, GEO, AEO cho toàn bộ 32 bài viết:
1. Không lặp ảnh: Ảnh đại diện (hero) không bao giờ xuất hiện lại trong thân bài (body figures).
2. Tối đa hóa tính độc bản (uniqueness) trên toàn bộ 32 bài viết từ kho 111 ảnh máy móc, thiết bị thực tế.
3. Bổ sung Geo Local Authority Card (Trụ sở Cầu Giấy, Xưởng Đống Đa, Hotline, địa bàn miền Bắc) tăng cường GEO.
4. Chú thích kỹ thuật figcaption giàu thông tin (model, thông số kỹ thuật, ứng dụng).
"""
import os
import json
import re

HERE = os.path.dirname(os.path.abspath(__file__))
JSON_PATH = os.path.join(HERE, "strategic_posts.json")

with open(JSON_PATH, "r", encoding="utf-8") as f:
    posts = json.load(f)

GEO_BOX_HTML = """
  <!-- GEO Local Authority Card -->
  <div class="my-6 p-4 bg-gray-50 border-l-4 border-[#1A9900] rounded-r-lg not-prose text-xs text-gray-700 space-y-1.5">
    <div class="font-bold text-gray-900 text-sm flex items-center gap-2">
      <i class="fa-solid fa-location-dot text-[#1A9900]"></i>
      <span>Công Ty TNHH Thiết Bị Văn Phòng Hương Sơn – Đối Tác Độc Quyền & Ủy Quyền Miền Bắc</span>
    </div>
    <p><strong>Trụ sở chính:</strong> 28 Nguyễn Phong Sắc, P. Dịch Vọng Hậu, Q. Cầu Giấy, TP. Hà Nội</p>
    <p><strong>Trung tâm kỹ thuật & Kho thiết bị:</strong> Số 12 Ngõ 19 Trần Quang Diệu, P. Ô Chợ Dừa, Q. Đống Đa, TP. Hà Nội</p>
    <p><strong>Hotline tư vấn & Cứu hộ SLA 2h:</strong> <a href="tel:0913222003" class="text-[#1A9900] font-bold">0913.222.003</a> – Phục vụ thần tốc tại Hà Nội, KCN Bắc Ninh, Vĩnh Phúc, Hưng Yên, Hải Phòng, Thái Nguyên và các Sở GD&ĐT miền Bắc.</p>
  </div>
"""

# Phân bổ 100% ảnh độc bản cho từng bài viết: hero + 2 ảnh body hoàn toàn khác nhau
# Đảm bảo không trùng nhau trong cùng một bài, và hạn chế tối đa trùng giữa các bài
ARTICLE_IMAGE_MATRIX = {
    # 1. Duplo In sao đề thi THPT
    "giai-phap-may-in-sieu-toc-duplo-in-sao-de-thi-thpt-so-gddt": {
        "hero": "/assets/images/proof/in-sao-de-thi-duplo.jpg",
        "figures": [
            ("/assets/images/products/108-may-in-nhan-ban-sieu-toc-duplo-dp-x650.jpg",
             "Máy in siêu tốc Duplo DP-X650 công suất 150 trang/phút",
             "Máy in siêu tốc Duplo DP-X650 ứng dụng công nghệ ép lạnh Cold Press không tích điện trên giấy mỏng 60gsm."),
            ("/assets/images/products/30-duplo-dp-x850.png",
             "Máy in siêu tốc Duplo DP-X850 độ phân giải HD 600x600 DPI",
             "Đầu khắc kim nhiệt siêu mịn của Duplo DP-X850 đảm bảo các công thức toán học và biểu đồ hình học sắc cạnh tuyệt đối.")
        ]
    },
    # 2. Cho thuê máy photocopy ngân hàng
    "giai-phap-cho-thue-may-photocopy-bao-mat-ngan-hang-doanh-nghiep": {
        "hero": "/assets/images/proof/ban-giao-vietcombank.jpg",
        "figures": [
            ("/assets/images/products/62-may-photocopy-toshiba-e-studio-3518a.jpg",
             "Máy photocopy Toshiba e-STUDIO 3518A tích hợp ổ cứng mã hóa SED",
             "Toshiba e-STUDIO 3518A với tính năng xóa ghi đè dữ liệu tự động Data Overwrite Security đạt chuẩn DoD 5220.22-M."),
            ("/assets/images/products/vietcombank-2024.jpg",
             "Dự án triển khai máy photocopy bảo mật cho hệ thống Vietcombank",
             "Hình ảnh thực tế bàn giao và tích hợp xác thực thẻ RFID cho chuỗi phòng giao dịch ngân hàng.")
        ]
    },
    # 3. Chuyển dịch CapEx sang OpEx
    "chuyen-dich-mo-hinh-tu-ban-may-sang-cho-thue-va-dich-vu-tron-goi": {
        "hero": "/assets/images/proof/kho-thiet-bi-huong-son.jpg",
        "figures": [
            ("/assets/images/products/61-may-photocopy-toshiba-e-studio-4518a.jpg",
             "Máy photocopy Toshiba e-STUDIO 4518A công suất cao",
             "Thuê máy công suất cao giúp doanh nghiệp tối ưu dòng tiền, loại bỏ 100% rủi ro khấu hao tài sản cố định."),
            ("/assets/images/products/66-e-studio5008a.jpg",
             "Máy photocopy Toshiba e-STUDIO 5008A tải nặng",
             "Dễ dàng nâng cấp dòng máy tốc độ 50 trang/phút khi nhu cầu mở rộng mà không tốn chi phí mua sắm mới.")
        ]
    },
    # 4. Số hóa Thông tư 02
    "quy-trinh-so-hoa-tai-lieu-thong-tu-02-va-hoc-ba-dien-tu-moet": {
        "hero": "/assets/images/products/ricoh-fi-8170.png",
        "figures": [
            ("/assets/images/products/ricoh-fi-7700.jpg",
             "Máy scan công nghiệp phẳng Flatbed kết hợp ADF Ricoh fi-7700",
             "Ricoh fi-7700 công suất quét 30.000 trang/ngày, chuyên dụng cho số hóa hồ sơ học bạ và lưu trữ lịch sử."),
            ("/assets/images/products/ricoh-ix2500.png",
             "Máy quét tài liệu Ricoh ScanSnap iX2500 xử lý hình ảnh tự động",
             "Tự động cân chỉnh độ nghiêng, xóa trang trắng và trích xuất PDF/A-1b Searchable chuẩn Thông tư 02.")
        ]
    },
    # 5. Duplo DFC hoàn thiện sau in
    "giai-phap-may-phoi-trang-gap-ghim-tu-dong-duplo-dfc-hoan-thien-sau-in": {
        "hero": "/assets/images/products/duplo-dfc-122.jpg",
        "figures": [
            ("/assets/images/products/40-may-phoi-trang-dfc-120.png",
             "Máy phối trang 12 khay Duplo DFC-120",
             "Hệ thống cảm biến hồng ngoại phát hiện giấy kép và thiếu trang chuẩn xác trên từng khay nạp."),
            ("/assets/images/products/36-may-giap-ghim-duplo-dfc-sii-ket-noi-voi-dfc-100-101-120.jpg",
             "Máy dập ghim gập đôi tự động Duplo DFC-SII",
             "Module hoàn thiện liên hoàn tốc độ 2.400 tập đề thi/kỷ yếu mỗi giờ, thay thế 6 nhân công thủ công.")
        ]
    },
    # 6. Khu vực cách ly đề thi 3 vòng & N+1
    "tieu-chuan-khu-vuc-in-sao-de-thi-cach-ly-3-vong-va-du-phong-n-1": {
        "hero": "/assets/images/proof/ban-giao-thiet-bi-tan-noi.jpg",
        "figures": [
            ("/assets/images/products/107-may-in-nhan-ban-sieu-toc-duplo-dp-x550.jpg",
             "Máy in siêu tốc Duplo DP-X550 cấu hình dự phòng nóng N+1",
             "Mô hình N+1: Máy in Duplo dự phòng luôn túc trực tại hiện trường sẵn sàng hoạt động trong 15 phút."),
            ("/assets/images/products/24-dp-u950.jpg",
             "Máy in siêu tốc công nghiệp Duplo DP-U950",
             "Dòng máy tải nặng in liên tục hàng chục vạn bản đề thi tốt nghiệp THPT trong điều kiện cách ly tuyệt đối.")
        ]
    },
    # 7. Định mức vật tư mực in, master Duplo
    "dinh-muc-vat-tu-muc-in-cuon-master-va-giay-in-de-thi-thpt": {
        "hero": "/assets/images/products/95-bang-tra-ma-muc-master-may-in-duplo.jpg",
        "figures": [
            ("/assets/images/products/muc-in-master-duplo.jpg",
             "Mực in và cuộn master Duplo chính hãng Nhật Bản",
             "Mực in gốc dầu thực vật đậu nành khô tức thì sau 0.8 giây, kháng nước tuyệt đối khi thí sinh làm bài."),
            ("/assets/images/products/46-muc-may-in-duplo-dp-f550.jpg",
             "Ống mực in siêu tốc Duplo DP-F550 dung tích 1000ml",
             "Định mức chuẩn: Một ống mực 1000ml in được 18.000 – 22.000 trang A4 với chi phí chỉ 18 – 25 đồng/trang.")
        ]
    },
    # 8. Bảo mật in ấn RFID
    "bao-mat-in-an-xac-thuc-the-rfid-va-chong-that-thoat-du-lieu-ngan-hang": {
        "hero": "/assets/images/products/118-may-photocopy-don-sac-da-chuc-nang-bizhub-650i-550i-450i.jpg",
        "figures": [
            ("/assets/images/products/toshiba-e-studio-2500ac.jpg",
             "Máy photocopy màu Toshiba tích hợp đầu đọc thẻ RFID",
             "Giải pháp Pull Printing: Tài liệu chỉ nhả ra khi nhân sự quẹt thẻ Mifare trực tiếp tại khay máy."),
            ("/assets/images/products/117-may-photocopy-don-sac-da-chuc-nang-bizhub-360i-300i.jpg",
             "Konica Minolta bizhub 360i quản lý truy cập người dùng",
             "Phân quyền in ấn chặt chẽ theo mã phòng ban, triệt tiêu 100% tình trạng lộ lọt sao kê tín dụng.")
        ]
    },
    # 9. Dịch vụ MPS ngân hàng
    "dich-vu-quan-ly-in-an-mps-cho-chuoi-chi-nhanh-ngan-hang-tai-chinh": {
        "hero": "/assets/images/products/toshiba-e-studio-3028a.jpg",
        "figures": [
            ("/assets/images/products/69-e-studio2508a.jpg",
             "Máy photocopy Toshiba e-STUDIO 2508A tại phòng giao dịch",
             "Mô hình MPS giám sát lượng in tập trung, tự động phát hiện và cấp mực trước khi máy cạn."),
            ("/assets/images/products/119-may-photocopy-don-sac-da-chuc-nang-bizhub-750i.jpg",
             "Máy in công suất lớn Konica Minolta bizhub 750i cho trung tâm xử lý dữ liệu",
             "Tối ưu hóa chi phí vận hành cho các hội sở và chi nhánh tài chính quy mô lớn.")
        ]
    },
    # 10. So sánh thuê và mua TCO
    "so-sanh-thue-va-mua-may-photocopy-bai-toan-tai-chinh-doanh-nghiep": {
        "hero": "/assets/images/products/63-may-photocopy-toshiba-e-studio-2518a.jpg",
        "figures": [
            ("/assets/images/products/112-may-photocopy-toshiba-e-studio-2329a.jpg",
             "Máy photocopy văn phòng Toshiba e-STUDIO 2329A",
             "Chi phí thuê chỉ từ 800.000đ/tháng, doanh nghiệp không phải bỏ ra 40-60 triệu mua đứt thiết bị."),
            ("/assets/images/products/toshiba-e-studio-4528a.jpg",
             "Máy photocopy tốc độ cao Toshiba e-STUDIO 4528A",
             "Hương Sơn bao trọn gói 100% linh kiện hao mòn, mực in và kỹ thuật bảo trì định kỳ.")
        ]
    },
    # 11. Bảo trì ngăn ngừa & SLA 2h
    "quy-trinh-bao-tri-ngan-ngua-va-cam-ket-sla-ky-thuat-duoi-2-gio": {
        "hero": "/assets/images/proof/doi-ngu-ky-thuat-pdi.jpg",
        "figures": [
            ("/assets/images/products/cum-say-fuser-roller.jpg",
             "Bảo dưỡng cụm sấy fuser roller máy photocopy",
             "Vệ sinh và tra dầu chịu nhiệt định kỳ giúp ngăn chặn triệt để nguy cơ kẹt giấy và rách bao lụa."),
            ("/assets/images/products/drum-bot-tu-photocopy.jpg",
             "Kiểm tra trống drum OPC và cụm bột từ",
             "Kỹ sư Hương Sơn đo lường độ hao mòn linh kiện để chủ động thay mới trước khi phát sinh sự cố.")
        ]
    },
    # 12. Số hóa hồ sơ địa chính
    "so-hoa-ho-so-dia-chinh-dat-dai-va-tu-phap-cong-chung-chuan-quoc-gia": {
        "hero": "/assets/images/products/ricoh-fi-7700.jpg",
        "figures": [
            ("/assets/images/products/ricoh-fi-7600.jpg",
             "Máy scan công nghiệp Ricoh fi-7600 nạp giấy thẳng",
             "Cơ chế nạp giấy phẳng xoay ngang xử lý an toàn bản đồ địa chính khổ lớn mà không làm rách mép."),
            ("/assets/images/products/ricoh-sv600.jpg",
             "Máy scan chụp không tiếp xúc Ricoh ScanSnap SV600",
             "Quét tài liệu từ trên cao bằng quang học thông minh, bảo tồn nguyên vẹn hiện vật các cuốn sổ đỏ cổ.")
        ]
    },
    # 13. Đánh giá Ricoh fi-series & OCR
    "danh-gia-may-scan-ricoh-fi-series-va-cong-nghe-ocr-tieng-viet": {
        "hero": "/assets/images/products/ricoh-fi-8170.png",
        "figures": [
            ("/assets/images/products/ricoh-fi-8270.png",
             "Máy scan phẳng kết hợp ADF Ricoh fi-8270",
             "Khay nạp ADF tốc độ 70 trang/phút kết hợp mặt kính phẳng linh hoạt cho văn bản dày."),
            ("/assets/images/products/ricoh-pick-roller-fi-8170.jpg",
             "Quả đào kéo giấy Pick Roller chính hãng Ricoh",
             "Vật liệu cao su chịu mài mòn cao duy trì lực kéo ổn định trên 200.000 lượt quét liên tục.")
        ]
    },
    # 14. Tự động hóa đóng tập đề thi giáo trình
    "tu-dong-hoa-khau-dong-tap-de-thi-giao-trinh-phong-in-truong-hoc": {
        "hero": "/assets/images/products/36-may-giap-ghim-duplo-dfc-sii-ket-noi-voi-dfc-100-101-120.jpg",
        "figures": [
            ("/assets/images/products/40-may-phoi-trang-dfc-120.png",
             "Tháp phối trang Duplo DFC-120 12 ngăn nạp",
             "Phối các trang đề thi và giáo trình theo đúng thứ tự logic, không bao giờ xảy ra lỗi nhầm trang."),
            ("/assets/images/products/39-dfc-sii.jpg",
             "Module dập ghim gập đôi tự động Duplo",
             "Hoàn thiện tập tài liệu phẳng phiu, nếp gập sắc cạnh phục vụ phòng in khảo thí trường học.")
        ]
    },
    # 15. Cẩm nang vận hành Duplo DFC
    "cam-nang-van-hanh-can-chinh-va-bao-duong-may-phoi-trang-duplo-dfc": {
        "hero": "/assets/images/products/41-may-phoi-trang-duplo-dfc-100.jpg",
        "figures": [
            ("/assets/images/products/38-dsc-10-20.jpg",
             "Tháp phối trang công nghiệp hút khí Duplo DSC-10/20",
             "Cơ cấu thổi khí tách mép giấy giúp xử lý mượt mà cả giấy tráng phủ couches/bristol trơn trượt."),
            ("/assets/images/products/duplo-dfc-122.jpg",
             "Dây chuyền phối trang Duplo DFC-122 hoàn thiện",
             "Quy trình cân chỉnh cữ ghim và rulo định kỳ giúp nâng cao tuổi thọ cơ khí máy lên trên 10 năm.")
        ]
    },
    # 16. Xử lý kẹt giấy đề thi gấp rút
    "kinh-nghiem-xu-ly-su-co-ket-giay-lech-dong-khi-in-sao-de-thi-gap-rut": {
        "hero": "/assets/images/products/108-may-in-nhan-ban-sieu-toc-duplo-dp-x650.jpg",
        "figures": [
            ("/assets/images/products/20-may-in-nhan-ban-sieu-toc-duplo-dp-g325.jpg",
             "Máy in siêu tốc Duplo DP-G325 bền bỉ",
             "Khay nạp giấy 3 quả đào cao su quét mượt mà giấy mỏng nội địa Bãi Bằng 60gsm."),
            ("/assets/images/products/44-spare-drum.jpg",
             "Trống in drum màu Duplo dự phòng",
             "Vệ sinh lưỡi gạt Stripper Blade trên trống drum bằng khăn mềm cồn IPA để loại bỏ bụi giấy dính bám.")
        ]
    },
    # 17. So sánh Duplo và Riso
    "so-sanh-may-in-sieu-toc-duplo-va-riso-trong-khao-thi-giao-duc": {
        "hero": "/assets/images/products/29-dp-g205.jpg",
        "figures": [
            ("/assets/images/products/21-may-in-nhan-ban-sieu-toc-duplo-dp-g205-duplo-dp-g325.jpg",
             "Bộ đôi máy in siêu tốc Duplo DP-G205 và DP-G325",
             "Độ bền cơ khí trên 10 triệu bản in và khả năng xóa master bảo mật Confident Mode độc quyền."),
            ("/assets/images/products/45-muc-nen-dung-cho-duplo.jpg",
             "Mực in siêu tốc Duplo chính hãng",
             "Tiêu hao mực gốc dầu thực vật Duplo thấp hơn 12% so với dòng mực nhũ tương tương đương.")
        ]
    },
    # 18. In đề thi trắc nghiệm barcode (ĐỘC BẢN 100%)
    "giai-phap-in-de-thi-trac-nghiem-ma-de-barcode-chong-gian-lan": {
        "hero": "/assets/images/products/107-may-in-nhan-ban-sieu-toc-duplo-dp-x550.jpg",
        "figures": [
            ("/assets/images/products/duplo-dp-x650.jpg",
             "Máy in siêu tốc Duplo DP-X650 phân luồng mã đề thi",
             "Công nghệ phân tách mã đề tự động đảm bảo độ tương phản barcode trên 85% cho máy quét OMR."),
            ("/assets/images/products/56-ricoh-dx4450.png",
             "Máy in nhân bản kỹ thuật số Ricoh DX4450 sắc nét",
             "Đầu in nhiệt chất lượng cao giúp thanh vạch mã Code 128 và Data Matrix không bị biến dạng độ rộng.")
        ]
    },
    # 19. Bảo quản kho giấy mùa nồm
    "huong-dan-bao-quan-kho-giay-in-de-thi-chong-am-mua-nom-mien-bac": {
        "hero": "/assets/images/products/57-ricoh-dx3443.jpg",
        "figures": [
            ("/assets/images/products/24-dp-u950.jpg",
             "Máy in siêu tốc Duplo DP-U950 trang bị sấy khí khay nạp",
             "Luồng khí ấm Air Jet thổi tơi giấy trước khi nạp vào rulo, loại bỏ hiện tượng dính kép do ẩm."),
            ("/assets/images/products/58-ricoh-dx2430.jpg",
             "Máy in nhân bản Ricoh DX2430 hoạt động ổn định trong mùa nồm",
             "Bảo quản giấy ở độ ẩm 45-55% RH giúp các dòng máy nhân bản kéo giấy ngọt không nhăn mép.")
        ]
    },
    # 20. PCCC & Lọc Ozone phòng in ngân hàng
    "tieu-chuan-an-toan-chong-chay-no-va-loc-bui-ozone-phong-in-ngan-hang": {
        "hero": "/assets/images/products/konica-minolta-bizhub-360i.jpg",
        "figures": [
            ("/assets/images/products/toshiba-e-studio-6528a.jpg",
             "Máy photocopy công suất lớn Toshiba e-STUDIO 6528A",
             "Mạch ngắt nhiệt cảm biến kép chống quá nhiệt cụm sấy, đảm bảo an toàn tuyệt đối PCCC phòng in."),
            ("/assets/images/products/119-may-photocopy-don-sac-da-chuc-nang-bizhub-750i.jpg",
             "Konica Minolta bizhub 750i đạt chuẩn khí thải Blue Angel",
             "Màng xúc tác than hoạt tính phân hủy ozone về dưới 0.05 ppm bảo vệ sức khỏe nhân sự vận hành.")
        ]
    },
    # 21. Case study 120 PGD ngân hàng
    "case-study-quan-ly-chi-phi-in-an-tai-120-phong-giao-dich-ngan-hang": {
        "hero": "/assets/images/products/toshiba-e-studio-2829a.jpg",
        "figures": [
            ("/assets/images/products/62-may-photocopy-toshiba-e-studio-3518a.jpg",
             "Đồng bộ hóa 150 máy Toshiba e-STUDIO 3518A cho hệ thống ngân hàng",
             "Cắt giảm 38.4% chi phí in ấn hàng tháng nhờ mô hình quản lý tập trung và xác thực quẹt thẻ."),
            ("/assets/images/products/102-may-dem-tien-xinda-bc28f.jpg",
             "Máy đếm tiền chuyên dụng Xinda BC-28F tại quầy giao dịch",
             "Hương Sơn cung cấp trọn bộ thiết bị sao chụp chứng từ và máy đếm tiền phát hiện tiền giả chuẩn xác.")
        ]
    },
    # 22. In di động Private Cloud Print
    "trien-khai-in-an-di-dong-va-private-cloud-print-bao-mat-hoi-so-tai-chinh": {
        "hero": "/assets/images/products/toshiba-e-studio-2500ac.jpg",
        "figures": [
            ("/assets/images/products/71-e-studio3505ac.jpg",
             "Máy photocopy màu Toshiba e-STUDIO 3505AC hỗ trợ e-BRIDGE Cloud",
             "Kiến trúc Private Cloud On-Premise cho phép cán bộ in an toàn từ smartphone trong mạng LAN."),
            ("/assets/images/products/72-e-studio3005ac.jpg",
             "Toshiba e-STUDIO 3005AC xác thực sinh trắc học",
             "Bản in chỉ được giải phóng khi người dùng quét khuôn mặt hoặc thẻ chip tại trạm in.")
        ]
    },
    # 23. Bảng giá thuê máy photocopy 2026
    "bang-gia-cho-thue-may-photocopy-van-phong-moi-nhat-ha-noi-mien-bac": {
        "hero": "/assets/images/products/112-may-photocopy-toshiba-e-studio-2329a.jpg",
        "figures": [
            ("/assets/images/products/93-e-studio3008a.jpg",
             "Toshiba e-STUDIO 3008A gói thuê doanh nghiệp",
             "Đơn giá minh bạch từ 800k - 1.8tr/tháng, miễn phí cọc máy, bao trọn gói mực và linh kiện thay thế."),
            ("/assets/images/products/96-toshiba-e-studio-457.jpg",
             "Toshiba e-STUDIO 457 bền bỉ tốc độ 45 trang/phút",
             "Định mức linh hoạt, hỗ trợ đổi máy mới trong 24 giờ nếu có sự cố kỹ thuật bất khả kháng.")
        ]
    },
    # 24. 10 lỗi vận hành máy photocopy
    "10-loi-thuong-gap-khien-may-photocopy-nhanh-hong-va-cach-phong-ngua": {
        "hero": "/assets/images/products/drum-bot-tu-photocopy.jpg",
        "figures": [
            ("/assets/images/products/59-muc-toshiba-2508a-3008a-3508a-4508a-500.jpg",
             "Mực in chính hãng Toshiba chất lượng cao",
             "Tránh sử dụng mực trôi nổi giá rẻ làm xước trống drum và tắc nghẽn đường ống dẫn bột mực."),
            ("/assets/images/products/cum-say-fuser-roller.jpg",
             "Cụm sấy fuser roller dễ bị rách do dính ghim sắt",
             "Luôn tháo sạch ghim kẹp trước khi scan để không làm rách bao lụa và vỡ bạc đạn sấy.")
        ]
    },
    # 25. Cẩm nang bàn giao đào tạo nhân sự mới
    "cam-nang-ban-giao-dao-tao-van-hanh-may-photocopy-cho-nhan-su-moi": {
        "hero": "/assets/images/products/113-may-photocopy-toshiba-e-studio-2829a.jpg",
        "figures": [
            ("/assets/images/products/toshiba-e-studio-2329a.jpg",
             "Thao tác nạp giấy và thay mực trên máy Toshiba e-STUDIO",
             "Kỹ thuật viên Hương Sơn hướng dẫn trực tiếp quy tắc lấy giấy kẹt theo chiều quay bánh xe an toàn."),
            ("/assets/images/products/98-cho-thue-toshiba-e-studio-456.jpg",
             "Cấu hình Scan to Folder qua giao thức SMB v3",
             "Thiết lập thư mục mạng chia sẻ giúp nhân viên hành chính scan chứng từ tức thì về máy tính.")
        ]
    },
    # 26. Chính sách đổi máy mới trong 24h
    "chinh-sach-doi-may-moi-ngay-khi-gap-su-co-khong-the-khac-phuc-trong-24h": {
        "hero": "/assets/images/products/120-toshiba-e-studio-6528a.jpg",
        "figures": [
            ("/assets/images/products/toshiba-e-studio-457.jpg",
             "Máy photocopy dự phòng sẵn sàng điều động cứu hộ",
             "Cam kết SLA vàng: Đổi máy tương đương hoặc đời cao hơn trong vòng 24 giờ hoàn toàn miễn phí."),
            ("/assets/images/products/73-e-studio2500ac.jpg",
             "Đội ngũ kỹ thuật hỗ trợ chuyển đổi cấu hình mạng LAN",
             "Sao lưu toàn bộ danh bạ scan và mã người dùng sang máy mới, không làm gián đoạn công việc.")
        ]
    },
    # 27. Kinh tế tuần hoàn thu hồi tái chế mực
    "kinh-te-tuan-hoan-va-giai-phap-tai-che-muc-linh-kien-may-in-huong-son": {
        "hero": "/assets/images/products/muc-fansipan-toner.jpg",
        "figures": [
            ("/assets/images/products/84-muc-fansipan-tonner-black.jpg",
             "Hộp mực in thân thiện môi trường FANSIPAN",
             "Thu hồi 100% vỏ chai mực rỗng sau sử dụng, tiêu hủy cặn mực hạt nano theo chuẩn ISO 14001."),
            ("/assets/images/products/drum-bot-tu-photocopy.jpg",
             "Phân loại linh kiện kim loại và vi mạch tái chế",
             "Hương Sơn cung cấp chứng chỉ xử lý rác thải điện tử giúp khách hàng hoàn thiện báo cáo ESG.")
        ]
    },
    # 28. So sánh scan ADF và Flatbed
    "so-sanh-may-scan-cuon-adf-va-may-scan-phang-flatbed-trong-so-hoa-tai-lieu": {
        "hero": "/assets/images/products/kodak-alaris-s2080w.jpg",
        "figures": [
            ("/assets/images/products/ricoh-fi-7160.jpg",
             "Máy scan tài liệu cuốn tự động Ricoh fi-7160 tốc độ 60 trang/phút",
             "Khay nạp ADF nạp giấy siêu tốc, trang bị cảm biến sóng siêu âm chống kẹt giấy kép."),
            ("/assets/images/products/ricoh-fi-7700s.jpg",
             "Máy scan phẳng Flatbed Ricoh fi-7700S cho văn bản đóng quyển",
             "Quét mặt phẳng tuyệt đối an toàn cho tài liệu rách mỏng, sổ địa bạ không được tháo gáy.")
        ]
    },
    # 29. Tích hợp số hóa vào iOffice / vOffice
    "tich-hop-du-lieu-so-hoa-vao-he-thong-quan-ly-van-ban-vnpt-ioffice-viettel-voffice": {
        "hero": "/assets/images/products/ricoh-fi-8190.png",
        "figures": [
            ("/assets/images/products/ricoh-fi-7800.jpg",
             "Máy scan công suất lớn Ricoh fi-7800 cho trung tâm số hóa",
             "Khả năng quét 100.000 trang/ngày, tự động nhận dạng OCR tiếng Việt và trích xuất siêu dữ liệu."),
            ("/assets/images/products/ricoh-sp-1425.jpg",
             "Máy scan Ricoh SP-1425 tại bộ phận tiếp nhận hồ sơ một cửa",
             "Đẩy dữ liệu tệp PDF/A-1b trực tiếp vào hệ thống điều hành VNPT iOffice và Viettel vOffice qua API.")
        ]
    },
    # 30. Khử axit và làm phẳng giấy cũ
    "quy-trinh-khu-axit-lam-phang-va-bao-quan-tai-lieu-giay-truoc-khi-scan": {
        "hero": "/assets/images/products/ricoh-ix1300.png",
        "figures": [
            ("/assets/images/products/ricoh-fi-7460.png",
             "Máy scan khổ A3 Ricoh fi-7460 đường dẫn giấy phẳng",
             "Thiết kế đường giấy thẳng chữ U không uốn cong bảo vệ tài liệu sau khi khử axit giòn gãy."),
            ("/assets/images/products/ricoh-brake-roller-fi-8170.jpg",
             "Rulo hãm phân tách giấy siêu nhẹ bảo vệ xơ giấy cổ",
             "Áp lực tì giấy được căn chỉnh vi mô để không làm bong tróc nét chữ viết tay và dấu triện cổ.")
        ]
    },
    # 31. So sánh các kiểu gia công sau in
    "cac-kieu-gia-cong-sau-in-dong-ghim-long-ghim-phang-va-vao-keo-nhiet": {
        "hero": "/assets/images/products/34-dij-200.jpg",
        "figures": [
            ("/assets/images/products/duplo-dfc-122.jpg",
             "Hệ thống phối trang đóng ghim lồng yên ngựa Duplo",
             "Đóng ghim lồng (Saddle Stitch) cho phép mở phẳng 180 độ, tối ưu cho đề thi và sổ tay dưới 64 trang."),
            ("/assets/images/products/38-dsc-10-20.jpg",
             "Dây chuyền phối trang và vào keo nhiệt gáy vuông công nghiệp",
             "Vào keo nhiệt gáy vuông (Perfect Binding) cho sách giáo trình, kỷ yếu dày từ 80 đến 400 trang.")
        ]
    },
    # 32. Hướng dẫn bảo trì lưỡi dao máy xén giấy
    "huong-dan-bao-tri-va-thay-the-luoi-dao-may-xen-giay-cong-nghiep-an-toan": {
        "hero": "/assets/images/products/40-may-phoi-trang-dfc-120.png",
        "figures": [
            ("/assets/images/products/39-dfc-sii.jpg",
             "Cơ cấu xén và gập cạnh tự động bảo vệ quang điện",
             "Lưới cảm biến hồng ngoại bảo vệ hai tay tự động khóa cứng ly hợp khi có vật cản."),
            ("/assets/images/products/36-may-giap-ghim-duplo-dfc-sii-ket-noi-voi-dfc-100-101-120.jpg",
             "Module xén mép liên hoàn trên hệ thống hoàn thiện Duplo",
             "Cân chỉnh góc mài dao 22°–24° và thay thớt đệm định kỳ giúp đường cắt chạm đáy ngọt mịn không mẻ mép.")
        ]
    }
}

updated_posts = []
for p in posts:
    slug = p["slug"]
    if slug not in ARTICLE_IMAGE_MATRIX:
        updated_posts.append(p)
        continue

    cfg = ARTICLE_IMAGE_MATRIX[slug]
    hero_img = cfg["hero"]
    p["image_url"] = hero_img

    # 1. Làm sạch toàn bộ figure cũ trong content_html
    html = p.get("content_html", "")
    html = re.sub(r'<figure class=\"my-6 not-prose\">.*?</figure>', '', html, flags=re.DOTALL)
    # Xóa cả Geo card cũ nếu có
    html = re.sub(r'<!-- GEO Local Authority Card -->.*?</div>\s*</div>', '', html, flags=re.DOTALL)

    # 2. Chuẩn bị 2 figure mới hoàn toàn khác hero
    figs_html = []
    for src, alt, caption in cfg["figures"]:
        f_block = f"""
    <figure class="my-6 not-prose">
      <img src="{src}" alt="{alt}" class="w-full h-auto rounded-lg shadow-md border" loading="lazy" />
      <figcaption class="text-xs text-gray-500 text-center mt-2 italic">{caption}</figcaption>
    </figure>"""
        figs_html.append(f_block)

    # 3. Chèn 2 figure vào 2 section riêng biệt trong bài viết
    sections = re.split(r'(<section[^>]*>)', html)
    new_html = ""
    fig_idx = 0
    for part in sections:
        new_html += part
        if '</h2' in part and fig_idx < len(figs_html):
            p_end = part.find('</p>')
            if p_end != -1:
                insert_pos = p_end + 4
                part_with_fig = part[:insert_pos] + figs_html[fig_idx] + part[insert_pos:]
                new_html = new_html[:-len(part)] + part_with_fig
                fig_idx += 1

    # Nếu còn figure chưa chèn được, chèn trước Author Card
    while fig_idx < len(figs_html):
        author_pos = new_html.find('<!-- E-E-A-T Author Card -->')
        if author_pos != -1:
            new_html = new_html[:author_pos] + figs_html[fig_idx] + "\n  " + new_html[author_pos:]
        else:
            new_html += figs_html[fig_idx]
        fig_idx += 1

    # 4. Thêm GEO Local Authority Card ngay trước Author Card
    author_pos = new_html.find('<!-- E-E-A-T Author Card -->')
    if author_pos != -1:
        new_html = new_html[:author_pos] + GEO_BOX_HTML + "\n  " + new_html[author_pos:]
    else:
        new_html += GEO_BOX_HTML

    p["content_html"] = new_html
    updated_posts.append(p)

with open(JSON_PATH, "w", encoding="utf-8") as f:
    json.dump(updated_posts, f, ensure_ascii=False, indent=2)

print(f"✔ Đã tối ưu hình ảnh độc bản và GEO cho toàn bộ {len(updated_posts)} bài viết!")
