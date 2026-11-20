@php
    $faqs = [
        ['Can an unlicensed assistant show property in Florida?', 'No. Under the Florida Real Estate Commission (FREC) guidance, an unlicensed assistant may not show property or give a buyer or tenant access to a listed property. They may schedule showings for the licensee and may drive a customer to a property, but the licensee must handle the showing.'],
        ['Can an unlicensed assistant host an open house in Florida?', 'An unlicensed assistant may be present at an open house for security and to hand out brochures and written materials, but may not answer questions about the property. All questions should be directed to the licensee.'],
        ['Can an unlicensed real estate assistant be paid a commission in Florida?', 'No. An unlicensed assistant should not be paid a commission, closing bonus or any compensation based on a real estate transaction. A fixed hourly wage or salary that is not tied to transactions is the usual arrangement; confirm the setup with your broker or a Florida real estate attorney.'],
        ['Can an unlicensed assistant make cold calls in Florida?', 'Assistants commonly make scripted calls to set appointments and gather information for the licensee, but they may not discuss terms, give opinions on value or negotiate. Every call must also follow the TCPA, the National and Florida Do Not Call lists and Florida calling-hour limits.'],
        ['Can an MLS subscriber share their user ID and login credentials with an unlicensed assistant?', 'Generally no. MLS rules typically prohibit subscribers from sharing their user ID and password with anyone, including their own assistant, and many MLSs fine violations. Instead, ask your MLS whether it offers a separate assistant or clerical login that you sponsor and supervise. With that access, an unlicensed assistant can enter and update listings for your approval, which FREC guidance permits under your supervision.'],
        ['Can a virtual assistant do these tasks remotely?', 'Yes. Most permitted tasks, such as answering and forwarding calls, MLS input, scheduling, preparing ads and flyers for approval, assembling closing documents and following up on loan commitments, can be done remotely by a trained virtual assistant under the licensee&#39;s supervision.'],
    ];
@endphp
@extends('layout.main')

@section('og_type', 'article')
@section('og_image', asset('assets/images/blog/Handling Administrative Tasks.jpg'))
@section('title', 'What Can an Unlicensed Real Estate Assistant Do in Florida?')
@section('meta_description', 'The FREC list of tasks an unlicensed real estate assistant may and may not do in Florida, including showings, open houses, calls and pay, with sources.')

@push('schema')
    @include('partials.schema-page', [
        'type' => 'article',
        'name' => 'What Can an Unlicensed Real Estate Assistant Do in Florida?',
        'description' => 'The FREC list of tasks an unlicensed real estate assistant may and may not perform in Florida, how they can be paid, and how to use a virtual assistant compliantly.',
        'breadcrumbs' => [['Blog', route('blog')]],
        'datePublished' => '2026-11-18',
        'image' => asset('assets/images/blog/Handling Administrative Tasks.jpg'),
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
                                        <li class="breadcrumb-item active" aria-current="page">Unlicensed Assistants in Florida</li>
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
                            <img src="{{ asset('assets/images/blog/Handling Administrative Tasks.jpg') }}" alt="What Can an Unlicensed Real Estate Assistant Do in Florida?" fetchpriority="high" decoding="async">
                        </div>
                        <div class="blog-content">
                            <div class="blog-post-meta">
                                <span class="user">By : <a href="{{ route('editorial') }}">Zingo Assist Editorial Team</a></span>
                                <span class="category two">November 18, 2026</span>
                            </div>
                            <h1 class="title">What Can an Unlicensed Real Estate Assistant Do in Florida?</h1>

                            <div class="guide-summary">
                                <h2>Quick answer</h2>
                                <p>In Florida, an <strong>unlicensed real estate assistant can handle administrative and support work under a licensee&#39;s supervision</strong>: answering and forwarding calls, entering listings in the MLS, scheduling showings, placing signs, preparing ads and flyers for approval, assembling closing documents and following up on loan commitments. They <strong>cannot</strong> show property or provide access to it, negotiate, discuss or interpret contract terms, give opinions on value, answer questions at open houses, or be paid a commission. This is based on the informal list of permitted activities the Florida Real Estate Commission (FREC) updated in November 2018.</p>
                            </div>

                            <p>Hiring help is one of the fastest ways for a Florida agent to grow, but Chapter 475 of the Florida Statutes reserves many activities for licensees. FREC has published an informal list of tasks unlicensed assistants may perform, which Florida Realtors and local Realtor boards share with their members. This guide summarizes that list, explains the main limits and shows how to use an unlicensed or <a href="{{ route('service.real_estate_virtual_assistant') }}">virtual real estate assistant</a> without putting your license at risk.</p>

                            <p><em>This article is general information, not legal advice. FREC&#39;s list is informal guidance and your broker or MLS may set stricter rules. Confirm your arrangement with your broker or a Florida real estate attorney.</em></p>

                            <h2>Tasks an unlicensed assistant may perform</h2>
                            <p>The FREC list, as published by Florida Realtors and local boards, allows an unlicensed employee or assistant to:</p>
                            <ul class="guide-list">
                                <li>Answer the phone and forward calls.</li>
                                <li>Fill out and submit listings and changes to a multiple listing service (MLS).</li>
                                <li>Follow up on loan commitments after a contract has been negotiated, and generally secure status reports.</li>
                                <li>Assemble documents for closing.</li>
                                <li>Secure public information documents from courthouses, utility districts and similar sources.</li>
                                <li>Have keys made for company listings.</li>
                                <li>Write ads for the approval of the licensee and supervising broker, and place classified advertising.</li>
                                <li>Receive, record and deposit earnest money, security deposits and advance rents, under the broker&#39;s supervision.</li>
                                <li>Type contract forms for approval by the licensee and supervising broker.</li>
                                <li>Monitor licenses and personnel files.</li>
                                <li>Compute commission checks.</li>
                                <li>Place signs on property.</li>
                                <li>Order items of repair as directed by the licensee.</li>
                                <li>Prepare flyers and promotional information for approval by the licensee and supervising broker.</li>
                                <li>Act as a courier to deliver documents and pick up keys.</li>
                                <li>Place routine calls about late rent payments.</li>
                                <li>Schedule appointments for the licensee to show a listed property.</li>
                                <li>Be present at an open house for security and to hand out brochures and written materials, without answering questions.</li>
                                <li>Give objective, written information about a listing that was prepared by the licensee.</li>
                                <li>Gather information for a comparative market analysis (CMA) or appraisal.</li>
                            </ul>

                            <h2>What an unlicensed assistant may not do</h2>
                            <ul class="guide-list">
                                <li><strong>Show property</strong> or give a buyer or tenant access to a listed property.</li>
                                <li><strong>Answer questions</strong> about a listing, title, financing or closing beyond objective written information the licensee prepared.</li>
                                <li><strong>Discuss, explain or interpret</strong> a contract, listing agreement or other real estate document.</li>
                                <li><strong>Negotiate</strong> price or terms, or give opinions or advice about value.</li>
                                <li><strong>Host an open house alone</strong> or answer visitors&#39; questions at one.</li>
                                <li><strong>Be paid on the basis of real estate activity</strong>, such as a commission, referral fee or closing bonus.</li>
                            </ul>

                            <h2>Permitted vs not permitted: quick comparison</h2>
                            <div class="guide-table-wrap">
                                <table class="guide-table">
                                    <thead><tr><th>Situation</th><th>Unlicensed assistant</th><th>Licensee</th></tr></thead>
                                    <tbody>
                                        <tr><td>Buyer calls about a listing</td><td>Answer, forward the call or send written listing information</td><td>Answer questions, discuss the property</td></tr>
                                        <tr><td>Showing request</td><td>Schedule the appointment</td><td>Conduct the showing</td></tr>
                                        <tr><td>Open house</td><td>Be present for security, hand out materials</td><td>Host and answer questions</td></tr>
                                        <tr><td>New listing</td><td>Prepare and submit MLS input, order signs and photos</td><td>Advise the seller on price and terms</td></tr>
                                        <tr><td>Under contract</td><td>Track deadlines, assemble documents, follow up on loan status</td><td>Negotiate repairs and explain contract terms</td></tr>
                                        <tr><td>Marketing</td><td>Draft ads, flyers and social posts for approval</td><td>Approve marketing before it is published</td></tr>
                                    </tbody>
                                </table>
                            </div>

                            <h2>How should an unlicensed assistant be paid?</h2>
                            <p>Florida guidance is clear that an unlicensed assistant should not receive compensation tied to a transaction, such as a commission, referral fee or closing bonus. Most agents pay an hourly wage or salary, or use an agency that bills for hours or a monthly plan. If an assistant performs licensed activities, they must hold a license and be paid through the broker. Confirm your arrangement with your broker.</p>

                            <h2>Can a virtual assistant do this work remotely?</h2>
                            <p>Yes. Nearly every task on the permitted list can be done by a remote assistant: answering and forwarding calls, MLS input, scheduling showings, preparing ads and flyers for approval, assembling closing documents, following up on loan commitments and gathering CMA data. That is how a <a href="{{ route('service.real_estate_virtual_assistant') }}">real estate virtual assistant</a> supports Florida agents. For contract-to-close work, see our <a href="{{ route('service.real_estate_transaction_coordinator') }}">transaction coordinator services</a>, and for phone-based lead conversion, our <a href="{{ route('service.real_estate_isa') }}">real estate ISA services</a>.</p>
                            <p>Two points need extra care when an assistant works remotely:</p>
                            <ul class="guide-list">
                                <li><strong>MLS access:</strong> each MLS decides whether unlicensed assistants can have their own login. Use an assistant account if your MLS offers one instead of sharing your personal credentials.</li>
                                <li><strong>Phone calls:</strong> appointment-setting and follow-up calls must follow the TCPA, the National and Florida Do Not Call lists and Florida&#39;s calling-hour limits. See our <a href="{{ route('blog.florida_cold_calling_laws') }}">Florida cold calling laws guide</a>.</li>
                            </ul>

                            <h2>Checklist before you hire</h2>
                            <ol class="guide-list" style="padding-left:20px;">
                                <li style="list-style:decimal;">Get your broker&#39;s written approval and follow any brokerage policy on assistants.</li>
                                <li style="list-style:decimal;">Write a task list that only includes permitted activities.</li>
                                <li style="list-style:decimal;">Agree a pay structure that is not tied to transactions.</li>
                                <li style="list-style:decimal;">Set up role-based access to your CRM, transaction platform and MLS.</li>
                                <li style="list-style:decimal;">Give the assistant approved scripts and written listing information, and a rule to forward all questions to you.</li>
                                <li style="list-style:decimal;">Review the arrangement with your broker or attorney whenever FREC guidance changes.</li>
                            </ol>

                            <h2>Frequently asked questions</h2>
                            @foreach ($faqs as $f)
                                <h3>{{ $f[0] }}</h3>
                                <p>{!! $f[1] !!}</p>
                            @endforeach

                            <h2>Sources</h2>
                            <ul class="guide-list">
                                <li><a href="https://www.floridarealtors.org/law-ethics/library/unlicensed-assistants" target="_blank" rel="noopener">Florida Realtors: Tasks an unlicensed real estate assistant can legally perform</a></li>
                                <li><a href="https://www.tamparealtors.org/blog/2019/02/21/broker-news/frec-updates-rules-for-unlicensed-assistants/" target="_blank" rel="noopener">Greater Tampa Realtors: FREC updates rules for unlicensed assistants</a></li>
                                <li><a href="https://pinellasrealtor.org/wp-content/uploads/2021/02/PERMITTED-ACTIVITIES-OF-UNLICENSED-ASSISTANTS_amended11-2018-11.pdf" target="_blank" rel="noopener">Pinellas Realtor Organization: Permissible activities of unlicensed assistants (amended Nov 2018)</a></li>
                                <li><a href="https://www.nar.realtor/sites/default/files/documents/Unlicensed%20Assistants%20Table.09.11.17.pdf" target="_blank" rel="noopener">National Association of Realtors: State statutes and regulations for unlicensed assistants</a></li>
                                <li><a href="https://www.flsenate.gov/Laws/Statutes/2024/Chapter475" target="_blank" rel="noopener">Florida Statutes Chapter 475: Real estate brokers, sales associates, schools and appraisers</a></li>
                            </ul>

                            <p class="guide-note">This guide is general information and not legal advice. It reflects FREC&#39;s informal list of permitted activities as published by Florida Realtors and local boards (last updated by FREC in November 2018). Brokerage and MLS rules may be stricter. Last reviewed November 18, 2026.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.blog-footer')
@endsection
