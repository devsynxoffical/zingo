{{-- Final CTA with inline lead form. Params: $final [title,text,list], $formService --}}
<section class="sp-section lp-final" id="lead-final">
    <div class="container">
        <div class="lp-final-box">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="lp-final-title">{{ $final['title'] }}</h2>
                    <p class="lp-final-text">{!! $final['text'] !!}</p>
                    @if (!empty($final['list']))
                    <ul class="lp-final-list">
                        @foreach ($final['list'] as $li)<li><i class="fas fa-check-circle"></i> {{ $li }}</li>@endforeach
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
                    @include('partials.lead-form', ['formId' => 'lead-final-form', 'service' => $formService ?? 'Real Estate Virtual Assistant', 'title' => 'Get a free consultation', 'subtitle' => 'Tell us what is slowing you down. We reply within 24 hours.', 'button' => 'Book My Free Consultation'])
                </div>
            </div>
        </div>
    </div>
</section>
