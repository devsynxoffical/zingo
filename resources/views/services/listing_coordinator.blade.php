@php
    $page = [
        'form_service' => 'Listing Coordinator',
        'eyebrow' => 'For listing agents & teams',
        'h1' => ['Listing Coordinator', 'Virtual Assistant'],
        'hero' => [
            'A virtual listing coordinator who handles everything between the signed listing agreement and an accepted offer: MLS input, photos and signage, listing copy, showing feedback and seller updates. You win the listing; we keep it moving.',
        ],
        'hero_points' => ['Free 2-day trial', 'MLS-ready listing packets', 'Weekly seller reports'],
        'cta' => 'Get a Listing Coordinator',
        'form_title' => 'Get a listing coordinator',
        'answer' => 'A <strong>listing coordinator</strong> manages the tasks that get a property on the market and keep it there: collecting seller documents and disclosures, preparing MLS input, scheduling photos and signage, writing listing descriptions for agent approval, tracking showings and feedback, and sending sellers regular updates. A <strong>virtual listing coordinator</strong> does this remotely under the listing agent&#39;s supervision, and hands the file to a transaction coordinator once an offer is accepted.',
        'overview' => [
            'image' => 'assets/images/services/crmm.jpg',
            'image_alt' => 'Zingo Assist team coordinating real estate listings',
            'badge' => 'Pre-listing to under contract',
            'label' => 'Why it matters',
            'title' => 'Listings Slip When the Agent Is the Coordinator',
            'paragraphs' => [
                'Every new listing comes with dozens of small tasks: disclosures, photo shoots, lockbox and sign orders, MLS fields, syndication checks, showing instructions, feedback requests and seller updates. When the listing agent does all of it, prospecting stops and sellers feel ignored.',
                'A virtual listing coordinator runs a repeatable checklist for every listing, so nothing is missed and you can spend your time winning the next one.',
            ],
            'list' => [
                'Same checklist for every listing',
                'Listing copy and flyers drafted for your approval',
                'Showing feedback collected and summarized',
                'Sellers updated every week without you chasing it',
            ],
        ],
        'tabs' => [
            'label' => 'How it works',
            'title' => 'What Your Listing Coordinator Handles at Each Stage',
            'desc' => 'Click a stage to see the tasks your coordinator takes off your plate.',
            'items' => [
                ['fa-file-signature', 'Pre-listing', '<h3>Before the listing goes live</h3><ul><li>Open the listing file and checklist in your CRM or transaction platform</li><li>Collect seller documents, disclosures and HOA or condo information</li><li>Schedule photography, video, floor plans and staging appointments</li><li>Order signs, lockbox and print materials</li><li>Pull comparable-sales data for your CMA</li></ul>', 'assets/images/services/arooba.png'],
                ['fa-upload', 'Go live', '<h3>Launch day</h3><ul><li>Prepare and enter MLS data, photos and showing instructions for your review</li><li>Write the listing description and feature sheet for your approval</li><li>Check syndication to major portals and fix errors</li><li>Create just-listed social posts, email blast and flyer</li><li>Set up showing service and lockbox access rules</li></ul>', 'assets/images/services/virtual_assistant.jpg'],
                ['fa-chart-line', 'Active listing', '<h3>While the home is on the market</h3><ul><li>Confirm showings and request feedback from buyer agents</li><li>Send the seller a weekly activity report: showings, feedback and views</li><li>Update MLS for price changes, status changes and open houses</li><li>Schedule open houses and order open-house materials</li><li>Track days on market and flag listings that need a strategy review</li></ul>', 'assets/images/services/Osama.png'],
                ['fa-handshake', 'Under contract', '<h3>Hand-off to closing</h3><ul><li>Update MLS status and notify your team</li><li>Package documents for the transaction coordinator</li><li>Order the sold sign and just-sold marketing</li><li>Request a review from the seller after closing</li></ul><p>Need contract-to-close support too? See our <a href="' . route('service.real_estate_transaction_coordinator') . '">transaction coordinator services</a>.</p>', 'assets/images/services/tooba.png'],
            ],
        ],
        'cards' => [
            'label' => 'Benefits',
            'title' => 'Why Agents Use a Virtual Listing Coordinator',
            'items' => [
                ['fa-clock', 'Hours back every week', 'Listing admin moves off your calendar so you can prospect, list and negotiate.'],
                ['fa-check-double', 'Fewer listing errors', 'A checklist for every listing catches missing disclosures, wrong MLS fields and broken photo links.'],
                ['fa-smile', 'Happier sellers', 'Weekly reports and fast replies are what sellers remember and refer.'],
                ['fa-layer-group', 'Consistent marketing', 'Every listing gets the same professional launch: copy, photos, social and email.'],
                ['fa-expand-arrows-alt', 'Room to scale', 'Take on more listings without hiring an in-house assistant.'],
                ['fa-dollar-sign', 'Flexible cost', 'Pay for the hours you need. See our <a href="' . route('blog.re_va_cost') . '">real estate VA cost guide</a>.'],
            ],
        ],
        'table' => [
            'label' => 'Compare roles',
            'title' => 'Listing Coordinator vs Transaction Coordinator',
            'head' => ['', 'Listing coordinator', 'Transaction coordinator'],
            'rows' => [
                ['When', 'Listing agreement → accepted offer', 'Accepted offer → closing'],
                ['Main focus', 'Marketing, MLS, showings, seller updates', 'Deadlines, documents, lender and title communication'],
                ['Works for', 'Listing agents', 'Listing and buyer agents'],
                ['Typical output', 'Live listing, weekly seller reports', 'A clean closed file'],
            ],
            'note' => 'Many teams use one Zingo Assist assistant for both roles. Read <a href="' . route('blog.tc_vs_va') . '">transaction coordinator vs virtual assistant</a>.',
        ],
        'faqs' => [
            ['What does a real estate listing coordinator do?', 'A listing coordinator manages listing tasks from signed agreement to accepted offer: collecting seller documents, preparing MLS input, scheduling photos and signage, drafting listing copy for agent approval, collecting showing feedback and sending sellers regular updates.'],
            ['Can a virtual assistant be a listing coordinator?', 'Yes. Nearly all listing-coordination work is administrative and can be done remotely. The licensed agent approves listing content and handles advice, pricing and negotiation.'],
            ['Can an unlicensed listing coordinator enter MLS listings?', 'In Florida, the FREC list of permitted activities allows unlicensed assistants to fill out and submit listings and changes to the MLS, under the licensee&#39;s supervision. MLS rules on assistant logins vary, so follow your MLS policy. See <a href="' . route('blog.unlicensed_assistant_florida') . '">what an unlicensed real estate assistant can do in Florida</a>.'],
            ['How is a listing coordinator paid?', 'Listing coordinators are commonly paid per listing, hourly or on a monthly plan. Zingo Assist works hourly or monthly, so one assistant can coordinate all of your listings.'],
            ['What is the difference between a listing coordinator and a transaction coordinator?', 'A listing coordinator handles the period before an accepted offer (marketing, MLS, showings, seller updates). A transaction coordinator handles contract-to-close deadlines and paperwork.'],
        ],
        'links' => [
            'title' => 'Related Services',
            'items' => [
                ['Real Estate Virtual Assistant', route('service.real_estate_virtual_assistant')],
                ['Transaction Coordinator', route('service.real_estate_transaction_coordinator')],
                ['Real Estate ISA Services', route('service.real_estate_isa')],
                ['VA ROI Calculator', route('tool.va_roi_calculator')],
            ],
        ],
        'final' => [
            'title' => 'Put Your Listings on Autopilot',
            'text' => 'Tell us how many listings you carry and which tools you use. We will set up a trained listing coordinator, starting with a free 2-day trial.',
            'list' => ['MLS-ready packets', 'Weekly seller reports', 'Consistent launches', 'Free 2-day trial'],
        ],
    ];
@endphp
@extends('layout.main')

@section('title', 'Listing Coordinator Virtual Assistant | Zingo Assist')
@section('meta_description', 'Hire a virtual listing coordinator: MLS input, photos and signage, listing copy, showing feedback and weekly seller updates for real estate agents. Free trial.')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/service-page.css') }}">
@endpush

@push('schema')
    @include('partials.schema-page', [
        'type' => 'service',
        'name' => 'Listing Coordinator Virtual Assistant',
        'serviceType' => 'Real estate listing coordination',
        'description' => 'Virtual listing coordinators for real estate agents: MLS input, photos and signage, listing copy, showing feedback and weekly seller updates.',
        'breadcrumbs' => [['Services', route('service')], ['Real Estate Virtual Assistant', route('service.real_estate_virtual_assistant')]],
        'faqs' => array_map(fn ($f) => [$f[0], html_entity_decode(strip_tags($f[1]), ENT_QUOTES)], $page['faqs']),
    ])
@endpush

@section('content')
    @include('partials.landing', ['page' => $page])
@endsection
