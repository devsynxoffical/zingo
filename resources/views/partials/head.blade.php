@php
    $seoTitle = trim($__env->yieldContent('title')) ?: 'Zingo Assist | Virtual Assistant Agency in the USA';
    $seoDescription = trim($__env->yieldContent('meta_description')) ?: 'Zingo Assist provides US businesses and real estate professionals with skilled virtual assistants, cold calling, lead generation, bookkeeping and digital marketing support.';
    $seoBase = rtrim(config('seo.base_url', url('/')), '/');
    $seoPath = request()->path();
    $seoCanonical = trim($__env->yieldContent('canonical')) ?: $seoBase . ($seoPath === '/' ? '/' : '/' . $seoPath);
    $seoPost = collect(config('blog.posts', []))->firstWhere('route', \Illuminate\Support\Facades\Route::currentRouteName());
    $seoImage = trim($__env->yieldContent('og_image')) ?: ($seoPost ? asset($seoPost['image']) : asset('assets/images/zingo-assist-og.jpg'));
    $seoType = $seoPost ? 'article' : null;
    $seoType = trim($__env->yieldContent('og_type')) ?: ($seoType ?? 'website');
    $assetVersion = function ($path) {
        $file = public_path($path);
        return asset($path) . (is_file($file) ? '?v=' . filemtime($file) : '');
    };
@endphp
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="@yield('robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1')">
    <meta name="google-site-verification" content="y-16gOmynT_OEhNUd5wtBsrV1MdGs5r9WKcfOFobH5k" />
    <meta name="google-site-verification" content="o_UdEd4Ilf18eAs1wHDE4uz6bNIFga3FbWCBmqusG1E" />
    <title>{{ $seoTitle }}</title>
    <meta name="description" content="{{ $seoDescription }}">
    <link rel="canonical" href="{{ $seoCanonical }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:site_name" content="Zingo Assist" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="{{ $seoType }}" />
    <meta property="og:url" content="{{ $seoCanonical }}" />
    <meta property="og:title" content="{{ $seoTitle }}" />
    <meta property="og:description" content="{{ $seoDescription }}" />
    <meta property="og:image" content="{{ $seoImage }}" />
    <meta property="og:image:alt" content="Zingo Assist logo" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $seoTitle }}" />
    <meta name="twitter:description" content="{{ $seoDescription }}" />
    <meta name="twitter:image" content="{{ $seoImage }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="image" href="{{ asset('assets/images/zingo-assist-logo-sm.png') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    @stack('css_first')
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- favicon -->
    <link rel="icon" href="{{ asset('assets/images/fav.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/fav.png') }}">
    <!-- swipper css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <!-- lightcase css links -->
    <link rel="preload" as="style" href="{{ asset('assets/css/lightcase.css') }}" onload="this.onload=null;this.rel='stylesheet'"><noscript><link rel="stylesheet" href="{{ asset('assets/css/lightcase.css') }}"></noscript>
    <!-- odometer css link -->
    <link rel="preload" as="style" href="{{ asset('assets/css/odometer.css') }}" onload="this.onload=null;this.rel='stylesheet'"><noscript><link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}"></noscript>
    <!-- line-awesome-icon css -->
    <link rel="preload" as="style" href="{{ asset('assets/css/icomoon.css') }}" onload="this.onload=null;this.rel='stylesheet'"><noscript><link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}"></noscript>
    <!-- line-awesome-icon css -->
    <link rel="preload" as="style" href="{{ asset('assets/css/line-awesome.min.css') }}" onload="this.onload=null;this.rel='stylesheet'"><noscript><link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}"></noscript>
    <!-- animate.css -->
    <link rel="preload" as="style" href="{{ asset('assets/css/animate.css') }}" onload="this.onload=null;this.rel='stylesheet'"><noscript><link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}"></noscript>
    <!-- aos.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <!-- nice select css -->
    <link rel="preload" as="style" href="{{ asset('assets/css/nice-select.css') }}" onload="this.onload=null;this.rel='stylesheet'"><noscript><link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}"></noscript>
    <!-- main style css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ $assetVersion('assets/custom/custom.css') }}">

    <!-- Custom Navigation CSS -->
    <link rel="stylesheet" href="{{ $assetVersion('assets/css/custom-nav.css') }}">

    <!-- Hero Section Fix CSS -->
    <link rel="stylesheet" href="{{ $assetVersion('assets/css/hero-fix.css') }}">
    <link rel="stylesheet" href="{{ $assetVersion('assets/css/seo-pages.css') }}">

    @stack('css')

    @include('partials.schema-global')
    @stack('schema')
</head>
