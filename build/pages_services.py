# -*- coding: utf-8 -*-
"""Trang dịch vụ: Bảo trì – Sửa chữa / Dịch vụ kỹ thuật / Vận hành thiết bị /
Thu mua máy cũ – Đổi máy mới. Cấu trúc: Phạm vi -> Quy trình -> SLA (nếu có) -> FAQ.
"""
import render
import schema
import components as C
import forms
from render import BRAND, DARK
from components import esc

SERVICES = render.load("services.json")


def render_service(s):
    trail = [("Trang chủ", "/"), ("Dịch vụ", "/dich-vu/"), (s["h1"], s["url"])]
    body = C.page_hero(eyebrow=s["eyebrow"], h1=s["h1"], lead=esc(s["lead"]), trail=trail)
    body += C.answer_first([(k, v) for k, v in s["answer_first"]])

    inner = (f'<p class="text-[15.5px] text-gray-600 leading-[1.85] mb-8 max-w-4xl">{esc(s["summary"])}</p>'
             + '<h2 class="text-[13px] font-bold uppercase tracking-[0.16em] text-[#181923] mb-4">Phạm vi dịch vụ</h2>'
             + C.bullets([esc(x) for x in s["scope"]], cols=1))
    body += C.section(inner, pad="py-16")

    body += C.section(C.timeline([(a, b, esc(c)) for a, b, c in s["process"]],
                                 title="Quy trình thực hiện"), bg="light")

    if s.get("sla"):
        body += C.section(C.matrix_table(["Cấp độ sự cố", "Tiếp nhận", "Mục tiêu xử lý"],
                                         [[esc(a), esc(b), esc(c)] for a, b, c in s["sla"]],
                                         caption="Cam kết thời gian xử lý (SLA)"))

    body += C.section(f"""
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14">
        <div class="lg:col-span-7">{C.faq_block([(q, a) for q, a in s["faqs"]])}
        </div>
        <div class="lg:col-span-5">
          {forms.lead_form(form_id="svc-" + s["slug"], page_type="service",
                           title="Yêu cầu dịch vụ này", compact=False)}
        </div>
      </div>""", bg="light")

    if s.get("next"):
        links = "".join(
            f'<a href="{u}" class="border border-gray-200 bg-white px-5 py-4 text-[14.5px] font-bold '
            f'text-[#181923] hover:border-[{BRAND}] hover:text-[{BRAND}] transition flex items-center '
            f'justify-between"><span>{esc(l)}</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a>'
            for l, u in s["next"])
        body += C.section(C.heading(eyebrow="Xem thêm", title="Liên quan")
                          + f'<div class="grid grid-cols-1 md:grid-cols-3 gap-4">{links}</div>')

    body += C.cta_band(title="Cần Hương Sơn xử lý ngay?",
                       text="Gọi hotline để được tiếp nhận nhanh nhất, hoặc gửi yêu cầu qua form để lên lịch.")

    ld = [schema.organization(), schema.breadcrumb(trail), schema.service(s, s["url"]),
          schema.faqpage([(q, C.re.sub(r"<[^>]+>", "", a)) for q, a in s["faqs"]]),
          schema.howto(s["h1"], [(b, c) for _, b, c in s["process"]], description=s["summary"])]

    return render.page(title=s["seo_title"], description=s["seo_desc"], url=s["url"],
                       keywords=s.get("keywords", ""), body=body, jsonld=ld, active="/dich-vu/")


def render_hub():
    trail = [("Trang chủ", "/"), ("Dịch vụ", "/dich-vu/")]
    body = C.page_hero(eyebrow="Technical & Operations",
                       h1="Dịch vụ kỹ thuật, bảo trì và vận hành thiết bị",
                       lead="Bốn nhóm dịch vụ đi kèm mọi hợp đồng thiết bị của Hương Sơn — từ bảo trì, kỹ thuật, vận hành đến đổi máy cũ lấy máy mới.",
                       trail=trail)
    body += C.answer_first([
        ["Trang này là gì", "Trang tổng hợp 4 nhóm dịch vụ của Hương Sơn đi kèm với thiết bị đã bán, cho thuê hoặc quản lý."],
        ["Dành cho ai", "Khách hàng đang sử dụng thiết bị in ấn của Hương Sơn hoặc hãng khác, cần bảo trì, kỹ thuật, vận hành hoặc nâng cấp thiết bị."],
        ["Giải quyết vấn đề gì", "Một đầu mối dịch vụ cho toàn bộ vòng đời thiết bị, thay vì phải tìm nhiều nhà cung cấp riêng lẻ."],
    ])
    cards = [{
        "title": s["h1"], "url": s["url"], "icon": "fa-solid fa-screwdriver-wrench",
        "tag": s["eyebrow"], "text": esc(s["summary"][:150] + "…"),
    } for s in SERVICES]
    body += C.section(C.card_grid(cards, cols=2), pad="py-16")
    body += C.cta_band(title="Cần hỗ trợ dịch vụ ngay?",
                       text="Gọi hotline kỹ thuật hoặc gửi yêu cầu — Hương Sơn tiếp nhận và phân loại mức độ xử lý.")
    ld = [schema.organization(), schema.breadcrumb(trail),
          schema.itemlist("Dịch vụ Hương Sơn", [(s["h1"], s["url"]) for s in SERVICES])]
    return render.page(title="Dịch vụ – Bảo trì, kỹ thuật, vận hành thiết bị | Hương Sơn",
                       description="4 nhóm dịch vụ Hương Sơn: bảo trì – sửa chữa, dịch vụ kỹ thuật, vận hành thiết bị, thu mua máy cũ – đổi máy mới.",
                       url="/dich-vu/", body=body, jsonld=ld, active="/dich-vu/")


def build(write):
    write("/dich-vu/", render_hub())
    for s in SERVICES:
        write(s["url"], render_service(s))
    print(f"  dịch vụ: 1 hub + {len(SERVICES)} trang")
