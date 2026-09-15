@extends('client.layouts.app')

@section('title', "Máy scan tốc độ cao A4/A3 – thiết bị số hóa tài liệu | Hương Sơn")
@section('meta_description', "Máy scan tốc độ cao phục vụ số hóa hồ sơ, văn bằng, chứng chỉ cho Sở GD&ĐT, trường học và cơ quan Nhà nước. Tư vấn chọn máy theo khối lượng và loại tài liệu.")
@section('canonical', "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/")
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
    "email": "info@@huongsonco.com.vn",
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
      },
      {
        "@@type": "ListItem",
        "position": 3,
        "name": "Máy scan – thiết bị số hóa tài liệu",
        "item": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "ItemList",
    "name": "Máy scan – thiết bị số hóa tài liệu",
    "numberOfItems": 32,
    "itemListElement": [
      {
        "@@type": "ListItem",
        "position": 1,
        "name": "Máy quét Ricoh fi-8170",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-fi-8170/"
      },
      {
        "@@type": "ListItem",
        "position": 2,
        "name": "Máy quét Ricoh SP-1130N",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-sp-1130n/"
      },
      {
        "@@type": "ListItem",
        "position": 3,
        "name": "Máy quét Ricoh SP-1120N",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-sp-1120n/"
      },
      {
        "@@type": "ListItem",
        "position": 4,
        "name": "Máy quét Ricoh iX1600",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-ix1600/"
      },
      {
        "@@type": "ListItem",
        "position": 5,
        "name": "Máy quét Ricoh IX2500",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-ix2500/"
      },
      {
        "@@type": "ListItem",
        "position": 6,
        "name": "Máy quét Ricoh fi-800R",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-fi-800r/"
      },
      {
        "@@type": "ListItem",
        "position": 7,
        "name": "Máy quét Ricoh fi-8150",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-fi-8150/"
      },
      {
        "@@type": "ListItem",
        "position": 8,
        "name": "Máy quét Ricoh fi-8150U",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-fi-8150u/"
      },
      {
        "@@type": "ListItem",
        "position": 9,
        "name": "Máy quét Ricoh fi-8190",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-fi-8190/"
      },
      {
        "@@type": "ListItem",
        "position": 10,
        "name": "Máy quét Ricoh fi-8250",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-fi-8250/"
      },
      {
        "@@type": "ListItem",
        "position": 11,
        "name": "Máy quét Ricoh fi-8270",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-fi-8270/"
      },
      {
        "@@type": "ListItem",
        "position": 12,
        "name": "Máy quét Ricoh fi-8290",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-fi-8290/"
      },
      {
        "@@type": "ListItem",
        "position": 13,
        "name": "Máy quét Ricoh fi-8040",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-fi-8040/"
      },
      {
        "@@type": "ListItem",
        "position": 14,
        "name": "Máy quét Ricoh fi-7460",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-fi-7460/"
      },
      {
        "@@type": "ListItem",
        "position": 15,
        "name": "Máy quét Ricoh fi-7480",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-fi-7480/"
      },
      {
        "@@type": "ListItem",
        "position": 16,
        "name": "Máy quét Ricoh fi-7600",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-fi-7600/"
      },
      {
        "@@type": "ListItem",
        "position": 17,
        "name": "Máy quét Ricoh fi-7700",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-fi-7700/"
      },
      {
        "@@type": "ListItem",
        "position": 18,
        "name": "Máy quét Ricoh fi-7700S",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-fi-7700s/"
      },
      {
        "@@type": "ListItem",
        "position": 19,
        "name": "Máy quét Ricoh fi-7800",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-fi-7800/"
      },
      {
        "@@type": "ListItem",
        "position": 20,
        "name": "Máy quét Ricoh fi-7900",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-fi-7900/"
      },
      {
        "@@type": "ListItem",
        "position": 21,
        "name": "Máy quét Ricoh fi-8820",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-fi-8820/"
      },
      {
        "@@type": "ListItem",
        "position": 22,
        "name": "Máy quét Ricoh fi-8930",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-fi-8930/"
      },
      {
        "@@type": "ListItem",
        "position": 23,
        "name": "Máy quét Ricoh fi-8950",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-fi-8950/"
      },
      {
        "@@type": "ListItem",
        "position": 24,
        "name": "Máy quét Ricoh IX2400",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-ix2400/"
      },
      {
        "@@type": "ListItem",
        "position": 25,
        "name": "Máy quét Ricoh iX1400",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-ix1400/"
      },
      {
        "@@type": "ListItem",
        "position": 26,
        "name": "Máy quét Ricoh iX1300",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-ix1300/"
      },
      {
        "@@type": "ListItem",
        "position": 27,
        "name": "Máy quét Ricoh iX100",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-ix100/"
      },
      {
        "@@type": "ListItem",
        "position": 28,
        "name": "Máy quét Ricoh SP-1125N",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-sp-1125n/"
      },
      {
        "@@type": "ListItem",
        "position": 29,
        "name": "Máy quét Ricoh SP-1425",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-sp-1425/"
      },
      {
        "@@type": "ListItem",
        "position": 30,
        "name": "Máy quét Ricoh SV600",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-sv600/"
      },
      {
        "@@type": "ListItem",
        "position": 31,
        "name": "Máy scan tài liệu tốc độ cao Ricoh fi-7160 (Model tiền nhiệm)",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-fujitsu-fi-7160/"
      },
      {
        "@@type": "ListItem",
        "position": 32,
        "name": "Máy quét Ricoh fi-8250U",
        "url": "https://huongsonco.com.vn/san-pham/may-scan-so-hoa/ricoh-fi-8250u/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
      {
        "@@type": "Question",
        "name": "Nên chọn máy scan theo tiêu chí nào?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Theo khối lượng trang mỗi ngày, khổ giấy lớn nhất cần scan, có cần scan hai mặt một lần chạy hay không, độ dày và tình trạng giấy, và có cần scan qua mạng dùng chung hay không."
        }
      },
      {
        "@@type": "Question",
        "name": "Hương Sơn có nhận số hóa trọn gói không chỉ bán máy không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Có. Xem giải pháp scan và số hóa tài liệu — quy trình đầy đủ từ tiếp nhận đến bàn giao dữ liệu."
        }
      }
    ]
  }
]
</script>
@endsection

@section('content')
<!-- PAGE HERO -->
  <section class="relative min-h-[320px] sm:min-h-[380px] flex items-center overflow-hidden" style="background: linear-gradient(135deg, #10203C 0%, #193877 60%, #204DA4 100%);">
    <div class="absolute inset-0 z-0">
      <img src="/assets/images/hero-office.jpg" alt="Máy scan – thiết bị số hóa tài liệu" class="w-full h-full object-cover object-center opacity-25" loading="eager" />
      <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(16, 32, 60, 0.90) 0%, rgba(16, 32, 60, 0.82) 100%);"></div>
    </div>
    <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 py-14 sm:py-16 w-full text-center">
      <span class="font-handwriting text-2xl sm:text-3xl text-[#5eb74c] font-bold block mb-2">Scan &amp; Digital Document</span>
      <h1 class="text-2xl sm:text-[38px] lg:text-[42px] font-bold text-white mb-4 leading-tight tracking-tight drop-shadow-sm">Máy scan – thiết bị số hóa tài liệu</h1>
      <p class="max-w-3xl mx-auto text-gray-200 text-[15px] sm:text-[16px] leading-relaxed">Máy scan tốc độ cao phục vụ số hóa hồ sơ, văn bằng, chứng chỉ và tài liệu lưu trữ — chọn theo khối lượng trang mỗi ngày, khổ giấy, số mặt và tình trạng giấy.</p>
      <nav class="mt-6 text-[13px] text-gray-300 flex items-center justify-center flex-wrap" aria-label="Breadcrumb">
        <a href="/" class="text-gray-300 hover:text-white transition">Trang chủ</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> <a href="/san-pham/" class="text-gray-300 hover:text-white transition">Sản phẩm</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> <span class="text-[#5eb74c] font-semibold" aria-current="page">Máy scan – thiết bị số hóa tài liệu</span>
      </nav>
    </div>
  </section>

  <section class="py-10 border-b border-gray-200" style="background-color: rgb(247, 243, 238);">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Trang này là gì</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Danh mục máy scan tốc độ cao Hương Sơn tư vấn và cung cấp cho nhu cầu số hóa tài liệu.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Dành cho ai</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Sở GD&ĐT, trường học, cơ quan Nhà nước, ngân hàng và doanh nghiệp có khối lượng hồ sơ cần số hóa.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Giải quyết vấn đề gì</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Chọn đúng dòng máy scan theo khối lượng và loại tài liệu, tránh đầu tư sai công suất hoặc sai tính năng cần thiết.</p>
          </div>
      </div>
    </div>
  </section>

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8"><p class="text-[15.5px] text-gray-600 leading-[1.85] mb-8 max-w-4xl">Nhóm thiết bị scan phục vụ nhu cầu số hóa tài liệu: hồ sơ, văn bằng, chứng chỉ và tài liệu lưu trữ.</p><ul class="grid grid-cols-1 md:grid-cols-1 gap-x-10 gap-y-3.5">
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Hương Sơn tư vấn giải pháp scan – số hóa theo đúng khối lượng và loại tài liệu của đơn vị.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Danh mục model cụ thể đang được cập nhật — vui lòng liên hệ để được tư vấn theo nhu cầu.</span>
        </li>
      </ul><div class="mb-10"></div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fi-8170.png" alt="Máy quét Ricoh fi-8170" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Indonesia)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8170/">Máy quét Ricoh fi-8170</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt tự động  A4, quét sổ dập ghim, căn cước và hộ chiếu. Tốc độ 70ppm/140ipm (quét màu, 300 dpi), khay  giấy 100 tờ, công suất 10000 tờ/ngà…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8170/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-sp-1130n.jpg" alt="Máy quét Ricoh SP-1130N" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (China)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-sp-1130n/">Máy quét Ricoh SP-1130N</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt kết nối mạng LAN Tốc độ 30ppm/60ipm (quét màu, 300dpi), Khay  giấy 50 tờ,  Công suất 4500 tờ/ngày. Kết nối USB 3.2 &amp; LAN.  Kèm theo giả…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-sp-1130n/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-sp-1120n.jpg" alt="Máy quét Ricoh SP-1120N" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (China)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-sp-1120n/">Máy quét Ricoh SP-1120N</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt kết nối mạng LAN,  Tốc độ 20ppm/40ipm (quét màu, 300dpi), Khay  giấy 50 tờ,  Công suất 3000 tờ/ngày.  Kết nối USB 3.2 &amp; LAN.  Kèm theo …</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-sp-1120n/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-ix1600.png" alt="Máy quét Ricoh iX1600" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (China)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-ix1600/">Máy quét Ricoh iX1600</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt, tốc độ 40ppm/80ipm (quét màu, 300 dpi), Khay  giấy 50 tờ.     Kết nối wifi (hỗ trợ kết nối 4 thiết bị cùng lúc), USB 3.2 Gen1x1 / USB …</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-ix1600/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-ix2500.png" alt="Máy quét Ricoh IX2500" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Indonesia)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-ix2500/">Máy quét Ricoh IX2500</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt, tốc độ 45ppm/90ipm (khổ A4 dọc, màu 300 dpi) khay  giấy 100 tờ.     Kết nối wifi (hỗ trợ kết nối 4 thiết bị cùng lúc): IEEE802.11a/b/g…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-ix2500/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fi-800r.jpg" alt="Máy quét Ricoh fi-800R" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Indonesia)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-fi-800r/">Máy quét Ricoh fi-800R</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt tự động  A4, tích hợp khay quét sổ dập ghim, căn cước, hộ chiếu. Tốc độ 40ppm/80ipm (quét màu, 300 dpi), Khay  giấy ADF 20 tờ, khay thủ…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-fi-800r/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fi-8150.png" alt="Máy quét Ricoh fi-8150" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Indonesia)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8150/">Máy quét Ricoh fi-8150</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt tự động  A4, quét sổ dập ghim, căn cước và hộ chiếu. Tốc độ 50ppm/100ipm (quét màu, 300 dpi), khay  giấy 100 tờ, công suất 8000 tờ/ngày…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8150/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fi-8150u.png" alt="Máy quét Ricoh fi-8150U" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Indonesia)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8150u/">Máy quét Ricoh fi-8150U</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt tự động  A4, quét căn cước và hộ chiếu.   Tốc độ 50ppm/100ipm (quét màu, 300 dpi), khay  giấy ADF 100 tờ, công suất 8000 tờ/ngày. Kết n…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8150u/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fi-8190.png" alt="Máy quét Ricoh fi-8190" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Indonesia)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8190/">Máy quét Ricoh fi-8190</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt tự động  A4, quét sổ dập ghim, căn cước và hộ chiếu. Tốc độ 90ppm/180ipm (quét màu, 300 dpi), khay  giấy 100 tờ, công suất 13000 tờ/ngà…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8190/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fi-8250.png" alt="Máy quét Ricoh fi-8250" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Indonesia)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8250/">Máy quét Ricoh fi-8250</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt tự động + Flatbed A4, tích hợp tính sổ dập ghim và hộ chiếu,  tốc độ 50ppm/100ipm (quét màu, 300 dpi), khay  giấy 100 tờ, công suất 800…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8250/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fi-8270.png" alt="Máy quét Ricoh fi-8270" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Indonesia)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8270/">Máy quét Ricoh fi-8270</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt tự động + Flatbed A4, tích hợp tính sổ dập ghim và hộ chiếu,  tốc độ 70ppm/140ipm (quét màu, 300 dpi), khay  giấy 100 tờ, công suất 100…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8270/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fi-8290.png" alt="Máy quét Ricoh fi-8290" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Indonesia)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8290/">Máy quét Ricoh fi-8290</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt tự động + Flatbed A4, tích hợp tính sổ dập ghim và hộ chiếu,  tốc độ 90ppm/180ipm (quét màu, 300 dpi), khay  giấy 100 tờ, công suất 130…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8290/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fi-8040.jpg" alt="Máy quét Ricoh fi-8040" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (China)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8040/">Máy quét Ricoh fi-8040</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt, tốc độ 40ppm/80ipm (quét màu, 300 dpi), khay  giấy 50 tờ. Kết nối USB 3.2, LAN. Quét trực tiếp vào email và thư mục mạng không cần qua…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8040/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fi-7460.png" alt="Máy quét Ricoh fi-7460" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Indonesia)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-fi-7460/">Máy quét Ricoh fi-7460</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt A3,  Đèn quét	 Color CCD (Charge-coupled device) x 2 Tốc độ 60ppm /120ipm (quét màu, 300 dpi),  Khay giấy 100 tờ,  Công suất 18000 tờ/n…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-fi-7460/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fi-7480.png" alt="Máy quét Ricoh fi-7480" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Indonesia)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-fi-7480/">Máy quét Ricoh fi-7480</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt A3,  Đèn quét	 Color CCD (Charge-coupled device) x 2 Tốc độ 80ppm /160ipm (quét màu, 300 dpi),  Khay giấy 100 tờ,  Công suất 24000 tờ/n…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-fi-7480/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fi-7600.jpg" alt="Máy quét Ricoh fi-7600" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Indonesia)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-fi-7600/">Máy quét Ricoh fi-7600</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt A3, tốc độ 100ppm /200ipm (quét màu, 300 dpi), khay giấy 300 tờ, công suất 44.000 tờ/ngày. Kết nối USB 3.1.                            …</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-fi-7600/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fi-7700.jpg" alt="Máy quét Ricoh fi-7700" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Indonesia)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-fi-7700/">Máy quét Ricoh fi-7700</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt A3 + flatbed,  Đèn quét	 Color CCD (Charge-coupled device) x 3 Tốc độ 100ppm /200ipm (quét màu, 300 dpi), khay giấy 300 tờ, công suất 4…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-fi-7700/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fi-7700s.jpg" alt="Máy quét Ricoh fi-7700S" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Indonesia)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-fi-7700s/">Máy quét Ricoh fi-7700S</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 1 mặt A3 + flatbed,  Đèn quét: Color CCD Tốc độ 75ppm (quét màu, 300 dpi),  Khay giấy 300 tờ,  Công suất 33.000 tờ/ngày. Kết nối USB 3.1     …</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-fi-7700s/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fi-7800.jpg" alt="Máy quét Ricoh fi-7800" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Nhật Bản)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-fi-7800/">Máy quét Ricoh fi-7800</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy Quét công nghiệp 2 mặt A3 (ADF) Đèn quét: Color CCD Tốc độ quét: 110 ppm/220ipm (quét màu, 300dpi) Khay giấy: 500 tờ Công suất: 100,000 tờ/ngày Kế…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-fi-7800/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fi-7900.jpg" alt="Máy quét Ricoh fi-7900" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Nhật Bản)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-fi-7900/">Máy quét Ricoh fi-7900</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét công nghiệp 2 mặt A3, tốc độ 140ppm/ 280ipm (quét màu, 300 dpi), khay giấy 500 tờ, công suất 120.000 tờ/ngày. Kết nối USB 2.0 (Dòng Dự án cần…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-fi-7900/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fi-8820.png" alt="Máy quét Ricoh fi-8820" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Nhật Bản)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8820/">Máy quét Ricoh fi-8820</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét công nghiệp 2 mặt A3,  Tốc độ 120ppm/ 240ipm (quét màu, 300 dpi),  Khay giấy 500 tờ,  Công suất 100.000 tờ/ngày.  Kết nối USB 3.2, LAN.  Màn …</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8820/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fi-8930.png" alt="Máy quét Ricoh fi-8930" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Nhật Bản)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8930/">Máy quét Ricoh fi-8930</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét công nghiệp 2 mặt A3,  Tốc độ 130ppm/ 260ipm (quét màu, 300 dpi),  Khay giấy 750 tờ,  Công suất 110.000 tờ/ngày.  Kết nối USB 3.2, LAN.  Màn …</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8930/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fi-8950.png" alt="Máy quét Ricoh fi-8950" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Nhật Bản)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8950/">Máy quét Ricoh fi-8950</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét công nghiệp 2 mặt A3, Tốc độ 150ppm/ 300ipm (quét màu, 300 dpi), Khay giấy 750 tờ,  Công suất 130.000 tờ/ngày.  Kết nối USB 3.2, LAN.  Màn hì…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8950/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-ix2400.jpg" alt="Máy quét Ricoh IX2400" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Indonesia)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-ix2400/">Máy quét Ricoh IX2400</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt, tốc độ 45ppm/90ipm (khổ A4 dọc, màu 300 dpi) khay  giấy 100 tờ.     Kết nối: USB 3.2 Gen1x1 / USB 2.0 / USB 1.1. (Connector Type: Type…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-ix2400/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-ix1400.png" alt="Máy quét Ricoh iX1400" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (China)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-ix1400/">Máy quét Ricoh iX1400</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt,  Tốc độ 40ppm/80ipm (quét màu, 300 dpi), Khay  giấy 50 tờ.  Công suất 6000 tờ/ngày Kết nối: USB 3.2 Gen1x1 / USB 2.0 / USB 1.1. Quét g…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-ix1400/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-ix1300.png" alt="Máy quét Ricoh iX1300" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Indonesia)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-ix1300/">Máy quét Ricoh iX1300</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt tự động  A4, tích hợp khay quét sổ dập ghim, Căn cước và hộ chiếu,   Tốc độ 30ppm/60ipm (quét màu, 300 dpi), Khay  giấy 20 tờ,  Công su…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-ix1300/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-ix100.png" alt="Máy quét Ricoh iX100" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (China)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-ix100/">Máy quét Ricoh iX100</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét ScanSnap có pin nhanh nhất trên thế giới,  Tốc độ 5.2 giây / trang (quét màu, 300dpi) Với pin lithium có thể sạc lại</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-ix100/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-sp-1125n.jpg" alt="Máy quét Ricoh SP-1125N" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (China)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-sp-1125n/">Máy quét Ricoh SP-1125N</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt kết nối mạng LAN,  Tốc độ 25ppm/50ipm (quét màu, 300dpi), Khay  giấy 50 tờ,  Công suất 4000 tờ/ngày.  Kết nối USB 3.2 &amp; LAN.  Kèm theo …</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-sp-1125n/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-sp-1425.jpg" alt="Máy quét Ricoh SP-1425" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (China)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-sp-1425/">Máy quét Ricoh SP-1425</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt + flatbed,   Tốc độ 25ppm/50ipm (khổ A4 dọc, màu 300 dpi),  Khay  giấy 50 tờ.  Kết nối USB 2.0.</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-sp-1425/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-sv600.jpg" alt="Máy quét Ricoh SV600" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (China)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-sv600/">Máy quét Ricoh SV600</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét sách khổ A3, tốc độ 3 giây/trang. Tự động phát hiện và quét trang sách, crop nhiều ảnh cùng một lúc OCR: ABBYY FineReader for ScanSnap, hỗ tr…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-sv600/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fujitsu-fi-7160.jpg" alt="Máy scan tài liệu tốc độ cao Ricoh fi-7160 (Model tiền nhiệm)" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh / Fujitsu (Nhật Bản)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-fujitsu-fi-7160/">Máy scan tài liệu tốc độ cao Ricoh fi-7160 (Model tiền nhiệm)</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Ricoh fi-7160 (tiền thân Fujitsu fi-7160) là dòng máy quét số hóa tài liệu bán chạy số 1 thế giới — tốc độ 60 trang/phút, nạp giấy siêu êm và tích hợp…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-fujitsu-fi-7160/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fi-8250u.png" alt="Máy quét Ricoh fi-8250U" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Ricoh (Indonesia)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8250u/">Máy quét Ricoh fi-8250U</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Máy quét 2 mặt tự động + Flatbed A4, tích hợp tính sổ dập ghim và hộ chiếu,  tốc độ 50ppm/100ipm (quét màu, 300 dpi), khay  giấy 100 tờ, công suất 800…</p>
            <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8250u/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
      </div>
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
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Nên chọn máy scan theo tiêu chí nào?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Theo khối lượng trang mỗi ngày, khổ giấy lớn nhất cần scan, có cần scan hai mặt một lần chạy hay không, độ dày và tình trạng giấy, và có cần scan qua mạng dùng chung hay không.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Hương Sơn có nhận số hóa trọn gói không chỉ bán máy không?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Có. Xem <a class="text-[#1A9900] font-medium hover:underline" href="/giai-phap/scan-so-hoa/">giải pháp scan và số hóa tài liệu</a> — quy trình đầy đủ từ tiếp nhận đến bàn giao dữ liệu.</div>
        </details>
      </div>
        </div>
        <div class="lg:col-span-5">
          
      <div class="bg-white border border-gray-200 p-6 sm:p-9">
        <h2 class="text-xl sm:text-[26px] font-bold text-[#181923] mb-2">Nhận tư vấn và báo giá</h2>
        <p class="text-[14.5px] text-gray-500 leading-relaxed mb-7">Hương Sơn phản hồi trong giờ làm việc. Thông tin của Quý đơn vị chỉ dùng để tư vấn và báo giá.</p>
        <form class="lead-form" id="cat-may-scan-so-hoa-form" method="post" action="/api/lead" novalidate>
          
          <input type="hidden" name="page_type" value="product_category" />
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
            <label for="f-cat-may-scan-so-hoa-hp">Bỏ trống ô này</label>
            <input type="text" id="f-cat-may-scan-so-hoa-hp" name="_hp" tabindex="-1" autocomplete="off" />
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
            <input type="email" id="f-email" name="email" placeholder="ten@@donvi.gov.vn"
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
            <a href="tel:0911138583" data-ga="click_hotline" class="text-[14.5px] font-bold text-[#181923] hover:text-[#1A9900] transition">
              <i class="fa-solid fa-phone text-[#1A9900] mr-2"></i>Hoặc gọi 091.113.8583
            </a>
          </div>
        </form>
      </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/xxx_home-bg_xxx.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Cần tư vấn chọn đúng thiết bị cho nhu cầu của Quý đơn vị?</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Gửi sản lượng, khổ giấy và mục đích sử dụng — Hương Sơn tư vấn cấu hình phù hợp và báo giá.</p>
      </div>
      <div class="flex flex-wrap items-center gap-4 flex-shrink-0">
        <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Yêu cầu báo giá</a>
        <a href="/san-pham/" class="border border-gray-500 hover:border-[#1A9900] hover:text-[#1A9900] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem tất cả sản phẩm</a>
        <a href="tel:0911138583" data-ga="click_hotline" class="text-white font-bold text-sm hover:text-[#1A9900] transition">
          <i class="fa-solid fa-phone text-[#1A9900] mr-2"></i>091.113.8583
        </a>
      </div>
    </div>
  </section>
@endsection
