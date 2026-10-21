# Saatvik Agro Website

A modern, ultra-fast, static website for **Saatvik Agro** (agro-ingredient unit of Saatvik Group), built with pure semantic HTML5, Vanilla CSS3, and ES6 JavaScript.

- **Client:** Saatvik Agro Processors Private Limited
- **Brand / Range:** Shakti Agro Ingredients
- **Status:** 🚀 In Client Review & Polish

---

## 📌 Table of Contents

1. [Overview](#-overview)
2. [Tech Stack](#-tech-stack)
3. [Folder Structure](#-folder-structure)
4. [Active Pages](#-active-pages)
5. [Design System & Styling Rules](#-design-system--styling-rules)
6. [Getting Started](#-getting-started)
7. [Environment Variables](#-environment-variables)
8. [How to Edit Content](#-how-to-edit-content)
9. [Deployment](#-deployment)
10. [Credits](#-credits)

---

## 🌱 Overview

This project is a complete revamp and expansion of the Saatvik Agro website into a multi-page static site. Key objectives:

- Lightweight, fast static architecture without WordPress or heavy framework overhead
- High SEO score, semantic markup, and mobile-first responsiveness
- Faithful integration of all real Saatvik Agro content, products, certifications, and facility details
- **Sharp Brutalist Aesthetic:** Strict client requirement — all corners, buttons, cards, badges, and boxes have zero border radius (`border-radius: 0`)
- Dedicated product architecture with an archive grid, mobile category dropdown, and dynamic single product view

---

## 🛠 Tech Stack

| Area | Technology |
|---|---|
| Markup | HTML5 (Semantic, SEO-optimized) |
| Styling | Vanilla CSS3 (CSS Variables, Flexbox, CSS Grid, Sharp 0-radius theme) |
| Scripting | Vanilla JavaScript (ES6 Modules, dynamic product loading) |
| Assets | WebP optimized product images, inline SVG certification badges |
| Version control | Git + GitHub (`main` branch) |
| Hosting | Static hosting ready (Netlify / Vercel / Cloudflare Pages / cPanel) |

---

## 📁 Folder Structure

```
saatvikagro/
├── index.html              # Home page (Hero, What We Offer, Shakti Range, Facility, Certifications, News)
├── about.html              # About Us (Story, Mission/Vision, Facility, Certifications, Values, Team)
├── products.html           # Products Archive (Category filter tabs + mobile dropdown, 7 Shakti products)
├── product-single.html     # Single Product Detail (Dynamic query ?id=..., specifications, applications)
├── industries.html         # Industries Served (Food, Feed, Paper, Pharma, etc.)
├── contact.html            # Contact Us (Corporate & Plant addresses, inquiry form, interactive map)
├── media.html              # Media Gallery (Factory, farmlands, processing photos with lightbox)
├── readme.md               # Main project documentation
├── PROJECT_CONTEXT.md      # Comprehensive project status, history, and single source of truth
├── assets/
│   ├── css/
│   │   ├── global.css      # Core variables, reset, navbar, footer, buttons, utilities
│   │   ├── index.css       # Home page specific styling
│   │   ├── about.css       # About page styling & responsive rules
│   │   ├── products.css    # Product archive grid & category filter styling
│   │   ├── product-single.css # Single product detail styling
│   │   ├── contact.css     # Contact form & location layout
│   │   ├── media.css       # Media gallery & lightbox styling
│   │   └── industries.css  # Industries page layout
│   ├── js/
│   │   ├── main.js         # Navigation, mobile menu toggle, header effects
│   │   ├── products-data.js # Central data source for all 7 Shakti products
│   │   └── product-single.js # Dynamic product loader & category navigation
│   └── images/
│       ├── hero-modules.mp4 # Hero background video
│       ├── content/        # Logos, facility, team, and content graphics
│       └── products/       # Transparent high-res WebP product images
├── data/
│   ├── products.json       # Product JSON specification
│   ├── industries.json     # Industries JSON data
│   └── site-config.json    # Site configuration & metadata
└── docs/
    ├── DESIGN_SYSTEM.md    # Tokens, typography, colors, zero-radius design rules
    ├── CONTENT_TODO.md     # Client content tracker & status
    └── PHASE1_ANALYSIS.md  # Initial site audit & architectural analysis
```

---

## 📄 Active Pages

1. **Home (`index.html`):** Video hero, "What We Offer" banner cards, Shakti ingredient portfolio, manufacturing metrics, vector certifications, and industrial news.
2. **About Us (`about.html`):** Corporate journey, mission & vision, 500 TPD Morena manufacturing scale, ISO/Halal/FSSAI badges, core company values table, and executive team showcase.
3. **Products Archive (`products.html`):** Complete showcase of all 7 Shakti ingredients with desktop filter tabs, mobile select dropdown, and direct links to details.
4. **Product Single (`product-single.html`):** Dynamic product viewer driven by `products-data.js`, showing detailed descriptions, key specifications, and target industry tags.
5. **Industries (`industries.html`):** Deep dive into Food & Nutrition, Animal Feed, Paper & Packaging, and Pharmaceuticals.
6. **Contact Us (`contact.html`):** Direct contact channels, inquiry form, corporate office (Greater Noida), and manufacturing plant (Morena, MP) details.
7. **Media Gallery (`media.html`):** High-resolution photo gallery featuring plant operations, farmlands, and refining facilities with interactive lightbox.

---

## 🎨 Design System & Styling Rules

- **Zero Border-Radius:** Strict brutalist requirement — `border-radius: 0` on all cards, buttons, images, inputs, and dropdowns.
- **Brand Colors:**
  - Primary Navy: `#1B3051` / `#121a2f`
  - Secondary Orange: `#ea7124` / `#EC8026`
  - Accent Yellow: `#f3c319` / `#F5A623`
  - Brand Green: `#37b829`
- **Typography:**
  - Headings: `Instrument Sans` / `Outfit` / `DM Sans`
  - Body: `DM Sans`
- **Mobile First & Responsive:** Optimized across mobile (<576px), tablet (768px), and desktop (1024px+).

---

## 🚀 Getting Started

### Local Development

1. Open the project folder in VS Code or your preferred editor.
2. Run using **Live Server** extension or any local static server:
   ```bash
   npx serve .
   ```
   Or open `index.html` directly in any modern browser.

---

## ✏️ How to Edit Content

- **Products:** Edit `assets/js/products-data.js` to update product names, descriptions, or specs.
- **Page Content:** Edit the relevant `.html` file directly.
- **Styles:** Common styles are in `assets/css/global.css`; page-specific styles are in `assets/css/<page>.css`.
- **Product Images:** Place clean `.webp` assets in `assets/images/products/`.

---

## 🌐 Deployment

The site is 100% static with zero build steps required:

1. Connect the GitHub repository to **Netlify**, **Vercel**, or **GitHub Pages**.
2. Set publish directory to the repository root `/`.
3. Build command: None required.

---

## 👤 Credits

- **Client:** Saatvik Agro Processors Private Limited
- **Brand Range:** Shakti Agro Ingredients
- **Developer:** Priyanshu Paliwal

---

© Saatvik Agro. All rights reserved.
