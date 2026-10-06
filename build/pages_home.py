# -*- coding: utf-8 -*-
"""TRANG CHỦ — map các section giao diện mẫu 8324 sang nội dung khách hàng của
Hương Sơn (xem KE-HOACH §7). Chỉ trình bày nội dung phục vụ khách hàng — không
đưa mô hình vận hành/kênh bán hàng nội bộ lên trang công khai.
Giữ nguyên ngôn ngữ thiết kế: xanh lá #1A9900 + đen than #181924, phong cách
vuông vức/flat.
"""
import render
import schema
import components as C
import forms
from render import SITE, BRAND, DARK
from components import esc, WRAP, BEIGE

PRODUCTS = render.load("products.json")
SOLUTIONS = render.load("solutions.json")
PROJECTS = render.load("projects.json")


# ---------------------------------------------------------------- S1: Hero (Customer Problem Gateway)
def _hero():
    gateways = [
        {
            "num": "①",
            "code": "CỬA 01",
            "title": "Tôi cần THUÊ MÁY",
            "desc": "Máy photocopy & máy in mới 100%, giá từ 800k/tháng, 0đ tiền cọc, miễn phí mực & linh kiện.",
            "url": "/thue-may-photocopy-ha-noi/",
            "icon": "fa-solid fa-copy",
            "badge": "0đ cọc • Từ 800k"
        },
        {
            "num": "②",
            "code": "CỬA 02",
            "title": "Tôi cần IN ĐỀ THI / IN SỐ LƯỢNG LỚN",
            "desc": "Máy in siêu tốc Duplo ép lạnh 130–180 ppm, bảo mật cách ly 3 vòng, dự phòng N+1.",
            "url": "/giai-phap/giao-duc/in-de-thi/",
            "icon": "fa-solid fa-print",
            "badge": "Duplo 180 ppm • N+1"
        },
        {
            "num": "③",
            "code": "CỬA 03",
            "title": "Tôi cần SỐ HÓA TÀI LIỆU",
            "desc": "Scan ADF & Flatbed tốc độ cao, OCR tiếng Việt ≥ 98%, lưu trữ PDF/A chuẩn TT 02 & học bạ MOET.",
            "url": "/giai-phap/scan-so-hoa/",
            "icon": "fa-solid fa-file-arrow-up",
            "badge": "OCR ≥ 98% • PDF/A"
        },
        {
            "num": "④",
            "code": "CỬA 04",
            "title": "Tôi cần THIẾT BỊ CHO CƠ QUAN / TRƯỜNG HỌC / DOANH NGHIỆP",
            "desc": "Máy photocopy đa năng, máy in laser, màn hình tương tác ViewSonic đầy đủ chứng chỉ CO/CQ.",
            "url": "/san-pham/",
            "icon": "fa-solid fa-building-columns",
            "badge": "Đầy đủ CO/CQ • Dự thầu"
        },
        {
            "num": "⑤",
            "code": "CỬA 05",
            "title": "Tôi cần BẢO TRÌ / VẬN HÀNH / QUẢN LÝ THIẾT BỊ",
            "desc": "Bảo dưỡng định kỳ, cứu hộ kỹ thuật SLA ≤ 2h, quản lý sản lượng in ấn MPS trọn gói vật tư.",
            "url": "/dich-vu/bao-tri-sua-chua/",
            "icon": "fa-solid fa-screwdriver-wrench",
            "badge": "SLA ≤ 2h • Đổi máy 24h"
        },
    ]

    cards_html = "".join(f"""
        <a href="{g['url']}" data-ga="gateway_click" class="bg-[#1e202e] hover:bg-[{BRAND}] border border-gray-700/80 hover:border-white/40 p-5 text-white transition-all duration-300 group flex flex-col justify-between shadow-lg relative overflow-hidden">
          <div class="absolute top-0 right-0 w-14 h-14 bg-white/5 rounded-bl-full pointer-events-none group-hover:scale-110 transition-transform"></div>
          <div>
            <div class="flex items-center justify-between mb-3.5">
              <span class="w-8 h-8 rounded-full bg-white/10 group-hover:bg-white text-white group-hover:text-[{DARK}] text-sm font-bold flex items-center justify-center transition-colors">
                {g['num']}
              </span>
              <span class="text-[10.5px] font-bold uppercase tracking-wider text-gray-400 group-hover:text-white/80 transition-colors">
                {g['code']}
              </span>
            </div>
            <div class="w-10 h-10 bg-white/10 group-hover:bg-white/20 flex items-center justify-center mb-3 text-white transition-colors">
              <i class="{g['icon']} text-lg"></i>
            </div>
            <h3 class="text-[14.5px] font-bold text-white mb-2 leading-snug group-hover:text-white transition-colors">
              {esc(g['title'])}
            </h3>
            <p class="text-gray-300 group-hover:text-white/90 text-[12px] leading-relaxed mb-4">
              {esc(g['desc'])}
            </p>
          </div>
          <div class="pt-3 border-t border-gray-700/60 group-hover:border-white/20 flex items-center justify-between text-xs font-bold text-[#5eb74c] group-hover:text-white transition-colors">
            <span class="text-[11px] truncate mr-1">{g['badge']}</span>
            <i class="fa-solid fa-arrow-right text-[11px] group-hover:translate-x-1 transition-transform flex-shrink-0"></i>
          </div>
        </a>""" for g in gateways)

    return f"""
  <section class="relative bg-[{DARK}] pt-14 pb-14 lg:pt-18 lg:pb-18 overflow-hidden">
    <div class="absolute inset-0 z-0">
      <img src="/assets/images/products/duplo-dp-x550.jpg" alt="Hương Sơn" class="w-full h-full object-cover object-center opacity-25" />
      <div class="absolute inset-0 bg-gradient-to-b from-[{DARK}]/90 via-[{DARK}]/95 to-[{DARK}]"></div>
    </div>
    <div class="relative z-10 {WRAP} w-full">
      <!-- TIÊU ĐỀ: ĐẶT BÀI TOÁN KHÁCH HÀNG LÊN HÀNG ĐẦU -->
      <div class="max-w-4xl text-center mx-auto mb-10 sm:mb-12">
        <span class="inline-flex items-center gap-2 bg-[#5eb74c]/15 text-[#5eb74c] text-xs font-bold uppercase tracking-[0.2em] px-4 py-1.5 mb-4 border border-[#5eb74c]/30">
          <i class="fa-solid fa-circle-question"></i> Tư vấn đúng bài toán thực tế
        </span>
        <h1 class="text-3xl sm:text-4xl lg:text-[46px] font-bold text-white leading-tight mb-4">
          Anh/Chị Đang Cần Giải Quyết Bài Toán Gì?
        </h1>
        <p class="text-gray-300 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
          Hãy chọn 1 trong 5 cửa vào chuyên biệt dưới đây để Hương Sơn phân công đúng chuyên gia và gửi phương án chính xác nhất:
        </p>
      </div>

      <!-- 5 CỬA VÀO RẤT RÕ -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 lg:gap-3.5 mb-10">
        {cards_html}
      </div>

      <!-- RỒI PHÍA DƯỚI MỚI: HƯƠNG SƠN — TỪ THIẾT BỊ ĐẾN GIẢI PHÁP VẬN HÀNH TÀI LIỆU -->
      <div class="pt-7 border-t border-gray-800/80 flex flex-col md:flex-row items-center justify-between gap-6 bg-white/[0.02] p-6 sm:p-7 border border-white/5">
        <div class="text-center md:text-left">
          <span class="font-handwriting text-2xl text-[#5eb74c] font-bold block mb-1">Hương Sơn từ 2008</span>
          <h2 class="text-base sm:text-lg lg:text-xl font-bold text-white tracking-wide">
            Hương Sơn — từ thiết bị đến giải pháp vận hành tài liệu.
          </h2>
          <p class="text-xs text-gray-400 mt-1 max-w-2xl leading-relaxed">
            Đại lý ủy quyền Duplo, Toshiba, Konica Minolta tại miền Bắc • Kinh nghiệm 127 máy Vietcombank, in sao đề thi Sở GD&amp;ĐT Vĩnh Phúc, Quảng Trị • SLA cứu hộ ≤ 2 giờ.
          </p>
        </div>
        <div class="flex flex-wrap items-center justify-center md:justify-end gap-3 flex-shrink-0">
          <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[{BRAND}] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-6 py-3.5 transition shadow-sm">
            Yêu cầu báo giá
          </a>
          <a href="tel:0911138583" class="border border-gray-600 hover:border-white text-white font-bold text-xs uppercase tracking-wider px-6 py-3.5 transition flex items-center gap-2">
            <i class="fa-solid fa-phone text-[#5eb74c]"></i> 091.113.8583
          </a>
        </div>
      </div>
    </div>
  </section>"""


# --------------------------------------------------------- S3: Thương hiệu
def _brands():
    badges = "".join(
        f'<span class="text-sm md:text-base font-extrabold tracking-wider text-gray-400 hover:text-[{DARK}] transition">{esc(b)}</span>'
        for b in SITE["brands"])
    return f"""
  <section class="py-8 bg-white border-b border-gray-200">
    <div class="{WRAP}"><div class="flex flex-wrap items-center justify-center md:justify-between gap-8">{badges}</div></div>
  </section>"""


# ----------------------------------------------- S3B: 3 Nhóm Khách Hàng Chiến Lược
def _strategic_customer_segments():
    segments = [
        {
            "badge": "Khối Cơ Quan Nhà Nước & Sở GD&ĐT",
            "icon": "fa-solid fa-landmark",
            "title": "Bảo Mật Cấp Độ Cao & Dự Phòng N+1 Cho Đợt Thi",
            "desc": "Thiết kế riêng cho các cơ quan hành chính công, Sở GD&ĐT và Hội đồng in sao đề thi: Đáp ứng nghiêm ngặt quy chế cách ly 3 vòng, vận hành offline 100%, bảo mật tuyệt đối, đầy đủ chứng chỉ hợp quy CO/CQ và hóa đơn tài chính chuẩn kho bạc Nhà nước.",
            "points": [
                "Quy trình cách ly 3 vòng tuyệt đối, vận hành offline 100% bảo mật đề thi.",
                "Hồ sơ pháp lý, hóa đơn VAT, chứng chỉ xuất xứ CO/CQ đầy đủ chuẩn kho bạc.",
                "Phương án máy dự phòng nóng N+1 và kỹ sư thường trực tại chỗ trong kỳ thi.",
                "Đã triển khai thực tế cho Sở GD&ĐT Vĩnh Phúc và Sở GD&ĐT Quảng Trị."
            ],
            "links": [
                ("Thuê máy Sở GD&ĐT", "/thue-may-photocopy-so-gd/"),
                ("Giải pháp in đề thi", "/giai-phap/giao-duc/in-de-thi/"),
            ]
        },
        {
            "badge": "Khối Doanh Nghiệp & Ngân Hàng",
            "icon": "fa-solid fa-building-columns",
            "title": "Tối Ưu Chi Phí TCO & Bảo Mật Dữ Liệu In Ấn Doanh Nghiệp",
            "desc": "Giải pháp Managed Print Services (MPS) toàn diện cho doanh nghiệp và hệ thống ngân hàng thương mại: Tiết kiệm 30–40% chi phí vận hành, bảo mật in ấn quẹt thẻ RFID/PIN, xóa sạch dữ liệu ổ cứng theo tiêu chuẩn quốc tế DoD 5220.22-M.",
            "points": [
                "0đ chi phí đầu tư ban đầu, 0đ tiền cọc thiết bị, bảo dưỡng định kỳ trọn gói.",
                "Bảo mật tài liệu với pull-printing mã PIN/RFID, chuẩn xóa dữ liệu ổ cứng an toàn.",
                "Cam kết dịch vụ SLA P1 có mặt tận nơi xử lý sự cố trong vòng 2 giờ.",
                "Năng lực đã chứng minh qua hợp đồng 127 máy photocopy Toshiba cho Vietcombank."
            ],
            "links": [
                ("Thuê máy ngân hàng", "/thue-may-photocopy-ngan-hang/"),
                ("Bảng giá thuê Hà Nội", "/thue-may-photocopy-ha-noi/"),
            ]
        },
        {
            "badge": "Khối Trường Học & Cơ Sở Giáo Dục",
            "icon": "fa-solid fa-graduation-cap",
            "title": "Hợp Đồng Theo Niên Khóa & Hệ Thống Số Hóa Học Bạ",
            "desc": "Đồng hành cùng các trường Đại học, Cao đẳng, THPT và THCS với chính sách thuê máy linh hoạt 9 tháng học kỳ, miễn phí hoàn toàn cước thuê 3 tháng hè và hỗ trợ số hóa toàn diện học bạ điện tử chuẩn Bộ Giáo dục & Đào tạo.",
            "points": [
                "Chính sách độc quyền: Miễn phí tiền thuê trong 3 tháng nghỉ hè (tháng 6, 7, 8).",
                "Máy photocopy công suất lớn 35–55 ppm đáp ứng in đề kiểm tra và giáo án tập trung.",
                "Số hóa học bạ điện tử chuẩn Thông tư 26/2020 & 22/2021/TT-BGDĐT bằng máy scan Ricoh.",
                "Cung cấp thiết bị phòng học thông minh (màn hình tương tác ViewSonic, camera vật thể)."
            ],
            "links": [
                ("Thuê máy trường học", "/thue-may-photocopy-truong-hoc/"),
                ("Education Hub 6 trụ cột", "/giai-phap/giao-duc/"),
            ]
        }
    ]

    cards = []
    for s in segments:
        pt_html = "".join(f'<li class="flex items-start gap-2.5 text-[13px] text-gray-700"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span>{esc(p)}</span></li>' for p in s["points"])
        link_html = "".join(f'<a href="{u}" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#181923] hover:text-[{BRAND}] border-b border-gray-300 hover:border-[{BRAND}] pb-0.5 transition"><span>{esc(t)}</span><i class="fa-solid fa-arrow-right text-[10px]"></i></a>' for t, u in s["links"])
        cards.append(f"""
        <div class="bg-white border border-gray-200 hover:border-[{BRAND}] p-7 flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="w-12 h-12 bg-[{DARK}] text-white group-hover:bg-[{BRAND}] transition-colors flex items-center justify-center mb-5">
              <i class="{s['icon']} text-xl"></i>
            </div>
            <span class="text-[11px] font-bold text-[{BRAND}] uppercase tracking-[0.18em] block mb-1.5">{esc(s['badge'])}</span>
            <h3 class="text-xl font-bold text-[#181923] leading-snug mb-3">{esc(s['title'])}</h3>
            <p class="text-[13.5px] text-gray-600 leading-relaxed mb-5">{esc(s['desc'])}</p>
            <ul class="space-y-2.5 mb-6 pb-6 border-b border-gray-100">{pt_html}</ul>
          </div>
          <div class="flex flex-wrap items-center gap-4 pt-2">{link_html}</div>
        </div>""")

    return C.section(
        C.heading(
            eyebrow="Khách hàng chiến lược",
            title="Giải Pháp May Đo Riêng Cho 3 Nhóm Khách Hàng Trọng Tâm"
        )
        + '<p class="text-center text-gray-600 text-sm sm:text-base max-w-3xl mx-auto -mt-6 mb-12 leading-relaxed">Hương Sơn không áp dụng chung một khuôn mẫu cho mọi đơn vị. Mỗi nhóm khách hàng có bài toán đặc thù về an toàn dữ liệu, tính pháp lý, cơ chế ngân sách và yêu cầu kỹ thuật riêng biệt:</p>'
        + f'<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">{ "".join(cards) }</div>',
        bg="light", pad="py-16"
    )


# ----------------------------------------------- S3C: Education Hub 6 Trụ Cột
def _education_vertical_showcase():
    pillars = [
        ("fa-solid fa-print", "Trụ cột 1", "In Sao Đề Thi Siêu Tốc", "Máy in Duplo ép lạnh 130–180 ppm không tĩnh điện, cách ly 3 vòng tuyệt đối theo quy chế thi.", "/giai-phap/giao-duc/in-de-thi/"),
        ("fa-solid fa-stopwatch", "Trụ cột 2", "Thuê Máy Kỳ Thi Tuyển Sinh", "Gói thuê ngắn hạn 7–15 ngày, bao trọn Master/mực, kỹ sư trực hiện trường và máy dự phòng N+1.", "/giai-phap/giao-duc/thue-may-phuc-vu-ky-thi/"),
        ("fa-solid fa-copy", "Trụ cột 3", "Thuê Máy Photocopy Trường Học", "Hợp đồng 9 tháng theo năm học (miễn cước 3 tháng hè), bao trọn mực in đề kiểm tra và giáo án.", "/thue-may-photocopy-truong-hoc/"),
        ("fa-solid fa-graduation-cap", "Trụ cột 4", "Số Hóa Học Bạ Điện Tử", "Scan ADF tốc độ cao Ricoh fi-series, OCR bóc tách dữ liệu chuẩn Bộ GD&ĐT đẩy lên CSDL ngành.", "/giai-phap/giao-duc/so-hoa-hoc-ba/"),
        ("fa-solid fa-file-arrow-up", "Trụ cột 5", "Scan Hồ Sơ Giáo Dục", "Số hóa hồ sơ cán bộ, giáo viên, đề án nghiên cứu khoa học chuẩn Thông tư 02/2019/TT-BNV.", "/giai-phap/giao-duc/so-hoa-ho-so-truong-hoc/"),
        ("fa-solid fa-chalkboard-user", "Trụ cột 6", "Thiết Bị Phòng Học", "Màn hình tương tác ViewSonic 65–86 inch, camera vật thể AVer và hệ thống âm thanh giảng dạy.", "/giai-phap/giao-duc/thiet-bi-phong-hoc/"),
    ]
    cards = "".join(f"""
        <a href="{u}" class="bg-white border border-gray-200 hover:border-[{BRAND}] p-6 flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="flex items-center justify-between mb-4">
              <div class="w-10 h-10 bg-[{DARK}] text-white group-hover:bg-[{BRAND}] transition-colors flex items-center justify-center">
                <i class="{icon} text-base"></i>
              </div>
              <span class="text-[11px] font-bold text-gray-400 group-hover:text-[{BRAND}] uppercase tracking-wider transition">{tag}</span>
            </div>
            <h3 class="text-base font-bold text-[#181923] group-hover:text-[{BRAND}] transition mb-2">{esc(t)}</h3>
            <p class="text-[13px] text-gray-500 leading-relaxed mb-4">{esc(d)}</p>
          </div>
          <span class="inline-flex items-center gap-1.5 text-xs font-bold text-[{BRAND}] group-hover:translate-x-1 transition-transform">
            <span>Chi tiết giải pháp</span><i class="fa-solid fa-arrow-right text-[10px]"></i>
          </span>
        </a>""" for icon, tag, t, d, u in pillars)

    return C.section(
        '<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12">'
        '<div>'
        f'<span class="text-[{BRAND}] font-bold text-xs uppercase tracking-[0.2em] block mb-1.5">Hương Sơn Education Hub</span>'
        '<h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#181923] leading-tight">Cụm Giải Pháp Giáo Dục Toàn Diện 6 Trụ Cột</h2>'
        '</div>'
        f'<a href="/giai-phap/giao-duc/" class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[{BRAND}] hover:text-[#147700] transition border border-[{BRAND}]/40 hover:border-[{BRAND}] px-5 py-2.5">'
        '<span>Xem trung tâm giải pháp giáo dục</span><i class="fa-solid fa-arrow-right text-[10px]"></i></a>'
        '</div>'
        + f'<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">{cards}</div>',
        pad="py-16"
    )


# ----------------------------------------------- S3D: Cho Thuê Thiết Bị (Rental SEO)
def _rental_seo_hub():
    rental_items = [
        ("fa-solid fa-location-dot", "Hà Nội Trọng Điểm", "Cho Thuê Máy Photocopy Tại Hà Nội", "Từ 800.000 đ/tháng", "Toshiba & Ricoh mới 100%, 0đ tiền cọc, bao trọn mực in và linh kiện, giao lắp trong 2h tại 30 quận huyện.", "/thue-may-photocopy-ha-noi/"),
        ("fa-solid fa-print", "Văn Phòng & Doanh Nghiệp", "Cho Thuê Máy In Văn Phòng Trọn Gói", "Từ 500.000 đ/tháng", "Máy in laser đa chức năng HP, Toshiba A3/A4. Không lo hết mực, bố trí phân tán theo phòng ban.", "/thue-may-in/"),
        ("fa-solid fa-school", "Trường Học K-12 & ĐH", "Cho Thuê Máy Photocopy Cho Trường Học", "Hợp đồng 9 tháng niên khóa", "Miễn phí 3 tháng hè, bao trọn gói mực in làm đề kiểm tra, công suất lớn 35–55 bản/phút chống kẹt giấy.", "/thue-may-photocopy-truong-hoc/"),
        ("fa-solid fa-landmark", "Cơ Quan Nhà Nước & B2G", "Cho Thuê Máy Photocopy Cho Sở GD&ĐT", "Chuẩn B2G & Kho Bạc", "Đầy đủ CO/CQ, hóa đơn tài chính VAT, năng lực dự thầu, phương án dự phòng N+1 không rủi ro.", "/thue-may-photocopy-so-gd/"),
        ("fa-solid fa-file-circle-check", "Hội Đồng In Sao Đề", "Cho Thuê Máy In Sao Đề Thi Siêu Tốc", "Gói ngắn hạn 7–15 ngày", "Máy in Duplo ép lạnh chống cong giấy, cam kết kỹ thuật viên cách ly cùng hội đồng in sao 24/7.", "/thue-may-in-de-thi/"),
        ("fa-solid fa-building-columns", "Ngân Hàng & Tập Đoàn", "Cho Thuê Máy Photocopy Cho Ngân Hàng", "Bảo mật RFID & DoD", "In ấn quẹt thẻ nhân viên RFID, chuẩn an ninh xóa dữ liệu ổ cứng, kinh nghiệm 127 máy cho Vietcombank.", "/thue-may-photocopy-ngan-hang/"),
    ]
    cards = "".join(f"""
        <a href="{u}" class="bg-[#fbfbfb] hover:bg-white border border-gray-200 hover:border-[{BRAND}] p-6 flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="flex items-center justify-between mb-3">
              <span class="text-[11px] font-bold text-[{BRAND}] uppercase tracking-wider">{esc(cat)}</span>
              <span class="text-[11px] font-bold text-gray-700 bg-gray-100 px-2.5 py-1">{esc(price)}</span>
            </div>
            <h3 class="text-base font-bold text-[#181923] group-hover:text-[{BRAND}] transition mb-2 leading-snug">{esc(t)}</h3>
            <p class="text-[13px] text-gray-500 leading-relaxed mb-4">{esc(d)}</p>
          </div>
          <div class="pt-3 border-t border-gray-100 flex items-center justify-between text-xs font-bold text-[{BRAND}]">
            <span>Xem bảng giá &amp; ưu đãi</span>
            <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
          </div>
        </a>""" for icon, cat, t, price, d, u in rental_items)

    return C.section(
        '<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12">'
        '<div>'
        f'<span class="text-[{BRAND}] font-bold text-xs uppercase tracking-[0.2em] block mb-1.5">Dịch vụ cho thuê thiết bị</span>'
        '<h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#181923] leading-tight">6 Gói Thuê Thiết Bị Chuyên Sâu Tối Ưu TCO Cho Đơn Vị</h2>'
        '</div>'
        '<span class="inline-flex items-center gap-1.5 text-xs font-bold text-[#1A9900] bg-[#1A9900]/10 px-3.5 py-2">'
        '<i class="fa-solid fa-shield-check"></i> Cam kết SLA ≤ 2h • 0đ Tiền Cọc</span>'
        '</div>'
        + f'<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">{cards}</div>',
        bg="light", pad="py-16"
    )


# ------------------------------------------------------- S4: Why choose us
def _why():
    items = [
        ("fa-solid fa-layer-group", "Đa thương hiệu", "Đại lý ủy quyền Duplo, Toshiba tại miền Bắc từ 2017; đại lý Konica Minolta từ 2021 — chọn đúng thiết bị, không bó buộc một hãng."),
        ("fa-solid fa-headset", "Dịch vụ đi cùng thiết bị", "Bảo trì, kỹ thuật trực, máy dự phòng và cam kết thời gian xử lý theo cấp độ sự cố."),
        ("fa-solid fa-graduation-cap", "Chuyên sâu Giáo dục", "Kinh nghiệm thực tế in sao đề thi cho Sở GD&ĐT Vĩnh Phúc và Quảng Trị, có hồ sơ hợp đồng đầy đủ."),
        ("fa-solid fa-truck-fast", "Cho thuê & Managed Print", "Từ thuê máy theo đợt đến quản lý trọn gói đội thiết bị, tính theo sản lượng và SLA."),
        ("fa-solid fa-boxes-stacked", "Hệ sinh thái vật tư Fansipan", "Thương hiệu vật tư tương thích do Hương Sơn phát triển từ 2008 — cung cấp mực in Toner chất lượng cao, cartridge, trống drum cho đại lý và đối tác kỹ thuật toàn miền Bắc."),
    ]
    rows = "".join(f"""
        <div class="flex items-start space-x-4">
          <div class="w-10 h-10 bg-[{BRAND}] text-white flex items-center justify-center flex-shrink-0 mt-1"><i class="{icon} text-base"></i></div>
          <div><h3 class="text-base font-bold text-[#181923] mb-1">{esc(t)}</h3><p class="text-sm text-gray-500 leading-relaxed">{esc(d)}</p></div>
        </div>""" for icon, t, d in items)
    return f"""
  <section class="py-16 bg-white">
    <div class="{WRAP}">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        <div class="lg:col-span-5">
          <span class="font-handwriting text-3xl text-[#5eb74c] font-bold block mb-2">Vì sao chọn Hương Sơn?</span>
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#181923] mb-6 leading-tight">Từ máy đến giải pháp vận hành</h2>
          <p class="text-gray-600 text-sm sm:text-base mb-2 leading-relaxed">
            Hương Sơn không chỉ bán một chiếc máy — Hương Sơn cung cấp năng lực xử lý tài liệu trọn vòng đời: thiết bị, cho thuê, vật tư, kỹ thuật và số hóa.
          </p>
        </div>
        <div class="lg:col-span-7 space-y-6">{rows}</div>
      </div>
    </div>
  </section>"""


# ---------------------------------------------------------------- S5: Counters
def _counters():
    items = [
        ("2008", "Năm thành lập"),
        ("2017", "Đại lý ủy quyền Duplo & Toshiba miền Bắc"),
        ("127", "Máy Toshiba cung cấp cho Vietcombank (2024)"),
        ("3", "Cấp độ SLA cam kết thời gian xử lý (P1/P2/P3)"),
    ]
    cols = []
    for i, (v, l) in enumerate(items):
        if i == 1 or i == 3:
            border_cls = "border-l border-gray-800"
        elif i == 2:
            border_cls = "border-l-0 md:border-l border-gray-800"
        else:
            border_cls = ""
        cols.append(f"""
        <div class="flex flex-col items-center justify-center px-4 sm:px-6 lg:px-8 py-3 {border_cls}">
          <div class="text-4xl sm:text-5xl font-bold text-[{BRAND}] mb-2 tracking-tight">{esc(v)}</div>
          <h4 class="text-[13px] sm:text-[13.5px] font-bold text-gray-200 uppercase tracking-wide leading-relaxed max-w-[220px] mx-auto">{esc(l)}</h4>
        </div>""")
    cols_html = "".join(cols)
    return f"""
  <section class="py-14 bg-[{DARK}] text-white border-y border-gray-800/60">
    <div class="{WRAP}"><div class="grid grid-cols-2 md:grid-cols-4 gap-y-8 gap-x-2 sm:gap-x-4 text-center">{cols_html}</div></div>
  </section>

  <!-- AUTHORIZED BRANDS LOGOS STRIP -->
  <section class="py-8 bg-white border-b border-gray-200/80">
    <div class="{WRAP}">
      <div class="flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="flex-shrink-0 text-center md:text-left">
          <span class="text-[11px] font-bold uppercase tracking-[0.2em] text-[{BRAND}] block mb-0.5">Đối tác chiến lược</span>
          <h3 class="text-[15px] font-bold text-[#181923]">Thương hiệu phân phối ủy quyền</h3>
        </div>
        <div class="grid grid-cols-3 sm:grid-cols-4 md:flex items-center justify-center md:justify-end gap-6 sm:gap-8 lg:gap-10 w-full md:w-auto">
          <a href="/san-pham/may-in-nhan-ban-toc-do-cao/" title="DUPLO - Máy in nhân bản siêu tốc" class="opacity-80 hover:opacity-100 transition grayscale hover:grayscale-0 flex items-center justify-center">
            <img src="/assets/images/brands/duplo.svg" alt="DUPLO" class="h-8 max-w-[110px] object-contain" />
          </a>
          <a href="/san-pham/photocopy-may-da-chuc-nang/" title="TOSHIBA - Máy photocopy đa chức năng" class="opacity-80 hover:opacity-100 transition grayscale hover:grayscale-0 flex items-center justify-center">
            <img src="/assets/images/brands/toshiba.svg" alt="TOSHIBA" class="h-8 max-w-[110px] object-contain" />
          </a>
          <a href="/san-pham/fansipan/" title="FANSIPAN - Mực & Vật tư tương thích" class="opacity-80 hover:opacity-100 transition grayscale hover:grayscale-0 flex items-center justify-center">
            <img src="/assets/images/brands/fansipan.svg" alt="FANSIPAN" class="h-8 max-w-[110px] object-contain" />
          </a>
          <a href="/san-pham/may-scan-so-hoa/" title="RICOH - Thiết bị in siêu tốc & Máy scan" class="opacity-80 hover:opacity-100 transition grayscale hover:grayscale-0 flex items-center justify-center">
            <img src="/assets/images/brands/ricoh.svg" alt="RICOH" class="h-8 max-w-[110px] object-contain" />
          </a>
          <a href="/san-pham/photocopy-may-da-chuc-nang/" title="KONICA MINOLTA - Máy photocopy kỹ thuật số" class="opacity-80 hover:opacity-100 transition grayscale hover:grayscale-0 flex items-center justify-center">
            <img src="/assets/images/brands/konica-minolta.svg" alt="KONICA MINOLTA" class="h-8 max-w-[110px] object-contain" />
          </a>
          <a href="/san-pham/may-in-laser/" title="HP - Máy in laser văn phòng" class="opacity-80 hover:opacity-100 transition grayscale hover:grayscale-0 flex items-center justify-center">
            <img src="/assets/images/brands/hp.svg" alt="HP" class="h-8 max-w-[90px] object-contain" />
          </a>
          <a href="/san-pham/thiet-bi-phong-hoc-giao-duc/" title="VIEWSONIC - Màn hình tương tác" class="opacity-80 hover:opacity-100 transition grayscale hover:grayscale-0 flex items-center justify-center">
            <img src="/assets/images/brands/viewsonic.svg" alt="ViewSonic" class="h-8 max-w-[110px] object-contain" />
          </a>
        </div>
      </div>
    </div>
  </section>"""


# ------------------------------------------------------- S6: 3 Dịch vụ mũi nhọn
def _three_flagship_services():
    return f"""
  <section class="py-16 bg-[#f5f8fb] border-b border-gray-200">
    <div class="{WRAP}">
      <div class="max-w-3xl mb-12">
        <span class="text-[{BRAND}] font-bold text-xs uppercase tracking-[0.2em] block mb-2">Trọng tâm kinh doanh</span>
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#181923] leading-tight mb-4">
          Ba Dịch Vụ Mũi Nhọn Hương Sơn Ưu Tiên Phục Vụ
        </h2>
        <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
          Tập trung tối đa nguồn lực thiết bị chính hãng sẵn kho, đội ngũ kỹ sư chuyên môn cao và quy chuẩn dịch vụ minh bạch dành riêng cho khách hàng tổ chức, trường học, cơ quan và doanh nghiệp:
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
        <!-- Dịch vụ 1: Cho thuê máy photocopy mới 100% -->
        <div class="bg-white border border-gray-200 hover:border-[{BRAND}] flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="relative h-56 bg-gray-100 overflow-hidden border-b border-gray-200">
              <span class="absolute top-3 left-3 bg-[{BRAND}] text-white text-[11px] font-bold px-3 py-1 uppercase tracking-wider z-10 shadow-xs">
                100% Máy Mới Chính Hãng
              </span>
              <img src="/assets/images/products/toshiba-e-studio-2829a.jpg" alt="Cho thuê máy photocopy mới 100%" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-500" loading="lazy" />
            </div>
            <div class="p-6 sm:p-7">
              <span class="text-xs font-bold text-[{BRAND}] uppercase tracking-wider block mb-1">Khách văn phòng &amp; Doanh nghiệp</span>
              <h3 class="text-xl font-bold text-[#181923] mb-3">
                <a href="/giai-phap/cho-thue-thiet-bi/" class="hover:text-[{BRAND}] transition">Cho Thuê Máy Photocopy Mới 100%</a>
              </h3>
              <p class="text-[13.5px] text-gray-600 leading-relaxed mb-4">
                Máy photocopy đa chức năng Toshiba, Ricoh, Konica Minolta thế hệ mới với đầy đủ chứng nhận CO/CQ. Cam kết không cho thuê máy bãi, máy cũ nát.
              </p>
              <ul class="text-[13px] text-gray-700 space-y-2 mb-6">
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>Bảng giá minh bạch:</strong> Từ <strong>800.000 đ/tháng</strong> với 4 gói cước chuẩn hóa.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>0đ phí mực &amp; linh kiện:</strong> Miễn phí toàn bộ mực in, trống, gạt và bảo trì.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>Đổi máy trong 24 giờ:</strong> Kỹ thuật có mặt ≤ 2h, đổi máy tương đương nếu cần.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>Dùng thử miễn phí:</strong> Trải nghiệm thực tế 07 ngày trước khi ký hợp đồng.</span></li>
              </ul>
              <!-- Bằng chứng năng lực riêng -->
              <div class="p-3.5 bg-gray-50 border border-gray-200/80 mb-6">
                <div class="flex items-center gap-2 text-xs font-bold text-[#181923] mb-1">
                  <i class="fa-solid fa-building-columns text-[{BRAND}]"></i>
                  <span>Bằng chứng năng lực thực tế:</span>
                </div>
                <p class="text-[12.5px] text-gray-600 leading-relaxed">
                  Triển khai thành công hợp đồng cung cấp <strong>127 máy photocopy Toshiba đa chức năng</strong> cho hệ thống Ngân hàng <strong>Vietcombank</strong> trên toàn quốc.
                </p>
              </div>
            </div>
          </div>
          <div class="p-6 sm:p-7 pt-0 flex flex-col sm:flex-row gap-3">
            <a href="/nhan-tu-van/tu-van-thue-may/" class="bg-[{BRAND}] hover:bg-[#147700] text-white text-xs font-bold uppercase tracking-wider py-3.5 px-4 text-center transition flex-1">
              Nhận tư vấn thuê máy
            </a>
            <a href="/giai-phap/cho-thue-thiet-bi/" class="border border-gray-300 hover:border-[{BRAND}] hover:text-[{BRAND}] text-[#181923] text-xs font-bold uppercase tracking-wider py-3.5 px-4 text-center transition">
              Bảng giá 4 gói
            </a>
          </div>
        </div>

        <!-- Dịch vụ 2: Cho thuê Duplo và thiết bị in sao đề thi -->
        <div class="bg-white border border-gray-200 hover:border-[{BRAND}] flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="relative h-56 bg-gray-100 overflow-hidden border-b border-gray-200">
              <span class="absolute top-3 left-3 bg-[{DARK}] text-white text-[11px] font-bold px-3 py-1 uppercase tracking-wider z-10 shadow-xs">
                Tốc độ 130–150 ppm • Bảo mật 3 vòng
              </span>
              <img src="/assets/images/products/duplo-dp-x550.jpg" alt="Cho thuê Duplo in sao đề thi" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-500" loading="lazy" />
            </div>
            <div class="p-6 sm:p-7">
              <span class="text-xs font-bold text-[{BRAND}] uppercase tracking-wider block mb-1">Khách cơ quan &amp; Trường học</span>
              <h3 class="text-xl font-bold text-[#181923] mb-3">
                <a href="/giai-phap/giao-duc/in-de-thi/" class="hover:text-[{BRAND}] transition">In Sao Đề Thi Siêu Tốc (Duplo)</a>
              </h3>
              <p class="text-[13.5px] text-gray-600 leading-relaxed mb-4">
                Máy in nhân bản kỹ thuật số Duplo công suất cực lớn, chuyên trách in sao đề thi tốt nghiệp, đề thi tuyển sinh an toàn tuyệt đối và bảo mật cách ly.
              </p>
              <ul class="text-[13px] text-gray-700 space-y-2 mb-6">
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>Tốc độ vượt trội:</strong> Đạt <strong>130 – 150 bản in/phút</strong>, nhanh gấp 3–5 lần máy thông thường.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>Chi phí siêu tiết kiệm:</strong> Chỉ từ <strong>25 – 40 đ/trang in</strong> (tiết kiệm 70–80% ngân sách).</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>Bảo mật cách ly 3 vòng:</strong> Vận hành offline 100%, tuân thủ quy chế Bộ GD&amp;ĐT.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>Dự phòng N+1 tại chỗ:</strong> Sẵn sàng máy dự phòng và kỹ thuật viên trực hiện trường.</span></li>
              </ul>
              <!-- Bằng chứng năng lực riêng -->
              <div class="p-3.5 bg-gray-50 border border-gray-200/80 mb-6">
                <div class="flex items-center gap-2 text-xs font-bold text-[#181923] mb-1">
                  <i class="fa-solid fa-graduation-cap text-[{BRAND}]"></i>
                  <span>Bằng chứng năng lực thực tế:</span>
                </div>
                <p class="text-[12.5px] text-gray-600 leading-relaxed">
                  Đã triển khai thành công cho <strong>Sở GD&amp;ĐT Vĩnh Phúc</strong> và phục vụ Kỳ thi Tốt nghiệp THPT 2026 của <strong>Sở GD&amp;ĐT Quảng Trị</strong>.
                </p>
              </div>
            </div>
          </div>
          <div class="p-6 sm:p-7 pt-0 flex flex-col sm:flex-row gap-3">
            <a href="/nhan-tu-van/phuong-an-in-de-thi/" class="bg-[{BRAND}] hover:bg-[#147700] text-white text-xs font-bold uppercase tracking-wider py-3.5 px-4 text-center transition flex-1">
              Nhận phương án in đề thi
            </a>
            <a href="/giai-phap/giao-duc/in-de-thi/" class="border border-gray-300 hover:border-[{BRAND}] hover:text-[{BRAND}] text-[#181923] text-xs font-bold uppercase tracking-wider py-3.5 px-4 text-center transition">
              Chi tiết giải pháp
            </a>
          </div>
        </div>

        <!-- Dịch vụ 3: Scan, số hóa và quản lý tài liệu -->
        <div class="bg-white border border-gray-200 hover:border-[{BRAND}] flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="relative h-56 bg-gray-100 overflow-hidden border-b border-gray-200">
              <span class="absolute top-3 left-3 bg-[#0d6efd] text-white text-[11px] font-bold px-3 py-1 uppercase tracking-wider z-10 shadow-xs">
                Chuẩn TT 02/2019/TT-BNV • OCR ≥ 98%
              </span>
              <img src="/assets/images/products/ricoh-fujitsu-fi-7160.jpg" alt="Scan và số hóa tài liệu" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-500" loading="lazy" />
            </div>
            <div class="p-6 sm:p-7">
              <span class="text-xs font-bold text-[{BRAND}] uppercase tracking-wider block mb-1">Khách số hóa &amp; Chuyển đổi số</span>
              <h3 class="text-xl font-bold text-[#181923] mb-3">
                <a href="/giai-phap/scan-so-hoa/" class="hover:text-[{BRAND}] transition">Scan &amp; Số Hóa Quản Lý Tài Liệu</a>
              </h3>
              <p class="text-[13.5px] text-gray-600 leading-relaxed mb-4">
                Dịch vụ scan tài liệu tốc độ cao, nhận dạng ký tự quang học tiếng Việt và cấu trúc hóa siêu dữ liệu phục vụ lưu trữ vĩnh viễn theo chuẩn Cục Văn thư.
              </p>
              <ul class="text-[13px] text-gray-700 space-y-2 mb-6">
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>PDF/A-1b Searchable:</strong> OCR tiếng Việt có dấu chính xác <strong>≥ 98%</strong>, tìm kiếm tức thì.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>Bảng Metadata Index:</strong> 10 trường tra cứu chuẩn (Excel/CSV), có hyperlink mở file.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>Mã băm SHA-256:</strong> Đối soát toàn vẹn 100% dữ liệu gốc, chống sửa đổi giả mạo.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>Bảo mật tuyệt đối:</strong> Thi công on-site tại trụ sở khách hàng, ký cam kết bảo mật NDA.</span></li>
              </ul>
              <!-- Bằng chứng năng lực riêng -->
              <div class="p-3.5 bg-gray-50 border border-gray-200/80 mb-6">
                <div class="flex items-center gap-2 text-xs font-bold text-[#181923] mb-1">
                  <i class="fa-solid fa-shield-halved text-[{BRAND}]"></i>
                  <span>Bằng chứng năng lực thực tế:</span>
                </div>
                <p class="text-[12.5px] text-gray-600 leading-relaxed">
                  Đội thiết bị chuyên dụng Ricoh &amp; Fujitsu fi-Series nạp quét ADF tự động, đã số hóa thành công hàng trăm nghìn trang học bạ THPT và hồ sơ hành chính.
                </p>
              </div>
            </div>
          </div>
          <div class="p-6 sm:p-7 pt-0 flex flex-col sm:flex-row gap-3">
            <a href="/nhan-tu-van/khao-sat-so-hoa/" class="bg-[{BRAND}] hover:bg-[#147700] text-white text-xs font-bold uppercase tracking-wider py-3.5 px-4 text-center transition flex-1">
              Đăng ký khảo sát số hóa
            </a>
            <a href="/giai-phap/scan-so-hoa/" class="border border-gray-300 hover:border-[{BRAND}] hover:text-[{BRAND}] text-[#181923] text-xs font-bold uppercase tracking-wider py-3.5 px-4 text-center transition">
              Xem mẫu dữ liệu
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>"""


# ------------------------------------------------------- S7: Danh mục bổ trợ
def _categories():
    cards = [{"title": c["h1"], "url": c["url"], "icon": "fa-solid fa-box",
             "tag": c["eyebrow"], "text": esc(c["summary"][:110] + "…")} for c in PRODUCTS["categories"]]
    return C.section(
        C.heading(eyebrow="Danh mục thiết bị bổ trợ", title="Hệ sinh thái sản phẩm bổ trợ & Vật tư FANSIPAN")
        + '<p class="text-center text-gray-600 text-sm max-w-2xl mx-auto -mt-6 mb-10 leading-relaxed">Bên cạnh các giải pháp vận hành in ấn mũi nhọn, Hương Sơn cung cấp đầy đủ các dòng máy in laser, máy đếm tiền, và hệ sinh thái mực in, cartridge FANSIPAN tương thích chất lượng cao cho đại lý &amp; đối tác:</p>'
        + C.card_grid(cards, cols=4)
        + f'<div class="text-center mt-10"><a href="/san-pham/" class="inline-block border border-gray-300 hover:border-[{BRAND}] hover:text-[{BRAND}] text-[#181923] font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem tất cả 9 danh mục sản phẩm</a></div>',
        bg="light", pad="py-16")


# ------------------------------------------------------------- S8: Marquee
def _marquee():
    text = " &nbsp;•&nbsp; ".join(["PRINT", "COPY", "SCAN", "DIGITAL", "RENTAL", "SERVICE"] * 4)
    return f"""
  <section class="bg-[{BRAND}] py-4 overflow-hidden">
    <div class="whitespace-nowrap text-white font-bold text-sm uppercase tracking-[0.2em] marquee-track">{text}</div>
  </section>"""


# ------------------------------------------------------ S10: CTA tải hồ sơ
def _cta_download():
    return C.cta_band(
        title="Tải hồ sơ năng lực Hương Sơn",
        text="Thông tin pháp lý, năng lực thiết bị, kỹ thuật, logistics và các dự án đã triển khai.",
        primary=("Tải hồ sơ năng lực", "/ve-huong-son/tai-nguyen/"),
        secondary=("Xem dự án", "/du-an/"))


# --------------------------------------------------- S11: Năng lực triển khai
def _capability():
    items = [
        ("fa-solid fa-warehouse", "Kho thiết bị sẵn có", "Lưu kho > 200 model máy photocopy Toshiba, Ricoh, Duplo tại Hà Nội sẵn sàng xuất kho trong 24h.", "> 200 Thiết bị sẵn sàng"),
        ("fa-solid fa-user-gear", "Kỹ sư chứng nhận hãng", "100% kỹ thuật viên đạt chứng chỉ từ Duplo Nhật Bản, Toshiba, Konica Minolta; hỗ trợ 24/7.", "Chứng chỉ hãng chính thức"),
        ("fa-solid fa-truck-fast", "Logistics an toàn 2H", "Đội xe chuyên dụng có giảm chấn, cam kết vận chuyển và lắp đặt tận nơi trong 2–4 giờ.", "Giao lắp an toàn 2h"),
        ("fa-solid fa-shield-halved", "Máy dự phòng N+1", "Tối thiểu 01 máy dự phòng sẵn sàng tại chỗ cho kỳ thi lớn, loại bỏ hoàn toàn rủi ro dừng máy.", "Dự phòng N+1 tại chỗ"),
    ]
    cards = "".join(f"""
        <div class="p-7 text-center flex flex-col items-center justify-between border border-gray-200/80 bg-white hover:border-[{BRAND}] transition duration-300 shadow-xs">
          <div class="w-14 h-14 bg-[{DARK}] text-white flex items-center justify-center mx-auto mb-4"><i class="{icon} text-xl"></i></div>
          <span class="inline-block bg-[#1A9900]/10 text-[#1A9900] text-[10.5px] font-bold px-2 py-0.5 uppercase tracking-wider mb-2">{badge}</span>
          <h3 class="font-bold text-[#181923] mb-2">{esc(t)}</h3>
          <p class="text-[13px] text-gray-500 leading-relaxed">{esc(d)}</p>
        </div>""" for icon, t, d, badge in items)
    return C.section(
        C.heading(eyebrow="Năng lực triển khai", title="Sẵn sàng cho cả nhu cầu theo mùa và dài hạn")
        + f'<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">{cards}</div>', pad="py-16")



# --------------------------------------------------------------- S12: SLA
def _sla():
    rows = [
        ["P1 – Máy dừng hoàn toàn", "Tiếp nhận ≤ 30 phút", "Có mặt ≤ 2 giờ; thay máy dự phòng nếu cần"],
        ["P2 – Ảnh hưởng chức năng chính", "Tiếp nhận ≤ 30 phút", "Xử lý trong ngày làm việc"],
        ["P3 – Lỗi nhỏ", "Tiếp nhận trong ngày", "Xử lý theo lịch bảo trì"],
    ]
    return C.section(
        C.heading(eyebrow="Cam kết dịch vụ", title="SLA rõ ràng theo từng cấp độ sự cố")
        + C.matrix_table(["Cấp độ", "Tiếp nhận", "Mục tiêu xử lý"], rows), bg="light", pad="py-16")


# ------------------------------------------------------- S13: Case study & Kiến thức chuyên môn
def _news():
    project_images = {
        "so-gddt-vinh-phuc-thue-may-photocopy-sao-in-de-thi": "/assets/images/products/98-cho-thue-toshiba-e-studio-456.jpg",
        "so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026": "/assets/images/products/duplo-dp-x550.jpg",
        "vietcombank-cung-cap-may-photocopy": "/assets/images/products/vietcombank-2024.jpg",
    }
    project_custom_text = {
        "vietcombank-cung-cap-may-photocopy": "Triển khai 02 đợt quy mô lớn cho hệ thống Vietcombank toàn quốc: lô máy Konica Minolta (2022–2023) và lô 127 máy photocopy Toshiba đa chức năng (2024).",
        "so-gddt-vinh-phuc-thue-may-photocopy-sao-in-de-thi": "Cung cấp dịch vụ thuê 02 máy photocopy Toshiba 7518A/8518A phục vụ in sao đề thi, hồ sơ nghiệm thu thực tế minh bạch.",
        "so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026": "Thuê 02 máy in nhân bản siêu tốc Duplo tốc độ 150–155 bản/phút phục vụ Kỳ thi Tốt nghiệp THPT 2026.",
    }
    cards = [{"title": p["title"], "url": p["url"], "tag": p["eyebrow"],
              "image": project_images.get(p["slug"], "/assets/images/hero-projects.jpg"),
              "text": esc(project_custom_text.get(p["slug"], p["summary"][:130] + "…")),
              "cta": "Xem case study"} for p in PROJECTS]
    return C.section(
        C.heading(eyebrow="Case Study Thực Tế", title="Dự án tiêu biểu đã triển khai")
        + C.card_grid(cards, cols=3)
        + f'<div class="text-center mt-10"><a href="/du-an/" class="inline-block border border-gray-300 hover:border-[{BRAND}] hover:text-[{BRAND}] text-[#181923] font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem tất cả dự án</a></div>',
        pad="py-16")


def _knowledge_home():
    knowledge_cards = [
        {
            "title": "Nên thuê hay mua máy photocopy cho doanh nghiệp, trường học?",
            "url": "/ve-huong-son/kien-thuc/nen-thue-hay-mua-may-photocopy/",
            "tag": "Tư vấn đầu tư",
            "image": "/assets/images/hero-office.jpg",
            "text": "Phân tích bài toán chi phí dòng tiền TCO, khấu hao và rủi ro kỹ thuật giúp lãnh đạo ra quyết định mua sắm chính xác nhất.",
            "cta": "Đọc cẩm nang (6 phút)",
        },
        {
            "title": "Tiêu chuẩn máy in nhân bản siêu tốc phục vụ sao in đề thi THPT",
            "url": "/ve-huong-son/kien-thuc/tieu-chuan-may-in-de-thi-thpt/",
            "tag": "Thi cử & Bảo mật",
            "image": "/assets/images/hero-education.jpg",
            "text": "Yêu cầu kỹ thuật cách ly 3 vòng, tốc độ 130–150 bản/phút, bảo mật tuyệt đối và phương án máy dự phòng N+1 theo quy chế thi Bộ GD&ĐT.",
            "cta": "Đọc cẩm nang (8 phút)",
        },
        {
            "title": "Hướng dẫn lựa chọn máy scan số hóa tài liệu cho cơ quan, trường học",
            "url": "/ve-huong-son/kien-thuc/huong-dan-chon-may-scan-so-hoa-tai-lieu/",
            "tag": "Chuyển đổi số",
            "image": "/assets/images/banners/highspeed_scanner_1787905830483.jpg",
            "text": "Tiêu chí chọn máy scan nạp tự động ADF, quét phẳng Flatbed, scan sách không phá gáy và công nghệ OCR tiếng Việt chuẩn Thông tư 02.",
            "cta": "Đọc cẩm nang (7 phút)",
        },
    ]
    return C.section(
        '<div class="flex items-center justify-between mb-8 flex-wrap gap-4">'
        '<div>'
        f'<span class="text-[{BRAND}] font-bold text-xs uppercase tracking-[0.2em] block mb-1">Cẩm nang &amp; Hướng dẫn chuyên môn</span>'
        '<h2 class="text-2xl sm:text-[30px] font-bold text-gray-900 leading-tight">Kiến thức chuyên sâu từ chuyên gia Hương Sơn</h2>'
        '</div>'
        '<a href="/ve-huong-son/kien-thuc/" class="inline-flex items-center gap-2 text-[#1A9900] hover:text-[#147700] font-bold text-xs uppercase tracking-wider transition border border-[#1A9900]/30 hover:border-[#1A9900] px-4 py-2 rounded-xs">'
        '<span>Xem toàn bộ 16 bài cẩm nang</span>'
        '<i class="fa-solid fa-arrow-right text-[11px]"></i>'
        '</a>'
        '</div>'
        + C.card_grid(knowledge_cards, cols=3),
        bg="light",
        pad="py-16"
    )


def build(write):
    body = (_hero() + _brands()
            + _strategic_customer_segments()
            + _education_vertical_showcase()
            + _rental_seo_hub()
            + _three_flagship_services()
            + _why() + _counters() + _capability()
            + _categories() + _marquee() + _cta_download()
            + _sla() + _news() + _knowledge_home())

    ld = [
        schema.organization(), schema.website(),
        schema.itemlist("Giải pháp Hương Sơn", [(s["name"], s["url"]) for s in SOLUTIONS[:8]]),
    ]
    write("/", render.page(
        title="Công Ty Hương Sơn | Máy Photocopy, Máy In Siêu Tốc & Cho Thuê Thiết Bị",
        description="Công ty Hương Sơn chuyên cung cấp và cho thuê máy photocopy Toshiba, Ricoh, máy in nhân bản siêu tốc Duplo, máy scan số hóa tài liệu cho trường học, cơ quan và doanh nghiệp.",
        keywords="công ty Hương Sơn, máy photocopy, cho thuê máy photocopy, máy in nhân bản siêu tốc Duplo, máy in đề thi, máy scan Ricoh, số hóa tài liệu",
        url="/", body=body, jsonld=ld, og_image="/assets/images/hero-office.jpg", active="/"))
    print("  trang chủ: 1 trang")
