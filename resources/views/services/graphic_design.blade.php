@extends('layout.main')

@section('title', 'Graphic Design Services | ZingoAssist')
@section('meta_description', 'Boost your brand with ZingoAssist graphic design services. Custom visuals, print, and digital graphics to attract, engage, and convert your audience.')

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
                Graphic Design <span class="sp-hero-title-highlight">Services</span>
            </h1>

            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="150" data-aos-duration="700">
                Looking to elevate your brand and visually engage your audience? Our graphic design services at ZingoAssist are created to help businesses of all sizes communicate their message effectively through stunning visuals. Whether you need print designs, digital assets, or customized graphics, our expert team ensures your brand stands out in a competitive market.
            </p>
            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">
                With creative expertise, advanced tools, and a proven design process, ZingoAssist delivers graphic design services that not only look impressive but also drive business growth.
            </p>

            <div class="sp-hero-actions" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Get a Free Consultation <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--outline">
                    Start Your Graphic Design Project <i class="fas fa-pencil-ruler"></i>
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
                <div class="sp-about-img">
                    <img src="{{ asset('assets/images/services/graphic_design.png') }}" alt="Graphic Design Services" />
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="700">
                <span class="sp-about-label">Overview</span>
                <h2 class="sp-about-title">What Are Graphic Design Services?</h2>
                <p class="sp-about-text">
                    Graphic design services encompass the creation of visual content that communicates ideas and captures attention. At ZingoAssist, we specialize in delivering high-quality designs that resonate with your audience and strengthen your brand identity.
                </p>
                <p class="sp-about-text">
                    From marketing materials and social media graphics to logos and custom illustrations, our services are designed to help businesses convey their message clearly and creatively. We focus on producing designs that are not only visually appealing but also strategically aligned with your business goals.
                </p>
                <div class="sp-highlight-box">
                    <p>Our mission is simple: to create visually engaging materials that attract your audience, enhance brand recognition, and increase conversions. The right design can transform how potential clients perceive your business and encourage them to take action.</p>
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
            <h2 class="sp-section-title">Core Components of Our Graphic Design Services</h2>
            <p class="sp-section-desc">Everything you need to create a powerful visual brand for your business.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-paint-brush"></i></div>
                    <h3 class="sp-card-title">Custom Visuals</h3>
                    <p class="sp-card-text">Every business is unique, which is why our graphic design services are fully customized. From bespoke illustrations to professionally designed marketing assets, we ensure that every visual element aligns with your brand identity. Each design we produce is original, ensuring your brand stands out from competitors.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-id-card"></i></div>
                    <h3 class="sp-card-title">Branding & Identity</h3>
                    <p class="sp-card-text">Strong branding is essential for recognition and trust. Our team works with you to develop logos, typography, color palettes, and other visual elements that reflect your brand's personality. With consistent branding across all platforms, your business will make a lasting impression on clients and prospects.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-print"></i></div>
                    <h3 class="sp-card-title">Print Design</h3>
                    <p class="sp-card-text">We offer professional print design services for brochures, flyers, business cards, posters, and other marketing materials. Our designs are optimized for high-quality printing, ensuring that your materials are visually striking and make a strong impression offline as well as online.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-laptop"></i></div>
                    <h3 class="sp-card-title">Digital Graphics</h3>
                    <p class="sp-card-text">From website banners to social media campaigns, our digital graphic solutions help your business attract attention in a crowded online space. We design digital assets that are optimized for visibility, engagement, and sharing, helping your content reach and connect with your audience.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-infinity"></i></div>
                    <h3 class="sp-card-title">Unlimited Graphic Design Services</h3>
                    <p class="sp-card-text">Our unlimited graphic design services allow you to request as many designs as needed within a set period. This approach ensures your marketing campaigns remain fresh, visually cohesive, and responsive to new opportunities. Whether it's seasonal promotions, product launches, or social media updates, our team is always ready to deliver.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-sync-alt"></i></div>
                    <h3 class="sp-card-title">Revision & Feedback Process</h3>
                    <p class="sp-card-text">We value collaboration and want every design to match your vision perfectly. Through our structured revision process, you can provide feedback, request changes, and refine the design until it meets your expectations. This guarantees satisfaction and ensures that our graphic design services deliver real value to your business.</p>
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
            <h2 class="sp-section-title">Why Choose ZingoAssist for Graphic Design Services?</h2>
            <p class="sp-section-desc">Choosing the right partner for your visual communication needs is critical. Here's why ZingoAssist is trusted by businesses worldwide.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">01</div>
                    <div>
                        <h4 class="sp-choose-title">Experienced Designers</h4>
                        <p class="sp-choose-text">Our team of skilled professionals brings years of experience to every project, ensuring each design is creative, effective, and aligned with your goals.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">02</div>
                    <div>
                        <h4 class="sp-choose-title">Tailored Solutions</h4>
                        <p class="sp-choose-text">Every design is crafted to suit your brand, audience, and marketing objectives. No templates, no generic graphics, just fully customized designs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">03</div>
                    <div>
                        <h4 class="sp-choose-title">High-Quality Output</h4>
                        <p class="sp-choose-text">We prioritize quality in every aspect of our work, from layout to typography and color accuracy. Our designs look polished across all formats.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">04</div>
                    <div>
                        <h4 class="sp-choose-title">Full-Service Management</h4>
                        <p class="sp-choose-text">From ideation to delivery, we manage the entire design process, making it easier for your team to focus on other core business tasks.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">05</div>
                    <div>
                        <h4 class="sp-choose-title">Creative Innovation</h4>
                        <p class="sp-choose-text">Our designers continually explore new ideas, trends, and styles to ensure your brand visuals are modern, professional, and memorable.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">06</div>
                    <div>
                        <h4 class="sp-choose-title">B2B & B2C Expertise</h4>
                        <p class="sp-choose-text">Whether you serve businesses or consumers, our graphic design services adapt to meet the expectations of your audience.</p>
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
            <h2 class="sp-section-title">Our Graphic Design Process</h2>
            <p class="sp-section-desc">We follow a detailed process to ensure that every project meets high standards and delivers measurable results.</p>
        </div>
        <div class="sp-timeline">
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-timeline-dot">1</div>
                <div class="sp-timeline-card">
                    <h4>Discovery & Consultation</h4>
                    <p>We begin by understanding your business, goals, target audience, and current branding. This consultation helps us develop a design strategy that aligns with your vision and business objectives.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="100">
                <div class="sp-timeline-dot">2</div>
                <div class="sp-timeline-card">
                    <h4>Concept Development</h4>
                    <p>Our team creates multiple design concepts based on your requirements and feedback. This stage ensures that we explore creative directions that best suit your brand identity.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="200">
                <div class="sp-timeline-dot">3</div>
                <div class="sp-timeline-card">
                    <h4>Design Creation</h4>
                    <p>Once a concept is selected, we produce detailed, high-quality designs. Every element, from color palettes to typography, is carefully chosen to reflect your brand's personality.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="300">
                <div class="sp-timeline-dot">4</div>
                <div class="sp-timeline-card">
                    <h4>Client Review & Revisions</h4>
                    <p>You review the initial designs and provide feedback. We then refine the designs to ensure the final product perfectly represents your brand and meets your expectations.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="400">
                <div class="sp-timeline-dot">5</div>
                <div class="sp-timeline-card">
                    <h4>Final Delivery</h4>
                    <p>We deliver your designs in all required formats, ready for digital use, print, or both. Our files are optimized for quality, ensuring your brand always looks professional.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="500">
                <div class="sp-timeline-dot">6</div>
                <div class="sp-timeline-card">
                    <h4>Ongoing Support</h4>
                    <p>Our unlimited graphic design services ensure you have ongoing design support. Whether you need updates, seasonal graphics, or new campaigns, our team is always ready to assist.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CASE STUDIES ===================== -->
<section class="sp-section">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Success Stories</span>
            <h2 class="sp-section-title">Case Studies & Real Results</h2>
            <p class="sp-section-desc">Our graphic design services have helped numerous businesses transform their branding and marketing efforts.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-case">
                    <span class="sp-case-badge">Case Study</span>
                    <h4 class="sp-case-title">Product Launch Campaign</h4>
                    <p class="sp-case-text">A client approached us to create a visual campaign for a new product. We developed social media graphics, email templates, and a product brochure.</p>
                    <div class="sp-case-result">
                        <i class="fas fa-chart-line"></i>
                        <span>Engagement increased by 40%, online sales exceeded projections within the first month.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="sp-case">
                    <span class="sp-case-badge">Case Study</span>
                    <h4 class="sp-case-title">Brand Refresh</h4>
                    <p class="sp-case-text">A small business needed a complete brand refresh. We redesigned their logo, website graphics, and print materials.</p>
                    <div class="sp-case-result">
                        <i class="fas fa-trophy"></i>
                        <span>The cohesive visuals helped attract larger clients and improve brand recognition in their market.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="sp-case">
                    <span class="sp-case-badge">Case Study</span>
                    <h4 class="sp-case-title">Social Media Engagement</h4>
                    <p class="sp-case-text">A B2C business wanted to increase engagement on social platforms. Our team designed eye-catching posts and promotional visuals.</p>
                    <div class="sp-case-result">
                        <i class="fas fa-users"></i>
                        <span>Engagement metrics doubled within three months, follower base grew steadily.</span>
                    </div>
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
            <h2 class="sp-section-title">Benefits of Professional Graphic Design Services</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-fingerprint"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Enhanced Brand Identity</h4>
                        <p class="sp-benefit-text">Strong visuals establish a recognizable and memorable brand.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-chart-bar"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Higher Engagement</h4>
                        <p class="sp-benefit-text">Professionally designed graphics increase audience interaction and retention.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-clock"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Time-Saving</h4>
                        <p class="sp-benefit-text">Focus on core business activities while our team handles all design needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-dollar-sign"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Cost-Effective Marketing</h4>
                        <p class="sp-benefit-text">High-quality designs improve the efficiency and impact of campaigns.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-book-open"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Creative Storytelling</h4>
                        <p class="sp-benefit-text">Our designs help convey your brand's message effectively and emotionally.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-expand-arrows-alt"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Scalable Design Solutions</h4>
                        <p class="sp-benefit-text">Easily adapt and repurpose visuals for multiple campaigns and channels.</p>
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
                    <h4 class="sp-faq-q">What are graphic design services?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">They involve creating visual content to communicate ideas, promote products, and enhance brand identity.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">How do ZingoAssist graphic design services work?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">We develop custom designs based on your goals, create multiple concepts, refine through feedback, and deliver final assets optimized for digital and print.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Do you provide unlimited graphic design services?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes, our unlimited service allows you to submit multiple design requests per month, ensuring your campaigns remain fresh and consistent.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Can you create print-ready designs?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Absolutely. Every design is optimized for both print and digital use, maintaining quality across all formats.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">How do you ensure quality and originality?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">All designs are created from scratch by our skilled team, ensuring unique visuals that represent your brand accurately.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">How quickly can I receive designs?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Most standard requests are completed within 48–72 hours, depending on complexity and revisions.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Can you integrate designs with marketing campaigns?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes. We create graphics that work seamlessly with social media, email marketing, and other digital campaigns to maximize impact.</div>
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
                Whether you need graphic design services for digital marketing, print materials, or custom illustrations, ZingoAssist delivers creative, professional, and strategic designs. Partner with us to:
            </p>
            <ul class="sp-cta-list">
                <li><i class="fas fa-check-circle"></i> Enhance your brand identity</li>
                <li><i class="fas fa-check-circle"></i> Create visually compelling materials</li>
                <li><i class="fas fa-check-circle"></i> Increase audience engagement</li>
                <li><i class="fas fa-check-circle"></i> Achieve measurable results</li>
            </ul>
            <div class="sp-hero-actions">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Start Your Graphic Design Project <i class="fas fa-arrow-right"></i>
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

            // close all
            document.querySelectorAll('.sp-faq').forEach(function (item) {
                item.classList.remove('active');
                item.querySelector('.sp-faq-body').style.maxHeight = null;
            });

            // open clicked (if it was closed)
            if (!isOpen) {
                faq.classList.add('active');
                body.style.maxHeight = body.scrollHeight + 'px';
            }
        });
    });
});
</script>

@endsection
