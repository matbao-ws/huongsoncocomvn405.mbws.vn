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
    "numberOfItems": 16,
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
      },
      {
        "@@type": "ListItem",
        "position": 7,
        "name": "Cách tính định mức mực in và cuộn Master máy in siêu tốc Duplo cho kỳ thi THPT",
        "url": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/dinh-muc-muc-in-cuon-master-duplo-in-de-thi/"
      },
      {
        "@@type": "ListItem",
        "position": 8,
        "name": "So sánh máy in nhân bản siêu tốc Duplo DP-X550 và DP-X850: Lựa chọn nào tối ưu?",
        "url": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/so-sanh-duplo-dp-x550-va-dp-x850/"
      },
      {
        "@@type": "ListItem",
        "position": 9,
        "name": "Giải pháp máy phối trang và giập ghim Duplo: Tự động hóa đóng tập đề thi và tài liệu",
        "url": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/giai-phap-phoi-trang-gap-ghim-tu-dong-duplo/"
      },
      {
        "@@type": "ListItem",
        "position": 10,
        "name": "Giải pháp cho thuê máy photocopy cho Ngân hàng: Tiêu chuẩn bảo mật dữ liệu & SLA 2h",
        "url": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/giai-phap-cho-thue-may-photocopy-ngan-hang-bao-mat/"
      },
      {
        "@@type": "ListItem",
        "position": 11,
        "name": "Top 5 dòng máy photocopy cho thuê được các doanh nghiệp lựa chọn nhiều nhất 2026",
        "url": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/top-may-photocopy-van-phong-cho-thue-chay-nhat/"
      },
      {
        "@@type": "ListItem",
        "position": 12,
        "name": "So sánh máy scan Ricoh fi-8170 và Ricoh fi-8270: Khi nào cần thêm mặt kính phẳng Flatbed?",
        "url": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/so-sanh-may-scan-ricoh-fi-8170-va-fi-8270/"
      },
      {
        "@@type": "ListItem",
        "position": 13,
        "name": "Hướng dẫn số hóa sổ điểm và học bạ điện tử trường học theo chuẩn Bộ GD&ĐT",
        "url": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/so-hoa-hoc-ba-dien-tu-thpt-chuan-moet/"
      },
      {
        "@@type": "ListItem",
        "position": 14,
        "name": "Đánh giá chất lượng mực in FANSIPAN công nghệ Nhật Bản: Tiết kiệm 40% chi phí bản in",
        "url": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/muc-in-fansipan-cong-nghe-nhat-ban-danh-gia/"
      },
      {
        "@@type": "ListItem",
        "position": 15,
        "name": "5 cách chống ẩm và khắc phục lỗi kẹt giấy máy photocopy trong mùa nồm miền Bắc",
        "url": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/khac-phuc-loi-may-photocopy-mua-nom-am/"
      },
      {
        "@@type": "ListItem",
        "position": 16,
        "name": "Bảng tra cứu mã mực in và cuộn Master cho tất cả các dòng máy in siêu tốc Duplo",
        "url": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/bang-tra-ma-muc-master-may-in-duplo-toan-tap/"
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
          </a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <a href="/ve-huong-son/" class="text-gray-200 hover:text-white transition">Về Hương Sơn</a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <span class="text-[#84e372] font-semibold" aria-current="page">Kiến thức</span>
        </nav>
      </div>

      <!-- 2-COLUMN SPLIT HERO SHOWCASE -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
        <!-- LEFT COLUMN: Content & Action (7 cols) -->
        <div class="lg:col-span-7 text-left">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.2em] text-[#5eb74c] mb-2.5">
            <span class="w-2 h-2 rounded-full bg-[#5eb74c] inline-block animate-pulse"></span>
            Trung tâm kiến thức chuyên sâu
          </div>
          <h1 class="text-2xl sm:text-[34px] lg:text-[40px] font-extrabold text-white mb-3.5 leading-[1.35] tracking-normal drop-shadow-md">
            Cẩm nang thiết bị, in ấn &amp; số hóa tài liệu
          </h1>
          <p class="text-gray-200 text-[14.5px] sm:text-base leading-relaxed mb-6 font-normal max-w-2xl">Tổng hợp kinh nghiệm thực chiến 16+ năm, bảng so sánh chi tiết và phân tích chi phí TCO giúp Quý khách ra quyết định chính xác nhất khi đầu tư hoặc thuê thiết bị.</p>
          <div class="flex flex-wrap items-center gap-2 sm:gap-2.5 mb-7">
            <div class="inline-flex items-center gap-1.5 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm text-xs"><i class="fa-solid fa-calendar-check text-[#5eb74c]"></i> <span>Thành lập từ 2008 (16+ năm uy tín)</span></div>
          <div class="inline-flex items-center gap-1.5 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm text-xs"><i class="fa-solid fa-certificate text-[#ffc107]"></i> <span>Đối tác phân phối Ricoh, Toshiba, Duplo</span></div>
          <div class="inline-flex items-center gap-1.5 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm text-xs"><i class="fa-solid fa-location-dot text-cyan-400"></i> <span>Showroom &amp; Kho máy tại Hà Nội</span></div>
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
        <div class="lg:col-span-5 relative">
          <div class="relative mx-auto max-w-[420px] lg:max-w-none">
            <div class="absolute -inset-2 bg-gradient-to-tr from-[#1A9900]/25 to-blue-500/20 rounded-2xl blur-xl opacity-70 pointer-events-none"></div>
            <div class="relative bg-gradient-to-b from-white/[0.12] to-white/[0.04] border border-white/20 p-5 sm:p-6 backdrop-blur-xl shadow-2xl overflow-hidden group">
              <!-- Top Floating Badge -->
              <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 shadow-md flex items-center gap-1.5 border border-white/20 z-20">
                <i class="fa-solid fa-building text-[#5eb74c]"></i>
                <span>Thành lập từ 2008</span>
              </div>

              <!-- Foreground Product Image (100% Crisp, High Res, Unobscured!) -->
              <div class="pt-6 pb-2 px-2 flex items-center justify-center min-h-[200px] sm:min-h-[230px]">
                <img src="/assets/images/banners/hero_office_solutions_1787899910391.jpg" alt="Cẩm nang thiết bị, in ấn &amp; số hóa tài liệu" class="max-h-[190px] sm:max-h-[220px] w-auto object-contain mx-auto drop-shadow-[0_15px_25px_rgba(0,0,0,0.6)] transform group-hover:scale-105 transition-transform duration-500" loading="eager" />
              </div>

              <!-- Bottom Caption Strip & Floating Badge -->
              <div class="pt-3 border-t border-white/15 flex items-center justify-between text-xs text-gray-200">
                <div class="flex items-center gap-1.5 font-medium">
                  <i class="fa-solid fa-circle-check text-[#5eb74c]"></i>
                  <span>Trụ sở & Showroom tại Hà Nội</span>
                </div>
                <span class="bg-[#0d1626]/80 text-[#84e372] text-[10.5px] font-bold px-2 py-0.5 border border-[#5eb74c]/40">
                  Uy tín 16 năm
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
            <p class="text-[15px] text-[#181923] leading-relaxed">Trung tâm tri thức B2B gồm 16 cẩm nang trụ cột phân tích chuyên sâu về máy photocopy, máy in nhân bản siêu tốc Duplo, máy scan số hóa tài liệu lưu trữ và vật tư FANSIPAN.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Dành cho ai</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Lãnh đạo đơn vị, phòng Kế hoạch – Tài chính, Ban chỉ đạo kỳ thi Sở GD&ĐT, khối CNTT & Vận hành Ngân hàng và các trường học, bệnh viện, doanh nghiệp.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Giá trị mang lại</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Hiểu rõ bài toán chi phí TCO thực tế, tối ưu ngân sách in ấn, chuẩn hóa quy trình in sao đề thi bảo mật tuyệt đối và số hóa hồ sơ theo đúng Thông tư 02/2019/TT-BNV.</p>
          </div>
      </div>
    </div>
  </section>

  <section class="py-6 bg-gray-50 border-b border-gray-200">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between flex-wrap gap-4">
        <div class="flex items-center gap-2 flex-wrap">
          <span class="text-xs font-bold uppercase tracking-wider text-gray-500 mr-2"><i class="fa-solid fa-filter text-[#1A9900] mr-1"></i>Chủ đề cẩm nang:</span>
          <div class="flex flex-wrap gap-2">
            <span class="px-3.5 py-1.5 bg-[#1A9900] text-white text-xs font-bold rounded-xs cursor-pointer shadow-xs">Tất cả (16)</span>
            <span class="px-3.5 py-1.5 bg-white border border-gray-200 text-gray-700 text-xs font-semibold rounded-xs">Photocopy &amp; Thuê máy (5)</span>
            <span class="px-3.5 py-1.5 bg-white border border-gray-200 text-gray-700 text-xs font-semibold rounded-xs">In siêu tốc &amp; Đề thi (5)</span>
            <span class="px-3.5 py-1.5 bg-white border border-gray-200 text-gray-700 text-xs font-semibold rounded-xs">Scan &amp; Số hóa (3)</span>
            <span class="px-3.5 py-1.5 bg-white border border-gray-200 text-gray-700 text-xs font-semibold rounded-xs">Mực in &amp; FANSIPAN (3)</span>
          </div>
        </div>
        <div class="text-xs text-gray-500 font-medium hidden sm:block">
          <i class="fa-solid fa-check-double text-[#1A9900] mr-1"></i>Cập nhật mới nhất: 2026
        </div>
      </div>
    </div>
  </section>
    
  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8"><div class="text-center max-w-3xl mx-auto mb-12"><span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-2">Tri thức chuyên gia</span><h2 class="text-2xl sm:text-[34px] font-bold text-gray-900 leading-tight mb-4">Toàn bộ 16 bài viết cẩm nang chuyên sâu</h2><p class="text-gray-600 text-sm sm:text-base leading-relaxed">Hình ảnh thiết bị thực tế, bảng so sánh trực quan và dữ liệu kỹ thuật được đội ngũ kỹ sư Hương Sơn biên soạn chuẩn xác.</p></div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/hero-office.jpg" alt="Nên thuê hay mua máy photocopy cho doanh nghiệp, trường học? Phân tích chi phí &amp; hiệu quả" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Cẩm nang tư vấn</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/nen-thue-hay-mua-may-photocopy/">Nên thuê hay mua máy photocopy cho doanh nghiệp, trường học? Phân tích chi phí &amp; hiệu quả</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Bài toán so sánh chi tiết giữa việc đầu tư mua đứt và giải pháp thuê máy photocopy trọn gói: phân tích dòng tiền, chi phí mực in, khấu hao và rủi ro k…</p>
            <a href="/ve-huong-son/kien-thuc/nen-thue-hay-mua-may-photocopy/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (6 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/banners/highspeed_scanner_1787905830483.jpg" alt="Hướng dẫn lựa chọn máy scan số hóa tài liệu cho cơ quan, trường học &amp; ngân hàng" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Cẩm nang thiết bị</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/huong-dan-chon-may-scan-so-hoa-tai-lieu/">Hướng dẫn lựa chọn máy scan số hóa tài liệu cho cơ quan, trường học &amp; ngân hàng</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Tổng hợp kinh nghiệm chọn mua máy quét (scanner) chuyên dụng phục vụ công tác số hóa hồ sơ lưu trữ: phân biệt các dòng máy scan ADF, Flatbed, máy scan…</p>
            <a href="/ve-huong-son/kien-thuc/huong-dan-chon-may-scan-so-hoa-tai-lieu/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (7 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/hero-education.jpg" alt="Tiêu chuẩn lựa chọn và vận hành máy in sao đề thi tốt nghiệp THPT an toàn, bảo mật" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Cẩm nang giáo dục</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/tieu-chuan-may-in-de-thi-thpt/">Tiêu chuẩn lựa chọn và vận hành máy in sao đề thi tốt nghiệp THPT an toàn, bảo mật</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Tổng hợp các tiêu chuẩn kỹ thuật nghiêm ngặt trong công tác in sao đề thi tuyển sinh và tốt nghiệp THPT: yêu cầu tốc độ, độ sắc nét, phương án dự phòn…</p>
            <a href="/ve-huong-son/kien-thuc/tieu-chuan-may-in-de-thi-thpt/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (6 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/toshiba-e-studio-4528a.jpg" alt="So sánh máy photocopy đa chức năng Toshiba và Konica Minolta: Nên chọn hãng nào?" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">So sánh thiết bị</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/so-sanh-may-photocopy-toshiba-va-konica-minolta/">So sánh máy photocopy đa chức năng Toshiba và Konica Minolta: Nên chọn hãng nào?</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Đặt lên bàn cân hai thương hiệu máy photocopy văn phòng phổ biến nhất tại Việt Nam: Toshiba e-STUDIO nổi tiếng về độ bền, tiết kiệm mực vs Konica Mino…</p>
            <a href="/ve-huong-son/kien-thuc/so-sanh-may-photocopy-toshiba-va-konica-minolta/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (5 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/muc-fansipan-toner.jpg" alt="Cách chọn mực in và linh kiện tiêu hao máy photocopy chính hãng tránh hỏng trống gạt" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Kỹ thuật &amp; Vật tư</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/cach-chon-muc-in-linh-kien-may-photocopy-chinh-hang/">Cách chọn mực in và linh kiện tiêu hao máy photocopy chính hãng tránh hỏng trống gạt</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Chia sẻ kinh nghiệm nhận biết và chọn mua mực in, cuộn Master và linh kiện tiêu hao chính hãng: bí quyết giúp kéo dài tuổi thọ trống drum, tiết kiệm c…</p>
            <a href="/ve-huong-son/kien-thuc/cach-chon-muc-in-linh-kien-may-photocopy-chinh-hang/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (5 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/hero-projects.jpg" alt="Quy trình số hóa hồ sơ, tài liệu lưu trữ cơ quan Nhà nước và trường học từ A đến Z" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Chuyển đổi số</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/quy-trinh-so-hoa-tai-lieu-luu-tru/">Quy trình số hóa hồ sơ, tài liệu lưu trữ cơ quan Nhà nước và trường học từ A đến Z</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Cẩm nang hướng dẫn đầy đủ 6 bước chuẩn hóa trong quy trình số hóa tài liệu lưu trữ theo Thông tư 02/2019/TT-BNV: tiêu chuẩn kỹ thuật quét ảnh, phần mề…</p>
            <a href="/ve-huong-son/kien-thuc/quy-trinh-so-hoa-tai-lieu-luu-tru/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (6 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/95-bang-tra-ma-muc-master-may-in-duplo.jpg" alt="Cách tính định mức mực in và cuộn Master máy in siêu tốc Duplo cho kỳ thi THPT" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Cẩm nang giáo dục</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/dinh-muc-muc-in-cuon-master-duplo-in-de-thi/">Cách tính định mức mực in và cuộn Master máy in siêu tốc Duplo cho kỳ thi THPT</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Công thức và bảng tính mẫu dự toán vật tư tiêu hao cho Hội đồng in sao đề thi: cách tính chính xác số lượng cuộn Master, số bình mực Duplo và phương á…</p>
            <a href="/ve-huong-son/kien-thuc/dinh-muc-muc-in-cuon-master-duplo-in-de-thi/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (7 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/duplo-dp-x550.jpg" alt="So sánh máy in nhân bản siêu tốc Duplo DP-X550 và DP-X850: Lựa chọn nào tối ưu?" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">So sánh thiết bị</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/so-sanh-duplo-dp-x550-va-dp-x850/">So sánh máy in nhân bản siêu tốc Duplo DP-X550 và DP-X850: Lựa chọn nào tối ưu?</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Phân tích chi tiết sự khác biệt giữa Duplo DP-X550 và DP-X850: bảng so sánh thông số kỹ thuật, khả năng xử lý khổ giấy A3/B4, tốc độ in ấn thực tế và …</p>
            <a href="/ve-huong-son/kien-thuc/so-sanh-duplo-dp-x550-va-dp-x850/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (6 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/40-may-phoi-trang-dfc-120.png" alt="Giải pháp máy phối trang và giập ghim Duplo: Tự động hóa đóng tập đề thi và tài liệu" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Thiết bị sau in</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/giai-phap-phoi-trang-gap-ghim-tu-dong-duplo/">Giải pháp máy phối trang và giập ghim Duplo: Tự động hóa đóng tập đề thi và tài liệu</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Giới thiệu giải pháp thiết bị hoàn thiện sau in chuyên nghiệp của Duplo: công nghệ phối trang ma sát thông minh, cơ chế kiểm soát lỗi trang kép và ứng…</p>
            <a href="/ve-huong-son/kien-thuc/giai-phap-phoi-trang-gap-ghim-tu-dong-duplo/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (6 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/vietcombank-2024.jpg" alt="Giải pháp cho thuê máy photocopy cho Ngân hàng: Tiêu chuẩn bảo mật dữ liệu &amp; SLA 2h" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Khối Ngân hàng</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/giai-phap-cho-thue-may-photocopy-ngan-hang-bao-mat/">Giải pháp cho thuê máy photocopy cho Ngân hàng: Tiêu chuẩn bảo mật dữ liệu &amp; SLA 2h</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Phân tích các yêu cầu kỹ thuật và an toàn thông tin bắt buộc khi triển khai dịch vụ in ấn cho các phòng giao dịch ngân hàng: kinh nghiệm từ dự án triể…</p>
            <a href="/ve-huong-son/kien-thuc/giai-phap-cho-thue-may-photocopy-ngan-hang-bao-mat/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (7 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/banners/toshiba_mfp_product_1787905812744.jpg" alt="Top 5 dòng máy photocopy cho thuê được các doanh nghiệp lựa chọn nhiều nhất 2026" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Cẩm nang tư vấn</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/top-may-photocopy-van-phong-cho-thue-chay-nhat/">Top 5 dòng máy photocopy cho thuê được các doanh nghiệp lựa chọn nhiều nhất 2026</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Bảng tổng hợp và so sánh chi tiết ưu nhược điểm của 5 dòng máy photocopy khổ A3 được các công ty và trường học lựa chọn thuê nhiều nhất: phân tích cấu…</p>
            <a href="/ve-huong-son/kien-thuc/top-may-photocopy-van-phong-cho-thue-chay-nhat/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (6 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/ricoh-fi-8170.png" alt="So sánh máy scan Ricoh fi-8170 và Ricoh fi-8270: Khi nào cần thêm mặt kính phẳng Flatbed?" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">So sánh thiết bị</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/so-sanh-may-scan-ricoh-fi-8170-va-fi-8270/">So sánh máy scan Ricoh fi-8170 và Ricoh fi-8270: Khi nào cần thêm mặt kính phẳng Flatbed?</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Phân tích kỹ lưỡng hai model máy scan số hóa tài liệu cao cấp nhất của Ricoh: sự cần thiết của mặt kính phẳng Flatbed và lời khuyên lựa chọn đúng đắn …</p>
            <a href="/ve-huong-son/kien-thuc/so-sanh-may-scan-ricoh-fi-8170-va-fi-8270/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (6 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/banners/hero_edu_tech_1787899932385.jpg" alt="Hướng dẫn số hóa sổ điểm và học bạ điện tử trường học theo chuẩn Bộ GD&amp;ĐT" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Chuyển đổi số</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/so-hoa-hoc-ba-dien-tu-thpt-chuan-moet/">Hướng dẫn số hóa sổ điểm và học bạ điện tử trường học theo chuẩn Bộ GD&amp;ĐT</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Cẩm nang hướng dẫn chi tiết quy trình số hóa hồ sơ học sinh, học bạ điện tử và sổ gọi tên ghi điểm phục vụ công tác chuyển đổi số toàn diện ngành giáo…</p>
            <a href="/ve-huong-son/kien-thuc/so-hoa-hoc-ba-dien-tu-thpt-chuan-moet/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (7 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/muc-fansipan-toner.jpg" alt="Đánh giá chất lượng mực in FANSIPAN công nghệ Nhật Bản: Tiết kiệm 40% chi phí bản in" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Kỹ thuật &amp; Vật tư</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/muc-in-fansipan-cong-nghe-nhat-ban-danh-gia/">Đánh giá chất lượng mực in FANSIPAN công nghệ Nhật Bản: Tiết kiệm 40% chi phí bản in</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Báo cáo thử nghiệm kỹ thuật và phân tích hiệu quả kinh tế của dòng mực in độc quyền FANSIPAN trên các dòng máy photocopy Toshiba e-STUDIO và Ricoh Afi…</p>
            <a href="/ve-huong-son/kien-thuc/muc-in-fansipan-cong-nghe-nhat-ban-danh-gia/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (6 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/cum-say-fuser-roller.jpg" alt="5 cách chống ẩm và khắc phục lỗi kẹt giấy máy photocopy trong mùa nồm miền Bắc" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Kỹ thuật &amp; Vật tư</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/khac-phuc-loi-may-photocopy-mua-nom-am/">5 cách chống ẩm và khắc phục lỗi kẹt giấy máy photocopy trong mùa nồm miền Bắc</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Kinh nghiệm thực chiến từ kỹ sư Hương Sơn giúp các văn phòng, trường học loại bỏ 95% tình trạng kẹt giấy liên tục và nhăn mép bản in khi độ ẩm không k…</p>
            <a href="/ve-huong-son/kien-thuc/khac-phuc-loi-may-photocopy-mua-nom-am/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (6 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
        <article class="border border-gray-200/80 group flex flex-col" style="background-color: rgb(247, 243, 238);">
          <div class="h-52 overflow-hidden"><img src="/assets/images/products/muc-in-master-duplo.jpg" alt="Bảng tra cứu mã mực in và cuộn Master cho tất cả các dòng máy in siêu tốc Duplo" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" /></div>
          <div class="p-6 flex flex-col flex-1">
            <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">Kỹ thuật &amp; Vật tư</span>
            <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
              <a href="/ve-huong-son/kien-thuc/bang-tra-ma-muc-master-may-in-duplo-toan-tap/">Bảng tra cứu mã mực in và cuộn Master cho tất cả các dòng máy in siêu tốc Duplo</a>
            </h3>
            <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">Tài liệu kỹ thuật tổng hợp toàn bộ mã vật tư tiêu hao của thương hiệu Duplo Nhật Bản: giúp cán bộ quản lý thiết bị và ban in sao đề thi tra cứu nhanh …</p>
            <a href="/ve-huong-son/kien-thuc/bang-tra-ma-muc-master-may-in-duplo-toan-tap/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
              <span>Đọc bài viết (6 phút đọc)</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/banners/hero_office_solutions_1787899910391.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Chưa tìm thấy câu trả lời cho vấn đề của Quý đơn vị?</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Gửi câu hỏi trực tiếp hoặc yêu cầu khảo sát hiện trạng — Đội ngũ kỹ thuật Hương Sơn sẵn sàng hỗ trợ 24/7.</p>
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
