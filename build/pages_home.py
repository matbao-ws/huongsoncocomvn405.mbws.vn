# -*- coding: utf-8 -*-
"""TRANG CHỦ — map các section giao diện mẫu 8324 sang nội dung khách hàng của
Hương Sơn (xem KE-HOACH §7). Chỉ trình bày nội dung phục vụ khách hàng — không
đưa mô hình vận hành/kênh bán hàng nội bộ lên trang công khai.
Giữ nguyên ngôn ngữ thiết kế: xanh lá #1A9900 + đen than #181924, phong cách
vuông vức/flat.
"""
import render
import schema
import components as C
import forms
from render import SITE, BRAND, DARK
from components import esc, WRAP, BEIGE

PRODUCTS = render.load("products.json")
SOLUTIONS = render.load("solutions.json")
PROJECTS = render.load("projects.json")


# ---------------------------------------------------------------- S1: Hero
def _hero():
    return f"""
  <section class="relative bg-[{DARK}] min-h-[560px] lg:min-h-[640px] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
      <img src="/assets/images/products/duplo-dp-x550.jpg" alt="Thiết bị Hương Sơn" class="w-full h-full object-cover object-center opacity-40" />
      <div class="absolute inset-0 bg-gradient-to-r from-[{DARK}] via-[{DARK}]/95 to-[{DARK}]/70"></div>
    </div>
    <div class="relative z-10 {WRAP} py-20 w-full">
      <div class="max-w-3xl text-white">
        <span class="font-handwriting text-3xl text-[#5eb74c] font-bold block mb-3">Hương Sơn từ 2008</span>
        <h1 class="text-3xl sm:text-4xl lg:text-[46px] font-bold text-white leading-tight mb-5">
          Giải pháp Thiết bị, In ấn, Số hóa & Quản lý tài liệu
        </h1>
        <p class="text-[15px] sm:text-base text-gray-200 mb-8 leading-relaxed font-medium max-w-2xl">
          Hương Sơn cung cấp thiết bị, cho thuê, bảo trì, in ấn số lượng lớn và số hóa tài liệu cho Cơ quan Nhà nước, Sở GD&ĐT, Trường học, Ngân hàng và Doanh nghiệp.
        </p>
        <div class="flex flex-wrap items-center gap-4">
          <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[{BRAND}] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Yêu cầu báo giá</a>
          <a href="/giai-phap/giao-duc/in-de-thi/" data-ga="cta_click" class="border border-gray-400 hover:border-white text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Phương án in đề thi</a>
        </div>
      </div>
    </div>
  </section>"""


# ------------------------------------------------------------- S2: 3 CTA nóng
def _quick_cta():
    items = [
        ("fa-solid fa-print", "Thuê máy in đề thi", "Duplo tốc độ cao, kèm máy dự phòng và kỹ thuật trực.", "/giai-phap/giao-duc/in-de-thi/"),
        ("fa-solid fa-copy", "Thuê máy photocopy", "Theo tháng hoặc theo sản lượng, có bảo trì và vật tư.", "/giai-phap/cho-thue-thiet-bi/"),
        ("fa-solid fa-file-arrow-up", "Khảo sát số hóa", "Scan – OCR – chuẩn hóa dữ liệu cho hồ sơ, văn bằng.", "/giai-phap/scan-so-hoa/"),
    ]
    cards = "".join(f"""
        <a href="{u}" data-ga="cta_click" class="bg-[{DARK}] hover:bg-[{BRAND}] border border-gray-700/80 p-8 text-white transition-colors duration-300 group">
          <div class="w-11 h-11 bg-white/10 group-hover:bg-white/20 flex items-center justify-center mb-6"><i class="{icon} text-lg"></i></div>
          <h3 class="text-lg font-bold text-white mb-2 uppercase tracking-wider">{esc(t)}</h3>
          <p class="text-gray-300 group-hover:text-white/90 text-sm leading-relaxed">{esc(d)}</p>
        </a>""" for icon, t, d, u in items)
    return f"""
  <section class="bg-[{DARK}] pb-12 pt-0">
    <div class="{WRAP}"><div class="grid grid-cols-1 md:grid-cols-3 gap-6 -mt-14 relative z-20">{cards}</div></div>
  </section>"""


# --------------------------------------------------------- S3: Thương hiệu
def _brands():
    badges = "".join(
        f'<span class="text-sm md:text-base font-extrabold tracking-wider text-gray-400 hover:text-[{DARK}] transition">{esc(b)}</span>'
        for b in SITE["brands"])
    return f"""
  <section class="py-8 bg-white border-b border-gray-200">
    <div class="{WRAP}"><div class="flex flex-wrap items-center justify-center md:justify-between gap-8">{badges}</div></div>
  </section>"""


# ------------------------------------------------------- S4: Why choose us
def _why():
    items = [
        ("fa-solid fa-layer-group", "Đa thương hiệu", "Đại lý ủy quyền Duplo, Toshiba tại miền Bắc từ 2017; đại lý Konica Minolta từ 2021 — chọn đúng thiết bị, không bó buộc một hãng."),
        ("fa-solid fa-headset", "Dịch vụ đi cùng thiết bị", "Bảo trì, kỹ thuật trực, máy dự phòng và cam kết thời gian xử lý theo cấp độ sự cố."),
        ("fa-solid fa-graduation-cap", "Chuyên sâu Giáo dục", "Kinh nghiệm thực tế in sao đề thi cho Sở GD&ĐT Vĩnh Phúc và Quảng Trị, có hồ sơ hợp đồng đầy đủ."),
        ("fa-solid fa-truck-fast", "Cho thuê & Managed Print", "Từ thuê máy theo đợt đến quản lý trọn gói đội thiết bị, tính theo sản lượng và SLA."),
        ("fa-solid fa-boxes-stacked", "Vật tư Fansipan", "Thương hiệu vật tư riêng — mực, cụm mực, linh kiện tương thích nhiều dòng máy."),
    ]
    rows = "".join(f"""
        <div class="flex items-start space-x-4">
          <div class="w-10 h-10 bg-[{BRAND}] text-white flex items-center justify-center flex-shrink-0 mt-1"><i class="{icon} text-base"></i></div>
          <div><h3 class="text-base font-bold text-[#181923] mb-1">{esc(t)}</h3><p class="text-sm text-gray-500 leading-relaxed">{esc(d)}</p></div>
        </div>""" for icon, t, d in items)
    return f"""
  <section class="py-16 bg-white">
    <div class="{WRAP}">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        <div class="lg:col-span-5">
          <span class="font-handwriting text-3xl text-[#5eb74c] font-bold block mb-2">Vì sao chọn Hương Sơn?</span>
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#181923] mb-6 leading-tight">Từ máy đến giải pháp vận hành</h2>
          <p class="text-gray-600 text-sm sm:text-base mb-2 leading-relaxed">
            Hương Sơn không chỉ bán một chiếc máy — Hương Sơn cung cấp năng lực xử lý tài liệu trọn vòng đời: thiết bị, cho thuê, vật tư, kỹ thuật và số hóa.
          </p>
        </div>
        <div class="lg:col-span-7 space-y-6">{rows}</div>
      </div>
    </div>
  </section>"""


# ---------------------------------------------------------------- S5: Counters
def _counters():
    items = [
        ("2008", "Năm thành lập"),
        ("2017", "Đại lý ủy quyền Duplo & Toshiba miền Bắc"),
        ("127", "Máy Toshiba cung cấp cho Vietcombank (2024)"),
        ("3", "Cấp độ SLA cam kết thời gian xử lý (P1/P2/P3)"),
    ]
    cols = []
    for i, (v, l) in enumerate(items):
        if i == 1 or i == 3:
            border_cls = "border-l border-gray-800"
        elif i == 2:
            border_cls = "border-l-0 md:border-l border-gray-800"
        else:
            border_cls = ""
        cols.append(f"""
        <div class="flex flex-col items-center justify-center px-4 sm:px-6 lg:px-8 py-3 {border_cls}">
          <div class="text-4xl sm:text-5xl font-bold text-[{BRAND}] mb-2 tracking-tight">{esc(v)}</div>
          <h4 class="text-[13px] sm:text-[13.5px] font-bold text-gray-200 uppercase tracking-wide leading-relaxed max-w-[220px] mx-auto">{esc(l)}</h4>
        </div>""")
    cols_html = "".join(cols)
    return f"""
  <section class="py-14 bg-[{DARK}] text-white border-y border-gray-800/60">
    <div class="{WRAP}"><div class="grid grid-cols-2 md:grid-cols-4 gap-y-8 gap-x-2 sm:gap-x-4 text-center">{cols_html}</div></div>
  </section>

  <!-- AUTHORIZED BRANDS LOGOS STRIP -->
  <section class="py-8 bg-white border-b border-gray-200/80">
    <div class="{WRAP}">
      <div class="flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="flex-shrink-0 text-center md:text-left">
          <span class="text-[11px] font-bold uppercase tracking-[0.2em] text-[{BRAND}] block mb-0.5">Đối tác chiến lược</span>
          <h3 class="text-[15px] font-bold text-[#181923]">Thương hiệu phân phối ủy quyền</h3>
        </div>
        <div class="grid grid-cols-3 sm:grid-cols-4 md:flex items-center justify-center md:justify-end gap-6 sm:gap-8 lg:gap-10 w-full md:w-auto">
          <a href="/san-pham/may-in-nhan-ban-toc-do-cao/" title="DUPLO - Máy in nhân bản siêu tốc" class="opacity-80 hover:opacity-100 transition grayscale hover:grayscale-0 flex items-center justify-center">
            <img src="/assets/images/brands/duplo.svg" alt="DUPLO" class="h-8 max-w-[110px] object-contain" />
          </a>
          <a href="/san-pham/photocopy-may-da-chuc-nang/" title="TOSHIBA - Máy photocopy đa chức năng" class="opacity-80 hover:opacity-100 transition grayscale hover:grayscale-0 flex items-center justify-center">
            <img src="/assets/images/brands/toshiba.svg" alt="TOSHIBA" class="h-8 max-w-[110px] object-contain" />
          </a>
          <a href="/san-pham/fansipan/" title="FANSIPAN - Mực & Vật tư tương thích" class="opacity-80 hover:opacity-100 transition grayscale hover:grayscale-0 flex items-center justify-center">
            <img src="/assets/images/brands/fansipan.svg" alt="FANSIPAN" class="h-8 max-w-[110px] object-contain" />
          </a>
          <a href="/san-pham/may-scan-so-hoa/" title="RICOH - Thiết bị in siêu tốc & Máy scan" class="opacity-80 hover:opacity-100 transition grayscale hover:grayscale-0 flex items-center justify-center">
            <img src="/assets/images/brands/ricoh.svg" alt="RICOH" class="h-8 max-w-[110px] object-contain" />
          </a>
          <a href="/san-pham/photocopy-may-da-chuc-nang/" title="KONICA MINOLTA - Máy photocopy kỹ thuật số" class="opacity-80 hover:opacity-100 transition grayscale hover:grayscale-0 flex items-center justify-center">
            <img src="/assets/images/brands/konica-minolta.svg" alt="KONICA MINOLTA" class="h-8 max-w-[110px] object-contain" />
          </a>
          <a href="/san-pham/may-in-laser/" title="HP - Máy in laser văn phòng" class="opacity-80 hover:opacity-100 transition grayscale hover:grayscale-0 flex items-center justify-center">
            <img src="/assets/images/brands/hp.svg" alt="HP" class="h-8 max-w-[90px] object-contain" />
          </a>
          <a href="/san-pham/thiet-bi-phong-hoc-giao-duc/" title="VIEWSONIC - Màn hình tương tác" class="opacity-80 hover:opacity-100 transition grayscale hover:grayscale-0 flex items-center justify-center">
            <img src="/assets/images/brands/viewsonic.svg" alt="ViewSonic" class="h-8 max-w-[110px] object-contain" />
          </a>
        </div>
      </div>
    </div>
  </section>"""


# ------------------------------------------------------- S6: 3 Dịch vụ mũi nhọn
def _three_flagship_services():
    return f"""
  <section class="py-16 bg-[#f5f8fb] border-b border-gray-200">
    <div class="{WRAP}">
      <div class="max-w-3xl mb-12">
        <span class="text-[{BRAND}] font-bold text-xs uppercase tracking-[0.2em] block mb-2">Trọng tâm kinh doanh</span>
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#181923] leading-tight mb-4">
          Ba Dịch Vụ Mũi Nhọn Hương Sơn Ưu Tiên Phục Vụ
        </h2>
        <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
          Tập trung tối đa nguồn lực thiết bị chính hãng sẵn kho, đội ngũ kỹ sư chuyên môn cao và quy chuẩn dịch vụ minh bạch dành riêng cho khách hàng tổ chức, trường học, cơ quan và doanh nghiệp:
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
        <!-- Dịch vụ 1: Cho thuê máy photocopy mới 100% -->
        <div class="bg-white border border-gray-200 hover:border-[{BRAND}] flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="relative h-56 bg-gray-100 overflow-hidden border-b border-gray-200">
              <span class="absolute top-3 left-3 bg-[{BRAND}] text-white text-[11px] font-bold px-3 py-1 uppercase tracking-wider z-10 shadow-xs">
                100% Máy Mới Chính Hãng
              </span>
              <img src="/assets/images/products/toshiba-e-studio-2829a.jpg" alt="Cho thuê máy photocopy mới 100%" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-500" loading="lazy" />
            </div>
            <div class="p-6 sm:p-7">
              <span class="text-xs font-bold text-[{BRAND}] uppercase tracking-wider block mb-1">Khách văn phòng &amp; Doanh nghiệp</span>
              <h3 class="text-xl font-bold text-[#181923] mb-3">
                <a href="/giai-phap/cho-thue-thiet-bi/" class="hover:text-[{BRAND}] transition">Cho Thuê Máy Photocopy Mới 100%</a>
              </h3>
              <p class="text-[13.5px] text-gray-600 leading-relaxed mb-4">
                Máy photocopy đa chức năng Toshiba, Ricoh, Konica Minolta thế hệ mới với đầy đủ chứng nhận CO/CQ. Cam kết không cho thuê máy bãi, máy cũ nát.
              </p>
              <ul class="text-[13px] text-gray-700 space-y-2 mb-6">
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>Bảng giá minh bạch:</strong> Từ <strong>800.000 đ/tháng</strong> với 4 gói cước chuẩn hóa.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>0đ phí mực &amp; linh kiện:</strong> Miễn phí toàn bộ mực in, trống, gạt và bảo trì.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>Đổi máy trong 24 giờ:</strong> Kỹ thuật có mặt ≤ 2h, đổi máy tương đương nếu cần.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>Dùng thử miễn phí:</strong> Trải nghiệm thực tế 07 ngày trước khi ký hợp đồng.</span></li>
              </ul>
              <!-- Bằng chứng năng lực riêng -->
              <div class="p-3.5 bg-gray-50 border border-gray-200/80 mb-6">
                <div class="flex items-center gap-2 text-xs font-bold text-[#181923] mb-1">
                  <i class="fa-solid fa-building-columns text-[{BRAND}]"></i>
                  <span>Bằng chứng năng lực thực tế:</span>
                </div>
                <p class="text-[12.5px] text-gray-600 leading-relaxed">
                  Triển khai thành công hợp đồng cung cấp <strong>127 máy photocopy Toshiba đa chức năng</strong> cho hệ thống Ngân hàng <strong>Vietcombank</strong> trên toàn quốc.
                </p>
              </div>
            </div>
          </div>
          <div class="p-6 sm:p-7 pt-0 flex flex-col sm:flex-row gap-3">
            <a href="/nhan-tu-van/tu-van-thue-may/" class="bg-[{BRAND}] hover:bg-[#147700] text-white text-xs font-bold uppercase tracking-wider py-3.5 px-4 text-center transition flex-1">
              Nhận tư vấn thuê máy
            </a>
            <a href="/giai-phap/cho-thue-thiet-bi/" class="border border-gray-300 hover:border-[{BRAND}] hover:text-[{BRAND}] text-[#181923] text-xs font-bold uppercase tracking-wider py-3.5 px-4 text-center transition">
              Bảng giá 4 gói
            </a>
          </div>
        </div>

        <!-- Dịch vụ 2: Cho thuê Duplo và thiết bị in sao đề thi -->
        <div class="bg-white border border-gray-200 hover:border-[{BRAND}] flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="relative h-56 bg-gray-100 overflow-hidden border-b border-gray-200">
              <span class="absolute top-3 left-3 bg-[{DARK}] text-white text-[11px] font-bold px-3 py-1 uppercase tracking-wider z-10 shadow-xs">
                Tốc độ 130–150 ppm • Bảo mật 3 vòng
              </span>
              <img src="/assets/images/products/duplo-dp-x550.jpg" alt="Cho thuê Duplo in sao đề thi" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-500" loading="lazy" />
            </div>
            <div class="p-6 sm:p-7">
              <span class="text-xs font-bold text-[{BRAND}] uppercase tracking-wider block mb-1">Khách cơ quan &amp; Trường học</span>
              <h3 class="text-xl font-bold text-[#181923] mb-3">
                <a href="/giai-phap/giao-duc/in-de-thi/" class="hover:text-[{BRAND}] transition">In Sao Đề Thi Siêu Tốc (Duplo)</a>
              </h3>
              <p class="text-[13.5px] text-gray-600 leading-relaxed mb-4">
                Máy in nhân bản kỹ thuật số Duplo công suất cực lớn, chuyên trách in sao đề thi tốt nghiệp, đề thi tuyển sinh an toàn tuyệt đối và bảo mật cách ly.
              </p>
              <ul class="text-[13px] text-gray-700 space-y-2 mb-6">
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>Tốc độ vượt trội:</strong> Đạt <strong>130 – 150 bản in/phút</strong>, nhanh gấp 3–5 lần máy thông thường.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>Chi phí siêu tiết kiệm:</strong> Chỉ từ <strong>25 – 40 đ/trang in</strong> (tiết kiệm 70–80% ngân sách).</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>Bảo mật cách ly 3 vòng:</strong> Vận hành offline 100%, tuân thủ quy chế Bộ GD&amp;ĐT.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>Dự phòng N+1 tại chỗ:</strong> Sẵn sàng máy dự phòng và kỹ thuật viên trực hiện trường.</span></li>
              </ul>
              <!-- Bằng chứng năng lực riêng -->
              <div class="p-3.5 bg-gray-50 border border-gray-200/80 mb-6">
                <div class="flex items-center gap-2 text-xs font-bold text-[#181923] mb-1">
                  <i class="fa-solid fa-graduation-cap text-[{BRAND}]"></i>
                  <span>Bằng chứng năng lực thực tế:</span>
                </div>
                <p class="text-[12.5px] text-gray-600 leading-relaxed">
                  Đã triển khai thành công cho <strong>Sở GD&amp;ĐT Vĩnh Phúc</strong> và phục vụ Kỳ thi Tốt nghiệp THPT 2026 của <strong>Sở GD&amp;ĐT Quảng Trị</strong>.
                </p>
              </div>
            </div>
          </div>
          <div class="p-6 sm:p-7 pt-0 flex flex-col sm:flex-row gap-3">
            <a href="/nhan-tu-van/phuong-an-in-de-thi/" class="bg-[{BRAND}] hover:bg-[#147700] text-white text-xs font-bold uppercase tracking-wider py-3.5 px-4 text-center transition flex-1">
              Nhận phương án in đề thi
            </a>
            <a href="/giai-phap/giao-duc/in-de-thi/" class="border border-gray-300 hover:border-[{BRAND}] hover:text-[{BRAND}] text-[#181923] text-xs font-bold uppercase tracking-wider py-3.5 px-4 text-center transition">
              Chi tiết giải pháp
            </a>
          </div>
        </div>

        <!-- Dịch vụ 3: Scan, số hóa và quản lý tài liệu -->
        <div class="bg-white border border-gray-200 hover:border-[{BRAND}] flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="relative h-56 bg-gray-100 overflow-hidden border-b border-gray-200">
              <span class="absolute top-3 left-3 bg-[#0d6efd] text-white text-[11px] font-bold px-3 py-1 uppercase tracking-wider z-10 shadow-xs">
                Chuẩn TT 02/2019/TT-BNV • OCR ≥ 98%
              </span>
              <img src="/assets/images/products/ricoh-fujitsu-fi-7160.jpg" alt="Scan và số hóa tài liệu" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-500" loading="lazy" />
            </div>
            <div class="p-6 sm:p-7">
              <span class="text-xs font-bold text-[{BRAND}] uppercase tracking-wider block mb-1">Khách số hóa &amp; Chuyển đổi số</span>
              <h3 class="text-xl font-bold text-[#181923] mb-3">
                <a href="/giai-phap/scan-so-hoa/" class="hover:text-[{BRAND}] transition">Scan &amp; Số Hóa Quản Lý Tài Liệu</a>
              </h3>
              <p class="text-[13.5px] text-gray-600 leading-relaxed mb-4">
                Dịch vụ scan tài liệu tốc độ cao, nhận dạng ký tự quang học tiếng Việt và cấu trúc hóa siêu dữ liệu phục vụ lưu trữ vĩnh viễn theo chuẩn Cục Văn thư.
              </p>
              <ul class="text-[13px] text-gray-700 space-y-2 mb-6">
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>PDF/A-1b Searchable:</strong> OCR tiếng Việt có dấu chính xác <strong>≥ 98%</strong>, tìm kiếm tức thì.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>Bảng Metadata Index:</strong> 10 trường tra cứu chuẩn (Excel/CSV), có hyperlink mở file.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>Mã băm SHA-256:</strong> Đối soát toàn vẹn 100% dữ liệu gốc, chống sửa đổi giả mạo.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[{BRAND}] mt-1 flex-shrink-0"></i><span><strong>Bảo mật tuyệt đối:</strong> Thi công on-site tại trụ sở khách hàng, ký cam kết bảo mật NDA.</span></li>
              </ul>
              <!-- Bằng chứng năng lực riêng -->
              <div class="p-3.5 bg-gray-50 border border-gray-200/80 mb-6">
                <div class="flex items-center gap-2 text-xs font-bold text-[#181923] mb-1">
                  <i class="fa-solid fa-shield-halved text-[{BRAND}]"></i>
                  <span>Bằng chứng năng lực thực tế:</span>
                </div>
                <p class="text-[12.5px] text-gray-600 leading-relaxed">
                  Đội thiết bị chuyên dụng Ricoh &amp; Fujitsu fi-Series nạp quét ADF tự động, đã số hóa thành công hàng trăm nghìn trang học bạ THPT và hồ sơ hành chính.
                </p>
              </div>
            </div>
          </div>
          <div class="p-6 sm:p-7 pt-0 flex flex-col sm:flex-row gap-3">
            <a href="/nhan-tu-van/khao-sat-so-hoa/" class="bg-[{BRAND}] hover:bg-[#147700] text-white text-xs font-bold uppercase tracking-wider py-3.5 px-4 text-center transition flex-1">
              Đăng ký khảo sát số hóa
            </a>
            <a href="/giai-phap/scan-so-hoa/" class="border border-gray-300 hover:border-[{BRAND}] hover:text-[{BRAND}] text-[#181923] text-xs font-bold uppercase tracking-wider py-3.5 px-4 text-center transition">
              Xem mẫu dữ liệu
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>"""


# ------------------------------------------------------- S7: Danh mục bổ trợ
def _categories():
    cards = [{"title": c["h1"], "url": c["url"], "icon": "fa-solid fa-box",
             "tag": c["eyebrow"], "text": esc(c["summary"][:110] + "…")} for c in PRODUCTS["categories"]]
    return C.section(
        C.heading(eyebrow="Danh mục thiết bị bổ trợ", title="Hệ sinh thái sản phẩm bổ trợ đa thương hiệu")
        + '<p class="text-center text-gray-600 text-sm max-w-2xl mx-auto -mt-6 mb-10 leading-relaxed">Bên cạnh 3 dịch vụ mũi nhọn, Hương Sơn cung cấp đầy đủ các dòng máy in laser, máy đếm tiền, mực in Fansipan chính hãng và vật tư thay thế tương thích:</p>'
        + C.card_grid(cards, cols=4)
        + f'<div class="text-center mt-10"><a href="/san-pham/" class="inline-block border border-gray-300 hover:border-[{BRAND}] hover:text-[{BRAND}] text-[#181923] font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem tất cả 9 danh mục sản phẩm</a></div>',
        bg="light", pad="py-16")


# ------------------------------------------------------------- S8: Marquee
def _marquee():
    text = " &nbsp;•&nbsp; ".join(["PRINT", "COPY", "SCAN", "DIGITAL", "RENTAL", "SERVICE"] * 4)
    return f"""
  <section class="bg-[{BRAND}] py-4 overflow-hidden">
    <div class="whitespace-nowrap text-white font-bold text-sm uppercase tracking-[0.2em] marquee-track">{text}</div>
  </section>"""


# ------------------------------------------------------ S10: CTA tải hồ sơ
def _cta_download():
    return C.cta_band(
        title="Tải hồ sơ năng lực Hương Sơn",
        text="Thông tin pháp lý, năng lực thiết bị, kỹ thuật, logistics và các dự án đã triển khai.",
        primary=("Tải hồ sơ năng lực", "/ve-huong-son/tai-nguyen/"),
        secondary=("Xem dự án", "/du-an/"))


# --------------------------------------------------- S11: Năng lực triển khai
def _capability():
    items = [
        ("fa-solid fa-warehouse", "Kho thiết bị sẵn có", "Lưu kho > 200 model máy photocopy Toshiba, Ricoh, Duplo tại Hà Nội sẵn sàng xuất kho trong 24h.", "> 200 Thiết bị sẵn sàng"),
        ("fa-solid fa-user-gear", "Kỹ sư chứng nhận hãng", "100% kỹ thuật viên đạt chứng chỉ từ Duplo Nhật Bản, Toshiba, Konica Minolta; hỗ trợ 24/7.", "Chứng chỉ hãng chính thức"),
        ("fa-solid fa-truck-fast", "Logistics an toàn 2H", "Đội xe chuyên dụng có giảm chấn, cam kết vận chuyển và lắp đặt tận nơi trong 2–4 giờ.", "Giao lắp an toàn 2h"),
        ("fa-solid fa-shield-halved", "Máy dự phòng N+1", "Tối thiểu 01 máy dự phòng sẵn sàng tại chỗ cho kỳ thi lớn, loại bỏ hoàn toàn rủi ro dừng máy.", "Dự phòng N+1 tại chỗ"),
    ]
    cards = "".join(f"""
        <div class="p-7 text-center flex flex-col items-center justify-between border border-gray-200/80 bg-white hover:border-[{BRAND}] transition duration-300 shadow-xs">
          <div class="w-14 h-14 bg-[{DARK}] text-white flex items-center justify-center mx-auto mb-4"><i class="{icon} text-xl"></i></div>
          <span class="inline-block bg-[#1A9900]/10 text-[#1A9900] text-[10.5px] font-bold px-2 py-0.5 uppercase tracking-wider mb-2">{badge}</span>
          <h3 class="font-bold text-[#181923] mb-2">{esc(t)}</h3>
          <p class="text-[13px] text-gray-500 leading-relaxed">{esc(d)}</p>
        </div>""" for icon, t, d, badge in items)
    return C.section(
        C.heading(eyebrow="Năng lực triển khai", title="Sẵn sàng cho cả nhu cầu theo mùa và dài hạn")
        + f'<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">{cards}</div>', pad="py-16")



# --------------------------------------------------------------- S12: SLA
def _sla():
    rows = [
        ["P1 – Máy dừng hoàn toàn", "Tiếp nhận ≤ 30 phút", "Có mặt ≤ 2 giờ; thay máy dự phòng nếu cần"],
        ["P2 – Ảnh hưởng chức năng chính", "Tiếp nhận ≤ 30 phút", "Xử lý trong ngày làm việc"],
        ["P3 – Lỗi nhỏ", "Tiếp nhận trong ngày", "Xử lý theo lịch bảo trì"],
    ]
    return C.section(
        C.heading(eyebrow="Cam kết dịch vụ", title="SLA rõ ràng theo từng cấp độ sự cố")
        + C.matrix_table(["Cấp độ", "Tiếp nhận", "Mục tiêu xử lý"], rows), bg="light", pad="py-16")


# ------------------------------------------------------- S13: Case study & Kiến thức chuyên môn
def _news():
    project_images = {
        "so-gddt-vinh-phuc-thue-may-photocopy-sao-in-de-thi": "/assets/images/products/98-cho-thue-toshiba-e-studio-456.jpg",
        "so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026": "/assets/images/products/duplo-dp-x550.jpg",
        "vietcombank-cung-cap-may-photocopy": "/assets/images/products/vietcombank-2024.jpg",
    }
    project_custom_text = {
        "vietcombank-cung-cap-may-photocopy": "Triển khai 02 đợt quy mô lớn cho hệ thống Vietcombank toàn quốc: lô máy Konica Minolta (2022–2023) và lô 127 máy photocopy Toshiba đa chức năng (2024).",
        "so-gddt-vinh-phuc-thue-may-photocopy-sao-in-de-thi": "Cung cấp dịch vụ thuê 02 máy photocopy Toshiba 7518A/8518A phục vụ in sao đề thi, hồ sơ nghiệm thu thực tế minh bạch.",
        "so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026": "Thuê 02 máy in nhân bản siêu tốc Duplo tốc độ 150–155 bản/phút phục vụ Kỳ thi Tốt nghiệp THPT 2026.",
    }
    cards = [{"title": p["title"], "url": p["url"], "tag": p["eyebrow"],
              "image": project_images.get(p["slug"], "/assets/images/hero-projects.jpg"),
              "text": esc(project_custom_text.get(p["slug"], p["summary"][:130] + "…")),
              "cta": "Xem case study"} for p in PROJECTS]
    return C.section(
        C.heading(eyebrow="Case Study Thực Tế", title="Dự án tiêu biểu đã triển khai")
        + C.card_grid(cards, cols=3)
        + f'<div class="text-center mt-10"><a href="/du-an/" class="inline-block border border-gray-300 hover:border-[{BRAND}] hover:text-[{BRAND}] text-[#181923] font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem tất cả dự án</a></div>',
        pad="py-16")


def _knowledge_home():
    knowledge_cards = [
        {
            "title": "Nên thuê hay mua máy photocopy cho doanh nghiệp, trường học?",
            "url": "/ve-huong-son/kien-thuc/nen-thue-hay-mua-may-photocopy/",
            "tag": "Tư vấn đầu tư",
            "image": "/assets/images/hero-office.jpg",
            "text": "Phân tích bài toán chi phí dòng tiền TCO, khấu hao và rủi ro kỹ thuật giúp lãnh đạo ra quyết định mua sắm chính xác nhất.",
            "cta": "Đọc cẩm nang (6 phút)",
        },
        {
            "title": "Tiêu chuẩn máy in nhân bản siêu tốc phục vụ sao in đề thi THPT",
            "url": "/ve-huong-son/kien-thuc/tieu-chuan-may-in-de-thi-thpt/",
            "tag": "Thi cử & Bảo mật",
            "image": "/assets/images/hero-education.jpg",
            "text": "Yêu cầu kỹ thuật cách ly 3 vòng, tốc độ 130–150 bản/phút, bảo mật tuyệt đối và phương án máy dự phòng N+1 theo quy chế thi Bộ GD&ĐT.",
            "cta": "Đọc cẩm nang (8 phút)",
        },
        {
            "title": "Hướng dẫn lựa chọn máy scan số hóa tài liệu cho cơ quan, trường học",
            "url": "/ve-huong-son/kien-thuc/huong-dan-chon-may-scan-so-hoa-tai-lieu/",
            "tag": "Chuyển đổi số",
            "image": "/assets/images/banners/highspeed_scanner_1787905830483.jpg",
            "text": "Tiêu chí chọn máy scan nạp tự động ADF, quét phẳng Flatbed, scan sách không phá gáy và công nghệ OCR tiếng Việt chuẩn Thông tư 02.",
            "cta": "Đọc cẩm nang (7 phút)",
        },
    ]
    return C.section(
        '<div class="flex items-center justify-between mb-8 flex-wrap gap-4">'
        '<div>'
        f'<span class="text-[{BRAND}] font-bold text-xs uppercase tracking-[0.2em] block mb-1">Cẩm nang &amp; Hướng dẫn chuyên môn</span>'
        '<h2 class="text-2xl sm:text-[30px] font-bold text-gray-900 leading-tight">Kiến thức chuyên sâu từ chuyên gia Hương Sơn</h2>'
        '</div>'
        '<a href="/ve-huong-son/kien-thuc/" class="inline-flex items-center gap-2 text-[#1A9900] hover:text-[#147700] font-bold text-xs uppercase tracking-wider transition border border-[#1A9900]/30 hover:border-[#1A9900] px-4 py-2 rounded-xs">'
        '<span>Xem toàn bộ 16 bài cẩm nang</span>'
        '<i class="fa-solid fa-arrow-right text-[11px]"></i>'
        '</a>'
        '</div>'
        + C.card_grid(knowledge_cards, cols=3),
        bg="light",
        pad="py-16"
    )


def build(write):
    body = (_hero() + _quick_cta() + _brands() + _three_flagship_services()
            + _why() + _counters() + _capability()
            + _categories() + _marquee() + _cta_download()
            + _sla() + _news() + _knowledge_home())

    ld = [
        schema.organization(), schema.website(),
        schema.itemlist("Giải pháp Hương Sơn", [(s["name"], s["url"]) for s in SOLUTIONS[:8]]),
    ]
    write("/", render.page(
        title="Công Ty Hương Sơn | Máy Photocopy, Máy In Siêu Tốc & Cho Thuê Thiết Bị",
        description="Công ty Hương Sơn chuyên cung cấp và cho thuê máy photocopy Toshiba, Ricoh, máy in nhân bản siêu tốc Duplo, máy scan số hóa tài liệu cho trường học, cơ quan và doanh nghiệp.",
        keywords="công ty Hương Sơn, máy photocopy, cho thuê máy photocopy, máy in nhân bản siêu tốc Duplo, máy in đề thi, máy scan Ricoh, số hóa tài liệu",
        url="/", body=body, jsonld=ld, og_image="/assets/images/hero-office.jpg", active="/"))
    print("  trang chủ: 1 trang")
