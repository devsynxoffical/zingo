@extends('layout.main')

@section('title', 'Virtual Business Assistant Services | Zingo Assist')
@section('meta_description', 'ZingoAssist provides professional virtual business assistant services, small business virtual assistant support, and task management to improve productivity and efficiency.')

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
                Virtual Business <span class="sp-hero-title-highlight">Assistant Services</span>
            </h1>

            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="150" data-aos-duration="700">
                Looking to streamline your business operations and save time? ZingoAssist's Virtual Business Assistant Services are designed to support entrepreneurs, small businesses, and busy professionals in managing tasks, communications, and day-to-day operations efficiently. Our solutions empower you to focus on strategic priorities while we handle the administrative and operational workload.
            </p>
            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">
                Whether you need a virtual assistant for business, a small business virtual assistant, or tailored support for specific projects, ZingoAssist delivers professional, reliable, and customized assistance.
            </p>
            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="250" data-aos-duration="700">
                With our expert team, proven processes, and advanced tools, ZingoAssist ensures your Business Assistant Services provide measurable results, enhanced productivity, and greater operational efficiency.
            </p>

            <div class="sp-hero-actions" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Get a Free Consultation <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--outline">
                    Start Your Virtual Business Assistant Services <i class="fas fa-rocket"></i>
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
                    <i class="fas fa-chart-pie"></i>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="700">
                <span class="sp-about-label">Overview</span>
                <h2 class="sp-about-title">What Are Virtual Business Assistant Services?</h2>
                <p class="sp-about-text">
                    Virtual Business Assistant Services are professional support services that help businesses and professionals manage administrative, operational, and communication tasks remotely. Instead of hiring in-house staff, companies can leverage skilled virtual assistants to handle daily responsibilities efficiently.
                </p>
                <p class="sp-about-text">
                    ZingoAssist's services are tailored to meet the needs of busy entrepreneurs and small businesses. Common challenges our business assistant services solve include:
                </p>
                <ul class="sp-about-list">
                    <li><i class="fas fa-check-circle"></i> Overloaded email inboxes and delayed responses</li>
                    <li><i class="fas fa-check-circle"></i> Scheduling conflicts and missed appointments</li>
                    <li><i class="fas fa-check-circle"></i> Inconsistent client follow-ups and lead management</li>
                    <li><i class="fas fa-check-circle"></i> Administrative bottlenecks and operational inefficiencies</li>
                    <li><i class="fas fa-check-circle"></i> Event planning, travel arrangements, and project support</li>
                </ul>
                <div class="sp-highlight-box">
                    <p>By utilizing our virtual assistant for business solutions, clients gain more time, reduce stress, and improve overall business performance.</p>
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
            <h2 class="sp-section-title">Core Components of Our Virtual Business Assistant Services</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-file-invoice"></i></div>
                    <h3 class="sp-card-title">1. Administrative Support</h3>
                    <p class="sp-card-text">Our virtual assistants handle data entry, document preparation, reporting, and other administrative tasks efficiently. For example, a small business owner can delegate repetitive administrative work, allowing them to focus on sales and strategy.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="far fa-envelope-open"></i></div>
                    <h3 class="sp-card-title">2. Email & Communication Management</h3>
                    <p class="sp-card-text">We manage email correspondence, filter priority messages, draft responses, and ensure timely follow-ups. A busy entrepreneur can rely on our virtual assistant small business services to maintain professional communication without delays.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="far fa-calendar-alt"></i></div>
                    <h3 class="sp-card-title">3. Scheduling & Calendar Management</h3>
                    <p class="sp-card-text">Our team organizes appointments, meetings, and reminders to prevent scheduling conflicts. For instance, a startup founder can delegate all calendar management, ensuring optimized daily workflows and avoiding missed client calls.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-share-alt"></i></div>
                    <h3 class="sp-card-title">4. Social Media & Online Presence Support</h3>
                    <p class="sp-card-text">We assist with social media management, content scheduling, and engagement monitoring. Businesses benefit from consistent online activity and improved brand presence without spending hours managing social channels.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-search-dollar"></i></div>
                    <h3 class="sp-card-title">5. Research & Data Analysis</h3>
                    <p class="sp-card-text">Our virtual assistants conduct market research, competitor analysis, and data collection to support informed business decisions. For example, a consultant preparing for a client presentation can receive actionable insights from our team.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-tasks"></i></div>
                    <h3 class="sp-card-title">6. Project Management Support</h3>
                    <p class="sp-card-text">We track projects, deadlines, and deliverables, ensuring tasks are completed efficiently. Small business teams benefit from improved collaboration, timely updates, and smoother project workflows.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-user-check"></i></div>
                    <h3 class="sp-card-title">7. Virtual Personal Support</h3>
                    <p class="sp-card-text">Beyond business tasks, our assistants can handle personal tasks, such as reminders, travel bookings, and lifestyle management. Entrepreneurs and busy professionals enjoy better work-life balance with this comprehensive support.</p>
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
            <h2 class="sp-section-title">Why Choose ZingoAssist for Virtual Business Assistant Services?</h2>
            <p class="sp-section-desc">ZingoAssist stands out as a provider of Business Assistant Services due to our experience, technology, and results-oriented approach.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">01</div>
                    <div>
                        <h4 class="sp-choose-title">Experienced Team</h4>
                        <p class="sp-choose-text">Our virtual assistants are trained professionals with expertise in multiple industries and business operations.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">02</div>
                    <div>
                        <h4 class="sp-choose-title">Customizable Services</h4>
                        <p class="sp-choose-text">Every plan is tailored to your business needs, ensuring maximum efficiency and relevance.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">03</div>
                    <div>
                        <h4 class="sp-choose-title">Advanced Tools</h4>
                        <p class="sp-choose-text">We leverage project management platforms, communication software, and automation tools to streamline operations.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">04</div>
                    <div>
                        <h4 class="sp-choose-title">Proven Results</h4>
                        <p class="sp-choose-text">Clients experience improved productivity, faster response times, and reduced operational stress.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">05</div>
                    <div>
                        <h4 class="sp-choose-title">Flexible & Scalable</h4>
                        <p class="sp-choose-text">Our services can grow with your business, from part-time support to full-time virtual assistance.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">06</div>
                    <div>
                        <h4 class="sp-choose-title">Confidential & Professional</h4>
                        <p class="sp-choose-text">Every task is handled with discretion and professionalism, protecting sensitive business information.</p>
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
            <h2 class="sp-section-title">Our Virtual Business Assistant Services in Action</h2>
        </div>
        <div class="sp-timeline">
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-timeline-dot">1</div>
                <div class="sp-timeline-card">
                    <h4>Consultation & Requirement Assessment</h4>
                    <p>We begin by understanding your business, workflows, and priorities. This ensures our business assistant services align with your objectives.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="100">
                <div class="sp-timeline-dot">2</div>
                <div class="sp-timeline-card">
                    <h4>Task Identification & Prioritization</h4>
                    <p>We map out your daily, weekly, and project-based tasks, identifying which responsibilities can be delegated to a virtual assistant for maximum efficiency.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="200">
                <div class="sp-timeline-dot">3</div>
                <div class="sp-timeline-card">
                    <h4>Task Execution & Management</h4>
                    <p>Our team handles assigned tasks, manages communications, schedules appointments, and ensures timely completion of projects.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="300">
                <div class="sp-timeline-dot">4</div>
                <div class="sp-timeline-card">
                    <h4>Reporting & Optimization</h4>
                    <p>Regular progress reports allow clients to track outcomes, monitor performance, and optimize workflows. This continuous improvement ensures tasks are completed effectively.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="400">
                <div class="sp-timeline-dot">5</div>
                <div class="sp-timeline-card">
                    <h4>Scalable Support</h4>
                    <p>As your business grows, ZingoAssist scales services to meet increased demands, providing flexible support for expanding teams and projects.</p>
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
                    <p class="sp-testimonial-text">"ZingoAssist's virtual business assistant services transformed the way I manage my business. Their support allowed me to focus on strategic growth while they handled administrative tasks."</p>
                    <p class="sp-testimonial-author">— Jennifer L., Entrepreneur</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Our small business saw immediate efficiency improvements. The team's attention to detail and professionalism exceeded expectations."</p>
                    <p class="sp-testimonial-author">— David M., Startup Founder</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Thanks to ZingoAssist, I finally have time for high-priority projects. Their virtual assistant services are reliable, responsive, and highly skilled."</p>
                    <p class="sp-testimonial-author">— Emily R., Consultant</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"ZingoAssist helped streamline our operations and manage client communications. The impact on productivity has been remarkable."</p>
                    <p class="sp-testimonial-author">— Robert P., Small Business Owner</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Their team is professional and adaptable. I can delegate tasks with confidence, knowing they'll be handled promptly and efficiently."</p>
                    <p class="sp-testimonial-author">— Laura K., Business Owner</p>
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
            <h2 class="sp-section-title">Benefits of Virtual Business Assistant Services</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-hourglass-half"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Time Efficiency</h4>
                        <p class="sp-benefit-text">Delegate routine tasks to focus on high-value responsibilities and strategic planning.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-coins"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Cost-Effective</h4>
                        <p class="sp-benefit-text">Access professional assistance without the overhead of full-time staff.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-expand-arrows-alt"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Scalable Solutions</h4>
                        <p class="sp-benefit-text">Services grow with your business, offering flexibility for small or expanding operations.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-chart-line"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Increased Productivity</h4>
                        <p class="sp-benefit-text">Streamlined workflows reduce missed deadlines and operational bottlenecks.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-balance-scale"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Enhanced Work-Life Balance</h4>
                        <p class="sp-benefit-text">Free up time for personal commitments while staying on top of business tasks.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-user-tie"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Professional Support</h4>
                        <p class="sp-benefit-text">Reliable and skilled virtual assistants ensure tasks are completed accurately and timely.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-sliders-h"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Custom Solutions</h4>
                        <p class="sp-benefit-text">Services tailored to business size, industry, and workflow priorities.</p>
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
                    <h4 class="sp-faq-q">1. What are Virtual Business Assistant Services?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Professional remote support for administrative, operational, and communication tasks to improve efficiency and productivity.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">2. How do ZingoAssist virtual assistant services work?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">We assess your needs, prioritize tasks, assign them to dedicated virtual assistants, and provide reporting for continuous optimization.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">3. Can I hire a virtual assistant for small business needs?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes. Our small business virtual assistant services cater to entrepreneurs, startups, and small teams.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">4. Are virtual assistants available full-time?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes. Services can be part-time or full-time based on your business requirements.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">5. How do you ensure confidentiality?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">All tasks are handled with discretion, and sensitive information is protected under strict privacy protocols.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">6. How quickly can I get started?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Setup is fast, usually within a few days, depending on your scope and requirements.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">7. Do you offer task-specific support?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes. Tasks ranging from email management to project coordination and research can be handled by our team.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">8. Can I scale services as my business grows?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Absolutely. Our services are flexible and scalable to meet growing business demands.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">9. How are virtual assistant services priced?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Pricing is based on hours required, task complexity, and level of support needed.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">10. What industries do you serve?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">We support entrepreneurs and businesses across multiple sectors, including tech, consulting, healthcare, retail, and professional services.</div>
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
                Partner with ZingoAssist for professional Virtual Business Assistant Services and take control of your time, workflow, and productivity. Our team ensures every task is managed efficiently so you can focus on strategic priorities.
            </p>
            <ul class="sp-cta-list">
                <li><i class="fas fa-check-circle"></i> Improve productivity and operational efficiency</li>
                <li><i class="fas fa-check-circle"></i> Streamline communications and task management</li>
                <li><i class="fas fa-check-circle"></i> Scale services as your business grows</li>
                <li><i class="fas fa-check-circle"></i> Achieve better work-life balance</li>
            </ul>
            <div class="sp-hero-actions">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Start Your Virtual Business Assistant Services Today <i class="fas fa-arrow-right"></i>
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
