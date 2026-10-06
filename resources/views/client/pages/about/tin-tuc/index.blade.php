@extends('client.layouts.app')

@section('title', "Tin Tức & Cẩm Nang Thiết Bị In Ấn, Số Hóa | Hương Sơn")
@section('meta_description', "Cập nhật tin tức dự án bàn giao thiết bị, cẩm nang in ấn đề thi, hướng dẫn chọn máy photocopy và số hóa tài liệu tại Hương Sơn.")
@section('canonical', "https://huongsonco.com.vn/ve-huong-son/tin-tuc/")
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
        "name": "Tin tức",
        "item": "https://huongsonco.com.vn/ve-huong-son/tin-tuc/"
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
          </a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <a href="/ve-huong-son/" class="text-gray-200 hover:text-white transition">Về Hương Sơn</a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <span class="text-[#84e372] font-semibold" aria-current="page">Tin tức</span>
        </nav>
      </div>

      <!-- 2-COLUMN SPLIT HERO SHOWCASE -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
        <!-- LEFT COLUMN: Content & Action (7 cols) -->
        <div class="lg:col-span-7 text-left">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.2em] text-[#5eb74c] mb-2.5">
            <span class="w-2 h-2 rounded-full bg-[#5eb74c] inline-block animate-pulse"></span>
            Tin tức &amp; Sự kiện
          </div>
          <h1 class="text-2xl sm:text-[34px] lg:text-[40px] font-extrabold text-white mb-3.5 leading-[1.35] tracking-normal drop-shadow-md">
            Tin tức – Dự án &amp; Cẩm nang chuyên môn
          </h1>
          <p class="text-gray-200 text-[14.5px] sm:text-base leading-relaxed mb-6 font-normal max-w-2xl">Cập nhật hoạt động triển khai thực tế, dự án bàn giao và các bài viết cẩm nang kỹ thuật chuyên sâu của Hương Sơn.</p>
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
                <img src="/assets/images/banners/hero_office_solutions_1787899910391.jpg" alt="Tin tức – Dự án &amp; Cẩm nang chuyên môn" class="max-h-[190px] sm:max-h-[220px] w-auto object-contain mx-auto drop-shadow-[0_15px_25px_rgba(0,0,0,0.6)] transform group-hover:scale-105 transition-transform duration-500" loading="eager" />
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
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8"><div class="flex items-center justify-between mb-4 flex-wrap gap-4"><div><span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-1">Chuyên đề chiến lược</span><h2 class="text-2xl sm:text-[32px] font-bold text-gray-900 leading-tight">Giải pháp thiết bị in ấn &amp; Chuyển đổi số toàn diện</h2></div><span class="text-xs text-gray-500 font-medium">Bám sát chiến lược &amp; Năng lực thực tế của Hương Sơn</span></div>
    <div class="flex flex-wrap items-center gap-2 mb-8" id="article-filter-tabs">
      <button type="button" class="filter-btn active bg-[#1A9900] text-white px-4 py-2 text-xs font-bold uppercase tracking-wider rounded-xs transition inline-flex items-center gap-1.5" data-filter="all">
        <span>Tất cả bài viết</span>
        <span class="bg-white/20 text-white text-[10px] px-1.5 py-0.2 rounded-full font-mono">15</span>
      </button>
      <button type="button" class="filter-btn bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 text-xs font-bold uppercase tracking-wider rounded-xs transition inline-flex items-center gap-1.5" data-filter="Giáo Dục & In Đề Thi">
        <span>Giáo Dục & In Đề Thi</span>
        <span class="bg-gray-200 text-gray-700 text-[10px] px-1.5 py-0.2 rounded-full font-mono">3</span>
      </button>
      <button type="button" class="filter-btn bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 text-xs font-bold uppercase tracking-wider rounded-xs transition inline-flex items-center gap-1.5" data-filter="Ngân Hàng & Bảo Mật">
        <span>Ngân Hàng & Bảo Mật</span>
        <span class="bg-gray-200 text-gray-700 text-[10px] px-1.5 py-0.2 rounded-full font-mono">3</span>
      </button>
      <button type="button" class="filter-btn bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 text-xs font-bold uppercase tracking-wider rounded-xs transition inline-flex items-center gap-1.5" data-filter="Chiến Lược & Dịch Vụ">
        <span>Chiến Lược & Dịch Vụ</span>
        <span class="bg-gray-200 text-gray-700 text-[10px] px-1.5 py-0.2 rounded-full font-mono">3</span>
      </button>
      <button type="button" class="filter-btn bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 text-xs font-bold uppercase tracking-wider rounded-xs transition inline-flex items-center gap-1.5" data-filter="Số Hóa & OCR">
        <span>Số Hóa & OCR</span>
        <span class="bg-gray-200 text-gray-700 text-[10px] px-1.5 py-0.2 rounded-full font-mono">3</span>
      </button>
      <button type="button" class="filter-btn bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 text-xs font-bold uppercase tracking-wider rounded-xs transition inline-flex items-center gap-1.5" data-filter="Hoàn Thiện Sau In">
        <span>Hoàn Thiện Sau In</span>
        <span class="bg-gray-200 text-gray-700 text-[10px] px-1.5 py-0.2 rounded-full font-mono">3</span>
      </button>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
      const btns = document.querySelectorAll('#article-filter-tabs .filter-btn');
      const cards = document.querySelectorAll('#strategic-articles-grid article');
      btns.forEach(btn => {
        btn.addEventListener('click', function() {
          btns.forEach(b => {
            b.classList.remove('bg-[' + '#1A9900' + ']', 'text-white', 'active');
            b.classList.add('bg-gray-100', 'text-gray-700');
            const bBadge = b.querySelector('span:last-child');
            if (bBadge) {
              bBadge.className = 'bg-gray-200 text-gray-700 text-[10px] px-1.5 py-0.2 rounded-full font-mono';
            }
          });
          this.classList.remove('bg-gray-100', 'text-gray-700');
          this.classList.add('bg-[' + '#1A9900' + ']', 'text-white', 'active');
          const badge = this.querySelector('span:last-child');
          if (badge) {
            badge.className = 'bg-white/20 text-white text-[10px] px-1.5 py-0.2 rounded-full font-mono';
          }
          const filter = this.getAttribute('data-filter');
          cards.forEach(c => {
            const cat = c.getAttribute('data-category');
            if (filter === 'all' || cat === filter) {
              c.style.display = '';
            } else {
              c.style.display = 'none';
            }
          });
        });
      });
    });
    </script>
    <div id="strategic-articles-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
        <article class="border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-lg transition-all duration-300" data-category="Giáo Dục & In Đề Thi">
          <div class="h-56 overflow-hidden relative">
            <img src="/assets/images/proof/in-sao-de-thi-duplo.jpg" alt="Giải Pháp Máy In Nhân Bản Siêu Tốc Duplo In Sao Đề Thi THPT &amp; Tuyển Sinh Cho Các Sở GD&amp;ĐT" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md">
              Giáo Dục & In Đề Thi
            </div>
            <div class="absolute bottom-3 right-3 bg-black/70 backdrop-blur-xs text-white text-[10.5px] font-medium px-2.5 py-0.5 rounded">
              <i class="fa-regular fa-clock mr-1 text-[#5eb74c]"></i>12 phút đọc
            </div>
          </div>
          <div class="p-6 flex flex-col flex-1">
            <div class="flex items-center gap-2 text-xs text-gray-500 mb-2">
              <i class="fa-solid fa-calendar-days text-[#1A9900]"></i>
              <span>2026-10-06</span>
              <span class="text-gray-300">•</span>
              <span class="font-medium text-gray-600">Hương Sơn</span>
            </div>
            <h3 class="text-[17px] sm:text-[18px] font-bold text-[#181923] mb-3 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              <a href="/ve-huong-son/tin-tuc/giai-phap-may-in-sieu-toc-duplo-in-sao-de-thi-thpt-so-gddt/">Giải Pháp Máy In Nhân Bản Siêu Tốc Duplo In Sao Đề Thi THPT &amp; Tuyển Sinh Cho Các Sở GD&amp;ĐT</a>
            </h3>
            <p class="text-gray-600 text-[14px] leading-relaxed mb-5 flex-1 line-clamp-3">
              Giải pháp toàn diện ứng dụng máy in nhân bản siêu tốc Duplo (Nhật Bản) trong công tác in sao đề thi tốt nghiệp THPT và tuyển sinh lớp 10 tại các Sở GD&amp;ĐT: đáp ứng nghiêm ngặt quy chế cách ly 3 vòng, tốc độ 150–180 bản/phút, cơ chế in rulo lạnh không sinh nhiệt, loại bỏ nguy cơ kẹt giấy kèm phương án máy dự phòng N+1.
            </p>
            <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
              <a href="/ve-huong-son/tin-tuc/giai-phap-may-in-sieu-toc-duplo-in-sao-de-thi-thpt-so-gddt/" class="inline-flex items-center space-x-1.5 text-[#1A9900] font-bold text-xs uppercase tracking-wider group-hover:underline">
                <span>Đọc bài viết</span>
                <i class="fa-solid fa-arrow-right text-[11px]"></i>
              </a>
              <span class="text-xs text-gray-400 font-medium">Chi tiết giải pháp</span>
            </div>
          </div>
        </article>
        
        <article class="border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-lg transition-all duration-300" data-category="Ngân Hàng & Bảo Mật">
          <div class="h-56 overflow-hidden relative">
            <img src="/assets/images/proof/ban-giao-vietcombank.jpg" alt="Giải Pháp Cho Thuê Máy Photocopy &amp; Quản Lý In Ấn Bảo Mật Toàn Diện Cho Hệ Thống Ngân Hàng" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md">
              Ngân Hàng & Bảo Mật
            </div>
            <div class="absolute bottom-3 right-3 bg-black/70 backdrop-blur-xs text-white text-[10.5px] font-medium px-2.5 py-0.5 rounded">
              <i class="fa-regular fa-clock mr-1 text-[#5eb74c]"></i>11 phút đọc
            </div>
          </div>
          <div class="p-6 flex flex-col flex-1">
            <div class="flex items-center gap-2 text-xs text-gray-500 mb-2">
              <i class="fa-solid fa-calendar-days text-[#1A9900]"></i>
              <span>2026-10-06</span>
              <span class="text-gray-300">•</span>
              <span class="font-medium text-gray-600">Hương Sơn</span>
            </div>
            <h3 class="text-[17px] sm:text-[18px] font-bold text-[#181923] mb-3 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              <a href="/ve-huong-son/tin-tuc/giai-phap-cho-thue-may-photocopy-bao-mat-ngan-hang-doanh-nghiep/">Giải Pháp Cho Thuê Máy Photocopy &amp; Quản Lý In Ấn Bảo Mật Toàn Diện Cho Hệ Thống Ngân Hàng</a>
            </h3>
            <p class="text-gray-600 text-[14px] leading-relaxed mb-5 flex-1 line-clamp-3">
              Giải pháp cho thuê máy photocopy đa chức năng Toshiba và Ricoh đáp ứng các tiêu chuẩn bảo mật dữ liệu tài chính khắt khe nhất của hệ thống ngân hàng: mã hóa ổ cứng SED 256-bit AES, xóa dữ liệu tự động Data Overwrite Security, in phân quyền xác thực thẻ từ RFID và cam kết phản ứng kỹ thuật SLA có mặt trong 2 giờ.
            </p>
            <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
              <a href="/ve-huong-son/tin-tuc/giai-phap-cho-thue-may-photocopy-bao-mat-ngan-hang-doanh-nghiep/" class="inline-flex items-center space-x-1.5 text-[#1A9900] font-bold text-xs uppercase tracking-wider group-hover:underline">
                <span>Đọc bài viết</span>
                <i class="fa-solid fa-arrow-right text-[11px]"></i>
              </a>
              <span class="text-xs text-gray-400 font-medium">Chi tiết giải pháp</span>
            </div>
          </div>
        </article>
        
        <article class="border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-lg transition-all duration-300" data-category="Chiến Lược & Dịch Vụ">
          <div class="h-56 overflow-hidden relative">
            <img src="/assets/images/proof/kho-thiet-bi-huong-son.jpg" alt="Chiến Lược Chuyển Dịch Từ "Bán Máy Truyền Thống" Sang "Cho Thuê Kèm Giải Pháp &amp; Dịch Vụ" – Khác Biệt Hóa Thời Kỳ Thế Giới Phẳng" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md">
              Chiến Lược & Dịch Vụ
            </div>
            <div class="absolute bottom-3 right-3 bg-black/70 backdrop-blur-xs text-white text-[10.5px] font-medium px-2.5 py-0.5 rounded">
              <i class="fa-regular fa-clock mr-1 text-[#5eb74c]"></i>12 phút đọc
            </div>
          </div>
          <div class="p-6 flex flex-col flex-1">
            <div class="flex items-center gap-2 text-xs text-gray-500 mb-2">
              <i class="fa-solid fa-calendar-days text-[#1A9900]"></i>
              <span>2026-10-06</span>
              <span class="text-gray-300">•</span>
              <span class="font-medium text-gray-600">Hương Sơn</span>
            </div>
            <h3 class="text-[17px] sm:text-[18px] font-bold text-[#181923] mb-3 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              <a href="/ve-huong-son/tin-tuc/chuyen-dich-mo-hinh-tu-ban-may-sang-cho-thue-va-dich-vu-tron-goi/">Chiến Lược Chuyển Dịch Từ "Bán Máy Truyền Thống" Sang "Cho Thuê Kèm Giải Pháp &amp; Dịch Vụ" – Khác Biệt Hóa Thời Kỳ Thế Giới Phẳng</a>
            </h3>
            <p class="text-gray-600 text-[14px] leading-relaxed mb-5 flex-1 line-clamp-3">
              Trong một 'thế giới phẳng' nơi giá bán phần cứng máy photocopy ngày càng bão hòa, Công ty Hương Sơn tạo lập lợi thế cạnh tranh bền vững bằng chiến lược dịch chuyển sang mô hình Cho thuê trọn gói kèm Giải pháp chuyển đổi số và Dịch vụ đồng hành: Khách hàng chỉ chi trả cho hiệu quả bản in, 0đ vốn đầu tư, 0đ rủi ro kỹ thuật.
            </p>
            <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
              <a href="/ve-huong-son/tin-tuc/chuyen-dich-mo-hinh-tu-ban-may-sang-cho-thue-va-dich-vu-tron-goi/" class="inline-flex items-center space-x-1.5 text-[#1A9900] font-bold text-xs uppercase tracking-wider group-hover:underline">
                <span>Đọc bài viết</span>
                <i class="fa-solid fa-arrow-right text-[11px]"></i>
              </a>
              <span class="text-xs text-gray-400 font-medium">Chi tiết giải pháp</span>
            </div>
          </div>
        </article>
        
        <article class="border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-lg transition-all duration-300" data-category="Số Hóa & OCR">
          <div class="h-56 overflow-hidden relative">
            <img src="/assets/images/banners/highspeed_scanner_1787905830483.jpg" alt="Quy Trình Số Hóa Hồ Sơ Tài Liệu Theo Thông Tư 02/2019/TT-BNV &amp; Học Bạ Điện Tử Chuẩn MOET" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md">
              Số Hóa & OCR
            </div>
            <div class="absolute bottom-3 right-3 bg-black/70 backdrop-blur-xs text-white text-[10.5px] font-medium px-2.5 py-0.5 rounded">
              <i class="fa-regular fa-clock mr-1 text-[#5eb74c]"></i>10 phút đọc
            </div>
          </div>
          <div class="p-6 flex flex-col flex-1">
            <div class="flex items-center gap-2 text-xs text-gray-500 mb-2">
              <i class="fa-solid fa-calendar-days text-[#1A9900]"></i>
              <span>2026-10-06</span>
              <span class="text-gray-300">•</span>
              <span class="font-medium text-gray-600">Hương Sơn</span>
            </div>
            <h3 class="text-[17px] sm:text-[18px] font-bold text-[#181923] mb-3 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              <a href="/ve-huong-son/tin-tuc/quy-trinh-so-hoa-tai-lieu-thong-tu-02-va-hoc-ba-dien-tu-moet/">Quy Trình Số Hóa Hồ Sơ Tài Liệu Theo Thông Tư 02/2019/TT-BNV &amp; Học Bạ Điện Tử Chuẩn MOET</a>
            </h3>
            <p class="text-gray-600 text-[14px] leading-relaxed mb-5 flex-1 line-clamp-3">
              Hướng dẫn chi tiết quy trình 6 bước số hóa hồ sơ tài liệu lưu trữ vĩnh viễn theo Thông tư 02/2019/TT-BNV của Bộ Nội Vụ và học bạ điện tử trường học chuẩn Bộ GD&amp;ĐT: tiêu chuẩn kỹ thuật máy scan tốc độ cao Ricoh fi-8170, độ phân giải 300–400 DPI, chuẩn định dạng PDF/A-1a và công nghệ bóc tách dữ liệu OCR tiếng Việt.
            </p>
            <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
              <a href="/ve-huong-son/tin-tuc/quy-trinh-so-hoa-tai-lieu-thong-tu-02-va-hoc-ba-dien-tu-moet/" class="inline-flex items-center space-x-1.5 text-[#1A9900] font-bold text-xs uppercase tracking-wider group-hover:underline">
                <span>Đọc bài viết</span>
                <i class="fa-solid fa-arrow-right text-[11px]"></i>
              </a>
              <span class="text-xs text-gray-400 font-medium">Chi tiết giải pháp</span>
            </div>
          </div>
        </article>
        
        <article class="border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-lg transition-all duration-300" data-category="Hoàn Thiện Sau In">
          <div class="h-56 overflow-hidden relative">
            <img src="/assets/images/products/duplo-dfc-122.jpg" alt="Giải Pháp Máy Phối Trang, Gập Ghim Tự Động Duplo DFC: Tối Ưu 80% Thời Gian Đóng Tập Đề Thi &amp; Tài Liệu" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md">
              Hoàn Thiện Sau In
            </div>
            <div class="absolute bottom-3 right-3 bg-black/70 backdrop-blur-xs text-white text-[10.5px] font-medium px-2.5 py-0.5 rounded">
              <i class="fa-regular fa-clock mr-1 text-[#5eb74c]"></i>10 phút đọc
            </div>
          </div>
          <div class="p-6 flex flex-col flex-1">
            <div class="flex items-center gap-2 text-xs text-gray-500 mb-2">
              <i class="fa-solid fa-calendar-days text-[#1A9900]"></i>
              <span>2026-10-06</span>
              <span class="text-gray-300">•</span>
              <span class="font-medium text-gray-600">Hương Sơn</span>
            </div>
            <h3 class="text-[17px] sm:text-[18px] font-bold text-[#181923] mb-3 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              <a href="/ve-huong-son/tin-tuc/giai-phap-may-phoi-trang-gap-ghim-tu-dong-duplo-dfc-hoan-thien-sau-in/">Giải Pháp Máy Phối Trang, Gập Ghim Tự Động Duplo DFC: Tối Ưu 80% Thời Gian Đóng Tập Đề Thi &amp; Tài Liệu</a>
            </h3>
            <p class="text-gray-600 text-[14px] leading-relaxed mb-5 flex-1 line-clamp-3">
              Giải pháp máy phối trang và dập ghim tự động liên hoàn Duplo DFC Series (Nhật Bản): Giải quyết triệt để nút thắt cổ chai sau in ấn, tự động chia trang, gấp đôi và đóng tập đề thi, tài liệu hội nghị với tốc độ lên đến 4.200 bộ/giờ, trang bị cảm biến phát hiện đúp tờ và sót trang tuyệt đối chính xác.
            </p>
            <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
              <a href="/ve-huong-son/tin-tuc/giai-phap-may-phoi-trang-gap-ghim-tu-dong-duplo-dfc-hoan-thien-sau-in/" class="inline-flex items-center space-x-1.5 text-[#1A9900] font-bold text-xs uppercase tracking-wider group-hover:underline">
                <span>Đọc bài viết</span>
                <i class="fa-solid fa-arrow-right text-[11px]"></i>
              </a>
              <span class="text-xs text-gray-400 font-medium">Chi tiết giải pháp</span>
            </div>
          </div>
        </article>
        
        <article class="border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-lg transition-all duration-300" data-category="Giáo Dục & In Đề Thi">
          <div class="h-56 overflow-hidden relative">
            <img src="/assets/images/hero-education.jpg" alt="Tiêu Chuẩn Kỹ Thuật Khu Vực In Sao Đề Thi Cách Ly 3 Vòng &amp; Phương Án Dự Phòng N+1 Tại Các Sở GD&amp;ĐT" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md">
              Giáo Dục & In Đề Thi
            </div>
            <div class="absolute bottom-3 right-3 bg-black/70 backdrop-blur-xs text-white text-[10.5px] font-medium px-2.5 py-0.5 rounded">
              <i class="fa-regular fa-clock mr-1 text-[#5eb74c]"></i>14 phút đọc
            </div>
          </div>
          <div class="p-6 flex flex-col flex-1">
            <div class="flex items-center gap-2 text-xs text-gray-500 mb-2">
              <i class="fa-solid fa-calendar-days text-[#1A9900]"></i>
              <span>2026-10-06</span>
              <span class="text-gray-300">•</span>
              <span class="font-medium text-gray-600">Hương Sơn</span>
            </div>
            <h3 class="text-[17px] sm:text-[18px] font-bold text-[#181923] mb-3 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              <a href="/ve-huong-son/tin-tuc/tieu-chuan-khu-vuc-in-sao-de-thi-cach-ly-3-vong-va-du-phong-n-1/">Tiêu Chuẩn Kỹ Thuật Khu Vực In Sao Đề Thi Cách Ly 3 Vòng &amp; Phương Án Dự Phòng N+1 Tại Các Sở GD&amp;ĐT</a>
            </h3>
            <p class="text-gray-600 text-[14px] leading-relaxed mb-5 flex-1 line-clamp-3">
              Phân tích toàn diện tiêu chuẩn hạ tầng, an ninh thông tin và quy chuẩn vận hành khu vực in sao đề thi biệt lập 3 vòng theo quy chế Bộ GD&amp;ĐT: phương án cấp nguồn điện 3 pha UPS, cơ chế ép lạnh không tĩnh điện chống dính giấy kép và cấu hình máy in dự phòng nóng N+1 sẵn sàng ứng cứu sự cố trong 15 phút.
            </p>
            <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
              <a href="/ve-huong-son/tin-tuc/tieu-chuan-khu-vuc-in-sao-de-thi-cach-ly-3-vong-va-du-phong-n-1/" class="inline-flex items-center space-x-1.5 text-[#1A9900] font-bold text-xs uppercase tracking-wider group-hover:underline">
                <span>Đọc bài viết</span>
                <i class="fa-solid fa-arrow-right text-[11px]"></i>
              </a>
              <span class="text-xs text-gray-400 font-medium">Chi tiết giải pháp</span>
            </div>
          </div>
        </article>
        
        <article class="border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-lg transition-all duration-300" data-category="Giáo Dục & In Đề Thi">
          <div class="h-56 overflow-hidden relative">
            <img src="/assets/images/products/95-bang-tra-ma-muc-master-may-in-duplo.jpg" alt="Cẩm Nang Tính Định Mức Mực In, Cuộn Master &amp; Giấy In Sao Đề Thi Tuyển Sinh Và Tốt Nghiệp THPT" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md">
              Giáo Dục & In Đề Thi
            </div>
            <div class="absolute bottom-3 right-3 bg-black/70 backdrop-blur-xs text-white text-[10.5px] font-medium px-2.5 py-0.5 rounded">
              <i class="fa-regular fa-clock mr-1 text-[#5eb74c]"></i>12 phút đọc
            </div>
          </div>
          <div class="p-6 flex flex-col flex-1">
            <div class="flex items-center gap-2 text-xs text-gray-500 mb-2">
              <i class="fa-solid fa-calendar-days text-[#1A9900]"></i>
              <span>2026-10-06</span>
              <span class="text-gray-300">•</span>
              <span class="font-medium text-gray-600">Hương Sơn</span>
            </div>
            <h3 class="text-[17px] sm:text-[18px] font-bold text-[#181923] mb-3 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              <a href="/ve-huong-son/tin-tuc/dinh-muc-vat-tu-muc-in-cuon-master-va-giay-in-de-thi-thpt/">Cẩm Nang Tính Định Mức Mực In, Cuộn Master &amp; Giấy In Sao Đề Thi Tuyển Sinh Và Tốt Nghiệp THPT</a>
            </h3>
            <p class="text-gray-600 text-[14px] leading-relaxed mb-5 flex-1 line-clamp-3">
              Hướng dẫn chi tiết công thức tính toán dự toán vật tư tiêu hao cho hội đồng in sao đề thi THPT cấp tỉnh: phương pháp tính số cuộn master nhiệt, số lượng bình mực 1.000ml theo độ phủ trắc nghiệm 8–12%, tiêu chuẩn chọn giấy Bãi Bằng 70gsm chống kẹt giấy và bảng dự toán mẫu cho hội đồng 20.000 thí sinh.
            </p>
            <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
              <a href="/ve-huong-son/tin-tuc/dinh-muc-vat-tu-muc-in-cuon-master-va-giay-in-de-thi-thpt/" class="inline-flex items-center space-x-1.5 text-[#1A9900] font-bold text-xs uppercase tracking-wider group-hover:underline">
                <span>Đọc bài viết</span>
                <i class="fa-solid fa-arrow-right text-[11px]"></i>
              </a>
              <span class="text-xs text-gray-400 font-medium">Chi tiết giải pháp</span>
            </div>
          </div>
        </article>
        
        <article class="border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-lg transition-all duration-300" data-category="Ngân Hàng & Bảo Mật">
          <div class="h-56 overflow-hidden relative">
            <img src="/assets/images/products/vietcombank-2024.jpg" alt="Giải Pháp Quản Trị In Ấn Tập Trung &amp; Bảo Mật Xác Thực Thẻ RFID/PIN Chống Thất Thoát Dữ Liệu Ngân Hàng" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md">
              Ngân Hàng & Bảo Mật
            </div>
            <div class="absolute bottom-3 right-3 bg-black/70 backdrop-blur-xs text-white text-[10.5px] font-medium px-2.5 py-0.5 rounded">
              <i class="fa-regular fa-clock mr-1 text-[#5eb74c]"></i>13 phút đọc
            </div>
          </div>
          <div class="p-6 flex flex-col flex-1">
            <div class="flex items-center gap-2 text-xs text-gray-500 mb-2">
              <i class="fa-solid fa-calendar-days text-[#1A9900]"></i>
              <span>2026-10-06</span>
              <span class="text-gray-300">•</span>
              <span class="font-medium text-gray-600">Hương Sơn</span>
            </div>
            <h3 class="text-[17px] sm:text-[18px] font-bold text-[#181923] mb-3 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              <a href="/ve-huong-son/tin-tuc/bao-mat-in-an-xac-thuc-the-rfid-va-chong-that-thoat-du-lieu-ngan-hang/">Giải Pháp Quản Trị In Ấn Tập Trung &amp; Bảo Mật Xác Thực Thẻ RFID/PIN Chống Thất Thoát Dữ Liệu Ngân Hàng</a>
            </h3>
            <p class="text-gray-600 text-[14px] leading-relaxed mb-5 flex-1 line-clamp-3">
              Phân tích giải pháp bảo mật in ấn cấp độ ngân hàng: khắc phục điểm mù rò rỉ dữ liệu tại khay giấy máy photocopy, cơ chế in an toàn Follow-Me Printing qua thẻ từ RFID Mifare, tự động in chìm dấu vân tay số Watermark và lưu trữ Image Log phục vụ điều tra gian lận tài chính.
            </p>
            <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
              <a href="/ve-huong-son/tin-tuc/bao-mat-in-an-xac-thuc-the-rfid-va-chong-that-thoat-du-lieu-ngan-hang/" class="inline-flex items-center space-x-1.5 text-[#1A9900] font-bold text-xs uppercase tracking-wider group-hover:underline">
                <span>Đọc bài viết</span>
                <i class="fa-solid fa-arrow-right text-[11px]"></i>
              </a>
              <span class="text-xs text-gray-400 font-medium">Chi tiết giải pháp</span>
            </div>
          </div>
        </article>
        
        <article class="border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-lg transition-all duration-300" data-category="Ngân Hàng & Bảo Mật">
          <div class="h-56 overflow-hidden relative">
            <img src="/assets/images/banners/hero_office_solutions_1787899910391.jpg" alt="Mô Hình Managed Print Services (MPS) Cho Chuỗi Chi Nhánh Ngân Hàng &amp; Tập Đoàn Tài Chính Đa Điểm" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md">
              Ngân Hàng & Bảo Mật
            </div>
            <div class="absolute bottom-3 right-3 bg-black/70 backdrop-blur-xs text-white text-[10.5px] font-medium px-2.5 py-0.5 rounded">
              <i class="fa-regular fa-clock mr-1 text-[#5eb74c]"></i>12 phút đọc
            </div>
          </div>
          <div class="p-6 flex flex-col flex-1">
            <div class="flex items-center gap-2 text-xs text-gray-500 mb-2">
              <i class="fa-solid fa-calendar-days text-[#1A9900]"></i>
              <span>2026-10-06</span>
              <span class="text-gray-300">•</span>
              <span class="font-medium text-gray-600">Hương Sơn</span>
            </div>
            <h3 class="text-[17px] sm:text-[18px] font-bold text-[#181923] mb-3 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              <a href="/ve-huong-son/tin-tuc/dich-vu-quan-ly-in-an-mps-cho-chuoi-chi-nhanh-ngan-hang-tai-chinh/">Mô Hình Managed Print Services (MPS) Cho Chuỗi Chi Nhánh Ngân Hàng &amp; Tập Đoàn Tài Chính Đa Điểm</a>
            </h3>
            <p class="text-gray-600 text-[14px] leading-relaxed mb-5 flex-1 line-clamp-3">
              Giải pháp dịch vụ quản lý in ấn toàn diện Managed Print Services (MPS) chuyên biệt cho hệ thống ngân hàng thương mại: giám sát từ xa hàng trăm thiết bị qua giao thức SNMP an toàn, tự động điều phối vật tư mực in trước khi cạn kiệt, kiểm soát hạn ngạch in theo phòng ban và cắt giảm 25% – 35% chi phí vận hành hàng năm.
            </p>
            <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
              <a href="/ve-huong-son/tin-tuc/dich-vu-quan-ly-in-an-mps-cho-chuoi-chi-nhanh-ngan-hang-tai-chinh/" class="inline-flex items-center space-x-1.5 text-[#1A9900] font-bold text-xs uppercase tracking-wider group-hover:underline">
                <span>Đọc bài viết</span>
                <i class="fa-solid fa-arrow-right text-[11px]"></i>
              </a>
              <span class="text-xs text-gray-400 font-medium">Chi tiết giải pháp</span>
            </div>
          </div>
        </article>
        
        <article class="border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-lg transition-all duration-300" data-category="Chiến Lược & Dịch Vụ">
          <div class="h-56 overflow-hidden relative">
            <img src="/assets/images/hero-office.jpg" alt="Nên Thuê Hay Mua Máy Photocopy? Phân Tích Bài Toán Dòng Tiền, Khấu Hao &amp; Tối Ưu Thuế Doanh Nghiệp 2026" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md">
              Chiến Lược & Dịch Vụ
            </div>
            <div class="absolute bottom-3 right-3 bg-black/70 backdrop-blur-xs text-white text-[10.5px] font-medium px-2.5 py-0.5 rounded">
              <i class="fa-regular fa-clock mr-1 text-[#5eb74c]"></i>13 phút đọc
            </div>
          </div>
          <div class="p-6 flex flex-col flex-1">
            <div class="flex items-center gap-2 text-xs text-gray-500 mb-2">
              <i class="fa-solid fa-calendar-days text-[#1A9900]"></i>
              <span>2026-10-06</span>
              <span class="text-gray-300">•</span>
              <span class="font-medium text-gray-600">Hương Sơn</span>
            </div>
            <h3 class="text-[17px] sm:text-[18px] font-bold text-[#181923] mb-3 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              <a href="/ve-huong-son/tin-tuc/so-sanh-thue-va-mua-may-photocopy-bai-toan-tai-chinh-doanh-nghiep/">Nên Thuê Hay Mua Máy Photocopy? Phân Tích Bài Toán Dòng Tiền, Khấu Hao &amp; Tối Ưu Thuế Doanh Nghiệp 2026</a>
            </h3>
            <p class="text-gray-600 text-[14px] leading-relaxed mb-5 flex-1 line-clamp-3">
              So sánh toàn diện giữa mô hình mua đứt máy photocopy truyền thống và giải pháp thuê máy trọn gói hiện đại dưới góc độ giám đốc tài chính CFO: phân tích bài toán dòng tiền 3 năm, tối ưu hóa thuế thu nhập doanh nghiệp, loại bỏ rủi ro chi phí chìm sửa chữa và bảo vệ nguồn vốn lưu động của doanh nghiệp.
            </p>
            <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
              <a href="/ve-huong-son/tin-tuc/so-sanh-thue-va-mua-may-photocopy-bai-toan-tai-chinh-doanh-nghiep/" class="inline-flex items-center space-x-1.5 text-[#1A9900] font-bold text-xs uppercase tracking-wider group-hover:underline">
                <span>Đọc bài viết</span>
                <i class="fa-solid fa-arrow-right text-[11px]"></i>
              </a>
              <span class="text-xs text-gray-400 font-medium">Chi tiết giải pháp</span>
            </div>
          </div>
        </article>
        
        <article class="border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-lg transition-all duration-300" data-category="Chiến Lược & Dịch Vụ">
          <div class="h-56 overflow-hidden relative">
            <img src="/assets/images/proof/doi-ngu-ky-thuat-pdi.jpg" alt="Quy Trình Bảo Trì Ngăn Ngừa (Preventive Maintenance) &amp; Cam Kết SLA Kỹ Thuật ≤ 2 Giờ Của Hương Sơn" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md">
              Chiến Lược & Dịch Vụ
            </div>
            <div class="absolute bottom-3 right-3 bg-black/70 backdrop-blur-xs text-white text-[10.5px] font-medium px-2.5 py-0.5 rounded">
              <i class="fa-regular fa-clock mr-1 text-[#5eb74c]"></i>11 phút đọc
            </div>
          </div>
          <div class="p-6 flex flex-col flex-1">
            <div class="flex items-center gap-2 text-xs text-gray-500 mb-2">
              <i class="fa-solid fa-calendar-days text-[#1A9900]"></i>
              <span>2026-10-06</span>
              <span class="text-gray-300">•</span>
              <span class="font-medium text-gray-600">Hương Sơn</span>
            </div>
            <h3 class="text-[17px] sm:text-[18px] font-bold text-[#181923] mb-3 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              <a href="/ve-huong-son/tin-tuc/quy-trinh-bao-tri-ngan-ngua-va-cam-ket-sla-ky-thuat-duoi-2-gio/">Quy Trình Bảo Trì Ngăn Ngừa (Preventive Maintenance) &amp; Cam Kết SLA Kỹ Thuật ≤ 2 Giờ Của Hương Sơn</a>
            </h3>
            <p class="text-gray-600 text-[14px] leading-relaxed mb-5 flex-1 line-clamp-3">
              Phân tích quy trình 12 bước bảo trì ngăn ngừa định kỳ hàng tháng cho máy photocopy và máy in siêu tốc: làm sạch gương quét quang học, bôi trơn bạc ép sấy chịu nhiệt, căn chỉnh điện áp sạc drum và cơ chế điều động kỹ sư theo vùng địa lý đảm bảo SLA có mặt tại hiện trường trong ≤ 2 giờ.
            </p>
            <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
              <a href="/ve-huong-son/tin-tuc/quy-trinh-bao-tri-ngan-ngua-va-cam-ket-sla-ky-thuat-duoi-2-gio/" class="inline-flex items-center space-x-1.5 text-[#1A9900] font-bold text-xs uppercase tracking-wider group-hover:underline">
                <span>Đọc bài viết</span>
                <i class="fa-solid fa-arrow-right text-[11px]"></i>
              </a>
              <span class="text-xs text-gray-400 font-medium">Chi tiết giải pháp</span>
            </div>
          </div>
        </article>
        
        <article class="border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-lg transition-all duration-300" data-category="Số Hóa & OCR">
          <div class="h-56 overflow-hidden relative">
            <img src="/assets/images/products/ricoh-fi-7700.jpg" alt="Giải Pháp Số Hóa Hồ Sơ Địa Chính, Đất Đai &amp; Tư Pháp Công Chứng Chuẩn Quy Chuẩn Lưu Trữ Quốc Gia" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md">
              Số Hóa & OCR
            </div>
            <div class="absolute bottom-3 right-3 bg-black/70 backdrop-blur-xs text-white text-[10.5px] font-medium px-2.5 py-0.5 rounded">
              <i class="fa-regular fa-clock mr-1 text-[#5eb74c]"></i>14 phút đọc
            </div>
          </div>
          <div class="p-6 flex flex-col flex-1">
            <div class="flex items-center gap-2 text-xs text-gray-500 mb-2">
              <i class="fa-solid fa-calendar-days text-[#1A9900]"></i>
              <span>2026-10-06</span>
              <span class="text-gray-300">•</span>
              <span class="font-medium text-gray-600">Hương Sơn</span>
            </div>
            <h3 class="text-[17px] sm:text-[18px] font-bold text-[#181923] mb-3 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              <a href="/ve-huong-son/tin-tuc/so-hoa-ho-so-dia-chinh-dat-dai-va-tu-phap-cong-chung-chuan-quoc-gia/">Giải Pháp Số Hóa Hồ Sơ Địa Chính, Đất Đai &amp; Tư Pháp Công Chứng Chuẩn Quy Chuẩn Lưu Trữ Quốc Gia</a>
            </h3>
            <p class="text-gray-600 text-[14px] leading-relaxed mb-5 flex-1 line-clamp-3">
              Giải pháp toàn diện số hóa hồ sơ quản lý đất đai, trích lục bản đồ địa chính và hồ sơ công chứng tư pháp đáp ứng nghiêm ngặt quy chuẩn lưu trữ quốc gia: kỹ thuật xử lý tài liệu giấy cũ ố rách, công nghệ máy quét lai ADF + Flatbed Ricoh fi-7700 và chuẩn đóng gói dữ liệu PDF/A-1a tích hợp siêu dữ liệu XML phục vụ đồng bộ CSDL đất đai quốc gia.
            </p>
            <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
              <a href="/ve-huong-son/tin-tuc/so-hoa-ho-so-dia-chinh-dat-dai-va-tu-phap-cong-chung-chuan-quoc-gia/" class="inline-flex items-center space-x-1.5 text-[#1A9900] font-bold text-xs uppercase tracking-wider group-hover:underline">
                <span>Đọc bài viết</span>
                <i class="fa-solid fa-arrow-right text-[11px]"></i>
              </a>
              <span class="text-xs text-gray-400 font-medium">Chi tiết giải pháp</span>
            </div>
          </div>
        </article>
        
        <article class="border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-lg transition-all duration-300" data-category="Số Hóa & OCR">
          <div class="h-56 overflow-hidden relative">
            <img src="/assets/images/products/ricoh-fi-8170.png" alt="Đánh Giá Dòng Máy Scan Chuyên Dụng Ricoh fi-Series &amp; Giải Pháp Nhận Dạng Ký Tự Quang Học OCR Tiếng Việt Chính Xác 99%" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md">
              Số Hóa & OCR
            </div>
            <div class="absolute bottom-3 right-3 bg-black/70 backdrop-blur-xs text-white text-[10.5px] font-medium px-2.5 py-0.5 rounded">
              <i class="fa-regular fa-clock mr-1 text-[#5eb74c]"></i>13 phút đọc
            </div>
          </div>
          <div class="p-6 flex flex-col flex-1">
            <div class="flex items-center gap-2 text-xs text-gray-500 mb-2">
              <i class="fa-solid fa-calendar-days text-[#1A9900]"></i>
              <span>2026-10-06</span>
              <span class="text-gray-300">•</span>
              <span class="font-medium text-gray-600">Hương Sơn</span>
            </div>
            <h3 class="text-[17px] sm:text-[18px] font-bold text-[#181923] mb-3 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              <a href="/ve-huong-son/tin-tuc/danh-gia-may-scan-ricoh-fi-series-va-cong-nghe-ocr-tieng-viet/">Đánh Giá Dòng Máy Scan Chuyên Dụng Ricoh fi-Series &amp; Giải Pháp Nhận Dạng Ký Tự Quang Học OCR Tiếng Việt Chính Xác 99%</a>
            </h3>
            <p class="text-gray-600 text-[14px] leading-relaxed mb-5 flex-1 line-clamp-3">
              Phân tích chuyên sâu sức mạnh kỹ thuật của dòng máy scan số hóa tài liệu chuyên nghiệp Ricoh fi-Series: cơ chế chống kẹt giấy bằng âm thanh thông minh iSOP, trình điều khiển xử lý ảnh PaperStream IP tự động lọc sạch nền bẩn và engine nhận dạng ký tự quang học OCR tiếng Việt chính xác 99% phục vụ tìm kiếm toàn văn Full-Text Search.
            </p>
            <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
              <a href="/ve-huong-son/tin-tuc/danh-gia-may-scan-ricoh-fi-series-va-cong-nghe-ocr-tieng-viet/" class="inline-flex items-center space-x-1.5 text-[#1A9900] font-bold text-xs uppercase tracking-wider group-hover:underline">
                <span>Đọc bài viết</span>
                <i class="fa-solid fa-arrow-right text-[11px]"></i>
              </a>
              <span class="text-xs text-gray-400 font-medium">Chi tiết giải pháp</span>
            </div>
          </div>
        </article>
        
        <article class="border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-lg transition-all duration-300" data-category="Hoàn Thiện Sau In">
          <div class="h-56 overflow-hidden relative">
            <img src="/assets/images/products/36-may-giap-ghim-duplo-dfc-sii-ket-noi-voi-dfc-100-101-120.jpg" alt="Tự Động Hóa Khâu Đóng Tập Đề Thi, Sách Bài Tập &amp; Kỷ Yếu Bằng Hệ Thống Booklet Maker Duplo" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md">
              Hoàn Thiện Sau In
            </div>
            <div class="absolute bottom-3 right-3 bg-black/70 backdrop-blur-xs text-white text-[10.5px] font-medium px-2.5 py-0.5 rounded">
              <i class="fa-regular fa-clock mr-1 text-[#5eb74c]"></i>12 phút đọc
            </div>
          </div>
          <div class="p-6 flex flex-col flex-1">
            <div class="flex items-center gap-2 text-xs text-gray-500 mb-2">
              <i class="fa-solid fa-calendar-days text-[#1A9900]"></i>
              <span>2026-10-06</span>
              <span class="text-gray-300">•</span>
              <span class="font-medium text-gray-600">Hương Sơn</span>
            </div>
            <h3 class="text-[17px] sm:text-[18px] font-bold text-[#181923] mb-3 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              <a href="/ve-huong-son/tin-tuc/tu-dong-hoa-khau-dong-tap-de-thi-giao-trinh-phong-in-truong-hoc/">Tự Động Hóa Khâu Đóng Tập Đề Thi, Sách Bài Tập &amp; Kỷ Yếu Bằng Hệ Thống Booklet Maker Duplo</a>
            </h3>
            <p class="text-gray-600 text-[14px] leading-relaxed mb-5 flex-1 line-clamp-3">
              Giải pháp tự động hóa khâu gia công đóng tập tài liệu sau in: kết nối tháp phối trang Duplo DFC với máy gập bấm ghim tự động DBM-150, sản xuất 2.400 tập đề thi và kỷ yếu mỗi giờ, triệt tiêu sai sót lộn đề thi và giải phóng 80% chi phí nhân công thủ công.
            </p>
            <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
              <a href="/ve-huong-son/tin-tuc/tu-dong-hoa-khau-dong-tap-de-thi-giao-trinh-phong-in-truong-hoc/" class="inline-flex items-center space-x-1.5 text-[#1A9900] font-bold text-xs uppercase tracking-wider group-hover:underline">
                <span>Đọc bài viết</span>
                <i class="fa-solid fa-arrow-right text-[11px]"></i>
              </a>
              <span class="text-xs text-gray-400 font-medium">Chi tiết giải pháp</span>
            </div>
          </div>
        </article>
        
        <article class="border border-gray-200 bg-white rounded-lg overflow-hidden group flex flex-col hover:border-[#1A9900] hover:shadow-lg transition-all duration-300" data-category="Hoàn Thiện Sau In">
          <div class="h-56 overflow-hidden relative">
            <img src="/assets/images/products/41-may-phoi-trang-duplo-dfc-100.jpg" alt="Cẩm Nang Vận Hành, Cân Chỉnh Bánh Xe Kéo Giấy &amp; Xử Lý Sự Cố Máy Phối Trang Duplo DFC Toàn Tập" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 rounded-xs shadow-md">
              Hoàn Thiện Sau In
            </div>
            <div class="absolute bottom-3 right-3 bg-black/70 backdrop-blur-xs text-white text-[10.5px] font-medium px-2.5 py-0.5 rounded">
              <i class="fa-regular fa-clock mr-1 text-[#5eb74c]"></i>11 phút đọc
            </div>
          </div>
          <div class="p-6 flex flex-col flex-1">
            <div class="flex items-center gap-2 text-xs text-gray-500 mb-2">
              <i class="fa-solid fa-calendar-days text-[#1A9900]"></i>
              <span>2026-10-06</span>
              <span class="text-gray-300">•</span>
              <span class="font-medium text-gray-600">Hương Sơn</span>
            </div>
            <h3 class="text-[17px] sm:text-[18px] font-bold text-[#181923] mb-3 group-hover:text-[#1A9900] transition leading-snug line-clamp-2">
              <a href="/ve-huong-son/tin-tuc/cam-nang-van-hanh-can-chinh-va-bao-duong-may-phoi-trang-duplo-dfc/">Cẩm Nang Vận Hành, Cân Chỉnh Bánh Xe Kéo Giấy &amp; Xử Lý Sự Cố Máy Phối Trang Duplo DFC Toàn Tập</a>
            </h3>
            <p class="text-gray-600 text-[14px] leading-relaxed mb-5 flex-1 line-clamp-3">
              Cẩm nang kỹ thuật thực chiến dành cho kỹ thuật viên và nhân viên vận hành máy phối trang Duplo DFC-100/102/120/122: hướng dẫn căn chỉnh núm áp lực nạp giấy theo từng định lượng 50–160gsm, quy trình vệ sinh bánh xe cao su kéo giấy bằng cồn kỹ thuật, điều chỉnh độ nhạy cảm biến chống đúp giấy và bảng tra cứu xử lý sự cố tại chỗ.
            </p>
            <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
              <a href="/ve-huong-son/tin-tuc/cam-nang-van-hanh-can-chinh-va-bao-duong-may-phoi-trang-duplo-dfc/" class="inline-flex items-center space-x-1.5 text-[#1A9900] font-bold text-xs uppercase tracking-wider group-hover:underline">
                <span>Đọc bài viết</span>
                <i class="fa-solid fa-arrow-right text-[11px]"></i>
              </a>
              <span class="text-xs text-gray-400 font-medium">Chi tiết giải pháp</span>
            </div>
          </div>
        </article>
        </div>
    </div>
  </section>

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8"><div class="flex items-center justify-between mb-8 flex-wrap gap-4"><div><span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-1">Cẩm nang chuyên sâu</span><h2 class="text-2xl sm:text-[30px] font-bold text-gray-900 leading-tight">Bài viết cẩm nang &amp; Hướng dẫn kỹ thuật</h2></div><a href="/ve-huong-son/kien-thuc/" class="inline-flex items-center gap-2 text-[#1A9900] hover:text-[#147700] font-bold text-xs uppercase tracking-wider transition border border-[#1A9900]/30 hover:border-[#1A9900] px-4 py-2 rounded-xs"><span>Xem tất cả 16 bài cẩm nang</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a></div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/hero-office.jpg" alt="Nên thuê hay mua máy photocopy cho doanh nghiệp, trường học?" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Tư vấn đầu tư</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/nen-thue-hay-mua-may-photocopy/">Nên thuê hay mua máy photocopy cho doanh nghiệp, trường học?</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Phân tích bài toán chi phí dòng tiền TCO, khấu hao và rủi ro hỏng hóc giúp lãnh đạo đưa ra quyết định mua sắm tối ưu nhất.</p>
            <a href="/ve-huong-son/kien-thuc/nen-thue-hay-mua-may-photocopy/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc cẩm nang</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/hero-education.jpg" alt="Tiêu chuẩn máy in nhân bản siêu tốc phục vụ sao in đề thi THPT" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Thi cử &amp; Bảo mật</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/tieu-chuan-may-in-de-thi-thpt/">Tiêu chuẩn máy in nhân bản siêu tốc phục vụ sao in đề thi THPT</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Yêu cầu kỹ thuật cách ly 3 vòng, tốc độ 130–150 bản/phút, bảo mật tuyệt đối và phương án máy dự phòng N+1 theo quy chế thi Bộ GD&ĐT.</p>
            <a href="/ve-huong-son/kien-thuc/tieu-chuan-may-in-de-thi-thpt/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc cẩm nang</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/banners/highspeed_scanner_1787905830483.jpg" alt="Hướng dẫn chọn máy scan chuyên dụng số hóa tài liệu lưu trữ" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Chuyển đổi số</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/huong-dan-chon-may-scan-so-hoa-tai-lieu/">Hướng dẫn chọn máy scan chuyên dụng số hóa tài liệu lưu trữ</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Tiêu chí chọn máy scan nạp tự động ADF, quét phẳng Flatbed, scan sách không phá gáy và công nghệ OCR bóc tách tiếng Việt chuẩn Thông tư 02.</p>
            <a href="/ve-huong-son/kien-thuc/huong-dan-chon-may-scan-so-hoa-tai-lieu/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc cẩm nang</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/toshiba-e-studio-4528a.jpg" alt="So sánh chi tiết máy photocopy Toshiba và Konica Minolta" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">So sánh thiết bị</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/so-sanh-may-photocopy-toshiba-va-konica-minolta/">So sánh chi tiết máy photocopy Toshiba và Konica Minolta</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">So sánh chuyên sâu về độ bền cơ học, chi phí bản chụp, tính sẵn có linh kiện và tính năng bảo mật tài liệu ngân hàng.</p>
            <a href="/ve-huong-son/kien-thuc/so-sanh-may-photocopy-toshiba-va-konica-minolta/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc cẩm nang</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/95-bang-tra-ma-muc-master-may-in-duplo.jpg" alt="Định mức tiêu hao mực in &amp; cuộn Master máy in siêu tốc Duplo" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Định mức vật tư</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/dinh-muc-muc-in-cuon-master-duplo-in-de-thi/">Định mức tiêu hao mực in &amp; cuộn Master máy in siêu tốc Duplo</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Công thức tính chính xác số lượng cuộn master và bình mực 1.000ml cho kỳ thi tuyển sinh và tốt nghiệp THPT, dự toán không thừa thiếu.</p>
            <a href="/ve-huong-son/kien-thuc/dinh-muc-muc-in-cuon-master-duplo-in-de-thi/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc cẩm nang</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/banners/hero_edu_tech_1787899932385.jpg" alt="Số hóa học bạ điện tử THPT đồng bộ CSDL ngành chuẩn MOET" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Giáo dục số</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/so-hoa-hoc-ba-dien-tu-thpt-chuan-moet/">Số hóa học bạ điện tử THPT đồng bộ CSDL ngành chuẩn MOET</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Quy trình scan 2 mặt tự động học bạ, khử nhiễu nếp gấp giấy cũ và đồng bộ dữ liệu vào phần mềm quản lý trường học toàn quốc.</p>
            <a href="/ve-huong-son/kien-thuc/so-hoa-hoc-ba-dien-tu-thpt-chuan-moet/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc cẩm nang</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="py-16 bg-[#f5f8fb] ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8"><div class="flex items-center justify-between mb-8 flex-wrap gap-4"><div><span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-1">Dự án tiêu biểu</span><h2 class="text-2xl sm:text-[30px] font-bold text-gray-900 leading-tight">Hoạt động triển khai &amp; Bàn giao thiết bị</h2></div><a href="/du-an/" class="inline-flex items-center gap-2 text-[#1A9900] hover:text-[#147700] font-bold text-xs uppercase tracking-wider transition border border-[#1A9900]/30 hover:border-[#1A9900] px-4 py-2 rounded-xs"><span>Xem tất cả dự án</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a></div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/duplo-dp-x550.jpg" alt="Sở GD&amp;ĐT Quảng Trị – Thuê máy in nhân bản siêu tốc Duplo 2026" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Dự án GD</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/du-an/so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026/">Sở GD&amp;ĐT Quảng Trị – Thuê máy in nhân bản siêu tốc Duplo 2026</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Bàn giao và vận hành hệ thống máy in siêu tốc Duplo DP-X550 phục vụ kỳ thi tuyển sinh và tốt nghiệp THPT an toàn tuyệt đối.</p>
            <a href="/du-an/so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/98-cho-thue-toshiba-e-studio-456.jpg" alt="Sở GD&amp;ĐT Vĩnh Phúc – Thuê hệ thống máy photocopy sao in đề thi" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Dự án GD</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/du-an/so-gddt-vinh-phuc-thue-may-photocopy-sao-in-de-thi/">Sở GD&amp;ĐT Vĩnh Phúc – Thuê hệ thống máy photocopy sao in đề thi</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Cung cấp hệ thống máy photocopy công suất lớn và phương án máy dự phòng N+1 trong khu vực cách ly 3 vòng.</p>
            <a href="/du-an/so-gddt-vinh-phuc-thue-may-photocopy-sao-in-de-thi/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/vietcombank-2024.jpg" alt="Cung cấp máy photocopy cho hệ thống Vietcombank toàn quốc" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ngân hàng</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/du-an/vietcombank-cung-cap-may-photocopy/">Cung cấp máy photocopy cho hệ thống Vietcombank toàn quốc</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Triển khai dịch vụ Managed Print Services và máy photocopy Toshiba e-STUDIO tại các chi nhánh và phòng giao dịch Vietcombank.</p>
            <a href="/du-an/vietcombank-cung-cap-may-photocopy/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/banners/hero_office_solutions_1787899910391.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Muốn nhận thông tin dự án & cẩm nang mới nhất của Hương Sơn?</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Để lại thông tin liên hệ — Đội ngũ Hương Sơn sẽ cập nhật tài liệu kỹ thuật và giải pháp mới nhất cho Quý vị.</p>
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
