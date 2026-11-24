@php
    $verdictClass = ['Yes' => 'rl-yes', 'Limited' => 'rl-lim', 'No' => 'rl-no', 'Not addressed' => 'rl-na'];
    $faqs = $st['faqs'];
@endphp
@extends('layout.main')

@section('og_type', 'article')
@section('og_image', asset('assets/images/blog/Observing Industry News.jpg'))
@section('title', $title)
@section('meta_description', $meta)

@push('schema')
    @include('partials.schema-page', [
        'type' => 'article',
        'name' => 'What an Unlicensed Real Estate Assistant Can Do in ' . $st['name'],
        'description' => $meta,
        'breadcrumbs' => [['Real Estate Assistant Rules', route('rules.hub')]],
        'datePublished' => '2026-11-24',
        'image' => asset('assets/images/blog/Observing Industry News.jpg'),
        'faqs' => array_map(fn ($f) => [$f[0], html_entity_decode(strip_tags($f[1]), ENT_QUOTES)], $faqs),
    ])
@endpush

@section('content')
    <section class="banner-section two inner">
        <div class="container">
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-xl-12 mb-30">
                    <div class="banner-content two">
                        <div class="banner-content-header">
                            <h2 class="title">Assistant Rules by State</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('rules.hub') }}">Rules by State</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $st['name'] }}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section ptb-120">
        <div class="container">
            <div class="row justify-content-center mb-60-none">
                <div class="col-xl-8 col-lg-10 mb-60">
                    <div class="blog-item details">
                        <div class="blog-content">
                            <div class="blog-post-meta">
                                <span class="user">By : <a href="{{ route('editorial') }}">Zingo Assist Editorial Team</a></span>
                                <span class="category two">Last reviewed: {{ $reviewed }}</span>
                            </div>
                            <h1 class="title">What an Unlicensed Real Estate Assistant Can Do in {{ $st['name'] }}</h1>

                            <div class="guide-summary">
                                <h2>In short</h2>
                                <p>{!! $st['summary'] !!}</p>
                                <p style="margin:8px 0 0;font-size:14px;">Regulator: <strong>{{ $st['regulator'] }}</strong>. Not legal advice; read the sources below and confirm with your broker.</p>
                            </div>

                            <h2 id="tasks">Allowed and not allowed in {{ $st['name'] }}</h2>
                            <div class="guide-table-wrap">
                                <table class="guide-table rl-table">
                                    <thead><tr><th>Task</th><th>Unlicensed assistant</th><th>Notes</th></tr></thead>
                                    <tbody>
                                        @foreach ($tasks as $i => $task)
                                            <tr><td>{{ $task }}</td><td><span class="rl-badge {{ $verdictClass[$st['tasks'][$i][0]] }}">{{ $st['tasks'][$i][0] }}</span></td><td>{!! $st['tasks'][$i][1] !!}</td></tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <p style="font-size:14px;">"Not addressed" means the official guidance we reviewed does not cover the task. Treat it as licensed work until your broker confirms otherwise.</p>

                            <h2 id="cold-calling">Cold calling and texting rules in {{ $st['name'] }}</h2>
                            <ul class="guide-list">
                                @foreach ($st['calling'] as $li)<li>{!! $li !!}</li>@endforeach
                            </ul>
                            <p><strong>Federal rules on top:</strong></p>
                            <ul class="guide-list">
                                @foreach ($federal as $li)<li>{!! $li !!}</li>@endforeach
                            </ul>

                            <h2 id="transaction-coordinator">Does a transaction coordinator need a license in {{ $st['name'] }}?</h2>
                            @foreach ($st['tc'] as $p)<p>{!! $p !!}</p>@endforeach
                            <p>See what the role covers in our <a href="{{ route('service.real_estate_transaction_coordinator') }}">virtual transaction coordinator services</a> and the free <a href="{{ route('blog.tc_checklist') }}">transaction coordinator checklist</a>.</p>

                            <h2 id="compliance">How to keep a Zingo Assist assistant compliant in {{ $st['name'] }}</h2>
                            <ul class="guide-list">
                                <li>Give the assistant a written task list based on the table above, signed off by your broker.</li>
                                <li>Keep price, terms, advice, negotiation and showings with licensed staff where {{ $st['short'] }} guidance requires it.</li>
                                <li>Use approved scripts for any calls, scrub every list against the Do Not Call lists and call only inside the hours above.</li>
                                <li>Pay the assistant hourly or a salary, never a share of a commission.</li>
                                <li>Give role-based access to your CRM, MLS and transaction platform instead of sharing your login.</li>
                            </ul>
                            <p>Our <a href="{{ route('service.real_estate_virtual_assistant') }}">real estate virtual assistants</a> work under your supervision on the administrative side: CRM, scheduling, <a href="{{ route('service.listing_coordinator') }}">listing coordination</a>, transaction paperwork and marketing. For calling, see <a href="{{ route('service.cold_calling') }}">real estate cold calling services</a>.</p>

                            @foreach (($st['bodies'] ?? []) as $body)
                                @include($body)
                            @endforeach

                            <div class="guide-cta">
                                <p><strong>Delegate the work that does not need a license.</strong> Zingo Assist real estate assistants handle CRM, scheduling, listing and transaction admin under your supervision. Try one free for two days.</p>
                                <a class="btn-guide" href="{{ route('service.real_estate_virtual_assistant') }}">Explore real estate VA services</a>
                            </div>

                            <h2>Frequently asked questions</h2>
                            @foreach ($faqs as $f)
                                <h3>{{ $f[0] }}</h3>
                                <p>{!! $f[1] !!}</p>
                            @endforeach

                            <h2>Sources</h2>
                            <ul class="guide-list">
                                @foreach (array_merge($st['sources'], $federalSources) as $s)
                                    <li><a href="{{ $s[1] }}" target="_blank" rel="noopener">{!! $s[0] !!}</a></li>
                                @endforeach
                            </ul>

                            <h2>Rules in other states</h2>
                            <div class="sp-links" style="justify-content:flex-start;">
                                @foreach ($st['related'] as $r)
                                    @if (isset($all[$r]))<a class="sp-link-chip" href="{{ route('rules.state', $r) }}">{{ $all[$r]['name'] }} <i class="fas fa-arrow-right"></i></a>@endif
                                @endforeach
                                <a class="sp-link-chip" href="{{ route('rules.hub') }}">All states <i class="fas fa-arrow-right"></i></a>
                            </div>

                            <p class="guide-note">Not legal advice. This page summarizes published guidance from the {{ $st['regulator'] }} and the statutes linked above. Rules and interpretations change; confirm your arrangement with your broker or a real estate attorney. Last reviewed: {{ $reviewed }}. We re-check every state page every 6 months.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.blog-footer')
@endsection
