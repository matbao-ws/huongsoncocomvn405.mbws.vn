@extends('client.layouts.app')

@section('title', "Mực Fansipan chính hãng – toner, cartridge tương thích Toshiba, Ricoh, HP | Hương Sơn")
@section('meta_description', "FANSIPAN là thương hiệu vật tư in ấn riêng của Hương Sơn: mực, toner, cụm mực tương thích nhiều dòng máy photocopy, máy in phổ biến. Giá tốt, nguồn gốc rõ ràng, có tư vấn theo đúng model máy.")
@section('canonical', "https://huongsonco.com.vn/san-pham/fansipan/")
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
        "name": "FANSIPAN – Mực và vật tư in ấn tương thích",
        "item": "https://huongsonco.com.vn/san-pham/fansipan/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "ItemList",
    "name": "FANSIPAN – Mực và vật tư in ấn tương thích",
    "numberOfItems": 2,
    "itemListElement": [
      {
        "@@type": "ListItem",
        "position": 1,
        "name": "Mực photocopy FANSIPAN Toner Black cho Toshiba e-STUDIO",
        "url": "https://huongsonco.com.vn/san-pham/fansipan/muc-fansipan-toner-toshiba-e-studio/"
      },
      {
        "@@type": "ListItem",
        "position": 2,
        "name": "Mực photocopy FANSIPAN Toner Black cho Ricoh Aficio",
        "url": "https://huongsonco.com.vn/san-pham/fansipan/muc-fansipan-toner-ricoh-aficio/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
      {
        "@@type": "Question",
        "name": "Mực Fansipan có phải hàng chính hãng của Toshiba, Ricoh, HP không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Không. FANSIPAN là thương hiệu vật tư tương thích (compatible) do Hương Sơn phát triển và phân phối, được thiết kế để lắp vừa và hoạt động tốt trên nhiều dòng máy của các hãng như Toshiba, Ricoh, HP, Konica Minolta — đây không phải là vật tư chính hãng do các hãng máy sản xuất, nhưng vẫn đảm bảo chất lượng in và độ tương thích khi dùng đúng model."
        }
      },
      {
        "@@type": "Question",
        "name": "Vì sao nên chọn mực Fansipan thay vì mực chính hãng?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Mực Fansipan thường có chi phí thấp hơn hàng chính hãng trong khi vẫn đảm bảo chất lượng in cho nhu cầu sử dụng thông thường — phù hợp với đơn vị cần tối ưu chi phí vật tư cho khối lượng in lớn hoặc thường xuyên."
        }
      },
      {
        "@@type": "Question",
        "name": "Làm sao biết mực Fansipan nào tương thích với máy của tôi?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Cung cấp đúng tên hãng và model máy đang sử dụng (ví dụ: Toshiba e-STUDIO 2829A) — Hương Sơn tư vấn chính xác loại mực, toner hoặc cụm mực Fansipan tương thích với model đó."
        }
      },
      {
        "@@type": "Question",
        "name": "Fansipan có bán lẻ theo từng hộp mực không hay chỉ theo hợp đồng?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Cả hai. Có thể mua lẻ theo nhu cầu phát sinh, hoặc đưa vào hợp đồng cung ứng định kỳ khi thuê máy hoặc sử dụng dịch vụ quản lý in ấn trọn gói của Hương Sơn."
        }
      },
      {
        "@@type": "Question",
        "name": "Mực refill Fansipan khác gì mực hộp mới?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Refill là hình thức nạp lại mực vào vỏ hộp cũ, thường có chi phí thấp hơn hộp mực mới hoàn toàn. Loại phù hợp tùy thuộc tình trạng hộp mực hiện có và nhu cầu của đơn vị — Hương Sơn tư vấn cụ thể theo từng trường hợp."
        }
      },
      {
        "@@type": "Question",
        "name": "Hương Sơn có giao mực Fansipan toàn quốc không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Hương Sơn nhận yêu cầu và tư vấn trên toàn quốc; phạm vi giao hàng và thời gian cụ thể phụ thuộc địa điểm — vui lòng liên hệ để được xác nhận."
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
      <img src="/assets/images/hero-office.jpg" alt="FANSIPAN – Mực và vật tư in ấn tương thích" class="w-full h-full object-cover object-center opacity-25" loading="eager" />
      <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(16, 32, 60, 0.90) 0%, rgba(16, 32, 60, 0.82) 100%);"></div>
    </div>
    <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 py-14 sm:py-16 w-full text-center">
      <span class="font-handwriting text-2xl sm:text-3xl text-[#5eb74c] font-bold block mb-2">Thương hiệu vật tư riêng của Hương Sơn</span>
      <h1 class="text-2xl sm:text-[38px] lg:text-[42px] font-bold text-white mb-4 leading-tight tracking-tight drop-shadow-sm">FANSIPAN – Mực và vật tư in ấn tương thích</h1>
      <p class="max-w-3xl mx-auto text-gray-200 text-[15px] sm:text-[16px] leading-relaxed">FANSIPAN là thương hiệu vật tư in ấn riêng do Hương Sơn phát triển và phân phối: mực, toner, cụm mực tương thích nhiều dòng máy photocopy, máy in phổ biến trên thị trường — giá tốt hơn hàng chính hãng, có tư vấn đúng theo model máy đang sử dụng.</p>
      <nav class="mt-6 text-[13px] text-gray-300 flex items-center justify-center flex-wrap" aria-label="Breadcrumb">
        <a href="/" class="text-gray-300 hover:text-white transition">Trang chủ</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> <a href="/san-pham/" class="text-gray-300 hover:text-white transition">Sản phẩm</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> <span class="text-[#5eb74c] font-semibold" aria-current="page">FANSIPAN – Mực và vật tư in ấn tương thích</span>
      </nav>
    </div>
  </section>

  <section class="py-10 border-b border-gray-200" style="background-color: rgb(247, 243, 238);">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">FANSIPAN là gì</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Thương hiệu vật tư in ấn riêng do Hương Sơn phát triển và phân phối, gồm mực, toner, cartridge và cụm mực tương thích nhiều dòng máy photocopy, máy in phổ biến.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Dành cho ai</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Đơn vị đang sử dụng máy photocopy, máy in của nhiều hãng khác nhau, cần vật tư thay thế với chi phí hợp lý hơn hàng chính hãng.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Giải quyết vấn đề gì</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Có nguồn vật tư ổn định, giá tốt và được tư vấn đúng loại tương thích theo model máy — thay vì phải tự tìm và tự đoán loại mực phù hợp.</p>
          </div>
      </div>
    </div>
  </section>

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8"><p class="text-[15.5px] text-gray-600 leading-[1.85] mb-8 max-w-4xl">Nhóm vật tư in ấn thương hiệu riêng FANSIPAN của Hương Sơn: toner, cartridge, cụm mực, trống và bột từ — tương thích nhiều dòng máy phổ biến, đi kèm tư vấn kỹ thuật.</p><ul class="grid grid-cols-1 md:grid-cols-1 gap-x-10 gap-y-3.5">
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">FANSIPAN gồm các nhóm: mực/toner đen và màu, cartridge, cụm mực, trống (drum) và bột từ.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Vật tư được thiết kế tương thích với nhiều dòng máy phổ biến trên thị trường, bao gồm các thương hiệu máy Hương Sơn đang phân phối như Toshiba, Ricoh, Konica Minolta cũng như các dòng máy khác đang được đơn vị sử dụng.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Cần cung cấp đúng model máy đang dùng để Hương Sơn tư vấn chính xác loại vật tư Fansipan tương thích — vật tư không tương thích đúng model có thể ảnh hưởng chất lượng bản in và tuổi thọ thiết bị.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Có sẵn dịch vụ tư vấn và hỗ trợ kỹ thuật khi sử dụng vật tư Fansipan, đi kèm các hợp đồng thuê máy và quản lý in ấn trọn gói của Hương Sơn.</span>
        </li>
      </ul><div class="mb-10"></div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/muc-fansipan-toner.jpg" alt="Mực photocopy FANSIPAN Toner Black cho Toshiba e-STUDIO" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">FANSIPAN (Hương Sơn)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/fansipan/muc-fansipan-toner-toshiba-e-studio/">Mực photocopy FANSIPAN Toner Black cho Toshiba e-STUDIO</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">FANSIPAN Toner Black cho Toshiba là thương hiệu mực độc quyền của Hương Sơn — đem lại chất lượng bản in sắc nét, tiết kiệm tối đa chi phí cho trường h…</p>
            <a href="/san-pham/fansipan/muc-fansipan-toner-toshiba-e-studio/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Xem thông số kỹ thuật</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/muc-fansipan-toner.jpg" alt="Mực photocopy FANSIPAN Toner Black cho Ricoh Aficio" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">FANSIPAN (Hương Sơn)</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/san-pham/fansipan/muc-fansipan-toner-ricoh-aficio/">Mực photocopy FANSIPAN Toner Black cho Ricoh Aficio</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Mực FANSIPAN cho Ricoh Aficio — tương thích hoàn hảo với các dòng máy Ricoh MP series, giúp doanh nghiệp cắt giảm đáng kể chi phí in ấn thường xuyên.</p>
            <a href="/san-pham/fansipan/muc-fansipan-toner-ricoh-aficio/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
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
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Mực Fansipan có phải hàng chính hãng của Toshiba, Ricoh, HP không?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Không. FANSIPAN là thương hiệu vật tư tương thích (compatible) do Hương Sơn phát triển và phân phối, được thiết kế để lắp vừa và hoạt động tốt trên nhiều dòng máy của các hãng như Toshiba, Ricoh, HP, Konica Minolta — đây không phải là vật tư chính hãng do các hãng máy sản xuất, nhưng vẫn đảm bảo chất lượng in và độ tương thích khi dùng đúng model.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Vì sao nên chọn mực Fansipan thay vì mực chính hãng?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Mực Fansipan thường có chi phí thấp hơn hàng chính hãng trong khi vẫn đảm bảo chất lượng in cho nhu cầu sử dụng thông thường — phù hợp với đơn vị cần tối ưu chi phí vật tư cho khối lượng in lớn hoặc thường xuyên.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Làm sao biết mực Fansipan nào tương thích với máy của tôi?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Cung cấp đúng tên hãng và model máy đang sử dụng (ví dụ: Toshiba e-STUDIO 2829A) — Hương Sơn tư vấn chính xác loại mực, toner hoặc cụm mực Fansipan tương thích với model đó.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Fansipan có bán lẻ theo từng hộp mực không hay chỉ theo hợp đồng?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Cả hai. Có thể mua lẻ theo nhu cầu phát sinh, hoặc đưa vào hợp đồng cung ứng định kỳ khi thuê máy hoặc sử dụng dịch vụ quản lý in ấn trọn gói của Hương Sơn.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Mực refill Fansipan khác gì mực hộp mới?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Refill là hình thức nạp lại mực vào vỏ hộp cũ, thường có chi phí thấp hơn hộp mực mới hoàn toàn. Loại phù hợp tùy thuộc tình trạng hộp mực hiện có và nhu cầu của đơn vị — Hương Sơn tư vấn cụ thể theo từng trường hợp.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Hương Sơn có giao mực Fansipan toàn quốc không?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Hương Sơn nhận yêu cầu và tư vấn trên toàn quốc; phạm vi giao hàng và thời gian cụ thể phụ thuộc địa điểm — vui lòng liên hệ để được xác nhận.</div>
        </details>
      </div>
        </div>
        <div class="lg:col-span-5">
          
      <div class="bg-white border border-gray-200 p-6 sm:p-9">
        <h2 class="text-xl sm:text-[26px] font-bold text-[#181923] mb-2">Nhận tư vấn và báo giá</h2>
        <p class="text-[14.5px] text-gray-500 leading-relaxed mb-7">Hương Sơn phản hồi trong giờ làm việc. Thông tin của Quý đơn vị chỉ dùng để tư vấn và báo giá.</p>
        <form class="lead-form" id="cat-fansipan-form" method="post" action="/api/lead" novalidate>
          
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
            <label for="f-cat-fansipan-hp">Bỏ trống ô này</label>
            <input type="text" id="f-cat-fansipan-hp" name="_hp" tabindex="-1" autocomplete="off" />
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

  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/xxx_home-bg_xxx.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Cần tư vấn chọn đúng thiết bị cho nhu cầu của Quý đơn vị?</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Gửi sản lượng, khổ giấy và mục đích sử dụng — Hương Sơn tư vấn cấu hình phù hợp và báo giá.</p>
      </div>
      <div class="flex flex-wrap items-center gap-4 flex-shrink-0">
        <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Yêu cầu báo giá</a>
        <a href="/san-pham/" class="border border-gray-500 hover:border-[#1A9900] hover:text-[#1A9900] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem tất cả sản phẩm</a>
        <a href="tel:02439729484" data-ga="click_hotline" class="text-white font-bold text-sm hover:text-[#1A9900] transition">
          <i class="fa-solid fa-phone text-[#1A9900] mr-2"></i>024 3972 9484
        </a>
      </div>
    </div>
  </section>
@endsection
