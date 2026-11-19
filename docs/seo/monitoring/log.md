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
