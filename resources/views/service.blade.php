@extends('layout.main')

@section('title', 'Explore our Virtual Assistance Services')
@section('meta_description', 'Discover the full suite of virtual assistant services offered by Zingo Assist, including digital marketing, SEO optimization, IT support, lead generation, cold calling, and bookkeeping.')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/our-services.css') }}?v={{ time() }}">
    <style>.header-section { background: #A52673; }</style>
@endpush

@section('content')
<div class="os-page">

    <!-- ========== HERO ========== -->
    <section class="os-hero">
        <div class="os-hero-bg-shapes">
            <div class="os-hero-orb os-hero-orb--1"></div>
            <div class="os-hero-orb os-hero-orb--2"></div>
            <div class="os-hero-orb os-hero-orb--3"></div>
            <div class="os-hero-orb os-hero-orb--4"></div>
        </div>
        <div class="os-hero-grid-lines"></div>

        <div class="container">
            <div class="os-hero-inner" data-aos="fade-up" data-aos-duration="700">
                <div class="os-hero-badge">
                    <span class="os-hero-badge-dot"></span>
                    #1 Virtual Assistant Agency in the USA
                </div>
                <h1 class="os-hero-title">
                    Professional Virtual Assistance
                    <span class="os-hero-title-highlight">Services for Your Business</span>
                </h1>
                <p class="os-hero-subtitle">
                    At Zingo Assist, we offer comprehensive Virtual Assistance Services to help businesses streamline operations, boost productivity, and grow efficiently. Whether you are a startup or an established company, our solutions are tailored to meet your unique needs.
                </p>
                <div class="os-hero-trust" data-aos="fade-up" data-aos-delay="100">
                    <div class="os-hero-trust-item">
                        <div class="os-hero-trust-icon"><i class="fas fa-users"></i></div>
                        <span>Expert Team</span>
                    </div>
                    <div class="os-hero-trust-divider"></div>
                    <div class="os-hero-trust-item">
                        <div class="os-hero-trust-icon"><i class="fas fa-headset"></i></div>
                        <span>24/7 Support</span>
                    </div>
                    <div class="os-hero-trust-divider"></div>
                    <div class="os-hero-trust-item">
                        <div class="os-hero-trust-icon"><i class="fas fa-award"></i></div>
                        <span>Quality Guaranteed</span>
                    </div>
                </div>
                <div class="os-hero-actions" data-aos="fade-up" data-aos-delay="200">
                    <a href="#services" class="os-btn-primary scroll-to-section">
                        Explore Services
                        <i class="fas fa-arrow-down"></i>
                    </a>
                    <a href="{{ route('contact') }}" class="os-btn-glass">
                        Book Free Consultation
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- ========== SERVICES GRID ========== -->
    <section id="services" class="os-services">
        <div class="container">
            <div class="os-section-header" data-aos="fade-up">
                <div class="os-section-tag">What We Offer</div>
                <h2 class="os-section-title">Our Premium Services</h2>
                <p class="os-section-desc">Comprehensive solutions crafted to help your business thrive in a competitive digital world.</p>
            </div>

            <div class="row g-4">
                <!-- 1. Lead Generation -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <a href="{{ route('service.lead_generation') }}" class="os-service-card">
                        <div class="os-card-accent"></div>
                        <div class="os-card-header">
                            <div class="os-card-icon">
                                <img src="{{ asset('assets/images/icon2/lead_generation.png') }}" alt="Lead Generation">
                            </div>
                            <span class="os-card-number">01</span>
                        </div>
                        <h3 class="os-card-title">Lead Generation</h3>
                        <p class="os-card-text">Our Lead Generation services are crafted to identify high-quality potential clients who are genuinely interested in your products or services. Using targeted strategies, we help businesses generate a steady stream of leads that convert into long-term customers.</p>
                        <div class="os-card-footer">
                            <span class="os-card-link">Learn More</span>
                            <span class="os-card-arrow"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <!-- 2. Cold Calling -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
                    <a href="{{ route('service.cold_calling') }}" class="os-service-card">
                        <div class="os-card-accent"></div>
                        <div class="os-card-header">
                            <div class="os-card-icon">
                                <img src="{{ asset('assets/images/icon2/cold_calling.png') }}" alt="Cold Calling">
                            </div>
                            <span class="os-card-number">02</span>
                        </div>
                        <h3 class="os-card-title">Cold Calling</h3>
                        <p class="os-card-text">Engage your prospects effectively with our Cold Calling services. Our professional team conducts outreach campaigns, builds meaningful connections, and ensures your brand voice is represented with precision and professionalism.</p>
                        <div class="os-card-footer">
                            <span class="os-card-link">Learn More</span>
                            <span class="os-card-arrow"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <!-- 3. Web Development -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ route('service.web_development') }}" class="os-service-card">
                        <div class="os-card-accent"></div>
                        <div class="os-card-header">
                            <div class="os-card-icon">
                                <img src="{{ asset('assets/images/icon2/app_dev.png') }}" alt="Web Development">
                            </div>
                            <span class="os-card-number">03</span>
                        </div>
                        <h3 class="os-card-title">Web Development</h3>
                        <p class="os-card-text">Our Web Development services focus on creating websites that are not only visually appealing but also user-friendly and high-performing. We design websites optimized for search engines and built to convert visitors into loyal customers.</p>
                        <div class="os-card-footer">
                            <span class="os-card-link">Learn More</span>
                            <span class="os-card-arrow"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <!-- 4. Personal Assistance -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <a href="{{ route('service.personal_assistance') }}" class="os-service-card">
                        <div class="os-card-accent"></div>
                        <div class="os-card-header">
                            <div class="os-card-icon">
                                <img src="{{ asset('assets/images/icon2/personal_assistance.png') }}" alt="Personal Assistance">
                            </div>
                            <span class="os-card-number">04</span>
                        </div>
                        <h3 class="os-card-title">Personal Assistance</h3>
                        <p class="os-card-text">Our Personal Assistance services provide tailored support for executives, entrepreneurs, and busy professionals. From scheduling and calendar management to handling administrative tasks, we ensure your time is maximized for strategic activities.</p>
                        <div class="os-card-footer">
                            <span class="os-card-link">Learn More</span>
                            <span class="os-card-arrow"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <!-- 5. Digital Marketing -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
                    <a href="{{ route('service.digital_marketing') }}" class="os-service-card">
                        <div class="os-card-accent"></div>
                        <div class="os-card-header">
                            <div class="os-card-icon">
                                <img src="{{ asset('assets/images/icon2/digital_marketing.png') }}" alt="Digital Marketing">
                            </div>
                            <span class="os-card-number">05</span>
                        </div>
                        <h3 class="os-card-title">Digital Marketing</h3>
                        <p class="os-card-text">Boost your online presence with our comprehensive Digital Marketing strategies. From social media management and content marketing to email campaigns and paid advertising, we deliver solutions that drive measurable engagement and growth.</p>
                        <div class="os-card-footer">
                            <span class="os-card-link">Learn More</span>
                            <span class="os-card-arrow"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <!-- 6. Graphic Design -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ route('service.graphic_design') }}" class="os-service-card">
                        <div class="os-card-accent"></div>
                        <div class="os-card-header">
                            <div class="os-card-icon">
                                <img src="{{ asset('assets/images/icon2/web_design.png') }}" alt="Graphic Design">
                            </div>
                            <span class="os-card-number">06</span>
                        </div>
                        <h3 class="os-card-title">Graphic Design</h3>
                        <p class="os-card-text">Our creative team specializes in producing high-quality graphic designs that reflect your brand identity. Whether it is logo design, website visuals, or marketing collateral, we create designs that leave a lasting impression.</p>
                        <div class="os-card-footer">
                            <span class="os-card-link">Learn More</span>
                            <span class="os-card-arrow"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <!-- 7. Search SEO -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <a href="{{ route('service.search_seo') }}" class="os-service-card">
                        <div class="os-card-accent"></div>
                        <div class="os-card-header">
                            <div class="os-card-icon">
                                <img src="{{ asset('assets/images/icon2/seo.png') }}" alt="Search SEO">
                            </div>
                            <span class="os-card-number">07</span>
                        </div>
                        <h3 class="os-card-title">Search SEO</h3>
                        <p class="os-card-text">Increase your visibility online with our expert SEO services. We optimize your website and content to improve search engine rankings, drive organic traffic, and attract potential clients who are actively searching for your services.</p>
                        <div class="os-card-footer">
                            <span class="os-card-link">Learn More</span>
                            <span class="os-card-arrow"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <!-- 8. App Development -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
                    <a href="{{ route('service.app_development') }}" class="os-service-card">
                        <div class="os-card-accent"></div>
                        <div class="os-card-header">
                            <div class="os-card-icon">
                                <img src="{{ asset('assets/images/icon2/app_dev.png') }}" alt="App Development">
                            </div>
                            <span class="os-card-number">08</span>
                        </div>
                        <h3 class="os-card-title">App Development</h3>
                        <p class="os-card-text">Our App Development services help businesses create innovative mobile applications designed to improve user engagement and enhance brand loyalty. We focus on functionality, user experience, and scalability to ensure long-term success.</p>
                        <div class="os-card-footer">
                            <span class="os-card-link">Learn More</span>
                            <span class="os-card-arrow"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <!-- 9. Virtual Business Assistance -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ route('service.virtual_business_assistance') }}" class="os-service-card">
                        <div class="os-card-accent"></div>
                        <div class="os-card-header">
                            <div class="os-card-icon">
                                <img src="{{ asset('assets/images/icon2/personal_assistance.png') }}" alt="Virtual Business Assistance">
                            </div>
                            <span class="os-card-number">09</span>
                        </div>
                        <h3 class="os-card-title">Virtual Business Assistance</h3>
                        <p class="os-card-text">Delegate administrative, scheduling, and client support tasks to our experienced virtual business assistants. Our Virtual Assistance Services provide you the flexibility to focus on growing your business while we handle the operational workload efficiently.</p>
                        <div class="os-card-footer">
                            <span class="os-card-link">Learn More</span>
                            <span class="os-card-arrow"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <!-- 10. Virtual Property Management -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <a href="{{ route('service.virtual_property_management') }}" class="os-service-card">
                        <div class="os-card-accent"></div>
                        <div class="os-card-header">
                            <div class="os-card-icon">
                                <img src="{{ asset('assets/images/icon2/crm_managemnt.png') }}" alt="Virtual Property Management">
                            </div>
                            <span class="os-card-number">10</span>
                        </div>
                        <h3 class="os-card-title">Virtual Property Management</h3>
                        <p class="os-card-text">Ensure five-star tenant experiences with our remote property management services. From handling inquiries to coordinating maintenance, our team ensures your properties are managed seamlessly, saving time and reducing stress.</p>
                        <div class="os-card-footer">
                            <span class="os-card-link">Learn More</span>
                            <span class="os-card-arrow"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <!-- 11. Transaction Coordination -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
                    <a href="{{ route('service.real_estate_transaction_coordinator') }}" class="os-service-card">
                        <div class="os-card-accent"></div>
                        <div class="os-card-header">
                            <div class="os-card-icon">
                                <img src="{{ asset('assets/images/icon2/lead_generation.png') }}" alt="Transaction Coordination">
                            </div>
                            <span class="os-card-number">11</span>
                        </div>
                        <h3 class="os-card-title">Transaction Coordination</h3>
                        <p class="os-card-text">Keep your real estate deals on track with our Transaction Coordination services. Our experts manage contracts, deadlines, and communications, ensuring smooth transactions from start to finish.</p>
                        <div class="os-card-footer">
                            <span class="os-card-link">Learn More</span>
                            <span class="os-card-arrow"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <!-- 12. Video Editing -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ route('service.video_editing') }}" class="os-service-card">
                        <div class="os-card-accent"></div>
                        <div class="os-card-header">
                            <div class="os-card-icon">
                                <img src="{{ asset('assets/images/icon2/video_editing.png') }}" alt="Video Editing">
                            </div>
                            <span class="os-card-number">12</span>
                        </div>
                        <h3 class="os-card-title">Video Editing</h3>
                        <p class="os-card-text">Transform raw footage into captivating videos with our professional Video Editing services. From marketing content to training materials, we create polished videos that engage and inspire your audience.</p>
                        <div class="os-card-footer">
                            <span class="os-card-link">Learn More</span>
                            <span class="os-card-arrow"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <!-- 13. IT Support -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <a href="{{ route('service.it_support') }}" class="os-service-card">
                        <div class="os-card-accent"></div>
                        <div class="os-card-header">
                            <div class="os-card-icon">
                                <img src="{{ asset('assets/images/icon2/it_support.png') }}" alt="IT Support">
                            </div>
                            <span class="os-card-number">13</span>
                        </div>
                        <h3 class="os-card-title">IT Support</h3>
                        <p class="os-card-text">Maintain data security and system reliability with our comprehensive IT Support solutions. Our team ensures your business technology functions optimally, minimizing downtime and enhancing productivity.</p>
                        <div class="os-card-footer">
                            <span class="os-card-link">Learn More</span>
                            <span class="os-card-arrow"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <!-- 14. CRM Management -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
                    <a href="{{ route('service.crm_management') }}" class="os-service-card">
                        <div class="os-card-accent"></div>
                        <div class="os-card-header">
                            <div class="os-card-icon">
                                <img src="{{ asset('assets/images/icon2/crm_managemnt.png') }}" alt="CRM Management">
                            </div>
                            <span class="os-card-number">14</span>
                        </div>
                        <h3 class="os-card-title">CRM Management</h3>
                        <p class="os-card-text">Streamline your operations and improve customer relationships with our CRM Management services. We implement secure systems, automate workflows, and provide analytics that help you make informed business decisions.</p>
                        <div class="os-card-footer">
                            <span class="os-card-link">Learn More</span>
                            <span class="os-card-arrow"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <!-- 15. Bookkeeping & Accounting -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ route('service.bookkeeping_accountant') }}" class="os-service-card">
                        <div class="os-card-accent"></div>
                        <div class="os-card-header">
                            <div class="os-card-icon">
                                <img src="{{ asset('assets/images/icon2/personal_assistance.png') }}" alt="Bookkeeping & Accounting">
                            </div>
                            <span class="os-card-number">15</span>
                        </div>
                        <h3 class="os-card-title">Bookkeeping & Accounting</h3>
                        <p class="os-card-text">Maintain accurate financial records and ensure compliance with our expert Bookkeeping and Accounting services. We handle transactions, reporting, and reconciliations, giving you peace of mind and more time to focus on growth.</p>
                        <div class="os-card-footer">
                            <span class="os-card-link">Learn More</span>
                            <span class="os-card-arrow"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- ========== ABOUT / AGENCY ========== -->
    <section class="os-agency">
        <div class="os-agency-bg-pattern"></div>
        <div class="container">
            <div class="row align-items-center g-5">
                <!-- Left: Visual Side -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                    <div class="os-agency-visual">
                        <div class="os-agency-visual-card os-agency-visual-card--main">
                            <div class="os-agency-visual-icon"><i class="fas fa-globe-americas"></i></div>
                            <h4>Global Reach</h4>
                            <p>Partnered with clients across multiple industries worldwide</p>
                        </div>
                        <div class="os-agency-visual-card os-agency-visual-card--float1">
                            <div class="os-agency-mini-stat">
                                <strong>12+</strong>
                                <span>Years</span>
                            </div>
                        </div>
                        <div class="os-agency-visual-card os-agency-visual-card--float2">
                            <div class="os-agency-mini-stat">
                                <strong>256+</strong>
                                <span>Projects</span>
                            </div>
                        </div>
                        <div class="os-agency-visual-card os-agency-visual-card--float3">
                            <div class="os-agency-mini-stat">
                                <i class="fas fa-star"></i>
                                <strong>4.9</strong>
                                <span>Rating</span>
                            </div>
                        </div>
                        <div class="os-agency-visual-decoration os-agency-visual-decoration--1"></div>
                        <div class="os-agency-visual-decoration os-agency-visual-decoration--2"></div>
                    </div>
                </div>

                <!-- Right: Text Content -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
                    <div class="os-agency-content">
                        <div class="os-section-tag">About Us</div>
                        <h2 class="os-agency-title">About Us</h2>
                        <p class="os-agency-lead">
                            Zingo Assist is a premier provider of Virtual Assistance Services, dedicated to helping businesses of all sizes streamline their operations, save time, and achieve sustainable growth. Founded with a mission to deliver professional, reliable, and innovative support, we have successfully partnered with clients across multiple industries worldwide.
                        </p>
                        <p class="os-agency-text">
                            Our team combines advanced technology with expert knowledge to provide solutions that are efficient, cost-effective, and tailored to meet your specific business needs. By leveraging our Virtual Assistant Services, companies can offload repetitive, time-consuming tasks and focus on strategic initiatives that drive growth.
                        </p>
                        <p class="os-agency-text">
                            At Zingo Assist, we understand that every business is unique. That is why we take a client-first approach, carefully assessing your goals, pain points, and operational challenges. Our solutions are designed not only to solve immediate issues but also to create long-term efficiencies that support your business objectives.
                        </p>
                        <p class="os-agency-text">
                            Over the years, we have built a reputation for delivering results that exceed expectations. From small startups to established enterprises, our clients trust us to provide consistent, high-quality Virtual Assistance Services that improve productivity, reduce operational costs, and ensure smooth business operations.
                        </p>
                        <p class="os-agency-text">
                            Our mission is to empower businesses to achieve more with less stress, fewer resources, and greater confidence. By partnering with Zingo Assist, you gain a strategic ally who understands your business, anticipates challenges, and provides the support needed to thrive in today's competitive market.
                        </p>

                        <a href="{{ route('about') }}" class="os-btn-pink">
                            Learn More About Us
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- ========== DEVELOPMENT PROCESS ========== -->
    <section class="os-process">
        <div class="container">
            <div class="os-section-header" data-aos="fade-up">
                <div class="os-section-tag">How We Work</div>
                <h2 class="os-section-title">Our Development Process</h2>
                <p class="os-section-desc">Our structured development process ensures that every project we undertake delivers measurable results while maintaining the highest standards of quality. We follow a systematic approach to guarantee that our Virtual Assistance Services are aligned with your business objectives.</p>
            </div>

            <div class="os-process-timeline">
                <div class="os-process-line"></div>

                <div class="os-process-step" data-aos="fade-up" data-aos-delay="0">
                    <div class="os-process-step-dot">
                        <span>01</span>
                    </div>
                    <div class="os-process-step-content">
                        <div class="os-process-step-icon">
                            <img src="{{ asset('assets/images/icon/icon-22.png') }}" alt="Discover">
                        </div>
                        <h3>Discover</h3>
                        <p>We begin by understanding your business needs, goals, and current operational processes. This discovery phase helps us identify areas where our Virtual Assistant Services can provide the most impact. We analyze workflows, assess challenges, and gather insights to design customized solutions.</p>
                    </div>
                </div>

                <div class="os-process-step" data-aos="fade-up" data-aos-delay="100">
                    <div class="os-process-step-dot">
                        <span>02</span>
                    </div>
                    <div class="os-process-step-content">
                        <div class="os-process-step-icon">
                            <img src="{{ asset('assets/images/icon/icon-23.png') }}" alt="Design">
                        </div>
                        <h3>Design</h3>
                        <p>Based on our findings, we create strategies and processes tailored to your requirements. Our design phase focuses on efficiency, scalability, and effectiveness, ensuring that our solutions integrate seamlessly with your existing operations.</p>
                    </div>
                </div>

                <div class="os-process-step" data-aos="fade-up" data-aos-delay="200">
                    <div class="os-process-step-dot">
                        <span>03</span>
                    </div>
                    <div class="os-process-step-content">
                        <div class="os-process-step-icon">
                            <img src="{{ asset('assets/images/icon/icon-24.png') }}" alt="Build">
                        </div>
                        <h3>Build</h3>
                        <p>In the implementation stage, we use proven tools, technologies, and best practices to execute solutions. Our team works closely with you to ensure every task, project, or process is built to deliver tangible business results.</p>
                    </div>
                </div>

                <div class="os-process-step" data-aos="fade-up" data-aos-delay="300">
                    <div class="os-process-step-dot">
                        <span>04</span>
                    </div>
                    <div class="os-process-step-content">
                        <div class="os-process-step-icon">
                            <img src="{{ asset('assets/images/icon/icon-25.png') }}" alt="Deliver">
                        </div>
                        <h3>Deliver</h3>
                        <p>Once completed, we ensure every solution is fully operational and optimized for performance. We provide ongoing support and monitoring to maintain efficiency, address challenges, and continuously improve outcomes.</p>
                    </div>
                </div>
            </div>

            <div class="os-process-bottom-text" data-aos="fade-up">
                <p>This development process allows us to deliver high-quality, reliable, and adaptable Virtual Assistance Services that support your business both now and in the future. By focusing on collaboration, communication, and continuous improvement, we help businesses maximize productivity and achieve sustainable growth.</p>
            </div>
        </div>
    </section>


    <!-- ========== WHY CHOOSE US ========== -->
    <section class="os-why">
        <div class="os-why-shapes">
            <div class="os-why-shape os-why-shape--1"></div>
            <div class="os-why-shape os-why-shape--2"></div>
        </div>
        <div class="container">
            <div class="os-section-header" data-aos="fade-up">
                <div class="os-section-tag">Why Us</div>
                <h2 class="os-section-title">Why Choose Zingo Assist</h2>
                <p class="os-section-desc">Choosing Zingo Assist means partnering with a company that is committed to helping your business succeed. Our Virtual Assistance Services provide:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="os-why-card">
                        <div class="os-why-card-icon"><i class="fas fa-bullseye"></i></div>
                        <h4>Tailored Solutions</h4>
                        <p>Tailored solutions that meet your business objectives</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
                    <div class="os-why-card">
                        <div class="os-why-card-icon"><i class="fas fa-user-tie"></i></div>
                        <h4>Skilled Professionals</h4>
                        <p>Access to skilled professionals with multi-industry experience</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="os-why-card">
                        <div class="os-why-card-icon"><i class="fas fa-expand-arrows-alt"></i></div>
                        <h4>Scalable Support</h4>
                        <p>Scalable support that grows with your business</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="os-why-card">
                        <div class="os-why-card-icon"><i class="fas fa-clock"></i></div>
                        <h4>24/7 Availability</h4>
                        <p>24/7 availability for urgent tasks and ongoing support</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
                    <div class="os-why-card">
                        <div class="os-why-card-icon"><i class="fas fa-trophy"></i></div>
                        <h4>Results-Driven</h4>
                        <p>High-quality, results-driven solutions that enhance productivity</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="os-why-card">
                        <div class="os-why-card-icon"><i class="fas fa-lock"></i></div>
                        <h4>Data Security</h4>
                        <p>Strict protocols and secure systems ensure your business information is always protected</p>
                    </div>
                </div>
            </div>

            <div class="os-why-bottom" data-aos="fade-up">
                <p>We focus on delivering more than just tasks; we deliver peace of mind. By leveraging our Virtual Assistant Services, businesses can optimize operations, reduce costs, and focus on the activities that truly drive growth.</p>
                <p>At Zingo Assist, we take pride in our reputation for reliability, professionalism, and consistent results. Our team is committed to understanding your business, anticipating challenges, and providing customized solutions that create lasting value.</p>
                <p>Partnering with Zingo Assist is an investment in efficiency, quality, and business success. Let us help you focus on what matters most while we handle the rest with precision and care.</p>
            </div>
        </div>
    </section>


    <!-- ========== TESTIMONIALS ========== -->
    <section class="os-testimonials">
        <div class="container">
            <div class="os-section-header" data-aos="fade-up">
                <div class="os-section-tag">Client Stories</div>
                <h2 class="os-section-title">What Our Clients Say</h2>
                <p class="os-section-desc">Real experiences from businesses we've helped grow and succeed.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="os-testimonial-card">
                        <div class="os-testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="os-testimonial-text">"When we decided to expand, Zingo Assist's Virtual Assistance Services helped us manage operations smoothly. Their team was professional, reliable, and proactive. Highly recommended!"</p>
                        <div class="os-testimonial-footer">
                            <div class="os-testimonial-avatar">JD</div>
                            <div>
                                <div class="os-testimonial-author">Jane D.</div>
                                <div class="os-testimonial-role">Business Owner</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
                    <div class="os-testimonial-card">
                        <div class="os-testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="os-testimonial-text">"My business needed structured administrative support, and Zingo Assist delivered beyond expectations. Their Virtual Assistant Services allowed me to focus on strategic growth while they handled day-to-day tasks seamlessly."</p>
                        <div class="os-testimonial-footer">
                            <div class="os-testimonial-avatar">RG</div>
                            <div>
                                <div class="os-testimonial-author">Richard G.</div>
                                <div class="os-testimonial-role">Entrepreneur</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="os-testimonial-card">
                        <div class="os-testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="os-testimonial-text">"Working with Zingo Assist transformed how we operate. From lead generation to digital marketing, their team's expertise and dedication have made a noticeable impact on our business efficiency."</p>
                        <div class="os-testimonial-footer">
                            <div class="os-testimonial-avatar">ER</div>
                            <div>
                                <div class="os-testimonial-author">Emily R.</div>
                                <div class="os-testimonial-role">Marketing Director</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="os-testimonial-card">
                        <div class="os-testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="os-testimonial-text">"Zingo Assist provides exceptional support. Their virtual assistants are skilled, responsive, and genuinely invested in helping our business succeed. It feels like having an extended in-house team without the overhead."</p>
                        <div class="os-testimonial-footer">
                            <div class="os-testimonial-avatar">MT</div>
                            <div>
                                <div class="os-testimonial-author">Michael T.</div>
                                <div class="os-testimonial-role">CEO, Tech Startup</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
                    <div class="os-testimonial-card">
                        <div class="os-testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="os-testimonial-text">"The team at Zingo Assist is dependable, professional, and detail-oriented. Their Virtual Assistance Services have saved us countless hours and allowed us to focus on growing our core business."</p>
                        <div class="os-testimonial-footer">
                            <div class="os-testimonial-avatar">SL</div>
                            <div>
                                <div class="os-testimonial-author">Sophia L.</div>
                                <div class="os-testimonial-role">Operations Manager</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="os-testimonial-card">
                        <div class="os-testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="os-testimonial-text">"Zingo Assist's Virtual Assistant Services are second to none. The team is responsive, proactive, and skilled at handling complex tasks. I would recommend them to any business looking to improve efficiency and productivity."</p>
                        <div class="os-testimonial-footer">
                            <div class="os-testimonial-avatar">DK</div>
                            <div>
                                <div class="os-testimonial-author">David K.</div>
                                <div class="os-testimonial-role">Real Estate Investor</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ========== FAQS ========== -->
    <section class="os-faqs">
        <div class="container">
            <div class="row align-items-start g-5">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="os-faqs-sidebar">
                        <div class="os-section-tag">FAQ</div>
                        <h2 class="os-faqs-title">Frequently Asked Questions</h2>
                        <p class="os-faqs-desc">Everything you need to know about our Virtual Assistance Services. Can't find the answer you're looking for?</p>
                        <a href="{{ route('contact') }}" class="os-btn-pink">
                            Contact Us
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-left">
                    <div class="os-faq-item active">
                        <div class="os-faq-question" onclick="toggleFaq(this)">
                            <span>What are Virtual Assistance Services?</span>
                            <div class="os-faq-toggle"><i class="fas fa-plus"></i></div>
                        </div>
                        <div class="os-faq-answer">
                            <p>Virtual Assistance Services provide professional remote support for businesses. They cover administrative, operational, and strategic tasks, helping companies save time, improve efficiency, and focus on core objectives.</p>
                        </div>
                    </div>

                    <div class="os-faq-item">
                        <div class="os-faq-question" onclick="toggleFaq(this)">
                            <span>How can Virtual Assistant Services benefit my business?</span>
                            <div class="os-faq-toggle"><i class="fas fa-plus"></i></div>
                        </div>
                        <div class="os-faq-answer">
                            <p>These services allow businesses to delegate routine or specialized tasks, reduce operational costs, and enhance overall productivity. By offloading administrative work, your team can focus on growth and strategic initiatives.</p>
                        </div>
                    </div>

                    <div class="os-faq-item">
                        <div class="os-faq-question" onclick="toggleFaq(this)">
                            <span>Are your Virtual Assistance Services available globally?</span>
                            <div class="os-faq-toggle"><i class="fas fa-plus"></i></div>
                        </div>
                        <div class="os-faq-answer">
                            <p>Yes. Our team provides support to clients worldwide, ensuring seamless operations regardless of location or time zone.</p>
                        </div>
                    </div>

                    <div class="os-faq-item">
                        <div class="os-faq-question" onclick="toggleFaq(this)">
                            <span>How do I hire a virtual assistant from Zingo Assist?</span>
                            <div class="os-faq-toggle"><i class="fas fa-plus"></i></div>
                        </div>
                        <div class="os-faq-answer">
                            <p>You can reach out to us through our website. We evaluate your business needs and match you with a skilled virtual assistant who has the expertise required to achieve your objectives.</p>
                        </div>
                    </div>

                    <div class="os-faq-item">
                        <div class="os-faq-question" onclick="toggleFaq(this)">
                            <span>Can Virtual Assistance Services handle specialized tasks?</span>
                            <div class="os-faq-toggle"><i class="fas fa-plus"></i></div>
                        </div>
                        <div class="os-faq-answer">
                            <p>Absolutely. Our team includes professionals experienced in marketing, IT, finance, property management, project management, and more. We provide customized solutions to meet specific business needs.</p>
                        </div>
                    </div>

                    <div class="os-faq-item">
                        <div class="os-faq-question" onclick="toggleFaq(this)">
                            <span>How quickly can I start using Zingo Assist services?</span>
                            <div class="os-faq-toggle"><i class="fas fa-plus"></i></div>
                        </div>
                        <div class="os-faq-answer">
                            <p>Once your requirements are identified, we can match you with the right virtual assistant within a few days, allowing you to begin delegating tasks quickly and efficiently.</p>
                        </div>
                    </div>

                    <div class="os-faq-item">
                        <div class="os-faq-question" onclick="toggleFaq(this)">
                            <span>Is my business information secure with Zingo Assist?</span>
                            <div class="os-faq-toggle"><i class="fas fa-plus"></i></div>
                        </div>
                        <div class="os-faq-answer">
                            <p>Yes. We prioritize data security and confidentiality. Our team follows strict protocols and uses secure systems to ensure your information is always protected.</p>
                        </div>
                    </div>

                    <div class="os-faq-item">
                        <div class="os-faq-question" onclick="toggleFaq(this)">
                            <span>What industries do you serve?</span>
                            <div class="os-faq-toggle"><i class="fas fa-plus"></i></div>
                        </div>
                        <div class="os-faq-answer">
                            <p>Zingo Assist works with a wide range of industries, including real estate, technology, finance, healthcare, e-commerce, and more. Our Virtual Assistant Services are adaptable to meet the demands of different sectors.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ========== CTA ========== -->
    <section class="os-cta">
        <div class="os-cta-orbs">
            <div class="os-cta-orb os-cta-orb--1"></div>
            <div class="os-cta-orb os-cta-orb--2"></div>
        </div>
        <div class="container">
            <div class="os-cta-inner" data-aos="fade-up">
                <div class="os-cta-badge">Have a project in mind? Let's connect</div>
                <h2 class="os-cta-title">Ready to Transform<br>Your Business?</h2>
                <p class="os-cta-text">We rank among the best in the US, UK, and UAE. Our apps get featured as best in class, & our clients love our work. Welcome to Zingo, a software development company that helps to digitize businesses by focusing on client's business challenges, needs, pain points and providing business-goals-oriented software solutions.</p>
                <div class="os-cta-actions">
                    <a href="{{ route('contact') }}" class="os-btn-white">
                        Send Message
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="os-cta-trust">
                    <span><i class="fas fa-check-circle"></i> No commitment required</span>
                    <span><i class="fas fa-check-circle"></i> Free consultation</span>
                    <span><i class="fas fa-check-circle"></i> 24/7 support</span>
                </div>
            </div>
        </div>
    </section>

</div><!-- /.os-page -->

<a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>

@include('partials.trail')

<script>
    // Smooth scroll to services section
    document.addEventListener('DOMContentLoaded', function() {
        const scrollBtns = document.querySelectorAll('.scroll-to-section');
        scrollBtns.forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.getElementById('services');
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    });

    // FAQ Accordion
    function toggleFaq(el) {
        const item = el.closest('.os-faq-item');
        const allItems = document.querySelectorAll('.os-faq-item');
        allItems.forEach(function(faq) {
            if (faq !== item) {
                faq.classList.remove('active');
                const icon = faq.querySelector('.os-faq-toggle i');
                if (icon) { icon.className = 'fas fa-plus'; }
            }
        });
        item.classList.toggle('active');
        const icon = item.querySelector('.os-faq-toggle i');
        if (item.classList.contains('active')) {
            icon.className = 'fas fa-minus';
        } else {
            icon.className = 'fas fa-plus';
        }
    }

    // Initialize first FAQ icon
    document.addEventListener('DOMContentLoaded', function() {
        const firstFaq = document.querySelector('.os-faq-item.active .os-faq-toggle i');
        if (firstFaq) firstFaq.className = 'fas fa-minus';
    });
</script>

@endsection
