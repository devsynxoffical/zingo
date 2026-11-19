# Zingo Assist: Performance Investigation & Recovery Plan (Nov 19, 2026)

This is a data-first investigation. It does not assume the earlier SEO work was right.

**Sources:**
- Google Search Console (GSC) via OpenSEO (first-party data)
- URL Inspection for all 48 sitemap URLs
- A live-site audit run from GitHub's network (`live-audit.yml`, run 44475767789)
- Code review
- Live SERP checks

**Not available:**
- **GA4:** no GA4 property for zingoassist.us exists in the connected Google account.
- **Backlink and keyword-volume tools:** OpenSEO has only 2 credits.
- **PageSpeed Insights:** the anonymous API daily quota was exhausted.

---

## 1. Baseline

### 1.1 Search Console: period comparisons

| Period | Dates | Clicks | Impressions | CTR |
|---|---|---|---|---|
| Last 28 days | Oct 22 – Nov 18 | **8** | **92** | 8.7% |
| Previous 28 days | Sep 24 – Oct 21 | 0 | 52 | 0% |
| Last 3 months | Aug 20 – Nov 18 | **8** | **245** | 3.3% |
| Previous 3 months | May 21 – Aug 19 | 0 | 5 | 0% |

**What the numbers actually say**
- The site's first Google impression ever was **Aug 18, 2026**. The "previous 3 months" is effectively zero because the site was not in Google yet.
- The 28-day trend is up (52 → 92 impressions, 0 → 8 clicks). But **all 8 clicks and ~95% of impressions are brand searches** ("zingo assist", "zingo company").
- **Non-brand queries in 3 months:** only 3 ("seo vs ppc small business" at position 90, "why full-time va is better" at position 38, "sowingo" at position 52, irrelevant), with 4 impressions in total. **The site has no non-brand search visibility.**
- **Geography (all time):**
  - USA: 143 impressions, 4 clicks, position 3.5 on mobile and 8.1 on desktop.
  - Pakistan: 40 impressions, 1 click.
  - About 25 other countries account for the rest.
  - Much of the brand traffic is likely the team itself, since the company has a Pakistan-based team.

### 1.2 Index coverage (URL Inspection, all 48 sitemap URLs, Nov 19)

| State | Count | URLs |
|---|---|---|
| **Indexed** | **20 (42%)** | `/`, `/real-estate-virtual-assistant`*, `/real-estate-isa-services`*, `/wholesale-real-estate-cold-calling`*, `/real-estate-virtual-assistant-tampa-st-petersburg-fl`*, `/blog/real-estate-virtual-assistant-cost`*, `/blog/unlicensed-real-estate-assistant-florida`*, `/blog/florida-real-estate-cold-calling-laws`*, `/editorial-policy`*, `/about-us`, `/personal-assistance-services`, `/graphic-design-services`, `/mobile-app-development-services`, `/business-it-support-services`, `/blog`, `/blog/seo-vs-ppc`, `/blog/digital-marketing-budget`, `/blog/va-vs-full-time`, `/privacy-policy`, `/terms-conditions` |
| Discovered, not indexed | 20 | `/our-services`, `/real-estate-cold-calling-services`, `/real-estate-transaction-coordinator-services`, `/virtual-property-management-services`, `/lead-generation-services`, `/accounting-and-bookkeeping-services`, `/crm-management-services`, `/real-estate-digital-marketing-agency`, `/real-estate-seo-services`, `/real-estate-web-development-services`, `/video-editing-services`, `/blog/transaction-coordinator-vs-virtual-assistant`, `/blog/10-signs-you-need-a-virtual-assistant`, `/blog/benefits-outsourcing-business-tasks`, `/blog/why-your-business-needs-a-virtual-assistant`, `/blog/crm-management-2025`, `/blog/seo-strategies`, `/blog/optimize-website-seo`, `/blog/website-redesign-checklist`, `/blog/how-to-become-a-virtual-assistant` |
| Unknown to Google | 7 | `/virtual-business-assistance-services`, `/contact-us`, `/blog/tasks-to-outsource-to-a-virtual-assistant`, `/blog/crm-powered-workflow`, `/blog/content-marketing-tips`, `/blog/web-dev-trends-2025`, `/blog/free-va-trial` |
| Excluded (stale `noindex`, crawled Jul 31) | 1 | `/faq` |

\* = indexed within 24 hours of the Nov 18 go-live and the indexing requests. This is the one clearly measurable effect of the recent work.

### 1.3 Live technical state (from GitHub's network, Nov 19 06:56 UTC)

| Check | Result |
|---|---|
| Status codes, robots meta, canonicals on 11 key pages | All 200, `index, follow`, self-canonical ✅ |
| `www` → bare, `/blog2`, `/blog/top-5-tasks` | 301 ✅ |
| Gzip | Works (homepage 107 KB → 20 KB) ✅ |
| Spam or cloaked content served to Googlebot | None found ✅ |
| **`http://zingoassist.us/`** | **200, no redirect to https** ❌ (duplicate host) |
| **Server response time (TTFB)** | 0.43–0.94 s; homepage 0.94 s ⚠️ (Google recommends under 0.8 s) |
| **`<title>` on 10 pages** | **Double-escaped `&amp;amp;`** ❌, e.g. "Rates &amp;amp; ROI" (a bug from the Nov 17–18 work) |

### 1.4 Conversion tracking
- **No analytics or conversion tracking exists on the site.** There's no GA4, Tag Manager or Meta pixel in any template, and no GA4 property in the connected account. **It is currently impossible to know how many visitors become leads.**
- The lead forms work in code. Locally, both `POST /api/send_email` (contact form) and `POST /api/trail_mail` (trial popup) return success and generate the email. Live delivery depends on the server's mail configuration, which I can't test without sending a real email to `sales@zingoassist.us`.

---

## 2. Why the site is not performing: root causes, ranked by impact

1. **The domain has almost no authority or reputation.**
   - Evidence: the only referring pages Google reports are three sister sites (alphaaheadllc.com, alphaxdispatch.com, spaceupsolutions.com).
   - A web search for "zingo assist" returns the Zingo board game and Zoho Assist, with **no third-party mention of the business**.
   - Google first showed the site on Aug 18, 2026.
   - With no links and no brand footprint, Google crawls and indexes sparingly (20 of 48 URLs not crawled yet) and won't rank the site for competitive terms.
   - **No amount of on-page work fixes this on its own.**
2. **The site was compromised (webshell plus remote-code loader) until Nov 18.** Hacked sites are crawled cautiously, and this probably contributed to months of "Discovered – not indexed". It was cleaned on Nov 18; recovery takes weeks.
3. **Too many pages for a site with this little authority, and many are off-focus.**
   - There are 48 indexable URLs. Of these, 7 service pages (app development, IT support, video editing, graphic design, real estate SEO / web development / digital marketing) and 9 blog posts (SEO, PPC, web dev trends, content marketing, website redesign, CRM 2025…) are outside the core offer: real estate and business virtual assistants.
   - None of them earned a single non-brand impression in 3 months.
   - They spread a very small crawl budget and blur topical focus.
4. **The earlier keyword targeting was partly over-optimistic.**
   - Head terms ("real estate virtual assistant", "real estate ISA services") are owned by MyOutDesk, Stealth Agents and Wing, which have years of links and reviews. A brand-new domain realistically can't rank for these in months.
   - "Wholesale real estate cold calling" was labelled a "weak SERP" on Nov 17 because Fiverr gigs rank. That was wrong: Fiverr is one of the strongest domains on the web.
   - **What is realistic:** local intent (Tampa / St. Petersburg / Florida), Florida-specific compliance questions, and very long-tail, question-style queries. The Tampa page and the two Florida guides were indexed fastest, which supports this.
5. **Content quality signals are weak in places.**
   - **14 blog posts end with the same copy-pasted 5-question FAQ** about hiring a VA, including posts about SEO, PPC and web development.
   - Content length and duplication are otherwise fine: 1,000–1,900 words per page, with pairwise duplication ≤ 9%.
   - **Missing trust signals that competitors show:** named experts, real reviews (Google, Clutch), case studies with numbers, published pricing.
6. **No measurement, so no feedback loop.** Without GA4 or lead tracking, neither SEO nor the website can be judged on business results.
7. **Small technical defects** (Section 1.3): no http → https redirect, double-escaped titles on 10 pages, slow-ish TTFB.

### Was the earlier SEO work effective?
- **Too early to judge rankings.** The Nov 17–18 work only went live on Nov 18 09:19 UTC because deployment was blocked until then.
- **Measurable effect so far:** 8 new real estate URLs indexed within a day, from 12 indexed pages to 20.
- **No ranking or impression gains can be attributed yet.**
- **Mistakes in that work:**
  - It introduced the double-escaping bug.
  - It over-rated the wholesale-calling SERP.
  - It added 6 pages to a site whose real constraint is authority, not page count. The pages themselves are the strongest on the site, but more pages do not fix authority.

---

## 3. Opportunities ranked by business impact

| # | Opportunity | Business impact | Effort | Owner | Status |
|---|---|---|---|---|---|
| 1 | Fix double-escaped titles on 10 URLs (3 already indexed) | Medium: clean SERP titles and CTR | S | Dev | **Doing now** |
| 2 | 301 http → https | Medium: removes duplicate host, consolidates signals | S | Dev | **Doing now** |
| 3 | Lead measurement: GA4 + `generate_lead` events on both forms + click-to-call | **High**: without it, business growth can't be proven | S (code) + owner creates GA4 property | Dev + Owner | **Code doing now, activates when the GA4 ID is added** |
| 4 | Brand and authority: Google Business Profile, Clutch/GoodFirms/Outsource Accelerator/Real Estate Bees profiles, 5–10 real client reviews, local chamber listing | **Highest long-term**: the root cause of low indexing and ranking | M | Owner | Plan below |
| 5 | Request indexing in GSC for `/faq` and the 4 core service pages | Medium | XS | Owner | Pending |
| 6 | Focus the site: noindex or retire off-focus pages (decision needed, see 4.3) | Medium: concentrates crawl and topical signals | S | Owner decision → Dev | Proposed |
| 7 | Remove the copy-pasted FAQ from 9 off-topic posts (or retire those posts with #6) | Low–Medium | S | Dev | Waits for #6 |
| 8 | Trust content: 2–3 real case studies, real reviews, a named expert author, published starting prices | High for conversion and GEO | M | Owner provides facts | Waiting on owner |
| 9 | TTFB: enable Laravel config/route/view caching on the server (`php artisan optimize`) | Low–Medium | XS | Owner (cPanel Terminal) | Proposed |

---

## 4. Page-by-page recovery strategy

### 4.1 Core money pages (keep, strengthen)

| URL | Index | GSC (3 mo) | Problem | Action | Validation |
|---|---|---|---|---|---|
| `/` | Indexed | 2 clicks / 16 impressions ("zingo assist", position 1.4) | Brand-only; homepage CTR 12.5% at position 1.4 is low for a brand query | Keep; title already rewritten (live since Nov 18). Watch brand CTR | GSC brand CTR, 28 days |
| `/real-estate-virtual-assistant` | Indexed (Nov 18) | none yet | Head term too competitive for this domain now | Keep as hub; target long-tail ("real estate virtual assistant for small teams/Florida"); add reviews and case studies when available | GSC queries & position for the page at 14 / 28 days |
| `/real-estate-virtual-assistant-tampa-st-petersburg-fl` | Indexed (Nov 18) | none yet | Title double-escaped | **Fix title (#1)**; support with Google Business Profile (#4) | Live title; GSC local queries |
| `/real-estate-isa-services` | Indexed (Nov 18) | none yet | Competitive head term | Keep; long-tail and FAQ queries | GSC |
| `/real-estate-cold-calling-services` | Discovered, not indexed | — | Not crawled | Request indexing (#5); keep internal links | URL Inspection |
| `/real-estate-transaction-coordinator-services` | Discovered, not indexed | — | Not crawled | Request indexing (#5) | URL Inspection |
| `/virtual-property-management-services` | Discovered, not indexed | — | Not crawled | Request indexing (#5) | URL Inspection |
| `/wholesale-real-estate-cold-calling` | Indexed | — | SERP dominated by Fiverr (very high authority) | Keep, low expectations; target investor long-tail | GSC |
| `/virtual-business-assistance-services`, `/personal-assistance-services` | Unknown / Indexed | `/personal-assistance-services`: 35 brand impressions, 0 clicks | Gets brand impressions without being relevant to them | Keep | GSC |
| `/contact-us` | Unknown | — | Conversion page not known to Google; no lead tracking | Lead tracking (#3); request indexing | GA4 `generate_lead` |
| `/faq` | Stale noindex | — | Google still has July's noindex | Request indexing (#5) | URL Inspection |

### 4.2 Supporting real estate content (keep)

| URL | Status | Action |
|---|---|---|
| `/blog/real-estate-virtual-assistant-cost` | Indexed | **Fix title (#1)**. Strongest commercial guide; add real Zingo starting prices when provided |
| `/blog/florida-real-estate-cold-calling-laws` | Indexed | **Fix title (#1)**. Florida-specific, realistic to rank |
| `/blog/unlicensed-real-estate-assistant-florida` | Indexed | Keep; realistic long-tail |
| `/blog/transaction-coordinator-vs-virtual-assistant` | Discovered | Keep; request indexing later |

### 4.3 Off-focus pages: decision needed from the owner

**No non-brand impressions in 3 months** (except `/blog/seo-vs-ppc`, 2 impressions at position 90):

- **Service pages:** `/mobile-app-development-services`, `/business-it-support-services`, `/video-editing-services`, `/graphic-design-services`, `/real-estate-seo-services`, `/real-estate-web-development-services`, `/real-estate-digital-marketing-agency`
- **Blog posts:** `/blog/seo-strategies`, `/blog/seo-vs-ppc`, `/blog/optimize-website-seo`, `/blog/content-marketing-tips`, `/blog/digital-marketing-budget`, `/blog/web-dev-trends-2025`, `/blog/website-redesign-checklist`, `/blog/crm-management-2025`, `/blog/crm-powered-workflow`, `/blog/how-to-become-a-virtual-assistant` (job-seeker intent, not buyers)

**Recommendation:** if these services aren't a real revenue line, set the pages to `noindex, follow` and remove them from the sitemap. Keep them reachable for visitors. That concentrates Google's limited crawling on the pages that sell. **Not done without your decision.**

---

## 5. Change log: before → after, with validation

| ID | Date | Change | Affected URLs | Reason / evidence | Before | Validation method | After |
|---|---|---|---|---|---|---|---|
| C1 | 2026-11-19 | Decode stored titles and descriptions once before escaping (fix double-escaped `&`) | `/lead-generation-services`, `/accounting-and-bookkeeping-services`, `/real-estate-seo-services`, `/real-estate-virtual-assistant-tampa-st-petersburg-fl`, `/faq`, `/blog`, `/blog/real-estate-virtual-assistant-cost`, `/blog/florida-real-estate-cold-calling-laws`, `/editorial-policy`, `/terms-conditions` | Live audit: `<title>…Rates &amp;amp; ROI` | 10 URLs double-escaped | Local render scan of all sitemap URLs + live audit re-run | Local: 0 of 48 double-escaped ✅; live: see the audit after deploy |
| C2 | 2026-11-19 | 301 http → https | all URLs (`http://zingoassist.us/*`) | Live audit: `http://zingoassist.us/` → 200 | 200 | Unit matrix (http:80 → 301; https → 200; X-Forwarded-Proto https → 200, no loop; www → 301) + live audit | Local ✅; live: see the audit after deploy |
| C4 | 2026-11-19 | Contact page: "Start Chat" / "Book Now" showed "coming soon" alerts → now open the consultation form (renamed "Message Us"); trial popup closed silently on success → now shows a confirmation | `/contact-us`, trial popup on all pages | Code review: dead-end CTAs on the main conversion page; no feedback after a trial request | 2 dead-end buttons; silent success | Playwright: no alert, focus moves to `#name`; trial shows "Thank you!…" | ✅ verified locally (Nov 19) |
| C3 | 2026-11-19 | GA4 + lead event tracking (`generate_lead` on contact and trial form success, `click_to_call` on `tel:` links); inactive until a GA4 measurement ID is configured | all pages; `/contact-us`; trial popup | No analytics or conversion data exists | No tracking | Playwright with a test ID: `generate_lead {form_id: contact|free_trial}`, `cta_click`, `click_to_call` pushed to dataLayer; 0 JS errors. Off by default (0 tags without an ID) | Code ✅ verified; live data pending the owner's GA4 ID |
