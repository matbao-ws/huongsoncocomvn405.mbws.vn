@extends('client.layouts.app')

@section('title', "Kiến Thức & Cẩm Nang Mua, Thuê Thiết Bị In Ấn | Hương Sơn")
@section('meta_description', "Tổng hợp kiến thức chuyên sâu: nên thuê hay mua máy photocopy, hướng dẫn chọn máy scan số hóa, tiêu chuẩn máy in đề thi và kinh nghiệm chọn mực in chính hãng.")
@section('canonical', "https://huongsonco.com.vn/ve-huong-son/kien-thuc/")
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
      },
      {
        "@@type": "ListItem",
        "position": 3,
        "name": "Kiến thức",
        "item": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "ItemList",
    "name": "Kiến thức thiết bị in ấn & số hóa Hương Sơn",
    "numberOfItems": 6,
    "itemListElement": [
      {
        "@@type": "ListItem",
        "position": 1,
        "name": "Nên thuê hay mua máy photocopy cho doanh nghiệp, trường học? Phân tích chi phí & hiệu quả",
        "url": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/nen-thue-hay-mua-may-photocopy/"
      },
      {
        "@@type": "ListItem",
        "position": 2,
        "name": "Hướng dẫn lựa chọn máy scan số hóa tài liệu cho cơ quan, trường học & ngân hàng",
        "url": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/huong-dan-chon-may-scan-so-hoa-tai-lieu/"
      },
      {
        "@@type": "ListItem",
        "position": 3,
        "name": "Tiêu chuẩn lựa chọn và vận hành máy in sao đề thi tốt nghiệp THPT an toàn, bảo mật",
        "url": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/tieu-chuan-may-in-de-thi-thpt/"
      },
      {
        "@@type": "ListItem",
        "position": 4,
        "name": "So sánh máy photocopy đa chức năng Toshiba và Konica Minolta: Nên chọn hãng nào?",
        "url": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/so-sanh-may-photocopy-toshiba-va-konica-minolta/"
      },
      {
        "@@type": "ListItem",
        "position": 5,
        "name": "Cách chọn mực in và linh kiện tiêu hao máy photocopy chính hãng tránh hỏng trống gạt",
        "url": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/cach-chon-muc-in-linh-kien-may-photocopy-chinh-hang/"
      },
      {
        "@@type": "ListItem",
        "position": 6,
        "name": "Quy trình số hóa hồ sơ, tài liệu lưu trữ cơ quan Nhà nước và trường học từ A đến Z",
        "url": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/quy-trinh-so-hoa-tai-lieu-luu-tru/"
      }
    ]
  }
]
</script>
@endsection

@section('content')
<!-- PAGE HERO (SPLIT-HERO FOREGROUND SHOWCASE BANNER) -->
  <section class="relative bg-[#0d1626] py-10 sm:py-14 lg:py-16 overflow-hidden border-b border-white/10">
    <!-- Ambient Tech Background -->
    <div class="absolute inset-0 z-0">
      <div class="absolute inset-0 bg-gradient-to-br from-[#0a1526] via-[#0d1e38] to-[#12284c]"></div>
      <div class="absolute inset-0 opacity-15 pointer-events-none" style="background-image: radial-gradient(rgba(255,255,255,0.2) 1px, transparent 1px); background-size: 28px 28px;"></div>
      <div class="absolute -top-24 -right-24 w-96 h-96 bg-[#1A9900]/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl pointer-events-none"></div>
    </div>

    <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 w-full">
      <!-- Breadcrumb Pill on Top-Left -->
      <div class="flex items-center justify-start mb-4">
        <nav class="inline-flex items-center gap-1.5 sm:gap-2 bg-white/10 hover:bg-white/15 border border-white/20 px-3.5 sm:px-4 py-1.5 backdrop-blur-md text-xs text-white/90 transition shadow-sm flex-wrap" aria-label="Breadcrumb">
          <a href="/" class="hover:text-white flex items-center gap-1.5 transition">
            <i class="fa-solid fa-house text-[#5eb74c] text-[11px]"></i>
            <span>Trang chủ</span>
          </a>
          <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i>
          <a href="/ve-huong-son/" class="text-gray-200 hover:text-white transition">Về Hương Sơn</a>
          <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i>
          <span class="text-[#84e372] font-semibold" aria-current="page">Kiến thức</span>
        </nav>
      </div>

      <!-- 2-COLUMN SPLIT HERO SHOWCASE -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
        <!-- LEFT COLUMN: Content & Action (7 cols) -->
        <div class="lg:col-span-7 text-left">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.2em] text-[#5eb74c] mb-2.5">
            <span class="w-2 h-2 rounded-full bg-[#5eb74c] inline-block animate-pulse"></span>
            Kiến thức chuyên môn ngành
          </div>
          <h1 class="text-2xl sm:text-[34px] lg:text-[40px] font-extrabold text-white mb-3.5 leading-[1.35] tracking-normal drop-shadow-md">
            Cẩm Nang Thiết Bị, In Ấn &amp; Số Hóa
          </h1>
          <p class="text-gray-200 text-[14.5px] sm:text-base leading-relaxed mb-6 font-normal max-w-2xl">Tổng hợp kinh nghiệm chuyên sâu, bảng so sánh và phân tích chi phí giúp Quý khách ra quyết định chính xác nhất trước khi mua hoặc thuê thiết bị.</p>
          <div class="flex flex-wrap items-center gap-2 sm:gap-2.5 mb-7">
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm">
          <i class="fa-solid fa-book-bookmark text-[#5eb74c]"></i>
          <span>Cẩm nang kỹ thuật thực chiến</span>
        </div>
        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm">
          <i class="fa-solid fa-scale-balanced text-[#ffc107]"></i>
          <span>So sánh mua vs thuê máy tối ưu</span>
        </div>
        <a href="tel:0911138583" class="inline-flex items-center gap-2 bg-[#1A9900]/90 hover:bg-[#1A9900] text-white border border-[#5eb74c]/50 px-3.5 py-1.5 transition font-semibold shadow-sm">
          <i class="fa-solid fa-phone"></i>
          <span>Hotline: 091.113.8583</span>
        </a>
          </div>
          <div class="flex flex-wrap items-center gap-3.5 sm:gap-4">
            <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-7 py-3.5 transition flex items-center gap-2 shadow-lg shadow-[#1A9900]/30 border border-[#5eb74c]/50">
              <span>Yêu Cầu Báo Giá Nhanh</span>
              <i class="fa-solid fa-arrow-right text-[11px]"></i>
            </a>
            <a href="tel:0911138583" class="border border-white/30 hover:border-[#5eb74c] hover:bg-white/10 text-white font-bold text-xs uppercase tracking-wider px-6 py-3.5 transition flex items-center gap-2 backdrop-blur-sm">
              <i class="fa-solid fa-phone text-[#5eb74c]"></i>
              <span>Hotline: 091.113.8583</span>
            </a>
          </div>
        </div>

        <!-- RIGHT COLUMN: THE FOREGROUND PRODUCT SHOWCASE (5 cols) -->
        <div class="lg:col-span-5 relative mt-6 lg:mt-0">
          <div class="relative mx-auto max-w-[420px] lg:max-w-none">
            <div class="absolute -inset-2 bg-gradient-to-tr from-[#1A9900]/25 to-blue-500/20 rounded-2xl blur-xl opacity-70 pointer-events-none"></div>
            <div class="relative bg-gradient-to-b from-white/[0.12] to-white/[0.04] border border-white/20 p-5 sm:p-6 backdrop-blur-xl shadow-2xl overflow-hidden group">
              <!-- Top Floating Badge -->
              <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 shadow-md flex items-center gap-1.5 border border-white/20 z-20">
                <i class="fa-solid fa-bolt text-[#ffc107]"></i>
                <span>Scan 80 – 140 trang/phút</span>
              </div>

              <!-- Foreground Product Image (100% Crisp, High Res, Unobscured!) -->
              <div class="pt-6 pb-2 px-2 flex items-center justify-center min-h-[200px] sm:min-h-[230px]">
                <img src="/assets/images/banners/highspeed_scanner_1787905830483.jpg" alt="Cẩm nang thiết bị, in ấn &amp; số hóa tài liệu" class="max-h-[190px] sm:max-h-[220px] w-auto object-contain mx-auto drop-shadow-[0_15px_25px_rgba(0,0,0,0.6)] transform group-hover:scale-105 transition-transform duration-500" loading="eager" />
              </div>

              <!-- Bottom Caption Strip & Floating Badge -->
              <div class="pt-3 border-t border-white/15 flex items-center justify-between text-xs text-gray-200">
                <div class="flex items-center gap-1.5 font-medium">
                  <i class="fa-solid fa-circle-check text-[#5eb74c]"></i>
                  <span>Máy scan Ricoh Fujitsu chuyên dụng</span>
                </div>
                <span class="bg-[#0d1626]/80 text-[#84e372] text-[10.5px] font-bold px-2 py-0.5 border border-[#5eb74c]/40">
                  OCR Tiếng Việt
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-10 border-b border-gray-200" style="background-color: rgb(247, 243, 238);">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Chuyên mục này là gì</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Trung tâm kiến thức chuyên sâu về máy photocopy, máy in nhân bản, máy scan số hóa và giải pháp in ấn cho doanh nghiệp, cơ quan, trường học.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Dành cho ai</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Lãnh đạo đơn vị, phòng Kế hoạch – Tài chính, phòng Mua sắm vật tư, cán bộ khảo thí và chuyên viên quản trị thiết bị.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Giúp giải quyết điều gì</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Nắm rõ chi phí thực tế TCO, so sánh ưu nhược điểm các dòng máy, hiểu quy trình số hóa chuẩn quốc gia và chọn đúng vật tư chính hãng.</p>
          </div>
      </div>
    </div>
  </section>

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8"><h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-8 uppercase tracking-wider text-center">Các bài viết mới nhất</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-book-open text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Cẩm nang tư vấn</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/nen-thue-hay-mua-may-photocopy/">Nên thuê hay mua máy photocopy cho doanh nghiệp, trường học? Phân tích chi phí &amp; hiệu quả</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Bài toán so sánh chi tiết giữa việc đầu tư mua đứt và giải pháp thuê máy photocopy trọn gói: phân tích dòng tiền, chi phí mực in, khấu hao và rủi ro kỹ thuật gi…</p>
            <a href="/ve-huong-son/kien-thuc/nen-thue-hay-mua-may-photocopy/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (6 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-book-open text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Cẩm nang thiết bị</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/huong-dan-chon-may-scan-so-hoa-tai-lieu/">Hướng dẫn lựa chọn máy scan số hóa tài liệu cho cơ quan, trường học &amp; ngân hàng</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Tổng hợp kinh nghiệm chọn mua máy quét (scanner) chuyên dụng phục vụ công tác số hóa hồ sơ lưu trữ: phân biệt các dòng máy scan ADF, Flatbed, máy scan công nghi…</p>
            <a href="/ve-huong-son/kien-thuc/huong-dan-chon-may-scan-so-hoa-tai-lieu/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (7 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-book-open text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Cẩm nang giáo dục</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/tieu-chuan-may-in-de-thi-thpt/">Tiêu chuẩn lựa chọn và vận hành máy in sao đề thi tốt nghiệp THPT an toàn, bảo mật</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Tổng hợp các tiêu chuẩn kỹ thuật nghiêm ngặt trong công tác in sao đề thi tuyển sinh và tốt nghiệp THPT: yêu cầu tốc độ, độ sắc nét, phương án dự phòng N+1 và q…</p>
            <a href="/ve-huong-son/kien-thuc/tieu-chuan-may-in-de-thi-thpt/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (6 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-book-open text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">So sánh thiết bị</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/so-sanh-may-photocopy-toshiba-va-konica-minolta/">So sánh máy photocopy đa chức năng Toshiba và Konica Minolta: Nên chọn hãng nào?</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Đặt lên bàn cân hai thương hiệu máy photocopy văn phòng phổ biến nhất tại Việt Nam: Toshiba e-STUDIO nổi tiếng về độ bền, tiết kiệm mực vs Konica Minolta bizhub…</p>
            <a href="/ve-huong-son/kien-thuc/so-sanh-may-photocopy-toshiba-va-konica-minolta/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (5 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-book-open text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Kỹ thuật &amp; Vật tư</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/cach-chon-muc-in-linh-kien-may-photocopy-chinh-hang/">Cách chọn mực in và linh kiện tiêu hao máy photocopy chính hãng tránh hỏng trống gạt</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Chia sẻ kinh nghiệm nhận biết và chọn mua mực in, cuộn Master và linh kiện tiêu hao chính hãng: bí quyết giúp kéo dài tuổi thọ trống drum, tiết kiệm chi phí sửa…</p>
            <a href="/ve-huong-son/kien-thuc/cach-chon-muc-in-linh-kien-may-photocopy-chinh-hang/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (5 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="px-6 pt-6"><span class="w-12 h-12 bg-[#181924] group-hover:bg-[#1A9900] text-white flex items-center justify-center transition"><i class="fa-solid fa-book-open text-lg"></i></span></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Chuyển đổi số</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/quy-trinh-so-hoa-tai-lieu-luu-tru/">Quy trình số hóa hồ sơ, tài liệu lưu trữ cơ quan Nhà nước và trường học từ A đến Z</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Cẩm nang hướng dẫn đầy đủ 7 bước chuẩn hóa trong quy trình số hóa tài liệu lưu trữ theo Thông tư 02/2019/TT-BNV: tiêu chuẩn kỹ thuật quét ảnh, phần mềm OCR nhận…</p>
            <a href="/ve-huong-son/kien-thuc/quy-trinh-so-hoa-tai-lieu-luu-tru/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (6 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- PROMOTIONAL BANNER: EXPERT TECHNICAL CONSULTATION -->
  <section class="py-12 bg-white">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="relative overflow-hidden bg-gradient-to-r from-[#142238] via-[#1a3356] to-[#142238] p-8 sm:p-12 text-white border-l-4 border-[#1A9900] shadow-xl">
        <div class="absolute right-0 top-0 bottom-0 w-1/3 opacity-15 hidden md:block pointer-events-none">
          <img src="/assets/images/banners/highspeed_scanner_1787905830483.jpg" alt="Chuyên gia kỹ thuật Hương Sơn" class="w-full h-full object-cover" />
        </div>
        <div class="relative z-10 max-w-3xl">
          <div class="inline-flex items-center space-x-2 bg-[#1A9900]/25 border border-[#1A9900]/50 px-3 py-1 mb-3 text-[#5eb74c] text-xs font-bold uppercase tracking-wider">
            <i class="fa-solid fa-graduation-cap text-[#5eb74c]"></i>
            <span>Tài Liệu &amp; Cẩm Nang Kỹ Thuật Chuyên Sâu</span>
          </div>
          <h2 class="banner-heading text-2xl sm:text-3xl font-bold text-white mb-4 leading-[1.38]">
            Cần Tư Vấn Kỹ Thuật Trực Tiếp Từ Đội Ngũ Kỹ Sư Hương Sơn?
          </h2>
          <p class="text-gray-300 text-sm sm:text-base leading-relaxed mb-6">
            Đừng để sự cố in ấn làm gián đoạn công tác vận hành hoặc các kỳ thi quan trọng. Các kỹ sư có trên 15 năm kinh nghiệm về hệ thống Duplo, Toshiba và Ricoh của Hương Sơn luôn sẵn sàng giải đáp và hỗ trợ từ xa hoặc trực tiếp tại cơ sở của bạn.
          </p>
          <div class="flex flex-wrap items-center gap-4">
            <a href="tel:0913237302" data-ga="click_hotline" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition inline-flex items-center space-x-2 shadow-lg shadow-[#1A9900]/30">
              <i class="fa-solid fa-phone-volume"></i>
              <span>Hotline Kỹ Sư: 0913.237.302</span>
            </a>
            <a href="https://zalo.me/0913237302" target="_blank" rel="noopener noreferrer" class="border border-white/40 hover:border-[#5eb74c] hover:text-[#5eb74c] text-white font-bold text-xs uppercase tracking-wider px-6 py-4 transition inline-flex items-center space-x-2">
              <i class="fa-solid fa-comment-dots text-sm"></i>
              <span>Chat Zalo Hỏi Đáp</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/xxx_home-bg_xxx.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Chưa tìm thấy câu trả lời cho vấn đề của Quý đơn vị?</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Gửi câu hỏi trực tiếp — đội ngũ kỹ thuật và chuyên gia của Hương Sơn sẽ tư vấn giải pháp phù hợp nhất.</p>
      </div>
      <div class="flex flex-wrap items-center gap-4 flex-shrink-0">
        <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Gửi câu hỏi tư vấn</a>
        <a href="/giai-phap/" class="border border-gray-500 hover:border-[#1A9900] hover:text-[#1A9900] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem các giải pháp</a>
        <a href="tel:0911138583" data-ga="click_hotline" class="text-white font-bold text-sm hover:text-[#1A9900] transition">
          <i class="fa-solid fa-phone text-[#1A9900] mr-2"></i>091.113.8583
        </a>
      </div>
    </div>
  </section>
@endsection
