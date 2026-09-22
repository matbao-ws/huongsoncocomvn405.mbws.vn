@extends('client.layouts.app')

@section('title', "Công cụ tính TCO mua và thuê máy photocopy | Hương Sơn")
@section('meta_description', "So sánh tổng chi phí sở hữu (TCO) giữa mua và thuê máy photocopy trong cùng thời gian sử dụng.")
@section('canonical', "https://huongsonco.com.vn/cong-cu/tinh-tco/")
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
        "name": "Công cụ",
        "item": "https://huongsonco.com.vn/cong-cu/"
      },
      {
        "@@type": "ListItem",
        "position": 3,
        "name": "Tính TCO",
        "item": "https://huongsonco.com.vn/cong-cu/tinh-tco/"
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
          <a href="/" class="hover:text-white flex items-center gap-1.5 transition"><i class="fa-solid fa-house text-[#5eb74c] text-[11px]"></i><span>Trang chủ</span></a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <a href="/cong-cu/" class="text-gray-200 hover:text-white transition">Công cụ</a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <span class="text-[#84e372] font-semibold" aria-current="page">Tính TCO</span>
        </nav>
      </div>

      <!-- 2-COLUMN SPLIT HERO SHOWCASE -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
        <!-- LEFT COLUMN: Content & Action (7 cols) -->
        <div class="lg:col-span-7 text-left">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.2em] text-[#5eb74c] mb-2.5">
            <span class="w-2 h-2 rounded-full bg-[#5eb74c] inline-block animate-pulse"></span>
            Công cụ ước tính
          </div>
          <h1 class="text-2xl sm:text-[34px] lg:text-[40px] font-extrabold text-white mb-3.5 leading-[1.35] tracking-normal drop-shadow-md">
            Công cụ tính TCO – Tổng chi phí sở hữu
          </h1>
          <p class="text-gray-200 text-[14.5px] sm:text-base leading-relaxed mb-6 font-normal max-w-2xl">So sánh tổng chi phí sở hữu giữa phương án mua và thuê máy trong cùng một khoảng thời gian sử dụng.</p>
          <div class="flex flex-wrap items-center gap-2 sm:gap-2.5 mb-7">
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm"><i class="fa-solid fa-calculator text-[#5eb74c]"></i> <span>Ước tính chi phí thuê & TCO chuẩn xác</span></div>
        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm"><i class="fa-solid fa-bolt text-[#ffc107]"></i> <span>Kết quả phân tích trong 30 giây</span></div>
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
                <i class="fa-solid fa-calculator text-[#ffc107]"></i>
                <span>Kết quả trong 30 giây</span>
              </div>

              <!-- Foreground Product Image (100% Crisp, High Res, Unobscured!) -->
              <div class="pt-6 pb-2 px-2 flex items-center justify-center min-h-[200px] sm:min-h-[230px]">
                <img src="/assets/images/banners/toshiba_mfp_product_1787905812744.jpg" alt="Công cụ tính TCO – Tổng chi phí sở hữu" class="max-h-[190px] sm:max-h-[220px] w-auto object-contain mx-auto drop-shadow-[0_15px_25px_rgba(0,0,0,0.6)] transform group-hover:scale-105 transition-transform duration-500" loading="eager" />
              </div>

              <!-- Bottom Caption Strip & Floating Badge -->
              <div class="pt-3 border-t border-white/15 flex items-center justify-between text-xs text-gray-200">
                <div class="flex items-center gap-1.5 font-medium">
                  <i class="fa-solid fa-circle-check text-[#5eb74c]"></i>
                  <span>Ước tính TCO & Chi phí tối ưu</span>
                </div>
                <span class="bg-[#0d1626]/80 text-[#84e372] text-[10.5px] font-bold px-2 py-0.5 border border-[#5eb74c]/40">
                  Tiết kiệm 35%
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10">
        <div class="bg-white border border-gray-200 p-7 space-y-5">
          <h3 class="font-bold text-[#181923] uppercase text-sm tracking-wider mb-2">Phương án mua</h3>
          <div><label class="block text-[13px] font-semibold text-[#181923] mb-2">Giá mua thiết bị (đồng)</label>
            <input type="number" id="tco-buy-price" value="56500000" class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900]" /></div>
          <div><label class="block text-[13px] font-semibold text-[#181923] mb-2">Vật tư + bảo trì mỗi tháng (đồng)</label>
            <input type="number" id="tco-buy-monthly" value="600000" class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900]" /></div>
        </div>
        <div class="bg-white border border-gray-200 p-7 space-y-5">
          <h3 class="font-bold text-[#181923] uppercase text-sm tracking-wider mb-2">Phương án thuê</h3>
          <div><label class="block text-[13px] font-semibold text-[#181923] mb-2">Phí thuê trọn gói mỗi tháng (đồng)</label>
            <input type="number" id="tco-rent-monthly" value="1800000" class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900]" /></div>
          <div><label class="block text-[13px] font-semibold text-[#181923] mb-2">Thời gian sử dụng để so sánh (tháng)</label>
            <input type="number" id="tco-months" value="36" class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900]" /></div>
        </div>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
        <div class="p-7" style="background-color: rgb(247,243,238);">
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-2">Tổng chi phí phương án mua</p>
          <p class="text-3xl font-bold text-[#181923]" id="tco-buy-total">—</p>
        </div>
        <div class="p-7" style="background-color: rgb(247,243,238);">
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-2">Tổng chi phí phương án thuê</p>
          <p class="text-3xl font-bold text-[#181923]" id="tco-rent-total">—</p>
        </div>
      </div>
      <p class="text-[13px] text-gray-500 mt-6 max-w-3xl">
        Công cụ ước tính tham khảo dựa trên số liệu Quý khách nhập, không thay thế cho Cost Sheet nội bộ mà Hương Sơn
        lập trước khi báo giá chính thức. Vui lòng <a class="text-[#1A9900] font-medium hover:underline" href="/nhan-tu-van/bao-gia/">yêu cầu báo giá</a>
        để có con số chính xác theo cấu hình cụ thể.
      </p>
      <script>
        (function () {
          const bp = document.getElementById('tco-buy-price'), bm = document.getElementById('tco-buy-monthly'),
                rm = document.getElementById('tco-rent-monthly'), mo = document.getElementById('tco-months'),
                bt = document.getElementById('tco-buy-total'), rt = document.getElementById('tco-rent-total');
          const fmt = (n) => n.toLocaleString('vi-VN') + ' đ';
          function calc() {
            const months = parseFloat(mo.value) || 0;
            const buyTotal = (parseFloat(bp.value) || 0) + (parseFloat(bm.value) || 0) * months;
            const rentTotal = (parseFloat(rm.value) || 0) * months;
            bt.textContent = fmt(Math.round(buyTotal));
            rt.textContent = fmt(Math.round(rentTotal));
          }
          [bp, bm, rm, mo].forEach((el) => el.addEventListener('input', calc));
          calc();
        })();
      </script>
    
    </div>
  </section>

  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/xxx_home-bg_xxx.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Muốn Hương Sơn tính TCO chính xác cho đơn vị?</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Gửi cấu hình và sản lượng thực tế — Hương Sơn lập Cost Sheet chi tiết trước khi báo giá.</p>
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
