# -*- coding: utf-8 -*-
"""TRANG CHỦ — map 13 section giao diện mẫu 8324 sang nội dung Digital Sales
Engine của Hương Sơn (xem KE-HOACH §7). Giữ nguyên ngôn ngữ thiết kế: xanh lá
#1f7c45 + đen than #181924, phong cách vuông vức/flat.
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


# ---------------------------------------------------------------- S1: Hero
def _hero():
    return f"""
  <section class="relative bg-[{DARK}] min-h-[560px] lg:min-h-[640px] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
      <img src="/assets/images/products/duplo-dp-x550.jpg" alt="Thiết bị Hương Sơn" class="w-full h-full object-cover object-center opacity-40" />
      <div class="absolute inset-0 bg-gradient-to-r from-[{DARK}] via-[{DARK}]/95 to-[{DARK}]/70"></div>
    </div>
    <div class="relative z-10 {WRAP} py-20 w-full">
      <div class="max-w-3xl text-white">
        <span class="font-handwriting text-3xl text-[#35a05e] font-bold block mb-3">Hương Sơn từ 2008</span>
        <h1 class="text-3xl sm:text-4xl lg:text-[46px] font-bold text-white leading-tight mb-5">
          GIẢI PHÁP THIẾT BỊ – IN ẤN VÀ SỐ HÓA
        </h1>
        <p class="text-[15px] sm:text-base text-gray-200 mb-3 leading-relaxed font-medium">
          Photocopy · In nhanh · In đề thi · Scan/Số hóa · Thiết bị Giáo dục · Cho thuê · Dịch vụ kỹ thuật
        </p>
        <p class="text-[14.5px] text-gray-300 mb-8 leading-relaxed max-w-2xl">
          Đồng hành cùng Cơ quan Nhà nước – Sở Giáo dục & Đào tạo – Ngân hàng – Doanh nghiệp trong quản lý, xử lý và số hóa tài liệu.
        </p>
        <div class="flex flex-wrap items-center gap-4">
          <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[{BRAND}] hover:bg-[#176035] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Yêu cầu báo giá</a>
          <a href="/giai-phap/giao-duc/in-de-thi/" data-ga="cta_click" class="border border-gray-400 hover:border-white text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Phương án in đề thi</a>
        </div>
      </div>
    </div>
  </section>"""


# ------------------------------------------------------------- S2: 3 CTA nóng
def _quick_cta():
    items = [
        ("fa-solid fa-print", "Thuê máy in đề thi", "Duplo tốc độ cao, kèm máy dự phòng và kỹ thuật trực.", "/giai-phap/giao-duc/in-de-thi/"),
        ("fa-solid fa-copy", "Thuê máy photocopy", "Theo tháng hoặc theo sản lượng, có bảo trì và vật tư.", "/giai-phap/cho-thue-thiet-bi/"),
        ("fa-solid fa-file-arrow-up", "Khảo sát số hóa", "Scan – OCR – chuẩn hóa dữ liệu cho hồ sơ, văn bằng.", "/giai-phap/scan-so-hoa/"),
    ]
    cards = "".join(f"""
        <a href="{u}" data-ga="cta_click" class="bg-[{DARK}] hover:bg-[{BRAND}] border border-gray-700/80 p-8 text-white transition-colors duration-300 group">
          <div class="w-11 h-11 bg-white/10 group-hover:bg-white/20 flex items-center justify-center mb-6"><i class="{icon} text-lg"></i></div>
          <h3 class="text-lg font-bold text-white mb-2 uppercase tracking-wider">{esc(t)}</h3>
          <p class="text-gray-300 group-hover:text-white/90 text-sm leading-relaxed">{esc(d)}</p>
        </a>""" for icon, t, d, u in items)
    return f"""
  <section class="bg-[{DARK}] pb-12 pt-0">
    <div class="{WRAP}"><div class="grid grid-cols-1 md:grid-cols-3 gap-6 -mt-14 relative z-20">{cards}</div></div>
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


# ------------------------------------------------------- S4: Why choose us
def _why():
    items = [
        ("fa-solid fa-layer-group", "Đa thương hiệu", "Đại lý ủy quyền Duplo, Toshiba tại miền Bắc từ 2017; đại lý Konica Minolta từ 2021 — chọn đúng thiết bị, không bó buộc một hãng."),
        ("fa-solid fa-headset", "Dịch vụ đi cùng thiết bị", "Bảo trì, kỹ thuật trực, máy dự phòng và cam kết thời gian xử lý theo cấp độ sự cố."),
        ("fa-solid fa-graduation-cap", "Chuyên sâu Giáo dục", "Kinh nghiệm thực tế in sao đề thi cho Sở GD&ĐT Vĩnh Phúc và Quảng Trị, có hồ sơ hợp đồng đầy đủ."),
        ("fa-solid fa-truck-fast", "Cho thuê & Managed Print", "Từ thuê máy theo đợt đến quản lý trọn gói đội thiết bị, tính theo sản lượng và SLA."),
        ("fa-solid fa-boxes-stacked", "Vật tư Fansipan", "Thương hiệu vật tư riêng — mực, cụm mực, linh kiện tương thích nhiều dòng máy."),
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
          <span class="font-handwriting text-3xl text-[#35a05e] font-bold block mb-2">Vì sao chọn Hương Sơn?</span>
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
    cols = "".join(f"""
        <div class="pt-6 md:pt-0">
          <div class="text-4xl sm:text-5xl font-bold text-[{BRAND}] mb-2">{esc(v)}</div>
          <h4 class="text-[13.5px] font-bold text-white uppercase tracking-wider leading-snug">{esc(l)}</h4>
        </div>""" for v, l in items)
    return f"""
  <section class="py-12 bg-[{DARK}] text-white">
    <div class="{WRAP}"><div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-gray-800">{cols}</div></div>
  </section>"""


# ------------------------------------------------------- S6: 3 trụ cột overlay
def _pillars():
    items = [
        ("/assets/images/products/toshiba-e-studio-2829a.jpg", "Thiết bị", "Photocopy, in nhân bản siêu tốc, scan, in Laser", "/san-pham/"),
        ("/assets/images/products/duplo-dp-x550.jpg", "Giải pháp", "Giáo dục, Cơ quan Nhà nước, Ngân hàng, Doanh nghiệp", "/giai-phap/"),
        ("/assets/images/products/duplo-dfc-122.jpg", "Dịch vụ", "Cho thuê, bảo trì, kỹ thuật, vật tư, số hóa", "/dich-vu/"),
    ]
    cards = "".join(f"""
        <a href="{u}" class="relative group overflow-hidden bg-[{DARK}] h-[340px] flex flex-col justify-end p-8 text-white">
          <img src="{img}" alt="{esc(t)}" loading="lazy" class="absolute inset-0 w-full h-full object-cover opacity-50 group-hover:scale-105 group-hover:opacity-35 transition duration-500" />
          <div class="relative z-10">
            <h3 class="text-xl font-bold text-white mb-2">{esc(t)}</h3>
            <p class="text-sm text-gray-300 mb-4">{esc(d)}</p>
            <span class="inline-flex items-center space-x-2 text-[{BRAND}] group-hover:text-white font-bold text-xs uppercase tracking-wider transition">
              <span>Xem chi tiết</span><i class="fa-solid fa-arrow-right text-[10px]"></i>
            </span>
          </div>
        </a>""" for img, t, d, u in items)
    return C.section(
        C.heading(eyebrow="Ba trụ cột", title="Thiết bị – Giải pháp – Dịch vụ")
        + f'<div class="grid grid-cols-1 md:grid-cols-3 gap-8">{cards}</div>', pad="py-16")


# ------------------------------------------------------- S7: 8 danh mục sản phẩm
def _categories():
    cards = [{"title": c["h1"], "url": c["url"], "icon": "fa-solid fa-box",
             "tag": c["eyebrow"], "text": esc(c["summary"][:110] + "…")} for c in PRODUCTS["categories"]]
    return C.section(
        C.heading(eyebrow="Danh mục", title="8 nhóm sản phẩm Hương Sơn cung cấp")
        + C.card_grid(cards, cols=4)
        + f'<div class="text-center mt-10"><a href="/san-pham/" class="inline-block border border-gray-300 hover:border-[{BRAND}] hover:text-[{BRAND}] text-[#181923] font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem tất cả sản phẩm</a></div>',
        bg="light", pad="py-16")


# ------------------------------------------------------------- S8: Marquee
def _marquee():
    text = " &nbsp;•&nbsp; ".join(["PRINT", "COPY", "SCAN", "DIGITAL", "RENT", "SERVICE"] * 4)
    return f"""
  <section class="bg-[{BRAND}] py-4 overflow-hidden">
    <div class="whitespace-nowrap text-white font-bold text-sm uppercase tracking-[0.2em] marquee-track">{text}</div>
  </section>"""


# ------------------------------------------ S9: Digital Sales Engine diagram
def _engine():
    steps = ["Google/Search", "Website", "Nội dung", "Giải pháp", "Khách hàng để lại thông tin",
             "CRM", "Sales", "Hợp đồng", "CSKH", "Bán thêm"]
    chips = "".join(
        f'<div class="flex items-center"><span class="bg-white border border-gray-200 px-4 py-2.5 text-[12.5px] '
        f'font-bold text-[#181923] whitespace-nowrap">{esc(s)}</span>'
        + (f'<i class="fa-solid fa-arrow-right text-[{BRAND}] mx-2 text-xs"></i>' if i < len(steps) - 1 else '')
        + '</div>'
        for i, s in enumerate(steps))
    return C.section(
        C.heading(eyebrow="Digital Sales Engine", title="Website bắt đầu tạo doanh thu — không chỉ hiện diện")
        + f'<div class="flex flex-wrap items-center justify-center gap-y-3 mb-10">{chips}</div>'
        + '<p class="text-center text-gray-500 text-[14.5px] max-w-3xl mx-auto leading-relaxed">'
        + 'Mô hình mới của Hương Sơn: website không chỉ để "có mặt trên Internet", mà tham gia trực tiếp '
        + 'vào việc tạo nhu cầu, thu hút khách hàng tiềm năng và kết nối tới CRM, Sales và chăm sóc khách hàng.</p>',
        pad="py-16")


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
        ("fa-solid fa-warehouse", "Kho thiết bị", "Kho Toshiba, HP MFP, Duplo sẵn sàng triển khai theo hợp đồng."),
        ("fa-solid fa-user-gear", "Đội kỹ thuật", "Kỹ thuật trực hiện trường, hỗ trợ từ xa, xử lý theo cấp độ SLA."),
        ("fa-solid fa-truck", "Logistics", "Vận chuyển, lắp đặt, thu hồi thiết bị đúng tiến độ hợp đồng."),
        ("fa-solid fa-shield-halved", "Máy dự phòng", "Tối thiểu 01 máy dự phòng cho mỗi cụm in của kỳ thi lớn."),
    ]
    cards = "".join(f"""
        <div class="p-7 text-center" style="background-color: {BEIGE};">
          <div class="w-14 h-14 bg-[{DARK}] text-white flex items-center justify-center mx-auto mb-5"><i class="{icon} text-xl"></i></div>
          <h3 class="font-bold text-[#181923] mb-2">{esc(t)}</h3>
          <p class="text-[13.5px] text-gray-500 leading-relaxed">{esc(d)}</p>
        </div>""" for icon, t, d in items)
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


# ------------------------------------------------------- S13: Case study / kiến thức
def _news():
    cards = [{"title": p["title"], "url": p["url"], "tag": p["eyebrow"],
             "text": esc(p["summary"][:130] + "…"), "cta": "Xem case study"} for p in PROJECTS]
    return C.section(
        C.heading(eyebrow="Case Study", title="Dự án đã triển khai")
        + C.card_grid(cards, cols=3)
        + f'<div class="text-center mt-10"><a href="/du-an/" class="inline-block border border-gray-300 hover:border-[{BRAND}] hover:text-[{BRAND}] text-[#181923] font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem tất cả dự án</a></div>',
        pad="py-16")


def build(write):
    body = (_hero() + _quick_cta() + _brands() + _why() + _counters() + _pillars()
            + _categories() + _marquee() + _engine() + _cta_download() + _capability()
            + _sla() + _news())

    ld = [
        schema.organization(), schema.website(),
        schema.itemlist("Giải pháp Hương Sơn", [(s["name"], s["url"]) for s in SOLUTIONS[:8]]),
    ]
    write("/", render.page(
        title=f"{SITE['name']} – {SITE['positioning']}",
        description="Hương Sơn cung cấp thiết bị, cho thuê, vật tư, kỹ thuật và giải pháp số hóa tài liệu cho Giáo dục, Cơ quan Nhà nước, Ngân hàng và Doanh nghiệp. Đại lý ủy quyền Duplo, Toshiba, Konica Minolta.",
        keywords="Hương Sơn thuê máy photocopy, cho thuê máy in đề thi, máy in nhân bản Duplo, giải pháp in ấn giáo dục, số hóa tài liệu",
        url="/", body=body, jsonld=ld, active="/"))
    print("  trang chủ: 1 trang")
