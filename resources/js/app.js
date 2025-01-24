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
  const heroTimeline = gsap.timeline();

  // Animate the center images first
  heroTimeline.fromTo(
    ".hero--personal .hero--content-images .images--center img",
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
    ".hero--personal .hero--content-images .images--left img",
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
    ".hero--personal .hero--content-images .images--right img",
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
  document.querySelector(".hero--personal").addEventListener("mousemove", (e) => {
    const { clientX, clientY } = e;
    const windowWidth = window.innerWidth;
    const windowHeight = window.innerHeight;

    const xRatio = (clientX / windowWidth) * 2 - 1;
    const yRatio = (clientY / windowHeight) * 2 - 1;

    // Center Images Movement
    document.querySelectorAll(".hero--personal .hero--content-images .images--center img").forEach((img, index) => {
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
    document.querySelectorAll(".hero--personal .hero--content-images .images--left img").forEach((img, index) => {
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
    document.querySelectorAll(".hero--personal .hero--content-images .images--right img").forEach((img, index) => {
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

  const contentSectionOne = document.querySelector(".personal-content-section--one .image img");

  gsap.fromTo(
    contentSectionOne,
    {
      opacity: 0,
      y: 50,
      scale: 0.8,
    },
    {
      opacity: 1,
      y: 0,
      scale: 1,
      duration: 1,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".personal-content-section--one",
        start: "top center",
        toggleActions: "play none none none",
      },
    }
  );

  const contentSectionTwo = document.querySelector(".personal-content-section--two .image img");

  gsap.fromTo(
    contentSectionTwo,
    {
      opacity: 0,
      y: 50,
      scale: 0.8,
    },
    {
      opacity: 1,
      y: 0,
      scale: 1,
      duration: 1,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".personal-content-section--two",
        start: "top center",
        toggleActions: "play none none none",
      },
    }
  );

  const contentSectionThreeTimeline = gsap.timeline({
    scrollTrigger: {
      trigger: ".personal-content-section--three",
      start: "top center+=100",
      toggleActions: "play none none none",
    },
  });

  contentSectionThreeTimeline
    .fromTo(
      ".personal-content-section--three .images--center .center-left",
      { x: "-100%", opacity: 0 },
      { x: "0%", opacity: 1, duration: 0.8, ease: "power2.out" }
    )
    .fromTo(
      ".personal-content-section--three .images--center .center-right",
      { x: "100%", opacity: 0 },
      { x: "0%", opacity: 1, duration: 0.8, ease: "power2.out" }
    );

  contentSectionThreeTimeline.fromTo(
    ".personal-content-section--three .country--item",
    {
      opacity: 0,
      scale: 0.8,
    },
    {
      opacity: 1,
      scale: 1,
      duration: 0.5,
      ease: "power2.out",
      stagger: 0.2,
    }
  );

  const contentSectionFour = document.querySelector(".personal-content-section--four .image img");

  gsap.fromTo(
    contentSectionFour,
    {
      opacity: 0,
      y: 50,
      scale: 0.8,
    },
    {
      opacity: 1,
      y: 0,
      scale: 1,
      duration: 1,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".personal-content-section--four",
        start: "top center",
        toggleActions: "play none none none",
      },
    }
  );

  const countryItems = document.querySelectorAll(".personal-content-section--five .country--list--item");

  gsap.fromTo(
    countryItems,
    {
      opacity: 0,
      scale: 0.8,
    },
    {
      opacity: 1,
      scale: 1,
      duration: 0.5,
      ease: "power2.out",
      stagger: 0.2,
      scrollTrigger: {
        trigger: ".personal-content-section--five",
        start: "top center",
        toggleActions: "play none none none",
      },
    }
  );

  // Animate the country images horizontally
  const countryImages = document.querySelector(".personal-content-section--five .country-images");
  if (countryImages) {
    gsap.to(countryImages, {
      x: () => `-${countryImages.scrollWidth - window.innerWidth} * 4}px`,
      ease: "none",
      scrollTrigger: {
        trigger: ".personal-content-section--five",
        start: "top center",
        end: "bottom center",
        scrub: 1,
        markers: false,
      },
    });
  }

  const contentSectionSeven = document.querySelector(".personal-content-section--seven .image img");

  gsap.fromTo(
    contentSectionSeven,
    {
      opacity: 0,
      y: 50,
      scale: 0.8,
    },
    {
      opacity: 1,
      y: 0,
      scale: 1,
      duration: 1,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".personal-content-section--seven",
        start: "top center",
        toggleActions: "play none none none",
      },
    }
  );

  const contentSectionEight = document.querySelector(".personal-content-section--eight .image img");

  gsap.fromTo(
    contentSectionEight,
    {
      opacity: 0,
      y: 50,
      scale: 0.8,
    },
    {
      opacity: 1,
      y: 0,
      scale: 1,
      duration: 1,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".personal-content-section--eight",
        start: "top center",
        toggleActions: "play none none none",
      },
    }
  );
  // End: Personal page
});

