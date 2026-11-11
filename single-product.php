<?php
/**
 * Template Name: Product Single Details
 * Description: Dynamic single product specifications, image zoom lightbox, lab parameters, and brochure lead capture
 * Location: single-product.php / page-product.php
 */

$page_css = 'assets/css/product-single.css';
get_header();

$current_product_id = 0;

if (is_singular('product')) {
    $current_product_id = get_the_ID();
} elseif (isset($_GET['id']) && !empty($_GET['id'])) {
    $found_by_slug = get_page_by_path(sanitize_title($_GET['id']), OBJECT, 'product');
    if ($found_by_slug) {
        $current_product_id = $found_by_slug->ID;
    }
}

if (!$current_product_id) {
    $first_prod = get_posts(array(
        'post_type'      => 'product',
        'posts_per_page' => 1,
        'post_status'    => 'publish'
    ));
    if (!empty($first_prod)) {
        $current_product_id = $first_prod[0]->ID;
    }
}

$prod_title = get_the_title($current_product_id);
$prod_slug  = get_post_field('post_name', $current_product_id);
$prod_desc  = get_the_content(null, false, $current_product_id);
$prod_thumb = get_the_post_thumbnail_url($current_product_id, 'full');
if (!$prod_thumb) {
    $prod_thumb = '/wp-content/uploads/2026/11/Shakti-Maize-Starch-Food-Grade.png';
}

$terms    = get_the_terms($current_product_id, 'product_cat');
$prod_cat = (!empty($terms) && !is_wp_error($terms)) ? $terms[0]->name : 'Food Grade';

$pack_size     = function_exists('get_field') ? get_field('product_pack_size', $current_product_id) : '50 kg and 1000 kg';
$form          = function_exists('get_field') ? get_field('product_form', $current_product_id) : 'Powder';
$function      = function_exists('get_field') ? get_field('product_function', $current_product_id) : 'Thickening and binding';
$features_raw  = function_exists('get_field') ? get_field('product_features', $current_product_id) : '';
$apps_raw      = function_exists('get_field') ? get_field('product_applications', $current_product_id) : '';
$brochure_file = function_exists('get_field') ? get_field('product_brochure_file', $current_product_id) : '';

$features = array();
if (!empty($features_raw)) {
    $features = array_filter(array_map('trim', explode("\n", $features_raw)));
}
$applications = array();
if (!empty($apps_raw)) {
    $applications = array_filter(array_map('trim', explode("\n", $apps_raw)));
}

$brochure_url = '';
if (is_array($brochure_file) && isset($brochure_file['url'])) {
    $brochure_url = $brochure_file['url'];
} elseif (is_numeric($brochure_file)) {
    $brochure_url = wp_get_attachment_url($brochure_file);
} elseif (is_string($brochure_file)) {
    $brochure_url = $brochure_file;
}

// Related Products Query (3 items)
$related_products = get_posts(array(
    'post_type'      => 'product',
    'post__not_in'   => array($current_product_id),
    'posts_per_page' => 3,
    'post_status'    => 'publish',
    'orderby'        => 'rand',
));
?>

<main class="main-container">
  <section class="single-breadcrumb-section">
    <div class="container">
      <div class="breadcrumbs">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <span class="breadcrumb-sep">/</span>
        <a href="<?php echo esc_url(home_url('/products/')); ?>" id="breadcrumbCategoryLink"><span id="breadcrumbCategory"><?php echo esc_html($prod_cat); ?></span></a>
        <span class="breadcrumb-sep">/</span>
        <span class="breadcrumb-active" id="breadcrumbTitle"><?php echo esc_html($prod_title); ?></span>
      </div>
    </div>
  </section>

  <!-- MAIN PRODUCT DETAILS SECTION -->
  <section class="single-product-main">
    <div class="container">
      <div class="product-layout-grid">

        <!-- LEFT COLUMN: Product Main Photo with Zoom Button -->
        <div class="product-photo-column">
          <div class="product-main-photo-wrap">
            <img id="productImage" src="<?php echo esc_url($prod_thumb); ?>"
              alt="<?php echo esc_attr($prod_title); ?>" loading="lazy" decoding="async">
            <button class="photo-zoom-btn" id="productZoomBtn" aria-label="Zoom photo" title="Zoom Image">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
                stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
              </svg>
            </button>
          </div>
        </div>

        <!-- RIGHT COLUMN: Specs, Features & Applications Details -->
        <div class="product-details-column">

          <h1 class="product-title" id="productTitle"><?php echo esc_html($prod_title); ?></h1>

          <!-- Description Section -->
          <div class="product-info-block" style="margin-bottom: 24px;">
            <p class="product-full-desc" id="productDescription" style="margin-bottom: 0;">
              <?php echo esc_html($prod_desc); ?>
            </p>
          </div>

          <!-- Top 3 Metrics Row: PACK FORMAT | FORM | FUNCTION -->
          <div class="specs-metrics-row">
            <div class="metric-item">
              <span class="metric-label" id="metric1Label">PACK FORMAT</span>
              <h4 class="metric-val" id="specPackSize"><?php echo esc_html($pack_size); ?></h4>
            </div>
            <div class="metric-divider"></div>
            <div class="metric-item">
              <span class="metric-label" id="metric2Label">FORM</span>
              <h4 class="metric-val" id="specForm"><?php echo esc_html($form); ?></h4>
            </div>
            <div class="metric-divider"></div>
            <div class="metric-item">
              <span class="metric-label" id="metric3Label">FUNCTION</span>
              <h4 class="metric-val" id="specFunction"><?php echo esc_html($function); ?></h4>
            </div>
          </div>

          <!-- Download Brochure CTA Button -->
          <div style="margin-bottom: 30px;">
            <button class="btn btn--brochure-orange" id="downloadBrochureBtn" data-product-id="<?php echo esc_attr($prod_slug); ?>" data-product-name="<?php echo esc_attr($prod_title); ?>" data-brochure="<?php echo esc_url($brochure_url); ?>">
              <span>Download the Brochure</span>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </button>
          </div>

          <!-- KEY FEATURES Section -->
          <?php if (!empty($features)) : ?>
          <div class="specs-section">
            <span class="section-tag-label">FUNCTIONAL FEATURES</span>
            <div class="features-bullets-grid" id="featuresGrid">
              <?php foreach ($features as $feat) : ?>
                <div class="feature-bullet-item">
                  <span class="feature-bullet-dot"></span>
                  <span class="feature-text"><?php echo esc_html($feat); ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endif; ?>

          <!-- Thin Horizontal Divider Line -->
          <hr class="specs-divider" />

          <!-- APPLICATIONS Section -->
          <?php if (!empty($applications)) : ?>
          <div class="specs-section">
            <span class="section-tag-label">APPLICATIONS</span>
            <div class="applications-gray-pills" id="appsPills">
              <?php foreach ($applications as $app) : ?>
                <span class="app-gray-tag"><?php echo esc_html($app); ?></span>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endif; ?>

        </div>

      </div>
    </div>
  </section>

  <!-- RELATED PRODUCTS SECTION -->
  <?php if (!empty($related_products)) : ?>
  <section class="section-related-products">
    <div class="container">
      <div class="related-header">
        <span class="explore-range-label">EXPLORE RANGE</span>
        <h2>Other Products You May Like</h2>
      </div>

      <div class="clean-related-grid" id="relatedProductsGrid">
        <?php foreach ($related_products as $rel) :
          $rel_id    = $rel->ID;
          $rel_thumb = get_the_post_thumbnail_url($rel_id, 'full');
          $rel_terms = get_the_terms($rel_id, 'product_cat');
          $rel_cat   = (!empty($rel_terms) && !is_wp_error($rel_terms)) ? $rel_terms[0]->name : 'Food Grade';
          $rel_link  = get_permalink($rel_id);
        ?>
          <div class="clean-related-card">
            <a href="<?php echo esc_url($rel_link); ?>" class="clean-related-img-box">
              <img src="<?php echo esc_url($rel_thumb); ?>" alt="<?php echo esc_attr($rel->post_title); ?>" loading="lazy" decoding="async">
            </a>
            <span class="clean-related-cat"><?php echo esc_html($rel_cat); ?></span>
            <h3 class="clean-related-title">
              <a href="<?php echo esc_url($rel_link); ?>"><?php echo esc_html($rel->post_title); ?></a>
            </h3>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- IMAGE LIGHTBOX MODAL -->
  <div class="image-lightbox-overlay" id="imageLightbox">
    <button class="lightbox-close" id="lightboxClose" aria-label="Close Lightbox">&times;</button>
    <img id="lightboxImg" src="<?php echo esc_url($prod_thumb); ?>" alt="<?php echo esc_attr($prod_title); ?>" loading="lazy" decoding="async">
  </div>

  <!-- BROCHURE MODAL -->
  <?php get_template_part('parts/modal-brochure'); ?>
</main>

<script>
document.addEventListener("DOMContentLoaded", function() {
  // Lightbox Zoom Logic
  const zoomBtn = document.getElementById("productZoomBtn");
  const lightbox = document.getElementById("imageLightbox");
  const lightboxImg = document.getElementById("lightboxImg");
  const lightboxClose = document.getElementById("lightboxClose");
  const prodImg = document.getElementById("productImage");

  if (zoomBtn && lightbox && prodImg) {
    zoomBtn.addEventListener("click", function() {
      lightboxImg.src = prodImg.src;
      lightbox.classList.add("active");
    });
  }

  if (lightboxClose && lightbox) {
    lightboxClose.addEventListener("click", function() {
      lightbox.classList.remove("active");
    });
    lightbox.addEventListener("click", function(e) {
      if (e.target === lightbox) lightbox.classList.remove("active");
    });
  }

  // Brochure Download Modal Trigger
  const brochureBtn = document.getElementById("downloadBrochureBtn");
  const brochureModal = document.getElementById("brochureModal");
  const modalClose = document.getElementById("modalClose");
  const modalTitle = document.getElementById("modalProductName");
  const productInput = document.getElementById("productInput");
  const brochureProductInput = document.getElementById("brochureProductInput");
  const brochurePdfInput = document.getElementById("brochurePdfInput");

  if (brochureBtn && brochureModal) {
    brochureBtn.addEventListener("click", function() {
      const prodName = "<?php echo esc_js($prod_title); ?>";
      const brochureUrl = this.getAttribute("data-brochure") || "";
      if (modalTitle) modalTitle.textContent = prodName;
      if (productInput) productInput.value = prodName;
      if (brochureProductInput) brochureProductInput.value = prodName;
      if (brochurePdfInput) brochurePdfInput.value = brochureUrl;
      brochureModal.classList.add("active");
    });
  }

  if (modalClose && brochureModal) {
    modalClose.addEventListener("click", function() {
      brochureModal.classList.remove("active");
    });
  }

  if (brochureModal) {
    brochureModal.addEventListener("click", function(e) {
      if (e.target === brochureModal) {
        brochureModal.classList.remove("active");
      }
    });
  }
});
</script>

<?php
get_footer();
