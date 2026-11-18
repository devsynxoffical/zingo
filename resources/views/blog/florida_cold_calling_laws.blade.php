@php
    $faqs = [
        ['Is cold calling legal for real estate agents in Florida?', 'Yes. Cold calling is legal in Florida when you follow the federal TCPA and Telemarketing Sales Rule, the National Do Not Call Registry, Florida\'s Telephone Solicitation Act (s. 501.059) and Florida\'s telemarketing rules, including calling hours, call-frequency limits, caller identification and opt-out requests.'],
        ['What time can you cold call in Florida?', 'Florida limits commercial telephone solicitation calls to between 8 a.m. and 8 p.m. in the called person\'s local time. Federal rules allow 8 a.m. to 9 p.m., so follow the stricter Florida window when calling Florida numbers.'],
        ['How many times can you call the same person in Florida?', 'Florida law limits commercial solicitation calls to no more than three calls to the same person within 24 hours on the same subject matter, regardless of which phone number you call from.'],
        ['Do I need to scrub against the Florida Do Not Call list?', 'Yes. Florida maintains its own state Do Not Call list through the Florida Department of Agriculture and Consumer Services, separate from the National Do Not Call Registry. Scrub your lists against both, plus your own internal do-not-call list.'],
        ['Can I use an auto-dialer or AI voice for real estate cold calls?', 'Calls made with an automated system that selects and dials numbers, and calls using a prerecorded or AI-generated voice, generally require the recipient\'s prior express written consent. Most cold-calling teams therefore use human callers with manually initiated or compliant click-to-call dialers. Get legal advice before using automation.'],
        ['What are the penalties for violating the TCPA or FTSA?', 'Both the TCPA and Florida\'s FTSA allow consumers to sue for $500 per violation, which can be tripled to $1,500 for willful or knowing violations. Because damages are per call, a single non-compliant campaign can create large exposure.'],
    ];
@endphp
@extends('layout.main')

@section('og_type', 'article')
@section('og_image', asset('assets/images/blog/Managing Customer Relations.jpg'))
@section('title', 'Florida Cold Calling Laws for Real Estate: TCPA, FTSA & DNC')
@section('meta_description', 'Florida real estate cold calling rules explained: 8 a.m.–8 p.m. calling hours, 3-call limit, Florida and national Do Not Call lists, auto-dialers and penalties.')


@push('schema')
    @include('partials.schema-page', [
        'type' => 'article',
        'name' => 'Florida Real Estate Cold Calling Laws: TCPA, FTSA & DNC Guide',
        'description' => 'Calling hours, call limits, Do Not Call scrubbing, auto-dialer consent and penalties that Florida real estate agents and investors must know before cold calling.',
        'breadcrumbs' => [['Blog', route('blog')]],
        'datePublished' => '2026-11-17',
        'image' => asset('assets/images/blog/Managing Customer Relations.jpg'),
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
                                        <li class="breadcrumb-item active" aria-current="page">Florida Cold Calling Laws</li>
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
                            <img src="{{ asset('assets/images/blog/Managing Customer Relations.jpg') }}" alt="Florida Real Estate Cold Calling Laws: TCPA, FTSA & Do Not Call Guide" fetchpriority="high" decoding="async">
                        </div>
                        <div class="blog-content">
                            <div class="blog-post-meta">
                                <span class="user">By : <a href="{{ route('editorial') }}">Zingo Assist Editorial Team</a></span>
                                <span class="category two">November 17, 2026</span>
                            </div>
                            <h1 class="title">Florida Real Estate Cold Calling Laws: TCPA, FTSA &amp; Do Not Call Guide</h1>

                            <div class="guide-summary">
                                <h2>Key rules at a glance</h2>
                                <ul>
                                    <li><strong>Calling hours:</strong> 8 a.m. to 8 p.m. in the recipient's local time for Florida numbers (federal law allows 8 a.m. to 9 p.m.; follow the stricter rule).</li>
                                    <li><strong>Frequency:</strong> no more than 3 solicitation calls to the same person in 24 hours on the same subject.</li>
                                    <li><strong>Do Not Call:</strong> scrub against the National DNC Registry, the Florida DNC list and your internal DNC list before every campaign.</li>
                                    <li><strong>Identify yourself:</strong> give your name and the business you are calling for at the start of the call, and display a working caller ID.</li>
                                    <li><strong>Automation:</strong> auto-dialed, prerecorded and AI-voice solicitation calls generally require prior express written consent.</li>
                                    <li><strong>Penalties:</strong> $500 per call, up to $1,500 if willful, under both the TCPA and the FTSA.</li>
                                </ul>
                            </div>

                            <p>Cold calling is still one of the most reliable ways for Florida agents, wholesalers and investors to find listings and motivated sellers. It is also one of the most litigated marketing channels in the state. Florida has its own "mini-TCPA" with a private right of action, and plaintiffs' firms actively look for violations. This guide summarizes the main federal and Florida rules so you can build a compliant calling routine.</p>

                            <p><em>This article is general information, not legal advice. Laws and court interpretations change; consult a Florida attorney before launching a calling campaign.</em></p>

                            <h2>The laws that apply to Florida real estate cold calls</h2>
                            <div class="guide-table-wrap">
                                <table class="guide-table">
                                    <thead><tr><th>Law</th><th>Who enforces it</th><th>What it covers</th></tr></thead>
                                    <tbody>
                                        <tr><td>Telephone Consumer Protection Act (TCPA), 47 U.S.C. § 227 and FCC rules at 47 C.F.R. § 64.1200</td><td>FCC, state attorneys general, private lawsuits</td><td>National DNC Registry, calling hours, consent for autodialed, prerecorded and artificial-voice calls, internal DNC lists</td></tr>
                                        <tr><td>Telemarketing Sales Rule (TSR)</td><td>FTC</td><td>Registry access and scrubbing, caller ID, abandoned-call limits, record keeping</td></tr>
                                        <tr><td>Florida Telephone Solicitation Act (FTSA), Fla. Stat. § 501.059</td><td>Florida AG, private lawsuits</td><td>Florida DNC list, identification at the start of calls, consent for automated calls and texts</td></tr>
                                        <tr><td>Florida Telemarketing Act, Fla. Stat. § 501.601 et seq.</td><td>Florida Department of Agriculture and Consumer Services</td><td>Calling hours, call-frequency limits and caller ID rules for commercial telephone solicitation</td></tr>
                                    </tbody>
                                </table>
                            </div>

                            <h2>1. Calling hours: 8 a.m. to 8 p.m.</h2>
                            <p>Federal rules prohibit telephone solicitations before 8 a.m. or after 9 p.m. in the called party's local time. Florida's 2021 amendments narrowed that window to <strong>8 a.m. to 8 p.m.</strong> for commercial telephone solicitation calls. Because many Florida numbers belong to people who live elsewhere (and vice versa), use the time zone of the person's address, and when in doubt call within the overlap of both rules.</p>

                            <h2>2. No more than three calls in 24 hours</h2>
                            <p>Florida also limits callers to <strong>three commercial solicitation calls to the same person within 24 hours on the same subject</strong>, regardless of which of your phone numbers you use. Configure your dialer to cap attempts per contact per day rather than relying on callers to count.</p>

                            <h2>3. Do Not Call lists: national, Florida and internal</h2>
                            <ul class="guide-list">
                                <li><strong>National Do Not Call Registry:</strong> you may not make telephone solicitations to registered residential numbers unless an exemption applies, such as an established business relationship or the person's written permission. Download the registry for your area codes and scrub at least every 31 days.</li>
                                <li><strong>Florida Do Not Call list:</strong> Florida maintains a separate state list through the Department of Agriculture and Consumer Services, updated quarterly. Scrub Florida numbers against it too. There is a narrow exception for licensed real estate agents responding to a yard sign or other advertisement placed by the seller; it does not cover general cold calls.</li>
                                <li><strong>Internal DNC list:</strong> when anyone asks you to stop calling, record it immediately and honor it across every caller and number. Federal rules require honoring do-not-call requests within a short, fixed period, so treat them as same-day updates.</li>
                            </ul>

                            <h2>4. Identify yourself and show caller ID</h2>
                            <p>At the start of the call, the caller should give their name and the business they are calling on behalf of, and the call should display a caller ID number that the person can call back to opt out. Never spoof or block caller ID.</p>

                            <h2>5. Auto-dialers, prerecorded messages, AI voices and texts</h2>
                            <p>Under the TCPA and the FTSA, solicitation calls placed with an automated system for selecting and dialing numbers, and calls using a prerecorded or artificial voice, generally require the recipient's <strong>prior express written consent</strong>. The FCC has confirmed that AI-generated voices count as artificial voices under the TCPA. Florida's 2023 amendments narrowed the FTSA's autodialer definition to systems that automate both selection and dialing, and added a 15-day notice period before a consumer can sue over unwanted text messages, but consent rules still apply.</p>
                            <p>In practice, most compliant real estate calling teams use human callers, scrubbed lists and dialers configured for manual or agent-initiated calling. If you want to use ringless voicemail, predictive dialers, AI voice agents or texting, get legal advice first.</p>

                            <h2>6. Penalties</h2>
                            <p>The TCPA and the FTSA both allow consumers to sue for <strong>$500 per violation</strong>, and up to <strong>$1,500 per violation</strong> when the violation is willful or knowing. Because each call or text is a separate violation, a campaign that calls thousands of numbers without scrubbing can create six- or seven-figure exposure. Brokers and investors can be liable for calls made on their behalf by assistants and vendors.</p>

                            <h2>A compliant cold calling checklist for Florida agents and investors</h2>
                            <ol class="guide-list" style="padding-left:20px;">
                                <li style="list-style:decimal;">Scrub every list against the National DNC Registry (at least every 31 days), the Florida DNC list and your internal DNC list.</li>
                                <li style="list-style:decimal;">Set your dialer to call only between 8 a.m. and 8 p.m. in the recipient's local time.</li>
                                <li style="list-style:decimal;">Cap attempts at three per person per 24 hours on the same subject.</li>
                                <li style="list-style:decimal;">Open every call with the caller's name and your business name, and display a callable caller ID.</li>
                                <li style="list-style:decimal;">Do not use autodialed, prerecorded or AI-voice calls, or marketing texts, without prior express written consent.</li>
                                <li style="list-style:decimal;">Log and honor every opt-out request immediately across all callers.</li>
                                <li style="list-style:decimal;">Keep records of scrubs, scripts, consent and opt-outs for every campaign.</li>
                                <li style="list-style:decimal;">Have a Florida attorney review your script, dialer setup and consent language.</li>
                            </ol>

                            <div class="guide-cta">
                                <p><strong>Want prospecting without the compliance headache?</strong> Zingo Assist cold callers work your scrubbed lists inside Florida calling windows and log every opt-out. Start with a free 2-day trial.</p>
                                <a class="btn-guide" href="{{ route('service.cold_calling') }}">Real estate cold calling services</a>
                            </div>

                            <p>Using an assistant to make calls? Read <a href="{{ route('blog.unlicensed_assistant_florida') }}">what an unlicensed real estate assistant can do in Florida</a>, or see our <a href="{{ route('service.real_estate_isa') }}">real estate ISA services</a>. Investors and wholesalers can also see our <a href="{{ route('service.wholesale_cold_calling') }}">wholesale real estate cold calling services</a>, and Tampa Bay agents can learn about our <a href="{{ route('location.tampa_st_petersburg') }}">local St. Petersburg team</a>.</p>

                            <h2>Frequently asked questions</h2>
                            @foreach ($faqs as $f)
                                <h3>{{ $f[0] }}</h3>
                                <p>{{ $f[1] }}</p>
                            @endforeach

                            <h2>Sources</h2>
                            <ul class="guide-list">
                                <li><a href="https://www.fcc.gov/general/telemarketing-and-robocalls" target="_blank" rel="noopener">FCC: Telemarketing and robocalls (TCPA consumer guide)</a></li>
                                <li><a href="https://www.ecfr.gov/current/title-47/chapter-I/subchapter-B/part-64/subpart-L/section-64.1200" target="_blank" rel="noopener">47 C.F.R. § 64.1200: Delivery restrictions (eCFR)</a></li>
                                <li><a href="https://docs.fcc.gov/public/attachments/FCC-24-17A1.pdf" target="_blank" rel="noopener">FCC Declaratory Ruling FCC 24-17: AI-generated voices under the TCPA</a></li>
                                <li><a href="https://www.ftc.gov/legal-library/browse/rules/telemarketing-sales-rule" target="_blank" rel="noopener">FTC: Telemarketing Sales Rule</a></li>
                                <li><a href="https://telemarketing.donotcall.gov/" target="_blank" rel="noopener">National Do Not Call Registry: access for telemarketers</a></li>
                                <li><a href="https://www.flsenate.gov/Laws/Statutes/2024/501.059" target="_blank" rel="noopener">Florida Statutes § 501.059: Telephone solicitation</a></li>
                                <li><a href="https://www.flsenate.gov/Laws/Statutes/2024/501.616" target="_blank" rel="noopener">Florida Statutes § 501.616: Unlawful acts and practices (telemarketing)</a></li>
                                <li><a href="https://www.flsenate.gov/Committees/billsummaries/2023/html/761" target="_blank" rel="noopener">Florida Senate: HB 761 (2023) bill summary</a></li>
                                <li><a href="https://www.floridarealtors.org/law-ethics/library/do-not-call" target="_blank" rel="noopener">Florida Realtors: Do Not Call rules</a></li>
                            </ul>

                            <p class="guide-note">This guide is for general information only and is not legal advice. It reflects our understanding of federal and Florida rules as of November 17, 2026. Statutes, regulations and court decisions change frequently; verify current requirements with the FCC, FTC, Florida Statutes and a qualified attorney.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.blog-footer')
@endsection
