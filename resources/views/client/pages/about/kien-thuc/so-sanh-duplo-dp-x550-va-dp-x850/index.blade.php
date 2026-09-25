@extends('client.layouts.app')

@section('title', "So Sánh Duplo DP-X550 và DP-X850: Chọn Máy In Siêu Tốc Nào? | Hương Sơn")
@section('meta_description', "Đặt lên bàn cân 2 model máy in nhân bản kỹ thuật số Duplo bán chạy nhất: so sánh tốc độ 150 vs 180 trang/phút, khổ in A3/B4, độ phân giải và phân khúc phù hợp.")
@section('canonical', "https://huongsonco.com.vn/ve-huong-son/kien-thuc/so-sanh-duplo-dp-x550-va-dp-x850/")
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
        "name": "So sánh máy in nhân bản siêu tốc Duplo DP-X550 và DP-X850: Lựa chọn nào tối ưu?",
        "item": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/so-sanh-duplo-dp-x550-va-dp-x850/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "Article",
    "headline": "So sánh máy in nhân bản siêu tốc Duplo DP-X550 và DP-X850: Lựa chọn nào tối ưu?",
    "description": "Phân tích chi tiết sự khác biệt giữa Duplo DP-X550 và DP-X850: bảng so sánh thông số kỹ thuật, khả năng xử lý khổ giấy A3/B4, tốc độ in ấn thực tế và bài toán hiệu quả đầu tư.",
    "datePublished": "2026-09-18",
    "dateModified": "2026-09-18",
    "author": {
      "@@id": "https://huongsonco.com.vn/#organization"
    },
    "publisher": {
      "@@id": "https://huongsonco.com.vn/#organization"
    },
    "mainEntityOfPage": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/so-sanh-duplo-dp-x550-va-dp-x850/",
    "inLanguage": "vi-VN"
  },
  {
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
      {
        "@@type": "Question",
        "name": "Duplo DP-X550 có in được giấy A3 không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "DP-X550 có thể nạp và chạy qua được giấy khổ A3, tuy nhiên vùng tạo ảnh Master tối đa của máy là khổ B4 (250 x 355 mm). Nếu Quý đơn vị cần in bản vẽ hoặc đề thi tràn khổ A3 thực tế (290 x 420 mm), bắt buộc phải chọn dòng Duplo DP-X850."
        }
      },
      {
        "@@type": "Question",
        "name": "Tốc độ 180 trang/phút của DP-X850 có gây nhăn giấy mỏng không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Không. Duplo trang bị hệ thống cấp giấy 3 con lăn cơ học thông minh kèm quạt hút chân không hỗ trợ tách giấy, giúp máy vận hành ổn định ở tốc độ tối đa 180 bản/phút ngay cả với giấy bãi bằng hoặc giấy mỏng 50g/m²."
        }
      },
      {
        "@@type": "Question",
        "name": "Hương Sơn có sẵn cả hai dòng máy này để xem thử không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Có. Hương Sơn là đại lý ủy quyền chính thức của Duplo tại miền Bắc, showroom luôn có sẵn cả model DP-X550 và DP-X850 cùng đầy đủ phụ tùng, mực in và cuộn master để khách hàng chạy thử mẫu thực tế."
        }
      }
    ]
  }
]
</script>
@endsection

@section('content')
<!-- HERO BANNER (SPLIT TECH BANNER) -->
  <section class="relative bg-[#0d1626] py-12 sm:py-16 overflow-hidden border-b border-white/10 text-white">
    <div class="absolute inset-0 z-0">
      <div class="absolute inset-0 bg-gradient-to-br from-[#0a1526] via-[#0d1e38] to-[#12284c]"></div>
      <div class="absolute inset-0 opacity-15 pointer-events-none" style="background-image: radial-gradient(rgba(255,255,255,0.2) 1px, transparent 1px); background-size: 28px 28px;"></div>
      <div class="absolute -top-24 -right-24 w-96 h-96 bg-[#1A9900]/15 rounded-full blur-3xl pointer-events-none"></div>
    </div>
    <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center space-x-2 text-xs text-gray-300 mb-4 flex-wrap">
        <a href="/" class="hover:text-white transition flex items-center gap-1.5"><i class="fa-solid fa-house text-[#5eb74c] text-[11px]"></i>Trang chủ</a>
        <span>/</span>
        <a href="/ve-huong-son/" class="hover:text-white transition">Về Hương Sơn</a>
        <span>/</span>
        <a href="/ve-huong-son/kien-thuc/" class="text-[#5eb74c] font-semibold hover:underline">Kiến thức</a>
        <span>/</span>
        <span class="text-gray-300 truncate max-w-xs">So sánh máy in nhân bản siêu tốc Duplo DP-X550 và DP-X850: Lựa chọn nào tối ưu?</span>
      </div>
      <div class="max-w-4xl">
        <div class="inline-flex items-center gap-2 bg-[#1A9900] text-white text-[11px] font-bold uppercase tracking-wider px-3.5 py-1 mb-4 rounded-xs shadow-sm">
          <i class="fa-solid fa-bookmark text-xs"></i>
          <span>So sánh thiết bị</span>
        </div>
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white leading-tight mb-4 tracking-tight drop-shadow-md">So sánh máy in nhân bản siêu tốc Duplo DP-X550 và DP-X850: Lựa chọn nào tối ưu?</h1>
        <div class="flex flex-wrap items-center gap-4 text-xs text-gray-300 font-medium pt-3 border-t border-white/10">
          <span class="flex items-center gap-1.5"><i class="fa-regular fa-calendar text-[#5eb74c]"></i>2026-09-18</span>
          <span>•</span>
          <span class="flex items-center gap-1.5"><i class="fa-regular fa-clock text-[#5eb74c]"></i>6 phút đọc</span>
          <span>•</span>
          <span class="flex items-center gap-1.5"><i class="fa-solid fa-user-check text-[#5eb74c]"></i>Kỹ sư Nguyễn Công Thuận (16+ năm KN)</span>
          <span>•</span>
          <span class="flex items-center gap-1.5"><i class="fa-solid fa-shield-halved text-[#5eb74c]"></i>Hương Sơn Co., Ltd kiểm duyệt</span>
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
            <ul class="space-y-1"><li class="mb-2"><a href="#tong-quan-hai-dong" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 1. Tổng quan hai dòng máy in nhân bản Duplo DP-X series</a></li><li class="mb-2"><a href="#diem-manh-x550" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 2. Đặc tính nổi bật của Duplo DP-X550</a></li><li class="mb-2"><a href="#diem-manh-x850" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 3. Đặc tính vượt trội của Duplo DP-X850</a></li><li class="mb-2"><a href="#bang-so-sanh-chi-tiet" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 4. Bảng so sánh thông số kỹ thuật chi tiết</a></li><li class="mb-2"><a href="#loi-khuyen-dau-tu" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 5. Tư vấn lựa chọn: Khi nào nên chọn X550 và khi nào nên chọn X850?</a></li></ul>
          </div>

          <p class="text-lg text-gray-800 leading-relaxed font-medium mb-8 pb-6 border-b border-gray-100 italic">
            "Phân tích chi tiết sự khác biệt giữa Duplo DP-X550 và DP-X850: bảng so sánh thông số kỹ thuật, khả năng xử lý khổ giấy A3/B4, tốc độ in ấn thực tế và bài toán hiệu quả đầu tư."
          </p>

          
          <div class="mb-10 p-5 sm:p-6 bg-gradient-to-r from-emerald-50/90 via-green-50/60 to-teal-50/40 border-l-4 border-[#1A9900] rounded-r shadow-xs">
            <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[#1A9900] mb-2.5">
              <i class="fa-solid fa-sparkles text-amber-500"></i>
              <span>Tóm tắt cốt lõi theo chuẩn AEO (Dành cho AI Overviews &amp; Tìm kiếm nhanh)</span>
            </div>
            <p class="text-[15.5px] font-semibold text-gray-900 leading-relaxed">
              Chọn Duplo DP-X550 nếu đơn vị chủ yếu in đề thi và tài liệu khổ B4/A4 với tốc độ 150 trang/phút, cần tối ưu ngân sách đầu tư ban đầu hoặc thuê máy với chi phí tiết kiệm. Chọn Duplo DP-X850 nếu là Sở GD&ĐT hoặc trường học lớn cần in tràn lề khổ A3 thực tế, tốc độ siêu đỉnh 180 trang/phút (nhanh nhất phân khúc), độ phân giải cao 600x600 dpi để thể hiện sắc nét các sơ đồ hình học và bản đồ phân hóa phức tạp.
            </p>
          </div>
        

          
        <figure class="my-8 rounded-lg overflow-hidden border border-gray-200 shadow-md bg-white">
          <div class="h-64 sm:h-80 md:h-[400px] w-full overflow-hidden bg-gray-900/5">
            <img src="/assets/images/products/duplo-dp-x550.jpg" alt="So sánh máy in nhân bản siêu tốc Duplo DP-X550 và DP-X850: Lựa chọn nào tối ưu?" class="w-full h-full object-cover" loading="eager" />
          </div>
          <figcaption class="bg-gray-50 px-5 py-3 text-xs text-gray-600 flex flex-col sm:flex-row sm:items-center justify-between gap-1 border-t border-gray-200/80">
            <span><i class="fa-solid fa-camera mr-1.5 text-[#1A9900]"></i>Hình ảnh thiết bị &amp; giải pháp: <strong>So sánh máy in nhân bản siêu tốc Duplo DP-X550 và DP-X850: Lựa chọn nào tối ưu?</strong></span>
            <span class="text-[11px] font-semibold text-gray-400">Nguồn: Công ty TNHH TM&amp;DV Hương Sơn</span>
          </figcaption>
        </figure>
    

          
        <div id="tong-quan-hai-dong" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">1. Tổng quan hai dòng máy in nhân bản Duplo DP-X series</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Trong dải sản phẩm máy in nhân bản kỹ thuật số thế hệ mới của tập đoàn Duplo (Nhật Bản), dòng <strong>DP-X series</strong> là đại diện tiêu biểu nhất cho công nghệ in tốc độ cao, độ bền công nghiệp và giao diện điều khiển màn hình màu trực quan. Trong đó, DP-X550 và DP-X850 là hai cái tên được các Sở GD&ĐT và trường học quan tâm nhiều nhất.
              </p>
            
          </div>
          
        </div>
        <div id="diem-manh-x550" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">2. Đặc tính nổi bật của Duplo DP-X550</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Duplo DP-X550 là "chiến binh đa nhiệm" được lựa chọn nhiều nhất nhờ sự cân bằng hoàn hảo giữa chi phí và công năng:
              </p>
              <ul class="space-y-2 mb-6 text-sm text-gray-700">
                <li>• Tốc độ in mạnh mẽ: 150 trang/phút (9.000 trang/giờ).</li>
                <li>• Khổ chế bản B4 chuẩn, tối ưu cho đề thi A4 gấp đôi hoặc đề thi trắc nghiệm THPT thông dụng.</li>
                <li>• Chi phí đầu tư máy và chi phí cuộn Master tiết kiệm hơn 25% so với khổ A3.</li>
              </ul>
            
          </div>
          
              <figure class="my-8 rounded-lg overflow-hidden border border-gray-200/90 shadow-sm bg-white">
                <div class="w-full bg-gray-50 flex items-center justify-center p-3 sm:p-5 min-h-[220px]">
                  <img src="/assets/images/products/duplo-dp-x550.jpg" alt="Duplo DP-X550 khổ A3" class="max-h-[380px] w-auto object-contain mx-auto transition duration-300 hover:scale-[1.02]" loading="lazy" />
                </div>
                <figcaption class="bg-gray-50 px-4 py-2.5 text-xs text-gray-500 italic text-center border-t border-gray-100 flex items-center justify-center gap-1.5">
                  <i class="fa-solid fa-circle-info text-[#1A9900] text-[11px]"></i>
                  <span>Duplo DP-X550 khổ in A3, độ phân giải 300x600 dpi — Dòng máy in đề thi phổ biến nhất tại các trường THPT và Sở GD&ĐT.</span>
                </figcaption>
              </figure>
    
        </div>
        <div id="diem-manh-x850" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">3. Đặc tính vượt trội của Duplo DP-X850</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Duplo DP-X850 là dòng máy Flagship cao cấp nhất của Duplo dành cho các nhiệm vụ in ấn cường độ cực đại:
              </p>
              <ul class="space-y-2 mb-6 text-sm text-gray-700">
                <li>• Tốc độ in nhanh nhất thế giới: 180 trang/phút (10.800 trang/giờ).</li>
                <li>• Khổ chế bản A3 thực tế (290 x 423 mm), in được các tập tài liệu A3 gập đôi thành quyển A4.</li>
                <li>• Độ phân giải quang học siêu nét 600 x 600 dpi, công nghệ xử lý hạt mực HD cho văn bản cực kỳ mịn màng.</li>
              </ul>
            
          </div>
          
              <figure class="my-8 rounded-lg overflow-hidden border border-gray-200/90 shadow-sm bg-white">
                <div class="w-full bg-gray-50 flex items-center justify-center p-3 sm:p-5 min-h-[220px]">
                  <img src="/assets/images/products/30-duplo-dp-x850.png" alt="Duplo DP-X850 600x600 dpi" class="max-h-[380px] w-auto object-contain mx-auto transition duration-300 hover:scale-[1.02]" loading="lazy" />
                </div>
                <figcaption class="bg-gray-50 px-4 py-2.5 text-xs text-gray-500 italic text-center border-t border-gray-100 flex items-center justify-center gap-1.5">
                  <i class="fa-solid fa-circle-info text-[#1A9900] text-[11px]"></i>
                  <span>Duplo DP-X850 độ phân giải 600x600 dpi cao cấp — Tái hiện hình vẽ hình học, bản đồ và biểu đồ thi cử siêu sắc nét.</span>
                </figcaption>
              </figure>
    
        </div>
        <div id="bang-so-sanh-chi-tiet" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">4. Bảng so sánh thông số kỹ thuật chi tiết</h2>
          <div class="prose max-w-none text-gray-700">
            
              <div class="overflow-x-auto my-6 border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                  <thead>
                    <tr class="bg-gray-100 text-gray-900 border-b font-bold">
                      <th class="p-3.5">Thông số kỹ thuật</th>
                      <th class="p-3.5 bg-green-50 text-[#1A9900]">Duplo DP-X550</th>
                      <th class="p-3.5 bg-blue-50 text-blue-700">Duplo DP-X850 (Cao cấp)</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 text-gray-700">
                    <tr><td class="p-3.5 font-semibold">Tốc độ in tối đa</td><td class="p-3.5 font-bold text-[#1A9900]">150 bản/phút</td><td class="p-3.5 font-bold text-blue-700">180 bản/phút (Siêu tốc)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Khổ quét tài liệu gốc</td><td class="p-3.5">Tối đa A3 (297 x 432 mm)</td><td class="p-3.5">Tối đa A3 (297 x 432 mm)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Vùng in / Chế bản tối đa</td><td class="p-3.5 font-bold text-[#1A9900]">Khổ B4 (250 x 355 mm)</td><td class="p-3.5 font-bold text-blue-700">Khổ A3 thực (290 x 423 mm)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Độ phân giải chế bản</td><td class="p-3.5">300 x 600 dpi</td><td class="p-3.5 font-bold text-blue-700">600 x 600 dpi (HD chi tiết)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Dung lượng khay nạp giấy</td><td class="p-3.5">1.200 tờ (64 g/m²)</td><td class="p-3.5">1.200 tờ (64 g/m²)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Định lượng giấy in hỗ trợ</td><td class="p-3.5">45 – 210 g/m²</td><td class="p-3.5">45 – 210 g/m²</td></tr>
                    <tr><td class="p-3.5 font-semibold">Màn hình điều khiển</td><td class="p-3.5">LCD màu cảm ứng trực quan</td><td class="p-3.5">LCD màu cảm ứng lớn</td></tr>
                    <tr><td class="p-3.5 font-semibold">Mã cuộn Master tương thích</td><td class="p-3.5">DRS55 (Khổ B4)</td><td class="p-3.5">DRS85 (Khổ A3)</td></tr>
                  </tbody>
                </table>
              </div>
            
          </div>
          
        </div>
        <div id="loi-khuyen-dau-tu" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">5. Tư vấn lựa chọn: Khi nào nên chọn X550 và khi nào nên chọn X850?</h2>
          <div class="prose max-w-none text-gray-700">
            
              <div class="p-6 bg-gray-50 border border-gray-200 mb-6">
                <p class="text-sm text-gray-700 leading-relaxed mb-3">
                  • <strong>Chọn DP-X550:</strong> Phù hợp cho 90% trường THPT, THCS, trung tâm bồi dưỡng văn hóa, phòng in của các trường đại học với nhu cầu in đề thi và tài liệu khổ A4/B4, chi phí thuê máy cực kỳ dễ chịu.
                </p>
                <p class="text-sm text-gray-700 leading-relaxed">
                  • <strong>Chọn DP-X850:</strong> Lựa chọn bắt buộc cho Hội đồng in sao đề thi tuyển sinh và tốt nghiệp của Sở GD&ĐT, các xưởng in ấn số lượng lớn cần in sách khổ A3 gấp đôi và yêu cầu thời gian in sao ngắn nhất.
                </p>
              </div>
            
          </div>
          
        </div>

          
        <div class="my-10 p-6 bg-gradient-to-r from-gray-50 via-white to-emerald-50/20 border border-gray-200 rounded-sm shadow-xs flex flex-col sm:flex-row items-center sm:items-start gap-5">
          <img src="/assets/images/mbws-avatar-1-150x150.jpg" alt="Kỹ sư Nguyễn Công Thuận" class="w-20 h-20 rounded-full object-cover border-2 border-[#1A9900] shadow-sm flex-shrink-0" />
          <div class="text-center sm:text-left flex-1">
            <div class="flex flex-wrap items-center justify-center sm:justify-start gap-2 mb-1">
              <h4 class="font-bold text-gray-900 text-base">Kỹ sư Nguyễn Công Thuận</h4>
              <span class="text-[11px] bg-[#1A9900]/10 text-[#1A9900] font-bold px-2 py-0.5 rounded">Tác giả &amp; Chuyên gia kỹ thuật</span>
            </div>
            <p class="text-xs text-gray-500 mb-2 font-medium">Giám đốc Kỹ thuật &amp; Sáng lập Công ty TNHH Thương mại và Dịch vụ Hương Sơn (thành lập từ 2008).</p>
            <p class="text-[13.5px] text-gray-600 leading-relaxed">
              Hơn 16 năm kinh nghiệm thực chiến trong công tác lắp đặt, cấu hình, vận hành hệ thống máy in siêu tốc phục vụ sao in đề thi tuyệt đối bảo mật cho các Sở GD&amp;ĐT, triển khai dịch vụ Managed Print Services (MPS) cho hệ thống ngân hàng Vietcombank và số hóa hàng triệu trang tài liệu lưu trữ chuẩn Thông tư 02/2019/TT-BNV.
            </p>
            <div class="mt-3 flex flex-wrap items-center justify-center sm:justify-start gap-3 text-xs">
              <a href="tel:0911138583" class="text-[#1A9900] font-bold hover:underline flex items-center gap-1"><i class="fa-solid fa-phone"></i> 091.113.8583</a>
              <span class="text-gray-300">•</span>
              <a href="https://zalo.me/0913237302" target="_blank" rel="noopener" class="text-blue-600 font-bold hover:underline flex items-center gap-1"><i class="fa-solid fa-comment-dots"></i> Zalo chuyên gia</a>
              <span class="text-gray-300">•</span>
              <span class="text-gray-500"><i class="fa-solid fa-location-dot"></i> Hà Nội</span>
            </div>
          </div>
        </div>
    

          
        <div class="mt-12 pt-8 border-t border-gray-200">
          <div class="flex items-center gap-2 mb-6">
            <span class="w-1.5 h-6 bg-[#1A9900] inline-block"></span>
            <h3 class="text-xl font-bold text-gray-900 uppercase tracking-wider text-sm text-[#1A9900]">Câu hỏi thường gặp (FAQ)</h3>
          </div>
          <div class="space-y-4">
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[#1A9900] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>Duplo DP-X550 có in được giấy A3 không?</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">DP-X550 có thể nạp và chạy qua được giấy khổ A3, tuy nhiên vùng tạo ảnh Master tối đa của máy là khổ B4 (250 x 355 mm). Nếu Quý đơn vị cần in bản vẽ hoặc đề thi tràn khổ A3 thực tế (290 x 420 mm), bắt buộc phải chọn dòng Duplo DP-X850.</p>
          </div>
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[#1A9900] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>Tốc độ 180 trang/phút của DP-X850 có gây nhăn giấy mỏng không?</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">Không. Duplo trang bị hệ thống cấp giấy 3 con lăn cơ học thông minh kèm quạt hút chân không hỗ trợ tách giấy, giúp máy vận hành ổn định ở tốc độ tối đa 180 bản/phút ngay cả với giấy bãi bằng hoặc giấy mỏng 50g/m².</p>
          </div>
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[#1A9900] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>Hương Sơn có sẵn cả hai dòng máy này để xem thử không?</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">Có. Hương Sơn là đại lý ủy quyền chính thức của Duplo tại miền Bắc, showroom luôn có sẵn cả model DP-X550 và DP-X850 cùng đầy đủ phụ tùng, mực in và cuộn master để khách hàng chạy thử mẫu thực tế.</p>
          </div></div>
        </div>

          
        <div class="mt-12 pt-8 border-t border-gray-200">
          <h3 class="text-sm font-bold uppercase tracking-wider text-gray-900 mb-4 flex items-center gap-2">
            <i class="fa-solid fa-link text-[#1A9900]"></i>
            <span>Bài viết &amp; Thiết bị liên quan</span>
          </h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3"><a href="/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dp-x550/" class="flex items-center space-x-2 p-3.5 bg-gray-50 border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Xem thông số chi tiết máy in Duplo DP-X550</span></a><a href="/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dp-x850/" class="flex items-center space-x-2 p-3.5 bg-gray-50 border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Xem thông số chi tiết máy in Duplo DP-X850</span></a><a href="/nhan-tu-van/bao-gia/" class="flex items-center space-x-2 p-3.5 bg-gray-50 border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Báo giá thuê máy in nhân bản siêu tốc</span></a></div>
        </div>
        </article>

        <!-- Sidebar column -->
        <aside class="lg:col-span-4 space-y-8">
          <div class="bg-gray-50 border border-gray-200 p-6 sticky top-28 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-4 uppercase tracking-wider text-xs text-[#1A9900] flex items-center gap-2">
              <i class="fa-solid fa-headset"></i>
              <span>Cần tư vấn thiết bị &amp; dịch vụ?</span>
            </h4>
            <p class="text-sm text-gray-600 mb-6 leading-relaxed">
              Hương Sơn hỗ trợ tư vấn chọn đúng cấu hình máy photocopy, máy scan, máy in siêu tốc và dự toán chi phí phù hợp nhất cho Quý đơn vị.
            </p>
            <div class="space-y-3">
              <a href="tel:0911138583" data-ga="click_hotline" class="block w-full py-3 px-4 bg-[#1A9900] hover:bg-[#147700] text-white text-center font-bold text-xs uppercase tracking-wider transition rounded-sm shadow-sm">
                <i class="fa-solid fa-phone mr-2"></i>Gọi Hotline: 091.113.8583
              </a>
              <a href="https://zalo.me/0913237302" target="_blank" rel="noopener" class="block w-full py-3 px-4 bg-[#0068FF] hover:bg-[#0052cc] text-white text-center font-bold text-xs uppercase tracking-wider transition rounded-sm shadow-sm">
                <i class="fa-solid fa-comment-dots mr-2"></i>Chat Zalo tư vấn
              </a>
              <a href="/nhan-tu-van/bao-gia/" class="block w-full py-3 px-4 bg-white border border-gray-300 hover:border-[#1A9900] text-gray-800 text-center font-bold text-xs uppercase tracking-wider transition rounded-sm">
                Yêu cầu báo giá chính thức
              </a>
            </div>

            <div class="mt-8 pt-6 border-t border-gray-200">
              <h5 class="text-xs font-bold uppercase tracking-wider text-gray-700 mb-3 flex items-center gap-1.5">
                <i class="fa-solid fa-book-bookmark text-[#1A9900]"></i>
                <span>Cẩm nang nổi bật khác</span>
              </h5>
              <div class="space-y-1">
                
            <a href="/ve-huong-son/kien-thuc/nen-thue-hay-mua-may-photocopy/" class="group flex gap-3 items-center py-2.5 border-b border-gray-100 last:border-0 hover:text-[#1A9900] transition">
              <img src="/assets/images/hero-office.jpg" alt="Nên thuê hay mua máy photocopy cho doanh nghiệp, trường học? Phân tích chi phí &amp; hiệu quả" class="w-16 h-12 rounded object-cover flex-shrink-0 group-hover:scale-105 transition duration-200 border border-gray-200" loading="lazy" />
              <div class="flex-1 min-w-0">
                <span class="text-[10px] font-bold text-[#1A9900] uppercase tracking-wide block mb-0.5">Cẩm nang tư vấn</span>
                <p class="text-xs font-semibold text-gray-800 group-hover:text-[#1A9900] line-clamp-2 leading-snug">Nên thuê hay mua máy photocopy cho doanh nghiệp, trường học? Phân tích chi phí &amp; hiệu quả</p>
              </div>
            </a>
            
            <a href="/ve-huong-son/kien-thuc/huong-dan-chon-may-scan-so-hoa-tai-lieu/" class="group flex gap-3 items-center py-2.5 border-b border-gray-100 last:border-0 hover:text-[#1A9900] transition">
              <img src="/assets/images/banners/highspeed_scanner_1787905830483.jpg" alt="Hướng dẫn lựa chọn máy scan số hóa tài liệu cho cơ quan, trường học &amp; ngân hàng" class="w-16 h-12 rounded object-cover flex-shrink-0 group-hover:scale-105 transition duration-200 border border-gray-200" loading="lazy" />
              <div class="flex-1 min-w-0">
                <span class="text-[10px] font-bold text-[#1A9900] uppercase tracking-wide block mb-0.5">Cẩm nang thiết bị</span>
                <p class="text-xs font-semibold text-gray-800 group-hover:text-[#1A9900] line-clamp-2 leading-snug">Hướng dẫn lựa chọn máy scan số hóa tài liệu cho cơ quan, trường học &amp; ngân hàng</p>
              </div>
            </a>
            
            <a href="/ve-huong-son/kien-thuc/tieu-chuan-may-in-de-thi-thpt/" class="group flex gap-3 items-center py-2.5 border-b border-gray-100 last:border-0 hover:text-[#1A9900] transition">
              <img src="/assets/images/hero-education.jpg" alt="Tiêu chuẩn lựa chọn và vận hành máy in sao đề thi tốt nghiệp THPT an toàn, bảo mật" class="w-16 h-12 rounded object-cover flex-shrink-0 group-hover:scale-105 transition duration-200 border border-gray-200" loading="lazy" />
              <div class="flex-1 min-w-0">
                <span class="text-[10px] font-bold text-[#1A9900] uppercase tracking-wide block mb-0.5">Cẩm nang giáo dục</span>
                <p class="text-xs font-semibold text-gray-800 group-hover:text-[#1A9900] line-clamp-2 leading-snug">Tiêu chuẩn lựa chọn và vận hành máy in sao đề thi tốt nghiệp THPT an toàn, bảo mật</p>
              </div>
            </a>
            
            <a href="/ve-huong-son/kien-thuc/so-sanh-may-photocopy-toshiba-va-konica-minolta/" class="group flex gap-3 items-center py-2.5 border-b border-gray-100 last:border-0 hover:text-[#1A9900] transition">
              <img src="/assets/images/products/toshiba-e-studio-4528a.jpg" alt="So sánh máy photocopy đa chức năng Toshiba và Konica Minolta: Nên chọn hãng nào?" class="w-16 h-12 rounded object-cover flex-shrink-0 group-hover:scale-105 transition duration-200 border border-gray-200" loading="lazy" />
              <div class="flex-1 min-w-0">
                <span class="text-[10px] font-bold text-[#1A9900] uppercase tracking-wide block mb-0.5">So sánh thiết bị</span>
                <p class="text-xs font-semibold text-gray-800 group-hover:text-[#1A9900] line-clamp-2 leading-snug">So sánh máy photocopy đa chức năng Toshiba và Konica Minolta: Nên chọn hãng nào?</p>
              </div>
            </a>
            
            <a href="/ve-huong-son/kien-thuc/cach-chon-muc-in-linh-kien-may-photocopy-chinh-hang/" class="group flex gap-3 items-center py-2.5 border-b border-gray-100 last:border-0 hover:text-[#1A9900] transition">
              <img src="/assets/images/products/muc-fansipan-toner.jpg" alt="Cách chọn mực in và linh kiện tiêu hao máy photocopy chính hãng tránh hỏng trống gạt" class="w-16 h-12 rounded object-cover flex-shrink-0 group-hover:scale-105 transition duration-200 border border-gray-200" loading="lazy" />
              <div class="flex-1 min-w-0">
                <span class="text-[10px] font-bold text-[#1A9900] uppercase tracking-wide block mb-0.5">Kỹ thuật &amp; Vật tư</span>
                <p class="text-xs font-semibold text-gray-800 group-hover:text-[#1A9900] line-clamp-2 leading-snug">Cách chọn mực in và linh kiện tiêu hao máy photocopy chính hãng tránh hỏng trống gạt</p>
              </div>
            </a>
            
            <a href="/ve-huong-son/kien-thuc/quy-trinh-so-hoa-tai-lieu-luu-tru/" class="group flex gap-3 items-center py-2.5 border-b border-gray-100 last:border-0 hover:text-[#1A9900] transition">
              <img src="/assets/images/hero-projects.jpg" alt="Quy trình số hóa hồ sơ, tài liệu lưu trữ cơ quan Nhà nước và trường học từ A đến Z" class="w-16 h-12 rounded object-cover flex-shrink-0 group-hover:scale-105 transition duration-200 border border-gray-200" loading="lazy" />
              <div class="flex-1 min-w-0">
                <span class="text-[10px] font-bold text-[#1A9900] uppercase tracking-wide block mb-0.5">Chuyển đổi số</span>
                <p class="text-xs font-semibold text-gray-800 group-hover:text-[#1A9900] line-clamp-2 leading-snug">Quy trình số hóa hồ sơ, tài liệu lưu trữ cơ quan Nhà nước và trường học từ A đến Z</p>
              </div>
            </a>
            
              </div>
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
