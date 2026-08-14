@extends('layout.main')

@section('title', 'Real Estate Transaction Coordinator Services')
@section('meta_description', 'ZingoAssist provides professional real estate transaction coordinator services. Streamline paperwork, deadlines, and client communication for smooth, stress-free closings.')

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
                Real Estate Transaction <span class="sp-hero-title-highlight">Coordinator Services</span>
            </h1>

            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="150" data-aos-duration="700">
                Managing real estate paperwork, deadlines, and compliance can quickly overwhelm even the most experienced agents. ZingoAssist provides reliable Real Estate Transaction Coordinator services that streamline every step of the transaction process, from contract to close. Whether you are an agent, broker, or real estate investor, our team ensures every document, disclosure, and milestone is completed accurately and on time.
            </p>
            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">
                With professional support, dedicated communication, and proven coordination systems, ZingoAssist helps you stay organized, reduce stress, and deliver a seamless closing experience to your clients.
            </p>

            <div class="sp-hero-actions" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Get a Free Consultation <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--outline">
                    Start Your Coordination Services <i class="fas fa-rocket"></i>
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
                    <i class="fas fa-clipboard-check"></i>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="700">
                <span class="sp-about-label">Overview</span>
                <h2 class="sp-about-title">About Real Estate Transaction Coordination</h2>
                <p class="sp-about-text">
                    Real estate professionals deal with countless tasks behind the scenes. From drafting files to meeting contractual deadlines and managing client communication, the workload can be overwhelming. This is where Real Estate Transaction Coordinator services become essential.
                </p>
                <p class="sp-about-text">
                    For example, an agent managing multiple active listings may struggle with constant emails, inspection scheduling, disclosure tracking, and compliance requirements. These challenges can lead to missed deadlines, delayed closings, and unhappy clients. ZingoAssist solves these issues by providing structured coordination support, ensuring every step of the transaction is handled efficiently.
                </p>
                <p class="sp-about-text">
                    We assist agents, brokers, and investors by reducing administrative burdens and helping them deliver exceptional service without sacrificing time or energy. Common problems we help solve include:
                </p>
                <ul class="sp-about-list">
                    <li><i class="fas fa-check-circle"></i> Missed deadlines or incomplete disclosures</li>
                    <li><i class="fas fa-check-circle"></i> Overwhelmed agents juggling multiple closings</li>
                    <li><i class="fas fa-check-circle"></i> Confusion around required documentation</li>
                    <li><i class="fas fa-check-circle"></i> Slow follow-ups that reduce client confidence</li>
                    <li><i class="fas fa-check-circle"></i> Contract errors that delay the entire process</li>
                </ul>
                <div class="sp-highlight-box">
                    <p>By offering powerful Real Estate Transaction Coordinator services, ZingoAssist ensures stress-free, compliant, and smooth closings every time.</p>
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
            <h2 class="sp-section-title">Core Components of Our Coordination Services</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-file-contract"></i></div>
                    <h3 class="sp-card-title">1. Contract-to-Close Management</h3>
                    <p class="sp-card-text">Our team handles the entire transaction lifecycle. From the moment a contract is executed, we ensure every step is followed. For example, agents working with multiple buyers often rely on us to track contingencies, deliver reminders, and manage paperwork deadlines. This keeps every closing on track without unnecessary delays.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-folder-open"></i></div>
                    <h3 class="sp-card-title">2. Document & Compliance Management</h3>
                    <p class="sp-card-text">We collect, review, organize, and verify all documents for accuracy. Whether it is disclosure packages, inspection reports, or escrow instructions, our coordination systems ensure full compliance. A busy brokerage can reduce errors significantly by relying on our document management process.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-comments"></i></div>
                    <h3 class="sp-card-title">3. Client & Vendor Communication</h3>
                    <p class="sp-card-text">Consistent communication is crucial for smooth closings. We coordinate with buyers, sellers, lenders, inspectors, title companies, and escrow officers. For instance, instead of agents spending hours sending reminders, our team provides timely communication that keeps every party aligned.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-hourglass-half"></i></div>
                    <h3 class="sp-card-title">4. Deadline & Contingency Tracking</h3>
                    <p class="sp-card-text">Real estate closings depend heavily on strict timelines. ZingoAssist monitors every contingency, ensures follow-ups, and provides status updates. This ensures no missed deadlines and eliminates common transaction delays.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-database"></i></div>
                    <h3 class="sp-card-title">5. File Organization & Storage</h3>
                    <p class="sp-card-text">We create organized transaction folders, digital records, and completed file packages for future reference. Brokers appreciate this service because it supports compliance and simplifies audits.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-users"></i></div>
                    <h3 class="sp-card-title">6. Support for Buyers, Sellers, & Investors</h3>
                    <p class="sp-card-text">Our transaction coordinator services support all types of real estate clients. Whether an investor is managing multiple property deals or an agent is closing their first transaction, ZingoAssist provides structured, reliable assistance.</p>
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
            <h2 class="sp-section-title">Why Choose ZingoAssist for Coordination Services?</h2>
            <p class="sp-section-desc">Choosing the right partner for Real Estate Transaction Coordinator services can dramatically improve your business efficiency. Here is why agents and brokers trust ZingoAssist:</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">01</div>
                    <div>
                        <h4 class="sp-choose-title">Experienced Coordination Professionals</h4>
                        <p class="sp-choose-text">Our team has coordinated hundreds of successful closings, including residential, commercial, and investment transactions.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">02</div>
                    <div>
                        <h4 class="sp-choose-title">Customized Workflow Systems</h4>
                        <p class="sp-choose-text">We tailor our process to match your brokerage style, client communication preferences, and documentation format.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">03</div>
                    <div>
                        <h4 class="sp-choose-title">Advanced Tools & Technology</h4>
                        <p class="sp-choose-text">We use modern platforms, automated reminders, digital file management, and transaction tracking systems to ensure accuracy.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">04</div>
                    <div>
                        <h4 class="sp-choose-title">Consistent, Reliable Follow-Ups</h4>
                        <p class="sp-choose-text">Clients appreciate our proactive outreach, ensuring no task is overlooked during the transaction.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">05</div>
                    <div>
                        <h4 class="sp-choose-title">Reduced Workload for Agents & Brokers</h4>
                        <p class="sp-choose-text">With professional support handling paperwork and deadlines, you can focus on sales, showings, and client relationships.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">06</div>
                    <div>
                        <h4 class="sp-choose-title">Scalable Support for Growing Agencies</h4>
                        <p class="sp-choose-text">Whether you close five deals per month or fifty, our team provides scalable solutions to support your goals.</p>
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
            <span class="sp-label">Process</span>
            <h2 class="sp-section-title">Our Coordination Services in Action</h2>
        </div>
        <div class="sp-timeline">
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-timeline-dot">1</div>
                <div class="sp-timeline-card">
                    <h4>Initial Consultation & File Setup</h4>
                    <p>We begin by understanding your workflow, communication style, and transaction needs. Once the contract is executed, we create your file, organize documents, and prepare timelines.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="100">
                <div class="sp-timeline-dot">2</div>
                <div class="sp-timeline-card">
                    <h4>Document Review & Compliance Preparation</h4>
                    <p>Our coordinators review every required form and disclosure. For example, a buyer file is checked for missing signatures or outdated forms before it is sent to escrow.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="200">
                <div class="sp-timeline-dot">3</div>
                <div class="sp-timeline-card">
                    <h4>Communication & Coordination</h4>
                    <p>We manage communication with clients, lenders, title officers, inspectors, and more. This keeps everyone updated at each stage of the transaction.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="300">
                <div class="sp-timeline-dot">4</div>
                <div class="sp-timeline-card">
                    <h4>Timeline Monitoring & Deadline Alerts</h4>
                    <p>We track contingencies, clearance dates, appointments, and document delivery deadlines. Our team ensures nothing is missed and updates are sent consistently.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="400">
                <div class="sp-timeline-dot">5</div>
                <div class="sp-timeline-card">
                    <h4>Final Closing Preparation</h4>
                    <p>Before closing, we ensure all documents are complete, contingencies cleared, and files delivered to escrow. The client receives a complete closing packet for their records.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="500">
                <div class="sp-timeline-dot">6</div>
                <div class="sp-timeline-card">
                    <h4>Post-Closing File Completion</h4>
                    <p>We create final closing folders, store documents, and assist with brokerage compliance requirements.</p>
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
                    <p class="sp-testimonial-text">"ZingoAssist completely transformed my workload. Their Real Estate Transaction Coordinator services helped me close more deals without feeling overwhelmed. Every deadline was handled professionally."</p>
                    <p class="sp-testimonial-author">— John D., Real Estate Agent</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Our brokerage uses ZingoAssist for all closings. Their transaction coordinator services ensure that nothing falls through the cracks. Clients appreciate the consistent communication."</p>
                    <p class="sp-testimonial-author">— Sarah P., Brokerage Owner</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"As an investor with multiple properties, I needed help tracking paperwork and closing timelines. ZingoAssist provided exceptional transaction coordination support."</p>
                    <p class="sp-testimonial-author">— Michael R., Investor</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Their team handled all communications, disclosures, and vendor coordination for my listings. It made my job so much easier and improved my client reviews."</p>
                    <p class="sp-testimonial-author">— Emily T., Realtor</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Thanks to their organized process, our closings are smoother and more efficient. I recommend them to any agent needing reliable coordination support."</p>
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
            <span class="sp-label">Advantages</span>
            <h2 class="sp-section-title">Benefits of Professional Transaction Coordination</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-clock"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Save Time & Reduce Stress</h4>
                        <p class="sp-benefit-text">Agents can reclaim hours every week by delegating paperwork and communication to our coordinators.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-smile"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Higher Client Satisfaction</h4>
                        <p class="sp-benefit-text">Smooth communication, organized files, and timely follow-ups create a professional and positive experience for clients.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-check-double"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Fewer Errors & Delays</h4>
                        <p class="sp-benefit-text">Our compliance processes significantly reduce mistakes that can slow down closings.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-chart-line"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Increased Productivity</h4>
                        <p class="sp-benefit-text">Agents can focus more on lead generation, showings, and negotiations instead of administrative tasks.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-expand-arrows-alt"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Scalable Support for Growth</h4>
                        <p class="sp-benefit-text">As your business expands, our coordination support grows with you.</p>
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
                    <h4 class="sp-faq-q">1. What are Real Estate Transaction Coordinator services?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">They include managing paperwork, timelines, communication, and compliance from contract to close.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">2. What do transaction coordinator companies do?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">They manage disclosures, deadlines, client communication, and file preparation for agents and brokers.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">3. Do you offer remote coordination support?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes. We provide virtual coordination for agents, brokers, and investors nationwide.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">4. How do your transaction coordinator services work?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">We organize documents, track deadlines, communicate with all parties, and manage the entire closing process.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">5. Can these services help new agents?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Absolutely. New agents benefit from structured guidance and administrative support during each transaction.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">6. How long does it take to start?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Most clients get started within 24 to 48 hours.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">7. Is pricing customizable?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes. Pricing depends on transaction volume and the level of coordination required.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">8. Can I use your service for multiple properties?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes. We support investors and agents handling multiple active files.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">9. Are my files kept confidential?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">All documents and client information are handled with full privacy and security.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">10. How do you improve closing efficiency?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">By tracking deadlines, managing documents, and providing consistent communication, our service eliminates delays and ensures smooth transactions.</div>
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
                Whether you need full support or assistance with select tasks, ZingoAssist provides professional Real Estate Transaction Coordinator services that help you stay organized, improve client satisfaction, and close deals faster.
            </p>
            <ul class="sp-cta-list">
                <li><i class="fas fa-check-circle"></i> Streamline your transaction process</li>
                <li><i class="fas fa-check-circle"></i> Reduce paperwork stress</li>
                <li><i class="fas fa-check-circle"></i> Deliver a seamless closing experience</li>
                <li><i class="fas fa-check-circle"></i> Focus on income-producing tasks</li>
            </ul>
            <div class="sp-hero-actions">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Start Your Coordination Services Today <i class="fas fa-arrow-right"></i>
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
