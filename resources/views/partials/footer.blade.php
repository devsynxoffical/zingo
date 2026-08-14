<footer class="reference-footer">
    <!-- Newsletter Section -->
    <div class="footer-newsletter">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mb-3 mb-lg-0">
                    <div class="newsletter-text">
                        <h3><i class="fas fa-envelope-open-text"></i> Subscribe to Our Newsletter</h3>
                        <p>Get the latest updates, offers, and insights delivered to your inbox!</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <form class="newsletter-form" action="{{ route('send_mail') }}" method="post">
                        @csrf
                        <div class="input-group">
                            <input type="email" class="form-control" name="mail" placeholder="Enter your email address" required>
                            <button type="submit" class="btn btn-newsletter">
                                <i class="fas fa-paper-plane"></i> Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Footer Content -->
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <!-- Column 1 - Company Information & Social Media -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-column">
                        <div class="company-info">
                            <div class="footer-logo">
                                <img src="{{ asset('assets/images/zingo assist logo png.png') }}" alt="Zingo Assist" class="logo-img">
                            </div>
                            <p class="footer-description">
                                Your trusted partner for virtual assistance and digital solutions. We help businesses grow with innovative services.
                            </p>
                            <div class="addresses">
                                <div class="address-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div>
                                        <strong>USA Office:</strong> 7901 4th ST N Ste 23684<br>
                                        ST. Petersburg, Florida 33702<br>
                                        <a href="tel:+14245427170" style="color: #A52673;">+1 424-542-7170</a>
                                    </div>
                                </div>
                            </div>
                            <div class="social-media">
                                <a href="https://www.facebook.com/p/Zingo-Assist-61559896551723" class="social-link facebook" target="_blank" title="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.instagram.com/zingoassist/" class="social-link instagram" target="_blank" title="Instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://uk.linkedin.com/company/zingo-assist" class="social-link linkedin" target="_blank" title="LinkedIn">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="social-link twitter" target="_blank" title="Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column 2 - Useful Links -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-column">
                        <h5 class="column-title">Useful Links</h5>
                        <ul class="footer-links">
                            <li><a href="{{ route('home') }}"><i class="fas fa-arrow-right"></i>Home</a></li>
                            <li><a href="{{ route('about') }}"><i class="fas fa-arrow-right"></i>About us</a></li>
                            <li><a href="{{ route('service') }}"><i class="fas fa-arrow-right"></i>Services</a></li>
                            <li><a href="{{ route('faq') }}"><i class="fas fa-arrow-right"></i>FAQ</a></li>
                            <li><a href="{{ route('blog') }}"><i class="fas fa-arrow-right"></i>Blog</a></li>
                            <li><a href="{{ route('contact') }}"><i class="fas fa-arrow-right"></i>Contact</a></li>
                            <li><a href="{{ route('terms') }}"><i class="fas fa-arrow-right"></i>Terms of service</a></li>
                            <li><a href="{{ route('privacy') }}"><i class="fas fa-arrow-right"></i>Privacy policy</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Column 3 - Our Services -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-column">
                        <h5 class="column-title">Our Services</h5>
                        <ul class="footer-links">
                            <li><a href="{{ route('service.virtual_business_assistance') }}"><i class="fas fa-arrow-right"></i>Virtual Assistance</a></li>
                            <li><a href="{{ route('service.web_development') }}"><i class="fas fa-arrow-right"></i>Web & App Development</a></li>
                            <li><a href="{{ route('service.crm_management') }}"><i class="fas fa-arrow-right"></i>CRM & MLS Management</a></li>
                            <li><a href="{{ route('service.digital_marketing') }}"><i class="fas fa-arrow-right"></i>Digital Marketing & Branding</a></li>
                            <li><a href="{{ route('service.cold_calling') }}"><i class="fas fa-arrow-right"></i>Customer Outreach & Cold Calling</a></li>
                            <li><a href="{{ route('service.lead_generation') }}"><i class="fas fa-arrow-right"></i>Lead Generation</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center">
                    <div class="copyright">
                        <p>&copy; {{ date('Y') }} Zingo Assist. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Button -->
    <div class="scroll-to-top">
        <button class="scroll-btn" onclick="scrollToTop()" aria-label="Scroll to top">
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>
</footer>

<script>
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

// Show/hide scroll to top button based on scroll position
window.addEventListener('scroll', function() {
    const scrollBtn = document.querySelector('.scroll-to-top');
    if (scrollBtn) {
        if (window.pageYOffset > 300) {
            scrollBtn.style.display = 'block';
        } else {
            scrollBtn.style.display = 'none';
        }
    }
});
</script>

<style>
/* ============================================
   STANDARDIZED BUTTON STYLES - GLOBAL
   ============================================ */

/* Header Button Override */
.header-action .btn--base {
    padding: 14px 30px !important;
    font-size: 16px !important;
    font-weight: 500 !important;
    background: #A52673 !important;
    color: #fff !important;
    border: 1px solid #A52673 !important;
    border-radius: 25px !important;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    z-index: 1;
}

.header-action .btn--base::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: #fff;
    transition: all 0.4s ease;
    z-index: -1;
}

.header-action .btn--base:hover::before {
    left: 0;
}

.header-action .btn--base:hover {
    color: #A52673 !important;
    background: #fff !important;
    border-color: #A52673 !important;
}

/* Responsive header button */
@media only screen and (max-width: 991px) {
    .header-action .btn--base {
        padding: 12px 25px !important;
        font-size: 14px !important;
    }
}

@media only screen and (max-width: 767px) {
    .header-action .btn--base {
        padding: 10px 20px !important;
        font-size: 13px !important;
    }
}
.btn-standard,
.btn--base,
.btn--based,
.btn-newsletter,
.sleek-btn,
.custom-btn,
a.btn--base,
a.btn--based,
a.sleek-btn,
a.custom-btn,
button.btn--base {
    display: inline-block;
    padding: 14px 30px !important;
    font-size: 16px !important;
    font-weight: 500 !important;
    text-align: center;
    background: #A52673 !important;
    color: #fff !important;
    border: 1px solid #A52673 !important;
    border-radius: 25px !important;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    z-index: 1;
}

.btn-standard::before,
.btn--base::before,
.btn--based::before,
.sleek-btn::before,
.custom-btn::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: #fff;
    transition: all 0.4s ease;
    z-index: -1;
}

.btn-standard:hover::before,
.btn--base:hover::before,
.btn--based:hover::before,
.sleek-btn:hover::before,
.custom-btn:hover::before {
    left: 0;
}

.btn-standard:hover,
.btn--base:hover,
.btn--based:hover,
.btn-newsletter:hover,
.sleek-btn:hover,
.custom-btn:hover {
    color: #A52673 !important;
    background: #fff !important;
    border-color: #A52673 !important;
}

.btn-standard.active,
.btn--base.active {
    background: transparent !important;
    color: #A52673 !important;
    border: 1px solid #A52673 !important;
}

.btn-standard.active:hover,
.btn--base.active:hover {
    background: #A52673 !important;
    color: #fff !important;
}

/* Button icons */
.btn-standard i,
.btn--base i,
.btn--based i,
.btn-newsletter i,
.sleek-btn i,
.custom-btn i {
    margin-left: 5px;
    font-size: 14px;
}

/* Responsive button sizing */
@media only screen and (max-width: 991px) {
    .btn-standard,
    .btn--base,
    .btn--based,
    .btn-newsletter,
    .sleek-btn,
    .custom-btn {
        padding: 12px 25px !important;
        font-size: 14px !important;
    }
}

@media only screen and (max-width: 767px) {
    .btn-standard,
    .btn--base,
    .btn--based,
    .btn-newsletter,
    .sleek-btn,
    .custom-btn {
        padding: 10px 20px !important;
        font-size: 13px !important;
    }
}

/* Newsletter Section Styles */
.footer-newsletter {
    background: linear-gradient(135deg, #2d0a1e 0%, #5a1840 40%, #A52673 80%, #C23E8E 100%);
    padding: 50px 0;
    color: white;
    position: relative;
    overflow: hidden;
}

.footer-newsletter::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -10%;
    width: 400px;
    height: 400px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(255,255,255,.06) 0%, transparent 70%);
    pointer-events: none;
}

.footer-newsletter::after {
    content: '';
    position: absolute;
    bottom: -40%;
    left: -5%;
    width: 300px;
    height: 300px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(255,255,255,.04) 0%, transparent 70%);
    pointer-events: none;
}

.newsletter-text h3 {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 10px;
    letter-spacing: -0.3px;
}

.newsletter-text h3 i {
    margin-right: 12px;
    font-size: 22px;
}

.newsletter-text p {
    margin: 0;
    opacity: 0.85;
    font-size: 0.95rem;
}

.newsletter-form .input-group {
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
    border-radius: 12px;
    overflow: hidden;
}

.newsletter-form .form-control {
    border: none;
    padding: 16px 24px;
    font-size: 0.95rem;
    border-radius: 12px 0 0 12px !important;
    background: rgba(255,255,255,.95);
    backdrop-filter: blur(8px);
}

.newsletter-form .form-control:focus {
    box-shadow: none;
    background: #fff;
}

.newsletter-form .btn-newsletter {
    border-radius: 0 12px 12px 0 !important;
    background: #fff !important;
    color: #A52673 !important;
    border: none !important;
    padding: 16px 28px !important;
    font-weight: 700 !important;
    font-size: 0.92rem !important;
    letter-spacing: 0.3px;
    transition: all 0.3s ease;
    white-space: nowrap;
    position: relative;
    overflow: hidden;
    z-index: 1;
}

.newsletter-form .btn-newsletter::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, #f8eaf3, #fff);
    z-index: -1;
    transition: all 0.3s ease;
}

.newsletter-form .btn-newsletter:hover {
    background: #f8eaf3 !important;
    color: #8B1E5A !important;
    transform: translateY(-1px);
    box-shadow: 0 4px 16px rgba(165,38,115,.15);
}

.newsletter-form .btn-newsletter i {
    margin-left: 6px !important;
    margin-right: 0 !important;
    font-size: 13px !important;
    color: #A52673;
    transition: transform 0.3s ease;
}

.newsletter-form .btn-newsletter:hover i {
    transform: translateX(3px);
    color: #8B1E5A;
}

/* Footer Description */
.footer-description {
    color: #888;
    font-size: 14px;
    line-height: 1.6;
    margin: 15px 0;
}

/* Enhanced Address Items */
.address-item {
    display: flex;
    align-items: start;
    margin-bottom: 15px;
    font-size: 14px;
}

.address-item i {
    color: #A52673;
    margin-right: 10px;
    margin-top: 3px;
    font-size: 16px;
}

.address-item div {
    flex: 1;
}

/* Social Media Enhancement */
.social-media {
    display: flex;
    gap: 10px;
    margin-top: 15px;
}

.social-link {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: all 0.3s ease;
}

.social-link.twitter {
    background: #1DA1F2;
}

.social-link.twitter:hover {
    background: #0d8ddb;
    transform: translateY(-3px);
}


/* Scroll to Top Button */
.scroll-to-top {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 999;
    display: none;
}

.scroll-btn {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: #A52673;
    color: white;
    border: none;
    cursor: pointer;
    box-shadow: 0 4px 15px rgba(165, 38, 115, 0.4);
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.scroll-btn:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(165, 38, 115, 0.6);
}

.scroll-btn i {
    font-size: 20px;
}

/* About Page Hero Section */
.about-hero-section {
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    overflow: hidden;
}

.hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #A52673 0%, #8a1f5f 50%, #667eea 100%);
    z-index: 1;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.1);
    z-index: 2;
}

.about-hero-section .container {
    position: relative;
    z-index: 3;
}

.hero-content {
    color: white;
    padding: 60px 0;
}

.hero-badge {
    display: inline-block;
    background: rgba(255, 255, 255, 0.2);
    padding: 8px 20px;
    border-radius: 25px;
    margin-bottom: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.hero-badge span {
    color: white;
    font-weight: 500;
    font-size: 14px;
}

.hero-badge i {
    color: #ffd700;
    margin-right: 8px;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 20px;
    line-height: 1.2;
}

.hero-title .text-primary {
    color: #ffffff;
}

/* Specific override for about page */
.about-hero-section .hero-title .text-primary {
    color: #ffffff !important;
}

.hero-subtitle {
    font-size: 1.2rem;
    margin-bottom: 30px;
    opacity: 0.9;
    line-height: 1.6;
}

.hero-features {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin-bottom: 40px;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 1.1rem;
    font-weight: 500;
}

.feature-item i {
    color: #4ade80;
    font-size: 1.2rem;
}

.hero-actions {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.btn-outline {
    background: transparent;
    color: white;
    border: 2px solid white;
    padding: 14px 30px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-outline:hover {
    background: white;
    color: #A52673;
    transform: translateY(-2px);
}

.hero-image {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px 0;
}

.image-container {
    position: relative;
    width: 400px;
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.main-logo {
    width: 200px;
    height: auto;
    z-index: 2;
    position: relative;
    animation: float 3s ease-in-out infinite;
}

.floating-elements {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.floating-card {
    position: absolute;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 15px;
    padding: 15px 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    color: white;
    font-weight: 500;
    animation: float 4s ease-in-out infinite;
}

.floating-card i {
    font-size: 1.5rem;
    color: #ffd700;
}

.floating-card span {
    font-size: 0.9rem;
}

.card-1 {
    top: 20%;
    left: 10%;
    animation-delay: 0s;
}

.card-2 {
    top: 60%;
    right: 10%;
    animation-delay: 1s;
}

.card-3 {
    bottom: 20%;
    left: 20%;
    animation-delay: 2s;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-20px);
    }
}

.breadcrumb-section {
    position: absolute;
    bottom: 30px;
    left: 0;
    right: 0;
    z-index: 3;
}

.breadcrumb-section .breadcrumb {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 25px;
    padding: 10px 20px;
    margin: 0;
}

.breadcrumb-section .breadcrumb-item a {
    color: white;
    text-decoration: none;
}

.breadcrumb-section .breadcrumb-item.active {
    color: #ffd700;
}

.breadcrumb-section .breadcrumb-item + .breadcrumb-item::before {
    color: white;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-actions {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .image-container {
        width: 300px;
        height: 300px;
    }
    
    .main-logo {
        width: 150px;
    }
    
    .floating-card {
        padding: 10px 15px;
    }
}

@media (max-width: 576px) {
    .hero-title {
        font-size: 2rem;
    }
    
    .hero-subtitle {
        font-size: 1rem;
    }
    
    .image-container {
        width: 250px;
        height: 250px;
    }
    
    .main-logo {
        width: 120px;
    }
}

/* Video Testimonial Thumbnails */
.video-thumbnail {
    position: relative;
    height: 300px;
    overflow: hidden;
    border-radius: 8px;
}

.thumbnail-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 8px;
    transition: transform 0.3s ease;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
}

.video-testimonial-card:hover .thumbnail-image {
    transform: scale(1.05);
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .footer-newsletter {
        padding: 36px 0;
    }
    
    .newsletter-text h3 {
        font-size: 20px;
    }
    
    .newsletter-form .input-group {
        flex-direction: column;
        border-radius: 12px;
    }
    
    .newsletter-form .form-control,
    .newsletter-form .btn-newsletter {
        border-radius: 12px !important;
        width: 100%;
    }
    
    .newsletter-form .btn-newsletter {
        margin-top: 10px;
        padding: 14px 24px !important;
    }
}
</style>
