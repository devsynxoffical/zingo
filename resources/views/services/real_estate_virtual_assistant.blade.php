@php
    $page = [
        'h1' => ['Real Estate', 'Virtual Assistant Services'],
        'hero' => [
            'Hire a trained real estate virtual assistant who already knows the work: CRM updates, listing coordination, lead follow-up, ISA calling, transaction paperwork and social media. Zingo Assist gives agents, teams, brokers and investors dedicated remote support so you can spend your time on appointments and closings.',
            'Start with a free 2-day trial and scale from part-time help to a full-time assistant as your business grows.',
        ],
        'answer' => 'A <strong>real estate virtual assistant</strong> is a remote professional who handles the administrative, marketing and lead-management work behind a real estate business, such as CRM updates, lead follow-up calls, listing input, showing scheduling, transaction paperwork and social media, so the licensed agent can focus on clients, appointments and negotiations. Zingo Assist provides trained real estate VAs to US agents, teams, brokers, investors and property managers, with a free 2-day trial.',
        'overview' => [
            'image' => 'assets/images/services/arooba.png',
            'image_alt' => 'Zingo Assist real estate virtual assistant working in a client CRM',
            'icon' => 'fa-home',
            'label' => 'Overview',
            'title' => 'Why Agents Hire a Real Estate VA',
            'paragraphs' => [
                'Most agents lose hours every week to tasks that do not need a license: updating the CRM after every call, chasing documents, formatting listing descriptions, posting on social media and following up with cold leads. A real estate virtual assistant takes that work off your plate for less than the cost of an in-house hire.',
                'At Zingo Assist, real estate is our core specialty. Our assistants are trained on the tools agents actually use, including Follow Up Boss, kvCORE, BoldTrail, Lofty, Sierra Interactive, dotloop, SkySlope, Google Workspace and Canva, and work in your US business hours.',
            ],
            'list' => [
                'Dedicated assistant matched to your market and workflow',
                'Part-time, full-time or project-based support',
                'Free 2-day trial before you commit',
                'Backed by a US-based team in St. Petersburg, Florida',
            ],
        ],
        'cards' => [
            'label' => 'What Our Real Estate VAs Do',
            'title' => 'Tasks You Can Delegate to a Real Estate Virtual Assistant',
            'desc' => 'Pick one area to start, or combine them into a full-time role.',
            'items' => [
                ['fa-address-book', 'CRM & Lead Management', 'Log every lead, tag and segment your database, set follow-up tasks and keep pipelines in Follow Up Boss, kvCORE or Lofty clean and current.'],
                ['fa-phone-volume', 'ISA & Lead Follow-Up Calls', 'Inside sales (ISA) support: speed-to-lead calls on new inquiries, nurture calls to older leads and appointment setting straight into your calendar. See our <a href="' . route('service.real_estate_isa') . '">real estate ISA services</a>.'],
                ['fa-tasks', 'Listing Coordination', 'Prepare MLS input sheets, write and proofread listing descriptions, order photos and signage, and keep sellers updated on activity.'],
                ['fa-file-signature', 'Transaction Support', 'Track contract deadlines, collect documents and signatures, and keep buyers, sellers, lenders and title on schedule. Learn about our <a href="' . route('service.real_estate_transaction_coordinator') . '">transaction coordinator services</a>.'],
                ['fa-calendar-check', 'Calendar & Inbox Management', 'Schedule showings and listing appointments, confirm meetings, triage your inbox and draft routine replies so nothing slips.'],
                ['fa-hashtag', 'Social Media & Marketing', 'Create just-listed and just-sold graphics, schedule posts, send email newsletters and keep your Google Business Profile active.'],
                ['fa-search-dollar', 'Market Research & CMAs', 'Pull comparable sales, prepare CMA drafts and pre-listing packets, and research expired and FSBO listings for prospecting.'],
                ['fa-building', 'Property Management Support', 'Tenant communication, rent reminders, maintenance requests and vendor scheduling for rentals. See <a href="' . route('service.virtual_property_management') . '">virtual property management</a>.'],
                ['fa-calculator', 'Bookkeeping & Admin', 'Track commissions and expenses, reconcile accounts and prepare monthly reports with our <a href="' . route('service.bookkeeping_accountant') . '">bookkeeping services</a>.'],
            ],
        ],
        'extras' => [
            'roles' => [
                'label' => 'Roles',
                'title' => 'Choose the Real Estate Assistant Role You Need',
                'desc' => 'Every role is a trained Zingo Assist assistant who works inside your tools. Start with one role and combine them as you grow.',
                'items' => [
                    ['fa-file-signature', 'Virtual Transaction Coordinator', 'Contract-to-close: deadlines, documents, lender and title updates, a clean file at closing.', route('service.real_estate_transaction_coordinator'), 'agents with 2+ deals under contract'],
                    ['fa-headset', 'Inside Sales Agent (ISA)', 'Speed-to-lead calls, nurture follow-up and appointment setting for your buyer and seller leads.', route('service.real_estate_isa'), 'teams with more leads than time'],
                    ['fa-sign', 'Listing Coordinator', 'MLS input, photos and signage, listing copy, showing feedback and weekly seller reports.', route('service.listing_coordinator'), 'listing agents and teams'],
                    ['fa-phone-volume', 'Real Estate Cold Calling', 'Daily prospecting calls to your database, circle prospecting and past clients.', route('service.cold_calling'), 'agents building a pipeline'],
                    ['fa-history', 'Expired & FSBO Calling', 'Callers who work your expired, withdrawn and FSBO lists and book listing appointments.', route('service.expired_fsbo_calling'), 'listing-focused agents'],
                    ['fa-hand-holding-usd', 'Wholesale Cold Calling', 'Motivated-seller calling for investors and wholesalers, logged in your CRM.', route('service.wholesale_cold_calling'), 'investors and wholesalers'],
                ],
            ],
            'pricing' => [
                'label' => 'Pricing',
                'title' => 'Real Estate Virtual Assistant Pricing',
                'desc' => 'What a real estate VA typically costs per hour and per month in 2026. Most agents start part-time and add hours.',
                'plans' => [
                    ['Part-time VA', '$8 – $15 / hr', '≈ $640 – $1,200 / month (80 hrs)', 'Offshore assistant through a managed agency. Best for CRM, listing and admin work.'],
                    ['Full-time VA', '$8 – $15 / hr', '≈ $1,300 – $2,400 / month (160 hrs)', 'One dedicated assistant covering ISA follow-up, transactions and marketing.', 'Most common'],
                    ['US-based VA', '$25 – $45 / hr', '≈ $4,000 – $7,200 / month (160 hrs)', 'Native US assistant for client-facing work. Higher cost, same tasks.'],
                    ['Transaction coordinator', '$300 – $600', 'per closed file', 'Often billed per file instead of hourly. Compare with an hourly VA for high volume.'],
                ],
                'note' => 'These are typical US market ranges in 2026 from published agency and freelance pricing, not a Zingo Assist price list. Your exact rate depends on hours, role and tools, and we quote after a free consultation. See the full <a href="' . route('blog.re_va_cost') . '">real estate virtual assistant cost guide</a>.',
            ],
            'day' => [
                'label' => 'A typical day',
                'title' => 'What a Day With Your Real Estate VA Looks Like',
                'desc' => 'A sample full-time schedule in your time zone. Your assistant follows your priorities and reports back every day.',
                'items' => [
                    ['8:00', '<strong>Speed-to-lead:</strong> call and text overnight web, Zillow and portal leads; book appointments into your calendar.'],
                    ['9:30', '<strong>CRM clean-up:</strong> log every call, tag leads, set follow-up tasks and smart lists in Follow Up Boss or kvCORE.'],
                    ['11:00', '<strong>Listings:</strong> prepare MLS input, schedule photos and signage, collect showing feedback.'],
                    ['1:00', '<strong>Transactions:</strong> check contract deadlines, chase documents and signatures in dotloop or SkySlope, update lender and title.'],
                    ['2:30', '<strong>Nurture calls:</strong> follow up with older leads and past clients using your approved scripts.'],
                    ['4:00', '<strong>Marketing:</strong> just-listed and just-sold posts, email newsletter, Google Business Profile updates.'],
                    ['5:00', '<strong>Daily report:</strong> calls made, appointments booked, deadlines and anything that needs your decision.'],
                ],
            ],
            'tools' => [
                'label' => 'Tools',
                'title' => 'Trained on the Tools You Already Use',
                'desc' => 'No new software to learn. Your assistant works inside your accounts with role-based access.',
                'items' => [
                    ['Follow Up Boss', 'Lead routing, smart lists, action plans, call logging'],
                    ['kvCORE / BoldTrail', 'Lead follow-up, campaigns, transaction tracking'],
                    ['Lofty', 'Lead management, nurture and pipeline updates'],
                    ['dotloop', 'Loops, document collection and e-signatures'],
                    ['SkySlope', 'Transaction files, checklists and compliance'],
                    ['Your MLS', 'Listing input and updates for your approval'],
                    ['Dialers', 'Mojo, BatchDialer, PhoneBurner, Vulcan7'],
                    ['Google Workspace', 'Inbox, calendar, Drive and shared docs'],
                    ['Canva', 'Listing flyers, social graphics and presentations'],
                    ['Mailchimp', 'Newsletters and market update emails'],
                ],
            ],
        ],
        'table' => [
            'label' => 'Licensed vs Unlicensed',
            'title' => 'What a Real Estate VA Can and Cannot Do',
            'desc' => 'Unlicensed assistants support the agent; they do not perform activities that require a real estate license.',
            'head' => ['Typically handled by a VA', 'Kept with the licensed agent'],
            'rows' => [
                ['Updating the CRM, scheduling and reminders', 'Negotiating price and terms'],
                ['Calling leads to qualify interest and book appointments using approved scripts', 'Giving opinions on value or advice about contracts'],
                ['Preparing listing input sheets and marketing copy for agent review', 'Hosting showings or open houses on their own'],
                ['Collecting documents and tracking deadlines', 'Explaining or interpreting contract terms to clients'],
                ['Social media, email marketing and CMA data pulls', 'Anything your state or brokerage reserves for licensees'],
            ],
            'note' => 'Rules vary by state and brokerage. Always confirm with your broker which activities an unlicensed assistant may perform in your market.',
        ],
        'process' => [
            'label' => 'How It Works',
            'title' => 'How to Hire a Real Estate Virtual Assistant With Zingo Assist',
            'steps' => [
                ['Free consultation', 'Tell us how you work, which tools you use and which tasks are eating your time. We define the role, hours and success metrics together.'],
                ['Assistant matching', 'We match you with a trained real estate VA whose experience fits your tasks, whether that is ISA calling, transaction support or marketing.'],
                ['Free 2-day trial', 'Your assistant starts on real work for two days so you can judge quality and communication before committing.'],
                ['Onboarding & SOPs', 'We document your processes, set up role-based access to your CRM and tools, and agree on a daily or weekly reporting rhythm.'],
                ['Ongoing support & scaling', 'Your account team checks in regularly. Add hours, tasks or a second assistant as your pipeline grows.'],
            ],
        ],
        'why' => [
            'label' => 'Why Zingo Assist',
            'title' => 'Why Agents Choose Zingo Assist',
            'items' => [
                ['Real estate specialists', 'Real estate is our core focus, so your assistant understands leads, listings, contracts and closings from day one.'],
                ['Trained on your tools', 'Assistants work inside your CRM, transaction platform and marketing tools rather than forcing new software on you.'],
                ['Flexible engagement', 'Part-time, full-time or project-based support, with hours that scale up or down with the market.'],
                ['Free 2-day trial', 'See the quality of the work before you commit to an ongoing plan.'],
                ['US business hours', 'Assistants are scheduled around your time zone, with 24/7 support from our team.'],
                ['Secure by default', 'Confidentiality agreements and role-based access instead of shared personal logins.'],
            ],
        ],
        'faqs' => [
            ['What does a real estate virtual assistant do?', 'A real estate virtual assistant handles the non-licensed work in a real estate business: CRM updates, lead follow-up and appointment setting, listing coordination, transaction paperwork and deadline tracking, calendar and inbox management, social media and market research.'],
            ['How much does a real estate virtual assistant cost?', 'Cost depends on hours, skills and whether the assistant is offshore or US-based. Industry rates commonly range from about $8 to $15 per hour for offshore assistants and $25 to $45 per hour for US-based assistants. Zingo Assist quotes after a free consultation. Read our <a href="' . route('blog.re_va_cost') . '">real estate virtual assistant cost guide</a> for a full breakdown.'],
            ['Can a virtual assistant make calls for my real estate business?', 'Yes. Our assistants make speed-to-lead calls, nurture calls and appointment-setting calls using scripts you approve. Calling campaigns must follow the TCPA, the National Do Not Call Registry and state rules; see our <a href="' . route('blog.florida_cold_calling_laws') . '">Florida cold calling laws guide</a>.'],
            ['What can an unlicensed real estate assistant do in my state?', 'Rules differ by state, especially for calls and showings. Texas does not allow unlicensed assistants to make prospecting calls, while California allows limited general-interest calls with the broker&#39;s consent. See our state-by-state guide: <a href="' . route('blog.unlicensed_assistant_rules') . '">what can an unlicensed real estate assistant do?</a>'],
            ['Does a real estate virtual assistant need a license?', 'No license is needed for administrative, marketing and scheduling work. Activities such as negotiating, giving advice on value or contracts, or showing property generally require a license, so those stay with the agent. Check your state rules and brokerage policy; Florida agents can read <a href="' . route('blog.unlicensed_assistant_florida') . '">what an unlicensed real estate assistant can do in Florida</a>.'],
            ['What is the difference between a transaction coordinator and a real estate virtual assistant?', 'A transaction coordinator focuses only on moving deals from contract to close. A real estate virtual assistant covers a wider range of work across lead generation, marketing and administration. Our <a href="' . route('blog.tc_vs_va') . '">transaction coordinator vs virtual assistant guide</a> compares them in detail.'],
            ['How quickly can my real estate VA start?', 'Most clients start within 24 to 48 hours of matching, beginning with the free 2-day trial.'],
            ['Which CRMs and tools do your assistants use?', 'Our assistants work with common real estate platforms including Follow Up Boss, kvCORE and BoldTrail, Lofty, Sierra Interactive, dotloop, SkySlope, Google Workspace, Microsoft 365, Canva and social media schedulers.'],
        ],
        'links' => [
            'title' => 'Explore More Real Estate Services',
            'items' => [
                ['VA Tasks Checklist (PDF)', route('blog.re_va_tasks_checklist')],
                ['Real Estate ISA Services', route('service.real_estate_isa')],
                ['Listing Coordinator', route('service.listing_coordinator')],
                ['Expired & FSBO Calling', route('service.expired_fsbo_calling')],
                ['VA ROI Calculator', route('tool.va_roi_calculator')],
                ['Real Estate Cold Calling', route('service.cold_calling')],
                ['Wholesale Cold Calling', route('service.wholesale_cold_calling')],
                ['Transaction Coordinator', route('service.real_estate_transaction_coordinator')],
                ['Virtual Property Management', route('service.virtual_property_management')],
                ['Real Estate SEO', route('service.search_seo')],
                ['Tampa & St. Petersburg VAs', route('location.tampa_st_petersburg')],
            ],
        ],
        'final' => [
            'title' => 'Get Your Real Estate Virtual Assistant',
            'text' => 'Tell us which tasks are slowing you down and we will match you with a trained real estate VA. Start with a free 2-day trial.',
            'list' => ['Faster lead follow-up', 'A clean, up-to-date CRM', 'Smoother listings and closings', 'More time for clients'],
        ],
    ];
@endphp
@extends('layout.main')

@section('title', 'Real Estate Virtual Assistant Services | Zingo Assist')
@section('meta_description', 'Hire a trained real estate virtual assistant for CRM updates, lead follow-up, ISA calls, listings and transaction support. Free 2-day trial. US-managed team.')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/service-page.css') }}">
@endpush

@push('schema')
    @include('partials.schema-page', [
        'type' => 'service',
        'name' => 'Real Estate Virtual Assistant Services',
        'serviceType' => 'Real estate virtual assistant',
        'description' => 'Trained real estate virtual assistants for US agents, teams, brokers and investors: CRM management, lead follow-up and ISA calls, listing coordination, transaction support and marketing.',
        'breadcrumbs' => [['Services', route('service')]],
        'faqs' => array_map(fn ($f) => [$f[0], html_entity_decode(strip_tags($f[1]), ENT_QUOTES)], $page['faqs']),
    ])
@endpush

@section('content')
    @include('partials.landing', ['page' => $page])
@endsection
