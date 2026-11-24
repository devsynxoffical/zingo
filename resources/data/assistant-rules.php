<?php

// Unlicensed real estate assistant rules by state.
// Every fact here is taken from the regulator or statute linked in that state's 'sources'.
// Tasks we could not confirm in official guidance are marked 'Not addressed'. Re-check every 6 months.
// verdicts: Yes | Limited | No | Not addressed

return [
    'reviewed' => 'November 24, 2026',
    'federal' => [
        'Federal rules apply in every state: no telemarketing calls to homes before 8 a.m. or after 9 p.m. in the called person&#39;s local time (47 CFR 64.1200).',
        'Do not call numbers on the National Do Not Call Registry unless an exemption applies, and honor do-not-call requests from anyone you call.',
        'Autodialed or prerecorded marketing calls and texts to cell phones need the person&#39;s prior express written consent under the TCPA.',
    ],
    'federal_sources' => [
        ['FCC: Stop unwanted robocalls and texts', 'https://www.fcc.gov/consumers/guides/stop-unwanted-robocalls-and-texts'],
        ['47 CFR 64.1200 (eCFR)', 'https://www.ecfr.gov/current/title-47/chapter-I/subchapter-B/part-64/subpart-L/section-64.1200'],
    ],
    'tasks' => ['Scheduling appointments', 'Prospecting or cold calls', 'Answering property questions', 'Showing property', 'Open houses', 'MLS data entry', 'Contract paperwork', 'Commission or closing pay'],
    'states' => [

        'florida' => [
            'name' => 'Florida', 'regulator' => 'Florida Real Estate Commission (FREC)', 'short' => 'FREC',
            'summary' => 'Florida lets an unlicensed assistant handle administrative work under a licensee&#39;s supervision, and FREC&#39;s informal list of permitted activities includes answering and forwarding calls, scheduling appointments for the licensee, MLS input and assembling closing documents. An unlicensed assistant may not show property, negotiate or be paid a share of a commission (Florida Statutes 475.25). Cold calls are governed by the Florida Telephone Solicitation Act: calls only between 8 a.m. and 8 p.m. and no more than three calls in 24 hours on the same subject.',
            'tasks' => [
                ['Yes', 'FREC&#39;s list allows scheduling appointments for the licensee to show listed property.'],
                ['Not addressed', 'Not on FREC&#39;s list. If an assistant calls, keep it to scripted appointment setting and follow the Florida calling law below; confirm with your broker.'],
                ['Not addressed', 'Price, terms and advice stay with the licensee.'],
                ['No', 'Showing property is licensed activity.'],
                ['Limited', 'May be present only for security and to hand out brochures and materials.'],
                ['Yes', 'FREC&#39;s list allows submitting listings and changes to the MLS.'],
                ['Limited', 'May assemble closing documents and type contract forms for the licensee&#39;s approval.'],
                ['No', 'Licensees may not share real estate compensation with an unlicensed person (s. 475.25(1)(h)).'],
            ],
            'calling' => [
                'Florida Telephone Solicitation Act (s. 501.059): solicitation calls only between 8 a.m. and 8 p.m. in the called person&#39;s time zone.',
                'No more than three calls in 24 hours to the same person on the same subject, from any number.',
                'Autodialed or recorded-message sales calls and texts need prior express written consent.',
                'Florida keeps its own Do Not Call list, run by the Florida Department of Agriculture and Consumer Services (FDACS).',
            ],
            'tc' => [
                'FREC guidance does not mention transaction coordinators by name. The general rule applies: licensees may not help an unlicensed person practice real estate (s. 475.25(1)(a)), so a coordinator&#39;s work must stay administrative.',
            ],
            'bodies' => ['rules.bodies.florida_assistant', 'rules.bodies.florida_calling'],
            'faqs' => [
                
        ['Can an unlicensed assistant show property in Florida?', 'No. Under the Florida Real Estate Commission (FREC) guidance, an unlicensed assistant may not show property or give a buyer or tenant access to a listed property. They may schedule showings for the licensee and may drive a customer to a property, but the licensee must handle the showing.'],
        ['Can an unlicensed assistant host an open house in Florida?', 'An unlicensed assistant may be present at an open house for security and to hand out brochures and written materials, but may not answer questions about the property. All questions should be directed to the licensee.'],
        ['Can an unlicensed real estate assistant be paid a commission in Florida?', 'No. An unlicensed assistant should not be paid a commission, closing bonus or any compensation based on a real estate transaction. A fixed hourly wage or salary that is not tied to transactions is the usual arrangement; confirm the setup with your broker or a Florida real estate attorney.'],
        ['Can an unlicensed assistant make cold calls in Florida?', 'Assistants commonly make scripted calls to set appointments and gather information for the licensee, but they may not discuss terms, give opinions on value or negotiate. Every call must also follow the TCPA, the National and Florida Do Not Call lists and Florida calling-hour limits.'],
        ['Can an MLS subscriber share their user ID and login credentials with an unlicensed assistant?', 'Generally no. MLS rules typically prohibit subscribers from sharing their user ID and password with anyone, including their own assistant, and many MLSs fine violations. Instead, ask your MLS whether it offers a separate assistant or clerical login that you sponsor and supervise. With that access, an unlicensed assistant can enter and update listings for your approval, which FREC guidance permits under your supervision.'],
        ['Are the rules the same in other states?', 'No. Each state sets its own rules. Texas, for example, does not allow unlicensed assistants to make prospecting calls, while California allows limited general-interest calls with the broker&#39;s consent. Compare Texas, Florida, California, Georgia, Arizona and North Carolina in our guide <a href="' . route('rules.hub') . '">what can an unlicensed real estate assistant do?</a>'],
        ['Can a virtual assistant do these tasks remotely?', 'Yes. Most permitted tasks, such as answering and forwarding calls, MLS input, scheduling, preparing ads and flyers for approval, assembling closing documents and following up on loan commitments, can be done remotely by a trained virtual assistant under the licensee&#39;s supervision.'],
                
        ['Is cold calling legal for real estate agents in Florida?', 'Yes. Cold calling is legal in Florida when you follow the federal TCPA and Telemarketing Sales Rule, the National Do Not Call Registry, Florida\'s Telephone Solicitation Act (s. 501.059) and Florida\'s telemarketing rules, including calling hours, call-frequency limits, caller identification and opt-out requests.'],
        ['What time can you cold call in Florida?', 'Florida limits commercial telephone solicitation calls to between 8 a.m. and 8 p.m. in the called person\'s local time. Federal rules allow 8 a.m. to 9 p.m., so follow the stricter Florida window when calling Florida numbers.'],
        ['How many times can you call the same person in Florida?', 'Florida law limits commercial solicitation calls to no more than three calls to the same person within 24 hours on the same subject matter, regardless of which phone number you call from.'],
        ['Do I need to scrub against the Florida Do Not Call list?', 'Yes. Florida maintains its own state Do Not Call list through the Florida Department of Agriculture and Consumer Services, separate from the National Do Not Call Registry. Scrub your lists against both, plus your own internal do-not-call list.'],
        ['Can I use an auto-dialer or AI voice for real estate cold calls?', 'Calls made with an automated system that selects and dials numbers, and calls using a prerecorded or AI-generated voice, generally require the recipient\'s prior express written consent. Most cold-calling teams therefore use human callers with manually initiated or compliant click-to-call dialers. Get legal advice before using automation.'],
        ['What are the penalties for violating the TCPA or FTSA?', 'Both the TCPA and Florida\'s FTSA allow consumers to sue for $500 per violation, which can be tripled to $1,500 for willful or knowing violations. Because damages are per call, a single non-compliant campaign can create large exposure.'],
            ],
            'sources' => [
                ['Florida Realtors: Unlicensed assistants (FREC list)', 'https://www.floridarealtors.org/law-ethics/library/unlicensed-assistants'],
                ['Florida Statutes 501.059: Telephone solicitation', 'https://www.leg.state.fl.us/statutes/index.cfm?App_mode=Display_Statute&URL=0500-0599%2F0501%2FSections%2F0501.059.html'],
                ['FDACS: Florida Do Not Call', 'https://www.fdacs.gov/Business-Services/Florida-Do-Not-Call'],
                ['FDACS: Telemarketing', 'https://www.fdacs.gov/Consumer-Resources/Consumer-Rights-and-Responsibilities/Telemarketing'],
            ],
            'related' => ['texas', 'georgia'],
        ],

        'texas' => [
            'name' => 'Texas', 'regulator' => 'Texas Real Estate Commission (TREC)', 'short' => 'TREC',
            'summary' => 'Texas is one of the strictest states. TREC says an unlicensed assistant may not call people to find out whether they want to buy, sell or lease, even just to set an appointment with an agent; only license holders may solicit. An unlicensed assistant may do office work, data entry and contract typing at a license holder&#39;s direction, arrange showing appointments for the agent who will show, and confirm the advertised size, price and terms of a property if they say they are unlicensed.',
            'tasks' => [
                ['Yes', 'May arrange a showing appointment for the license holder who will show the property.'],
                ['No', 'May not make calls to find out whether someone wants to buy, sell or lease, even to set an appointment.'],
                ['Limited', 'May confirm advertised size, price and terms if identified as unlicensed; other questions go to a license holder (TREC Rule 535.5(f)).'],
                ['No', 'Includes unlocking or giving a prospective buyer or tenant access; do not share access codes.'],
                ['No', 'Hosting an open house is licensed activity.'],
                ['Limited', 'Data entry only at a license holder&#39;s direction.'],
                ['Limited', 'May type contracts at a license holder&#39;s direction; may not review a contract or facilitate a transaction.'],
                ['No', 'TREC may discipline anyone who pays an unlicensed person for licensed activity.'],
            ],
            'calling' => [
                'Texas No-Call List (Public Utility Commission): telemarketers may not call a number that has been on the list for more than 60 days.',
                'Texas Telephone Solicitation Act (Business and Commerce Code ch. 302) generally requires registration with the Secretary of State; SB 140 extended it to text messages from September 1, 2025. Check whether an exemption applies to you.',
                'PUC rules restrict automatic dial announcing devices to 9 a.m. to 9 p.m. on weekdays and Saturdays and noon to 9 p.m. on Sundays.',
            ],
            'tc' => [
                'TREC says transaction coordinators are not defined in its rules and statutes. Their work is usually administrative, so a license is typically not required, but TREC warns their activities "might blur the line" into brokerage. A title does not change what an unlicensed person may do.',
            ],
            'bodies' => ['rules.bodies.texas_calls'],
            'faqs' => [
                
        ['Can an unlicensed assistant make cold calls in Texas?', 'Not to prospect. TREC says an unlicensed assistant may not call people to find out whether they want to buy, sell or lease, even to set up an appointment with a license holder, because soliciting is licensed activity. Prospecting calls must be made by a license holder.'],
        ['Can an unlicensed assistant set appointments in Texas?', 'An unlicensed assistant may arrange a showing appointment for the license holder who will show the property. Calls whose purpose is to find out whether someone wants to buy, sell or lease are solicitation and need a license.'],
        ['Can an unlicensed assistant answer questions about a listing in Texas?', 'Yes, within limits. If the assistant identifies as unlicensed, TREC allows them to confirm the size, price and terms of a property that has been advertised. Other questions go to a license holder.'],
        ['What happens if an unlicensed assistant does licensed work in Texas?', 'The broker and agents can be disciplined by TREC, and the unlicensed person can face criminal charges for unlicensed activity.'],
            ],
            'sources' => [
                ['TREC: What can unlicensed office personnel or an unlicensed assistant do?', 'https://www.trec.texas.gov/what-can-unlicensed-office-personnel-or-unlicensed-assistant-do'],
                ['TREC: What transaction coordinators and showing agents are allowed to do', 'https://www.trec.texas.gov/article/working-multiple-brokerages-what-transaction-coordinators-and-showing-agents-are-allowed-do'],
                ['TREC: Can you use unlicensed individuals to help with your Texas real estate transactions?', 'https://www.trec.texas.gov/article/can-you-use-unlicensed-individuals-help-your-texas-real-estate-transactions-it-depends'],
                ['Texas PUC: Telemarketers and the Texas No-Call List', 'https://www.puc.texas.gov/consumer-help/telecommunications/telemarketers/'],
                ['Texas Secretary of State: Telephone solicitation FAQ', 'https://www.sos.state.tx.us/statdoc/faqs3400.shtml'],
            ],
            'related' => ['florida', 'california'],
        ],

        'california' => [
            'name' => 'California', 'regulator' => 'California Department of Real Estate (DRE)', 'short' => 'DRE',
            'summary' => 'California&#39;s DRE guidelines let unlicensed assistants do administrative work with the broker&#39;s knowledge and consent. They may make limited cold contacts to gauge general interest in a broker&#39;s services, but may not solicit a specific property, try to persuade anyone to use the broker, show property, or discuss price, terms or features. Paying an unlicensed person for licensed acts is unlawful.',
            'tasks' => [
                ['Yes', 'May schedule appointments for the licensee.'],
                ['Limited', 'Only to develop general information about interest; no solicitation of a specific property and no attempt to induce the person to use the broker.'],
                ['No', 'May not discuss price, terms or features of a property.'],
                ['No', 'May not show or exhibit property.'],
                ['Limited', 'With the principal&#39;s consent: place signs, greet the public, hand out preprinted materials and arrange appointments with the licensee.'],
                ['Not addressed', 'Not covered in the DRE guidelines we reviewed.'],
                ['Limited', 'May prepare documents for licensee review and deliver them for signature without discussing their content.'],
                ['No', 'Paying an unlicensed person for licensed acts is unlawful (Business and Professions Code 10137).'],
            ],
            'calling' => [
                'California&#39;s do-not-call law (Business and Professions Code 17590 to 17594) uses the California numbers on the National Do Not Call Registry; your list must be refreshed from the FTC at least every 3 months.',
                'Telephonic sellers must register with the Attorney General, but real estate licensees are excluded when the transaction is governed by the Real Estate Law (B&amp;P 17511.1).',
            ],
            'tc' => [
                'The DRE does not address the title "transaction coordinator". The general rule applies: unlicensed people may not perform any activity that requires a real estate license, so a coordinator&#39;s work must stay administrative.',
                'A March 2026 DRE advisory adds that using AI tools to carry out licensed activity may be treated like having an unlicensed assistant do it.',
            ],
            'faqs' => [
                ['Can an unlicensed assistant make cold calls in California?', 'Only in a limited way. Under the DRE guidelines, with the broker&#39;s knowledge and consent, an assistant may cold contact people to gauge general interest in the broker&#39;s services. The call may not solicit a specific property and may not try to persuade the person to use the broker; interested people go to a licensee.'],
                ['Can an unlicensed assistant work an open house in California?', 'With the principal&#39;s consent, an assistant may place signs, greet visitors, hand out preprinted materials and arrange appointments with the licensee. They may not show the property or discuss price, terms or features.'],
                ['Can an unlicensed assistant prepare a CMA in California?', 'The DRE guidelines allow an assistant to prepare a comparative market analysis or ads for the licensee&#39;s approval.'],
                ['Can I pay my assistant a bonus per closing in California?', 'No. Paying an unlicensed person for activity that requires a license is unlawful under Business and Professions Code 10137. Pay hourly or a salary.'],
                ['Are the DRE guidelines law?', 'No. They are guidance, but following them gives brokers a safe harbor. The license law itself is in the Business and Professions Code.'],
            ],
            'sources' => [
                ['DRE: Guidelines for Unlicensed Assistants (updated 2018)', 'https://www.dre.ca.gov/files/pdf/faqs/guide_unlic_asst.pdf'],
                ['DRE: Unlicensed administrative assistants', 'https://dre.ca.gov/Licensees/UnlicensedAssistants.html'],
                ['DRE Advisory: AI in California real estate (March 2026)', 'https://www.dre.ca.gov/Licensees/Advisories/Advisory_2026_03_17_AI_in_California_Real_Estate.html'],
                ['California B&amp;P Code 17590: Do Not Call', 'https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=BPC&sectionNum=17590.'],
                ['California Attorney General: Telephonic seller registration', 'https://www.oag.ca.gov/consumers/general/telreg'],
            ],
            'related' => ['texas', 'arizona'],
        ],

        'georgia' => [
            'name' => 'Georgia', 'regulator' => 'Georgia Real Estate Commission (GREC)', 'short' => 'GREC',
            'summary' => 'Georgia&#39;s rule on support personnel (GREC Rule 520-1-.07) says unlicensed staff may not perform any real estate brokerage activities and may do only ministerial duties that do not require discretion or their own judgment. The firm must have a written agreement with each assistant that sets out duties and pay. GREC&#39;s list of what support personnel may and may not do is not all-inclusive, so read the rule before assigning a task.',
            'tasks' => [
                ['Limited', 'Ministerial scheduling is generally treated as support work; confirm against the rule.'],
                ['Not addressed', 'Covered by the rule&#39;s lists; read Rule 520-1-.07 before assigning calls.'],
                ['Not addressed', 'Anything needing judgment or discretion is off limits.'],
                ['Not addressed', 'Covered by the rule&#39;s lists; read Rule 520-1-.07.'],
                ['Not addressed', 'Read Rule 520-1-.07.'],
                ['Not addressed', 'Data entry is ministerial; confirm with your broker.'],
                ['Limited', 'Ministerial handling only; no discretion or advice.'],
                ['Not addressed', 'Pay terms must be in the written agreement required by the rule.'],
            ],
            'calling' => [
                'Georgia&#39;s Do Not Call list has been merged into the National Do Not Call Registry; civil penalties can reach $5,000 per violation.',
                'The Georgia Public Service Commission says live telephone solicitors may not call before 8 a.m. or after 9 p.m.',
                'Georgia&#39;s telephone solicitation law (O.C.G.A. 46-5-27) covers calls about the purchase or rental of real property, and blocking caller ID on solicitation calls is illegal.',
            ],
            'tc' => [
                'A June 2026 GREC newsletter names the transaction coordinator as unlicensed support that requires care, and says a coordinator&#39;s services are "an extension of the Licensee using them". The licensee answers for the coordinator&#39;s work.',
            ],
            'faqs' => [
                ['What can an unlicensed assistant do in Georgia?', 'Only ministerial duties that do not require discretion or the assistant&#39;s own judgment, under GREC Rule 520-1-.07. Unlicensed support personnel may not perform any real estate brokerage activities.'],
                ['Do I need a written agreement with my assistant in Georgia?', 'Yes. The rule requires a written agreement with support personnel that covers their duties and compensation, and GREC has cited licensees who did not have one.'],
                ['Who is responsible for an unlicensed assistant in Georgia?', 'The firm and the licensee. GREC treats a transaction coordinator&#39;s services as an extension of the licensee who uses them.'],
                ['What are the calling hours in Georgia?', 'The Georgia Public Service Commission says live solicitors may not call before 8 a.m. or after 9 p.m., and federal rules set the same window.'],
                ['Is Georgia&#39;s list of permitted tasks complete?', 'No. GREC says its lists are not all-inclusive, so when in doubt treat the task as licensed and ask your broker.'],
            ],
            'sources' => [
                ['GREC Rule 520-1-.07 (support personnel)', 'https://grec.state.ga.us/wp-content/uploads/pdfs/About/520-1-%2007%20For%20the%20Website.pdf'],
                ['GREC RENews, June 2026 (transaction coordinators)', 'https://grec.state.ga.us/wp-content/uploads/pdfs/About/newsarticles/2026GRECRENewsJUNE.pdf'],
                ['Georgia Consumer Protection: Do Not Call law', 'https://consumer.georgia.gov/consumer-topics/do-not-call-law'],
                ['Georgia PSC: Telephone solicitation', 'https://psc.ga.gov/about-the-psc/consumer-corner/telephone/consumer-rights/telephone-solicitation/'],
            ],
            'related' => ['florida', 'north-carolina'],
        ],

        'north-carolina' => [
            'name' => 'North Carolina', 'regulator' => 'North Carolina Real Estate Commission (NCREC)', 'short' => 'NCREC',
            'summary' => 'North Carolina lets brokers use unlicensed assistants for administrative tasks that do not require a license, under the broker&#39;s supervision. NCREC&#39;s guidance allows forwarding calls and texts, scheduling showings, getting keys, handling closing documents and answering basic questions from the broker&#39;s promotional materials. Showing property for sale to buyers requires a license; showing rentals the broker manages to prospective tenants is allowed.',
            'tasks' => [
                ['Yes', 'May schedule showings.'],
                ['Not addressed', 'Not covered in the NCREC bulletin; NC Realtors reports the Commission&#39;s view that unlicensed employees may not solicit business.'],
                ['Limited', 'Basic questions answered from information the broker supplied in promotional materials.'],
                ['Limited', 'No showing of property for sale to buyers; may show rentals the broker manages to prospective tenants.'],
                ['Not addressed', 'Not covered in the guidance we reviewed.'],
                ['Not addressed', 'Not covered in the guidance we reviewed.'],
                ['Limited', 'May handle closing documents.'],
                ['Not addressed', 'Confirm with your broker-in-charge.'],
            ],
            'calling' => [
                'North Carolina&#39;s telephone solicitation law covers voice and text messages (G.S. 75-101).',
                'No solicitation calls before 8 a.m. or after 9 p.m., and no calls to numbers on the Do Not Call Registry unless an exception in G.S. 75-103 applies (G.S. 75-102).',
                'Unsolicited calls using an automatic dialing and recorded message player are restricted (G.S. 75-104).',
                'Telephonic sellers register with the Secretary of State 10 days before calling (G.S. 66, Article 33); check whether an exemption applies.',
            ],
            'tc' => [
                'NCREC does not mention transaction coordinators by name. Anyone engaging in real estate transactions as an agent for another needs an active license, so a coordinator&#39;s work must stay administrative.',
            ],
            'faqs' => [
                ['What can an unlicensed assistant do in North Carolina?', 'Administrative tasks that do not require a license, such as forwarding calls and texts, scheduling showings, getting keys, handling closing documents and answering basic questions using the broker&#39;s promotional materials.'],
                ['Can an unlicensed assistant show property in North Carolina?', 'Not property for sale. NCREC guidance allows an unlicensed assistant to show rental property the broker manages to prospective tenants.'],
                ['Can an unlicensed assistant make cold calls in North Carolina?', 'The NCREC bulletin does not cover it, and NC Realtors reports the Commission&#39;s view that unlicensed employees may not solicit business. Treat prospecting as licensed work unless your broker-in-charge confirms otherwise.'],
                ['What are North Carolina&#39;s calling hours?', 'Telephone solicitations are allowed only between 8 a.m. and 9 p.m. under G.S. 75-102, and the law covers texts as well as calls.'],
                ['Who supervises an unlicensed assistant in North Carolina?', 'The broker-in-charge, who must make sure unlicensed staff do not perform acts that require a license.'],
            ],
            'sources' => [
                ['NCREC: Unlicensed assistants, drawing the line', 'https://bulletins.ncrec.gov/unlicensed-assistants-drawing-the-line-between-what-they-can-and-cannot-do/'],
                ['NCREC: Licensing jurisdiction', 'https://www.ncrec.gov/Licensing/Jurisdiction'],
                ['NC Realtors: May an unlicensed assistant complete an offer to purchase?', 'https://www.ncrealtors.org/?p=25841'],
                ['N.C.G.S. 75-102: Telephone solicitations', 'https://www.ncleg.gov/EnactedLegislation/Statutes/PDF/BySection/Chapter_75/GS_75-102.pdf'],
                ['NC Secretary of State: Telephonic seller registration', 'https://sosnc.gov/divisions/telephonic_seller_registration/general_information'],
            ],
            'related' => ['georgia', 'florida'],
        ],

        'arizona' => [
            'name' => 'Arizona', 'regulator' => 'Arizona Department of Real Estate (ADRE)', 'short' => 'ADRE',
            'summary' => 'Arizona&#39;s Substantive Policy Statement 2025.02 defines an unlicensed assistant as someone hired by a licensee who does not perform any activity that requires a license, and requires the employing broker to keep written policies so assistants stay within that line. Clerical work such as answering phones and forwarding calls is allowed under supervision. Substantive policy statements are advisory, so read the current statement and your broker&#39;s policy.',
            'tasks' => [
                ['Yes', 'An Arizona Attorney General opinion found unlicensed call-center staff could schedule rental viewings.'],
                ['Not addressed', 'Not covered in the guidance we reviewed.'],
                ['Limited', 'The same AG opinion allowed answering basic property questions.'],
                ['No', 'Showing is licensed activity. Arizona REALTORS describes ADRE guidance allowing an assistant only to unlock a home for a licensee.'],
                ['Not addressed', 'Not covered in the guidance we reviewed.'],
                ['Not addressed', 'Not covered in the guidance we reviewed.'],
                ['Not addressed', 'Not covered in the guidance we reviewed.'],
                ['Not addressed', 'Confirm with your designated broker.'],
            ],
            'calling' => [
                'Arizona&#39;s telephone solicitation law (A.R.S. 44-1271 and following) gives real estate licensees a limited registration, not a full exemption.',
                'A.R.S. 44-1282 bars calls to numbers on the National Do Not Call Registry, with limited exceptions for real estate licensees (consent, referral or a prior relationship).',
                'Arizona adopts the federal telemarketing rules, so the federal 8 a.m. to 9 p.m. window applies.',
            ],
            'tc' => [
                'ADRE guidance we reviewed does not mention transaction coordinators, and a 2021 bill to allow brokers to pay licensed or unlicensed coordinators did not pass. Keep a coordinator&#39;s work administrative.',
            ],
            'faqs' => [
                ['What is an unlicensed assistant in Arizona?', 'Under ADRE Substantive Policy Statement 2025.02, someone hired by a licensee who does not perform any activity that requires a real estate license.'],
                ['Can an unlicensed assistant answer property questions in Arizona?', 'An Arizona Attorney General opinion (I18-002) found unlicensed call-center staff could answer basic property questions and schedule rental viewings. Advice, price and terms stay with a licensee.'],
                ['Can an unlicensed assistant show a home in Arizona?', 'No. Arizona REALTORS describes ADRE guidance allowing an assistant to unlock a home for a licensee, without discussing the property or walking buyers through it.'],
                ['Do Arizona real estate agents need to register as telephone solicitors?', 'Real estate licensees qualify for a limited registration under Arizona&#39;s telephone solicitation law rather than a full exemption.'],
                ['Are ADRE substantive policy statements binding?', 'No. They are advisory, but they show how ADRE reads the law. The employing broker must keep written policies for unlicensed staff.'],
            ],
            'sources' => [
                ['ADRE Substantive Policy Statement 2025.02: Unlicensed Assistants', 'https://azre.gov/sites/default/files/2025-07/S.P.S.%202025.02.pdf'],
                ['Arizona Attorney General Opinion I18-002', 'https://www.azag.gov/opinions/i18-002-r16-023'],
                ['A.R.S. 44-1282: Do Not Call', 'https://www.azleg.gov/ars/44/01282.htm'],
                ['Arizona Secretary of State: Limited telephone solicitation registration', 'https://azsos.gov/sites/default/files/2023-11/bsd_limited_telephone_solicitation_registration.pdf'],
            ],
            'related' => ['california', 'colorado'],
        ],

        'new-york' => [
            'name' => 'New York', 'regulator' => 'New York Department of State, Division of Licensing Services', 'short' => 'NYS DOS',
            'summary' => 'The New York Department of State says unlicensed assistants may do office activities that do not require a license under Real Property Law section 440: answering phones, forwarding calls and taking messages, arranging appointments by phone for the licensee (including showings of listed property), assembling closing documents, typing and filing, preparing flyers for broker approval and placing or removing signs. Brokers may not share commissions with unlicensed staff, and the broker must train, supervise and control them.',
            'tasks' => [
                ['Yes', 'May arrange appointments by phone for the licensee, including showings of listed property.'],
                ['Not addressed', 'Not covered in the DOS guidance we reviewed.'],
                ['Not addressed', 'Not covered in the DOS guidance we reviewed.'],
                ['No', 'A DOS decision found that showing property while unlicensed violated Real Property Law section 441.'],
                ['Not addressed', 'Not on the DOS list of permitted tasks.'],
                ['Not addressed', 'Not covered in the DOS guidance we reviewed.'],
                ['Limited', 'May assemble closing documents, type and file.'],
                ['No', 'An assistant paid per completed transaction must be licensed and paid by the broker.'],
            ],
            'calling' => [
                'New York General Business Law 399-z: telemarketing only between 8 a.m. and 9 p.m. at the customer&#39;s location unless the customer agrees otherwise, and the law covers text messages.',
                'No unsolicited calls to numbers on the National Do Not Call Registry; the established-relationship exception ends once the customer asks you to stop.',
                'Telemarketing businesses register with the Department of State; state-licensed businesses are exempt from the fee and bond but not from registering.',
            ],
            'tc' => [
                'DOS guidance does not name transaction coordinators. Office tasks are fine for unlicensed staff, but anyone paid per closed transaction must be licensed.',
            ],
            'faqs' => [
                ['What can an unlicensed real estate assistant do in New York?', 'Office activities that do not require a license: answering phones and taking messages, arranging appointments for the licensee including showings, assembling closing documents, typing and filing, preparing flyers for broker approval and placing or removing signs.'],
                ['Can an unlicensed assistant show property in New York?', 'No. A Department of State decision found that showing property without a license violated Real Property Law section 441.'],
                ['Can a New York broker pay an assistant per deal?', 'No. Brokers may not share commissions with unlicensed people, and an assistant paid on a completed-transaction basis must be licensed as a salesperson.'],
                ['What are New York&#39;s telemarketing hours?', 'Between 8 a.m. and 9 p.m. at the customer&#39;s location unless the customer agrees to another time (General Business Law 399-z).'],
                ['Does New York&#39;s telemarketing law cover texts?', 'Yes. Telemarketing sales calls under GBL 399-z include text messages and prerecorded calls.'],
            ],
            'sources' => [
                ['NYS DOS: Unlicensed real estate assistants', 'https://dos.ny.gov/unlicensed-real-estate-assistants'],
                ['NYS DOS: Real estate broker FAQ', 'https://dos.ny.gov/real-estate-broker-frequently-asked-questions'],
                ['NY General Business Law 399-z', 'https://www.nysenate.gov/legislation/laws/GBS/399-Z'],
                ['NYS DOS: Do Not Call', 'https://dos.ny.gov/do-not-call'],
            ],
            'related' => ['florida', 'north-carolina'],
        ],

        'colorado' => [
            'name' => 'Colorado', 'regulator' => 'Colorado Division of Real Estate', 'short' => 'Colorado DRE',
            'summary' => 'Colorado treats assistants and transaction coordinators as Real Estate Administrative Professionals under Commission Position CP-20. They may do clerical work, complete forms prepared for and directed by a broker, and hand out preprinted, objective listing information the broker prepared; if the seller or listing broker authorizes it, they may also provide access, conduct showings or hold open houses. They may not independently complete standard forms, give opinions or advice, or negotiate, and must promptly say they are unlicensed.',
            'tasks' => [
                ['Not addressed', 'Clerical work is allowed; scheduling is not named specifically.'],
                ['Not addressed', 'Not covered in CP-20.'],
                ['Limited', 'May distribute preprinted, objective information about a listing that the broker prepared.'],
                ['Limited', 'Allowed if authorized by the seller or listing broker.'],
                ['Limited', 'Allowed if authorized by the seller or listing broker.'],
                ['Not addressed', 'Clerical work includes gathering listing information.'],
                ['Limited', 'May complete forms prepared for and directed by a broker; may not independently complete standard forms or give opinions on them.'],
                ['Limited', 'CP-20 warns that payments contingent on closing may violate RESPA.'],
            ],
            'calling' => [
                'Colorado No-Call Act (C.R.S. 6-1-901 and following): no telephone solicitation to residential or wireless numbers on the Colorado no-call list.',
                'The law covers text messages and autodialed calls, with exclusions for prior express permission, an established business relationship and 30 days after a consumer inquiry.',
                'Telemarketers register with the Colorado Attorney General.',
            ],
            'tc' => [
                'CP-20 names transaction coordinators as Real Estate Administrative Professionals, so a coordinator may work without a license as long as they stay within those limits.',
            ],
            'faqs' => [
                ['What can an unlicensed real estate assistant do in Colorado?', 'Under Commission Position CP-20, clerical work, completing forms prepared for and directed by a broker, and handing out preprinted listing information the broker prepared. With the seller&#39;s or listing broker&#39;s authorization, they may also provide access, show property or hold open houses.'],
                ['Does a transaction coordinator need a license in Colorado?', 'Not to do the work CP-20 allows. Transaction coordinators are named as Real Estate Administrative Professionals, who may not negotiate, give opinions or independently complete standard forms.'],
                ['Must a Colorado assistant say they are unlicensed?', 'Yes. CP-20 requires prompt disclosure that the person is not licensed.'],
                ['Can a Colorado assistant be paid per closing?', 'CP-20 warns that payments contingent on closing may violate RESPA. Pay hourly or a salary.'],
                ['Does Colorado have its own do-not-call list?', 'Yes. The Colorado No-Call Act bars telephone solicitations, including texts, to numbers on the Colorado no-call list.'],
            ],
            'sources' => [
                ['Colorado Real Estate Manual, Chapter 3 (CP-20)', 'https://dre.colorado.gov/sites/dre/files/documents/2026_CREM_Ch%2003.pdf'],
                ['Colorado DRE: CP-20 position statement', 'https://dre.colorado.gov/division-notifications/cp-20-commission-position-statement-on-licensed-and-unlicensed-real-estate'],
                ['Colorado PUC: No-call complaints', 'https://puc.colorado.gov/coloradonocallcomplaints'],
            ],
            'related' => ['arizona', 'texas'],
        ],
    ],
];
