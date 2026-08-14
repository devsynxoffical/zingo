@extends('layout.main')

@section('title', 'Zingo - Assist Web Design')
@section('meta_description', 'Stunning real estate web design by ZingoAssist. We create responsive, user-friendly, and high-converting websites tailored for real estate professionals.')

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
                Web Design <span class="sp-hero-title-highlight">Services</span>
            </h1>

            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="150" data-aos-duration="700">
                Create beautiful, user-friendly websites that elevate your brand. Our designs combine aesthetics and performance to help you stand out online.
            </p>
            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">
                We take a comprehensive approach to web design, working with you to understand your brand, target audience, and business goals — then craft visually stunning, conversion-focused websites.
            </p>

            <div class="sp-hero-actions" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Get a Design Quote <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--outline">
                    Start Your Project <i class="fas fa-palette"></i>
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
                    <i class="fas fa-palette"></i>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="700">
                <span class="sp-about-label">Overview</span>
                <h2 class="sp-about-title">Web Design for Growth and Impact</h2>
                <p class="sp-about-text">
                    Web design is more than just making things look pretty — it's about crafting an experience that resonates with users and drives results. Our design philosophy combines beauty and functionality to deliver websites that not only look great but also drive traffic, engagement, and conversions.
                </p>
                <p class="sp-about-text">
                    We take a comprehensive approach to web design, working with you to understand your brand, target audience, and business goals. We then craft a visually stunning and user-friendly design that makes your website a powerful marketing tool. From intuitive navigation to responsive design, every element is carefully considered to ensure a seamless user experience.
                </p>
                <div class="sp-highlight-box">
                    <p>"Effective web design is about creating a space where visitors feel welcomed, inspired, and motivated to act."</p>
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
            <h2 class="sp-section-title">What Makes Our Web Design Stand Out</h2>
            <p class="sp-section-desc">Aesthetics meet performance — every design decision is backed by strategy.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-chart-pie"></i></div>
                    <h3 class="sp-card-title">Data-Driven Strategies</h3>
                    <p class="sp-card-text">Targeted insights to enhance design decisions. We analyze your audience, industry trends, and competitor benchmarks to craft websites that convert.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-laptop-code"></i></div>
                    <h3 class="sp-card-title">Multi-Channel Approach</h3>
                    <p class="sp-card-text">Consistent branding across platforms. Your website seamlessly integrates with social media, email marketing, and other digital channels for a unified experience.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-mouse-pointer"></i></div>
                    <h3 class="sp-card-title">Content That Converts</h3>
                    <p class="sp-card-text">Compelling design that builds trust and drives action. Every element is placed strategically to guide users toward conversion goals.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-sync-alt"></i></div>
                    <h3 class="sp-card-title">Continuous Optimization</h3>
                    <p class="sp-card-text">Ongoing improvements based on user behavior. We monitor performance metrics and refine designs to maximize engagement and results.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-mobile-alt"></i></div>
                    <h3 class="sp-card-title">Responsive Design</h3>
                    <p class="sp-card-text">Your website will look and perform flawlessly across all devices — desktops, tablets, and smartphones — ensuring no visitor is left behind.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-search"></i></div>
                    <h3 class="sp-card-title">SEO-Optimized Structure</h3>
                    <p class="sp-card-text">Every page is built with search engines in mind. Clean code, fast loading, and proper structure help your site rank higher and get found faster.</p>
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
            <h2 class="sp-section-title">Why Choose ZingoAssist for Web Design?</h2>
            <p class="sp-section-desc">We don't just design websites — we build digital experiences that grow your business.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">01</div>
                    <div>
                        <h4 class="sp-choose-title">Creative Excellence</h4>
                        <p class="sp-choose-text">Our designers bring years of experience and a passion for creating visually stunning websites that make your brand memorable.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">02</div>
                    <div>
                        <h4 class="sp-choose-title">User-Centered Design</h4>
                        <p class="sp-choose-text">Every design decision puts your visitors first — intuitive navigation, clear messaging, and seamless user journeys.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">03</div>
                    <div>
                        <h4 class="sp-choose-title">Conversion Focused</h4>
                        <p class="sp-choose-text">Beautiful design meets strategic thinking. Every page is optimized to turn visitors into leads and customers.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">04</div>
                    <div>
                        <h4 class="sp-choose-title">Full-Service Support</h4>
                        <p class="sp-choose-text">From concept to launch and beyond, we manage the entire process and provide ongoing support for updates and improvements.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">05</div>
                    <div>
                        <h4 class="sp-choose-title">Modern Technology</h4>
                        <p class="sp-choose-text">We use the latest frameworks and design tools to build fast, secure, and scalable websites that perform at the highest level.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">06</div>
                    <div>
                        <h4 class="sp-choose-title">Brand Consistency</h4>
                        <p class="sp-choose-text">Your website will perfectly reflect your brand identity with consistent colors, typography, and messaging throughout.</p>
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
            <h2 class="sp-section-title">Our Web Design Process</h2>
            <p class="sp-section-desc">A structured, collaborative approach to delivering designs that exceed expectations.</p>
        </div>
        <div class="sp-timeline">
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-timeline-dot">1</div>
                <div class="sp-timeline-card">
                    <h4>Discovery & Strategy</h4>
                    <p>We learn about your brand, audience, and goals to create a design strategy that drives results.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="100">
                <div class="sp-timeline-dot">2</div>
                <div class="sp-timeline-card">
                    <h4>Wireframing & Mockups</h4>
                    <p>We create wireframes and visual mockups so you can see the layout and flow before any code is written.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="200">
                <div class="sp-timeline-dot">3</div>
                <div class="sp-timeline-card">
                    <h4>Visual Design</h4>
                    <p>Our designers craft pixel-perfect visuals that reflect your brand and engage your target audience.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="300">
                <div class="sp-timeline-dot">4</div>
                <div class="sp-timeline-card">
                    <h4>Development & Integration</h4>
                    <p>Designs are brought to life with clean, responsive code and integrated with your preferred platforms.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="400">
                <div class="sp-timeline-dot">5</div>
                <div class="sp-timeline-card">
                    <h4>Testing & Launch</h4>
                    <p>Thorough testing across devices and browsers ensures everything works perfectly before going live.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="500">
                <div class="sp-timeline-dot">6</div>
                <div class="sp-timeline-card">
                    <h4>Ongoing Optimization</h4>
                    <p>Post-launch, we continue to monitor performance and make improvements based on real user data.</p>
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
            <h2 class="sp-section-title">What Our Clients Say</h2>
            <p class="sp-section-desc">Real feedback from businesses who trusted ZingoAssist with their web design.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"ZingoAssist completely transformed our online presence. The design is modern, clean, and perfectly represents our brand."</p>
                    <p class="sp-testimonial-author">— Rachel M., Business Owner</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"The website they designed for us is not only beautiful but also incredibly easy to navigate. Our bounce rate dropped significantly."</p>
                    <p class="sp-testimonial-author">— James T., Marketing Director</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Their attention to detail and understanding of user experience really set them apart. Highly recommend their web design services."</p>
                    <p class="sp-testimonial-author">— Laura K., Entrepreneur</p>
                </div>
             </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"From concept to launch, the process was smooth and collaborative. Our new site has helped us grow our client base considerably."</p>
                    <p class="sp-testimonial-author">— David S., Agency Founder</p>
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
            <h2 class="sp-section-title">Benefits of Professional Web Design</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-eye"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Stronger First Impressions</h4>
                        <p class="sp-benefit-text">A professionally designed website builds trust and credibility from the very first visit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-chart-line"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Higher Conversion Rates</h4>
                        <p class="sp-benefit-text">Strategic design elements guide visitors toward taking action — whether it's a purchase, signup, or inquiry.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-mobile-alt"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Mobile-First Experience</h4>
                        <p class="sp-benefit-text">Responsive designs ensure your site works beautifully on every device, capturing mobile traffic effectively.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-search"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Better SEO Performance</h4>
                        <p class="sp-benefit-text">Clean code and optimized structure help search engines understand and rank your site higher.</p>
                    </div>
                </div>
                            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-award"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Brand Differentiation</h4>
                        <p class="sp-benefit-text">Stand out from competitors with a unique, custom design that reflects your brand's personality and values.</p>
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
                    <h4 class="sp-faq-q">What is included in your web design services?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Our web design services include strategy, wireframing, visual design, responsive development, SEO optimization, testing, launch, and ongoing support.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">How long does a web design project take?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Most projects are completed within 4 to 8 weeks, depending on complexity and requirements.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Do you offer redesigns for existing websites?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes, we specialize in both new designs and complete website redesigns to modernize your digital presence.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Are your designs mobile-friendly?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Absolutely. Every design is built with a mobile-first approach, ensuring optimal performance across all devices.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Do you provide post-launch support?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes, we offer ongoing support including updates, performance monitoring, and design improvements after launch.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Can you integrate third-party tools into the design?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes, we can integrate CRM systems, analytics, payment gateways, booking tools, and other third-party platforms.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CTA ===================== -->
<section class="sp-section" style="padding-bottom: 100px;">
    <div class="container">
        <div class="sp-cta" data-aos="fade-up" data-aos-duration="700">
            <h2 class="sp-cta-title">Let's Design Something Amazing</h2>
            <p class="sp-cta-text">
                Have questions or want to discuss your next project? Get in touch with us today to start creating a website that drives results for your business.
            </p>
            <ul class="sp-cta-list">
                <li><i class="fas fa-check-circle"></i> Build a stunning, modern website</li>
                <li><i class="fas fa-check-circle"></i> Boost user engagement and conversions</li>
                <li><i class="fas fa-check-circle"></i> Strengthen your brand identity online</li>
                <li><i class="fas fa-check-circle"></i> Deliver seamless experiences across all devices</li>
            </ul>
            <div class="sp-hero-actions">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Start Your Design Project <i class="fas fa-arrow-right"></i>
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
