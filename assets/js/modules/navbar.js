/**
 * Navbar Module
 * Handles mobile toggle, scroll states, and active links.
 */

export function initNavbar() {
  const navbar = document.getElementById('navbar');
  const toggle = document.querySelector('.navbar__toggle');
  const menu = document.getElementById('nav-menu');
  const overlay = document.getElementById('nav-overlay');
  
  if (!navbar || !toggle || !menu || !overlay) return;

  // Scroll state
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar.classList.add('navbar--scrolled');
      navbar.classList.remove('navbar--transparent');
    } else {
      navbar.classList.remove('navbar--scrolled');
      // Only make transparent if it's supposed to be (e.g. on home page)
      if (document.body.classList.contains('page-home')) {
        navbar.classList.add('navbar--transparent');
      }
    }
  }, { passive: true });

  // Mobile menu toggle
  const toggleMenu = () => {
    const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
    toggle.setAttribute('aria-expanded', !isExpanded);
    menu.classList.toggle('is-open');
    overlay.classList.toggle('is-visible');
    document.body.style.overflow = isExpanded ? '' : 'hidden'; // Prevent body scroll
  };

  toggle.addEventListener('click', toggleMenu);
  overlay.addEventListener('click', toggleMenu);
}
