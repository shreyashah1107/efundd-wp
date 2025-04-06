import gsap from "gsap";

export default class Header {
  constructor(el) {
    this.el = el;
    this.hamburger = null;
    this.mobileNav = null;
    this.navItems = null;
    this.init();
  }

  init() {
    this.hamburger = this.el.querySelector("[js-hamburger]");
    this.mobileNav = this.el.querySelector("#mobileNav");
    this.navItems = this.el.querySelectorAll("[js-nav-item]");
    this.hamburger.addEventListener("click", () => this.toggleMobileNav());

    this.makeHeaderSticky();
    this.createNavEventListeners();
  }

  toggleMobileNav() {
    const isOpen = this.hamburger.getAttribute("aria-expanded") === "true";
    isOpen ? this.closeMobileNav() : this.openMobileNav();
  }

  openMobileNav() {
    this.disableBtn(this.hamburger);
    this.hamburger.setAttribute("aria-expanded", true);
    this.mobileNav.classList.add("--expanded");
    this.el.classList.add("--menu-open");
    document.documentElement.classList.add("html-overflow-hidden");
  }

  closeMobileNav() {
    this.disableBtn(this.hamburger);
    this.hamburger.setAttribute("aria-expanded", false);
    this.mobileNav.classList.remove("--expanded");
    this.el.classList.remove("--menu-open");
    document.documentElement.classList.remove("html-overflow-hidden");
  }

  disableBtn(btn) {
    btn.disabled = true;
    setTimeout(() => {
      btn.disabled = false;
    }, 500);
  }

  makeHeaderSticky() {
    window.addEventListener("scroll", (e) => {
      const scrollY = window.scrollY || document.documentElement.scrollTop;
      if (scrollY > 0) {
        this.el.classList.add("--sticky");
        // document.documentElement.style.setProperty("--mobilenav-padding-top", "74px");
      } else {
        this.el.classList.remove("--sticky");
        // document.documentElement.style.setProperty("--mobilenav-padding-top", "var(--header-height)");
      }
    });
  }

  createNavEventListeners() {
    this.navItems.forEach((el) => {
      const submenu = el.querySelector("[js-nav-item-submenu]");
      if (submenu) {
        el.addEventListener("mouseenter", () => this.onMouseEnter(submenu));
        el.addEventListener("mouseleave", () => this.onMouseLeave(submenu));
        const submenuItems = submenu.querySelectorAll("[js-nav-item-submenu-item]");

        submenuItems.forEach((item) => {
          const innermenu = item.querySelector("[js-nav-item-innermenu]");
          if (innermenu) {
            item.addEventListener("mouseenter", () => this.onMouseEnter(innermenu));
            item.addEventListener("mouseleave", () => this.onMouseLeave(innermenu));
          }
        });
      }
    });
  }

  onMouseEnter(submenu) {
    gsap.set(submenu, { css: { display: "block" } });
    gsap.to(submenu, {
      opacity: 1,
      duration: 0.2,
      ease: "power3.out",
    });
  }

  onMouseLeave(submenu) {
    gsap.to(submenu, {
      opacity: 0,
      duration: 0.2,
      ease: "power3.out",
    });
    gsap.set(submenu, { css: { display: "none" }, delay: 0.2 });
  }
}
