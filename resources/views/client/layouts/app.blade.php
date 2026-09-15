<!doctype html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Hương Sơn – Giải pháp thiết bị, in ấn, số hóa')</title>
    @hasSection('meta_description')
        <meta name="description" content="@yield('meta_description')">
    @endif
    @hasSection('canonical')
        <link rel="canonical" href="@yield('canonical')">
    @endif

    <!-- Open Graph / Facebook / Zalo -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="@yield('canonical', url()->current())">
    <meta property="og:title" content="@yield('title', 'Hương Sơn – Giải pháp thiết bị, in ấn, số hóa')">
    @hasSection('meta_description')
        <meta property="og:description" content="@yield('meta_description')">
    @endif
    <meta property="og:image" content="@yield('og_image', url('/assets/images/brand/logo.png'))">
    <meta property="og:site_name" content="Công ty TNHH TM&DV Hương Sơn">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Hương Sơn – Giải pháp thiết bị, in ấn, số hóa')">
    @hasSection('meta_description')
        <meta name="twitter:description" content="@yield('meta_description')">
    @endif
    <meta name="twitter:image" content="@yield('og_image', url('/assets/images/brand/logo.png'))">
    
    <link rel="icon" href="/assets/images/brand/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="/assets/images/favicon-32.png" sizes="32x32" type="image/png">
    <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              brand: {
                green: '#1f7c45', greenHover: '#176035', greenAccent: '#35a05e',
                dark: '#181924', deepDark: '#12131c', text: '#5b5d62', heading: '#181923',
                beige: 'rgb(247, 243, 238)', lightBg: '#f5f8fb',
              }
            },
            fontFamily: {
              sans: ['"Plus Jakarta Sans"', 'sans-serif'],
              handwriting: ['"Dancing Script"', 'cursive'],
            }
          }
        }
      }
    </script>

    <!-- Font Awesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="/assets/css/custom.css?v=2.1.0" />
    @stack('styles')
    @yield('jsonld')
</head>
<body class="bg-white text-[#5b5d62] antialiased" oncontextmenu="return false;">

    @include('client.partials.topbar')
    @include('client.partials.header')

    <main id="main-content">
        @yield('content')
    </main>

    @include('client.partials.footer')
    @include('client.partials.drawer')

    @include('client.partials.admin-bar')
    @include('client.partials.inline-blocks')
    @include('client.partials.inline-outline')

    <script src="/assets/js/main.js?v=2.1.0"></script>
    @stack('scripts')
</body>
</html>
