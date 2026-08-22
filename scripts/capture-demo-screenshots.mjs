/**
 * Capture demo screenshots for github-contents/ from the Netlify demo.
 * Usage: node scripts/capture-demo-screenshots.mjs
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import { chromium } from 'playwright';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const OUT_DIR = path.join(__dirname, '..', 'github-contents');
const BASE = 'https://demo-pms.netlify.app/';

const shots = [
  { file: '01-dashboard.png', label: 'Dashboard' },
  { file: '02-projects.png', label: 'Projects', clickText: 'Projects' },
  { file: '03-task.png', label: 'Task', clickText: 'Task' },
  { file: '04-employees.png', label: 'Employees', clickText: 'Employees' },
  { file: 'thumbnail-dashboard.png', label: 'Dashboard thumb' },
];

fs.mkdirSync(OUT_DIR, { recursive: true });

const browser = await chromium.launch({ headless: true });
const page = await browser.newPage({ viewport: { width: 1440, height: 900 } });

await page.goto(BASE, { waitUntil: 'networkidle', timeout: 60000 });
await page.waitForTimeout(1500);

for (const shot of shots) {
  if (shot.clickText) {
    const link = page.getByRole('link', { name: new RegExp(shot.clickText, 'i') }).first();
    if (await link.count()) {
      await link.click();
      await page.waitForTimeout(1200);
    }
  } else if (shot.file === '01-dashboard.png') {
    const dash = page.getByRole('link', { name: /dashboard/i }).first();
    if (await dash.count()) {
      await dash.click();
      await page.waitForTimeout(1200);
    }
  }

  const out = path.join(OUT_DIR, shot.file);
  await page.screenshot({ path: out, fullPage: false });
  console.log('Wrote', out);
}

await browser.close();
console.log('DONE');
