{{--
    Inline lead form. Posts to the existing /api/send_email endpoint (stores the lead and
    emails sales@zingoassist.us) and fires the GA4 generate_lead event on success.
    Params: $service (preselected service label), $formId (unique id), $title, $subtitle, $button
--}}
@php
    $formId = $formId ?? 'lead-' . substr(md5(($service ?? '') . uniqid()), 0, 6);
    $services = [
        'Real Estate Virtual Assistant', 'Real Estate ISA', 'Real Estate Cold Calling', 'Expired & FSBO Calling',
        'Wholesale Cold Calling', 'Listing Coordinator', 'Transaction Coordinator', 'Virtual Property Management',
        'Virtual Business Assistant', 'Bookkeeping', 'Other',
    ];
@endphp
<div class="lead-card" id="{{ $formId }}-wrap">
    <p class="lead-card-title">{{ $title ?? 'Start your free 2-day trial' }}</p>
    <p class="lead-card-sub">{{ $subtitle ?? 'Tell us what you need. We reply within 24 hours, with no obligation.' }}</p>
    <form class="lead-form" id="{{ $formId }}" novalidate>
        <div class="lead-row">
            <label class="lead-field"><span>Name</span><input type="text" name="name" autocomplete="name" required placeholder="Your name"></label>
            <label class="lead-field"><span>Phone</span><input type="tel" name="phone" autocomplete="tel" required placeholder="+1 (___) ___-____"></label>
        </div>
        <label class="lead-field"><span>Email</span><input type="email" name="email" autocomplete="email" required placeholder="you@company.com"></label>
        <label class="lead-field"><span>Service</span>
            <select name="service" required>
                @foreach ($services as $s)
                    <option value="{{ $s }}" @selected(($service ?? '') === $s)>{{ $s }}</option>
                @endforeach
            </select>
        </label>
        <label class="lead-field"><span>What should your assistant handle?</span><textarea name="message" rows="3" required placeholder="e.g. follow up with new Zillow leads and update Follow Up Boss"></textarea></label>
        <input type="text" name="website" class="za-hp" tabindex="-1" autocomplete="off" aria-hidden="true">
        <button type="submit" class="lead-submit">{{ $button ?? 'Get My Free Trial' }} <i class="fas fa-arrow-right"></i></button>
        <p class="lead-note"><i class="fas fa-lock"></i> We never share your details. <a href="{{ route('privacy') }}">Privacy policy</a></p>
        <div class="lead-msg" role="status" aria-live="polite"></div>
    </form>
</div>
<script>
(function () {
    var form = document.getElementById(@json($formId));
    if (!form || form.dataset.bound) return; form.dataset.bound = '1';
    form.addEventListener('submit', async function (e) {
        e.preventDefault();
        var msg = form.querySelector('.lead-msg'), btn = form.querySelector('.lead-submit');
        var f = function (n) { return form.elements.namedItem(n); };
        if (f('website').value) return; // spam bot
        var data = { name: f('name').value.trim(), email: f('email').value.trim(), phone: f('phone').value.trim(), service: f('service').value, message: f('message').value.trim() };
        var missing = Object.keys(data).filter(function (k) { return !data[k]; });
        form.querySelectorAll('.lead-field').forEach(function (f) { f.classList.remove('is-error'); });
        if (missing.length || !/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(data.email)) {
            missing.forEach(function (k) { var el = f(k); if (el) el.closest('.lead-field').classList.add('is-error'); });
            if (!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(data.email)) f('email').closest('.lead-field').classList.add('is-error');
            msg.className = 'lead-msg is-error'; msg.textContent = 'Please complete the highlighted fields.'; return;
        }
        data.message = data.message + '\n\n[Page: ' + location.pathname + ']';
        btn.disabled = true; msg.className = 'lead-msg'; msg.textContent = 'Sending…';
        try {
            var res = await fetch(@json(route('api.send_email')), { method: 'POST', headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' }, body: JSON.stringify(data) });
            var out = await res.json();
            if (out.success) {
                window.zingoTrack && window.zingoTrack('generate_lead', { form_id: 'landing', service: data.service, page_path: location.pathname });
                form.innerHTML = '<div class="lead-success"><i class="fas fa-check-circle"></i><p><strong>Thank you! Your request is in.</strong><br>Our team will contact you within 24 hours to set up your free trial. Need us sooner? Call <a href="tel:+14245427170">+1 424-542-7170</a>.</p></div>';
            } else {
                msg.className = 'lead-msg is-error'; msg.textContent = 'Something went wrong. Please call +1 424-542-7170 or try again.'; btn.disabled = false;
            }
        } catch (err) {
            msg.className = 'lead-msg is-error'; msg.textContent = 'Network error. Please call +1 424-542-7170 or try again.'; btn.disabled = false;
        }
    });
})();
</script>
