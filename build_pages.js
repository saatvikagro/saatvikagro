const fs = require('fs');
const path = require('path');

const shellCSS = `
    /* Global & Header/Footer CSS from exact match */
    :root {
      --color-primary: #1B3051;
      --color-secondary: #EC8026;
      --color-bg: #FFFFFF;
      --color-bg-alt: #F9F8F6;
      --radius-lg: 16px;
      --radius-xl: 24px;
      --radius-pill: 50px;
    }
    body {
      font-family: 'DM Sans', sans-serif;
      color: #4A505E;
      background-color: var(--color-bg);
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }
    h1, h2, h3, h4 {
      font-family: 'Instrument Sans', serif;
      color: var(--color-primary);
      margin-top: 0;
      letter-spacing: -0.03em;
    }
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 0 32px;
      height: 50px;
      font-family: 'DM Sans', sans-serif;
      font-weight: 700;
      font-size: 14px;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      border-radius: 50px;
      text-decoration: none;
      transition: all 0.3s ease;
      border: none;
      cursor: pointer;
    }
    .btn--dark { background-color: var(--color-primary); color: #fff; }
    .btn--dark:hover { background-color: var(--color-secondary); color: #fff; }
    .btn--outline { background-color: transparent; border: 2px solid var(--color-primary); color: var(--color-primary); }
    .btn--outline:hover { background-color: var(--color-primary); color: #fff; }

    /* Navbar */
    .header-main {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 5%;
      background: #fff;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 4px 20px rgba(0,0,0,0.05);
    }
    .header-logo img { height: 40px; }
    .header-nav { display: flex; gap: 32px; list-style: none; margin: 0; padding: 0; }
    .header-nav a { text-decoration: none; color: var(--color-primary); font-weight: 600; font-size: 16px; transition: color 0.3s; }
    .header-nav a:hover { color: var(--color-secondary); }

    /* Footer */
    .footer-soil {
      background: var(--color-primary);
      padding: 100px 5% 50px 5%;
      color: #fff;
    }
    .footer-top {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid rgba(255,255,255,0.1);
      padding-bottom: 50px;
      margin-bottom: 50px;
      flex-wrap: wrap;
      gap: 30px;
    }
    .footer-top h2 { font-size: clamp(2rem, 4vw, 3rem); color: #fff; margin: 0; max-width: 600px;}
    .footer-links-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 40px;
    }
    .footer-links-grid p { color: rgba(255,255,255,0.6); }
    .footer-links-grid h4 { color: #fff; font-size: 1.2rem; margin-bottom: 20px;}
    .footer-links-grid ul { list-style: none; padding: 0; margin: 0; }
    .footer-links-grid ul li { margin-bottom: 10px; }
    .footer-links-grid ul a { color: rgba(255,255,255,0.7); text-decoration: none; }
    .footer-links-grid ul a:hover { color: var(--color-secondary); }

    @media (max-width: 768px) {
      .navbar__toggle { display: block !important; }
      .header-nav { display: none; width: 100%; flex-direction: column; position: absolute; top: 80px; left: 0; background: #fff; padding: 20px; box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
      .header-btn { display: none; }
    }
`;

const getHTML = (title, specificCSS, bodyHTML) => `<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>${title} | Saatvik Agro</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
${shellCSS}
${specificCSS}
  </style>
</head>
<body>
  <!-- Header -->
  <header class="header-main">
    <a href="../index.html" class="header-logo">
      <img src="../assets/images/logo/logo.svg" alt="Saatvik Agro" onerror="this.src='https://placehold.co/200x50/FFFFFF/1B3051?text=Saatvik+Agro'" />
    </a>
    <button class="navbar__toggle" aria-label="Toggle navigation" style="display: none; background: none; border: none; font-size: 24px; cursor: pointer; color: var(--color-primary);">
      ☰
    </button>
    <ul class="header-nav">
      <li><a href="../index.html">Home</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="products.html">Products</a></li>
      <li><a href="industries.html">Industries</a></li>
      <li><a href="contact.html">Contact Us</a></li>
    </ul>
    <a href="contact.html" class="btn btn--dark header-btn">Get in Touch</a>
  </header>

${bodyHTML}

  <!-- Footer -->
  <footer class="footer-soil">
    <div class="footer-top">
      <h2>Growing authentic ingredients</h2>
      <a href="contact.html" class="btn btn--outline" style="border-color: #fff; color: #fff;">Contact Us</a>
    </div>
    <div class="footer-links-grid">
      <div>
        <img src="../assets/images/logo/logo.svg" alt="Saatvik Agro" style="height: 40px; filter: brightness(0) invert(1); margin-bottom: 20px;" onerror="this.src='https://placehold.co/200x50/FFFFFF/1B3051?text=Saatvik+Agro'">
        <p>Driven by purity. Guided by science. Built for consistency.</p>
      </div>
      <div>
        <h4>Explore</h4>
        <ul>
          <li><a href="../index.html">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="products.html">Products</a></li>
          <li><a href="industries.html">Industries</a></li>
        </ul>
      </div>
      <div>
        <h4>Contact</h4>
        <ul>
          <li>marketing.agro@saatvikgroup.com</li>
          <li>+91 XXXXX XXXXX</li>
        </ul>
      </div>
      <div>
        <h4>Address</h4>
        <ul>
          <li><strong>Corporate Office:</strong><br>A-404, Shagun Arcade, Vijay Nagar, Indore - 452010</li>
        </ul>
      </div>
    </div>
  </footer>

  <script>
    document.querySelector('.navbar__toggle').addEventListener('click', function() {
      const nav = document.querySelector('.header-nav');
      if (nav.style.display === 'flex') {
        nav.style.display = 'none';
      } else {
        nav.style.display = 'flex';
      }
    });
  </script>
</body>
</html>
`;

// ==========================================
// 1. CONTACT PAGE
// ==========================================
const contactCSS = `
  .contact-header { padding: 80px 5%; background: #fff; }
  .contact-header h1 { font-size: clamp(3rem, 5vw, 4.5rem); margin-bottom: 60px; }
  .contact-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px; border-top: 1px solid #eaeaea; padding-top: 40px; }
  .contact-col h4 { font-size: 1.1rem; color: #888; margin-bottom: 15px; font-family: 'DM Sans', sans-serif; font-weight: 500; }
  .contact-col p, .contact-col a { font-size: 1.1rem; color: var(--color-primary); font-weight: 600; text-decoration: none; display: block; line-height: 1.5; }
  
  .contact-form-section {
    position: relative;
    padding: 100px 5%;
    background: url('https://images.unsplash.com/photo-1595180620317-09f193eb7061?q=80&w=1920&auto=format&fit=crop') center/cover;
    min-height: 800px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
  }
  .contact-form-box {
    background: #fff;
    padding: 60px 50px;
    width: 100%;
    max-width: 500px;
    border-radius: var(--radius-xl);
    box-shadow: 0 20px 60px rgba(0,0,0,0.1);
  }
  .contact-form-box h2 { font-size: 2.5rem; margin-bottom: 30px; line-height: 1.2; }
  .form-group { margin-bottom: 20px; }
  .form-control { width: 100%; padding: 15px 20px; border: 1px solid #e0e0e0; border-radius: 8px; font-family: 'DM Sans', sans-serif; font-size: 1rem; box-sizing: border-box;}
  textarea.form-control { min-height: 150px; resize: none; }
  .form-check { display: flex; align-items: flex-start; gap: 10px; margin-bottom: 30px; font-size: 0.9rem; color: #888; }
  .btn-submit { width: 100%; background: var(--color-secondary); color: var(--color-primary); font-size: 1.1rem; padding: 18px; border-radius: 8px; border: none; font-weight: bold; cursor: pointer; }
  .btn-submit:hover { opacity: 0.9; }

  @media(max-width: 768px) {
    .contact-form-section { justify-content: center; padding: 50px 5%; }
    .contact-form-box { padding: 40px 30px; }
  }
`;

const contactHTML = `
  <section class="contact-header">
    <h1>General inquiries</h1>
    <div class="contact-grid">
      <div class="contact-col">
        <h4>General Inquiries</h4>
        <a href="mailto:marketing.agro@saatvikgroup.com">marketing.agro@saatvikgroup.com</a>
      </div>
      <div class="contact-col">
        <h4>Address</h4>
        <p>A-404, Shagun Arcade,<br>Vijay Nagar, Indore - 452010</p>
      </div>
      <div class="contact-col">
        <h4>Plant Location</h4>
        <p>Boregaon Industrial Area,<br>Chhindwara, MP</p>
      </div>
      <div class="contact-col">
        <h4>Socials</h4>
        <a href="#">LinkedIn</a>
        <a href="#">Twitter</a>
      </div>
    </div>
  </section>

  <section class="contact-form-section">
    <div class="contact-form-box">
      <h2>Have questions?<br>Get in touch!</h2>
      <form>
        <div class="form-group"><input type="text" class="form-control" placeholder="Name"></div>
        <div class="form-group"><input type="email" class="form-control" placeholder="Email"></div>
        <div class="form-group"><input type="text" class="form-control" placeholder="Subject"></div>
        <div class="form-group"><textarea class="form-control" placeholder="Message"></textarea></div>
        <div class="form-check">
          <input type="checkbox" id="terms">
          <label for="terms">I agree that my submitted data is being collected and stored.</label>
        </div>
        <button type="button" class="btn-submit">Send Message</button>
      </form>
    </div>
  </section>
`;

// ==========================================
// 2. PRODUCTS PAGE (SHOP STYLE)
// ==========================================
const productsCSS = `
  .shop-header { padding: 80px 5% 40px 5%; }
  .shop-header h1 { font-size: clamp(3rem, 5vw, 4.5rem); margin-bottom: 20px; }
  .shop-controls { display: flex; justify-content: space-between; align-items: center; color: #888; font-size: 0.95rem; border-bottom: 1px solid #eaeaea; padding-bottom: 20px; margin-bottom: 40px;}
  
  .shop-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 40px; padding: 0 5% 100px 5%; }
  .shop-card { text-decoration: none; display: block; }
  .shop-card__image { 
    background-color: #F4EFE6; /* Exact beige from ref */
    padding: 40px; 
    border-radius: var(--radius-lg); 
    margin-bottom: 20px; 
    aspect-ratio: 1/1; 
    display: flex; 
    align-items: center; 
    justify-content: center; 
    overflow: hidden;
  }
  .shop-card__image img { max-width: 100%; height: 100%; object-fit: cover; border-radius: 8px; mix-blend-mode: multiply; }
  .shop-card h3 { font-size: 1.25rem; margin: 0 0 5px 0; color: var(--color-primary); }
  .shop-card p { font-size: 1rem; color: #666; margin: 0; }
  
  @media(max-width: 768px) {
    .shop-controls { flex-direction: column; align-items: flex-start; gap: 15px; }
  }
`;

const productsHTML = `
  <section class="shop-header">
    <h1>Our Products</h1>
    <div class="shop-controls">
      <span>Showing all 6 results</span>
      <select style="padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-family: inherit;">
        <option>Sort by industry</option>
      </select>
    </div>
  </section>

  <section class="shop-grid">
    <a href="#" class="shop-card">
      <div class="shop-card__image"><img src="https://images.unsplash.com/photo-1626074961596-cb407d4c0dcb?q=80&w=800&auto=format&fit=crop" alt="Food Grade Starch"></div>
      <h3>Food Grade Starch</h3>
      <p>Food & Nutrition</p>
    </a>
    <a href="#" class="shop-card">
      <div class="shop-card__image"><img src="https://images.unsplash.com/photo-1596649299486-4cdea56fd59d?q=80&w=800&auto=format&fit=crop" alt="Liquid Glucose"></div>
      <h3>Liquid Glucose</h3>
      <p>Confectionery</p>
    </a>
    <a href="#" class="shop-card">
      <div class="shop-card__image"><img src="https://images.unsplash.com/photo-1586201375761-83865001e31c?q=80&w=800&auto=format&fit=crop" alt="Yellow Dextrin"></div>
      <h3>Yellow Dextrin</h3>
      <p>Adhesives & Foundry</p>
    </a>
    <a href="#" class="shop-card">
      <div class="shop-card__image"><img src="https://images.unsplash.com/photo-1611162458324-aae1eb4129a4?q=80&w=800&auto=format&fit=crop" alt="White Dextrin"></div>
      <h3>White Dextrin</h3>
      <p>Textile & Paper</p>
    </a>
    <a href="#" class="shop-card">
      <div class="shop-card__image"><img src="https://images.unsplash.com/photo-1574323347407-f5e1ad6d020b?q=80&w=800&auto=format&fit=crop" alt="Gluten Meal"></div>
      <h3>Maize Gluten Meal</h3>
      <p>Animal Feed</p>
    </a>
    <a href="#" class="shop-card">
      <div class="shop-card__image"><img src="https://images.unsplash.com/photo-1627997931392-563630f9d997?q=80&w=800&auto=format&fit=crop" alt="Maize Germ"></div>
      <h3>Maize Germ</h3>
      <p>Oil Extraction</p>
    </a>
  </section>
`;

// ==========================================
// 3. ABOUT PAGE
// ==========================================
const aboutCSS = `
  /* Reuse about-dual from index but customize */
  .section-about-dual { padding: 100px 5% 50px 5%; }
  .about-dual-grid { display: grid; grid-template-columns: 1fr 2fr; gap: 50px; align-items: flex-start; }
  .about-dual-images { display: flex; gap: 20px; }
  .about-dual-images img:first-child { width: 40%; object-fit: cover; border-radius: var(--radius-lg); margin-top: 50px;}
  .about-dual-images img:last-child { width: 60%; object-fit: cover; border-radius: var(--radius-lg); }
  .about-dual-content h2 { font-size: clamp(2.5rem, 5vw, 4rem); margin: 0 0 30px 0; }
  .about-dual-text { display: grid; grid-template-columns: 1fr 1fr; gap: 30px; }
  .about-dual-text p { font-size: 1.1rem; line-height: 1.8; color: #666; margin: 0; }

  /* Logos */
  .about-logos { display: flex; justify-content: center; gap: 60px; padding: 40px 5%; align-items: center; flex-wrap: wrap; border-bottom: 1px solid #eaeaea; }
  .about-logos img { height: 40px; opacity: 0.5; filter: grayscale(100%); }

  /* Team Grid */
  .section-team { padding: 100px 5%; text-align: center; }
  .section-team h2 { font-size: 3rem; margin-bottom: 60px; }
  .team-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; text-align: left; }
  .team-member img { width: 100%; aspect-ratio: 3/4; object-fit: cover; border-radius: var(--radius-lg); margin-bottom: 15px; }
  .team-member h3 { font-size: 1.25rem; margin: 0 0 5px 0; }
  .team-member p { font-size: 0.95rem; color: #888; margin: 0; }

  /* Full Banner */
  .about-banner { height: 500px; background: url('https://images.unsplash.com/photo-1500595046743-cd271d694d30?q=80&w=1920&auto=format&fit=crop') center/cover; position: relative; display: flex; align-items: flex-end; padding: 5%; }
  .about-banner h2 { font-size: 4rem; color: #fff; max-width: 600px; margin: 0; z-index: 2; position: relative; }
  
  /* Testimonials */
  .section-testimonials { padding: 100px 5%; background: var(--color-bg-alt); }
  .section-testimonials h2 { font-size: 3rem; text-align: center; margin-bottom: 60px; }
  .test-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
  .test-card { background: #fff; padding: 40px; border-radius: var(--radius-lg); }
  .test-card img { width: 60px; height: 60px; border-radius: 50%; margin-bottom: 20px; }
  .test-card p { font-size: 1.1rem; line-height: 1.6; margin-bottom: 20px; color: #444; }
  .test-card .stars { color: var(--color-secondary); letter-spacing: 2px; }

  @media(max-width: 768px) {
    .about-dual-grid { grid-template-columns: 1fr; }
    .about-dual-text { grid-template-columns: 1fr; }
    .team-grid { grid-template-columns: 1fr; }
    .test-grid { grid-template-columns: 1fr; }
    .about-banner h2 { font-size: 2.5rem; }
  }
`;

const aboutHTML = `
  <section class="section-about-dual">
    <div class="about-dual-grid">
      <div class="about-dual-images">
        <img src="https://images.unsplash.com/photo-1595878715977-2e8f8df18ea8?q=80&w=800&auto=format&fit=crop" alt="Farmers">
        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=800&auto=format&fit=crop" alt="Factory">
      </div>
      <div class="about-dual-content">
        <span class="label" style="color: var(--color-secondary); font-weight: 700; text-transform: uppercase; font-size: 12px; letter-spacing: 0.1em; margin-bottom: 15px; display: block;">Since 2017</span>
        <h2>About us</h2>
        <div class="about-dual-text">
          <p>Saatvik Agro is the agro-ingredient unit of the Saatvik Group, dedicated to creating high quality maize-based ingredients that power everyday products.</p>
          <p>Rooted in purity and strengthened by science, we convert responsibly sourced maize into functional, reliable ingredients that meet the evolving needs of modern manufacturers.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="about-logos">
    <h4 style="color:#888; font-family:'DM Sans';">Quality Assured</h4>
    <h4 style="color:#888; font-family:'DM Sans';">ISO 9001:2015</h4>
    <h4 style="color:#888; font-family:'DM Sans';">FSSAI Certified</h4>
  </div>

  <section class="section-team">
    <h2>Hands united in growing goodness</h2>
    <div class="team-grid">
      <div class="team-member">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=600&auto=format&fit=crop" alt="Team">
        <h3>Expert Agronomists</h3>
        <p>Sourcing the finest maize</p>
      </div>
      <div class="team-member">
        <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?q=80&w=600&auto=format&fit=crop" alt="Team">
        <h3>Quality Technicians</h3>
        <p>Ensuring batch consistency</p>
      </div>
      <div class="team-member">
        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=600&auto=format&fit=crop" alt="Team">
        <h3>Process Engineers</h3>
        <p>Optimizing plant efficiency</p>
      </div>
    </div>
  </section>

  <section class="about-banner">
    <h2>Growing a better world together now</h2>
  </section>

  <section class="section-testimonials">
    <h2>Real partners speak</h2>
    <div class="test-grid">
      <div class="test-card">
        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=200&auto=format&fit=crop" alt="Client">
        <p>"Saatvik's liquid glucose has transformed our confectionery production. The consistency and clarity are unmatched."</p>
        <div class="stars">★★★★★</div>
      </div>
      <div class="test-card">
        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=200&auto=format&fit=crop" alt="Client">
        <p>"The industrial starch provided for our corrugation lines offers excellent binding strength. Highly recommended."</p>
        <div class="stars">★★★★★</div>
      </div>
      <div class="test-card">
        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=200&auto=format&fit=crop" alt="Client">
        <p>"Reliable delivery and superb quality control. Saatvik Agro is a true partner for our manufacturing needs."</p>
        <div class="stars">★★★★★</div>
      </div>
    </div>
  </section>
`;

// ==========================================
// 4. INDUSTRIES/SERVICES PAGE
// ==========================================
const industriesCSS = `
  .ind-header { padding: 80px 5% 40px 5%; text-align: center; }
  .ind-header h1 { font-size: clamp(3rem, 5vw, 4.5rem); margin-bottom: 20px; }
  .ind-header p { font-size: 1.2rem; color: #666; max-width: 700px; margin: 0 auto; }
  
  .ind-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 40px; padding: 50px 5% 100px 5%; }
  .ind-card { background: #fff; border-radius: var(--radius-xl); overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.06); display: flex; flex-direction: column; }
  .ind-card img { width: 100%; height: 250px; object-fit: cover; }
  .ind-card-content { padding: 40px; flex: 1; display: flex; flex-direction: column;}
  .ind-card h3 { font-size: 2rem; margin-bottom: 15px; }
  .ind-card p { font-size: 1.05rem; color: #666; margin-bottom: 20px; line-height: 1.6; flex: 1;}
  
  @media(max-width: 768px) {
    .ind-grid { grid-template-columns: 1fr; }
  }
`;

const industriesHTML = `
  <section class="ind-header">
    <h1>Industries We Serve</h1>
    <p>Our premium maize derivatives are engineered to empower diverse industrial applications worldwide.</p>
  </section>

  <section class="ind-grid">
    <div class="ind-card">
      <img src="https://images.unsplash.com/photo-1556767576-5ec41e3239ea?q=80&w=800&auto=format&fit=crop" alt="Food">
      <div class="ind-card-content">
        <h3>Food & Nutrition</h3>
        <p>From bakery products to beverages, our food-grade starch and liquid glucose provide texture, sweetness, and stability.</p>
        <a href="products.html" class="btn btn--outline" style="align-self: flex-start; height: 40px; padding: 0 20px;">View Products</a>
      </div>
    </div>
    <div class="ind-card">
      <img src="https://images.unsplash.com/photo-1587582423116-ec07293f0395?q=80&w=800&auto=format&fit=crop" alt="Paper">
      <div class="ind-card-content">
        <h3>Paper & Packaging</h3>
        <p>High-strength industrial starches and dextrins designed specifically for corrugation, sizing, and paper binding.</p>
        <a href="products.html" class="btn btn--outline" style="align-self: flex-start; height: 40px; padding: 0 20px;">View Products</a>
      </div>
    </div>
    <div class="ind-card">
      <img src="https://images.unsplash.com/photo-1627997931392-563630f9d997?q=80&w=800&auto=format&fit=crop" alt="Animal Feed">
      <div class="ind-card-content">
        <h3>Animal Feed</h3>
        <p>Nutrient-rich maize gluten and fibre offering high protein and digestibility for cattle and poultry nutrition.</p>
        <a href="products.html" class="btn btn--outline" style="align-self: flex-start; height: 40px; padding: 0 20px;">View Products</a>
      </div>
    </div>
    <div class="ind-card">
      <img src="https://images.unsplash.com/photo-1584308666744-24d5e468088f?q=80&w=800&auto=format&fit=crop" alt="Pharma">
      <div class="ind-card-content">
        <h3>Pharmaceuticals</h3>
        <p>Pure, safe, and consistent starch powders and syrups used as binders and fillers in medicinal tablets.</p>
        <a href="products.html" class="btn btn--outline" style="align-self: flex-start; height: 40px; padding: 0 20px;">View Products</a>
      </div>
    </div>
  </section>
`;

fs.writeFileSync(path.join(__dirname, 'pages/contact.html'), getHTML('Contact Us', contactCSS, contactHTML));
fs.writeFileSync(path.join(__dirname, 'pages/products.html'), getHTML('Products', productsCSS, productsHTML));
fs.writeFileSync(path.join(__dirname, 'pages/about.html'), getHTML('About Us', aboutCSS, aboutHTML));
fs.writeFileSync(path.join(__dirname, 'pages/industries.html'), getHTML('Industries', industriesCSS, industriesHTML));

console.log('All pages generated successfully.');
