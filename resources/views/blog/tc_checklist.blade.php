@php
    $tcData = json_decode(file_get_contents(resource_path('data/tc-checklist.json')), true);
    $phases = array_map(fn ($g) => [$g['id'], $g['icon'], $g['name'], $g['items']], $tcData['groups']);
    $pdf = 'assets/downloads/transaction-coordinator-checklist-template.pdf';
    $total = array_sum(array_map(fn ($p) => count($p[3]), $phases));
    $faqs = [
        ['What does a transaction coordinator checklist include?', 'A transaction coordinator checklist covers every step from accepted contract to closing: opening the file, calendaring contract deadlines, earnest money, inspections, financing and appraisal, title and HOA, the final walk-through, closing and the broker compliance file.'],
        ['Who sets the deadlines a transaction coordinator tracks?', 'The purchase contract does. Inspection, financing, appraisal and closing dates come from the contract and its addenda, and they differ by state form and by deal, so the coordinator builds the calendar from each executed contract rather than from a template.'],
        ['Can a virtual transaction coordinator handle this checklist remotely?', 'Yes. Almost every step is done by email, phone and the transaction platform. The licensed agent stays responsible for advice, negotiation and anything the state or brokerage reserves for licensees.'],
        ['How many files can one transaction coordinator manage?', 'It depends on the market and how much the coordinator also does for listings and clients. Track the number of open files and missed deadlines, and add help before deadlines start to slip.'],
    ];
@endphp
@extends('layout.main')

@section('og_type', 'article')
@section('og_image', asset('assets/images/blog/Need Help with specific Business Operations.jpg'))
@section('title', 'Transaction Coordinator Checklist & Template (Free PDF)')
@section('meta_description', 'Free transaction coordinator checklist and contract-to-close template: 34 steps from accepted contract to closing, interactive online or as a printable PDF.')

@push('schema')
    @include('partials.schema-page', [
        'type' => 'article',
        'name' => 'Transaction Coordinator Checklist: Contract to Close',
        'description' => 'An interactive contract-to-close checklist for real estate transaction coordinators, from opening the file to the broker compliance file.',
        'breadcrumbs' => [['Blog', route('blog')]],
        'datePublished' => '2026-11-20',
        'image' => asset('assets/images/blog/Need Help with specific Business Operations.jpg'),
        'faqs' => $faqs,
    ])
@endpush

@section('content')
    <section class="banner-section two inner">
        <div class="container">
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-xl-12 mb-30">
                    <div class="banner-content two">
                        <div class="banner-content-header">
                            <h2 class="title">Blog</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">TC Checklist</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section ptb-120">
        <div class="container">
            <div class="row justify-content-center mb-60-none">
                <div class="col-xl-8 col-lg-10 mb-60">
                    <div class="blog-item details">
                        <div class="blog-thumb">
                            <img src="{{ asset('assets/images/blog/Need Help with specific Business Operations.jpg') }}" alt="Transaction coordinator working through a contract-to-close checklist" fetchpriority="high" decoding="async">
                        </div>
                        <div class="blog-content">
                            <div class="blog-post-meta">
                                <span class="user">By : <a href="{{ route('editorial') }}">Zingo Assist Editorial Team</a></span>
                                <span class="category two">November 20, 2026</span>
                            </div>
                            <h1 class="title">Transaction Coordinator Checklist: Contract to Close</h1>

                            <div class="guide-summary">
                                <h2>Quick answer</h2>
                                <p>A <strong>transaction coordinator checklist</strong> turns every deal into the same {{ $total }} steps across six stages: <strong>contract accepted, inspection period, financing and appraisal, title and HOA, final week, and closing</strong>. The coordinator builds the deadline calendar from the executed contract, keeps every party updated and makes sure the file is complete for the broker.</p>
                            </div>

                            <p>Most deals that go wrong do not fall apart over price. They slip on a missed inspection deadline, an appraisal nobody chased or a wire sent to the wrong account. A checklist removes memory from the process. Use the one below for every file; tick the boxes as you go and your progress is saved in this browser.</p>

                            <div class="ck-download">
                                <div>
                                    <p class="ck-download-title"><i class="fas fa-file-pdf"></i> Free contract-to-close template</p>
                                    <p class="ck-download-text">All {{ $total }} steps on a printable PDF with checkboxes. Use one copy per file.</p>
                                </div>
                                <a class="ck-download-btn" href="{{ asset($pdf) }}" download data-track="tc_checklist_download"><i class="fas fa-download"></i> Download the template</a>
                            </div>

                            <div class="ck-progress" aria-live="polite"><span class="ck-progress-bar"><span id="ckBar"></span></span><span id="ckCount">0 of {{ $total }} done</span></div>

                            @foreach ($phases as $n => $p)
                                <h2 id="{{ $p[0] }}"><i class="fas {{ $p[1] }} ck-h-icon"></i> {{ $n + 1 }}. {{ $p[2] }}</h2>
                                <ul class="ck-list">
                                    @foreach ($p[3] as $i => $it)
                                        <li><label><input type="checkbox" class="ck-box" data-key="{{ $p[0] }}-{{ $i }}"><span>{{ $it }}</span></label></li>
                                    @endforeach
                                </ul>
                                @if ($p[0] === 'contract')
                                    <p><strong>Tip:</strong> put every contract date in a shared calendar with a reminder two business days before it, and write "Day 0" (the effective date) at the top of the file. Deadlines differ by state form and by deal, so never copy them from the last file.</p>
                                @elseif ($p[0] === 'final')
                                    <p>Wire fraud is one of the costliest risks in a closing. Tell clients in writing, early and again in the final week, that wiring instructions are never changed by email, and to confirm them by phone using a number they already know.</p>
                                @endif
                            @endforeach

                            <h2>Weekly status update template</h2>
                            <div class="guide-summary">
                                <p>"Hi [Client], here&#39;s where we are on [Address]: <strong>Done:</strong> inspection completed, repair amendment signed. <strong>Next:</strong> appraisal is scheduled for [date]; loan approval is due [date]. <strong>Your to-do:</strong> send proof of insurance to your lender. Closing is still set for [date]. Questions? Just reply."</p>
                            </div>
                            <p>Clients who hear from the coordinator every week rarely call the agent asking "what&#39;s happening?". That is most of the value of a coordinator.</p>

                            <h2>What the coordinator does vs the agent</h2>
                            <div class="guide-table-wrap">
                                <table class="guide-table">
                                    <thead><tr><th>Transaction coordinator</th><th>Licensed agent</th></tr></thead>
                                    <tbody>
                                        <tr><td>Calendars deadlines and sends reminders</td><td>Decides whether to extend or terminate</td></tr>
                                        <tr><td>Schedules inspections and shares reports</td><td>Advises on repairs and negotiates them</td></tr>
                                        <tr><td>Prepares amendments for review</td><td>Approves and sends amendments</td></tr>
                                        <tr><td>Chases documents, signatures and status</td><td>Explains contract terms to clients</td></tr>
                                        <tr><td>Completes the compliance file</td><td>Signs off as the responsible licensee</td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <p>What an unlicensed coordinator may do varies by state; see <a href="{{ route('blog.unlicensed_assistant_florida') }}">what an unlicensed real estate assistant can do in Florida</a> and check your brokerage policy.</p>

                            <h2>Tools that make the checklist easier</h2>
                            <ul class="guide-list">
                                <li><strong>Transaction platform</strong> (dotloop, SkySlope, Lone Wolf Transactions): documents, signatures and the broker checklist.</li>
                                <li><strong>Shared calendar</strong>: every contract deadline with two reminders.</li>
                                <li><strong>CRM</strong> (Follow Up Boss, kvCORE): deal stage and client notes. See <a href="{{ route('blog.follow_up_boss_va') }}">how teams run a VA in Follow Up Boss</a>.</li>
                                <li><strong>Email templates</strong>: intro email, weekly update, final-week instructions.</li>
                            </ul>

                            <div class="guide-cta">
                                <p><strong>Hand this checklist to a coordinator.</strong> A Zingo Assist virtual transaction coordinator runs every step for every file and updates your clients each week. Try one free for two days.</p>
                                <a class="btn-guide" href="{{ route('service.real_estate_transaction_coordinator') }}">See virtual transaction coordinator services</a>
                            </div>

                            <h2>Frequently asked questions</h2>
                            @foreach ($faqs as $f)
                                <h3>{{ $f[0] }}</h3>
                                <p>{{ $f[1] }}</p>
                            @endforeach

                            <h2>Sources</h2>
                            <ul class="guide-list">
                                <li><a href="https://www.consumerfinance.gov/owning-a-home/closing-disclosure/" target="_blank" rel="noopener">CFPB: Closing Disclosure explainer (three-business-day rule)</a></li>
                                <li><a href="https://www.fbi.gov/how-we-can-help-you/scams-and-safety/common-frauds-and-scams/business-email-compromise" target="_blank" rel="noopener">FBI: Business email compromise and wire fraud</a></li>
                            </ul>

                            <p class="guide-note">This checklist is general guidance, not legal advice. Contract deadlines and duties depend on your state, contract form and brokerage. Last reviewed November 20, 2026.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.blog-footer')

<script>
(function () {
    var boxes = document.querySelectorAll('.ck-box'), total = boxes.length, KEY = 'za-tc-checklist', saved = {};
    try { saved = JSON.parse(localStorage.getItem(KEY) || '{}') || {}; } catch (e) {}
    function update() {
        var n = 0; boxes.forEach(function (b) { if (b.checked) n++; });
        document.getElementById('ckCount').textContent = n + ' of ' + total + ' done';
        document.getElementById('ckBar').style.width = (total ? n / total * 100 : 0) + '%';
    }
    boxes.forEach(function (b) {
        b.checked = !!saved[b.dataset.key];
        b.addEventListener('change', function () { saved[b.dataset.key] = b.checked; try { localStorage.setItem(KEY, JSON.stringify(saved)); } catch (e) {} update(); });
    });
    update();
    var dl = document.querySelector('[data-track="tc_checklist_download"]');
    if (dl) dl.addEventListener('click', function () { if (window.zingoTrack) window.zingoTrack('file_download', { file_name: 'transaction-coordinator-checklist-template.pdf' }); });
})();
</script>
@endsection
