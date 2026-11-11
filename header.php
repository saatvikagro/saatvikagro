<?php
/**
 * Header Template
 * Description: Global Brutalist Header, Google Fonts, Preconnects, Dual Logo & Sticky Navbar
 * Location: header.php
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php
  // Dynamic SEO Metadata
  global $wp;
  $seo_title = '';
  $seo_desc = '';
  $req_url = home_url($wp ? add_query_arg([], $wp->request) : '');
  $canonical_url = trailingslashit($req_url);

  if (is_front_page()) {
    $seo_title = 'Saatvik Agro — Premium Maize Ingredients';
    $seo_desc = 'Saatvik Agro is a leading manufacturer of high-purity maize starch, liquid glucose syrups, maltodextrin, and animal feed ingredients.';
  } elseif (is_singular('product')) {
    $prod_t = get_the_title();
    $seo_title = $prod_t . ' | Saatvik Agro';
    $custom_desc = function_exists('get_field') ? get_field('product_description') : '';
    if (empty($custom_desc)) {
      $custom_desc = get_the_excerpt();
    }
    $seo_desc = !empty($custom_desc) ? wp_strip_all_tags($custom_desc) : $prod_t . ' manufactured by Saatvik Agro Processors with industry-leading purity and consistency standards.';
  } elseif (is_page('about-us') || is_page('about')) {
    $seo_title = 'About Us | Saatvik Agro';
    $seo_desc = 'Discover Saatvik Agro Processors — advanced maize wet milling, state-of-the-art infrastructure, sustainable manufacturing, and world-class quality control.';
  } elseif (is_page('products')) {
    $seo_title = 'Products | Saatvik Agro';
    $seo_desc = 'Explore our portfolio of premium food grade and industrial starches, high-purity liquid glucose, maltodextrin powder, and high-protein feed co-products.';
  } elseif (is_page('careers')) {
    $seo_title = 'Careers | Saatvik Agro — Grow With Us';
    $seo_desc = 'Explore career opportunities at Saatvik Agro. Join a passionate team turning quality maize into world-class ingredients with innovation, consistency, and growth.';
  } elseif (is_page('contact-us') || is_page('contact')) {
    $seo_title = 'Contact Us | Saatvik Agro';
    $seo_desc = 'Get in touch with Saatvik Agro Processors for commercial inquiries, technical ingredient consultations, custom specifications, and bulk sample requests.';
  } elseif (is_page('media')) {
    $seo_title = 'Media Gallery | Saatvik Agro';
    $seo_desc = 'Explore media, gallery photos, state-of-the-art manufacturing facilities, and operational glimpses of Saatvik Agro.';
  } elseif (is_page('privacy-policy')) {
    $seo_title = 'Privacy Policy | Saatvik Agro';
    $seo_desc = 'Privacy policy of Saatvik Agro Processors Private Limited outlining how we collect, safeguard, and process your business and personal information.';
  } elseif (is_page('terms-conditions')) {
    $seo_title = 'Terms & Conditions | Saatvik Agro';
    $seo_desc = 'Terms and conditions governing the use of Saatvik Agro website, product inquiries, sample requests, and commercial transactions.';
  } else {
    $seo_title = wp_get_document_title();
    $seo_desc = get_bloginfo('description');
  }
  ?>
  <title><?php echo esc_html($seo_title); ?></title>
  <meta name="description" content="<?php echo esc_attr($seo_desc); ?>" />
  <link rel="canonical" href="<?php echo esc_url($canonical_url); ?>" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="<?php echo is_singular() ? 'article' : 'website'; ?>" />
  <meta property="og:title" content="<?php echo esc_attr($seo_title); ?>" />
  <meta property="og:description" content="<?php echo esc_attr($seo_desc); ?>" />
  <meta property="og:url" content="<?php echo esc_url($canonical_url); ?>" />
  <meta property="og:site_name" content="Saatvik Agro" />
  <meta property="og:image" content="<?php echo esc_url(get_theme_file_uri('assets/images/content/favicon.png')); ?>" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?php echo esc_attr($seo_title); ?>" />
  <meta name="twitter:description" content="<?php echo esc_attr($seo_desc); ?>" />

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="/wp-content/uploads/2026/11/favicon.png" />
  <link rel="apple-touch-icon" href="/wp-content/uploads/2026/11/favicon.png" />

  <!-- DNS Prefetch & Font Preconnects -->
  <link rel="dns-prefetch" href="https://fonts.googleapis.com" />
  <link rel="dns-prefetch" href="https://fonts.gstatic.com" />
  <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&family=DM+Sans:wght@400;500;700&display=swap"
    rel="stylesheet" />

  <!-- Global Design System Stylesheet -->
  <link rel="stylesheet"
    href="<?php echo esc_url(get_theme_file_uri('assets/css/global.css')); ?>?v=<?php echo wp_get_theme()->get('Version'); ?>" />

  <!-- Dedicated Per-Page Stylesheet Loading (Cyntexa Standard) -->
  <?php
  global $page_css;
  if (!empty($page_css)) {
    echo '<link rel="stylesheet" href="' . esc_url(get_theme_file_uri($page_css)) . '?v=' . wp_get_theme()->get('Version') . '" />' . "\n";
  } elseif (is_front_page()) {
    echo '<link rel="stylesheet" href="' . esc_url(get_theme_file_uri('assets/css/index.css')) . '?v=' . wp_get_theme()->get('Version') . '" />' . "\n";
  } elseif (is_page('about-us') || is_page('about')) {
    echo '<link rel="stylesheet" href="' . esc_url(get_theme_file_uri('assets/css/about.css')) . '?v=' . wp_get_theme()->get('Version') . '" />' . "\n";
  } elseif (is_page('products')) {
    echo '<link rel="stylesheet" href="' . esc_url(get_theme_file_uri('assets/css/products.css')) . '?v=' . wp_get_theme()->get('Version') . '" />' . "\n";
  } elseif (is_page('product-single') || is_page('product') || is_singular('product')) {
    echo '<link rel="stylesheet" href="' . esc_url(get_theme_file_uri('assets/css/product-single.css')) . '?v=' . wp_get_theme()->get('Version') . '" />' . "\n";
  } elseif (is_page('careers')) {
    echo '<link rel="stylesheet" href="' . esc_url(get_theme_file_uri('assets/css/careers.css')) . '?v=' . wp_get_theme()->get('Version') . '" />' . "\n";
  } elseif (is_page('contact-us') || is_page('contact')) {
    echo '<link rel="stylesheet" href="' . esc_url(get_theme_file_uri('assets/css/contact.css')) . '?v=' . wp_get_theme()->get('Version') . '" />' . "\n";
  } elseif (is_page('media')) {
    echo '<link rel="stylesheet" href="' . esc_url(get_theme_file_uri('assets/css/media.css')) . '?v=' . wp_get_theme()->get('Version') . '" />' . "\n";
  } elseif (is_page('article-single') || is_single()) {
    echo '<link rel="stylesheet" href="' . esc_url(get_theme_file_uri('assets/css/article-single.css')) . '?v=' . wp_get_theme()->get('Version') . '" />' . "\n";
  } elseif (is_page(array('privacy-policy', 'terms-conditions'))) {
    echo '<link rel="stylesheet" href="' . esc_url(get_theme_file_uri('assets/css/legal.css')) . '?v=' . wp_get_theme()->get('Version') . '" />' . "\n";
  }
  ?>

  <?php if (is_front_page()): ?>
    <!-- Preload Hero Fallback & Video for Instant Rendering -->
    <link rel="preload" as="image" href="/wp-content/uploads/2026/11/Video-Fallback.webp" type="image/webp"
      fetchpriority="high" />
    <link rel="preload" as="video" href="/wp-content/uploads/2026/11/Hero-Video.mp4" type="video/mp4"
      fetchpriority="high" />
  <?php endif; ?>

  <!-- Theme Base URLs & Scroll Restoration -->
  <script>
    window.SAATVIK_THEME_URI = '<?php echo esc_url(get_theme_file_uri()); ?>';
    window.SAATVIK_HOME_URL = '<?php echo esc_url(home_url('/')); ?>';
    if ('scrollRestoration' in history) {
      history.scrollRestoration = 'manual';
    }
    window.scrollTo(0, 0);
  </script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- NAVBAR -->
  <header class="header flex-between test-1">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-group" aria-label="Saatvik Agro Home">
      <img src="/wp-content/uploads/2026/11/Logo_Saatvik%20Agro.png" alt="Saatvik Agro" class="logo-img saatvik-logo"
        decoding="async" />
      <div class="logo-divider"></div>
      <img src="/wp-content/uploads/2026/11/Logo_Shakti.png" alt="Shakti" class="logo-img shakti-logo"
        decoding="async" />
    </a>
    <ul class="nav-links">
      <li><a href="<?php echo esc_url(home_url('/')); ?>"
          class="<?php echo is_front_page() ? 'active' : ''; ?>">Home</a></li>
      <li><a href="<?php echo esc_url(home_url('/products/')); ?>"
          class="<?php echo (is_page('products') || is_page('product')) ? 'active' : ''; ?>">Product</a></li>
      <li><a href="<?php echo esc_url(home_url('/about-us/')); ?>"
          class="<?php echo (is_page('about-us') || is_page('about')) ? 'active' : ''; ?>">About Us</a></li>
      <li><a href="<?php echo esc_url(home_url('/careers/')); ?>"
          class="<?php echo is_page('careers') ? 'active' : ''; ?>">Careers</a></li>
    </ul>

    <div class="nav-contact">
      <a href="tel:+91 95910 33188" class="nav-phone">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
          stroke-linecap="round" stroke-linejoin="round">
          <path
            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
          </path>
        </svg>
        +91 95910 33188
      </a>
      <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn--nav-rect">Contact Us</a>
    </div>
    <!-- Hamburger Button (Right) -->
    <button class="hamburger" id="hamburger-menu" aria-label="Open menu">
      <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>
  </header>