export default class MobileNav {
  constructor(el) {
    this.el = el;
    this.items = null;
    this.init();
  }

  init() {
    this.items = this.el.querySelectorAll("[js-mobile-nav-item]");
    this.items.forEach((item) => {
      const toggleBtn = item.querySelector("[js-mobile-nav-item-btn]");
      const submenu = item.querySelector("[js-mobile-nav-item-submenu]");
      if (!!toggleBtn && !!submenu) {
        toggleBtn.addEventListener("click", (e) => this.toggleSubmenu(item, toggleBtn, submenu));
      }
    });
  }

  toggleSubmenu(item, btn, submenu) {
    const isOpen = btn.getAttribute("aria-expanded") === "true";

    isOpen ? this.closeSubmenu(item, btn, submenu) : this.openSubmenu(item, btn, submenu);
  }

  openSubmenu(item, btn, submenu) {
    this.disableBtn(btn);
    const siblings = item.parentNode.children;
    this.closeItemsInBatch(siblings);
    btn.setAttribute("aria-expanded", true);
    submenu.classList.add("--expanded");
    item.classList.add("--expanded");
  }

  closeSubmenu(item, btn, submenu) {
    this.disableBtn(btn);
    const children = item.querySelectorAll(".has-children");
    this.closeItemsInBatch(children);
    btn.setAttribute("aria-expanded", false);
    submenu.classList.remove("--expanded");
    item.classList.remove("--expanded");
  }

  closeItemsInBatch(items) {
    for (let el of items) {
      if (el.classList.contains("has-children")) {
        const toggleBtn = el.querySelector("[js-mobile-nav-item-btn]");
        const sub = el.querySelector("[js-mobile-nav-item-submenu]");
        this.closeSubmenu(el, toggleBtn, sub);
      }
    }
  }

  disableBtn(btn) {
    btn.disabled = true;
    setTimeout(() => {
      btn.disabled = false;
    }, 500);
  }
}
