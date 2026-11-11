<?php
/**
 * Template Name: About Us
 * Description: Company history, vision, state-of-the-art facility, certifications, and corporate values
 * Location: page-about-us.php
 */

$page_css = 'assets/css/about.css';
get_header();
?>

<main class="main-container">
<!-- ================= SECTION 1: ABOUT US (TOP IMAGES & 3-COL TEXT) ================= -->
  <section class="section-about-top">
    <div class="container">
      <!-- Dual Images Row -->
      <div class="about-top-images">
        <div class="about-top-img-left">
          <img src="/wp-content/uploads/2026/11/about-top-left.jpg" alt="Pure Maize Harvest" loading="lazy"
            decoding="async" />
        </div>
        <div class="about-top-img-right">
          <img src="/wp-content/uploads/2026/11/about-top-right.jpg" alt="Corn Harvest & Agriculture" loading="lazy"
            decoding="async" />
        </div>
      </div>

      <!-- 3-Column Text Grid -->
      <div class="about-top-text-grid">
        <!-- Col 1: Title -->
        <div class="about-col-title">
          <span class="soil-tag">OUR HISTORY & IDENTITY</span>
          <h2>About us</h2>
        </div>

        <!-- Col 2: Description Left - OUR VISION -->
        <div class="about-col-desc">
          <h4 class="vision-mission-title vision-title">OUR VISION</h4>
          <p>
            To become India's most trusted maize-based ingredient partner, known for purity you can measure, consistency
            you can depend on, and reliable performance across food, nutrition, feed, and industrial applications.
          </p>
        </div>

        <!-- Col 3: Description Right & Action - OUR MISSION -->
        <div class="about-col-desc">
          <h4 class="vision-mission-title mission-title">OUR MISSION</h4>
          <p>
            To transform responsibly sourced maize into high-quality, functional ingredients through controlled
            processing, quality-led manufacturing, and application-focused solutions that help modern manufacturers
            achieve better efficiency, consistency, and product performance.
          </p>
          <div class="about-col-action">
            <a href="#awards-section" class="btn-circle" aria-label="Explore more">
              <svg viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 2: STATE-OF-THE-ART MANUFACTURING FACILITY ================= -->
  <section class="section-facility">
    <div class="container">
      <!-- Facility Header -->
      <div class="facility-header">
        <div class="facility-header-left">
          <span class="facility-kicker">INFRASTRUCTURE & SCALE</span>
          <h2 class="facility-heading">State of the Art Manufacturing Facility</h2>
        </div>
      </div>

      <!-- Facility Content Grid -->
      <div class="facility-grid">
        <!-- Left: Manufacturing Facility Photo -->
        <div class="facility-media">
          <div class="facility-img-wrapper">
            <img src="/wp-content/uploads/2026/11/about-state-of-the-art.png"
              alt="State-of-the-art manufacturing facility in Morena, Madhya Pradesh" class="facility-img" /
              loading="lazy" decoding="async">
          </div>
        </div>

        <!-- Right: 2x2 Highlights Grid -->
        <div class="facility-stats">
          <div class="facility-stats-grid">

            <!-- Metric 1: 500 TPD -->
            <div class="stat-card">
              <h3 class="stat-number">500 TPD</h3>
              <p class="stat-desc">Existing production capacity</p>
              <div class="stat-bar"></div>
            </div>

            <!-- Metric 2: 1200 TPD -->
            <div class="stat-card">
              <h3 class="stat-number">1500 TPD</h3>
              <p class="stat-desc">Capacity expanding to</p>
              <div class="stat-bar"></div>
            </div>

            <!-- Metric 3: Location -->
            <div class="stat-card">
              <h3 class="stat-number">Location</h3>
              <p class="stat-desc">Morena, Madhya Pradesh</p>
            </div>

            <!-- Metric 4: Quality Testing -->
            <div class="stat-card">
              <h3 class="stat-number">Quality Testing</h3>
              <p class="stat-desc">Purity and performance</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 3: CERTIFICATIONS ================= -->
  <section class="section-certifications">
    <div class="container">
      <div class="certifications-box">
        <div class="certifications-header">
          <span class="intro-label">QUALITY & ACCREDITATIONS</span>
          <h2 class="certifications-title">Certifications</h2>
        </div>
        <div class="certifications-grid">
          <!-- Cert 1: FSSAI Licence -->
          <div class="cert-card" title="FSSAI Licence">
            <div class="cert-img-wrap">
              <img src="/wp-content/uploads/2026/11/fssai.png" alt="FSSAI Licence" loading="lazy" decoding="async" />
            </div>
            <h3>FSSAI Licence</h3>
            <p>Food safety licence</p>
          </div>

          <!-- Cert 2: ISO 9001:2015 -->
          <div class="cert-card" title="ISO 9001:2015 Certified">
            <div class="cert-img-wrap">
              <img src="/wp-content/uploads/2026/11/intertek-1.png" alt="ISO 9001:2015" loading="lazy"
                decoding="async" />
            </div>
            <h3>ISO 9001:2015</h3>
            <p>Quality Management System</p>
          </div>

          <!-- Cert 3: FSSC 22000 -->
          <div class="cert-card" title="FSSC 22000 Certified">
            <div class="cert-img-wrap">
              <img src="/wp-content/uploads/2026/11/intertek-2.png" alt="FSSC 22000" loading="lazy" decoding="async" />
            </div>
            <h3>FSSC 22000</h3>
            <p>Food Safety System Certification</p>
          </div>

          <!-- Cert 4: ISO 14001:2015 -->
          <div class="cert-card" title="ISO 14001:2015 Certified">
            <div class="cert-img-wrap">
              <img src="/wp-content/uploads/2026/11/iso-1.png" alt="ISO 14001:2015" loading="lazy" decoding="async" />
            </div>
            <h3>ISO 14001:2015</h3>
            <p>Environmental Management System</p>
          </div>

          <!-- Cert 5: ISO 45001:2018 -->
          <div class="cert-card" title="ISO 45001:2018 Certified">
            <div class="cert-img-wrap">
              <img src="/wp-content/uploads/2026/11/iso-2.png" alt="ISO 45001:2018" loading="lazy" decoding="async" />
            </div>
            <h3>ISO 45001:2018</h3>
            <p>Occupational Health and Safety Management System</p>
          </div>

          <!-- Cert 6: JUHF Halal Certification -->
          <div class="cert-card" title="JUHF Halal Certification">
            <div class="cert-img-wrap">
              <img src="/wp-content/uploads/2026/11/halal.png" alt="JUHF Halal Certification" loading="lazy"
                decoding="async" />
            </div>
            <h3>JUHF Halal Certification</h3>
            <p>Halal certification</p>
          </div>

          <!-- Cert 7: BPJPH Halal Certification -->
          <div class="cert-card" title="BPJPH Halal Certification">
            <div class="cert-img-wrap">
              <img src="/wp-content/uploads/2026/11/Restored%20Orchid%20Halal%20Certification%20Logo.png"
                alt="BPJPH Halal Certification" loading="lazy" decoding="async" />
            </div>
            <h3>BPJPH Halal Certification</h3>
            <p>Halal assurance system certification</p>
          </div>

          <!-- Cert 8: Sedex ISO Certification -->
          <div class="cert-card" title="Sedex ISO Certification">
            <div class="cert-img-wrap">
              <img src="/wp-content/uploads/2026/11/sedex%20logo.png" alt="Sedex ISO Certification" loading="lazy"
                decoding="async" />
            </div>
            <h3>Sedex ISO Certification</h3>
            <p>Ethical supply chain & sustainability</p>
          </div>

          <!-- Cert 9: Ecovadis Certification -->
          <div class="cert-card" title="Ecovadis Certification">
            <div class="cert-img-wrap">
              <img src="/wp-content/uploads/2026/11/Ecovadis.png" alt="Ecovadis Certification" loading="lazy"
                decoding="async" />
            </div>
            <h3>Ecovadis Certification</h3>
            <p>Business sustainability rating</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 4: OUR VALUES TABLE ================= -->
  <section class="section-awards-table" id="awards-section">
    <div class="container">
      <!-- Section Header -->
      <div class="values-header" style="margin-bottom: 40px;">
        <span
          style="color: #ea7124; font-size: 0.8rem; font-weight: 600; letter-spacing: 1.5px; display: block; margin-bottom: 8px;">CORE
          PRINCIPLES</span>
        <h2
          style="font-size: clamp(2rem, 3.5vw, 2.8rem); font-weight: 600; color: #ffffff; margin: 0; font-family: var(--font-heading); letter-spacing: -0.02em;">
          Our Values</h2>
      </div>

      <div class="awards-table-wrapper">
        <!-- Table Header -->
        <div class="awards-header-row">
          <div>No</div>
          <div>Name</div>
          <div>Content</div>
        </div>

        <!-- Value 1: Customer First -->
        <div class="awards-row">
          <div class="award-col-num">01</div>
          <div class="award-col-title">Customer First</div>
          <div class="award-col-content">
            We listen carefully, communicate openly and work towards lasting value for customers.
          </div>
        </div>

        <!-- Value 2: Innovation -->
        <div class="awards-row">
          <div class="award-col-num">02</div>
          <div class="award-col-title">Innovation</div>
          <div class="award-col-content">
            We keep learning and improve how ingredients are made and used.
          </div>
        </div>

        <!-- Value 3: Quality -->
        <div class="awards-row">
          <div class="award-col-num">03</div>
          <div class="award-col-title">Quality</div>
          <div class="award-col-content">
            We focus on fitness for use, defined standards and dependable ingredients.
          </div>
        </div>

        <!-- Value 4: Excellence -->
        <div class="awards-row">
          <div class="award-col-num">04</div>
          <div class="award-col-title">Excellence</div>
          <div class="award-col-content">
            We work to improve our processes and maintain discipline every day.
          </div>
        </div>

        <!-- Value 5: Integrity -->
        <div class="awards-row">
          <div class="award-col-num">05</div>
          <div class="award-col-title">Integrity</div>
          <div class="award-col-content">
            We act honestly, take ownership and keep our commitments clear.
          </div>
        </div>

        <!-- Value 6: Collaboration -->
        <div class="awards-row">
          <div class="award-col-num">06</div>
          <div class="award-col-title">Collaboration</div>
          <div class="award-col-content">
            We bring teams together to solve problems and support better outcomes.
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();