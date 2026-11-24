# Site structure and location pages plan (24 Nov 2026): implementation status

Sources:
- `CLAUDE_CODE_STRUCTURE_zingo.md`
- *Zingo Assist Site Structure Plan* (PDF)
- `Zingo_Assist_Page_Map_24-Nov-2026.csv`

All three are from DEVSYNX, 24 Nov 2026.

Rules followed:
- Content and SEO only.
- No invented numbers.
- No em dashes.
- 7-day rule.
- IndexNow and Bing only.
- Owner-decision items wait for a yes.
- No location page is published until the owner confirms the office, clients in that state, and state facts verified from official sources.

## Week 1 (done 24 Nov)

| Item | Change | Before | After |
|---|---|---|---|
| `/blog/how-to-become-a-virtual-assistant` | `noindex, follow`, removed from sitemap and related articles | indexable (job-seeker traffic) | noindex |
| `/personal-assistance-services`, `/virtual-business-assistance-services` | `noindex, follow`, removed from sitemap. The plan's preferred 301 to alphaaheadllc.com needs owner approval. | indexable | noindex |
| `/business-it-support-services` | Already noindexed and out of the sitemap since 20 Nov. Now also removed from the header menu, which still linked it. | linked in header | not in header |
| Header services menu | Removed the 6 noindexed pages (IT support, graphic design, app development, personal assistance, bookkeeping, virtual business assistance) | 21 items | 15 items |
| Footer | "Virtual Assistance" (general) replaced by "Property Management VA"; "Site map" link added | | |
| HTML site map | New `/sitemap`, built from the same page list as `sitemap.xml` and grouped into services, tools, locations, guides and company. Labels come from each page's title. | none | live |
| XML sitemap | 3 noindexed URLs removed, `/sitemap` added | 45 URLs | 43 URLs |

Checks: 43/43 URLs return 200 with one H1 each; titles are unique and under 60 characters; descriptions under 155; no orphans or broken links; 0 JS errors; no mobile overflow.

## Weeks 2 to 12 (done 24 Nov at the owner's request: "do all weeks now")

| Week | Item | Status |
|---|---|---|
| 2 | Transaction coordinator page: "Updated: November 2026", a "What does a transaction coordinator do?" quick answer, links to the checklist, TC vs VA and the rules hub | Done |
| 2 | Property management page rewrite: H1 "Property Management Virtual Assistants for US Landlords and PM Companies", tasks covered, a typical day, pricing (market ranges), tools (AppFolio, Buildium, Rent Manager, Yardi), Fair Housing and licensing section, inline lead form | Done |
| 3 | Rules hub `/real-estate-assistant-rules` (301 from `/blog/what-can-an-unlicensed-real-estate-assistant-do`) | Done |
| 3 | `/real-estate-assistant-rules/florida`: both Florida posts merged with their full content and FAQs, and both old URLs 301 here | Done |
| 4 | `/real-estate-assistant-rules/texas` (Texas post merged, 301) and `/real-estate-assistant-rules/california` | Done |
| 6 and 7 | Georgia, North Carolina, Arizona, New York and Colorado rules pages | Done; tasks not confirmed in official guidance are marked "Not addressed" |
| 8 | `/real-estate-investor-virtual-assistant` | Done |
| 8 | Tools: checklist moved to `/tools/transaction-coordinator-checklist` (301 from the blog URL) | Done |
| 5 | `/locations` hub and `/real-estate-virtual-assistant-florida` | **Waiting for the owner** (office, clients, MLS list) |
| 9 to 12 | Texas and California service pages | **Waiting for the owner** (clients in those states) |
| 9 to 12 | Directories, own phone number, Google Business Profile | **Owner actions** |

Also done:
- Header: "Rules by State" menu item.
- Homepage: links to every role page, the investor page and the rules hub.
- Hub: rules link in the licensed vs unlicensed table and FAQ.
- ISA and listing coordinator pages: "Updated: November 2026".
- Every real estate post's related-services strip now links the property management page, the investor page and the rules hub.
- The role-page pricing sections link the rules hub.

**How the rules pages are built:**
- All 8 state pages and the hub read from one data file, `resources/data/assistant-rules.php`, so there is one place to update.
- Each page follows the plan template: in short, an allowed/not allowed table, cold calling and texting rules, a transaction coordinator section, compliance steps, FAQ, sources, related states, and "Not legal advice" with "Last reviewed".
- Facts come from three research passes against official regulator and statute sources.
- Anything not confirmed in official guidance is shown as "Not addressed" instead of guessed.
- **Re-check every 6 months (next review: May 2027).** Read the primary documents directly when network access to the regulator sites is available.

## Needs the owner

0. **Testimonials:** the TC, property management, cold calling and other service pages show testimonials with first names only (for example "Maria L., Landlord"). Confirm they are real, published reviews, or we remove them (plan: real reviews only).
1. **Approve or decline the 301 redirects** to Alpha Ahead: `/personal-assistance-services` to `alphaaheadllc.com/personal-assistant`, and `/virtual-business-assistance-services` to `alphaaheadllc.com/business-assistant`. They are noindexed in the meantime.
2. **Does Zingo really sell real estate SEO, web development and digital marketing?** If not, noindex `/real-estate-seo-services`, `/real-estate-web-development-services` and `/real-estate-digital-marketing-agency`.
3. **Is St. Petersburg a real staffed office?** We need a separate phone number.
4. **Which states have clients today?** This decides the Florida, Texas and California service pages.
5. **Which MLS systems and CRMs your assistants actually use.**
6. **Real pricing and 2 to 3 client results.**
