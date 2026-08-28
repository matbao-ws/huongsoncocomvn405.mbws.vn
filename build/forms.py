# -*- coding: utf-8 -*-
"""Form nhận lead — tên trường đặt khớp CRM ngay từ đầu.

Căn cứ: Bộ SEO §XII (CRM 3 Cửa) + Chiến lược §XXXIII (Customer, Contact,
Opportunity, Next Action). Mục tiêu: lead từ website đổ thẳng vào CRM
không phải map lại trường.
"""
from render import SITE, BRAND, DARK
from components import esc, WRAP, BEIGE

LOAI_DON_VI = ["Sở GD&ĐT", "Phòng GD&ĐT", "Trường THPT / THCS / Tiểu học",
               "Trường Đại học – Cao đẳng", "Cơ quan Nhà nước – UBND",
               "Ngân hàng – Tài chính", "Tập đoàn – Tổng công ty",
               "Doanh nghiệp SME", "Khác"]

CUA = ["Lãnh đạo đơn vị", "Phòng chuyên môn / Khảo thí – QLCLGD",
       "Phòng Kế hoạch – Tài chính", "Phòng Hành chính – Văn thư",
       "Kỹ thuật – IT", "Khác"]

NHU_CAU = [
    ("EXAM", "In sao đề thi – thuê máy in nhân bản siêu tốc"),
    ("PRINT", "Thuê máy photocopy / máy in A3 – A4"),
    ("PRO", "Quản lý in ấn trọn gói – Managed Print Service"),
    ("DIGITAL", "Scan – OCR – số hóa tài liệu"),
    ("MUA", "Mua thiết bị mới"),
    ("VATTU", "Vật tư – linh kiện – mực Fansipan"),
    ("KYTHUAT", "Bảo trì – sửa chữa – dịch vụ kỹ thuật"),
    ("THUMUA", "Thu mua máy cũ – đổi máy mới"),
]

THOI_DIEM = ["Trong tháng này", "1–3 tháng tới", "Theo kỳ thi sắp tới",
             "3–6 tháng tới", "Đang lập dự toán / kế hoạch năm", "Chưa xác định"]


def _inp(name, label, *, type="text", required=False, placeholder="", half=True):
    req = ' required' if required else ''
    star = f' <span class="text-[{BRAND}]">*</span>' if required else ''
    cls = "sm:col-span-1" if half else "sm:col-span-2"
    return f"""
          <div class="{cls}">
            <label for="f-{name}" class="block text-[13px] font-semibold text-[#181923] mb-2">{esc(label)}{star}</label>
            <input type="{type}" id="f-{name}" name="{name}"{req} placeholder="{esc(placeholder)}"
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[{BRAND}] transition" />
          </div>"""


def _sel(name, label, options, *, required=False, half=True, placeholder="— Chọn —"):
    req = ' required' if required else ''
    star = f' <span class="text-[{BRAND}]">*</span>' if required else ''
    cls = "sm:col-span-1" if half else "sm:col-span-2"
    opts = f'<option value="">{placeholder}</option>'
    for o in options:
        v, t = o if isinstance(o, tuple) else (o, o)
        opts += f'<option value="{esc(v)}">{esc(t)}</option>'
    return f"""
          <div class="{cls}">
            <label for="f-{name}" class="block text-[13px] font-semibold text-[#181923] mb-2">{esc(label)}{star}</label>
            <select id="f-{name}" name="{name}"{req}
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] bg-white focus:outline-none focus:border-[{BRAND}] transition">{opts}</select>
          </div>"""


def lead_form(*, form_id="lead", page_type="", preset_nhu_cau="", product_model="",
              solution_slug="", title="Gửi yêu cầu tư vấn",
              intro="Hương Sơn phản hồi trong giờ làm việc. Thông tin của Quý đơn vị chỉ dùng để tư vấn và báo giá.",
              submit="GỬI YÊU CẦU", compact=False):
    """Form lead đầy đủ. Hidden field ghi lại nguồn để đo và để CRM biết lead đến từ đâu."""
    nhu_cau_opts = [(k, v) for k, v in NHU_CAU]
    hidden = f"""
          <input type="hidden" name="page_type" value="{esc(page_type)}" />
          <input type="hidden" name="product_model" value="{esc(product_model)}" />
          <input type="hidden" name="solution_slug" value="{esc(solution_slug)}" />
          <input type="hidden" name="source_url" value="" data-autofill="url" />
          <input type="hidden" name="referrer" value="" data-autofill="referrer" />
          <input type="hidden" name="utm_source" value="" data-autofill="utm_source" />
          <input type="hidden" name="utm_medium" value="" data-autofill="utm_medium" />
          <input type="hidden" name="utm_campaign" value="" data-autofill="utm_campaign" />
          <input type="hidden" name="utm_term" value="" data-autofill="utm_term" />
          <input type="hidden" name="utm_content" value="" data-autofill="utm_content" />
          <input type="hidden" name="gclid" value="" data-autofill="gclid" />
          <div class="hidden" aria-hidden="true">
            <label for="f-{form_id}-hp">Bỏ trống ô này</label>
            <input type="text" id="f-{form_id}-hp" name="_hp" tabindex="-1" autocomplete="off" />
          </div>"""

    fields = (_inp("ho_ten", "Họ và tên", required=True, placeholder="Nguyễn Văn A")
              + _inp("chuc_vu", "Chức vụ", placeholder="Trưởng phòng")
              + _inp("don_vi", "Tên đơn vị", required=True, placeholder="Sở GD&ĐT / Trường / Công ty", half=False)
              + _sel("loai_don_vi", "Loại đơn vị", LOAI_DON_VI, required=True)
              + _sel("cua", "Bộ phận phụ trách", CUA)
              + _inp("dien_thoai", "Điện thoại / Zalo", type="tel", required=True, placeholder="09xx xxx xxx")
              + _inp("email", "Email", type="email", placeholder="ten@donvi.gov.vn")
              + _inp("tinh_thanh", "Tỉnh / Thành phố", required=True, placeholder="Hà Nội")
              + _sel("thoi_diem_can", "Thời điểm cần", THOI_DIEM))

    if not compact:
        fields += (_sel("nhu_cau", "Nhu cầu chính", nhu_cau_opts, required=True, half=False)
                   + _inp("so_luong_thiet_bi", "Số lượng thiết bị dự kiến", placeholder="VD: 02 máy")
                   + _inp("ngan_sach", "Ngân sách dự kiến", placeholder="VD: 60 triệu/máy"))
    else:
        fields += (f'<input type="hidden" name="nhu_cau" value="{esc(preset_nhu_cau)}" />'
                   + _inp("so_luong_thiet_bi", "Số lượng thiết bị dự kiến", placeholder="VD: 02 máy"))

    fields += f"""
          <div class="sm:col-span-2">
            <label for="f-ghi_chu" class="block text-[13px] font-semibold text-[#181923] mb-2">Mô tả nhu cầu</label>
            <textarea id="f-ghi_chu" name="ghi_chu" rows="4" placeholder="Số điểm in, sản lượng dự kiến, khổ giấy, thời gian thuê, yêu cầu dự phòng, yêu cầu kỹ thuật..."
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[{BRAND}] transition"></textarea>
          </div>"""

    return f"""
      <div class="bg-white border border-gray-200 p-6 sm:p-9">
        <h2 class="text-xl sm:text-[26px] font-bold text-[#181923] mb-2">{esc(title)}</h2>
        <p class="text-[14.5px] text-gray-500 leading-relaxed mb-7">{intro}</p>
        <form class="lead-form" id="{form_id}-form" method="post" action="/api/lead" novalidate>
          {hidden}
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">{fields}
          </div>
          <div class="mt-7 flex flex-col sm:flex-row items-center gap-4">
            <button type="submit" data-ga="generate_lead" class="bg-[{BRAND}] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-9 py-4 transition w-full sm:w-auto">
              {esc(submit)}
            </button>
            <a href="tel:{SITE['hotline_primary_tel']}" data-ga="click_hotline" class="text-[14.5px] font-bold text-[#181923] hover:text-[{BRAND}] transition">
              <i class="fa-solid fa-phone text-[{BRAND}] mr-2"></i>Hoặc gọi {SITE['hotline_primary']}
            </a>
          </div>
        </form>
      </div>"""


def contact_aside():
    """Cột phụ cạnh form: hotline theo đầu việc + tài nguyên tải về."""
    phones = "".join(f"""
          <li class="flex items-start space-x-3">
            <i class="fa-solid fa-phone text-[{BRAND}] text-sm mt-1 flex-shrink-0"></i>
            <span>
              <a href="tel:{h['tel']}" data-ga="click_hotline" class="font-bold text-[#181923] hover:text-[{BRAND}] transition">{h['label']}</a>
              <span class="block text-[13px] text-gray-500">{esc(h['note'])}</span>
            </span>
          </li>""" for h in SITE["hotlines"])
    return f"""
      <div class="space-y-6">
        <div class="p-6 border border-gray-200" style="background-color: {BEIGE};">
          <h3 class="text-[15px] font-bold uppercase tracking-wider text-[#181923] mb-5">Liên hệ trực tiếp</h3>
          <ul class="space-y-4 text-[14.5px] text-gray-600">{phones}
            <li class="flex items-start space-x-3">
              <i class="fa-solid fa-envelope text-[{BRAND}] text-sm mt-1 flex-shrink-0"></i>
              <a href="mailto:{SITE['email']}" class="hover:text-[{BRAND}] transition">{SITE['email']}</a>
            </li>
            <li class="flex items-start space-x-3">
              <i class="fa-solid fa-location-dot text-[{BRAND}] text-sm mt-1 flex-shrink-0"></i>
              <span class="leading-relaxed">{SITE['address']}</span>
            </li>
            <li class="flex items-start space-x-3">
              <i class="fa-regular fa-clock text-[{BRAND}] text-sm mt-1 flex-shrink-0"></i>
              <span>{SITE['hours']}</span>
            </li>
          </ul>
          <a href="{SITE['zalo']}" target="_blank" rel="noopener" data-ga="click_zalo" class="mt-6 bg-[#0068ff] text-white font-bold text-xs uppercase tracking-wider px-6 py-3.5 w-full text-center block transition hover:opacity-90">
            <i class="fa-solid fa-comment-dots mr-2"></i>Chat Zalo
          </a>
        </div>
        <div class="p-6 bg-[{DARK}]">
          <h3 class="text-[15px] font-bold uppercase tracking-wider text-white mb-3">Hồ sơ năng lực</h3>
          <p class="text-[14px] text-gray-300 leading-relaxed mb-5">
            Catalogue thiết bị, hồ sơ năng lực và datasheet của Hương Sơn.
          </p>
          <a href="/ve-huong-son/tai-nguyen/" data-ga="download_datasheet" class="border border-gray-600 hover:border-[{BRAND}] hover:text-[{BRAND}] text-white font-bold text-xs uppercase tracking-wider px-6 py-3.5 w-full text-center block transition">
            <i class="fa-solid fa-download mr-2"></i>Tải hồ sơ
          </a>
        </div>
      </div>"""
