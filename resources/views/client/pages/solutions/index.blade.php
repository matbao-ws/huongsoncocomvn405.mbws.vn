@extends('client.layouts.app')

@section('title', "Giải pháp thiết bị, in ấn, số hóa theo ngành | Hương Sơn")
@section('meta_description', "8 giải pháp Hương Sơn cho Giáo dục, Cơ quan Nhà nước, Ngân hàng, Doanh nghiệp: in đề thi, scan số hóa, cho thuê thiết bị, quản lý vận hành.")
@section('canonical', "https://huongsonco.com.vn/giai-phap/")
@section('jsonld')
<script type="application/ld+json">
[
  {
    "@@context": "https://schema.org",
    "@@type": [
      "Organization",
      "LocalBusiness"
    ],
    "@@id": "https://huongsonco.com.vn/#organization",
    "name": "Hương Sơn",
    "legalName": "CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ HƯƠNG SƠN",
    "alternateName": "Huong Son Co., Ltd",
    "url": "https://huongsonco.com.vn/",
    "logo": "https://huongsonco.com.vn/assets/images/brand/HUONG_SON_logo.svg",
    "image": "https://huongsonco.com.vn/assets/images/products/duplo-dp-x550.jpg",
    "slogan": "THIẾT BỊ CHO HIỆN TẠI, GIẢI PHÁP CHO TƯƠNG LAI",
    "description": "CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ HƯƠNG SƠN thành lập 01/06/2008, cung cấp máy photocopy, máy in nhân bản siêu tốc, máy scan, máy phối trang, máy in laser, thiết bị văn phòng, vật tư – linh kiện, dịch vụ cho thuê thiết bị, bảo trì – sửa chữa và giải pháp số hóa tài liệu cho Cơ quan Nhà nước, Sở GD&ĐT, trường học, ngân hàng và doanh nghiệp.",
    "taxID": "0102759269",
    "vatID": "0102759269",
    "foundingDate": "2008-06-01",
    "founder": {
      "@@type": "Person",
      "name": "Nguyễn Công Thuận"
    },
    "address": {
      "@@type": "PostalAddress",
      "streetAddress": "Số 27, ngõ 523 phố Minh Khai, phường Vĩnh Tuy, TP. Hà Nội",
      "addressLocality": "Hà Nội",
      "addressCountry": "VN"
    },
    "telephone": [
      "091.113.8583",
      "0912.304.058",
      "024 3972 9484"
    ],
    "email": "info@huongsonco.com.vn",
    "openingHours": "Mo-Sa 08:00-17:30",
    "geo": {
      "@@type": "GeoCoordinates",
      "latitude": 20.9996,
      "longitude": 105.8672
    },
    "hasMap": "https://maps.google.com/?q=27+ngo+523+Minh+Khai+Vinh+Tuy+Ha+Noi",
    "priceRange": "$$",
    "currenciesAccepted": "VND",
    "paymentAccepted": "Tiền mặt, Chuyển khoản",
    "areaServed": {
      "@@type": "Country",
      "name": "Việt Nam"
    },
    "sameAs": [
      "https://www.facebook.com/huonsonco/",
      "https://zalo.me/0913237302",
      "https://www.messenger.com/t/thuan.nguyencong.330"
    ],
    "knowsAbout": [
      "máy photocopy",
      "máy in nhân bản siêu tốc",
      "in sao đề thi",
      "máy scan tốc độ cao",
      "số hóa tài liệu",
      "OCR",
      "cho thuê máy photocopy",
      "managed print service",
      "vật tư in ấn",
      "máy phối trang",
      "bảo trì máy photocopy"
    ],
    "brand": [
      {
        "@@type": "Brand",
        "name": "DUPLO"
      },
      {
        "@@type": "Brand",
        "name": "TOSHIBA"
      },
      {
        "@@type": "Brand",
        "name": "RICOH"
      },
      {
        "@@type": "Brand",
        "name": "KONICA MINOLTA"
      },
      {
        "@@type": "Brand",
        "name": "HP"
      },
      {
        "@@type": "Brand",
        "name": "FANSIPAN"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@@type": "ListItem",
        "position": 1,
        "name": "Trang chủ",
        "item": "https://huongsonco.com.vn/"
      },
      {
        "@@type": "ListItem",
        "position": 2,
        "name": "Giải pháp",
        "item": "https://huongsonco.com.vn/giai-phap/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "ItemList",
    "name": "Giải pháp Hương Sơn",
    "numberOfItems": 8,
    "itemListElement": [
      {
        "@@type": "ListItem",
        "position": 1,
        "name": "Giải pháp thiết bị & in ấn cho ngành Giáo dục",
        "url": "https://huongsonco.com.vn/giai-phap/giao-duc/"
      },
      {
        "@@type": "ListItem",
        "position": 2,
        "name": "Giải pháp thiết bị, in ấn và số hóa cho Cơ quan Nhà nước",
        "url": "https://huongsonco.com.vn/giai-phap/co-quan-nha-nuoc/"
      },
      {
        "@@type": "ListItem",
        "position": 3,
        "name": "Giải pháp thiết bị in ấn và tài liệu cho Ngân hàng – Tài chính",
        "url": "https://huongsonco.com.vn/giai-phap/ngan-hang-tai-chinh/"
      },
      {
        "@@type": "ListItem",
        "position": 4,
        "name": "Giải pháp in ấn, tài liệu và số hóa cho Tập đoàn – Tổng công ty",
        "url": "https://huongsonco.com.vn/giai-phap/tap-doan-tong-cong-ty/"
      },
      {
        "@@type": "ListItem",
        "position": 5,
        "name": "Giải pháp in đề thi và in tài liệu số lượng lớn",
        "url": "https://huongsonco.com.vn/giai-phap/in-de-thi-tai-lieu/"
      },
      {
        "@@type": "ListItem",
        "position": 6,
        "name": "Giải pháp scan và số hóa tài liệu",
        "url": "https://huongsonco.com.vn/giai-phap/scan-so-hoa/"
      },
      {
        "@@type": "ListItem",
        "position": 7,
        "name": "Cho thuê máy photocopy, máy in và thiết bị văn phòng",
        "url": "https://huongsonco.com.vn/giai-phap/cho-thue-thiet-bi/"
      },
      {
        "@@type": "ListItem",
        "position": 8,
        "name": "Quản lý và vận hành hệ thống thiết bị in ấn",
        "url": "https://huongsonco.com.vn/giai-phap/quan-ly-van-hanh/"
      }
    ]
  }
]
</script>
@endsection

@section('content')
<!-- PAGE HERO (SPLIT-HERO FOREGROUND SHOWCASE BANNER) -->
  <section class="relative bg-[#0d1626] py-10 sm:py-14 lg:py-16 overflow-hidden border-b border-white/10">
    <!-- Ambient Tech Background -->
    <div class="absolute inset-0 z-0">
      <div class="absolute inset-0 bg-gradient-to-br from-[#0a1526] via-[#0d1e38] to-[#12284c]"></div>
      <div class="absolute inset-0 opacity-15 pointer-events-none" style="background-image: radial-gradient(rgba(255,255,255,0.2) 1px, transparent 1px); background-size: 28px 28px;"></div>
      <div class="absolute -top-24 -right-24 w-96 h-96 bg-[#1A9900]/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl pointer-events-none"></div>
    </div>

    <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 w-full">
      <!-- Breadcrumb Pill on Top-Left -->
      <div class="flex items-center justify-start mb-4">
        <nav class="inline-flex items-center gap-1.5 sm:gap-2 bg-white/10 hover:bg-white/15 border border-white/20 px-3.5 sm:px-4 py-1.5 backdrop-blur-md text-xs text-white/90 transition shadow-sm flex-wrap" aria-label="Breadcrumb">
          <a href="/" class="hover:text-white flex items-center gap-1.5 transition">
            <i class="fa-solid fa-house text-[#5eb74c] text-[11px]"></i>
            <span>Trang chủ</span>
          </a>
          <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i>
          <span class="text-[#84e372] font-semibold" aria-current="page">Giải pháp</span>
        </nav>
      </div>

      <!-- 2-COLUMN SPLIT HERO SHOWCASE -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
        <!-- LEFT COLUMN: Content & Action (7 cols) -->
        <div class="lg:col-span-7 text-left">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.2em] text-[#5eb74c] mb-2.5">
            <span class="w-2 h-2 rounded-full bg-[#5eb74c] inline-block animate-pulse"></span>
            Chuyên sâu theo từng bài toán ngành
          </div>
          <h1 class="text-2xl sm:text-[34px] lg:text-[40px] font-extrabold text-white mb-3.5 leading-[1.35] tracking-normal drop-shadow-md">
            Giải Pháp Thiết Bị, In Ấn &amp; Số Hóa
          </h1>
          <p class="text-gray-200 text-[14.5px] sm:text-base leading-relaxed mb-6 font-normal max-w-2xl">8 giải pháp xây dựng may đo theo từng đặc thù ngành: Giáo dục, Ngân hàng, Cơ quan Nhà nước, Doanh nghiệp lớn — Quy chuẩn Problem → Solution → Service → ROI.</p>
          <div class="flex flex-wrap items-center gap-2 sm:gap-2.5 mb-7">
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm">
          <i class="fa-solid fa-sliders text-[#5eb74c]"></i>
          <span>Giải pháp may đo theo từng ngành</span>
        </div>
        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm">
          <i class="fa-solid fa-chart-line text-[#ffc107]"></i>
          <span>Tiết kiệm 25% – 40% chi phí</span>
        </div>
        <a href="tel:0911138583" class="inline-flex items-center gap-2 bg-[#1A9900]/90 hover:bg-[#1A9900] text-white border border-[#5eb74c]/50 px-3.5 py-1.5 transition font-semibold shadow-sm">
          <i class="fa-solid fa-phone"></i>
          <span>Tư vấn: 091.113.8583</span>
        </a>
          </div>
          <div class="flex flex-wrap items-center gap-3.5 sm:gap-4">
            <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-7 py-3.5 transition flex items-center gap-2 shadow-lg shadow-[#1A9900]/30 border border-[#5eb74c]/50">
              <span>Yêu Cầu Báo Giá Nhanh</span>
              <i class="fa-solid fa-arrow-right text-[11px]"></i>
            </a>
            <a href="tel:0911138583" class="border border-white/30 hover:border-[#5eb74c] hover:bg-white/10 text-white font-bold text-xs uppercase tracking-wider px-6 py-3.5 transition flex items-center gap-2 backdrop-blur-sm">
              <i class="fa-solid fa-phone text-[#5eb74c]"></i>
              <span>Hotline: 091.113.8583</span>
            </a>
          </div>
        </div>

        <!-- RIGHT COLUMN: THE FOREGROUND PRODUCT SHOWCASE (5 cols) -->
        <div class="lg:col-span-5 relative mt-6 lg:mt-0">
          <div class="relative mx-auto max-w-[420px] lg:max-w-none">
            <div class="absolute -inset-2 bg-gradient-to-tr from-[#1A9900]/25 to-blue-500/20 rounded-2xl blur-xl opacity-70 pointer-events-none"></div>
            <div class="relative bg-gradient-to-b from-white/[0.12] to-white/[0.04] border border-white/20 p-5 sm:p-6 backdrop-blur-xl shadow-2xl overflow-hidden group">
              <!-- Top Floating Badge -->
              <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 shadow-md flex items-center gap-1.5 border border-white/20 z-20">
                <i class="fa-solid fa-bolt text-[#ffc107]"></i>
                <span>Scan 80 – 140 trang/phút</span>
              </div>

              <!-- Foreground Product Image (100% Crisp, High Res, Unobscured!) -->
              <div class="pt-6 pb-2 px-2 flex items-center justify-center min-h-[200px] sm:min-h-[230px]">
                <img src="/assets/images/banners/highspeed_scanner_1787905830483.jpg" alt="Giải pháp thiết bị, in ấn và số hóa theo ngành" class="max-h-[190px] sm:max-h-[220px] w-auto object-contain mx-auto drop-shadow-[0_15px_25px_rgba(0,0,0,0.6)] transform group-hover:scale-105 transition-transform duration-500" loading="eager" />
              </div>

              <!-- Bottom Caption Strip & Floating Badge -->
              <div class="pt-3 border-t border-white/15 flex items-center justify-between text-xs text-gray-200">
                <div class="flex items-center gap-1.5 font-medium">
                  <i class="fa-solid fa-circle-check text-[#5eb74c]"></i>
                  <span>Máy scan Ricoh Fujitsu chuyên dụng</span>
                </div>
                <span class="bg-[#0d1626]/80 text-[#84e372] text-[10.5px] font-bold px-2 py-0.5 border border-[#5eb74c]/40">
                  OCR Tiếng Việt
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-10 border-b border-gray-200" style="background-color: rgb(247, 243, 238);">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Trang này là gì</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Trang tổng hợp toàn bộ giải pháp theo ngành mà Hương Sơn cung cấp.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Dành cho ai</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Khách hàng muốn tìm giải pháp phù hợp với ngành hoặc nhu cầu cụ thể của đơn vị mình.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Giải quyết vấn đề gì</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Định hướng nhanh đến đúng giải pháp thay vì phải tự suy luận từ danh mục sản phẩm.</p>
          </div>
      </div>
    </div>
  </section>

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-diagram-project text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Hương Sơn Education Solutions</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/giai-phap/giao-duc/">Giải pháp thiết bị &amp; in ấn cho ngành Giáo dục</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Giải pháp trọn vòng đời tài liệu cho ngành Giáo dục: thuê máy in sao đề thi, thuê máy photocopy cho trường học, quản lý in ấn trọn gói và số hóa hồ sơ…</p>
            <a href="/giai-phap/giao-duc/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-diagram-project text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Government Solutions</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/giai-phap/co-quan-nha-nuoc/">Giải pháp thiết bị, in ấn và số hóa cho Cơ quan Nhà nước</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Giải pháp thiết bị văn phòng, in ấn, scan và số hóa hồ sơ cho khu vực công, đi kèm quy trình hồ sơ chuẩn: báo giá, hợp đồng, bàn giao, nghiệm thu và t…</p>
            <a href="/giai-phap/co-quan-nha-nuoc/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-diagram-project text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Banking &amp; Finance</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/giai-phap/ngan-hang-tai-chinh/">Giải pháp thiết bị in ấn và tài liệu cho Ngân hàng – Tài chính</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Thiết bị và dịch vụ in ấn – scan cho ngân hàng và tổ chức tài chính: máy photocopy A3, máy in A4, máy scan chứng từ, quản lý in theo hệ thống chi nhán…</p>
            <a href="/giai-phap/ngan-hang-tai-chinh/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-diagram-project text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Enterprise Solutions</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/giai-phap/tap-doan-tong-cong-ty/">Giải pháp in ấn, tài liệu và số hóa cho Tập đoàn – Tổng công ty</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Giải pháp in ấn – tài liệu – số hóa cho doanh nghiệp lớn: chuẩn hóa đội thiết bị, quản lý in theo sản lượng và SLA, số hóa tài liệu và cung ứng vật tư…</p>
            <a href="/giai-phap/tap-doan-tong-cong-ty/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-diagram-project text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Production Print</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/giai-phap/in-de-thi-tai-lieu/">Giải pháp in đề thi và in tài liệu số lượng lớn</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Giải pháp in sản lượng lớn và hoàn thiện sau in: chọn thiết bị theo sản lượng và tiến độ, kèm vật tư, kỹ thuật, phương án dự phòng và thiết bị phối tr…</p>
            <a href="/giai-phap/in-de-thi-tai-lieu/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-diagram-project text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Scan &amp; Digital Document</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/giai-phap/scan-so-hoa/">Giải pháp scan và số hóa tài liệu</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Giải pháp scan và số hóa tài liệu theo chuỗi Scan → OCR → phân loại → lưu trữ → tra cứu → workflow, với Hương Sơn đóng vai trò tích hợp giải pháp và đ…</p>
            <a href="/giai-phap/scan-so-hoa/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-diagram-project text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Rental Solutions</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/giai-phap/cho-thue-thiet-bi/">Cho thuê máy photocopy, máy in và thiết bị văn phòng</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Cho thuê thiết bị theo 4 gói từ cơ bản đến quản lý toàn bộ đội máy: khách hàng mua năng lực in ấn ổn định trong một khoảng thời gian thay vì mua thiết…</p>
            <a href="/giai-phap/cho-thue-thiet-bi/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-diagram-project text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Managed Print &amp; Operations</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/giai-phap/quan-ly-van-hanh/">Quản lý và vận hành hệ thống thiết bị in ấn</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Quản lý và vận hành toàn bộ đội thiết bị in ấn theo sản lượng và SLA, có counter theo mã máy, báo cáo định kỳ và đánh giá tối ưu ở mỗi kỳ gia hạn.…</p>
            <a href="/giai-phap/quan-ly-van-hanh/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- PROMOTIONAL BANNER: CONSULTATION & ON-SITE AUDIT -->
  <section class="py-12 bg-white">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="relative overflow-hidden bg-gradient-to-r from-[#0d1e34] via-[#102747] to-[#0d1e34] p-8 sm:p-12 text-white border-l-4 border-[#5eb74c] shadow-xl">
        <div class="absolute right-0 top-0 bottom-0 w-1/3 opacity-15 hidden md:block pointer-events-none">
          <img src="/assets/images/banners/hero_projects_1787899964984.jpg" alt="Tư vấn giải pháp thiết bị" class="w-full h-full object-cover" />
        </div>
        <div class="relative z-10 max-w-3xl">
          <div class="inline-flex items-center space-x-2 bg-[#5eb74c]/25 border border-[#5eb74c]/50 px-3 py-1 mb-3 text-[#5eb74c] text-xs font-bold uppercase tracking-wider">
            <i class="fa-solid fa-chart-line text-[#5eb74c]"></i>
            <span>Dịch Vụ Khảo Sát Hiện Trường Miễn Phí</span>
          </div>
          <h2 class="banner-heading text-2xl sm:text-3xl font-bold text-white mb-4 leading-[1.38]">
            Khảo Sát Hiện Trạng &amp; Tối Ưu Hóa Chi Phí In Ấn Cho Đơn Vị Của Bạn
          </h2>
          <p class="text-gray-300 text-sm sm:text-base leading-relaxed mb-6">
            Kỹ sư chuyên gia Hương Sơn sẽ trực tiếp đến đơn vị để khảo sát lưu lượng in ấn, công năng sử dụng và hiện trạng thiết bị hiện có; từ đó xây dựng bài toán cắt giảm chi phí (tiết kiệm đến 30–40%) kèm phương án máy dự phòng tối ưu.
          </p>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8 pt-4 border-t border-white/10 text-xs sm:text-sm">
            <div class="flex items-center space-x-2">
              <i class="fa-solid fa-calculator text-[#5eb74c] text-base"></i>
              <span>Báo cáo TCO &amp; ROI chi tiết</span>
            </div>
            <div class="flex items-center space-x-2">
              <i class="fa-solid fa-clock-rotate-left text-[#5eb74c] text-base"></i>
              <span>Khảo sát nhanh trong 24h</span>
            </div>
            <div class="flex items-center space-x-2">
              <i class="fa-solid fa-shield-check text-[#5eb74c] text-base"></i>
              <span>100% Hoàn toàn miễn phí</span>
            </div>
          </div>
          <div class="flex flex-wrap items-center gap-4">
            <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition inline-flex items-center space-x-2 shadow-lg shadow-[#1A9900]/30">
              <span>Đăng Ký Khảo Sát Miễn Phí</span>
              <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
            <a href="tel:0913237302" class="border border-white/40 hover:border-[#5eb74c] hover:text-[#5eb74c] text-white font-bold text-xs uppercase tracking-wider px-6 py-4 transition inline-flex items-center space-x-2">
              <i class="fa-solid fa-phone text-[#5eb74c]"></i>
              <span>Hotline: 0913.237.302</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/xxx_home-bg_xxx.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Chưa chắc giải pháp nào phù hợp?</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Mô tả ngành và nhu cầu cụ thể — Hương Sơn tư vấn đúng giải pháp và gói dịch vụ.</p>
      </div>
      <div class="flex flex-wrap items-center gap-4 flex-shrink-0">
        <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Yêu cầu báo giá</a>
        
        <a href="tel:0911138583" data-ga="click_hotline" class="text-white font-bold text-sm hover:text-[#1A9900] transition">
          <i class="fa-solid fa-phone text-[#1A9900] mr-2"></i>091.113.8583
        </a>
      </div>
    </div>
  </section>
@endsection
