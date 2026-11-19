@php
    $faqs = [
        ['How do you calculate the ROI of a real estate virtual assistant?', 'Add up the assistant\'s monthly cost (hours per week × hourly rate × 4.33), then estimate the extra income from the time you get back: hours freed per week × the share you reinvest in prospecting and clients × 52, divided by the hours one closing takes you, multiplied by your average commission. ROI is the extra income minus the assistant\'s cost, divided by the cost.'],
        ['How many extra closings does a virtual assistant need to pay for itself?', 'Divide the assistant\'s annual cost by your average commission. For example, a part-time assistant at 20 hours a week and $12 per hour costs about $12,500 a year; with an $8,000 average commission that is about 1.6 extra closings a year to break even.'],
        ['What hourly rate should I use?', 'Typical market ranges are about $8–15 per hour for offshore assistants through a managed agency and $25–45 per hour for US-based assistants. Use your actual quote if you have one; our cost guide explains the ranges.'],
        ['Is this calculator a quote?', 'No. It is an estimate based on the numbers you enter. Zingo Assist quotes after a free consultation based on your hours and tasks.'],
    ];
@endphp
@extends('layout.main')

@section('title', 'Real Estate Virtual Assistant ROI & Cost Calculator')
@section('meta_description', 'Free calculator: estimate what a real estate virtual assistant costs per month, how many hours it frees and how many extra closings it takes to pay for itself.')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/service-page.css') }}">
<style>
    .calc-wrap { background: #fff; border-radius: 22px; box-shadow: 0 20px 60px rgba(31,18,53,.10); overflow: hidden; }
    .calc-inputs { padding: 32px; }
    .calc-results { padding: 32px; background: linear-gradient(160deg, #2a1236, #6b1a4c 60%, #A52673); color: #fff; height: 100%; }
    .calc-group { margin-bottom: 22px; }
    .calc-group label { display: flex; justify-content: space-between; font-weight: 600; color: #1f1235; font-size: 15px; margin-bottom: 8px; }
    .calc-group label output { color: #A52673; font-weight: 700; }
    .calc-group input[type=range] { width: 100%; accent-color: #A52673; }
    .calc-help { font-size: 13px; color: #77778a; margin-top: 4px; }
    .rate-presets { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 10px; }
    .rate-preset { border: 1px solid #ead3e1; background: #fff; border-radius: 20px; padding: 7px 14px; font-size: 13px; font-weight: 600; color: #5a3a4f; cursor: pointer; }
    .rate-preset.is-active, .rate-preset:hover { background: #A52673; color: #fff; border-color: #A52673; }
    .calc-num { width: 100%; border: 1px solid #ddd3dc; border-radius: 10px; padding: 10px 12px; font-size: 16px; }
    .res-title { color: #fff; font-size: 20px; margin-bottom: 18px; }
    .res-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
    .res-card { background: rgba(255,255,255,.1); border: 1px solid rgba(255,255,255,.18); border-radius: 14px; padding: 14px; }
    .res-card span { display: block; font-size: 12px; text-transform: uppercase; letter-spacing: .05em; color: rgba(255,255,255,.75); }
    .res-card strong { display: block; font-size: 26px; line-height: 1.2; margin-top: 4px; color: #fff; }
    .res-card.big { grid-column: span 2; background: #fff; }
    .res-card.big span { color: #7a5470; }
    .res-card.big strong { color: #A52673; font-size: 34px; }
    .res-bars { margin: 20px 0 6px; }
    .res-bar { margin-bottom: 10px; font-size: 13px; color: rgba(255,255,255,.85); }
    .res-bar div { height: 12px; border-radius: 8px; margin-top: 5px; transition: width .4s ease; min-width: 4px; }
    .res-bar .cost { background: #ffb4c8; }
    .res-bar .gain { background: #ffd166; }
    .res-note { font-size: 12px; color: rgba(255,255,255,.7); margin-top: 12px; }
    .res-cta { display: inline-block; margin-top: 14px; background: #fff; color: #A52673 !important; font-weight: 700; padding: 12px 22px; border-radius: 25px; text-decoration: none; }
    .formula { background: #fbf6f9; border: 1px solid #ead3e1; border-radius: 12px; padding: 18px 22px; font-size: 15px; line-height: 1.9; color: #3a3a48; }
    @media (max-width: 575px) { .calc-inputs, .calc-results { padding: 22px; } .res-card strong { font-size: 22px; } .res-card.big strong { font-size: 28px; } }
</style>
@endpush

@push('schema')
    @include('partials.schema-page', [
        'type' => 'page',
        'name' => 'Real Estate Virtual Assistant ROI & Cost Calculator',
        'description' => 'Estimate the monthly cost, hours freed, break-even closings and return on investment of a real estate virtual assistant.',
        'breadcrumbs' => [['Real Estate Virtual Assistant', route('service.real_estate_virtual_assistant')]],
        'faqs' => array_map(fn ($f) => [$f[0], $f[1]], $faqs),
    ])
@endpush

@section('content')
<div class="sp-page">

<section class="sp-hero">
    <div class="sp-hero-decor sp-hero-decor--1"></div>
    <div class="sp-hero-decor sp-hero-decor--2"></div>
    <div class="container">
        <div class="sp-hero-inner">
            <span class="lp-eyebrow">Free tool</span>
            <h1 class="sp-hero-title">Real Estate Virtual Assistant <span class="sp-hero-title-highlight">ROI Calculator</span></h1>
            <p class="sp-hero-desc">See what a virtual assistant would cost you, how many hours you get back and how many extra closings it takes to pay for itself. Move the sliders to match your business.</p>
            <div class="sp-hero-actions">
                <a href="#calculator" class="sp-btn sp-btn--white">Calculate My ROI <i class="fas fa-calculator"></i></a>
                <a href="#lead-calc" class="sp-btn sp-btn--outline">Get an Exact Quote <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="sp-section" id="calculator">
    <div class="container">
        <div class="calc-wrap" data-aos="fade-up">
            <div class="row g-0">
                <div class="col-lg-7">
                    <div class="calc-inputs">
                        <div class="calc-group">
                            <label for="c-hours">Assistant hours per week <output id="o-hours">20</output></label>
                            <input type="range" id="c-hours" min="5" max="40" step="5" value="20">
                            <p class="calc-help">Part-time is usually 10–20 hours; full-time is 40.</p>
                        </div>
                        <div class="calc-group">
                            <label>Assistant hourly rate <output id="o-rate">$12</output></label>
                            <div class="rate-presets">
                                <button type="button" class="rate-preset" data-rate="9">Offshore entry · $9</button>
                                <button type="button" class="rate-preset is-active" data-rate="12">Offshore managed · $12</button>
                                <button type="button" class="rate-preset" data-rate="15">Offshore senior · $15</button>
                                <button type="button" class="rate-preset" data-rate="32">US-based · $32</button>
                            </div>
                            <input type="range" id="c-rate" min="6" max="50" step="1" value="12" aria-label="Assistant hourly rate">
                            <p class="calc-help">Typical market ranges, not a Zingo Assist quote. See the <a href="{{ route('blog.re_va_cost') }}">cost guide</a>.</p>
                        </div>
                        <div class="calc-group">
                            <label for="c-freed">Hours of YOUR time freed per week <output id="o-freed">15</output></label>
                            <input type="range" id="c-freed" min="2" max="40" step="1" value="15">
                            <p class="calc-help">Admin, CRM updates, follow-up calls and listing paperwork you would hand off.</p>
                        </div>
                        <div class="calc-group">
                            <label for="c-reinvest">Share of freed time you reinvest in prospecting and clients <output id="o-reinvest">30%</output></label>
                            <input type="range" id="c-reinvest" min="10" max="100" step="5" value="30">
                        </div>
                        <div class="row g-3">
                            <div class="col-sm-6 calc-group">
                                <label for="c-gci">Average commission per closing</label>
                                <input type="number" class="calc-num" id="c-gci" min="500" step="250" value="8000">
                            </div>
                            <div class="col-sm-6 calc-group">
                                <label for="c-hpc">Your hours per closing</label>
                                <input type="number" class="calc-num" id="c-hpc" min="5" step="1" value="60">
                                <p class="calc-help">Prospecting, appointments and service time one closing takes you.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="calc-results" aria-live="polite">
                        <p class="res-title"><strong>Your estimate</strong></p>
                        <div class="res-grid">
                            <div class="res-card"><span>Assistant cost / month</span><strong id="r-cost">$0</strong></div>
                            <div class="res-card"><span>Your hours freed / month</span><strong id="r-hours">0</strong></div>
                            <div class="res-card"><span>Break-even closings / year</span><strong id="r-break">0</strong></div>
                            <div class="res-card"><span>Extra closings / year</span><strong id="r-extra">0</strong></div>
                            <div class="res-card big"><span>Estimated net return / year</span><strong id="r-net">$0</strong></div>
                        </div>
                        <div class="res-bars">
                            <div class="res-bar">Assistant cost / year: <b id="r-cost-y">$0</b><div class="cost" id="b-cost"></div></div>
                            <div class="res-bar">Added commission / year: <b id="r-gain-y">$0</b><div class="gain" id="b-gain"></div></div>
                        </div>
                        <p class="res-note">ROI: <b id="r-roi">0%</b>. Estimates only; results depend on how you use the time you get back.</p>
                        <a href="#lead-calc" class="res-cta" id="r-cta">Get an exact quote for this plan <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sp-section sp-section--gray">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="sp-about-label">How it works</span>
                <h2 class="sp-about-title">The Math Behind the Calculator</h2>
                <div class="formula">
                    <b>Monthly cost</b> = hours per week × hourly rate × 4.33<br>
                    <b>Hours freed per month</b> = your hours freed per week × 4.33<br>
                    <b>Extra closings per year</b> = hours freed per week × reinvested share × 52 ÷ your hours per closing<br>
                    <b>Added commission</b> = extra closings × average commission<br>
                    <b>Break-even closings</b> = annual assistant cost ÷ average commission<br>
                    <b>ROI</b> = (added commission − annual cost) ÷ annual cost
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <span class="sp-about-label">Benchmarks</span>
                <h2 class="sp-about-title">Typical Rates to Plug In</h2>
                <div class="sp-table-wrap">
                    <table class="sp-table">
                        <thead><tr><th>Assistant type</th><th>Typical rate</th></tr></thead>
                        <tbody>
                            <tr><td>Offshore freelancer</td><td>$5 – $12 / hr</td></tr>
                            <tr><td>Managed offshore agency</td><td>$8 – $15 / hr</td></tr>
                            <tr><td>US-based virtual assistant</td><td>$25 – $45 / hr</td></tr>
                            <tr><td>Transaction coordinator</td><td>~$300 – $600 per file</td></tr>
                        </tbody>
                    </table>
                </div>
                <p class="sp-table-note">Market ranges from published pricing in 2026. Full breakdown in our <a href="{{ route('blog.re_va_cost') }}">real estate virtual assistant cost guide</a>.</p>
            </div>
        </div>
    </div>
</section>

<section class="sp-section">
    <div class="container">
        <div class="sp-section-header" data-aos="fade-up">
            <span class="sp-label">FAQ</span>
            <h2 class="sp-section-title">Real Estate VA ROI Questions</h2>
        </div>
        <div class="sp-faq-wrap">
            @foreach ($faqs as $f)
            <div class="sp-faq">
                <div class="sp-faq-header"><h3 class="sp-faq-q" style="font-size:17px;">{{ $f[0] }}</h3><span class="sp-faq-toggle"><i class="fas fa-plus"></i></span></div>
                <div class="sp-faq-body"><div class="sp-faq-body-inner">{{ $f[1] }}</div></div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="sp-section lp-final" id="lead-calc">
    <div class="container">
        <div class="lp-final-box">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 class="lp-final-title">Turn the Estimate Into a Real Plan</h2>
                    <p class="lp-final-text">Send us your numbers and we will recommend the right hours and role, then let you try a trained real estate assistant free for two days.</p>
                    <ul class="lp-final-list">
                        <li><i class="fas fa-check-circle"></i> Exact quote for your tasks</li>
                        <li><i class="fas fa-check-circle"></i> Free 2-day trial</li>
                        <li><i class="fas fa-check-circle"></i> Start in 24–48 hours</li>
                        <li><i class="fas fa-check-circle"></i> No long-term contract required</li>
                    </ul>
                    <div class="sp-links" style="justify-content:flex-start;margin-top:18px;">
                        <a class="sp-link-chip" href="{{ route('service.real_estate_virtual_assistant') }}">Real Estate VA</a>
                        <a class="sp-link-chip" href="{{ route('service.real_estate_isa') }}">ISA Services</a>
                        <a class="sp-link-chip" href="{{ route('service.listing_coordinator') }}">Listing Coordinator</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    @include('partials.lead-form', ['formId' => 'lead-calc-form', 'service' => 'Real Estate Virtual Assistant', 'title' => 'Get an exact quote', 'subtitle' => 'Your calculator inputs are added to the message automatically.', 'button' => 'Send My Quote Request'])
                </div>
            </div>
        </div>
    </div>
</section>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var $ = function (id) { return document.getElementById(id); };
    var money = function (n) { return '$' + Math.round(n).toLocaleString('en-US'); };
    var rate = $('c-rate');
    document.querySelectorAll('.rate-preset').forEach(function (b) {
        b.addEventListener('click', function () {
            document.querySelectorAll('.rate-preset').forEach(function (x) { x.classList.remove('is-active'); });
            b.classList.add('is-active'); rate.value = b.dataset.rate; calc();
        });
    });
    rate.addEventListener('input', function () { document.querySelectorAll('.rate-preset').forEach(function (x) { x.classList.toggle('is-active', x.dataset.rate === rate.value); }); });
    var tracked = false;
    function calc() {
        var h = +$('c-hours').value, r = +rate.value, f = +$('c-freed').value, re = +$('c-reinvest').value / 100;
        var gci = Math.max(+$('c-gci').value || 0, 0), hpc = Math.max(+$('c-hpc').value || 1, 1);
        $('o-hours').textContent = h; $('o-rate').textContent = '$' + r; $('o-freed').textContent = f; $('o-reinvest').textContent = Math.round(re * 100) + '%';
        var costM = h * r * 4.33, costY = costM * 12, hoursM = f * 4.33;
        var extra = f * re * 52 / hpc, gain = extra * gci, net = gain - costY;
        var breakEven = gci ? costY / gci : 0, roi = costY ? (net / costY) * 100 : 0;
        $('r-cost').textContent = money(costM); $('r-hours').textContent = Math.round(hoursM);
        $('r-break').textContent = breakEven.toFixed(1); $('r-extra').textContent = extra.toFixed(1);
        $('r-net').textContent = (net < 0 ? '-' : '') + money(Math.abs(net)); $('r-roi').textContent = Math.round(roi) + '%';
        $('r-cost-y').textContent = money(costY); $('r-gain-y').textContent = money(gain);
        var max = Math.max(costY, gain, 1);
        $('b-cost').style.width = (costY / max * 100) + '%'; $('b-gain').style.width = (gain / max * 100) + '%';
        var msg = document.querySelector('#lead-calc-form textarea[name="message"]');
        if (msg && !msg.dataset.edited) {
            msg.value = 'ROI calculator: ' + h + ' hrs/week at $' + r + '/hr (~' + money(costM) + '/month). I want to free ~' + f + ' hrs/week. Avg commission ' + money(gci) + '.';
        }
    }
    var msgBox = document.querySelector('#lead-calc-form textarea[name="message"]');
    if (msgBox) msgBox.addEventListener('input', function () { msgBox.dataset.edited = '1'; });
    ['c-hours', 'c-rate', 'c-freed', 'c-reinvest', 'c-gci', 'c-hpc'].forEach(function (id) {
        $(id).addEventListener('input', function () { calc(); if (!tracked) { tracked = true; window.zingoTrack && window.zingoTrack('calculator_use', { tool: 'va_roi' }); } });
    });
    $('r-cta').addEventListener('click', function () { window.zingoTrack && window.zingoTrack('cta_click', { cta: 'calculator_quote' }); });
    document.querySelectorAll('.sp-faq-header').forEach(function (hd) {
        hd.addEventListener('click', function () {
            var faq = hd.closest('.sp-faq'), body = faq.querySelector('.sp-faq-body'), open = faq.classList.contains('active');
            document.querySelectorAll('.sp-faq').forEach(function (it) { it.classList.remove('active'); it.querySelector('.sp-faq-body').style.maxHeight = null; });
            if (!open) { faq.classList.add('active'); body.style.maxHeight = body.scrollHeight + 'px'; }
        });
    });
    calc();
});
</script>
@endsection
