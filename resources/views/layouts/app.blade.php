<!DOCTYPE html>
<html lang="id" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio {{ config('portfolio.personal.name') }} - {{ config('portfolio.personal.title') }}">
    <meta name="keywords" content="{{ config('portfolio.personal.name') }}, Portfolio, Web Developer, Mobile Developer">
    <meta name="author" content="{{ config('portfolio.personal.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('portfolio.personal.name') . ' - Portfolio')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600&family=Noto+Sans+Arabic:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    @yield('styles')
</head>
<body data-theme="dark">
    <!-- Animated Background Particles -->
    <div class="bg-particles" id="particles"></div>

    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="{{ route('home') }}" class="nav-logo">
                <span class="logo-bracket">&lt;</span>
                <span class="logo-text">SG</span>
                <span class="logo-bracket">/&gt;</span>
            </a>
            <ul class="nav-menu" id="navMenu">
                <li><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"><span class="nav-icon"><i class="fas fa-home"></i></span> <span data-i18n="nav.home">Home</span></a></li>
                <li><a href="{{ route('projects') }}" class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}"><span class="nav-icon"><i class="fas fa-code"></i></span> <span data-i18n="nav.projects">Proyek</span></a></li>
                <li><a href="{{ route('experience') }}" class="nav-link {{ request()->routeIs('experience') ? 'active' : '' }}"><span class="nav-icon"><i class="fas fa-briefcase"></i></span> <span data-i18n="nav.experience">Pengalaman</span></a></li>
                <li><a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"><span class="nav-icon"><i class="fas fa-envelope"></i></span> <span data-i18n="nav.contact">Kontak</span></a></li>
            </ul>

            <div class="nav-actions">
                <!-- Language Switcher -->
                <div class="lang-switcher" id="langSwitcher">
                    <button class="lang-toggle" id="langToggle" aria-label="Change language">
                        <i class="fas fa-globe"></i>
                        <span class="lang-current" id="langCurrent">ID</span>
                    </button>
                    <div class="lang-dropdown" id="langDropdown">
                        <button class="lang-option active" data-lang="id">
                            <span class="lang-flag">🇮🇩</span>
                            <span>Indonesia</span>
                        </button>
                        <button class="lang-option" data-lang="en">
                            <span class="lang-flag">🇬🇧</span>
                            <span>English</span>
                        </button>
                        <button class="lang-option" data-lang="ar">
                            <span class="lang-flag">🇸🇦</span>
                            <span>العربية</span>
                        </button>
                    </div>
                </div>

                <!-- Theme Toggle -->
                <button class="theme-toggle" id="themeToggle" aria-label="Toggle theme">
                    <i class="fas fa-moon" id="themeIcon"></i>
                </button>

                <!-- Mobile Toggle -->
                <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
                    <span class="hamburger"></span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="{{ route('home') }}" class="footer-logo">
                        <span class="logo-bracket">&lt;</span>
                        <span class="logo-text">SG</span>
                        <span class="logo-bracket">/&gt;</span>
                    </a>
                    <p class="footer-desc" data-i18n="footer.desc">Junior Website & Mobile Developer yang passionate dalam membangun solusi digital.</p>
                </div>
                <div class="footer-links">
                    <h4 data-i18n="footer.navigation">Navigasi</h4>
                    <ul>
                        <li><a href="{{ route('home') }}" data-i18n="nav.home">Home</a></li>
                        <li><a href="{{ route('projects') }}" data-i18n="nav.projects">Proyek</a></li>
                        <li><a href="{{ route('experience') }}" data-i18n="nav.experience">Pengalaman</a></li>
                        <li><a href="{{ route('contact') }}" data-i18n="nav.contact">Kontak</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <h4 data-i18n="footer.follow">Ikuti Saya</h4>
                    <div class="social-links">
                        @if(config('portfolio.personal.social.github'))
                        <a href="{{ config('portfolio.personal.social.github') }}" target="_blank" rel="noopener" aria-label="GitHub"><i class="fab fa-github"></i></a>
                        @endif
                        @if(config('portfolio.personal.social.linkedin'))
                        <a href="{{ config('portfolio.personal.social.linkedin') }}" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        @endif
                        @if(config('portfolio.personal.social.instagram'))
                        <a href="{{ config('portfolio.personal.social.instagram') }}" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        @endif
                        <a href="mailto:{{ config('portfolio.personal.email') }}" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} {{ config('portfolio.personal.name') }}. Crafted with <i class="fas fa-heart" style="color: #ef4444;"></i> & Laravel</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/translations.js') }}"></script>
    <script src="{{ asset('js/portfolio.js') }}"></script>
    @yield('scripts')
</body>
</html>
