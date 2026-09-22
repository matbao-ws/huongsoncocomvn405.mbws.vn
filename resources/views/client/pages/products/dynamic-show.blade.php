@extends('client.layouts.app')

@php
    $prodTitle = $product->meta_title ?: $product->name;
    if (!str_contains($prodTitle, 'Hương Sơn') && !str_contains($prodTitle, 'Huong Son')) {
        $prodTitle .= ' | Hương Sơn';
    }
    $prodDesc = $product->meta_description ?: ($product->short_description ?: $product->name);
@endphp

@section('title', $prodTitle)
@section('meta_description', $prodDesc)
@section('canonical', url()->current())
@section('og_type', 'product')
@if($product->image_url)
@section('og_image', str_starts_with($product->image_url, 'http') ? $product->image_url : url($product->image_url))
@endif

@section('jsonld')
@php
  $breadcrumbs = [
      ['@type' => 'ListItem', 'position' => 1, 'name' => 'Trang chủ', 'item' => url('/')],
      ['@type' => 'ListItem', 'position' => 2, 'name' => 'Sản phẩm', 'item' => url('/san-pham/')],
  ];
  if ($product->category) {
      $breadcrumbs[] = ['@type' => 'ListItem', 'position' => 3, 'name' => $product->category->name, 'item' => url('/san-pham/' . $product->category->slug . '/')];
      $breadcrumbs[] = ['@type' => 'ListItem', 'position' => 4, 'name' => $product->name, 'item' => url()->current()];
  } else {
      $breadcrumbs[] = ['@type' => 'ListItem', 'position' => 3, 'name' => $product->name, 'item' => url()->current()];
  }

  $productSchema = [
      [
          '@context' => 'https://schema.org/',
          '@type' => 'Product',
          'name' => $product->name,
          'image' => $product->image_url ? (str_starts_with($product->image_url, 'http') ? $product->image_url : url($product->image_url)) : '',
          'description' => $product->short_description ?: $product->name,
          'sku' => $product->sku ?: $product->slug,
          'brand' => [
              '@type' => 'Brand',
              'name' => $product->brand ? $product->brand->name : 'Hương Sơn',
          ],
          'offers' => [
              '@type' => 'Offer',
              'priceCurrency' => 'VND',
              'price' => $product->price > 0 ? (int) $product->price : 0,
              'availability' => 'https://schema.org/InStock',
              'url' => url()->current(),
              'seller' => [
                  '@type' => 'Organization',
                  'name' => 'CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ HƯƠNG SƠN',
              ],
          ],
      ],
      [
          '@context' => 'https://schema.org',
          '@type' => 'BreadcrumbList',
          'itemListElement' => $breadcrumbs,
      ],
  ];
@endphp
<script type="application/ld+json">
{!! json_encode($productSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endsection

@section('content')
<!-- PAGE HERO (SPLIT-HERO FOREGROUND SHOWCASE BANNER) -->
  <section class="relative bg-[#0d1626] py-10 sm:py-14 lg:py-16 overflow-hidden border-b border-white/10">
    <!-- Ambient Tech Background -->
    <div class="absolute inset-0 z-0">
      <div class="absolute inset-0 bg-gradient-to-br from-[#0a1526] via-[#0d1e38] to-[#12284c]"></div>
      <div class="absolute inset-0 opacity-15 pointer-events-none" style="background-image: radial-gradient(rgba(255,255,255,0.2) 1px, transparent 1px); background-size: 28px 28px;"></div>
      <div class="absolute -top-24 -right-24 w-96 h-96 bg-[#1A9900]/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl pointer-events-none"></div>
    </div>

    <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 w-full">
      <!-- Breadcrumb Pill on Top-Left -->
      <div class="flex items-center justify-start mb-4">
        <nav class="inline-flex items-center gap-1.5 sm:gap-2 bg-white/10 hover:bg-white/15 border border-white/20 px-3.5 sm:px-4 py-1.5 backdrop-blur-md text-xs text-white/90 transition shadow-sm flex-wrap" aria-label="Breadcrumb">
          <a href="/" class="hover:text-white flex items-center gap-1.5 transition">
          <i class="fa-solid fa-house text-[#5eb74c] text-[11px]"></i>
          <span>Trang chủ</span>
        </a> 
        <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> 
        <a href="/san-pham/" class="text-gray-200 hover:text-white transition">Sản phẩm</a>
        @if($product->category)
          <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i>
          <a href="/san-pham/{{ $product->category->slug }}/" class="text-gray-200 hover:text-white transition">{{ $product->category->name }}</a>
        @endif
        <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> 
        <span class="text-[#84e372] font-semibold" aria-current="page">{{ $product->name }}</span>
        </nav>
      </div>

      <!-- 2-COLUMN SPLIT HERO SHOWCASE -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
        <!-- LEFT COLUMN: Content & Action (7 cols) -->
        <div class="lg:col-span-7 text-left">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.2em] text-[#5eb74c] mb-2.5">
            <span class="w-2 h-2 rounded-full bg-[#5eb74c] inline-block animate-pulse"></span>
            Hương Sơn
          </div>
          <h1 class="text-2xl sm:text-[34px] lg:text-[40px] font-extrabold text-white mb-3.5 leading-[1.35] tracking-normal drop-shadow-md">
            {{ $product->name }}
          </h1>
          <p class="text-gray-200 text-[14.5px] sm:text-base leading-relaxed mb-6 font-normal max-w-2xl">{{ $product->short_description }}</p>
          <div class="flex flex-wrap items-center gap-2 sm:gap-2.5 mb-7">
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm">
        <i class="fa-solid fa-shield-check text-[#5eb74c]"></i>
        <span>100% Chính hãng &amp; CO/CQ</span>
      </div>
      <div class="inline-flex items-center gap-2 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm">
        <i class="fa-solid fa-screwdriver-wrench text-[#ffc107]"></i>
        <span>Bảo hành &amp; Lắp đặt tận nơi</span>
      </div>
      <a href="tel:0911138583" class="inline-flex items-center gap-2 bg-[#1A9900]/90 hover:bg-[#1A9900] text-white border border-[#5eb74c]/50 px-3.5 py-1.5 transition font-semibold shadow-sm">
        <i class="fa-solid fa-phone"></i>
        <span>Báo giá: 091.113.8583</span>
      </a>
          </div>
          <div class="flex flex-wrap items-center gap-3.5 sm:gap-4">
            <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-7 py-3.5 transition flex items-center gap-2 shadow-lg shadow-[#1A9900]/30 border border-[#5eb74c]/50">
              <span>Yêu Cầu Báo Giá Nhanh</span>
              <i class="fa-solid fa-arrow-right text-[11px]"></i>
            </a>
            <a href="tel:0911138583" class="border border-white/30 hover:border-[#5eb74c] hover:bg-white/10 text-white font-bold text-xs uppercase tracking-wider px-6 py-3.5 transition flex items-center gap-2 backdrop-blur-sm">
              <i class="fa-solid fa-phone text-[#5eb74c]"></i>
              <span>Hotline: 091.113.8583</span>
            </a>
          </div>
        </div>

        <!-- RIGHT COLUMN: THE FOREGROUND PRODUCT SHOWCASE (5 cols) -->
        <div class="lg:col-span-5 relative mt-6 lg:mt-0">
          <div class="relative mx-auto max-w-[420px] lg:max-w-none">
            <div class="absolute -inset-2 bg-gradient-to-tr from-[#1A9900]/25 to-blue-500/20 rounded-2xl blur-xl opacity-70 pointer-events-none"></div>
            <div class="relative bg-gradient-to-b from-white/[0.12] to-white/[0.04] border border-white/20 p-5 sm:p-6 backdrop-blur-xl shadow-2xl overflow-hidden group">
              <!-- Top Floating Badge -->
              <div class="absolute top-3 left-3 bg-[#1A9900] text-white text-[11px] font-bold px-3 py-1 shadow-md flex items-center gap-1.5 border border-white/20 z-20">
                <i class="fa-solid fa-shield-check text-[#5eb74c]"></i>
                <span>100% Chính Hãng CO/CQ</span>
              </div>

              <!-- Foreground Product Image (100% Crisp, High Res, Unobscured!) -->
              <div class="pt-6 pb-2 px-2 flex items-center justify-center min-h-[200px] sm:min-h-[230px]">
                <img src="/assets/images/banners/toshiba_mfp_product_1787905812744.jpg" alt="{{ $product->name }}" class="max-h-[190px] sm:max-h-[220px] w-auto object-contain mx-auto drop-shadow-[0_15px_25px_rgba(0,0,0,0.6)] transform group-hover:scale-105 transition-transform duration-500" loading="eager" />
              </div>

              <!-- Bottom Caption Strip & Floating Badge -->
              <div class="pt-3 border-t border-white/15 flex items-center justify-between text-xs text-gray-200">
                <div class="flex items-center gap-1.5 font-medium">
                  <i class="fa-solid fa-circle-check text-[#5eb74c]"></i>
                  <span>Thiết bị văn phòng & In ấn hiện đại</span>
                </div>
                <span class="bg-[#0d1626]/80 text-[#84e372] text-[10.5px] font-bold px-2 py-0.5 border border-[#5eb74c]/40">
                  Bảo hành 24T
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- PRODUCT DETAILS BODY -->
<section class="py-14 sm:py-16 bg-white">
  <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
      
      <!-- Product Image & Quick Info (Sticky Sidebar) -->
      <div class="lg:col-span-5">
        <div class="border border-gray-200 rounded-lg p-6 bg-[#f7f3ee] text-center sticky top-24 shadow-sm">
          <div class="bg-white p-6 rounded border border-gray-200/80 shadow-inner flex items-center justify-center min-h-[340px] mb-6">
            <img src="{{ $product->image_url ?: '/assets/images/products/toshiba-e-studio-2829a.jpg' }}" 
                 alt="{{ $product->name }}" 
                 class="max-h-[360px] w-auto object-contain mx-auto transition duration-300 hover:scale-105"
                 onerror="this.src='/assets/images/products/toshiba-e-studio-2829a.jpg'" />
          </div>
          
          <div class="text-left space-y-3 pt-2 border-t border-gray-200">
            @if($product->sku)
              <div class="flex justify-between text-[14px]">
                <span class="text-gray-500">Mã SKU:</span>
                <span class="font-semibold text-[#181923]">{{ $product->sku }}</span>
              </div>
            @endif
            @if($product->brand)
              <div class="flex items-center justify-between text-[14px]">
                <span class="text-gray-500">Thương hiệu:</span>
                <span class="inline-flex items-center font-bold text-[#10203C] bg-white border border-gray-200 px-2.5 py-1 rounded text-xs tracking-wide shadow-sm">
                  <i class="fa-solid fa-award text-[#1A9900] mr-1.5 text-xs"></i> {{ $product->brand->name }}
                </span>
              </div>
            @endif
            <div class="flex justify-between text-[14px]">
              <span class="text-gray-500">Giá tham khảo:</span>
              <span class="font-bold text-[#1A9900] text-[17px]">
                {{ $product->price > 0 ? number_format((float) $product->price) . ' đ' : 'Liên hệ báo giá' }}
              </span>
            </div>
            <div class="flex justify-between text-[14px]">
              <span class="text-gray-500">Tình trạng:</span>
              <span class="inline-flex items-center text-emerald-700 font-semibold">
                <i class="fa-solid fa-circle-check text-xs mr-1.5"></i> Sẵn sàng cung cấp &amp; bàn giao
              </span>
            </div>
            <div class="flex justify-between text-[14px]">
              <span class="text-gray-500">Bảo hành:</span>
              <span class="font-medium text-gray-700">12 – 24 tháng chính hãng</span>
            </div>
          </div>

          <div class="mt-6 flex flex-col gap-2.5">
            <a href="/nhan-tu-van/bao-gia/?product={{ urlencode($product->name) }}" 
               class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider py-3.5 px-6 rounded transition text-center shadow-md">
              <i class="fa-solid fa-file-invoice-dollar mr-2"></i> Nhận báo giá &amp; ưu đãi dự án
            </a>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
              <a href="tel:0911138583" 
                 class="border border-[#1A9900] text-[#1A9900] hover:bg-[#1A9900] hover:text-white font-bold text-xs uppercase tracking-wider py-2.5 px-3 rounded transition text-center flex items-center justify-center">
                <i class="fa-solid fa-phone mr-1.5"></i> Hotline: 091.113.8583
              </a>
              <a href="tel:0912304058" 
                 class="border border-[#10203C] text-[#10203C] hover:bg-[#10203C] hover:text-white font-bold text-xs uppercase tracking-wider py-2.5 px-3 rounded transition text-center flex items-center justify-center">
                <i class="fa-solid fa-wrench mr-1.5"></i> Kỹ thuật: 0912.304.058
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Product Description & Specifications -->
      <div class="lg:col-span-7">
        <div class="product-description-container">
          <h2 class="text-2xl font-bold text-[#10203C] border-b pb-3 mb-6">Mô tả &amp; Thông số kỹ thuật</h2>
          
          @if($product->description)
            <div class="text-[15px] leading-[1.8] text-[#181923] space-y-4">
              {!! $product->description !!}
            </div>
          @else
            <p class="text-[15.5px] leading-[1.8] text-gray-700">
              {{ $product->short_description ?: 'Sản phẩm chính hãng được cung cấp, lắp đặt và bảo hành trực tiếp bởi Công ty TNHH Thương mại và Dịch vụ Hương Sơn.' }}
            </p>
          @endif

          <h3 class="text-xl font-bold text-[#10203C] border-b pb-3 mt-10 mb-5">Cam kết dịch vụ từ Hương Sơn</h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="p-4 rounded border border-gray-200 bg-[#fbf9f6] flex items-start space-x-3">
              <i class="fa-solid fa-shield-halved text-[#1A9900] text-lg mt-1 flex-shrink-0"></i>
              <div>
                <h4 class="font-bold text-[15px] text-[#181923] mb-1">Thiết bị chuẩn chính hãng</h4>
                <p class="text-xs text-gray-600">Đầy đủ chứng nhận xuất xứ CO/CQ, bảo hành theo quy chuẩn nhà sản xuất.</p>
              </div>
            </div>
            <div class="p-4 rounded border border-gray-200 bg-[#fbf9f6] flex items-start space-x-3">
              <i class="fa-solid fa-truck-fast text-[#1A9900] text-lg mt-1 flex-shrink-0"></i>
              <div>
                <h4 class="font-bold text-[15px] text-[#181923] mb-1">Giao hàng &amp; Lắp đặt tận nơi</h4>
                <p class="text-xs text-gray-600">Đội ngũ kỹ sư trực tiếp vận chuyển, lắp đặt và hướng dẫn vận hành chu đáo.</p>
              </div>
            </div>
            <div class="p-4 rounded border border-gray-200 bg-[#fbf9f6] flex items-start space-x-3">
              <i class="fa-solid fa-screwdriver-wrench text-[#1A9900] text-lg mt-1 flex-shrink-0"></i>
              <div>
                <h4 class="font-bold text-[15px] text-[#181923] mb-1">Hỗ trợ kỹ thuật 24/7</h4>
                <p class="text-xs text-gray-600">Ứng cứu sự cố nhanh trong 2 giờ tại khu vực nội thành Hà Nội và lân cận.</p>
              </div>
            </div>
            <div class="p-4 rounded border border-gray-200 bg-[#fbf9f6] flex items-start space-x-3">
              <i class="fa-solid fa-boxes-stacked text-[#1A9900] text-lg mt-1 flex-shrink-0"></i>
              <div>
                <h4 class="font-bold text-[15px] text-[#181923] mb-1">Linh kiện &amp; Vật tư sẵn kho</h4>
                <p class="text-xs text-gray-600">Kho vật tư mực in, trống drum, gạt, bột từ FANSIPAN luôn sẵn sàng thay thế.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    @if(isset($relatedProducts) && $relatedProducts->isNotEmpty())
      <!-- RELATED PRODUCTS -->
      <div class="mt-16 pt-10 border-t border-gray-200">
        <div class="flex items-center justify-between mb-6">
          <h3 class="text-2xl font-bold text-[#10203C]">Sản phẩm cùng phân khúc</h3>
          @if($product->category)
            <a href="/san-pham/{{ $product->category->slug }}/" class="text-xs font-bold text-[#1A9900] uppercase tracking-wider hover:underline">
              Xem toàn bộ danh mục &rarr;
            </a>
          @endif
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          @foreach($relatedProducts as $rel)
            <article class="border border-gray-200/80 group flex flex-col rounded bg-[#fbf9f6] overflow-hidden hover:shadow-md transition">
              <div class="h-48 overflow-hidden bg-white p-3 flex items-center justify-center border-b border-gray-100">
                <img src="{{ $rel->image_url ?: '/assets/images/products/toshiba-e-studio-2829a.jpg' }}" 
                     alt="{{ $rel->name }}" 
                     class="max-h-full max-w-full object-contain group-hover:scale-105 transition duration-300"
                     onerror="this.src='/assets/images/products/toshiba-e-studio-2829a.jpg'" />
              </div>
              <div class="p-5 flex flex-col flex-1">
                @if($rel->brand)
                  <span class="text-[10px] font-bold uppercase tracking-wider text-[#1A9900] mb-1">{{ $rel->brand->name }}</span>
                @endif
                <h4 class="font-bold text-[15px] text-[#181923] group-hover:text-[#1A9900] transition line-clamp-2 mb-2">
                  <a href="/san-pham/{{ $rel->category ? $rel->category->slug : ($product->category ? $product->category->slug : 'san-pham') }}/{{ $rel->slug }}/">
                    {{ $rel->name }}
                  </a>
                </h4>
                <div class="mt-auto pt-3 border-t border-gray-200/60 flex items-center justify-between text-xs">
                  <span class="font-bold text-[#1A9900]">
                    {{ $rel->price > 0 ? number_format((float) $rel->price) . ' đ' : 'Liên hệ' }}
                  </span>
                  <a href="/san-pham/{{ $rel->category ? $rel->category->slug : ($product->category ? $product->category->slug : 'san-pham') }}/{{ $rel->slug }}/" class="font-bold text-[#10203C] hover:text-[#1A9900]">
                    Chi tiết &rarr;
                  </a>
                </div>
              </div>
            </article>
          @endforeach
        </div>
      </div>
    @endif

  </div>
</section>

<style>
.product-description-container table {
  width: 100%;
  border-collapse: collapse;
  margin: 1.25rem 0;
  border: 1px solid #e5e7eb;
  border-radius: 6px;
  overflow: hidden;
}
.product-description-container table th,
.product-description-container table td {
  padding: 0.75rem 1rem;
  border: 1px solid #e5e7eb;
  font-size: 14px;
  line-height: 1.6;
}
.product-description-container table tr:nth-child(even) td {
  background-color: #faf8f5;
}
.product-description-container table th {
  background-color: #f3eee7;
  color: #10203C;
  font-weight: 600;
  text-align: left;
  width: 32%;
}
.product-description-container h2, 
.product-description-container h3 {
  color: #10203C;
  font-weight: 700;
}
.product-description-container h4 {
  color: #10203C;
  font-weight: 700;
  font-size: 16px;
  margin-top: 1.5rem;
  margin-bottom: 0.75rem;
  padding-bottom: 0.25rem;
  border-bottom: 2px solid #5eb74c;
  display: inline-block;
}
.product-description-container ul {
  list-style-type: disc;
  padding-left: 1.5rem;
  margin: 0.75rem 0 1.25rem 0;
}
.product-description-container li {
  margin-bottom: 0.4rem;
  color: #374151;
  font-size: 14.5px;
  line-height: 1.65;
}
</style>
@endsection
