@extends('client.layouts.app')

@section('title', "Nên Thuê Hay Mua Máy Photocopy? Bài Toán Chi Phí & TCO | Hương Sơn")
@section('meta_description', "Phân tích chi tiết nên thuê hay mua máy photocopy: so sánh vốn đầu tư ban đầu, chi phí mực in, khấu hao, rủi ro hỏng hóc và giải pháp tối ưu cho từng đơn vị.")
@section('canonical', "https://huongsonco.com.vn/ve-huong-son/kien-thuc/nen-thue-hay-mua-may-photocopy/")
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
      },
      {
        "@@type": "ListItem",
        "position": 4,
        "name": "Nên thuê hay mua máy photocopy cho doanh nghiệp, trường học? Phân tích chi phí & hiệu quả",
        "item": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/nen-thue-hay-mua-may-photocopy/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "Article",
    "headline": "Nên thuê hay mua máy photocopy cho doanh nghiệp, trường học? Phân tích chi phí & hiệu quả",
    "description": "Bài toán so sánh chi tiết giữa việc đầu tư mua đứt và giải pháp thuê máy photocopy trọn gói: phân tích dòng tiền, chi phí mực in, khấu hao và rủi ro kỹ thuật giúp lãnh đạo đưa ra quyết định mua sắm chính xác nhất.",
    "datePublished": "2026-09-15",
    "dateModified": "2026-09-15",
    "author": {
      "@@id": "https://huongsonco.com.vn/#organization"
    },
    "publisher": {
      "@@id": "https://huongsonco.com.vn/#organization"
    },
    "mainEntityOfPage": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/nen-thue-hay-mua-may-photocopy/",
    "inLanguage": "vi-VN"
  },
  {
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
      {
        "@@type": "Question",
        "name": "Thuê máy photocopy có phải trả thêm tiền mực và linh kiện thay thế không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Tại Hương Sơn, hợp đồng thuê máy photocopy trọn gói đã bao gồm toàn bộ mực in, linh kiện hao mòn (trống drum, gạt, sấy) và công kỹ thuật định kỳ. Khách hàng chỉ cần chuẩn bị giấy in."
        }
      },
      {
        "@@type": "Question",
        "name": "Thời gian ký hợp đồng thuê máy photocopy tối thiểu là bao lâu?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Hương Sơn cung cấp linh hoạt các gói thuê theo nhu cầu: từ gói thuê ngắn hạn vài ngày phục vụ kỳ thi/hội nghị, gói thuê 6 tháng đến các gói dài hạn 12–36 tháng với mức giá ưu đãi nhất."
        }
      },
      {
        "@@type": "Question",
        "name": "Nếu máy photocopy thuê gặp sự cố thì xử lý trong bao lâu?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Theo cam kết SLA của Hương Sơn: Tiếp nhận trong ≤ 30 phút, kỹ thuật viên có mặt tại địa điểm trong ≤ 2 giờ. Nếu sự cố kéo dài quá 24h, Hương Sơn đổi ngay máy tương đương miễn phí."
        }
      }
    ]
  }
]
</script>
@endsection

@section('content')
<section class="bg-[#181924] py-16 lg:py-20 text-white relative">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center space-x-2 text-xs text-gray-400 mb-4 flex-wrap">
        <a href="/" class="hover:text-white transition">Trang chủ</a>
        <span>/</span>
        <a href="/ve-huong-son/" class="hover:text-white transition">Về Hương Sơn</a>
        <span>/</span>
        <a href="/ve-huong-son/kien-thuc/" class="text-[#5eb74c] font-semibold hover:underline">Kiến thức</a>
      </div>
      <div class="max-w-4xl">
        <span class="inline-block bg-[#1A9900] text-white text-[11px] font-bold uppercase tracking-wider px-3 py-1 mb-4 rounded-xs">Cẩm nang tư vấn</span>
        <h1 class="text-2xl sm:text-4xl font-bold text-white leading-tight mb-4">Nên thuê hay mua máy photocopy cho doanh nghiệp, trường học? Phân tích chi phí &amp; hiệu quả</h1>
        <div class="flex items-center space-x-4 text-xs text-gray-300 font-medium">
          <span><i class="fa-regular fa-calendar text-[#5eb74c] mr-1.5"></i>2026-09-15</span>
          <span>•</span>
          <span><i class="fa-regular fa-clock text-[#5eb74c] mr-1.5"></i>6 phút đọc</span>
          <span>•</span>
          <span><i class="fa-solid fa-shield-halved text-[#5eb74c] mr-1.5"></i>Ban Biên Tập Hương Sơn</span>
        </div>
      </div>
    </div>
  </section>
  <section class="py-16 bg-white">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

        <!-- Main article column -->
        <article class="lg:col-span-8">
          <div class="bg-gray-50 border border-gray-200 p-6 mb-10 rounded-sm">
            <p class="font-bold text-xs uppercase tracking-wider text-[#1A9900] mb-3 flex items-center">
              <i class="fa-solid fa-list-ul mr-2"></i>Mục lục bài viết
            </p>
            <ul class="space-y-1"><li class="mb-2"><a href="#dat-van-de" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 1. Đặt vấn đề: Bài toán chi phí in ấn tại các đơn vị</a></li><li class="mb-2"><a href="#khi-nao-nen-mua" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 2. Khi nào đơn vị nên MUA máy photocopy?</a></li><li class="mb-2"><a href="#khi-nao-nen-thue" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 3. Khi nào giải pháp THUÊ máy photocopy vượt trội?</a></li><li class="mb-2"><a href="#bang-so-sanh" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 4. Bảng so sánh trực quan: Mua đứt vs Thuê trọn gói</a></li><li class="mb-2"><a href="#cong-thuc-tco" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 5. Công thức tính Tổng chi phí sở hữu (TCO trong 3 năm)</a></li><li class="mb-2"><a href="#loi-khuyen" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 6. Lời khuyên từ chuyên gia Hương Sơn &amp; Các gói thuê phù hợp</a></li></ul>
          </div>

          <p class="text-lg text-gray-800 leading-relaxed font-medium mb-8 pb-6 border-b border-gray-100 italic">
            "Bài toán so sánh chi tiết giữa việc đầu tư mua đứt và giải pháp thuê máy photocopy trọn gói: phân tích dòng tiền, chi phí mực in, khấu hao và rủi ro kỹ thuật giúp lãnh đạo đưa ra quyết định mua sắm chính xác nhất."
          </p>

          
          <div class="mb-10 p-5 sm:p-6 bg-gradient-to-r from-emerald-50/90 via-green-50/60 to-teal-50/40 border-l-4 border-[#1A9900] rounded-r shadow-xs">
            <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[#1A9900] mb-2.5">
              <i class="fa-solid fa-sparkles text-amber-500"></i>
              <span>Tóm tắt cốt lõi theo chuẩn AEO (Dành cho AI &amp; Tìm kiếm nhanh)</span>
            </div>
            <p class="text-[15.5px] font-semibold text-gray-900 leading-relaxed">
              Doanh nghiệp và trường học nên chọn THUÊ máy photocopy trọn gói nếu muốn tối ưu dòng tiền (0 đồng vốn đầu tư ban đầu), loại bỏ 100% rủi ro hỏng hóc, miễn phí toàn bộ mực in và linh kiện thay thế, kèm cam kết SLA kỹ thuật có mặt xử lý trong 2 giờ và đổi máy mới trong 24 giờ. Chỉ nên MUA đứt nếu có ngân sách đầu tư tài sản cố định chỉ định sẵn hoặc sản lượng in quá ít dưới 1.000 bản/tháng.
            </p>
          </div>
        

          
        <div id="dat-van-de" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">1. Đặt vấn đề: Bài toán chi phí in ấn tại các đơn vị</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Tại hầu hết các trường học, cơ quan Nhà nước và doanh nghiệp, chi phí in ấn tài liệu – sao chụp hồ sơ luôn chiếm một khoản ngân sách thường xuyên đáng kể. Tuy nhiên, khi đối diện với quyết định trang bị thiết bị, nhiều nhà quản lý thường phân vân: <strong>Nên bỏ ra một khoản ngân sách lớn để mua đứt máy photocopy hay nên lựa chọn phương án thuê máy trọn gói hàng tháng?</strong>
              </p>
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Thực tế cho thấy, chi phí mua máy ban đầu chỉ chiếm khoảng 25% – 30% tổng chi phí thực tế trong suốt vòng đời sử dụng (TCO). 70% chi phí còn lại nằm ở mực in, linh kiện thay thế định kỳ, công sửa chữa và hao mòn thiết bị. Việc hiểu rõ bài toán tài chính này sẽ giúp đơn vị tiết kiệm hàng chục đến hàng trăm triệu đồng mỗi năm.
              </p>
            
          </div>
        </div>
        <div id="khi-nao-nen-mua" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">2. Khi nào đơn vị nên MUA máy photocopy?</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Mua đứt máy photocopy là lựa chọn truyền thống và phù hợp nhất trong các trường hợp sau:
              </p>
              <ul class="space-y-3 mb-6 text-[15px] text-gray-600">
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-3 flex-shrink-0"></i><span><strong>Đơn vị có nguồn vốn đầu tư công hoặc ngân sách dự án cố định:</strong> Nguồn vốn được cấp chỉ định cho mua sắm tài sản cố định và không được chuyển thành chi phí vận hành thường xuyên hàng tháng.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-3 flex-shrink-0"></i><span><strong>Sản lượng in rất thấp và không đều đặn:</strong> In dưới 1.000 bản/tháng, máy chủ yếu đặt sẵn để ký duyệt văn bản đột xuất. Khi đó, chi phí định mức thuê hàng tháng có thể không khai thác hết hiệu năng.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-3 flex-shrink-0"></i><span><strong>Đơn vị có sẵn đội ngũ kỹ thuật IT nội bộ:</strong> Có nhân sự chuyên trách hiểu rõ về cơ chế hoạt động, có thể tự xử lý kẹt giấy, vệ sinh gương quét và quản lý mua sắm vật tư.</span></li>
              </ul>
            
          </div>
        </div>
        <div id="khi-nao-nen-thue" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">3. Khi nào giải pháp THUÊ máy photocopy vượt trội?</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Hiện nay, xu hướng chuyển dịch từ "Sở hữu thiết bị" sang "Sử dụng dịch vụ in ấn quản lý" (Managed Print Services) đang chiếm ưu thế tại các tổ chức hiện đại, tiêu biểu như hệ thống ngân hàng (Vietcombank) và các tập đoàn lớn bởi các lý do sau:
              </p>
              <ul class="space-y-3 mb-6 text-[15px] text-gray-600">
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-3 flex-shrink-0"></i><span><strong>Không cần bỏ vốn đầu tư ban đầu:</strong> Thay vì bỏ ra 40 – 90 triệu đồng cho một máy photocopy A3 đa chức năng Toshiba hoặc Ricoh cao cấp, đơn vị chỉ cần chi trả từ 800.000đ – 2.500.000đ mỗi tháng.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-3 flex-shrink-0"></i><span><strong>Trút bỏ 100% rủi ro hỏng hóc & vật tư:</strong> Toàn bộ chi phí mực in chính hãng, trống drum, gạt mực, bột từ, bảo trì định kỳ đều do đơn vị cho thuê (như Hương Sơn) chịu trách nhiệm.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-3 flex-shrink-0"></i><span><strong>Dễ dàng nâng cấp theo quy mô:</strong> Khi nhu cầu in ấn tăng lên hoặc muốn đổi sang máy photocopy màu, đơn vị chỉ cần yêu cầu nâng cấp dòng máy mà không phải thanh lý máy cũ chịu lỗ.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-3 flex-shrink-0"></i><span><strong>Hạch toán chi phí minh bạch:</strong> Hóa đơn VAT dịch vụ thuê máy hàng tháng được hạch toán trực tiếp vào chi phí hoạt động (Opex), giúp tối ưu thuế thu nhập doanh nghiệp.</span></li>
              </ul>
            
          </div>
        </div>
        <div id="bang-so-sanh" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">4. Bảng so sánh trực quan: Mua đứt vs Thuê trọn gói</h2>
          <div class="prose max-w-none text-gray-700">
            
              <div class="overflow-x-auto my-6 border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                  <thead>
                    <tr class="bg-gray-100 text-gray-900 border-b border-gray-200 font-bold">
                      <th class="p-4">Tiêu chí so sánh</th>
                      <th class="p-4 bg-gray-50/50">Phương án MUA ĐỨT máy</th>
                      <th class="p-4 bg-green-50 text-[#1A9900]">Phương án THUÊ TRỌN GÓI</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 text-gray-700">
                    <tr><td class="p-4 font-semibold">Vốn ban đầu</td><td class="p-4">Lớn (40 – 120 triệu đồng/máy)</td><td class="p-4 font-bold text-[#1A9900]">0 VNĐ (Không cần thế chấp)</td></tr>
                    <tr><td class="p-4 font-semibold">Chi phí mực in</td><td class="p-4">Tự mua (Dễ mua phải mực nhái kém chất lượng)</td><td class="p-4 font-bold text-[#1A9900]">Miễn phí 100% (Cung cấp tận nơi)</td></tr>
                    <tr><td class="p-4 font-semibold">Linh kiện thay thế</td><td class="p-4">Tự thanh toán khi hết bảo hành</td><td class="p-4 font-bold text-[#1A9900]">Miễn phí 100% trống, gạt, sấy</td></tr>
                    <tr><td class="p-4 font-semibold">Bảo trì, sửa chữa</td><td class="p-4">Phụ thuộc lịch hẹn ngoài, chờ đợi lâu</td><td class="p-4 font-bold text-[#1A9900]">Kỹ thuật có mặt ≤ 2h, bảo trì định kỳ</td></tr>
                    <tr><td class="p-4 font-semibold">Xử lý máy hỏng nặng</td><td class="p-4">Ngừng trệ công việc, chờ sửa chữa</td><td class="p-4 font-bold text-[#1A9900]">Đổi máy tương đương ngay lập tức trong 24h</td></tr>
                    <tr><td class="p-4 font-semibold">Khấu hao tài sản</td><td class="p-4">Chịu rủi ro giảm giá trị tài sản 20–30%/năm</td><td class="p-4 font-bold text-[#1A9900]">Không chịu rủi ro khấu hao tài sản</td></tr>
                  </tbody>
                </table>
              </div>
            
          </div>
        </div>
        <div id="cong-thuc-tco" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">5. Công thức tính Tổng chi phí sở hữu (TCO trong 3 năm)</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Giả sử văn phòng in trung bình <strong>5.000 bản A4/tháng</strong> (tổng 180.000 bản trong 3 năm):
              </p>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-6">
                <div class="border border-gray-200 p-6 bg-white rounded">
                  <h4 class="font-bold text-gray-900 mb-3 uppercase text-sm border-b pb-2">Nếu mua máy photocopy A3 (Toshiba/Ricoh)</h4>
                  <ul class="space-y-2 text-sm text-gray-600 mb-4">
                    <li>• Giá mua máy mới: ~50.000.000 đ</li>
                    <li>• Tiền mực in (36 lọ x 500k): 18.000.000 đ</li>
                    <li>• Thay trống drum & gạt (3 lần): 9.000.000 đ</li>
                    <li>• Cụm sấy & bảo trì ngoài: 6.000.000 đ</li>
                    <li>• Trừ giá trị thanh lý sau 3 năm: -10.000.000 đ</li>
                  </ul>
                  <p class="text-base font-bold text-red-600 pt-2 border-t">Tổng chi phí thực tế: ~73.000.000 VNĐ</p>
                </div>
                <div class="border border-[#1A9900] p-6 bg-green-50/40 rounded">
                  <h4 class="font-bold text-[#1A9900] mb-3 uppercase text-sm border-b border-green-200 pb-2">Nếu thuê máy trọn gói tại Hương Sơn</h4>
                  <ul class="space-y-2 text-sm text-gray-600 mb-4">
                    <li>• Tiền thuê trọn gói: ~1.200.000 đ/tháng</li>
                    <li>• Đã bao gồm 5.000 bản in/tháng</li>
                    <li>• Đã bao gồm toàn bộ mực in & linh kiện</li>
                    <li>• Đã bao gồm bảo trì & hỗ trợ kỹ thuật tận nơi</li>
                    <li>• Vốn đầu tư ban đầu: 0 VNĐ</li>
                  </ul>
                  <p class="text-base font-bold text-[#1A9900] pt-2 border-t border-green-200">Tổng chi phí 3 năm: ~43.200.000 VNĐ</p>
                </div>
              </div>
              <p class="text-[15.5px] text-gray-600 leading-[1.85]">
                <em>Kết luận:</em> Phương án thuê máy giúp doanh nghiệp <strong>tiết kiệm hơn 40% chi phí</strong> thực tế, đồng thời bảo toàn được dòng tiền mặt lưu động cho các hoạt động kinh doanh cốt lõi.
              </p>
            
          </div>
        </div>
        <div id="loi-khuyen" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">6. Lời khuyên từ chuyên gia Hương Sơn &amp; Các gói thuê phù hợp</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Với hơn 16 năm kinh nghiệm phân phối và cho thuê thiết bị văn phòng, Hương Sơn đề xuất các giải pháp tối ưu cho từng đối tượng khách hàng:
              </p>
              <div class="space-y-4 mb-8">
                <div class="p-5 border border-gray-200 bg-white">
                  <h5 class="font-bold text-gray-900 mb-1">Gói Trường Học & Sở GD&ĐT</h5>
                  <p class="text-sm text-gray-600">Sử dụng các dòng máy photocopy tốc độ 35–55 trang/phút (Toshiba e-STUDIO 3528A / 4528A), công suất chịu tải lớn phục vụ in sao tài liệu học tập, giáo án và đề kiểm tra định kỳ.</p>
                </div>
                <div class="p-5 border border-gray-200 bg-white">
                  <h5 class="font-bold text-gray-900 mb-1">Gói Ngân Hàng & Khối Tài Chính</h5>
                  <p class="text-sm text-gray-600">Máy photocopy đa chức năng bảo mật cao, tích hợp in thẻ từ NFC, phân quyền in theo phòng ban, tốc độ quét 2 mặt siêu tốc để số hóa chứng từ giao dịch.</p>
                </div>
                <div class="p-5 border border-gray-200 bg-white">
                  <h5 class="font-bold text-gray-900 mb-1">Gói Doanh Nghiệp & Nhà Xưởng</h5>
                  <p class="text-sm text-gray-600">Tối ưu chi phí bản in với dòng máy đa chức năng đen trắng hoặc màu tốc độ cao, hỗ trợ in qua mạng LAN/Wi-Fi cho toàn thể cán bộ nhân viên.</p>
                </div>
              </div>
            
          </div>
        </div>
          
        <div class="mt-12 pt-8 border-t border-gray-200">
          <h3 class="text-xl font-bold text-gray-900 mb-6 uppercase tracking-wider text-sm text-[#1A9900]">Câu hỏi thường gặp</h3>
          <div class="space-y-4">
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[#1A9900] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>Thuê máy photocopy có phải trả thêm tiền mực và linh kiện thay thế không?</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">Tại Hương Sơn, hợp đồng thuê máy photocopy trọn gói đã bao gồm toàn bộ mực in, linh kiện hao mòn (trống drum, gạt, sấy) và công kỹ thuật định kỳ. Khách hàng chỉ cần chuẩn bị giấy in.</p>
          </div>
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[#1A9900] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>Thời gian ký hợp đồng thuê máy photocopy tối thiểu là bao lâu?</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">Hương Sơn cung cấp linh hoạt các gói thuê theo nhu cầu: từ gói thuê ngắn hạn vài ngày phục vụ kỳ thi/hội nghị, gói thuê 6 tháng đến các gói dài hạn 12–36 tháng với mức giá ưu đãi nhất.</p>
          </div>
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[#1A9900] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>Nếu máy photocopy thuê gặp sự cố thì xử lý trong bao lâu?</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">Theo cam kết SLA của Hương Sơn: Tiếp nhận trong ≤ 30 phút, kỹ thuật viên có mặt tại địa điểm trong ≤ 2 giờ. Nếu sự cố kéo dài quá 24h, Hương Sơn đổi ngay máy tương đương miễn phí.</p>
          </div></div>
        </div>
          
        <div class="mt-12 pt-8 border-t border-gray-200">
          <h3 class="text-sm font-bold uppercase tracking-wider text-gray-900 mb-4">Bài viết & Dịch vụ liên quan</h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3"><a href="/giai-phap/cho-thue-thiet-bi/" class="flex items-center space-x-2 p-3 bg-white border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Dịch vụ cho thuê máy photocopy trọn gói uy tín</span></a><a href="/cong-cu/tinh-chi-phi-thue-may/" class="flex items-center space-x-2 p-3 bg-white border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Công cụ tính toán chi phí thuê máy tự động</span></a><a href="/nhan-tu-van/bao-gia/" class="flex items-center space-x-2 p-3 bg-white border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Bảng giá cho thuê máy photocopy mới nhất</span></a><a href="/du-an/vietcombank-cung-cap-may-photocopy/" class="flex items-center space-x-2 p-3 bg-white border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Dự án cung cấp máy photocopy cho hệ thống Vietcombank</span></a></div>
        </div>
        </article>

        <!-- Sidebar column -->
        <aside class="lg:col-span-4 space-y-8">
          <div class="bg-gray-50 border border-gray-200 p-6 sticky top-28 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-4 uppercase tracking-wider text-xs text-[#1A9900]">Cần tư vấn thiết bị & dịch vụ?</h4>
            <p class="text-sm text-gray-600 mb-6 leading-relaxed">
              Hương Sơn hỗ trợ tư vấn chọn đúng cấu hình máy photocopy, máy scan, máy in siêu tốc và dự toán chi phí phù hợp nhất cho Quý đơn vị.
            </p>
            <div class="space-y-3">
              <a href="tel:0911138583" data-ga="click_hotline" class="block w-full py-3 px-4 bg-[#1A9900] hover:bg-[#147700] text-white text-center font-bold text-xs uppercase tracking-wider transition rounded-sm">
                <i class="fa-solid fa-phone mr-2"></i>Gọi Hotline: 091.113.8583
              </a>
              <a href="https://zalo.me/0913237302" target="_blank" rel="noopener" class="block w-full py-3 px-4 bg-[#0068FF] hover:bg-[#0052cc] text-white text-center font-bold text-xs uppercase tracking-wider transition rounded-sm">
                <i class="fa-solid fa-comment-dots mr-2"></i>Chat Zalo tư vấn
              </a>
              <a href="/nhan-tu-van/bao-gia/" class="block w-full py-3 px-4 bg-white border border-gray-300 hover:border-[#1A9900] text-gray-800 text-center font-bold text-xs uppercase tracking-wider transition rounded-sm">
                Yêu cầu báo giá chính thức
              </a>
            </div>

            <div class="mt-8 pt-6 border-t border-gray-200">
              <h5 class="text-xs font-bold uppercase tracking-wider text-gray-700 mb-3">Các cẩm nang liên quan</h5>
              <ul class="space-y-2.5 text-xs text-gray-600">
                <li><a href="/ve-huong-son/kien-thuc/nen-thue-hay-mua-may-photocopy/" class="hover:text-[#1A9900] transition block leading-snug">• Nên thuê hay mua máy photocopy cho doanh nghiệp, trường học? Phân tích chi phí &amp; hiệu quả</a></li><li><a href="/ve-huong-son/kien-thuc/huong-dan-chon-may-scan-so-hoa-tai-lieu/" class="hover:text-[#1A9900] transition block leading-snug">• Hướng dẫn lựa chọn máy scan số hóa tài liệu cho cơ quan, trường học &amp; ngân hàng</a></li><li><a href="/ve-huong-son/kien-thuc/tieu-chuan-may-in-de-thi-thpt/" class="hover:text-[#1A9900] transition block leading-snug">• Tiêu chuẩn lựa chọn và vận hành máy in sao đề thi tốt nghiệp THPT an toàn, bảo mật</a></li><li><a href="/ve-huong-son/kien-thuc/so-sanh-may-photocopy-toshiba-va-konica-minolta/" class="hover:text-[#1A9900] transition block leading-snug">• So sánh máy photocopy đa chức năng Toshiba và Konica Minolta: Nên chọn hãng nào?</a></li><li><a href="/ve-huong-son/kien-thuc/cach-chon-muc-in-linh-kien-may-photocopy-chinh-hang/" class="hover:text-[#1A9900] transition block leading-snug">• Cách chọn mực in và linh kiện tiêu hao máy photocopy chính hãng tránh hỏng trống gạt</a></li><li><a href="/ve-huong-son/kien-thuc/quy-trinh-so-hoa-tai-lieu-luu-tru/" class="hover:text-[#1A9900] transition block leading-snug">• Quy trình số hóa hồ sơ, tài liệu lưu trữ cơ quan Nhà nước và trường học từ A đến Z</a></li><li><a href="/ve-huong-son/kien-thuc/dinh-muc-muc-in-cuon-master-duplo-in-de-thi/" class="hover:text-[#1A9900] transition block leading-snug">• Cách tính định mức mực in và cuộn Master máy in siêu tốc Duplo cho kỳ thi THPT</a></li><li><a href="/ve-huong-son/kien-thuc/so-sanh-duplo-dp-x550-va-dp-x850/" class="hover:text-[#1A9900] transition block leading-snug">• So sánh máy in nhân bản siêu tốc Duplo DP-X550 và DP-X850: Lựa chọn nào tối ưu?</a></li><li><a href="/ve-huong-son/kien-thuc/giai-phap-phoi-trang-gap-ghim-tu-dong-duplo/" class="hover:text-[#1A9900] transition block leading-snug">• Giải pháp máy phối trang và giập ghim Duplo: Tự động hóa đóng tập đề thi và tài liệu</a></li><li><a href="/ve-huong-son/kien-thuc/giai-phap-cho-thue-may-photocopy-ngan-hang-bao-mat/" class="hover:text-[#1A9900] transition block leading-snug">• Giải pháp cho thuê máy photocopy cho Ngân hàng: Tiêu chuẩn bảo mật dữ liệu &amp; SLA 2h</a></li><li><a href="/ve-huong-son/kien-thuc/top-may-photocopy-van-phong-cho-thue-chay-nhat/" class="hover:text-[#1A9900] transition block leading-snug">• Top 5 dòng máy photocopy cho thuê được các doanh nghiệp lựa chọn nhiều nhất 2026</a></li><li><a href="/ve-huong-son/kien-thuc/so-sanh-may-scan-ricoh-fi-8170-va-fi-8270/" class="hover:text-[#1A9900] transition block leading-snug">• So sánh máy scan Ricoh fi-8170 và Ricoh fi-8270: Khi nào cần thêm mặt kính phẳng Flatbed?</a></li><li><a href="/ve-huong-son/kien-thuc/so-hoa-hoc-ba-dien-tu-thpt-chuan-moet/" class="hover:text-[#1A9900] transition block leading-snug">• Hướng dẫn số hóa sổ điểm và học bạ điện tử trường học theo chuẩn Bộ GD&amp;ĐT</a></li><li><a href="/ve-huong-son/kien-thuc/muc-in-fansipan-cong-nghe-nhat-ban-danh-gia/" class="hover:text-[#1A9900] transition block leading-snug">• Đánh giá chất lượng mực in FANSIPAN công nghệ Nhật Bản: Tiết kiệm 40% chi phí bản in</a></li><li><a href="/ve-huong-son/kien-thuc/khac-phuc-loi-may-photocopy-mua-nom-am/" class="hover:text-[#1A9900] transition block leading-snug">• 5 cách chống ẩm và khắc phục lỗi kẹt giấy máy photocopy trong mùa nồm miền Bắc</a></li><li><a href="/ve-huong-son/kien-thuc/bang-tra-ma-muc-master-may-in-duplo-toan-tap/" class="hover:text-[#1A9900] transition block leading-snug">• Bảng tra cứu mã mực in và cuộn Master cho tất cả các dòng máy in siêu tốc Duplo</a></li>
              </ul>
            </div>
          </div>
        </aside>

      </div>
    </div>
  </section>
  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/banners/hero_office_solutions_1787899910391.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Quý đơn vị cần giải pháp phù hợp với quy mô thực tế?</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Liên hệ ngay với Hương Sơn để nhận phương án thiết bị, báo giá và khảo sát tận nơi miễn phí.</p>
      </div>
      <div class="flex flex-wrap items-center gap-4 flex-shrink-0">
        <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Yêu cầu tư vấn</a>
        <a href="/san-pham/" class="border border-gray-500 hover:border-[#1A9900] hover:text-[#1A9900] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem sản phẩm</a>
        <a href="tel:0911138583" data-ga="click_hotline" class="text-white font-bold text-sm hover:text-[#1A9900] transition">
          <i class="fa-solid fa-phone text-[#1A9900] mr-2"></i>091.113.8583
        </a>
      </div>
    </div>
  </section>
@endsection
