# Zingo Assist: Master SEO Plan (26 Nov 2026)

This plan pulls together everything in `docs/seo/` (reports from 17 to 25 Nov, the structure plan, the link-building plan and 16 monitoring runs) plus a fresh review of the codebase. It covers what is already done, what is holding the site back, and a phased roadmap with owners and KPIs.

It keeps the rules already used on this project: no invented numbers or reviews, no em dashes, the 7-day rule (no re-editing a page within 7 days of a change unless something is broken), and owner-gated items wait for an entry in `owner-decisions.md`.

---

## 1. What the site is

| Item | Detail |
|---|---|
| Business | Zingo Assist: remote real estate virtual assistants for US agents, teams, investors and property managers |
| Domain | https://zingoassist.us (www and http 301 to this host) |
| Stack | Laravel 11, Blade views, cPanel hosting |
| Deploy | Push to `main` → GitHub Actions → FTPS upload of changed files → IndexNow ping (`scripts/seo_ping.py`) |
| Checks in CI | `live-audit.yml` (live page audit), `form-test.yml` (lead form), monitoring runs every 12 h logged in `docs/seo/monitoring/` |
| Indexable URLs | about 45 in `sitemap.xml` (built from one page list shared with the HTML `/sitemap`) |
| SEO plumbing in code | `partials/head.blade.php` (title, description, canonical, OG, robots), `schema-global` (Organization, WebSite), `schema-page` (Article, FAQ, Service), `config/blog.php` (post registry), `config/seo.php` (canonical host, GA4 ID), `public/llms.txt`, AI crawlers allowed in `robots.txt` |

### Page groups today

| Group | Pages | Role |
|---|---|---|
| Money pages (real estate) | Real estate VA hub, ISA, transaction coordinator, listing coordinator, cold calling, wholesale cold calling, expired/FSBO calling, property management VA, investor VA, Tampa/St. Pete location | Rank for "service + real estate" queries and convert |
| Tools | ROI calculator, TC checklist, VA tasks checklist (PDF) | Link magnets |
| Rules hub | `/real-estate-assistant-rules` + 8 state pages (FL, TX, CA, GA, NC, AZ, NY, CO) | Strongest linkable asset (NAR's chart dates from 2020) |
| Real estate guides | Cost, PM VA cost, TC fees, TC vs VA, speed to lead, ISA scripts, Follow Up Boss VA, tasks checklist | Supporting content for the money pages |
| Off-focus leftovers | SEO, web development, digital marketing service pages; about 10 generic posts (seo-strategies, web-dev-trends-2025, content-marketing-tips, seo-vs-ppc, etc.) | Dilute topical focus; decision pending |
| Noindexed | IT support, graphic design, app dev, personal assistance, bookkeeping, virtual business assistance, "how to become a VA" | Kept live, out of the index |

---

## 2. Where we stand (baseline)

From Search Console in the monitoring log:

| Metric | Value |
|---|---|
| Impressions per day | about 40 to 90 (best day 23 Nov: 92) |
| Clicks per day | 0 to 4 |
| Average position | 12 to 23, moving the right way |
| Indexed | Homepage, real estate VA hub, ISA, property management, rules hub, several guides |
| Not yet known to Google | FL and TX rules pages, investor VA, listing coordinator, TC services (flip-flopping), the 2 newest guides |
| Early wins | "speed to lead real estate" (position about 4), "things to outsource to a virtual assistant" (8), "follow up boss virtual assistant" (14), "expired & fsbo leads" (15) |

**Summary:** the on-page and structure work is largely done. The site is young, has almost no backlinks, and Google is crawling it slowly. Growth now depends on (1) authority, (2) getting the existing pages indexed, (3) measuring leads, and (4) a few technical and trust fixes.

---

## 3. What is holding the site back (ranked)

| # | Problem | Evidence | Impact |
|---|---|---|---|
| 1 | **Almost no authority** | No Google Business Profile, no directory profiles, no reviews, very few referring domains; top-3 competitors for "real estate virtual assistant" have many | Highest. Limits indexing and rankings for every page |
| 2 | **Slow indexing** | 6 to 7 key pages "unknown" or "discovered" a week or more after launch | High. Pages that are not indexed cannot rank |
| 3 | **Leads are not measured** | `GA4_MEASUREMENT_ID` is empty, so the `generate_lead` and click-to-call events never fire | High. No way to prove SEO is producing business |
| 4 | **Weak trust signals (E-E-A-T)** | Author is "Zingo Assist Editorial Team" only; testimonials with first names not confirmed real; no case studies; pricing shown as market ranges only | High for conversion, AI answers and YMYL-adjacent rules pages |
| 5 | **Page speed** | 11 render-blocking jQuery-era scripts loaded on every page (jQuery, Bootstrap, Swiper, Lightcase, Odometer, AOS, Isotope, TweenMax...); 3 icon font sets (Font Awesome, Line Awesome, Icomoon); 2 Google font families with 7 weights each; 0 WebP images; 52 `<img>` tags on the homepage, most decorative; about 21 MB of WhatsApp videos with spaces in file names | Medium. Core Web Vitals on mobile and crawl efficiency |
| 6 | **Topical dilution** | Indexable SEO, web development and digital marketing pages plus about 10 generic marketing posts on a real estate VA site | Medium. Mixed topical signals |
| 7 | **Server response time** | Laravel caches (`config`, `route`, `view`) not confirmed on the server | Low to medium |

---

## 4. Keyword and content strategy

### 4.1 Topic clusters (pillar → supporting pages)

| Cluster | Pillar (money page) | Supporting pages (existing ✓ / new ➕) |
|---|---|---|
| Real estate VA | `/real-estate-virtual-assistant` | ✓ cost guide, ✓ tasks checklist, ✓ VA vs full time, ✓ ROI calculator, ➕ how to hire a real estate VA (interview questions, first-week SOP), ➕ real estate VA job description template |
| ISA / lead follow-up | `/real-estate-isa-services` | ✓ speed to lead, ✓ ISA scripts expired/FSBO, ✓ Follow Up Boss VA, ➕ lead qualification questions for buyers and sellers, ➕ VA playbooks for other CRMs the team really uses (kvCORE/BoldTrail, Lofty, Sierra; only CRMs confirmed by the owner) |
| Transaction coordination | `/real-estate-transaction-coordinator-services` | ✓ TC checklist tool, ✓ TC vs VA, ✓ TC fees, ➕ transaction coordinator vs listing coordinator, ➕ what a TC does day by day (timeline from contract to close) |
| Listing coordination | `/listing-coordinator-virtual-assistant` | ➕ listing launch checklist (tool + PDF, same builder as the TC checklist), ➕ MLS listing input guide |
| Cold calling | `/real-estate-cold-calling-services`, wholesale, expired/FSBO | ✓ state cold calling rules, ➕ real estate cold calling compliance (TCPA, DNC, consent rules, sourced to FCC/FTC), ➕ wholesaling cold calling scripts |
| Property management | `/virtual-property-management-services` | ✓ PM VA cost, ➕ property management VA tasks list, ➕ tenant screening and maintenance coordination with a VA (Fair Housing aware) |
| Investors | `/real-estate-investor-virtual-assistant` | ➕ VA for wholesalers and flippers (acquisitions support, skip tracing workflow) |
| State rules | `/real-estate-assistant-rules` | ✓ 8 states, ➕ next 8 to 10 high-volume states: PA, IL, OH, MI, NJ, VA, WA, TN, SC, NV (same data file, same template, official sources only) |

### 4.2 Content rules

- One primary query per page; check the page map before writing so two pages never target the same query.
- Each new post links to its pillar in the first 150 words and to 2 or 3 siblings; the pillar links back.
- "Quick answer" paragraph (40 to 60 words) under the H1 for question queries, for featured snippets and AI answers.
- FAQ schema only for FAQs visible on the page.
- Pace: 1 to 2 pieces a week. Quality and sourcing over volume.
- Refresh, not just publish: every page that sits at positions 8 to 20 for a real query gets a targeted section (the "real query at position 10" approach already used in runs #5 to #11).

### 4.3 Pages to expand first (data-led)

| Query (GSC) | Page | Action |
|---|---|---|
| outsource tasks to virtual assistants (pos 17) | tasks post | Add a real estate tasks section linking the VA tasks checklist and the hub |
| real estate virtual assistant pricing (pos 36) | cost guide | Tighten the pricing table near the top; add a jump link |
| property management virtual assistant cost (pos 49, wrong page) | PM VA cost guide | Wait for indexing; then add a link from the general cost guide with that exact anchor |
| real estate virtual assistant sop template (pos 34) | tasks checklist | Add a downloadable SOP section or a dedicated SOP template page |
| outsourced isa services for real estate teams (pos 38) | ISA page | Add a "for teams" section (team routing, shared CRM, reporting) |

---

## 5. Roadmap

### Phase 0: Owner unblockers (this week, about 4 hours of owner time)

These unlock the most growth. Record each answer in `owner-decisions.md`.

| # | Task | Why |
|---|---|---|
| 0.1 | Create a GA4 property and send the `G-` ID (we add it to the server `.env`) | Turns on lead tracking already built into the forms and phone links |
| 0.2 | In Search Console, request indexing for: FL and TX rules pages, investor VA, listing coordinator, TC services, PM VA cost, TC fees | Only manual way to speed up Google (IndexNow covers Bing) |
| 0.3 | Create the Google Business Profile as a service-area business (address hidden) | Most important single citation |
| 0.4 | Confirm testimonials are real, or approve their removal | Fake-looking reviews hurt trust and can break Google policy |
| 0.5 | Decide on SEO / web development / digital marketing pages and the generic marketing posts: keep, noindex, or 301 to Alpha Ahead | Focuses the site on one topic |
| 0.6 | Name a real person as author/reviewer (name, role, photo, LinkedIn) | E-E-A-T for guides and rules pages |
| 0.7 | Give real starting prices and 2 or 3 client results (with permission) | Conversion, AI answers, roundup inclusion |
| 0.8 | Confirm which CRMs and MLS systems the assistants actually use, and which states have clients | Unlocks CRM playbooks and state service pages |

### Phase 1: Technical (weeks 1 to 2, dev, no owner input needed)

| # | Task | Done when |
|---|---|---|
| 1.1 | Convert content images to WebP (keep originals as fallback) and add `width`/`height` to every `<img>` | 0 layout shift from images |
| 1.2 | Remove or lazy-load decorative "element" images on the homepage; keep only those visible above the fold | Homepage image requests cut sharply |
| 1.3 | Add `defer` to all scripts in `partials/script.blade.php`; drop Isotope, TweenMax, Odometer and Lightcase on pages that do not use them | No render-blocking JS |
| 1.4 | Cut Google Fonts to the weights actually used (likely 400/500/600/700, one family if the design allows) | Smaller font payload |
| 1.5 | Pick one icon set, subset or replace the rest with inline SVG | 2 icon CSS files and their fonts removed |
| 1.6 | Rename the WhatsApp videos (no spaces), compress, add `preload="none"` and a poster image; consider VideoObject schema if they are client testimonials | Videos do not load until played |
| 1.7 | Add long cache headers for `/assets` in `public/.htaccess` (versioned file names already exist for custom CSS) | Repeat visits load from cache |
| 1.8 | Run `php artisan optimize` on the server after each deploy (add to the deploy workflow over SSH if `deploy-ssh.yml` is in use, otherwise owner runs it once in cPanel Terminal) | Lower TTFB |
| 1.9 | Add `BreadcrumbList` schema site-wide and visible breadcrumbs on service, guide and rules pages | Breadcrumbs in search results |
| 1.10 | Measure before and after with Lighthouse (mobile) on home, hub, one guide, one rules page; log in `docs/seo/` | Before/after table recorded |

### Phase 2: Content and on-page (weeks 2 to 8)

| Week | Work |
|---|---|
| 2 | Expand the 5 pages in section 4.3. Add author box and "Reviewed by" once 0.6 is answered |
| 3 | New: how to hire a real estate VA (+ interview questions). New: listing launch checklist tool |
| 4 | New: real estate cold calling compliance (TCPA/DNC, federal sources). Link from all cold calling pages and state rules |
| 5 | State rules: PA, IL, OH, NJ (official sources; "Not addressed" where guidance is silent) |
| 6 | New: property management VA tasks list. New: TC vs listing coordinator |
| 7 | State rules: MI, VA, WA, TN, SC, NV |
| 8 | CRM playbooks for confirmed CRMs (from 0.8). Case study pages if 0.7 is answered |
| Ongoing | Off-focus pages handled per decision 0.5 (noindex or 301, removed from sitemap and menus) |

### Phase 3: Authority and links (start week 1, ongoing; owner does the outreach)

Detailed in `link-building-plan.md` and `outreach-research-2026-11-25.md`. In order:

1. **Citations (week 1):** GBP, Bing Places, Apple Business Connect, BBB, Clutch, GoodFirms, Crunchbase, ActiveRain, Qwoted. Same name, phone and website on every one.
2. **Reviews (weeks 1 to 4):** ask every current client for a Google review and 2 or 3 for Clutch reviews. Target is real reviews, never bought.
3. **Rules pages pitch (weeks 2 to 6):** Inman, Realtor.com contributors, FastExpert, knowledge bases that cite the 2020 NAR chart. Each new state batch is a fresh reason to pitch.
4. **Tools pitch (weeks 3 to 8):** TC checklist, ROI calculator, listing launch checklist to TC software blogs and agent tool roundups.
5. **Roundups (after reviews exist):** "best real estate VA companies" lists.
6. **Digital PR (month 3+):** a small original data piece, for example "what agents delegate first" from anonymized, aggregated client task data (only if the data is real).

Pace: 5 to 10 personalized emails a day, logged in the table in `link-building-plan.md`.

### Phase 4: Local SEO (owner-gated)

- Tampa/St. Pete page stays; support it with GBP.
- Florida, Texas and California service pages only after the owner confirms clients and office details (per the structure plan).
- No doorway pages: each location page needs real local facts (MLS, state rules link, local clients).

### Phase 5: Conversion (weeks 2 to 8, needs GA4 from 0.1)

- Check every money page has a form above the fold on mobile and a sticky call/CTA button.
- Track `generate_lead`, `click_to_call`, trial popup submit and calculator use as GA4 events; mark leads as key events.
- Once 4 weeks of data exist: A/B-style copy changes on the top 2 landing pages by traffic (one change at a time, 7-day rule).

---

## 6. KPIs and targets

Targets are set against the baseline in section 2 and reviewed monthly. They are goals, not promises.

| KPI | Baseline (Nov 2026) | Month 1 | Month 3 | Month 6 |
|---|---|---|---|---|
| Indexed sitemap URLs | about 60% | 90% | 95%+ | 95%+ |
| GSC impressions per day (7-day average) | about 55 | 100 | 300 | 800 |
| GSC clicks per month | about 10 | 30 | 120 | 400 |
| Queries in top 10 | a handful | 15 | 50 | 120 |
| Referring domains (real) | very few | +10 (citations) | +25 | +50 |
| Google reviews | 0 | 5 | 15 | 30 |
| Organic leads per month (GA4) | not tracked | tracking live | baseline set | 2x month 3 |
| Mobile Lighthouse performance (home) | to be measured in 1.10 | +20 points | 80+ | 80+ |

---

## 7. Operating rhythm

| Cadence | What | Who |
|---|---|---|
| Every 12 h | Monitoring run: deploy status, GSC daily, URL inspection of priority pages, log entry | Scheduled task |
| Weekly | Pick 1 or 2 pages at positions 8 to 20 for real queries and improve them; publish 1 to 2 new pieces; owner sends outreach emails | Dev + owner |
| Monthly | Report (PDF in `docs/seo/reports/`): KPIs table above, wins, losses, next month | Dev |
| Every 6 months | Re-verify all state rules pages against official sources (next: May 2027) | Dev |
| Every deploy | `live-audit.yml` green, IndexNow ping, 200 + one H1 on changed URLs | CI |

---

## 8. Who does what

| Owner (business) | Dev / Claude (repo) |
|---|---|
| GA4 property, GSC indexing requests, GBP and directory listings, reviews, outreach emails, decisions in Phase 0, real prices and case studies | All technical work, content writing and sourcing, schema, internal links, sitemap, monitoring, reports. Everything ships through the existing git → FTP pipeline |

## 9. Immediate next actions

1. Owner: Phase 0 items 0.1 to 0.3 (GA4 ID, GSC indexing requests, GBP).
2. Dev: Phase 1 technical work (1.1 to 1.10), on a branch, merged to `main` to deploy.
3. Dev: Week 2 page expansions from section 4.3 (respecting the 7-day rule for pages edited on 24 and 25 Nov).
