@extends('client.layouts.app')

@section('title', ($product->meta_title ?: $product->name) . " | Hương Sơn")
@section('meta_description', $product->meta_description ?: ($product->short_description ?: $product->name))
@section('canonical', url()->current())

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
<!-- PAGE HERO -->
<section class="relative min-h-[320px] sm:min-h-[360px] flex items-center overflow-hidden" style="background: linear-gradient(135deg, #10203C 0%, #193877 60%, #204DA4 100%);">
  <div class="absolute inset-0 z-0">
    <img src="/assets/images/hero-office.jpg" alt="{{ $product->name }}" class="w-full h-full object-cover object-center opacity-25" loading="eager" />
    <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(16, 32, 60, 0.90) 0%, rgba(16, 32, 60, 0.82) 100%);"></div>
  </div>
  <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-14 w-full text-center">
    <div class="flex items-center justify-center gap-3 mb-2 flex-wrap">
      <span class="font-handwriting text-2xl sm:text-3xl text-[#5eb74c] font-bold">
        {{ $product->category ? $product->category->name : 'Thiết bị chính hãng' }}
      </span>
      @if($product->brand)
        <span class="text-xs font-bold uppercase tracking-wider text-white bg-white/20 backdrop-blur-md px-3 py-1 rounded-full border border-white/30 inline-flex items-center gap-1.5">
          <i class="fa-solid fa-award text-[#5eb74c]"></i> {{ $product->brand->name }}
        </span>
      @endif
    </div>
    <h1 class="text-2xl sm:text-[34px] lg:text-[38px] font-bold text-white mb-3 leading-tight tracking-tight drop-shadow-sm">
      {{ $product->name }}
    </h1>
    @if($product->short_description)
      <p class="max-w-3xl mx-auto text-gray-200 text-[15px] sm:text-[16px] leading-relaxed">
        {{ $product->short_description }}
      </p>
    @endif
    <nav class="mt-5 text-[13px] text-gray-300 flex items-center justify-center flex-wrap" aria-label="Breadcrumb">
      <a href="/" class="text-gray-300 hover:text-white transition">Trang chủ</a> 
      <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> 
      <a href="/san-pham/" class="text-gray-300 hover:text-white transition">Sản phẩm</a>
      @if($product->category)
        <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i>
        <a href="/san-pham/{{ $product->category->slug }}/" class="text-gray-300 hover:text-white transition">{{ $product->category->name }}</a>
      @endif
      <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> 
      <span class="text-[#5eb74c] font-semibold" aria-current="page">{{ $product->name }}</span>
    </nav>
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

          <div class="mt-6 flex flex-col gap-3">
            <a href="/nhan-tu-van/bao-gia/?product={{ urlencode($product->name) }}" 
               class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider py-3.5 px-6 rounded transition text-center shadow-md">
              <i class="fa-solid fa-file-invoice-dollar mr-2"></i> Nhận báo giá &amp; ưu đãi dự án
            </a>
            <a href="tel:0913237302" 
               class="border border-[#10203C] text-[#10203C] hover:bg-[#10203C] hover:text-white font-bold text-xs uppercase tracking-wider py-3 px-6 rounded transition text-center">
              <i class="fa-solid fa-phone mr-2"></i> Hotline kỹ thuật: 0913 237 302
            </a>
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
}
.product-description-container table th,
.product-description-container table td {
  padding: 0.65rem 0.85rem;
  border: 1px solid #e5e7eb;
  font-size: 14px;
}
.product-description-container table th {
  background-color: #f7f3ee;
  color: #181923;
  font-weight: 600;
  text-align: left;
  width: 35%;
}
.product-description-container h2, 
.product-description-container h3 {
  color: #10203C;
  font-weight: 700;
}
.product-description-container ul {
  list-style-type: disc;
  padding-left: 1.5rem;
  margin: 0.75rem 0;
}
</style>
@endsection
