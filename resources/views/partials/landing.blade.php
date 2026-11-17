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

<section class="sp-hero">
    <div class="sp-hero-decor sp-hero-decor--1"></div>
    <div class="sp-hero-decor sp-hero-decor--2"></div>
    <div class="sp-hero-decor sp-hero-decor--3"></div>
    <div class="container">
        <div class="sp-hero-inner">
            <h1 class="sp-hero-title" data-aos="fade-up" data-aos-duration="700">
                {{ $page['h1'][0] }} <span class="sp-hero-title-highlight">{{ $page['h1'][1] }}</span>
            </h1>
            @foreach ($page['hero'] as $p)
                <p class="sp-hero-desc" data-aos="fade-up" data-aos-delay="150" data-aos-duration="700">{!! $p !!}</p>
            @endforeach
            <div class="sp-hero-actions" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">{{ $page['cta'] ?? 'Start Your Free 2-Day Trial' }} <i class="fas fa-arrow-right"></i></a>
                <a href="tel:+14245427170" class="sp-btn sp-btn--outline">Call +1 424-542-7170 <i class="fas fa-phone"></i></a>
            </div>
        </div>
    </div>
</section>

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
                <div class="sp-about-icon-placeholder"><i class="fas {{ $page['overview']['icon'] ?? 'fa-user-tie' }}"></i></div>
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

<section class="sp-section" style="padding-bottom: 100px;">
    <div class="container">
        <div class="sp-cta" data-aos="fade-up" data-aos-duration="700">
            <h2 class="sp-cta-title">{{ $page['final']['title'] }}</h2>
            <p class="sp-cta-text">{!! $page['final']['text'] !!}</p>
            @if (!empty($page['final']['list']))
            <ul class="sp-cta-list">
                @foreach ($page['final']['list'] as $li)<li><i class="fas fa-check-circle"></i> {{ $li }}</li>@endforeach
            </ul>
            @endif
            <div class="sp-hero-actions">
                <a href="{{ route('contact') }}" class="sp-btn sp-btn--white">Book a Free Consultation <i class="fas fa-arrow-right"></i></a>
                <a href="tel:+14245427170" class="sp-btn sp-btn--outline">Call +1 424-542-7170 <i class="fas fa-phone"></i></a>
            </div>
        </div>
    </div>
</section>

</div>

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
