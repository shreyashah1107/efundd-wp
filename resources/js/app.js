import Header from "./modules/Header";
import MobileNav from "./modules/MobileNav";

import { gsap } from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
import SplitText from "./lib/SplitText";

gsap.registerPlugin(ScrollTrigger, SplitText);

import { WOW } from "wowjs";

// Cursor Effect Class
class Cursor {
  constructor(options) {
    this.options = $.extend(
      true,
      {
        container: "body",
        speed: 0.7,
        ease: "expo.out",
        visibleTimeout: 300,
      },
      options
    );
    this.body = $(this.options.container);
    this.el = $('<div class="cb-cursor"></div>');
    this.text = $('<div class="cb-cursor-text"></div>');
    this.init();
  }

  init() {
    this.el.append(this.text);
    this.body.append(this.el);
    this.bind();
    this.move(-window.innerWidth, -window.innerHeight, 0);
  }

  bind() {
    const self = this;

    this.body
      .on("mouseleave", () => self.hide())
      .on("mouseenter", () => self.show())
      .on("mousemove", (e) => {
        this.pos = {
          x: this.stick ? this.stick.x - (this.stick.x - e.clientX) * 0.15 : e.clientX,
          y: this.stick ? this.stick.y - (this.stick.y - e.clientY) * 0.15 : e.clientY,
        };
        this.update();
      })
      .on("mousedown", () => self.setState("-active"))
      .on("mouseup", () => self.removeState("-active"))
      .on("mouseenter", "a, input, textarea, button", () => self.setState("-pointer"))
      .on("mouseleave", "a, input, textarea, button", () => self.removeState("-pointer"))
      .on("mouseenter", "[data-cursor]", function () {
        self.setState(this.dataset.cursor);
      })
      .on("mouseleave", "[data-cursor]", function () {
        self.removeState(this.dataset.cursor);
      });
  }

  setState(state) {
    this.el.addClass(state);
  }

  removeState(state) {
    this.el.removeClass(state);
  }

  update() {
    this.move();
    this.show();
  }

  move(x, y, duration) {
    gsap.to(this.el, {
      x: x || this.pos.x,
      y: y || this.pos.y,
      force3D: true,
      overwrite: true,
      ease: this.options.ease,
      duration: this.visible ? duration || this.options.speed : 0,
    });
  }

  show() {
    if (this.visible) return;
    clearTimeout(this.visibleTimeout);
    this.el.addClass("-visible");
    this.visibleTimeout = setTimeout(() => (this.visible = true));
  }

  hide() {
    clearTimeout(this.visibleTimeout);
    this.el.removeClass("-visible");
    this.visibleTimeout = setTimeout(() => (this.visible = false), this.options.visibleTimeout);
  }
}

// Initialize Cursor
const cursor = new Cursor();

const initApp = () => {
  // Header
  const header = document.querySelector("#header");
  if (header) {
    new Header(header);
  }

  // Mobile Navigation
  const mobileNav = document.querySelector("#mobileNav");
  if (mobileNav) {
    new MobileNav(mobileNav);
  }
};

if (document.readyState === "loading") {
  // Loading hasn't finished yet
  document.addEventListener("DOMContentLoaded", initApp);
} else {
  // `DOMContentLoaded` has already fired
  initApp();
}

document.addEventListener("DOMContentLoaded", function () {
  const wow = new WOW();
  wow.init();

  // Start: Language dropdown
  document.querySelectorAll(".lang-dropdown-wrapper").forEach((wrapper) => {
    const langSelected = wrapper.querySelector(".lang-selected");
    const langOptions = wrapper.querySelector(".lang-options");
    const selectedFlagImg = langSelected.querySelector(".flag-img img");
    const selectedLangText = langSelected.querySelector("span");

    langSelected.addEventListener("click", () => {
      langOptions.classList.toggle("open");
    });

    langOptions.addEventListener("click", (e) => {
      const clickedOption = e.target.closest(".lang-option");
      if (!clickedOption) return;

      const selectedLangCode = clickedOption.dataset.lang.toUpperCase();
      const selectedImgSrc = clickedOption.querySelector("img").src;

      selectedLangText.textContent = selectedLangCode;
      selectedFlagImg.src = selectedImgSrc;

      wrapper.querySelectorAll(".lang-option").forEach((option) => {
        option.classList.remove("active");
      });
      clickedOption.classList.add("active");

      langOptions.classList.remove("open");

      const theurl = clickedOption.getAttribute("data-value");
      window.location.href = theurl;
    });

    document.addEventListener("click", (e) => {
      if (!e.target.closest(".lang-dropdown-wrapper")) {
        langOptions.classList.remove("open");
      }
    });
  });
  // End: Language dropdown

  if (document.querySelectorAll(".text-anime-style-1").length) {
    let staggerAmount = 0.05,
      delayValue = 0.5,
      animatedTextElements = document.querySelectorAll(".text-anime-style-1");

    animatedTextElements.forEach((element) => {
      let animationSplitText = new SplitText(element, { type: "chars, words" });

      gsap.from(animationSplitText.words, {
        duration: 1,
        delay: delayValue,
        x: 20,
        autoAlpha: 0,
        stagger: staggerAmount,
        scrollTrigger: { trigger: element, start: "top 85%" },
      });
    });
  }

  if (document.querySelector(".text-anime-style-2")) {
    let staggerAmount = 0.03,
      translateXValue = 20,
      delayValue = 0.1,
      easeType = "power2.out",
      animatedTextElements = document.querySelectorAll(".text-anime-style-2");

    animatedTextElements.forEach((element) => {
      let animationSplitText = new SplitText(element, { type: "chars, words" });

      gsap.from(animationSplitText.chars, {
        duration: 1,
        delay: delayValue,
        x: translateXValue,
        autoAlpha: 0,
        stagger: staggerAmount,
        ease: easeType,
        scrollTrigger: { trigger: element, start: "top 85%" },
      });
    });
  }

  if (document.querySelectorAll(".text-anime-style-3").length) {
    let animatedTextElements = document.querySelectorAll(".text-anime-style-3");

    animatedTextElements.forEach((element) => {
      if (element.animation) {
        element.animation.progress(1).kill();
        element.split.revert();
      }

      element.split = new SplitText(element, {
        type: "lines,words,chars",
        linesClass: "split-line",
      });

      gsap.set(element, { perspective: 400 });

      gsap.set(element.split.chars, {
        opacity: 0,
        x: 50,
      });

      element.animation = gsap.to(element.split.chars, {
        scrollTrigger: { trigger: element, start: "top 90%" },
        x: 0,
        opacity: 1,
        duration: 1,
        ease: "back.out(1.7)",
        stagger: 0.02,
      });
    });
  }

  gsap.registerPlugin(ScrollTrigger);

  // Start: Personal page
  const slides = document.querySelectorAll(".slide-img");
  let currentIndex = 0;

  if (slides.length > 0) {
    slides[currentIndex].classList.add("active");

    function showNextSlide() {
      slides[currentIndex].classList.remove("active");
      currentIndex = (currentIndex + 1) % slides.length;
      slides[currentIndex].classList.add("active");
    }

    setInterval(showNextSlide, 2000);
  }

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
  ];

  sectionAnimations.forEach(({ selector, trigger }) => {
    animateElement(
      selector,
      { opacity: 0, y: 50, scale: 0.8 },
      { opacity: 1, y: 0, scale: 1, duration: 1, ease: "power2.out" },
      { trigger, start: "top center", toggleActions: "play none none none" }
    );
  });

  // Section five animations
  animateElements(
    ".personal-content-section--five .country--list--item",
    { opacity: 0, scale: 0.8 },
    { opacity: 1, scale: 1, duration: 0.5, ease: "power2.out" },
    { trigger: ".personal-content-section--five", start: "top center", toggleActions: "play none none none" }
  );

  // Animate flags horizontally as a whole
  function animateScrollingPersonal(selector, direction, speed, rotationAngle = 90) {
    const xMovement = direction === "left" ? "-30%" : "30%";

    gsap.to(selector, {
      x: xMovement,
      ease: "none",
      scrollTrigger: {
        trigger: ".personal-content-section--five",
        start: "top bottom",
        end: "bottom top",
        scrub: speed,
      },
    });

    // Apply rotation to images inside the flag rows
    gsap.to(selector + " .image img", {
      rotation: rotationAngle,
      ease: "none",
      scrollTrigger: {
        trigger: ".personal-content-section--five",
        start: "top bottom",
        end: "bottom top",
        scrub: 1.5,
      },
    });
  }

  // Apply animations to flag rows
  animateScrollingPersonal(".flags-row--one", "left", 1.5);
  animateScrollingPersonal(".flags-row--two", "right", 1.5);

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
        slidesPerView: 3,
      },
    },
  });

  // Sell Card Slider
  var swiper = new Swiper(".sell--swiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    // autoplay: {
    //   delay: 2000,
    // },

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    breakpoints: {
      576: {
        slidesPerView: 1.5,
      },
      768: {
        slidesPerView: 2.2,
      },
      1400: {
        slidesPerView: 3,
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

  // Certificate Slider
  var swiper = new Swiper(".certificates--swiper", {
    slidesPerView: "auto",
    spaceBetween: 10,
    autoplay: {
      delay: 2000,
    },

    breakpoints: {
      768: {
        slidesPerView: 6,
      },
      1200: {
        slidesPerView: 6,
        spaceBetween: 20,
      },
    },
  });

  // Flag images animation
  // Function to animate scrolling
  function animateScrollingCorporate(selector, direction, speed) {
    const xMovement = direction === "left" ? "-30%" : "30%";

    gsap.to(selector, {
      x: xMovement,
      ease: "none",
      scrollTrigger: {
        trigger: ".corporate-content-section--ten",
        start: "top bottom",
        end: "bottom top",
        scrub: speed,
      },
    });
  }

  // Function to animate flag rotation
  function animateRotationOnScrollCorporate(selector, rotationAngle) {
    gsap.to(selector + " .image img:not(.title-text)", {
      rotation: rotationAngle,
      ease: "none",
      scrollTrigger: {
        trigger: ".corporate-content-section--ten",
        start: "top bottom",
        end: "bottom top",
        scrub: 1.5,
      },
    });
  }

  // Apply scrolling effect
  animateScrollingCorporate(".flags-row--one", "left", 1.5);
  animateScrollingCorporate(".flags-row--two", "right", 1.5);
  animateScrollingCorporate(".flags-row--three", "left", 1.5);

  // Apply independent rotation to each flag
  animateRotationOnScrollCorporate(".flags-row--one", 90);
  animateRotationOnScrollCorporate(".flags-row--two", 90);
  animateRotationOnScrollCorporate(".flags-row--three", 90);

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

  gsap.from(".corporate-content-section--six .list--image", {
    opacity: 0,
    y: -50,
    duration: 0.8,
    stagger: 0.6,
    ease: "power2.out",
    scrollTrigger: {
      trigger: ".corporate-content-section--six",
      start: "top 80%",
      end: "bottom 20%",
      scrub: false,
    },
  });
  // End: Corporate page

  // Start: Business page
  const cardAnimations = [
    {
      target: ".business-content-section--three .card-one--inner",
      from: { xPercent: -150, yPercent: -50, rotateY: 180, scale: 0.25 },
      to: { xPercent: 0, yPercent: 0, rotateY: 0, scale: 1 },
    },
    {
      target: ".business-content-section--three .card-three--inner",
      from: { xPercent: 150, yPercent: -50, rotateY: -180, scale: 0.25 },
      to: { xPercent: 0, yPercent: 0, rotateY: 0, scale: 1 },
    },
    {
      target: ".business-content-section--three .card-two--inner",
      from: { scale: 0.25, yPercent: 50, rotateX: -90 },
      to: { scale: 1, yPercent: 0, rotateX: 0 },
    },
  ];

  cardAnimations.forEach(({ target, from, to }) => {
    gsap.fromTo(target, from, {
      ...to,
      scrollTrigger: {
        trigger: ".business-content-section--three",
        scrub: 1,
        start: "top 30%",
        end: "bottom 80%",
      },
      duration: 1,
    });
  });

  var swiper = new Swiper(".business-content-section--five .content-img--swiper", {
    slidesPerView: 1,
    effect: "fade",
    speed: 800,
    autoplay: {
      delay: 2000,
    },
  });

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
