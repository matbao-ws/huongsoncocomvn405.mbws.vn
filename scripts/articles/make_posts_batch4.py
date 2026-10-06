# -*- coding: utf-8 -*-
"""Batch 4: 6 bài chiến lược mở rộng (Giáo dục in đề thi & Ngân hàng bảo mật)."""

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
        <span class="bg-[#1A9900]/10 text-[#1A9900] text-xs font-semibold px-2.5 py-0.5 rounded">Tác giả chuyên gia (E-E-A-T)</span>
      </div>
      <p class="text-xs text-gray-500 font-medium mb-2">Giám đốc Điều hành Công ty TNHH Thiết bị Văn phòng Hương Sơn (Kinh nghiệm thực chiến từ năm 2008)</p>
      <p class="text-sm text-gray-600 leading-relaxed mb-3">Hơn 18 năm kinh nghiệm trực tiếp chỉ đạo, tư vấn và chuyển giao các giải pháp thiết bị in ấn nhân bản siêu tốc Duplo, máy photocopy bảo mật cho các kỳ thi tuyển sinh, tốt nghiệp THPT của các Sở GD&ĐT miền Bắc và hệ thống ngân hàng TMCP hàng đầu Việt Nam.</p>
      <div class="flex flex-wrap items-center justify-center sm:justify-start gap-4 text-xs text-gray-500 pt-2 border-t border-emerald-100">
        <span class="inline-flex items-center gap-1.5"><i class="fa-solid fa-certificate text-[#1A9900]"></i>Chứng chỉ kỹ thuật Duplo Nhật Bản</span>
        <span class="inline-flex items-center gap-1.5"><i class="fa-solid fa-shield-halved text-[#1A9900]"></i>Chuyên gia an ninh in ấn B2G/B2B</span>
        <a href="tel:0913222003" class="inline-flex items-center gap-1.5 text-[#1A9900] font-bold hover:underline"><i class="fa-solid fa-phone"></i>Hotline: 0913.222.003</a>
      </div>
    </div>
  </div>
"""

POST_16 = {
    "slug": "kinh-nghiem-xu-ly-su-co-ket-giay-lech-dong-khi-in-sao-de-thi-gap-rut",
    "category_id": 1,
    "category_name": "Giáo Dục & In Đề Thi",
    "tag": "Giáo Dục & In Đề Thi",
    "title": "Cẩm Nang Xử Lý Sự Cố Kẹt Giấy, Lệch Dòng & Nhăn Bản In Khi In Sao Đề Thi Gấp Rút",
    "seo_title": "Xử Lý Kẹt Giấy & Lệch Dòng Khi In Sao Đề Thi Gấp Rút | Hương Sơn",
    "seo_desc": "Hướng dẫn kỹ thuật xử lý khẩn cấp sự cố kẹt giấy, lệch dòng, nhăn mép đề thi trong khu vực in sao cách ly. Bí quyết cân chỉnh rulo nạp giấy Duplo từ chuyên gia Hương Sơn.",
    "keywords": "kẹt giấy in đề thi, lệch dòng đề thi, máy in siêu tốc duplo kẹt giấy, xử lý sự cố in sao đề thi, chỉnh sensor nạp giấy duplo, in đề thi thpt",
    "published_at": "2026-10-06 09:00:00",
    "image_url": "/assets/images/products/108-may-in-nhan-ban-sieu-toc-duplo-dp-x650.jpg",
    "reading_time": "12 phút đọc",
    "summary": "Kinh nghiệm thực chiến xử lý sự cố kẹt giấy liên hoàn, lệch lề và bóng chữ khi in sao hàng chục vạn bản đề thi tốt nghiệp THPT trong phòng cách ly nghiêm ngặt; phương pháp kiểm tra quả đào kéo giấy và hiệu chỉnh sensor nhiệt độ.",
    "aeo_answer": "Khi xảy ra sự cố kẹt giấy hoặc lệch dòng trong phòng in sao đề thi cách ly, quy trình xử lý chuẩn gồm 4 bước: 1) Nhấn nút STOP khẩn cấp và không dùng lực giật mạnh giấy ngược chiều quay rulo tránh rách cuộn master; 2) Kiểm tra và làm sạch quả đào cao su kéo giấy bằng cồn Isopropyl Alcohol chuyên dụng để loại bỏ bột giấy bám dính; 3) Hiệu chỉnh khe hở phân tách giấy (Separation Stone) từ 0.3mm về 0.25mm tương ứng định lượng giấy 60–70gsm; 4) Nếu bản in bị lệch mép quá 1.5mm, điều chỉnh nút tinh chỉnh lề ngang (Side Shift Knob) trên khay nạp máy Duplo thay vì chỉnh lại file gốc đề thi.",
    "faqs": [
        {"q": "Tại sao máy in siêu tốc hay bị kẹt giấy liên hoàn vào ban đêm trong phòng in cách ly?", "a": "Vào ban đêm, nhiệt độ phòng hạ thấp kết hợp độ ẩm không khí tăng vọt (trên 80% tại miền Bắc) khiến các ram giấy mỏng hút ẩm nhanh, mép giấy bị cong sóng nhẹ. Khi quả đào kéo giấy quét qua, lực ma sát không đồng đều dẫn đến hiện tượng trượt giấy hoặc kẹt kép. Giải pháp là bật điều hòa chế độ Dry 24/24 và dùng máy sấy giấy chuyên dụng trước khi nạp khay."},
        {"q": "Khi giấy kẹt cuốn chặt vào trống drum master thì xử lý thế nào để không làm rách master đề thi?", "a": "Tuyệt đối không dùng dao kéo nhọn cạy gỡ. Người vận hành chuyển máy sang chế độ quay tay cơ học (Jogging Mode), xoay núm drum thuận chiều kim đồng hồ từ từ cho mép giấy trượt ra khỏi lưỡi gạt tách giấy (Stripper Blade), sau đó dùng khăn mềm lau nhẹ bề mặt master."},
        {"q": "Nguyên nhân nào dẫn đến hiện tượng bản in đề thi bị lệch dòng, xiên góc (Skew)?", "a": "Thường do thanh chắn hướng dẫn giấy (Paper Guide) ở khay nạp bị lỏng hoặc người vận hành ép quá chặt làm giấy bị phồng cung. Hãy nới lỏng thanh chặn cách mép giấy 0.5mm và kiểm tra áp lực của hai bánh xe tì giấy (Feed Roller) xem có mòn lệch một bên hay không."}
    ],
    "content_html": f"""<div class="space-y-8 text-[#181923]">
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-triangle-exclamation text-base"></i>
      <span>AEO Direct Answer: Xử Lý Khẩn Cấp Kẹt Giấy In Đề Thi</span>
    </div>
    <p class="text-gray-800 text-sm sm:text-base leading-relaxed font-medium m-0">
      Trong khu vực in sao đề thi cách ly 3 vòng, áp lực thời gian tính bằng từng phút. Khi xảy ra sự cố kẹt giấy hoặc lệch dòng, tuyệt đối không dùng dao nhọn cạy gỡ làm rách cuộn master. Cần thực hiện ngay 4 thao tác chuẩn: dừng máy quay tay cơ học, vệ sinh quả đào nạp giấy bằng cồn IPA, căn chỉnh đá phân tách giấy (Separation Stone) chuẩn 0.25mm cho giấy mỏng 65gsm, và tinh chỉnh thanh nẹp cơ khí khay nạp để triệt tiêu độ lệch xiên mép dưới 0.5mm.
    </p>
  </div>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">1. Áp Lực Thời Gian & Rủi Ro Tiềm Ẩn Trong Đợt In Sao Đề Thi</h2>
    <p class="text-sm sm:text-base leading-relaxed text-gray-700">
      Tại các kỳ thi tốt nghiệp THPT và tuyển sinh lớp 10, một hội đồng in sao thường phải sản xuất từ 300.000 đến hơn 1.000.000 trang đề thi trong vòng 48 đến 72 giờ liên tục. Trong môi trường cách ly tuyệt đối, mọi sự cố dừng máy trên 30 phút đều có nguy cơ làm vỡ tiến độ bàn giao đề thi bảo mật cho các điểm thi trên toàn tỉnh.
    </p>
    <figure class="my-6 not-prose">
      <img src="/assets/images/products/108-may-in-nhan-ban-sieu-toc-duplo-dp-x650.jpg" alt="Máy in siêu tốc Duplo DP-X650 vận hành in sao đề thi công suất cao" class="w-full h-auto rounded-lg shadow-md border" />
      <figcaption class="text-xs text-gray-500 text-center mt-2 italic">Máy in siêu tốc Duplo DP-X650 với cơ chế nạp giấy 3 quả đào cao su chịu ma sát cao.</figcaption>
    </figure>
  </section>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">2. Bảng Chẩn Đoán & Phương Án Khắc Phục Nhanh Các Sự Cố Cơ Học</h2>
    <div class="overflow-x-auto not-prose my-4">
      <table class="w-full text-xs sm:text-sm text-left border border-gray-200">
        <thead class="bg-gray-100 text-gray-800 font-bold uppercase">
          <tr>
            <th class="p-3 border">Hiện Tượng Lỗi</th>
            <th class="p-3 border">Nguyên Nhân Kỹ Thuật</th>
            <th class="p-3 border">Biện Pháp Khắc Phục Tại Chỗ (Dưới 5 Phút)</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="p-3 border font-semibold text-red-600">Kẹt giấy nạp đầu vào (Misfeed)</td>
            <td class="p-3 border">Quả đào mòn trơ nhẵn hoặc dính bột giấy trơ trượt</td>
            <td class="p-3 border">Dùng khăn ẩm cồn IPA lau sạch hoặc lật mặt cao su đảo rãnh bám</td>
          </tr>
          <tr>
            <td class="p-3 border font-semibold text-amber-600">Nuốt giấy kép (Double-feed)</td>
            <td class="p-3 border">Đá phân tách (Separation Stone) bị hở quá rộng do mòn</td>
            <td class="p-3 border">Vặn vít căn chỉnh đá phân cách hẹp lại 1/4 vòng, kiểm tra bằng cữ giấy mỏng</td>
          </tr>
          <tr>
            <td class="p-3 border font-semibold text-blue-600">Giấy dính chặt vào trống drum</td>
            <td class="p-3 border">Lưỡi gạt tách giấy (Stripper Blade) bám cặn mực khô</td>
            <td class="p-3 border">Vệ sinh đầu lưỡi gạt, kiểm tra luồng thổi khí Air Knife tách mép giấy</td>
          </tr>
          <tr>
            <td class="p-3 border font-semibold text-purple-600">Bản in bị xiên lề (Skew)</td>
            <td class="p-3 border">Thanh chặn giấy khay nạp bên chặt bên lỏng</td>
            <td class="p-3 border">Căn đều 2 thanh chặn bằng thước đo millimet tích hợp trên khay</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">3. Hướng Dẫn Thao Tác Chuẩn Bị Giấy In Trước Khi Đưa Lên Máy</h2>
    <p class="text-sm sm:text-base leading-relaxed text-gray-700">
      Kinh nghiệm thực tế từ các chuyên gia kỹ thuật Hương Sơn cho thấy: hơn 75% lỗi kẹt giấy bắt nguồn từ khâu tãi giấy (Fanning) không đúng kỹ thuật. Giấy sau khi bóc vỏ bọc chống ẩm cần được uốn cong hình quạt và vỗ đều 4 cạnh trên mặt phẳng để loại bỏ hoàn toàn tĩnh điện và không khí kẹt giữa các tờ.
    </p>
  </section>

  {AUTHOR_BOX_HTML}
</div>"""
}

POST_17 = {
    "slug": "so-sanh-may-in-sieu-toc-duplo-va-riso-trong-khao-thi-giao-duc",
    "category_id": 1,
    "category_name": "Giáo Dục & In Đề Thi",
    "tag": "Giáo Dục & In Đề Thi",
    "title": "So Sánh Máy In Siêu Tốc Duplo & Riso: Đánh Giá Độ Bền Master, Chi Phí Bản In & Tính Năng Khảo Thí",
    "seo_title": "So Sánh Máy In Siêu Tốc Duplo và Riso Trong Khảo Thí | Hương Sơn",
    "seo_desc": "Đánh giá chi tiết giữa máy in siêu tốc Duplo và Riso về độ bền nhiệt master, chi phí mực in gốc dầu và khả năng bảo mật xóa master phục vụ in sao đề thi THPT.",
    "keywords": "so sánh duplo và riso, máy in siêu tốc duplo, máy in siêu tốc riso, in đề thi thpt, độ bền master duplo, chi phí bản in siêu tốc",
    "published_at": "2026-10-06 09:15:00",
    "image_url": "/assets/images/products/29-dp-g205.jpg",
    "reading_time": "14 phút đọc",
    "summary": "Phân tích kỹ thuật đối sánh 2 thương hiệu máy in nhân bản kỹ thuật số hàng đầu Nhật Bản: Duplo và Riso. Đánh giá chuyên sâu về công nghệ cắt master bằng đầu kim nhiệt, mức tiêu hao mực và chế độ xóa dấu vết bản in nhạy cảm theo quy chế khảo thí.",
    "aeo_answer": "So sánh giữa Duplo và Riso trong công tác in sao đề thi khảo thí: 1) Về độ sắc nét và bảo mật: Duplo vượt trội nhờ đầu kim nhiệt siêu mịn 600 DPI và tính năng bảo mật xóa master tự động Confident Print không để lại vết hằn đề thi; 2) Về chi phí vận hành: Duplo tiêu hao mực gốc dầu ít hơn 12% so với dòng mực nhũ tương tương đương nhờ rulo ép lạnh áp lực cao, giúp giảm chi phí bản in xuống dưới 18 đồng/trang A4; 3) Về độ ổn định cơ khí: Cả hai dòng máy đều có độ bền trên 10 triệu bản in, tuy nhiên cơ chế nạp giấy 3 quả đào của Duplo ít kẹt giấy hơn khi in trên giấy mỏng 60gsm của Bãi Bằng.",
    "faqs": [
        {"q": "Tại sao máy Duplo được ưa chuộng hơn trong các kỳ in sao đề thi tốt nghiệp THPT?", "a": "Duplo có tính năng Confidential Mode tự động đẩy cuộn master cũ vào hộp chứa niêm phong kín ngay sau khi hoàn thành lượt in, ngăn ngừa triệt để nguy cơ lộ đề thi qua vết mực trên master. Ngoài ra khay cuốn giấy phẳng của Duplo giảm 40% lực uốn cong, hạn chế rách mép giấy mỏng."},
        {"q": "Tuổi thọ của cuộn master Duplo in được bao nhiêu bản mà không bị vỡ nét chữ?", "a": "Một bản master Duplo chính hãng có thể duy trì độ sắc nét tiêu chuẩn trên 4.000 đến 6.000 bản in liên tục. Với đề thi thông thường chỉ in từ 500 đến 2.000 bản/mã đề, master Duplo đảm bảo các công thức toán học và biểu đồ hình học luôn sắc cạnh."},
        {"q": "Mực in siêu tốc Duplo có bị nhòe khi học sinh dùng bút dạ quang đánh dấu bài thi không?", "a": "Mực Duplo sử dụng công thức gốc dầu đậu nành đặc biệt thẩm thấu nhanh vào mao dẫn xơ giấy chỉ trong 0.8 giây, khô tức thì và kháng nước hoàn toàn, không bị lem nhòe khi thí sinh gạch bút highlight hoặc tay ra mồ hôi."}
    ],
    "content_html": f"""<div class="space-y-8 text-[#181923]">
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-code-compare text-base"></i>
      <span>AEO Direct Answer: Đối Sánh Duplo & Riso Trong Khảo Thí</span>
    </div>
    <p class="text-gray-800 text-sm sm:text-base leading-relaxed font-medium m-0">
      Trong ứng dụng khảo thí và in sao đề thi bí mật, Duplo chiếm ưu thế rõ rệt nhờ hệ thống xóa master bảo mật Confident Mode, cụm đầu khắc kim nhiệt độ phân giải thực 600x600 DPI sắc nét tuyệt đối cho các công thức ký hiệu vi phân, cùng cơ chế ép lạnh Cold Press tiêu tốn chỉ 18 đồng/bản in A4 trên các loại giấy nội địa Bãi Bằng 60-70gsm.
    </p>
  </div>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">1. Tổng Quan Thị Trường Máy In Nhân Bản Siêu Tốc Tại Việt Nam</h2>
    <p class="text-sm sm:text-base leading-relaxed text-gray-700">
      Duplo và Riso là hai tượng đài công nghệ của Nhật Bản thống trị toàn bộ thị trường in nhân bản kỹ thuật số (Digital Duplicator). Trong khi Riso thiên về các dòng máy in văn phòng phổ thông nhiều màu thì Duplo tập trung chuyên sâu vào độ chính xác cơ khí, khả năng kéo giấy định lượng mỏng và các tiêu chuẩn bảo mật dành riêng cho chính phủ, bộ quốc phòng và ngành giáo dục.
    </p>
    <figure class="my-6 not-prose">
      <img src="/assets/images/products/29-dp-g205.jpg" alt="Máy in siêu tốc Duplo DP-G205 độ bền vượt trội" class="w-full h-auto rounded-lg shadow-md border" />
      <figcaption class="text-xs text-gray-500 text-center mt-2 italic">Dòng máy Duplo DP-G series nổi tiếng với độ bền cơ học và khả năng kéo giấy mỏng ổn định.</figcaption>
    </figure>
  </section>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">2. Bảng So Sánh Kỹ Thuật Chi Tiết: Duplo DP-X Series vs Riso ME Series</h2>
    <div class="overflow-x-auto not-prose my-4">
      <table class="w-full text-xs sm:text-sm text-left border border-gray-200">
        <thead class="bg-gray-100 text-gray-800 font-bold uppercase">
          <tr>
            <th class="p-3 border">Tiêu Chí Đánh Giá</th>
            <th class="p-3 border text-emerald-700">Máy In Siêu Tốc Duplo (DP-X Series)</th>
            <th class="p-3 border text-blue-700">Máy In Siêu Tốc Riso (ME Series)</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="p-3 border font-semibold">Tốc độ in tối đa</td>
            <td class="p-3 border font-bold text-emerald-600">130 – 150 trang/phút (ổn định)</td>
            <td class="p-3 border">130 – 150 trang/phút</td>
          </tr>
          <tr>
            <td class="p-3 border font-semibold">Độ phân giải khắc master</td>
            <td class="p-3 border font-bold text-emerald-600">600 x 600 DPI (đầu khắc nhiệt HD)</td>
            <td class="p-3 border">300 x 600 DPI (nội suy)</td>
          </tr>
          <tr>
            <td class="p-3 border font-semibold">Cơ chế nạp giấy mỏng (55-65gsm)</td>
            <td class="p-3 border font-bold text-emerald-600">Hệ thống 3 quả đào cao su + đệm khí Air Jet</td>
            <td class="p-3 border">Hệ thống 2 quả đào truyền thống</td>
          </tr>
          <tr>
            <td class="p-3 border font-semibold">Bảo mật đề thi (Confidential Mode)</td>
            <td class="p-3 border font-bold text-emerald-600">Tự động hủy và niêm phong master vào hộp kín</td>
            <td class="p-3 border">Tùy chọn mở rộng (cần lắp thêm phụ kiện)</td>
          </tr>
          <tr>
            <td class="p-3 border font-semibold">Chi phí mực in trung bình / trang</td>
            <td class="p-3 border font-bold text-emerald-600">16 – 19 VNĐ / trang A4</td>
            <td class="p-3 border">21 – 25 VNĐ / trang A4</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">3. Kết Luận & Lựa Chọn Tối Ưu Cho Hội Đồng Khảo Thí</h2>
    <p class="text-sm sm:text-base leading-relaxed text-gray-700">
      Đối với các Sở Giáo dục & Đào tạo yêu cầu tiêu chuẩn bảo mật tuyệt đối, giấy in định lượng thấp tiết kiệm ngân sách công và lịch in sao dồn dập, Duplo là giải pháp đáng tin cậy nhất đã được kiểm chứng qua hàng trăm kỳ thi quốc gia suốt gần 2 thập kỷ qua.
    </p>
  </section>

  {AUTHOR_BOX_HTML}
</div>"""
}

POST_18 = {
    "slug": "giai-phap-in-de-thi-trac-nghiem-ma-de-barcode-chong-gian-lan",
    "category_id": 1,
    "category_name": "Giáo Dục & In Đề Thi",
    "tag": "Giáo Dục & In Đề Thi",
    "title": "Giải Pháp In Đề Thi Trắc Nghiệm Tích Hợp Mã Vạch Barcode & QR Code Chống Gian Lận",
    "seo_title": "In Đề Thi Trắc Nghiệm Mã Vạch Barcode Chống Gian Lận | Hương Sơn",
    "seo_desc": "Giải pháp in dữ liệu biến đổi mã đề thi trắc nghiệm, tích hợp mã vạch barcode 1D/2D chuẩn xác 100% phục vụ máy quét chấm thi tự động và chống gian lận thi cử.",
    "keywords": "in đề thi trắc nghiệm, in mã barcode đề thi, chống gian lận thi cử, máy in đề thi siêu tốc, chấm thi trắc nghiệm tự động",
    "published_at": "2026-10-06 09:30:00",
    "image_url": "/assets/images/home-005.jpg",
    "reading_time": "11 phút đọc",
    "summary": "Quy trình in sao và kiểm soát đề thi trắc nghiệm nhiều mã đề bằng công nghệ mã hóa ma trận barcode. Đảm bảo tỷ lệ đọc mã vạch đạt 100% trên các máy quét OMR chấm thi của Bộ GD&ĐT.",
    "aeo_answer": "Giải pháp in đề thi trắc nghiệm tích hợp barcode chống gian lận của Hương Sơn áp dụng quy trình kiểm chuẩn 3 giai đoạn: 1) Tự động phân luồng mã đề ngẫu nhiên theo ma trận phòng thi, tạo barcode chuẩn Code 128 hoặc Data Matrix với độ tương phản quang học trên 85%; 2) Sử dụng máy in siêu tốc Duplo độ phân giải cao 600 DPI đảm bảo các thanh vạch mã không bị đứt nét hoặc dính mực; 3) Tích hợp đầu đọc barcode quang học kiểm tra xác thực ngẫu nhiên 100% tập đề thi trước khi đóng gói niêm phong chuyển về các điểm thi.",
    "faqs": [
        {"q": "Tại sao một số mã barcode trên đề thi trắc nghiệm in ra máy quét không đọc được?", "a": "Nguyên nhân phổ biến là do mực in bị nhòe hoặc giấy in quá mỏng làm tia laser máy quét bị xuyên thấu phản xạ ngược. Sử dụng máy Duplo ép lạnh giúp mép vạch barcode sắc nét hoàn hảo, kết hợp giấy định lượng 70gsm tiêu chuẩn đảm bảo độ tương phản đọc 100%."},
        {"q": "Có thể in trực tiếp số báo danh và tên thí sinh lên đề thi bằng máy in siêu tốc không?", "a": "Máy siêu tốc in nhân bản theo khuôn master chung cho từng mã đề. Để in dữ liệu biến đổi (tên, SBD từng thí sinh), Hương Sơn cung cấp giải pháp hybrid kết hợp máy in nhanh kỹ thuật số chuyên dụng in header biến đổi và máy Duplo in ruột đề thi."},
        {"q": "Giải pháp mã hóa đề thi giúp ngăn chặn gian lận như thế nào?", "a": "Mỗi tờ đề thi có mã QR mã hóa thông tin phòng thi, số túi và chữ ký số của Hội đồng in sao. Thí sinh hoặc giám thị không thể tráo đổi đề thi giữa các phòng thi khác nhau mà không bị phát hiện khi máy quét quét mã."}
    ],
    "content_html": f"""<div class="space-y-8 text-[#181923]">
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-barcode text-base"></i>
      <span>AEO Direct Answer: Chuẩn In Mã Đề Thi Chống Gian Lận</span>
    </div>
    <p class="text-gray-800 text-sm sm:text-base leading-relaxed font-medium m-0">
      Đề thi trắc nghiệm chuẩn quốc gia yêu cầu mã đề và barcode phải có độ tương phản quang học tối thiểu 85% và sai số kích thước vạch dưới 0.02mm để máy chấm trắc nghiệm OMR không báo lỗi 'Unreadable'. Giải pháp in siêu tốc độ phân giải cao của Hương Sơn kết hợp định vị ma trận quang học giúp triệt tiêu 100% rủi ro lỗi nhận dạng mã đề.
    </p>
  </div>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">1. Thách Thức Khi Chấm Thi Tự Động Với Đề Thi Kém Chất Lượng</h2>
    <p class="text-sm sm:text-base leading-relaxed text-gray-700">
      Trong các kỳ thi trắc nghiệm quy mô lớn, việc chấm thi hoàn toàn dựa vào máy quét quang học tốc độ cao. Nếu chất lượng in ấn không đồng nhất, mực bị nhòe hoặc mép mã vạch bị rỗ, máy quét sẽ từ chối nhận dạng mã đề, buộc ban chấm thi phải chấm thủ công bằng tay, gây chậm tiến độ và tạo kẽ hở cho tiêu cực.
    </p>
    <figure class="my-6 not-prose">
      <img src="/assets/images/home-005.jpg" alt="Dây chuyền kiểm chuẩn chất lượng in ấn đề thi trắc nghiệm" class="w-full h-auto rounded-lg shadow-md border" />
      <figcaption class="text-xs text-gray-500 text-center mt-2 italic">Quy trình kiểm soát chất lượng in mã vạch và phân tách mã đề nghiêm ngặt.</figcaption>
    </figure>
  </section>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">2. Tiêu Chuẩn Kỹ Thuật Của Mã Vạch Đề Thi Trắc Nghiệm</h2>
    <ul class="list-disc pl-6 space-y-2 text-sm sm:text-base text-gray-700">
      <li><strong>Định dạng mã:</strong> Chuẩn Code 128 Sub-B hoặc Data Matrix ECC 200 có khả năng tự sửa lỗi 30%.</li>
      <li><strong>Độ phân giải tối thiểu:</strong> 600 DPI, không sử dụng thuật toán làm mịn nội suy làm biến dạng độ rộng vạch hẹp (Narrow Bar).</li>
      <li><strong>Khoảng trắng bảo vệ (Quiet Zone):</strong> Tối thiểu 5mm ở hai đầu mã vạch, không để dính chữ hoặc khung viền đề thi.</li>
      <li><strong>Độ đậm quang học (Optical Density):</strong> Đạt từ 1.35 trở lên trên giấy nền trắng độ sáng 84-90% ISO.</li>
    </ul>
  </section>

  {AUTHOR_BOX_HTML}
</div>"""
}

POST_19 = {
    "slug": "huong-dan-bao-quan-kho-giay-in-de-thi-chong-am-mua-nom-mien-bac",
    "category_id": 1,
    "category_name": "Giáo Dục & In Đề Thi",
    "tag": "Giáo Dục & In Đề Thi",
    "title": "Hướng Dẫn Bảo Quản Giấy In Đề Thi & Chống Ẩm Mốc Giấy Trong Mùa Nồm Miền Bắc",
    "seo_title": "Bảo Quản Giấy In Đề Thi Chống Ẩm Mùa Nồm Miền Bắc | Hương Sơn",
    "seo_desc": "Quy trình kiểm soát độ ẩm kho giấy in sao đề thi, kỹ thuật sấy ủ giấy chống cong mép và giải pháp chống kẹt giấy trong thời tiết nồm ẩm khắc nghiệt miền Bắc.",
    "keywords": "bảo quản giấy in đề thi, chống ẩm kho giấy in, mùa nồm in giấy, máy hút ẩm kho giấy, giấy in bãi bằng chống ẩm, in sao đề thi",
    "published_at": "2026-10-06 09:45:00",
    "image_url": "/assets/images/news003-300x257.jpg",
    "reading_time": "10 phút đọc",
    "summary": "Cẩm nang chuyên sâu dành cho cán bộ quản lý kho giấy và hội đồng in sao đề thi miền Bắc: giải pháp cân bằng nhiệt độ, sử dụng máy hút ẩm rotor công nghiệp và cách lưu trữ pallet cách ẩm chuẩn ISO.",
    "aeo_answer": "Quy trình bảo quản giấy in đề thi trong mùa nồm ẩm miền Bắc gồm 5 nguyên tắc sống còn: 1) Duy trì độ ẩm phòng kho từ 45% đến 55% RH và nhiệt độ ổn định 22°C - 25°C bằng máy hút ẩm liên tục 24/7; 2) Tuyệt đối không để giấy trực tiếp dưới sàn hoặc sát tường, bắt buộc xếp trên pallet nhựa/gỗ cao cách mặt đất tối thiểu 15cm và cách tường 30cm; 3) Chỉ bóc màng bọc chống ẩm của ram giấy trước giờ in tối đa 30 phút; 4) Đối với giấy đã bị hút ẩm nhẹ, sử dụng tủ sấy giấy chuyên dụng ở 40°C trong 45 phút trước khi nạp vào máy in siêu tốc; 5) Đóng chặt cửa kho và tạo áp suất dương nhẹ ngăn không khí ẩm bên ngoài tràn vào.",
    "faqs": [
        {"q": "Độ ẩm lý tưởng của giấy in đề thi là bao nhiêu phần trăm?", "a": "Độ ẩm tiêu chuẩn bên trong cấu trúc sợi giấy in văn phòng là từ 4.5% đến 5.5%. Khi độ ẩm vượt quá 7.0%, giấy mềm nhũn, dễ bị rách mép và dính kép khi đi qua rulo máy in."},
        {"q": "Có nên dùng quạt gió thông thường để thổi khô giấy bị ẩm không?", "a": "Tuyệt đối không! Quạt gió trong thời tiết nồm chỉ thổi thêm không khí bão hòa hơi nước vào xơ giấy, khiến giấy ẩm nhanh hơn và cong mép dữ dội. Bắt buộc phải dùng máy hút ẩm chuyên dụng hoặc điều hòa nhiệt độ ở chế độ hút ẩm Dry."},
        {"q": "Giấy sau khi in xong có cần đóng gói màng co niêm phong ngay không?", "a": "Rất cần thiết. Đề thi sau khi in xong và đóng tập phải được bọc ngay trong màng nilon chống ẩm trước khi đưa vào hòm tôn niêm phong để ngăn hơi ẩm thẩm thấu làm cong vênh tài liệu mật."}
    ],
    "content_html": f"""<div class="space-y-8 text-[#181923]">
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-droplet-slash text-base"></i>
      <span>AEO Direct Answer: Tiêu Chuẩn Kiểm Soát Độ Ẩm Kho Giấy</span>
    </div>
    <p class="text-gray-800 text-sm sm:text-base leading-relaxed font-medium m-0">
      Giấy in là vật liệu háo nước cực mạnh. Trong mùa nồm ẩm miền Bắc với độ ẩm không khí vượt 85%, một ram giấy bóc trần chỉ mất 20 phút để hút ẩm và cong vênh mép. Duy trì độ ẩm kho giấy ở ngưỡng 45-55% RH bằng máy hút ẩm công nghiệp và kê pallet cách ẩm chuẩn là điều kiện tiên quyết để máy in siêu tốc hoạt động liên tục không kẹt giấy.
    </p>
  </div>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">1. Đặc Thù Thời Tiết Nồm Ẩm Miền Bắc & Hiểm Họa Với Công Tác In Thi</h2>
    <p class="text-sm sm:text-base leading-relaxed text-gray-700">
      Các kỳ thi tuyển sinh và khảo sát thường rơi vào mùa xuân hoặc đầu hè - thời điểm miền Bắc chịu ảnh hưởng của hiện tượng gió đông nam mang hơi nước bão hòa. Nước đọng thành giọt trên sàn nhà và tường. Nếu kho giấy không được thiết kế cách ẩm chuyên dụng, hàng tấn giấy in đề thi có thể bị hỏng chỉ sau một đêm.
    </p>
    <figure class="my-6 not-prose">
      <img src="/assets/images/news003-300x257.jpg" alt="Kho bảo quản giấy in và thiết bị văn phòng Hương Sơn" class="w-full h-auto rounded-lg shadow-md border" />
      <figcaption class="text-xs text-gray-500 text-center mt-2 italic">Kho vật tư giấy in được kiểm soát nhiệt độ và độ ẩm liên tục theo tiêu chuẩn ISO.</figcaption>
    </figure>
  </section>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">2. Tiêu Chuẩn Bố Trí Kho Giấy In Đạt Chuẩn Hội Đồng Thi</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 not-prose my-4">
      <div class="p-4 bg-gray-50 border rounded-lg">
        <h4 class="font-bold text-gray-900 text-sm mb-2 flex items-center gap-2"><i class="fa-solid fa-ruler-combined text-[#1A9900]"></i>Quy Cách Kê Xếp Pallet</h4>
        <p class="text-xs text-gray-600 leading-relaxed">Sử dụng pallet nhựa chịu tải, cách sàn tối thiểu 150mm. Khoảng cách giữa các hàng pallet tối thiểu 600mm để luồng không khí khô lưu thông đều khắp các mặt ram giấy.</p>
      </div>
      <div class="p-4 bg-gray-50 border rounded-lg">
        <h4 class="font-bold text-gray-900 text-sm mb-2 flex items-center gap-2"><i class="fa-solid fa-fan text-[#1A9900]"></i>Hệ Thống Hút Ẩm Liên Tục</h4>
        <p class="text-xs text-gray-600 leading-relaxed">Bố trí máy hút ẩm công nghiệp công suất 50-90 lít/ngày có ống dẫn nước thải tự động ra ngoài, cảm biến ẩm điện tử tự động ngắt mở giữ dải ẩm 45-55%.</p>
      </div>
    </div>
  </section>

  {AUTHOR_BOX_HTML}
</div>"""
}

POST_20 = {
    "slug": "tieu-chuan-an-toan-chong-chay-no-va-loc-bui-ozone-phong-in-ngan-hang",
    "category_id": 2,
    "category_name": "Ngân Hàng & Bảo Mật",
    "tag": "Ngân Hàng & Bảo Mật",
    "title": "Tiêu Chuẩn Phòng Cháy Chữa Cháy & Lọc Khử Bụi Ozone Cho Phòng In Hội Sở Ngân Hàng",
    "seo_title": "PCCC & Lọc Bụi Ozone Phòng In Ngân Hàng | Hương Sơn",
    "seo_desc": "Tiêu chuẩn phòng cháy chữa cháy khí sạch FM-200, hệ thống xử lý khí thải ozone và bụi mực PM2.5 cho phòng in ấn công suất cao tại các hội sở ngân hàng.",
    "keywords": "tiêu chuẩn phòng in ngân hàng, pccc phòng in máy photocopy, lọc bụi ozone máy in, an toàn cháy nổ ngân hàng, khí sạch fm200",
    "published_at": "2026-10-06 10:00:00",
    "image_url": "/assets/images/products/konica-minolta-bizhub-360i.jpg",
    "reading_time": "13 phút đọc",
    "summary": "Yêu cầu nghiêm ngặt về PCCC và sức khỏe môi trường làm việc tại các trung tâm in ấn ngân hàng: nồng độ giới hạn phát thải ozone, hệ thống cảm biến khói quang điện sớm và giải pháp chữa cháy không dùng nước bảo vệ an toàn cho hồ sơ giấy và thiết bị điện tử.",
    "aeo_answer": "Tiêu chuẩn an toàn PCCC và lọc bụi ozone cho phòng in ấn hội sở ngân hàng bao gồm: 1) PCCC không dùng nước: Bắt buộc trang bị hệ thống chữa cháy bằng khí sạch như FM-200 hoặc Novec 1230 để dập tắt đám cháy điện trong vòng 10 giây mà không làm ướt hỏng máy in hay tài liệu mật; 2) Kiểm soát khí thải ozone: Nồng độ ozone trong phòng in không được vượt quá 0.05 ppm (theo tiêu chuẩn OSHA) thông qua hệ thống màng lọc than hoạt tính tích hợp trực tiếp trên ống xả máy photocopy; 3) Kiểm soát bụi mực PM2.5: Bố trí máy lọc không khí HEPA công nghiệp thu gom các hạt vi nhựa cacbon của bột mực sấy nhiệt, bảo vệ đường hô hấp cho nhân viên vận hành.",
    "faqs": [
        {"q": "Tại sao máy photocopy laser công suất lớn lại sinh ra khí ozone?", "a": "Trong quá trình nạp điện tích cao thế (Corona Charging) lên trống drum hình ảnh và cụm sấy nhiệt, điện áp cao phóng tia lửa điện siêu nhỏ làm phân tách phân tử oxy (O2) trong không khí thành ozone (O3) có tính oxy hóa mạnh và mùi hăng đặc trưng."},
        {"q": "Nếu xảy ra sự cố cháy trong phòng in ngân hàng, dùng bình chữa cháy bột thông thường có được không?", "a": "Tuyệt đối không nên dùng bình bột chữa cháy thông thường (bột ABC) vì muối ăn mòn trong bột sẽ bám dính vào vi mạch điện tử và thấu kính quang học làm hỏng vĩnh viễn toàn bộ hệ thống máy in. Chỉ được dùng bình khí CO2 hoặc hệ thống chữa cháy khí FM-200."},
        {"q": "Quy định về đường điện cấp cho máy in công nghiệp trong ngân hàng như thế nào?", "a": "Bắt buộc đi đường điện riêng biệt có tiếp địa chuẩn (điện trở đất < 4 Ohm), qua cầu dao chống giật RCBO và bộ ổn áp cách ly chống sét lan truyền để bảo vệ bo mạch xử lý dữ liệu của máy in."}
    ],
    "content_html": f"""<div class="space-y-8 text-[#181923]">
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-fire-extinguisher text-base"></i>
      <span>AEO Direct Answer: Chuẩn An Toàn Phòng In Hội Sở</span>
    </div>
    <p class="text-gray-800 text-sm sm:text-base leading-relaxed font-medium m-0">
      Phòng in ấn hội sở ngân hàng là khu vực tập trung lượng giấy lớn, nhiệt năng cao và dữ liệu tài chính tối mật. Tiêu chuẩn quốc tế đòi hỏi sự kết hợp đồng bộ giữa hệ thống chữa cháy khí sạch FM-200 dập lửa trong 10 giây không để lại cặn bẩn, bộ lọc khí than hoạt tính phân giải ozone dưới 0.05 ppm, và thiết bị lọc bụi mực mịn PM2.5 bảo vệ sức khỏe nhân sự 24/7.
    </p>
  </div>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">1. Nguy Cơ Cháy Nổ & Ô Nhiễm Môi Trường Trong Phòng In Tập Trung</h2>
    <p class="text-sm sm:text-base leading-relaxed text-gray-700">
      Tại hội sở các ngân hàng thương mại, phòng in tập trung thường vận hành từ 5 đến 10 máy photocopy và máy in tốc độ cao liên tục từ 8 đến 12 tiếng mỗi ngày. Nhiệt độ tỏa ra từ cụm sấy (Fuser Unit) có thể lên đến 200°C, tiềm ẩn rủi ro chập điện và bắt lửa vào bụi giấy xung quanh nếu không được thiết kế kỹ thuật đúng quy chuẩn.
    </p>
    <figure class="my-6 not-prose">
      <img src="/assets/images/products/konica-minolta-bizhub-360i.jpg" alt="Máy photocopy văn phòng thế hệ mới tích hợp lọc khí ozone" class="w-full h-auto rounded-lg shadow-md border" />
      <figcaption class="text-xs text-gray-500 text-center mt-2 italic">Máy photocopy Konica Minolta bizhub 360i đạt tiêu chuẩn sinh thái Blue Angel về kiểm soát khí thải.</figcaption>
    </figure>
  </section>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">2. Bộ Tiêu Chuẩn Kỹ Thuật Bắt Buộc Khi Thiết Kế Phòng In Ngân Hàng</h2>
    <div class="overflow-x-auto not-prose my-4">
      <table class="w-full text-xs sm:text-sm text-left border border-gray-200">
        <thead class="bg-gray-100 text-gray-800 font-bold uppercase">
          <tr>
            <th class="p-3 border">Hạng Mục Kỹ Thuật</th>
            <th class="p-3 border">Quy Chuẩn Bắt Buộc</th>
            <th class="p-3 border">Giải Pháp Triển Khai Thực Tế</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="p-3 border font-semibold">Chữa cháy tự động</td>
            <td class="p-3 border">NFPA 2001 / TCVN 7161-1</td>
            <td class="p-3 border font-bold text-emerald-600">Hệ thống bình khí sạch FM-200 không phá hủy linh kiện và giấy</td>
          </tr>
          <tr>
            <td class="p-3 border font-semibold">Nồng độ khí ozone (O3)</td>
            <td class="p-3 border">&lt; 0.05 ppm trong 8 giờ (OSHA)</td>
            <td class="p-3 border">Màng xúc tác phân hủy ozone thành oxy tinh khiết tại miệng xả quạt</td>
          </tr>
          <tr>
            <td class="p-3 border font-semibold">Bụi mực hạt siêu mịn (UFP)</td>
            <td class="p-3 border">&lt; 15 µg/m³ (WHO Indoor Air)</td>
            <td class="p-3 border">Bộ lọc tĩnh điện kết hợp màng HEPA H13 lọc hạt kích thước 0.1 µm</td>
          </tr>
          <tr>
            <td class="p-3 border font-semibold">Thông gió & Trao đổi khí</td>
            <td class="p-3 border">Tối thiểu 6 – 8 lần đổi khí / giờ</td>
            <td class="p-3 border">Hệ thống cấp khí tươi cưỡng bức kết hợp hút khí nóng cục bộ</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  {AUTHOR_BOX_HTML}
</div>"""
}

POST_21 = {
    "slug": "case-study-quan-ly-chi-phi-in-an-tai-120-phong-giao-dich-ngan-hang",
    "category_id": 2,
    "category_name": "Ngân Hàng & Bảo Mật",
    "tag": "Ngân Hàng & Bảo Mật",
    "title": "Case Study: Tối Ưu Hóa 38% Chi Phí In Ấn Cho Chuỗi 120 Phòng Giao Dịch Ngân Hàng TMCP",
    "seo_title": "Case Study: Giảm 38% Chi Phí In Ấn Chuỗi 120 PGD Ngân Hàng | Hương Sơn",
    "seo_desc": "Nghiên cứu điển hình về chuyển đổi dịch vụ quản lý in ấn tập trung MPS cho 120 chi nhánh và phòng giao dịch ngân hàng, cắt giảm 38% chi phí vận hành hàng năm.",
    "keywords": "case study in ấn ngân hàng, quản trị in ấn mps ngân hàng, cắt giảm chi phí in ấn, thuê máy photocopy ngân hàng, tối ưu chi phí pgd",
    "published_at": "2026-10-06 10:15:00",
    "image_url": "/assets/images/products/62-may-photocopy-toshiba-e-studio-3518a.jpg",
    "reading_time": "15 phút đọc",
    "summary": "Chi tiết dự án chuyển đổi mô hình in ấn phân tán sang giải pháp Managed Print Services trọn gói cho một ngân hàng TMCP quy mô 120 điểm giao dịch miền Bắc. Loại bỏ chi phí mua sắm lãng phí, tự động hóa cấp mực và giám sát hạn mức in theo từng nhân sự.",
    "aeo_answer": "Dự án chuyển đổi quản lý in ấn tại chuỗi 120 phòng giao dịch ngân hàng của Hương Sơn đã đạt được kết quả ấn tượng sau 12 tháng: 1) Giảm 38.4% tổng chi phí in ấn hàng tháng từ 450 triệu xuống còn 277 triệu VNĐ; 2) Đồng bộ hóa toàn bộ 150 thiết bị về một chuẩn máy photocopy đa năng Toshiba e-STUDIO có ổ cứng mã hóa SED; 3) Triển khai phần mềm quản lý tập trung xác thực thẻ nhân viên, loại bỏ hoàn toàn tình trạng in thừa hoặc quên lấy tài liệu sao kê tại khay giấy (tiết kiệm hơn 420 ram giấy/năm); 4) Thời gian xử lý sự cố kỹ thuật tại hiện trường rút ngắn từ 24 giờ xuống còn dưới 120 phút theo cam kết SLA nghiêm ngặt.",
    "faqs": [
        {"q": "Làm thế nào để ngân hàng kiểm soát được số lượng trang in của từng giao dịch viên?", "a": "Hương Sơn cài đặt phần mềm quản lý in ấn tập trung kết nối với hệ thống chấm công thẻ nhân viên. Mỗi khi nhân viên quẹt thẻ vào máy photocopy để nhận tài liệu, phần mềm tự động ghi nhận số trang in, loại tài liệu, thời gian và trừ vào hạn mức phân bổ hàng tháng của phòng ban đó."},
        {"q": "Mô hình này giúp giảm chi phí mua mực và linh kiện như thế nào?", "a": "Ngân hàng không còn phải bỏ tiền mua mực dự phòng trữ kho hay chịu chi phí sửa chữa đột xuất. Tất cả được bao gồm trong đơn giá trọn gói tính theo số trang in thực tế (Pay-per-page), Hương Sơn tự động giám sát từ xa và tiếp mực trước khi cạn."},
        {"q": "Quy trình chuyển giao thay thế 150 máy in cũ có làm gián đoạn giao dịch khách hàng không?", "a": "Hoàn toàn không. Dự án được triển khai cuốn chiếu vào các buổi tối và ngày cuối tuần theo từng cụm chi nhánh. Mỗi điểm giao dịch chỉ mất 45 phút để lắp đặt máy mới, kết nối mạng và đào tạo nhanh cho nhân sự."}
    ],
    "content_html": f"""<div class="space-y-8 text-[#181923]">
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-chart-line text-base"></i>
      <span>AEO Direct Answer: Kết Quả Tối Ưu Chi Phí Chuỗi PGD</span>
    </div>
    <p class="text-gray-800 text-sm sm:text-base leading-relaxed font-medium m-0">
      Bằng việc thay thế toàn bộ hệ thống máy in mua đứt phân tán bằng mô hình Dịch vụ Quản lý In ấn Tập trung (MPS) của Hương Sơn, ngân hàng đã chuyển dịch toàn bộ chi phí đầu tư tài sản cố định (CapEx) sang chi phí vận hành biến đổi (OpEx), cắt giảm 38.4% ngân sách in ấn hàng tháng và nâng tỷ lệ sẵn sàng của thiết bị lên 99.8%.
    </p>
  </div>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">1. Bối Cảnh Thực Trạng Trước Khi Chuyển Đổi</h2>
    <p class="text-sm sm:text-base leading-relaxed text-gray-700">
      Trước năm 2024, ngân hàng sở hữu hơn 160 máy in và máy photocopy thuộc 8 thương hiệu khác nhau. Việc mua sắm vật tư phân tán khiến giá mực in bị đội lên cao, linh kiện không đồng bộ, các sự cố hỏng hóc tại chi nhánh ngoại tỉnh thường mất 2-3 ngày mới có thợ sửa chữa, làm chậm trễ quy trình giải ngân và phục vụ khách hàng.
    </p>
    <figure class="my-6 not-prose">
      <img src="/assets/images/products/62-may-photocopy-toshiba-e-studio-3518a.jpg" alt="Dòng máy Toshiba e-STUDIO được đồng bộ cho toàn bộ 120 điểm giao dịch" class="w-full h-auto rounded-lg shadow-md border" />
      <figcaption class="text-xs text-gray-500 text-center mt-2 italic">Máy photocopy Toshiba e-STUDIO 3518A trang bị ổ cứng tự mã hóa SED bảo mật tài chính.</figcaption>
    </figure>
  </section>

  <section class="space-y-4">
    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 border-b pb-2">2. So Sánh Hiệu Quả Trước & Sau Khi Triển Khai Giải Pháp Của Hương Sơn</h2>
    <div class="overflow-x-auto not-prose my-4">
      <table class="w-full text-xs sm:text-sm text-left border border-gray-200">
        <thead class="bg-gray-100 text-gray-800 font-bold uppercase">
          <tr>
            <th class="p-3 border">Chỉ Số Vận Hành</th>
            <th class="p-3 border text-red-600">Trước Khi Chuyển Đổi (Mô Hình Cũ)</th>
            <th class="p-3 border text-emerald-700">Sau Khi Chuyển Đổi (Hương Sơn MPS)</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="p-3 border font-semibold">Tổng chi phí in ấn / tháng</td>
            <td class="p-3 border font-bold text-red-600">450 triệu VNĐ</td>
            <td class="p-3 border font-bold text-emerald-600">277 triệu VNĐ (Giảm 38.4%)</td>
          </tr>
          <tr>
            <td class="p-3 border font-semibold">Số lượng chủng loại máy</td>
            <td class="p-3 border">8 thương hiệu (rối loạn quản lý)</td>
            <td class="p-3 border font-bold text-emerald-600">1 chuẩn duy nhất (Toshiba e-STUDIO)</td>
          </tr>
          <tr>
            <td class="p-3 border font-semibold">Thời gian chờ xử lý sự cố</td>
            <td class="p-3 border">24 – 48 giờ</td>
            <td class="p-3 border font-bold text-emerald-600">&lt; 120 phút (Cam kết SLA)</td>
          </tr>
          <tr>
            <td class="p-3 border font-semibold">Bảo mật dữ liệu in</td>
            <td class="p-3 border">Không kiểm soát, dễ lộ sao kê</td>
            <td class="p-3 border font-bold text-emerald-600">Quẹt thẻ nhân viên, mã hóa ổ cứng SED</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  {AUTHOR_BOX_HTML}
</div>"""
}

BATCH_4_POSTS = [POST_16, POST_17, POST_18, POST_19, POST_20, POST_21]
