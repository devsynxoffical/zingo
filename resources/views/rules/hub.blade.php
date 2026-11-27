@php
    $verdictClass = ['Yes' => 'rl-yes', 'Limited' => 'rl-lim', 'No' => 'rl-no', 'Not addressed' => 'rl-na'];
    // columns for the comparison table: index into $tasks
    $cols = [1 => 'Cold calls', 3 => 'Showings', 4 => 'Open houses', 7 => 'Commission pay'];
    $faqs = [
        ['What can an unlicensed real estate assistant do?', 'In most states an unlicensed assistant can do administrative and clerical work under a licensed agent or broker: answering and forwarding calls, scheduling appointments, entering data into the CRM, preparing documents and marketing for the licensee to approve, tracking deadlines and keeping files in order. The exact list depends on the state.'],
        ['Can an unlicensed assistant show property?', 'Generally no. Texas, Florida, California, New York and North Carolina treat showing property for sale as licensed activity. Colorado is an exception: an administrative professional may show property if the seller or listing broker authorizes it, and North Carolina allows showing rentals the broker manages.'],
        ['Can an unlicensed assistant make cold calls?', 'It depends on the state. Texas does not allow unlicensed assistants to call people to find out whether they want to buy, sell or lease. California allows limited cold contacting to gauge general interest with the broker&#39;s consent. Many states do not address it, so treat prospecting as licensed work unless your broker confirms otherwise.'],
        ['Can an unlicensed assistant call leads in Texas?', 'Not to prospect. TREC says an unlicensed assistant may not call people to find out whether they want to buy, sell or lease, even just to set an appointment with an agent. The assistant may arrange a showing appointment for the license holder who will show the property and may confirm the advertised size, price and terms if they say they are unlicensed. See <a href="' . route('rules.state', 'texas') . '">Texas unlicensed assistant rules</a> for the full list and sources.'],
        ['Can an unlicensed assistant be paid a commission?', 'No. Florida, California, Texas and New York bar paying unlicensed people for licensed work or sharing commissions with them, and Colorado warns that closing-contingent pay may violate RESPA. Pay hourly or a salary.'],
        ['Who is responsible for what an unlicensed assistant does?', 'The licensed agent and the supervising broker. State regulators discipline licensees when an unlicensed assistant performs licensed activity, and the assistant can also face penalties.'],
    ];
@endphp
@extends('layout.main')

@section('og_type', 'article')
@section('og_image', asset('assets/images/blog/Observing Industry News.jpg'))
@section('title', 'Unlicensed Real Estate Assistant Rules by State')
@section('meta_description', 'What an unlicensed real estate assistant can and cannot do in 8 states: calls, showings, open houses, MLS, paperwork and pay, with official sources.')

@push('schema')
    @include('partials.schema-page', [
        'type' => 'article',
        'name' => 'Unlicensed Real Estate Assistant Rules by State',
        'description' => 'What unlicensed real estate assistants may and may not do in Florida, Texas, California, Georgia, North Carolina, Arizona, New York and Colorado, with official sources.',
        'breadcrumbs' => [],
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
                                        <li class="breadcrumb-item active" aria-current="page">Rules by State</li>
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
                <div class="col-xl-9 col-lg-11 mb-60">
                    <div class="blog-item details">
                        <div class="blog-content">
                            <div class="blog-post-meta">
                                <span class="user">By : <a href="{{ route('editorial') }}">Zingo Assist Editorial Team</a></span>
                                <span class="category two">Last reviewed: {{ $reviewed }}</span>
                            </div>
                            <h1 class="title">Unlicensed Real Estate Assistant Rules by State</h1>

                            <div class="guide-summary">
                                <h2>Quick answer</h2>
                                <p>An <strong>unlicensed real estate assistant</strong> can do the administrative side of the business under a licensed agent&#39;s supervision: answering and forwarding calls, scheduling, CRM and MLS data entry, preparing documents and marketing for approval, and tracking deadlines. An unlicensed assistant generally <strong>cannot negotiate, give opinions on price, discuss contract terms or be paid a commission</strong>. Showings and prospecting calls are where states differ most, so check the rules for your state below.</p>
                            </div>

                            <h2>Choose your state</h2>
                            <div class="rl-states">
                                @foreach ($states as $slug => $st)
                                    <a class="rl-state" href="{{ route('rules.state', $slug) }}">
                                        <span class="rl-state-name">{{ $st['name'] }}</span>
                                        <span class="rl-state-reg">{{ $st['short'] }}</span>
                                        <span class="rl-state-go">See the rules <i class="fas fa-arrow-right"></i></span>
                                    </a>
                                @endforeach
                            </div>

                            <h2>The key differences at a glance</h2>
                            <div class="guide-table-wrap">
                                <table class="guide-table rl-table">
                                    <thead><tr><th>State</th>@foreach ($cols as $c)<th>{{ $c }}</th>@endforeach</tr></thead>
                                    <tbody>
                                        @foreach ($states as $slug => $st)
                                            <tr><td><a href="{{ route('rules.state', $slug) }}">{{ $st['name'] }}</a></td>
                                                @foreach (array_keys($cols) as $ci)<td><span class="rl-badge {{ $verdictClass[$st['tasks'][$ci][0]] }}">{{ $st['tasks'][$ci][0] }}</span></td>@endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <p style="font-size:14px;">"Limited" means allowed only under conditions; "Not addressed" means the official guidance we reviewed does not cover it. Open each state for the details and sources.</p>

                            <h2>The common ground in every state</h2>
                            <ul class="guide-list">
                                <li><strong>Allowed:</strong> answering and forwarding calls, scheduling for the licensee, CRM updates, preparing documents and marketing for approval, tracking deadlines.</li>
                                <li><strong>Not allowed:</strong> negotiating, giving opinions on value, interpreting contracts and receiving a share of a commission.</li>
                                <li><strong>Always:</strong> a licensee supervises the assistant and answers for what they do.</li>
                            </ul>

                            <h2>Calling rules apply on top of licensing rules</h2>
                            <p>Even where an assistant may make calls, federal and state telemarketing law still applies:</p>
                            <ul class="guide-list">
                                @foreach ($federal as $li)<li>{!! $li !!}</li>@endforeach
                            </ul>
                            <p>Several states add their own Do Not Call lists, shorter calling hours or limits on repeat calls. Florida, for example, allows calls only from 8 a.m. to 8 p.m. and no more than three calls in 24 hours. Each state page lists its rules.</p>

                            <h2>How a virtual assistant fits</h2>
                            <p>A <a href="{{ route('service.real_estate_virtual_assistant') }}">real estate virtual assistant</a> is an unlicensed assistant who works remotely, so the same rules apply. Most permitted work is remote anyway: CRM updates, <a href="{{ route('service.listing_coordinator') }}">listing coordination</a>, <a href="{{ route('service.real_estate_transaction_coordinator') }}">transaction paperwork and deadlines</a>, scheduling and marketing. For a full list of tasks to delegate, use our <a href="{{ route('blog.re_va_tasks_checklist') }}">real estate virtual assistant tasks checklist</a>.</p>

                            <div class="guide-cta">
                                <p><strong>Delegate the work that does not need a license.</strong> Zingo Assist real estate assistants handle CRM, scheduling, listing and transaction admin under your supervision. Try one free for two days.</p>
                                <a class="btn-guide" href="{{ route('service.real_estate_virtual_assistant') }}">Explore real estate VA services</a>
                            </div>

                            <h2>Frequently asked questions</h2>
                            @foreach ($faqs as $f)
                                <h3>{{ $f[0] }}</h3>
                                <p>{!! $f[1] !!}</p>
                            @endforeach

                            <p class="guide-note">Not legal advice. These pages summarize published guidance from state real estate regulators and statutes. Rules change; confirm your arrangement with your broker or a real estate attorney. Last reviewed: {{ $reviewed }}.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.blog-footer')
@endsection
