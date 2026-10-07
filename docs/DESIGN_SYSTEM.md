# Design System — Saatvik Agro

> Created: 2026-10-07 | Phase 1 → updated progressively through Phase 2+

---

## 1. Brand Overview

- **Client:** Saatvik Agro (Agro-ingredient unit of Saatvik Group)
- **Product:** Maize-based ingredients (Shakti range) for food, nutrition, animal feed, industrial use
- **Brand personality:** Scientific precision + purity + consistency + trust. Not rustic/folksy — professional B2B.

---

## 2. Color Palette

```css
:root {
  /* Primary brand colors (from client site) */
  --color-primary:       #1B3051;  /* Deep navy — authority, trust */
  --color-primary-dark:  #0F1E35;  /* Hover state for primary */
  --color-secondary:     #EC8026;  /* Warm orange — energy, CTAs */
  --color-secondary-dark: #C96818; /* Hover state for secondary */
  --color-accent:        #F5A623;  /* Golden amber — decorative highlights */

  /* Background colors */
  --color-bg:            #FFFFFF;  /* Page background */
  --color-bg-alt:        #F7F5F0;  /* Off-white cream — alternate sections */
  --color-bg-dark:       #0F1E35;  /* Dark sections, footer */
  --color-bg-overlay:    rgba(15, 30, 53, 0.75); /* Hero overlay */

  /* Text */
  --color-text:          #1A1A2E;  /* Primary body text */
  --color-text-light:    #5C6070;  /* Meta, captions, secondary */
  --color-text-white:    #FFFFFF;  /* Text on dark backgrounds */
  --color-heading:       #1B3051;  /* Section headings */

  /* Borders */
  --color-border:        #E8E4DC;  /* Subtle warm-tone borders */

  /* Status */
  --color-success:       #2D7A4F;  /* Form success */
  --color-error:         #C62828;  /* Form error */
}
```

---

## 3. Typography

```css
:root {
  /* Font families */
  --font-heading: 'Instrument Sans', 'DM Sans', sans-serif;
  --font-body:    'DM Sans', 'Inter', sans-serif;

  /* Scale */
  --font-size-xs:   12px;
  --font-size-sm:   14px;
  --font-size-base: 17px;
  --font-size-lg:   20px;
  --font-size-xl:   clamp(1.5rem, 3vw, 2.25rem);   /* H3 */
  --font-size-2xl:  clamp(2rem, 4vw, 3rem);         /* H2 section headings */
  --font-size-hero: clamp(2.5rem, 6vw, 5rem);       /* H1 hero */

  /* Weights */
  --font-weight-regular:   400;
  --font-weight-medium:    500;
  --font-weight-semibold:  600;
  --font-weight-bold:      700;

  /* Line heights */
  --line-height-tight:    1.2;
  --line-height-snug:     1.4;
  --line-height-normal:   1.6;
  --line-height-relaxed:  1.8;
}
```

### Font Loading (Google Fonts)
```html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Instrument+Sans:wght@400;600;700&display=swap" rel="stylesheet">
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
  --space-2xl: 6rem;    /* 96px */
  --space-3xl: 8rem;    /* 128px */

  /* Container */
  --container-max:     1280px;
  --container-padding: clamp(1rem, 5vw, 2.5rem);
  --section-padding:   clamp(4rem, 8vw, 8rem);
}
```

---

## 5. Border Radius

```css
:root {
  --radius-sm:   4px;
  --radius-md:   8px;
  --radius-lg:   16px;
  --radius-xl:   24px;
  --radius-pill: 50px;
  --radius-full: 9999px;
}
```

---

## 6. Shadows

```css
:root {
  --shadow-sm: 0 2px 8px  rgba(27, 48, 81, 0.08);
  --shadow-md: 0 4px 20px rgba(27, 48, 81, 0.12);
  --shadow-lg: 0 8px 40px rgba(27, 48, 81, 0.16);
  --shadow-xl: 0 16px 60px rgba(27, 48, 81, 0.20);
}
```

---

## 7. Breakpoints

```css
/* Mobile first. Add min-width media queries for larger sizes. */
/* 360px  — base (mobile)   */
/* 768px  — tablet          */
/* 1024px — desktop         */
/* 1440px — wide            */

@media (min-width: 768px)  { /* tablet  */ }
@media (min-width: 1024px) { /* desktop */ }
@media (min-width: 1440px) { /* wide    */ }
```

---

## 8. Button Styles

| Variant | Background | Text Color | Border | Radius | Padding |
|---------|-----------|------------|--------|--------|---------|
| `.btn--primary` | --color-secondary (#EC8026) | #fff | none | --radius-md | 14px 28px |
| `.btn--secondary` | transparent | --color-primary | 2px solid --color-primary | --radius-md | 12px 26px |
| `.btn--dark` | --color-primary (#1B3051) | #fff | none | --radius-md | 14px 28px |
| `.btn--white` | #fff | --color-primary | none | --radius-md | 14px 28px |

Hover: darken background by ~10%, subtle lift (`transform: translateY(-2px)`), shadow increase.

---

## 9. Component Conventions

### BEM Naming
```
.block {}
.block__element {}
.block--modifier {}
```

Examples:
- `.product-card`, `.product-card__image`, `.product-card--featured`
- `.btn`, `.btn--primary`, `.btn--lg`
- `.navbar`, `.navbar__menu`, `.navbar--scrolled`

### CSS Custom Properties Scope
- Global tokens in `:root` (variables.css)
- Component-level overrides scoped to their block class
- Never use inline styles (hard rule from project brief)

---

## 10. Animation Guidelines

| Animation | Trigger | Duration | Easing |
|-----------|---------|----------|--------|
| Fade-in-up | IntersectionObserver (scroll) | 0.6s | ease-out |
| Stagger delay | Sibling elements | +0.1s per item | ease-out |
| Button hover | :hover | 0.2s | ease |
| Nav scroll | scroll event | 0.3s | ease |
| Counter | IntersectionObserver | 1.5s | ease-out |
| Modal open | click | 0.3s | cubic-bezier(0.34, 1.56, 0.64, 1) |

```css
/* Utility class for scroll-reveal (applied by JS) */
.reveal { opacity: 0; transform: translateY(24px); }
.reveal.visible { opacity: 1; transform: translateY(0); transition: opacity 0.6s ease-out, transform 0.6s ease-out; }
```

---

## 11. Grid System

No CSS framework. Pure CSS Grid and Flexbox.

```css
.container {
  width: 100%;
  max-width: var(--container-max);
  margin-inline: auto;
  padding-inline: var(--container-padding);
}

.grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-lg); }
.grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--space-lg); }

/* Responsive: stack at tablet */
@media (max-width: 768px) {
  .grid-2, .grid-3 { grid-template-columns: 1fr; }
}
```

---

## 12. Icon System

- Use inline SVG icons for performance (no icon font library)
- SVG icons stored in `assets/images/icons/`
- Standard size: 24x24px, viewBox="0 0 24 24"
- Color via `currentColor` for easy theming

---

## Change Log

| Date | Change | By |
|------|--------|----|
| 2026-10-07 | Initial design system created from Phase 1 analysis | Claude Sonnet 4.6 |
