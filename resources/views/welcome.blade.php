<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Andika Dicky Sanjaya — Video Editor & Creative Digital</title>
<meta name="description" content="Portfolio Andika Dicky Sanjaya — Video Editor & Creative Digital. Turning ideas into compelling visual stories through editing, design, and web development.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>

<div class="cursor" id="cursor"></div>
<div class="cursor-ring" id="cursorRing"></div>

{{-- GOOGLE TRANSLATE (hidden) --}}
<div id="google_translate_element" style="display:none;"></div>

{{-- NAV --}}
<nav id="navbar">
  <div class="nav-logo">AD<span>.</span>S</div>
  <ul class="nav-links">
    <li><a href="#about">About</a></li>
    <li><a href="#skills">Skills</a></li>
    <li><a href="#experience">Experience</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#certs">Certificates</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
  <div class="nav-right">
    <div class="lang-switcher" id="langSwitcher">
      <button class="lang-btn" id="langBtn" aria-label="Change Language">
        <span class="lang-flag" id="langFlag">🌐</span>
        <span class="lang-name" id="langName">EN</span>
        <span class="lang-arrow">▾</span>
      </button>
      <div class="lang-dropdown" id="langDropdown">
        <div class="lang-search-wrap">
          <input type="text" class="lang-search" id="langSearch" placeholder="Search language..." autocomplete="off">
        </div>
        <div class="lang-list" id="langList">
          <button class="lang-option active" data-lang="" data-flag="🇬🇧" data-name="EN">🇬🇧 English</button>
          <button class="lang-option" data-lang="id" data-flag="🇮🇩" data-name="ID">🇮🇩 Indonesian</button>
          <button class="lang-option" data-lang="zh-CN" data-flag="🇨🇳" data-name="中文">🇨🇳 Chinese (Simplified)</button>
          <button class="lang-option" data-lang="zh-TW" data-flag="🇹🇼" data-name="繁中">🇹🇼 Chinese (Traditional)</button>
          <button class="lang-option" data-lang="ja" data-flag="🇯🇵" data-name="日本">🇯🇵 Japanese</button>
          <button class="lang-option" data-lang="ko" data-flag="🇰🇷" data-name="한국">🇰🇷 Korean</button>
          <button class="lang-option" data-lang="ru" data-flag="🇷🇺" data-name="РУ">🇷🇺 Russian</button>
          <button class="lang-option" data-lang="th" data-flag="🇹🇭" data-name="ไทย">🇹🇭 Thai</button>
          <button class="lang-option" data-lang="ar" data-flag="🇸🇦" data-name="عربي">🇸🇦 Arabic</button>
          <button class="lang-option" data-lang="hi" data-flag="🇮🇳" data-name="हिन्दी">🇮🇳 Hindi</button>
          <button class="lang-option" data-lang="fr" data-flag="🇫🇷" data-name="FR">🇫🇷 French</button>
          <button class="lang-option" data-lang="de" data-flag="🇩🇪" data-name="DE">🇩🇪 German</button>
          <button class="lang-option" data-lang="es" data-flag="🇪🇸" data-name="ES">🇪🇸 Spanish</button>
          <button class="lang-option" data-lang="pt" data-flag="🇧🇷" data-name="PT">🇧🇷 Portuguese</button>
          <button class="lang-option" data-lang="it" data-flag="🇮🇹" data-name="IT">🇮🇹 Italian</button>
          <button class="lang-option" data-lang="nl" data-flag="🇳🇱" data-name="NL">🇳🇱 Dutch</button>
          <button class="lang-option" data-lang="tr" data-flag="🇹🇷" data-name="TR">🇹🇷 Turkish</button>
          <button class="lang-option" data-lang="vi" data-flag="🇻🇳" data-name="VI">🇻🇳 Vietnamese</button>
          <button class="lang-option" data-lang="ms" data-flag="🇲🇾" data-name="MS">🇲🇾 Malay</button>
          <button class="lang-option" data-lang="pl" data-flag="🇵🇱" data-name="PL">🇵🇱 Polish</button>
          <button class="lang-option" data-lang="uk" data-flag="🇺🇦" data-name="УК">🇺🇦 Ukrainian</button>
          <button class="lang-option" data-lang="sv" data-flag="🇸🇪" data-name="SV">🇸🇪 Swedish</button>
        </div>
      </div>
    </div>
    <a href="#contact" class="nav-cta">Hire Me</a>
  </div>
</nav>

{{-- HERO --}}
<section class="hero" id="home">
  <div class="hero-bg"></div>
  <div class="hero-grid"></div>
  <div class="hero-content">
    <div class="hero-badge">Available for new projects</div>
    <h1>Andika Dicky<br><span class="line2">Sanjaya</span><br><span class="grad">Video Editor & Creative Digital</span></h1>
    <p class="hero-desc">Turning ideas into compelling visual stories through editing, design, and web development. Digital creator & web developer from Pontianak, West Kalimantan.</p>
    <div class="hero-actions">
      <a href="#projects" class="btn-primary">View Work ↓</a>
      <a href="#contact" class="btn-outline">Contact Me →</a>
    </div>
    <div class="hero-stats">
      <div><div class="stat-num">2+</div><div class="stat-label">Internship Experience</div></div>
      <div><div class="stat-num">5+</div><div class="stat-label">Areas of Expertise</div></div>
      <div><div class="stat-num">3</div><div class="stat-label">Years of Learning</div></div>
    </div>
  </div>
  <div class="hero-visual">
    <div style="position:relative;display:flex;align-items:center;justify-content:center;width:100%;height:100%;">
      <div class="hero-avatar-ring">
        <div class="ring-dot"></div>
        <div class="hero-avatar-inner">🎬</div>
      </div>
    </div>
  </div>
</section>

{{-- ABOUT --}}
<section id="about">
  <div class="section-label">About Me</div>
  <div class="about-grid">
    <div class="about-text fade-up">
      <h2 class="section-title">Andika Dicky Sanjaya</h2>
      <p>I am a digital creator and web developer with a strong passion for visual content and technology. My journey began at SMK Karya Bangsa Sintang majoring in Software Engineering, where I honed my skills in video editing, graphic design, and web development.</p>
      <p>My internship experience at DNA Indonesia (PT Digital Niaga Aksesindo) as a Video Editor and at RRI (Radio Republik Indonesia) in the New Media Content division as a Graphic Designer gave me deep insights into how the creative industry works professionally.</p>
      <p>I believe that great creativity must be supported by solid execution and a deep understanding of audience needs. I am currently open to job opportunities, freelance projects, and creative collaborations.</p>
      <div class="about-highlights">
        <div class="highlight-item"><div class="h-icon">🎓</div> SMK Karya Bangsa Sintang — Software Engineering (2023–2026)</div>
        <div class="highlight-item"><div class="h-icon">📍</div> Pontianak, West Kalimantan, Indonesia</div>
        <div class="highlight-item"><div class="h-icon">🚀</div> Open to freelance & collaboration</div>
        <div class="highlight-item"><div class="h-icon">💡</div> Fast learner & team player</div>
      </div>
    </div>
    <div class="about-cards fade-up">
      <div class="about-card"><div class="about-card-icon">🎬</div><h4>Video Editing & Production</h4><p>Editing and producing video content for various digital platforms, adjusting visuals, transitions, and audio to match brand identity.</p></div>
      <div class="about-card"><div class="about-card-icon">🎨</div><h4>Graphic Design & Videography</h4><p>Designing posters, visual materials for social media publications, and producing video content for platforms like Instagram, YouTube, and Facebook.</p></div>
      <div class="about-card"><div class="about-card-icon">💻</div><h4>Web Development & Copywriting</h4><p>Building responsive websites with HTML, CSS, JavaScript, and writing effective copy for digital needs.</p></div>
    </div>
  </div>
</section>

{{-- SKILLS --}}
<section class="skills-bg" id="skills">
  <div class="section-label">Skills</div>
  <h2 class="section-title fade-up">Tech & Creative Stack</h2>
  <p class="section-sub fade-up">Tools and technologies I use in my daily creative work.</p>
  <div class="skills-grid">
    @php
    $skillCategories = [
      ['icon'=>'🎬','title'=>'Video Editing & Production','skills'=>[['Adobe Premiere Pro',88],['After Effects',75],['CapCut Pro',92],['DaVinci Resolve',65]]],
      ['icon'=>'📹','title'=>'Videography','skills'=>[['Shooting & Framing',85],['Lighting Setup',72],['Storyboarding',78],['Color Grading',80]]],
      ['icon'=>'🎨','title'=>'Graphic Design','skills'=>[['Adobe Photoshop',82],['Adobe Illustrator',70],['Canva',95],['Figma',72]]],
      ['icon'=>'💻','title'=>'Web Design & Development','skills'=>[['HTML & CSS',90],['JavaScript',72],['Laravel / PHP',75],['WordPress',80]]],
      ['icon'=>'✍️','title'=>'Copywriting & Others','skills'=>[['Copywriting',78],['Content Strategy',80],['Photography',75],['Project Management',68]]],
    ];
    @endphp
    @foreach($skillCategories as $cat)
    <div class="skill-category fade-up">
      <div class="skill-cat-header"><div class="skill-cat-icon">{{ $cat['icon'] }}</div><div class="skill-cat-title">{{ $cat['title'] }}</div></div>
      <div class="skill-items">
        @foreach($cat['skills'] as $skill)
        <div class="skill-item"><div class="skill-name-row"><span class="skill-name">{{ $skill[0] }}</span><span class="skill-pct">{{ $skill[1] }}%</span></div><div class="skill-bar"><div class="skill-fill" data-w="{{ $skill[1] }}"></div></div></div>
        @endforeach
      </div>
    </div>
    @endforeach
  </div>
</section>

{{-- EXPERIENCE --}}
<section id="experience">
  <div class="section-label">Experience</div>
  <h2 class="section-title fade-up">Career Journey</h2>
  <p class="section-sub fade-up">Internship experiences that shaped my professional perspective.</p>
  <div class="timeline">
    <div class="exp-item fade-up">
      <div class="exp-dot"></div>
      <div class="exp-card">
        <div class="exp-header"><div class="exp-role">Video Editor</div><div class="exp-badge">Completed</div></div>
        <div class="exp-company">🏢 DNA Indonesia (PT Digital Niaga Aksesindo)</div>
        <div class="exp-period">📅 June 2025 — October 2025 · 5 months · Pontianak</div>
        <p class="exp-desc">Worked as a Video Editor at PT Digital Niaga Aksesindo, directly involved in the digital content production process for agency clients. Edited and produced video content for various digital platforms, adjusted visuals, transitions, and audio to match client brand identity, and collaborated with the creative team from briefing to final delivery.</p>
        <div class="exp-tags"><span class="exp-tag">Video Editing</span><span class="exp-tag">Graphic Design</span><span class="exp-tag">Content Production</span><span class="exp-tag">Brand Identity</span><span class="exp-tag">Color Grading</span></div>
      </div>
    </div>
    <div class="exp-item fade-up">
      <div class="exp-dot"></div>
      <div class="exp-card">
        <div class="exp-header"><div class="exp-role">Graphic Designer — New Media Content Division</div><div class="exp-badge">Completed</div></div>
        <div class="exp-company">📻 Lembaga Penyiaran Publik Radio Republik Indonesia (RRI)</div>
        <div class="exp-period">📅 January 2025 — March 2025 · 3 months · Sintang</div>
        <p class="exp-desc">Responsible for managing and producing visual content for all official RRI social media platforms. Designed posters and visual materials for social media publications, edited and produced video content for platforms like Instagram, YouTube, and Facebook, ensured visual identity consistency and communication tone in line with national public media standards, and supported the team in producing informative, engaging, and timely content.</p>
        <div class="exp-tags"><span class="exp-tag">Design</span><span class="exp-tag">Videography</span><span class="exp-tag">Social Media Content</span><span class="exp-tag">Video Production</span><span class="exp-tag">Visual Identity</span></div>
      </div>
    </div>
    <div class="exp-item fade-up">
      <div class="exp-dot" style="background:var(--teal);box-shadow:0 0 16px rgba(29,233,182,0.5)"></div>
      <div class="exp-card" style="border-color:rgba(29,233,182,0.15)">
        <div class="exp-header"><div class="exp-role">Freelance Creative</div><div class="exp-badge" style="color:var(--teal);background:rgba(29,233,182,0.08);border-color:rgba(29,233,182,0.2)">Active</div></div>
        <div class="exp-company" style="color:var(--teal)">🚀 Independent Projects</div>
        <div class="exp-period">📅 2023 — Present</div>
        <p class="exp-desc">Working on various freelance projects in graphic design, video editing, videography, copywriting, and web development for individuals and small businesses.</p>
        <div class="exp-tags"><span class="exp-tag">Video Editing</span><span class="exp-tag">Graphic Design</span><span class="exp-tag">Web Development</span><span class="exp-tag">Copywriting</span><span class="exp-tag">Videography</span></div>
      </div>
    </div>
  </div>
</section>

{{-- PROJECTS --}}
<section class="projects-bg" id="projects">
  <div class="section-label">Portfolio</div>
  <h2 class="section-title fade-up">Featured Work</h2>
  <p class="section-sub fade-up">A collection of my best projects.</p>
  <div class="project-filter fade-up">
    <button class="filter-btn active" data-cat="all">All</button>
    <button class="filter-btn" data-cat="video">Video</button>
    <button class="filter-btn" data-cat="design">Design</button>
    <button class="filter-btn" data-cat="web">Web</button>
  </div>
  @php
  $projects = [
    ['cat'=>'video','bg'=>'#1a0533,#3d0d6b','icon'=>'🎬','badge'=>'Video','title'=>'Company Profile Video — Local Startup','desc'=>'A 3-minute company profile video for a tech startup in Pontianak with cinematic style and motion graphics.','tools'=>['Premiere Pro','After Effects','Color Grading'],'links'=>[['Watch','primary'],['Details','ghost']]],
    ['cat'=>'design','bg'=>'#0a2a1a,#0d5c35','icon'=>'🎨','badge'=>'Design','title'=>'Brand Identity — Food Business','desc'=>'Complete brand identity design package for a local food business — logo, palette, business cards, and brand guidelines.','tools'=>['Illustrator','Photoshop','Figma'],'links'=>[['View','primary'],['Details','ghost']]],
    ['cat'=>'web','bg'=>'#0a1a33,#0d3b6b','icon'=>'💻','badge'=>'Web','title'=>'Product Landing Page — Skincare Brand','desc'=>'Responsive landing page for a local skincare brand with smooth animations, product gallery, and order form.','tools'=>['HTML','CSS','JavaScript'],'links'=>[['Live Demo','primary'],['GitHub','ghost']]],
    ['cat'=>'video','bg'=>'#33100a,#6b250d','icon'=>'🎥','badge'=>'Video','title'=>'Short Film — Cultural Documentary','desc'=>'A short documentary about Dayak culture in West Kalimantan, produced for a provincial-level competition.','tools'=>['Premiere Pro','DaVinci','Documentary'],'links'=>[['Watch','primary'],['Details','ghost']]],
    ['cat'=>'design','bg'=>'#1a1a0a,#3d3d0d','icon'=>'📸','badge'=>'Design','title'=>'Social Media Kit — Event Organizer','desc'=>'Social media content design package (Instagram, TikTok) for a local event organizer featuring 30+ ready-to-use templates.','tools'=>['Canva Pro','Photoshop','Figma'],'links'=>[['View','primary'],['Details','ghost']]],
    ['cat'=>'web','bg'=>'#0a1520,#0d3048','icon'=>'🌐','badge'=>'Web','title'=>'Company Website — Online Store','desc'=>'Complete online store website with product catalog, simple shopping cart, and WhatsApp integration.','tools'=>['WordPress','WooCommerce','CSS Custom'],'links'=>[['Live Site','primary'],['Details','ghost']]],
  ];
  @endphp
  <div class="projects-grid" id="projectGrid">
    @foreach($projects as $p)
    <div class="project-card fade-up" data-cat="{{ $p['cat'] }}">
      <div class="project-thumb" style="background:linear-gradient(135deg,{{ $p['bg'] }})">
        <span style="position:relative;z-index:1;">{{ $p['icon'] }}</span>
        <div class="project-cat-badge">{{ $p['badge'] }}</div>
      </div>
      <div class="project-body">
        <div class="project-title">{{ $p['title'] }}</div>
        <p class="project-desc">{{ $p['desc'] }}</p>
        <div class="project-tools">@foreach($p['tools'] as $t)<span class="project-tool">{{ $t }}</span>@endforeach</div>
        <div class="project-links">@foreach($p['links'] as $l)<a href="#" class="project-link {{ $l[1] }}">{{ $l[0] }}</a>@endforeach</div>
      </div>
    </div>
    @endforeach
  </div>
</section>

{{-- CERTIFICATES --}}
<section id="certs">
  <div class="section-label">Certificates</div>
  <h2 class="section-title fade-up">Achievements & Certifications</h2>
  <p class="section-sub fade-up">Various training programs and certifications I have completed.</p>
  @php
  $certs = [
    ['🎬','Video Editing Professional — Adobe','Adobe Systems','2023'],
    ['🎨','Graphic Design Fundamentals','Dicoding Indonesia','2023'],
    ['💻','Web Development Basics','Coding Studio','2023'],
    ['📱','Digital Marketing & Content','Google Skillshop','2024'],
    ['🏆','2nd Place — Creative Video Competition','Communication Agency of West Kalimantan','2023'],
    ['⭐','UI/UX Design Fundamentals','Buildwithangga','2024'],
  ];
  @endphp
  <div class="certs-grid">
    @foreach($certs as $c)
    <div class="cert-card fade-up"><div class="cert-icon">{{ $c[0] }}</div><div class="cert-title">{{ $c[1] }}</div><div class="cert-issuer">{{ $c[2] }}</div><div class="cert-date">{{ $c[3] }}</div></div>
    @endforeach
  </div>
</section>

{{-- TESTIMONIALS --}}
<section class="testimonials-bg" id="testimonials">
  <div class="section-label">Testimonials</div>
  <h2 class="section-title fade-up">What They Say</h2>
  <p class="section-sub fade-up">What people who have worked with me have to say.</p>
  <div class="testi-grid">
    <div class="testi-card fade-up">
      <div class="testi-stars">★★★★★</div>
      <p class="testi-text">Amazing collaboration! The editing results were very professional, on time, and exceeded our expectations. Highly recommended for video branding projects.</p>
      <div class="testi-person"><div class="testi-avatar">A</div><div><div class="testi-name">Ahmad Rizki</div><div class="testi-role">Creative Director — Creative Agency</div></div></div>
    </div>
    <div class="testi-card fade-up">
      <div class="testi-stars">★★★★★</div>
      <p class="testi-text">Very enthusiastic and a fast learner. During the internship at RRI, his contributions to digital content production greatly helped our creative team.</p>
      <div class="testi-person"><div class="testi-avatar" style="background:linear-gradient(135deg,var(--teal),var(--accent))">S</div><div><div class="testi-name">Siti Rahayu</div><div class="testi-role">Head of Digital Division — RRI Pontianak</div></div></div>
    </div>
    <div class="testi-card fade-up">
      <div class="testi-stars">★★★★★</div>
      <p class="testi-text">The logo and brand design truly represented our business perfectly. Affordable pricing but premium quality!</p>
      <div class="testi-person"><div class="testi-avatar" style="background:linear-gradient(135deg,var(--amber),var(--accent2))">D</div><div><div class="testi-name">Dewi Lestari</div><div class="testi-role">Owner — Local Food Business Pontianak</div></div></div>
    </div>
  </div>
</section>

{{-- CONTACT --}}
<section id="contact">
  <div class="section-label">Contact</div>
  <h2 class="section-title fade-up">Let's Collaborate</h2>
  <p class="section-sub fade-up">Have an exciting project? I'm ready to help make it happen!</p>
  <div class="contact-grid">
    <div class="contact-info fade-up">
      <div class="contact-item"><div class="contact-icon-wrap">📧</div><div><div class="contact-item-label">Email</div><div class="contact-item-val">andikadickysanjaya@gmail.com</div></div></div>
      <div class="contact-item"><div class="contact-icon-wrap">📱</div><div><div class="contact-item-label">WhatsApp</div><div class="contact-item-val">+62 812-xxxx-xxxx</div></div></div>
      <div class="contact-item"><div class="contact-icon-wrap">📍</div><div><div class="contact-item-label">Location</div><div class="contact-item-val">Pontianak, West Kalimantan</div></div></div>
      <div style="margin-top:8px">
        <div class="section-label" style="margin-bottom:16px">Find Me</div>
        <div class="contact-socials">
          <a href="#" class="social-btn" title="Instagram">📸</a>
          <a href="#" class="social-btn" title="TikTok">🎵</a>
          <a href="#" class="social-btn" title="YouTube">▶️</a>
          <a href="https://www.linkedin.com/in/andika-dicky-sanjaya-82211a386" target="_blank" class="social-btn" title="LinkedIn">💼</a>
          <a href="#" class="social-btn" title="GitHub">🐙</a>
          <a href="#" class="social-btn" title="Behance">🅱️</a>
        </div>
      </div>
      <a href="#" class="btn-primary" style="display:inline-flex;width:fit-content;margin-top:16px">⬇ Download CV</a>
    </div>
    <div class="contact-form fade-up">
      <div class="form-row">
        <div class="form-group"><label>Full Name</label><input class="form-input" type="text" placeholder="Your name" id="fname"></div>
        <div class="form-group"><label>Email</label><input class="form-input" type="email" placeholder="email@example.com" id="femail"></div>
      </div>
      <div class="form-group"><label>Subject</label><input class="form-input" type="text" placeholder="Message topic" id="fsubject"></div>
      <div class="form-group"><label>Message</label><textarea class="form-input" rows="6" placeholder="Tell me about your project or needs..." id="fmessage"></textarea></div>
      <button class="form-submit" onclick="handleSubmit()">Send Message ✉</button>
    </div>
  </div>
</section>

{{-- FOOTER --}}
<footer>
  <div class="footer-copy">© {{ date('Y') }} <span>Andika Dicky Sanjaya</span> — Crafted with ❤️ in Pontianak</div>
  <div class="footer-copy">Built with Laravel, HTML, CSS & JavaScript</div>
</footer>

<div class="back-top" id="backTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</div>
<div class="toast" id="toast">✅ Message sent! I will contact you soon.</div>

<script src="{{ asset('js/portfolio.js') }}"></script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
