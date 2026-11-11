<?php
/**
 * Template Part: Fullscreen Mobile Navigation Overlay
 * Description: Brutalist fullscreen navigation drawer with active state highlight & quick call CTA
 * Location: parts/mobile-nav.php
 */
?>
<!-- Fullscreen Nav Overlay -->
<div class="nav-overlay" id="nav-overlay" aria-hidden="true">
  <button class="nav-close" id="nav-close" aria-label="Close menu">
    <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
    </svg>
  </button>
  <div class="nav-overlay-content">
    <nav class="nav-menu-full">
      <ul>
        <li>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="<?php echo is_front_page() ? 'active' : ''; ?>">Home</a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/products/')); ?>" class="<?php echo (is_page('products') || is_page('product')) ? 'active' : ''; ?>">Product</a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="<?php echo (is_page('about-us') || is_page('about')) ? 'active' : ''; ?>">About Us</a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/careers/')); ?>" class="<?php echo is_page('careers') ? 'active' : ''; ?>">Careers</a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="<?php echo (is_page('contact-us') || is_page('contact')) ? 'active' : ''; ?>">Contact Us</a>
        </li>
      </ul>
    </nav>
    <a href="tel:+91 95910 33188" class="nav-phone-full">
      <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path
          d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
        </path>
      </svg>
      +91 95910 33188
    </a>
  </div>
</div>

