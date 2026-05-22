// Custom Cursor
const cur = document.getElementById('cursor');
const ring = document.getElementById('cursorRing');
let mx = 0, my = 0, rx = 0, ry = 0;

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

// Scroll — Back to Top button
window.addEventListener('scroll', () => {
    const bt = document.getElementById('backTop');
    bt.classList.toggle('show', scrollY > 400);
});

// Intersection Observer for fade-up animations
const obs = new IntersectionObserver(entries => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('visible');
            if (e.target.classList.contains('skill-category') || e.target.closest('.skill-category')) {
                document.querySelectorAll('.skill-fill').forEach(f => {
                    f.style.width = f.dataset.w + '%';
                });
            }
        }
    });
}, { threshold: 0.1 });

document.querySelectorAll('.fade-up').forEach(el => obs.observe(el));
document.querySelectorAll('.skill-category').forEach(el => obs.observe(el));

// Project filter
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const cat = btn.dataset.cat;
        document.querySelectorAll('.project-card').forEach(card => {
            const show = cat === 'all' || card.dataset.cat === cat;
            card.style.display = show ? '' : 'none';
        });
    });
});

// Form submit
function handleSubmit() {
    const n = document.getElementById('fname').value;
    const e = document.getElementById('femail').value;
    if (!n || !e) {
        alert('Please fill in your name and email first.');
        return;
    }
    const toast = document.getElementById('toast');
    toast.classList.add('show');
    setTimeout(() => toast.classList.remove('show'), 4000);
    document.getElementById('fname').value = '';
    document.getElementById('femail').value = '';
    document.getElementById('fsubject').value = '';
    document.getElementById('fmessage').value = '';
}

// Trigger skill bars on load if visible
setTimeout(() => {
    document.querySelectorAll('.skill-fill').forEach(f => {
        f.style.width = f.dataset.w + '%';
    });
}, 500);

// ==========================================
// GOOGLE TRANSLATE — Language Switcher
// ==========================================

function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en',
        includedLanguages: 'id,zh-CN,zh-TW,ja,ko,ru,th,ar,hi,fr,de,es,pt,it,nl,tr,vi,ms,pl,uk,sv',
        autoDisplay: false
    }, 'google_translate_element');
}

// Language Switcher UI Logic
(function() {
    const switcher = document.getElementById('langSwitcher');
    const btn = document.getElementById('langBtn');
    const dropdown = document.getElementById('langDropdown');
    const search = document.getElementById('langSearch');
    const langList = document.getElementById('langList');
    const flagEl = document.getElementById('langFlag');
    const nameEl = document.getElementById('langName');

    if (!switcher) return;

    // Toggle dropdown
    btn.addEventListener('click', (e) => {
        e.stopPropagation();
        switcher.classList.toggle('open');
        if (switcher.classList.contains('open')) {
            setTimeout(() => search.focus(), 100);
        }
    });

    // Close on outside click
    document.addEventListener('click', (e) => {
        if (!switcher.contains(e.target)) {
            switcher.classList.remove('open');
            search.value = '';
            filterLangs('');
        }
    });

    // Search filter
    search.addEventListener('input', () => {
        filterLangs(search.value.toLowerCase());
    });

    function filterLangs(query) {
        langList.querySelectorAll('.lang-option').forEach(opt => {
            const text = opt.textContent.toLowerCase();
            opt.classList.toggle('hidden', query && !text.includes(query));
        });
    }

    // Language selection
    langList.addEventListener('click', (e) => {
        const opt = e.target.closest('.lang-option');
        if (!opt) return;

        const lang = opt.dataset.lang;
        const flag = opt.dataset.flag;
        const name = opt.dataset.name;

        // Update UI
        langList.querySelectorAll('.lang-option').forEach(o => o.classList.remove('active'));
        opt.classList.add('active');
        flagEl.textContent = flag;
        nameEl.textContent = name;

        // Close dropdown
        switcher.classList.remove('open');
        search.value = '';
        filterLangs('');

        // Trigger Google Translate
        if (lang === '') {
            // Reset to English (original)
            resetTranslation();
        } else {
            triggerGoogleTranslate(lang);
        }
    });

    function triggerGoogleTranslate(lang) {
        // Wait for Google Translate to be ready
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
        // Remove Google Translate cookie to reset
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
        // Fallback: reload page
        window.location.reload();
    }

    // Keyboard navigation
    btn.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            btn.click();
        }
    });

    // Escape to close
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            switcher.classList.remove('open');
            search.value = '';
            filterLangs('');
        }
    });

    // Continuously hide Google Translate bar
    const hideGoogleBar = () => {
        const frames = document.querySelectorAll('.goog-te-banner-frame');
        frames.forEach(f => f.style.display = 'none');
        document.body.style.top = '0px';
        const skips = document.querySelectorAll('.skiptranslate');
        skips.forEach(s => { if (s.tagName !== 'DIV' || !s.querySelector('#google_translate_element')) s.style.display = 'none'; });
    };

    setInterval(hideGoogleBar, 500);
    new MutationObserver(hideGoogleBar).observe(document.body, { attributes: true, attributeFilter: ['style', 'class'] });
})();
