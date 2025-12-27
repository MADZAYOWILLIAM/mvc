// Complete mobile navigation solution
class MobileNavigation {
  constructor() {
    this.burgerMenu = document.querySelector(".burger-menu");
    this.menuIcon = document.querySelector(".menu i");
    this.links = document.querySelector(".links");
    this.navLinks = this.links ? this.links.querySelectorAll("a") : [];
    this.body = document.body;

    this.init();
  }

  init() {
    if (!this.burgerMenu || !this.links) {
      console.warn("Mobile navigation elements not found");
      return;
    }

    this.setupEventListeners();
  }

  setupEventListeners() {
    // Toggle menu on burger click
    this.burgerMenu.addEventListener("click", (e) => {
      e.stopPropagation();
      this.toggleMenu();
    });

    // Close menu when clicking links
    this.navLinks.forEach((link) => {
      link.addEventListener("click", () => this.closeMenu());
    });

    // Close menu when clicking outside
    document.addEventListener("click", (e) => {
      if (
        !this.burgerMenu.contains(e.target) &&
        !this.links.contains(e.target) &&
        this.isMenuOpen()
      ) {
        this.closeMenu();
      }
    });

    // Close menu with Escape key
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && this.isMenuOpen()) {
        this.closeMenu();
      }
    });

    // Close menu on resize
    window.addEventListener("resize", () => {
      if (window.innerWidth > 768 && this.isMenuOpen()) {
        this.closeMenu();
      }
    });
  }

  toggleMenu() {
    if (this.isMenuOpen()) {
      this.closeMenu();
    } else {
      this.openMenu();
    }
  }

  openMenu() {
    this.links.classList.add("active");
    this.updateIcon(true);
    this.body.style.overflow = "hidden";
  }

  closeMenu() {
    this.links.classList.remove("active");
    this.updateIcon(false);
    this.body.style.overflow = "";
  }

  updateIcon(isOpen) {
    if (this.menuIcon) {
      if (isOpen) {
        this.menuIcon.classList.remove("fa-bars");
        this.menuIcon.classList.add("fa-times");
      } else {
        this.menuIcon.classList.remove("fa-times");
        this.menuIcon.classList.add("fa-bars");
      }
    }
  }

  isMenuOpen() {
    return this.links.classList.contains("active");
  }
}

// Initialize when DOM is loaded
document.addEventListener("DOMContentLoaded", () => {
  new MobileNavigation();
});
