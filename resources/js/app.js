import { gsap } from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

document.addEventListener("DOMContentLoaded", function () {
  const navbarToggler = document.querySelector(".navbar-toggler");
  const body = document.body;

  navbarToggler.addEventListener("click", function () {
    const isExpanded = body.classList.contains("no-scroll");

    if (isExpanded) {
      body.classList.remove("no-scroll");
    } else {
      body.classList.add("no-scroll");
    }
  });

  document.getElementById("headerNav").addEventListener("hidden.bs.collapse", function () {
    body.classList.remove("no-scroll");
  });

  document.getElementById("headerNav").addEventListener("shown.bs.collapse", function () {
    body.classList.add("no-scroll");
  });

  gsap.registerPlugin(ScrollTrigger);

  // Start: Personal page
  // Function to create GSAP animations
  function animateElement(selector, fromProps, toProps, scrollTrigger = null) {
    if (document.querySelector(selector)) {
      gsap.fromTo(selector, fromProps, {
        ...toProps,
        scrollTrigger: scrollTrigger || undefined,
      });
    }
  }

  // Function for staggered animations
  function animateElements(selector, fromProps, toProps, scrollTrigger = null, stagger = 0.2) {
    const elements = document.querySelectorAll(selector);
    if (elements.length > 0) {
      gsap.fromTo(elements, fromProps, {
        ...toProps,
        stagger: stagger,
        scrollTrigger: scrollTrigger || undefined,
      });
    }
  }

  // If hero section exists
  if (document.querySelector(".hero--personal")) {
    const heroTimeline = gsap.timeline();

    // Animate center images
    heroTimeline.fromTo(
      ".hero--personal .hero--content-images .images--center img",
      { opacity: 0, y: 50, scale: 0.8 },
      { opacity: 1, y: 0, scale: 1, duration: 0.8, ease: "power1.out", stagger: 0.3 }
    );

    // Animate left images
    heroTimeline.fromTo(
      ".hero--personal .hero--content-images .images--left img",
      { opacity: 0, x: -60, scale: 0.9 },
      { opacity: 1, x: 0, scale: 1, duration: 0.7, ease: "power2.out", stagger: 0.2 },
      "-=0.3"
    );

    // Animate right images
    heroTimeline.fromTo(
      ".hero--personal .hero--content-images .images--right img",
      { opacity: 0, x: 60, scale: 0.9 },
      { opacity: 1, x: 0, scale: 1, duration: 0.7, ease: "power2.out", stagger: 0.2 },
      "-=0.3"
    );

    // Parallax effect on mouse movement
    document.querySelector(".hero--personal").addEventListener("mousemove", (e) => {
      const { clientX, clientY } = e;
      const windowWidth = window.innerWidth;
      const windowHeight = window.innerHeight;

      const xRatio = (clientX / windowWidth) * 2 - 1;
      const yRatio = (clientY / windowHeight) * 2 - 1;

      const parallaxEffect = (selector, xMultiplier, yMultiplier, scaleMultiplier = 0.05) => {
        document.querySelectorAll(selector).forEach((img, index) => {
          const intensity = (index + 1) * 5 * xMultiplier;
          gsap.to(img, {
            x: xRatio * intensity,
            y: yRatio * intensity * yMultiplier,
            scale: 1 + scaleMultiplier * (xRatio + yRatio),
            duration: 0.4,
            ease: "power2.out",
          });
        });
      };

      parallaxEffect(".hero--personal .hero--content-images .images--center img", 1, 1);
      parallaxEffect(".hero--personal .hero--content-images .images--left img", -1, 1);
      parallaxEffect(".hero--personal .hero--content-images .images--right img", 1, -1);
    });
  }

  // Section-based animations
  const sectionAnimations = [
    { selector: ".personal-content-section--one .image img", trigger: ".personal-content-section--one" },
    { selector: ".personal-content-section--two .image img", trigger: ".personal-content-section--two" },
    { selector: ".personal-content-section--four .image img", trigger: ".personal-content-section--four" },
    { selector: ".personal-content-section--seven .image img", trigger: ".personal-content-section--seven" },
    { selector: ".personal-content-section--eight .image img", trigger: ".personal-content-section--eight" },
  ];

  sectionAnimations.forEach(({ selector, trigger }) => {
    animateElement(
      selector,
      { opacity: 0, y: 50, scale: 0.8 },
      { opacity: 1, y: 0, scale: 1, duration: 1, ease: "power2.out" },
      { trigger, start: "top center", toggleActions: "play none none none" }
    );
  });

  // Section three animations
  if (document.querySelector(".personal-content-section--three")) {
    const timeline = gsap.timeline({
      scrollTrigger: {
        trigger: ".personal-content-section--three",
        start: "top center+=100",
        toggleActions: "play none none none",
      },
    });

    timeline
      .fromTo(
        ".personal-content-section--three .images--center .center-left",
        { x: "-100%", opacity: 0 },
        { x: "0%", opacity: 1, duration: 0.8, ease: "power2.out" }
      )
      .fromTo(
        ".personal-content-section--three .images--center .center-right",
        { x: "100%", opacity: 0 },
        { x: "0%", opacity: 1, duration: 0.8, ease: "power2.out" }
      )
      .fromTo(
        ".personal-content-section--three .country--item",
        { opacity: 0, scale: 0.8 },
        { opacity: 1, scale: 1, duration: 0.5, ease: "power2.out", stagger: 0.2 }
      );
  }

  // Section five animations
  animateElements(
    ".personal-content-section--five .country--list--item",
    { opacity: 0, scale: 0.8 },
    { opacity: 1, scale: 1, duration: 0.5, ease: "power2.out" },
    { trigger: ".personal-content-section--five", start: "top center", toggleActions: "play none none none" }
  );

  // Animate country images horizontally
  const countryImages = document.querySelector(".personal-content-section--five .country-images");
  if (countryImages) {
    gsap.to(countryImages, {
      x: () => `-${countryImages.scrollWidth - window.innerWidth}px`,
      ease: "none",
      scrollTrigger: {
        trigger: ".personal-content-section--five",
        start: "top center",
        end: "bottom center",
        scrub: 1,
      },
    });
  }
  // End: Personal page

  // Start: Corporate page
  // Payments Card Slider
  var swiper = new Swiper(".payment--swiper", {
    slidesPerView: 1.01,
    spaceBetween: 20,
    autoplay: {
      delay: 2000,
    },

    breakpoints: {
      576: {
        slidesPerView: 1.5,
      },
      768: {
        slidesPerView: 2.2,
      },
      1400: {
        slidesPerView: 2.5,
      },
    },
  });

  // Sell Card Slider
  var swiper = new Swiper(".sell--swiper", {
    slidesPerView: 1.01,
    spaceBetween: 20,
    autoplay: {
      delay: 2000,
    },

    breakpoints: {
      576: {
        slidesPerView: 1.5,
      },
      768: {
        slidesPerView: 2.2,
      },
      1400: {
        slidesPerView: 2.5,
      },
    },
  });

  // Partner Slider
  var swiper = new Swiper(".partner--swiper", {
    slidesPerView: "auto",
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    speed: 3000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    freeMode: true,
    freeModeMomentum: false,
  });
  // End: Corporate page
});

