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


def _rental_pricing_table():
    return f"""
      <div class="my-6 border border-gray-200 bg-white p-6 sm:p-8 shadow-xs">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6 pb-6 border-b border-gray-200">
          <div>
            <span class="text-[{BRAND}] font-bold text-xs uppercase tracking-[0.2em] block mb-1">Bảng giá minh bạch 2026</span>
            <h3 class="text-xl sm:text-2xl font-bold text-[#181923]">Bảng so sánh các gói cho thuê máy photocopy văn phòng</h3>
          </div>
          <span class="inline-flex items-center gap-1.5 text-xs font-bold text-[#1A9900] bg-[#1A9900]/10 px-3 py-1.5">
            <i class="fa-solid fa-check-circle"></i> 100% Máy mới / Chuẩn chính hãng
          </span>
        </div>

        <div class="overflow-x-auto">
          <table class="w-full text-left border-collapse border border-gray-200 text-sm">
            <thead>
              <tr class="bg-[#181924] text-white">
                <th class="p-3.5 font-bold uppercase tracking-wider text-xs">Gói dịch vụ</th>
                <th class="p-3.5 font-bold uppercase tracking-wider text-xs">Giá thuê tham khảo</th>
                <th class="p-3.5 font-bold uppercase tracking-wider text-xs">Định mức bản in</th>
                <th class="p-3.5 font-bold uppercase tracking-wider text-xs">Phí vượt định mức</th>
                <th class="p-3.5 font-bold uppercase tracking-wider text-xs">Thiết bị & Tốc độ</th>
                <th class="p-3.5 font-bold uppercase tracking-wider text-xs">Quy mô phù hợp</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <tr class="hover:bg-gray-50 transition">
                <td class="p-3.5 font-bold text-[#181923]">
                  <div class="text-[15px]">Gói Khởi Nghiệp (Basic)</div>
                  <span class="text-xs text-gray-500 font-normal">Cho văn phòng nhỏ, start-up</span>
                </td>
                <td class="p-3.5 font-bold text-[#1A9900] text-base">Từ 800.000 đ<span class="text-xs text-gray-500 font-normal">/tháng</span></td>
                <td class="p-3.5 font-semibold text-gray-700">3.000 trang A4/tháng</td>
                <td class="p-3.5 text-gray-600">100 đ/trang</td>
                <td class="p-3.5 text-gray-700">Toshiba / Ricoh A3-A4 (23–25 ppm), In-Copy-Scan</td>
                <td class="p-3.5 text-gray-600">5 – 15 nhân sự</td>
              </tr>
              <tr class="bg-[#1A9900]/5 hover:bg-[#1A9900]/10 transition">
                <td class="p-3.5 font-bold text-[#181923]">
                  <div class="text-[15px] flex items-center gap-2">Gói Tiêu Chuẩn (Standard) <span class="bg-[#1A9900] text-white text-[10px] px-2 py-0.5 font-bold">Phổ biến nhất</span></div>
                  <span class="text-xs text-gray-500 font-normal">Doanh nghiệp vừa, trường học</span>
                </td>
                <td class="p-3.5 font-bold text-[#1A9900] text-base">Từ 1.200.000 đ<span class="text-xs text-gray-500 font-normal">/tháng</span></td>
                <td class="p-3.5 font-semibold text-gray-700">5.000 trang A4/tháng</td>
                <td class="p-3.5 text-gray-600">90 đ/trang</td>
                <td class="p-3.5 text-gray-700">Toshiba e-STUDIO thế hệ mới (28–35 ppm), đảo 2 mặt tự động</td>
                <td class="p-3.5 text-gray-600">15 – 40 nhân sự</td>
              </tr>
              <tr class="hover:bg-gray-50 transition">
                <td class="p-3.5 font-bold text-[#181923]">
                  <div class="text-[15px]">Gói Chuyên Nghiệp (Business)</div>
                  <span class="text-xs text-gray-500 font-normal">Cơ quan, ngân hàng, công ty lớn</span>
                </td>
                <td class="p-3.5 font-bold text-[#1A9900] text-base">Từ 1.800.000 đ<span class="text-xs text-gray-500 font-normal">/tháng</span></td>
                <td class="p-3.5 font-semibold text-gray-700">10.000 trang A4/tháng</td>
                <td class="p-3.5 text-gray-600">80 đ/trang</td>
                <td class="p-3.5 text-gray-700">Toshiba / Konica Minolta (45–55 ppm), khay nạp 2.000 tờ</td>
                <td class="p-3.5 text-gray-600">40 – 100 nhân sự</td>
              </tr>
              <tr class="hover:bg-gray-50 transition">
                <td class="p-3.5 font-bold text-[#181923]">
                  <div class="text-[15px]">Gói Quản Lý Trọn Gói (Enterprise MPS)</div>
                  <span class="text-xs text-gray-500 font-normal">Hệ thống nhiều chi nhánh, Sở GD&ĐT</span>
                </td>
                <td class="p-3.5 font-bold text-[#181923] text-base">Theo sản lượng <span class="text-xs text-gray-500 font-normal">(Pay-per-page)</span></td>
                <td class="p-3.5 font-semibold text-gray-700">Không giới hạn định mức</td>
                <td class="p-3.5 text-gray-600">Thỏa thuận theo khối lượng</td>
                <td class="p-3.5 text-gray-700">Đội máy phân tán, kết nối quản lý counter tự động (như Vietcombank)</td>
                <td class="p-3.5 text-gray-600">> 100 nhân sự / Nhiều điểm</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-6 pt-6 border-t border-gray-200">
          <div class="flex items-start gap-3">
            <i class="fa-solid fa-certificate text-[{BRAND}] text-lg mt-0.5"></i>
            <div>
              <h5 class="text-xs font-bold text-[#181923] uppercase">Máy Mới 100% / Chính Hãng</h5>
              <p class="text-[12.5px] text-gray-500">Đầy đủ CO/CQ, cam kết không cho thuê máy bãi, máy cũ nát.</p>
            </div>
          </div>
          <div class="flex items-start gap-3">
            <i class="fa-solid fa-droplet-slash text-[{BRAND}] text-lg mt-0.5"></i>
            <div>
              <h5 class="text-xs font-bold text-[#181923] uppercase">0đ Phí Mực & Linh Kiện</h5>
              <p class="text-[12.5px] text-gray-500">Miễn phí 100% mực in, trống, cụm sấy và linh kiện hao mòn.</p>
            </div>
          </div>
          <div class="flex items-start gap-3">
            <i class="fa-solid fa-rotate text-[{BRAND}] text-lg mt-0.5"></i>
            <div>
              <h5 class="text-xs font-bold text-[#181923] uppercase">Đổi Máy Trong 24 Giờ</h5>
              <p class="text-[12.5px] text-gray-500">Đổi máy tương đương ngay nếu sự cố không khắc phục tại chỗ trong 2h.</p>
            </div>
          </div>
          <div class="flex items-start gap-3">
            <i class="fa-solid fa-handshake text-[{BRAND}] text-lg mt-0.5"></i>
            <div>
              <h5 class="text-xs font-bold text-[#181923] uppercase">Dùng Thử Miễn Phí</h5>
              <p class="text-[12.5px] text-gray-500">Hỗ trợ trải nghiệm máy thực tế tại văn phòng trước khi ký hợp đồng.</p>
            </div>
          </div>
        </div>
      </div>"""


def _digitization_deliverables_spec():
    return f"""
      <div class="my-6 border border-gray-200 bg-white p-6 sm:p-8 shadow-xs">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6 pb-6 border-b border-gray-200">
          <div>
            <span class="text-[{BRAND}] font-bold text-xs uppercase tracking-[0.2em] block mb-1">Mẫu dữ liệu thực tế</span>
            <h3 class="text-xl sm:text-2xl font-bold text-[#181923]">Quy cách & Mẫu dữ liệu bàn giao số hóa tài liệu</h3>
          </div>
          <span class="inline-flex items-center gap-1.5 text-xs font-bold text-[#1A9900] bg-[#1A9900]/10 px-3 py-1.5">
            <i class="fa-solid fa-shield-check"></i> Chuẩn Thông tư 02/2019/TT-BNV
          </span>
        </div>

        <p class="text-[14.5px] text-gray-600 leading-relaxed mb-6">
          Để Quý cơ quan, trường học và doanh nghiệp hoàn toàn an tâm trước khi lựa chọn, Hương Sơn minh bạch 100% quy cách đóng gói và mẫu dữ liệu bàn giao số hóa thực tế theo đúng tiêu chuẩn lưu trữ quốc gia:
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
          <div class="border border-gray-200 p-5 bg-gray-50/60 flex flex-col">
            <div class="flex items-center gap-3 mb-3">
              <span class="w-10 h-10 bg-[{DARK}] text-white flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-file-pdf text-base"></i></span>
              <div>
                <h4 class="text-sm font-bold text-[#181923]">1. File PDF Searchable OCR Tiếng Việt</h4>
                <span class="text-xs text-gray-500">Chuẩn lưu trữ ISO 19005-1 (PDF/A-1b)</span>
              </div>
            </div>
            <ul class="text-[13px] text-gray-600 space-y-2 leading-relaxed flex-1">
              <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1"></i><span><strong>Độ chính xác OCR:</strong> Đạt ≥ 98% tiếng Việt có dấu, tìm kiếm toàn văn trực tiếp trên Adobe / Foxit Reader.</span></li>
              <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1"></i><span><strong>Độ phân giải chuẩn:</strong> 300 DPI (Màu 24-bit hoặc Grayscale), chống cong góc và khử bóng mờ trang giấy.</span></li>
              <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1"></i><span><strong>Dung lượng tối ưu:</strong> Nén chuẩn CCITT Group 4 / JBIG2, chỉ khoảng 300KB – 800KB/trang mà vẫn sắc nét.</span></li>
            </ul>
          </div>

          <div class="border border-gray-200 p-5 bg-gray-50/60 flex flex-col">
            <div class="flex items-center gap-3 mb-3">
              <span class="w-10 h-10 bg-[{DARK}] text-white flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-file-excel text-base"></i></span>
              <div>
                <h4 class="text-sm font-bold text-[#181923]">2. Bảng Chỉ Mục Siêu Dữ Liệu (Metadata Index)</h4>
                <span class="text-xs text-gray-500">File Excel / CSV / JSON tương thích hệ thống QLVB</span>
              </div>
            </div>
            <ul class="text-[13px] text-gray-600 space-y-2 leading-relaxed flex-1">
              <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1"></i><span><strong>Đầy đủ 10 trường tra cứu:</strong> STT, Mã định danh hồ sơ, Tên văn bản, Số hiệu, Ngày ban hành, Cơ quan ban hành, Trích yếu, Số trang, Dung lượng, Mã Hash.</span></li>
              <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1"></i><span><strong>Tương thích phần mềm:</strong> Dễ dàng import vào VNPT-iOffice, Viettel vOffice, CSDL Giáo dục MOET và phần mềm lưu trữ nội bộ.</span></li>
              <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1"></i><span><strong>Liên kết trực tiếp:</strong> Cột Hyperlink bấm là mở trực tiếp file PDF tương ứng.</span></li>
            </ul>
          </div>
        </div>

        <div class="border border-gray-200 bg-white p-5 mb-6">
          <h4 class="text-xs font-bold uppercase tracking-wider text-[#181923] mb-3 flex items-center gap-2">
            <i class="fa-solid fa-folder-tree text-[{BRAND}]"></i> Cấu trúc cây thư mục bàn giao chuẩn hóa:
          </h4>
          <pre class="bg-gray-900 text-gray-200 p-4 text-xs font-mono rounded-xs overflow-x-auto leading-relaxed">
[DU_LIEU_SO_HOA_HUONG_SON_2026]/
├── 01_BANG_KE_CHI_MUC_METADATA/
│   ├── Danh_muc_ho_so_so_hoa_tong_hop.xlsx  (Bảng tra cứu 10 trường dữ liệu)
│   └── Bang_kiem_tra_ma_bam_SHA256.txt     (Đối soát tính toàn vẹn 100%)
├── 02_TAI_LIEU_PDF_SEARCHABLE/
│   ├── [2025_HOC_BA_THPT]/
│   │   ├── HB_001_NGUYEN_VAN_AN.pdf        (PDF/A-1b 300DPI Searchable)
│   │   └── HB_002_TRAN_THI_BINH.pdf
│   └── [2024_HO_SO_CAN_BO]/
│       ├── HSCB_0142_LE_VAN_CUONG.pdf
│       └── HSCB_0143_PHAM_THI_DUNG.pdf
└── 03_BIEN_BAN_NGHIEM_THU_VA_BAN_GIAO/
    ├── Bien_ban_ban_giao_ho_so_goc.pdf
    └── Bien_ban_nghiem_thu_chat_luong_so_hoa.pdf</pre>
        </div>

        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 p-4 bg-[#1A9900]/10 border border-[#1A9900]/30">
          <div class="flex items-center gap-3">
            <i class="fa-solid fa-shield-halved text-[#1A9900] text-xl"></i>
            <span class="text-[13.5px] text-[#181923] font-medium">Cam kết bảo mật dữ liệu tuyệt đối (Ký NDA) và thực hiện số hóa On-site trực tiếp tại trụ sở Quý cơ quan.</span>
          </div>
          <a href="/nhan-tu-van/khao-sat-so-hoa/" class="bg-[{BRAND}] hover:bg-[#147700] text-white px-5 py-2.5 text-xs font-bold uppercase tracking-wider transition whitespace-nowrap">Yêu cầu demo mẫu dữ liệu</a>
        </div>
      </div>"""


def _exam_duplo_highlights():
    return f"""
      <div class="my-6 border border-gray-200 bg-white p-6 sm:p-8 shadow-xs">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6 pb-6 border-b border-gray-200">
          <div>
            <span class="text-[{BRAND}] font-bold text-xs uppercase tracking-[0.2em] block mb-1">Chuyên môn khác biệt</span>
            <h3 class="text-xl sm:text-2xl font-bold text-[#181923]">Ưu thế tuyệt đối của máy in nhân bản siêu tốc Duplo trong in sao đề thi</h3>
          </div>
          <span class="inline-flex items-center gap-1.5 text-xs font-bold text-[#1A9900] bg-[#1A9900]/10 px-3 py-1.5">
            <i class="fa-solid fa-lock"></i> Chuẩn cách ly 3 vòng Bộ GD&ĐT
          </span>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="border border-gray-200 p-5 flex flex-col bg-gray-50/50">
            <span class="text-2xl font-bold text-[#1A9900] mb-1">130 – 150</span>
            <h4 class="text-sm font-bold text-[#181923] mb-2">Bản in / Phút</h4>
            <p class="text-xs text-gray-500 leading-relaxed">Tốc độ in vượt trội, hoàn thành hàng chục nghìn trang đề thi chỉ trong vài giờ làm việc, nhanh gấp 3–5 lần máy photocopy.</p>
          </div>
          <div class="border border-gray-200 p-5 flex flex-col bg-gray-50/50">
            <span class="text-2xl font-bold text-[#1A9900] mb-1">25 – 40 đ</span>
            <h4 class="text-sm font-bold text-[#181923] mb-2">Chi phí / Trang in</h4>
            <p class="text-xs text-gray-500 leading-relaxed">Càng in nhiều chi phí càng giảm. Tiết kiệm tới 70–80% ngân sách sao in đề thi so với công nghệ in laser thông thường.</p>
          </div>
          <div class="border border-gray-200 p-5 flex flex-col bg-gray-50/50">
            <span class="text-2xl font-bold text-[#1A9900] mb-1">Dự phòng N+1</span>
            <h4 class="text-sm font-bold text-[#181923] mb-2">Máy dự phòng tại chỗ</h4>
            <p class="text-xs text-gray-500 leading-relaxed">Luôn bố trí tối thiểu 01 máy dự phòng sẵn sàng tại điểm in, kèm kỹ thuật viên trực hiện trường, bảo đảm không gián đoạn kỳ thi.</p>
          </div>
          <div class="border border-gray-200 p-5 flex flex-col bg-gray-50/50">
            <span class="text-2xl font-bold text-[#1A9900] mb-1">Bảo mật 100%</span>
            <h4 class="text-sm font-bold text-[#181923] mb-2">Cách ly tuyệt đối</h4>
            <p class="text-xs text-gray-500 leading-relaxed">Thiết bị hoạt động độc lập, không kết nối internet, tuân thủ nghiêm ngặt quy chế an ninh sao in đề thi của Bộ Giáo dục và Đào tạo.</p>
          </div>
        </div>

        <div class="mt-6 pt-6 border-t border-gray-200 flex flex-col sm:flex-row items-center justify-between gap-4">
          <div class="text-xs text-gray-500">
            <strong class="text-gray-700">Dự án đã kiểm chứng:</strong> Đã triển khai thành công cho Sở GD&ĐT Vĩnh Phúc (2025) và Sở GD&ĐT Quảng Trị (Kỳ thi Tốt nghiệp THPT 2026).
          </div>
          <a href="/du-an/so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026/" class="text-xs font-bold text-[#1A9900] hover:underline uppercase tracking-wider inline-flex items-center gap-1">
            <span>Xem chi tiết hợp đồng Quảng Trị</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
          </a>
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

    # Flagship Service Concrete Proof Blocks
    if s.get("slug") in ("cho-thue-thiet-bi", "cho-thue-may-truong-hoc"):
        body += C.section(_rental_pricing_table(), bg="light", pad="py-16")
    elif s.get("slug") in ("scan-so-hoa", "so-hoa-ho-so-truong-hoc"):
        body += C.section(_digitization_deliverables_spec(), bg="light", pad="py-16")
    elif s.get("slug") in ("in-de-thi", "in-de-thi-tai-lieu"):
        body += C.section(_exam_duplo_highlights(), bg="light", pad="py-16")

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
        ["Giải Pháp Thiết Kế Theo Ngành", "Tổng hợp 8 gói giải pháp chuyên sâu được thiết kế tối ưu cho Giáo dục, Cơ quan Nhà nước, Ngân hàng – Tài chính và Doanh nghiệp lớn."],
        ["Khảo Sát Thực Tế & May Đo", "Định cấu hình thiết bị và phương án dịch vụ chính xác theo sản lượng in ấn, yêu cầu bảo mật và ngân sách dự toán của từng đơn vị."],
        ["Hiệu Quả Đầu Tư & Tối Ưu Chi Phí", "Giúp khách hàng giảm 30–50% chi phí vận hành, loại bỏ rủi ro gián đoạn công việc và chủ động kiểm soát vòng đời tài liệu."],
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
