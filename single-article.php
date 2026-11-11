<?php
/**
 * Template Name: Article Single Reader
 * Description: Editorial post reader template with dynamic WP_Query and ACF metadata
 * Location: single-article.php / single.php / page-article.php
 */

$page_css = 'assets/css/article-single.css';
get_header();

$current_article_id = 0;

if (is_singular('article')) {
    $current_article_id = get_the_ID();
} elseif (isset($_GET['id']) && !empty($_GET['id'])) {
    $found_by_slug = get_page_by_path(sanitize_title($_GET['id']), OBJECT, 'article');
    if ($found_by_slug) {
        $current_article_id = $found_by_slug->ID;
    }
}

if (!$current_article_id) {
    $first_art = get_posts(array(
        'post_type'      => 'article',
        'posts_per_page' => 1,
        'post_status'    => 'publish'
    ));
    if (!empty($first_art)) {
        $current_article_id = $first_art[0]->ID;
    }
}

$art_title = get_the_title($current_article_id);
$art_slug  = get_post_field('post_name', $current_article_id);
$art_date  = get_the_date('F Y', $current_article_id);
$art_thumb = get_the_post_thumbnail_url($current_article_id, 'full');
if (!$art_thumb) {
    $art_thumb = '/wp-content/uploads/2026/11/farm1.jpg';
}

$kicker     = function_exists('get_field') ? get_field('article_kicker', $current_article_id) : 'INGREDIENT INSIGHTS';
$read_time  = function_exists('get_field') ? get_field('article_read_time', $current_article_id) : '3 min read';
$lead       = function_exists('get_field') ? get_field('article_lead', $current_article_id) : '';
$key_points = function_exists('get_field') ? get_field('article_key_points', $current_article_id) : '';

$points_array = array();
if (!empty($key_points)) {
    $points_array = array_filter(array_map('trim', explode("\n", $key_points)));
}

// Get other articles for navigation & related
$other_articles = get_posts(array(
    'post_type'      => 'article',
    'post__not_in'   => array($current_article_id),
    'posts_per_page' => 2,
    'post_status'    => 'publish',
));
?>

  <!-- TOP DARK BAR (From Client Figma Reference) -->
  <div class="article-top-bar">
    <div class="container">
      <div class="article-top-bar-content">
        <div class="article-top-breadcrumbs">
          <a href="<?php echo esc_url(home_url('/media/')); ?>">Media</a>
          <span class="sep">/</span>
          <span class="current" id="articleBreadcrumb"><?php echo esc_html($art_title); ?></span>
        </div>
        <div class="article-top-badge">
          <span>Website Page 7 of 8</span>
        </div>
      </div>
    </div>
  </div>

<main>
  <!-- ARTICLE SECTION -->
  <article class="article-section">
    <div class="container">
      <div class="article-wrapper">

        <!-- Category Kicker -->
        <span class="article-kicker" id="articleKicker"><?php echo esc_html($kicker ?: 'INGREDIENT INSIGHTS'); ?></span>

        <!-- Main Article Title -->
        <h1 class="article-title" id="articleTitle"><?php echo esc_html($art_title); ?></h1>

        <!-- Meta Row -->
        <div class="article-meta-bar">
          <span>By <strong>Saatvik Agro Technical Desk</strong></span>
          <span>&bull;</span>
          <span id="articleDate"><?php echo esc_html($art_date); ?></span>
          <span>&bull;</span>
          <span id="articleReadTime"><?php echo esc_html($read_time ?: '3 min read'); ?></span>
        </div>

        <!-- Lead Subtitle -->
        <?php if (!empty($lead)) : ?>
        <p class="article-lead" id="articleLead">
          <?php echo esc_html($lead); ?>
        </p>
        <?php endif; ?>

        <!-- Featured Visual Image -->
        <div class="article-featured-img-wrap">
          <img id="articleFeaturedImg" src="<?php echo esc_url($art_thumb); ?>"
            alt="<?php echo esc_attr($art_title); ?>" loading="lazy" decoding="async">
        </div>

        <!-- Body Content Sections -->
        <div class="article-body" id="articleBodySections">
          <?php
          $content = get_post_field('post_content', $current_article_id);
          echo wp_kses_post(wpautop($content));
          ?>
        </div>

        <!-- Key Points Box -->
        <?php if (!empty($points_array)) : ?>
        <div class="article-keypoints" id="articleKeypointsWrap">
          <h4>Key Formulation Takeaways</h4>
          <ul id="articleKeypointsList">
            <?php foreach ($points_array as $pt) : ?>
              <li><?php echo esc_html($pt); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endif; ?>

        <!-- CTA Banner -->
        <div class="article-cta-card">
          <div class="article-cta-text">
            <h3>Need Formulation Guidance or Product Samples?</h3>
            <p>
              Our chemical and food processing specialists help match specific DE values, viscosity grades, and batch
              packaging to your manufacturing parameters.
            </p>
          </div>
          <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="article-cta-btn">Request a Sample &rarr;</a>
        </div>

        <!-- Previous / Next Article Navigation -->
        <?php if (!empty($other_articles)) : ?>
        <div class="article-nav-wrap">
          <?php if (isset($other_articles[0])) : ?>
          <a href="<?php echo esc_url(get_permalink($other_articles[0]->ID)); ?>" class="article-nav-card" id="prevArticleCard">
            <span class="article-nav-label">&larr; Previous Insight</span>
            <h4 id="prevArticleTitle"><?php echo esc_html($other_articles[0]->post_title); ?></h4>
          </a>
          <?php endif; ?>

          <?php if (isset($other_articles[1])) : ?>
          <a href="<?php echo esc_url(get_permalink($other_articles[1]->ID)); ?>" class="article-nav-card" id="nextArticleCard" style="text-align: right;">
            <span class="article-nav-label">Next Insight &rarr;</span>
            <h4 id="nextArticleTitle"><?php echo esc_html($other_articles[1]->post_title); ?></h4>
          </a>
          <?php endif; ?>
        </div>
        <?php endif; ?>

      </div>
    </div>
  </article>
</main>

<?php
get_footer();

