@extends('client.layouts.app')

@section('title', "Dịch vụ scan, OCR và số hóa hồ sơ Sở Giáo dục – DIGITAL DOCUMENT | Hương Sơn")
@section('meta_description', "Dịch vụ scan tốc độ cao, OCR và số hóa hồ sơ, tài liệu cho Sở GD&ĐT, trường học, phòng đào tạo, văn thư và thư viện – từ tiếp nhận hồ sơ giấy đến bàn giao dữ liệu số.")
@section('canonical', "https://huongsonco.com.vn/giai-phap/giao-duc/so-hoa-ho-so-truong-hoc/")
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
        "name": "Scan, OCR và số hóa hồ sơ cho Sở GD&ĐT và trường học",
        "item": "https://huongsonco.com.vn/giai-phap/giao-duc/so-hoa-ho-so-truong-hoc/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "Service",
    "@@id": "https://huongsonco.com.vn/giai-phap/giao-duc/so-hoa-ho-so-truong-hoc/#service",
    "name": "Dịch vụ scan, OCR và số hóa hồ sơ cho Sở GD&ĐT và trường học",
    "serviceType": "Dịch vụ scan, OCR và số hóa tài liệu ngành Giáo dục",
    "description": "Số hóa hồ sơ ngành Giáo dục theo quy trình có kiểm soát chất lượng: tiếp nhận và kiểm đếm, phân loại, scan tốc độ cao, OCR, đặt tên và metadata, kiểm tra và bàn giao dữ liệu kèm biên bản.",
    "provider": {
      "@@id": "https://huongsonco.com.vn/#organization"
    },
    "areaServed": {
      "@@type": "Country",
      "name": "Việt Nam"
    },
    "url": "https://huongsonco.com.vn/giai-phap/giao-duc/so-hoa-ho-so-truong-hoc/",
    "audience": [
      {
        "@@type": "Audience",
        "audienceType": "Sở Giáo dục và Đào tạo"
      },
      {
        "@@type": "Audience",
        "audienceType": "Đơn vị quản lý văn bằng – chứng chỉ"
      },
      {
        "@@type": "Audience",
        "audienceType": "Phòng chuyên môn"
      },
      {
        "@@type": "Audience",
        "audienceType": "Trường THPT"
      },
      {
        "@@type": "Audience",
        "audienceType": "Trung tâm giáo dục"
      },
      {
        "@@type": "Audience",
        "audienceType": "Thư viện"
      },
      {
        "@@type": "Audience",
        "audienceType": "Bộ phận văn thư – lưu trữ"
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
            "name": "Máy scan tốc độ cao"
          }
        },
        {
          "@@type": "Offer",
          "itemOffered": {
            "@@type": "Product",
            "name": "Máy photocopy – máy đa chức năng có chức năng scan"
          }
        },
        {
          "@@type": "Offer",
          "itemOffered": {
            "@@type": "Product",
            "name": "Thiết bị văn phòng phụ trợ"
          }
        },
        {
          "@@type": "Offer",
          "itemOffered": {
            "@@type": "Product",
            "name": "Vật tư – linh kiện máy scan"
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
        "name": "Hương Sơn nhận số hóa tại đơn vị hay đưa hồ sơ đi?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Cả hai phương án đều thực hiện được, nhưng địa điểm luôn do đơn vị quyết định và ghi rõ trong hợp đồng. Với hồ sơ có yêu cầu bảo mật cao, phương án thực hiện tại đơn vị thường được lựa chọn."
        }
      },
      {
        "@@type": "Question",
        "name": "Chi phí số hóa tính theo gì?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Thường tính theo số trang đã scan, có phân biệt theo khổ giấy, một mặt hoặc hai mặt, tình trạng tài liệu, có OCR hay không và số trường metadata cần nhập. Đơn giá được chốt sau khảo sát khối lượng thực tế."
        }
      },
      {
        "@@type": "Question",
        "name": "OCR có bắt buộc không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Không. OCR chỉ thực hiện khi phạm vi dịch vụ yêu cầu. Nếu đơn vị chỉ cần bản ảnh để lưu trữ và tra cứu theo tên hồ sơ thì không cần OCR; nếu cần tìm kiếm theo nội dung thì nên có."
        }
      },
      {
        "@@type": "Question",
        "name": "Dữ liệu được bàn giao ở định dạng nào?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Theo yêu cầu của đơn vị, thường là PDF hoặc PDF có lớp văn bản khi có OCR, kèm cấu trúc thư mục và quy ước đặt tên đã được phê duyệt trước khi bắt đầu."
        }
      },
      {
        "@@type": "Question",
        "name": "Làm sao biết dữ liệu bàn giao là đủ và đúng?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Khối lượng được kiểm đếm và lập biên bản ở cả hai đầu – khi tiếp nhận và khi bàn giao. Trước bàn giao, Hương Sơn soát tỷ lệ lỗi, thiếu trang và lệch trang; phần không đạt được scan lại."
        }
      },
      {
        "@@type": "Question",
        "name": "Đơn vị chỉ muốn mua máy scan và tự làm thì có được không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Được. Hương Sơn cung cấp máy scan tốc độ cao kèm tư vấn chọn dòng máy theo khối lượng và loại tài liệu, hướng dẫn thiết lập quy trình scan và bảo trì thiết bị."
        }
      },
      {
        "@@type": "Question",
        "name": "Hương Sơn có tự phát triển phần mềm quản lý tài liệu không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Không. Hương Sơn đóng vai trò tích hợp giải pháp: khảo sát, thiết bị, triển khai, quy trình, đào tạo và vận hành; phần OCR, hệ thống quản lý tài liệu và lưu trữ do đối tác chuyên môn cung cấp. Cách làm này giúp đơn vị chọn được công cụ phù hợp thay vì bị bó vào một sản phẩm."
        }
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "HowTo",
    "name": "Quy trình triển khai: Dịch vụ scan, OCR và số hóa hồ sơ cho Sở GD&ĐT và trường học",
    "description": "Số hóa hồ sơ ngành Giáo dục theo quy trình có kiểm soát chất lượng: tiếp nhận và kiểm đếm, phân loại, scan tốc độ cao, OCR, đặt tên và metadata, kiểm tra và bàn giao dữ liệu kèm biên bản.",
    "step": [
      {
        "@@type": "HowToStep",
        "position": 1,
        "name": "Khảo sát khối lượng và loại tài liệu",
        "text": "Xác định số hồ sơ, số trang, khổ giấy, tình trạng tài liệu và mức độ ưu tiên của từng nhóm hồ sơ."
      },
      {
        "@@type": "HowToStep",
        "position": 2,
        "name": "Chốt phạm vi và quy ước dữ liệu",
        "text": "Thống nhất định dạng file, độ phân giải, có OCR hay không, quy ước đặt tên, cấu trúc thư mục và các trường metadata."
      },
      {
        "@@type": "HowToStep",
        "position": 3,
        "name": "Chọn phương án thiết bị và nhân sự",
        "text": "Chọn dòng máy scan phù hợp, xác định số ca làm việc, địa điểm thực hiện – tại đơn vị hoặc tại nơi được đơn vị chấp thuận."
      },
      {
        "@@type": "HowToStep",
        "position": 4,
        "name": "Tiếp nhận và kiểm đếm",
        "text": "Kiểm đếm hồ sơ và số trang, lập biên bản tiếp nhận trước khi bắt đầu."
      },
      {
        "@@type": "HowToStep",
        "position": 5,
        "name": "Scan – OCR – chuẩn hóa",
        "text": "Chuẩn bị tài liệu, scan, kiểm soát chất lượng, OCR khi có yêu cầu, đặt tên và nhập metadata."
      },
      {
        "@@type": "HowToStep",
        "position": 6,
        "name": "Kiểm tra chất lượng",
        "text": "Soát tỷ lệ lỗi, thiếu trang, lệch trang; scan lại phần chưa đạt."
      },
      {
        "@@type": "HowToStep",
        "position": 7,
        "name": "Bàn giao và hỗ trợ",
        "text": "Bàn giao dữ liệu kèm biên bản số lượng và chất lượng, hướng dẫn vận hành, hỗ trợ và bảo trì sau triển khai."
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
          </a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <a href="/giai-phap/" class="text-gray-200 hover:text-white transition">Giải pháp</a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <a href="/giai-phap/giao-duc/" class="text-gray-200 hover:text-white transition">Giải pháp thiết bị &amp; in ấn cho ngành Giáo dục</a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <span class="text-[#84e372] font-semibold" aria-current="page">Scan, OCR và số hóa hồ sơ cho Sở GD&amp;ĐT và trường học</span>
        </nav>
      </div>

      <!-- 2-COLUMN SPLIT HERO SHOWCASE -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
        <!-- LEFT COLUMN: Content & Action (7 cols) -->
        <div class="lg:col-span-7 text-left">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.2em] text-[#5eb74c] mb-2.5">
            <span class="w-2 h-2 rounded-full bg-[#5eb74c] inline-block animate-pulse"></span>
            DIGITAL DOCUMENT
          </div>
          <h1 class="text-2xl sm:text-[34px] lg:text-[40px] font-extrabold text-white mb-3.5 leading-[1.35] tracking-normal drop-shadow-md">
            Scan, OCR và số hóa hồ sơ cho Sở GD&amp;ĐT và trường học
          </h1>
          <p class="text-gray-200 text-[14.5px] sm:text-base leading-relaxed mb-6 font-normal max-w-2xl">Hương Sơn cung cấp dịch vụ scan, OCR và số hóa hồ sơ, tài liệu cho Sở GD&amp;ĐT, trường học, phòng đào tạo, văn thư và thư viện; từ tiếp nhận hồ sơ giấy, scan, kiểm tra chất lượng, OCR đến bàn giao dữ liệu số.</p>
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
                <img src="/assets/images/products/duplo-dp-x550.jpg" alt="Scan, OCR và số hóa hồ sơ cho Sở GD&amp;ĐT và trường học" class="max-h-[190px] sm:max-h-[220px] w-auto object-contain mx-auto drop-shadow-[0_15px_25px_rgba(0,0,0,0.6)] transform group-hover:scale-105 transition-transform duration-500" loading="eager" />
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
          <span class="text-[15px] text-gray-600 leading-relaxed">Khối lượng hồ sơ giấy về văn bằng, chứng chỉ, hồ sơ học sinh, hồ sơ giáo viên và tài liệu lưu trữ tăng liên tục.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Tra cứu một hồ sơ cũ mất nhiều thời gian và phụ thuộc vào người nắm cách sắp xếp.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Yêu cầu số hóa dữ liệu văn bằng, chứng chỉ đang được Bộ GD&amp;ĐT triển khai và đôn đốc, tạo áp lực về tiến độ.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Hồ sơ có nhiều dạng khác nhau: A4 và A3, một mặt và hai mặt, giấy mỏng và giấy dày, hồ sơ đã đóng quyển – không thể dùng một cách scan cho mọi loại.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Nếu tự tổ chức scan, đơn vị phải đầu tư thiết bị, bố trí nhân sự và tự chịu rủi ro về chất lượng dữ liệu.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Dữ liệu scan không có quy ước đặt tên và metadata thống nhất thì vẫn không tra cứu được.</span>
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
        <div class="lg:col-span-8"><p class="text-[15.5px] text-gray-600 leading-[1.85] mb-6">Hương Sơn không bán một chiếc máy scan. Hương Sơn nhận cả quy trình số hóa: thiết bị, nhân sự, kiểm soát chất lượng và bàn giao dữ liệu theo quy ước thống nhất – theo mô hình tích hợp giải pháp, phần OCR và hệ thống lưu trữ do đối tác chuyên môn cung cấp.</p><ul class="grid grid-cols-1 md:grid-cols-1 gap-x-10 gap-y-3.5">
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Tiếp nhận: kiểm đếm hồ sơ và số trang, lập biên bản tiếp nhận – hai bên cùng xác nhận khối lượng đầu vào.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Chuẩn bị: phân loại tài liệu, tháo ghim, làm phẳng để scan không bị lỗi trang.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Scan: dùng máy scan tốc độ cao phù hợp từng loại tài liệu, kèm kiểm soát chất lượng ngay trong quá trình scan.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">OCR: nhận dạng ký tự khi phạm vi dịch vụ yêu cầu, giúp dữ liệu tìm kiếm được theo nội dung.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Đặt tên: theo quy ước thống nhất đã được đơn vị phê duyệt trước khi bắt đầu.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Metadata: nhập các trường dữ liệu theo yêu cầu của đơn vị để phục vụ tra cứu và quản lý.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Kiểm tra: soát tỷ lệ lỗi, thiếu trang và lệch trang trước khi bàn giao.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Bàn giao: giao dữ liệu kèm biên bản xác nhận số lượng và chất lượng; hướng dẫn vận hành và hỗ trợ sau triển khai.</span>
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
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top"><a href="/san-pham/may-scan-so-hoa/" class="text-[#181923] hover:text-[#1A9900] transition font-bold">Máy scan tốc độ cao</a></th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Chọn theo khối lượng, khổ giấy và loại tài liệu: máy để bàn, máy theo phòng ban, máy tốc độ cao, máy scan mạng</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top"><a href="/san-pham/photocopy-may-da-chuc-nang/" class="text-[#181923] hover:text-[#1A9900] transition font-bold">Máy photocopy – máy đa chức năng có chức năng scan</a></th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Dùng cho khối lượng vừa và scan phát sinh hằng ngày</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top"><a href="/san-pham/thiet-bi-van-phong-hoi-hop/" class="text-[#181923] hover:text-[#1A9900] transition font-bold">Thiết bị văn phòng phụ trợ</a></th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Workstation và thiết bị hỗ trợ cho khu vực scan</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top"><a href="/san-pham/vat-tu-linh-kien-tieu-hao/" class="text-[#181923] hover:text-[#1A9900] transition font-bold">Vật tư – linh kiện máy scan</a></th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Con lăn, tấm ma sát và vật tư thay thế theo số trang đã scan</td></tr>
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
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 1</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Khảo sát khối lượng và loại tài liệu</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Xác định số hồ sơ, số trang, khổ giấy, tình trạng tài liệu và mức độ ưu tiên của từng nhóm hồ sơ.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">2</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 2</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Chốt phạm vi và quy ước dữ liệu</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Thống nhất định dạng file, độ phân giải, có OCR hay không, quy ước đặt tên, cấu trúc thư mục và các trường metadata.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">3</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 3</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Chọn phương án thiết bị và nhân sự</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Chọn dòng máy scan phù hợp, xác định số ca làm việc, địa điểm thực hiện – tại đơn vị hoặc tại nơi được đơn vị chấp thuận.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">4</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 4</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Tiếp nhận và kiểm đếm</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Kiểm đếm hồ sơ và số trang, lập biên bản tiếp nhận trước khi bắt đầu.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">5</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 5</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Scan – OCR – chuẩn hóa</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Chuẩn bị tài liệu, scan, kiểm soát chất lượng, OCR khi có yêu cầu, đặt tên và nhập metadata.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">6</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 6</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Kiểm tra chất lượng</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Soát tỷ lệ lỗi, thiếu trang, lệch trang; scan lại phần chưa đạt.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">7</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 7</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Bàn giao và hỗ trợ</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Bàn giao dữ liệu kèm biên bản số lượng và chất lượng, hướng dẫn vận hành, hỗ trợ và bảo trì sau triển khai.</p>
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
          <span class="text-[15px] text-gray-600 leading-relaxed">Toàn bộ hồ sơ được kiểm đếm và lập biên bản khi tiếp nhận và khi bàn giao – không có khối lượng nào không được xác nhận.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Quy ước đặt tên và metadata được đơn vị phê duyệt trước khi bắt đầu, không tự quyết trong lúc thực hiện.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Kiểm soát chất lượng theo tỷ lệ lỗi, thiếu trang và lệch trang; phần không đạt được scan lại.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Bảo mật: tài liệu chỉ được xử lý trong phạm vi và địa điểm đơn vị chấp thuận; không sao lưu ngoài phạm vi hợp đồng.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Hướng dẫn vận hành cho nhân sự của đơn vị sau khi bàn giao dữ liệu.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Bảo trì và hỗ trợ thiết bị scan sau triển khai.</span>
        </li>
      </ul>
        <div class="mt-8">
      <div class="overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-200 bg-white">
          <caption class="text-left px-5 py-4 bg-white border border-b-0 border-gray-200 text-sm font-bold text-[#181923] uppercase tracking-wider">Cam kết dịch vụ (SLA) đề xuất</caption>
          <thead class="bg-[#181924]"><tr><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Cấp độ sự cố</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Tiếp nhận</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Mục tiêu xử lý</th></tr></thead>
          <tbody>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Tiến độ</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Theo kế hoạch từng giai đoạn</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Báo cáo khối lượng đã hoàn thành theo kỳ đã thống nhất</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Chất lượng dữ liệu</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Kiểm tra 100% số lượng trang</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Scan lại phần không đạt, không tính thêm phí</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Bảo mật tài liệu</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Cam kết trong hợp đồng</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Tài liệu chỉ xử lý trong phạm vi và địa điểm được đơn vị chấp thuận</td></tr>
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
        <div class="lg:col-span-8"><p class="text-[15.5px] text-gray-600 leading-[1.85] mb-7">Giá trị của số hóa không nằm ở việc có file PDF, mà ở chỗ hồ sơ trở nên tra cứu được, chia sẻ được và không phụ thuộc vào một người biết cách sắp xếp.</p>
      <div class="overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-200 bg-white">
          
          <thead class="bg-[#181924]"><tr><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Hạng mục chi phí</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Phương án mua</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Phương án thuê / dịch vụ</th></tr></thead>
          <tbody>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Thời gian tra cứu một hồ sơ</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Hồ sơ giấy: tìm theo kho, theo tủ, phụ thuộc người phụ trách</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Đã số hóa: tìm theo tên file, theo metadata, theo nội dung nếu có OCR</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Rủi ro mất và hỏng tài liệu</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Hồ sơ giấy: hỏng theo thời gian, cháy, ẩm, thất lạc</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Đã số hóa: có bản dữ liệu, sao lưu được</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Không gian lưu trữ</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Hồ sơ giấy: chiếm diện tích tăng theo năm</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Đã số hóa: hồ sơ gốc lưu trữ gọn, tra cứu trên dữ liệu</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Cách thực hiện</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Tự làm: đầu tư thiết bị, bố trí nhân sự, tự chịu rủi ro chất lượng</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Thuê dịch vụ: trả theo khối lượng thực tế, có cam kết chất lượng</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Đáp ứng yêu cầu quản lý</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Hồ sơ giấy: khó tổng hợp và báo cáo</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Đã số hóa: sẵn dữ liệu để phục vụ yêu cầu số hóa văn bằng, chứng chỉ</td></tr>
          </tbody>
        </table>
      </div>
        <div class="mt-7">
      <div class="border-l-4 border-[#1A9900] bg-[#f5f8fb] px-6 py-5">
        <p class="text-[14.5px] text-gray-600 leading-relaxed">Cơ sở nhu cầu: Bộ GD&amp;ĐT đã triển khai kế hoạch số hóa dữ liệu văn bằng, chứng chỉ và có văn bản đôn đốc các Sở GD&amp;ĐT chỉ đạo, kiểm tra và thúc đẩy các đơn vị thực hiện. Đây là hạng mục công việc có tiến độ, nên nên tách thành các giai đoạn theo mức độ ưu tiên của từng nhóm hồ sơ.</p>
      </div></div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-16 bg-[#f5f8fb] ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="my-6 border border-gray-200 bg-white p-6 sm:p-8 shadow-xs">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6 pb-6 border-b border-gray-200">
          <div>
            <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-1">Mẫu dữ liệu thực tế</span>
            <h3 class="text-xl sm:text-2xl font-bold text-[#181923]">Quy cách & Mẫu dữ liệu bàn giao số hóa tài liệu</h3>
          </div>
          <span class="inline-flex items-center gap-1.5 text-xs font-bold text-[#1A9900] bg-[#1A9900]/10 px-3 py-1.5">
            <i class="fa-solid fa-shield-check"></i> Chuẩn Thông tư 02/2019/TT-BNV
          </span>
        </div>

        <p class="text-[14.5px] text-gray-600 leading-relaxed mb-6">
          Để Quý cơ quan, trường học và doanh nghiệp hoàn toàn an tâm trước khi lựa chọn, Hương Sơn minh bạch 100% quy cách đóng gói và mẫu dữ liệu bàn giao số hóa thực tế theo đúng tiêu chuẩn lưu trữ quốc gia:
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
          <div class="border border-gray-200 p-5 bg-gray-50/60 flex flex-col">
            <div class="flex items-center gap-3 mb-3">
              <span class="w-10 h-10 bg-[#181924] text-white flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-file-pdf text-base"></i></span>
              <div>
                <h4 class="text-sm font-bold text-[#181923]">1. File PDF Searchable OCR Tiếng Việt</h4>
                <span class="text-xs text-gray-500">Chuẩn lưu trữ ISO 19005-1 (PDF/A-1b)</span>
              </div>
            </div>
            <ul class="text-[13px] text-gray-600 space-y-2 leading-relaxed flex-1">
              <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[#1A9900] mt-1"></i><span><strong>Độ chính xác OCR:</strong> Đạt ≥ 98% tiếng Việt có dấu, tìm kiếm toàn văn trực tiếp trên Adobe / Foxit Reader.</span></li>
              <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[#1A9900] mt-1"></i><span><strong>Độ phân giải chuẩn:</strong> 300 DPI (Màu 24-bit hoặc Grayscale), chống cong góc và khử bóng mờ trang giấy.</span></li>
              <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[#1A9900] mt-1"></i><span><strong>Dung lượng tối ưu:</strong> Nén chuẩn CCITT Group 4 / JBIG2, chỉ khoảng 300KB – 800KB/trang mà vẫn sắc nét.</span></li>
            </ul>
          </div>

          <div class="border border-gray-200 p-5 bg-gray-50/60 flex flex-col">
            <div class="flex items-center gap-3 mb-3">
              <span class="w-10 h-10 bg-[#181924] text-white flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-file-excel text-base"></i></span>
              <div>
                <h4 class="text-sm font-bold text-[#181923]">2. Bảng Chỉ Mục Siêu Dữ Liệu (Metadata Index)</h4>
                <span class="text-xs text-gray-500">File Excel / CSV / JSON tương thích hệ thống QLVB</span>
              </div>
            </div>
            <ul class="text-[13px] text-gray-600 space-y-2 leading-relaxed flex-1">
              <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[#1A9900] mt-1"></i><span><strong>Đầy đủ 10 trường tra cứu:</strong> STT, Mã định danh hồ sơ, Tên văn bản, Số hiệu, Ngày ban hành, Cơ quan ban hành, Trích yếu, Số trang, Dung lượng, Mã Hash.</span></li>
              <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[#1A9900] mt-1"></i><span><strong>Tương thích phần mềm:</strong> Dễ dàng import vào VNPT-iOffice, Viettel vOffice, CSDL Giáo dục MOET và phần mềm lưu trữ nội bộ.</span></li>
              <li class="flex items-start gap-2"><i class="fa-solid fa-check text-[#1A9900] mt-1"></i><span><strong>Liên kết trực tiếp:</strong> Cột Hyperlink bấm là mở trực tiếp file PDF tương ứng.</span></li>
            </ul>
          </div>
        </div>

        <div class="border border-gray-200 bg-white p-5 mb-6">
          <h4 class="text-xs font-bold uppercase tracking-wider text-[#181923] mb-3 flex items-center gap-2">
            <i class="fa-solid fa-folder-tree text-[#1A9900]"></i> Cấu trúc cây thư mục bàn giao chuẩn hóa:
          </h4>
          <pre class="bg-gray-900 text-gray-200 p-4 text-xs font-mono rounded-xs overflow-x-auto leading-relaxed">
[DU_LIEU_SO_HOA_HUONG_SON_2026]/
├── 01_BANG_KE_CHI_MUC_METADATA/
│   ├── Danh_muc_ho_so_so_hoa_tong_hop.xlsx  (Bảng tra cứu 10 trường dữ liệu)
│   └── Bang_kiem_tra_ma_bam_SHA256.txt     (Đối soát tính toàn vẹn 100%)
├── 02_TAI_LIEU_PDF_SEARCHABLE/
│   ├── [2025_HOC_BA_THPT]/
│   │   ├── HB_001_NGUYEN_VAN_AN.pdf        (PDF/A-1b 300DPI Searchable)
│   │   └── HB_002_TRAN_THI_BINH.pdf
│   └── [2024_HO_SO_CAN_BO]/
│       ├── HSCB_0142_LE_VAN_CUONG.pdf
│       └── HSCB_0143_PHAM_THI_DUNG.pdf
└── 03_BIEN_BAN_NGHIEM_THU_VA_BAN_GIAO/
    ├── Bien_ban_ban_giao_ho_so_goc.pdf
    └── Bien_ban_nghiem_thu_chat_luong_so_hoa.pdf</pre>
        </div>

        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 p-4 bg-[#1A9900]/10 border border-[#1A9900]/30">
          <div class="flex items-center gap-3">
            <i class="fa-solid fa-shield-halved text-[#1A9900] text-xl"></i>
            <span class="text-[13.5px] text-[#181923] font-medium">Cam kết bảo mật dữ liệu tuyệt đối (Ký NDA) và thực hiện số hóa On-site trực tiếp tại trụ sở Quý cơ quan.</span>
          </div>
          <a href="/nhan-tu-van/khao-sat-so-hoa/" class="bg-[#1A9900] hover:bg-[#147700] text-white px-5 py-2.5 text-xs font-bold uppercase tracking-wider transition whitespace-nowrap">Yêu cầu demo mẫu dữ liệu</a>
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
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Hương Sơn nhận số hóa tại đơn vị hay đưa hồ sơ đi?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Cả hai phương án đều thực hiện được, nhưng địa điểm luôn do đơn vị quyết định và ghi rõ trong hợp đồng. Với hồ sơ có yêu cầu bảo mật cao, phương án thực hiện tại đơn vị thường được lựa chọn.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Chi phí số hóa tính theo gì?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Thường tính theo số trang đã scan, có phân biệt theo khổ giấy, một mặt hoặc hai mặt, tình trạng tài liệu, có OCR hay không và số trường metadata cần nhập. Đơn giá được chốt sau khảo sát khối lượng thực tế.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">OCR có bắt buộc không?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Không. OCR chỉ thực hiện khi phạm vi dịch vụ yêu cầu. Nếu đơn vị chỉ cần bản ảnh để lưu trữ và tra cứu theo tên hồ sơ thì không cần OCR; nếu cần tìm kiếm theo nội dung thì nên có.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Dữ liệu được bàn giao ở định dạng nào?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Theo yêu cầu của đơn vị, thường là PDF hoặc PDF có lớp văn bản khi có OCR, kèm cấu trúc thư mục và quy ước đặt tên đã được phê duyệt trước khi bắt đầu.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Làm sao biết dữ liệu bàn giao là đủ và đúng?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Khối lượng được kiểm đếm và lập biên bản ở cả hai đầu – khi tiếp nhận và khi bàn giao. Trước bàn giao, Hương Sơn soát tỷ lệ lỗi, thiếu trang và lệch trang; phần không đạt được scan lại.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Đơn vị chỉ muốn mua máy scan và tự làm thì có được không?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Được. Hương Sơn cung cấp <a class="text-[#1A9900] font-medium hover:underline" href="/san-pham/may-scan-so-hoa/">máy scan tốc độ cao</a> kèm tư vấn chọn dòng máy theo khối lượng và loại tài liệu, hướng dẫn thiết lập quy trình scan và bảo trì thiết bị.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Hương Sơn có tự phát triển phần mềm quản lý tài liệu không?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Không. Hương Sơn đóng vai trò tích hợp giải pháp: khảo sát, thiết bị, triển khai, quy trình, đào tạo và vận hành; phần OCR, hệ thống quản lý tài liệu và lưu trữ do đối tác chuyên môn cung cấp. Cách làm này giúp đơn vị chọn được công cụ phù hợp thay vì bị bó vào một sản phẩm.</div>
        </details>
      </div>
        </div>
        <div class="lg:col-span-5" id="tu-van">
          
      <div class="bg-white border border-gray-200 p-6 sm:p-9">
        <h2 class="text-xl sm:text-[26px] font-bold text-[#181923] mb-2">Yêu cầu khảo sát số hóa</h2>
        <p class="text-[14.5px] text-gray-500 leading-relaxed mb-7">Hương Sơn phản hồi trong giờ làm việc. Thông tin của Quý đơn vị chỉ dùng để tư vấn và báo giá.</p>
        <form class="lead-form" id="sol-so-hoa-ho-so-truong-hoc-form" method="post" action="/api/lead" novalidate>
          
          <input type="hidden" name="page_type" value="solution" />
          <input type="hidden" name="product_model" value="" />
          <input type="hidden" name="solution_slug" value="so-hoa-ho-so-truong-hoc" />
          <input type="hidden" name="source_url" value="" data-autofill="url" />
          <input type="hidden" name="referrer" value="" data-autofill="referrer" />
          <input type="hidden" name="utm_source" value="" data-autofill="utm_source" />
          <input type="hidden" name="utm_medium" value="" data-autofill="utm_medium" />
          <input type="hidden" name="utm_campaign" value="" data-autofill="utm_campaign" />
          <input type="hidden" name="utm_term" value="" data-autofill="utm_term" />
          <input type="hidden" name="utm_content" value="" data-autofill="utm_content" />
          <input type="hidden" name="gclid" value="" data-autofill="gclid" />
          <div class="hidden" aria-hidden="true">
            <label for="f-sol-so-hoa-ho-so-truong-hoc-hp">Bỏ trống ô này</label>
            <input type="text" id="f-sol-so-hoa-ho-so-truong-hoc-hp" name="_hp" tabindex="-1" autocomplete="off" />
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
          </div><input type="hidden" name="nhu_cau" value="DIGITAL" />
          <div class="sm:col-span-2">
            <label for="f-khoi_luong_tai_lieu" class="block text-[13px] font-semibold text-[#181923] mb-2">Khối lượng hồ sơ cần số hóa dự kiến</label>
            <input type="text" id="f-khoi_luong_tai_lieu" name="khoi_luong_tai_lieu" placeholder="VD: Học bạ, sổ điểm, hồ sơ lưu trữ..."
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

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-3">Xem thêm</span>
        <h2 class="text-2xl sm:text-[34px] font-bold text-[#181923] leading-tight">Giải pháp liên quan</h2>
      </div><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4"><a href="/giai-phap/scan-so-hoa/" class="border border-gray-200 bg-white px-5 py-4 text-[14.5px] font-bold text-[#181923] hover:border-[#1A9900] hover:text-[#1A9900] transition flex items-center justify-between"><span>Scan – Số hóa cho mọi ngành</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a><a href="/san-pham/may-scan-so-hoa/" class="border border-gray-200 bg-white px-5 py-4 text-[14.5px] font-bold text-[#181923] hover:border-[#1A9900] hover:text-[#1A9900] transition flex items-center justify-between"><span>Máy scan tốc độ cao</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a><a href="/giai-phap/giao-duc/quan-ly-in-an-truong-hoc/" class="border border-gray-200 bg-white px-5 py-4 text-[14.5px] font-bold text-[#181923] hover:border-[#1A9900] hover:text-[#1A9900] transition flex items-center justify-between"><span>Quản lý in ấn trọn gói</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a><a href="/giai-phap/giao-duc/" class="border border-gray-200 bg-white px-5 py-4 text-[14.5px] font-bold text-[#181923] hover:border-[#1A9900] hover:text-[#1A9900] transition flex items-center justify-between"><span>Giải pháp Giáo dục</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a></div>
    </div>
  </section>

  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/banners/hero_office_solutions_1787899910391.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Đơn vị đang có bao nhiêu hồ sơ cần số hóa?</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Hương Sơn khảo sát khối lượng và loại tài liệu, đề xuất phương án thiết bị, quy trình, quy ước dữ liệu và đơn giá theo trang để đơn vị đưa vào kế hoạch.</p>
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
