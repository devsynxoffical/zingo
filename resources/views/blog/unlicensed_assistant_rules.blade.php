@php
    $faqs = [
        ['What can an unlicensed real estate assistant do?', 'In most states an unlicensed assistant can do administrative and clerical work under a licensed agent or broker: answering and forwarding calls, scheduling appointments, entering data into the CRM, preparing documents and marketing for the licensee to approve, tracking deadlines and keeping files in order. The exact list depends on your state.'],
        ['Can an unlicensed assistant show property?', 'Generally no. Texas, Florida, California and North Carolina all treat showing property to prospective buyers or tenants as licensed activity, and Texas also bars unlicensed assistants from hosting open houses or giving access to a property for a prospective buyer or tenant.'],
        ['Can an unlicensed assistant make cold calls?', 'It depends on the state. Texas does not allow unlicensed assistants to call people to find out whether they want to buy, sell or lease. California allows limited cold contacting to gauge general interest with the broker&#39;s consent, with interested people handed to a licensee. Check your state commission&#39;s guidance before any calling campaign.'],
        ['Can an unlicensed assistant be paid a commission?', 'No. Paying an unlicensed person a share of a commission or a bonus tied to a closing is a common violation. Pay an assistant hourly or a salary.'],
        ['Who is responsible for what an unlicensed assistant does?', 'The licensed agent and the supervising broker. State commissions discipline the licensees when an unlicensed assistant performs licensed activity, and the assistant can also face penalties for unlicensed practice.'],
    ];
    $states = [
        ['Texas', 'TREC', [
            'May do administrative work such as data entry and typing contracts at a license holder&#39;s direction, bookkeeping and office tasks.',
            'May set up a showing appointment for the license holder who will show the property, and may confirm the size, price and terms of an advertised property if identified as unlicensed.',
            'May not call people to find out whether they want to buy, sell or lease, even to book an appointment with an agent. Only license holders may solicit.',
            'May not show property, give a prospective buyer or tenant access to a property, host an open house, review contracts or facilitate a transaction.',
        ], [['TREC: What can unlicensed office personnel or an unlicensed assistant do?', 'https://www.trec.texas.gov/what-can-unlicensed-office-personnel-or-unlicensed-assistant-do'], ['TREC: Can you use unlicensed individuals to help with your Texas real estate transactions?', 'https://www.trec.texas.gov/article/can-you-use-unlicensed-individuals-help-your-texas-real-estate-transactions-it-depends']]],
        ['Florida', 'FREC', [
            'The Florida Real Estate Commission&#39;s informal list allows tasks such as answering and forwarding calls, filling out and submitting MLS listings and changes, assembling documents for closing and following up on transactions after a contract is signed.',
            'May not show property, give opinions on value, negotiate or be paid a commission.',
        ], [['Zingo Assist: What can an unlicensed real estate assistant do in Florida?', 'INTERNAL_FL'], ['Florida Realtors: Unlicensed assistants', 'https://floridarealtors.org/law-ethics/library/unlicensed-assistants']]],
        ['California', 'DRE', [
            'The DRE&#39;s guidelines allow administrative and clerical work under the broker&#39;s supervision.',
            'Allow limited cold contacting by phone or social media to gauge general interest in a broker&#39;s services, with the broker&#39;s knowledge and consent. The calls may not solicit a specific property, transaction or product, and anyone interested must be referred to a licensee.',
            'May not show property or discuss the terms or significance of a transaction with the parties.',
        ], [['DRE: Guidelines for Unlicensed Assistants (updated 2018)', 'https://www.dre.ca.gov/files/pdf/faqs/guide_unlic_asst.pdf'], ['DRE: Unlicensed administrative assistants', 'https://www.dre.ca.gov/licensees/UnlicensedAssistants.html']]],
        ['Georgia', 'GREC', [
            'Unlicensed assistants are limited to administrative support work; anything that requires a license under Georgia law is off limits.',
            'GREC guidance has stressed putting the assistant&#39;s permitted duties in writing, and that the firm and the licensee are responsible for the assistant&#39;s acts.',
        ], [['Georgia Real Estate Commission rules, Chapter 520-1', 'https://rules.sos.ga.gov/GAC/520-1']]],
        ['Arizona', 'ADRE', [
            'ADRE Substantive Policy Statement 2025.02 lists clerical tasks an unlicensed assistant may perform under the direct supervision of an Arizona licensee, such as answering phones and forwarding calls.',
            'An unlicensed assistant may not withdraw money from the broker&#39;s trust account. Substantive policy statements are advisory, so check the full statement and your broker&#39;s policy.',
        ], [['ADRE Substantive Policy Statement 2025.02: Unlicensed Assistants', 'https://azre.gov/sites/default/files/2025-07/S.P.S.%202025.02.pdf']]],
        ['North Carolina', 'NCREC', [
            'Brokers may use unlicensed assistants for administrative and clerical tasks that do not require a license, and the broker-in-charge must supervise them.',
            'Unlicensed employees may not show property to prospective buyers or solicit business, and the Commission can discipline licensees whose unlicensed staff perform licensed acts.',
        ], [['NCREC Bulletin: Brokers and consumers should beware of unlicensed activity', 'https://bulletins.ncrec.gov/brokers-consumers-should-beware-of-unlicensed-activity-in-north-carolina/'], ['NC Realtors: May an unlicensed assistant complete an offer to purchase?', 'https://www.ncrealtors.org/?p=25841']]],
    ];
@endphp
@extends('layout.main')

@section('og_type', 'article')
@section('og_image', asset('assets/images/blog/Observing Industry News.jpg'))
@section('title', 'What Can an Unlicensed Real Estate Assistant Do?')
@section('meta_description', 'What an unlicensed real estate assistant can and cannot do: calls, showings, scheduling, MLS and paperwork, with rules for TX, FL, CA, GA, AZ and NC.')

@push('schema')
    @include('partials.schema-page', [
        'type' => 'article',
        'name' => 'What Can an Unlicensed Real Estate Assistant Do?',
        'description' => 'What unlicensed real estate assistants may and may not do, with state notes and official sources for Texas, Florida, California, Georgia, Arizona and North Carolina.',
        'breadcrumbs' => [['Blog', route('blog')]],
        'datePublished' => '2026-11-23',
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
                            <h2 class="title">Blog</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Unlicensed Assistant Rules</li>
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
                            <img src="{{ asset('assets/images/blog/Observing Industry News.jpg') }}" alt="Real estate agent reviewing state rules for unlicensed assistants" fetchpriority="high" decoding="async">
                        </div>
                        <div class="blog-content">
                            <div class="blog-post-meta">
                                <span class="user">By : <a href="{{ route('editorial') }}">Zingo Assist Editorial Team</a></span>
                                <span class="category two">November 23, 2026</span>
                            </div>
                            <h1 class="title">What Can an Unlicensed Real Estate Assistant Do?</h1>

                            <div class="guide-summary">
                                <h2>Quick answer</h2>
                                <p>An <strong>unlicensed real estate assistant</strong> can do the administrative side of the business under a licensed agent&#39;s supervision: answering and forwarding calls, scheduling, CRM and MLS data entry, preparing documents and marketing for approval, and tracking deadlines. An unlicensed assistant generally <strong>cannot show property, negotiate, give opinions on price, discuss contract terms or be paid a commission</strong>. Prospecting calls are where states differ most: Texas does not allow them, while California allows limited general-interest calls with the broker&#39;s consent.</p>
                            </div>

                            <p>Every state licenses the people who list, show, sell and lease property for others, and every state lets agents hire unlicensed help for everything else. Where the line sits changes from state to state, and the agent and broker carry the risk if an assistant crosses it. This guide covers the common ground and then the rules in six large markets, each linked to the state&#39;s own guidance.</p>

                            <h2>Can and cannot: the common ground</h2>
                            <div class="guide-table-wrap">
                                <table class="guide-table">
                                    <thead><tr><th>Task</th><th>Unlicensed assistant</th><th>Notes</th></tr></thead>
                                    <tbody>
                                        <tr><td>Answer and forward calls, take messages</td><td>Yes</td><td>Questions about price, terms or advice go to the licensee</td></tr>
                                        <tr><td>Schedule showings, inspections and appointments</td><td>Yes</td><td>For the licensee who will attend</td></tr>
                                        <tr><td>CRM updates and data entry</td><td>Yes</td><td>Under a licensee&#39;s direction</td></tr>
                                        <tr><td>MLS input</td><td>Usually</td><td>Florida&#39;s list allows it; MLS rules on assistant logins vary</td></tr>
                                        <tr><td>Prepare documents and marketing</td><td>Yes</td><td>For the licensee to review and approve</td></tr>
                                        <tr><td>Prospecting or cold calls</td><td>Depends on the state</td><td>Not allowed in Texas; limited in California (see below)</td></tr>
                                        <tr><td>Show property or host an open house</td><td>No</td><td>Texas also bars giving access to a prospective buyer or tenant</td></tr>
                                        <tr><td>Discuss price, terms or contracts; negotiate</td><td>No</td><td>Licensed activity in every state covered here</td></tr>
                                        <tr><td>Receive a commission or closing bonus</td><td>No</td><td>Pay hourly or a salary</td></tr>
                                    </tbody>
                                </table>
                            </div>

                            <h2>Rules by state</h2>
                            <p>These notes summarize each state regulator&#39;s published guidance. They are not legal advice, and rules change, so read the linked source and confirm with your broker before you assign work.</p>
                            @foreach ($states as $st)
                                <h3 id="{{ \Illuminate\Support\Str::slug($st[0]) }}">{{ $st[0] }} ({{ $st[1] }})</h3>
                                <ul class="guide-list">
                                    @foreach ($st[2] as $li)<li>{!! $li !!}</li>@endforeach
                                </ul>
                                <p class="small" style="font-size:14px;"><strong>Source:</strong>
                                    @foreach ($st[3] as $i => $src)
                                        @if ($src[1] === 'INTERNAL_FL')<a href="{{ route('blog.unlicensed_assistant_florida') }}">{{ $src[0] }}</a>@else<a href="{{ $src[1] }}" target="_blank" rel="noopener">{{ $src[0] }}</a>@endif{{ $i < count($st[3]) - 1 ? ';' : '' }}
                                    @endforeach
                                </p>
                                @if ($st[0] === 'Texas')
                                    <p>More detail, including which calls are allowed: <a href="{{ route('blog.texas_unlicensed_cold_calls') }}">can an unlicensed assistant make cold calls in Texas?</a></p>
                                @endif
                            @endforeach

                            <h2>Cold calls and lead follow-up: the state that matters most</h2>
                            <p>Calling is where agents most often get into trouble with unlicensed help. Before you hand an assistant a call list, check three things:</p>
                            <ol class="guide-list" style="padding-left:20px;">
                                <li style="list-style:decimal;"><strong>Your state&#39;s licensing rule.</strong> Texas treats calls asking whether someone wants to buy, sell or lease as solicitation that only a license holder may do. California allows general-interest canvassing with the broker&#39;s consent. Other states fall in between.</li>
                                <li style="list-style:decimal;"><strong>Telemarketing law.</strong> Federal Do Not Call and TCPA rules apply whoever makes the call, and some states add their own. See our <a href="{{ route('blog.florida_cold_calling_laws') }}">Florida cold calling laws guide</a> for an example.</li>
                                <li style="list-style:decimal;"><strong>Your broker&#39;s policy.</strong> Many brokerages are stricter than the state.</li>
                            </ol>
                            <p>Where unlicensed calling is restricted, use a licensed inside sales agent for prospecting and keep the unlicensed assistant on scheduling, CRM and paperwork. Our <a href="{{ route('blog.isa_scripts_expired_fsbo') }}">ISA scripts for expired and FSBO leads</a> are written for callers working under a licensed agent.</p>

                            <h2>How a virtual assistant fits</h2>
                            <p>A <a href="{{ route('service.real_estate_virtual_assistant') }}">real estate virtual assistant</a> is an unlicensed assistant who works remotely, so the same rules apply. Most of the permitted list is remote work anyway: CRM updates, <a href="{{ route('service.listing_coordinator') }}">listing coordination</a>, <a href="{{ route('service.real_estate_transaction_coordinator') }}">transaction paperwork and deadlines</a>, scheduling and marketing. For a full list of tasks to delegate and what to keep, use our <a href="{{ route('blog.re_va_tasks_checklist') }}">real estate virtual assistant tasks checklist</a>.</p>

                            <div class="guide-cta">
                                <p><strong>Delegate the work that does not need a license.</strong> Zingo Assist real estate assistants handle CRM, scheduling, listing and transaction admin under your supervision. Try one free for two days.</p>
                                <a class="btn-guide" href="{{ route('service.real_estate_virtual_assistant') }}">Explore real estate VA services</a>
                            </div>

                            <h2>Frequently asked questions</h2>
                            @foreach ($faqs as $f)
                                <h3>{{ $f[0] }}</h3>
                                <p>{!! $f[1] !!}</p>
                            @endforeach

                            <p class="guide-note">This guide summarizes published guidance from state real estate regulators as of November 2026. It is general information, not legal advice. Rules and interpretations change; confirm your arrangement with your broker or a real estate attorney. Last reviewed November 23, 2026.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.blog-footer')
@endsection
