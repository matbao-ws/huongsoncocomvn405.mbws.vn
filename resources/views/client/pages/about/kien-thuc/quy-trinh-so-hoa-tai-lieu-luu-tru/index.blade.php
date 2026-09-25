@extends('client.layouts.app')

@section('title', "Quy Trình Số Hóa Tài Liệu Lưu Trữ Chuẩn Quốc Gia | Hương Sơn")
@section('meta_description', "Hướng dẫn 6 bước số hóa hồ sơ tài liệu lưu trữ: chuẩn bị tài liệu, quét scan, xử lý ảnh, OCR nhận dạng văn bản, đặt tên file, kiểm tra chất lượng và nhập CSDL.")
@section('canonical', "https://huongsonco.com.vn/ve-huong-son/kien-thuc/quy-trinh-so-hoa-tai-lieu-luu-tru/")
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
        "name": "Quy trình số hóa hồ sơ, tài liệu lưu trữ cơ quan Nhà nước và trường học từ A đến Z",
        "item": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/quy-trinh-so-hoa-tai-lieu-luu-tru/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "Article",
    "headline": "Quy trình số hóa hồ sơ, tài liệu lưu trữ cơ quan Nhà nước và trường học từ A đến Z",
    "description": "Cẩm nang hướng dẫn đầy đủ 6 bước chuẩn hóa trong quy trình số hóa tài liệu lưu trữ theo Thông tư 02/2019/TT-BNV: tiêu chuẩn kỹ thuật quét ảnh, phần mềm OCR nhận dạng chữ và phương pháp kiểm soát chất lượng dữ liệu đầu ra.",
    "datePublished": "2026-09-15",
    "dateModified": "2026-09-15",
    "author": {
      "@@id": "https://huongsonco.com.vn/#organization"
    },
    "publisher": {
      "@@id": "https://huongsonco.com.vn/#organization"
    },
    "mainEntityOfPage": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/quy-trinh-so-hoa-tai-lieu-luu-tru/",
    "inLanguage": "vi-VN"
  },
  {
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
      {
        "@@type": "Question",
        "name": "Tài liệu số hóa nên lưu trữ dưới định dạng nào là tốt nhất?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Theo Thông tư 02/2019/TT-BNV của Bộ Nội vụ, định dạng số hóa chuẩn cho văn bản giấy là tệp PDF hoặc PDF/A (bản quét màu hoặc đen trắng có lớp văn bản OCR tìm kiếm được), độ phân giải từ 200–300 dpi."
        }
      },
      {
        "@@type": "Question",
        "name": "Tài liệu cũ, rách nát hoặc có ghim dập có số hóa được không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Được. Trước khi đưa vào máy scan, tài liệu phải qua khâu chỉnh lý sơ bộ: tháo ghim kẹp, vuốt phẳng mép giấy, dán gia cố các vết rách bằng băng dính chuyên dụng không axit. Với tài liệu quý hiếm quá mỏng, sẽ sử dụng máy scan mặt phẳng (Flatbed) hoặc máy scan không chạm (như Ricoh SV600)."
        }
      },
      {
        "@@type": "Question",
        "name": "Hương Sơn có nhận số hóa tài liệu tận nơi tại cơ quan không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Có. Nhằm đảm bảo an toàn bảo mật tài liệu cơ mật theo quy định của Nhà nước, Hương Sơn mang toàn bộ máy scan tốc độ cao, máy trạm xử lý và nhân sự chuyên nghiệp đến thực hiện trực tiếp tại kho lưu trữ của Quý đơn vị."
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
        <span class="inline-block bg-[#1A9900] text-white text-[11px] font-bold uppercase tracking-wider px-3 py-1 mb-4 rounded-xs">Chuyển đổi số</span>
        <h1 class="text-2xl sm:text-4xl font-bold text-white leading-tight mb-4">Quy trình số hóa hồ sơ, tài liệu lưu trữ cơ quan Nhà nước và trường học từ A đến Z</h1>
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
            <ul class="space-y-1"><li class="mb-2"><a href="#tai-sao-can-so-hoa" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 1. Tại sao các cơ quan và trường học bắt buộc phải số hóa?</a></li><li class="mb-2"><a href="#khung-phap-ly" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 2. Khung pháp lý và tiêu chuẩn số hóa (Thông tư 02/2019/TT-BNV)</a></li><li class="mb-2"><a href="#6-buoc-quy-trinh" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 3. Chi tiết 6 bước trong quy trình số hóa chuyên nghiệp</a></li><li class="mb-2"><a href="#thiet-bi-phan-mem" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 4. Thiết bị và phần mềm chuyên dụng phục vụ số hóa</a></li><li class="mb-2"><a href="#kiem-soat-chat-luong" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 5. Kiểm soát chất lượng và bàn giao cơ sở dữ liệu</a></li></ul>
          </div>

          <p class="text-lg text-gray-800 leading-relaxed font-medium mb-8 pb-6 border-b border-gray-100 italic">
            "Cẩm nang hướng dẫn đầy đủ 6 bước chuẩn hóa trong quy trình số hóa tài liệu lưu trữ theo Thông tư 02/2019/TT-BNV: tiêu chuẩn kỹ thuật quét ảnh, phần mềm OCR nhận dạng chữ và phương pháp kiểm soát chất lượng dữ liệu đầu ra."
          </p>

          
          <div class="mb-10 p-5 sm:p-6 bg-gradient-to-r from-emerald-50/90 via-green-50/60 to-teal-50/40 border-l-4 border-[#1A9900] rounded-r shadow-xs">
            <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[#1A9900] mb-2.5">
              <i class="fa-solid fa-sparkles text-amber-500"></i>
              <span>Tóm tắt cốt lõi theo chuẩn AEO (Dành cho AI &amp; Tìm kiếm nhanh)</span>
            </div>
            <p class="text-[15.5px] font-semibold text-gray-900 leading-relaxed">
              Quy trình số hóa hồ sơ tài liệu lưu trữ chuẩn quốc gia theo Thông tư 02/2019/TT-BNV gồm 6 bước chặt chẽ: (1) Khảo sát, phân loại và chỉnh lý bóc ghim tài liệu; (2) Quét scan màu ở độ phân giải 200–300 dpi bằng máy chuyên dụng; (3) Xử lý hình ảnh làm sạch nền và xoay trang; (4) Nhận dạng ký tự quang học OCR tiếng Việt tạo file Searchable PDF/A; (5) Trích xuất metadata lập chỉ mục; (6) Kiểm tra chất lượng và tích hợp vào phần mềm quản lý lưu trữ.
            </p>
          </div>
        

          
        <div id="tai-sao-can-so-hoa" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">1. Tại sao các cơ quan và trường học bắt buộc phải số hóa?</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Kho lưu trữ tài liệu giấy truyền thống đang đối mặt với nhiều thách thức lớn: diện tích kho quá tải, nguy cơ mối mọt, ẩm mốc, hỏa hoạn và đặc biệt là thời gian tra cứu hồ sơ kéo dài từ vài giờ đến vài ngày. Số hóa tài liệu lưu trữ giúp giải quyết triệt để các vấn đề này:
              </p>
              <ul class="space-y-2 mb-6 text-sm text-gray-700">
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-2 flex-shrink-0"></i><span>Bảo tồn vĩnh viễn nội dung tài liệu lịch sử quý giá không bị xuống cấp theo thời gian.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-2 flex-shrink-0"></i><span>Tra cứu thông tin tức thì trong vài giây qua từ khóa (Keyword Search) trên phần mềm quản lý.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-2 flex-shrink-0"></i><span>Chia sẻ dữ liệu đồng thời cho nhiều phòng ban mà không lo thất lạc bản gốc.</span></li>
              </ul>
            
          </div>
        </div>
        <div id="khung-phap-ly" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">2. Khung pháp lý và tiêu chuẩn số hóa (Thông tư 02/2019/TT-BNV)</h2>
          <div class="prose max-w-none text-gray-700">
            
              <div class="bg-gray-50 border border-gray-200 p-5 mb-6">
                <h5 class="font-bold text-gray-900 mb-2">Các quy định bắt buộc theo tiêu chuẩn Nhà nước:</h5>
                <p class="text-sm text-gray-600 mb-2">• <strong>Độ phân giải:</strong> Tối thiểu 200 dpi đến 300 dpi để đảm bảo độ rõ nét khi in lại hoặc phóng to.</p>
                <p class="text-sm text-gray-600 mb-2">• <strong>Định dạng tệp:</strong> Tệp PDF/A-1a hoặc PDF/A-1b hỗ trợ tìm kiếm toàn văn (Searchable PDF).</p>
                <p class="text-sm text-gray-600 mb-2">• <strong>Không chỉnh sửa nội dung:</strong> Hình ảnh quét phải giữ nguyên vẹn dấu giáp lai, chữ ký tươi, con dấu đỏ và không tẩy xóa.</p>
                <p class="text-sm text-gray-600">• <strong>Metadata (Dữ liệu đặc tả):</strong> Đính kèm mã hồ sơ, số hiệu văn bản, trích yếu, tác giả và thời gian tạo lập.</p>
              </div>
            
          </div>
        </div>
        <div id="6-buoc-quy-trinh" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">3. Chi tiết 6 bước trong quy trình số hóa chuyên nghiệp</h2>
          <div class="prose max-w-none text-gray-700">
            
              <div class="space-y-4 mb-6">
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 1: Khảo sát, giao nhận và chỉnh lý tài liệu</h5><p class="text-xs text-gray-600">Lập biên bản giao nhận hồ sơ, tháo ghim bấm, vuốt phẳng mép giấy, phân loại theo kích thước và độ dày mỏng.</p></div>
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 2: Quét scan tài liệu bằng máy chuyên dụng</h5><p class="text-xs text-gray-600">Sử dụng máy scan Ricoh fi-8170 / fi-7600 nạp tự động ADF, quét 2 mặt cùng lúc ở độ phân giải 300 dpi.</p></div>
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 3: Xử lý hình ảnh và kiểm tra trang quét</h5><p class="text-xs text-gray-600">Phần mềm PaperStream IP tự động khử độ nghiêng (Deskew), xóa trang trắng (Blank Page Removal) và làm sạch nền.</p></div>
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 4: Nhận dạng ký tự quang học OCR tiếng Việt</h5><p class="text-xs text-gray-600">Chuyển đổi hình ảnh quét thành tệp PDF/A có thể bôi đen copy chữ và tìm kiếm toàn văn bằng tiếng Việt có dấu.</p></div>
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 5: Nhập trường thông tin quản lý (Metadata Indexing)</h5><p class="text-xs text-gray-600">Nhập các trường thông tin: Số/Ký hiệu, Ngày ban hành, Cơ quan ban hành, Trích yếu nội dung vào cơ sở dữ liệu.</p></div>
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 6: Nghiệm thu, đóng gói và hoàn trả hồ sơ gốc</h5><p class="text-xs text-gray-600">Kiểm tra tỷ lệ chính xác (yêu cầu ≥ 99.5%), bàn giao cơ sở dữ liệu và dập ghim hoàn trả tài liệu về kho lưu trữ.</p></div>
              </div>
            
          </div>
        </div>
        <div id="thiet-bi-phan-mem" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">4. Thiết bị và phần mềm chuyên dụng phục vụ số hóa</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Hương Sơn cung cấp trọn gói tổ hợp thiết bị và phần mềm số hóa đã được kiểm định chất lượng:
              </p>
              <ul class="space-y-2 mb-6 text-sm text-gray-700">
                <li>• <strong>Máy quét:</strong> Ricoh fi-8170 (A4, 70 ppm) và Ricoh fi-7600 (A3, 100 ppm) nạp tự động chống kẹt.</li>
                <li>• <strong>Phần mềm điều khiển:</strong> PaperStream IP & PaperStream Capture bản quyền.</li>
                <li>• <strong>Nhận dạng OCR:</strong> ABBYY FineReader Server hỗ trợ tiếng Việt chính xác trên 98%.</li>
              </ul>
            
          </div>
        </div>
        <div id="kiem-soat-chat-luong" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">5. Kiểm soát chất lượng và bàn giao cơ sở dữ liệu</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Mỗi trang tài liệu quét đều trải qua 2 vòng kiểm soát chất lượng (QC): kiểm tra lỗi mất góc, mờ chữ, lệch trang và sai lệch metadata trước khi ký biên bản nghiệm thu bàn giao chính thức.
              </p>
            
          </div>
        </div>
          
        <div class="mt-12 pt-8 border-t border-gray-200">
          <h3 class="text-xl font-bold text-gray-900 mb-6 uppercase tracking-wider text-sm text-[#1A9900]">Câu hỏi thường gặp</h3>
          <div class="space-y-4">
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[#1A9900] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>Tài liệu số hóa nên lưu trữ dưới định dạng nào là tốt nhất?</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">Theo Thông tư 02/2019/TT-BNV của Bộ Nội vụ, định dạng số hóa chuẩn cho văn bản giấy là tệp PDF hoặc PDF/A (bản quét màu hoặc đen trắng có lớp văn bản OCR tìm kiếm được), độ phân giải từ 200–300 dpi.</p>
          </div>
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[#1A9900] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>Tài liệu cũ, rách nát hoặc có ghim dập có số hóa được không?</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">Được. Trước khi đưa vào máy scan, tài liệu phải qua khâu chỉnh lý sơ bộ: tháo ghim kẹp, vuốt phẳng mép giấy, dán gia cố các vết rách bằng băng dính chuyên dụng không axit. Với tài liệu quý hiếm quá mỏng, sẽ sử dụng máy scan mặt phẳng (Flatbed) hoặc máy scan không chạm (như Ricoh SV600).</p>
          </div>
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[#1A9900] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>Hương Sơn có nhận số hóa tài liệu tận nơi tại cơ quan không?</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">Có. Nhằm đảm bảo an toàn bảo mật tài liệu cơ mật theo quy định của Nhà nước, Hương Sơn mang toàn bộ máy scan tốc độ cao, máy trạm xử lý và nhân sự chuyên nghiệp đến thực hiện trực tiếp tại kho lưu trữ của Quý đơn vị.</p>
          </div></div>
        </div>
          
        <div class="mt-12 pt-8 border-t border-gray-200">
          <h3 class="text-sm font-bold uppercase tracking-wider text-gray-900 mb-4">Bài viết & Dịch vụ liên quan</h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3"><a href="/giai-phap/scan-so-hoa/" class="flex items-center space-x-2 p-3 bg-white border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Giải pháp số hóa tài liệu hồ sơ lưu trữ trọn gói</span></a><a href="/san-pham/may-scan-so-hoa/" class="flex items-center space-x-2 p-3 bg-white border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Danh mục máy scan tài liệu tốc độ cao Ricoh</span></a><a href="/nhan-tu-van/khao-sat-so-hoa/" class="flex items-center space-x-2 p-3 bg-white border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Khảo sát khối lượng tài liệu số hóa tận nơi</span></a></div>
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
