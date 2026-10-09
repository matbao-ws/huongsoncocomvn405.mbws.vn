@extends('client.layouts.app')

@section('title', "Hồ sơ năng lực Hương Sơn – Thiết bị, kỹ thuật, dự án | Hương Sơn")
@section('meta_description', "Năng lực triển khai của Hương Sơn: đại lý Duplo, Toshiba, Konica Minolta; dự án Sở GD&ĐT Vĩnh Phúc, Quảng Trị, Vietcombank.")
@section('canonical', "https://huongsonco.com.vn/ve-huong-son/nang-luc/")
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
        "name": "Hồ sơ năng lực",
        "item": "https://huongsonco.com.vn/ve-huong-son/nang-luc/"
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
          </a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <a href="/ve-huong-son/" class="text-gray-200 hover:text-white transition">Về Hương Sơn</a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <span class="text-[#84e372] font-semibold" aria-current="page">Hồ sơ năng lực</span>
        </nav>
      </div>

      <!-- 2-COLUMN SPLIT HERO SHOWCASE -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
        <!-- LEFT COLUMN: Content & Action (7 cols) -->
        <div class="lg:col-span-7 text-left">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.2em] text-[#5eb74c] mb-2.5">
            <span class="w-2 h-2 rounded-full bg-[#5eb74c] inline-block animate-pulse"></span>
            Năng lực triển khai
          </div>
          <h1 class="text-2xl sm:text-[34px] lg:text-[40px] font-extrabold text-white mb-3.5 leading-[1.35] tracking-normal drop-shadow-md">
            Hồ sơ năng lực Hương Sơn
          </h1>
          <p class="text-gray-200 text-[14.5px] sm:text-base leading-relaxed mb-6 font-normal max-w-2xl">Năng lực thiết bị, kho bãi sẵn có, đội ngũ kỹ thuật chính hãng, logistics chuyên dụng và các dự án thực tế.</p>
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
                <img src="/assets/images/proof/ban-giao-thiet-bi-tan-noi.jpg" alt="Hồ sơ năng lực Hương Sơn" class="max-h-[190px] sm:max-h-[220px] w-auto object-contain mx-auto drop-shadow-[0_15px_25px_rgba(0,0,0,0.6)] transform group-hover:scale-105 transition-transform duration-500" loading="eager" />
              </div>

              <!-- Bottom Caption Strip & Floating Badge -->
              <div class="pt-3 border-t border-white/15 flex items-center justify-between text-xs text-gray-200">
                <div class="flex items-center gap-1.5 font-medium">
                  <i class="fa-solid fa-circle-check text-[#5eb74c]"></i>
                  <span>Bàn giao & Nghiệm thu thiết bị tận nơi</span>
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
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-3">Cơ sở vật chất &amp; Con người</span>
        <h2 class="text-2xl sm:text-[34px] font-bold text-[#181923] leading-tight">Năng lực triển khai thực tế của Hương Sơn</h2>
      </div><div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="border border-gray-200 bg-white flex flex-col hover:border-[#1A9900] transition duration-300 shadow-xs group">
          <div class="relative overflow-hidden aspect-[16/10] bg-gray-100">
            <img src="/assets/images/proof/kho-thiet-bi-huong-son.jpg" alt="Hệ thống Kho Bãi &amp; Sẵn Sàng Thiết Bị" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <span class="absolute top-3 left-3 bg-[#181924]/90 text-white text-[10.5px] font-bold px-2.5 py-1 uppercase tracking-wider backdrop-blur-xs">> 200 Thiết bị sẵn có</span>
          </div>
          <div class="p-6 flex-1 flex flex-col">
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition">Hệ thống Kho Bãi & Sẵn Sàng Thiết Bị</h3>
            <p class="text-[14px] text-gray-600 leading-relaxed flex-1">Kho hàng rộng tại Hà Nội và mạng lưới miền Bắc luôn sẵn sàng hàng trăm model máy photocopy đa chức năng Toshiba, Konica Minolta và máy in nhân bản siêu tốc Duplo. Sẵn sàng điều động thiết bị lớn trong vòng 24–48 giờ.</p>
          </div>
        </div>
        <div class="border border-gray-200 bg-white flex flex-col hover:border-[#1A9900] transition duration-300 shadow-xs group">
          <div class="relative overflow-hidden aspect-[16/10] bg-gray-100">
            <img src="/assets/images/proof/doi-ngu-ky-thuat-pdi.jpg" alt="Kỹ Sư Được Đào Tạo Trực Tiếp Từ Hãng" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <span class="absolute top-3 left-3 bg-[#181924]/90 text-white text-[10.5px] font-bold px-2.5 py-1 uppercase tracking-wider backdrop-blur-xs">Chứng chỉ hãng chính thức</span>
          </div>
          <div class="p-6 flex-1 flex flex-col">
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition">Kỹ Sư Được Đào Tạo Trực Tiếp Từ Hãng</h3>
            <p class="text-[14px] text-gray-600 leading-relaxed flex-1">Đội ngũ kỹ thuật viên lành nghề với thâm niên lâu năm, được đào tạo chuyên sâu và cấp chứng chỉ trực tiếp từ Duplo (Nhật Bản), Toshiba và Konica Minolta. Thành thạo cân chỉnh quang học, bo mạch điện tử và bảo dưỡng định kỳ.</p>
          </div>
        </div>
        <div class="border border-gray-200 bg-white flex flex-col hover:border-[#1A9900] transition duration-300 shadow-xs group">
          <div class="relative overflow-hidden aspect-[16/10] bg-gray-100">
            <img src="/assets/images/proof/ban-giao-thiet-bi-tan-noi.jpg" alt="Giao Hàng &amp; Hướng Dẫn Vận Hành Tận Nơi" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <span class="absolute top-3 left-3 bg-[#181924]/90 text-white text-[10.5px] font-bold px-2.5 py-1 uppercase tracking-wider backdrop-blur-xs">Bàn giao chuẩn B2B</span>
          </div>
          <div class="p-6 flex-1 flex flex-col">
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition">Giao Hàng & Hướng Dẫn Vận Hành Tận Nơi</h3>
            <p class="text-[14px] text-gray-600 leading-relaxed flex-1">Đội ngũ kỹ thuật vận chuyển chuyên dụng lắp đặt tận bàn giao việc, bàn giao biên bản kiểm tra kỹ thuật, nạp firmware chuẩn và hướng dẫn cán bộ sử dụng thành thạo mọi tính năng sao in bảo mật.</p>
          </div>
        </div>
        <div class="border border-gray-200 bg-white flex flex-col hover:border-[#1A9900] transition duration-300 shadow-xs group">
          <div class="relative overflow-hidden aspect-[16/10] bg-gray-100">
            <img src="/assets/images/proof/in-sao-de-thi-duplo.jpg" alt="Quy Trình Kiểm Định PDI &amp; Trực Kỹ Thuật 24/7" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <span class="absolute top-3 left-3 bg-[#181924]/90 text-white text-[10.5px] font-bold px-2.5 py-1 uppercase tracking-wider backdrop-blur-xs">100% Kiểm định PDI</span>
          </div>
          <div class="p-6 flex-1 flex flex-col">
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition">Quy Trình Kiểm Định PDI & Trực Kỹ Thuật 24/7</h3>
            <p class="text-[14px] text-gray-600 leading-relaxed flex-1">100% thiết bị trải qua quy trình 5 bước kiểm định Pre-Delivery Inspection (PDI) nghiêm ngặt trước khi xuất xưởng. Luôn có phương án máy dự phòng N+1 sẵn sàng tại hiện trường.</p>
          </div>
        </div></div>
    </div>
  </section>

  <section class="py-16 bg-[#f5f8fb] ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-3">Quy trình chuẩn mực</span>
        <h2 class="text-2xl sm:text-[34px] font-bold text-[#181923] leading-tight">5 bước bàn giao thiết bị & nghiệm thu thực tế</h2>
      </div><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 pt-4">
        <div class="flex items-start space-x-4">
          <span class="w-9 h-9 bg-[#1A9900] text-white font-bold text-sm flex items-center justify-center flex-shrink-0 mt-0.5">1</span>
          <div>
            <h4 class="text-[15px] font-bold text-[#181923] mb-1">1. Khảo sát mặt bằng</h4>
            <p class="text-[13.5px] text-gray-500 leading-relaxed">Kiểm tra nguồn điện ổn định (220V), vị trí lắp đặt thông thoáng, kết nối mạng LAN/Wi-Fi.</p>
          </div>
        </div>
        <div class="flex items-start space-x-4">
          <span class="w-9 h-9 bg-[#1A9900] text-white font-bold text-sm flex items-center justify-center flex-shrink-0 mt-0.5">2</span>
          <div>
            <h4 class="text-[15px] font-bold text-[#181923] mb-1">2. Kiểm định PDI tại kho</h4>
            <p class="text-[13.5px] text-gray-500 leading-relaxed">Chạy thử 200 bản in test, kiểm tra sensor nạp giấy, độ phân giải quang học và dán tem xuất kho.</p>
          </div>
        </div>
        <div class="flex items-start space-x-4">
          <span class="w-9 h-9 bg-[#1A9900] text-white font-bold text-sm flex items-center justify-center flex-shrink-0 mt-0.5">3</span>
          <div>
            <h4 class="text-[15px] font-bold text-[#181923] mb-1">3. Vận chuyển an toàn</h4>
            <p class="text-[13.5px] text-gray-500 leading-relaxed">Xe chuyên dụng giao hàng tận nơi, bọc màng PE chống bụi và cố định chống rung lắc.</p>
          </div>
        </div>
        <div class="flex items-start space-x-4">
          <span class="w-9 h-9 bg-[#1A9900] text-white font-bold text-sm flex items-center justify-center flex-shrink-0 mt-0.5">4</span>
          <div>
            <h4 class="text-[15px] font-bold text-[#181923] mb-1">4. Bàn giao & Chuyển giao</h4>
            <p class="text-[13.5px] text-gray-500 leading-relaxed">Kỹ sư lắp đặt, cài đặt driver cho toàn bộ máy tính trong mạng, hướng dẫn người dùng vận hành.</p>
          </div>
        </div>
        <div class="flex items-start space-x-4">
          <span class="w-9 h-9 bg-[#1A9900] text-white font-bold text-sm flex items-center justify-center flex-shrink-0 mt-0.5">5</span>
          <div>
            <h4 class="text-[15px] font-bold text-[#181923] mb-1">5. Nghiệm thu & SLA</h4>
            <p class="text-[13.5px] text-gray-500 leading-relaxed">Ký biên bản bàn giao, chốt số counter khởi điểm và kích hoạt cam kết hỗ trợ kỹ thuật P1/P2/P3.</p>
          </div>
        </div></div>
    </div>
  </section>

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-3">Bằng chứng hợp đồng</span>
        <h2 class="text-2xl sm:text-[34px] font-bold text-[#181923] leading-tight">Các dự án tiêu biểu minh chứng năng lực</h2>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/vietcombank-2024.jpg" alt="Cung cấp máy photocopy cho hệ thống Ngân hàng Vietcombank toàn quốc" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ngân hàng Vietcombank</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/du-an/vietcombank-cung-cap-may-photocopy/">Cung cấp máy photocopy cho hệ thống Ngân hàng Vietcombank toàn quốc</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Triển khai thành công 02 đợt: lô máy Konica Minolta (2022–2023) và lô 127 máy photocopy Toshiba đa chức năng (2024) cho chi nhánh toàn quốc.</p>
            <a href="/du-an/vietcombank-cung-cap-may-photocopy/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem case study</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/98-cho-thue-toshiba-e-studio-456.jpg" alt="Thuê máy photocopy in sao đề thi – Sở GD&amp;ĐT Vĩnh Phúc" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Sở GD&amp;ĐT Vĩnh Phúc</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/du-an/so-gddt-vinh-phuc-thue-may-photocopy-sao-in-de-thi/">Thuê máy photocopy in sao đề thi – Sở GD&amp;ĐT Vĩnh Phúc</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Thuê 02 máy photocopy tốc độ cao Toshiba 7518A/8518A phục vụ in sao đề thi; có biên bản bàn giao, nhật ký vận hành và nghiệm thu thực tế minh bạch.</p>
            <a href="/du-an/so-gddt-vinh-phuc-thue-may-photocopy-sao-in-de-thi/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem case study</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/duplo-dp-x550.jpg" alt="Thuê máy in nhân bản siêu tốc Duplo Kỳ thi Tốt nghiệp THPT 2026" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Sở GD&amp;ĐT Quảng Trị</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/du-an/so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026/">Thuê máy in nhân bản siêu tốc Duplo Kỳ thi Tốt nghiệp THPT 2026</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Hợp đồng kinh tế thuê 02 máy in siêu tốc Duplo tốc độ 150–155 bản/phút, bảo đảm an ninh cách ly 3 vòng và hoàn thành 100% tiến độ kỳ thi.</p>
            <a href="/du-an/so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem case study</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/banners/hero_office_solutions_1787899910391.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Cần bản hồ sơ năng lực đầy đủ dạng PDF?</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Tải hồ sơ năng lực hoặc liên hệ để nhận bản trình bày chi tiết theo ngành.</p>
      </div>
      <div class="flex flex-wrap items-center gap-4 flex-shrink-0">
        <a href="/ve-huong-son/tai-nguyen/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Tải hồ sơ năng lực</a>
        <a href="/du-an/" class="border border-gray-500 hover:border-[#1A9900] hover:text-[#1A9900] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem dự án</a>
        <a href="tel:0911138583" data-ga="click_hotline" class="text-white font-bold text-sm hover:text-[#1A9900] transition">
          <i class="fa-solid fa-phone text-[#1A9900] mr-2"></i>091.113.8583
        </a>
      </div>
    </div>
  </section>
@endsection
