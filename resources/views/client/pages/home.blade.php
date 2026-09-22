@extends('client.layouts.app')

@section('title', "Công Ty Hương Sơn | Máy Photocopy, Máy In Siêu Tốc & Cho Thuê Thiết Bị")
@section('meta_description', "Công ty Hương Sơn chuyên cung cấp và cho thuê máy photocopy Toshiba, Ricoh, máy in nhân bản siêu tốc Duplo, máy scan số hóa tài liệu cho trường học, cơ quan và doanh nghiệp.")
@section('canonical', "https://huongsonco.com.vn/")
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
    "@@type": "WebSite",
    "@@id": "https://huongsonco.com.vn/#website",
    "url": "https://huongsonco.com.vn/",
    "name": "Hương Sơn",
    "inLanguage": "vi-VN",
    "publisher": {
      "@@id": "https://huongsonco.com.vn/#organization"
    },
    "potentialAction": {
      "@@type": "SearchAction",
      "target": {
        "@@type": "EntryPoint",
        "urlTemplate": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/?s={search_term_string}"
      },
      "query-input": "required name=search_term_string"
    }
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
        "name": "Giải pháp thiết bị và in ấn cho ngành Giáo dục",
        "url": "https://huongsonco.com.vn/giai-phap/giao-duc/"
      },
      {
        "@@type": "ListItem",
        "position": 2,
        "name": "Cho thuê máy in đề thi và vận hành điểm sao in",
        "url": "https://huongsonco.com.vn/giai-phap/giao-duc/in-de-thi/"
      },
      {
        "@@type": "ListItem",
        "position": 3,
        "name": "Cho thuê máy photocopy, máy in A3/A4 cho trường học",
        "url": "https://huongsonco.com.vn/giai-phap/giao-duc/cho-thue-may-truong-hoc/"
      },
      {
        "@@type": "ListItem",
        "position": 4,
        "name": "Quản lý in ấn trọn gói cho trường học – Managed Print Service",
        "url": "https://huongsonco.com.vn/giai-phap/giao-duc/quan-ly-in-an-truong-hoc/"
      },
      {
        "@@type": "ListItem",
        "position": 5,
        "name": "Dịch vụ scan, OCR và số hóa hồ sơ cho Sở GD&ĐT và trường học",
        "url": "https://huongsonco.com.vn/giai-phap/giao-duc/so-hoa-ho-so-truong-hoc/"
      },
      {
        "@@type": "ListItem",
        "position": 6,
        "name": "Giải pháp thiết bị, in ấn và số hóa cho Cơ quan Nhà nước",
        "url": "https://huongsonco.com.vn/giai-phap/co-quan-nha-nuoc/"
      },
      {
        "@@type": "ListItem",
        "position": 7,
        "name": "Giải pháp thiết bị in ấn và quản lý tài liệu cho Ngân hàng – Tài chính",
        "url": "https://huongsonco.com.vn/giai-phap/ngan-hang-tai-chinh/"
      },
      {
        "@@type": "ListItem",
        "position": 8,
        "name": "Giải pháp in ấn, tài liệu và số hóa cho Tập đoàn – Tổng công ty",
        "url": "https://huongsonco.com.vn/giai-phap/tap-doan-tong-cong-ty/"
      }
    ]
  }
]
</script>
@endsection

@section('content')
  <!-- HERO CAROUSEL BANNER SLIDER -->
  <section id="hero-carousel" class="relative bg-[#10203C] min-h-[580px] sm:min-h-[620px] lg:min-h-[660px] flex items-center overflow-hidden select-none">
    
    <!-- SLIDE 1: IN ĐỀ THI DUPLO -->
    <div class="hero-slide absolute inset-0 transition-opacity duration-700 ease-in-out flex items-center opacity-100 z-10 pointer-events-auto" data-slide-index="0">
      <div class="absolute inset-0 z-0">
        <img src="/assets/images/hero-education.jpg" alt="Giải pháp in sao đề thi tốc độ cao Duplo" class="w-full h-full object-cover object-center" />
        <div class="absolute inset-0 bg-gradient-to-r from-[#10203C] via-[#10203C]/90 to-[#10203C]/50"></div>
      </div>
      <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
          <div class="lg:col-span-7 text-white">
            <div class="inline-flex items-center space-x-2 bg-[#1A9900]/25 border border-[#1A9900]/60 px-3.5 py-1.5 mb-4 text-[#5eb74c] text-xs font-bold uppercase tracking-wider backdrop-blur">
              <span class="w-2 h-2 rounded-full bg-[#5eb74c] animate-pulse"></span>
              <span>Độc quyền phân phối máy in Duplo Nhật Bản</span>
            </div>
            <h1 class="hero-heading text-2xl sm:text-3xl lg:text-[38px] xl:text-[42px] font-bold text-white mb-4">
              HỆ THỐNG IN SAO ĐỀ THI BẢO MẬT & TỐC ĐỘ CAO DUPLO
            </h1>
            <p class="text-base sm:text-lg text-gray-200 mb-4 font-medium leading-relaxed">
              Đáp ứng nghiêm ngặt quy chế bảo mật đề thi Quốc gia · Công suất vượt trội 130–150 bản/phút · Chi phí chỉ từ 30đ/trang in.
            </p>
            <div class="flex flex-wrap items-center gap-y-2 gap-x-4 text-xs sm:text-sm text-gray-300 mb-8 font-medium">
              <span class="inline-flex items-center"><i class="fa-solid fa-circle-check text-[#5eb74c] mr-1.5"></i>300+ Kỳ thi triển khai an toàn</span>
              <span class="inline-flex items-center"><i class="fa-solid fa-circle-check text-[#5eb74c] mr-1.5"></i>Trực kỹ thuật 24/7 tại Hội đồng thi</span>
              <span class="inline-flex items-center"><i class="fa-solid fa-circle-check text-[#5eb74c] mr-1.5"></i>Sẵn sàng 100% máy dự phòng</span>
            </div>
            <div class="flex flex-wrap items-center gap-4">
              <a href="/giai-phap/giao-duc/in-de-thi/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition flex items-center space-x-2 shadow-lg shadow-[#1A9900]/30">
                <span>Phương án in đề thi</span>
                <i class="fa-solid fa-arrow-right text-[11px]"></i>
              </a>
              <a href="/san-pham/may-in-nhan-ban-toc-do-cao/" data-ga="cta_click" class="border border-gray-400 hover:border-white text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition backdrop-blur bg-black/20">
                Xem dòng máy Duplo
              </a>
            </div>
          </div>
          <!-- SLIDE 1 FOREGROUND PRODUCT SHOWCASE CARD -->
          <div class="lg:col-span-5 relative mt-6 lg:mt-0">
            <div class="relative mx-auto max-w-[440px] lg:max-w-none">
              <div class="absolute -inset-2 bg-gradient-to-tr from-[#1A9900]/35 to-blue-500/25 rounded-2xl blur-xl opacity-75 pointer-events-none"></div>
              <div class="relative bg-gradient-to-b from-[#0d1829]/95 via-[#10203c]/90 to-[#0b1524]/95 border-2 border-white/20 p-5 sm:p-6 backdrop-blur-xl shadow-2xl overflow-hidden group">
                <div class="flex items-center justify-between gap-2 mb-3 pb-3 border-b border-white/15">
                  <span class="inline-flex items-center gap-1.5 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 shadow-md border border-[#5eb74c]/50 uppercase tracking-wide">
                    <i class="fa-solid fa-bolt text-[11px]"></i>
                    <span>Tốc độ 130–150 bản/phút</span>
                  </span>
                  <span class="text-[11px] font-bold text-gray-300 flex items-center gap-1">
                    <i class="fa-solid fa-shield-halved text-[#5eb74c]"></i>
                    <span>Bảo mật đề thi 100%</span>
                  </span>
                </div>
                <div class="relative py-4 px-2 flex items-center justify-center min-h-[220px] sm:min-h-[240px] bg-gradient-to-b from-white/[0.07] to-transparent border border-white/10">
                  <img src="/assets/images/products/duplo-dp-x550.jpg" alt="Máy in nhân bản siêu tốc Duplo DP-X550" class="max-h-[200px] sm:max-h-[230px] w-auto object-contain mx-auto drop-shadow-[0_20px_35px_rgba(0,0,0,0.85)] transform group-hover:scale-105 transition-transform duration-500" loading="eager" />
                </div>
                <div class="mt-4 pt-3 border-t border-white/15 grid grid-cols-2 gap-2 text-xs">
                  <div class="bg-white/5 border border-white/10 px-3 py-2">
                    <div class="text-[10.5px] text-gray-400">Độ nét bản in:</div>
                    <div class="font-bold text-white text-[13px]">600 × 600 DPI</div>
                  </div>
                  <div class="bg-white/5 border border-white/10 px-3 py-2">
                    <div class="text-[10.5px] text-gray-400">Trực kỹ thuật thi:</div>
                    <div class="font-bold text-[#5eb74c] text-[13px] flex items-center gap-1">
                      <i class="fa-solid fa-headset text-[11px]"></i>
                      <span>24/7 cắm chốt</span>
                    </div>
                  </div>
                </div>
                <div class="mt-3 flex items-center justify-between text-[11px] text-gray-300">
                  <span class="text-gray-400">Hội đồng thi THPT & Đại học</span>
                  <a href="/san-pham/may-in-nhan-ban-toc-do-cao/" class="text-[#5eb74c] hover:underline font-semibold flex items-center gap-1">
                    <span>Xem thông số Duplo</span>
                    <i class="fa-solid fa-arrow-right text-[9px]"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SLIDE 2: CHO THUÊ MÁY PHOTOCOPY TOSHIBA & RICOH -->
    <div class="hero-slide absolute inset-0 transition-opacity duration-700 ease-in-out flex items-center opacity-0 z-0 pointer-events-none" data-slide-index="1">
      <div class="absolute inset-0 z-0">
        <img src="/assets/images/hero-office.jpg" alt="Cho thuê máy photocopy Toshiba và Ricoh" class="w-full h-full object-cover object-center" />
        <div class="absolute inset-0 bg-gradient-to-r from-[#10203C] via-[#10203C]/90 to-[#10203C]/50"></div>
      </div>
      <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
          <div class="lg:col-span-7 text-white">
            <div class="inline-flex items-center space-x-2 bg-[#1A9900]/25 border border-[#1A9900]/60 px-3.5 py-1.5 mb-4 text-[#5eb74c] text-xs font-bold uppercase tracking-wider backdrop-blur">
              <span class="w-2 h-2 rounded-full bg-[#5eb74c] animate-pulse"></span>
              <span>Dịch vụ trọn gói cho Doanh nghiệp & Cơ quan</span>
            </div>
            <h2 class="hero-heading text-2xl sm:text-3xl lg:text-[38px] xl:text-[42px] font-bold text-white mb-4">
              THUÊ MÁY PHOTOCOPY CHÍNH HÃNG TOSHIBA & RICOH
            </h2>
            <p class="text-base sm:text-lg text-gray-200 mb-4 font-medium leading-relaxed">
              Không vốn đầu tư · Miễn phí 100% mực in, linh kiện & bảo trì · Phản ứng nhanh ≤ 2 giờ có mặt xử lý.
            </p>
            <div class="flex flex-wrap items-center gap-y-2 gap-x-4 text-xs sm:text-sm text-gray-300 mb-8 font-medium">
              <span class="inline-flex items-center"><i class="fa-solid fa-circle-check text-[#5eb74c] mr-1.5"></i>Chỉ từ 800.000đ/tháng</span>
              <span class="inline-flex items-center"><i class="fa-solid fa-circle-check text-[#5eb74c] mr-1.5"></i>Dùng thử 07 ngày miễn phí</span>
              <span class="inline-flex items-center"><i class="fa-solid fa-circle-check text-[#5eb74c] mr-1.5"></i>Đổi máy mới nếu phát sinh lỗi 24h</span>
            </div>
            <div class="flex flex-wrap items-center gap-4">
              <a href="/giai-phap/cho-thue-thiet-bi/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition flex items-center space-x-2 shadow-lg shadow-[#1A9900]/30">
                <span>Báo giá thuê máy</span>
                <i class="fa-solid fa-arrow-right text-[11px]"></i>
              </a>
              <a href="/san-pham/photocopy-may-da-chuc-nang/" data-ga="cta_click" class="border border-gray-400 hover:border-white text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition backdrop-blur bg-black/20">
                Xem máy Photocopy
              </a>
            </div>
          </div>
          <!-- SLIDE 2 FOREGROUND PRODUCT SHOWCASE CARD -->
          <div class="lg:col-span-5 relative mt-6 lg:mt-0">
            <div class="relative mx-auto max-w-[440px] lg:max-w-none">
              <div class="absolute -inset-2 bg-gradient-to-tr from-[#1A9900]/35 to-cyan-500/25 rounded-2xl blur-xl opacity-75 pointer-events-none"></div>
              <div class="relative bg-gradient-to-b from-[#0d1829]/95 via-[#10203c]/90 to-[#0b1524]/95 border-2 border-white/20 p-5 sm:p-6 backdrop-blur-xl shadow-2xl overflow-hidden group">
                <div class="flex items-center justify-between gap-2 mb-3 pb-3 border-b border-white/15">
                  <span class="inline-flex items-center gap-1.5 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 shadow-md border border-[#5eb74c]/50 uppercase tracking-wide">
                    <i class="fa-solid fa-tag text-[11px]"></i>
                    <span>Chỉ từ 800k/tháng</span>
                  </span>
                  <span class="text-[11px] font-bold text-gray-300 flex items-center gap-1">
                    <i class="fa-solid fa-arrows-rotate text-[#5eb74c]"></i>
                    <span>Đổi mới sau 24h lỗi</span>
                  </span>
                </div>
                <div class="relative py-4 px-2 flex items-center justify-center min-h-[220px] sm:min-h-[240px] bg-gradient-to-b from-white/[0.07] to-transparent border border-white/10">
                  <img src="/assets/images/banners/toshiba_mfp_product_1787905812744.jpg" alt="Máy photocopy đa chức năng Toshiba e-Studio" class="max-h-[200px] sm:max-h-[230px] w-auto object-contain mx-auto drop-shadow-[0_20px_35px_rgba(0,0,0,0.85)] transform group-hover:scale-105 transition-transform duration-500" loading="eager" />
                </div>
                <div class="mt-4 pt-3 border-t border-white/15 grid grid-cols-2 gap-2 text-xs">
                  <div class="bg-white/5 border border-white/10 px-3 py-2">
                    <div class="text-[10.5px] text-gray-400">Đặt cọc hợp đồng:</div>
                    <div class="font-bold text-white text-[13px]">0 ĐỒNG (Linh hoạt)</div>
                  </div>
                  <div class="bg-white/5 border border-white/10 px-3 py-2">
                    <div class="text-[10.5px] text-gray-400">Sự cố kỹ thuật:</div>
                    <div class="font-bold text-[#5eb74c] text-[13px] flex items-center gap-1">
                      <i class="fa-solid fa-clock text-[11px]"></i>
                      <span>≤ 2h có mặt</span>
                    </div>
                  </div>
                </div>
                <div class="mt-3 flex items-center justify-between text-[11px] text-gray-300">
                  <span class="text-gray-400">500+ Doanh nghiệp & Ngân hàng</span>
                  <a href="/san-pham/photocopy-may-da-chuc-nang/" class="text-[#5eb74c] hover:underline font-semibold flex items-center gap-1">
                    <span>Xem chi tiết máy</span>
                    <i class="fa-solid fa-arrow-right text-[9px]"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SLIDE 3: SCAN VÀ SỐ HÓA TÀI LIỆU -->
    <div class="hero-slide absolute inset-0 transition-opacity duration-700 ease-in-out flex items-center opacity-0 z-0 pointer-events-none" data-slide-index="2">
      <div class="absolute inset-0 z-0">
        <img src="/assets/images/hero-solutions.jpg" alt="Giải pháp Scan và Số hóa tài liệu lưu trữ" class="w-full h-full object-cover object-center" />
        <div class="absolute inset-0 bg-gradient-to-r from-[#10203C] via-[#10203C]/90 to-[#10203C]/50"></div>
      </div>
      <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
          <div class="lg:col-span-7 text-white">
            <div class="inline-flex items-center space-x-2 bg-[#1A9900]/25 border border-[#1A9900]/60 px-3.5 py-1.5 mb-4 text-[#5eb74c] text-xs font-bold uppercase tracking-wider backdrop-blur">
              <span class="w-2 h-2 rounded-full bg-[#5eb74c] animate-pulse"></span>
              <span>Chuyển đổi số & Lưu trữ điện tử an toàn</span>
            </div>
            <h2 class="hero-heading text-2xl sm:text-3xl lg:text-[38px] xl:text-[42px] font-bold text-white mb-4">
              GIẢI PHÁP SCAN & SỐ HÓA HỒ SƠ TỰ ĐỘNG RICOH
            </h2>
            <p class="text-base sm:text-lg text-gray-200 mb-4 font-medium leading-relaxed">
              Máy quét công nghiệp tốc độ cao · Tự động bóc tách dữ liệu OCR tiếng Việt · Kết nối phần mềm quản lý kho lưu trữ.
            </p>
            <div class="flex flex-wrap items-center gap-y-2 gap-x-4 text-xs sm:text-sm text-gray-300 mb-8 font-medium">
              <span class="inline-flex items-center"><i class="fa-solid fa-circle-check text-[#5eb74c] mr-1.5"></i>Tốc độ quét tới 140 trang/phút</span>
              <span class="inline-flex items-center"><i class="fa-solid fa-circle-check text-[#5eb74c] mr-1.5"></i>Chuẩn số hóa lưu trữ Nhà nước</span>
              <span class="inline-flex items-center"><i class="fa-solid fa-circle-check text-[#5eb74c] mr-1.5"></i>Bảo mật phân quyền tuyệt đối</span>
            </div>
            <div class="flex flex-wrap items-center gap-4">
              <a href="/giai-phap/scan-so-hoa/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition flex items-center space-x-2 shadow-lg shadow-[#1A9900]/30">
                <span>Tư vấn giải pháp scan</span>
                <i class="fa-solid fa-arrow-right text-[11px]"></i>
              </a>
              <a href="/san-pham/may-scan-so-hoa/" data-ga="cta_click" class="border border-gray-400 hover:border-white text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition backdrop-blur bg-black/20">
                Xem thiết bị Scan
              </a>
            </div>
          </div>
          <!-- SLIDE 3 FOREGROUND PRODUCT SHOWCASE CARD -->
          <div class="lg:col-span-5 relative mt-6 lg:mt-0">
            <div class="relative mx-auto max-w-[440px] lg:max-w-none">
              <div class="absolute -inset-2 bg-gradient-to-tr from-[#1A9900]/35 to-indigo-500/25 rounded-2xl blur-xl opacity-75 pointer-events-none"></div>
              <div class="relative bg-gradient-to-b from-[#0d1829]/95 via-[#10203c]/90 to-[#0b1524]/95 border-2 border-white/20 p-5 sm:p-6 backdrop-blur-xl shadow-2xl overflow-hidden group">
                <div class="flex items-center justify-between gap-2 mb-3 pb-3 border-b border-white/15">
                  <span class="inline-flex items-center gap-1.5 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 shadow-md border border-[#5eb74c]/50 uppercase tracking-wide">
                    <i class="fa-solid fa-bolt text-[11px]"></i>
                    <span>Tốc độ 140 trang/phút</span>
                  </span>
                  <span class="text-[11px] font-bold text-gray-300 flex items-center gap-1">
                    <i class="fa-solid fa-file-lines text-[#5eb74c]"></i>
                    <span>OCR Tiếng Việt > 98.5%</span>
                  </span>
                </div>
                <div class="relative py-4 px-2 flex items-center justify-center min-h-[220px] sm:min-h-[240px] bg-gradient-to-b from-white/[0.07] to-transparent border border-white/10">
                  <img src="/assets/images/banners/highspeed_scanner_1787905830483.jpg" alt="Máy quét tài liệu công nghiệp tốc độ cao Ricoh fi-8170" class="max-h-[200px] sm:max-h-[230px] w-auto object-contain mx-auto drop-shadow-[0_20px_35px_rgba(0,0,0,0.85)] transform group-hover:scale-105 transition-transform duration-500" loading="eager" />
                </div>
                <div class="mt-4 pt-3 border-t border-white/15 grid grid-cols-2 gap-2 text-xs">
                  <div class="bg-white/5 border border-white/10 px-3 py-2">
                    <div class="text-[10.5px] text-gray-400">Khay nạp ADF:</div>
                    <div class="font-bold text-white text-[13px]">100 tờ liên tục</div>
                  </div>
                  <div class="bg-white/5 border border-white/10 px-3 py-2">
                    <div class="text-[10.5px] text-gray-400">Tiêu chuẩn số hóa:</div>
                    <div class="font-bold text-[#5eb74c] text-[13px] flex items-center gap-1">
                      <i class="fa-solid fa-certificate text-[11px]"></i>
                      <span>Chuẩn QG lưu trữ</span>
                    </div>
                  </div>
                </div>
                <div class="mt-3 flex items-center justify-between text-[11px] text-gray-300">
                  <span class="text-gray-400">Hành chính công · Ngân hàng · Y tế</span>
                  <a href="/san-pham/may-scan-so-hoa/" class="text-[#5eb74c] hover:underline font-semibold flex items-center gap-1">
                    <span>Xem các dòng máy Scan</span>
                    <i class="fa-solid fa-arrow-right text-[9px]"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SLIDE 4: VẬT TƯ & MỰC IN FANSIPAN -->
    <div class="hero-slide absolute inset-0 transition-opacity duration-700 ease-in-out flex items-center opacity-0 z-0 pointer-events-none" data-slide-index="3">
      <div class="absolute inset-0 z-0">
        <img src="/assets/images/hero-projects.jpg" alt="Vật tư tiêu hao và mực in cao cấp FANSIPAN" class="w-full h-full object-cover object-center" />
        <div class="absolute inset-0 bg-gradient-to-r from-[#10203C] via-[#10203C]/90 to-[#10203C]/50"></div>
      </div>
      <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
          <div class="lg:col-span-7 text-white">
            <div class="inline-flex items-center space-x-2 bg-[#1A9900]/25 border border-[#1A9900]/60 px-3.5 py-1.5 mb-4 text-[#5eb74c] text-xs font-bold uppercase tracking-wider backdrop-blur">
              <span class="w-2 h-2 rounded-full bg-[#5eb74c] animate-pulse"></span>
              <span>Thương hiệu mực & vật tư độc quyền Hương Sơn</span>
            </div>
            <h2 class="hero-heading text-2xl sm:text-3xl lg:text-[38px] xl:text-[42px] font-bold text-white mb-4">
              MỰC IN & VẬT TƯ TIÊU HAO CHẤT LƯỢNG CAO FANSIPAN
            </h2>
            <p class="text-base sm:text-lg text-gray-200 mb-4 font-medium leading-relaxed">
              Đậm nét, bền màu · Tối ưu chi phí trang in lên tới 40% · Bảo vệ tối đa tuổi thọ cụm sấy và trống từ.
            </p>
            <div class="flex flex-wrap items-center gap-y-2 gap-x-4 text-xs sm:text-sm text-gray-300 mb-8 font-medium">
              <span class="inline-flex items-center"><i class="fa-solid fa-circle-check text-[#5eb74c] mr-1.5"></i>Tiết kiệm 40% so với mực hãng</span>
              <span class="inline-flex items-center"><i class="fa-solid fa-circle-check text-[#5eb74c] mr-1.5"></i>Tương thích 100% Duplo, Toshiba, Ricoh</span>
              <span class="inline-flex items-center"><i class="fa-solid fa-circle-check text-[#5eb74c] mr-1.5"></i>Chính sách bảo hành 1 đổi 1</span>
            </div>
            <div class="flex flex-wrap items-center gap-4">
              <a href="/san-pham/muc-vat-tu-fansipan/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition flex items-center space-x-2 shadow-lg shadow-[#1A9900]/30">
                <span>Xem vật tư FANSIPAN</span>
                <i class="fa-solid fa-arrow-right text-[11px]"></i>
              </a>
              <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="border border-gray-400 hover:border-white text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition backdrop-blur bg-black/20">
                Chính sách chiết khấu đại lý
              </a>
            </div>
          </div>
          <!-- SLIDE 4 FOREGROUND PRODUCT SHOWCASE CARD -->
          <div class="lg:col-span-5 relative mt-6 lg:mt-0">
            <div class="relative mx-auto max-w-[440px] lg:max-w-none">
              <div class="absolute -inset-2 bg-gradient-to-tr from-[#1A9900]/35 to-emerald-500/25 rounded-2xl blur-xl opacity-75 pointer-events-none"></div>
              <div class="relative bg-gradient-to-b from-[#0d1829]/95 via-[#10203c]/90 to-[#0b1524]/95 border-2 border-white/20 p-5 sm:p-6 backdrop-blur-xl shadow-2xl overflow-hidden group">
                <div class="flex items-center justify-between gap-2 mb-3 pb-3 border-b border-white/15">
                  <span class="inline-flex items-center gap-1.5 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 shadow-md border border-[#5eb74c]/50 uppercase tracking-wide">
                    <i class="fa-solid fa-gem text-[11px]"></i>
                    <span>Tiết kiệm 40% chi phí</span>
                  </span>
                  <span class="text-[11px] font-bold text-gray-300 flex items-center gap-1">
                    <i class="fa-solid fa-check-double text-[#5eb74c]"></i>
                    <span>Tương thích 100% hãng</span>
                  </span>
                </div>
                <div class="relative py-4 px-2 flex items-center justify-center min-h-[220px] sm:min-h-[240px] bg-gradient-to-b from-white/[0.07] to-transparent border border-white/10">
                  <img src="/assets/images/banners/toner_consumables_1787905882459.jpg" alt="Mực in và linh kiện vật tư tiêu hao cao cấp FANSIPAN" class="max-h-[200px] sm:max-h-[230px] w-auto object-contain mx-auto drop-shadow-[0_20px_35px_rgba(0,0,0,0.85)] transform group-hover:scale-105 transition-transform duration-500" loading="eager" />
                </div>
                <div class="mt-4 pt-3 border-t border-white/15 grid grid-cols-2 gap-2 text-xs">
                  <div class="bg-white/5 border border-white/10 px-3 py-2">
                    <div class="text-[10.5px] text-gray-400">Tỷ lệ lỗi kỹ thuật:</div>
                    <div class="font-bold text-white text-[13px]">&lt; 0.1% tiêu chuẩn</div>
                  </div>
                  <div class="bg-white/5 border border-white/10 px-3 py-2">
                    <div class="text-[10.5px] text-gray-400">Cam kết chất lượng:</div>
                    <div class="font-bold text-[#5eb74c] text-[13px] flex items-center gap-1">
                      <i class="fa-solid fa-rotate text-[11px]"></i>
                      <span>1 đổi 1 tức thì</span>
                    </div>
                  </div>
                </div>
                <div class="mt-3 flex items-center justify-between text-[11px] text-gray-300">
                  <span class="text-gray-400">Kho vật tư sẵn sàng phục vụ 24/7</span>
                  <a href="/san-pham/muc-vat-tu-fansipan/" class="text-[#5eb74c] hover:underline font-semibold flex items-center gap-1">
                    <span>Xem danh mục FANSIPAN</span>
                    <i class="fa-solid fa-arrow-right text-[9px]"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- PREV / NEXT BUTTONS -->
    <button type="button" aria-label="Slide trước" class="hero-prev absolute left-3 sm:left-6 top-1/2 -translate-y-1/2 z-30 w-11 h-11 bg-black/40 hover:bg-[#1A9900] text-white flex items-center justify-center backdrop-blur border border-white/20 transition-all duration-200">
      <i class="fa-solid fa-chevron-left text-sm"></i>
    </button>
    <button type="button" aria-label="Slide tiếp theo" class="hero-next absolute right-3 sm:right-6 top-1/2 -translate-y-1/2 z-30 w-11 h-11 bg-black/40 hover:bg-[#1A9900] text-white flex items-center justify-center backdrop-blur border border-white/20 transition-all duration-200">
      <i class="fa-solid fa-chevron-right text-sm"></i>
    </button>

    <!-- DOT INDICATORS -->
    <div class="absolute bottom-6 sm:bottom-8 lg:bottom-20 left-1/2 -translate-x-1/2 z-30 flex items-center space-x-2 sm:space-x-3">
      <button type="button" aria-label="Slide 1" data-index="0" class="hero-dot w-10 h-2 bg-[#1A9900] transition-all duration-300 cursor-pointer"></button>
      <button type="button" aria-label="Slide 2" data-index="1" class="hero-dot w-3 h-2 bg-white/40 hover:bg-white/70 transition-all duration-300 cursor-pointer"></button>
      <button type="button" aria-label="Slide 3" data-index="2" class="hero-dot w-3 h-2 bg-white/40 hover:bg-white/70 transition-all duration-300 cursor-pointer"></button>
      <button type="button" aria-label="Slide 4" data-index="3" class="hero-dot w-3 h-2 bg-white/40 hover:bg-white/70 transition-all duration-300 cursor-pointer"></button>
    </div>

  </section>
  <section class="bg-[#181924] pb-12 pt-0">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8"><div class="grid grid-cols-1 md:grid-cols-3 gap-6 -mt-14 relative z-20">
        <a href="/giai-phap/giao-duc/in-de-thi/" data-ga="cta_click" class="bg-[#181924] hover:bg-[#1A9900] border border-gray-700/80 p-8 text-white transition-colors duration-300 group">
          <div class="w-11 h-11 bg-white/10 group-hover:bg-white/20 flex items-center justify-center mb-6"><i class="fa-solid fa-print text-lg"></i></div>
          <h3 class="text-lg font-bold text-white mb-2 uppercase tracking-wider">Thuê máy in đề thi</h3>
          <p class="text-gray-300 group-hover:text-white/90 text-sm leading-relaxed">Duplo tốc độ cao, kèm máy dự phòng và kỹ thuật trực.</p>
        </a>
        <a href="/giai-phap/cho-thue-thiet-bi/" data-ga="cta_click" class="bg-[#181924] hover:bg-[#1A9900] border border-gray-700/80 p-8 text-white transition-colors duration-300 group">
          <div class="w-11 h-11 bg-white/10 group-hover:bg-white/20 flex items-center justify-center mb-6"><i class="fa-solid fa-copy text-lg"></i></div>
          <h3 class="text-lg font-bold text-white mb-2 uppercase tracking-wider">Thuê máy photocopy</h3>
          <p class="text-gray-300 group-hover:text-white/90 text-sm leading-relaxed">Theo tháng hoặc theo sản lượng, có bảo trì và vật tư.</p>
        </a>
        <a href="/giai-phap/scan-so-hoa/" data-ga="cta_click" class="bg-[#181924] hover:bg-[#1A9900] border border-gray-700/80 p-8 text-white transition-colors duration-300 group">
          <div class="w-11 h-11 bg-white/10 group-hover:bg-white/20 flex items-center justify-center mb-6"><i class="fa-solid fa-file-arrow-up text-lg"></i></div>
          <h3 class="text-lg font-bold text-white mb-2 uppercase tracking-wider">Khảo sát số hóa</h3>
          <p class="text-gray-300 group-hover:text-white/90 text-sm leading-relaxed">Scan – OCR – chuẩn hóa dữ liệu cho hồ sơ, văn bằng.</p>
        </a></div></div>
  </section>
  <section class="py-8 bg-white border-b border-gray-200">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8"><div class="flex flex-wrap items-center justify-center md:justify-between gap-8"><span class="text-sm md:text-base font-extrabold tracking-wider text-gray-400 hover:text-[#181924] transition">DUPLO</span><span class="text-sm md:text-base font-extrabold tracking-wider text-gray-400 hover:text-[#181924] transition">TOSHIBA</span><span class="text-sm md:text-base font-extrabold tracking-wider text-gray-400 hover:text-[#181924] transition">RICOH</span><span class="text-sm md:text-base font-extrabold tracking-wider text-gray-400 hover:text-[#181924] transition">KONICA MINOLTA</span><span class="text-sm md:text-base font-extrabold tracking-wider text-gray-400 hover:text-[#181924] transition">HP</span><span class="text-sm md:text-base font-extrabold tracking-wider text-gray-400 hover:text-[#181924] transition">FANSIPAN</span></div></div>
  </section>
  <section class="py-16 bg-white">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        <div class="lg:col-span-5">
          <span class="font-handwriting text-3xl text-[#5eb74c] font-bold block mb-2">Vì sao chọn Hương Sơn?</span>
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#181923] mb-6 leading-tight">Từ máy đến giải pháp vận hành</h2>
          <p class="text-gray-600 text-sm sm:text-base mb-2 leading-relaxed">
            Hương Sơn không chỉ bán một chiếc máy — Hương Sơn cung cấp năng lực xử lý tài liệu trọn vòng đời: thiết bị, cho thuê, vật tư, kỹ thuật và số hóa.
          </p>
        </div>
        <div class="lg:col-span-7 space-y-6">
        <div class="flex items-start space-x-4">
          <div class="w-10 h-10 bg-[#1A9900] text-white flex items-center justify-center flex-shrink-0 mt-1"><i class="fa-solid fa-layer-group text-base"></i></div>
          <div><h3 class="text-base font-bold text-[#181923] mb-1">Đa thương hiệu</h3><p class="text-sm text-gray-500 leading-relaxed">Đại lý ủy quyền Duplo, Toshiba tại miền Bắc từ 2017; đại lý Konica Minolta từ 2021 — chọn đúng thiết bị, không bó buộc một hãng.</p></div>
        </div>
        <div class="flex items-start space-x-4">
          <div class="w-10 h-10 bg-[#1A9900] text-white flex items-center justify-center flex-shrink-0 mt-1"><i class="fa-solid fa-headset text-base"></i></div>
          <div><h3 class="text-base font-bold text-[#181923] mb-1">Dịch vụ đi cùng thiết bị</h3><p class="text-sm text-gray-500 leading-relaxed">Bảo trì, kỹ thuật trực, máy dự phòng và cam kết thời gian xử lý theo cấp độ sự cố.</p></div>
        </div>
        <div class="flex items-start space-x-4">
          <div class="w-10 h-10 bg-[#1A9900] text-white flex items-center justify-center flex-shrink-0 mt-1"><i class="fa-solid fa-graduation-cap text-base"></i></div>
          <div><h3 class="text-base font-bold text-[#181923] mb-1">Chuyên sâu Giáo dục</h3><p class="text-sm text-gray-500 leading-relaxed">Kinh nghiệm thực tế in sao đề thi cho Sở GD&amp;ĐT Vĩnh Phúc và Quảng Trị, có hồ sơ hợp đồng đầy đủ.</p></div>
        </div>
        <div class="flex items-start space-x-4">
          <div class="w-10 h-10 bg-[#1A9900] text-white flex items-center justify-center flex-shrink-0 mt-1"><i class="fa-solid fa-truck-fast text-base"></i></div>
          <div><h3 class="text-base font-bold text-[#181923] mb-1">Cho thuê &amp; Managed Print</h3><p class="text-sm text-gray-500 leading-relaxed">Từ thuê máy theo đợt đến quản lý trọn gói đội thiết bị, tính theo sản lượng và SLA.</p></div>
        </div>
        <div class="flex items-start space-x-4">
          <div class="w-10 h-10 bg-[#1A9900] text-white flex items-center justify-center flex-shrink-0 mt-1"><i class="fa-solid fa-boxes-stacked text-base"></i></div>
          <div><h3 class="text-base font-bold text-[#181923] mb-1">Vật tư Fansipan</h3><p class="text-sm text-gray-500 leading-relaxed">Thương hiệu vật tư riêng — mực, cụm mực, linh kiện tương thích nhiều dòng máy.</p></div>
        </div></div>
      </div>
    </div>
  </section>
  <section class="py-14 bg-[#181924] text-white border-y border-gray-800/60">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8"><div class="grid grid-cols-2 md:grid-cols-4 gap-y-8 gap-x-2 sm:gap-x-4 text-center">
        <div class="flex flex-col items-center justify-center px-4 sm:px-6 lg:px-8 py-3 ">
          <div class="text-4xl sm:text-5xl font-bold text-[#1A9900] mb-2 tracking-tight">2008</div>
          <h4 class="text-[13px] sm:text-[13.5px] font-bold text-gray-200 uppercase tracking-wide leading-relaxed max-w-[220px] mx-auto">Năm thành lập</h4>
        </div>
        <div class="flex flex-col items-center justify-center px-4 sm:px-6 lg:px-8 py-3 border-l border-gray-800">
          <div class="text-4xl sm:text-5xl font-bold text-[#1A9900] mb-2 tracking-tight">2017</div>
          <h4 class="text-[13px] sm:text-[13.5px] font-bold text-gray-200 uppercase tracking-wide leading-relaxed max-w-[220px] mx-auto">Đại lý ủy quyền Duplo &amp; Toshiba miền Bắc</h4>
        </div>
        <div class="flex flex-col items-center justify-center px-4 sm:px-6 lg:px-8 py-3 border-l-0 md:border-l border-gray-800">
          <div class="text-4xl sm:text-5xl font-bold text-[#1A9900] mb-2 tracking-tight">127</div>
          <h4 class="text-[13px] sm:text-[13.5px] font-bold text-gray-200 uppercase tracking-wide leading-relaxed max-w-[220px] mx-auto">Máy Toshiba cung cấp cho Vietcombank (2024)</h4>
        </div>
        <div class="flex flex-col items-center justify-center px-4 sm:px-6 lg:px-8 py-3 border-l border-gray-800">
          <div class="text-4xl sm:text-5xl font-bold text-[#1A9900] mb-2 tracking-tight">3</div>
          <h4 class="text-[13px] sm:text-[13.5px] font-bold text-gray-200 uppercase tracking-wide leading-relaxed max-w-[220px] mx-auto">Cấp độ SLA cam kết thời gian xử lý (P1/P2/P3)</h4>
        </div></div></div>
  </section>

  <!-- AUTHORIZED BRANDS LOGOS STRIP -->
  <section class="py-8 bg-white border-b border-gray-200/80">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="flex-shrink-0 text-center md:text-left">
          <span class="text-[11px] font-bold uppercase tracking-[0.2em] text-[#1A9900] block mb-0.5">Đối tác chiến lược</span>
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
  </section>
  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-3">Ba trụ cột</span>
        <h2 class="text-2xl sm:text-[34px] font-bold text-[#181923] leading-tight">Thiết bị – Giải pháp – Dịch vụ</h2>
      </div><div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <a href="/san-pham/" class="relative group overflow-hidden bg-[#181924] h-[340px] flex flex-col justify-end p-8 text-white">
          <img src="/assets/images/products/toshiba-e-studio-2829a.jpg" alt="Thiết bị" loading="lazy" class="absolute inset-0 w-full h-full object-cover opacity-50 group-hover:scale-105 group-hover:opacity-35 transition duration-500" />
          <div class="relative z-10">
            <h3 class="text-xl font-bold text-white mb-2">Thiết bị</h3>
            <p class="text-sm text-gray-300 mb-4">Photocopy, in nhân bản siêu tốc, scan, in Laser</p>
            <span class="inline-flex items-center space-x-2 text-[#1A9900] group-hover:text-white font-bold text-xs uppercase tracking-wider transition">
              <span>Xem chi tiết</span><i class="fa-solid fa-arrow-right text-[10px]"></i>
            </span>
          </div>
        </a>
        <a href="/giai-phap/" class="relative group overflow-hidden bg-[#181924] h-[340px] flex flex-col justify-end p-8 text-white">
          <img src="/assets/images/products/duplo-dp-x550.jpg" alt="Giải pháp" loading="lazy" class="absolute inset-0 w-full h-full object-cover opacity-50 group-hover:scale-105 group-hover:opacity-35 transition duration-500" />
          <div class="relative z-10">
            <h3 class="text-xl font-bold text-white mb-2">Giải pháp</h3>
            <p class="text-sm text-gray-300 mb-4">Giáo dục, Cơ quan Nhà nước, Ngân hàng, Doanh nghiệp</p>
            <span class="inline-flex items-center space-x-2 text-[#1A9900] group-hover:text-white font-bold text-xs uppercase tracking-wider transition">
              <span>Xem chi tiết</span><i class="fa-solid fa-arrow-right text-[10px]"></i>
            </span>
          </div>
        </a>
        <a href="/dich-vu/" class="relative group overflow-hidden bg-[#181924] h-[340px] flex flex-col justify-end p-8 text-white">
          <img src="/assets/images/products/duplo-dfc-122.jpg" alt="Dịch vụ" loading="lazy" class="absolute inset-0 w-full h-full object-cover opacity-50 group-hover:scale-105 group-hover:opacity-35 transition duration-500" />
          <div class="relative z-10">
            <h3 class="text-xl font-bold text-white mb-2">Dịch vụ</h3>
            <p class="text-sm text-gray-300 mb-4">Cho thuê, bảo trì, kỹ thuật, vật tư, số hóa</p>
            <span class="inline-flex items-center space-x-2 text-[#1A9900] group-hover:text-white font-bold text-xs uppercase tracking-wider transition">
              <span>Xem chi tiết</span><i class="fa-solid fa-arrow-right text-[10px]"></i>
            </span>
          </div>
        </a></div>
    </div>
  </section>

  <!-- DUAL PROMOTIONAL CAMPAIGN BANNERS -->
  <section class="py-12 bg-white">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        
        <!-- PROMO BANNER 1: DÙNG THỬ MÁY PHOTOCOPY 07 NGÀY (FOREGROUND SHOWCASE) -->
        <div class="relative overflow-hidden bg-gradient-to-br from-[#0a1526] via-[#10203C] to-[#142646] text-white p-6 sm:p-8 border-t-4 border-[#1A9900] shadow-xl">
          <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 items-center">
            <div class="sm:col-span-7 flex flex-col justify-between">
              <div>
                <div class="inline-flex items-center space-x-2 bg-[#1A9900]/25 border border-[#1A9900]/60 px-3 py-1 mb-3 text-[#5eb74c] text-[11px] font-bold uppercase tracking-wider">
                  <span class="w-2 h-2 bg-[#5eb74c] animate-pulse"></span>
                  <span>Đặc Quyền Doanh Nghiệp</span>
                </div>
                <h3 class="banner-heading text-lg sm:text-xl xl:text-[22px] font-bold text-white mb-2.5 leading-[1.38]">
                  Trải Nghiệm Máy Photocopy Toshiba & Ricoh 07 Ngày Miễn Phí
                </h3>
                <p class="text-gray-300 text-xs sm:text-[13.5px] leading-relaxed mb-4">
                  Không cần đặt cọc. Hương Sơn giao máy, cài đặt in mạng tận nơi kèm 1.000 bản in chất lượng cao để quý khách thẩm định thực tế.
                </p>
                <ul class="space-y-1.5 mb-5 text-xs text-gray-200">
                  <li class="flex items-center space-x-2">
                    <i class="fa-solid fa-circle-check text-[#5eb74c]"></i>
                    <span>Trọn gói mực in & bảo dưỡng 100% miễn phí</span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <i class="fa-solid fa-circle-check text-[#5eb74c]"></i>
                    <span>Đổi sang máy tốc độ cao hơn bất kỳ lúc nào</span>
                  </li>
                </ul>
              </div>
              <div class="flex flex-wrap items-center gap-3 pt-3 border-t border-white/10">
                <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-[11px] uppercase tracking-wider px-5 py-3 transition inline-flex items-center space-x-2 shadow-md shadow-[#1A9900]/30 border border-[#5eb74c]/50">
                  <span>Dùng Thử 07 Ngày</span>
                  <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
                <a href="tel:0913237302" class="text-white hover:text-[#5eb74c] font-bold text-xs transition flex items-center space-x-1.5">
                  <i class="fa-solid fa-phone text-[#5eb74c]"></i>
                  <span>0913.237.302</span>
                </a>
              </div>
            </div>

            <!-- FOREGROUND PRODUCT CARD 1 -->
            <div class="sm:col-span-5 relative">
              <div class="relative bg-gradient-to-b from-white/[0.12] to-white/[0.04] border border-white/20 p-4 backdrop-blur-md shadow-2xl group text-center">
                <div class="absolute top-2.5 left-2.5 bg-[#1A9900] text-white text-[10px] font-bold px-2.5 py-0.5 shadow-md flex items-center gap-1 border border-white/20 z-20">
                  <i class="fa-solid fa-gift text-[9px]"></i>
                  <span>0đ Đặt cọc · Dùng thử 7 ngày</span>
                </div>
                <div class="pt-6 pb-2 px-1 flex items-center justify-center min-h-[160px]">
                  <img src="/assets/images/banners/toshiba_mfp_product_1787905812744.jpg" alt="Máy photocopy đa chức năng Toshiba" class="max-h-[150px] w-auto object-contain mx-auto drop-shadow-[0_15px_25px_rgba(0,0,0,0.7)] transform group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                </div>
                <div class="pt-2.5 border-t border-white/15 flex items-center justify-between text-[11px] text-gray-200">
                  <span class="font-semibold text-white">Toshiba e-Studio</span>
                  <span class="text-[#5eb74c] font-bold">Miễn phí 100% vật tư</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- PROMO BANNER 2: PHÒNG HỌC THÔNG MINH VIEWSONIC & DUPLO (FOREGROUND SHOWCASE) -->
        <div class="relative overflow-hidden bg-gradient-to-br from-[#081f14] via-[#0d2e1e] to-[#123e29] text-white p-6 sm:p-8 border-t-4 border-[#5eb74c] shadow-xl">
          <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 items-center">
            <div class="sm:col-span-7 flex flex-col justify-between">
              <div>
                <div class="inline-flex items-center space-x-2 bg-[#5eb74c]/25 border border-[#5eb74c]/60 px-3 py-1 mb-3 text-[#5eb74c] text-[11px] font-bold uppercase tracking-wider">
                  <span class="w-2 h-2 bg-[#5eb74c] animate-pulse"></span>
                  <span>Hương Sơn Education Solutions</span>
                </div>
                <h3 class="banner-heading text-lg sm:text-xl xl:text-[22px] font-bold text-white mb-2.5 leading-[1.38]">
                  Giải Pháp Phòng Học Thông Minh Chuẩn Quốc Gia ViewSonic & Duplo
                </h3>
                <p class="text-gray-300 text-xs sm:text-[13.5px] leading-relaxed mb-4">
                  Đồng bộ màn hình tương tác thông minh 4K ViewSonic cùng máy in siêu tốc Duplo. Tối ưu tiêu chuẩn cơ sở vật chất trường chuẩn quốc gia.
                </p>
                <ul class="space-y-1.5 mb-5 text-xs text-gray-200">
                  <li class="flex items-center space-x-2">
                    <i class="fa-solid fa-circle-check text-[#5eb74c]"></i>
                    <span>Cảm ứng đa điểm, kính 7H, phần mềm myViewBoard</span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <i class="fa-solid fa-circle-check text-[#5eb74c]"></i>
                    <span>Hỗ trợ trọn gói hồ sơ kỹ thuật & dự toán thầu</span>
                  </li>
                </ul>
              </div>
              <div class="flex flex-wrap items-center gap-3 pt-3 border-t border-white/10">
                <a href="/giai-phap/giao-duc/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-[11px] uppercase tracking-wider px-5 py-3 transition inline-flex items-center space-x-2 shadow-md shadow-[#1A9900]/30 border border-[#5eb74c]/50">
                  <span>Giải Pháp Giáo Dục</span>
                  <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
                <a href="https://zalo.me/0913237302" target="_blank" rel="noopener noreferrer" class="text-white hover:text-[#5eb74c] font-bold text-xs transition flex items-center space-x-1.5">
                  <i class="fa-solid fa-comment-dots text-[#5eb74c]"></i>
                  <span>Tư Vấn Zalo</span>
                </a>
              </div>
            </div>

            <!-- FOREGROUND PRODUCT CARD 2 -->
            <div class="sm:col-span-5 relative">
              <div class="relative bg-gradient-to-b from-white/[0.12] to-white/[0.04] border border-white/20 p-4 backdrop-blur-md shadow-2xl group text-center">
                <div class="absolute top-2.5 left-2.5 bg-[#1A9900] text-white text-[10px] font-bold px-2.5 py-0.5 shadow-md flex items-center gap-1 border border-white/20 z-20">
                  <i class="fa-solid fa-graduation-cap text-[9px]"></i>
                  <span>Chuẩn Trường Quốc Gia</span>
                </div>
                <div class="pt-6 pb-2 px-1 flex items-center justify-center min-h-[160px]">
                  <img src="/assets/images/banners/interactive_smart_display_1787905863259.jpg" alt="Màn hình tương tác thông minh ViewSonic 4K" class="max-h-[150px] w-auto object-contain mx-auto drop-shadow-[0_15px_25px_rgba(0,0,0,0.7)] transform group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                </div>
                <div class="pt-2.5 border-t border-white/15 flex items-center justify-between text-[11px] text-gray-200">
                  <span class="font-semibold text-white">ViewSonic 4K UHD</span>
                  <span class="text-[#5eb74c] font-bold">Cảm ứng đa điểm</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="py-16 bg-[#f5f8fb] ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-3">Danh mục</span>
        <h2 class="text-2xl sm:text-[34px] font-bold text-[#181923] leading-tight">9 nhóm sản phẩm Hương Sơn cung cấp</h2>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-box text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Office Equipment</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/photocopy-may-da-chuc-nang/">Máy photocopy – Máy đa chức năng A3/A4</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Nhóm thiết bị trục chính cho văn phòng, phòng chuyên môn và trường học: máy đen trắng và máy màu, khổ A3, tốc …</p>
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
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Hệ thống đồng bộ từ máy in nhân bản siêu tốc Duplo đến máy phối trang, gấp dập ghim tài liệu sau in — phục vụ …</p>
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
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Giải pháp trọn gói cho ngành giáo dục: không cần vốn đầu tư ban đầu, miễn phí toàn bộ vật tư mực in &amp; linh kiệ…</p>
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
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Nhóm thiết bị in A4 phân tán theo phòng ban, bổ trợ cho máy photocopy A3 trục chính trong mô hình quản lý in ấ…</p>
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
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Nhóm thiết bị phục vụ lớp học và phòng chức năng: màn hình tương tác, bục giảng điện tử, camera vật thể, máy c…</p>
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
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Nhóm vật tư tiêu hao phục vụ cả khách mua máy lẻ và các hợp đồng thuê máy, quản lý in ấn trọn gói — bao gồm th…</p>
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
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Nhóm sản phẩm hỗ trợ công việc văn phòng hằng ngày: kệ hồ sơ, file, giấy các loại, sổ sách và đồ dùng văn phòn…</p>
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
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Nhóm vật tư in ấn thương hiệu riêng FANSIPAN của Hương Sơn: toner, cartridge, cụm mực, trống và bột từ — tương…</p>
            <a href="/san-pham/fansipan/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
      </div><div class="text-center mt-10"><a href="/san-pham/" class="inline-block border border-gray-300 hover:border-[#1A9900] hover:text-[#1A9900] text-[#181923] font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem tất cả sản phẩm</a></div>
    </div>
  </section>

  <section class="bg-[#1A9900] py-4 overflow-hidden">
    <div class="whitespace-nowrap text-white font-bold text-sm uppercase tracking-[0.2em] marquee-track">PRINT &nbsp;•&nbsp; COPY &nbsp;•&nbsp; SCAN &nbsp;•&nbsp; DIGITAL &nbsp;•&nbsp; RENT &nbsp;•&nbsp; SERVICE &nbsp;•&nbsp; PRINT &nbsp;•&nbsp; COPY &nbsp;•&nbsp; SCAN &nbsp;•&nbsp; DIGITAL &nbsp;•&nbsp; RENT &nbsp;•&nbsp; SERVICE &nbsp;•&nbsp; PRINT &nbsp;•&nbsp; COPY &nbsp;•&nbsp; SCAN &nbsp;•&nbsp; DIGITAL &nbsp;•&nbsp; RENT &nbsp;•&nbsp; SERVICE &nbsp;•&nbsp; PRINT &nbsp;•&nbsp; COPY &nbsp;•&nbsp; SCAN &nbsp;•&nbsp; DIGITAL &nbsp;•&nbsp; RENT &nbsp;•&nbsp; SERVICE</div>
  </section>
  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/xxx_home-bg_xxx.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Tải hồ sơ năng lực Hương Sơn</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Thông tin pháp lý, năng lực thiết bị, kỹ thuật, logistics và các dự án đã triển khai.</p>
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

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-3">Năng lực triển khai</span>
        <h2 class="text-2xl sm:text-[34px] font-bold text-[#181923] leading-tight">Sẵn sàng cho cả nhu cầu theo mùa và dài hạn</h2>
      </div><div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="p-7 text-center" style="background-color: rgb(247, 243, 238);">
          <div class="w-14 h-14 bg-[#181924] text-white flex items-center justify-center mx-auto mb-5"><i class="fa-solid fa-warehouse text-xl"></i></div>
          <h3 class="font-bold text-[#181923] mb-2">Kho thiết bị</h3>
          <p class="text-[13.5px] text-gray-500 leading-relaxed">Kho Toshiba, HP MFP, Duplo sẵn sàng triển khai theo hợp đồng.</p>
        </div>
        <div class="p-7 text-center" style="background-color: rgb(247, 243, 238);">
          <div class="w-14 h-14 bg-[#181924] text-white flex items-center justify-center mx-auto mb-5"><i class="fa-solid fa-user-gear text-xl"></i></div>
          <h3 class="font-bold text-[#181923] mb-2">Đội kỹ thuật</h3>
          <p class="text-[13.5px] text-gray-500 leading-relaxed">Kỹ thuật trực hiện trường, hỗ trợ từ xa, xử lý theo cấp độ SLA.</p>
        </div>
        <div class="p-7 text-center" style="background-color: rgb(247, 243, 238);">
          <div class="w-14 h-14 bg-[#181924] text-white flex items-center justify-center mx-auto mb-5"><i class="fa-solid fa-truck text-xl"></i></div>
          <h3 class="font-bold text-[#181923] mb-2">Logistics</h3>
          <p class="text-[13.5px] text-gray-500 leading-relaxed">Vận chuyển, lắp đặt, thu hồi thiết bị đúng tiến độ hợp đồng.</p>
        </div>
        <div class="p-7 text-center" style="background-color: rgb(247, 243, 238);">
          <div class="w-14 h-14 bg-[#181924] text-white flex items-center justify-center mx-auto mb-5"><i class="fa-solid fa-shield-halved text-xl"></i></div>
          <h3 class="font-bold text-[#181923] mb-2">Máy dự phòng</h3>
          <p class="text-[13.5px] text-gray-500 leading-relaxed">Tối thiểu 01 máy dự phòng cho mỗi cụm in của kỳ thi lớn.</p>
        </div></div>
    </div>
  </section>

  <section class="py-16 bg-[#f5f8fb] ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-3">Cam kết dịch vụ</span>
        <h2 class="text-2xl sm:text-[34px] font-bold text-[#181923] leading-tight">SLA rõ ràng theo từng cấp độ sự cố</h2>
      </div>
      <div class="overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-200 bg-white">
          
          <thead class="bg-[#181924]"><tr><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Cấp độ</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Tiếp nhận</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Mục tiêu xử lý</th></tr></thead>
          <tbody>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">P1 – Máy dừng hoàn toàn</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Tiếp nhận ≤ 30 phút</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Có mặt ≤ 2 giờ; thay máy dự phòng nếu cần</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">P2 – Ảnh hưởng chức năng chính</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Tiếp nhận ≤ 30 phút</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Xử lý trong ngày làm việc</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">P3 – Lỗi nhỏ</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Tiếp nhận trong ngày</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Xử lý theo lịch bảo trì</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-3">Case Study</span>
        <h2 class="text-2xl sm:text-[34px] font-bold text-[#181923] leading-tight">Dự án đã triển khai</h2>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Case Study Giáo dục</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/du-an/so-gddt-vinh-phuc-thue-may-photocopy-sao-in-de-thi/">Thuê máy photocopy phục vụ in sao đề thi – Sở GD&amp;ĐT Vĩnh Phúc</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Hương Sơn cung cấp dịch vụ thuê 02 máy photocopy Toshiba 7518A/8518A phục vụ in sao đề thi cho Sở GD&amp;ĐT tỉnh Vĩnh Phúc. Khối lượng…</p>
            <a href="/du-an/so-gddt-vinh-phuc-thue-may-photocopy-sao-in-de-thi/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem case study</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Case Study Giáo dục</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/du-an/so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026/">Thuê máy in nhân bản siêu tốc Duplo phục vụ Kỳ thi Tốt nghiệp THPT 2026</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Theo Hợp đồng kinh tế số 200426/HĐKT/TTB/HS-SGDĐT ngày 12/5/2026, Hương Sơn cung cấp dịch vụ thuê 02 máy in nhân bản siêu tốc phục…</p>
            <a href="/du-an/so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem case study</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Case Study Ngân hàng</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/du-an/vietcombank-cung-cap-may-photocopy/">Cung cấp máy photocopy cho hệ thống Ngân hàng Vietcombank toàn quốc</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Theo thông tin Hương Sơn tự công bố công khai trên website huongsonco.com.vn, năm 2022–2023 Hương Sơn đã cung cấp cho hệ thống Ngâ…</p>
            <a href="/du-an/vietcombank-cung-cap-may-photocopy/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem case study</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
      </div><div class="text-center mt-10"><a href="/du-an/" class="inline-block border border-gray-300 hover:border-[#1A9900] hover:text-[#1A9900] text-[#181923] font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem tất cả dự án</a></div>
    </div>
  </section>

  <!-- FULL-WIDTH 2-HOUR SLA TECHNICAL CAMPAIGN BANNER -->
  <section class="relative bg-gradient-to-r from-[#0d1627] via-[#10203C] to-[#14284b] py-16 text-white overflow-hidden border-t border-b border-[#1A9900]/30">
    <div class="absolute inset-0 opacity-10 pointer-events-none bg-[radial-gradient(#1A9900_1px,transparent_1px)] [background-size:20px_20px]"></div>
    <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="bg-gradient-to-r from-black/60 to-black/30 border border-white/10 p-8 sm:p-12">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-8 mb-10">
          <div class="max-w-2xl text-center lg:text-left">
            <span class="inline-flex items-center space-x-2 text-[#5eb74c] font-bold text-xs uppercase tracking-[0.2em] mb-3">
              <i class="fa-solid fa-shield-halved"></i>
              <span>Cam kết chất lượng dịch vụ kỹ thuật số 1</span>
            </span>
            <h2 class="banner-heading text-2xl sm:text-3xl lg:text-[34px] font-bold text-white mb-4 leading-[1.38]">
              DỊCH VỤ KỸ THUẬT PHẢN ỨNG NHANH: CÓ MẶT TRONG ≤ 2 GIỜ
            </h2>
            <p class="text-gray-300 text-sm sm:text-base leading-relaxed">
              Hương Sơn cam kết kỹ thuật viên có mặt xử lý sự cố tại chỗ trong vòng 2 giờ. Trường hợp lỗi nặng không thể hoàn tất trong 24 giờ, chúng tôi <strong class="text-white underline decoration-[#1A9900]">đổi ngay máy tương đương</strong> để bảo đảm công việc của bạn không gián đoạn một phút nào.
            </p>
          </div>
          <div class="flex flex-col sm:flex-row items-center gap-4 flex-shrink-0">
            <a href="tel:0913237302" data-ga="click_hotline" class="w-full sm:w-auto bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-sm uppercase tracking-wider px-8 py-4 transition flex items-center justify-center space-x-3 shadow-lg shadow-[#1A9900]/30">
              <i class="fa-solid fa-phone-volume text-lg animate-bounce"></i>
              <span>Hotline Kỹ Thuật: 0913.237.302</span>
            </a>
            <a href="https://zalo.me/0913237302" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto border-2 border-white/30 hover:border-[#5eb74c] hover:text-[#5eb74c] text-white font-bold text-sm uppercase tracking-wider px-8 py-4 transition flex items-center justify-center space-x-2">
              <i class="fa-solid fa-comment text-lg"></i>
              <span>Chat Zalo 24/7</span>
            </a>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-8 border-t border-white/10">
          <div class="flex items-start space-x-4">
            <div class="w-12 h-12 bg-[#1A9900]/20 border border-[#1A9900]/50 text-[#5eb74c] flex items-center justify-center flex-shrink-0 text-xl font-bold">
              <i class="fa-solid fa-stopwatch"></i>
            </div>
            <div>
              <h4 class="text-base font-bold text-white mb-1">Xử Lý Khẩn Cấp ≤ 2 Giờ</h4>
              <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">Đội kỹ thuật cắm chốt tại các quận huyện Hà Nội & các tỉnh miền Bắc sẵn sàng lên đường tiếp ứng ngay khi tiếp nhận cuộc gọi.</p>
            </div>
          </div>
          <div class="flex items-start space-x-4">
            <div class="w-12 h-12 bg-[#1A9900]/20 border border-[#1A9900]/50 text-[#5eb74c] flex items-center justify-center flex-shrink-0 text-xl font-bold">
              <i class="fa-solid fa-boxes-stacked"></i>
            </div>
            <div>
              <h4 class="text-base font-bold text-white mb-1">Kho Linh Kiện 100% Sẵn Sàng</h4>
              <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">Đầy đủ mực in, cụm trống, linh kiện chính hãng Toshiba, Duplo, Ricoh, sẵn sàng thay thế ngay mà không cần chờ nhập khẩu.</p>
            </div>
          </div>
          <div class="flex items-start space-x-4">
            <div class="w-12 h-12 bg-[#1A9900]/20 border border-[#1A9900]/50 text-[#5eb74c] flex items-center justify-center flex-shrink-0 text-xl font-bold">
              <i class="fa-solid fa-arrows-rotate"></i>
            </div>
            <div>
              <h4 class="text-base font-bold text-white mb-1">Đổi Máy Thay Thế Trong 24h</h4>
              <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">Miễn phí đổi máy cấu hình tương đương hoặc cao hơn nếu máy phát sinh sự cố nghiêm trọng ảnh hưởng đến hoạt động.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
