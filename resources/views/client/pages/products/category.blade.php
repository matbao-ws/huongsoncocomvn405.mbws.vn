@extends('client.layouts.app')

@php
    $catTitle = $category->meta_title ?: $category->name;
    if (!str_contains($catTitle, 'Hương Sơn') && !str_contains($catTitle, 'Huong Son')) {
        $catTitle .= ' | Hương Sơn';
    }
    $catDesc = $category->meta_description ?: ($category->description ?: ("Danh mục thiết bị " . $category->name . " chính hãng tại Hương Sơn."));
@endphp

@section('title', $catTitle)
@section('meta_description', $catDesc)
@section('canonical', url()->current())
@section('og_type', 'website')
@if($category->image_url)
@section('og_image', str_starts_with($category->image_url, 'http') ? $category->image_url : url($category->image_url))
@endif

@section('jsonld')
@php
  $itemList = [];
  foreach ($products as $idx => $p) {
      $itemList[] = [
          '@type' => 'ListItem',
          'position' => $idx + 1,
          'name' => $p->name,
          'url' => url('/san-pham/' . $category->slug . '/' . $p->slug . '/'),
      ];
  }
  $categorySchema = [
      [
          '@context' => 'https://schema.org',
          '@type' => 'BreadcrumbList',
          'itemListElement' => [
              ['@type' => 'ListItem', 'position' => 1, 'name' => 'Trang chủ', 'item' => url('/')],
              ['@type' => 'ListItem', 'position' => 2, 'name' => 'Sản phẩm', 'item' => url('/san-pham/')],
              ['@type' => 'ListItem', 'position' => 3, 'name' => $category->name, 'item' => url()->current()],
          ],
      ],
      [
          '@context' => 'https://schema.org',
          '@type' => 'ItemList',
          'name' => $category->name,
          'itemListElement' => $itemList,
      ],
  ];
@endphp
<script type="application/ld+json">
{!! json_encode($categorySchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
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
        <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i>
        <span class="text-[#84e372] font-semibold" aria-current="page">{{ $category->name }}</span>
        </nav>
      </div>

      <!-- 2-COLUMN SPLIT HERO SHOWCASE -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
        <!-- LEFT COLUMN: Content & Action (7 cols) -->
        <div class="lg:col-span-7 text-left">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.2em] text-[#5eb74c] mb-2.5">
            <span class="w-2 h-2 rounded-full bg-[#5eb74c] inline-block animate-pulse"></span>
            Danh mục thiết bị chính hãng
          </div>
          <h1 class="text-2xl sm:text-[34px] lg:text-[40px] font-extrabold text-white mb-3.5 leading-[1.35] tracking-normal drop-shadow-md">
            {{ $category->name }}
          </h1>
          <p class="text-gray-200 text-[14.5px] sm:text-base leading-relaxed mb-6 font-normal max-w-2xl">{{ $category->description }}</p>
          <div class="flex flex-wrap items-center gap-2 sm:gap-2.5 mb-7">
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm">
        <i class="fa-solid fa-shield-check text-[#5eb74c]"></i>
        <span>100% Thiết bị chính hãng CO/CQ</span>
      </div>
      <div class="inline-flex items-center gap-2 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm">
        <i class="fa-solid fa-truck-fast text-[#ffc107]"></i>
        <span>Giao hàng &amp; Lắp đặt toàn quốc</span>
      </div>
      <a href="tel:0911138583" class="inline-flex items-center gap-2 bg-[#1A9900]/90 hover:bg-[#1A9900] text-white border border-[#5eb74c]/50 px-3.5 py-1.5 transition font-semibold shadow-sm">
        <i class="fa-solid fa-phone"></i>
        <span>Hotline: 091.113.8583</span>
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
                <img src="/assets/images/banners/toshiba_mfp_product_1787905812744.jpg" alt="{{ $category->name }}" class="max-h-[190px] sm:max-h-[220px] w-auto object-contain mx-auto drop-shadow-[0_15px_25px_rgba(0,0,0,0.6)] transform group-hover:scale-105 transition-transform duration-500" loading="eager" />
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

<!-- VALUE PROPOSITIONS -->
<section class="py-8 border-b border-gray-200" style="background-color: rgb(247, 243, 238);">
  <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="border-l-2 border-[#1A9900] pl-4">
        <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-1">Chất lượng chính hãng</p>
        <p class="text-[14px] text-[#181923] leading-relaxed">Đầy đủ CO/CQ chứng nhận xuất xứ, bảo hành tiêu chuẩn từ nhà sản xuất.</p>
      </div>
      <div class="border-l-2 border-[#1A9900] pl-4">
        <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-1">Phương thức linh hoạt</p>
        <p class="text-[14px] text-[#181923] leading-relaxed">Cung cấp phương án mua đứt hoặc cho thuê trọn gói, miễn phí mực &amp; linh kiện.</p>
      </div>
      <div class="border-l-2 border-[#1A9900] pl-4">
        <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#1A9900] mb-1">Kỹ thuật chuyên sâu</p>
        <p class="text-[14px] text-[#181923] leading-relaxed">Đội ngũ kỹ sư trên 15 năm kinh nghiệm, hỗ trợ kỹ thuật tận nơi trong vòng 2 giờ.</p>
      </div>
    </div>
  </div>
</section>

<!-- PRODUCT LIST -->
<section class="py-14 sm:py-16 bg-white">
  <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8 pb-4 border-b border-gray-100">
      <div class="flex items-center gap-3">
        <p class="text-sm font-semibold text-gray-500">
          Hiển thị <span class="text-[#181923] font-bold">{{ $products->count() }}</span> thiết bị trong danh mục
        </p>
        @if(!empty($currentBrand))
          <a href="/san-pham/{{ $category->slug }}/" class="text-xs text-red-600 hover:underline inline-flex items-center ml-2">
            <i class="fa-solid fa-xmark mr-1"></i> Bỏ lọc
          </a>
        @endif
      </div>

      @if(!empty($categoryBrands) && $categoryBrands->count() > 1)
        <div class="flex items-center gap-2 flex-wrap">
          <span class="text-xs font-semibold text-gray-500 mr-1">Thương hiệu:</span>
          <a href="/san-pham/{{ $category->slug }}/" 
             class="text-xs font-bold px-3 py-1.5 rounded transition {{ empty($currentBrand) ? 'bg-[#10203C] text-white shadow-sm' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
            Tất cả
          </a>
          @foreach($categoryBrands as $b)
            <a href="/san-pham/{{ $category->slug }}/?brand={{ $b->slug }}" 
               class="text-xs font-bold px-3 py-1.5 rounded transition {{ ($currentBrand ?? '') === $b->slug ? 'bg-[#1A9900] text-white shadow-sm' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
              {{ $b->name }}
            </a>
          @endforeach
        </div>
      @else
        <div class="flex items-center gap-2">
          <span class="text-xs text-gray-400">Thương hiệu:</span>
          <span class="text-xs font-bold text-[#1A9900] bg-green-50 px-2.5 py-1 rounded">Chính hãng ủy quyền</span>
        </div>
      @endif
    </div>

    @if($products->isEmpty())
      <div class="text-center py-16 bg-[#f7f3ee] rounded-lg border border-gray-200">
        <i class="fa-solid fa-box-open text-4xl text-gray-400 mb-3"></i>
        <h3 class="text-lg font-bold text-[#181923]">Đang cập nhật sản phẩm</h3>
        <p class="text-gray-500 text-sm mt-1 max-w-md mx-auto">Danh mục này đang được bộ phận chuyên môn cập nhật dữ liệu. Quý khách vui lòng liên hệ hotline để nhận tư vấn trực tiếp.</p>
        <a href="/nhan-tu-van/bao-gia/" class="mt-5 inline-block bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider py-3 px-6 rounded transition">Gửi yêu cầu báo giá</a>
      </div>
    @else
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($products as $prod)
          <article class="border border-gray-200/80 group flex flex-col rounded overflow-hidden hover:shadow-md transition bg-[#fbf9f6]">
            <div class="h-56 overflow-hidden bg-white p-4 flex items-center justify-center border-b border-gray-200/60 relative">
              @if($prod->brand)
                <span class="absolute top-3 left-3 text-[10.5px] font-bold uppercase tracking-wider px-2.5 py-1 bg-[#10203C]/90 backdrop-blur-sm text-white rounded shadow-sm flex items-center gap-1.5">
                  <i class="fa-solid fa-certificate text-[#1A9900] text-[10px]"></i> {{ $prod->brand->name }}
                </span>
              @endif
              <img src="{{ $prod->image_url ?: '/assets/images/products/toshiba-e-studio-2829a.jpg' }}" 
                   alt="{{ $prod->name }}" 
                   loading="lazy" 
                   class="max-h-full max-w-full object-contain group-hover:scale-105 transition duration-300"
                   onerror="this.src='/assets/images/products/toshiba-e-studio-2829a.jpg'" />
            </div>
            <div class="p-6 flex flex-col flex-1">
              <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
                <a href="/san-pham/{{ $category->slug }}/{{ $prod->slug }}/">{{ $prod->name }}</a>
              </h3>
              <p class="text-gray-500 text-[14px] leading-relaxed mb-4 flex-1 line-clamp-3">
                {{ $prod->short_description ?: 'Thiết bị văn phòng và in ấn chính hãng, bảo hành toàn diện bởi Công ty Hương Sơn.' }}
              </p>
              <div class="pt-4 border-t border-gray-200/70 flex items-center justify-between mt-auto">
                <div>
                  <span class="text-[11px] text-gray-400 block">Giá tham khảo</span>
                  <span class="font-bold text-[#1A9900] text-[15px]">
                    {{ $prod->price > 0 ? number_format((float) $prod->price) . ' đ' : 'Liên hệ báo giá' }}
                  </span>
                </div>
                <a href="/san-pham/{{ $category->slug }}/{{ $prod->slug }}/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
                  <span>Xem chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px] ml-1"></i>
                </a>
              </div>
            </div>
          </article>
        @endforeach
      </div>
    @endif
  </div>
</section>

<!-- BOTTOM CTA -->
<section class="py-14 bg-[#181924] text-white">
  <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
    <div class="max-w-2xl text-center lg:text-left">
      <h2 class="text-2xl sm:text-3xl font-bold mb-3 leading-tight">Cần tư vấn cấu hình hoặc nhận ưu đãi dự án?</h2>
      <p class="text-gray-300 text-[15px] leading-relaxed">Đội ngũ chuyên gia kỹ thuật Hương Sơn sẵn sàng khảo sát, đề xuất giải pháp phù hợp với ngân sách của Quý cơ quan, trường học, doanh nghiệp.</p>
    </div>
    <div class="flex flex-wrap items-center gap-4 flex-shrink-0">
      <a href="/nhan-tu-van/bao-gia/" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 rounded transition shadow-lg">
        <i class="fa-solid fa-file-invoice-dollar mr-2"></i> Yêu cầu báo giá
      </a>
      <a href="tel:0911138583" class="border border-gray-400 hover:border-white text-white font-bold text-xs uppercase tracking-wider px-7 py-4 rounded transition">
        <i class="fa-solid fa-phone mr-2 text-[#5eb74c]"></i> 091.113.8583
      </a>
    </div>
  </div>
</section>
@endsection
