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
