@php
    $page = [
        'form_service' => 'Expired & FSBO Calling',
        'eyebrow' => 'Listing leads for agents',
        'h1' => ['Expired & FSBO', 'Cold Calling Services'],
        'hero' => [
            'Trained callers who work your expired, withdrawn and for-sale-by-owner lists every day, have real conversations with sellers and book listing appointments straight into your calendar. You show up to the appointment; we make the calls.',
        ],
        'hero_points' => ['Free 2-day trial', 'Your scripts & dialer', 'DNC-aware calling'],
        'cta' => 'Book More Listing Appointments',
        'form_title' => 'Start calling expireds this week',
        'form_button' => 'Get My Free Trial',
        'answer' => '<strong>Expired and FSBO cold calling</strong> is outbound prospecting to homeowners whose listing expired or was withdrawn, or who are trying to sell without an agent. A caller checks motivation and timeline, handles common objections with an approved script, and books a listing appointment for the agent. Zingo Assist provides trained callers who work your lists inside your dialer and CRM, follow Do Not Call and calling-hour rules, and start with a free 2-day trial.',
        'overview' => [
            'image' => 'assets/images/services/cold_calling.jpg',
            'image_alt' => 'Caller booking listing appointments with expired and FSBO sellers',
            'badge' => 'Appointments in your calendar',
            'label' => 'The opportunity',
            'title' => 'Expireds and FSBOs Are Listings Waiting for the Right Call',
            'paragraphs' => [
                'Expired and FSBO sellers already want to sell. The agent who reaches them first, and follows up consistently, usually wins the appointment. The hard part is making those calls every single morning while also running appointments and closings.',
                'Our callers do the dialing, the first conversation and the follow-up schedule, and log every result in your CRM. You get qualified appointments and a clear view of what each list produces.',
            ],
            'list' => [
                'Daily calling blocks on fresh expired and FSBO lists',
                'Follow-up cadence so no seller falls through the cracks',
                'Appointments booked straight into your calendar',
                'Every call outcome logged in your CRM',
            ],
        ],
        'tabs' => [
            'label' => 'Lead types',
            'title' => 'How We Call Each Lead Type',
            'desc' => 'Each list needs a different conversation. Pick one to see how we approach it.',
            'items' => [
                ['fa-history', 'Expired listings', '<h3>Expired and withdrawn listings</h3><p>Sellers whose listing just expired often feel frustrated and are being called by several agents. We call early, keep it short and focus on what went wrong and what they want now.</p><ul><li>Confirm whether they still want to sell, and their timeline</li><li>Ask what they think kept the home from selling</li><li>Offer a short meeting to review a new plan, and book it</li><li>Schedule follow-up for "not now" sellers</li></ul>', 'assets/images/services/shaheer.png'],
                ['fa-sign', 'FSBO sellers', '<h3>For sale by owner</h3><p>FSBO sellers want to save commission, so the conversation is about helping them, not pushing them.</p><ul><li>Ask how the sale is going and what kind of buyer activity they have seen</li><li>Offer useful help (pricing data, marketing tips) to earn a meeting</li><li>Book a no-obligation consultation when they are open to it</li><li>Keep a polite follow-up schedule over the following weeks</li></ul><p>In Florida, licensed agents responding to a seller&#39;s own sign or advertisement fall under a narrow Do Not Call exception; general cold calls do not. See our <a href="' . route('blog.florida_cold_calling_laws') . '">Florida cold calling laws guide</a>.</p>', 'assets/images/services/tooba.png'],
                ['fa-redo', 'Follow-up', '<h3>Follow-up and nurture</h3><p>Most listing appointments come from follow-up, not the first call. We run a follow-up schedule for every seller who says "not yet":</p><ul><li>Call-back reminders set in your CRM</li><li>Notes on motivation, timeline and objections for every contact</li><li>Hand-off to your nurture emails or texts where you have consent</li></ul>', 'assets/images/services/virtual_assistant.jpg'],
                ['fa-shield-alt', 'Compliance', '<h3>Compliance built in</h3><ul><li>Calls only to lists scrubbed against the National and state Do Not Call lists and your internal DNC list</li><li>Calling windows set to the recipient&#39;s local time (8 a.m.–8 p.m. for Florida numbers)</li><li>Callers identify themselves and your business at the start of the call</li><li>Every opt-out logged immediately</li></ul><p>This is not legal advice; confirm your campaign with your broker or attorney.</p>', 'assets/images/services/Osama.png'],
            ],
        ],
        'cards' => [
            'label' => 'What you get',
            'title' => 'Everything Needed to Turn Lists Into Listings',
            'items' => [
                ['fa-phone-volume', 'Dedicated callers', 'Trained callers assigned to your account, working in your time zone.'],
                ['fa-scroll', 'Script refinement', 'We start with your scripts and refine opening lines and objection handlers based on real call results.'],
                ['fa-calendar-check', 'Appointment setting', 'Qualified appointments booked into your calendar with seller notes attached.'],
                ['fa-database', 'CRM updates', 'Every dial, contact and outcome logged in Follow Up Boss, kvCORE, Lofty or your CRM.'],
                ['fa-chart-bar', 'Weekly reporting', 'Dials, conversations, appointments and results by list, every week.'],
                ['fa-user-check', 'Free 2-day trial', 'Hear real calls on your own lists before you commit.'],
            ],
        ],
        'process' => [
            'label' => 'Getting started',
            'title' => 'Launch Your Calling Campaign in a Few Days',
            'steps' => [
                ['Strategy call', 'We review your market, list sources (MLS expireds, FSBO data providers), dialer and appointment goals.'],
                ['Scripts and compliance check', 'We agree scripts and objection handlers, confirm DNC scrubbing and set calling windows.'],
                ['Free 2-day trial', 'Your caller starts on your live lists so you can listen to calls and judge quality.'],
                ['Daily calling and follow-up', 'Fresh lists every morning, follow-up on everyone who said "not yet".'],
                ['Weekly review', 'We compare results by list and adjust scripts and priorities.'],
            ],
        ],
        'faqs' => [
            ['Do you provide expired and FSBO leads?', 'Most agents use their own MLS expireds and a FSBO data provider so they keep ownership of the data. We work inside the lists and dialer you already use and can advise on list sources.'],
            ['Is it legal to cold call expired listings and FSBOs?', 'Yes, when you follow the TCPA, the National Do Not Call Registry, state rules such as Florida&#39;s calling-hour and call-frequency limits, and opt-out requests. Our <a href="' . route('blog.florida_cold_calling_laws') . '">Florida cold calling laws guide</a> explains the main rules; confirm your campaign with your broker or attorney.'],
            ['Can an unlicensed assistant call expired and FSBO sellers?', 'Assistants can make scripted calls to set appointments for the licensed agent, but should not give opinions on value, discuss terms or negotiate. See <a href="' . route('blog.unlicensed_assistant_florida') . '">what an unlicensed real estate assistant can do in Florida</a>.'],
            ['How is this different from your general cold calling service?', 'This service focuses only on listing leads (expired, withdrawn and FSBO sellers) for agents. Our <a href="' . route('service.cold_calling') . '">real estate cold calling services</a> cover broader prospecting, and investors should see <a href="' . route('service.wholesale_cold_calling') . '">wholesale cold calling</a>.'],
            ['How much does expired and FSBO calling cost?', 'Pricing depends on calling hours and targets. We quote after a free consultation; see our <a href="' . route('blog.re_va_cost') . '">real estate VA cost guide</a> or estimate your return with the <a href="' . route('tool.va_roi_calculator') . '">ROI calculator</a>.'],
        ],
        'links' => [
            'title' => 'Related Services',
            'items' => [
                ['Real Estate Cold Calling', route('service.cold_calling')],
                ['Real Estate ISA Services', route('service.real_estate_isa')],
                ['Listing Coordinator VA', route('service.listing_coordinator')],
                ['VA ROI Calculator', route('tool.va_roi_calculator')],
            ],
        ],
        'final' => [
            'title' => 'Let Us Make the Calls. You Take the Appointments.',
            'text' => 'Send us your market and list sources. We will set up a trained caller on your expired and FSBO lists, starting with a free 2-day trial.',
            'list' => ['Daily calling blocks', 'Appointments in your calendar', 'DNC-aware calling', 'Weekly results by list'],
        ],
    ];
@endphp
@extends('layout.main')

@section('title', 'Expired & FSBO Cold Calling Services for Agents | Zingo Assist')
@section('meta_description', 'Expired listing and FSBO cold calling for real estate agents: trained callers work your lists, follow up and book listing appointments. DNC-aware. Free trial.')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/service-page.css') }}">
@endpush

@push('schema')
    @include('partials.schema-page', [
        'type' => 'service',
        'name' => 'Expired & FSBO Cold Calling Services',
        'serviceType' => 'Expired listing and FSBO prospecting calls',
        'description' => 'Callers who work expired, withdrawn and FSBO lists for real estate agents and book listing appointments.',
        'breadcrumbs' => [['Services', route('service')], ['Real Estate Cold Calling', route('service.cold_calling')]],
        'faqs' => array_map(fn ($f) => [$f[0], html_entity_decode(strip_tags($f[1]), ENT_QUOTES)], $page['faqs']),
    ])
@endpush

@section('content')
    @include('partials.landing', ['page' => $page])
@endsection
