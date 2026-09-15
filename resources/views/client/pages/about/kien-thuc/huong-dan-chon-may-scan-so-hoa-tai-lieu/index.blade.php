@extends('client.layouts.app')

@section('title', "Kinh Nghiệm Chọn Máy Scan Số Hóa Tài Liệu Tốc Độ Cao | Hương Sơn")
@section('meta_description', "Cẩm nang chọn máy scan tài liệu chuẩn nhất: so sánh máy scan ADF khay nạp tự động, máy scan phẳng Flatbed, scan sổ hộ chiếu và các dòng máy quét Ricoh cao cấp.")
@section('canonical', "https://huongsonco.com.vn/ve-huong-son/kien-thuc/huong-dan-chon-may-scan-so-hoa-tai-lieu/")
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
        "name": "Hướng dẫn lựa chọn máy scan số hóa tài liệu cho cơ quan, trường học & ngân hàng",
        "item": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/huong-dan-chon-may-scan-so-hoa-tai-lieu/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "Article",
    "headline": "Hướng dẫn lựa chọn máy scan số hóa tài liệu cho cơ quan, trường học & ngân hàng",
    "description": "Tổng hợp kinh nghiệm chọn mua máy quét (scanner) chuyên dụng phục vụ công tác số hóa hồ sơ lưu trữ: phân biệt các dòng máy scan ADF, Flatbed, máy scan công nghiệp A3 và đánh giá các model bán chạy nhất của Ricoh.",
    "datePublished": "2026-09-15",
    "dateModified": "2026-09-15",
    "author": {
      "@@id": "https://huongsonco.com.vn/#organization"
    },
    "publisher": {
      "@@id": "https://huongsonco.com.vn/#organization"
    },
    "mainEntityOfPage": "https://huongsonco.com.vn/ve-huong-son/kien-thuc/huong-dan-chon-may-scan-so-hoa-tai-lieu/",
    "inLanguage": "vi-VN"
  },
  {
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
      {
        "@@type": "Question",
        "name": "Máy đa chức năng (All-in-one) có thể thay thế máy scan chuyên dụng không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Với nhu cầu quét vài tờ giấy mỗi tuần thì máy photocopy đa chức năng đáp ứng được. Nhưng với dự án số hóa hàng ngàn trang tài liệu, máy scan chuyên dụng vượt trội hoàn toàn về tốc độ (tới 140–280 hình ảnh/phút), bộ nạp giấy chống kẹt thông minh, khả năng nhận dạng chữ tiếng Việt OCR và công nghệ tách trang tự động."
        }
      },
      {
        "@@type": "Question",
        "name": "Máy scan Ricoh fi-8170 có quét được chứng minh thư, thẻ căn cước và hộ chiếu không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Có. Dòng Ricoh fi-8170 trang bị chế độ Manual Feed Mode hỗ trợ nạp tài liệu dày tới 7mm bao gồm thẻ CCCD gắn chip, hộ chiếu, sổ bảo hiểm và tài liệu dập ghim mà không cần tấm lót nhựa (Carrier Sheet)."
        }
      },
      {
        "@@type": "Question",
        "name": "Hương Sơn có cung cấp vật tư linh kiện thay thế con lăn máy scan không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Có. Hương Sơn có sẵn toàn bộ cụm con lăn cuốn giấy (Pick Roller, Brake Roller) chính hãng cho tất cả các dòng máy scan Ricoh fi-series và SP-series, hỗ trợ thay thế tận nơi."
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
        <span class="inline-block bg-[#1A9900] text-white text-[11px] font-bold uppercase tracking-wider px-3 py-1 mb-4 rounded-xs">Cẩm nang thiết bị</span>
        <h1 class="text-2xl sm:text-4xl font-bold text-white leading-tight mb-4">Hướng dẫn lựa chọn máy scan số hóa tài liệu cho cơ quan, trường học &amp; ngân hàng</h1>
        <div class="flex items-center space-x-4 text-xs text-gray-300 font-medium">
          <span><i class="fa-regular fa-calendar text-[#5eb74c] mr-1.5"></i>2026-09-15</span>
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
            <ul class="space-y-1"><li class="mb-2"><a href="#tam-quan-trong" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 1. Tầm quan trọng của máy scan chuyên dụng trong chuyển đổi số</a></li><li class="mb-2"><a href="#phan-loai-may-scan" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 2. Phân loại 4 dòng máy scan tài liệu trên thị trường</a></li><li class="mb-2"><a href="#5-tieu-chi-chon-may" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 3. 5 tiêu chí kỹ thuật quyết định khi chọn máy scan</a></li><li class="mb-2"><a href="#danh-gia-model-ricoh" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 4. Đánh giá các dòng máy scan Ricoh nổi bật hiện nay</a></li><li class="mb-2"><a href="#khuyen-nghi-cau-hinh" class="text-gray-600 hover:text-[#1A9900] text-[14.5px] transition block leading-relaxed">• 5. Khuyến nghị chọn máy theo từng mô hình sử dụng</a></li></ul>
          </div>

          <p class="text-lg text-gray-800 leading-relaxed font-medium mb-8 pb-6 border-b border-gray-100 italic">
            "Tổng hợp kinh nghiệm chọn mua máy quét (scanner) chuyên dụng phục vụ công tác số hóa hồ sơ lưu trữ: phân biệt các dòng máy scan ADF, Flatbed, máy scan công nghiệp A3 và đánh giá các model bán chạy nhất của Ricoh."
          </p>

          
        <div id="tam-quan-trong" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">1. Tầm quan trọng của máy scan chuyên dụng trong chuyển đổi số</h2>
          <div class="prose max-w-none text-gray-700">
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Trong tiến trình thực hiện Đề án chuyển đổi số quốc gia và số hóa dữ liệu lưu trữ ngành Giáo dục, các cơ quan và trường học đang phải xử lý khối lượng khổng lồ hồ sơ giấy: học bạ, sổ điểm, hồ sơ cán bộ, công văn đi đến, chứng từ tài chính. Sử dụng máy photocopy thông thường để scan tài liệu thường gặp các hạn chế: tốc độ chậm, dễ kẹt giấy khi giấy mỏng hoặc cũ, hình ảnh bị nghiêng lệch và dung lượng tệp lưu trữ quá lớn.
              </p>
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Việc trang bị <strong>máy scan tài liệu chuyên dụng</strong> với công nghệ nạp giấy tự động ADF, cảm biến chống cuốn giấy kép bằng sóng siêu âm và phần mềm xử lý hình ảnh thông minh là bước then chốt quyết định tiến độ và chất lượng của toàn bộ dự án số hóa.
              </p>
            </div>
        </div>
        <div id="phan-loai-may-scan" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">2. Phân loại 4 dòng máy scan tài liệu trên thị trường</h2>
          <div class="prose max-w-none text-gray-700">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-6">
                <div class="border border-gray-200 p-5 bg-white">
                  <h4 class="font-bold text-gray-900 mb-2 text-base text-[#1A9900]">1. Máy scan cá nhân / Để bàn (ScanSnap)</h4>
                  <p class="text-sm text-gray-600 leading-relaxed mb-2">Đại diện: Ricoh iX1300, iX1400, iX1600. Thiết kế nhỏ gọn, kết nối Wi-Fi, một chạm quét trực tiếp lên đám mây (Cloud) hoặc máy tính. Phù hợp cho bàn làm việc cá nhân, phòng hiệu trưởng, kế toán.</p>
                </div>
                <div class="border border-gray-200 p-5 bg-white">
                  <h4 class="font-bold text-gray-900 mb-2 text-base text-[#1A9900]">2. Máy scan ADF tài liệu văn phòng</h4>
                  <p class="text-sm text-gray-600 leading-relaxed mb-2">Đại diện: Ricoh SP-1120N, SP-1130N, fi-8150. Tốc độ từ 20–50 tờ/phút, khay nạp 50–100 tờ, tích hợp cổng LAN chia sẻ mạng nội bộ. Phù hợp cho bộ phận văn thư, phòng hành chính một cửa.</p>
                </div>
                <div class="border border-gray-200 p-5 bg-white">
                  <h4 class="font-bold text-gray-900 mb-2 text-base text-[#1A9900]">3. Máy scan chuyên nghiệp 2 mặt (Workgroup)</h4>
                  <p class="text-sm text-gray-600 leading-relaxed mb-2">Đại diện: Ricoh fi-8170, fi-8190, fi-8270 (kèm mặt kính phẳng Flatbed). Tốc độ vượt trội 70–90 tờ/phút (140–180 ảnh/phút), công suất 10.000–13.000 tờ/ngày. Tiêu chuẩn vàng cho số hóa hồ sơ.</p>
                </div>
                <div class="border border-gray-200 p-5 bg-white">
                  <h4 class="font-bold text-gray-900 mb-2 text-base text-[#1A9900]">4. Máy scan công nghiệp A3 (Production)</h4>
                  <p class="text-sm text-gray-600 leading-relaxed mb-2">Đại diện: Ricoh fi-7600, fi-7700, fi-8930, fi-8950. Tốc độ lên tới 100–150 tờ/phút, khay nạp 300–500 tờ khổ A3, công suất bền bỉ tới 100.000 tờ/ngày cho các trung tâm lưu trữ lớn.</p>
                </div>
              </div>
            </div>
        </div>
        <div id="5-tieu-chi-chon-may" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">3. 5 tiêu chí kỹ thuật quyết định khi chọn máy scan</h2>
          <div class="prose max-w-none text-gray-700">
              <ul class="space-y-4 mb-6 text-[15px] text-gray-600">
                <li class="p-4 bg-gray-50 border-l-4 border-[#1A9900]">
                  <strong>1. Tốc độ quét thực tế (ppm / ipm):</strong> Cần phân biệt rõ ppm (pages per minute - số tờ/phút) và ipm (images per minute - số mặt quét/phút khi quét 2 mặt). Máy scan tốt phải giữ nguyên tốc độ khi quét màu ở độ phân giải 300 dpi.
                </li>
                <li class="p-4 bg-gray-50 border-l-4 border-[#1A9900]">
                  <strong>2. Khả năng bảo vệ tài liệu (Paper Protection):</strong> Công nghệ giám sát âm thanh iSOP của Ricoh có khả năng phát hiện âm thanh giấy bị nhăn hoặc kẹt lập tức dừng cuốn trong vài phần nghìn giây, bảo vệ nguyên vẹn các tài liệu lưu trữ quý hiếm.
                </li>
                <li class="p-4 bg-gray-50 border-l-4 border-[#1A9900]">
                  <strong>3. Công suất khuyến nghị hàng ngày (Duty Cycle):</strong> Chọn máy có công suất cao hơn ít nhất 30% so với nhu cầu thực tế để đảm bảo con lăn và mô-tơ hoạt động bền bỉ, không bị quá nhiệt.
                </li>
                <li class="p-4 bg-gray-50 border-l-4 border-[#1A9900]">
                  <strong>4. Khả năng tương thích phần mềm & OCR:</strong> Trình điều khiển PaperStream IP (TWAIN/ISIS) và phần mềm OCR ABBYY FineReader đi kèm giúp tự động làm sạch nền, xoay trang đúng chiều, xóa vết đục lỗ và nhận dạng tiếng Việt có dấu chính xác.
                </li>
                <li class="p-4 bg-gray-50 border-l-4 border-[#1A9900]">
                  <strong>5. Kết nối mạng (Ethernet LAN / Wi-Fi):</strong> Giúp nhiều máy tính trong cùng phòng ban cùng quét dữ liệu về máy chủ chung mà không cần phụ thuộc vào một máy tính chủ gắn dây USB.
                </li>
              </ul>
            </div>
        </div>
        <div id="danh-gia-model-ricoh" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">4. Đánh giá các dòng máy scan Ricoh nổi bật hiện nay</h2>
          <div class="prose max-w-none text-gray-700">
              <p class="text-[15.5px] text-gray-600 leading-[1.85] mb-5">
                Thương hiệu Ricoh (trước đây là Fujitsu) chiếm tới hơn 55% thị phần máy scan tài liệu toàn cầu nhờ độ bền cơ khí huyền thoại:
              </p>
              <div class="space-y-4 mb-6">
                <div class="border border-gray-200 p-5 bg-white flex flex-col md:flex-row gap-5 items-center">
                  <div class="w-full md:w-1/4 flex-shrink-0 text-center">
                    <img src="/assets/images/products/ricoh-fi-8170.png" alt="Ricoh fi-8170" class="h-28 mx-auto object-contain" />
                  </div>
                  <div class="flex-1">
                    <h5 class="font-bold text-gray-900 text-base mb-1">Ricoh fi-8170 – Bestseller số 1 cho văn phòng và dự án</h5>
                    <p class="text-sm text-gray-600 mb-2">Tốc độ 70 trang/phút (140 ảnh/phút), khay nạp 100 tờ, công suất 10.000 tờ/ngày. Tích hợp cổng LAN + USB 3.2, màn hình LCD trực quan. Dòng máy hoàn hảo nhất cho mọi nhu cầu số hóa hồ sơ.</p>
                    <a href="/san-pham/may-scan-so-hoa/ricoh-fi-8170/" class="text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">Xem chi tiết Ricoh fi-8170 →</a>
                  </div>
                </div>
                <div class="border border-gray-200 p-5 bg-white flex flex-col md:flex-row gap-5 items-center">
                  <div class="w-full md:w-1/4 flex-shrink-0 text-center">
                    <img src="/assets/images/products/ricoh-sp-1130n.jpg" alt="Ricoh SP-1130N" class="h-28 mx-auto object-contain" />
                  </div>
                  <div class="flex-1">
                    <h5 class="font-bold text-gray-900 text-base mb-1">Ricoh SP-1130N – Giải pháp kinh tế cho văn thư trường học</h5>
                    <p class="text-sm text-gray-600 mb-2">Tốc độ 30 trang/phút (60 ảnh/phút), khay nạp 50 tờ, có cổng mạng LAN. Giá thành cực kỳ hợp lý cho các trường THPT, THCS trang bị tại phòng văn thư.</p>
                    <a href="/san-pham/may-scan-so-hoa/ricoh-sp-1130n/" class="text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">Xem chi tiết Ricoh SP-1130N →</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div id="khuyen-nghi-cau-hinh" class="mb-12 scroll-mt-28">
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">5. Khuyến nghị chọn máy theo từng mô hình sử dụng</h2>
          <div class="prose max-w-none text-gray-700">
              <div class="p-6 bg-green-50/50 border border-green-200 mb-6">
                <ul class="space-y-3 text-sm text-gray-700">
                  <li>• <strong>Phòng văn thư trường học / UBND xã phường:</strong> Chọn <em>Ricoh SP-1130N</em> hoặc <em>Ricoh fi-800R</em> (vừa quét tài liệu vừa quét nhanh thẻ CCCD).</li>
                  <li>• <strong>Sở GD&ĐT, Phòng Khảo thí, Ngân hàng, Bệnh viện:</strong> Chọn <em>Ricoh fi-8170</em> hoặc <em>Ricoh fi-8270</em> (bổ sung mặt kính phẳng quét sách và tài liệu đóng gáy).</li>
                  <li>• <strong>Trung tâm lưu trữ lịch sử, doanh nghiệp số hóa chuyên nghiệp:</strong> Chọn các dòng công nghiệp A3 <em>Ricoh fi-7600</em> hoặc <em>fi-8930</em>.</li>
                </ul>
              </div>
            </div>
        </div>
          
        <div class="mt-12 pt-8 border-t border-gray-200">
          <h3 class="text-xl font-bold text-gray-900 mb-6 uppercase tracking-wider text-sm text-[#1A9900]">Câu hỏi thường gặp</h3>
          <div class="space-y-4">
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[#1A9900] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>Máy đa chức năng (All-in-one) có thể thay thế máy scan chuyên dụng không?</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">Với nhu cầu quét vài tờ giấy mỗi tuần thì máy photocopy đa chức năng đáp ứng được. Nhưng với dự án số hóa hàng ngàn trang tài liệu, máy scan chuyên dụng vượt trội hoàn toàn về tốc độ (tới 140–280 hình ảnh/phút), bộ nạp giấy chống kẹt thông minh, khả năng nhận dạng chữ tiếng Việt OCR và công nghệ tách trang tự động.</p>
          </div>
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[#1A9900] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>Máy scan Ricoh fi-8170 có quét được chứng minh thư, thẻ căn cước và hộ chiếu không?</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">Có. Dòng Ricoh fi-8170 trang bị chế độ Manual Feed Mode hỗ trợ nạp tài liệu dày tới 7mm bao gồm thẻ CCCD gắn chip, hộ chiếu, sổ bảo hiểm và tài liệu dập ghim mà không cần tấm lót nhựa (Carrier Sheet).</p>
          </div>
          <div class="border border-gray-200 bg-white p-5 rounded-sm">
            <h4 class="text-base font-bold text-gray-900 mb-2 flex items-start">
              <i class="fa-solid fa-circle-question text-[#1A9900] mr-2.5 mt-1 flex-shrink-0"></i>
              <span>Hương Sơn có cung cấp vật tư linh kiện thay thế con lăn máy scan không?</span>
            </h4>
            <p class="text-[14.5px] text-gray-600 leading-relaxed pl-6">Có. Hương Sơn có sẵn toàn bộ cụm con lăn cuốn giấy (Pick Roller, Brake Roller) chính hãng cho tất cả các dòng máy scan Ricoh fi-series và SP-series, hỗ trợ thay thế tận nơi.</p>
          </div></div>
        </div>
          
        <div class="mt-12 pt-8 border-t border-gray-200">
          <h3 class="text-sm font-bold uppercase tracking-wider text-gray-900 mb-4">Bài viết & Dịch vụ liên quan</h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3"><a href="/san-pham/may-scan-so-hoa/" class="flex items-center space-x-2 p-3 bg-white border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Danh mục toàn bộ 31 model máy scan Ricoh chính hãng</span></a><a href="/san-pham/vat-tu-linh-kien-tieu-hao/bang-tra-ma-linh-kien-vat-tu-may-scan-ricoh/" class="flex items-center space-x-2 p-3 bg-white border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Bảng tra cứu mã linh kiện con lăn tiêu hao máy scan Ricoh</span></a><a href="/giai-phap/scan-so-hoa/" class="flex items-center space-x-2 p-3 bg-white border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Giải pháp dịch vụ Scan – Số hóa hồ sơ tài liệu trọn gói</span></a><a href="/nhan-tu-van/khao-sat-so-hoa/" class="flex items-center space-x-2 p-3 bg-white border border-gray-200 hover:border-[#1A9900] hover:text-[#1A9900] text-sm font-semibold transition rounded-sm"><i class="fa-solid fa-arrow-right text-[#1A9900] text-xs"></i><span>Đăng ký khảo sát số hóa tài liệu miễn phí</span></a></div>
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
              <h5 class="text-xs font-bold uppercase tracking-wider text-gray-700 mb-3">Các cẩm nang khác</h5>
              <ul class="space-y-2.5 text-xs text-gray-600">
                <li><a href="/ve-huong-son/kien-thuc/nen-thue-hay-mua-may-photocopy/" class="hover:text-[#1A9900] transition block leading-snug">• Nên thuê hay mua máy photocopy cho doanh nghiệp, trường học? Phân tích chi phí &amp; hiệu quả</a></li><li><a href="/ve-huong-son/kien-thuc/tieu-chuan-may-in-de-thi-thpt/" class="hover:text-[#1A9900] transition block leading-snug">• Tiêu chuẩn lựa chọn và vận hành máy in sao đề thi tốt nghiệp THPT an toàn, bảo mật</a></li><li><a href="/ve-huong-son/kien-thuc/so-sanh-may-photocopy-toshiba-va-konica-minolta/" class="hover:text-[#1A9900] transition block leading-snug">• So sánh máy photocopy đa chức năng Toshiba và Konica Minolta: Nên chọn hãng nào?</a></li><li><a href="/ve-huong-son/kien-thuc/cach-chon-muc-in-linh-kien-may-photocopy-chinh-hang/" class="hover:text-[#1A9900] transition block leading-snug">• Cách chọn mực in và linh kiện tiêu hao máy photocopy chính hãng tránh hỏng trống gạt</a></li><li><a href="/ve-huong-son/kien-thuc/quy-trinh-so-hoa-tai-lieu-luu-tru/" class="hover:text-[#1A9900] transition block leading-snug">• Quy trình số hóa hồ sơ, tài liệu lưu trữ cơ quan Nhà nước và trường học từ A đến Z</a></li>
              </ul>
            </div>
          </div>
        </aside>

      </div>
    </div>
  </section>
  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/xxx_home-bg_xxx.jpg');">
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
