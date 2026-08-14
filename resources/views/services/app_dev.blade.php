@extends('layout.main')

@section('title', 'Mobile App Development Services | ZingoAssist')
@section('meta_description', 'ZingoAssist provides professional mobile app development services, including Android, web, ecommerce, and custom solutions for scalable business growth.')

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
                Mobile App <span class="sp-hero-title-highlight">Development Services</span>
            </h1>

            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="150" data-aos-duration="700">
                Transform your business with cutting-edge mobile solutions using ZingoAssist Mobile App Development Services. Our team specializes in creating high-performing, user-friendly, and scalable mobile applications that drive engagement, enhance customer experience, and boost business growth. Whether you are a startup, SME, or an enterprise, our mobile app development services are tailored to meet your unique business needs.
            </p>
            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">
                We combine innovative design, advanced technology, and strategic development to deliver apps that are not only visually appealing but also highly functional, secure, and optimized for performance across all devices.
            </p>

            <div class="sp-hero-actions" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Get a Free Consultation <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--outline">
                    Start Your App Development Project <i class="fas fa-code"></i>
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
                    <i class="fas fa-laptop-code"></i>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="700">
                <span class="sp-about-label">Overview</span>
                <h2 class="sp-about-title">What Are Mobile App Development Services?</h2>
                <p class="sp-about-text">
                    Mobile App Development Services involve the design, development, deployment, and maintenance of applications for mobile platforms such as iOS, Android, and web apps. ZingoAssist provides end-to-end solutions, from ideation and UI/UX design to backend development and ongoing app support.
                </p>
                <p class="sp-about-text">
                    Our mobile app development services focus on delivering customized solutions that enhance user experience, streamline business processes, and support long-term growth. Businesses leveraging professional app development services can:
                </p>
                <ul class="sp-about-list">
                    <li><i class="fas fa-check-circle"></i> Increase customer engagement and retention</li>
                    <li><i class="fas fa-check-circle"></i> Generate additional revenue streams</li>
                    <li><i class="fas fa-check-circle"></i> Streamline internal processes</li>
                    <li><i class="fas fa-check-circle"></i> Expand their digital footprint across platforms</li>
                </ul>
                <div class="sp-highlight-box">
                    <p>With our mobile app development services, your business gets more than just an app – you get a scalable digital solution designed to deliver measurable results.</p>
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
            <h2 class="sp-section-title">Core Components of Our Mobile App Development Services</h2>
            <p class="sp-section-desc">End-to-end solutions for every platform and business need.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-mobile-alt"></i></div>
                    <h3 class="sp-card-title">Custom Mobile App Development Services</h3>
                    <p class="sp-card-text">Our custom mobile app development services are tailored to your specific requirements, ensuring the app aligns perfectly with your brand, target audience, and business objectives. We focus on building apps that are intuitive, responsive, and engaging. Whether you need an interactive e-commerce platform, a productivity tool, or a customer engagement app, our team ensures a seamless experience from concept to deployment.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fab fa-android"></i></div>
                    <h3 class="sp-card-title">Android App Development Services</h3>
                    <p class="sp-card-text">Android apps account for the largest global user base. Our Android app development services cover everything from simple utility apps to complex enterprise solutions. We use modern frameworks, robust architecture, and best coding practices to ensure your app performs flawlessly across all Android devices and versions.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-globe"></i></div>
                    <h3 class="sp-card-title">Web App Development Services</h3>
                    <p class="sp-card-text">Web app development services extend your reach to any device with a browser. We develop high-performance web apps that are responsive, scalable, and compatible with multiple platforms. Our web app solutions focus on speed, security, and usability, providing a consistent user experience across devices.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-shopping-cart"></i></div>
                    <h3 class="sp-card-title">E-Commerce App Development Services</h3>
                    <p class="sp-card-text">Our ecommerce app development services are designed to create seamless shopping experiences. We build apps with integrated payment gateways, inventory management, order tracking, and personalized recommendations. Whether for B2C or B2B, we create scalable ecommerce solutions that enhance customer engagement and drive conversions.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-cogs"></i></div>
                    <h3 class="sp-card-title">Custom App Development Services</h3>
                    <p class="sp-card-text">We provide fully tailored app development services that match your unique business processes and objectives. From backend infrastructure to user interface, our custom app development services ensure the app not only meets current needs but can also scale as your business grows.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-pencil-ruler"></i></div>
                    <h3 class="sp-card-title">UI/UX Design and Prototyping</h3>
                    <p class="sp-card-text">A great app starts with a thoughtful design. Our design team creates wireframes, mockups, and interactive prototypes to ensure optimal user experience. Every element is carefully designed to enhance usability, engagement, and retention.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-vial"></i></div>
                    <h3 class="sp-card-title">App Testing and Quality Assurance</h3>
                    <p class="sp-card-text">Quality is our priority. ZingoAssist employs rigorous testing protocols to ensure your app is free from bugs, compatible with all devices, and optimized for performance. Our testing covers functionality, usability, performance, security, and compliance.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-rocket"></i></div>
                    <h3 class="sp-card-title">Deployment and Launch Support</h3>
                    <p class="sp-card-text">Our mobile app development services include seamless deployment to app stores and cloud platforms. We handle submissions, compliance, and post-launch support to ensure your app is live, accessible, and fully functional.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-tools"></i></div>
                    <h3 class="sp-card-title">Maintenance and Ongoing Support</h3>
                    <p class="sp-card-text">Apps require continuous updates and improvements. Our team provides long-term support, monitoring, and enhancements to ensure your app remains secure, up-to-date, and competitive in the market.</p>
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
            <h2 class="sp-section-title">Why Choose ZingoAssist for Mobile App Development Services?</h2>
            <p class="sp-section-desc">Choosing the right partner for mobile app development services can significantly impact your project's success. Here's why businesses trust ZingoAssist:</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">01</div>
                    <div>
                        <h4 class="sp-choose-title">Experienced Development Team</h4>
                        <p class="sp-choose-text">Our specialists have expertise in multiple platforms, frameworks, and industries, delivering high-quality solutions that drive results.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">02</div>
                    <div>
                        <h4 class="sp-choose-title">Custom Solutions with Scalability</h4>
                        <p class="sp-choose-text">We build apps that grow with your business, allowing flexibility and scalability for future enhancements.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">03</div>
                    <div>
                        <h4 class="sp-choose-title">Advanced Tools and Technologies</h4>
                        <p class="sp-choose-text">We utilize the latest technologies, frameworks, and cloud solutions to create high-performing, secure apps.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">04</div>
                    <div>
                        <h4 class="sp-choose-title">User-Centric Designs</h4>
                        <p class="sp-choose-text">Our mobile app development services focus on intuitive interfaces, engaging features, and seamless navigation.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">05</div>
                    <div>
                        <h4 class="sp-choose-title">End-to-End Services</h4>
                        <p class="sp-choose-text">From ideation and strategy to development and support, ZingoAssist covers every aspect of app development.</p>
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
            <h2 class="sp-section-title">Our Mobile App Development Services in Action</h2>
            <p class="sp-section-desc">A structured, proven methodology that delivers exceptional mobile solutions.</p>
        </div>
        <div class="sp-timeline">
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-timeline-dot">1</div>
                <div class="sp-timeline-card">
                    <h4>Strategy and Requirement Analysis</h4>
                    <p>We begin by understanding your business goals, target audience, market trends, and desired app functionalities. This ensures a strong foundation for the development process.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="100">
                <div class="sp-timeline-dot">2</div>
                <div class="sp-timeline-card">
                    <h4>UI/UX Design and Prototyping</h4>
                    <p>We create wireframes, mockups, and interactive prototypes to visualize the app experience. Every detail is designed to enhance engagement and usability.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="200">
                <div class="sp-timeline-dot">3</div>
                <div class="sp-timeline-card">
                    <h4>App Development and Coding</h4>
                    <p>Our developers build robust, scalable, and secure apps, following industry best practices. We develop mobile apps using native and cross-platform frameworks to meet your specific needs.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="300">
                <div class="sp-timeline-dot">4</div>
                <div class="sp-timeline-card">
                    <h4>Testing and Quality Assurance</h4>
                    <p>We rigorously test every app to ensure high performance, security, and compatibility. Our QA team identifies and resolves any issues before launch.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="400">
                <div class="sp-timeline-dot">5</div>
                <div class="sp-timeline-card">
                    <h4>Deployment and Launch</h4>
                    <p>We assist with app store submissions, compliance checks, and cloud deployment to ensure your app reaches the right audience efficiently.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="500">
                <div class="sp-timeline-dot">6</div>
                <div class="sp-timeline-card">
                    <h4>Maintenance and Continuous Improvement</h4>
                    <p>Post-launch, we provide ongoing support, performance monitoring, and updates to enhance functionality and user satisfaction.</p>
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
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Our custom app has been a huge differentiator in listing presentations. Sellers love that we have our own tech."</p>
                    <p class="sp-testimonial-author">— James C., Broker Owner</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Clients tell me all the time they prefer my app over Zillow because it's faster and has no ads."</p>
                    <p class="sp-testimonial-author">— Samantha W., Realtor</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"The push notifications are amazing. I can let my buyers know about a hot listing instantly."</p>
                    <p class="sp-testimonial-author">— Mike B., Agent</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"ZingoAssist made the process easy. I didn't have to know any code, they handled everything."</p>
                    <p class="sp-testimonial-author">— Lisa M., Team Leader</p>
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
            <h2 class="sp-section-title">Benefits of Professional Mobile App Development Services</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-user-friends"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Enhanced User Engagement</h4>
                        <p class="sp-benefit-text">Create interactive, intuitive apps that keep users engaged.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-chart-line"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Business Growth</h4>
                        <p class="sp-benefit-text">Drive revenue with features that support sales, marketing, and customer retention.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-cog"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Streamlined Processes</h4>
                        <p class="sp-benefit-text">Automate operations and improve productivity through app solutions.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-mobile-alt"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Multi-Platform Compatibility</h4>
                        <p class="sp-benefit-text">Reach customers on iOS, Android, and web platforms.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-chart-pie"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Data-Driven Decisions</h4>
                        <p class="sp-benefit-text">Analytics and insights from app usage help refine strategies.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-pencil-ruler"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Custom Solutions</h4>
                        <p class="sp-benefit-text">Tailored development ensures the app aligns with your brand and objectives.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-shield-alt"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Security and Compliance</h4>
                        <p class="sp-benefit-text">Professional development ensures apps meet security standards and industry regulations.</p>
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
                    <h4 class="sp-faq-q">What are mobile app development services?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Mobile app development services involve creating applications for mobile devices, including design, development, deployment, and ongoing maintenance.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">What platforms do you develop apps for?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">We offer native Android and iOS apps, web app development services, and custom mobile app solutions.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Can you build custom mobile apps?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes, our custom mobile app development services ensure your app is tailored to your unique business needs.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Do you provide ecommerce app development services?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Absolutely, we develop ecommerce apps with integrated payment gateways, inventory management, and personalized shopping experiences.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">How long does it take to develop an app?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Project timelines vary based on complexity, but most apps are developed and launched within 8 to 12 weeks.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Will my app be scalable for future growth?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes, our mobile app development services focus on scalability, allowing you to add features and enhancements over time.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Do you provide post-launch support?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes, we offer maintenance, updates, and technical support to ensure your app remains optimized and secure.</div>
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
                Whether you need a new app, a custom solution, or an upgrade to your existing platform, ZingoAssist provides mobile app development services that enhance user experience, streamline operations, and drive business growth.
            </p>
            <p class="sp-cta-text">Partner with us today to:</p>
            <ul class="sp-cta-list">
                <li><i class="fas fa-check-circle"></i> Build a high-performing mobile app</li>
                <li><i class="fas fa-check-circle"></i> Enhance user engagement and retention</li>
                <li><i class="fas fa-check-circle"></i> Streamline business operations</li>
                <li><i class="fas fa-check-circle"></i> Generate revenue through digital solutions</li>
                <li><i class="fas fa-check-circle"></i> Ensure secure and scalable app performance</li>
            </ul>
            <div class="sp-hero-actions">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Start Your App Development Project <i class="fas fa-arrow-right"></i>
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
