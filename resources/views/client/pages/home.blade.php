@extends('client.layouts.app')

@section('title', "Hương Sơn – Giải pháp thiết bị, in ấn, số hóa và dịch vụ cho Cơ quan Nhà nước – Giáo dục – Ngân hàng – Doanh nghiệp")
@section('meta_description', "Hương Sơn cung cấp thiết bị, cho thuê, vật tư, kỹ thuật và giải pháp số hóa tài liệu cho Giáo dục, Cơ quan Nhà nước, Ngân hàng và Doanh nghiệp. Đại lý ủy quyền Duplo, Toshiba, Konica Minolta.")
@section('canonical', url('/'))
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
      "024 3972 9484",
      "0913 237 302",
      "091 113 8583"
    ],
    "email": "info@@huongsonco.com.vn",
    "openingHours": "Mo-Sa 08:00-17:30",
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
<section class="relative bg-[#181924] min-h-[560px] lg:min-h-[640px] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
      <img src="/assets/images/products/duplo-dp-x550.jpg" alt="Thiết bị Hương Sơn" class="w-full h-full object-cover object-center opacity-40" />
      <div class="absolute inset-0 bg-gradient-to-r from-[#181924] via-[#181924]/95 to-[#181924]/70"></div>
    </div>
    <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 py-20 w-full">
      <div class="max-w-3xl text-white">
        <span class="font-handwriting text-3xl text-[#5eb74c] font-bold block mb-3">Hương Sơn từ 2008</span>
        <h1 class="text-3xl sm:text-4xl lg:text-[46px] font-bold text-white leading-tight mb-5">
          GIẢI PHÁP THIẾT BỊ – IN ẤN VÀ SỐ HÓA
        </h1>
        <p class="text-[15px] sm:text-base text-gray-200 mb-3 leading-relaxed font-medium">
          Photocopy · In nhanh · In đề thi · Scan/Số hóa · Thiết bị Giáo dục · Cho thuê · Dịch vụ kỹ thuật
        </p>
        <p class="text-[14.5px] text-gray-300 mb-8 leading-relaxed max-w-2xl">
          Đồng hành cùng Cơ quan Nhà nước – Sở Giáo dục & Đào tạo – Ngân hàng – Doanh nghiệp trong quản lý, xử lý và số hóa tài liệu.
        </p>
        <div class="flex flex-wrap items-center gap-4">
          <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Yêu cầu báo giá</a>
          <a href="/giai-phap/giao-duc/in-de-thi/" data-ga="cta_click" class="border border-gray-400 hover:border-white text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Phương án in đề thi</a>
        </div>
      </div>
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
  <section class="py-12 bg-[#181924] text-white">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8"><div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-gray-800">
        <div class="pt-6 md:pt-0">
          <div class="text-4xl sm:text-5xl font-bold text-[#1A9900] mb-2">2008</div>
          <h4 class="text-[13.5px] font-bold text-white uppercase tracking-wider leading-snug">Năm thành lập</h4>
        </div>
        <div class="pt-6 md:pt-0">
          <div class="text-4xl sm:text-5xl font-bold text-[#1A9900] mb-2">2017</div>
          <h4 class="text-[13.5px] font-bold text-white uppercase tracking-wider leading-snug">Đại lý ủy quyền Duplo &amp; Toshiba miền Bắc</h4>
        </div>
        <div class="pt-6 md:pt-0">
          <div class="text-4xl sm:text-5xl font-bold text-[#1A9900] mb-2">127</div>
          <h4 class="text-[13.5px] font-bold text-white uppercase tracking-wider leading-snug">Máy Toshiba cung cấp cho Vietcombank (2024)</h4>
        </div>
        <div class="pt-6 md:pt-0">
          <div class="text-4xl sm:text-5xl font-bold text-[#1A9900] mb-2">3</div>
          <h4 class="text-[13.5px] font-bold text-white uppercase tracking-wider leading-snug">Cấp độ SLA cam kết thời gian xử lý (P1/P2/P3)</h4>
        </div></div></div>
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
        <a href="tel:02439729484" data-ga="click_hotline" class="text-white font-bold text-sm hover:text-[#1A9900] transition">
          <i class="fa-solid fa-phone text-[#1A9900] mr-2"></i>024 3972 9484
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
@endsection
