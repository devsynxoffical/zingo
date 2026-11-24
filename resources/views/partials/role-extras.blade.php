{{--
    Shared sections for the real estate hub and role pages.
    $x = [
      'roles'   => ['label','title','desc','items' => [[icon, name, text, url, best_for]]],
      'pricing' => ['label','title','desc','plans' => [[name, hourly, monthly, best_for, featured?]], 'note'],
      'day'     => ['label','title','desc','items' => [[time, task]]],
      'tools'   => ['label','title','desc','items' => [[name, use]]],
    ]
--}}
@if (!empty($x['roles']))
<section class="sp-section">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">{{ $x['roles']['label'] }}</span>
            <h2 class="sp-section-title">{{ $x['roles']['title'] }}</h2>
            @if (!empty($x['roles']['desc']))<p class="sp-section-desc">{!! $x['roles']['desc'] !!}</p>@endif
        </div>
        <div class="row g-4">
            @foreach ($x['roles']['items'] as $i => $r)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 80 }}">
                <a class="rx-role" href="{{ $r[3] }}">
                    <span class="rx-role-icon"><i class="fas {{ $r[0] }}"></i></span>
                    <span class="rx-role-name">{{ $r[1] }}</span>
                    <span class="rx-role-text">{{ $r[2] }}</span>
                    <span class="rx-role-meta"><strong>Best for:</strong> {{ $r[4] }}</span>
                    <span class="rx-role-go">View role <i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@if (!empty($x['pricing']))
<section class="sp-section sp-section--gray" id="pricing">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">{{ $x['pricing']['label'] ?? 'Pricing' }}</span>
            <h2 class="sp-section-title">{{ $x['pricing']['title'] }}</h2>
            @if (!empty($x['pricing']['desc']))<p class="sp-section-desc">{!! $x['pricing']['desc'] !!}</p>@endif
        </div>
        <div class="rx-price-grid">
            @foreach ($x['pricing']['plans'] as $i => $p)
            <div class="rx-price {{ !empty($p[4]) ? 'rx-price--featured' : '' }}" data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">
                @if (!empty($p[4]))<span class="rx-price-badge">{{ $p[4] }}</span>@endif
                <h3 class="rx-price-name">{{ $p[0] }}</h3>
                <div class="rx-price-rate">{{ $p[1] }}</div>
                <div class="rx-price-month">{{ $p[2] }}</div>
                <p class="rx-price-best">{{ $p[3] }}</p>
            </div>
            @endforeach
        </div>
        <div class="rx-price-foot" data-aos="fade-up">
            <p>{!! $x['pricing']['note'] !!}</p>
            <p>What an unlicensed assistant may do differs by state: see <a href="{{ route('rules.hub') }}">real estate assistant rules by state</a>.</p>
            <div class="rx-price-cta">
                <a class="rx-btn" href="{{ $x['quote_href'] ?? '#lead-final' }}">Get My Exact Quote <i class="fas fa-arrow-right"></i></a>
                <a class="rx-btn rx-btn--ghost" href="{{ route('tool.va_roi_calculator') }}"><i class="fas fa-calculator"></i> Calculate My ROI</a>
            </div>
        </div>
    </div>
</section>
@endif

@if (!empty($x['day']))
<section class="sp-section">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            <div class="col-lg-5" data-aos="fade-right">
                <span class="sp-label">{{ $x['day']['label'] ?? 'A typical day' }}</span>
                <h2 class="sp-section-title" style="text-align:left;">{{ $x['day']['title'] }}</h2>
                @if (!empty($x['day']['desc']))<p class="sp-section-desc" style="text-align:left;margin-left:0;">{!! $x['day']['desc'] !!}</p>@endif
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <ol class="rx-day">
                    @foreach ($x['day']['items'] as $d)
                    <li><span class="rx-day-time">{{ $d[0] }}</span><span class="rx-day-task">{!! $d[1] !!}</span></li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</section>
@endif

@if (!empty($x['tools']))
<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">{{ $x['tools']['label'] ?? 'Tools' }}</span>
            <h2 class="sp-section-title">{{ $x['tools']['title'] }}</h2>
            @if (!empty($x['tools']['desc']))<p class="sp-section-desc">{!! $x['tools']['desc'] !!}</p>@endif
        </div>
        <div class="rx-tools">
            @foreach ($x['tools']['items'] as $i => $t)
            <div class="rx-tool" data-aos="fade-up" data-aos-delay="{{ ($i % 4) * 60 }}">
                <span class="rx-tool-name">{{ $t[0] }}</span>
                <span class="rx-tool-use">{{ $t[1] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
