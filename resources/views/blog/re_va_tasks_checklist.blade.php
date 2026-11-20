@php
    $cl = json_decode(file_get_contents(resource_path('data/re-va-checklist.json')), true);
    $pdf = 'assets/downloads/real-estate-va-tasks-checklist.pdf';
    $faqs = [
        ['What tasks can I give a real estate virtual assistant?', 'Lead follow-up calls and texts, CRM updates, inbox and calendar management, listing coordination, transaction paperwork and deadlines, social media, email newsletters, seller reports and bookkeeping support. Anything that does not require a real estate license can usually be delegated.'],
        ['What should a real estate VA not do?', 'An unlicensed assistant should not give pricing advice or opinions of value, negotiate, interpret contracts, discuss commission or show property. Those tasks stay with the licensed agent; rules vary by state and brokerage.'],
        ['How many hours a week does a real estate VA need?', 'Most solo agents start with 15 to 20 hours a week on their most time-consuming tasks, usually lead follow-up and CRM updates, and move to full-time once listings and transactions are added.'],
        ['Which tasks should I delegate first?', 'Start with the tasks that are repeated every day and cost you leads when they slip: speed-to-lead follow-up, CRM logging and appointment confirmations. Add listing and transaction work once those run smoothly.'],
    ];
@endphp
@extends('layout.main')

@section('og_type', 'article')
@section('og_image', asset('assets/images/blog/Feel Swamped With Work.jpg'))
@section('title', 'Real Estate Virtual Assistant Tasks Checklist (Free PDF)')
@section('meta_description', 'A free real estate VA tasks checklist: 38 daily, weekly, monthly, listing and transaction tasks to delegate, plus what to keep with the agent. Download the PDF.')

@push('schema')
    @include('partials.schema-page', [
        'type' => 'article',
        'name' => 'Real Estate Virtual Assistant Tasks Checklist',
        'description' => 'A printable checklist of daily, weekly, monthly, listing and transaction tasks to delegate to a real estate virtual assistant.',
        'breadcrumbs' => [['Blog', route('blog')]],
        'datePublished' => '2026-11-20',
        'image' => asset('assets/images/blog/Feel Swamped With Work.jpg'),
        'faqs' => $faqs,
    ])
@endpush

@section('content')
    <section class="banner-section two inner">
        <div class="container">
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-xl-12 mb-30">
                    <div class="banner-content two">
                        <div class="banner-content-header">
                            <h2 class="title">Blog</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">VA Tasks Checklist</li>
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
                        <div class="blog-thumb">
                            <img src="{{ asset('assets/images/blog/Feel Swamped With Work.jpg') }}" alt="Real estate agent delegating tasks to a virtual assistant with a checklist" fetchpriority="high" decoding="async">
                        </div>
                        <div class="blog-content">
                            <div class="blog-post-meta">
                                <span class="user">By : <a href="{{ route('editorial') }}">Zingo Assist Editorial Team</a></span>
                                <span class="category two">November 20, 2026</span>
                            </div>
                            <h1 class="title">Real Estate Virtual Assistant Tasks Checklist</h1>

                            <div class="guide-summary">
                                <h2>Quick answer</h2>
                                <p>A real estate virtual assistant can take over <strong>lead follow-up, CRM updates, listing coordination, transaction paperwork and marketing</strong>. This checklist splits those into <strong>daily, weekly and monthly tasks</strong>, plus what to do for <strong>every new listing and every transaction</strong>, 38 tasks in all, and five things to keep with the licensed agent.</p>
                            </div>

                            <div class="ck-download">
                                <div>
                                    <p class="ck-download-title"><i class="fas fa-file-pdf"></i> Free printable PDF</p>
                                    <p class="ck-download-text">Two pages, every task with a checkbox. Hand it to your assistant on day one.</p>
                                </div>
                                <a class="ck-download-btn" href="{{ asset($pdf) }}" download data-track="checklist_download"><i class="fas fa-download"></i> Download the checklist</a>
                            </div>

                            <p>Most agents hire help and then hand over tasks one at a time, as they remember them. The result is an assistant who is busy but not taking the work that actually slows you down. Use this list to decide what to delegate on day one, what to add later and what stays with you. Tick the boxes as you go; your progress is saved in this browser.</p>

                            <div class="ck-progress" aria-live="polite"><span class="ck-progress-bar"><span id="ckBar"></span></span><span id="ckCount">0 of 38 delegated</span></div>

                            @foreach ($cl['groups'] as $g)
                                <h2 id="{{ $g['id'] }}"><i class="fas {{ $g['icon'] }} ck-h-icon"></i> {{ $g['name'] }}</h2>
                                @if ($g['id'] === 'agent')
                                    <p>An unlicensed assistant supports the agent but should not do the following. Rules vary by state; see <a href="{{ route('blog.unlicensed_assistant_florida') }}">what an unlicensed real estate assistant can do</a>.</p>
                                    <ul class="ck-list ck-list--agent">
                                        @foreach ($g['items'] as $it)<li><i class="fas fa-user-tie"></i> {{ $it }}</li>@endforeach
                                    </ul>
                                @else
                                    <ul class="ck-list">
                                        @foreach ($g['items'] as $i => $it)
                                            <li><label><input type="checkbox" class="ck-box" data-key="{{ $g['id'] }}-{{ $i }}"><span>{{ $it }}</span></label></li>
                                        @endforeach
                                    </ul>
                                    @if ($g['id'] === 'daily')
                                        <p>The first two lines matter most. Leads go cold within hours, and an unlogged call is a lost follow-up. For a full CRM routine, see <a href="{{ route('blog.follow_up_boss_va') }}">how teams use a VA in Follow Up Boss</a>.</p>
                                    @elseif ($g['id'] === 'listing')
                                        <p>A dedicated <a href="{{ route('service.listing_coordinator') }}">listing coordinator</a> runs this list for every listing, so nothing depends on memory.</p>
                                    @elseif ($g['id'] === 'transaction')
                                        <p>This is the work of a <a href="{{ route('service.real_estate_transaction_coordinator') }}">virtual transaction coordinator</a>. Compare the two roles in <a href="{{ route('blog.tc_vs_va') }}">transaction coordinator vs virtual assistant</a>.</p>
                                    @endif
                                @endif
                            @endforeach

                            <h2>How to hand the checklist to your assistant</h2>
                            <ol class="guide-list" style="padding-left:20px;">
                                <li style="list-style:decimal;"><strong>Tick what you will delegate</strong> and cross out what you will keep.</li>
                                <li style="list-style:decimal;"><strong>Record a short screen video</strong> of how you do each ticked task today. That becomes the SOP.</li>
                                <li style="list-style:decimal;"><strong>Start with the daily list</strong> for two weeks, then add weekly, listing and transaction tasks.</li>
                                <li style="list-style:decimal;"><strong>Agree on one report</strong>: five lines at the end of each day.</li>
                            </ol>
                            <p>Not sure how many hours that adds up to? Estimate cost and payback with the <a href="{{ route('tool.va_roi_calculator') }}">real estate VA ROI calculator</a> or read the <a href="{{ route('blog.re_va_cost') }}">real estate VA cost guide</a>.</p>

                            <div class="guide-cta">
                                <p><strong>Want an assistant who already knows this list?</strong> Zingo Assist real estate VAs are trained on these tasks and the tools you use. Try one free for two days.</p>
                                <a class="btn-guide" href="{{ route('service.real_estate_virtual_assistant') }}">Explore real estate VA services</a>
                            </div>

                            <h2>Frequently asked questions</h2>
                            @foreach ($faqs as $f)
                                <h3>{{ $f[0] }}</h3>
                                <p>{{ $f[1] }}</p>
                            @endforeach

                            <p class="guide-note">This checklist is general guidance. What an unlicensed assistant may do depends on your state and brokerage; confirm with your broker. Last reviewed November 20, 2026.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.blog-footer')

<script>
(function () {
    var boxes = document.querySelectorAll('.ck-box'), total = boxes.length, KEY = 'za-re-va-checklist';
    var saved = {};
    try { saved = JSON.parse(localStorage.getItem(KEY) || '{}') || {}; } catch (e) {}
    function update() {
        var n = 0; boxes.forEach(function (b) { if (b.checked) n++; });
        document.getElementById('ckCount').textContent = n + ' of ' + total + ' delegated';
        document.getElementById('ckBar').style.width = (total ? (n / total * 100) : 0) + '%';
    }
    boxes.forEach(function (b) {
        b.checked = !!saved[b.dataset.key];
        b.addEventListener('change', function () {
            saved[b.dataset.key] = b.checked;
            try { localStorage.setItem(KEY, JSON.stringify(saved)); } catch (e) {}
            update();
        });
    });
    update();
    var dl = document.querySelector('[data-track="checklist_download"]');
    if (dl) dl.addEventListener('click', function () { if (window.zingoTrack) window.zingoTrack('file_download', { file_name: 'real-estate-va-tasks-checklist.pdf' }); });
})();
</script>
@endsection
