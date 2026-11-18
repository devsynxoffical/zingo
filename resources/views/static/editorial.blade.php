@extends('layout.main')
@section('title', 'Editorial Policy & Content Standards | Zingo Assist')
@section('meta_description', 'How the Zingo Assist editorial team researches, fact-checks, cites sources and updates its guides on virtual assistants and real estate operations.')
@push('schema')
    @include('partials.schema-page', [
        'type' => 'page',
        'name' => 'Editorial Policy',
        'description' => 'How the Zingo Assist editorial team researches, writes, fact-checks, cites sources and updates its guides.',
        'breadcrumbs' => [['Blog', route('blog')]],
    ])
@endpush
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/legal-pages.css') }}?v={{ @filemtime(public_path('assets/css/legal-pages.css')) }}">
    <style>.header-section { background: #A52673; }</style>
@endpush
@section('content')
<div class="legal-page">
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
                            <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Editorial Policy</li>
                        </ol>
                    </nav>
                </div>
                <div class="legal-hero-badge"><i class="fas fa-pen-nib"></i> How We Write</div>
                <h1 class="legal-hero-title">Editorial Policy &amp; Content Standards</h1>
                <p class="legal-hero-subtitle">Who writes the Zingo Assist blog, how we check facts, which sources we rely on and how we keep guides up to date.</p>
            </div>
        </div>
    </section>

    <section class="legal-content">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="legal-sidebar">
                        <div class="legal-sidebar-header">
                            <i class="fas fa-list-ul"></i>
                            <h2 style="font-size: 18px; margin: 0;">On this page</h2>
                        </div>
                        <nav class="legal-toc">
                            <a href="#who" class="legal-toc-link active">Who writes our content</a>
                            <a href="#research" class="legal-toc-link">Research &amp; sources</a>
                            <a href="#accuracy" class="legal-toc-link">Fact-checking</a>
                            <a href="#legal" class="legal-toc-link">Legal &amp; pricing topics</a>
                            <a href="#updates" class="legal-toc-link">Updates &amp; corrections</a>
                            <a href="#independence" class="legal-toc-link">Independence</a>
                            <a href="#ai" class="legal-toc-link">Use of AI tools</a>
                            <a href="#contact-ed" class="legal-toc-link">Contact the editors</a>
                        </nav>
                        <div class="legal-sidebar-updated">
                            <i class="fas fa-clock"></i>
                            <span>Last Updated: Nov 18, 2026</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8" data-aos="fade-left">
                    <div class="legal-main">
                        <div id="who" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">01</span>
                                <h2 class="legal-heading">Who writes our content</h2>
                            </div>
                            <p class="legal-text">Articles on this site are written and reviewed by the <strong>Zingo Assist Editorial Team</strong>: the people who run our virtual assistant, cold calling, transaction coordination and digital marketing services every day. Zingo Assist is a virtual assistant agency with a US office at 7901 4th St N, Ste 23684, St. Petersburg, FL 33702. Our guides are based on how we deliver these services for clients, combined with published research and official sources.</p>
                            <p class="legal-text">Each article shows its publication date. Guides on pricing, compliance or laws also show when they were last reviewed.</p>
                        </div>

                        <div id="research" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">02</span>
                                <h2 class="legal-heading">Research &amp; sources</h2>
                            </div>
                            <p class="legal-text">We prefer primary sources and cite them on the page whenever an article relies on facts we did not produce ourselves. In order of preference, we use:</p>
                            <ul class="legal-list">
                                <li>Laws, regulations and government agencies (for example the FCC, the FTC, the Florida Statutes and the Florida Department of Business and Professional Regulation)</li>
                                <li>Industry and professional bodies (for example the National Association of Realtors and Florida Realtors)</li>
                                <li>Published pricing and documentation from software vendors and service providers</li>
                                <li>Our own operating experience, which we label as such</li>
                            </ul>
                        </div>

                        <div id="accuracy" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">03</span>
                                <h2 class="legal-heading">Fact-checking</h2>
                            </div>
                            <p class="legal-text">Before publishing, a second team member checks every statistic, price range, date and legal statement against its source. We do not publish invented statistics, testimonials or case studies. When a figure is an estimate or a market range rather than a measured number, we say so.</p>
                        </div>

                        <div id="legal" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">04</span>
                                <h2 class="legal-heading">Legal &amp; pricing topics</h2>
                            </div>
                            <p class="legal-text">Articles about telemarketing rules, licensing or other laws are general information, not legal advice. They carry a clear disclaimer and the date they were last reviewed, and we recommend confirming requirements with a qualified attorney or your broker. Price ranges describe the wider market and are not quotes for Zingo Assist services; we quote after a free consultation.</p>
                        </div>

                        <div id="updates" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">05</span>
                                <h2 class="legal-heading">Updates &amp; corrections</h2>
                            </div>
                            <p class="legal-text">We review pricing and compliance guides at least every six months and whenever relevant laws change. If you find an error, tell us using the contact details below. We correct factual errors promptly and update the "last reviewed" date when an article is substantively revised.</p>
                        </div>

                        <div id="independence" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">06</span>
                                <h2 class="legal-heading">Independence</h2>
                            </div>
                            <p class="legal-text">Zingo Assist sells the services we write about, and our articles link to them where relevant. We do not accept payment for coverage, and we do not publish sponsored posts. When we compare service models, such as transaction coordinators and virtual assistants, we describe the trade-offs honestly, including cases where another option may suit you better.</p>
                        </div>

                        <div id="ai" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">07</span>
                                <h2 class="legal-heading">Use of AI tools</h2>
                            </div>
                            <p class="legal-text">We may use AI tools to help with research, outlines and editing. Every article is reviewed, fact-checked and approved by a member of our team before it is published, and our editors are responsible for its accuracy.</p>
                        </div>

                        <div id="contact-ed" class="legal-block">
                            <div class="legal-block-header">
                                <span class="legal-block-number">08</span>
                                <h2 class="legal-heading">Contact the editors</h2>
                            </div>
                            <p class="legal-text">Questions, corrections or source suggestions are welcome. Call <a href="tel:+14245427170">+1 424-542-7170</a> or use our <a href="{{ route('contact') }}">contact page</a>. You can read our latest guides on the <a href="{{ route('blog') }}">Zingo Assist blog</a> or learn more <a href="{{ route('about') }}">about Zingo Assist</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var links = document.querySelectorAll('.legal-toc-link');
    links.forEach(function (link) {
        link.addEventListener('click', function (e) {
            var t = document.getElementById(this.getAttribute('href').substring(1));
            if (t) { e.preventDefault(); t.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
            links.forEach(function (l) { l.classList.remove('active'); });
            this.classList.add('active');
        });
    });
});
</script>
@endsection
