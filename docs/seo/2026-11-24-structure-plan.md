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

## Roadmap (weekly steps; each one follows the 7-day rule)

| Week (Monday) | Work | Condition |
|---|---|---|
| 2 (1 Dec) | Push `/real-estate-transaction-coordinator-services` for "transaction coordinator" (2,900, KD 11) and "virtual transaction coordinator" (260, KD 3). The property management rewrite was already scheduled for 24 Nov. | none |
| 3 (8 Dec) | Rules hub `/real-estate-assistant-rules` (absorbs `/blog/what-can-an-unlicensed-real-estate-assistant-do` with a 301). `/real-estate-assistant-rules/florida` merges the 2 Florida posts with 301s. | Cite FREC; carry the strongest current Florida content over intact, because that post ranks 1 to 3. |
| 4 (15 Dec) | `/real-estate-assistant-rules/texas` (merge the Texas post with a 301) and `/real-estate-assistant-rules/california` | Cite TREC and DRE |
| 5 (22 Dec) | `/locations` hub and `/real-estate-virtual-assistant-florida` | **Owner must confirm** the St. Petersburg office, Florida clients, and the MLS/CRM list |
| 6 (29 Dec) | Georgia and North Carolina rules pages | Cite GREC and NCREC from official pages |
| 7 (5 Jan) | Arizona, New York and Colorado rules pages | Cite ADRE, NYS DOS and Colorado DRE |
| 8 (12 Jan) | `/real-estate-investor-virtual-assistant`; tools page `/tools/transaction-coordinator-checklist` (moved, with a 301) | none |
| 9 to 12 | Texas and California service pages; directories; own phone number and Google Business Profile; monthly review | Service pages **only if the owner confirms clients there** |

Header target, once the rules hub and locations exist: Services, Roles, Rules by State, Locations, Pricing, Contact.

## Needs the owner

1. **Approve or decline the 301 redirects** to Alpha Ahead: `/personal-assistance-services` to `alphaaheadllc.com/personal-assistant`, and `/virtual-business-assistance-services` to `alphaaheadllc.com/business-assistant`. They are noindexed in the meantime.
2. **Does Zingo really sell real estate SEO, web development and digital marketing?** If not, noindex `/real-estate-seo-services`, `/real-estate-web-development-services` and `/real-estate-digital-marketing-agency`.
3. **Is St. Petersburg a real staffed office?** We need a separate phone number.
4. **Which states have clients today?** This decides the Florida, Texas and California service pages.
5. **Which MLS systems and CRMs your assistants actually use.**
6. **Real pricing and 2 to 3 client results.**
