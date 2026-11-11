<?php
/**
 * Template Name: Products Archive
 * Description: Official WordPress Custom Post Type Archive for 'product'
 * Location: archive-product.php
 */

$page_css = 'assets/css/products.css';
get_header();
?>

<main class="main-container">
  <section class="shop-header">
    <div class="container">
      <div class="breadcrumbs">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a> / <span>Products</span>
      </div>
      <h1>Products</h1>
    </div>
  </section>

  <section class="shop-section">
    <div class="container">
      <!-- 4 Category Filter Tabs & Mobile Dropdown -->
      <div class="product-tabs-wrapper">
        <!-- Desktop Tabs (Visible > 768px) -->
        <div class="product-tabs" id="productTabs">
          <button class="tab-btn active" data-category="ALL">All</button>
          <button class="tab-btn" data-category="FOOD GRADE">Food Grade</button>
          <button class="tab-btn" data-category="INDUSTRIAL GRADE">Industrial Grade</button>
          <button class="tab-btn" data-category="ANIMAL NUTRITION">Animal Nutrition</button>
        </div>

        <!-- Mobile Dropdown Filter (Visible <= 768px) -->
        <div class="product-mobile-dropdown" id="productMobileDropdown">
          <button type="button" class="mobile-dropdown-btn" id="mobileDropdownBtn" aria-haspopup="listbox"
            aria-expanded="false">
            <span class="mobile-dropdown-label">Category:</span>
            <span class="mobile-dropdown-current" id="dropdownCurrentText">All Products</span>
            <svg class="mobile-dropdown-chevron" width="18" height="18" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2">
              <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
          <div class="mobile-dropdown-menu" id="mobileDropdownMenu" role="listbox">
            <div class="mobile-dropdown-item active" data-category="ALL" role="option">
              <span>All Products</span>
              <svg class="check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ea7124"
                stroke-width="2.5">
                <path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <div class="mobile-dropdown-item" data-category="FOOD GRADE" role="option">
              <span>Food Grade</span>
              <svg class="check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ea7124"
                stroke-width="2.5">
                <path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <div class="mobile-dropdown-item" data-category="INDUSTRIAL GRADE" role="option">
              <span>Industrial Grade</span>
              <svg class="check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ea7124"
                stroke-width="2.5">
                <path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <div class="mobile-dropdown-item" data-category="ANIMAL NUTRITION" role="option">
              <span>Animal Nutrition</span>
              <svg class="check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ea7124"
                stroke-width="2.5">
                <path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
          </div>
        </div>
      </div>

      <!-- 9 Products Grid (Dynamic from WordPress Loop / WP_Query) -->
      <div class="products-wrapper" id="productsGrid">
        <?php
        $products_query = new WP_Query(array(
            'post_type'      => 'product',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
            'order'          => 'ASC',
            'orderby'        => 'ID',
        ));

        if ($products_query->have_posts()) :
            while ($products_query->have_posts()) : $products_query->the_post();
                $terms = get_the_terms(get_the_ID(), 'product_cat');
                $cat_data = (!empty($terms) && !is_wp_error($terms)) ? strtoupper($terms[0]->name) : 'ALL';
                $thumb = get_the_post_thumbnail_url(get_the_ID(), 'full');
                if (!$thumb) {
                    $thumb = '/wp-content/uploads/2026/11/Shakti-Maize-Starch-Food-Grade.png';
                }
                $link = get_permalink();
        ?>
          <div class="shop-card" data-category="<?php echo esc_attr($cat_data); ?>">
            <a href="<?php echo esc_url($link); ?>" class="shop-card__image-link">
              <div class="shop-card__image">
                <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" decoding="async">
              </div>
            </a>
            <h3><a href="<?php echo esc_url($link); ?>"><?php the_title(); ?></a></h3>
          </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
      </div>
    </div>
  </section>
</main>

<script>
document.addEventListener("DOMContentLoaded", () => {
  // Category Filter Logic (Desktop Tabs + Mobile Dropdown)
  const tabBtns = document.querySelectorAll("#productTabs .tab-btn");
  const productCards = document.querySelectorAll("#productsGrid .shop-card");
  const mobileDropdown = document.getElementById("productMobileDropdown");
  const mobileDropdownBtn = document.getElementById("mobileDropdownBtn");
  const dropdownCurrentText = document.getElementById("dropdownCurrentText");
  const mobileDropdownItems = document.querySelectorAll(".mobile-dropdown-item");

  function updateUrlCategory(category) {
    try {
      const url = new URL(window.location);
      if (category === "ALL") {
        url.searchParams.delete("category");
      } else if (category === "FOOD GRADE") {
        url.searchParams.set("category", "food-grade");
      } else if (category === "INDUSTRIAL GRADE") {
        url.searchParams.set("category", "industrial-grade");
      } else if (category === "ANIMAL NUTRITION") {
        url.searchParams.set("category", "animal-nutrition");
      }
      window.history.replaceState({}, "", url);
    } catch (e) {
      // ignore in environments without history API
    }
  }

  function filterProducts(category, displayText, updateUrl = true) {
    tabBtns.forEach((b) => {
      if (b.getAttribute("data-category") === category) {
        b.classList.add("active");
      } else {
        b.classList.remove("active");
      }
    });

    mobileDropdownItems.forEach((item) => {
      if (item.getAttribute("data-category") === category) {
        item.classList.add("active");
      } else {
        item.classList.remove("active");
      }
    });

    if (dropdownCurrentText) {
      dropdownCurrentText.textContent = displayText || (category === "ALL" ? "All Products" : category);
    }

    productCards.forEach((card) => {
      const cardCategory = card.getAttribute("data-category");
      if (category === "ALL" || cardCategory === category) {
        card.classList.remove("hidden");
      } else {
        card.classList.add("hidden");
      }
    });

    if (updateUrl) {
      updateUrlCategory(category);
    }
  }

  function parseCategoryParam(raw) {
    if (!raw) return null;
    const normalized = raw.trim().toLowerCase().replace(/[-_+]/g, " ");
    if (normalized.includes("food")) {
      return { category: "FOOD GRADE", displayText: "Food Grade" };
    }
    if (normalized.includes("industr")) {
      return { category: "INDUSTRIAL GRADE", displayText: "Industrial Grade" };
    }
    if (normalized.includes("anim") || normalized.includes("nutrit") || normalized.includes("feed")) {
      return { category: "ANIMAL NUTRITION", displayText: "Animal Nutrition" };
    }
    if (normalized === "all") {
      return { category: "ALL", displayText: "All Products" };
    }
    return null;
  }

  function applyCategoryFromUrl(shouldScroll = false) {
    const params = new URLSearchParams(window.location.search);
    let paramVal = params.get("category");
    if (!paramVal && window.location.hash) {
      paramVal = window.location.hash.replace(/^#/, "");
    }

    const matched = parseCategoryParam(paramVal);
    if (matched) {
      filterProducts(matched.category, matched.displayText, false);

      if (shouldScroll) {
        setTimeout(() => {
          const target = document.querySelector(".product-tabs-wrapper") || document.getElementById("productTabs") || document.querySelector(".shop-section");
          if (target) {
            const headerOffset = 90;
            const elementPosition = target.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
            window.scrollTo({
              top: Math.max(0, offsetPosition),
              behavior: "smooth"
            });
          }
        }, 150);
      }
    }
  }

  applyCategoryFromUrl(true);

  window.addEventListener("popstate", () => {
    applyCategoryFromUrl(false);
  });

  tabBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      const category = btn.getAttribute("data-category");
      const text = btn.textContent.trim();
      filterProducts(category, text === "All" ? "All Products" : text, true);
    });
  });

  if (mobileDropdownBtn && mobileDropdown) {
    mobileDropdownBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      const isOpen = mobileDropdown.classList.toggle("open");
      mobileDropdownBtn.setAttribute("aria-expanded", isOpen);
    });

    mobileDropdownItems.forEach((item) => {
      item.addEventListener("click", () => {
        const category = item.getAttribute("data-category");
        const textSpan = item.querySelector("span");
        const text = textSpan ? textSpan.textContent.trim() : item.textContent.trim();
        filterProducts(category, text, true);
        mobileDropdown.classList.remove("open");
        mobileDropdownBtn.setAttribute("aria-expanded", "false");
      });
    });

    document.addEventListener("click", (e) => {
      if (!mobileDropdown.contains(e.target)) {
        mobileDropdown.classList.remove("open");
        mobileDropdownBtn.setAttribute("aria-expanded", "false");
      }
    });
  }
});
</script>

<!-- Brochure Modal -->
<?php get_template_part('parts/modal-brochure'); ?>

<?php
get_footer();

