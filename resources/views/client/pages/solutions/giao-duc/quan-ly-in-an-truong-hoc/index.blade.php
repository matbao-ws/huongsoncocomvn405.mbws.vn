@extends('client.layouts.app')

@section('title', "Managed Print Service cho trường học – SCHOOL PRO | Hương Sơn")
@section('meta_description', "Giải pháp thuê và quản lý trọn gói hệ thống máy in, photocopy, scan cho trường học và đơn vị giáo dục theo sản lượng, SLA và ngân sách đã thống nhất.")
@section('canonical', url('/giai-phap/giao-duc/quan-ly-in-an-truong-hoc/'))
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
        "name": "Quản lý in ấn trọn gói cho trường học (Managed Print Service)",
        "item": "https://huongsonco.com.vn/giai-phap/giao-duc/quan-ly-in-an-truong-hoc/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "Service",
    "@@id": "https://huongsonco.com.vn/giai-phap/giao-duc/quan-ly-in-an-truong-hoc/#service",
    "name": "Quản lý in ấn trọn gói cho trường học – Managed Print Service",
    "serviceType": "Managed Print Service cho khối Giáo dục",
    "description": "Hương Sơn quản lý toàn bộ thiết bị, vật tư, bảo trì, counter và SLA của hệ thống in; đơn vị trả theo sản lượng và mức dịch vụ đã thống nhất, có báo cáo định kỳ.",
    "provider": {
      "@@id": "https://huongsonco.com.vn/#organization"
    },
    "areaServed": {
      "@@type": "Country",
      "name": "Việt Nam"
    },
    "url": "https://huongsonco.com.vn/giai-phap/giao-duc/quan-ly-in-an-truong-hoc/",
    "audience": [
      {
        "@@type": "Audience",
        "audienceType": "Sở Giáo dục và Đào tạo"
      },
      {
        "@@type": "Audience",
        "audienceType": "Trường Đại học – Cao đẳng"
      },
      {
        "@@type": "Audience",
        "audienceType": "Trường có nhiều phòng ban"
      },
      {
        "@@type": "Audience",
        "audienceType": "Trung tâm in của đơn vị giáo dục"
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
            "name": "Máy photocopy – máy đa chức năng A3"
          }
        },
        {
          "@@type": "Offer",
          "itemOffered": {
            "@@type": "Product",
            "name": "Máy in laser A4 – máy đa chức năng A4"
          }
        },
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
            "name": "Máy in nhân bản – thiết bị sau in"
          }
        },
        {
          "@@type": "Offer",
          "itemOffered": {
            "@@type": "Product",
            "name": "Vật tư – linh kiện – tiêu hao"
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
        "name": "Managed Print Service khác thuê máy thường ở chỗ nào?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Thuê máy là thuê thiết bị. Managed Print Service là thuê cả năng lực vận hành: Hương Sơn quản lý thiết bị, vật tư, bảo trì, counter, SLA và gửi báo cáo định kỳ; đơn vị trả theo sản lượng và mức dịch vụ thay vì trả theo từng lần mua mực hay từng lần sửa máy."
        }
      },
      {
        "@@type": "Question",
        "name": "Đơn vị đang có nhiều máy của nhiều hãng thì có triển khai được không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Được. Hương Sơn làm theo mô hình đa thương hiệu nên có thể tiếp nhận đội máy hỗn hợp, khảo sát và chuẩn hóa dần chứ không bắt buộc thay toàn bộ thiết bị ngay từ đầu."
        }
      },
      {
        "@@type": "Question",
        "name": "Chi phí được tính theo gì?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Theo sản lượng bản in được chốt bằng counter định kỳ theo từng mã máy, cộng phần thiết bị và mức dịch vụ đã thống nhất. Cơ cấu giá được ghi rõ trong hợp đồng."
        }
      },
      {
        "@@type": "Question",
        "name": "Báo cáo gồm những gì và tần suất thế nào?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Báo cáo định kỳ gồm sản lượng theo máy, sự cố đã xử lý, vật tư đã cấp và chi phí trên mỗi thiết bị. Tần suất báo cáo thống nhất trong hợp đồng, thường theo tháng hoặc theo kỳ chốt counter."
        }
      },
      {
        "@@type": "Question",
        "name": "Nếu một máy hỏng nặng thì có được thay máy không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Có. Hợp đồng xác định thiết bị dự phòng theo quy mô. Với sự cố P1 mà không khắc phục được tại chỗ, Hương Sơn thay thiết bị theo phương án đã thống nhất."
        }
      },
      {
        "@@type": "Question",
        "name": "Có thể đưa cả máy scan và dịch vụ số hóa vào cùng hợp đồng không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Được. Nhiều đơn vị mở rộng từ quản lý in sang số hóa hồ sơ trong cùng một quan hệ dịch vụ."
        }
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "HowTo",
    "name": "Quy trình triển khai: Quản lý in ấn trọn gói cho trường học – Managed Print Service",
    "description": "Hương Sơn quản lý toàn bộ thiết bị, vật tư, bảo trì, counter và SLA của hệ thống in; đơn vị trả theo sản lượng và mức dịch vụ đã thống nhất, có báo cáo định kỳ.",
    "step": [
      {
        "@@type": "HowToStep",
        "position": 1,
        "name": "Khảo sát hệ thống hiện tại",
        "text": "Kiểm kê toàn bộ thiết bị theo model, tuổi máy, sản lượng, tình trạng và loại vật tư đang sử dụng."
      },
      {
        "@@type": "HowToStep",
        "position": 2,
        "name": "Phân tích chi phí hiện tại",
        "text": "Tính chi phí in thực tế theo máy và theo phòng ban, xác định các thiết bị và khu vực đang gây chi phí cao."
      },
      {
        "@@type": "HowToStep",
        "position": 3,
        "name": "Thiết kế lại đội máy",
        "text": "Đề xuất cấu hình thiết bị theo nhu cầu từng khu vực, loại bỏ thiết bị không hiệu quả."
      },
      {
        "@@type": "HowToStep",
        "position": 4,
        "name": "Chốt SLA và cơ chế giá",
        "text": "Thống nhất mức dịch vụ P1/P2/P3, đơn giá theo sản lượng, phạm vi vật tư và cơ chế nghiệm thu – thanh toán."
      },
      {
        "@@type": "HowToStep",
        "position": 5,
        "name": "Triển khai và chốt counter đầu kỳ",
        "text": "Lắp đặt, cấu hình, đào tạo sử dụng và chốt counter khởi điểm cho từng mã máy."
      },
      {
        "@@type": "HowToStep",
        "position": 6,
        "name": "Vận hành và báo cáo",
        "text": "Cung ứng vật tư, bảo trì theo lịch, xử lý sự cố theo SLA, chốt counter và gửi báo cáo định kỳ."
      },
      {
        "@@type": "HowToStep",
        "position": 7,
        "name": "Đánh giá và tối ưu",
        "text": "Rà soát ở mốc T-90, T-60, T-30 trước hạn để điều chỉnh cấu hình, định mức và phạm vi dịch vụ."
      }
    ]
  }
]
  </script>
@endsection

@section('content')
<!-- PAGE HERO -->
  <section class="relative bg-[#181924] min-h-[340px] sm:min-h-[400px] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
      <img src="/assets/images/hero-education.jpg" alt="Quản lý in ấn trọn gói cho trường học (Managed Print Service)" class="w-full h-full object-cover object-center" loading="eager" />
      <div class="absolute inset-0 bg-[#181924]/88"></div>
    </div>
    <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 py-16 w-full text-center">
      <span class="font-handwriting text-3xl text-[#5eb74c] font-bold block mb-2">SCHOOL PRO</span>
      <h1 class="text-3xl sm:text-[42px] font-bold text-white mb-4 leading-tight">Quản lý in ấn trọn gói cho trường học (Managed Print Service)</h1>
      <p class="max-w-3xl mx-auto text-gray-300 text-[15px] leading-relaxed">SCHOOL PRO là giải pháp Managed Print Service giúp trường học và đơn vị giáo dục thuê, quản lý và vận hành toàn bộ hệ thống máy in – photocopy – scan theo sản lượng, SLA và ngân sách đã thống nhất.</p>
      <nav class="mt-7 text-[12.5px] text-gray-400 flex items-center justify-center flex-wrap" aria-label="Breadcrumb">
        <a href="/" class="hover:text-white transition">Trang chủ</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-500"></i> <a href="/giai-phap/" class="hover:text-white transition">Giải pháp</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-500"></i> <a href="/giai-phap/giao-duc/" class="hover:text-white transition">Giải pháp thiết bị &amp; in ấn cho ngành Giáo dục</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-500"></i> <span class="text-[#1A9900]" aria-current="page">Quản lý in ấn trọn gói cho trường học (Managed Print Service)</span>
      </nav>
    </div>
  </section>

  <section class="py-10 border-b border-gray-200" style="background-color: rgb(247, 243, 238);">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Trang này là gì</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Dịch vụ quản lý in ấn trọn gói: Hương Sơn quản lý thiết bị, vật tư, bảo trì, counter và cam kết SLA cho toàn bộ hệ thống in của đơn vị.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Dành cho ai</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Sở GD&ĐT, trường đại học – cao đẳng, trường lớn nhiều phòng ban và các đơn vị có trung tâm in riêng.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Giải quyết vấn đề gì</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Biến chi phí in rời rạc và khó kiểm soát thành một khoản dịch vụ có số liệu, có cam kết và có báo cáo – đồng thời giảm tải công việc kỹ thuật cho nhân sự của đơn vị.</p>
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
          <span class="text-[15px] text-gray-600 leading-relaxed">Nhiều máy của nhiều hãng, nhiều đời, mỗi máy một loại vật tư – việc mua và quản tồn rất phức tạp.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Không có số liệu sản lượng theo máy và theo phòng ban nên không biết chi phí in thực tế phân bổ ra sao.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Nhân sự kỹ thuật của đơn vị phải xử lý sự cố máy in thay vì làm công việc chuyên môn.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Chi phí sửa chữa và vật tư phát sinh không dự đoán được, gây khó cho dự toán.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Không có cam kết thời gian xử lý sự cố, mỗi lần hỏng là một lần thương lượng lại.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Máy cũ vẫn được dùng vì chưa có căn cứ số liệu để đề xuất thay thế hay nâng cấp.</span>
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
        <div class="lg:col-span-8"><p class="text-[15.5px] text-gray-600 leading-[1.85] mb-6">Hương Sơn tiến từ bảo trì từng máy sang quản lý toàn bộ hệ thống in của đơn vị: thiết bị, vật tư, sản lượng, sự cố và chi phí đều được quản lý theo mã máy và báo cáo định kỳ.</p><ul class="grid grid-cols-1 md:grid-cols-1 gap-x-10 gap-y-3.5">
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Khảo sát toàn bộ thiết bị hiện có: model, tuổi máy, sản lượng, tình trạng, vật tư đang dùng.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Chuẩn hóa đội máy: cấu hình A3 đa chức năng, A4 và máy scan theo đúng nhu cầu từng khu vực; có thể bổ sung máy in nhân bản hoặc thiết bị sau in.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Hương Sơn chủ động cung ứng và quản lý tồn vật tư – đơn vị không phải mua từng lần.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Counter được chốt định kỳ và quản lý theo mã máy, làm căn cứ nghiệm thu và thanh toán.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">SLA phân theo cấp độ P1/P2/P3 với cam kết thời gian tương ứng.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Thiết bị dự phòng theo quy mô hợp đồng.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Báo cáo định kỳ về sản lượng, sự cố, vật tư đã cấp và chi phí trên mỗi thiết bị.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Đánh giá lại hợp đồng ở các mốc 90, 60 và 30 ngày trước khi hết hạn để tối ưu cấu hình.</span>
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
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top"><a href="/san-pham/photocopy-may-da-chuc-nang/" class="text-[#181923] hover:text-[#1A9900] transition">Máy photocopy – máy đa chức năng A3</a></th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Thiết bị trục chính của hệ thống in</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top"><a href="/san-pham/may-in-laser/" class="text-[#181923] hover:text-[#1A9900] transition">Máy in laser A4 – máy đa chức năng A4</a></th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Thiết bị phân tán theo phòng ban</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top"><a href="/san-pham/may-scan-so-hoa/" class="text-[#181923] hover:text-[#1A9900] transition">Máy scan tốc độ cao</a></th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Số hóa hồ sơ trong cùng một hợp đồng dịch vụ</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top"><a href="/san-pham/may-in-nhan-ban-toc-do-cao/" class="text-[#181923] hover:text-[#1A9900] transition">Máy in nhân bản – thiết bị sau in</a></th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Bổ sung khi đơn vị có trung tâm in hoặc nhu cầu sản lượng lớn</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top"><a href="/san-pham/vat-tu-linh-kien-tieu-hao/" class="text-[#181923] hover:text-[#1A9900] transition">Vật tư – linh kiện – tiêu hao</a></th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Do Hương Sơn chủ động cung ứng và quản lý tồn</td></tr>
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
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Khảo sát hệ thống hiện tại</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Kiểm kê toàn bộ thiết bị theo model, tuổi máy, sản lượng, tình trạng và loại vật tư đang sử dụng.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">2</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 2</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Phân tích chi phí hiện tại</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Tính chi phí in thực tế theo máy và theo phòng ban, xác định các thiết bị và khu vực đang gây chi phí cao.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">3</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 3</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Thiết kế lại đội máy</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Đề xuất cấu hình thiết bị theo nhu cầu từng khu vực, loại bỏ thiết bị không hiệu quả.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">4</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 4</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Chốt SLA và cơ chế giá</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Thống nhất mức dịch vụ P1/P2/P3, đơn giá theo sản lượng, phạm vi vật tư và cơ chế nghiệm thu – thanh toán.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">5</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 5</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Triển khai và chốt counter đầu kỳ</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Lắp đặt, cấu hình, đào tạo sử dụng và chốt counter khởi điểm cho từng mã máy.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">6</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 6</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Vận hành và báo cáo</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Cung ứng vật tư, bảo trì theo lịch, xử lý sự cố theo SLA, chốt counter và gửi báo cáo định kỳ.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">7</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 7</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Đánh giá và tối ưu</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Rà soát ở mốc T-90, T-60, T-30 trước hạn để điều chỉnh cấu hình, định mức và phạm vi dịch vụ.</p>
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
          <span class="text-[15px] text-gray-600 leading-relaxed">Vật tư do Hương Sơn chủ động cung ứng và quản lý tồn, đảm bảo không gián đoạn vì thiếu vật tư.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Counter chốt định kỳ theo mã máy – hai bên có cùng một số liệu khi nghiệm thu.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Thiết bị dự phòng theo quy mô hợp đồng, không xử lý theo tình huống.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Báo cáo định kỳ: sản lượng, sự cố, vật tư đã cấp, chi phí trên mỗi thiết bị.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Bảo trì theo lịch phòng ngừa thay vì chỉ sửa khi hỏng.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Đầu mối kỹ thuật xác định cho từng khu vực triển khai.</span>
        </li>
      </ul>
        <div class="mt-8">
      <div class="overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-200 bg-white">
          <caption class="text-left px-5 py-4 bg-white border border-b-0 border-gray-200 text-sm font-bold text-[#181923] uppercase tracking-wider">Cam kết dịch vụ (SLA) đề xuất</caption>
          <thead class="bg-[#181924]"><tr><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Cấp độ sự cố</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Tiếp nhận</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Mục tiêu xử lý</th></tr></thead>
          <tbody>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">P1 – Máy dừng hoàn toàn</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Tiếp nhận ≤ 30 phút</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Mục tiêu có mặt ≤ 2 giờ; thay thiết bị nếu không khắc phục được</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">P2 – Ảnh hưởng chức năng chính</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Tiếp nhận ≤ 30 phút</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Xử lý trong ngày làm việc</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">P3 – Lỗi nhỏ, không ảnh hưởng vận hành</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Tiếp nhận trong ngày</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Xử lý theo lịch bảo trì định kỳ</td></tr>
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
        <div class="lg:col-span-8"><p class="text-[15.5px] text-gray-600 leading-[1.85] mb-7">Giá trị của Managed Print Service không nằm ở đơn giá một bản in, mà ở việc chi phí in trở thành một khoản có số liệu, có cam kết và có thể tối ưu theo từng kỳ.</p>
      <div class="overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-200 bg-white">
          
          <thead class="bg-[#181924]"><tr><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Hạng mục chi phí</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Phương án mua</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Phương án thuê / dịch vụ</th></tr></thead>
          <tbody>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Khả năng dự toán</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Tự quản: chi phí phát sinh rời rạc theo từng lần mua và từng lần sửa</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">MPS: một cơ cấu giá theo sản lượng, dự toán được theo kỳ</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Nhân sự kỹ thuật của đơn vị</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Tự quản: mất thời gian xử lý sự cố thiết bị</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">MPS: chuyển toàn bộ sang nhà cung cấp theo SLA</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Quản lý vật tư</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Tự quản: mua từng lần, tồn kho không kiểm soát</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">MPS: nhà cung cấp quản lý tồn và cung ứng chủ động</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Số liệu để ra quyết định</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Tự quản: không có counter và báo cáo hệ thống</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">MPS: báo cáo sản lượng, sự cố và chi phí theo mã máy</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Thời gian máy dừng</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Tự quản: không có cam kết</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">MPS: cam kết P1/P2/P3 và thiết bị dự phòng</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Tối ưu theo thời gian</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Tự quản: cấu hình cố định nhiều năm</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">MPS: đánh giá lại và điều chỉnh ở mỗi kỳ gia hạn</td></tr>
          </tbody>
        </table>
      </div>
        <div class="mt-7">
      <div class="border-l-4 border-[#1A9900] bg-[#f5f8fb] px-6 py-5">
        <p class="text-[14.5px] text-gray-600 leading-relaxed">Hương Sơn lập Cost Sheet nội bộ cho mọi hợp đồng trước khi gửi báo giá, gồm giá vốn thiết bị, chi phí vốn, vật tư, vận chuyển – lắp đặt – thu hồi, kỹ thuật, bảo trì, chi phí quản lý và dự phòng rủi ro. Nhờ vậy cơ cấu giá đưa cho đơn vị là cơ cấu giá bền được cho cả thời hạn hợp đồng, không phải giá chào thấp rồi phát sinh về sau.</p>
      </div></div>
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
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Managed Print Service khác thuê máy thường ở chỗ nào?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Thuê máy là thuê thiết bị. Managed Print Service là thuê cả năng lực vận hành: Hương Sơn quản lý thiết bị, vật tư, bảo trì, counter, SLA và gửi báo cáo định kỳ; đơn vị trả theo sản lượng và mức dịch vụ thay vì trả theo từng lần mua mực hay từng lần sửa máy.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Đơn vị đang có nhiều máy của nhiều hãng thì có triển khai được không?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Được. Hương Sơn làm theo mô hình đa thương hiệu nên có thể tiếp nhận đội máy hỗn hợp, khảo sát và chuẩn hóa dần chứ không bắt buộc thay toàn bộ thiết bị ngay từ đầu.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Chi phí được tính theo gì?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Theo sản lượng bản in được chốt bằng counter định kỳ theo từng mã máy, cộng phần thiết bị và mức dịch vụ đã thống nhất. Cơ cấu giá được ghi rõ trong hợp đồng.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Báo cáo gồm những gì và tần suất thế nào?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Báo cáo định kỳ gồm sản lượng theo máy, sự cố đã xử lý, vật tư đã cấp và chi phí trên mỗi thiết bị. Tần suất báo cáo thống nhất trong hợp đồng, thường theo tháng hoặc theo kỳ chốt counter.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Nếu một máy hỏng nặng thì có được thay máy không?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Có. Hợp đồng xác định thiết bị dự phòng theo quy mô. Với sự cố P1 mà không khắc phục được tại chỗ, Hương Sơn thay thiết bị theo phương án đã thống nhất.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Có thể đưa cả máy scan và dịch vụ số hóa vào cùng hợp đồng không?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Được. Nhiều đơn vị mở rộng từ quản lý in sang <a class="text-[#1A9900] font-medium hover:underline" href="/giai-phap/giao-duc/so-hoa-ho-so-truong-hoc/">số hóa hồ sơ</a> trong cùng một quan hệ dịch vụ.</div>
        </details>
      </div>
        </div>
        <div class="lg:col-span-5" id="tu-van">
          
      <div class="bg-white border border-gray-200 p-6 sm:p-9">
        <h2 class="text-xl sm:text-[26px] font-bold text-[#181923] mb-2">Yêu cầu khảo sát hệ thống in</h2>
        <p class="text-[14.5px] text-gray-500 leading-relaxed mb-7">Hương Sơn phản hồi trong giờ làm việc. Thông tin của Quý đơn vị chỉ dùng để tư vấn và báo giá.</p>
        <form class="lead-form" id="sol-quan-ly-in-an-truong-hoc-form" method="post" action="/api/lead" novalidate>
          
          <input type="hidden" name="page_type" value="solution" />
          <input type="hidden" name="product_model" value="" />
          <input type="hidden" name="solution_slug" value="quan-ly-in-an-truong-hoc" />
          <input type="hidden" name="source_url" value="" data-autofill="url" />
          <input type="hidden" name="referrer" value="" data-autofill="referrer" />
          <input type="hidden" name="utm_source" value="" data-autofill="utm_source" />
          <input type="hidden" name="utm_medium" value="" data-autofill="utm_medium" />
          <input type="hidden" name="utm_campaign" value="" data-autofill="utm_campaign" />
          <input type="hidden" name="utm_term" value="" data-autofill="utm_term" />
          <input type="hidden" name="utm_content" value="" data-autofill="utm_content" />
          <input type="hidden" name="gclid" value="" data-autofill="gclid" />
          <div class="hidden" aria-hidden="true">
            <label for="f-sol-quan-ly-in-an-truong-hoc-hp">Bỏ trống ô này</label>
            <input type="text" id="f-sol-quan-ly-in-an-truong-hoc-hp" name="_hp" tabindex="-1" autocomplete="off" />
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
            <input type="email" id="f-email" name="email" placeholder="ten@donvi.gov.vn"
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
          </div><input type="hidden" name="nhu_cau" value="PRO" />
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

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-3">Xem thêm</span>
        <h2 class="text-2xl sm:text-[34px] font-bold text-[#181923] leading-tight">Giải pháp liên quan</h2>
      </div><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4"><a href="/giai-phap/giao-duc/so-hoa-ho-so-truong-hoc/" class="border border-gray-200 bg-white px-5 py-4 text-[14.5px] font-bold text-[#181923] hover:border-[#1A9900] hover:text-[#1A9900] transition flex items-center justify-between"><span>Số hóa hồ sơ trường học</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a><a href="/giai-phap/giao-duc/cho-thue-may-truong-hoc/" class="border border-gray-200 bg-white px-5 py-4 text-[14.5px] font-bold text-[#181923] hover:border-[#1A9900] hover:text-[#1A9900] transition flex items-center justify-between"><span>Cho thuê máy cho trường học</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a><a href="/giai-phap/quan-ly-van-hanh/" class="border border-gray-200 bg-white px-5 py-4 text-[14.5px] font-bold text-[#181923] hover:border-[#1A9900] hover:text-[#1A9900] transition flex items-center justify-between"><span>Quản lý – Vận hành thiết bị</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a><a href="/dich-vu/bao-tri-sua-chua/" class="border border-gray-200 bg-white px-5 py-4 text-[14.5px] font-bold text-[#181923] hover:border-[#1A9900] hover:text-[#1A9900] transition flex items-center justify-between"><span>Dịch vụ bảo trì – sửa chữa</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a></div>
    </div>
  </section>

  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/xxx_home-bg_xxx.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Muốn biết chi phí in thực tế của đơn vị đang là bao nhiêu?</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Hương Sơn khảo sát đội máy hiện có, tính chi phí in theo máy và theo phòng ban, rồi đề xuất phương án quản lý trọn gói kèm cơ cấu giá.</p>
      </div>
      <div class="flex flex-wrap items-center gap-4 flex-shrink-0">
        <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Yêu cầu báo giá</a>
        <a href="/du-an/" class="border border-gray-500 hover:border-[#1A9900] hover:text-[#1A9900] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem dự án đã triển khai</a>
        <a href="tel:02439729484" data-ga="click_hotline" class="text-white font-bold text-sm hover:text-[#1A9900] transition">
          <i class="fa-solid fa-phone text-[#1A9900] mr-2"></i>024 3972 9484
        </a>
      </div>
    </div>
  </section>
@endsection
