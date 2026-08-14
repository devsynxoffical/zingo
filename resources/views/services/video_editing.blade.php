@extends('layout.main')

@section('title', 'Video Editing Services | ZingoAssist')
@section('meta_description', 'Professional video editing services by ZingoAssist. Custom edits, unlimited projects, motion graphics, and optimized content for marketing, social media, and corporate videos.')

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
                Video Editing <span class="sp-hero-title-highlight">Services</span>
            </h1>

            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="150" data-aos-duration="700">
                Looking to elevate your video content and captivate your audience? Our Video Editing Services at ZingoAssist are designed to help businesses, creators, and brands transform raw footage into polished, engaging videos that drive results. Whether you need marketing videos, social media content, or professional presentations, our team ensures every project is delivered with precision, creativity, and impact.
            </p>
            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">
                With expert editors, cutting-edge tools, and a streamlined process, ZingoAssist guarantees video editing services that not only look professional but also resonate with your target audience and achieve your business objectives.
            </p>

            <div class="sp-hero-actions" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Get a Free Consultation <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--outline">
                    Start Your Video Project <i class="fas fa-rocket"></i>
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
                    <i class="fas fa-play-circle"></i>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="700">
                <span class="sp-about-label">Overview</span>
                <h2 class="sp-about-title">About Our Video Editing Services</h2>
                <p class="sp-about-text">
                    In today's digital world, videos have become the most powerful medium for storytelling, brand promotion, and audience engagement. However, raw footage alone is rarely enough. Businesses and creators often struggle with inconsistent visuals, poor transitions, lack of branding, or weak storytelling.
                </p>
                <p class="sp-about-text">
                    That's where our professional video editing services come in. We provide comprehensive solutions that transform unpolished videos into compelling, high-quality content optimized for any platform, audience, or objective.
                </p>
                <ul class="sp-about-list">
                    <li><i class="fas fa-check-circle"></i> Videos that fail to hold audience attention</li>
                    <li><i class="fas fa-check-circle"></i> Poorly synchronized audio and visuals</li>
                    <li><i class="fas fa-check-circle"></i> Lack of consistent branding and style</li>
                    <li><i class="fas fa-check-circle"></i> Inefficient workflow for editing multiple videos</li>
                    <li><i class="fas fa-check-circle"></i> Difficulty meeting deadlines with in-house resources</li>
                </ul>
                <div class="sp-highlight-box">
                    <p>ZingoAssist solves these challenges with end-to-end video editing services, ensuring every project is visually appealing, on-brand, and ready to generate maximum engagement. Whether you're a solo creator, marketing team, or agency, we deliver video editing services tailored to your needs.</p>
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
            <h2 class="sp-section-title">Core Components of Our Video Editing Services</h2>
            <p class="sp-section-desc">From post-production to platform optimization — everything your videos need to shine.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-video"></i></div>
                    <h3 class="sp-card-title">Professional Video Editing and Post-Production</h3>
                    <p class="sp-card-text">Our video editing services cover every stage of post-production. We handle tasks like cutting, trimming, transitions, color correction, audio enhancement, subtitles, motion graphics, and more. This ensures that every video we produce is polished, cohesive, and visually engaging.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-pencil-ruler"></i></div>
                    <h3 class="sp-card-title">Custom Video Editing Service</h3>
                    <p class="sp-card-text">Every brand and creator has a unique style. Our video editing service allows full customization to match your brand identity, tone, and messaging. Whether you need a cinematic feel, energetic social media clips, or educational tutorials, we adapt to your creative vision.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-infinity"></i></div>
                    <h3 class="sp-card-title">Unlimited Video Editing</h3>
                    <p class="sp-card-text">For clients with ongoing video needs, our unlimited video editing packages provide continuous, high-quality editing without the hassle of negotiating each project individually. This ensures consistent output and helps maintain a cohesive visual presence across multiple platforms.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-bullhorn"></i></div>
                    <h3 class="sp-card-title">Marketing and Promotional Videos</h3>
                    <p class="sp-card-text">We specialize in editing videos designed to attract, engage, and convert viewers. From social media campaigns to advertisements, our video editing company ensures each video is optimized for its intended platform and audience.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-briefcase"></i></div>
                    <h3 class="sp-card-title">Corporate and Training Video Editing</h3>
                    <p class="sp-card-text">Professional presentations, training videos, and internal communications require precision and clarity. Our video editing agency ensures corporate videos are structured, branded, and engaging while effectively conveying the intended message.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-volume-up"></i></div>
                    <h3 class="sp-card-title">High-Quality Audio and Visual Enhancement</h3>
                    <p class="sp-card-text">Good visuals alone aren't enough. Our team improves audio clarity, balances sound levels, adds music or sound effects, and synchronizes audio with visuals to create an immersive experience for the audience.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-film"></i></div>
                    <h3 class="sp-card-title">Motion Graphics and Animation</h3>
                    <p class="sp-card-text">For enhanced storytelling, we integrate motion graphics, animated text, infographics, and lower thirds. These elements make videos more dynamic and visually appealing, helping your content stand out.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-palette"></i></div>
                    <h3 class="sp-card-title">Color Grading and Visual Effects</h3>
                    <p class="sp-card-text">Professional color grading can transform the look and feel of a video. Our editors enhance tone, lighting, and visual consistency while adding effects where appropriate, giving your videos a cinematic or branded style.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-mobile-alt"></i></div>
                    <h3 class="sp-card-title">Platform-Specific Video Optimization</h3>
                    <p class="sp-card-text">Every platform has unique requirements for video format, length, and style. Our video editing services ensure your content is optimized for YouTube, Instagram, Facebook, LinkedIn, TikTok, or any platform you target.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-shipping-fast"></i></div>
                    <h3 class="sp-card-title">Timely Delivery and Ongoing Support</h3>
                    <p class="sp-card-text">We understand the importance of deadlines. Our team ensures projects are delivered on time and offers ongoing support for revisions or updates, making us a reliable video editing service partner.</p>
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
            <h2 class="sp-section-title">Why Choose ZingoAssist for Video Editing Services</h2>
            <p class="sp-section-desc">Selecting the right video editing company is crucial to ensure quality, consistency, and efficiency. Here's why clients trust ZingoAssist.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">01</div>
                    <div>
                        <h4 class="sp-choose-title">Experienced Video Editing Team</h4>
                        <p class="sp-choose-text">Our editors have extensive experience in marketing, social media, corporate, and creative projects.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">02</div>
                    <div>
                        <h4 class="sp-choose-title">Tailored Video Editing Service</h4>
                        <p class="sp-choose-text">Every project is customized to meet your objectives and brand style.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">03</div>
                    <div>
                        <h4 class="sp-choose-title">Advanced Tools and Techniques</h4>
                        <p class="sp-choose-text">We use industry-leading software and professional workflows to deliver high-quality output.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">04</div>
                    <div>
                        <h4 class="sp-choose-title">Reliable Communication and Support</h4>
                        <p class="sp-choose-text">Clients receive updates, revisions, and transparent project tracking throughout the process.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">05</div>
                    <div>
                        <h4 class="sp-choose-title">Conversion-Focused Editing</h4>
                        <p class="sp-choose-text">Our edits are designed to keep viewers engaged and encourage action, whether it's clicks, shares, or conversions.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">06</div>
                    <div>
                        <h4 class="sp-choose-title">Scalable Services</h4>
                        <p class="sp-choose-text">Whether you need a single video or continuous unlimited video editing, we accommodate businesses and creators of all sizes.</p>
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
            <h2 class="sp-section-title">Our Video Editing Services in Action</h2>
        </div>
        <div class="sp-timeline">
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-timeline-dot">1</div>
                <div class="sp-timeline-card">
                    <h4>Project Consultation and Planning</h4>
                    <p>We begin by understanding your video goals, target audience, and preferred style. This helps us define the project scope, timelines, and creative direction.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="100">
                <div class="sp-timeline-dot">2</div>
                <div class="sp-timeline-card">
                    <h4>Raw Footage Review and Strategy</h4>
                    <p>Our editors review your footage, organize clips, and determine the best storytelling approach to maximize engagement and clarity.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="200">
                <div class="sp-timeline-dot">3</div>
                <div class="sp-timeline-card">
                    <h4>Editing and Post-Production</h4>
                    <p>We execute cuts, trims, transitions, audio sync, color grading, motion graphics, and effects. Every element is polished for professional quality.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="300">
                <div class="sp-timeline-dot">4</div>
                <div class="sp-timeline-card">
                    <h4>Revisions and Feedback</h4>
                    <p>Clients review the first version and provide feedback. We refine edits to meet expectations and ensure the final video aligns with the brand and purpose.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="400">
                <div class="sp-timeline-dot">5</div>
                <div class="sp-timeline-card">
                    <h4>Platform Optimization and Delivery</h4>
                    <p>Videos are formatted for the desired platforms with optimized resolution, aspect ratios, and encoding. Final delivery is fast, reliable, and ready for publishing.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="500">
                <div class="sp-timeline-dot">6</div>
                <div class="sp-timeline-card">
                    <h4>Ongoing Support</h4>
                    <p>We provide ongoing assistance for future edits, updates, or additional projects. Our video editing agency ensures your video library is always professional and up-to-date.</p>
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
            <h2 class="sp-section-title">Testimonials and Client Experiences</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"ZingoAssist transformed our marketing videos. The edits are sharp, professional, and perfectly timed. Our engagement has increased significantly."</p>
                    <p class="sp-testimonial-author">— Sarah L, Marketing Director</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"I needed a fast turnaround for social media videos, and their unlimited video editing service was a lifesaver. I highly recommend it."</p>
                    <p class="sp-testimonial-author">— James K, Content Creator</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"The team at ZingoAssist really understands video storytelling. Our corporate training videos have never looked better."</p>
                    <p class="sp-testimonial-author">— Amanda P, HR Manager</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Our YouTube channel growth has exploded thanks to ZingoAssist. Every video is visually stunning and fully optimized for the platform."</p>
                    <p class="sp-testimonial-author">— Michael R, Creator</p>
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
            <h2 class="sp-section-title">Benefits of Professional Video Editing Services</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-eye"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Engaging Content</h4>
                        <p class="sp-benefit-text">High-quality editing keeps viewers watching longer and boosts engagement.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-clone"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Consistency Across Projects</h4>
                        <p class="sp-benefit-text">Our video editing service ensures a consistent style, tone, and branding.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-chart-line"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Higher ROI</h4>
                        <p class="sp-benefit-text">Professionally edited videos improve conversions, clicks, and customer retention.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-clock"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Time and Cost Efficiency</h4>
                        <p class="sp-benefit-text">Outsourcing to a video editing company saves your team hours and resources.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-award"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Enhanced Brand Perception</h4>
                        <p class="sp-benefit-text">Well-edited videos reflect professionalism and credibility.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-expand-arrows-alt"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Scalable Solutions</h4>
                        <p class="sp-benefit-text">From single projects to unlimited video editing, your content needs are fully supported.</p>
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
                    <h4 class="sp-faq-q">What is included in your Video Editing Services?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">We handle trimming, cutting, color correction, audio editing, motion graphics, subtitles, and platform-specific optimization.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Do you offer unlimited video editing?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes. Our packages allow continuous editing without limits, ensuring consistent output.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Can you handle corporate and marketing videos?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Absolutely. We specialize in promotional, training, social media, and corporate content.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Do you provide revisions?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes. We include revisions and feedback loops to ensure satisfaction.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">How fast can you deliver projects?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Turnaround depends on project scope, but we prioritize speed while maintaining quality.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">What platforms do you optimize videos for?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">We optimize videos for YouTube, Instagram, Facebook, LinkedIn, TikTok, and other platforms.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Can you integrate branding in the edits?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes. Logos, colors, fonts, and brand elements are integrated for a consistent visual identity.</div>
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
                Whether you need a single promotional video, corporate training content, or continuous unlimited video editing, ZingoAssist delivers professional video editing services that elevate your content and engage your audience. Partner with us to:
            </p>
            <ul class="sp-cta-list">
                <li><i class="fas fa-check-circle"></i> Transform raw footage into professional videos</li>
                <li><i class="fas fa-check-circle"></i> Optimize content for platforms and audiences</li>
                <li><i class="fas fa-check-circle"></i> Maintain brand consistency and quality</li>
                <li><i class="fas fa-check-circle"></i> Save time with expert editing support</li>
            </ul>
            <div class="sp-hero-actions">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Start Your Video Editing Project <i class="fas fa-arrow-right"></i>
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
