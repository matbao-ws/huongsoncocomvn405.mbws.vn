@extends('client.layouts.app')

@section('title', "Công cụ tính chi phí thuê máy photocopy | Hương Sơn")
@section('meta_description', "Ước tính nhanh chi phí thuê máy photocopy theo sản lượng in hằng tháng và thời hạn thuê.")
@section('canonical', "https://huongsonco.com.vn/cong-cu/tinh-chi-phi-thue-may/")
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
        "name": "Công cụ",
        "item": "https://huongsonco.com.vn/cong-cu/"
      },
      {
        "@@type": "ListItem",
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
<!-- PAGE HERO -->
  <section class="relative min-h-[320px] sm:min-h-[380px] flex items-center overflow-hidden" style="background: linear-gradient(135deg, #10203C 0%, #193877 60%, #204DA4 100%);">
    <div class="absolute inset-0 z-0">
      <img src="/assets/images/hero-office.jpg" alt="Công cụ tính chi phí thuê máy" class="w-full h-full object-cover object-center opacity-25" loading="eager" />
      <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(16, 32, 60, 0.90) 0%, rgba(16, 32, 60, 0.82) 100%);"></div>
    </div>
    <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 py-14 sm:py-16 w-full text-center">
      <span class="font-handwriting text-2xl sm:text-3xl text-[#5eb74c] font-bold block mb-2">Công cụ ước tính</span>
      <h1 class="text-2xl sm:text-[38px] lg:text-[42px] font-bold text-white mb-4 leading-tight tracking-tight drop-shadow-sm">Công cụ tính chi phí thuê máy</h1>
      <p class="max-w-3xl mx-auto text-gray-200 text-[15px] sm:text-[16px] leading-relaxed">Ước tính nhanh chi phí thuê máy photocopy theo sản lượng — dùng để tham khảo trước khi nhận báo giá chính thức.</p>
      <nav class="mt-6 text-[13px] text-gray-300 flex items-center justify-center flex-wrap" aria-label="Breadcrumb">
        <a href="/" class="text-gray-300 hover:text-white transition">Trang chủ</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> <a href="/cong-cu/" class="text-gray-300 hover:text-white transition">Công cụ</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> <span class="text-[#5eb74c] font-semibold" aria-current="page">Tính chi phí thuê máy</span>
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
@endsection
