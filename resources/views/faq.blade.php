@php
    $faqs = [
        ['What services do your virtual assistants provide?', 'Our virtual assistants handle administrative support, email and calendar management, data entry, customer service, CRM management, cold calling, lead generation, bookkeeping, social media and content tasks. For real estate professionals we also provide <a href="' . route('service.real_estate_virtual_assistant') . '">real estate virtual assistants</a>, <a href="' . route('service.real_estate_transaction_coordinator') . '">transaction coordination</a> and <a href="' . route('service.virtual_property_management') . '">virtual property management</a>.'],
        ['How do I know if a virtual assistant is right for my business?', 'If repetitive tasks such as inbox management, scheduling, follow-ups or data entry are taking hours away from revenue-generating work, a virtual assistant is usually a good fit. Our <a href="' . route('blog.ten_signs_need_virtual_assistant') . '">10 signs you need a virtual assistant</a> guide walks through the most common triggers.'],
        ['Are your virtual assistants trained and experienced?', 'Yes. Every Zingo Assist virtual assistant is vetted and trained before being matched with a client, and is assigned based on the tools and industry experience your work requires.'],
        ['Do you offer a free trial?', 'Yes. You can start with a free 2-day trial to see how a Zingo Assist virtual assistant fits your workflow before you commit. <a href="' . route('blog.free_va_trial') . '">See what to expect from the trial</a>.'],
        ['How quickly can a virtual assistant start?', 'Once we understand your requirements and match you with an assistant, most clients can start within 24 to 48 hours.'],
        ['How much does a virtual assistant cost?', 'Pricing depends on the number of hours, the type of work and whether you need a general or specialized assistant. We provide a quote after a free consultation. For market benchmarks, read our guide on <a href="' . route('blog.re_va_cost') . '">how much a real estate virtual assistant costs</a>.'],
        ['Can I hire a virtual assistant for part-time or project-based work?', 'Yes. We offer part-time, full-time and project-based support, and you can scale hours up or down as your workload changes.'],
        ['Do you provide virtual assistants for real estate agents and investors?', 'Yes. Real estate is our core specialty. Our assistants support agents, teams, brokers, wholesalers, investors and property managers with CRM updates, listing coordination, <a href="' . route('service.cold_calling') . '">cold calling</a>, appointment setting and transaction paperwork.'],
        ['Is real estate cold calling legal?', 'Cold calling is legal in the United States when campaigns follow the federal TCPA, the National Do Not Call Registry and state rules such as Florida&#39;s Telephone Solicitation Act. Our <a href="' . route('blog.florida_cold_calling_laws') . '">Florida cold calling laws guide</a> explains calling hours, DNC scrubbing and consent requirements.'],
        ['How do I communicate with my virtual assistant?', 'You can work with your assistant by email, phone, video calls, Slack, WhatsApp or the project-management tool you already use. We set up a communication routine that matches your workflow.'],
        ['How do you keep my business data secure?', 'Assistants work under confidentiality agreements and are trained in privacy best practices. We recommend giving assistants role-based access to tools such as your CRM and password managers instead of sharing personal logins.'],
        ['Which time zones do your assistants work in?', 'We schedule your assistant around your US business hours, and our support team is available 24/7.'],
    ];
@endphp
@extends('layout.main')

@section('title', 'Virtual Assistant FAQ: Pricing, Trial & Hiring | Zingo Assist')
@section('meta_description', 'Answers to common questions about hiring a Zingo Assist virtual assistant: services, pricing, the free 2-day trial, data security, time zones and onboarding.')

@push('schema')
    @include('partials.schema-page', [
        'type' => 'page',
        'name' => 'Frequently Asked Questions',
        'description' => 'Answers to common questions about hiring a Zingo Assist virtual assistant.',
        'faqs' => array_map(fn ($f) => [$f[0], html_entity_decode(strip_tags($f[1]), ENT_QUOTES)], $faqs),
    ])
@endpush


@push('css')
    <style>
        .header-section {
            background: #A52673;
        }
        
        /* FAQ Page Improvements */
        .faq-section {
            background: #f8f9fa;
        }
        
        .faq-wrapper {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.12);
            overflow: hidden;
            padding: 10px 0;
        }
        
        .faq-item {
            border-bottom: 2px solid #f0f0f0;
            transition: all 0.3s ease;
        }
        
        .faq-item:last-child {
            border-bottom: none;
        }
        
        .faq-item:hover {
            background: #fafafa;
        }
        
        .faq-item.active {
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .faq-title {
            padding: 30px 35px;
            margin: 0;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
            background: #fff;
            border: none;
            width: 100%;
            text-align: left;
        }
        
        .faq-title:hover {
            background: #f8f9fa;
        }
        
        .faq-item.active .faq-title {
            background: #fafafa;
        }
        
        .faq-title .title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #1a1a1a;
            margin: 0;
            flex: 1;
            letter-spacing: -0.3px;
        }
        
        .faq-item.active .faq-title .title {
            color: #A52673;
        }
        
        .faq-title .right-icon {
            width: 35px;
            height: 35px;
            background: #A52673;
            border-radius: 50%;
            position: relative;
            transition: all 0.3s ease;
            flex-shrink: 0;
            margin-left: 20px;
            box-shadow: 0 2px 8px rgba(165, 38, 115, 0.3);
        }
        
        .faq-title .right-icon::before,
        .faq-title .right-icon::after {
            content: '';
            position: absolute;
            background: #fff;
            transition: all 0.3s ease;
        }
        
        .faq-title .right-icon::before {
            width: 14px;
            height: 2.5px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .faq-title .right-icon::after {
            width: 2.5px;
            height: 14px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .faq-item.active .faq-title .right-icon::after {
            transform: translate(-50%, -50%) rotate(90deg);
        }
        
        .faq-item.active .faq-title .right-icon {
            background: #8B1E5A;
            transform: scale(1.05);
        }
        
        .faq-content {
            padding: 25px 30px 30px;
            background: #ffffff;
            border-top: 2px solid #f0f0f0;
            display: none;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
        }
        
        .faq-item.open .faq-content,
        .faq-item.active .faq-content {
            display: block !important;
            max-height: 2000px;
            padding: 25px 30px 30px;
            visibility: visible !important;
            opacity: 1 !important;
        }
        
        .faq-content p {
            font-size: 1.15rem !important;
            line-height: 1.9 !important;
            color: #000000 !important;
            margin-bottom: 25px !important;
            font-weight: 500 !important;
            letter-spacing: 0.1px;
            opacity: 1 !important;
            text-shadow: none !important;
            visibility: visible !important;
            display: block !important;
        }
        
        .faq-content {
            color: #000000 !important;
        }
        
        .faq-content * {
            color: inherit;
        }
        
        .faq-inner-thumb-area {
            text-align: center;
            margin-top: 20px;
        }
        
        .faq-inner-thumb img {
            max-width: 200px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        .banner-section.two {
            background: linear-gradient(135deg, #A52673 0%, #8B1E5A 100%);
        }
        
        .banner-content .title {
            color: #fff;
            font-size: 3rem;
            font-weight: 700;
        }
        
        @media (max-width: 768px) {
            .banner-content .title {
                font-size: 2.2rem;
            }
            
            .faq-title {
                padding: 25px 20px;
            }
            
            .faq-content {
                padding: 0 20px 25px;
            }
            
            .faq-title .title {
                font-size: 1.25rem;
                font-weight: 700;
            }
            
            .faq-content p {
                font-size: 1.1rem;
                line-height: 1.8;
                color: #000000;
                font-weight: 500;
            }
            
            .faq-title .right-icon {
                width: 32px;
                height: 32px;
                margin-left: 15px;
            }
        }
    </style>
@endpush


@section('content')
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="banner-section two inner">
        <div class="banner-element-four two">
            <img src="assets/images/element/element-5.png" alt="element" loading="lazy" decoding="async">
        </div>
        <div class="banner-element-five two">
            <img src="assets/images/element/element-7.png" alt="element" loading="lazy" decoding="async">
        </div>
        <div class="banner-element-nineteen two">
            <img src="assets/images/element/element-6.png" alt="element" loading="lazy" decoding="async">
        </div>
        <div class="banner-element-twenty-two two">
            <img src="assets/images/element/element-69.png" alt="element" loading="lazy" decoding="async">
        </div>
        <div class="banner-element-twenty-three two">
            <img src="assets/images/element/element-70.png" alt="element" loading="lazy" decoding="async">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-xl-12 mb-30">
                    <div class="banner-content two">
                        <div class="banner-content-header">
                            <h1 class="title">Frequently Asked Questions About Hiring a Virtual Assistant</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Scroll-To-Top
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Scroll-To-Top
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Faq
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="faq-section ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-12">
                    <div class="faq-wrapper">
                        @foreach ($faqs as $i => $faq)
                        <div class="faq-item{{ $i === 0 ? ' active open' : '' }}">
                            <h2 class="faq-title"><span class="title">{{ $faq[0] }}</span><span class="right-icon"></span></h2>
                            <div class="faq-content">
                                <p>{!! $faq[1] !!}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('partials.trail')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            // Initialize - hide all FAQ content except the one with 'active open'
            faqItems.forEach(item => {
                const content = item.querySelector('.faq-content');
                if (!item.classList.contains('open') && !item.classList.contains('active')) {
                    content.style.display = 'none';
                    content.style.maxHeight = '0';
                } else {
                    content.style.display = 'block';
                    content.style.maxHeight = '2000px';
                }
            });
            
            // Add click event to each FAQ title
            faqItems.forEach(item => {
                const title = item.querySelector('.faq-title');
                const content = item.querySelector('.faq-content');
                
                title.addEventListener('click', function() {
                    const isActive = item.classList.contains('active');
                    
                    // Close all FAQ items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            otherItem.classList.remove('active', 'open');
                            const otherContent = otherItem.querySelector('.faq-content');
                            otherContent.style.display = 'none';
                            otherContent.style.maxHeight = '0';
                        }
                    });
                    
                    // Toggle current item
                    if (isActive) {
                        item.classList.remove('active', 'open');
                        content.style.display = 'none';
                        content.style.maxHeight = '0';
                    } else {
                        item.classList.add('active', 'open');
                        content.style.display = 'block';
                        content.style.maxHeight = '2000px';
                        // Force visibility
                        content.style.opacity = '1';
                        content.style.color = '#000000';
                    }
                });
            });
        });
    </script>

@endsection
