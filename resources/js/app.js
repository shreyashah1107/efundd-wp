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