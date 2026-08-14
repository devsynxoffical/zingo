@extends('layout.main')

@section('title', 'Virtual Property Management Services')
@section('meta_description', 'ZingoAssist offers virtual property management services, including tenant communication, rent collection, and maintenance coordination for landlords and property owners.')

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
                Virtual Property <span class="sp-hero-title-highlight">Management Services</span>
            </h1>

            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="150" data-aos-duration="700">
                Managing rental properties can be time-consuming, stressful, and complex. ZingoAssist provides professional Virtual Property Management Services to support property owners, real estate professionals, and property managers by handling administrative, tenant, and operational tasks remotely. Our solutions allow seamless property oversight, enabling you to focus on growing your portfolio and improving tenant satisfaction.
            </p>
            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">
                Whether you need a property management virtual assistant, a virtual property manager, or a dedicated virtual property management assistant, ZingoAssist delivers reliable, professional, and customizable support.
            </p>
            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="250" data-aos-duration="700">
                With our expert team, advanced technology, and proven processes, we ensure your property operations run efficiently and effectively.
            </p>

            <div class="sp-hero-actions" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Get a Free Consultation <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--outline">
                    Start Your Virtual Property Management Today <i class="fas fa-rocket"></i>
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
                    <i class="fas fa-building"></i>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="700">
                <span class="sp-about-label">Overview</span>
                <h2 class="sp-about-title">About Virtual Property Management Services</h2>
                <p class="sp-about-text">
                    Virtual Property Management Services help property owners and managers oversee their rental or commercial properties remotely. These services are especially useful for landlords managing multiple properties, remote real estate investors, or busy property managers who need support with daily tasks.
                </p>
                <p class="sp-about-text">
                    ZingoAssist solves common property management challenges, including:
                </p>
                <ul class="sp-about-list">
                    <li><i class="fas fa-check-circle"></i> Coordinating maintenance requests across multiple properties</li>
                    <li><i class="fas fa-check-circle"></i> Managing tenant communications and resolving issues promptly</li>
                    <li><i class="fas fa-check-circle"></i> Collecting rent and maintaining accurate financial records</li>
                    <li><i class="fas fa-check-circle"></i> Scheduling inspections and property viewings efficiently</li>
                    <li><i class="fas fa-check-circle"></i> Organizing lease agreements, renewals, and legal documentation</li>
                </ul>
                <p class="sp-about-text">
                    For example, a landlord managing five rental units in different cities might struggle to respond quickly to maintenance requests. ZingoAssist ensures that tenants receive prompt assistance, vendors are scheduled efficiently, and all records are up to date.
                </p>
                <div class="sp-highlight-box">
                    <p>By delegating these tasks to our team, property owners save time, reduce stress, and ensure smoother operations.</p>
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
            <h2 class="sp-section-title">Core Components of Our Virtual Property Management Services</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-comments"></i></div>
                    <h3 class="sp-card-title">1. Tenant Communication & Support</h3>
                    <p class="sp-card-text">Our team manages all tenant interactions professionally. We respond to inquiries, complaints, and maintenance requests promptly, ensuring tenants feel valued. For instance, if a tenant reports a plumbing issue, our virtual property manager coordinates the repair, schedules the vendor, and follows up until the issue is resolved.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-file-contract"></i></div>
                    <h3 class="sp-card-title">2. Lease & Document Management</h3>
                    <p class="sp-card-text">We handle lease agreements, renewals, and legal documentation. This ensures compliance with local regulations and reduces administrative errors. ZingoAssist keeps digital records organized, enabling property owners to access important documents anytime.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-money-bill-wave"></i></div>
                    <h3 class="sp-card-title">3. Rent Collection & Payment Tracking</h3>
                    <p class="sp-card-text">Rent collection can be time-consuming, especially with multiple tenants. We monitor payments, send reminders, and maintain accurate financial records. Owners enjoy consistent cash flow while tenants receive timely communication and transparent billing.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-bullhorn"></i></div>
                    <h3 class="sp-card-title">4. Property Listings & Marketing</h3>
                    <p class="sp-card-text">We create and manage property listings across multiple platforms to attract qualified tenants. Our team optimizes listings with high-quality photos, virtual tours, and compelling descriptions, ensuring maximum visibility.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-tools"></i></div>
                    <h3 class="sp-card-title">5. Vendor & Maintenance Coordination</h3>
                    <p class="sp-card-text">ZingoAssist schedules and oversees maintenance and vendor services, from routine inspections to emergency repairs. Property owners save time while ensuring timely completion of essential tasks.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-clipboard-check"></i></div>
                    <h3 class="sp-card-title">6. Inspection & Reporting Services</h3>
                    <p class="sp-card-text">Our team organizes regular property inspections, documents conditions, and provides detailed reports with recommendations. This proactive approach prevents costly damages and keeps properties in excellent condition.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-calculator"></i></div>
                    <h3 class="sp-card-title">7. Accounting & Financial Oversight</h3>
                    <p class="sp-card-text">We assist with budgeting, expense tracking, and reporting, helping property owners maintain profitability. Our virtual property management services ensure that financial records are accurate and organized for easy access.</p>
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
            <h2 class="sp-section-title">Why Choose ZingoAssist for Virtual Property Management Services?</h2>
            <p class="sp-section-desc">ZingoAssist is a trusted provider of Virtual Property Management Services for several reasons:</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">01</div>
                    <div>
                        <h4 class="sp-choose-title">Experienced Team</h4>
                        <p class="sp-choose-text">Our staff has extensive experience managing properties of all sizes and types.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">02</div>
                    <div>
                        <h4 class="sp-choose-title">Customized Solutions</h4>
                        <p class="sp-choose-text">Every service is tailored to your portfolio and property management needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">03</div>
                    <div>
                        <h4 class="sp-choose-title">Advanced Technology</h4>
                        <p class="sp-choose-text">We use property management software, communication platforms, and automated tools to streamline operations.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">04</div>
                    <div>
                        <h4 class="sp-choose-title">Reliable & Efficient</h4>
                        <p class="sp-choose-text">Tasks are handled promptly, reducing delays and improving tenant satisfaction.</p>
                    </div>
                </div>
        </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">05</div>
                    <div>
                        <h4 class="sp-choose-title">Scalable Support</h4>
                        <p class="sp-choose-text">Whether you have one property or multiple, our services scale as your portfolio grows.</p>
            </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">06</div>
                    <div>
                        <h4 class="sp-choose-title">Confidential & Secure</h4>
                        <p class="sp-choose-text">Tenant data, financial information, and property records are protected with robust security measures.</p>
            </div>
            </div>
            </div>
        </div>
        <p class="text-center mt-4" style="color: var(--sp-body); font-style: italic;" data-aos="fade-up">Our combination of expertise, technology, and dedication ensures that every property owner receives high-quality, professional support.</p>
    </div>
</section>

<!-- ===================== PROCESS / WORKFLOW ===================== -->
<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Process</span>
            <h2 class="sp-section-title">Our Virtual Property Management Services in Action</h2>
        </div>
        <div class="sp-timeline">
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-timeline-dot">1</div>
                <div class="sp-timeline-card">
                    <h4>Portfolio Assessment & Consultation</h4>
                <p>We begin by understanding your property portfolio, challenges, and goals. This assessment helps us design a tailored plan for your property operations.</p>
            </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="100">
                <div class="sp-timeline-dot">2</div>
                <div class="sp-timeline-card">
                    <h4>Task Prioritization & Workflow Planning</h4>
                <p>ZingoAssist identifies high-priority tasks and recurring responsibilities to ensure nothing is overlooked. Tasks are scheduled efficiently, allowing property owners to focus on strategic activities.</p>
            </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="200">
                <div class="sp-timeline-dot">3</div>
                <div class="sp-timeline-card">
                    <h4>Service Execution & Management</h4>
                <p>Our team executes daily property management tasks, including tenant communications, rent collection, inspections, and vendor coordination. Property owners experience smoother operations without micromanaging every detail.</p>
            </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="300">
                <div class="sp-timeline-dot">4</div>
                <div class="sp-timeline-card">
                    <h4>Reporting & Performance Monitoring</h4>
                <p>Clients receive detailed reports covering rent collection, maintenance updates, tenant feedback, and property conditions. Transparent reporting ensures informed decision-making.</p>
            </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="400">
                <div class="sp-timeline-dot">5</div>
                <div class="sp-timeline-card">
                    <h4>Continuous Improvement & Scalability</h4>
                <p>As your portfolio grows, our Virtual Property Management Services scale with you. We continuously refine processes to improve efficiency and outcomes.</p>
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
                    <p class="sp-testimonial-text">"ZingoAssist completely transformed our property management approach. Tenants are happier, and our administrative workload has decreased significantly."</p>
                    <p class="sp-testimonial-author">— Maria L., Landlord</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Their virtual property management assistant handles everything from rent collection to maintenance scheduling. I can focus on acquiring new properties."</p>
                    <p class="sp-testimonial-author">— James T., Property Investor</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"The team is professional, reliable, and responsive. We now have complete visibility into property operations without being on-site."</p>
                    <p class="sp-testimonial-author">— Emily K., Real Estate Manager</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"ZingoAssist helped us streamline operations across multiple rental properties. We save hours each week and our tenants are more satisfied."</p>
                    <p class="sp-testimonial-author">— Robert S., Landlord</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"The virtual property management services provided by ZingoAssist exceeded our expectations. Efficient, organized, and trustworthy."</p>
                    <p class="sp-testimonial-author">— Linda P., Property Owner</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== BENEFITS ===================== -->
<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Advantages</span>
            <h2 class="sp-section-title">Benefits of Virtual Property Management Services</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-hourglass-half"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Time-Saving</h4>
                        <p class="sp-benefit-text">Delegate routine tasks and focus on portfolio growth.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-coins"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Cost-Effective</h4>
                        <p class="sp-benefit-text">Reduce overhead costs while maintaining professional support.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-expand-arrows-alt"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Scalable Solutions</h4>
                        <p class="sp-benefit-text">Easily expand services as your property portfolio grows.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-smile"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Enhanced Tenant Satisfaction</h4>
                        <p class="sp-benefit-text">Efficient communication and maintenance improve retention rates.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-chart-bar"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Financial Accuracy</h4>
                        <p class="sp-benefit-text">Accurate rent tracking and expense management reduce errors.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-cogs"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Operational Efficiency</h4>
                        <p class="sp-benefit-text">Streamlined workflows ensure tasks are completed on time.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-sliders-h"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Customizable Services</h4>
                        <p class="sp-benefit-text">Services tailored to meet unique property management needs.</p>
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
                    <h4 class="sp-faq-q">1. What are virtual property management services?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Remote management of rental or commercial properties, including tenant communication, rent collection, maintenance coordination, and administrative tasks.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">2. How do ZingoAssist virtual property management services work?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">We assess your portfolio, assign tasks to skilled virtual assistants, manage operations, and provide detailed reporting for transparency.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">3. Can I hire a virtual property manager for multiple properties?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes, our services are scalable to manage both small and large property portfolios.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">4. Are virtual property management services secure?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Absolutely. Tenant data, financial records, and property documents are protected with robust security measures.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">5. How quickly can I start services?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Setup is fast, typically within a few days depending on your portfolio size and complexity.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">6. Do you provide customized solutions?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes, every service is tailored to your property type, management needs, and goals.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">7. What tasks can a virtual property management assistant handle?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Tasks include rent collection, tenant communication, lease management, maintenance coordination, reporting, and financial tracking.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">8. How are services priced?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Pricing depends on the number of properties, complexity of tasks, and level of support required.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">9. Can I track performance and operations remotely?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes, ZingoAssist provides detailed reporting and regular updates to keep you informed about property operations.</div>
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
                Partner with ZingoAssist for professional Virtual Property Management Services and streamline your property operations. Our team ensures every task is handled efficiently, giving you more time to focus on growth.
            </p>
            <ul class="sp-cta-list">
                <li><i class="fas fa-check-circle"></i> Improve operational efficiency and tenant satisfaction</li>
                <li><i class="fas fa-check-circle"></i> Ensure timely rent collection and financial accuracy</li>
                <li><i class="fas fa-check-circle"></i> Scale services as your property portfolio grows</li>
                <li><i class="fas fa-check-circle"></i> Reduce administrative workload and save time</li>
            </ul>
            <div class="sp-hero-actions">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Start Your Virtual Property Management Today <i class="fas fa-arrow-right"></i>
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
