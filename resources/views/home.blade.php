@extends('layouts.app')

@section('title', config('portfolio.personal.name') . ' - Portfolio | Home')

@section('content')
@php
    $p = config('portfolio.personal');
    $edu = config('portfolio.education');
    $skillsHero = config('portfolio.skills_hero');
@endphp

<!-- Hero Section -->
<section class="hero" id="hero">
    <div class="hero-container">
        <div class="hero-content">
            <div class="hero-greeting">
                <span class="wave">👋</span>
                <span data-i18n="hero.greeting">Halo, saya</span>
            </div>
            <h1 class="hero-name">
                {{ explode(' ', $p['name'])[0] }} <span class="highlight">{{ implode(' ', array_slice(explode(' ', $p['name']), 1)) }}</span>
            </h1>
            <h2 class="hero-title">
                <span class="typed-text">Web Developer</span>
            </h2>
            <p class="hero-description" data-lang-id="{{ $p['hero_description']['id'] }}" data-lang-en="{{ $p['hero_description']['en'] }}" data-lang-ar="{{ $p['hero_description']['ar'] }}">
                {{ $p['hero_description']['id'] }}
            </p>
            <div class="hero-actions">
                <a href="{{ route('projects') }}" class="btn btn-primary" data-i18n-html="hero.btn_projects">
                    <i class="fas fa-code"></i> Lihat Proyek
                </a>
                <a href="{{ route('contact') }}" class="btn btn-outline" data-i18n-html="hero.btn_contact">
                    <i class="fas fa-paper-plane"></i> Hubungi Saya
                </a>
            </div>
            <div class="hero-stats">
                <div class="stat-item">
                    <div class="stat-number" data-count="{{ count(config('portfolio.projects')) }}" data-suffix="+">0+</div>
                    <div class="stat-label" data-i18n="hero.stat_projects">Proyek</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-count="{{ count(config('portfolio.experience')) }}" data-suffix="+">0+</div>
                    <div class="stat-label" data-i18n="hero.stat_exp">Pengalaman</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-count="{{ count(config('portfolio.skills')) }}" data-suffix="+">0+</div>
                    <div class="stat-label" data-i18n="hero.stat_skills">Skills</div>
                </div>
            </div>
        </div>
        <div class="hero-image">
            <div class="hero-image-wrapper">
                <img src="{{ asset($p['photo']) }}" alt="{{ $p['name'] }} - Developer">
                <div class="floating-badge badge-1">
                    <span class="badge-icon">💻</span> <span data-i18n="hero.badge_web">Web Developer</span>
                </div>
                <div class="floating-badge badge-2">
                    <span class="badge-icon">📱</span> <span data-i18n="hero.badge_mobile">Mobile Dev</span>
                </div>
                <div class="floating-badge badge-3">
                    <span class="badge-icon">🎓</span> <span data-i18n="hero.badge_edu">S1 Informatika</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="section" id="about">
    <div class="section-header">
        <div class="section-badge"><i class="fas fa-user"></i> <span data-i18n="about.badge">Tentang Saya</span></div>
        <h2 class="section-title" data-i18n="about.title">Mengenal Lebih Dekat</h2>
        <p class="section-subtitle" data-i18n="about.subtitle">Seorang developer yang bersemangat dan selalu ingin belajar hal baru</p>
    </div>

    <div class="about-grid">
        <div class="about-info fade-in-left">
            <h3 data-i18n="about.who">Siapa Saya?</h3>
            <p data-lang-id="{{ $p['about']['id'] }}" data-lang-en="{{ $p['about']['en'] }}" data-lang-ar="{{ $p['about']['ar'] }}">
                {{ $p['about']['id'] }}
            </p>
            <p data-lang-id="{{ $p['about_short']['id'] }}" data-lang-en="{{ $p['about_short']['en'] }}" data-lang-ar="{{ $p['about_short']['ar'] }}">
                {{ $p['about_short']['id'] }}
            </p>
            <div class="info-grid">
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <strong data-i18n="about.lbl_location">Lokasi</strong>
                        <span>{{ $p['location'] }}</span>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-graduation-cap"></i>
                    <div>
                        <strong data-i18n="about.lbl_edu">Pendidikan</strong>
                        <span>{{ $p['degree'] }}</span>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <strong data-i18n="about.lbl_email">Email</strong>
                        <span>{{ $p['email'] }}</span>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <strong data-i18n="about.lbl_phone">Telepon</strong>
                        <span>{{ $p['phone'] }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-skills fade-in-right">
            <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 20px;" data-i18n="about.skills_title">Skills & Keahlian</h3>
            <div class="skills-grid">
                @foreach($skillsHero as $skill)
                <div class="skill-card">
                    <i class="{{ $skill['icon'] }}"></i>
                    <h4>{{ $skill['name'] }}</h4>
                    <p>
                        @if(is_array($skill['detail']))
                            <span data-lang-id="{{ $skill['detail']['id'] }}" data-lang-en="{{ $skill['detail']['en'] }}" data-lang-ar="{{ $skill['detail']['ar'] }}">{{ $skill['detail']['id'] }}</span>
                        @else
                            {{ $skill['detail'] }}
                        @endif
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Education Section -->
<section class="section" id="education" style="background: var(--bg-secondary);">
    <div class="section-header">
        <div class="section-badge"><i class="fas fa-graduation-cap"></i> <span data-i18n="edu.badge">Pendidikan</span></div>
        <h2 class="section-title" data-i18n="edu.title">Riwayat Pendidikan</h2>
        <p class="section-subtitle" data-i18n="edu.subtitle">Perjalanan akademik yang membentuk saya menjadi developer</p>
    </div>

    <div class="education-cards">
        @foreach($edu as $item)
        <div class="edu-card fade-in">
            <div class="edu-icon"><i class="{{ $item['icon'] }}"></i></div>
            <h4 data-lang-id="{{ $item['degree']['id'] }}" data-lang-en="{{ $item['degree']['en'] }}" data-lang-ar="{{ $item['degree']['ar'] }}">{{ $item['degree']['id'] }}</h4>
            <div class="edu-school">{{ $item['school'] }}</div>
            <div class="edu-year"><i class="fas fa-calendar"></i> {{ $item['year'] }}</div>
            <p data-lang-id="{{ $item['description']['id'] }}" data-lang-en="{{ $item['description']['en'] }}" data-lang-ar="{{ $item['description']['ar'] }}">{{ $item['description']['id'] }}</p>
        </div>
        @endforeach
    </div>
</section>
@endsection
