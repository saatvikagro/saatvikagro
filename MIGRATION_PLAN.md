# Saatvik Agro — WordPress Migration Master Plan & Progress Tracker

> **Theme Directory:** `D:\Local Sites\saatvik-agro\app\public\wp-content\themes\saatvikagro`  
> **Source Directory:** `D:\Local Sites\saatvik-agro\10 Saatvik Agro`  
> **Reference Model:** Cyntexa Theme Architecture (`cyntexa-2024`)  
> **Goal:** 100% Pure Custom WordPress Theme — Zero Builders — Zero Layout Breakage  

---

## Overall Progress Summary

| Phase | Description | Total Steps | Completed | Status |
| :--- | :--- | :---: | :---: | :---: |
| **Phase 0** | **Architecture & Foundation Setup** | 3 | 3 | ✅ **100% Completed** |
| **Phase 1** | **Global Shell & Reusable Parts** | 4 | 4 | ✅ **100% Completed** |
| **Phase 2** | **Homepage (`front-page.php`)** | 2 | 2 | ✅ **100% Completed** |
| **Phase 3** | **Core Business Pages** | 5 | 5 | ✅ **100% Completed** |
| **Phase 4** | **Media, Articles & Legal Pages** | 4 | 4 | ✅ **100% Completed** |
| **Phase 5** | **WordPress Pages & Route Configuration** | 3 | 3 | ✅ **100% Completed** |
| **Phase 6** | **End-to-End Testing & Form Verification** | 4 | 4 | ✅ **100% Completed** |
| **Phase 7** | **Dynamic CPT, ACF & Media Integration** | 5 | 5 | ✅ **100% Completed** |
| **Phase 8** | **Cyntexa Archive & Single Synchronization** | 4 | 4 | ✅ **100% Completed** |
| **Phase 9** | **ACF Admin UI Database Synchronization** | 3 | 3 | ✅ **100% Completed** |
| **Phase 10** | **Theme Folder Sanitization & Cleanup** | 5 | 5 | ✅ **100% Completed** |
| **Phase 11** | **BOM Removal, Modal Isolation & CTA Cleanup** | 3 | 3 | ✅ **100% Completed** |
| **Phase 12** | **Unified & Harmonic GSAP Scroll Animations** | 4 | 4 | ✅ **100% Completed** |
| **Total** | **End-to-End Migration** | **49** | **49** | ✅ **100% Completed** |

---

## Animation Architecture Refactor (`assets/js/main.js`)

1. **Eliminated Isolated Heading Popping:**
   - **Previous Bug:** `gsap.utils.toArray('h2, .intro-label')` triggered isolated `y: 30` animations on bare headings. When scrolling, headings jumped up while their companion eyebrows and paragraphs remained completely static, causing an awkward "heading popping up alone" appearance.
   - **Resolution:** Replaced with **Unified Section Header Groups** (`.intro-header`, `.prod-header-grid`, `.certifications-header`, `.about-story-col-left`, `.about-plant-header`, `.careers-join-content`, `.careers-perks-header`, etc.). When a section header enters the viewport, its eyebrow, heading, and description animate **together as a unit** with a subtle, cohesive 0.08s stagger (`y: 22` to `0`, `opacity: 0` to `1`).

2. **Full Section & Grid Coordination:**
   - **Homepage:** Intro cards (12 items), Products (large + small grid), About (5 columns), Facility banner, and Certifications (9 cards) each animate in coordinated, gentle staggered sequences.
   - **About Us:** Hero box, Story columns, Plant specs & metrics cards, Strategic advantages grid, and Core values items all animate in harmonious staggers.
   - **Careers:** Hero split columns, Why join grid, Perks cards (4 items), Job opening items (accordion list), and Resume CTA banner all enter smoothly.
   - **Products & Media:** Shop cards on `/products/` and media cards on `/media/` enter in uniform, subtle staggered waves.

3. **Performance & Rendering Stability:**
   - **`once: true`**: Applied to all ScrollTriggers to eliminate jitter and prevent elements from re-animating or jumping on reverse scroll.
   - **`clearProps: "transform,opacity"`**: Clears inline styles after animation completion to prevent composite layer font blurriness and guarantee 100% crisp typography rendering on Windows.
   - **`ScrollTrigger.refresh()`**: Automatically recalculates trigger offsets upon `window.load` to handle all font and image rendering.

---

## Live Verified Routes (All HTTP 200 OK — Harmonic Animation Flow)

| Type | Page Name | URL | Animation Status | Live Status |
| :--- | :--- | :--- | :---: | :---: |
| **Static** | Home (Front Page) | `http://saatvik-agro.local/` | ✅ Harmonized | `200 OK` |
| **Archive** | Products Catalog | `http://saatvik-agro.local/products/` | ✅ Harmonized | `200 OK` |
| **Single** | Single Product Details | `http://saatvik-agro.local/product/starch-food-grade/` | ✅ Harmonized | `200 OK` |
| **Archive** | Articles & Insights | `http://saatvik-agro.local/articles/` | ✅ Harmonized | `200 OK` |
| **Single** | Single Article Reader | `http://saatvik-agro.local/article/choosing-a-maize-ingredient/` | ✅ Harmonized | `200 OK` |
| **Static** | About Us | `http://saatvik-agro.local/about-us/` | ✅ Harmonized | `200 OK` |
| **Static** | Careers | `http://saatvik-agro.local/careers/` | ✅ Harmonized | `200 OK` |
| **Static** | Contact Us | `http://saatvik-agro.local/contact-us/` | ✅ Harmonized | `200 OK` |
| **Static** | Media & PR | `http://saatvik-agro.local/media/` | ✅ Harmonized | `200 OK` |
| **Static** | Privacy Policy | `http://saatvik-agro.local/privacy-policy/` | ✅ Clean | `200 OK` |
| **Static** | Terms & Conditions | `http://saatvik-agro.local/terms-conditions/` | ✅ Clean | `200 OK` |
