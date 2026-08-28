@extends('client.layouts.app')

@section('title', "Giải pháp in đề thi và in tài liệu số lượng lớn – máy in nhân bản, phối trang | Hương Sơn")
@section('meta_description', "Máy in nhân bản siêu tốc, máy photocopy tốc độ cao và thiết bị hoàn thiện sau in cho nhu cầu in đề thi, biểu mẫu, tài liệu và ấn phẩm nội bộ số lượng lớn.")
@section('canonical', "https://huongsonco.com.vn/giai-phap/in-de-thi-tai-lieu/")
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
        "name": "Giải pháp in đề thi và in tài liệu số lượng lớn",
        "item": "https://huongsonco.com.vn/giai-phap/in-de-thi-tai-lieu/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "Service",
    "@@id": "https://huongsonco.com.vn/giai-phap/in-de-thi-tai-lieu/#service",
    "name": "Giải pháp in đề thi và in tài liệu số lượng lớn",
    "serviceType": "Giải pháp in sản lượng lớn và hoàn thiện sau in",
    "description": "Giải pháp in sản lượng lớn và hoàn thiện sau in: chọn thiết bị theo sản lượng và tiến độ, kèm vật tư, kỹ thuật, phương án dự phòng và thiết bị phối trang – đóng bộ.",
    "provider": {
      "@@id": "https://huongsonco.com.vn/#organization"
    },
    "areaServed": {
      "@@type": "Country",
      "name": "Việt Nam"
    },
    "url": "https://huongsonco.com.vn/giai-phap/in-de-thi-tai-lieu/",
    "audience": [
      {
        "@@type": "Audience",
        "audienceType": "Sở Giáo dục và Đào tạo"
      },
      {
        "@@type": "Audience",
        "audienceType": "Trường học và cơ sở đào tạo"
      },
      {
        "@@type": "Audience",
        "audienceType": "Cơ quan Nhà nước"
      },
      {
        "@@type": "Audience",
        "audienceType": "Trung tâm in của tổ chức"
      },
      {
        "@@type": "Audience",
        "audienceType": "Doanh nghiệp có phòng in nội bộ"
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
            "name": "Máy in nhân bản tốc độ cao"
          }
        },
        {
          "@@type": "Offer",
          "itemOffered": {
            "@@type": "Product",
            "name": "Máy photocopy tốc độ cao A3"
          }
        },
        {
          "@@type": "Offer",
          "itemOffered": {
            "@@type": "Product",
            "name": "Máy phối trang – hoàn thiện sau in"
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
        "name": "Sản lượng bao nhiêu thì nên dùng máy in nhân bản thay vì máy photocopy?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Không có một ngưỡng chung cho mọi trường hợp, vì còn phụ thuộc tiến độ và khổ giấy. Cách làm đúng là tính từ sản lượng và thời gian cho phép để ra công suất cần thiết, rồi mới chọn thiết bị. Hương Sơn thực hiện phần tính toán này trong bước khảo sát."
        }
      },
      {
        "@@type": "Question",
        "name": "Máy phối trang dùng để làm gì?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Để ghép các trang đã in thành bộ theo đúng thứ tự và số lượng, thay cho việc phối thủ công. Với công việc như phối đề thi hoặc đóng bộ tài liệu số lượng lớn, thiết bị này giảm đáng kể thời gian và sai sót."
        }
      },
      {
        "@@type": "Question",
        "name": "Nên mua hay thuê thiết bị in sản lượng lớn?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Nếu nhu cầu phát sinh thường xuyên trong năm thì mua hợp lý hơn. Nếu chỉ phát sinh vài đợt, thuê theo đợt thường hiệu quả hơn vì không phát sinh khấu hao, lưu kho và bảo trì cho thời gian không sử dụng."
        }
      },
      {
        "@@type": "Question",
        "name": "Hương Sơn có cung cấp vật tư cho máy in nhân bản không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Có. Hương Sơn cung cấp Master, mực và linh kiện cho các dòng máy đang phân phối, tính định mức theo sản lượng của từng đợt và có tồn dự phòng."
        }
      },
      {
        "@@type": "Question",
        "name": "Có phương án dự phòng nếu máy hỏng giữa đợt in không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Có. Phương án máy dự phòng được xác định ngay khi chốt giải pháp, theo mức độ quan trọng của công việc, chứ không xử lý khi sự cố đã xảy ra."
        }
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "HowTo",
    "name": "Quy trình triển khai: Giải pháp in đề thi và in tài liệu số lượng lớn",
    "description": "Giải pháp in sản lượng lớn và hoàn thiện sau in: chọn thiết bị theo sản lượng và tiến độ, kèm vật tư, kỹ thuật, phương án dự phòng và thiết bị phối trang – đóng bộ.",
    "step": [
      {
        "@@type": "HowToStep",
        "position": 1,
        "name": "Xác định sản lượng và tiến độ",
        "text": "Số bản cần in, khổ giấy, một mặt hoặc hai mặt, thời gian cho phép và số điểm in."
      },
      {
        "@@type": "HowToStep",
        "position": 2,
        "name": "Tính công suất cần thiết",
        "text": "Từ sản lượng và tiến độ, tính số máy và tốc độ cần thiết – gồm cả biên dự phòng."
      },
      {
        "@@type": "HowToStep",
        "position": 3,
        "name": "Chọn cấu hình thiết bị",
        "text": "Phân bổ giữa máy in nhân bản, máy photocopy tốc độ cao và thiết bị sau in."
      },
      {
        "@@type": "HowToStep",
        "position": 4,
        "name": "Chốt vật tư và dự phòng",
        "text": "Định mức vật tư cho toàn đợt, tồn dự phòng và phương án máy dự phòng."
      },
      {
        "@@type": "HowToStep",
        "position": 5,
        "name": "Triển khai",
        "text": "Giao – lắp – chạy thử trước thời điểm in chính thức, chốt counter đầu kỳ, lập biên bản bàn giao."
      },
      {
        "@@type": "HowToStep",
        "position": 6,
        "name": "Vận hành",
        "text": "Trực kỹ thuật, bổ sung vật tư, ghi nhật ký vận hành và xử lý sự cố theo cấp độ."
      },
      {
        "@@type": "HowToStep",
        "position": 7,
        "name": "Kết thúc đợt",
        "text": "Chốt counter và vật tư thực tế, thu hồi thiết bị nếu là hợp đồng thuê, nghiệm thu và thanh lý."
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
      <img src="/assets/images/hero-education.jpg" alt="Giải pháp in đề thi và in tài liệu số lượng lớn" class="w-full h-full object-cover object-center opacity-25" loading="eager" />
      <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(16, 32, 60, 0.90) 0%, rgba(16, 32, 60, 0.82) 100%);"></div>
    </div>
    <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 py-14 sm:py-16 w-full text-center">
      <span class="font-handwriting text-2xl sm:text-3xl text-[#5eb74c] font-bold block mb-2">Production Print</span>
      <h1 class="text-2xl sm:text-[38px] lg:text-[42px] font-bold text-white mb-4 leading-tight tracking-tight drop-shadow-sm">Giải pháp in đề thi và in tài liệu số lượng lớn</h1>
      <p class="max-w-3xl mx-auto text-gray-200 text-[15px] sm:text-[16px] leading-relaxed">Hương Sơn cung cấp thiết bị và giải pháp cho nhu cầu in sản lượng lớn: máy in nhân bản siêu tốc, máy photocopy tốc độ cao, máy phối trang và thiết bị hoàn thiện sau in – dùng cho in đề thi, biểu mẫu, tài liệu và ấn phẩm nội bộ.</p>
      <nav class="mt-6 text-[13px] text-gray-300 flex items-center justify-center flex-wrap" aria-label="Breadcrumb">
        <a href="/" class="text-gray-300 hover:text-white transition">Trang chủ</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> <a href="/giai-phap/" class="text-gray-300 hover:text-white transition">Giải pháp</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> <span class="text-[#5eb74c] font-semibold" aria-current="page">Giải pháp in đề thi và in tài liệu số lượng lớn</span>
      </nav>
    </div>
  </section>

  <section class="py-10 border-b border-gray-200" style="background-color: rgb(247, 243, 238);">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Trang này là gì</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Giải pháp thiết bị cho công việc in sản lượng lớn dồn vào thời gian ngắn, gồm cả công đoạn hoàn thiện sau in như phối trang và đóng bộ.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Dành cho ai</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Sở GD&ĐT, trường học, cơ quan Nhà nước, trung tâm in của tổ chức và doanh nghiệp có phòng in nội bộ.</p>
          </div>
          <div class="border-l-2 border-[#1A9900] pl-5">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-2">Giải quyết vấn đề gì</p>
            <p class="text-[15px] text-[#181923] leading-relaxed">Chọn đúng thiết bị theo sản lượng và tiến độ, thay vì dùng máy văn phòng cho công việc vượt xa công suất thiết kế của nó.</p>
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
          <span class="text-[15px] text-gray-600 leading-relaxed">Máy photocopy văn phòng không được thiết kế cho sản lượng hàng chục nghìn bản dồn vào vài ngày.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Chi phí một bản in trên máy văn phòng cao hơn nhiều so với máy in nhân bản khi sản lượng lớn.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Công đoạn hoàn thiện sau in (phối trang, đóng bộ) làm thủ công vừa chậm vừa dễ sai sót.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Thiếu vật tư giữa đợt in làm dừng toàn bộ tiến độ.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Không có máy dự phòng thì toàn bộ công việc phụ thuộc vào một thiết bị.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-circle-exclamation text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Chọn thiết bị theo giá thay vì theo sản lượng dẫn tới máy quá tải và hỏng sớm.</span>
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
        <div class="lg:col-span-8"><p class="text-[15.5px] text-gray-600 leading-[1.85] mb-6">Nguyên tắc của Hương Sơn là chọn thiết bị theo sản lượng và tiến độ, không chọn theo giá máy. Với sản lượng lớn, máy in nhân bản có chi phí trên mỗi bản thấp hơn hẳn máy văn phòng.</p><ul class="grid grid-cols-1 md:grid-cols-1 gap-x-10 gap-y-3.5">
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Xác định sản lượng thực tế và thời gian cho phép, từ đó tính công suất thiết bị cần thiết.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Máy in nhân bản siêu tốc làm máy chính cho phần sản lượng lớn.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Máy photocopy tốc độ cao dùng cho phần sản lượng vừa, bản màu hoặc bản cần chất lượng khác.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Máy phối trang và thiết bị hoàn thiện sau in để đóng bộ, phối đề, hoàn thiện tài liệu.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Định mức vật tư cho toàn đợt kèm tồn dự phòng.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Phương án máy dự phòng theo mức độ quan trọng của công việc.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Có thể mua thiết bị hoặc thuê theo đợt, tùy tần suất phát sinh nhu cầu.</span>
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
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top"><a href="/san-pham/may-in-nhan-ban-toc-do-cao/" class="text-[#181923] hover:text-[#1A9900] transition">Máy in nhân bản tốc độ cao</a></th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Máy chính cho sản lượng lớn – chi phí trên mỗi bản thấp</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top"><a href="/san-pham/photocopy-may-da-chuc-nang/" class="text-[#181923] hover:text-[#1A9900] transition">Máy photocopy tốc độ cao A3</a></th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Bổ trợ cho sản lượng vừa và các bản cần chất lượng khác</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top"><a href="/san-pham/may-phoi-trang-hoan-thien-sau-in/" class="text-[#181923] hover:text-[#1A9900] transition">Máy phối trang – hoàn thiện sau in</a></th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Phối trang, đóng bộ, hoàn thiện tài liệu</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top"><a href="/san-pham/vat-tu-linh-kien-tieu-hao/" class="text-[#181923] hover:text-[#1A9900] transition">Vật tư – linh kiện – tiêu hao</a></th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Master, mực, linh kiện theo định mức cả đợt kèm dự phòng</td></tr>
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
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Xác định sản lượng và tiến độ</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Số bản cần in, khổ giấy, một mặt hoặc hai mặt, thời gian cho phép và số điểm in.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">2</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 2</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Tính công suất cần thiết</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Từ sản lượng và tiến độ, tính số máy và tốc độ cần thiết – gồm cả biên dự phòng.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">3</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 3</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Chọn cấu hình thiết bị</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Phân bổ giữa máy in nhân bản, máy photocopy tốc độ cao và thiết bị sau in.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">4</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 4</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Chốt vật tư và dự phòng</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Định mức vật tư cho toàn đợt, tồn dự phòng và phương án máy dự phòng.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">5</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 5</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Triển khai</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Giao – lắp – chạy thử trước thời điểm in chính thức, chốt counter đầu kỳ, lập biên bản bàn giao.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">6</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 6</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Vận hành</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Trực kỹ thuật, bổ sung vật tư, ghi nhật ký vận hành và xử lý sự cố theo cấp độ.</p>
        </li>
        <li class="relative pl-12 pb-8 last:pb-0 border-l border-gray-200 last:border-transparent ml-4">
          <span class="absolute -left-4 top-0 w-8 h-8 bg-[#1A9900] text-white text-[12px] font-bold flex items-center justify-center">7</span>
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-1.5">Bước 7</p>
          <p class="text-[16px] font-bold text-[#181923] mb-1.5">Kết thúc đợt</p>
          <p class="text-[14.5px] text-gray-500 leading-relaxed">Chốt counter và vật tư thực tế, thu hồi thiết bị nếu là hợp đồng thuê, nghiệm thu và thanh lý.</p>
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
          <span class="text-[15px] text-gray-600 leading-relaxed">Kiểm tra và bảo dưỡng thiết bị trước mỗi đợt in, in test đạt trước khi bàn giao.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Định mức vật tư cho toàn đợt và tồn dự phòng tại chỗ.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Kỹ thuật trực theo phương án đã thống nhất cho các đợt in quan trọng.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Phương án máy dự phòng xác định trước, không xử lý theo tình huống.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Nhật ký vận hành ghi sản lượng, vật tư và sự cố theo từng máy.</span>
        </li>
        <li class="flex items-start space-x-3">
          <i class="fa-solid fa-check text-[#1A9900] text-xs mt-1.5 flex-shrink-0"></i>
          <span class="text-[15px] text-gray-600 leading-relaxed">Bảo trì định kỳ cho thiết bị đã bán, theo hợp đồng dịch vụ.</span>
        </li>
      </ul>
        <div class="mt-8">
      <div class="overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-200 bg-white">
          <caption class="text-left px-5 py-4 bg-white border border-b-0 border-gray-200 text-sm font-bold text-[#181923] uppercase tracking-wider">Cam kết dịch vụ (SLA) đề xuất</caption>
          <thead class="bg-[#181924]"><tr><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Cấp độ sự cố</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Tiếp nhận</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Mục tiêu xử lý</th></tr></thead>
          <tbody>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">P1 – Máy dừng hoàn toàn</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Tiếp nhận ≤ 30 phút</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Mục tiêu có mặt ≤ 2 giờ; thay máy dự phòng nếu cần</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">P2 – Ảnh hưởng chức năng chính</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Tiếp nhận ≤ 30 phút</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Xử lý trong ngày</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">P3 – Lỗi nhỏ</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Tiếp nhận trong ngày</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Xử lý theo lịch</td></tr>
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
        <div class="lg:col-span-8"><p class="text-[15.5px] text-gray-600 leading-[1.85] mb-7">Với sản lượng lớn, yếu tố quyết định không phải giá máy mà là chi phí trên mỗi bản in và khả năng hoàn thành đúng tiến độ.</p>
      <div class="overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-200 bg-white">
          
          <thead class="bg-[#181924]"><tr><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Hạng mục chi phí</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Phương án mua</th><th scope="col" class="text-left px-5 py-3.5 text-[13px] font-bold uppercase tracking-wider text-white">Phương án thuê / dịch vụ</th></tr></thead>
          <tbody>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Chi phí trên mỗi bản in</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Máy văn phòng: cao khi sản lượng lớn</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Máy in nhân bản: thấp hơn đáng kể ở sản lượng lớn</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Thời gian hoàn thành</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Máy văn phòng: kéo dài, dễ vỡ tiến độ</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Máy đúng công suất: hoàn thành trong thời gian cho phép</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Tuổi thọ thiết bị</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Máy văn phòng bị dùng quá tải: hỏng sớm</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Máy đúng công suất: vận hành trong dải thiết kế</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Công đoạn sau in</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Làm thủ công: chậm và dễ sai sót</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Máy phối trang: nhanh, đồng nhất</td></tr>
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50"><th scope="row" class="text-left px-5 py-3.5 text-[14px] font-semibold text-[#181923] align-top">Tần suất nhu cầu</th><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Nhu cầu thường xuyên: nên mua</td><td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Nhu cầu theo đợt: nên thuê theo đợt</td></tr>
          </tbody>
        </table>
      </div>
        <div class="mt-7">
      <div class="border-l-4 border-[#1A9900] bg-[#f5f8fb] px-6 py-5">
        <p class="text-[14.5px] text-gray-600 leading-relaxed">Nếu nhu cầu chỉ phát sinh vài đợt mỗi năm, phương án thuê theo đợt thường hiệu quả hơn mua. Xem &lt;a class="text-[#1A9900] font-medium hover:underline" href="/giai-phap/giao-duc/in-de-thi/"&gt;gói thuê máy in đề thi theo kỳ&lt;/a&gt; hoặc &lt;a class="text-[#1A9900] font-medium hover:underline" href="/giai-phap/cho-thue-thiet-bi/"&gt;giải pháp cho thuê thiết bị&lt;/a&gt;.</p>
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
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Sản lượng bao nhiêu thì nên dùng máy in nhân bản thay vì máy photocopy?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Không có một ngưỡng chung cho mọi trường hợp, vì còn phụ thuộc tiến độ và khổ giấy. Cách làm đúng là tính từ sản lượng và thời gian cho phép để ra công suất cần thiết, rồi mới chọn thiết bị. Hương Sơn thực hiện phần tính toán này trong bước khảo sát.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Máy phối trang dùng để làm gì?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Để ghép các trang đã in thành bộ theo đúng thứ tự và số lượng, thay cho việc phối thủ công. Với công việc như phối đề thi hoặc đóng bộ tài liệu số lượng lớn, thiết bị này giảm đáng kể thời gian và sai sót.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Nên mua hay thuê thiết bị in sản lượng lớn?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Nếu nhu cầu phát sinh thường xuyên trong năm thì mua hợp lý hơn. Nếu chỉ phát sinh vài đợt, thuê theo đợt thường hiệu quả hơn vì không phát sinh khấu hao, lưu kho và bảo trì cho thời gian không sử dụng.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Hương Sơn có cung cấp vật tư cho máy in nhân bản không?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Có. Hương Sơn cung cấp Master, mực và linh kiện cho các dòng máy đang phân phối, tính định mức theo sản lượng của từng đợt và có tồn dự phòng.</div>
        </details>
        <details class="group border border-gray-200 bg-white">
          <summary class="flex items-start justify-between gap-4 cursor-pointer px-5 py-4 list-none">
            <span class="text-[15.5px] font-bold text-[#181923] group-open:text-[#1A9900] transition">Có phương án dự phòng nếu máy hỏng giữa đợt in không?</span>
            <i class="fa-solid fa-plus text-[#1A9900] text-xs mt-1.5 flex-shrink-0 group-open:rotate-45 transition-transform"></i>
          </summary>
          <div class="px-5 pb-5 text-[14.5px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4">Có. Phương án máy dự phòng được xác định ngay khi chốt giải pháp, theo mức độ quan trọng của công việc, chứ không xử lý khi sự cố đã xảy ra.</div>
        </details>
      </div>
        </div>
        <div class="lg:col-span-5" id="tu-van">
          
      <div class="bg-white border border-gray-200 p-6 sm:p-9">
        <h2 class="text-xl sm:text-[26px] font-bold text-[#181923] mb-2">Nhận phương án và báo giá</h2>
        <p class="text-[14.5px] text-gray-500 leading-relaxed mb-7">Hương Sơn phản hồi trong giờ làm việc. Thông tin của Quý đơn vị chỉ dùng để tư vấn và báo giá.</p>
        <form class="lead-form" id="sol-in-de-thi-tai-lieu-form" method="post" action="/api/lead" novalidate>
          
          <input type="hidden" name="page_type" value="solution" />
          <input type="hidden" name="product_model" value="" />
          <input type="hidden" name="solution_slug" value="in-de-thi-tai-lieu" />
          <input type="hidden" name="source_url" value="" data-autofill="url" />
          <input type="hidden" name="referrer" value="" data-autofill="referrer" />
          <input type="hidden" name="utm_source" value="" data-autofill="utm_source" />
          <input type="hidden" name="utm_medium" value="" data-autofill="utm_medium" />
          <input type="hidden" name="utm_campaign" value="" data-autofill="utm_campaign" />
          <input type="hidden" name="utm_term" value="" data-autofill="utm_term" />
          <input type="hidden" name="utm_content" value="" data-autofill="utm_content" />
          <input type="hidden" name="gclid" value="" data-autofill="gclid" />
          <div class="hidden" aria-hidden="true">
            <label for="f-sol-in-de-thi-tai-lieu-hp">Bỏ trống ô này</label>
            <input type="text" id="f-sol-in-de-thi-tai-lieu-hp" name="_hp" tabindex="-1" autocomplete="off" />
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
      </div><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4"><a href="/giai-phap/giao-duc/in-de-thi/" class="border border-gray-200 bg-white px-5 py-4 text-[14.5px] font-bold text-[#181923] hover:border-[#1A9900] hover:text-[#1A9900] transition flex items-center justify-between"><span>Cho thuê máy in đề thi</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a><a href="/san-pham/may-in-nhan-ban-toc-do-cao/" class="border border-gray-200 bg-white px-5 py-4 text-[14.5px] font-bold text-[#181923] hover:border-[#1A9900] hover:text-[#1A9900] transition flex items-center justify-between"><span>Máy in nhân bản tốc độ cao</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a><a href="/san-pham/may-phoi-trang-hoan-thien-sau-in/" class="border border-gray-200 bg-white px-5 py-4 text-[14.5px] font-bold text-[#181923] hover:border-[#1A9900] hover:text-[#1A9900] transition flex items-center justify-between"><span>Máy phối trang – sau in</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a><a href="/giai-phap/cho-thue-thiet-bi/" class="border border-gray-200 bg-white px-5 py-4 text-[14.5px] font-bold text-[#181923] hover:border-[#1A9900] hover:text-[#1A9900] transition flex items-center justify-between"><span>Cho thuê thiết bị</span><i class="fa-solid fa-arrow-right text-[11px]"></i></a></div>
    </div>
  </section>

  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/xxx_home-bg_xxx.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Cho Hương Sơn biết sản lượng và tiến độ cần in</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Từ số bản, khổ giấy và thời gian cho phép, Hương Sơn tính công suất cần thiết và đề xuất cấu hình thiết bị, định mức vật tư và phương án dự phòng.</p>
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
