// Builds printable checklist PDFs from JSON data.
// Run: node scripts/build_checklist_pdf.cjs            (both PDFs)
//      node scripts/build_checklist_pdf.cjs re-va|tc   (one PDF)
const fs = require('fs'), path = require('path');
const { chromium } = require('playwright');
const root = path.join(__dirname, '..');

const JOBS = {
  're-va': {
    data: 'resources/data/re-va-checklist.json',
    out: 'public/assets/downloads/real-estate-va-tasks-checklist.pdf',
    intro: 'Tick the tasks you will delegate to your assistant. Start with the daily list, then add weekly, listing and transaction tasks. Items in the last box stay with the licensed agent.',
    cta: 'Free 2-day trial of a trained real estate VA: zingoassist.us/real-estate-virtual-assistant',
    note: 'General guidance; rules vary by state and brokerage.',
    numbered: false,
  },
  'tc': {
    data: 'resources/data/tc-checklist.json',
    out: 'public/assets/downloads/transaction-coordinator-checklist-template.pdf',
    intro: 'Property: ______________________________   Client(s): ______________________________   Effective date (Day 0): ____________   Closing date: ____________   Use one copy per file. Build every deadline from the executed contract.',
    cta: 'Virtual transaction coordinators, free 2-day trial: zingoassist.us/real-estate-transaction-coordinator-services',
    note: 'General guidance, not legal advice. Deadlines depend on your state, contract and brokerage.',
    numbered: true,
  },
};

const esc = s => s.replace(/&/g, '&amp;').replace(/</g, '&lt;');

function html(job) {
  const d = JSON.parse(fs.readFileSync(path.join(root, job.data), 'utf8'));
  const groups = d.groups.map((g, n) => `
  <section class="${g.id === 'agent' ? 'agent' : ''}">
    <h2>${job.numbered ? (n + 1) + '. ' : ''}${esc(g.name)}</h2>
    <ul>${g.items.map(i => `<li><span class="box">${g.id === 'agent' ? '✕' : ''}</span>${esc(i)}</li>`).join('')}</ul>
  </section>`).join('');
  return `<!doctype html><html><head><meta charset="utf-8"><style>
  @page { size: Letter; margin: 0.55in 0.6in; }
  body { font-family: Arial, Helvetica, sans-serif; color: #2b2b35; font-size: 10.5pt; }
  header { display: flex; justify-content: space-between; align-items: flex-end; border-bottom: 3px solid #A52673; padding-bottom: 8px; margin-bottom: 12px; }
  h1 { font-size: 19pt; margin: 0; color: #1f1235; }
  .brand { color: #A52673; font-weight: 700; font-size: 12pt; text-align: right; }
  .brand small { display: block; color: #666; font-weight: 400; font-size: 8.5pt; }
  .intro { font-size: 9.5pt; color: #555; margin: 0 0 10px; line-height: 1.7; }
  .cols { columns: 2; column-gap: 26px; }
  section { break-inside: avoid; margin-bottom: 12px; }
  h2 { font-size: 11.5pt; color: #fff; background: #A52673; padding: 4px 8px; border-radius: 4px; margin: 0 0 6px; }
  section.agent h2 { background: #b07c00; }
  ul { list-style: none; padding: 0; margin: 0; }
  li { display: flex; gap: 7px; align-items: flex-start; padding: 3.5px 0; border-bottom: 1px solid #eee; line-height: 1.35; }
  .box { flex: 0 0 11px; height: 11px; border: 1.4px solid #A52673; border-radius: 2px; margin-top: 1px; font-size: 8pt; line-height: 10px; text-align: center; color: #b07c00; }
  section.agent .box { border-color: #b07c00; }
  footer { margin-top: 10px; border-top: 1px solid #ddd; padding-top: 6px; font-size: 8.5pt; color: #666; display: flex; justify-content: space-between; gap: 20px; }
</style></head><body>
  <header><h1>${esc(d.title)}</h1><div class="brand">Zingo Assist<small>zingoassist.us · ${esc(d.updated)}</small></div></header>
  <p class="intro">${esc(job.intro)}</p>
  <div class="cols">${groups}</div>
  <footer><span>${esc(job.cta)}</span><span>${esc(job.note)}</span></footer>
</body></html>`;
}

(async () => {
  const which = process.argv[2] ? [process.argv[2]] : Object.keys(JOBS);
  const b = await chromium.launch();
  for (const k of which) {
    const job = JOBS[k]; if (!job) throw new Error('unknown job ' + k);
    const p = await b.newPage();
    await p.setContent(html(job), { waitUntil: 'load' });
    const out = path.join(root, job.out);
    await p.pdf({ path: out, format: 'Letter', printBackground: true, margin: { top: '0.55in', bottom: '0.55in', left: '0.6in', right: '0.6in' } });
    await p.close();
    console.log('wrote', job.out, fs.statSync(out).size, 'bytes');
  }
  await b.close();
})();
