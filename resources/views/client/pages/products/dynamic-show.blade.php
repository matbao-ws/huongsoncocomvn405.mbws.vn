@extends('client.layouts.app')

@section('title', ($product->meta_title ?: $product->name) . " | Hương Sơn")
@section('meta_description', $product->meta_description ?: ($product->short_description ?: $product->name))
@section('canonical', url()->current())

@section('content')
<!-- PAGE HERO -->
<section class="relative min-h-[320px] sm:min-h-[360px] flex items-center overflow-hidden" style="background: linear-gradient(135deg, #10203C 0%, #193877 60%, #204DA4 100%);">
  <div class="absolute inset-0 z-0">
    <img src="/assets/images/hero-office.jpg" alt="{{ $product->name }}" class="w-full h-full object-cover object-center opacity-25" loading="eager" />
    <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(16, 32, 60, 0.90) 0%, rgba(16, 32, 60, 0.82) 100%);"></div>
  </div>
  <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-14 w-full text-center">
    <span class="font-handwriting text-2xl sm:text-3xl text-[#5eb74c] font-bold block mb-2">
      {{ $product->category ? $product->category->name : 'Sản phẩm chính hãng' }}
    </span>
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
      
      <!-- Product Image & Quick Info -->
      <div class="lg:col-span-5">
        <div class="border border-gray-200 rounded-lg p-6 bg-[#f7f3ee] text-center sticky top-24">
          <div class="bg-white p-4 rounded border border-gray-200/80 shadow-sm flex items-center justify-center min-h-[320px] mb-6">
            <img src="{{ $product->image_url ?: '/assets/images/products/toshiba-e-studio-2829a.jpg' }}" 
                 alt="{{ $product->name }}" 
                 class="max-h-[350px] w-auto object-contain mx-auto transition duration-300 hover:scale-105"
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
              <div class="flex justify-between text-[14px]">
                <span class="text-gray-500">Thương hiệu:</span>
                <span class="font-semibold text-[#181923]">{{ $product->brand->name }}</span>
              </div>
            @endif
            <div class="flex justify-between text-[14px]">
              <span class="text-gray-500">Giá tham khảo:</span>
              <span class="font-bold text-[#1A9900] text-[16px]">
                {{ $product->price > 0 ? number_format((float) $product->price) . ' đ' : 'Liên hệ báo giá' }}
              </span>
            </div>
            <div class="flex justify-between text-[14px]">
              <span class="text-gray-500">Tình trạng:</span>
              <span class="inline-flex items-center text-emerald-700 font-semibold">
                <i class="fa-solid fa-circle-check text-xs mr-1.5"></i> Sẵn sàng cung cấp &amp; bàn giao
              </span>
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
        <div class="prose max-w-none text-[#181923]">
          <h2 class="text-2xl font-bold text-[#10203C] border-b pb-3 mb-6">Mô tả &amp; Đặc điểm nổi bật</h2>
          @if($product->description)
            <div class="text-[15.5px] leading-[1.8] text-gray-700 space-y-4">
              {!! $product->description !!}
            </div>
          @else
            <p class="text-[15.5px] leading-[1.8] text-gray-700">
              {{ $product->short_description ?: 'Sản phẩm chính hãng được bảo hành và hỗ trợ kỹ thuật trực tiếp bởi Công ty TNHH Thương mại và Dịch vụ Hương Sơn.' }}
            </p>
          @endif

          <h3 class="text-xl font-bold text-[#10203C] border-b pb-3 mt-10 mb-5">Cam kết dịch vụ từ Hương Sơn</h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 not-prose">
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
  </div>
</section>
@endsection
