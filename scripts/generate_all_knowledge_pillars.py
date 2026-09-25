# -*- coding: utf-8 -*-
"""Tạo bộ 16 bài viết trụ cột Kiến thức chuẩn 100% SEO - GEO - AEO cho Hương Sơn."""
import os

HERE = os.path.dirname(os.path.abspath(__file__))
ROOT = os.path.dirname(HERE)
TARGET_FILE = os.path.join(ROOT, "build", "pages_knowledge.py")

content = '''# -*- coding: utf-8 -*-
"""Trang KIẾN THỨC — 16 bài viết cẩm nang trụ cột (Content Pillars) chuẩn SEO - GEO - AEO 100%.
Phục vụ mục tiêu gia tăng uy tín Entity, trích dẫn AI (Google AI Overviews, Gemini, ChatGPT, Perplexity)
và dẫn dắt khách hàng B2B (Sở GD&ĐT, Trường học, Ngân hàng, Doanh nghiệp) lựa chọn Hương Sơn.
"""
import render
import schema
import components as C
import forms
from render import SITE, BRAND, DARK
from components import esc, BEIGE

KNOWLEDGE_ARTICLES = [
    {
        "slug": "nen-thue-hay-mua-may-photocopy",
        "url": "/ve-huong-son/kien-thuc/nen-thue-hay-mua-may-photocopy/",
        "title": "Nên thuê hay mua máy photocopy cho doanh nghiệp, trường học? Phân tích chi phí & hiệu quả",
        "seo_title": "Nên Thuê Hay Mua Máy Photocopy? Bài Toán Chi Phí & TCO | Hương Sơn",
        "seo_desc": "Phân tích chi tiết nên thuê hay mua máy photocopy: so sánh vốn đầu tư ban đầu, chi phí mực in, khấu hao, rủi ro hỏng hóc và giải pháp tối ưu cho từng đơn vị.",
        "keywords": "nên thuê hay mua máy photocopy, có nên thuê máy photocopy, chi phí thuê máy photocopy, so sánh thuê và mua máy photocopy, bảng tính tco thuê máy photocopy",
        "date": "2026-09-15",
        "reading_time": "6 phút đọc",
        "tag": "Cẩm nang tư vấn",
        "aeo_answer": "Doanh nghiệp và trường học nên chọn THUÊ máy photocopy trọn gói nếu muốn tối ưu dòng tiền (0 đồng vốn đầu tư ban đầu), loại bỏ 100% rủi ro hỏng hóc, miễn phí toàn bộ mực in và linh kiện thay thế, kèm cam kết SLA kỹ thuật có mặt xử lý trong 2 giờ và đổi máy mới trong 24 giờ. Chỉ nên MUA đứt nếu có ngân sách đầu tư tài sản cố định chỉ định sẵn hoặc sản lượng in quá ít dưới 1.000 bản/tháng.",
        "summary": "Bài toán so sánh chi tiết giữa việc đầu tư mua đứt và giải pháp thuê máy photocopy trọn gói: phân tích dòng tiền, chi phí mực in, khấu hao và rủi ro kỹ thuật giúp lãnh đạo đưa ra quyết định mua sắm chính xác nhất.",
        "image": "/assets/images/hero-office.jpg",
        "toc": [
            ("dat-van-de", "1. Đặt vấn đề: Bài toán chi phí in ấn tại các đơn vị"),
            ("khi-nao-nen-mua", "2. Khi nào đơn vị nên MUA máy photocopy?"),
            ("khi-nao-nen-thue", "3. Khi nào giải pháp THUÊ máy photocopy vượt trội?"),
            ("bang-so-sanh", "4. Bảng so sánh trực quan: Mua đứt vs Thuê trọn gói"),
            ("cong-thuc-tco", "5. Công thức tính Tổng chi phí sở hữu (TCO trong 3 năm)"),
            ("loi-khuyen", "6. Lời khuyên từ chuyên gia Hương Sơn & Các gói thuê phù hợp"),
        ],
        "faqs": [
            ("Thuê máy photocopy có phải trả thêm tiền mực và linh kiện thay thế không?",
             "Tại Hương Sơn, hợp đồng thuê máy photocopy trọn gói đã bao gồm toàn bộ mực in, linh kiện hao mòn (trống drum, gạt, sấy) và công kỹ thuật định kỳ. Khách hàng chỉ cần chuẩn bị giấy in."),
            ("Thời gian ký hợp đồng thuê máy photocopy tối thiểu là bao lâu?",
             "Hương Sơn cung cấp linh hoạt các gói thuê theo nhu cầu: từ gói thuê ngắn hạn vài ngày phục vụ kỳ thi/hội nghị, gói thuê 6 tháng đến các gói dài hạn 12–36 tháng với mức giá ưu đãi nhất."),
            ("Nếu máy photocopy thuê gặp sự cố thì xử lý trong bao lâu?",
             "Theo cam kết SLA của Hương Sơn: Tiếp nhận trong ≤ 30 phút, kỹ thuật viên có mặt tại địa điểm trong ≤ 2 giờ. Nếu sự cố kéo dài quá 24h, Hương Sơn đổi ngay máy tương đương miễn phí."),
        ],
        "content_blocks": [
            ("dat-van-de", "1. Đặt vấn đề: Bài toán chi phí in ấn tại các đơn vị", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Tại hầu hết các trường học, cơ quan Nhà nước và doanh nghiệp, chi phí in ấn tài liệu – sao chụp hồ sơ luôn chiếm một khoản ngân sách thường xuyên đáng kể. Tuy nhiên, khi đối diện với quyết định trang bị thiết bị, nhiều nhà quản lý thường phân vân: <strong>Nên bỏ ra một khoản ngân sách lớn để mua đứt máy photocopy hay nên lựa chọn phương án thuê máy trọn gói hàng tháng?</strong>
              </p>
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Thực tế cho thấy, chi phí mua máy ban đầu chỉ chiếm khoảng 25% – 30% tổng chi phí thực tế trong suốt vòng đời sử dụng (TCO). 70% chi phí còn lại nằm ở mực in, linh kiện thay thế định kỳ, công sửa chữa và hao mòn thiết bị. Việc hiểu rõ bài toán tài chính này sẽ giúp đơn vị tiết kiệm hàng chục đến hàng trăm triệu đồng mỗi năm.
              </p>
            """),
            ("khi-nao-nen-mua", "2. Khi nào đơn vị nên MUA máy photocopy?", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Mua đứt máy photocopy là lựa chọn truyền thống và phù hợp nhất trong các trường hợp sau:
              </p>
              <ul class="space-y-3 mb-6 text-[15px] text-gray-600">
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-3 flex-shrink-0"></i><span><strong>Đơn vị có nguồn vốn đầu tư công hoặc ngân sách dự án cố định:</strong> Nguồn vốn được cấp chỉ định cho mua sắm tài sản cố định và không được chuyển thành chi phí vận hành thường xuyên hàng tháng.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-3 flex-shrink-0"></i><span><strong>Sản lượng in rất thấp và không đều đặn:</strong> In dưới 1.000 bản/tháng, máy chủ yếu đặt sẵn để ký duyệt văn bản đột xuất. Khi đó, chi phí định mức thuê hàng tháng có thể không khai thác hết hiệu năng.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-3 flex-shrink-0"></i><span><strong>Đơn vị có sẵn đội ngũ kỹ thuật IT nội bộ:</strong> Có nhân sự chuyên trách hiểu rõ về cơ chế hoạt động, có thể tự xử lý kẹt giấy, vệ sinh gương quét và quản lý mua sắm vật tư.</span></li>
              </ul>
            """),
            ("khi-nao-nen-thue", "3. Khi nào giải pháp THUÊ máy photocopy vượt trội?", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Hiện nay, xu hướng chuyển dịch từ "Sở hữu thiết bị" sang "Sử dụng dịch vụ in ấn quản lý" (Managed Print Services) đang chiếm ưu thế tại các tổ chức hiện đại, tiêu biểu như hệ thống ngân hàng (Vietcombank) và các tập đoàn lớn bởi các lý do sau:
              </p>
              <ul class="space-y-3 mb-6 text-[15px] text-gray-600">
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-3 flex-shrink-0"></i><span><strong>Không cần bỏ vốn đầu tư ban đầu:</strong> Thay vì bỏ ra 40 – 90 triệu đồng cho một máy photocopy A3 đa chức năng Toshiba hoặc Ricoh cao cấp, đơn vị chỉ cần chi trả từ 800.000đ – 2.500.000đ mỗi tháng.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-3 flex-shrink-0"></i><span><strong>Trút bỏ 100% rủi ro hỏng hóc & vật tư:</strong> Toàn bộ chi phí mực in chính hãng, trống drum, gạt mực, bột từ, bảo trì định kỳ đều do đơn vị cho thuê (như Hương Sơn) chịu trách nhiệm.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-3 flex-shrink-0"></i><span><strong>Dễ dàng nâng cấp theo quy mô:</strong> Khi nhu cầu in ấn tăng lên hoặc muốn đổi sang máy photocopy màu, đơn vị chỉ cần yêu cầu nâng cấp dòng máy mà không phải thanh lý máy cũ chịu lỗ.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-3 flex-shrink-0"></i><span><strong>Hạch toán chi phí minh bạch:</strong> Hóa đơn VAT dịch vụ thuê máy hàng tháng được hạch toán trực tiếp vào chi phí hoạt động (Opex), giúp tối ưu thuế thu nhập doanh nghiệp.</span></li>
              </ul>
            """),
            ("bang-so-sanh", "4. Bảng so sánh trực quan: Mua đứt vs Thuê trọn gói", """
              <div class="overflow-x-auto my-6 border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                  <thead>
                    <tr class="bg-gray-100 text-gray-900 border-b border-gray-200 font-bold">
                      <th class="p-4">Tiêu chí so sánh</th>
                      <th class="p-4 bg-gray-50/50">Phương án MUA ĐỨT máy</th>
                      <th class="p-4 bg-green-50 text-[#1A9900]">Phương án THUÊ TRỌN GÓI</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 text-gray-700">
                    <tr><td class="p-4 font-semibold">Vốn ban đầu</td><td class="p-4">Lớn (40 – 120 triệu đồng/máy)</td><td class="p-4 font-bold text-[#1A9900]">0 VNĐ (Không cần thế chấp)</td></tr>
                    <tr><td class="p-4 font-semibold">Chi phí mực in</td><td class="p-4">Tự mua (Dễ mua phải mực nhái kém chất lượng)</td><td class="p-4 font-bold text-[#1A9900]">Miễn phí 100% (Cung cấp tận nơi)</td></tr>
                    <tr><td class="p-4 font-semibold">Linh kiện thay thế</td><td class="p-4">Tự thanh toán khi hết bảo hành</td><td class="p-4 font-bold text-[#1A9900]">Miễn phí 100% trống, gạt, sấy</td></tr>
                    <tr><td class="p-4 font-semibold">Bảo trì, sửa chữa</td><td class="p-4">Phụ thuộc lịch hẹn ngoài, chờ đợi lâu</td><td class="p-4 font-bold text-[#1A9900]">Kỹ thuật có mặt ≤ 2h, bảo trì định kỳ</td></tr>
                    <tr><td class="p-4 font-semibold">Xử lý máy hỏng nặng</td><td class="p-4">Ngừng trệ công việc, chờ sửa chữa</td><td class="p-4 font-bold text-[#1A9900]">Đổi máy tương đương ngay lập tức trong 24h</td></tr>
                    <tr><td class="p-4 font-semibold">Khấu hao tài sản</td><td class="p-4">Chịu rủi ro giảm giá trị tài sản 20–30%/năm</td><td class="p-4 font-bold text-[#1A9900]">Không chịu rủi ro khấu hao tài sản</td></tr>
                  </tbody>
                </table>
              </div>
            """),
            ("cong-thuc-tco", "5. Công thức tính Tổng chi phí sở hữu (TCO trong 3 năm)", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Giả sử văn phòng in trung bình <strong>5.000 bản A4/tháng</strong> (tổng 180.000 bản trong 3 năm):
              </p>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-6">
                <div class="border border-gray-200 p-6 bg-white rounded">
                  <h4 class="font-bold text-gray-900 mb-3 uppercase text-sm border-b pb-2">Nếu mua máy photocopy A3 (Toshiba/Ricoh)</h4>
                  <ul class="space-y-2 text-sm text-gray-600 mb-4">
                    <li>• Giá mua máy mới: ~50.000.000 đ</li>
                    <li>• Tiền mực in (36 lọ x 500k): 18.000.000 đ</li>
                    <li>• Thay trống drum & gạt (3 lần): 9.000.000 đ</li>
                    <li>• Cụm sấy & bảo trì ngoài: 6.000.000 đ</li>
                    <li>• Trừ giá trị thanh lý sau 3 năm: -10.000.000 đ</li>
                  </ul>
                  <p class="text-base font-bold text-red-600 pt-2 border-t">Tổng chi phí thực tế: ~73.000.000 VNĐ</p>
                </div>
                <div class="border border-[#1A9900] p-6 bg-green-50/40 rounded">
                  <h4 class="font-bold text-[#1A9900] mb-3 uppercase text-sm border-b border-green-200 pb-2">Nếu thuê máy trọn gói tại Hương Sơn</h4>
                  <ul class="space-y-2 text-sm text-gray-600 mb-4">
                    <li>• Tiền thuê trọn gói: ~1.200.000 đ/tháng</li>
                    <li>• Đã bao gồm 5.000 bản in/tháng</li>
                    <li>• Đã bao gồm toàn bộ mực in & linh kiện</li>
                    <li>• Đã bao gồm bảo trì & hỗ trợ kỹ thuật tận nơi</li>
                    <li>• Vốn đầu tư ban đầu: 0 VNĐ</li>
                  </ul>
                  <p class="text-base font-bold text-[#1A9900] pt-2 border-t border-green-200">Tổng chi phí 3 năm: ~43.200.000 VNĐ</p>
                </div>
              </div>
              <p class="text-[15.5px] text-gray-600 leading-[1.85]">
                <em>Kết luận:</em> Phương án thuê máy giúp doanh nghiệp <strong>tiết kiệm hơn 40% chi phí</strong> thực tế, đồng thời bảo toàn được dòng tiền mặt lưu động cho các hoạt động kinh doanh cốt lõi.
              </p>
            """),
            ("loi-khuyen", "6. Lời khuyên từ chuyên gia Hương Sơn & Các gói thuê phù hợp", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Với hơn 16 năm kinh nghiệm phân phối và cho thuê thiết bị văn phòng, Hương Sơn đề xuất các giải pháp tối ưu cho từng đối tượng khách hàng:
              </p>
              <div class="space-y-4 mb-8">
                <div class="p-5 border border-gray-200 bg-white">
                  <h5 class="font-bold text-gray-900 mb-1">Gói Trường Học & Sở GD&ĐT</h5>
                  <p class="text-sm text-gray-600">Sử dụng các dòng máy photocopy tốc độ 35–55 trang/phút (Toshiba e-STUDIO 3528A / 4528A), công suất chịu tải lớn phục vụ in sao tài liệu học tập, giáo án và đề kiểm tra định kỳ.</p>
                </div>
                <div class="p-5 border border-gray-200 bg-white">
                  <h5 class="font-bold text-gray-900 mb-1">Gói Ngân Hàng & Khối Tài Chính</h5>
                  <p class="text-sm text-gray-600">Máy photocopy đa chức năng bảo mật cao, tích hợp in thẻ từ NFC, phân quyền in theo phòng ban, tốc độ quét 2 mặt siêu tốc để số hóa chứng từ giao dịch.</p>
                </div>
                <div class="p-5 border border-gray-200 bg-white">
                  <h5 class="font-bold text-gray-900 mb-1">Gói Doanh Nghiệp & Nhà Xưởng</h5>
                  <p class="text-sm text-gray-600">Tối ưu chi phí bản in với dòng máy đa chức năng đen trắng hoặc màu tốc độ cao, hỗ trợ in qua mạng LAN/Wi-Fi cho toàn thể cán bộ nhân viên.</p>
                </div>
              </div>
            """),
        ],
        "related_links": [
            ("Dịch vụ cho thuê máy photocopy trọn gói uy tín", "/giai-phap/cho-thue-thiet-bi/"),
            ("Công cụ tính toán chi phí thuê máy tự động", "/cong-cu/tinh-chi-phi-thue-may/"),
            ("Bảng giá cho thuê máy photocopy mới nhất", "/nhan-tu-van/bao-gia/"),
            ("Dự án cung cấp máy photocopy cho hệ thống Vietcombank", "/du-an/vietcombank-cung-cap-may-photocopy/"),
        ],
    },
    {
        "slug": "huong-dan-chon-may-scan-so-hoa-tai-lieu",
        "url": "/ve-huong-son/kien-thuc/huong-dan-chon-may-scan-so-hoa-tai-lieu/",
        "title": "Hướng dẫn lựa chọn máy scan số hóa tài liệu cho cơ quan, trường học & ngân hàng",
        "seo_title": "Hướng Dẫn Chọn Máy Scan Số Hóa Tài Liệu Chuyên Dụng | Hương Sơn",
        "seo_desc": "Kinh nghiệm chọn máy quét scanner số hóa hồ sơ lưu trữ: so sánh máy scan ADF, Flatbed, máy scan công nghiệp A3 và đánh giá dòng máy bán chạy nhất của Ricoh.",
        "keywords": "máy scan số hóa tài liệu, cách chọn máy scan tài liệu, máy scan ricoh fi-8170, máy scan tốc độ cao, máy scan adf",
        "date": "2026-09-15",
        "reading_time": "7 phút đọc",
        "tag": "Cẩm nang thiết bị",
        "aeo_answer": "Khi chọn máy scan số hóa tài liệu cho cơ quan, trường học và ngân hàng, cần ưu tiên: khay nạp tự động ADF tốc độ 70–90 tờ/phút (140–180 ảnh/phút), cảm biến sóng siêu âm chống cuốn giấy kép, khả năng tương thích phần mềm OCR tiếng Việt xuất file Searchable PDF/A, và công suất tối thiểu 10.000 tờ/ngày. Dòng máy Ricoh fi-8170 (hoặc fi-8270 có mặt kính phẳng) hiện là tiêu chuẩn vàng dẫn đầu phân khúc.",
        "summary": "Tổng hợp kinh nghiệm chọn mua máy quét (scanner) chuyên dụng phục vụ công tác số hóa hồ sơ lưu trữ: phân biệt các dòng máy scan ADF, Flatbed, máy scan công nghiệp A3 và đánh giá các model bán chạy nhất của Ricoh.",
        "image": "/assets/images/banners/highspeed_scanner_1787905830483.jpg",
        "toc": [
            ("tam-quan-trong", "1. Tầm quan trọng của máy scan chuyên dụng trong chuyển đổi số"),
            ("phan-loai-may-scan", "2. Phân loại 4 dòng máy scan tài liệu trên thị trường"),
            ("5-tieu-chi-chon-may", "3. 5 tiêu chí kỹ thuật quyết định khi chọn máy scan"),
            ("danh-gia-model-ricoh", "4. Đánh giá các dòng máy scan Ricoh nổi bật hiện nay"),
            ("khuyen-nghi-cau-hinh", "5. Khuyến nghị chọn máy theo từng mô hình sử dụng"),
        ],
        "faqs": [
            ("Máy đa chức năng (All-in-one) có thể thay thế máy scan chuyên dụng không?",
             "Với nhu cầu quét vài tờ giấy mỗi tuần thì máy photocopy đa chức năng đáp ứng được. Nhưng với dự án số hóa hàng ngàn trang tài liệu, máy scan chuyên dụng vượt trội hoàn toàn về tốc độ (tới 140–280 hình ảnh/phút), bộ nạp giấy chống kẹt thông minh, khả năng nhận dạng chữ tiếng Việt OCR và công nghệ tách trang tự động."),
            ("Máy scan Ricoh fi-8170 có quét được chứng minh thư, thẻ căn cước và hộ chiếu không?",
             "Có. Dòng Ricoh fi-8170 trang bị chế độ Manual Feed Mode hỗ trợ nạp tài liệu dày tới 7mm bao gồm thẻ CCCD gắn chip, hộ chiếu, sổ bảo hiểm và tài liệu dập ghim mà không cần tấm lót nhựa (Carrier Sheet)."),
            ("Hương Sơn có cung cấp vật tư linh kiện thay thế con lăn máy scan không?",
             "Có. Hương Sơn có sẵn toàn bộ cụm con lăn cuốn giấy (Pick Roller, Brake Roller) chính hãng cho tất cả các dòng máy scan Ricoh fi-series và SP-series, hỗ trợ thay thế tận nơi."),
        ],
        "content_blocks": [
            ("tam-quan-trong", "1. Tầm quan trọng của máy scan chuyên dụng trong chuyển đổi số", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Trong tiến trình thực hiện Đề án chuyển đổi số quốc gia và số hóa dữ liệu lưu trữ ngành Giáo dục, các cơ quan và trường học đang phải xử lý khối lượng khổng lồ hồ sơ giấy: học bạ, sổ điểm, hồ sơ cán bộ, công văn đi đến, chứng từ tài chính. Sử dụng máy photocopy thông thường để scan tài liệu thường gặp các hạn chế: tốc độ chậm, dễ kẹt giấy khi giấy mỏng hoặc cũ, hình ảnh bị nghiêng lệch và dung lượng tệp lưu trữ quá lớn.
              </p>
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Việc trang bị <strong>máy scan tài liệu chuyên dụng</strong> với công nghệ nạp giấy tự động ADF, cảm biến chống cuốn giấy kép bằng sóng siêu âm và phần mềm xử lý hình ảnh thông minh là bước then chốt quyết định tiến độ và chất lượng của toàn bộ dự án số hóa.
              </p>
            """),
            ("phan-loai-may-scan", "2. Phân loại 4 dòng máy scan tài liệu trên thị trường", """
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-6">
                <div class="border border-gray-200 p-5 bg-white">
                  <h4 class="font-bold text-gray-900 mb-2 text-base text-[#1A9900]">1. Máy scan cá nhân / Để bàn (ScanSnap)</h4>
                  <p class="text-sm text-gray-600 leading-relaxed mb-2">Đại diện: Ricoh iX1300, iX1400, iX1600. Thiết kế nhỏ gọn, kết nối Wi-Fi, một chạm quét trực tiếp lên đám mây (Cloud) hoặc máy tính. Phù hợp cho bàn làm việc cá nhân, phòng hiệu trưởng, kế toán.</p>
                </div>
                <div class="border border-gray-200 p-5 bg-white">
                  <h4 class="font-bold text-gray-900 mb-2 text-base text-[#1A9900]">2. Máy scan ADF tài liệu văn phòng</h4>
                  <p class="text-sm text-gray-600 leading-relaxed mb-2">Đại diện: Ricoh SP-1120N, SP-1130N, fi-8150. Tốc độ từ 20–50 tờ/phút, khay nạp 50–100 tờ, tích hợp cổng LAN chia sẻ mạng nội bộ. Phù hợp cho bộ phận văn thư, phòng hành chính một cửa.</p>
                </div>
                <div class="border border-gray-200 p-5 bg-white">
                  <h4 class="font-bold text-gray-900 mb-2 text-base text-[#1A9900]">3. Máy scan chuyên nghiệp 2 mặt (Workgroup)</h4>
                  <p class="text-sm text-gray-600 leading-relaxed mb-2">Đại diện: Ricoh fi-8170, fi-8190, fi-8270 (kèm mặt kính phẳng Flatbed). Tốc độ vượt trội 70–90 tờ/phút (140–180 ảnh/phút), công suất 10.000–13.000 tờ/ngày. Tiêu chuẩn vàng cho số hóa hồ sơ.</p>
                </div>
                <div class="border border-gray-200 p-5 bg-white">
                  <h4 class="font-bold text-gray-900 mb-2 text-base text-[#1A9900]">4. Máy scan công nghiệp A3 (Production)</h4>
                  <p class="text-sm text-gray-600 leading-relaxed mb-2">Đại diện: Ricoh fi-7600, fi-7700, fi-8930, fi-8950. Tốc độ lên tới 100–150 tờ/phút, khay nạp 300–500 tờ khổ A3, công suất bền bỉ tới 100.000 tờ/ngày cho các trung tâm lưu trữ lớn.</p>
                </div>
              </div>
            """),
            ("5-tieu-chi-chon-may", "3. 5 tiêu chí kỹ thuật quyết định khi chọn máy scan", """
              <ul class="space-y-4 mb-6 text-[15px] text-gray-600">
                <li class="p-4 bg-gray-50 border-l-4 border-[#1A9900]">
                  <strong>1. Tốc độ quét thực tế (ppm / ipm):</strong> Cần phân biệt rõ ppm (pages per minute - số tờ/phút) và ipm (images per minute - số mặt quét/phút khi quét 2 mặt). Máy scan tốt phải giữ nguyên tốc độ khi quét màu ở độ phân giải 300 dpi.
                </li>
                <li class="p-4 bg-gray-50 border-l-4 border-[#1A9900]">
                  <strong>2. Khả năng bảo vệ tài liệu (Paper Protection):</strong> Công nghệ giám sát âm thanh iSOP của Ricoh có khả năng phát hiện âm thanh giấy bị nhăn hoặc kẹt lập tức dừng cuốn trong vài phần nghìn giây, bảo vệ nguyên vẹn các tài liệu lưu trữ quý hiếm.
                </li>
                <li class="p-4 bg-gray-50 border-l-4 border-[#1A9900]">
                  <strong>3. Công suất khuyến nghị hàng ngày (Duty Cycle):</strong> Chọn máy có công suất cao hơn ít nhất 30% so với nhu cầu thực tế để đảm bảo con lăn và mô-tơ hoạt động bền bỉ, không bị quá nhiệt.
                </li>
                <li class="p-4 bg-gray-50 border-l-4 border-[#1A9900]">
                  <strong>4. Khả năng tương thích phần mềm & OCR:</strong> Trình điều khiển PaperStream IP (TWAIN/ISIS) và phần mềm OCR ABBYY FineReader đi kèm giúp tự động làm sạch nền, xoay trang đúng chiều, xóa vết đục lỗ và nhận dạng tiếng Việt có dấu chính xác.
                </li>
                <li class="p-4 bg-gray-50 border-l-4 border-[#1A9900]">
                  <strong>5. Kết nối mạng (Ethernet LAN / Wi-Fi):</strong> Giúp nhiều máy tính trong cùng phòng ban cùng quét dữ liệu về máy chủ chung mà không cần phụ thuộc vào một máy tính chủ gắn dây USB.
                </li>
              </ul>
            """),
            ("danh-gia-model-ricoh", "4. Đánh giá các dòng máy scan Ricoh nổi bật hiện nay", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Thương hiệu Ricoh (trước đây là Fujitsu) chiếm tới hơn 55% thị phần máy scan tài liệu toàn cầu nhờ độ bền cơ khí huyền thoại và bộ nạp giấy chống kẹt thông minh:
              </p>
              <div class="overflow-x-auto my-6 border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                  <thead>
                    <tr class="bg-gray-100 text-gray-900 border-b font-bold">
                      <th class="p-3.5">Thông số kỹ thuật</th>
                      <th class="p-3.5">Ricoh SP-1130N</th>
                      <th class="p-3.5 bg-green-50 text-[#1A9900]">Ricoh fi-8170 (Bestseller)</th>
                      <th class="p-3.5">Ricoh fi-8270 (Kèm Flatbed)</th>
                      <th class="p-3.5">Ricoh fi-7600 (A3 Công nghiệp)</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 text-gray-700">
                    <tr><td class="p-3.5 font-semibold">Tốc độ quét (A4, 300 dpi)</td><td class="p-3.5">30 ppm / 60 ipm</td><td class="p-3.5 font-bold text-[#1A9900]">70 ppm / 140 ipm</td><td class="p-3.5">70 ppm / 140 ipm</td><td class="p-3.5 font-bold text-blue-700">100 ppm / 200 ipm</td></tr>
                    <tr><td class="p-3.5 font-semibold">Khay nạp tự động ADF</td><td class="p-3.5">50 tờ</td><td class="p-3.5 font-bold text-[#1A9900]">100 tờ</td><td class="p-3.5">100 tờ + Kính phẳng Flatbed</td><td class="p-3.5">300 tờ (Khổ A3)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Cảm biến chống cuốn đúp</td><td class="p-3.5">Cơ học tiêu chuẩn</td><td class="p-3.5 font-bold text-[#1A9900]">Sóng siêu âm đa điểm + Âm thanh iSOP</td><td class="p-3.5">Sóng siêu âm đa điểm + Âm thanh iSOP</td><td class="p-3.5">Sóng siêu âm chuyên sâu A3</td></tr>
                    <tr><td class="p-3.5 font-semibold">Công suất ngày khuyến nghị</td><td class="p-3.5">4.500 tờ/ngày</td><td class="p-3.5 font-bold text-[#1A9900]">10.000 tờ/ngày</td><td class="p-3.5">10.000 tờ/ngày</td><td class="p-3.5 font-bold text-blue-700">44.000 tờ/ngày</td></tr>
                    <tr><td class="p-3.5 font-semibold">Hỗ trợ OCR tiếng Việt</td><td class="p-3.5">Có (PaperStream IP)</td><td class="p-3.5 font-bold text-[#1A9900]">Xuất Word, Excel, Searchable PDF</td><td class="p-3.5">Xuất Word, Excel, Searchable PDF</td><td class="p-3.5">Chuyên dụng cho kho lưu trữ lớn</td></tr>
                    <tr><td class="p-3.5 font-semibold">Mô hình ứng dụng tối ưu</td><td class="p-3.5">Văn thư trường học, UBND cấp xã</td><td class="p-3.5 font-bold text-[#1A9900]">Sở GD&ĐT, Ngân hàng, Bệnh viện, Doanh nghiệp</td><td class="p-3.5">Quét học bạ dập ghim, sổ bìa cứng, hộ chiếu</td><td class="p-3.5">Trung tâm lưu trữ lịch sử tỉnh, Thư viện lớn</td></tr>
                  </tbody>
                </table>
              </div>
            """),
            ("khuyen-nghi-cau-hinh", "5. Khuyến nghị chọn máy theo từng mô hình sử dụng", """
              <div class="p-6 bg-green-50/50 border border-green-200 mb-6">
                <ul class="space-y-3 text-sm text-gray-700">
                  <li>• <strong>Phòng văn thư trường học / UBND xã phường:</strong> Chọn <em>Ricoh SP-1130N</em> hoặc <em>Ricoh fi-800R</em> (vừa quét tài liệu vừa quét nhanh thẻ CCCD).</li>
                  <li>• <strong>Sở GD&ĐT, Phòng Khảo thí, Ngân hàng, Bệnh viện:</strong> Chọn <em>Ricoh fi-8170</em> hoặc <em>Ricoh fi-8270</em> (bổ sung mặt kính phẳng quét sách và tài liệu đóng gáy).</li>
                  <li>• <strong>Trung tâm lưu trữ lịch sử, doanh nghiệp số hóa chuyên nghiệp:</strong> Chọn các dòng công nghiệp A3 <em>Ricoh fi-7600</em> hoặc <em>fi-8930</em>.</li>
                </ul>
              </div>
            """),
        ],
        "related_links": [
            ("Danh mục toàn bộ 31 model máy scan Ricoh chính hãng", "/san-pham/may-scan-so-hoa/"),
            ("Bảng tra cứu mã linh kiện con lăn tiêu hao máy scan Ricoh", "/san-pham/vat-tu-linh-kien-tieu-hao/bang-tra-ma-linh-kien-vat-tu-may-scan-ricoh/"),
            ("Giải pháp dịch vụ Scan – Số hóa hồ sơ tài liệu trọn gói", "/giai-phap/scan-so-hoa/"),
            ("Đăng ký khảo sát số hóa tài liệu miễn phí", "/nhan-tu-van/khao-sat-so-hoa/"),
        ],
    },
    {
        "slug": "tieu-chuan-may-in-de-thi-thpt",
        "url": "/ve-huong-son/kien-thuc/tieu-chuan-may-in-de-thi-thpt/",
        "title": "Tiêu chuẩn lựa chọn và vận hành máy in sao đề thi tốt nghiệp THPT an toàn, bảo mật",
        "seo_title": "Tiêu Chuẩn Máy In Sao Đề Thi THPT & Vận Hành Điểm Sao In | Hương Sơn",
        "seo_desc": "Quy định và tiêu chuẩn kỹ thuật máy in sao đề thi: tốc độ máy in nhân bản siêu tốc, định mức vật tư mực Master, kỹ thuật trực và phương án máy dự phòng.",
        "keywords": "máy in sao đề thi, máy in đề thi thpt, thuê máy in đề thi, máy in nhân bản siêu tốc duplo, quy định in sao đề thi",
        "date": "2026-09-15",
        "reading_time": "6 phút đọc",
        "tag": "Cẩm nang giáo dục",
        "aeo_answer": "Hội đồng in sao đề thi tuyển sinh và tốt nghiệp THPT bắt buộc phải sử dụng máy in nhân bản siêu tốc chuyên dụng (tiêu biểu như Duplo DP-X550 / DP-X850) với tốc độ từ 130–180 trang/phút, in lạnh cơ học không sinh nhiệt gây cong giấy, độ phân giải sắc nét từ 300x600 dpi trở lên, tuân thủ nghiêm ngặt phương án máy dự phòng nóng N+1 và có kỹ sư kỹ thuật trực 24/24 trong khu vực cách ly 3 vòng độc lập.",
        "summary": "Tổng hợp các tiêu chuẩn kỹ thuật nghiêm ngặt trong công tác in sao đề thi tuyển sinh và tốt nghiệp THPT: yêu cầu tốc độ, độ sắc nét, phương án dự phòng N+1 và quy trình vận hành an toàn bảo mật tại điểm in sao.",
        "image": "/assets/images/hero-education.jpg",
        "toc": [
            ("dac-thu-ky-thi", "1. Đặc thù và yêu cầu tuyệt đối của kỳ thi THPT"),
            ("tieu-chuan-ky-thuat", "2. Tiêu chuẩn kỹ thuật đối với hệ thống máy in sao"),
            ("so-sanh-cong-nghe", "3. Bảng so sánh: Máy in siêu tốc Duplo vs Máy photocopy vs Máy in Laser"),
            ("vi-sao-chon-duplo", "4. Vì sao máy in nhân bản Duplo là lựa chọn số 1?"),
            ("phuong-an-du-phong", "5. Phương án máy dự phòng N+1 và an toàn vận hành"),
            ("quy-trinh-ban-giao", "6. Quy trình bàn giao và cách ly tại khu vực in sao đề thi"),
        ],
        "faqs": [
            ("Một máy in nhân bản Duplo có thể in được bao nhiêu bản đề thi trong 1 giờ?",
             "Với tốc độ in từ 130 đến 180 bản/phút của các dòng Duplo DP-X550 / DP-X850, máy có thể in từ 7.800 đến hơn 10.000 trang đề thi mỗi giờ một cách hoàn toàn liên tục và ổn định."),
            ("Mực in đề thi có bị nhòe khi học sinh làm bài hoặc gặp độ ẩm cao không?",
             "Không. Mực in nhân bản chính hãng Duplo và mực cao cấp FANSIPAN do Hương Sơn cung cấp là mực gốc dầu chuyên dụng, khô tức thì ngay khi ra khỏi máy, bản in sắc nét tuyệt đối, không lem nhòe ngay cả với các đồ thị toán học hay bản đồ địa lý chi tiết nhỏ."),
            ("Hương Sơn có hỗ trợ kỹ sư trực trực tiếp trong khu vực cách ly in sao đề thi không?",
             "Có. Theo gói dịch vụ EXAM PRO của Hương Sơn, kỹ sư giàu kinh nghiệm đã được đào tạo nghiệp vụ và kiểm tra an ninh sẽ trực tiếp vào khu vực cách ly 3 vòng của Hội đồng in sao đề thi, túc trực 24/24 trong suốt thời gian in sao cho đến khi kỳ thi kết thúc."),
        ],
        "content_blocks": [
            ("dac-thu-ky-thi", "1. Đặc thù và yêu cầu tuyệt đối của kỳ thi THPT", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                In sao đề thi tốt nghiệp THPT và tuyển sinh lớp 10 là nhiệm vụ chính trị quan trọng bậc nhất của các Sở GD&ĐT. Công tác này diễn ra trong điều kiện cách ly triệt để 3 vòng độc lập, tuyệt đối không có sự giao tiếp với bên ngoài. Trong thời gian ngắn từ 5 đến 7 ngày, Hội đồng phải in và đóng gói hàng triệu trang đề thi cho hàng chục ngàn thí sinh.
              </p>
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Do đó, <strong>máy móc không được phép xảy ra bất kỳ sự cố dừng đột ngột nào</strong>. Bất kỳ sự chậm trễ hay sai sót kỹ thuật nào cũng có thể ảnh hưởng nghiêm trọng đến tiến độ của kỳ thi quốc gia.
              </p>
            """),
            ("tieu-chuan-ky-thuat", "2. Tiêu chuẩn kỹ thuật đối với hệ thống máy in sao", """
              <div class="space-y-3 mb-6 text-[15px] text-gray-600">
                <div class="p-4 bg-white border border-gray-200">
                  <h5 class="font-bold text-gray-900 mb-1">Tốc độ in vượt trội (≥ 130 trang/phút)</h5>
                  <p class="text-sm">Máy photocopy văn phòng thông thường (25–45 trang/phút) không thể đáp ứng khối lượng hàng triệu bản trong thời gian cách ly. Máy in nhân bản siêu tốc là thiết bị bắt buộc phải có.</p>
                </div>
                <div class="p-4 bg-white border border-gray-200">
                  <h5 class="font-bold text-gray-900 mb-1">Độ sắc nét và độ đồng đều trang in</h5>
                  <p class="text-sm">Độ phân giải tối thiểu 300x600 dpi trở lên, đảm bảo các công thức toán học, ký tự chỉ số trên/dưới, đồ thị hàm số và bản đồ phân hóa rõ ràng, không bị đứt nét hay nhòe mực.</p>
                </div>
                <div class="p-4 bg-white border border-gray-200">
                  <h5 class="font-bold text-gray-900 mb-1">Độ tương thích giấy mỏng và giấy tái chế</h5>
                  <p class="text-sm">Bộ nạp giấy cơ khí phải vận hành trơn tru với các loại giấy in phổ thông từ 50g/m² đến 80g/m² mà không bị dính kép (double feed) hay nhăn mép giấy.</p>
                </div>
              </div>
            """),
            ("so-sanh-cong-nghe", "3. Bảng so sánh: Máy in siêu tốc Duplo vs Máy photocopy vs Máy in Laser", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Bảng đối chiếu kỹ thuật thực tế giúp Hội đồng thi và Ban chỉ đạo thấy rõ lý do vì sao máy in nhân bản siêu tốc Duplo là thiết bị chuyên dụng bắt buộc:
              </p>
              <div class="overflow-x-auto my-6 border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                  <thead>
                    <tr class="bg-gray-100 text-gray-900 border-b font-bold">
                      <th class="p-3.5">Tiêu chí kỹ thuật</th>
                      <th class="p-3.5 bg-green-50 text-[#1A9900]">Máy in siêu tốc Duplo (Khuyên dùng)</th>
                      <th class="p-3.5">Máy photocopy đa chức năng</th>
                      <th class="p-3.5">Máy in Laser văn phòng</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 text-gray-700">
                    <tr><td class="p-3.5 font-semibold">Tốc độ in thực tế</td><td class="p-3.5 font-bold text-[#1A9900]">130 – 180 bản/phút (7.800–10.800 trang/h)</td><td class="p-3.5">30 – 50 bản/phút (1.800–3.000 trang/h)</td><td class="p-3.5">25 – 40 bản/phút (Chậm)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Nguyên lý in ấn</td><td class="p-3.5 font-bold text-[#1A9900]">In lạnh cơ học qua Master (Không sinh nhiệt)</td><td class="p-3.5">Nhiệt điện từ (Rất nóng sau 1–2 giờ)</td><td class="p-3.5">Sấy nhiệt laser (Dễ cong vênh giấy)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Chi phí bản in (từ bản 50+)</td><td class="p-3.5 font-bold text-[#1A9900]">Chỉ 30 – 55 đ/trang (Càng in nhiều càng rẻ)</td><td class="p-3.5">150 – 250 đ/trang</td><td class="p-3.5">350 – 600 đ/trang (Chi phí rất cao)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Khả năng chạy 24/24 cách ly</td><td class="p-3.5 font-bold text-[#1A9900]">Bền bỉ tuyệt đối, trống Drum chịu tải lớn</td><td class="p-3.5">Dễ quá nhiệt cụm sấy, tỷ lệ kẹt giấy tăng</td><td class="p-3.5">Nhanh mòn hộp mực, dễ cháy sấy</td></tr>
                    <tr><td class="p-3.5 font-semibold">Độ tương thích giấy mỏng 50–60gsm</td><td class="p-3.5 font-bold text-[#1A9900]">Nạp giấy cơ học chính xác, không nhăn mép</td><td class="p-3.5">Dễ bị kẹt giấy và dính kép nhiều tờ</td><td class="p-3.5">Hay bị kẹt tại trục cuốn đảo mặt</td></tr>
                    <tr><td class="p-3.5 font-semibold">Mức độ phù hợp in sao đề thi THPT</td><td class="p-3.5 font-bold text-[#1A9900]">Tiêu chuẩn bắt buộc cho Hội đồng thi quốc gia</td><td class="p-3.5">Chỉ dùng in tài liệu hành chính phụ trợ</td><td class="p-3.5">Không đáp ứng công suất in đề thi lớn</td></tr>
                  </tbody>
                </table>
              </div>
            """),
            ("vi-sao-chon-duplo", "4. Vì sao máy in nhân bản Duplo là lựa chọn số 1?", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Tập đoàn Duplo (Nhật Bản) là nhà tiên phong số 1 thế giới về công nghệ in nhân bản kỹ thuật số (Digital Duplicator):
              </p>
              <ul class="space-y-2 mb-6 text-sm text-gray-700">
                <li class="flex items-start"><i class="fa-solid fa-check text-[#1A9900] mt-1 mr-2 flex-shrink-0"></i><span>Cơ chế tạo bản Master siêu bền với đầu quét nhiệt độ chính xác cao.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-check text-[#1A9900] mt-1 mr-2 flex-shrink-0"></i><span>Trống in (Drum) công nghiệp chịu lực tải liên tục hàng chục ngàn bản mỗi ca làm việc.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-check text-[#1A9900] mt-1 mr-2 flex-shrink-0"></i><span>Hương Sơn là Đại lý ủy quyền phân phối chính thức Duplo tại miền Bắc từ 2017, sở hữu kho linh kiện và vật tư sẵn sàng lớn nhất.</span></li>
              </ul>
            """),
            ("phuong-an-du-phong", "5. Phương án máy dự phòng N+1 và an toàn vận hành", """
              <div class="bg-green-50 p-6 border border-green-200 mb-6">
                <h5 class="font-bold text-[#1A9900] text-base mb-2">Quy tắc vàng N+1 trong in sao đề thi</h5>
                <p class="text-sm text-gray-700 leading-relaxed">
                  Nếu Hội đồng in sao cần 3 máy hoạt động chính để kịp tiến độ, Hương Sơn luôn cung cấp thêm 1 máy dự phòng nóng cùng model và cấu hình (tổng 4 máy). Nếu một máy cần bảo dưỡng hoặc gặp sự cố bất ngờ, kỹ sư chuyển trống in sang máy dự phòng chỉ trong 2 phút, đảm bảo dây chuyền in hoạt động liên tục không gián đoạn.
                </p>
              </div>
            """),
            ("quy-trinh-ban-giao", "6. Quy trình bàn giao và cách ly tại khu vực in sao đề thi", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Hương Sơn đã triển khai thành công dịch vụ cho nhiều Sở GD&ĐT (như Sở GD&ĐT Vĩnh Phúc, Sở GD&ĐT Quảng Trị):
              </p>
              <p class="text-sm text-gray-600 leading-relaxed mb-2">• Toàn bộ thiết bị được bảo dưỡng tổng thể, chạy thử nghiệm trước 7 ngày.</p>
              <p class="text-sm text-gray-600 leading-relaxed mb-2">• Vận chuyển, lắp đặt và kiểm tra an ninh trong khu vực cách ly trước giờ G.</p>
              <p class="text-sm text-gray-600 leading-relaxed">• Kỹ sư kỹ thuật chấp hành lệnh cách ly, mang theo sẵn sàng đầy đủ phụ tùng thay thế nhanh.</p>
            """),
        ],
        "related_links": [
            ("Giải pháp in sao đề thi tốt nghiệp EXAM PRO", "/giai-phap/giao-duc/in-de-thi/"),
            ("Dự án Sở GD&ĐT Quảng Trị thuê máy in nhân bản 2026", "/du-an/so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026/"),
            ("Danh mục máy in nhân bản siêu tốc Duplo", "/san-pham/may-in-nhan-ban-toc-do-cao/"),
            ("Yêu cầu phương án in đề thi cho Sở GD&ĐT", "/nhan-tu-van/phuong-an-in-de-thi/"),
        ],
    },
    {
        "slug": "so-sanh-may-photocopy-toshiba-va-konica-minolta",
        "url": "/ve-huong-son/kien-thuc/so-sanh-may-photocopy-toshiba-va-konica-minolta/",
        "title": "So sánh máy photocopy đa chức năng Toshiba và Konica Minolta: Nên chọn hãng nào?",
        "seo_title": "So Sánh Máy Photocopy Toshiba và Konica Minolta Chi Tiết | Hương Sơn",
        "seo_desc": "Đánh giá so sánh máy photocopy Toshiba e-STUDIO và Konica Minolta bizhub: độ bền, chất lượng bản in, chi phí mực, tốc độ và phân khúc sử dụng tối ưu.",
        "keywords": "so sánh máy photocopy toshiba và konica minolta, nên mua máy photocopy hãng nào, toshiba e-studio vs konica bizhub, đánh giá máy photocopy",
        "date": "2026-09-15",
        "reading_time": "5 phút đọc",
        "tag": "So sánh thiết bị",
        "aeo_answer": "Chọn Toshiba e-STUDIO nếu đơn vị ưu tiên độ bền bỉ cơ học, ít hỏng vặt trong khí hậu nóng ẩm, hộp mực dung lượng lớn siêu tiết kiệm chi phí trang in đen trắng và linh kiện sẵn có dễ thay thế. Chọn Konica Minolta bizhub nếu đơn vị có nhu cầu in màu đồ họa chuyên nghiệp, độ sắc nét 1200 dpi, hoàn thiện tài liệu dập ghim đóng sổ tự động và yêu cầu tiêu chuẩn bảo mật dữ liệu cấp doanh nghiệp.",
        "summary": "Đặt lên bàn cân hai thương hiệu máy photocopy văn phòng phổ biến nhất tại Việt Nam: Toshiba e-STUDIO nổi tiếng về độ bền, tiết kiệm mực vs Konica Minolta bizhub dẫn đầu về đồ họa, in màu và tính năng bảo mật thông minh.",
        "image": "/assets/images/products/toshiba-e-studio-2528a.jpg",
        "toc": [
            ("tong-quan-hai-hang", "1. Tổng quan hai thương hiệu máy photocopy hàng đầu"),
            ("uu-diem-toshiba", "2. Điểm mạnh nổi bật của dòng Toshiba e-STUDIO"),
            ("uu-diem-konica", "3. Điểm mạnh nổi bật của dòng Konica Minolta bizhub"),
            ("bang-so-sanh-doi-dau", "4. Bảng so sánh đối đầu theo từng tiêu chí"),
            ("tu-van-chon-may", "5. Tư vấn lựa chọn phù hợp nhất cho đơn vị"),
        ],
        "faqs": [
            ("Máy photocopy Toshiba hay Konica Minolta có chi phí mực rẻ hơn?",
             "Nhìn chung, dòng máy photocopy đen trắng Toshiba e-STUDIO có chi phí mực và linh kiện tiêu hao rẻ hơn và phổ biến hơn trên thị trường. Với dòng máy photocopy màu chuyên nghiệp, Konica Minolta bizhub lại có hiệu suất màu và độ bền hạt mực vượt trội."),
            ("Hương Sơn có phải là đại lý chính thức của hai hãng này không?",
             "Đúng. Hương Sơn là Đại lý ủy quyền phân phối chính thức Toshiba tại miền Bắc từ năm 2017 và là Đại lý bán hàng Konica Minolta từ năm 2021, cam kết máy nhập khẩu chính ngạch nguyên đai nguyên kiện và bảo hành chính hãng."),
            ("Tôi có thể dùng thử hoặc xem máy trực tiếp ở đâu?",
             "Quý khách có thể qua trực tiếp văn phòng giao dịch của Hương Sơn tại số 27 ngõ 523 Minh Khai, Hai Bà Trưng, Hà Nội để trải nghiệm thực tế tốc độ và chất lượng bản in của cả hai dòng máy."),
        ],
        "content_blocks": [
            ("tong-quan-hai-hang", "1. Tổng quan hai thương hiệu máy photocopy hàng đầu", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Khi nhắc đến máy photocopy đa chức năng khổ A3, <strong>Toshiba</strong> và <strong>Konica Minolta</strong> luôn là hai cái tên được cân nhắc đầu tiên. Cả hai đều là những tập đoàn công nghệ hàng đầu đến từ Nhật Bản, tuy nhiên mỗi hãng lại định hình một triết lý thiết kế và phân khúc thế mạnh riêng biệt.
              </p>
            """),
            ("uu-diem-toshiba", "2. Điểm mạnh nổi bật của dòng Toshiba e-STUDIO", """
              <ul class="space-y-3 mb-6 text-sm text-gray-700">
                <li class="p-4 bg-white border border-gray-200"><strong class="text-gray-900 block mb-1 text-base">Cơ chế vận hành bền bỉ, 'nồi đồng cối đá':</strong> Khung máy cứng cáp, ít hỏng vặt, hoạt động ổn định trong điều kiện thời tiết nóng ẩm tại Việt Nam.</li>
                <li class="p-4 bg-white border border-gray-200"><strong class="text-gray-900 block mb-1 text-base">Chi phí trang in siêu tiết kiệm:</strong> Hộp mực dung lượng lớn (tới 38.000 – 43.000 bản in/hộp), cơ chế thu hồi mực thải hiệu quả giúp giảm tối đa chi phí bản in.</li>
                <li class="p-4 bg-white border border-gray-200"><strong class="text-gray-900 block mb-1 text-base">Giao diện điều khiển cảm ứng thân thiện:</strong> Màn hình cảm ứng lớn 10.1 inch, menu tiếng Việt rõ ràng, dễ làm quen ngay cả với người lớn tuổi.</li>
              </ul>
            """),
            ("uu-diem-konica", "3. Điểm mạnh nổi bật của dòng Konica Minolta bizhub", """
              <ul class="space-y-3 mb-6 text-sm text-gray-700">
                <li class="p-4 bg-white border border-gray-200"><strong class="text-gray-900 block mb-1 text-base">Chất lượng bản in đồ họa đỉnh cao:</strong> Mực Polymer hóa Simitri HD mang lại độ bóng mịn, màu sắc trung thực và độ phân giải thực 1200x1200 dpi.</li>
                <li class="p-4 bg-white border border-gray-200"><strong class="text-gray-900 block mb-1 text-base">Khả năng mở rộng và hoàn thiện tài liệu:</strong> Hỗ trợ các tùy chọn hoàn thiện sau in cao cấp: dập ghim góc, dập ghim giữa đóng thành quyển sách, đục lỗ tự động.</li>
                <li class="p-4 bg-white border border-gray-200"><strong class="text-gray-900 block mb-1 text-base">Bảo mật chuẩn doanh nghiệp cao cấp:</strong> Tích hợp chip bảo mật TPM, mã hóa dữ liệu ổ cứng chuẩn Bitdefender và xác thực qua thẻ từ thông minh.</li>
              </ul>
            """),
            ("bang-so-sanh-doi-dau", "4. Bảng so sánh đối đầu theo từng tiêu chí", """
              <div class="overflow-x-auto my-6 border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                  <thead>
                    <tr class="bg-gray-100 text-gray-900 border-b font-bold">
                      <th class="p-3.5">Tiêu chí so sánh</th>
                      <th class="p-3.5 bg-green-50 text-[#1A9900]">Toshiba e-STUDIO</th>
                      <th class="p-3.5 bg-blue-50 text-blue-700">Konica Minolta bizhub</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 text-gray-700">
                    <tr><td class="p-3.5 font-semibold">Thế mạnh cốt lõi</td><td class="p-3.5 font-bold text-[#1A9900]">Độ bền cơ khí, tiết kiệm mực</td><td class="p-3.5 font-bold text-blue-700">In màu đồ họa, bảo mật nâng cao</td></tr>
                    <tr><td class="p-3.5 font-semibold">Chi phí bản in đen trắng</td><td class="p-3.5 font-bold text-[#1A9900]">Cực rẻ (Rẻ hơn ~15–20%)</td><td class="p-3.5">Mức trung bình</td></tr>
                    <tr><td class="p-3.5 font-semibold">Chất lượng bản in màu</td><td class="p-3.5">Tươi sáng, rõ nét tài liệu</td><td class="p-3.5 font-bold text-blue-700">Màu chuẩn thiết kế, mịn màng hạt mực</td></tr>
                    <tr><td class="p-3.5 font-semibold">Linh kiện thay thế tại VN</td><td class="p-3.5 font-bold text-[#1A9900]">Cực kỳ sẵn có, giá mềm</td><td class="p-3.5">Phổ biến, cần linh kiện chuẩn hãng</td></tr>
                    <tr><td class="p-3.5 font-semibold">Khả năng chịu ẩm mùa nồm</td><td class="p-3.5 font-bold text-[#1A9900]">Rất tốt, ít kẹt giấy</td><td class="p-3.5">Tốt, cần sấy giấy định kỳ</td></tr>
                    <tr><td class="p-3.5 font-semibold">Mô hình phù hợp nhất</td><td class="p-3.5">Trường học, văn phòng, ngân hàng, kho vận</td><td class="p-3.5">Agency truyền thông, cty kiến trúc, tập đoàn</td></tr>
                  </tbody>
                </table>
              </div>
            """),
            ("tu-van-chon-may", "5. Tư vấn lựa chọn phù hợp nhất cho đơn vị", """
              <div class="p-6 bg-gray-50 border border-gray-200 mb-6">
                <p class="text-sm text-gray-700 leading-relaxed mb-3">
                  <strong>Khuyến nghị từ Hương Sơn:</strong> Nếu Quý đơn vị cần một máy photocopy đen trắng cày ải bền bỉ, chi phí vận hành siêu rẻ thì <strong>Toshiba e-STUDIO 3528A / 4528A</strong> là sự lựa chọn số 1. Nếu cần in catalogue, hồ sơ thầu màu và brochure chuyên nghiệp thì <strong>Konica Minolta bizhub C250i / C300i</strong> là giải pháp đẳng cấp nhất.
                </p>
              </div>
            """),
        ],
        "related_links": [
            ("Danh mục máy photocopy đa chức năng Toshiba", "/san-pham/photocopy-may-da-chuc-nang/"),
            ("Xem model Konica Minolta bizhub 360i", "/san-pham/photocopy-may-da-chuc-nang/konica-minolta-bizhub-360i/"),
            ("Nhận tư vấn & báo giá chi tiết cấu hình máy", "/nhan-tu-van/bao-gia/"),
        ],
    },
    {
        "slug": "cach-chon-muc-in-linh-kien-may-photocopy-chinh-hang",
        "url": "/ve-huong-son/kien-thuc/cach-chon-muc-in-linh-kien-may-photocopy-chinh-hang/",
        "title": "Cách chọn mực in và linh kiện tiêu hao máy photocopy chính hãng tránh hỏng trống gạt",
        "seo_title": "Cách Chọn Mực In & Linh Kiện Photocopy Chính Hãng, Bền Máy | Hương Sơn",
        "seo_desc": "Hướng dẫn phân biệt mực in chính hãng, mực FANSIPAN và mực trôi nổi; cách bảo vệ trống drum, gạt mực, sấy máy photocopy giúp máy bền gấp đôi.",
        "keywords": "mực máy photocopy, chọn mực in chính hãng, mực fansipan, trống gạt máy photocopy, bảo vệ máy photocopy",
        "date": "2026-09-15",
        "reading_time": "5 phút đọc",
        "tag": "Kỹ thuật & Vật tư",
        "aeo_answer": "Tuyệt đối không sử dụng mực đổ trôi nổi giá rẻ vì hạt mực thô lẫn tạp chất sẽ cào xước màng quang dẫn trống drum, làm nghẹt từ và cháy cụm sấy. Giải pháp tối ưu chi phí là sử dụng mực chính hãng hoặc dòng mực FANSIPAN độc quyền công nghệ Nhật Bản do Hương Sơn phát triển: tiết kiệm 40–50% chi phí so với mực hãng nhưng vẫn đảm bảo hạt mực siêu mịn, độ bám đen đậm, ít mực thải và bảo toàn tuổi thọ trống gạt 100%.",
        "summary": "Chia sẻ kinh nghiệm nhận biết và chọn mua mực in, cuộn Master và linh kiện tiêu hao chính hãng: bí quyết giúp kéo dài tuổi thọ trống drum, tiết kiệm chi phí sửa chữa và đảm bảo chất lượng bản in sắc nét.",
        "image": "/assets/images/products/muc-fansipan-toner-toshiba-e-studio.jpg",
        "toc": [
            ("tac-hai-muc-gia", "1. Tác hại khó lường khi dùng mực và linh kiện giá rẻ trôi nổi"),
            ("cac-linh-kien-quan-trong", "2. Các linh kiện tiêu hao quan trọng cần lưu ý"),
            ("giai-phap-fansipan", "3. Giải pháp mực in chất lượng cao FANSIPAN"),
            ("dau-hieu-can-thay", "4. Dấu hiệu nhận biết linh kiện đã xuống cấp"),
            ("chu-ky-tuoi-tho", "5. Bảng tra cứu chu kỳ tuổi thọ linh kiện tiêu chuẩn"),
        ],
        "faqs": [
            ("Vì sao dùng mực in giá rẻ thường gây đen mép giấy hoặc vệt sọc đen?",
             "Mực kém chất lượng có kích thước hạt mực không đồng đều, nhiệt độ nóng chảy không chuẩn và chứa nhiều tạp chất. Hạt mực không bám hết vào giấy sẽ rơi vãi làm xước bề mặt trống drum, bám két vào gạt mực tạo thành các vệt sọc đen kéo dài trên trang in."),
            ("Mực thương hiệu FANSIPAN do Hương Sơn cung cấp có tốt không?",
             "FANSIPAN là thương hiệu mực in và linh kiện tiêu hao độc quyền của Hương Sơn, được sản xuất theo công thức hạt mực vi tinh thể nhập khẩu. Đã qua kiểm định tương thích 100% với các dòng Toshiba e-STUDIO, Ricoh Aficio và Duplo, cho chất lượng bản in đen đậm, ít mực thải và bảo vệ trống gạt tương đương mực zin."),
            ("Bao lâu thì nên thay trống drum và bột từ một lần?",
             "Tùy theo dòng máy, thông thường trống drum máy photocopy văn phòng có tuổi thọ từ 80.000 đến 120.000 bản in, bột từ cần thay sau khoảng 100.000 – 150.000 bản. Nếu thấy bản in bị mờ nhạt hoặc chấm lặp lại theo chu kỳ vòng quay, cần kiểm tra thay thế ngay."),
        ],
        "content_blocks": [
            ("tac-hai-muc-gia", "1. Tác hại khó lường khi dùng mực và linh kiện giá rẻ trôi nổi", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Vì muốn tiết kiệm chi phí ngắn hạn, nhiều đơn vị đã chọn mua các loại mực đổ trôi nổi hoặc linh kiện thay thế không rõ nguồn gốc. Hậu quả thực tế thường là "tiết kiệm vài trăm ngàn tiền mực nhưng thiệt hại hàng chục triệu tiền sửa chữa":
              </p>
              <ul class="space-y-2 mb-6 text-sm text-gray-700">
                <li class="flex items-start"><i class="fa-solid fa-triangle-exclamation text-amber-600 mt-1 mr-2 flex-shrink-0"></i><span>Hạt mực thô ráp làm xước màng quang dẫn hữu cơ (OPC) của trống drum, gây ra các vệt đen ngang dọc.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-triangle-exclamation text-amber-600 mt-1 mr-2 flex-shrink-0"></i><span>Mực thải sinh ra quá nhiều làm tràn khoang mực thải, rò rỉ vào bánh răng cơ khí gây kẹt mô-tơ.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-triangle-exclamation text-amber-600 mt-1 mr-2 flex-shrink-0"></i><span>Bụi mực bay vào cụm sấy và gương laser làm giảm tuổi thọ máy và gây ô nhiễm không khí phòng làm việc.</span></li>
              </ul>
            """),
            ("cac-linh-kien-quan-trong", "2. Các linh kiện tiêu hao quan trọng cần lưu ý", """
              <div class="grid grid-cols-1 md:grid-cols-3 gap-5 my-6">
                <div class="border border-gray-200 p-4 bg-white"><h5 class="font-bold text-gray-900 mb-2">Trống quang học (Drum)</h5><p class="text-xs text-gray-600">Trái tim của máy photocopy. Bề mặt phủ lớp quang dẫn nhạy sáng. Tuyệt đối không để ánh nắng trực tiếp chiếu vào hoặc dùng khăn ráp lau.</p></div>
                <div class="border border-gray-200 p-4 bg-white"><h5 class="font-bold text-gray-900 mb-2">Gạt mực (Wiper Blade)</h5><p class="text-xs text-gray-600">Lưỡi cao su gạt sạch mực thừa trên trống sau mỗi vòng quay. Lưỡi gạt mòn hoặc mẻ sẽ để lại vệt đen trên giấy.</p></div>
                <div class="border border-gray-200 p-4 bg-white"><h5 class="font-bold text-gray-900 mb-2">Cụm sấy (Fuser Unit)</h5><p class="text-xs text-gray-600">Lô sấy và lô ép dùng nhiệt độ cao (160–190°C) để làm chảy và ép chặt hạt mực vào sợi giấy. Cần dùng dầu bôi trơn chuyên dụng.</p></div>
              </div>
            """),
            ("giai-phap-fansipan", "3. Giải pháp mực in chất lượng cao FANSIPAN", """
              <div class="bg-green-50 p-6 border border-green-200 mb-6">
                <h5 class="font-bold text-[#1A9900] text-base mb-2">Mực in FANSIPAN – Chuẩn mực thay thế hoàn hảo</h5>
                <p class="text-sm text-gray-700 leading-relaxed mb-3">
                  Được nghiên cứu và phát triển bởi Hương Sơn, thương hiệu mực FANSIPAN mang đến giải pháp cân bằng tuyệt đối: chất lượng tương đương mực chính hãng hãng sản xuất (OEM) nhưng chi phí chỉ bằng 50% – 60%, an toàn tuyệt đối cho trống gạt và cụm sấy.
                </p>
                <div class="overflow-x-auto my-4 border border-green-300">
                  <table class="w-full text-left border-collapse text-xs bg-white">
                    <thead>
                      <tr class="bg-green-100 text-gray-900 border-b font-bold">
                        <th class="p-2.5">Tiêu chí so sánh</th>
                        <th class="p-2.5">Mực chính hãng OEM</th>
                        <th class="p-2.5 bg-green-50 text-[#1A9900]">Mực FANSIPAN (Công nghệ Nhật)</th>
                        <th class="p-2.5 text-red-600">Mực tái chế trôi nổi giá rẻ</th>
                      </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 text-gray-700">
                      <tr><td class="p-2.5 font-semibold">Chất lượng hạt mực</td><td class="p-2.5">Hạt Polymer siêu mịn</td><td class="p-2.5 font-bold text-[#1A9900]">Hạt vi tinh thể đồng nhất</td><td class="p-2.5 text-red-600">Hạt thô ráp, lẫn tạp chất</td></tr>
                      <tr><td class="p-2.5 font-semibold">Tỷ lệ tiết kiệm chi phí</td><td class="p-2.5">0% (Giá niêm yết cao)</td><td class="p-2.5 font-bold text-[#1A9900]">Tiết kiệm 40% – 50%</td><td class="p-2.5 text-red-600">Rẻ ban đầu nhưng tốn sửa chữa</td></tr>
                      <tr><td class="p-2.5 font-semibold">Tác động trống Drum</td><td class="p-2.5">An toàn tuyệt đối</td><td class="p-2.5 font-bold text-[#1A9900]">An toàn 100%, không xước màng</td><td class="p-2.5 text-red-600">Xước trống sau 3.000–5.000 trang</td></tr>
                      <tr><td class="p-2.5 font-semibold">Cam kết bảo hành</td><td class="p-2.5">Theo hãng máy</td><td class="p-2.5 font-bold text-[#1A9900]">1 đổi 1 tận nơi bởi Hương Sơn</td><td class="p-2.5 text-red-600">Không có bảo hành trách nhiệm</td></tr>
                    </tbody>
                  </table>
                </div>
              </div>
            """),
            ("dau-hieu-can-thay", "4. Dấu hiệu nhận biết linh kiện đã xuống cấp", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                • Bản in bị mờ đều toàn trang: Hết mực hoặc bột từ bị suy giảm từ tính.<br>
                • Có vệt sọc đen dọc trang giấy: Gạt mực bị mẻ hoặc xước mặt trống drum.<br>
                • Bản in bị nhăn mép hoặc kẹt giấy liên tục tại cụm sấy: Lô sấy bị dính mực hoặc rách áo sấy.<br>
                • Máy phát ra tiếng kêu cọt kẹt: Bánh răng truyền động bị khô mỡ hoặc con lăn mòn.
              </p>
            """),
            ("chu-ky-tuoi-tho", "5. Bảng tra cứu chu kỳ tuổi thọ linh kiện tiêu chuẩn", """
              <div class="overflow-x-auto my-6 border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                  <thead>
                    <tr class="bg-gray-100 text-gray-900 border-b font-bold">
                      <th class="p-3">Loại linh kiện / Vật tư</th>
                      <th class="p-3">Tuổi thọ trung bình</th>
                      <th class="p-3">Khuyến cáo bảo dưỡng</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 text-gray-700">
                    <tr><td class="p-3 font-semibold">Mực in (Toner)</td><td class="p-3">25.000 – 43.000 trang (độ phủ 5%)</td><td class="p-3">Dùng mực FANSIPAN chính hãng</td></tr>
                    <tr><td class="p-3 font-semibold">Trống quang (OPC Drum)</td><td class="p-3">80.000 – 150.000 trang</td><td class="p-3">Vệ sinh định kỳ mỗi tháng</td></tr>
                    <tr><td class="p-3 font-semibold">Gạt mực (Blade)</td><td class="p-3">80.000 – 120.000 trang</td><td class="p-3">Thay đồng bộ cùng cụm trống</td></tr>
                    <tr><td class="p-3 font-semibold">Bột từ (Developer)</td><td class="p-3">100.000 – 150.000 trang</td><td class="p-3">Thay khi bản in bị nhạt nền</td></tr>
                    <tr><td class="p-3 font-semibold">Lô sấy / Lô ép</td><td class="p-3">150.000 – 200.000 trang</td><td class="p-3">Kiểm tra cảm biến nhiệt định kỳ</td></tr>
                  </tbody>
                </table>
              </div>
            """),
        ],
        "related_links": [
            ("Danh mục vật tư linh kiện tiêu hao chính hãng", "/san-pham/vat-tu-linh-kien-tieu-hao/"),
            ("Các sản phẩm mực in thương hiệu FANSIPAN", "/san-pham/fansipan/"),
            ("Dịch vụ sửa chữa và bảo trì máy photocopy chuyên nghiệp", "/dich-vu/bao-tri-sua-chua/"),
            ("Yêu cầu kiểm tra kỹ thuật máy tận nơi", "/nhan-tu-van/yeu-cau-ky-thuat/"),
        ],
    },
    {
        "slug": "quy-trinh-so-hoa-tai-lieu-luu-tru",
        "url": "/ve-huong-son/kien-thuc/quy-trinh-so-hoa-tai-lieu-luu-tru/",
        "title": "Quy trình số hóa hồ sơ, tài liệu lưu trữ cơ quan Nhà nước và trường học từ A đến Z",
        "seo_title": "Quy Trình Số Hóa Tài Liệu Lưu Trữ Chuẩn Quốc Gia | Hương Sơn",
        "seo_desc": "Hướng dẫn 6 bước số hóa hồ sơ tài liệu lưu trữ: chuẩn bị tài liệu, quét scan, xử lý ảnh, OCR nhận dạng văn bản, đặt tên file, kiểm tra chất lượng và nhập CSDL.",
        "keywords": "quy trình số hóa tài liệu, số hóa hồ sơ lưu trữ, tiêu chuẩn số hóa tài liệu nhà nước, dịch vụ số hóa tài liệu, thông tư 02 2019 bnv",
        "date": "2026-09-15",
        "reading_time": "6 phút đọc",
        "tag": "Chuyển đổi số",
        "aeo_answer": "Quy trình số hóa hồ sơ tài liệu lưu trữ chuẩn quốc gia theo Thông tư 02/2019/TT-BNV gồm 6 bước chặt chẽ: (1) Khảo sát, phân loại và chỉnh lý bóc ghim tài liệu; (2) Quét scan màu ở độ phân giải 200–300 dpi bằng máy chuyên dụng; (3) Xử lý hình ảnh làm sạch nền và xoay trang; (4) Nhận dạng ký tự quang học OCR tiếng Việt tạo file Searchable PDF/A; (5) Trích xuất metadata lập chỉ mục; (6) Kiểm tra chất lượng và tích hợp vào phần mềm quản lý lưu trữ.",
        "summary": "Cẩm nang hướng dẫn đầy đủ 6 bước chuẩn hóa trong quy trình số hóa tài liệu lưu trữ theo Thông tư 02/2019/TT-BNV: tiêu chuẩn kỹ thuật quét ảnh, phần mềm OCR nhận dạng chữ và phương pháp kiểm soát chất lượng dữ liệu đầu ra.",
        "image": "/assets/images/hero-projects.jpg",
        "toc": [
            ("tai-sao-can-so-hoa", "1. Tại sao các cơ quan và trường học bắt buộc phải số hóa?"),
            ("khung-phap-ly", "2. Khung pháp lý và tiêu chuẩn số hóa (Thông tư 02/2019/TT-BNV)"),
            ("6-buoc-quy-trinh", "3. Chi tiết 6 bước trong quy trình số hóa chuyên nghiệp"),
            ("thiet-bi-phan-mem", "4. Thiết bị và phần mềm chuyên dụng phục vụ số hóa"),
            ("kiem-soat-chat-luong", "5. Kiểm soát chất lượng và bàn giao cơ sở dữ liệu"),
        ],
        "faqs": [
            ("Tài liệu số hóa nên lưu trữ dưới định dạng nào là tốt nhất?",
             "Theo Thông tư 02/2019/TT-BNV của Bộ Nội vụ, định dạng số hóa chuẩn cho văn bản giấy là tệp PDF hoặc PDF/A (bản quét màu hoặc đen trắng có lớp văn bản OCR tìm kiếm được), độ phân giải từ 200–300 dpi."),
            ("Tài liệu cũ, rách nát hoặc có ghim dập có số hóa được không?",
             "Được. Trước khi đưa vào máy scan, tài liệu phải qua khâu chỉnh lý sơ bộ: tháo ghim kẹp, vuốt phẳng mép giấy, dán gia cố các vết rách bằng băng dính chuyên dụng không axit. Với tài liệu quý hiếm quá mỏng, sẽ sử dụng máy scan mặt phẳng (Flatbed) hoặc máy scan không chạm (như Ricoh SV600)."),
            ("Hương Sơn có nhận số hóa tài liệu tận nơi tại cơ quan không?",
             "Có. Nhằm đảm bảo an toàn bảo mật tài liệu cơ mật theo quy định của Nhà nước, Hương Sơn mang toàn bộ máy scan tốc độ cao, máy trạm xử lý và nhân sự chuyên nghiệp đến thực hiện trực tiếp tại kho lưu trữ của Quý đơn vị."),
        ],
        "content_blocks": [
            ("tai-sao-can-so-hoa", "1. Tại sao các cơ quan và trường học bắt buộc phải số hóa?", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Kho lưu trữ tài liệu giấy truyền thống đang đối mặt với nhiều thách thức lớn: diện tích kho quá tải, nguy cơ mối mọt, ẩm mốc, hỏa hoạn và đặc biệt là thời gian tra cứu hồ sơ kéo dài từ vài giờ đến vài ngày. Số hóa tài liệu lưu trữ giúp giải quyết triệt để các vấn đề này:
              </p>
              <ul class="space-y-2 mb-6 text-sm text-gray-700">
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-2 flex-shrink-0"></i><span>Bảo tồn vĩnh viễn nội dung tài liệu lịch sử quý giá không bị xuống cấp theo thời gian.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-2 flex-shrink-0"></i><span>Tra cứu thông tin tức thì trong vài giây qua từ khóa (Keyword Search) trên phần mềm quản lý.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-2 flex-shrink-0"></i><span>Chia sẻ dữ liệu đồng thời cho nhiều phòng ban mà không lo thất lạc bản gốc.</span></li>
              </ul>
            """),
            ("khung-phap-ly", "2. Khung pháp lý và tiêu chuẩn số hóa (Thông tư 02/2019/TT-BNV)", """
              <div class="bg-gray-50 border border-gray-200 p-5 mb-6">
                <h5 class="font-bold text-gray-900 mb-2">Các quy định bắt buộc theo tiêu chuẩn Nhà nước:</h5>
                <p class="text-sm text-gray-600 mb-2">• <strong>Độ phân giải:</strong> Tối thiểu 200 dpi đến 300 dpi để đảm bảo độ rõ nét khi in lại hoặc phóng to.</p>
                <p class="text-sm text-gray-600 mb-2">• <strong>Định dạng tệp:</strong> Tệp PDF/A-1a hoặc PDF/A-1b hỗ trợ tìm kiếm toàn văn (Searchable PDF).</p>
                <p class="text-sm text-gray-600 mb-2">• <strong>Không chỉnh sửa nội dung:</strong> Hình ảnh quét phải giữ nguyên vẹn dấu giáp lai, chữ ký tươi, con dấu đỏ và không tẩy xóa.</p>
                <p class="text-sm text-gray-600">• <strong>Metadata (Dữ liệu đặc tả):</strong> Đính kèm mã hồ sơ, số hiệu văn bản, trích yếu, tác giả và thời gian tạo lập.</p>
              </div>
            """),
            ("6-buoc-quy-trinh", "3. Chi tiết 6 bước trong quy trình số hóa chuyên nghiệp", """
              <div class="space-y-4 mb-6">
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 1: Khảo sát, giao nhận và chỉnh lý tài liệu</h5><p class="text-xs text-gray-600">Lập biên bản giao nhận hồ sơ, tháo ghim bấm, vuốt phẳng mép giấy, phân loại theo kích thước và độ dày mỏng.</p></div>
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 2: Quét scan tài liệu bằng máy chuyên dụng</h5><p class="text-xs text-gray-600">Sử dụng máy scan Ricoh fi-8170 / fi-7600 nạp tự động ADF, quét 2 mặt cùng lúc ở độ phân giải 300 dpi.</p></div>
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 3: Xử lý hình ảnh và kiểm tra trang quét</h5><p class="text-xs text-gray-600">Phần mềm PaperStream IP tự động khử độ nghiêng (Deskew), xóa trang trắng (Blank Page Removal) và làm sạch nền.</p></div>
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 4: Nhận dạng ký tự quang học OCR tiếng Việt</h5><p class="text-xs text-gray-600">Chuyển đổi hình ảnh quét thành tệp PDF/A có thể bôi đen copy chữ và tìm kiếm toàn văn bằng tiếng Việt có dấu.</p></div>
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 5: Nhập trường thông tin quản lý (Metadata Indexing)</h5><p class="text-xs text-gray-600">Nhập các trường thông tin: Số/Ký hiệu, Ngày ban hành, Cơ quan ban hành, Trích yếu nội dung vào cơ sở dữ liệu.</p></div>
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 6: Nghiệm thu, đóng gói và hoàn trả hồ sơ gốc</h5><p class="text-xs text-gray-600">Kiểm tra tỷ lệ chính xác (yêu cầu ≥ 99.5%), bàn giao cơ sở dữ liệu và dập ghim hoàn trả tài liệu về kho lưu trữ.</p></div>
              </div>
            """),
            ("thiet-bi-phan-mem", "4. Thiết bị và phần mềm chuyên dụng phục vụ số hóa", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Hương Sơn cung cấp trọn gói tổ hợp thiết bị và phần mềm số hóa đã được kiểm định chất lượng:
              </p>
              <ul class="space-y-2 mb-6 text-sm text-gray-700">
                <li>• <strong>Máy quét:</strong> Ricoh fi-8170 (A4, 70 ppm) và Ricoh fi-7600 (A3, 100 ppm) nạp tự động chống kẹt.</li>
                <li>• <strong>Phần mềm điều khiển:</strong> PaperStream IP & PaperStream Capture bản quyền.</li>
                <li>• <strong>Nhận dạng OCR:</strong> ABBYY FineReader Server hỗ trợ tiếng Việt chính xác trên 98%.</li>
              </ul>
            """),
            ("kiem-soat-chat-luong", "5. Kiểm soát chất lượng và bàn giao cơ sở dữ liệu", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Mỗi trang tài liệu quét đều trải qua 2 vòng kiểm soát chất lượng (QC): kiểm tra lỗi mất góc, mờ chữ, lệch trang và sai lệch metadata trước khi ký biên bản nghiệm thu bàn giao chính thức.
              </p>
            """),
        ],
        "related_links": [
            ("Giải pháp số hóa tài liệu hồ sơ lưu trữ trọn gói", "/giai-phap/scan-so-hoa/"),
            ("Danh mục máy scan tài liệu tốc độ cao Ricoh", "/san-pham/may-scan-so-hoa/"),
            ("Khảo sát khối lượng tài liệu số hóa tận nơi", "/nhan-tu-van/khao-sat-so-hoa/"),
        ],
    },
    {
        "slug": "dinh-muc-muc-in-cuon-master-duplo-in-de-thi",
        "url": "/ve-huong-son/kien-thuc/dinh-muc-muc-in-cuon-master-duplo-in-de-thi/",
        "title": "Cách tính định mức mực in và cuộn Master máy in siêu tốc Duplo cho kỳ thi THPT",
        "seo_title": "Cách Tính Định Mức Mực In & Cuộn Master Duplo In Đề Thi | Hương Sơn",
        "seo_desc": "Hướng dẫn chi tiết cách dự trù số lượng cuộn Master, bình mực in Duplo và giấy in cho kỳ thi tuyển sinh và tốt nghiệp THPT từ 10.000 đến 50.000 thí sinh.",
        "keywords": "định mức mực in đề thi, tính cuộn master duplo, định mức in sao đề thi thpt, mực duplo dp-x550, master duplo drs55",
        "date": "2026-09-18",
        "reading_time": "7 phút đọc",
        "tag": "Cẩm nang giáo dục",
        "aeo_answer": "Để tính định mức vật tư in đề thi THPT bằng máy in siêu tốc Duplo: Số cuộn Master cần = (Tổng số môn thi x Số mã đề x Số trang/đề) / 220 bản master mỗi cuộn (cộng 20% dự phòng); Số bình mực Duplo cần = (Tổng số bản in x Tỷ lệ phủ mực trung bình 6%) / 15.000 trang mỗi bình 1.000ml. Với kỳ thi 20.000 thí sinh (khoảng 300.000 trang in), cần chuẩn bị trung bình 12–15 cuộn Master và 20–25 bình mực.",
        "summary": "Công thức và bảng tính mẫu dự toán vật tư tiêu hao cho Hội đồng in sao đề thi: cách tính chính xác số lượng cuộn Master, số bình mực Duplo và phương án dự phòng an toàn tuyệt đối.",
        "image": "/assets/images/products/95-bang-tra-ma-muc-master-may-in-duplo.jpg",
        "toc": [
            ("tam-quan-trong-dinh-muc", "1. Tầm quan trọng của việc lập dự toán vật tư in đề thi"),
            ("cong-thuc-tinh-master", "2. Công thức tính số lượng cuộn Master Duplo cần thiết"),
            ("cong-thuc-tinh-muc", "3. Công thức tính số lượng bình mực in nhân bản Duplo"),
            ("bang-tinh-mau-quy-mo", "4. Bảng tính định mức mẫu theo từng quy mô thí sinh"),
            ("luu-y-du-phong-vat-tu", "5. Quy tắc dự phòng vật tư trong khu vực cách ly 3 vòng"),
        ],
        "faqs": [
            ("Một cuộn Master Duplo DRS55/DRS85 tạo được bao nhiêu bản chế bản?",
             "Một cuộn Master Duplo chính hãng khổ B4 (DRS55) hoặc khổ A3 (DRS85) có chiều dài tiêu chuẩn tạo được từ 220 đến 250 bản Master (khuôn in). Mỗi bản Master sau đó có thể in liên tục từ vài chục đến hàng chục ngàn trang giấy mà không bị rách phim."),
            ("Một bình mực Duplo 1.000ml in được bao nhiêu trang đề thi A4?",
             "Với đề thi thông thường có độ phủ mực khoảng 5% – 7%, một bình mực Duplo 1.000ml in được từ 15.000 đến 18.000 trang A4. Nếu đề thi có đồ thị hình ảnh phức tạp (độ phủ 10%), định mức đạt khoảng 10.000 – 12.000 trang/bình."),
            ("Hương Sơn có giao thừa vật tư và nhận lại vật tư chưa dùng sau kỳ thi không?",
             "Có. Theo chính sách dịch vụ trọn gói EXAM PRO của Hương Sơn dành cho các Sở GD&ĐT, chúng tôi luôn giao dư 30% cuộn Master và mực in để đảm bảo an toàn tuyệt đối. Sau khi kỳ thi kết thúc, Hương Sơn nhận thu hồi lại toàn bộ vật tư còn nguyên niêm phong chưa sử dụng."),
        ],
        "content_blocks": [
            ("tam-quan-trong-dinh-muc", "1. Tầm quan trọng của việc lập dự toán vật tư in đề thi", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Trong công tác in sao đề thi THPT, toàn bộ Hội đồng phải thực hiện cách ly 3 vòng độc lập nghiêm ngặt từ 5 đến 7 ngày. Việc thiếu hụt dù chỉ 1 cuộn Master hay 1 bình mực in trong thời gian cách ly là sự cố an ninh đặc biệt nghiêm trọng vì không thể tự do mở cửa chuyển hàng từ bên ngoài vào.
              </p>
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Do đó, Trưởng ban in sao và cán bộ phụ trách vật tư cần nắm vững công thức định mức khoa học để vừa đảm bảo đủ cơ số vật tư kèm dự phòng an toàn, vừa tối ưu ngân sách nhà nước.
              </p>
            """),
            ("cong-thuc-tinh-master", "2. Công thức tính số lượng cuộn Master Duplo cần thiết", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Máy in nhân bản kỹ thuật số Duplo hoạt động theo nguyên lý khắc nhiệt tạo khuôn in (Master). Mỗi mã đề thi hoặc mỗi trang nội dung khác nhau bắt buộc phải tiêu tốn 1 bản Master:
              </p>
              <div class="bg-gray-50 border-l-4 border-[#1A9900] p-4 my-4">
                <p class="font-mono text-sm text-gray-800 font-bold mb-1">Số bản Master cần tạo = Tổng số môn thi x Số mã đề thi x Số trang nội dung</p>
                <p class="font-mono text-sm text-gray-800 font-bold">Số cuộn Master thực tế = (Số bản Master / 220) x 1.25 (hệ số dự phòng 25%)</p>
              </div>
              <p class="text-sm text-gray-600 leading-relaxed mb-4">
                <em>Ví dụ:</em> Kỳ thi có 9 môn, trung bình mỗi môn có 4 mã đề trắc nghiệm, mỗi đề dài 4 trang (tổng 144 trang Master). Số bản Master = 144. Chia cho 220 bản/cuộn = 0.65 cuộn. Tuy nhiên, do cần in thử nghiệm chỉnh vị trí lề, căn chỉnh độ đậm nhạt và dự phòng sự cố nhăn phim, Hội đồng cần chuẩn bị tối thiểu 2 đến 3 cuộn Master cho mỗi máy in.
              </p>
            """),
            ("cong-thuc-tinh-muc", "3. Công thức tính số lượng bình mực in nhân bản Duplo", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Mực máy in Duplo là mực gốc dầu chuyên dụng đóng chai 1.000ml. Định mức trang in thực tế được tính theo tổng sản lượng trang in nhân với độ phủ mực:
              </p>
              <div class="bg-gray-50 border-l-4 border-[#1A9900] p-4 my-4">
                <p class="font-mono text-sm text-gray-800 font-bold mb-1">Tổng số trang đề = Số lượng thí sinh x Số trang đề mỗi môn x Số môn thi</p>
                <p class="font-mono text-sm text-gray-800 font-bold">Số bình mực Duplo = (Tổng số trang đề / 15.000) x 1.20 (hệ số dự phòng 20%)</p>
              </div>
            """),
            ("bang-tinh-mau-quy-mo", "4. Bảng tính định mức mẫu theo từng quy mô thí sinh", """
              <div class="overflow-x-auto my-6 border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                  <thead>
                    <tr class="bg-gray-100 text-gray-900 border-b font-bold">
                      <th class="p-3.5">Quy mô kỳ thi (Số thí sinh)</th>
                      <th class="p-3.5">Tổng sản lượng trang in ước tính</th>
                      <th class="p-3.5 bg-green-50 text-[#1A9900]">Số cuộn Master Duplo (gồm dự phòng)</th>
                      <th class="p-3.5 bg-green-50 text-[#1A9900]">Số bình mực Duplo 1.000ml (gồm dự phòng)</th>
                      <th class="p-3.5">Số lượng máy in Duplo khuyến nghị</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 text-gray-700">
                    <tr><td class="p-3.5 font-semibold">Quy mô nhỏ (3.000 – 5.000 TS)</td><td class="p-3.5">60.000 – 100.000 trang</td><td class="p-3.5 font-bold text-[#1A9900]">6 – 8 cuộn</td><td class="p-3.5 font-bold text-[#1A9900]">8 – 10 bình</td><td class="p-3.5">2 máy (1 chính + 1 dự phòng)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Quy mô vừa (10.000 – 15.000 TS)</td><td class="p-3.5">180.000 – 250.000 trang</td><td class="p-3.5 font-bold text-[#1A9900]">10 – 14 cuộn</td><td class="p-3.5 font-bold text-[#1A9900]">18 – 22 bình</td><td class="p-3.5">3 máy (2 chính + 1 dự phòng)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Quy mô lớn (20.000 – 30.000 TS)</td><td class="p-3.5">350.000 – 500.000 trang</td><td class="p-3.5 font-bold text-[#1A9900]">18 – 24 cuộn</td><td class="p-3.5 font-bold text-[#1A9900]">30 – 38 bình</td><td class="p-3.5">4 máy (3 chính + 1 dự phòng)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Quy mô rất lớn (≥ 40.000 TS)</td><td class="p-3.5">≥ 700.000 trang</td><td class="p-3.5 font-bold text-[#1A9900]">30 – 40 cuộn</td><td class="p-3.5 font-bold text-[#1A9900]">50 – 65 bình</td><td class="p-3.5">5 – 6 máy (N+1 nóng)</td></tr>
                  </tbody>
                </table>
              </div>
            """),
            ("luu-y-du-phong-vat-tu", "5. Quy tắc dự phòng vật tư trong khu vực cách ly 3 vòng", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Theo kinh nghiệm phục vụ nhiều Hội đồng thi của Hương Sơn, Quý đơn vị cần lưu ý:
              </p>
              <ul class="space-y-2 mb-6 text-sm text-gray-700">
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-2 flex-shrink-0"></i><span>Luôn yêu cầu nhà cung cấp đưa thừa 20% – 30% cơ số mực và master vào phòng cách ly trước giờ niêm phong.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-2 flex-shrink-0"></i><span>Chuẩn bị sẵn ít nhất 1 cụm trống in (Drum) dự phòng có chứa sẵn mực để hoán đổi nhanh khi cần.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-2 flex-shrink-0"></i><span>Chỉ sử dụng mực in chính hãng Duplo hoặc mực cao cấp FANSIPAN để tránh nghẹt kim phun mực tự động.</span></li>
              </ul>
            """),
        ],
        "related_links": [
            ("Gói dịch vụ in sao đề thi tốt nghiệp EXAM PRO", "/giai-phap/giao-duc/in-de-thi/"),
            ("Bảng tra mã mực và cuộn Master máy in Duplo", "/san-pham/vat-tu-linh-kien-tieu-hao/bang-tra-ma-muc-master-duplo/"),
            ("Yêu cầu phương án in đề thi cho Sở GD&ĐT", "/nhan-tu-van/phuong-an-in-de-thi/"),
        ],
    },
    {
        "slug": "so-sanh-duplo-dp-x550-va-dp-x850",
        "url": "/ve-huong-son/kien-thuc/so-sanh-duplo-dp-x550-va-dp-x850/",
        "title": "So sánh máy in nhân bản siêu tốc Duplo DP-X550 và DP-X850: Lựa chọn nào tối ưu?",
        "seo_title": "So Sánh Duplo DP-X550 và DP-X850: Chọn Máy In Siêu Tốc Nào? | Hương Sơn",
        "seo_desc": "Đặt lên bàn cân 2 model máy in nhân bản kỹ thuật số Duplo bán chạy nhất: so sánh tốc độ 150 vs 180 trang/phút, khổ in A3/B4, độ phân giải và phân khúc phù hợp.",
        "keywords": "duplo dp-x550 vs dp-x850, so sánh máy in siêu tốc duplo, duplo dp-x850, duplo dp-x550, máy in đề thi duplo",
        "date": "2026-09-18",
        "reading_time": "6 phút đọc",
        "tag": "So sánh thiết bị",
        "aeo_answer": "Chọn Duplo DP-X550 nếu đơn vị chủ yếu in đề thi và tài liệu khổ B4/A4 với tốc độ 150 trang/phút, cần tối ưu ngân sách đầu tư ban đầu hoặc thuê máy với chi phí tiết kiệm. Chọn Duplo DP-X850 nếu là Sở GD&ĐT hoặc trường học lớn cần in tràn lề khổ A3 thực tế, tốc độ siêu đỉnh 180 trang/phút (nhanh nhất phân khúc), độ phân giải cao 600x600 dpi để thể hiện sắc nét các sơ đồ hình học và bản đồ phân hóa phức tạp.",
        "summary": "Phân tích chi tiết sự khác biệt giữa Duplo DP-X550 và DP-X850: bảng so sánh thông số kỹ thuật, khả năng xử lý khổ giấy A3/B4, tốc độ in ấn thực tế và bài toán hiệu quả đầu tư.",
        "image": "/assets/images/products/duplo-dp-x550.jpg",
        "toc": [
            ("tong-quan-hai-dong", "1. Tổng quan hai dòng máy in nhân bản Duplo DP-X series"),
            ("diem-manh-x550", "2. Đặc tính nổi bật của Duplo DP-X550"),
            ("diem-manh-x850", "3. Đặc tính vượt trội của Duplo DP-X850"),
            ("bang-so-sanh-chi-tiet", "4. Bảng so sánh thông số kỹ thuật chi tiết"),
            ("loi-khuyen-dau-tu", "5. Tư vấn lựa chọn: Khi nào nên chọn X550 và khi nào nên chọn X850?"),
        ],
        "faqs": [
            ("Duplo DP-X550 có in được giấy A3 không?",
             "DP-X550 có thể nạp và chạy qua được giấy khổ A3, tuy nhiên vùng tạo ảnh Master tối đa của máy là khổ B4 (250 x 355 mm). Nếu Quý đơn vị cần in bản vẽ hoặc đề thi tràn khổ A3 thực tế (290 x 420 mm), bắt buộc phải chọn dòng Duplo DP-X850."),
            ("Tốc độ 180 trang/phút của DP-X850 có gây nhăn giấy mỏng không?",
             "Không. Duplo trang bị hệ thống cấp giấy 3 con lăn cơ học thông minh kèm quạt hút chân không hỗ trợ tách giấy, giúp máy vận hành ổn định ở tốc độ tối đa 180 bản/phút ngay cả với giấy bãi bằng hoặc giấy mỏng 50g/m²."),
            ("Hương Sơn có sẵn cả hai dòng máy này để xem thử không?",
             "Có. Hương Sơn là đại lý ủy quyền chính thức của Duplo tại miền Bắc, showroom luôn có sẵn cả model DP-X550 và DP-X850 cùng đầy đủ phụ tùng, mực in và cuộn master để khách hàng chạy thử mẫu thực tế."),
        ],
        "content_blocks": [
            ("tong-quan-hai-dong", "1. Tổng quan hai dòng máy in nhân bản Duplo DP-X series", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Trong dải sản phẩm máy in nhân bản kỹ thuật số thế hệ mới của tập đoàn Duplo (Nhật Bản), dòng <strong>DP-X series</strong> là đại diện tiêu biểu nhất cho công nghệ in tốc độ cao, độ bền công nghiệp và giao diện điều khiển màn hình màu trực quan. Trong đó, DP-X550 và DP-X850 là hai cái tên được các Sở GD&ĐT và trường học quan tâm nhiều nhất.
              </p>
            """),
            ("diem-manh-x550", "2. Đặc tính nổi bật của Duplo DP-X550", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Duplo DP-X550 là "chiến binh đa nhiệm" được lựa chọn nhiều nhất nhờ sự cân bằng hoàn hảo giữa chi phí và công năng:
              </p>
              <ul class="space-y-2 mb-6 text-sm text-gray-700">
                <li>• Tốc độ in mạnh mẽ: 150 trang/phút (9.000 trang/giờ).</li>
                <li>• Khổ chế bản B4 chuẩn, tối ưu cho đề thi A4 gấp đôi hoặc đề thi trắc nghiệm THPT thông dụng.</li>
                <li>• Chi phí đầu tư máy và chi phí cuộn Master tiết kiệm hơn 25% so với khổ A3.</li>
              </ul>
            """),
            ("diem-manh-x850", "3. Đặc tính vượt trội của Duplo DP-X850", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Duplo DP-X850 là dòng máy Flagship cao cấp nhất của Duplo dành cho các nhiệm vụ in ấn cường độ cực đại:
              </p>
              <ul class="space-y-2 mb-6 text-sm text-gray-700">
                <li>• Tốc độ in nhanh nhất thế giới: 180 trang/phút (10.800 trang/giờ).</li>
                <li>• Khổ chế bản A3 thực tế (290 x 423 mm), in được các tập tài liệu A3 gập đôi thành quyển A4.</li>
                <li>• Độ phân giải quang học siêu nét 600 x 600 dpi, công nghệ xử lý hạt mực HD cho văn bản cực kỳ mịn màng.</li>
              </ul>
            """),
            ("bang-so-sanh-chi-tiet", "4. Bảng so sánh thông số kỹ thuật chi tiết", """
              <div class="overflow-x-auto my-6 border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                  <thead>
                    <tr class="bg-gray-100 text-gray-900 border-b font-bold">
                      <th class="p-3.5">Thông số kỹ thuật</th>
                      <th class="p-3.5 bg-green-50 text-[#1A9900]">Duplo DP-X550</th>
                      <th class="p-3.5 bg-blue-50 text-blue-700">Duplo DP-X850 (Cao cấp)</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 text-gray-700">
                    <tr><td class="p-3.5 font-semibold">Tốc độ in tối đa</td><td class="p-3.5 font-bold text-[#1A9900]">150 bản/phút</td><td class="p-3.5 font-bold text-blue-700">180 bản/phút (Siêu tốc)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Khổ quét tài liệu gốc</td><td class="p-3.5">Tối đa A3 (297 x 432 mm)</td><td class="p-3.5">Tối đa A3 (297 x 432 mm)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Vùng in / Chế bản tối đa</td><td class="p-3.5 font-bold text-[#1A9900]">Khổ B4 (250 x 355 mm)</td><td class="p-3.5 font-bold text-blue-700">Khổ A3 thực (290 x 423 mm)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Độ phân giải chế bản</td><td class="p-3.5">300 x 600 dpi</td><td class="p-3.5 font-bold text-blue-700">600 x 600 dpi (HD chi tiết)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Dung lượng khay nạp giấy</td><td class="p-3.5">1.200 tờ (64 g/m²)</td><td class="p-3.5">1.200 tờ (64 g/m²)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Định lượng giấy in hỗ trợ</td><td class="p-3.5">45 – 210 g/m²</td><td class="p-3.5">45 – 210 g/m²</td></tr>
                    <tr><td class="p-3.5 font-semibold">Màn hình điều khiển</td><td class="p-3.5">LCD màu cảm ứng trực quan</td><td class="p-3.5">LCD màu cảm ứng lớn</td></tr>
                    <tr><td class="p-3.5 font-semibold">Mã cuộn Master tương thích</td><td class="p-3.5">DRS55 (Khổ B4)</td><td class="p-3.5">DRS85 (Khổ A3)</td></tr>
                  </tbody>
                </table>
              </div>
            """),
            ("loi-khuyen-dau-tu", "5. Tư vấn lựa chọn: Khi nào nên chọn X550 và khi nào nên chọn X850?", """
              <div class="p-6 bg-gray-50 border border-gray-200 mb-6">
                <p class="text-sm text-gray-700 leading-relaxed mb-3">
                  • <strong>Chọn DP-X550:</strong> Phù hợp cho 90% trường THPT, THCS, trung tâm bồi dưỡng văn hóa, phòng in của các trường đại học với nhu cầu in đề thi và tài liệu khổ A4/B4, chi phí thuê máy cực kỳ dễ chịu.
                </p>
                <p class="text-sm text-gray-700 leading-relaxed">
                  • <strong>Chọn DP-X850:</strong> Lựa chọn bắt buộc cho Hội đồng in sao đề thi tuyển sinh và tốt nghiệp của Sở GD&ĐT, các xưởng in ấn số lượng lớn cần in sách khổ A3 gấp đôi và yêu cầu thời gian in sao ngắn nhất.
                </p>
              </div>
            """),
        ],
        "related_links": [
            ("Xem thông số chi tiết máy in Duplo DP-X550", "/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dp-x550/"),
            ("Xem thông số chi tiết máy in Duplo DP-X850", "/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dp-x850/"),
            ("Báo giá thuê máy in nhân bản siêu tốc", "/nhan-tu-van/bao-gia/"),
        ],
    },
    {
        "slug": "giai-phap-phoi-trang-gap-ghim-tu-dong-duplo",
        "url": "/ve-huong-son/kien-thuc/giai-phap-phoi-trang-gap-ghim-tu-dong-duplo/",
        "title": "Giải pháp máy phối trang và giập ghim Duplo: Tự động hóa đóng tập đề thi và tài liệu",
        "seo_title": "Máy Phối Trang & Dập Ghim Duplo Đóng Tập Đề Thi | Hương Sơn",
        "seo_desc": "Giải pháp tự động hóa phối trang, dập ghim và gấp tập đề thi, sách vở bằng hệ thống Duplo DFC-100 / DFC-120: tốc độ 2.400 - 4.200 bộ/giờ, chống sót trang tuyệt đối.",
        "keywords": "máy phối trang duplo, máy dập ghim duplo, duplo dfc-100, duplo dfc-120, đóng tập đề thi tự động",
        "date": "2026-09-19",
        "reading_time": "6 phút đọc",
        "tag": "Thiết bị sau in",
        "aeo_answer": "Hệ thống máy phối trang và giập ghim tự động Duplo DFC-100 / DFC-120 kết hợp máy bấm ghim DFC-S giúp tự động hóa 100% khâu xếp trang, bấm ghim góc và ghim giữa đóng tập đề thi với năng suất 2.400 đến 4.200 bộ/giờ. Cảm biến quang học kép phát hiện chính xác lỗi sót trang, kẹt giấy hoặc nhầm mã đề, giúp Hội đồng thi giải phóng hoàn toàn sức lao động thủ công và đảm bảo tiến độ tuyệt đối.",
        "summary": "Giới thiệu giải pháp thiết bị hoàn thiện sau in chuyên nghiệp của Duplo: công nghệ phối trang ma sát thông minh, cơ chế kiểm soát lỗi trang kép và ứng dụng thực tiễn trong các kỳ thi lớn.",
        "image": "/assets/images/products/40-may-phoi-trang-dfc-120.png",
        "toc": [
            ("nut-that-sau-in", "1. 'Nút thắt cổ chai' trong khâu đóng gói đề thi và tài liệu"),
            ("nguyen-ly-hoat-dong", "2. Nguyên lý hoạt động của máy phối trang Duplo DFC series"),
            ("cac-tinh-nang-chong-loi", "3. Cơ chế kiểm soát lỗi chống sót trang và kẹt giấy"),
            ("so-sanh-hieu-suat", "4. Bảng so sánh hiệu suất: Xếp tay thủ công vs Hệ thống Duplo"),
            ("ung-dung-thuc-te", "5. Ứng dụng thực tế tại Hội đồng thi và nhà in chuyên nghiệp"),
        ],
        "faqs": [
            ("Máy phối trang Duplo DFC-100/120 có bao nhiêu khay nạp?",
             "Dòng Duplo DFC-100 có 10 khay nạp giấy, còn DFC-120 có 12 khay nạp. Ngoài ra, người dùng có thể kết nối 2 tháp máy lại với nhau để nâng tổng số khay phối lên tới 20 hoặc 24 trang trong một lượt chạy."),
            ("Máy có bấm ghim và gấp đôi thành tập vở luôn được không?",
             "Có. Khi kết nối tháp phối trang DFC với bộ dập ghim Duplo DFC-S II và bộ gấp giấy chuyên dụng, hệ thống sẽ tự động phối trang, bấm ghim giữa và gấp đôi thành tập sách hoặc tập đề thi hoàn chỉnh mà không cần chạm tay."),
            ("Máy có xử lý được các loại giấy mỏng như giấy in đề thi không?",
             "Có. Hệ thống tách giấy 3 con lăn cao su của Duplo được tinh chỉnh chính xác, hỗ trợ định lượng giấy từ 50g/m² đến 130g/m² mà không bị dính kép."),
        ],
        "content_blocks": [
            ("nut-that-sau-in", "1. 'Nút thắt cổ chai' trong khâu đóng gói đề thi và tài liệu", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Trong các kỳ thi tuyển sinh và tốt nghiệp THPT, máy in nhân bản siêu tốc Duplo có thể in ra hàng chục ngàn trang giấy mỗi giờ. Tuy nhiên, sau khi in xong, việc nhặt từng trang đề, xếp theo thứ tự trang 1-2-3-4, dập ghim và đóng túi thường phải huy động hàng chục cán bộ làm thủ công bằng tay.
              </p>
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Khâu làm tay này vừa chậm chạp, dễ gây nhầm lẫn trang giữa các mã đề thi khác nhau, vừa là nguy cơ gây lộ lọt thông tin. Trang bị <strong>hệ thống máy phối trang và hoàn thiện sau in Duplo</strong> là giải pháp tự động hóa giải quyết triệt để nút thắt này.
              </p>
            """),
            ("nguyen-ly-hoat-dong", "2. Nguyên lý hoạt động của máy phối trang Duplo DFC series", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Người vận hành chỉ cần xếp các trang in theo thứ tự vào từng khay (Khay 1 để trang 1, Khay 2 để trang 2...). Máy sẽ tự động rút đồng thời từng tờ từ các khay, xếp chồng khít lên nhau và chuyển thẳng sang máy dập ghim với tốc độ chớp nhoáng lên tới 4.200 bộ/giờ.
              </p>
            """),
            ("cac-tinh-nang-chong-loi", "3. Cơ chế kiểm soát lỗi chống sót trang và kẹt giấy", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Điểm đắt giá nhất của Duplo DFC là hệ thống cảm biến quang học kiểm soát lỗi 100%:
              </p>
              <ul class="space-y-2 mb-6 text-sm text-gray-700">
                <li>• <strong>Phát hiện thiếu tờ (Miss Feed):</strong> Nếu một khay bị hết giấy hoặc không rút được tờ giấy, máy dừng ngay và báo đèn đỏ tại khay đó.</li>
                <li>• <strong>Phát hiện rút đúp (Double Feed):</strong> Ngăn chặn việc học sinh nhận phải đề thi bị dính 2 trang giống nhau.</li>
                <li>• <strong>Phát hiện kẹt giấy (Paper Jam):</strong> Tự động ngắt mô-tơ bảo vệ tài liệu không bị rách nát.</li>
              </ul>
            """),
            ("so-sanh-hieu-suat", "4. Bảng so sánh hiệu suất: Xếp tay thủ công vs Hệ thống Duplo", """
              <div class="overflow-x-auto my-6 border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                  <thead>
                    <tr class="bg-gray-100 text-gray-900 border-b font-bold">
                      <th class="p-3.5">Tiêu chí so sánh</th>
                      <th class="p-3.5 bg-green-50 text-[#1A9900]">Hệ thống Duplo DFC-120</th>
                      <th class="p-3.5 text-red-600">Nhân công làm thủ công bằng tay</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 text-gray-700">
                    <tr><td class="p-3.5 font-semibold">Tốc độ hoàn thiện</td><td class="p-3.5 font-bold text-[#1A9900]">2.400 – 4.200 bộ đề/giờ</td><td class="p-3.5 text-red-600">Khoảng 150 – 250 bộ/người/giờ</td></tr>
                    <tr><td class="p-3.5 font-semibold">Số lượng nhân sự cần thiết</td><td class="p-3.5 font-bold text-[#1A9900]">Chỉ 1 người vận hành</td><td class="p-3.5 text-red-600">Cần từ 10 – 15 người</td></tr>
                    <tr><td class="p-3.5 font-semibold">Tỷ lệ sai sót (sót trang, lộn mã)</td><td class="p-3.5 font-bold text-[#1A9900]">0% (Cảm biến dừng tự động)</td><td class="p-3.5 text-red-600">Dễ mỏi mắt, nhầm lẫn sau vài giờ</td></tr>
                    <tr><td class="p-3.5 font-semibold">Mức độ bảo mật cách ly</td><td class="p-3.5 font-bold text-[#1A9900]">Tối đa (Hạn chế tối đa tiếp xúc giấy)</td><td class="p-3.5 text-red-600">Nhiều người chạm vào đề thi</td></tr>
                  </tbody>
                </table>
              </div>
            """),
            ("ung-dung-thuc-te", "5. Ứng dụng thực tế tại Hội đồng thi và nhà in chuyên nghiệp", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Hương Sơn cung cấp trọn bộ giải pháp in và phối trang hoàn thiện cho các Sở GD&ĐT, nhà in trường đại học và cơ quan phát hành tài liệu mật, giúp tiết kiệm 80% thời gian đóng gói sản phẩm sau in.
              </p>
            """),
        ],
        "related_links": [
            ("Xem model máy phối trang Duplo DFC-120", "/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dfc-122/"),
            ("Máy giập ghim Duplo DFC-S II", "/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dfc-sii/"),
            ("Giải pháp in sao đề thi tuyển sinh & tốt nghiệp", "/giai-phap/giao-duc/in-de-thi/"),
        ],
    },
    {
        "slug": "giai-phap-cho-thue-may-photocopy-ngan-hang-bao-mat",
        "url": "/ve-huong-son/kien-thuc/giai-phap-cho-thue-may-photocopy-ngan-hang-bao-mat/",
        "title": "Giải pháp cho thuê máy photocopy cho Ngân hàng: Tiêu chuẩn bảo mật dữ liệu & SLA 2h",
        "seo_title": "Cho Thuê Máy Photocopy Ngân Hàng: Bảo Mật Dữ Liệu & SLA 2h | Hương Sơn",
        "seo_desc": "Giải pháp thuê máy photocopy chuyên biệt cho hệ thống ngân hàng, tổ chức tài chính: mã hóa ổ cứng SED HDD, in quẹt thẻ bảo mật và cam kết ứng cứu kỹ thuật trong 2h.",
        "keywords": "cho thuê máy photocopy ngân hàng, bảo mật máy photocopy, mã hóa ổ cứng máy photo, managed print services ngân hàng, máy photo vietcombank",
        "date": "2026-09-19",
        "reading_time": "7 phút đọc",
        "tag": "Khối Ngân hàng",
        "aeo_answer": "Giải pháp cho thuê máy photocopy cho Ngân hàng và Tổ chức tài chính của Hương Sơn đáp ứng 4 tiêu chuẩn khắt khe nhất: (1) Ổ cứng tự mã hóa SED HDD chuẩn AES 256-bit kết hợp tính năng xóa dữ liệu tự động chống lộ lọt thông tin; (2) In ấn bảo mật xác thực qua thẻ từ nhân viên (NFC/RFID); (3) Phần mềm quản lý phân quyền in và kiểm soát định mức từng phòng ban; (4) Cam kết SLA có mặt xử lý kỹ thuật tận nơi trong ≤ 2 giờ và đổi máy mới trong 24 giờ.",
        "summary": "Phân tích các yêu cầu kỹ thuật và an toàn thông tin bắt buộc khi triển khai dịch vụ in ấn cho các phòng giao dịch ngân hàng: kinh nghiệm từ dự án triển khai cho mạng lưới Vietcombank.",
        "image": "/assets/images/products/vietcombank-2024.jpg",
        "toc": [
            ("thach-thuc-ngan-hang", "1. Thách thức an toàn thông tin in ấn tại các ngân hàng"),
            ("4-tieu-chuan-bao-mat", "2. 4 tiêu chuẩn an ninh bắt buộc đối với máy photocopy ngân hàng"),
            ("giai-phap-mps-huong-son", "3. Giải pháp Managed Print Services (MPS) của Hương Sơn"),
            ("cam-ket-sla-2h", "4. Cam kết SLA phản ứng nhanh trong 2 giờ"),
            ("case-study-vietcombank", "5. Điển cứu thực tế: Triển khai cho hệ thống Vietcombank"),
        ],
        "faqs": [
            ("Làm thế nào để ngăn chặn việc nhân viên bỏ quên tài liệu mật trên khay giấy?",
             "Giải pháp in ấn xác thực Follow-Me Printing yêu cầu người dùng phải quẹt thẻ nhân viên hoặc nhập mã PIN trực tiếp tại màn hình máy photocopy thì lệnh in mới được nhả giấy. Nếu không quẹt thẻ trong vòng 4 tiếng, lệnh in tự động bị hủy, đảm bảo không bao giờ có tài liệu nhạy cảm nằm lộ thiên trên máy."),
            ("Khi hết hạn thuê máy, dữ liệu lưu trong ổ cứng máy photocopy được xử lý thế nào?",
             "Trước khi thu hồi máy về kho, kỹ sư Hương Sơn cùng cán bộ an ninh IT của ngân hàng thực hiện quy trình ghi đè dữ liệu theo chuẩn DoD 5220.22-M của Bộ Quốc phòng Mỹ hoặc tháo giao lại ổ cứng nguyên bản cho ngân hàng tiêu hủy có biên bản xác nhận."),
            ("Hương Sơn có hỗ trợ thay mực và sửa chữa ngoài giờ hành chính cho ngân hàng không?",
             "Có. Với khối ngân hàng và tài chính, Hương Sơn hỗ trợ dịch vụ bảo dưỡng và thay thế vật tư vào cuối tuần (Thứ 7, Chủ Nhật) hoặc ngoài giờ giao dịch để không làm ảnh hưởng đến tiến độ phục vụ khách hàng."),
        ],
        "content_blocks": [
            ("thach-thuc-ngan-hang", "1. Thách thức an toàn thông tin in ấn tại các ngân hàng", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Các phòng giao dịch ngân hàng hàng ngày phải in sao hàng ngàn trang tài liệu chứa thông tin nhạy cảm: hợp đồng tín dụng, sao kê tài khoản, bản sao căn cước công dân và hồ sơ thế chấp. Máy photocopy kết nối mạng nội bộ là một trong những mắt xích dễ bị tấn công mạng hoặc lộ lọt dữ liệu nhất nếu không được thiết lập an ninh nghiêm ngặt.
              </p>
            """),
            ("4-tieu-chuan-bao-mat", "2. 4 tiêu chuẩn an ninh bắt buộc đối với máy photocopy ngân hàng", """
              <div class="grid grid-cols-1 md:grid-cols-2 gap-5 my-6">
                <div class="border border-gray-200 p-5 bg-white"><h5 class="font-bold text-gray-900 mb-2 text-[#1A9900]">1. Ổ cứng tự mã hóa (SED HDD)</h5><p class="text-sm text-gray-600">Dữ liệu quét và in lưu trong ổ cứng máy photo được mã hóa phần cứng AES 256-bit. Ngay cả khi kẻ gian tháo ổ cứng cắm vào máy tính khác cũng không thể đọc được dữ liệu.</p></div>
                <div class="border border-gray-200 p-5 bg-white"><h5 class="font-bold text-gray-900 mb-2 text-[#1A9900]">2. Tự động ghi đè dữ liệu (Data Overwrite)</h5><p class="text-sm text-gray-600">Ngay sau khi lệnh in hoặc scan hoàn tất, máy lập tức ghi đè dữ liệu ngẫu nhiên lên vùng nhớ tạm, xóa sạch dấu vết tệp tin.</p></div>
                <div class="border border-gray-200 p-5 bg-white"><h5 class="font-bold text-gray-900 mb-2 text-[#1A9900]">3. Xác thực người dùng bằng thẻ từ NFC</h5><p class="text-sm text-gray-600">Chỉ giao dịch viên có thẻ nội bộ ngân hàng mới được kích hoạt máy và in đúng tài liệu do mình gửi lệnh.</p></div>
                <div class="border border-gray-200 p-5 bg-white"><h5 class="font-bold text-gray-900 mb-2 text-[#1A9900]">4. Nhật ký kiểm toán in ấn (Audit Log)</h5><p class="text-sm text-gray-600">Ghi lại chính xác ai đã in, in tài liệu gì, vào thời gian nào, phục vụ công tác thanh tra nội bộ.</p></div>
              </div>
            """),
            ("giai-phap-mps-huong-son", "3. Giải pháp Managed Print Services (MPS) của Hương Sơn", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Hương Sơn cung cấp gói giải pháp quản lý in ấn trọn vòng đời: cung cấp máy photocopy Toshiba e-STUDIO thế hệ mới, bao trọn mực in chính hãng và mực chất lượng cao FANSIPAN, linh kiện thay thế và phần mềm giám sát sản lượng từ xa.
              </p>
            """),
            ("cam-ket-sla-2h", "4. Cam kết SLA phản ứng nhanh trong 2 giờ", """
              <div class="bg-green-50 p-6 border border-green-200 mb-6">
                <h5 class="font-bold text-[#1A9900] text-base mb-2">Cam kết dịch vụ SLA tiêu chuẩn vàng</h5>
                <p class="text-sm text-gray-700 leading-relaxed mb-2">• Tiếp nhận yêu cầu kỹ thuật: ≤ 15 phút qua Hotline chuyên trách.</p>
                <p class="text-sm text-gray-700 leading-relaxed mb-2">• Kỹ thuật viên có mặt tại điểm giao dịch: ≤ 2 giờ tại khu vực nội thành.</p>
                <p class="text-sm text-gray-700 leading-relaxed">• Đổi máy photocopy mới tương đương: Trong vòng 24 giờ nếu sự cố nặng không khắc phục tại chỗ được.</p>
              </div>
            """),
            ("case-study-vietcombank", "5. Điển cứu thực tế: Triển khai cho hệ thống Vietcombank", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Hương Sơn đã hoàn tất cung cấp và bàn giao máy photocopy đa chức năng Toshiba cho mạng lưới chi nhánh Vietcombank, giúp ngân hàng tiết kiệm 35% chi phí vận hành và đảm bảo an ninh thông tin tài chính theo chuẩn quốc tế.
              </p>
            """),
        ],
        "related_links": [
            ("Dự án cung cấp máy photocopy cho Vietcombank", "/du-an/vietcombank-cung-cap-may-photocopy/"),
            ("Giải pháp in ấn cho khối Ngân hàng – Tài chính", "/giai-phap/ngan-hang-tai-chinh/"),
            ("Dịch vụ cho thuê thiết bị văn phòng chuyên nghiệp", "/giai-phap/cho-thue-thiet-bi/"),
        ],
    },
    {
        "slug": "top-may-photocopy-van-phong-cho-thue-chay-nhat",
        "url": "/ve-huong-son/kien-thuc/top-may-photocopy-van-phong-cho-thue-chay-nhat/",
        "title": "Top 5 dòng máy photocopy cho thuê được các doanh nghiệp lựa chọn nhiều nhất 2026",
        "seo_title": "Top 5 Máy Photocopy Cho Thuê Bán Chạy Nhất 2026 | Hương Sơn",
        "seo_desc": "Đánh giá chi tiết 5 model máy photocopy văn phòng cho thuê được ưa chuộng nhất: Toshiba e-STUDIO 2528A, 3528A, 4528A, 6528A và Konica Minolta bizhub 360i.",
        "keywords": "top máy photocopy cho thuê, thuê máy photocopy toshiba 2528a, toshiba 3528a, toshiba 4528a, konica bizhub 360i",
        "date": "2026-09-20",
        "reading_time": "6 phút đọc",
        "tag": "Cẩm nang tư vấn",
        "aeo_answer": "Top 5 dòng máy photocopy cho thuê phổ biến nhất năm 2026 gồm: (1) Toshiba e-STUDIO 2528A (25 ppm, văn phòng nhỏ 10-30 người); (2) Toshiba e-STUDIO 3528A (35 ppm, văn phòng vừa 30-70 người); (3) Toshiba e-STUDIO 4528A (45 ppm, trường học và phòng hành chính); (4) Toshiba e-STUDIO 6528A (65 ppm, công suất lớn cho trung tâm in ấn); (5) Konica Minolta bizhub 360i (36 ppm, doanh nghiệp cần đồ họa sắc nét và bảo mật cao).",
        "summary": "Bảng tổng hợp và so sánh chi tiết ưu nhược điểm của 5 dòng máy photocopy khổ A3 được các công ty và trường học lựa chọn thuê nhiều nhất: phân tích cấu hình, tốc độ và ngân sách phù hợp.",
        "image": "/assets/images/banners/toshiba_mfp_product_1787905812744.jpg",
        "toc": [
            ("tieu-chi-danh-gia", "1. Tiêu chí lựa chọn top 5 dòng máy photocopy cho thuê"),
            ("danh-gia-tung-model", "2. Đánh giá chi tiết 5 dòng máy bán chạy nhất"),
            ("bang-so-sanh-top-5", "3. Bảng tổng hợp so sánh cấu hình và công suất"),
            ("huong-dan-chon-theo-quy-mo", "4. Hướng dẫn chọn máy đúng quy mô nhân sự văn phòng"),
            ("chinh-sach-thue-huong-son", "5. Chính sách thuê máy và hỗ trợ kỹ thuật tại Hương Sơn"),
        ],
        "faqs": [
            ("Văn phòng khoảng 40 nhân sự thì nên thuê model nào?",
             "Với văn phòng 40 nhân sự (sản lượng in trung bình từ 8.000 – 15.000 trang/tháng), model Toshiba e-STUDIO 3528A hoặc 4528A là sự lựa chọn hoàn hảo nhất: tốc độ in nhanh 35–45 trang/phút, khay nạp 2 mặt tự động và hoạt động êm ái."),
            ("Giá thuê trọn gói các dòng máy này trung bình khoảng bao nhiêu?",
             "Tại Hương Sơn, giá thuê các dòng máy photocopy đa chức năng khổ A3 dao động từ 800.000đ đến 2.500.000đ/tháng tùy theo tốc độ máy và định mức số bản in miễn phí kèm theo hợp đồng."),
            ("Hương Sơn có hỗ trợ cài đặt in ấn qua mạng cho toàn bộ máy tính không?",
             "Có. Kỹ thuật viên Hương Sơn sẽ đến tận nơi lắp đặt, kết nối mạng LAN/Wi-Fi, cài driver cho toàn bộ máy tính Windows/Macbook và hướng dẫn nhân viên sử dụng chi tiết miễn phí 100%."),
        ],
        "content_blocks": [
            ("tieu-chi-danh-gia", "1. Tiêu chí lựa chọn top 5 dòng máy photocopy cho thuê", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Một máy photocopy cho thuê lý tưởng phải hội tụ đủ các yếu tố: hoạt động bền bỉ ít kẹt giấy trong môi trường văn phòng, tốc độ xử lý nhanh, chi phí mực in kinh tế và giao diện thân thiện với người dùng. Dưới đây là 5 dòng máy đáp ứng xuất sắc nhất các tiêu chí trên:
              </p>
            """),
            ("danh-gia-tung-model", "2. Đánh giá chi tiết 5 dòng máy bán chạy nhất", """
              <div class="space-y-4 mb-6">
                <div class="border border-gray-200 p-5 bg-white"><h5 class="font-bold text-gray-900 text-base mb-1 text-[#1A9900]">1. Toshiba e-STUDIO 2528A – Sự lựa chọn kinh tế cho văn phòng nhỏ</h5><p class="text-sm text-gray-600">Tốc độ 25 trang/phút, nhỏ gọn, hoạt động cực kỳ êm ái, đầy đủ tính năng In mạng – Scan màu – Copy 2 mặt.</p></div>
                <div class="border border-gray-200 p-5 bg-white"><h5 class="font-bold text-gray-900 text-base mb-1 text-[#1A9900]">2. Toshiba e-STUDIO 3528A – Dòng máy quốc dân cho văn phòng vừa</h5><p class="text-sm text-gray-600">Tốc độ 35 trang/phút, màn hình cảm ứng 10.1 inch mượt mà, công suất chịu tải 30.000 trang/tháng.</p></div>
                <div class="border border-gray-200 p-5 bg-white"><h5 class="font-bold text-gray-900 text-base mb-1 text-[#1A9900]">3. Toshiba e-STUDIO 4528A – Cỗ máy cày ải cho trường học và khối hành chính</h5><p class="text-sm text-gray-600">Tốc độ 45 trang/phút, khay nạp bản gốc 2 mặt siêu tốc DSDF lên tới 240 ảnh/phút, giải quyết tài liệu dày trong tích tắc.</p></div>
                <div class="border border-gray-200 p-5 bg-white"><h5 class="font-bold text-gray-900 text-base mb-1 text-[#1A9900]">4. Toshiba e-STUDIO 6528A – Công suất công nghiệp cho nhu cầu in số lượng lớn</h5><p class="text-sm text-gray-600">Tốc độ cực nhanh 65 trang/phút, công suất bền bỉ tới 100.000 trang/tháng, phù hợp cho trung tâm tài liệu và ngân hàng lớn.</p></div>
                <div class="border border-gray-200 p-5 bg-white"><h5 class="font-bold text-gray-900 text-base mb-1 text-[#1A9900]">5. Konica Minolta bizhub 360i – Đỉnh cao công nghệ và bảo mật thông minh</h5><p class="text-sm text-gray-600">Tốc độ 36 trang/phút, vi xử lý Quad-Core mạnh mẽ, độ phân giải 1200 dpi siêu nét, bảo mật virus Bitdefender tích hợp.</p></div>
              </div>
            """),
            ("bang-so-sanh-top-5", "3. Bảng tổng hợp so sánh cấu hình và công suất", """
              <div class="overflow-x-auto my-6 border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                  <thead>
                    <tr class="bg-gray-100 text-gray-900 border-b font-bold">
                      <th class="p-3">Model máy</th>
                      <th class="p-3">Tốc độ in A4</th>
                      <th class="p-3">Khổ giấy</th>
                      <th class="p-3">Khay giấy tiêu chuẩn</th>
                      <th class="p-3">Quy mô nhân sự phù hợp</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 text-gray-700">
                    <tr><td class="p-3 font-semibold text-[#1A9900]">Toshiba e-STUDIO 2528A</td><td class="p-3">25 ppm</td><td class="p-3">A5 – A3</td><td class="p-3">1.200 tờ</td><td class="p-3">10 – 25 người</td></tr>
                    <tr><td class="p-3 font-semibold text-[#1A9900]">Toshiba e-STUDIO 3528A</td><td class="p-3">35 ppm</td><td class="p-3">A5 – A3</td><td class="p-3">1.200 tờ</td><td class="p-3">25 – 60 người</td></tr>
                    <tr><td class="p-3 font-semibold text-[#1A9900]">Toshiba e-STUDIO 4528A</td><td class="p-3">45 ppm</td><td class="p-3">A5 – A3</td><td class="p-3">1.200 tờ</td><td class="p-3">50 – 120 người</td></tr>
                    <tr><td class="p-3 font-semibold text-[#1A9900]">Toshiba e-STUDIO 6528A</td><td class="p-3">65 ppm</td><td class="p-3">A5 – A3</td><td class="p-3">3.200 tờ</td><td class="p-3">100 – 300 người</td></tr>
                    <tr><td class="p-3 font-semibold text-blue-700">Konica Minolta bizhub 360i</td><td class="p-3">36 ppm</td><td class="p-3">A5 – A3 / SRA3</td><td class="p-3">1.150 tờ</td><td class="p-3">30 – 80 người</td></tr>
                  </tbody>
                </table>
              </div>
            """),
            ("huong-dan-chon-theo-quy-mo", "4. Hướng dẫn chọn máy đúng quy mô nhân sự văn phòng", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Chọn máy đúng công suất giúp tránh lãng phí chi phí thuê và ngăn ngừa tình trạng máy bị quá tải gây kẹt giấy. Đội ngũ kỹ sư Hương Sơn sẵn sàng đến tận nơi khảo sát mặt bằng và tư vấn miễn phí.
              </p>
            """),
            ("chinh-sach-thue-huong-son", "5. Chính sách thuê máy và hỗ trợ kỹ thuật tại Hương Sơn", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Khi thuê máy tại Hương Sơn, khách hàng được hưởng chính sách đặc quyền: 0 đồng đặt cọc, đổi máy mới sau 2 năm nếu có nhu cầu, miễn phí 100% mực in và linh kiện, kỹ thuật hỗ trợ trong 2 giờ.
              </p>
            """),
        ],
        "related_links": [
            ("Danh mục máy photocopy đa chức năng cho thuê", "/san-pham/photocopy-may-da-chuc-nang/"),
            ("Xem chi tiết dòng máy Toshiba e-STUDIO 4528A", "/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-4528a/"),
            ("Báo giá dịch vụ thuê máy photocopy trọn gói", "/nhan-tu-van/bao-gia/"),
        ],
    },
    {
        "slug": "so-sanh-may-scan-ricoh-fi-8170-va-fi-8270",
        "url": "/ve-huong-son/kien-thuc/so-sanh-may-scan-ricoh-fi-8170-va-fi-8270/",
        "title": "So sánh máy scan Ricoh fi-8170 và Ricoh fi-8270: Khi nào cần thêm mặt kính phẳng Flatbed?",
        "seo_title": "So Sánh Ricoh fi-8170 và fi-8270: Có Cần Mặt Kính Flatbed? | Hương Sơn",
        "seo_desc": "Đặt lên bàn cân Ricoh fi-8170 và Ricoh fi-8270: cùng tốc độ 70 ppm/140 ipm nhưng fi-8270 có thêm mặt kính phẳng Flatbed để quét học bạ, sổ đỏ, hộ chiếu và sách báo.",
        "keywords": "ricoh fi-8170 vs fi-8270, so sánh máy scan ricoh, ricoh fi-8270, ricoh fi-8170, máy scan số hóa tài liệu",
        "date": "2026-09-21",
        "reading_time": "6 phút đọc",
        "tag": "So sánh thiết bị",
        "aeo_answer": "Ricoh fi-8170 và fi-8270 có cùng tốc độ quét 70 trang/phút (140 ảnh/phút), cùng bộ nạp tự động ADF 100 tờ và cảm biến chống kẹt siêu âm iSOP. Điểm khác biệt duy nhất: fi-8270 tích hợp thêm mặt kính phẳng Flatbed để quét các tài liệu không thể tháo ghim như học bạ, sổ hộ khẩu, sổ đỏ, hộ chiếu và sách cổ mỏng manh. Nếu đơn vị chỉ quét tài liệu rời từng tờ, chọn fi-8170 để tiết kiệm chi phí; nếu có quét học bạ đóng quyển hoặc giấy tờ ép plastic, chọn fi-8270.",
        "summary": "Phân tích kỹ lưỡng hai model máy scan số hóa tài liệu cao cấp nhất của Ricoh: sự cần thiết của mặt kính phẳng Flatbed và lời khuyên lựa chọn đúng đắn cho trường học, cơ quan.",
        "image": "/assets/images/products/ricoh-fi-8170.png",
        "toc": [
            ("diem-giong-nhau", "1. Điểm giống nhau cốt lõi giữa Ricoh fi-8170 và fi-8270"),
            ("diem-khac-biet", "2. Điểm khác biệt quan trọng: Mặt kính phẳng Flatbed"),
            ("bang-so-sanh-thong-so", "3. Bảng so sánh thông số kỹ thuật chi tiết"),
            ("khi-nao-can-flatbed", "4. Các trường hợp bắt buộc phải có mặt kính phẳng Flatbed"),
            ("loi-khuyen-chuyen-gia", "5. Lời khuyên đầu tư từ chuyên gia số hóa Hương Sơn"),
        ],
        "faqs": [
            ("Mặt kính phẳng của Ricoh fi-8270 có quét được tài liệu khổ A3 không?",
             "Mặt kính phẳng của fi-8270 có kích thước khổ A4 (216 x 297 mm). Đối với tài liệu khổ A3, người dùng có thể gập đôi tài liệu và nạp qua khay ADF kèm tấm lót Carrier Sheet chuyên dụng."),
            ("Ricoh fi-8170 có quét được thẻ căn cước công dân gắn chip không?",
             "Có. Khay nạp ADF của cả fi-8170 và fi-8270 đều hỗ trợ nạp thẻ nhựa dày tới 1.4mm (như thẻ căn cước, thẻ ATM, bằng lái xe) thông qua khe nạp thẳng."),
            ("Giá máy scan Ricoh fi-8270 chênh lệch bao nhiêu so với fi-8170?",
             "Do được tích hợp thêm hệ thống quang học mặt kính phẳng và thân máy lớn hơn, Ricoh fi-8270 thường có giá cao hơn khoảng 8 – 12 triệu đồng so với bản fi-8170."),
        ],
        "content_blocks": [
            ("diem-giong-nhau", "1. Điểm giống nhau cốt lõi giữa Ricoh fi-8170 và fi-8270", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Cả hai model đều chia sẻ chung nền tảng công nghệ số hóa hàng đầu thế giới của Ricoh (trước đây là Fujitsu):
              </p>
              <ul class="space-y-2 mb-6 text-sm text-gray-700">
                <li>• Tốc độ quét ấn tượng: 70 tờ/phút (140 ảnh/phút khi quét 2 mặt).</li>
                <li>• Khay nạp tự động ADF sức chứa 100 tờ khổ A4.</li>
                <li>• Cảm biến bảo vệ tài liệu iSOP bằng sóng âm và giám sát độ lệch giấy cơ học.</li>
                <li>• Phần mềm xử lý hình ảnh PaperStream IP và OCR ABBYY FineReader tiếng Việt chính xác.</li>
              </ul>
            """),
            ("diem-khac-biet", "2. Điểm khác biệt quan trọng: Mặt kính phẳng Flatbed", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Khác biệt lớn nhất nằm ở phần thân dưới của máy: <strong>Ricoh fi-8270 được gắn liền một mặt kính phẳng (Flatbed)</strong>. Người dùng chỉ cần mở nắp trên để đặt tài liệu nằm ngửa trên mặt kính và nhấn nút quét.
              </p>
            """),
            ("bang-so-sanh-thong-so", "3. Bảng so sánh thông số kỹ thuật chi tiết", """
              <div class="overflow-x-auto my-6 border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                  <thead>
                    <tr class="bg-gray-100 text-gray-900 border-b font-bold">
                      <th class="p-3.5">Tiêu chí kỹ thuật</th>
                      <th class="p-3.5 bg-green-50 text-[#1A9900]">Ricoh fi-8170 (ADF thuần túy)</th>
                      <th class="p-3.5 bg-blue-50 text-blue-700">Ricoh fi-8270 (ADF + Flatbed)</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 text-gray-700">
                    <tr><td class="p-3.5 font-semibold">Tốc độ quét khay ADF</td><td class="p-3.5 font-bold text-[#1A9900]">70 ppm / 140 ipm</td><td class="p-3.5">70 ppm / 140 ipm</td></tr>
                    <tr><td class="p-3.5 font-semibold">Tốc độ quét mặt kính Flatbed</td><td class="p-3.5">Không có</td><td class="p-3.5 font-bold text-blue-700">1.7 giây / trang (200/300 dpi)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Khả năng quét sách đóng gáy</td><td class="p-3.5">Phải tháo gáy tài liệu</td><td class="p-3.5 font-bold text-blue-700">Quét trực tiếp trên mặt kính</td></tr>
                    <tr><td class="p-3.5 font-semibold">Kích thước máy (RxSxC)</td><td class="p-3.5 font-bold text-[#1A9900]">300 x 170 x 163 mm (Gọn gàng)</td><td class="p-3.5">300 x 577 x 234 mm (Dài hơn)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Trọng lượng máy</td><td class="p-3.5 font-bold text-[#1A9900]">4.0 kg</td><td class="p-3.5">8.8 kg</td></tr>
                    <tr><td class="p-3.5 font-semibold">Công suất ngày khuyến nghị</td><td class="p-3.5">10.000 tờ/ngày</td><td class="p-3.5">10.000 tờ/ngày</td></tr>
                  </tbody>
                </table>
              </div>
            """),
            ("khi-nao-can-flatbed", "4. Các trường hợp bắt buộc phải có mặt kính phẳng Flatbed", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Nếu đơn vị thuộc các trường hợp sau, nên chọn <strong>Ricoh fi-8270</strong>:
              </p>
              <ul class="space-y-2 mb-6 text-sm text-gray-700">
                <li>• Quét học bạ học sinh dập ghim nhiều năm, không được phép gỡ kim bấm.</li>
                <li>• Quét hộ chiếu, visa, giấy tờ tùy thân ép plastic bóng dễ trượt con lăn.</li>
                <li>• Quét hồ sơ đất đai, sổ đỏ, bằng khen có hoa văn nổi.</li>
                <li>• Quét tài liệu lịch sử mục nát, rách góc có nguy cơ kẹt máy khi chạy qua trục cuốn.</li>
              </ul>
            """),
            ("loi-khuyen-chuyen-gia", "5. Lời khuyên đầu tư từ chuyên gia số hóa Hương Sơn", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Nếu văn phòng của Quý khách chủ yếu số hóa công văn đi đến, hợp đồng và hóa đơn tài chính từng tờ rời, <strong>Ricoh fi-8170</strong> là sự lựa chọn số 1 vừa gọn gàng vừa tiết kiệm ngân sách.
              </p>
            """),
        ],
        "related_links": [
            ("Xem chi tiết máy scan Ricoh fi-8170", "/san-pham/may-scan-so-hoa/ricoh-fi-8170/"),
            ("Xem chi tiết máy scan Ricoh fi-8270", "/san-pham/may-scan-so-hoa/ricoh-fi-8270/"),
            ("Báo giá máy scan Ricoh chính hãng", "/nhan-tu-van/bao-gia/"),
        ],
    },
    {
        "slug": "so-hoa-hoc-ba-dien-tu-thpt-chuan-moet",
        "url": "/ve-huong-son/kien-thuc/so-hoa-hoc-ba-dien-tu-thpt-chuan-moet/",
        "title": "Hướng dẫn số hóa sổ điểm và học bạ điện tử trường học theo chuẩn Bộ GD&ĐT",
        "seo_title": "Số Hóa Học Bạ Điện Tử & Sổ Điểm Chuẩn Bộ GD&ĐT | Hương Sơn",
        "seo_desc": "Quy trình chuyển đổi số học bạ và sổ điểm cho các trường THPT, THCS: quy chuẩn scan ảnh màu, công nghệ OCR tiếng Việt, đặt tên file theo mã định danh học sinh.",
        "keywords": "số hóa học bạ điện tử, scan học bạ trường học, số hóa sổ điểm, chuyển đổi số giáo dục, máy scan học bạ ricoh",
        "date": "2026-09-22",
        "reading_time": "7 phút đọc",
        "tag": "Chuyển đổi số",
        "aeo_answer": "Quy trình số hóa học bạ điện tử và sổ điểm trường học chuẩn Bộ GD&ĐT gồm 5 bước: (1) Kiểm kê và làm phẳng học bạ; (2) Quét scan màu ở độ phân giải 300 dpi bằng máy scan chuyên dụng (Ricoh fi-8170 hoặc fi-8270); (3) Xử lý hình ảnh loại bỏ tạp chất và làm rõ nét chữ viết tay; (4) Chạy nhận dạng OCR tiếng Việt xuất tệp Searchable PDF/A; (5) Đặt tên file tự động theo mã định danh học sinh (Ví dụ: [Mã_Học_Sinh]_[Họ_Tên]_[Khóa_Học].pdf) để đồng bộ lên cơ sở dữ liệu ngành.",
        "summary": "Cẩm nang hướng dẫn chi tiết quy trình số hóa hồ sơ học sinh, học bạ điện tử và sổ gọi tên ghi điểm phục vụ công tác chuyển đổi số toàn diện ngành giáo dục.",
        "image": "/assets/images/banners/hero_edu_tech_1787899932385.jpg",
        "toc": [
            ("yeu-cau-chuyen-doi-so", "1. Yêu cầu cấp thiết về học bạ điện tử trong ngành GD&ĐT"),
            ("dac-thu-hoc-ba-giay", "2. Những khó khăn đặc thù khi quét học bạ giấy cũ"),
            ("quy-trinh-5-buoc", "3. Quy trình 5 bước số hóa học bạ chuẩn quốc gia"),
            ("tieu-chuan-file-dau-ra", "4. Tiêu chuẩn định dạng tệp và quy tắc đặt tên file"),
            ("thiet-bi-khuyen-nghi", "5. Thiết bị scan chuyên dụng phù hợp nhất cho trường học"),
        ],
        "faqs": [
            ("Học bạ có chữ viết tay của giáo viên thì phần mềm OCR có nhận dạng được không?",
             "Phần mềm OCR hiện đại của Ricoh nhận dạng rất tốt các trường thông tin in sẵn (tiêu đề môn học, năm học) và các con số điểm số viết tay rõ ràng. Đối với các nhận xét viết tay nét chữ nghiêng hoặc thảo, hệ thống tạo lớp văn bản tìm kiếm gần đúng, đồng thời lưu giữ nguyên vẹn hình ảnh nét bút gốc của giáo viên."),
            ("Mỗi học bạ THPT thường dài bao nhiêu trang và dung lượng file sau khi scan là bao nhiêu?",
             "Một cuốn học bạ THPT đầy đủ 3 năm học thường gồm 12 đến 16 trang. Khi quét màu ở độ phân giải 300 dpi và nén chuẩn PDF/A, dung lượng file chỉ khoảng 1.5MB – 2.5MB, hoàn toàn tối ưu cho việc lưu trữ và truyền tải qua cổng thông tin điện tử."),
            ("Hương Sơn có cung cấp dịch vụ số hóa học bạ trọn gói tại trường không?",
             "Có. Hương Sơn nhận hợp đồng triển khai trọn gói: mang máy scan tốc độ cao, máy tính và nhân sự trực tiếp đến phòng lưu trữ của trường học để chỉnh lý, quét, đặt tên và nhập cơ sở dữ liệu với cam kết bảo mật thông tin học sinh tuyệt đối."),
        ],
        "content_blocks": [
            ("yeu-cau-chuyen-doi-so", "1. Yêu cầu cấp thiết về học bạ điện tử trong ngành GD&ĐT", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Chuyển đổi số trong giáo dục đang được đẩy mạnh trên toàn quốc. Việc thay thế học bạ giấy truyền thống bằng học bạ điện tử giúp các trường học tiết kiệm hàng ngàn mét vuông kho lưu trữ, tránh nguy cơ cháy nổ, mối mọt và giúp cựu học sinh xin cấp lại bảng điểm chỉ trong vài phút thay vì phải chờ lục tìm hồ sơ lưu trữ hàng tuần.
              </p>
            """),
            ("dac-thu-hoc-ba-giay", "2. Những khó khăn đặc thù khi quét học bạ giấy cũ", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Học bạ giấy thường có những đặc tính kỹ thuật rất khó xử lý bằng máy quét văn phòng thông thường:
              </p>
              <ul class="space-y-2 mb-6 text-sm text-gray-700">
                <li>• Được đóng ghim sắt giữa cuốn, ghim lâu năm dễ bị rỉ sét làm ố vàng giấy.</li>
                <li>• Bìa học bạ dày hơn ruột, có dán ảnh học sinh và đóng dấu giáp lai nổi.</li>
                <li>• Mực viết tay và con dấu đỏ qua nhiều năm dễ bị phai nhạt nét chữ.</li>
              </ul>
            """),
            ("quy-trinh-5-buoc", "3. Quy trình 5 bước số hóa học bạ chuẩn quốc gia", """
              <div class="space-y-3 mb-6">
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 1: Làm sạch và chuẩn bị hồ sơ</h5><p class="text-xs text-gray-600">Tháo ghim rỉ sét (nếu quét khay cuốn) hoặc vuốt phẳng các nếp gấp trang.</p></div>
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 2: Quét ảnh màu 300 dpi</h5><p class="text-xs text-gray-600">Sử dụng máy scan Ricoh fi-8270 quét mặt phẳng bìa có ảnh giáp lai và nạp khay cuốn cho các trang ruột.</p></div>
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 3: Tối ưu hình ảnh tự động</h5><p class="text-xs text-gray-600">Tự động tăng cường độ tương phản, làm đậm nét chữ mờ và loại bỏ vết ố vàng nền giấy.</p></div>
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 4: Nhận dạng OCR và ghép nối tệp</h5><p class="text-xs text-gray-600">Ghép toàn bộ các trang thành 1 file duy nhất định dạng Searchable PDF/A.</p></div>
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 5: Lập chỉ mục và đặt tên file tự động</h5><p class="text-xs text-gray-600">Đổi tên file theo cấu trúc chuẩn: [MaDinhDanh]_[HoTen]_[NamSinh].pdf để nhập CSDL.</p></div>
              </div>
            """),
            ("tieu-chuan-file-dau-ra", "4. Tiêu chuẩn định dạng tệp và quy tắc đặt tên file", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Tệp số hóa đạt chuẩn phải là <strong>PDF/A (ISO 19005)</strong> đảm bảo hiển thị đồng nhất trên mọi thiết bị và giữ nguyên giá trị pháp lý lưu trữ vĩnh viễn theo quy định của Cục Văn thư và Lưu trữ Nhà nước.
              </p>
            """),
            ("thiet-bi-khuyen-nghi", "5. Thiết bị scan chuyên dụng phù hợp nhất cho trường học", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Hương Sơn khuyến nghị model <strong>Ricoh fi-8270</strong> hoặc tổ hợp <strong>Ricoh fi-8170 + Flatbed rời</strong> cho các trường học và phòng GD&ĐT để đạt năng suất quét 300–500 cuốn học bạ mỗi ngày.
              </p>
            """),
        ],
        "related_links": [
            ("Giải pháp số hóa hồ sơ trường học trọn gói", "/giai-phap/giao-duc/so-hoa-ho-so-truong-hoc/"),
            ("Danh mục máy scan Ricoh chính hãng", "/san-pham/may-scan-so-hoa/"),
            ("Đăng ký nhận phương án số hóa học bạ miễn phí", "/nhan-tu-van/khao-sat-so-hoa/"),
        ],
    },
    {
        "slug": "muc-in-fansipan-cong-nghe-nhat-ban-danh-gia",
        "url": "/ve-huong-son/kien-thuc/muc-in-fansipan-cong-nghe-nhat-ban-danh-gia/",
        "title": "Đánh giá chất lượng mực in FANSIPAN công nghệ Nhật Bản: Tiết kiệm 40% chi phí bản in",
        "seo_title": "Đánh Giá Mực In FANSIPAN Công Nghệ Nhật Bản | Hương Sơn",
        "seo_desc": "Kiểm nghiệm thực tế mực in thương hiệu FANSIPAN do Hương Sơn sản xuất: độ mịn hạt mực, độ bám đen, tỷ lệ mực thải và giải pháp tiết kiệm 40-50% chi phí vận hành máy.",
        "keywords": "mực in fansipan, đánh giá mực fansipan, mực máy photocopy fansipan, mực toshiba fansipan, mực ricoh fansipan",
        "date": "2026-09-23",
        "reading_time": "6 phút đọc",
        "tag": "Kỹ thuật & Vật tư",
        "aeo_answer": "Mực in thương hiệu FANSIPAN do Hương Sơn nghiên cứu và phát triển theo công nghệ hạt mực Polymer vi tinh thể chuẩn Nhật Bản mang lại giải pháp đột phá: tiết kiệm từ 40% đến 50% chi phí so với mực chính hãng OEM, cho bản in đen đậm sắc nét, tỷ lệ mực thải cực thấp (< 3%), không gây xước bề mặt trống drum và an toàn 100% cho cụm sấy. Sản phẩm được bảo hành 1 đổi 1 tận nơi bởi Hương Sơn.",
        "summary": "Báo cáo thử nghiệm kỹ thuật và phân tích hiệu quả kinh tế của dòng mực in độc quyền FANSIPAN trên các dòng máy photocopy Toshiba e-STUDIO và Ricoh Aficio.",
        "image": "/assets/images/products/muc-fansipan-toner.jpg",
        "toc": [
            ("xuat-xu-fansipan", "1. Xuất xứ và công nghệ sản xuất dòng mực FANSIPAN"),
            ("ket-qua-kiem-nghiem", "2. Kết quả kiểm nghiệm 4 chỉ số kỹ thuật quan trọng"),
            ("bang-so-sanh-chi-phi", "3. Bảng phân tích bài toán kinh tế: Mực OEM vs Mực FANSIPAN"),
            ("chinh-sach-bao-hanh", "4. Chính sách bảo hành và cam kết trách nhiệm của Hương Sơn"),
            ("cac-dong-may-tuong-thich", "5. Bảng tra cứu các dòng máy tương thích với FANSIPAN"),
        ],
        "faqs": [
            ("Dùng mực FANSIPAN có làm mất bảo hành của máy photocopy không?",
             "Tại Hương Sơn, đối với các dòng máy do chúng tôi bán hoặc cho thuê, khi Quý khách sử dụng mực FANSIPAN sẽ được hưởng trọn vẹn chính sách bảo hành thiết bị 100%. Hương Sơn cam kết chịu trách nhiệm kỹ thuật toàn diện cho cả máy và mực."),
            ("Mực FANSIPAN in được bao nhiêu trang cho một hộp?",
             "Hộp mực FANSIPAN cho dòng Toshiba e-STUDIO (như T-3008P / T-5018P) có trọng lượng tịnh tiêu chuẩn in được từ 38.000 đến 43.000 trang A4 ở độ phủ mực 5%, tương đương tuyệt đối với định mức hộp mực chính hãng."),
            ("Mực FANSIPAN có bị bay màu hoặc nhạt chữ theo thời gian không?",
             "Không. Hạt mực FANSIPAN sử dụng thành phần carbon tinh khiết kết hợp hạt nhựa nhiệt dẻo cao cấp, nóng chảy và bám chặt vào sợi cellulose của giấy ở nhiệt độ 170°C, giúp bản in lưu trữ bền màu vĩnh viễn trên 20 năm mà không bị phai."),
        ],
        "content_blocks": [
            ("xuat-xu-fansipan", "1. Xuất xứ và công nghệ sản xuất dòng mực FANSIPAN", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Chi phí mực in luôn là gánh nặng tài chính lớn nhất của các cơ quan, trường học và doanh nghiệp. Trước thực trạng thị trường ngập tràn các loại mực đổ trôi nổi làm xước trống drum và hỏng cụm sấy, Hương Sơn đã đầu tư phát triển thương hiệu <strong>FANSIPAN</strong> — dòng mực in và vật tư tiêu hao cao cấp sản xuất theo công nghệ chuyển giao từ Nhật Bản.
              </p>
            """),
            ("ket-qua-kiem-nghiem", "2. Kết quả kiểm nghiệm 4 chỉ số kỹ thuật quan trọng", """
              <ul class="space-y-3 mb-6 text-sm text-gray-700">
                <li class="p-4 bg-white border border-gray-200"><strong>1. Kích thước hạt mực đồng nhất (6.5 – 7.5 µm):</strong> Hạt mực vi tinh thể tròn đều giúp bản in có độ đen sâu (Optical Density > 1.45), các đường nét mảnh và chữ nhỏ sắc nét không bị gai mép.</li>
                <li class="p-4 bg-white border border-gray-200"><strong>2. Tỷ lệ mực thải cực thấp (< 3%):</strong> Hầu như toàn bộ lượng mực từ ống đều được chuyển lên bề mặt giấy, không gây nghẹt khoang mực thải và không làm bẩn gương laser.</li>
                <li class="p-4 bg-white border border-gray-200"><strong>3. Tương thích hoàn hảo với bột từ (Developer):</strong> Tích điện tích âm ổn định, không gây bay bụi mực xung quanh máy.</li>
                <li class="p-4 bg-white border border-gray-200"><strong>4. Nhiệt độ sấy chuẩn (165°C – 185°C):</strong> Không làm rách áo sấy (Fuser Belt) và không bám két vào lô ép.</li>
              </ul>
            """),
            ("bang-so-sanh-chi-phi", "3. Bảng phân tích bài toán kinh tế: Mực OEM vs Mực FANSIPAN", """
              <div class="overflow-x-auto my-6 border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                  <thead>
                    <tr class="bg-gray-100 text-gray-900 border-b font-bold">
                      <th class="p-3.5">Chỉ tiêu kinh tế (Văn phòng in 15.000 bản/tháng)</th>
                      <th class="p-3.5">Sử dụng Mực hãng OEM</th>
                      <th class="p-3.5 bg-green-50 text-[#1A9900]">Sử dụng Mực FANSIPAN</th>
                      <th class="p-3.5 font-bold text-[#1A9900]">Mức tiết kiệm được</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 text-gray-700">
                    <tr><td class="p-3.5 font-semibold">Đơn giá 1 hộp mực (in ~38.000 trang)</td><td class="p-3.5">~1.850.000 đ</td><td class="p-3.5 font-bold text-[#1A9900]">~950.000 đ</td><td class="p-3.5 font-bold text-[#1A9900]">Tiết kiệm 900.000 đ/hộp</td></tr>
                    <tr><td class="p-3.5 font-semibold">Chi phí mực in trong 1 năm (180.000 trang)</td><td class="p-3.5">8.760.000 đ</td><td class="p-3.5 font-bold text-[#1A9900]">4.500.000 đ</td><td class="p-3.5 font-bold text-[#1A9900]">Tiết kiệm 4.260.000 đ/năm</td></tr>
                    <tr><td class="p-3.5 font-semibold">Chi phí mực in trong 3 năm (540.000 trang)</td><td class="p-3.5">26.280.000 đ</td><td class="p-3.5 font-bold text-[#1A9900]">13.500.000 đ</td><td class="p-3.5 font-bold text-[#1A9900]">Tiết kiệm 12.780.000 đ</td></tr>
                    <tr><td class="p-3.5 font-semibold">Tác động đến tuổi thọ trống gạt</td><td class="p-3.5">Đạt tuổi thọ chuẩn</td><td class="p-3.5 font-bold text-[#1A9900]">Đạt 98–100% tuổi thọ chuẩn</td><td class="p-3.5">Không phát sinh chi phí sửa chữa</td></tr>
                  </tbody>
                </table>
              </div>
            """),
            ("chinh-sach-bao-hanh", "4. Chính sách bảo hành và cam kết trách nhiệm của Hương Sơn", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Toàn bộ sản phẩm mực in FANSIPAN đều được bảo hành 1 đổi 1 tận nơi cho đến giọt mực cuối cùng. Nếu xảy ra bất kỳ lỗi mờ sọc do mực, kỹ thuật viên Hương Sơn sẽ đến đổi hộp mới và vệ sinh máy miễn phí.
              </p>
            """),
            ("cac-dong-may-tuong-thich", "5. Bảng tra cứu các dòng máy tương thích với FANSIPAN", """
              <div class="p-5 bg-gray-50 border border-gray-200">
                <p class="text-sm text-gray-700 leading-relaxed mb-2">• <strong>Dòng Toshiba e-STUDIO:</strong> 2508A, 3008A, 3508A, 4508A, 5008A, 2518A, 3518A, 4518A, 2528A, 3528A, 4528A.</p>
                <p class="text-sm text-gray-700 leading-relaxed mb-2">• <strong>Dòng Ricoh Aficio:</strong> MP 2554, 3054, 3554, 4054, 5054, 6054, MP 2555, 3055, 3555, 4055, 5055.</p>
                <p class="text-sm text-gray-700 leading-relaxed">• <strong>Dòng máy in siêu tốc Duplo:</strong> Mực in tương thích chất lượng cao gốc dầu cho DP-F, DP-G, DP-X series.</p>
              </div>
            """),
        ],
        "related_links": [
            ("Danh mục sản phẩm mực in thương hiệu FANSIPAN", "/san-pham/fansipan/"),
            ("Mực FANSIPAN cho máy photocopy Toshiba", "/san-pham/fansipan/muc-fansipan-toner-toshiba-e-studio/"),
            ("Mực FANSIPAN cho máy photocopy Ricoh", "/san-pham/fansipan/muc-fansipan-toner-ricoh-aficio/"),
        ],
    },
    {
        "slug": "khac-phuc-loi-may-photocopy-mua-nom-am",
        "url": "/ve-huong-son/kien-thuc/khac-phuc-loi-may-photocopy-mua-nom-am/",
        "title": "5 cách chống ẩm và khắc phục lỗi kẹt giấy máy photocopy trong mùa nồm miền Bắc",
        "seo_title": "Chống Ẩm & Sửa Lỗi Kẹt Giấy Máy Photocopy Mùa Nồm | Hương Sơn",
        "seo_desc": "Bí quyết khắc phục triệt để lỗi máy photocopy bị kẹt giấy, bản in bị mờ và nhăn nhúm trong mùa nồm ẩm miền Bắc: cách sấy khay giấy, bảo quản giấy in và vệ sinh con lăn.",
        "keywords": "máy photocopy kẹt giấy mùa nồm, chống ẩm máy photocopy, sửa máy photocopy bị kẹt giấy, bảo quản giấy in mùa nồm, lỗi máy photocopy toshiba",
        "date": "2026-09-24",
        "reading_time": "6 phút đọc",
        "tag": "Kỹ thuật & Vật tư",
        "aeo_answer": "Để khắc phục triệt để lỗi kẹt giấy máy photocopy trong mùa nồm ẩm miền Bắc: (1) Luôn bật công tắc sấy khay giấy (Heater Switch) trên thân máy; (2) Không để xấp giấy in trần qua đêm, bọc kín giấy thừa trong túi nilon kín khí; (3) Sấy tơi giấy bằng máy sấy tóc hoặc dùng giấy mới khô trước khi nạp vào khay; (4) Vệ sinh sạch bụi giấy và hơi ẩm trên con lăn cao su kéo giấy bằng cồn Isopropyl; (5) Giữ máy ở chế độ chờ (Sleep Mode) cắm điện 24/24 để nguồn nhiệt nội bộ tự sấy khô linh kiện.",
        "summary": "Kinh nghiệm thực chiến từ kỹ sư Hương Sơn giúp các văn phòng, trường học loại bỏ 95% tình trạng kẹt giấy liên tục và nhăn mép bản in khi độ ẩm không khí vượt quá 85%.",
        "image": "/assets/images/products/cum-say-fuser-roller.jpg",
        "toc": [
            ("tai-sao-mua-nom-hay-ket-giay", "1. Nguyên nhân vì sao mùa nồm máy photocopy hay kẹt giấy?"),
            ("5-bien-phap-chong-am", "2. 5 biện pháp chống ẩm đơn giản nhưng hiệu quả 100%"),
            ("cach-xu-ly-khi-bi-ket", "3. Cách rút giấy kẹt đúng kỹ thuật không làm rách phim sấy"),
            ("bang-ma-loi-ket-giay", "4. Bảng tra cứu các mã lỗi kẹt giấy phổ biến"),
            ("dich-vu-bao-duong-huong-son", "5. Dịch vụ bảo trì và ứng cứu kỹ thuật mùa nồm của Hương Sơn"),
        ],
        "faqs": [
            ("Tại sao mùa nồm bản in máy photocopy thường bị mờ nhạt chữ?",
             "Vào mùa nồm, độ ẩm không khí cao làm giấy in bị ngậm nước, điện trở bề mặt giấy giảm khiến các hạt mực tích điện âm không thể bám chặt vào sợi giấy trong quá trình truyền ảnh (Transfer). Khi sấy giấy khô ráo trở lại, bản in sẽ lập tức đen đậm bình thường."),
            ("Có nên tắt hẳn nguồn điện máy photocopy vào ban đêm mùa nồm không?",
             "Tuyệt đối không nên rút phích cắm điện. Hãy để máy ở chế độ nghỉ chờ (Sleep Mode). Ở chế độ này, bộ sấy chống ẩm của khay giấy và bo mạch vẫn hoạt động với mức tiêu thụ điện cực nhỏ (chỉ 5–10W), giúp ngăn ngừa hơi nước ngưng tụ làm cháy bo mạch và ẩm giấy."),
            ("Rút giấy kẹt theo chiều nào là đúng?",
             "Luôn rút giấy theo chiều đi tự nhiên của trang giấy (từ khay nạp hướng ra ngoài cửa thoát giấy). Tuyệt đối không kéo ngược chiều cuốn giấy vì các bánh răng một chiều sẽ bị khóa cứng, rất dễ làm gãy chốt cơ khí hoặc rách áo sấy."),
        ],
        "content_blocks": [
            ("tai-sao-mua-nom-hay-ket-giay", "1. Nguyên nhân vì sao mùa nồm máy photocopy hay kẹt giấy?", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Vào khoảng tháng 2 đến tháng 4 hàng năm tại miền Bắc, độ ẩm không khí thường xuyên duy trì ở mức 90% – 100%. Giấy in văn phòng có tính chất hút ẩm cực mạnh: khi bị ngậm nước, các tờ giấy dính bết lại với nhau, con lăn kéo giấy bị trượt ma sát dẫn đến tình trạng rút cùng lúc 2–3 tờ giấy gây kẹt nghẽn máy liên tục.
              </p>
            """),
            ("5-bien-phap-chong-am", "2. 5 biện pháp chống ẩm đơn giản nhưng hiệu quả 100%", """
              <ul class="space-y-3 mb-6 text-[15px] text-gray-600">
                <li class="p-4 bg-white border border-gray-200"><strong>1. Bật công tắc sấy khay giấy (Cassette Heater):</strong> Hầu hết các máy photocopy Toshiba và Ricoh đều có sẵn công tắc sấy khay nằm ở phía sau hoặc bên cạnh hông máy. Hãy bật sang vị trí "ON" trong suốt mùa nồm.</li>
                <li class="p-4 bg-white border border-gray-200"><strong>2. Quy tắc nạp giấy "Dùng đến đâu nạp đến đó":</strong> Không nên đổ cả ram giấy vào khay nếu văn phòng in ít. Chỉ nạp lượng giấy đủ dùng trong ngày; giấy thừa bọc kín lại trong túi bọc nilông ban đầu.</li>
                <li class="p-4 bg-white border border-gray-200"><strong>3. Đánh tơi giấy trước khi nạp vào khay:</strong> Dùng tay uốn cong và vỗ nhẹ cạnh xấp giấy để không khí lọt vào tách rời các mép giấy bị dính bết.</li>
                <li class="p-4 bg-white border border-gray-200"><strong>4. Cắm điện máy liên tục 24/24:</strong> Giúp các linh kiện điện tử và gương quang học bên trong máy luôn ấm áp, không bị đọng sương làm chập vi mạch.</li>
                <li class="p-4 bg-white border border-gray-200"><strong>5. Đặt máy photocopy ở nơi khô ráo:</strong> Tránh kê máy sát tường ẩm hoặc gần cửa sổ mở thông gió. Kê máy cách tường tối thiểu 20cm.</li>
              </ul>
            """),
            ("cach-xu-ly-khi-bi-ket", "3. Cách rút giấy kẹt đúng kỹ thuật không làm rách phim sấy", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Khi máy báo lỗi kẹt giấy: hãy mở nắp cửa hông (Cửa phải), gạt lẫy mở cụm sấy và dùng hai tay kéo đều góc giấy ra nhẹ nhàng. Tuyệt đối không dùng dao, kéo, nhíp kim loại thọc vào máy vì sẽ làm rách lớp phủ teflon của lô sấy.
              </p>
            """),
            ("bang-ma-loi-ket-giay", "4. Bảng tra cứu các mã lỗi kẹt giấy phổ biến", """
              <div class="overflow-x-auto my-6 border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                  <thead>
                    <tr class="bg-gray-100 text-gray-900 border-b font-bold">
                      <th class="p-3">Mã lỗi máy Toshiba</th>
                      <th class="p-3">Vị trí kẹt giấy</th>
                      <th class="p-3">Nguyên nhân & Cách xử lý nhanh</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 text-gray-700">
                    <tr><td class="p-3 font-semibold text-red-600">E010 / E020</td><td class="p-3">Kẹt giấy tại Khay nạp 1 / Khay 2</td><td class="p-3">Giấy bị ẩm dính mép. Lấy giấy ra sấy khô hoặc đảo chiều xấp giấy.</td></tr>
                    <tr><td class="p-3 font-semibold text-red-600">E030</td><td class="p-3">Kẹt giấy tại bộ phận vận chuyển trung gian</td><td class="p-3">Mở cửa hông bên phải, xoay núm màu xanh để đẩy giấy ra.</td></tr>
                    <tr><td class="p-3 font-semibold text-red-600">E130 / E140</td><td class="p-3">Kẹt giấy tại Cụm sấy (Fuser)</td><td class="p-3">Giấy ướt bị cuộn tròn vào lô sấy. Chờ sấy nguội bớt rồi kéo nhẹ theo chiều ra.</td></tr>
                    <tr><td class="p-3 font-semibold text-red-600">E510 / E520</td><td class="p-3">Kẹt giấy khay nạp bản gốc tự động (ADF)</td><td class="p-3">Lật nắp khay nạp, lau sạch con lăn cao su bằng khăn mềm ẩm.</td></tr>
                  </tbody>
                </table>
              </div>
            """),
            ("dich-vu-bao-duong-huong-son", "5. Dịch vụ bảo trì và ứng cứu kỹ thuật mùa nồm của Hương Sơn", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Các khách hàng đang thuê máy photocopy của Hương Sơn luôn được kỹ thuật viên đến bảo dưỡng tổng thể, vệ sinh con lăn và kích hoạt hệ thống sấy trước khi đợt nồm ẩm bắt đầu.
              </p>
            """),
        ],
        "related_links": [
            ("Dịch vụ bảo trì sửa chữa máy photocopy định kỳ", "/dich-vu/bao-tri-sua-chua/"),
            ("Yêu cầu kỹ thuật viên đến kiểm tra máy tận nơi", "/nhan-tu-van/yeu-cau-ky-thuat/"),
            ("Xem cẩm nang chọn mực in và linh kiện chính hãng", "/ve-huong-son/kien-thuc/cach-chon-muc-in-linh-kien-may-photocopy-chinh-hang/"),
        ],
    },
    {
        "slug": "bang-tra-ma-muc-master-may-in-duplo-toan-tap",
        "url": "/ve-huong-son/kien-thuc/bang-tra-ma-muc-master-may-in-duplo-toan-tap/",
        "title": "Bảng tra cứu mã mực in và cuộn Master cho tất cả các dòng máy in siêu tốc Duplo",
        "seo_title": "Bảng Tra Mã Mực & Master Máy In Duplo Toàn Tập | Hương Sơn",
        "seo_desc": "Bảng tra cứu đầy đủ và chính xác nhất mã cuộn phim Master, bình mực in cho tất cả các dòng máy in nhân bản siêu tốc Duplo: DP-X, DP-F, DP-G, DP-U series.",
        "keywords": "bảng tra mã mực duplo, mã master máy in duplo, duplo drs55, duplo drs85, mực in duplo du04l, mực duplo du14l",
        "date": "2026-09-24",
        "reading_time": "6 phút đọc",
        "tag": "Kỹ thuật & Vật tư",
        "aeo_answer": "Để tra cứu mã mực và master máy in Duplo chính xác: Dòng Duplo DP-X550 dùng Master DRS55 (B4) và Mực DU04L / DU14L (đen 1.000ml); Dòng Duplo DP-X850 dùng Master DRS85 (A3) và Mực DU04L / DU24L; Dòng Duplo DP-G325/G320 dùng Master DRG32 và Mực DU01L; Dòng Duplo DP-F550/F850 dùng Master DRF55/DRF85 và Mực DU04L. Sử dụng đúng mã vật tư chính hãng hoặc mực cao cấp FANSIPAN để máy nhận chip tự động và không báo lỗi E-code.",
        "summary": "Tài liệu kỹ thuật tổng hợp toàn bộ mã vật tư tiêu hao của thương hiệu Duplo Nhật Bản: giúp cán bộ quản lý thiết bị và ban in sao đề thi tra cứu nhanh chóng, tránh mua nhầm mã hàng.",
        "image": "/assets/images/products/muc-in-master-duplo.jpg",
        "toc": [
            ("vi-sao-can-tra-ma", "1. Vì sao bắt buộc phải tra cứu đúng mã mực và Master Duplo?"),
            ("bang-tra-ma-du-x", "2. Bảng tra mã vật tư dòng Duplo DP-X series (Thế hệ mới)"),
            ("bang-tra-ma-du-f-g", "3. Bảng tra mã vật tư dòng Duplo DP-F & DP-G series"),
            ("bang-tra-ma-du-u", "4. Bảng tra mã vật tư dòng Duplo DP-U & DP-S series"),
            ("huong-dan-thay-the", "5. Hướng dẫn phân biệt vật tư chuẩn và chính sách phân phối"),
        ],
        "faqs": [
            ("Lắp cuộn Master B4 vào máy in Duplo A3 có chạy được không?",
             "Không. Các dòng máy khổ A3 (như DP-X850, DP-F850) sử dụng cơ cấu ngàm giữ cuộn Master khổ rộng A3. Cuộn Master B4 ngắn hơn nên không thể lắp vừa vào trục gá và máy sẽ báo lỗi không nhận Master (No Master)."),
            ("Máy in Duplo có báo dung lượng mực còn lại trên màn hình không?",
             "Có. Bình mực Duplo chính hãng và mực FANSIPAN tương thích chuẩn đều được gắn chip nhận diện thông minh ở đáy bình. Màn hình máy sẽ hiển thị biểu tượng bình mực từ 100% giảm dần về 0% và cảnh báo trước khi hết mực."),
            ("Hương Sơn có sẵn các mã mực và master hiếm cho các dòng máy đời cũ không?",
             "Có. Là đại lý ủy quyền phân phối Duplo tại miền Bắc từ năm 2017, kho Hương Sơn luôn lưu trữ sẵn đầy đủ vật tư cho cả những dòng máy Duplo đời trước (như DP-U550, DP-S550, DP-430...) để phục vụ các trường học."),
        ],
        "content_blocks": [
            ("vi-sao-can-tra-ma", "1. Vì sao bắt buộc phải tra cứu đúng mã mực và Master Duplo?", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Mỗi dòng máy in nhân bản kỹ thuật số Duplo đều có kích thước trục chế bản và cảm biến chip quang học riêng biệt. Mua nhầm mã cuộn Master sẽ không thể lắp vừa ngàm giữ, còn mua nhầm bình mực có thể khiến máy báo lỗi "Ink Cartridge Error" hoặc không tự động bơm mực vào buồng trống in (Drum).
              </p>
            """),
            ("bang-tra-ma-du-x", "2. Bảng tra mã vật tư dòng Duplo DP-X series (Thế hệ mới)", """
              <div class="overflow-x-auto my-6 border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                  <thead>
                    <tr class="bg-gray-100 text-gray-900 border-b font-bold">
                      <th class="p-3">Model máy in Duplo</th>
                      <th class="p-3">Khổ chế bản</th>
                      <th class="p-3 bg-green-50 text-[#1A9900]">Mã cuộn Master tương thích</th>
                      <th class="p-3 bg-green-50 text-[#1A9900]">Mã bình mực in (1.000ml)</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 text-gray-700">
                    <tr><td class="p-3 font-semibold">Duplo DP-X550</td><td class="p-3">Khổ B4</td><td class="p-3 font-bold text-[#1A9900]">DRS55 (220 bản/cuộn)</td><td class="p-3 font-bold text-[#1A9900]">DU04L / DU14L (Đen)</td></tr>
                    <tr><td class="p-3 font-semibold">Duplo DP-X650</td><td class="p-3">Khổ A3 lỡ</td><td class="p-3 font-bold text-[#1A9900]">DRS65 (220 bản/cuộn)</td><td class="p-3 font-bold text-[#1A9900]">DU04L / DU14L (Đen)</td></tr>
                    <tr><td class="p-3 font-semibold">Duplo DP-X850</td><td class="p-3">Khổ A3 rộng</td><td class="p-3 font-bold text-[#1A9900]">DRS85 (220 bản/cuộn)</td><td class="p-3 font-bold text-[#1A9900]">DU04L / DU24L (Đen HD)</td></tr>
                  </tbody>
                </table>
              </div>
            """),
            ("bang-tra-ma-du-f-g", "3. Bảng tra mã vật tư dòng Duplo DP-F & DP-G series", """
              <div class="overflow-x-auto my-6 border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                  <thead>
                    <tr class="bg-gray-100 text-gray-900 border-b font-bold">
                      <th class="p-3">Model máy in Duplo</th>
                      <th class="p-3">Khổ chế bản</th>
                      <th class="p-3 bg-green-50 text-[#1A9900]">Mã cuộn Master tương thích</th>
                      <th class="p-3 bg-green-50 text-[#1A9900]">Mã bình mực in (1.000ml)</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 text-gray-700">
                    <tr><td class="p-3 font-semibold">Duplo DP-F550</td><td class="p-3">Khổ B4</td><td class="p-3 font-bold text-[#1A9900]">DRF55</td><td class="p-3 font-bold text-[#1A9900]">DU04L / DU14L</td></tr>
                    <tr><td class="p-3 font-semibold">Duplo DP-F850</td><td class="p-3">Khổ A3</td><td class="p-3 font-bold text-[#1A9900]">DRF85</td><td class="p-3 font-bold text-[#1A9900]">DU04L / DU24L</td></tr>
                    <tr><td class="p-3 font-semibold">Duplo DP-G325 / G320</td><td class="p-3">Khổ B4</td><td class="p-3 font-bold text-[#1A9900]">DRG32</td><td class="p-3 font-bold text-[#1A9900]">DU01L (Mực đen 1.000ml)</td></tr>
                    <tr><td class="p-3 font-semibold">Duplo DP-G205 / G200</td><td class="p-3">Khổ B4</td><td class="p-3 font-bold text-[#1A9900]">DRG20</td><td class="p-3 font-bold text-[#1A9900]">DU01L (Mực đen 1.000ml)</td></tr>
                  </tbody>
                </table>
              </div>
            """),
            ("bang-tra-ma-du-u", "4. Bảng tra mã vật tư dòng Duplo DP-U & DP-S series", """
              <div class="overflow-x-auto my-6 border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                  <thead>
                    <tr class="bg-gray-100 text-gray-900 border-b font-bold">
                      <th class="p-3">Model máy in Duplo</th>
                      <th class="p-3">Khổ chế bản</th>
                      <th class="p-3 bg-green-50 text-[#1A9900]">Mã cuộn Master tương thích</th>
                      <th class="p-3 bg-green-50 text-[#1A9900]">Mã bình mực in (1.000ml)</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 text-gray-700">
                    <tr><td class="p-3 font-semibold">Duplo DP-U550 / U650</td><td class="p-3">Khổ B4 / A3</td><td class="p-3 font-bold text-[#1A9900]">DRU55 / DRU65</td><td class="p-3 font-bold text-[#1A9900]">DU04L (Đen)</td></tr>
                    <tr><td class="p-3 font-semibold">Duplo DP-U850 / U950</td><td class="p-3">Khổ A3 rộng</td><td class="p-3 font-bold text-[#1A9900]">DRU85</td><td class="p-3 font-bold text-[#1A9900]">DU04L (Đen)</td></tr>
                    <tr><td class="p-3 font-semibold">Duplo DP-S550 / S850</td><td class="p-3">Khổ B4 / A3</td><td class="p-3 font-bold text-[#1A9900]">DRS50 / DRS80</td><td class="p-3 font-bold text-[#1A9900]">DU04L</td></tr>
                  </tbody>
                </table>
              </div>
            """),
            ("huong-dan-thay-the", "5. Hướng dẫn phân biệt vật tư chuẩn và chính sách phân phối", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Hương Sơn cam kết phân phối 100% cuộn Master và Mực in Duplo nhập khẩu chính ngạch, có tem nhãn chứng nhận xuất xứ rõ ràng và hóa đơn VAT đầy đủ. Quý đơn vị cần tra cứu mã vật tư cho bất kỳ model máy nào xin vui lòng liên hệ Hotline kỹ thuật Hương Sơn: 091.113.8583.
              </p>
            """),
        ],
        "related_links": [
            ("Danh mục vật tư tiêu hao máy in nhân bản Duplo", "/san-pham/vat-tu-linh-kien-tieu-hao/"),
            ("Bảng tra mã mực master chi tiết trên website", "/san-pham/vat-tu-linh-kien-tieu-hao/bang-tra-ma-muc-master-duplo/"),
            ("Yêu cầu gửi báo giá vật tư Duplo chiết khấu tốt nhất", "/nhan-tu-van/bao-gia/"),
        ],
    },
]


def render_article(a):
    trail = [
        ("Trang chủ", "/"),
        ("Về Hương Sơn", "/ve-huong-son/"),
        ("Kiến thức", "/ve-huong-son/kien-thuc/"),
        (a["title"], a["url"]),
    ]

    body = f"""
  <section class="bg-[#181924] py-16 lg:py-20 text-white relative">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center space-x-2 text-xs text-gray-400 mb-4 flex-wrap">
        <a href="/" class="hover:text-white transition">Trang chủ</a>
        <span>/</span>
        <a href="/ve-huong-son/" class="hover:text-white transition">Về Hương Sơn</a>
        <span>/</span>
        <a href="/ve-huong-son/kien-thuc/" class="text-[#5eb74c] font-semibold hover:underline">Kiến thức</a>
      </div>
      <div class="max-w-4xl">
        <span class="inline-block bg-[{BRAND}] text-white text-[11px] font-bold uppercase tracking-wider px-3 py-1 mb-4 rounded-xs">{esc(a['tag'])}</span>
        <h1 class="text-2xl sm:text-4xl font-bold text-white leading-tight mb-4">{esc(a['title'])}</h1>
        <div class="flex items-center space-x-4 text-xs text-gray-300 font-medium">
          <span><i class="fa-regular fa-calendar text-[#5eb74c] mr-1.5"></i>{esc(a['date'])}</span>
          <span>•</span>
          <span><i class="fa-regular fa-clock text-[#5eb74c] mr-1.5"></i>{esc(a['reading_time'])}</span>
          <span>•</span>
          <span><i class="fa-solid fa-shield-halved text-[#5eb74c] mr-1.5"></i>Ban Biên Tập Hương Sơn</span>
        </div>
      </div>
    </div>
  </section>"""

    # TOC
    toc_links = "".join(
        f'<li class="mb-2"><a href="#{anchor}" class="text-gray-600 hover:text-[{BRAND}] text-[14.5px] transition block leading-relaxed">• {esc(label)}</a></li>'
        for anchor, label in a.get("toc", [])
    )

    # Content blocks
    blocks_html = ""
    for anchor, heading, html_content in a.get("content_blocks", []):
        blocks_html += f"""
        <div id="{anchor}" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">{esc(heading)}</h2>
          <div class="prose max-w-none text-gray-700">
            {html_content}
          </div>
        </div>"""

    # FAQs
    faq_html = ""
    if a.get("faqs"):
        faq_items = "".join(
            f"""
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[{BRAND}] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>{esc(q)}</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">{esc(ans)}</p>
          </div>"""
            for q, ans in a["faqs"]
        )
        faq_html = f"""
        <div class="mt-12 pt-8 border-t border-gray-200">
          <h3 class="text-xl font-bold text-gray-900 mb-6 uppercase tracking-wider text-sm text-[{BRAND}]">Câu hỏi thường gặp</h3>
          <div class="space-y-4">{faq_items}</div>
        </div>"""

    # Related links
    related_html = ""
    if a.get("related_links"):
        links_items = "".join(
            f'<a href="{url}" class="flex items-center space-x-2 p-3 bg-white border border-gray-200 hover:border-[{BRAND}] hover:text-[{BRAND}] text-sm font-semibold transition rounded-sm">'
            f'<i class="fa-solid fa-arrow-right text-[{BRAND}] text-xs"></i><span>{esc(title)}</span></a>'
            for title, url in a["related_links"]
        )
        related_html = f"""
        <div class="mt-12 pt-8 border-t border-gray-200">
          <h3 class="text-sm font-bold uppercase tracking-wider text-gray-900 mb-4">Bài viết & Dịch vụ liên quan</h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">{links_items}</div>
        </div>"""

    # AEO Answer Highlight Box
    aeo_box_html = ""
    if a.get("aeo_answer"):
        aeo_box_html = f"""
          <div class="mb-10 p-5 sm:p-6 bg-gradient-to-r from-emerald-50/90 via-green-50/60 to-teal-50/40 border-l-4 border-[{BRAND}] rounded-r shadow-xs">
            <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[{BRAND}] mb-2.5">
              <i class="fa-solid fa-sparkles text-amber-500"></i>
              <span>Tóm tắt cốt lõi theo chuẩn AEO (Dành cho AI &amp; Tìm kiếm nhanh)</span>
            </div>
            <p class="text-[15.5px] font-semibold text-gray-900 leading-relaxed">
              {a['aeo_answer']}
            </p>
          </div>
        """

    # Main layout
    body += f"""
  <section class="py-16 bg-white">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

        <!-- Main article column -->
        <article class="lg:col-span-8">
          <div class="bg-gray-50 border border-gray-200 p-6 mb-10 rounded-sm">
            <p class="font-bold text-xs uppercase tracking-wider text-[{BRAND}] mb-3 flex items-center">
              <i class="fa-solid fa-list-ul mr-2"></i>Mục lục bài viết
            </p>
            <ul class="space-y-1">{toc_links}</ul>
          </div>

          <p class="text-lg text-gray-800 leading-relaxed font-medium mb-8 pb-6 border-b border-gray-100 italic">
            "{esc(a['summary'])}"
          </p>

          {aeo_box_html}

          {blocks_html}
          {faq_html}
          {related_html}
        </article>

        <!-- Sidebar column -->
        <aside class="lg:col-span-4 space-y-8">
          <div class="bg-gray-50 border border-gray-200 p-6 sticky top-28 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-4 uppercase tracking-wider text-xs text-[{BRAND}]">Cần tư vấn thiết bị & dịch vụ?</h4>
            <p class="text-sm text-gray-600 mb-6 leading-relaxed">
              Hương Sơn hỗ trợ tư vấn chọn đúng cấu hình máy photocopy, máy scan, máy in siêu tốc và dự toán chi phí phù hợp nhất cho Quý đơn vị.
            </p>
            <div class="space-y-3">
              <a href="tel:{SITE['hotline_primary_tel']}" data-ga="click_hotline" class="block w-full py-3 px-4 bg-[{BRAND}] hover:bg-[#147700] text-white text-center font-bold text-xs uppercase tracking-wider transition rounded-sm">
                <i class="fa-solid fa-phone mr-2"></i>Gọi Hotline: {SITE['hotline_primary']}
              </a>
              <a href="{SITE['zalo']}" target="_blank" rel="noopener" class="block w-full py-3 px-4 bg-[#0068FF] hover:bg-[#0052cc] text-white text-center font-bold text-xs uppercase tracking-wider transition rounded-sm">
                <i class="fa-solid fa-comment-dots mr-2"></i>Chat Zalo tư vấn
              </a>
              <a href="/nhan-tu-van/bao-gia/" class="block w-full py-3 px-4 bg-white border border-gray-300 hover:border-[{BRAND}] text-gray-800 text-center font-bold text-xs uppercase tracking-wider transition rounded-sm">
                Yêu cầu báo giá chính thức
              </a>
            </div>

            <div class="mt-8 pt-6 border-t border-gray-200">
              <h5 class="text-xs font-bold uppercase tracking-wider text-gray-700 mb-3">Các cẩm nang liên quan</h5>
              <ul class="space-y-2.5 text-xs text-gray-600">
                {''.join(f'<li><a href="{other["url"]}" class="hover:text-[{BRAND}] transition block leading-snug">• {esc(other["title"])}</a></li>' for other in KNOWLEDGE_ARTICLES if other["slug"] != a["slug"][:7])}
              </ul>
            </div>
          </div>
        </aside>

      </div>
    </div>
  </section>"""

    body += C.cta_band(
        title="Quý đơn vị cần giải pháp phù hợp với quy mô thực tế?",
        text="Liên hệ ngay với Hương Sơn để nhận phương án thiết bị, báo giá và khảo sát tận nơi miễn phí.",
        primary=("Yêu cầu tư vấn", "/nhan-tu-van/bao-gia/"),
        secondary=("Xem sản phẩm", "/san-pham/"),
    )

    ld = [
        schema.organization(),
        schema.breadcrumb(trail),
        schema.article({
            "title": a["title"],
            "summary": a["summary"],
            "date": a["date"],
            "modified": a["date"],
            "schema_type": "Article",
        }, a["url"]),
    ]
    if a.get("faqs"):
        ld.append(schema.faqpage([(q, ans) for q, ans in a["faqs"]]))

    return render.page(
        title=a["seo_title"],
        description=a["seo_desc"],
        url=a["url"],
        keywords=a.get("keywords", ""),
        body=body,
        jsonld=ld,
        og_type="article",
        og_image=a.get("image"),
        active="/ve-huong-son/",
    )


def render_hub():
    trail = [
        ("Trang chủ", "/"),
        ("Về Hương Sơn", "/ve-huong-son/"),
        ("Kiến thức", "/ve-huong-son/kien-thuc/"),
    ]
    body = C.page_hero(
        eyebrow="Kiến thức chuyên môn",
        h1="Cẩm nang thiết bị, in ấn & số hóa tài liệu",
        lead="Tổng hợp kinh nghiệm chuyên sâu, bảng so sánh và phân tích chi phí giúp Quý khách ra quyết định chính xác nhất trước khi mua hoặc thuê thiết bị.",
        trail=trail,
    )
    body += C.answer_first([
        ["Chuyên mục này là gì", "Trung tâm kiến thức chuyên sâu gồm 16 bài viết chuẩn mực về máy photocopy, máy in nhân bản siêu tốc Duplo, máy scan số hóa tài liệu và vật tư FANSIPAN."],
        ["Dành cho ai", "Lãnh đạo đơn vị, phòng Kế hoạch – Tài chính, Ban chỉ đạo thi Sở GD&ĐT, khối văn phòng Ngân hàng và chuyên viên quản trị thiết bị."],
        ["Giúp giải quyết điều gì", "Nắm rõ chi phí thực tế TCO, so sánh ưu nhược điểm các dòng máy, định mức vật tư in đề thi, hiểu quy trình số hóa chuẩn quốc gia và chọn đúng mực in chính hãng."],
    ])

    article_cards = []
    for a in KNOWLEDGE_ARTICLES:
        article_cards.append({
            "title": a["title"],
            "url": a["url"],
            "tag": a["tag"],
            "icon": "fa-solid fa-book-open",
            "text": esc(a["summary"][:160] + "…"),
            "cta": f"Đọc bài viết ({a['reading_time']})",
        })

    body += C.section(
        '<h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-8 uppercase tracking-wider text-center">Toàn bộ 16 bài viết cẩm nang chuyên sâu</h2>'
        + C.card_grid(article_cards, cols=3),
        pad="py-16",
    )

    body += C.cta_band(
        title="Chưa tìm thấy câu trả lời cho vấn đề của Quý đơn vị?",
        text="Gửi câu hỏi trực tiếp — đội ngũ kỹ thuật và chuyên gia của Hương Sơn sẽ tư vấn giải pháp phù hợp nhất.",
        primary=("Gửi câu hỏi tư vấn", "/nhan-tu-van/bao-gia/"),
        secondary=("Xem các giải pháp", "/giai-phap/"),
    )

    ld = [
        schema.organization(),
        schema.breadcrumb(trail),
        schema.itemlist("Kiến thức thiết bị in ấn & số hóa Hương Sơn", [(a["title"], a["url"]) for a in KNOWLEDGE_ARTICLES]),
    ]
    return render.page(
        title="Kiến Thức & Cẩm Nang Mua, Thuê Thiết Bị In Ấn | Hương Sơn",
        description="Tổng hợp kiến thức chuyên sâu: nên thuê hay mua máy photocopy, hướng dẫn chọn máy scan số hóa, tiêu chuẩn máy in đề thi và kinh nghiệm chọn mực in chính hãng.",
        url="/ve-huong-son/kien-thuc/",
        body=body,
        jsonld=ld,
        og_type="website",
        og_image="/assets/images/hero-office.jpg",
        active="/ve-huong-son/",
    )


def build(write):
    write("/ve-huong-son/kien-thuc/", render_hub())
    for a in KNOWLEDGE_ARTICLES:
        write(a["url"], render_article(a))
    print(f"  kiến thức: 1 hub + {len(KNOWLEDGE_ARTICLES)} bài viết trụ cột (Pillars)")
'''

with open(TARGET_FILE, "w", encoding="utf-8") as f:
    f.write(content)

print(f"✔ Đã tạo thành công bộ 16 bài viết trụ cột vào {TARGET_FILE}")
