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

// Initialize GSAP ScrollTrigger if GSAP exists
if (typeof gsap !== 'undefined') {
  gsap.registerPlugin(ScrollTrigger);

  // Hero Slider Logic
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
        h1: "Nature's best milk.<br>Fresh from the farm.<br>Delivered to you.",
        bottom: "Taste the<br>difference today"
      },
      {
        h1: "Sustainable farming.<br>Healthy cows.<br>Premium dairy products.",
        bottom: "Explore our<br>premium range"
      }
    ];

    window.goToSlide = function(index) {
      if (currentSlide === index && arguments.length > 0) return; // Prevent re-triggering same slide

      dots[currentSlide].classList.remove('active');
      currentSlide = index;
      dots[currentSlide].classList.add('active');
      
      slideTrack.style.transform = `translateX(-${currentSlide * (100 / slideCount)}%)`;
      
      if (heroH1 && heroBottomText) {
        // Update Text with simple fade
        gsap.to([heroH1, heroBottomText], {
          opacity: 0,
          y: -10,
          duration: 0.3,
          onComplete: () => {
            heroH1.innerHTML = slideData[currentSlide].h1;
            heroBottomText.innerHTML = slideData[currentSlide].bottom;
            gsap.to([heroH1, heroBottomText], { opacity: 1, y: 0, duration: 0.4, ease: "power2.out" });
          }
        });
      }
      
      // Reset timer
      clearInterval(slideInterval);
      startSlider();
    }

    function nextSlide() {
      let next = (currentSlide + 1) % slideCount;
      window.goToSlide(next);
    }

    function startSlider() {
      slideInterval = setInterval(nextSlide, 4000);
    }
    
    startSlider();
  }

  // 1. Hero Animation (Load)
  if (document.querySelector(".hero-center-left h1")) {
    const heroTl = gsap.timeline();
    heroTl.from(".hero-center-left h1", { y: 30, opacity: 0, duration: 1, ease: "power2.out" })
      .from(".btn--hero-orange", { opacity: 0, duration: 0.8, ease: "power2.out" }, "-=0.6")
      .from(".hero-bottom-text", { opacity: 0, duration: 0.8, ease: "power2.out" }, "-=0.6")
      .from(".hero-scroll-text", { opacity: 0, duration: 0.8, ease: "power2.out" }, "-=0.6")
      .from(".slider-dot", { opacity: 0, duration: 0.6, stagger: 0.1, ease: "power2.out" }, "-=0.4");
  }

  // 2. Section Titles Fade In
  gsap.utils.toArray('h2').forEach(title => {
    gsap.from(title, {
      scrollTrigger: {
        trigger: title,
        start: "top 85%",
      },
      y: 40,
      opacity: 0,
      duration: 0.8,
      ease: "power2.out"
    });
  });

  // 3. Intro Cards Stagger
  if (document.querySelector(".intro-card")) {
    gsap.from(".intro-card", {
      scrollTrigger: {
        trigger: ".intro-grid",
        start: "top 85%",
      },
      y: 50,
      opacity: 0,
      duration: 0.8,
      stagger: 0.2,
      ease: "power2.out"
    });
  }

  // 4. Banners Slide In (Fixed to use Y axis instead of X to prevent mobile overflow)
  gsap.utils.toArray('.banner-row').forEach((banner, i) => {
    gsap.from(banner, {
      scrollTrigger: {
        trigger: banner,
        start: "top 90%",
      },
      y: 50, 
      opacity: 0,
      duration: 0.8,
      ease: "power2.out"
    });
  });

  // 5. Products Grid Stagger
  if (document.querySelector(".prod-card")) {
    gsap.from(".prod-card", {
      scrollTrigger: {
        trigger: ".prod-small-grid",
        start: "top 80%",
      },
      scale: 0.9,
      opacity: 0,
      duration: 0.6,
      stagger: 0.15,
      ease: "back.out(1.2)"
    });
  }

  // 6. Parallax effect for full width image
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

  // 7. Team Cards Stagger
  if (document.querySelector(".team-card")) {
    gsap.from(".team-card", {
      scrollTrigger: {
        trigger: ".team-grid",
        start: "top 85%",
      },
      y: 40,
      opacity: 0,
      duration: 0.8,
      stagger: 0.2,
      ease: "power2.out"
    });
  }

  // 8. About Images Reveal
  if (document.querySelector(".about-images img")) {
    gsap.from(".about-images img", {
      scrollTrigger: {
        trigger: ".about-images",
        start: "top 80%",
      },
      scale: 0.8,
      opacity: 0,
      duration: 1,
      stagger: 0.2,
      ease: "power3.out"
    });
  }
}
