# SEO plan (20 Nov 2026): implementation status

Source: *Zingo Assist SEO Plan* and *Keyword Map* (20 Nov 2026, DEVSYNX).

## Done in the codebase (weeks 1–4 site work)

| Plan item | What was done | URL |
|---|---|---|
| Homepage: real estate first H1 | H1 → "Real Estate Virtual Assistants for US Agents and Teams"; real estate intro linking to the hub; real estate meta description. Title is brand-first so the homepage does not compete with the hub for "real estate virtual assistant" | `/` |
| Homepage: "Thank You!" H2 | Popup heading changed from `<h2>` to `<p class="popup-title">`, same styling. It was on every page, not only the homepage | all pages |
| Hub: pricing, tasks by role, links to every role | New sections: role grid (6 roles, each linked), pricing per hour and per month, a sample day, tools; ROI calculator in the pricing CTA | `/real-estate-virtual-assistant` |
| Role pages: pricing, daily tasks, tools, FAQ | Pricing, "a day with your …" timeline and tools sections; an inline lead form added to the two older pages | `/real-estate-transaction-coordinator-services`, `/real-estate-isa-services`, `/listing-coordinator-virtual-assistant`, `/real-estate-cold-calling-services` |
| P1 keyword targeting | TC: title and H1 "Virtual Transaction Coordinator Services" + pricing FAQ; ISA: "Real Estate Inside Sales Agent (ISA) Services"; wholesale: "Wholesale Real Estate Cold Calling for Investors". Listing coordinator and FSBO pages already matched | as listed |
| ROI calculator on the hub | Linked from the hub pricing section and related links | `/real-estate-va-roi-calculator` |
| Off-topic pages | `noindex, follow`, removed from the sitemap and llms.txt (still reachable, links still pass) | `/business-it-support-services`, `/accounting-and-bookkeeping-services` |
| Mobile UX (found while testing) | The off-canvas menu made every inner page scroll sideways on phones; fixed globally | all pages |

**Pricing is shown as typical 2026 US market ranges, not Zingo Assist prices,** consistent with the cost guide. If you give us real Zingo rates, replace the ranges in the `pricing` blocks with them. Real prices convert better and are a stronger answer for AI search.

## Needs the owner (cannot be done from the codebase)

1. **Backlinks / disavow:** export the referring domains from Semrush (Backlink Audit → toxic domains) and send the list; we will build the `disavow.txt` (`domain:` lines) for Search Console. Google already ignores most spam links, so disavow mainly matters for the bought links. Stop all paid link packages.
2. **Split with Alpha Ahead:** on the Alpha Ahead site, 301-redirect or rewrite its US real estate pages (real estate VA, TC, ISA, cold calling, Tampa/St. Petersburg) and link to zingoassist.us as the real estate division. That is a separate site, not in this repo.
3. **Separate phone number and address (NAP):** get a number only Zingo uses. Send it and we will replace +1 424-542-7170 site-wide and in the schema. Use a real staffed address for a Google Business Profile, not a mailbox suite.
4. **Reviews:** ask clients for Google and Trustpilot reviews.
5. **Search Console:** request indexing for the upgraded pages (TC, ISA, listing coordinator, cold calling, hub) and `/faq`.

## Content plan: all five planned posts plus two extra posts are live (published 20 Nov at the owner's request)

| Post | URL | Supports |
|---|---|---|
| Real estate virtual assistant cost in 2026 | `/blog/real-estate-virtual-assistant-cost` | hub, pricing |
| Transaction coordinator vs real estate assistant | `/blog/transaction-coordinator-vs-virtual-assistant` | TC page |
| ISA scripts for expired and FSBO leads | `/blog/isa-scripts-expired-fsbo-leads` | ISA, expired & FSBO pages |
| How top teams use a VA in Follow Up Boss | `/blog/follow-up-boss-virtual-assistant` | hub, ISA |
| Real estate VA tasks checklist, interactive + PDF | `/blog/real-estate-virtual-assistant-tasks-checklist` (PDF: `/assets/downloads/real-estate-va-tasks-checklist.pdf`) | hub; link-earning asset for outreach |
| Transaction coordinator checklist: contract to close (interactive) | `/blog/transaction-coordinator-checklist` | TC page ("virtual transaction coordinator", P1) |
| Speed to lead in real estate | `/blog/speed-to-lead-real-estate` | ISA page ("inside sales agent real estate", P1) |

The checklist PDF is generated from `resources/data/re-va-checklist.json`. Run `node scripts/build_checklist_pdf.cjs` after editing the list. Choose new topics from Search Console queries as they appear.

## How results are measured

The 12-hour monitor (`docs/seo/monitoring/log.md`) tracks each P1 keyword's impressions and position from Search Console. The plan's targets (20 / 60 / 120 ranking keywords) are goals, not forecasts. On 20 Nov the site had 13 non-brand queries with impressions. Lead counts need the GA4 measurement ID to be set.
