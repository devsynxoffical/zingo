# Zingo Assist SEO / AEO / GEO Report: Round 2 (November 18, 2026)

Commit `dd6df0b` on `main`. This round builds on the work from November 17 (`docs/seo/2026-11-17-seo-report.md`) and does not repeat it.

> **Deployment status: not live.** None of the Nov 17 or Nov 18 changes are on zingoassist.us yet. Every FTP deploy timed out because the host does not accept FTP connections from GitHub. The SSH workflow is ready but needs the SSH secrets. Until then, use the manual upload package (`deploy-package/`, see section 8). No ranking, indexing or AI-citation changes can be claimed until the code is live and Google has re-crawled it.

## 1. Baseline performance (Google Search Console)

| Window | Clicks | Impressions | Queries | Notes |
|---|---|---|---|---|
| Last 28 days (Oct 19 – Nov 15) | 8 | ~150 | 6 | 100% branded ("zingo assist", "zingo company") |
| Last 90 days (Aug 15 – Nov 15) | ~7–8 | ~300 | 14 | 1 non-brand query with impressions: "seo vs ppc small business" (pos 90, 2 impressions) |

- **High-impression, low-CTR queries:** only "zingo assist". The homepage has 13–16% CTR at position 1.5, which is weak for a brand query. `/personal-assistance-services` gets 34 brand impressions at position 4.8 with 0 clicks. The new title tags from Nov 17 address this once live.
- **Non-brand keywords in positions 4–20:** none. The site has no non-brand footprint yet, so there is no striking-distance list to optimize. This is a fact, not a gap in the analysis.
- **Declining pages (90-day vs 28-day):** `/blog`, `/blog2` and `/privacy-policy` received brand impressions in the 90-day window but none in the last 28 days. `/blog2` is "Crawled – currently not indexed" and was 301-merged on Nov 17.
- **Keyword cannibalization:**
  - Brand queries are split across 6+ URLs.
  - `/blog/top-5-tasks` and `/blog3` (10 tasks) target the same intent. Fixed today.
  - `/blog2` and the 10-signs post overlapped. Fixed Nov 17.

## 2. Why rankings are weak (root causes, in order of impact)

1. **Fixes are not deployed.** The Nov 17 work (titles, schema, new pages, security cleanup) is not live.
2. **Duplicate host.** URL Inspection shows Google chose `https://www.zingoassist.us/blog/top-5-tasks` as canonical over the declared non-www URL. Both hosts serve 200 with self-canonicals, which splits signals and wastes crawl budget. **Fixed today** with a 301.
3. **Index coverage.**
   - Most service pages are "Discovered – currently not indexed" or "URL is unknown to Google".
   - `/faq` is still excluded by a `noindex` from a July 31 crawl.
   - Typical causes here: low site authority, thin or duplicate pages, and a compromised server.
4. **Compromised server.** The webshell and remote-code loader found on Nov 17 may still be on the live server and can trigger spam or "hacked" signals.
5. **Almost no external authority.** The only referring domains Google reports are sister sites (alphaaheadllc.com, alphaxdispatch.com, spaceupsolutions.com). Backlink data could not be pulled because the OpenSEO account has 2 credits.
6. **Weak E-E-A-T and entity signals.** There were no named authors, no editorial standards, no cited sources and no verifiable case studies. Partly addressed today (see section 5).

## 3. Keyword research and URL mapping (new this round)

No volume or difficulty metrics are claimed: OpenSEO had 2 credits. Targets were chosen from live SERP review: who ranks and how strong the ranking pages are.

| Keyword cluster | Intent | SERP observation | Mapped URL |
|---|---|---|---|
| real estate ISA services, outsourced ISA, real estate inside sales agent | Commercial | Dominated by MyOutDesk, Stealth Agents and Brivity service pages, plus job listings and few independent pages | `/real-estate-isa-services` (new) |
| what can an unlicensed real estate assistant do in Florida, unlicensed assistant Florida, can an assistant show property Florida | Informational (AEO) | Florida Realtors, local boards, training sites and old PDFs; no service provider answers it well | `/blog/unlicensed-real-estate-assistant-florida` (new) |
| tasks to outsource to a virtual assistant (top 5 / 10 tasks) | Informational | Two Zingo posts competed for it | consolidated into `/blog/tasks-to-outsource-to-a-virtual-assistant` |

Earlier mappings (real estate VA, wholesale cold calling, Tampa/St. Pete, cost, TC vs VA, Florida calling laws) are in the Nov 17 report.

## 4. Technical fixes completed today

| Fix | Detail | Verified |
|---|---|---|
| Canonical host | `CanonicalHost` middleware 301-redirects `www.zingoassist.us/*` to `https://zingoassist.us/*`, keeping path and query. Canonical tags, JSON-LD and sitemap `<loc>` use the fixed `config/seo.php` base. | `www` → 301; canonicals and sitemap show `https://zingoassist.us/...` |
| Broken legacy images | `blog3`, `blog4` and the FAQ used relative `src="assets/..."`, which broke after the move to `/blog/...` URLs. Now `asset()` paths. | 0 broken images across 48 URLs |
| Legacy post markup | Text wrapped in `<p>`, headings fixed (H1 → H2 → H3), descriptive alt text from section headings. | Rendered and screenshotted |
| Cache busting | Remaining `?v=time()` on 6 page-specific stylesheets replaced with `filemtime`. | Grep shows none left |
| Compression and caching | `public/.htaccess`: mod_deflate, mod_expires, Cache-Control, `nosniff`, Referrer-Policy (all inside `IfModule`). | Applies on Apache only, so not measurable locally |
| Render-blocking CSS | animate, lightcase, odometer, icomoon, line-awesome and nice-select load via `preload`/`onload` with a `noscript` fallback. | Icons render; homepage visually unchanged |
| Logo weight | Header and footer logo 122 KB → 27 KB (336 px wide, displayed at ~100 px); preloaded. | Same rendered size (97×35 / 111×40) |
| Crawlability | Header CTA now has a real `href` (contact page) and still opens the popup. Scroll-to-top link labelled. "Learn More" links carry screen-reader-only descriptive text. | Lighthouse `crawlable-anchors`, `link-text`, `link-name` pass |
| Thin orphan page | `/service/testimonials` (unlinked, unverified quotes) set to `noindex, follow` and removed from the sitemap. | Robots meta rendered |
| IndexNow | Key file `public/597dc5249af24dc69b88a11d6e03e22b.txt` added; key registered in OpenSEO. | Serves locally; submit after deploy |

**Lighthouse, mobile lab test.** Run on a local single-threaded server with no gzip, so absolute timings are pessimistic and single runs vary.

| Template | Performance | Accessibility | Best practices | SEO |
|---|---|---|---|---|
| Home | 35 → **59** | 91 → **95** | 93 | 85 → **100** |
| Real estate VA page | 59 | 94 | 96 | 92 → **100** |
| Blog post (`/blog/seo-vs-ppc`) | 60 | 90 → **94** | 96 | 92 → **100** |

- Homepage total blocking time dropped from 1,220 ms to 10 ms.
- CLS is 0 on all templates.
- The remaining LCP cost is mostly missing compression and the theme's 760 KB of unused CSS (see next steps).

## 5. AEO and GEO improvements

- **Editorial policy page** (`/editorial-policy`): who writes the content, source hierarchy, fact-checking, legal and pricing disclaimers, update and correction policy, independence, AI-tool use and editor contact.
  - Linked from every post byline, the footer and the author box.
  - Declared as `publishingPrinciples` in the Organization schema.
  - The BlogPosting `author` now points to it.
  - **The owner must confirm these policies match how the team actually works.**
- **Cited sources:**
  - Florida calling guide: FCC, eCFR 47 CFR 64.1200, FCC 24-17, FTC TSR, DNC registry, Fla. Stat. 501.059 and 501.616, HB 761, Florida Realtors.
  - Cost guide and TC vs VA: vendor pricing pages, the ListedKit calculator, Florida Realtors.
  - Florida assistant guide: Florida Realtors, Tampa and Pinellas Realtor documents, NAR state table, Chapter 475.
- **Author box on every post:** an "Editorial Team" box with the business identity and links to the editorial policy and About page. No individual authors were invented, because none are named on the site.
- **Direct answers:** both new pages open with a quick-answer block and add FAQPage schema (6 and 5 Q&As), comparison tables and definitions.
- **Per-post Open Graph:** each post now has its own `og:image` and `og:type=article` instead of the logo.
- **AI crawler access:** already allowed in `robots.txt` (Nov 17). `llms.txt` now also lists the ISA page, the Florida guide and the editorial policy.

## 6. Content and UX completed today

| URL | Type | Notes |
|---|---|---|
| `/real-estate-isa-services` | New service page | ISA definition, 6 services, outsourced vs in-house vs VA table, funnel metrics, compliance, 5-step launch, 6 FAQs. Linked from header, services hub (card 18), RE VA page, Tampa page, cold calling, lead gen, Florida guides and blog footers. |
| `/blog/unlicensed-real-estate-assistant-florida` | New guide | FREC permitted and not-permitted lists, comparison table, pay rules, remote VA guidance, hiring checklist, 5 FAQs, 5 sources, legal disclaimer. Linked from 7 pages plus related-article blocks. |
| `/editorial-policy` | New trust page | Legal-page template; linked site-wide. |
| `/blog/tasks-to-outsource-to-a-virtual-assistant` | Consolidated | Gained the "How to choose" and "When to start" sections from the retired top-5 post. |
| All 20 posts | Template upgrade | Featured image, readable H1/H2/H3 scale, author box, CTA, related services and 3 related articles. In-text links made inline and brand-colored (the theme forced `a{display:inline-block}`, which split long links onto their own lines). |
| Blog index | Updated | Retired the top-5 card; the Florida guide replaced the job-seeker "How to become a VA" card, keeping an even 6×3 grid. |

**Verification:**
- Local crawl of all 48 sitemap URLs: 200 status, exactly one H1, unique titles, descriptions ≤160 characters, valid JSON-LD, 0 images without alt text.
- 0 broken images, 0 broken or redirecting internal links, 0 orphan pages.
- Desktop and mobile screenshots of every new or changed template; no horizontal scroll on mobile.
- Homepage and service pages visually identical to the previous version apart from the logo resample.

## 7. Backlink and authority opportunities (to action)

No backlink metrics are claimed. These are relevant, legitimate sources for a US real estate VA agency:

1. **Business profiles:** Google Business Profile (only if the St. Petersburg address is a real, staffed location), Bing Places, BBB, Apple Business Connect.
2. **B2B directories with reviews:** Clutch, GoodFirms, G2, Outsource Accelerator, Real Estate Bees (VA and ISA directory).
3. **Real estate associations and vendor directories:** Pinellas Realtor Organization and Greater Tampa Realtors affiliate membership, Florida Realtors vendor listings, NAR REach-style vendor programs.
4. **Local:** St. Petersburg Area Chamber of Commerce, Tampa Bay Chamber, local business journals.
5. **Digital PR / expert quotes:** Qwoted, Featured.com, Help a B2B Writer. Pitch the Florida calling-law and unlicensed-assistant guides to real estate publications such as Inman, RISMedia and HousingWire contributor programs.
6. **Integration partners:** listing in Follow Up Boss, kvCORE/BoldTrail and Lofty partner or integration marketplaces, if Zingo qualifies.

## 8. Indexing status and actions after go-live

**Current state (URL Inspection, Nov 18):**
- Indexed: homepage, `/about-us`, `/blog`, `/privacy-policy`, `/personal-assistance-services`, `/graphic-design-services`, `/business-it-support-services`.
- `/faq` still `noindex` (July crawl).
- `/blog/top-5-tasks` flagged as a duplicate of the `www` version.
- All Nov 17/18 URLs are "unknown to Google" because they are not deployed.

**Go-live checklist:**
1. Upload `deploy-package/zingo-upload-2026-11-18.zip` and follow `HOW-TO-UPLOAD.txt`, or set up the SSH deploy.
2. Delete the files in `DELETE-these-files-on-server.txt` (malware and retired pages).
3. Confirm `https://www.zingoassist.us/` 301-redirects to `https://zingoassist.us/`.
4. In Search Console:
   - Resubmit `sitemap.xml`.
   - Request indexing for `/real-estate-virtual-assistant`, `/real-estate-isa-services`, `/faq`, `/real-estate-cold-calling-services`, `/wholesale-real-estate-cold-calling`, `/real-estate-virtual-assistant-tampa-st-petersburg-fl`, `/blog/real-estate-virtual-assistant-cost`, `/blog/unlicensed-real-estate-assistant-florida`, `/blog/florida-real-estate-cold-calling-laws`, `/our-services`.
   - Check the Security issues report.
5. Submit the changed URLs to IndexNow (the key file is included in the package).
6. Re-inspect the same URLs after 7–14 days.

## 9. Owner input still needed

- **Confirm or edit claims written on the owner's behalf:**
  - Tools the assistants are trained on (Follow Up Boss, kvCORE, Lofty and others)
  - Eastern Time scheduling
  - "24–48 hour start"
  - The editorial policy commitments
- **A named expert author** (name, role, real bio, LinkedIn) to replace "Editorial Team" on real estate guides. This is the strongest remaining GEO and E-E-A-T lever.
- **2–3 real case studies** with client permission and measured results.
- **Verification of the existing testimonials**, or replacement with reviews from Google or Clutch.
- **Starting prices** for the ISA, real estate VA and cold calling services, if you're willing to publish them.

## 10. Next priorities

1. **Go live and clean the server.** This is blocking everything else.
2. **Authority:** the directories and profiles in section 7, and reviews.
3. **Performance round 3:**
   - Purge unused theme CSS (~760 KB)
   - WebP versions of hero and card images
   - Lazy-load or remove the 21 MB of homepage videos
   - Drop the duplicate Bootstrap 5 CDN on the homepage after QA
4. **Content, only where demand is evident:**
   - Real estate listing coordinator VA page
   - "ISA vs virtual assistant" comparison
   - Refresh or retire the 2025-dated marketing posts (web dev trends, CRM 2025, content marketing, SEO guides)
5. **Measurement:**
   - Weekly Search Console review once non-brand impressions appear (positions 5–20, CTR by page)
   - An AI-visibility tracker for prompts such as "best real estate ISA service" and "real estate virtual assistant Florida" once OpenSEO credits are available
