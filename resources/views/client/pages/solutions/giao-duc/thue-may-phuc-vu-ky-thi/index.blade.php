@extends('client.layouts.app')

@section('title', "Cho Thuê Máy In Phục Vụ Kỳ Thi Tuyển Sinh & THPT Quốc Gia | Hương Sơn")
@section('meta_description', "Gói thuê máy in siêu tốc Duplo ngắn hạn phục vụ kỳ thi tuyển sinh vào 10 và thi tốt nghiệp THPT: Vận chuyển, lắp đặt phòng cách ly, kỹ sư trực 24/7 và máy dự phòng N+1.")
@section('canonical', "https://huongsonco.com.vn/giai-phap/giao-duc/thue-may-phuc-vu-ky-thi/")
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
        "name": "Giải pháp",
        "item": "https://huongsonco.com.vn/giai-phap/"
      },
      {
        "@@type": "ListItem",
        "position": 3,
        "name": "Giải pháp thiết bị & in ấn cho ngành Giáo dục",
        "item": "https://huongsonco.com.vn/giai-phap/giao-duc/"
      },
      {
        "@@type": "ListItem",
        "position": 4,
        "name": "Dịch Vụ Cho Thuê Máy In Nhân Bản Siêu Tốc Phục Vụ Kỳ Thi Tuyển Sinh & THPT",
        "item": "https://huongsonco.com.vn/giai-phap/giao-duc/thue-may-phuc-vu-ky-thi/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "Service",
    "@@id": "https://huongsonco.com.vn/giai-phap/giao-duc/thue-may-phuc-vu-ky-thi/#service",
    "name": "Thuê máy in nhân bản phục vụ kỳ thi",
    "serviceType": "Dịch vụ cho thuê thiết bị in sao đề thi",
    "description": "Hương Sơn cung cấp gói dịch vụ cho thuê máy in nhân bản siêu tốc Duplo trọn gói theo từng kỳ thi của Sở GD&ĐT và các trường THPT. Cam kết an toàn tuyệt đối, không kẹt giấy, bảo mật cách ly 3 vòng.",
    "provider": {
      "@@id": "https://huongsonco.com.vn/#organization"
    },
    "areaServed": {
      "@@type": "Country",
      "name": "Việt Nam"
    },
    "url": "https://huongsonco.com.vn/giai-phap/giao-duc/thue-may-phuc-vu-ky-thi/",
    "audience": [
      {
        "@@type": "Audience",
        "audienceType": "Sở Giáo dục và Đào tạo"
      },
      {
        "@@type": "Audience",
        "audienceType": "Hội đồng in sao đề thi"
      },
      {
        "@@type": "Audience",
        "audienceType": "Trường THPT"
      },
      {
        "@@type": "Audience",
        "audienceType": "Trường Đại học"
      }
    ],
    "hasOfferCatalog": {
      "@@type": "OfferCatalog",
      "name": "Thiết bị trong giải pháp",
      "itemListElement": [
        {
          "@@type": "Offer",
          "itemOffered": {
            "@@type": "Product",
            "name": "Duplo DP-X850"
          }
        },
        {
          "@@type": "Offer",
          "itemOffered": {
            "@@type": "Product",
            "name": "Duplo DP-X650"
          }
        },
        {
          "@@type": "Offer",
          "itemOffered": {
            "@@type": "Product",
            "name": "Duplo DFC-122"
          }
        }
      ]
    }
  },
  {
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
      {
        "@@type": "Question",
        "name": "Chi phí thuê máy in phục vụ kỳ thi được tính như thế nào?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Hương Sơn tính trọn gói theo đợt thi (khoảng 7-15 ngày) bao gồm toàn bộ máy in chính, máy dự phòng N+1, máy phối trang, kỹ sư trực và số lượng vật tư thực tế sử dụng."
        }
      },
      {
        "@@type": "Question",
        "name": "Kỹ thuật viên của Hương Sơn có tuân thủ quy chế cách ly của Bộ GD&ĐT không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "100% kỹ thuật viên tham gia đều có lý lịch tư pháp rõ ràng, chấp hành nghiêm túc quy chế cách ly 3 vòng độc lập của PA03 và Bộ GD&ĐT."
        }
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "HowTo",
    "name": "Quy trình triển khai: Thuê máy in nhân bản phục vụ kỳ thi",
    "description": "Hương Sơn cung cấp gói dịch vụ cho thuê máy in nhân bản siêu tốc Duplo trọn gói theo từng kỳ thi của Sở GD&ĐT và các trường THPT. Cam kết an toàn tuyệt đối, không kẹt giấy, bảo mật cách ly 3 vòng.",
    "step": [
      {
        "@@type": "HowToStep",
        "position": 1,
        "name": "Khảo sát & Lập dự toán",
        "text": "Tính toán định mức Master và mực in theo tổng số thí sinh."
      },
      {
        "@@type": "HowToStep",
        "position": 2,
        "name": "Kiểm định PDI 20 tiêu chuẩn",
        "text": "Chạy thử tải 10.000 bản trước khi bàn giao niêm phong."
      },
      {
        "@@type": "HowToStep",
        "position": 3,
        "name": "Bàn giao & Trực cách ly",
        "text": "Kỹ sư chuyên môn cao cách ly cùng hội đồng thi theo quy chế."
      },
      {
        "@@type": "HowToStep",
        "position": 4,
        "name": "Nghiệm thu & Hoàn trả",
        "text": "Kiểm kê vật tư dư thừa, hoàn tiền 100% cho đơn vị."
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
          </a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <a href="/giai-phap/" class="text-gray-200 hover:text-white transition">Giải pháp</a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <a href="/giai-phap/giao-duc/" class="text-gray-200 hover:text-white transition">Giải pháp thiết bị &amp; in ấn cho ngành Giáo dục</a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <span class="text-[#84e372] font-semibold" aria-current="page">Dịch Vụ Cho Thuê Máy In Nhân Bản Siêu Tốc Phục Vụ Kỳ Thi Tuyển Sinh &amp; THPT</span>
        </nav>
      </div>

      <!-- 2-COLUMN SPLIT HERO SHOWCASE -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
        <!-- LEFT COLUMN: Content & Action (7 cols) -->
        <div class="lg:col-span-7 text-left">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.2em] text-[#5eb74c] mb-2.5">
            <span class="w-2 h-2 rounded-full bg-[#5eb74c] inline-block animate-pulse"></span>
            Hương Sơn Education Exam Service
          </div>
          <h1 class="text-2xl sm:text-[34px] lg:text-[40px] font-extrabold text-white mb-3.5 leading-[1.35] tracking-normal drop-shadow-md">
            Dịch Vụ Cho Thuê Máy In Nhân Bản Siêu Tốc Phục Vụ Kỳ Thi Tuyển Sinh &amp; THPT
          </h1>
          <p class="text-gray-200 text-[14.5px] sm:text-base leading-relaxed mb-6 font-normal max-w-2xl">Gói giải pháp đặc thù từ 7 đến 15 ngày: Trọn gói thiết bị in siêu tốc Duplo ép lạnh, đầy đủ cuộn Master và mực in chính hãng, kỹ sư PDI trực cách ly và máy dự phòng nóng N+1.</p>
          <div class="flex flex-wrap items-center gap-2 sm:gap-2.5 mb-7">
            <div class="inline-flex items-center gap-1.5 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm text-xs"><i class="fa-solid fa-sliders text-[#5eb74c]"></i> <span>Giải pháp may đo theo từng ngành</span></div>
          <div class="inline-flex items-center gap-1.5 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm text-xs"><i class="fa-solid fa-chart-line text-[#ffc107]"></i> <span>Tiết kiệm 25% – 40% chi phí</span></div>
          <div class="inline-flex items-center gap-1.5 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm text-xs"><i class="fa-solid fa-clock-rotate-left text-cyan-400"></i> <span>SLA phản hồi kỹ thuật < 2h</span></div>
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
                <i class="fa-solid fa-bolt text-[#ffc107]"></i>
                <span>130 – 150 bản/phút</span>
              </div>

              <!-- Foreground Product Image (100% Crisp, High Res, Unobscured!) -->
              <div class="pt-6 pb-2 px-2 flex items-center justify-center min-h-[200px] sm:min-h-[230px]">
                <img src="/assets/images/products/duplo-dp-x550.jpg" alt="Dịch Vụ Cho Thuê Máy In Nhân Bản Siêu Tốc Phục Vụ Kỳ Thi Tuyển Sinh &amp; THPT" class="max-h-[190px] sm:max-h-[220px] w-auto object-contain mx-auto drop-shadow-[0_15px_25px_rgba(0,0,0,0.6)] transform group-hover:scale-105 transition-transform duration-500" loading="eager" />
              </div>

              <!-- Bottom Caption Strip & Floating Badge -->
              <div class="pt-3 border-t border-white/15 flex items-center justify-between text-xs text-gray-200">
                <div class="flex items-center gap-1.5 font-medium">
                  <i class="fa-solid fa-circle-check text-[#5eb74c]"></i>
                  <span>Máy in đề thi Duplo Nhật Bản</span>
                </div>
                <span class="bg-[#0d1626]/80 text-[#84e372] text-[10.5px] font-bold px-2 py-0.5 border border-[#5eb74c]/40">
                  Bảo mật 100%
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 border-b border-gray-200 bg-white shadow-xs">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
        
        <div class="flex items-start space-x-3.5">
          <span class="w-10 h-10 rounded-xs bg-[#1A9900]/10 text-[#1A9900] flex items-center justify-center flex-shrink-0 text-base">
            <i class="fa-solid fa-shield-halved"></i>
          </span>
          <div>
            <h4 class="text-[13px] font-bold text-[#181923] uppercase tracking-wide mb-1 leading-snug">100% Máy Mới Chính Hãng</h4>
            <p class="text-[12px] text-gray-600 leading-relaxed">Đầy đủ CO/CQ, nguyên đai nguyên kiện từ Toshiba, Duplo, Konica Minolta.</p>
          </div>
        </div>
        <div class="flex items-start space-x-3.5">
          <span class="w-10 h-10 rounded-xs bg-[#1A9900]/10 text-[#1A9900] flex items-center justify-center flex-shrink-0 text-base">
            <i class="fa-solid fa-clock-rotate-left"></i>
          </span>
          <div>
            <h4 class="text-[13px] font-bold text-[#181923] uppercase tracking-wide mb-1 leading-snug">Phản Hồi ≤ 30p · Có Mặt ≤ 2h</h4>
            <p class="text-[12px] text-gray-600 leading-relaxed">Kỹ sư túc trực hỗ trợ kỹ thuật tận nơi tại Hà Nội &amp; các tỉnh miền Bắc.</p>
          </div>
        </div>
        <div class="flex items-start space-x-3.5">
          <span class="w-10 h-10 rounded-xs bg-[#1A9900]/10 text-[#1A9900] flex items-center justify-center flex-shrink-0 text-base">
            <i class="fa-solid fa-arrows-rotate"></i>
          </span>
          <div>
            <h4 class="text-[13px] font-bold text-[#181923] uppercase tracking-wide mb-1 leading-snug">Đổi Máy Mới Trong 24 Giờ</h4>
            <p class="text-[12px] text-gray-600 leading-relaxed">Khắc phục triệt để sự cố phần cứng, cam kết không làm gián đoạn công việc.</p>
          </div>
        </div>
        <div class="flex items-start space-x-3.5">
          <span class="w-10 h-10 rounded-xs bg-[#1A9900]/10 text-[#1A9900] flex items-center justify-center flex-shrink-0 text-base">
            <i class="fa-solid fa-hand-holding-dollar"></i>
          </span>
          <div>
            <h4 class="text-[13px] font-bold text-[#181923] uppercase tracking-wide mb-1 leading-snug">0đ Chi Phí Linh Kiện &amp; Mực</h4>
            <p class="text-[12px] text-gray-600 leading-relaxed">Trọn gói vật tư tiêu hao, drum, gạt và bảo dưỡng kỹ thuật định kỳ.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 py-14 border-t border-gray-200 first:border-t-0 first:pt-0">
        <div class="lg:col-span-4">
          <div class="flex items-start space-x-4 lg:sticky lg:top-28">
            <span class="w-11 h-11 bg-[#1A9900] text-white font-bold text-[15px] flex items-center justify-center flex-shrink-0">1</span>
            <div>
              <p class="text-[11px] font-bold uppercase tracking-[0.2em] text-[#1A9900] mb-1.5">Problem</p>
              <h2 class="text-[22px] sm:text-[26px] font-bold text-[#181923] leading-tight">Bài toán của đơn vị</h2>
            </div>
          </div>
        </div>
        <div class="lg:col-span-8"><ul class="grid grid-cols-1 md:grid-cols-1 gap-x-10 gap-y-3.5">
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Áp lực thời gian hoàn thành hàng trăm nghìn bản in đề thi trong vài ngày cách ly.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Không thể đầu tư mua đứt máy in siêu tốc công suất lớn chỉ để phục vụ 1-2 đợt thi/năm.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Nguy cơ sự cố hỏng hóc giữa kỳ thi trong khi khu vực cách ly Vòng 1 bị cô lập hoàn toàn.</span>
        </li>
      </ul>
        </div>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 py-14 border-t border-gray-200 first:border-t-0 first:pt-0">
        <div class="lg:col-span-4">
          <div class="flex items-start space-x-4 lg:sticky lg:top-28">
            <span class="w-11 h-11 bg-[#1A9900] text-white font-bold text-[15px] flex items-center justify-center flex-shrink-0">2</span>
            <div>
              <p class="text-[11px] font-bold uppercase tracking-[0.2em] text-[#1A9900] mb-1.5">Solution</p>
              <h2 class="text-[22px] sm:text-[26px] font-bold text-[#181923] leading-tight">Giải pháp Hương Sơn</h2>
            </div>
          </div>
        </div>
        <div class="lg:col-span-8"><p class="text-[15.5px] text-gray-600 leading-[1.85] mb-6">Hương Sơn cung cấp gói dịch vụ chìa khóa trao tay: từ khâu kiểm định PDI máy móc trước khi đưa vào phòng cách ly đến máy dự phòng N+1 và hoàn trả vật tư thừa.</p><ul class="grid grid-cols-1 md:grid-cols-1 gap-x-10 gap-y-3.5">
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Khắc phục triệt để: Áp lực thời gian hoàn thành hàng trăm nghìn bản in đề thi trong vài ngày cách ly.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Khắc phục triệt để: Không thể đầu tư mua đứt máy in siêu tốc công suất lớn chỉ để phục vụ 1-2 đợt thi/năm.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Khắc phục triệt để: Nguy cơ sự cố hỏng hóc giữa kỳ thi trong khi khu vực cách ly Vòng 1 bị cô lập hoàn toàn.</span>
        </li>
      </ul>
        </div>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 py-14 border-t border-gray-200 first:border-t-0 first:pt-0">
        <div class="lg:col-span-4">
          <div class="flex items-start space-x-4 lg:sticky lg:top-28">
            <span class="w-11 h-11 bg-[#1A9900] text-white font-bold text-[15px] flex items-center justify-center flex-shrink-0">3</span>
            <div>
              <p class="text-[11px] font-bold uppercase tracking-[0.2em] text-[#1A9900] mb-1.5">Equipment</p>
              <h2 class="text-[22px] sm:text-[26px] font-bold text-[#181923] leading-tight">Thiết bị trong giải pháp</h2>
            </div>
          </div>
        </div>
        <div class="lg:col-span-8">
      <div class="overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-200 bg-white">
          
          <thead class="bg-[#181924]"><tr><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Nhóm thiết bị</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Vai trò trong giải pháp</th></tr></thead>
          <tbody>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top"><span class="text-[#181923] font-bold">Duplo DP-X850</span></th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Máy in chính — 180 bản/phút, 600x600 dpi nét vi nhiệt</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top"><span class="text-[#181923] font-bold">Duplo DP-X650</span></th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Máy dự phòng N+1 — 165 bản/phút, khay nạp 1.500 tờ</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top"><span class="text-[#181923] font-bold">Duplo DFC-122</span></th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Hoàn thiện đề thi — 12 khay phối trang gập ghim tự động</td></tr>
          </tbody>
        </table>
      </div>
        </div>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 py-14 border-t border-gray-200 first:border-t-0 first:pt-0">
        <div class="lg:col-span-4">
          <div class="flex items-start space-x-4 lg:sticky lg:top-28">
            <span class="w-11 h-11 bg-[#1A9900] text-white font-bold text-[15px] flex items-center justify-center flex-shrink-0">4</span>
            <div>
              <p class="text-[11px] font-bold uppercase tracking-[0.2em] text-[#1A9900] mb-1.5">Implementation</p>
              <h2 class="text-[22px] sm:text-[26px] font-bold text-[#181923] leading-tight">Quy trình triển khai</h2>
            </div>
          </div>
        </div>
        <div class="lg:col-span-8">
      <ol class="mt-2">
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">1</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">01</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Khảo sát &amp; Lập dự toán</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Tính toán định mức Master và mực in theo tổng số thí sinh.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">2</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">02</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Kiểm định PDI 20 tiêu chuẩn</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Chạy thử tải 10.000 bản trước khi bàn giao niêm phong.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">3</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">03</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Bàn giao &amp; Trực cách ly</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Kỹ sư chuyên môn cao cách ly cùng hội đồng thi theo quy chế.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">4</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">04</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Nghiệm thu &amp; Hoàn trả</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Kiểm kê vật tư dư thừa, hoàn tiền 100% cho đơn vị.</p>
        </li>
      </ol>
        </div>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 py-14 border-t border-gray-200 first:border-t-0 first:pt-0">
        <div class="lg:col-span-4">
          <div class="flex items-start space-x-4 lg:sticky lg:top-28">
            <span class="w-11 h-11 bg-[#1A9900] text-white font-bold text-[15px] flex items-center justify-center flex-shrink-0">5</span>
            <div>
              <p class="text-[11px] font-bold uppercase tracking-[0.2em] text-[#1A9900] mb-1.5">Service</p>
              <h2 class="text-[22px] sm:text-[26px] font-bold text-[#181923] leading-tight">Dịch vụ và cam kết</h2>
            </div>
          </div>
        </div>
        <div class="lg:col-span-8"><ul class="grid grid-cols-1 md:grid-cols-1 gap-x-10 gap-y-3.5">
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Đội ngũ kỹ sư chính hãng có mặt tận nơi xử lý sự cố trong vòng 2 giờ.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Cung cấp 100% vật tư tiêu hao, linh kiện thay thế chính hãng không phát sinh chi phí.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Sẵn sàng thiết bị dự phòng nóng N+1 đảm bảo không gián đoạn tiến độ công việc.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Bảo hành, bảo trì định kỳ và hỗ trợ kỹ thuật 24/7.</span>
        </li>
      </ul>
        <div class="mt-8">
      <div class="overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-200 bg-white">
          <caption class="text-left px-5 py-4 bg-white border border-b-0 border-gray-200 text-sm font-bold text-[#181923] uppercase tracking-wider">Cam kết dịch vụ (SLA) đề xuất</caption>
          <thead class="bg-[#181924]"><tr><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Cấp độ sự cố</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Tiếp nhận</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Mục tiêu xử lý</th></tr></thead>
          <tbody>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Sự cố cấp 1 (Dừng máy)</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Tức thì (Dưới 3 phút)</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Chuyển sang máy dự phòng nóng N+1 bật nguồn in ngay</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Sự cố cấp 2 (Lỗi bản in)</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">≤ 10 phút</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Thay cụm Master hoặc căn chỉnh áp lực cuộn kéo</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Sự cố cấp 3 (Hết vật tư)</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Sẵn có tại chỗ</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Kho vật tư dự phòng dư 20% đặt trong phòng thi</td></tr>
          </tbody>
        </table>
      </div></div>
        </div>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 py-14 border-t border-gray-200 first:border-t-0 first:pt-0">
        <div class="lg:col-span-4">
          <div class="flex items-start space-x-4 lg:sticky lg:top-28">
            <span class="w-11 h-11 bg-[#1A9900] text-white font-bold text-[15px] flex items-center justify-center flex-shrink-0">6</span>
            <div>
              <p class="text-[11px] font-bold uppercase tracking-[0.2em] text-[#1A9900] mb-1.5">ROI</p>
              <h2 class="text-[22px] sm:text-[26px] font-bold text-[#181923] leading-tight">Hiệu quả đầu tư</h2>
            </div>
          </div>
        </div>
        <div class="lg:col-span-8"><p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">Tối ưu ngân sách đầu tư và chi phí vận hành cho đơn vị.</p><ul class="grid grid-cols-1 md:grid-cols-1 gap-x-10 gap-y-3.5">
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">0đ chi phí đầu tư thiết bị ban đầu, không lo khấu hao tài sản cố định.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Tiết kiệm 30% – 50% chi phí in ấn và số hóa so với vận hành thiết bị rời rạc.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Chuyển đổi hoàn toàn chi phí đầu tư (CapEx) sang chi phí vận hành (OpEx) linh hoạt.</span>
        </li>
      </ul>
        </div>
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
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Chi phí thuê máy in phục vụ kỳ thi được tính như thế nào?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Hương Sơn tính trọn gói theo đợt thi (khoảng 7-15 ngày) bao gồm toàn bộ máy in chính, máy dự phòng N+1, máy phối trang, kỹ sư trực và số lượng vật tư thực tế sử dụng.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Kỹ thuật viên của Hương Sơn có tuân thủ quy chế cách ly của Bộ GD&amp;ĐT không?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">100% kỹ thuật viên tham gia đều có lý lịch tư pháp rõ ràng, chấp hành nghiêm túc quy chế cách ly 3 vòng độc lập của PA03 và Bộ GD&ĐT.</div>
        </details>
      </div>
        </div>
        <div class="lg:col-span-5" id="tu-van">
          
      <div class="bg-white border border-gray-200 p-6 sm:p-9">
        <h2 class="text-xl sm:text-[26px] font-bold text-[#181923] mb-2">Nhận phương án và báo giá</h2>
        <p class="text-[14.5px] text-gray-500 leading-relaxed mb-7">Hương Sơn phản hồi trong giờ làm việc. Thông tin của Quý đơn vị chỉ dùng để tư vấn và báo giá.</p>
        <form class="lead-form" id="sol-thue-may-phuc-vu-ky-thi-form" method="post" action="/api/lead" novalidate>
          
          <input type="hidden" name="page_type" value="solution" />
          <input type="hidden" name="product_model" value="" />
          <input type="hidden" name="solution_slug" value="thue-may-phuc-vu-ky-thi" />
          <input type="hidden" name="source_url" value="" data-autofill="url" />
          <input type="hidden" name="referrer" value="" data-autofill="referrer" />
          <input type="hidden" name="utm_source" value="" data-autofill="utm_source" />
          <input type="hidden" name="utm_medium" value="" data-autofill="utm_medium" />
          <input type="hidden" name="utm_campaign" value="" data-autofill="utm_campaign" />
          <input type="hidden" name="utm_term" value="" data-autofill="utm_term" />
          <input type="hidden" name="utm_content" value="" data-autofill="utm_content" />
          <input type="hidden" name="gclid" value="" data-autofill="gclid" />
          <div class="hidden" aria-hidden="true">
            <label for="f-sol-thue-may-phuc-vu-ky-thi-hp">Bỏ trống ô này</label>
            <input type="text" id="f-sol-thue-may-phuc-vu-ky-thi-hp" name="_hp" tabindex="-1" autocomplete="off" />
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
          <div class="sm:col-span-1">
            <label for="f-ho_ten" class="block text-[13px] font-semibold text-[#181923] mb-2">Họ và tên <span class="text-[#1A9900]">*</span></label>
            <input type="text" id="f-ho_ten" name="ho_ten" required placeholder="Nguyễn Văn A"
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition" />
          </div>
          <div class="sm:col-span-1">
            <label for="f-dien_thoai" class="block text-[13px] font-semibold text-[#181923] mb-2">Điện thoại / Zalo <span class="text-[#1A9900]">*</span></label>
            <input type="tel" id="f-dien_thoai" name="dien_thoai" required placeholder="09xx xxx xxx"
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition" />
          </div>
          <div class="sm:col-span-2">
            <label for="f-don_vi" class="block text-[13px] font-semibold text-[#181923] mb-2">Tên đơn vị / Trường / Doanh nghiệp <span class="text-[#1A9900]">*</span></label>
            <input type="text" id="f-don_vi" name="don_vi" required placeholder="Sở GD&amp;ĐT / Trường THPT / Doanh nghiệp..."
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition" />
          </div>
          <div class="sm:col-span-1">
            <label for="f-tinh_thanh" class="block text-[13px] font-semibold text-[#181923] mb-2">Tỉnh / Thành phố <span class="text-[#1A9900]">*</span></label>
            <input type="text" id="f-tinh_thanh" name="tinh_thanh" required placeholder="Hà Nội, Vĩnh Phúc, Quảng Trị..."
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition" />
          </div>
          <div class="sm:col-span-1">
            <label for="f-email" class="block text-[13px] font-semibold text-[#181923] mb-2">Email nhận báo giá</label>
            <input type="email" id="f-email" name="email" placeholder="ten@donvi.gov.vn"
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition" />
          </div>
          <div class="sm:col-span-2">
            <label for="f-nhu_cau" class="block text-[13px] font-semibold text-[#181923] mb-2">Nhu cầu cần tư vấn chính <span class="text-[#1A9900]">*</span></label>
            <select id="f-nhu_cau" name="nhu_cau" required
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] bg-white focus:outline-none focus:border-[#1A9900] transition"><option value="">— Chọn —</option><option value="EXAM">In sao đề thi – thuê máy in nhân bản siêu tốc</option><option value="PRINT">Thuê máy photocopy / máy in A3 – A4</option><option value="PRO">Quản lý in ấn trọn gói – Managed Print Service</option><option value="DIGITAL">Scan – OCR – số hóa tài liệu</option><option value="MUA">Mua thiết bị mới</option><option value="VATTU">Vật tư – linh kiện – mực Fansipan</option><option value="KYTHUAT">Bảo trì – sửa chữa – dịch vụ kỹ thuật</option><option value="THUMUA">Thu mua máy cũ – đổi máy mới</option></select>
          </div>
          <div class="sm:col-span-2">
            <label for="f-so_luong_thiet_bi" class="block text-[13px] font-semibold text-[#181923] mb-2">Số lượng hoặc thời điểm cần</label>
            <input type="text" id="f-so_luong_thiet_bi" name="so_luong_thiet_bi" placeholder="VD: 01 máy trong tháng này"
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition" />
          </div>
          <div class="sm:col-span-2">
            <label for="f-ghi_chu" class="block text-[13px] font-semibold text-[#181923] mb-2">Mô tả chi tiết nhu cầu <span class="text-gray-400 font-normal">(Không bắt buộc)</span></label>
            <textarea id="f-ghi_chu" name="ghi_chu" rows="3" placeholder="Ghi chú thêm về yêu cầu kỹ thuật, thời gian giao máy hoặc câu hỏi cần giải đáp..."
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition"></textarea>
          </div>
          </div>
          <div class="mt-7 flex flex-col sm:flex-row items-center gap-4">
            <button type="submit" data-ga="generate_lead" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-9 py-4 transition w-full sm:w-auto">
              GỬI YÊU CẦU
            </button>
            <a href="tel:0911138583" data-ga="click_hotline" class="text-[14.5px] font-bold text-[#181923] hover:text-[#1A9900] transition">
              <i class="fa-solid fa-phone text-[#1A9900] mr-2"></i>Tư vấn trực tiếp: 091.113.8583
            </a>
          </div>
        </form>
      </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/banners/hero_office_solutions_1787899910391.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Cần một phương án cụ thể cho đơn vị của Quý khách?</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Hương Sơn khảo sát nhu cầu, đề xuất cấu hình thiết bị, định mức vật tư và cơ cấu giá để Quý đơn vị đưa vào dự toán.</p>
      </div>
      <div class="flex flex-wrap items-center gap-4 flex-shrink-0">
        <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Yêu cầu báo giá</a>
        <a href="/du-an/" class="border border-gray-500 hover:border-[#1A9900] hover:text-[#1A9900] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem dự án đã triển khai</a>
        <a href="tel:0911138583" data-ga="click_hotline" class="text-white font-bold text-sm hover:text-[#1A9900] transition">
          <i class="fa-solid fa-phone text-[#1A9900] mr-2"></i>091.113.8583
        </a>
      </div>
    </div>
  </section>
@endsection
