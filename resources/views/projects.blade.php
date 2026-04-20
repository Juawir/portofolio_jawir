@extends('layouts.app')

@section('title', 'Proyek - ' . config('portfolio.personal.name'))

@section('content')
@php
    $projects = config('portfolio.projects');
@endphp

<section class="section">
    <div class="section-header">
        <div class="section-badge"><i class="fas fa-code"></i> <span data-i18n="proj.badge">Portfolio</span></div>
        <h2 class="section-title" data-i18n="proj.title">Proyek Saya</h2>
        <p class="section-subtitle" data-i18n="proj.subtitle">Koleksi proyek yang telah saya kerjakan, dari web hingga mobile development</p>
    </div>

    <!-- Filter Buttons -->
    <div class="projects-filter">
        <button class="filter-btn active" onclick="filterProjects('all', this)" data-i18n="proj.filter_all">Semua</button>
        <button class="filter-btn" onclick="filterProjects('web', this)" data-i18n="proj.filter_web">Web</button>
        <button class="filter-btn" onclick="filterProjects('mobile', this)" data-i18n="proj.filter_mobile">Mobile</button>
        <button class="filter-btn" onclick="filterProjects('other', this)" data-i18n="proj.filter_other">Lainnya</button>
    </div>

    <!-- Projects Grid -->
    <div class="projects-grid">
        @foreach($projects as $project)
        <div class="project-card fade-in" style="cursor: pointer;"
             data-category="{{ $project['category'] }}" 
             data-title="{{ $project['title'] }}"
             data-icon="{{ $project['icon'] }}"
             data-github="{{ $project['github'] ?? '' }}"
             data-desc-id="{{ $project['description']['id'] }}"
             data-desc-en="{{ $project['description']['en'] }}"
             data-desc-ar="{{ $project['description']['ar'] }}"
             data-tags="{{ json_encode($project['tags']) }}"
             onclick="openProjectModal(this)">
            <div class="project-image">
                <div class="project-image-placeholder">
                    <i class="{{ $project['icon'] }}"></i>
                </div>
                @if(!empty($project['github']) && $project['github'] !== '####' && $project['github'] !== '###')
                <div class="project-overlay">
                    <div class="project-overlay-actions">
                        <a href="{{ $project['github'] }}" target="_blank" rel="noopener" class="project-overlay-btn primary" onclick="event.stopPropagation()">
                            <i class="fab fa-github"></i> <span data-i18n="proj.view_code">Lihat Kode</span>
                        </a>
                    </div>
                </div>
                @endif
            </div>
            <div class="project-body">
                <div class="project-tags">
                    @php 
                        $maxTags = 3;
                        $totalTags = count($project['tags']);
                        $displayedTags = array_slice($project['tags'], 0, $maxTags);
                    @endphp
                    @foreach($displayedTags as $tag)
                    <span class="project-tag">{{ $tag }}</span>
                    @endforeach
                    @if($totalTags > $maxTags)
                    <span class="project-tag project-tag-more">+{{ $totalTags - $maxTags }} lainnya</span>
                    @endif
                </div>
                <h3>{{ $project['title'] }}</h3>
                <p data-lang-id="{{ $project['description']['id'] }}" data-lang-en="{{ $project['description']['en'] }}" data-lang-ar="{{ $project['description']['ar'] }}">
                    {{ \Illuminate\Support\Str::limit($project['description']['id'], 80) }}
                </p>
                
                <div style="margin-top: 20px; color: var(--accent-primary); font-size: 0.9rem; font-weight: 600; display:flex; align-items:center; gap: 8px;">
                    <i class="fas fa-arrow-right"></i> <span data-i18n="proj.view_details">Lihat Detail</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Project Modal -->
    <div id="projectModal" class="project-modal">
        <div class="project-modal-backdrop" onclick="closeProjectModal()"></div>
        <div class="project-modal-content">
            <button class="project-modal-close" onclick="closeProjectModal()"><i class="fas fa-times"></i></button>
            <div class="project-modal-header">
                <div class="project-modal-icon-wrapper">
                    <i id="modalProjectIcon" class="fas fa-code"></i>
                </div>
                <h2 id="modalProjectTitle">Project Title</h2>
            </div>
            <div class="project-modal-body">
                <div class="project-tags" id="modalProjectTags" style="margin-bottom: 24px; flex-wrap: wrap;">
                    <!-- Tags will be injected here -->
                </div>
                <p id="modalProjectDesc" data-lang-id="" data-lang-en="" data-lang-ar="">
                    Project Description
                </p>
                <div id="modalProjectAction" style="margin-top: 30px;">
                    <a href="#" id="modalProjectGithub" target="_blank" rel="noopener" class="btn btn-primary">
                        <i class="fab fa-github"></i> <span data-i18n="proj.view_code">Lihat Source Code</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
    function openProjectModal(element) {
        const title = element.getAttribute('data-title');
        const icon = element.getAttribute('data-icon');
        const descId = element.getAttribute('data-desc-id');
        const descEn = element.getAttribute('data-desc-en');
        const descAr = element.getAttribute('data-desc-ar');
        const github = element.getAttribute('data-github');
        const tags = JSON.parse(element.getAttribute('data-tags'));
        
        const modal = document.getElementById('projectModal');
        document.getElementById('modalProjectTitle').innerText = title;
        document.getElementById('modalProjectIcon').className = icon;
        
        const mDesc = document.getElementById('modalProjectDesc');
        mDesc.setAttribute('data-lang-id', descId);
        mDesc.setAttribute('data-lang-en', descEn);
        mDesc.setAttribute('data-lang-ar', descAr);
        
        const currentLang = localStorage.getItem('JawirLang') || 'id';
        if(currentLang === 'en') { mDesc.innerText = descEn; }
        else if(currentLang === 'ar') { mDesc.innerText = descAr; }
        else { mDesc.innerText = descId; }
        
        const mTags = document.getElementById('modalProjectTags');
        mTags.innerHTML = '';
        tags.forEach(tag => {
            let span = document.createElement('span');
            span.className = 'project-tag';
            span.innerText = tag;
            mTags.appendChild(span);
        });
        
        const mAction = document.getElementById('modalProjectAction');
        const mGithub = document.getElementById('modalProjectGithub');
        if (github && !github.includes('###')) {
            mAction.style.display = 'block';
            mGithub.href = github;
        } else {
            mAction.style.display = 'none';
        }
        
        modal.classList.add('active');
        document.body.classList.add('modal-open');
        document.body.style.overflow = 'hidden'; 
    }

    function closeProjectModal() {
        document.getElementById('projectModal').classList.remove('active');
        document.body.classList.remove('modal-open');
        document.body.style.overflow = 'auto';
    }

    // Initialize translations dynamically inside the modal when switching languages globally
    document.addEventListener('languageChanged', function(e) {
        const lang = e.detail;
        const mDesc = document.getElementById('modalProjectDesc');
        if(mDesc && document.getElementById('projectModal').classList.contains('active')) {
            const translated = mDesc.getAttribute('data-lang-'+lang);
            if(translated) { mDesc.innerText = translated; }
        }
    });

    // Close on ESC mapping
    document.addEventListener('keydown', function(event){
        if(event.key === "Escape"){
            closeProjectModal();
        }
    });
    </script>
</section>
@endsection
