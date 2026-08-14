@extends('layout.main')

@section('title', 'Best Real Estate Digital Marketing Agency')
@section('meta_description', 'ZingoAssist is a leading real estate digital marketing agency providing SEO, social media, PPC, & content marketing services for real estate professionals.')

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
                Real Estate Digital <span class="sp-hero-title-highlight">Marketing Agency</span>
            </h1>

            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="150" data-aos-duration="700">
                In today's competitive real estate market, standing out online requires more than a website and social media profiles. Buyers and sellers expect fast, engaging, and trustworthy digital experiences. ZingoAssist provides a professional real estate digital marketing agency service designed to help agents, brokers, and real estate businesses create effective digital strategies that attract leads, increase visibility, and drive conversions.
            </p>
            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">
                With advanced marketing systems, tailored campaigns, and proven digital strategies, our digital marketing agency ensures your real estate brand reaches the right audience, builds credibility, and converts visitors into clients.
            </p>

            <div class="sp-hero-actions" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Get a Free Consultation <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--outline">
                    Start Your Marketing Services <i class="fas fa-rocket"></i>
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
                    <i class="fas fa-chart-bar"></i>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="700">
                <span class="sp-about-label">Overview</span>
                <h2 class="sp-about-title">About Our Real Estate Digital Marketing Agency</h2>
                <p class="sp-about-text">
                    Managing multiple digital channels, content creation, online advertising, and lead generation can overwhelm even the most experienced agents. This is where a dedicated real estate digital marketing agency becomes essential.
                </p>
                <p class="sp-about-text">
                    For example, an agent juggling active listings may struggle with posting on social media, tracking ads, monitoring website traffic, and following up with leads. These challenges can lead to missed opportunities, lost leads, and reduced ROI. ZingoAssist solves these issues by providing structured, professional support across every marketing channel.
                </p>
                <p class="sp-about-text">
                    We assist agents, brokers, and investors by reducing administrative burdens and helping them deliver exceptional client experiences online. Common problems we help solve include:
                </p>
                <ul class="sp-about-list">
                    <li><i class="fas fa-check-circle"></i> Low website traffic or poorly performing landing pages</li>
                    <li><i class="fas fa-check-circle"></i> Underperforming social media campaigns</li>
                    <li><i class="fas fa-check-circle"></i> Confusing or inconsistent online branding</li>
                    <li><i class="fas fa-check-circle"></i> Slow follow-ups that reduce client confidence</li>
                    <li><i class="fas fa-check-circle"></i> Missed opportunities from unoptimized digital campaigns</li>
                </ul>
                <div class="sp-highlight-box">
                    <p>By offering comprehensive services as a trusted real estate digital marketing agency, ZingoAssist ensures efficient, high-performing digital campaigns that generate leads and grow your business.</p>
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
            <h2 class="sp-section-title">Core Components of Our Digital Marketing Services</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fab fa-google"></i></div>
                    <h3 class="sp-card-title">1. Search Engine Optimization (SEO) for Real Estate</h3>
                    <p class="sp-card-text">A strong online presence begins with search engine visibility. Our digital marketing services include advanced SEO strategies for real estate websites, ensuring your pages rank higher for local searches. We perform keyword research, optimize website content, improve technical SEO, and monitor rankings, helping clients find you faster.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fab fa-facebook-f"></i></div>
                    <h3 class="sp-card-title">2. Social Media Marketing & Management</h3>
                    <p class="sp-card-text">Social media is a critical component of modern real estate marketing. As a full-service digital marketing agency, we manage platforms such as Instagram, Facebook, LinkedIn, and TikTok, creating engaging posts, interactive stories, and paid campaigns that connect with potential clients.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-ad"></i></div>
                    <h3 class="sp-card-title">3. Pay-Per-Click (PPC) Advertising</h3>
                    <p class="sp-card-text">We build targeted advertising campaigns to capture high-quality leads. From Google Ads to social media ads, our digital marketing company focuses on maximizing ROI while ensuring every ad reaches the right audience.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-pen-nib"></i></div>
                    <h3 class="sp-card-title">4. Content Marketing & Blogging</h3>
                    <p class="sp-card-text">Educational content builds trust and authority. Our digital marketing services include creating blog posts, guides, newsletters, and video content tailored to real estate audiences. Content supports SEO, engages users, and helps convert prospects into clients.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="far fa-envelope"></i></div>
                    <h3 class="sp-card-title">5. Email Marketing Campaigns</h3>
                    <p class="sp-card-text">Email remains a highly effective channel for nurturing leads. As part of our digital marketing service, we craft automated and personalized campaigns to maintain client engagement, promote listings, and encourage repeat business.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-globe"></i></div>
                    <h3 class="sp-card-title">6. Website Optimization & Landing Page Design</h3>
                    <p class="sp-card-text">High-performing real estate websites are the cornerstone of effective marketing. We offer real estate digital marketing services that include optimizing websites for speed, mobile responsiveness, UX, and lead conversion. Our team creates landing pages specifically designed to capture inquiries and boost ROI.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-star"></i></div>
                    <h3 class="sp-card-title">7. Reputation Management & Review Building</h3>
                    <p class="sp-card-text">Online reviews significantly influence buyer and seller decisions. Our digital marketing company helps agents monitor, manage, and build a strong online reputation to ensure credibility and trustworthiness.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-chart-pie"></i></div>
                    <h3 class="sp-card-title">8. Analytics & Reporting</h3>
                    <p class="sp-card-text">We provide detailed performance tracking for every campaign. By analyzing data from your website, social media, and advertising campaigns, our digital marketing services team continuously refines strategies to improve results and generate more leads.</p>
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
            <h2 class="sp-section-title">Why Choose ZingoAssist as Your Real Estate Digital Marketing Agency</h2>
            <p class="sp-section-desc">Selecting the right real estate digital marketing agency can dramatically improve your business growth. Here is why clients trust ZingoAssist:</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">01</div>
                    <div>
                        <h4 class="sp-choose-title">Experienced Digital Marketing Professionals</h4>
                        <p class="sp-choose-text">Our team has years of experience running campaigns for residential, commercial, and investment properties. We understand the unique needs of the real estate industry.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">02</div>
                    <div>
                        <h4 class="sp-choose-title">Customized Marketing Strategies</h4>
                        <p class="sp-choose-text">We create tailored strategies to align with your branding, target audience, and business goals, differentiating you from competitors.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">03</div>
                    <div>
                        <h4 class="sp-choose-title">Advanced Tools & Technology</h4>
                        <p class="sp-choose-text">We use cutting-edge platforms for campaign automation, analytics, and customer relationship management, ensuring accuracy and efficiency.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">04</div>
                    <div>
                        <h4 class="sp-choose-title">Consistent, Reliable Support</h4>
                        <p class="sp-choose-text">Clients receive ongoing communication, reports, and dedicated account management, ensuring all campaigns remain on track.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">05</div>
                    <div>
                        <h4 class="sp-choose-title">Proven Results</h4>
                        <p class="sp-choose-text">Our approach focuses on measurable outcomes, from increased website traffic to higher lead conversion rates. Choosing a digital marketing company that prioritizes results ensures your investment translates into real growth.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">06</div>
                    <div>
                        <h4 class="sp-choose-title">Scalable Solutions for Growing Agencies</h4>
                        <p class="sp-choose-text">Whether you are an individual agent or a multi-office brokerage, our real estate digital marketing company provides scalable support to meet evolving needs.</p>
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
            <h2 class="sp-section-title">Our Digital Marketing Services in Action</h2>
        </div>
        <div class="sp-timeline">
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-timeline-dot">1</div>
                <div class="sp-timeline-card">
                    <h4>Strategy & Planning</h4>
                    <p>We start by understanding your business objectives, audience, and competitive landscape. This strategy phase sets the foundation for every campaign, ensuring effective implementation of all digital marketing services.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="100">
                <div class="sp-timeline-dot">2</div>
                <div class="sp-timeline-card">
                    <h4>Content Creation & Design</h4>
                    <p>Our team creates content, graphics, and messaging tailored to your real estate brand. Through real estate digital marketing services, we develop social media posts, email campaigns, and website content that resonate with your audience.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="200">
                <div class="sp-timeline-dot">3</div>
                <div class="sp-timeline-card">
                    <h4>Campaign Implementation</h4>
                    <p>We launch multi-channel campaigns including SEO, PPC, social media ads, and email marketing. Our digital marketing agency ensures campaigns are targeted, optimized, and conversion-focused.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="300">
                <div class="sp-timeline-dot">4</div>
                <div class="sp-timeline-card">
                    <h4>Monitoring & Optimization</h4>
                    <p>Performance metrics are tracked daily. Our digital marketing services team adjusts strategies based on data insights, improving CTR, reducing ad costs, and boosting lead generation.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="400">
                <div class="sp-timeline-dot">5</div>
                <div class="sp-timeline-card">
                    <h4>Reporting & Analysis</h4>
                    <p>Comprehensive monthly reports provide clear insight into campaign performance. Our digital marketing company ensures you know exactly how your investment translates into results.</p>
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
                    <p class="sp-testimonial-text">"ZingoAssist transformed our digital presence. As a real estate digital marketing agency, they helped us generate more leads and streamline our marketing processes."</p>
                    <p class="sp-testimonial-author">— John D., Real Estate Agent</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Our brokerage now consistently reaches the right audience online thanks to ZingoAssist's digital marketing services. Their support has been invaluable."</p>
                    <p class="sp-testimonial-author">— Sarah P., Brokerage Owner</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Managing multiple listings was overwhelming. ZingoAssist, as a trusted digital marketing company, helped automate campaigns and improve client engagement."</p>
                    <p class="sp-testimonial-author">— Michael R., Investor</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Their team handled social media, SEO, and email campaigns for our real estate business. Results exceeded expectations."</p>
                    <p class="sp-testimonial-author">— Emily T., Realtor</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Thanks to ZingoAssist, our marketing is now organized, measurable, and producing consistent leads. I recommend their real estate digital marketing services to any agent."</p>
                    <p class="sp-testimonial-author">— Kevin L., Agent</p>
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
            <h2 class="sp-section-title">Benefits of Professional Real Estate Digital Marketing Services</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-users"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Increase Lead Generation</h4>
                        <p class="sp-benefit-text">With optimized campaigns, landing pages, and strategic advertising, our digital marketing services attract high-quality leads consistently.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-search-plus"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Boost Search Visibility</h4>
                        <p class="sp-benefit-text">SEO and content marketing improve rankings for local and niche searches, helping potential clients find you first.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-certificate"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Enhance Brand Credibility</h4>
                        <p class="sp-benefit-text">Professional design, consistent messaging, and reputation management elevate trust and professionalism.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-clock"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Save Time & Resources</h4>
                        <p class="sp-benefit-text">Delegating marketing to a real estate digital marketing agency allows agents and brokers to focus on sales, showings, and client relationships.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-chart-line"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Scalable Growth</h4>
                        <p class="sp-benefit-text">As your business expands, our digital marketing company can adapt campaigns to new markets, listings, and services.</p>
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
            <h2 class="sp-section-title">FAQs</h2>
        </div>
        <div class="sp-faq-wrap" data-aos="fade-up" data-aos-delay="100">
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">1. What services does a real estate digital marketing agency provide?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">We provide SEO, social media marketing, PPC, email campaigns, content creation, website optimization, and lead generation services.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">2. Can you handle multiple listings and campaigns at once?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes. Our digital marketing agency is equipped to manage multiple projects simultaneously.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">3. Do you provide support after campaigns are launched?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes, our digital marketing services include ongoing monitoring, optimization, and reporting.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">4. Can you integrate real estate IDX listings into marketing campaigns?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes. As a real estate digital marketing company, we incorporate property listings into content and ads to maximize engagement.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">5. How long before I see results?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Depending on the campaign type, results can appear in weeks for paid ads and 3–6 months for organic SEO campaigns.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">6. Are your marketing services customizable?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Absolutely. We tailor all digital marketing services to meet your specific business needs.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">7. Is my client data kept confidential?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes. All information is securely stored and handled with strict confidentiality.</div>
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
                Whether you need full-service digital marketing or help with select campaigns, ZingoAssist provides real estate digital marketing services that improve your online presence, generate leads, and grow your business.
            </p>
            <p class="sp-cta-text">Partner with us today to:</p>
            <ul class="sp-cta-list">
                <li><i class="fas fa-check-circle"></i> Build a comprehensive digital marketing strategy</li>
                <li><i class="fas fa-check-circle"></i> Increase lead generation and conversion rates</li>
                <li><i class="fas fa-check-circle"></i> Improve online visibility and rankings</li>
                <li><i class="fas fa-check-circle"></i> Streamline marketing efforts for maximum efficiency</li>
            </ul>
            <div class="sp-hero-actions">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Start Your Marketing Services Today <i class="fas fa-arrow-right"></i>
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
