@extends('layout.main')

@section('title', 'Real Estate Cold Calling Services | ZingoAssist')
@section('meta_description', 'Boost sales with ZingoAssist real estate cold calling services. Expert B2B and B2C cold calling for high-quality leads, appointments, and conversions.')

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
                Real Estate <span class="sp-hero-title-highlight">Cold Calling Services</span>
            </h1>

            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="150" data-aos-duration="700">
                Looking to increase sales and connect with potential clients directly? Our real estate cold calling services at ZingoAssist are designed to help businesses, particularly in the real estate sector, generate high-quality leads and boost conversions. Whether you are a real estate agent, broker, or a B2B company, our expert cold calling team ensures that your outreach is professional, efficient, and results-driven.
            </p>
            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">
                With our skilled team, proven strategies, and advanced tools, ZingoAssist delivers cold calling services that maximize ROI, increase your sales pipeline, and drive measurable business growth.
            </p>

            <div class="sp-hero-actions" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Get a Free Consultation <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--outline">
                    Start Your Cold Calling Campaign <i class="fas fa-rocket"></i>
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
                    <i class="fas fa-phone-volume"></i>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="700">
                <span class="sp-about-label">Overview</span>
                <h2 class="sp-about-title">What Are Cold Calling Services?</h2>
                <p class="sp-about-text">
                    Cold calling services involve reaching out to potential clients who may not yet be aware of your services or products. At ZingoAssist, we specialize in real estate cold calling services that help agents and businesses generate qualified leads, set appointments, and close deals faster.
                </p>
                <p class="sp-about-text">
                    Cold calling remains one of the most direct ways to connect with prospects. It allows your business to engage potential clients personally, answer questions immediately, and create meaningful conversations that can turn into long-term relationships.
                </p>
                <p class="sp-about-text">
                    Our services are tailored for businesses looking to grow their client base by engaging prospects directly through professional and persuasive phone conversations. Using a combination of targeted lists, expertly crafted scripts, and real-time performance tracking, we ensure each call has a higher probability of conversion.
                </p>
                <div class="sp-highlight-box">
                    <p>The goal of our service is simple: to generate high-quality leads, increase appointment rates, and help your business close more deals effectively.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CORE FEATURES ===================== -->
<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Key Features</span>
            <h2 class="sp-section-title">Core Components of Our Cold Calling Services</h2>
            <p class="sp-section-desc">Professional outreach strategies designed to fill your sales pipeline.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-bullseye"></i></div>
                    <h3 class="sp-card-title">Targeted Outreach</h3>
                    <p class="sp-card-text">We identify the ideal audience through demographic research, market analysis, and lead profiling, ensuring every call reaches prospects most likely to convert.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-scroll"></i></div>
                    <h3 class="sp-card-title">Professional Scripts</h3>
                    <p class="sp-card-text">Carefully crafted scripts tailored to your business, goals, and audience. We prioritize a natural, conversational approach that builds trust.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="far fa-calendar-check"></i></div>
                    <h3 class="sp-card-title">Appointment Setting</h3>
                    <p class="sp-card-text">We set appointments for your sales team with qualified prospects, so your team can focus on closing deals rather than preliminary outreach.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-database"></i></div>
                    <h3 class="sp-card-title">CRM Integration</h3>
                    <p class="sp-card-text">All calls, interactions, and lead information are integrated into your CRM system for seamless lead management and efficient follow-ups.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-chart-line"></i></div>
                    <h3 class="sp-card-title">Performance Reporting</h3>
                    <p class="sp-card-text">Detailed analytics that track call outcomes, lead quality, and campaign performance, enabling continuous refinement for better results.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-sync-alt"></i></div>
                    <h3 class="sp-card-title">Follow-Up Sequences</h3>
                    <p class="sp-card-text">Structured follow-up sequences using calls, emails, or texts to nurture leads until they are ready to engage or convert.</p>
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
            <h2 class="sp-section-title">Why Choose ZingoAssist for Real Estate Cold Calling Services?</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">01</div>
                    <div>
                        <h4 class="sp-choose-title">Proven Expertise</h4>
                        <p class="sp-choose-text">Our team has years of experience in real estate cold calling services, generating high-quality leads for agents, brokers, and real estate businesses nationwide.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">02</div>
                    <div>
                        <h4 class="sp-choose-title">Tailored Campaigns</h4>
                        <p class="sp-choose-text">We design cold calling campaigns that align with your business goals and target audience, ensuring maximum engagement.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">03</div>
                    <div>
                        <h4 class="sp-choose-title">High-Quality Leads</h4>
                        <p class="sp-choose-text">We focus on delivering leads that are ready to engage, minimizing time spent on unqualified contacts.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">04</div>
                    <div>
                        <h4 class="sp-choose-title">Full-Service Management</h4>
                        <p class="sp-choose-text">From scripting to appointment setting, we manage every aspect of your cold calling campaign, allowing you to focus on closing deals.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">05</div>
                    <div>
                        <h4 class="sp-choose-title">B2B & B2C Capabilities</h4>
                        <p class="sp-choose-text">We specialize in B2B cold calling services as well as consumer outreach, adapting our approach to your industry and client type.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">06</div>
                    <div>
                        <h4 class="sp-choose-title">Scalable Solutions</h4>
                        <p class="sp-choose-text">Our campaigns are flexible and scalable, growing alongside your business to meet increasing lead generation needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">07</div>
                    <div>
                        <h4 class="sp-choose-title">Data-Driven Strategies</h4>
                        <p class="sp-choose-text">By analyzing call metrics and performance data, we continuously optimize campaigns for higher conversion rates.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== PROCESS / WORKFLOW ===================== -->
<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Workflow</span>
            <h2 class="sp-section-title">How Our Cold Calling Process Works</h2>
        </div>
        <div class="sp-timeline">
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-timeline-dot">1</div>
                <div class="sp-timeline-card">
                    <h4>Consultation & Goal Setting</h4>
                    <p>We start by understanding your business, target market, and sales objectives. This helps us design a cold calling strategy that aligns with your goals and identifies the key performance indicators (KPIs) for success.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="100">
                <div class="sp-timeline-dot">2</div>
                <div class="sp-timeline-card">
                    <h4>Prospect Research & List Building</h4>
                    <p>Using advanced tools and market research, we build targeted lists of potential clients most likely to engage with your services. We ensure the leads we contact are relevant, qualified, and aligned with your business goals.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="200">
                <div class="sp-timeline-dot">3</div>
                <div class="sp-timeline-card">
                    <h4>Cold Call Execution</h4>
                    <p>Our trained agents execute calls with professionalism, following proven scripts and engaging prospects effectively. They are skilled in objection handling, appointment setting, and creating positive first impressions.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="300">
                <div class="sp-timeline-dot">4</div>
                <div class="sp-timeline-card">
                    <h4>Lead Qualification & Follow-Up</h4>
                    <p>We qualify each lead based on your criteria, ensuring that your sales team focuses only on prospects with a high likelihood of conversion. Follow-up sequences nurture leads until they are ready to engage.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="400">
                <div class="sp-timeline-dot">5</div>
                <div class="sp-timeline-card">
                    <h4>Performance Reporting & Optimization</h4>
                    <p>Our reports provide actionable insights on campaign performance, call outcomes, and lead quality. This allows continuous optimization to improve results over time.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== IN ACTION ===================== -->
<section class="sp-section">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">In Action</span>
            <h2 class="sp-section-title">Real Estate Cold Calling Services in Action</h2>
        </div>
        <div class="row align-items-center g-5">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <p class="sp-about-text">
                    Imagine you're a real estate agent struggling to reach potential buyers for new properties. ZingoAssist steps in to:
                </p>
                <ul class="sp-about-list">
                    <li><i class="fas fa-check-circle"></i> Identify your ideal client profile based on location, budget, and property type</li>
                    <li><i class="fas fa-check-circle"></i> Reach out to prospects who may not have considered your listings</li>
                    <li><i class="fas fa-check-circle"></i> Engage in conversations, provide valuable information, and answer questions</li>
                    <li><i class="fas fa-check-circle"></i> Schedule appointments for your sales team to conduct property tours</li>
                </ul>
                <div class="sp-highlight-box mt-4">
                    <p>The result? A consistent pipeline of qualified prospects, reduced lead generation effort, and increased property sales.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== INDUSTRIES ===================== -->
<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Industries</span>
            <h2 class="sp-section-title">Industries We Serve</h2>
            <p class="sp-section-desc">Our real estate cold calling services cater to a wide range of industries.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-home"></i></div>
                    <h3 class="sp-card-title">Real Estate Agencies & Brokers</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-building"></i></div>
                    <h3 class="sp-card-title">B2B Enterprises</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-university"></i></div>
                    <h3 class="sp-card-title">Financial Services</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-shopping-cart"></i></div>
                    <h3 class="sp-card-title">E-Commerce Businesses</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-briefcase"></i></div>
                    <h3 class="sp-card-title">Professional Services (Legal, Consulting, etc.)</h3>
                </div>
            </div>
        </div>
        <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="160">
            <p class="sp-about-text">No matter the industry, ZingoAssist crafts strategies that ensure your business generates high-quality leads efficiently.</p>
        </div>
    </div>
</section>

<!-- ===================== STAND OUT ===================== -->
<section class="sp-section">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">What Sets Us Apart</span>
            <h2 class="sp-section-title">Why Our Cold Calling Services Stand Out</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-sliders-h"></i></div>
                    <h3 class="sp-card-title">Customized Solutions</h3>
                    <p class="sp-card-text">We understand every business is unique. Our team develops campaigns tailored to your industry, audience, and objectives.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-microchip"></i></div>
                    <h3 class="sp-card-title">Advanced Technology</h3>
                    <p class="sp-card-text">We leverage advanced analytics, CRM tools, and lead scoring systems to maximize call efficiency and effectiveness.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-user-tie"></i></div>
                    <h3 class="sp-card-title">Skilled Agents</h3>
                    <p class="sp-card-text">Our cold calling team is trained in persuasive communication, objection handling, and relationship building to ensure maximum results.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-file-alt"></i></div>
                    <h3 class="sp-card-title">Transparent Reporting</h3>
                    <p class="sp-card-text">Receive detailed insights on lead quality, call outcomes, and ROI so you always know your campaign's performance.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-trophy"></i></div>
                    <h3 class="sp-card-title">Proven Track Record</h3>
                    <p class="sp-card-text">Our clients consistently see higher appointment rates, improved lead quality, and increased sales after partnering with us.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== TESTIMONIALS ===================== -->
<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Success Stories</span>
            <h2 class="sp-section-title">What Our Clients Say</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"ZingoAssist helped us fill our pipeline with qualified real estate leads. Their cold calling team is professional, persistent, and highly effective."</p>
                    <p class="sp-testimonial-author">— John D., Realtor</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"The cold calling services from ZingoAssist are exceptional. Our appointment setting has never been easier."</p>
                    <p class="sp-testimonial-author">— Sarah P., Broker</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Thanks to ZingoAssist, we now have a reliable system for generating B2B leads through cold calls. The results are impressive."</p>
                    <p class="sp-testimonial-author">— Michael R., Business Owner</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"We increased our property sales by 40% using ZingoAssist's real estate cold calling services. Highly recommended!"</p>
                    <p class="sp-testimonial-author">— Emily T., Realtor</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== BENEFITS ===================== -->
<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Benefits</span>
            <h2 class="sp-section-title">Benefits of Professional Cold Calling Services</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-stream"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Consistent Lead Flow</h4>
                        <p class="sp-benefit-text">Keep your sales pipeline full of potential clients ready to engage.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-chart-line"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Higher Conversion Rates</h4>
                        <p class="sp-benefit-text">Targeted outreach ensures leads are interested and ready to take the next step.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-clock"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Time-Saving</h4>
                        <p class="sp-benefit-text">Your team can focus on closing deals while we handle prospecting and initial outreach.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-expand-arrows-alt"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Scalable Campaigns</h4>
                        <p class="sp-benefit-text">Increase or reduce campaigns based on your business needs and growth targets.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-chart-bar"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Data-Driven Decisions</h4>
                        <p class="sp-benefit-text">Analytics guide smarter marketing strategies and campaign improvements.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-handshake"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Enhanced Client Relationships</h4>
                        <p class="sp-benefit-text">Personalized calls build trust, loyalty, and lasting business relationships.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-dollar-sign"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Cost-Effective Marketing</h4>
                        <p class="sp-benefit-text">Cold calling provides measurable ROI compared to other marketing channels.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== FAQ ===================== -->
<section class="sp-section">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">FAQs</span>
            <h2 class="sp-section-title">Frequently Asked Questions</h2>
        </div>
        <div class="sp-faq-wrap" data-aos="fade-up" data-aos-delay="100">
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">What are cold calling services?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Cold calling services involve reaching out to potential clients directly to generate leads, appointments, or sales opportunities.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">How does ZingoAssist handle real estate cold calling?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">We use professional scripts, targeted lists, and skilled agents to generate qualified leads for real estate agents and brokers.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Do you provide B2B cold calling services?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes, our B2B cold calling services help businesses connect with other companies and generate high-quality leads.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">How do you ensure lead quality?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">We qualify leads using buyer personas, call scoring, and strict criteria to ensure only relevant contacts are delivered.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Can you integrate with my CRM system?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Absolutely. Our services include seamless CRM integration for efficient lead management.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">How quickly can I see results?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Most clients see measurable results within 4–6 weeks of campaign launch.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">What industries do you serve?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">We serve real estate, finance, B2B, e-commerce, and professional services.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CTA ===================== -->
<section class="sp-section" style="padding-bottom: 100px;">
    <div class="container">
        <div class="sp-cta" data-aos="fade-up" data-aos-duration="700">
            <h2 class="sp-cta-title">Get Started with ZingoAssist</h2>
            <p class="sp-cta-text">
                If you're looking for real estate cold calling services or general cold calling services, ZingoAssist delivers campaigns that generate measurable results. Partner with us to:
            </p>
            <ul class="sp-cta-list">
                <li><i class="fas fa-check-circle"></i> Drive high-quality leads</li>
                <li><i class="fas fa-check-circle"></i> Increase conversions</li>
                <li><i class="fas fa-check-circle"></i> Expand your client base</li>
                <li><i class="fas fa-check-circle"></i> Maximize ROI</li>
            </ul>
            <div class="sp-hero-actions">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Start Your Cold Calling Campaign <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--outline">
                    Request a Free Consultation <i class="fas fa-paper-plane"></i>
                </a>
            </div>
        </div>
    </div>
</section>

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
