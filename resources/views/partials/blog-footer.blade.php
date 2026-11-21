@php
    $currentRoute = \Illuminate\Support\Facades\Route::currentRouteName();
    $allPosts = collect(config('blog.posts', []))->filter(fn ($p) => \Illuminate\Support\Facades\Route::has($p['route']));
    $current = $allPosts->firstWhere('route', $currentRoute);
    $topic = $current['topic'] ?? 'va';
    $others = $allPosts->reject(fn ($p) => $p['route'] === $currentRoute);
    // Same-topic posts first; real estate guides are the next-best fallback because they match the core services.
    $related = $others->where('topic', $topic)
        ->merge($others->where('topic', 're')->where('topic', '!=', $topic))
        ->merge($others)
        ->unique('route')->take(3);
    $services = [
        're'  => [['Real Estate Virtual Assistant', 'service.real_estate_virtual_assistant'], ['Real Estate Cold Calling', 'service.cold_calling'], ['Transaction Coordinator', 'service.real_estate_transaction_coordinator'], ['Real Estate ISA Services', 'service.real_estate_isa']],
        'va'  => [['Virtual Business Assistant', 'service.virtual_business_assistance'], ['Personal Assistant', 'service.personal_assistance'], ['Real Estate Virtual Assistant', 'service.real_estate_virtual_assistant'], ['Bookkeeping', 'service.bookkeeping_accountant']],
        'crm' => [['CRM Management', 'service.crm_management'], ['Lead Generation', 'service.lead_generation'], ['Real Estate Virtual Assistant', 'service.real_estate_virtual_assistant']],
        'mk'  => [['Real Estate SEO', 'service.search_seo'], ['Digital Marketing', 'service.digital_marketing'], ['Web Development', 'service.web_development'], ['Lead Generation', 'service.lead_generation']],
    ][$topic] ?? [];
    $services = array_values(array_filter($services, fn ($s) => \Illuminate\Support\Facades\Route::has($s[1])));
@endphp
<section class="blog-after">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">

                <div class="blog-author-box">
                    <img src="{{ asset('assets/images/fav.png') }}" alt="Zingo Assist" width="56" height="56" loading="lazy">
                    <div>
                        <p class="blog-author-name">Written by the Zingo Assist Editorial Team</p>
                        <p class="blog-author-bio">Our editors run Zingo Assist's virtual assistant, cold calling, transaction coordination and marketing services for US businesses and real estate professionals from our St. Petersburg, Florida office. Every guide is fact-checked before it is published. <a href="{{ route('editorial') }}">Read our editorial policy</a> or learn more <a href="{{ route('about') }}">about us</a>.</p>
                    </div>
                </div>

                <div class="blog-cta-box">
                    <div>
                        <p class="blog-cta-title">Get a trained virtual assistant, free for 2 days</p>
                        <p class="blog-cta-text">Tell us what is slowing you down and we will match you with an assistant who can start in 24 to 48 hours.</p>
                    </div>
                    <div class="blog-cta-actions">
                        <a href="{{ route('contact') }}" class="blog-cta-btn">Book a free consultation</a>
                        <a href="tel:+14245427170" class="blog-cta-link"><i class="fas fa-phone"></i> +1 424-542-7170</a>
                    </div>
                </div>

                <div class="gps-post">
                    <p class="gps-post-text"><strong>Found this useful?</strong> Add Zingo Assist as a preferred source on Google to see more of our real estate guides in your search results.</p>
                    @include('partials.google-preferred-source', ['where' => 'post'])
                </div>

                @if (count($services))
                <div class="blog-related-services">
                    <h2 class="blog-after-title">Related services</h2>
                    <div class="sp-links" style="justify-content: flex-start;">
                        @foreach ($services as $s)
                            <a class="sp-link-chip" href="{{ route($s[1]) }}">{{ $s[0] }} <i class="fas fa-arrow-right"></i></a>
                        @endforeach
                    </div>
                </div>
                @endif

                @if ($related->count())
                <div class="blog-related">
                    <h2 class="blog-after-title">Related articles</h2>
                    <div class="row g-4">
                        @foreach ($related as $p)
                        <div class="col-md-4">
                            <a href="{{ route($p['route']) }}" class="blog-related-card">
                                <img src="{{ asset($p['image']) }}" alt="{{ $p['title'] }}" loading="lazy" decoding="async">
                                <span>{{ $p['title'] }}</span>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <p class="blog-related-all"><a href="{{ route('blog') }}">See all articles <i class="fas fa-arrow-right"></i></a></p>
                </div>
                @endif

            </div>
        </div>
    </div>
</section>
