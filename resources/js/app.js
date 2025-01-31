import { gsap } from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector(".header");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 200) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }
  });

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
  let slides = document.querySelectorAll(".slide-img");
  let currentIndex = 0;

  function showNextSlide() {
    slides[currentIndex].classList.remove("active");
    currentIndex = (currentIndex + 1) % slides.length;
    slides[currentIndex].classList.add("active");
  }

  setInterval(showNextSlide, 3000);

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

  // Section-based animations
  const sectionAnimations = [
    { selector: ".personal-content-section--one .image img", trigger: ".personal-content-section--one" },
    { selector: ".personal-content-section--two .image img", trigger: ".personal-content-section--two" },
    { selector: ".personal-content-section--four .image img", trigger: ".personal-content-section--four" },
    { selector: ".personal-content-section--seven .image img", trigger: ".personal-content-section--seven" },
    // { selector: ".personal-content-section--eight .image img", trigger: ".personal-content-section--eight" },
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

  // Animate flags horizontally as a whole
  const scrollWrapper = document.querySelector(".business-content-section--twelve .scroll-wrapper");

  if (scrollWrapper) {
    gsap.to(scrollWrapper, {
      x: () => `-${scrollWrapper.scrollWidth - window.innerWidth}px`,
      ease: "none",
      scrollTrigger: {
        trigger: ".business-content-section--twelve",
        start: "top center",
        end: "bottom center",
        scrub: 1,
      },
    });
  }

  // Flag images animation
  const flagsTlPersonal = gsap.timeline({
    scrollTrigger: {
      trigger: ".personal-content-section--five",
      start: "top 80%",
      end: "bottom 20%",
      scrub: 1.2,
      markers: false,
    },
  });
  flagsTlPersonal
    .fromTo(".flags-row.flags-row--one", { xPercent: -30 }, { xPercent: 30 }, "flagMove")
    .fromTo(".flags-row.flags-row--two", { xPercent: 30 }, { xPercent: -30 }, "flagMove");
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

  // Digital solution Slider
  var swiper = new Swiper(".digital-solution--swiper", {
    slidesPerView: "1",
    centeredSlides: true,
    loop: true,
    speed: 500,
    autoplay: {
      delay: 800,
    },

    breakpoints: {
      576: {
        slidesPerView: 1.5,
      },
      768: {
        slidesPerView: 2.2,
      },
      992: {
        slidesPerView: 3.2,
      },
    },
  });

  // Animate the coin-slider on scroll
  const coinsTl = gsap.timeline({
    scrollTrigger: {
      trigger: ".corporate-content-section--nine",
      start: "top +=50%",
      end: "bottom +=50%",
      scrub: 1.2,
      invalidateOnRefresh: true,
    },
  });
  coinsTl
    .fromTo(
      ".coin-slider--wrapper",
      {
        xPercent: -100,
      },
      { xPercent: 0 },
      "coins"
    )
    .fromTo(
      ".coin",
      {
        rotate: -720,
      },
      { rotate: 0 },
      "coins"
    );
  // End: Corporate page

  // Start: Business page
  // Flag images animation
  const flagsTlBusiness = gsap.timeline({
    scrollTrigger: {
      trigger: ".business-content-section--eight",
      start: "top +=95%",
      end: "bottom top",
      scrub: 1.2,
    },
  });
  flagsTlBusiness
    .fromTo(
      ".flags-row.flags-row--one",
      {
        xPercent: -10,
      },
      { xPercent: 10 },
      "flag"
    )
    .fromTo(
      ".flags-row.flags-row--two",
      {
        xPercent: 10,
      },
      { xPercent: -10 },
      "flag"
    );

  // Country Swiper Slider
  var swiperOne = new Swiper(".country-swiper--one, .country-swiper--three", {
    slidesPerView: "auto",
    spaceBetween: 10,
    centeredSlides: true,
    loop: true,
    speed: 5000,
    autoplay: {
      delay: 1,
      disableOnInteraction: false,
    },
    allowTouchMove: false,
    freeMode: true,
    freeModeMomentum: false,
    breakpoints: {
      576: {
        spaceBetween: 30,
      },
    },
  });

  var swiperTwo = new Swiper(".country-swiper--two", {
    slidesPerView: "auto",
    spaceBetween: 10,
    centeredSlides: true,
    loop: true,
    speed: 5000,
    autoplay: {
      delay: 1,
      disableOnInteraction: false,
      reverseDirection: true,
    },
    allowTouchMove: false,
    freeMode: true,
    freeModeMomentum: false,
    breakpoints: {
      576: {
        spaceBetween: 30,
      },
    },
  });
  // End: Business page
});

