@extends('layouts.app')

@section('title', 'Pengalaman - ' . config('portfolio.personal.name'))

@section('content')
@php
    $experiences = config('portfolio.experience');
    $organizations = config('portfolio.organizations');
    $skills = config('portfolio.skills');
@endphp

<!-- Work Experience -->
<section class="section">
    <div class="section-header">
        <div class="section-badge"><i class="fas fa-briefcase"></i> <span data-i18n="exp.badge">Karir</span></div>
        <h2 class="section-title" data-i18n="exp.title">Pengalaman Kerja</h2>
        <p class="section-subtitle" data-i18n="exp.subtitle">Perjalanan profesional saya dalam dunia teknologi</p>
    </div>

    <div class="timeline">
        @foreach($experiences as $exp)
        <div class="timeline-item fade-in">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <div class="timeline-header">
                    <h3 data-lang-id="{{ $exp['position']['id'] }}" data-lang-en="{{ $exp['position']['en'] }}" data-lang-ar="{{ $exp['position']['ar'] }}">{{ $exp['position']['id'] }}</h3>
                    <span class="timeline-badge badge-{{ $exp['badge_type'] }}" data-lang-id="{{ $exp['badge']['id'] }}" data-lang-en="{{ $exp['badge']['en'] }}" data-lang-ar="{{ $exp['badge']['ar'] }}">{{ $exp['badge']['id'] }}</span>
                </div>
                <div class="timeline-company">{{ $exp['company'] }}</div>
                <div class="timeline-date">
                    <i class="fas fa-calendar-alt"></i>
                    <span data-lang-id="{{ $exp['date']['id'] }}" data-lang-en="{{ $exp['date']['en'] }}" data-lang-ar="{{ $exp['date']['ar'] }}">{{ $exp['date']['id'] }}</span>
                </div>
                <p data-lang-id="{{ $exp['description']['id'] }}" data-lang-en="{{ $exp['description']['en'] }}" data-lang-ar="{{ $exp['description']['ar'] }}">
                    {{ $exp['description']['id'] }}
                </p>
                <div class="timeline-skills">
                    @foreach($exp['skills'] as $skill)
                    <span class="timeline-skill">{{ $skill }}</span>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Organization Experience -->
<section class="section" style="background: var(--bg-secondary);">
    <div class="section-header">
        <div class="section-badge"><i class="fas fa-users"></i> <span data-i18n="exp.org_badge">Organisasi</span></div>
        <h2 class="section-title" data-i18n="exp.org_title">Pengalaman Organisasi</h2>
        <p class="section-subtitle" data-i18n="exp.org_subtitle">Aktif berkontribusi dalam berbagai organisasi kampus</p>
    </div>

    <div class="org-grid">
        @foreach($organizations as $org)
        <div class="org-card fade-in">
            <div class="org-icon"><i class="{{ $org['icon'] }}"></i></div>
            <h4>
                @if(is_array($org['name']))
                    <span data-lang-id="{{ $org['name']['id'] }}" data-lang-en="{{ $org['name']['en'] }}" data-lang-ar="{{ $org['name']['ar'] }}">{{ $org['name']['id'] }}</span>
                @else
                    {{ $org['name'] }}
                @endif
            </h4>
            <div class="org-role" data-lang-id="{{ $org['role']['id'] }}" data-lang-en="{{ $org['role']['en'] }}" data-lang-ar="{{ $org['role']['ar'] }}">{{ $org['role']['id'] }}</div>
            <div class="org-period"><i class="fas fa-calendar"></i> {{ $org['period'] }}</div>
            <p data-lang-id="{{ $org['description']['id'] }}" data-lang-en="{{ $org['description']['en'] }}" data-lang-ar="{{ $org['description']['ar'] }}">{{ $org['description']['id'] }}</p>
        </div>
        @endforeach
    </div>
</section>

<!-- Skills Summary -->
<section class="section">
    <div class="section-header">
        <div class="section-badge"><i class="fas fa-tools"></i> <span data-i18n="exp.skill_badge">Kemampuan</span></div>
        <h2 class="section-title" data-i18n="exp.skill_title">Tech Stack & Skills</h2>
        <p class="section-subtitle" data-i18n="exp.skill_subtitle">Teknologi dan keahlian yang saya kuasai</p>
    </div>

    <div class="skills-grid" style="max-width: 900px; margin: 0 auto; padding: 0 24px; grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));">
        @foreach($skills as $skill)
        <div class="skill-card fade-in">
            <i class="{{ $skill['icon'] }}"></i>
            <h4>{{ $skill['name'] }}</h4>
            <p>{{ $skill['detail'] }}</p>
        </div>
        @endforeach
    </div>
</section>
@endsection
