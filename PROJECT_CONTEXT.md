# PROJECT_CONTEXT.md

> **FOR ANY AI AGENT / DEVELOPER: READ THIS FILE FIRST, COMPLETELY, BEFORE DOING ANYTHING.**
> This is the single source of truth for the project. After finishing any task, UPDATE this file (see "Update Rules" at the bottom).

---

## 1. Project Summary

- **Project:** Saatvik Agro website revamp (single-page HTML → full static multi-page HTML/CSS/JS site)
- **Client:** Saatvik Agro (agro-ingredient unit of Saatvik Group)
- **Old site (content source):** https://www.saatvikagro.com/
- **Design reference (inspiration only):** https://soil.ancorathemes.com/dairy-farm/
- **Developer:** Priyanshu Paliwal (freelance project)
- **Goal:** Rebuild the client's site with the layout/feel of the reference site and ALL real content from the old site. Fast, responsive, SEO-ready, professional code structure.

> IMPORTANT: The current client site is a single HTML page (not WordPress). Being expanded to multi-page.

---

## 2. Non-Negotiable Rules

1. Tech: plain HTML5, CSS3, vanilla JS (ES6 modules). **No WordPress, no PHP, no heavy frameworks.**
2. Reference site = inspiration only. **Write all code from scratch.** Do NOT copy theme code, images, or fonts.
3. Content comes ONLY from the client's site. **Never invent** facts, numbers, products or testimonials. Unknown → `[TODO: confirm with client]` logged in `docs/CONTENT_TODO.md`.
4. CSS: BEM naming, CSS variables, no inline styles.
5. JS: small single-purpose ES6 modules, no jQuery.
6. Every image needs `alt` text. Mobile-first, accessible, SEO-ready.
7. Never commit `.env` or secrets. Keep `.env.example` updated.
8. Work in phases. Do not start the next phase without developer approval.
9. Do not rename/move folders or change approved structure without asking.

---

## 3. Current Status

| Phase | Description | Status |
| ----- | -------------------------------------------------------------------- | -------------- |
| 1 | Analysis (crawl old site, analyse reference, sitemap, design tokens) | ✅ Done |
| 2 | Project setup (folder structure, configs, README) | ✅ Done |
| 3 | Build pages & initial responsive layout | ✅ Done |
| 4 | SEO, performance, QA | ✅ Done |
| 5 | Client Feedback & PDF Brief Updation (6 Pages, Shakti Products, Media, Careers, WhatsApp) | ✅ Done |

**Status legend:** ⬜ Not started · 🟨 In progress · ✅ Done

**Last updated:** 2026-10-20 by Antigravity AI
**Last completed task:** Restored client-finalized About Us page design (`about.html` and `assets/css/about.css`) matching the approved reference screenshot (dual top images with 3-column text & circular arrow button, client partner logos strip, dark awards & timeline table, 3-member team grid, full-width farm banner, 3-card testimonials, newsletter subscription, and floating sidebar tab). Also removed the WhatsApp button from the header across all pages (`index.html`, `products.html`, `industries.html`, `media.html`, `career.html`, `contact.html`, `404.html`, `about.html`).
**NEXT TASK TO DO:** Client presentation and final deployment handover.

---

## 4. Pages Checklist

| Page | File | Status | Notes |
| --------- | --------------------- | ------ | --------------------------- |
| Home | `index.html` | ✅ Done | Hero with stats box (500->1200 TPD), 3 pillars What We Offer, 4 featured products, Morena spotlight, 9 industries, 6 certs, values, Knowledge Hub, dual footer |
| About | `about.html` | ✅ Done | Mission & Vision, 6 Core Values, Morena facility specs, 9 Saatvik Group entities, Saatvik Social Foundation CSR stats |
| Products | `products.html` | ✅ Done | Shakti range philosophy, 4 filter tabs (All, Food Grade, Industrial, Feed), all 7 products with real specs & pack sizes, instant brochure modal |
| Industries | `industries.html` | ✅ Done | 9 industry sectors from B2B Presentation p.22 with Shakti product mapping and quick links |
| Media | `media.html` | ✅ Done | Creative gallery with category filters (Plant, Products, Lab, CSR) and responsive lightbox viewer |
| Career | `career.html` | ✅ Done | Culture perks, employee spotlight card, 5 active engineering/commercial openings, candidate application modal |
| Contact | `contact.html` | ✅ Done | WhatsApp sales banner, Corporate Office card, Morena Plant card, B2B inquiry form, toll-free phone |

---

## 5. Approved Sitemap and Navigation

**Navigation order:** Home | About Us | Products | Industries | Media | Career | Contact Us + Phone + WhatsApp + Enquire Now

```
saatvikagro.com/
├── index.html
├── about.html
├── products.html
├── industries.html
├── media.html
├── career.html
├── contact.html
├── 404.html
├── sitemap.xml
└── robots.txt
```

---

## 6. Design System (Approved Tokens)

Full details in `docs/DESIGN_SYSTEM.md`. Summary:

- **Primary:** `#1B3051` (deep navy)
- **Secondary/CTA:** `#EC8026` (warm orange)
- **Accent:** `#F5A623` (golden amber)
- **BG Alt:** `#F7F5F0` (warm off-white)
- **Dark BG:** `#0F1E35` (footer, hero overlay)
- **Heading font:** `Instrument Sans` (Google Fonts)
- **Body font:** `DM Sans` (Google Fonts)
- **Base font size:** 17px
- **Breakpoints:** 360px / 768px / 1024px / 1440px

---

## 7. Folder Structure (Approved)

```
saatvik-agro/
├── README.md
├── PROJECT_CONTEXT.md
├── .gitignore
├── .env.example
├── .editorconfig
├── package.json
├── index.html
├── pages/
│   ├── about.html
│   ├── products.html
│   ├── industries.html
│   ├── contact.html
│   └── 404.html
├── partials/
│   ├── header.html
│   └── footer.html
├── assets/
│   ├── css/
│   │   ├── base/          (reset.css, variables.css, typography.css)
│   │   ├── components/    (buttons, cards, navbar, forms, footer, modal)
│   │   ├── sections/      (hero, about, products, why-us, industries, contact, animations)
│   │   ├── pages/         (home, about-page, products-page, contact-page, 404)
│   │   └── main.css
│   ├── js/
│   │   ├── modules/       (navbar, scroll-reveal, counter, form-validation, popup, back-to-top)
│   │   ├── utils/         (helpers, dom)
│   │   └── main.js
│   ├── images/
│   │   ├── logo/
│   │   ├── hero/
│   │   ├── products/
│   │   ├── about/
│   │   ├── icons/
│   │   └── gallery/
│   └── fonts/
├── data/
│   ├── products.json
│   ├── site-config.json
│   └── industries.json
└── docs/
    ├── PHASE1_ANALYSIS.md                ✅
    ├── DESIGN_SYSTEM.md                  ✅
    ├── CONTENT_TODO.md                   ✅
    ├── CLIENT_CHANGES_IMPLEMENTATION.md  ✅
    ├── DEPLOYMENT.md                     ⬜ Phase 5
    └── REDIRECTS.md                      ⬜ Phase 4
```

---

## 8. Key Decisions Log

| Date | Decision | Reason |
| ---- | --------- | ------- |
| 2026-10-07 | Static multi-page site | Speed, SEO, simplicity |
| 2026-10-07 | Bahnschrift → Instrument Sans + DM Sans | Bahnschrift is Windows-only proprietary |
| 2026-10-07 | No blog, no gallery | Not on client site |
| 2026-10-07 | No testimonials section | None on client site; cannot invent |
| 2026-10-07 | Products on one page (products.html) with anchor sections | 7 products — no need for individual pages |
| 2026-10-07 | Brochure form: PHP save-lead.php → Formspree/Web3Forms | Replacing server-side lead capture |
| 2026-10-07 | Home page distributes content, About page gets full deep content | Better SEO, manageable page length |

---

## 9. How to Run

```bash
npm install
cp .env.example .env
npm run dev
```

---

## 10. Complete Confirmed Content

### Contact & Company Details
- **Email:** marketing.agro@saatvikgroup.com
- **LinkedIn:** https://www.linkedin.com/company/saatvik-agro-processors-private-limited/
- **Phone:** [TODO: 1800-547-1151 was commented out — confirm with client]
- **Manufacturing Address:** Saatvik Agro Processors Private Limited, Plot No. 32, 33, 40 AND 41, Sector-H, Sitapur, MPIDC, Phase 2, Morena, Banmore, Madhya Pradesh-476444
- **Corporate Office:** Saatvik Agro Processors Private Limited, Unit 1418-1419, Tower A, Grandthum, Plot No 7, Techzone 4, Greater Noida West, Uttar Pradesh-201318

### Hero
**H1:** "Driven by purity. Guided by science. Built for consistency."
**CTAs:** About Us | Contact Us

### About Section
**H2:** "From grain to greatness, we engineer consistency you can trust."
**P1:** "Saatvik Agro is the agro-ingredient unit of the Saatvik Group, dedicated to creating high quality maize-based ingredients that power everyday products across food, nutrition, animal feed, and industrial applications."
**P2:** "Rooted in purity and strengthened by science, we convert responsibly sourced maize into functional, reliable ingredients that meet the evolving needs of modern manufacturers. Every product we make is guided by a single belief: better ingredients build better outcomes."

### Shakti Intro
**H2:** "THE SHAKTI INGREDIENT RANGE"
**P1:** "A unified portfolio of premium maize ingredients, designed for performance across industries."
**P2:** "Shakti is not a single product. It is Saatvik Agro's ingredient ecosystem. Each Shakti ingredient is crafted with precision, purity, and purpose, ensuring predictable performance across applications."

### Products (7 — All with "Download the Brochure" CTA)
1. **Shakti Maize Starch Powder Food Grade** — Premium food-grade starch for food and industrial applications.
2. **Shakti Maize Starch Powder For Industrial Use** — High-performance starch for textiles, paper, adhesives.
3. **Shakti Liquid Glucose** — Food-grade glucose syrup for confectionery, dairy, bakery, beverages.
4. **Shakti Maltodex LD, SD, HD** — Versatile maltodextrin family in Low/Standard/High dextrose variants.
5. **Shakti Gluten Meal** — High-protein feed ingredient for poultry, cattle, aquaculture.
6. **Shakti Maize Dry Fibre** — Fibre-rich ingredient for cattle and poultry feed.
7. **Shakti Maize Germ** — Nutrient-dense, oil-rich ingredient for animal nutrition and oil extraction.
> Full descriptions in docs/CONTENT_TODO.md

### Why Us (5 Points)
1. Purity You Can Measure
2. Science-led Processing
3. Consistency at Scale
4. Application-focused Approach
5. Responsible Manufacturing

### Industries (6)
1. Food and Beverages
2. Confectionery and Bakery
3. Dairy and Nutrition
4. Pharmaceuticals and Nutraceuticals
5. Animal Nutrition
6. Industrial Applications

### Values Section
**H:** "STRONG VALUES. STRONG INGREDIENTS"
"At Saatvik Agro, our values are built on the belief that ingredients matter..."

### Manufacturing Section
**H:** "MANUFACTURED WITH PRECISION. DELIVERED WITH CONFIDENCE."
Bullets: Fully automated manufacturing unit · Dedicated quality assurance systems · Scalable production capacity

### Global Section
**H:** "BUILT IN INDIA WITH GLOBAL ASPIRATIONS"

### People Section
**H:** "POWERED BY PEOPLE WHO CARE"

### CTA Section
**H:** "LET'S BUILD BETTER INGREDIENTS TOGETHER"
Email: marketing.agro@saatvikgroup.com · Download Product Catalogue button

### Footer Links
About Saatvik Agro | Shakti Ingredient Range | Industries | Manufacturing

---

## 11. Known Issues / Open Questions

- [ ] Phone number — confirm if 1800-547-1151 is active
- [ ] WhatsApp number — does client want WhatsApp button?
- [ ] Google Maps — need embed link or coordinates for both addresses
- [ ] Certification logos — what certifications are displayed? (images not captured by Ctrl+A)
- [ ] Product images — need all 7 product images (only product01.jpg confirmed)
- [ ] Hero/about section images — download and optimize from current site
- [ ] Brochure PDFs — are there actual PDFs or just a lead form?
- [ ] Contact form endpoint — Formspree/Web3Forms email address
- [ ] Social media — FB, Instagram, YouTube (commented out in source) — active accounts?
- [ ] Google Analytics ID — for GA4 setup

---

## 12. Change Log (newest first)

| Date | Agent/Model | What was done | Files touched |
| ---- | ----------- | -------------- | -------------- |
| 2026-10-20 | Antigravity AI | Restored client-approved About Us design (`about.html`, `assets/css/about.css`): 1-to-1 visual match with reference screenshot (dual top images with 3-column text & circular green arrow button, partner logos strip, dark awards & timeline table, 3-member team grid, full-width field banner, 3-card testimonials, newsletter subscription, and floating sidebar tab). Also removed the WhatsApp button from the header across all pages (`index.html`, `products.html`, `industries.html`, `media.html`, `career.html`, `contact.html`, `404.html`, `about.html`). | about.html, assets/css/about.css, *.html, PROJECT_CONTEXT.md |
| 2026-10-20 | Antigravity AI | Refined Hero Section (`index.html`, `assets/css/index.css`): Restored the classic Soil theme right-edge stacked square box design (`60px x 60px`) for slider indicators with white active indicator border (`border-left: 4px solid #fff`), featuring numbers `01`, `02`, `03` that dynamically update and highlight as the slides advance. | index.html, assets/css/index.css, PROJECT_CONTEXT.md |
| 2026-10-19 | Antigravity AI | Complete redesign and visual overhaul of Career page (`career.html`) and styling (`assets/css/career.css`, `assets/css/global.css`): aligned with `index.html` aesthetic tokens; resolved all section title, intro-label, and description spacing; added hero highlight metrics strip, 4-step hiring journey, category filter tabs, enriched job cards with department tags, open talent pool application banner, full multi-breakpoint responsive spacing (desktop, tablet, mobile), and completely redesigned modern 2-column modal application form with custom CV/resume file upload dropzone. | career.html, assets/css/career.css, assets/css/global.css, PROJECT_CONTEXT.md |
| 2026-10-18 | Antigravity AI | Restored and refined the exact 'Soil' theme landing page section designs from client screenshots: Section-Intro (Why Choose Saatvik Agro with custom outline SVGs and jug sketch) & Section-Banners (stacked White, Navy, Orange banners with custom watermark SVGs and cheese sketch); resolved product packaging graphic mappings. | index.html, products.html, PROJECT_CONTEXT.md |
| 2026-10-18 | Antigravity AI | Implemented all client requirements from Changes-from-client/ (Brief & B2B Presentation): rebuilt index.html with 3 pillars, hero stats, and certs; created media.html with lightbox gallery and career.html with job listings & modal; updated products.html with tabs & brochure modal; updated industries.html with 9 sectors; updated about.html with 6 core values & group entities; unified contact.html with WhatsApp & dual addresses; verified styling & responsiveness. | index.html, products.html, about.html, industries.html, contact.html, media.html, career.html, assets/css/*, assets/js/*, data/*.json |
| 2026-10-08 | Antigravity AI | Cleaned HTML/CSS, refactored header/footer globally, removed dairy content and mapped real Saatvik Agro content to index.html | index.html, assets/css/*, *.html |
| 2026-10-07 | Gemini 3.1 Pro | Phase 4 complete. Added SEO tags, lazy loading for images, JS logic for scroll-reveal and navbar, and created `_redirects` file. | *.html, _redirects, assets/js/*, seo.js |
| 2026-10-07 | Gemini 3.1 Pro | Phase 3 complete. Built all HTML pages (index, about, products, industries, contact, 404) with CSS components and imagery. Commited to git. | *.html, *.css |
| 2026-10-07 | Gemini 3.1 Pro | Phase 2 complete. Project structure initialized, Git configured, empty stubs created, base CSS and JS implemented, data JSON created. | Git, .gitignore, css, html, js, json files |
| 2026-10-07 | Claude Sonnet 4.6 | Phase 1 complete. Full content received. All 7 products, both addresses, all sections confirmed. Docs updated. | PROJECT_CONTEXT.md, docs/CONTENT_TODO.md |
| 2026-10-07 | Claude Sonnet 4.6 | Phase 1 analysis: content audit, design tokens, sitemap, folder structure, initial docs | docs/PHASE1_ANALYSIS.md, docs/DESIGN_SYSTEM.md, docs/CONTENT_TODO.md, PROJECT_CONTEXT.md |
| 2026-10-07 | — | Initial context file created | PROJECT_CONTEXT.md, README.md |

---

## ✏️ Update Rules (for every agent)

After EVERY task or phase, before stopping:

1. Update **Current Status**, **Pages Checklist**, **NEXT TASK TO DO**, **Last updated**.
2. Add a row to the **Change Log**.
3. Record any new decision in **Key Decisions Log**.
4. Keep **Folder Structure**, **Design System** and **How to Run** accurate.
5. Add unresolved items to **Known Issues**.
# #   P h a s e   5   S t a t u s :   C o m p l e t e d   c o m p l e t e   1 - t o - 1   r e d e s i g n   o f   a l l   p a g e s   ( H o m e ,   A b o u t ,   P r o d u c t s ,   C o n t a c t ,   I n d u s t r i e s )   m a t c h i n g   t h e   S o i l   r e f e r e n c e   e x a c t l y ,   w i t h   f u l l   m o b i l e   r e s p o n s i v e n e s s   a n d   r e a l   i m a g e r y .  
 