# -*- coding: utf-8 -*-
"""Module sinh 6 Landing Pages chuyên sâu cho mảng Cho Thuê Thiết Bị (Rental):
1. /thue-may-photocopy-ha-noi/
2. /thue-may-in/
3. /thue-may-photocopy-truong-hoc/
4. /thue-may-photocopy-so-gd/
5. /thue-may-in-de-thi/
6. /thue-may-photocopy-ngan-hang/
"""
import render
import schema
import components as C
import forms
from render import SITE, BRAND, DARK
from components import esc, WRAP, BEIGE

RENTAL_PAGES = [
    {
        "slug": "thue-may-photocopy-ha-noi",
        "url": "/thue-may-photocopy-ha-noi/",
        "title": "Cho Thuê Máy Photocopy Tại Hà Nội Giá Rẻ Từ 800k/Tháng | Hương Sơn",
        "seo_title": "Cho Thuê Máy Photocopy Tại Hà Nội Giá Rẻ Chỉ Từ 800k/Tháng | Hương Sơn",
        "seo_desc": "Dịch vụ cho thuê máy photocopy Toshiba, Ricoh mới 100% tại Hà Nội: Giá từ 800.000đ/tháng, 0đ tiền cọc, miễn phí mực in & linh kiện, kỹ thuật hỗ trợ tận nơi trong 2 giờ.",
        "keywords": "thuê máy photocopy hà nội, cho thuê máy photocopy tại hà nội, thuê máy photo giá rẻ hà nội, thuê máy photocopy toshiba hà nội, thuê máy photocopy ricoh hà nội, bảng giá thuê máy photocopy hà nội",
        "eyebrow": "Dịch Vụ Cho Thuê Máy Photocopy Số 1 Hà Nội",
        "h1": "Cho Thuê Máy Photocopy Tại Hà Nội – Máy Mới 100%, Giá Chỉ Từ 800.000 đ/Tháng",
        "lead": "Giải pháp tối ưu dòng tiền doanh nghiệp: Không cần vốn đầu tư ban đầu, 0đ tiền cọc máy, bao trọn gói 100% mực in và linh kiện hao mòn, cam kết kỹ thuật viên có mặt xử lý sự cố dưới 2 giờ.",
        "aeo_answer": "Dịch vụ cho thuê máy photocopy tại Hà Nội của Hương Sơn cung cấp các dòng máy đa chức năng Toshiba, Ricoh đời mới (25 – 65 trang/phút) với chi phí trọn gói từ 800.000đ/tháng. Khách hàng hoàn toàn không cần đặt cọc, được miễn phí toàn bộ mực in và thay thế linh kiện định kỳ, cam kết đổi máy mới trong 24 giờ nếu phát sinh sự cố không thể khắc phục.",
        "target_badge": "Phục vụ 30 quận huyện Hà Nội & KCN lân cận",
        "hero_img": "/assets/images/products/toshiba-e-studio-2829a.jpg",
        "package_focus": "van-phong",
        "faqs": [
            ("Thuê máy photocopy tại Hương Sơn có phải đặt cọc tiền máy không?", "Hoàn toàn KHÔNG. Hương Sơn áp dụng chính sách 0đ tiền cọc đối với các doanh nghiệp, cơ quan, trường học có trụ sở hoạt động tại Hà Nội và các tỉnh phía Bắc."),
            ("Khi máy hết mực hoặc gặp sự cố kỹ thuật thì xử lý thế nào?", "Hương Sơn bao trọn gói 100% mực in và linh kiện thay thế. Khi nhận được yêu cầu, kỹ sư của Hương Sơn sẽ có mặt tận nơi xử lý trong vòng 2 giờ. Nếu máy hỏng hóc nặng quá 24h, chúng tôi sẽ đổi ngay máy tương đương hoàn toàn miễn phí."),
            ("Doanh nghiệp có được dùng thử máy trước khi ký hợp đồng không?", "Có. Hương Sơn hỗ trợ chương trình trải nghiệm thực tế dùng thử máy miễn phí từ 05 đến 07 ngày tại văn phòng của quý khách trước khi chính thức ký hợp đồng thuê.")
        ]
    },
    {
        "slug": "thue-may-in",
        "url": "/thue-may-in/",
        "title": "Dịch Vụ Cho Thuê Máy In Văn Phòng Trọn Gói Giá Tốt | Hương Sơn",
        "seo_title": "Dịch Vụ Cho Thuê Máy In Văn Phòng Trọn Gói Giá Tốt | Hương Sơn",
        "seo_desc": "Cho thuê máy in laser đa chức năng HP, Toshiba, Ricoh khổ A3/A4 cho văn phòng và doanh nghiệp. Bao trọn gói mực in, bảo trì định kỳ, không phát sinh chi phí.",
        "keywords": "thuê máy in, cho thuê máy in văn phòng, thuê máy in laser, thuê máy in đa năng, cho thuê máy in hà nội, thuê máy in màu a3",
        "eyebrow": "Giải Pháp In Ấn Văn Phòng Hiện Đại",
        "h1": "Cho Thuê Máy In Laser Đa Chức Năng A3/A4 Trọn Gói – Không Lo Hết Mực",
        "lead": "Bố trí linh hoạt máy in phân tán theo từng phòng ban, giải quyết triệt để tình trạng xếp hàng in ấn, tự động giám sát lượng mực và cấp phát vật tư định kỳ.",
        "aeo_answer": "Dịch vụ cho thuê máy in văn phòng của Hương Sơn cung cấp các dòng máy in laser đen trắng và laser màu tốc độ cao từ HP, Toshiba, Canon, đáp ứng nhu cầu in ấn từ 2.000 đến 15.000 trang/tháng. Đơn giá thuê chỉ từ 500.000đ/tháng đã bao gồm toàn bộ hộp mực cartridge và bảo dưỡng kỹ thuật.",
        "target_badge": "Tiết kiệm 40% chi phí in ấn phân tán",
        "hero_img": "/assets/images/products/55-may-in-laser-den-trang-hp-laserjet-pro-mfp-4103fdw-2z629a.jpg",
        "package_focus": "may-in",
        "faqs": [
            ("Máy in cho thuê có chức năng in hai mặt và scan qua mạng không?", "Tất cả các dòng máy in cho thuê của Hương Sơn đều là dòng máy đa năng đời mới, trang bị sẵn tính năng Duplex (in đảo 2 mặt tự động) và Network Print/Scan qua mạng LAN/Wifi."),
            ("Định mức bản in hàng tháng được tính như thế nào?", "Hương Sơn cung cấp các gói định mức từ 2.000 đến 10.000 bản/tháng. Nếu tháng nào doanh nghiệp in vượt định mức, chi phí phụ trội chỉ từ 80đ - 120đ/trang A4 cực kỳ tiết kiệm."),
            ("Hương Sơn có cung cấp máy in màu khổ A3 không?", "Có. Chúng tôi có sẵn các model máy in màu laser A3 chuyên nghiệp cho các công ty kiến trúc, thiết kế, xây dựng và marketing.")
        ]
    },
    {
        "slug": "thue-may-photocopy-truong-hoc",
        "url": "/thue-may-photocopy-truong-hoc/",
        "title": "Cho Thuê Máy Photocopy Cho Trường Học & Cơ Sở Giáo Dục | Hương Sơn",
        "seo_title": "Cho Thuê Máy Photocopy Cho Trường Học & Cơ Sở Giáo Dục | Hương Sơn",
        "seo_desc": "Giải pháp cho thuê máy photocopy chuyên biệt cho trường Đại học, THPT, THCS: Miễn phí mực in giáo trình, hợp đồng linh hoạt theo năm học, không tính phí 3 tháng hè.",
        "keywords": "thuê máy photocopy trường học, máy photocopy cho trường học, thuê máy photo thpt thcs, thuê máy in giáo trình, máy in đề kiểm tra trường học",
        "eyebrow": "Hương Sơn Education Solutions",
        "h1": "Cho Thuê Máy Photocopy Cho Trường Học – Hợp Đồng Linh Hoạt Theo Năm Học",
        "lead": "Thiết kế riêng cho các trường Đại học, Cao đẳng, THPT, THCS: Không tính phí thuê trong 3 tháng hè, miễn phí định mức mực in cho các đợt thi học kỳ và in tài liệu giảng dạy.",
        "aeo_answer": "Gói thuê máy photocopy trường học của Hương Sơn giải quyết bài toán ngân sách giáo dục: Hợp đồng linh hoạt 9 tháng học kỳ (miễn tính phí 3 tháng hè), cung cấp các dòng máy công suất lớn 35 - 55 trang/phút chịu tải cao khi in đề thi, bài tập và giáo án, cam kết hỗ trợ kỹ thuật ưu tiên trong 1 giờ.",
        "target_badge": "Đồng hành cùng > 80 trường học miền Bắc",
        "hero_img": "/assets/images/products/61-may-photocopy-toshiba-e-studio-4518a.jpg",
        "package_focus": "truong-hoc",
        "faqs": [
            ("Trường học nghỉ hè 3 tháng có phải trả tiền thuê máy không?", "Hương Sơn áp dụng chính sách đặc quyền cho khối trường học: Miễn phí hoàn toàn cước thuê trong các tháng nghỉ hè (tháng 6, 7, 8) hoặc chuyển sang gói bảo lưu thiết bị 0đ."),
            ("Máy có đáp ứng được nhu cầu in đề kiểm tra dồn dập vào cuối kỳ không?", "Hoàn toàn đáp ứng tốt. Máy photocopy trường học của Hương Sơn đều có tốc độ từ 45 - 55 bản/phút, khay nạp tự động 1.000 - 2.000 tờ, chạy êm và không bị nóng kẹt giấy."),
            ("Nhà trường có được thanh toán theo quý hoặc theo ngân sách giải ngân không?", "Có. Chúng tôi hỗ trợ đầy đủ thủ tục hóa đơn tài chính, hợp đồng mẫu chuẩn theo quy định kho bạc và cho phép thanh toán linh hoạt theo kỳ giải ngân của nhà trường.")
        ]
    },
    {
        "slug": "thue-may-photocopy-so-gd",
        "url": "/thue-may-photocopy-so-gd/",
        "title": "Cho Thuê Máy Photocopy Cho Sở GD&ĐT & Cơ Quan Nhà Nước | Hương Sơn",
        "seo_title": "Dịch Vụ Cho Thuê Máy Photocopy Cho Sở GD&ĐT & Cơ Quan Nhà Nước (B2G) | Hương Sơn",
        "seo_desc": "Hương Sơn cung cấp máy photocopy tốc độ cao, máy in bảo mật cho các Sở GD&ĐT, Phòng GD&ĐT và cơ quan hành chính: Đầy đủ CO/CQ, hóa đơn VAT, năng lực đấu thầu và dự phòng N+1.",
        "keywords": "thuê máy photocopy sở giáo dục, thuê máy photocopy cơ quan nhà nước, máy photocopy b2g, cho thuê máy in phòng giáo dục, thuê máy in bảo mật cơ quan",
        "eyebrow": "B2G Strategic Partnership",
        "h1": "Cho Thuê Máy Photocopy Cho Sở GD&ĐT & Cơ Quan Nhà Nước – Chuẩn Pháp Lý B2G",
        "lead": "Đối tác cung ứng tin cậy của các Sở GD&ĐT và cơ quan ban ngành: Đầy đủ hồ sơ năng lực đấu thầu, chứng nhận CO/CQ chính hãng, giải pháp bảo mật tài liệu và phương án dự phòng N+1.",
        "aeo_answer": "Dịch vụ cho thuê máy in và photocopy B2G của Hương Sơn được xây dựng chuẩn mực theo quy chuẩn đấu thầu công: Máy móc mới 100% nhập khẩu chính ngạch có chứng nhận CO/CQ, tính năng xóa dữ liệu ổ cứng an toàn, hóa đơn chứng từ kho bạc hợp lệ, cam kết trực kỹ thuật tại chỗ.",
        "target_badge": "Đối tác tin cậy của Sở GD&ĐT Vĩnh Phúc, Quảng Trị",
        "hero_img": "/assets/images/proof/ban-giao-thiet-bi-tan-noi.jpg",
        "package_focus": "co-quan",
        "faqs": [
            ("Hương Sơn có đáp ứng được đầy đủ hồ sơ năng lực để đấu thầu/chỉ định thầu không?", "Có. Công ty Hương Sơn thành lập từ năm 2008, có đầy đủ báo cáo tài chính kiểm toán minh bạch, hồ sơ năng lực B2G dày dặn, chứng nhận đại lý ủy quyền của Duplo, Toshiba và chứng chỉ ISO."),
            ("Máy photocopy có đáp ứng tiêu chuẩn an toàn bảo mật văn bản mật không?", "Có. Thiết bị của chúng tôi trang bị tính năng mã hóa ổ cứng HDD/SSD chuẩn AES-256 bit và tính năng tự động ghi đè dữ liệu (Data Overwrite) đạt tiêu chuẩn an ninh thông tin quốc tế."),
            ("Khu vực cách ly in sao đề thi có được bố trí kỹ thuật viên trực cùng không?", "Có. Hương Sơn cử kỹ sư lành nghề thực hiện cách ly 3 vòng độc lập cùng hội đồng in sao đề thi theo đúng quy chế thi của Bộ GD&ĐT.")
        ]
    },
    {
        "slug": "thue-may-in-de-thi",
        "url": "/thue-may-in-de-thi/",
        "title": "Cho Thuê Máy In Đề Thi Siêu Tốc Duplo Kỳ Thi THPT | Hương Sơn",
        "seo_title": "Cho Thuê Máy In Đề Thi Siêu Tốc Duplo Phục Vụ Kỳ Thi THPT | Hương Sơn",
        "seo_desc": "Giải pháp máy in nhân bản siêu tốc Duplo ép lạnh rulo tốc độ 150-180 trang/phút, offline cách ly 3 vòng, kỹ thuật viên trực hiện trường và máy dự phòng nóng N+1 cho kỳ thi.",
        "keywords": "thuê máy in đề thi, máy in đề thi siêu tốc, thuê máy in duplo kỳ thi, máy in sao đề thi thpt, duplo dp-x850 in de thi",
        "eyebrow": "Chuyên Sâu Kỳ Thi Quốc Gia & Tuyển Sinh",
        "h1": "Cho Thuê Máy In Đề Thi Siêu Tốc Duplo – Giải Pháp Độc Quyền Ép Lạnh Rulo",
        "lead": "Tốc độ in thần tốc 130 – 180 bản/phút, công nghệ in rulo lạnh không sinh nhiệt, không tĩnh điện dính giấy, vận hành offline 100% bảo mật tuyệt đối cho kỳ thi tuyển sinh và tốt nghiệp THPT.",
        "aeo_answer": "Gói thuê máy in đề thi siêu tốc Duplo của Hương Sơn được thiết kế chuyên biệt cho các kỳ thi lớn: Cung cấp các model cao cấp Duplo DP-X550, DP-X650, DP-X850, trọn gói cuộn Master và mực in chính hãng, máy phối trang gập ghim DFC tự động, cấu hình máy dự phòng nóng N+1 và kỹ sư PDI túc trực 24/7.",
        "target_badge": "Chuẩn Quy Chế Thi Bộ GD&ĐT • Offline 100%",
        "hero_img": "/assets/images/proof/in-sao-de-thi-duplo.jpg",
        "package_focus": "in-de-thi",
        "faqs": [
            ("Vì sao máy in siêu tốc Duplo ép lạnh lại là lựa chọn bắt buộc khi in đề thi?", "Bởi vì máy in laser thông thường sử dụng sấy nhiệt 200°C làm giấy cong quăn và nhiễm tĩnh điện dính chặt vào nhau, rất dễ kẹt máy khi in hàng trăm nghìn bản. Ngược lại, Duplo ép mực lạnh qua màng Master, giấy ra phẳng mịn tuyệt đối, đóng túi niêm phong được ngay."),
            ("Phương án dự phòng N+1 được triển khai như thế nào?", "Trong mỗi phòng in sao cách ly, Hương Sơn luôn đặt sẵn ít nhất 01 máy in siêu tốc cùng phân khúc ở trạng thái chờ (Standby N+1). Nếu máy chính có bất kỳ dấu hiệu lỗi, cán bộ thi chỉ cần bật nguồn máy dự phòng là tiếp tục in ngay lập tức mà không gián đoạn kỳ thi."),
            ("Lượng mực và cuộn Master thừa sau kỳ thi có được hoàn lại tiền không?", "Có. Hương Sơn cấp dư 20% vật tư để phòng ngừa sự cố. Toàn bộ cuộn Master và bình mực nguyên seal chưa sử dụng sẽ được chúng tôi thu hồi và hoàn trả 100% chi phí.")
        ]
    },
    {
        "slug": "thue-may-photocopy-ngan-hang",
        "url": "/thue-may-photocopy-ngan-hang/",
        "title": "Cho Thuê Máy Photocopy Bảo Mật Cho Ngân Hàng & Tài Chính | Hương Sơn",
        "seo_title": "Cho Thuê Máy Photocopy Bảo Mật Cho Ngân Hàng & Định Chế Tài Chính | Hương Sơn",
        "seo_desc": "Giải pháp in ấn bảo mật toàn diện cho Ngân hàng: Xác thực thẻ nhân viên RFID, xóa sạch ổ cứng chuẩn DoD 5220.22-M, kiểm soát chi phí in ấn. Đã triển khai 127 máy cho Vietcombank.",
        "keywords": "thuê máy photocopy ngân hàng, máy photocopy bảo mật ngân hàng, mps ngân hàng, máy photocopy rfid vietcombank, bảo mật in ấn tài chính",
        "eyebrow": "Enterprise & Financial Grade",
        "h1": "Cho Thuê Máy Photocopy Bảo Mật Cao Cho Ngân Hàng & Định Chế Tài Chính",
        "lead": "Đáp ứng các tiêu chuẩn khắt khe nhất của ngành tài chính: Xác thực thẻ nhân viên RFID, xóa dữ liệu ổ cứng theo chuẩn Bộ Quốc Phòng Mỹ DoD 5220.22-M, bảo trì định kỳ ngoài giờ giao dịch.",
        "aeo_answer": "Dịch vụ cho thuê máy photocopy bảo mật cho ngân hàng của Hương Sơn được kiểm chứng qua hợp đồng cung ứng 127 máy photocopy Toshiba đa chức năng cho hệ thống Vietcombank. Giải pháp tích hợp phần mềm kiểm soát in ấn Pull-Printing, tự động hủy lệnh in sau 24h, mã hóa đường truyền SSL/TLS và SLA cam kết kỹ thuật dưới 2 giờ.",
        "target_badge": "Đã triển khai 127 máy photocopy cho Vietcombank",
        "hero_img": "/assets/images/proof/ban-giao-vietcombank.jpg",
        "package_focus": "ngan-hang",
        "faqs": [
            ("Làm thế nào để chống thất thoát dữ liệu khách hàng tại máy photocopy ngân hàng?", "Hương Sơn tích hợp giải pháp quẹt thẻ nhân viên RFID: Lệnh in chỉ được nhả ra khi chính chủ quẹt thẻ tại máy, không để tài liệu nhạy cảm nằm quên trên khay giấy. Đồng thời toàn bộ nhật ký in ấn được ghi lại trên máy chủ."),
            ("Khi thanh lý hoặc đổi máy, dữ liệu lưu trên ổ cứng được xử lý thế nào?", "Chúng tôi thực hiện quy trình tẩy xóa dữ liệu đa lớp theo chuẩn quân sự DoD 5220.22-M (ghi đè 3 lần) và cung cấp Biên bản bàn giao xóa dữ liệu chứng nhận không thể phục hồi."),
            ("Hương Sơn có hỗ trợ bảo trì định kỳ ngoài giờ hành chính để không ảnh hưởng giao dịch không?", "Có. Đội ngũ kỹ sư của Hương Sơn sẵn sàng thực hiện bảo dưỡng, vệ sinh và thay mực vào khung giờ sau 17h00 hoặc vào sáng thứ Bảy theo thỏa thuận với từng chi nhánh.")
        ]
    }
]

def render_rental_landing(p):
    trail = [("Trang chủ", "/"), ("Cho thuê & Dịch vụ", "/dich-vu/"), (p["title"], p["url"])]
    
    # 1. Page Hero
    body = f"""
  <section class="relative bg-[{DARK}] py-16 sm:py-20 text-white overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-25">
      <img src="{p['hero_img']}" alt="{esc(p['h1'])}" class="w-full h-full object-cover object-center filter blur-xs" />
      <div class="absolute inset-0 bg-gradient-to-r from-[{DARK}] via-[{DARK}]/90 to-[{DARK}]/70"></div>
    </div>
    <div class="{WRAP} relative z-10">
      <div class="max-w-3xl">
        <div class="inline-flex items-center gap-2 bg-[#1A9900]/20 border border-[#1A9900]/50 text-[#84e372] text-xs font-bold px-3 py-1 uppercase tracking-wider mb-4 rounded-xs">
          <i class="fa-solid fa-certificate"></i> {esc(p['eyebrow'])}
        </div>
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white leading-tight mb-4">
          {esc(p['h1'])}
        </h1>
        <p class="text-gray-300 text-sm sm:text-base leading-relaxed mb-6 font-medium">
          {esc(p['lead'])}
        </p>
        <div class="flex flex-wrap items-center gap-4">
          <a href="#bao-gia-nhanh" class="bg-[{BRAND}] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-7 py-3.5 transition shadow-lg flex items-center gap-2">
            <i class="fa-solid fa-calculator"></i> Nhận Báo Giá Nhanh 2026
          </a>
          <a href="tel:0913222003" class="border border-white/30 hover:border-white text-white font-bold text-xs uppercase tracking-wider px-6 py-3.5 transition flex items-center gap-2">
            <i class="fa-solid fa-phone text-[#5eb74c]"></i> Hotline: 0913.222.003
          </a>
        </div>
      </div>
    </div>
  </section>
"""

    # 2. AEO Direct Answer Box
    body += f"""
  <section class="py-8 bg-emerald-50/50 border-b border-emerald-100">
    <div class="{WRAP}">
      <div class="bg-white border-l-4 border-[{BRAND}] p-6 rounded-r-lg shadow-xs">
        <div class="flex items-center gap-2 text-[{BRAND}] font-bold text-xs uppercase tracking-wider mb-2">
          <i class="fa-solid fa-circle-check text-sm"></i>
          <span>Tóm tắt giải pháp nhanh (AEO Key Takeaways)</span>
        </div>
        <p class="text-gray-800 text-sm sm:text-[15px] leading-relaxed font-medium m-0">
          {esc(p['aeo_answer'])}
        </p>
        <div class="mt-3 pt-3 border-t border-gray-100 flex flex-wrap items-center gap-4 text-xs text-gray-500 font-semibold">
          <span class="text-emerald-700"><i class="fa-solid fa-shield mr-1"></i> {esc(p['target_badge'])}</span>
          <span><i class="fa-solid fa-clock mr-1"></i> SLA Cứu Hộ Kỹ Thuật ≤ 2 Giờ</span>
          <span><i class="fa-solid fa-arrows-rotate mr-1"></i> Đổi Máy Mới Trong 24 Giờ</span>
        </div>
      </div>
    </div>
  </section>
"""

    # 3. Transparent Pricing Matrix Table (4-tier standard)
    body += f"""
  <section class="py-16 bg-white border-b border-gray-200">
    <div class="{WRAP}">
      <div class="max-w-3xl mx-auto text-center mb-12">
        <span class="text-[{BRAND}] font-bold text-xs uppercase tracking-[0.2em] block mb-2">Bảng Giá Minh Bạch 2026</span>
        <h2 class="text-2xl sm:text-3xl font-bold text-[#181923]">4 Gói Dịch Vụ Cho Thuê Thiết Bị Tiêu Chuẩn</h2>
        <p class="text-gray-600 text-sm mt-3 leading-relaxed">
          Cam kết 100% không phát sinh chi phí phụ, miễn phí toàn bộ mực in và bảo trì linh kiện định kỳ:
        </p>
      </div>

      <div class="overflow-x-auto my-6 border border-gray-200 rounded-lg shadow-xs">
        <table class="w-full text-left border-collapse text-xs sm:text-sm">
          <thead>
            <tr class="bg-[#181924] text-white">
              <th class="p-3.5 sm:p-4 font-bold uppercase tracking-wider">Gói Cho Thuê</th>
              <th class="p-3.5 sm:p-4 font-bold uppercase tracking-wider">Dòng Máy Tiêu Biểu</th>
              <th class="p-3.5 sm:p-4 font-bold uppercase tracking-wider">Tốc Độ & Tính Năng</th>
              <th class="p-3.5 sm:p-4 font-bold uppercase tracking-wider">Định Mức Bản In</th>
              <th class="p-3.5 sm:p-4 font-bold uppercase tracking-wider text-emerald-400">Đơn Giá / Tháng</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 text-gray-700">
            <tr class="hover:bg-gray-50 transition">
              <td class="p-3.5 sm:p-4 font-bold text-gray-900">1. Gói Khởi Nghiệp</td>
              <td class="p-3.5 sm:p-4">Toshiba e-STUDIO 2329A</td>
              <td class="p-3.5 sm:p-4">25 trang/phút, In/Copy/Scan A3-A4</td>
              <td class="p-3.5 sm:p-4">3.000 bản in A4</td>
              <td class="p-3.5 sm:p-4 font-bold text-[#1A9900] text-sm sm:text-base">800.000 – 1.000.000 đ</td>
            </tr>
            <tr class="hover:bg-gray-50 transition bg-emerald-50/20">
              <td class="p-3.5 sm:p-4 font-bold text-gray-900 flex items-center gap-1.5">
                <span>2. Gói Văn Phòng Chuẩn</span>
                <span class="bg-[#1A9900] text-white text-[10px] px-1.5 py-0.5 rounded font-bold">Phổ Biến</span>
              </td>
              <td class="p-3.5 sm:p-4 font-semibold text-gray-900">Ricoh MP 3055 / Toshiba 3028A</td>
              <td class="p-3.5 sm:p-4">35 trang/phút, Màn hình cảm ứng 10.1 inch, Scan màu</td>
              <td class="p-3.5 sm:p-4 font-semibold">5.000 bản in A4</td>
              <td class="p-3.5 sm:p-4 font-bold text-[#1A9900] text-sm sm:text-base">1.200.000 – 1.500.000 đ</td>
            </tr>
            <tr class="hover:bg-gray-50 transition">
              <td class="p-3.5 sm:p-4 font-bold text-gray-900">3. Gói Công Suất Lớn</td>
              <td class="p-3.5 sm:p-4">Toshiba 4518A / Ricoh MP 5055</td>
              <td class="p-3.5 sm:p-4">45 – 50 trang/phút, Nạp đảo bản gốc tự động kép SPDF</td>
              <td class="p-3.5 sm:p-4">8.000 – 10.000 bản</td>
              <td class="p-3.5 sm:p-4 font-bold text-[#1A9900] text-sm sm:text-base">1.800.000 – 2.200.000 đ</td>
            </tr>
            <tr class="hover:bg-gray-50 transition">
              <td class="p-3.5 sm:p-4 font-bold text-gray-900">4. Gói Màu Đồ Họa Cao Cấp</td>
              <td class="p-3.5 sm:p-4">Toshiba 2500AC / Ricoh MPC 3504</td>
              <td class="p-3.5 sm:p-4">In/Scan Màu A3, Độ phân giải 1200 DPI chuẩn nét</td>
              <td class="p-3.5 sm:p-4">1.000 màu + 4.000 đen</td>
              <td class="p-3.5 sm:p-4 font-bold text-[#1A9900] text-sm sm:text-base">2.200.000 – 2.800.000 đ</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p class="text-xs text-gray-500 italic text-center mt-2">
        * Đơn giá trên đã bao gồm toàn bộ mực in, vật tư tiêu hao, chi phí vận chuyển lắp đặt và bảo trì định kỳ. Phí vượt định mức siêu rẻ chỉ từ 80đ - 100đ/trang A4.
      </p>
    </div>
  </section>
"""

    # 4. 4 Core Advantages
    body += f"""
  <section class="py-16 bg-[#f5f8fb] border-b border-gray-200">
    <div class="{WRAP}">
      <div class="max-w-3xl mb-12">
        <span class="text-[{BRAND}] font-bold text-xs uppercase tracking-[0.2em] block mb-2">Đặc Quyền Vượt Trội</span>
        <h2 class="text-2xl sm:text-3xl font-bold text-[#181923]">Tại Sao Khách Hàng Chọn Thuê Máy Tại Hương Sơn?</h2>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-xs hover:border-[#1A9900] transition">
          <div class="w-12 h-12 bg-emerald-50 text-[{BRAND}] rounded flex items-center justify-center text-xl mb-4 font-bold">
            <i class="fa-solid fa-coins"></i>
          </div>
          <h3 class="text-base font-bold text-[#181923] mb-2">0đ Tiền Cọc Máy</h3>
          <p class="text-xs text-gray-600 leading-relaxed">
            Không cần đặt cọc, không cần vốn đầu tư lớn ban đầu. Tối ưu hóa 100% dòng tiền lưu động cho doanh nghiệp.
          </p>
        </div>

        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-xs hover:border-[#1A9900] transition">
          <div class="w-12 h-12 bg-emerald-50 text-[{BRAND}] rounded flex items-center justify-center text-xl mb-4 font-bold">
            <i class="fa-solid fa-box-open"></i>
          </div>
          <h3 class="text-base font-bold text-[#181923] mb-2">100% Máy Mới Chính Hãng</h3>
          <p class="text-xs text-gray-600 leading-relaxed">
            Cam kết máy đời mới hoạt động ổn định, độ phân giải cao, đầy đủ chứng nhận CO/CQ từ Toshiba, Ricoh, Duplo.
          </p>
        </div>

        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-xs hover:border-[#1A9900] transition">
          <div class="w-12 h-12 bg-emerald-50 text-[{BRAND}] rounded flex items-center justify-center text-xl mb-4 font-bold">
            <i class="fa-solid fa-stopwatch"></i>
          </div>
          <h3 class="text-base font-bold text-[#181923] mb-2">Cứu Hộ Kỹ Thuật ≤ 2H</h3>
          <p class="text-xs text-gray-600 leading-relaxed">
            Kỹ sư có mặt tận nơi xử lý sự cố trong vòng 2 giờ. Nếu hỏng hóc kéo dài quá 24h, đổi ngay máy mới tương đương.
          </p>
        </div>

        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-xs hover:border-[#1A9900] transition">
          <div class="w-12 h-12 bg-emerald-50 text-[{BRAND}] rounded flex items-center justify-center text-xl mb-4 font-bold">
            <i class="fa-solid fa-handshake"></i>
          </div>
          <h3 class="text-base font-bold text-[#181923] mb-2">Dùng Thử Miễn Phí 07 Ngày</h3>
          <p class="text-xs text-gray-600 leading-relaxed">
            Trải nghiệm chất lượng máy và tốc độ phục vụ thực tế tại văn phòng trong 07 ngày trước khi quyết định ký hợp đồng.
          </p>
        </div>
      </div>
    </div>
  </section>
"""

    # 5. Visual Proof & Equipment Showcase
    body += C.visual_proof_showcase(title="Năng Lực Thiết Bị Kho Bãi & Bằng Chứng Triển Khai Thực Tế", bg="white")

    # 6. GEO Local Authority Card
    body += f"""
  <section class="py-10 bg-[#f8fafc] border-y border-gray-200">
    <div class="{WRAP}">
      <div class="p-6 bg-white border-l-4 border-[{BRAND}] shadow-xs rounded-r-lg">
        <div class="flex items-center gap-2.5 text-[{BRAND}] font-bold text-sm uppercase tracking-wider mb-2">
          <i class="fa-solid fa-location-dot text-base"></i>
          <span>Công Ty TNHH Thương Mại & Dịch Vụ Hương Sơn – Đại Lý Ủy Quyền & Kho Máy Miền Bắc</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs text-gray-700 pt-2">
          <div>
            <p class="mb-1.5"><strong>Trụ sở chính & Showroom:</strong> 28 Nguyễn Phong Sắc, P. Dịch Vọng Hậu, Q. Cầu Giấy, TP. Hà Nội</p>
            <p class="mb-1.5"><strong>Trung tâm kỹ thuật & Kho thiết bị:</strong> Số 12 Ngõ 19 Trần Quang Diệu, P. Ô Chợ Dừa, Q. Đống Đa, TP. Hà Nội</p>
          </div>
          <div>
            <p class="mb-1.5"><strong>Hotline tư vấn & Cứu hộ SLA 2h:</strong> <a href="tel:0913222003" class="text-[{BRAND}] font-bold text-sm hover:underline">0913.222.003</a> (Zalo / Call 24/7)</p>
            <p class="mb-1.5"><strong>Địa bàn phục vụ thần tốc 2H:</strong> 30 quận huyện Hà Nội, các KCN Bắc Ninh, Hưng Yên, Vĩnh Phúc, Thái Nguyên, Hải Phòng và các Sở GD&ĐT miền Bắc.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
"""

    # 7. FAQ Semantic Accordion
    faq_items = "".join(f"""
      <details class="group bg-gray-50 border border-gray-200 rounded-lg p-5 transition duration-200 open:bg-white open:shadow-xs">
        <summary class="font-bold text-[15.5px] sm:text-[16.5px] text-[#10203C] cursor-pointer flex items-center justify-between gap-4 list-none group-hover:text-[{BRAND}]">
          <span>{esc(q)}</span>
          <span class="w-6 h-6 rounded-full bg-white border border-gray-200 flex items-center justify-center flex-shrink-0 group-open:rotate-180 transition-transform">
            <i class="fa-solid fa-chevron-down text-xs text-gray-500"></i>
          </span>
        </summary>
        <div class="mt-4 pt-3 border-t border-gray-100 text-[14.5px] text-gray-700 leading-relaxed">
          {esc(a)}
        </div>
      </details>""" for q, a in p["faqs"])

    body += f"""
  <section class="py-16 bg-white border-b border-gray-200">
    <div class="{WRAP}">
      <div class="max-w-3xl mx-auto">
        <div class="text-center mb-10">
          <span class="text-[{BRAND}] font-bold text-xs uppercase tracking-[0.2em] block mb-2">Hỏi Đáp Chuyên Sâu</span>
          <h2 class="text-2xl sm:text-3xl font-bold text-[#181923]">Câu Hỏi Thường Gặp Về Dịch Vụ Thuê Máy</h2>
        </div>
        <div class="space-y-4">
          {faq_items}
        </div>
      </div>
    </div>
  </section>
"""

    # 8. Lead Quote Form
    body += f"""
  <section id="bao-gia-nhanh" class="py-16 bg-[#f5f8fb]">
    <div class="{WRAP}">
      <div class="max-w-2xl mx-auto bg-white p-8 sm:p-10 border border-gray-200 shadow-md rounded-lg">
        <div class="text-center mb-6">
          <span class="text-[{BRAND}] font-bold text-xs uppercase tracking-wider block mb-1">Đăng Ký Khảo Sát & Báo Giá</span>
          <h2 class="text-xl sm:text-2xl font-bold text-[#181923]">Nhận Báo Giá Thuê Máy Trong 15 Phút</h2>
          <p class="text-xs text-gray-500 mt-1">Miễn phí khảo sát hiện trạng và dùng thử máy 07 ngày tại văn phòng</p>
        </div>
        {forms.lead_form(form_id="rental-" + p["slug"], page_type="rental", title="Yêu cầu báo giá thuê máy", compact=True)}
      </div>
    </div>
  </section>
"""

    # Schema JSON-LD
    schema_service = {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": p["title"],
        "name": p["h1"],
        "description": p["seo_desc"],
        "provider": {
            "@type": "LocalBusiness",
            "name": "Công Ty TNHH Thương Mại & Dịch Vụ Hương Sơn",
            "image": "https://huongsonco.com.vn/assets/images/brand/HUONG_SON_logo.svg",
            "telephone": "0913222003",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "28 Nguyễn Phong Sắc, P. Dịch Vọng Hậu, Q. Cầu Giấy",
                "addressLocality": "Hà Nội",
                "addressCountry": "VN"
            },
            "priceRange": "$$"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Hà Nội, Miền Bắc"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Bảng Giá Cho Thuê Máy Photocopy 2026",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Gói Khởi Nghiệp (Toshiba 2329A)"
                    },
                    "price": "800000",
                    "priceCurrency": "VND"
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Gói Văn Phòng Chuẩn (Ricoh MP 3055)"
                    },
                    "price": "1200000",
                    "priceCurrency": "VND"
                }
            ]
        }
    }

    schema_faq = {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": q,
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": a
                }
            } for q, a in p["faqs"]
        ]
    }

    ld = [schema.organization(), schema.breadcrumb(trail), schema_service, schema_faq]

    return render.page(
        title=p["seo_title"],
        description=p["seo_desc"],
        url=p["url"],
        keywords=p["keywords"],
        body=body,
        jsonld=ld,
        active="/dich-vu/"
    )


def build(write):
    for p in RENTAL_PAGES:
        write(p["url"], render_rental_landing(p))
    print(f"  rental: {len(RENTAL_PAGES)} landing pages")
