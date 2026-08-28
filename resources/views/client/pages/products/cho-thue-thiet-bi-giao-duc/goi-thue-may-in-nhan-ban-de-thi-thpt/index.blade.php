@extends('client.layouts.app')

@section('title', "Gói thuê máy in nhân bản in đề thi THPT & Tuyển sinh – HS-EDU-EXAMPRINT | Hương Sơn")
@section('meta_description', "Gói giải pháp chuyên biệt in sao đề thi THPT của Hương Sơn — được tin dùng bởi các Sở GD&ĐT Vĩnh Phúc, Quảng Trị, Hà Nội... Đảm bảo tuyệt đối bảo mật, đúng")
@section('canonical', "https://huongsonco.com.vn/san-pham/cho-thue-thiet-bi-giao-duc/goi-thue-may-in-nhan-ban-de-thi-thpt/")
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
        "name": "Cho thuê thiết bị cho khối Giáo dục – HƯƠNG SƠN EDUCATION SOLUTIONS",
        "item": "https://huongsonco.com.vn/san-pham/cho-thue-thiet-bi-giao-duc/"
      },
      {
        "@@type": "ListItem",
        "position": 4,
        "name": "Gói thuê máy in nhân bản in đề thi THPT & Tuyển sinh",
        "item": "https://huongsonco.com.vn/san-pham/cho-thue-thiet-bi-giao-duc/goi-thue-may-in-nhan-ban-de-thi-thpt/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "Product",
    "@@id": "https://huongsonco.com.vn/san-pham/cho-thue-thiet-bi-giao-duc/goi-thue-may-in-nhan-ban-de-thi-thpt/#product",
    "name": "Gói thuê máy in nhân bản in đề thi THPT & Tuyển sinh",
    "model": "HS-EDU-EXAMPRINT",
    "sku": "EDU-EXAM-01",
    "category": "Gói giải pháp thuê máy giáo dục",
    "description": "Gói giải pháp chuyên biệt in sao đề thi THPT của Hương Sơn — được tin dùng bởi các Sở GD&ĐT Vĩnh Phúc, Quảng Trị, Hà Nội... Đảm bảo tuyệt đối bảo mật, đúng tiến độ và không gián đoạn.",
    "brand": {
      "@@type": "Brand",
      "name": "Hương Sơn Education Solutions"
    },
    "manufacturer": {
      "@@type": "Organization",
      "name": "Hương Sơn Education Solutions"
    },
    "url": "https://huongsonco.com.vn/san-pham/cho-thue-thiet-bi-giao-duc/goi-thue-may-in-nhan-ban-de-thi-thpt/",
    "additionalProperty": [
      {
        "@@type": "PropertyValue",
        "name": "Thiết bị cung cấp",
        "value": "Máy in siêu tốc Duplo DP-X550 / X650 + Máy phối trang DFC-122"
      },
      {
        "@@type": "PropertyValue",
        "name": "Hỗ trợ kỹ thuật",
        "value": "Kỹ thuật viên trực 24/24 trong khu vực cách ly 3 vòng"
      },
      {
        "@@type": "PropertyValue",
        "name": "Cam kết SLA",
        "value": "Máy dự phòng 1-đổi-1 tại chỗ, miễn phí toàn bộ mực & Master in"
      },
      {
        "@@type": "PropertyValue",
        "name": "Model tương thích",
        "value": "Duplo DP-X550, Duplo DP-X650, Ricoh DX3443"
      },
      {
        "@@type": "PropertyValue",
        "name": "Xuất xứ / Nguồn",
        "value": "Gói giải pháp độc quyền từ Hương Sơn."
      }
    ],
    "audience": [
      {
        "@@type": "Audience",
        "audienceType": "Sở Giáo dục và Đào tạo"
      },
      {
        "@@type": "Audience",
        "audienceType": "Phòng Khảo thí"
      },
      {
        "@@type": "Audience",
        "audienceType": "Hội đồng in sao đề thi"
      }
    ],
    "seller": {
      "@@id": "https://huongsonco.com.vn/#organization"
    },
    "offers": {
      "@@type": "Offer",
      "availability": "https://schema.org/InStock",
      "priceCurrency": "VND",
      "url": "https://huongsonco.com.vn/san-pham/cho-thue-thiet-bi-giao-duc/goi-thue-may-in-nhan-ban-de-thi-thpt/",
      "seller": {
        "@@id": "https://huongsonco.com.vn/#organization"
      },
      "priceSpecification": {
        "@@type": "PriceSpecification",
        "description": "Giá theo cấu hình và số lượng — liên hệ nhận báo giá."
      }
    }
  }
]
</script>
@endsection

@section('content')
<!-- PAGE HERO -->
  <section class="relative min-h-[320px] sm:min-h-[380px] flex items-center overflow-hidden" style="background: linear-gradient(135deg, #10203C 0%, #193877 60%, #204DA4 100%);">
    <div class="absolute inset-0 z-0">
      <img src="/assets/images/hero-office.jpg" alt="Gói thuê máy in nhân bản in đề thi THPT &amp; Tuyển sinh" class="w-full h-full object-cover object-center opacity-25" loading="eager" />
      <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(16, 32, 60, 0.90) 0%, rgba(16, 32, 60, 0.82) 100%);"></div>
    </div>
    <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 py-14 sm:py-16 w-full text-center">
      <span class="font-handwriting text-2xl sm:text-3xl text-[#5eb74c] font-bold block mb-2">Education Solutions</span>
      <h1 class="text-2xl sm:text-[38px] lg:text-[42px] font-bold text-white mb-4 leading-tight tracking-tight drop-shadow-sm">Gói thuê máy in nhân bản in đề thi THPT &amp; Tuyển sinh</h1>
      <p class="max-w-3xl mx-auto text-gray-200 text-[15px] sm:text-[16px] leading-relaxed">Gói giải pháp chuyên biệt in sao đề thi THPT của Hương Sơn — được tin dùng bởi các Sở GD&amp;ĐT Vĩnh Phúc, Quảng Trị, Hà Nội... Đảm bảo tuyệt đối bảo mật, đúng tiến độ và không gián đoạn.</p>
      <nav class="mt-6 text-[13px] text-gray-300 flex items-center justify-center flex-wrap" aria-label="Breadcrumb">
        <a href="/" class="text-gray-300 hover:text-white transition">Trang chủ</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> <a href="/san-pham/" class="text-gray-300 hover:text-white transition">Sản phẩm</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> <a href="/san-pham/cho-thue-thiet-bi-giao-duc/" class="text-gray-300 hover:text-white transition">Cho thuê thiết bị cho khối Giáo dục – HƯƠNG SƠN EDUCATION SOLUTIONS</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> <span class="text-[#5eb74c] font-semibold" aria-current="page">Gói thuê máy in nhân bản in đề thi THPT &amp; Tuyển sinh</span>
      </nav>
    </div>
  </section>

  <section class="py-10 border-b border-gray-200" style="background-color: rgb(247, 243, 238);">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Model</p>
            <p class="text-[15px] text-[#181923] leading-relaxed"><strong>HS-EDU-EXAMPRINT</strong> — sản xuất bởi Hương Sơn Education Solutions</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Dùng cho</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Sở Giáo dục và Đào tạo, Phòng Khảo thí, Hội đồng in sao đề thi</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Model tương thích</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Duplo DP-X550, Duplo DP-X650, Ricoh DX3443</p>
          </div>
      </div>
    </div>
  </section>

  <section class="py-14 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
        <div class="lg:col-span-5">
          <div class="border border-gray-200 bg-white p-4">
            <img src="/assets/images/products/duplo-dp-x550.jpg" alt="Gói thuê máy in nhân bản in đề thi THPT &amp; Tuyển sinh" loading="lazy" class="w-full h-auto object-contain" />
          </div>
        </div>
        <div class="lg:col-span-7">
          <dl class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-4 mb-8">
            <div><dt class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1">Tên chuẩn</dt><dd class="text-[15px] font-semibold text-[#181923]">Gói thuê máy in nhân bản in đề thi THPT &amp; Tuyển sinh</dd></div>
            <div><dt class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1">Model</dt><dd class="text-[15px] font-semibold text-[#181923]">HS-EDU-EXAMPRINT</dd></div>
            <div><dt class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1">Hãng sản xuất</dt><dd class="text-[15px] font-semibold text-[#181923]">Hương Sơn Education Solutions</dd></div>
            <div><dt class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1">Danh mục</dt><dd class="text-[15px] font-semibold text-[#181923]"><a href="/san-pham/cho-thue-thiet-bi-giao-duc/" class="hover:text-[#1A9900]">Gói giải pháp thuê máy giáo dục</a></dd></div>
          </dl>
          <h2 class="text-[13px] font-bold uppercase tracking-[0.16em] text-[#181923] mb-3">Ứng dụng thực tế</h2>
          <ul class="grid grid-cols-1 md:grid-cols-1 gap-x-10 gap-y-3.5">
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">In sao đề thi kỳ thi tốt nghiệp THPT Quốc gia tại các Hội đồng thi Sở GD&amp;ĐT</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">In đề thi tuyển sinh vào lớp 10 các tỉnh thành</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">In đề thi kết thúc học kỳ, khảo sát chất lượng cho các trường THPT/THCS</span>
        </li>
      </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="py-16 bg-[#f5f8fb] ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="overflow-x-auto border border-gray-200">
        <table class="w-full min-w-[520px] bg-white">
          <caption class="text-left px-5 py-4 bg-[#181924] text-white text-sm font-bold uppercase tracking-wider">Thông số kỹ thuật — HS-EDU-EXAMPRINT</caption>
          <tbody class="px-5">
            <tr class="border-b border-gray-200 last:border-0">
              <th scope="row" class="text-left align-top py-3 pr-6 w-[42%] text-[14px] font-semibold text-[#181923]">Thiết bị cung cấp</th>
              <td class="py-3 text-[14.5px] text-gray-600">Máy in siêu tốc Duplo DP-X550 / X650 + Máy phối trang DFC-122</td>
            </tr>
            <tr class="border-b border-gray-200 last:border-0">
              <th scope="row" class="text-left align-top py-3 pr-6 w-[42%] text-[14px] font-semibold text-[#181923]">Hỗ trợ kỹ thuật</th>
              <td class="py-3 text-[14.5px] text-gray-600">Kỹ thuật viên trực 24/24 trong khu vực cách ly 3 vòng</td>
            </tr>
            <tr class="border-b border-gray-200 last:border-0">
              <th scope="row" class="text-left align-top py-3 pr-6 w-[42%] text-[14px] font-semibold text-[#181923]">Cam kết SLA</th>
              <td class="py-3 text-[14.5px] text-gray-600">Máy dự phòng 1-đổi-1 tại chỗ, miễn phí toàn bộ mực &amp; Master in</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="py-14 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-200 bg-white">
          <caption class="text-left px-5 py-4 bg-white border border-b-0 border-gray-200 text-sm font-bold text-[#181923] uppercase tracking-wider">Nguồn gốc và bảo hành</caption>
          <thead class="bg-[#181924]"><tr><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Thông tin</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Chi tiết</th></tr></thead>
          <tbody>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Xuất xứ / Nguồn</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Gói giải pháp độc quyền từ Hương Sơn.</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Model tương thích</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Duplo DP-X550, Duplo DP-X650, Ricoh DX3443</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14">
        <div class="lg:col-span-7">
      <h2 class="text-2xl sm:text-[32px] font-bold text-[#181923] mb-8">Câu hỏi thường gặp</h2>
      <div class="space-y-3">
      </div>
        </div>
        <div class="lg:col-span-5">
          
      <div class="bg-white border border-gray-200 p-6 sm:p-9">
        <h2 class="text-xl sm:text-[26px] font-bold text-[#181923] mb-2">Yêu cầu báo giá model này</h2>
        <p class="text-[14.5px] text-gray-500 leading-relaxed mb-7">Hương Sơn phản hồi trong giờ làm việc. Thông tin của Quý đơn vị chỉ dùng để tư vấn và báo giá.</p>
        <form class="lead-form" id="model-goi-thue-may-in-nhan-ban-de-thi-thpt-form" method="post" action="/api/lead" novalidate>
          
          <input type="hidden" name="page_type" value="product_model" />
          <input type="hidden" name="product_model" value="HS-EDU-EXAMPRINT" />
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
            <label for="f-model-goi-thue-may-in-nhan-ban-de-thi-thpt-hp">Bỏ trống ô này</label>
            <input type="text" id="f-model-goi-thue-may-in-nhan-ban-de-thi-thpt-hp" name="_hp" tabindex="-1" autocomplete="off" />
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
          </div><input type="hidden" name="nhu_cau" value="MUA" />
          <div class="sm:col-span-1">
            <label for="f-so_luong_thiet_bi" class="block text-[13px] font-semibold text-[#181923] mb-2">Số lượng thiết bị dự kiến</label>
            <input type="text" id="f-so_luong_thiet_bi" name="so_luong_thiet_bi" placeholder="VD: 02 máy"
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
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Cần báo giá cho Gói thuê máy in nhân bản in đề thi THPT & Tuyển sinh?</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Gửi số lượng và thời điểm cần — Hương Sơn báo giá kèm phương án vận chuyển, lắp đặt và bảo hành.</p>
      </div>
      <div class="flex flex-wrap items-center gap-4 flex-shrink-0">
        <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Yêu cầu báo giá</a>
        <a href="/san-pham/cho-thue-thiet-bi-giao-duc/" class="border border-gray-500 hover:border-[#1A9900] hover:text-[#1A9900] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem Cho thuê thiết bị cho khối Giáo dục – HƯƠNG SƠN EDUCATION SOLUTIONS</a>
        <a href="tel:02439729484" data-ga="click_hotline" class="text-white font-bold text-sm hover:text-[#1A9900] transition">
          <i class="fa-solid fa-phone text-[#1A9900] mr-2"></i>024 3972 9484
        </a>
      </div>
    </div>
  </section>
@endsection
