# -*- coding: utf-8 -*-
"""Chrome dùng chung cho toàn bộ website Hương Sơn.

Giữ nguyên ngôn ngữ thiết kế của mẫu 8324 khách đã duyệt:
xanh lá #1A9900 (đúng mã màu trong logo vector chính thức), header trắng thanh lịch để làm nổi bật logo nguyên bản,
phong cách vuông vức/flat, Plus Jakarta Sans.
Mọi đường dẫn dùng root-absolute (/assets/...) để trang ở thư mục sâu vẫn đúng.
"""
import json
import os

ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
DATA = os.path.join(os.path.dirname(os.path.abspath(__file__)), "data")


def load(name):
    with open(os.path.join(DATA, name), encoding="utf-8") as f:
        return json.load(f)


SITE = load("site.json")
NAV = load("nav.json")

BRAND = "#1A9900"
DARK = "#181924"
LIGHT_BG = "#f8fafc"


# --------------------------------------------------------------------------- head
def head(*, title, description, url, keywords="", og_type="website", jsonld=None,
         robots="index,follow"):
    canonical_origin = SITE.get('canonical_origin') or SITE.get('website', 'https://huongsonco.com.vn')
    canonical = f"{canonical_origin}{url}"
    og_img = f"{canonical_origin}{SITE.get('og_image', '/assets/images/brand/logo-huong-son.svg')}"
    schema_tags = ""
    if jsonld:
        schema_tags = (
            '\n  <script type="application/ld+json">\n'
            + json.dumps(jsonld, ensure_ascii=False, indent=2)
            + "\n  </script>"
        )

    # Đọc inline blocks phục vụ CMS Visual Editor nếu có
    blocks = ""
    ib = os.path.join(ROOT, "resources", "views", "client", "partials", "inline-blocks.blade.php")
    if os.path.exists(ib):
        try:
            with open(ib, encoding="utf-8") as f:
                blocks = "\n" + f.read().strip()
        except Exception:
            pass

    return f"""<!doctype html>
<html lang="vi" class="scroll-smooth">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>{title}</title>
  <meta name="description" content="{description}" />
  <meta name="robots" content="{robots}" />
  <link rel="canonical" href="{canonical}" />

  <meta property="og:type" content="{og_type}" />
  <meta property="og:title" content="{title}" />
  <meta property="og:description" content="{description}" />
  <meta property="og:url" content="{canonical}" />
  <meta property="og:image" content="{og_img}" />

  <link rel="icon" href="/assets/images/brand/favicon.svg" type="image/svg+xml" />
  <link rel="icon" href="/assets/images/favicon-32.png" sizes="32x32" type="image/png" />
  <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png" />

  <!-- Google Fonts: Plus Jakarta Sans + Dancing Script -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {{
      theme: {{
        extend: {{
          colors: {{
            brand: {{
              green: '{BRAND}',
              greenHover: '#147700',
              greenAccent: '#35a05e',
              dark: '{DARK}',
              deepDark: '#12131c',
              text: '#5b5d62',
              heading: '#181923',
              beige: 'rgb(247, 243, 238)',
              lightBg: '{LIGHT_BG}',
            }}
          }},
          fontFamily: {{
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
            handwriting: ['"Dancing Script"', 'cursive'],
          }}
        }}
      }}
    }}
  </script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="/assets/css/custom.css?v=2.0.1" />{blocks}{schema_tags}
</head>

<body class="bg-white text-[#5b5d62] antialiased selection:bg-[{BRAND}] selection:text-white">
"""


# ------------------------------------------------------------------------- topbar
def topbar():
    socials = "".join(
        f'<a href="{s["url"]}" class="w-7 h-7 bg-gray-800 flex items-center justify-center '
        f'hover:bg-[{BRAND}] hover:text-white transition" title="{s["label"]}">'
        f'<i class="{s["icon"]} text-xs"></i></a>'
        for s in SITE["socials"])
    return f"""
  <!-- TOP BAR -->
  <div id="top-bar" class="bg-[{DARK}] border-b border-gray-800 text-gray-300 text-xs hidden lg:block">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 h-12 flex items-center justify-between">
      <div class="flex items-center space-x-6">
        <div class="flex items-center space-x-2 hover:text-[{BRAND}] transition">
          <i class="fa-solid fa-location-dot text-[{BRAND}]"></i>
          <span>{SITE['address']}</span>
        </div>
        <div class="flex items-center space-x-2 hover:text-[{BRAND}] transition">
          <i class="fa-regular fa-clock text-[{BRAND}]"></i>
          <span>{SITE['hours']}</span>
        </div>
        <div class="flex items-center space-x-2 hover:text-[{BRAND}] transition">
          <i class="fa-solid fa-phone text-[{BRAND}]"></i>
          <a href="tel:{SITE['hotline_primary_tel']}" data-ga="click_hotline">{SITE['hotline_primary']}</a>
        </div>
      </div>
      <div class="flex items-center space-x-6">
        <a href="/ve-huong-son/tai-nguyen/" class="hover:text-[{BRAND}] transition">
          <i class="fa-solid fa-download text-[{BRAND}] mr-1.5"></i>Hồ sơ năng lực
        </a>
        <div class="flex items-center space-x-3">{socials}</div>
      </div>
    </div>
  </div>
"""


# ------------------------------------------------------------------------- header
def _logo(cls="h-11 sm:h-12"):
    """Logo vector chuẩn SVG nguyên bản của Hương Sơn (100% trong suốt)."""
    return f'<img src="{SITE["logo"]}" alt="{SITE["name"]}" class="{cls} w-auto object-contain" />'


def header(active=""):
    items = ""
    for m in NAV:
        is_active = active == m["url"] or (active.startswith(m["url"]) and m["url"] != "/")
        color = f"text-[{BRAND}] font-bold" if is_active else f"text-gray-800 hover:text-[{BRAND}] font-semibold"
        if m.get("children"):
            links = "".join(
                f'<a href="{c["url"]}" class="block px-4 py-2.5 text-sm text-gray-700 '
                f'hover:bg-gray-50 hover:text-[{BRAND}] transition font-medium">{c["label"]}</a>'
                for c in m["children"])
            items += f"""
        <div class="relative has-dropdown group py-2">
          <a href="{m['url']}" class="nav-link {color} text-sm flex items-center space-x-1 group-hover:text-[{BRAND}] transition">
            <span>{m['label']}</span>
            <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200 group-hover:rotate-180"></i>
          </a>
          <div class="dropdown-menu absolute top-full left-0 w-80 bg-white border border-gray-100 shadow-xl py-2 z-50 rounded-b-md">{links}
          </div>
        </div>"""
        else:
            items += (f'\n        <a href="{m["url"]}" class="nav-link {color} '
                      f'text-sm transition py-2">{m["label"]}</a>')
    return f"""
  <!-- MAIN HEADER -->
  <header class="site-header bg-white w-full z-40 transition-all duration-300 border-b border-gray-100 shadow-sm sticky top-0">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">

      <a href="/" class="flex items-center" aria-label="{SITE['name']} – Trang chủ">{_logo()}</a>

      <nav class="hidden xl:flex items-center space-x-6" aria-label="Điều hướng chính">{items}
      </nav>

      <div class="hidden xl:flex items-center space-x-5">
        <button class="search-toggle text-gray-700 hover:text-[{BRAND}] transition text-base" aria-label="Tìm kiếm">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
        <a href="/nhan-tu-van/bao-gia/" class="bg-[{BRAND}] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-6 py-3 transition">
          YÊU CẦU BÁO GIÁ
        </a>
      </div>

      <div class="flex xl:hidden items-center space-x-3">
        <button class="search-toggle w-9 h-9 bg-gray-100 text-gray-700 flex items-center justify-center hover:bg-[{BRAND}] hover:text-white transition" aria-label="Tìm kiếm">
          <i class="fa-solid fa-magnifying-glass text-xs"></i>
        </button>
        <button id="mobile-menu-toggle" class="text-gray-800 hover:text-[{BRAND}] p-2 focus:outline-none" aria-label="Mở menu">
          <i class="fa-solid fa-bars-staggered text-2xl"></i>
        </button>
      </div>
    </div>
  </header>
"""


# ------------------------------------------------------------------------- footer
def footer():
    def col(title, links, span):
        li = "".join(f'<li><a href="{u}" class="hover:text-[{BRAND}] transition block text-gray-600">{l}</a></li>'
                     for l, u in links)
        return f"""
        <div class="lg:col-span-{span}">
          <h4 class="text-gray-900 text-[16px] font-bold mb-5 uppercase tracking-wider">{title}</h4>
          <ul class="space-y-3 text-[14.5px] font-normal">{li}</ul>
        </div>"""

    products = [(c["label"], c["url"]) for c in NAV[0]["children"][:6]]
    solutions = [(c["label"], c["url"]) for c in NAV[1]["children"][:6]]
    phones = "".join(
        f'''<li class="flex items-center space-x-3">
              <i class="fa-solid fa-phone text-[{BRAND}] text-sm flex-shrink-0"></i>
              <a href="tel:{h["tel"]}" data-ga="click_hotline" class="hover:text-[{BRAND}] transition font-semibold text-gray-800">{h["label"]}</a>
              <span class="text-gray-500 text-[13px]">({h["note"]})</span>
            </li>''' for h in SITE["hotlines"])

    return f"""
  <!-- FOOTER -->
  <footer class="bg-[{LIGHT_BG}] text-gray-600 pt-20 pb-10 border-t border-gray-200 relative">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-12 pb-14 border-b border-gray-200">

        <div class="lg:col-span-4 space-y-5">
          <a href="/" class="inline-block">{_logo('h-12 sm:h-14')}</a>
          <p class="text-[15px] text-gray-600 leading-relaxed max-w-md">
            {SITE['legal_name']} — {SITE['positioning']}.
          </p>
          <p class="text-[13.5px] text-gray-500">Mã số thuế: {SITE['mst']} · Thành lập {SITE['founded']}</p>
          <div class="flex flex-wrap gap-2 pt-1">
            {"".join(f'<span class="text-[11px] font-bold tracking-wider text-gray-700 border border-gray-300 bg-white px-2.5 py-1">{b}</span>' for b in SITE["brands"])}
          </div>
        </div>
{col("Sản phẩm", products, 2)}
{col("Giải pháp", solutions, 3)}
        <div class="lg:col-span-3">
          <h4 class="text-gray-900 text-[16px] font-bold mb-5 uppercase tracking-wider">Thông tin liên hệ</h4>
          <ul class="space-y-3.5 text-[14.5px] font-normal text-gray-600">
            <li class="flex items-start space-x-3">
              <i class="fa-solid fa-location-dot text-[{BRAND}] mt-1 text-sm flex-shrink-0"></i>
              <span class="leading-relaxed">{SITE['address']}</span>
            </li>
            {phones}
            <li class="flex items-center space-x-3">
              <i class="fa-regular fa-clock text-[{BRAND}] text-sm flex-shrink-0"></i>
              <span>{SITE['hours']}</span>
            </li>
            <li class="flex items-center space-x-3">
              <i class="fa-solid fa-envelope text-[{BRAND}] text-sm flex-shrink-0"></i>
              <a href="mailto:{SITE['email']}" class="hover:text-[{BRAND}] transition">{SITE['email']}</a>
            </li>
          </ul>
        </div>

      </div>

      <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-[14px] text-gray-500">
        <p>© Copyright 2026 {SITE['legal_name']} · Thiết kế web bởi <a href="https://www.matbao.ws/" target="_blank" rel="noopener" class="text-[{BRAND}] font-medium hover:underline">Mắt Bão WS</a></p>
        <div class="flex items-center space-x-6 mt-4 sm:mt-0">
          <a href="/dich-vu/" class="hover:text-[{BRAND}] transition">Dịch vụ</a>
          <span class="text-gray-400">•</span>
          <a href="/nhan-tu-van/" class="hover:text-[{BRAND}] transition">Nhận tư vấn</a>
        </div>
      </div>

    </div>
  </footer>
"""


# ------------------------------------------------------------- drawer / search / fab
def drawer():
    items = ""
    for m in NAV:
        if m.get("children"):
            subs = "".join(f'<a href="{c["url"]}" class="block py-1 hover:text-[{BRAND}]">{c["label"]}</a>'
                           for c in m["children"])
            items += f"""
      <div>
        <button class="mobile-dropdown-btn w-full flex items-center justify-between text-gray-800 font-semibold py-2 border-b border-gray-100 hover:text-[{BRAND}]">
          <span>{m['label']}</span>
          <i class="fa-solid fa-chevron-down text-xs"></i>
        </button>
        <div class="hidden pl-4 py-2 space-y-2 text-sm text-gray-600">
          <a href="{m['url']}" class="block py-1 text-[{BRAND}] font-semibold">Tổng quan</a>{subs}
        </div>
      </div>"""
        else:
            items += (f'\n      <a href="{m["url"]}" class="block text-gray-800 font-semibold py-2 '
                      f'border-b border-gray-100 hover:text-[{BRAND}]">{m["label"]}</a>')
    return f"""
  <!-- MOBILE DRAWER -->
  <div id="mobile-backdrop" class="fixed inset-0 bg-black/60 z-50 hidden opacity-0 transition-opacity duration-300"></div>
  <div id="mobile-drawer" class="fixed top-0 left-0 bottom-0 w-80 max-w-[85vw] bg-white z-50 shadow-2xl transform -translate-x-full transition-transform duration-300 flex flex-col">
    <div class="p-6 border-b border-gray-100 flex items-center justify-between">
      <a href="/">{_logo('h-10')}</a>
      <button id="mobile-menu-close" class="text-gray-500 hover:text-gray-900 p-2" aria-label="Đóng menu">
        <i class="fa-solid fa-xmark text-xl"></i>
      </button>
    </div>
    <div class="p-6 flex-1 overflow-y-auto space-y-3">{items}
    </div>
    <div class="p-6 border-t border-gray-100 bg-gray-50">
      <a href="tel:{SITE['hotline_primary_tel']}" data-ga="click_hotline" class="bg-[{BRAND}] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider py-3 w-full text-center block">
        <i class="fa-solid fa-phone mr-2"></i> {SITE['hotline_primary']}
      </a>
    </div>
  </div>

  <!-- SEARCH POPUP -->
  <div id="search-modal" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300 flex items-center justify-center p-4">
    <div class="bg-white border border-gray-200 w-full max-w-2xl p-6 sm:p-8 shadow-2xl relative rounded">
      <button id="search-close" class="absolute top-4 right-4 text-gray-400 hover:text-gray-800 p-2" aria-label="Đóng">
        <i class="fa-solid fa-xmark text-xl"></i>
      </button>
      <h3 class="text-lg font-bold text-gray-900 mb-4 uppercase">Tìm kiếm</h3>
      <form action="/ve-huong-son/kien-thuc/" method="get" class="relative">
        <input type="text" id="search-input" name="s" placeholder="VD: thuê máy in đề thi, máy scan tốc độ cao..." class="w-full bg-gray-50 border border-gray-300 text-gray-900 px-4 py-3 pr-12 text-sm focus:outline-none focus:border-[{BRAND}]" />
        <button type="submit" class="absolute right-4 top-1/2 -translate-y-1/2 text-[{BRAND}]" aria-label="Tìm">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </form>
    </div>
  </div>

  <!-- FLOATING BUTTONS -->
  <a href="tel:{SITE['hotline_primary_tel']}" data-ga="click_hotline" class="fixed bottom-24 right-6 z-40 w-12 h-12 bg-[{BRAND}] text-white flex items-center justify-center shadow-xl animate-pulse-phone" title="Gọi ngay">
    <i class="fa-solid fa-phone text-lg"></i>
  </a>
  <a href="{SITE['zalo']}" target="_blank" rel="noopener" data-ga="click_zalo" class="fixed bottom-8 right-6 z-40 w-12 h-12 bg-[#0068FF] text-white flex items-center justify-center shadow-xl" title="Chat Zalo">
    <span class="font-bold text-xs">Zalo</span>
  </a>
  <button id="back-to-top" class="fixed bottom-8 right-6 z-40 w-10 h-10 bg-gray-900 text-white flex items-center justify-center shadow-xl hover:bg-[{BRAND}] transition-all duration-300 opacity-0 invisible translate-y-4" aria-label="Lên đầu trang">
    <i class="fa-solid fa-arrow-up text-xs"></i>
  </button>

  <script src="/assets/js/main.js?v=2.0.1"></script>
</body>
</html>
"""


def page(*, title, description, url, body, keywords="", jsonld=None, og_type="website",
         active=""):
    """Ghép 1 trang hoàn chỉnh."""
    return (head(title=title, description=description, url=url, keywords=keywords,
                 jsonld=jsonld, og_type=og_type)
            + topbar() + header(active or url) + body + footer() + drawer())
