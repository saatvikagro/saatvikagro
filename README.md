# Saatvik Agro — WordPress Theme

Official custom WordPress theme developed for **Saatvik Agro Processors Private Limited**, a manufacturer of high-purity maize starch, liquid glucose syrups, maltodextrin, and animal feed ingredients.

---

## 🌾 Overview

This theme is built from the ground up to deliver a clean, fast, and high-performance corporate presence. It features an industrial design system with custom page templates, structured data, and tailored Custom Post Types.

### Key Highlights
- **Performance First:** Lightweight CSS and vanilla JavaScript with minimal dependencies.
- **Micro-Interactions & Animations:** Powered by GSAP and ScrollTrigger.
- **Custom Post Types (CPT):**
  - `product` — Industrial and food-grade maize products with custom specs.
  - `article` — Company announcements, news, and insights.
- **Brutalist / Industrial Design:** Custom typography, structured grid layouts, high contrast, and accessible UI components.
- **SEO & Social Meta:** Native OpenGraph and Twitter card integration with clean canonical URL resolution.

---

## 📁 Theme Directory Structure

```
saatvikagro/
├── 404.php                     # Custom 404 Error page
├── archive-article.php         # Media / Articles archive template
├── archive-product.php         # Products catalog archive template
├── footer.php                  # Global footer
├── front-page.php              # Homepage template
├── functions.php               # Core theme setup, CPT registration, asset enqueue
├── header.php                  # Global header, metadata & navigation
├── index.php                   # Fallback template
├── page-about-us.php           # About Us page template
├── page-careers.php            # Careers & Culture page template
├── page-contact-us.php         # Contact Us template
├── page-media.php              # Media & Press page template
├── page-privacy-policy.php     # Privacy Policy template
├── page-terms-conditions.php   # Terms & Conditions template
├── single-article.php          # Single article template
├── single-product.php          # Single product template
├── single.php                  # Standard single post fallback
├── style.css                   # WordPress Theme declaration & root stylesheet
├── assets/
│   ├── css/                    # Modular page and component stylesheets
│   └── js/                     # Application scripts and form handlers
└── parts/                      # Reusable template components (modals, mobile navigation)
```

---

## 🛠️ Requirements & Compatibility

- **WordPress:** 6.0 or higher
- **PHP:** 8.0 or higher
- **Recommended Plugins:**
  - Advanced Custom Fields (ACF) or ACF Pro
  - Simple History (Audit logging)
  - Enable Media Replace

---

## 🚀 Deployment

The repository is configured with automated GitHub Actions CI/CD to deploy theme updates seamlessly to the hosting server on every commit pushed to the `main` branch.

---

## 📄 License & Rights

Copyright © 2026 Saatvik Agro Processors Private Limited. All Rights Reserved.  
Proprietary code — not for unauthorized redistribution or public re-use.
