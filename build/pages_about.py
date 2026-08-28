# -*- coding: utf-8 -*-
"""Trang VỀ HƯƠNG SƠN: Giới thiệu / Hồ sơ năng lực / Đối tác – Thương hiệu /
Tài nguyên / Kiến thức / Tin tức.

Nguyên tắc (Bộ hồ sơ §Nguyên tắc xây dựng): phần "năng lực hiện có" chỉ dùng
thông tin đã chứng minh được (website cũ, hồ sơ hợp đồng); phần "định hướng
2027-2028" là chiến lược đề xuất, không viết như thành tích đã đạt.
"""
import render
import schema
import components as C
import forms
from render import SITE, BRAND, DARK
from components import esc, BEIGE


def build(write):
    write("/ve-huong-son/", _about())
    write("/ve-huong-son/nang-luc/", _capability())
    write("/ve-huong-son/doi-tac-thuong-hieu/", _brands())
    write("/ve-huong-son/tai-nguyen/", _resources())
    write("/ve-huong-son/kien-thuc/", _knowledge_hub())
    write("/ve-huong-son/tin-tuc/", _news_hub())
    print("  về Hương Sơn: 6 trang")


# ------------------------------------------------------------------- 1. Giới thiệu
def _about():
    trail = [("Trang chủ", "/"), ("Về Hương Sơn", "/ve-huong-son/")]
    body = C.page_hero(
        eyebrow="Về Hương Sơn",
        h1="Giới thiệu Công ty Hương Sơn",
        lead="Thiết bị cho hiện tại, giải pháp cho tương lai.",
        trail=trail)
    body += C.answer_first([
        ["Trang này là gì", "Giới thiệu Công ty TNHH Thương mại và Dịch vụ Hương Sơn: lịch sử, lĩnh vực kinh doanh và định hướng phát triển."],
        ["Thành lập khi nào", f"Ngày {SITE['founded']}, hoạt động trong lĩnh vực thiết bị văn phòng, in ấn, sao chụp, số hóa tài liệu, vật tư và dịch vụ kỹ thuật."],
        ["Định hướng", "Từ doanh nghiệp cung cấp thiết bị chuyển sang đơn vị cung cấp giải pháp thiết bị – in ấn – số hóa – dịch vụ giai đoạn 2026–2030."],
    ])

    paras = [
        f"{SITE['legal_name']} được thành lập ngày {SITE['founded']}, hoạt động trong lĩnh vực thiết bị văn phòng, in ấn, sao chụp, số hóa tài liệu, vật tư và dịch vụ kỹ thuật.",
        "Hương Sơn cung cấp đa dạng các giải pháp gồm máy photocopy, máy in đa chức năng, máy in nhân bản siêu tốc, máy scan, máy phối trang và thiết bị hoàn thiện sau in, máy in Laser, thiết bị văn phòng, thiết bị phòng học và thiết bị dạy học; đồng thời cung cấp vật tư tiêu hao, linh kiện, dịch vụ bảo trì – sửa chữa và cho thuê thiết bị trong nhiều năm qua.",
        "Năm 2017, Hương Sơn trở thành đại lý ủy quyền phân phối chính thức các sản phẩm của tập đoàn DUPLO (Nhật Bản) và TOSHIBA tại miền Bắc Việt Nam. Năm 2021, Hương Sơn tiếp tục làm đại lý bán hàng cho hãng Konica Minolta đối với dòng máy photocopy đa chức năng từ 25 đến 90 bản/phút.",
        "Trong quá trình phát triển, Hương Sơn đã xây dựng quan hệ hợp tác với nhiều thương hiệu thiết bị quốc tế, cùng năng lực cung cấp, triển khai và hỗ trợ kỹ thuật cho khách hàng.",
        "Từ nền tảng kinh nghiệm và năng lực thực tế, giai đoạn 2026–2030, Hương Sơn định hướng phát triển từ doanh nghiệp cung cấp thiết bị thành đơn vị cung cấp giải pháp thiết bị – in ấn – số hóa – dịch vụ. Hương Sơn hướng tới cung cấp giải pháp trọn vòng đời sản phẩm: từ tư vấn, cung cấp và lắp đặt thiết bị đến vật tư, bảo trì, cho thuê, quản lý vận hành và số hóa tài liệu — lấy chất lượng, tính ổn định, hiệu quả đầu tư và dịch vụ đồng hành lâu dài làm nền tảng phát triển.",
    ]
    body += C.section(f'<div class="max-w-4xl">{C.prose(paras)}</div>', pad="py-16")

    body += C.section(f"""
      <blockquote class="border-l-4 border-[{BRAND}] pl-8 py-2">
        <p class="text-xl sm:text-2xl font-bold text-[#181923] italic leading-snug">{esc(SITE['slogan'])}</p>
      </blockquote>""", bg="beige", pad="py-14")

    # bảng thông tin pháp lý — dùng đúng dữ liệu xác nhận từ website cũ
    legal_rows = [
        ["Tên doanh nghiệp", esc(SITE["legal_name"])],
        ["Mã số thuế", esc(SITE["mst"])],
        ["Người đại diện", esc(SITE["rep"])],
        [esc(SITE["address_legal_label"]), esc(SITE["address_legal"])],
        [esc(SITE["address_label"]), esc(SITE["address"])],
        ["Tài khoản ngân hàng", esc(SITE["bank_account"])],
        ["Điện thoại", " – ".join(h["label"] for h in SITE["hotlines"])],
        ["Email", esc(SITE["email"])],
    ]
    body += C.section(C.matrix_table(["Thông tin", "Nội dung"], legal_rows,
                                     caption="Thông tin pháp lý"), pad="py-16")

    body += C.cta_band(title="Muốn biết thêm về năng lực triển khai của Hương Sơn?",
                       text="Xem hồ sơ năng lực đầy đủ hoặc các dự án đã thực hiện.",
                       primary=("Xem hồ sơ năng lực", "/ve-huong-son/nang-luc/"),
                       secondary=("Xem dự án", "/du-an/"))

    ld = [schema.organization(), schema.breadcrumb(trail)]
    return render.page(
        title="Giới thiệu Công ty Hương Sơn – Thiết bị, in ấn, số hóa | Hương Sơn",
        description="Công ty TNHH Thương mại và Dịch vụ Hương Sơn, thành lập 2008, đại lý ủy quyền Duplo, Toshiba, Konica Minolta — cung cấp thiết bị, in ấn, số hóa và dịch vụ.",
        url="/ve-huong-son/", body=body, jsonld=ld, active="/ve-huong-son/")


# ------------------------------------------------------------------- 2. Hồ sơ năng lực
def _capability():
    trail = [("Trang chủ", "/"), ("Về Hương Sơn", "/ve-huong-son/"), ("Hồ sơ năng lực", "/ve-huong-son/nang-luc/")]
    body = C.page_hero(eyebrow="Năng lực triển khai", h1="Hồ sơ năng lực Hương Sơn",
                       lead="Năng lực thiết bị, kho, kỹ thuật, logistics và các dự án đã triển khai.", trail=trail)
    body += C.answer_first([
        ["Trang này là gì", "Tổng hợp năng lực triển khai thực tế của Hương Sơn: thiết bị, kho, kỹ thuật, logistics và dự án đã thực hiện."],
        ["Năng lực chính", "Đại lý ủy quyền phân phối Duplo, Toshiba và Konica Minolta; kinh nghiệm cho thuê thiết bị và triển khai dịch vụ cho Sở GD&ĐT, có hồ sơ hợp đồng đầy đủ."],
        ["Đang mở rộng thêm", "Dịch vụ scan – số hóa tài liệu và quản lý in ấn trọn gói cho khách hàng Giáo dục, cơ quan Nhà nước và doanh nghiệp."],
    ])

    body += C.section(
        '<h2 class="text-[13px] font-bold uppercase tracking-[0.16em] text-[#181923] mb-4">Năng lực triển khai</h2>'
        + C.bullets([
            "Cung cấp và triển khai máy photocopy Toshiba, Ricoh, Konica Minolta và các dòng thiết bị văn phòng.",
            "Đại lý ủy quyền phân phối chính thức máy in nhân bản siêu tốc Duplo (Nhật Bản) tại miền Bắc từ năm 2017.",
            "Cung cấp máy in HP và giải pháp in văn phòng.",
            "Cung cấp vật tư, linh kiện photocopy – in, bao gồm mực thương hiệu riêng Fansipan, trống, bột từ và vật tư hao tài Duplo.",
            "Kinh nghiệm cho thuê thiết bị và triển khai dịch vụ tại Sở GD&ĐT — hồ sơ Vĩnh Phúc 2025 và Quảng Trị 2026 là bằng chứng trực tiếp.",
            "Đã cung cấp máy photocopy cho hệ thống Ngân hàng Vietcombank toàn quốc trong các năm 2022–2024.",
        ], cols=1), pad="py-14")

    body += C.section(
        '<h2 class="text-[13px] font-bold uppercase tracking-[0.16em] text-[#181923] mb-4">Đang mở rộng thêm</h2>'
        + C.bullets([
            "Dịch vụ scan, OCR và số hóa hồ sơ trọn gói cho Sở GD&ĐT và cơ quan Nhà nước.",
            "Quản lý in ấn trọn gói (Managed Print Service) cho khối Giáo dục và doanh nghiệp.",
            "Vật tư thương hiệu riêng FANSIPAN cho nhiều dòng máy thông dụng.",
        ], cols=1), bg="light", pad="py-14")

    body += C.cta_band(title="Cần bản hồ sơ năng lực đầy đủ dạng PDF?",
                       text="Tải hồ sơ năng lực hoặc liên hệ để nhận bản trình bày chi tiết theo ngành.",
                       primary=("Tải hồ sơ năng lực", "/ve-huong-son/tai-nguyen/"),
                       secondary=("Xem dự án", "/du-an/"))
    ld = [schema.organization(), schema.breadcrumb(trail)]
    return render.page(
        title="Hồ sơ năng lực Hương Sơn – Thiết bị, kỹ thuật, dự án | Hương Sơn",
        description="Năng lực triển khai của Hương Sơn: đại lý Duplo, Toshiba, Konica Minolta; dự án Sở GD&ĐT Vĩnh Phúc, Quảng Trị, Vietcombank.",
        url="/ve-huong-son/nang-luc/", body=body, jsonld=ld, active="/ve-huong-son/")


# --------------------------------------------------------------- 3. Đối tác – Thương hiệu
def _brands():
    trail = [("Trang chủ", "/"), ("Về Hương Sơn", "/ve-huong-son/"), ("Đối tác – Thương hiệu", "/ve-huong-son/doi-tac-thuong-hieu/")]
    body = C.page_hero(eyebrow="Đối tác", h1="Đối tác – Thương hiệu",
                       lead="Các thương hiệu thiết bị Hương Sơn phân phối và hợp tác triển khai.", trail=trail)
    body += C.answer_first([
        ["Trang này là gì", "Danh sách các thương hiệu thiết bị mà Hương Sơn phân phối, cùng vai trò hợp tác cụ thể với từng hãng."],
        ["Dành cho ai", "Khách hàng muốn biết Hương Sơn có phải đại lý chính thức của hãng thiết bị mình quan tâm hay không."],
        ["Vì sao đa thương hiệu", "Hương Sơn theo mô hình đa thương hiệu (multi-brand) để chọn đúng thiết bị theo nhu cầu, không bó buộc khách hàng vào một hãng duy nhất."],
    ])
    rows = [
        ["DUPLO (Nhật Bản)", "Đại lý ủy quyền phân phối chính thức tại miền Bắc Việt Nam", "Từ năm 2017"],
        ["TOSHIBA", "Đại lý ủy quyền phân phối chính thức tại miền Bắc Việt Nam", "Từ năm 2017"],
        ["Konica Minolta", "Đại lý bán hàng — dòng máy photocopy đa chức năng 25–90 bản/phút", "Từ năm 2021"],
        ["Ricoh", "Sản phẩm phân phối trong danh mục Hương Sơn", "—"],
        ["HP", "Sản phẩm phân phối trong danh mục Hương Sơn", "—"],
        ["FANSIPAN", "Thương hiệu vật tư riêng của Hương Sơn", "—"],
    ]
    body += C.section(C.matrix_table(["Thương hiệu", "Vai trò hợp tác", "Thời gian"], rows,
                                     caption="Danh mục đối tác – thương hiệu"), pad="py-16")
    body += C.cta_band(title="Cần tư vấn chọn đúng thương hiệu cho nhu cầu?",
                       text="Hương Sơn tư vấn theo mô hình đa thương hiệu — chọn thiết bị phù hợp nhất, không cố định vào một hãng.")
    ld = [schema.organization(), schema.breadcrumb(trail)]
    return render.page(
        title="Đối tác – Thương hiệu Duplo, Toshiba, Konica Minolta | Hương Sơn",
        description="Hương Sơn là đại lý ủy quyền phân phối chính thức Duplo và Toshiba tại miền Bắc, đại lý bán hàng Konica Minolta.",
        url="/ve-huong-son/doi-tac-thuong-hieu/", body=body, jsonld=ld, active="/ve-huong-son/")


# ---------------------------------------------------------------------- 4. Tài nguyên
def _resources():
    trail = [("Trang chủ", "/"), ("Về Hương Sơn", "/ve-huong-son/"), ("Tài nguyên", "/ve-huong-son/tai-nguyen/")]
    body = C.page_hero(eyebrow="Tài liệu", h1="Tài nguyên – Catalogue – Hồ sơ năng lực",
                       lead="Tài liệu Hương Sơn cung cấp để Quý khách tham khảo và đưa vào hồ sơ dự toán.", trail=trail)
    body += C.answer_first([
        ["Trang này là gì", "Nơi tải tài liệu, catalogue và hồ sơ năng lực của Hương Sơn."],
        ["Dành cho ai", "Khách hàng cần tài liệu để lập dự toán, hồ sơ mời thầu hoặc trình lãnh đạo phê duyệt."],
        ["Cách nhận tài liệu", "Bấm 'Yêu cầu' ở tài liệu cần — Hương Sơn gửi qua email trong ngày làm việc."],
    ])
    items = [
        ("Hồ sơ năng lực Hương Sơn (PDF)", "Giới thiệu công ty, năng lực thiết bị, kỹ thuật, logistics và dự án."),
        ("Catalogue thiết bị Duplo", "Danh mục máy in nhân bản siêu tốc và thiết bị hoàn thiện sau in."),
        ("Catalogue máy photocopy Toshiba", "Thông số các dòng máy đa chức năng A3."),
        ("Bảng giá thuê máy tham khảo", "Các gói thuê Basic / Standard / Business / Enterprise."),
        ("Mẫu hồ sơ hợp đồng – nghiệm thu", "Dùng tham khảo khi lập dự toán và hồ sơ mời thầu."),
    ]
    cards = "".join(f"""
      <div class="flex items-center justify-between border border-gray-200 bg-white p-6">
        <div class="flex items-start space-x-4">
          <span class="w-11 h-11 bg-[{DARK}] text-white flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-file-pdf"></i></span>
          <div><p class="font-bold text-[#181923] mb-1">{esc(t)}</p><p class="text-[13.5px] text-gray-500">{esc(d)}</p></div>
        </div>
        <a href="/nhan-tu-van/bao-gia/" class="flex-shrink-0 ml-4 border border-gray-300 hover:border-[{BRAND}] hover:text-[{BRAND}] px-4 py-2.5 text-xs font-bold uppercase tracking-wider transition">Yêu cầu</a>
      </div>""" for t, d in items)
    body += C.section(f'<div class="space-y-4">{cards}</div>', pad="py-16")
    body += C.section(forms.lead_form(form_id="resources", page_type="resources",
                                      title="Nhận tài liệu qua email", compact=False), bg="light")
    ld = [schema.organization(), schema.breadcrumb(trail)]
    return render.page(
        title="Tài nguyên – Catalogue, hồ sơ năng lực Hương Sơn | Hương Sơn",
        description="Tải catalogue thiết bị Duplo, Toshiba, hồ sơ năng lực và mẫu hồ sơ hợp đồng của Hương Sơn.",
        url="/ve-huong-son/tai-nguyen/", body=body, jsonld=ld, active="/ve-huong-son/")


# --------------------------------------------------------------------- 5/6. Hub rỗng có kế hoạch
def _knowledge_hub():
    trail = [("Trang chủ", "/"), ("Về Hương Sơn", "/ve-huong-son/"), ("Kiến thức", "/ve-huong-son/kien-thuc/")]
    body = C.page_hero(eyebrow="Kiến thức", h1="Kiến thức – Tư vấn mua và thuê thiết bị",
                       lead="Nội dung giúp Quý khách ra quyết định: nên thuê hay mua, chọn cấu hình nào, chi phí thực tế ra sao.", trail=trail)
    body += C.answer_first([
        ["Trang này là gì", "Chuyên mục kiến thức giải đáp các câu hỏi thường gặp trước khi mua hoặc thuê thiết bị in ấn."],
        ["Dành cho ai", "Người phụ trách mua sắm, kế hoạch tài chính hoặc kỹ thuật đang cân nhắc phương án thiết bị."],
        ["Nội dung dự kiến", "Buying Guide, so sánh sản phẩm, hướng dẫn kỹ thuật và phân tích chi phí — cập nhật theo nhu cầu tra cứu thực tế của khách hàng."],
    ])
    topics = [
        "Nên thuê hay mua máy photocopy cho doanh nghiệp?",
        "Chi phí thực tế của một phòng in trường học?",
        "Máy scan tốc độ cao phù hợp với đơn vị nào?",
        "So sánh máy đa chức năng A3 tốc độ 28–35 bản/phút",
        "Giải pháp in đề thi số lượng lớn cần chuẩn bị gì?",
        "Máy in nhân bản khác máy photocopy ở điểm nào?",
    ]
    cards = [{"title": t, "url": "/nhan-tu-van/bao-gia/", "icon": "fa-solid fa-lightbulb",
             "tag": "Sắp ra mắt", "text": "Bài viết đang được biên soạn theo đúng dữ liệu và năng lực thực tế của Hương Sơn.",
             "cta": "Hỏi trực tiếp"} for t in topics]
    body += C.section(C.card_grid(cards, cols=3), pad="py-16")
    body += C.cta_band(title="Chưa tìm thấy câu trả lời cần?",
                       text="Gửi câu hỏi trực tiếp — đội ngũ Hương Sơn tư vấn theo đúng nhu cầu cụ thể.")
    ld = [schema.organization(), schema.breadcrumb(trail)]
    return render.page(
        title="Kiến thức – Tư vấn mua và thuê thiết bị in ấn | Hương Sơn",
        description="Kiến thức giúp Quý khách quyết định thuê hay mua, chọn cấu hình máy photocopy, máy scan phù hợp.",
        url="/ve-huong-son/kien-thuc/", body=body, jsonld=ld, active="/ve-huong-son/")


def _news_hub():
    trail = [("Trang chủ", "/"), ("Về Hương Sơn", "/ve-huong-son/"), ("Tin tức", "/ve-huong-son/tin-tuc/")]
    body = C.page_hero(eyebrow="Tin tức", h1="Tin tức – Dự án và sự kiện",
                       lead="Cập nhật hoạt động triển khai, bàn giao và các sự kiện liên quan của Hương Sơn.", trail=trail)
    body += C.answer_first([
        ["Trang này là gì", "Chuyên mục tin tức về dự án, bàn giao thiết bị và sự kiện của Hương Sơn."],
        ["Dành cho ai", "Khách hàng và đối tác muốn theo dõi hoạt động mới nhất của Hương Sơn."],
        ["Hiện có gì", "Các dự án đã triển khai; tin tức mới sẽ được cập nhật khi có dự án hoặc hoạt động đáng chú ý."],
    ])
    body += C.section(C.card_grid([{
        "title": p, "url": u, "tag": "Case Study", "cta": "Xem chi tiết",
        "text": "Dự án đã triển khai với hồ sơ hợp đồng, bàn giao và nghiệm thu đầy đủ.",
    } for p, u in [
        ("Sở GD&ĐT Quảng Trị – thuê máy in nhân bản siêu tốc 2026", "/du-an/so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026/"),
        ("Sở GD&ĐT Vĩnh Phúc – thuê máy photocopy sao in đề thi", "/du-an/so-gddt-vinh-phuc-thue-may-photocopy-sao-in-de-thi/"),
        ("Cung cấp máy photocopy cho hệ thống Vietcombank", "/du-an/vietcombank-cung-cap-may-photocopy/"),
    ]], cols=3))
    body += C.cta_band(title="Muốn nhận thông tin dự án mới của Hương Sơn?",
                       text="Để lại thông tin liên hệ — Hương Sơn cập nhật khi có dự án và nội dung mới.")
    ld = [schema.organization(), schema.breadcrumb(trail)]
    return render.page(
        title="Tin tức – Dự án và sự kiện Hương Sơn | Hương Sơn",
        description="Cập nhật dự án, bàn giao thiết bị và sự kiện của Hương Sơn.",
        url="/ve-huong-son/tin-tuc/", body=body, jsonld=ld, active="/ve-huong-son/")
