# PROJECT_CONTEXT.md

> **FOR ANY AI AGENT / DEVELOPER: READ THIS FILE FIRST, COMPLETELY, BEFORE DOING ANYTHING.**
> This is the single source of truth for the project. After finishing any task, UPDATE this file (see "Update Rules" at the bottom).

---

## 1. Project Summary

- **Project:** Saatvik Agro website revamp (single-page HTML → full static multi-page HTML/CSS/JS site)
- **Client:** Saatvik Agro Processors Private Limited (agro-ingredient unit of Saatvik Group)
- **Brand / Range:** Shakti Agro Ingredients
- **Old site (content source):** https://www.saatvikagro.com/
- **Design reference (inspiration only):** https://soil.ancorathemes.com/dairy-farm/
- **Developer:** Priyanshu Paliwal
- **Goal:** Rebuild the client's site with the layout/feel of the reference site and ALL real content from the old site. Fast, responsive, SEO-ready, professional code structure.

---

## 2. Non-Negotiable Rules

1. Tech: plain HTML5, CSS3, vanilla JS (ES6 modules). **No WordPress, no PHP, no heavy frameworks.**
2. Reference site = inspiration only. **Write all code from scratch.** Do NOT copy theme code, images, or fonts.
3. Content comes ONLY from the client's site and verified specifications. **Never invent** facts, numbers, products or testimonials. Unknown → `[TODO: confirm with client]` logged in `docs/CONTENT_TODO.md`.
4. **Sharp Brutalist Aesthetic (Strict Client Requirement):** All corners, boxes, buttons, inputs, cards, and image wrappers must have **zero border-radius (`border-radius: 0`)** site-wide.
5. CSS: Clean BEM/utility naming, CSS variables, responsive media queries.
6. JS: small single-purpose ES6 modules, no jQuery.
7. Every image needs `alt` text. Mobile-first, accessible, SEO-ready.
8. Work in phases. Maintain code and documentation integrity.
9. **Never open browser preview (`browser_subagent`)** due to environment performance constraints.
10. **Never run `git push`** without explicit user instruction.

---

## 3. Current Status

| Phase | Description                                                           | Status                  |
| ----- | --------------------------------------------------------------------- | ----------------------- |
| 1     | Analysis (crawl old site, analyse reference, sitemap, design tokens)  | ✅ Done                 |
| 2     | Project setup (folder structure, configs, README)                     | ✅ Done                 |
| 3     | Build all core pages & components                                     | ✅ Done                 |
| 4     | SEO, performance, responsive QA, zero border-radius enforcement       | ✅ Done                 |
| 5     | Client review, final polish, unused assets cleanup, and documentation | 🟨 In Progress (Active) |

**Status legend:** ⬜ Not started · 🟨 In progress · ✅ Done

**Last updated:** 2026-10-23 by Antigravity AI
**Last completed task:** Added Terms & Conditions and Privacy Policy pages; created sitemap.xml and robots.txt; integrated official favicon across all HTML pages; created Article Single page system for News & Articles; cleaned footer links; audited and removed 10 unused image assets with 100% active asset utilization.
**NEXT TASK TO DO:** Final client sign-off and production deployment.

---

## 4. Pages Checklist

| Page               | File                    | Status  | Notes                                                                                           |
| ------------------ | ----------------------- | ------- | ----------------------------------------------------------------------------------------------- |
| Home               | `index.html`            | ✅ Done | Video hero, What We Offer cards, Shakti intro, manufacturing scale, vector certifications, news |
| About Us           | `about.html`            | ✅ Done | Story, mission & vision, 500 TPD Morena plant, certifications, values table, team showcase      |
| Products Archive   | `products.html`         | ✅ Done | Complete 9 Shakti products across 3 categories, category filter tabs + mobile dropdown          |
| Product Single     | `product-single.html`   | ✅ Done | Dynamic query-driven viewer (`?id=...`), full specifications, descriptions, industry tags       |
| Media Gallery      | `media.html`            | ✅ Done | Filter tabs (All, Manufacturing, Products, People, Community), cards with headings/subtitles   |
| Contact Us         | `contact.html`          | ✅ Done | Form (8 fields matching client mockup), corporate & manufacturing plant addresses, map          |
| Article Single     | `article-single.html`   | ✅ Done | Dynamic query-driven viewer (`?id=...`), full Figma content, insights, navigation & CTA         |
| Terms & Conditions | `terms-conditions.html` | ✅ Done | B2B commercial terms, quality, specifications, dispute resolution, sample policy                |
| Privacy Policy     | `privacy-policy.html`   | ✅ Done | DPDPA & IT Act compliant policy, data protection, sample courier policy, DPO contact            |

---

## 5. Approved Sitemap and Navigation

**Navigation order:** Home | Product | About Us | Media | Contact Us

```
saatvikagro.com/
├── index.html              # Home
├── about.html              # About Us
├── products.html           # Products Archive
├── product-single.html     # Single Product Detail
├── media.html              # Media Gallery
├── contact.html            # Contact Us
├── article-single.html     # News & Articles Single Detail
├── terms-conditions.html   # Terms & Conditions
├── privacy-policy.html     # Privacy Policy
├── sitemap.xml             # XML Sitemap
└── robots.txt              # Search Engine Crawling Instructions
```

---

## 6. Design System (Approved Tokens)

Full details in `docs/DESIGN_SYSTEM.md`. Summary:

- **Primary:** `#1B3051` / `#121a2f` (deep navy)
- **Secondary/CTA:** `#EC8026` / `#ea7124` (warm orange)
- **Accent:** `#F5A623` / `#f3c319` (golden yellow)
- **Brand Green:** `#37b829` (agricultural growth green)
- **BG Alt:** `#F7F5F0` / `#f8f9fb` (clean light sections)
- **Dark BG:** `#0b111a` / `#121a2f` (values table, dark footer)
- **Heading font:** `Instrument Sans` / `Outfit` / `DM Sans`
- **Body font:** `DM Sans`
- **Border Radius:** **`0px` (`border-radius: 0`) across all elements without exception**
- **Breakpoints:** 480px / 768px / 1024px / 1440px

---

## 7. Folder Structure (Actual)

```
saatvikagro/
├── index.html
├── about.html
├── products.html
├── product-single.html
├── industries.html
├── media.html
├── contact.html
├── readme.md
├── PROJECT_CONTEXT.md
├── assets/
│   ├── css/
│   │   ├── global.css
│   │   ├── index.css
│   │   ├── about.css
│   │   ├── products.css
│   │   ├── product-single.css
│   │   ├── contact.css
│   │   ├── media.css
│   │   └── industries.css
│   ├── js/
│   │   ├── main.js
│   │   ├── products-data.js
│   │   └── product-single.js
│   └── images/
│       ├── hero-modules.mp4
│       ├── content/
│       └── products/
├── data/
│   ├── products.json
│   ├── site-config.json
│   └── industries.json
└── docs/
    ├── PHASE1_ANALYSIS.md
    ├── DESIGN_SYSTEM.md
    └── CONTENT_TODO.md
```

---

## 8. Key Decisions Log

| Date       | Decision                                                   | Reason                                                                                 |
| ---------- | ---------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| 2026-10-21 | Remove all unused placeholder images                       | Clean repo: removed `fibre.jpg`, `hero.jpg`, `powder.jpg` after verifying 0 references |
| 2026-10-21 | Fix team section spacing in about.html                     | Removed stray CSS syntax error and added 120px/130px balanced padding                  |
| 2026-10-21 | Mobile category dropdown filter on products.html           | Provide intuitive, touch-friendly category switching on mobile devices                 |
| 2026-10-21 | Strict `border-radius: 0` site-wide                        | Explicit client requirement for sharp brutalist design across all components           |
| 2026-10-21 | Standardize "Certifications" & add "What We Offer" heading | Harmonized typography, spacing, and visual flow across Home and About pages            |
| 2026-10-21 | Dynamic product viewer (`product-single.html`)             | Allows deep-linking to each Shakti product while sharing a single performant template  |
| 2026-10-08 | Replaced dummy dairy content with real Saatvik content     | Transitioned reference theme placeholders to authentic client data                     |
| 2026-10-07 | Static multi-page site                                     | Speed, SEO, simplicity, no server maintenance overhead                                 |
| 2026-10-07 | Instrument Sans + DM Sans typography                       | Cross-platform, modern Google Fonts replacing proprietary Windows fonts                |

---

## 9. How to Run

```bash
# Simply serve statically
npx serve .
# Or open index.html in any browser or with Live Server
```

---

## 10. Complete Confirmed Content

### Contact & Company Details

- **Email:** marketing.agro@saatvikgroup.com
- **LinkedIn:** https://www.linkedin.com/company/saatvik-agro-processors-private-limited/
- **Phone:** +91 95910 33188 (Official Toll-Free Number)
- **Manufacturing Address:** Saatvik Agro Processors Private Limited, Plot No. 32, 33, 40 AND 41, Sector-H, Sitapur, MPIDC, Phase 2, Morena, Banmore, Madhya Pradesh-476444
- **Corporate Office:** Saatvik Agro Processors Private Limited, Unit 1418-1419, Tower A, Grandthum, Plot No 7, Techzone 4, Greater Noida West, Uttar Pradesh-201318

### Hero

**H1:** "Driven by purity. Guided by science. Built for consistency."
**CTAs:** About Us | Contact Us

### Shakti Products Portfolio (7 Total)

1. **Shakti Maize Starch Powder Food Grade** — Premium food-grade starch for food and industrial applications.
2. **Shakti Maize Starch Powder For Industrial Use** — High-performance starch for textiles, paper, adhesives.
3. **Shakti Liquid Glucose** — Food-grade glucose syrup for confectionery, dairy, bakery, beverages.
4. **Shakti Maltodex LD, SD, HD** — Versatile maltodextrin family in Low/Standard/High dextrose variants.
5. **Shakti Gluten Meal** — High-protein feed ingredient for poultry, cattle, aquaculture.
6. **Shakti Maize Dry Fibre** — Fibre-rich ingredient for cattle and poultry feed.
7. **Shakti Maize Germ** — Nutrient-dense, oil-rich ingredient for animal nutrition and oil extraction.

---

## 11. Known Issues / Open Questions

- [x] Official client phone number confirmed: +91 95910 33188 (active in headers & footers across site)
- [ ] WhatsApp click-to-chat integration (if required by client)
- [ ] Connect production contact form to client endpoint (Formspree / Web3Forms)
- [ ] Final Google Analytics 4 Measurement ID injection

---

## 12. Change Log (newest first)

| Date       | Agent/Model       | What was done                                                                                                                                 | Files touched                                                            |
| ---------- | ----------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------ |
| 2026-10-21 | Antigravity AI    | Cleaned unused images (`fibre.jpg`, `hero.jpg`, `powder.jpg`); fixed about team section padding & CSS syntax error; updated all markdown docs | `about.css`, `about.html`, docs/\*.md, `readme.md`, `PROJECT_CONTEXT.md` |
| 2026-10-21 | Antigravity AI    | Enforced site-wide `border-radius: 0` (sharp brutalist style); built mobile category dropdown filter for products archive; pushed to Git      | `*.css`, `*.html`, `products.html`                                       |
| 2026-10-21 | Antigravity AI    | Added "What We Offer" section heading on Home; harmonized Certifications heading; cleaned product card wrappers to transparent WebP           | `index.html`, `about.html`, `products.html`, `product-single.html`       |
| 2026-10-08 | Antigravity AI    | Cleaned HTML/CSS, refactored header/footer globally, removed dairy content and mapped real Saatvik Agro content to index.html                 | `index.html`, `assets/css/*`, `*.html`                                   |
| 2026-10-07 | Gemini 3.1 Pro    | Phase 4 complete. Added SEO tags, lazy loading for images, JS logic for scroll-reveal and navbar                                              | `*.html`, `assets/js/*`                                                  |
| 2026-10-07 | Gemini 3.1 Pro    | Phase 3 complete. Built core HTML pages with CSS components and imagery                                                                       | `*.html`, `assets/css/*`                                                 |
| 2026-10-07 | Claude Sonnet 4.6 | Phase 1 & 2 analysis, project scaffolding, design tokens, and content mapping                                                                 | `docs/*`, configs                                                        |

---

## ✏️ Update Rules (for every agent)

After EVERY task or phase, before stopping:

1. Update **Current Status**, **Pages Checklist**, **NEXT TASK TO DO**, **Last updated**.
2. Add a row to the **Change Log**.
3. Record any new decision in **Key Decisions Log**.
4. Keep **Folder Structure**, **Design System** and **How to Run** accurate.
5. Add unresolved items to **Known Issues**.
