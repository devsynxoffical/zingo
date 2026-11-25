@php
    $page = [
        'form_service' => 'Wholesale Cold Calling',
        'h1' => ['Wholesale Real Estate', 'Cold Calling Services'],
        'hero' => [
            'Trained cold callers who find motivated sellers for real estate wholesalers and investors. Zingo Assist callers work your lists, qualify sellers on condition, timeline, motivation and price, and hand hot leads to your acquisitions team with clean notes in your CRM.',
            'No long onboarding: give us your script, lists and dialer, and start with a free 2-day trial.',
        ],
        'answer' => '<strong>Wholesale real estate cold calling</strong> means calling property owners from targeted lists, such as absentee owners, tired landlords, pre-foreclosures, probate and vacant properties, to find people motivated to sell off-market. A cold caller qualifies each seller on condition, motivation, timeline and asking price, then passes warm leads to the investor or acquisitions manager. Zingo Assist provides trained wholesale cold callers to US investors, with a free 2-day trial.',
        'overview' => [
            'image' => 'assets/images/services/lead_generation.jpg',
            'image_alt' => 'Cold caller qualifying motivated sellers for a real estate investor',
            'icon' => 'fa-phone-volume',
            'label' => 'For Wholesalers & Investors',
            'title' => 'Keep Your Pipeline Full Without Dialing All Day',
            'paragraphs' => [
                'Wholesaling is a numbers game: hundreds of dials turn into a handful of real conversations, and a few of those turn into contracts. Doing that yourself leaves no time for appointments, offers and dispositions.',
                'Our callers dial for you every day, use your scripts and objection handlers, and log every outcome so you can see exactly what your lists are producing. You stay focused on the sellers who are ready to talk.',
            ],
            'list' => [
                'Callers trained on motivated-seller conversations',
                'Works with your dialer, lists and CRM',
                'Daily dial, contact and lead reporting',
                'Part-time or full-time calling shifts',
            ],
        ],
        'cards' => [
            'label' => 'Lists We Call',
            'title' => 'Motivated Seller Lead Types We Work',
            'desc' => 'Tell us your buy box and we will prioritize the lists most likely to produce deals in your market.',
            'items' => [
                ['fa-user-check', 'Absentee Owners', 'Out-of-area owners who may be tired of managing a property from a distance.'],
                ['fa-building', 'Tired Landlords', 'Long-term rental owners dealing with vacancies, repairs or problem tenants.'],
                ['fa-gavel', 'Pre-Foreclosure', 'Owners facing notices of default who may need a fast, discreet solution.'],
                ['fa-balance-scale', 'Probate & Inherited', 'Heirs who inherited a property they do not want to keep or repair.'],
                ['fa-home', 'Vacant Properties', 'Vacant and distressed houses with code violations, tax liens or deferred maintenance.'],
                ['fa-sync-alt', 'Expired & FSBO Listings', 'Sellers whose listing expired or who tried to sell on their own and are open to a cash offer.'],
            ],
        ],
        'table' => [
            'label' => 'Qualification',
            'title' => 'How Our Callers Qualify Every Seller',
            'desc' => 'Every conversation is logged against the same criteria so your acquisitions team knows which leads to call first.',
            'head' => ['Criteria', 'What we ask about', 'Why it matters'],
            'rows' => [
                ['Condition', 'Repairs needed, age of roof and systems, occupancy', 'Sets your repair estimate and offer range'],
                ['Motivation', 'Reason for selling and how they feel about the property', 'Separates real sellers from curious owners'],
                ['Timeline', 'How soon they want or need to sell', 'Prioritizes follow-up and offer timing'],
                ['Price', 'What they hope to get and whether there is a mortgage', 'Shows whether a deal can work at your numbers'],
                ['Decision makers', 'Who else is on title or involved in the decision', 'Avoids surprises at contract time'],
            ],
        ],
        'process' => [
            'label' => 'How It Works',
            'title' => 'How We Launch Your Cold Calling Campaign',
            'steps' => [
                ['Strategy call', 'We review your market, buy box, lists, dialer and current scripts, and set daily dial and lead targets.'],
                ['Script & compliance setup', 'We refine your script and objection handlers, and confirm that your lists are scrubbed against the National Do Not Call Registry, applicable state lists and your internal DNC list.'],
                ['Free 2-day trial', 'Your caller starts dialing your lists so you can listen to calls and review lead quality before committing.'],
                ['Daily calling & lead hand-off', 'Qualified leads are logged in your CRM (REsimpli, Podio, InvestorFuse or similar) and sent to your acquisitions team the same day.'],
                ['Reporting & optimization', 'You receive dials, contacts, conversations and leads per list so you can double down on what works.'],
            ],
        ],
        'why' => [
            'label' => 'Why Zingo Assist',
            'title' => 'Why Investors Choose Zingo Assist Callers',
            'items' => [
                ['Real estate focus', 'Our callers understand wholesaling terms, seller situations and investor buy boxes.'],
                ['Works with your stack', 'BatchDialer, Mojo, Readymode, CallTools and the CRM you already use.'],
                ['Compliance-minded calling', 'Calling windows, Do Not Call handling and opt-out requests are built into the workflow. See our <a href="' . route('rules.state', 'florida') . '#cold-calling-laws' . '">cold calling laws guide</a>.'],
                ['Transparent reporting', 'Know exactly how many dials, contacts and leads each list produced.'],
                ['Scales with your budget', 'Start with one part-time caller and add shifts as deals come in.'],
                ['Free 2-day trial', 'Hear real calls on your own lists before you commit.'],
            ],
        ],
        'faqs' => [
            ['What is wholesale real estate cold calling?', 'It is outbound calling to property owners on targeted lists to find motivated sellers who may sell off-market to an investor. Callers qualify the seller and pass warm leads to the investor or acquisitions manager.'],
            ['How many calls can a cold caller make per day?', 'It depends on the dialer. With a power or multi-line dialer a full-time caller can typically make several hundred dials per shift; with manual dialing it is much lower. We set targets with you based on your dialer and lists.'],
            ['Is cold calling for real estate investors legal?', 'Yes, when campaigns follow the federal TCPA, the National Do Not Call Registry, state laws such as Florida&#39;s Telephone Solicitation Act, calling-hour limits and opt-out requests. Our <a href="' . route('rules.state', 'florida') . '#cold-calling-laws' . '">Florida cold calling laws guide</a> explains the main rules. Speak with your attorney about your specific campaign.'],
            ['Do you provide the lists and dialer?', 'Most investors provide their own lists and dialer so they keep ownership of their data. We can advise on list types and work inside the tools you already pay for.'],
            ['How much do wholesale cold calling services cost?', 'Most providers charge hourly or per calling shift; offshore callers commonly range from about $8 to $15 per hour. Zingo Assist quotes after a free consultation based on hours and targets. See our <a href="' . route('blog.re_va_cost') . '">virtual assistant cost guide</a>.'],
            ['Can your callers also follow up with old leads?', 'Yes. Many clients use the same caller for follow-up on aged leads and past conversations, which often produces deals your team missed.'],
        ],
        'links' => [
            'title' => 'Related Services',
            'items' => [
                ['Real Estate Virtual Assistant', route('service.real_estate_virtual_assistant')],
                ['Cold Calling for Agents', route('service.cold_calling')],
                ['Lead Generation', route('service.lead_generation')],
                ['CRM Management', route('service.crm_management')],
                ['Transaction Coordinator', route('service.real_estate_transaction_coordinator')],
            ],
        ],
        'final' => [
            'title' => 'Start Your Wholesale Cold Calling Campaign',
            'text' => 'Send us your market, lists and dialer details and we will have a trained caller on your campaign, starting with a free 2-day trial.',
            'list' => ['More seller conversations', 'Qualified leads in your CRM', 'Daily performance reports', 'More time for offers and closings'],
        ],
    ];
@endphp
@extends('layout.main')

@section('title', 'Wholesale Real Estate Cold Calling | Zingo Assist')
@section('meta_description', 'Cold calling for real estate wholesalers and investors: trained callers find and qualify motivated sellers and log every lead in your CRM. Free trial.')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/service-page.css') }}">
@endpush

@push('schema')
    @include('partials.schema-page', [
        'type' => 'service',
        'name' => 'Wholesale Real Estate Cold Calling Services',
        'serviceType' => 'Real estate cold calling for investors and wholesalers',
        'description' => 'Trained cold callers who find and qualify motivated sellers for real estate wholesalers and investors.',
        'breadcrumbs' => [['Services', route('service')], ['Real Estate Cold Calling', route('service.cold_calling')]],
        'faqs' => array_map(fn ($f) => [$f[0], html_entity_decode(strip_tags($f[1]), ENT_QUOTES)], $page['faqs']),
    ])
@endpush

@section('content')
    @include('partials.landing', ['page' => $page])
@endsection
