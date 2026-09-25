# -*- coding: utf-8 -*-
"""Khối nội dung tái sử dụng — giữ đúng ngôn ngữ thiết kế mẫu 8324.

Mọi khối đều để text thật trong DOM (không lazy-render) để AI/Google trích dẫn được.
"""
import html
import re
from render import SITE, BRAND, DARK

WRAP = 'max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8'
BEIGE = 'rgb(247, 243, 238)'


def esc(t):
    return html.escape(str(t), quote=False)


def slugify(t):
    t = t.lower()
    rep = {'à':'a','á':'a','ạ':'a','ả':'a','ã':'a','â':'a','ầ':'a','ấ':'a','ậ':'a','ẩ':'a','ẫ':'a',
           'ă':'a','ằ':'a','ắ':'a','ặ':'a','ẳ':'a','ẵ':'a','è':'e','é':'e','ẹ':'e','ẻ':'e','ẽ':'e',
           'ê':'e','ề':'e','ế':'e','ệ':'e','ể':'e','ễ':'e','ì':'i','í':'i','ị':'i','ỉ':'i','ĩ':'i',
           'ò':'o','ó':'o','ọ':'o','ỏ':'o','õ':'o','ô':'o','ồ':'o','ố':'o','ộ':'o','ổ':'o','ỗ':'o',
           'ơ':'o','ờ':'o','ớ':'o','ợ':'o','ở':'o','ỡ':'o','ù':'u','ú':'u','ụ':'u','ủ':'u','ũ':'u',
           'ư':'u','ừ':'u','ứ':'u','ự':'u','ử':'u','ữ':'u','ỳ':'y','ý':'y','ỵ':'y','ỷ':'y','ỹ':'y',
           'đ':'d'}
    t = ''.join(rep.get(c, c) for c in t)
    t = re.sub(r'[^a-z0-9]+', '-', t)
    return t.strip('-')


DEFAULT_BADGES = {
    "nhan-tu-van": [
        ('fa-solid fa-bolt text-[#ffc107]', 'Phản hồi trong <strong>15 phút</strong>', None),
        ('fa-solid fa-circle-check text-[#5eb74c]', 'Khảo sát &amp; Demo máy miễn phí', None),
        ('fa-solid fa-phone text-white', 'Hotline 24/7: <strong>091.113.8583</strong>', 'tel:0911138583'),
    ],
    "san-pham": [
        ('fa-solid fa-shield-check text-[#5eb74c]', 'Thiết bị &amp; Vật tư tiêu chuẩn chất lượng', None),
        ('fa-solid fa-truck-fast text-[#ffc107]', 'Giao hàng &amp; Lắp đặt toàn quốc', None),
        ('fa-solid fa-headset text-[#5eb74c]', 'Hỗ trợ kỹ thuật 24/7', 'tel:0912304058'),
    ],
    "cho-thue-thiet-bi-giao-duc": [
        ('fa-solid fa-handshake text-[#5eb74c]', 'Trọn gói 100% Mực in &amp; Bảo trì', None),
        ('fa-solid fa-rotate text-[#ffc107]', 'Đổi máy dự phòng trong 24 giờ', None),
        ('fa-solid fa-phone text-white', 'Tư vấn thuê: <strong>091.113.8583</strong>', 'tel:0911138583'),
    ],
    "fansipan": [
        ('fa-solid fa-award text-[#5eb74c]', 'Thương hiệu độc quyền FANSIPAN', None),
        ('fa-solid fa-percent text-[#ffc107]', 'Tiết kiệm 50% chi phí mực in', None),
        ('fa-solid fa-shield-check text-cyan-400', 'Bảo hành 1 đổi 1 bản in sắc nét', None),
    ],
    "vat-tu-linh-kien-tieu-hao": [
        ('fa-solid fa-boxes-stacked text-[#5eb74c]', 'Linh kiện tiêu chuẩn kỹ thuật cao', None),
        ('fa-solid fa-rotate text-[#ffc107]', 'Bảo hành đổi mới 1 đổi 1', None),
        ('fa-solid fa-headset text-cyan-400', 'Hỗ trợ kỹ thuật thay thế', 'tel:0912304058'),
    ],
    "giai-phap": [
        ('fa-solid fa-sliders text-[#5eb74c]', 'Giải pháp may đo theo từng ngành', None),
        ('fa-solid fa-chart-line text-[#ffc107]', 'Tiết kiệm 25% – 40% chi phí', None),
        ('fa-solid fa-clock-rotate-left text-cyan-400', 'SLA phản hồi kỹ thuật < 2h', None),
    ],
    "dich-vu": [
        ('fa-solid fa-wrench text-[#ffc107]', 'Xử lý sự cố tận nơi trong 2 giờ', None),
        ('fa-solid fa-rotate text-[#5eb74c]', 'Đổi máy dự phòng tương đương', None),
        ('fa-solid fa-phone text-white', 'Kỹ thuật: <strong>0912.304.058</strong>', 'tel:0912304058'),
    ],
    "du-an": [
        ('fa-solid fa-award text-[#ffc107]', '15+ năm phục vụ kỳ thi &amp; ngân hàng', None),
        ('fa-solid fa-building-circle-check text-[#5eb74c]', '500+ dự án hoàn thành bàn giao', None),
        ('fa-solid fa-user-shield text-cyan-400', 'Bảo mật 100% tài liệu &amp; đề thi', None),
    ],
    "ve-huong-son": [
        ('fa-solid fa-calendar-check text-[#5eb74c]', 'Thành lập từ 2008 (16+ năm uy tín)', None),
        ('fa-solid fa-certificate text-[#ffc107]', 'Đối tác phân phối Ricoh, Toshiba, Duplo', None),
        ('fa-solid fa-location-dot text-cyan-400', 'Showroom &amp; Kho máy tại Hà Nội', None),
    ],
    "cong-cu": [
        ('fa-solid fa-calculator text-[#5eb74c]', 'Ước tính chi phí thuê &amp; TCO chuẩn xác', None),
        ('fa-solid fa-bolt text-[#ffc107]', 'Kết quả phân tích trong 30 giây', None),
        ('fa-solid fa-file-invoice text-cyan-400', 'Đề xuất cấu hình máy tối ưu', None),
    ],
}


# ------------------------------------------------------------------- page header
def page_hero(*, eyebrow, h1, lead, trail, image="/assets/images/hero-office.jpg", badges=None):
    """Banner đầu trang 2 cột (Split-Hero): Nội dung bên trái + Showcase thiết bị tiền cảnh nổi bật bên phải."""
    crumbs_html = []
    for i, (label, url) in enumerate(trail):
        if i == 0 and url == "/":
            continue
        is_last = (i == len(trail) - 1)
        if is_last:
            crumbs_html.append(f'<span class="text-[#84e372] font-semibold" aria-current="page">{esc(label)}</span>')
        else:
            crumbs_html.append(f'<a href="{url}" class="text-gray-200 hover:text-white transition">{esc(label)}</a>')

    sep = ' <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> '
    crumbs_rendered = sep.join(crumbs_html)
    if crumbs_rendered:
        crumbs_rendered = f' <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> {crumbs_rendered}'

    # Determine section key
    sec_key = "nhan-tu-van"
    for _, url in trail:
        parts = url.strip("/").split("/")
        if parts and parts[0] in DEFAULT_BADGES:
            sec_key = parts[0]
            break

    # Resolve foreground showcase image and badges
    foreground_img = "/assets/images/banners/toshiba_mfp_product_1787905812744.jpg"
    top_badge_icon = "fa-solid fa-award text-[#5eb74c]"
    top_badge_text = "Cam kết chất lượng tiêu chuẩn"
    bottom_badge_text = "Bảo hành 24T"
    showcase_caption = "Thiết bị văn phòng & In ấn hiện đại"

    trail_str = " ".join(u for _, u in trail).lower()
    if "in-de-thi" in trail_str or "giao-duc" in trail_str:
        foreground_img = "/assets/images/products/duplo-dp-x550.jpg"
        top_badge_icon = "fa-solid fa-bolt text-[#ffc107]"
        top_badge_text = "130 – 150 bản/phút"
        bottom_badge_text = "Bảo mật 100%"
        showcase_caption = "Máy in đề thi Duplo Nhật Bản"
    elif "scan-so-hoa" in trail_str:
        foreground_img = "/assets/images/banners/highspeed_scanner_1787905830483.jpg"
        top_badge_icon = "fa-solid fa-bolt text-[#ffc107]"
        top_badge_text = "Scan 80 – 140 trang/phút"
        bottom_badge_text = "OCR Tiếng Việt"
        showcase_caption = "Máy scan Ricoh Fujitsu chuyên dụng"
    elif "photocopy" in trail_str:
        foreground_img = "/assets/images/banners/toshiba_mfp_product_1787905812744.jpg"
        top_badge_icon = "fa-solid fa-medal text-[#ffc107]"
        top_badge_text = "Chất lượng kiểm định tiêu chuẩn"
        bottom_badge_text = "Bảo hành tận nơi"
        showcase_caption = "Máy photocopy đa chức năng chuyên nghiệp"
    elif "may-in-nhan-ban" in trail_str:
        foreground_img = "/assets/images/products/duplo-dp-x550.jpg"
        top_badge_icon = "fa-solid fa-print text-[#ffc107]"
        top_badge_text = "Tốc độ 130 – 180 bản/phút"
        bottom_badge_text = "Chuẩn in đề thi"
        showcase_caption = "Máy in siêu tốc Duplo Nhật Bản"
    elif "thue-may" in trail_str or "cho-thue" in trail_str:
        foreground_img = "/assets/images/banners/toshiba_mfp_product_1787905812744.jpg"
        top_badge_icon = "fa-solid fa-handshake text-[#ffc107]"
        top_badge_text = "Trọn Gói Mực & Bảo Trì"
        bottom_badge_text = "Đổi máy trong 24h"
        showcase_caption = "Thuê máy photocopy trọn gói miễn phí mực"
    elif "fansipan" in trail_str:
        foreground_img = "/assets/images/banners/toshiba_mfp_product_1787905812744.jpg"
        top_badge_icon = "fa-solid fa-award text-[#ffc107]"
        top_badge_text = "Thương hiệu FANSIPAN"
        bottom_badge_text = "Tiết kiệm 50%"
        showcase_caption = "Mực in tương thích cao cấp FANSIPAN"
    elif "vat-tu" in trail_str or "linh-kien" in trail_str:
        foreground_img = "/assets/images/banners/toshiba_mfp_product_1787905812744.jpg"
        top_badge_icon = "fa-solid fa-boxes-stacked text-[#ffc107]"
        top_badge_text = "Linh Kiện Tiêu Chuẩn"
        bottom_badge_text = "Bảo hành 1 đổi 1"
        showcase_caption = "Vật tư & Linh kiện thay thế chuẩn xác"
    elif sec_key == "nhan-tu-van":
        foreground_img = "/assets/images/banners/toshiba_mfp_product_1787905812744.jpg"
        top_badge_icon = "fa-solid fa-bolt text-[#ffc107]"
        top_badge_text = "Phản hồi trong 15 phút"
        bottom_badge_text = "Demo máy 0đ"
        showcase_caption = "Tư vấn & khảo sát tận nơi miễn phí"
    elif sec_key == "dich-vu":
        foreground_img = "/assets/images/products/toshiba-e-studio-4528a.jpg"
        top_badge_icon = "fa-solid fa-clock-rotate-left text-[#ffc107]"
        top_badge_text = "Xử lý sự cố ≤ 2 giờ"
        bottom_badge_text = "Đổi máy mới 1-1"
        showcase_caption = "Kỹ thuật trực chiến tại địa điểm"
    elif sec_key == "du-an":
        foreground_img = "/assets/images/banners/hero_projects_1787899964984.jpg"
        top_badge_icon = "fa-solid fa-award text-[#ffc107]"
        top_badge_text = "15+ Năm Kinh Nghiệm"
        bottom_badge_text = "500+ Dự án"
        showcase_caption = "Hội đồng thi & Ngân hàng uy tín"
    elif sec_key == "ve-huong-son":
        foreground_img = "/assets/images/banners/hero_office_solutions_1787899910391.jpg"
        top_badge_icon = "fa-solid fa-building text-[#5eb74c]"
        top_badge_text = "Thành lập từ 2008"
        bottom_badge_text = "Uy tín 16 năm"
        showcase_caption = "Trụ sở & Showroom tại Hà Nội"
    elif sec_key == "cong-cu":
        foreground_img = "/assets/images/banners/toshiba_mfp_product_1787905812744.jpg"
        top_badge_icon = "fa-solid fa-calculator text-[#ffc107]"
        top_badge_text = "Kết quả trong 30 giây"
        bottom_badge_text = "Tiết kiệm 35%"
        showcase_caption = "Ước tính TCO & Chi phí tối ưu"

    # Resolve badges
    chosen_badges = badges
    if not chosen_badges:
        chosen_badges = DEFAULT_BADGES.get(sec_key, DEFAULT_BADGES["nhan-tu-van"])

    badges_items = []
    for item in chosen_badges:
        icon_cls = item[0]
        txt = item[1]
        link_href = item[2] if len(item) > 2 else None
        if link_href:
            badges_items.append(
                f'<a href="{link_href}" class="inline-flex items-center gap-1.5 bg-[#1A9900]/90 hover:bg-[#1A9900] text-white border border-[#5eb74c]/50 px-3 py-1.5 transition font-semibold text-xs shadow-sm">'
                f'<i class="{icon_cls}"></i> <span>{txt}</span></a>'
            )
        else:
            badges_items.append(
                f'<div class="inline-flex items-center gap-1.5 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm text-xs">'
                f'<i class="{icon_cls}"></i> <span>{txt}</span></div>'
            )
    badges_rendered = "\n          ".join(badges_items)

    lead_html = f'<p class="text-gray-200 text-[14.5px] sm:text-base leading-relaxed mb-6 font-normal max-w-2xl">{lead}</p>' if lead else ""

    return f"""
  <!-- PAGE HERO (SPLIT-HERO FOREGROUND SHOWCASE BANNER) -->
  <section class="relative bg-[#0d1626] py-10 sm:py-14 lg:py-16 overflow-hidden border-b border-white/10">
    <!-- Ambient Tech Background -->
    <div class="absolute inset-0 z-0">
      <div class="absolute inset-0 bg-gradient-to-br from-[#0a1526] via-[#0d1e38] to-[#12284c]"></div>
      <div class="absolute inset-0 opacity-15 pointer-events-none" style="background-image: radial-gradient(rgba(255,255,255,0.2) 1px, transparent 1px); background-size: 28px 28px;"></div>
      <div class="absolute -top-24 -right-24 w-96 h-96 bg-[#1A9900]/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl pointer-events-none"></div>
    </div>

    <div class="relative z-10 {WRAP} w-full">
      <!-- Breadcrumb Pill on Top-Left -->
      <div class="flex items-center justify-start mb-4">
        <nav class="inline-flex items-center gap-1.5 sm:gap-2 bg-white/10 hover:bg-white/15 border border-white/20 px-3.5 sm:px-4 py-1.5 backdrop-blur-md text-xs text-white/90 transition shadow-sm flex-wrap" aria-label="Breadcrumb">
          <a href="/" class="hover:text-white flex items-center gap-1.5 transition">
            <i class="fa-solid fa-house text-[#5eb74c] text-[11px]"></i>
            <span>Trang chủ</span>
          </a>{crumbs_rendered}
        </nav>
      </div>

      <!-- 2-COLUMN SPLIT HERO SHOWCASE -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
        <!-- LEFT COLUMN: Content & Action (7 cols) -->
        <div class="lg:col-span-7 text-left">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.2em] text-[#5eb74c] mb-2.5">
            <span class="w-2 h-2 rounded-full bg-[#5eb74c] inline-block animate-pulse"></span>
            {esc(eyebrow)}
          </div>
          <h1 class="text-2xl sm:text-[34px] lg:text-[40px] font-extrabold text-white mb-3.5 leading-[1.35] tracking-normal drop-shadow-md">
            {esc(h1)}
          </h1>
          {lead_html}
          <div class="flex flex-wrap items-center gap-2 sm:gap-2.5 mb-7">
            {badges_rendered}
          </div>
          <div class="flex flex-wrap items-center gap-3.5 sm:gap-4">
            <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-7 py-3.5 transition flex items-center gap-2 shadow-lg shadow-[#1A9900]/30 border border-[#5eb74c]/50">
              <span>Yêu Cầu Báo Giá Nhanh</span>
              <i class="fa-solid fa-arrow-right text-[11px]"></i>
            </a>
            <a href="tel:0911138583" class="border border-white/30 hover:border-[#5eb74c] hover:bg-white/10 text-white font-bold text-xs uppercase tracking-wider px-6 py-3.5 transition flex items-center gap-2 backdrop-blur-sm">
              <i class="fa-solid fa-phone text-[#5eb74c]"></i>
              <span>Hotline: 091.113.8583</span>
            </a>
          </div>
        </div>

        <!-- RIGHT COLUMN: THE FOREGROUND PRODUCT SHOWCASE (5 cols) -->
        <div class="lg:col-span-5 relative">
          <div class="relative mx-auto max-w-[420px] lg:max-w-none">
            <div class="absolute -inset-2 bg-gradient-to-tr from-[#1A9900]/25 to-blue-500/20 rounded-2xl blur-xl opacity-70 pointer-events-none"></div>
            <div class="relative bg-gradient-to-b from-white/[0.12] to-white/[0.04] border border-white/20 p-5 sm:p-6 backdrop-blur-xl shadow-2xl overflow-hidden group">
              <!-- Top Floating Badge -->
              <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 shadow-md flex items-center gap-1.5 border border-white/20 z-20">
                <i class="{top_badge_icon}"></i>
                <span>{top_badge_text}</span>
              </div>

              <!-- Foreground Product Image (100% Crisp, High Res, Unobscured!) -->
              <div class="pt-6 pb-2 px-2 flex items-center justify-center min-h-[200px] sm:min-h-[230px]">
                <img src="{foreground_img}" alt="{esc(h1)}" class="max-h-[190px] sm:max-h-[220px] w-auto object-contain mx-auto drop-shadow-[0_15px_25px_rgba(0,0,0,0.6)] transform group-hover:scale-105 transition-transform duration-500" loading="eager" />
              </div>

              <!-- Bottom Caption Strip & Floating Badge -->
              <div class="pt-3 border-t border-white/15 flex items-center justify-between text-xs text-gray-200">
                <div class="flex items-center gap-1.5 font-medium">
                  <i class="fa-solid fa-circle-check text-[#5eb74c]"></i>
                  <span>{showcase_caption}</span>
                </div>
                <span class="bg-[#0d1626]/80 text-[#84e372] text-[10.5px] font-bold px-2 py-0.5 border border-[#5eb74c]/40">
                  {bottom_badge_text}
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
"""


def section(inner, *, bg="white", pad="py-16", extra=""):
    style = f' style="background-color: {BEIGE};"' if bg == "beige" else ""
    cls = "bg-white" if bg == "white" else ("bg-[#f5f8fb]" if bg == "light" else
                                           (f"bg-[{DARK}]" if bg == "dark" else ""))
    return f"""
  <section class="{pad} {cls} {extra}"{style}>
    <div class="{WRAP}">{inner}
    </div>
  </section>
"""


def heading(*, eyebrow, title, sub="", center=True, dark=False):
    al = "text-center max-w-3xl mx-auto" if center else ""
    tc = "text-white" if dark else "text-[#181923]"
    sc = "text-gray-300" if dark else "text-gray-500"
    s = f'\n        <p class="{sc} text-[15px] leading-relaxed mt-4">{sub}</p>' if sub else ""
    return f"""
      <div class="{al} mb-12">
        <span class="text-[{BRAND}] font-bold text-xs uppercase tracking-[0.2em] block mb-3">{esc(eyebrow)}</span>
        <h2 class="text-2xl sm:text-[34px] font-bold {tc} leading-tight">{title}</h2>{s}
      </div>"""


# --------------------------------------------------------------- answer-first block
def answer_first(items):
    """3 câu trả lời nhanh đầu trang: trang này là gì – cho ai – giải quyết gì.
    Đây là đoạn AI trích dẫn, nên đặt ngay sau hero và luôn có text thật."""
    rows = "".join(f"""
          <div class="border-l-2 border-[{BRAND}] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[{BRAND}] mb-2">{esc(k)}</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">{v}</p>
          </div>""" for k, v in items)
    return f"""
  <section class="py-10 border-b border-gray-200" style="background-color: {BEIGE};">
    <div class="{WRAP}">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">{rows}
      </div>
    </div>
  </section>
"""


# ------------------------------------------------------------------------ CTA
def cta_row(limit=6, ga="cta_click"):
    """6 CTA chuẩn theo Bộ hồ sơ §8.3 — phải xuất hiện xuyên suốt website."""
    cards = "".join(f"""
        <a href="{c['url']}" data-ga="{ga}" class="group bg-white border border-gray-200 hover:border-[{BRAND}] p-5 flex items-center space-x-4 transition">
          <span class="w-11 h-11 bg-[{DARK}] group-hover:bg-[{BRAND}] text-white flex items-center justify-center flex-shrink-0 transition">
            <i class="{c['icon']}"></i>
          </span>
          <span class="text-[14.5px] font-bold text-[#181923] group-hover:text-[{BRAND}] transition leading-snug">{esc(c['label'])}</span>
        </a>""" for c in SITE["cta6"][:limit])
    return f"""
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">{cards}
      </div>"""


def cta_band(*, title, text, primary=("Yêu cầu báo giá", "/nhan-tu-van/bao-gia/"),
             secondary=None):
    sec = ""
    if secondary:
        sec = (f'<a href="{secondary[1]}" class="border border-gray-500 hover:border-[{BRAND}] '
               f'hover:text-[{BRAND}] text-white font-bold text-xs uppercase tracking-wider '
               f'px-8 py-4 transition">{esc(secondary[0])}</a>')
    return f"""
  <section class="py-14 bg-[{DARK}] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/banners/hero_office_solutions_1787899910391.jpg');">
    <div class="{WRAP} flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">{title}</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">{text}</p>
      </div>
      <div class="flex flex-wrap items-center gap-4 flex-shrink-0">
        <a href="{primary[1]}" data-ga="cta_click" class="bg-[{BRAND}] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">{esc(primary[0])}</a>
        {sec}
        <a href="tel:{SITE['hotline_primary_tel']}" data-ga="click_hotline" class="text-white font-bold text-sm hover:text-[{BRAND}] transition">
          <i class="fa-solid fa-phone text-[{BRAND}] mr-2"></i>{SITE['hotline_primary']}
        </a>
      </div>
    </div>
  </section>
"""


# ------------------------------------------------------------------- data tables
def spec_table(specs, *, caption="Thông số kỹ thuật"):
    """specs: dict — trường 'Specifications' bắt buộc của mỗi sản phẩm."""
    rows = "".join(f"""
            <tr class="border-b border-gray-200 last:border-0">
              <th scope="row" class="text-left align-top py-3 pr-6 w-[42%] text-[14px] font-semibold text-[#181923]">{esc(k)}</th>
              <td class="py-3 text-[14.5px] text-gray-600">{esc(v)}</td>
            </tr>""" for k, v in specs.items())
    return f"""
      <div class="overflow-x-auto border border-gray-200">
        <table class="w-full min-w-[520px] bg-white">
          <caption class="text-left px-5 py-4 bg-[{DARK}] text-white text-sm font-bold uppercase tracking-wider">{esc(caption)}</caption>
          <tbody class="px-5">{rows}
          </tbody>
        </table>
      </div>"""


def matrix_table(headers, rows, *, caption=""):
    """Bảng so sánh / bảng gói / bảng SLA."""
    th = "".join(f'<th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase '
                 f'tracking-wider text-white">{esc(h)}</th>' for h in headers)
    tr = ""
    for r in rows:
        tds = "".join(
            (f'<th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">{c}</th>'
             if i == 0 else
             f'<td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">{c}</td>')
            for i, c in enumerate(r))
        tr += f'\n            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50">{tds}</tr>'
    cap = (f'<caption class="text-left px-5 py-4 bg-white border border-b-0 border-gray-200 '
           f'text-sm font-bold text-[#181923] uppercase tracking-wider">{esc(caption)}</caption>'
           if caption else "")
    return f"""
      <div class="overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-200 bg-white">
          {cap}
          <thead class="bg-[{DARK}]"><tr>{th}</tr></thead>
          <tbody>{tr}
          </tbody>
        </table>
      </div>"""


# -------------------------------------------------------------------------- FAQ
def faq_block(faqs, *, title="Câu hỏi thường gặp"):
    """faqs = [(q, a_html), ...] — text nằm sẵn trong DOM để khớp FAQPage schema."""
    items = "".join(f"""
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[{BRAND}] transition">{esc(q)}</span>
            <i class="fa-solid fa-plus text-[{BRAND}] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">{a}</div>
        </details>""" for q, a in faqs)
    return f"""
      <h2 class="text-2xl sm:text-[32px] font-bold text-[#181923] mb-8">{esc(title)}</h2>
      <div class="space-y-3">{items}
      </div>"""


# ------------------------------------------------------------------- cards / grid
def card_grid(cards, *, cols=3):
    """cards = [{title,url,text,image?,icon?,tag?}]"""
    out = ""
    for c in cards:
        media = ""
        if c.get("image"):
            media = (f'<div class="h-52 overflow-hidden"><img src="{c["image"]}" alt="{esc(c["title"])}" '
                     f'loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>')
        elif c.get("icon"):
            media = (f'<div class="px-6 pt-6"><span class="w-12 h-12 bg-[{DARK}] group-hover:bg-[{BRAND}] '
                     f'text-white flex items-center justify-center transition"><i class="{c["icon"]} text-lg"></i></span></div>')
        tag = (f'<span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] '
               f'text-[{BRAND}] mb-2">{esc(c["tag"])}</span>') if c.get("tag") else ""
        out += f"""
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: {BEIGE};">
          {media}
          <div class="p-6 flex flex-col flex-1">
            {tag}
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[{BRAND}] transition leading-snug">
              <a href="{c['url']}">{esc(c['title'])}</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">{c['text']}</p>
            <a href="{c['url']}" class="inline-flex items-center space-x-1 text-[{BRAND}] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>{esc(c.get('cta', 'Xem chi tiết'))}</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>"""
    return f"""
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-{cols} gap-6">{out}
      </div>"""


def timeline(steps, *, title=""):
    """steps = [(mốc, việc, cam kết)] — dùng cho khối Implementation."""
    t = (f'<h2 class="text-2xl sm:text-[32px] font-bold text-[#181923] mb-8">{esc(title)}</h2>'
         if title else "")
    out = ""
    for i, (mark, work, commit) in enumerate(steps):
        out += f"""
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[{BRAND}] text-white text-[12px] font-bold flex items-center justify-center">{i + 1}</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[{BRAND}] mb-1.5">{esc(mark)}</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">{esc(work)}</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">{commit}</p>
        </li>"""
    return f"{t}\n      <ol class=\"mt-2\">{out}\n      </ol>"


def bullets(items, *, cols=2, icon="fa-solid fa-check"):
    out = "".join(f"""
        <li class="flex items-start space-x-3">
          <i class="{icon} text-[{BRAND}] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">{i}</span>
        </li>""" for i in items)
    return f'<ul class="grid grid-cols-1 md:grid-cols-{cols} gap-x-10 gap-y-3.5">{out}\n      </ul>'


def prose(paras):
    return "".join(f'\n        <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">{p}</p>'
                   for p in paras)


def note(text, *, kind="info"):
    """Ghi chú tuân thủ — dùng để tách rõ 'năng lực hiện có' vs 'định hướng'."""
    color = {"info": BRAND, "warn": "#c2410c"}[kind]
    return f"""
      <div class="border-l-4 border-[{color}] bg-[#f5f8fb] px-6 py-5">
        <p class="text-[14.5px] text-gray-600 leading-relaxed">{text}</p>
      </div>"""
