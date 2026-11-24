@extends('layout.main')
@section('title', 'Site Map | Zingo Assist')
@section('meta_description', 'Every page on Zingo Assist in one place: real estate virtual assistant services, tools, locations, guides and company pages.')
@push('schema')
    @include('partials.schema-page', [
        'type' => 'page',
        'name' => 'Site Map',
        'description' => 'All Zingo Assist pages grouped by services, tools, locations, guides and company information.',
        'breadcrumbs' => [],
    ])
@endpush
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/legal-pages.css') }}?v={{ @filemtime(public_path('assets/css/legal-pages.css')) }}">
    <style>
        .header-section { background: #A52673; }
        .hsm-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 28px 40px; }
        .hsm-group h2 { font-size: 20px; color: #1f1235; border-bottom: 2px solid #ead3e1; padding-bottom: 8px; margin: 0 0 12px; }
        .hsm-group ul { list-style: none; padding: 0; margin: 0; }
        .hsm-group li { margin: 0 0 9px; line-height: 1.4; }
        .hsm-group a { color: #3a3a48; text-decoration: none; display: inline !important; }
        .hsm-group a:hover { color: #A52673; text-decoration: underline; }
        .hsm-group li::before { content: "\f054"; font-family: "Font Awesome 5 Free"; font-weight: 900; color: #A52673; font-size: 10px; margin-right: 8px; }
    </style>
@endpush
@section('content')
<div class="legal-page">
    <section class="legal-hero">
        <div class="legal-hero-shapes">
            <div class="legal-hero-orb legal-hero-orb--1"></div>
            <div class="legal-hero-orb legal-hero-orb--2"></div>
            <div class="legal-hero-orb legal-hero-orb--3"></div>
        </div>
        <div class="legal-hero-grid"></div>
        <div class="container">
            <div class="legal-hero-inner" data-aos="fade-up" data-aos-duration="700">
                <div class="legal-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Site Map</li>
                        </ol>
                    </nav>
                </div>
                <div class="legal-hero-badge"><i class="fas fa-sitemap"></i> All pages</div>
                <h1 class="legal-hero-title">Site Map</h1>
                <p class="legal-hero-subtitle">Every Zingo Assist page in one place, grouped by what you are looking for.</p>
            </div>
        </div>
    </section>

    <section class="legal-content" style="padding: 60px 0 90px;">
        <div class="container">
            <div class="hsm-grid">
                @foreach ($groups as $name => $links)
                    <div class="hsm-group">
                        <h2>{{ $name }}</h2>
                        <ul>
                            @foreach ($links as $l)
                                <li><a href="{{ $l[1] }}">{{ html_entity_decode($l[0], ENT_QUOTES | ENT_HTML5, 'UTF-8') }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
