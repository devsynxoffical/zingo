@php
    $page = [
        'updated' => 'November 2026',
        'form_service' => 'Real Estate Virtual Assistant',
        'eyebrow' => 'For investors and wholesalers',
        'h1' => ['Virtual Assistants for', 'Real Estate Investors'],
        'hero' => [
            'Trained virtual assistants who run the back office of your investing business: lead lists and skip tracing, CRM follow-up, comps for your acquisitions team, dispositions marketing, closing paperwork and rental admin.',
        ],
        'hero_points' => ['Free 2-day trial', 'Works in REsimpli, Podio and more', 'Part-time or full-time'],
        'cta' => 'Get an Investor VA',
        'form_title' => 'Get a real estate investor VA',
        'answer' => 'A <strong>virtual assistant for real estate investors</strong> handles the repeatable work behind every deal: building and cleaning seller lists, coordinating skip tracing, logging and following up leads in your CRM, pulling comps for your review, marketing deals to your buyers list, and tracking each property through title and closing. You and your acquisitions team keep the negotiations and decisions.',
        'overview' => [
            'image' => 'assets/images/services/Real estate solution.jpg',
            'image_alt' => 'Virtual assistant managing a real estate investor CRM and deal pipeline',
            'badge' => 'Lead to closing',
            'label' => 'Why investors hire a VA',
            'title' => 'Spend Your Time on Deals, Not Data Entry',
            'paragraphs' => [
                'Most investors lose deals in the gaps: a lead that never got a second call, a list that was never cleaned, a buyer who never saw the property. Those gaps are admin problems, and admin is what a virtual assistant fixes.',
                'Your assistant follows your process every day, logs everything in your CRM and reports on the numbers that matter: leads worked, appointments set, offers out and deals closed.',
            ],
            'list' => [
                'Every lead logged and followed up',
                'Comps and property data ready before the call',
                'Buyers list kept current and marketed',
                'Closings tracked to the finish line',
            ],
        ],
        'cards' => [
            'label' => 'Tasks covered',
            'title' => 'What a Real Estate Investor VA Handles',
            'desc' => 'Start with the tasks that slow you down most, then add more as your volume grows.',
            'items' => [
                ['fa-list-ul', 'Lead lists and skip tracing', 'Pull absentee, vacant, pre-foreclosure and probate lists, coordinate skip tracing and remove duplicates and Do Not Call numbers.'],
                ['fa-address-book', 'CRM and follow-up', 'Log every lead in REsimpli, Podio or your CRM, set follow-up tasks and keep stages and tags clean.'],
                ['fa-phone-volume', 'Seller calls and texts', 'Prospecting calls and follow-up through our <a href="' . route('service.wholesale_cold_calling') . '">wholesale cold calling</a> team, following calling-hour and Do Not Call rules.'],
                ['fa-search-dollar', 'Comps and underwriting prep', 'Pull comparable sales, rental estimates and property details so your acquisitions team can price offers faster.'],
                ['fa-bullhorn', 'Dispositions', 'Maintain your buyers list, write deal flyers for your approval and send new deals to buyers by email and text.'],
                ['fa-file-signature', 'Closing and rental admin', 'Track contracts with title and escrow, collect documents, and handle tenant and maintenance admin on rentals you keep.'],
            ],
        ],
        'extras' => [
            'pricing' => [
                'label' => 'Pricing',
                'title' => 'Real Estate Investor VA Pricing',
                'desc' => 'What a virtual assistant for real estate investors typically costs per hour and per month in 2026.',
                'plans' => [
                    ['Part-time VA', '$8 – $15 / hr', '≈ $640 – $1,200 / month (80 hrs)', 'Lists, CRM follow-up and comps for a solo investor.'],
                    ['Full-time VA', '$8 – $15 / hr', '≈ $1,300 – $2,400 / month (160 hrs)', 'One dedicated assistant across leads, dispositions and closings.', 'Most common'],
                    ['US-based VA', '$25 – $45 / hr', '≈ $4,000 – $7,200 / month (160 hrs)', 'Native US assistant for seller and buyer communication.'],
                ],
                'note' => 'Typical US market ranges in 2026, not a Zingo Assist price list. Budget separately for data, skip tracing and dialer seats. We quote after a free consultation; see the <a href="' . route('blog.re_va_cost') . '">real estate VA cost guide</a>.',
            ],
            'tools' => [
                'label' => 'Tools',
                'title' => 'Investor Tools We Work In',
                'items' => [
                    ['REsimpli', 'Leads, follow-up tasks and deal pipeline'],
                    ['Podio', 'Custom investor CRM workspaces'],
                    ['InvestorFuse', 'Lead follow-up and automations'],
                    ['PropStream', 'Lists, property data and comps'],
                    ['BatchLeads / BatchDialer', 'Lists, skip tracing and dialing'],
                    ['Google Workspace', 'Shared inbox, calendars and deal folders'],
                ],
            ],
        ],
        'faqs' => [
            ['What does a virtual assistant for real estate investors do?', 'An investor VA builds and cleans seller lists, coordinates skip tracing, logs and follows up leads in your CRM, pulls comps for your review, markets deals to your buyers list and tracks closings with title and escrow. You keep negotiations and buying decisions.'],
            ['How much does a real estate investor virtual assistant cost?', 'A managed offshore investor VA typically costs about $8 to $15 per hour, roughly $1,300 to $2,400 a month full-time, and a US-based assistant about $25 to $45 per hour. These are 2026 market ranges, not a Zingo Assist price list.'],
            ['Can my VA make cold calls to sellers?', 'Yes, as part of our wholesale cold calling service, following federal and state calling rules such as calling hours and Do Not Call lists. Rules for real estate licensees and their assistants differ by state; see <a href="' . route('rules.hub') . '">real estate assistant rules by state</a>.'],
            ['Which investor software do your assistants use?', 'Our assistants work in the tools you already use, including REsimpli, Podio, InvestorFuse, PropStream and BatchLeads, with role-based access instead of shared logins.'],
            ['How fast can an investor VA start?', 'Most clients start within 24 to 48 hours of being matched, beginning with a free 2-day trial.'],
        ],
        'links' => [
            'title' => 'Related Services',
            'items' => [
                ['Wholesale Cold Calling', route('service.wholesale_cold_calling')],
                ['Virtual Transaction Coordinator', route('service.real_estate_transaction_coordinator')],
                ['Property Management VA', route('service.virtual_property_management')],
                ['VA ROI Calculator', route('tool.va_roi_calculator')],
                ['Assistant Rules by State', route('rules.hub')],
            ],
        ],
        'final' => [
            'title' => 'Run More Deals With the Same Team',
            'text' => 'Tell us your markets, lead sources and tools. We will set up a trained investor VA, starting with a free 2-day trial.',
            'list' => ['Every lead followed up', 'Comps ready before calls', 'Buyers list marketed', 'Closings tracked'],
        ],
    ];
@endphp
@extends('layout.main')

@section('title', 'Virtual Assistant for Real Estate Investors | Zingo Assist')
@section('meta_description', 'Virtual assistants for real estate investors and wholesalers: lead lists, skip tracing, CRM follow-up, comps, dispositions and closings. Free 2-day trial.')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/service-page.css') }}">
@endpush

@push('schema')
    @include('partials.schema-page', [
        'type' => 'service',
        'name' => 'Virtual Assistants for Real Estate Investors',
        'serviceType' => 'Real estate investor virtual assistant',
        'description' => 'Virtual assistants for real estate investors and wholesalers: lead lists, skip tracing, CRM follow-up, comps, dispositions, closings and rental admin.',
        'breadcrumbs' => [['Services', route('service')], ['Real Estate Virtual Assistant', route('service.real_estate_virtual_assistant')]],
        'faqs' => array_map(fn ($f) => [$f[0], html_entity_decode(strip_tags($f[1]), ENT_QUOTES)], $page['faqs']),
    ])
@endpush

@section('content')
    @include('partials.landing', ['page' => $page])
@endsection
