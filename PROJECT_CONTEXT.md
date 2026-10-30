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

| Phase | Description | Status |
|---|---|---|
| 1 | Analysis (crawl old site, analyse reference, sitemap, design tokens) | ✅ Done |
| 2 | Project setup (folder structure, configs, README) | ✅ Done |
| 3 | Build all core pages & components | ✅ Done |
| 4 | SEO, performance, responsive QA, zero border-radius enforcement | ✅ Done |
| 5 | Client review, final polish, unused assets cleanup, and documentation | ✅ Done |

**Status legend:** ⬜ Not started · 🟨 In progress · ✅ Done

**Last updated:** 2026-10-28 by Antigravity AI  
**Last completed task:** Complete image and repository audit: removed 118 MB unreferenced raw dump folder (`Saatvik Agro Shakti Products/`), deleted 11 unused/superseded media assets (`.webp` products, legacy `.jpg` and `.mp4`), leaving exactly 39 high-resolution, active production assets with 0 broken references across all 28 code files. Synchronized Google Sheets dual-tab lead integration, updated `.gitignore`, and finalized comprehensive documentation.  
**NEXT TASK TO DO:** Final client sign-off and production deployment.

---

## 4. Pages Checklist

| Page | File | Status | Notes |
|---|---|---|---|
| Home | `index.html` | ✅ Done | Video hero, What We Offer linked category cards, Shakti intro, Morena plant metrics, certifications |
| About Us | `about.html` | ✅ Done | Story, mission & vision, 500 TPD Morena plant, corn-focused imagery, facility showcase, certifications |
| Products Archive | `products.html` | ✅ Done | Complete 9 Shakti products across 3 categories, synchronized category filter tabs + mobile select, URL param support |
| Product Single | `product-single.html` | ✅ Done | Dynamic query-driven viewer (`?id=...`), full specifications, descriptions, industry tags, brochure lead modal |
| Media Gallery | `media.html` | ✅ Done | Filter tabs (All, Manufacturing, Products, People, Community), cards with headings/subtitles |
| Contact Us | `contact.html` | ✅ Done | Dual-channel lead form, smile brand background, corporate & plant addresses, interactive Google map |
| Article Single | `article-single.html` | ✅ Done | Dynamic query-driven viewer (`?id=...`), full insights, market reports, navigation & CTA |
| Terms & Conditions | `terms-conditions.html` | ✅ Done | B2B commercial terms, quality, specifications, dispute resolution, sample policy |
| Privacy Policy | `privacy-policy.html` | ✅ Done | DPDPA & IT Act compliant policy, data protection, sample courier policy, DPO contact |

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
├── media.html
├── contact.html
├── article-single.html
├── terms-conditions.html
├── privacy-policy.html
├── sitemap.xml
├── robots.txt
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
│   │   ├── article-single.css
│   │   └── legal.css
│   ├── js/
│   │   ├── main.js
│   │   ├── products-data.js
│   │   ├── product-single.js
│   │   ├── form-handler.js
│   │   └── articles-data.js
│   └── images/
│       ├── Adobe Express - Untitled design.mp4
│       ├── certificates/
│       ├── content/
│       └── products/
├── data/
│   ├── products.json
│   ├── site-config.json
│   └── industries.json
└── docs/
    ├── PHASE1_ANALYSIS.md
    ├── DESIGN_SYSTEM.md
    ├── CONTENT_TODO.md
    └── GOOGLE_APPS_SCRIPT.js
```

---

## 8. Key Decisions Log

| Date | Decision | Reason |
|---|---|---|
| 2026-10-28 | Removed 118 MB raw client dump folder and 11 unreferenced files | Purged non-production files, reducing repo size by ~85% with zero broken links |
| 2026-10-28 | Tight-cropped high-res logos (trimmed transparent padding) | Ensured header logos render sharp and legible without oversized transparent borders |
| 2026-10-28 | Linked "What We Offer" cards on Home directly to Products categories | Smooth UX allowing visitors to jump straight to Food Grade, Industrial, or Feed products |
| 2026-10-28 | Dual-channel Google Sheets lead capture engine | Replaced static placeholders with working, serverless Google Apps Script webhook integration |
| 2026-10-28 | Universal header logo clickability to `index.html` across all 9 pages | Consistent navigation experience site-wide |
| 2026-10-28 | Updated social links to official Instagram & LinkedIn (`target="_blank"`) | Correct brand social destinations in footer |
| 2026-10-28 | Commented out News & Articles section on Home and Team section on About | Preserved code cleanly for future activation once client completes final copy and photo shoots |
| 2026-10-21 | Remove all unused placeholder images | Clean repo: removed `fibre.jpg`, `hero.jpg`, `powder.jpg` after verifying 0 references |
| 2026-10-21 | Fix team section spacing in about.html | Removed stray CSS syntax error and added 120px/130px balanced padding |
| 2026-10-21 | Mobile category dropdown filter on products.html | Provide intuitive, touch-friendly category switching on mobile devices |
| 2026-10-21 | Strict `border-radius: 0` site-wide | Explicit client requirement for sharp brutalist design across all components |
| 2026-10-21 | Dynamic product viewer (`product-single.html`) | Allows deep-linking to each Shakti product while sharing a single performant template |
| 2026-10-07 | Static multi-page site | Speed, SEO, simplicity, no server maintenance overhead |
| 2026-10-07 | Instrument Sans + DM Sans typography | Cross-platform, modern Google Fonts replacing proprietary Windows fonts |

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

- **Email:** marketing.agro@saatvikgroup.com / info@saatvikgroup.com
- **Instagram:** https://www.instagram.com/saatvikagro/
- **LinkedIn:** https://www.linkedin.com/company/saatvik-agro-processors-private-limited/posts/?viewAsMember=true
- **X (Twitter):** https://x.com/Saatvikagro
- **Phone:** +91 95910 33188 (Official Toll-Free Number)
- **Manufacturing Address:** Saatvik Agro Processors Private Limited, Plot No. 32, 33, 40 AND 41, Sector-H, Sitapur, MPIDC, Phase 2, Morena, Banmore, Madhya Pradesh-476444
- **Corporate Office:** Saatvik Agro Processors Private Limited, Unit 1418-1419, Tower A, Grandthum, Plot No 7, Techzone 4, Greater Noida West, Uttar Pradesh-201318

### Hero

**H1:** "Driven by purity. Guided by science. Built for consistency."  
**CTAs:** About Us | Contact Us

### Shakti Products Portfolio (9 Total)

1. **Shakti Maize Starch Powder Food Grade** — Premium food-grade starch for food and industrial applications.
2. **Shakti Maize Starch Powder For Industrial Use** — High-performance starch for textiles, paper, adhesives.
3. **Shakti Liquid Glucose** — Food-grade glucose syrup for confectionery, dairy, bakery, beverages.
4. **Shakti Maltodex SD** — Standard dextrose equivalent maltodextrin for versatile food processing.
5. **Shakti Maltodex HD** — High dextrose equivalent maltodextrin for rapid solubility and energy release.
6. **Shakti Maltodex LD** — Low dextrose equivalent maltodextrin for viscosity building and gentle mouthfeel.
7. **Shakti Maize Dry Fiber** — Fibre-rich ingredient for cattle and poultry feed.
8. **Shakti Gluten Meal** — High-protein (60%+) feed ingredient for poultry, cattle, aquaculture.
9. **Shakti Maize Germ** — Nutrient-dense, oil-rich ingredient for animal nutrition and oil extraction.

---

## 11. Known Issues / Open Questions

- [x] Official client phone number confirmed: +91 95910 33188 (active across site headers & footers)
- [x] Official client socials confirmed: Instagram & LinkedIn integrated with `target="_blank"`
- [x] Dual-tab Google Sheets lead engine deployed and connected to contact & brochure forms
- [x] All 9 Shakti products active with transparent high-resolution PNG mockups
- [ ] WhatsApp click-to-chat integration (optional, upon client request)
- [ ] Final Google Analytics 4 Measurement ID injection (ready for tag injection upon client confirmation)

---

## 12. Change Log (newest first)

| Date | Agent/Model | What was done | Files touched |
|---|---|---|---|
| 2026-10-30 | Antigravity AI | Integrated automated PDF brochure downloads on single product lead submission; mapped all 9 Shakti products to `assets/brochure/` PDFs (with Maltodex HD, SD, LD mapped to shared PDF); added interactive download progress alert & fallback link | `assets/js/form-handler.js`, `assets/js/products-data.js`, `assets/js/product-single.js`, `product-single.html`, `products.html` |
| 2026-10-28 | Antigravity AI | Sanitized repo documentation, updated readme.md, PROJECT_CONTEXT.md, and docs/ for GitHub push; purged 118 MB raw dump folder; audited all 39 active media assets with 0 broken references | `readme.md`, `PROJECT_CONTEXT.md`, `docs/*`, `.gitignore` |
| 2026-10-28 | Antigravity AI | Integrated Google Apps Script serverless lead capture engine with dual tabs ("Contact-Us" & "Products-Download"), animated button loaders, and error fallbacks | `assets/js/form-handler.js`, `contact.html`, `product-single.html`, `docs/GOOGLE_APPS_SCRIPT.js` |
| 2026-10-28 | Antigravity AI | Cropped transparent borders from official client logos (Saatvik Agro & Shakti) to restore crisp header rendering; updated CSS logo height & aspect ratio | `assets/images/content/saatvik-agro-logo.png`, `shakti-logo.png`, `assets/css/global.css` |
| 2026-10-28 | Antigravity AI | Linked "What We Offer" cards on Home directly to Products archive category parameters; enabled dynamic URL param filtering (`?category=...`) | `index.html`, `products.html`, `assets/css/products.css` |
| 2026-10-28 | Antigravity AI | Updated official footer socials (Instagram & LinkedIn with `target="_blank"`); universalized header logo link to Home across all 9 pages | `*.html` |
| 2026-10-28 | Antigravity AI | Upgraded product images to transparent high-res PNG packaging; fixed zoom and object-fit in `product-single.css` | `assets/images/products/*.png`, `assets/css/product-single.css`, `assets/js/products-data.js` |
| 2026-10-28 | Antigravity AI | Updated About Us imagery with corn-focused photos and state-of-the-art facility graphic; commented out team section and news section per client guidance | `about.html`, `index.html`, `assets/images/content/*` |
| 2026-10-23 | Antigravity AI | Added Terms & Conditions and Privacy Policy pages; created sitemap.xml and robots.txt; integrated official favicon across all HTML pages | `terms-conditions.html`, `privacy-policy.html`, `sitemap.xml`, `robots.txt`, `*.html` |
| 2026-10-21 | Antigravity AI | Enforced site-wide `border-radius: 0` (sharp brutalist style); built mobile category dropdown filter for products archive | `*.css`, `*.html`, `products.html` |
| 2026-10-07 | Gemini 3.1 Pro / Sonnet | Initial project scaffolding, core page design, design tokens, and content mapping | `docs/*`, `index.html`, `assets/*` |

---

## ✏️ Update Rules (for every agent)

After EVERY task or phase, before stopping:

1. Update **Current Status**, **Pages Checklist**, **NEXT TASK TO DO**, **Last updated**.
2. Add a row to the **Change Log**.
3. Record any new decision in **Key Decisions Log**.
4. Keep **Folder Structure**, **Design System** and **How to Run** accurate.
5. Add unresolved items to **Known Issues**.
