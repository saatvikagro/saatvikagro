# Cyntexa WordPress Architecture Analysis & Saatvik Agro Theme Blueprint

> **Reference Source:** `D:\Local Sites\cyntexa\app\public\wp-content\themes\cyntexa-2024`  
> **Target Theme:** `D:\Local Sites\saatvik-agro\app\public\wp-content\themes\saatvikagro`  
> **Source Static Site:** `D:\Local Sites\saatvik-agro\10 Saatvik Agro`  
> **Author & Architect:** Saatvik Agro Engineering Team  
> **Standard:** 100% Pure Custom PHP — Zero Builders — Performance Engineered

---

## 1. Deep Dive: Cyntexa Theme Architecture Analysis

Humne Cyntexa ke theme codebase (`cyntexa-2024`) ko end-to-end deep inspect kiya hai. Cyntexa ka structure typical bloated WordPress themes jaisa nahi hai, balki ek modern, high-performance web engineering standard follow karta hai:

### A. Core Architecture Philosophy
1. **Zero Page Builders:**
   - Na Elementor, na Divi, na WPBakery.
   - Koi unnecessary database queries ya heavy DOM wrapper divs nahi hain.
2. **Dedicated Per-Page Bundles:**
   - Har page ka apna specific CSS aur JS bundle hota hai (Cyntexa me `build/{pageName}/{pageName}.css` aur `build/{pageName}/{pageName}.bundle.js`).
   - Isse unused CSS/JS kisi dusre page par load hokar render-blocking nahi banta.
3. **Modular Template Parts (`parts/`):**
   - Reusable sections (popups, testimonials, CTA strips, forms, headers) `parts/` folder ke andar isolated `.php` files me hote hain.
   - Inhe `get_template_part('parts/component-name')` se load kiya jata hai.
4. **Stripped-Down `functions.php` (Zero Bloat Core):**
   - Emojis detection script remove.
   - Embeds discovery and host JS remove.
   - Dashicons frontend se deregister.
   - Classic theme styles, global styles (`wp-block-library`), aur Gutenberg block CSS completely dequeue.
   - RSD link, WordPress version generator, aur robot max preview tags removed.
   - REST API whitelist filter (unwanted endpoints blocked from public access).
   - CORS headers enabled for headless / asynchronous API actions.
   - Admin toolbar disabled on frontend (`show_admin_bar(false)`).
5. **Direct Asset Resolution via `get_theme_file_uri()`:**
   - Sabhi static assets (images, icons, styles, scripts) dynamic WordPress theme helper functions se resolve hote hain taki local, staging aur live environments me URLs break na hon.

---

## 2. Cyntexa Folder Structure Breakdown

```
cyntexa-2024/
│
├── functions.php              # Core clean hooks, dequeue bloat, REST whitelist, CORS
├── header.php                 # Global <head>, Google Fonts, preconnects, favicon, navbar
├── footer.php                 # Global footer, loading spinner, modals, scripts, wp_footer()
├── front-page.php             # Homepage template (loads frontPage CSS/JS bundles)
├── index.php                  # Fallback WordPress template
├── 404.php                    # Custom 404 error page
├── style.css                  # Theme metadata header
├── screenshot.png             # WP Admin theme preview card
│
├── page-*.php                 # Individual custom page templates
│   ├── page-about-us.php
│   ├── page-contact-us.php
│   ├── page-careers.php
│   ├── page-privacy-policy.php
│   └── page-terms-and-conditions.php
│
├── single-*.php               # Single item post type templates
│   ├── single-careers.php
│   └── single-blog.php
│
├── archive-*.php              # Archive listings
│   ├── archive-careers.php
│   └── archive-blog.php
│
├── parts/                     # Reusable modular components
│   ├── section-testimonial.php
│   ├── section-get-in-touch.php
│   ├── black-friday-popup.php
│   └── subscribe-cta-section.php
│
├── helpers/                   # JS/PHP helper logic
│   ├── formValidator.js
│   └── generateCountryData.js
│
├── favicons/                  # App icons, favicon.ico, site.webmanifest
├── images/                    # Theme-level static image assets
└── build/                     # Per-page compiled/bundled assets
    ├── frontPage/ (css + js)
    ├── aboutUs/ (css + js)
    ├── careers/ (css + js)
    └── contactUs/ (css + js)
```

---

## 3. Saatvik Agro Theme Architecture (Adapted 1:1)

Saatvik Agro ka static brutalist website (`10 Saatvik Agro`) Cyntexa ke pattern par seamlessly map hota hai:

### Folder & File Tree:
```
wp-content/themes/saatvikagro/
│
├── CYNTEXA_THEME_ARCHITECTURE.md    # Yeh master architecture blueprint doc
├── style.css                        # Theme metadata (Theme Name: Saatvik Agro, Author: Saatvik Agro Team)
├── screenshot.png                   # Custom theme thumbnail
├── functions.php                    # Performance engine (clean Cyntexa bloat-stripper + supports)
├── header.php                       # Brutalist sticky header, dual logo, preconnects, fonts, navigation
├── footer.php                       # Dark industrial footer, corporate addresses, legal links, scripts
├── front-page.php                   # Homepage (Video Hero, Who We Are, Products, Metrics, Certs)
├── index.php                        # Fallback template
├── 404.php                          # Brutalist 404 Page Not Found
│
├── page-about-us.php                # About Us (Mission, Values, Quality, Facility, Infrastructure)
├── page-products.php                # Products Catalog (All 6 core products, tab filters)
├── single-product.php               # Product Detail Single (Specs, Packaging, Uses, Brochure CTA)
├── page-careers.php                 # Careers Hub (7 sections, Culture, Openings, Application form)
├── page-contact-us.php              # Contact Us (Factory info, Interactive Google Sheets Lead Form)
├── page-media.php                   # Media & Articles Hub (Press, Industry Articles, Video Tour)
├── single-post.php                  # Article Detail Single (Editorial layout, brutalist styling)
├── page-privacy-policy.php          # Legal: Privacy Policy
├── page-terms-conditions.php        # Legal: Terms & Conditions
│
├── parts/                           # Reusable Modular Template Parts
│   ├── modal-brochure.php           # Product Technical Brochure Download Lead Modal
│   ├── modal-career.php             # Careers Resume Upload & Application Lead Modal
│   ├── mobile-nav.php               # Responsive Brutalist Mobile Navigation Drawer
│   └── section-cta-banner.php       # Reusable Brutalist CTA Banner (Get In Touch / Inquire)
│
├── data/                            # Static JSON Datastores (Fallback & structured data)
│   ├── products.json                # All 6 charcoal products data & specs
│   ├── industries.json              # Targeted industrial use cases
│   └── site-config.json             # Global company metadata & contact details
│
└── assets/                          # Static & Page Assets
    ├── css/
    │   ├── global.css               # Brutalist design system, fonts, reset, layout, nav & footer
    │   ├── index.css                # Homepage specific styles & hero video styling
    │   ├── about.css                # About page timeline, stats, leadership styles
    │   ├── products.css             # Product grid & catalog styles
    │   ├── product-single.css       # Product single specification table & image gallery
    │   ├── careers.css              # Careers hero, openings accordion, modal styles
    │   ├── contact.css              # Contact form & factory map styles
    │   ├── media.css                # Media cards & press grid styles
    │   ├── article-single.css       # Article single reader styles
    │   └── legal.css                # Privacy policy & terms typography
    ├── js/
    │   ├── main.js                  # Global navbar toggle, active state, scroll restoration, smooth scroll
    │   ├── form-handler.js          # Google Sheets integration (Brochure, Careers Base64, Contact lead)
    │   ├── products-data.js         # Client-side product data loader & filter logic
    │   ├── product-single.js        # Single product dynamic data renderer & specs builder
    │   ├── articles-data.js         # Media articles store
    │   └── article-single.js        # Single article reader dynamic loader
    ├── images/                      # Dual logos, factory photography, certifications, textures
    ├── careers/                     # Careers hero and perks imagery
    └── brochure/                    # Downloadable technical PDF specification sheets
```

---

## 4. Static Source ➔ WordPress Template Mapping

| Static Source (`10 Saatvik Agro`) | Target WordPress Template | URL Route | Description |
| :--- | :--- | :--- | :--- |
| `index.html` | `front-page.php` | `/` | Homepage with video hero & stats |
| `about.html` | `page-about-us.php` | `/about-us/` | Corporate profile & infrastructure |
| `products.html` | `page-products.php` | `/products/` | Product line & bulk packaging |
| `product-single.html` | `single-product.php` | `/product/?id={slug}` or `/product/{slug}/` | Detailed technical product specs |
| `careers.html` | `page-careers.php` | `/careers/` | Work culture & active job openings |
| `contact.html` | `page-contact-us.php` | `/contact-us/` | Contact details & inquiry form |
| `media.html` | `page-media.php` | `/media/` | Press releases & charcoal insights |
| `article-single.html` | `single-post.php` | `/article/?id={slug}` | Editorial post reader |
| `privacy-policy.html` | `page-privacy-policy.php` | `/privacy-policy/` | Legal privacy documentation |
| `terms-conditions.html` | `page-terms-conditions.php` | `/terms-conditions/` | Commercial terms & conditions |
| Modal in `index.html`/`products.html` | `parts/modal-brochure.php` | Embedded in `footer.php` | Lead capture + instant PDF download |
| Modal in `careers.html` | `parts/modal-career.php` | Embedded in `footer.php` / `page-careers.php` | Resume submission via Google Apps Script |

---

## 5. Technical Implementation Guidelines

### A. Asset Loading Standard (Matching Cyntexa)
Each page template will include its dedicated stylesheet right in the `<head>` or before `get_header()`, exactly like Cyntexa:
```php
<link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/global.css'); ?>?v=<?php echo wp_get_theme()->get('Version'); ?>">
<link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/index.css'); ?>?v=<?php echo wp_get_theme()->get('Version'); ?>">
```
And load `main.js` and `form-handler.js` in `footer.php`:
```php
<script defer src="<?php echo get_theme_file_uri('assets/js/main.js'); ?>?v=<?php echo wp_get_theme()->get('Version'); ?>"></script>
```

### B. Dynamic Navigation & Absolute URL Resolution
Har link ko hardcode karne ki jagah WordPress standard use hoga:
- Home: `<?php echo esc_url(home_url('/')); ?>`
- About Us: `<?php echo esc_url(home_url('/about-us/')); ?>`
- Products: `<?php echo esc_url(home_url('/products/')); ?>`
- Careers: `<?php echo esc_url(home_url('/careers/')); ?>`
- Contact Us: `<?php echo esc_url(home_url('/contact-us/')); ?>`
- Media: `<?php echo esc_url(home_url('/media/')); ?>`

### C. Zero Layout Breakage Guarantee
- Original HTML markup, CSS classes, CSS Grid, Flexbox properties, aur inline styles **100% preserve** rahenge.
- Koi third-party CSS framework nahi aayega jo font sizes ya margins override kare.
- Theme ka pixel-perfect Brutalist look dono desktop aur mobile par 100% same rahega.
