# -*- coding: utf-8 -*-
"""Trang giải pháp — đúng 6 khối khách yêu cầu:
Problem → Solution → Equipment → Implementation → Service → ROI
"""
import render
import schema
import components as C
import forms
from render import SITE, BRAND, DARK
from components import esc, WRAP, BEIGE

SOLUTIONS = render.load("solutions.json")
BY_SLUG = {s["slug"]: s for s in SOLUTIONS}


def _block(num, label, title, inner):
    """Khối có số thứ tự để người đọc và AI đều thấy rõ cấu trúc 6 bước."""
    return f"""
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 py-14 border-t border-gray-200 first:border-t-0 first:pt-0">
        <div class="lg:col-span-4">
          <div class="flex items-start space-x-4 lg:sticky lg:top-28">
            <span class="w-11 h-11 bg-[{BRAND}] text-white font-bold text-[15px] flex items-center justify-center flex-shrink-0">{num}</span>
            <div>
              <p class="text-[11px] font-bold uppercase tracking-[0.2em] text-[{BRAND}] mb-1.5">{esc(label)}</p>
              <h2 class="text-[22px] sm:text-[26px] font-bold text-[#181923] leading-tight">{esc(title)}</h2>
            </div>
          </div>
        </div>
        <div class="lg:col-span-8">{inner}
        </div>
      </div>"""


def render_solution(s):
    trail = [("Trang chủ", "/"), ("Giải pháp", "/giai-phap/")]
    if s.get("parent"):
        p = BY_SLUG[s["parent"]]
        trail.append((p["h1"], p["url"]))
    trail.append((s["h1"], s["url"]))

    hero_img = "/assets/images/hero-education.jpg" if "giao-duc" in s.get("url", "") or s.get("slug") == "in-de-thi-tai-lieu" else "/assets/images/hero-solutions.jpg"
    body = C.page_hero(eyebrow=s["eyebrow"], h1=s["h1"], lead=esc(s["lead"]), trail=trail, image=hero_img)
    body += C.answer_first([(k, v) for k, v in s["answer_first"]])

    # 1. PROBLEM
    b1 = C.bullets([esc(p) for p in s["problem"]], cols=1, icon="fa-solid fa-circle-exclamation")

    # 2. SOLUTION
    if s.get("packages"):
        cards = "".join(f"""
          <a href="{p['url']}" class="group border border-gray-200 p-6 flex flex-col transition hover:border-[{BRAND}]" style="background-color: {BEIGE};">
            <span class="w-11 h-11 bg-[{DARK}] group-hover:bg-[{BRAND}] text-white flex items-center justify-center mb-4 transition"><i class="{p['icon']}"></i></span>
            <span class="text-[10.5px] font-bold uppercase tracking-[0.18em] text-[{BRAND}] mb-2">{esc(p['code'])}</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[{BRAND}] transition leading-snug">{esc(p['title'])}</h3>
            <p class="text-[14.5px] text-gray-500 leading-relaxed flex-1">{esc(p['text'])}</p>
            <span class="inline-flex items-center space-x-1 text-[{BRAND}] font-bold text-xs uppercase tracking-wider mt-4">
              <span>Xem giải pháp</span><i class="fa-solid fa-arrow-right text-[10px]"></i>
            </span>
          </a>""" for p in s["packages"])
        b2 = (f'<p class="text-[15.5px] text-gray-600 leading-[1.85] mb-7">{esc(s["solution_intro"])}</p>'
              f'\n        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">{cards}\n        </div>')
    else:
        b2 = (f'<p class="text-[15.5px] text-gray-600 leading-[1.85] mb-6">{esc(s["solution_intro"])}</p>'
              + C.bullets([esc(x) for x in s["solution_points"]], cols=1))

    # 3. EQUIPMENT
    rows = [[f'<a href="{e["url"]}" class="text-[#181923] hover:text-[{BRAND}] transition">{esc(e["name"])}</a>',
             esc(e["note"])] for e in s["equipment"]]
    b3 = C.matrix_table(["Nhóm thiết bị", "Vai trò trong giải pháp"], rows)

    # 4. IMPLEMENTATION
    b4 = C.timeline([(m, w, esc(c)) for m, w, c in s["implementation"]])

    # 5. SERVICE
    b5 = C.bullets([esc(x) for x in s["service"]], cols=1)
    if s.get("sla"):
        b5 += ('\n        <div class="mt-8">'
               + C.matrix_table(["Cấp độ sự cố", "Tiếp nhận", "Mục tiêu xử lý"],
                                [[esc(a), esc(b), esc(c)] for a, b, c in s["sla"]],
                                caption="Cam kết dịch vụ (SLA) đề xuất")
               + "</div>")

    # 6. ROI
    b6 = f'<p class="text-[15.5px] text-gray-600 leading-[1.85] mb-7">{esc(s["roi_intro"])}</p>'
    b6 += C.matrix_table(["Hạng mục chi phí", "Phương án mua", "Phương án thuê / dịch vụ"],
                         [[esc(a), esc(b), esc(c)] for a, b, c in s["roi"]])
    b6 += '\n        <div class="mt-7">' + C.note(esc(s["roi_note"])) + "</div>"

    inner = (_block(1, "Problem", "Bài toán của đơn vị", b1)
             + _block(2, "Solution", "Giải pháp Hương Sơn", b2)
             + _block(3, "Equipment", "Thiết bị trong giải pháp", b3)
             + _block(4, "Implementation", "Quy trình triển khai", b4)
             + _block(5, "Service", "Dịch vụ và cam kết", b5)
             + _block(6, "ROI", "Hiệu quả đầu tư", b6))
    body += C.section(inner, pad="py-16")

    # FAQ + form
    body += C.section(f"""
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14">
        <div class="lg:col-span-7">{C.faq_block([(q, a) for q, a in s["faqs"]])}
        </div>
        <div class="lg:col-span-5" id="tu-van">
          {forms.lead_form(form_id="sol-" + s["slug"], page_type="solution",
                           solution_slug=s["slug"], preset_nhu_cau=s.get("nhu_cau_code", ""),
                           title=s.get("form_title", "Nhận phương án và báo giá"),
                           compact=bool(s.get("nhu_cau_code")))}
        </div>
      </div>""", bg="light")

    # Liên kết nội bộ chuỗi (Bộ SEO §8: biến 1 lượt truy cập thành cơ hội Account)
    if s.get("next"):
        links = "".join(
            f'<a href="{u}" class="border border-gray-200 bg-white px-5 py-4 text-[14.5px] font-bold '
            f'text-[#181923] hover:border-[{BRAND}] hover:text-[{BRAND}] transition flex items-center '
            f'justify-between"><span>{esc(l)}</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a>'
            for l, u in s["next"])
        body += C.section(C.heading(eyebrow="Xem thêm", title="Giải pháp liên quan")
                          + f'<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">{links}</div>')

    body += C.cta_band(
        title=s.get("cta_title", "Cần một phương án cụ thể cho đơn vị của Quý khách?"),
        text=s.get("cta_text", "Hương Sơn khảo sát nhu cầu, đề xuất cấu hình thiết bị, định mức vật tư và cơ cấu giá để Quý đơn vị đưa vào dự toán."),
        primary=("Yêu cầu báo giá", "/nhan-tu-van/bao-gia/"),
        secondary=("Xem dự án đã triển khai", "/du-an/"))

    ld = [schema.organization(), schema.breadcrumb(trail),
          schema.service(s, s["url"]), schema.faqpage([(q, C.re.sub(r"<[^>]+>", "", a)) for q, a in s["faqs"]]),
          schema.howto(f"Quy trình triển khai: {s['name']}",
                       [(w, c) for _, w, c in s["implementation"]],
                       description=s["summary"])]

    return render.page(title=s["seo_title"], description=s["seo_desc"], url=s["url"],
                       keywords=s.get("keywords", ""), body=body, jsonld=ld,
                       active="/giai-phap/")


def render_hub():
    trail = [("Trang chủ", "/"), ("Giải pháp", "/giai-phap/")]
    body = C.page_hero(
        eyebrow="Solutions",
        h1="Giải pháp thiết bị, in ấn và số hóa theo ngành",
        lead="8 giải pháp Hương Sơn xây dựng theo đúng bài toán từng ngành — mỗi giải pháp trình bày theo 6 bước: Problem → Solution → Equipment → Implementation → Service → ROI.",
        trail=trail,
        image="/assets/images/hero-solutions.jpg")
    body += C.answer_first([
        ["Trang này là gì", "Trang tổng hợp toàn bộ giải pháp theo ngành mà Hương Sơn cung cấp."],
        ["Dành cho ai", "Khách hàng muốn tìm giải pháp phù hợp với ngành hoặc nhu cầu cụ thể của đơn vị mình."],
        ["Giải quyết vấn đề gì", "Định hướng nhanh đến đúng giải pháp thay vì phải tự suy luận từ danh mục sản phẩm."],
    ])
    top_level = [s for s in SOLUTIONS if not s.get("parent")]
    cards = [{
        "title": s["h1"], "url": s["url"], "icon": "fa-solid fa-diagram-project",
        "tag": s["eyebrow"], "text": esc(s["summary"][:150] + "…"),
    } for s in top_level]
    body += C.section(C.card_grid(cards, cols=4), pad="py-16")
    body += C.cta_band(title="Chưa chắc giải pháp nào phù hợp?",
                       text="Mô tả ngành và nhu cầu cụ thể — Hương Sơn tư vấn đúng giải pháp và gói dịch vụ.")
    ld = [schema.organization(), schema.breadcrumb(trail),
          schema.itemlist("Giải pháp Hương Sơn", [(s["h1"], s["url"]) for s in top_level])]
    return render.page(title="Giải pháp thiết bị, in ấn, số hóa theo ngành | Hương Sơn",
                       description="8 giải pháp Hương Sơn cho Giáo dục, Cơ quan Nhà nước, Ngân hàng, Doanh nghiệp: in đề thi, scan số hóa, cho thuê thiết bị, quản lý vận hành.",
                       url="/giai-phap/", body=body, jsonld=ld, active="/giai-phap/")


def build(write):
    write("/giai-phap/", render_hub())
    for s in SOLUTIONS:
        write(s["url"], render_solution(s))
    print(f"  giải pháp: 1 hub + {len(SOLUTIONS)} trang")
