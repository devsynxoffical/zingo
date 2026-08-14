@extends('layout.main')

@section('title', 'Lead Generation Services | ZingoAssist')
@section('meta_description', 'Drive qualified leads with ZingoAssist lead generation services. B2B or B2C, we deliver targeted prospects that convert into customers.')

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
                Lead Generation <span class="sp-hero-title-highlight">Services</span>
            </h1>

            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="150" data-aos-duration="700">
                Looking to drive high-quality leads and grow your business? Our lead generation services at ZingoAssist are designed to help businesses attract, engage, and convert potential customers into loyal clients. Whether you're a B2B enterprise or a B2C company, our data-driven strategies ensure you receive a consistent flow of qualified leads that fuel business growth.
            </p>
            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">
                With our expert team, advanced tools, and proven methodologies, ZingoAssist ensures that your lead generation services deliver measurable results and a strong return on investment.
            </p>

            <div class="sp-hero-actions" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Get a Free Consultation <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--outline">
                    Start Your Lead Generation Campaign <i class="fas fa-rocket"></i>
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
                    <i class="fas fa-chart-line"></i>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="700">
                <span class="sp-about-label">Overview</span>
                <h2 class="sp-about-title">What Are Lead Generation Services?</h2>
                <p class="sp-about-text">
                    Lead generation services are the backbone of modern marketing. They help businesses identify potential customers, engage them effectively, and guide them through the buying journey. At ZingoAssist, we specialize in creating targeted campaigns that attract prospects most likely to convert into sales.
                </p>
                <p class="sp-about-text">
                    Our B2B lead generation services focus on building pipelines for businesses that sell to other companies, while our lead gen services also cater to B2C businesses seeking individual clients. Using a combination of inbound marketing, content creation, paid campaigns, and CRM automation, we ensure every lead is relevant and highly qualified.
                </p>
                <div class="sp-highlight-box">
                    <p>The goal of our service is simple: to increase revenue and help your business grow by providing a steady stream of potential customers.</p>
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
            <h2 class="sp-section-title">Core Components of Our Lead Generation Services</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-bullseye"></i></div>
                    <h3 class="sp-card-title">1. Targeted Campaigns</h3>
                    <p class="sp-card-text">We create campaigns that reach your ideal audience. By analyzing demographics, behavior, and engagement patterns, our team ensures that your marketing efforts reach prospects most likely to convert.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-magnet"></i></div>
                    <h3 class="sp-card-title">2. Inbound Marketing</h3>
                    <p class="sp-card-text">Inbound marketing helps attract customers organically. Through content marketing, SEO optimization, and social media strategies, we position your brand as an authority and encourage prospects to engage.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-sync-alt"></i></div>
                    <h3 class="sp-card-title">3. Conversion Optimization</h3>
                    <p class="sp-card-text">Generating leads is only half the battle, converting them is the other half. We optimize landing pages, forms, and calls-to-action to increase conversion rates and maximize ROI.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-database"></i></div>
                    <h3 class="sp-card-title">4. CRM Integration</h3>
                    <p class="sp-card-text">Our CRM integration automates lead management, tracks interactions, and enables timely follow-ups, ensuring no opportunity is missed.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-chart-pie"></i></div>
                    <h3 class="sp-card-title">5. Data-Driven Insights</h3>
                    <p class="sp-card-text">Analytics and reporting are critical. We continuously monitor campaigns, identify high-performing strategies, and refine approaches for better results over time.</p>
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
            <h2 class="sp-section-title">Why Choose ZingoAssist for Lead Generation Services?</h2>
            <p class="sp-section-desc">Choosing the right partner for the services is essential. Here's why ZingoAssist is trusted by businesses:</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">01</div>
                    <div>
                        <h4 class="sp-choose-title">Proven Expertise</h4>
                        <p class="sp-choose-text">Our team has extensive experience running campaigns for multiple industries.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">02</div>
                    <div>
                        <h4 class="sp-choose-title">Tailored Strategies</h4>
                        <p class="sp-choose-text">We create customized plans to fit your business objectives, ensuring relevant leads.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">03</div>
                    <div>
                        <h4 class="sp-choose-title">High-Quality Leads</h4>
                        <p class="sp-choose-text">Focused targeting ensures that the leads generated are interested, qualified, and likely to convert.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">04</div>
                    <div>
                        <h4 class="sp-choose-title">Full-Service Management</h4>
                        <p class="sp-choose-text">From strategy to execution, we manage every aspect of your lead generation campaign.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">05</div>
                    <div>
                        <h4 class="sp-choose-title">B2B & B2C Capabilities</h4>
                        <p class="sp-choose-text">Whether your business targets other companies or individual clients, we adapt our methods to your market.</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center mt-4" style="color: var(--sp-body); font-style: italic;" data-aos="fade-up">Our service is not just about generating contacts, they are about building meaningful relationships that drive revenue growth.</p>
    </div>
</section>

<!-- ===================== PROCESS / WORKFLOW ===================== -->
<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Process</span>
            <h2 class="sp-section-title">Our Lead Generation Services in Action</h2>
        </div>
        <div class="sp-timeline">
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-timeline-dot">1</div>
                <div class="sp-timeline-card">
                    <h4>Business Consultation & Goal Setting</h4>
                    <p>We begin by understanding your business, target audience, and objectives. This discovery session helps us define key metrics and design campaigns tailored to meet your goals.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="100">
                <div class="sp-timeline-dot">2</div>
                <div class="sp-timeline-card">
                    <h4>Lead Identification & Audience Segmentation</h4>
                    <p>By defining your buyer personas and segmenting audiences, we ensure that our campaigns reach potential customers with the highest likelihood of conversion.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="200">
                <div class="sp-timeline-dot">3</div>
                <div class="sp-timeline-card">
                    <h4>Multi-Channel Campaign Deployment</h4>
                    <p>We leverage multiple channels to capture leads:</p>
                    <ul class="mt-2" style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: 6px;"><i class="fas fa-check-circle" style="color: var(--sp-primary); margin-right: 8px;"></i><strong>Content Marketing & SEO:</strong> Optimized blogs, landing pages, and videos drive organic traffic.</li>
                        <li style="margin-bottom: 6px;"><i class="fas fa-check-circle" style="color: var(--sp-primary); margin-right: 8px;"></i><strong>Email Marketing:</strong> Nurture campaigns engage leads through the sales funnel.</li>
                        <li style="margin-bottom: 6px;"><i class="fas fa-check-circle" style="color: var(--sp-primary); margin-right: 8px;"></i><strong>Social Media Advertising:</strong> Targeted ads on LinkedIn, Facebook, Instagram, and Twitter attract prospects.</li>
                        <li style="margin-bottom: 6px;"><i class="fas fa-check-circle" style="color: var(--sp-primary); margin-right: 8px;"></i><strong>Paid Search Campaigns:</strong> Google Ads and retargeting campaigns capture leads actively searching for your services.</li>
                    </ul>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="300">
                <div class="sp-timeline-dot">4</div>
                <div class="sp-timeline-card">
                    <h4>Lead Capture & Qualification</h4>
                    <p>Through optimized forms, landing pages, and lead scoring systems, we capture relevant leads and filter out non-qualified contacts. This ensures that your sales team focuses only on leads likely to convert.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="400">
                <div class="sp-timeline-dot">5</div>
                <div class="sp-timeline-card">
                    <h4>Nurturing & Follow-Ups</h4>
                    <p>Once leads are captured, our team nurtures them through personalized email sequences, automated follow-ups, and CRM workflows. This keeps prospects engaged until they are ready to make a purchase.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="500">
                <div class="sp-timeline-dot">6</div>
                <div class="sp-timeline-card">
                    <h4>Reporting & Continuous Optimization</h4>
                    <p>Our reports provide actionable insights on campaign performance, lead quality, and ROI. Continuous optimization improves the efficiency and effectiveness of every lead generation effort.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== ABOUT ZINGOASSIST ===================== -->
<section class="sp-section">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">About</span>
            <h2 class="sp-section-title">About ZingoAssist</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                <p class="sp-about-text text-center">
                    ZingoAssist specializes in helping businesses grow with lead generation services that deliver measurable results. Our team of marketing experts, data analysts, and campaign managers work together to generate high-quality leads for your business.
                </p>
                <p class="sp-about-text text-center">
                    We understand that every business is unique, which is why our services are customized to your industry, target audience, and growth objectives. Our mission is to help businesses attract, engage, and convert prospects into loyal customers, ensuring sustainable growth.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== WHY OUR SERVICE STAND OUT ===================== -->
<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Differentiators</span>
            <h2 class="sp-section-title">Why Our Service Stand Out</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-cogs"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Customized Solutions</h4>
                        <p class="sp-benefit-text">No two businesses are alike. We develop campaigns tailored to your specific needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-gem"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">High-Quality Leads</h4>
                        <p class="sp-benefit-text">We focus on leads that have real potential to convert into customers.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-tools"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Advanced Marketing Tools</h4>
                        <p class="sp-benefit-text">Utilize cutting-edge analytics, automation, and CRM systems.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-file-alt"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Transparent Reporting</h4>
                        <p class="sp-benefit-text">Detailed insights into lead quality, ROI, and campaign performance.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-users"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Experienced Team</h4>
                        <p class="sp-benefit-text">Experts in B2B and B2C lead generation, digital marketing, and campaign management.</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center mt-4" style="color: var(--sp-body); font-style: italic;" data-aos="fade-up">By partnering with ZingoAssist, you are choosing a team dedicated to delivering results and maximizing the value of your marketing efforts.</p>
    </div>
</section>

<!-- ===================== INDUSTRIES WE SERVE ===================== -->
<section class="sp-section">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Industries</span>
            <h2 class="sp-section-title">Industries We Serve</h2>
            <p class="sp-section-desc">Our service is designed for businesses across various industries, including:</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card text-center">
                    <div class="sp-card-icon"><i class="fas fa-laptop-code"></i></div>
                    <h3 class="sp-card-title">Technology & Software</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card text-center">
                    <div class="sp-card-icon"><i class="fas fa-university"></i></div>
                    <h3 class="sp-card-title">Finance & Insurance</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card text-center">
                    <div class="sp-card-icon"><i class="fas fa-heartbeat"></i></div>
                    <h3 class="sp-card-title">Healthcare & Medical Services</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card text-center">
                    <div class="sp-card-icon"><i class="fas fa-graduation-cap"></i></div>
                    <h3 class="sp-card-title">Education & Training</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card text-center">
                    <div class="sp-card-icon"><i class="fas fa-shopping-cart"></i></div>
                    <h3 class="sp-card-title">Retail & E-Commerce</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card text-center">
                    <div class="sp-card-icon"><i class="fas fa-briefcase"></i></div>
                    <h3 class="sp-card-title">Professional Services</h3>
                    <p class="sp-card-text">Consulting, Legal, etc.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4" style="color: var(--sp-body);" data-aos="fade-up">No matter the industry, ZingoAssist crafts strategies that ensure your business generates high-quality leads efficiently.</p>
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
                    <p class="sp-testimonial-text">"ZingoAssist completely transformed our B2B lead generation process. Our pipeline is now full of qualified leads, and our sales team is closing deals faster."</p>
                    <p class="sp-testimonial-author">— John D., CEO</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"The team at ZingoAssist provided exceptional guidance and results. Their services are professional, thorough, and highly effective."</p>
                    <p class="sp-testimonial-author">— Sarah P., Marketing Director</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Thanks to ZingoAssist, we now have a reliable system to capture, qualify, and nurture leads. Our business growth has been remarkable."</p>
                    <p class="sp-testimonial-author">— Michael R., Sales Manager</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Their B2B lead generation services helped us reach high-value clients we couldn't access before. The results exceeded our expectations."</p>
                    <p class="sp-testimonial-author">— Emily T., Business Owner</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== BENEFITS ===================== -->
<section class="sp-section">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Benefits</span>
            <h2 class="sp-section-title">Benefits of Professional Lead Generation Services</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-stream"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Consistent Lead Flow</h4>
                        <p class="sp-benefit-text">Maintain a steady pipeline of potential customers.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-dollar-sign"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Higher ROI</h4>
                        <p class="sp-benefit-text">Targeted campaigns reduce wasted marketing spend.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-clock"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Time-Saving</h4>
                        <p class="sp-benefit-text">Your team can focus on sales while we manage lead acquisition.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-expand-arrows-alt"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Scalable Solutions</h4>
                        <p class="sp-benefit-text">Easily adjust campaigns as your business grows.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-chart-pie"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Data-Driven Decisions</h4>
                        <p class="sp-benefit-text">Insights and analytics guide smarter marketing strategies.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-award"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Enhanced Brand Awareness</h4>
                        <p class="sp-benefit-text">Effective campaigns position your brand as an industry leader.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== FAQ ===================== -->
<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">FAQs</span>
            <h2 class="sp-section-title">Frequently Asked Questions</h2>
        </div>
        <div class="sp-faq-wrap" data-aos="fade-up" data-aos-delay="100">
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">1. What are lead generation services?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">It helps businesses attract, qualify, and nurture potential customers using marketing strategies, campaigns, and data analysis.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">2. How do ZingoAssist lead generation services work?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">We create targeted campaigns, capture leads through optimized landing pages, nurture prospects with automated workflows, and provide CRM integration for efficient management.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">3. Do you provide B2B lead generation services?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes, our B2B lead generation services are designed to generate qualified leads for businesses that sell products or services to other companies.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">4. How do you ensure lead quality?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">We use buyer personas, lead scoring, and targeted campaigns to ensure only relevant and high-potential prospects are delivered.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">5. Can you integrate with my CRM system?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Absolutely. Our services include full CRM integration for seamless lead management and follow-ups.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">6. How quickly can I see results?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Lead generation timelines vary by campaign and industry. Most clients see measurable results within 4–6 weeks of campaign launch.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">7. What industries do you serve?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">We provide services for technology, finance, healthcare, education, retail, and professional services.</div>
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
                Whether you're looking for B2B lead generation services or general lead gen services, ZingoAssist delivers customized strategies that ensure measurable results. Our team combines creative content, precision targeting, and data-driven insights to help your business grow.
            </p>
            <p class="sp-cta-text">Partner with ZingoAssist today to:</p>
            <ul class="sp-cta-list">
                <li><i class="fas fa-check-circle"></i> Drive high-quality leads</li>
                <li><i class="fas fa-check-circle"></i> Increase conversions</li>
                <li><i class="fas fa-check-circle"></i> Grow your customer base</li>
                <li><i class="fas fa-check-circle"></i> Achieve measurable ROI</li>
            </ul>
            <div class="sp-hero-actions">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Start Your Campaign Today <i class="fas fa-arrow-right"></i>
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
