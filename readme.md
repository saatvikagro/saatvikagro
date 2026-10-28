# Saatvik Agro — Official Website

A high-performance, modern, static multi-page website for **Saatvik Agro Processors Private Limited** (agro-ingredient unit of the Saatvik Group) and its flagship **Shakti** product line. Built with semantic HTML5, Vanilla CSS3, and ES6 JavaScript.

- **Client:** Saatvik Agro Processors Private Limited
- **Brand / Range:** Shakti Agro Ingredients
- **Status:** 🚀 Production Ready / Client Review Complete
- **Architecture:** Zero-framework static multi-page site (Ultra-fast, zero dependencies, SEO-first)

---

## 📌 Table of Contents

1. [Overview](#-overview)
2. [Tech Stack](#-tech-stack)
3. [Repository Structure](#-repository-structure)
4. [Active Pages](#-active-pages)
5. [Products Architecture](#-products-architecture)
6. [Lead Capture & Forms Integration](#-lead-capture--forms-integration)
7. [Design System & Styling Rules](#-design-system--styling-rules)
8. [Asset Management](#-asset-management)
9. [Getting Started (Local Development)](#-getting-started-local-development)
10. [Deployment](#-deployment)
11. [License & Rights](#-license--rights)

---

## 🌱 Overview

This project delivers a multi-page web presence for Saatvik Agro, transitioning from a single-page layout to an SEO-optimized architecture.

Key features:
- **Zero-Framework Architecture:** Plain semantic HTML5, Vanilla CSS3, and modern ES6 JS — zero npm build dependencies, instant page loads, and 100% static hosting compatibility.
- **Sharp Brutalist Aesthetic:** Strict client design mandate — universal `border-radius: 0` across all cards, buttons, image wrappers, inputs, and modals.
- **Dynamic Product Engine:** Single-source product catalog (`assets/js/products-data.js`) powering an interactive category-filtered archive (`products.html`) and dynamic deep-linked detail views (`product-single.html?id=...`).
- **Serverless Lead Capture:** Dual-channel submission (Contact Inquiries & Product Brochure Downloads) connected directly to Google Sheets via Google Apps Script with real-time UI feedback and loading states.
- **B2B Industrial Depth:** Comprehensive coverage of manufacturing scale (500 TPD Morena plant), certifications (FSSAI, Halal, ISO 9001, ISO 22000), media gallery, and legal compliance pages.

---

## 🛠 Tech Stack

| Area | Technology | Purpose |
|---|---|---|
| **Markup** | HTML5 (Semantic, SEO-ready) | Clean document structure, OpenGraph meta, schema-ready |
| **Styling** | Vanilla CSS3 (Custom Properties) | Design tokens, responsive grid & flexbox, sharp brutalist styling |
| **Interactivity** | Vanilla JavaScript (ES6 Modules) | Dynamic product routing, category filtering, form handling |
| **Backend / API** | Google Apps Script Web App | Serverless lead capture direct to Google Sheets tabs |
| **Media & Assets** | High-Res Transparent PNGs & MP4 | Web-optimized product packaging, hero video, vector SVG badges |
| **Deployment** | 100% Static | Compatible with GitHub Pages, Vercel, Netlify, Cloudflare Pages |

---

## 📁 Repository Structure

```
saatvik-agro/
├── index.html                  # Home (Hero video, What We Offer, Shakti intro, scale, certifications)
├── about.html                  # About Us (Story, mission, 500 TPD Morena plant, certifications, values)
├── products.html               # Products Archive (Category filter tabs, mobile dropdown, 9 Shakti products)
├── product-single.html         # Dynamic Product Detail (?id=..., specs, applications, brochure modal)
├── media.html                  # Media Gallery (Categorized photo gallery with interactive tabs)
├── contact.html                # Contact Us (Corporate & plant offices, smile backdrop, inquiry form)
├── article-single.html         # Dynamic Insights & News Article Reader (?id=...)
├── privacy-policy.html         # Privacy Policy (DPDPA & IT Act compliant)
├── terms-conditions.html       # Terms & Conditions (B2B commercial & supply terms)
├── robots.txt                  # Search engine crawling rules
├── sitemap.xml                 # XML sitemap for SEO indexation
├── readme.md                   # Main documentation
├── PROJECT_CONTEXT.md          # Comprehensive project context & maintenance record
├── assets/
│   ├── css/
│   │   ├── global.css          # CSS reset, root variables, header, footer, buttons, utilities
│   │   ├── index.css           # Home page specific layout & animations
│   │   ├── about.css           # About page styling & responsive rules
│   │   ├── products.css        # Products archive grid & category filter styling
│   │   ├── product-single.css  # Product detail styling, specs table & modal
│   │   ├── contact.css         # Contact layout, office cards, form styling
│   │   ├── media.css           # Media gallery & category filter styling
│   │   ├── article-single.css  # Article reader styling
│   │   └── legal.css           # Legal pages typography & layout
│   ├── js/
│   │   ├── main.js             # Navigation, mobile menu toggle, header effects
│   │   ├── products-data.js    # Single source of truth for 9 Shakti products
│   │   ├── product-single.js   # Dynamic query-driven product detail loader & modal
│   │   ├── form-handler.js     # Contact & brochure form handler with Google Sheets API
│   │   └── articles-data.js    # News & insights article database
│   └── images/
│       ├── Adobe Express - Untitled design.mp4 # Hero background video
│       ├── certificates/       # FSSAI, Halal, Intertek, ISO compliance logos
│       ├── content/            # Brand logos, facility images, agricultural photography
│       └── products/           # Transparent 1200x1200px packaging PNGs
├── data/
│   ├── products.json           # Product JSON specifications
│   ├── industries.json         # Industry segmentation data
│   └── site-config.json        # Global site configuration & metadata
└── docs/
    ├── DESIGN_SYSTEM.md        # Tokens, typography, colors, zero-radius design rules
    ├── CONTENT_TODO.md         # Content inventory & verification tracker
    ├── GOOGLE_APPS_SCRIPT.js   # Google Sheets Lead Capture Engine code & setup guide
    └── PHASE1_ANALYSIS.md      # Architectural analysis & evolution log
```

---

## 📄 Active Pages

1. **Home (`index.html`):** Ambient video hero, linked "What We Offer" category cards (redirecting to `products.html?category=...`), Shakti ecosystem overview, Morena facility metrics, vector certifications, and footer.
2. **About Us (`about.html`):** Corporate journey, mission & vision, 500 TPD Morena plant highlights, corn-focused visual assets, state-of-the-art facility showcase, and certifications.
3. **Products Archive (`products.html`):** Complete showcase of all 9 Shakti ingredients across 3 categories (Food & Nutrition, Industrial Applications, Animal Nutrition) with synchronized desktop tabs and mobile dropdown filter.
4. **Product Single (`product-single.html`):** Dynamic viewer driven by `?id=...`, displaying technical specifications, key features, packaging details, and an interactive "Download Brochure" modal form.
5. **Media Gallery (`media.html`):** Categorized photo archive covering manufacturing, refining facilities, agricultural sourcing, and community initiatives.
6. **Contact Us (`contact.html`):** Direct inquiry form with background smile brand accent, corporate office (Greater Noida), and manufacturing plant (Morena, MP) details.
7. **Article Single (`article-single.html`):** Dynamic reader for industrial insights, market reports, and agricultural processing news.
8. **Privacy Policy (`privacy-policy.html`):** Comprehensive policy addressing data collection, B2B inquiries, sample shipments, and DPDPA compliance.
9. **Terms & Conditions (`terms-conditions.html`):** Standard commercial terms, product specifications, sample dispatch, and governing law.

---

## 🌾 Products Architecture

All products are managed in a single central data module: `assets/js/products-data.js`.

### The 9 Shakti Products:

| # | Product Name | Category | Primary Applications |
|---|---|---|---|
| 1 | **Shakti Maize Starch Powder (Food Grade)** | Food & Nutrition | Confectionery, bakery, soups, noodles, dairy |
| 2 | **Shakti Maize Starch Powder (Industrial Use)** | Industrial Grade | Paper sizing, corrugation, textile sizing, adhesives |
| 3 | **Shakti Liquid Glucose** | Food & Nutrition | Confectionery, bakery, pharmaceuticals, beverages |
| 4 | **Shakti Maltodex (Standard DE - SD)** | Food & Nutrition | Sports nutrition, dairy, carrier, processed food |
| 5 | **Shakti Maltodex (High DE - HD)** | Food & Nutrition | Rapid solubility, beverage powders, energy supplements |
| 6 | **Shakti Maltodex (Low DE - LD)** | Food & Nutrition | Viscosity builder, infant food, gentle sweetness |
| 7 | **Shakti Maize Dry Fiber** | Animal Nutrition | Cattle feed, poultry rations, ruminant nutrition |
| 8 | **Shakti Gluten Meal** | Animal Nutrition | High-protein poultry feed, cattle diets, aquaculture |
| 9 | **Shakti Maize Germ** | Animal Nutrition / Extraction | Corn oil extraction, high-energy livestock feed |

---

## 📬 Lead Capture & Forms Integration

Website forms submit asynchronously to a Google Sheets backend via Google Apps Script:

1. **Contact Us Form (`#contactForm`):** Captures Name, Company, Email, Phone, Location, Requirement, Quantity (Tonnes), and Message → Appends to `"Contact-Us"` tab.
2. **Download Brochure Form (`#brochureForm`):** Captures Product Name, Name, Email, Phone → Appends to `"Products-Download"` tab.

### Features:
- **Loading State:** Submit buttons display an animated spinner (`.btn-spinner`) and disable during submission to prevent duplicates.
- **Fail-Safe Mechanism:** Handles CORS redirects smoothly via dual fetch fallback (`mode: 'no-cors'`).
- **Complete Setup Guide:** See [`docs/GOOGLE_APPS_SCRIPT.js`](docs/GOOGLE_APPS_SCRIPT.js) for step-by-step deployment instructions.

---

## 🎨 Design System & Styling Rules

- **Strict Zero Border-Radius:** `border-radius: 0 !important;` enforced site-wide across all buttons, inputs, cards, containers, and modals.
- **Primary Brand Colors:**
  - Deep Navy: `#121a2f` / `#1B3051`
  - Energetic Orange (CTA): `#ea7124` / `#EC8026`
  - Golden Amber: `#f3c319` / `#F5A623`
  - Agricultural Green: `#37b829`
- **Typography:**
  - Headings: `Instrument Sans`, `Outfit`, sans-serif
  - Body: `DM Sans`, sans-serif
- **Responsive Layout:** Tested across Mobile (<576px), Tablet (768px), and Desktop (1024px+).

---

## 🖼 Asset Management

The repository maintains an optimized, audited asset footprint:
- **Active Assets:** Exactly 39 production files (~19 MB total).
- **Product Images:** Clean, transparent PNG packaging mockups centered with uniform margins.
- **Zero Orphaned Files:** Audited across all 28 HTML, CSS, and JS files with zero broken links or 404s.
- **Clean Git Tracking:** Raw client archives, large design files (`*.psd`, `*.ai`), and OS artifacts are excluded via `.gitignore`.

---

## 🚀 Getting Started (Local Development)

Because the project is 100% static, no package installation or build step is required.

1. Clone or download the repository.
2. Serve using any local web server:
   ```bash
   # Using Node.js
   npx serve .

   # Or using Python
   python -m http.server 8000
   ```
3. Open `http://localhost:3000` (or `http://localhost:8000`) in your browser.

---

## 🌐 Deployment

Deployable to any static hosting service in under 60 seconds:

1. **GitHub Pages:**
   - Go to **Settings** > **Pages** > Select `main` branch and `/ (root)` folder > Click **Save**.
2. **Vercel / Netlify / Cloudflare Pages:**
   - Connect repository.
   - Build Command: *(Leave blank)*
   - Output Directory: `./` (Root)
   - Deploy.

---

## 📄 License & Rights

© Saatvik Agro Processors Private Limited. All rights reserved.  
All brand names, trademarks, product specifications, and graphics belong to their respective owners.
