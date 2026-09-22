@extends('client.layouts.app')

@section('title', "Đối tác – Thương hiệu Duplo, Toshiba, Konica Minolta | Hương Sơn")
@section('meta_description', "Hương Sơn là đại lý ủy quyền phân phối chính thức Duplo và Toshiba tại miền Bắc, đại lý bán hàng Konica Minolta.")
@section('canonical', "https://huongsonco.com.vn/ve-huong-son/doi-tac-thuong-hieu/")
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
        "name": "Về Hương Sơn",
        "item": "https://huongsonco.com.vn/ve-huong-son/"
      },
      {
        "@@type": "ListItem",
        "position": 3,
        "name": "Đối tác – Thương hiệu",
        "item": "https://huongsonco.com.vn/ve-huong-son/doi-tac-thuong-hieu/"
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
          <a href="/" class="hover:text-white flex items-center gap-1.5 transition"><i class="fa-solid fa-house text-[#5eb74c] text-[11px]"></i><span>Trang chủ</span></a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <a href="/ve-huong-son/" class="text-gray-200 hover:text-white transition">Về Hương Sơn</a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <span class="text-[#84e372] font-semibold" aria-current="page">Đối tác – Thương hiệu</span>
        </nav>
      </div>

      <!-- 2-COLUMN SPLIT HERO SHOWCASE -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
        <!-- LEFT COLUMN: Content & Action (7 cols) -->
        <div class="lg:col-span-7 text-left">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.2em] text-[#5eb74c] mb-2.5">
            <span class="w-2 h-2 rounded-full bg-[#5eb74c] inline-block animate-pulse"></span>
            Đối tác
          </div>
          <h1 class="text-2xl sm:text-[34px] lg:text-[40px] font-extrabold text-white mb-3.5 leading-[1.35] tracking-normal drop-shadow-md">
            Đối tác – Thương hiệu
          </h1>
          <p class="text-gray-200 text-[14.5px] sm:text-base leading-relaxed mb-6 font-normal max-w-2xl">Các thương hiệu thiết bị Hương Sơn phân phối và hợp tác triển khai.</p>
          <div class="flex flex-wrap items-center gap-2 sm:gap-2.5 mb-7">
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm"><i class="fa-solid fa-calendar-check text-[#5eb74c]"></i> <span>Thành lập từ 2008 (16+ năm uy tín)</span></div>
        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm"><i class="fa-solid fa-certificate text-[#ffc107]"></i> <span>Đối tác Ricoh, Toshiba, Duplo</span></div>
        <a href="tel:0911138583" class="inline-flex items-center gap-2 bg-[#1A9900]/90 hover:bg-[#1A9900] text-white border border-[#5eb74c]/50 px-3.5 py-1.5 transition font-semibold shadow-sm"><i class="fa-solid fa-phone"></i> <span>Hotline: 091.113.8583</span></a>
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
                <i class="fa-solid fa-building text-[#5eb74c]"></i>
                <span>Thành lập từ 2008</span>
              </div>

              <!-- Foreground Product Image (100% Crisp, High Res, Unobscured!) -->
              <div class="pt-6 pb-2 px-2 flex items-center justify-center min-h-[200px] sm:min-h-[230px]">
                <img src="/assets/images/banners/hero_office_solutions_1787899910391.jpg" alt="Đối tác – Thương hiệu" class="max-h-[190px] sm:max-h-[220px] w-auto object-contain mx-auto drop-shadow-[0_15px_25px_rgba(0,0,0,0.6)] transform group-hover:scale-105 transition-transform duration-500" loading="eager" />
              </div>

              <!-- Bottom Caption Strip & Floating Badge -->
              <div class="pt-3 border-t border-white/15 flex items-center justify-between text-xs text-gray-200">
                <div class="flex items-center gap-1.5 font-medium">
                  <i class="fa-solid fa-circle-check text-[#5eb74c]"></i>
                  <span>Trụ sở & Showroom tại Hà Nội</span>
                </div>
                <span class="bg-[#0d1626]/80 text-[#84e372] text-[10.5px] font-bold px-2 py-0.5 border border-[#5eb74c]/40">
                  Uy tín 16 năm
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
            <p class="text-[15px] text-[#181923] leading-relaxed">Danh sách các thương hiệu thiết bị mà Hương Sơn phân phối, cùng vai trò hợp tác cụ thể với từng hãng.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Dành cho ai</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Khách hàng muốn biết Hương Sơn có phải đại lý chính thức của hãng thiết bị mình quan tâm hay không.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Vì sao đa thương hiệu</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Hương Sơn theo mô hình đa thương hiệu (multi-brand) để chọn đúng thiết bị theo nhu cầu, không bó buộc khách hàng vào một hãng duy nhất.</p>
          </div>
      </div>
    </div>
  </section>

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-200 bg-white">
          <caption class="text-left px-5 py-4 bg-white border border-b-0 border-gray-200 text-sm font-bold text-[#181923] uppercase tracking-wider">Danh mục đối tác – thương hiệu</caption>
          <thead class="bg-[#181924]"><tr><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Thương hiệu</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Vai trò hợp tác</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Thời gian</th></tr></thead>
          <tbody>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">DUPLO (Nhật Bản)</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Đại lý ủy quyền phân phối chính thức tại miền Bắc Việt Nam</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Từ năm 2017</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">TOSHIBA</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Đại lý ủy quyền phân phối chính thức tại miền Bắc Việt Nam</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Từ năm 2017</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Konica Minolta</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Đại lý bán hàng — dòng máy photocopy đa chức năng 25–90 bản/phút</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Từ năm 2021</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Ricoh</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Sản phẩm phân phối trong danh mục Hương Sơn</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">—</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">HP</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Sản phẩm phân phối trong danh mục Hương Sơn</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">—</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">FANSIPAN</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Thương hiệu vật tư riêng của Hương Sơn</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">—</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/xxx_home-bg_xxx.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Cần tư vấn chọn đúng thương hiệu cho nhu cầu?</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Hương Sơn tư vấn theo mô hình đa thương hiệu — chọn thiết bị phù hợp nhất, không cố định vào một hãng.</p>
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
