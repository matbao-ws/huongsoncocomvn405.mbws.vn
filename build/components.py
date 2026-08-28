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


# ------------------------------------------------------------------- page header
def page_hero(*, eyebrow, h1, lead, trail, image="/assets/images/hero-office.jpg"):
    """Banner đầu trang + breadcrumb hiển thị (schema BreadcrumbList sinh riêng)."""
    crumbs = []
    for i, (label, url) in enumerate(trail):
        last = i == len(trail) - 1
        if last:
            crumbs.append(f'<span class="text-[#5eb74c] font-semibold" aria-current="page">{esc(label)}</span>')
        else:
            crumbs.append(f'<a href="{url}" class="text-gray-300 hover:text-white transition">{esc(label)}</a>')
    sep = ' <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> '
    return f"""
  <!-- PAGE HERO -->
  <section class="relative min-h-[320px] sm:min-h-[380px] flex items-center overflow-hidden" style="background: linear-gradient(135deg, #10203C 0%, #193877 60%, #204DA4 100%);">
    <div class="absolute inset-0 z-0">
      <img src="{image}" alt="{esc(h1)}" class="w-full h-full object-cover object-center opacity-25" loading="eager" />
      <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(16, 32, 60, 0.90) 0%, rgba(16, 32, 60, 0.82) 100%);"></div>
    </div>
    <div class="relative z-10 {WRAP} py-14 sm:py-16 w-full text-center">
      <span class="font-handwriting text-2xl sm:text-3xl text-[#5eb74c] font-bold block mb-2">{esc(eyebrow)}</span>
      <h1 class="text-2xl sm:text-[38px] lg:text-[42px] font-bold text-white mb-4 leading-tight tracking-tight drop-shadow-sm">{esc(h1)}</h1>
      <p class="max-w-3xl mx-auto text-gray-200 text-[15px] sm:text-[16px] leading-relaxed">{lead}</p>
      <nav class="mt-6 text-[13px] text-gray-300 flex items-center justify-center flex-wrap" aria-label="Breadcrumb">
        {sep.join(crumbs)}
      </nav>
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
  <section class="py-14 bg-[{DARK}] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/xxx_home-bg_xxx.jpg');">
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
