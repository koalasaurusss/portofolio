// Custom Cursor Inertia Tracking (Desktop only)
const cur = document.getElementById('cursor');
const ring = document.getElementById('cursorRing');
let mx = 0, my = 0, rx = 0, ry = 0;

if (cur && ring) {
    document.addEventListener('mousemove', e => {
        mx = e.clientX;
        my = e.clientY;
        cur.style.left = mx + 'px';
        cur.style.top = my + 'px';
    });

    document.addEventListener('touchmove', e => {
        if (e.touches && e.touches[0]) {
            mx = e.touches[0].clientX;
            my = e.touches[0].clientY;
            cur.style.left = mx + 'px';
            cur.style.top = my + 'px';
        }
    }, { passive: true });

    document.addEventListener('touchstart', e => {
        if (e.touches && e.touches[0]) {
            mx = e.touches[0].clientX;
            my = e.touches[0].clientY;
            cur.style.left = mx + 'px';
            cur.style.top = my + 'px';
        }
    }, { passive: true });

    function animRing() {
        rx += (mx - rx) * 0.12;
        ry += (my - ry) * 0.12;
        ring.style.left = rx + 'px';
        ring.style.top = ry + 'px';
        requestAnimationFrame(animRing);
    }
    animRing();
}

// Scroll — Back to Top button show/hide
window.addEventListener('scroll', () => {
    const bt = document.getElementById('backTop');
    if (bt) {
        if (window.scrollY > 400) {
            bt.classList.remove('translate-y-24', 'opacity-0', 'pointer-events-none', 'scale-90');
            bt.classList.add('translate-y-0', 'opacity-100', 'pointer-events-auto', 'scale-100');
        } else {
            bt.classList.add('translate-y-24', 'opacity-0', 'pointer-events-none', 'scale-90');
            bt.classList.remove('translate-y-0', 'opacity-100', 'pointer-events-auto', 'scale-100');
        }
    }
});

// Intersection Observer for fade-up animations and skill progress bars
const obs = new IntersectionObserver(entries => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('visible');
            if (e.target.classList.contains('skill-category') || e.target.closest('.skill-category')) {
                const categoryEl = e.target.closest('.skill-category') || e.target;
                categoryEl.querySelectorAll('.skill-fill').forEach(f => {
                    f.style.width = f.dataset.w + '%';
                });
            }
        }
    });
}, { threshold: 0.05 });

document.querySelectorAll('.fade-up').forEach(el => obs.observe(el));
document.querySelectorAll('.skill-category').forEach(el => obs.observe(el));

// Project category filtering
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.filter-btn').forEach(b => {
            b.classList.remove('active', 'text-primary', 'bg-surface', 'shadow');
            b.classList.add('text-on-surface-variant', 'hover:text-on-surface');
        });
        btn.classList.add('active', 'text-primary', 'bg-surface', 'shadow');
        btn.classList.remove('text-on-surface-variant', 'hover:text-on-surface');
        
        const cat = btn.dataset.cat;
        document.querySelectorAll('.project-card').forEach(card => {
            const show = cat === 'all' || card.dataset.cat === cat;
            if (show) {
                card.style.display = '';
                // Make sure it remains visible in scroll observer
                card.classList.add('visible');
            } else {
                card.style.display = 'none';
            }
        });
    });
});

// Contact Form Submit Handler
function handleSubmit() {
    const n = document.getElementById('fname').value.trim();
    const e = document.getElementById('femail').value.trim();
    const s = document.getElementById('fsubject').value.trim();
    const m = document.getElementById('fmessage').value.trim();
    
    if (!n || !e) {
        alert('Please fill in your name and email first.');
        return;
    }
    
    const toast = document.getElementById('toast');
    if (toast) {
        toast.classList.remove('translate-y-24', 'opacity-0', 'pointer-events-none');
        toast.classList.add('translate-y-0', 'opacity-100', 'pointer-events-auto');
        setTimeout(() => {
            toast.classList.add('translate-y-24', 'opacity-0', 'pointer-events-none');
            toast.classList.remove('translate-y-0', 'opacity-100', 'pointer-events-auto');
        }, 4000);
    }
    
    document.getElementById('fname').value = '';
    document.getElementById('femail').value = '';
    document.getElementById('fsubject').value = '';
    document.getElementById('fmessage').value = '';
}

// Trigger skill bars on load fallback (if already visible in viewport)
setTimeout(() => {
    document.querySelectorAll('.skill-fill').forEach(f => {
        if (f.getBoundingClientRect().top < window.innerHeight) {
            f.style.width = f.dataset.w + '%';
        }
    });
}, 400);

// ====================================================
// Theme Switcher Sync (Desktop & Mobile)
// ====================================================
(function() {
    const html = document.documentElement;
    const themeToggle = document.getElementById('themeToggle');
    const themeToggleMobile = document.getElementById('themeToggleMobile');
    const themeIcon = document.getElementById('themeIcon');
    const themeIconMobile = document.getElementById('themeIconMobile');

    function applyTheme(theme) {
        if (theme === 'light') {
            html.classList.remove('dark');
            if (themeIcon) themeIcon.textContent = 'light_mode';
            if (themeIconMobile) themeIconMobile.textContent = 'light_mode';
        } else {
            html.classList.add('dark');
            if (themeIcon) themeIcon.textContent = 'dark_mode';
            if (themeIconMobile) themeIconMobile.textContent = 'dark_mode';
        }
    }

    // Set initial theme state
    const savedTheme = localStorage.getItem('theme') || 'dark';
    applyTheme(savedTheme);

    function toggleTheme() {
        const isDark = html.classList.contains('dark');
        const nextTheme = isDark ? 'light' : 'dark';
        localStorage.setItem('theme', nextTheme);
        applyTheme(nextTheme);
    }

    if (themeToggle) themeToggle.addEventListener('click', toggleTheme);
    if (themeToggleMobile) themeToggleMobile.addEventListener('click', toggleTheme);
})();

// ====================================================
// Collapsible Mobile Menu Navigation
// ====================================================
(function() {
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');

    if (mobileMenuBtn && mobileMenu && menuIcon) {
        mobileMenuBtn.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.contains('menu-open');
            if (isOpen) {
                mobileMenu.classList.remove('menu-open');
                mobileMenu.style.maxHeight = '0px';
                menuIcon.textContent = 'menu';
            } else {
                mobileMenu.classList.add('menu-open');
                mobileMenu.style.maxHeight = '420px';
                menuIcon.textContent = 'close';
            }
        });

        // Auto close mobile list on item click
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('menu-open');
                mobileMenu.style.maxHeight = '0px';
                menuIcon.textContent = 'menu';
            });
        });
    }
})();

// ====================================================
// GOOGLE TRANSLATE — Searchable Multi-language Selection
// ====================================================
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en',
        includedLanguages: 'id,zh-CN,zh-TW,ja,ko,ru,th,ar,hi,fr,de,es,pt,it,nl,tr,vi,ms,pl,uk,sv',
        autoDisplay: false
    }, 'google_translate_element');
}

(function() {
    const dropdown = document.getElementById('langDropdown');
    const btn = document.getElementById('langBtn');
    const btnMobile = document.getElementById('langBtnMobile');
    const search = document.getElementById('langSearch');
    const langList = document.getElementById('langList');
    const flagEl = document.getElementById('langFlag');
    const nameEl = document.getElementById('langName');
    const flagElMobile = document.getElementById('langFlagMobile');
    const nameElMobile = document.getElementById('langNameMobile');

    if (!dropdown || !langList) return;

    // Toggle dropdown (Desktop)
    if (btn) {
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleDropdown();
        });
    }

    // Toggle dropdown (Mobile button maps to the same shared element)
    if (btnMobile) {
        btnMobile.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleDropdown();
        });
    }

    function toggleDropdown() {
        const isOpen = dropdown.classList.contains('pointer-events-auto');
        if (isOpen) {
            closeDropdown();
        } else {
            dropdown.classList.remove('opacity-0', 'pointer-events-none', 'scale-95');
            dropdown.classList.add('opacity-100', 'pointer-events-auto', 'scale-100');
            setTimeout(() => search.focus(), 150);
        }
    }

    function closeDropdown() {
        dropdown.classList.add('opacity-0', 'pointer-events-none', 'scale-95');
        dropdown.classList.remove('opacity-100', 'pointer-events-auto', 'scale-100');
        search.value = '';
        filterLangs('');
    }

    // Close on click outside
    document.addEventListener('click', (e) => {
        if (!dropdown.contains(e.target) && (!btn || !btn.contains(e.target)) && (!btnMobile || !btnMobile.contains(e.target))) {
            closeDropdown();
        }
    });

    // Language Search Filters
    search.addEventListener('input', () => {
        filterLangs(search.value.toLowerCase().trim());
    });

    function filterLangs(query) {
        langList.querySelectorAll('.lang-option').forEach(opt => {
            const text = opt.textContent.toLowerCase();
            opt.classList.toggle('hidden', query && !text.includes(query));
        });
    }

    // Select Language Option
    langList.addEventListener('click', (e) => {
        const opt = e.target.closest('.lang-option');
        if (!opt) return;

        const lang = opt.dataset.lang;
        const flag = opt.dataset.flag;
        const name = opt.dataset.name;

        // Reset all states
        langList.querySelectorAll('.lang-option').forEach(o => o.classList.remove('active', 'text-primary'));
        opt.classList.add('active', 'text-primary');

        // Sync desktop indicators
        if (flagEl) flagEl.textContent = flag;
        if (nameEl) nameEl.textContent = name;
        
        // Sync mobile indicators
        if (flagElMobile) flagElMobile.textContent = flag;
        if (nameElMobile) nameElMobile.textContent = name;

        closeDropdown();

        // Fire Google Translation
        if (lang === '') {
            resetTranslation();
        } else {
            triggerGoogleTranslate(lang);
        }
    });

    function triggerGoogleTranslate(lang) {
        const maxAttempts = 30;
        let attempts = 0;

        function tryTranslate() {
            const select = document.querySelector('.goog-te-combo');
            if (select) {
                select.value = lang;
                select.dispatchEvent(new Event('change'));
            } else if (attempts < maxAttempts) {
                attempts++;
                setTimeout(tryTranslate, 200);
            }
        }
        tryTranslate();
    }

    function resetTranslation() {
        document.cookie = 'googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=.' + window.location.hostname;

        const frame = document.querySelector('.goog-te-banner-frame');
        if (frame) {
            const innerDoc = frame.contentDocument || frame.contentWindow.document;
            const restoreBtn = innerDoc.querySelector('.goog-close-link');
            if (restoreBtn) {
                restoreBtn.click();
                return;
            }
        }
        window.location.reload();
    }

    // Escape keyboard key to dismiss
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeDropdown();
    });

    // Continuously hide legacy Google Translate panel header bars
    const hideGoogleBar = () => {
        document.querySelectorAll('.goog-te-banner-frame').forEach(f => f.style.display = 'none');
        document.body.style.top = '0px';
        document.querySelectorAll('.skiptranslate').forEach(s => {
            if (s.tagName !== 'DIV' || !s.querySelector('#google_translate_element')) {
                s.style.display = 'none';
            }
        });
    };

    setInterval(hideGoogleBar, 500);
    new MutationObserver(hideGoogleBar).observe(document.body, { attributes: true, attributeFilter: ['style', 'class'] });
})();
