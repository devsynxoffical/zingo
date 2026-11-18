@php
    $page = [
        'h1' => ['Real Estate', 'ISA Services'],
        'hero' => [
            'Outsourced real estate inside sales agents (ISAs) who call your new leads fast, qualify buyers and sellers, nurture your database and book appointments straight into your calendar, so your agents spend their time in front of clients instead of on the phone.',
            'Zingo Assist ISAs work your CRM, your scripts and your lead sources. Start with a free 2-day trial.',
        ],
        'answer' => 'A <strong>real estate ISA (inside sales agent)</strong> is a phone-based specialist who converts leads into appointments for agents. The ISA calls new online leads quickly, qualifies their timeline, motivation and financing, follows up with older leads on a schedule, and books qualified buyers and sellers with an agent. An <strong>outsourced ISA service</strong> provides a trained remote ISA so a team does not need to recruit, train and manage one in-house.',
        'overview' => [
            'icon' => 'fa-headset',
            'label' => 'Inside Sales',
            'title' => 'Why Real Estate Teams Use an ISA',
            'paragraphs' => [
                'Most teams buy more leads than their agents can work. New inquiries wait hours for a call, older leads are never contacted again, and the CRM fills with contacts nobody owns. An ISA fixes the gap between lead and appointment by doing one job consistently: calling, qualifying and booking.',
                'Separating prospecting from selling lets agents focus on consultations, showings and negotiations, while the ISA keeps every lead moving and every call logged.',
            ],
            'list' => [
                'Speed-to-lead calls on new inquiries during your business hours',
                'Long-term nurture calls on older leads',
                'Qualified appointments booked into agents&#39; calendars',
                'Every call outcome logged in your CRM',
            ],
        ],
        'cards' => [
            'label' => 'What Our ISAs Do',
            'title' => 'Real Estate ISA Services',
            'desc' => 'Use one service or combine them into a full ISA role.',
            'items' => [
                ['fa-bolt', 'New Lead Response', 'Call and text new leads from your website, Zillow, Realtor.com, Facebook and Google ads as soon as they arrive, while interest is highest.'],
                ['fa-filter', 'Buyer & Seller Qualification', 'Ask about timeline, motivation, price range, financing and whether they are working with another agent, using your qualification script.'],
                ['fa-calendar-check', 'Appointment Setting', 'Book buyer consultations, listing appointments and showings directly into the right agent&#39;s calendar, with confirmations and reminders.'],
                ['fa-sync-alt', 'Database Nurture', 'Work aged leads and past inquiries on a call schedule so long-term prospects come back to you, not a competitor.'],
                ['fa-phone-volume', 'Expired, FSBO & Circle Prospecting', 'Outbound prospecting campaigns for listing leads. See our <a href="' . route('service.cold_calling') . '">real estate cold calling services</a>.'],
                ['fa-address-book', 'CRM Hygiene & Reporting', 'Tag, stage and note every contact in Follow Up Boss, kvCORE, Lofty or your CRM, and report weekly on calls, contacts and appointments.'],
            ],
        ],
        'table' => [
            'label' => 'Compare Options',
            'title' => 'Outsourced ISA vs In-House ISA vs General VA',
            'desc' => 'An outsourced ISA is usually the fastest way to add inside sales capacity without hiring.',
            'head' => ['', 'Outsourced ISA (Zingo Assist)', 'In-house ISA', 'General real estate VA'],
            'rows' => [
                ['Main job', 'Calling, qualifying and booking appointments', 'Calling, qualifying and booking appointments', 'Admin, CRM, listings, marketing and some calling'],
                ['Hiring & training', 'Handled by the provider', 'You recruit, train and manage', 'Handled by the provider'],
                ['Cost structure', 'Hourly or monthly plan', 'Salary, commission or bonus, plus payroll costs', 'Hourly or monthly plan'],
                ['Coverage if someone leaves', 'Provider replaces the ISA', 'Pipeline stalls while you rehire', 'Provider replaces the VA'],
                ['Best for', 'Teams buying online leads that need consistent follow-up', 'Large teams that want an on-site, commission-driven ISA', 'Agents whose bottleneck is admin rather than calling'],
            ],
            'note' => 'Not sure which fits? Read <a href="' . route('blog.tc_vs_va') . '">transaction coordinator vs virtual assistant</a> or our <a href="' . route('blog.re_va_cost') . '">real estate VA cost guide</a>.',
        ],
        'prose' => [
            'label' => 'Measuring Results',
            'title' => 'ISA Metrics We Report On',
            'html' => '<p>Appointment counts alone can hide problems, so we report on the full funnel and review it with you regularly:</p>
<ul>
<li><strong>Speed to lead:</strong> time from inquiry to first call attempt.</li>
<li><strong>Contact rate:</strong> share of leads the ISA actually speaks with.</li>
<li><strong>Appointment set rate:</strong> conversations that turn into booked appointments.</li>
<li><strong>Show rate:</strong> booked appointments that actually happen, which depends on confirmations and a clean hand-off to the agent.</li>
<li><strong>Appointment-to-client conversion:</strong> tracked together with your agents, because the ISA&#39;s job is to create appointments your agents can convert.</li>
</ul>
<h3>Compliance</h3>
<p>ISA calls are planned around the federal TCPA, the National Do Not Call Registry and state rules, and campaigns follow your consent records and opt-out requests. ISAs book appointments and share approved information; licensed activities such as negotiating or advising on contracts stay with your agents. Florida teams can read our guides to <a href="' . route('blog.florida_cold_calling_laws') . '">Florida cold calling laws</a> and <a href="' . route('blog.unlicensed_assistant_florida') . '">what an unlicensed real estate assistant can do in Florida</a>.</p>',
        ],
        'process' => [
            'label' => 'How It Works',
            'title' => 'How We Launch Your ISA',
            'steps' => [
                ['Discovery call', 'We review your lead sources, CRM, current follow-up plan, agent calendars and appointment goals.'],
                ['Scripts & lead routing', 'We adapt your scripts and qualification questions, and agree which agent gets which appointments and how hand-offs work.'],
                ['Free 2-day trial', 'Your ISA starts calling real leads so you can listen to calls and review appointment quality.'],
                ['Daily calling & CRM updates', 'Your ISA works new and aged leads every day and logs every outcome in your CRM.'],
                ['Weekly review', 'We review the funnel metrics with you and adjust scripts, schedules and lead priorities.'],
            ],
        ],
        'faqs' => [
            ['What does a real estate ISA do?', 'A real estate ISA (inside sales agent) calls and texts leads, qualifies buyers and sellers on timeline, motivation and financing, nurtures older leads, and books appointments for agents. ISAs focus on converting leads into appointments rather than on showing property or negotiating.'],
            ['Does a real estate ISA need a license?', 'It depends on the state and on what the ISA does. Setting appointments and sharing approved information usually does not require a license, but discussing terms, advising on value or showing property does. Check your state rules and brokerage policy; Florida teams can read our <a href="' . route('blog.unlicensed_assistant_florida') . '">Florida unlicensed assistant guide</a>.'],
            ['How much does an outsourced real estate ISA cost?', 'Outsourced ISAs are usually billed hourly or monthly, while in-house ISAs are often paid a base salary plus commission or bonuses. Zingo Assist quotes after a free consultation; see our <a href="' . route('blog.re_va_cost') . '">real estate virtual assistant cost guide</a> for market ranges.'],
            ['What is the difference between an ISA and a real estate virtual assistant?', 'An ISA specializes in phone-based lead conversion and appointment setting. A real estate virtual assistant covers broader admin, CRM, listing and marketing work and may make some calls. Many teams start with one <a href="' . route('service.real_estate_virtual_assistant') . '">real estate VA</a> and add a dedicated ISA as lead volume grows.'],
            ['Which lead sources and CRMs can your ISAs work with?', 'Our ISAs work leads from websites and IDX, Zillow, Realtor.com, social and search ads, open houses and past-client databases, inside CRMs such as Follow Up Boss, kvCORE, Lofty and Sierra Interactive.'],
            ['Do your ISAs follow cold calling rules?', 'Yes. Calls are planned around the TCPA, the National Do Not Call Registry and state rules such as Florida&#39;s calling-hour and call-frequency limits, and every opt-out is logged.'],
        ],
        'links' => [
            'title' => 'Related Real Estate Services',
            'items' => [
                ['Real Estate Virtual Assistant', route('service.real_estate_virtual_assistant')],
                ['Real Estate Cold Calling', route('service.cold_calling')],
                ['Wholesale Cold Calling', route('service.wholesale_cold_calling')],
                ['CRM Management', route('service.crm_management')],
                ['Transaction Coordinator', route('service.real_estate_transaction_coordinator')],
                ['Tampa & St. Petersburg VAs', route('location.tampa_st_petersburg')],
            ],
        ],
        'final' => [
            'title' => 'Add an ISA to Your Team',
            'text' => 'Tell us about your lead sources and goals and we will set up a trained real estate ISA, starting with a free 2-day trial.',
            'list' => ['Faster lead response', 'More booked appointments', 'Consistent long-term nurture', 'Clear weekly reporting'],
        ],
    ];
@endphp
@extends('layout.main')

@section('title', 'Real Estate ISA Services | Outsourced Inside Sales Agents')
@section('meta_description', 'Outsourced real estate ISA services: inside sales agents who call new leads fast, qualify buyers and sellers and book appointments. Free 2-day trial.')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/service-page.css') }}">
@endpush

@push('schema')
    @include('partials.schema-page', [
        'type' => 'service',
        'name' => 'Real Estate ISA Services',
        'serviceType' => 'Real estate inside sales agent (ISA)',
        'description' => 'Outsourced real estate inside sales agents who respond to new leads, qualify buyers and sellers, nurture databases and book appointments for agents.',
        'breadcrumbs' => [['Services', route('service')], ['Real Estate Virtual Assistant', route('service.real_estate_virtual_assistant')]],
        'faqs' => array_map(fn ($f) => [$f[0], html_entity_decode(strip_tags($f[1]), ENT_QUOTES)], $page['faqs']),
    ])
@endpush

@section('content')
    @include('partials.landing', ['page' => $page])
@endsection
