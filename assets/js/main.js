// =========================================================
// 0. Always Scroll to Top on Page Load & Refresh (All Pages)
// =========================================================
if ('scrollRestoration' in history) {
  history.scrollRestoration = 'manual';
}

function scrollToTopInstant() {
  try {
    window.scrollTo({ top: 0, left: 0, behavior: 'instant' });
  } catch (e) {
    window.scrollTo(0, 0);
  }
}

// Immediate execution on script parse
scrollToTopInstant();

// Before browser unloads / saves scroll state on reload
window.addEventListener('beforeunload', () => {
  window.scrollTo(0, 0);
});

// Back/Forward cache and standard page show
window.addEventListener('pageshow', () => {
  scrollToTopInstant();
});

// When DOM elements are available
document.addEventListener('DOMContentLoaded', () => {
  scrollToTopInstant();
  const heroVideo = document.querySelector('.hero-bg-video');
  if (heroVideo) {
    const playVideo = () => heroVideo.play().catch(() => {});
    playVideo();
    heroVideo.addEventListener('loadeddata', playVideo, { once: true });
    heroVideo.addEventListener('canplay', playVideo, { once: true });
  }
});

// When images, styles, and assets finish loading
window.addEventListener('load', () => {
  scrollToTopInstant();
  if (typeof ScrollTrigger !== 'undefined' && typeof ScrollTrigger.clearScrollMemory === 'function') {
    ScrollTrigger.clearScrollMemory('manual');
  }
});

// Fullscreen Mobile/Desktop Menu Toggle
const hamburger = document.getElementById('hamburger-menu');
const navOverlay = document.getElementById('nav-overlay');
const navClose = document.getElementById('nav-close');

if (hamburger && navOverlay && navClose) {
  hamburger.addEventListener('click', () => {
    navOverlay.classList.add('active');
  });

  navClose.addEventListener('click', () => {
    navOverlay.classList.remove('active');
  });

  document.querySelectorAll('.nav-menu-full a').forEach(link => {
    link.addEventListener('click', () => {
      navOverlay.classList.remove('active');
    });
  });
}

// =========================================================
// 1. GSAP & ScrollTrigger Animations (Unified & Cohesive)
// =========================================================
if (typeof gsap !== 'undefined') {
  gsap.registerPlugin(ScrollTrigger);

  // Helper: Default standard ScrollTrigger settings (once: true prevents stutter on reverse scroll)
  const defaultTrigger = (triggerEl, startPos = 'top 85%') => ({
    trigger: triggerEl,
    start: startPos,
    once: true,
  });

  // -------------------------------------------------------------
  // A. Hero Slider Logic (Homepage)
  // -------------------------------------------------------------
  const slideTrack = document.querySelector('.hero-slide-track');
  const dots = document.querySelectorAll('.slider-dot');
  const heroH1 = document.querySelector('.hero-center-left h1');
  const heroBottomText = document.querySelector('.hero-bottom-text');

  if (slideTrack && dots.length > 0) {
    let currentSlide = 0;
    const slideCount = dots.length;
    let slideInterval;

    const slideData = [
      {
        h1: "Driven by purity.<br>Guided by science.<br>Built for consistency.",
        bottom: "Start now with<br>pure growth"
      },
      {
        h1: "Premium Maize Starch.<br>Engineered for<br>Industrial scale.",
        bottom: "Experience the<br>difference today"
      },
      {
        h1: "Sustainable sourcing.<br>Advanced processing.<br>Reliable ingredients.",
        bottom: "Explore our<br>premium range"
      }
    ];

    window.goToSlide = function(index) {
      if (currentSlide === index && arguments.length > 0) return;

      dots[currentSlide].classList.remove('active');
      currentSlide = index;
      dots[currentSlide].classList.add('active');
      
      slideTrack.style.transform = `translateX(-${currentSlide * (100 / slideCount)}%)`;
      
      if (heroH1 && heroBottomText) {
        gsap.to([heroH1, heroBottomText], {
          opacity: 0,
          y: -10,
          duration: 0.25,
          onComplete: () => {
            heroH1.innerHTML = slideData[currentSlide].h1;
            heroBottomText.innerHTML = slideData[currentSlide].bottom;
            gsap.to([heroH1, heroBottomText], { opacity: 1, y: 0, duration: 0.4, ease: "power2.out" });
          }
        });
      }
      
      clearInterval(slideInterval);
      startSlider();
    };

    function nextSlide() {
      let next = (currentSlide + 1) % slideCount;
      window.goToSlide(next);
    }

    function startSlider() {
      slideInterval = setInterval(nextSlide, 5000);
    }
    
    startSlider();
  }

  // -------------------------------------------------------------
  // B. Hero Entrance Animation (Homepage)
  // -------------------------------------------------------------
  if (document.querySelector(".hero-center-left h1")) {
    const heroTl = gsap.timeline({ defaults: { ease: "power2.out" } });
    heroTl.from(".hero-center-left h1", { y: 35, opacity: 0, duration: 1.0, clearProps: "transform,opacity" })
      .from(".hero-btn-group", { opacity: 0, y: 18, duration: 0.6, clearProps: "transform,opacity" }, "-=0.6")
      .from(".hero-bottom-text", { opacity: 0, y: 15, duration: 0.6, clearProps: "transform,opacity" }, "-=0.5")
      .from(".hero-scroll-text", { opacity: 0, y: 15, duration: 0.6, clearProps: "transform,opacity" }, "-=0.5");
    if (document.querySelector(".slider-dot")) {
      heroTl.from(".slider-dot", { opacity: 0, scale: 0.6, duration: 0.5, stagger: 0.08, ease: "back.out(1.5)", clearProps: "transform,opacity" }, "-=0.4");
    }
  }

  // -------------------------------------------------------------
  // C. Unified Section Header Groups (Eyebrow + Heading + Subtitle together)
  // -------------------------------------------------------------
  const sectionHeaderSelectors = [
    // Homepage
    '.intro-header',
    '.prod-header-grid',
    '.about-header-grid',
    '.certifications-header',
    // About Us
    '.about-hero-box',
    '.about-story-col-left',
    '.about-plant-header',
    '.about-adv-header',
    '.about-awards-header',
    // Careers
    '.careers-join-content',
    '.careers-perks-header',
    '.careers-openings-header',
    // Products & Articles Archive / Single
    '.shop-header-box',
    '.media-hero-box',
    '.article-header',
    // Contact Us
    '.contact-hero-box',
    '.contact-form-box'
  ];

  sectionHeaderSelectors.forEach(selector => {
    document.querySelectorAll(selector).forEach(header => {
      const items = header.querySelectorAll(
        '.intro-label, [class*="eyebrow"], h1, h2, h3, p, [class*="lead"], [class*="desc"], [class*="meta"], [class*="title"], [class*="heading"]'
      );
      if (items.length > 0) {
        gsap.from(items, {
          scrollTrigger: defaultTrigger(header, 'top 85%'),
          y: 22,
          opacity: 0,
          duration: 0.65,
          stagger: 0.08,
          ease: "power2.out",
          clearProps: "transform,opacity"
        });
      }
    });
  });

  // -------------------------------------------------------------
  // D. Section Grids, Cards & Content Animations (Across All Pages)
  // -------------------------------------------------------------

  // 1. Homepage - Intro Grid (12 Industry Cards)
  if (document.querySelector(".intro-card-wrap")) {
    gsap.from(".intro-card-wrap", {
      scrollTrigger: defaultTrigger(".intro-grid", "top 85%"),
      y: 28,
      opacity: 0,
      duration: 0.55,
      stagger: 0.05,
      ease: "power2.out",
      clearProps: "transform,opacity"
    });
  }

  // 2. Homepage - Products Section
  if (document.querySelector(".prod-large")) {
    gsap.from(".prod-large", {
      scrollTrigger: defaultTrigger(".prod-grid", "top 82%"),
      y: 28,
      opacity: 0,
      duration: 0.7,
      ease: "power2.out",
      clearProps: "transform,opacity"
    });
  }

  if (document.querySelector(".prod-card")) {
    gsap.from(".prod-card", {
      scrollTrigger: defaultTrigger(".prod-small-grid", "top 82%"),
      y: 22,
      opacity: 0,
      duration: 0.5,
      stagger: 0.08,
      ease: "power2.out",
      clearProps: "transform,opacity"
    });
  }

  // 3. Homepage - About 5-Column Grid
  if (document.querySelector(".about-grid-wrapper")) {
    const aboutColumns = document.querySelectorAll(".about-grid-wrapper > div");
    if (aboutColumns.length > 0) {
      gsap.from(aboutColumns, {
        scrollTrigger: defaultTrigger(".about-grid-wrapper", "top 80%"),
        y: 26,
        opacity: 0,
        duration: 0.65,
        stagger: 0.08,
        ease: "power2.out",
        clearProps: "transform,opacity"
      });
    }
  }

  // 4. Homepage - Yellow Facility Banner
  if (document.querySelector(".section-yellow-content")) {
    gsap.from(".section-yellow-content", {
      scrollTrigger: defaultTrigger(".section-yellow", "top 85%"),
      y: 24,
      opacity: 0,
      duration: 0.7,
      ease: "power2.out",
      clearProps: "transform,opacity"
    });
  }

  // 5. Homepage - Certifications Grid (9 Cards)
  if (document.querySelector(".cert-card")) {
    gsap.from(".cert-card", {
      scrollTrigger: defaultTrigger(".certifications-grid", "top 85%"),
      y: 20,
      opacity: 0,
      duration: 0.5,
      stagger: 0.05,
      ease: "power2.out",
      clearProps: "transform,opacity"
    });
  }

  // 6. Full Width Image Parallax
  if (document.querySelector(".full-img-section")) {
    gsap.to(".full-img-section", {
      scrollTrigger: {
        trigger: ".full-img-section",
        start: "top bottom",
        end: "bottom top",
        scrub: true
      },
      backgroundPosition: "50% 100%",
      ease: "none"
    });
  }

  // 7. About Us Page - Plant Specs & Metrics
  if (document.querySelector(".about-spec-card")) {
    gsap.from(".about-spec-card", {
      scrollTrigger: defaultTrigger(".about-plant-specs", "top 85%"),
      y: 20,
      opacity: 0,
      duration: 0.5,
      stagger: 0.07,
      ease: "power2.out",
      clearProps: "transform,opacity"
    });
  }

  if (document.querySelector(".about-metric-card")) {
    gsap.from(".about-metric-card", {
      scrollTrigger: defaultTrigger(".about-metrics-grid", "top 85%"),
      y: 20,
      opacity: 0,
      duration: 0.5,
      stagger: 0.07,
      ease: "power2.out",
      clearProps: "transform,opacity"
    });
  }

  // 8. About Us Page - Strategic Advantages
  if (document.querySelector(".about-adv-card")) {
    gsap.from(".about-adv-card", {
      scrollTrigger: defaultTrigger(".about-adv-grid", "top 85%"),
      y: 24,
      opacity: 0,
      duration: 0.55,
      stagger: 0.08,
      ease: "power2.out",
      clearProps: "transform,opacity"
    });
  }

  // 9. About Us Page - Core Values / Awards
  if (document.querySelector(".about-award-item")) {
    gsap.from(".about-award-item", {
      scrollTrigger: defaultTrigger(".about-awards-grid", "top 85%"),
      y: 20,
      opacity: 0,
      duration: 0.5,
      stagger: 0.06,
      ease: "power2.out",
      clearProps: "transform,opacity"
    });
  }

  // 10. Careers Page - Hero Split & Join Grid
  if (document.querySelector(".careers-hero-img-col")) {
    gsap.from(".careers-hero-img-col, .careers-hero-text-col", {
      y: 24,
      opacity: 0,
      duration: 0.7,
      stagger: 0.12,
      ease: "power2.out",
      clearProps: "transform,opacity"
    });
  }

  if (document.querySelector(".careers-join-img-col")) {
    gsap.from(".careers-join-img-col", {
      scrollTrigger: defaultTrigger(".careers-join-grid", "top 85%"),
      y: 24,
      opacity: 0,
      duration: 0.7,
      ease: "power2.out",
      clearProps: "transform,opacity"
    });
  }

  // 11. Careers Page - Perks Cards
  if (document.querySelector(".careers-perk-card")) {
    gsap.from(".careers-perk-card", {
      scrollTrigger: defaultTrigger(".careers-perks-grid", "top 85%"),
      y: 22,
      opacity: 0,
      duration: 0.55,
      stagger: 0.08,
      ease: "power2.out",
      clearProps: "transform,opacity"
    });
  }

  // 12. Careers Page - Job Openings Accordion
  if (document.querySelector(".opening-item")) {
    gsap.from(".opening-item", {
      scrollTrigger: defaultTrigger(".careers-openings-list", "top 85%"),
      y: 18,
      opacity: 0,
      duration: 0.5,
      stagger: 0.06,
      ease: "power2.out",
      clearProps: "transform,opacity"
    });
  }

  if (document.querySelector(".careers-resume-box")) {
    gsap.from(".careers-resume-box", {
      scrollTrigger: defaultTrigger(".careers-resume-box", "top 85%"),
      y: 24,
      opacity: 0,
      duration: 0.65,
      ease: "power2.out",
      clearProps: "transform,opacity"
    });
  }

  // 13. Products Archive Page - Shop Cards
  if (document.querySelector(".shop-card")) {
    gsap.from(".shop-card", {
      scrollTrigger: defaultTrigger("#productsGrid", "top 85%"),
      y: 24,
      opacity: 0,
      duration: 0.5,
      stagger: 0.05,
      ease: "power2.out",
      clearProps: "transform,opacity"
    });
  }

  // 14. Single Product Page - Detail Split & Specs
  if (document.querySelector(".prod-detail-left")) {
    gsap.from(".prod-detail-left, .prod-detail-right", {
      y: 22,
      opacity: 0,
      duration: 0.7,
      stagger: 0.12,
      ease: "power2.out",
      clearProps: "transform,opacity"
    });
  }

  if (document.querySelector(".specs-table-container")) {
    gsap.from(".specs-table-container", {
      scrollTrigger: defaultTrigger(".specs-table-container", "top 85%"),
      y: 20,
      opacity: 0,
      duration: 0.6,
      ease: "power2.out",
      clearProps: "transform,opacity"
    });
  }

  // 15. Media Page - Media Cards
  if (document.querySelector(".media-card")) {
    gsap.from(".media-card", {
      scrollTrigger: defaultTrigger(".media-grid", "top 85%"),
      y: 22,
      opacity: 0,
      duration: 0.5,
      stagger: 0.06,
      ease: "power2.out",
      clearProps: "transform,opacity"
    });
  }

  // 16. Articles Archive - Blog Post Cards
  if (document.querySelector(".blog-post")) {
    gsap.from(".blog-post", {
      scrollTrigger: defaultTrigger(".blog-posts-grid", "top 85%"),
      y: 24,
      opacity: 0,
      duration: 0.6,
      stagger: 0.09,
      ease: "power2.out",
      clearProps: "transform,opacity"
    });
  }

  // 17. Single Article - Content Box
  if (document.querySelector(".article-content-wrapper")) {
    gsap.from(".article-content-wrapper", {
      scrollTrigger: defaultTrigger(".article-content-wrapper", "top 85%"),
      y: 20,
      opacity: 0,
      duration: 0.6,
      ease: "power2.out",
      clearProps: "transform,opacity"
    });
  }

  // 18. Floating Elements (Subtle parallax on decorative illustrations)
  gsap.utils.toArray('.left-milk-img, .right-milk-img, .cup-img, .bottle-img, .cheese-img, .intro-jug-img').forEach(img => {
    gsap.to(img, {
      scrollTrigger: {
        trigger: img.parentElement,
        start: "top bottom",
        end: "bottom top",
        scrub: 1
      },
      y: -60,
      rotation: 3,
      ease: "none"
    });
  });

  // Refresh ScrollTrigger calculations after all resources load
  window.addEventListener("load", () => {
    ScrollTrigger.refresh();
  });
}

// =========================================================
// 2. Automatically Highlight Active Nav Link
// =========================================================
(function initActiveNav() {
  const currentPath = window.location.pathname.replace(/^\/|\/$/g, '');
  document.querySelectorAll('.nav-links a, .nav-menu-full a').forEach(link => {
    const href = (link.getAttribute('href') || '').replace(/^https?:\/\/[^\/]+/, '').replace(/^\/|\/$/g, '');
    if (href === currentPath || (currentPath === '' && href === '')) {
      link.classList.add('active');
    }
  });
})();
