@extends('layout.main')

@section('title', 'Zingo - Assist Testimonials')

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
                Hear From <span class="sp-hero-title-highlight">Happy Customers</span>
            </h1>

            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="150" data-aos-duration="700">
                At ZingoAssist, client satisfaction is at the heart of everything we do. From virtual assistants to web development and digital marketing, our clients consistently share how our services have transformed their business operations and helped them achieve their goals.
            </p>

            <div class="sp-hero-actions" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Get Started Today <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--outline">
                    Request a Free Consultation <i class="fas fa-paper-plane"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ===================== TESTIMONIALS ===================== -->
<section class="sp-section">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Testimonials</span>
            <h2 class="sp-section-title">What Our Clients Say</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <img src="{{ asset('assets/images/client/client-1.png') }}" alt="Marlon Guzman" style="width:50px; height:50px; border-radius:50%; object-fit:cover;">
                        <div>
                            <p class="sp-testimonial-author mb-0">Marlon Guzman</p>
                            <span class="text-warning">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                        </div>
                    </div>
                    <p class="sp-testimonial-text">As a business person, I have to manage a lot of tasks daily, which costs not only in terms of resources but also results in poor health for me. Then I hired Zingo Assist to streamline my work, and it was a game changer for my business. With my assistant handling all my administrative tasks and email management, I am only seeing the essential emails. Plus, I am no longer tied up with scheduling appointments. It's a whole new level of productivity! Keep up with the fabulous work Team Zingo Assist.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <img src="{{ asset('assets/images/client/client-2.png') }}" alt="Lindsey Mancur" style="width:50px; height:50px; border-radius:50%; object-fit:cover;">
                        <div>
                            <p class="sp-testimonial-author mb-0">Lindsey Mancur</p>
                            <span class="text-warning">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                        </div>
                    </div>
                    <p class="sp-testimonial-text">I had an amazing experience with Zingo Assist! They provided exceptional services at a very nominal price. Their time management, social media management, and cold calling were all spot on. Super impressed with how everything was handled so smoothly. Highly recommend their services if you're looking for top-notch support without breaking the bank!</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-testimonial">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <img src="{{ asset('assets/images/client/client-3.png') }}" alt="Saleha Safdar" style="width:50px; height:50px; border-radius:50%; object-fit:cover;">
                        <div>
                            <p class="sp-testimonial-author mb-0">Saleha Safdar</p>
                            <span class="text-warning">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                        </div>
                    </div>
                    <p class="sp-testimonial-text">I recently had the pleasure of working with Zingo Assist, and I can confidently say they offer the best virtual assistant services available. Zingo Assist's pricing is competitive and transparent, offering excellent value. Their flexible plans allowed me to choose a package that best suited my business needs. I highly recommend Zingo Assist.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-testimonial">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <img src="{{ asset('assets/images/client/client-3.png') }}" alt="Cynthia OC" style="width:50px; height:50px; border-radius:50%; object-fit:cover;">
                        <div>
                            <p class="sp-testimonial-author mb-0">Cynthia OC</p>
                            <span class="text-warning">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                        </div>
                    </div>
                    <p class="sp-testimonial-text">Hi, I'm Cynthia. I want to share how amazing ZingoAssist has been for me. Their virtual assistants have made managing my daily tasks so much easier. From scheduling appointments to handling emails and social media, they do it all with professionalism and efficiency. ZingoAssist's personalized approach and attention to detail have truly impressed me. I can now focus on my work, knowing everything else is in capable hands. If you need reliable virtual assistant services, I highly recommend ZingoAssist. They've made my life so much more organized! Thank you, ZingoAssist!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CTA ===================== -->
<section class="sp-section" style="padding-bottom: 100px;">
    <div class="container">
        <div class="sp-cta" data-aos="fade-up" data-aos-duration="700">
            <h2 class="sp-cta-title">Ready to Experience the ZingoAssist Difference?</h2>
            <p class="sp-cta-text">
                Join hundreds of satisfied clients who trust ZingoAssist with their business operations. From virtual assistance to web development, digital marketing, and more — we deliver results that matter.
            </p>
            <div class="sp-hero-actions">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Get Started Today <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--outline">
                    Request a Free Consultation <i class="fas fa-paper-plane"></i>
                </a>
            </div>
        </div>
    </div>
</section>

</div><!-- .sp-page -->

@endsection
