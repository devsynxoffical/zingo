{{-- Service Page Template - Shared CSS and Structure --}}
<style>
/* ============================================
   MODERN RESPONSIVE SERVICE PAGE STYLES
   ============================================ */

/* Modern Hero Section */
.service-hero-section {
    position: relative;
    min-height: 400px;
    display: flex;
    align-items: center;
    background: linear-gradient(135deg, #A52673 0%, #8a1f5f 50%, #667eea 100%);
    overflow: hidden;
    padding: 80px 0 60px;
}

.service-hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #A52673 0%, #8a1f5f 50%, #667eea 100%);
    z-index: 1;
}

.service-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.1);
    z-index: 2;
}

.service-hero-section .container {
    position: relative;
    z-index: 3;
}

.service-hero-content {
    color: white;
    text-align: center;
}

.service-hero-badge {
    display: inline-block;
    background: rgba(255, 255, 255, 0.2);
    padding: 8px 20px;
    border-radius: 25px;
    margin-bottom: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.service-hero-badge span {
    color: white;
    font-weight: 500;
    font-size: 14px;
}

.service-hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 20px;
    line-height: 1.2;
    color: #ffffff;
}

.service-hero-subtitle {
    font-size: 1.2rem;
    margin-bottom: 30px;
    opacity: 0.9;
    line-height: 1.6;
}

/* Service Content Section */
.service-section.two {
    padding: 80px 0;
    background: #f8f9fa;
}

.service-item.three.details {
    background: white;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
}

.service-thumb {
    margin-bottom: 30px;
    text-align: center;
}

.service-thumb img {
    width: 100%;
    max-width: 600px;
    height: auto;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.service-content h2.title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

.service-content > p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #666;
    margin-bottom: 40px;
    text-align: center;
}

/* Service Widget Items */
.service-widget-item-area {
    margin: 40px 0;
}

.service-widget-item {
    background: #f8f9fa;
    padding: 30px 20px;
    border-radius: 15px;
    text-align: center;
    transition: all 0.3s ease;
    height: 100%;
    border: 2px solid transparent;
}

.service-widget-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(165, 38, 115, 0.2);
    border-color: #A52673;
    background: white;
}

.service-widget-icon {
    margin-bottom: 15px;
}

.service-widget-icon img {
    width: 60px;
    height: 60px;
    object-fit: contain;
}

.service-widget-content h5.title {
    font-size: 1.1rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.service-widget-content .sub-title {
    font-size: 0.9rem;
    color: #666;
    line-height: 1.5;
    display: block;
}

/* Service Bottom Content */
.service-bottom-content {
    margin-top: 50px;
    padding-top: 50px;
    border-top: 2px solid #e9ecef;
}

.service-bottom-content h2.title {
    font-size: 2rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 25px;
}

.service-bottom-content p {
    font-size: 1rem;
    line-height: 1.8;
    color: #666;
    margin-bottom: 20px;
}

/* Blockquote */
blockquote.two {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-left: 4px solid #A52673;
    padding: 30px;
    margin: 30px 0;
    border-radius: 10px;
}

.quote-area {
    align-items: center;
}

.quote-icon {
    margin-right: 20px;
}

.quote-icon img {
    width: 50px;
    height: auto;
}

.quote-content-area {
    flex: 1;
}

.quote-content {
    font-size: 1.1rem;
    font-style: italic;
    color: #333;
    line-height: 1.8;
    margin: 0;
}

/* Contact Section */
.contact-section.two {
    margin-top: 60px;
    padding-top: 60px;
    border-top: 2px solid #e9ecef;
}

.contact-area {
    position: relative;
}

.contact-thumb {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.contact-thumb img {
    width: 100%;
    height: auto;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.contact-form-area {
    padding: 30px;
}

.contact-form-header h2.title {
    font-size: 2rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 15px;
}

.contact-form-header h2.title .text--base {
    color: #A52673;
}

.contact-form-header p {
    font-size: 1rem;
    color: #666;
    margin-bottom: 30px;
}

/* Form Styles */
.form-group {
    margin-bottom: 25px;
}

.form-group label {
    display: block;
    font-weight: 600;
    color: #333;
    margin-bottom: 8px;
    font-size: 0.95rem;
}

.form--control {
    width: 100%;
    padding: 12px 20px;
    border: 2px solid #e9ecef;
    border-radius: 10px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: white;
}

.form--control:focus {
    outline: none;
    border-color: #A52673;
    box-shadow: 0 0 0 3px rgba(165, 38, 115, 0.1);
}

textarea.form--control {
    min-height: 120px;
    resize: vertical;
}

/* Responsive Design */
@media (max-width: 1199px) {
    .service-hero-title {
        font-size: 3rem;
    }
    
    .service-content h2.title {
        font-size: 2.2rem;
    }
}

@media (max-width: 991px) {
    .service-hero-section {
        min-height: 350px;
        padding: 60px 0 40px;
    }
    
    .service-hero-title {
        font-size: 2.5rem;
    }
    
    .service-hero-subtitle {
        font-size: 1.1rem;
    }
    
    .service-item.three.details {
        padding: 30px 20px;
    }
    
    .service-content h2.title {
        font-size: 2rem;
    }
    
    .service-widget-item {
        margin-bottom: 20px;
    }
    
    .contact-thumb {
        margin-bottom: 30px;
    }
}

@media (max-width: 767px) {
    .service-hero-section {
        min-height: 300px;
        padding: 40px 0 30px;
    }
    
    .service-hero-title {
        font-size: 2rem;
    }
    
    .service-hero-subtitle {
        font-size: 1rem;
    }
    
    .service-hero-badge {
        padding: 6px 15px;
        font-size: 12px;
    }
    
    .service-section.two {
        padding: 40px 0;
    }
    
    .service-item.three.details {
        padding: 25px 15px;
        border-radius: 15px;
    }
    
    .service-content h2.title {
        font-size: 1.8rem;
    }
    
    .service-content > p {
        font-size: 1rem;
        margin-bottom: 30px;
    }
    
    .service-thumb img {
        max-width: 100%;
    }
    
    .service-widget-item {
        padding: 25px 15px;
        margin-bottom: 15px;
    }
    
    .service-widget-icon img {
        width: 50px;
        height: 50px;
    }
    
    .service-widget-content h5.title {
        font-size: 1rem;
    }
    
    .service-widget-content .sub-title {
        font-size: 0.85rem;
    }
    
    .service-bottom-content {
        margin-top: 40px;
        padding-top: 40px;
    }
    
    .service-bottom-content h2.title {
        font-size: 1.6rem;
    }
    
    .service-bottom-content p {
        font-size: 0.95rem;
    }
    
    blockquote.two {
        padding: 20px;
        margin: 25px 0;
    }
    
    .quote-icon {
        margin-right: 15px;
    }
    
    .quote-icon img {
        width: 40px;
    }
    
    .quote-content {
        font-size: 1rem;
    }
    
    .contact-section.two {
        margin-top: 40px;
        padding-top: 40px;
    }
    
    .contact-form-area {
        padding: 20px 15px;
    }
    
    .contact-form-header h2.title {
        font-size: 1.6rem;
    }
    
    .contact-form-header p {
        font-size: 0.95rem;
        margin-bottom: 25px;
    }
    
    .form-group {
        margin-bottom: 20px;
    }
    
    .form--control {
        padding: 10px 15px;
        font-size: 0.95rem;
    }
    
    textarea.form--control {
        min-height: 100px;
    }
}

@media (max-width: 575px) {
    .service-hero-title {
        font-size: 1.75rem;
    }
    
    .service-content h2.title {
        font-size: 1.5rem;
    }
    
    .service-widget-item {
        padding: 20px 12px;
    }
    
    .service-widget-content h5.title {
        font-size: 0.9rem;
    }
    
    .contact-form-header h2.title {
        font-size: 1.4rem;
    }
}

/* Remove old banner decorative elements */
.banner-element-four.two,
.banner-element-five.two,
.banner-element-nineteen.two,
.banner-element-twenty-two.two,
.banner-element-twenty-three.two {
    display: none;
}
</style>

