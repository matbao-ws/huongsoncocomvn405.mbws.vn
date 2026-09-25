@extends('client.layouts.app')

@section('title', "Máy Phối Trang & Dập Ghim Duplo Đóng Tập Đề Thi | Hương Sơn")
@section('meta_description', "Giải pháp tự động hóa phối trang, dập ghim và gấp tập đề thi, sách vở bằng hệ thống Duplo DFC-100 / DFC-120: tốc độ 2.400 - 4.200 bộ/giờ, chống sót trang tuyệt đối.")
@section('canonical', "https://huongsonco.com.vn/ve-huong-son/kien-thuc/giai-phap-phoi-trang-gap-ghim-tu-dong-duplo/")
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
        "name": "Giải pháp máy phối trang và giập ghim Duplo: Tự động hóa đóng tập đề thi và tài liệu",
        "item": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/giai-phap-phoi-trang-gap-ghim-tu-dong-duplo/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "Article",
    "headline": "Giải pháp máy phối trang và giập ghim Duplo: Tự động hóa đóng tập đề thi và tài liệu",
    "description": "Giới thiệu giải pháp thiết bị hoàn thiện sau in chuyên nghiệp của Duplo: công nghệ phối trang ma sát thông minh, cơ chế kiểm soát lỗi trang kép và ứng dụng thực tiễn trong các kỳ thi lớn.",
    "datePublished": "2026-09-19",
    "dateModified": "2026-09-19",
    "author": {
      "@@id": "https://huongsonco.com.vn/#organization"
    },
    "publisher": {
      "@@id": "https://huongsonco.com.vn/#organization"
    },
    "mainEntityOfPage": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/giai-phap-phoi-trang-gap-ghim-tu-dong-duplo/",
    "inLanguage": "vi-VN"
  },
  {
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
      {
        "@@type": "Question",
        "name": "Máy phối trang Duplo DFC-100/120 có bao nhiêu khay nạp?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Dòng Duplo DFC-100 có 10 khay nạp giấy, còn DFC-120 có 12 khay nạp. Ngoài ra, người dùng có thể kết nối 2 tháp máy lại với nhau để nâng tổng số khay phối lên tới 20 hoặc 24 trang trong một lượt chạy."
        }
      },
      {
        "@@type": "Question",
        "name": "Máy có bấm ghim và gấp đôi thành tập vở luôn được không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Có. Khi kết nối tháp phối trang DFC với bộ dập ghim Duplo DFC-S II và bộ gấp giấy chuyên dụng, hệ thống sẽ tự động phối trang, bấm ghim giữa và gấp đôi thành tập sách hoặc tập đề thi hoàn chỉnh mà không cần chạm tay."
        }
      },
      {
        "@@type": "Question",
        "name": "Máy có xử lý được các loại giấy mỏng như giấy in đề thi không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Có. Hệ thống tách giấy 3 con lăn cao su của Duplo được tinh chỉnh chính xác, hỗ trợ định lượng giấy từ 50g/m² đến 130g/m² mà không bị dính kép."
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
        <span class="inline-block bg-[#1A9900] text-white text-[11px] font-bold uppercase tracking-wider px-3 py-1 mb-4 rounded-xs">Thiết bị sau in</span>
        <h1 class="text-2xl sm:text-4xl font-bold text-white leading-tight mb-4">Giải pháp máy phối trang và giập ghim Duplo: Tự động hóa đóng tập đề thi và tài liệu</h1>
        <div class="flex items-center space-x-4 text-xs text-gray-300 font-medium">
          <span><i class="fa-regular fa-calendar text-[#5eb74c] mr-1.5"></i>2026-09-19</span>
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
            <ul class="space-y-1"><li class="mb-2"><a href="#nut-that-sau-in" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 1. 'Nút thắt cổ chai' trong khâu đóng gói đề thi và tài liệu</a></li><li class="mb-2"><a href="#nguyen-ly-hoat-dong" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 2. Nguyên lý hoạt động của máy phối trang Duplo DFC series</a></li><li class="mb-2"><a href="#cac-tinh-nang-chong-loi" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 3. Cơ chế kiểm soát lỗi chống sót trang và kẹt giấy</a></li><li class="mb-2"><a href="#so-sanh-hieu-suat" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 4. Bảng so sánh hiệu suất: Xếp tay thủ công vs Hệ thống Duplo</a></li><li class="mb-2"><a href="#ung-dung-thuc-te" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 5. Ứng dụng thực tế tại Hội đồng thi và nhà in chuyên nghiệp</a></li></ul>
          </div>

          <p class="text-lg text-gray-800 leading-relaxed font-medium mb-8 pb-6 border-b border-gray-100 italic">
            "Giới thiệu giải pháp thiết bị hoàn thiện sau in chuyên nghiệp của Duplo: công nghệ phối trang ma sát thông minh, cơ chế kiểm soát lỗi trang kép và ứng dụng thực tiễn trong các kỳ thi lớn."
          </p>

          
          <div class="mb-10 p-5 sm:p-6 bg-gradient-to-r from-emerald-50/90 via-green-50/60 to-teal-50/40 border-l-4 border-[#1A9900] rounded-r shadow-xs">
            <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[#1A9900] mb-2.5">
              <i class="fa-solid fa-sparkles text-amber-500"></i>
              <span>Tóm tắt cốt lõi theo chuẩn AEO (Dành cho AI &amp; Tìm kiếm nhanh)</span>
            </div>
            <p class="text-[15.5px] font-semibold text-gray-900 leading-relaxed">
              Hệ thống máy phối trang và giập ghim tự động Duplo DFC-100 / DFC-120 kết hợp máy bấm ghim DFC-S giúp tự động hóa 100% khâu xếp trang, bấm ghim góc và ghim giữa đóng tập đề thi với năng suất 2.400 đến 4.200 bộ/giờ. Cảm biến quang học kép phát hiện chính xác lỗi sót trang, kẹt giấy hoặc nhầm mã đề, giúp Hội đồng thi giải phóng hoàn toàn sức lao động thủ công và đảm bảo tiến độ tuyệt đối.
            </p>
          </div>
        

          
        <div id="nut-that-sau-in" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">1. 'Nút thắt cổ chai' trong khâu đóng gói đề thi và tài liệu</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Trong các kỳ thi tuyển sinh và tốt nghiệp THPT, máy in nhân bản siêu tốc Duplo có thể in ra hàng chục ngàn trang giấy mỗi giờ. Tuy nhiên, sau khi in xong, việc nhặt từng trang đề, xếp theo thứ tự trang 1-2-3-4, dập ghim và đóng túi thường phải huy động hàng chục cán bộ làm thủ công bằng tay.
              </p>
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Khâu làm tay này vừa chậm chạp, dễ gây nhầm lẫn trang giữa các mã đề thi khác nhau, vừa là nguy cơ gây lộ lọt thông tin. Trang bị <strong>hệ thống máy phối trang và hoàn thiện sau in Duplo</strong> là giải pháp tự động hóa giải quyết triệt để nút thắt này.
              </p>
            
          </div>
        </div>
        <div id="nguyen-ly-hoat-dong" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">2. Nguyên lý hoạt động của máy phối trang Duplo DFC series</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Người vận hành chỉ cần xếp các trang in theo thứ tự vào từng khay (Khay 1 để trang 1, Khay 2 để trang 2...). Máy sẽ tự động rút đồng thời từng tờ từ các khay, xếp chồng khít lên nhau và chuyển thẳng sang máy dập ghim với tốc độ chớp nhoáng lên tới 4.200 bộ/giờ.
              </p>
            
          </div>
        </div>
        <div id="cac-tinh-nang-chong-loi" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">3. Cơ chế kiểm soát lỗi chống sót trang và kẹt giấy</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Điểm đắt giá nhất của Duplo DFC là hệ thống cảm biến quang học kiểm soát lỗi 100%:
              </p>
              <ul class="space-y-2 mb-6 text-sm text-gray-700">
                <li>• <strong>Phát hiện thiếu tờ (Miss Feed):</strong> Nếu một khay bị hết giấy hoặc không rút được tờ giấy, máy dừng ngay và báo đèn đỏ tại khay đó.</li>
                <li>• <strong>Phát hiện rút đúp (Double Feed):</strong> Ngăn chặn việc học sinh nhận phải đề thi bị dính 2 trang giống nhau.</li>
                <li>• <strong>Phát hiện kẹt giấy (Paper Jam):</strong> Tự động ngắt mô-tơ bảo vệ tài liệu không bị rách nát.</li>
              </ul>
            
          </div>
        </div>
        <div id="so-sanh-hieu-suat" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">4. Bảng so sánh hiệu suất: Xếp tay thủ công vs Hệ thống Duplo</h2>
          <div class="prose max-w-none text-gray-700">
            
              <div class="overflow-x-auto my-6 border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                  <thead>
                    <tr class="bg-gray-100 text-gray-900 border-b font-bold">
                      <th class="p-3.5">Tiêu chí so sánh</th>
                      <th class="p-3.5 bg-green-50 text-[#1A9900]">Hệ thống Duplo DFC-120</th>
                      <th class="p-3.5 text-red-600">Nhân công làm thủ công bằng tay</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 text-gray-700">
                    <tr><td class="p-3.5 font-semibold">Tốc độ hoàn thiện</td><td class="p-3.5 font-bold text-[#1A9900]">2.400 – 4.200 bộ đề/giờ</td><td class="p-3.5 text-red-600">Khoảng 150 – 250 bộ/người/giờ</td></tr>
                    <tr><td class="p-3.5 font-semibold">Số lượng nhân sự cần thiết</td><td class="p-3.5 font-bold text-[#1A9900]">Chỉ 1 người vận hành</td><td class="p-3.5 text-red-600">Cần từ 10 – 15 người</td></tr>
                    <tr><td class="p-3.5 font-semibold">Tỷ lệ sai sót (sót trang, lộn mã)</td><td class="p-3.5 font-bold text-[#1A9900]">0% (Cảm biến dừng tự động)</td><td class="p-3.5 text-red-600">Dễ mỏi mắt, nhầm lẫn sau vài giờ</td></tr>
                    <tr><td class="p-3.5 font-semibold">Mức độ bảo mật cách ly</td><td class="p-3.5 font-bold text-[#1A9900]">Tối đa (Hạn chế tối đa tiếp xúc giấy)</td><td class="p-3.5 text-red-600">Nhiều người chạm vào đề thi</td></tr>
                  </tbody>
                </table>
              </div>
            
          </div>
        </div>
        <div id="ung-dung-thuc-te" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">5. Ứng dụng thực tế tại Hội đồng thi và nhà in chuyên nghiệp</h2>
          <div class="prose max-w-none text-gray-700">
            
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-4">
                Hương Sơn cung cấp trọn bộ giải pháp in và phối trang hoàn thiện cho các Sở GD&ĐT, nhà in trường đại học và cơ quan phát hành tài liệu mật, giúp tiết kiệm 80% thời gian đóng gói sản phẩm sau in.
              </p>
            
          </div>
        </div>
          
        <div class="mt-12 pt-8 border-t border-gray-200">
          <h3 class="text-xl font-bold text-gray-900 mb-6 uppercase tracking-wider text-sm text-[#1A9900]">Câu hỏi thường gặp</h3>
          <div class="space-y-4">
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[#1A9900] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>Máy phối trang Duplo DFC-100/120 có bao nhiêu khay nạp?</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">Dòng Duplo DFC-100 có 10 khay nạp giấy, còn DFC-120 có 12 khay nạp. Ngoài ra, người dùng có thể kết nối 2 tháp máy lại với nhau để nâng tổng số khay phối lên tới 20 hoặc 24 trang trong một lượt chạy.</p>
          </div>
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[#1A9900] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>Máy có bấm ghim và gấp đôi thành tập vở luôn được không?</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">Có. Khi kết nối tháp phối trang DFC với bộ dập ghim Duplo DFC-S II và bộ gấp giấy chuyên dụng, hệ thống sẽ tự động phối trang, bấm ghim giữa và gấp đôi thành tập sách hoặc tập đề thi hoàn chỉnh mà không cần chạm tay.</p>
          </div>
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[#1A9900] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>Máy có xử lý được các loại giấy mỏng như giấy in đề thi không?</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">Có. Hệ thống tách giấy 3 con lăn cao su của Duplo được tinh chỉnh chính xác, hỗ trợ định lượng giấy từ 50g/m² đến 130g/m² mà không bị dính kép.</p>
          </div></div>
        </div>
          
        <div class="mt-12 pt-8 border-t border-gray-200">
          <h3 class="text-sm font-bold uppercase tracking-wider text-gray-900 mb-4">Bài viết & Dịch vụ liên quan</h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3"><a href="/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dfc-122/" class="flex items-center space-x-2 p-3 bg-white border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Xem model máy phối trang Duplo DFC-120</span></a><a href="/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dfc-sii/" class="flex items-center space-x-2 p-3 bg-white border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Máy giập ghim Duplo DFC-S II</span></a><a href="/giai-phap/giao-duc/in-de-thi/" class="flex items-center space-x-2 p-3 bg-white border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Giải pháp in sao đề thi tuyển sinh &amp; tốt nghiệp</span></a></div>
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
