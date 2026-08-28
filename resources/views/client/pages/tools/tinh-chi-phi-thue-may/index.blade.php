@extends('client.layouts.app')

@section('title', "Công cụ tính chi phí thuê máy photocopy | Hương Sơn")
@section('meta_description', "Ước tính nhanh chi phí thuê máy photocopy theo sản lượng in hằng tháng và thời hạn thuê.")
@section('canonical', url('/cong-cu/tinh-chi-phi-thue-may/'))
@section('jsonld')
<script type="application/ld+json">
[
  {
    "@context": "https://schema.org",
    "@type": [
      "Organization",
      "LocalBusiness"
    ],
    "@id": "https://huongsonco.com.vn/#organization",
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
      "@type": "Person",
      "name": "Nguyễn Công Thuận"
    },
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Số 27, ngõ 523 phố Minh Khai, phường Vĩnh Tuy, TP. Hà Nội",
      "addressLocality": "Hà Nội",
      "addressCountry": "VN"
    },
    "telephone": [
      "024 3972 9484",
      "0913 237 302",
      "091 113 8583"
    ],
    "email": "info@huongsonco.com.vn",
    "openingHours": "Mo-Sa 08:00-17:30",
    "areaServed": {
      "@type": "Country",
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
        "@type": "Brand",
        "name": "DUPLO"
      },
      {
        "@type": "Brand",
        "name": "TOSHIBA"
      },
      {
        "@type": "Brand",
        "name": "RICOH"
      },
      {
        "@type": "Brand",
        "name": "KONICA MINOLTA"
      },
      {
        "@type": "Brand",
        "name": "HP"
      },
      {
        "@type": "Brand",
        "name": "FANSIPAN"
      }
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Trang chủ",
        "item": "https://huongsonco.com.vn/"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Công cụ",
        "item": "https://huongsonco.com.vn/cong-cu/"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Tính chi phí thuê máy",
        "item": "https://huongsonco.com.vn/cong-cu/tinh-chi-phi-thue-may/"
      }
    ]
  }
]
  </script>
@endsection

@section('content')
<!doctype html>
<html lang="vi" class="scroll-smooth">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Công cụ tính chi phí thuê máy photocopy | Hương Sơn</title>
  <meta name="description" content="Ước tính nhanh chi phí thuê máy photocopy theo sản lượng in hằng tháng và thời hạn thuê." />
  <meta name="robots" content="index,follow" />
  <link rel="canonical" href="https://huongsonco.com.vn/cong-cu/tinh-chi-phi-thue-may/" />

  <meta property="og:type" content="website" />
  <meta property="og:title" content="Công cụ tính chi phí thuê máy photocopy | Hương Sơn" />
  <meta property="og:description" content="Ước tính nhanh chi phí thuê máy photocopy theo sản lượng in hằng tháng và thời hạn thuê." />
  <meta property="og:url" content="https://huongsonco.com.vn/cong-cu/tinh-chi-phi-thue-may/" />
  <meta property="og:image" content="https://huongsonco.com.vn/assets/images/products/duplo-dp-x550.jpg" />

  <link rel="icon" href="/assets/images/brand/favicon.svg" type="image/svg+xml" />
  <link rel="icon" href="/assets/images/favicon-32.png" sizes="32x32" type="image/png" />
  <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png" />

  <!-- Google Fonts: Plus Jakarta Sans + Dancing Script -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              green: '#1A9900',
              greenHover: '#147700',
              greenAccent: '#35a05e',
              dark: '#181924',
              deepDark: '#12131c',
              text: '#5b5d62',
              heading: '#181923',
              beige: 'rgb(247, 243, 238)',
              lightBg: '#f8fafc',
            }
          },
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
            handwriting: ['"Dancing Script"', 'cursive'],
          }
        }
      }
    }
  </script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="/assets/css/custom.css?v=2.0.1" />
  <script type="application/ld+json">
[
  {
    "@context": "https://schema.org",
    "@type": [
      "Organization",
      "LocalBusiness"
    ],
    "@id": "https://huongsonco.com.vn/#organization",
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
      "@type": "Person",
      "name": "Nguyễn Công Thuận"
    },
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Số 27, ngõ 523 phố Minh Khai, phường Vĩnh Tuy, TP. Hà Nội",
      "addressLocality": "Hà Nội",
      "addressCountry": "VN"
    },
    "telephone": [
      "024 3972 9484",
      "0913 237 302",
      "091 113 8583"
    ],
    "email": "info@huongsonco.com.vn",
    "openingHours": "Mo-Sa 08:00-17:30",
    "areaServed": {
      "@type": "Country",
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
        "@type": "Brand",
        "name": "DUPLO"
      },
      {
        "@type": "Brand",
        "name": "TOSHIBA"
      },
      {
        "@type": "Brand",
        "name": "RICOH"
      },
      {
        "@type": "Brand",
        "name": "KONICA MINOLTA"
      },
      {
        "@type": "Brand",
        "name": "HP"
      },
      {
        "@type": "Brand",
        "name": "FANSIPAN"
      }
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Trang chủ",
        "item": "https://huongsonco.com.vn/"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Công cụ",
        "item": "https://huongsonco.com.vn/cong-cu/"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Tính chi phí thuê máy",
        "item": "https://huongsonco.com.vn/cong-cu/tinh-chi-phi-thue-may/"
      }
    ]
  }
]
  </script>
</head>

<body class="bg-white text-[#5b5d62] antialiased selection:bg-[#1A9900] selection:text-white">

  <!-- TOP BAR -->
  <div id="top-bar" class="bg-[#181924] border-b border-gray-800 text-gray-300 text-xs hidden lg:block">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 h-12 flex items-center justify-between">
      <div class="flex items-center space-x-6">
        <div class="flex items-center space-x-2 hover:text-[#1A9900] transition">
          <i class="fa-solid fa-location-dot text-[#1A9900]"></i>
          <span>Số 27, ngõ 523 phố Minh Khai, phường Vĩnh Tuy, TP. Hà Nội</span>
        </div>
        <div class="flex items-center space-x-2 hover:text-[#1A9900] transition">
          <i class="fa-regular fa-clock text-[#1A9900]"></i>
          <span>T2 – T6: sáng 8h00–11h30, chiều 13h30–17h00</span>
        </div>
        <div class="flex items-center space-x-2 hover:text-[#1A9900] transition">
          <i class="fa-solid fa-phone text-[#1A9900]"></i>
          <a href="tel:02439729484" data-ga="click_hotline">024 3972 9484</a>
        </div>
      </div>
      <div class="flex items-center space-x-6">
        <a href="/ve-huong-son/tai-nguyen/" class="hover:text-[#1A9900] transition">
          <i class="fa-solid fa-download text-[#1A9900] mr-1.5"></i>Hồ sơ năng lực
        </a>
        <div class="flex items-center space-x-3"><a href="https://www.facebook.com/huonsonco/" class="w-7 h-7 bg-gray-800 flex items-center justify-center hover:bg-[#1A9900] hover:text-white transition" title="Facebook"><i class="fa-brands fa-facebook-f text-xs"></i></a><a href="https://zalo.me/0913237302" class="w-7 h-7 bg-gray-800 flex items-center justify-center hover:bg-[#1A9900] hover:text-white transition" title="Zalo"><i class="fa-solid fa-comment-dots text-xs"></i></a><a href="https://www.messenger.com/t/thuan.nguyencong.330" class="w-7 h-7 bg-gray-800 flex items-center justify-center hover:bg-[#1A9900] hover:text-white transition" title="Messenger"><i class="fa-brands fa-facebook-messenger text-xs"></i></a></div>
      </div>
    </div>
  </div>

  <!-- MAIN HEADER -->
  <header class="site-header bg-white w-full z-40 transition-all duration-300 border-b border-gray-100 shadow-sm sticky top-0">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">

      <a href="/" class="flex items-center" aria-label="Hương Sơn – Trang chủ"><img src="/assets/images/brand/HUONG_SON_logo.svg" alt="Hương Sơn" class="h-11 sm:h-12 w-auto object-contain" /></a>

      <nav class="hidden xl:flex items-center space-x-6" aria-label="Điều hướng chính">
        <div class="relative has-dropdown group py-2">
          <a href="/san-pham/" class="nav-link text-gray-800 hover:text-[#1A9900] font-semibold text-sm flex items-center space-x-1 group-hover:text-[#1A9900] transition">
            <span>SẢN PHẨM</span>
            <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200 group-hover:rotate-180"></i>
          </a>
          <div class="dropdown-menu absolute top-full left-0 w-80 bg-white border border-gray-100 shadow-xl py-2 z-50 rounded-b-md"><a href="/san-pham/photocopy-may-da-chuc-nang/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Photocopy – Máy đa chức năng</a><a href="/san-pham/may-in-nhan-ban-toc-do-cao/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Máy in nhân bản & Hoàn thiện sau in</a><a href="/san-pham/cho-thue-thiet-bi-giao-duc/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Cho thuê thiết bị Giáo dục (HƯƠNG SƠN EDUCATION SOLUTIONS)</a><a href="/san-pham/may-scan-so-hoa/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Máy Scan – Số hóa</a><a href="/san-pham/may-in-laser/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Máy in Laser – Thiết bị in</a><a href="/san-pham/thiet-bi-phong-hoc-giao-duc/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Thiết bị phòng học – Giáo dục</a><a href="/san-pham/vat-tu-linh-kien-tieu-hao/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Vật tư – Linh kiện – Tiêu hao</a><a href="/san-pham/thiet-bi-van-phong-hoi-hop/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Thiết bị văn phòng – Hội họp</a><a href="/san-pham/fansipan/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">FANSIPAN – Vật tư tương thích</a>
          </div>
        </div>
        <div class="relative has-dropdown group py-2">
          <a href="/giai-phap/" class="nav-link text-gray-800 hover:text-[#1A9900] font-semibold text-sm flex items-center space-x-1 group-hover:text-[#1A9900] transition">
            <span>GIẢI PHÁP</span>
            <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200 group-hover:rotate-180"></i>
          </a>
          <div class="dropdown-menu absolute top-full left-0 w-80 bg-white border border-gray-100 shadow-xl py-2 z-50 rounded-b-md"><a href="/giai-phap/giao-duc/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Giáo dục</a><a href="/giai-phap/co-quan-nha-nuoc/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Cơ quan Nhà nước</a><a href="/giai-phap/ngan-hang-tai-chinh/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Ngân hàng – Tài chính</a><a href="/giai-phap/tap-doan-tong-cong-ty/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Tập đoàn – Tổng công ty</a><a href="/giai-phap/in-de-thi-tai-lieu/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">In đề thi – Tài liệu</a><a href="/giai-phap/scan-so-hoa/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Scan – Số hóa</a><a href="/giai-phap/cho-thue-thiet-bi/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Cho thuê thiết bị</a><a href="/giai-phap/quan-ly-van-hanh/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Quản lý – Vận hành</a>
          </div>
        </div>
        <div class="relative has-dropdown group py-2">
          <a href="/dich-vu/" class="nav-link text-gray-800 hover:text-[#1A9900] font-semibold text-sm flex items-center space-x-1 group-hover:text-[#1A9900] transition">
            <span>DỊCH VỤ</span>
            <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200 group-hover:rotate-180"></i>
          </a>
          <div class="dropdown-menu absolute top-full left-0 w-80 bg-white border border-gray-100 shadow-xl py-2 z-50 rounded-b-md"><a href="/dich-vu/bao-tri-sua-chua/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Bảo trì – Sửa chữa</a><a href="/dich-vu/dich-vu-ky-thuat/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Dịch vụ kỹ thuật</a><a href="/dich-vu/van-hanh-thiet-bi/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Vận hành thiết bị</a><a href="/dich-vu/thu-mua-may-cu-doi-may-moi/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Thu mua máy cũ – Đổi máy mới</a>
          </div>
        </div>
        <a href="/du-an/" class="nav-link text-gray-800 hover:text-[#1A9900] font-semibold text-sm transition py-2">DỰ ÁN</a>
        <div class="relative has-dropdown group py-2">
          <a href="/ve-huong-son/" class="nav-link text-gray-800 hover:text-[#1A9900] font-semibold text-sm flex items-center space-x-1 group-hover:text-[#1A9900] transition">
            <span>VỀ HƯƠNG SƠN</span>
            <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200 group-hover:rotate-180"></i>
          </a>
          <div class="dropdown-menu absolute top-full left-0 w-80 bg-white border border-gray-100 shadow-xl py-2 z-50 rounded-b-md"><a href="/ve-huong-son/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Giới thiệu Hương Sơn</a><a href="/ve-huong-son/nang-luc/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Hồ sơ năng lực</a><a href="/ve-huong-son/doi-tac-thuong-hieu/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Đối tác – Thương hiệu</a><a href="/ve-huong-son/tai-nguyen/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Tài nguyên – Catalogue</a><a href="/ve-huong-son/kien-thuc/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Kiến thức</a><a href="/ve-huong-son/tin-tuc/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Tin tức</a>
          </div>
        </div>
        <a href="/nhan-tu-van/" class="nav-link text-gray-800 hover:text-[#1A9900] font-semibold text-sm transition py-2">NHẬN TƯ VẤN</a>
      </nav>

      <div class="hidden xl:flex items-center space-x-5">
        <button class="search-toggle text-gray-700 hover:text-[#1A9900] transition text-base" aria-label="Tìm kiếm">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
        <a href="/nhan-tu-van/bao-gia/" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-6 py-3 transition">
          YÊU CẦU BÁO GIÁ
        </a>
      </div>

      <div class="flex xl:hidden items-center space-x-3">
        <button class="search-toggle w-9 h-9 bg-gray-100 text-gray-700 flex items-center justify-center hover:bg-[#1A9900] hover:text-white transition" aria-label="Tìm kiếm">
          <i class="fa-solid fa-magnifying-glass text-xs"></i>
        </button>
        <button id="mobile-menu-toggle" class="text-gray-800 hover:text-[#1A9900] p-2 focus:outline-none" aria-label="Mở menu">
          <i class="fa-solid fa-bars-staggered text-2xl"></i>
        </button>
      </div>
    </div>
  </header>

  <!-- PAGE HERO -->
  <section class="relative bg-[#181924] min-h-[340px] sm:min-h-[400px] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
      <img src="/assets/images/xxx_about-hero_xxx.jpg" alt="Công cụ tính chi phí thuê máy" class="w-full h-full object-cover object-center" loading="eager" />
      <div class="absolute inset-0 bg-[#181924]/88"></div>
    </div>
    <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 py-16 w-full text-center">
      <span class="font-handwriting text-3xl text-[#5eb74c] font-bold block mb-2">Công cụ ước tính</span>
      <h1 class="text-3xl sm:text-[42px] font-bold text-white mb-4 leading-tight">Công cụ tính chi phí thuê máy</h1>
      <p class="max-w-3xl mx-auto text-gray-300 text-[15px] leading-relaxed">Ước tính nhanh chi phí thuê máy photocopy theo sản lượng — dùng để tham khảo trước khi nhận báo giá chính thức.</p>
      <nav class="mt-7 text-[12.5px] text-gray-400 flex items-center justify-center flex-wrap" aria-label="Breadcrumb">
        <a href="/" class="hover:text-white transition">Trang chủ</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-500"></i> <a href="/cong-cu/" class="hover:text-white transition">Công cụ</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-500"></i> <span class="text-[#1A9900]" aria-current="page">Tính chi phí thuê máy</span>
      </nav>
    </div>
  </section>

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
        <div class="lg:col-span-6">
          <div class="bg-white border border-gray-200 p-7 space-y-6">
            <div>
              <label class="block text-[13px] font-semibold text-[#181923] mb-2">Sản lượng in bình quân mỗi tháng (bản)</label>
              <input type="number" id="calc-volume" value="5000" min="0" class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900]" />
            </div>
            <div>
              <label class="block text-[13px] font-semibold text-[#181923] mb-2">Đơn giá tham khảo mỗi bản in (đồng)</label>
              <input type="number" id="calc-price" value="350" min="0" class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900]" />
            </div>
            <div>
              <label class="block text-[13px] font-semibold text-[#181923] mb-2">Phí thuê máy cố định mỗi tháng (đồng)</label>
              <input type="number" id="calc-fixed" value="800000" min="0" class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900]" />
            </div>
            <div>
              <label class="block text-[13px] font-semibold text-[#181923] mb-2">Thời hạn thuê (tháng)</label>
              <input type="number" id="calc-months" value="24" min="1" class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900]" />
            </div>
          </div>
        </div>
        <div class="lg:col-span-6">
          <div class="p-7 h-full flex flex-col justify-center" style="background-color: rgb(247,243,238);">
            <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-2">Ước tính chi phí mỗi tháng</p>
            <p class="text-4xl font-bold text-[#181923] mb-1" id="calc-result-month">—</p>
            <p class="text-[13.5px] text-gray-500 mb-6">Phí cố định + (sản lượng × đơn giá mỗi bản)</p>
            <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-2">Ước tính tổng chi phí cả thời hạn thuê</p>
            <p class="text-3xl font-bold text-[#181923]" id="calc-result-total">—</p>
          </div>
        </div>
      </div>
      <p class="text-[13px] text-gray-500 mt-6 max-w-3xl">
        Đây là công cụ ước tính tham khảo, không phải báo giá chính thức. Chi phí thực tế phụ thuộc cấu hình máy,
        khổ giấy, gói dịch vụ và điều kiện phát sinh — vui lòng
        <a class="text-[#1A9900] font-medium hover:underline" href="/nhan-tu-van/tu-van-thue-may/">gửi yêu cầu tư vấn thuê máy</a>
        để nhận báo giá chính xác.
      </p>
      <script>
        (function () {
          const v = document.getElementById('calc-volume'), pr = document.getElementById('calc-price'),
                fx = document.getElementById('calc-fixed'), mo = document.getElementById('calc-months'),
                rm = document.getElementById('calc-result-month'), rt = document.getElementById('calc-result-total');
          const fmt = (n) => n.toLocaleString('vi-VN') + ' đ';
          function calc() {
            const volume = parseFloat(v.value) || 0, price = parseFloat(pr.value) || 0,
                  fixed = parseFloat(fx.value) || 0, months = parseFloat(mo.value) || 0;
            const monthly = fixed + volume * price;
            rm.textContent = fmt(Math.round(monthly));
            rt.textContent = fmt(Math.round(monthly * months));
          }
          [v, pr, fx, mo].forEach((el) => el.addEventListener('input', calc));
          calc();
        })();
      </script>
    
    </div>
  </section>

  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/xxx_home-bg_xxx.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Cần báo giá chính xác theo đúng nhu cầu?</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Gửi thông tin cụ thể để Hương Sơn báo giá chính thức, có cơ cấu giá tách rõ từng khoản.</p>
      </div>
      <div class="flex flex-wrap items-center gap-4 flex-shrink-0">
        <a href="/nhan-tu-van/tu-van-thue-may/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Tư vấn thuê máy</a>
        
        <a href="tel:02439729484" data-ga="click_hotline" class="text-white font-bold text-sm hover:text-[#1A9900] transition">
          <i class="fa-solid fa-phone text-[#1A9900] mr-2"></i>024 3972 9484
        </a>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-[#f8fafc] text-gray-600 pt-20 pb-10 border-t border-gray-200 relative">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-12 pb-14 border-b border-gray-200">

        <div class="lg:col-span-4 space-y-5">
          <a href="/" class="inline-block"><img src="/assets/images/brand/HUONG_SON_logo.svg" alt="Hương Sơn" class="h-12 sm:h-14 w-auto object-contain" /></a>
          <p class="text-[15px] text-gray-600 leading-relaxed max-w-md">
            CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ HƯƠNG SƠN — Giải pháp thiết bị, in ấn, số hóa và dịch vụ cho Cơ quan Nhà nước – Giáo dục – Ngân hàng – Doanh nghiệp.
          </p>
          <p class="text-[13.5px] text-gray-500">Mã số thuế: 0102759269 · Thành lập 01/06/2008</p>
          <div class="flex flex-wrap gap-2 pt-1">
            <span class="text-[11px] font-bold tracking-wider text-gray-700 border border-gray-300 bg-white px-2.5 py-1">DUPLO</span><span class="text-[11px] font-bold tracking-wider text-gray-700 border border-gray-300 bg-white px-2.5 py-1">TOSHIBA</span><span class="text-[11px] font-bold tracking-wider text-gray-700 border border-gray-300 bg-white px-2.5 py-1">RICOH</span><span class="text-[11px] font-bold tracking-wider text-gray-700 border border-gray-300 bg-white px-2.5 py-1">KONICA MINOLTA</span><span class="text-[11px] font-bold tracking-wider text-gray-700 border border-gray-300 bg-white px-2.5 py-1">HP</span><span class="text-[11px] font-bold tracking-wider text-gray-700 border border-gray-300 bg-white px-2.5 py-1">FANSIPAN</span>
          </div>
        </div>

        <div class="lg:col-span-2">
          <h4 class="text-gray-900 text-[16px] font-bold mb-5 uppercase tracking-wider">Sản phẩm</h4>
          <ul class="space-y-3 text-[14.5px] font-normal"><li><a href="/san-pham/photocopy-may-da-chuc-nang/" class="hover:text-[#1A9900] transition block text-gray-600">Photocopy – Máy đa chức năng</a></li><li><a href="/san-pham/may-in-nhan-ban-toc-do-cao/" class="hover:text-[#1A9900] transition block text-gray-600">Máy in nhân bản & Hoàn thiện sau in</a></li><li><a href="/san-pham/cho-thue-thiet-bi-giao-duc/" class="hover:text-[#1A9900] transition block text-gray-600">Cho thuê thiết bị Giáo dục (HƯƠNG SƠN EDUCATION SOLUTIONS)</a></li><li><a href="/san-pham/may-scan-so-hoa/" class="hover:text-[#1A9900] transition block text-gray-600">Máy Scan – Số hóa</a></li><li><a href="/san-pham/may-in-laser/" class="hover:text-[#1A9900] transition block text-gray-600">Máy in Laser – Thiết bị in</a></li><li><a href="/san-pham/thiet-bi-phong-hoc-giao-duc/" class="hover:text-[#1A9900] transition block text-gray-600">Thiết bị phòng học – Giáo dục</a></li></ul>
        </div>

        <div class="lg:col-span-3">
          <h4 class="text-gray-900 text-[16px] font-bold mb-5 uppercase tracking-wider">Giải pháp</h4>
          <ul class="space-y-3 text-[14.5px] font-normal"><li><a href="/giai-phap/giao-duc/" class="hover:text-[#1A9900] transition block text-gray-600">Giáo dục</a></li><li><a href="/giai-phap/co-quan-nha-nuoc/" class="hover:text-[#1A9900] transition block text-gray-600">Cơ quan Nhà nước</a></li><li><a href="/giai-phap/ngan-hang-tai-chinh/" class="hover:text-[#1A9900] transition block text-gray-600">Ngân hàng – Tài chính</a></li><li><a href="/giai-phap/tap-doan-tong-cong-ty/" class="hover:text-[#1A9900] transition block text-gray-600">Tập đoàn – Tổng công ty</a></li><li><a href="/giai-phap/in-de-thi-tai-lieu/" class="hover:text-[#1A9900] transition block text-gray-600">In đề thi – Tài liệu</a></li><li><a href="/giai-phap/scan-so-hoa/" class="hover:text-[#1A9900] transition block text-gray-600">Scan – Số hóa</a></li></ul>
        </div>
        <div class="lg:col-span-3">
          <h4 class="text-gray-900 text-[16px] font-bold mb-5 uppercase tracking-wider">Thông tin liên hệ</h4>
          <ul class="space-y-3.5 text-[14.5px] font-normal text-gray-600">
            <li class="flex items-start space-x-3">
              <i class="fa-solid fa-location-dot text-[#1A9900] mt-1 text-sm flex-shrink-0"></i>
              <span class="leading-relaxed">Số 27, ngõ 523 phố Minh Khai, phường Vĩnh Tuy, TP. Hà Nội</span>
            </li>
            <li class="flex items-center space-x-3">
              <i class="fa-solid fa-phone text-[#1A9900] text-sm flex-shrink-0"></i>
              <a href="tel:02439729484" data-ga="click_hotline" class="hover:text-[#1A9900] transition font-semibold text-gray-800">024 3972 9484</a>
              <span class="text-gray-500 text-[13px]">(Văn phòng)</span>
            </li><li class="flex items-center space-x-3">
              <i class="fa-solid fa-phone text-[#1A9900] text-sm flex-shrink-0"></i>
              <a href="tel:0913237302" data-ga="click_hotline" class="hover:text-[#1A9900] transition font-semibold text-gray-800">0913 237 302</a>
              <span class="text-gray-500 text-[13px]">(Kinh doanh)</span>
            </li><li class="flex items-center space-x-3">
              <i class="fa-solid fa-phone text-[#1A9900] text-sm flex-shrink-0"></i>
              <a href="tel:0911138583" data-ga="click_hotline" class="hover:text-[#1A9900] transition font-semibold text-gray-800">091 113 8583</a>
              <span class="text-gray-500 text-[13px]">(Kỹ thuật)</span>
            </li>
            <li class="flex items-center space-x-3">
              <i class="fa-regular fa-clock text-[#1A9900] text-sm flex-shrink-0"></i>
              <span>T2 – T6: sáng 8h00–11h30, chiều 13h30–17h00</span>
            </li>
            <li class="flex items-center space-x-3">
              <i class="fa-solid fa-envelope text-[#1A9900] text-sm flex-shrink-0"></i>
              <a href="mailto:info@huongsonco.com.vn" class="hover:text-[#1A9900] transition">info@huongsonco.com.vn</a>
            </li>
          </ul>
        </div>

      </div>

      <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-[14px] text-gray-500">
        <p>© Copyright 2026 CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ HƯƠNG SƠN · Thiết kế web bởi <a href="https://www.matbao.ws/" target="_blank" rel="noopener" class="text-[#1A9900] font-medium hover:underline">Mắt Bão WS</a></p>
        <div class="flex items-center space-x-6 mt-4 sm:mt-0">
          <a href="/dich-vu/" class="hover:text-[#1A9900] transition">Dịch vụ</a>
          <span class="text-gray-400">•</span>
          <a href="/nhan-tu-van/" class="hover:text-[#1A9900] transition">Nhận tư vấn</a>
        </div>
      </div>

    </div>
  </footer>

  <!-- MOBILE DRAWER -->
  <div id="mobile-backdrop" class="fixed inset-0 bg-black/60 z-50 hidden opacity-0 transition-opacity duration-300"></div>
  <div id="mobile-drawer" class="fixed top-0 left-0 bottom-0 w-80 max-w-[85vw] bg-white z-50 shadow-2xl transform -translate-x-full transition-transform duration-300 flex flex-col">
    <div class="p-6 border-b border-gray-100 flex items-center justify-between">
      <a href="/"><img src="/assets/images/brand/HUONG_SON_logo.svg" alt="Hương Sơn" class="h-10 w-auto object-contain" /></a>
      <button id="mobile-menu-close" class="text-gray-500 hover:text-gray-900 p-2" aria-label="Đóng menu">
        <i class="fa-solid fa-xmark text-xl"></i>
      </button>
    </div>
    <div class="p-6 flex-1 overflow-y-auto space-y-3">
      <div>
        <button class="mobile-dropdown-btn w-full flex items-center justify-between text-gray-800 font-semibold py-2 border-b border-gray-100 hover:text-[#1A9900]">
          <span>SẢN PHẨM</span>
          <i class="fa-solid fa-chevron-down text-xs"></i>
        </button>
        <div class="hidden pl-4 py-2 space-y-2 text-sm text-gray-600">
          <a href="/san-pham/" class="block py-1 text-[#1A9900] font-semibold">Tổng quan</a><a href="/san-pham/photocopy-may-da-chuc-nang/" class="block py-1 hover:text-[#1A9900]">Photocopy – Máy đa chức năng</a><a href="/san-pham/may-in-nhan-ban-toc-do-cao/" class="block py-1 hover:text-[#1A9900]">Máy in nhân bản & Hoàn thiện sau in</a><a href="/san-pham/cho-thue-thiet-bi-giao-duc/" class="block py-1 hover:text-[#1A9900]">Cho thuê thiết bị Giáo dục (HƯƠNG SƠN EDUCATION SOLUTIONS)</a><a href="/san-pham/may-scan-so-hoa/" class="block py-1 hover:text-[#1A9900]">Máy Scan – Số hóa</a><a href="/san-pham/may-in-laser/" class="block py-1 hover:text-[#1A9900]">Máy in Laser – Thiết bị in</a><a href="/san-pham/thiet-bi-phong-hoc-giao-duc/" class="block py-1 hover:text-[#1A9900]">Thiết bị phòng học – Giáo dục</a><a href="/san-pham/vat-tu-linh-kien-tieu-hao/" class="block py-1 hover:text-[#1A9900]">Vật tư – Linh kiện – Tiêu hao</a><a href="/san-pham/thiet-bi-van-phong-hoi-hop/" class="block py-1 hover:text-[#1A9900]">Thiết bị văn phòng – Hội họp</a><a href="/san-pham/fansipan/" class="block py-1 hover:text-[#1A9900]">FANSIPAN – Vật tư tương thích</a>
        </div>
      </div>
      <div>
        <button class="mobile-dropdown-btn w-full flex items-center justify-between text-gray-800 font-semibold py-2 border-b border-gray-100 hover:text-[#1A9900]">
          <span>GIẢI PHÁP</span>
          <i class="fa-solid fa-chevron-down text-xs"></i>
        </button>
        <div class="hidden pl-4 py-2 space-y-2 text-sm text-gray-600">
          <a href="/giai-phap/" class="block py-1 text-[#1A9900] font-semibold">Tổng quan</a><a href="/giai-phap/giao-duc/" class="block py-1 hover:text-[#1A9900]">Giáo dục</a><a href="/giai-phap/co-quan-nha-nuoc/" class="block py-1 hover:text-[#1A9900]">Cơ quan Nhà nước</a><a href="/giai-phap/ngan-hang-tai-chinh/" class="block py-1 hover:text-[#1A9900]">Ngân hàng – Tài chính</a><a href="/giai-phap/tap-doan-tong-cong-ty/" class="block py-1 hover:text-[#1A9900]">Tập đoàn – Tổng công ty</a><a href="/giai-phap/in-de-thi-tai-lieu/" class="block py-1 hover:text-[#1A9900]">In đề thi – Tài liệu</a><a href="/giai-phap/scan-so-hoa/" class="block py-1 hover:text-[#1A9900]">Scan – Số hóa</a><a href="/giai-phap/cho-thue-thiet-bi/" class="block py-1 hover:text-[#1A9900]">Cho thuê thiết bị</a><a href="/giai-phap/quan-ly-van-hanh/" class="block py-1 hover:text-[#1A9900]">Quản lý – Vận hành</a>
        </div>
      </div>
      <div>
        <button class="mobile-dropdown-btn w-full flex items-center justify-between text-gray-800 font-semibold py-2 border-b border-gray-100 hover:text-[#1A9900]">
          <span>DỊCH VỤ</span>
          <i class="fa-solid fa-chevron-down text-xs"></i>
        </button>
        <div class="hidden pl-4 py-2 space-y-2 text-sm text-gray-600">
          <a href="/dich-vu/" class="block py-1 text-[#1A9900] font-semibold">Tổng quan</a><a href="/dich-vu/bao-tri-sua-chua/" class="block py-1 hover:text-[#1A9900]">Bảo trì – Sửa chữa</a><a href="/dich-vu/dich-vu-ky-thuat/" class="block py-1 hover:text-[#1A9900]">Dịch vụ kỹ thuật</a><a href="/dich-vu/van-hanh-thiet-bi/" class="block py-1 hover:text-[#1A9900]">Vận hành thiết bị</a><a href="/dich-vu/thu-mua-may-cu-doi-may-moi/" class="block py-1 hover:text-[#1A9900]">Thu mua máy cũ – Đổi máy mới</a>
        </div>
      </div>
      <a href="/du-an/" class="block text-gray-800 font-semibold py-2 border-b border-gray-100 hover:text-[#1A9900]">DỰ ÁN</a>
      <div>
        <button class="mobile-dropdown-btn w-full flex items-center justify-between text-gray-800 font-semibold py-2 border-b border-gray-100 hover:text-[#1A9900]">
          <span>VỀ HƯƠNG SƠN</span>
          <i class="fa-solid fa-chevron-down text-xs"></i>
        </button>
        <div class="hidden pl-4 py-2 space-y-2 text-sm text-gray-600">
          <a href="/ve-huong-son/" class="block py-1 text-[#1A9900] font-semibold">Tổng quan</a><a href="/ve-huong-son/" class="block py-1 hover:text-[#1A9900]">Giới thiệu Hương Sơn</a><a href="/ve-huong-son/nang-luc/" class="block py-1 hover:text-[#1A9900]">Hồ sơ năng lực</a><a href="/ve-huong-son/doi-tac-thuong-hieu/" class="block py-1 hover:text-[#1A9900]">Đối tác – Thương hiệu</a><a href="/ve-huong-son/tai-nguyen/" class="block py-1 hover:text-[#1A9900]">Tài nguyên – Catalogue</a><a href="/ve-huong-son/kien-thuc/" class="block py-1 hover:text-[#1A9900]">Kiến thức</a><a href="/ve-huong-son/tin-tuc/" class="block py-1 hover:text-[#1A9900]">Tin tức</a>
        </div>
      </div>
      <a href="/nhan-tu-van/" class="block text-gray-800 font-semibold py-2 border-b border-gray-100 hover:text-[#1A9900]">NHẬN TƯ VẤN</a>
    </div>
    <div class="p-6 border-t border-gray-100 bg-gray-50">
      <a href="tel:02439729484" data-ga="click_hotline" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider py-3 w-full text-center block">
        <i class="fa-solid fa-phone mr-2"></i> 024 3972 9484
      </a>
    </div>
  </div>

  <!-- SEARCH POPUP -->
  <div id="search-modal" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300 flex items-center justify-center p-4">
    <div class="bg-white border border-gray-200 w-full max-w-2xl p-6 sm:p-8 shadow-2xl relative rounded">
      <button id="search-close" class="absolute top-4 right-4 text-gray-400 hover:text-gray-800 p-2" aria-label="Đóng">
        <i class="fa-solid fa-xmark text-xl"></i>
      </button>
      <h3 class="text-lg font-bold text-gray-900 mb-4 uppercase">Tìm kiếm</h3>
      <form action="/ve-huong-son/kien-thuc/" method="get" class="relative">
        <input type="text" id="search-input" name="s" placeholder="VD: thuê máy in đề thi, máy scan tốc độ cao..." class="w-full bg-gray-50 border border-gray-300 text-gray-900 px-4 py-3 pr-12 text-sm focus:outline-none focus:border-[#1A9900]" />
        <button type="submit" class="absolute right-4 top-1/2 -translate-y-1/2 text-[#1A9900]" aria-label="Tìm">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </form>
    </div>
  </div>

  <!-- FLOATING BUTTONS -->
  <a href="tel:02439729484" data-ga="click_hotline" class="fixed bottom-24 right-6 z-40 w-12 h-12 bg-[#1A9900] text-white flex items-center justify-center shadow-xl animate-pulse-phone" title="Gọi ngay">
    <i class="fa-solid fa-phone text-lg"></i>
  </a>
  <a href="https://zalo.me/0913237302" target="_blank" rel="noopener" data-ga="click_zalo" class="fixed bottom-8 right-6 z-40 w-12 h-12 bg-[#0068FF] text-white flex items-center justify-center shadow-xl" title="Chat Zalo">
    <span class="font-bold text-xs">Zalo</span>
  </a>
  <button id="back-to-top" class="fixed bottom-8 right-6 z-40 w-10 h-10 bg-gray-900 text-white flex items-center justify-center shadow-xl hover:bg-[#1A9900] transition-all duration-300 opacity-0 invisible translate-y-4" aria-label="Lên đầu trang">
    <i class="fa-solid fa-arrow-up text-xs"></i>
  </button>

  <script src="/assets/js/main.js?v=2.0.1"></script>
</body>
</html>
@endsection
