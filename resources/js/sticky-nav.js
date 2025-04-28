document.addEventListener('DOMContentLoaded', () => {
    const nav = document.querySelector('.public-nav');
    const main = document.querySelector('main');
    const SCROLL_THRESHOLD = 50;  // píxeles para activar la clase scrolled

    // Función que ajusta el padding-top de <main> igual a la altura actual de la nav
    function syncMainPadding() {
        const navHeight = nav.getBoundingClientRect().height;
        main.style.paddingTop = navHeight + 'px';
    }

    // Al cargar, ajustamos y agregamos scroll y resize
    syncMainPadding();
    window.addEventListener('resize', syncMainPadding);

    window.addEventListener('scroll', () => {
        if (window.scrollY > SCROLL_THRESHOLD) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
        syncMainPadding();
    });
});