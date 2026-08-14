@extends('layout.main')

@section('title', 'Accounting and Bookkeeping Services | ZingoAssist')
@section('meta_description', 'ZingoAssist offers professional accounting and bookkeeping services including payroll, financial reporting, & compliance management for all businesses.')

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
                Accounting & <span class="sp-hero-title-highlight">Bookkeeping Services</span>
            </h1>

            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="150" data-aos-duration="700">
                Keep your business finances organized, accurate, and compliant with Accounting and Bookkeeping Services from ZingoAssist. Our professional team provides comprehensive bookkeeping and accounting services tailored to meet the unique needs of your business. Whether you are a small business owner, a growing startup, or an established enterprise, our services help you maintain accurate financial records, make informed decisions, and focus on growing your business.
            </p>
            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">
                We combine expert knowledge, modern accounting tools, and personalized service to ensure your financial operations are efficient, transparent, and secure. ZingoAssist offers reliable solutions that simplify your workflow and maximize business success. Our Accounting and Bookkeeping Services provide clarity and efficiency, allowing you to manage your finances without stress.
            </p>
            <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="250" data-aos-duration="700">
                With our dedicated team, you can focus on strategic growth while we handle daily financial operations, reconciliations, and reporting. From cash flow monitoring to financial forecasting, our Accounting and Bookkeeping Services give you the confidence to make informed decisions that enhance your profitability and reduce risks.
            </p>

            <div class="sp-hero-actions" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Get a Free Consultation <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--outline">
                    Start Your Accounting Project <i class="fas fa-calculator"></i>
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
                    <i class="fas fa-calculator"></i>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="700">
                <span class="sp-about-label">Overview</span>
                <h2 class="sp-about-title">What Are Accounting and Bookkeeping Services?</h2>
                <p class="sp-about-text">
                    Accounting and Bookkeeping Services involve recording, organizing, and managing your financial transactions accurately and efficiently. ZingoAssist provides full-service solutions, including payroll, tax preparation, financial reporting, accounts payable and receivable management, and compliance monitoring.
                </p>
                <p class="sp-about-text">
                    With professional Accounting and Bookkeeping Services, your business can:
                </p>
                <ul class="sp-about-list">
                    <li><i class="fas fa-check-circle"></i> Maintain up-to-date financial records for every transaction</li>
                    <li><i class="fas fa-check-circle"></i> Ensure compliance with tax laws and financial regulations</li>
                    <li><i class="fas fa-check-circle"></i> Gain insights for strategic decision-making</li>
                    <li><i class="fas fa-check-circle"></i> Reduce errors and improve efficiency</li>
                    <li><i class="fas fa-check-circle"></i> Save time and focus on core business operations</li>
                    <li><i class="fas fa-check-circle"></i> Track budgets and plan future growth effectively</li>
                </ul>
                <div class="sp-highlight-box">
                    <p>By using our services, business owners can eliminate the stress of manual record-keeping, minimize costly errors, and have access to real-time financial insights. Our team ensures that every transaction is accurately recorded and that your financial statements are always audit-ready.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CORE FEATURES ===================== -->
<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Core Components</span>
            <h2 class="sp-section-title">Core Components of Our Accounting & Bookkeeping Services</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-book"></i></div>
                    <h3 class="sp-card-title">Full-Service Bookkeeping & Accounting</h3>
                    <p class="sp-card-text">Our team handles everything from daily transaction records to preparing detailed financial statements. This includes accounts payable and receivable, bank reconciliations, expense tracking, and general ledger management. Outsourcing these tasks ensures accurate financial data and compliance without burdening internal staff. With ZingoAssist's Accounting and Bookkeeping Services, businesses no longer need to worry about missed transactions, delayed reporting, or errors that could impact tax filing or audits.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-store"></i></div>
                    <h3 class="sp-card-title">Services for Small Businesses</h3>
                    <p class="sp-card-text">We specialize in bookkeeping and accounting services for small businesses, helping owners manage cash flow, reduce financial errors, and prepare for tax season. Our services are scalable, allowing access to professional financial management at an affordable cost. Small businesses benefit from our proactive approach — beyond basic bookkeeping, we provide guidance on expense management, budgeting, and cash flow optimization.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-money-check-alt"></i></div>
                    <h3 class="sp-card-title">Payroll and Tax Solutions</h3>
                    <p class="sp-card-text">We manage payroll processing, tax filing, and compliance monitoring. Our team ensures employees are paid accurately and on time, and that your business meets all tax obligations efficiently. These Accounting & Bookkeeping Services allow business owners to stay compliant, avoid penalties, and focus on scaling operations. By integrating payroll with financial reporting, we provide businesses with a seamless experience.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-chart-bar"></i></div>
                    <h3 class="sp-card-title">Financial Reporting and Analysis</h3>
                    <p class="sp-card-text">We provide detailed financial reports, including profit and loss statements, balance sheets, and cash flow analysis. These insights help business owners make informed decisions, identify growth opportunities, and monitor financial health. Our reporting goes beyond numbers — we offer actionable insights that help clients understand financial trends, plan budgets, and make strategic business decisions.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                    <h3 class="sp-card-title">Accounts Payable and Receivable Management</h3>
                    <p class="sp-card-text">Managing payments can be time-consuming. Our services streamline accounts payable and receivable, ensuring timely invoicing, accurate payments, and effective cash flow management. ZingoAssist's Accounting & Bookkeeping Services ensure your business maintains financial stability while fostering healthy relationships with vendors and clients. Efficient receivables management reduces overdue invoices, while structured payable management ensures timely payments and avoids penalties.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-cloud"></i></div>
                    <h3 class="sp-card-title">Cloud-Based Accounting Solutions</h3>
                    <p class="sp-card-text">ZingoAssist uses cloud accounting tools for secure, real-time access to your financial data. These solutions provide convenience, transparency, and collaboration between our team and your business. Cloud-based platforms allow businesses to track transactions on the go, generate instant reports, and collaborate with our team seamlessly. By leveraging technology, we increase efficiency and reduce the risk of errors in your financial records.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-clipboard-check"></i></div>
                    <h3 class="sp-card-title">Reconciliation and Audit Preparation</h3>
                    <p class="sp-card-text">We reconcile bank statements, credit card accounts, and other financial records to ensure accuracy. Our team also prepares businesses for audits, simplifying regulatory compliance. Every reconciliation and report is reviewed thoroughly to detect discrepancies early. Our proactive approach ensures that your financial statements are accurate and compliant with accounting standards.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas fa-user-tie"></i></div>
                    <h3 class="sp-card-title">Advisory and Consultation Services</h3>
                    <p class="sp-card-text">Beyond routine bookkeeping, ZingoAssist provides financial consulting to help plan budgets, forecast cash flow, and optimize tax strategies. We act as a trusted advisor, supporting long-term growth. Our Accounting & Bookkeeping Services empower business owners to make strategic decisions confidently. We provide recommendations on improving operational efficiency, managing expenses, and increasing profitability.</p>
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
            <h2 class="sp-section-title">Why Choose ZingoAssist?</h2>
            <p class="sp-section-desc">Choosing the right partner is critical. Here's why clients trust us:</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">01</div>
                    <div>
                        <h4 class="sp-choose-title">Expert Financial Team</h4>
                        <p class="sp-choose-text">Certified accountants and bookkeeping specialists with extensive experience.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">02</div>
                    <div>
                        <h4 class="sp-choose-title">Custom Solutions</h4>
                        <p class="sp-choose-text">Whether full-service or specialized support, our solutions fit your business needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">03</div>
                    <div>
                        <h4 class="sp-choose-title">Advanced Tools</h4>
                        <p class="sp-choose-text">Modern accounting software streamlines management, reduces errors, and improves reporting.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">04</div>
                    <div>
                        <h4 class="sp-choose-title">Reliable Communication</h4>
                        <p class="sp-choose-text">Regular updates, detailed reports, and clear communication.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">05</div>
                    <div>
                        <h4 class="sp-choose-title">Scalable Services</h4>
                        <p class="sp-choose-text">Our services grow with your business, supporting new challenges and opportunities.</p>
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
            <h2 class="sp-section-title">Our Accounting & Bookkeeping Services in Action</h2>
        </div>
        <div class="sp-timeline">
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-timeline-dot">1</div>
                <div class="sp-timeline-card">
                    <h4>Financial Assessment and Planning</h4>
                    <p>We evaluate your financial records, understand your goals, and identify areas for improvement. This ensures that your Accounting and Bookkeeping Services are aligned with business priorities.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="100">
                <div class="sp-timeline-dot">2</div>
                <div class="sp-timeline-card">
                    <h4>Streamlined Bookkeeping and Recording</h4>
                    <p>We record all transactions accurately, including invoices, receipts, payments, and reconciliations. Our proactive monitoring ensures that records remain up-to-date at all times.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="200">
                <div class="sp-timeline-dot">3</div>
                <div class="sp-timeline-card">
                    <h4>Payroll and Compliance Management</h4>
                    <p>We manage payroll, tax deductions, and compliance, ensuring your business meets legal requirements. This reduces stress and improves operational efficiency.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="300">
                <div class="sp-timeline-dot">4</div>
                <div class="sp-timeline-card">
                    <h4>Financial Reporting and Insights</h4>
                    <p>We generate reports like P&L statements, balance sheets, and cash flow analysis for strategic decisions. Our insights help identify opportunities for cost savings and revenue growth.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="400">
                <div class="sp-timeline-dot">5</div>
                <div class="sp-timeline-card">
                    <h4>Audit Preparation and Risk Management</h4>
                    <p>We prepare records for audits, identify discrepancies, and mitigate financial risks. Our services give business owners confidence that their records are always ready for inspection.</p>
                </div>
            </div>
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="500">
                <div class="sp-timeline-dot">6</div>
                <div class="sp-timeline-card">
                    <h4>Ongoing Support and Advisory Services</h4>
                    <p>Continuous support, advice, and system updates help maintain efficiency and compliance. Our Accounting & Bookkeeping Services provide ongoing value beyond just recording financial transactions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== BENEFITS ===================== -->
<section class="sp-section">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">Benefits</span>
            <h2 class="sp-section-title">Benefits of Professional Accounting and Bookkeeping Services</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-check-circle"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Accurate Financial Records</h4>
                        <p class="sp-benefit-text">Accurate financial records for better decision-making.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-gavel"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Tax Compliance</h4>
                        <p class="sp-benefit-text">Compliance with tax laws and regulations.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-clock"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Time-Saving</h4>
                        <p class="sp-benefit-text">Time-saving for business owners.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-chart-pie"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Actionable Financial Insights</h4>
                        <p class="sp-benefit-text">Actionable financial insights.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-money-bill-wave"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Improved Cash Flow</h4>
                        <p class="sp-benefit-text">Improved cash flow management.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-pencil-ruler"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Tailored Solutions</h4>
                        <p class="sp-benefit-text">Tailored solutions for your business.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-expand-arrows-alt"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Scalable Services</h4>
                        <p class="sp-benefit-text">Scalable services as your business grows.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                <div class="sp-benefit">
                    <div class="sp-benefit-icon"><i class="fas fa-shield-alt"></i></div>
                    <div>
                        <h4 class="sp-benefit-title">Peace of Mind</h4>
                        <p class="sp-benefit-text">Peace of mind knowing your finances are handled professionally.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== FAQ ===================== -->
<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">FAQs</span>
            <h2 class="sp-section-title">Frequently Asked Questions</h2>
        </div>
        <div class="sp-faq-wrap" data-aos="fade-up" data-aos-delay="100">
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">What is included in these services?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">We handle financial records, payroll, taxes, reporting, and compliance.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Can small businesses use these services?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes, we specialize in small business bookkeeping and accounting.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Are cloud solutions available?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes, we provide real-time access with cloud-based accounting tools.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Do you ensure tax compliance?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Absolutely, we handle all tax obligations accurately.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Can you provide financial reports?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes, including P&L, balance sheets, and cash flow statements.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">How often are accounts updated?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">We provide regular reconciliations and updates for accuracy.</div>
                </div>
            </div>
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h4 class="sp-faq-q">Is ongoing support provided?</h4>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">Yes, including financial advice, updates, and system maintenance.</div>
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
            <p class="sp-cta-text">Partner with ZingoAssist to:</p>
            <ul class="sp-cta-list">
                <li><i class="fas fa-check-circle"></i> Keep financial records accurate and organized</li>
                <li><i class="fas fa-check-circle"></i> Ensure compliance with tax laws</li>
                <li><i class="fas fa-check-circle"></i> Gain actionable insights</li>
                <li><i class="fas fa-check-circle"></i> Save time and focus on growth</li>
                <li><i class="fas fa-check-circle"></i> Receive reliable, scalable Accounting & Bookkeeping Services</li>
            </ul>
            <div class="sp-hero-actions">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">
                    Start Your Accounting Project <i class="fas fa-arrow-right"></i>
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
