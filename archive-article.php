<?php
/**
 * Template Name: Articles Archive
 * Description: Official WordPress Custom Post Type Archive for 'article'
 * Location: archive-article.php
 */

$page_css = 'assets/css/article-single.css';
get_header();
?>

<main class="main-container">
  <section class="shop-header">
    <div class="container">
      <div class="breadcrumbs">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a> / <span>Articles &amp; Insights</span>
      </div>
      <h1>Articles &amp; Insights</h1>
      <p style="max-width: 680px; margin-top: 12px; color: var(--color-text-secondary, #64748b); font-size: 1.05rem; line-height: 1.5;">
        Technical analysis, formulation guides, and manufacturing consistency standards from the Saatvik Agro technical desk.
      </p>
    </div>
  </section>

  <section class="shop-section" style="padding-top: 40px; padding-bottom: 80px;">
    <div class="container">
      <div class="article-related-grid" style="grid-template-columns: repeat(auto-fill, minmax(360px, 1fr)); gap: 30px;">
        <?php
        $articles_query = new WP_Query(array(
            'post_type'      => 'article',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
            'order'          => 'ASC',
            'orderby'        => 'ID',
        ));

        if ($articles_query->have_posts()) :
            while ($articles_query->have_posts()) : $articles_query->the_post();
                $art_id    = get_the_ID();
                $art_link  = get_permalink();
                $art_thumb = get_the_post_thumbnail_url($art_id, 'full');
                if (!$art_thumb) {
                    $art_thumb = '/wp-content/uploads/2026/11/farm1.jpg';
                }
                $kicker    = function_exists('get_field') ? get_field('article_kicker', $art_id) : 'INGREDIENT INSIGHTS';
                $read_time = function_exists('get_field') ? get_field('article_read_time', $art_id) : '3 min read';
                $lead      = function_exists('get_field') ? get_field('article_lead', $art_id) : get_the_excerpt();
        ?>
          <a href="<?php echo esc_url($art_link); ?>" class="article-related-card">
            <div class="article-related-img">
              <img src="<?php echo esc_url($art_thumb); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" decoding="async">
            </div>
            <div class="article-related-content">
              <span class="article-kicker" style="font-size: 0.75rem; letter-spacing: 0.08em; margin-bottom: 8px; color: #ea7124; font-weight: 700;">
                <?php echo esc_html($kicker ?: 'INGREDIENT INSIGHTS'); ?>
              </span>
              <h4><?php the_title(); ?></h4>
              <?php if (!empty($lead)) : ?>
                <p style="margin-bottom: 14px;"><?php echo esc_html(wp_trim_words($lead, 18)); ?></p>
              <?php endif; ?>
              <div style="margin-top: auto; display: flex; justify-content: space-between; align-items: center; font-size: 0.82rem; color: #94a3b8; border-top: 1px solid #f1f5f9; padding-top: 12px;">
                <span><?php echo get_the_date('F Y'); ?></span>
                <span><?php echo esc_html($read_time ?: '3 min read'); ?></span>
              </div>
            </div>
          </a>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();

