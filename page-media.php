<?php
/**
 * Template Name: Media & Press Hub
 * Description: High-resolution factory photography gallery, plant tour imagery, and media coverage
 * Location: page-media.php
 */

$page_css = 'assets/css/media.css';
get_header();
?>
<main>
    <!-- MEDIA SECTION (Exact Reference Layout) -->
    <section class="media-header-section">
      <div class="container">
        <!-- Split Top: Big Heading "Media" on Left, Description on Right -->
        <div class="media-header-grid">
          <div class="media-header-left">
            <h1>Media</h1>
          </div>
          <div class="media-header-right">
            <p>
              Saatvik Agro is dedicated to growing pure, organic produce using eco-friendly methods,
              always caring and making sure our food is fresh, safe, and supports a healthy planet
              for all people everywhere.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Photo Gallery Grid Section with Category Filter Tabs -->
    <section class="media-gallery-section">
      <div class="container">
        <!-- Filter Tabs & Mobile Dropdown -->
        <div class="media-tabs-wrapper">
          <!-- Desktop Tabs (Visible > 768px) -->
          <div class="media-tabs" id="mediaTabs">
            <button class="media-tab-btn active" data-category="ALL">All</button>
            <button class="media-tab-btn" data-category="Manufacturing">Manufacturing</button>
            <button class="media-tab-btn" data-category="Products">Products</button>
            <button class="media-tab-btn" data-category="People">People</button>
            <button class="media-tab-btn" data-category="Community">Community</button>
          </div>

          <!-- Mobile Dropdown Filter (Visible <= 768px) -->
          <div class="media-mobile-dropdown" id="mediaMobileDropdown">
            <button type="button" class="mobile-dropdown-btn" id="mediaDropdownBtn" aria-haspopup="listbox"
              aria-expanded="false">
              <span class="mobile-dropdown-label">Category:</span>
              <span class="mobile-dropdown-current" id="mediaDropdownCurrentText">All Media</span>
              <svg class="mobile-dropdown-chevron" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">
                <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
            <div class="mobile-dropdown-menu" id="mediaDropdownMenu" role="listbox">
              <div class="mobile-dropdown-item active" data-category="ALL" role="option">
                <span>All Media</span>
                <svg class="check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ea7124"
                  stroke-width="2.5">
                  <path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="mobile-dropdown-item" data-category="Manufacturing" role="option">
                <span>Manufacturing</span>
                <svg class="check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ea7124"
                  stroke-width="2.5">
                  <path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="mobile-dropdown-item" data-category="Products" role="option">
                <span>Products</span>
                <svg class="check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ea7124"
                  stroke-width="2.5">
                  <path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="mobile-dropdown-item" data-category="People" role="option">
                <span>People</span>
                <svg class="check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ea7124"
                  stroke-width="2.5">
                  <path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="mobile-dropdown-item" data-category="Community" role="option">
                <span>Community</span>
                <svg class="check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ea7124"
                  stroke-width="2.5">
                  <path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          </div>
        </div>

        <div class="media-gallery-grid" id="mediaGalleryGrid">
          <!-- Card 1: Manufacturing in Morena -->
          <div class="media-card" data-category="Manufacturing">
            <div class="media-card-img-wrap"
              onclick="openLightbox('/wp-content/uploads/2026/11/manufacturing-facility.jpg', 'Manufacturing in Morena')">
              <img src="/wp-content/uploads/2026/11/manufacturing-facility.jpg" alt="Manufacturing in Morena" loading="lazy" /
                decoding="async">
              <div class="media-card-overlay">
                <span class="media-zoom-icon" title="View Image">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    <line x1="11" y1="8" x2="11" y2="14"></line>
                    <line x1="8" y1="11" x2="14" y2="11"></line>
                  </svg>
                </span>
              </div>
            </div>
            <div class="media-card-content">
              <h3 class="media-card-title">Manufacturing in Morena</h3>
              <p class="media-card-desc">Our facility and operations</p>
            </div>
          </div>

          <!-- Card 2: The Shakti ingredient range -->
          <div class="media-card" data-category="Products">
            <div class="media-card-img-wrap"
              onclick="openLightbox('/wp-content/uploads/2026/11/shakti-ingredient-range.jpg', 'The Shakti ingredient range')">
              <img src="/wp-content/uploads/2026/11/shakti-ingredient-range.jpg" alt="The Shakti ingredient range"
                loading="lazy" decoding="async" />
              <div class="media-card-overlay">
                <span class="media-zoom-icon" title="View Image">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    <line x1="11" y1="8" x2="11" y2="14"></line>
                    <line x1="8" y1="11" x2="14" y2="11"></line>
                  </svg>
                </span>
              </div>
            </div>
            <div class="media-card-content">
              <h3 class="media-card-title">The Shakti ingredient range</h3>
              <p class="media-card-desc">Ingredients for diverse applications</p>
            </div>
          </div>

          <!-- Card 3: Saatvik Social Foundation -->
          <div class="media-card" data-category="Community">
            <div class="media-card-img-wrap"
              onclick="openLightbox('/wp-content/uploads/2026/11/saatvik-social-foundation.jpg', 'Saatvik Social Foundation')">
              <img src="/wp-content/uploads/2026/11/saatvik-social-foundation.jpg" alt="Saatvik Social Foundation"
                loading="lazy" decoding="async" />
              <div class="media-card-overlay">
                <span class="media-zoom-icon" title="View Image">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    <line x1="11" y1="8" x2="11" y2="14"></line>
                    <line x1="8" y1="11" x2="14" y2="11"></line>
                  </svg>
                </span>
              </div>
            </div>
            <div class="media-card-content">
              <h3 class="media-card-title">Saatvik Social Foundation</h3>
              <p class="media-card-desc">Community initiatives from the Group</p>
            </div>
          </div>

          <!-- Card 4: Quality & Plant Operations -->
          <div class="media-card" data-category="Manufacturing">
            <div class="media-card-img-wrap"
              onclick="openLightbox('/wp-content/uploads/2026/11/factory.jpg', 'Quality Assurance & Plant Operations')">
              <img src="/wp-content/uploads/2026/11/factory.jpg" alt="Quality Assurance & Plant Operations" loading="lazy" /
                decoding="async">
              <div class="media-card-overlay">
                <span class="media-zoom-icon" title="View Image">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    <line x1="11" y1="8" x2="11" y2="14"></line>
                    <line x1="8" y1="11" x2="14" y2="11"></line>
                  </svg>
                </span>
              </div>
            </div>
            <div class="media-card-content">
              <h3 class="media-card-title">Quality Assurance &amp; Plant Operations</h3>
              <p class="media-card-desc">Advanced automated milling and processing infrastructure</p>
            </div>
          </div>

          <!-- Card 5: Liquid Glucose Refining -->
          <div class="media-card" data-category="Products">
            <div class="media-card-img-wrap"
              onclick="openLightbox('/wp-content/uploads/2026/11/glucose.jpg', 'Liquid Glucose Refining')">
              <img src="/wp-content/uploads/2026/11/glucose.jpg" alt="Liquid Glucose Refining" loading="lazy" /
                decoding="async">
              <div class="media-card-overlay">
                <span class="media-zoom-icon" title="View Image">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    <line x1="11" y1="8" x2="11" y2="14"></line>
                    <line x1="8" y1="11" x2="14" y2="11"></line>
                  </svg>
                </span>
              </div>
            </div>
            <div class="media-card-content">
              <h3 class="media-card-title">Liquid Glucose Refining</h3>
              <p class="media-card-desc">High-clarity syrups with consistent viscosity control</p>
            </div>
          </div>

          <!-- Card 6: Operations & Engineering Team -->
          <div class="media-card" data-category="People">
            <div class="media-card-img-wrap"
              onclick="openLightbox('/wp-content/uploads/2026/11/team1.jpg', 'Plant Operations & Engineering')">
              <img src="/wp-content/uploads/2026/11/team1.jpg" alt="Plant Operations & Engineering" loading="lazy" /
                decoding="async">
              <div class="media-card-overlay">
                <span class="media-zoom-icon" title="View Image">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    <line x1="11" y1="8" x2="11" y2="14"></line>
                    <line x1="8" y1="11" x2="14" y2="11"></line>
                  </svg>
                </span>
              </div>
            </div>
            <div class="media-card-content">
              <h3 class="media-card-title">Plant Operations &amp; Engineering</h3>
              <p class="media-card-desc">Dedicated technical workforce ensuring reliable plant output</p>
            </div>
          </div>

          <!-- Card 7: Sustainable Farm Alliances -->
          <div class="media-card" data-category="Community">
            <div class="media-card-img-wrap"
              onclick="openLightbox('/wp-content/uploads/2026/11/farm1.jpg', 'Sustainable Farm Alliances')">
              <img src="/wp-content/uploads/2026/11/farm1.jpg" alt="Sustainable Farm Alliances" loading="lazy" /
                decoding="async">
              <div class="media-card-overlay">
                <span class="media-zoom-icon" title="View Image">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    <line x1="11" y1="8" x2="11" y2="14"></line>
                    <line x1="8" y1="11" x2="14" y2="11"></line>
                  </svg>
                </span>
              </div>
            </div>
            <div class="media-card-content">
              <h3 class="media-card-title">Sustainable Farm Alliances</h3>
              <p class="media-card-desc">Strengthening regional agricultural partners and communities</p>
            </div>
          </div>

          <!-- Card 8: High-Purity Carbohydrates -->
          <div class="media-card" data-category="Products">
            <div class="media-card-img-wrap"
              onclick="openLightbox('/wp-content/uploads/2026/11/white-dex.jpg', 'High-Purity Carbohydrates')">
              <img src="/wp-content/uploads/2026/11/white-dex.jpg" alt="High-Purity Carbohydrates" loading="lazy" /
                decoding="async">
              <div class="media-card-overlay">
                <span class="media-zoom-icon" title="View Image">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    <line x1="11" y1="8" x2="11" y2="14"></line>
                    <line x1="8" y1="11" x2="14" y2="11"></line>
                  </svg>
                </span>
              </div>
            </div>
            <div class="media-card-content">
              <h3 class="media-card-title">High-Purity Carbohydrates</h3>
              <p class="media-card-desc">Fine dextrose and starch variants for diverse formulation needs</p>
            </div>
          </div>

          <!-- Card 9: Quality & Research Specialists -->
          <div class="media-card" data-category="People">
            <div class="media-card-img-wrap"
              onclick="openLightbox('/wp-content/uploads/2026/11/team3.jpg', 'Quality & Research Specialists')">
              <img src="/wp-content/uploads/2026/11/team3.jpg" alt="Quality & Research Specialists" loading="lazy" /
                decoding="async">
              <div class="media-card-overlay">
                <span class="media-zoom-icon" title="View Image">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    <line x1="11" y1="8" x2="11" y2="14"></line>
                    <line x1="8" y1="11" x2="14" y2="11"></line>
                  </svg>
                </span>
              </div>
            </div>
            <div class="media-card-content">
              <h3 class="media-card-title">Quality &amp; Research Specialists</h3>
              <p class="media-card-desc">Rigorous laboratory testing maintaining disciplined batch consistency</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Interactive Lightbox Modal -->
  <div class="lightbox-modal" id="media-lightbox" onclick="closeLightbox(event)">
    <button class="lightbox-close" onclick="closeLightbox()" aria-label="Close Preview">&times;</button>
    <div class="lightbox-img-wrap" onclick="event.stopPropagation()">
      <img id="lightbox-image" class="lightbox-img" src="" alt="Media Preview" loading="lazy" decoding="async" />
    </div>
  </div>

  

<!-- Gallery Filter & Lightbox Script -->
  <script>
    // Tab & Mobile Dropdown Filtering Logic
    document.addEventListener('DOMContentLoaded', function () {
      const tabBtns = document.querySelectorAll('.media-tab-btn');
      const cards = document.querySelectorAll('.media-card');
      const mobileDropdown = document.getElementById('mediaMobileDropdown');
      const mobileDropdownBtn = document.getElementById('mediaDropdownBtn');
      const dropdownCurrentText = document.getElementById('mediaDropdownCurrentText');
      const mobileDropdownItems = document.querySelectorAll('#mediaMobileDropdown .mobile-dropdown-item');

      function filterMedia(category, displayText) {
        // Sync desktop tab active states
        tabBtns.forEach(function (b) {
          if (b.getAttribute('data-category') === category) {
            b.classList.add('active');
          } else {
            b.classList.remove('active');
          }
        });

        // Sync mobile dropdown item active states
        mobileDropdownItems.forEach(function (item) {
          if (item.getAttribute('data-category') === category) {
            item.classList.add('active');
          } else {
            item.classList.remove('active');
          }
        });

        // Update mobile button display text
        if (dropdownCurrentText) {
          dropdownCurrentText.textContent = displayText || (category === 'ALL' ? 'All Media' : category);
        }

        // Filter media cards
        cards.forEach(function (card) {
          const cardCategory = card.getAttribute('data-category');
          if (category === 'ALL' || cardCategory === category) {
            card.classList.remove('hidden');
          } else {
            card.classList.add('hidden');
          }
        });
      }

      // Desktop tabs click
      tabBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
          const category = this.getAttribute('data-category');
          const text = this.textContent.trim();
          filterMedia(category, text === 'All' ? 'All Media' : text);
        });
      });

      // Mobile dropdown toggle & selection
      if (mobileDropdownBtn && mobileDropdown) {
        mobileDropdownBtn.addEventListener('click', function (e) {
          e.stopPropagation();
          const isOpen = mobileDropdown.classList.toggle('open');
          mobileDropdownBtn.setAttribute('aria-expanded', isOpen);
        });

        mobileDropdownItems.forEach(function (item) {
          item.addEventListener('click', function () {
            const category = this.getAttribute('data-category');
            const textSpan = this.querySelector('span');
            const text = textSpan ? textSpan.textContent.trim() : this.textContent.trim();
            filterMedia(category, text);
            mobileDropdown.classList.remove('open');
            mobileDropdownBtn.setAttribute('aria-expanded', 'false');
          });
        });

        // Close dropdown on outside click
        document.addEventListener('click', function (e) {
          if (!mobileDropdown.contains(e.target)) {
            mobileDropdown.classList.remove('open');
            mobileDropdownBtn.setAttribute('aria-expanded', 'false');
          }
        });
      }
    });

    // Lightbox Logic
    function openLightbox(src, alt) {
      const modal = document.getElementById('media-lightbox');
      const img = document.getElementById('lightbox-image');
      if (modal && img) {
        img.src = src;
        img.alt = alt || 'Preview';
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
      }
    }

    function closeLightbox(e) {
      const modal = document.getElementById('media-lightbox');
      if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = '';
      }
    }

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') {
        closeLightbox();
      }
    });
  </script>

<?php
get_footer();