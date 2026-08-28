# -*- coding: utf-8 -*-
"""Trang dự án / case study — theo mẫu Khách hàng, Bài toán, Giải pháp, Thiết bị,
Thời gian, Kết quả, Bằng chứng hồ sơ. Tuân thủ Phụ lục C: không công bố nội dung
đề thi/dữ liệu nhạy cảm; chỉ dùng tên/logo khách hàng khi có quyền công bố.
"""
import render
import schema
import components as C
import forms
from render import BRAND
from components import esc, BEIGE

PROJECTS = render.load("projects.json")


def render_project(p):
    trail = [("Trang chủ", "/"), ("Dự án", "/du-an/"), (p["title"], p["url"])]
    body = C.page_hero(eyebrow=p["eyebrow"], h1=p["title"],
                       lead=f'{esc(p["customer"])} · {esc(p["year"])}', trail=trail)

    facts = [
        ("Khách hàng", esc(p["customer"])), ("Nhiệm vụ", esc(p["task"])),
        ("Thiết bị", esc(p["equipment"])), ("Thời gian", esc(p["duration"])),
        ("Giá trị", esc(p["value"])), ("Hồ sơ", esc(p["docs"])),
    ]
    fact_html = "".join(f"""
          <div class="border-l-2 border-[{BRAND}] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[{BRAND}] mb-1.5">{k}</p>
            <p class="text-[15px] text-[#181923] font-semibold leading-relaxed">{v}</p>
          </div>""" for k, v in facts)
    body += C.section(f'<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">{fact_html}</div>',
                      bg="beige", pad="py-12")

    inner = (f'<p class="text-[15.5px] text-gray-600 leading-[1.85] mb-10 max-w-4xl">{esc(p["summary"])}</p>'
             + '<h2 class="text-[13px] font-bold uppercase tracking-[0.16em] text-[#181923] mb-3">Bài toán</h2>'
             + f'<p class="text-[15.5px] text-gray-600 leading-[1.85] mb-8 max-w-4xl">{esc(p["problem"])}</p>'
             + '<h2 class="text-[13px] font-bold uppercase tracking-[0.16em] text-[#181923] mb-3">Giải pháp</h2>'
             + f'<p class="text-[15.5px] text-gray-600 leading-[1.85] mb-8 max-w-4xl">{esc(p["solution"])}</p>'
             + '<h2 class="text-[13px] font-bold uppercase tracking-[0.16em] text-[#181923] mb-4">Kết quả</h2>'
             + C.bullets([esc(r) for r in p["result"]], cols=1))
    body += C.section(inner, pad="py-16")

    if p.get("note"):
        body += C.section(C.note(esc(p["note"])), bg="light")

    body += C.section(f"""
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14">
        <div class="lg:col-span-7">
          <h2 class="text-2xl sm:text-[32px] font-bold text-[#181923] mb-4">Cần một phương án tương tự?</h2>
          <p class="text-[15.5px] text-gray-600 leading-relaxed mb-6">
            Xem <a class="text-[{BRAND}] font-medium hover:underline" href="{p['related_solution']}">giải pháp liên quan</a>
            hoặc gửi yêu cầu để Hương Sơn tư vấn phương án phù hợp với đơn vị của Quý khách.
          </p>
        </div>
        <div class="lg:col-span-5">
          {forms.lead_form(form_id="proj-" + p["slug"], page_type="project",
                           title="Yêu cầu phương án tương tự", compact=False)}
        </div>
      </div>""")

    ld = [schema.organization(), schema.breadcrumb(trail),
          schema.article({"title": p["title"], "summary": p["summary"], "date": p["year"],
                          "schema_type": "Article"}, p["url"])]

    return render.page(title=p["seo_title"], description=p["seo_desc"], url=p["url"],
                       body=body, jsonld=ld, og_type="article", active="/du-an/")


def render_hub():
    trail = [("Trang chủ", "/"), ("Dự án", "/du-an/")]
    body = C.page_hero(eyebrow="Case Study",
                       h1="Dự án đã triển khai",
                       lead="Các dự án Hương Sơn đã thực hiện, có hồ sơ hợp đồng, bàn giao và nghiệm thu làm bằng chứng năng lực.",
                       trail=trail)
    body += C.answer_first([
        ["Trang này là gì", "Danh sách dự án Hương Sơn đã triển khai, mỗi dự án có bằng chứng hồ sơ cụ thể."],
        ["Dành cho ai", "Khách hàng muốn xem năng lực triển khai thực tế của Hương Sơn trước khi quyết định hợp tác."],
        ["Giải quyết vấn đề gì", "Chứng minh năng lực bằng dự án cụ thể thay vì chỉ mô tả chung chung."],
    ])
    cards = [{
        "title": p["title"], "url": p["url"], "tag": p["eyebrow"],
        "text": esc(p["summary"][:160] + "…"), "cta": "Xem case study",
    } for p in PROJECTS]
    body += C.section(C.card_grid(cards, cols=3), pad="py-16")
    body += C.cta_band(title="Cần xem thêm năng lực triển khai của Hương Sơn?",
                       text="Tải hồ sơ năng lực đầy đủ hoặc liên hệ trực tiếp để trao đổi chi tiết.",
                       primary=("Tải hồ sơ năng lực", "/ve-huong-son/tai-nguyen/"),
                       secondary=("Yêu cầu báo giá", "/nhan-tu-van/bao-gia/"))
    ld = [schema.organization(), schema.breadcrumb(trail),
          schema.itemlist("Dự án Hương Sơn", [(p["title"], p["url"]) for p in PROJECTS])]
    return render.page(title="Dự án – Case study đã triển khai | Hương Sơn",
                       description="Các dự án Hương Sơn đã triển khai cho Sở GD&ĐT và hệ thống ngân hàng, có hồ sơ hợp đồng, bàn giao và nghiệm thu.",
                       url="/du-an/", body=body, jsonld=ld, active="/du-an/")


def build(write):
    write("/du-an/", render_hub())
    for p in PROJECTS:
        write(p["url"], render_project(p))
    print(f"  dự án: 1 hub + {len(PROJECTS)} case study")
