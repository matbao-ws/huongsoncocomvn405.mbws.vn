@extends('client.layouts.app')

@section('title', "Giải pháp máy in, photocopy và scan cho Ngân hàng – Tài chính | Hương Sơn")
@section('meta_description', "Cung cấp máy photocopy A3, máy in A4, máy scan, quản lý in ấn theo hệ thống chi nhánh, vật tư và dịch vụ kỹ thuật cho ngân hàng và tổ chức tài chính.")
@section('canonical', "https://huongsonco.com.vn/giai-phap/ngan-hang-tai-chinh/")
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
        "name": "Giải pháp thiết bị in ấn và tài liệu cho Ngân hàng – Tài chính",
        "item": "https://huongsonco.com.vn/giai-phap/ngan-hang-tai-chinh/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "Service",
    "@@id": "https://huongsonco.com.vn/giai-phap/ngan-hang-tai-chinh/#service",
    "name": "Giải pháp thiết bị in ấn và quản lý tài liệu cho Ngân hàng – Tài chính",
    "serviceType": "Giải pháp thiết bị in ấn, scan và quản lý in cho ngân hàng và tổ chức tài chính",
    "description": "Thiết bị và dịch vụ in ấn – scan cho ngân hàng và tổ chức tài chính: máy photocopy A3, máy in A4, máy scan chứng từ, quản lý in theo hệ thống chi nhánh, vật tư và bảo trì theo cam kết.",
    "provider": {
      "@@id": "https://huongsonco.com.vn/#organization"
    },
    "areaServed": {
      "@@type": "Country",
      "name": "Việt Nam"
    },
    "url": "https://huongsonco.com.vn/giai-phap/ngan-hang-tai-chinh/",
    "audience": [
      {
        "@@type": "Audience",
        "audienceType": "Ngân hàng thương mại"
      },
      {
        "@@type": "Audience",
        "audienceType": "Chi nhánh và phòng giao dịch"
      },
      {
        "@@type": "Audience",
        "audienceType": "Công ty tài chính"
      },
      {
        "@@type": "Audience",
        "audienceType": "Công ty bảo hiểm"
      },
      {
        "@@type": "Audience",
        "audienceType": "Công ty chứng khoán"
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
            "name": "Vật tư – linh kiện – tiêu hao"
          }
        },
        {
          "@@type": "Offer",
          "itemOffered": {
            "@@type": "Product",
            "name": "Thiết bị văn phòng – hội họp"
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
        "name": "Hương Sơn đã triển khai cho ngân hàng nào chưa?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Website của Hương Sơn công bố việc cung cấp máy photocopy cho hệ thống Vietcombank trong các năm 2022–2024, trong đó năm 2024 là lô 127 máy Toshiba. Hương Sơn đang hoàn thiện hồ sơ và xác nhận quyền công bố trước khi trình bày chi tiết dưới dạng case study."
        }
      },
      {
        "@@type": "Question",
        "name": "Hương Sơn phục vụ được bao nhiêu điểm giao dịch?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Phụ thuộc địa bàn, vì cam kết thời gian xử lý chỉ có giá trị khi đội kỹ thuật tiếp cận được trong thời gian cam kết. Hương Sơn xác nhận phạm vi phục vụ theo danh sách địa điểm cụ thể trước khi ký cam kết SLA."
        }
      },
      {
        "@@type": "Question",
        "name": "Có giải pháp in bảo mật (secure print) không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Hương Sơn triển khai theo mô hình đa thương hiệu và làm việc với đối tác phần mềm cho phần kiểm soát in. Phạm vi cụ thể được xác định sau khảo sát yêu cầu kiểm soát nội bộ của tổ chức."
        }
      },
      {
        "@@type": "Question",
        "name": "Vật tư cho nhiều đời máy ở nhiều điểm được quản lý thế nào?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Bằng hai việc: chuẩn hóa số dòng máy để giảm số mã vật tư, và cung ứng theo định mức căn cứ sản lượng thực tế của từng điểm thay vì để mỗi điểm tự mua."
        }
      },
      {
        "@@type": "Question",
        "name": "Có báo cáo sản lượng theo từng chi nhánh không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Có, khi triển khai theo mô hình quản lý in ấn. Counter được chốt theo mã máy và báo cáo tổng hợp theo đơn vị, phục vụ phân bổ chi phí nội bộ."
        }
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "HowTo",
    "name": "Quy trình triển khai: Giải pháp thiết bị in ấn và quản lý tài liệu cho Ngân hàng – Tài chính",
    "description": "Thiết bị và dịch vụ in ấn – scan cho ngân hàng và tổ chức tài chính: máy photocopy A3, máy in A4, máy scan chứng từ, quản lý in theo hệ thống chi nhánh, vật tư và bảo trì theo cam kết.",
    "step": [
      {
        "@@type": "HowToStep",
        "position": 1,
        "name": "Khảo sát hệ thống điểm",
        "text": "Xác định số điểm, loại điểm, số thiết bị mỗi điểm, sản lượng và yêu cầu về tính liên tục."
      },
      {
        "@@type": "HowToStep",
        "position": 2,
        "name": "Chuẩn hóa cấu hình",
        "text": "Rút gọn số dòng máy để giảm số loại vật tư, chọn cấu hình theo loại điểm."
      },
      {
        "@@type": "HowToStep",
        "position": 3,
        "name": "Thiết kế phương án vật tư",
        "text": "Xác định định mức và cách cung ứng cho từng điểm, tránh thiếu cục bộ."
      },
      {
        "@@type": "HowToStep",
        "position": 4,
        "name": "Chốt SLA theo loại điểm",
        "text": "Điểm trọng yếu có cam kết chặt hơn và có phương án thiết bị thay thế."
      },
      {
        "@@type": "HowToStep",
        "position": 5,
        "name": "Triển khai theo đợt",
        "text": "Lắp đặt, chốt counter đầu kỳ và đào tạo sử dụng theo từng đợt để không ảnh hưởng hoạt động."
      },
      {
        "@@type": "HowToStep",
        "position": 6,
        "name": "Vận hành và báo cáo",
        "text": "Cung ứng vật tư, bảo trì theo lịch, xử lý sự cố theo SLA và báo cáo sản lượng theo đơn vị."
      },
      {
        "@@type": "HowToStep",
        "position": 7,
        "name": "Đánh giá định kỳ",
        "text": "Rà soát thiết bị hiệu suất thấp, điều chỉnh cấu hình và định mức theo số liệu thực tế."
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
      <img src="/assets/images/hero-solutions.jpg" alt="Giải pháp thiết bị in ấn và tài liệu cho Ngân hàng – Tài chính" class="w-full h-full object-cover object-center opacity-25" loading="eager" />
      <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(16, 32, 60, 0.90) 0%, rgba(16, 32, 60, 0.82) 100%);"></div>
    </div>
    <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 py-14 sm:py-16 w-full text-center">
      <span class="font-handwriting text-2xl sm:text-3xl text-[#5eb74c] font-bold block mb-2">Banking &amp; Finance</span>
      <h1 class="text-2xl sm:text-[38px] lg:text-[42px] font-bold text-white mb-4 leading-tight tracking-tight drop-shadow-sm">Giải pháp thiết bị in ấn và tài liệu cho Ngân hàng – Tài chính</h1>
      <p class="max-w-3xl mx-auto text-gray-200 text-[15px] sm:text-[16px] leading-relaxed">Hương Sơn cung cấp thiết bị in ấn, máy scan, vật tư và dịch vụ kỹ thuật cho ngân hàng và tổ chức tài chính – với yêu cầu cao về tính liên tục, bảo mật tài liệu và khả năng phục vụ nhiều điểm giao dịch.</p>
      <nav class="mt-6 text-[13px] text-gray-300 flex items-center justify-center flex-wrap" aria-label="Breadcrumb">
        <a href="/" class="text-gray-300 hover:text-white transition">Trang chủ</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> <a href="/giai-phap/" class="text-gray-300 hover:text-white transition">Giải pháp</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> <span class="text-[#5eb74c] font-semibold" aria-current="page">Giải pháp thiết bị in ấn và tài liệu cho Ngân hàng – Tài chính</span>
      </nav>
    </div>
  </section>

  <section class="py-10 border-b border-gray-200" style="background-color: rgb(247, 243, 238);">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Trang này là gì</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Giải pháp thiết bị in ấn, scan và quản lý in cho ngân hàng – tổ chức tài chính, tập trung vào tính liên tục của hoạt động và khả năng phục vụ nhiều điểm giao dịch.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Dành cho ai</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Ngân hàng thương mại, chi nhánh và phòng giao dịch, công ty tài chính, bảo hiểm và chứng khoán.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Giải quyết vấn đề gì</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Đảm bảo thiết bị in – copy – scan tại các điểm giao dịch hoạt động liên tục, vật tư không bị thiếu, và chi phí in được quản lý theo từng đơn vị.</p>
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
          <span class="text-[15px] text-gray-600 leading-relaxed">Nhiều điểm giao dịch phân tán, mỗi nơi một số lượng nhỏ thiết bị nhưng đòi hỏi hoạt động liên tục.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Thiết bị dừng tại quầy giao dịch ảnh hưởng trực tiếp đến khách hàng, không có thời gian chờ xử lý dài.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Chứng từ giấy phát sinh khối lượng lớn, cần scan và lưu trữ theo quy định nội bộ.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Yêu cầu bảo mật tài liệu cao, việc in và scan phải kiểm soát được.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Vật tư cho nhiều đời máy ở nhiều địa điểm khó quản lý tồn và dễ thiếu cục bộ.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Chi phí in phân tán theo chi nhánh nên khó tổng hợp và khó tối ưu.</span>
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
        <div class="lg:col-span-8"><p class="text-[15.5px] text-gray-600 leading-[1.85] mb-6">Với ngành ngân hàng, điều quan trọng nhất không phải cấu hình máy mà là thời gian thiết bị dừng. Vì vậy giải pháp được thiết kế quanh tính liên tục: cấu hình phù hợp, vật tư luôn có, và cam kết thời gian xử lý.</p><ul class="grid grid-cols-1 md:grid-cols-1 gap-x-10 gap-y-3.5">
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Chuẩn hóa cấu hình theo loại điểm: máy đa chức năng A3 cho khối văn phòng, máy A4 cho quầy giao dịch, máy scan cho khu vực xử lý chứng từ.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Chuẩn hóa số lượng dòng máy để giảm số loại vật tư phải quản lý trên toàn hệ thống.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Quản lý vật tư tập trung, cung ứng theo định mức và theo sản lượng thực tế của từng điểm.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Quản lý in ấn theo hệ thống với counter theo mã máy và báo cáo sản lượng theo đơn vị.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Cam kết SLA theo cấp độ, có phương án thiết bị thay thế cho các điểm trọng yếu.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Máy scan chứng từ tốc độ cao cho khu vực xử lý hồ sơ và lưu trữ.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Dịch vụ kỹ thuật và bảo trì định kỳ, có biên bản theo từng lần thực hiện.</span>
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
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top"><a href="/san-pham/photocopy-may-da-chuc-nang/" class="text-[#181923] hover:text-[#1A9900] transition">Máy photocopy – máy đa chức năng A3</a></th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Khối văn phòng và phòng nghiệp vụ</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top"><a href="/san-pham/may-in-laser/" class="text-[#181923] hover:text-[#1A9900] transition">Máy in laser A4 – máy đa chức năng A4</a></th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Quầy giao dịch và phòng ban</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top"><a href="/san-pham/may-scan-so-hoa/" class="text-[#181923] hover:text-[#1A9900] transition">Máy scan tốc độ cao</a></th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Scan chứng từ và hồ sơ khách hàng</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top"><a href="/san-pham/vat-tu-linh-kien-tieu-hao/" class="text-[#181923] hover:text-[#1A9900] transition">Vật tư – linh kiện – tiêu hao</a></th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Cung ứng theo định mức cho nhiều địa điểm</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top"><a href="/san-pham/thiet-bi-van-phong-hoi-hop/" class="text-[#181923] hover:text-[#1A9900] transition">Thiết bị văn phòng – hội họp</a></th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Trang bị phòng họp và khu vực làm việc</td></tr>
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
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Khảo sát hệ thống điểm</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Xác định số điểm, loại điểm, số thiết bị mỗi điểm, sản lượng và yêu cầu về tính liên tục.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">2</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 2</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Chuẩn hóa cấu hình</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Rút gọn số dòng máy để giảm số loại vật tư, chọn cấu hình theo loại điểm.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">3</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 3</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Thiết kế phương án vật tư</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Xác định định mức và cách cung ứng cho từng điểm, tránh thiếu cục bộ.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">4</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 4</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Chốt SLA theo loại điểm</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Điểm trọng yếu có cam kết chặt hơn và có phương án thiết bị thay thế.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">5</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 5</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Triển khai theo đợt</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Lắp đặt, chốt counter đầu kỳ và đào tạo sử dụng theo từng đợt để không ảnh hưởng hoạt động.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">6</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 6</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Vận hành và báo cáo</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Cung ứng vật tư, bảo trì theo lịch, xử lý sự cố theo SLA và báo cáo sản lượng theo đơn vị.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">7</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 7</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Đánh giá định kỳ</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Rà soát thiết bị hiệu suất thấp, điều chỉnh cấu hình và định mức theo số liệu thực tế.</p>
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
          <span class="text-[15px] text-gray-600 leading-relaxed">Cam kết thời gian xử lý phân theo mức độ trọng yếu của từng điểm.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Phương án thiết bị thay thế cho các điểm không được phép dừng.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Cung ứng vật tư theo định mức, có theo dõi tồn tại từng điểm.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Bảo trì phòng ngừa theo lịch, có biên bản sau mỗi lần thực hiện.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Counter theo mã máy và báo cáo sản lượng theo đơn vị để phục vụ phân bổ chi phí.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Tuân thủ quy định bảo mật tài liệu và quy trình kiểm soát nội bộ của tổ chức.</span>
        </li>
      </ul>
        <div class="mt-8">
      <div class="overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-200 bg-white">
          <caption class="text-left px-5 py-4 bg-white border border-b-0 border-gray-200 text-sm font-bold text-[#181923] uppercase tracking-wider">Cam kết dịch vụ (SLA) đề xuất</caption>
          <thead class="bg-[#181924]"><tr><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Cấp độ sự cố</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Tiếp nhận</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Mục tiêu xử lý</th></tr></thead>
          <tbody>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">P1 – Thiết bị tại điểm giao dịch dừng</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Tiếp nhận ≤ 30 phút</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Mục tiêu có mặt ≤ 2 giờ; thay thiết bị nếu không khắc phục được</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">P2 – Ảnh hưởng chức năng chính</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Tiếp nhận ≤ 30 phút</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Xử lý trong ngày làm việc</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">P3 – Lỗi nhỏ</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Tiếp nhận trong ngày</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Xử lý theo lịch bảo trì</td></tr>
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
        <div class="lg:col-span-8"><p class="text-[15.5px] text-gray-600 leading-[1.85] mb-7">Với ngân hàng, chi phí lớn nhất của một thiết bị hỏng không phải tiền sửa, mà là thời gian quầy giao dịch không phục vụ được khách hàng.</p>
      <div class="overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-200 bg-white">
          
          <thead class="bg-[#181924]"><tr><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Hạng mục chi phí</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Phương án mua</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Phương án thuê / dịch vụ</th></tr></thead>
          <tbody>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Thời gian thiết bị dừng</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Không có hợp đồng dịch vụ: xử lý theo từng lần, không cam kết</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Có hợp đồng: cam kết SLA và phương án thay thế</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Quản lý vật tư nhiều điểm</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Mỗi điểm tự mua: dễ thiếu cục bộ, giá không thống nhất</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Cung ứng tập trung theo định mức: tồn kiểm soát được</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Số loại vật tư phải quản</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Nhiều dòng máy: nhiều mã vật tư</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Chuẩn hóa dòng máy: giảm số mã phải quản</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Phân bổ chi phí in</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Không có counter: khó phân bổ theo đơn vị</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Có counter và báo cáo: phân bổ và giải trình được</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Mở rộng thêm điểm mới</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Mỗi lần là một lần mua sắm riêng</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Theo hợp đồng khung: triển khai nhanh theo cấu hình đã chuẩn</td></tr>
          </tbody>
        </table>
      </div>
        <div class="mt-7">
      <div class="border-l-4 border-[#1A9900] bg-[#f5f8fb] px-6 py-5">
        <p class="text-[14.5px] text-gray-600 leading-relaxed">Năng lực đã có: website của Hương Sơn công bố việc cung cấp máy photocopy cho hệ thống Vietcombank trong các năm 2022–2024, trong đó năm 2024 là lô 127 máy Toshiba. Nội dung này đang được rà soát về hồ sơ và quyền công bố trước khi trình bày như một case study đầy đủ.</p>
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
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Hương Sơn đã triển khai cho ngân hàng nào chưa?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Website của Hương Sơn công bố việc cung cấp máy photocopy cho hệ thống Vietcombank trong các năm 2022–2024, trong đó năm 2024 là lô 127 máy Toshiba. Hương Sơn đang hoàn thiện hồ sơ và xác nhận quyền công bố trước khi trình bày chi tiết dưới dạng case study.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Hương Sơn phục vụ được bao nhiêu điểm giao dịch?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Phụ thuộc địa bàn, vì cam kết thời gian xử lý chỉ có giá trị khi đội kỹ thuật tiếp cận được trong thời gian cam kết. Hương Sơn xác nhận phạm vi phục vụ theo danh sách địa điểm cụ thể trước khi ký cam kết SLA.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Có giải pháp in bảo mật (secure print) không?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Hương Sơn triển khai theo mô hình đa thương hiệu và làm việc với đối tác phần mềm cho phần kiểm soát in. Phạm vi cụ thể được xác định sau khảo sát yêu cầu kiểm soát nội bộ của tổ chức.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Vật tư cho nhiều đời máy ở nhiều điểm được quản lý thế nào?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Bằng hai việc: chuẩn hóa số dòng máy để giảm số mã vật tư, và cung ứng theo định mức căn cứ sản lượng thực tế của từng điểm thay vì để mỗi điểm tự mua.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Có báo cáo sản lượng theo từng chi nhánh không?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Có, khi triển khai theo mô hình quản lý in ấn. Counter được chốt theo mã máy và báo cáo tổng hợp theo đơn vị, phục vụ phân bổ chi phí nội bộ.</div>
        </details>
      </div>
        </div>
        <div class="lg:col-span-5" id="tu-van">
          
      <div class="bg-white border border-gray-200 p-6 sm:p-9">
        <h2 class="text-xl sm:text-[26px] font-bold text-[#181923] mb-2">Nhận phương án và báo giá</h2>
        <p class="text-[14.5px] text-gray-500 leading-relaxed mb-7">Hương Sơn phản hồi trong giờ làm việc. Thông tin của Quý đơn vị chỉ dùng để tư vấn và báo giá.</p>
        <form class="lead-form" id="sol-ngan-hang-tai-chinh-form" method="post" action="/api/lead" novalidate>
          
          <input type="hidden" name="page_type" value="solution" />
          <input type="hidden" name="product_model" value="" />
          <input type="hidden" name="solution_slug" value="ngan-hang-tai-chinh" />
          <input type="hidden" name="source_url" value="" data-autofill="url" />
          <input type="hidden" name="referrer" value="" data-autofill="referrer" />
          <input type="hidden" name="utm_source" value="" data-autofill="utm_source" />
          <input type="hidden" name="utm_medium" value="" data-autofill="utm_medium" />
          <input type="hidden" name="utm_campaign" value="" data-autofill="utm_campaign" />
          <input type="hidden" name="utm_term" value="" data-autofill="utm_term" />
          <input type="hidden" name="utm_content" value="" data-autofill="utm_content" />
          <input type="hidden" name="gclid" value="" data-autofill="gclid" />
          <div class="hidden" aria-hidden="true">
            <label for="f-sol-ngan-hang-tai-chinh-hp">Bỏ trống ô này</label>
            <input type="text" id="f-sol-ngan-hang-tai-chinh-hp" name="_hp" tabindex="-1" autocomplete="off" />
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

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-3">Xem thêm</span>
        <h2 class="text-2xl sm:text-[34px] font-bold text-[#181923] leading-tight">Giải pháp liên quan</h2>
      </div><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4"><a href="/giai-phap/quan-ly-van-hanh/" class="border border-gray-200 bg-white px-5 py-4 text-[14.5px] font-bold text-[#181923] hover:border-[#1A9900] hover:text-[#1A9900] transition flex items-center justify-between"><span>Quản lý – Vận hành</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a><a href="/giai-phap/scan-so-hoa/" class="border border-gray-200 bg-white px-5 py-4 text-[14.5px] font-bold text-[#181923] hover:border-[#1A9900] hover:text-[#1A9900] transition flex items-center justify-between"><span>Scan – Số hóa</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a><a href="/dich-vu/bao-tri-sua-chua/" class="border border-gray-200 bg-white px-5 py-4 text-[14.5px] font-bold text-[#181923] hover:border-[#1A9900] hover:text-[#1A9900] transition flex items-center justify-between"><span>Dịch vụ bảo trì – sửa chữa</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a><a href="/du-an/" class="border border-gray-200 bg-white px-5 py-4 text-[14.5px] font-bold text-[#181923] hover:border-[#1A9900] hover:text-[#1A9900] transition flex items-center justify-between"><span>Dự án đã triển khai</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a></div>
    </div>
  </section>

  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/xxx_home-bg_xxx.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Cần phương án cho hệ thống nhiều điểm giao dịch?</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Gửi danh sách địa điểm và số thiết bị hiện có – Hương Sơn xác nhận phạm vi phục vụ, đề xuất chuẩn hóa cấu hình, định mức vật tư và mức SLA phù hợp.</p>
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
