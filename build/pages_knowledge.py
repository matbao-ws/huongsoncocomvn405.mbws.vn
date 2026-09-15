# -*- coding: utf-8 -*-
"""Trang KIẾN THỨC — 6 bài viết cẩm nang trụ cột (Content Pillars) chuẩn SEO 100%.
Phục vụ mục tiêu gia tăng lưu lượng tìm kiếm tự nhiên (Organic Search) cho website Hương Sơn.
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
              <div class="bg-amber-50 border-l-4 border-amber-500 p-4 mb-6">
                <p class="text-[14.5px] text-amber-900 leading-relaxed">
                  <strong>Lưu ý rủi ro khi mua máy:</strong> Thiết bị văn phòng có tốc độ mất giá nhanh và phát sinh chi phí đột xuất khi hết hạn bảo hành. Nếu mua phải linh kiện trôi nổi trên thị trường, cụm sấy và trống gạt rất dễ hỏng hóc, làm gián đoạn công việc.
                </p>
              </div>
            """),
            ("khi-nao-nen-thue", "3. Khi nào giải pháp THUÊ máy photocopy vượt trội?", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Hiện nay, xu hướng chuyển dịch từ "Sở hữu thiết bị" sang "Sử dụng dịch vụ in ấn quản lý" (Managed Print Services) đang chiếm ưu thế tại các tổ chức hiện đại bởi các lý do sau:
              </p>
              <ul class="space-y-3 mb-6 text-[15px] text-gray-600">
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-3 flex-shrink-0"></i><span><strong>Không cần bỏ vốn đầu tư ban đầu:</strong> Thay vì bỏ ra 40 – 90 triệu đồng cho một máy photocopy A3 đa chức năng Toshiba hoặc Ricoh cao cấp, đơn vị chỉ cần chi trả từ 800.000đ – 2.500.000đ mỗi tháng.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-3 flex-shrink-0"></i><span><strong>Trút bỏ 100% rủi ro hỏng hóc & vật tư:</strong> Toàn bộ chi phí mực in chính hãng, trống drum, gạt mực, bột từ, bảo trì định kỳ đều do đơn vị cho thuê (như Hương Sơn) chịu trách nhiệm.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-3 flex-shrink-0"></i><span><strong>Dễ dàng nâng cấp theo quy mô:</strong> Khi nhu cầu in ấn tăng lên hoặc muốn đổi sang máy photocopy màu, đơn vị chỉ cần yêu cầu nâng cấp dòng máy mà không phải thanh lý máy cũ chịu lỗ.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-3 flex-shrink-0"></i><span><strong>Hạch toán chi phí minh bạch:</strong> Hóa đơn VAT dịch vụ thuê máy hàng tháng được hạch toán trực tiếp vào chi phí hoạt động, giúp tối ưu thuế thu nhập doanh nghiệp.</span></li>
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
                    <tr>
                      <td class="p-4 font-semibold">Vốn ban đầu</td>
                      <td class="p-4">Lớn (40 – 120 triệu đồng/máy)</td>
                      <td class="p-4 font-bold text-[#1A9900]">0 VNĐ (Không cần thế chấp)</td>
                    </tr>
                    <tr>
                      <td class="p-4 font-semibold">Chi phí mực in</td>
                      <td class="p-4">Tự mua (Dễ mua phải mực nhái kém chất lượng)</td>
                      <td class="p-4 font-bold text-[#1A9900]">Miễn phí 100% (Cung cấp tận nơi)</td>
                    </tr>
                    <tr>
                      <td class="p-4 font-semibold">Linh kiện thay thế</td>
                      <td class="p-4">Tự thanh toán khi hết bảo hành</td>
                      <td class="p-4 font-bold text-[#1A9900]">Miễn phí 100% trống, gạt, sấy</td>
                    </tr>
                    <tr>
                      <td class="p-4 font-semibold">Bảo trì, sửa chữa</td>
                      <td class="p-4">Phụ thuộc lịch hẹn ngoài, chờ đợi lâu</td>
                      <td class="p-4 font-bold text-[#1A9900]">Kỹ thuật có mặt ≤ 2h, bảo trì định kỳ</td>
                    </tr>
                    <tr>
                      <td class="p-4 font-semibold">Xử lý máy hỏng nặng</td>
                      <td class="p-4">Ngừng trệ công việc, chờ sửa chữa</td>
                      <td class="p-4 font-bold text-[#1A9900]">Đổi máy tương đương ngay lập tức</td>
                    </tr>
                    <tr>
                      <td class="p-4 font-semibold">Khấu hao tài sản</td>
                      <td class="p-4">Chịu rủi ro giảm giá trị tài sản 20–30%/năm</td>
                      <td class="p-4 font-bold text-[#1A9900]">Không chịu rủi ro khấu hao</td>
                    </tr>
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
                Với hơn 18 năm kinh nghiệm phân phối và cho thuê thiết bị văn phòng, Hương Sơn đề xuất các giải pháp tối ưu cho từng đối tượng khách hàng:
              </p>
              <div class="space-y-4 mb-8">
                <div class="p-5 border border-gray-200 bg-white">
                  <h5 class="font-bold text-gray-900 mb-1">Gói Trường Học & Sở GD&ĐT</h5>
                  <p class="text-sm text-gray-600">Sử dụng các dòng máy photocopy tốc độ 35–55 trang/phút (Toshiba e-STUDIO 3528A / 4528A), công suất chịu tải lớn phục vụ in sao tài liệu học tập, giáo án và đề kiểm tra định kỳ.</p>
                </div>
                <div class="p-5 border border-gray-200 bg-white">
                  <h5 class="font-bold text-gray-900 mb-1">Gói Doanh Nghiệp Vừa & Nhỏ (SME)</h5>
                  <p class="text-sm text-gray-600">Dòng máy đa chức năng nhỏ gọn A3/A4 (Toshiba e-STUDIO 2528A, 2829A) tích hợp đầy đủ Copy - In mạng - Scan màu gửi trực tiếp về email hoặc thư mục chia sẻ.</p>
                </div>
                <div class="p-5 border border-gray-200 bg-white">
                  <h5 class="font-bold text-gray-900 mb-1">Gói In Sao Đề Thi Siêu Tốc (EXAM PRO)</h5>
                  <p class="text-sm text-gray-600">Kết hợp máy in nhân bản siêu tốc Duplo (Nhật Bản) tốc độ 130–180 bản/phút kèm máy dự phòng N+1 và kỹ sư trực 24/7 bảo mật tuyệt đối cho kỳ thi THPT.</p>
                </div>
              </div>
            """),
        ],
        "related_links": [
            ("Dịch vụ cho thuê máy photocopy trọn gói", "/giai-phap/cho-thue-thiet-bi/"),
            ("Công cụ tự tính chi phí thuê máy theo sản lượng", "/cong-cu/tinh-chi-phi-thue-may/"),
            ("Danh mục máy photocopy đa chức năng Toshiba & Ricoh", "/san-pham/photocopy-may-da-chuc-nang/"),
            ("Yêu cầu tư vấn & báo giá phương án thuê máy", "/nhan-tu-van/tu-van-thue-may/"),
        ],
    },
    {
        "slug": "huong-dan-chon-may-scan-so-hoa-tai-lieu",
        "url": "/ve-huong-son/kien-thuc/huong-dan-chon-may-scan-so-hoa-tai-lieu/",
        "title": "Hướng dẫn lựa chọn máy scan số hóa tài liệu cho cơ quan, trường học & ngân hàng",
        "seo_title": "Kinh Nghiệm Chọn Máy Scan Số Hóa Tài Liệu Tốc Độ Cao | Hương Sơn",
        "seo_desc": "Cẩm nang chọn máy scan tài liệu chuẩn nhất: so sánh máy scan ADF khay nạp tự động, máy scan phẳng Flatbed, scan sổ hộ chiếu và các dòng máy quét Ricoh cao cấp.",
        "keywords": "chọn máy scan, máy scan số hóa tài liệu, máy scan tốc độ cao, máy scan 2 mặt ricoh, kinh nghiệm mua máy scan số hóa",
        "date": "2026-09-15",
        "reading_time": "7 phút đọc",
        "tag": "Cẩm nang thiết bị",
        "summary": "Tổng hợp kinh nghiệm chọn mua máy quét (scanner) chuyên dụng phục vụ công tác số hóa hồ sơ lưu trữ: phân biệt các dòng máy scan ADF, Flatbed, máy scan công nghiệp A3 và đánh giá các model bán chạy nhất của Ricoh.",
        "image": "/assets/images/products/ricoh-fi-8170.png",
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
                Thương hiệu Ricoh (trước đây là Fujitsu) chiếm tới hơn 55% thị phần máy scan tài liệu toàn cầu nhờ độ bền cơ khí huyền thoại:
              </p>
              <div class="space-y-4 mb-6">
                <div class="border border-gray-200 p-5 bg-white flex flex-col md:flex-row gap-5 items-center">
                  <div class="w-full md:w-1/4 flex-shrink-0 text-center">
                    <img src="/assets/images/products/ricoh-fi-8170.png" alt="Ricoh fi-8170" class="h-28 mx-auto object-contain" />
                  </div>
                  <div class="flex-1">
                    <h5 class="font-bold text-gray-900 text-base mb-1">Ricoh fi-8170 – Bestseller số 1 cho văn phòng và dự án</h5>
                    <p class="text-sm text-gray-600 mb-2">Tốc độ 70 trang/phút (140 ảnh/phút), khay nạp 100 tờ, công suất 10.000 tờ/ngày. Tích hợp cổng LAN + USB 3.2, màn hình LCD trực quan. Dòng máy hoàn hảo nhất cho mọi nhu cầu số hóa hồ sơ.</p>
                    <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8170/" class="text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">Xem chi tiết Ricoh fi-8170 →</a>
                  </div>
                </div>
                <div class="border border-gray-200 p-5 bg-white flex flex-col md:flex-row gap-5 items-center">
                  <div class="w-full md:w-1/4 flex-shrink-0 text-center">
                    <img src="/assets/images/products/ricoh-sp-1130n.jpg" alt="Ricoh SP-1130N" class="h-28 mx-auto object-contain" />
                  </div>
                  <div class="flex-1">
                    <h5 class="font-bold text-gray-900 text-base mb-1">Ricoh SP-1130N – Giải pháp kinh tế cho văn thư trường học</h5>
                    <p class="text-sm text-gray-600 mb-2">Tốc độ 30 trang/phút (60 ảnh/phút), khay nạp 50 tờ, có cổng mạng LAN. Giá thành cực kỳ hợp lý cho các trường THPT, THCS trang bị tại phòng văn thư.</p>
                    <a href="/san-pham/may-scan-so-hoa/ricoh-sp-1130n/" class="text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">Xem chi tiết Ricoh SP-1130N →</a>
                  </div>
                </div>
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
        "summary": "Tổng hợp các tiêu chuẩn kỹ thuật nghiêm ngặt trong công tác in sao đề thi tuyển sinh và tốt nghiệp THPT: yêu cầu tốc độ, độ sắc nét, phương án dự phòng N+1 và quy trình vận hành an toàn bảo mật tại điểm in sao.",
        "image": "/assets/images/hero-education.jpg",
        "toc": [
            ("dac-thu-ky-thi", "1. Đặc thù và yêu cầu tuyệt đối của kỳ thi THPT"),
            ("tieu-chuan-ky-thuat", "2. Tiêu chuẩn kỹ thuật đối với hệ thống máy in sao"),
            ("vi-sao-chon-duplo", "3. Vì sao máy in nhân bản Duplo là lựa chọn số 1?"),
            ("phuong-an-du-phong", "4. Phương án máy dự phòng N+1 và an toàn vận hành"),
            ("quy-trinh-ban-giao", "5. Quy trình bàn giao và cách ly tại khu vực in sao đề thi"),
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
            ("vi-sao-chon-duplo", "3. Vì sao máy in nhân bản Duplo là lựa chọn số 1?", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Tập đoàn Duplo (Nhật Bản) là nhà tiên phong số 1 thế giới về công nghệ in nhân bản kỹ thuật số (Digital Duplicator):
              </p>
              <ul class="space-y-2 mb-6 text-sm text-gray-700">
                <li class="flex items-start"><i class="fa-solid fa-check text-[#1A9900] mt-1 mr-2 flex-shrink-0"></i><span>Cơ chế tạo bản Master siêu bền với đầu quét nhiệt độ chính xác cao.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-check text-[#1A9900] mt-1 mr-2 flex-shrink-0"></i><span>Trống in (Drum) công nghiệp chịu lực tải liên tục hàng chục ngàn bản mỗi ca làm việc.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-check text-[#1A9900] mt-1 mr-2 flex-shrink-0"></i><span>Hương Sơn là Đại lý ủy quyền phân phối chính thức Duplo tại miền Bắc từ 2017, sở hữu kho linh kiện và vật tư sẵn sàng lớn nhất.</span></li>
              </ul>
            """),
            ("phuong-an-du-phong", "4. Phương án máy dự phòng N+1 và an toàn vận hành", """
              <div class="bg-green-50 p-6 border border-green-200 mb-6">
                <h5 class="font-bold text-[#1A9900] text-base mb-2">Quy tắc vàng N+1 trong in sao đề thi</h5>
                <p class="text-sm text-gray-700 leading-relaxed">
                  Nếu Hội đồng in sao cần 3 máy hoạt động chính để kịp tiến độ, Hương Sơn luôn cung cấp thêm 1 máy dự phòng nóng cùng model và cấu hình (tổng 4 máy). Nếu một máy cần bảo dưỡng hoặc gặp sự cố bất ngờ, kỹ sư chuyển trống in sang máy dự phòng chỉ trong 2 phút, đảm bảo dây chuyền in hoạt động liên tục không gián đoạn.
                </p>
              </div>
            """),
            ("quy-trinh-ban-giao", "5. Quy trình bàn giao và cách ly tại khu vực in sao đề thi", """
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
             "Đúng. Hương Sơn là Đại lý ủy quyền phân phối chính thức Toshiba tại miền Bắc từ năm 2017 và là Đại lý bán hàng Konica Minolta từ năm 2021, cam kết 100% máy mới nguyên đai nguyên kiện và bảo hành chính hãng."),
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
                <li class="p-4 bg-white border border-gray-200">
                  <strong class="text-gray-900 block mb-1 text-base">Cơ chế vận hành bền bỉ, 'nồi đồng cối đá':</strong>
                  Khung máy cứng cáp, ít hỏng vặt, hoạt động ổn định trong điều kiện thời tiết nóng ẩm tại Việt Nam.
                </li>
                <li class="p-4 bg-white border border-gray-200">
                  <strong class="text-gray-900 block mb-1 text-base">Chi phí trang in siêu tiết kiệm:</strong>
                  Hộp mực dung lượng lớn (tới 38.000 – 43.000 bản in/hộp), cơ chế thu hồi mực thải hiệu quả giúp giảm tối đa chi phí bản in.
                </li>
                <li class="p-4 bg-white border border-gray-200">
                  <strong class="text-gray-900 block mb-1 text-base">Giao diện điều khiển cảm ứng thân thiện:</strong>
                  Màn hình cảm ứng lớn 10.1 inch, menu tiếng Việt rõ ràng, dễ làm quen ngay cả với người lớn tuổi.
                </li>
              </ul>
            """),
            ("uu-diem-konica", "3. Điểm mạnh nổi bật của dòng Konica Minolta bizhub", """
              <ul class="space-y-3 mb-6 text-sm text-gray-700">
                <li class="p-4 bg-white border border-gray-200">
                  <strong class="text-gray-900 block mb-1 text-base">Chất lượng bản in đồ họa đỉnh cao:</strong>
                  Mực Polymer hóa Simitri HD mang lại độ bóng mịn, màu sắc trung thực và độ phân giải thực 1200x1200 dpi.
                </li>
                <li class="p-4 bg-white border border-gray-200">
                  <strong class="text-gray-900 block mb-1 text-base">Khả năng mở rộng và hoàn thiện tài liệu:</strong>
                  Hỗ trợ các tùy chọn hoàn thiện sau in cao cấp: dập ghim góc, dập ghim giữa đóng thành quyển sách, đục lỗ tự động.
                </li>
                <li class="p-4 bg-white border border-gray-200">
                  <strong class="text-gray-900 block mb-1 text-base">Bảo mật chuẩn doanh nghiệp cao cấp:</strong>
                  Tích hợp chip bảo mật TPM, mã hóa dữ liệu ổ cứng chuẩn Bitdefender và xác thực qua thẻ từ thông minh.
                </li>
              </ul>
            """),
            ("bang-so-sanh-doi-dau", "4. Bảng so sánh đối đầu theo từng tiêu chí", """
              <div class="overflow-x-auto my-6 border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                  <thead>
                    <tr class="bg-gray-100 text-gray-900 border-b font-bold">
                      <th class="p-4">Tiêu chí</th>
                      <th class="p-4">Toshiba e-STUDIO (2528A / 3528A / 4528A)</th>
                      <th class="p-4">Konica Minolta bizhub (360i / 650i / C250i)</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 text-gray-700">
                    <tr>
                      <td class="p-4 font-semibold">Độ bền cơ học</td>
                      <td class="p-4 font-bold text-[#1A9900]">Rất cao (9.5/10)</td>
                      <td class="p-4">Cao (9.0/10)</td>
                    </tr>
                    <tr>
                      <td class="p-4 font-semibold">Chi phí mực & vật tư</td>
                      <td class="p-4 font-bold text-[#1A9900]">Cực kỳ tiết kiệm</td>
                      <td class="p-4">Mức trung bình – cao</td>
                    </tr>
                    <tr>
                      <td class="p-4 font-semibold">Độ nét in ảnh & màu</td>
                      <td class="p-4">Tốt (8.5/10)</td>
                      <td class="p-4 font-bold text-[#1A9900]">Xuất sắc (9.8/10)</td>
                    </tr>
                    <tr>
                      <td class="p-4 font-semibold">Tính năng hoàn thiện</td>
                      <td class="p-4">Đầy đủ tính năng cơ bản</td>
                      <td class="p-4 font-bold text-[#1A9900]">Đa dạng mô-đun cao cấp</td>
                    </tr>
                    <tr>
                      <td class="p-4 font-semibold">Phù hợp nhất cho</td>
                      <td class="p-4 font-bold">Văn phòng, trường học, cơ quan hành chính</td>
                      <td class="p-4 font-bold">Công ty thiết kế, marketing, ngân hàng lớn</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            """),
            ("tu-van-chon-may", "5. Tư vấn lựa chọn phù hợp nhất cho đơn vị", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                • <strong>Chọn Toshiba nếu:</strong> Bạn ưu tiên số 1 về chi phí vận hành rẻ, máy bền bỉ, dễ sử dụng cho toàn thể cán bộ nhân viên văn phòng in ấn văn bản hành chính hằng ngày.<br>
                • <strong>Chọn Konica Minolta nếu:</strong> Đơn vị của bạn đòi hỏi bản in màu chất lượng cao, in brochure, báo cáo tài chính đẹp mắt hoặc in số lượng lớn với tốc độ cao từ 65–75 bản/phút.
              </p>
            """),
        ],
        "related_links": [
            ("Danh mục máy photocopy Toshiba e-STUDIO", "/san-pham/photocopy-may-da-chuc-nang/"),
            ("Xem model Toshiba e-STUDIO 3528A", "/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-3528a/"),
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
                <div class="border border-gray-200 p-4 bg-white">
                  <h5 class="font-bold text-gray-900 mb-2">Trống quang học (Drum)</h5>
                  <p class="text-xs text-gray-600">Trái tim của máy photocopy. Bề mặt phủ lớp quang dẫn nhạy sáng. Tuyệt đối không để ánh nắng trực tiếp chiếu vào hoặc dùng khăn ráp lau.</p>
                </div>
                <div class="border border-gray-200 p-4 bg-white">
                  <h5 class="font-bold text-gray-900 mb-2">Gạt mực (Wiper Blade)</h5>
                  <p class="text-xs text-gray-600">Lưỡi cao su gạt sạch mực thừa trên trống sau mỗi vòng quay. Lưỡi gạt mòn hoặc mẻ sẽ để lại vệt đen trên giấy.</p>
                </div>
                <div class="border border-gray-200 p-4 bg-white">
                  <h5 class="font-bold text-gray-900 mb-2">Cụm sấy (Fuser Unit)</h5>
                  <p class="text-xs text-gray-600">Lô sấy và lô ép dùng nhiệt độ cao (160–190°C) để làm chảy và ép chặt hạt mực vào sợi giấy. Cần dùng dầu bôi trơn chuyên dụng.</p>
                </div>
              </div>
            """),
            ("giai-phap-fansipan", "3. Giải pháp mực in chất lượng cao FANSIPAN", """
              <div class="bg-green-50 p-6 border border-green-200 mb-6">
                <h5 class="font-bold text-[#1A9900] text-base mb-2">Mực in FANSIPAN – Chuẩn mực thay thế hoàn hảo</h5>
                <p class="text-sm text-gray-700 leading-relaxed mb-3">
                  Được nghiên cứu và phát triển bởi Hương Sơn, thương hiệu mực FANSIPAN mang đến giải pháp cân bằng tuyệt đối: chất lượng tương đương mực chính hãng hãng sản xuất (OEM) nhưng chi phí chỉ bằng 50% – 60%.
                </p>
                <div class="flex flex-wrap gap-3">
                  <a href="/san-pham/fansipan/muc-fansipan-toner-toshiba-e-studio/" class="text-xs font-bold text-[#1A9900] hover:underline bg-white px-3 py-1.5 border border-green-300">Mực FANSIPAN cho Toshiba →</a>
                  <a href="/san-pham/fansipan/muc-fansipan-toner-ricoh-aficio/" class="text-xs font-bold text-[#1A9900] hover:underline bg-white px-3 py-1.5 border border-green-300">Mực FANSIPAN cho Ricoh →</a>
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
        "seo_desc": "Hướng dẫn 7 bước số hóa hồ sơ tài liệu lưu trữ: chuẩn bị tài liệu, quét scan, xử lý ảnh, OCR nhận dạng văn bản, đặt tên file, kiểm tra chất lượng và nhập CSDL.",
        "keywords": "quy trình số hóa tài liệu, số hóa hồ sơ lưu trữ, tiêu chuẩn số hóa tài liệu nhà nước, dịch vụ số hóa tài liệu, thông tư 02 2019 bnv",
        "date": "2026-09-15",
        "reading_time": "6 phút đọc",
        "tag": "Chuyển đổi số",
        "summary": "Cẩm nang hướng dẫn đầy đủ 7 bước chuẩn hóa trong quy trình số hóa tài liệu lưu trữ theo Thông tư 02/2019/TT-BNV: tiêu chuẩn kỹ thuật quét ảnh, phần mềm OCR nhận dạng chữ và phương pháp kiểm soát chất lượng dữ liệu đầu ra.",
        "image": "/assets/images/hero-projects.jpg",
        "toc": [
            ("tai-sao-can-so-hoa", "1. Tại sao các cơ quan và trường học bắt buộc phải số hóa?"),
            ("khung-phap-ly", "2. Khung pháp lý và tiêu chuẩn số hóa (Thông tư 02/2019/TT-BNV)"),
            ("7-buoc-quy-trinh", "3. Chi tiết 7 bước trong quy trình số hóa chuyên nghiệp"),
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
            ("7-buoc-quy-trinh", "3. Chi tiết 7 bước trong quy trình số hóa chuyên nghiệp", """
              <div class="space-y-3 mb-6">
                <div class="p-4 bg-white border border-gray-200 flex gap-4 items-start">
                  <span class="w-8 h-8 rounded-full bg-[#1A9900] text-white font-bold flex items-center justify-center flex-shrink-0 text-sm">1</span>
                  <div>
                    <h6 class="font-bold text-gray-900">Bước 1: Tiếp nhận và kiểm kê hồ sơ</h6>
                    <p class="text-sm text-gray-600">Lập biên bản bàn giao từng tập hồ sơ, đối chiếu danh mục tài liệu gốc.</p>
                  </div>
                </div>
                <div class="p-4 bg-white border border-gray-200 flex gap-4 items-start">
                  <span class="w-8 h-8 rounded-full bg-[#1A9900] text-white font-bold flex items-center justify-center flex-shrink-0 text-sm">2</span>
                  <div>
                    <h6 class="font-bold text-gray-900">Bước 2: Phân loại và chuẩn bị tài liệu (Tiền xử lý)</h6>
                    <p class="text-sm text-gray-600">Tháo ghim, kẹp sắt; làm phẳng nếp gấp; dán phục hồi các trang rách; chèn tờ phân trang mã vạch (Barcode).</p>
                  </div>
                </div>
                <div class="p-4 bg-white border border-gray-200 flex gap-4 items-start">
                  <span class="w-8 h-8 rounded-full bg-[#1A9900] text-white font-bold flex items-center justify-center flex-shrink-0 text-sm">3</span>
                  <div>
                    <h6 class="font-bold text-gray-900">Bước 3: Quét số hóa trên máy scan chuyên dụng</h6>
                    <p class="text-sm text-gray-600">Sử dụng hệ thống máy scan Ricoh fi-series nạp tự động tốc độ cao 70–140 hình ảnh/phút, quét 2 mặt tự động.</p>
                  </div>
                </div>
                <div class="p-4 bg-white border border-gray-200 flex gap-4 items-start">
                  <span class="w-8 h-8 rounded-full bg-[#1A9900] text-white font-bold flex items-center justify-center flex-shrink-0 text-sm">4</span>
                  <div>
                    <h6 class="font-bold text-gray-900">Bước 4: Xử lý hình ảnh và kiểm tra chất lượng (QC lần 1)</h6>
                    <p class="text-sm text-gray-600">Phần mềm tự động cân thẳng trang (Deskew), làm sạch vết bẩn, cắt viền đen và xoay trang theo đúng chiều đọc.</p>
                  </div>
                </div>
                <div class="p-4 bg-white border border-gray-200 flex gap-4 items-start">
                  <span class="w-8 h-8 rounded-full bg-[#1A9900] text-white font-bold flex items-center justify-center flex-shrink-0 text-sm">5</span>
                  <div>
                    <h6 class="font-bold text-gray-900">Bước 5: Nhận dạng ký tự quang học (OCR tiếng Việt)</h6>
                    <p class="text-sm text-gray-600">Chuyển đổi hình ảnh quét sang Searchable PDF với độ chính xác trên 98% đối với phông chữ in tiếng Việt.</p>
                  </div>
                </div>
                <div class="p-4 bg-white border border-gray-200 flex gap-4 items-start">
                  <span class="w-8 h-8 rounded-full bg-[#1A9900] text-white font-bold flex items-center justify-center flex-shrink-0 text-sm">6</span>
                  <div>
                    <h6 class="font-bold text-gray-900">Bước 6: Đặt tên tệp và lập chỉ mục dữ liệu đặc tả (Indexing)</h6>
                    <p class="text-sm text-gray-600">Đặt tên file chuẩn theo số hiệu văn bản; nhập thông tin trích yếu vào cơ sở dữ liệu.</p>
                  </div>
                </div>
                <div class="p-4 bg-white border border-gray-200 flex gap-4 items-start">
                  <span class="w-8 h-8 rounded-full bg-[#1A9900] text-white font-bold flex items-center justify-center flex-shrink-0 text-sm">7</span>
                  <div>
                    <h6 class="font-bold text-gray-900">Bước 7: Đóng gói tài liệu gốc và bàn giao CSDL số</h6>
                    <p class="text-sm text-gray-600">Ghim kẹp hoàn trả nguyên trạng hồ sơ giấy vào kho; bàn giao dữ liệu số hóa và nghiệm thu.</p>
                  </div>
                </div>
              </div>
            """),
            ("thiet-bi-phan-mem", "4. Thiết bị và phần mềm chuyên dụng phục vụ số hóa", """
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Hương Sơn sở hữu đầy đủ năng lực trang thiết bị chuẩn công nghiệp cho các dự án số hóa quy mô lớn:
              </p>
              <p class="text-sm text-gray-600 mb-2">• Đội máy quét chuyên dụng Ricoh fi-8170, fi-8270, fi-7600 với tổng năng lực xử lý hơn 100.000 trang/ngày.</p>
              <p class="text-sm text-gray-600">• Bản quyền phần mềm PaperStream Capture Pro và engine nhận dạng OCR chuyên sâu ABBYY FineReader.</p>
            """),
            ("kiem-soat-chat-luong", "5. Kiểm soát chất lượng và bàn giao cơ sở dữ liệu", """
              <div class="p-5 bg-green-50 border border-green-200 mb-6">
                <p class="text-sm text-gray-700 leading-relaxed">
                  Quy trình kiểm soát chất lượng 2 cấp độc lập của Hương Sơn đảm bảo tỷ lệ lỗi quét dưới 0.1%: 100% tệp tin được kiểm tra mở thử nghiệm, đảm bảo không mất góc, không nhòe chữ và tìm kiếm văn bản mượt mà trước khi bàn giao đưa vào hệ thống lưu trữ điện tử.
                </p>
              </div>
            """),
        ],
        "related_links": [
            ("Giải pháp Scan – Số hóa tài liệu tổng thể", "/giai-phap/scan-so-hoa/"),
            ("Máy scan chuyên dụng Ricoh fi-8170", "/san-pham/may-scan-so-hoa/ricoh-fi-8170/"),
            ("Dự án số hóa hồ sơ cho ngành Giáo dục", "/giai-phap/giao-duc/so-hoa-ho-so-truong-hoc/"),
            ("Đăng ký nhận báo giá & phương án số hóa", "/nhan-tu-van/khao-sat-so-hoa/"),
        ],
    },
]

ARTICLE_BY_SLUG = {a["slug"]: a for a in KNOWLEDGE_ARTICLES}


def render_article(a):
    trail = [
        ("Trang chủ", "/"),
        ("Về Hương Sơn", "/ve-huong-son/"),
        ("Kiến thức", "/ve-huong-son/kien-thuc/"),
        (a["title"], a["url"]),
    ]

    # Hero section
    body = f"""
  <section class="bg-[{DARK}] py-16 lg:py-20 text-white relative">
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
          <span><i class="fa-regular fa-calendar text-[#5eb74c] mr-1.5"></i>{a['date']}</span>
          <span>•</span>
          <span><i class="fa-regular fa-clock text-[#5eb74c] mr-1.5"></i>{a['reading_time']}</span>
          <span>•</span>
          <span><i class="fa-solid fa-shield-halved text-[#5eb74c] mr-1.5"></i>Ban Biên Tập Hương Sơn</span>
        </div>
      </div>
    </div>
  </section>"""

    # TOC and Content grid
    toc_links = "".join(
        f'<li class="mb-2"><a href="#{anchor}" class="text-gray-600 hover:text-[{BRAND}] text-[14.5px] transition block leading-relaxed">• {esc(title)}</a></li>'
        for anchor, title in a["toc"]
    )

    blocks_html = ""
    for anchor, heading, content in a["content_blocks"]:
        blocks_html += f"""
        <div id="{anchor}" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">{esc(heading)}</h2>
          <div class="prose max-w-none text-gray-700">{content}</div>
        </div>"""

    faq_html = ""
    if a.get("faqs"):
        faq_items = "".join(f"""
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[{BRAND}] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>{esc(q)}</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">{esc(ans)}</p>
          </div>""" for q, ans in a["faqs"])
        faq_html = f"""
        <div class="mt-12 pt-8 border-t border-gray-200">
          <h3 class="text-xl font-bold text-gray-900 mb-6 uppercase tracking-wider text-sm text-[{BRAND}]">Câu hỏi thường gặp</h3>
          <div class="space-y-4">{faq_items}</div>
        </div>"""

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
              <h5 class="text-xs font-bold uppercase tracking-wider text-gray-700 mb-3">Các cẩm nang khác</h5>
              <ul class="space-y-2.5 text-xs text-gray-600">
                {''.join(f'<li><a href="{other["url"]}" class="hover:text-[{BRAND}] transition block leading-snug">• {esc(other["title"])}</a></li>' for other in KNOWLEDGE_ARTICLES if other["slug"] != a["slug"])}
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
        ["Chuyên mục này là gì", "Trung tâm kiến thức chuyên sâu về máy photocopy, máy in nhân bản, máy scan số hóa và giải pháp in ấn cho doanh nghiệp, cơ quan, trường học."],
        ["Dành cho ai", "Lãnh đạo đơn vị, phòng Kế hoạch – Tài chính, phòng Mua sắm vật tư, cán bộ khảo thí và chuyên viên quản trị thiết bị."],
        ["Giúp giải quyết điều gì", "Nắm rõ chi phí thực tế TCO, so sánh ưu nhược điểm các dòng máy, hiểu quy trình số hóa chuẩn quốc gia và chọn đúng vật tư chính hãng."],
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
        '<h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-8 uppercase tracking-wider text-center">Các bài viết mới nhất</h2>'
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
