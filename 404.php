<?php
/**
 * 404 Error Template
 * Description: Clean Brutalist 404 Not Found Page
 * Location: 404.php
 */
get_header();
?>

<main class="main-container" style="min-height: 70vh; display: flex; align-items: center; justify-content: center; text-align: center; padding: 140px 20px 100px;">
  <div class="container" style="max-width: 700px;">
    <span class="intro-label" style="display: inline-block; margin-bottom: 12px; font-weight: 700; color: #ff6a00; letter-spacing: 2px; text-transform: uppercase;">ERROR 404</span>
    <h1 style="font-size: clamp(3.5rem, 9vw, 6.5rem); font-weight: 800; line-height: 1; margin-bottom: 20px; color: #111;">404</h1>
    <h2 style="font-size: clamp(1.4rem, 3vw, 2.2rem); font-weight: 700; margin-bottom: 16px; color: #222;">Page Not Found</h2>
    <p style="font-size: 1.05rem; color: #555; line-height: 1.6; margin-bottom: 36px;">
      The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
    </p>
    <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn--accent" style="padding: 14px 32px; font-weight: 600;">Return to Home</a>
      <a href="<?php echo esc_url(home_url('/products/')); ?>" class="btn btn--nav-rect" style="padding: 14px 32px; font-weight: 600; border: 1px solid #111;">Explore Products</a>
    </div>
  </div>
</main>

<?php
get_footer();

