@extends('client.layouts.app')

@section('title', "Tư liệu ảnh & video thực tế – Kho máy, kỹ thuật PDI & Bàn giao | Hương Sơn")
@section('meta_description', "Tổng hợp tư liệu hình ảnh và video thực tế về kho máy photocopy Toshiba, Duplo, quy trình kiểm định 24 bước PDI và dự án bàn giao của Hương Sơn.")
@section('canonical', "https://huongsonco.com.vn/ve-huong-son/tu-lieu-thuc-te/")
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
        "name": "Tư liệu ảnh & video thực tế",
        "item": "https://huongsonco.com.vn/ve-huong-son/tu-lieu-thuc-te/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "CollectionPage",
    "name": "Tư liệu ảnh & video thực tế – Hương Sơn",
    "description": "Thư viện hình ảnh và video thực tế về hệ thống kho bãi thiết bị, quy trình kiểm định PDI và hoạt động bàn giao máy của Hương Sơn.",
    "url": "https://huongsonco.com.vn/ve-huong-son/tu-lieu-thuc-te/"
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
          </a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <a href="/ve-huong-son/" class="text-gray-200 hover:text-white transition">Về Hương Sơn</a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <span class="text-[#84e372] font-semibold" aria-current="page">Tư liệu ảnh &amp; video thực tế</span>
        </nav>
      </div>

      <!-- 2-COLUMN SPLIT HERO SHOWCASE -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
        <!-- LEFT COLUMN: Content & Action (7 cols) -->
        <div class="lg:col-span-7 text-left">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.2em] text-[#5eb74c] mb-2.5">
            <span class="w-2 h-2 rounded-full bg-[#5eb74c] inline-block animate-pulse"></span>
            Tư liệu thực tế Hương Sơn
          </div>
          <h1 class="text-2xl sm:text-[34px] lg:text-[40px] font-extrabold text-white mb-3.5 leading-[1.35] tracking-normal drop-shadow-md">
            Tư Liệu Ảnh &amp; Video Thực Tế
          </h1>
          <p class="text-gray-200 text-[14.5px] sm:text-base leading-relaxed mb-6 font-normal max-w-2xl">Tổng hợp hình ảnh và video thực tế về hệ thống kho bãi thiết bị sẵn có, quy trình kiểm định kỹ thuật PDI chính hãng và các dự án bàn giao – lắp đặt tại Hà Nội và các tỉnh phía Bắc.</p>
          <div class="flex flex-wrap items-center gap-2 sm:gap-2.5 mb-7">
            <div class="inline-flex items-center gap-1.5 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm text-xs"><i class="fa-solid fa-camera text-[#5eb74c]"></i> <span>100% Ảnh Thực Tế Tại Kho & Hiện Trường</span></div>
          <div class="inline-flex items-center gap-1.5 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm text-xs"><i class="fa-solid fa-warehouse text-[#ffc107]"></i> <span>Showroom & Kho Máy Sẵn Sàng Tại Hà Nội</span></div>
          <div class="inline-flex items-center gap-1.5 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm text-xs"><i class="fa-solid fa-video text-cyan-400"></i> <span>Video Vận Hành Máy Siêu Tốc & Đa Chức Năng</span></div>
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
                <img src="/assets/images/proof/ban-giao-thiet-bi-tan-noi.jpg" alt="Tư Liệu Ảnh &amp; Video Thực Tế" class="max-h-[190px] sm:max-h-[220px] w-auto object-contain mx-auto drop-shadow-[0_15px_25px_rgba(0,0,0,0.6)] transform group-hover:scale-105 transition-transform duration-500" loading="eager" />
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

  <section class="py-12 bg-white border-b border-gray-100">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
        <div class="bg-gray-50 border border-gray-200/80 p-5 rounded-lg text-center hover:border-[#1A9900] transition duration-300">
          <div class="text-3xl sm:text-4xl font-extrabold text-[#1A9900] mb-1">&gt; 200</div>
          <div class="text-xs font-bold text-gray-800 uppercase tracking-wider mb-1">Máy Sẵn Sàng Tại Kho</div>
          <p class="text-[12px] text-gray-500">Toshiba, Duplo, Konica Minolta nguyên đai nguyên kiện</p>
        </div>
        <div class="bg-gray-50 border border-gray-200/80 p-5 rounded-lg text-center hover:border-[#1A9900] transition duration-300">
          <div class="text-3xl sm:text-4xl font-extrabold text-[#1A9900] mb-1">24 Bước</div>
          <div class="text-xs font-bold text-gray-800 uppercase tracking-wider mb-1">Quy Trình Kiểm Định PDI</div>
          <p class="text-[12px] text-gray-500">Kiểm tra dòng rò, bo mạch, cân chỉnh quang học chuẩn hãng</p>
        </div>
        <div class="bg-gray-50 border border-gray-200/80 p-5 rounded-lg text-center hover:border-[#1A9900] transition duration-300">
          <div class="text-3xl sm:text-4xl font-extrabold text-[#1A9900] mb-1">127+ Máy</div>
          <div class="text-xs font-bold text-gray-800 uppercase tracking-wider mb-1">Bàn Giao Vietcombank</div>
          <p class="text-[12px] text-gray-500">Bàn giao, lắp đặt và bảo trì định kỳ trên toàn quốc</p>
        </div>
        <div class="bg-gray-50 border border-gray-200/80 p-5 rounded-lg text-center hover:border-[#1A9900] transition duration-300">
          <div class="text-3xl sm:text-4xl font-extrabold text-[#1A9900] mb-1">500+</div>
          <div class="text-xs font-bold text-gray-800 uppercase tracking-wider mb-1">Dự Án Đã Bàn Giao</div>
          <p class="text-[12px] text-gray-500">Sở GD&ĐT, trường học, ngân hàng và cơ quan Nhà nước</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-16 bg-[#f8fafc]">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
        <div>
          <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-2">Thư viện truyền thông</span>
          <h2 class="text-2xl sm:text-[32px] font-bold text-[#181923] leading-tight">Hình Ảnh &amp; Video Thực Tế Tại Hương Sơn</h2>
          <p class="text-gray-600 text-[14.5px] mt-2 max-w-2xl leading-relaxed">Toàn bộ hình ảnh thực tế được chụp tại hệ thống kho máy, phân xưởng kiểm định PDI và công trình bàn giao cho các khách hàng cơ quan, trường học, ngân hàng.</p>
        </div>
        <div class="flex items-center gap-3">
          <a href="/nhan-tu-van/bao-gia/" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-5 py-3 rounded shadow-xs transition inline-flex items-center gap-2">
            <i class="fa-solid fa-file-invoice"></i>
            <span>Nhận Báo Giá Máy</span>
          </a>
        </div>
      </div>

      <!-- Filter tabs -->
      <div class="flex flex-wrap items-center gap-2 mb-10" id="gallery-filter-tabs">
        <button type="button" class="gallery-filter-btn active bg-[#1A9900] text-white px-4 py-2.5 text-xs font-bold uppercase tracking-wider rounded-xs transition inline-flex items-center gap-2 shadow-xs" data-filter="all">
          <i class="fa-solid fa-border-all"></i>
          <span>Tất cả tư liệu</span>
          <span class="bg-white/20 text-white text-[10.5px] px-1.5 py-0.2 rounded-full font-mono count-badge">8</span>
        </button>
        <button type="button" class="gallery-filter-btn bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2.5 text-xs font-bold uppercase tracking-wider rounded-xs transition inline-flex items-center gap-2" data-filter="kho-may">
          <i class="fa-solid fa-warehouse text-[#1A9900]"></i>
          <span>Kho bãi &amp; Thiết bị sẵn sàng</span>
          <span class="bg-gray-200 text-gray-700 text-[10.5px] px-1.5 py-0.2 rounded-full font-mono count-badge">2</span>
        </button>
        <button type="button" class="gallery-filter-btn bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2.5 text-xs font-bold uppercase tracking-wider rounded-xs transition inline-flex items-center gap-2" data-filter="pdi">
          <i class="fa-solid fa-screwdriver-wrench text-[#1A9900]"></i>
          <span>Quy trình kiểm định PDI</span>
          <span class="bg-gray-200 text-gray-700 text-[10.5px] px-1.5 py-0.2 rounded-full font-mono count-badge">1</span>
        </button>
        <button type="button" class="gallery-filter-btn bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2.5 text-xs font-bold uppercase tracking-wider rounded-xs transition inline-flex items-center gap-2" data-filter="ban-giao">
          <i class="fa-solid fa-truck-ramp-box text-[#1A9900]"></i>
          <span>Bàn giao &amp; Lắp đặt thực tế</span>
          <span class="bg-gray-200 text-gray-700 text-[10.5px] px-1.5 py-0.2 rounded-full font-mono count-badge">3</span>
        </button>
        <button type="button" class="gallery-filter-btn bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2.5 text-xs font-bold uppercase tracking-wider rounded-xs transition inline-flex items-center gap-2" data-filter="videos">
          <i class="fa-solid fa-circle-play text-red-500"></i>
          <span>Video clip thực tế</span>
          <span class="bg-gray-200 text-gray-700 text-[10.5px] px-1.5 py-0.2 rounded-full font-mono count-badge">2</span>
        </button>
      </div>

      <!-- Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8" id="gallery-items-grid">
        
        <div class="gallery-item border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-xl transition-all duration-300 cursor-pointer" 
             data-category="kho-may" 
             data-id="kho-01"
             data-title="Hệ thống kho máy photocopy Toshiba &amp; Konica Minolta đa chức năng"
             data-desc="Kho hàng trung tâm tại Số 27 ngõ 523 phố Minh Khai, Hà Nội luôn sẵn sàng hơn 200 thân máy photocopy Toshiba e-STUDIO, Konica Minolta bizhub nguyên đai nguyên kiện phục vụ nhu cầu thuê máy và mua sắm."
             data-img="/assets/images/tu-lieu-thuc-te/kho-may/kho-may-photocopy-toshiba-duplo-ha-noi.jpg"
             data-badge="Kho Hàng &gt; 200 Máy"
             data-location="Kho Trung Tâm – 27 ngõ 523 Minh Khai, Hà Nội"
             data-date="10/2026"
             data-type="image"
             onclick="openLightbox(this)">
          <div class="h-60 overflow-hidden relative bg-gray-100">
            <img src="/assets/images/tu-lieu-thuc-te/kho-may/kho-may-photocopy-toshiba-duplo-ha-noi.jpg" alt="Hệ thống kho máy photocopy Toshiba &amp; Konica Minolta đa chức năng" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md flex items-center">
              <i class="fa-solid fa-camera mr-1"></i>Kho Hàng &gt; 200 Máy
            </div>
            
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end justify-between p-4 text-white">
          <span class="text-xs font-semibold flex items-center gap-1.5"><i class="fa-solid fa-expand text-[#5eb74c]"></i> Xem phóng to</span>
          <span class="text-[11px] bg-white/20 backdrop-blur-xs px-2 py-0.5 rounded">Ảnh HD</span>
        </div>
        
          </div>
          <div class="p-5 flex flex-col flex-1">
            <div class="flex items-center justify-between text-[11.5px] text-gray-500 mb-2">
              <span class="flex items-center gap-1 text-[#1A9900] font-semibold">
                <i class="fa-solid fa-location-dot"></i>
                <span class="truncate max-w-[200px]">Kho Trung Tâm – 27 ngõ 523 Minh Khai, Hà Nội</span>
              </span>
              <span><i class="fa-regular fa-calendar mr-1"></i>10/2026</span>
            </div>
            <h3 class="text-[16px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              Hệ thống kho máy photocopy Toshiba &amp; Konica Minolta đa chức năng
            </h3>
            <p class="text-gray-600 text-[13px] leading-relaxed mb-4 flex-1 line-clamp-3">
              Kho hàng trung tâm tại Số 27 ngõ 523 phố Minh Khai, Hà Nội luôn sẵn sàng hơn 200 thân máy photocopy Toshiba e-STUDIO, Konica Minolta bizhub nguyên đai nguyên kiện phục vụ nhu cầu thuê máy và mua sắm.
            </p>
            <div class="pt-3.5 border-t border-gray-100 flex items-center justify-between text-xs">
              <span class="font-bold text-[#1A9900] inline-flex items-center gap-1.5 group-hover:underline">
                <span>Xem ảnh sắc nét</span>
                <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
              </span>
              <span class="text-gray-400 text-[11px] uppercase tracking-wider">Kho Bãi &amp; Máy Móc</span>
            </div>
          </div>
        </div>
        

        <div class="gallery-item border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-xl transition-all duration-300 cursor-pointer" 
             data-category="kho-may" 
             data-id="kho-02"
             data-title="Dàn máy in nhân bản siêu tốc Duplo DP-X550 / DP-X850 phục vụ in đề thi"
             data-desc="Khu vực lưu trữ máy in siêu tốc Duplo Nhật Bản và hệ thống phối trang tự động DFC-120 phục vụ các hội đồng thi THPT và trường học trên toàn miền Bắc."
             data-img="/assets/images/tu-lieu-thuc-te/kho-may/may-in-nhan-ban-sieu-toc-duplo-dp-x550.jpg"
             data-badge="Máy In Siêu Tốc Duplo"
             data-location="Kho Thiết Bị Duplo Hương Sơn"
             data-date="10/2026"
             data-type="image"
             onclick="openLightbox(this)">
          <div class="h-60 overflow-hidden relative bg-gray-100">
            <img src="/assets/images/tu-lieu-thuc-te/kho-may/may-in-nhan-ban-sieu-toc-duplo-dp-x550.jpg" alt="Dàn máy in nhân bản siêu tốc Duplo DP-X550 / DP-X850 phục vụ in đề thi" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md flex items-center">
              <i class="fa-solid fa-camera mr-1"></i>Máy In Siêu Tốc Duplo
            </div>
            
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end justify-between p-4 text-white">
          <span class="text-xs font-semibold flex items-center gap-1.5"><i class="fa-solid fa-expand text-[#5eb74c]"></i> Xem phóng to</span>
          <span class="text-[11px] bg-white/20 backdrop-blur-xs px-2 py-0.5 rounded">Ảnh HD</span>
        </div>
        
          </div>
          <div class="p-5 flex flex-col flex-1">
            <div class="flex items-center justify-between text-[11.5px] text-gray-500 mb-2">
              <span class="flex items-center gap-1 text-[#1A9900] font-semibold">
                <i class="fa-solid fa-location-dot"></i>
                <span class="truncate max-w-[200px]">Kho Thiết Bị Duplo Hương Sơn</span>
              </span>
              <span><i class="fa-regular fa-calendar mr-1"></i>10/2026</span>
            </div>
            <h3 class="text-[16px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              Dàn máy in nhân bản siêu tốc Duplo DP-X550 / DP-X850 phục vụ in đề thi
            </h3>
            <p class="text-gray-600 text-[13px] leading-relaxed mb-4 flex-1 line-clamp-3">
              Khu vực lưu trữ máy in siêu tốc Duplo Nhật Bản và hệ thống phối trang tự động DFC-120 phục vụ các hội đồng thi THPT và trường học trên toàn miền Bắc.
            </p>
            <div class="pt-3.5 border-t border-gray-100 flex items-center justify-between text-xs">
              <span class="font-bold text-[#1A9900] inline-flex items-center gap-1.5 group-hover:underline">
                <span>Xem ảnh sắc nét</span>
                <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
              </span>
              <span class="text-gray-400 text-[11px] uppercase tracking-wider">Kho Bãi &amp; Máy Móc</span>
            </div>
          </div>
        </div>
        

        <div class="gallery-item border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-xl transition-all duration-300 cursor-pointer" 
             data-category="pdi" 
             data-id="pdi-01"
             data-title="Đội ngũ kỹ sư kiểm tra và hiệu chuẩn 24 bước PDI trước khi xuất xưởng"
             data-desc="100% thiết bị tại Hương Sơn đều trải qua quy trình tiền kiểm định PDI: kiểm tra bo mạch, cân chỉnh thước quang scan, đo điện trở sấy và in kiểm tra 100 bản test chuẩn màu."
             data-img="/assets/images/tu-lieu-thuc-te/ky-thuat-pdi/quy-trinh-kiem-dinh-pdi-24-buoc.jpg"
             data-badge="Quy Trình 24 Bước PDI"
             data-location="Xưởng Kỹ Thuật &amp; Cứu Hộ Hương Sơn"
             data-date="09/2026"
             data-type="image"
             onclick="openLightbox(this)">
          <div class="h-60 overflow-hidden relative bg-gray-100">
            <img src="/assets/images/tu-lieu-thuc-te/ky-thuat-pdi/quy-trinh-kiem-dinh-pdi-24-buoc.jpg" alt="Đội ngũ kỹ sư kiểm tra và hiệu chuẩn 24 bước PDI trước khi xuất xưởng" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md flex items-center">
              <i class="fa-solid fa-camera mr-1"></i>Quy Trình 24 Bước PDI
            </div>
            
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end justify-between p-4 text-white">
          <span class="text-xs font-semibold flex items-center gap-1.5"><i class="fa-solid fa-expand text-[#5eb74c]"></i> Xem phóng to</span>
          <span class="text-[11px] bg-white/20 backdrop-blur-xs px-2 py-0.5 rounded">Ảnh HD</span>
        </div>
        
          </div>
          <div class="p-5 flex flex-col flex-1">
            <div class="flex items-center justify-between text-[11.5px] text-gray-500 mb-2">
              <span class="flex items-center gap-1 text-[#1A9900] font-semibold">
                <i class="fa-solid fa-location-dot"></i>
                <span class="truncate max-w-[200px]">Xưởng Kỹ Thuật &amp; Cứu Hộ Hương Sơn</span>
              </span>
              <span><i class="fa-regular fa-calendar mr-1"></i>09/2026</span>
            </div>
            <h3 class="text-[16px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              Đội ngũ kỹ sư kiểm tra và hiệu chuẩn 24 bước PDI trước khi xuất xưởng
            </h3>
            <p class="text-gray-600 text-[13px] leading-relaxed mb-4 flex-1 line-clamp-3">
              100% thiết bị tại Hương Sơn đều trải qua quy trình tiền kiểm định PDI: kiểm tra bo mạch, cân chỉnh thước quang scan, đo điện trở sấy và in kiểm tra 100 bản test chuẩn màu.
            </p>
            <div class="pt-3.5 border-t border-gray-100 flex items-center justify-between text-xs">
              <span class="font-bold text-[#1A9900] inline-flex items-center gap-1.5 group-hover:underline">
                <span>Xem ảnh sắc nét</span>
                <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
              </span>
              <span class="text-gray-400 text-[11px] uppercase tracking-wider">Kiểm Định Kỹ Thuật PDI</span>
            </div>
          </div>
        </div>
        

        <div class="gallery-item border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-xl transition-all duration-300 cursor-pointer" 
             data-category="ban-giao" 
             data-id="bg-01"
             data-title="Vận chuyển logistics chuyên dụng và lắp đặt bàn giao máy tại trường học"
             data-desc="Đội ngũ vận chuyển chuyên dụng lắp đặt tận phòng văn thư/phòng in, đấu nối mạng nội bộ, cài đặt driver và ký biên bản nghiệm thu bàn giao kỹ thuật trực tiếp."
             data-img="/assets/images/tu-lieu-thuc-te/ban-giao/ban-giao-thiet-bi-tan-noi-truong-hoc.jpg"
             data-badge="Bàn Giao Trường Học"
             data-location="Trường THPT &amp; Cơ Sở Giáo Dục Hà Nội"
             data-date="09/2026"
             data-type="image"
             onclick="openLightbox(this)">
          <div class="h-60 overflow-hidden relative bg-gray-100">
            <img src="/assets/images/tu-lieu-thuc-te/ban-giao/ban-giao-thiet-bi-tan-noi-truong-hoc.jpg" alt="Vận chuyển logistics chuyên dụng và lắp đặt bàn giao máy tại trường học" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md flex items-center">
              <i class="fa-solid fa-camera mr-1"></i>Bàn Giao Trường Học
            </div>
            
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end justify-between p-4 text-white">
          <span class="text-xs font-semibold flex items-center gap-1.5"><i class="fa-solid fa-expand text-[#5eb74c]"></i> Xem phóng to</span>
          <span class="text-[11px] bg-white/20 backdrop-blur-xs px-2 py-0.5 rounded">Ảnh HD</span>
        </div>
        
          </div>
          <div class="p-5 flex flex-col flex-1">
            <div class="flex items-center justify-between text-[11.5px] text-gray-500 mb-2">
              <span class="flex items-center gap-1 text-[#1A9900] font-semibold">
                <i class="fa-solid fa-location-dot"></i>
                <span class="truncate max-w-[200px]">Trường THPT &amp; Cơ Sở Giáo Dục Hà Nội</span>
              </span>
              <span><i class="fa-regular fa-calendar mr-1"></i>09/2026</span>
            </div>
            <h3 class="text-[16px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              Vận chuyển logistics chuyên dụng và lắp đặt bàn giao máy tại trường học
            </h3>
            <p class="text-gray-600 text-[13px] leading-relaxed mb-4 flex-1 line-clamp-3">
              Đội ngũ vận chuyển chuyên dụng lắp đặt tận phòng văn thư/phòng in, đấu nối mạng nội bộ, cài đặt driver và ký biên bản nghiệm thu bàn giao kỹ thuật trực tiếp.
            </p>
            <div class="pt-3.5 border-t border-gray-100 flex items-center justify-between text-xs">
              <span class="font-bold text-[#1A9900] inline-flex items-center gap-1.5 group-hover:underline">
                <span>Xem ảnh sắc nét</span>
                <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
              </span>
              <span class="text-gray-400 text-[11px] uppercase tracking-wider">Bàn Giao &amp; Lắp Đặt</span>
            </div>
          </div>
        </div>
        

        <div class="gallery-item border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-xl transition-all duration-300 cursor-pointer" 
             data-category="ban-giao" 
             data-id="bg-02"
             data-title="Bàn giao 127 máy photocopy Toshiba cho hệ thống Ngân hàng Vietcombank"
             data-desc="Triển khai hợp đồng cung cấp 127 máy photocopy Toshiba công suất lớn cho các chi nhánh Vietcombank toàn quốc, đáp ứng nghiêm ngặt an toàn thông tin ngân hàng."
             data-img="/assets/images/tu-lieu-thuc-te/ban-giao/ban-giao-127-may-photocopy-vietcombank.jpg"
             data-badge="Dự Án Vietcombank"
             data-location="Chi Nhánh Vietcombank Toàn Quốc"
             data-date="08/2026"
             data-type="image"
             onclick="openLightbox(this)">
          <div class="h-60 overflow-hidden relative bg-gray-100">
            <img src="/assets/images/tu-lieu-thuc-te/ban-giao/ban-giao-127-may-photocopy-vietcombank.jpg" alt="Bàn giao 127 máy photocopy Toshiba cho hệ thống Ngân hàng Vietcombank" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md flex items-center">
              <i class="fa-solid fa-camera mr-1"></i>Dự Án Vietcombank
            </div>
            
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end justify-between p-4 text-white">
          <span class="text-xs font-semibold flex items-center gap-1.5"><i class="fa-solid fa-expand text-[#5eb74c]"></i> Xem phóng to</span>
          <span class="text-[11px] bg-white/20 backdrop-blur-xs px-2 py-0.5 rounded">Ảnh HD</span>
        </div>
        
          </div>
          <div class="p-5 flex flex-col flex-1">
            <div class="flex items-center justify-between text-[11.5px] text-gray-500 mb-2">
              <span class="flex items-center gap-1 text-[#1A9900] font-semibold">
                <i class="fa-solid fa-location-dot"></i>
                <span class="truncate max-w-[200px]">Chi Nhánh Vietcombank Toàn Quốc</span>
              </span>
              <span><i class="fa-regular fa-calendar mr-1"></i>08/2026</span>
            </div>
            <h3 class="text-[16px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              Bàn giao 127 máy photocopy Toshiba cho hệ thống Ngân hàng Vietcombank
            </h3>
            <p class="text-gray-600 text-[13px] leading-relaxed mb-4 flex-1 line-clamp-3">
              Triển khai hợp đồng cung cấp 127 máy photocopy Toshiba công suất lớn cho các chi nhánh Vietcombank toàn quốc, đáp ứng nghiêm ngặt an toàn thông tin ngân hàng.
            </p>
            <div class="pt-3.5 border-t border-gray-100 flex items-center justify-between text-xs">
              <span class="font-bold text-[#1A9900] inline-flex items-center gap-1.5 group-hover:underline">
                <span>Xem ảnh sắc nét</span>
                <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
              </span>
              <span class="text-gray-400 text-[11px] uppercase tracking-wider">Bàn Giao &amp; Lắp Đặt</span>
            </div>
          </div>
        </div>
        

        <div class="gallery-item border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-xl transition-all duration-300 cursor-pointer" 
             data-category="ban-giao" 
             data-id="bg-03"
             data-title="Lắp đặt và trực kỹ thuật máy in nhân bản siêu tốc tại Hội đồng in sao đề thi"
             data-desc="Triển khai máy in siêu tốc Duplo và kỹ sư túc trực 24/24 trong khu vực cách ly 3 vòng tại Hội đồng thi Sở GD&amp;ĐT Vĩnh Phúc và Sở GD&amp;ĐT Quảng Trị."
             data-img="/assets/images/proof/in-sao-de-thi-duplo.jpg"
             data-badge="Hội Đồng Thi THPT"
             data-location="Hội Đồng In Sao Đề Thi Sở GD&amp;ĐT"
             data-date="06/2026"
             data-type="image"
             onclick="openLightbox(this)">
          <div class="h-60 overflow-hidden relative bg-gray-100">
            <img src="/assets/images/proof/in-sao-de-thi-duplo.jpg" alt="Lắp đặt và trực kỹ thuật máy in nhân bản siêu tốc tại Hội đồng in sao đề thi" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md flex items-center">
              <i class="fa-solid fa-camera mr-1"></i>Hội Đồng Thi THPT
            </div>
            
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end justify-between p-4 text-white">
          <span class="text-xs font-semibold flex items-center gap-1.5"><i class="fa-solid fa-expand text-[#5eb74c]"></i> Xem phóng to</span>
          <span class="text-[11px] bg-white/20 backdrop-blur-xs px-2 py-0.5 rounded">Ảnh HD</span>
        </div>
        
          </div>
          <div class="p-5 flex flex-col flex-1">
            <div class="flex items-center justify-between text-[11.5px] text-gray-500 mb-2">
              <span class="flex items-center gap-1 text-[#1A9900] font-semibold">
                <i class="fa-solid fa-location-dot"></i>
                <span class="truncate max-w-[200px]">Hội Đồng In Sao Đề Thi Sở GD&amp;ĐT</span>
              </span>
              <span><i class="fa-regular fa-calendar mr-1"></i>06/2026</span>
            </div>
            <h3 class="text-[16px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              Lắp đặt và trực kỹ thuật máy in nhân bản siêu tốc tại Hội đồng in sao đề thi
            </h3>
            <p class="text-gray-600 text-[13px] leading-relaxed mb-4 flex-1 line-clamp-3">
              Triển khai máy in siêu tốc Duplo và kỹ sư túc trực 24/24 trong khu vực cách ly 3 vòng tại Hội đồng thi Sở GD&amp;ĐT Vĩnh Phúc và Sở GD&amp;ĐT Quảng Trị.
            </p>
            <div class="pt-3.5 border-t border-gray-100 flex items-center justify-between text-xs">
              <span class="font-bold text-[#1A9900] inline-flex items-center gap-1.5 group-hover:underline">
                <span>Xem ảnh sắc nét</span>
                <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
              </span>
              <span class="text-gray-400 text-[11px] uppercase tracking-wider">Bàn Giao &amp; Lắp Đặt</span>
            </div>
          </div>
        </div>
        

        <div class="gallery-item border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-xl transition-all duration-300 cursor-pointer" 
             data-category="videos" 
             data-id="vid-01"
             data-title="[Video] Vận hành thực tế máy in siêu tốc Duplo DP-X550 in đề thi 130 bản/phút"
             data-desc="Ghi lại cảnh máy in nhân bản kỹ thuật số Duplo DP-X550 vận hành thực tế tại phòng in đề thi: tốc độ in siêu tốc 130–150 bản/phút, không kẹt giấy, mực khô ngay tức thì."
             data-img="/assets/images/proof/in-sao-de-thi-duplo.jpg"
             data-badge="Video Vận Hành 130 Bản/Phút"
             data-location="Phòng In Sao Đề Thi THPT"
             data-date="10/2026"
             data-type="video"
             onclick="openLightbox(this)">
          <div class="h-60 overflow-hidden relative bg-gray-100">
            <img src="/assets/images/proof/in-sao-de-thi-duplo.jpg" alt="[Video] Vận hành thực tế máy in siêu tốc Duplo DP-X550 in đề thi 130 bản/phút" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-red-600 text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md flex items-center">
              <i class="fa-solid fa-video mr-1"></i>Video Vận Hành 130 Bản/Phút
            </div>
            
        <div class="absolute inset-0 bg-black/35 group-hover:bg-black/20 transition flex items-center justify-center">
          <div class="w-14 h-14 rounded-full bg-red-600 text-white flex items-center justify-center shadow-lg transform group-hover:scale-110 transition duration-300">
            <i class="fa-solid fa-play text-lg ml-1"></i>
          </div>
          <span class="absolute bottom-3 right-3 bg-black/80 text-white text-[11px] font-mono px-2 py-0.5 rounded font-bold">
            <i class="fa-regular fa-clock mr-1 text-amber-400"></i>02:45
          </span>
        </div>
        
          </div>
          <div class="p-5 flex flex-col flex-1">
            <div class="flex items-center justify-between text-[11.5px] text-gray-500 mb-2">
              <span class="flex items-center gap-1 text-[#1A9900] font-semibold">
                <i class="fa-solid fa-location-dot"></i>
                <span class="truncate max-w-[200px]">Phòng In Sao Đề Thi THPT</span>
              </span>
              <span><i class="fa-regular fa-calendar mr-1"></i>10/2026</span>
            </div>
            <h3 class="text-[16px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              [Video] Vận hành thực tế máy in siêu tốc Duplo DP-X550 in đề thi 130 bản/phút
            </h3>
            <p class="text-gray-600 text-[13px] leading-relaxed mb-4 flex-1 line-clamp-3">
              Ghi lại cảnh máy in nhân bản kỹ thuật số Duplo DP-X550 vận hành thực tế tại phòng in đề thi: tốc độ in siêu tốc 130–150 bản/phút, không kẹt giấy, mực khô ngay tức thì.
            </p>
            <div class="pt-3.5 border-t border-gray-100 flex items-center justify-between text-xs">
              <span class="font-bold text-[#1A9900] inline-flex items-center gap-1.5 group-hover:underline">
                <span>Xem video chi tiết</span>
                <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
              </span>
              <span class="text-gray-400 text-[11px] uppercase tracking-wider">Video Clip Thực Tế</span>
            </div>
          </div>
        </div>
        

        <div class="gallery-item border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-xl transition-all duration-300 cursor-pointer" 
             data-category="videos" 
             data-id="vid-02"
             data-title="[Video] Kỹ sư Hương Sơn kiểm tra PDI và chạy thử máy photocopy Toshiba 6528A"
             data-desc="Toàn cảnh các bước kiểm tra quang học, cân chỉnh hệ thống cấp giấy và đo xung điện áp bo mạch nguồn trước khi đóng gói giao cho khách hàng."
             data-img="/assets/images/proof/doi-ngu-ky-thuat-pdi.jpg"
             data-badge="Video Kiểm Định PDI"
             data-location="Xưởng Kiểm Định PDI Hương Sơn"
             data-date="09/2026"
             data-type="video"
             onclick="openLightbox(this)">
          <div class="h-60 overflow-hidden relative bg-gray-100">
            <img src="/assets/images/proof/doi-ngu-ky-thuat-pdi.jpg" alt="[Video] Kỹ sư Hương Sơn kiểm tra PDI và chạy thử máy photocopy Toshiba 6528A" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-red-600 text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md flex items-center">
              <i class="fa-solid fa-video mr-1"></i>Video Kiểm Định PDI
            </div>
            
        <div class="absolute inset-0 bg-black/35 group-hover:bg-black/20 transition flex items-center justify-center">
          <div class="w-14 h-14 rounded-full bg-red-600 text-white flex items-center justify-center shadow-lg transform group-hover:scale-110 transition duration-300">
            <i class="fa-solid fa-play text-lg ml-1"></i>
          </div>
          <span class="absolute bottom-3 right-3 bg-black/80 text-white text-[11px] font-mono px-2 py-0.5 rounded font-bold">
            <i class="fa-regular fa-clock mr-1 text-amber-400"></i>03:15
          </span>
        </div>
        
          </div>
          <div class="p-5 flex flex-col flex-1">
            <div class="flex items-center justify-between text-[11.5px] text-gray-500 mb-2">
              <span class="flex items-center gap-1 text-[#1A9900] font-semibold">
                <i class="fa-solid fa-location-dot"></i>
                <span class="truncate max-w-[200px]">Xưởng Kiểm Định PDI Hương Sơn</span>
              </span>
              <span><i class="fa-regular fa-calendar mr-1"></i>09/2026</span>
            </div>
            <h3 class="text-[16px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              [Video] Kỹ sư Hương Sơn kiểm tra PDI và chạy thử máy photocopy Toshiba 6528A
            </h3>
            <p class="text-gray-600 text-[13px] leading-relaxed mb-4 flex-1 line-clamp-3">
              Toàn cảnh các bước kiểm tra quang học, cân chỉnh hệ thống cấp giấy và đo xung điện áp bo mạch nguồn trước khi đóng gói giao cho khách hàng.
            </p>
            <div class="pt-3.5 border-t border-gray-100 flex items-center justify-between text-xs">
              <span class="font-bold text-[#1A9900] inline-flex items-center gap-1.5 group-hover:underline">
                <span>Xem video chi tiết</span>
                <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
              </span>
              <span class="text-gray-400 text-[11px] uppercase tracking-wider">Video Clip Thực Tế</span>
            </div>
          </div>
        </div>
        
      </div>

      <!-- Ready-to-fill slot notice -->
      <div class="mt-14 bg-gradient-to-r from-emerald-50 to-teal-50 border border-emerald-200/80 rounded-xl p-6 sm:p-8 flex flex-col md:flex-row items-center justify-between gap-6 shadow-xs">
        <div class="flex items-start gap-4">
          <div class="w-12 h-12 rounded-xl bg-[#1A9900] text-white flex items-center justify-center text-xl flex-shrink-0 shadow-md">
            <i class="fa-solid fa-cloud-arrow-up"></i>
          </div>
          <div>
            <h3 class="text-lg font-bold text-gray-900 mb-1">Khu Vực Tư Liệu Thực Tế Mới – Tự Động Đồng Bộ</h3>
            <p class="text-sm text-gray-600 leading-relaxed">Toàn bộ ảnh chụp thực tế kho máy, quy trình kỹ thuật PDI và công trình bàn giao khách hàng gửi sẽ được phân loại và hiển thị sắc nét tức thì tại thư mục này.</p>
          </div>
        </div>
        <a href="/nhan-tu-van/bao-gia/" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-6 py-3.5 rounded shadow-sm flex-shrink-0 transition inline-flex items-center gap-2">
          <span>Đăng Ký Khảo Sát Tận Nơi</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- Lightbox Modal -->
  <div id="gallery-lightbox" class="fixed inset-0 z-50 bg-black/90 backdrop-blur-md hidden opacity-0 transition-opacity duration-300 flex items-center justify-center p-4 sm:p-6" role="dialog" aria-modal="true" aria-hidden="true">
    <div class="relative max-w-5xl w-full max-h-[90vh] flex flex-col bg-[#12131c] border border-white/20 rounded-xl overflow-hidden shadow-2xl">
      <div class="flex items-center justify-between px-5 py-3 border-b border-white/10 bg-white/5">
        <div id="lightbox-badge" class="text-xs font-bold text-[#84e372] uppercase tracking-wider"></div>
        <button id="lightbox-close" class="text-gray-400 hover:text-white p-2 text-xl" aria-label="Đóng"><i class="fa-solid fa-xmark"></i></button>
      </div>
      <div class="relative flex-1 bg-black flex items-center justify-center overflow-hidden min-h-[300px] sm:min-h-[480px]">
        <img id="lightbox-img" src="" alt="" class="max-h-[70vh] w-auto max-w-full object-contain mx-auto" />
        <div id="lightbox-video-container" class="hidden w-full h-full min-h-[400px] flex items-center justify-center p-4"></div>
        <button id="lightbox-prev" class="absolute left-3 top-1/2 -translate-y-1/2 w-11 h-11 bg-white/15 hover:bg-white/30 text-white rounded-full flex items-center justify-center transition"><i class="fa-solid fa-chevron-left"></i></button>
        <button id="lightbox-next" class="absolute right-3 top-1/2 -translate-y-1/2 w-11 h-11 bg-white/15 hover:bg-white/30 text-white rounded-full flex items-center justify-center transition"><i class="fa-solid fa-chevron-right"></i></button>
      </div>
      <div class="px-6 py-4 bg-[#181924] border-t border-white/10">
        <h4 id="lightbox-title" class="text-base sm:text-lg font-bold text-white mb-1"></h4>
        <p id="lightbox-desc" class="text-xs sm:text-sm text-gray-300"></p>
        <div class="mt-2.5 flex items-center gap-4 text-[11.5px] text-gray-400">
          <span id="lightbox-location"><i class="fa-solid fa-location-dot text-[#1A9900] mr-1.5"></i><span></span></span>
          <span id="lightbox-date"><i class="fa-regular fa-calendar mr-1.5 text-[#1A9900]"></i><span></span></span>
        </div>
      </div>
    </div>
  </div>

  <script>
    let currentGalleryItems = [];
    let currentLightboxIndex = 0;

    document.addEventListener('DOMContentLoaded', function() {
      const tabs = document.querySelectorAll('#gallery-filter-tabs .gallery-filter-btn');
      const items = document.querySelectorAll('#gallery-items-grid .gallery-item');
      
      tabs.forEach(tab => {
        tab.addEventListener('click', function() {
          tabs.forEach(t => {
            t.classList.remove('bg-[' + '#1A9900' + ']', 'text-white', 'active', 'shadow-xs');
            t.classList.add('bg-gray-100', 'text-gray-700');
            const b = t.querySelector('.count-badge');
            if (b) {
              b.className = 'bg-gray-200 text-gray-700 text-[10.5px] px-1.5 py-0.2 rounded-full font-mono count-badge';
            }
          });
          this.classList.remove('bg-gray-100', 'text-gray-700');
          this.classList.add('bg-[' + '#1A9900' + ']', 'text-white', 'active', 'shadow-xs');
          const activeBadge = this.querySelector('.count-badge');
          if (activeBadge) {
            activeBadge.className = 'bg-white/20 text-white text-[10.5px] px-1.5 py-0.2 rounded-full font-mono count-badge';
          }

          const filter = this.getAttribute('data-filter');
          items.forEach(it => {
            if (filter === 'all' || it.getAttribute('data-category') === filter) {
              it.classList.remove('hidden');
            } else {
              it.classList.add('hidden');
            }
          });
        });
      });
    });

    function openLightbox(el) {
      const visibleItems = Array.from(document.querySelectorAll('#gallery-items-grid .gallery-item:not(.hidden)'));
      currentGalleryItems = visibleItems;
      currentLightboxIndex = visibleItems.indexOf(el);
      if (currentLightboxIndex < 0) currentLightboxIndex = 0;
      updateLightboxContent();

      const lb = document.getElementById('gallery-lightbox');
      lb.classList.remove('hidden');
      setTimeout(() => { lb.classList.remove('opacity-0'); }, 10);
      document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
      const lb = document.getElementById('gallery-lightbox');
      lb.classList.add('opacity-0');
      setTimeout(() => {
        lb.classList.add('hidden');
        document.body.style.overflow = '';
        const vBox = document.getElementById('lightbox-video-container');
        if (vBox) vBox.innerHTML = '';
      }, 250);
    }

    function updateLightboxContent() {
      if (!currentGalleryItems.length) return;
      const item = currentGalleryItems[currentLightboxIndex];
      if (!item) return;

      const imgUrl = item.getAttribute('data-img');
      const title = item.getAttribute('data-title');
      const desc = item.getAttribute('data-desc');
      const badge = item.getAttribute('data-badge');
      const loc = item.getAttribute('data-location');
      const dt = item.getAttribute('data-date');
      const type = item.getAttribute('data-type');

      document.getElementById('lightbox-badge').textContent = badge;
      document.getElementById('lightbox-title').textContent = title;
      document.getElementById('lightbox-desc').textContent = desc;
      document.getElementById('lightbox-location').querySelector('span').textContent = loc;
      document.getElementById('lightbox-date').querySelector('span').textContent = dt;

      const imgEl = document.getElementById('lightbox-img');
      const vidContainer = document.getElementById('lightbox-video-container');

      if (type === 'video') {
        imgEl.classList.add('hidden');
        vidContainer.classList.remove('hidden');
        vidContainer.innerHTML = `
          <div class="text-center p-8 bg-gray-900/90 rounded-xl border border-white/20 max-w-lg">
            <div class="w-16 h-16 rounded-full bg-red-600 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-xl">
              <i class="fa-solid fa-play ml-1"></i>
            </div>
            <h4 class="text-white font-bold text-lg mb-2">${title}</h4>
            <p class="text-gray-300 text-sm mb-5 leading-relaxed">${desc}</p>
            <div class="inline-flex items-center gap-2 bg-[#1A9900] text-white text-xs font-bold px-4 py-2 rounded">
              <i class="fa-solid fa-circle-check"></i>
              <span>Video thực tế lưu trữ tại Showroom Hương Sơn</span>
            </div>
          </div>
        `;
      } else {
        vidContainer.classList.add('hidden');
        vidContainer.innerHTML = '';
        imgEl.classList.remove('hidden');
        imgEl.src = imgUrl;
        imgEl.alt = title;
      }
    }

    document.addEventListener('keydown', function(e) {
      const lb = document.getElementById('gallery-lightbox');
      if (!lb || lb.classList.contains('hidden')) return;
      if (e.key === 'Escape') closeLightbox();
      if (e.key === 'ArrowLeft') {
        currentLightboxIndex = (currentLightboxIndex - 1 + currentGalleryItems.length) % currentGalleryItems.length;
        updateLightboxContent();
      }
      if (e.key === 'ArrowRight') {
        currentLightboxIndex = (currentLightboxIndex + 1) % currentGalleryItems.length;
        updateLightboxContent();
      }
    });

    document.getElementById('lightbox-close')?.addEventListener('click', closeLightbox);
    document.getElementById('gallery-lightbox')?.addEventListener('click', function(e) {
      if (e.target === this) closeLightbox();
    });
    document.getElementById('lightbox-prev')?.addEventListener('click', function(e) {
      e.stopPropagation();
      currentLightboxIndex = (currentLightboxIndex - 1 + currentGalleryItems.length) % currentGalleryItems.length;
      updateLightboxContent();
    });
    document.getElementById('lightbox-next')?.addEventListener('click', function(e) {
      e.stopPropagation();
      currentLightboxIndex = (currentLightboxIndex + 1) % currentGalleryItems.length;
      updateLightboxContent();
    });
  </script>

  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/banners/hero_office_solutions_1787899910391.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Kính mời Quý khách tham quan Showroom & Kho máy Hương Sơn tại Hà Nội</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Trực tiếp trải nghiệm và in thử trên các dòng máy in siêu tốc Duplo và máy photocopy Toshiba công suất lớn trước khi ký hợp đồng.</p>
      </div>
      <div class="flex flex-wrap items-center gap-4 flex-shrink-0">
        <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Yêu cầu báo giá nhanh</a>
        <a href="/du-an/" class="border border-gray-500 hover:border-[#1A9900] hover:text-[#1A9900] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem các dự án đã thực hiện</a>
        <a href="tel:0911138583" data-ga="click_hotline" class="text-white font-bold text-sm hover:text-[#1A9900] transition">
          <i class="fa-solid fa-phone text-[#1A9900] mr-2"></i>091.113.8583
        </a>
      </div>
    </div>
  </section>
@endsection
