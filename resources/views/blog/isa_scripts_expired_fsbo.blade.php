@php
    $faqs = [
        ['What should an ISA say first when calling an expired listing?', 'Introduce yourself and the agent you work for, say why you are calling (the listing came off the market) and ask one easy question, such as whether they still plan to sell. Keep the opening under 15 seconds and ask permission to continue.'],
        ['Can an unlicensed ISA call expired and FSBO sellers?', 'An ISA can make scripted calls to gather information and book an appointment for the licensed agent. The ISA should not give opinions on price or value, discuss commission or contract terms, or negotiate. Those stay with the agent.'],
        ['How many times should you call an expired listing?', 'Expect most appointments to come from follow-up, not the first call. A common cadence is a first call on the day the listing expires, then follow-ups over several weeks, always within legal calling hours and frequency limits such as Florida&#39;s limit of three calls in 24 hours on the same subject.'],
        ['Do I need to check the Do Not Call list before calling FSBOs?', 'Yes. Scrub every number against the National Do Not Call Registry, your state list and your internal opt-out list before calling. FSBO sellers who advertise their home are not automatically exempt; check your state rules and confirm with your broker.'],
        ['What is a good appointment rate for expired and FSBO calls?', 'It varies widely by market, list quality and caller skill, so track your own numbers by list: dials, conversations, appointments set and appointments kept. Compare lists and scripts week to week rather than chasing an industry average.'],
    ];
@endphp
@extends('layout.main')

@section('og_type', 'article')
@section('og_image', asset('assets/images/blog/Organizing Meetings and Appointments.jpg'))
@section('title', 'ISA Scripts for Expired and FSBO Leads (Free Templates)')
@section('meta_description', 'Word-for-word ISA scripts for expired listings and FSBO sellers: openers, discovery questions, objection handlers, voicemails and a compliant cadence.')

@push('schema')
    @include('partials.schema-page', [
        'type' => 'article',
        'name' => 'ISA Scripts for Expired and FSBO Leads',
        'description' => 'Call scripts for inside sales agents working expired listings and FSBO sellers, with objection handlers, voicemails, a follow-up cadence and compliance checks.',
        'breadcrumbs' => [['Blog', route('blog')]],
        'datePublished' => '2026-11-20',
        'image' => asset('assets/images/blog/Organizing Meetings and Appointments.jpg'),
        'faqs' => array_map(fn ($f) => [$f[0], html_entity_decode($f[1], ENT_QUOTES)], $faqs),
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
                                        <li class="breadcrumb-item active" aria-current="page">ISA Scripts</li>
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
                            <img src="{{ asset('assets/images/blog/Organizing Meetings and Appointments.jpg') }}" alt="Inside sales agent booking listing appointments from expired and FSBO calls" fetchpriority="high" decoding="async">
                        </div>
                        <div class="blog-content">
                            <div class="blog-post-meta">
                                <span class="user">By : <a href="{{ route('editorial') }}">Zingo Assist Editorial Team</a></span>
                                <span class="category two">November 20, 2026</span>
                            </div>
                            <h1 class="title">ISA Scripts for Expired and FSBO Leads</h1>

                            <div class="guide-summary">
                                <h2>Quick answer</h2>
                                <p>A good <strong>expired or FSBO script</strong> for an inside sales agent (ISA) does four things: a short, honest opener; two or three questions about the seller&#39;s plans and timeline; a calm answer to the most common objection; and a clear ask for a <strong>15-minute meeting with the agent</strong>. The ISA books the appointment. The licensed agent handles price, commission and strategy.</p>
                            </div>

                            <p>Expired and for-sale-by-owner sellers are some of the warmest prospects in real estate: they already want to sell. The problem is consistency. Calls have to happen every morning, follow-ups have to happen for weeks, and every conversation has to be logged. That is exactly the work an ISA or <a href="{{ route('service.expired_fsbo_calling') }}">expired and FSBO calling team</a> takes off the agent&#39;s plate.</p>
                            <p>Below are the scripts we train our callers on, written for an assistant who is calling on behalf of a licensed agent. Adapt the wording to your voice and get your broker&#39;s approval before you use them.</p>

                            <h2>Before you dial: a 60-second compliance check</h2>
                            <ul class="guide-list">
                                <li><strong>Scrub every number</strong> against the National Do Not Call Registry, your state list and your own opt-out list.</li>
                                <li><strong>Call only in legal hours</strong> for the seller&#39;s time zone. Federal rules allow 8 a.m. to 9 p.m.; Florida limits calls to 8 a.m. to 8 p.m. and to three calls in 24 hours on the same subject.</li>
                                <li><strong>Identify yourself and the agent</strong> at the start of every call, and log an opt-out the moment someone asks.</li>
                                <li><strong>Stay in the ISA lane:</strong> ask questions and book appointments. Do not give opinions on value, discuss commission or interpret contracts.</li>
                            </ul>
                            <p>For the details, read our <a href="{{ route('rules.state', 'florida') . '#cold-calling-laws' }}">Florida cold calling laws guide</a> and <a href="{{ route('rules.hub') }}">what an unlicensed real estate assistant can do</a>.</p>

                            <h2>Expired listing script</h2>
                            <p>Expired sellers are often frustrated and are getting many calls the same morning. Be brief, be human and lead with a question, not a pitch.</p>
                            <h3>Opener</h3>
                            <div class="guide-summary">
                                <p>"Hi, is this [Seller]? This is [Name], I work with [Agent] at [Brokerage] here in [City]. I saw your home on [Street] came off the market, and I&#39;m not calling to pitch you. Can I ask you one quick question?"</p>
                                <p>"Are you still planning to sell, or have you decided to stay for now?"</p>
                            </div>
                            <h3>Discovery questions</h3>
                            <ul class="guide-list">
                                <li>"If it had sold, where were you planning to move next?"</li>
                                <li>"What&#39;s your timeline now: the next few weeks, a few months, or no rush?"</li>
                                <li>"What do you think kept it from selling?" <em>(Listen. Do not criticise the previous agent.)</em></li>
                                <li>"If you did put it back on the market, what would need to be different this time?"</li>
                            </ul>
                            <h3>Appointment ask</h3>
                            <div class="guide-summary">
                                <p>"That makes sense. [Agent] puts together a short review for homes that didn&#39;t sell: what the buyers saw, what the market is doing now and a plan for a second try. It takes about 15 minutes and there&#39;s no obligation. Would [day] at [time] or [day] at [time] work better?"</p>
                            </div>

                            <h2>FSBO script</h2>
                            <p>FSBO sellers want to save commission. The conversation is about being useful, not about telling them they need an agent.</p>
                            <h3>Opener</h3>
                            <div class="guide-summary">
                                <p>"Hi, is this [Seller]? This is [Name] with [Agent] at [Brokerage]. I saw your home on [Street] is for sale by owner. Are you open to working with buyers&#39; agents, or are you selling only to buyers without an agent?"</p>
                            </div>
                            <h3>Discovery questions</h3>
                            <ul class="guide-list">
                                <li>"How has it been going so far? Have you had many showings?"</li>
                                <li>"How did you settle on your asking price?"</li>
                                <li>"If you sold in the next 30 days, where would you be heading?"</li>
                                <li>"What would make you consider getting some help with the sale?"</li>
                            </ul>
                            <h3>Appointment ask</h3>
                            <div class="guide-summary">
                                <p>"Totally understand wanting to do it yourself. A lot of owners find it useful to see what nearby homes actually sold for and how buyers are searching right now. [Agent] can walk you through that in 15 minutes, no strings attached. Would a call or a quick stop by work better this week?"</p>
                            </div>

                            <h2>Answers to the five most common objections</h2>
                            <div class="guide-table-wrap">
                                <table class="guide-table">
                                    <thead><tr><th>Seller says</th><th>ISA response</th></tr></thead>
                                    <tbody>
                                        <tr><td>"I&#39;m taking it off the market."</td><td>"That&#39;s fair. Is that because the timing changed, or because you were frustrated with how it went?" Then ask about their long-term plan and offer a follow-up date.</td></tr>
                                        <tr><td>"I&#39;m going to relist with my agent."</td><td>"Good to hear you have someone. If anything changes, would it be OK if I checked in after [date]?" Log it and set the follow-up.</td></tr>
                                        <tr><td>"Your commission is too high."</td><td>"I&#39;m not the right person to talk about fees. [Agent] covers that in the meeting, and you can decide then." Never quote or negotiate commission.</td></tr>
                                        <tr><td>"How much do you think it&#39;s worth?"</td><td>"[Agent] would be the one to give you a real number, based on recent sales. That&#39;s part of the 15-minute review." Do not guess a value.</td></tr>
                                        <tr><td>"Stop calling me."</td><td>"Understood, I&#39;ll remove your number right now. Sorry for the bother." Log the opt-out immediately.</td></tr>
                                    </tbody>
                                </table>
                            </div>

                            <h2>Voicemail scripts</h2>
                            <ul class="guide-list">
                                <li><strong>Expired:</strong> "Hi [Seller], it&#39;s [Name] with [Agent] at [Brokerage]. I saw [Street] came off the market and had a quick question about your plans. You can reach me at [number]. Again, [number]. Thanks."</li>
                                <li><strong>FSBO:</strong> "Hi [Seller], [Name] with [Agent]. I have a buyer-side question about your home on [Street]. Call me back at [number] when you have a minute. Thanks."</li>
                            </ul>
                            <p>Only say you have a buyer if it is true. Keep voicemails under 20 seconds and leave one, not three.</p>

                            <h2>Follow-up cadence</h2>
                            <p>Most listing appointments from these lists come from follow-up. A simple cadence your ISA can run in the CRM:</p>
                            <div class="guide-table-wrap">
                                <table class="guide-table">
                                    <thead><tr><th>When</th><th>Expired</th><th>FSBO</th></tr></thead>
                                    <tbody>
                                        <tr><td>Day 1</td><td>Call (morning), voicemail if no answer</td><td>Call, voicemail</td></tr>
                                        <tr><td>Day 2–3</td><td>Second call at a different time of day</td><td>Second call</td></tr>
                                        <tr><td>Week 2</td><td>Call with a market update</td><td>Call: "How did the weekend showings go?"</td></tr>
                                        <tr><td>Week 4</td><td>Call, then mailer or email if you have consent</td><td>Call with nearby sold data from the agent</td></tr>
                                        <tr><td>Monthly</td><td>Nurture call until they relist or opt out</td><td>Nurture call until they sell or opt out</td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <p>Every attempt stays inside the calling-hour and frequency limits above, and every outcome goes into your CRM with the next call date. If you use Follow Up Boss, see <a href="{{ route('blog.follow_up_boss_va') }}">how teams run a VA in Follow Up Boss</a>.</p>

                            <h2>Track four numbers by list</h2>
                            <ul class="guide-list">
                                <li><strong>Dials</strong>: how much calling actually happened.</li>
                                <li><strong>Conversations</strong>: real contacts with the owner.</li>
                                <li><strong>Appointments set</strong>: meetings booked for the agent.</li>
                                <li><strong>Appointments kept</strong>: meetings that happened.</li>
                            </ul>
                            <p>Compare expired vs FSBO lists and script versions week by week. If conversations are high but appointments are low, work on the ask. If dials are high but conversations are low, the problem is usually the data or the calling times.</p>

                            <div class="guide-cta">
                                <p><strong>Want someone to make these calls for you?</strong> Our trained callers work your expired and FSBO lists every day, follow up for weeks and book appointments straight into your calendar. Start with a free 2-day trial.</p>
                                <a class="btn-guide" href="{{ route('service.expired_fsbo_calling') }}">See expired &amp; FSBO calling</a>
                            </div>

                            <h2>Frequently asked questions</h2>
                            @foreach ($faqs as $f)
                                <h3>{{ $f[0] }}</h3>
                                <p>{!! $f[1] !!}</p>
                            @endforeach

                            <h2>Sources</h2>
                            <ul class="guide-list">
                                <li><a href="https://telemarketing.donotcall.gov/" target="_blank" rel="noopener">National Do Not Call Registry for telemarketers (FTC)</a></li>
                                <li><a href="https://www.fcc.gov/consumers/guides/stop-unwanted-robocalls-and-texts" target="_blank" rel="noopener">FCC: Stop unwanted robocalls and texts (TCPA)</a></li>
                                <li><a href="{{ route('rules.state', 'florida') . '#cold-calling-laws' }}">Zingo Assist: Florida real estate cold calling laws</a></li>
                            </ul>

                            <p class="guide-note">These scripts are general templates, not legal advice. Calling rules differ by state and change over time; confirm your campaign with your broker or an attorney. Last reviewed November 20, 2026.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.blog-footer')
@endsection
