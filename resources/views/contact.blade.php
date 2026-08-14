@extends('layout.main')

@section('title', 'Get our Virtual Assistance Services Today | Zingo Assist')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/contact-page.css') }}?v={{ time() }}">
    <style>.header-section { background: #A52673; }</style>
@endpush

@section('content')
<div class="cp-page">

    <!-- ========== HERO ========== -->
    <section class="cp-hero">
        <div class="cp-hero-orbs">
            <div class="cp-hero-orb cp-hero-orb--1"></div>
            <div class="cp-hero-orb cp-hero-orb--2"></div>
            <div class="cp-hero-orb cp-hero-orb--3"></div>
        </div>
        <div class="cp-hero-grid"></div>
        <div class="container">
            <div class="cp-hero-inner" data-aos="fade-up" data-aos-duration="700">
                <div class="cp-hero-breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <i class="fas fa-chevron-right"></i>
                    <span>Contact</span>
        </div>
                <h1 class="cp-hero-title">Let's Start a<br><span class="cp-hero-highlight">Conversation</span></h1>
                <p class="cp-hero-subtitle">We're here to help you succeed. Reach out to our global team and let's discuss how we can transform your business.</p>
                <div class="cp-hero-quick-links" data-aos="fade-up" data-aos-delay="100">
                    <a href="mailto:Sales@zingoassist.us" class="cp-quick-link">
                        <i class="fas fa-envelope"></i>
                        Sales@zingoassist.us
                    </a>
                    <a href="tel:+14245427170" class="cp-quick-link">
                        <i class="fas fa-phone-alt"></i>
                        +1 424-542-7170
                    </a>
        </div>
        </div>
        </div>
    </section>


    <!-- ========== CONTACT OPTIONS (Quick Cards) ========== -->
    <section class="cp-quick-cards">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="cp-option-card">
                        <div class="cp-option-icon"><i class="fas fa-envelope"></i></div>
                        <h4>Email Us</h4>
                        <p>Get a response within 2 hours</p>
                        <a href="mailto:Sales@zingoassist.us" class="cp-option-link">
                            Sales@zingoassist.us
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
                    <div class="cp-option-card">
                        <div class="cp-option-icon"><i class="fas fa-comments"></i></div>
                        <h4>Live Chat</h4>
                        <p>Chat with our team instantly</p>
                        <button class="cp-option-link" onclick="openLiveChat()">
                            Start Chat
                            <i class="fas fa-arrow-right"></i>
                        </button>
                            </div>
                        </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="cp-option-card">
                        <div class="cp-option-icon"><i class="fas fa-calendar-alt"></i></div>
                        <h4>Schedule Call</h4>
                        <p>Book a free consultation</p>
                        <button class="cp-option-link" onclick="openBooking()">
                            Book Now
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ========== CONTACT FORM + INFO ========== -->
    <section class="cp-main">
        <div class="container">
            <div class="row g-5">
                <!-- Left: Form -->
                <div class="col-lg-7" data-aos="fade-right" data-aos-duration="800">
                    <div class="cp-form-wrapper">
                        <div class="cp-form-header">
                            <div class="cp-section-tag">Send a Message</div>
                            <h2 class="cp-form-title">Get In Touch</h2>
                            <p class="cp-form-desc">Fill out the form below and our team will get back to you within 24 hours.</p>
                        </div>

                        <form class="cp-form" id="contact-form">
                            @csrf
                            <div id="alert"></div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="cp-form-group">
                                        <label for="name">Full Name</label>
                                        <div class="cp-input-wrap">
                                            <i class="fas fa-user"></i>
                                            <input type="text" name="name" id="name" placeholder="John Doe" class="cp-input">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cp-form-group">
                                        <label for="email">Email Address</label>
                                        <div class="cp-input-wrap">
                                            <i class="fas fa-envelope"></i>
                                            <input type="email" name="email" id="email" placeholder="john@company.com" class="cp-input">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cp-form-group">
                                        <label for="phone">Phone Number</label>
                                        <div class="cp-input-wrap">
                                            <i class="fas fa-phone-alt"></i>
                                            <input type="text" name="phone" id="phone" placeholder="+1 (xxx) xxx-xxxx" class="cp-input"
                                                oninput="this.value = this.value.replace(/[^0-9+\-() .]/g, '');">
                    </div>
                </div>
            </div>
                                <div class="col-md-6">
                                    <div class="cp-form-group">
                                        <label for="service">Service Needed</label>
                                        <div class="cp-input-wrap cp-select-wrap">
                                            <i class="fas fa-briefcase"></i>
                                            <select name="service" id="service" class="cp-input cp-select">
                                                <option value="" selected>Choose a service</option>
                                                <option value="virtual_assistant">Virtual Assistant</option>
                                                <option value="web_development">Web Development</option>
                                                <option value="web_design">Web Design</option>
                                                <option value="search_seo">Search SEO</option>
                                                <option value="email_and_text_marketing">Email & Text Marketing</option>
                                                <option value="lead_generation">Lead Generation</option>
                                                <option value="transaction_cordinator">Transaction Coordination</option>
                                                <option value="digital_marketing">Digital Marketing</option>
                                                <option value="graphic_design">Graphic Design</option>
                                                <option value="crm_management">CRM Management</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="cp-form-group">
                                        <label for="message">Your Message</label>
                                        <div class="cp-input-wrap cp-textarea-wrap">
                                            <i class="fas fa-comment-dots"></i>
                                            <textarea name="message" id="message" rows="5" placeholder="Tell us about your project or how we can help..." class="cp-input cp-textarea"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="cp-btn-submit">
                                        <span>Send Message</span>
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Right: Office Info -->
                <div class="col-lg-5" data-aos="fade-left" data-aos-duration="800">
                    <div class="cp-info-side">
                        <div class="cp-section-tag">Our Offices</div>
                        <h3 class="cp-info-title">Global Presence</h3>
                        <p class="cp-info-desc">With offices across three continents, we're always available to support your business needs.</p>

                        <!-- USA -->
                        <div class="cp-office-card">
                            <div class="cp-office-flag">
                                <img src="https://flagcdn.com/w40/us.png" alt="USA" width="32" height="20">
                            </div>
                            <div class="cp-office-content">
                                <h4>USA Office</h4>
                                <div class="cp-office-details">
                                    <div class="cp-detail-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>7901 4th ST N Ste 23684, ST. Petersburg, Florida 33702</span>
                                    </div>
                                    <div class="cp-detail-item">
                                        <i class="fas fa-phone-alt"></i>
                                        <a href="tel:+14245427170">+1 424-542-7170</a>
                                    </div>
                                    <div class="cp-detail-item">
                                        <i class="fas fa-clock"></i>
                                        <span>8am — 5pm EST</span>
                                    </div>
                                </div>
                                <a href="https://maps.google.com/?q=7901+4th+ST+N+Ste+23684,+ST.+Petersburg,+Florida+33702" class="cp-directions" target="_blank">
                                    <i class="fas fa-directions"></i> Get Directions
                                </a>
                            </div>
                        </div>

                        <!-- UAE -->
                        <div class="cp-office-card">
                            <div class="cp-office-flag">
                                <img src="https://flagcdn.com/w40/ae.png" alt="UAE" width="32" height="20">
                    </div>
                            <div class="cp-office-content">
                                <h4>UAE Office</h4>
                                <div class="cp-office-details">
                                    <div class="cp-detail-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Office 59, 2nd floor, First Gulf Business Center, Madina Mall Muhaisnah, Dubai</span>
                                </div>
                                    <div class="cp-detail-item">
                                        <i class="fas fa-phone-alt"></i>
                                    <a href="tel:+971505606877">+971 50 560 6877</a>
                                </div>
                                    <div class="cp-detail-item">
                                    <i class="fas fa-clock"></i>
                                        <span>9am — 6pm GST</span>
                                    </div>
                                </div>
                                <a href="https://maps.google.com/?q=Office+59,+2nd+floor,+First+Gulf+Business+Center,+Madina+Mall+Muhaisnah,+Dubai" class="cp-directions" target="_blank">
                                    <i class="fas fa-directions"></i> Get Directions
                                </a>
                            </div>
                        </div>

                        <!-- Pakistan -->
                        <div class="cp-office-card">
                            <div class="cp-office-flag">
                                <img src="https://flagcdn.com/w40/pk.png" alt="Pakistan" width="32" height="20">
                    </div>
                            <div class="cp-office-content">
                                <h4>Pakistan Office</h4>
                                <div class="cp-office-details">
                                    <div class="cp-detail-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>206, Service Road East, Sector I-10/3, Islamabad</span>
                                </div>
                                    <div class="cp-detail-item">
                                        <i class="fas fa-phone-alt"></i>
                                    <a href="tel:+923450195401">+92 345-019-5401</a>
                                </div>
                                    <div class="cp-detail-item">
                                    <i class="fas fa-clock"></i>
                                    <span>24/7 Available</span>
                                </div>
                            </div>
                                <a href="https://maps.google.com/?q=206+Service+Road+East+Sector+I-10/3+Islamabad" class="cp-directions" target="_blank">
                                    <i class="fas fa-directions"></i> Get Directions
                                </a>
                </div>
            </div>

                        <!-- Trust badges -->
                        <div class="cp-trust-badges">
                            <div class="cp-trust-badge">
                                <i class="fas fa-shield-alt"></i>
                                <span>100% Secure</span>
                            </div>
                            <div class="cp-trust-badge">
                                <i class="fas fa-bolt"></i>
                                <span>Fast Response</span>
                            </div>
                            <div class="cp-trust-badge">
                                <i class="fas fa-headset"></i>
                                <span>24/7 Support</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ========== MAP / CTA ========== -->
    <section class="cp-cta">
        <div class="cp-cta-orbs">
            <div class="cp-cta-orb cp-cta-orb--1"></div>
            <div class="cp-cta-orb cp-cta-orb--2"></div>
        </div>
        <div class="container">
            <div class="cp-cta-inner" data-aos="fade-up">
                <div class="cp-cta-badge">Ready to Get Started?</div>
                <h2 class="cp-cta-title">Let's Build Something<br>Amazing Together</h2>
                <p class="cp-cta-text">Join 256+ businesses worldwide that trust Zingo Assist for their virtual assistance needs.</p>
                <div class="cp-cta-trust">
                    <span><i class="fas fa-check-circle"></i> No commitment required</span>
                    <span><i class="fas fa-check-circle"></i> Free consultation</span>
                    <span><i class="fas fa-check-circle"></i> Results guaranteed</span>
                </div>
            </div>
        </div>
    </section>

</div><!-- /.cp-page -->

<a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>

    @include('partials.trail')

    <script>
        const sendEmailRoute = @json(route('api.send_email'));

        function openLiveChat() {
            alert('Live chat feature coming soon! For now, please call us or send an email.');
        }

        function openBooking() {
            alert('Booking system coming soon! For now, please call us to schedule a consultation.');
        }
    </script>

    <script src="{{ asset('assets/custom/custom.js') }}"></script>

@endsection
