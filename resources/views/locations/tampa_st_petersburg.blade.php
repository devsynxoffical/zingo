@php
    $page = [
        'h1' => ['Real Estate Virtual Assistants in', 'Tampa & St. Petersburg, FL'],
        'hero' => [
            'Zingo Assist is headquartered in St. Petersburg, Florida, and supports agents, teams, investors and property managers across Tampa Bay, from Pinellas and Hillsborough to Pasco, Manatee and Sarasota counties.',
            'Get a trained real estate virtual assistant who understands Florida transactions, Stellar MLS listings and Florida calling rules. Start with a free 2-day trial.',
        ],
        'answer' => 'Zingo Assist provides remote <strong>real estate virtual assistants to agents, teams, investors and property managers in Tampa, St. Petersburg, Clearwater and the wider Tampa Bay area</strong>. Our St. Petersburg-based team handles CRM and lead follow-up, listing coordination for Stellar MLS, Florida transaction paperwork, compliant cold calling and property management support, with a free 2-day trial.',
        'overview' => [
            'image' => 'assets/images/services/Real estate solution.jpg',
            'image_alt' => 'Florida real estate growth illustration for Tampa Bay agents',
            'icon' => 'fa-map-marker-alt',
            'label' => 'Local Team',
            'title' => 'A Tampa Bay Team for Tampa Bay Agents',
            'paragraphs' => [
                'Our office is at 7901 4th St N, St. Petersburg, FL 33702. Because we are based in the market, we understand how Tampa Bay real estate works: a high share of out-of-state buyers, seasonal demand, condo and waterfront transactions, flood-zone and insurance questions, and investors buying across Pinellas, Hillsborough and Pasco.',
                'Your assistant works remotely in Eastern Time during your business hours, so there is no lag between your day and theirs.',
            ],
            'list' => [
                'Eastern Time scheduling, no overnight hand-offs',
                'Familiar with Florida Realtors/Florida Bar contract workflows',
                'Experience with Stellar MLS listing input',
                'Calling campaigns planned around Florida telemarketing rules',
            ],
        ],
        'cards' => [
            'label' => 'Services in Tampa Bay',
            'title' => 'How We Support Tampa & St. Petersburg Real Estate Pros',
            'items' => [
                ['fa-user-tie', 'Real Estate Virtual Assistants', 'Dedicated assistants for CRM updates, inbox and calendar, listing prep and lead follow-up. <a href="' . route('service.real_estate_virtual_assistant') . '">Learn more</a>.'],
                ['fa-phone-volume', 'Compliant Cold Calling', 'Prospecting calls for agents and investors with Florida calling windows and Do Not Call handling built in. <a href="' . route('service.cold_calling') . '">Agent calling</a> or <a href="' . route('service.wholesale_cold_calling') . '">investor calling</a>.'],
                ['fa-file-signature', 'Transaction Coordination', 'Contract-to-close tracking for Florida deals: inspection and financing deadlines, condo and HOA documents, and title communication. <a href="' . route('service.real_estate_transaction_coordinator') . '">Learn more</a>.'],
                ['fa-building', 'Virtual Property Management', 'Tenant communication, rent reminders and maintenance coordination for long-term and seasonal rentals. <a href="' . route('service.virtual_property_management') . '">Learn more</a>.'],
                ['fa-chart-line', 'Real Estate SEO & Marketing', 'Rank for Tampa Bay neighborhood searches and turn traffic into leads. <a href="' . route('service.search_seo') . '">Real estate SEO</a>.'],
                ['fa-calculator', 'Bookkeeping', 'Commission tracking, expense categorization and monthly reports for agents and small brokerages. <a href="' . route('service.bookkeeping_accountant') . '">Learn more</a>.'],
            ],
        ],
        'table' => [
            'label' => 'Service Area',
            'title' => 'Areas We Serve Around Tampa Bay',
            'desc' => 'Our assistants work remotely, so we support agents anywhere in Florida and the US. These are the Tampa Bay communities we work with most.',
            'head' => ['County', 'Cities and communities'],
            'rows' => [
                ['Pinellas', 'St. Petersburg, Clearwater, Largo, Pinellas Park, Dunedin, Seminole, Tarpon Springs, St. Pete Beach'],
                ['Hillsborough', 'Tampa, Brandon, Riverview, Valrico, Plant City, Apollo Beach, Westchase'],
                ['Pasco', 'Wesley Chapel, New Port Richey, Land O&#39; Lakes, Zephyrhills'],
                ['Manatee & Sarasota', 'Bradenton, Lakewood Ranch, Sarasota, Venice'],
            ],
        ],
        'prose' => [
            'label' => 'Florida Know-How',
            'title' => 'Florida-Specific Details Our Assistants Handle',
            'html' => '<p>Florida transactions and marketing come with rules and paperwork that generic assistants miss. Our Tampa Bay assistants are trained to keep these on your checklist:</p>
<ul>
<li><strong>Calling rules:</strong> Florida limits commercial solicitation calls to 8 a.m. to 8 p.m. local time and to three calls per 24 hours on the same subject, and maintains its own state Do Not Call list in addition to the national registry. Read our <a href="' . route('rules.state', 'florida') . '#cold-calling-laws' . '">Florida cold calling laws guide</a>.</li>
<li><strong>Contract deadlines:</strong> inspection, financing, appraisal and closing dates on Florida Realtors/Florida Bar contracts are tracked in your CRM or transaction platform with reminders to every party.</li>
<li><strong>Condo and HOA documents:</strong> requesting association approvals, estoppel letters and condo documents early, which matters for Tampa Bay&#39;s large condo market.</li>
<li><strong>Insurance and flood questions:</strong> collecting flood-zone information, elevation certificates and insurance quotes buyers need before they commit.</li>
<li><strong>Seasonal demand:</strong> scheduling and follow-up that keeps up with the winter season and out-of-state buyers.</li>
</ul>
<p>Your assistant supports you; licensed activities such as negotiating or advising on contracts stay with you and your broker. See <a href="' . route('rules.state', 'florida') . '">what an unlicensed real estate assistant can do in Florida</a>.</p>',
        ],
        'faqs' => [
            ['Do you have real estate virtual assistants in Tampa?', 'Yes. Zingo Assist is based in St. Petersburg and provides remote real estate virtual assistants to agents, teams, investors and property managers throughout Tampa, St. Petersburg, Clearwater and the rest of Tampa Bay.'],
            ['Will my assistant work in Eastern Time?', 'Yes. We schedule your assistant around your Eastern Time business hours, and our support team is available 24/7.'],
            ['Can your assistants work in Stellar MLS?', 'Our assistants prepare listing input, photos and descriptions for Stellar MLS. MLS access rules vary, so we follow your MLS and brokerage policy on assistant access rather than sharing your personal login.'],
            ['Do you make cold calls to Florida homeowners?', 'Yes, for agents and investors. Campaigns are planned around the federal TCPA, the National Do Not Call Registry and Florida rules, including calling hours and the Florida Do Not Call list.'],
            ['How much does a real estate VA cost in Tampa Bay?', 'Pricing depends on hours and skills. Zingo Assist quotes after a free consultation; for market benchmarks, read our <a href="' . route('blog.re_va_cost') . '">real estate virtual assistant cost guide</a>.'],
            ['Can I meet the team in St. Petersburg?', 'Contact us to arrange a call or meeting with our team. Most clients work with us entirely remotely.'],
        ],
        'links' => [
            'title' => 'Popular Services for Tampa Bay Clients',
            'items' => [
                ['Real Estate Virtual Assistant', route('service.real_estate_virtual_assistant')],
                ['Real Estate ISA Services', route('service.real_estate_isa')],
                ['Real Estate Cold Calling', route('service.cold_calling')],
                ['Wholesale Cold Calling', route('service.wholesale_cold_calling')],
                ['Transaction Coordinator', route('service.real_estate_transaction_coordinator')],
                ['Virtual Property Management', route('service.virtual_property_management')],
                ['Contact Us', route('contact')],
            ],
        ],
        'final' => [
            'title' => 'Hire a Tampa Bay Real Estate Virtual Assistant',
            'text' => 'Talk to our St. Petersburg team about the tasks slowing you down. Your assistant can start with a free 2-day trial.',
            'list' => ['Eastern Time support', 'Florida transaction know-how', 'Compliant prospecting', 'Free 2-day trial'],
        ],
    ];
@endphp
@extends('layout.main')

@section('title', 'Real Estate Virtual Assistant Tampa & St. Petersburg, FL')
@section('meta_description', 'St. Petersburg-based Zingo Assist provides real estate virtual assistants for Tampa Bay agents, investors and property managers. Free 2-day trial.')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/service-page.css') }}">
@endpush

@push('schema')
    @include('partials.schema-page', [
        'type' => 'service',
        'name' => 'Real Estate Virtual Assistants in Tampa & St. Petersburg, FL',
        'serviceType' => 'Real estate virtual assistant',
        'description' => 'Remote real estate virtual assistants for agents, investors and property managers in Tampa, St. Petersburg, Clearwater and the Tampa Bay area.',
        'breadcrumbs' => [['Services', route('service')], ['Real Estate Virtual Assistant', route('service.real_estate_virtual_assistant')]],
        'areaServed' => [
            ['@type' => 'City', 'name' => 'Tampa', 'containedInPlace' => ['@type' => 'State', 'name' => 'Florida']],
            ['@type' => 'City', 'name' => 'St. Petersburg', 'containedInPlace' => ['@type' => 'State', 'name' => 'Florida']],
            ['@type' => 'City', 'name' => 'Clearwater', 'containedInPlace' => ['@type' => 'State', 'name' => 'Florida']],
            ['@type' => 'AdministrativeArea', 'name' => 'Tampa Bay Area, Florida'],
        ],
        'faqs' => array_map(fn ($f) => [$f[0], html_entity_decode(strip_tags($f[1]), ENT_QUOTES)], $page['faqs']),
    ])
@endpush

@section('content')
    @include('partials.landing', ['page' => $page])
@endsection
