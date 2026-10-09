@extends('client.layouts.app')

@section('title', "Dự án – Case study đã triển khai | Hương Sơn")
@section('meta_description', "Các dự án Hương Sơn đã triển khai cho Sở GD&ĐT và hệ thống ngân hàng, có hồ sơ hợp đồng, bàn giao và nghiệm thu.")
@section('canonical', "https://huongsonco.com.vn/du-an/")
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
        "name": "Dự án",
        "item": "https://huongsonco.com.vn/du-an/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "ItemList",
    "name": "Dự án Hương Sơn",
    "numberOfItems": 3,
    "itemListElement": [
      {
        "@@type": "ListItem",
        "position": 1,
        "name": "Thuê máy photocopy phục vụ in sao đề thi – Sở GD&ĐT Vĩnh Phúc",
        "url": "https://huongsonco.com.vn/du-an/so-gddt-vinh-phuc-thue-may-photocopy-sao-in-de-thi/"
      },
      {
        "@@type": "ListItem",
        "position": 2,
        "name": "Thuê máy in nhân bản siêu tốc Duplo phục vụ Kỳ thi Tốt nghiệp THPT 2026",
        "url": "https://huongsonco.com.vn/du-an/so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026/"
      },
      {
        "@@type": "ListItem",
        "position": 3,
        "name": "Cung cấp máy photocopy cho hệ thống Ngân hàng Vietcombank toàn quốc",
        "url": "https://huongsonco.com.vn/du-an/vietcombank-cung-cap-may-photocopy/"
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
          </a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <span class="text-[#84e372] font-semibold" aria-current="page">Dự án</span>
        </nav>
      </div>

      <!-- 2-COLUMN SPLIT HERO SHOWCASE -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
        <!-- LEFT COLUMN: Content & Action (7 cols) -->
        <div class="lg:col-span-7 text-left">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.2em] text-[#5eb74c] mb-2.5">
            <span class="w-2 h-2 rounded-full bg-[#5eb74c] inline-block animate-pulse"></span>
            Case Study
          </div>
          <h1 class="text-2xl sm:text-[34px] lg:text-[40px] font-extrabold text-white mb-3.5 leading-[1.35] tracking-normal drop-shadow-md">
            Dự án đã triển khai
          </h1>
          <p class="text-gray-200 text-[14.5px] sm:text-base leading-relaxed mb-6 font-normal max-w-2xl">Các dự án Hương Sơn đã thực hiện, có hồ sơ hợp đồng, bàn giao và nghiệm thu làm bằng chứng năng lực.</p>
          <div class="flex flex-wrap items-center gap-2 sm:gap-2.5 mb-7">
            <div class="inline-flex items-center gap-1.5 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm text-xs"><i class="fa-solid fa-award text-[#ffc107]"></i> <span>15+ năm phục vụ kỳ thi &amp; ngân hàng</span></div>
          <div class="inline-flex items-center gap-1.5 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm text-xs"><i class="fa-solid fa-building-circle-check text-[#5eb74c]"></i> <span>500+ dự án hoàn thành bàn giao</span></div>
          <div class="inline-flex items-center gap-1.5 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm text-xs"><i class="fa-solid fa-user-shield text-cyan-400"></i> <span>Bảo mật 100% tài liệu &amp; đề thi</span></div>
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
                <i class="fa-solid fa-award text-[#ffc107]"></i>
                <span>Từ năm 2008</span>
              </div>

              <!-- Foreground Product Image (100% Crisp, High Res, Unobscured!) -->
              <div class="pt-6 pb-2 px-2 flex items-center justify-center min-h-[200px] sm:min-h-[230px]">
                <img src="/assets/images/proof/ban-giao-vietcombank.jpg" alt="Dự án đã triển khai" class="max-h-[190px] sm:max-h-[220px] w-auto object-contain mx-auto drop-shadow-[0_15px_25px_rgba(0,0,0,0.6)] transform group-hover:scale-105 transition-transform duration-500" loading="eager" />
              </div>

              <!-- Bottom Caption Strip & Floating Badge -->
              <div class="pt-3 border-t border-white/15 flex items-center justify-between text-xs text-gray-200">
                <div class="flex items-center gap-1.5 font-medium">
                  <i class="fa-solid fa-circle-check text-[#5eb74c]"></i>
                  <span>Bàn giao thiết bị thực tế tại khách hàng</span>
                </div>
                <span class="bg-[#0d1626]/80 text-[#84e372] text-[10.5px] font-bold px-2 py-0.5 border border-[#5eb74c]/40">
                  500+ Dự án
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
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/proof/ban-giao-thiet-bi-tan-noi.jpg" alt="Thuê máy photocopy phục vụ in sao đề thi – Sở GD&amp;ĐT Vĩnh Phúc" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Case Study Giáo dục</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/du-an/so-gddt-vinh-phuc-thue-may-photocopy-sao-in-de-thi/">Thuê máy photocopy phục vụ in sao đề thi – Sở GD&amp;ĐT Vĩnh Phúc</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Hương Sơn cung cấp dịch vụ thuê 02 máy photocopy Toshiba 7518A/8518A phục vụ in sao đề thi cho Sở GD&amp;ĐT tỉnh Vĩnh Phúc. Khối lượng thuê thực tế được xác nhận là…</p>
            <a href="/du-an/so-gddt-vinh-phuc-thue-may-photocopy-sao-in-de-thi/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem case study</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/proof/in-sao-de-thi-duplo.jpg" alt="Thuê máy in nhân bản siêu tốc Duplo phục vụ Kỳ thi Tốt nghiệp THPT 2026" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Case Study Giáo dục</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/du-an/so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026/">Thuê máy in nhân bản siêu tốc Duplo phục vụ Kỳ thi Tốt nghiệp THPT 2026</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Theo Hợp đồng kinh tế số 200426/HĐKT/TTB/HS-SGDĐT ngày 12/5/2026, Hương Sơn cung cấp dịch vụ thuê 02 máy in nhân bản siêu tốc phục vụ sao đề thi Kỳ thi Tốt nghi…</p>
            <a href="/du-an/so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem case study</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/proof/ban-giao-vietcombank.jpg" alt="Cung cấp máy photocopy cho hệ thống Ngân hàng Vietcombank toàn quốc" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Case Study Ngân hàng</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/du-an/vietcombank-cung-cap-may-photocopy/">Cung cấp máy photocopy cho hệ thống Ngân hàng Vietcombank toàn quốc</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Theo thông tin Hương Sơn tự công bố công khai trên website huongsonco.com.vn, năm 2022–2023 Hương Sơn đã cung cấp cho hệ thống Ngân hàng Vietcombank lô máy phot…</p>
            <a href="/du-an/vietcombank-cung-cap-may-photocopy/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem case study</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="py-16" class="bg-white border-b border-gray-200">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mb-12">
        <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-2">Bằng chứng uy tín</span>
        <h2 class="text-2xl sm:text-[32px] font-bold text-[#181923] leading-tight mb-3">Năng Lực Thiết Bị &amp; Đội Ngũ Kỹ Sư Triển Khai</h2>
        <p class="text-[15.5px] text-gray-600 leading-relaxed">Mọi dự án bàn giao đều có đầy đủ biên bản kiểm định kỹ thuật, nhật ký vận hành và nghiệm thu thanh lý minh bạch.</p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <div class="border border-gray-200 bg-white flex flex-col group hover:border-[#1A9900] transition duration-300 shadow-xs">
          <div class="relative overflow-hidden aspect-[16/10] bg-gray-100">
            <img src="/assets/images/proof/kho-thiet-bi-huong-son.jpg" alt="Hệ Thống Kho Bãi &amp; Thiết Bị Sẵn Sàng" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <span class="absolute top-3 left-3 bg-[#181924]/90 text-white text-[10.5px] font-bold uppercase tracking-wider px-2.5 py-1 backdrop-blur-xs">
              Kho Hàng Sẵn Có &gt; 200 Máy
            </span>
          </div>
          <div class="p-5 flex-1 flex flex-col">
            <h4 class="text-[15.5px] font-bold text-[#181923] mb-2 leading-snug group-hover:text-[#1A9900] transition">Hệ Thống Kho Bãi &amp; Thiết Bị Sẵn Sàng</h4>
            <p class="text-[13px] text-gray-600 leading-relaxed flex-1">Kho hàng trung tâm lưu trữ hàng trăm máy photocopy Toshiba, Duplo và vật tư FANSIPAN chính hãng, sẵn sàng điều động trong 24–48h.</p>
          </div>
        </div>
        <div class="border border-gray-200 bg-white flex flex-col group hover:border-[#1A9900] transition duration-300 shadow-xs">
          <div class="relative overflow-hidden aspect-[16/10] bg-gray-100">
            <img src="/assets/images/proof/doi-ngu-ky-thuat-pdi.jpg" alt="Đội Ngũ Kỹ Sư Đào Tạo Chính Hãng" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <span class="absolute top-3 left-3 bg-[#181924]/90 text-white text-[10.5px] font-bold uppercase tracking-wider px-2.5 py-1 backdrop-blur-xs">
              Quy Trình Kiểm Định PDI
            </span>
          </div>
          <div class="p-5 flex-1 flex flex-col">
            <h4 class="text-[15.5px] font-bold text-[#181923] mb-2 leading-snug group-hover:text-[#1A9900] transition">Đội Ngũ Kỹ Sư Đào Tạo Chính Hãng</h4>
            <p class="text-[13px] text-gray-600 leading-relaxed flex-1">100% thiết bị trải qua quy trình kiểm tra chất lượng PDI nghiêm ngặt. Kỹ sư được chứng nhận trực tiếp bởi Duplo (Nhật Bản) và Toshiba.</p>
          </div>
        </div>
        <div class="border border-gray-200 bg-white flex flex-col group hover:border-[#1A9900] transition duration-300 shadow-xs">
          <div class="relative overflow-hidden aspect-[16/10] bg-gray-100">
            <img src="/assets/images/proof/ban-giao-thiet-bi-tan-noi.jpg" alt="Giao Hàng Tận Nơi &amp; Hướng Dẫn Vận Hành" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <span class="absolute top-3 left-3 bg-[#181924]/90 text-white text-[10.5px] font-bold uppercase tracking-wider px-2.5 py-1 backdrop-blur-xs">
              Bàn Giao Chuyên Nghiệp
            </span>
          </div>
          <div class="p-5 flex-1 flex flex-col">
            <h4 class="text-[15.5px] font-bold text-[#181923] mb-2 leading-snug group-hover:text-[#1A9900] transition">Giao Hàng Tận Nơi &amp; Hướng Dẫn Vận Hành</h4>
            <p class="text-[13px] text-gray-600 leading-relaxed flex-1">Logistics chuyên dụng, lắp đặt tận bàn giao việc, bàn giao biên bản kiểm tra kỹ thuật và đào tạo nhân sự sử dụng thành thạo.</p>
          </div>
        </div>
        <div class="border border-gray-200 bg-white flex flex-col group hover:border-[#1A9900] transition duration-300 shadow-xs">
          <div class="relative overflow-hidden aspect-[16/10] bg-gray-100">
            <img src="/assets/images/proof/ban-giao-vietcombank.jpg" alt="Cung Ứng 127 Máy Cho Vietcombank" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <span class="absolute top-3 left-3 bg-[#181924]/90 text-white text-[10.5px] font-bold uppercase tracking-wider px-2.5 py-1 backdrop-blur-xs">
              Khách Hàng Tiêu Biểu
            </span>
          </div>
          <div class="p-5 flex-1 flex flex-col">
            <h4 class="text-[15.5px] font-bold text-[#181923] mb-2 leading-snug group-hover:text-[#1A9900] transition">Cung Ứng 127 Máy Cho Vietcombank</h4>
            <p class="text-[13px] text-gray-600 leading-relaxed flex-1">Triển khai thành công hợp đồng cung cấp 127 máy photocopy cho Vietcombank toàn quốc và phục vụ in sao đề thi THPT các Sở GD&amp;ĐT.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/banners/hero_office_solutions_1787899910391.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Cần xem thêm năng lực triển khai của Hương Sơn?</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Tải hồ sơ năng lực đầy đủ hoặc liên hệ trực tiếp để trao đổi chi tiết.</p>
      </div>
      <div class="flex flex-wrap items-center gap-4 flex-shrink-0">
        <a href="/ve-huong-son/tai-nguyen/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Tải hồ sơ năng lực</a>
        <a href="/nhan-tu-van/bao-gia/" class="border border-gray-500 hover:border-[#1A9900] hover:text-[#1A9900] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Yêu cầu báo giá</a>
        <a href="tel:0911138583" data-ga="click_hotline" class="text-white font-bold text-sm hover:text-[#1A9900] transition">
          <i class="fa-solid fa-phone text-[#1A9900] mr-2"></i>091.113.8583
        </a>
      </div>
    </div>
  </section>
@endsection
