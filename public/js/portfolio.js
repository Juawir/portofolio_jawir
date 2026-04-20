/* ============================================
   PORTFOLIO - JAVASCRIPT
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {
    initNavbar();
    initParticles();
    initScrollAnimations();
    initTypingEffect();
    initCountUp();
    initThemeToggle();
    initLanguageSwitcher();
});

/* --- Navbar --- */
function initNavbar() {
    const navbar = document.getElementById('navbar');
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', () => {
            navToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });

        document.addEventListener('click', (e) => {
            if (!navToggle.contains(e.target) && !navMenu.contains(e.target)) {
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
            }
        });
    }
}

/* --- Theme Toggle --- */
function initThemeToggle() {
    const toggle = document.getElementById('themeToggle');
    const icon = document.getElementById('themeIcon');
    const saved = localStorage.getItem('theme') || 'dark';

    applyTheme(saved);

    if (toggle) {
        toggle.addEventListener('click', () => {
            const current = document.body.getAttribute('data-theme');
            const next = current === 'dark' ? 'light' : 'dark';
            applyTheme(next);
            localStorage.setItem('theme', next);
        });
    }
}

function applyTheme(theme) {
    document.body.setAttribute('data-theme', theme);
    const icon = document.getElementById('themeIcon');
    if (icon) {
        icon.className = theme === 'dark' ? 'fas fa-moon' : 'fas fa-sun';
    }
}

/* --- Language Switcher --- */
function initLanguageSwitcher() {
    const toggle = document.getElementById('langToggle');
    const dropdown = document.getElementById('langDropdown');
    const options = document.querySelectorAll('.lang-option');
    const saved = localStorage.getItem('lang') || 'id';

    applyLanguage(saved);

    if (toggle && dropdown) {
        toggle.addEventListener('click', (e) => {
            e.stopPropagation();
            dropdown.classList.toggle('show');
        });

        document.addEventListener('click', (e) => {
            if (!dropdown.contains(e.target) && !toggle.contains(e.target)) {
                dropdown.classList.remove('show');
            }
        });
    }

    options.forEach(opt => {
        opt.addEventListener('click', () => {
            const lang = opt.getAttribute('data-lang');
            applyLanguage(lang);
            localStorage.setItem('lang', lang);
            dropdown.classList.remove('show');
        });
    });
}

function applyLanguage(lang) {
    // Update current display
    const langCurrent = document.getElementById('langCurrent');
    if (langCurrent) {
        langCurrent.textContent = lang.toUpperCase();
    }

    // Update active state
    document.querySelectorAll('.lang-option').forEach(opt => {
        opt.classList.toggle('active', opt.getAttribute('data-lang') === lang);
    });

    // Set direction for Arabic
    const html = document.documentElement;
    if (lang === 'ar') {
        html.setAttribute('dir', 'rtl');
        html.setAttribute('lang', 'ar');
        document.body.style.fontFamily = "'Noto Sans Arabic', 'Inter', sans-serif";
    } else {
        html.setAttribute('dir', 'ltr');
        html.setAttribute('lang', lang);
        document.body.style.fontFamily = "'Inter', sans-serif";
    }

    // Translate all elements with data-i18n
    document.querySelectorAll('[data-i18n]').forEach(el => {
        const key = el.getAttribute('data-i18n');
        if (window.i18n && window.i18n[key] && window.i18n[key][lang]) {
            // Decide if it's input placeholder or text content
            if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
                el.placeholder = window.i18n[key][lang];
            } else {
                el.textContent = window.i18n[key][lang];
            }
        }
    });

    // Translate elements with data-i18n-html (preserve inner HTML icons)
    document.querySelectorAll('[data-i18n-html]').forEach(el => {
        const key = el.getAttribute('data-i18n-html');
        if (window.i18n && window.i18n[key] && window.i18n[key][lang]) {
            // Find text node or span to replace
            const icon = el.querySelector('i, .badge-icon');
            if (icon) {
                el.innerHTML = '';
                el.appendChild(icon.cloneNode(true));
                el.appendChild(document.createTextNode(' ' + window.i18n[key][lang]));
            } else {
                el.textContent = window.i18n[key][lang];
            }
        }
    });

    // Translate data-lang-* attributes (multi-lang content from server)
    document.querySelectorAll('[data-lang-id]').forEach(el => {
        const text = el.getAttribute('data-lang-' + lang);
        if (text) {
            if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
                el.placeholder = text;
            } else {
                el.textContent = text;
            }
        }
    });

    // Store current language globally
    window.currentLang = lang;
}

/* --- Particles Background --- */
function initParticles() {
    const container = document.getElementById('particles');
    if (!container) return;

    const particleCount = 30;
    const colors = ['#6366f1', '#8b5cf6', '#06b6d4', '#818cf8'];

    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.classList.add('particle');

        const size = Math.random() * 6 + 2;
        const x = Math.random() * 100;
        const duration = Math.random() * 20 + 15;
        const delay = Math.random() * 20;
        const color = colors[Math.floor(Math.random() * colors.length)];

        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;
        particle.style.left = `${x}%`;
        particle.style.background = color;
        particle.style.animationDuration = `${duration}s`;
        particle.style.animationDelay = `${delay}s`;

        container.appendChild(particle);
    }
}

/* --- Scroll Animations --- */
function initScrollAnimations() {
    const elements = document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right');
    if (!elements.length) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    elements.forEach(el => observer.observe(el));
}

/* --- Typing Effect --- */
function initTypingEffect() {
    const typedElement = document.querySelector('.typed-text');
    if (!typedElement) return;

    const texts = [
        'Web Developer',
        'Mobile Developer',
        'Android Developer',
        'UI/UX Enthusiast'
    ];

    let textIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    let typeSpeed = 100;

    function type() {
        const currentText = texts[textIndex];

        if (isDeleting) {
            typedElement.textContent = currentText.substring(0, charIndex - 1);
            charIndex--;
            typeSpeed = 50;
        } else {
            typedElement.textContent = currentText.substring(0, charIndex + 1);
            charIndex++;
            typeSpeed = 100;
        }

        if (!isDeleting && charIndex === currentText.length) {
            typeSpeed = 2000;
            isDeleting = true;
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            textIndex = (textIndex + 1) % texts.length;
            typeSpeed = 500;
        }

        setTimeout(type, typeSpeed);
    }

    type();
}

/* --- Count Up Animation --- */
function initCountUp() {
    const statNumbers = document.querySelectorAll('.stat-number');
    if (!statNumbers.length) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                const finalValue = target.getAttribute('data-count');
                const suffix = target.getAttribute('data-suffix') || '';
                const prefix = target.getAttribute('data-prefix') || '';
                animateCount(target, 0, parseInt(finalValue), 2000, prefix, suffix);
                observer.unobserve(target);
            }
        });
    }, { threshold: 0.5 });

    statNumbers.forEach(el => observer.observe(el));
}

function animateCount(element, start, end, duration, prefix, suffix) {
    const startTime = performance.now();

    function update(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const easeProgress = 1 - Math.pow(1 - progress, 3);
        const current = Math.floor(start + (end - start) * easeProgress);

        element.textContent = prefix + current + suffix;

        if (progress < 1) {
            requestAnimationFrame(update);
        }
    }

    requestAnimationFrame(update);
}

/* --- Project Filter --- */
function filterProjects(category, btn) {
    const cards = document.querySelectorAll('.project-card');
    const buttons = document.querySelectorAll('.filter-btn');

    buttons.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    cards.forEach(card => {
        const cardCategory = card.getAttribute('data-category');
        if (category === 'all' || cardCategory === category) {
            card.style.display = 'block';
            card.style.animation = 'fadeInUp 0.5s ease';
        } else {
            card.style.display = 'none';
        }
    });
}

/* --- Contact Form --- */
function handleContactForm(event, targetEmail) {
    event.preventDefault();
    const form = event.target;
    const submitBtn = form.querySelector('.btn-submit');
    const originalHTML = submitBtn.innerHTML;
    const lang = window.currentLang || 'id';

    // Ambil data form
    const name = form.querySelector('#name').value || '';
    const subject = form.querySelector('#subject').value || '';
    const message = form.querySelector('#message').value || '';

    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> ...';
    submitBtn.disabled = true;

    // Buka aplikasi pengirim Email sejati (Mailto)
    const bodyText = `Halo SG,\n\nNama saya ${name}.\n\n${message}`;
    window.location.href = `mailto:${targetEmail}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(bodyText)}`;

    setTimeout(() => {
        const alertDiv = document.createElement('div');
        alertDiv.className = 'alert alert-success';
        const msg = window.i18n['contact.success'] ? window.i18n['contact.success'][lang] : 'Anda akan diarahkan ke aplikasi Email untuk mengirim pesan!';
        alertDiv.innerHTML = '<i class="fas fa-check-circle"></i> ' + msg;

        form.insertBefore(alertDiv, form.firstChild);
        form.reset();

        submitBtn.innerHTML = originalHTML;
        submitBtn.disabled = false;

        setTimeout(() => alertDiv.remove(), 5000);
    }, 1500);
}
