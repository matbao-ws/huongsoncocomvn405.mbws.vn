@extends('client.layouts.app')

@section('title', "Cho Thuê Máy In Đề Thi Siêu Tốc Duplo Phục Vụ Kỳ Thi THPT | Hương Sơn")
@section('meta_description', "Giải pháp máy in nhân bản siêu tốc Duplo ép lạnh rulo tốc độ 150-180 trang/phút, offline cách ly 3 vòng, kỹ thuật viên trực hiện trường và máy dự phòng nóng N+1 cho kỳ thi.")
@section('canonical', "https://huongsonco.com.vn/thue-may-in-de-thi/")
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
    "email": "info@huongsonco.com.vn",
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
        "name": "Cho thuê & Dịch vụ",
        "item": "https://huongsonco.com.vn/dich-vu/"
      },
      {
        "@@type": "ListItem",
        "position": 3,
        "name": "Cho Thuê Máy In Đề Thi Siêu Tốc Duplo Kỳ Thi THPT | Hương Sơn",
        "item": "https://huongsonco.com.vn/thue-may-in-de-thi/"
      }
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "Service",
    "serviceType": "Cho Thuê Máy In Đề Thi Siêu Tốc Duplo Kỳ Thi THPT | Hương Sơn",
    "name": "Cho Thuê Máy In Đề Thi Siêu Tốc Duplo – Giải Pháp Độc Quyền Ép Lạnh Rulo",
    "description": "Giải pháp máy in nhân bản siêu tốc Duplo ép lạnh rulo tốc độ 150-180 trang/phút, offline cách ly 3 vòng, kỹ thuật viên trực hiện trường và máy dự phòng nóng N+1 cho kỳ thi.",
    "provider": {
      "@@type": "LocalBusiness",
      "name": "Công Ty TNHH Thương Mại & Dịch Vụ Hương Sơn",
      "image": "https://huongsonco.com.vn/assets/images/brand/HUONG_SON_logo.svg",
      "telephone": "0913222003",
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "28 Nguyễn Phong Sắc, P. Dịch Vọng Hậu, Q. Cầu Giấy",
        "addressLocality": "Hà Nội",
        "addressCountry": "VN"
      },
      "priceRange": "$$"
    },
    "areaServed": {
      "@@type": "AdministrativeArea",
      "name": "Hà Nội, Miền Bắc"
    },
    "hasOfferCatalog": {
      "@@type": "OfferCatalog",
      "name": "Bảng Giá Cho Thuê Máy Photocopy 2026",
      "itemListElement": [
        {
          "@@type": "Offer",
          "itemOffered": {
            "@@type": "Service",
            "name": "Gói Khởi Nghiệp (Toshiba 2329A)"
          },
          "price": "800000",
          "priceCurrency": "VND"
        },
        {
          "@@type": "Offer",
          "itemOffered": {
            "@@type": "Service",
            "name": "Gói Văn Phòng Chuẩn (Ricoh MP 3055)"
          },
          "price": "1200000",
          "priceCurrency": "VND"
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
        "name": "Vì sao máy in siêu tốc Duplo ép lạnh lại là lựa chọn bắt buộc khi in đề thi?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Bởi vì máy in laser thông thường sử dụng sấy nhiệt 200°C làm giấy cong quăn và nhiễm tĩnh điện dính chặt vào nhau, rất dễ kẹt máy khi in hàng trăm nghìn bản. Ngược lại, Duplo ép mực lạnh qua màng Master, giấy ra phẳng mịn tuyệt đối, đóng túi niêm phong được ngay."
        }
      },
      {
        "@@type": "Question",
        "name": "Phương án dự phòng N+1 được triển khai như thế nào?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Trong mỗi phòng in sao cách ly, Hương Sơn luôn đặt sẵn ít nhất 01 máy in siêu tốc cùng phân khúc ở trạng thái chờ (Standby N+1). Nếu máy chính có bất kỳ dấu hiệu lỗi, cán bộ thi chỉ cần bật nguồn máy dự phòng là tiếp tục in ngay lập tức mà không gián đoạn kỳ thi."
        }
      },
      {
        "@@type": "Question",
        "name": "Lượng mực và cuộn Master thừa sau kỳ thi có được hoàn lại tiền không?",
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "Có. Hương Sơn cấp dư 20% vật tư để phòng ngừa sự cố. Toàn bộ cuộn Master và bình mực nguyên seal chưa sử dụng sẽ được chúng tôi thu hồi và hoàn trả 100% chi phí."
        }
      }
    ]
  }
]
</script>
@endsection

@section('content')
<section class="relative bg-[#181924] py-16 sm:py-20 text-white overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-25">
      <img src="/assets/images/proof/in-sao-de-thi-duplo.jpg" alt="Cho Thuê Máy In Đề Thi Siêu Tốc Duplo – Giải Pháp Độc Quyền Ép Lạnh Rulo" class="w-full h-full object-cover object-center filter blur-xs" />
      <div class="absolute inset-0 bg-gradient-to-r from-[#181924] via-[#181924]/90 to-[#181924]/70"></div>
    </div>
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="max-w-3xl">
        <div class="inline-flex items-center gap-2 bg-[#1A9900]/20 border border-[#1A9900]/50 text-[#84e372] text-xs font-bold px-3 py-1 uppercase tracking-wider mb-4 rounded-xs">
          <i class="fa-solid fa-certificate"></i> Chuyên Sâu Kỳ Thi Quốc Gia &amp; Tuyển Sinh
        </div>
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white leading-tight mb-4">
          Cho Thuê Máy In Đề Thi Siêu Tốc Duplo – Giải Pháp Độc Quyền Ép Lạnh Rulo
        </h1>
        <p class="text-gray-300 text-sm sm:text-base leading-relaxed mb-6 font-medium">
          Tốc độ in thần tốc 130 – 180 bản/phút, công nghệ in rulo lạnh không sinh nhiệt, không tĩnh điện dính giấy, vận hành offline 100% bảo mật tuyệt đối cho kỳ thi tuyển sinh và tốt nghiệp THPT.
        </p>
        <div class="flex flex-wrap items-center gap-4">
          <a href="#bao-gia-nhanh" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-7 py-3.5 transition shadow-lg flex items-center gap-2">
            <i class="fa-solid fa-calculator"></i> Nhận Báo Giá Nhanh 2026
          </a>
          <a href="tel:0913222003" class="border border-white/30 hover:border-white text-white font-bold text-xs uppercase tracking-wider px-6 py-3.5 transition flex items-center gap-2">
            <i class="fa-solid fa-phone text-[#5eb74c]"></i> Hotline: 0913.222.003
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="py-8 bg-emerald-50/50 border-b border-emerald-100">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="bg-white border-l-4 border-[#1A9900] p-6 rounded-r-lg shadow-xs">
        <div class="flex items-center gap-2 text-[#1A9900] font-bold text-xs uppercase tracking-wider mb-2">
          <i class="fa-solid fa-circle-check text-sm"></i>
          <span>Tóm tắt giải pháp nhanh (AEO Key Takeaways)</span>
        </div>
        <p class="text-gray-800 text-sm sm:text-[15px] leading-relaxed font-medium m-0">
          Gói thuê máy in đề thi siêu tốc Duplo của Hương Sơn được thiết kế chuyên biệt cho các kỳ thi lớn: Cung cấp các model cao cấp Duplo DP-X550, DP-X650, DP-X850, trọn gói cuộn Master và mực in chính hãng, máy phối trang gập ghim DFC tự động, cấu hình máy dự phòng nóng N+1 và kỹ sư PDI túc trực 24/7.
        </p>
        <div class="mt-3 pt-3 border-t border-gray-100 flex flex-wrap items-center gap-4 text-xs text-gray-500 font-semibold">
          <span class="text-emerald-700"><i class="fa-solid fa-shield mr-1"></i> Chuẩn Quy Chế Thi Bộ GD&amp;ĐT • Offline 100%</span>
          <span><i class="fa-solid fa-clock mr-1"></i> SLA Cứu Hộ Kỹ Thuật ≤ 2 Giờ</span>
          <span><i class="fa-solid fa-arrows-rotate mr-1"></i> Đổi Máy Mới Trong 24 Giờ</span>
        </div>
      </div>
    </div>
  </section>

  <section class="py-16 bg-white border-b border-gray-200">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto text-center mb-12">
        <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-2">Bảng Giá Minh Bạch 2026</span>
        <h2 class="text-2xl sm:text-3xl font-bold text-[#181923]">4 Gói Dịch Vụ Cho Thuê Thiết Bị Tiêu Chuẩn</h2>
        <p class="text-gray-600 text-sm mt-3 leading-relaxed">
          Cam kết 100% không phát sinh chi phí phụ, miễn phí toàn bộ mực in và bảo trì linh kiện định kỳ:
        </p>
      </div>

      <div class="overflow-x-auto my-6 border border-gray-200 rounded-lg shadow-xs">
        <table class="w-full text-left border-collapse text-xs sm:text-sm">
          <thead>
            <tr class="bg-[#181924] text-white">
              <th class="p-3.5 sm:p-4 font-bold uppercase tracking-wider">Gói Cho Thuê</th>
              <th class="p-3.5 sm:p-4 font-bold uppercase tracking-wider">Dòng Máy Tiêu Biểu</th>
              <th class="p-3.5 sm:p-4 font-bold uppercase tracking-wider">Tốc Độ & Tính Năng</th>
              <th class="p-3.5 sm:p-4 font-bold uppercase tracking-wider">Định Mức Bản In</th>
              <th class="p-3.5 sm:p-4 font-bold uppercase tracking-wider text-emerald-400">Đơn Giá / Tháng</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 text-gray-700">
            <tr class="hover:bg-gray-50 transition">
              <td class="p-3.5 sm:p-4 font-bold text-gray-900">1. Gói Khởi Nghiệp</td>
              <td class="p-3.5 sm:p-4">Toshiba e-STUDIO 2329A</td>
              <td class="p-3.5 sm:p-4">25 trang/phút, In/Copy/Scan A3-A4</td>
              <td class="p-3.5 sm:p-4">3.000 bản in A4</td>
              <td class="p-3.5 sm:p-4 font-bold text-[#1A9900] text-sm sm:text-base">800.000 – 1.000.000 đ</td>
            </tr>
            <tr class="hover:bg-gray-50 transition bg-emerald-50/20">
              <td class="p-3.5 sm:p-4 font-bold text-gray-900 flex items-center gap-1.5">
                <span>2. Gói Văn Phòng Chuẩn</span>
                <span class="bg-[#1A9900] text-white text-[10px] px-1.5 py-0.5 rounded font-bold">Phổ Biến</span>
              </td>
              <td class="p-3.5 sm:p-4 font-semibold text-gray-900">Ricoh MP 3055 / Toshiba 3028A</td>
              <td class="p-3.5 sm:p-4">35 trang/phút, Màn hình cảm ứng 10.1 inch, Scan màu</td>
              <td class="p-3.5 sm:p-4 font-semibold">5.000 bản in A4</td>
              <td class="p-3.5 sm:p-4 font-bold text-[#1A9900] text-sm sm:text-base">1.200.000 – 1.500.000 đ</td>
            </tr>
            <tr class="hover:bg-gray-50 transition">
              <td class="p-3.5 sm:p-4 font-bold text-gray-900">3. Gói Công Suất Lớn</td>
              <td class="p-3.5 sm:p-4">Toshiba 4518A / Ricoh MP 5055</td>
              <td class="p-3.5 sm:p-4">45 – 50 trang/phút, Nạp đảo bản gốc tự động kép SPDF</td>
              <td class="p-3.5 sm:p-4">8.000 – 10.000 bản</td>
              <td class="p-3.5 sm:p-4 font-bold text-[#1A9900] text-sm sm:text-base">1.800.000 – 2.200.000 đ</td>
            </tr>
            <tr class="hover:bg-gray-50 transition">
              <td class="p-3.5 sm:p-4 font-bold text-gray-900">4. Gói Màu Đồ Họa Cao Cấp</td>
              <td class="p-3.5 sm:p-4">Toshiba 2500AC / Ricoh MPC 3504</td>
              <td class="p-3.5 sm:p-4">In/Scan Màu A3, Độ phân giải 1200 DPI chuẩn nét</td>
              <td class="p-3.5 sm:p-4">1.000 màu + 4.000 đen</td>
              <td class="p-3.5 sm:p-4 font-bold text-[#1A9900] text-sm sm:text-base">2.200.000 – 2.800.000 đ</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p class="text-xs text-gray-500 italic text-center mt-2">
        * Đơn giá trên đã bao gồm toàn bộ mực in, vật tư tiêu hao, chi phí vận chuyển lắp đặt và bảo trì định kỳ. Phí vượt định mức siêu rẻ chỉ từ 80đ - 100đ/trang A4.
      </p>
    </div>
  </section>

  <section class="py-16 bg-[#f5f8fb] border-b border-gray-200">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mb-12">
        <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-2">Đặc Quyền Vượt Trội</span>
        <h2 class="text-2xl sm:text-3xl font-bold text-[#181923]">Tại Sao Khách Hàng Chọn Thuê Máy Tại Hương Sơn?</h2>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-xs hover:border-[#1A9900] transition">
          <div class="w-12 h-12 bg-emerald-50 text-[#1A9900] rounded flex items-center justify-center text-xl mb-4 font-bold">
            <i class="fa-solid fa-coins"></i>
          </div>
          <h3 class="text-base font-bold text-[#181923] mb-2">0đ Tiền Cọc Máy</h3>
          <p class="text-xs text-gray-600 leading-relaxed">
            Không cần đặt cọc, không cần vốn đầu tư lớn ban đầu. Tối ưu hóa 100% dòng tiền lưu động cho doanh nghiệp.
          </p>
        </div>

        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-xs hover:border-[#1A9900] transition">
          <div class="w-12 h-12 bg-emerald-50 text-[#1A9900] rounded flex items-center justify-center text-xl mb-4 font-bold">
            <i class="fa-solid fa-box-open"></i>
          </div>
          <h3 class="text-base font-bold text-[#181923] mb-2">100% Máy Mới Chính Hãng</h3>
          <p class="text-xs text-gray-600 leading-relaxed">
            Cam kết máy đời mới hoạt động ổn định, độ phân giải cao, đầy đủ chứng nhận CO/CQ từ Toshiba, Ricoh, Duplo.
          </p>
        </div>

        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-xs hover:border-[#1A9900] transition">
          <div class="w-12 h-12 bg-emerald-50 text-[#1A9900] rounded flex items-center justify-center text-xl mb-4 font-bold">
            <i class="fa-solid fa-stopwatch"></i>
          </div>
          <h3 class="text-base font-bold text-[#181923] mb-2">Cứu Hộ Kỹ Thuật ≤ 2H</h3>
          <p class="text-xs text-gray-600 leading-relaxed">
            Kỹ sư có mặt tận nơi xử lý sự cố trong vòng 2 giờ. Nếu hỏng hóc kéo dài quá 24h, đổi ngay máy mới tương đương.
          </p>
        </div>

        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-xs hover:border-[#1A9900] transition">
          <div class="w-12 h-12 bg-emerald-50 text-[#1A9900] rounded flex items-center justify-center text-xl mb-4 font-bold">
            <i class="fa-solid fa-handshake"></i>
          </div>
          <h3 class="text-base font-bold text-[#181923] mb-2">Dùng Thử Miễn Phí 07 Ngày</h3>
          <p class="text-xs text-gray-600 leading-relaxed">
            Trải nghiệm chất lượng máy và tốc độ phục vụ thực tế tại văn phòng trong 07 ngày trước khi quyết định ký hợp đồng.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-16" class="bg-white border-b border-gray-200">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mb-12">
        <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-2">Bằng chứng năng lực</span>
        <h2 class="text-2xl sm:text-[32px] font-bold text-[#181923] leading-tight mb-3">Năng Lực Thiết Bị Kho Bãi &amp; Bằng Chứng Triển Khai Thực Tế</h2>
        <p class="text-[15.5px] text-gray-600 leading-relaxed">Khẳng định uy tín từ năm 2008 bằng hệ thống kho bãi quy mô lớn, quy trình kiểm định PDI chính hãng và các dự án cung ứng thực tế.</p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <div class="border border-gray-200 bg-white flex flex-col group hover:border-[#1A9900] transition duration-300 shadow-xs">
          <div class="relative overflow-hidden aspect-[16/10] bg-gray-100">
            <img src="/assets/images/proof/kho-thiet-bi-huong-son.jpg" alt="Hệ Thống Kho Bãi &amp; Thiết Bị Sẵn Sàng" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <span class="absolute top-3 left-3 bg-[#181924]/90 text-white text-[10.5px] font-bold uppercase tracking-wider px-2.5 py-1 backdrop-blur-xs">
              Kho Hàng Sẵn Có &gt; 200 Máy
            </span>
          </div>
          <div class="p-5 flex-1 flex flex-col">
            <h4 class="text-[15.5px] font-bold text-[#181923] mb-2 leading-snug group-hover:text-[#1A9900] transition">Hệ Thống Kho Bãi &amp; Thiết Bị Sẵn Sàng</h4>
            <p class="text-[13px] text-gray-600 leading-relaxed flex-1">Kho hàng trung tâm lưu trữ hàng trăm máy photocopy Toshiba, Duplo và vật tư FANSIPAN chính hãng, sẵn sàng điều động trong 24–48h.</p>
          </div>
        </div>
        <div class="border border-gray-200 bg-white flex flex-col group hover:border-[#1A9900] transition duration-300 shadow-xs">
          <div class="relative overflow-hidden aspect-[16/10] bg-gray-100">
            <img src="/assets/images/proof/doi-ngu-ky-thuat-pdi.jpg" alt="Đội Ngũ Kỹ Sư Đào Tạo Chính Hãng" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <span class="absolute top-3 left-3 bg-[#181924]/90 text-white text-[10.5px] font-bold uppercase tracking-wider px-2.5 py-1 backdrop-blur-xs">
              Quy Trình Kiểm Định PDI
            </span>
          </div>
          <div class="p-5 flex-1 flex flex-col">
            <h4 class="text-[15.5px] font-bold text-[#181923] mb-2 leading-snug group-hover:text-[#1A9900] transition">Đội Ngũ Kỹ Sư Đào Tạo Chính Hãng</h4>
            <p class="text-[13px] text-gray-600 leading-relaxed flex-1">100% thiết bị trải qua quy trình kiểm tra chất lượng PDI nghiêm ngặt. Kỹ sư được chứng nhận trực tiếp bởi Duplo (Nhật Bản) và Toshiba.</p>
          </div>
        </div>
        <div class="border border-gray-200 bg-white flex flex-col group hover:border-[#1A9900] transition duration-300 shadow-xs">
          <div class="relative overflow-hidden aspect-[16/10] bg-gray-100">
            <img src="/assets/images/proof/ban-giao-thiet-bi-tan-noi.jpg" alt="Giao Hàng Tận Nơi &amp; Hướng Dẫn Vận Hành" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <span class="absolute top-3 left-3 bg-[#181924]/90 text-white text-[10.5px] font-bold uppercase tracking-wider px-2.5 py-1 backdrop-blur-xs">
              Bàn Giao Chuyên Nghiệp
            </span>
          </div>
          <div class="p-5 flex-1 flex flex-col">
            <h4 class="text-[15.5px] font-bold text-[#181923] mb-2 leading-snug group-hover:text-[#1A9900] transition">Giao Hàng Tận Nơi &amp; Hướng Dẫn Vận Hành</h4>
            <p class="text-[13px] text-gray-600 leading-relaxed flex-1">Logistics chuyên dụng, lắp đặt tận bàn giao việc, bàn giao biên bản kiểm tra kỹ thuật và đào tạo nhân sự sử dụng thành thạo.</p>
          </div>
        </div>
        <div class="border border-gray-200 bg-white flex flex-col group hover:border-[#1A9900] transition duration-300 shadow-xs">
          <div class="relative overflow-hidden aspect-[16/10] bg-gray-100">
            <img src="/assets/images/proof/ban-giao-vietcombank.jpg" alt="Cung Ứng 127 Máy Cho Vietcombank" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
            <span class="absolute top-3 left-3 bg-[#181924]/90 text-white text-[10.5px] font-bold uppercase tracking-wider px-2.5 py-1 backdrop-blur-xs">
              Khách Hàng Tiêu Biểu
            </span>
          </div>
          <div class="p-5 flex-1 flex flex-col">
            <h4 class="text-[15.5px] font-bold text-[#181923] mb-2 leading-snug group-hover:text-[#1A9900] transition">Cung Ứng 127 Máy Cho Vietcombank</h4>
            <p class="text-[13px] text-gray-600 leading-relaxed flex-1">Triển khai thành công hợp đồng cung cấp 127 máy photocopy cho Vietcombank toàn quốc và phục vụ in sao đề thi THPT các Sở GD&amp;ĐT.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-10 bg-[#f8fafc] border-y border-gray-200">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="p-6 bg-white border-l-4 border-[#1A9900] shadow-xs rounded-r-lg">
        <div class="flex items-center gap-2.5 text-[#1A9900] font-bold text-sm uppercase tracking-wider mb-2">
          <i class="fa-solid fa-location-dot text-base"></i>
          <span>Công Ty TNHH Thương Mại & Dịch Vụ Hương Sơn – Đại Lý Ủy Quyền & Kho Máy Miền Bắc</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs text-gray-700 pt-2">
          <div>
            <p class="mb-1.5"><strong>Trụ sở chính & Showroom:</strong> 28 Nguyễn Phong Sắc, P. Dịch Vọng Hậu, Q. Cầu Giấy, TP. Hà Nội</p>
            <p class="mb-1.5"><strong>Trung tâm kỹ thuật & Kho thiết bị:</strong> Số 12 Ngõ 19 Trần Quang Diệu, P. Ô Chợ Dừa, Q. Đống Đa, TP. Hà Nội</p>
          </div>
          <div>
            <p class="mb-1.5"><strong>Hotline tư vấn & Cứu hộ SLA 2h:</strong> <a href="tel:0913222003" class="text-[#1A9900] font-bold text-sm hover:underline">0913.222.003</a> (Zalo / Call 24/7)</p>
            <p class="mb-1.5"><strong>Địa bàn phục vụ thần tốc 2H:</strong> 30 quận huyện Hà Nội, các KCN Bắc Ninh, Hưng Yên, Vĩnh Phúc, Thái Nguyên, Hải Phòng và các Sở GD&ĐT miền Bắc.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-16 bg-white border-b border-gray-200">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto">
        <div class="text-center mb-10">
          <span class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] block mb-2">Hỏi Đáp Chuyên Sâu</span>
          <h2 class="text-2xl sm:text-3xl font-bold text-[#181923]">Câu Hỏi Thường Gặp Về Dịch Vụ Thuê Máy</h2>
        </div>
        <div class="space-y-4">
          
      <details class="group bg-gray-50 border border-gray-200 rounded-lg p-5 transition duration-200 open:bg-white open:shadow-xs">
        <summary class="font-bold text-[15.5px] sm:text-[16.5px] text-[#10203C] cursor-pointer flex items-center justify-between gap-4 list-none group-hover:text-[#1A9900]">
          <span>Vì sao máy in siêu tốc Duplo ép lạnh lại là lựa chọn bắt buộc khi in đề thi?</span>
          <span class="w-6 h-6 rounded-full bg-white border border-gray-200 flex items-center justify-center flex-shrink-0 group-open:rotate-180 transition-transform">
            <i class="fa-solid fa-chevron-down text-xs text-gray-500"></i>
          </span>
        </summary>
        <div class="mt-4 pt-3 border-t border-gray-100 text-[14.5px] text-gray-700 leading-relaxed">
          Bởi vì máy in laser thông thường sử dụng sấy nhiệt 200°C làm giấy cong quăn và nhiễm tĩnh điện dính chặt vào nhau, rất dễ kẹt máy khi in hàng trăm nghìn bản. Ngược lại, Duplo ép mực lạnh qua màng Master, giấy ra phẳng mịn tuyệt đối, đóng túi niêm phong được ngay.
        </div>
      </details>
      <details class="group bg-gray-50 border border-gray-200 rounded-lg p-5 transition duration-200 open:bg-white open:shadow-xs">
        <summary class="font-bold text-[15.5px] sm:text-[16.5px] text-[#10203C] cursor-pointer flex items-center justify-between gap-4 list-none group-hover:text-[#1A9900]">
          <span>Phương án dự phòng N+1 được triển khai như thế nào?</span>
          <span class="w-6 h-6 rounded-full bg-white border border-gray-200 flex items-center justify-center flex-shrink-0 group-open:rotate-180 transition-transform">
            <i class="fa-solid fa-chevron-down text-xs text-gray-500"></i>
          </span>
        </summary>
        <div class="mt-4 pt-3 border-t border-gray-100 text-[14.5px] text-gray-700 leading-relaxed">
          Trong mỗi phòng in sao cách ly, Hương Sơn luôn đặt sẵn ít nhất 01 máy in siêu tốc cùng phân khúc ở trạng thái chờ (Standby N+1). Nếu máy chính có bất kỳ dấu hiệu lỗi, cán bộ thi chỉ cần bật nguồn máy dự phòng là tiếp tục in ngay lập tức mà không gián đoạn kỳ thi.
        </div>
      </details>
      <details class="group bg-gray-50 border border-gray-200 rounded-lg p-5 transition duration-200 open:bg-white open:shadow-xs">
        <summary class="font-bold text-[15.5px] sm:text-[16.5px] text-[#10203C] cursor-pointer flex items-center justify-between gap-4 list-none group-hover:text-[#1A9900]">
          <span>Lượng mực và cuộn Master thừa sau kỳ thi có được hoàn lại tiền không?</span>
          <span class="w-6 h-6 rounded-full bg-white border border-gray-200 flex items-center justify-center flex-shrink-0 group-open:rotate-180 transition-transform">
            <i class="fa-solid fa-chevron-down text-xs text-gray-500"></i>
          </span>
        </summary>
        <div class="mt-4 pt-3 border-t border-gray-100 text-[14.5px] text-gray-700 leading-relaxed">
          Có. Hương Sơn cấp dư 20% vật tư để phòng ngừa sự cố. Toàn bộ cuộn Master và bình mực nguyên seal chưa sử dụng sẽ được chúng tôi thu hồi và hoàn trả 100% chi phí.
        </div>
      </details>
        </div>
      </div>
    </div>
  </section>

  <section id="bao-gia-nhanh" class="py-16 bg-[#f5f8fb]">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-2xl mx-auto bg-white p-8 sm:p-10 border border-gray-200 shadow-md rounded-lg">
        <div class="text-center mb-6">
          <span class="text-[#1A9900] font-bold text-xs uppercase tracking-wider block mb-1">Đăng Ký Khảo Sát & Báo Giá</span>
          <h2 class="text-xl sm:text-2xl font-bold text-[#181923]">Nhận Báo Giá Thuê Máy Trong 15 Phút</h2>
          <p class="text-xs text-gray-500 mt-1">Miễn phí khảo sát hiện trạng và dùng thử máy 07 ngày tại văn phòng</p>
        </div>
        
      <div class="bg-white border border-gray-200 p-6 sm:p-9">
        <h2 class="text-xl sm:text-[26px] font-bold text-[#181923] mb-2">Yêu cầu báo giá thuê máy</h2>
        <p class="text-[14.5px] text-gray-500 leading-relaxed mb-7">Hương Sơn phản hồi trong giờ làm việc. Thông tin của Quý đơn vị chỉ dùng để tư vấn và báo giá.</p>
        <form class="lead-form" id="rental-thue-may-in-de-thi-form" method="post" action="/api/lead" novalidate>
          
          <input type="hidden" name="page_type" value="rental" />
          <input type="hidden" name="product_model" value="" />
          <input type="hidden" name="solution_slug" value="" />
          <input type="hidden" name="source_url" value="" data-autofill="url" />
          <input type="hidden" name="referrer" value="" data-autofill="referrer" />
          <input type="hidden" name="utm_source" value="" data-autofill="utm_source" />
          <input type="hidden" name="utm_medium" value="" data-autofill="utm_medium" />
          <input type="hidden" name="utm_campaign" value="" data-autofill="utm_campaign" />
          <input type="hidden" name="utm_term" value="" data-autofill="utm_term" />
          <input type="hidden" name="utm_content" value="" data-autofill="utm_content" />
          <input type="hidden" name="gclid" value="" data-autofill="gclid" />
          <div class="hidden" aria-hidden="true">
            <label for="f-rental-thue-may-in-de-thi-hp">Bỏ trống ô này</label>
            <input type="text" id="f-rental-thue-may-in-de-thi-hp" name="_hp" tabindex="-1" autocomplete="off" />
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
          <div class="sm:col-span-1">
            <label for="f-ho_ten" class="block text-[13px] font-semibold text-[#181923] mb-2">Họ và tên <span class="text-[#1A9900]">*</span></label>
            <input type="text" id="f-ho_ten" name="ho_ten" required placeholder="Nguyễn Văn A"
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition" />
          </div>
          <div class="sm:col-span-1">
            <label for="f-dien_thoai" class="block text-[13px] font-semibold text-[#181923] mb-2">Điện thoại / Zalo <span class="text-[#1A9900]">*</span></label>
            <input type="tel" id="f-dien_thoai" name="dien_thoai" required placeholder="09xx xxx xxx"
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition" />
          </div>
          <div class="sm:col-span-2">
            <label for="f-don_vi" class="block text-[13px] font-semibold text-[#181923] mb-2">Tên đơn vị / Trường / Doanh nghiệp <span class="text-[#1A9900]">*</span></label>
            <input type="text" id="f-don_vi" name="don_vi" required placeholder="Sở GD&amp;ĐT / Trường THPT / Doanh nghiệp..."
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition" />
          </div>
          <div class="sm:col-span-1">
            <label for="f-tinh_thanh" class="block text-[13px] font-semibold text-[#181923] mb-2">Tỉnh / Thành phố <span class="text-[#1A9900]">*</span></label>
            <input type="text" id="f-tinh_thanh" name="tinh_thanh" required placeholder="Hà Nội, Vĩnh Phúc, Quảng Trị..."
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition" />
          </div>
          <div class="sm:col-span-1">
            <label for="f-email" class="block text-[13px] font-semibold text-[#181923] mb-2">Email nhận báo giá</label>
            <input type="email" id="f-email" name="email" placeholder="ten@donvi.gov.vn"
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition" />
          </div><input type="hidden" name="nhu_cau" value="" />
          <div class="sm:col-span-2">
            <label for="f-ghi_chu" class="block text-[13px] font-semibold text-[#181923] mb-2">Mô tả chi tiết nhu cầu <span class="text-gray-400 font-normal">(Không bắt buộc)</span></label>
            <textarea id="f-ghi_chu" name="ghi_chu" rows="3" placeholder="Ghi chú thêm về yêu cầu kỹ thuật, thời gian giao máy hoặc câu hỏi cần giải đáp..."
              class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900] transition"></textarea>
          </div>
          </div>
          <div class="mt-7 flex flex-col sm:flex-row items-center gap-4">
            <button type="submit" data-ga="generate_lead" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-9 py-4 transition w-full sm:w-auto">
              GỬI YÊU CẦU
            </button>
            <a href="tel:0911138583" data-ga="click_hotline" class="text-[14.5px] font-bold text-[#181923] hover:text-[#1A9900] transition">
              <i class="fa-solid fa-phone text-[#1A9900] mr-2"></i>Tư vấn trực tiếp: 091.113.8583
            </a>
          </div>
        </form>
      </div>
      </div>
    </div>
  </section>
@endsection
