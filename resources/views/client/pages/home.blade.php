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
<section class="relative bg-[#181924] min-h-[560px] lg:min-h-[640px] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
      <img src="/assets/images/products/duplo-dp-x550.jpg" alt="Thiết bị Hương Sơn" class="w-full h-full object-cover object-center opacity-40" />
      <div class="absolute inset-0 bg-gradient-to-r from-[#181924] via-[#181924]/95 to-[#181924]/70"></div>
    </div>
    <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 py-20 w-full">
      <div class="max-w-3xl text-white">
        <span class="font-handwriting text-3xl text-[#5eb74c] font-bold block mb-3">Hương Sơn từ 2008</span>
        <h1 class="text-3xl sm:text-4xl lg:text-[46px] font-bold text-white leading-tight mb-5">
          Giải pháp Thiết bị, In ấn, Số hóa & Quản lý tài liệu
        </h1>
        <p class="text-[15px] sm:text-base text-gray-200 mb-8 leading-relaxed font-medium max-w-2xl">
          Hương Sơn cung cấp thiết bị, cho thuê, bảo trì, in ấn số lượng lớn và số hóa tài liệu cho Cơ quan Nhà nước, Sở GD&ĐT, Trường học, Ngân hàng và Doanh nghiệp.
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
  <section class="py-16 bg-[#f5f8fb] ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-3">Khách hàng chiến lược</span>
        <h2 class="text-2xl sm:text-[34px] font-bold text-[#181923] leading-tight">Giải Pháp May Đo Riêng Cho 3 Nhóm Khách Hàng Trọng Tâm</h2>
      </div><p class="text-center text-gray-600 text-sm sm:text-base max-w-3xl mx-auto -mt-6 mb-12 leading-relaxed">Hương Sơn không áp dụng chung một khuôn mẫu cho mọi đơn vị. Mỗi nhóm khách hàng có bài toán đặc thù về an toàn dữ liệu, tính pháp lý, cơ chế ngân sách và yêu cầu kỹ thuật riêng biệt:</p><div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="bg-white border border-gray-200 hover:border-[#1A9900] p-7 flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="w-12 h-12 bg-[#181924] text-white group-hover:bg-[#1A9900] transition-colors flex items-center justify-center mb-5">
              <i class="fa-solid fa-landmark text-xl"></i>
            </div>
            <span class="text-[11px] font-bold text-[#1A9900] uppercase tracking-[0.18em] block mb-1.5">Khối Cơ Quan Nhà Nước &amp; Sở GD&amp;ĐT</span>
            <h3 class="text-xl font-bold text-[#181923] leading-snug mb-3">Bảo Mật Cấp Độ Cao &amp; Dự Phòng N+1 Cho Đợt Thi</h3>
            <p class="text-[13.5px] text-gray-600 leading-relaxed mb-5">Thiết kế riêng cho các cơ quan hành chính công, Sở GD&amp;ĐT và Hội đồng in sao đề thi: Đáp ứng nghiêm ngặt quy chế cách ly 3 vòng, vận hành offline 100%, bảo mật tuyệt đối, đầy đủ chứng chỉ hợp quy CO/CQ và hóa đơn tài chính chuẩn kho bạc Nhà nước.</p>
            <ul class="space-y-2.5 mb-6 pb-6 border-b border-gray-100"><li class="flex items-start gap-2.5 text-[13px] text-gray-700"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span>Quy trình cách ly 3 vòng tuyệt đối, vận hành offline 100% bảo mật đề thi.</span></li><li class="flex items-start gap-2.5 text-[13px] text-gray-700"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span>Hồ sơ pháp lý, hóa đơn VAT, chứng chỉ xuất xứ CO/CQ đầy đủ chuẩn kho bạc.</span></li><li class="flex items-start gap-2.5 text-[13px] text-gray-700"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span>Phương án máy dự phòng nóng N+1 và kỹ sư thường trực tại chỗ trong kỳ thi.</span></li><li class="flex items-start gap-2.5 text-[13px] text-gray-700"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span>Đã triển khai thực tế cho Sở GD&amp;ĐT Vĩnh Phúc và Sở GD&amp;ĐT Quảng Trị.</span></li></ul>
          </div>
          <div class="flex flex-wrap items-center gap-4 pt-2"><a href="/thue-may-photocopy-so-gd/" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#181923] hover:text-[#1A9900] border-b border-gray-300 hover:border-[#1A9900] pb-0.5 transition"><span>Thuê máy Sở GD&amp;ĐT</span><i class="fa-solid fa-arrow-right text-[10px]"></i></a><a href="/giai-phap/giao-duc/in-de-thi/" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#181923] hover:text-[#1A9900] border-b border-gray-300 hover:border-[#1A9900] pb-0.5 transition"><span>Giải pháp in đề thi</span><i class="fa-solid fa-arrow-right text-[10px]"></i></a></div>
        </div>
        <div class="bg-white border border-gray-200 hover:border-[#1A9900] p-7 flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="w-12 h-12 bg-[#181924] text-white group-hover:bg-[#1A9900] transition-colors flex items-center justify-center mb-5">
              <i class="fa-solid fa-building-columns text-xl"></i>
            </div>
            <span class="text-[11px] font-bold text-[#1A9900] uppercase tracking-[0.18em] block mb-1.5">Khối Doanh Nghiệp &amp; Ngân Hàng</span>
            <h3 class="text-xl font-bold text-[#181923] leading-snug mb-3">Tối Ưu Chi Phí TCO &amp; Bảo Mật Dữ Liệu In Ấn Doanh Nghiệp</h3>
            <p class="text-[13.5px] text-gray-600 leading-relaxed mb-5">Giải pháp Managed Print Services (MPS) toàn diện cho doanh nghiệp và hệ thống ngân hàng thương mại: Tiết kiệm 30–40% chi phí vận hành, bảo mật in ấn quẹt thẻ RFID/PIN, xóa sạch dữ liệu ổ cứng theo tiêu chuẩn quốc tế DoD 5220.22-M.</p>
            <ul class="space-y-2.5 mb-6 pb-6 border-b border-gray-100"><li class="flex items-start gap-2.5 text-[13px] text-gray-700"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span>0đ chi phí đầu tư ban đầu, 0đ tiền cọc thiết bị, bảo dưỡng định kỳ trọn gói.</span></li><li class="flex items-start gap-2.5 text-[13px] text-gray-700"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span>Bảo mật tài liệu với pull-printing mã PIN/RFID, chuẩn xóa dữ liệu ổ cứng an toàn.</span></li><li class="flex items-start gap-2.5 text-[13px] text-gray-700"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span>Cam kết dịch vụ SLA P1 có mặt tận nơi xử lý sự cố trong vòng 2 giờ.</span></li><li class="flex items-start gap-2.5 text-[13px] text-gray-700"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span>Năng lực đã chứng minh qua hợp đồng 127 máy photocopy Toshiba cho Vietcombank.</span></li></ul>
          </div>
          <div class="flex flex-wrap items-center gap-4 pt-2"><a href="/thue-may-photocopy-ngan-hang/" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#181923] hover:text-[#1A9900] border-b border-gray-300 hover:border-[#1A9900] pb-0.5 transition"><span>Thuê máy ngân hàng</span><i class="fa-solid fa-arrow-right text-[10px]"></i></a><a href="/thue-may-photocopy-ha-noi/" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#181923] hover:text-[#1A9900] border-b border-gray-300 hover:border-[#1A9900] pb-0.5 transition"><span>Bảng giá thuê Hà Nội</span><i class="fa-solid fa-arrow-right text-[10px]"></i></a></div>
        </div>
        <div class="bg-white border border-gray-200 hover:border-[#1A9900] p-7 flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="w-12 h-12 bg-[#181924] text-white group-hover:bg-[#1A9900] transition-colors flex items-center justify-center mb-5">
              <i class="fa-solid fa-graduation-cap text-xl"></i>
            </div>
            <span class="text-[11px] font-bold text-[#1A9900] uppercase tracking-[0.18em] block mb-1.5">Khối Trường Học &amp; Cơ Sở Giáo Dục</span>
            <h3 class="text-xl font-bold text-[#181923] leading-snug mb-3">Hợp Đồng Theo Niên Khóa &amp; Hệ Thống Số Hóa Học Bạ</h3>
            <p class="text-[13.5px] text-gray-600 leading-relaxed mb-5">Đồng hành cùng các trường Đại học, Cao đẳng, THPT và THCS với chính sách thuê máy linh hoạt 9 tháng học kỳ, miễn phí hoàn toàn cước thuê 3 tháng hè và hỗ trợ số hóa toàn diện học bạ điện tử chuẩn Bộ Giáo dục &amp; Đào tạo.</p>
            <ul class="space-y-2.5 mb-6 pb-6 border-b border-gray-100"><li class="flex items-start gap-2.5 text-[13px] text-gray-700"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span>Chính sách độc quyền: Miễn phí tiền thuê trong 3 tháng nghỉ hè (tháng 6, 7, 8).</span></li><li class="flex items-start gap-2.5 text-[13px] text-gray-700"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span>Máy photocopy công suất lớn 35–55 ppm đáp ứng in đề kiểm tra và giáo án tập trung.</span></li><li class="flex items-start gap-2.5 text-[13px] text-gray-700"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span>Số hóa học bạ điện tử chuẩn Thông tư 26/2020 &amp; 22/2021/TT-BGDĐT bằng máy scan Ricoh.</span></li><li class="flex items-start gap-2.5 text-[13px] text-gray-700"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span>Cung cấp thiết bị phòng học thông minh (màn hình tương tác ViewSonic, camera vật thể).</span></li></ul>
          </div>
          <div class="flex flex-wrap items-center gap-4 pt-2"><a href="/thue-may-photocopy-truong-hoc/" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#181923] hover:text-[#1A9900] border-b border-gray-300 hover:border-[#1A9900] pb-0.5 transition"><span>Thuê máy trường học</span><i class="fa-solid fa-arrow-right text-[10px]"></i></a><a href="/giai-phap/giao-duc/" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#181923] hover:text-[#1A9900] border-b border-gray-300 hover:border-[#1A9900] pb-0.5 transition"><span>Education Hub 6 trụ cột</span><i class="fa-solid fa-arrow-right text-[10px]"></i></a></div>
        </div></div>
    </div>
  </section>

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8"><div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12"><div><span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-1.5">Hương Sơn Education Hub</span><h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#181923] leading-tight">Cụm Giải Pháp Giáo Dục Toàn Diện 6 Trụ Cột</h2></div><a href="/giai-phap/giao-duc/" class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[#1A9900] hover:text-[#147700] transition border border-[#1A9900]/40 hover:border-[#1A9900] px-5 py-2.5"><span>Xem trung tâm giải pháp giáo dục</span><i class="fa-solid fa-arrow-right text-[10px]"></i></a></div><div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <a href="/giai-phap/giao-duc/in-de-thi/" class="bg-white border border-gray-200 hover:border-[#1A9900] p-6 flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="flex items-center justify-between mb-4">
              <div class="w-10 h-10 bg-[#181924] text-white group-hover:bg-[#1A9900] transition-colors flex items-center justify-center">
                <i class="fa-solid fa-print text-base"></i>
              </div>
              <span class="text-[11px] font-bold text-gray-400 group-hover:text-[#1A9900] uppercase tracking-wider transition">Trụ cột 1</span>
            </div>
            <h3 class="text-base font-bold text-[#181923] group-hover:text-[#1A9900] transition mb-2">In Sao Đề Thi Siêu Tốc</h3>
            <p class="text-[13px] text-gray-500 leading-relaxed mb-4">Máy in Duplo ép lạnh 130–180 ppm không tĩnh điện, cách ly 3 vòng tuyệt đối theo quy chế thi.</p>
          </div>
          <span class="inline-flex items-center gap-1.5 text-xs font-bold text-[#1A9900] group-hover:translate-x-1 transition-transform">
            <span>Chi tiết giải pháp</span><i class="fa-solid fa-arrow-right text-[10px]"></i>
          </span>
        </a>
        <a href="/giai-phap/giao-duc/thue-may-phuc-vu-ky-thi/" class="bg-white border border-gray-200 hover:border-[#1A9900] p-6 flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="flex items-center justify-between mb-4">
              <div class="w-10 h-10 bg-[#181924] text-white group-hover:bg-[#1A9900] transition-colors flex items-center justify-center">
                <i class="fa-solid fa-stopwatch text-base"></i>
              </div>
              <span class="text-[11px] font-bold text-gray-400 group-hover:text-[#1A9900] uppercase tracking-wider transition">Trụ cột 2</span>
            </div>
            <h3 class="text-base font-bold text-[#181923] group-hover:text-[#1A9900] transition mb-2">Thuê Máy Kỳ Thi Tuyển Sinh</h3>
            <p class="text-[13px] text-gray-500 leading-relaxed mb-4">Gói thuê ngắn hạn 7–15 ngày, bao trọn Master/mực, kỹ sư trực hiện trường và máy dự phòng N+1.</p>
          </div>
          <span class="inline-flex items-center gap-1.5 text-xs font-bold text-[#1A9900] group-hover:translate-x-1 transition-transform">
            <span>Chi tiết giải pháp</span><i class="fa-solid fa-arrow-right text-[10px]"></i>
          </span>
        </a>
        <a href="/thue-may-photocopy-truong-hoc/" class="bg-white border border-gray-200 hover:border-[#1A9900] p-6 flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="flex items-center justify-between mb-4">
              <div class="w-10 h-10 bg-[#181924] text-white group-hover:bg-[#1A9900] transition-colors flex items-center justify-center">
                <i class="fa-solid fa-copy text-base"></i>
              </div>
              <span class="text-[11px] font-bold text-gray-400 group-hover:text-[#1A9900] uppercase tracking-wider transition">Trụ cột 3</span>
            </div>
            <h3 class="text-base font-bold text-[#181923] group-hover:text-[#1A9900] transition mb-2">Thuê Máy Photocopy Trường Học</h3>
            <p class="text-[13px] text-gray-500 leading-relaxed mb-4">Hợp đồng 9 tháng theo năm học (miễn cước 3 tháng hè), bao trọn mực in đề kiểm tra và giáo án.</p>
          </div>
          <span class="inline-flex items-center gap-1.5 text-xs font-bold text-[#1A9900] group-hover:translate-x-1 transition-transform">
            <span>Chi tiết giải pháp</span><i class="fa-solid fa-arrow-right text-[10px]"></i>
          </span>
        </a>
        <a href="/giai-phap/giao-duc/so-hoa-hoc-ba/" class="bg-white border border-gray-200 hover:border-[#1A9900] p-6 flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="flex items-center justify-between mb-4">
              <div class="w-10 h-10 bg-[#181924] text-white group-hover:bg-[#1A9900] transition-colors flex items-center justify-center">
                <i class="fa-solid fa-graduation-cap text-base"></i>
              </div>
              <span class="text-[11px] font-bold text-gray-400 group-hover:text-[#1A9900] uppercase tracking-wider transition">Trụ cột 4</span>
            </div>
            <h3 class="text-base font-bold text-[#181923] group-hover:text-[#1A9900] transition mb-2">Số Hóa Học Bạ Điện Tử</h3>
            <p class="text-[13px] text-gray-500 leading-relaxed mb-4">Scan ADF tốc độ cao Ricoh fi-series, OCR bóc tách dữ liệu chuẩn Bộ GD&amp;ĐT đẩy lên CSDL ngành.</p>
          </div>
          <span class="inline-flex items-center gap-1.5 text-xs font-bold text-[#1A9900] group-hover:translate-x-1 transition-transform">
            <span>Chi tiết giải pháp</span><i class="fa-solid fa-arrow-right text-[10px]"></i>
          </span>
        </a>
        <a href="/giai-phap/giao-duc/so-hoa-ho-so-truong-hoc/" class="bg-white border border-gray-200 hover:border-[#1A9900] p-6 flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="flex items-center justify-between mb-4">
              <div class="w-10 h-10 bg-[#181924] text-white group-hover:bg-[#1A9900] transition-colors flex items-center justify-center">
                <i class="fa-solid fa-file-arrow-up text-base"></i>
              </div>
              <span class="text-[11px] font-bold text-gray-400 group-hover:text-[#1A9900] uppercase tracking-wider transition">Trụ cột 5</span>
            </div>
            <h3 class="text-base font-bold text-[#181923] group-hover:text-[#1A9900] transition mb-2">Scan Hồ Sơ Giáo Dục</h3>
            <p class="text-[13px] text-gray-500 leading-relaxed mb-4">Số hóa hồ sơ cán bộ, giáo viên, đề án nghiên cứu khoa học chuẩn Thông tư 02/2019/TT-BNV.</p>
          </div>
          <span class="inline-flex items-center gap-1.5 text-xs font-bold text-[#1A9900] group-hover:translate-x-1 transition-transform">
            <span>Chi tiết giải pháp</span><i class="fa-solid fa-arrow-right text-[10px]"></i>
          </span>
        </a>
        <a href="/giai-phap/giao-duc/thiet-bi-phong-hoc/" class="bg-white border border-gray-200 hover:border-[#1A9900] p-6 flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="flex items-center justify-between mb-4">
              <div class="w-10 h-10 bg-[#181924] text-white group-hover:bg-[#1A9900] transition-colors flex items-center justify-center">
                <i class="fa-solid fa-chalkboard-user text-base"></i>
              </div>
              <span class="text-[11px] font-bold text-gray-400 group-hover:text-[#1A9900] uppercase tracking-wider transition">Trụ cột 6</span>
            </div>
            <h3 class="text-base font-bold text-[#181923] group-hover:text-[#1A9900] transition mb-2">Thiết Bị Phòng Học</h3>
            <p class="text-[13px] text-gray-500 leading-relaxed mb-4">Màn hình tương tác ViewSonic 65–86 inch, camera vật thể AVer và hệ thống âm thanh giảng dạy.</p>
          </div>
          <span class="inline-flex items-center gap-1.5 text-xs font-bold text-[#1A9900] group-hover:translate-x-1 transition-transform">
            <span>Chi tiết giải pháp</span><i class="fa-solid fa-arrow-right text-[10px]"></i>
          </span>
        </a></div>
    </div>
  </section>

  <section class="py-16 bg-[#f5f8fb] ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8"><div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12"><div><span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-1.5">Dịch vụ cho thuê thiết bị</span><h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#181923] leading-tight">6 Gói Thuê Thiết Bị Chuyên Sâu Tối Ưu TCO Cho Đơn Vị</h2></div><span class="inline-flex items-center gap-1.5 text-xs font-bold text-[#1A9900] bg-[#1A9900]/10 px-3.5 py-2"><i class="fa-solid fa-shield-check"></i> Cam kết SLA ≤ 2h • 0đ Tiền Cọc</span></div><div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <a href="/thue-may-photocopy-ha-noi/" class="bg-[#fbfbfb] hover:bg-white border border-gray-200 hover:border-[#1A9900] p-6 flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="flex items-center justify-between mb-3">
              <span class="text-[11px] font-bold text-[#1A9900] uppercase tracking-wider">Hà Nội Trọng Điểm</span>
              <span class="text-[11px] font-bold text-gray-700 bg-gray-100 px-2.5 py-1">Từ 800.000 đ/tháng</span>
            </div>
            <h3 class="text-base font-bold text-[#181923] group-hover:text-[#1A9900] transition mb-2 leading-snug">Cho Thuê Máy Photocopy Tại Hà Nội</h3>
            <p class="text-[13px] text-gray-500 leading-relaxed mb-4">Toshiba &amp; Ricoh mới 100%, 0đ tiền cọc, bao trọn mực in và linh kiện, giao lắp trong 2h tại 30 quận huyện.</p>
          </div>
          <div class="pt-3 border-t border-gray-100 flex items-center justify-between text-xs font-bold text-[#1A9900]">
            <span>Xem bảng giá &amp; ưu đãi</span>
            <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
          </div>
        </a>
        <a href="/thue-may-in/" class="bg-[#fbfbfb] hover:bg-white border border-gray-200 hover:border-[#1A9900] p-6 flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="flex items-center justify-between mb-3">
              <span class="text-[11px] font-bold text-[#1A9900] uppercase tracking-wider">Văn Phòng &amp; Doanh Nghiệp</span>
              <span class="text-[11px] font-bold text-gray-700 bg-gray-100 px-2.5 py-1">Từ 500.000 đ/tháng</span>
            </div>
            <h3 class="text-base font-bold text-[#181923] group-hover:text-[#1A9900] transition mb-2 leading-snug">Cho Thuê Máy In Văn Phòng Trọn Gói</h3>
            <p class="text-[13px] text-gray-500 leading-relaxed mb-4">Máy in laser đa chức năng HP, Toshiba A3/A4. Không lo hết mực, bố trí phân tán theo phòng ban.</p>
          </div>
          <div class="pt-3 border-t border-gray-100 flex items-center justify-between text-xs font-bold text-[#1A9900]">
            <span>Xem bảng giá &amp; ưu đãi</span>
            <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
          </div>
        </a>
        <a href="/thue-may-photocopy-truong-hoc/" class="bg-[#fbfbfb] hover:bg-white border border-gray-200 hover:border-[#1A9900] p-6 flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="flex items-center justify-between mb-3">
              <span class="text-[11px] font-bold text-[#1A9900] uppercase tracking-wider">Trường Học K-12 &amp; ĐH</span>
              <span class="text-[11px] font-bold text-gray-700 bg-gray-100 px-2.5 py-1">Hợp đồng 9 tháng niên khóa</span>
            </div>
            <h3 class="text-base font-bold text-[#181923] group-hover:text-[#1A9900] transition mb-2 leading-snug">Cho Thuê Máy Photocopy Cho Trường Học</h3>
            <p class="text-[13px] text-gray-500 leading-relaxed mb-4">Miễn phí 3 tháng hè, bao trọn gói mực in làm đề kiểm tra, công suất lớn 35–55 bản/phút chống kẹt giấy.</p>
          </div>
          <div class="pt-3 border-t border-gray-100 flex items-center justify-between text-xs font-bold text-[#1A9900]">
            <span>Xem bảng giá &amp; ưu đãi</span>
            <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
          </div>
        </a>
        <a href="/thue-may-photocopy-so-gd/" class="bg-[#fbfbfb] hover:bg-white border border-gray-200 hover:border-[#1A9900] p-6 flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="flex items-center justify-between mb-3">
              <span class="text-[11px] font-bold text-[#1A9900] uppercase tracking-wider">Cơ Quan Nhà Nước &amp; B2G</span>
              <span class="text-[11px] font-bold text-gray-700 bg-gray-100 px-2.5 py-1">Chuẩn B2G &amp; Kho Bạc</span>
            </div>
            <h3 class="text-base font-bold text-[#181923] group-hover:text-[#1A9900] transition mb-2 leading-snug">Cho Thuê Máy Photocopy Cho Sở GD&amp;ĐT</h3>
            <p class="text-[13px] text-gray-500 leading-relaxed mb-4">Đầy đủ CO/CQ, hóa đơn tài chính VAT, năng lực dự thầu, phương án dự phòng N+1 không rủi ro.</p>
          </div>
          <div class="pt-3 border-t border-gray-100 flex items-center justify-between text-xs font-bold text-[#1A9900]">
            <span>Xem bảng giá &amp; ưu đãi</span>
            <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
          </div>
        </a>
        <a href="/thue-may-in-de-thi/" class="bg-[#fbfbfb] hover:bg-white border border-gray-200 hover:border-[#1A9900] p-6 flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="flex items-center justify-between mb-3">
              <span class="text-[11px] font-bold text-[#1A9900] uppercase tracking-wider">Hội Đồng In Sao Đề</span>
              <span class="text-[11px] font-bold text-gray-700 bg-gray-100 px-2.5 py-1">Gói ngắn hạn 7–15 ngày</span>
            </div>
            <h3 class="text-base font-bold text-[#181923] group-hover:text-[#1A9900] transition mb-2 leading-snug">Cho Thuê Máy In Sao Đề Thi Siêu Tốc</h3>
            <p class="text-[13px] text-gray-500 leading-relaxed mb-4">Máy in Duplo ép lạnh chống cong giấy, cam kết kỹ thuật viên cách ly cùng hội đồng in sao 24/7.</p>
          </div>
          <div class="pt-3 border-t border-gray-100 flex items-center justify-between text-xs font-bold text-[#1A9900]">
            <span>Xem bảng giá &amp; ưu đãi</span>
            <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
          </div>
        </a>
        <a href="/thue-may-photocopy-ngan-hang/" class="bg-[#fbfbfb] hover:bg-white border border-gray-200 hover:border-[#1A9900] p-6 flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="flex items-center justify-between mb-3">
              <span class="text-[11px] font-bold text-[#1A9900] uppercase tracking-wider">Ngân Hàng &amp; Tập Đoàn</span>
              <span class="text-[11px] font-bold text-gray-700 bg-gray-100 px-2.5 py-1">Bảo mật RFID &amp; DoD</span>
            </div>
            <h3 class="text-base font-bold text-[#181923] group-hover:text-[#1A9900] transition mb-2 leading-snug">Cho Thuê Máy Photocopy Cho Ngân Hàng</h3>
            <p class="text-[13px] text-gray-500 leading-relaxed mb-4">In ấn quẹt thẻ nhân viên RFID, chuẩn an ninh xóa dữ liệu ổ cứng, kinh nghiệm 127 máy cho Vietcombank.</p>
          </div>
          <div class="pt-3 border-t border-gray-100 flex items-center justify-between text-xs font-bold text-[#1A9900]">
            <span>Xem bảng giá &amp; ưu đãi</span>
            <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
          </div>
        </a></div>
    </div>
  </section>

  <section class="py-16 bg-[#f5f8fb] border-b border-gray-200">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mb-12">
        <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-2">Trọng tâm kinh doanh</span>
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#181923] leading-tight mb-4">
          Ba Dịch Vụ Mũi Nhọn Hương Sơn Ưu Tiên Phục Vụ
        </h2>
        <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
          Tập trung tối đa nguồn lực thiết bị chính hãng sẵn kho, đội ngũ kỹ sư chuyên môn cao và quy chuẩn dịch vụ minh bạch dành riêng cho khách hàng tổ chức, trường học, cơ quan và doanh nghiệp:
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
        <!-- Dịch vụ 1: Cho thuê máy photocopy mới 100% -->
        <div class="bg-white border border-gray-200 hover:border-[#1A9900] flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="relative h-56 bg-gray-100 overflow-hidden border-b border-gray-200">
              <span class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 uppercase tracking-wider z-10 shadow-xs">
                100% Máy Mới Chính Hãng
              </span>
              <img src="/assets/images/products/toshiba-e-studio-2829a.jpg" alt="Cho thuê máy photocopy mới 100%" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-500" loading="lazy" />
            </div>
            <div class="p-6 sm:p-7">
              <span class="text-xs font-bold text-[#1A9900] uppercase tracking-wider block mb-1">Khách văn phòng &amp; Doanh nghiệp</span>
              <h3 class="text-xl font-bold text-[#181923] mb-3">
                <a href="/giai-phap/cho-thue-thiet-bi/" class="hover:text-[#1A9900] transition">Cho Thuê Máy Photocopy Mới 100%</a>
              </h3>
              <p class="text-[13.5px] text-gray-600 leading-relaxed mb-4">
                Máy photocopy đa chức năng Toshiba, Ricoh, Konica Minolta thế hệ mới với đầy đủ chứng nhận CO/CQ. Cam kết không cho thuê máy bãi, máy cũ nát.
              </p>
              <ul class="text-[13px] text-gray-700 space-y-2 mb-6">
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span><strong>Bảng giá minh bạch:</strong> Từ <strong>800.000 đ/tháng</strong> với 4 gói cước chuẩn hóa.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span><strong>0đ phí mực &amp; linh kiện:</strong> Miễn phí toàn bộ mực in, trống, gạt và bảo trì.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span><strong>Đổi máy trong 24 giờ:</strong> Kỹ thuật có mặt ≤ 2h, đổi máy tương đương nếu cần.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span><strong>Dùng thử miễn phí:</strong> Trải nghiệm thực tế 07 ngày trước khi ký hợp đồng.</span></li>
              </ul>
              <!-- Bằng chứng năng lực riêng -->
              <div class="p-3.5 bg-gray-50 border border-gray-200/80 mb-6">
                <div class="flex items-center gap-2 text-xs font-bold text-[#181923] mb-1">
                  <i class="fa-solid fa-building-columns text-[#1A9900]"></i>
                  <span>Bằng chứng năng lực thực tế:</span>
                </div>
                <p class="text-[12.5px] text-gray-600 leading-relaxed">
                  Triển khai thành công hợp đồng cung cấp <strong>127 máy photocopy Toshiba đa chức năng</strong> cho hệ thống Ngân hàng <strong>Vietcombank</strong> trên toàn quốc.
                </p>
              </div>
            </div>
          </div>
          <div class="p-6 sm:p-7 pt-0 flex flex-col sm:flex-row gap-3">
            <a href="/nhan-tu-van/tu-van-thue-may/" class="bg-[#1A9900] hover:bg-[#147700] text-white text-xs font-bold uppercase tracking-wider py-3.5 px-4 text-center transition flex-1">
              Nhận tư vấn thuê máy
            </a>
            <a href="/giai-phap/cho-thue-thiet-bi/" class="border border-gray-300 hover:border-[#1A9900] hover:text-[#1A9900] text-[#181923] text-xs font-bold uppercase tracking-wider py-3.5 px-4 text-center transition">
              Bảng giá 4 gói
            </a>
          </div>
        </div>

        <!-- Dịch vụ 2: Cho thuê Duplo và thiết bị in sao đề thi -->
        <div class="bg-white border border-gray-200 hover:border-[#1A9900] flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="relative h-56 bg-gray-100 overflow-hidden border-b border-gray-200">
              <span class="absolute top-3 left-3 bg-[#181924] text-white text-[11px] font-bold px-3 py-1 uppercase tracking-wider z-10 shadow-xs">
                Tốc độ 130–150 ppm • Bảo mật 3 vòng
              </span>
              <img src="/assets/images/products/duplo-dp-x550.jpg" alt="Cho thuê Duplo in sao đề thi" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-500" loading="lazy" />
            </div>
            <div class="p-6 sm:p-7">
              <span class="text-xs font-bold text-[#1A9900] uppercase tracking-wider block mb-1">Khách cơ quan &amp; Trường học</span>
              <h3 class="text-xl font-bold text-[#181923] mb-3">
                <a href="/giai-phap/giao-duc/in-de-thi/" class="hover:text-[#1A9900] transition">In Sao Đề Thi Siêu Tốc (Duplo)</a>
              </h3>
              <p class="text-[13.5px] text-gray-600 leading-relaxed mb-4">
                Máy in nhân bản kỹ thuật số Duplo công suất cực lớn, chuyên trách in sao đề thi tốt nghiệp, đề thi tuyển sinh an toàn tuyệt đối và bảo mật cách ly.
              </p>
              <ul class="text-[13px] text-gray-700 space-y-2 mb-6">
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span><strong>Tốc độ vượt trội:</strong> Đạt <strong>130 – 150 bản in/phút</strong>, nhanh gấp 3–5 lần máy thông thường.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span><strong>Chi phí siêu tiết kiệm:</strong> Chỉ từ <strong>25 – 40 đ/trang in</strong> (tiết kiệm 70–80% ngân sách).</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span><strong>Bảo mật cách ly 3 vòng:</strong> Vận hành offline 100%, tuân thủ quy chế Bộ GD&amp;ĐT.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span><strong>Dự phòng N+1 tại chỗ:</strong> Sẵn sàng máy dự phòng và kỹ thuật viên trực hiện trường.</span></li>
              </ul>
              <!-- Bằng chứng năng lực riêng -->
              <div class="p-3.5 bg-gray-50 border border-gray-200/80 mb-6">
                <div class="flex items-center gap-2 text-xs font-bold text-[#181923] mb-1">
                  <i class="fa-solid fa-graduation-cap text-[#1A9900]"></i>
                  <span>Bằng chứng năng lực thực tế:</span>
                </div>
                <p class="text-[12.5px] text-gray-600 leading-relaxed">
                  Đã triển khai thành công cho <strong>Sở GD&amp;ĐT Vĩnh Phúc</strong> và phục vụ Kỳ thi Tốt nghiệp THPT 2026 của <strong>Sở GD&amp;ĐT Quảng Trị</strong>.
                </p>
              </div>
            </div>
          </div>
          <div class="p-6 sm:p-7 pt-0 flex flex-col sm:flex-row gap-3">
            <a href="/nhan-tu-van/phuong-an-in-de-thi/" class="bg-[#1A9900] hover:bg-[#147700] text-white text-xs font-bold uppercase tracking-wider py-3.5 px-4 text-center transition flex-1">
              Nhận phương án in đề thi
            </a>
            <a href="/giai-phap/giao-duc/in-de-thi/" class="border border-gray-300 hover:border-[#1A9900] hover:text-[#1A9900] text-[#181923] text-xs font-bold uppercase tracking-wider py-3.5 px-4 text-center transition">
              Chi tiết giải pháp
            </a>
          </div>
        </div>

        <!-- Dịch vụ 3: Scan, số hóa và quản lý tài liệu -->
        <div class="bg-white border border-gray-200 hover:border-[#1A9900] flex flex-col justify-between transition-all duration-300 shadow-xs hover:shadow-md group">
          <div>
            <div class="relative h-56 bg-gray-100 overflow-hidden border-b border-gray-200">
              <span class="absolute top-3 left-3 bg-[#0d6efd] text-white text-[11px] font-bold px-3 py-1 uppercase tracking-wider z-10 shadow-xs">
                Chuẩn TT 02/2019/TT-BNV • OCR ≥ 98%
              </span>
              <img src="/assets/images/products/ricoh-fujitsu-fi-7160.jpg" alt="Scan và số hóa tài liệu" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-500" loading="lazy" />
            </div>
            <div class="p-6 sm:p-7">
              <span class="text-xs font-bold text-[#1A9900] uppercase tracking-wider block mb-1">Khách số hóa &amp; Chuyển đổi số</span>
              <h3 class="text-xl font-bold text-[#181923] mb-3">
                <a href="/giai-phap/scan-so-hoa/" class="hover:text-[#1A9900] transition">Scan &amp; Số Hóa Quản Lý Tài Liệu</a>
              </h3>
              <p class="text-[13.5px] text-gray-600 leading-relaxed mb-4">
                Dịch vụ scan tài liệu tốc độ cao, nhận dạng ký tự quang học tiếng Việt và cấu trúc hóa siêu dữ liệu phục vụ lưu trữ vĩnh viễn theo chuẩn Cục Văn thư.
              </p>
              <ul class="text-[13px] text-gray-700 space-y-2 mb-6">
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span><strong>PDF/A-1b Searchable:</strong> OCR tiếng Việt có dấu chính xác <strong>≥ 98%</strong>, tìm kiếm tức thì.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span><strong>Bảng Metadata Index:</strong> 10 trường tra cứu chuẩn (Excel/CSV), có hyperlink mở file.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span><strong>Mã băm SHA-256:</strong> Đối soát toàn vẹn 100% dữ liệu gốc, chống sửa đổi giả mạo.</span></li>
                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[#1A9900] mt-1 flex-shrink-0"></i><span><strong>Bảo mật tuyệt đối:</strong> Thi công on-site tại trụ sở khách hàng, ký cam kết bảo mật NDA.</span></li>
              </ul>
              <!-- Bằng chứng năng lực riêng -->
              <div class="p-3.5 bg-gray-50 border border-gray-200/80 mb-6">
                <div class="flex items-center gap-2 text-xs font-bold text-[#181923] mb-1">
                  <i class="fa-solid fa-shield-halved text-[#1A9900]"></i>
                  <span>Bằng chứng năng lực thực tế:</span>
                </div>
                <p class="text-[12.5px] text-gray-600 leading-relaxed">
                  Đội thiết bị chuyên dụng Ricoh &amp; Fujitsu fi-Series nạp quét ADF tự động, đã số hóa thành công hàng trăm nghìn trang học bạ THPT và hồ sơ hành chính.
                </p>
              </div>
            </div>
          </div>
          <div class="p-6 sm:p-7 pt-0 flex flex-col sm:flex-row gap-3">
            <a href="/nhan-tu-van/khao-sat-so-hoa/" class="bg-[#1A9900] hover:bg-[#147700] text-white text-xs font-bold uppercase tracking-wider py-3.5 px-4 text-center transition flex-1">
              Đăng ký khảo sát số hóa
            </a>
            <a href="/giai-phap/scan-so-hoa/" class="border border-gray-300 hover:border-[#1A9900] hover:text-[#1A9900] text-[#181923] text-xs font-bold uppercase tracking-wider py-3.5 px-4 text-center transition">
              Xem mẫu dữ liệu
            </a>
          </div>
        </div>
      </div>
    </div>
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
          <div><h3 class="text-base font-bold text-[#181923] mb-1">Hệ sinh thái vật tư Fansipan</h3><p class="text-sm text-gray-500 leading-relaxed">Thương hiệu vật tư tương thích do Hương Sơn phát triển từ 2008 — cung cấp mực in Toner chất lượng cao, cartridge, trống drum cho đại lý và đối tác kỹ thuật toàn miền Bắc.</p></div>
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
        <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-3">Năng lực triển khai</span>
        <h2 class="text-2xl sm:text-[34px] font-bold text-[#181923] leading-tight">Sẵn sàng cho cả nhu cầu theo mùa và dài hạn</h2>
      </div><div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="p-7 text-center flex flex-col items-center justify-between border border-gray-200/80 bg-white hover:border-[#1A9900] transition duration-300 shadow-xs">
          <div class="w-14 h-14 bg-[#181924] text-white flex items-center justify-center mx-auto mb-4"><i class="fa-solid fa-warehouse text-xl"></i></div>
          <span class="inline-block bg-[#1A9900]/10 text-[#1A9900] text-[10.5px] font-bold px-2 py-0.5 uppercase tracking-wider mb-2">> 200 Thiết bị sẵn sàng</span>
          <h3 class="font-bold text-[#181923] mb-2">Kho thiết bị sẵn có</h3>
          <p class="text-[13px] text-gray-500 leading-relaxed">Lưu kho &gt; 200 model máy photocopy Toshiba, Ricoh, Duplo tại Hà Nội sẵn sàng xuất kho trong 24h.</p>
        </div>
        <div class="p-7 text-center flex flex-col items-center justify-between border border-gray-200/80 bg-white hover:border-[#1A9900] transition duration-300 shadow-xs">
          <div class="w-14 h-14 bg-[#181924] text-white flex items-center justify-center mx-auto mb-4"><i class="fa-solid fa-user-gear text-xl"></i></div>
          <span class="inline-block bg-[#1A9900]/10 text-[#1A9900] text-[10.5px] font-bold px-2 py-0.5 uppercase tracking-wider mb-2">Chứng chỉ hãng chính thức</span>
          <h3 class="font-bold text-[#181923] mb-2">Kỹ sư chứng nhận hãng</h3>
          <p class="text-[13px] text-gray-500 leading-relaxed">100% kỹ thuật viên đạt chứng chỉ từ Duplo Nhật Bản, Toshiba, Konica Minolta; hỗ trợ 24/7.</p>
        </div>
        <div class="p-7 text-center flex flex-col items-center justify-between border border-gray-200/80 bg-white hover:border-[#1A9900] transition duration-300 shadow-xs">
          <div class="w-14 h-14 bg-[#181924] text-white flex items-center justify-center mx-auto mb-4"><i class="fa-solid fa-truck-fast text-xl"></i></div>
          <span class="inline-block bg-[#1A9900]/10 text-[#1A9900] text-[10.5px] font-bold px-2 py-0.5 uppercase tracking-wider mb-2">Giao lắp an toàn 2h</span>
          <h3 class="font-bold text-[#181923] mb-2">Logistics an toàn 2H</h3>
          <p class="text-[13px] text-gray-500 leading-relaxed">Đội xe chuyên dụng có giảm chấn, cam kết vận chuyển và lắp đặt tận nơi trong 2–4 giờ.</p>
        </div>
        <div class="p-7 text-center flex flex-col items-center justify-between border border-gray-200/80 bg-white hover:border-[#1A9900] transition duration-300 shadow-xs">
          <div class="w-14 h-14 bg-[#181924] text-white flex items-center justify-center mx-auto mb-4"><i class="fa-solid fa-shield-halved text-xl"></i></div>
          <span class="inline-block bg-[#1A9900]/10 text-[#1A9900] text-[10.5px] font-bold px-2 py-0.5 uppercase tracking-wider mb-2">Dự phòng N+1 tại chỗ</span>
          <h3 class="font-bold text-[#181923] mb-2">Máy dự phòng N+1</h3>
          <p class="text-[13px] text-gray-500 leading-relaxed">Tối thiểu 01 máy dự phòng sẵn sàng tại chỗ cho kỳ thi lớn, loại bỏ hoàn toàn rủi ro dừng máy.</p>
        </div></div>
    </div>
  </section>

  <section class="py-16 bg-[#f5f8fb] ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-3">Danh mục thiết bị bổ trợ</span>
        <h2 class="text-2xl sm:text-[34px] font-bold text-[#181923] leading-tight">Hệ sinh thái sản phẩm bổ trợ & Vật tư FANSIPAN</h2>
      </div><p class="text-center text-gray-600 text-sm max-w-2xl mx-auto -mt-6 mb-10 leading-relaxed">Bên cạnh các giải pháp vận hành in ấn mũi nhọn, Hương Sơn cung cấp đầy đủ các dòng máy in laser, máy đếm tiền, và hệ sinh thái mực in, cartridge FANSIPAN tương thích chất lượng cao cho đại lý &amp; đối tác:</p>
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
      </div><div class="text-center mt-10"><a href="/san-pham/" class="inline-block border border-gray-300 hover:border-[#1A9900] hover:text-[#1A9900] text-[#181923] font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem tất cả 9 danh mục sản phẩm</a></div>
    </div>
  </section>

  <section class="bg-[#1A9900] py-4 overflow-hidden">
    <div class="whitespace-nowrap text-white font-bold text-sm uppercase tracking-[0.2em] marquee-track">PRINT &nbsp;•&nbsp; COPY &nbsp;•&nbsp; SCAN &nbsp;•&nbsp; DIGITAL &nbsp;•&nbsp; RENTAL &nbsp;•&nbsp; SERVICE &nbsp;•&nbsp; PRINT &nbsp;•&nbsp; COPY &nbsp;•&nbsp; SCAN &nbsp;•&nbsp; DIGITAL &nbsp;•&nbsp; RENTAL &nbsp;•&nbsp; SERVICE &nbsp;•&nbsp; PRINT &nbsp;•&nbsp; COPY &nbsp;•&nbsp; SCAN &nbsp;•&nbsp; DIGITAL &nbsp;•&nbsp; RENTAL &nbsp;•&nbsp; SERVICE &nbsp;•&nbsp; PRINT &nbsp;•&nbsp; COPY &nbsp;•&nbsp; SCAN &nbsp;•&nbsp; DIGITAL &nbsp;•&nbsp; RENTAL &nbsp;•&nbsp; SERVICE</div>
  </section>
  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/banners/hero_office_solutions_1787899910391.jpg');">
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
        <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-3">Case Study Thực Tế</span>
        <h2 class="text-2xl sm:text-[34px] font-bold text-[#181923] leading-tight">Dự án tiêu biểu đã triển khai</h2>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/98-cho-thue-toshiba-e-studio-456.jpg" alt="Thuê máy photocopy phục vụ in sao đề thi – Sở GD&amp;ĐT Vĩnh Phúc" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Case Study Giáo dục</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/du-an/so-gddt-vinh-phuc-thue-may-photocopy-sao-in-de-thi/">Thuê máy photocopy phục vụ in sao đề thi – Sở GD&amp;ĐT Vĩnh Phúc</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Cung cấp dịch vụ thuê 02 máy photocopy Toshiba 7518A/8518A phục vụ in sao đề thi, hồ sơ nghiệm thu thực tế minh bạch.</p>
            <a href="/du-an/so-gddt-vinh-phuc-thue-may-photocopy-sao-in-de-thi/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem case study</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/duplo-dp-x550.jpg" alt="Thuê máy in nhân bản siêu tốc Duplo phục vụ Kỳ thi Tốt nghiệp THPT 2026" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Case Study Giáo dục</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/du-an/so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026/">Thuê máy in nhân bản siêu tốc Duplo phục vụ Kỳ thi Tốt nghiệp THPT 2026</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Thuê 02 máy in nhân bản siêu tốc Duplo tốc độ 150–155 bản/phút phục vụ Kỳ thi Tốt nghiệp THPT 2026.</p>
            <a href="/du-an/so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem case study</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/vietcombank-2024.jpg" alt="Cung cấp máy photocopy cho hệ thống Ngân hàng Vietcombank toàn quốc" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Case Study Ngân hàng</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/du-an/vietcombank-cung-cap-may-photocopy/">Cung cấp máy photocopy cho hệ thống Ngân hàng Vietcombank toàn quốc</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Triển khai 02 đợt quy mô lớn cho hệ thống Vietcombank toàn quốc: lô máy Konica Minolta (2022–2023) và lô 127 máy photocopy Toshiba đa chức năng (2024).</p>
            <a href="/du-an/vietcombank-cung-cap-may-photocopy/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem case study</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
      </div><div class="text-center mt-10"><a href="/du-an/" class="inline-block border border-gray-300 hover:border-[#1A9900] hover:text-[#1A9900] text-[#181923] font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem tất cả dự án</a></div>
    </div>
  </section>

  <section class="py-16 bg-[#f5f8fb] ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8"><div class="flex items-center justify-between mb-8 flex-wrap gap-4"><div><span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-1">Cẩm nang &amp; Hướng dẫn chuyên môn</span><h2 class="text-2xl sm:text-[30px] font-bold text-gray-900 leading-tight">Kiến thức chuyên sâu từ chuyên gia Hương Sơn</h2></div><a href="/ve-huong-son/kien-thuc/" class="inline-flex items-center gap-2 text-[#1A9900] hover:text-[#147700] font-bold text-xs uppercase tracking-wider transition border border-[#1A9900]/30 hover:border-[#1A9900] px-4 py-2 rounded-xs"><span>Xem toàn bộ 16 bài cẩm nang</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a></div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/hero-office.jpg" alt="Nên thuê hay mua máy photocopy cho doanh nghiệp, trường học?" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Tư vấn đầu tư</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/nen-thue-hay-mua-may-photocopy/">Nên thuê hay mua máy photocopy cho doanh nghiệp, trường học?</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Phân tích bài toán chi phí dòng tiền TCO, khấu hao và rủi ro kỹ thuật giúp lãnh đạo ra quyết định mua sắm chính xác nhất.</p>
            <a href="/ve-huong-son/kien-thuc/nen-thue-hay-mua-may-photocopy/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc cẩm nang (6 phút)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
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
              <span>Đọc cẩm nang (8 phút)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/banners/highspeed_scanner_1787905830483.jpg" alt="Hướng dẫn lựa chọn máy scan số hóa tài liệu cho cơ quan, trường học" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Chuyển đổi số</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/huong-dan-chon-may-scan-so-hoa-tai-lieu/">Hướng dẫn lựa chọn máy scan số hóa tài liệu cho cơ quan, trường học</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Tiêu chí chọn máy scan nạp tự động ADF, quét phẳng Flatbed, scan sách không phá gáy và công nghệ OCR tiếng Việt chuẩn Thông tư 02.</p>
            <a href="/ve-huong-son/kien-thuc/huong-dan-chon-may-scan-so-hoa-tai-lieu/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc cẩm nang (7 phút)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>
@endsection
