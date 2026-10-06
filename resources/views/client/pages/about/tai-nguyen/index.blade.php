@extends('client.layouts.app')

@section('title', "Tài nguyên – Catalogue, hồ sơ năng lực Hương Sơn | Hương Sơn")
@section('meta_description', "Tải catalogue thiết bị Duplo, Toshiba, hồ sơ năng lực và mẫu hồ sơ hợp đồng của Hương Sơn.")
@section('canonical', "https://huongsonco.com.vn/ve-huong-son/tai-nguyen/")
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
      "Print, Document & Digital Solutions",
      "Office Equipment",
      "Máy photocopy",
      "Máy photocopy Toshiba",
      "Máy photocopy Ricoh",
      "Máy photocopy Konica Minolta",
      "Production Print",
      "In kỹ thuật số",
      "In tốc độ cao",
      "Máy in nhân bản siêu tốc Duplo",
      "Máy phối trang",
      "MPS / Rental",
      "Cho thuê máy photocopy",
      "Cho thuê máy photocopy màu",
      "Quản lý in ấn",
      "Education Solutions",
      "Giải pháp in ấn trường học",
      "Exam Solutions",
      "In đề thi",
      "In đề thi tốt nghiệp THPT",
      "Bảo mật tài liệu",
      "Scan & Digital Document",
      "Máy scan tốc độ cao",
      "Số hóa tài liệu",
      "OCR",
      "FANSIPAN",
      "Mực in FANSIPAN",
      "Vật tư máy photocopy",
      "Bảo trì sửa chữa máy photocopy"
    ],
    "hasOfferCatalog": {
      "@@type": "OfferCatalog",
      "name": "Print, Document & Digital Solutions",
      "itemListElement": [
        {
          "@@type": "OfferCatalog",
          "name": "01. Office Equipment",
          "description": "Máy photocopy Toshiba, Ricoh, Konica Minolta, máy in đa chức năng, máy scan",
          "url": "https://huongsonco.com.vn/san-pham/photocopy-may-da-chuc-nang/"
        },
        {
          "@@type": "OfferCatalog",
          "name": "02. Production Print",
          "description": "In kỹ thuật số, in tốc độ cao, máy in nhân bản siêu tốc Duplo, máy phối trang hoàn thiện sau in",
          "url": "https://huongsonco.com.vn/san-pham/may-in-nhan-ban-toc-do-cao/"
        },
        {
          "@@type": "OfferCatalog",
          "name": "03. MPS / Rental",
          "description": "Cho thuê máy photocopy, máy in, quản lý in ấn toàn diện (MPS) tối ưu chi phí TCO",
          "url": "https://huongsonco.com.vn/giai-phap/cho-thue-thiet-bi/"
        },
        {
          "@@type": "OfferCatalog",
          "name": "04. Education Solutions",
          "description": "Giải pháp in ấn và trang thiết bị cho Sở GD&ĐT, trường học, trường đại học",
          "url": "https://huongsonco.com.vn/giai-phap/giao-duc/"
        },
        {
          "@@type": "OfferCatalog",
          "name": "05. Exam Solutions",
          "description": "In đề thi, sao in tài liệu bảo mật, máy in nhân bản siêu tốc 130-180 trang/phút, đóng quyển",
          "url": "https://huongsonco.com.vn/giai-phap/giao-duc/in-de-thi/"
        },
        {
          "@@type": "OfferCatalog",
          "name": "06. Scan & Digital Document",
          "description": "Scan tốc độ cao, số hóa tài liệu lưu trữ theo Thông tư 02/2019/TT-BNV, OCR tiếng Việt",
          "url": "https://huongsonco.com.vn/giai-phap/scan-so-hoa/"
        },
        {
          "@@type": "OfferCatalog",
          "name": "07. FANSIPAN",
          "description": "Toner, mực in, cụm mực, drum trống gạt và vật tư tiêu hao thương hiệu riêng FANSIPAN",
          "url": "https://huongsonco.com.vn/san-pham/fansipan/"
        }
      ]
    },
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
        "name": "Về Hương Sơn",
        "item": "https://huongsonco.com.vn/ve-huong-son/"
      },
      {
        "@@type": "ListItem",
        "position": 3,
        "name": "Tài nguyên",
        "item": "https://huongsonco.com.vn/ve-huong-son/tai-nguyen/"
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
          </a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <a href="/ve-huong-son/" class="text-gray-200 hover:text-white transition">Về Hương Sơn</a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <span class="text-[#84e372] font-semibold" aria-current="page">Tài nguyên</span>
        </nav>
      </div>

      <!-- 2-COLUMN SPLIT HERO SHOWCASE -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
        <!-- LEFT COLUMN: Content & Action (7 cols) -->
        <div class="lg:col-span-7 text-left">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.2em] text-[#5eb74c] mb-2.5">
            <span class="w-2 h-2 rounded-full bg-[#5eb74c] inline-block animate-pulse"></span>
            Tài liệu
          </div>
          <h1 class="text-2xl sm:text-[34px] lg:text-[40px] font-extrabold text-white mb-3.5 leading-[1.35] tracking-normal drop-shadow-md">
            Tài nguyên – Catalogue – Hồ sơ năng lực
          </h1>
          <p class="text-gray-200 text-[14.5px] sm:text-base leading-relaxed mb-6 font-normal max-w-2xl">Tài liệu Hương Sơn cung cấp để Quý khách tham khảo và đưa vào hồ sơ dự toán.</p>
          <div class="flex flex-wrap items-center gap-2 sm:gap-2.5 mb-7">
            <div class="inline-flex items-center gap-1.5 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm text-xs"><i class="fa-solid fa-calendar-check text-[#5eb74c]"></i> <span>Thành lập từ 2008 (16+ năm uy tín)</span></div>
          <div class="inline-flex items-center gap-1.5 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm text-xs"><i class="fa-solid fa-certificate text-[#ffc107]"></i> <span>Đối tác phân phối Ricoh, Toshiba, Duplo</span></div>
          <div class="inline-flex items-center gap-1.5 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm text-xs"><i class="fa-solid fa-location-dot text-cyan-400"></i> <span>Showroom &amp; Kho máy tại Hà Nội</span></div>
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
        <div class="lg:col-span-5 relative">
          <div class="relative mx-auto max-w-[420px] lg:max-w-none">
            <div class="absolute -inset-2 bg-gradient-to-tr from-[#1A9900]/25 to-blue-500/20 rounded-2xl blur-xl opacity-70 pointer-events-none"></div>
            <div class="relative bg-gradient-to-b from-white/[0.12] to-white/[0.04] border border-white/20 p-5 sm:p-6 backdrop-blur-xl shadow-2xl overflow-hidden group">
              <!-- Top Floating Badge -->
              <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 shadow-md flex items-center gap-1.5 border border-white/20 z-20">
                <i class="fa-solid fa-building text-[#5eb74c]"></i>
                <span>Thành lập từ 2008</span>
              </div>

              <!-- Foreground Product Image (100% Crisp, High Res, Unobscured!) -->
              <div class="pt-6 pb-2 px-2 flex items-center justify-center min-h-[200px] sm:min-h-[230px]">
                <img src="/assets/images/banners/hero_office_solutions_1787899910391.jpg" alt="Tài nguyên – Catalogue – Hồ sơ năng lực" class="max-h-[190px] sm:max-h-[220px] w-auto object-contain mx-auto drop-shadow-[0_15px_25px_rgba(0,0,0,0.6)] transform group-hover:scale-105 transition-transform duration-500" loading="eager" />
              </div>

              <!-- Bottom Caption Strip & Floating Badge -->
              <div class="pt-3 border-t border-white/15 flex items-center justify-between text-xs text-gray-200">
                <div class="flex items-center gap-1.5 font-medium">
                  <i class="fa-solid fa-circle-check text-[#5eb74c]"></i>
                  <span>Trụ sở & Showroom tại Hà Nội</span>
                </div>
                <span class="bg-[#0d1626]/80 text-[#84e372] text-[10.5px] font-bold px-2 py-0.5 border border-[#5eb74c]/40">
                  Từ năm 2008
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 border-b border-gray-200 bg-white shadow-xs">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
        
        <div class="flex items-start space-x-3.5">
          <span class="w-10 h-10 rounded-xs bg-[#1A9900]/10 text-[#1A9900] flex items-center justify-center flex-shrink-0 text-base">
            <i class="fa-solid fa-shield-halved"></i>
          </span>
          <div>
            <h4 class="text-[13px] font-bold text-[#181923] uppercase tracking-wide mb-1 leading-snug">100% Máy Mới Chính Hãng</h4>
            <p class="text-[12px] text-gray-600 leading-relaxed">Đầy đủ CO/CQ, nguyên đai nguyên kiện từ Toshiba, Duplo, Konica Minolta.</p>
          </div>
        </div>
        <div class="flex items-start space-x-3.5">
          <span class="w-10 h-10 rounded-xs bg-[#1A9900]/10 text-[#1A9900] flex items-center justify-center flex-shrink-0 text-base">
            <i class="fa-solid fa-clock-rotate-left"></i>
          </span>
          <div>
            <h4 class="text-[13px] font-bold text-[#181923] uppercase tracking-wide mb-1 leading-snug">Phản Hồi ≤ 30p · Có Mặt ≤ 2h</h4>
            <p class="text-[12px] text-gray-600 leading-relaxed">Kỹ sư túc trực hỗ trợ kỹ thuật tận nơi tại Hà Nội &amp; các tỉnh miền Bắc.</p>
          </div>
        </div>
        <div class="flex items-start space-x-3.5">
          <span class="w-10 h-10 rounded-xs bg-[#1A9900]/10 text-[#1A9900] flex items-center justify-center flex-shrink-0 text-base">
            <i class="fa-solid fa-arrows-rotate"></i>
          </span>
          <div>
            <h4 class="text-[13px] font-bold text-[#181923] uppercase tracking-wide mb-1 leading-snug">Đổi Máy Mới Trong 24 Giờ</h4>
            <p class="text-[12px] text-gray-600 leading-relaxed">Khắc phục triệt để sự cố phần cứng, cam kết không làm gián đoạn công việc.</p>
          </div>
        </div>
        <div class="flex items-start space-x-3.5">
          <span class="w-10 h-10 rounded-xs bg-[#1A9900]/10 text-[#1A9900] flex items-center justify-center flex-shrink-0 text-base">
            <i class="fa-solid fa-hand-holding-dollar"></i>
          </span>
          <div>
            <h4 class="text-[13px] font-bold text-[#181923] uppercase tracking-wide mb-1 leading-snug">0đ Chi Phí Linh Kiện &amp; Mực</h4>
            <p class="text-[12px] text-gray-600 leading-relaxed">Trọn gói vật tư tiêu hao, drum, gạt và bảo dưỡng kỹ thuật định kỳ.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8"><div class="space-y-4">
      <div class="flex flex-col sm:flex-row sm:items-center justify-between border border-gray-200 bg-white p-6 gap-4">
        <div class="flex items-start space-x-4">
          <span class="w-11 h-11 bg-[#181924] text-white flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-file-pdf"></i></span>
          <div><p class="font-bold text-[#181923] mb-1">Hồ sơ năng lực Hương Sơn 2026 (PDF)</p><p class="text-[13.5px] text-gray-500">Giới thiệu công ty, năng lực thiết bị, kỹ thuật, logistics và dự án tiêu biểu.</p></div>
        </div>
        <a href="/assets/docs/ho-so-nang-luc-huong-son.pdf" download class="flex-shrink-0 ml-4 bg-[#1A9900] hover:bg-[#147700] text-white px-5 py-2.5 text-xs font-bold uppercase tracking-wider transition inline-flex items-center gap-1.5"><i class="fa-solid fa-download"></i><span>Tải PDF trực tiếp</span></a>
      </div>
      <div class="flex flex-col sm:flex-row sm:items-center justify-between border border-gray-200 bg-white p-6 gap-4">
        <div class="flex items-start space-x-4">
          <span class="w-11 h-11 bg-[#181924] text-white flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-file-pdf"></i></span>
          <div><p class="font-bold text-[#181923] mb-1">Catalogue thiết bị in siêu tốc Duplo</p><p class="text-[13.5px] text-gray-500">Danh mục máy in nhân bản kỹ thuật số và thiết bị hoàn thiện sau in Nhật Bản.</p></div>
        </div>
        <a href="#nhan-tai-lieu" class="flex-shrink-0 ml-4 border border-gray-300 hover:border-[#1A9900] hover:text-[#1A9900] text-[#181923] px-4 py-2.5 text-xs font-bold uppercase tracking-wider transition inline-flex items-center gap-1.5"><i class="fa-solid fa-envelope"></i><span>Nhận qua Email</span></a>
      </div>
      <div class="flex flex-col sm:flex-row sm:items-center justify-between border border-gray-200 bg-white p-6 gap-4">
        <div class="flex items-start space-x-4">
          <span class="w-11 h-11 bg-[#181924] text-white flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-file-pdf"></i></span>
          <div><p class="font-bold text-[#181923] mb-1">Catalogue máy photocopy Toshiba A3</p><p class="text-[13.5px] text-gray-500">Thông số kỹ thuật chi tiết các dòng máy đa chức năng e-STUDIO.</p></div>
        </div>
        <a href="#nhan-tai-lieu" class="flex-shrink-0 ml-4 border border-gray-300 hover:border-[#1A9900] hover:text-[#1A9900] text-[#181923] px-4 py-2.5 text-xs font-bold uppercase tracking-wider transition inline-flex items-center gap-1.5"><i class="fa-solid fa-envelope"></i><span>Nhận qua Email</span></a>
      </div>
      <div class="flex flex-col sm:flex-row sm:items-center justify-between border border-gray-200 bg-white p-6 gap-4">
        <div class="flex items-start space-x-4">
          <span class="w-11 h-11 bg-[#181924] text-white flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-file-pdf"></i></span>
          <div><p class="font-bold text-[#181923] mb-1">Bảng giá thuê máy photocopy &amp; in đề thi</p><p class="text-[13.5px] text-gray-500">Báo giá tham khảo các gói Basic / Standard / Business / Enterprise.</p></div>
        </div>
        <a href="/nhan-tu-van/tu-van-thue-may/" class="flex-shrink-0 ml-4 border border-gray-300 hover:border-[#1A9900] hover:text-[#1A9900] text-[#181923] px-4 py-2.5 text-xs font-bold uppercase tracking-wider transition inline-flex items-center gap-1.5"><i class="fa-solid fa-envelope"></i><span>Nhận qua Email</span></a>
      </div>
      <div class="flex flex-col sm:flex-row sm:items-center justify-between border border-gray-200 bg-white p-6 gap-4">
        <div class="flex items-start space-x-4">
          <span class="w-11 h-11 bg-[#181924] text-white flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-file-pdf"></i></span>
          <div><p class="font-bold text-[#181923] mb-1">Mẫu hồ sơ hợp đồng – nghiệm thu</p><p class="text-[13.5px] text-gray-500">Tài liệu mẫu phục vụ lập dự toán và hồ sơ mời thầu B2B/B2G.</p></div>
        </div>
        <a href="#nhan-tai-lieu" class="flex-shrink-0 ml-4 border border-gray-300 hover:border-[#1A9900] hover:text-[#1A9900] text-[#181923] px-4 py-2.5 text-xs font-bold uppercase tracking-wider transition inline-flex items-center gap-1.5"><i class="fa-solid fa-envelope"></i><span>Nhận qua Email</span></a>
      </div></div>
    </div>
  </section>
<div id="nhan-tai-lieu"></div>
  <section class="py-16 bg-[#f5f8fb] ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="bg-white border border-gray-200 p-6 sm:p-9 max-w-3xl mx-auto">
        <h2 class="text-xl sm:text-[24px] font-bold text-[#181923] mb-2">Đăng ký nhận bộ tài liệu qua Email</h2>
        <p class="text-[14px] text-gray-500 leading-relaxed mb-6">Quý khách có thể tải trực tiếp Hồ sơ năng lực (PDF) ở trên, hoặc điền form ngắn dưới đây để nhận bộ Catalogue thiết bị và Bảng giá chi tiết qua email.</p>
        <form class="lead-form" id="resource-form" method="post" action="/api/lead" novalidate>
          
          <input type="hidden" name="page_type" value="resource_download" />
          <input type="hidden" name="nhu_cau" value="TAILIEU" />
          <input type="hidden" name="source_url" value="" data-autofill="url" />
          <input type="hidden" name="referrer" value="" data-autofill="referrer" />
          <input type="hidden" name="utm_source" value="" data-autofill="utm_source" />
          <input type="hidden" name="utm_medium" value="" data-autofill="utm_medium" />
          <input type="hidden" name="utm_campaign" value="" data-autofill="utm_campaign" />
          <div class="hidden" aria-hidden="true">
            <label for="f-resource-hp">Bỏ trống ô này</label>
            <input type="text" id="f-resource-hp" name="_hp" tabindex="-1" autocomplete="off" />
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-5">
            <div>
              <label for="f-res-email" class="block text-[13px] font-semibold text-[#181923] mb-1.5">Email nhận tài liệu <span class="text-[#1A9900]">*</span></label>
              <input type="email" id="f-res-email" name="email" required placeholder="email@donvi.gov.vn"
                class="w-full border border-gray-300 px-4 py-2.5 text-[14px] focus:outline-none focus:border-[#1A9900]" />
            </div>
            <div>
              <label for="f-res-phone" class="block text-[13px] font-semibold text-[#181923] mb-1.5">Số điện thoại / Zalo <span class="text-[#1A9900]">*</span></label>
              <input type="tel" id="f-res-phone" name="dien_thoai" required placeholder="09xx xxx xxx"
                class="w-full border border-gray-300 px-4 py-2.5 text-[14px] focus:outline-none focus:border-[#1A9900]" />
            </div>
            <div>
              <label for="f-res-name" class="block text-[13px] font-semibold text-[#181923] mb-1.5">Họ và tên <span class="text-[#1A9900]">*</span></label>
              <input type="text" id="f-res-name" name="ho_ten" required placeholder="Nguyễn Văn A"
                class="w-full border border-gray-300 px-4 py-2.5 text-[14px] focus:outline-none focus:border-[#1A9900]" />
            </div>
            <div>
              <label for="f-res-donvi" class="block text-[13px] font-semibold text-[#181923] mb-1.5">Đơn vị công tác <span class="text-[#1A9900]">*</span></label>
              <input type="text" id="f-res-donvi" name="don_vi" required placeholder="Sở GD&ĐT / Trường / Doanh nghiệp"
                class="w-full border border-gray-300 px-4 py-2.5 text-[14px] focus:outline-none focus:border-[#1A9900]" />
            </div>
          </div>
          <div class="mb-6">
            <p class="text-[13px] font-semibold text-[#181923] mb-2.5">Chọn tài liệu muốn nhận:</p>
            <div class="space-y-2 bg-[#f8fafc] p-4 border border-gray-200">
              
        <label class="flex items-center space-x-3 text-[14px] text-gray-700 cursor-pointer">
          <input type="checkbox" name="tai_lieu[]" value="Hồ sơ năng lực Hương Sơn 2026 (PDF đầy đủ)" checked class="rounded text-[#1A9900] focus:ring-[#1A9900]" />
          <span>Hồ sơ năng lực Hương Sơn 2026 (PDF đầy đủ)</span>
        </label>
        <label class="flex items-center space-x-3 text-[14px] text-gray-700 cursor-pointer">
          <input type="checkbox" name="tai_lieu[]" value="Catalogue Máy in siêu tốc Duplo (Nhật Bản)" checked class="rounded text-[#1A9900] focus:ring-[#1A9900]" />
          <span>Catalogue Máy in siêu tốc Duplo (Nhật Bản)</span>
        </label>
        <label class="flex items-center space-x-3 text-[14px] text-gray-700 cursor-pointer">
          <input type="checkbox" name="tai_lieu[]" value="Catalogue Máy photocopy đa chức năng Toshiba" checked class="rounded text-[#1A9900] focus:ring-[#1A9900]" />
          <span>Catalogue Máy photocopy đa chức năng Toshiba</span>
        </label>
        <label class="flex items-center space-x-3 text-[14px] text-gray-700 cursor-pointer">
          <input type="checkbox" name="tai_lieu[]" value="Bảng giá thuê máy photocopy &amp; máy in đề thi" checked class="rounded text-[#1A9900] focus:ring-[#1A9900]" />
          <span>Bảng giá thuê máy photocopy &amp; máy in đề thi</span>
        </label>
        <label class="flex items-center space-x-3 text-[14px] text-gray-700 cursor-pointer">
          <input type="checkbox" name="tai_lieu[]" value="Mẫu hồ sơ thầu, hợp đồng &amp; biên bản nghiệm thu tham khảo" checked class="rounded text-[#1A9900] focus:ring-[#1A9900]" />
          <span>Mẫu hồ sơ thầu, hợp đồng &amp; biên bản nghiệm thu tham khảo</span>
        </label>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <button type="submit" data-ga="generate_lead" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-3.5 transition w-full sm:w-auto">
              GỬI TÀI LIỆU CHO TÔI
            </button>
            <span class="text-xs text-gray-500">Tài liệu gửi tự động qua email trong giờ làm việc.</span>
          </div>
        </form>
      </div>
    </div>
  </section>
@endsection
