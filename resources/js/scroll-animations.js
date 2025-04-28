// resources/js/scroll-animations.js
document.addEventListener('DOMContentLoaded', () => {
    const groups = document.querySelectorAll('.gallery-group');
    if (!('IntersectionObserver' in window)) {
        // Fallback: mostrarlos todos sin animación
        groups.forEach(g => g.classList.add('in-view'));
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                observer.unobserve(entry.target); // deja de observar una vez visto
            }
        });
    }, {
        root: null,
        rootMargin: '0px 0px -10% 0px', // dispara un poquito antes de entrar totalmente
        threshold: 0
    });

    groups.forEach(g => observer.observe(g));
});