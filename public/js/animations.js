/**
 * GSAP Animations
 * ForeverBox Initiative
 */

// Register GSAP plugins
if (typeof gsap !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);

    // Smooth scrolling performance
    gsap.config({
        force3D: true
    });

    // Navigation fade in on scroll
    ScrollTrigger.create({
        start: 'top -80',
        end: 99999,
        toggleClass: {
            className: 'nav-scrolled',
            targets: '#main-nav'
        }
    });

    // Parallax effect for hero sections
    const heroSections = document.querySelectorAll('.hero-section');
    heroSections.forEach(section => {
        const bg = section.querySelector('.hero-bg');
        if (bg) {
            gsap.to(bg, {
                yPercent: 30,
                ease: 'none',
                scrollTrigger: {
                    trigger: section,
                    start: 'top top',
                    end: 'bottom top',
                    scrub: true
                }
            });
        }
    });

    // Fade in elements on scroll
    const fadeElements = document.querySelectorAll('.fade-in');
    fadeElements.forEach((element, index) => {
        gsap.from(element, {
            scrollTrigger: {
                trigger: element,
                start: 'top 85%',
                toggleActions: 'play none none none'
            },
            opacity: 0,
            y: 50,
            duration: 1,
            delay: index * 0.1,
            ease: 'power3.out'
        });
    });

    // Slide in from left
    const slideLeftElements = document.querySelectorAll('.slide-left');
    slideLeftElements.forEach(element => {
        gsap.from(element, {
            scrollTrigger: {
                trigger: element,
                start: 'top 85%',
                toggleActions: 'play none none none'
            },
            opacity: 0,
            x: -100,
            duration: 1,
            ease: 'power3.out'
        });
    });

    // Slide in from right
    const slideRightElements = document.querySelectorAll('.slide-right');
    slideRightElements.forEach(element => {
        gsap.from(element, {
            scrollTrigger: {
                trigger: element,
                start: 'top 85%',
                toggleActions: 'play none none none'
            },
            opacity: 0,
            x: 100,
            duration: 1,
            ease: 'power3.out'
        });
    });

    // Scale animation for images
    const scaleImages = document.querySelectorAll('.scale-image');
    scaleImages.forEach(img => {
        gsap.from(img, {
            scrollTrigger: {
                trigger: img,
                start: 'top 85%',
                toggleActions: 'play none none none'
            },
            scale: 0.8,
            opacity: 0,
            duration: 1.2,
            ease: 'power3.out'
        });
    });

    // Stagger animation for lists
    const staggerLists = document.querySelectorAll('.stagger-list');
    staggerLists.forEach(list => {
        const items = list.children;
        gsap.from(items, {
            scrollTrigger: {
                trigger: list,
                start: 'top 85%',
                toggleActions: 'play none none none'
            },
            opacity: 0,
            y: 30,
            duration: 0.8,
            stagger: 0.15,
            ease: 'power3.out'
        });
    });

    // Counter animation
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const target = parseFloat(counter.getAttribute('data-target'));
        const duration = parseFloat(counter.getAttribute('data-duration') || 2);
        
        gsap.from(counter, {
            scrollTrigger: {
                trigger: counter,
                start: 'top 85%',
                toggleActions: 'play none none none'
            },
            textContent: 0,
            duration: duration,
            ease: 'power1.out',
            snap: { textContent: 1 },
            onUpdate: function() {
                counter.textContent = Math.ceil(counter.textContent);
            }
        });
    });

    // Text reveal animation
    const revealTexts = document.querySelectorAll('.reveal-text');
    revealTexts.forEach(text => {
        const words = text.textContent.split(' ');
        text.innerHTML = '';
        words.forEach((word, index) => {
            const span = document.createElement('span');
            span.textContent = word + ' ';
            span.style.display = 'inline-block';
            span.style.opacity = '0';
            text.appendChild(span);
        });
        
        gsap.to(text.children, {
            scrollTrigger: {
                trigger: text,
                start: 'top 85%',
                toggleActions: 'play none none none'
            },
            opacity: 1,
            y: 0,
            duration: 0.6,
            stagger: 0.05,
            ease: 'power3.out'
        });
    });
}

// Intersection Observer for lazy loading
if ('IntersectionObserver' in window) {
    const lazyImages = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                imageObserver.unobserve(img);
            }
        });
    });
    
    lazyImages.forEach(img => imageObserver.observe(img));
}

// Respect reduced motion preferences
if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    // Disable GSAP animations
    if (typeof gsap !== 'undefined') {
        gsap.globalTimeline.clear();
        ScrollTrigger.getAll().forEach(trigger => trigger.kill());
    }
}

// Page load animation
window.addEventListener('load', () => {
    document.body.classList.add('page-loaded');
});
