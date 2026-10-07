# Phase 1 Analysis — Saatvik Agro Website Revamp

> Created: 2026-10-07 | Agent: Claude Sonnet 4.6 (Thinking)

---

## A. Client Site Crawl — Content Inventory

### Important Discovery
The current https://www.saatvikagro.com/ is a **single HTML page** (not a multi-page WordPress site). All sections are anchor-linked on one page. The new static site will expand this into a proper multi-page structure.

---

### A1. Navigation Menu (Current Site)

| # | Label | Anchor | New Page |
|---|-------|--------|----------|
| 1 | Home | `#` | `index.html` |
| 2 | About Us | `#aboutus` | `pages/about.html` |
| 3 | Product | `#product` | `pages/products.html` |
| 4 | Why Us | `#whyus` | `index.html#why-us` |
| 5 | Industry | `#industry` | `pages/industries.html` |
| 6 | Contact Us | `#contactus` | `pages/contact.html` |

---

### A2. Page Sections Inventory (Top to Bottom)

| # | Section | Content Found |
|---|---------|---------------|
| 1 | Top Bar | Email: marketing.agro@saatvikgroup.com · LinkedIn link |
| 2 | Header/Nav | Logo (img/logo.svg) · Hamburger nav · Sticky |
| 3 | Hero/Banner | BG: img/banner.jpg · H1: "Driven by purity. Guided by science. Built for consistency." · 2 CTAs |
| 4 | About (#aboutus) | BG: img/agro-bg.jpg (full-height) · H2: "From grain to greatness..." · 2 paragraphs |
| 5 | Shakti Intro | BG: img/org-bg.jpg · H2: THE SHAKTI INGREDIENT RANGE · tagline + body |
| 6 | Products (#product) | Product cards: image + title + description + Download Brochure popup |
| 7 | Why Us (#whyus) | [TODO: confirm with client — section exists in nav, content needs browser verification] |
| 8 | Industry (#industry) | [TODO: confirm with client] |
| 9 | Contact (#contactus) | [TODO: confirm with client — form, address, map] |
| 10 | Footer | [TODO: confirm with client] |

---

### A3. Full Text — About Section

**H2:** "From grain to greatness, we engineer consistency you can trust."

**Para 1:** "Saatvik Agro is the agro-ingredient unit of the Saatvik Group, dedicated to creating high quality maize-based ingredients that power everyday products across food, nutrition, animal feed, and industrial applications."

**Para 2:** "Rooted in purity and strengthened by science, we convert responsibly sourced maize into functional, reliable ingredients that meet the evolving needs of modern manufacturers. Every product we make is guided by a single belief: better ingredients build better outcomes."

---

### A4. Full Text — Shakti Section

**H2:** "THE SHAKTI INGREDIENT RANGE"

**Para 1:** "A unified portfolio of premium maize ingredients, designed for performance across industries."

**Para 2:** "Shakti is not a single product. It is Saatvik Agro's ingredient ecosystem. Each Shakti ingredient is crafted with precision, purity, and purpose, ensuring predictable performance across applications."

---

### A5. Products (Confirmed from HTML)

| # | Product Name | Description Excerpt | Has Brochure? |
|---|-------------|---------------------|---------------|
| 1 | Shakti Maize Starch Powder Food Grade | Premium food-grade starch engineered for consistency, stability, and superior functional performance across diverse food and industrial applications. | Yes (lead-capture popup) |
| 2+ | [TODO: more products] | HTML was truncated. Additional products with product02.jpg, product03.jpg etc. likely exist. | TBD |

---

### A6. Contact Info (Confirmed)

| Field | Value |
|-------|-------|
| Email | marketing.agro@saatvikgroup.com |
| LinkedIn | https://www.linkedin.com/company/saatvik-agro-processors-private-limited/ |
| Phone | [TODO: 1800-547-1151 was commented out — may be inactive] |
| Address | [TODO: confirm with client] |
| Google Maps | [TODO: confirm with client] |

---

### A7. Images Referenced in Source

| Image File | Usage |
|-----------|-------|
| img/logo.svg | Header logo |
| img/favicon.jpg | Favicon |
| img/banner.jpg | Hero background |
| img/agro-bg.jpg | About section background |
| img/org-bg.jpg | Shakti/Products section bg |
| img/heading.svg | Decorative heading ornament |
| img/down-icon.svg | Button arrow icon |
| img/product01.jpg | Product 1 image |

---

## B. Reference Site Analysis (soil.ancorathemes.com/dairy-farm/)

> INSPIRATION ONLY. No code, images, or fonts will be copied.

### B1. Homepage Section Order (Top to Bottom)

1. Header — Logo left, nav right, sticky + fade-in on scroll
2. Hero — Full-screen with H1 + subtitle + CTA + scroll indicator
3. About — 2-column: image left, text right (label + H2 + 2 paras)
4. Products Grid — 3 product cards with hover quick-view
5. Video CTA — Full-width video bg with play button center
6. Team Section — 3-column team cards with name/role, fade-in
7. Gallery/Mosaic — Multi-image collage layout
8. About Split — Full-width image + text split
9. Testimonials — Large quote, author photo + name, dark bg
10. Blog Posts — 2-column cards with image, category, title, date
11. Footer — Dark bg, logo, tagline, description, CTA, nav links, socials

### B2. Reference Site Colors (from CSS)

| Role | Hex | Usage |
|------|-----|-------|
| Background | #FFFFFF | Page bg |
| Background Alt | #F6F7F1 | Alternate section bg (cream) |
| Border | #E5E7DE | Dividers |
| Title/Text | #040509 | Headings |
| Meta | #ACAFB2 | Date, captions |
| Accent/Link | #EABE0D | Highlights (golden yellow) |
| Hover | #FFBF00 | Hover states (amber) |
| CTA Button | #a31f1f | Primary action button (deep red) |

### B3. Reference Site Fonts

| Role | Family |
|------|--------|
| Headings H1 | Instrument Sans (Google Fonts) |
| Body/Para | DM Sans (Google Fonts) |

### B4. Key Design Patterns

- Sticky white header; hamburger slide-out on mobile
- Fade-in-up scroll animations (IntersectionObserver-style)
- Small uppercase label above each section heading
- Generous section padding: ~80–130px vertical
- 3-col product/team grid, 2-col blog/about grid
- Decorative floating PNGs (absolute positioned, rotated slightly)
- Dark footer with logo, tagline, nav columns, social icons

---

## C. Proposed Design Tokens for Saatvik Agro

Brand identity: maize/agro industry = warm amber + deep navy authority, clean modern typography.

### C1. Color Palette

| Token | Value | Usage |
|-------|-------|-------|
| --color-primary | #1B3051 | Dark navy — primary brand |
| --color-primary-dark | #0F1E35 | Darker navy for hovers |
| --color-secondary | #EC8026 | Warm orange — CTAs, highlights |
| --color-secondary-dark | #C96818 | Darker orange for hover |
| --color-accent | #F5A623 | Golden amber — decorative |
| --color-bg | #FFFFFF | Page background |
| --color-bg-alt | #F7F5F0 | Off-white/cream sections |
| --color-bg-dark | #0F1E35 | Dark sections, footer |
| --color-text | #1A1A2E | Primary body text |
| --color-text-light | #5C6070 | Meta, captions |
| --color-text-white | #FFFFFF | On dark backgrounds |
| --color-border | #E8E4DC | Dividers (warm tone) |
| --color-success | #2D7A4F | Form success |
| --color-error | #C62828 | Form error |

### C2. Typography

| Token | Value | Notes |
|-------|-------|-------|
| --font-heading | 'Instrument Sans', sans-serif | Google Fonts, free, modern |
| --font-body | 'DM Sans', sans-serif | Google Fonts, excellent legibility |
| --font-size-base | 17px | Body text |
| --font-size-sm | 14px | Caption, meta |
| --font-size-lg | 20px | Lead paragraphs |
| --font-size-xl | clamp(2rem, 4vw, 3rem) | H2 headings |
| --font-size-hero | clamp(2.5rem, 6vw, 5rem) | Hero H1 |
| --font-weight-regular | 400 | Body |
| --font-weight-semibold | 600 | Subheadings |
| --font-weight-bold | 700 | Main headings |

> Decision: Replace Bahnschrift (Windows-only proprietary) with Instrument Sans + DM Sans.

### C3. Spacing Scale

| Token | Value |
|-------|-------|
| --space-xs | 0.5rem / 8px |
| --space-sm | 1rem / 16px |
| --space-md | 1.5rem / 24px |
| --space-lg | 2.5rem / 40px |
| --space-xl | 4rem / 64px |
| --space-2xl | 6rem / 96px |
| --space-3xl | 8rem / 128px |
| --container-max | 1280px |
| --container-padding | clamp(1rem, 5vw, 2.5rem) |

### C4. Breakpoints

| Name | Value |
|------|-------|
| Mobile | 360px (base/default) |
| Tablet | 768px |
| Desktop | 1024px |
| Wide | 1440px |

### C5. Border Radius and Shadows

| Token | Value |
|-------|-------|
| --radius-sm | 4px |
| --radius-md | 8px |
| --radius-lg | 16px |
| --radius-pill | 50px |
| --shadow-sm | 0 2px 8px rgba(27,48,81,0.08) |
| --shadow-md | 0 4px 20px rgba(27,48,81,0.12) |
| --shadow-lg | 0 8px 40px rgba(27,48,81,0.16) |

### C6. Button Styles

| Type | Background | Text | Radius | Padding |
|------|-----------|------|--------|---------|
| Primary (CTA) | #EC8026 | #fff | 8px | 14px 28px |
| Secondary (outline) | transparent | #1B3051 | 8px | 14px 28px + 2px border |
| Dark | #1B3051 | #fff | 8px | 14px 28px |

---

## D. Proposed Sitemap

```
saatvikagro.com/
├── index.html              (Home: hero, about-intro, Shakti intro, products preview, why-us, industries-intro, contact CTA)
├── pages/
│   ├── about.html          (Full about: company story, mission, values)
│   ├── products.html       (All Shakti products with brochure download)
│   ├── industries.html     (Industries served: food, nutrition, feed, industrial)
│   ├── contact.html        (Contact form, map, address, WhatsApp/call)
│   └── 404.html            (Custom 404)
├── sitemap.xml
└── robots.txt
```

**Proposed navigation order:** Home | About | Products | Industries | Contact

- Blog: Not on current site. Excluded.
- Gallery: Not confirmed. Excluded (folder reserved).
- Product detail pages: Decided to use a single products.html page with section anchors for each product (simpler to maintain, sufficient for this product count).

---

## E. Folder Structure (Proposed — matches Phase 2 brief)

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
│   │   ├── base/
│   │   │   ├── reset.css
│   │   │   ├── variables.css
│   │   │   └── typography.css
│   │   ├── components/
│   │   │   ├── buttons.css
│   │   │   ├── cards.css
│   │   │   ├── navbar.css
│   │   │   ├── forms.css
│   │   │   ├── footer.css
│   │   │   └── modal.css
│   │   ├── sections/
│   │   │   ├── hero.css
│   │   │   ├── about.css
│   │   │   ├── products.css
│   │   │   ├── why-us.css
│   │   │   ├── industries.css
│   │   │   ├── contact.css
│   │   │   └── animations.css
│   │   ├── pages/
│   │   │   ├── home.css
│   │   │   ├── about-page.css
│   │   │   ├── products-page.css
│   │   │   ├── contact-page.css
│   │   │   └── 404.css
│   │   └── main.css
│   ├── js/
│   │   ├── modules/
│   │   │   ├── navbar.js
│   │   │   ├── scroll-reveal.js
│   │   │   ├── counter.js
│   │   │   ├── form-validation.js
│   │   │   ├── popup.js
│   │   │   └── back-to-top.js
│   │   ├── utils/
│   │   │   ├── helpers.js
│   │   │   └── dom.js
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
    ├── PHASE1_ANALYSIS.md
    ├── DESIGN_SYSTEM.md
    ├── CONTENT_TODO.md
    ├── DEPLOYMENT.md
    └── REDIRECTS.md
```

---

## F. Assumptions Made

1. **Single-page to multi-page:** Current site is one HTML file. We expand to proper pages for SEO.
2. **Bahnschrift replacement:** Bahnschrift is Windows-only. Switching to Instrument Sans + DM Sans (Google Fonts, free, cross-platform, visually similar).
3. **Product detail pages:** Single products.html with anchor sections per product — sufficient for current product count, easier to maintain.
4. **Industries page:** Nav had Industry anchor. Building a full page for SEO depth.
5. **Blog/Gallery:** Not on client site. Excluded from scope.
6. **Phone number:** 1800-547-1151 was commented out in source HTML. Treated as inactive. Flagged in CONTENT_TODO.
7. **Brochure lead form:** Current PHP backend (save-lead.php) replaced with Formspree/Web3Forms in new site.
8. **More products:** HTML was truncated at product 1. Likely 3-6 products total (product02.jpg etc.). All captured in Phase 3 via browser.
9. **Contact/address/map:** Not visible in extracted HTML. Flagged in CONTENT_TODO for client confirmation.
10. **No testimonials:** None found on current site. Section omitted (no invented content rule).
11. **Color retention:** Orange #EC8026 and navy #1B3051 retained as confirmed brand colors. Refined with additional tokens.
