export function initNavbar() {
  const navbar = document.getElementById('navbar');
  const toggle = document.querySelector('.navbar__toggle');
  const menu = document.getElementById('nav-menu');
  const overlay = document.getElementById('nav-overlay');

  if (!navbar) return;

  // Handle scroll effect for transparency (only on homepage or if it has navbar--transparent)
  const handleScroll = () => {
    if (window.scrollY > 50) {
      navbar.classList.remove('navbar--transparent');
      navbar.classList.add('navbar--scrolled');
    } else {
      // Re-add transparent class if we are at the top and the body is page-home
      if (document.body.classList.contains('page-home')) {
        navbar.classList.add('navbar--transparent');
      }
      navbar.classList.remove('navbar--scrolled');
    }
  };

  // Initial check
  handleScroll();
  window.addEventListener('scroll', handleScroll, { passive: true });

  // Handle mobile menu toggle
  if (toggle && menu) {
    const toggleMenu = () => {
      const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', !isExpanded);
      toggle.classList.toggle('is-active');
      menu.classList.toggle('is-active');
      
      if (overlay) {
        overlay.classList.toggle('is-active');
      }
      
      // Prevent scrolling when menu is open
      document.body.style.overflow = isExpanded ? '' : 'hidden';
    };

    toggle.addEventListener('click', toggleMenu);
    
    if (overlay) {
      overlay.addEventListener('click', toggleMenu);
    }
  }
}
