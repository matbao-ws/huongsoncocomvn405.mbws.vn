# -*- coding: utf-8 -*-
"""Trang sản phẩm — danh mục (9) + trang model theo đúng 12 trường AI-ready:
tên chuẩn, model, manufacturer, compatible model, use case, specifications,
FAQ, comparison, document, source, application, industry.
"""
import render
import schema
import components as C
import forms
from render import SITE, BRAND, DARK
from components import esc, WRAP, BEIGE

DATA = render.load("products.json")
CATEGORIES = DATA["categories"]
MODELS = DATA["models"]
MODEL_BY_SLUG = {m["slug"]: m for m in MODELS}
CAT_BY_SLUG = {c["slug"]: c for c in CATEGORIES}


def render_category(cat):
    trail = [("Trang chủ", "/"), ("Sản phẩm", "/san-pham/"), (cat["h1"], cat["url"])]
    body = C.page_hero(eyebrow=cat["eyebrow"], h1=cat["h1"], lead=esc(cat["lead"]), trail=trail)
    body += C.answer_first([(k, v) for k, v in cat["answer_first"]])

    inner = f'<p class="text-[15.5px] text-gray-600 leading-[1.85] mb-8 max-w-4xl">{esc(cat["summary"])}</p>'
    if cat.get("sub_notes"):
        # sub_notes cho phép HTML tin cậy (liên kết chéo), giống cách FAQ xử lý câu trả lời —
        # không esc() để link nội bộ (vd: trỏ sang trang FANSIPAN) render đúng thành thẻ <a>.
        inner += C.bullets(cat["sub_notes"], cols=1) + '<div class="mb-10"></div>'

    models = [MODEL_BY_SLUG[s] for s in cat["models"]]
    if models:
        cards = [{
            "title": m["name"], "url": m["url"], "image": m["image"],
            "tag": m["manufacturer"], "cta": "Xem thông số kỹ thuật",
            "text": esc(m["summary"][:150] + ("…" if len(m["summary"]) > 150 else "")),
        } for m in models]
        inner += C.card_grid(cards, cols=3)
    else:
        inner += C.note(
            "Danh mục model cụ thể của nhóm sản phẩm này đang được Hương Sơn hoàn thiện đầy đủ "
            "thông tin (tên chuẩn, thông số, tài liệu) trước khi công bố. Vui lòng liên hệ để được "
            "tư vấn trực tiếp theo nhu cầu.")

    body += C.section(inner, pad="py-16")
    body += C.section(f"""
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14">
        <div class="lg:col-span-7">{C.faq_block([(q, a) for q, a in cat["faqs"]])}
        </div>
        <div class="lg:col-span-5">
          {forms.lead_form(form_id="cat-" + cat["slug"], page_type="product_category",
                           title="Nhận tư vấn và báo giá", compact=False)}
        </div>
      </div>""", bg="light")

    body += C.cta_band(
        title="Cần tư vấn chọn đúng thiết bị cho nhu cầu của Quý đơn vị?",
        text="Gửi sản lượng, khổ giấy và mục đích sử dụng — Hương Sơn tư vấn cấu hình phù hợp và báo giá.",
        secondary=("Xem tất cả sản phẩm", "/san-pham/"))

    ld = [schema.organization(), schema.breadcrumb(trail),
          schema.itemlist(cat["h1"], [(m["name"], m["url"]) for m in models]),
          schema.faqpage([(q, C.re.sub(r"<[^>]+>", "", a)) for q, a in cat["faqs"]])]

    return render.page(title=cat["seo_title"], description=cat["seo_desc"], url=cat["url"],
                       keywords=cat.get("keywords", ""), body=body, jsonld=ld, active="/san-pham/")


def render_model(m):
    cat = CAT_BY_SLUG[m["category"]]
    trail = [("Trang chủ", "/"), ("Sản phẩm", "/san-pham/"), (cat["h1"], cat["url"]), (m["name"], m["url"])]

    body = C.page_hero(eyebrow=cat["eyebrow"], h1=m["name"], lead=esc(m["summary"]), trail=trail,
                       image=m.get("image", "/assets/images/hero-office.jpg"))
    body += C.answer_first([
        ("Model", f'<strong>{esc(m["model"])}</strong> — sản xuất bởi {esc(m["manufacturer"])}'),
        ("Dùng cho", ", ".join(esc(i) for i in m.get("industry", []))),
        ("Model tương thích", ", ".join(esc(i) for i in m.get("compatible_model", [])) or "Không áp dụng"),
    ])

    # ảnh + thông tin nhanh
    quick = f"""
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
        <div class="lg:col-span-5">
          <div class="border border-gray-200 bg-white p-4">
            <img src="{m.get('image','')}" alt="{esc(m['name'])}" loading="lazy" class="w-full h-auto object-contain" />
          </div>
        </div>
        <div class="lg:col-span-7">
          <dl class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-4 mb-8">
            <div><dt class="text-[11px] font-bold uppercase tracking-[0.16em] text-[{BRAND}] mb-1">Tên chuẩn</dt><dd class="text-[15px] font-semibold text-[#181923]">{esc(m['name'])}</dd></div>
            <div><dt class="text-[11px] font-bold uppercase tracking-[0.16em] text-[{BRAND}] mb-1">Model</dt><dd class="text-[15px] font-semibold text-[#181923]">{esc(m['model'])}</dd></div>
            <div><dt class="text-[11px] font-bold uppercase tracking-[0.16em] text-[{BRAND}] mb-1">Hãng sản xuất</dt><dd class="text-[15px] font-semibold text-[#181923]">{esc(m['manufacturer'])}</dd></div>
            <div><dt class="text-[11px] font-bold uppercase tracking-[0.16em] text-[{BRAND}] mb-1">Danh mục</dt><dd class="text-[15px] font-semibold text-[#181923]"><a href="{cat['url']}" class="hover:text-[{BRAND}]">{esc(m['category_label'])}</a></dd></div>
          </dl>
          <h2 class="text-[13px] font-bold uppercase tracking-[0.16em] text-[#181923] mb-3">Ứng dụng thực tế</h2>
          {C.bullets([esc(u) for u in m.get('use_case', [])], cols=1)}
        </div>
      </div>"""
    body += C.section(quick, pad="py-14")

    # specs table
    if m.get("specifications"):
        body += C.section(C.spec_table(m["specifications"], caption=f"Thông số kỹ thuật — {m['model']}"),
                          bg="light")

    # nguồn gốc / bảo hành / tài liệu
    meta_inner = ""
    rows = [["Xuất xứ / Nguồn", esc(m.get("source", ""))]]
    if m.get("warranty"):
        rows.append(["Bảo hành", esc(m["warranty"])])
    if m.get("compatible_model"):
        rows.append(["Model tương thích", ", ".join(esc(x) for x in m["compatible_model"])])
    meta_inner += C.matrix_table(["Thông tin", "Chi tiết"], rows, caption="Nguồn gốc và bảo hành")
    if m.get("document"):
        docs = "".join(
            f'<a href="{d["url"]}" target="_blank" rel="noopener" class="inline-flex items-center space-x-2 '
            f'border border-gray-300 hover:border-[{BRAND}] hover:text-[{BRAND}] px-5 py-3 text-[14px] '
            f'font-bold transition mr-3 mb-3"><i class="fa-solid fa-file-arrow-down"></i><span>{esc(d["label"])}</span></a>'
            for d in m["document"])
        meta_inner += f'<div class="mt-6">{docs}</div>'
    body += C.section(meta_inner, pad="py-14")

    # comparison
    if m.get("comparison_note"):
        body += C.section(
            f'<h2 class="text-2xl sm:text-[32px] font-bold text-[#181923] mb-6">So sánh với model liên quan</h2>'
            f'<p class="text-[15.5px] text-gray-600 leading-[1.85] max-w-4xl">{esc(m["comparison_note"])}</p>',
            bg="light")

    # FAQ + form
    body += C.section(f"""
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14">
        <div class="lg:col-span-7">{C.faq_block([(q, a) for q, a in m.get('faqs', [])])}
        </div>
        <div class="lg:col-span-5">
          {forms.lead_form(form_id="model-" + m["slug"], page_type="product_model",
                           product_model=m["model"], title="Yêu cầu báo giá model này", compact=True,
                           preset_nhu_cau="MUA")}
        </div>
      </div>""")

    body += C.cta_band(
        title=f"Cần báo giá cho {m['name']}?",
        text="Gửi số lượng và thời điểm cần — Hương Sơn báo giá kèm phương án vận chuyển, lắp đặt và bảo hành.",
        secondary=(f"Xem {cat['h1']}", cat["url"]))

    ld = [schema.organization(), schema.breadcrumb(trail), schema.product(m, m["url"])]
    if m.get("faqs"):
        ld.append(schema.faqpage([(q, C.re.sub(r"<[^>]+>", "", a)) for q, a in m["faqs"]]))

    return render.page(title=f"{m['name']} – {m['model']} | Hương Sơn",
                       description=m["summary"][:155], url=m["url"], body=body, jsonld=ld,
                       og_type="product", active="/san-pham/")


def render_hub():
    trail = [("Trang chủ", "/"), ("Sản phẩm", "/san-pham/")]
    body = C.page_hero(
        eyebrow="Office Equipment · Production Print",
        h1="Sản phẩm thiết bị văn phòng, in ấn và số hóa",
        lead="9 nhóm thiết bị Hương Sơn cung cấp: từ máy photocopy đa chức năng đến vật tư tiêu hao — bán, cho thuê và bảo trì.",
        trail=trail)
    body += C.answer_first([
        ["Trang này là gì", "Trang tổng hợp 9 danh mục sản phẩm mà Hương Sơn cung cấp: thiết bị, vật tư và linh kiện cho in ấn và văn phòng."],
        ["Dành cho ai", "Khách hàng cần tra cứu nhanh nhóm thiết bị phù hợp trước khi xem chi tiết từng model."],
        ["Giải quyết vấn đề gì", "Định hướng đúng danh mục theo nhu cầu: photocopy, in nhân bản, scan, sau in, in laser, thiết bị phòng học, vật tư hay thiết bị văn phòng."],
    ])
    cards = [{
        "title": c["h1"], "url": c["url"], "icon": "fa-solid fa-box",
        "tag": c["eyebrow"], "text": esc(c["summary"][:140] + "…"),
    } for c in CATEGORIES]
    body += C.section(C.card_grid(cards, cols=4), pad="py-16")
    body += C.cta_band(title="Chưa chắc nên chọn nhóm nào?",
                       text="Mô tả nhu cầu sử dụng — Hương Sơn tư vấn đúng danh mục và model phù hợp.")
    ld = [schema.organization(), schema.breadcrumb(trail),
          schema.itemlist("Danh mục sản phẩm Hương Sơn", [(c["h1"], c["url"]) for c in CATEGORIES])]
    return render.page(title="Sản phẩm – Thiết bị văn phòng, in ấn, số hóa | Hương Sơn",
                       description="9 nhóm sản phẩm Hương Sơn cung cấp: photocopy, máy in nhân bản, scan, phối trang, in laser, thiết bị phòng học, vật tư, thiết bị văn phòng và FANSIPAN.",
                       url="/san-pham/", body=body, jsonld=ld, active="/san-pham/")


def build(write):
    write("/san-pham/", render_hub())
    for cat in CATEGORIES:
        write(cat["url"], render_category(cat))
    for m in MODELS:
        write(m["url"], render_model(m))
    print(f"  sản phẩm: 1 hub + {len(CATEGORIES)} danh mục + {len(MODELS)} model")
