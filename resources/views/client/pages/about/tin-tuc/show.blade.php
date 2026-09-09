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
<!-- PAGE HERO -->
<section class="relative min-h-[320px] sm:min-h-[360px] flex items-center overflow-hidden" style="background: linear-gradient(135deg, #10203C 0%, #193877 60%, #204DA4 100%);">
  <div class="absolute inset-0 z-0">
    <img src="/assets/images/hero-office.jpg" alt="{{ $post->title }}" class="w-full h-full object-cover object-center opacity-25" loading="eager" />
    <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(16, 32, 60, 0.90) 0%, rgba(16, 32, 60, 0.82) 100%);"></div>
  </div>
  <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-14 w-full text-center">
    <span class="font-handwriting text-2xl sm:text-3xl text-[#5eb74c] font-bold block mb-2">Tin tức &amp; Dự án</span>
    <h1 class="text-2xl sm:text-[34px] lg:text-[38px] font-bold text-white mb-3 leading-tight tracking-tight drop-shadow-sm max-w-4xl mx-auto">
      {{ $post->title }}
    </h1>
    <div class="flex items-center justify-center space-x-4 text-xs text-gray-300 mb-4">
      <span><i class="fa-regular fa-calendar text-[#5eb74c] mr-1.5"></i> {{ $post->published_at ? $post->published_at->format('d/m/Y') : date('d/m/Y') }}</span>
      <span>•</span>
      <span><i class="fa-solid fa-user text-[#5eb74c] mr-1.5"></i> Ban biên tập Hương Sơn</span>
    </div>
    <nav class="text-[13px] text-gray-300 flex items-center justify-center flex-wrap" aria-label="Breadcrumb">
      <a href="/" class="text-gray-300 hover:text-white transition">Trang chủ</a> 
      <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> 
      <a href="/ve-huong-son/tin-tuc/" class="text-gray-300 hover:text-white transition">Tin tức</a>
      <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-400"></i> 
      <span class="text-[#5eb74c] font-semibold truncate max-w-xs" aria-current="page">{{ $post->title }}</span>
    </nav>
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
