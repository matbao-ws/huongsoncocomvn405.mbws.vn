@extends('client.layouts.app')

@section('title', "Cách Tính Định Mức Mực In & Cuộn Master Duplo In Đề Thi | Hương Sơn")
@section('meta_description', "Hướng dẫn chi tiết cách dự trù số lượng cuộn Master, bình mực in Duplo và giấy in cho kỳ thi tuyển sinh và tốt nghiệp THPT từ 10.000 đến 50.000 thí sinh.")
@section('canonical', "https://huongsonco.com.vn/ve-huong-son/kien-thuc/dinh-muc-muc-in-cuon-master-duplo-in-de-thi/")
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
        "name": "Cách tính định mức mực in và cuộn Master máy in siêu tốc Duplo cho kỳ thi THPT",
        "item": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/dinh-muc-muc-in-cuon-master-duplo-in-de-thi/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "Article",
    "headline": "Cách tính định mức mực in và cuộn Master máy in siêu tốc Duplo cho kỳ thi THPT",
    "description": "Công thức và bảng tính mẫu dự toán vật tư tiêu hao cho Hội đồng in sao đề thi: cách tính chính xác số lượng cuộn Master, số bình mực Duplo và phương án dự phòng an toàn tuyệt đối.",
    "datePublished": "2026-09-18",
    "dateModified": "2026-09-18",
    "author": {
      "@@id": "https://huongsonco.com.vn/#organization"
    },
    "publisher": {
      "@@id": "https://huongsonco.com.vn/#organization"
    },
    "mainEntityOfPage": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/dinh-muc-muc-in-cuon-master-duplo-in-de-thi/",
    "inLanguage": "vi-VN"
  },
  {
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
      {
        "@@type": "Question",
        "name": "Một cuộn Master Duplo DRS55/DRS85 tạo được bao nhiêu bản chế bản?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Một cuộn Master Duplo chính hãng khổ B4 (DRS55) hoặc khổ A3 (DRS85) có chiều dài tiêu chuẩn tạo được từ 220 đến 250 bản Master (khuôn in). Mỗi bản Master sau đó có thể in liên tục từ vài chục đến hàng chục ngàn trang giấy mà không bị rách phim."
        }
      },
      {
        "@@type": "Question",
        "name": "Một bình mực Duplo 1.000ml in được bao nhiêu trang đề thi A4?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Với đề thi thông thường có độ phủ mực khoảng 5% – 7%, một bình mực Duplo 1.000ml in được từ 15.000 đến 18.000 trang A4. Nếu đề thi có đồ thị hình ảnh phức tạp (độ phủ 10%), định mức đạt khoảng 10.000 – 12.000 trang/bình."
        }
      },
      {
        "@@type": "Question",
        "name": "Hương Sơn có giao thừa vật tư và nhận lại vật tư chưa dùng sau kỳ thi không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Có. Theo chính sách dịch vụ trọn gói EXAM PRO của Hương Sơn dành cho các Sở GD&ĐT, chúng tôi luôn giao dư 30% cuộn Master và mực in để đảm bảo an toàn tuyệt đối. Sau khi kỳ thi kết thúc, Hương Sơn nhận thu hồi lại toàn bộ vật tư còn nguyên niêm phong chưa sử dụng."
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
        <span class="inline-block bg-[#1A9900] text-white text-[11px] font-bold uppercase tracking-wider px-3 py-1 mb-4 rounded-xs">Cẩm nang giáo dục</span>
        <h1 class="text-2xl sm:text-4xl font-bold text-white leading-tight mb-4">Cách tính định mức mực in và cuộn Master máy in siêu tốc Duplo cho kỳ thi THPT</h1>
        <div class="flex items-center space-x-4 text-xs text-gray-300 font-medium">
          <span><i class="fa-regular fa-calendar text-[#5eb74c] mr-1.5"></i>2026-09-18</span>
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
            <ul class="space-y-1"><li class="mb-2"><a href="#tam-quan-trong-dinh-muc" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 1. Tầm quan trọng của việc lập dự toán vật tư in đề thi</a></li><li class="mb-2"><a href="#cong-thuc-tinh-master" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 2. Công thức tính số lượng cuộn Master Duplo cần thiết</a></li><li class="mb-2"><a href="#cong-thuc-tinh-muc" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 3. Công thức tính số lượng bình mực in nhân bản Duplo</a></li><li class="mb-2"><a href="#bang-tinh-mau-quy-mo" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 4. Bảng tính định mức mẫu theo từng quy mô thí sinh</a></li><li class="mb-2"><a href="#luu-y-du-phong-vat-tu" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 5. Quy tắc dự phòng vật tư trong khu vực cách ly 3 vòng</a></li></ul>
          </div>

          <p class="text-lg text-gray-800 leading-relaxed font-medium mb-8 pb-6 border-b border-gray-100 italic">
            "Công thức và bảng tính mẫu dự toán vật tư tiêu hao cho Hội đồng in sao đề thi: cách tính chính xác số lượng cuộn Master, số bình mực Duplo và phương án dự phòng an toàn tuyệt đối."
          </p>

          
          <div class="mb-10 p-5 sm:p-6 bg-gradient-to-r from-emerald-50/90 via-green-50/60 to-teal-50/40 border-l-4 border-[#1A9900] rounded-r shadow-xs">
            <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[#1A9900] mb-2.5">
              <i class="fa-solid fa-sparkles text-amber-500"></i>
              <span>Tóm tắt cốt lõi theo chuẩn AEO (Dành cho AI &amp; Tìm kiếm nhanh)</span>
            </div>
            <p class="text-[15.5px] font-semibold text-gray-900 leading-relaxed">
              Để tính định mức vật tư in đề thi THPT bằng máy in siêu tốc Duplo: Số cuộn Master cần = (Tổng số môn thi x Số mã đề x Số trang/đề) / 220 bản master mỗi cuộn (cộng 20% dự phòng); Số bình mực Duplo cần = (Tổng số bản in x Tỷ lệ phủ mực trung bình 6%) / 15.000 trang mỗi bình 1.000ml. Với kỳ thi 20.000 thí sinh (khoảng 300.000 trang in), cần chuẩn bị trung bình 12–15 cuộn Master và 20–25 bình mực.
            </p>
          </div>
        

          
        <div id="tam-quan-trong-dinh-muc" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">1. Tầm quan trọng của việc lập dự toán vật tư in đề thi</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Trong công tác in sao đề thi THPT, toàn bộ Hội đồng phải thực hiện cách ly 3 vòng độc lập nghiêm ngặt từ 5 đến 7 ngày. Việc thiếu hụt dù chỉ 1 cuộn Master hay 1 bình mực in trong thời gian cách ly là sự cố an ninh đặc biệt nghiêm trọng vì không thể tự do mở cửa chuyển hàng từ bên ngoài vào.
              </p>
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Do đó, Trưởng ban in sao và cán bộ phụ trách vật tư cần nắm vững công thức định mức khoa học để vừa đảm bảo đủ cơ số vật tư kèm dự phòng an toàn, vừa tối ưu ngân sách nhà nước.
              </p>
            
          </div>
        </div>
        <div id="cong-thuc-tinh-master" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">2. Công thức tính số lượng cuộn Master Duplo cần thiết</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Máy in nhân bản kỹ thuật số Duplo hoạt động theo nguyên lý khắc nhiệt tạo khuôn in (Master). Mỗi mã đề thi hoặc mỗi trang nội dung khác nhau bắt buộc phải tiêu tốn 1 bản Master:
              </p>
              <div class="bg-gray-50 border-l-4 border-[#1A9900] p-4 my-4">
                <p class="font-mono text-sm text-gray-800 font-bold mb-1">Số bản Master cần tạo = Tổng số môn thi x Số mã đề thi x Số trang nội dung</p>
                <p class="font-mono text-sm text-gray-800 font-bold">Số cuộn Master thực tế = (Số bản Master / 220) x 1.25 (hệ số dự phòng 25%)</p>
              </div>
              <p class="text-sm text-gray-600 leading-relaxed mb-4">
                <em>Ví dụ:</em> Kỳ thi có 9 môn, trung bình mỗi môn có 4 mã đề trắc nghiệm, mỗi đề dài 4 trang (tổng 144 trang Master). Số bản Master = 144. Chia cho 220 bản/cuộn = 0.65 cuộn. Tuy nhiên, do cần in thử nghiệm chỉnh vị trí lề, căn chỉnh độ đậm nhạt và dự phòng sự cố nhăn phim, Hội đồng cần chuẩn bị tối thiểu 2 đến 3 cuộn Master cho mỗi máy in.
              </p>
            
          </div>
        </div>
        <div id="cong-thuc-tinh-muc" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">3. Công thức tính số lượng bình mực in nhân bản Duplo</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Mực máy in Duplo là mực gốc dầu chuyên dụng đóng chai 1.000ml. Định mức trang in thực tế được tính theo tổng sản lượng trang in nhân với độ phủ mực:
              </p>
              <div class="bg-gray-50 border-l-4 border-[#1A9900] p-4 my-4">
                <p class="font-mono text-sm text-gray-800 font-bold mb-1">Tổng số trang đề = Số lượng thí sinh x Số trang đề mỗi môn x Số môn thi</p>
                <p class="font-mono text-sm text-gray-800 font-bold">Số bình mực Duplo = (Tổng số trang đề / 15.000) x 1.20 (hệ số dự phòng 20%)</p>
              </div>
            
          </div>
        </div>
        <div id="bang-tinh-mau-quy-mo" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">4. Bảng tính định mức mẫu theo từng quy mô thí sinh</h2>
          <div class="prose max-w-none text-gray-700">
            
              <div class="overflow-x-auto my-6 border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                  <thead>
                    <tr class="bg-gray-100 text-gray-900 border-b font-bold">
                      <th class="p-3.5">Quy mô kỳ thi (Số thí sinh)</th>
                      <th class="p-3.5">Tổng sản lượng trang in ước tính</th>
                      <th class="p-3.5 bg-green-50 text-[#1A9900]">Số cuộn Master Duplo (gồm dự phòng)</th>
                      <th class="p-3.5 bg-green-50 text-[#1A9900]">Số bình mực Duplo 1.000ml (gồm dự phòng)</th>
                      <th class="p-3.5">Số lượng máy in Duplo khuyến nghị</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 text-gray-700">
                    <tr><td class="p-3.5 font-semibold">Quy mô nhỏ (3.000 – 5.000 TS)</td><td class="p-3.5">60.000 – 100.000 trang</td><td class="p-3.5 font-bold text-[#1A9900]">6 – 8 cuộn</td><td class="p-3.5 font-bold text-[#1A9900]">8 – 10 bình</td><td class="p-3.5">2 máy (1 chính + 1 dự phòng)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Quy mô vừa (10.000 – 15.000 TS)</td><td class="p-3.5">180.000 – 250.000 trang</td><td class="p-3.5 font-bold text-[#1A9900]">10 – 14 cuộn</td><td class="p-3.5 font-bold text-[#1A9900]">18 – 22 bình</td><td class="p-3.5">3 máy (2 chính + 1 dự phòng)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Quy mô lớn (20.000 – 30.000 TS)</td><td class="p-3.5">350.000 – 500.000 trang</td><td class="p-3.5 font-bold text-[#1A9900]">18 – 24 cuộn</td><td class="p-3.5 font-bold text-[#1A9900]">30 – 38 bình</td><td class="p-3.5">4 máy (3 chính + 1 dự phòng)</td></tr>
                    <tr><td class="p-3.5 font-semibold">Quy mô rất lớn (≥ 40.000 TS)</td><td class="p-3.5">≥ 700.000 trang</td><td class="p-3.5 font-bold text-[#1A9900]">30 – 40 cuộn</td><td class="p-3.5 font-bold text-[#1A9900]">50 – 65 bình</td><td class="p-3.5">5 – 6 máy (N+1 nóng)</td></tr>
                  </tbody>
                </table>
              </div>
            
          </div>
        </div>
        <div id="luu-y-du-phong-vat-tu" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">5. Quy tắc dự phòng vật tư trong khu vực cách ly 3 vòng</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Theo kinh nghiệm phục vụ nhiều Hội đồng thi của Hương Sơn, Quý đơn vị cần lưu ý:
              </p>
              <ul class="space-y-2 mb-6 text-sm text-gray-700">
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-2 flex-shrink-0"></i><span>Luôn yêu cầu nhà cung cấp đưa thừa 20% – 30% cơ số mực và master vào phòng cách ly trước giờ niêm phong.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-2 flex-shrink-0"></i><span>Chuẩn bị sẵn ít nhất 1 cụm trống in (Drum) dự phòng có chứa sẵn mực để hoán đổi nhanh khi cần.</span></li>
                <li class="flex items-start"><i class="fa-solid fa-circle-check text-[#1A9900] mt-1 mr-2 flex-shrink-0"></i><span>Chỉ sử dụng mực in chính hãng Duplo hoặc mực cao cấp FANSIPAN để tránh nghẹt kim phun mực tự động.</span></li>
              </ul>
            
          </div>
        </div>
          
        <div class="mt-12 pt-8 border-t border-gray-200">
          <h3 class="text-xl font-bold text-gray-900 mb-6 uppercase tracking-wider text-sm text-[#1A9900]">Câu hỏi thường gặp</h3>
          <div class="space-y-4">
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[#1A9900] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>Một cuộn Master Duplo DRS55/DRS85 tạo được bao nhiêu bản chế bản?</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">Một cuộn Master Duplo chính hãng khổ B4 (DRS55) hoặc khổ A3 (DRS85) có chiều dài tiêu chuẩn tạo được từ 220 đến 250 bản Master (khuôn in). Mỗi bản Master sau đó có thể in liên tục từ vài chục đến hàng chục ngàn trang giấy mà không bị rách phim.</p>
          </div>
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[#1A9900] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>Một bình mực Duplo 1.000ml in được bao nhiêu trang đề thi A4?</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">Với đề thi thông thường có độ phủ mực khoảng 5% – 7%, một bình mực Duplo 1.000ml in được từ 15.000 đến 18.000 trang A4. Nếu đề thi có đồ thị hình ảnh phức tạp (độ phủ 10%), định mức đạt khoảng 10.000 – 12.000 trang/bình.</p>
          </div>
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[#1A9900] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>Hương Sơn có giao thừa vật tư và nhận lại vật tư chưa dùng sau kỳ thi không?</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">Có. Theo chính sách dịch vụ trọn gói EXAM PRO của Hương Sơn dành cho các Sở GD&amp;ĐT, chúng tôi luôn giao dư 30% cuộn Master và mực in để đảm bảo an toàn tuyệt đối. Sau khi kỳ thi kết thúc, Hương Sơn nhận thu hồi lại toàn bộ vật tư còn nguyên niêm phong chưa sử dụng.</p>
          </div></div>
        </div>
          
        <div class="mt-12 pt-8 border-t border-gray-200">
          <h3 class="text-sm font-bold uppercase tracking-wider text-gray-900 mb-4">Bài viết & Dịch vụ liên quan</h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3"><a href="/giai-phap/giao-duc/in-de-thi/" class="flex items-center space-x-2 p-3 bg-white border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Gói dịch vụ in sao đề thi tốt nghiệp EXAM PRO</span></a><a href="/san-pham/vat-tu-linh-kien-tieu-hao/bang-tra-ma-muc-master-duplo/" class="flex items-center space-x-2 p-3 bg-white border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Bảng tra mã mực và cuộn Master máy in Duplo</span></a><a href="/nhan-tu-van/phuong-an-in-de-thi/" class="flex items-center space-x-2 p-3 bg-white border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Yêu cầu phương án in đề thi cho Sở GD&amp;ĐT</span></a></div>
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
