@extends('client.layouts.app')

@section('title', "Số Hóa Học Bạ Điện Tử & Sổ Điểm Chuẩn Bộ GD&ĐT | Hương Sơn")
@section('meta_description', "Quy trình chuyển đổi số học bạ và sổ điểm cho các trường THPT, THCS: quy chuẩn scan ảnh màu, công nghệ OCR tiếng Việt, đặt tên file theo mã định danh học sinh.")
@section('canonical', "https://huongsonco.com.vn/ve-huong-son/kien-thuc/so-hoa-hoc-ba-dien-tu-thpt-chuan-moet/")
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
        "name": "Hướng dẫn số hóa sổ điểm và học bạ điện tử trường học theo chuẩn Bộ GD&ĐT",
        "item": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/so-hoa-hoc-ba-dien-tu-thpt-chuan-moet/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "Article",
    "headline": "Hướng dẫn số hóa sổ điểm và học bạ điện tử trường học theo chuẩn Bộ GD&ĐT",
    "description": "Cẩm nang hướng dẫn chi tiết quy trình số hóa hồ sơ học sinh, học bạ điện tử và sổ gọi tên ghi điểm phục vụ công tác chuyển đổi số toàn diện ngành giáo dục.",
    "datePublished": "2026-09-22",
    "dateModified": "2026-09-22",
    "author": {
      "@@id": "https://huongsonco.com.vn/#organization"
    },
    "publisher": {
      "@@id": "https://huongsonco.com.vn/#organization"
    },
    "mainEntityOfPage": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/so-hoa-hoc-ba-dien-tu-thpt-chuan-moet/",
    "inLanguage": "vi-VN"
  },
  {
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
      {
        "@@type": "Question",
        "name": "Học bạ có chữ viết tay của giáo viên thì phần mềm OCR có nhận dạng được không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Phần mềm OCR hiện đại của Ricoh nhận dạng rất tốt các trường thông tin in sẵn (tiêu đề môn học, năm học) và các con số điểm số viết tay rõ ràng. Đối với các nhận xét viết tay nét chữ nghiêng hoặc thảo, hệ thống tạo lớp văn bản tìm kiếm gần đúng, đồng thời lưu giữ nguyên vẹn hình ảnh nét bút gốc của giáo viên."
        }
      },
      {
        "@@type": "Question",
        "name": "Mỗi học bạ THPT thường dài bao nhiêu trang và dung lượng file sau khi scan là bao nhiêu?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Một cuốn học bạ THPT đầy đủ 3 năm học thường gồm 12 đến 16 trang. Khi quét màu ở độ phân giải 300 dpi và nén chuẩn PDF/A, dung lượng file chỉ khoảng 1.5MB – 2.5MB, hoàn toàn tối ưu cho việc lưu trữ và truyền tải qua cổng thông tin điện tử."
        }
      },
      {
        "@@type": "Question",
        "name": "Hương Sơn có cung cấp dịch vụ số hóa học bạ trọn gói tại trường không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Có. Hương Sơn nhận hợp đồng triển khai trọn gói: mang máy scan tốc độ cao, máy tính và nhân sự trực tiếp đến phòng lưu trữ của trường học để chỉnh lý, quét, đặt tên và nhập cơ sở dữ liệu với cam kết bảo mật thông tin học sinh tuyệt đối."
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
        <h1 class="text-2xl sm:text-4xl font-bold text-white leading-tight mb-4">Hướng dẫn số hóa sổ điểm và học bạ điện tử trường học theo chuẩn Bộ GD&amp;ĐT</h1>
        <div class="flex items-center space-x-4 text-xs text-gray-300 font-medium">
          <span><i class="fa-regular fa-calendar text-[#5eb74c] mr-1.5"></i>2026-09-22</span>
          <span>•</span>
          <span><i class="fa-regular fa-clock text-[#5eb74c] mr-1.5"></i>7 phút đọc</span>
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
            <ul class="space-y-1"><li class="mb-2"><a href="#yeu-cau-chuyen-doi-so" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 1. Yêu cầu cấp thiết về học bạ điện tử trong ngành GD&amp;ĐT</a></li><li class="mb-2"><a href="#dac-thu-hoc-ba-giay" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 2. Những khó khăn đặc thù khi quét học bạ giấy cũ</a></li><li class="mb-2"><a href="#quy-trinh-5-buoc" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 3. Quy trình 5 bước số hóa học bạ chuẩn quốc gia</a></li><li class="mb-2"><a href="#tieu-chuan-file-dau-ra" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 4. Tiêu chuẩn định dạng tệp và quy tắc đặt tên file</a></li><li class="mb-2"><a href="#thiet-bi-khuyen-nghi" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 5. Thiết bị scan chuyên dụng phù hợp nhất cho trường học</a></li></ul>
          </div>

          <p class="text-lg text-gray-800 leading-relaxed font-medium mb-8 pb-6 border-b border-gray-100 italic">
            "Cẩm nang hướng dẫn chi tiết quy trình số hóa hồ sơ học sinh, học bạ điện tử và sổ gọi tên ghi điểm phục vụ công tác chuyển đổi số toàn diện ngành giáo dục."
          </p>

          
          <div class="mb-10 p-5 sm:p-6 bg-gradient-to-r from-emerald-50/90 via-green-50/60 to-teal-50/40 border-l-4 border-[#1A9900] rounded-r shadow-xs">
            <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[#1A9900] mb-2.5">
              <i class="fa-solid fa-sparkles text-amber-500"></i>
              <span>Tóm tắt cốt lõi theo chuẩn AEO (Dành cho AI &amp; Tìm kiếm nhanh)</span>
            </div>
            <p class="text-[15.5px] font-semibold text-gray-900 leading-relaxed">
              Quy trình số hóa học bạ điện tử và sổ điểm trường học chuẩn Bộ GD&ĐT gồm 5 bước: (1) Kiểm kê và làm phẳng học bạ; (2) Quét scan màu ở độ phân giải 300 dpi bằng máy scan chuyên dụng (Ricoh fi-8170 hoặc fi-8270); (3) Xử lý hình ảnh loại bỏ tạp chất và làm rõ nét chữ viết tay; (4) Chạy nhận dạng OCR tiếng Việt xuất tệp Searchable PDF/A; (5) Đặt tên file tự động theo mã định danh học sinh (Ví dụ: [Mã_Học_Sinh]_[Họ_Tên]_[Khóa_Học].pdf) để đồng bộ lên cơ sở dữ liệu ngành.
            </p>
          </div>
        

          
        <div id="yeu-cau-chuyen-doi-so" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">1. Yêu cầu cấp thiết về học bạ điện tử trong ngành GD&amp;ĐT</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Chuyển đổi số trong giáo dục đang được đẩy mạnh trên toàn quốc. Việc thay thế học bạ giấy truyền thống bằng học bạ điện tử giúp các trường học tiết kiệm hàng ngàn mét vuông kho lưu trữ, tránh nguy cơ cháy nổ, mối mọt và giúp cựu học sinh xin cấp lại bảng điểm chỉ trong vài phút thay vì phải chờ lục tìm hồ sơ lưu trữ hàng tuần.
              </p>
            
          </div>
        </div>
        <div id="dac-thu-hoc-ba-giay" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">2. Những khó khăn đặc thù khi quét học bạ giấy cũ</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Học bạ giấy thường có những đặc tính kỹ thuật rất khó xử lý bằng máy quét văn phòng thông thường:
              </p>
              <ul class="space-y-2 mb-6 text-sm text-gray-700">
                <li>• Được đóng ghim sắt giữa cuốn, ghim lâu năm dễ bị rỉ sét làm ố vàng giấy.</li>
                <li>• Bìa học bạ dày hơn ruột, có dán ảnh học sinh và đóng dấu giáp lai nổi.</li>
                <li>• Mực viết tay và con dấu đỏ qua nhiều năm dễ bị phai nhạt nét chữ.</li>
              </ul>
            
          </div>
        </div>
        <div id="quy-trinh-5-buoc" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">3. Quy trình 5 bước số hóa học bạ chuẩn quốc gia</h2>
          <div class="prose max-w-none text-gray-700">
            
              <div class="space-y-3 mb-6">
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 1: Làm sạch và chuẩn bị hồ sơ</h5><p class="text-xs text-gray-600">Tháo ghim rỉ sét (nếu quét khay cuốn) hoặc vuốt phẳng các nếp gấp trang.</p></div>
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 2: Quét ảnh màu 300 dpi</h5><p class="text-xs text-gray-600">Sử dụng máy scan Ricoh fi-8270 quét mặt phẳng bìa có ảnh giáp lai và nạp khay cuốn cho các trang ruột.</p></div>
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 3: Tối ưu hình ảnh tự động</h5><p class="text-xs text-gray-600">Tự động tăng cường độ tương phản, làm đậm nét chữ mờ và loại bỏ vết ố vàng nền giấy.</p></div>
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 4: Nhận dạng OCR và ghép nối tệp</h5><p class="text-xs text-gray-600">Ghép toàn bộ các trang thành 1 file duy nhất định dạng Searchable PDF/A.</p></div>
                <div class="p-4 bg-white border border-gray-200"><h5 class="font-bold text-gray-900 text-sm mb-1 text-[#1A9900]">Bước 5: Lập chỉ mục và đặt tên file tự động</h5><p class="text-xs text-gray-600">Đổi tên file theo cấu trúc chuẩn: [MaDinhDanh]_[HoTen]_[NamSinh].pdf để nhập CSDL.</p></div>
              </div>
            
          </div>
        </div>
        <div id="tieu-chuan-file-dau-ra" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">4. Tiêu chuẩn định dạng tệp và quy tắc đặt tên file</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Tệp số hóa đạt chuẩn phải là <strong>PDF/A (ISO 19005)</strong> đảm bảo hiển thị đồng nhất trên mọi thiết bị và giữ nguyên giá trị pháp lý lưu trữ vĩnh viễn theo quy định của Cục Văn thư và Lưu trữ Nhà nước.
              </p>
            
          </div>
        </div>
        <div id="thiet-bi-khuyen-nghi" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">5. Thiết bị scan chuyên dụng phù hợp nhất cho trường học</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Hương Sơn khuyến nghị model <strong>Ricoh fi-8270</strong> hoặc tổ hợp <strong>Ricoh fi-8170 + Flatbed rời</strong> cho các trường học và phòng GD&ĐT để đạt năng suất quét 300–500 cuốn học bạ mỗi ngày.
              </p>
            
          </div>
        </div>
          
        <div class="mt-12 pt-8 border-t border-gray-200">
          <h3 class="text-xl font-bold text-gray-900 mb-6 uppercase tracking-wider text-sm text-[#1A9900]">Câu hỏi thường gặp</h3>
          <div class="space-y-4">
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[#1A9900] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>Học bạ có chữ viết tay của giáo viên thì phần mềm OCR có nhận dạng được không?</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">Phần mềm OCR hiện đại của Ricoh nhận dạng rất tốt các trường thông tin in sẵn (tiêu đề môn học, năm học) và các con số điểm số viết tay rõ ràng. Đối với các nhận xét viết tay nét chữ nghiêng hoặc thảo, hệ thống tạo lớp văn bản tìm kiếm gần đúng, đồng thời lưu giữ nguyên vẹn hình ảnh nét bút gốc của giáo viên.</p>
          </div>
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[#1A9900] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>Mỗi học bạ THPT thường dài bao nhiêu trang và dung lượng file sau khi scan là bao nhiêu?</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">Một cuốn học bạ THPT đầy đủ 3 năm học thường gồm 12 đến 16 trang. Khi quét màu ở độ phân giải 300 dpi và nén chuẩn PDF/A, dung lượng file chỉ khoảng 1.5MB – 2.5MB, hoàn toàn tối ưu cho việc lưu trữ và truyền tải qua cổng thông tin điện tử.</p>
          </div>
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[#1A9900] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>Hương Sơn có cung cấp dịch vụ số hóa học bạ trọn gói tại trường không?</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">Có. Hương Sơn nhận hợp đồng triển khai trọn gói: mang máy scan tốc độ cao, máy tính và nhân sự trực tiếp đến phòng lưu trữ của trường học để chỉnh lý, quét, đặt tên và nhập cơ sở dữ liệu với cam kết bảo mật thông tin học sinh tuyệt đối.</p>
          </div></div>
        </div>
          
        <div class="mt-12 pt-8 border-t border-gray-200">
          <h3 class="text-sm font-bold uppercase tracking-wider text-gray-900 mb-4">Bài viết & Dịch vụ liên quan</h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3"><a href="/giai-phap/giao-duc/so-hoa-ho-so-truong-hoc/" class="flex items-center space-x-2 p-3 bg-white border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Giải pháp số hóa hồ sơ trường học trọn gói</span></a><a href="/san-pham/may-scan-so-hoa/" class="flex items-center space-x-2 p-3 bg-white border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Danh mục máy scan Ricoh chính hãng</span></a><a href="/nhan-tu-van/khao-sat-so-hoa/" class="flex items-center space-x-2 p-3 bg-white border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Đăng ký nhận phương án số hóa học bạ miễn phí</span></a></div>
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
