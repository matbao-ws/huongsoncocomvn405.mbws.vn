@extends('client.layouts.app')

@section('title', "Dịch vụ vận hành thiết bị in ấn theo hợp đồng | Hương Sơn")
@section('meta_description', "Hương Sơn vận hành và giám sát thiết bị in ấn theo hợp đồng dài hạn: counter, vật tư, bảo trì và báo cáo định kỳ — phù hợp đơn vị có nhiều thiết bị.")
@section('canonical', url('/dich-vu/van-hanh-thiet-bi/'))
@section('jsonld')
<script type="application/ld+json">{
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
}</script>
<script type="application/ld+json">{
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
      "name": "Dịch vụ",
      "item": "https://huongsonco.com.vn/dich-vu/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Dịch vụ vận hành thiết bị in ấn",
      "item": "https://huongsonco.com.vn/dich-vu/van-hanh-thiet-bi/"
    }
  ]
}</script>
<script type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Service",
  "@id": "https://huongsonco.com.vn/dich-vu/van-hanh-thiet-bi/#service",
  "name": "Vận hành thiết bị",
  "serviceType": "Dịch vụ vận hành và giám sát thiết bị in ấn theo hợp đồng",
  "description": "Vận hành thiết bị theo hợp đồng là lớp dịch vụ nằm giữa 'chỉ bán máy' và 'quản lý in ấn trọn gói' — phù hợp với đơn vị đã có sẵn thiết bị nhưng cần một bên vận hành hộ.",
  "provider": {
    "@id": "https://huongsonco.com.vn/#organization"
  },
  "areaServed": {
    "@type": "Country",
    "name": "Việt Nam"
  },
  "url": "https://huongsonco.com.vn/dich-vu/van-hanh-thiet-bi/"
}</script>
<script type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Khác gì so với Managed Print Service?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Vận hành thiết bị là dịch vụ tập trung vào việc chăm sóc thiết bị hiện có (counter, vật tư, bảo trì, báo cáo). Managed Print Service có phạm vi rộng hơn, bao gồm cả tư vấn chuẩn hóa lại đội thiết bị và tối ưu chi phí theo kỳ."
      }
    },
    {
      "@type": "Question",
      "name": "Có áp dụng cho thiết bị không thuê từ Hương Sơn không?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Có, miễn là thiết bị còn phù hợp để bảo trì và có vật tư tương thích."
      }
    }
  ]
}</script>
<script type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "HowTo",
  "name": "Dịch vụ vận hành thiết bị in ấn",
  "description": "Vận hành thiết bị theo hợp đồng là lớp dịch vụ nằm giữa 'chỉ bán máy' và 'quản lý in ấn trọn gói' — phù hợp với đơn vị đã có sẵn thiết bị nhưng cần một bên vận hành hộ.",
  "step": [
    {
      "@type": "HowToStep",
      "position": 1,
      "name": "Tiếp nhận đội thiết bị",
      "text": "Kiểm kê thiết bị hiện có, chốt counter khởi điểm."
    },
    {
      "@type": "HowToStep",
      "position": 2,
      "name": "Thiết lập lịch vận hành",
      "text": "Lịch bảo trì, lịch cấp vật tư và kênh tiếp nhận sự cố."
    },
    {
      "@type": "HowToStep",
      "position": 3,
      "name": "Vận hành định kỳ",
      "text": "Bảo trì, cung ứng vật tư, xử lý sự cố theo lịch và theo yêu cầu phát sinh."
    },
    {
      "@type": "HowToStep",
      "position": 4,
      "name": "Báo cáo",
      "text": "Gửi báo cáo sản lượng, vật tư và sự cố theo kỳ đã thống nhất."
    }
  ]
}</script>
@endsection

@section('content')
<!DOCTYPE html>
<html lang="vi" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dịch vụ vận hành thiết bị in ấn theo hợp đồng | Hương Sơn</title>
  <meta name="description" content="Hương Sơn vận hành và giám sát thiết bị in ấn theo hợp đồng dài hạn: counter, vật tư, bảo trì và báo cáo định kỳ — phù hợp đơn vị có nhiều thiết bị." />
  <meta name="keywords" content="managed print service, managed print services Việt Nam, dịch vụ quản lý in ấn, quản lý máy in doanh nghiệp, quản lý hệ thống in, quản lý chi phí in ấn, kiểm soát chi phí in ấn, theo dõi sản lượng in, SLA máy photocopy, SLA dịch vụ máy in" />
  <meta name="robots" content="index,follow" />
  <link rel="canonical" href="https://huongsonco.com.vn/dich-vu/van-hanh-thiet-bi/" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Hương Sơn" />
  <meta property="og:title" content="Dịch vụ vận hành thiết bị in ấn theo hợp đồng | Hương Sơn" />
  <meta property="og:description" content="Hương Sơn vận hành và giám sát thiết bị in ấn theo hợp đồng dài hạn: counter, vật tư, bảo trì và báo cáo định kỳ — phù hợp đơn vị có nhiều thiết bị." />
  <meta property="og:url" content="https://huongsonco.com.vn/dich-vu/van-hanh-thiet-bi/" />
  <meta property="og:image" content="https://huongsonco.com.vn/assets/images/products/duplo-dp-x550.jpg" />
  <meta property="og:locale" content="vi_VN" />
  <meta name="twitter:card" content="summary_large_image" />
  <link rel="icon" type="image/svg+xml" href="/assets/images/brand/favicon.svg" />
  <link rel="icon" href="/assets/images/favicon-32.png" sizes="32x32" type="image/png" />
  <link rel="icon" href="/assets/images/favicon-16.png" sizes="16x16" type="image/png" />
  <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png" />

  <!-- Tailwind CSS CDN — Phase 3: thay bằng file CSS đã purge qua Tailwind CLI khi môi trường có Node -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              green: '#1A9900', greenHover: '#147700', greenAccent: '#5eb74c',
              dark: '#181924', deepDark: '#12131c', text: '#5b5d62', heading: '#181923',
              beige: 'rgb(247, 243, 238)', lightBg: '#f5f8fb',
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
  <script type="application/ld+json">{
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
}</script>
  <script type="application/ld+json">{
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
      "name": "Dịch vụ",
      "item": "https://huongsonco.com.vn/dich-vu/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Dịch vụ vận hành thiết bị in ấn",
      "item": "https://huongsonco.com.vn/dich-vu/van-hanh-thiet-bi/"
    }
  ]
}</script>
  <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Service",
  "@id": "https://huongsonco.com.vn/dich-vu/van-hanh-thiet-bi/#service",
  "name": "Vận hành thiết bị",
  "serviceType": "Dịch vụ vận hành và giám sát thiết bị in ấn theo hợp đồng",
  "description": "Vận hành thiết bị theo hợp đồng là lớp dịch vụ nằm giữa 'chỉ bán máy' và 'quản lý in ấn trọn gói' — phù hợp với đơn vị đã có sẵn thiết bị nhưng cần một bên vận hành hộ.",
  "provider": {
    "@id": "https://huongsonco.com.vn/#organization"
  },
  "areaServed": {
    "@type": "Country",
    "name": "Việt Nam"
  },
  "url": "https://huongsonco.com.vn/dich-vu/van-hanh-thiet-bi/"
}</script>
  <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Khác gì so với Managed Print Service?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Vận hành thiết bị là dịch vụ tập trung vào việc chăm sóc thiết bị hiện có (counter, vật tư, bảo trì, báo cáo). Managed Print Service có phạm vi rộng hơn, bao gồm cả tư vấn chuẩn hóa lại đội thiết bị và tối ưu chi phí theo kỳ."
      }
    },
    {
      "@type": "Question",
      "name": "Có áp dụng cho thiết bị không thuê từ Hương Sơn không?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Có, miễn là thiết bị còn phù hợp để bảo trì và có vật tư tương thích."
      }
    }
  ]
}</script>
  <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "HowTo",
  "name": "Dịch vụ vận hành thiết bị in ấn",
  "description": "Vận hành thiết bị theo hợp đồng là lớp dịch vụ nằm giữa 'chỉ bán máy' và 'quản lý in ấn trọn gói' — phù hợp với đơn vị đã có sẵn thiết bị nhưng cần một bên vận hành hộ.",
  "step": [
    {
      "@type": "HowToStep",
      "position": 1,
      "name": "Tiếp nhận đội thiết bị",
      "text": "Kiểm kê thiết bị hiện có, chốt counter khởi điểm."
    },
    {
      "@type": "HowToStep",
      "position": 2,
      "name": "Thiết lập lịch vận hành",
      "text": "Lịch bảo trì, lịch cấp vật tư và kênh tiếp nhận sự cố."
    },
    {
      "@type": "HowToStep",
      "position": 3,
      "name": "Vận hành định kỳ",
      "text": "Bảo trì, cung ứng vật tư, xử lý sự cố theo lịch và theo yêu cầu phát sinh."
    },
    {
      "@type": "HowToStep",
      "position": 4,
      "name": "Báo cáo",
      "text": "Gửi báo cáo sản lượng, vật tư và sự cố theo kỳ đã thống nhất."
    }
  ]
}</script>
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
  <header class="site-header bg-[#181924] w-full z-40 transition-all duration-300 border-b border-gray-800/50">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">

      <a href="/" class="flex items-center" aria-label="Hương Sơn – Trang chủ"><span class="inline-flex items-center bg-white px-3 py-1.5 h-11 sm:h-12"><img src="/assets/images/brand/HUONG_SON_logo.svg" alt="Hương Sơn" class="h-full w-auto object-contain" /></span></a>

      <nav class="hidden xl:flex items-center space-x-6" aria-label="Điều hướng chính">
        <div class="relative has-dropdown group py-2">
          <a href="/san-pham/" class="nav-link text-white hover:text-[#1A9900] font-medium text-sm flex items-center space-x-1 group-hover:text-[#1A9900] transition">
            <span>SẢN PHẨM</span>
            <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200 group-hover:rotate-180"></i>
          </a>
          <div class="dropdown-menu absolute top-full left-0 w-80 bg-[#181924] border border-gray-800 shadow-2xl py-2 z-50"><a href="/san-pham/photocopy-may-da-chuc-nang/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Photocopy – Máy đa chức năng</a><a href="/san-pham/may-in-nhan-ban-toc-do-cao/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Máy in nhân bản tốc độ cao</a><a href="/san-pham/may-scan-so-hoa/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Máy Scan – Số hóa</a><a href="/san-pham/may-phoi-trang-hoan-thien-sau-in/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Máy phối trang – Hoàn thiện sau in</a><a href="/san-pham/may-in-laser/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Máy in Laser – Thiết bị in</a><a href="/san-pham/thiet-bi-phong-hoc-giao-duc/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Thiết bị phòng học – Giáo dục</a><a href="/san-pham/vat-tu-linh-kien-tieu-hao/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Vật tư – Linh kiện – Tiêu hao</a><a href="/san-pham/thiet-bi-van-phong-hoi-hop/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Thiết bị văn phòng – Hội họp</a><a href="/san-pham/fansipan/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">FANSIPAN – Vật tư tương thích</a>
          </div>
        </div>
        <div class="relative has-dropdown group py-2">
          <a href="/giai-phap/" class="nav-link text-white hover:text-[#1A9900] font-medium text-sm flex items-center space-x-1 group-hover:text-[#1A9900] transition">
            <span>GIẢI PHÁP</span>
            <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200 group-hover:rotate-180"></i>
          </a>
          <div class="dropdown-menu absolute top-full left-0 w-80 bg-[#181924] border border-gray-800 shadow-2xl py-2 z-50"><a href="/giai-phap/giao-duc/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Giáo dục</a><a href="/giai-phap/co-quan-nha-nuoc/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Cơ quan Nhà nước</a><a href="/giai-phap/ngan-hang-tai-chinh/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Ngân hàng – Tài chính</a><a href="/giai-phap/tap-doan-tong-cong-ty/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Tập đoàn – Tổng công ty</a><a href="/giai-phap/in-de-thi-tai-lieu/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">In đề thi – Tài liệu</a><a href="/giai-phap/scan-so-hoa/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Scan – Số hóa</a><a href="/giai-phap/cho-thue-thiet-bi/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Cho thuê thiết bị</a><a href="/giai-phap/quan-ly-van-hanh/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Quản lý – Vận hành</a>
          </div>
        </div>
        <div class="relative has-dropdown group py-2">
          <a href="/dich-vu/" class="nav-link text-[#1A9900] font-medium text-sm flex items-center space-x-1 group-hover:text-[#1A9900] transition">
            <span>DỊCH VỤ</span>
            <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200 group-hover:rotate-180"></i>
          </a>
          <div class="dropdown-menu absolute top-full left-0 w-80 bg-[#181924] border border-gray-800 shadow-2xl py-2 z-50"><a href="/dich-vu/bao-tri-sua-chua/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Bảo trì – Sửa chữa</a><a href="/dich-vu/dich-vu-ky-thuat/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Dịch vụ kỹ thuật</a><a href="/dich-vu/van-hanh-thiet-bi/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Vận hành thiết bị</a><a href="/dich-vu/thu-mua-may-cu-doi-may-moi/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Thu mua máy cũ – Đổi máy mới</a>
          </div>
        </div>
        <a href="/du-an/" class="nav-link text-white hover:text-[#1A9900] font-medium text-sm transition py-2">DỰ ÁN</a>
        <div class="relative has-dropdown group py-2">
          <a href="/ve-huong-son/" class="nav-link text-white hover:text-[#1A9900] font-medium text-sm flex items-center space-x-1 group-hover:text-[#1A9900] transition">
            <span>VỀ HƯƠNG SƠN</span>
            <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200 group-hover:rotate-180"></i>
          </a>
          <div class="dropdown-menu absolute top-full left-0 w-80 bg-[#181924] border border-gray-800 shadow-2xl py-2 z-50"><a href="/ve-huong-son/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Giới thiệu Hương Sơn</a><a href="/ve-huong-son/nang-luc/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Hồ sơ năng lực</a><a href="/ve-huong-son/doi-tac-thuong-hieu/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Đối tác – Thương hiệu</a><a href="/ve-huong-son/tai-nguyen/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Tài nguyên – Catalogue</a><a href="/ve-huong-son/kien-thuc/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Kiến thức</a><a href="/ve-huong-son/tin-tuc/" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-[#1A9900] hover:text-white transition">Tin tức</a>
          </div>
        </div>
        <a href="/nhan-tu-van/" class="nav-link text-white hover:text-[#1A9900] font-medium text-sm transition py-2">NHẬN TƯ VẤN</a>
      </nav>

      <div class="hidden xl:flex items-center space-x-5">
        <button class="search-toggle text-white hover:text-[#1A9900] transition text-base" aria-label="Tìm kiếm">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
        <a href="/nhan-tu-van/bao-gia/" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-6 py-3 transition">
          YÊU CẦU BÁO GIÁ
        </a>
      </div>

      <div class="flex xl:hidden items-center space-x-3">
        <button class="search-toggle w-9 h-9 bg-gray-800 text-white flex items-center justify-center hover:bg-[#1A9900]" aria-label="Tìm kiếm">
          <i class="fa-solid fa-magnifying-glass text-xs"></i>
        </button>
        <button id="mobile-menu-toggle" class="text-white p-2 focus:outline-none" aria-label="Mở menu">
          <i class="fa-solid fa-bars-staggered text-2xl"></i>
        </button>
      </div>
    </div>
  </header>

  <!-- PAGE HERO -->
  <section class="relative bg-[#181924] min-h-[340px] sm:min-h-[400px] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
      <img src="/assets/images/xxx_about-hero_xxx.jpg" alt="Dịch vụ vận hành thiết bị in ấn" class="w-full h-full object-cover object-center" loading="eager" />
      <div class="absolute inset-0 bg-[#181924]/88"></div>
    </div>
    <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 py-16 w-full text-center">
      <span class="font-handwriting text-3xl text-[#5eb74c] font-bold block mb-2">Managed Operations</span>
      <h1 class="text-3xl sm:text-[42px] font-bold text-white mb-4 leading-tight">Dịch vụ vận hành thiết bị in ấn</h1>
      <p class="max-w-3xl mx-auto text-gray-300 text-[15px] leading-relaxed">Với các hợp đồng dài hạn hoặc quy mô nhiều thiết bị, Hương Sơn đảm nhận vận hành: theo dõi counter, cung ứng vật tư, bảo trì định kỳ và báo cáo — để đơn vị không phải tự quản lý từng thiết bị riêng lẻ.</p>
      <nav class="mt-7 text-[12.5px] text-gray-400 flex items-center justify-center flex-wrap" aria-label="Breadcrumb">
        <a href="/" class="hover:text-white transition">Trang chủ</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-500"></i> <a href="/dich-vu/" class="hover:text-white transition">Dịch vụ</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-500"></i> <span class="text-[#1A9900]" aria-current="page">Dịch vụ vận hành thiết bị in ấn</span>
      </nav>
    </div>
  </section>

  <section class="py-10 border-b border-gray-200" style="background-color: rgb(247, 243, 238);">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Trang này là gì</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Dịch vụ vận hành thiết bị theo hợp đồng: theo dõi counter, vật tư, bảo trì và báo cáo định kỳ.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Dành cho ai</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Đơn vị có sẵn thiết bị (mua hoặc thuê) nhưng không có nhân sự chuyên trách để tự vận hành và theo dõi.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Giải quyết vấn đề gì</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Chuyển việc theo dõi, bảo trì và cung ứng vật tư hằng ngày cho một đầu mối chuyên trách, có số liệu và báo cáo rõ ràng.</p>
          </div>
      </div>
    </div>
  </section>

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8"><p class="text-[15.5px] text-gray-600 leading-[1.85] mb-8 max-w-4xl">Vận hành thiết bị theo hợp đồng là lớp dịch vụ nằm giữa 'chỉ bán máy' và 'quản lý in ấn trọn gói' — phù hợp với đơn vị đã có sẵn thiết bị nhưng cần một bên vận hành hộ.</p><h2 class="text-[13px] font-bold uppercase tracking-[0.16em] text-[#181923] mb-4">Phạm vi dịch vụ</h2><ul class="grid grid-cols-1 md:grid-cols-1 gap-x-10 gap-y-3.5">
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Theo dõi và chốt counter định kỳ theo từng mã máy.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Cung ứng vật tư theo định mức hoặc theo thực tế sử dụng.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Bảo trì phòng ngừa theo lịch.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Xử lý sự cố theo cam kết thời gian.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Báo cáo định kỳ về sản lượng, vật tư đã cấp và sự cố đã xử lý.</span>
        </li>
      </ul>
    </div>
  </section>

  <section class="py-16 bg-[#f5f8fb] ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8"><h2 class="text-2xl sm:text-[32px] font-bold text-[#181923] mb-8">Quy trình thực hiện</h2>
      <ol class="mt-2">
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">1</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 1</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Tiếp nhận đội thiết bị</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Kiểm kê thiết bị hiện có, chốt counter khởi điểm.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">2</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 2</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Thiết lập lịch vận hành</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Lịch bảo trì, lịch cấp vật tư và kênh tiếp nhận sự cố.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">3</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 3</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Vận hành định kỳ</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Bảo trì, cung ứng vật tư, xử lý sự cố theo lịch và theo yêu cầu phát sinh.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">4</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 4</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Báo cáo</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Gửi báo cáo sản lượng, vật tư và sự cố theo kỳ đã thống nhất.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="py-16 bg-[#f5f8fb] ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14">
        <div class="lg:col-span-7">
      <h2 class="text-2xl sm:text-[32px] font-bold text-[#181923] mb-8">Câu hỏi thường gặp</h2>
      <div class="space-y-3">
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Khác gì so với Managed Print Service?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Vận hành thiết bị là dịch vụ tập trung vào việc chăm sóc thiết bị hiện có (counter, vật tư, bảo trì, báo cáo). <a class="text-[#1A9900] font-medium hover:underline" href="/giai-phap/quan-ly-van-hanh/">Managed Print Service</a> có phạm vi rộng hơn, bao gồm cả tư vấn chuẩn hóa lại đội thiết bị và tối ưu chi phí theo kỳ.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Có áp dụng cho thiết bị không thuê từ Hương Sơn không?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Có, miễn là thiết bị còn phù hợp để bảo trì và có vật tư tương thích.</div>
        </details>
      </div>
        </div>
        <div class="lg:col-span-5">
          
      <div class="bg-white border border-gray-200 p-6 sm:p-9">
        <h2 class="text-xl sm:text-[26px] font-bold text-[#181923] mb-2">Yêu cầu dịch vụ này</h2>
        <p class="text-[14.5px] text-gray-500 leading-relaxed mb-7">Hương Sơn phản hồi trong giờ làm việc. Thông tin của Quý đơn vị chỉ dùng để tư vấn và báo giá.</p>
        <form class="lead-form" id="svc-van-hanh-thiet-bi-form" method="post" action="/api/lead" novalidate>
          
          <input type="hidden" name="page_type" value="service" />
          <input type="hidden" name="product_model" value="" />
          <input type="hidden" name="solution_slug" value="" />
          <input type="hidden" name="source_url" value="" data-autofill="url" />
          <input type="hidden" name="referrer" value="" data-autofill="referrer" />
          <input type="hidden" name="utm_source" value="" data-autofill="utm_source" />
          <input type="hidden" name="utm_medium" value="" data-autofill="utm_medium" />
          <input type="hidden" name="utm_campaign" value="" data-autofill="utm_campaign" />
          <input type="hidden" name="utm_term" value="" data-autofill="utm_term" />
          <input type="hidden" name="utm_content" value="" data-autofill="utm_content" />
          <input type="hidden" name="gclid" value="" data-autofill="gclid" />
          <div class="hidden" aria-hidden="true">
            <label for="f-svc-van-hanh-thiet-bi-hp">Bỏ trống ô này</label>
            <input type="text" id="f-svc-van-hanh-thiet-bi-hp" name="_hp" tabindex="-1" autocomplete="off" />
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
          <div class="sm:col-span-1">
            <label for="f-ho_ten" class="block text-[13px] font-semibold text-[#181923] mb-2">Họ và tên <span class="text-[#1A9900]">*</span></label>
            <input type="text" id="f-ho_ten" name="ho_ten" required placeholder="Nguyễn Văn A"
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition" />
          </div>
          <div class="sm:col-span-1">
            <label for="f-chuc_vu" class="block text-[13px] font-semibold text-[#181923] mb-2">Chức vụ</label>
            <input type="text" id="f-chuc_vu" name="chuc_vu" placeholder="Trưởng phòng"
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition" />
          </div>
          <div class="sm:col-span-2">
            <label for="f-don_vi" class="block text-[13px] font-semibold text-[#181923] mb-2">Tên đơn vị <span class="text-[#1A9900]">*</span></label>
            <input type="text" id="f-don_vi" name="don_vi" required placeholder="Sở GD&amp;ĐT / Trường / Công ty"
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition" />
          </div>
          <div class="sm:col-span-1">
            <label for="f-loai_don_vi" class="block text-[13px] font-semibold text-[#181923] mb-2">Loại đơn vị <span class="text-[#1A9900]">*</span></label>
            <select id="f-loai_don_vi" name="loai_don_vi" required
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] bg-white focus:outline-none focus:border-[#1A9900] transition"><option value="">— Chọn —</option><option value="Sở GD&amp;ĐT">Sở GD&amp;ĐT</option><option value="Phòng GD&amp;ĐT">Phòng GD&amp;ĐT</option><option value="Trường THPT / THCS / Tiểu học">Trường THPT / THCS / Tiểu học</option><option value="Trường Đại học – Cao đẳng">Trường Đại học – Cao đẳng</option><option value="Cơ quan Nhà nước – UBND">Cơ quan Nhà nước – UBND</option><option value="Ngân hàng – Tài chính">Ngân hàng – Tài chính</option><option value="Tập đoàn – Tổng công ty">Tập đoàn – Tổng công ty</option><option value="Doanh nghiệp SME">Doanh nghiệp SME</option><option value="Khác">Khác</option></select>
          </div>
          <div class="sm:col-span-1">
            <label for="f-cua" class="block text-[13px] font-semibold text-[#181923] mb-2">Bộ phận phụ trách</label>
            <select id="f-cua" name="cua"
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] bg-white focus:outline-none focus:border-[#1A9900] transition"><option value="">— Chọn —</option><option value="Lãnh đạo đơn vị">Lãnh đạo đơn vị</option><option value="Phòng chuyên môn / Khảo thí – QLCLGD">Phòng chuyên môn / Khảo thí – QLCLGD</option><option value="Phòng Kế hoạch – Tài chính">Phòng Kế hoạch – Tài chính</option><option value="Phòng Hành chính – Văn thư">Phòng Hành chính – Văn thư</option><option value="Kỹ thuật – IT">Kỹ thuật – IT</option><option value="Khác">Khác</option></select>
          </div>
          <div class="sm:col-span-1">
            <label for="f-dien_thoai" class="block text-[13px] font-semibold text-[#181923] mb-2">Điện thoại / Zalo <span class="text-[#1A9900]">*</span></label>
            <input type="tel" id="f-dien_thoai" name="dien_thoai" required placeholder="09xx xxx xxx"
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition" />
          </div>
          <div class="sm:col-span-1">
            <label for="f-email" class="block text-[13px] font-semibold text-[#181923] mb-2">Email</label>
            <input type="email" id="f-email" name="email" placeholder="ten@donvi.gov.vn"
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition" />
          </div>
          <div class="sm:col-span-1">
            <label for="f-tinh_thanh" class="block text-[13px] font-semibold text-[#181923] mb-2">Tỉnh / Thành phố <span class="text-[#1A9900]">*</span></label>
            <input type="text" id="f-tinh_thanh" name="tinh_thanh" required placeholder="Hà Nội"
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition" />
          </div>
          <div class="sm:col-span-1">
            <label for="f-thoi_diem_can" class="block text-[13px] font-semibold text-[#181923] mb-2">Thời điểm cần</label>
            <select id="f-thoi_diem_can" name="thoi_diem_can"
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] bg-white focus:outline-none focus:border-[#1A9900] transition"><option value="">— Chọn —</option><option value="Trong tháng này">Trong tháng này</option><option value="1–3 tháng tới">1–3 tháng tới</option><option value="Theo kỳ thi sắp tới">Theo kỳ thi sắp tới</option><option value="3–6 tháng tới">3–6 tháng tới</option><option value="Đang lập dự toán / kế hoạch năm">Đang lập dự toán / kế hoạch năm</option><option value="Chưa xác định">Chưa xác định</option></select>
          </div>
          <div class="sm:col-span-2">
            <label for="f-nhu_cau" class="block text-[13px] font-semibold text-[#181923] mb-2">Nhu cầu chính <span class="text-[#1A9900]">*</span></label>
            <select id="f-nhu_cau" name="nhu_cau" required
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] bg-white focus:outline-none focus:border-[#1A9900] transition"><option value="">— Chọn —</option><option value="EXAM">In sao đề thi – thuê máy in nhân bản siêu tốc</option><option value="PRINT">Thuê máy photocopy / máy in A3 – A4</option><option value="PRO">Quản lý in ấn trọn gói – Managed Print Service</option><option value="DIGITAL">Scan – OCR – số hóa tài liệu</option><option value="MUA">Mua thiết bị mới</option><option value="VATTU">Vật tư – linh kiện – mực Fansipan</option><option value="KYTHUAT">Bảo trì – sửa chữa – dịch vụ kỹ thuật</option><option value="THUMUA">Thu mua máy cũ – đổi máy mới</option></select>
          </div>
          <div class="sm:col-span-1">
            <label for="f-so_luong_thiet_bi" class="block text-[13px] font-semibold text-[#181923] mb-2">Số lượng thiết bị dự kiến</label>
            <input type="text" id="f-so_luong_thiet_bi" name="so_luong_thiet_bi" placeholder="VD: 02 máy"
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition" />
          </div>
          <div class="sm:col-span-1">
            <label for="f-ngan_sach" class="block text-[13px] font-semibold text-[#181923] mb-2">Ngân sách dự kiến</label>
            <input type="text" id="f-ngan_sach" name="ngan_sach" placeholder="VD: 60 triệu/máy"
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition" />
          </div>
          <div class="sm:col-span-2">
            <label for="f-ghi_chu" class="block text-[13px] font-semibold text-[#181923] mb-2">Mô tả nhu cầu</label>
            <textarea id="f-ghi_chu" name="ghi_chu" rows="4" placeholder="Số điểm in, sản lượng dự kiến, khổ giấy, thời gian thuê, yêu cầu dự phòng, yêu cầu kỹ thuật..."
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition"></textarea>
          </div>
          </div>
          <div class="mt-7 flex flex-col sm:flex-row items-center gap-4">
            <button type="submit" data-ga="generate_lead" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-9 py-4 transition w-full sm:w-auto">
              GỬI YÊU CẦU
            </button>
            <a href="tel:02439729484" data-ga="click_hotline" class="text-[14.5px] font-bold text-[#181923] hover:text-[#1A9900] transition">
              <i class="fa-solid fa-phone text-[#1A9900] mr-2"></i>Hoặc gọi 024 3972 9484
            </a>
          </div>
        </form>
      </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-3">Xem thêm</span>
        <h2 class="text-2xl sm:text-[34px] font-bold text-[#181923] leading-tight">Liên quan</h2>
      </div><div class="grid grid-cols-1 md:grid-cols-3 gap-4"><a href="/giai-phap/quan-ly-van-hanh/" class="border border-gray-200 bg-white px-5 py-4 text-[14.5px] font-bold text-[#181923] hover:border-[#1A9900] hover:text-[#1A9900] transition flex items-center justify-between"><span>Quản lý – Vận hành (MPS)</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a><a href="/dich-vu/bao-tri-sua-chua/" class="border border-gray-200 bg-white px-5 py-4 text-[14.5px] font-bold text-[#181923] hover:border-[#1A9900] hover:text-[#1A9900] transition flex items-center justify-between"><span>Bảo trì – Sửa chữa</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a><a href="/giai-phap/cho-thue-thiet-bi/" class="border border-gray-200 bg-white px-5 py-4 text-[14.5px] font-bold text-[#181923] hover:border-[#1A9900] hover:text-[#1A9900] transition flex items-center justify-between"><span>Cho thuê thiết bị</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a></div>
    </div>
  </section>

  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/xxx_home-bg_xxx.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Cần Hương Sơn xử lý ngay?</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Gọi hotline để được tiếp nhận nhanh nhất, hoặc gửi yêu cầu qua form để lên lịch.</p>
      </div>
      <div class="flex flex-wrap items-center gap-4 flex-shrink-0">
        <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Yêu cầu báo giá</a>
        
        <a href="tel:02439729484" data-ga="click_hotline" class="text-white font-bold text-sm hover:text-[#1A9900] transition">
          <i class="fa-solid fa-phone text-[#1A9900] mr-2"></i>024 3972 9484
        </a>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-[#181924] text-gray-300 pt-20 pb-10 border-t border-gray-800 relative bg-cover bg-center" style="background-image: linear-gradient(rgba(24, 25, 36, 0.9), rgba(24, 25, 36, 0.97)), url('/assets/images/xxx_footer_xxx.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-12 pb-14 border-b border-gray-800/80">

        <div class="lg:col-span-4 space-y-5">
          <a href="/" class="inline-block"><span class="inline-flex items-center bg-white px-3 py-1.5 h-11 sm:h-12"><img src="/assets/images/brand/HUONG_SON_logo.svg" alt="Hương Sơn" class="h-full w-auto object-contain" /></span></a>
          <p class="text-[15px] text-gray-300 leading-relaxed max-w-md">
            CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ HƯƠNG SƠN — Giải pháp thiết bị, in ấn, số hóa và dịch vụ cho Cơ quan Nhà nước – Giáo dục – Ngân hàng – Doanh nghiệp.
          </p>
          <p class="text-[13.5px] text-gray-400">Mã số thuế: 0102759269 · Thành lập 01/06/2008</p>
          <div class="flex flex-wrap gap-2 pt-1">
            <span class="text-[11px] font-bold tracking-wider text-gray-300 border border-gray-700 px-2.5 py-1">DUPLO</span><span class="text-[11px] font-bold tracking-wider text-gray-300 border border-gray-700 px-2.5 py-1">TOSHIBA</span><span class="text-[11px] font-bold tracking-wider text-gray-300 border border-gray-700 px-2.5 py-1">RICOH</span><span class="text-[11px] font-bold tracking-wider text-gray-300 border border-gray-700 px-2.5 py-1">KONICA MINOLTA</span><span class="text-[11px] font-bold tracking-wider text-gray-300 border border-gray-700 px-2.5 py-1">HP</span><span class="text-[11px] font-bold tracking-wider text-gray-300 border border-gray-700 px-2.5 py-1">FANSIPAN</span>
          </div>
        </div>

        <div class="lg:col-span-2">
          <h4 class="text-white text-[16px] font-bold mb-5 uppercase tracking-wider">Sản phẩm</h4>
          <ul class="space-y-3 text-[14.5px] font-normal text-gray-300"><li><a href="/san-pham/photocopy-may-da-chuc-nang/" class="hover:text-[#1A9900] transition block">Photocopy – Máy đa chức năng</a></li><li><a href="/san-pham/may-in-nhan-ban-toc-do-cao/" class="hover:text-[#1A9900] transition block">Máy in nhân bản tốc độ cao</a></li><li><a href="/san-pham/may-scan-so-hoa/" class="hover:text-[#1A9900] transition block">Máy Scan – Số hóa</a></li><li><a href="/san-pham/may-phoi-trang-hoan-thien-sau-in/" class="hover:text-[#1A9900] transition block">Máy phối trang – Hoàn thiện sau in</a></li><li><a href="/san-pham/may-in-laser/" class="hover:text-[#1A9900] transition block">Máy in Laser – Thiết bị in</a></li><li><a href="/san-pham/thiet-bi-phong-hoc-giao-duc/" class="hover:text-[#1A9900] transition block">Thiết bị phòng học – Giáo dục</a></li></ul>
        </div>

        <div class="lg:col-span-3">
          <h4 class="text-white text-[16px] font-bold mb-5 uppercase tracking-wider">Giải pháp</h4>
          <ul class="space-y-3 text-[14.5px] font-normal text-gray-300"><li><a href="/giai-phap/giao-duc/" class="hover:text-[#1A9900] transition block">Giáo dục</a></li><li><a href="/giai-phap/co-quan-nha-nuoc/" class="hover:text-[#1A9900] transition block">Cơ quan Nhà nước</a></li><li><a href="/giai-phap/ngan-hang-tai-chinh/" class="hover:text-[#1A9900] transition block">Ngân hàng – Tài chính</a></li><li><a href="/giai-phap/tap-doan-tong-cong-ty/" class="hover:text-[#1A9900] transition block">Tập đoàn – Tổng công ty</a></li><li><a href="/giai-phap/in-de-thi-tai-lieu/" class="hover:text-[#1A9900] transition block">In đề thi – Tài liệu</a></li><li><a href="/giai-phap/scan-so-hoa/" class="hover:text-[#1A9900] transition block">Scan – Số hóa</a></li></ul>
        </div>
        <div class="lg:col-span-3">
          <h4 class="text-white text-[16px] font-bold mb-5 uppercase tracking-wider">Thông tin liên hệ</h4>
          <ul class="space-y-3.5 text-[14.5px] font-normal text-gray-300">
            <li class="flex items-start space-x-3">
              <i class="fa-solid fa-location-dot text-[#1A9900] mt-1 text-sm flex-shrink-0"></i>
              <span class="leading-relaxed">Số 27, ngõ 523 phố Minh Khai, phường Vĩnh Tuy, TP. Hà Nội</span>
            </li>
            <li class="flex items-center space-x-3">
              <i class="fa-solid fa-phone text-[#1A9900] text-sm flex-shrink-0"></i>
              <a href="tel:02439729484" data-ga="click_hotline" class="hover:text-[#1A9900] transition font-medium">024 3972 9484</a>
              <span class="text-gray-500 text-[13px]">Văn phòng</span>
            </li><li class="flex items-center space-x-3">
              <i class="fa-solid fa-phone text-[#1A9900] text-sm flex-shrink-0"></i>
              <a href="tel:0913237302" data-ga="click_hotline" class="hover:text-[#1A9900] transition font-medium">0913 237 302</a>
              <span class="text-gray-500 text-[13px]">Kinh doanh</span>
            </li><li class="flex items-center space-x-3">
              <i class="fa-solid fa-phone text-[#1A9900] text-sm flex-shrink-0"></i>
              <a href="tel:0911138583" data-ga="click_hotline" class="hover:text-[#1A9900] transition font-medium">091 113 8583</a>
              <span class="text-gray-500 text-[13px]">Kỹ thuật</span>
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

      <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-[14px] text-gray-400">
        <p>© Copyright 2026 CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ HƯƠNG SƠN · Thiết kế web bởi <a href="https://www.matbao.ws/" target="_blank" rel="noopener" class="text-[#1A9900] font-medium hover:underline">Mắt Bão WS</a></p>
        <div class="flex items-center space-x-6 mt-4 sm:mt-0">
          <a href="/dich-vu/" class="hover:text-[#1A9900] transition">Dịch vụ</a>
          <span class="text-gray-600">•</span>
          <a href="/nhan-tu-van/" class="hover:text-[#1A9900] transition">Nhận tư vấn</a>
        </div>
      </div>

    </div>
  </footer>

  <!-- MOBILE DRAWER -->
  <div id="mobile-backdrop" class="fixed inset-0 bg-black/60 z-50 hidden opacity-0 transition-opacity duration-300"></div>
  <div id="mobile-drawer" class="fixed top-0 left-0 bottom-0 w-80 max-w-[85vw] bg-[#181924] z-50 shadow-2xl transform -translate-x-full transition-transform duration-300 flex flex-col">
    <div class="p-6 border-b border-gray-800 flex items-center justify-between">
      <a href="/"><span class="inline-flex items-center bg-white px-3 py-1.5 h-11 sm:h-12"><img src="/assets/images/brand/HUONG_SON_logo.svg" alt="Hương Sơn" class="h-full w-auto object-contain" /></span></a>
      <button id="mobile-menu-close" class="text-gray-400 hover:text-white p-2" aria-label="Đóng menu">
        <i class="fa-solid fa-xmark text-xl"></i>
      </button>
    </div>
    <div class="p-6 flex-1 overflow-y-auto space-y-3">
      <div>
        <button class="mobile-dropdown-btn w-full flex items-center justify-between text-white font-medium py-2 border-b border-gray-800/50 hover:text-[#1A9900]">
          <span>SẢN PHẨM</span>
          <i class="fa-solid fa-chevron-down text-xs"></i>
        </button>
        <div class="hidden pl-4 py-2 space-y-2 text-sm text-gray-400">
          <a href="/san-pham/" class="block py-1 text-[#1A9900] font-medium">Tổng quan</a><a href="/san-pham/photocopy-may-da-chuc-nang/" class="block py-1 hover:text-white">Photocopy – Máy đa chức năng</a><a href="/san-pham/may-in-nhan-ban-toc-do-cao/" class="block py-1 hover:text-white">Máy in nhân bản tốc độ cao</a><a href="/san-pham/may-scan-so-hoa/" class="block py-1 hover:text-white">Máy Scan – Số hóa</a><a href="/san-pham/may-phoi-trang-hoan-thien-sau-in/" class="block py-1 hover:text-white">Máy phối trang – Hoàn thiện sau in</a><a href="/san-pham/may-in-laser/" class="block py-1 hover:text-white">Máy in Laser – Thiết bị in</a><a href="/san-pham/thiet-bi-phong-hoc-giao-duc/" class="block py-1 hover:text-white">Thiết bị phòng học – Giáo dục</a><a href="/san-pham/vat-tu-linh-kien-tieu-hao/" class="block py-1 hover:text-white">Vật tư – Linh kiện – Tiêu hao</a><a href="/san-pham/thiet-bi-van-phong-hoi-hop/" class="block py-1 hover:text-white">Thiết bị văn phòng – Hội họp</a><a href="/san-pham/fansipan/" class="block py-1 hover:text-white">FANSIPAN – Vật tư tương thích</a>
        </div>
      </div>
      <div>
        <button class="mobile-dropdown-btn w-full flex items-center justify-between text-white font-medium py-2 border-b border-gray-800/50 hover:text-[#1A9900]">
          <span>GIẢI PHÁP</span>
          <i class="fa-solid fa-chevron-down text-xs"></i>
        </button>
        <div class="hidden pl-4 py-2 space-y-2 text-sm text-gray-400">
          <a href="/giai-phap/" class="block py-1 text-[#1A9900] font-medium">Tổng quan</a><a href="/giai-phap/giao-duc/" class="block py-1 hover:text-white">Giáo dục</a><a href="/giai-phap/co-quan-nha-nuoc/" class="block py-1 hover:text-white">Cơ quan Nhà nước</a><a href="/giai-phap/ngan-hang-tai-chinh/" class="block py-1 hover:text-white">Ngân hàng – Tài chính</a><a href="/giai-phap/tap-doan-tong-cong-ty/" class="block py-1 hover:text-white">Tập đoàn – Tổng công ty</a><a href="/giai-phap/in-de-thi-tai-lieu/" class="block py-1 hover:text-white">In đề thi – Tài liệu</a><a href="/giai-phap/scan-so-hoa/" class="block py-1 hover:text-white">Scan – Số hóa</a><a href="/giai-phap/cho-thue-thiet-bi/" class="block py-1 hover:text-white">Cho thuê thiết bị</a><a href="/giai-phap/quan-ly-van-hanh/" class="block py-1 hover:text-white">Quản lý – Vận hành</a>
        </div>
      </div>
      <div>
        <button class="mobile-dropdown-btn w-full flex items-center justify-between text-white font-medium py-2 border-b border-gray-800/50 hover:text-[#1A9900]">
          <span>DỊCH VỤ</span>
          <i class="fa-solid fa-chevron-down text-xs"></i>
        </button>
        <div class="hidden pl-4 py-2 space-y-2 text-sm text-gray-400">
          <a href="/dich-vu/" class="block py-1 text-[#1A9900] font-medium">Tổng quan</a><a href="/dich-vu/bao-tri-sua-chua/" class="block py-1 hover:text-white">Bảo trì – Sửa chữa</a><a href="/dich-vu/dich-vu-ky-thuat/" class="block py-1 hover:text-white">Dịch vụ kỹ thuật</a><a href="/dich-vu/van-hanh-thiet-bi/" class="block py-1 hover:text-white">Vận hành thiết bị</a><a href="/dich-vu/thu-mua-may-cu-doi-may-moi/" class="block py-1 hover:text-white">Thu mua máy cũ – Đổi máy mới</a>
        </div>
      </div>
      <a href="/du-an/" class="block text-white font-medium py-2 border-b border-gray-800/50 hover:text-[#1A9900]">DỰ ÁN</a>
      <div>
        <button class="mobile-dropdown-btn w-full flex items-center justify-between text-white font-medium py-2 border-b border-gray-800/50 hover:text-[#1A9900]">
          <span>VỀ HƯƠNG SƠN</span>
          <i class="fa-solid fa-chevron-down text-xs"></i>
        </button>
        <div class="hidden pl-4 py-2 space-y-2 text-sm text-gray-400">
          <a href="/ve-huong-son/" class="block py-1 text-[#1A9900] font-medium">Tổng quan</a><a href="/ve-huong-son/" class="block py-1 hover:text-white">Giới thiệu Hương Sơn</a><a href="/ve-huong-son/nang-luc/" class="block py-1 hover:text-white">Hồ sơ năng lực</a><a href="/ve-huong-son/doi-tac-thuong-hieu/" class="block py-1 hover:text-white">Đối tác – Thương hiệu</a><a href="/ve-huong-son/tai-nguyen/" class="block py-1 hover:text-white">Tài nguyên – Catalogue</a><a href="/ve-huong-son/kien-thuc/" class="block py-1 hover:text-white">Kiến thức</a><a href="/ve-huong-son/tin-tuc/" class="block py-1 hover:text-white">Tin tức</a>
        </div>
      </div>
      <a href="/nhan-tu-van/" class="block text-white font-medium py-2 border-b border-gray-800/50 hover:text-[#1A9900]">NHẬN TƯ VẤN</a>
    </div>
    <div class="p-6 border-t border-gray-800 bg-[#12131c]">
      <a href="tel:02439729484" data-ga="click_hotline" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider py-3 w-full text-center block">
        <i class="fa-solid fa-phone mr-2"></i> 024 3972 9484
      </a>
    </div>
  </div>

  <!-- SEARCH POPUP -->
  <div id="search-modal" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300 flex items-center justify-center p-4">
    <div class="bg-[#181924] border border-gray-800 w-full max-w-2xl p-6 sm:p-8 shadow-2xl relative">
      <button id="search-close" class="absolute top-4 right-4 text-gray-400 hover:text-white p-2" aria-label="Đóng">
        <i class="fa-solid fa-xmark text-xl"></i>
      </button>
      <h3 class="text-lg font-bold text-white mb-4 uppercase">Tìm kiếm</h3>
      <form action="/ve-huong-son/kien-thuc/" method="get" class="relative">
        <input type="text" id="search-input" name="s" placeholder="VD: thuê máy in đề thi, máy scan tốc độ cao..." class="w-full bg-gray-900 border border-gray-700 text-white px-4 py-3 pr-12 text-sm focus:outline-none focus:border-[#1A9900]" />
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
  <a href="https://zalo.me/0913237302" target="_blank" rel="noopener" data-ga="click_zalo" class="fixed right-6 z-40 w-12 h-12 bg-[#0068ff] text-white flex items-center justify-center shadow-xl animate-pulse-zalo" style="bottom: 96px;" title="Chat Zalo">
    <span class="font-bold text-xs">Zalo</span>
  </a>
  <button id="back-to-top" class="fixed bottom-8 right-6 z-40 w-10 h-10 bg-gray-900 text-white flex items-center justify-center shadow-xl hover:bg-[#1A9900] transition-all duration-300 opacity-0 invisible translate-y-4" aria-label="Lên đầu trang">
    <i class="fa-solid fa-arrow-up text-xs"></i>
  </button>

  <script src="/assets/js/main.js?v=2.0.1"></script>
</body>
</html>
@endsection
