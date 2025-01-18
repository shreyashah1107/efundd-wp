import { gsap } from "gsap";

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

  // GSAP timeline
  const heroTimeline = gsap.timeline();

  // Animate the center images first
  heroTimeline.fromTo(
    ".hero--personal-updated .hero--content-images .images--center img",
    {
      opacity: 0,
      y: 50,
      scale: 0.8,
    },
    {
      opacity: 1,
      y: 0,
      scale: 1,
      duration: 0.8,
      ease: "power1.out",
      stagger: 0.3,
    }
  );

  // Animate the left images
  heroTimeline.fromTo(
    ".hero--personal-updated .hero--content-images .images--left img",
    {
      opacity: 0,
      x: -60,
      scale: 0.9,
    },
    {
      opacity: 1,
      x: 0,
      scale: 1,
      duration: 0.7,
      ease: "power2.out",
      stagger: 0.2,
    },
    "-=0.3"
  );

  // Animate the right images
  heroTimeline.fromTo(
    ".hero--personal-updated .hero--content-images .images--right img",
    {
      opacity: 0,
      x: 60,
      scale: 0.9,
    },
    {
      opacity: 1,
      x: 0,
      scale: 1,
      duration: 0.7,
      ease: "power2.out",
      stagger: 0.2,
    },
    "-=0.3"
  );

  // Mouse movement parallax effect
  document.addEventListener("mousemove", (e) => {
    const { clientX, clientY } = e;
    const windowWidth = window.innerWidth;
    const windowHeight = window.innerHeight;

    const xRatio = (clientX / windowWidth) * 2 - 1;
    const yRatio = (clientY / windowHeight) * 2 - 1;

    // Center Images Movement
    document
      .querySelectorAll(".hero--personal-updated .hero--content-images .images--center img")
      .forEach((img, index) => {
        const intensity = (index + 1) * 5;
        gsap.to(img, {
          x: xRatio * intensity,
          y: yRatio * intensity,
          scale: 1 + xRatio * 0.05,
          duration: 0.4,
          ease: "power2.out",
        });
      });

    // Left Images Movement
    document
      .querySelectorAll(".hero--personal-updated .hero--content-images .images--left img")
      .forEach((img, index) => {
        const intensity = (index + 1) * 10;
        gsap.to(img, {
          x: xRatio * -intensity,
          y: yRatio * intensity,
          scale: 1 + yRatio * 0.05,
          duration: 0.4,
          ease: "power2.out",
        });
      });

    // Right Images Movement
    document
      .querySelectorAll(".hero--personal-updated .hero--content-images .images--right img")
      .forEach((img, index) => {
        const intensity = (index + 1) * 10;
        gsap.to(img, {
          x: xRatio * intensity,
          y: yRatio * -intensity,
          scale: 1 + xRatio * 0.05,
          duration: 0.4,
          ease: "power2.out",
        });
      });
  });
});

// Hero Card Slider
var swiper = new Swiper(".hero--swiper", {
  slidesPerView: 1.01,
  spaceBetween: 20,
  centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 2000,
  },

  breakpoints: {
    576: {
      slidesPerView: 1.8,
    },
    992: {
      slidesPerView: 2.5,
    },
    1200: {
      slidesPerView: 2.75,
    },
    1400: {
      slidesPerView: 3.1,
    },
  },
});

// Account Management Card Slider
var swiper = new Swiper(".account-management--swiper", {
  slidesPerView: 1.01,
  spaceBetween: 20,
  // autoplay: {
  //   delay: 1500,
  // },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    576: {
      slidesPerView: 1.1,
    },
    768: {
      slidesPerView: 1.5,
    },
    992: {
      slidesPerView: 2,
    },
    1400: {
      slidesPerView: 2.9,
    },
  },
});

// Payments Card Slider
var swiper = new Swiper(".payments--swiper", {
  slidesPerView: 1.01,
  spaceBetween: 20,

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    576: {
      slidesPerView: 1.1,
    },
    768: {
      slidesPerView: 1.5,
    },
    992: {
      slidesPerView: 2,
    },
    1400: {
      slidesPerView: 2.9,
    },
  },
});

// Why Choose Us Card Slider
var swiper = new Swiper(".why-choose-us--swiper", {
  slidesPerView: 1.01,
  spaceBetween: 20,
  autoplay: {
    delay: 2000,
  },

  breakpoints: {
    576: {
      slidesPerView: 1.8,
    },
    992: {
      slidesPerView: 2.75,
    },
    1400: {
      slidesPerView: 4,
    },
  },
});

// Payments Card Slider
var swiper = new Swiper(".payments--slider.one-api--global .payments--swiper", {
  slidesPerView: 1.01,
  spaceBetween: 20,
  centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 3000,
  },

  breakpoints: {
    576: {
      slidesPerView: 1.01,
    },
    992: {
      slidesPerView: 2.2,
    },
    1400: {
      slidesPerView: 2.75,
    },
  },
});

// Partner Slider
var swiper = new Swiper(".partner--swiper", {
  slidesPerView: "auto",
  spaceBetween: 30,
  centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 2000,
  },

  breakpoints: {
    576: {
      spaceBetween: 100,
    },
  },
});

// Digital Solution Slider
var swiper = new Swiper(".digital-solution--swiper", {
  slidesPerView: 1.01,
  spaceBetween: 20,

  breakpoints: {
    576: {
      slidesPerView: 1.5,
    },
    768: {
      slidesPerView: 2.5,
    },
    992: {
      slidesPerView: 2.6,
    },
    1400: {
      slidesPerView: 3.9,
    },
  },
});
