# Zingo Assist SEO monitoring log

Every 12 hours a scheduled run pulls Search Console data, compares it with the previous snapshot, makes one evidence-based improvement, verifies it and pushes it to `main`.

## 2026-11-18 08:40 UTC: baseline
- **Deployment:** the Nov 17–18 work is NOT live. Waiting for the manual upload or the SSH deploy.
- **Last 28 days:** 8 clicks and about 150 impressions, all from branded queries. There are no non-brand queries in positions 4–20.
- **Indexing:**
  - Indexed: home, about, blog, personal assistance and a few service pages.
  - `/faq` is still noindex (July crawl).
  - `/blog/top-5-tasks` is a www duplicate.
  - The new pages are unknown to Google.
- **Next:** once live, resubmit the sitemap, request indexing for the priority URLs and submit to IndexNow. Then track the first non-brand impressions.

## 2026-11-18 09:30 UTC: site live + indexing requests
- **Deploy:**
  - FTP deploy run #8 succeeded at 09:19 UTC. It used server hostname `s4549.lon1.stableserver.net` and uploaded the full site.
  - IndexNow then found the key file and accepted 25 URLs.
- **Automation:** every deploy now pings IndexNow for changed sitemap URLs and resubmits the sitemap to Google. Google submission needs the `GSC_SERVICE_ACCOUNT_JSON` GitHub secret.
- **One-time manual request** (owner-approved, using service account `google-indexer@contractorleads-502510`; the key was removed afterwards):
  - Search Console sitemap resubmit: HTTP 204.
  - Google Indexing API `URL_UPDATED`: 15/15 accepted (home, RE VA, ISA, FAQ, wholesale, Tampa, cost guide, unlicensed-assistant guide, FL calling laws, TC vs VA, services hub, cold calling, TC, property management, editorial policy).
  - Note: Google officially supports this API only for JobPosting/BroadcastEvent pages. "Accepted" means the request was received; it does not guarantee crawling or indexing.
- **Next:** re-inspect these URLs on the next 12-hour run to see whether their coverage state changes. Rotate the service-account key, because it was pasted in chat.

## 2026-11-18 09:40 UTC: server cleanup + deploy pipeline
- **Deploy run #14:** success with strict TLS (the server certificate verifies). Only changed files are uploaded, and search engines are notified after each deploy.
- **Server cleanup** (curl over FTPS with a verified certificate; succeeded on the 2nd attempt after a connection timeout from one runner):
  - Deleted: `shell.php`, `public/SS.zip`, `public/assets/{css/doc.php, js/info.php, js/filei.php, fonts/index.php, images/blog/info.php, images/gallery/file.php, index.blade.php, images/CRM.mhtml}`, `update_service_pages.php`, `resources/views/blog2.blade.php`, `resources/views/blog/top_5_tasks.blade.php`.
  - Not present: `public/style2.php`, `public/security.php`, `public/error_log`.
  - Caches: 72 compiled views and `bootstrap/cache/config.php` + `events.php` removed.
  - Verify step: no suspicious files left in the checked folders; root is clean of the known files.
- **Owner to review:** unknown root items `.a`, `.ab`, `php_portable/`, `devsynx/`, `build/`, `__MACOSX/` and a stray file named `D:\xampp\htdocs\zingo-assist\database\database.sqlite`.
- **Note:** some GitHub runners time out connecting to the host (likely IP filtering). Deploys retry automatically.

## 2026-11-18 12:45 UTC: 12-hour run #1
- **Deployment:** live. The last deploy (#14) succeeded and there are no pending failures.
- **Search Console:** no new data. Results still end on Nov 15 (2–3 day lag), so performance is unchanged from the baseline: brand queries only, and the homepage is #1.5 for "zingo assist".
- **Indexing changes:**
  - **Tampa/St. Pete page is indexed** (crawled 11:42 UTC today; breadcrumb rich result valid).
  - `/real-estate-isa-services` moved from unknown to "Discovered – not indexed".
  - Other new pages are still unknown.
  - `/faq` still shows the July noindex crawl.
- **Evidence:** Google is discovering URLs through the sitemap but crawling few of them. The homepage is the strongest indexed page, yet its body linked only to the four older services.
- **Change:** added a real estate intro line and in-content links on the homepage ("Our Core Services") to `/real-estate-virtual-assistant`, `/real-estate-isa-services`, `/wholesale-real-estate-cold-calling`, `/real-estate-transaction-coordinator-services` and `/real-estate-virtual-assistant-tampa-st-petersburg-fl`. Verified: 48/48 URLs pass, 0 broken links or images, desktop and mobile screenshots.
- **Next run:** check whether the homepage is recrawled and the linked pages move to crawled or indexed. Look for the first GSC data after Nov 15.

## 2026-11-18 ~20:00 UTC: ad-hoc check (owner request)
- **Newly indexed today:**
  - `/real-estate-virtual-assistant` (crawled 15:47)
  - `/real-estate-isa-services` (15:50)
  - `/wholesale-real-estate-cold-calling` (15:46)
  - `/blog/unlicensed-real-estate-assistant-florida` (16:26)
  - `/blog/florida-real-estate-cold-calling-laws` (19:37)
  - plus the Tampa page (11:42)
  - Homepage re-crawled at 10:39. All show valid breadcrumb rich results.
- **Still pending:**
  - `/blog/real-estate-virtual-assistant-cost`: unknown
  - `/our-services`, `/real-estate-cold-calling-services`: discovered, not indexed
  - `/faq`: stale July noindex, not re-crawled yet
- **GSC impressions** (fresh, partial data): Nov 15: 4, Nov 16: 5, Nov 17: 5, Nov 18: 1. Still brand queries plus "sowingo" (irrelevant, position 52). No non-brand impressions yet.

## 2026-11-19 00:45 UTC: 12-hour run #2
- **Deployment:** live. No new deploys since `ed46580` (success).
- **Search Console:** Nov 15–18 = 1 click / 16 impressions, still brand-only plus "sowingo" (irrelevant, position 52). No non-brand impressions yet; the newly indexed pages are less than a day old.
- **Indexing:**
  - **Newly indexed:** `/blog/real-estate-virtual-assistant-cost` (21:01 UTC), `/editorial-policy` (18:10 UTC).
  - **Total new real estate URLs indexed since go-live:** 8 (real estate VA, ISA, wholesale, Tampa, cost guide, unlicensed-assistant guide, FL calling laws, editorial policy).
  - **Still "Discovered – not indexed":** `/our-services`, `/real-estate-cold-calling-services`, `/real-estate-transaction-coordinator-services`, `/virtual-property-management-services`, `/blog/transaction-coordinator-vs-virtual-assistant`.
  - `/blog/tasks-to-outsource-to-a-virtual-assistant`: unknown.
  - `/faq`: still the stale July noindex.
- **Change:** none. There's no query data to act on, and the remaining items are Google's crawl queue, not on-page problems, so editing pages now would just be churn.
- **Owner action:** in Search Console, open URL Inspection and click "Request indexing" for `/faq` first (this clears the stale noindex), then `/our-services`, `/real-estate-cold-calling-services`, `/real-estate-transaction-coordinator-services`, `/virtual-property-management-services`.
- **Next:** watch for the first non-brand impressions on the indexed real estate pages. Act on titles or snippets once there is CTR or position data.

## 2026-11-19 12:41 UTC: 12-hour run #3
- **Deployment:** live. `5c96f46` (new pages and lead forms) deployed at 07:18 UTC. The live audit at 07:19 confirmed http → https 301, single-escaped titles, and the new pages return 200 and are index/follow. IndexNow accepted 17 URLs.
- **Search Console:**
  - Last 7 final days (Nov 10–16): 1 click / 17 impressions, all brand plus noise ("sowingo", "travail", "zingo search engine").
  - Daily impressions: Nov 17: 5, Nov 18: 8 (position 1.5).
  - Still no non-brand query rows. Nothing to optimise for CTR or position yet.
- **Indexing:**
  - **Newly indexed:** `/expired-fsbo-cold-calling-services` (08:46), `/real-estate-va-roi-calculator` (08:53), both about 90 minutes after deploy; `/virtual-property-management-services` (08:25, previously discovered – not indexed).
  - **New issue:** `/blog/transaction-coordinator-vs-virtual-assistant` is "Crawled – currently not indexed" after its first crawl (02:13). It is 1,067 words and linked from 6 pages. A single crawl on a young domain is not enough evidence to rewrite it; re-check next run.
  - `/listing-coordinator-virtual-assistant`: not yet known to Google.
  - `/our-services` and `/real-estate-transaction-coordinator-services` now report "unknown" (were "discovered"). This is API state noise, not a site change.
  - `/faq`: still the stale July noindex (owner action pending).
- **Change:** none. There's no query data to act on, and the new pages were already deployed today. Following the no-churn rule.
- **Owner action (unchanged):** in Search Console URL Inspection, click "Request indexing" for `/faq` first, then `/listing-coordinator-virtual-assistant`, `/real-estate-cold-calling-services`, `/real-estate-transaction-coordinator-services`, `/our-services`.
- **Next:** if the TC-vs-VA post is still crawled-not-indexed, compare its overlap with `/real-estate-transaction-coordinator-services` and differentiate it. Watch for first non-brand impressions on the indexed real estate pages.

## 2026-11-20 00:41 UTC: 12-hour run #4
- **Deployment:** live. Since the last run, `0bc8a34` (resilient lead forms) deployed successfully. The server `.env` was fixed (production mode, debug off, correct DB path, SMTP via mail.zingoassist.us). The owner confirmed the test lead emails arrived in sales@.
- **Search Console (fresh, incomplete):**
  - Nov 18: 1 click / 9 impressions. Nov 19: 0 clicks / 11 impressions (the highest day so far).
  - **First non-brand impressions:**
    - "unlicensed assistant real estate" → FL unlicensed assistant guide, **position 5**
    - "what can an unlicensed assistant do in real estate" → same guide, position 63
    - "real estate cold calling services for wholesalers" → wholesale page, position 37
    - "outsourced isa services for real estate teams" → ISA page, position 45
  - All have 1 impression each: too little data to judge CTR or position trends.
- **Indexing:** no change for the pages checked. `/faq` still has the stale noindex; listing coordinator page unknown; TC-vs-VA post still "Crawled – not indexed" (not recrawled since Nov 19 02:13); cold calling page discovered; TC services page unknown. The second inspection batch timed out.
- **Change:** none. The guide already answers the general question (H1, quick answer and task list). With 1 impression per query, editing titles now would be churn.
- **Next:** if "unlicensed assistant real estate" keeps showing at positions 3–10 with 10+ impressions, test a title that covers the general (non-Florida) intent. Re-check the TC-vs-VA post.
- **Owner action (unchanged):** request indexing in Search Console for `/faq`, `/listing-coordinator-virtual-assistant`, `/real-estate-transaction-coordinator-services`, `/real-estate-cold-calling-services`.

## 2026-11-20 12:41 UTC: 12-hour run #5
- **Search Console:** Nov 19 is now **46 impressions** (the earlier partial figure was 11), the best day so far. Average position 13.1, because most impressions are now non-brand. Still 0 non-brand clicks.
- **New non-brand queries (13 total, 1 impression each):**
  - **Unlicensed-assistant cluster:** the FL guide now ranks for 6 queries:
    - "unlicensed real estate assistant": **position 1**
    - "can an unlicensed real estate assistant show property": **position 2**
    - "unlicensed assistant real estate": **position 5**
    - MLS login-sharing question: **position 10**
    - "what can (an) unlicensed … do": positions 63 and 65
  - **Cost guide:** "property management VA cost" (44), "virtual TC pricing" (44), "real estate VA pricing" (76).
  - **Service pages:** wholesale (37), ISA (45).
- **Indexing:** `/real-estate-transaction-coordinator-services` moved from unknown to discovered. Otherwise unchanged: `/faq` still has the stale noindex, listing coordinator page unknown, TC-vs-VA post crawled-not-indexed, cold calling page discovered.
- **Change (C9):** added a direct FAQ answer, "Can an MLS subscriber share their user ID and login credentials with an unlicensed assistant?", to `/blog/unlicensed-real-estate-assistant-florida`. It is also included in the FAQPage schema (now 6 items).
  - **Reason:** a real query ranks at position 10 and the page only touched on this in a bullet.
  - **Title kept:** the head queries already rank 1–2.
  - **Validation:** position and impressions for that query over the next 14 days.
  - **Local checks:** 51/51 URLs return 200, no duplicate titles, no orphans, valid FAQ JSON-LD.
- **Next:** watch whether the "what can … do" general-intent queries stay at 60+. If they do with more impressions, test a title that covers general intent without losing the Florida rankings.

## 2026-11-21 00:41 UTC: 12-hour run #6
- **Deployment:** live; deploy run 22 (`9ee578e`, the 5 new posts) succeeded on 20 Nov at 14:21 UTC.
- **Search Console:**
  - Nov 20 is now 15 impressions at average position 18.7 (still incomplete). The higher average position means mostly non-brand impressions.
  - Nov 19 confirmed at 46.
  - **New queries:**
    - "virtual assistant roi": ROI calculator at position 38 and cost guide at 44. This is the first time the calculator has appeared.
    - "how to become an online virtual assistant": job-seeker intent, 37.
  - The unlicensed-assistant cluster holds positions 1, 2, 5 and 10.
  - All new queries have 1 impression each.
- **Cannibalization watch:** "virtual assistant roi" shows two URLs (the calculator and the cost guide). With 1 impression each this is not actionable yet; the cost guide already links to the calculator.
- **Indexing:**
  - Listing coordinator: still unknown to Google.
  - TC services: reports unknown again, after discovered yesterday.
  - Cold calling: discovered.
  - TC-vs-VA: crawled-not-indexed, no recrawl since 19 Nov.
  - `/faq`: stale noindex.
  - The 5 posts from 20 Nov are not checked yet.
  - The site-side work is done: in the sitemap and linked from every page. Google's crawl queue is the bottleneck.
  - The `GSC_SERVICE_ACCOUNT_JSON` secret is not set, so deploys do not resubmit the sitemap to Google.
- **Change:** none. One-impression signals are not enough evidence, and the pages changed yesterday need time to be recrawled.
- **Owner action:** in Search Console, request indexing for `/listing-coordinator-virtual-assistant`, `/real-estate-transaction-coordinator-services`, `/faq` and the 5 new posts. Alternatively, add the `GSC_SERVICE_ACCOUNT_JSON` secret so every deploy resubmits the sitemap.

## 2026-11-21 12:41 UTC: 12-hour run #7
- **Search Console:** Nov 20 is now **49 impressions** (average position 22.8), a new best day after Nov 19's 46. Still 0 non-brand clicks.
- **New queries, with 3 in striking distance:**
  - "isa virtual assistant for realtors pricing" → cost guide, **position 10**
  - "real estate virtual assistant service rates" → cost guide, **position 11**
  - "tasks to outsource to real estate virtual assistant" → the generic tasks post, **position 10**
  - "can an unlicensed assistant call leads texas" → FL guide, position 68
- **Movers:**
  - "real estate virtual assistant pricing" improved from 76 to 58.7 (3 impressions).
  - "unlicensed assistant real estate" averaged 37 over 2 impressions (it was 5 on one impression). This is noise at this volume.
- **Cannibalization:** pricing queries show both the cost guide and the ROI calculator. Expected; the guide ranks higher and links to the calculator.
- **Indexing:** the 3 posts checked from 20 Nov, plus the listing coordinator page, are unknown to Google. The TC services page is "discovered" again.
- **Change (C10):** added an ISA pricing answer to `/blog/real-estate-virtual-assistant-cost`. It is a new FAQ in FAQPage schema (now 6 items) plus concrete numbers in the "Cost by role" ISA bullet, linking to `/real-estate-isa-services`. "Last reviewed" was updated to 21 Nov.
  - **Reason:** a real ISA pricing query ranks at position 10, but the guide only said ISAs cost "a premium".
  - **Validation:** position for "isa virtual assistant for realtors pricing" and "service rates" over the next 14 days.
  - **Local checks:** 54/54 URLs return 200, no duplicate titles, no orphans.
- **Next:** "tasks to outsource to real estate virtual assistant" lands on the generic tasks post. If it repeats, link that post to the real estate tasks checklist, or retarget.
- **Owner:** request indexing for the 5 posts from 20 Nov and `/listing-coordinator-virtual-assistant`.

## 2026-11-22 00:41 UTC: 12-hour run #8
- **Deployment:** live; run 24 (`2bffd77`, Google preferred-source button) succeeded.
- **Indexing (big step):** all 5 posts from 20 Nov are **indexed**, crawled on 21 Nov between 23:14 and 23:28 UTC:
  - ISA scripts
  - Follow Up Boss VA
  - VA tasks checklist
  - TC checklist
  - speed to lead

  `/blog/transaction-coordinator-vs-virtual-assistant` moved from crawled-not-indexed to **indexed** (23:31).

  Still waiting:
  - `/listing-coordinator-virtual-assistant`: unknown to Google.
  - `/real-estate-transaction-coordinator-services` and `/real-estate-cold-calling-services`: discovered, never crawled. Each is linked from all 54 pages, so this is Google's crawl priority, not linking.
  - `/faq`: stale noindex.
- **Search Console:**
  - Nov 21: 14 impressions (incomplete), average position 38.2.
  - Nov 19 and Nov 20 confirmed at 46 and 49.
  - "how to become a virtual assistant" is growing (11 impressions, position 41.6); it is job-seeker intent, not buyers.
  - The unlicensed-assistant cluster is steady (positions 1–3 on two queries); general-intent variants sit at 47–68.
  - No new striking-distance queries since the last run.
- **Change (C11):** added a callout to `/blog/tasks-to-outsource-to-a-virtual-assistant` linking to `/blog/real-estate-virtual-assistant-tasks-checklist`.
  - **Reason:** "tasks to outsource to real estate virtual assistant" ranks the generic post at position 10, while the dedicated real estate checklist had only 3 internal links.
  - **Validation:** whether the checklist starts appearing for real estate task queries.
  - **Local checks:** 54/54 URLs return 200, no duplicate titles; desktop and mobile screenshots taken; 0 JS errors.
- **Owner:** request indexing for `/listing-coordinator-virtual-assistant`, `/real-estate-transaction-coordinator-services`, `/real-estate-cold-calling-services` and `/faq`. These are the only key pages Google has not crawled.

## 2026-11-22 12:41 UTC: 12-hour run #9
- **Deployment:** live; run 25 (`e56ebac`) succeeded.
- **Search Console:**
  - Nov 21 is now 33 impressions (average position 31.3, still filling in).
  - Nov 19–21 are the three best days on record: 46 / 49 / 33.
  - Still 0 non-brand clicks.
  - **New queries:** all hit the generic tasks post, plus job-seeker variants:
    - "25 tasks you can outsource to a virtual assistant" (15)
    - "outsource tasks to virtual assistants" (26)
  - **Movers:**
    - "real estate virtual assistant pricing": 4 impressions, improved from 58.7 to 54.5.
    - "can an unlicensed assistant call leads texas": 5 impressions, position 65.
    - "property management VA cost": 2 impressions, position 43.
  - **Texas query:** the Florida guide does not answer Texas rules. A Texas section would need verified TREC sources, so it is noted rather than written from memory.
- **Indexing:** no change for the money pages. Listing coordinator and TC services: unknown. Cold calling: discovered. `/faq`: stale noindex. The hub `/real-estate-virtual-assistant` is indexed but last crawled 18 Nov, so Google has not yet seen the 20 Nov pricing and roles sections.
- **Change:** none. Yesterday's internal-link change and the 20 Nov page upgrades need a recrawl before they can be measured, and no query has new striking-distance evidence.
- **Next:**
  - If the Texas query keeps growing, research TREC rules for unlicensed assistants from primary sources and decide on a short, sourced section or a separate state guide.
  - Watch the cost guide for the ISA pricing query.
- **Owner:** request indexing for `/listing-coordinator-virtual-assistant`, `/real-estate-transaction-coordinator-services`, `/real-estate-cold-calling-services`, `/faq`, and re-request `/real-estate-virtual-assistant` so Google sees its new pricing sections.

## 2026-11-23 00:41 UTC: 12-hour run #10
- **Deployment:** live; there have been no new deploys since run 25.
- **Search Console:**
  - Nov 22: 6 impressions so far (a Sunday, still incomplete). Nov 19–21 stay at 46 / 49 / 33.
  - First non-brand-blog appearance for the TC-vs-VA post: "transaction coordinator and virtual assistant resumes" (29, job-seeker intent).
  - Other new query: "common tasks to outsource to freelance VA" (88).
  - "how to become a virtual assistant": 14 impressions at 41.6.
  - No new striking-distance queries.
- **Indexing:** unchanged.
  - Listing coordinator: unknown.
  - TC services and cold calling: discovered.
  - `/faq`: stale noindex.
  - Hub: last crawled 18 Nov.
- **Change:** none. No new evidence, and recent changes still await a recrawl.
- **Owner:** request indexing for the 4 pages listed in run #9 plus the hub.

## 2026-11-23 12:41 UTC: 12-hour run #11
- **Search Console:**
  - **Nov 22 is a new record:** 50 impressions and 1 click, at average position 24.3. Nov 21 rose to 39.
  - **The posts published on 20 Nov are already earning impressions:**
    - TC checklist: "closing checklist template for transaction coordinators" at **position 11**, and "contract to close workflow template…" at **14**.
    - Speed to lead: "speed to lead real estate zanus" at **4** (3 impressions; this includes a third-party brand name), "lead response time real estate" at 29, and "real estate lead response time" at 52.
  - **Other new queries:**
    - Florida cold calling guide: "florida do not call registry" at **11**.
    - Cost guide: "real estate isa virtual assistant pricing" at 17, and "real estate virtual assistant rates" at 31.
    - TC vs VA: "transaction coordinator vs assistant" at 22.
    - ISA page: "real estate isa services" at 39.
  - **Movers:**
    - "outsource tasks to virtual assistants": 4 impressions, improved from 26 to 20.8.
    - MLS login-sharing query: improved from 10 to 8.5 (FAQ added on 20 Nov).
    - Texas unlicensed-assistant query: 7 impressions at 62.4.
- **Indexing:** the money pages are unchanged.
  - Listing coordinator: unknown.
  - TC services: discovered.
  - Cold calling: reports unknown again (the state flips).
  - `/faq`: stale noindex.
  - Hub: last crawled 18 Nov.
- **Change (C12):**
  - Added a free printable **contract-to-close template PDF** to `/blog/transaction-coordinator-checklist` (`/assets/downloads/transaction-coordinator-checklist-template.pdf`, with property, client and date fields).
  - Retitled the post "Transaction Coordinator Checklist & Template (Free PDF)" and updated the meta description.
  - The checklist data moved to `resources/data/tc-checklist.json`, so the page and the PDF share one source. `scripts/build_checklist_pdf.cjs` now builds both checklist PDFs.
  - **Reason:** both TC queries ask for a "template" and rank at 11 and 14.
  - **Validation:** position for those two queries over 14 days.
  - **Local checks:** 54/54 URLs return 200, no duplicate titles; desktop and mobile tested; checkboxes still save; 0 JS errors.
- **Next:** the Florida DNC query at 11 is close to page 1; check whether the Florida guide answers "how to register / check the Florida DNC list" directly.

## 2026-11-24 00:41 UTC: 12-hour run #12
- **Deployment:** live; run 27 (`d727e45`, 23 Nov plan work) succeeded and its URLs were submitted to IndexNow.
- **Search Console:**
  - Nov 22 is final-ish at 51 impressions and 1 click, the best day so far. Nov 23 shows 19 (incomplete).
  - **New in the top 30:**
    - "how to outsource marketing tasks to virtual assistants" → generic tasks post, position 10.
    - "real estate assistant cost" → cost guide, 27.5 (2 impressions).
  - **Steady:** "speed to lead real estate zanus" at 6 impressions, position 3.8. TC checklist template queries at 11 and 14; Florida DNC at 11; ISA pricing at 10.
- **Indexing:**
  - The 2 new guides from 23 Nov are not known to Google yet (expected, 1 day old).
  - Listing coordinator: unknown. TC services and cold calling: discovered.
- **Change:** none. Yesterday's batch (11 noindexes, 2 new guides, property management FAQs) needs a crawl first. The property management rewrite is scheduled for 24 Nov 13:30 UTC under the 7-day rule.
- **Owner:** request indexing for the 2 new guides plus the pages listed in run #9.

## 2026-11-24 12:40 UTC: 12-hour run #13
- **Deployment:** live; run 29 (`b28e77e`, 24 Nov structure plan) succeeded and its URLs were submitted to IndexNow.
- **Search Console:**
  - **Nov 23: 90 impressions and 4 clicks, the best day so far** (Nov 22: 51 and 1). Clicks went to the homepage (2), graphic design (1) and the Tampa page (1).
  - **New in the top 30:**
    - "follow up boss virtual assistant" → FUB post, position 14.
    - "expired & fsbo leads" → ISA scripts post, 14.
    - "real estate assistant pricing" → cost guide, 16.
  - **Steady:** MLS login query at 8; Florida DNC at 11; TC checklist template queries at 11 and 14.
  - GSC still reports the old Florida and generic rules post URLs. They now 301 to the rules pages, so data should move over in the coming days.
- **Indexing:**
  - Rules hub and Florida rules page: unknown (new today).
  - Property management page: indexed, recrawled 24 Nov 08:44, after the rewrite was deployed.
  - TC services: discovered. Listing coordinator: unknown.
- **Change (C18):**
  - Two links with the generic anchor "what an unlicensed real estate assistant can do" pointed to the Florida rules page after the merge. They now point to the rules hub `/real-estate-assistant-rules`. Pages: the ISA scripts post and the VA tasks checklist.
  - Links whose anchor text says "in Florida" stay on the Florida page.
  - **Checks:** both pages return 200, and the `#cold-calling-laws` anchor exists on the Florida page.
- **Next:** let today's large batch get crawled; watch the redirected Florida queries move to `/real-estate-assistant-rules/florida`.
- **Owner:** request indexing in GSC for `/real-estate-assistant-rules`, `/real-estate-assistant-rules/florida`, `/real-estate-investor-virtual-assistant`, TC services and listing coordinator. Owner decisions are in `docs/seo/2026-11-24-structure-plan.md`.

## 2026-11-25 00:40 UTC: 12-hour run #14
- **Deployment:** live; run 30 (`1c031d2`, C18 link fix) succeeded and its URLs were submitted to IndexNow.
- **Search Console:**
  - **Nothing new to act on yet.** Nov 23 is now final-ish at 92 impressions and 4 clicks (best day).
  - Nov 24 shows 26 impressions and 0 clicks, which is incomplete (2 to 3 day lag).
  - The 7-day query view (Nov 16 to 22) has no change from run #13.
- **Indexing:**
  - The hub and the ISA page are indexed, last crawled 18 Nov.
  - TC services: discovered, not indexed.
  - All 24 Nov pages are still unknown to Google, as expected one day after launch:
    - the rules hub and the Florida and Texas rules pages
    - the investor VA page
    - `/tools/transaction-coordinator-checklist`
  - Listing coordinator and cold calling: unknown.
- **Change:** none. The 24 Nov batch (49 URLs, 5 redirects) has to be crawled before new data can justify another edit.
- **Next:** in the next run, check whether Google has picked up the 301s (old Florida URLs leaving the GSC reports) and whether the rules pages are discovered.
- **Owner:** request indexing in GSC for the 7 unknown or discovered pages listed above. This is the only way to speed up Google, because IndexNow only covers Bing.

## 2026-11-25 12:41 UTC: 12-hour run #15
- **Deployment:** live.
  - Run 31 (`424c9fe`) deployed 2 new guides: property management VA cost and transaction coordinator fees.
  - Run 32 (`1a96a6c`) shortened 22 meta descriptions and 5 titles.
  - Both succeeded and their URLs were submitted to IndexNow.
- **Search Console:**
  - Nov 24 is at 58 impressions and 0 clicks (still incomplete).
  - Nov 23 holds at 92 impressions and 4 clicks.
  - Nov 25 has no data yet.
  - Queries for Nov 23 to 25:
    - "outsource tasks to virtual assistants" (11 impressions, position 21.8)
    - "real estate virtual assistant pricing" → cost guide (9, 36.1)
    - "things to outsource to a virtual assistant" (8)
    - "expired & fsbo leads" (14.5)
    - "follow up boss virtual assistant" (14)
  - New: "real estate virtual assistant sop template" → VA tasks checklist (34.5).
  - "property management virtual assistant cost" still goes to the general cost guide (position 49), because the new property management cost post is not known to Google yet.
- **Indexing:**
  - Hub and ISA page: indexed.
  - Property management page: indexed, crawled 24 Nov.
  - TC services: discovered.
  - Still unknown to Google:
    - the rules hub and Florida rules page
    - the investor VA page
    - the listing coordinator page (correct URL `/listing-coordinator-virtual-assistant`; earlier runs inspected a non-existent URL)
    - the 2 new guides
- **Change:** none. Two batches went live today (2 guides, 27 title and description edits). They need to be crawled before their effect shows.
- **Next:**
  - Check when the PM cost guide replaces the general cost guide for "property management virtual assistant cost".
  - Watch the click-through rate on the pages whose descriptions changed.
- **Owner:**
  - Request indexing in GSC for the rules hub, the Florida rules page, the investor page, the listing coordinator page, the 2 new guides and TC services.
  - Start Step 1 of `docs/seo/link-building-plan.md`.

## 2026-11-26 00:41 UTC: 12-hour run #16
- **Deployment:** live, no new deploy since run #15 (latest is run 32, `1a96a6c`).
- **Search Console:**
  - Nov 24 is final-ish at 62 impressions and 0 clicks.
  - Nov 25 shows 33 impressions (incomplete), but average position improved to 12. Nov 24 was at 23.
  - "speed to lead real estate zanus" (a query that includes another company's product name) has 9 impressions at position 3.7.
  - "outsource tasks to virtual assistants" moved from 21.8 to 17.3.
  - Nothing else is new.
- **Indexing:**
  - **The rules hub `/real-estate-assistant-rules` is now indexed**, crawled 25 Nov 19:48 and found through the header link.
  - Still unknown to Google:
    - the Florida and Texas rules pages
    - the investor page
    - the listing coordinator page
    - both new guides
  - TC services flipped from discovered to unknown again.
- **Change:** none. The site went through 2 deploys yesterday; the hub being indexed shows crawling is under way.
- **Next:**
  - Check whether Google picks up the state pages from the indexed hub.
  - Check whether the redirected Florida URLs drop out of the GSC reports.
- **Owner:**
  - Request indexing in GSC for the pages still unknown.
  - Start Step 1 of the link-building plan.

## 2026-11-26 12:41 UTC: 12-hour run #17
- **Deployment:** live (run 32, `1a96a6c`); this run's change deploys with its own commit.
- **Search Console:**
  - Nov 25 is at 79 impressions and 0 clicks (still incomplete), with average position 19.2. That is the best position of any day so far.
  - Nov 24 is final at 62 impressions.
  - Movers:
    - "outsource tasks to virtual assistants": 17.3 → 11.5.
    - "what tasks can i outsource to a virtual assistant": position 8.
  - New queries:
    - "what are must-have sops for real estate virtual assistants?" → VA tasks checklist, position 5.
    - "real estate virtual assistant salary" → cost guide, 18.
    - "virtual assistant rate calculator" → ROI calculator, 19.
  - "speed to lead real estate zanus" (another company's product name) is at 16 impressions, position 3.8.
- **Indexing:**
  - **The investor VA page is now indexed**, crawled 26 Nov 03:16 and found through the homepage link.
  - The rules hub is still indexed.
  - TC services is back to "discovered".
  - Still unknown to Google:
    - the Florida and Texas rules pages
    - the listing coordinator page
    - both new guides
- **Change (C21):** added an FAQ, "What SOPs does a real estate virtual assistant need?", to `/blog/real-estate-virtual-assistant-tasks-checklist`. It appears in both the visible FAQ and the schema, and the hand-over steps now point to it.
  - **Reason:** two SOP queries land on this page (positions 5 and 34.5) and it had no direct answer.
  - **Checks:** schema matches the visible text, one H1, no mobile overflow, 0 JS errors.
- **Next:** check the position of the SOP queries over 14 days.
- **Owner:** request indexing in GSC for:
  - the Florida and Texas rules pages
  - the listing coordinator page
  - the 2 new guides
  - TC services
