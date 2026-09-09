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
<!-- PAGE HERO -->
<section class="relative min-h-[320px] sm:min-h-[380px] flex items-center overflow-hidden" style="background: linear-gradient(135deg, #10203C 0%, #193877 60%, #204DA4 100%);">
  <div class="absolute inset-0 z-0">
    <img src="/assets/images/hero-office.jpg" alt="{{ $category->name }}" class="w-full h-full object-cover object-center opacity-25" loading="eager" />
    <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(16, 32, 60, 0.90) 0%, rgba(16, 32, 60, 0.82) 100%);"></div>
  </div>
  <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 py-14 sm:py-16 w-full text-center">
    <span class="font-handwriting text-2xl sm:text-3xl text-[#5eb74c] font-bold block mb-2">Office Equipment · Solutions</span>
    <h1 class="text-2xl sm:text-[38px] lg:text-[42px] font-bold text-white mb-4 leading-tight tracking-tight drop-shadow-sm">{{ $category->name }}</h1>
    @if($category->description)
      <p class="max-w-3xl mx-auto text-gray-200 text-[15px] sm:text-[16px] leading-relaxed">{{ $category->description }}</p>
    @endif
    <nav class="mt-6 text-[13px] text-gray-300 flex items-center justify-center flex-wrap" aria-label="Breadcrumb">
      <a href="/" class="text-gray-300 hover:text-white transition">Trang chủ</a> 
      <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> 
      <a href="/san-pham/" class="text-gray-300 hover:text-white transition">Sản phẩm</a> 
      <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> 
      <span class="text-[#5eb74c] font-semibold" aria-current="page">{{ $category->name }}</span>
    </nav>
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
      <a href="tel:02439729484" class="border border-gray-400 hover:border-white text-white font-bold text-xs uppercase tracking-wider px-7 py-4 rounded transition">
        <i class="fa-solid fa-phone mr-2 text-[#5eb74c]"></i> 024 3972 9484
      </a>
    </div>
  </div>
</section>
@endsection
