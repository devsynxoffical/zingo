@extends('layout.main')

@section('title', 'About Zingo Assist | #1 VA Agency in USA')
@section('meta_description', 'Learn more about the Zingo Assist, the #1 VA agency in the USA, offers expert virtual assistance, digital solutions, and business support for growth.')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/about-page.css') }}?v={{ time() }}">
@endpush

@section('content')

<div class="ap-page">

<!-- ==================== HERO ==================== -->
<section class="ap-hero">
    <!-- Gradient blobs -->
    <div class="ap-hero-blob ap-hero-blob--1"></div>
    <div class="ap-hero-blob ap-hero-blob--2"></div>
    <div class="ap-hero-blob ap-hero-blob--3"></div>
    <div class="ap-hero-blob ap-hero-blob--4"></div>

    <!-- Floating geometric shapes -->
    <div class="ap-shape ap-shape--circle ap-s1"></div>
    <div class="ap-shape ap-shape--ring ap-s2"></div>
    <div class="ap-shape ap-shape--dot ap-s3"></div>
    <div class="ap-shape ap-shape--circle ap-s4"></div>
    <div class="ap-shape ap-shape--ring ap-s5"></div>
    <div class="ap-shape ap-shape--dot ap-s6"></div>
    <div class="ap-shape ap-shape--circle ap-s7"></div>
    <div class="ap-shape ap-shape--dot ap-s8"></div>
    <div class="ap-shape ap-shape--diamond ap-s9"></div>
    <div class="ap-shape ap-shape--dot ap-s10"></div>

    <div class="container">
        <div class="ap-hero-inner">
            <div class="ap-hero-badge" data-aos="fade-down" data-aos-duration="600">
                <i class="fas fa-star"></i> #1 Virtual Assistant Agency in the USA
            </div>

            <h1 class="ap-hero-title" data-aos="fade-up" data-aos-duration="700">
                About <span>Zingo Assist</span>
            </h1>

            <p class="ap-hero-subtitle" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700">
                    Your Trusted Partner for Virtual Assistance and Digital Solutions
                </p>

            <div class="ap-hero-divider" data-aos="fade-up" data-aos-delay="150" data-aos-duration="600"></div>

            <p class="ap-hero-desc" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">
                        At Zingo Assist, we are committed to helping businesses grow and thrive through innovative virtual assistance and digital solutions. With years of experience and a global presence, we empower entrepreneurs, professionals, and businesses to focus on what matters most while we handle the operational, technical, and creative tasks that drive results.
                    </p>

            <p class="ap-hero-desc" data-aos="fade-up" data-aos-delay="250" data-aos-duration="700">
                        From startups to established enterprises, our team provides tailored services that are designed to enhance productivity, streamline operations, and generate measurable outcomes. We believe in combining technology, expertise, and personalized support to help our clients succeed in a competitive digital world.
                    </p>

            <div class="ap-hero-actions" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                <a href="{{ route('contact') }}" class="ap-btn ap-btn--white">
                        Get Started Today <i class="fas fa-arrow-right"></i>
                    </a>
                <a href="{{ route('service') }}" class="ap-btn ap-btn--outline">
                        Explore Our Services <i class="fas fa-th-large"></i>
                    </a>
                </div>
        </div>
    </div>

    <!-- Stats bar pinned to hero bottom -->
    <div class="ap-hero-stats">
        <div class="ap-hero-stats-inner" data-aos="fade-up" data-aos-delay="350" data-aos-duration="700">
            <div class="ap-hero-stat-item">
                <div class="ap-hero-stat-num"><span class="ap-counter" data-target="3">0</span>+</div>
                <div class="ap-hero-stat-label">Years Excellence</div>
            </div>
            <div class="ap-hero-stat-item">
                <div class="ap-hero-stat-num"><span class="ap-counter" data-target="250">0</span>+</div>
                <div class="ap-hero-stat-label">Team Specialists</div>
            </div>
            <div class="ap-hero-stat-item">
                <div class="ap-hero-stat-num"><span class="ap-counter" data-target="25">0</span>+</div>
                <div class="ap-hero-stat-label">Countries Served</div>
            </div>
            <div class="ap-hero-stat-item">
                <div class="ap-hero-stat-num"><span class="ap-counter" data-target="500">0</span>+</div>
                <div class="ap-hero-stat-label">Happy Clients</div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== VISION & MISSION ==================== -->
<section class="ap-section">
    <div class="container">
        <div class="ap-section-header" data-aos="fade-up">
            <span class="ap-label">Who We Are</span>
            <h2 class="ap-section-title">Our Vision & Mission</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="700">
                <div class="ap-vm-card">
                    <div class="ap-vm-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="ap-vm-title">Our Vision</h3>
                    <p class="ap-vm-text">
                        Our vision is to be recognized globally as a leading provider of virtual assistance and digital solutions that empower businesses to reach their full potential. We aim to transform the way companies operate by combining skilled professionals, advanced tools, and tailored workflows to deliver measurable results.
                    </p>
                    <br>
                    <p class="ap-vm-text">
                        We envision a future where businesses of all sizes can operate smarter, expand efficiently, and achieve sustainable growth while relying on Zingo Assist to handle critical operational, digital, and creative tasks. Our mission is to provide scalable, reliable, and innovative solutions that enhance productivity, improve client satisfaction, and drive business success.
                    </p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="700">
                <div class="ap-vm-card">
                    <div class="ap-vm-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="ap-vm-title">Our Mission</h3>
                    <p class="ap-vm-text">
                        At Zingo Assist, our mission is to provide comprehensive support through virtual assistance, digital marketing, and IT solutions that empower clients to focus on growth and innovation. We are dedicated to:
                    </p>
                    <ul class="ap-vm-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Delivering high-quality, customized services that meet unique business needs</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Leveraging technology and industry expertise to improve efficiency and productivity</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Building long-term partnerships with businesses worldwide</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Ensuring confidentiality, reliability, and professionalism in every task we handle</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Supporting growth through innovative, scalable, and results-driven solutions</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== CORE SERVICES ==================== -->
<section class="ap-section ap-section--gray">
    <div class="container">
        <div class="ap-section-header" data-aos="fade-up">
            <span class="ap-label">What We Do</span>
            <h2 class="ap-section-title">Our Core Services</h2>
            <p class="ap-section-desc">We offer a wide range of professional services designed to support your business across operational, digital, and creative areas.</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="ap-service-card">
                    <div class="ap-service-icon"><i class="fas fa-headset"></i></div>
                    <span class="ap-service-num">Service 01</span>
                    <h3 class="ap-service-title">Cold Calling Services</h3>
                    <p class="ap-service-text">
                        We provide skilled cold calling solutions to generate leads, schedule appointments, and increase sales opportunities for businesses. Our team ensures your outreach campaigns are professional, effective, and ROI-focused.
                    </p>
                    <a href="{{ route('service.cold_calling') }}" class="ap-service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="ap-service-card">
                    <div class="ap-service-icon"><i class="fas fa-user-clock"></i></div>
                    <span class="ap-service-num">Service 02</span>
                    <h3 class="ap-service-title">Personal Assistance Services</h3>
                    <p class="ap-service-text">
                        Our personal assistance services help busy professionals manage schedules, communications, and administrative tasks efficiently. From managing calendars to handling correspondence, we provide reliable support to keep you organized.
                    </p>
                    <a href="{{ route('service.personal_assistance') }}" class="ap-service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="ap-service-card">
                    <div class="ap-service-icon"><i class="fas fa-building"></i></div>
                    <span class="ap-service-num">Service 03</span>
                    <h3 class="ap-service-title">Virtual Property Management Services</h3>
                    <p class="ap-service-text">
                        Zingo Assist offers comprehensive virtual property management services that help real estate professionals manage listings, tenants, and administrative tasks remotely, ensuring smooth property operations.
                    </p>
                    <a href="{{ route('service.virtual_property_management') }}" class="ap-service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="ap-service-card">
                    <div class="ap-service-icon"><i class="fas fa-file-contract"></i></div>
                    <span class="ap-service-num">Service 04</span>
                    <h3 class="ap-service-title">Real Estate Transaction Coordinator Services</h3>
                    <p class="ap-service-text">
                        Our real estate transaction coordinator services streamline every step of the transaction process, from contract to close. Agents and brokers can focus on client relationships while we handle documentation, deadlines, and communication.
                    </p>
                    <a href="{{ route('service.real_estate_transaction_coordinator') }}" class="ap-service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="ap-service-card">
                    <div class="ap-service-icon"><i class="fas fa-search-dollar"></i></div>
                    <span class="ap-service-num">Service 05</span>
                    <h3 class="ap-service-title">SEO Services</h3>
                    <p class="ap-service-text">
                        We provide full-service SEO solutions to improve online visibility, drive organic traffic, and generate leads. Our services include keyword research, on-page and off-page SEO, technical optimization, and local SEO strategies.
                    </p>
                    <a href="{{ route('service.search_seo') }}" class="ap-service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="ap-service-card">
                    <div class="ap-service-icon"><i class="fas fa-code"></i></div>
                    <span class="ap-service-num">Service 06</span>
                    <h3 class="ap-service-title">Web Development Services</h3>
                    <p class="ap-service-text">
                        Our real estate web development services create responsive, high-performing, and conversion-focused websites. From custom design to IDX integration and SEO-ready architecture, we help businesses build a strong digital presence.
                    </p>
                    <a href="{{ route('service.web_development') }}" class="ap-service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ route('service') }}" class="ap-explore-btn">
                Explore All Services <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- ==================== WHY CHOOSE US ==================== -->
<section class="ap-section">
    <div class="container">
        <div class="ap-section-header" data-aos="fade-up">
            <span class="ap-label">Our Advantage</span>
            <h2 class="ap-section-title">Why Choose Zingo Assist</h2>
            <p class="ap-section-desc">Choosing the right partner for virtual assistance and digital solutions can make all the difference in your business success. Here is why businesses trust Zingo Assist:</p>
        </div>

        <div class="ap-choose-grid">
            <div class="ap-choose-card" data-aos="fade-up" data-aos-delay="0">
                <h4 class="ap-choose-title">Experienced Professionals</h4>
                <p class="ap-choose-text">Our team has years of experience delivering high-quality services across industries.</p>
            </div>
            <div class="ap-choose-card" data-aos="fade-up" data-aos-delay="80">
                <h4 class="ap-choose-title">Customized Solutions</h4>
                <p class="ap-choose-text">Every service is tailored to your business goals, workflow, and brand identity.</p>
            </div>
            <div class="ap-choose-card" data-aos="fade-up" data-aos-delay="160">
                <h4 class="ap-choose-title">Advanced Tools & Technology</h4>
                <p class="ap-choose-text">We use modern platforms and automation to streamline processes and improve results.</p>
            </div>
            <div class="ap-choose-card" data-aos="fade-up" data-aos-delay="0">
                <h4 class="ap-choose-title">Reliable & Confidential</h4>
                <p class="ap-choose-text">All tasks are handled with professionalism, discretion, and security.</p>
            </div>
            <div class="ap-choose-card" data-aos="fade-up" data-aos-delay="80">
                <h4 class="ap-choose-title">Scalable Services</h4>
                <p class="ap-choose-text">From startups to large enterprises, our services grow with your business.</p>
            </div>
            <div class="ap-choose-card" data-aos="fade-up" data-aos-delay="160">
                <h4 class="ap-choose-title">Proven Results</h4>
                <p class="ap-choose-text">Clients consistently report increased productivity, better organization, and measurable growth.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==================== EXPERIENCE & PARTNERS ==================== -->
<section class="ap-section ap-section--gray">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="700">
                <span class="ap-exp-label">Proven Track Record</span>
                <h2 class="ap-exp-title">Our Experience</h2>
                <p class="ap-exp-text">
                    With over 3+ years of excellence, 250+ team specialists, and clients across 25+ countries, Zingo Assist has consistently delivered high-quality virtual assistance and digital solutions. Our experience spans multiple industries, including real estate, startups, corporate businesses, and creative agencies. We combine strategic thinking, innovative technology, and skilled professionals to deliver results that matter.
                </p>

                <h2 class="ap-exp-title" style="margin-top: 36px;">Our Partners</h2>
                <p class="ap-exp-text">
                    We have partnered with businesses, agencies, and technology providers worldwide to deliver end-to-end solutions. Our collaborative approach ensures every project receives the best tools, support, and expertise available.
                </p>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="700">
                <div class="row g-4">
                    <div class="col-6">
                        <div class="ap-stat-box" data-aos="zoom-in" data-aos-delay="0">
                            <div class="ap-stat-box-icon"><i class="fas fa-award"></i></div>
                            <div class="ap-stat-box-num"><span class="ap-counter" data-target="3">0</span>+</div>
                            <div class="ap-stat-box-label">Years Excellence</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="ap-stat-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="ap-stat-box-icon"><i class="fas fa-users"></i></div>
                            <div class="ap-stat-box-num"><span class="ap-counter" data-target="250">0</span>+</div>
                            <div class="ap-stat-box-label">Team Specialists</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="ap-stat-box" data-aos="zoom-in" data-aos-delay="200">
                            <div class="ap-stat-box-icon"><i class="fas fa-globe-americas"></i></div>
                            <div class="ap-stat-box-num"><span class="ap-counter" data-target="25">0</span>+</div>
                            <div class="ap-stat-box-label">Countries Served</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="ap-stat-box" data-aos="zoom-in" data-aos-delay="300">
                            <div class="ap-stat-box-icon"><i class="fas fa-smile-beam"></i></div>
                            <div class="ap-stat-box-num"><span class="ap-counter" data-target="500">0</span>+</div>
                            <div class="ap-stat-box-label">Happy Clients</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== TEAM ==================== -->
<section class="ap-section">
    <div class="container">
        <div class="ap-section-header" data-aos="fade-up">
            <span class="ap-label">The Experts</span>
            <h2 class="ap-section-title">Meet Our Team</h2>
            <p class="ap-section-desc">At Zingo Assist, our success comes from our talented global team of specialists. Each member is dedicated to helping businesses achieve their goals through expertise, creativity, and commitment.</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="ap-team-card">
                    <div class="ap-team-avatar">
                        <i class="fas fa-user-tie"></i>
            </div>
                    <h4 class="ap-team-role">Team Leaders</h4>
                    <p class="ap-team-desc">Experienced managers who oversee project execution, quality control, and client satisfaction.</p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="ap-team-card">
                    <div class="ap-team-avatar">
                        <i class="fas fa-headset"></i>
            </div>
                    <h4 class="ap-team-role">Virtual Assistants</h4>
                    <p class="ap-team-desc">Skilled professionals providing administrative, operational, and personal support.</p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="ap-team-card">
                    <div class="ap-team-avatar">
                        <i class="fas fa-bullhorn"></i>
        </div>
                    <h4 class="ap-team-role">Digital Marketing Experts</h4>
                    <p class="ap-team-desc">Strategists who drive SEO, social media campaigns, and online visibility.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="ap-team-card">
                    <div class="ap-team-avatar">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h4 class="ap-team-role">Web Developers & Designers</h4>
                    <p class="ap-team-desc">Professionals who create responsive, mobile-friendly, and high-performing websites.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="ap-team-card">
                    <div class="ap-team-avatar">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h4 class="ap-team-role">Graphic Designers & Editors</h4>
                    <p class="ap-team-desc">Creatives who deliver visually appealing branding, marketing materials, and multimedia content.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="ap-team-card">
                    <div class="ap-team-avatar">
                        <i class="fas fa-server"></i>
                    </div>
                    <h4 class="ap-team-role">IT & Support Specialists</h4>
                    <p class="ap-team-desc">Technical experts ensuring seamless operations, secure networks, and reliable IT solutions.</p>
                </div>
            </div>
        </div>

        <p class="text-center mt-5" data-aos="fade-up" style="color: var(--ap-muted); font-size: .95rem;">
            Our team works collaboratively to deliver comprehensive services and solutions tailored to your business.
        </p>
    </div>
</section>

<!-- ==================== TESTIMONIALS ==================== -->
<section class="ap-section ap-section--gray">
    <div class="container">
        <div class="ap-section-header" data-aos="fade-up">
            <span class="ap-label">Client Stories</span>
            <h2 class="ap-section-title">Testimonials</h2>
        </div>

        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="ap-testimonial">
                    <div class="ap-testimonial-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="ap-testimonial-text">"Zingo Assist has transformed our operations. Their virtual assistance and digital services allowed us to focus on growth while they handled everything efficiently."</p>
                    <p class="ap-testimonial-author">— Jennifer M., Business Owner</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="ap-testimonial">
                    <div class="ap-testimonial-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="ap-testimonial-text">"The team is reliable, professional, and extremely skilled. Their real estate transaction coordination services saved us hours every week."</p>
                    <p class="ap-testimonial-author">— Michael R., Real Estate Broker</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="ap-testimonial">
                    <div class="ap-testimonial-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="ap-testimonial-text">"Our website traffic and leads have improved dramatically thanks to their SEO and web development services. Highly recommended."</p>
                    <p class="ap-testimonial-author">— Sarah P., Entrepreneur</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="ap-testimonial">
                    <div class="ap-testimonial-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="ap-testimonial-text">"The virtual assistance solutions provided by Zingo Assist are top-notch. From cold calling to administrative support, their team has exceeded our expectations."</p>
                    <p class="ap-testimonial-author">— David L., Startup Founder</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== FAQs ==================== -->
<section class="ap-section">
    <div class="container">
        <div class="ap-section-header" data-aos="fade-up">
            <span class="ap-label">Questions</span>
            <h2 class="ap-section-title">FAQs</h2>
        </div>

        <div class="ap-faq-wrap" data-aos="fade-up" data-aos-delay="100">
            <div class="ap-faq">
                <div class="ap-faq-header">
                    <h4 class="ap-faq-q">1. What services does Zingo Assist provide?</h4>
                    <span class="ap-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="ap-faq-body">
                    <div class="ap-faq-body-inner">We provide a wide range of services including cold calling, personal assistance, virtual property management, real estate transaction coordination, SEO, web development, digital marketing, graphic design, video editing, and IT support.</div>
                </div>
            </div>
            <div class="ap-faq">
                <div class="ap-faq-header">
                    <h4 class="ap-faq-q">2. Can Zingo Assist handle international clients?</h4>
                    <span class="ap-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="ap-faq-body">
                    <div class="ap-faq-body-inner">Yes, our team has experience working with clients from over 25 countries, providing reliable and consistent support worldwide.</div>
                </div>
            </div>
            <div class="ap-faq">
                <div class="ap-faq-header">
                    <h4 class="ap-faq-q">3. How quickly can I start services?</h4>
                    <span class="ap-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="ap-faq-body">
                    <div class="ap-faq-body-inner">Most clients get started within 24 to 48 hours depending on the complexity of their requirements.</div>
                </div>
            </div>
            <div class="ap-faq">
                <div class="ap-faq-header">
                    <h4 class="ap-faq-q">4. Are services customizable?</h4>
                    <span class="ap-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="ap-faq-body">
                    <div class="ap-faq-body-inner">Absolutely. Every plan is tailored to your unique workflow, business goals, and industry needs.</div>
                </div>
            </div>
            <div class="ap-faq">
                <div class="ap-faq-header">
                    <h4 class="ap-faq-q">5. Do you provide ongoing support?</h4>
                    <span class="ap-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="ap-faq-body">
                    <div class="ap-faq-body-inner">Yes, we offer continuous support, maintenance, and optimization for all our services, ensuring long-term results.</div>
                </div>
            </div>
            <div class="ap-faq">
                <div class="ap-faq-header">
                    <h4 class="ap-faq-q">6. How does Zingo Assist ensure data security?</h4>
                    <span class="ap-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="ap-faq-body">
                    <div class="ap-faq-body-inner">All client information and tasks are handled with strict confidentiality, secure systems, and industry-standard protections.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== CTA ==================== -->
<section class="ap-section" style="padding-bottom: 100px;">
    <div class="container">
        <div class="ap-cta" data-aos="fade-up" data-aos-duration="800">
            <h2 class="ap-cta-title">Get Started with Zingo Assist</h2>
            <p class="ap-cta-subtitle">Partner with Zingo Assist today to:</p>
            <ul class="ap-cta-list">
                <li><i class="fas fa-check"></i> Boost productivity and efficiency</li>
                <li><i class="fas fa-check"></i> Scale operations with reliable virtual support</li>
                <li><i class="fas fa-check"></i> Improve digital presence and lead generation</li>
                <li><i class="fas fa-check"></i> Streamline administrative and creative workflows</li>
                <li><i class="fas fa-check"></i> Focus on income-generating tasks while we handle the rest</li>
            </ul>
            <div class="ap-cta-actions">
                <a href="{{ route('contact') }}" class="ap-btn ap-btn--white">
                    Start Your Project Today <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}" class="ap-btn ap-btn--outline">
                    Request a Free Consultation <i class="fas fa-paper-plane"></i>
                </a>
        </div>
        </div>
    </div>
</section>

</div><!-- .ap-page -->

<!-- ==================== SCRIPTS ==================== -->
<script>
document.addEventListener('DOMContentLoaded', function () {

    // ---- FAQ Accordion ----
    document.querySelectorAll('.ap-faq-header').forEach(function (header) {
        header.addEventListener('click', function () {
            var faq = this.closest('.ap-faq');
            var body = faq.querySelector('.ap-faq-body');
            var isOpen = faq.classList.contains('active');

            // Close all
            document.querySelectorAll('.ap-faq').forEach(function (item) {
                item.classList.remove('active');
                item.querySelector('.ap-faq-body').style.maxHeight = null;
            });

            // Open clicked if it was closed
            if (!isOpen) {
                faq.classList.add('active');
                body.style.maxHeight = body.scrollHeight + 'px';
            }
        });
    });

    // ---- Animated Counter ----
    var counters = document.querySelectorAll('.ap-counter');
    var counterObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                var el = entry.target;
                var target = parseInt(el.getAttribute('data-target'));
                var duration = 2000;
                var start = 0;
                var startTime = null;

                function easeOutCubic(t) {
                    return 1 - Math.pow(1 - t, 3);
                }

                function animate(timestamp) {
                    if (!startTime) startTime = timestamp;
                    var progress = Math.min((timestamp - startTime) / duration, 1);
                    var current = Math.floor(easeOutCubic(progress) * target);
                    el.textContent = current;
                    if (progress < 1) {
                        requestAnimationFrame(animate);
                    } else {
                        el.textContent = target;
                    }
                }

                requestAnimationFrame(animate);
                counterObserver.unobserve(el);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(function (counter) {
        counterObserver.observe(counter);
    });
});
</script>

@endsection
