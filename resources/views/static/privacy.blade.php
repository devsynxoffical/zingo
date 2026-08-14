@extends('layout.main')

@section('title', 'Privacy Policy | Zingo Assist VA & Digital Solutions')
@section('meta_description', 'Read Zingo Assist's Privacy Policy to learn how we collect, use, and protect your information as we deliver trusted virtual assistance and digital services.')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/legal-pages.css') }}?v={{ time() }}">
    <style>.header-section { background: #A52673; }</style>
@endpush

@section('content')
<div class="legal-page">

    <!-- ========== HERO ========== -->
    <section class="legal-hero">
        <div class="legal-hero-shapes">
            <div class="legal-hero-orb legal-hero-orb--1"></div>
            <div class="legal-hero-orb legal-hero-orb--2"></div>
            <div class="legal-hero-orb legal-hero-orb--3"></div>
        </div>
        <div class="legal-hero-grid"></div>
        <div class="container">
            <div class="legal-hero-inner" data-aos="fade-up" data-aos-duration="700">
                <div class="legal-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
                        </ol>
                    </nav>
                </div>
                <div class="legal-hero-badge"><i class="fas fa-shield-alt"></i> Your Privacy Matters</div>
                <h1 class="legal-hero-title">Privacy Policy</h1>
                <p class="legal-hero-subtitle">Your privacy is important to us. Learn how we collect, use, and protect your information when you use our services.</p>
            </div>
        </div>
    </section>


    <!-- ========== CONTENT ========== -->
    <section class="legal-content">
        <div class="container">
            <div class="row g-5">
                <!-- Sidebar / Table of Contents -->
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="legal-sidebar">
                        <div class="legal-sidebar-header">
                            <i class="fas fa-list-ul"></i>
                            <h4>Table of Contents</h4>
                        </div>
                        <nav class="legal-toc">
                            <a href="#intro" class="legal-toc-link active">Introduction</a>
                            <a href="#data-types" class="legal-toc-link">Types of Data</a>
                            <a href="#children" class="legal-toc-link">Children's Privacy</a>
                            <a href="#info-provide" class="legal-toc-link">Information You Provide</a>
                            <a href="#info-tech" class="legal-toc-link">Info via Technology</a>
                            <a href="#use-personal" class="legal-toc-link">Use of Personal Info</a>
                            <a href="#use-nonpersonal" class="legal-toc-link">Non-Personal Info</a>
                            <a href="#disclosure" class="legal-toc-link">Disclosure</a>
                            <a href="#third-links" class="legal-toc-link">Third-Party Links</a>
                            <a href="#your-rights" class="legal-toc-link">Your Rights</a>
                            <a href="#security-priv" class="legal-toc-link">Security</a>
                            <a href="#gdpr" class="legal-toc-link">GDPR Compliance</a>
                            <a href="#changes" class="legal-toc-link">Changes</a>
                            <a href="#contact-priv" class="legal-toc-link">Contact Us</a>
                        </nav>
                        <div class="legal-sidebar-updated">
                            <i class="fas fa-clock"></i>
                            <span>Last Updated: Nov 27, 2025</span>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-lg-8" data-aos="fade-left">
                    <div class="legal-main">

                        <div id="intro" class="legal-block">
                            <p class="legal-text">Welcome to https://zingoassist.us (the "Site"), a website and digital platform operated by Zingo Assist ("Company," "we," "our," and "us"). At Zingo Assist, we are committed to protecting your privacy and providing a secure online experience. This Privacy Policy explains how we collect, use, and safeguard your information when you visit our Site or use our services (collectively, the "Services").</p>
                            <p class="legal-text">By using our Services, you agree to the collection, storage, use, and disclosure of your information as described in this Privacy Policy.</p>
                        </div>

                        <div id="data-types" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">01</span>
                                <h3 class="legal-heading">Types of Data We Collect</h3>
                            </div>
                            <p class="legal-text">We collect both Personal Information and Non-Personal Information:</p>
                            <p class="legal-text"><strong>Personal Information</strong> includes any data that identifies or can be used to contact you, such as:</p>
                            <ul class="legal-list">
                                <li>Name, email address, phone number, and mailing address</li>
                                <li>Payment details when subscribing to services</li>
                                <li>Account credentials when registering for our platform</li>
                            </ul>
                            <p class="legal-text"><strong>Non-Personal Information</strong> includes data that does not identify you directly, such as:</p>
                            <ul class="legal-list">
                                <li>Browser type, device information, and operating system</li>
                                <li>Pages visited, time spent on the Site, referring URLs</li>
                                <li>Aggregate usage statistics and anonymous user behavior</li>
                            </ul>
                        </div>

                        <div id="children" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">02</span>
                                <h3 class="legal-heading">Children's Privacy</h3>
                            </div>
                            <p class="legal-text">Zingo Assist does not knowingly collect Personal Information from children under the age of 13. If we become aware that such information has been provided, we will take steps to delete it immediately.</p>
                        </div>

                        <div id="info-provide" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">03</span>
                                <h3 class="legal-heading">Information You Provide to Us</h3>
                            </div>
                            <p class="legal-text">We may collect Personal Information when you:</p>
                            <ul class="legal-list">
                                <li>Create an account on our Site</li>
                                <li>Subscribe to our services or newsletter</li>
                                <li>Contact us via email, forms, or chat</li>
                                <li>Participate in surveys, webinars, or events</li>
                            </ul>
                            <p class="legal-text">All data collected is used to provide, maintain, and improve our Services, respond to inquiries, and ensure a smooth user experience.</p>
                        </div>

                        <div id="info-tech" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">04</span>
                                <h3 class="legal-heading">Information Collected via Technology</h3>
                            </div>
                            <p class="legal-text">To improve your experience and analyze site performance, we may automatically collect information using cookies, web beacons, and similar technologies. This includes:</p>
                            <ul class="legal-list">
                                <li>IP address and geolocation data</li>
                                <li>Browser type and device information</li>
                                <li>Pages visited, referral sources, and interaction patterns</li>
                            </ul>
                            <p class="legal-text">We may also use third-party analytics tools like Google Analytics to better understand how users engage with our Services. Third-party cookies may be used for analytics or targeted marketing.</p>
                        </div>

                        <div id="use-personal" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">05</span>
                                <h3 class="legal-heading">Use of Your Personal Information</h3>
                            </div>
                            <p class="legal-text">Personal Information collected by Zingo Assist may be used to:</p>
                            <ul class="legal-list">
                                <li>Create and secure your account</li>
                                <li>Deliver requested services</li>
                                <li>Improve website performance and user experience</li>
                                <li>Send administrative notifications and service updates</li>
                                <li>Provide promotional information, newsletters, or surveys (with consent)</li>
                                <li>Respond to inquiries, support requests, or employment applications</li>
                            </ul>
                            <p class="legal-text">You can opt out of marketing emails at any time by clicking the unsubscribe link in our emails.</p>
                        </div>

                        <div id="use-nonpersonal" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">06</span>
                                <h3 class="legal-heading">Use of Non-Personal Information</h3>
                            </div>
                            <p class="legal-text">Non-Personal Information is used to analyze trends, improve Services, and provide customized experiences. Aggregate or anonymized data may be shared with partners or service providers to improve our offerings.</p>
                        </div>

                        <div id="disclosure" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">07</span>
                                <h3 class="legal-heading">Disclosure of Your Information</h3>
                            </div>
                            <p class="legal-text">Zingo Assist does not sell, rent, or lease your information to third parties. We may share information under the following circumstances:</p>
                            <ul class="legal-list">
                                <li><strong>Third-Party Service Providers</strong> – To facilitate services, provide technical support, run analytics, or perform marketing and data analysis.</li>
                                <li><strong>Legal Requirements</strong> – If required by law or to protect our rights, property, or users.</li>
                                <li><strong>Business Transfers</strong> – In the event of a merger, acquisition, or sale of assets.</li>
                            </ul>
                        </div>

                        <div id="third-links" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">08</span>
                                <h3 class="legal-heading">Links to Third-Party Websites</h3>
                            </div>
                            <p class="legal-text">Our Site may include links to other websites. Zingo Assist is not responsible for the privacy practices or content of third-party sites. We encourage users to review their privacy policies before providing any information.</p>
                        </div>

                        <div id="your-rights" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">09</span>
                                <h3 class="legal-heading">Your Rights</h3>
                            </div>
                            <p class="legal-text">Depending on your location, you may have rights regarding your Personal Information:</p>
                            <ul class="legal-list">
                                <li>Access, update, or request deletion of your data</li>
                                <li>Object to or restrict certain processing of your data</li>
                                <li>Request portability of your personal data</li>
                                <li>Withdraw consent where processing is based on consent</li>
                                <li>Lodge complaints with a relevant supervisory authority</li>
                            </ul>
                        </div>

                        <div id="security-priv" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">10</span>
                                <h3 class="legal-heading">Security of Your Personal Information</h3>
                            </div>
                            <p class="legal-text">We implement reasonable technical and organizational measures to protect your information from unauthorized access or disclosure. However, no system is 100% secure. By using our Services, you acknowledge that you understand and accept these inherent risks.</p>
                        </div>

                        <div id="gdpr" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">11</span>
                                <h3 class="legal-heading">GDPR Compliance</h3>
                            </div>
                            <p class="legal-text">For users in the European Union:</p>
                            <ul class="legal-list">
                                <li>We will retain your information only as long as necessary for the purposes described</li>
                                <li>You may request access, correction, or deletion of your personal data</li>
                                <li>Consent may be withdrawn at any time without affecting prior lawful processing</li>
                            </ul>
                        </div>

                        <div id="changes" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">12</span>
                                <h3 class="legal-heading">Changes to This Privacy Policy</h3>
                            </div>
                            <p class="legal-text">Zingo Assist may update this Privacy Policy from time to time. Significant changes will be communicated via email or a prominent notice on the Site. Please review this page periodically to stay informed.</p>
                        </div>

                        <div id="contact-priv" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">13</span>
                                <h3 class="legal-heading">Contact Us</h3>
                            </div>
                            <p class="legal-text">If you have any questions or concerns about this Privacy Policy or your data, please contact us at:</p>
                            <div class="legal-contact-card">
                                <div class="legal-contact-item">
                                    <i class="fas fa-envelope"></i>
                                    <div>
                                        <strong>Email</strong>
                                        <span>Sales@zingoassist.us</span>
                                    </div>
                                </div>
                                <div class="legal-contact-item">
                                    <i class="fas fa-globe"></i>
                                    <div>
                                        <strong>Website</strong>
                                        <span>https://zingoassist.us</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@include('partials.trail')

<script>
// Table of Contents active state on scroll
document.addEventListener('DOMContentLoaded', function() {
    const tocLinks = document.querySelectorAll('.legal-toc-link');
    const sections = [];

    tocLinks.forEach(function(link) {
        const id = link.getAttribute('href').substring(1);
        const section = document.getElementById(id);
        if (section) sections.push({ id: id, el: section, link: link });
    });

    function updateActive() {
        let current = '';
        sections.forEach(function(s) {
            const rect = s.el.getBoundingClientRect();
            if (rect.top <= 200) current = s.id;
        });
        tocLinks.forEach(function(l) { l.classList.remove('active'); });
        if (current) {
            const activeLink = document.querySelector('.legal-toc-link[href="#' + current + '"]');
            if (activeLink) activeLink.classList.add('active');
        }
    }

    window.addEventListener('scroll', updateActive);
    updateActive();

    // Smooth scroll for TOC links
    tocLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const id = this.getAttribute('href').substring(1);
            const target = document.getElementById(id);
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
});
</script>

@endsection
