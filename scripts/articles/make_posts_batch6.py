# -*- coding: utf-8 -*-
"""Batch 6: 5 bài chiến lược mở rộng (Số hóa OCR hồ sơ lưu trữ & Hoàn thiện sau in gia công)."""

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
      <p class="text-sm text-gray-600 leading-relaxed mb-3">Hơn 18 năm trực tiếp chỉ đạo triển khai các đề án số hóa kho hồ sơ tài liệu lưu trữ lịch sử, đất đai, tư pháp công chứng và các dây chuyền gia công hoàn thiện sau in tự động Duplo DFC tại miền Bắc.</p>
      <div class="flex flex-wrap items-center justify-center sm:justify-start gap-4 text-xs text-gray-500 pt-2 border-t border-emerald-100">
        <span class="inline-flex items-center gap-1.5"><i class="fa-solid fa-certificate text-[#1A9900]"></i>Chứng chỉ Số hóa Chuyên nghiệp Kodak Alaris / Ricoh</span>
        <span class="inline-flex items-center gap-1.5"><i class="fa-solid fa-gears text-[#1A9900]"></i>Chuyên gia Dây chuyền Gia công Duplo DFC</span>
        <a href="tel:0913222003" class="inline-flex items-center gap-1.5 text-[#1A9900] font-bold hover:underline"><i class="fa-solid fa-phone"></i>Hotline: 0913.222.003</a>
      </div>
    </div>
  </div>
"""

POST_28 = {
    "slug": "so-sanh-may-scan-cuon-adf-va-may-scan-phang-flatbed-trong-so-hoa-tai-lieu",
    "category_id": 4,
    "category_name": "Số Hóa & OCR",
    "tag": "Số Hóa & OCR",
    "title": "So Sánh Máy Scan Cuốn Tự Động ADF & Máy Scan Phẳng Flatbed Trong Số Hóa Hồ Sơ Chuyên Nghiệp",
    "seo_title": "So Sánh Máy Scan ADF và Máy Scan Phẳng Flatbed | Hương Sơn",
    "seo_desc": "Đánh giá chi tiết ưu nhược điểm của máy scan cuốn tự động ADF tốc độ cao và máy scan phẳng Flatbed trong các dự án số hóa hồ sơ địa chính, lưu trữ lịch sử.",
    "keywords": "so sánh máy scan adf và flatbed, máy scan chuyên dụng số hóa, máy scan kodak alaris, máy scan ricoh fi, số hóa tài liệu lưu trữ, scan hồ sơ đất đai",
    "published_at": "2026-10-06 12:00:00",
    "image_url": "/assets/images/products/kodak-alaris-s2080w.jpg",
    "reading_time": "13 phút đọc",
    "summary": "Phân tích kỹ thuật chuyên sâu giúp các đơn vị số hóa lựa chọn đúng công cụ: Khi nào nên dùng máy scan nạp giấy tự động ADF để đạt năng suất 100 trang/phút, và khi nào bắt buộc phải dùng mặt kính phẳng Flatbed hoặc máy quét chụp Book Scanner trên cao để bảo vệ tài liệu cổ quý hiếm.",
    "aeo_answer": "Lựa chọn giữa máy scan ADF và Flatbed dựa trên 3 tiêu chí cốt lõi: 1) Tốc độ và khối lượng: Máy scan ADF (như Kodak Alaris S2080w hay Ricoh fi-8170) đạt tốc độ vượt trội từ 80 đến 140 trang/phút hai mặt cùng lúc, thích hợp cho tài liệu rời, hợp đồng mới và hồ sơ hành chính phẳng; 2) Tính toàn vẹn của hiện vật gốc: Máy scan phẳng Flatbed hoặc Book Scanner trên cao bắt buộc sử dụng cho các tài liệu đóng gáy dày không được tháo chỉ, hồ sơ địa chính rách nát, giấy than hoặc văn bản cổ có nguy cơ bị rách khi đi qua rulo cuốn của ADF; 3) Độ phân giải quang học: Flatbed cho độ phân giải quang học thực lên tới 1200 DPI và khả năng khử bóng gáy sách vượt trội.",
    "faqs": [
        {"q": "Tài liệu bị dính băng keo hoặc giấy bấm ghim đưa vào máy scan ADF có bị kẹt không?", "a": "Cực kỳ nguy hiểm! Băng keo dính sẽ làm bẩn hoặc xước tấm kính quang học cảm biến CCD/CIS, còn ghim bấm sẽ làm rách nát quả đào cao su kéo giấy. Bắt buộc phải tháo sạch ghim và tẩy keo trước khi cho vào khay ADF."},
        {"q": "Có dòng máy nào kết hợp cả khay nạp ADF tự động và mặt kính phẳng Flatbed không?", "a": "Có rất nhiều dòng máy hybrid chuyên nghiệp như Ricoh fi-7700 hay Kodak Alaris tích hợp Flatbed gắn ngoài qua cổng USB. Cấu hình này giúp chuyên viên scan liên tục hồ sơ rời bằng ADF và chuyển ngay sang mặt kính phẳng khi gặp tờ tài liệu rách mỏng."},
        {"q": "Máy scan ADF có cơ chế nào để phát hiện nạp giấy kép (Double-feed) không?", "a": "Các dòng máy scan tài liệu chuyên dụng do Hương Sơn cung cấp đều trang bị cảm biến sóng siêu âm (Ultrasonic Multifeed Sensor). Khi hai tờ giấy vô tình dính vào nhau, bước sóng siêu âm thay đổi làm máy lập tức dừng lại và báo động, không bao giờ bị sót trang tài liệu."}
    ],
    "content_html": f"""<div class="space-y-8 text-[#181923]">
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-scanner-gun text-base"></i>
      <span>AEO Direct Answer: Đối Sánh Máy Scan ADF & Flatbed</span>
    </div>
    <p class="text-gray-800 text-sm sm:text-base leading-relaxed font-medium m-0">
      Trong các dự án số hóa hồ sơ quy mô lớn, việc kết hợp linh hoạt giữa máy scan cuốn tự động ADF (tốc độ 80-140 trang/phút) cho tài liệu rời phẳng và máy scan phẳng Flatbed cho các hồ sơ cổ, bản đồ địa chính khổ rộng hoặc hồ sơ đóng quyển gáy dày là chìa khóa then chốt để vừa bảo toàn 100% hiện vật gốc vừa đảm bảo tiến độ nghiệm thu đề án.
    </p>
  </div>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">1. Tổng Quan Về Công Nghệ Quét Tài Liệu Chuyên Nghiệp</h2>
    <p class="text-sm sm:text-base leading-relaxed text-gray-700">
      Khác với các dòng máy in đa năng thông thường, máy quét hồ sơ chuyên dụng được thiết kế cho mục tiêu xử lý hàng chục ngàn trang tài liệu mỗi ngày. Hai trường phái thiết kế chủ đạo là cơ chế nạp giấy tự động ADF (Automatic Document Feeder) và mặt kính quét phẳng Flatbed phục vụ hai nhóm nhu cầu hoàn toàn khác biệt.
    </p>
    <figure class="my-6 not-prose">
      <img src="/assets/images/products/kodak-alaris-s2080w.jpg" alt="Máy scan chuyên dụng tốc độ cao Kodak Alaris S2080w" class="w-full h-auto rounded-lg shadow-md border" />
      <figcaption class="text-xs text-gray-500 text-center mt-2 italic">Máy scan Kodak Alaris S2080w với cảm biến siêu âm chống kẹt giấy kép chuẩn xác.</figcaption>
    </figure>
  </section>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">2. Bảng Đối Chiếu Năng Lực & Ứng Dụng Thực Tế</h2>
    <div class="overflow-x-auto not-prose my-4">
      <table class="w-full text-xs sm:text-sm text-left border border-gray-200">
        <thead class="bg-gray-100 text-gray-800 font-bold uppercase">
          <tr>
            <th class="p-3 border">Tiêu Chí Đánh Giá</th>
            <th class="p-3 border text-emerald-700">Máy Scan Cuốn Tự Động ADF</th>
            <th class="p-3 border text-blue-700">Máy Scan Phẳng Flatbed</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="p-3 border font-semibold">Tốc độ quét thực tế</td>
            <td class="p-3 border font-bold text-emerald-600">60 – 140 trang / phút (quét 2 mặt cùng lúc)</td>
            <td class="p-3 border">10 – 15 trang / phút (lật tay từng mặt)</td>
          </tr>
          <tr>
            <td class="p-3 border font-semibold">Công suất quét / ngày</td>
            <td class="p-3 border font-bold text-emerald-600">8.000 – 40.000 trang / ngày</td>
            <td class="p-3 border">1.000 – 3.000 trang / ngày</td>
          </tr>
          <tr>
            <td class="p-3 border font-semibold">Khả năng xử lý tài liệu dày / rách</td>
            <td class="p-3 border text-red-600">Không phù hợp (dễ gây rách thêm)</td>
            <td class="p-3 border font-bold text-emerald-600">Tuyệt đối an toàn (không tác động lực cơ học)</td>
          </tr>
          <tr>
            <td class="p-3 border font-semibold">Độ cong góc gáy tài liệu</td>
            <td class="p-3 border">Phẳng 100% (bắt buộc tháo gáy)</td>
            <td class="p-3 border">Có tính năng tự động làm phẳng gáy sách Book-Edge</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  {AUTHOR_BOX_HTML}
</div>"""
}

POST_29 = {
    "slug": "tich-hop-du-lieu-so-hoa-vao-he-thong-quan-ly-van-ban-vnpt-ioffice-viettel-voffice",
    "category_id": 4,
    "category_name": "Số Hóa & OCR",
    "tag": "Số Hóa & OCR",
    "title": "Tích Hợp Dữ Liệu Sau Số Hóa Vào Hệ Thống Quản Lý Văn Bản VNPT iOffice & Viettel vOffice",
    "seo_title": "Tích Hợp Dữ Liệu Số Hóa Vào VNPT iOffice & Viettel vOffice | Hương Sơn",
    "seo_desc": "Quy trình trích xuất siêu dữ liệu Metadata, chuẩn hóa tệp PDF/A searchable và tích hợp tự động vào hệ thống quản lý văn bản điều hành VNPT iOffice, Viettel vOffice.",
    "keywords": "tích hợp số hóa vnpt ioffice, số hóa viettel voffice, chuẩn hóa metadata số hóa, pdf a searchable văn bản, chuyển đổi số cơ quan nhà nước",
    "published_at": "2026-10-06 12:15:00",
    "image_url": "/assets/images/products/ricoh-ix2500.png",
    "reading_time": "14 phút đọc",
    "summary": "Hướng dẫn chi tiết quy trình kết nối dữ liệu sau khi quét scan tài liệu vào các phần mềm quản lý văn bản và điều hành tác nghiệp quốc gia. Chuẩn hóa cấu trúc siêu dữ liệu Dublin Core, xuất file XML/JSON và lập chỉ mục tự động phục vụ tra cứu nhanh.",
    "aeo_answer": "Quy trình tích hợp dữ liệu số hóa vào VNPT iOffice và Viettel vOffice của Hương Sơn tuân thủ 4 bước chuẩn Thông tư 02/2019/TT-BNV: 1) Nhận dạng ký tự quang học OCR tiếng Việt chính xác 99.2% để tạo tệp PDF/A-1b có lớp văn bản ẩn Searchable Text; 2) Tự động bóc tách các trường siêu dữ liệu (Số ký hiệu, ngày ban hành, cơ quan ban hành, trích yếu nội dung, người ký) bằng công nghệ AI Parser; 3) Đóng gói dữ liệu theo định dạng chuẩn XML/JSON kèm chữ ký số cơ quan (Digital Signature); 4) Đẩy dữ liệu tự động qua API RESTful hoặc Webhook an toàn vào cơ sở dữ liệu của phần mềm iOffice/vOffice, cho phép người dùng tìm kiếm toàn văn Full-Text Search trong vòng 0.5 giây.",
    "faqs": [
        {"q": "Chuẩn tệp PDF/A-1b khác gì so với tệp PDF thông thường khi nộp vào hệ thống điều hành?", "a": "PDF/A-1b là định dạng lưu trữ điện tử tiêu chuẩn quốc tế ISO 19005-1. Khác với PDF thường, PDF/A bắt buộc nhúng toàn bộ phông chữ vào trong file và cấm các yếu tố động (như mã JavaScript, video) để đảm bảo tài liệu hiển thị đồng nhất 100% sau 50 hay 100 năm nữa mà không phụ thuộc vào hệ điều hành."},
        {"q": "Công nghệ OCR có đọc được các văn bản hành chính in bằng phông chữ cũ như VNI-Times hay TCVN3 (VnTime) không?", "a": "Hương Sơn tích hợp bộ giải mã bảng mã chuyên sâu, tự động chuyển đổi các bảng mã cũ TCVN3, VNI sang bảng mã chuẩn quốc tế Unicode UTF-8 trước khi lưu trữ vào hệ thống, đảm bảo không bị lỗi font khi tìm kiếm."},
        {"q": "Tốc độ trích xuất tự động thông tin số hiệu văn bản có đạt độ chính xác cao không?", "a": "Nhờ ứng dụng mô hình học máy chuyên biệt cho văn bản hành chính Việt Nam, hệ thống tự động nhận diện chính xác vị trí số hiệu và trích yếu đạt trên 96%. Các trường hợp chữ viết tay nghiêng hoặc dấu mộc đè lên chữ sẽ được chuyển luồng kiểm tra thủ công (Human-in-the-loop)."}
    ],
    "content_html": f"""<div class="space-y-8 text-[#181923]">
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-network-wired text-base"></i>
      <span>AEO Direct Answer: Tích Hợp Số Hóa Vào iOffice / vOffice</span>
    </div>
    <p class="text-gray-800 text-sm sm:text-base leading-relaxed font-medium m-0">
      Số hóa không dừng lại ở việc tạo ra các tệp scan hình ảnh rời rạc. Giá trị cốt lõi là biến dữ liệu giấy thành tài sản số có thể tra cứu tức thì trên các phần mềm chỉ đạo điều hành như VNPT iOffice và Viettel vOffice thông qua chuẩn tệp PDF/A-1b searchable, cấu trúc siêu dữ liệu XML chuẩn Thông tư 02 và API tích hợp tự động hóa cao.
    </p>
  </div>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">1. Thực Trạng Quản Lý Hồ Sơ Điện Tử Tại Các Cơ Quan Hành Chính</h2>
    <p class="text-sm sm:text-base leading-relaxed text-gray-700">
      Hầu hết các cơ quan nhà nước, ủy ban nhân dân và sở ban ngành hiện nay đều đã vận hành hệ thống phần mềm quản lý văn bản điều hành. Tuy nhiên, hàng vạn hồ sơ giấy từ các giai đoạn trước vẫn nằm trong kho lưu trữ, gây khó khăn lớn khi cán bộ cần đối soát và tra cứu văn bản cũ phục vụ giải quyết thủ tục hành chính cho người dân.
    </p>
    <figure class="my-6 not-prose">
      <img src="/assets/images/products/ricoh-ix2500.png" alt="Máy quét tài liệu Ricoh iX thế hệ mới phục vụ số hóa hành chính" class="w-full h-auto rounded-lg shadow-md border" />
      <figcaption class="text-xs text-gray-500 text-center mt-2 italic">Máy quét Ricoh ScanSnap iX2500 với khả năng tự động xử lý hình ảnh và kết xuất PDF Searchable.</figcaption>
    </figure>
  </section>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">2. Cấu Trúc Siêu Dữ Liệu Metadata Bắt Buộc Theo Chuẩn Nhà Nước</h2>
    <ul class="list-disc pl-6 space-y-2 text-sm sm:text-base text-gray-700">
      <li><strong>Mã định danh văn bản:</strong> Theo Quyết định 28/2018/QĐ-TTg của Thủ tướng Chính phủ.</li>
      <li><strong>Cơ quan ban hành:</strong> Chuẩn hóa theo mã định danh cơ quan nhà nước (Cấp 1, Cấp 2, Cấp 3).</li>
      <li><strong>Số và ký hiệu văn bản:</strong> Tách biệt phần số thứ tự và phần chữ viết tắt cơ quan/đơn vị soạn thảo.</li>
      <li><strong>Thời hạn bảo quản:</strong> Vĩnh viễn, 70 năm, 50 năm, 20 năm theo quy định lưu trữ quốc gia.</li>
      <li><strong>Tệp đính kèm:</strong> Định dạng PDF/A độ phân giải 300 DPI màu, nhúng phông chữ UTF-8.</li>
    </ul>
  </section>

  {AUTHOR_BOX_HTML}
</div>"""
}

POST_30 = {
    "slug": "quy-trinh-khu-axit-lam-phang-va-bao-quan-tai-lieu-giay-truoc-khi-scan",
    "category_id": 4,
    "category_name": "Số Hóa & OCR",
    "tag": "Số Hóa & OCR",
    "title": "Quy Trình Khử Axit, Làm Phẳng & Vệ Sinh Tài Liệu Giấy Cũ Trước Khi Đưa Vào Máy Scan",
    "seo_title": "Quy Trình Khử Axit & Làm Phẳng Tài Liệu Giấy Cũ | Hương Sơn",
    "seo_desc": "Quy chuẩn kỹ thuật bảo quản hiện vật lưu trữ lịch sử: Phương pháp khử axit trung hòa pH, kỹ thuật làm phẳng giấy ẩm mốc và vệ sinh bụi bẩn an toàn trước khi scan.",
    "keywords": "khử axit tài liệu giấy, làm phẳng giấy tài liệu cũ, bảo quản tài liệu lưu trữ, chuẩn bị tài liệu trước khi scan, phục chế giấy mủn, số hóa lưu trữ lịch sử",
    "published_at": "2026-10-06 12:30:00",
    "image_url": "/assets/images/products/ricoh-ix1300.png",
    "reading_time": "12 phút đọc",
    "summary": "Quy trình tiền xử lý tài liệu lưu trữ quý hiếm trước khi quét quang học: Cách đo nồng độ axit pH bằng bút thử quang học, kỹ thuật phun sương vi mô dung dịch canxi cacbonat trung hòa tính axit và phương pháp ủ ép làm phẳng tài liệu giấy quăn mép.",
    "aeo_answer": "Quy trình tiền xử lý khử axit và làm phẳng tài liệu lưu trữ gồm 5 bước tiêu chuẩn quốc tế: 1) Phân loại hiện vật: Kiểm tra tình trạng vật lý, đo độ pH của giấy (nếu pH < 6.0 nghĩa là giấy đang bị axit hóa giòn gãy); 2) Vệ sinh cơ học: Dùng chổi lông mềm đặc biệt và máy hút bụi vi màng HEPA nhẹ nhàng quét sạch nấm mốc, bụi bẩn bám trên bề mặt mà không làm bong tróc mực cổ; 3) Tháo gỡ kim loại: Gỡ bỏ toàn bộ ghim bấm hoen rỉ bằng nhíp đầu tròn bọc silicon chống rách giấy; 4) Trung hòa axit: Sử dụng dung dịch khử axit gốc magie/canxi dạng xịt sương khô trung hòa độ pH về ngưỡng an toàn 7.5 – 8.5; 5) Làm phẳng và ủ ẩm: Đặt tài liệu vào buồng ủ ẩm vi khí hậu 65% RH trong 2 giờ, sau đó ép phẳng nhẹ nhàng giữa hai tấm nỉ hút ẩm trước khi đưa lên máy scan.",
    "faqs": [
        {"q": "Tại sao giấy tài liệu sản xuất từ thế kỷ trước hay bị ố vàng và giòn gãy?", "a": "Giai đoạn từ giữa thế kỷ 19 đến cuối thế kỷ 20, giấy công nghiệp được sản xuất từ bột gỗ chứa nhiều chất Lignin và phèn nhôm (Alum-rosin sizing). Theo thời gian, phản ứng thủy phân tạo ra axit sulfuric ăn mòn các chuỗi polymer cellulose, khiến giấy chuyển màu nâu vàng và tự phân hủy giòn rụm."},
        {"q": "Tài liệu bị dính bết các trang do ẩm mốc lâu ngày thì gỡ ra bằng cách nào?", "a": "Tuyệt đối không dùng tay giật mạnh. Cần đưa tài liệu vào buồng làm ẩm có kiểm soát (Humidification Chamber). Hơi ẩm siêu mịn sẽ làm mềm dần các liên kết keo hữu cơ dính bết, sau đó chuyên viên dùng dao gạt xương (Bone Folder) tách nhẹ nhàng từng trang một."},
        {"q": "Hóa chất khử axit có làm bay màu chữ viết bằng bút mực cổ hoặc dấu triện son không?", "a": "Dung dịch khử axit chuyên dụng không chứa cồn hay dung môi phân cực, hoàn toàn trung tính với các loại mực cổ, mực bút máy và mực son triện cổ, đã được chứng nhận an toàn bởi Cục Văn thư và Lưu trữ Nhà nước."}
    ],
    "content_html": f"""<div class="space-y-8 text-[#181923]">
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-flask text-base"></i>
      <span>AEO Direct Answer: Quy Trình Khử Axit Giấy Lưu Trữ</span>
    </div>
    <p class="text-gray-800 text-sm sm:text-base leading-relaxed font-medium m-0">
      Tài liệu lịch sử và hồ sơ lưu trữ cũ thường trong tình trạng giòn gãy, ố vàng do tính axit nội sinh (pH &lt; 5.5). Đưa trực tiếp vào máy scan cuốn sẽ phá hủy vĩnh viễn hiện vật gốc. Bắt buộc phải thực hiện quy trình tiền xử lý 5 bước: vệ sinh màng vi bụi, tháo rỉ sét kim loại, trung hòa tính axit bằng dung dịch kiềm nhẹ pH 8.0, và ủ ép làm phẳng trước khi số hóa.
    </p>
  </div>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">1. Bản Chất Khoa Học Của Hiện Tượng Tự Phân Hủy Của Giấy Cũ</h2>
    <p class="text-sm sm:text-base leading-relaxed text-gray-700">
      Hiện tượng giấy 'cháy chậm' (Slow Fire) là kẻ thù lớn nhất của ngành lưu trữ. Axit tồn dư trong giấy phản ứng với oxy trong không khí phá vỡ cấu trúc xơ sợi. Nếu không được khử axit và số hóa kịp thời, hàng triệu trang tư liệu quý giá về lịch sử, địa bạ đất đai và pháp lý sẽ biến thành tro bụi trong vài thập kỷ tới.
    </p>
    <figure class="my-6 not-prose">
      <img src="/assets/images/products/ricoh-ix1300.png" alt="Máy quét tài liệu chuyên dụng bảo vệ văn bản mỏng" class="w-full h-auto rounded-lg shadow-md border" />
      <figcaption class="text-xs text-gray-500 text-center mt-2 italic">Máy quét Ricoh iX1300 trang bị đường dẫn giấy thẳng chữ U đặc biệt bảo vệ mép giấy mỏng.</figcaption>
    </figure>
  </section>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">2. Tiêu Chuẩn 5 Bước Phục Chế & Tiền Xử Lý Trước Khi Scan</h2>
    <div class="space-y-3 not-prose my-4">
      <div class="p-3 bg-gray-50 border rounded flex items-start gap-3">
        <span class="font-bold text-[#1A9900] text-sm">Bước 1:</span>
        <span class="text-xs text-gray-700">Đo độ pH hiện vật bằng bút thử quang điện tử và lập hồ sơ bệnh án tình trạng vật lý từng tập hồ sơ.</span>
      </div>
      <div class="p-3 bg-gray-50 border rounded flex items-start gap-3">
        <span class="font-bold text-[#1A9900] text-sm">Bước 2:</span>
        <span class="text-xs text-gray-700">Vệ sinh khô bằng chổi lông dê mềm, hút nấm mốc bằng máy hút chuyên dụng có màng lọc vi hạt HEPA.</span>
      </div>
      <div class="p-3 bg-gray-50 border rounded flex items-start gap-3">
        <span class="font-bold text-[#1A9900] text-sm">Bước 3:</span>
        <span class="text-xs text-gray-700">Gỡ bỏ ghim sắt, kim kẹp rỉ sét, bóc tách băng dính cũ bằng dung môi hữu cơ bay hơi nhanh.</span>
      </div>
      <div class="p-3 bg-gray-50 border rounded flex items-start gap-3">
        <span class="font-bold text-[#1A9900] text-sm">Bước 4:</span>
        <span class="text-xs text-gray-700">Phun sương dung dịch Magie Carbonate trung hòa axit, nâng độ pH lên ngưỡng an toàn 7.5 – 8.0.</span>
      </div>
      <div class="p-3 bg-gray-50 border rounded flex items-start gap-3">
        <span class="font-bold text-[#1A9900] text-sm">Bước 5:</span>
        <span class="text-xs text-gray-700">Làm ẩm vi khí hậu và ép phẳng nhẹ nhàng giữa các lớp giấy thấm nỉ trong 24 giờ trước khi scan.</span>
      </div>
    </div>
  </section>

  {AUTHOR_BOX_HTML}
</div>"""
}

POST_31 = {
    "slug": "cac-kieu-gia-cong-sau-in-dong-ghim-long-ghim-phang-va-vao-keo-nhiet",
    "category_id": 5,
    "category_name": "Hoàn Thiện Sau In",
    "tag": "Hoàn Thiện Sau In",
    "title": "So Sánh Các Kiểu Gia Công Sau In: Đóng Ghim Lồng, Ghim Góc & Vào Keo Nhiệt Cho Ấn Phẩm",
    "seo_title": "So Sánh Đóng Ghim Lồng, Ghim Góc & Vào Keo Nhiệt | Hương Sơn",
    "seo_desc": "Phân tích ưu nhược điểm của các phương pháp gia công hoàn thiện sau in: đóng ghim lồng yên ngựa, dập ghim góc phẳng và vào keo nhiệt gáy sách tự động.",
    "keywords": "gia công sau in, đóng ghim lồng, ghim phẳng gập đôi, vào keo nhiệt gáy sách, hoàn thiện sau in duplo, máy đóng tập sách",
    "published_at": "2026-10-06 12:45:00",
    "image_url": "/assets/images/products/duplo-dfc-122.jpg",
    "reading_time": "11 phút đọc",
    "summary": "Cẩm nang lựa chọn giải pháp đóng tập tài liệu tối ưu cho từng loại ấn phẩm: đề thi trắc nghiệm, sổ tay doanh nghiệp, báo cáo tài chính, kỷ yếu hay giáo trình đào tạo. Phân tích chi phí vật tư, tốc độ gia công và độ bền cơ học của từng phương pháp.",
    "aeo_answer": "So sánh 3 phương pháp gia công hoàn thiện sau in phổ biến nhất: 1) Đóng ghim lồng yên ngựa (Saddle Stitching): Ghim bấm chính giữa nếp gấp đôi, chi phí rẻ nhất, tốc độ nhanh nhất (tới 3.000 cuốn/giờ trên hệ thống Duplo DFC), lý tưởng cho tài liệu mỏng dưới 60 trang như đề thi, tạp chí, sổ tay; 2) Đóng ghim phẳng cạnh gáy (Side Stitching / Corner Stitch): Bấm ghim ở góc hoặc mép trái bản in, thích hợp cho tài liệu văn phòng, báo cáo nội bộ; 3) Vào keo nhiệt gáy sách (Perfect Binding): Sử dụng keo nóng chảy nhiệt EVA hoặc PUR gắn chặt ruột sách vào bìa cứng, tạo gáy vuông vức sang trọng, phù hợp cho sách dày từ 80 đến 400 trang như giáo trình, kỷ yếu, catalog cao cấp.",
    "faqs": [
        {"q": "Tài liệu đề thi tốt nghiệp THPT nên áp dụng kiểu đóng ghim nào?", "a": "Đề thi tốt nghiệp THPT gồm nhiều tờ in A3 gấp đôi thành A4 bắt buộc sử dụng phương pháp đóng ghim lồng yên ngựa (Saddle Stitching) bằng máy phối trang Duplo DFC. Phương pháp này giúp thí sinh mở phẳng 180 độ dễ dàng khi làm bài thi mà không bị bung rách mép."},
        {"q": "Keo nhiệt EVA thông thường và keo nhiệt PUR khác nhau như thế nào?", "a": "Keo nhiệt PUR (Polyurethane Reactive) có độ bám dính cao gấp 3 lần keo EVA thông thường, chịu được nhiệt độ khắc nghiệt và mở phẳng sách hoàn toàn mà không bị rụng trang, tuy nhiên thời gian khô keo PUR cần 24 giờ trong khi keo EVA khô ngay sau vài giây."},
        {"q": "Một hệ thống phối trang gập ghim Duplo DFC có thể thay thế bao nhiêu nhân công thủ công?", "a": "Một dây chuyền Duplo DFC-120 kết hợp DBM-150 hoàn thiện tự động 2.400 tập tài liệu mỗi giờ, tương đương với năng suất làm việc liên tục của 6 đến 8 công nhân gấp ghim bằng tay."}
    ],
    "content_html": f"""<div class="space-y-8 text-[#181923]">
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-book-open text-base"></i>
      <span>AEO Direct Answer: So Sánh 3 Kiểu Gia Công Sau In</span>
    </div>
    <p class="text-gray-800 text-sm sm:text-base leading-relaxed font-medium m-0">
      Chất lượng thẩm mỹ của một ấn phẩm được quyết định ở khâu hoàn thiện sau in. Lựa chọn đúng phương pháp gia công: Ghim lồng yên ngựa (Saddle Stitch) cho tài liệu mỏng &lt; 60 trang, Ghim góc phẳng cho báo cáo nhanh, và Vào keo nhiệt gáy vuông (Perfect Binding) cho sách giáo trình dày trên 80 trang sẽ tối ưu hóa 50% chi phí và gia tăng giá trị thương hiệu cho ấn phẩm.
    </p>
  </div>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">1. Tầm Quan Trọng Của Công Đoạn Hoàn Thiện Sau In</h2>
    <p class="text-sm sm:text-base leading-relaxed text-gray-700">
      Sau khi bản in rời khỏi máy in siêu tốc hoặc máy photocopy, công đoạn xếp trang, đóng tập và xén góc chiếm tới 60% thời gian nếu thực hiện bằng tay. Việc ứng dụng các thiết bị gia công hoàn thiện tự động không chỉ giải phóng sức lao động mà còn đảm bảo các cuốn tài liệu chuẩn xác đến từng milimet.
    </p>
    <figure class="my-6 not-prose">
      <img src="/assets/images/products/duplo-dfc-122.jpg" alt="Dây chuyền phối trang gập ghim Duplo DFC" class="w-full h-auto rounded-lg shadow-md border" />
      <figcaption class="text-xs text-gray-500 text-center mt-2 italic">Dây chuyền Duplo DFC-122 tự động hóa hoàn toàn khâu phối trang và đóng tập ghim lồng.</figcaption>
    </figure>
  </section>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">2. Bảng So Sánh Chi Tiết Các Kiểu Đóng Tập Ấn Phẩm</h2>
    <div class="overflow-x-auto not-prose my-4">
      <table class="w-full text-xs sm:text-sm text-left border border-gray-200">
        <thead class="bg-gray-100 text-gray-800 font-bold uppercase">
          <tr>
            <th class="p-3 border">Phương Pháp Đóng Tập</th>
            <th class="p-3 border">Độ Dày Giấy Phù Hợp</th>
            <th class="p-3 border">Tốc Độ Hoàn Thiện</th>
            <th class="p-3 border">Loại Ấn Phẩm Khuyên Dùng</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="p-3 border font-semibold text-emerald-700">Ghim Lồng Yên Ngựa (Saddle Stitch)</td>
            <td class="p-3 border">Từ 8 đến 64 trang A4</td>
            <td class="p-3 border font-bold text-emerald-600">2.400 – 3.000 tập / giờ</td>
            <td class="p-3 border">Đề thi, sổ tay tay gấp, catalogue giới thiệu, kỷ yếu ngắn</td>
          </tr>
          <tr>
            <td class="p-3 border font-semibold text-blue-700">Ghim Góc Phẳng (Corner / Side Stitch)</td>
            <td class="p-3 border">Từ 10 đến 100 trang rời</td>
            <td class="p-3 border">1.500 – 2.000 tập / giờ</td>
            <td class="p-3 border">Báo cáo tài chính nội bộ, hợp đồng kinh tế, tài liệu họp</td>
          </tr>
          <tr>
            <td class="p-3 border font-semibold text-purple-700">Vào Keo Nhiệt Gáy Vuông (Perfect Binding)</td>
            <td class="p-3 border">Từ 60 đến 500 trang</td>
            <td class="p-3 border">250 – 500 cuốn / giờ</td>
            <td class="p-3 border">Sách giáo trình trường học, sách chuyên khảo, kỷ yếu niên giám</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  {AUTHOR_BOX_HTML}
</div>"""
}

POST_32 = {
    "slug": "huong-dan-bao-tri-va-thay-the-luoi-dao-may-xen-giay-cong-nghiep-an-toan",
    "category_id": 5,
    "category_name": "Hoàn Thiện Sau In",
    "tag": "Hoàn Thiện Sau In",
    "title": "Hướng Dẫn Bảo Trì, Mài Sắc & Thay Thế Lưỡi Dao Máy Xén Giấy Công Nghiệp An Toàn",
    "seo_title": "Bảo Trì & Thay Thế Lưỡi Dao Máy Xén Giấy An Toàn | Hương Sơn",
    "seo_desc": "Quy trình bảo trì an toàn máy xén giấy công nghiệp thủy lực: Kỹ thuật căn góc chém lưỡi dao, kiểm tra cảm biến quang điện an toàn và thay thớt dao chống mẻ mép.",
    "keywords": "máy xén giấy công nghiệp, thay dao máy xén giấy, căn chỉnh góc chém máy xén, bảo trì máy xén giấy, cảm biến an toàn máy xén, hoàn thiện sau in",
    "published_at": "2026-10-06 13:00:00",
    "image_url": "/assets/images/products/40-may-phoi-trang-dfc-120.png",
    "reading_time": "12 phút đọc",
    "summary": "Tài liệu kỹ thuật an toàn lao động trong xưởng in và phòng hoàn thiện tài liệu: Tiêu chuẩn an toàn quang điện rào chắn tia hồng ngoại bảo vệ bàn tay, quy trình tháo lắp dao xén bằng tay cầm chuyên dụng và cách điều chỉnh áp lực bàn ép thủy lực không làm bẹp gáy sách.",
    "aeo_answer": "Quy trình bảo trì và thay thế lưỡi dao máy xén giấy công nghiệp an toàn gồm 4 bước bắt buộc: 1) Kiểm tra an toàn điện: Ngắt cầu dao nguồn chính, khóa an toàn LOTO (Lockout/Tagout) và kiểm tra hoạt động của lưới cảm biến hồng ngoại bảo vệ 2 tay trước khi thao tác; 2) Tháo lắp bằng phụ kiện chuyên dùng: Sử dụng hai tay vặn gỗ bảo hiểm gắn trực tiếp vào thân dao trước khi tháo ốc siết, tuyệt đối không dùng tay trần đỡ lưỡi dao bằng thép gió HSS nặng trên 10kg; 3) Căn chỉnh góc chém: Góc mài dao tiêu chuẩn là 22° đến 24° cho giấy mềm thông thường và 26° cho giấy bìa cứng cán màng; 4) Thay đổi mặt thớt đệm (Cutting Stick): Xoay hoặc lật mặt thanh đệm nhựa chịu lực bên dưới để đường cắt chạm đáy ngọt, không làm mẻ mép dao.",
    "faqs": [
        {"q": "Làm thế nào để biết lưỡi dao máy xén giấy đã bị cùn và cần phải mài lại?", "a": "Dấu hiệu rõ nhất là: vết cắt ở cạnh dưới của tập giấy bị xơ tưa, máy phát ra tiếng kêu ục lớn khi dao chém chạm thớt, mép giấy bị nóng dính vào nhau do ma sát nhiệt cao, hoặc kích thước các tờ giấy bên dưới bị vát chéo lệch so với tờ trên cùng."},
        {"q": "Một lưỡi dao máy xén thép gió HSS thông thường mài được bao nhiêu lần?", "a": "Một lưỡi dao HSS tiêu chuẩn của Đức hoặc Nhật Bản có thể mài sắc từ 15 đến 20 lần trước khi bề rộng bản dao bị mòn đến vạch giới hạn an toàn do nhà sản xuất quy định."},
        {"q": "Nếu cảm biến an toàn quang điện bị lỗi thì máy có tự động ngắt không?", "a": "Theo tiêu chuẩn an toàn châu Âu CE và TCVN, mạch quang điện an toàn của máy xén được thiết kế theo nguyên lý Fail-Safe. Khi có bất kỳ bóng đèn LED nào bị cháy hoặc có vật thể chắn ngang tia hồng ngoại, ly hợp điện từ sẽ ngắt tức thì và khóa cứng lưỡi dao ở điểm chết trên."}
    ],
    "content_html": f"""<div class="space-y-8 text-[#181923]">
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-shield-virus text-base"></i>
      <span>AEO Direct Answer: An Toàn Vận Hành Máy Xén Giấy</span>
    </div>
    <p class="text-gray-800 text-sm sm:text-base leading-relaxed font-medium m-0">
      Máy xén giấy công nghiệp là thiết bị có mức độ rủi ro tai nạn lao động cao nhất trong xưởng in. Quy tắc an toàn số một: Tuyệt đối tuân thủ cơ chế kích hoạt cắt bằng hai nút nhấn đồng thời (Two-hand operation) và lưới cảm biến quang điện bảo vệ. Khi thay dao, bắt buộc sử dụng tay nắm chuyên dụng bắt ốc vào thân dao, không bao giờ dùng tay trần tiếp xúc lưỡi cắt.
    </p>
  </div>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">1. Cấu Tạo & Cơ Chế Hoạt Động Của Dao Xén Công Nghiệp</h2>
    <p class="text-sm sm:text-base leading-relaxed text-gray-700">
      Lưỡi dao xén công nghiệp được chế tạo từ hợp kim thép gió Vonfram (Tungsten Carbide) hoặc thép HSS tôi cứng chịu lực nén cực lớn. Lưỡi dao chuyển động theo cơ cấu chém xiên (Oblique Cut) kết hợp với bàn ép giấy thủy lực tạo ra áp lực cắt phẳng mịn cho cả ram giấy dày tới 800 trang.
    </p>
    <figure class="my-6 not-prose">
      <img src="/assets/images/products/40-may-phoi-trang-dfc-120.png" alt="Máy xén và phối trang hoàn thiện sau in hiện đại" class="w-full h-auto rounded-lg shadow-md border" />
      <figcaption class="text-xs text-gray-500 text-center mt-2 italic">Hệ thống gia công sau in chuyên nghiệp tích hợp cảm biến an toàn và bàn điều khiển điện tử.</figcaption>
    </figure>
  </section>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">2. Checklist An Toàn Khi Bảo Trì & Thay Dao Định Kỳ</h2>
    <ul class="list-disc pl-6 space-y-2 text-sm sm:text-base text-gray-700">
      <li><strong>Ngắt nguồn điện hoàn toàn:</strong> Tắt atomat và treo biển cảnh báo đang bảo dưỡng máy.</li>
      <li><strong>Sử dụng cữ gắn dao chuyên dụng:</strong> Khóa ốc tay nắm an toàn vào thân dao trước khi nới lỏng các bu-lông giữ trên thanh trượt chém.</li>
      <li><strong>Kiểm tra thanh thớt đệm (Cutting Stick):</strong> Lật mặt thớt nhựa mới để điểm tiếp xúc của mép dao không bị lún sâu gây mẻ thép.</li>
      <li><strong>Cân chỉnh áp lực bàn ép:</strong> Điều chỉnh van áp suất thủy lực phù hợp: áp lực nhẹ cho giấy mỏng chống lằn vết, áp lực mạnh cho giấy cứng cán màng chống xô lệch.</li>
    </ul>
  </section>

  {AUTHOR_BOX_HTML}
</div>"""
}

BATCH_6_POSTS = [POST_28, POST_29, POST_30, POST_31, POST_32]
