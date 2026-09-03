(() => {
    'use strict';

    const body = document.body;
    const header = document.querySelector('.site-header');
    const nav = document.getElementById('primary-nav');
    const navToggle = document.querySelector('.nav-toggle');
    const backToTop = document.querySelector('.back-to-top');
    let activeModal = null;
    let previousFocus = null;
    let scrollFramePending = false;

    const setNavigation = (open) => {
        if (!nav || !navToggle) return;
        nav.classList.toggle('open', open);
        navToggle.setAttribute('aria-expanded', String(open));
        body.classList.toggle('nav-open', open);
    };

    navToggle?.addEventListener('click', () => {
        setNavigation(navToggle.getAttribute('aria-expanded') !== 'true');
    });

    nav?.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => setNavigation(false));
    });

    document.addEventListener('click', (event) => {
        if (nav?.classList.contains('open') && !nav.contains(event.target) && !navToggle?.contains(event.target)) {
            setNavigation(false);
        }
    });

    const updateScrollUI = () => {
        const hasScrolled = window.scrollY > 20;
        header?.classList.toggle('scrolled', hasScrolled);
        backToTop?.classList.toggle('visible', window.scrollY > 650);
    };

    window.addEventListener('scroll', () => {
        if (scrollFramePending) return;
        scrollFramePending = true;
        requestAnimationFrame(() => {
            updateScrollUI();
            scrollFramePending = false;
        });
    }, { passive: true });
    updateScrollUI();

    backToTop?.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    const revealItems = document.querySelectorAll('.reveal');
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (!reduceMotion && 'IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            });
        }, { threshold: 0.08, rootMargin: '0px 0px -24px' });

        revealItems.forEach((item) => {
            if (item.getBoundingClientRect().top < window.innerHeight * 1.08) {
                item.classList.add('is-visible');
            } else {
                revealObserver.observe(item);
            }
        });
    } else {
        revealItems.forEach((item) => item.classList.add('is-visible'));
    }

    const getFocusable = (container) => Array.from(container.querySelectorAll(
        'a[href], button:not([disabled]), input:not([disabled]), select:not([disabled]), textarea:not([disabled]), [tabindex]:not([tabindex="-1"])'
    )).filter((element) => !element.hasAttribute('hidden'));

    const openModal = (modal) => {
        if (!modal) return;
        previousFocus = document.activeElement;
        activeModal = modal;
        modal.hidden = false;
        body.classList.add('modal-open');
        requestAnimationFrame(() => {
            const focusable = getFocusable(modal);
            focusable[0]?.focus();
        });
    };

    const closeModal = () => {
        if (!activeModal) return;
        activeModal.hidden = true;
        body.classList.remove('modal-open');
        activeModal = null;
        previousFocus?.focus();
    };

    document.querySelectorAll('[data-open-modal]').forEach((button) => {
        button.addEventListener('click', () => {
            setNavigation(false);
            openModal(document.getElementById(button.dataset.openModal));
        });
    });

    document.querySelectorAll('[data-close-modal]').forEach((button) => {
        button.addEventListener('click', closeModal);
    });

    document.querySelectorAll('.modal a').forEach((link) => {
        link.addEventListener('click', () => window.setTimeout(closeModal, 120));
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            if (activeModal) closeModal();
            setNavigation(false);
        }

        if (event.key === 'Tab' && activeModal) {
            const focusable = getFocusable(activeModal);
            if (!focusable.length) return;
            const first = focusable[0];
            const last = focusable[focusable.length - 1];
            if (event.shiftKey && document.activeElement === first) {
                event.preventDefault();
                last.focus();
            } else if (!event.shiftKey && document.activeElement === last) {
                event.preventDefault();
                first.focus();
            }
        }
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth > 900) setNavigation(false);
    });

    // Enable enhanced states only after the interaction layer initializes.
    // If this file ever fails to load, content and navigation remain usable.
    document.documentElement.classList.replace('no-js', 'js');
})();
