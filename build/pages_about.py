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
    write("/ve-huong-son/tin-tuc/", _news_hub())
    print("  về Hương Sơn: 5 trang")


# ------------------------------------------------------------------- 1. Giới thiệu
def _about():
    trail = [("Trang chủ", "/"), ("Về Hương Sơn", "/ve-huong-son/")]
    body = C.page_hero(
        eyebrow="Về Hương Sơn",
        h1="Giới thiệu Công ty Hương Sơn",
        lead="Thiết bị cho hiện tại, giải pháp cho tương lai.",
        trail=trail)
    body += C.trust_strip()

    paras = [
        f"{SITE['legal_name']} được thành lập ngày {SITE['founded']}, hoạt động trong lĩnh vực thiết bị văn phòng, in ấn, sao chụp, số hóa tài liệu, vật tư và dịch vụ kỹ thuật.",
        "Hương Sơn cung cấp đa dạng các giải pháp gồm máy photocopy, máy in đa chức năng, máy in nhân bản siêu tốc, máy scan, máy phối trang và thiết bị hoàn thiện sau in, máy in Laser, thiết bị văn phòng, thiết bị phòng học và thiết bị dạy học; đồng thời cung cấp vật tư tiêu hao, linh kiện, dịch vụ bảo trì – sửa chữa và cho thuê thiết bị trong nhiều năm qua.",
        "Năm 2017, Hương Sơn trở thành đại lý ủy quyền phân phối chính thức các sản phẩm của tập đoàn DUPLO (Nhật Bản) và TOSHIBA tại miền Bắc Việt Nam. Năm 2021, Hương Sơn tiếp tục làm đại lý bán hàng cho hãng Konica Minolta đối với dòng máy photocopy đa chức năng từ 25 đến 90 bản/phút.",
        "Trong quá trình phát triển, Hương Sơn đã xây dựng quan hệ hợp tác với nhiều thương hiệu thiết bị quốc tế, cùng năng lực cung cấp, triển khai và hỗ trợ kỹ thuật cho khách hàng.",
        "Từ nền tảng kinh nghiệm và năng lực thực tế, giai đoạn 2026–2030, Hương Sơn định hướng phát triển từ doanh nghiệp cung cấp thiết bị thành đơn vị cung cấp giải pháp thiết bị – in ấn – số hóa – dịch vụ. Hương Sơn hướng tới cung cấp giải pháp trọn vòng đời sản phẩm: từ tư vấn, cung cấp và lắp đặt thiết bị đến vật tư, bảo trì, cho thuê, quản lý vận hành và số hóa tài liệu — lấy chất lượng, tính ổn định, hiệu quả đầu tư và dịch vụ đồng hành lâu dài làm nền tảng phát triển.",
    ]
    body += C.section(f'<div class="max-w-4xl">{C.prose(paras)}</div>', pad="py-16")
    body += C.visual_proof_showcase(title="Năng Lực Thiết Bị & Đội Ngũ Kỹ Sư Thực Tế",
                                    eyebrow="Bằng chứng năng lực",
                                    lead="Hương Sơn chứng minh uy tín bằng hệ thống kho hàng quy mô lớn, đội ngũ kỹ sư đào tạo chính hãng và các hợp đồng triển khai thành công.",
                                    bg="beige")

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
                       lead="Năng lực thiết bị, kho bãi sẵn có, đội ngũ kỹ thuật chính hãng, logistics chuyên dụng và các dự án thực tế.", trail=trail)
    body += C.trust_strip()

    cap_cards = [
        {
            "image": "/assets/images/proof/kho-thiet-bi-huong-son.jpg",
            "title": "Hệ thống Kho Bãi & Sẵn Sàng Thiết Bị",
            "text": "Kho hàng rộng tại Hà Nội và mạng lưới miền Bắc luôn sẵn sàng hàng trăm model máy photocopy đa chức năng Toshiba, Konica Minolta và máy in nhân bản siêu tốc Duplo. Sẵn sàng điều động thiết bị lớn trong vòng 24–48 giờ.",
            "badge": "> 200 Thiết bị sẵn có",
        },
        {
            "image": "/assets/images/proof/doi-ngu-ky-thuat-pdi.jpg",
            "title": "Kỹ Sư Được Đào Tạo Trực Tiếp Từ Hãng",
            "text": "Đội ngũ kỹ thuật viên lành nghề với thâm niên lâu năm, được đào tạo chuyên sâu và cấp chứng chỉ trực tiếp từ Duplo (Nhật Bản), Toshiba và Konica Minolta. Thành thạo cân chỉnh quang học, bo mạch điện tử và bảo dưỡng định kỳ.",
            "badge": "Chứng chỉ hãng chính thức",
        },
        {
            "image": "/assets/images/proof/ban-giao-thiet-bi-tan-noi.jpg",
            "title": "Giao Hàng & Hướng Dẫn Vận Hành Tận Nơi",
            "text": "Đội ngũ kỹ thuật vận chuyển chuyên dụng lắp đặt tận bàn giao việc, bàn giao biên bản kiểm tra kỹ thuật, nạp firmware chuẩn và hướng dẫn cán bộ sử dụng thành thạo mọi tính năng sao in bảo mật.",
            "badge": "Bàn giao chuẩn B2B",
        },
        {
            "image": "/assets/images/proof/in-sao-de-thi-duplo.jpg",
            "title": "Quy Trình Kiểm Định PDI & Trực Kỹ Thuật 24/7",
            "text": "100% thiết bị trải qua quy trình 5 bước kiểm định Pre-Delivery Inspection (PDI) nghiêm ngặt trước khi xuất xưởng. Luôn có phương án máy dự phòng N+1 sẵn sàng tại hiện trường.",
            "badge": "100% Kiểm định PDI",
        },
    ]

    cards_html = "".join(f"""
        <div class="border border-gray-200 bg-white flex flex-col hover:border-[{BRAND}] transition duration-300 shadow-xs group">
          <div class="relative overflow-hidden aspect-[16/10] bg-gray-100">
            <img src="{c['image']}" alt="{esc(c['title'])}" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <span class="absolute top-3 left-3 bg-[{DARK}]/90 text-white text-[10.5px] font-bold px-2.5 py-1 uppercase tracking-wider backdrop-blur-xs">{c['badge']}</span>
          </div>
          <div class="p-6 flex-1 flex flex-col">
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[{BRAND}] transition">{c['title']}</h3>
            <p class="text-[14px] text-gray-600 leading-relaxed flex-1">{c['text']}</p>
          </div>
        </div>""" for c in cap_cards)

    body += C.section(
        C.heading(eyebrow="Cơ sở vật chất & Con người", title="Năng lực triển khai thực tế của Hương Sơn")
        + f'<div class="grid grid-cols-1 md:grid-cols-2 gap-6">{cards_html}</div>',
        pad="py-16"
    )

    pdi_steps = [
        ("1. Khảo sát mặt bằng", "Kiểm tra nguồn điện ổn định (220V), vị trí lắp đặt thông thoáng, kết nối mạng LAN/Wi-Fi."),
        ("2. Kiểm định PDI tại kho", "Chạy thử 200 bản in test, kiểm tra sensor nạp giấy, độ phân giải quang học và dán tem xuất kho."),
        ("3. Vận chuyển an toàn", "Xe chuyên dụng giao hàng tận nơi, bọc màng PE chống bụi và cố định chống rung lắc."),
        ("4. Bàn giao & Chuyển giao", "Kỹ sư lắp đặt, cài đặt driver cho toàn bộ máy tính trong mạng, hướng dẫn người dùng vận hành."),
        ("5. Nghiệm thu & SLA", "Ký biên bản bàn giao, chốt số counter khởi điểm và kích hoạt cam kết hỗ trợ kỹ thuật P1/P2/P3."),
    ]
    step_rows = "".join(f"""
        <div class="flex items-start space-x-4">
          <span class="w-9 h-9 bg-[{BRAND}] text-white font-bold text-sm flex items-center justify-center flex-shrink-0 mt-0.5">{i+1}</span>
          <div>
            <h4 class="text-[15px] font-bold text-[#181923] mb-1">{step[0]}</h4>
            <p class="text-[13.5px] text-gray-500 leading-relaxed">{step[1]}</p>
          </div>
        </div>""" for i, step in enumerate(pdi_steps))

    body += C.section(
        C.heading(eyebrow="Quy trình chuẩn mực", title="5 bước bàn giao thiết bị & nghiệm thu thực tế")
        + f'<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 pt-4">{step_rows}</div>',
        bg="light", pad="py-16"
    )

    body += C.section(
        C.heading(eyebrow="Bằng chứng hợp đồng", title="Các dự án tiêu biểu minh chứng năng lực")
        + C.card_grid([
            {
                "title": "Cung cấp máy photocopy cho hệ thống Ngân hàng Vietcombank toàn quốc",
                "url": "/du-an/vietcombank-cung-cap-may-photocopy/",
                "tag": "Ngân hàng Vietcombank",
                "image": "/assets/images/products/vietcombank-2024.jpg",
                "text": "Triển khai thành công 02 đợt: lô máy Konica Minolta (2022–2023) và lô 127 máy photocopy Toshiba đa chức năng (2024) cho chi nhánh toàn quốc.",
                "cta": "Xem case study",
            },
            {
                "title": "Thuê máy photocopy in sao đề thi – Sở GD&ĐT Vĩnh Phúc",
                "url": "/du-an/so-gddt-vinh-phuc-thue-may-photocopy-sao-in-de-thi/",
                "tag": "Sở GD&ĐT Vĩnh Phúc",
                "image": "/assets/images/products/98-cho-thue-toshiba-e-studio-456.jpg",
                "text": "Thuê 02 máy photocopy tốc độ cao Toshiba 7518A/8518A phục vụ in sao đề thi; có biên bản bàn giao, nhật ký vận hành và nghiệm thu thực tế minh bạch.",
                "cta": "Xem case study",
            },
            {
                "title": "Thuê máy in nhân bản siêu tốc Duplo Kỳ thi Tốt nghiệp THPT 2026",
                "url": "/du-an/so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026/",
                "tag": "Sở GD&ĐT Quảng Trị",
                "image": "/assets/images/products/duplo-dp-x550.jpg",
                "text": "Hợp đồng kinh tế thuê 02 máy in siêu tốc Duplo tốc độ 150–155 bản/phút, bảo đảm an ninh cách ly 3 vòng và hoàn thành 100% tiến độ kỳ thi.",
                "cta": "Xem case study",
            },
        ], cols=3),
        pad="py-16"
    )

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
    body += C.trust_strip()
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
    body += C.trust_strip()

    items = [
        ("Hồ sơ năng lực Hương Sơn 2026 (PDF)", "Giới thiệu công ty, năng lực thiết bị, kỹ thuật, logistics và dự án tiêu biểu.", "/assets/docs/ho-so-nang-luc-huong-son.pdf", True),
        ("Catalogue thiết bị in siêu tốc Duplo", "Danh mục máy in nhân bản kỹ thuật số và thiết bị hoàn thiện sau in Nhật Bản.", "#nhan-tai-lieu", False),
        ("Catalogue máy photocopy Toshiba A3", "Thông số kỹ thuật chi tiết các dòng máy đa chức năng e-STUDIO.", "#nhan-tai-lieu", False),
        ("Bảng giá thuê máy photocopy & in đề thi", "Báo giá tham khảo các gói Basic / Standard / Business / Enterprise.", "/nhan-tu-van/tu-van-thue-may/", False),
        ("Mẫu hồ sơ hợp đồng – nghiệm thu", "Tài liệu mẫu phục vụ lập dự toán và hồ sơ mời thầu B2B/B2G.", "#nhan-tai-lieu", False),
    ]
    cards = []
    for t, d, link, is_direct in items:
        if is_direct:
            btn = f'<a href="{link}" download class="flex-shrink-0 ml-4 bg-[{BRAND}] hover:bg-[#147700] text-white px-5 py-2.5 text-xs font-bold uppercase tracking-wider transition inline-flex items-center gap-1.5"><i class="fa-solid fa-download"></i><span>Tải PDF trực tiếp</span></a>'
        else:
            btn = f'<a href="{link}" class="flex-shrink-0 ml-4 border border-gray-300 hover:border-[{BRAND}] hover:text-[{BRAND}] text-[#181923] px-4 py-2.5 text-xs font-bold uppercase tracking-wider transition inline-flex items-center gap-1.5"><i class="fa-solid fa-envelope"></i><span>Nhận qua Email</span></a>'
        cards.append(f"""
      <div class="flex flex-col sm:flex-row sm:items-center justify-between border border-gray-200 bg-white p-6 gap-4">
        <div class="flex items-start space-x-4">
          <span class="w-11 h-11 bg-[{DARK}] text-white flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-file-pdf"></i></span>
          <div><p class="font-bold text-[#181923] mb-1">{esc(t)}</p><p class="text-[13.5px] text-gray-500">{esc(d)}</p></div>
        </div>
        {btn}
      </div>""")
    body += C.section(f'<div class="space-y-4">{"".join(cards)}</div>', pad="py-16")
    body += f'<div id="nhan-tai-lieu"></div>' + C.section(forms.resource_form(), bg="light")
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
    body += C.trust_strip()
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
    body = C.page_hero(eyebrow="Tin tức & Sự kiện", h1="Tin tức – Dự án & Cẩm nang chuyên môn",
                       lead="Cập nhật hoạt động triển khai thực tế, dự án bàn giao và các bài viết cẩm nang kỹ thuật chuyên sâu của Hương Sơn.", trail=trail)
    body += C.trust_strip()


    # Section 1: Featured Knowledge Pillars (Cẩm nang kiến thức nổi bật) with REAL IMAGES!
    featured_articles = [
        {
            "title": "Nên thuê hay mua máy photocopy cho doanh nghiệp, trường học?",
            "url": "/ve-huong-son/kien-thuc/nen-thue-hay-mua-may-photocopy/",
            "tag": "Tư vấn đầu tư",
            "image": "/assets/images/hero-office.jpg",
            "text": "Phân tích bài toán chi phí dòng tiền TCO, khấu hao và rủi ro hỏng hóc giúp lãnh đạo đưa ra quyết định mua sắm tối ưu nhất.",
            "cta": "Đọc cẩm nang",
        },
        {
            "title": "Tiêu chuẩn máy in nhân bản siêu tốc phục vụ sao in đề thi THPT",
            "url": "/ve-huong-son/kien-thuc/tieu-chuan-may-in-de-thi-thpt/",
            "tag": "Thi cử & Bảo mật",
            "image": "/assets/images/hero-education.jpg",
            "text": "Yêu cầu kỹ thuật cách ly 3 vòng, tốc độ 130–150 bản/phút, bảo mật tuyệt đối và phương án máy dự phòng N+1 theo quy chế thi Bộ GD&ĐT.",
            "cta": "Đọc cẩm nang",
        },
        {
            "title": "Hướng dẫn chọn máy scan chuyên dụng số hóa tài liệu lưu trữ",
            "url": "/ve-huong-son/kien-thuc/huong-dan-chon-may-scan-so-hoa-tai-lieu/",
            "tag": "Chuyển đổi số",
            "image": "/assets/images/banners/highspeed_scanner_1787905830483.jpg",
            "text": "Tiêu chí chọn máy scan nạp tự động ADF, quét phẳng Flatbed, scan sách không phá gáy và công nghệ OCR bóc tách tiếng Việt chuẩn Thông tư 02.",
            "cta": "Đọc cẩm nang",
        },
        {
            "title": "So sánh chi tiết máy photocopy Toshiba và Konica Minolta",
            "url": "/ve-huong-son/kien-thuc/so-sanh-may-photocopy-toshiba-va-konica-minolta/",
            "tag": "So sánh thiết bị",
            "image": "/assets/images/products/toshiba-e-studio-4528a.jpg",
            "text": "So sánh chuyên sâu về độ bền cơ học, chi phí bản chụp, tính sẵn có linh kiện và tính năng bảo mật tài liệu ngân hàng.",
            "cta": "Đọc cẩm nang",
        },
        {
            "title": "Định mức tiêu hao mực in & cuộn Master máy in siêu tốc Duplo",
            "url": "/ve-huong-son/kien-thuc/dinh-muc-muc-in-cuon-master-duplo-in-de-thi/",
            "tag": "Định mức vật tư",
            "image": "/assets/images/products/95-bang-tra-ma-muc-master-may-in-duplo.jpg",
            "text": "Công thức tính chính xác số lượng cuộn master và bình mực 1.000ml cho kỳ thi tuyển sinh và tốt nghiệp THPT, dự toán không thừa thiếu.",
            "cta": "Đọc cẩm nang",
        },
        {
            "title": "Số hóa học bạ điện tử THPT đồng bộ CSDL ngành chuẩn MOET",
            "url": "/ve-huong-son/kien-thuc/so-hoa-hoc-ba-dien-tu-thpt-chuan-moet/",
            "tag": "Giáo dục số",
            "image": "/assets/images/banners/hero_edu_tech_1787899932385.jpg",
            "text": "Quy trình scan 2 mặt tự động học bạ, khử nhiễu nếp gấp giấy cũ và đồng bộ dữ liệu vào phần mềm quản lý trường học toàn quốc.",
            "cta": "Đọc cẩm nang",
        },
    ]

    body += C.section(
        '<div class="flex items-center justify-between mb-8 flex-wrap gap-4">'
        '<div>'
        f'<span class="text-[{BRAND}] font-bold text-xs uppercase tracking-[0.2em] block mb-1">Cẩm nang chuyên sâu</span>'
        '<h2 class="text-2xl sm:text-[30px] font-bold text-gray-900 leading-tight">Bài viết cẩm nang &amp; Hướng dẫn kỹ thuật</h2>'
        '</div>'
        '<a href="/ve-huong-son/kien-thuc/" class="inline-flex items-center gap-2 text-[#1A9900] hover:text-[#147700] font-bold text-xs uppercase tracking-wider transition border border-[#1A9900]/30 hover:border-[#1A9900] px-4 py-2 rounded-xs">'
        '<span>Xem tất cả 16 bài cẩm nang</span>'
        '<i class="fa-solid fa-arrow-right text-[11px]"></i>'
        '</a>'
        '</div>'
        + C.card_grid(featured_articles, cols=3),
        pad="py-16"
    )

    # Section 2: Case Studies & Projects with REAL IMAGES!
    case_studies = [
        {
            "title": "Sở GD&ĐT Quảng Trị – Thuê máy in nhân bản siêu tốc Duplo 2026",
            "url": "/du-an/so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026/",
            "tag": "Dự án GD",
            "image": "/assets/images/products/duplo-dp-x550.jpg",
            "text": "Bàn giao và vận hành hệ thống máy in siêu tốc Duplo DP-X550 phục vụ kỳ thi tuyển sinh và tốt nghiệp THPT an toàn tuyệt đối.",
            "cta": "Xem chi tiết",
        },
        {
            "title": "Sở GD&ĐT Vĩnh Phúc – Thuê hệ thống máy photocopy sao in đề thi",
            "url": "/du-an/so-gddt-vinh-phuc-thue-may-photocopy-sao-in-de-thi/",
            "tag": "Dự án GD",
            "image": "/assets/images/products/98-cho-thue-toshiba-e-studio-456.jpg",
            "text": "Cung cấp hệ thống máy photocopy công suất lớn và phương án máy dự phòng N+1 trong khu vực cách ly 3 vòng.",
            "cta": "Xem chi tiết",
        },
        {
            "title": "Cung cấp máy photocopy cho hệ thống Vietcombank toàn quốc",
            "url": "/du-an/vietcombank-cung-cap-may-photocopy/",
            "tag": "Ngân hàng",
            "image": "/assets/images/products/vietcombank-2024.jpg",
            "text": "Triển khai dịch vụ Managed Print Services và máy photocopy Toshiba e-STUDIO tại các chi nhánh và phòng giao dịch Vietcombank.",
            "cta": "Xem chi tiết",
        },
    ]

    body += C.section(
        '<div class="flex items-center justify-between mb-8 flex-wrap gap-4">'
        '<div>'
        f'<span class="text-[{BRAND}] font-bold text-xs uppercase tracking-[0.2em] block mb-1">Dự án tiêu biểu</span>'
        '<h2 class="text-2xl sm:text-[30px] font-bold text-gray-900 leading-tight">Hoạt động triển khai &amp; Bàn giao thiết bị</h2>'
        '</div>'
        '<a href="/du-an/" class="inline-flex items-center gap-2 text-[#1A9900] hover:text-[#147700] font-bold text-xs uppercase tracking-wider transition border border-[#1A9900]/30 hover:border-[#1A9900] px-4 py-2 rounded-xs">'
        '<span>Xem tất cả dự án</span>'
        '<i class="fa-solid fa-arrow-right text-[11px]"></i>'
        '</a>'
        '</div>'
        + C.card_grid(case_studies, cols=3),
        bg="light",
        pad="py-16"
    )

    body += C.cta_band(title="Muốn nhận thông tin dự án & cẩm nang mới nhất của Hương Sơn?",
                       text="Để lại thông tin liên hệ — Đội ngũ Hương Sơn sẽ cập nhật tài liệu kỹ thuật và giải pháp mới nhất cho Quý vị.")
    ld = [schema.organization(), schema.breadcrumb(trail)]
    return render.page(
        title="Tin Tức & Cẩm Nang Thiết Bị In Ấn, Số Hóa | Hương Sơn",
        description="Cập nhật tin tức dự án bàn giao thiết bị, cẩm nang in ấn đề thi, hướng dẫn chọn máy photocopy và số hóa tài liệu tại Hương Sơn.",
        url="/ve-huong-son/tin-tuc/", body=body, jsonld=ld, active="/ve-huong-son/")
