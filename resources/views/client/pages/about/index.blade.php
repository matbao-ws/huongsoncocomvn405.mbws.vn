@extends('client.layouts.app')

@section('title', "Giới thiệu Công ty Hương Sơn – Thiết bị, in ấn, số hóa | Hương Sơn")
@section('meta_description', "Công ty TNHH Thương mại và Dịch vụ Hương Sơn, thành lập 2008, đại lý ủy quyền Duplo, Toshiba, Konica Minolta — cung cấp thiết bị, in ấn, số hóa và dịch vụ.")
@section('canonical', "https://huongsonco.com.vn/ve-huong-son/")
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
      }
    ]
  }
]
</script>
@endsection

@section('content')
<!-- PAGE HERO (REDESIGNED BREADCRUMB BANNER) -->
  <section class="relative bg-[#0d1626] py-10 sm:py-14 overflow-hidden border-b border-white/10">
    <div class="absolute inset-0 z-0">
      <img src="/assets/images/hero-office.jpg" alt="Giới thiệu Công ty Hương Sơn" class="w-full h-full object-cover object-center opacity-40 scale-105 transform motion-safe:transition-transform motion-safe:duration-1000" loading="eager" />
      <div class="absolute inset-0 bg-gradient-to-r from-[#0a1526]/95 via-[#0d1e38]/85 to-[#0e2a52]/80"></div>
      <div class="absolute inset-0 opacity-15 pointer-events-none" style="background-image: radial-gradient(rgba(255,255,255,0.25) 1px, transparent 1px); background-size: 24px 24px;"></div>
    </div>
    <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 w-full text-center">
      <div class="flex justify-center mb-3">
        <nav class="inline-flex items-center gap-1.5 sm:gap-2 bg-white/10 hover:bg-white/15 border border-white/20 px-3.5 sm:px-4 py-1.5 backdrop-blur-md text-xs text-white/90 transition shadow-sm" aria-label="Breadcrumb">
          <a href="/" class="hover:text-white flex items-center gap-1.5 transition">
            <i class="fa-solid fa-house text-[#5eb74c] text-[11px]"></i>
            <span>Trang chủ</span>
          </a>
          <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i>
          <span class="text-[#84e372] font-semibold" aria-current="page">Về Hương Sơn</span>
        </nav>
      </div>
      <div class="inline-flex items-center justify-center gap-2 text-xs font-bold uppercase tracking-[0.2em] text-[#5eb74c] mb-2">
        <span class="w-1.5 h-1.5 rounded-full bg-[#5eb74c] inline-block animate-pulse"></span>
        Hơn 16 năm phát triển bền vững
      </div>
      <h1 class="text-2xl sm:text-[34px] lg:text-[40px] font-extrabold text-white mb-3 leading-[1.38] tracking-normal drop-shadow-md max-w-4xl mx-auto">
        Giới Thiệu Về Công Ty Hương Sơn
      </h1>
      <p class="max-w-2xl mx-auto text-gray-200 text-[14.5px] sm:text-[15.5px] leading-relaxed mb-6 font-normal">
        Thiết bị cho hiện tại, giải pháp cho tương lai — Đồng hành cùng các cơ quan, trường học, ngân hàng và doanh nghiệp từ năm 2008.
      </p>
      <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 text-xs sm:text-[13px]">
        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm">
          <i class="fa-solid fa-calendar-check text-[#5eb74c]"></i>
          <span>Thành lập từ <strong>2008</strong> (16+ năm kinh nghiệm)</span>
        </div>
        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm">
          <i class="fa-solid fa-certificate text-[#ffc107]"></i>
          <span>Đối tác Ricoh, Toshiba, Duplo</span>
        </div>
        <a href="tel:0911138583" class="inline-flex items-center gap-2 bg-[#1A9900]/90 hover:bg-[#1A9900] text-white border border-[#5eb74c]/50 px-3.5 py-1.5 transition font-semibold shadow-sm">
          <i class="fa-solid fa-phone"></i>
          <span>Hotline: 091.113.8583</span>
        </a>
      </div>
    </div>
  </section>

  <section class="py-10 border-b border-gray-200" style="background-color: rgb(247, 243, 238);">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Trang này là gì</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Giới thiệu Công ty TNHH Thương mại và Dịch vụ Hương Sơn: lịch sử, lĩnh vực kinh doanh và định hướng phát triển.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Thành lập khi nào</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Ngày 01/06/2008, hoạt động trong lĩnh vực thiết bị văn phòng, in ấn, sao chụp, số hóa tài liệu, vật tư và dịch vụ kỹ thuật.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Định hướng</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Từ doanh nghiệp cung cấp thiết bị chuyển sang đơn vị cung cấp giải pháp thiết bị – in ấn – số hóa – dịch vụ giai đoạn 2026–2030.</p>
          </div>
      </div>
    </div>
  </section>

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8"><div class="max-w-4xl">
        <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ HƯƠNG SƠN được thành lập ngày 01/06/2008, hoạt động trong lĩnh vực thiết bị văn phòng, in ấn, sao chụp, số hóa tài liệu, vật tư và dịch vụ kỹ thuật.</p>
        <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">Hương Sơn cung cấp đa dạng các giải pháp gồm máy photocopy, máy in đa chức năng, máy in nhân bản siêu tốc, máy scan, máy phối trang và thiết bị hoàn thiện sau in, máy in Laser, thiết bị văn phòng, thiết bị phòng học và thiết bị dạy học; đồng thời cung cấp vật tư tiêu hao, linh kiện, dịch vụ bảo trì – sửa chữa và cho thuê thiết bị trong nhiều năm qua.</p>
        <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">Năm 2017, Hương Sơn trở thành đại lý ủy quyền phân phối chính thức các sản phẩm của tập đoàn DUPLO (Nhật Bản) và TOSHIBA tại miền Bắc Việt Nam. Năm 2021, Hương Sơn tiếp tục làm đại lý bán hàng cho hãng Konica Minolta đối với dòng máy photocopy đa chức năng từ 25 đến 90 bản/phút.</p>
        <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">Trong quá trình phát triển, Hương Sơn đã xây dựng quan hệ hợp tác với nhiều thương hiệu thiết bị quốc tế, cùng năng lực cung cấp, triển khai và hỗ trợ kỹ thuật cho khách hàng.</p>
        <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">Từ nền tảng kinh nghiệm và năng lực thực tế, giai đoạn 2026–2030, Hương Sơn định hướng phát triển từ doanh nghiệp cung cấp thiết bị thành đơn vị cung cấp giải pháp thiết bị – in ấn – số hóa – dịch vụ. Hương Sơn hướng tới cung cấp giải pháp trọn vòng đời sản phẩm: từ tư vấn, cung cấp và lắp đặt thiết bị đến vật tư, bảo trì, cho thuê, quản lý vận hành và số hóa tài liệu — lấy chất lượng, tính ổn định, hiệu quả đầu tư và dịch vụ đồng hành lâu dài làm nền tảng phát triển.</p></div>
    </div>
  </section>

  <section class="py-14  " style="background-color: rgb(247, 243, 238);">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <blockquote class="border-l-4 border-[#1A9900] pl-8 py-2">
        <p class="text-xl sm:text-2xl font-bold text-[#181923] italic leading-snug">THIẾT BỊ CHO HIỆN TẠI, GIẢI PHÁP CHO TƯƠNG LAI</p>
      </blockquote>
    </div>
  </section>

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-200 bg-white">
          <caption class="text-left px-5 py-4 bg-white border border-b-0 border-gray-200 text-sm font-bold text-[#181923] uppercase tracking-wider">Thông tin pháp lý</caption>
          <thead class="bg-[#181924]"><tr><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Thông tin</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Nội dung</th></tr></thead>
          <tbody>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Tên doanh nghiệp</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ HƯƠNG SƠN</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Mã số thuế</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">0102759269</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Người đại diện</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Ông Nguyễn Công Thuận – Giám đốc</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Trụ sở đăng ký kinh doanh</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Số 2, ngõ 67 phố Đức Giang, tổ 21, phường Việt Hưng, quận Long Biên, TP. Hà Nội</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Văn phòng giao dịch</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Số 27, ngõ 523 phố Minh Khai, phường Vĩnh Tuy, TP. Hà Nội</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Tài khoản ngân hàng</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">0531100329005 – Ngân hàng TMCP Quân Đội (MB Bank), chi nhánh Long Biên</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Điện thoại</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">091.113.8583 – 0912.304.058 – 024 3972 9484</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Email</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">info@huongsonco.com.vn</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/xxx_home-bg_xxx.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Muốn biết thêm về năng lực triển khai của Hương Sơn?</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Xem hồ sơ năng lực đầy đủ hoặc các dự án đã thực hiện.</p>
      </div>
      <div class="flex flex-wrap items-center gap-4 flex-shrink-0">
        <a href="/ve-huong-son/nang-luc/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem hồ sơ năng lực</a>
        <a href="/du-an/" class="border border-gray-500 hover:border-[#1A9900] hover:text-[#1A9900] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem dự án</a>
        <a href="tel:0911138583" data-ga="click_hotline" class="text-white font-bold text-sm hover:text-[#1A9900] transition">
          <i class="fa-solid fa-phone text-[#1A9900] mr-2"></i>091.113.8583
        </a>
      </div>
    </div>
  </section>
@endsection
