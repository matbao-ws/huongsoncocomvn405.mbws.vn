# -*- coding: utf-8 -*-
"""NHẬN TƯ VẤN — hub 6 CTA + 5 trang con theo từng nhu cầu + 2 công cụ tính
(thuê máy, TCO). Đây là tầng chuyển đổi cuối của Digital Sales Engine:
Google -> Website -> Nội dung -> Giải pháp -> Lead -> CRM.
"""
import render
import schema
import components as C
import forms
from render import SITE, BRAND, DARK
from components import esc, BEIGE

LEAD_PAGES = [
    {
        "slug": "bao-gia", "url": "/nhan-tu-van/bao-gia/", "title": "Yêu cầu báo giá",
        "icon": "fa-solid fa-file-invoice-dollar", "nhu_cau": "MUA",
        "lead": "Gửi loại thiết bị, số lượng và thời điểm cần — Hương Sơn báo giá kèm cơ cấu giá tách rõ từng khoản, không nhồi một chữ 'trọn gói' gây hiểu nhầm phạm vi.",
        "seo_title": "Yêu cầu báo giá máy photocopy, máy in, thiết bị văn phòng | Hương Sơn",
        "seo_desc": "Gửi yêu cầu báo giá máy photocopy, máy in nhân bản, máy scan và vật tư. Hương Sơn phản hồi trong giờ làm việc kèm cơ cấu giá rõ ràng.",
    },
    {
        "slug": "tu-van-thue-may", "url": "/nhan-tu-van/tu-van-thue-may/", "title": "Tư vấn thuê máy",
        "icon": "fa-solid fa-handshake", "nhu_cau": "PRINT",
        "lead": "Cho Hương Sơn biết loại thiết bị, sản lượng dự kiến và thời gian thuê — nhận tư vấn gói Basic/Standard/Business/Enterprise phù hợp.",
        "seo_title": "Tư vấn thuê máy photocopy, máy in theo tháng | Hương Sơn",
        "seo_desc": "Nhận tư vấn thuê máy photocopy, máy in A3/A4, máy scan theo tháng hoặc theo sản lượng — có gói bao mực và bảo trì.",
    },
    {
        "slug": "phuong-an-in-de-thi", "url": "/nhan-tu-van/phuong-an-in-de-thi/", "title": "Phương án in đề thi",
        "icon": "fa-solid fa-print", "nhu_cau": "EXAM",
        "lead": "Gửi số điểm in, sản lượng dự kiến, thời gian in — Hương Sơn đề xuất cấu hình máy chính, máy dự phòng, định mức vật tư và cơ cấu giá cho kỳ thi.",
        "seo_title": "Yêu cầu phương án in đề thi – EXAM PRO | Hương Sơn",
        "seo_desc": "Yêu cầu phương án cho thuê máy in đề thi, máy in nhân bản Duplo phục vụ kỳ thi — kèm máy dự phòng, vật tư và kỹ thuật trực.",
    },
    {
        "slug": "khao-sat-so-hoa", "url": "/nhan-tu-van/khao-sat-so-hoa/", "title": "Khảo sát số hóa",
        "icon": "fa-solid fa-file-arrow-up", "nhu_cau": "DIGITAL",
        "lead": "Mô tả khối lượng và loại tài liệu cần số hóa — Hương Sơn khảo sát và đề xuất phương án thiết bị, quy trình và đơn giá theo trang.",
        "seo_title": "Yêu cầu khảo sát số hóa tài liệu, hồ sơ | Hương Sơn",
        "seo_desc": "Đăng ký khảo sát số hóa hồ sơ, tài liệu — scan, OCR, chuẩn hóa dữ liệu cho Sở GD&ĐT, trường học và cơ quan Nhà nước.",
    },
    {
        "slug": "yeu-cau-ky-thuat", "url": "/nhan-tu-van/yeu-cau-ky-thuat/", "title": "Yêu cầu kỹ thuật",
        "icon": "fa-solid fa-screwdriver-wrench", "nhu_cau": "KYTHUAT",
        "lead": "Mô tả sự cố hoặc nhu cầu kỹ thuật — Hương Sơn tiếp nhận và phân loại mức độ xử lý theo cam kết SLA.",
        "seo_title": "Yêu cầu hỗ trợ kỹ thuật, bảo trì máy photocopy | Hương Sơn",
        "seo_desc": "Gửi yêu cầu hỗ trợ kỹ thuật, bảo trì hoặc sửa chữa máy photocopy, máy in. Hương Sơn tiếp nhận và phân loại mức độ xử lý.",
    },
]

CALCULATORS = [
    {
        "slug": "tinh-chi-phi-thue-may", "url": "/cong-cu/tinh-chi-phi-thue-may/",
        "title": "Công cụ tính chi phí thuê máy",
        "seo_title": "Công cụ tính chi phí thuê máy photocopy theo sản lượng | Hương Sơn",
        "seo_desc": "Ước tính nhanh chi phí thuê máy photocopy theo sản lượng in hằng tháng và thời hạn thuê, trước khi nhận báo giá chính thức từ Hương Sơn.",
    },
    {
        "slug": "tinh-tco", "url": "/cong-cu/tinh-tco/",
        "title": "Công cụ tính TCO – Tổng chi phí sở hữu",
        "seo_title": "Công cụ so sánh TCO mua và thuê máy photocopy | Hương Sơn",
        "seo_desc": "So sánh tổng chi phí sở hữu (TCO) giữa phương án mua và thuê máy photocopy: vốn đầu tư, vật tư, bảo trì và thời gian sử dụng.",
    },
]


def _lead_page(p):
    trail = [("Trang chủ", "/"), ("Nhận tư vấn", "/nhan-tu-van/"), (p["title"], p["url"])]
    body = C.page_hero(eyebrow="Nhận tư vấn", h1=p["title"], lead=esc(p["lead"]), trail=trail)
    body += C.section(f"""
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14">
        <div class="lg:col-span-5">{forms.contact_aside()}</div>
        <div class="lg:col-span-7">
          {forms.lead_form(form_id=p["slug"], page_type="lead_" + p["slug"],
                           preset_nhu_cau=p["nhu_cau"], title=p["title"],
                           compact=(p["nhu_cau"] not in ("MUA",)))}
        </div>
      </div>""", pad="py-16")
    ld = [schema.organization(), schema.breadcrumb(trail)]
    return render.page(title=p["seo_title"], description=p["seo_desc"], url=p["url"],
                       body=body, jsonld=ld, active="/nhan-tu-van/")


def _hub():
    trail = [("Trang chủ", "/"), ("Nhận tư vấn", "/nhan-tu-van/")]
    body = C.page_hero(eyebrow="Nhận tư vấn", h1="Nhận tư vấn từ Hương Sơn",
                       lead="Chọn đúng nhu cầu để được tư vấn nhanh nhất, hoặc gửi yêu cầu chung để Hương Sơn liên hệ.",
                       trail=trail)
    body += C.answer_first([
        ["Trang này là gì", "Điểm tiếp nhận yêu cầu tư vấn của Hương Sơn, chia theo 6 loại nhu cầu phổ biến nhất."],
        ["Dành cho ai", "Khách hàng đã xác định được nhu cầu cụ thể: báo giá, thuê máy, in đề thi, số hóa, kỹ thuật hoặc tài liệu."],
        ["Điều gì xảy ra sau khi gửi", "Yêu cầu được ghi nhận kèm nguồn truy cập và nội dung cụ thể, chuyển tới bộ phận phụ trách để liên hệ trong giờ làm việc."],
    ])
    cards = "".join(f"""
        <a href="{c['url']}" class="group border border-gray-200 bg-white p-7 flex flex-col items-start hover:border-[{BRAND}] transition">
          <span class="w-12 h-12 bg-[{DARK}] group-hover:bg-[{BRAND}] text-white flex items-center justify-center mb-5 transition"><i class="{c['icon']} text-lg"></i></span>
          <h3 class="text-[17px] font-bold text-[#181923] group-hover:text-[{BRAND}] transition mb-2">{esc(c['label'])}</h3>
          <span class="inline-flex items-center space-x-1 text-[{BRAND}] font-bold text-xs uppercase tracking-wider mt-auto pt-3">
            <span>Gửi yêu cầu</span><i class="fa-solid fa-arrow-right text-[10px]"></i>
          </span>
        </a>""" for c in SITE["cta6"])
    body += C.section(f'<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">{cards}</div>', pad="py-16")

    body += C.section(f"""
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14">
        <div class="lg:col-span-5">{forms.contact_aside()}</div>
        <div class="lg:col-span-7">{forms.lead_form(form_id="hub", page_type="lead_hub", title="Gửi yêu cầu chung")}</div>
      </div>""", bg="light")

    ld = [schema.organization(), schema.breadcrumb(trail),
          schema.itemlist("Nhận tư vấn", [(c["label"], c["url"]) for c in SITE["cta6"]])]
    return render.page(title="Nhận tư vấn – Báo giá, thuê máy, in đề thi, số hóa | Hương Sơn",
                       description="Gửi yêu cầu tư vấn theo đúng nhu cầu: báo giá, thuê máy, phương án in đề thi, khảo sát số hóa hoặc hỗ trợ kỹ thuật.",
                       url="/nhan-tu-van/", body=body, jsonld=ld, active="/nhan-tu-van/")


def _calc_rental():
    trail = [("Trang chủ", "/"), ("Công cụ", "/cong-cu/"), ("Tính chi phí thuê máy", "/cong-cu/tinh-chi-phi-thue-may/")]
    body = C.page_hero(eyebrow="Công cụ ước tính", h1="Công cụ tính chi phí thuê máy",
                       lead="Ước tính nhanh chi phí thuê máy photocopy theo sản lượng — dùng để tham khảo trước khi nhận báo giá chính thức.",
                       trail=trail)
    body += C.section("""
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
        <div class="lg:col-span-6">
          <div class="bg-white border border-gray-200 p-7 space-y-6">
            <div>
              <label class="block text-[13px] font-semibold text-[#181923] mb-2">Sản lượng in bình quân mỗi tháng (bản)</label>
              <input type="number" id="calc-volume" value="5000" min="0" class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900]" />
            </div>
            <div>
              <label class="block text-[13px] font-semibold text-[#181923] mb-2">Đơn giá tham khảo mỗi bản in (đồng)</label>
              <input type="number" id="calc-price" value="350" min="0" class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900]" />
            </div>
            <div>
              <label class="block text-[13px] font-semibold text-[#181923] mb-2">Phí thuê máy cố định mỗi tháng (đồng)</label>
              <input type="number" id="calc-fixed" value="800000" min="0" class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900]" />
            </div>
            <div>
              <label class="block text-[13px] font-semibold text-[#181923] mb-2">Thời hạn thuê (tháng)</label>
              <input type="number" id="calc-months" value="24" min="1" class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900]" />
            </div>
          </div>
        </div>
        <div class="lg:col-span-6">
          <div class="p-7 h-full flex flex-col justify-center" style="background-color: rgb(247,243,238);">
            <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-2">Ước tính chi phí mỗi tháng</p>
            <p class="text-4xl font-bold text-[#181923] mb-1" id="calc-result-month">—</p>
            <p class="text-[13.5px] text-gray-500 mb-6">Phí cố định + (sản lượng × đơn giá mỗi bản)</p>
            <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-2">Ước tính tổng chi phí cả thời hạn thuê</p>
            <p class="text-3xl font-bold text-[#181923]" id="calc-result-total">—</p>
          </div>
        </div>
      </div>
      <p class="text-[13px] text-gray-500 mt-6 max-w-3xl">
        Đây là công cụ ước tính tham khảo, không phải báo giá chính thức. Chi phí thực tế phụ thuộc cấu hình máy,
        khổ giấy, gói dịch vụ và điều kiện phát sinh — vui lòng
        <a class="text-[#1A9900] font-medium hover:underline" href="/nhan-tu-van/tu-van-thue-may/">gửi yêu cầu tư vấn thuê máy</a>
        để nhận báo giá chính xác.
      </p>
      <script>
        (function () {
          const v = document.getElementById('calc-volume'), pr = document.getElementById('calc-price'),
                fx = document.getElementById('calc-fixed'), mo = document.getElementById('calc-months'),
                rm = document.getElementById('calc-result-month'), rt = document.getElementById('calc-result-total');
          const fmt = (n) => n.toLocaleString('vi-VN') + ' đ';
          function calc() {
            const volume = parseFloat(v.value) || 0, price = parseFloat(pr.value) || 0,
                  fixed = parseFloat(fx.value) || 0, months = parseFloat(mo.value) || 0;
            const monthly = fixed + volume * price;
            rm.textContent = fmt(Math.round(monthly));
            rt.textContent = fmt(Math.round(monthly * months));
          }
          [v, pr, fx, mo].forEach((el) => el.addEventListener('input', calc));
          calc();
        })();
      </script>
    """, pad="py-16")
    body += C.cta_band(title="Cần báo giá chính xác theo đúng nhu cầu?",
                       text="Gửi thông tin cụ thể để Hương Sơn báo giá chính thức, có cơ cấu giá tách rõ từng khoản.",
                       primary=("Tư vấn thuê máy", "/nhan-tu-van/tu-van-thue-may/"))
    ld = [schema.organization(), schema.breadcrumb(trail)]
    return render.page(title="Công cụ tính chi phí thuê máy photocopy | Hương Sơn",
                       description="Ước tính nhanh chi phí thuê máy photocopy theo sản lượng in hằng tháng và thời hạn thuê.",
                       url="/cong-cu/tinh-chi-phi-thue-may/", body=body, jsonld=ld)


def _calc_tco():
    trail = [("Trang chủ", "/"), ("Công cụ", "/cong-cu/"), ("Tính TCO", "/cong-cu/tinh-tco/")]
    body = C.page_hero(eyebrow="Công cụ ước tính", h1="Công cụ tính TCO – Tổng chi phí sở hữu",
                       lead="So sánh tổng chi phí sở hữu giữa phương án mua và thuê máy trong cùng một khoảng thời gian sử dụng.",
                       trail=trail)
    body += C.section("""
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10">
        <div class="bg-white border border-gray-200 p-7 space-y-5">
          <h3 class="font-bold text-[#181923] uppercase text-sm tracking-wider mb-2">Phương án mua</h3>
          <div><label class="block text-[13px] font-semibold text-[#181923] mb-2">Giá mua thiết bị (đồng)</label>
            <input type="number" id="tco-buy-price" value="56500000" class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900]" /></div>
          <div><label class="block text-[13px] font-semibold text-[#181923] mb-2">Vật tư + bảo trì mỗi tháng (đồng)</label>
            <input type="number" id="tco-buy-monthly" value="600000" class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900]" /></div>
        </div>
        <div class="bg-white border border-gray-200 p-7 space-y-5">
          <h3 class="font-bold text-[#181923] uppercase text-sm tracking-wider mb-2">Phương án thuê</h3>
          <div><label class="block text-[13px] font-semibold text-[#181923] mb-2">Phí thuê trọn gói mỗi tháng (đồng)</label>
            <input type="number" id="tco-rent-monthly" value="1800000" class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900]" /></div>
          <div><label class="block text-[13px] font-semibold text-[#181923] mb-2">Thời gian sử dụng để so sánh (tháng)</label>
            <input type="number" id="tco-months" value="36" class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900]" /></div>
        </div>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
        <div class="p-7" style="background-color: rgb(247,243,238);">
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-2">Tổng chi phí phương án mua</p>
          <p class="text-3xl font-bold text-[#181923]" id="tco-buy-total">—</p>
        </div>
        <div class="p-7" style="background-color: rgb(247,243,238);">
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-2">Tổng chi phí phương án thuê</p>
          <p class="text-3xl font-bold text-[#181923]" id="tco-rent-total">—</p>
        </div>
      </div>
      <p class="text-[13px] text-gray-500 mt-6 max-w-3xl">
        Công cụ ước tính tham khảo dựa trên số liệu Quý khách nhập, không thay thế cho Cost Sheet nội bộ mà Hương Sơn
        lập trước khi báo giá chính thức. Vui lòng <a class="text-[#1A9900] font-medium hover:underline" href="/nhan-tu-van/bao-gia/">yêu cầu báo giá</a>
        để có con số chính xác theo cấu hình cụ thể.
      </p>
      <script>
        (function () {
          const bp = document.getElementById('tco-buy-price'), bm = document.getElementById('tco-buy-monthly'),
                rm = document.getElementById('tco-rent-monthly'), mo = document.getElementById('tco-months'),
                bt = document.getElementById('tco-buy-total'), rt = document.getElementById('tco-rent-total');
          const fmt = (n) => n.toLocaleString('vi-VN') + ' đ';
          function calc() {
            const months = parseFloat(mo.value) || 0;
            const buyTotal = (parseFloat(bp.value) || 0) + (parseFloat(bm.value) || 0) * months;
            const rentTotal = (parseFloat(rm.value) || 0) * months;
            bt.textContent = fmt(Math.round(buyTotal));
            rt.textContent = fmt(Math.round(rentTotal));
          }
          [bp, bm, rm, mo].forEach((el) => el.addEventListener('input', calc));
          calc();
        })();
      </script>
    """, pad="py-16")
    body += C.cta_band(title="Muốn Hương Sơn tính TCO chính xác cho đơn vị?",
                       text="Gửi cấu hình và sản lượng thực tế — Hương Sơn lập Cost Sheet chi tiết trước khi báo giá.",
                       primary=("Yêu cầu báo giá", "/nhan-tu-van/bao-gia/"))
    ld = [schema.organization(), schema.breadcrumb(trail)]
    return render.page(title="Công cụ tính TCO mua và thuê máy photocopy | Hương Sơn",
                       description="So sánh tổng chi phí sở hữu (TCO) giữa mua và thuê máy photocopy trong cùng thời gian sử dụng.",
                       url="/cong-cu/tinh-tco/", body=body, jsonld=ld)


def _calc_hub():
    trail = [("Trang chủ", "/"), ("Công cụ", "/cong-cu/")]
    body = C.page_hero(eyebrow="Công cụ ước tính", h1="Công cụ tính toán chi phí",
                       lead="Ước tính nhanh chi phí thuê máy và so sánh tổng chi phí sở hữu (TCO) trước khi nhận báo giá chính thức.",
                       trail=trail)
    cards = [{"title": c["title"], "url": c["url"], "icon": "fa-solid fa-calculator",
             "tag": "Công cụ", "text": "Công cụ ước tính tham khảo — dùng để tính sơ bộ trước khi Hương Sơn báo giá chính thức."}
             for c in CALCULATORS]
    body += C.section(C.card_grid(cards, cols=2), pad="py-16")
    ld = [schema.organization(), schema.breadcrumb(trail)]
    return render.page(title="Công cụ tính chi phí thuê máy và TCO | Hương Sơn",
                       description="Công cụ ước tính chi phí thuê máy photocopy và so sánh TCO giữa mua và thuê.",
                       url="/cong-cu/", body=body, jsonld=ld)


def build(write):
    write("/nhan-tu-van/", _hub())
    for p in LEAD_PAGES:
        write(p["url"], _lead_page(p))
    write("/cong-cu/", _calc_hub())
    write("/cong-cu/tinh-chi-phi-thue-may/", _calc_rental())
    write("/cong-cu/tinh-tco/", _calc_tco())
    print(f"  nhận tư vấn: 1 hub + {len(LEAD_PAGES)} trang + 1 hub công cụ + 2 công cụ tính")
