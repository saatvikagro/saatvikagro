# Saatvik Agro Website

A modern, fast, static website for **Saatvik Agro**, rebuilt from WordPress to plain HTML, CSS and JavaScript.

- **Live site (old, WordPress):** https://www.saatvikagro.com/
- **Status:** 🚧 In development

---

## 📌 Table of Contents

1. [Overview](#-overview)
2. [Tech Stack](#-tech-stack)
3. [Folder Structure](#-folder-structure)
4. [Getting Started](#-getting-started)
5. [Environment Variables](#-environment-variables)
6. [How to Edit Content](#-how-to-edit-content)
7. [How to Add a New Page](#-how-to-add-a-new-page)
8. [Deployment](#-deployment)
9. [Pending Items / TODO](#-pending-items--todo)
10. [Credits](#-credits)

---

## 🌱 Overview

This project is a complete revamp of the Saatvik Agro website. The goals are:

- Move away from WordPress to a lightweight static site
- Improve speed, SEO and mobile experience
- Keep all original content from the client's current website
- Maintain a clean, professional and scalable code structure

**Pages (planned):**

- Home
- About Us
- Products
- Gallery
- Blog / News (if applicable)
- Contact Us
- 404 Page

---

## 🛠 Tech Stack

| Area            | Technology                                    |
| --------------- | --------------------------------------------- |
| Markup          | HTML5 (semantic)                              |
| Styling         | CSS3 (BEM naming, CSS variables)              |
| Scripting       | Vanilla JavaScript (ES6 modules)              |
| Dev tooling     | Node.js, live-server / Vite, Prettier, ESLint |
| Version control | Git + GitHub                                  |
| Hosting         | _To be decided (Netlify / Vercel / cPanel)_   |

---

## 📁 Folder Structure

```
saatvik-agro/
├── README.md
├── .gitignore
├── .env.example
├── .editorconfig
├── package.json
├── index.html
├── pages/            # Inner pages (about, products, contact, etc.)
├── partials/         # Reusable parts (header, footer)
├── assets/
│   ├── css/
│   │   ├── base/         # reset, variables, typography
│   │   ├── components/   # buttons, cards, navbar, forms, footer
│   │   ├── sections/     # hero, about, products, testimonials...
│   │   ├── pages/        # page-specific styles
│   │   └── main.css      # imports everything
│   ├── js/
│   │   ├── modules/      # navbar, slider, counter, form, animations
│   │   ├── utils/
│   │   └── main.js
│   ├── images/           # logo, hero, products, gallery, icons
│   └── fonts/
├── data/             # JSON content (products, testimonials, site config)
└── docs/             # Design system, deployment notes, content TODO
```

> ℹ️ This structure may be refined as development progresses.

---

## 🚀 Getting Started

### Prerequisites

- [Node.js](https://nodejs.org/) (LTS version)
- [Git](https://git-scm.com/)

### Installation

```bash
# 1. Clone the repository
git clone <repository-url>
cd saatvik-agro

# 2. Install dev dependencies
npm install

# 3. Create your environment file
cp .env.example .env

# 4. Start the local development server
npm run dev
```

Open the URL shown in the terminal (usually `http://localhost:3000` or `http://localhost:5173`).

### Useful Commands

| Command          | What it does                              |
| ---------------- | ----------------------------------------- |
| `npm run dev`    | Starts local server with live reload      |
| `npm run build`  | Creates production-ready files (minified) |
| `npm run format` | Formats code with Prettier                |
| `npm run lint`   | Checks code for errors                    |

---

## 🔐 Environment Variables

Copy `.env.example` to `.env` and fill in the values. **Never commit `.env` to Git.**

| Variable                | Description                                              |
| ----------------------- | -------------------------------------------------------- |
| `SITE_URL`              | Final website URL                                        |
| `CONTACT_FORM_ENDPOINT` | Form service URL (Formspree / Web3Forms / Netlify Forms) |
| `GOOGLE_MAPS_API_KEY`   | Google Maps key (if used)                                |
| `GA_MEASUREMENT_ID`     | Google Analytics ID (if used)                            |

---

## ✏️ How to Edit Content

- **Text and layout:** edit the relevant `.html` file inside `index.html` or `pages/`
- **Products, testimonials, site info:** edit the JSON files inside `data/`
- **Images:** add to `assets/images/<category>/` (use optimized `.webp` where possible, and always add `alt` text)
- **Colors, fonts, spacing:** change the variables in `assets/css/base/variables.css`

---

## ➕ How to Add a New Page

1. Create a new file in `pages/` (e.g. `pages/certifications.html`)
2. Copy the structure of an existing page (head, header, footer)
3. Add page-specific styles in `assets/css/pages/certifications.css` and import it in `main.css`
4. Add the link to the navigation in `partials/header.html`
5. Add the page to `sitemap.xml`

---

## 🌐 Deployment

_Detailed steps will be added in `docs/DEPLOYMENT.md`._

Basic flow:

1. Run `npm run build`
2. Upload the output to the hosting platform (Netlify / Vercel / cPanel)
3. Add environment variables on the hosting dashboard
4. Connect the domain and enable HTTPS

---

## 📝 Pending Items / TODO

- [ ] Confirm final content with client
- [ ] Get high-resolution logo and brand colors
- [ ] Collect product images and details
- [ ] Confirm contact details and map location
- [ ] Decide hosting and domain setup
- [ ] Set up redirects from old WordPress URLs (to protect SEO)

See `docs/CONTENT_TODO.md` for the full list.

---

## 👤 Credits

- **Developer:** Priyanshu Paliwal
- **Client:** Saatvik Agro
- **Design inspiration:** Ancora Themes (Soil, Dairy Farm demo). Layout reference only.

---

© Saatvik Agro. All rights reserved.
