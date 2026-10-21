# Design System — Saatvik Agro

> Created: 2026-10-07 | Updated: 2026-10-21 (Phase 5 Client Review & Brutalist Polish)

---

## 1. Brand Overview

- **Client:** Saatvik Agro Processors Private Limited (Agro-ingredient unit of Saatvik Group)
- **Product Range:** Shakti Maize Ingredients (Food-Grade Starch, Industrial Starch, Liquid Glucose, Maltodextrin, Gluten Meal, Dry Fibre, Maize Germ)
- **Brand Personality:** Scientific precision, purity, consistency, and B2B industrial scale.
- **Visual Style:** High-contrast, clean architectural lines, and **sharp corners (`border-radius: 0`)**.

---

## 2. Color Palette

```css
:root {
  /* Primary brand colors */
  --color-primary:       #121a2f;  /* Deep navy / dark slate — authority, trust */
  --color-primary-dark:  #0b111a;  /* Dark background for values table & contrast rows */
  --color-secondary:     #ea7124;  /* Warm energetic orange — brand badges, CTAs */
  --color-secondary-dark: #d25f17; /* Hover state for secondary */
  --color-accent:        #f3c319;  /* Golden amber / corn yellow — highlights, side tab */
  --color-green:         #37b829;  /* Growth green — tags, circular arrow buttons */

  /* Background colors */
  --color-bg:            #ffffff;  /* Primary page background */
  --color-bg-alt:        #f8f9fb;  /* Clean light gray/cream — alternate sections */
  --color-bg-dark:       #121a2f;  /* Footer & dark hero containers */
  --color-bg-overlay:    rgba(18, 26, 47, 0.7); /* Hero video overlay */

  /* Text colors */
  --color-text:          #2b3342;  /* Primary body text */
  --color-text-muted:    #6a7382;  /* Secondary text, metadata */
  --color-text-white:    #ffffff;  /* Text on dark surfaces */
  --color-heading:       #121a2f;  /* Section headings */

  /* Borders & Dividers */
  --color-border:        #e5e8ee;  /* Subtle dividers */
  --color-border-dark:   rgba(255, 255, 255, 0.12); /* Dividers on dark rows */
}
```

---

## 3. Typography

```css
:root {
  /* Font families */
  --font-heading: 'Instrument Sans', 'Outfit', 'DM Sans', sans-serif;
  --font-body:    'DM Sans', 'Inter', -apple-system, sans-serif;

  /* Scale */
  --font-size-xs:   12px;
  --font-size-sm:   14px;
  --font-size-base: 16px;
  --font-size-lg:   18px;
  --font-size-xl:   clamp(1.4rem, 2.5vw, 1.85rem); /* Subheadings */
  --font-size-2xl:  clamp(2rem, 3.8vw, 3rem);       /* H2 section headings */
  --font-size-hero: clamp(2.6rem, 5.5vw, 4.4rem);   /* H1 main hero */

  /* Weights */
  --font-weight-regular:  400;
  --font-weight-medium:   500;
  --font-weight-semibold: 600;
  --font-weight-bold:     700;
  --font-weight-heavy:    800;

  /* Line heights */
  --line-height-tight:   1.15;
  --line-height-snug:    1.35;
  --line-height-normal:  1.65;
  --line-height-relaxed: 1.8;
}
```

---

## 4. Spacing Scale

```css
:root {
  --space-xs:  0.5rem;  /*  8px */
  --space-sm:  1rem;    /* 16px */
  --space-md:  1.5rem;  /* 24px */
  --space-lg:  2.5rem;  /* 40px */
  --space-xl:  4rem;    /* 64px */
  --space-2xl: 6.5rem;  /* 104px */
  --space-3xl: 8.5rem;  /* 136px */

  /* Containers & Section Margins */
  --container-max:     1240px;
  --container-padding: clamp(1rem, 4vw, 2.5rem);
  --section-padding:   clamp(4.5rem, 8vw, 7.5rem);
}
```

---

## 5. Border Radius (Strict Brutalist Architecture)

> **IMPORTANT REQUIREMENT:** As explicitly instructed by the client, the website strictly adheres to a **zero border-radius policy**. No curved borders or rounded pill shapes are allowed on buttons, cards, boxes, inputs, or image wrappers.

```css
:root {
  --radius-none: 0px !important;
  --radius-sm:   0px !important;
  --radius-md:   0px !important;
  --radius-lg:   0px !important;
  --radius-full: 0px !important;
}

/* Enforced universally */
button,
input,
select,
textarea,
.btn,
.btn-circle,
.product-card,
.cert-card,
.stat-card,
.team-card-photo-wrap,
.floating-side-tab {
  border-radius: 0 !important;
}
```

---

## 6. Button Styles

All buttons feature sharp 0-radius corners, strong hover transitions, and clean typography:

| Class | Background | Text Color | Border | Usage |
|---|---|---|---|---|
| `.btn--accent` | `#ea7124` | `#ffffff` | none | Primary call-to-action |
| `.btn--soil-yellow` | `#f3c319` | `#121a2f` | none | Secondary action, hero buttons |
| `.btn--dark` | `#121a2f` | `#ffffff` | none | Navigation actions, contact button |
| `.btn--outline` | transparent | `#121a2f` | `1px solid #121a2f` | Tertiary link buttons |
| `.btn-circle` | `#37b829` | `#ffffff` | none | Action icon square (44x44px, sharp) |

---

## 7. Key Components

### 7.1 Products Archive Grid & Filter
- **Desktop Filter Tabs:** Clean text buttons with an orange underline indicator for the active category.
- **Mobile Filter Dropdown:** Sharp custom `<select>` menu (`.products-mobile-select`) syncing seamlessly with desktop tabs on smaller viewports.
- **Transparent Product Presentation:** Product image renders cleanly without heavy container borders, focusing directly on the packaging artwork.

### 7.2 Certifications Showcase
- Vector-rendered SVG trust marks for **Halal India**, **ISO 9001:2015**, **FSSAI**, and **ISO 22000:2005 (FSMS)**.
- Sharp white cards with subtle hover lift and shadow elevation.

### 7.3 Floating Side Bar
- Fixed right-hand quick access bar (`.floating-side-tab`) with sharp corners and icons for fast navigation.

---

## 8. Breakpoints & Responsiveness

```css
/* Responsive media query standard */
@media (max-width: 1200px) { /* Small Desktop / Large Tablet */ }
@media (max-width: 1024px) { /* Tablet Landscape */ }
@media (max-width: 768px)  { /* Tablet Portrait & Large Phone */ }
@media (max-width: 576px)  { /* Mobile Phone */ }
```

---

## Change Log

| Date | Change | By |
|---|---|---|
| 2026-10-21 | Enforced strict zero border-radius (`border-radius: 0`) site-wide; documented mobile category dropdown and SVG cert badges | Antigravity AI |
| 2026-10-08 | Refactored global typography, aligned real Saatvik Agro color palette, removed legacy dairy tokens | Antigravity AI |
| 2026-10-07 | Initial design system created | Claude Sonnet 4.6 |
