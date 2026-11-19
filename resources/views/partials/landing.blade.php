{{--
    Data-driven landing page body using the site's service-page (sp-*) design system.
    Expects $page = [
        'h1' => [plain, highlight], 'hero' => [paragraphs], 'cta' => label,
        'answer' => 'direct answer paragraph (AEO)',
        'overview' => ['label','title', 'paragraphs' => [], 'list' => []],
        'cards' => ['label','title','desc', 'items' => [[icon,title,text]]],
        'table' => ['label','title','desc','head' => [], 'rows' => [[]], 'note'],
        'process' => ['label','title', 'steps' => [[title,text]]],
        'why' => ['label','title', 'items' => [[title,text]]],
        'prose' => ['label','title','html'],
        'links' => ['title', 'items' => [[label, url]]],
        'faqs' => [[q, a]],
        'final' => ['title','text','list' => []],
    ]
--}}
<div class="sp-page">

<section class="sp-hero lp-hero">
    <div class="sp-hero-decor sp-hero-decor--1"></div>
    <div class="sp-hero-decor sp-hero-decor--2"></div>
    <div class="sp-hero-decor sp-hero-decor--3"></div>
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="{{ ($page['form'] ?? true) ? 'col-lg-7' : 'col-lg-10 mx-auto text-center' }}">
                <div class="sp-hero-inner lp-hero-text">
                    @if (!empty($page['eyebrow']))<span class="lp-eyebrow">{{ $page['eyebrow'] }}</span>@endif
                    <h1 class="sp-hero-title" data-aos="fade-up" data-aos-duration="700">
                        {{ $page['h1'][0] }} <span class="sp-hero-title-highlight">{{ $page['h1'][1] }}</span>
                    </h1>
                    @foreach ($page['hero'] as $p)
                        <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="150" data-aos-duration="700">{!! $p !!}</p>
                    @endforeach
                    <ul class="lp-hero-points">
                        @foreach (($page['hero_points'] ?? ['Free 2-day trial', 'Start in 24–48 hours', 'US-managed team in St. Petersburg, FL']) as $pt)
                            <li><i class="fas fa-check-circle"></i> {{ $pt }}</li>
                        @endforeach
                    </ul>
                    <div class="sp-hero-actions" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                        <a href="#lead-final" class="sp-btn sp-btn--white">{{ $page['cta'] ?? 'Start Your Free 2-Day Trial' }} <i class="fas fa-arrow-right"></i></a>
                        <a href="tel:+14245427170" class="sp-btn sp-btn--outline">Call +1 424-542-7170 <i class="fas fa-phone"></i></a>
                    </div>
                </div>
            </div>
            @if ($page['form'] ?? true)
            <div class="col-lg-5" data-aos="fade-left" data-aos-duration="700">
                @include('partials.lead-form', ['formId' => 'lead-hero', 'service' => $page['form_service'] ?? 'Real Estate Virtual Assistant', 'title' => $page['form_title'] ?? 'Get your free 2-day trial', 'button' => $page['form_button'] ?? 'Get My Free Trial'])
            </div>
            @endif
        </div>
    </div>
</section>

<div class="lp-trust">
    <div class="container">
        <div class="lp-trust-grid">
            <div><i class="fas fa-gift"></i><span><strong>Free 2-day trial</strong>Test the work before you commit</span></div>
            <div><i class="fas fa-bolt"></i><span><strong>24–48 hour start</strong>Matched to your tasks fast</span></div>
            <div><i class="fas fa-map-marker-alt"></i><span><strong>St. Petersburg, FL</strong>US-managed, Eastern Time</span></div>
            <div><i class="fas fa-user-shield"></i><span><strong>Confidential</strong>NDAs and role-based access</span></div>
        </div>
    </div>
</div>

@if (!empty($page['answer']))
<section class="sp-section" style="padding-bottom: 0;">
    <div class="container">
        <div class="sp-answer" data-aos="fade-up">
            <span class="sp-answer-label">Quick answer</span>
            <p>{!! $page['answer'] !!}</p>
        </div>
    </div>
</section>
@endif

@if (!empty($page['overview']))
<section class="sp-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-aos="fade-right" data-aos-duration="700">
                @if (!empty($page['overview']['image']))
                    <div class="lp-img-frame">
                        <img src="{{ asset($page['overview']['image']) }}" alt="{{ $page['overview']['image_alt'] ?? $page['overview']['title'] }}" loading="lazy" decoding="async">
                        @if (!empty($page['overview']['badge']))<div class="lp-img-badge"><i class="fas fa-star"></i> {{ $page['overview']['badge'] }}</div>@endif
                    </div>
                @else
                    <div class="sp-about-icon-placeholder"><i class="fas {{ $page['overview']['icon'] ?? 'fa-user-tie' }}"></i></div>
                @endif
            </div>
            <div class="col-lg-7" data-aos="fade-left" data-aos-duration="700">
                <span class="sp-about-label">{{ $page['overview']['label'] }}</span>
                <h2 class="sp-about-title">{{ $page['overview']['title'] }}</h2>
                @foreach ($page['overview']['paragraphs'] as $p)
                    <p class="sp-about-text">{!! $p !!}</p>
                @endforeach
                @if (!empty($page['overview']['list']))
                    <ul class="sp-about-list">
                        @foreach ($page['overview']['list'] as $li)
                            <li><i class="fas fa-check-circle"></i> {!! $li !!}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</section>
@endif

@if (!empty($page['cards']))
<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">{{ $page['cards']['label'] }}</span>
            <h2 class="sp-section-title">{{ $page['cards']['title'] }}</h2>
            @if (!empty($page['cards']['desc']))<p class="sp-section-desc">{{ $page['cards']['desc'] }}</p>@endif
        </div>
        <div class="row g-4">
            @foreach ($page['cards']['items'] as $i => $c)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 80 }}">
                <div class="sp-card">
                    <div class="sp-card-icon"><i class="fas {{ $c[0] }}"></i></div>
                    <h3 class="sp-card-title">{{ $c[1] }}</h3>
                    <p class="sp-card-text">{!! $c[2] !!}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@if (!empty($page['table']))
<section class="sp-section">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">{{ $page['table']['label'] }}</span>
            <h2 class="sp-section-title">{{ $page['table']['title'] }}</h2>
            @if (!empty($page['table']['desc']))<p class="sp-section-desc">{{ $page['table']['desc'] }}</p>@endif
        </div>
        <div class="sp-table-wrap" data-aos="fade-up">
            <table class="sp-table">
                <thead><tr>@foreach ($page['table']['head'] as $th)<th scope="col">{{ $th }}</th>@endforeach</tr></thead>
                <tbody>
                    @foreach ($page['table']['rows'] as $row)
                        <tr>@foreach ($row as $td)<td>{!! $td !!}</td>@endforeach</tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if (!empty($page['table']['note']))<p class="sp-table-note">{!! $page['table']['note'] !!}</p>@endif
    </div>
</section>
@endif

@if (!empty($page['prose']))
<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">{{ $page['prose']['label'] }}</span>
            <h2 class="sp-section-title">{{ $page['prose']['title'] }}</h2>
        </div>
        <div class="sp-prose" data-aos="fade-up">{!! $page['prose']['html'] !!}</div>
    </div>
</section>
@endif

@if (!empty($page['process']))
<section class="sp-section">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">{{ $page['process']['label'] }}</span>
            <h2 class="sp-section-title">{{ $page['process']['title'] }}</h2>
        </div>
        <div class="sp-timeline">
            @foreach ($page['process']['steps'] as $i => $s)
            <div class="sp-timeline-item" data-aos="fade-up" data-aos-delay="{{ $i * 60 }}">
                <div class="sp-timeline-dot">{{ $i + 1 }}</div>
                <div class="sp-timeline-card">
                    <h3 style="font-size: 20px;">{{ $s[0] }}</h3>
                    <p>{!! $s[1] !!}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@if (!empty($page['why']))
<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">{{ $page['why']['label'] }}</span>
            <h2 class="sp-section-title">{{ $page['why']['title'] }}</h2>
        </div>
        <div class="row g-4">
            @foreach ($page['why']['items'] as $i => $w)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 80 }}">
                <div class="sp-choose-card">
                    <div class="sp-choose-num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    <div>
                        <h3 class="sp-choose-title" style="font-size: 18px;">{{ $w[0] }}</h3>
                        <p class="sp-choose-text">{!! $w[1] !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@if (!empty($page['tabs']))
<section class="sp-section">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">{{ $page['tabs']['label'] }}</span>
            <h2 class="sp-section-title">{{ $page['tabs']['title'] }}</h2>
            @if (!empty($page['tabs']['desc']))<p class="sp-section-desc">{{ $page['tabs']['desc'] }}</p>@endif
        </div>
        <div class="lp-tabs" data-aos="fade-up">
            <div class="lp-tab-list" role="tablist">
                @foreach ($page['tabs']['items'] as $i => $t)
                    <button type="button" role="tab" class="lp-tab{{ $i === 0 ? ' is-active' : '' }}" aria-selected="{{ $i === 0 ? 'true' : 'false' }}" data-tab="tab-{{ $i }}"><i class="fas {{ $t[0] }}"></i> {{ $t[1] }}</button>
                @endforeach
            </div>
            @foreach ($page['tabs']['items'] as $i => $t)
                <div class="lp-tab-panel{{ $i === 0 ? ' is-active' : '' }}" id="tab-{{ $i }}" role="tabpanel">
                    <div class="row align-items-center g-4">
                        <div class="{{ !empty($t[3]) ? 'col-lg-7' : 'col-12' }}">{!! $t[2] !!}</div>
                        @if (!empty($t[3]))<div class="col-lg-5"><img class="lp-tab-img" src="{{ asset($t[3]) }}" alt="{{ $t[1] }}" loading="lazy" decoding="async"></div>@endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@if ($page['team'] ?? true)
<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <span class="sp-about-label">Our Team</span>
                <h2 class="sp-about-title">Real People Behind Your Support</h2>
                <p class="sp-about-text">Your assistant is a trained member of the Zingo Assist team, supported by team leads who review quality and step in if your assistant is ever unavailable. You get one point of contact and a team behind them.</p>
                <ul class="sp-about-list">
                    <li><i class="fas fa-check-circle"></i> Vetted and trained before they join your account</li>
                    <li><i class="fas fa-check-circle"></i> Team-lead quality checks and backup coverage</li>
                    <li><i class="fas fa-check-circle"></i> Works in your tools, on your schedule</li>
                </ul>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="lp-team-grid">
                    <img src="{{ asset('assets/images/services/arooba.png') }}" alt="Zingo Assist virtual assistant working at her desk" loading="lazy" decoding="async">
                    <img src="{{ asset('assets/images/services/Osama.png') }}" alt="Zingo Assist team member managing client tasks" loading="lazy" decoding="async">
                    <img src="{{ asset('assets/images/services/tooba.png') }}" alt="Zingo Assist assistant on a client call" loading="lazy" decoding="async">
                    <img src="{{ asset('assets/images/services/shaheer.png') }}" alt="Zingo Assist cold caller with headset" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if (!empty($page['faqs']))
<section class="sp-section">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">FAQ</span>
            <h2 class="sp-section-title">Frequently Asked Questions</h2>
        </div>
        <div class="sp-faq-wrap" data-aos="fade-up" data-aos-delay="100">
            @foreach ($page['faqs'] as $f)
            <div class="sp-faq">
                <div class="sp-faq-header">
                    <h3 class="sp-faq-q" style="font-size: 17px;">{{ $f[0] }}</h3>
                    <span class="sp-faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="sp-faq-body">
                    <div class="sp-faq-body-inner">{!! $f[1] !!}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@if (!empty($page['links']))
<section class="sp-section sp-section--gray" style="padding-top: 60px; padding-bottom: 60px;">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <h2 class="sp-section-title" style="font-size: 26px;">{{ $page['links']['title'] }}</h2>
        </div>
        <div class="sp-links">
            @foreach ($page['links']['items'] as $l)
                <a class="sp-link-chip" href="{{ $l[1] }}">{{ $l[0] }} <i class="fas fa-arrow-right"></i></a>
            @endforeach
        </div>
    </div>
</section>
@endif

<section class="sp-section lp-final" id="lead-final">
    <div class="container">
        <div class="lp-final-box">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="lp-final-title">{{ $page['final']['title'] }}</h2>
                    <p class="lp-final-text">{!! $page['final']['text'] !!}</p>
                    @if (!empty($page['final']['list']))
                    <ul class="lp-final-list">
                        @foreach ($page['final']['list'] as $li)<li><i class="fas fa-check-circle"></i> {{ $li }}</li>@endforeach
                    </ul>
                    @endif
                    <div class="lp-final-steps">
                        <div><span>1</span>Send the form</div>
                        <div><span>2</span>Free consultation call</div>
                        <div><span>3</span>2-day free trial</div>
                    </div>
                    <p class="lp-final-call">Prefer to talk? <a href="tel:+14245427170"><i class="fas fa-phone"></i> +1 424-542-7170</a></p>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    @include('partials.lead-form', ['formId' => 'lead-final-form', 'service' => $page['form_service'] ?? 'Real Estate Virtual Assistant', 'title' => 'Get a free consultation', 'subtitle' => 'Tell us what is slowing you down. We reply within 24 hours.', 'button' => 'Book My Free Consultation'])
                </div>
            </div>
        </div>
    </div>
</section>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.lp-tabs').forEach(function (box) {
        box.querySelectorAll('.lp-tab').forEach(function (btn) {
            btn.addEventListener('click', function () {
                box.querySelectorAll('.lp-tab').forEach(function (b) { b.classList.remove('is-active'); b.setAttribute('aria-selected', 'false'); });
                box.querySelectorAll('.lp-tab-panel').forEach(function (p) { p.classList.remove('is-active'); });
                btn.classList.add('is-active'); btn.setAttribute('aria-selected', 'true');
                var panel = box.querySelector('#' + btn.dataset.tab); if (panel) panel.classList.add('is-active');
            });
        });
    });
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
