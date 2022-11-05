
/**
 * 
 */
class CHeader {
    constructor(toggler = ".c-header-toggler", togglable = ".c-header-content") {
        this.toggler = document.querySelector(toggler);
        this.nav = document.querySelector(togglable);
        this.active = false;
    }

    init() {
        if (this.toggler)
            this.setEvent();
    };

    setEvent() {
        this.toggler.addEventListener("click", (event) => {
            event.preventDefault();
            this.showHiddenNav();
        });
    }

    showHiddenNav() {
        this.toggler.classList.toggle("active");
        this.nav.classList.toggle("active");
        if (this.toggler.classList.contains("active"))
            this.active = true;
        else
            this.active = false;

        if (this.active) this.navLinksAnimation();
    }

    navLinksAnimation() {
        let navLinks = this.nav.querySelectorAll(".c-header-nav .c-header-nav-link");

        if (!navLinks) return;
        navLinks.forEach((item, key) => {
            item.style.transitionDelay = (key * .125) + "s";
        });
    }
};

(new CHeader()).init();

