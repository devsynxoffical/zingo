@extends('layout.main')

@section('title', 'Personal Assistance Services | ZingoAssist')
@section('meta_description', 'Zingo Assist provides professional personal assistant services & virtual personal assistant services to manage tasks and communications efficiently.')

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
                Personal Assistance <span class="sp-hero-title-highlight">Services</span>
            </h1>

            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="150" data-aos-duration="700">
                Maximize productivity and simplify your day with ZingoAssist's personal assistance services. Our solutions help busy professionals, entrepreneurs, and small business owners manage schedules, communications, and administrative tasks efficiently. Whether you need hands-on support through personal assistant service or remote help via virtual personal assistant services, ZingoAssist provides reliable, professional assistance tailored to your needs.
            </p>
            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">
                With our expert team, advanced tools, and customized workflows, we ensure your tasks are handled efficiently, saving time and allowing you to focus on high-priority responsibilities.
            </p>

            <div class="sp-hero-actions" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Get a Free Consultation <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--outline">
                    Start Your Personal Assistance Services <i class="fas fa-rocket"></i>
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
                    <i class="fas fa-user-friends"></i>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="700">
                <span class="sp-about-label">Overview</span>
                <h2 class="sp-about-title">About Personal Assistance Services</h2>
                <p class="sp-about-text">
                    Businesses and professionals today face overwhelming daily demands that often consume time better spent on strategic priorities. Personal assistance services are designed to alleviate these pressures by managing administrative tasks, scheduling, and communications efficiently.
                </p>
                <p class="sp-about-text">
                    For example, a small business owner may struggle to coordinate meetings, respond to emails promptly, and handle client follow-ups, which can affect growth and customer satisfaction. ZingoAssist resolves these challenges by providing professional personal assistant services that streamline workflows, reduce missed deadlines, and enhance productivity.
                </p>
                <p class="sp-about-text">
                    Our virtual personal assistant services extend the same high-quality support remotely, allowing busy executives and entrepreneurs to maintain full operational control without hiring in-house staff. Common challenges solved include:
                </p>
                <ul class="sp-about-list">
                    <li><i class="fas fa-check-circle"></i> Overbooked schedules and missed appointments</li>
                    <li><i class="fas fa-check-circle"></i> Unmanaged email inboxes and delayed responses</li>
                    <li><i class="fas fa-check-circle"></i> Inefficient administrative processes and task tracking</li>
                    <li><i class="fas fa-check-circle"></i> Lack of support for event planning, travel, or personal errands</li>
                </ul>
                <div class="sp-highlight-box">
                    <p>By leveraging ZingoAssist's expertise, clients can focus on critical business decisions while routine responsibilities are efficiently handled.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CORE FEATURES ===================== -->
<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">What We Do</span>
            <h2 class="sp-section-title">Core Components / Services Included</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="far fa-calendar-check"></i></div>
                    <h3 class="sp-card-title">1. Scheduling & Calendar Management</h3>
                    <p class="sp-card-text">We take control of your calendar, ensuring meetings, appointments, and deadlines are organized without conflicts. For example, a corporate executive can delegate complex travel and meeting arrangements to our team, freeing hours each week. Our personal assistant services guarantee you always stay on top of your commitments.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="far fa-envelope"></i></div>
                    <h3 class="sp-card-title">2. Email & Communication Management</h3>
                    <p class="sp-card-text">Our team handles your correspondence efficiently. From filtering priority emails to drafting responses and managing follow-ups, our personal assistant service ensures communication remains timely and professional. For instance, busy entrepreneurs benefit from our proactive email management, reducing delayed client responses and missed opportunities.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-plane-departure"></i></div>
                    <h3 class="sp-card-title">3. Travel & Event Planning</h3>
                    <p class="sp-card-text">Whether it's booking flights, arranging accommodations, or organizing corporate events, ZingoAssist handles all logistics. A small business preparing for an industry conference can rely on our team to coordinate travel, meeting schedules, and client engagements without added stress.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-file-alt"></i></div>
                    <h3 class="sp-card-title">4. Administrative Support</h3>
                    <p class="sp-card-text">We manage data entry, report generation, document preparation, and other administrative tasks that often consume precious time. Our personal assistant services ensure that these tasks are completed accurately and promptly, freeing up clients to focus on business growth.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-shopping-bag"></i></div>
                    <h3 class="sp-card-title">5. Personal Errands & Lifestyle Support</h3>
                    <p class="sp-card-text">ZingoAssist goes beyond traditional office support, assisting with personal tasks such as reminders, appointments, and lifestyle management. For example, busy professionals can have personal errands scheduled and managed efficiently, maintaining balance between work and life.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-laptop-house"></i></div>
                    <h3 class="sp-card-title">6. Virtual Personal Assistant Services</h3>
                    <p class="sp-card-text">Our virtual personal assistant services provide remote access to dedicated support for scheduling, communications, research, and administrative tasks. Entrepreneurs and executives benefit from this flexibility, accessing reliable assistance anytime, anywhere.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== WHY CHOOSE US ===================== -->
<section class="sp-section">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Our Advantage</span>
            <h2 class="sp-section-title">Why Choose ZingoAssist?</h2>
            <p class="sp-section-desc">ZingoAssist stands out as a provider of professional personal assistant services because of our combination of expertise, technology, and client-focused solutions.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">01</div>
                    <div>
                        <h4 class="sp-choose-title">Experienced Professionals</h4>
                        <p class="sp-choose-text">Our team has years of experience providing personal assistant services for executives, entrepreneurs, and business owners across industries.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">02</div>
                    <div>
                        <h4 class="sp-choose-title">Tailored Support</h4>
                        <p class="sp-choose-text">Every service plan is customized to align with your workflow, priorities, and business objectives.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">03</div>
                    <div>
                        <h4 class="sp-choose-title">Technology-Driven Solutions</h4>
                        <p class="sp-choose-text">We leverage advanced organizational tools, automation, and virtual platforms to optimize task management.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">04</div>
                    <div>
                        <h4 class="sp-choose-title">Proven Results</h4>
                        <p class="sp-choose-text">Clients consistently report increased productivity, better organization, and significant time savings.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">05</div>
                    <div>
                        <h4 class="sp-choose-title">Reliable & Confidential</h4>
                        <p class="sp-choose-text">Every task is handled with discretion, ensuring privacy and professionalism.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">06</div>
                    <div>
                        <h4 class="sp-choose-title">Comprehensive Service Management</h4>
                        <p class="sp-choose-text">From scheduling and communication to administrative tasks, we manage every aspect of your assistant needs.</p>
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
            <span class="sp-label">How It Works</span>
            <h2 class="sp-section-title">Our Services in Action</h2>
        </div>
        <div class="sp-timeline">
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-timeline-dot">1</div>
                <div class="sp-timeline-card">
                    <h4>Consultation & Goal Setting</h4>
                    <p>We begin by understanding your daily workflow, priorities, and business goals. This allows us to tailor personal assistant services to your specific needs and ensure maximum efficiency.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="100">
                <div class="sp-timeline-dot">2</div>
                <div class="sp-timeline-card">
                    <h4>Task Mapping & Delegation</h4>
                    <p>By identifying routine and time-intensive responsibilities, we strategically delegate tasks to maximize productivity. This ensures that high-value work gets your focus while routine tasks are handled professionally.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="200">
                <div class="sp-timeline-dot">3</div>
                <div class="sp-timeline-card">
                    <h4>Scheduling & Communication Management</h4>
                    <p>Our team manages your appointments, calendars, and emails. Clients experience reduced scheduling conflicts and faster response times, leading to smoother operations.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="300">
                <div class="sp-timeline-dot">4</div>
                <div class="sp-timeline-card">
                    <h4>Administrative Support</h4>
                    <p>From document preparation to reporting and data management, our administrative support ensures all tasks are completed accurately and on time.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="400">
                <div class="sp-timeline-dot">5</div>
                <div class="sp-timeline-card">
                    <h4>Virtual Assistance & Flexibility</h4>
                    <p>Through virtual personal assistant services, clients access dedicated support remotely, allowing seamless task management even for remote teams or busy professionals on the go.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="500">
                <div class="sp-timeline-dot">6</div>
                <div class="sp-timeline-card">
                    <h4>Reporting & Continuous Optimization</h4>
                    <p>ZingoAssist provides detailed progress reports, evaluates task completion, and continuously optimizes processes to ensure that support remains effective and efficient.</p>
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
                    <p class="sp-testimonial-text">"ZingoAssist streamlined my daily workflow. Their personal assistant services allowed me to focus on growing my business while they handled emails, scheduling, and administrative tasks."</p>
                    <p class="sp-testimonial-author">— John D., CEO</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"The virtual support provided by ZingoAssist saved me hours each week. Their virtual personal assistant services are reliable and professional."</p>
                    <p class="sp-testimonial-author">— Sarah P., Entrepreneur</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Thanks to ZingoAssist, our team no longer struggles with scheduling and communications. Their assistance has significantly improved our efficiency."</p>
                    <p class="sp-testimonial-author">— Michael R., Business Owner</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"ZingoAssist handled all my event planning and travel logistics seamlessly. Their personal assistant services exceeded my expectations."</p>
                    <p class="sp-testimonial-author">— Emily T., Consultant</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"Their team provided dedicated support for client follow-ups and document management. I can now focus on strategic priorities without worrying about administrative work."</p>
                    <p class="sp-testimonial-author">— Laura M., Startup Founder</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <p class="sp-testimonial-text">"With ZingoAssist, I finally have time for strategic planning. Their personal assistant service ensures all my routine tasks are handled efficiently."</p>
                    <p class="sp-testimonial-author">— Kevin L., Entrepreneur</p>
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
            <h2 class="sp-section-title">Benefits of Professional Personal Assistance Services</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-hourglass-half"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Time-Saving</h4>
                        <p class="sp-benefit-text">Delegate routine tasks to focus on high-impact responsibilities, freeing hours each week.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-chart-line"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Enhanced Productivity</h4>
                        <p class="sp-benefit-text">Efficient task management ensures smooth operations and reduces stress.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-expand-arrows-alt"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Scalable Support</h4>
                        <p class="sp-benefit-text">Services can expand as your business or personal needs grow, from part-time to full-time virtual assistance.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-coins"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Cost-Effective</h4>
                        <p class="sp-benefit-text">Avoid hiring full-time staff while enjoying professional support.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-shield-alt"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Peace of Mind</h4>
                        <p class="sp-benefit-text">Reliable, confidential, and professional assistance ensures no task is overlooked.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-balance-scale"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Improved Work-Life Balance</h4>
                        <p class="sp-benefit-text">Reclaim personal time by offloading routine and administrative tasks to our skilled team.</p>
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
                    <h4 class="sp-faq-q">1. What are personal assistance services?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Professional support that helps manage scheduling, communications, administrative tasks, and personal responsibilities efficiently.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">2. How do ZingoAssist services work?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">We assess your needs, delegate tasks, manage communications, and provide ongoing support for streamlined operations.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">3. Are virtual personal assistant services available?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes. Our virtual personal assistant services offer remote support for scheduling, emails, research, and administrative tasks.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">4. Can you manage confidential tasks?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Absolutely. Our team handles all responsibilities with discretion and professionalism.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">5. How quickly can I start services?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Setup is typically within a few days, depending on task complexity and scope.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">6. Are services customizable?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes. Every plan is tailored to your unique workflow, industry, and priorities.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">7. How is pricing determined?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Pricing is based on the scope of tasks, hours required, and level of support needed.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">8. Can your services scale as my business grows?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes. We provide scalable solutions from part-time support to full-time virtual assistance.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">9. Do you provide dedicated support for recurring tasks?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes. Recurring tasks, follow-ups, and administrative responsibilities are managed consistently for maximum efficiency.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">10. How do ZingoAssist personal assistant services improve productivity?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">By handling routine tasks, emails, scheduling, and administrative duties, clients can focus on high-priority work and decision-making.</div>
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
                Whether you need personal assistant services or virtual personal assistant services, ZingoAssist provides tailored solutions to streamline tasks, save time, and boost productivity.
            </p>
            <p class="sp-cta-text">Partner with us today to:</p>
            <ul class="sp-cta-list">
                <li><i class="fas fa-check-circle"></i> Reclaim your valuable time</li>
                <li><i class="fas fa-check-circle"></i> Focus on strategic priorities</li>
                <li><i class="fas fa-check-circle"></i> Improve organization and workflow efficiency</li>
                <li><i class="fas fa-check-circle"></i> Achieve a better work-life balance</li>
            </ul>
            <div class="sp-hero-actions">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Start Your Personal Assistance Services Today <i class="fas fa-arrow-right"></i>
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
