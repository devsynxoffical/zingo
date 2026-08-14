@extends('layout.main')

@section('title', 'Terms & Conditions | Zingo Assist VA & Digital Solutions')
@section('meta_description', 'Read the Terms & Conditions of Zingo Assist, the leading virtual assistance & digital solutions agency in the USA. Learn about our policies and user guidelines.')

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
                            <li class="breadcrumb-item active" aria-current="page">Terms & Conditions</li>
                        </ol>
                    </nav>
                </div>
                <div class="legal-hero-badge"><i class="fas fa-file-contract"></i> Legal Information</div>
                <h1 class="legal-hero-title">Terms & Conditions</h1>
                <p class="legal-hero-subtitle">Please read these terms carefully before using our services. By using our services, you agree to comply with the following terms.</p>
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
                            <a href="#introduction" class="legal-toc-link active">Introduction</a>
                            <a href="#definitions" class="legal-toc-link">Definitions</a>
                            <a href="#assent" class="legal-toc-link">Assent & Acceptance</a>
                            <a href="#license" class="legal-toc-link">License to Use</a>
                            <a href="#ip" class="legal-toc-link">Intellectual Property</a>
                            <a href="#obligations" class="legal-toc-link">User Obligations</a>
                            <a href="#acceptable" class="legal-toc-link">Acceptable Use</a>
                            <a href="#privacy-info" class="legal-toc-link">Privacy Information</a>
                            <a href="#services-terms" class="legal-toc-link">Services</a>
                            <a href="#payments" class="legal-toc-link">Sales & Payments</a>
                            <a href="#security" class="legal-toc-link">Security</a>
                            <a href="#data-loss" class="legal-toc-link">Data Loss</a>
                            <a href="#indemnification" class="legal-toc-link">Indemnification</a>
                            <a href="#spam" class="legal-toc-link">Spam Policy</a>
                            <a href="#third-party" class="legal-toc-link">Third-Party Links</a>
                            <a href="#modification" class="legal-toc-link">Modification</a>
                            <a href="#entire" class="legal-toc-link">Entire Agreement</a>
                            <a href="#disclaimer" class="legal-toc-link">Disclaimer</a>
                            <a href="#liability" class="legal-toc-link">Limitation of Liability</a>
                            <a href="#governing" class="legal-toc-link">Governing Law</a>
                            <a href="#contact-terms" class="legal-toc-link">Contact Information</a>
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

                        <div id="introduction" class="legal-block">
                            <p class="legal-text">The use of this website and services provided by Zingo Assist (hereinafter referred to as "Company," "us," "we," or "our") are subject to the following Terms & Conditions (hereinafter the "Agreement"), all parts and sub-parts of which are incorporated by reference herein. This Agreement governs your use of the website https://zingoassist.us (hereinafter "Website") and any services provided through the Website ("Services").</p>
                        </div>

                        <div id="definitions" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">01</span>
                                <h3 class="legal-heading">Definitions</h3>
                            </div>
                            <ul class="legal-list">
                                <li><strong>Company / Us / We:</strong> Refers to Zingo Assist, a full-spectrum virtual assistance and digital solutions provider. This term includes all employees, affiliates, and representatives of the Company.</li>
                                <li><strong>You / User / Client:</strong> Refers to the person or entity using the Website or Services.</li>
                                <li><strong>Parties:</strong> Collectively refers to You and the Company.</li>
                            </ul>
                        </div>

                        <div id="assent" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">02</span>
                                <h3 class="legal-heading">Assent & Acceptance</h3>
                            </div>
                            <p class="legal-text">By accessing or using this Website or our Services, You acknowledge that You have read, understood, and agree to be bound by this Agreement. If You do not agree with these Terms & Conditions, please discontinue use of the Website immediately. Use of the Website or Services constitutes your acceptance of this Agreement.</p>
                        </div>

                        <div id="license" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">03</span>
                                <h3 class="legal-heading">License to Use Website</h3>
                            </div>
                            <p class="legal-text">Zingo Assist grants You a limited, non-exclusive, non-transferable, and revocable license to access and use the Website and Services for your personal or business purposes. You may not copy, modify, distribute, sell, or use the materials, content, or software provided by the Website for any unauthorized purpose.</p>
                        </div>

                        <div id="ip" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">04</span>
                                <h3 class="legal-heading">Intellectual Property</h3>
                            </div>
                            <p class="legal-text">All content, design, graphics, logos, trademarks, service marks, and software on this Website and provided through our Services are the property of Zingo Assist. You agree not to reproduce, distribute, or use any intellectual property without express written consent from the Company.</p>
                        </div>

                        <div id="obligations" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">05</span>
                                <h3 class="legal-heading">User Obligations</h3>
                            </div>
                            <p class="legal-text">When using our Website or Services, You may be required to register an account. You are responsible for providing accurate and up-to-date information. You are also responsible for maintaining the confidentiality of your account credentials and for all activities conducted under your account. Any misuse or fraudulent activity may result in immediate termination of your account.</p>
                        </div>

                        <div id="acceptable" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">06</span>
                                <h3 class="legal-heading">Acceptable Use</h3>
                            </div>
                            <p class="legal-text">You agree not to:</p>
                            <ul class="legal-list">
                                <li>Use the Website or Services for unlawful purposes.</li>
                                <li>Infringe on intellectual property rights of Zingo Assist or any third party.</li>
                                <li>Upload malware, viruses, or harmful software.</li>
                                <li>Engage in spamming, phishing, or fraudulent activity.</li>
                                <li>Distribute offensive, defamatory, or illegal content.</li>
                            </ul>
                        </div>

                        <div id="privacy-info" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">07</span>
                                <h3 class="legal-heading">Privacy Information</h3>
                            </div>
                            <p class="legal-text">By using this Website or Services, You consent to the collection, storage, and use of your personal information as described in our Privacy Policy. This may include your name, email, phone number, payment information, or other data provided voluntarily or collected automatically.</p>
                            <p class="legal-text">We use personal information to:</p>
                            <ul class="legal-list">
                                <li>Provide the Services You requested</li>
                                <li>Communicate important account or service updates</li>
                                <li>Improve and personalize your experience</li>
                                <li>Send promotional emails or offers (you may opt-out at any time)</li>
                            </ul>
                        </div>

                        <div id="services-terms" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">08</span>
                                <h3 class="legal-heading">Services</h3>
                            </div>
                            <p class="legal-text">Zingo Assist provides a variety of services including, but not limited to:</p>
                            <ul class="legal-list">
                                <li><strong>Cold Calling Services</strong> – Targeted outreach to generate leads</li>
                                <li><strong>Virtual Business Assistant</strong> – Manage your daily business operations efficiently</li>
                                <li><strong>Real Estate Transaction Coordinator</strong> – Seamless handling of property transactions</li>
                                <li><strong>SEO & Digital Marketing</strong> – Optimize your business presence online</li>
                                <li><strong>Web Development & Graphic Designing</strong> – Build and design professional websites and creatives</li>
                            </ul>
                            <p class="legal-text">By using any of our services, You agree to comply with applicable laws and regulations while using them.</p>
                        </div>

                        <div id="payments" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">09</span>
                                <h3 class="legal-heading">Sales & Payments</h3>
                            </div>
                            <p class="legal-text">Any service purchased through the Website will be billed according to the pricing listed at the time of purchase. Zingo Assist strives for accuracy in all product/service descriptions, but we do not guarantee the absolute accuracy of all information. You agree to pay for all services you request in accordance with the payment terms provided.</p>
                        </div>

                        <div id="security" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">10</span>
                                <h3 class="legal-heading">Reverse Engineering & Security</h3>
                            </div>
                            <p class="legal-text">You agree not to:</p>
                            <ul class="legal-list">
                                <li>Reverse engineer or attempt to manipulate the Website or software provided</li>
                                <li>Circumvent security features of the Website or Services</li>
                                <li>Interfere with the operation of our systems, servers, or networks</li>
                            </ul>
                        </div>

                        <div id="data-loss" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">11</span>
                                <h3 class="legal-heading">Data Loss</h3>
                            </div>
                            <p class="legal-text">Zingo Assist is not responsible for the loss of data, files, or any content uploaded or stored through our Services. You use our Website and Services at your own risk and are responsible for backup and protection of your data.</p>
                        </div>

                        <div id="indemnification" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">12</span>
                                <h3 class="legal-heading">Indemnification</h3>
                            </div>
                            <p class="legal-text">You agree to defend, indemnify, and hold harmless Zingo Assist, its affiliates, and employees from any claims, liabilities, damages, or expenses arising from your use of the Website, Services, or violation of this Agreement.</p>
                        </div>

                        <div id="spam" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">13</span>
                                <h3 class="legal-heading">Spam Policy</h3>
                            </div>
                            <p class="legal-text">Use of the Website or Services for illegal spamming, harvesting email addresses, or mass solicitation is strictly prohibited.</p>
                        </div>

                        <div id="third-party" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">14</span>
                                <h3 class="legal-heading">Third-Party Links & Content</h3>
                            </div>
                            <p class="legal-text">The Website may include links to third-party websites or services. Zingo Assist is not responsible for the content, accuracy, or practices of any third-party websites. Accessing third-party links is at your own risk.</p>
                        </div>

                        <div id="modification" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">15</span>
                                <h3 class="legal-heading">Modification & Variation</h3>
                            </div>
                            <p class="legal-text">Zingo Assist reserves the right to modify these Terms & Conditions at any time. Changes will be effective immediately upon posting on the Website. It is your responsibility to review the Agreement regularly. Continued use of the Website constitutes acceptance of any changes.</p>
                        </div>

                        <div id="entire" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">16</span>
                                <h3 class="legal-heading">Entire Agreement</h3>
                            </div>
                            <p class="legal-text">This Agreement constitutes the entire understanding between You and Zingo Assist regarding the use of this Website and Services and supersedes all prior agreements or understandings.</p>
                        </div>

                        <div id="disclaimer" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">17</span>
                                <h3 class="legal-heading">Disclaimer of Warranties</h3>
                            </div>
                            <p class="legal-text">The Website and Services are provided on an "as is" and "as available" basis. Zingo Assist does not guarantee that the Website will be error-free, uninterrupted, or free of viruses. Use of the Website or Services is at your own risk.</p>
                        </div>

                        <div id="liability" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">18</span>
                                <h3 class="legal-heading">Limitation of Liability</h3>
                            </div>
                            <p class="legal-text">To the fullest extent allowed by law, Zingo Assist will not be liable for any indirect, incidental, or consequential damages, including loss of data, revenue, or profits arising from your use of the Website or Services.</p>
                        </div>

                        <div id="governing" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">19</span>
                                <h3 class="legal-heading">Governing Law & Jurisdiction</h3>
                            </div>
                            <p class="legal-text">This Agreement shall be governed by the laws of the State of Georgia, USA. Any disputes arising from this Agreement will be resolved in the state or federal courts located in Cobb County, Georgia.</p>
                        </div>

                        <div id="contact-terms" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">20</span>
                                <h3 class="legal-heading">Contact Information</h3>
                            </div>
                            <p class="legal-text">For any questions regarding these Terms & Conditions, please contact us at:</p>
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
