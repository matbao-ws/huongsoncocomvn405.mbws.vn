# -*- coding: utf-8 -*-
"""Batch 2: Posts 9, 10, 11 (MPS Chuỗi chi nhánh ngân hàng, So sánh thuê vs mua máy photocopy, Bảo trì ngăn ngừa & SLA <= 2h)"""
from scripts.articles.make_posts_batch1 import AUTHOR_BOX_HTML

POST_9 = {
    "id": 14,
    "slug": "dich-vu-quan-ly-in-an-mps-cho-chuoi-chi-nhanh-ngan-hang-tai-chinh",
    "category_id": 2,
    "category_name": "Ngân Hàng & Bảo Mật",
    "title": "Mô Hình Managed Print Services (MPS) Cho Chuỗi Chi Nhánh Ngân Hàng & Tập Đoàn Tài Chính Đa Điểm",
    "seo_title": "Dịch Vụ Quản Lý In Ấn MPS Cho Ngân Hàng & Tài Chính | Hương Sơn",
    "seo_desc": "Giải pháp Managed Print Services (MPS) tối ưu hóa hạ tầng in ấn đa chi nhánh ngân hàng: giám sát mực in từ xa qua SNMP, tự động giao vật tư và cắt giảm 30% chi phí TCO.",
    "keywords": "managed print services, mps ngân hàng, quản lý in ấn đa chi nhánh, phần mềm quản lý máy photocopy, giám sát mực in snmp, tối ưu chi phí in ấn ngân hàng, hương sơn mps",
    "published_at": "2026-10-06 10:00:00",
    "image_url": "/assets/images/banners/hero_office_solutions_1787899910391.jpg",
    "reading_time": "12 phút đọc",
    "tag": "Ngân Hàng & Bảo Mật",
    "summary": "Giải pháp dịch vụ quản lý in ấn toàn diện Managed Print Services (MPS) chuyên biệt cho hệ thống ngân hàng thương mại: giám sát từ xa hàng trăm thiết bị qua giao thức SNMP an toàn, tự động điều phối vật tư mực in trước khi cạn kiệt, kiểm soát hạn ngạch in theo phòng ban và cắt giảm 25% – 35% chi phí vận hành hàng năm.",
    "aeo_answer": "Managed Print Services (MPS) của Hương Sơn là giải pháp quản lý toàn diện hạ tầng in ấn cho chuỗi chi nhánh ngân hàng: Giám sát trạng thái thiết bị từ xa qua giao thức bảo mật SNMP (không đọc nội dung in), tự động phát hiện mực sắp hết dưới 15% để giao mực dự phòng tận nơi; phân bổ hạn ngạch in ấn (Quota) theo phòng ban, giúp ngân hàng cắt giảm 25% – 35% tổng chi phí in ấn và loại bỏ 100% gánh nặng quản lý cho bộ phận CNTT.",
    "faqs": [
        {
            "q": "Giao thức SNMP giám sát từ xa của Hương Sơn có đọc lén nội dung tài liệu của ngân hàng không?",
            "a": "Tuyệt đối không. Giao thức SNMP (Simple Network Management Protocol v3) chỉ đọc các biến trạng thái phần cứng của thiết bị (MIB - Management Information Base) như: phần trăm dung lượng mực còn lại, số counter bản chụp, mã lỗi kẹt giấy, nhiệt độ lô sấy. Giao thức này hoàn toàn không có quyền truy cập vào luồng dữ liệu hình ảnh (Data Stream) hay nội dung tài liệu mà người dùng in ấn."
        },
        {
            "q": "Mô hình MPS giúp ngân hàng kiểm soát việc lãng phí in màu như thế nào?",
            "a": "Hệ thống quản lý MPS cho phép IT Admin thiết lập quy tắc tự động (Rule-Based Printing): tự động chuyển mọi email Outlook và trang web sang chế độ in đen trắng 2 mặt; chỉ cho phép các phòng ban đặc thù (như Marketing, Ban Giám đốc) in màu; và yêu cầu phê duyệt điện tử của trưởng phòng khi in các tệp tài liệu vượt quá 50 trang."
        },
        {
            "q": "Ngân hàng có phải trả thêm chi phí mua bản quyền phần mềm quản trị in ấn không?",
            "a": "Trong gói hợp đồng thuê máy photocopy MPS trọn gói của Hương Sơn, toàn bộ phần mềm giám sát thiết bị, license kết nối và dịch vụ bảo trì định kỳ đã được trọn gói trong đơn giá thuê bản chụp hàng tháng (0đ phí license ban đầu)."
        }
    ],
    "content_html": """<div class="space-y-8 text-[#181923]">
  <!-- AEO Direct Answer Box -->
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-network-wired text-base"></i>
      <span>Đáp án nhanh (AEO Direct Answer)</span>
    </div>
    <p class="text-gray-800 text-[15px] leading-relaxed font-medium mb-3">
      Managed Print Services (MPS) của Hương Sơn là giải pháp quản lý toàn diện hạ tầng in ấn cho chuỗi chi nhánh ngân hàng: Giám sát trạng thái thiết bị từ xa qua giao thức bảo mật SNMP (không đọc nội dung in), tự động phát hiện mực sắp hết dưới 15% để giao mực dự phòng tận nơi; phân bổ hạn ngạch in ấn (Quota) theo phòng ban, giúp ngân hàng cắt giảm 25% – 35% tổng chi phí in ấn và loại bỏ 100% gánh nặng quản lý cho bộ phận CNTT.
    </p>
    <div class="text-xs text-gray-500 flex flex-wrap gap-4 pt-2 border-t border-emerald-200/60">
      <span><i class="fa-solid fa-check text-[#1A9900] mr-1"></i>Giám sát tự động SNMP v3</span>
      <span><i class="fa-solid fa-check text-[#1A9900] mr-1"></i>Tiết kiệm 25% - 35% chi phí</span>
      <span><i class="fa-solid fa-check text-[#1A9900] mr-1"></i>SLA ≤ 2h toàn mạng lưới</span>
    </div>
  </div>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">1. Thách Thức Vận Hành Hạ Tầng In Ấn Tại Hệ Thống Ngân Hàng Đa Điểm</h2>
  <p class="text-gray-700 leading-relaxed text-base">
    Một ngân hàng thương mại quy mô vừa và lớn tại Việt Nam thường sở hữu từ 100 đến hơn 500 điểm giao dịch phân bố trên khắp các tỉnh thành. Tại mỗi phòng giao dịch, nhu cầu in hợp đồng tín dụng, phiếu thu chi, sao kê tài khoản diễn ra liên tục từng phút. Tuy nhiên, mô hình quản lý thiết bị in ấn truyền thống đang bộc lộ những bất cập nghiêm trọng:
  </p>
  <ul class="list-disc pl-6 space-y-2.5 text-gray-700 text-base">
    <li><strong>Mua sắm phân tán, không đồng bộ:</strong> Mỗi chi nhánh tự mua máy in, máy photocopy của các hãng khác nhau (HP, Canon, Toshiba, Ricoh), dẫn đến việc tồn kho hàng chục loại hộp mực khác nhau, gây lãng phí dòng tiền.</li>
    <li><strong>Bộ phận IT bị quá tải vì sự cố văn phòng:</strong> Chuyên viên CNTT tại các chi nhánh mất tới 30% quỹ thời gian làm việc chỉ để đi gỡ giấy kẹt, thay hộp mực hoặc cài đặt driver máy in cho giao dịch viên.</li>
    <li><strong>Thiếu khả năng giám sát chi phí:</strong> Ban Giám đốc không thể biết chính xác mỗi phòng ban tiêu tốn bao nhiêu ram giấy, bao nhiêu tiền mực mỗi tháng, dẫn đến tình trạng in tài liệu cá nhân bừa bãi và lãng phí in màu không thể kiểm soát.</li>
  </ul>

  <figure class="my-8 not-prose">
    <img src="/assets/images/banners/hero_office_solutions_1787899910391.jpg" alt="Giải pháp Managed Print Services cho khối văn phòng và chi nhánh ngân hàng" class="w-full h-auto rounded-lg shadow-md border border-gray-200" />
    <figcaption class="text-center text-xs text-gray-500 mt-2 italic font-sans">
      Hệ thống quản lý in ấn tập trung MPS giúp ngân hàng kiểm soát toàn bộ đội máy photocopy đa chi nhánh trên một giao diện web duy nhất.
    </figcaption>
  </figure>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">2. 4 Trụ Cột Trong Mô Hình MPS Của Hương Sơn</h2>
  <p class="text-gray-700 leading-relaxed text-base">
    <strong>Managed Print Services (MPS)</strong> do Hương Sơn thiết kế riêng cho khối ngân hàng và tài chính hoạt động trên 4 trụ cột công nghệ:
  </p>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-6 not-prose">
    <div class="border border-gray-200 bg-white p-5 rounded-lg shadow-xs">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <span class="w-7 h-7 bg-[#1A9900] text-white rounded flex items-center justify-center text-xs">1</span>
        Chuẩn Hóa Đội Máy Thiết Bị (Fleet Optimization)
      </h3>
      <p class="text-xs text-gray-600 leading-relaxed">
        Thay thế toàn bộ các máy in đơn năng nhỏ lẻ, đắt đỏ bằng các tổ hợp máy photocopy đa chức năng (MFP) A3 hiện đại của Toshiba và Konica Minolta. Giảm 40% số lượng thiết bị phần cứng trong văn phòng mà vẫn tăng 200% năng suất in ấn.
      </p>
    </div>
    <div class="border border-gray-200 bg-white p-5 rounded-lg shadow-xs">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <span class="w-7 h-7 bg-[#1A9900] text-white rounded flex items-center justify-center text-xs">2</span>
        Giám Sát Tự Động &amp; Giao Mực Chủ Động (Proactive Supply)
      </h3>
      <p class="text-xs text-gray-600 leading-relaxed">
        Phần mềm giám sát từ xa qua SNMP theo dõi dung lượng mực theo thời gian thực. Khi mực giảm xuống dưới ngưỡng 15%, hệ thống tự động sinh phiếu điều vận kho và kỹ thuật viên Hương Sơn sẽ giao mực dự phòng đến tận quầy giao dịch trước 24 giờ.
      </p>
    </div>
    <div class="border border-gray-200 bg-white p-5 rounded-lg shadow-xs">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <span class="w-7 h-7 bg-[#1A9900] text-white rounded flex items-center justify-center text-xs">3</span>
        Phân Quyền &amp; Thiết Lập Hạn Ngạch In (Print Quota)
      </h3>
      <p class="text-xs text-gray-600 leading-relaxed">
        Thiết lập định mức trang in hàng tháng cho từng phòng ban (Tín dụng, Kế toán, Khách hàng cá nhân). Ép chế độ in 2 mặt (Duplex) mặc định cho 100% tài liệu và chỉ kích hoạt in màu khi có phê duyệt từ cấp quản lý.
      </p>
    </div>
    <div class="border border-gray-200 bg-white p-5 rounded-lg shadow-xs">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <span class="w-7 h-7 bg-[#1A9900] text-white rounded flex items-center justify-center text-xs">4</span>
        Báo Cáo Phân Tích &amp; Tối Ưu Chi Phí Định Kỳ
      </h3>
      <p class="text-xs text-gray-600 leading-relaxed">
        Hàng tháng, hệ thống tự động xuất báo cáo chi tiết về số lượng bản chụp, tỷ lệ in màu/đen trắng, các điểm in quá tải và đề xuất phương án điều chuyển thiết bị giữa các phòng ban để tối ưu hóa công suất máy.
      </p>
    </div>
  </div>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">3. Bảng Đối Chiếu Hiệu Quả Trước Và Sau Khi Ứng Dụng MPS</h2>
  <div class="overflow-x-auto my-6">
    <table class="w-full text-left border-collapse border border-gray-200 text-sm">
      <thead class="bg-gray-100 text-gray-900 font-bold">
        <tr>
          <th class="p-3.5 border border-gray-200">Tiêu Chí Đánh Giá</th>
          <th class="p-3.5 border border-gray-200">Mô Hình Cũ (Tự Mua Sắm &amp; Tự Sửa)</th>
          <th class="p-3.5 border border-gray-200">Mô Hình MPS Trọn Gói Hương Sơn</th>
          <th class="p-3.5 border border-gray-200">Mức Độ Cải Thiện</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200 text-gray-700">
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">Chi phí đầu tư ban đầu (CapEx)</td>
          <td class="p-3.5 border border-gray-200 text-red-600">60 - 100 triệu VNĐ/máy</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">0 VNĐ (Không cần vốn)</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">Tiết kiệm 100% CapEx</td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">Thời gian máy ngừng hoạt động (Downtime)</td>
          <td class="p-3.5 border border-gray-200">2 - 3 ngày chờ gọi thợ sửa</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">≤ 2 giờ kỹ thuật có mặt</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">Giảm 95% thời gian chết</td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">Thời gian IT nội bộ xử lý máy in</td>
          <td class="p-3.5 border border-gray-200">20 - 30 giờ/tháng/chi nhánh</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">0 giờ (Hương Sơn lo 100%)</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">Giải phóng 100% IT</td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">Tỷ lệ lãng phí giấy &amp; mực</td>
          <td class="p-3.5 border border-gray-200">25% - 35% do in bừa bãi</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">&lt; 3% nhờ kiểm soát Quota</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">Tiết kiệm 30% chi phí</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- FAQ Section -->
  <h2 class="text-2xl font-bold text-[#181923] tracking-tight pt-4">Câu Hỏi Thường Gặp Về Dịch Vụ MPS Ngân Hàng (FAQs)</h2>
  <div class="space-y-4 my-6 not-prose">
    <div class="border border-gray-200 rounded-lg p-5 bg-white">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <i class="fa-regular fa-circle-question text-[#1A9900]"></i>
        Giao thức SNMP giám sát từ xa của Hương Sơn có đọc lén nội dung tài liệu của ngân hàng không?
      </h3>
      <p class="text-sm text-gray-600 leading-relaxed pl-6">
        Tuyệt đối không. Giao thức SNMP (Simple Network Management Protocol v3) chỉ đọc các biến trạng thái phần cứng của thiết bị (MIB - Management Information Base) như: phần trăm dung lượng mực còn lại, số counter bản chụp, mã lỗi kẹt giấy, nhiệt độ lô sấy. Giao thức này hoàn toàn không có quyền truy cập vào luồng dữ liệu hình ảnh (Data Stream) hay nội dung tài liệu mà người dùng in ấn.
      </p>
    </div>
    <div class="border border-gray-200 rounded-lg p-5 bg-white">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <i class="fa-regular fa-circle-question text-[#1A9900]"></i>
        Mô hình MPS giúp ngân hàng kiểm soát việc lãng phí in màu như thế nào?
      </h3>
      <p class="text-sm text-gray-600 leading-relaxed pl-6">
        Hệ thống quản lý MPS cho phép IT Admin thiết lập quy tắc tự động (Rule-Based Printing): tự động chuyển mọi email Outlook và trang web sang chế độ in đen trắng 2 mặt; chỉ cho phép các phòng ban đặc thù (như Marketing, Ban Giám đốc) in màu; và yêu cầu phê duyệt điện tử của trưởng phòng khi in các tệp tài liệu vượt quá 50 trang.
      </p>
    </div>
    <div class="border border-gray-200 rounded-lg p-5 bg-white">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <i class="fa-regular fa-circle-question text-[#1A9900]"></i>
        Ngân hàng có phải trả thêm chi phí mua bản quyền phần mềm quản trị in ấn không?
      </h3>
      <p class="text-sm text-gray-600 leading-relaxed pl-6">
        Trong gói hợp đồng thuê máy photocopy MPS trọn gói của Hương Sơn, toàn bộ phần mềm giám sát thiết bị, license kết nối và dịch vụ bảo trì định kỳ đã được trọn gói trong đơn giá thuê bản chụp hàng tháng (0đ phí license ban đầu).
      </p>
    </div>
  </div>

  """ + AUTHOR_BOX_HTML + """
</div>"""
}

POST_10 = {
    "id": 15,
    "slug": "so-sanh-thue-va-mua-may-photocopy-bai-toan-tai-chinh-doanh-nghiep",
    "category_id": 3,
    "category_name": "Chiến Lược & Dịch Vụ",
    "title": "Nên Thuê Hay Mua Máy Photocopy? Phân Tích Bài Toán Dòng Tiền, Khấu Hao & Tối Ưu Thuế Doanh Nghiệp 2026",
    "seo_title": "Nên Thuê Hay Mua Máy Photocopy? Bài Toán Tài Chính & Thuế | Hương Sơn",
    "seo_desc": "Phân tích tài chính chuyên sâu giữa thuê và mua máy photocopy văn phòng: bài toán dòng tiền CapEx vs OpEx, khấu hao tài sản, tối ưu thuế TNDN và phân tích TCO 3 năm.",
    "keywords": "nên thuê hay mua máy photocopy, so sánh thuê và mua máy photocopy, chi phí tco máy photocopy, khấu hao máy photocopy, tối ưu thuế doanh nghiệp thuê máy, bài toán tài chính cfo",
    "published_at": "2026-10-06 10:30:00",
    "image_url": "/assets/images/hero-office.jpg",
    "reading_time": "13 phút đọc",
    "tag": "Chiến Lược & Dịch Vụ",
    "summary": "So sánh toàn diện giữa mô hình mua đứt máy photocopy truyền thống và giải pháp thuê máy trọn gói hiện đại dưới góc độ giám đốc tài chính CFO: phân tích bài toán dòng tiền 3 năm, tối ưu hóa thuế thu nhập doanh nghiệp, loại bỏ rủi ro chi phí chìm sửa chữa và bảo vệ nguồn vốn lưu động của doanh nghiệp.",
    "aeo_answer": "So sánh tài chính giữa thuê và mua máy photocopy: Mua đứt đòi hỏi vốn đầu tư ban đầu CapEx lớn (50–120 triệu đồng/máy), thời gian khấu hao 3–5 năm, chịu toàn bộ rủi ro linh kiện bo mạch hỏng hóc và lỗi thời công nghệ; trong khi Thuê máy trọn gói (OpEx) có chi phí ban đầu 0đ, chi phí thuê hàng tháng được đưa thẳng vào chi phí quản lý doanh nghiệp hợp lý được trừ thuế TNDN, miễn phí 100% mực in và linh kiện thay thế, kỹ thuật viên bảo trì tận nơi trong ≤ 2 giờ.",
    "faqs": [
        {
            "q": "Tại sao thuê máy photocopy lại giúp doanh nghiệp tối ưu hóa thuế TNDN tốt hơn mua đứt?",
            "a": "Khi mua đứt máy photocopy, doanh nghiệp phải trích khấu hao tài sản cố định trong thời gian dài (thường từ 3 đến 5 năm theo Thông tư 45/2013/TT-BTC), làm chậm việc thu hồi chi phí. Khi thuê máy, toàn bộ hóa đơn VAT tiền thuê và số bản chụp hàng tháng được hạch toán thẳng 100% vào chi phí quản lý hợp lý của kỳ kế toán đó, giúp giảm ngay số thuế TNDN phải nộp trong năm mà không phải theo dõi tài sản khấu hao phức tạp."
        },
        {
            "q": "Nếu trong thời gian thuê máy photocopy mà nhu cầu in ấn tăng đột biến thì có được đổi máy công suất lớn hơn không?",
            "a": "Hoàn toàn được. Đây là lợi thế linh hoạt lớn nhất của dịch vụ thuê máy tại Hương Sơn. Nếu doanh nghiệp mở rộng quy mô, tuyển thêm nhân sự hoặc có dự án lớn ngắn hạn, Hương Sơn sẽ điều động nâng cấp máy photocopy tốc độ cao hơn (từ 25 trang/phút lên 45–65 trang/phút) chỉ trong 24 giờ với chi phí điều chỉnh tương ứng, không làm lãng phí thiết bị cũ."
        },
        {
            "q": "Doanh nghiệp nào thì nên mua đứt và doanh nghiệp nào nên thuê máy photocopy?",
            "a": "Doanh nghiệp chỉ nên mua đứt khi có nguồn vốn tự có dồi dào, nhu cầu in ấn cực kỳ ít (dưới 1.000 trang/tháng) và không quan trọng thời gian gián đoạn khi máy hỏng. Ngược lại, hơn 85% doanh nghiệp hiện đại, ngân hàng, trường học và cơ quan có nhu cầu in ấn từ 3.000 trang/tháng trở lên đều chọn giải pháp thuê trọn gói để giữ dòng tiền kinh doanh và được đảm bảo kỹ thuật 24/7."
        }
    ],
    "content_html": """<div class="space-y-8 text-[#181923]">
  <!-- AEO Direct Answer Box -->
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-coins text-base"></i>
      <span>Đáp án nhanh (AEO Direct Answer)</span>
    </div>
    <p class="text-gray-800 text-[15px] leading-relaxed font-medium mb-3">
      So sánh tài chính giữa thuê và mua máy photocopy: Mua đứt đòi hỏi vốn đầu tư ban đầu CapEx lớn (50–120 triệu đồng/máy), thời gian khấu hao 3–5 năm, chịu toàn bộ rủi ro linh kiện bo mạch hỏng hóc và lỗi thời công nghệ; trong khi Thuê máy trọn gói (OpEx) có chi phí ban đầu 0đ, chi phí thuê hàng tháng được đưa thẳng vào chi phí quản lý doanh nghiệp hợp lý được trừ thuế TNDN, miễn phí 100% mực in và linh kiện thay thế, kỹ thuật viên bảo trì tận nơi trong ≤ 2 giờ.
    </p>
    <div class="text-xs text-gray-500 flex flex-wrap gap-4 pt-2 border-t border-emerald-200/60">
      <span><i class="fa-solid fa-check text-[#1A9900] mr-1"></i>0đ Vốn đầu tư ban đầu</span>
      <span><i class="fa-solid fa-check text-[#1A9900] mr-1"></i>Khấu trừ 100% chi phí thuế TNDN</span>
      <span><i class="fa-solid fa-check text-[#1A9900] mr-1"></i>Miễn phí toàn bộ mực &amp; linh kiện</span>
    </div>
  </div>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">1. Quyết Định Của CFO: Mua Đứt Hay Thuê Trọn Gói?</h2>
  <p class="text-gray-700 leading-relaxed text-base">
    Trong bối cảnh nền kinh tế đối mặt với nhiều biến động khó lường, việc quản trị dòng tiền (Cash Flow) và tối ưu hóa chi phí vận hành trở thành ưu tiên sống còn của mọi Giám đốc Tài chính (CFO) và chủ doanh nghiệp. Một câu hỏi kinh điển luôn được đặt ra mỗi khi văn phòng cần trang bị thiết bị in ấn: <strong>"Nên chi hàng chục triệu để mua đứt máy photocopy hay chuyển sang thuê dịch vụ trọn gói hàng tháng?"</strong>
  </p>
  <p class="text-gray-700 leading-relaxed text-base">
    Nhiều nhà quản lý theo tư duy truyền thống cho rằng: <em>"Mua máy là có tài sản sở hữu của mình, còn thuê máy là mất tiền đi mà chẳng được gì"</em>. Tuy nhiên, trên bảng cân đối kế toán hiện đại, máy photocopy là <strong>tài sản khấu hao nhanh (Depreciating Asset)</strong> chứ không phải tài sản sinh lời gia tăng giá trị. Hãy cùng Hương Sơn bóc tách bài toán tổng chi phí sở hữu (Total Cost of Ownership - TCO) để nhìn rõ sự thật tài chính.
  </p>

  <figure class="my-8 not-prose">
    <img src="/assets/images/hero-office.jpg" alt="Phân tích bài toán thuê hay mua máy photocopy cho doanh nghiệp hiện đại" class="w-full h-auto rounded-lg shadow-md border border-gray-200" />
    <figcaption class="text-center text-xs text-gray-500 mt-2 italic font-sans">
      Thuê máy photocopy giúp doanh nghiệp bảo toàn dòng tiền lưu động cho các hoạt động kinh doanh cốt lõi.
    </figcaption>
  </figure>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">2. Những "Chi Phí Chìm" Vô Hình Khi Doanh Nghiệp Mua Máy</h2>
  <p class="text-gray-700 leading-relaxed text-base">
    Khi mua một chiếc máy photocopy đa chức năng A3 mới (ví dụ Toshiba e-STUDIO 3528A hoặc Konica Minolta bizhub 360i), số tiền <strong>60 – 80 triệu đồng</strong> chi trả ban đầu chỉ là "phần nổi của tảng băng chìm". Sau 1 năm vận hành, các chi phí chìm bắt đầu xuất hiện dày đặc:
  </p>
  <ul class="list-disc pl-6 space-y-2.5 text-gray-700 text-base">
    <li><strong>Chi phí mực in tiêu hao định kỳ:</strong> Một doanh nghiệp in khoảng 8.000 bản/tháng sẽ tiêu tốn 1.5 - 2 bình mực/tháng. Với giá mực chính hãng 1.200.000đ/bình, mỗi năm doanh nghiệp tốn thêm 20 - 25 triệu tiền mực.</li>
    <li><strong>Chi phí thay thế cụm linh kiện hao mòn:</strong> Sau 80.000 – 120.000 bản in, các bộ phận như Cụm Drum (Trống từ), Gạt mực, Bột từ (Developer), Cụm sấy (Fuser Unit) và Bánh cao su kéo giấy bắt buộc phải thay thế. Tổng chi phí thay dàn linh kiện này có thể lên tới <strong>15 – 25 triệu đồng/lần</strong>.</li>
    <li><strong>Rủi ro hỏng bo mạch điện tử:</strong> Khí hậu nồm ẩm đặc trưng tại miền Bắc là "kẻ thù số một" của bo mạch máy photocopy. Nếu bo mạch nguồn hoặc mainboard chính bị chập cháy do sét đánh hoặc ẩm ướt, chi phí thay thế chiếm tới 40% giá trị chiếc máy.</li>
    <li><strong>Chi phí vô hình từ gián đoạn công việc (Downtime):</strong> Mỗi lần máy hỏng, doanh nghiệp mất 2-3 ngày chờ thợ ngoài đến kiểm tra, báo giá, trình ký phê duyệt mua linh kiện. Trong thời gian đó, hợp đồng kinh doanh không thể in ký, khách hàng phàn nàn, năng suất cả văn phòng bị đình trệ.</li>
  </ul>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">3. Bảng Tính Dòng Tiền TCO So Sánh Trong 3 Năm (36 Tháng)</h2>
  <p class="text-gray-700 leading-relaxed text-base">
    Giả định một văn phòng quy mô 60 nhân sự với sản lượng in trung bình <strong>6.000 bản chụp/tháng</strong>:
  </p>
  <div class="overflow-x-auto my-6">
    <table class="w-full text-left border-collapse border border-gray-200 text-sm">
      <thead class="bg-gray-100 text-gray-900 font-bold">
        <tr>
          <th class="p-3.5 border border-gray-200">Khoản Mục Chi Phí (36 tháng)</th>
          <th class="p-3.5 border border-gray-200">Phương Án 1: MUA ĐỨT MÁY MỚI</th>
          <th class="p-3.5 border border-gray-200">Phương Án 2: THUÊ TRỌN GÓI HƯƠNG SƠN</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200 text-gray-700">
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">Vốn đầu tư thiết bị ban đầu</td>
          <td class="p-3.5 border border-gray-200 text-red-600 font-bold">75.000.000 VNĐ</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">0 VNĐ (Không cần vốn)</td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">Tiền thuê máy trọn gói (36 tháng)</td>
          <td class="p-3.5 border border-gray-200">0 VNĐ</td>
          <td class="p-3.5 border border-gray-200 font-semibold">43.200.000 VNĐ (1.200.000đ/tháng)</td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">Chi phí mực in tiêu hao (3 năm)</td>
          <td class="p-3.5 border border-gray-200 text-red-600">38.000.000 VNĐ</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">0 VNĐ (Hương Sơn cấp miễn phí)</td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">Chi phí thay Drum, gạt, bột từ, sấy</td>
          <td class="p-3.5 border border-gray-200 text-red-600">22.000.000 VNĐ</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">0 VNĐ (Hương Sơn thay miễn phí)</td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">Chi phí bảo trì, sửa chữa, nhân công</td>
          <td class="p-3.5 border border-gray-200 text-red-600">10.800.000 VNĐ (300.000đ/tháng)</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">0 VNĐ (Cam kết SLA ≤ 2h)</td>
        </tr>
        <tr class="hover:bg-gray-50 bg-gray-50/80">
          <td class="p-3.5 border border-gray-200 font-bold text-gray-900">TỔNG CHI PHÍ THỰC TẾ (3 NĂM)</td>
          <td class="p-3.5 border border-gray-200 font-bold text-red-600 text-base">145.800.000 VNĐ</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900] text-base">43.200.000 VNĐ</td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-semibold">Giá trị thanh lý máy cũ sau 3 năm</td>
          <td class="p-3.5 border border-gray-200 text-gray-600">(+12.000.000 VNĐ)</td>
          <td class="p-3.5 border border-gray-200 text-gray-600">0 VNĐ (Được đổi máy đời mới)</td>
        </tr>
        <tr class="hover:bg-emerald-50 bg-emerald-50/50">
          <td class="p-3.5 border border-gray-200 font-bold text-gray-900">CHI PHÍ RÒNG SAU 3 NĂM</td>
          <td class="p-3.5 border border-gray-200 font-bold text-red-700 text-lg">133.800.000 VNĐ</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900] text-lg">43.200.000 VNĐ</td>
        </tr>
      </tbody>
    </table>
  </div>
  <p class="text-gray-700 leading-relaxed text-base font-semibold text-emerald-800">
    👉 Kết luận tài chính: Thuê máy photocopy giúp doanh nghiệp tiết kiệm tới 90.600.000 VNĐ (tương đương giảm 67.7% chi phí) so với mua đứt, đồng thời giải phóng 75 triệu tiền vốn ngay từ ngày đầu tiên!
  </p>

  <!-- FAQ Section -->
  <h2 class="text-2xl font-bold text-[#181923] tracking-tight pt-4">Câu Hỏi Thường Gặp Của Lãnh Đạo &amp; Kế Toán (FAQs)</h2>
  <div class="space-y-4 my-6 not-prose">
    <div class="border border-gray-200 rounded-lg p-5 bg-white">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <i class="fa-regular fa-circle-question text-[#1A9900]"></i>
        Tại sao thuê máy photocopy lại giúp doanh nghiệp tối ưu hóa thuế TNDN tốt hơn mua đứt?
      </h3>
      <p class="text-sm text-gray-600 leading-relaxed pl-6">
        Khi mua đứt máy photocopy, doanh nghiệp phải trích khấu hao tài sản cố định trong thời gian dài (thường từ 3 đến 5 năm theo Thông tư 45/2013/TT-BTC), làm chậm việc thu hồi chi phí. Khi thuê máy, toàn bộ hóa đơn VAT tiền thuê và số bản chụp hàng tháng được hạch toán thẳng 100% vào chi phí quản lý hợp lý của kỳ kế toán đó, giúp giảm ngay số thuế TNDN phải nộp trong năm mà không phải theo dõi tài sản khấu hao phức tạp.
      </p>
    </div>
    <div class="border border-gray-200 rounded-lg p-5 bg-white">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <i class="fa-regular fa-circle-question text-[#1A9900]"></i>
        Nếu trong thời gian thuê máy photocopy mà nhu cầu in ấn tăng đột biến thì có được đổi máy công suất lớn hơn không?
      </h3>
      <p class="text-sm text-gray-600 leading-relaxed pl-6">
        Hoàn toàn được. Đây là lợi thế linh hoạt lớn nhất của dịch vụ thuê máy tại Hương Sơn. Nếu doanh nghiệp mở rộng quy mô, tuyển thêm nhân sự hoặc có dự án lớn ngắn hạn, Hương Sơn sẽ điều động nâng cấp máy photocopy tốc độ cao hơn (từ 25 trang/phút lên 45–65 trang/phút) chỉ trong 24 giờ với chi phí điều chỉnh tương ứng, không làm lãng phí thiết bị cũ.
      </p>
    </div>
    <div class="border border-gray-200 rounded-lg p-5 bg-white">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <i class="fa-regular fa-circle-question text-[#1A9900]"></i>
        Doanh nghiệp nào thì nên mua đứt và doanh nghiệp nào nên thuê máy photocopy?
      </h3>
      <p class="text-sm text-gray-600 leading-relaxed pl-6">
        Doanh nghiệp chỉ nên mua đứt khi có nguồn vốn tự có dồi dào, nhu cầu in ấn cực kỳ ít (dưới 1.000 trang/tháng) và không quan trọng thời gian gián đoạn khi máy hỏng. Ngược lại, hơn 85% doanh nghiệp hiện đại, ngân hàng, trường học và cơ quan có nhu cầu in ấn từ 3.000 trang/tháng trở lên đều chọn giải pháp thuê trọn gói để giữ dòng tiền kinh doanh và được đảm bảo kỹ thuật 24/7.
      </p>
    </div>
  </div>

  """ + AUTHOR_BOX_HTML + """
</div>"""
}

POST_11 = {
    "id": 16,
    "slug": "quy-trinh-bao-tri-ngan-ngua-va-cam-ket-sla-ky-thuat-duoi-2-gio",
    "category_id": 3,
    "category_name": "Chiến Lược & Dịch Vụ",
    "title": "Quy Trình Bảo Trì Ngăn Ngừa (Preventive Maintenance) & Cam Kết SLA Kỹ Thuật ≤ 2 Giờ Của Hương Sơn",
    "seo_title": "Bảo Trì Ngăn Ngừa & Cam Kết SLA Kỹ Thuật ≤ 2h | Hương Sơn",
    "seo_desc": "Chi tiết quy trình 12 bước bảo trì ngăn ngừa chuẩn Nhật Bản và cam kết chất lượng dịch vụ SLA: có mặt trong 2 giờ, đổi máy mới trong 24 giờ của Hương Sơn.",
    "keywords": "bảo trì ngăn ngừa máy photocopy, preventive maintenance máy văn phòng, sla dịch vụ máy photocopy, cam kết kỹ thuật 2 giờ, sửa chữa máy photocopy hà nội, kỹ sư chính hãng toshiba duplo",
    "published_at": "2026-10-06 11:00:00",
    "image_url": "/assets/images/proof/doi-ngu-ky-thuat-pdi.jpg",
    "reading_time": "11 phút đọc",
    "tag": "Chiến Lược & Dịch Vụ",
    "summary": "Phân tích quy trình 12 bước bảo trì ngăn ngừa định kỳ hàng tháng cho máy photocopy và máy in siêu tốc: làm sạch gương quét quang học, bôi trơn bạc ép sấy chịu nhiệt, căn chỉnh điện áp sạc drum và cơ chế điều động kỹ sư theo vùng địa lý đảm bảo SLA có mặt tại hiện trường trong ≤ 2 giờ.",
    "aeo_answer": "Quy trình bảo trì ngăn ngừa (Preventive Maintenance - PM) của Hương Sơn gồm 12 bước định kỳ hàng tháng: Vệ sinh hệ thống quang học CCD/CIS, làm sạch cụm drum gạt, bôi trơn bạc đỡ lô ép sấy chịu nhiệt, căn chỉnh điện áp cao áp sạc và hiệu chỉnh khe hở bánh xe nạp giấy. Kết hợp mạng lưới kỹ thuật viên phân vùng tại Hà Nội và các tỉnh phía Bắc cam kết Service Level Agreement (SLA): Phản hồi sự cố trong 15 phút, có mặt xử lý tại chỗ ≤ 2 giờ, đổi máy mới tương đương trong 24 giờ nếu lỗi phần cứng nghiêm trọng.",
    "faqs": [
        {
            "q": "Tại sao mô hình bảo trì ngăn ngừa (Preventive Maintenance) lại vượt trội hơn hẳn so với bảo trì khi máy hỏng (Break-Fix)?",
            "a": "Bảo trì Break-Fix là mô hình bị động: doanh nghiệp phải chờ máy bị kẹt giấy, mờ nhòe hoặc cháy chập thì mới gọi thợ đến sửa, dẫn đến thời gian máy chết (Downtime) kéo dài và chi phí sửa chữa đột biến rất cao. Ngược lại, bảo trì ngăn ngừa của Hương Sơn tiến hành kiểm tra, vệ sinh và thay thế trước các linh kiện sắp hết hạn sử dụng hàng tháng, triệt tiêu 95% sự cố bất ngờ trước khi chúng kịp xảy ra."
        },
        {
            "q": "Nếu máy photocopy bị hỏng nặng bo mạch không thể sửa ngay trong ngày thì quyền lợi khách hàng được giải quyết ra sao?",
            "a": "Theo cam kết SLA bằng văn bản của Hương Sơn: Nếu sự cố kỹ thuật không thể khắc phục triệt để tại hiện trường trong vòng 24 giờ, Hương Sơn sẽ lập tức vận chuyển và lắp đặt miễn phí một chiếc máy photocopy khác có thông số kỹ thuật tương đương hoặc cao hơn để khách hàng tiếp tục công việc, không làm gián đoạn dù chỉ 1 ngày."
        },
        {
            "q": "Đội ngũ kỹ thuật viên của Hương Sơn có được đào tạo chính hãng không?",
            "a": "100% kỹ sư cơ điện tử và CNTT của Hương Sơn đều trải qua các khóa huấn luyện chuyên sâu và được cấp chứng chỉ kỹ thuật trực tiếp từ Tập đoàn Duplo (Nhật Bản), Toshiba và Konica Minolta. Chúng tôi nắm vững nguyên lý hoạt động vi mạch và có sẵn kho linh kiện OEM chính hãng tại Hà Nội."
        }
    ],
    "content_html": """<div class="space-y-8 text-[#181923]">
  <!-- AEO Direct Answer Box -->
  <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs my-6 not-prose">
    <div class="flex items-center gap-2 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
      <i class="fa-solid fa-wrench text-base"></i>
      <span>Đáp án nhanh (AEO Direct Answer)</span>
    </div>
    <p class="text-gray-800 text-[15px] leading-relaxed font-medium mb-3">
      Quy trình bảo trì ngăn ngừa (Preventive Maintenance - PM) của Hương Sơn gồm 12 bước định kỳ hàng tháng: Vệ sinh hệ thống quang học CCD/CIS, làm sạch cụm drum gạt, bôi trơn bạc đỡ lô ép sấy chịu nhiệt, căn chỉnh điện áp cao áp sạc và hiệu chỉnh khe hở bánh xe nạp giấy. Kết hợp mạng lưới kỹ thuật viên phân vùng tại Hà Nội và các tỉnh phía Bắc cam kết Service Level Agreement (SLA): Phản hồi sự cố trong 15 phút, có mặt xử lý tại chỗ ≤ 2 giờ, đổi máy mới tương đương trong 24 giờ nếu lỗi phần cứng nghiêm trọng.
    </p>
    <div class="text-xs text-gray-500 flex flex-wrap gap-4 pt-2 border-t border-emerald-200/60">
      <span><i class="fa-solid fa-check text-[#1A9900] mr-1"></i>Quy trình 12 bước chuẩn Nhật Bản</span>
      <span><i class="fa-solid fa-check text-[#1A9900] mr-1"></i>SLA kỹ thuật có mặt ≤ 2 giờ</span>
      <span><i class="fa-solid fa-check text-[#1A9900] mr-1"></i>Đổi máy tương đương trong 24 giờ</span>
    </div>
  </div>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">1. Khác Biệt Giữa "Chữa Cháy" (Break-Fix) Và "Ngăn Ngừa" (Preventive Maintenance)</h2>
  <p class="text-gray-700 leading-relaxed text-base">
    Trong ngành dịch vụ máy văn phòng, hầu hết các đơn vị sửa chữa nhỏ lẻ đều vận hành theo mô hình <strong>Break-Fix (Hỏng đâu sửa đấy)</strong>: Khách hàng dùng máy đến khi kẹt giấy liên tục, bản in đen ngòm hoặc máy bốc khói thì mới hốt hoảng gọi thợ. Kết quả là công việc của cả phòng ban bị đình trệ hàng ngày trời, linh kiện bị hỏng lây lan và chi phí sửa chữa đội lên gấp nhiều lần.
  </p>
  <p class="text-gray-700 leading-relaxed text-base">
    Tại <strong>Hương Sơn</strong>, phương châm hoạt động của chúng tôi là: <strong>"Bảo trì ngăn ngừa chủ động – Triệt tiêu sự cố trước khi chúng xảy ra"</strong>. Bằng việc thực hiện nghiêm ngặt quy trình bảo dưỡng định kỳ hàng tháng, hệ thống máy photocopy và máy in siêu tốc của khách hàng luôn duy trì trạng thái vận hành mượt mà, đạt tuổi thọ tối đa và loại bỏ 95% sự cố kẹt giấy.
  </p>

  <figure class="my-8 not-prose">
    <img src="/assets/images/proof/doi-ngu-ky-thuat-pdi.jpg" alt="Đội ngũ kỹ sư cơ điện tử đào tạo chính hãng của Hương Sơn" class="w-full h-auto rounded-lg shadow-md border border-gray-200" />
    <figcaption class="text-center text-xs text-gray-500 mt-2 italic font-sans">
      Kỹ thuật viên Hương Sơn thực hiện bảo trì ngăn ngừa định kỳ 12 bước cho dàn máy photocopy Toshiba tại trụ sở khách hàng.
    </figcaption>
  </figure>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">2. Quy Trình 12 Bước Bảo Trì Ngăn Ngừa Chuẩn Nhật Bản</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-6 not-prose text-xs text-gray-700">
    <div class="border border-gray-200 p-4 rounded bg-gray-50/50">
      <strong class="text-gray-900 block text-sm mb-1">Bước 1: Kiểm tra lịch sử lỗi (Error History)</strong>
      Truy cập chế độ Service Mode trên máy để đọc mã lỗi kỹ thuật đã ghi nhận trong bộ nhớ trong 30 ngày qua.
    </div>
    <div class="border border-gray-200 p-4 rounded bg-gray-50/50">
      <strong class="text-gray-900 block text-sm mb-1">Bước 2: Vệ sinh gương quét quang học</strong>
      Dùng dung dịch chuyên dụng làm sạch kính quét CCD/CIS, loại bỏ bụi bẩn và vệt ố gây sọc đen trên bản in.
    </div>
    <div class="border border-gray-200 p-4 rounded bg-gray-50/50">
      <strong class="text-gray-900 block text-sm mb-1">Bước 3: Vệ sinh cụm sạc cao áp (Corona Wire)</strong>
      Làm sạch dây cao áp sạc hoặc thanh lăn sạc (Charge Roller), đảm bảo phân bổ điện tích đồng đều trên mặt drum.
    </div>
    <div class="border border-gray-200 p-4 rounded bg-gray-50/50">
      <strong class="text-gray-900 block text-sm mb-1">Bước 4: Kiểm tra và làm sạch cụm Drum &amp; Gạt</strong>
      Đánh giá độ mòn quang học của trống từ (OPC Drum), hút sạch mực thải và căn chỉnh góc tiếp xúc gạt mực.
    </div>
    <div class="border border-gray-200 p-4 rounded bg-gray-50/50">
      <strong class="text-gray-900 block text-sm mb-1">Bước 5: Vệ sinh cụm từ (Developer Unit)</strong>
      Kiểm tra tỷ lệ pha trộn mực và hạt mang từ, thổi sạch bụi bẩn quanh trục từ nạp mực.
    </div>
    <div class="border border-gray-200 p-4 rounded bg-gray-50/50">
      <strong class="text-gray-900 block text-sm mb-1">Bước 6: Kiểm tra cụm sấy (Fuser Unit)</strong>
      Đo nhiệt độ bề mặt lô sấy (Heat Roller) và lô ép (Pressure Roller), tra mỡ chịu nhiệt chuyên dụng vào vòng bi bạc đỡ.
    </div>
    <div class="border border-gray-200 p-4 rounded bg-gray-50/50">
      <strong class="text-gray-900 block text-sm mb-1">Bước 7: Làm sạch bánh xe kéo giấy (Pick-up Rollers)</strong>
      Tẩy sạch bụi giấy bám trên các rãnh cao su nạp giấy bằng cồn kỹ thuật, tăng độ ma sát bám giấy.
    </div>
    <div class="border border-gray-200 p-4 rounded bg-gray-50/50">
      <strong class="text-gray-900 block text-sm mb-1">Bước 8: Hiệu chỉnh khe hở đệm tách giấy</strong>
      Cân chỉnh lò xo miếng chặn tách giấy (Separator Pad) để loại bỏ 100% hiện tượng kéo dính 2 tờ cùng lúc.
    </div>
    <div class="border border-gray-200 p-4 rounded bg-gray-50/50">
      <strong class="text-gray-900 block text-sm mb-1">Bước 9: Vệ sinh cảm biến đường đi của giấy</strong>
      Dùng bóng xịt khí thổi sạch bụi bám vào mắt đọc quang học trên toàn bộ lộ trình giấy chạy qua.
    </div>
    <div class="border border-gray-200 p-4 rounded bg-gray-50/50">
      <strong class="text-gray-900 block text-sm mb-1">Bước 10: Tra dầu mỡ hệ thống bánh răng</strong>
      Bôi trơn các bánh nhông truyền động cơ khí bằng mỡ silicon chuyên dụng, giúp máy chạy êm không phát tiếng ồn.
    </div>
    <div class="border border-gray-200 p-4 rounded bg-gray-50/50">
      <strong class="text-gray-900 block text-sm mb-1">Bước 11: Kiểm tra kết nối mạng &amp; Firmware</strong>
      Kiểm tra địa chỉ IP tĩnh, ping mạng LAN, cập nhật bản vá firmware bảo mật mới nhất từ hãng sản xuất.
    </div>
    <div class="border border-gray-200 p-4 rounded bg-gray-50/50">
      <strong class="text-gray-900 block text-sm mb-1">Bước 12: In bản test chuẩn &amp; Ký nghiệm thu</strong>
      In 5 trang mẫu kiểm tra độ đen, độ nét chữ và bàn giao biên bản bảo trì định kỳ có chữ ký khách hàng.
    </div>
  </div>

  <h2 class="text-2xl font-bold text-[#181923] tracking-tight">3. Ma Trận Cam Kết SLA Kỹ Thuật (Service Level Agreement)</h2>
  <div class="overflow-x-auto my-6">
    <table class="w-full text-left border-collapse border border-gray-200 text-sm">
      <thead class="bg-gray-100 text-gray-900 font-bold">
        <tr>
          <th class="p-3.5 border border-gray-200">Cấp Độ Sự Cố (Severity Level)</th>
          <th class="p-3.5 border border-gray-200">Mô Tả Hiện Tượng</th>
          <th class="p-3.5 border border-gray-200">Thời Gian Phản Hồi Điện Thoại</th>
          <th class="p-3.5 border border-gray-200">Thời Gian Có Mặt Xử Lý</th>
          <th class="p-3.5 border border-gray-200">Cam Kết Đổi Máy</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200 text-gray-700">
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-bold text-red-600">P1: Khẩn Cấp (Critical)</td>
          <td class="p-3.5 border border-gray-200">Máy mất nguồn hoàn toàn, kẹt giấy tê liệt cả văn phòng</td>
          <td class="p-3.5 border border-gray-200 font-bold">≤ 15 phút</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">≤ 2 Giờ (Nội thành)</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">Đổi máy trong 24 giờ</td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-bold text-amber-600">P2: Trung Bình (Major)</td>
          <td class="p-3.5 border border-gray-200">Bản in bị vệt đen, mờ chữ, máy in được nhưng tốc độ chậm</td>
          <td class="p-3.5 border border-gray-200 font-bold">≤ 30 phút</td>
          <td class="p-3.5 border border-gray-200 font-bold text-[#1A9900]">≤ 4 Giờ</td>
          <td class="p-3.5 border border-gray-200">Thay cụm linh kiện tại chỗ</td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="p-3.5 border border-gray-200 font-bold text-blue-600">P3: Thông Thường (Minor)</td>
          <td class="p-3.5 border border-gray-200">Yêu cầu cài đặt thêm máy tính mới, giao thêm mực dự phòng</td>
          <td class="p-3.5 border border-gray-200 font-bold">≤ 1 giờ</td>
          <td class="p-3.5 border border-gray-200">Trong vòng 8 giờ làm việc</td>
          <td class="p-3.5 border border-gray-200">Giao hàng tận quầy</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- FAQ Section -->
  <h2 class="text-2xl font-bold text-[#181923] tracking-tight pt-4">Câu Hỏi Thường Gặp Về Dịch Vụ Kỹ Thuật (FAQs)</h2>
  <div class="space-y-4 my-6 not-prose">
    <div class="border border-gray-200 rounded-lg p-5 bg-white">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <i class="fa-regular fa-circle-question text-[#1A9900]"></i>
        Tại sao mô hình bảo trì ngăn ngừa (Preventive Maintenance) lại vượt trội hơn hẳn so với bảo trì khi máy hỏng (Break-Fix)?
      </h3>
      <p class="text-sm text-gray-600 leading-relaxed pl-6">
        Bảo trì Break-Fix là mô hình bị động: doanh nghiệp phải chờ máy bị kẹt giấy, mờ nhòe hoặc cháy chập thì mới gọi thợ đến sửa, dẫn đến thời gian máy chết (Downtime) kéo dài và chi phí sửa chữa đột biến rất cao. Ngược lại, bảo trì ngăn ngừa của Hương Sơn tiến hành kiểm tra, vệ sinh và thay thế trước các linh kiện sắp hết hạn sử dụng hàng tháng, triệt tiêu 95% sự cố bất ngờ trước khi chúng kịp xảy ra.
      </p>
    </div>
    <div class="border border-gray-200 rounded-lg p-5 bg-white">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <i class="fa-regular fa-circle-question text-[#1A9900]"></i>
        Nếu máy photocopy bị hỏng nặng bo mạch không thể sửa ngay trong ngày thì quyền lợi khách hàng được giải quyết ra sao?
      </h3>
      <p class="text-sm text-gray-600 leading-relaxed pl-6">
        Theo cam kết SLA bằng văn bản của Hương Sơn: Nếu sự cố kỹ thuật không thể khắc phục triệt để tại hiện trường trong vòng 24 giờ, Hương Sơn sẽ lập tức vận chuyển và lắp đặt miễn phí một chiếc máy photocopy khác có thông số kỹ thuật tương đương hoặc cao hơn để khách hàng tiếp tục công việc, không làm gián đoạn dù chỉ 1 ngày.
      </p>
    </div>
    <div class="border border-gray-200 rounded-lg p-5 bg-white">
      <h3 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
        <i class="fa-regular fa-circle-question text-[#1A9900]"></i>
        Đội ngũ kỹ thuật viên của Hương Sơn có được đào tạo chính hãng không?
      </h3>
      <p class="text-sm text-gray-600 leading-relaxed pl-6">
        100% kỹ sư cơ điện tử và CNTT của Hương Sơn đều trải qua các khóa huấn luyện chuyên sâu và được cấp chứng chỉ kỹ thuật trực tiếp từ Tập đoàn Duplo (Nhật Bản), Toshiba và Konica Minolta. Chúng tôi nắm vững nguyên lý hoạt động vi mạch và có sẵn kho linh kiện OEM chính hãng tại Hà Nội.
      </p>
    </div>
  </div>

  """ + AUTHOR_BOX_HTML + """
</div>"""
}

BATCH_2_POSTS = [POST_9, POST_10, POST_11]
print(f"make_posts_batch2.py hoàn tất: {len(BATCH_2_POSTS)} bài viết.")
