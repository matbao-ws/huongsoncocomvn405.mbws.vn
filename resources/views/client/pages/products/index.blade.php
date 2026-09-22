@extends('client.layouts.app')

@section('title', "Sản phẩm – Thiết bị văn phòng, in ấn, số hóa | Hương Sơn")
@section('meta_description', "9 nhóm sản phẩm Hương Sơn cung cấp: photocopy, máy in nhân bản, scan, phối trang, in laser, thiết bị phòng học, vật tư, thiết bị văn phòng và FANSIPAN.")
@section('canonical', "https://huongsonco.com.vn/san-pham/")
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
        "name": "Sản phẩm",
        "item": "https://huongsonco.com.vn/san-pham/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "ItemList",
    "name": "Danh mục sản phẩm Hương Sơn",
    "numberOfItems": 9,
    "itemListElement": [
      {
        "@@type": "ListItem",
        "position": 1,
        "name": "Máy photocopy – Máy đa chức năng A3/A4",
        "url": "https://huongsonco.com.vn/san-pham/photocopy-may-da-chuc-nang/"
      },
      {
        "@@type": "ListItem",
        "position": 2,
        "name": "Máy in nhân bản tốc độ cao & Thiết bị hoàn thiện sau in Duplo",
        "url": "https://huongsonco.com.vn/san-pham/may-in-nhan-ban-toc-do-cao/"
      },
      {
        "@@type": "ListItem",
        "position": 3,
        "name": "Máy scan – thiết bị số hóa tài liệu",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/"
      },
      {
        "@@type": "ListItem",
        "position": 4,
        "name": "Cho thuê thiết bị cho khối Giáo dục – HƯƠNG SƠN EDUCATION SOLUTIONS",
        "url": "https://huongsonco.com.vn/san-pham/cho-thue-thiet-bi-giao-duc/"
      },
      {
        "@@type": "ListItem",
        "position": 5,
        "name": "Máy in Laser – thiết bị in văn phòng",
        "url": "https://huongsonco.com.vn/san-pham/may-in-laser/"
      },
      {
        "@@type": "ListItem",
        "position": 6,
        "name": "Thiết bị phòng học – thiết bị dạy học",
        "url": "https://huongsonco.com.vn/san-pham/thiet-bi-phong-hoc-giao-duc/"
      },
      {
        "@@type": "ListItem",
        "position": 7,
        "name": "Vật tư – linh kiện – tiêu hao cho máy photocopy, máy in",
        "url": "https://huongsonco.com.vn/san-pham/vat-tu-linh-kien-tieu-hao/"
      },
      {
        "@@type": "ListItem",
        "position": 8,
        "name": "Thiết bị văn phòng – hội họp và văn phòng phẩm",
        "url": "https://huongsonco.com.vn/san-pham/thiet-bi-van-phong-hoi-hop/"
      },
      {
        "@@type": "ListItem",
        "position": 9,
        "name": "FANSIPAN – Mực và vật tư in ấn tương thích",
        "url": "https://huongsonco.com.vn/san-pham/fansipan/"
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
          <span class="text-[#84e372] font-semibold" aria-current="page">Sản phẩm</span>
        </nav>
      </div>

      <!-- 2-COLUMN SPLIT HERO SHOWCASE -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
        <!-- LEFT COLUMN: Content & Action (7 cols) -->
        <div class="lg:col-span-7 text-left">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.2em] text-[#5eb74c] mb-2.5">
            <span class="w-2 h-2 rounded-full bg-[#5eb74c] inline-block animate-pulse"></span>
            Office Equipment &amp; Production Print
          </div>
          <h1 class="text-2xl sm:text-[34px] lg:text-[40px] font-extrabold text-white mb-3.5 leading-[1.35] tracking-normal drop-shadow-md">
            Thiết Bị Văn Phòng, In Ấn &amp; Số Hóa
          </h1>
          <p class="text-gray-200 text-[14.5px] sm:text-base leading-relaxed mb-6 font-normal max-w-2xl">9 nhóm thiết bị Hương Sơn cung cấp chính hãng: Photocopy đa chức năng, in siêu tốc, scan tốc độ cao, vật tư tiêu hao FANSIPAN — Bán, cho thuê và bảo trì trọn đời.</p>
          <div class="flex flex-wrap items-center gap-2 sm:gap-2.5 mb-7">
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm">
          <i class="fa-solid fa-shield-check text-[#5eb74c]"></i>
          <span>100% Thiết bị chính hãng CO/CQ</span>
        </div>
        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm">
          <i class="fa-solid fa-truck-fast text-[#ffc107]"></i>
          <span>Giao hàng &amp; Lắp đặt toàn quốc</span>
        </div>
        <a href="tel:0911138583" class="inline-flex items-center gap-2 bg-[#1A9900]/90 hover:bg-[#1A9900] text-white border border-[#5eb74c]/50 px-3.5 py-1.5 transition font-semibold shadow-sm">
          <i class="fa-solid fa-phone"></i>
          <span>Hotline: 091.113.8583</span>
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
                <img src="/assets/images/banners/highspeed_scanner_1787905830483.jpg" alt="Sản phẩm thiết bị văn phòng, in ấn và số hóa" class="max-h-[190px] sm:max-h-[220px] w-auto object-contain mx-auto drop-shadow-[0_15px_25px_rgba(0,0,0,0.6)] transform group-hover:scale-105 transition-transform duration-500" loading="eager" />
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
            <p class="text-[15px] text-[#181923] leading-relaxed">Trang tổng hợp 9 danh mục sản phẩm mà Hương Sơn cung cấp: thiết bị, vật tư và linh kiện cho in ấn và văn phòng.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Dành cho ai</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Khách hàng cần tra cứu nhanh nhóm thiết bị phù hợp trước khi xem chi tiết từng model.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Giải quyết vấn đề gì</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Định hướng đúng danh mục theo nhu cầu: photocopy, in nhân bản, scan, sau in, in laser, thiết bị phòng học, vật tư hay thiết bị văn phòng.</p>
          </div>
      </div>
    </div>
  </section>

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-box text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Office Equipment</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/photocopy-may-da-chuc-nang/">Máy photocopy – Máy đa chức năng A3/A4</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Nhóm thiết bị trục chính cho văn phòng, phòng chuyên môn và trường học: máy đen trắng và máy màu, khổ A3, tốc độ từ 20 đến 90 bản/phút tùy d…</p>
            <a href="/san-pham/photocopy-may-da-chuc-nang/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-box text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Production &amp; Finishing</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-in-nhan-ban-toc-do-cao/">Máy in nhân bản tốc độ cao &amp; Thiết bị hoàn thiện sau in Duplo</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Hệ thống đồng bộ từ máy in nhân bản siêu tốc Duplo đến máy phối trang, gấp dập ghim tài liệu sau in — phục vụ Sở GD&amp;ĐT, trường đại học, ngân…</p>
            <a href="/san-pham/may-in-nhan-ban-toc-do-cao/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-box text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Scan &amp; Digital Document</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/">Máy scan – thiết bị số hóa tài liệu</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Nhóm thiết bị scan phục vụ nhu cầu số hóa tài liệu: hồ sơ, văn bằng, chứng chỉ và tài liệu lưu trữ.…</p>
            <a href="/san-pham/may-scan-so-hoa/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-box text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Education Solutions</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/cho-thue-thiet-bi-giao-duc/">Cho thuê thiết bị cho khối Giáo dục – HƯƠNG SƠN EDUCATION SOLUTIONS</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Giải pháp trọn gói cho ngành giáo dục: không cần vốn đầu tư ban đầu, miễn phí toàn bộ vật tư mực in &amp; linh kiện thay thế, trực kỹ thuật 24/7…</p>
            <a href="/san-pham/cho-thue-thiet-bi-giao-duc/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-box text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Office Equipment</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-in-laser/">Máy in Laser – thiết bị in văn phòng</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Nhóm thiết bị in A4 phân tán theo phòng ban, bổ trợ cho máy photocopy A3 trục chính trong mô hình quản lý in ấn.…</p>
            <a href="/san-pham/may-in-laser/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-box text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Education Equipment</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/thiet-bi-phong-hoc-giao-duc/">Thiết bị phòng học – thiết bị dạy học</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Nhóm thiết bị phục vụ lớp học và phòng chức năng: màn hình tương tác, bục giảng điện tử, camera vật thể, máy chiếu và thiết bị trình chiếu —…</p>
            <a href="/san-pham/thiet-bi-phong-hoc-giao-duc/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-box text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Consumables &amp; FANSIPAN</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/vat-tu-linh-kien-tieu-hao/">Vật tư – linh kiện – tiêu hao cho máy photocopy, máy in</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Nhóm vật tư tiêu hao phục vụ cả khách mua máy lẻ và các hợp đồng thuê máy, quản lý in ấn trọn gói — bao gồm thương hiệu vật tư riêng FANSIPA…</p>
            <a href="/san-pham/vat-tu-linh-kien-tieu-hao/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-box text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Office Equipment</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/thiet-bi-van-phong-hoi-hop/">Thiết bị văn phòng – hội họp và văn phòng phẩm</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Nhóm sản phẩm hỗ trợ công việc văn phòng hằng ngày: kệ hồ sơ, file, giấy các loại, sổ sách và đồ dùng văn phòng khác.…</p>
            <a href="/san-pham/thiet-bi-van-phong-hoi-hop/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-box text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Thương hiệu vật tư riêng của Hương Sơn</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/fansipan/">FANSIPAN – Mực và vật tư in ấn tương thích</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Nhóm vật tư in ấn thương hiệu riêng FANSIPAN của Hương Sơn: toner, cartridge, cụm mực, trống và bột từ — tương thích nhiều dòng máy phổ biến…</p>
            <a href="/san-pham/fansipan/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- PROMOTIONAL BANNER: B2B TENDER & PROCUREMENT POLICY -->
  <section class="py-12 bg-white">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="relative overflow-hidden bg-gradient-to-r from-[#10203C] via-[#162e56] to-[#10203C] p-8 sm:p-12 text-white border-l-4 border-[#1A9900] shadow-xl">
        <div class="absolute right-0 top-0 bottom-0 w-1/3 opacity-15 hidden md:block pointer-events-none">
          <img src="/assets/images/banners/projector_conference_1787905917280.jpg" alt="Dự án cung cấp thiết bị" class="w-full h-full object-cover" />
        </div>
        <div class="relative z-10 max-w-3xl">
          <div class="inline-flex items-center space-x-2 bg-[#1A9900]/25 border border-[#1A9900]/50 px-3 py-1 mb-3 text-[#5eb74c] text-xs font-bold uppercase tracking-wider">
            <i class="fa-solid fa-handshake-angle text-[#5eb74c]"></i>
            <span>Chính Sách Đại Lý &amp; Dự Án Đấu Thầu</span>
          </div>
          <h2 class="banner-heading text-2xl sm:text-3xl font-bold text-white mb-4 leading-[1.38]">
            Cung Cấp Thiết Bị Cho Đại Lý, Trường Học &amp; Gói Thầu Mua Sắm Công
          </h2>
          <p class="text-gray-300 text-sm sm:text-base leading-relaxed mb-6">
            Hương Sơn hỗ trợ toàn diện các đơn vị đại lý và nhà thầu: Cung cấp đầy đủ chứng nhận xuất xứ CO/CQ, bảng thông số kỹ thuật chuẩn thầu, thư ủy quyền bán hàng từ hãng (Duplo, Toshiba, Ricoh, ViewSonic) và mức chiết khấu cạnh tranh nhất thị trường.
          </p>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8 pt-4 border-t border-white/10 text-xs sm:text-sm">
            <div class="flex items-center space-x-2">
              <i class="fa-solid fa-certificate text-[#5eb74c] text-base"></i>
              <span>CO/CQ &amp; Hóa đơn VAT 100%</span>
            </div>
            <div class="flex items-center space-x-2">
              <i class="fa-solid fa-file-shield text-[#5eb74c] text-base"></i>
              <span>Hỗ trợ hồ sơ thầu trọn gói</span>
            </div>
            <div class="flex items-center space-x-2">
              <i class="fa-solid fa-truck-fast text-[#5eb74c] text-base"></i>
              <span>Giao hàng &amp; lắp đặt tận nơi</span>
            </div>
          </div>
          <div class="flex flex-wrap items-center gap-4">
            <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition inline-flex items-center space-x-2 shadow-lg shadow-[#1A9900]/30">
              <span>Đăng Ký Báo Giá Dự Án / Đại Lý</span>
              <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
            <a href="https://zalo.me/0913237302" target="_blank" rel="noopener noreferrer" class="border border-white/40 hover:border-[#5eb74c] hover:text-[#5eb74c] text-white font-bold text-xs uppercase tracking-wider px-6 py-4 transition inline-flex items-center space-x-2">
              <i class="fa-solid fa-comment-dots text-sm"></i>
              <span>Tư Vấn Zalo Dự Án</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/xxx_home-bg_xxx.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Chưa chắc nên chọn nhóm nào?</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Mô tả nhu cầu sử dụng — Hương Sơn tư vấn đúng danh mục và model phù hợp.</p>
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
