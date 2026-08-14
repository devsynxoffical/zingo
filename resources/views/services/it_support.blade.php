@extends('layout.main')

@section('title', 'Business IT Support Services | ZingoAssist')
@section('meta_description', 'ZingoAssist offers expert business IT support services, including managed IT, network management, and IT consulting, to enhance and secure your technology.')

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
                Business IT <span class="sp-hero-title-highlight">Support Services</span>
            </h1>

            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="150" data-aos-duration="700">
                Ensuring seamless IT operations is crucial for the success and growth of any modern business. Our Business IT Support Services at ZingoAssist are designed to help companies maintain efficient, secure, and reliable technology systems. From troubleshooting technical issues to proactive maintenance and strategic IT planning, our services empower businesses to focus on growth while we handle their IT needs.
            </p>
            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">
                With experienced professionals, advanced tools, and tailored solutions, ZingoAssist delivers business IT support services that improve system performance, enhance security, and maximize productivity across your organization.
            </p>

            <div class="sp-hero-actions" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Get a Free Consultation <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--outline">
                    Start Your IT Support Project <i class="fas fa-life-ring"></i>
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
                    <i class="fas fa-laptop-medical"></i>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="700">
                <span class="sp-about-label">Overview</span>
                <h2 class="sp-about-title">About Our Business IT Support Services</h2>
                <p class="sp-about-text">
                    In today's fast-paced digital landscape, companies rely heavily on technology for daily operations, communications, and data management. Any disruption or downtime can impact productivity, customer satisfaction, and profitability.
                </p>
                <p class="sp-about-text">
                    Our Business IT Support Services ensure your systems remain operational, secure, and optimized for performance. We provide comprehensive solutions tailored to your unique needs, whether you are a small business, a mid-sized company, or a large enterprise.
                </p>
                <ul class="sp-about-list">
                    <li><i class="fas fa-check-circle"></i> Frequent system crashes or technical glitches</li>
                    <li><i class="fas fa-check-circle"></i> Outdated software and hardware causing inefficiencies</li>
                    <li><i class="fas fa-check-circle"></i> Limited IT resources to handle critical issues</li>
                    <li><i class="fas fa-check-circle"></i> Security vulnerabilities and data breaches</li>
                    <li><i class="fas fa-check-circle"></i> Difficulty scaling IT infrastructure with business growth</li>
                </ul>
                <div class="sp-highlight-box">
                    <p>ZingoAssist addresses these challenges with end-to-end business IT support services, combining reactive troubleshooting with proactive strategies to prevent issues before they occur.</p>
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
            <h2 class="sp-section-title">Core Components of Our Business IT Support Services</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-cogs"></i></div>
                    <h3 class="sp-card-title">Managed IT Support</h3>
                    <p class="sp-card-text">Continuous monitoring and management of your IT systems. From network performance to software updates, we ensure everything runs smoothly while reducing downtime and operational risks.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-headset"></i></div>
                    <h3 class="sp-card-title">IT Helpdesk & Technical Support</h3>
                    <p class="sp-card-text">Dedicated helpdesk services handling hardware issues, software troubleshooting, user queries, and system errors efficiently to minimize disruptions.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-network-wired"></i></div>
                    <h3 class="sp-card-title">Network Setup & Maintenance</h3>
                    <p class="sp-card-text">Secure, scalable, and high-performance networks. We maintain firewalls, routers, and switches, ensuring stable connectivity across your organization.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3 class="sp-card-title">Cybersecurity & Data Protection</h3>
                    <p class="sp-card-text">Proactive cybersecurity measures including firewalls, anti-virus solutions, encryption, and security audits to minimize risks and ensure compliance.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-cloud"></i></div>
                    <h3 class="sp-card-title">Cloud Services & Remote Access</h3>
                    <p class="sp-card-text">Transition to cloud solutions for secure data storage, collaboration, and remote access. Teams work efficiently from anywhere while maintaining data integrity.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-desktop"></i></div>
                    <h3 class="sp-card-title">Software & Hardware Management</h3>
                    <p class="sp-card-text">Installing new software, updating systems, and managing hardware procurement, configuration, and maintenance to extend equipment life.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-database"></i></div>
                    <h3 class="sp-card-title">Backup & Disaster Recovery</h3>
                    <p class="sp-card-text">Automated backup solutions and disaster recovery planning to ensure critical information is protected and can be restored quickly in emergencies.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-lightbulb"></i></div>
                    <h3 class="sp-card-title">IT Consulting & Strategic Planning</h3>
                    <p class="sp-card-text">We assess your technology needs, recommend scalable solutions, and develop IT strategies aligned with your business goals for long-term success.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-tachometer-alt"></i></div>
                    <h3 class="sp-card-title">System Monitoring & Optimization</h3>
                    <p class="sp-card-text">Continuous monitoring to detect potential issues before they impact operations, ensuring applications run smoothly and networks remain stable.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-users-cog"></i></div>
                    <h3 class="sp-card-title">On-Site & Remote Support</h3>
                    <p class="sp-card-text">Flexible IT support through both on-site visits and remote assistance. Whether urgent troubleshooting or scheduled maintenance, we're always ready.</p>
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
            <h2 class="sp-section-title">Why Choose ZingoAssist for IT Support?</h2>
            <p class="sp-section-desc">Selecting the right IT support company can significantly impact your business efficiency, security, and scalability.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">01</div>
                    <div>
                        <h4 class="sp-choose-title">Experienced IT Professionals</h4>
                        <p class="sp-choose-text">Extensive knowledge across networks, cybersecurity, cloud solutions, and enterprise IT systems.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">02</div>
                    <div>
                        <h4 class="sp-choose-title">Customized IT Support</h4>
                        <p class="sp-choose-text">Every solution is tailored to your business needs, ensuring maximum impact and value.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">03</div>
                    <div>
                        <h4 class="sp-choose-title">Advanced Tools & Technology</h4>
                        <p class="sp-choose-text">Latest IT management software, monitoring tools, and security systems for superior support.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">04</div>
                    <div>
                        <h4 class="sp-choose-title">Reliable Communication</h4>
                        <p class="sp-choose-text">Clear updates, proactive notifications, and ongoing guidance throughout every project.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">05</div>
                    <div>
                        <h4 class="sp-choose-title">Proactive & Reactive Support</h4>
                        <p class="sp-choose-text">From immediate troubleshooting to long-term IT strategy, covering every aspect of technology needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">06</div>
                    <div>
                        <h4 class="sp-choose-title">Scalable Solutions</h4>
                        <p class="sp-choose-text">Whether your business grows or IT requirements evolve, our services adapt to your changing needs.</p>
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
            <h2 class="sp-section-title">Our Business IT Support Services in Action</h2>
        </div>
        <div class="sp-timeline">
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-timeline-dot">1</div>
                <div class="sp-timeline-card">
                    <h4>Consultation and Assessment</h4>
                    <p>We understand your business operations, IT challenges, and growth plans to develop a personalized IT support strategy.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="100">
                <div class="sp-timeline-dot">2</div>
                <div class="sp-timeline-card">
                    <h4>System Audit and Analysis</h4>
                    <p>Thorough review of your existing IT infrastructure, identifying vulnerabilities, inefficiencies, and opportunities for improvement.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="200">
                <div class="sp-timeline-dot">3</div>
                <div class="sp-timeline-card">
                    <h4>Implementation and Optimization</h4>
                    <p>Implement upgrades, optimize systems, and integrate advanced tools to enhance performance, security, and reliability.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="300">
                <div class="sp-timeline-dot">4</div>
                <div class="sp-timeline-card">
                    <h4>Monitoring and Proactive Maintenance</h4>
                    <p>Continuous monitoring ensures potential issues are detected and resolved before they affect operations.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="400">
                <div class="sp-timeline-dot">5</div>
                <div class="sp-timeline-card">
                    <h4>Employee Training and Support</h4>
                    <p>We train your team to use IT systems efficiently and provide ongoing technical support.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="500">
                <div class="sp-timeline-dot">6</div>
                <div class="sp-timeline-card">
                    <h4>Reporting and Strategic Planning</h4>
                    <p>Detailed reports on system performance, incident resolution, and recommendations for future IT improvements.</p>
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
                    <p class="sp-testimonial-text">"ZingoAssist completely transformed our IT infrastructure. Their business IT support services are reliable, fast, and tailored to our needs."</p>
                    <p class="sp-testimonial-author">— Kevin M., CEO</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"The team at ZingoAssist provides excellent IT support services. They resolved issues quickly and helped us implement a secure cloud system."</p>
                    <p class="sp-testimonial-author">— Laura P., Operations Manager</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"As a growing business, we needed scalable IT solutions. ZingoAssist delivered customized business IT services that aligned perfectly with our growth plans."</p>
                    <p class="sp-testimonial-author">— Michael R., IT Director</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Their IT support company is professional and responsive. They handle everything from network issues to security updates, allowing us to focus on our business."</p>
                    <p class="sp-testimonial-author">— Amanda S., COO</p>
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
            <h2 class="sp-section-title">Benefits of Professional IT Support Services</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-bolt"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Reduced Downtime</h4>
                        <p class="sp-benefit-text">Continuous monitoring and proactive maintenance keep systems running smoothly.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-shield-alt"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Enhanced Security</h4>
                        <p class="sp-benefit-text">Cybersecurity measures protect your business from threats and data breaches.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-chart-line"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Improved Productivity</h4>
                        <p class="sp-benefit-text">Efficient IT systems allow employees to focus on core business tasks.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-dollar-sign"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Cost Efficiency</h4>
                        <p class="sp-benefit-text">Outsourcing IT support reduces the need for in-house resources and expensive downtime.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-expand-arrows-alt"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Scalable Solutions</h4>
                        <p class="sp-benefit-text">Services grow with your business, supporting expansion and technology upgrades.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-lightbulb"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Expert Guidance</h4>
                        <p class="sp-benefit-text">Professional IT consulting ensures your technology strategy aligns with your business goals.</p>
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
                    <h4 class="sp-faq-q">What are Business IT Support Services?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">They include a range of solutions to maintain, optimize, and secure IT systems for businesses.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Can ZingoAssist provide remote IT support?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes. We offer both on-site and remote support to resolve issues efficiently.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Do you offer cybersecurity solutions?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Absolutely. Our services include firewalls, antivirus, encryption, and security audits.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Can you handle network setup and maintenance?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes. Our team designs, implements, and manages reliable network infrastructure.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">How do I choose the right IT support package?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">We assess your business needs and recommend a package that fits your size, budget, and IT complexity.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Do you provide IT consulting and strategy planning?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes. We help businesses plan IT strategies aligned with their long-term goals.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Can your services scale as my business grows?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Absolutely. Our solutions are fully scalable, supporting expansion and evolving technology needs.</div>
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
                Whether your company requires ongoing IT support, strategic planning, or a complete IT overhaul, ZingoAssist delivers IT support services designed to optimize technology, secure data, and enhance productivity.
            </p>
            <ul class="sp-cta-list">
                <li><i class="fas fa-check-circle"></i> Maintain reliable IT systems</li>
                <li><i class="fas fa-check-circle"></i> Reduce downtime and technical issues</li>
                <li><i class="fas fa-check-circle"></i> Improve cybersecurity and data protection</li>
                <li><i class="fas fa-check-circle"></i> Optimize IT infrastructure for business growth</li>
            </ul>
            <div class="sp-hero-actions">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Start Your IT Support Project <i class="fas fa-arrow-right"></i>
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
