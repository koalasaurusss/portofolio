<!DOCTYPE html>
<html class="dark" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andika Dicky Sanjaya — Video Editor & Creative Digital</title>
  <meta name="description" content="Portfolio Andika Dicky Sanjaya — Video Editor & Creative Digital. Turning ideas into compelling visual stories through editing, design, and web development.">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

  <!-- Tailwind Config -->
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "var(--primary)",
            "on-primary": "var(--on-primary)",
            "primary-container": "var(--primary-container)",
            "on-primary-container": "var(--on-primary-container)",
            "primary-fixed": "var(--primary-fixed)",
            "primary-fixed-dim": "var(--primary-fixed-dim)",
            "on-primary-fixed": "var(--on-primary-fixed)",
            "on-primary-fixed-variant": "var(--on-primary-fixed-variant)",
            
            "secondary": "var(--secondary)",
            "on-secondary": "var(--on-secondary)",
            "secondary-container": "var(--secondary-container)",
            "on-secondary-container": "var(--on-secondary-container)",
            "secondary-fixed": "var(--secondary-fixed)",
            "secondary-fixed-dim": "var(--secondary-fixed-dim)",
            "on-secondary-fixed": "var(--on-secondary-fixed)",
            "on-secondary-fixed-variant": "var(--on-secondary-fixed-variant)",
            
            "tertiary": "var(--tertiary)",
            "on-tertiary": "var(--on-tertiary)",
            "tertiary-container": "var(--tertiary-container)",
            "on-tertiary-container": "var(--on-tertiary-container)",
            "tertiary-fixed": "var(--tertiary-fixed)",
            "tertiary-fixed-dim": "var(--tertiary-fixed-dim)",
            "on-tertiary-fixed": "var(--on-tertiary-fixed)",
            "on-tertiary-fixed-variant": "var(--on-tertiary-fixed-variant)",
            
            "background": "var(--background)",
            "on-background": "var(--on-background)",
            
            "surface": "var(--surface)",
            "on-surface": "var(--on-surface)",
            "surface-variant": "var(--surface-variant)",
            "on-surface-variant": "var(--on-surface-variant)",
            
            "surface-dim": "var(--surface-dim)",
            "surface-bright": "var(--surface-bright)",
            "surface-container-lowest": "var(--surface-container-lowest)",
            "surface-container-low": "var(--surface-container-low)",
            "surface-container": "var(--surface-container)",
            "surface-container-high": "var(--surface-container-high)",
            "surface-container-highest": "var(--surface-container-highest)",
            
            "outline": "var(--outline)",
            "outline-variant": "var(--outline-variant)",
            
            "error": "var(--error)",
            "on-error": "var(--on-error)",
            "error-container": "var(--error-container)",
            "on-error-container": "var(--on-error-container)",
            
            "surface-tint": "var(--surface-tint)",
            "inverse-surface": "var(--inverse-surface)",
            "inverse-on-surface": "var(--inverse-on-surface)",
            "inverse-primary": "var(--inverse-primary)"
          },
          borderRadius: {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
          spacing: {
            "section-gap": "128px",
            "container-max": "1200px",
            "gutter": "32px",
            "unit": "8px",
            "margin-mobile": "24px"
          },
          fontFamily: {
            "body-md": ["Inter", "sans-serif"],
            "caption": ["Inter", "sans-serif"],
            "headline-md": ["Playfair Display", "serif"],
            "label-md": ["Inter", "sans-serif"],
            "display-lg-mobile": ["Playfair Display", "serif"],
            "headline-lg": ["Playfair Display", "serif"],
            "body-lg": ["Inter", "sans-serif"],
            "display-lg": ["Playfair Display", "serif"]
          },
          fontSize: {
            "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
            "caption": ["12px", { "lineHeight": "1.4", "fontWeight": "400" }],
            "headline-md": ["32px", { "lineHeight": "1.3", "fontWeight": "400" }],
            "label-md": ["14px", { "lineHeight": "1.4", "letterSpacing": "0.05em", "fontWeight": "500" }],
            "display-lg-mobile": ["40px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "400" }],
            "headline-lg": ["48px", { "lineHeight": "1.2", "fontWeight": "400" }],
            "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
            "display-lg": ["64px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "400" }]
          }
        }
      }
    };
  </script>

  <!-- Custom CSS for Variables, Animations and Utilities -->
  <style>
    :root {
      /* Dark Theme (Default) */
      --primary: #e9c176;
      --on-primary: #412d00;
      --primary-container: #c5a059;
      --on-primary-container: #4e3700;
      --primary-fixed: #ffdea5;
      --primary-fixed-dim: #e9c176;
      --on-primary-fixed: #261900;
      --on-primary-fixed-variant: #5d4201;

      --secondary: #c8c6c5;
      --on-secondary: #313030;
      --secondary-container: #4a4949;
      --on-secondary-container: #bab8b7;
      --secondary-fixed: #e5e2e1;
      --secondary-fixed-dim: #c8c6c5;
      --on-secondary-fixed: #1c1b1b;
      --on-secondary-fixed-variant: #474646;

      --tertiary: #c8c6c9;
      --on-tertiary: #303033;
      --tertiary-container: #a7a5a8;
      --on-tertiary-container: #3b3b3e;
      --tertiary-fixed: #e4e1e5;
      --tertiary-fixed-dim: #c8c6c9;
      --on-tertiary-fixed: #1b1b1e;
      --on-tertiary-fixed-variant: #47464a;

      --background: #121416;
      --on-background: #e2e2e5;

      --surface: #121416;
      --on-surface: #e2e2e5;
      --surface-variant: #333537;
      --on-surface-variant: #d1c5b4;

      --surface-dim: #121416;
      --surface-bright: #37393c;
      --surface-container-lowest: #0c0e11;
      --surface-container-low: #1a1c1e;
      --surface-container: #1e2022;
      --surface-container-high: #282a2c;
      --surface-container-highest: #333537;

      --outline: #9a8f80;
      --outline-variant: #4e4639;

      --error: #ffb4ab;
      --on-error: #690005;
      --error-container: #93000a;
      --on-error-container: #ffdad6;
      
      --surface-tint: #e9c176;
      --inverse-surface: #e2e2e5;
      --inverse-on-surface: #2f3033;
      --inverse-primary: #775a19;
    }

    html:not(.dark) {
      /* Warm Cream Light Theme */
      --primary: #765a19;
      --on-primary: #ffffff;
      --primary-container: #ffdea5;
      --on-primary-container: #261900;
      --primary-fixed: #ffdea5;
      --primary-fixed-dim: #e9c176;
      --on-primary-fixed: #261900;
      --on-primary-fixed-variant: #5d4201;

      --secondary: #5e5e5d;
      --on-secondary: #ffffff;
      --secondary-container: #e5e2e1;
      --on-secondary-container: #1c1b1b;
      --secondary-fixed: #e5e2e1;
      --secondary-fixed-dim: #c8c6c5;
      --on-secondary-fixed: #1c1b1b;
      --on-secondary-fixed-variant: #474646;

      --tertiary: #5e5e60;
      --on-tertiary: #ffffff;
      --tertiary-container: #e4e1e5;
      --on-tertiary-container: #1b1b1e;
      --tertiary-fixed: #e4e1e5;
      --tertiary-fixed-dim: #c8c6c9;
      --on-tertiary-fixed: #1b1b1e;
      --on-tertiary-fixed-variant: #47464a;

      --background: #faf8f5;
      --on-background: #1a1c1e;

      --surface: #faf8f5;
      --on-surface: #1a1c1e;
      --surface-variant: #ede7dd;
      --on-surface-variant: #4e4639;

      --surface-dim: #dfdbd4;
      --surface-bright: #fdfbf8;
      --surface-container-lowest: #ffffff;
      --surface-container-low: #f5f2eb;
      --surface-container: #efece5;
      --surface-container-high: #e9e6df;
      --surface-container-highest: #e3e0d9;

      --outline: #807668;
      --outline-variant: #c8bdae;

      --error: #ba1a1a;
      --on-error: #ffffff;
      --error-container: #ffdad6;
      --on-error-container: #410002;
      
      --surface-tint: #765a19;
      --inverse-surface: #313033;
      --inverse-on-surface: #f4f0ec;
      --inverse-primary: #e9c176;
    }

    /* Scroll animations */
    .fade-up {
      opacity: 0;
      transform: translateY(24px);
      transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .fade-up.visible {
      opacity: 1;
      transform: translateY(0);
    }
    
    .delay-100 { transition-delay: 100ms; }
    .delay-200 { transition-delay: 200ms; }
    .delay-300 { transition-delay: 300ms; }
    .delay-400 { transition-delay: 400ms; }

    /* Custom scrollbars */
    ::-webkit-scrollbar {
      width: 8px;
      height: 8px;
    }
    ::-webkit-scrollbar-track {
      background: var(--surface-container-lowest);
    }
    ::-webkit-scrollbar-thumb {
      background: var(--outline-variant);
      border-radius: 4px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: var(--outline);
    }

    /* Custom Cursor styling */
    .cursor {
      width: 8px;
      height: 8px;
      background-color: var(--primary);
      border-radius: 50%;
      position: fixed;
      transform: translate(-50%, -50%);
      pointer-events: none;
      z-index: 10000;
      transition: width 0.2s, height 0.2s, background-color 0.2s;
    }
    .cursor-ring {
      width: 40px;
      height: 40px;
      border: 1px solid var(--primary);
      border-radius: 50%;
      position: fixed;
      transform: translate(-50%, -50%);
      pointer-events: none;
      z-index: 9999;
      transition: width 0.3s, height 0.3s, border-color 0.3s;
    }
    @media (max-width: 768px) {
      .cursor, .cursor-ring {
        display: none;
      }
    }

    /* Google Translate element overrides */
    .goog-te-banner-frame {
      display: none !important;
    }
    body {
      top: 0px !important;
    }
    .skiptranslate:not(#google_translate_element) {
      display: none !important;
    }
  </style>
</head>
<body class="bg-background text-on-surface antialiased overflow-x-hidden selection:bg-primary/20 selection:text-primary">

  <!-- Interactive Custom Cursor -->
  <div class="cursor" id="cursor"></div>
  <div class="cursor-ring" id="cursorRing"></div>

  <!-- Google Translate Element (hidden background handler) -->
  <div id="google_translate_element" style="display:none;"></div>

  <!-- TopNavBar -->
  <nav class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-md border-b border-outline-variant transition-opacity duration-300">
    <div class="max-w-[1200px] mx-auto px-margin-mobile md:px-8 h-20 flex justify-between items-center">
      
      <!-- Brand Logo -->
      <a class="font-headline-md text-xl md:text-2xl tracking-tight text-on-surface opacity-80 hover:opacity-100 transition-opacity duration-300 flex items-center gap-1.5" href="#">
        ANDIKA DICKY SANJAYA
      </a>

      <!-- Desktop Links -->
      <div class="hidden lg:flex gap-8 items-center">
        <a class="whitespace-nowrap text-on-surface/75 hover:text-primary font-label-md text-label-md transition-colors duration-300" href="#about">About</a>
        <a class="whitespace-nowrap text-on-surface/75 hover:text-primary font-label-md text-label-md transition-colors duration-300" href="#skills">Skills</a>
        <a class="whitespace-nowrap text-on-surface/75 hover:text-primary font-label-md text-label-md transition-colors duration-300" href="#experience">Experience</a>
        <a class="whitespace-nowrap text-on-surface/75 hover:text-primary font-label-md text-label-md transition-colors duration-300" href="#projects">Projects</a>
        <a class="whitespace-nowrap text-on-surface/75 hover:text-primary font-label-md text-label-md transition-colors duration-300" href="#certs">Certificates</a>
        <a class="whitespace-nowrap text-on-surface/75 hover:text-primary font-label-md text-label-md transition-colors duration-300" href="#contact">Contact</a>
      </div>

      <!-- Action Panel -->
      <div class="hidden md:flex items-center gap-4">
        <!-- Theme Toggle -->
        <button id="themeToggle" class="w-10 h-10 flex items-center justify-center rounded-full border border-outline-variant hover:border-primary text-on-surface hover:text-primary transition-all duration-300 bg-surface-container/30 backdrop-blur-sm" aria-label="Toggle Theme">
          <span class="material-symbols-outlined text-lg leading-none notranslate" id="themeIcon">dark_mode</span>
        </button>

        <!-- Searchable Google Translate Dropdown Switcher -->
        <div class="relative" id="langSwitcher">
          <button id="langBtn" class="flex items-center gap-2 px-3 py-1.5 rounded-full border border-outline-variant hover:border-primary text-on-surface hover:text-primary transition-all duration-300 font-label-md text-label-md bg-surface-container/30 backdrop-blur-sm">
            <span id="langFlag">🇬🇧</span>
            <span id="langName" class="notranslate">EN</span>
            <span class="text-[10px] leading-none" id="langArrow">▼</span>
          </button>
        </div>

        <a class="whitespace-nowrap px-5 py-2 bg-on-surface text-surface hover:bg-surface-variant hover:text-on-surface border border-transparent hover:border-outline-variant font-label-md text-label-md transition-all duration-300 rounded-xl" href="#contact">
          Inquire
        </a>
      </div>

      <!-- Mobile navigation elements -->
      <div class="flex items-center gap-3 lg:hidden">
        <button id="themeToggleMobile" class="w-10 h-10 flex items-center justify-center rounded-full border border-outline-variant text-on-surface bg-surface-container/30" aria-label="Toggle Theme Mobile">
          <span class="material-symbols-outlined text-lg leading-none notranslate" id="themeIconMobile">dark_mode</span>
        </button>
        <button class="text-on-surface w-10 h-10 flex items-center justify-center border border-outline-variant rounded-full bg-surface-container/30" id="mobileMenuBtn" aria-label="Menu Toggle">
          <span class="material-symbols-outlined text-lg leading-none notranslate" id="menuIcon">menu</span>
        </button>
      </div>
    </div>

    <!-- Searchable Google Translate Dropdown Switcher (Shared) -->
    <div id="langDropdown" class="notranslate absolute right-6 md:right-8 top-[74px] w-64 rounded-xl border border-outline-variant bg-surface-container-high shadow-2xl scale-95 opacity-0 pointer-events-none transition-all duration-300 z-50 overflow-hidden">
      <div class="p-2 border-b border-outline-variant bg-surface-container">
        <input type="text" id="langSearch" placeholder="Search language..." class="w-full px-3 py-1.5 text-sm rounded-lg bg-surface border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary text-on-surface placeholder-on-surface-variant/40 outline-none transition-all">
      </div>
      <div class="max-h-60 overflow-y-auto p-1 scrollbar-thin space-y-0.5" id="langList">
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium active" data-lang="" data-flag="🇬🇧" data-name="EN">🇬🇧 English</button>
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium" data-lang="id" data-flag="🇮🇩" data-name="ID">🇮🇩 Indonesian</button>
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium" data-lang="zh-CN" data-flag="🇨🇳" data-name="中文">🇨🇳 Chinese (Simplified)</button>
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium" data-lang="zh-TW" data-flag="🇹🇼" data-name="繁中">🇹🇼 Chinese (Traditional)</button>
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium" data-lang="ja" data-flag="🇯🇵" data-name="日本">🇯🇵 Japanese</button>
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium" data-lang="ko" data-flag="🇰🇷" data-name="한국">🇰🇷 Korean</button>
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium" data-lang="ru" data-flag="🇷🇺" data-name="РУ">🇷🇺 Russian</button>
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium" data-lang="th" data-flag="🇹🇭" data-name="ไทย">🇹🇭 Thai</button>
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium" data-lang="ar" data-flag="🇸🇦" data-name="عربي">🇸🇦 Arabic</button>
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium" data-lang="hi" data-flag="🇮🇳" data-name="हिन्दी">🇮🇳 Hindi</button>
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium" data-lang="fr" data-flag="🇫🇷" data-name="FR">🇫🇷 French</button>
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium" data-lang="de" data-flag="🇩🇪" data-name="DE">🇩🇪 German</button>
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium" data-lang="es" data-flag="🇪🇸" data-name="ES">🇪🇸 Spanish</button>
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium" data-lang="pt" data-flag="🇧🇷" data-name="PT">🇧🇷 Portuguese</button>
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium" data-lang="it" data-flag="🇮🇹" data-name="IT">🇮🇹 Italian</button>
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium" data-lang="nl" data-flag="🇳🇱" data-name="NL">🇳🇱 Dutch</button>
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium" data-lang="tr" data-flag="🇹🇷" data-name="TR">🇹🇷 Turkish</button>
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium" data-lang="vi" data-flag="🇻🇳" data-name="VI">🇻🇳 Vietnamese</button>
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium" data-lang="ms" data-flag="🇲🇾" data-name="MS">🇲🇾 Malay</button>
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium" data-lang="pl" data-flag="🇵🇱" data-name="PL">🇵🇱 Polish</button>
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium" data-lang="uk" data-flag="🇺🇦" data-name="УК">🇺🇦 Ukrainian</button>
        <button class="lang-option w-full text-left px-3 py-2 text-xs rounded-lg text-on-surface hover:bg-surface-container hover:text-primary transition-colors flex items-center gap-2.5 font-medium" data-lang="sv" data-flag="🇸🇪" data-name="SV">🇸🇪 Swedish</button>
      </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobileMenu" class="absolute top-20 left-0 w-full bg-surface border-b border-outline-variant max-h-0 overflow-hidden transition-all duration-300 ease-in-out lg:hidden flex flex-col z-40 shadow-2xl">
      <div class="px-6 py-4 flex flex-col gap-4">
        <a class="text-on-surface/80 hover:text-primary font-medium py-1.5 transition-colors border-b border-outline-variant/10" href="#about">About</a>
        <a class="text-on-surface/80 hover:text-primary font-medium py-1.5 transition-colors border-b border-outline-variant/10" href="#skills">Skills</a>
        <a class="text-on-surface/80 hover:text-primary font-medium py-1.5 transition-colors border-b border-outline-variant/10" href="#experience">Experience</a>
        <a class="text-on-surface/80 hover:text-primary font-medium py-1.5 transition-colors border-b border-outline-variant/10" href="#projects">Projects</a>
        <a class="text-on-surface/80 hover:text-primary font-medium py-1.5 transition-colors border-b border-outline-variant/10" href="#certs">Certificates</a>
        <a class="text-on-surface/80 hover:text-primary font-medium py-1.5 transition-colors border-b border-outline-variant/10" href="#contact">Contact</a>
        <div class="flex items-center justify-between pt-2">
          <span class="text-xs text-on-surface-variant font-medium">Multi-language</span>
          <div class="relative" id="langSwitcherMobile">
            <button id="langBtnMobile" class="flex items-center gap-1.5 px-3 py-1.5 rounded-xl border border-outline-variant text-on-surface font-label-md text-xs bg-surface-container-low">
              <span id="langFlagMobile">🇬🇧</span>
              <span id="langNameMobile" class="notranslate">EN</span>
              <span class="text-[9px]" id="langArrowMobile">▼</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <main>
    <!-- Hero Section -->
    <section class="min-h-screen flex flex-col justify-center items-center px-margin-mobile md:px-8 pt-28 pb-16 relative overflow-hidden">
      <!-- Glow Background Orbs -->
      <div class="absolute w-[500px] h-[500px] rounded-full bg-primary/5 blur-[120px] top-1/4 left-1/4 -z-10 pointer-events-none animate-pulse"></div>
      
      <div class="max-w-container-max w-full grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <!-- Text details -->
        <div class="lg:col-span-7 text-center lg:text-left space-y-6">
          <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-primary/20 bg-primary/5 text-primary text-xs font-bold font-label-md tracking-wider uppercase mx-auto lg:mx-0 w-fit fade-up">
            <span class="w-1.5 h-1.5 rounded-full bg-primary animate-ping"></span>
            Available for new projects
          </div>
          
          <h1 class="font-display-lg-mobile text-display-lg-mobile md:font-display-lg md:text-display-lg text-on-surface leading-tight tracking-tight fade-up delay-100">
            ANDIKA DICKY <span class="text-primary font-semibold block mt-1">SANJAYA</span>
          </h1>
          
          <p class="font-body-lg text-body-lg text-on-surface-variant/90 font-medium max-w-xl mx-auto lg:mx-0 fade-up delay-200 leading-relaxed">
            Video Editor &amp; Creative Digital
          </p>
          
          <p class="font-body-md text-body-md text-on-surface-variant/75 max-w-2xl mx-auto lg:mx-0 fade-up delay-200 leading-relaxed">
            Turning ideas into compelling visual stories through editing, design, and web development. Digital creator &amp; web developer from Pontianak, West Kalimantan.
          </p>
          
          <div class="flex flex-wrap justify-center lg:justify-start gap-4 pt-4 fade-up delay-300">
            <a href="#projects" class="px-6 py-3 bg-primary text-on-primary hover:bg-primary-container font-bold font-label-md text-label-md transition-all duration-300 rounded-xl shadow-lg shadow-primary/10 hover:scale-[1.03]">
              View Work ↓
            </a>
            <a href="#contact" class="px-6 py-3 bg-surface-container/50 text-on-surface hover:text-primary border border-outline-variant hover:border-primary font-bold font-label-md text-label-md transition-all duration-300 rounded-xl hover:scale-[1.03]">
              Contact Me →
            </a>
          </div>
          
          <!-- Key Metrics -->
          <div class="grid grid-cols-3 gap-6 pt-12 max-w-md mx-auto lg:mx-0 fade-up delay-400 border-t border-outline-variant/35">
            <div>
              <div class="font-headline-md text-3xl font-bold text-primary">2+</div>
              <div class="text-xs text-on-surface-variant font-medium mt-1">Internship Exp.</div>
            </div>
            <div>
              <div class="font-headline-md text-3xl font-bold text-primary">5+</div>
              <div class="text-xs text-on-surface-variant font-medium mt-1">Areas of Expertise</div>
            </div>
            <div>
              <div class="font-headline-md text-3xl font-bold text-primary">3</div>
              <div class="text-xs text-on-surface-variant font-medium mt-1">Years Learning</div>
            </div>
          </div>
        </div>
        
        <!-- Media Illustration -->
        <div class="lg:col-span-5 flex items-center justify-center fade-up delay-100">
          <div class="relative w-full h-[320px] md:h-[450px] flex items-center justify-center select-none">
            <!-- Glow background -->
            <div class="absolute w-64 h-64 rounded-full bg-primary/20 blur-[80px]"></div>
            
            <!-- Floating icons outer circle -->
            <div class="relative z-10 w-60 h-60 md:w-80 md:h-80 rounded-full border border-outline-variant/30 flex items-center justify-center animate-[spin_80s_linear_infinite]">
              <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-surface border border-outline-variant w-11 h-11 rounded-xl flex items-center justify-center shadow-lg text-xl -rotate-12 hover:scale-110 transition-transform duration-300">🎬</div>
              <div class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 bg-surface border border-outline-variant w-11 h-11 rounded-xl flex items-center justify-center shadow-lg text-xl rotate-12 hover:scale-110 transition-transform duration-300">🎨</div>
              <div class="absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-surface border border-outline-variant w-11 h-11 rounded-xl flex items-center justify-center shadow-lg text-xl -rotate-[30deg] hover:scale-110 transition-transform duration-300">💻</div>
              <div class="absolute right-0 top-1/2 translate-x-1/2 -translate-y-1/2 bg-surface border border-outline-variant w-11 h-11 rounded-xl flex items-center justify-center shadow-lg text-xl rotate-[30deg] hover:scale-110 transition-transform duration-300">📹</div>
            </div>
            
            <!-- Glowing center shield -->
            <div class="absolute z-20 w-40 h-40 md:w-52 md:h-52 rounded-full border border-primary/25 bg-surface-container-low/40 backdrop-blur-md flex items-center justify-center shadow-2xl group hover:border-primary/50 transition-all duration-500">
              <div class="w-32 h-32 md:w-44 md:h-44 rounded-full bg-gradient-to-tr from-primary/10 to-primary/30 flex items-center justify-center text-4xl md:text-5xl group-hover:scale-105 transition-transform duration-500">
                🎥
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 px-margin-mobile md:px-8 max-w-container-max mx-auto border-t border-outline-variant/30">
      <div class="section-label font-label-md text-label-md text-primary tracking-widest uppercase mb-4">About Me</div>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
        <div class="fade-up space-y-6">
          <h2 class="font-headline-lg text-headline-lg text-on-surface leading-tight">Andika Dicky Sanjaya</h2>
          <p class="font-body-lg text-body-lg text-on-surface-variant">I am a digital creator and web developer with a strong passion for visual content and technology. My journey began at SMK Karya Bangsa Sintang majoring in Software Engineering, where I honed my skills in video editing, graphic design, and web development.</p>
          <p class="font-body-md text-body-md text-on-surface-variant/80">My internship experience at DNA Indonesia (PT Digital Niaga Aksesindo) as a Video Editor and at RRI (Radio Republik Indonesia) in the New Media Content division as a Graphic Designer gave me deep insights into how the creative industry works professionally.</p>
          <p class="font-body-md text-body-md text-on-surface-variant/80">I believe that great creativity must be supported by solid execution and a deep understanding of audience needs. I am currently open to job opportunities, freelance projects, and creative collaborations.</p>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-4">
            <div class="flex items-center gap-3 p-4 rounded-xl border border-outline-variant bg-surface-container/30">
              <span class="text-2xl select-none">🎓</span>
              <div class="text-sm">
                <div class="font-medium text-on-surface">SMK Karya Bangsa Sintang</div>
                <div class="text-on-surface-variant text-xs mt-0.5">Software Engineering (2023–2026)</div>
              </div>
            </div>
            <div class="flex items-center gap-3 p-4 rounded-xl border border-outline-variant bg-surface-container/30">
              <span class="text-2xl select-none">📍</span>
              <div class="text-sm">
                <div class="font-medium text-on-surface">Location</div>
                <div class="text-on-surface-variant text-xs mt-0.5">Pontianak, West Kalimantan, ID</div>
              </div>
            </div>
            <div class="flex items-center gap-3 p-4 rounded-xl border border-outline-variant bg-surface-container/30">
              <span class="text-2xl select-none">🚀</span>
              <div class="text-sm">
                <div class="font-medium text-on-surface">Work Ethic</div>
                <div class="text-on-surface-variant text-xs mt-0.5">Open to freelance & collab</div>
              </div>
            </div>
            <div class="flex items-center gap-3 p-4 rounded-xl border border-outline-variant bg-surface-container/30">
              <span class="text-2xl select-none">💡</span>
              <div class="text-sm">
                <div class="font-medium text-on-surface">Professionalism</div>
                <div class="text-on-surface-variant text-xs mt-0.5">Fast learner & team player</div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="fade-up space-y-6 lg:pl-6">
          <div class="p-6 rounded-2xl border border-outline-variant bg-surface-container/20 hover:bg-surface-container/40 transition-all duration-300 group">
            <div class="flex items-center gap-4 mb-3">
              <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-2xl group-hover:scale-110 transition-transform duration-300">🎬</div>
              <h4 class="font-headline-md text-lg font-bold text-on-surface">Video Editing & Production</h4>
            </div>
            <p class="font-body-md text-body-md text-on-surface-variant">Editing and producing video content for various digital platforms, adjusting visuals, transitions, and audio to match brand identity.</p>
          </div>
          
          <div class="p-6 rounded-2xl border border-outline-variant bg-surface-container/20 hover:bg-surface-container/40 transition-all duration-300 group">
            <div class="flex items-center gap-4 mb-3">
              <div class="w-12 h-12 rounded-xl bg-secondary-container/20 flex items-center justify-center text-2xl group-hover:scale-110 transition-transform duration-300">🎨</div>
              <h4 class="font-headline-md text-lg font-bold text-on-surface">Graphic Design & Videography</h4>
            </div>
            <p class="font-body-md text-body-md text-on-surface-variant">Designing posters, visual materials for social media publications, and producing video content for platforms like Instagram, YouTube, and Facebook.</p>
          </div>
          
          <div class="p-6 rounded-2xl border border-outline-variant bg-surface-container/20 hover:bg-surface-container/40 transition-all duration-300 group">
            <div class="flex items-center gap-4 mb-3">
              <div class="w-12 h-12 rounded-xl bg-tertiary-container/30 flex items-center justify-center text-2xl group-hover:scale-110 transition-transform duration-300">💻</div>
              <h4 class="font-headline-md text-lg font-bold text-on-surface">Web Development & Copywriting</h4>
            </div>
            <p class="font-body-md text-body-md text-on-surface-variant">Building responsive websites with HTML, CSS, JavaScript, and writing effective copy for digital needs.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-24 px-margin-mobile md:px-8 bg-surface-container-lowest">
      <div class="max-w-container-max mx-auto">
        <div class="section-label font-label-md text-label-md text-primary tracking-widest uppercase mb-4">Skills</div>
        <h2 class="font-headline-lg text-headline-lg text-on-surface mb-4 fade-up leading-tight">Tech &amp; Creative Stack</h2>
        <p class="font-body-lg text-body-lg text-on-surface-variant mb-16 fade-up">Tools and technologies I use in my daily creative work.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
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
          <div class="skill-category fade-up p-6 rounded-2xl border border-outline-variant bg-surface-container-low flex flex-col justify-between hover:border-primary/20 transition-all duration-300">
            <div>
              <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-xl bg-surface flex items-center justify-center text-xl shadow-inner border border-outline-variant/30">{{ $cat['icon'] }}</div>
                <h3 class="font-bold text-on-surface text-[17px] leading-tight">{{ $cat['title'] }}</h3>
              </div>
              <div class="space-y-4">
                @foreach($cat['skills'] as $skill)
                <div class="skill-item">
                  <div class="flex justify-between items-center text-sm mb-1.5">
                    <span class="text-on-surface-variant font-medium">{{ $skill[0] }}</span>
                    <span class="text-primary font-bold text-xs">{{ $skill[1] }}%</span>
                  </div>
                  <div class="h-2 w-full bg-surface-container rounded-full overflow-hidden border border-outline-variant/20">
                    <div class="skill-fill h-full bg-gradient-to-r from-primary/80 to-primary rounded-full transition-all duration-1000 ease-[cubic-bezier(0.4,0,0.2,1)]" style="width: 0%" data-w="{{ $skill[1] }}"></div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-24 px-margin-mobile md:px-8 max-w-container-max mx-auto">
      <div class="section-label font-label-md text-label-md text-primary tracking-widest uppercase mb-4">Experience</div>
      <h2 class="font-headline-lg text-headline-lg text-on-surface mb-4 fade-up leading-tight">Career Journey</h2>
      <p class="font-body-lg text-body-lg text-on-surface-variant mb-16 fade-up">Internship experiences that shaped my professional perspective.</p>
      
      <div class="relative border-l border-outline-variant/60 ml-4 md:ml-8 pl-8 md:pl-12 space-y-12">
        <!-- DNA Indonesia -->
        <div class="relative fade-up">
          <div class="absolute -left-[41px] md:-left-[57px] top-1.5 w-6 h-6 rounded-full border-4 border-background bg-primary shadow-[0_0_12px_rgba(233,193,118,0.6)]"></div>
          <div class="p-6 md:p-8 rounded-2xl border border-outline-variant bg-surface-container/20 space-y-4 hover:border-primary/30 transition-all duration-300">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-2">
              <div>
                <span class="inline-block px-3 py-1 text-xs font-bold rounded-full bg-primary/10 text-primary border border-primary/20 mb-2">Completed</span>
                <h3 class="font-headline-md text-xl md:text-2xl font-semibold text-on-surface">Video Editor</h3>
              </div>
              <div class="text-sm text-on-surface-variant/80 font-medium md:text-right">
                <div>📅 June 2025 — October 2025</div>
                <div>5 months · Pontianak</div>
              </div>
            </div>
            <div class="text-primary font-bold text-sm">🏢 DNA Indonesia (PT Digital Niaga Aksesindo)</div>
            <p class="font-body-md text-body-md text-on-surface-variant">Worked as a Video Editor at PT Digital Niaga Aksesindo, directly involved in the digital content production process for agency clients. Edited and produced video content for various digital platforms, adjusted visuals, transitions, and audio to match client brand identity, and collaborated with the creative team from briefing to final delivery.</p>
            <div class="flex flex-wrap gap-2 pt-2">
              <span class="px-3 py-1 text-xs rounded-lg bg-surface border border-outline-variant/40 text-on-surface-variant font-medium">Video Editing</span>
              <span class="px-3 py-1 text-xs rounded-lg bg-surface border border-outline-variant/40 text-on-surface-variant font-medium">Graphic Design</span>
              <span class="px-3 py-1 text-xs rounded-lg bg-surface border border-outline-variant/40 text-on-surface-variant font-medium">Content Production</span>
              <span class="px-3 py-1 text-xs rounded-lg bg-surface border border-outline-variant/40 text-on-surface-variant font-medium">Brand Identity</span>
              <span class="px-3 py-1 text-xs rounded-lg bg-surface border border-outline-variant/40 text-on-surface-variant font-medium">Color Grading</span>
            </div>
          </div>
        </div>

        <!-- RRI Sintang -->
        <div class="relative fade-up">
          <div class="absolute -left-[41px] md:-left-[57px] top-1.5 w-6 h-6 rounded-full border-4 border-background bg-primary shadow-[0_0_12px_rgba(233,193,118,0.6)]"></div>
          <div class="p-6 md:p-8 rounded-2xl border border-outline-variant bg-surface-container/20 space-y-4 hover:border-primary/30 transition-all duration-300">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-2">
              <div>
                <span class="inline-block px-3 py-1 text-xs font-bold rounded-full bg-primary/10 text-primary border border-primary/20 mb-2">Completed</span>
                <h3 class="font-headline-md text-xl md:text-2xl font-semibold text-on-surface">Graphic Designer — New Media Content Division</h3>
              </div>
              <div class="text-sm text-on-surface-variant/80 font-medium md:text-right">
                <div>📅 January 2025 — March 2025</div>
                <div>3 months · Sintang</div>
              </div>
            </div>
            <div class="text-primary font-bold text-sm">📻 Lembaga Penyiaran Publik Radio Republik Indonesia (RRI)</div>
            <p class="font-body-md text-body-md text-on-surface-variant">Responsible for managing and producing visual content for all official RRI social media platforms. Designed posters and visual materials for social media publications, edited and produced video content for platforms like Instagram, YouTube, and Facebook, ensured visual identity consistency and communication tone in line with national public media standards, and supported the team in producing informative, engaging, and timely content.</p>
            <div class="flex flex-wrap gap-2 pt-2">
              <span class="px-3 py-1 text-xs rounded-lg bg-surface border border-outline-variant/40 text-on-surface-variant font-medium">Design</span>
              <span class="px-3 py-1 text-xs rounded-lg bg-surface border border-outline-variant/40 text-on-surface-variant font-medium">Videography</span>
              <span class="px-3 py-1 text-xs rounded-lg bg-surface border border-outline-variant/40 text-on-surface-variant font-medium">Social Media Content</span>
              <span class="px-3 py-1 text-xs rounded-lg bg-surface border border-outline-variant/40 text-on-surface-variant font-medium">Video Production</span>
              <span class="px-3 py-1 text-xs rounded-lg bg-surface border border-outline-variant/40 text-on-surface-variant font-medium">Visual Identity</span>
            </div>
          </div>
        </div>

        <!-- Freelance -->
        <div class="relative fade-up">
          <div class="absolute -left-[41px] md:-left-[57px] top-1.5 w-6 h-6 rounded-full border-4 border-background bg-secondary shadow-[0_0_12px_rgba(200,198,197,0.6)]"></div>
          <div class="p-6 md:p-8 rounded-2xl border border-secondary/35 bg-surface-container/20 space-y-4 hover:border-secondary/50 transition-all duration-300">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-2">
              <div>
                <span class="inline-block px-3 py-1 text-xs font-bold rounded-full bg-secondary/15 text-secondary border border-secondary/30 mb-2">Active</span>
                <h3 class="font-headline-md text-xl md:text-2xl font-semibold text-on-surface">Freelance Creative</h3>
              </div>
              <div class="text-sm text-on-surface-variant/80 font-medium md:text-right">
                <div>📅 2023 — Present</div>
              </div>
            </div>
            <div class="text-secondary font-bold text-sm">🚀 Independent Projects</div>
            <p class="font-body-md text-body-md text-on-surface-variant">Working on various freelance projects in graphic design, video editing, videography, copywriting, and web development for individuals and small businesses.</p>
            <div class="flex flex-wrap gap-2 pt-2">
              <span class="px-3 py-1 text-xs rounded-lg bg-surface border border-outline-variant/40 text-on-surface-variant font-medium">Video Editing</span>
              <span class="px-3 py-1 text-xs rounded-lg bg-surface border border-outline-variant/40 text-on-surface-variant font-medium">Graphic Design</span>
              <span class="px-3 py-1 text-xs rounded-lg bg-surface border border-outline-variant/40 text-on-surface-variant font-medium">Web Development</span>
              <span class="px-3 py-1 text-xs rounded-lg bg-surface border border-outline-variant/40 text-on-surface-variant font-medium">Copywriting</span>
              <span class="px-3 py-1 text-xs rounded-lg bg-surface border border-outline-variant/40 text-on-surface-variant font-medium">Videography</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Projects Section (Selected Works) -->
    <section id="projects" class="py-24 px-margin-mobile md:px-8 bg-surface-container-lowest">
      <div class="max-w-container-max mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-16">
          <div>
            <div class="section-label font-label-md text-label-md text-primary tracking-widest uppercase mb-4">Portfolio</div>
            <h2 class="font-headline-lg text-headline-lg text-on-surface leading-tight fade-up">Selected Works</h2>
          </div>
          
          <!-- Project Filter tabs redesigned in a clean border-outlined pill -->
          <div class="project-filter flex flex-wrap gap-1.5 p-1 rounded-full border border-outline-variant bg-surface-container/30 backdrop-blur-sm self-start md:self-auto fade-up">
            <button class="filter-btn px-4 py-1.5 rounded-full text-xs font-bold font-label-md transition-all duration-300 active text-primary bg-surface shadow" data-cat="all">All</button>
            <button class="filter-btn px-4 py-1.5 rounded-full text-xs font-bold font-label-md transition-all duration-300 text-on-surface-variant hover:text-on-surface" data-cat="video">Video</button>
            <button class="filter-btn px-4 py-1.5 rounded-full text-xs font-bold font-label-md transition-all duration-300 text-on-surface-variant hover:text-on-surface" data-cat="design">Design</button>
            <button class="filter-btn px-4 py-1.5 rounded-full text-xs font-bold font-label-md transition-all duration-300 text-on-surface-variant hover:text-on-surface" data-cat="web">Web</button>
          </div>
        </div>
        
        @php
        $projects = [
          ['cat'=>'video','badge'=>'Video','title'=>'Company Profile Video — Local Startup','desc'=>'A 3-minute company profile video for a tech startup in Pontianak with cinematic style and motion graphics.','year'=>'2024','tools'=>['Premiere Pro','After Effects','Color Grading'],'link'=>'#'],
          ['cat'=>'design','badge'=>'Design','title'=>'Brand Identity — Food Business','desc'=>'Complete brand identity design package for a local food business — logo, palette, business cards, and brand guidelines.','year'=>'2024','tools'=>['Illustrator','Photoshop','Figma'],'link'=>'#'],
          ['cat'=>'web','badge'=>'Web','title'=>'Product Landing Page — Skincare Brand','desc'=>'Responsive landing page for a local skincare brand with smooth animations, product gallery, and order form.','year'=>'2024','tools'=>['HTML','CSS','JavaScript'],'link'=>'#'],
          ['cat'=>'video','badge'=>'Video','title'=>'Short Film — Cultural Documentary','desc'=>'A short documentary about Dayak culture in West Kalimantan, produced for a provincial-level competition.','year'=>'2023','tools'=>['Premiere Pro','DaVinci','Documentary'],'link'=>'#'],
          ['cat'=>'design','badge'=>'Design','title'=>'Social Media Kit — Event Organizer','desc'=>'Social media content design package (Instagram, TikTok) for a local event organizer featuring 30+ ready-to-use templates.','year'=>'2023','tools'=>['Canva Pro','Photoshop','Figma'],'link'=>'#'],
          ['cat'=>'web','badge'=>'Web','title'=>'Company Website — Online Store','desc'=>'Complete online store website with product catalog, simple shopping cart, and WhatsApp integration.','year'=>'2023','tools'=>['WordPress','WooCommerce','CSS Custom'],'link'=>'#'],
        ];
        @endphp

        <div class="flex flex-col border-t border-outline-variant" id="projectGrid">
          @foreach($projects as $index => $p)
          <a class="project-card group block py-12 border-b border-outline-variant hover:bg-surface-container-low transition-colors duration-500 fade-up px-4 md:px-8" href="{{ $p['link'] }}" data-cat="{{ $p['cat'] }}" style="transition-delay: {{ ($index + 1) * 50 }}ms">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
              <div class="flex-1 space-y-3">
                <div class="flex items-center gap-3">
                  <span class="inline-block px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider rounded-md bg-primary/10 text-primary border border-primary/15">{{ $p['badge'] }}</span>
                  <div class="flex flex-wrap gap-1.5">
                    @foreach($p['tools'] as $tool)
                    <span class="text-xs text-on-surface-variant/65">#{{ $tool }}</span>
                    @endforeach
                  </div>
                </div>
                <h3 class="font-headline-md text-2xl md:text-3xl text-on-surface group-hover:text-primary transition-colors duration-300 leading-snug">{{ $p['title'] }}</h3>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-3xl leading-relaxed">{{ $p['desc'] }}</p>
              </div>
              <div class="flex items-center gap-4 text-on-surface-variant group-hover:text-primary transition-colors duration-300 self-end md:self-auto shrink-0">
                <span class="font-label-md text-label-md text-sm">{{ $p['year'] }}</span>
                <span class="material-symbols-outlined notranslate opacity-0 group-hover:opacity-100 transform -translate-x-4 group-hover:translate-x-0 transition-all duration-300">arrow_forward</span>
              </div>
            </div>
          </a>
          @endforeach
        </div>
      </div>
    </section>

    <!-- Certificates Section -->
    <section id="certs" class="py-24 px-margin-mobile md:px-8 max-w-container-max mx-auto border-t border-outline-variant/30">
      <div class="section-label font-label-md text-label-md text-primary tracking-widest uppercase mb-4">Certificates</div>
      <h2 class="font-headline-lg text-headline-lg text-on-surface mb-4 fade-up leading-tight">Achievements &amp; Certifications</h2>
      <p class="font-body-lg text-body-lg text-on-surface-variant mb-16 fade-up">Various training programs and certifications I have completed.</p>
      
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
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($certs as $c)
        <div class="cert-card fade-up p-6 rounded-2xl border border-outline-variant bg-surface-container/20 flex gap-4 hover:border-primary/30 hover:scale-[1.02] hover:bg-surface-container/40 transition-all duration-300">
          <div class="w-12 h-12 rounded-xl bg-surface flex items-center justify-center text-2xl shadow-inner border border-outline-variant/30 shrink-0">{{ $c[0] }}</div>
          <div class="space-y-1">
            <h3 class="font-bold text-on-surface leading-snug group-hover:text-primary transition-colors text-[15px]">{{ $c[1] }}</h3>
            <div class="text-xs text-on-surface-variant/80 font-medium">{{ $c[2] }}</div>
            <div class="text-[11px] text-primary/80 font-bold">{{ $c[3] }}</div>
          </div>
        </div>
        @endforeach
      </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-24 px-margin-mobile md:px-8 bg-surface-container-lowest">
      <div class="max-w-container-max mx-auto">
        <div class="section-label font-label-md text-label-md text-primary tracking-widest uppercase mb-4">Testimonials</div>
        <h2 class="font-headline-lg text-headline-lg text-on-surface mb-4 fade-up leading-tight">What They Say</h2>
        <p class="font-body-lg text-body-lg text-on-surface-variant mb-16 fade-up">What people who have worked with me have to say.</p>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
          <!-- Testi 1 -->
          <div class="testi-card fade-up p-8 rounded-2xl border border-outline-variant bg-surface-container-low flex flex-col justify-between hover:border-primary/20 transition-all duration-300">
            <div class="space-y-4">
              <div class="text-primary tracking-wide text-xs">★★★★★</div>
              <p class="font-body-md text-body-md text-on-surface-variant italic leading-relaxed">"Amazing collaboration! The editing results were very professional, on time, and exceeded our expectations. Highly recommended for video branding projects."</p>
            </div>
            <div class="flex items-center gap-4 mt-8 pt-6 border-t border-outline-variant/30">
              <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-primary/30 to-primary flex items-center justify-center text-on-primary font-bold text-lg">A</div>
              <div>
                <div class="font-bold text-on-surface text-sm">Ahmad Rizki</div>
                <div class="text-xs text-on-surface-variant/80">Creative Director — Creative Agency</div>
              </div>
            </div>
          </div>
          
          <!-- Testi 2 -->
          <div class="testi-card fade-up p-8 rounded-2xl border border-outline-variant bg-surface-container-low flex flex-col justify-between hover:border-primary/20 transition-all duration-300">
            <div class="space-y-4">
              <div class="text-primary tracking-wide text-xs">★★★★★</div>
              <p class="font-body-md text-body-md text-on-surface-variant italic leading-relaxed">"Very enthusiastic and a fast learner. During the internship at RRI, his contributions to digital content production greatly helped our creative team."</p>
            </div>
            <div class="flex items-center gap-4 mt-8 pt-6 border-t border-outline-variant/30">
              <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-secondary/30 to-secondary flex items-center justify-center text-on-secondary font-bold text-lg">S</div>
              <div>
                <div class="font-bold text-on-surface text-sm">Siti Rahayu</div>
                <div class="text-xs text-on-surface-variant/80">Head of Digital Division — RRI Pontianak</div>
              </div>
            </div>
          </div>
          
          <!-- Testi 3 -->
          <div class="testi-card fade-up p-8 rounded-2xl border border-outline-variant bg-surface-container-low flex flex-col justify-between hover:border-primary/20 transition-all duration-300">
            <div class="space-y-4">
              <div class="text-primary tracking-wide text-xs">★★★★★</div>
              <p class="font-body-md text-body-md text-on-surface-variant italic leading-relaxed">"The logo and brand design truly represented our business perfectly. Affordable pricing but premium quality!"</p>
            </div>
            <div class="flex items-center gap-4 mt-8 pt-6 border-t border-outline-variant/30">
              <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-primary-container to-primary flex items-center justify-center text-on-primary-container font-bold text-lg">D</div>
              <div>
                <div class="font-bold text-on-surface text-sm">Dewi Lestari</div>
                <div class="text-xs text-on-surface-variant/80">Owner — Local Food Business Pontianak</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 px-margin-mobile md:px-8 max-w-container-max mx-auto">
      <div class="section-label font-label-md text-label-md text-primary tracking-widest uppercase mb-4">Contact</div>
      <h2 class="font-headline-lg text-headline-lg text-on-surface mb-4 fade-up leading-tight">Let's Collaborate</h2>
      <p class="font-body-lg text-body-lg text-on-surface-variant mb-16 fade-up">Have an exciting project? I'm ready to help make it happen!</p>
      
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
        <!-- Contact details -->
        <div class="lg:col-span-5 space-y-10 fade-up">
          <div class="space-y-6">
            <!-- Item 1 -->
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 rounded-xl bg-surface border border-outline-variant/40 flex items-center justify-center text-xl shadow-sm shrink-0">📧</div>
              <div>
                <div class="text-xs text-on-surface-variant font-medium mb-0.5">Email</div>
                <div class="text-on-surface font-bold text-sm">andikadickysanjaya@gmail.com</div>
              </div>
            </div>
            
            <!-- Item 2 -->
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 rounded-xl bg-surface border border-outline-variant/40 flex items-center justify-center text-xl shadow-sm shrink-0">📱</div>
              <div>
                <div class="text-xs text-on-surface-variant font-medium mb-0.5">WhatsApp</div>
                <div class="text-on-surface font-bold text-sm">+62 852-4768-1878</div>
              </div>
            </div>
            
            <!-- Item 3 — Instagram -->
            <a href="https://www.instagram.com/d_kaa01/" target="_blank" rel="noopener noreferrer" class="flex items-start gap-4 group cursor-pointer">
              <div class="w-12 h-12 rounded-xl bg-gradient-to-tr from-[#f9ce34] via-[#ee2a7b] to-[#6228d7] flex items-center justify-center text-xl shadow-sm shrink-0 group-hover:scale-110 transition-transform duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" viewBox="0 0 16 16"><path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/></svg>
              </div>
              <div>
                <div class="text-xs text-on-surface-variant font-medium mb-0.5">Instagram</div>
                <div class="text-on-surface font-bold text-sm group-hover:text-primary transition-colors duration-300">@d_kaa01</div>
              </div>
            </a>
            
            <!-- Item 4 — Location -->
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 rounded-xl bg-surface border border-outline-variant/40 flex items-center justify-center text-xl shadow-sm shrink-0">📍</div>
              <div>
                <div class="text-xs text-on-surface-variant font-medium mb-0.5">Location</div>
                <div class="text-on-surface font-bold text-sm">Pontianak, West Kalimantan</div>
              </div>
            </div>
          </div>
          
          <div class="space-y-4 pt-4 border-t border-outline-variant/30">
            <div class="section-label font-label-md text-label-md text-primary tracking-wider uppercase mb-3">Find Me</div>
            <div class="flex flex-wrap gap-3">
              <a href="https://www.instagram.com/d_kaa01/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full border border-outline-variant hover:border-primary hover:text-primary text-on-surface flex items-center justify-center transition-all duration-300 bg-surface hover:-translate-y-1 shadow-sm" title="Instagram">📸</a>
              <a href="#" class="w-10 h-10 rounded-full border border-outline-variant hover:border-primary hover:text-primary text-on-surface flex items-center justify-center transition-all duration-300 bg-surface hover:-translate-y-1 shadow-sm" title="TikTok">🎵</a>
              <a href="#" class="w-10 h-10 rounded-full border border-outline-variant hover:border-primary hover:text-primary text-on-surface flex items-center justify-center transition-all duration-300 bg-surface hover:-translate-y-1 shadow-sm" title="YouTube">▶️</a>
              <a href="https://www.linkedin.com/in/andika-dicky-sanjaya-82211a386" target="_blank" class="w-10 h-10 rounded-full border border-outline-variant hover:border-primary hover:text-primary text-on-surface flex items-center justify-center transition-all duration-300 bg-surface hover:-translate-y-1 shadow-sm" title="LinkedIn">💼</a>
              <a href="#" class="w-10 h-10 rounded-full border border-outline-variant hover:border-primary hover:text-primary text-on-surface flex items-center justify-center transition-all duration-300 bg-surface hover:-translate-y-1 shadow-sm" title="GitHub">🐙</a>
              <a href="#" class="w-10 h-10 rounded-full border border-outline-variant hover:border-primary hover:text-primary text-on-surface flex items-center justify-center transition-all duration-300 bg-surface hover:-translate-y-1 shadow-sm" title="Behance">🅱️</a>
            </div>
          </div>
          
          <div class="pt-4">
            <a href="{{ asset('Profile (1).pdf') }}" download class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-on-primary font-bold font-label-md text-label-md rounded-xl hover:bg-primary-container hover:scale-[1.03] transition-all duration-300 shadow-lg shadow-primary/10 select-none">
              <span>⬇</span> Download CV
            </a>
          </div>
        </div>
        
        <!-- Contact Form -->
        <div class="lg:col-span-7 p-8 md:p-10 rounded-2xl border border-outline-variant bg-surface-container/20 fade-up">
          <div class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="space-y-2">
                <label class="block text-xs font-bold text-on-surface-variant tracking-wider uppercase" for="fname">Full Name</label>
                <input class="w-full px-4 py-3 rounded-xl bg-surface border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary text-on-surface placeholder-on-surface-variant/40 outline-none transition-all duration-300" type="text" placeholder="Your name" id="fname">
              </div>
              <div class="space-y-2">
                <label class="block text-xs font-bold text-on-surface-variant tracking-wider uppercase" for="femail">Email</label>
                <input class="w-full px-4 py-3 rounded-xl bg-surface border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary text-on-surface placeholder-on-surface-variant/40 outline-none transition-all duration-300" type="email" placeholder="email@example.com" id="femail">
              </div>
            </div>
            <div class="space-y-2">
              <label class="block text-xs font-bold text-on-surface-variant tracking-wider uppercase" for="fsubject">Subject</label>
              <input class="w-full px-4 py-3 rounded-xl bg-surface border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary text-on-surface placeholder-on-surface-variant/40 outline-none transition-all duration-300" type="text" placeholder="Message topic" id="fsubject">
            </div>
            <div class="space-y-2">
              <label class="block text-xs font-bold text-on-surface-variant tracking-wider uppercase" for="fmessage">Message</label>
              <textarea class="w-full px-4 py-3 rounded-xl bg-surface border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary text-on-surface placeholder-on-surface-variant/40 outline-none transition-all duration-300 resize-none animate-pulse-none" rows="5" placeholder="Tell me about your project or needs..." id="fmessage"></textarea>
            </div>
            <button class="w-full py-4 bg-[#25D366] text-white hover:bg-[#1ebe57] font-bold font-label-md text-label-md rounded-xl transition-all duration-300 shadow-lg shadow-[#25D366]/20 hover:scale-[1.01] flex items-center justify-center gap-2" onclick="handleSubmit()">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.325-.336-.445-.342-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/></svg>
              Send via WhatsApp
            </button>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="w-full py-16 bg-surface border-t border-outline-variant/30">
    <div class="max-w-[1200px] mx-auto px-margin-mobile md:px-8 flex flex-col md:flex-row justify-between items-center gap-8">
      <div class="font-headline-md text-lg md:text-xl text-on-surface opacity-80 hover:opacity-100 transition-opacity">
        ANDIKA DICKY SANJAYA
      </div>
      <div class="flex flex-wrap justify-center gap-6 font-label-md text-label-md">
        <a class="text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">LinkedIn</a>
        <a class="text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Instagram</a>
        <a class="text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">TikTok</a>
        <a class="text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">GitHub</a>
      </div>
      <div class="font-body-md text-sm text-primary text-center md:text-right">
        © {{ date('Y') }} Andika Dicky Sanjaya — Crafted with ❤️ in Pontianak<br/>
        <span class="text-on-surface-variant text-xs mt-1 inline-block">Built with Laravel, HTML, CSS &amp; JavaScript</span>
      </div>
    </div>
  </footer>

  <!-- Back to Top & Toast Alert -->
  <div class="fixed bottom-6 right-6 z-40 translate-y-24 opacity-0 pointer-events-none transition-all duration-500 scale-90" id="backTop">
    <button class="w-12 h-12 flex items-center justify-center rounded-full bg-primary text-on-primary hover:bg-primary-container shadow-xl transition-all duration-300 hover:-translate-y-1" onclick="window.scrollTo({top:0,behavior:'smooth'})">
      <span class="material-symbols-outlined notranslate font-bold">arrow_upward</span>
    </button>
  </div>

  <div class="fixed bottom-6 left-6 z-50 translate-y-24 opacity-0 pointer-events-none transition-all duration-500 max-w-sm" id="toast">
    <div class="flex items-center gap-3 px-6 py-4 rounded-xl border border-outline bg-surface-container-high shadow-2xl text-on-surface text-sm font-medium">
      <span class="text-lg">💬</span>
      <span>Opening WhatsApp... Your message is ready to send!</span>
    </div>
  </div>

  <!-- Portfolio Main Logic Script -->
  <script src="{{ asset('js/portfolio.js') }}"></script>
  
  <!-- Additional Inline Setup for Navigation & Google Translate Trigger -->
  <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
