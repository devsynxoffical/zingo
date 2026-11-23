@php
    $faqs = [
        ['Can an unlicensed assistant make cold calls in Texas?', 'Not to prospect. TREC says an unlicensed assistant may not call people to find out whether they want to buy, sell or lease, even to set up an appointment with a license holder, because soliciting is licensed activity. Prospecting calls must be made by a license holder.'],
        ['Can an unlicensed assistant set appointments in Texas?', 'An unlicensed assistant may arrange a showing appointment for the license holder who will show the property. Calls whose purpose is to find out whether someone wants to buy, sell or lease are solicitation and need a license.'],
        ['Can an unlicensed assistant answer questions about a listing in Texas?', 'Yes, within limits. If the assistant identifies as unlicensed, TREC allows them to confirm the size, price and terms of a property that has been advertised. Other questions go to a license holder.'],
        ['What happens if an unlicensed assistant does licensed work in Texas?', 'The broker and agents can be disciplined by TREC, and the unlicensed person can face criminal charges for unlicensed activity.'],
    ];
    $calls = [
        ['Calling expireds, FSBOs or a farm to ask if they want to sell', 'No', 'Solicitation. Only a license holder may do it.'],
        ['Calling a new lead to ask if they want to buy and booking them with an agent', 'No', 'TREC includes calls made to set up an appointment with a license holder.'],
        ['Arranging a showing for the agent who will show the property', 'Yes', 'The license holder conducts the showing.'],
        ['Confirming the advertised size, price or terms of a listing', 'Yes', 'Only if the assistant says they are unlicensed; anything more goes to a licensee.'],
        ['Discussing price, value, terms or a contract', 'No', 'Refer the caller to a license holder.'],
    ];
@endphp
@extends('layout.main')

@section('og_type', 'article')
@section('og_image', asset('assets/images/blog/No Time for New Projects.jpg'))
@section('title', 'Can an Unlicensed Assistant Make Cold Calls in Texas?')
@section('meta_description', 'What TREC lets unlicensed real estate assistants do on the phone in Texas: no prospecting calls, but showing appointments and listing facts are allowed.')

@push('schema')
    @include('partials.schema-page', [
        'type' => 'article',
        'name' => 'Can an Unlicensed Assistant Make Cold Calls in Texas?',
        'description' => 'What the Texas Real Estate Commission allows unlicensed assistants to do on the phone, which calls need a license, and how to staff prospecting compliantly.',
        'breadcrumbs' => [['Blog', route('blog')]],
        'datePublished' => '2026-11-23',
        'image' => asset('assets/images/blog/No Time for New Projects.jpg'),
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
                                        <li class="breadcrumb-item active" aria-current="page">Texas Cold Calls</li>
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
                            <img src="{{ asset('assets/images/blog/No Time for New Projects.jpg') }}" alt="Texas real estate agent deciding which calls an unlicensed assistant can make" fetchpriority="high" decoding="async">
                        </div>
                        <div class="blog-content">
                            <div class="blog-post-meta">
                                <span class="user">By : <a href="{{ route('editorial') }}">Zingo Assist Editorial Team</a></span>
                                <span class="category two">November 23, 2026</span>
                            </div>
                            <h1 class="title">Can an Unlicensed Assistant Make Cold Calls in Texas?</h1>

                            <div class="guide-summary">
                                <h2>Quick answer</h2>
                                <p><strong>No, not prospecting calls.</strong> The Texas Real Estate Commission (TREC) says an unlicensed assistant may not call people to find out whether they want to buy, sell or lease property, <strong>even if the only goal is to set up an appointment with a license holder</strong>. In Texas that is solicitation, and only a license holder may do it. An unlicensed assistant may arrange showing appointments for the agent who will show the property, and may confirm the advertised size, price and terms of a listing if they say they are unlicensed.</p>
                            </div>

                            <p>Texas is stricter than many states on this point, and it surprises agents who are used to unlicensed callers booking appointments elsewhere. If you build a calling campaign in Texas, the license question comes before the script.</p>

                            <h2>Which calls are allowed in Texas</h2>
                            <div class="guide-table-wrap">
                                <table class="guide-table">
                                    <thead><tr><th>Call</th><th>Unlicensed assistant?</th><th>Why</th></tr></thead>
                                    <tbody>
                                        @foreach ($calls as $c)
                                            <tr><td>{{ $c[0] }}</td><td><strong>{{ $c[1] }}</strong></td><td>{{ $c[2] }}</td></tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <h2>What an unlicensed assistant can do in Texas</h2>
                            <ul class="guide-list">
                                <li>Administrative work such as data entry and typing contracts at a license holder&#39;s direction.</li>
                                <li>Bookkeeping and office tasks. Only a license holder may be authorized to withdraw or transfer money from a trust account.</li>
                                <li>Arrange showing appointments for the license holder who will show the property.</li>
                                <li>Confirm the size, price and terms of an advertised property, after saying they are unlicensed.</li>
                            </ul>

                            <h2>What needs a Texas license</h2>
                            <ul class="guide-list">
                                <li>Soliciting buyers, sellers, landlords or tenants, including calls to see whether someone wants to buy, sell or lease.</li>
                                <li>Showing property, giving a prospective buyer or tenant access to a property, or hosting an open house.</li>
                                <li>Reviewing contracts or facilitating a transaction.</li>
                                <li>Directing or supervising agents in their licensed work.</li>
                            </ul>
                            <p>TREC can discipline the broker and agents who use unlicensed help for licensed work, and the unlicensed person can face criminal charges. TREC also recommends written guidelines for agents and unlicensed staff.</p>

                            <h2>How Texas agents staff prospecting instead</h2>
                            <ol class="guide-list" style="padding-left:20px;">
                                <li style="list-style:decimal;"><strong>Use a licensed caller.</strong> A Texas sales agent sponsored by your broker can work as your inside sales agent and make prospecting and lead follow-up calls.</li>
                                <li style="list-style:decimal;"><strong>Give the unlicensed assistant everything around the calls:</strong> list preparation, CRM updates, showing appointments, confirmations, listing and transaction paperwork.</li>
                                <li style="list-style:decimal;"><strong>Follow telemarketing law as well.</strong> Federal Do Not Call and TCPA rules apply to every call, licensed or not.</li>
                                <li style="list-style:decimal;"><strong>Write it down.</strong> A one-page list of what your assistant may and may not say on the phone protects you and them.</li>
                            </ol>
                            <p>The rules are different in other states. Compare them in <a href="{{ route('blog.unlicensed_assistant_rules') }}">what can an unlicensed real estate assistant do?</a>, which covers Texas, Florida, California, Georgia, Arizona and North Carolina.</p>

                            <div class="guide-cta">
                                <p><strong>Free up your licensed team for the calls only they can make.</strong> Zingo Assist real estate assistants handle CRM, scheduling, listing and transaction admin under your supervision. Try one free for two days.</p>
                                <a class="btn-guide" href="{{ route('service.real_estate_virtual_assistant') }}">Explore real estate VA services</a>
                            </div>

                            <h2>Frequently asked questions</h2>
                            @foreach ($faqs as $f)
                                <h3>{{ $f[0] }}</h3>
                                <p>{{ $f[1] }}</p>
                            @endforeach

                            <h2>Sources</h2>
                            <ul class="guide-list">
                                <li><a href="https://www.trec.texas.gov/what-can-unlicensed-office-personnel-or-unlicensed-assistant-do" target="_blank" rel="noopener">TREC: What can unlicensed office personnel or an unlicensed assistant do?</a></li>
                                <li><a href="https://www.trec.texas.gov/article/can-you-use-unlicensed-individuals-help-your-texas-real-estate-transactions-it-depends" target="_blank" rel="noopener">TREC: Can you use unlicensed individuals to help with your Texas real estate transactions? It depends.</a></li>
                                <li><a href="https://www.trec.texas.gov/article/use-unlicensed-assistants-real-estate-transactions" target="_blank" rel="noopener">TREC: Use of unlicensed assistants in real estate transactions</a></li>
                            </ul>

                            <p class="guide-note">This article summarizes TREC&#39;s published guidance as of November 2026. It is general information, not legal advice; confirm your arrangement with your broker or a Texas real estate attorney. Last reviewed November 23, 2026.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.blog-footer')
@endsection
