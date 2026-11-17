# Zingo Assist SEO / AEO / GEO Report: November 17, 2026

Site: https://zingoassist.us · Stack: Laravel 11 (Blade) · Commit: `0a52c3d` on `main`

## 1. Starting point (baseline)

**Google Search Console, Aug 14 to Nov 14, 2026**

| Metric | Value |
|---|---|
| Clicks | ~7 (all to the homepage) |
| Queries with impressions | 6, almost all branded ("zingo assist", "zingo company") |
| Best non-brand query | "seo vs ppc small business": 2 impressions, position 90 |

**Index status (URL Inspection, 20 key URLs checked)**

| Status | URLs |
|---|---|
| Indexed | `/`, `/about-us`, `/blog/va-vs-full-time` |
| Discovered, not indexed | 11, including cold calling, transaction coordinator, property management, contact, CRM, SEO and bookkeeping pages |
| Unknown to Google | `/our-services`, `/lead-generation-services`, `/real-estate-digital-marketing-agency`, `/mobile-app-development-services`, `/blog/benefits-outsourcing-business-tasks` |
| Excluded by `noindex` | `/faq` (crawled Jul 31). The current code has no noindex, so it needs re-crawling. |
| Crawled, not indexed | `/blog2`, a thin duplicate of the 10-signs post |

**Root causes found in the code**
- Compromised server.
  - A PHP webshell (`shell.php`).
  - A remote-code loader (`public/SS.zip`) that downloaded code from `code.topkz.ru`.
  - Empty planted `.php` files in the asset folders.
  - The error log shows the loader ran about 300 times.
- The homepage printed a `<head>` before `<!DOCTYPE>`, which forced browsers into quirks mode.
- No structured data on any page.
- Titles and meta descriptions:
  - Generic titles such as "Zingo - assist blog" (×3) and "FAQ | ZingoAssist".
  - 17 pages had no meta description.
  - The privacy page had a quote bug.
- 4 pages had no H1.
- Blog URLs were `/blog1`–`/blog4`.
- About 58 MB of images, with single files up to 4 MB.
- `?v=time()` on CSS files, so they could never be cached.
- The sitemap set every `lastmod` to today.
- No page targeted the core keyword, "real estate virtual assistant".

## 2. Keyword strategy

There was no keyword-volume data today (the OpenSEO account has 2 credits). Targets were chosen from a review of the live US search results: who ranks and how strong their pages are. ★ means a primary target.

| Page | Primary keyword | Secondary / long-tail | Why winnable |
|---|---|---|---|
| `/real-estate-virtual-assistant` (new) | ★ real estate virtual assistant | virtual assistant for real estate agents, real estate ISA virtual assistant, real estate VA services | Core commercial term the site had no page for. The strongest page type in these results is a service page plus an FAQ. |
| `/wholesale-real-estate-cold-calling` (new) | ★ real estate cold calling for wholesalers | cold calling for real estate investors, motivated seller cold calling, absentee owner / probate / pre-foreclosure calling | Fiverr gigs and thin blogs rank for these terms. |
| `/real-estate-virtual-assistant-tampa-st-petersburg-fl` (new) | ★ real estate virtual assistant Tampa / St. Petersburg FL | virtual assistant St. Petersburg FL, Tampa Bay real estate assistant | Job boards and one thin city page rank here. Zingo's real office address is in St. Pete. |
| `/blog/real-estate-virtual-assistant-cost` (new) | ★ real estate virtual assistant cost | VA cost per hour / per month, is a real estate VA worth it | Commercial-intent pricing query. Competitors win with real price tables. |
| `/blog/transaction-coordinator-vs-virtual-assistant` (new) | ★ transaction coordinator vs virtual assistant | TC cost per file, does a TC need a license | Results are weak: ActiveRain, Zippia and one competitor. |
| `/blog/florida-real-estate-cold-calling-laws` (new) | ★ is cold calling legal in Florida (real estate) | Florida calling hours, Florida DNC list, FTSA, TCPA real estate | Few competitors cover compliance in depth, and it fits the Florida location. |
| `/real-estate-cold-calling-services` | real estate cold calling services | expired / FSBO cold calling for realtors | Weak results (Fiverr and thin AI blogs). Retitled for agents. |
| `/real-estate-transaction-coordinator-services` | virtual transaction coordinator | real estate TC services | Now linked from the TC vs VA guide. |
| `/virtual-property-management-services` | virtual property management assistant | property management VA for landlords | Retitled; FAQ schema added. |

## 3. Competitors and content gaps

- **Main competitors**
  - Stealth Agents (programmatic "duties, cost, hiring" pages, "alternatives" pages).
  - Wing Assistant (public pricing, property management and TC pages).
  - MyOutDesk (ISA, TC and property management service pages, a self-ranking "best real estate VA companies" listicle).
  - Also recurring: Prialto, Zirtual, Virtudesk and REVA Global.
- **Gaps they cover that Zingo didn't**
  - A real estate VA hub page.
  - Pricing / cost content.
  - Separate pages per task (ISA, wholesale calling, tenant screening, listing coordinator).
  - "vs" and "alternatives" pages.
  - Compliance content.
  - Case studies with numbers.
  - Location pages.
  - FAQ / Service schema.
- **Closed today:** real estate VA hub, wholesale calling page, cost guide, TC vs VA comparison, Florida compliance guide, Tampa Bay location page, and FAQ/Service schema site-wide.

## 4. Work completed today

### Security
- Removed `shell.php` (webshell), `public/SS.zip` (remote-code loader), `public/error_log`, and 6 empty planted PHP files in `public/assets/**`.
- Removed the public `/clear-cache` route.
- Added a proper `.gitignore`.

### Technical SEO
- **Quirks mode:** fixed the homepage head being rendered before the doctype. Verified: the page went from `BackCompat` to `CSS1Compat`.
- **Global JSON-LD:** `Organization` + `ProfessionalService` (name, address, phone, logo, sameAs, areaServed, knowsAbout) and `WebSite`.
- **Per-page JSON-LD:**
  - `Service` + `FAQPage` + `BreadcrumbList` on 18 service pages (FAQs taken from each page's existing Q&As).
  - `BlogPosting` + `BreadcrumbList` on 21 posts.
  - `FAQPage` on the homepage and the FAQ page.
- **Open Graph:** `og:site_name`, `og:locale`, `og:type=article` on posts, and a new 1200×630 share image.
- **Caching:** replaced `?v=time()` with `filemtime()`, so CSS can now be cached by browsers.
- **Sitemap:** real `lastmod` from each file's modification time, priorities by page type, 47 URLs, retired URLs removed, new pages added.
- **`robots.txt`:** explicit allow rules for GPTBot, OAI-SearchBot, ChatGPT-User, ClaudeBot, Claude-SearchBot, PerplexityBot and Google-Extended (GEO). Disallows `/send_mail`.
- **`llms.txt`:** a summary of the business and its key pages for AI answer engines.
- **301 redirects:**

| Old URL | New URL |
|---|---|
| `/blog1` | `/blog/why-your-business-needs-a-virtual-assistant` |
| `/blog2` | `/blog/10-signs-you-need-a-virtual-assistant` (duplicate topic merged) |
| `/blog3` | `/blog/tasks-to-outsource-to-a-virtual-assistant` |
| `/blog4` | `/blog/how-to-become-a-virtual-assistant` |
| `/cold-calling-services` | real estate cold calling page (Google still had this as a referrer) |
| `/web-design`, `/services`, `/about`, `/contact` | canonical equivalents |

- **Performance:** 63 images recompressed or resized (47.4 MB → 7.6 MB), and `loading="lazy" decoding="async"` added to 126 below-the-fold images. Trimmed the Google Fonts request to the weights actually used.
- **Privacy page:** fixed the meta description quote bug.

### On-page
- New keyword-led titles (≤ ~60 characters) and meta descriptions (≤ 160 characters) on all 40 existing pages. No duplicate titles remain.
- Exactly one H1 on every page:
  - FAQ, `blog3` and `blog4` were fixed.
  - Stale years were removed from the H1s of "why your business needs a VA" and "how to become a VA".
- Descriptive alt text on all blog cards. 0 images without alt text across the 47 URLs.
- The FAQ page was rebuilt from 5 to 12 Q&As (trial, cost, start time, real estate, cold calling legality, security, time zones), using one data source for both the HTML and the schema.
- **Internal linking:**
  - The new pages were added to the header menu, footer, services hub (3 new cards) and blog index (3 new cards).
  - Contextual links were added from 9 service pages and 5 posts.
  - Result: each new service page is linked from all 47 pages, the cost guide from 11, the Florida guide from 8 and TC vs VA from 5.

### New content (6 URLs)

| URL | Type | Highlights |
|---|---|---|
| `/real-estate-virtual-assistant` | Service hub | Quick-answer block (AEO), 9 task cards, licensed vs unlicensed table, 5-step hiring process, 7 FAQs, related links |
| `/wholesale-real-estate-cold-calling` | Service | Lead types, seller qualification table, compliance-minded process, 6 FAQs |
| `/real-estate-virtual-assistant-tampa-st-petersburg-fl` | Location | Real office address, county/city service-area table, Florida-specific know-how, City `areaServed` schema |
| `/blog/real-estate-virtual-assistant-cost` | Guide | Rate table by hiring model, cost by role, hidden costs, ROI math, 5 FAQs |
| `/blog/transaction-coordinator-vs-virtual-assistant` | Guide | Comparison table, licensing, cost, which to hire first, 5 FAQs |
| `/blog/florida-real-estate-cold-calling-laws` | Guide | Laws table (TCPA, TSR, FTSA, FL Telemarketing Act), 8-step checklist, 6 FAQs, legal disclaimer |

Every new page has a direct-answer summary at the top, question-style H2/H3 headings, FAQPage schema and clear entity details (name, address, phone). These are the main levers for AEO and GEO.

## 5. Verification (local render of the production code)

- All 47 sitemap URLs return 200, with exactly one H1, a unique title, a meta description, and JSON-LD that parses.
- 0 broken internal links, 0 orphan pages.
- All 301 redirects resolve.
- Before/after screenshots (desktop at 1366 px, iPhone 13) for the homepage, cold calling page, FAQ and blog index show the same design.
- New pages render correctly on desktop and mobile, with no horizontal page scroll; wide tables scroll inside their own box.

## 6. Deployment and indexing status

- Code is on `main` (`0a52c3d`). The FTPS auto-deploy is the only way it reaches the live server, and the first deploy run failed with a connection timeout (see the deploy notes in chat). **Until a deploy succeeds, none of today's changes are live.**
- Once live:
  1. **Search Console → Sitemaps:** resubmit `https://zingoassist.us/sitemap.xml`.
  2. **URL Inspection → Request indexing**, in priority order:
     1. `/real-estate-virtual-assistant`
     2. `/faq`
     3. `/real-estate-cold-calling-services`
     4. `/wholesale-real-estate-cold-calling`
     5. `/real-estate-virtual-assistant-tampa-st-petersburg-fl`
     6. `/our-services`
     7. `/blog/real-estate-virtual-assistant-cost`
     8. `/blog/florida-real-estate-cold-calling-laws`
     9. `/blog/transaction-coordinator-vs-virtual-assistant`
     10. `/real-estate-transaction-coordinator-services`
  3. **Security issues report:** check it and, if flagged, request a review after the server is cleaned.
- Search Console is now connected to the new "Zingo Assist" OpenSEO project, so index status can be re-checked with URL Inspection at no cost.

## 7. Needs owner action
1. **Clean the live server.**
   - Delete `shell.php`, `public/SS.zip`, `public/style2.php`, `public/security.php` and any `.php` files under `public/assets/**`.
   - Change the cPanel, FTP and database passwords.
   - Ask the host for a malware scan.
2. **Fix the FTPS deploy:** check the FTP hostname and whether the host's firewall blocks GitHub.
3. **Real case studies.** None were published because no real client data was available, and invented results would hurt trust and E-E-A-T. Send 2–3 real engagements (client type, problem, tasks, measurable results, permission to publish) and we'll publish them with Review/Article schema.
4. **Testimonials.** The service pages show testimonials with specific claims (e.g. "increased our property sales by 40%"). Confirm these are real and attributable, or replace them with verified reviews (Google, Clutch).
5. **Pricing.** Publishing real starting prices would make the money page and the cost guide much stronger, because competitors that rank with pricing content state real prices.

## 8. Next SEO opportunities (prioritized)
1. **Google Business Profile** for the St. Petersburg office (if it is a staffed address), plus review generation. Clutch, G2, Real Estate Bees and Outsource Accelerator listings for citations and backlinks.
2. **More real estate service pages:**
   - Real estate ISA services
   - Listing coordinator VA
   - Tenant screening VA
   - Real estate social media VA
   - Expired/FSBO calling for agents
3. **Comparison and alternatives pages:** MyOutDesk / Virtudesk / REVA Global alternatives; ISA vs VA; offshore vs US-based VA.
4. **More informational guides:**
   - What can an unlicensed real estate assistant do in Florida
   - Tasks to delegate to a real estate VA (checklist)
   - How many cold calls per day
   - How to train a real estate VA (SOP templates as lead magnets)
5. **Refresh dated posts.** "2025" posts (web dev trends, CRM management, content marketing, SEO guides) need 2026 updates; the off-topic dev and marketing posts should be refreshed or consolidated.
6. **Performance round 2:**
   - WebP versions with `<picture>`
   - Remove unused theme CSS and JS (isotope, TweenMax, lightcase, odometer where unused)
   - Remove the extra Bootstrap 5 CDN stylesheet on the homepage (needs a visual QA pass)
   - Compress or lazy-load the 21 MB of WhatsApp MP4s
7. **Monitoring:**
   - Weekly Search Console check of striking-distance queries (position 5–20)
   - Index coverage for the new URLs
   - An AI-visibility tracker for prompts like "best real estate virtual assistant company" once OpenSEO credits are available
