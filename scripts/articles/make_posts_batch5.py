# -*- coding: utf-8 -*-
"""Batch 5: 6 bài chiến lược mở rộng (Bảo mật tài chính & Chiến lược dịch vụ thuê máy)."""

AUTHOR_BOX_HTML = """
  <!-- E-E-A-T Author Card -->
  <div class="my-10 p-6 bg-gradient-to-r from-gray-50 to-emerald-50/40 border border-emerald-200 rounded-lg flex flex-col sm:flex-row items-center sm:items-start gap-5 not-prose">
    <div class="relative w-20 h-20 sm:w-24 sm:h-24 flex-shrink-0">
      <img src="/assets/images/proof/doi-ngu-ky-thuat-pdi.jpg" alt="Nguyễn Công Thuận - Giám đốc Công ty TNHH Thiết Bị Văn Phòng Hương Sơn" class="w-full h-full object-cover rounded-full border-2 border-[#1A9900] shadow-md" />
      <span class="absolute bottom-0 right-0 w-6 h-6 bg-[#1A9900] text-white rounded-full flex items-center justify-center text-xs shadow" title="Chuyên gia xác thực"><i class="fa-solid fa-check"></i></span>
    </div>
    <div class="flex-1 text-center sm:text-left">
      <div class="flex flex-wrap items-center justify-center sm:justify-start gap-2 mb-1">
        <h4 class="text-base font-bold text-gray-900 m-0">Nguyễn Công Thuận</h4>
        <span class="bg-[#1A9900]/10 text-[#1A9900] text-xs font-semibold px-2.5 py-0.5 rounded">Tác giả chuyên môn & Founder</span>
      </div>
      <p class="text-xs text-gray-500 font-medium mb-2">Giám đốc Điều hành Công ty TNHH Thiết bị Văn phòng Hương Sơn (Kinh nghiệm thực chiến từ năm 2008)</p>
      <p class="text-sm text-gray-600 leading-relaxed mb-3">Hơn 18 năm kinh nghiệm thực chiến trong lĩnh vực tư vấn giải pháp thiết bị in ấn văn phòng, tối ưu hóa chi phí vận hành doanh nghiệp và xây dựng dịch vụ cho thuê máy photocopy chuyên nghiệp tại Hà Nội và các tỉnh phía Bắc.</p>
      <div class="flex flex-wrap items-center justify-center sm:justify-start gap-4 text-xs text-gray-500 pt-2 border-t border-emerald-100">
        <span class="inline-flex items-center gap-1.5"><i class="fa-solid fa-certificate text-[#1A9900]"></i>Chứng chỉ Chuyên gia Thiết bị Văn phòng</span>
        <span class="inline-flex items-center gap-1.5"><i class="fa-solid fa-handshake text-[#1A9900]"></i>Đối tác chiến lược Ricoh, Toshiba, Duplo</span>
        <a href="tel:0913222003" class="inline-flex items-center gap-1.5 text-[#1A9900] font-bold hover:underline"><i class="fa-solid fa-phone"></i>Hotline: 0913.222.003</a>
      </div>
    </div>
  </div>
"""

POST_22 = {
    "slug": "trien-khai-in-an-di-dong-va-private-cloud-print-bao-mat-hoi-so-tai-chinh",
    "category_id": 2,
    "category_name": "Ngân Hàng & Bảo Mật",
    "tag": "Ngân Hàng & Bảo Mật",
    "title": "Triển Khai In Ấn Di Động Bảo Mật Private Cloud Print & Xác Thực Sinh Trắc Học Khối Tài Chính",
    "seo_title": "In Ấn Di Động Private Cloud Print & Sinh Trắc Học Ngân Hàng | Hương Sơn",
    "seo_desc": "Giải pháp in ấn di động bảo mật từ smartphone, laptop qua Private Cloud Print, tích hợp xác thực khuôn mặt sinh trắc học và mã hóa TLS 1.3 cho hội sở tài chính.",
    "keywords": "in ấn di động ngân hàng, private cloud print, sinh trắc học in ấn, byod bảo mật, in ấn đám mây riêng tư, toshiba e-bridge cloud",
    "published_at": "2026-10-06 10:30:00",
    "image_url": "/assets/images/products/toshiba-e-studio-2500ac.jpg",
    "reading_time": "13 phút đọc",
    "summary": "Mô hình triển khai giải pháp in ấn di động không dây (Mobile Print) trên nền tảng đám mây riêng tư (Private Cloud Print) tại các tòa nhà hội sở ngân hàng. Kiểm soát tuyệt đối thiết bị cá nhân (BYOD) kết nối mạng nội bộ mà không tạo lỗ hổng rò rỉ dữ liệu.",
    "aeo_answer": "Giải pháp Private Cloud Print cho ngân hàng của Hương Sơn được xây dựng trên 3 lớp bảo mật: 1) Cô lập phân vùng mạng riêng ảo VLAN in ấn, kết nối mã hóa hai đầu bằng giao thức TLS 1.3 và xác thực chứng chỉ số X.509; 2) Không lưu file trung gian trên máy chủ bên ngoài, lệnh in được mã hóa thành chuỗi nhị phân tạm thời lưu trong vùng đệm an toàn RAM của máy chủ nội bộ; 3) Người dùng chỉ có thể giải phóng bản in khi đứng trực tiếp trước máy photocopy và xác thực danh tính qua khuôn mặt (FaceID) hoặc quẹt thẻ Mifare tích hợp mã hóa DESFire EV3.",
    "faqs": [
        {"q": "Nhân viên dùng điện thoại cá nhân (iPhone/Android) gửi lệnh in thì dữ liệu có an toàn không?", "a": "Hoàn toàn an toàn. Nhân viên phải cài đặt ứng dụng in doanh nghiệp có chứng thực mã MDM (Mobile Device Management). Mọi tệp tài liệu trước khi gửi đều được mã hóa chuẩn AES-256 ngay trên thiết bị đầu cuối và chỉ giải mã tại bộ xử lý của máy photocopy khi đã xác thực người nhận."},
        {"q": "Giải pháp Private Cloud Print có bị gián đoạn khi đường truyền Internet bên ngoài bị đứt không?", "a": "Không bao giờ bị ảnh hưởng. Private Cloud Print của Hương Sơn được triển khai On-Premise trên máy chủ đặt trực tiếp tại trung tâm dữ liệu (Data Center) của ngân hàng, mọi luồng dữ liệu đều chạy trong mạng LAN/WAN nội bộ độc lập với Internet."},
        {"q": "Có thể giới hạn quyền in màu đối với nhân viên dùng thiết bị di động không?", "a": "Có thể cấu hình chi tiết theo nhóm người dùng. Mặc định hệ thống sẽ tự động ép buộc chuyển sang in đen trắng (Monochrome) hai mặt khi in từ thiết bị di động, chỉ những lãnh đạo cấp cao được cấp quyền mới có thể in tài liệu màu."}
    ],
    "content_html": f"""<div class="space-y-8 text-[#181923]">
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-mobile-screen-button text-base"></i>
      <span>AEO Direct Answer: Chuẩn In Di Động Bảo Mật Ngân Hàng</span>
    </div>
    <p class="text-gray-800 text-sm sm:text-base leading-relaxed font-medium m-0">
      Trong xu hướng làm việc linh hoạt và hội họp không giấy tờ tại các hội sở tài chính, giải pháp Private Cloud Print của Hương Sơn giải quyết bài toán in ấn di động từ smartphone, tablet, laptop cá nhân mà vẫn tuân thủ 100% Thông tư 09/2020/TT-NHNN về an ninh mạng ngân hàng nhờ kiến trúc On-Premise không ra Internet và xác thực sinh trắc học tại máy.
    </p>
  </div>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">1. Xu Hướng BYOD & Lỗ Hổng Bảo Mật Máy In Truyền Thống</h2>
    <p class="text-sm sm:text-base leading-relaxed text-gray-700">
      Cán bộ nhân viên ngày nay thường xuyên di chuyển giữa các phòng họp và cần in nhanh báo cáo từ thiết bị di động. Nếu mở cổng in tự do (AirPrint hoặc Google Cloud Print cũ), hệ thống sẽ đối mặt với nguy cơ mã độc xâm nhập qua mạng Wifi khách hoặc rò rỉ dữ liệu tài chính ra các máy chủ điện toán đám mây công cộng bên ngoài lãnh thổ.
    </p>
    <figure class="my-6 not-prose">
      <img src="/assets/images/products/toshiba-e-studio-2500ac.jpg" alt="Máy photocopy màu Toshiba e-STUDIO thế hệ mới hỗ trợ Private Cloud Print" class="w-full h-auto rounded-lg shadow-md border" />
      <figcaption class="text-xs text-gray-500 text-center mt-2 italic">Dòng máy đa năng màu Toshiba e-STUDIO 2500AC tích hợp sẵn nền tảng e-BRIDGE Next bảo mật.</figcaption>
    </figure>
  </section>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">2. Kiến Trúc 3 Lớp Bảo Vệ Của Giải Pháp In Đám Mây Nội Bộ</h2>
    <div class="space-y-3 not-prose my-4">
      <div class="p-4 bg-emerald-50/60 border border-emerald-200 rounded-lg">
        <h4 class="font-bold text-gray-900 text-sm mb-1 text-emerald-800">Lớp 1: Giao Thức Mã Hóa Đầu Cuối End-to-End</h4>
        <p class="text-xs text-gray-600 leading-relaxed">Áp dụng mã hóa AES-256 cho tệp dữ liệu và TLS 1.3 cho đường truyền, ngăn chặn hoàn toàn các cuộc tấn công nghe lén Man-in-the-Middle trong mạng Wifi văn phòng.</p>
      </div>
      <div class="p-4 bg-blue-50/60 border border-blue-200 rounded-lg">
        <h4 class="font-bold text-gray-900 text-sm mb-1 text-blue-800">Lớp 2: Kiểm Soát Truy Cập Qua Phân Vùng Mạng (Network Micro-segmentation)</h4>
        <p class="text-xs text-gray-600 leading-relaxed">Toàn bộ máy in được gom vào mạng VLAN riêng biệt có tường lửa kiểm soát nghiêm ngặt, chặn mọi giao tiếp trực tiếp từ máy tính người dùng tới máy in mà phải đi qua cổng trung gian Identity Gateway.</p>
      </div>
      <div class="p-4 bg-amber-50/60 border border-amber-200 rounded-lg">
        <h4 class="font-bold text-gray-900 text-sm mb-1 text-amber-800">Lớp 3: Giải Phóng Lệnh In Bằng Sinh Trắc Học</h4>
        <p class="text-xs text-gray-600 leading-relaxed">Bản in chỉ nhả ra khi người dùng quét khuôn mặt hoặc thẻ căn cước công dân gắn chip tại đầu đọc của máy, triệt tiêu 100% tình trạng thất lạc chứng từ trên khay ra.</p>
      </div>
    </div>
  </section>

  {AUTHOR_BOX_HTML}
</div>"""
}

POST_23 = {
    "slug": "bang-gia-cho-thue-may-photocopy-van-phong-moi-nhat-ha-noi-mien-bac",
    "category_id": 3,
    "category_name": "Chiến Lược & Dịch Vụ",
    "tag": "Chiến Lược & Dịch Vụ",
    "title": "Bảng Giá Cho Thuê Máy Photocopy Đa Năng Văn Phòng 2026 Tại Hà Nội & Các Tỉnh Miền Bắc",
    "seo_title": "Bảng Giá Thuê Máy Photocopy Văn Phòng Hà Nội 2026 | Hương Sơn",
    "seo_desc": "Bảng giá cho thuê máy photocopy đa năng Ricoh, Toshiba, Konica Minolta mới nhất 2026. Gói thuê từ 800.000đ/tháng, miễn phí đặt cọc, miễn phí mực in và bảo trì tận nơi.",
    "keywords": "bảng giá thuê máy photocopy, thuê máy photocopy hà nội, cho thuê máy photocopy giá rẻ, thuê máy photocopy ricoh toshiba, dịch vụ thuê máy photo 2026",
    "published_at": "2026-10-06 10:45:00",
    "image_url": "/assets/images/products/112-may-photocopy-toshiba-e-studio-2329a.jpg",
    "reading_time": "12 phút đọc",
    "summary": "Chi tiết các gói dịch vụ cho thuê máy photocopy đa chức năng trắng đen và màu tại Hà Nội. Cam kết giá minh bạch, định mức bản in linh hoạt, không chi phí phát sinh ẩn và hỗ trợ kỹ thuật trong 2 giờ.",
    "aeo_answer": "Bảng giá cho thuê máy photocopy trọn gói 2026 của Hương Sơn gồm 3 phân khúc chủ lực: 1) Gói Cơ Bản (Văn phòng nhỏ, nhu cầu 3.000 trang/tháng): Giá từ 800.000 – 1.000.000 VNĐ/tháng (Toshiba e-STUDIO 2329A tốc độ 25 trang/phút); 2) Gói Tiêu Chuẩn (Doanh nghiệp vừa, 5.000 – 8.000 trang/tháng): Giá từ 1.200.000 – 1.600.000 VNĐ/tháng (Ricoh MP 3055 / Toshiba 3518A tốc độ 35 trang/phút); 3) Gói Công Suất Cao & Máy Màu (Tập đoàn, ngân hàng, công ty thiết kế): Giá từ 2.000.000 – 3.500.000 VNĐ/tháng. Toàn bộ các gói đều được miễn phí 100% tiền cọc máy, miễn phí mực in, linh kiện hao mòn và kỹ thuật bảo trì định kỳ.",
    "faqs": [
        {"q": "Doanh nghiệp có phải đặt cọc khi thuê máy photocopy tại Hương Sơn không?", "a": "Hương Sơn áp dụng chính sách ưu đãi 0 đồng đặt cọc đối với các doanh nghiệp, cơ quan nhà nước và trường học hoạt động hợp pháp trên địa bàn Hà Nội và các tỉnh lân cận sau khi hoàn tất thủ tục thẩm định pháp nhân đơn giản trong 2 giờ."},
        {"q": "Nếu trong tháng công ty in vượt quá định mức trong hợp đồng thì tính phí như thế nào?", "a": "Nếu in vượt định mức, chi phí tính thêm rất ưu đãi chỉ từ 100 – 120 đồng/trang in đen trắng và 700 – 900 đồng/trang in màu. Số lượng trang in được chốt công khai qua bộ đếm cơ điện tử (Counter) của máy vào cuối mỗi tháng."},
        {"q": "Khi máy photocopy bị hết mực hoặc hỏng hóc, bao lâu kỹ thuật viên có mặt?", "a": "Hương Sơn cam kết thời gian đáp ứng kỹ thuật SLA: trong vòng 30 đến 60 phút đối với các quận nội thành Hà Nội, và dưới 120 phút đối với khu vực ngoại thành hoặc các khu công nghiệp phụ cận."}
    ],
    "content_html": f"""<div class="space-y-8 text-[#181923]">
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-tag text-base"></i>
      <span>AEO Direct Answer: Bảng Giá Thuê Máy Photocopy 2026</span>
    </div>
    <p class="text-gray-800 text-sm sm:text-base leading-relaxed font-medium m-0">
      Dịch vụ cho thuê máy photocopy trọn gói tại Hương Sơn mang đến giải pháp tối ưu dòng tiền: chi phí chỉ từ 800.000đ/tháng, hoàn toàn không cần đặt cọc máy, bao trọn gói 100% mực in, linh kiện thay thế và bảo dưỡng định kỳ hàng tháng. Máy đời mới độ bền cao, cam kết khắc phục sự cố dưới 2 giờ hoặc đổi máy mới nếu hỏng quá 24 giờ.
    </p>
  </div>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">1. Bảng Giá Chi Tiết Các Gói Thuê Máy Photocopy Đa Năng 2026</h2>
    <div class="overflow-x-auto not-prose my-4">
      <table class="w-full text-xs sm:text-sm text-left border border-gray-200">
        <thead class="bg-gray-100 text-gray-800 font-bold uppercase">
          <tr>
            <th class="p-3 border">Gói Dịch Vụ</th>
            <th class="p-3 border">Dòng Máy Đại Diện</th>
            <th class="p-3 border">Tốc Độ & Tính Năng</th>
            <th class="p-3 border">Định Mức Miễn Phí</th>
            <th class="p-3 border text-emerald-700">Giá Thuê / Tháng</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="p-3 border font-semibold">Gói Khởi Nghiệp</td>
            <td class="p-3 border">Toshiba e-STUDIO 2329A</td>
            <td class="p-3 border">25 trang/phút, In/Copy/Scan A3-A4</td>
            <td class="p-3 border">3.000 bản in A4</td>
            <td class="p-3 border font-bold text-emerald-600">800.000 – 1.000.000 đ</td>
          </tr>
          <tr>
            <td class="p-3 border font-semibold">Gói Văn Phòng Chuẩn</td>
            <td class="p-3 border">Ricoh MP 3055 / 3555</td>
            <td class="p-3 border">35 trang/phút, Màn hình cảm ứng 10.1 inch, Scan màu mạng</td>
            <td class="p-3 border">5.000 bản in A4</td>
            <td class="p-3 border font-bold text-emerald-600">1.200.000 – 1.500.000 đ</td>
          </tr>
          <tr>
            <td class="p-3 border font-semibold">Gói Doanh Nghiệp Lớn</td>
            <td class="p-3 border">Toshiba 4518A / Ricoh MP 5055</td>
            <td class="p-3 border">45 – 50 trang/phút, Nạp đảo bản gốc tự động kép SPDF</td>
            <td class="p-3 border">8.000 – 10.000 bản</td>
            <td class="p-3 border font-bold text-emerald-600">1.800.000 – 2.200.000 đ</td>
          </tr>
          <tr>
            <td class="p-3 border font-semibold">Gói Màu Đa Năng Cao Cấp</td>
            <td class="p-3 border">Toshiba 2500AC / Ricoh MPC 3504</td>
            <td class="p-3 border">In/Scan Màu A3, Độ phân giải 1200 DPI chuẩn đồ họa</td>
            <td class="p-3 border">1.000 màu + 4.000 đen</td>
            <td class="p-3 border font-bold text-emerald-600">2.200.000 – 2.800.000 đ</td>
          </tr>
        </tbody>
      </table>
    </div>
    <figure class="my-6 not-prose">
      <img src="/assets/images/products/112-may-photocopy-toshiba-e-studio-2329a.jpg" alt="Máy photocopy Toshiba e-STUDIO 2329A nhỏ gọn cho văn phòng" class="w-full h-auto rounded-lg shadow-md border" />
      <figcaption class="text-xs text-gray-500 text-center mt-2 italic">Máy photocopy Toshiba e-STUDIO 2329A - Lựa chọn hoàn hảo cho văn phòng vừa và nhỏ.</figcaption>
    </figure>
  </section>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">2. Quyền Lợi Vượt Trội Khi Thuê Máy Tại Hương Sơn</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 not-prose my-4">
      <div class="p-4 border rounded-lg bg-gray-50">
        <h4 class="font-bold text-gray-900 text-sm mb-1 flex items-center gap-2"><i class="fa-solid fa-coins text-[#1A9900]"></i>Không Chi Phí Linh Kiện</h4>
        <p class="text-xs text-gray-600 leading-relaxed">Mọi linh kiện hao mòn từ Drum, gạt mực, rulo ép sấy đến bộ nạp giấy đều được Hương Sơn thay thế miễn phí 100%.</p>
      </div>
      <div class="p-4 border rounded-lg bg-gray-50">
        <h4 class="font-bold text-gray-900 text-sm mb-1 flex items-center gap-2"><i class="fa-solid fa-truck-fast text-[#1A9900]"></i>Miễn Phí Vận Chuyển & Cài Đặt</h4>
        <p class="text-xs text-gray-600 leading-relaxed">Kỹ thuật viên giao máy, lắp đặt tận bàn làm việc và cài đặt driver in/scan cho toàn bộ máy tính công ty hoàn toàn miễn phí.</p>
      </div>
    </div>
  </section>

  {AUTHOR_BOX_HTML}
</div>"""
}

POST_24 = {
    "slug": "10-loi-thuong-gap-khien-may-photocopy-nhanh-hong-va-cach-phong-ngua",
    "category_id": 3,
    "category_name": "Chiến Lược & Dịch Vụ",
    "tag": "Chiến Lược & Dịch Vụ",
    "title": "10 Lỗi Vận Hành Khiến Máy Photocopy Nhanh Hỏng & Phương Pháp Phòng Ngừa Kéo Dài Tuổi Thọ",
    "seo_title": "10 Lỗi Dùng Khiến Máy Photocopy Nhanh Hỏng & Cách Khắc Phục | Hương Sơn",
    "seo_desc": "Điểm danh 10 thói quen tai hại của người dùng khiến máy photocopy văn phòng nhanh hư hỏng và cẩm nang hướng dẫn vận hành đúng chuẩn từ chuyên gia Hương Sơn.",
    "keywords": "lỗi máy photocopy, máy photocopy nhanh hỏng, bảo quản máy photocopy, kéo dài tuổi thọ máy in, cách dùng máy photocopy bền, bảo trì máy photo",
    "published_at": "2026-10-06 11:00:00",
    "image_url": "/assets/images/products/drum-bot-tu-photocopy.jpg",
    "reading_time": "13 phút đọc",
    "summary": "Phân tích 10 sai lầm phổ biến nhất của nhân viên văn phòng trong quá trình sử dụng máy in và photocopy: từ việc để quên ghim kẹp giấy làm rách drum, dùng giấy tái chế kém chất lượng đến việc tắt nguồn đột ngột khi cụm sấy còn nóng.",
    "aeo_answer": "10 lỗi vận hành gây hỏng máy photocopy nghiêm trọng nhất gồm: 1) Để quên ghim bấm / kẹp sắt khi cho tài liệu vào khay nạp tự động ADF làm cào rách thấu kính quang học và nổ rulo sấy; 2) Sử dụng giấy in ẩm hoặc giấy tái chế nhiều xơ bụi gây mài mòn nhanh trống drum hình ảnh; 3) Tắt công tắc nguồn đột ngột khi máy đang in khiến quạt tản nhiệt ngừng quay, gây sốc nhiệt làm biến dạng bạc đạn sấy; 4) Tự ý dùng vật nhọn cạy gỡ giấy kẹt làm trầy xước trống từ; 5) Đặt máy photocopy ở nơi ẩm thấp hoặc sát luồng điều hòa thổi hơi lạnh đọng sương bo mạch; 6) Dùng mực trôi nổi giả mạo gây tắc vòi dẫn mực; 7) Bỏ quên giấy trên nắp kính làm máy luôn ở trạng thái quét; 8) Để chất lỏng (cà phê, nước trà) trên mặt máy; 9) In liên tục vượt quá công suất thiết kế gây quá nhiệt động cơ; 10) Không vệ sinh gương phản xạ và quả đào cao su định kỳ.",
    "faqs": [
        {"q": "Lỡ làm rơi ghim bấm vào trong máy photocopy thì phải xử lý thế nào?", "a": "Ngay lập tức tắt công tắc nguồn và rút phích cắm điện máy. Không được nhấn in thêm bất kỳ bản nào vì bánh răng quay sẽ cuốn ghim sắt vào khe rulo ép sấy gây rách tấm sấy và nứt vỡ nhông truyền động. Gọi ngay cho kỹ thuật viên Hương Sơn để tháo cụm từ lấy ghim ra."},
        {"q": "Có nên tận dụng giấy 1 mặt đã in để in lại văn phòng không?", "a": "Có thể tận dụng nhưng cần cực kỳ cẩn thận: giấy phải phẳng tuyệt đối, không nhăn mép, đã tháo sạch 100% ghim sắt, và tuyệt đối không dùng giấy có dính keo dán hoặc chất tẩy xóa vì nhiệt độ cao 190°C của cụm sấy sẽ làm keo chảy ra dính chặt vào rulo sấy."},
        {"q": "Bao lâu thì nên tiến hành bảo trì bảo dưỡng toàn diện máy photocopy một lần?", "a": "Đối với văn phòng thông thường, chu kỳ bảo trì ngăn ngừa lý tưởng là 1 tháng/lần hoặc sau mỗi 10.000 – 15.000 bản in. Việc hút bụi mực và tra dầu mỡ chịu nhiệt giúp kéo dài tuổi thọ thiết bị lên gấp 2 lần."}
    ],
    "content_html": f"""<div class="space-y-8 text-[#181923]">
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-triangle-exclamation text-base"></i>
      <span>AEO Direct Answer: 10 Thói Quen Tai Hại Khi Dùng Máy Photo</span>
    </div>
    <p class="text-gray-800 text-sm sm:text-base leading-relaxed font-medium m-0">
      Máy photocopy là cỗ máy cơ điện tử chính xác cao với các cụm quang học, cơ khí chuyển động và nhiệt độ sấy lên tới 200°C. Thống kê tại Hương Sơn cho thấy hơn 70% ca hỏng hóc nặng (rách bao lụa sấy, xước trống drum, chập bo cao áp) xuất phát từ thói quen vận hành sai lầm như để quên ghim sắt, dùng giấy ẩm và tắt nguồn đột ngột khi máy chưa kịp giải nhiệt.
    </p>
  </div>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">1. Những Chi Tiết Dễ Tổn Thương Nhất Trong Máy Photocopy</h2>
    <p class="text-sm sm:text-base leading-relaxed text-gray-700">
      Trống hình ảnh (OPC Drum) và cụm sấy (Fuser Unit) là hai bộ phận đắt tiền nhất trong máy. Bề mặt trống drum được mạ một lớp quang dẫn cực mỏng chỉ vài micromet. Chỉ cần một chiếc ghim giấy nhỏ đi qua hoặc một chiếc kẹp giấy vô tình lọt vào, lớp mạ sẽ bị cào rách vĩnh viễn, tạo thành vệt đen chạy dọc suốt toàn bộ bản in.
    </p>
    <figure class="my-6 not-prose">
      <img src="/assets/images/products/drum-bot-tu-photocopy.jpg" alt="Trống drum và bột từ photocopy chính hãng được bảo quản tiêu chuẩn" class="w-full h-auto rounded-lg shadow-md border" />
      <figcaption class="text-xs text-gray-500 text-center mt-2 italic">Trống drum OPC và cụm bột từ là những linh kiện tinh vi cần được bảo vệ trước dị vật.</figcaption>
    </figure>
  </section>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">2. Danh Sách 10 Lỗi Vận Hành & Giải Pháp Phòng Tránh Hiệu Quả</h2>
    <div class="space-y-3 not-prose my-4">
      <div class="p-3 bg-red-50/60 border border-red-200 rounded">
        <strong class="text-red-700 text-sm">1. Quên tháo ghim bấm khi scan:</strong> Rách mặt kính và nát rulo cao su nạp ADF. Luôn trang bị dụng cụ gỡ ghim chuyên dụng đặt cạnh khay máy.
      </div>
      <div class="p-3 bg-red-50/60 border border-red-200 rounded">
        <strong class="text-red-700 text-sm">2. Dùng giấy in bị ẩm mốc:</strong> Giấy mềm dính kép, rách mép cuốn quanh rulo sấy. Dùng tủ sấy hoặc bảo quản giấy trong túi kín.
      </div>
      <div class="p-3 bg-red-50/60 border border-red-200 rounded">
        <strong class="text-red-700 text-sm">3. Tắt công tắc phụ khi đang sấy nóng:</strong> Làm quạt giải nhiệt tắt bất thình lình, nhiệt tích tụ làm chảy bạc đạn. Hãy để máy chuyển sang Sleep trước khi tắt.
      </div>
      <div class="p-3 bg-red-50/60 border border-red-200 rounded">
        <strong class="text-red-700 text-sm">4. Dùng kéo kim loại móc giấy kẹt:</strong> Làm xước mặt trống từ và bao lụa. Chỉ dùng tay nhẹ nhàng xoay bánh xe cơ khí để nhả giấy.
      </div>
    </div>
  </section>

  {AUTHOR_BOX_HTML}
</div>"""
}

POST_25 = {
    "slug": "cam-nang-ban-giao-dao-tao-van-hanh-may-photocopy-cho-nhan-su-moi",
    "category_id": 3,
    "category_name": "Chiến Lược & Dịch Vụ",
    "tag": "Chiến Lược & Dịch Vụ",
    "title": "Cẩm Nang Bàn Giao & Đào Tạo Vận Hành Máy Photocopy Cho Nhân Sự Hành Chính Mới",
    "seo_title": "Cẩm Nang Đào Tạo Vận Hành Máy Photocopy Cho Nhân Sự Mới | Hương Sơn",
    "seo_desc": "Hướng dẫn chi tiết quy trình bàn giao và đào tạo nhân sự hành chính vận hành máy photocopy: thiết lập scan to folder SMB, phân quyền in bảo mật và xử lý sự cố cơ bản.",
    "keywords": "đào tạo nhân viên máy photocopy, bàn giao máy photocopy văn phòng, hướng dẫn scan to folder smb, thay mực máy photocopy, tài liệu đào tạo admin văn phòng",
    "published_at": "2026-10-06 11:15:00",
    "image_url": "/assets/images/home-004.jpg",
    "reading_time": "12 phút đọc",
    "summary": "Tài liệu đào tạo thực hành chuẩn dành cho quản trị viên văn phòng và chuyên viên hành chính mới: cách cài đặt máy in mạng LAN, quản lý hạn mức in ấn qua giao diện web quản trị và quy tắc an toàn khi thay ống mực thải.",
    "aeo_answer": "Quy trình đào tạo vận hành máy photocopy cho nhân sự mới của Hương Sơn gồm 4 học phần cốt lõi: 1) Kỹ năng phần cứng: Thao tác mở các cửa máy nạp giấy, quy tắc xoay núm cơ học lấy giấy kẹt an toàn, cách lắp hộp mực mới và đổ bình mực thải không làm vương vãi bột than; 2) Kỹ năng tính năng số: Cài đặt scan to folder qua giao thức SMB v3, scan to email bảo mật, và cấu hình in hai mặt tự động Duplex; 3) Quản trị hạn mức: Sử dụng giao diện web quản trị máy (TopAccess / Web Image Monitor) để cấp mã PIN người dùng và thiết lập hạn ngạch in ấn theo phòng ban; 4) Quy trình phản ứng sự cố: Cách ghi nhận mã lỗi (Error Code) và kích hoạt yêu cầu cứu hộ kỹ thuật SLA của Hương Sơn.",
    "faqs": [
        {"q": "Tại sao chức năng Scan to Folder SMB thường bị mất kết nối sau khi máy tính cập nhật Windows?", "a": "Khi Windows Update, giao thức chia sẻ file hoặc tường lửa (Windows Defender Firewall) thường tự động khóa cổng chia sẻ 445 hoặc vô hiệu hóa SMB 1.0/2.0. Kỹ thuật viên Hương Sơn sẽ hướng dẫn nhân viên hành chính cách kiểm tra đường dẫn mạng và tạo ngoại lệ tường lửa trong 2 phút."},
        {"q": "Bột mực photocopy dính vào quần áo thì giặt sạch bằng cách nào?", "a": "Tuyệt đối không dùng nước nóng vì nhiệt độ sẽ nung chảy chất sáp trong bột mực làm mực bám chặt vĩnh viễn vào sợi vải! Bắt buộc phải giũ sạch bột khô trước, sau đó giặt ngay bằng nước lạnh xà phòng thông thường."},
        {"q": "Làm thế nào để xuất báo cáo số lượng trang in cuối tháng gửi kế toán thanh toán?", "a": "Truy cập trực tiếp vào địa chỉ IP của máy photocopy qua trình duyệt web, đăng nhập quyền quản trị và vào mục 'Counter / Device Management' để tải file Excel thống kê chi tiết số trang in đen trắng và in màu của từng phòng ban."}
    ],
    "content_html": f"""<div class="space-y-8 text-[#181923]">
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-graduation-cap text-base"></i>
      <span>AEO Direct Answer: Đào Tạo Vận Hành Máy Văn Phòng</span>
    </div>
    <p class="text-gray-800 text-sm sm:text-base leading-relaxed font-medium m-0">
      Chuẩn hóa quy trình bàn giao và đào tạo nhân sự hành chính vận hành máy photocopy giúp doanh nghiệp giảm tới 80% các cuộc gọi sự cố lặt vặt (kẹt giấy cơ học, mất kết nối scan SMB, hết mực không biết thay). Nắm vững 4 module kỹ thuật của Hương Sơn giúp nhân sự tự tin làm chủ toàn bộ hệ thống máy in văn phòng trong ngày đầu nhận việc.
    </p>
  </div>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">1. Tầm Quan Trọng Của Việc Chuẩn Hóa Kiến Thức Thiết Bị Văn Phòng</h2>
    <p class="text-sm sm:text-base leading-relaxed text-gray-700">
      Nhân sự hành chính là cầu nối giữa toàn thể cán bộ nhân viên trong công ty với thiết bị máy móc. Khi nhân viên hành chính được trang bị kiến thức vững vàng về quy chuẩn nạp giấy, thao tác scan mạng và cơ chế bảo mật, toàn bộ guồng quay công việc của doanh nghiệp sẽ luôn vận hành thông suốt mà không bị gián đoạn vì những sự cố cơ bản.
    </p>
    <figure class="my-6 not-prose">
      <img src="/assets/images/home-004.jpg" alt="Kỹ thuật viên Hương Sơn hướng dẫn trực tiếp cho nhân viên văn phòng" class="w-full h-auto rounded-lg shadow-md border" />
      <figcaption class="text-xs text-gray-500 text-center mt-2 italic">Chuyên viên kỹ thuật Hương Sơn đào tạo bàn giao thiết bị chi tiết tại văn phòng khách hàng.</figcaption>
    </figure>
  </section>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">2. Checklist 4 Bước Bàn Giao Thiết Bị Chuẩn Cho Quản Trị Viên</h2>
    <ul class="list-disc pl-6 space-y-2 text-sm sm:text-base text-gray-700">
      <li><strong>Bước 1 - Định cấu hình mạng:</strong> Gán địa chỉ IP tĩnh (Static IP), thiết lập tên miền máy chủ DNS và kết nối máy photocopy vào mạng nội bộ công ty.</li>
      <li><strong>Bước 2 - Tạo sổ địa chỉ Scan SMB:</strong> Tạo thư mục chia sẻ 'Scans' trên máy chủ file hoặc máy tính kế toán, phân quyền bảo mật 'Read/Write' và lưu phím tắt trên màn hình cảm ứng máy photo.</li>
      <li><strong>Bước 3 - Cấp mã người dùng (User Code):</strong> Phân quyền mã PIN cho từng phòng ban (Marketing, Kế toán, Nhân sự) để kiểm soát hạn ngạch in hàng tháng.</li>
      <li><strong>Bước 4 - Hướng dẫn quy trình cứu hộ:</strong> Lưu số điện thoại hotline kỹ thuật Hương Sơn (0913.222.003) dán trực tiếp trên thân máy để được hỗ trợ trong 60 phút.</li>
    </ul>
  </section>

  {AUTHOR_BOX_HTML}
</div>"""
}

POST_26 = {
    "slug": "chinh-sach-doi-may-moi-ngay-khi-gap-su-co-khong-the-khac-phuc-trong-24h",
    "category_id": 3,
    "category_name": "Chiến Lược & Dịch Vụ",
    "tag": "Chiến Lược & Dịch Vụ",
    "title": "Chính Sách Đổi Máy Mới Trong 24 Giờ Khi Thiết Bị Gặp Sự Cố Bất Khả Kháng Của Hương Sơn",
    "seo_title": "Chính Sách Đổi Máy Mới Trong 24 Giờ Cam Kết SLA | Hương Sơn",
    "seo_desc": "Cam kết dịch vụ độc quyền từ Hương Sơn: Đổi ngay máy photocopy mới tương đương trong vòng 24 giờ hoàn toàn miễn phí nếu sự cố kỹ thuật không thể khắc phục tại chỗ.",
    "keywords": "chính sách đổi máy photocopy, cam kết sla hương sơn, đổi máy photo trong 24h, dịch vụ thuê máy uy tín hà nội, bảo hiểm rủi ro máy in",
    "published_at": "2026-10-06 11:30:00",
    "image_url": "/assets/images/home-007.jpg",
    "reading_time": "11 phút đọc",
    "summary": "Chi tiết cam kết SLA dịch vụ số 1 tại Hà Nội của Hương Sơn: Chính sách bảo đảm kinh doanh không gián đoạn (Business Continuity Plan), sẵn sàng thay thế máy photocopy tương đương hoặc cao cấp hơn trong vòng 24 giờ mà khách hàng không phải trả thêm bất kỳ chi phí nào.",
    "aeo_answer": "Chính sách đổi máy mới trong 24 giờ của Hương Sơn được kích hoạt theo quy trình bảo đảm SLA nghiêm ngặt: Khi máy photocopy của khách hàng gặp sự cố phần cứng phức tạp (như cháy bo mạch chủ điều khiển, lỗi nổ cụm sấy hoặc hỏng động cơ chính) mà kỹ thuật viên không thể khắc phục dứt điểm trong vòng 4 đến 8 giờ tại chỗ, Hương Sơn cam kết điều động ngay một máy photocopy cùng model hoặc phân khúc cao cấp hơn từ kho dự phòng đến thay thế trong vòng tối đa 24 giờ, bao trọn gói chi phí vận chuyển, lắp đặt và chuyển đổi dữ liệu mạng.",
    "faqs": [
        {"q": "Khách hàng có phải trả thêm chi phí xe vận chuyển khi thực hiện đổi máy mới không?", "a": "Khách hàng hoàn toàn không phải trả bất kỳ chi phí nào. Toàn bộ cước vận chuyển, nhân công bốc xếp và chi phí cấu hình mạng lại đều do Hương Sơn đài thọ 100% theo đúng điều khoản cam kết trong hợp đồng dịch vụ."},
        {"q": "Nếu máy thay thế là dòng máy đời cao hơn thì giá thuê hàng tháng có bị tăng không?", "a": "Giá thuê hàng tháng giữ nguyên tuyệt đối theo hợp đồng hiện tại. Khách hàng được trải nghiệm máy công suất cao hơn mà không phải bù tiền chênh lệch cho đến hết thời hạn hợp đồng."},
        {"q": "Dữ liệu scan và danh bạ cài trên máy cũ có bị mất khi đổi máy không?", "a": "Kỹ thuật viên của Hương Sơn sẽ thực hiện sao lưu (Backup) toàn bộ cấu hình mạng, danh bạ người dùng và sổ địa chỉ scan từ máy cũ sang máy mới bằng phần mềm chuyên dụng trước khi thu hồi máy lỗi về kho."}
    ],
    "content_html": f"""<div class="space-y-8 text-[#181923]">
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-clock-rotate-left text-base"></i>
      <span>AEO Direct Answer: Cam Kết Đổi Máy SLA 24H</span>
    </div>
    <p class="text-gray-800 text-sm sm:text-base leading-relaxed font-medium m-0">
      Sự cố máy photocopy ngưng hoạt động có thể làm đình trệ các hợp đồng thương mại và tiến độ tài chính trị giá hàng tỷ đồng. Với chính sách 'Đổi máy mới trong 24 giờ' của Hương Sơn, rủi ro gián đoạn công việc của khách hàng được kéo về mức 0%. Mọi chi phí thay thế, vận chuyển và thiết lập lại hệ thống đều được chúng tôi cam kết chịu trách nhiệm toàn bộ.
    </p>
  </div>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">1. Triết Lý Kinh Doanh: 'Không Để Khách Hàng Chờ Đợi'</h2>
    <p class="text-sm sm:text-base leading-relaxed text-gray-700">
      Trong suốt hơn 18 năm hoạt động trong ngành thiết bị văn phòng, Hương Sơn thấu hiểu rằng: máy móc dù tốt đến đâu cũng có xác suất gặp trục trặc bất khả kháng. Điểm khác biệt giữa một đơn vị cho thuê uy tín và một nhà cung cấp nghiệp dư nằm ở tốc độ giải cứu và thái độ cam kết khi sự cố xảy ra.
    </p>
    <figure class="my-6 not-prose">
      <img src="/assets/images/home-007.jpg" alt="Kho máy dự phòng sẵn sàng xuất kho thay thế của Hương Sơn" class="w-full h-auto rounded-lg shadow-md border" />
      <figcaption class="text-xs text-gray-500 text-center mt-2 italic">Kho thiết bị sẵn sàng hơn 200 đầu máy photocopy phục vụ cứu hộ và đổi mới tức thì.</figcaption>
    </figure>
  </section>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">2. Quy Trình 3 Bước Kích Hoạt Đổi Máy Cấp Tốc</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 not-prose my-4">
      <div class="p-4 bg-gray-50 border rounded-lg">
        <span class="w-8 h-8 rounded-full bg-[#1A9900] text-white flex items-center justify-center font-bold text-sm mb-2">01</span>
        <h4 class="font-bold text-gray-900 text-sm mb-1">Xác Định Sự Cố Lỗi Nặng</h4>
        <p class="text-xs text-gray-600">Kỹ thuật viên tại hiện trường đánh giá lỗi bo mạch hoặc cụm cơ khí mất trên 4 tiếng sửa chữa, lập biên bản đề xuất đổi máy.</p>
      </div>
      <div class="p-4 bg-gray-50 border rounded-lg">
        <span class="w-8 h-8 rounded-full bg-[#1A9900] text-white flex items-center justify-center font-bold text-sm mb-2">02</span>
        <h4 class="font-bold text-gray-900 text-sm mb-1">Xuất Kho Máy Dự Phòng</h4>
        <p class="text-xs text-gray-600">Bộ phận kho PDI kiểm tra và cấu hình sẵn máy thay thế có thông số tương đương hoặc cao hơn trong vòng 2 giờ.</p>
      </div>
      <div class="p-4 bg-gray-50 border rounded-lg">
        <span class="w-8 h-8 rounded-full bg-[#1A9900] text-white flex items-center justify-center font-bold text-sm mb-2">03</span>
        <h4 class="font-bold text-gray-900 text-sm mb-1">Bàn Giao & Đồng Bộ Mạng</h4>
        <p class="text-xs text-gray-600">Xe chuyên dụng chở máy đến thay thế, kết nối lại IP mạng và bàn giao cho khách hàng tiếp tục sử dụng ngay trong ngày.</p>
      </div>
    </div>
  </section>

  {AUTHOR_BOX_HTML}
</div>"""
}

POST_27 = {
    "slug": "kinh-te-tuan-hoan-va-giai-phap-tai-che-muc-linh-kien-may-in-huong-son",
    "category_id": 3,
    "category_name": "Chiến Lược & Dịch Vụ",
    "tag": "Chiến Lược & Dịch Vụ",
    "title": "Hương Sơn & Cam Kết Kinh Tế Tuần Hoàn: Thu Hồi, Tái Chế Hộp Mực & Linh Kiện An Toàn",
    "seo_title": "Kinh Tế Tuần Hoàn & Tái Chế Hộp Mực Máy In An Toàn | Hương Sơn",
    "seo_desc": "Chương trình thu hồi và tái chế hộp mực rỗng, linh kiện điện tử máy photocopy theo tiêu chuẩn môi trường ISO 14001, đồng hành cùng doanh nghiệp đạt mục tiêu ESG xanh.",
    "keywords": "kinh tế tuần hoàn máy in, tái chế hộp mực máy in, thu hồi vỏ hộp mực cũ, esg xanh văn phòng, tiêu chuẩn iso 14001 hương sơn",
    "published_at": "2026-10-06 11:45:00",
    "image_url": "/assets/images/news004-300x239.jpg",
    "reading_time": "12 phút đọc",
    "summary": "Cam kết trách nhiệm xã hội và môi trường của Hương Sơn: Xây dựng quy trình khép kín thu hồi vỏ hộp mực thải, xử lý an toàn vi hạt nhựa cacbon và phân loại linh kiện kim loại tái chế, hỗ trợ các đối tác doanh nghiệp đạt tiêu chuẩn đánh giá phát triển bền vững ESG.",
    "aeo_answer": "Quy trình kinh tế tuần hoàn trong dịch vụ in ấn của Hương Sơn bao gồm 4 công đoạn được chứng nhận theo ISO 14001: 1) Thu gom 100% vỏ chai mực, hộp mực và linh kiện hao mòn cũ tại văn phòng khách hàng trong các đợt bảo trì định kỳ; 2) Sử dụng hệ thống hút chân không chuyên dụng thu hồi triệt để cặn mực thải, chuyển giao cho đơn vị xử lý rác thải công nghiệp nguy hại thiêu hủy ở nhiệt độ cao không phát sinh Dioxin; 3) Tách phân loại nhựa kỹ thuật cao cấp ABS/PS để tái chế làm linh kiện phụ trợ; 4) Cấp chứng chỉ tiêu hủy và báo cáo giảm thiểu phát thải Carbon Footprint cho các doanh nghiệp khách hàng đáp ứng báo cáo ESG hàng năm.",
    "faqs": [
        {"q": "Tại sao không nên vứt vỏ hộp mực máy in chung với rác thải sinh hoạt thông thường?", "a": "Bột mực máy in chứa các hạt vi nhựa cacbon siêu mịn và oxit kim loại nặng. Nếu vứt bừa bãi ra bãi rác sinh hoạt, các hạt bột mực sẽ ngấm vào nguồn nước ngầm hoặc phát tán trong không khí gây ô nhiễm môi trường đất và nguy hại đến sức khỏe cộng đồng."},
        {"q": "Doanh nghiệp thuê máy photocopy của Hương Sơn có được cấp chứng nhận thu gom rác thải xanh không?", "a": "Có. Định kỳ hàng quý hoặc hàng năm, Hương Sơn sẽ cung cấp 'Biên bản thu gom & xử lý rác thải điện tử' chi tiết theo mã số thiết bị để quý doanh nghiệp bổ sung vào hồ sơ kiểm toán môi trường và báo cáo bền vững ESG."},
        {"q": "Hương Sơn xử lý các máy photocopy quá niên hạn sử dụng như thế nào?", "a": "Các thiết bị hết khấu hao được đưa về xưởng kỹ thuật để tháo dỡ toàn diện: bo mạch điện tử chuyển giao cho nhà máy tái chế vi mạch trích xuất kim loại quý, khung thép chuyển về nhà máy luyện kim, và vỏ nhựa được nghiền tái chế theo quy trình chuẩn."}
    ],
    "content_html": f"""<div class="space-y-8 text-[#181923]">
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-leaf text-base"></i>
      <span>AEO Direct Answer: Cam Kết In Ấn Xanh & ESG</span>
    </div>
    <p class="text-gray-800 text-sm sm:text-base leading-relaxed font-medium m-0">
      Phát triển bền vững không chỉ là khẩu hiệu mà là hành động thực tế trong từng khâu cung ứng dịch vụ. Bằng việc thu hồi 100% vỏ hộp mực rỗng, tiêu hủy cặn mực thải theo chuẩn ISO 14001 và tái chế linh kiện cơ khí, Hương Sơn tự hào đồng hành cùng các tập đoàn đa quốc gia và ngân hàng hiện thực hóa mục tiêu Net-Zero và đạt các chứng chỉ ESG uy tín.
    </p>
  </div>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">1. Thách Thức Rác Thải Công Nghệ Trong Ngành In Ấn Văn Phòng</h2>
    <p class="text-sm sm:text-base leading-relaxed text-gray-700">
      Mỗi năm, hàng triệu vỏ hộp mực in và linh kiện máy photocopy bị thải bỏ ra môi trường. Hạt mực nano cacbon siêu mịn nếu không được thu gom an toàn sẽ tồn tại hàng trăm năm trong tự nhiên. Ý thức rõ điều này, Hương Sơn đã tiên phong xây dựng chuỗi cung ứng dịch vụ tuần hoàn xanh từ năm 2018.
    </p>
    <figure class="my-6 not-prose">
      <img src="/assets/images/news004-300x239.jpg" alt="Quy trình thu gom và phân loại vỏ linh kiện thiết bị văn phòng" class="w-full h-auto rounded-lg shadow-md border" />
      <figcaption class="text-xs text-gray-500 text-center mt-2 italic">Hệ thống phân loại và thu gom linh kiện mực in đạt chuẩn môi trường ISO 14001.</figcaption>
    </figure>
  </section>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">2. Lộ Trình 4 Bước Thu Hồi & Xử Lý Khép Kín Của Hương Sơn</h2>
    <ul class="list-disc pl-6 space-y-2 text-sm sm:text-base text-gray-700">
      <li><strong>1. Thu gom tận nơi:</strong> Kỹ thuật viên tự động nhận lại các hộp mực đã dùng hết trong mỗi đợt châm mực hoặc kiểm tra máy định kỳ.</li>
      <li><strong>2. Hút cặn mực an toàn:</strong> Sử dụng hệ thống áp suất âm chân không khép kín để rút sạch toàn bộ bụi mực thừa bên trong hộp rỗng.</li>
      <li><strong>3. Tái sinh vỏ nhựa kỹ thuật:</strong> Các chi tiết nhựa còn nguyên vẹn được làm sạch siêu âm để tái sử dụng theo chu trình nghiêm ngặt của nhà sản xuất.</li>
      <li><strong>4. Cấp chứng chỉ ESG:</strong> Bàn giao chứng từ báo cáo định lượng rác thải tái chế giúp khách hàng ghi điểm tối đa với các đối tác quốc tế.</li>
    </ul>
  </section>

  {AUTHOR_BOX_HTML}
</div>"""
}

BATCH_5_POSTS = [POST_22, POST_23, POST_24, POST_25, POST_26, POST_27]
