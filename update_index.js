const fs = require('fs');
const path = require('path');

const indexFile = path.join(__dirname, 'index.html');
let content = fs.readFileSync(indexFile, 'utf8');

// Replace Hero section content
const heroStart = content.indexOf('<!-- ==================== HERO SECTION ==================== -->');
const productsStart = content.indexOf('<!-- ==================== PRODUCTS SECTION ==================== -->');

if (heroStart !== -1 && productsStart !== -1) {
  const newHeroAndAbout = `<!-- ==================== HERO SECTION ==================== -->
  <section class="hero flex-center text-center">
    <!-- Hero Background -->
    <div class="hero__bg">
      <div class="hero__bg-overlay"></div>
      <img src="https://images.unsplash.com/photo-1595180620317-09f193eb7061?q=80&w=2000&auto=format&fit=crop" alt="Maize field" class="hero__bg-img" />
    </div>

    <div class="container hero__content reveal reveal-up">
      <span class="section-subtitle" style="color: #F5A623; margin-bottom: 20px;">Welcome to Saatvik Agro</span>
      <h1 class="hero__title">Driven by purity.<br>Guided by science.<br>Built for consistency.</h1>
      <p class="hero__text">From grain to greatness, we engineer consistency you can trust. High-quality maize-based ingredients powering food, nutrition, and industry.</p>
      <div class="hero__actions flex-center gap-md mt-6">
        <a href="pages/products.html" class="btn btn--primary">Explore Ingredients</a>
        <a href="pages/contact.html" class="btn btn--outline-white">Contact Us</a>
      </div>
    </div>
  </section>

  <!-- ==================== ABOUT SECTION (OVERLAPPING IMAGES) ==================== -->
  <section class="section about-section" id="about">
    <div class="container grid grid-2" style="align-items: center; gap: 4rem;">
      <!-- Content -->
      <div class="about-section__content reveal reveal-left">
        <span class="section-subtitle">Rooted in purity</span>
        <h2 class="h1" style="font-size: 3rem; margin-bottom: 2rem;">From grain to greatness, we engineer consistency you can trust.</h2>
        <p class="mt-4" style="font-size: 1.25rem; margin-bottom: 1.5rem; line-height: 1.8;">Saatvik Agro is the agro-ingredient unit of the Saatvik Group, dedicated to creating high quality maize-based ingredients that power everyday products across food, nutrition, animal feed, and industrial applications.</p>
        <ul class="about-section__list mt-6 mb-6" style="list-style: none; padding: 0;">
          <li style="display: flex; gap: 15px; margin-bottom: 15px; font-weight: 600; font-size: 1.1rem; align-items: center;">
            <svg style="width: 24px; height: 24px; color: var(--color-secondary);" viewBox="0 0 24 24"><path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> State-of-the-Art Processing
          </li>
          <li style="display: flex; gap: 15px; margin-bottom: 15px; font-weight: 600; font-size: 1.1rem; align-items: center;">
            <svg style="width: 24px; height: 24px; color: var(--color-secondary);" viewBox="0 0 24 24"><path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Rigorous Quality Control
          </li>
          <li style="display: flex; gap: 15px; margin-bottom: 15px; font-weight: 600; font-size: 1.1rem; align-items: center;">
            <svg style="width: 24px; height: 24px; color: var(--color-secondary);" viewBox="0 0 24 24"><path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Sustainable Sourcing
          </li>
        </ul>
        <a href="pages/about.html" class="btn btn--primary mt-4">Discover Our Roots</a>
      </div>
      
      <!-- Overlapping Images -->
      <div class="reveal reveal-right" style="position: relative; padding: 20px;">
        <img src="https://placehold.co/600x700/E8E4DC/1B3051?text=Maize+Farm" alt="Maize Farm" style="width: 100%; border-radius: var(--radius-xl); box-shadow: var(--shadow-xl);" loading="lazy" decoding="async">
        <img src="https://placehold.co/400x400/FFFFFF/1B3051?text=Quality" alt="Quality" style="position: absolute; bottom: -40px; left: -60px; width: 60%; border-radius: var(--radius-full); box-shadow: var(--shadow-lg); border: 15px solid var(--color-bg);" loading="lazy" decoding="async">
      </div>
    </div>
  </section>

  `;
  content = content.substring(0, heroStart) + newHeroAndAbout + content.substring(productsStart);
}

// Fix "Our Products" subtitle
content = content.replace(
  '<span class="section-label">Our Products</span>',
  '<span class="section-subtitle">Our produce</span>'
);

// Fix "Why Choose Us" subtitle
content = content.replace(
  '<span class="section-label">Why Choose Us</span>',
  '<span class="section-subtitle">Our guarantee</span>'
);

// Fix "Serving Industries" subtitle
content = content.replace(
  '<span class="section-label section-label--light">Serving Industries</span>',
  '<span class="section-subtitle" style="color: #F5A623;">Our partners</span>'
);

fs.writeFileSync(indexFile, content, 'utf8');
console.log('Index.html updated with organic vibes.');
