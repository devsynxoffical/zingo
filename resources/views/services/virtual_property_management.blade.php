@php
    $pmExtras = [
        'quote_href' => '#lead-final',
        'day' => [
            'label' => 'A typical day',
            'title' => 'A Day With Your Property Management Assistant',
            'desc' => 'A sample schedule for an assistant supporting a portfolio of rentals, in your time zone.',
            'items' => [
                ['8:00', '<strong>Overnight messages:</strong> return tenant and applicant calls, triage emergencies to your on-call contact.'],
                ['9:00', '<strong>Maintenance:</strong> open work orders, dispatch approved vendors, confirm access with tenants.'],
                ['10:30', '<strong>Leasing:</strong> answer listing inquiries, pre-screen applicants with your criteria, book showings.'],
                ['12:30', '<strong>Software:</strong> enter new leases, renewals, move-ins and vendor bills in AppFolio or Buildium.'],
                ['2:00', '<strong>Rent:</strong> send reminders, log promises to pay, flag late accounts for your decision.'],
                ['3:30', '<strong>Ticket follow-up:</strong> chase open work orders and update tenants on progress.'],
                ['5:00', '<strong>Daily report:</strong> calls handled, tickets opened and closed, anything that needs you.'],
            ],
        ],
        'pricing' => [
            'label' => 'Pricing',
            'title' => 'Property Management Virtual Assistant Pricing',
            'desc' => 'What a property management virtual assistant typically costs per hour and per month in 2026.',
            'plans' => [
                ['Part-time assistant', '$8 – $15 / hr', '≈ $640 – $1,200 / month (80 hrs)', 'Calls, tickets and rent reminders for a smaller portfolio.'],
                ['Full-time assistant', '$8 – $15 / hr', '≈ $1,300 – $2,400 / month (160 hrs)', 'One dedicated assistant for tenant calls, maintenance, leasing support and data entry.', 'Most common'],
                ['US-based assistant', '$25 – $45 / hr', '≈ $4,000 – $7,200 / month (160 hrs)', 'Native US assistant for high-touch tenant and owner communication.'],
            ],
            'note' => 'Typical US market ranges in 2026, not a Zingo Assist price list. We quote after a free consultation; see the <a href="' . route('blog.re_va_cost') . '">real estate virtual assistant cost guide</a>.',
        ],
        'tools' => [
            'label' => 'Tools',
            'title' => 'Property Management Software We Work In',
            'items' => [
                ['AppFolio', 'Work orders, leases, tenant ledgers, owner statements'],
                ['Buildium', 'Tenant and vendor records, rent tracking, reports'],
                ['Rent Manager', 'Service issues, leasing and accounting data'],
                ['Yardi', 'Resident records, maintenance and leasing'],
                ['Google Workspace', 'Shared inbox, calendars and documents'],
                ['Your phone system', 'Tenant lines, voicemail and call logging'],
            ],
        ],
    ];
@endphp
@php
    $pmFaqs = [
        ['How much does a property management virtual assistant cost?', 'A property management virtual assistant through a managed offshore agency typically costs about $8 to $15 per hour, or roughly $640 to $1,200 a month part-time and $1,300 to $2,400 a month full-time. A US-based assistant usually costs $25 to $45 per hour. These are 2026 market ranges, not a Zingo Assist price list; we quote after a free consultation. See the <a href="' . route('blog.re_va_cost') . '">real estate virtual assistant cost guide</a>.'],
        ['Can a virtual assistant handle tenant calls?', 'Yes. A virtual assistant can answer and return tenant calls, log maintenance requests, send rent reminders and follow up with applicants using your approved scripts, with every call recorded in your property management software. Decisions on applicants, lease terms and disputes stay with you or your licensed manager, and scripts should follow Fair Housing rules.'],
        ['Which property management software do your assistants use?', 'Our assistants work inside the software you already use, including AppFolio, Buildium, Rent Manager and Yardi, plus Google Workspace, email and your phone system. You give them role-based access instead of sharing your login.'],
        ['Can a virtual assistant show units?', 'No. A virtual assistant works remotely, so in-person showings stay with you, your leasing agent or a self-showing system. In many states, showing or leasing property for others also requires a real estate or property management license. Your assistant can schedule showings, confirm them and follow up with prospects afterwards.'],
        ['How fast can I start?', 'Most clients start within 24 to 48 hours of being matched with an assistant, beginning with a free 2-day trial so you can judge the work before you commit.'],
        ['What are virtual property management services?', 'Remote support for rental property owners and managers, including tenant communication, rent reminders, maintenance coordination, data entry and owner reporting.'],
        ['Can I use a virtual assistant for multiple properties?', 'Yes. One assistant can support a few doors or a large portfolio, and you can add hours or a second assistant as you grow.'],
        ['Are tenant data and documents kept secure?', 'Assistants sign confidentiality agreements and work with role-based access in your systems, so you control what they can see and can remove access at any time.'],
        ['Can I track the work remotely?', 'Yes. Your assistant sends daily or weekly reports on calls handled, work orders opened and closed, rent reminders sent and anything that needs your decision.'],
    ];
@endphp
@extends('layout.main')

@section('title', 'Property Management Virtual Assistants | Zingo Assist')
@section('meta_description', 'Property management virtual assistants for US landlords and PM firms: tenant calls, maintenance tickets, rent reminders and AppFolio or Buildium updates.')

@push('schema')
    @include('partials.schema-page', [
        'type' => 'service',
        'name' => 'Virtual Property Management Services',
        'serviceType' => 'Virtual property management',
        'description' => 'Virtual property management assistants for landlords and property managers: tenant communication, rent reminders, screening support and maintenance requests.',
        'breadcrumbs' => [['Services', route('service')]],
        'faqs' => array_map(fn ($f) => [$f[0], html_entity_decode(strip_tags($f[1]), ENT_QUOTES)], $pmFaqs),
    ])
@endpush
@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/service-page.css') }}">
@endpush

@section('content')

<div class="sp-page">

<!-- ===================== HERO ===================== -->
<section class="sp-hero">
    <div class="sp-hero-decor sp-hero-decor--1"></div>
    <div class="sp-hero-decor sp-hero-decor--2"></div>
    <div class="sp-hero-decor sp-hero-decor--3"></div>
    <div class="container">
        <div class="sp-hero-inner">
            <h1 class="sp-hero-title" data-aos="fade-up" data-aos-duration="700">
                Property Management Virtual Assistants <span class="sp-hero-title-highlight">for US Landlords and PM Companies</span>
            </h1>

            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="150" data-aos-duration="700">
                Trained virtual assistants for landlords, property managers and PM companies. They answer tenant and applicant calls, open and chase maintenance tickets, send rent reminders, keep AppFolio or Buildium up to date and prepare owner reports, so you can manage more doors without hiring in-house.
            </p>
            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">
                Start with a free 2-day trial. Your assistant works in your software, on your schedule, with role-based access.
            </p>

            <div class="sp-hero-actions" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                <a href="#lead-final" class="sp-btn sp-btn--white">
                    Get a Free Consultation <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--outline">
                    Start Your Virtual Property Management Today <i class="fas fa-rocket"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ===================== ABOUT / OVERVIEW ===================== -->
<section class="sp-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="700">
                <div class="sp-about-icon-placeholder">
                    <i class="fas fa-building"></i>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="700">
                <span class="sp-about-label">Overview</span>
                <h2 class="sp-about-title">About Virtual Property Management Services</h2>
                <p class="sp-about-text">
                    Virtual Property Management Services help property owners and managers oversee their rental or commercial properties remotely. These services are especially useful for landlords managing multiple properties, remote real estate investors, or busy property managers who need support with daily tasks.
                </p>
                <p class="sp-about-text zingo-related"><strong>Need help beyond rentals? Our <a href="{{ route('service.real_estate_virtual_assistant') }}">real estate virtual assistants</a> also handle CRM, listings and lead follow-up, and our <a href="{{ route('location.tampa_st_petersburg') }}">St. Petersburg team</a> supports Tampa Bay landlords.</strong></p>
                <p class="sp-about-text">
                    ZingoAssist solves common property management challenges, including:
                </p>
                <ul class="sp-about-list">
                    <li><i class="fas fa-check-circle"></i> Coordinating maintenance requests across multiple properties</li>
                    <li><i class="fas fa-check-circle"></i> Managing tenant communications and resolving issues promptly</li>
                    <li><i class="fas fa-check-circle"></i> Collecting rent and maintaining accurate financial records</li>
                    <li><i class="fas fa-check-circle"></i> Scheduling inspections and property viewings efficiently</li>
                    <li><i class="fas fa-check-circle"></i> Organizing lease agreements, renewals, and legal documentation</li>
                </ul>
                <p class="sp-about-text">
                    For example, a landlord managing five rental units in different cities might struggle to respond quickly to maintenance requests. ZingoAssist ensures that tenants receive prompt assistance, vendors are scheduled efficiently, and all records are up to date.
                </p>
                <div class="sp-highlight-box">
                    <p>By delegating these tasks to our team, property owners save time, reduce stress, and ensure smoother operations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== TASKS COVERED ===================== -->
<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Tasks covered</span>
            <h2 class="sp-section-title">What Your Property Management Virtual Assistant Handles</h2>
            <p class="sp-section-desc">Pick the tasks that take most of your week. Your assistant follows your processes and escalates anything that needs a manager&#39;s decision.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-user-check"></i></div>
                    <h3 class="sp-card-title">Tenant and applicant calls</h3>
                    <p class="sp-card-text">Answer and return calls, pre-screen applicants with your criteria, book showings for your leasing agent and log every call.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-tools"></i></div>
                    <h3 class="sp-card-title">Maintenance tickets</h3>
                    <p class="sp-card-text">Open work orders, dispatch your approved vendors, confirm access with tenants and chase every ticket until it is closed.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-bell"></i></div>
                    <h3 class="sp-card-title">Rent reminders and follow-up</h3>
                    <p class="sp-card-text">Send reminders before and after the due date, log promises to pay and flag late accounts for your decision.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-database"></i></div>
                    <h3 class="sp-card-title">AppFolio and Buildium data entry</h3>
                    <p class="sp-card-text">New leases, renewals, move-ins, move-outs, unit details and vendor bills entered accurately in your software.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-chart-pie"></i></div>
                    <h3 class="sp-card-title">Owner reports</h3>
                    <p class="sp-card-text">Monthly owner statements prepared for your review, plus occupancy, delinquency and work-order summaries.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-bullhorn"></i></div>
                    <h3 class="sp-card-title">Leasing support</h3>
                    <p class="sp-card-text">Write and post vacancy listings for your approval, answer listing inquiries and keep the showing calendar full.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== WHY CHOOSE US ===================== -->
<section class="sp-section">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Why Us</span>
            <h2 class="sp-section-title">Why Choose ZingoAssist for Virtual Property Management Services?</h2>
            <p class="sp-section-desc">ZingoAssist is a trusted provider of Virtual Property Management Services for several reasons:</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">01</div>
                    <div>
                        <h4 class="sp-choose-title">Experienced Team</h4>
                        <p class="sp-choose-text">Our staff has extensive experience managing properties of all sizes and types.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">02</div>
                    <div>
                        <h4 class="sp-choose-title">Customized Solutions</h4>
                        <p class="sp-choose-text">Every service is tailored to your portfolio and property management needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">03</div>
                    <div>
                        <h4 class="sp-choose-title">Advanced Technology</h4>
                        <p class="sp-choose-text">We use property management software, communication platforms, and automated tools to streamline operations.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">04</div>
                    <div>
                        <h4 class="sp-choose-title">Reliable & Efficient</h4>
                        <p class="sp-choose-text">Tasks are handled promptly, reducing delays and improving tenant satisfaction.</p>
                    </div>
                </div>
        </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">05</div>
                    <div>
                        <h4 class="sp-choose-title">Scalable Support</h4>
                        <p class="sp-choose-text">Whether you have one property or multiple, our services scale as your portfolio grows.</p>
            </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">06</div>
                    <div>
                        <h4 class="sp-choose-title">Confidential & Secure</h4>
                        <p class="sp-choose-text">Tenant data, financial information, and property records are protected with robust security measures.</p>
            </div>
            </div>
            </div>
        </div>
        <p class="text-center mt-4" style="color: var(--sp-body); font-style: italic;" data-aos="fade-up">Our combination of expertise, technology, and dedication ensures that every property owner receives high-quality, professional support.</p>
    </div>
</section>

<!-- ===================== PROCESS / WORKFLOW ===================== -->
<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Process</span>
            <h2 class="sp-section-title">Our Virtual Property Management Services in Action</h2>
        </div>
        <div class="sp-timeline">
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-timeline-dot">1</div>
                <div class="sp-timeline-card">
                    <h4>Portfolio Assessment & Consultation</h4>
                <p>We begin by understanding your property portfolio, challenges, and goals. This assessment helps us design a tailored plan for your property operations.</p>
            </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="100">
                <div class="sp-timeline-dot">2</div>
                <div class="sp-timeline-card">
                    <h4>Task Prioritization & Workflow Planning</h4>
                <p>ZingoAssist identifies high-priority tasks and recurring responsibilities to ensure nothing is overlooked. Tasks are scheduled efficiently, allowing property owners to focus on strategic activities.</p>
            </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="200">
                <div class="sp-timeline-dot">3</div>
                <div class="sp-timeline-card">
                    <h4>Service Execution & Management</h4>
                <p>Our team executes daily property management tasks, including tenant communications, rent collection, inspections, and vendor coordination. Property owners experience smoother operations without micromanaging every detail.</p>
            </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="300">
                <div class="sp-timeline-dot">4</div>
                <div class="sp-timeline-card">
                    <h4>Reporting & Performance Monitoring</h4>
                <p>Clients receive detailed reports covering rent collection, maintenance updates, tenant feedback, and property conditions. Transparent reporting ensures informed decision-making.</p>
            </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="400">
                <div class="sp-timeline-dot">5</div>
                <div class="sp-timeline-card">
                    <h4>Continuous Improvement & Scalability</h4>
                <p>As your portfolio grows, our Virtual Property Management Services scale with you. We continuously refine processes to improve efficiency and outcomes.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== TESTIMONIALS ===================== -->
<section class="sp-section">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Success Stories</span>
            <h2 class="sp-section-title">Testimonials</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"ZingoAssist completely transformed our property management approach. Tenants are happier, and our administrative workload has decreased significantly."</p>
                    <p class="sp-testimonial-author">Maria L., Landlord</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Their virtual property management assistant handles everything from rent collection to maintenance scheduling. I can focus on acquiring new properties."</p>
                    <p class="sp-testimonial-author">James T., Property Investor</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"The team is professional, reliable, and responsive. We now have complete visibility into property operations without being on-site."</p>
                    <p class="sp-testimonial-author">Emily K., Real Estate Manager</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"ZingoAssist helped us streamline operations across multiple rental properties. We save hours each week and our tenants are more satisfied."</p>
                    <p class="sp-testimonial-author">Robert S., Landlord</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"The virtual property management services provided by ZingoAssist exceeded our expectations. Efficient, organized, and trustworthy."</p>
                    <p class="sp-testimonial-author">Linda P., Property Owner</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== BENEFITS ===================== -->
<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Advantages</span>
            <h2 class="sp-section-title">Benefits of Virtual Property Management Services</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-hourglass-half"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Time-Saving</h4>
                        <p class="sp-benefit-text">Delegate routine tasks and focus on portfolio growth.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-coins"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Cost-Effective</h4>
                        <p class="sp-benefit-text">Reduce overhead costs while maintaining professional support.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-expand-arrows-alt"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Scalable Solutions</h4>
                        <p class="sp-benefit-text">Easily expand services as your property portfolio grows.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-smile"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Enhanced Tenant Satisfaction</h4>
                        <p class="sp-benefit-text">Efficient communication and maintenance improve retention rates.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-chart-bar"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Financial Accuracy</h4>
                        <p class="sp-benefit-text">Accurate rent tracking and expense management reduce errors.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-cogs"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Operational Efficiency</h4>
                        <p class="sp-benefit-text">Streamlined workflows ensure tasks are completed on time.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-sliders-h"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Customizable Services</h4>
                        <p class="sp-benefit-text">Services tailored to meet unique property management needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.role-extras', ['x' => $pmExtras])

<!-- ===================== COMPLIANCE ===================== -->
<section class="sp-section">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Fair Housing and licensing</span>
            <h2 class="sp-section-title">Compliant by Design</h2>
        </div>
        <div class="row justify-content-center"><div class="col-lg-9" data-aos="fade-up">
            <ul class="sp-about-list">
                <li><i class="fas fa-check-circle"></i> Every applicant gets the same scripted questions and criteria you approve, in line with the federal Fair Housing Act.</li>
                <li><i class="fas fa-check-circle"></i> Decisions on applicants, lease terms, deposits and disputes stay with you or your licensed manager.</li>
                <li><i class="fas fa-check-circle"></i> In many states, leasing or managing property for others requires a real estate or property management license. Your assistant handles the administrative work; licensed activity stays with your licensed staff. See <a href="{{ route('rules.hub') }}">real estate assistant rules by state</a>.</li>
                <li><i class="fas fa-check-circle"></i> Confidentiality agreements and role-based access to your software; no shared logins.</li>
            </ul>
        </div></div>
    </div>
</section>

<!-- ===================== FAQ ===================== -->
<section class="sp-section">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">FAQs</span>
            <h2 class="sp-section-title">FAQs</h2>
        </div>
        <div class="sp-faq-wrap" data-aos="fade-up" data-aos-delay="100">
            @foreach ($pmFaqs as $f)
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h3 class="sp-faq-q" style="font-size: 17px;">{{ $f[0] }}</h3>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">{!! $f[1] !!}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@include('partials.lead-final', ['final' => ['title' => 'Manage More Doors Without Hiring', 'text' => 'Tell us how many units you manage and which software you use. We will set up a trained property management assistant, starting with a free 2-day trial.', 'list' => ['Tenant calls answered', 'Tickets opened and closed', 'Rent reminders sent', 'Owner reports on time']], 'formService' => 'Virtual Property Management'])

</div><!-- .sp-page -->

<!-- FAQ Accordion Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.sp-faq-header').forEach(function (header) {
        header.addEventListener('click', function () {
            var faq = this.closest('.sp-faq');
            var body = faq.querySelector('.sp-faq-body');
            var isOpen = faq.classList.contains('active');

            document.querySelectorAll('.sp-faq').forEach(function (item) {
                item.classList.remove('active');
                item.querySelector('.sp-faq-body').style.maxHeight = null;
            });

            if (!isOpen) {
                faq.classList.add('active');
                body.style.maxHeight = body.scrollHeight + 'px';
            }
        });
    });
});
</script>

@endsection
