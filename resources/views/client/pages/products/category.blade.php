@extends('client.layouts.app')

@section('title', $category->name . " | Hương Sơn")
@section('meta_description', $category->description ?: ("Danh mục thiết bị " . $category->name . " tại Hương Sơn."))
@section('canonical', url()->current())

@section('content')
<!-- PAGE HERO -->
<section class="relative min-h-[320px] sm:min-h-[360px] flex items-center overflow-hidden" style="background: linear-gradient(135deg, #10203C 0%, #193877 60%, #204DA4 100%);">
  <div class="absolute inset-0 z-0">
    <img src="/assets/images/hero-office.jpg" alt="{{ $category->name }}" class="w-full h-full object-cover object-center opacity-25" loading="eager" />
    <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(16, 32, 60, 0.90) 0%, rgba(16, 32, 60, 0.82) 100%);"></div>
  </div>
  <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-14 w-full text-center">
    <span class="font-handwriting text-2xl sm:text-3xl text-[#5eb74c] font-bold block mb-2">Danh mục thiết bị</span>
    <h1 class="text-2xl sm:text-[34px] lg:text-[38px] font-bold text-white mb-3 leading-tight tracking-tight drop-shadow-sm">{{ $category->name }}</h1>
    @if($category->description)
      <p class="max-w-3xl mx-auto text-gray-200 text-[15px] sm:text-[16px] leading-relaxed">{{ $category->description }}</p>
    @endif
    <nav class="mt-5 text-[13px] text-gray-300 flex items-center justify-center flex-wrap" aria-label="Breadcrumb">
      <a href="/" class="text-gray-300 hover:text-white transition">Trang chủ</a> 
      <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> 
      <a href="/san-pham/" class="text-gray-300 hover:text-white transition">Sản phẩm</a>
      <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> 
      <span class="text-[#5eb74c] font-semibold" aria-current="page">{{ $category->name }}</span>
    </nav>
  </div>
</section>

<!-- PRODUCT LIST -->
<section class="py-14 sm:py-16 bg-white">
  <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
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
          <article class="border border-gray-200/80 group flex flex-col rounded-sm overflow-hidden" style="background-color: rgb(247, 243, 238);">
            <div class="h-52 overflow-hidden bg-white p-4 flex items-center justify-center border-b border-gray-200/60">
              <img src="{{ $prod->image_url ?: '/assets/images/products/toshiba-e-studio-2829a.jpg' }}" 
                   alt="{{ $prod->name }}" 
                   loading="lazy" 
                   class="max-h-full max-w-full object-contain group-hover:scale-105 transition duration-300"
                   onerror="this.src='/assets/images/products/toshiba-e-studio-2829a.jpg'" />
            </div>
            <div class="p-6 flex flex-col flex-1">
              @if($prod->brand)
                <span class="inline-block text-[10.5px] font-bold uppercase tracking-[0.15em] text-[#1A9900] mb-2">{{ $prod->brand->name }}</span>
              @endif
              <h3 class="text-[17px] font-bold text-[#181923] mb-2.5 group-hover:text-[#1A9900] transition leading-snug">
                <a href="/san-pham/{{ $category->slug }}/{{ $prod->slug }}/">{{ $prod->name }}</a>
              </h3>
              <p class="text-gray-500 text-[14.5px] leading-relaxed mb-4 flex-1">
                {{ $prod->short_description ?: 'Cung cấp và bảo hành chính hãng bởi Hương Sơn.' }}
              </p>
              <div class="pt-4 border-t border-gray-200/70 flex items-center justify-between">
                <span class="font-bold text-[#1A9900] text-sm">
                  {{ $prod->price > 0 ? number_format((float) $prod->price) . ' đ' : 'Liên hệ báo giá' }}
                </span>
                <a href="/san-pham/{{ $category->slug }}/{{ $prod->slug }}/" class="inline-flex items-center space-x-1 text-[#1A9900] font-bold text-xs uppercase tracking-wider hover:underline">
                  <span>Chi tiết</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
              </div>
            </div>
          </article>
        @endforeach
      </div>
    @endif
  </div>
</section>
@endsection
