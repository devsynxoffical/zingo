# Detailed SEO plan (23 Nov 2026): implementation status

Source: *Zingo Assist Detailed SEO Plan* and *CLAUDE_CODE_PLAN_zingoassist_us.md* (23 Nov 2026, DEVSYNX).

Rules followed:
- Content and SEO only; no design changes.
- No invented prices or results.
- No em dashes in new content.
- The 7-day rule: pages edited in the last 7 days got title, meta and FAQ changes only.
- IndexNow and Bing for submissions, never the Google Indexing API.

## Done on 23 Nov (week 1 and the parts of weeks 2 to 4 that are not blocked)

| Plan item | Change | URL | Before | After |
|---|---|---|---|---|
| Noindex off-topic posts | `noindex, follow` on 9 posts; removed from the sitemap and from "related articles" | `/blog/seo-strategies`, `/blog/web-dev-trends-2025`, `/blog/digital-marketing-budget`, `/blog/crm-powered-workflow`, `/blog/crm-management-2025`, `/blog/website-redesign-checklist`, `/blog/seo-vs-ppc`, `/blog/content-marketing-tips`, `/blog/optimize-website-seo` | indexable, in sitemap | noindex, not in sitemap |
| Off-topic service pages | `noindex, follow`; removed from the sitemap. A rewrite for real estate can replace this later. | `/graphic-design-services`, `/mobile-app-development-services` | indexable | noindex |
| Clean sitemap | 11 URLs removed, 2 added | `/sitemap.xml` | 54 URLs | 45 URLs |
| Property management page (title, meta, FAQ only: last edited 17 Nov, 7-day rule) | Title, meta description and the 5 FAQs from the plan; FAQ HTML and schema built from one array so they always match | `/virtual-property-management-services` | "Virtual Property Management Assistant Services", 9 generic FAQs | "Property Management Virtual Assistants \| Zingo Assist", 9 FAQs (5 new: cost, tenant calls, software, showings, start time) |
| New guide: unlicensed assistant rules by state | Can and cannot table, state notes for TX, FL, CA, GA, AZ, NC, each linked to the regulator's source; "How a VA fits" | `/blog/what-can-an-unlicensed-real-estate-assistant-do` | did not exist | live |
| New post: Texas cold calls | Answers the Texas query with TREC's guidance and sources | `/blog/can-an-unlicensed-assistant-make-cold-calls-in-texas` | did not exist | live |
| Florida post, link both ways (FAQ only, 7-day rule) | New FAQ "Are the rules the same in other states?" linking the new guide | `/blog/unlicensed-real-estate-assistant-florida` | no link | linked both ways |
| Hub "rules by state" (FAQ only, 7-day rule) | New FAQ linking the state guide | `/real-estate-virtual-assistant` | no link | linked |
| Mobile tables | Tables with up to 3 columns fit phone screens instead of scrolling sideways | all guides | sideways scroll inside the table | fits the screen |

Checks: 45/45 sitemap URLs return 200 with one H1 each; titles are unique and under 60 characters; descriptions under 155; FAQ schema matches the visible text; no horizontal overflow on mobile; 0 JS errors.

## Scheduled (blocked by the 7-day rule)

| Date | Work |
|---|---|
| 24 Nov | Property management page full rewrite: H1 "Property Management Virtual Assistants for US Landlords and PM Companies", tasks, a day with your PM assistant, pricing (market ranges), tools (AppFolio, Buildium, Rent Manager, Yardi), Fair Housing and licensing note |
| 27 Nov | Hub "Rules by state" link block and keyword-anchor links to every role page. Role pages (TC, ISA, listing coordinator, cold calling): "Updated: November 2026" under the H1, a checklist or download link, 2 more links from blog posts. Homepage links to every role page. Florida post expansion. |
| From week 3 | Calendar posts: PM VA cost in 2026; 25 PM tasks for a VA; TC fees (flat fee vs per file); ISA vs VA; expired listing scripts; onboarding a real estate VA in 7 days |

## Important finding for the owner: Texas calling

TREC says an unlicensed assistant may not call people to find out whether they want to buy, sell or lease, even to book an appointment with an agent. If Zingo runs ISA or cold calling campaigns for Texas clients with unlicensed callers, those campaigns need a Texas license holder making the calls. Please review the ISA, cold calling and expired/FSBO pages with this in mind (owner decision); no service page claims were changed.

## Needs the owner

1. **Request indexing in Search Console** for the hub, TC, ISA, property management, listing coordinator, cold calling, the cost post, the TC checklist, the speed to lead post and the FAQ page. Then resubmit the sitemap.
2. **Canonical issue:** in Search Console, open Pages, then "Duplicate, Google chose different canonical than user". Send the URL listed there and we will fix it with a 301 or a matching canonical.
3. **Disavow:** export the referring domains (Semrush Backlink Audit) and send the list; we will build `disavow.txt`.
4. **Real hourly and monthly rates**, to replace the market ranges.
5. **A Zingo-only phone number and address**, then a Google Business Profile.
6. **2 or 3 client results** with permission.
7. **Alpha Ahead decision:** rewrite or 301 its real estate and property management pages to Zingo.
