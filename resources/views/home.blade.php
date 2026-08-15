@extends('layout.main')

@section('title', 'Zingo Assist – Premier Virtual Assistant Agency in USA')
@section('meta_description', 'Zingo Assist is the premier virtual assistant agency in the USA, providing elite virtual assistants, digital marketing, real estate cold calling, SEO, bookkeeping, and web development services to accelerate your business growth.')



<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

@section('content')
    <!--~~~~~ Start Banner ~~~~~~~-->
    <section class="banner-section">
        <div class="banner-text">
            <span>ZINGO ASSIST</span>
        </div>
        <div class="banner-element-one">
            <img src="{{ asset('assets/images/element/element-3.png') }}" alt="element">
        </div>
        <div class="banner-element-two">
            <img src="{{ asset('assets/images/element/element-4.png') }}" alt="element">
        </div>
        <div class="banner-element-three">
            <img src="{{ asset('assets/images/element/element-5.png') }}" alt="element">
        </div>
        <div class="banner-element-four">
            <img src="{{ asset('assets/images/element/element-6.png') }}" alt="element">
        </div>
        <div class="banner-element-five">
            <img src="{{ asset('assets/images/element/element-7.png') }}" alt="element">
        </div>
        <div class="banner-group-shape">
            <div class="banner-group-element-one">
                <img src="{{ asset('assets/images/element/element-8.png') }}" alt="element">
            </div>
            <div class="banner-group-element-two">
                <img src="{{ asset('assets/images/element/element-9.png') }}" alt="element">
            </div>
            <div class="banner-group-element-three">
                <img src="{{ asset('assets/images/element/element-10.png') }}" alt="element">
            </div>
            <div class="banner-group-element-four">
                <img src="{{ asset('assets/images/element/element-6.png') }}" alt="element">
            </div>
            <div class="banner-group-element-five">
                <img src="{{ asset('assets/images/element/element-5.png') }}" alt="element">
            </div>
            <div class="banner-group-element-six">
                <img src="{{ asset('assets/images/element/element-11.png') }}" alt="element">
            </div>
            <div class="banner-group-element-seven">
                <img src="{{ asset('assets/images/element/element-12.png') }}" alt="element">
            </div>
            <div class="banner-group-element-eight">
                <img src="{{ asset('assets/images/element/element-13.png') }}" alt="element">
            </div>
            <div class="banner-group-element-nine">
                <img src="{{ asset('assets/images/element/element-14.png') }}" alt="element">
            </div>
            <div class="banner-group-element-ten">
                <img src="{{ asset('assets/images/element/element-15.png') }}" alt="element">
            </div>
            <div class="banner-group-element-eleven">
                <img src="{{ asset('assets/images/element/element-16.png') }}" alt="element">
            </div>
            <div class="banner-group-element-twelve">
                <img src="{{ asset('assets/images/element/element-17.png') }}" alt="element">
            </div>
            <div class="banner-group-element-thirteen">
                <img src="{{ asset('assets/images/element/element-18.png') }}" alt="element">
            </div>
            <div class="banner-group-element-fourteen">
                <img src="{{ asset('assets/images/element/element-19.png') }}" alt="element">
            </div>
            <div class="banner-group-element-fifteen">
                <img src="{{ asset('assets/images/element/element-20.png') }}" alt="element">
            </div>
            <div class="banner-group-element-sixteen">
                <img src="{{ asset('assets/images/element/element-21.png') }}" alt="element">
            </div>
            <div class="banner-group-element-seventeen">
                <img src="{{ asset('assets/images/element/element-22.png') }}" alt="element">
            </div>
        </div>
        <div class="container custom-container">
            <div class="row align-items-end mb-30-none">
                <div class="col-xl-7 col-lg-7 mb-30">
                    <div class="banner-content" data-aos="fade-right" data-aos-duration="1800">
                        <h1 class="title">Zingo Assist – Premier Virtual Assistant Agency in USA</h1>
                        <span class="sub-title text-light">Your Trusted Virtual Assistant Company</span>
                        <p>Welcome to Zingo Assist, your trusted virtual assistant agency dedicated to helping businesses and entrepreneurs achieve operational excellence. As a leading virtual assistant company in the USA, we specialize in providing innovative virtual assistant services that streamline business processes, enhance productivity, and ensure your company stays ahead of the competition.</p>
                        <div class="hero-expandable-text" id="heroExpandText">
                            <p style="margin-top: 15px;">With over 500 satisfied clients across multiple countries, Zingo Assist has established itself as the go-to virtual assistant agency for businesses seeking skilled, reliable, and professional support. Our mission is to empower businesses of all sizes by offering flexible, scalable, and cost-effective virtual solutions tailored to each client's unique needs.</p>
                        </div>
                        <button class="hero-read-more-btn" id="heroReadMoreBtn" onclick="toggleHeroText()">
                            <span class="btn-text">Read More</span>
                            <i class="fas fa-chevron-down btn-icon"></i>
                        </button>
                        <div class="banner-arrow">
                            <img src="{{ asset('assets/images/element/element-1.png') }}" alt="element">
                        </div>
                        <div class="banner-widget">
                            <div class="banner-widget-wrapper">
                                <div class="banner-widget-left">
                                    <div class="banner-widget-thumb">
                                        <img src="{{ asset('assets/images/element/element-2.png') }}" alt="element">
                                    </div>
                                </div>
                                <div class="banner-widget-middle">
                                    <div class="banner-widget-content">
                                        <p><span>500+</span> Trusted Clients</p>
                                    </div>
                                </div>
                                <div class="banner-widget-right">
                                    <div class="banner-widget-btn">
                                        <a href="{{ route('contact') }}" class="btn--base">Let's Talk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~ End Banner ~~~~~~~~~-->


    <!--~~~~~~~~ Start Scroll-To-Top ~~~~~~~~~-->
    <a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>
    <!--~~~~~ End Scroll-To-Top ~~~~~~~~-->


    <!--~~~~~~~~~  Start Services ~~~~~~~~~~~-->
    <!--~~~~~~~~~  Start Services ~~~~~~~~~~~-->
    <section class="services-showcase py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Our Core Services</h2>
                    <p style="max-width: 800px; margin: 20px auto 0; font-size: 1.1rem; line-height: 1.8; color: #666;">
                        Discover our comprehensive range of virtual assistant services designed to help your business grow and succeed.
                    </p>
                </div>
            </div>
            <div class="row g-5">
                <!-- Service 1: Virtual Assistant Services -->
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                             <div class="service-image-container rounded-3 overflow-hidden shadow-sm">
                                <img src="{{ asset('assets/images/services/Osama.png') }}" alt="Virtual Assistant Services" class="w-100 service-img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3 class="fw-bold mb-3" style="color: #333;">Virtual Assistant Services</h3>
                            <p class="text-secondary mb-3" style="line-height: 1.8;">
                                Our virtual assistant agency is designed to save your time, reduce workload, and improve efficiency across all business operations. Whether you are a small business owner or a large enterprise, our virtual administrative assistants handle critical tasks such as email management, calendar scheduling, data entry, customer support, and document organization.
                            </p>
                            <p class="text-secondary mb-4" style="line-height: 1.8;">
                                By hiring a virtual personal assistant through Zingo Assist, businesses can focus on core strategic goals while we manage routine administrative tasks. Our virtual assistants are trained to work across multiple tools, software, and platforms, ensuring seamless integration with your existing workflows.
                            </p>
                            <a href="{{ route('service.virtual_business_assistance') }}" class="btn--base">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Cold Calling Services -->
                <div class="col-lg-12">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                             <div class="service-image-container rounded-3 overflow-hidden shadow-sm">
                                <img src="{{ asset('assets/images/services/tooba.png') }}" alt="Cold Calling Services" class="w-100 service-img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3 class="fw-bold mb-3" style="color: #333;">Cold Calling Services</h3>
                            <p class="text-secondary mb-3" style="line-height: 1.8;">
                                Drive more leads and boost client engagement with our professional cold calling services. Zingo Assist offers targeted lead generation, appointment scheduling, and client follow-up services that help businesses connect with the right prospects efficiently.
                            </p>
                            <p class="text-secondary mb-4" style="line-height: 1.8;">
                                Our team uses a results-driven approach, combining research, personalized communication, and follow-ups to convert potential leads into loyal customers. By leveraging our cold calling services, businesses can significantly improve sales performance while minimizing time and resource expenditure.
                            </p>
                            <a href="{{ route('service.cold_calling') }}" class="btn--base">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Software Development -->
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                             <div class="service-image-container rounded-3 overflow-hidden shadow-sm">
                                <img src="{{ asset('assets/images/services/arooba.png') }}" alt="Software Development" class="w-100 service-img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3 class="fw-bold mb-3" style="color: #333;">Software Development</h3>
                            <p class="text-secondary mb-3" style="line-height: 1.8;">
                                At Zingo Assist, we provide custom software solutions designed to meet your business goals. Our services include web applications, mobile apps, and enterprise-level software solutions that are secure, scalable, and optimized for efficiency.
                            </p>
                            <p class="text-secondary mb-4" style="line-height: 1.8;">
                                We ensure that every solution we develop is tailored to your business processes, helping you automate tasks, improve operational workflow, and provide a seamless experience for clients. Partnering with our software development team means gaining access to expert developers committed to delivering high-quality, innovative technology solutions.
                            </p>
                            <a href="{{ route('service.web_development') }}" class="btn--base">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Service 4: Lead Generation Services -->
                <div class="col-lg-12">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                             <div class="service-image-container rounded-3 overflow-hidden shadow-sm">
                                <img src="{{ asset('assets/images/services/shaheer.png') }}" alt="Lead Generation" class="w-100 service-img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3 class="fw-bold mb-3" style="color: #333;">Lead Generation Services</h3>
                            <p class="text-secondary mb-3" style="line-height: 1.8;">
                                High-quality leads are crucial for business growth, and Zingo Assist specializes in delivering targeted lead generation services. Our approach includes prospect research, email outreach, market analysis, and lead conversion strategies.
                            </p>
                            <p class="text-secondary mb-4" style="line-height: 1.8;">
                                We help businesses identify the most promising opportunities and nurture potential clients into paying customers. By outsourcing lead generation to our experienced team, companies can focus on closing deals while we handle the research and initial engagement.
                            </p>
                            <a href="{{ route('service.lead_generation') }}" class="btn--base">Learn More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--~~~~~~~~ End Services ~~~~~~~~~~-->



    <!--~~~~~~~~~~ Start Choose ~~~~~~~~-->
    <section class="choose-section pb-120">
        <div class="choose-element-one" data-aos="fade-left" data-aos-duration="1200">
            <img src="{{ asset('assets/images/element/element-28.png') }}" alt="element">
        </div>
        <div class="choose-element-two">
            <img src="{{ asset('assets/images/element/element-29.png') }}" alt="element">
        </div>
        <div class="choose-element-three">
            <img src="{{ asset('assets/images/element/element-30.png') }}" alt="element">
        </div>
        <div class="choose-element-four">
            <img src="{{ asset('assets/images/element/element-31.png') }}" alt="element">
        </div>
        <div class="choose-element-five">
            <img src="{{ asset('assets/images/element/element-32.png') }}" alt="element">
        </div>
        <div class="container">
            <div class="choose-area">
                <div class="choose-tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link" id="software-tab" data-toggle="tab" data-target="#software"
                                type="button" role="tab" aria-controls="software" aria-selected="false">Top
                                Website
                                Developer</button>
                            <button class="nav-link active" id="company-tab" data-toggle="tab" data-target="#company"
                                type="button" role="tab" aria-controls="company"
                                aria-selected="true">Fastest-Growing
                                Company</button>
                            <button class="nav-link" id="client-tab" data-toggle="tab" data-target="#client"
                                type="button" role="tab" aria-controls="client" aria-selected="false">100%
                                Client's
                                Satisfaction</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade" id="software" role="tabpanel" aria-labelledby="software-tab">
                            <div class="choose-item">
                                <div class="choose-thumb">
                                    <img src="{{ asset('assets/images/element/element-27.png') }}" alt="element">
                                </div>
                                <div class="choose-content">
                                    <h4 class="title"><span class="text--base">About Zingo Assist</span> Website
                                        Development
                                    </h4>
                                    <p>At Zingo Assist Website Development, we specialize in crafting custom websites tailored to your business requirements. Whether launching a new brand or revamping an existing website, we deliver visually appealing, mobile-responsive, and SEO-optimized websites designed to engage your audience and drive growth.</p>
                                    <p style="margin-top: 15px;">From concept to deployment, we focus on creating user-friendly interfaces, seamless navigation, and scalable solutions. Alongside website development, our team provides virtual assistant services to manage administrative and operational tasks, ensuring your digital presence and business operations remain smooth and effective.</p>
                                    <div class="choose-statistics-area">
                                        <div class="row mb-30-none">
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="150">0
                                                            </h3>
                                                            <h3 class="title">+</h3>
                                                        </div>
                                                        <p>Innovative solutions delivered</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="500">0
                                                            </h3>
                                                            <h3 class="title">+</h3>
                                                        </div>
                                                        <p>Trusted clients served</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="5">0
                                                            </h3>
                                                            <h3 class="title">+</h3>
                                                        </div>
                                                        <p>Countries supported</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose-content-footer">
                                        <div class="choose-btn">
                                            <a href="{{ route('contact') }}" class="btn--base active">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="company" role="tabpanel"
                            aria-labelledby="company-tab">
                            <div class="choose-item">
                                <div class="choose-thumb">
                                    <img src="{{ asset('assets/images/element/element-77.png') }}" alt="element">
                                </div>
                                <div class="choose-content">
                                    <h4 class="title"><span class="text--base">About Zingo Assist</span> Digital
                                        Agency
                                    </h4>
                                    <p>At Zingo Assist Digital Agency, we offer a full suite of digital solutions designed to elevate your brand presence. Our expertise extends beyond virtual assistant services to include online marketing, search engine optimization, web design, and software development.</p>
                                    <p style="margin-top: 15px;">We provide fully customized digital strategies for businesses seeking professional virtual administrative assistants and virtual personal assistants. By partnering with Zingo Assist, companies gain access to top-tier services that improve operational efficiency, streamline workflow, and allow leadership to focus on strategic growth.</p>
                                    <div class="choose-statistics-area">
                                        <div class="row mb-30-none">
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="150">0
                                                            </h3>
                                                            <h3 class="title">+</h3>
                                                        </div>
                                                        <p>Innovative solutions delivered</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="500">0
                                                            </h3>
                                                            <h3 class="title">+</h3>
                                                        </div>
                                                        <p>Trusted clients served</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="5">0
                                                            </h3>
                                                            <h3 class="title">+</h3>
                                                        </div>
                                                        <p>Countries supported</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose-content-footer">
                                        <div class="choose-btn">
                                            <a href="{{ route('contact') }}" class="btn--base active">Contact Us</a>
                                        </div>
                                        <!--<div class="choose-video-btn">-->
                                        <!--    <a class="video" data-rel="lightcase:myCollection"-->
                                        <!--        href="https://www.youtube.com/embed/6zsr22OeF2I">-->
                                        <!--        <i class="las la-video"></i>-->
                                        <!--    </a>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="client" role="tabpanel" aria-labelledby="client-tab">
                            <div class="choose-item">
                                <div class="choose-thumb">
                                    <img src="{{ asset('assets/images/element/element-78.png') }}" alt="element">
                                </div>
                                <div class="choose-content">
                                    <h4 class="title"><span class="text--base">About Zingo Assist</span> Client
                                        Demand
                                    </h4>
                                    <p>Zingo Assist Client Demand focuses on understanding and addressing the unique requirements of every client. We provide specialized virtual assistant services, including administrative support, project management, lead generation, cold calling, and customer engagement solutions.</p>
                                    <p style="margin-top: 15px;">By analyzing client needs and customizing our approach, Zingo Assist ensures businesses receive professional, reliable, and results-driven assistance. Our virtual personal assistants and virtual administrative assistants handle diverse tasks, from scheduling meetings and handling inquiries to preparing reports and managing communications.</p>
                                    <p style="margin-top: 15px;">With a strong commitment to client satisfaction, Zingo Assist has earned a reputation as a trusted virtual assistant agency in the USA. Hundreds of clients rely on our expertise for high-quality, scalable, and cost-effective solutions.</p>
                                    <div class="choose-statistics-area">
                                        <div class="row mb-30-none">
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="150">0
                                                            </h3>
                                                            <h3 class="title">+</h3>
                                                        </div>
                                                        <p>Innovative Solutions</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="500">0
                                                            </h3>
                                                            <h3 class="title">+</h3>
                                                        </div>
                                                        <p>Trusted Clients</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="5">0
                                                            </h3>
                                                            <h3 class="title">+</h3>
                                                        </div>
                                                        <p>Served Countries</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose-content-footer">
                                        <div class="choose-btn">
                                            <a href="{{ route('contact') }}" class="btn--base active">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~ End Choose ~~~~~~~-->

    <!--~~~~~~~~ Start Why Choose Zingo Assist ~~~~~~~~~-->
    <section class="why-choose-section ptb-120" style="background: linear-gradient(to bottom, #f8f9fa, #ffffff);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 text-center mb-5">
                    <div class="section-header">
                        <h2 class="section-title">Why Choose <span class="text--base">Zingo Assist</span></h2>
                        <p class="mt-3" style="font-size: 1.1rem; color: #666; max-width: 700px; margin: 0 auto;">Choosing the right virtual assistant agency in the USA is essential for business success. Here's why businesses trust Zingo Assist:</p>
                    </div>
                </div>
            </div>

            <div class="row g-4 justify-content-center row-cols-1 row-cols-md-3 row-cols-lg-5">
                <!-- Card 1 -->
                <div class="col">
                    <div class="choose-card text-center p-4 bg-white rounded-3 h-100" style="box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                        <div class="icon-wrapper mb-4 d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 70px; height: 70px; background: rgba(165, 38, 115, 0.1); color: #A52673;">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                        <h4 class="mb-3 fw-bold" style="font-size: 1.25rem; color: #333;">Experienced Team</h4>
                        <p class="mb-0 text-muted">Experienced and professional team of virtual assistants</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col">
                     <div class="choose-card text-center p-4 bg-white rounded-3 h-100" style="box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                        <div class="icon-wrapper mb-4 d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 70px; height: 70px; background: rgba(165, 38, 115, 0.1); color: #A52673;">
                            <i class="fas fa-cogs fa-2x"></i>
                        </div>
                        <h4 class="mb-3 fw-bold" style="font-size: 1.25rem; color: #333;">Flexible Solutions</h4>
                        <p class="mb-0 text-muted">Flexible solutions tailored to your business requirements</p>
                    </div>
                </div>

                <!-- Card 3 -->
                 <div class="col">
                     <div class="choose-card text-center p-4 bg-white rounded-3 h-100" style="box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                        <div class="icon-wrapper mb-4 d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 70px; height: 70px; background: rgba(165, 38, 115, 0.1); color: #A52673;">
                            <i class="fas fa-coins fa-2x"></i>
                        </div>
                        <h4 class="mb-3 fw-bold" style="font-size: 1.25rem; color: #333;">Cost-Effective</h4>
                        <p class="mb-0 text-muted">Cost-effective alternative to hiring in-house staff</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col">
                    <div class="choose-card text-center p-4 bg-white rounded-3 h-100" style="box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                        <div class="icon-wrapper mb-4 d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 70px; height: 70px; background: rgba(165, 38, 115, 0.1); color: #A52673;">
                            <i class="fas fa-headset fa-2x"></i>
                        </div>
                        <h4 class="mb-3 fw-bold" style="font-size: 1.25rem; color: #333;">24/7 Support</h4>
                        <p class="mb-0 text-muted">24/7 dedicated support for uninterrupted workflow</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col">
                    <div class="choose-card text-center p-4 bg-white rounded-3 h-100" style="box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                        <div class="icon-wrapper mb-4 d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 70px; height: 70px; background: rgba(165, 38, 115, 0.1); color: #A52673;">
                            <i class="fas fa-trophy fa-2x"></i>
                        </div>
                        <h4 class="mb-3 fw-bold" style="font-size: 1.25rem; color: #333;">Proven Results</h4>
                        <p class="mb-0 text-muted">Proven results with hundreds of satisfied clients</p>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!--~~~~~~~~ End Why Choose Zingo Assist ~~~~~~~~~-->


    <!--~~~~~~~~~ Start Call to action ~~~~~~~~~~-->
    <section class="call-to-action-section pb-120">
        <div class="call-to-action-element" data-aos="fade-left" data-aos-duration="1200">
            <img src="{{ asset('assets/images/element/element-33.png') }}" alt="element">
        </div>
        <div class="wrapper demo-text">
            <div class="marquee">
                <span>
                    ZINGO ASSIST ZINGO ASSIST ZINGO ASSIST ZINGO ASSIST ZINGO ASSIST ZINGO ASSIST ZINGO ASSIST ZINGO
                    ASSIST ZINGO ASSIST
                </span>
            </div>
        </div>
        <!-- <div class="container">
                                                                                            <div class="row justify-content-center mb-10-none">
                                                                                                <div class="col-xl-9">
                                                                                                    <div class="call-to-action-wrapper">
                                                                                                        <div class="call-to-action-content">
                                                                                                            <h3 class="title">We have three projects with this template & that is because we love the
                                                                                                                design,</h3>
                                                                                                            <h3 class="inner-title">the large number of possibilities.</h3>
                                                                                                        </div>
                                                                                                        <div class="call-to-action-btn">
                                                                                                            <a href="#0" class="btn--base">Read More</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div> -->
    </section>
    <!--~~~~~~~~ End Call to action ~~~~~~~~~~~~~-->




    <!--~~~~~~~~~ Start About ~~~~~~~~~-->
    <section class="about-section pt-120">
        <div class="about-element-one">
            <img src="{{ asset('assets/images/element/element-39.png') }}" alt="element">
        </div>
        <div class="about-element-two">
            <img src="{{ asset('assets/images/element/element-40.png') }}" alt="element">
        </div>
        <div class="about-element-three">
            <img src="{{ asset('assets/images/element/element-7.png') }}" alt="element">
        </div>
        <div class="about-element-four">
            <img src="{{ asset('assets/images/element/element-41.png') }}" alt="element">
        </div>
        <div class="about-element-five">
            <img src="{{ asset('assets/images/element/element-42.png') }}" alt="element">
        </div>
        <div class="container">
            <div class="about-area three">
                <div class="row justify-content-center align-items-center mb-30-none">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="box-wrapper">
                            <div class="box3"></div>
                            <div class="box1">
                                <div class="box-element-one">
                                    <img src="{{ asset('assets/images/element/element-14.png') }}" alt="element">
                                </div>
                                <div class="box-element-two">
                                    <img src="{{ asset('assets/images/element/element-15.png') }}" alt="element">
                                </div>
                                <div class="box-element-three">
                                    <img src="{{ asset('assets/images/element/element-13.png') }}" alt="element">
                                </div>
                                <div class="box-element-four">
                                    <img src="{{ asset('assets/images/element/element-6.png') }}" alt="element">
                                </div>
                            </div>
                            <div class="box2">
                                <div class="box-element-five">
                                    <img src="{{ asset('assets/images/element/element-16.png') }}" alt="element">
                                </div>
                                <div class="box-element-six">
                                    <img src="{{ asset('assets/images/element/element-7.png') }}" alt="element">
                                </div>
                            </div>
                        </div>
                        <div class="about-thumb">
                            <img src="{{ asset('assets/images/element/element-38.png') }}" alt="element">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="about-content">
                            <h2 class="title">We Provide Best<span class="text--base">Virtual Assistant Services
                                </span>
                            </h2>
                            <p>At Zingo Assist, we offer premium and specialized virtual assistant services designed to streamline business operations and ensure success. Our highly skilled professionals are always available to provide tailor-made solutions that meet the unique requirements of each client.</p>
                            <p style="margin-top: 15px;">Experience our services with a two-day free trial and discover how Zingo Assist can optimize your workflow, improve productivity, and provide seamless support for all business operations.</p>
                            <div class="about-btn">
                                <a href="{{ route('contact') }}" class="btn--base">Get a Free Trial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~ End About ~~~~~~~~~~-->

    <!--~~~~~~~~ Start Why Businesses Trust Zingo Assist ~~~~~~~~~-->
    <section class="trust-section ptb-120" style="background: #ffffff;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 text-center mb-5">
                    <div class="section-header">
                        <h2 class="section-title">Why Businesses Trust <span class="text--base">Zingo Assist</span></h2>
                        <p class="mt-3" style="font-size: 1.1rem; color: #666; max-width: 700px; margin: 0 auto;">By hiring a remote assistant from Zingo Assist, businesses gain:</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-lg-6 col-md-6">
                    <div class="trust-item d-flex align-items-center p-4 rounded-3 h-100" style="background: #f8fafe; border: 1px solid rgba(0,0,0,0.05); transition: all 0.3s ease; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                        <div class="icon-wrapper me-4 d-flex align-items-center justify-content-center rounded-circle flex-shrink-0" style="width: 60px; height: 60px; background: #fff; color: #A52673; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                            <i class="fas fa-tasks fa-lg"></i>
                        </div>
                        <div class="content">
                            <h5 class="fw-bold mb-2" style="color: #333;">Reliable Support</h5>
                            <p class="mb-0 text-secondary">Reliable support for administrative and operational tasks</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                     <div class="trust-item d-flex align-items-center p-4 rounded-3 h-100" style="background: #f8fafe; border: 1px solid rgba(0,0,0,0.05); transition: all 0.3s ease; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                        <div class="icon-wrapper me-4 d-flex align-items-center justify-content-center rounded-circle flex-shrink-0" style="width: 60px; height: 60px; background: #fff; color: #A52673; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                            <i class="fas fa-rocket fa-lg"></i>
                        </div>
                        <div class="content">
                            <h5 class="fw-bold mb-2" style="color: #333;">Improved Efficiency</h5>
                            <p class="mb-0 text-secondary">Improved efficiency, productivity, and workflow</p>
                        </div>
                     </div>
                </div>
                <div class="col-lg-6 col-md-6">
                     <div class="trust-item d-flex align-items-center p-4 rounded-3 h-100" style="background: #f8fafe; border: 1px solid rgba(0,0,0,0.05); transition: all 0.3s ease; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                        <div class="icon-wrapper me-4 d-flex align-items-center justify-content-center rounded-circle flex-shrink-0" style="width: 60px; height: 60px; background: #fff; color: #A52673; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                            <i class="fas fa-user-check fa-lg"></i>
                        </div>
                        <div class="content">
                            <h5 class="fw-bold mb-2" style="color: #333;">Skilled Professionals</h5>
                            <p class="mb-0 text-secondary">Access to skilled professionals without additional hiring overhead</p>
                        </div>
                     </div>
                </div>
                <div class="col-lg-6 col-md-6">
                     <div class="trust-item d-flex align-items-center p-4 rounded-3 h-100" style="background: #f8fafe; border: 1px solid rgba(0,0,0,0.05); transition: all 0.3s ease; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                         <div class="icon-wrapper me-4 d-flex align-items-center justify-content-center rounded-circle flex-shrink-0" style="width: 60px; height: 60px; background: #fff; color: #A52673; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                            <i class="fas fa-handshake fa-lg"></i>
                        </div>
                        <div class="content">
                            <h5 class="fw-bold mb-2" style="color: #333;">Trusted Partner</h5>
                            <p class="mb-0 text-secondary">A trusted partner committed to business growth and long-term success</p>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </section>


    <!--~~~~~~~ Start Client Testimonials ~~~~~~~~-->
    <section class="client-testimonials-section ptb-120" style="background: #f9f9f9;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 text-center mb-5">
                    <div class="section-header">
                        <h2 class="section-title">What Our Clients Say</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <!-- Review 1 -->
                <div class="col-lg-6 col-md-6">
                    <div class="testimonial-card" style="background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); height: 100%;">
                        <div class="testimonial-stars mb-3" style="color: #ffc107;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p style="font-style: italic; color: #555; font-size: 1.05rem; line-height: 1.8;">
                            "Zingo Assist is the best virtual assistant agency we have worked with. The team streamlined our admin tasks and improved efficiency."
                        </p>
                        <h5 class="mt-4" style="color: #A52673; font-weight: 700;">Sarah Johnson</h5>
                        <span style="font-size: 0.9rem; color: #777;">Entrepreneur</span>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="col-lg-6 col-md-6">
                    <div class="testimonial-card" style="background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); height: 100%;">
                        <div class="testimonial-stars mb-3" style="color: #ffc107;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p style="font-style: italic; color: #555; font-size: 1.05rem; line-height: 1.8;">
                            "Our virtual assistant services from Zingo Assist transformed our business operations. Highly recommended."
                        </p>
                        <h5 class="mt-4" style="color: #A52673; font-weight: 700;">Omar Williams</h5>
                        <span style="font-size: 0.9rem; color: #777;">Business Owner</span>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="col-lg-6 col-md-6">
                    <div class="testimonial-card" style="background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); height: 100%;">
                        <div class="testimonial-stars mb-3" style="color: #ffc107;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p style="font-style: italic; color: #555; font-size: 1.05rem; line-height: 1.8;">
                            "Hiring a virtual personal assistant through Zingo Assist was seamless and highly effective."
                        </p>
                        <h5 class="mt-4" style="color: #A52673; font-weight: 700;">Priya Sharma</h5>
                        <span style="font-size: 0.9rem; color: #777;">Freelancer</span>
                    </div>
                </div>

                <!-- Review 4 -->
                <div class="col-lg-6 col-md-6">
                    <div class="testimonial-card" style="background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); height: 100%;">
                        <div class="testimonial-stars mb-3" style="color: #ffc107;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p style="font-style: italic; color: #555; font-size: 1.05rem; line-height: 1.8;">
                            "The virtual administrative assistant provided by Zingo Assist helped us save time and focus on growth."
                        </p>
                        <h5 class="mt-4" style="color: #A52673; font-weight: 700;">Michael Lee</h5>
                        <span style="font-size: 0.9rem; color: #777;">CEO</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~ End Client Testimonials ~~~~~~~-->


    <!--~~~~~~~~ Start FAQs ~~~~~~~~~-->
    <section class="services-showcase py-5" style="background: #f8f9fa;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center mb-5">
                    <h2 class="section-title">Frequently Asked Questions</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div style="background: #fff; border-left: 4px solid #A52673; padding: 20px 25px; margin-bottom: 15px; border-radius: 5px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                        <h4 style="color: #A52673; font-weight: 600; margin-bottom: 10px; font-size: 1.1rem;">Q1: What services does Zingo Assist provide?</h4>
                        <p style="font-size: 0.95rem; line-height: 1.7; color: #666; margin: 0;">We offer a comprehensive range of virtual assistant services, including administrative support, lead generation, cold calling, and software development.</p>
                    </div>
                    <div style="background: #fff; border-left: 4px solid #A52673; padding: 20px 25px; margin-bottom: 15px; border-radius: 5px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                        <h4 style="color: #A52673; font-weight: 600; margin-bottom: 10px; font-size: 1.1rem;">Q2: How do I hire a remote assistant?</h4>
                        <p style="font-size: 0.95rem; line-height: 1.7; color: #666; margin: 0;">Simply contact Zingo Assist and we will assign a skilled virtual personal assistant or team tailored to your business needs.</p>
                    </div>
                    <div style="background: #fff; border-left: 4px solid #A52673; padding: 20px 25px; margin-bottom: 15px; border-radius: 5px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                        <h4 style="color: #A52673; font-weight: 600; margin-bottom: 10px; font-size: 1.1rem;">Q3: Is Zingo Assist available in the USA?</h4>
                        <p style="font-size: 0.95rem; line-height: 1.7; color: #666; margin: 0;">Yes, we are a leading virtual assistant agency in the USA, serving clients nationwide.</p>
                    </div>
                    <div style="background: #fff; border-left: 4px solid #A52673; padding: 20px 25px; margin-bottom: 15px; border-radius: 5px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                        <h4 style="color: #A52673; font-weight: 600; margin-bottom: 10px; font-size: 1.1rem;">Q4: Can I try your services before hiring?</h4>
                        <p style="font-size: 0.95rem; line-height: 1.7; color: #666; margin: 0;">Yes, we provide a two-day free trial to experience our services firsthand.</p>
                    </div>
                    <div style="background: #fff; border-left: 4px solid #A52673; padding: 20px 25px; margin-bottom: 0; border-radius: 5px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                        <h4 style="color: #A52673; font-weight: 600; margin-bottom: 10px; font-size: 1.1rem;">Q5: How is Zingo Assist different from other virtual assistant companies?</h4>
                        <p style="font-size: 0.95rem; line-height: 1.7; color: #666; margin: 0;">We offer customized solutions, experienced professionals, 24/7 support, and a proven track record, making us one of the top virtual assistant companies in the USA.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~ End FAQs ~~~~~~~~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                    Start Call-to-action
                                                                                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="subscribe-section" style="padding: 35px 0;">
        <div class="subscribe-element-one">
            <img src="{{ asset('assets/images/element/element-51.png') }}" alt="element">
        </div>
        <div class="container">
            <div class="subscribe-area">
                <div class="subscribe-element-two">
                    <img src="{{ asset('assets/images/element/element-76.png') }}" alt="element">
                </div>
                <div class="subscribe-element-three">
                    <img src="{{ asset('assets/images/element/element-50.png') }}" alt="element">
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 offset-xl-5">
                        <div class="subscribe-content" style="padding: 50px 40px !important;">
                            <h2 class="title" style="font-size: 1.8rem; margin-bottom: 15px; font-weight: 600; color: #fff !important;">Ready to Transform Your Business?</h2>
                            <p style="font-size: 1rem; margin-bottom: 20px; line-height: 1.7; color: #fff !important;">Get in touch with Zingo Assist, the top virtual assistant agency in the USA, and explore our premium services. Start your free trial today and discover why Zingo Assist is the preferred choice for businesses worldwide.</p>
                            <form class="subscribe-form cta-form" action="{{ route('send_mail') }}" method="post">
                                @csrf
                                <div class="cta-form-inner">
                                    <input type="email" class="form--control cta-input" name="mail" placeholder="Email Address">
                                    @error('mail')
                                        <div class="text-danger" style="font-size: 0.85rem; margin-top: 8px; color: #ffeb3b !important; display: block;">{{ $message }}</div>
                                    @enderror
                                    <button type="submit" name="submit" class="btn--base cta-btn">SEND<i class="fab fa-telegram-plane" style="margin-left: 5px;"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~ End Call-to-action ~~~-->




    {{-- <button class="btn-show-popup" onclick="showPopup()">Open Form</button> --}}

    @include('partials.trail')

    <script>
        function toggleHeroText() {
            const expandable = document.getElementById('heroExpandText');
            const btn = document.getElementById('heroReadMoreBtn');
            const btnText = btn.querySelector('.btn-text');
            const btnIcon = btn.querySelector('.btn-icon');

            if (expandable.classList.contains('expanded')) {
                expandable.classList.remove('expanded');
                btnText.textContent = 'Read More';
                btnIcon.style.transform = 'rotate(0deg)';
            } else {
                expandable.classList.add('expanded');
                btnText.textContent = 'Read Less';
                btnIcon.style.transform = 'rotate(180deg)';
            }
        }
    </script>

@endsection
