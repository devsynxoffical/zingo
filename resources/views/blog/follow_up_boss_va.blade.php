@php
    $faqs = [
        ['Can a virtual assistant work inside Follow Up Boss?', 'Yes. Give the assistant their own Follow Up Boss user with the permissions you choose instead of sharing your login. They can then log calls, update stages and tags, work smart lists, manage action plans and keep deals current, and every action is tracked under their name.'],
        ['What should a VA do in Follow Up Boss every day?', 'Work the new-lead and follow-up smart lists first, log every call and text, update stages and tags, clear overdue tasks, and send the agent a short daily summary of appointments and hot leads.'],
        ['Should my VA call leads from Follow Up Boss?', 'Many teams have the assistant make speed-to-lead and nurture calls from inside Follow Up Boss so every call is logged automatically. Use approved scripts, follow Do Not Call and calling-hour rules, and keep price and contract conversations with the licensed agent.'],
        ['How long does it take a VA to learn Follow Up Boss?', 'An assistant who already knows Follow Up Boss can be productive in the first few days. Most of the ramp-up is learning your stages, tags, smart lists and scripts, which is why a written CRM playbook matters more than software training.'],
    ];
@endphp
@extends('layout.main')

@section('og_type', 'article')
@section('og_image', asset('assets/images/blog/Report Preparations and Presentations.jpg'))
@section('title', 'How Top Teams Use a Virtual Assistant in Follow Up Boss')
@section('meta_description', 'How real estate teams set up a virtual assistant in Follow Up Boss: user access, daily smart lists, stages and tags, action plans, deals and reports.')

@push('schema')
    @include('partials.schema-page', [
        'type' => 'article',
        'name' => 'How Top Teams Use a Virtual Assistant in Follow Up Boss',
        'description' => 'A practical playbook for running a real estate virtual assistant inside Follow Up Boss: access, smart lists, stages, action plans, deals and reporting.',
        'breadcrumbs' => [['Blog', route('blog')]],
        'datePublished' => '2026-11-20',
        'image' => asset('assets/images/blog/Report Preparations and Presentations.jpg'),
        'faqs' => array_map(fn ($f) => [$f[0], html_entity_decode($f[1], ENT_QUOTES)], $faqs),
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
                                        <li class="breadcrumb-item active" aria-current="page">VA in Follow Up Boss</li>
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
                            <img src="{{ asset('assets/images/blog/Report Preparations and Presentations.jpg') }}" alt="Virtual assistant reviewing Follow Up Boss pipeline reports for a real estate team" fetchpriority="high" decoding="async">
                        </div>
                        <div class="blog-content">
                            <div class="blog-post-meta">
                                <span class="user">By : <a href="{{ route('editorial') }}">Zingo Assist Editorial Team</a></span>
                                <span class="category two">November 20, 2026</span>
                            </div>
                            <h1 class="title">How Top Teams Use a Virtual Assistant in Follow Up Boss</h1>

                            <div class="guide-summary">
                                <h2>Quick answer</h2>
                                <p>The teams that get the most from a <strong>virtual assistant in Follow Up Boss</strong> give the VA their own user, a written CRM playbook and a fixed daily routine: work the <strong>new-lead and follow-up smart lists</strong>, log every call and text, keep <strong>stages and tags</strong> clean, manage <strong>action plans</strong>, update <strong>deals</strong>, and send the agent a short daily report. The agent spends their time on appointments, not on data entry.</p>
                            </div>

                            <p>Follow Up Boss is only as good as the data inside it. When agents are busy, calls go unlogged, leads sit in the wrong stage and smart lists fill up with people nobody has called. A <a href="{{ route('service.real_estate_virtual_assistant') }}">real estate virtual assistant</a> fixes that by owning the CRM every day. Here is how to set it up.</p>

                            <h2>1. Set up access the right way</h2>
                            <ul class="guide-list">
                                <li><strong>Give the VA their own user.</strong> Never share your personal login. A separate user means every call, note and change is tracked under the assistant&#39;s name, and you can remove access in one click.</li>
                                <li><strong>Choose permissions on purpose.</strong> Decide which leads the assistant can see (all leads, a pond, or only assigned leads) and whether they can export data.</li>
                                <li><strong>Connect calling and texting</strong> so the assistant works from inside Follow Up Boss and every conversation is logged automatically.</li>
                                <li><strong>Sign a confidentiality agreement</strong> and use role-based access for the rest of your tools too.</li>
                            </ul>

                            <h2>2. Write a one-page CRM playbook</h2>
                            <p>Most VA problems in a CRM are really definition problems. Before day one, write down:</p>
                            <ul class="guide-list">
                                <li><strong>Stages:</strong> what "Lead", "Attempted contact", "Spoke with", "Appointment set", "Active client", "Nurture" and "Closed" mean on your team, and who moves people between them.</li>
                                <li><strong>Tags:</strong> a short, fixed list (for example: buyer, seller, timeline 0–3 months, pre-approved, expired, FSBO). No free-form tags.</li>
                                <li><strong>Notes format:</strong> motivation, timeline, price range, next step. Every call ends with a next follow-up date.</li>
                                <li><strong>Hand-off rule:</strong> what makes a lead "hot" and how the assistant alerts the agent (call, text or a Follow Up Boss task).</li>
                            </ul>

                            <h2>3. The daily smart lists your VA works</h2>
                            <p>Smart lists turn the CRM into a to-do list. These are examples of filters teams commonly build for an assistant; set them up with your own stages and tags:</p>
                            <div class="guide-table-wrap">
                                <table class="guide-table">
                                    <thead><tr><th>Smart list</th><th>Filter idea</th><th>What the VA does</th></tr></thead>
                                    <tbody>
                                        <tr><td>New leads</td><td>Stage = Lead, not yet contacted</td><td>Call and text first, every morning and as leads arrive</td></tr>
                                        <tr><td>Attempted, no contact</td><td>Stage = Attempted, last attempt 2+ days ago</td><td>Next call or text in the sequence</td></tr>
                                        <tr><td>Hot, going cold</td><td>Timeline 0–3 months, no contact in 7 days</td><td>Call, then alert the agent</td></tr>
                                        <tr><td>Nurture due</td><td>Stage = Nurture, no contact in 30 days</td><td>Check-in call or market update</td></tr>
                                        <tr><td>Past clients</td><td>Stage = Closed, no contact in 90 days</td><td>Check-in, review or referral ask</td></tr>
                                    </tbody>
                                </table>
                            </div>

                            <h2>4. Manage action plans, don&#39;t just start them</h2>
                            <p>Action plans send emails and texts and create tasks on a schedule. Your assistant should apply the right plan when a lead changes stage, pause plans when someone replies or books an appointment, and review plans monthly for messages that get no response. Automation without a human watching it is how leads get three generic emails after they already met the agent.</p>

                            <h2>5. Keep deals current</h2>
                            <p>If you track pipeline in Follow Up Boss deals, the assistant updates each deal when something changes: offer accepted, inspection, appraisal, clear to close, closed. This is the hand-off point to your <a href="{{ route('service.real_estate_transaction_coordinator') }}">transaction coordinator</a>, and it keeps your forecast honest.</p>

                            <h2>6. Who does what</h2>
                            <div class="guide-table-wrap">
                                <table class="guide-table">
                                    <thead><tr><th>Virtual assistant</th><th>Agent</th></tr></thead>
                                    <tbody>
                                        <tr><td>Speed-to-lead calls and texts with approved scripts</td><td>Consultations, pricing and strategy</td></tr>
                                        <tr><td>Logging calls, notes, stages and tags</td><td>Showings and listing appointments</td></tr>
                                        <tr><td>Smart lists, action plans and task clean-up</td><td>Negotiation and contract advice</td></tr>
                                        <tr><td>Deal updates and daily/weekly reports</td><td>Deciding which leads get priority</td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <p>If your assistant makes calls, follow Do Not Call and calling-hour rules and keep value and contract questions with a licensee. Our <a href="{{ route('blog.isa_scripts_expired_fsbo') }}">ISA scripts for expired and FSBO leads</a> show where that line sits.</p>

                            <h2>7. Report every day and every week</h2>
                            <ul class="guide-list">
                                <li><strong>Daily (5 lines):</strong> new leads contacted, conversations, appointments set, hot leads for the agent, anything blocked.</li>
                                <li><strong>Weekly:</strong> appointments by lead source, stale leads cleaned up, action plans changed, and the smart list counts going down (or not).</li>
                            </ul>

                            <h2>A 30-day rollout</h2>
                            <ol class="guide-list" style="padding-left:20px;">
                                <li style="list-style:decimal;"><strong>Week 1:</strong> user access, playbook, clean up stages and tags on active leads.</li>
                                <li style="list-style:decimal;"><strong>Week 2:</strong> build the smart lists; the VA works new leads and attempted lists daily.</li>
                                <li style="list-style:decimal;"><strong>Week 3:</strong> add nurture and past-client lists; review action plans.</li>
                                <li style="list-style:decimal;"><strong>Week 4:</strong> deals and reporting; agree the weekly review.</li>
                            </ol>

                            <h2>Mistakes to avoid</h2>
                            <ul class="guide-list">
                                <li>Sharing the owner login instead of creating a user.</li>
                                <li>Letting everyone invent tags and stages.</li>
                                <li>Starting action plans and never pausing them.</li>
                                <li>Measuring the assistant on dials instead of appointments set and kept.</li>
                            </ul>

                            <div class="guide-cta">
                                <p><strong>Want a VA who already knows Follow Up Boss?</strong> Our real estate assistants work inside your CRM from day one, follow your playbook and report every day. Try one free for two days.</p>
                                <a class="btn-guide" href="{{ route('service.real_estate_isa') }}">See ISA &amp; CRM support</a>
                            </div>

                            <h2>Frequently asked questions</h2>
                            @foreach ($faqs as $f)
                                <h3>{{ $f[0] }}</h3>
                                <p>{{ $f[1] }}</p>
                            @endforeach

                            <p class="guide-note">Follow Up Boss is a trademark of its owner; Zingo Assist is not affiliated with it. Feature names change over time, so check <a href="https://www.followupboss.com/" target="_blank" rel="noopener">Follow Up Boss</a> for current options. Last reviewed November 20, 2026.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.blog-footer')
@endsection
