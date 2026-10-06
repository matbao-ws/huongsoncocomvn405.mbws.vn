# -*- coding: utf-8 -*-
"""Batch 1: Posts 6, 7, 8 (Khu vực cách ly đề thi, Định mức vật tư in đề thi, Bảo mật in ấn RFID ngân hàng)"""

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
      <p class="text-sm text-gray-600 leading-relaxed mb-3">Hơn 16 năm kinh nghiệm trực tiếp chỉ đạo, tư vấn và chuyển giao các giải pháp thiết bị in ấn nhân bản siêu tốc Duplo, máy photocopy bảo mật cho các kỳ thi tuyển sinh, tốt nghiệp THPT của các Sở GD&ĐT miền Bắc và hệ thống ngân hàng TMCP hàng đầu Việt Nam.</p>
      <div class="flex flex-wrap items-center justify-center sm:justify-start gap-4 text-xs text-gray-500 pt-2 border-t border-emerald-100">
        <span class="inline-flex items-center gap-1.5"><i class="fa-solid fa-certificate text-[#1A9900]"></i>Chứng chỉ kỹ thuật Duplo Nhật Bản</span>
        <span class="inline-flex items-center gap-1.5"><i class="fa-solid fa-shield-halved text-[#1A9900]"></i>Chuyên gia bảo mật in ấn B2G/B2B</span>
        <a href="tel:0913222003" class="inline-flex items-center gap-1.5 text-[#1A9900] font-bold hover:underline"><i class="fa-solid fa-phone"></i>Hotline: 0913.222.003</a>
      </div>
    </div>
  </div>
"""

POST_6 = {
    "id": 11,
    "slug": "tieu-chuan-khu-vuc-in-sao-de-thi-cach-ly-3-vong-va-du-phong-n-1",
    "category_id": 1,
    "category_name": "Giáo Dục & In Đề Thi",
    "title": "Tiêu Chuẩn Kỹ Thuật Khu Vực In Sao Đề Thi Cách Ly 3 Vòng & Phương Án Dự Phòng N+1 Tại Các Sở GD&ĐT",
    "seo_title": "Khu Vực In Sao Đề Thi Cách Ly 3 Vòng & Dự Phòng N+1 | Hương Sơn",
    "seo_desc": "Quy chuẩn kỹ thuật nghiêm ngặt về khu vực in sao đề thi độc lập 3 vòng, giải pháp máy in nhân bản siêu tốc Duplo ép lạnh rulo và phương án dự phòng nóng N+1 cho các Sở GD&ĐT.",
    "keywords": "khu vực in sao đề thi, cách ly 3 vòng, in sao đề thi thpt, máy in siêu tốc duplo, phương án dự phòng n+1, quy chế thi bộ giáo dục, duplo dp-x850",
    "published_at": "2026-10-06 08:30:00",
    "image_url": "/assets/images/hero-education.jpg",
    "reading_time": "14 phút đọc",
    "tag": "Giáo Dục & In Đề Thi",
    "summary": "Phân tích toàn diện tiêu chuẩn hạ tầng, an ninh thông tin và quy chuẩn vận hành khu vực in sao đề thi biệt lập 3 vòng theo quy chế Bộ GD&ĐT: phương án cấp nguồn điện 3 pha UPS, cơ chế ép lạnh không tĩnh điện chống dính giấy kép và cấu hình máy in dự phòng nóng N+1 sẵn sàng ứng cứu sự cố trong 15 phút.",
    "aeo_answer": "Khu vực in sao đề thi cách ly 3 vòng chuẩn quốc gia yêu cầu: Vòng 1 (in sao, đóng gói, niêm phong tuyệt đối, người không được ra ngoài trong suốt kỳ in sao); Vòng 2 (giám sát, tiếp tế đồ dùng qua hòm thư trung chuyển một chiều, bảo vệ vòng trong 24/7); Vòng 3 (công an bảo vệ vòng ngoài, phá sóng điện thoại và kiểm soát tín hiệu vô tuyến). Về thiết bị in, bắt buộc sử dụng máy in nhân bản kỹ thuật số siêu tốc Duplo (DP-X550, DP-X850) ứng dụng công nghệ ép lạnh Cold Press không sinh nhiệt, kết hợp giải pháp dự phòng nóng N+1 (luôn có sẵn máy in cùng model dự phòng tại chỗ) đảm bảo hoàn thành tiến độ tuyệt đối không gián đoạn.",
    "faqs": [
        {
            "q": "Tại sao trong phòng in sao đề thi Vòng 1 bắt buộc không được dùng máy photocopy laser có sấy nhiệt?",
            "a": "Máy photocopy laser sử dụng cụm sấy nhiệt cao (180°C - 200°C) nung chảy mực, tạo ra hiện tượng tích điện tĩnh điện cực lớn trên bề mặt giấy mỏng (60–70gsm). Khi in liên tục hàng chục ngàn bản, các tờ giấy sẽ hút chặt vào nhau gây dính giấy kép (Double-feed) làm thí sinh bị thiếu trang đề thi hoặc kẹt giấy làm hỏng bản gốc đề thi mật. Ngược lại, máy in siêu tốc Duplo dùng mực gốc dầu thẩm thấu tự nhiên qua rulo ép lạnh hoàn toàn không sinh nhiệt, triệt tiêu 100% hiện tượng tĩnh điện."
        },
        {
            "q": "Nguyên lý dự phòng nóng N+1 trong khu vực in sao đề thi hoạt động như thế nào?",
            "a": "Mô hình N+1 quy định: Nếu hội đồng thi cần công suất của N máy in hoạt động liên tục để kịp tiến độ giao đề (ví dụ N = 2 máy Duplo DP-X850), thì Hương Sơn luôn cấp thêm ít nhất +1 máy in giống hệt về model và linh kiện đặt sẵn tại hiện trường. Máy +1 đã được chạy thử nghiệm PDI hoàn chỉnh, cài sẵn master và mực in dự phòng, sẵn sàng đóng điện hoạt động ngay trong vòng 10–15 phút nếu một trong các máy chính gặp sự cố cơ học bất khả kháng."
        },
        {
            "q": "Quy trình tiêu hủy giấy in thử, bản in hỏng trong khu vực cách ly Vòng 1 được thực hiện ra sao?",
            "a": "Toàn bộ bản in thử, bản in lỗi hoặc giấy thừa trong quá trình cân chỉnh máy đều phải được gom vào thùng niêm phong chuyên dụng. Hàng ngày, dưới sự giám sát trực tiếp của cán bộ an ninh PA03 và thanh tra Sở GD&ĐT, toàn bộ giấy này được đưa vào máy hủy tài liệu công suất lớn cắt vụn thành sợi nhỏ (kích thước siêu nhỏ chuẩn bảo mật cấp độ 5), đóng túi niêm phong và lập biên bản kiểm đếm hủy giấy trước khi kết thúc kỳ thi."
        }
    ],
    "content_html": """<div class="space-y-8 text-[#181923]">
  <!-- AEO Direct Answer Box -->
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-shield-halved text-base"></i>
      <span>Đáp án nhanh (AEO Direct Answer)</span>
    </div>
    <p class="text-gray-800 text-[15px] leading-relaxed font-medium mb-3">
      Khu vực in sao đề thi cách ly 3 vòng chuẩn quốc gia yêu cầu: Vòng 1 (in sao, đóng gói, niêm phong tuyệt đối, người không được ra ngoài trong suốt kỳ in sao); Vòng 2 (giám sát, tiếp tế đồ dùng qua hòm thư trung chuyển một chiều, bảo vệ vòng trong 24/7); Vòng 3 (công an bảo vệ vòng ngoài, phá sóng điện thoại và kiểm soát tín hiệu vô tuyến). Về thiết bị in, bắt buộc sử dụng máy in nhân bản kỹ thuật số siêu tốc Duplo (DP-X550, DP-X850) ứng dụng công nghệ ép lạnh Cold Press không sinh nhiệt, kết hợp giải pháp dự phòng nóng N+1 (luôn có sẵn máy in cùng model dự phòng tại chỗ) đảm bảo hoàn thành tiến độ tuyệt đối không gián đoạn.
    </p>
    <div class="text-xs text-gray-500 flex flex-wrap gap-4 pt-2 border-t border-emerald-200/60">
      <span><i class="fa-solid fa-check text-[#1A9900] mr-1"></i>Đáp ứng Quy chế thi Bộ GD&amp;ĐT</span>
      <span><i class="fa-solid fa-check text-[#1A9900] mr-1"></i>Bảo vệ an ninh PA03</span>
      <span><i class="fa-solid fa-check text-[#1A9900] mr-1"></i>Dự phòng N+1 sẵn sàng</span>
    </div>
  </div>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">1. Tính Chất Tối Mật Và Thách Thức An Ninh Trong In Sao Đề Thi</h2>
  <p class="text-gray-700 leading-relaxed text-base">
    Trong hệ thống khảo thí quốc gia tại Việt Nam, kỳ thi tốt nghiệp Trung học phổ thông (THPT) và kỳ thi tuyển sinh lớp 10 trung học phổ thông công lập là những sự kiện có quy mô xã hội đặc biệt lớn. Đề thi chính thức trước giờ phát cho thí sinh được xếp vào danh mục <strong>bí mật nhà nước độ Tối Mật</strong> theo quy định của Luật Bảo vệ bí mật nhà nước. Bất kỳ một sơ suất nào — từ rò rỉ hình ảnh đề thi, sai sót trang in, mờ nhòe mã đề trắc nghiệm, cho đến việc máy in đột ngột tê liệt giữa ca trực — đều có thể dẫn đến hậu quả nghiêm trọng làm đình trệ kỳ thi toàn tỉnh hoặc toàn quốc.
  </p>
  <p class="text-gray-700 leading-relaxed text-base">
    Chính vì vậy, quy chế của Bộ Giáo dục và Đào tạo phối hợp cùng Bộ Công an (A03, PA03) thiết lập một cơ chế kiểm soát đặc biệt ngặt nghèo: <em>khu vực in sao đề thi phải được tổ chức biệt lập hoàn toàn và chia thành 3 vòng cách ly độc lập</em>. Đơn vị cung cấp giải pháp thiết bị như <strong>Công ty Hương Sơn</strong> không chỉ đơn thuần là cho thuê máy móc, mà phải gánh vác trách nhiệm bảo đảm tính ổn định tuyệt đối về cơ khí, điện năng và quy trình hỗ trợ kỹ thuật không gián đoạn.
  </p>

  <figure class="my-8 not-prose">
    <img src="/assets/images/hero-education.jpg" alt="Khu vực in sao đề thi cách ly 3 vòng độc lập của Sở Giáo dục và Đào tạo" class="w-full h-auto rounded-lg shadow-md border border-gray-200" />
    <figcaption class="text-center text-xs text-gray-500 mt-2 italic font-sans">
      Khu vực in sao đề thi độc lập 3 vòng: Vòng 1 biệt lập tuyệt đối, chỉ cán bộ in sao và máy in siêu tốc vận hành khép kín.
    </figcaption>
  </figure>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">2. Kiến Trúc 3 Vòng Cách Ly Trong Hội Đồng In Sao Đề Thi</h2>
  <p class="text-gray-700 leading-relaxed text-base">
    Kiến trúc mặt bằng của hội đồng in sao đề thi được thiết kế dạng "vòng tròn đồng tâm", trong đó mỗi vòng có nhiệm vụ, thẩm quyền và hàng rào kiểm soát riêng biệt:
  </p>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 my-6 not-prose">
    <div class="border border-red-200 bg-red-50/40 p-5 rounded-lg">
      <div class="w-9 h-9 bg-red-600 text-white font-bold flex items-center justify-center rounded-sm mb-3">V1</div>
      <h3 class="text-base font-bold text-red-900 mb-2">Vòng 1: In Sao &amp; Đóng Gói (Cách ly tuyệt đối)</h3>
      <p class="text-xs text-gray-700 leading-relaxed">
        Bao gồm cán bộ in sao, kỹ thuật viên vận hành máy in siêu tốc và lãnh đạo hội đồng. Toàn bộ người ở Vòng 1 sinh hoạt và làm việc 24/24 trong khu vực khép kín, tuyệt đối không được tiếp xúc với người bên ngoài và không có thiết bị thu phát sóng viễn thông.
      </p>
    </div>
    <div class="border border-amber-200 bg-amber-50/40 p-5 rounded-lg">
      <div class="w-9 h-9 bg-amber-600 text-white font-bold flex items-center justify-center rounded-sm mb-3">V2</div>
      <h3 class="text-base font-bold text-amber-900 mb-2">Vòng 2: Giám Sát &amp; Bảo Vệ Vòng Trong</h3>
      <p class="text-xs text-gray-700 leading-relaxed">
        Lực lượng công an PA03 và cán bộ thanh tra giáo dục. Giám sát mọi hoạt động của Vòng 1 qua cửa kính một chiều hoặc camera nội bộ không nối mạng. Mọi nhu yếu phẩm tiếp tế được chuyển qua hòm thư trung chuyển có khóa hai mặt.
      </p>
    </div>
    <div class="border border-blue-200 bg-blue-50/40 p-5 rounded-lg">
      <div class="w-9 h-9 bg-blue-600 text-white font-bold flex items-center justify-center rounded-sm mb-3">V3</div>
      <h3 class="text-base font-bold text-blue-900 mb-2">Vòng 3: Bảo Vệ An Ninh Vòng Ngoài</h3>
      <p class="text-xs text-gray-700 leading-relaxed">
        Lực lượng công an vũ trang canh gác hàng rào bảo vệ bên ngoài 24/7. Kiểm soát ra vào cổng, phá sóng viễn thông xung quanh bán kính phòng thi và ngăn chặn hoàn toàn các nỗ lực xâm nhập từ bên ngoài.
      </p>
    </div>
  </div>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">3. Tại Sao Máy In Siêu Tốc Duplo Là Lựa Chọn Bắt Buộc Tại Vòng 1?</h2>
  <p class="text-gray-700 leading-relaxed text-base">
    Nhiều đơn vị từng đặt câu hỏi: <em>Tại sao không dùng các cụm máy photocopy văn phòng tốc độ cao để in đề thi?</em> Thực tế triển khai hàng trăm kỳ thi của Hương Sơn khẳng định: <strong>Máy photocopy laser truyền thống hoàn toàn không phù hợp cho in sao đề thi quy mô lớn</strong> vì các nguyên nhân kỹ thuật chí mạng sau:
  </p>
  <ul class="list-disc pl-6 space-y-3 text-gray-700 text-base">
    <li><strong>Nhiệt độ cụm sấy sinh tĩnh điện cao:</strong> Máy photocopy phải nung nóng giấy lên 180°C - 200°C để làm chảy hạt mực toner. Giấy mỏng sau khi qua nhiệt sẽ bị khô giòn và tích tĩnh điện rất mạnh, khiến các tờ giấy dính chặt vào nhau. Thí sinh khi làm bài dễ bị lật 2 tờ cùng lúc, dẫn đến làm sót câu hỏi hoặc thiếu trang.</li>
    <li><strong>Nguy cơ kẹt giấy làm rách đề gốc:</strong> Với các đề thi gốc chỉ có một bản duy nhất, nếu máy photocopy bị kẹt giấy cuốn gập vào cụm sấy, bản gốc có thể bị cháy rách, gây thảm họa cho hội đồng in sao.</li>
    <li><strong>Tốc độ và độ bền liên tục:</strong> Máy photocopy văn phòng khi chạy liên tục 50.000 – 100.000 bản sẽ bị quá nhiệt (Overheat), buộc phải dừng nghỉ để làm nguội cụm sấy. Trong khi đó, máy in siêu tốc Duplo (DP-X550, DP-X850) ứng dụng <strong>công nghệ rulo ép lạnh (Cold Press)</strong> sử dụng mực gốc dầu thẩm thấu tức thì, không tỏa nhiệt, không tích điện, có thể chạy liên tục 200 trang/phút suốt 18 tiếng mỗi ngày mà không bị quá nhiệt.</li>
  </ul>

  <figure class="my-8 not-prose">
    <img src="/assets/images/proof/in-sao-de-thi-duplo.jpg" alt="Vận hành máy in siêu tốc Duplo DP-X850 trong kỳ thi tốt nghiệp" class="w-full h-auto rounded-lg shadow-md border border-gray-200" />
    <figcaption class="text-center text-xs text-gray-500 mt-2 italic font-sans">
      Kỹ thuật viên Hương Sơn kiểm tra độ sắc nét và cân chỉnh rulo ép lạnh máy in Duplo trước khi bàn giao niêm phong.
    </figcaption>
  </figure>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">4. Chiến Lược Dự Phòng Nóng N+1 – Cam Kết Không Gián Đoạn</h2>
  <p class="text-gray-700 leading-relaxed text-base">
    Quy tắc số một của Giám đốc Nguyễn Công Thuận khi triển khai hợp đồng in sao đề thi cho các Sở GD&amp;ĐT là: <strong>"Không bao giờ để hội đồng thi rơi vào thế đơn độc với chỉ một thiết bị duy nhất"</strong>. Chiến lược dự phòng N+1 được áp dụng tuyệt đối:
  </p>
  <div class="overflow-x-auto my-6">
    <table class="w-full text-left border-collapse border border-gray-200 text-sm">
      <thead class="bg-gray-100 text-gray-900 font-bold">
        <tr>
          <th class="p-3.5 border border-gray-200">Quy Mô Thí Sinh</th>
          <th class="p-3.5 border border-gray-200">Cấu Hình Máy Chính (N)</th>
          <th class="p-3.5 border border-gray-200">Máy Dự Phòng Nóng (+1)</th>
          <th class="p-3.5 border border-gray-200">Thời Gian Ứng Cứu Thay Thế</th>
          <th class="p-3.5 border border-gray-200">Vật Tư Đi Kèm</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200 text-gray-700">
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">10.000 – 15.000 thí sinh</td>
          <td class="p-3.5 border border-gray-200">01 Máy Duplo DP-X550 / DP-X650</td>
          <td class="p-3.5 border border-gray-200"><strong>01 Máy Duplo DP-X550 cùng loại</strong></td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">≤ 15 phút (Đổi nguồn)</td>
          <td class="p-3.5 border border-gray-200">10 bình mực + 04 cuộn master</td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">16.000 – 30.000 thí sinh</td>
          <td class="p-3.5 border border-gray-200">02 Máy Duplo DP-X650 / DP-X850</td>
          <td class="p-3.5 border border-gray-200"><strong>01 Máy Duplo DP-X850 chạy song song</strong></td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">Tức thì (Chia tải)</td>
          <td class="p-3.5 border border-gray-200">20 bình mực + 08 cuộn master</td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">&gt; 30.000 thí sinh (Tỉnh lớn)</td>
          <td class="p-3.5 border border-gray-200">03 Máy Duplo DP-X850 (200 ppm)</td>
          <td class="p-3.5 border border-gray-200"><strong>01 Máy DP-X850 + Cụm drum sơ cua</strong></td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">Tức thì (Hot Swap)</td>
          <td class="p-3.5 border border-gray-200">35 bình mực + 15 cuộn master</td>
        </tr>
      </tbody>
    </table>
  </div>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">5. Quy Trình Kiểm Định PDI 5 Bước Trước Giờ Niêm Phong Cách Ly</h2>
  <p class="text-gray-700 leading-relaxed text-base">
    Trước khi cánh cửa Vòng 1 được dán tem niêm phong có chữ ký của đại diện PA03, toàn bộ dàn máy in siêu tốc Duplo của Hương Sơn phải trải qua quy trình kiểm định chất lượng tiền xuất xưởng (Pre-Delivery Inspection - PDI) nghiêm ngặt gồm 5 bước:
  </p>
  <ol class="list-decimal pl-6 space-y-2.5 text-gray-700 text-base">
    <li><strong>Kiểm tra hệ thống điện và chống sét:</strong> Đo điện áp 220V ổn định, kết nối hệ thống ổn áp Lioa và bộ lưu điện UPS online công suất 3kVA–5kVA, đảm bảo máy in tiếp tục chạy ít nhất 45 phút khi mất điện lưới đột ngột.</li>
    <li><strong>Test tốc độ và độ phân giải quang học:</strong> Chạy thử 500 bản in mẫu ở tốc độ cực đại (150–200 trang/phút) để kiểm tra độ căng của phim master nhiệt và độ đồng đều của lớp mực.</li>
    <li><strong>Cân chỉnh sensor nạp giấy và bàn nâng:</strong> Hiệu chỉnh mắt đọc quang học phát hiện giấy đúp, kiểm tra độ bám của bánh cao su kéo giấy với các loại giấy in Bãi Bằng định lượng 65gsm, 70gsm và 80gsm.</li>
    <li><strong>Lắp cụm drum in màu đen chuyên dụng:</strong> Vệ sinh lưới lọc mực, bôi trơn nhông truyền động và kiểm tra chốt khóa drum in.</li>
    <li><strong>Ký biên bản nghiệm thu kỹ thuật bàn giao:</strong> Đại diện Sở GD&amp;ĐT, cán bộ an ninh công an và kỹ sư trưởng Hương Sơn cùng ký xác nhận máy móc hoàn hảo 100% trước khi niêm phong.</li>
  </ol>

  <!-- FAQ Section -->
  <h2 class="text-2xl font-bold text-[#181923] tracking-tight pt-4">Câu Hỏi Thường Gặp Của Các Hội Đồng Thi (FAQs)</h2>
  <div class="space-y-4 my-6 not-prose">
    <div class="border border-gray-200 rounded-lg p-5 bg-white">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <i class="fa-regular fa-circle-question text-[#1A9900]"></i>
        Tại sao trong phòng in sao đề thi Vòng 1 bắt buộc không được dùng máy photocopy laser có sấy nhiệt?
      </h3>
      <p class="text-sm text-gray-600 leading-relaxed pl-6">
        Máy photocopy laser sử dụng cụm sấy nhiệt cao (180°C - 200°C) nung chảy mực, tạo ra hiện tượng tích điện tĩnh điện cực lớn trên bề mặt giấy mỏng (60–70gsm). Khi in liên tục hàng chục ngàn bản, các tờ giấy sẽ hút chặt vào nhau gây dính giấy kép (Double-feed) làm thí sinh bị thiếu trang đề thi hoặc kẹt giấy làm hỏng bản gốc đề thi mật. Ngược lại, máy in siêu tốc Duplo dùng mực gốc dầu thẩm thấu tự nhiên qua rulo ép lạnh hoàn toàn không sinh nhiệt, triệt tiêu 100% hiện tượng tĩnh điện.
      </p>
    </div>
    <div class="border border-gray-200 rounded-lg p-5 bg-white">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <i class="fa-regular fa-circle-question text-[#1A9900]"></i>
        Nguyên lý dự phòng nóng N+1 trong khu vực in sao đề thi hoạt động như thế nào?
      </h3>
      <p class="text-sm text-gray-600 leading-relaxed pl-6">
        Mô hình N+1 quy định: Nếu hội đồng thi cần công suất của N máy in hoạt động liên tục để kịp tiến độ giao đề (ví dụ N = 2 máy Duplo DP-X850), thì Hương Sơn luôn cấp thêm ít nhất +1 máy in giống hệt về model và linh kiện đặt sẵn tại hiện trường. Máy +1 đã được chạy thử nghiệm PDI hoàn chỉnh, cài sẵn master và mực in dự phòng, sẵn sàng đóng điện hoạt động ngay trong vòng 10–15 phút nếu một trong các máy chính gặp sự cố cơ học bất khả kháng.
      </p>
    </div>
    <div class="border border-gray-200 rounded-lg p-5 bg-white">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <i class="fa-regular fa-circle-question text-[#1A9900]"></i>
        Quy trình tiêu hủy giấy in thử, bản in hỏng trong khu vực cách ly Vòng 1 được thực hiện ra sao?
      </h3>
      <p class="text-sm text-gray-600 leading-relaxed pl-6">
        Toàn bộ bản in thử, bản in lỗi hoặc giấy thừa trong quá trình cân chỉnh máy đều phải được gom vào thùng niêm phong chuyên dụng. Hàng ngày, dưới sự giám sát trực tiếp của cán bộ an ninh PA03 và thanh tra Sở GD&amp;ĐT, toàn bộ giấy này được đưa vào máy hủy tài liệu công suất lớn cắt vụn thành sợi nhỏ (kích thước siêu nhỏ chuẩn bảo mật cấp độ 5), đóng túi niêm phong và lập biên bản kiểm đếm hủy giấy trước khi kết thúc kỳ thi.
      </p>
    </div>
  </div>

  """ + AUTHOR_BOX_HTML + """
</div>"""
}

print("Đã nạp xong POST_6.")

POST_7 = {
    "id": 12,
    "slug": "dinh-muc-vat-tu-muc-in-cuon-master-va-giay-in-de-thi-thpt",
    "category_id": 1,
    "category_name": "Giáo Dục & In Đề Thi",
    "title": "Cẩm Nang Tính Định Mức Mực In, Cuộn Master & Giấy In Sao Đề Thi Tuyển Sinh Và Tốt Nghiệp THPT",
    "seo_title": "Định Mức Mực In, Master & Giấy In Đề Thi THPT | Hương Sơn",
    "seo_desc": "Công thức tính toán chính xác định mức mực in Duplo DA14, cuộn master DRK50/DRK60 và định lượng giấy Bãi Bằng 70gsm phục vụ hội đồng in sao đề thi THPT.",
    "keywords": "định mức mực in duplo, cuộn master duplo, định mức in đề thi, giấy in đề thi bãi bằng 70gsm, duplo da14, tính vật tư in sao đề thi, kinh nghiệm in đề thi thpt",
    "published_at": "2026-10-06 09:00:00",
    "image_url": "/assets/images/products/95-bang-tra-ma-muc-master-may-in-duplo.jpg",
    "reading_time": "12 phút đọc",
    "tag": "Giáo Dục & In Đề Thi",
    "summary": "Hướng dẫn chi tiết công thức tính toán dự toán vật tư tiêu hao cho hội đồng in sao đề thi THPT cấp tỉnh: phương pháp tính số cuộn master nhiệt, số lượng bình mực 1.000ml theo độ phủ trắc nghiệm 8–12%, tiêu chuẩn chọn giấy Bãi Bằng 70gsm chống kẹt giấy và bảng dự toán mẫu cho hội đồng 20.000 thí sinh.",
    "aeo_answer": "Công thức tính định mức vật tư máy in siêu tốc Duplo cho kỳ thi: 1 cuộn Master Duplo (DRK50/DRK60) tạo được từ 200 đến 220 trang master; 1 bình mực Duplo DA14 (1.000ml) in được 18.000 – 22.000 bản in A4 ở độ phủ mực tiêu chuẩn 6% (tương đương 36 – 44 ram giấy). Đối với đề thi trắc nghiệm có bảng tô mã đề (độ phủ 10%), định mức tiêu hao là 1 bình mực in được khoảng 12.000 – 14.000 bản. Giấy in đề thi tiêu chuẩn bắt buộc là giấy Bãi Bằng hoặc IK Plus định lượng 70gsm, độ ẩm 4.5–5.5%, giúp rulo kéo mượt mà ở tốc độ 150 trang/phút mà không bị quăn mép.",
    "faqs": [
        {
            "q": "Một cuộn phim Master Duplo DRK50 tạo được chính xác bao nhiêu bản gốc đề thi?",
            "a": "Theo thông số kỹ thuật chuẩn từ nhà sản xuất Duplo Nhật Bản, một cuộn master DRK50 (khổ B4/A4) có chiều dài 220 mét, cho phép tạo được khoảng 200 đến 220 bản master đề thi. Với cuộn khổ A3 (DRK60), một cuộn tạo được khoảng 110 đến 125 bản master A3. Lưu ý trong quá trình tạo master cần cộng thêm hệ số dự phòng 10% cho các trường hợp căn chỉnh lề hoặc thử nghiệm bản in đầu tiên."
        },
        {
            "q": "Tại sao không nên sử dụng giấy định lượng quá mỏng (dưới 60gsm) hoặc giấy quá dày (trên 100gsm) khi in đề thi siêu tốc?",
            "a": "Giấy quá mỏng dưới 60gsm có lực căng bề mặt yếu, khi qua cụm ép rulo cao tốc dễ bị nhăn nhúm hoặc cuốn ngược vào trống drum do mực gốc dầu có độ dính tự nhiên. Ngược lại, giấy quá dày trên 100gsm sẽ làm tăng áp lực lên nhông truyền động và làm giảm số lượng tờ chứa được trên bàn nâng khay giấy, đồng thời khiến chi phí mua giấy tăng vọt không cần thiết. Định lượng chuẩn vàng tối ưu nhất cho in đề thi là 70gsm."
        },
        {
            "q": "Hệ số hao hụt vật tư an toàn trong khu vực cách ly Vòng 1 nên được tính là bao nhiêu?",
            "a": "Quy chế bảo vệ an ninh kỳ thi cấm tuyệt đối việc mang vật tư bổ sung vào Vòng 1 sau khi đã niêm phong cách ly. Do đó, Hương Sơn khuyến nghị hội đồng thi luôn áp dụng hệ số an toàn tối thiểu 15% – 20% đối với mực in và cuộn master, và 10% đối với giấy in trắng. Lượng vật tư thừa sau kỳ thi sẽ được hội đồng bàn giao lại cho các kỳ thi học kỳ thông thường trong năm học."
        }
    ],
    "content_html": """<div class="space-y-8 text-[#181923]">
  <!-- AEO Direct Answer Box -->
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-calculator text-base"></i>
      <span>Đáp án nhanh (AEO Direct Answer)</span>
    </div>
    <p class="text-gray-800 text-[15px] leading-relaxed font-medium mb-3">
      Công thức tính định mức vật tư máy in siêu tốc Duplo cho kỳ thi: 1 cuộn Master Duplo (DRK50/DRK60) tạo được từ 200 đến 220 trang master; 1 bình mực Duplo DA14 (1.000ml) in được 18.000 – 22.000 bản in A4 ở độ phủ mực tiêu chuẩn 6% (tương đương 36 – 44 ram giấy). Đối với đề thi trắc nghiệm có bảng tô mã đề (độ phủ 10%), định mức tiêu hao là 1 bình mực in được khoảng 12.000 – 14.000 bản. Giấy in đề thi tiêu chuẩn bắt buộc là giấy Bãi Bằng hoặc IK Plus định lượng 70gsm, độ ẩm 4.5–5.5%, giúp rulo kéo mượt mà ở tốc độ 150 trang/phút mà không bị quăn mép.
    </p>
    <div class="text-xs text-gray-500 flex flex-wrap gap-4 pt-2 border-t border-emerald-200/60">
      <span><i class="fa-solid fa-check text-[#1A9900] mr-1"></i>Chuẩn hóa định mức Bộ GD&amp;ĐT</span>
      <span><i class="fa-solid fa-check text-[#1A9900] mr-1"></i>Mực chính hãng Duplo DA14</span>
      <span><i class="fa-solid fa-check text-[#1A9900] mr-1"></i>Hệ số dự phòng an toàn 15%</span>
    </div>
  </div>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">1. Thách Thức Dự Toán Vật Tư Trong Khu Vực Cách Ly Biệt Lập</h2>
  <p class="text-gray-700 leading-relaxed text-base">
    Trong các kỳ thi tuyển sinh và tốt nghiệp THPT, công tác lập dự toán vật tư in ấn là nhiệm vụ có tính rủi ro cực cao. Khu vực in sao đề thi (Vòng 1) một khi đã khóa chốt niêm phong thì <strong>"nội bất xuất, ngoại bất nhập"</strong>. Nếu thiếu dù chỉ 01 bình mực hoặc 01 cuộn master, hội đồng thi sẽ phải báo cáo khẩn cấp lên Ban Chỉ đạo thi cấp tỉnh và Bộ GD&amp;ĐT, gây xáo trộn quy trình an ninh và tiềm ẩn nguy cơ chậm trễ giờ giao đề đến các điểm thi xa xôi.
  </p>
  <p class="text-gray-700 leading-relaxed text-base">
    Ngược lại, nếu dự toán quá mức sẽ gây lãng phí ngân sách giáo dục của địa phương. Với kinh nghiệm hơn 16 năm trực tiếp cung cấp thiết bị và vật tư in đề thi cho các Sở GD&amp;ĐT như Quảng Trị, Vĩnh Phúc, Phú Thọ,... <strong>Hương Sơn</strong> đúc kết bộ công thức định mức chuẩn xác giúp các nhà quản lý giáo dục tự tin lập dự trù hoàn hảo.
  </p>

  <figure class="my-8 not-prose">
    <img src="/assets/images/products/95-bang-tra-ma-muc-master-may-in-duplo.jpg" alt="Bảng tra mã mực in và cuộn phim master máy in nhân bản siêu tốc Duplo chính hãng" class="w-full h-auto rounded-lg shadow-md border border-gray-200" />
    <figcaption class="text-center text-xs text-gray-500 mt-2 italic font-sans">
      Bảng tra cứu mã cuộn master và mực in chính hãng Duplo Nhật Bản do Hương Sơn nhập khẩu và phân phối.
    </figcaption>
  </figure>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">2. Công Thức Tính Định Mức Cuộn Phim Master Duplo</h2>
  <p class="text-gray-700 leading-relaxed text-base">
    Khác với máy photocopy dùng trống từ quét liên tục, máy in nhân bản siêu tốc Duplo hoạt động theo cơ chế khắc nhiệt lên một lớp màng phim mỏng (gọi là Master) rồi bọc quanh trống drum quay để ép mực xuyên qua các lỗ siêu vi sang trang giấy. Cứ mỗi trang gốc đề thi sẽ cần tạo một bản master riêng.
  </p>
  <p class="text-gray-700 leading-relaxed text-base">
    Công thức tính số lượng cuộn master cần thiết:
  </p>
  <div class="bg-gray-100 p-5 rounded-lg border border-gray-300 font-mono text-sm text-gray-800 my-4 not-prose">
    <strong>Tổng cuộn Master = [Tổng số trang đề gốc × (1 + Hệ số thử nghiệm 0.15)] ÷ Số bản master/cuộn</strong>
  </div>
  <p class="text-gray-700 leading-relaxed text-base">
    <em>Trong đó:</em>
  </p>
  <ul class="list-disc pl-6 space-y-2 text-gray-700 text-base">
    <li><strong>Cuộn Master DRK50 (Khổ B4/A4):</strong> 1 cuộn dài 220m tạo được 200 – 220 bản master.</li>
    <li><strong>Cuộn Master DRK60 (Khổ A3):</strong> 1 cuộn dài 220m tạo được 110 – 125 bản master khổ A3.</li>
    <li><strong>Hệ số thử nghiệm (0.15):</strong> Dự phòng cho các lần in test kiểm tra độ lệch lề, độ đậm nhạt và các trang đề in thử trước khi in hàng loạt.</li>
  </ul>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">3. Công Thức Tính Định Mức Mực In Duplo (Bình 1.000ml)</h2>
  <p class="text-gray-700 leading-relaxed text-base">
    Lượng mực tiêu hao phụ thuộc trực tiếp vào <strong>độ phủ mực (Page Coverage)</strong> của đề thi:
  </p>
  <ul class="list-disc pl-6 space-y-2 text-gray-700 text-base">
    <li><strong>Đề thi tự luận (Ngữ văn, Lịch sử, Địa lý):</strong> Mật độ chữ viết thông thường, độ phủ mực dao động từ <strong>5% đến 6%</strong>. Một bình mực 1.000ml in được khoảng <strong>18.000 – 22.000 trang A4</strong>.</li>
    <li><strong>Đề thi trắc nghiệm (Toán, Vật lý, Hóa học, Sinh học, Tiếng Anh):</strong> Có khung bảng mã đề, bảng đáp án chấm tròn, độ phủ mực tăng lên <strong>8% đến 11%</strong>. Một bình mực in được khoảng <strong>12.000 – 14.000 trang A4</strong>.</li>
    <li><strong>Đề có hình vẽ đồ họa, biểu đồ địa lý:</strong> Độ phủ có thể đạt <strong>12% - 15%</strong>. Một bình mực in được khoảng <strong>9.000 – 11.000 trang A4</strong>.</li>
  </ul>

  <div class="overflow-x-auto my-6">
    <table class="w-full text-left border-collapse border border-gray-200 text-sm">
      <thead class="bg-gray-100 text-gray-900 font-bold">
        <tr>
          <th class="p-3.5 border border-gray-200">Độ Phủ Mực</th>
          <th class="p-3.5 border border-gray-200">Loại Đề Thi Đặc Trưng</th>
          <th class="p-3.5 border border-gray-200">Số Trang In / Bình 1.000ml</th>
          <th class="p-3.5 border border-gray-200">Số Ram Giấy Tương Ứng (500 tờ)</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200 text-gray-700">
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">5% - 6%</td>
          <td class="p-3.5 border border-gray-200">Đề tự luận Văn học, Lịch sử</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">20.000 trang A4</td>
          <td class="p-3.5 border border-gray-200">40 Ram giấy A4</td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">8% - 10%</td>
          <td class="p-3.5 border border-gray-200">Đề trắc nghiệm Toán, Tiếng Anh</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">13.500 trang A4</td>
          <td class="p-3.5 border border-gray-200">27 Ram giấy A4</td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">12% - 15%</td>
          <td class="p-3.5 border border-gray-200">Đề Vật lý, Địa lý có sơ đồ hình vẽ</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">10.000 trang A4</td>
          <td class="p-3.5 border border-gray-200">20 Ram giấy A4</td>
        </tr>
      </tbody>
    </table>
  </div>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">4. Tiêu Chuẩn Chọn Giấy In Trắng: Định Lượng &amp; Độ Ẩm</h2>
  <p class="text-gray-700 leading-relaxed text-base">
    Nhiều trường hợp máy in siêu tốc bị kẹt giấy liên tục không phải do máy hỏng mà do <strong>chất lượng giấy in không đạt tiêu chuẩn</strong>. Khi máy in Duplo chạy ở tốc độ 150 – 180 bản/phút, lực kéo giấy của bánh xe cao su là cực lớn. Giấy cần đáp ứng các tiêu chí sau:
  </p>
  <ul class="list-disc pl-6 space-y-2 text-gray-700 text-base">
    <li><strong>Định lượng tiêu chuẩn (Basis Weight):</strong> Chuẩn nhất là <strong>70 g/m² (70gsm)</strong>. Giấy 60gsm quá mỏng dễ bị nhăn rách mép; giấy 80gsm tuy đẹp nhưng làm tăng chi phí và trọng lượng túi bài thi khi vận chuyển.</li>
    <li><strong>Độ ẩm giấy (Moisture Content):</strong> Bắt buộc nằm trong dải <strong>4.5% đến 5.5%</strong>. Giấy để trong phòng ẩm nồm sẽ bị ướt, khi qua rulo ép lạnh sẽ làm loãng mực và dính chặt vào trục cao su gây kẹt giấy hàng loạt.</li>
    <li><strong>Độ tro và độ mịn:</strong> Hàm lượng tro (bột đá canxi cacbonat) trong giấy phải dưới 15% để tránh làm mòn bánh xe kéo giấy và bám bụi vào gương quét quang học. Khuyến nghị sử dụng các thương hiệu giấy uy tín lâu năm như <em>Bãi Bằng Vàng/Hồng, IK Plus, PaperOne</em> nguyên đai nguyên kiện.</li>
  </ul>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">5. Bảng Dự Toán Mẫu Cho Hội Đồng Thi Quy Mô 20.000 Thí Sinh</h2>
  <div class="overflow-x-auto my-6">
    <table class="w-full text-left border-collapse border border-gray-200 text-sm">
      <thead class="bg-gray-100 text-gray-900 font-bold">
        <tr>
          <th class="p-3.5 border border-gray-200">Hạng Mục Vật Tư</th>
          <th class="p-3.5 border border-gray-200">Quy Cách Chuẩn</th>
          <th class="p-3.5 border border-gray-200">Định Mức Tính Toán</th>
          <th class="p-3.5 border border-gray-200">Hệ Số Dự Phòng (15%)</th>
          <th class="p-3.5 border border-gray-200">Số Lượng Thực Nhập</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200 text-gray-700">
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">Mực in siêu tốc Duplo</td>
          <td class="p-3.5 border border-gray-200">DA14 Black (Bình 1.000ml)</td>
          <td class="p-3.5 border border-gray-200">24 bình</td>
          <td class="p-3.5 border border-gray-200">+4 bình</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">28 bình</td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">Cuộn Master Duplo</td>
          <td class="p-3.5 border border-gray-200">DRK50 (Khổ B4/A4, 220m)</td>
          <td class="p-3.5 border border-gray-200">6 cuộn</td>
          <td class="p-3.5 border border-gray-200">+2 cuộn</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">8 cuộn</td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">Giấy in trắng A4</td>
          <td class="p-3.5 border border-gray-200">Bãi Bằng 70gsm (Thùng 5 ram)</td>
          <td class="p-3.5 border border-gray-200">140 thùng (700 ram)</td>
          <td class="p-3.5 border border-gray-200">+15 thùng</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">155 thùng (775 ram)</td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">Giấy in bìa A3 (Túi đề thi)</td>
          <td class="p-3.5 border border-gray-200">Kraft vàng dai 120gsm</td>
          <td class="p-3.5 border border-gray-200">2.500 tờ</td>
          <td class="p-3.5 border border-gray-200">+300 tờ</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">2.800 tờ</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- FAQ Section -->
  <h2 class="text-2xl font-bold text-[#181923] tracking-tight pt-4">Câu Hỏi Thường Gặp Của Ban Tài Chính &amp; Cơ Sở Vật Chất (FAQs)</h2>
  <div class="space-y-4 my-6 not-prose">
    <div class="border border-gray-200 rounded-lg p-5 bg-white">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <i class="fa-regular fa-circle-question text-[#1A9900]"></i>
        Một cuộn phim Master Duplo DRK50 tạo được chính xác bao nhiêu bản gốc đề thi?
      </h3>
      <p class="text-sm text-gray-600 leading-relaxed pl-6">
        Theo thông số kỹ thuật chuẩn từ nhà sản xuất Duplo Nhật Bản, một cuộn master DRK50 (khổ B4/A4) có chiều dài 220 mét, cho phép tạo được khoảng 200 đến 220 bản master đề thi. Với cuộn khổ A3 (DRK60), một cuộn tạo được khoảng 110 đến 125 bản master A3. Lưu ý trong quá trình tạo master cần cộng thêm hệ số dự phòng 10% cho các trường hợp căn chỉnh lề hoặc thử nghiệm bản in đầu tiên.
      </p>
    </div>
    <div class="border border-gray-200 rounded-lg p-5 bg-white">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <i class="fa-regular fa-circle-question text-[#1A9900]"></i>
        Tại sao không nên sử dụng giấy định lượng quá mỏng (dưới 60gsm) hoặc giấy quá dày (trên 100gsm) khi in đề thi siêu tốc?
      </h3>
      <p class="text-sm text-gray-600 leading-relaxed pl-6">
        Giấy quá mỏng dưới 60gsm có lực căng bề mặt yếu, khi qua cụm ép rulo cao tốc dễ bị nhăn nhúm hoặc cuốn ngược vào trống drum do mực gốc dầu có độ dính tự nhiên. Ngược lại, giấy quá dày trên 100gsm sẽ làm tăng áp lực lên nhông truyền động và làm giảm số lượng tờ chứa được trên bàn nâng khay giấy, đồng thời khiến chi phí mua giấy tăng vọt không cần thiết. Định lượng chuẩn vàng tối ưu nhất cho in đề thi là 70gsm.
      </p>
    </div>
    <div class="border border-gray-200 rounded-lg p-5 bg-white">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <i class="fa-regular fa-circle-question text-[#1A9900]"></i>
        Hệ số hao hụt vật tư an toàn trong khu vực cách ly Vòng 1 nên được tính là bao nhiêu?
      </h3>
      <p class="text-sm text-gray-600 leading-relaxed pl-6">
        Quy chế bảo vệ an ninh kỳ thi cấm tuyệt đối việc mang vật tư bổ sung vào Vòng 1 sau khi đã niêm phong cách ly. Do đó, Hương Sơn khuyến nghị hội đồng thi luôn áp dụng hệ số an toàn tối thiểu 15% – 20% đối với mực in và cuộn master, và 10% đối với giấy in trắng. Lượng vật tư thừa sau kỳ thi sẽ được hội đồng bàn giao lại cho các kỳ thi học kỳ thông thường trong năm học.
      </p>
    </div>
  </div>

  """ + AUTHOR_BOX_HTML + """
</div>"""
}

POST_8 = {
    "id": 13,
    "slug": "bao-mat-in-an-xac-thuc-the-rfid-va-chong-that-thoat-du-lieu-ngan-hang",
    "category_id": 2,
    "category_name": "Ngân Hàng & Bảo Mật",
    "title": "Giải Pháp Quản Trị In Ấn Tập Trung & Bảo Mật Xác Thực Thẻ RFID/PIN Chống Thất Thoát Dữ Liệu Ngân Hàng",
    "seo_title": "Bảo Mật In Ấn Xác Thực Thẻ RFID & Chống Rò Rỉ Dữ Liệu Ngân Hàng | Hương Sơn",
    "seo_desc": "Giải pháp Follow-Me Printing, xác thực thẻ từ RFID/mã PIN, in chìm Watermarking và ghi nhật ký Audit Log chống rò rỉ dữ liệu tài chính ngân hàng theo Nghị định 13/2023/NĐ-CP.",
    "keywords": "bảo mật in ấn ngân hàng, xác thực rfid máy photocopy, follow-me printing, secure print release, chống rò rỉ dữ liệu ngân hàng, nghị định 13 bảo vệ dữ liệu cá nhân, toshiba e-studio bảo mật",
    "published_at": "2026-10-06 09:30:00",
    "image_url": "/assets/images/products/vietcombank-2024.jpg",
    "reading_time": "13 phút đọc",
    "tag": "Ngân Hàng & Bảo Mật",
    "summary": "Phân tích giải pháp bảo mật in ấn cấp độ ngân hàng: khắc phục điểm mù rò rỉ dữ liệu tại khay giấy máy photocopy, cơ chế in an toàn Follow-Me Printing qua thẻ từ RFID Mifare, tự động in chìm dấu vân tay số Watermark và lưu trữ Image Log phục vụ điều tra gian lận tài chính.",
    "aeo_answer": "Giải pháp Secure Print Release (Follow-Me Printing) trên máy photocopy đa chức năng Toshiba e-STUDIO và Konica Minolta bizhub ngăn chặn 100% rò rỉ thông tin khách hàng: Lệnh in được mã hóa SSL/TLS gửi lên máy chủ in tập trung; tài liệu chỉ được in ra khi cán bộ quẹt thẻ từ nhân viên RFID (Mifare 13.56MHz) hoặc nhập mã PIN trực tiếp tại máy; tính năng in chìm Watermark ẩn thông tin người in; hệ thống Image Log lưu lại hình ảnh mọi bản chụp/quét phục vụ thanh tra nội bộ theo Nghị định 13/2023/NĐ-CP.",
    "faqs": [
        {
            "q": "Cơ chế Follow-Me Printing (Pull Printing) hoạt động như thế nào trong môi trường ngân hàng?",
            "a": "Khi nhân viên ngân hàng bấm 'Print' từ máy tính cá nhân, tài liệu không được in ra ngay lập tức mà được mã hóa theo chuẩn AES-256 bit và đẩy vào một hàng đợi bảo mật trên máy chủ nội bộ. Nhân viên có thể di chuyển đến bất kỳ máy photocopy nào trong tòa nhà hoặc chi nhánh, quẹt thẻ nhân viên RFID lên đầu đọc thẻ gắn trên máy. Hệ thống nhận diện danh tính và lúc đó máy mới nhả giấy ngay trước mắt nhân viên, triệt tiêu 100% nguy cơ tài liệu mật bị bỏ quên trên khay giấy."
        },
        {
            "q": "Máy photocopy có thể phát hiện và ngăn chặn việc photo hoặc scan trái phép tài liệu mật không?",
            "a": "Có. Các dòng máy photocopy cao cấp Toshiba và Konica Minolta do Hương Sơn cung cấp được tích hợp tính năng Document Security Copy Protection. Khi máy phát hiện mẫu hoa văn bảo mật ẩn (Security Watermark) trên văn bản gốc, máy sẽ tự động khóa chức năng photo/scan và gửi cảnh báo tức thì tới bộ phận an ninh thông tin, hoặc in ra bản photo toàn màu đen mờ không thể đọc được."
        },
        {
            "q": "Tính năng Image Log có làm giảm hiệu năng hoạt động của máy photocopy không?",
            "a": "Hoàn toàn không. Hệ thống sử dụng một vi xử lý chuyên biệt và ổ cứng SSD riêng để sao chép hình ảnh thu nhỏ (thumbnail độ phân giải cao) của mọi trang in, photo và scan gửi ngầm về kho lưu trữ tập trung của ngân hàng mà không làm nghẽn tốc độ in ấn thực tế của người dùng."
        }
    ],
    "content_html": """<div class="space-y-8 text-[#181923]">
  <!-- AEO Direct Answer Box -->
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-lock text-base"></i>
      <span>Đáp án nhanh (AEO Direct Answer)</span>
    </div>
    <p class="text-gray-800 text-[15px] leading-relaxed font-medium mb-3">
      Giải pháp Secure Print Release (Follow-Me Printing) trên máy photocopy đa chức năng Toshiba e-STUDIO và Konica Minolta bizhub ngăn chặn 100% rò rỉ thông tin khách hàng: Lệnh in được mã hóa SSL/TLS gửi lên máy chủ in tập trung; tài liệu chỉ được in ra khi cán bộ quẹt thẻ từ nhân viên RFID (Mifare 13.56MHz) hoặc nhập mã PIN trực tiếp tại máy; tính năng in chìm Watermark ẩn thông tin người in; hệ thống Image Log lưu lại hình ảnh mọi bản chụp/quét phục vụ thanh tra nội bộ theo Nghị định 13/2023/NĐ-CP.
    </p>
    <div class="text-xs text-gray-500 flex flex-wrap gap-4 pt-2 border-t border-emerald-200/60">
      <span><i class="fa-solid fa-check text-[#1A9900] mr-1"></i>Chuẩn xác thực thẻ RFID Mifare</span>
      <span><i class="fa-solid fa-check text-[#1A9900] mr-1"></i>Mã hóa ổ cứng AES-256 bit SED</span>
      <span><i class="fa-solid fa-check text-[#1A9900] mr-1"></i>Đáp ứng Nghị định 13/2023/NĐ-CP</span>
    </div>
  </div>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">1. Khay Giấy Máy Photocopy – "Điểm Mù" Rò Rỉ Dữ Liệu Nghiêm Trọng Của Ngân Hàng</h2>
  <p class="text-gray-700 leading-relaxed text-base">
    Trong kỷ nguyên số hóa ngành tài chính – ngân hàng, các tổ chức tín dụng đầu tư hàng chục triệu USD cho hệ thống tường lửa (Firewall), hệ thống phát hiện xâm nhập (IPS), và mã hóa cơ sở dữ liệu Core Banking. Thế nhưng, có một lỗ hổng an ninh vật lý thường xuyên bị lãng quên: <strong>khay giấy đầu ra của các máy photocopy đa chức năng (MFP) đặt tại văn phòng</strong>.
  </p>
  <p class="text-gray-700 leading-relaxed text-base">
    Theo thống kê của tổ chức an ninh mạng quốc tế Ponemon Institute, hơn <strong>60% sự cố thất thoát dữ liệu doanh nghiệp</strong> xuất phát từ việc tài liệu in ra bị bỏ quên trên khay giấy máy in công cộng. Tại các ngân hàng thương mại, các tài liệu này bao gồm: sao kê số dư tài khoản doanh nghiệp, hồ sơ thẩm định tài sản thế chấp, hợp đồng tín dụng cá nhân và các báo cáo kiểm toán nhạy cảm. Bất kỳ ai đi ngang qua máy in cũng có thể dễ dàng đọc trộm, chụp ảnh lại bằng điện thoại thông minh hoặc cầm nhầm về nhà.
  </p>

  <figure class="my-8 not-prose">
    <img src="/assets/images/products/vietcombank-2024.jpg" alt="Triển khai dàn máy photocopy bảo mật cấp ngân hàng cho Vietcombank năm 2024" class="w-full h-auto rounded-lg shadow-md border border-gray-200" />
    <figcaption class="text-center text-xs text-gray-500 mt-2 italic font-sans">
      Hương Sơn bàn giao và cài đặt hệ thống in ấn xác thực thẻ RFID trên dòng máy Toshiba e-STUDIO tại Ngân hàng Vietcombank.
    </figcaption>
  </figure>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">2. Kiến Trúc In Bảo Mật Follow-Me Printing (Pull Printing)</h2>
  <p class="text-gray-700 leading-relaxed text-base">
    Để triệt tiêu hoàn toàn rủi ro này, giải pháp cho thuê máy photocopy của <strong>Hương Sơn</strong> tích hợp giải pháp in ấn thông minh <strong>Follow-Me Printing</strong>. Quy trình bảo vệ gồm 4 lớp bảo mật khép kín:
  </p>
  <ol class="list-decimal pl-6 space-y-3 text-gray-700 text-base">
    <li><strong>Gửi lệnh in mã hóa (Encrypted Spooling):</strong> Cán bộ ngân hàng gửi lệnh in từ máy tính, tập tin được mã hóa bằng thuật toán SSL/TLS và chuyển về hàng đợi an toàn trên máy chủ nội bộ. Máy in chưa hề nhả giấy.</li>
    <li><strong>Xác thực định danh người dùng (User Authentication):</strong> Khi cán bộ đến trước bất kỳ máy photocopy nào trong khuôn viên ngân hàng, họ phải quét thẻ nhân viên <strong>RFID (chuẩn Mifare hoặc HID)</strong> lên đầu đọc thẻ tích hợp sẵn, hoặc nhập mã PIN cá nhân trên màn hình cảm ứng 10.1 inch.</li>
    <li><strong>Nhả giấy trực tiếp trước mắt (Secure Release):</strong> Sau khi nhận diện đúng danh tính, màn hình hiển thị danh sách các tài liệu đang chờ in của riêng người đó. Cán bộ chọn in và giấy được nhả ra ngay lập tức, không có độ trễ và không ai khác có thể tiếp cận tài liệu.</li>
    <li><strong>Tự động hủy lệnh in sau thời gian chờ (Auto-Purge):</strong> Nếu sau 24 giờ cán bộ không đến quẹt thẻ lấy tài liệu, máy chủ sẽ tự động xóa vĩnh viễn tệp tin khỏi hàng đợi và gửi email thông báo, vừa bảo mật vừa tiết kiệm giấy mực.</li>
  </ol>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">3. Công Nghệ Đóng Dấu Kỹ Thuật Số Chìm (Digital Watermarking)</h2>
  <p class="text-gray-700 leading-relaxed text-base">
    Ngay cả khi tài liệu đã được in ra trên giấy, rủi ro chụp lén và phát tán ra ngoài vẫn tồn tại. Hương Sơn giải quyết bài toán này bằng công nghệ <strong>Security Watermark</strong> tự động chèn vào nền của từng trang in:
  </p>
  <ul class="list-disc pl-6 space-y-2 text-gray-700 text-base">
    <li>In mờ chéo toàn trang: <strong>Họ tên nhân viên in + Mã số nhân viên (Staff ID) + Ngày giờ in chính xác từng giây + Địa chỉ IP máy tính gửi lệnh</strong>.</li>
    <li>Chèn mã phản hồi nhanh <strong>QR Code ẩn bảo mật</strong> ở góc trang giấy: chứa chữ ký số xác thực nguồn gốc văn bản. Khi phát hiện tài liệu rò rỉ trên mạng xã hội hoặc đối thủ cạnh tranh, bộ phận an ninh ngân hàng chỉ cần quét mã QR là truy vết chính xác danh tính người đã in bản chụp đó chỉ trong 5 giây.</li>
  </ul>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">4. Hệ Thống Audit Log &amp; Chụp Ảnh Nội Dung (Image Log) Phục Vụ Kiểm Toán</h2>
  <p class="text-gray-700 leading-relaxed text-base">
    Theo quy định tại <strong>Nghị định 13/2023/NĐ-CP về Bảo vệ dữ liệu cá nhân</strong> và Thông tư an toàn hệ thống thông tin của Ngân hàng Nhà nước Việt Nam, các tổ chức tín dụng bắt buộc phải lưu trữ nhật ký truy cập và xử lý dữ liệu khách hàng. Hệ thống của Hương Sơn cung cấp:
  </p>
  <div class="overflow-x-auto my-6">
    <table class="w-full text-left border-collapse border border-gray-200 text-sm">
      <thead class="bg-gray-100 text-gray-900 font-bold">
        <tr>
          <th class="p-3.5 border border-gray-200">Trường Nhật Ký (Audit Log)</th>
          <th class="p-3.5 border border-gray-200">Dữ Liệu Thu Thập</th>
          <th class="p-3.5 border border-gray-200">Ý Nghĩa An Ninh Kiểm Toán</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200 text-gray-700">
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">User &amp; Department</td>
          <td class="p-3.5 border border-gray-200">ID cán bộ, Chức danh, Phòng giao dịch</td>
          <td class="p-3.5 border border-gray-200">Xác định trách nhiệm cá nhân trực tiếp</td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">Action &amp; Device</td>
          <td class="p-3.5 border border-gray-200">In, Photo, Scan to Email, Scan to Folder</td>
          <td class="p-3.5 border border-gray-200">Giám sát hành vi xuất dữ liệu ra ngoài</td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">Document Name &amp; Pages</td>
          <td class="p-3.5 border border-gray-200">Tên file, Số trang in, Kích thước khổ giấy</td>
          <td class="p-3.5 border border-gray-200">Kiểm soát dung lượng và hạn ngạch in ấn</td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">Image Log (Ảnh chụp)</td>
          <td class="p-3.5 border border-gray-200">Bản sao hình ảnh thumbnail của tài liệu</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">Bằng chứng pháp lý phục vụ điều tra gian lận</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- FAQ Section -->
  <h2 class="text-2xl font-bold text-[#181923] tracking-tight pt-4">Câu Hỏi Thường Gặp Về Bảo Mật In Ấn Ngân Hàng (FAQs)</h2>
  <div class="space-y-4 my-6 not-prose">
    <div class="border border-gray-200 rounded-lg p-5 bg-white">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <i class="fa-regular fa-circle-question text-[#1A9900]"></i>
        Cơ chế Follow-Me Printing (Pull Printing) hoạt động như thế nào trong môi trường ngân hàng?
      </h3>
      <p class="text-sm text-gray-600 leading-relaxed pl-6">
        Khi nhân viên ngân hàng bấm 'Print' từ máy tính cá nhân, tài liệu không được in ra ngay lập tức mà được mã hóa theo chuẩn AES-256 bit và đẩy vào một hàng đợi bảo mật trên máy chủ nội bộ. Nhân viên có thể di chuyển đến bất kỳ máy photocopy nào trong tòa nhà hoặc chi nhánh, quẹt thẻ nhân viên RFID lên đầu đọc thẻ gắn trên máy. Hệ thống nhận diện danh tính và lúc đó máy mới nhả giấy ngay trước mắt nhân viên, triệt tiêu 100% nguy cơ tài liệu mật bị bỏ quên trên khay giấy.
      </p>
    </div>
    <div class="border border-gray-200 rounded-lg p-5 bg-white">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <i class="fa-regular fa-circle-question text-[#1A9900]"></i>
        Máy photocopy có thể phát hiện và ngăn chặn việc photo hoặc scan trái phép tài liệu mật không?
      </h3>
      <p class="text-sm text-gray-600 leading-relaxed pl-6">
        Có. Các dòng máy photocopy cao cấp Toshiba và Konica Minolta do Hương Sơn cung cấp được tích hợp tính năng Document Security Copy Protection. Khi máy phát hiện mẫu hoa văn bảo mật ẩn (Security Watermark) trên văn bản gốc, máy sẽ tự động khóa chức năng photo/scan và gửi cảnh báo tức thì tới bộ phận an ninh thông tin, hoặc in ra bản photo toàn màu đen mờ không thể đọc được.
      </p>
    </div>
    <div class="border border-gray-200 rounded-lg p-5 bg-white">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <i class="fa-regular fa-circle-question text-[#1A9900]"></i>
        Tính năng Image Log có làm giảm hiệu năng hoạt động của máy photocopy không?
      </h3>
      <p class="text-sm text-gray-600 leading-relaxed pl-6">
        Hoàn toàn không. Hệ thống sử dụng một vi xử lý chuyên biệt và ổ cứng SSD riêng để sao chép hình ảnh thu nhỏ (thumbnail độ phân giải cao) của mọi trang in, photo và scan gửi ngầm về kho lưu trữ tập trung của ngân hàng mà không làm nghẽn tốc độ in ấn thực tế của người dùng.
      </p>
    </div>
  </div>

  """ + AUTHOR_BOX_HTML + """
</div>"""
}

BATCH_1_POSTS = [POST_6, POST_7, POST_8]
print(f"make_posts_batch1.py hoàn tất: {len(BATCH_1_POSTS)} bài viết.")
