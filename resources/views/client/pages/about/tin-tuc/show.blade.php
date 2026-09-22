@extends('client.layouts.app')

@php
    $postTitle = $post->seo_title ?: $post->title;
    if (!str_contains($postTitle, 'Hương Sơn') && !str_contains($postTitle, 'Huong Son')) {
        $postTitle .= ' | Hương Sơn';
    }
    $postDesc = $post->seo_description ?: ($post->summary ?: \Illuminate\Support\Str::limit(strip_tags($post->content), 155));
@endphp

@section('title', $postTitle)
@section('meta_description', $postDesc)
@section('canonical', url()->current())
@section('og_type', 'article')
@if($post->image_url)
@section('og_image', str_starts_with($post->image_url, 'http') ? $post->image_url : url($post->image_url))
@endif

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
          <a href="/" class="hover:text-white flex items-center gap-1.5 transition"><i class="fa-solid fa-house text-[#5eb74c] text-[11px]"></i><span>Trang chủ</span></a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <a href="/ve-huong-son/tin-tuc/" class="text-gray-200 hover:text-white transition">Tin tức</a> <i class="fa-solid fa-angle-right text-[9px] text-gray-400"></i> <span class="text-[#84e372] font-semibold" aria-current="page">{{ $post->title }}</span>
        </nav>
      </div>

      <!-- 2-COLUMN SPLIT HERO SHOWCASE -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
        <!-- LEFT COLUMN: Content & Action (7 cols) -->
        <div class="lg:col-span-7 text-left">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.2em] text-[#5eb74c] mb-2.5">
            <span class="w-2 h-2 rounded-full bg-[#5eb74c] inline-block animate-pulse"></span>
            Tin tức &amp; Dự án
          </div>
          <h1 class="text-2xl sm:text-[34px] lg:text-[40px] font-extrabold text-white mb-3.5 leading-[1.35] tracking-normal drop-shadow-md">
            {{ $post->title }}
          </h1>
          
          <div class="flex flex-wrap items-center gap-2 sm:gap-2.5 mb-7">
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm"><i class="fa-solid fa-calendar-check text-[#5eb74c]"></i> <span>Thành lập từ 2008 (16+ năm uy tín)</span></div>
        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/15 px-3 py-1.5 text-gray-100 backdrop-blur-sm"><i class="fa-solid fa-certificate text-[#ffc107]"></i> <span>Đối tác Ricoh, Toshiba, Duplo</span></div>
        <a href="tel:0911138583" class="inline-flex items-center gap-2 bg-[#1A9900]/90 hover:bg-[#1A9900] text-white border border-[#5eb74c]/50 px-3.5 py-1.5 transition font-semibold shadow-sm"><i class="fa-solid fa-phone"></i> <span>Hotline: 091.113.8583</span></a>
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
                <i class="fa-solid fa-building text-[#5eb74c]"></i>
                <span>Thành lập từ 2008</span>
              </div>

              <!-- Foreground Product Image (100% Crisp, High Res, Unobscured!) -->
              <div class="pt-6 pb-2 px-2 flex items-center justify-center min-h-[200px] sm:min-h-[230px]">
                <img src="/assets/images/banners/hero_office_solutions_1787899910391.jpg" alt="{{ $post->title }}" class="max-h-[190px] sm:max-h-[220px] w-auto object-contain mx-auto drop-shadow-[0_15px_25px_rgba(0,0,0,0.6)] transform group-hover:scale-105 transition-transform duration-500" loading="eager" />
              </div>

              <!-- Bottom Caption Strip & Floating Badge -->
              <div class="pt-3 border-t border-white/15 flex items-center justify-between text-xs text-gray-200">
                <div class="flex items-center gap-1.5 font-medium">
                  <i class="fa-solid fa-circle-check text-[#5eb74c]"></i>
                  <span>Trụ sở & Showroom tại Hà Nội</span>
                </div>
                <span class="bg-[#0d1626]/80 text-[#84e372] text-[10.5px] font-bold px-2 py-0.5 border border-[#5eb74c]/40">
                  Uy tín 16 năm
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- ARTICLE CONTENT -->
<article class="py-14 sm:py-16 bg-white">
  <div class="max-w-[1000px] mx-auto px-4 sm:px-6 lg:px-8">
    @if($post->image_url)
      <div class="mb-10 rounded-lg overflow-hidden border border-gray-200 shadow-sm max-h-[480px]">
        <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="w-full h-full object-cover" />
      </div>
    @endif

    @if($post->summary)
      <div class="bg-[#f7f3ee] border-l-4 border-[#1A9900] p-5 sm:p-6 mb-8 rounded-r">
        <p class="text-[16px] sm:text-[17px] font-medium text-[#181923] italic leading-relaxed">
          {{ $post->summary }}
        </p>
      </div>
    @endif

    <div class="prose prose-lg max-w-none text-[#181923] leading-[1.85] space-y-5">
      {!! $post->content !!}
    </div>

    <!-- Share and tags -->
    <div class="mt-12 pt-6 border-t border-gray-200 flex flex-wrap items-center justify-between gap-4">
      <div class="flex items-center space-x-2">
        <span class="text-xs font-bold text-gray-500 uppercase tracking-wider">Chia sẻ bài viết:</span>
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener" class="w-8 h-8 rounded bg-[#1877F2] text-white flex items-center justify-center hover:opacity-90 transition">
          <i class="fa-brands fa-facebook-f text-xs"></i>
        </a>
        <a href="https://zalo.me" target="_blank" rel="noopener" class="w-8 h-8 rounded bg-[#0068ff] text-white flex items-center justify-center hover:opacity-90 transition font-bold text-[10px]">
          Zalo
        </a>
      </div>
      <div>
        <a href="/ve-huong-son/tin-tuc/" class="text-sm font-bold text-[#1A9900] hover:underline inline-flex items-center">
          <i class="fa-solid fa-arrow-left mr-2 text-xs"></i> Trở lại danh sách tin tức
        </a>
      </div>
    </div>
  </div>
</article>

@if(isset($relatedPosts) && $relatedPosts->isNotEmpty())
<!-- RELATED POSTS -->
<section class="py-12 bg-[#f7f3ee] border-t border-gray-200">
  <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
    <h3 class="text-xl font-bold text-[#10203C] mb-6">Tin tức &amp; Dự án liên quan</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      @foreach($relatedPosts as $rel)
        <article class="bg-white border border-gray-200/80 rounded overflow-hidden flex flex-col group">
          @if($rel->image_url)
            <div class="h-44 overflow-hidden">
              <img src="{{ $rel->image_url }}" alt="{{ $rel->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" />
            </div>
          @endif
          <div class="p-5 flex flex-col flex-1">
            <span class="text-[11px] text-gray-400 mb-1 block">{{ $rel->published_at ? $rel->published_at->format('d/m/Y') : '' }}</span>
            <h4 class="font-bold text-[15px] text-[#181923] group-hover:text-[#1A9900] transition line-clamp-2 mb-2">
              <a href="/ve-huong-son/tin-tuc/{{ $rel->slug }}/">{{ $rel->title }}</a>
            </h4>
            <p class="text-xs text-gray-500 line-clamp-2 mb-3 flex-1">{{ $rel->summary }}</p>
            <a href="/ve-huong-son/tin-tuc/{{ $rel->slug }}/" class="text-xs font-bold text-[#1A9900] hover:underline">
              Đọc tiếp &rarr;
            </a>
          </div>
        </article>
      @endforeach
    </div>
  </div>
</section>
@endif
@endsection
