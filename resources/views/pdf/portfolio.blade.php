<!DOCTYPE html>
<html lang="{{ $lang }}"{!! $lang === 'ar' ? ' dir="rtl"' : '' !!}>
<head>
    <meta charset="UTF-8">
    <title>Portfolio - {{ $personal['name'] }}</title>
    <style>
        /* ========== RESET & BASE ========== */
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'DejaVu Sans', sans-serif;
            font-size: 10pt;
            color: #1e293b;
            line-height: 1.6;
            background: #ffffff;
        }

        /* ========== HEADER / HERO ========== */
        .header {
            background: linear-gradient(135deg, #0f172a 0%, #1e3a5f 50%, #0ea5e9 100%);
            color: #ffffff;
            padding: 35px 40px;
            position: relative;
            overflow: hidden;
        }

        .header::after {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(14, 165, 233, 0.15);
        }

        .header-content {
            display: table;
            width: 100%;
        }

        .header-photo {
            display: table-cell;
            width: 100px;
            vertical-align: middle;
            padding-right: 25px;
        }

        .header-photo img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            border: 3px solid rgba(255,255,255,0.4);
            object-fit: cover;
        }

        .header-info {
            display: table-cell;
            vertical-align: middle;
        }

        .header-name {
            font-size: 22pt;
            font-weight: 700;
            letter-spacing: -0.5px;
            margin-bottom: 3px;
        }

        .header-title {
            font-size: 11pt;
            color: #7dd3fc;
            font-weight: 400;
            margin-bottom: 10px;
        }

        .header-contacts {
            font-size: 8.5pt;
            color: #cbd5e1;
            line-height: 1.8;
        }

        .header-contacts span {
            margin-right: 15px;
        }

        .contact-icon {
            display: inline-block;
            width: 14px;
            height: 14px;
            background: rgba(255,255,255,0.2);
            border-radius: 3px;
            text-align: center;
            line-height: 14px;
            font-size: 7pt;
            margin-right: 4px;
            color: #7dd3fc;
        }

        /* ========== SECTION STYLES ========== */
        .section {
            padding: 20px 40px 10px;
        }

        .section-title {
            font-size: 13pt;
            font-weight: 700;
            color: #0f172a;
            border-bottom: 2.5px solid #0ea5e9;
            padding-bottom: 5px;
            margin-bottom: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: inline-block;
        }

        .section-title-icon {
            display: inline-block;
            width: 22px;
            height: 22px;
            background: linear-gradient(135deg, #0ea5e9, #6366f1);
            border-radius: 5px;
            text-align: center;
            line-height: 22px;
            color: #fff;
            font-size: 10pt;
            margin-right: 8px;
            vertical-align: middle;
        }

        /* ========== ABOUT ========== */
        .about-text {
            font-size: 9.5pt;
            color: #475569;
            line-height: 1.7;
            text-align: justify;
        }

        /* ========== SKILLS ========== */
        .skills-grid {
            width: 100%;
        }

        .skills-grid td {
            width: 20%;
            padding: 6px 8px;
            vertical-align: top;
        }

        .skill-pill {
            background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
            border: 1px solid #bae6fd;
            border-radius: 6px;
            padding: 8px 10px;
            text-align: center;
        }

        .skill-pill-name {
            font-size: 9pt;
            font-weight: 700;
            color: #0c4a6e;
        }

        .skill-pill-detail {
            font-size: 7.5pt;
            color: #64748b;
            margin-top: 2px;
        }

        /* ========== EDUCATION ========== */
        .edu-item {
            margin-bottom: 12px;
            padding-left: 15px;
            border-left: 3px solid #0ea5e9;
        }

        .edu-degree {
            font-size: 10pt;
            font-weight: 700;
            color: #0f172a;
        }

        .edu-school {
            font-size: 9pt;
            color: #6366f1;
            font-weight: 600;
        }

        .edu-year {
            font-size: 8pt;
            color: #94a3b8;
            margin-bottom: 3px;
        }

        .edu-desc {
            font-size: 8.5pt;
            color: #64748b;
        }

        /* ========== EXPERIENCE ========== */
        .exp-item {
            margin-bottom: 14px;
            padding-left: 15px;
            border-left: 3px solid #6366f1;
        }

        .exp-position {
            font-size: 10pt;
            font-weight: 700;
            color: #0f172a;
        }

        .exp-badge {
            display: inline-block;
            background: linear-gradient(135deg, #6366f1, #818cf8);
            color: #fff;
            font-size: 7pt;
            padding: 2px 8px;
            border-radius: 10px;
            font-weight: 600;
            margin-left: 6px;
            vertical-align: middle;
        }

        .exp-company {
            font-size: 9pt;
            color: #6366f1;
            font-weight: 600;
        }

        .exp-date {
            font-size: 8pt;
            color: #94a3b8;
            margin-bottom: 3px;
        }

        .exp-desc {
            font-size: 8.5pt;
            color: #64748b;
            text-align: justify;
        }

        .exp-skills {
            margin-top: 4px;
        }

        .exp-skill-tag {
            display: inline-block;
            background: #f1f5f9;
            border: 1px solid #e2e8f0;
            color: #475569;
            font-size: 7pt;
            padding: 2px 7px;
            border-radius: 4px;
            margin-right: 3px;
            margin-top: 2px;
        }

        /* ========== PROJECTS ========== */
        .project-item {
            margin-bottom: 12px;
            padding: 10px 14px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            border-left: 4px solid #0ea5e9;
        }

        .project-title {
            font-size: 10pt;
            font-weight: 700;
            color: #0f172a;
        }

        .project-category {
            display: inline-block;
            background: #dbeafe;
            color: #1e40af;
            font-size: 7pt;
            padding: 1px 7px;
            border-radius: 8px;
            font-weight: 600;
            margin-left: 5px;
            text-transform: uppercase;
        }

        .project-desc {
            font-size: 8.5pt;
            color: #64748b;
            margin-top: 3px;
        }

        .project-tags {
            margin-top: 4px;
        }

        .project-tag {
            display: inline-block;
            background: linear-gradient(135deg, #ede9fe, #ddd6fe);
            border: 1px solid #c4b5fd;
            color: #5b21b6;
            font-size: 7pt;
            padding: 2px 7px;
            border-radius: 4px;
            margin-right: 3px;
            margin-top: 2px;
            font-weight: 600;
        }

        .project-github {
            font-size: 8pt;
            color: #0ea5e9;
            text-decoration: none;
            margin-top: 3px;
            display: inline-block;
        }

        /* ========== ORGANIZATIONS ========== */
        .org-item {
            margin-bottom: 10px;
            padding-left: 15px;
            border-left: 3px solid #10b981;
        }

        .org-name {
            font-size: 10pt;
            font-weight: 700;
            color: #0f172a;
        }

        .org-role {
            font-size: 9pt;
            color: #10b981;
            font-weight: 600;
        }

        .org-period {
            font-size: 8pt;
            color: #94a3b8;
            margin-bottom: 3px;
        }

        .org-desc {
            font-size: 8.5pt;
            color: #64748b;
        }

        /* ========== FOOTER ========== */
        .footer {
            text-align: center;
            padding: 15px 40px;
            font-size: 7.5pt;
            color: #94a3b8;
            border-top: 1px solid #e2e8f0;
            margin-top: 10px;
        }

        .footer a {
            color: #0ea5e9;
            text-decoration: none;
        }

        /* ========== PAGE BREAK HELPER ========== */
        .page-break {
            page-break-before: always;
        }

        /* ========== SOCIAL LINKS ========== */
        .social-links {
            margin-top: 6px;
        }

        .social-link {
            display: inline-block;
            color: #cbd5e1;
            font-size: 8pt;
            margin-right: 12px;
            text-decoration: none;
        }

        .social-link:hover {
            color: #7dd3fc;
        }
    </style>
</head>
<body>

    {{-- ===== HEADER ===== --}}
    <div class="header">
        <div class="header-content">
            @if($photoBase64)
            <div class="header-photo">
                <img src="{{ $photoBase64 }}" alt="{{ $personal['name'] }}">
            </div>
            @endif
            <div class="header-info">
                <div class="header-name">{{ $personal['name'] }}</div>
                <div class="header-title">{{ $personal['title'] }}</div>
                <div class="header-contacts">
                    <span>✉ {{ $personal['email'] }}</span>
                    <span>☎ {{ $personal['phone'] }}</span>
                    <br>
                    <span>📍 {{ $personal['address'] }}</span>
                    <span>🎓 {{ $personal['university'] }}</span>
                </div>
                @if(!empty($personal['social']))
                <div class="social-links">
                    @foreach($personal['social'] as $platform => $url)
                        @if(!empty($url))
                        <a href="{{ $url }}" class="social-link">{{ ucfirst($platform) }}</a>
                        @endif
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>

    {{-- ===== ABOUT ===== --}}
    <div class="section">
        <div class="section-title">
            <span class="section-title-icon">★</span>
            @if($lang === 'ar') عنّي @elseif($lang === 'en') About Me @else Tentang Saya @endif
        </div>
        <p class="about-text">
            {{ $personal['about'][$lang] ?? $personal['about']['id'] }}
        </p>
        <p class="about-text" style="margin-top: 6px;">
            {{ $personal['about_short'][$lang] ?? $personal['about_short']['id'] }}
        </p>
    </div>

    {{-- ===== SKILLS ===== --}}
    <div class="section">
        <div class="section-title">
            <span class="section-title-icon">⚡</span>
            @if($lang === 'ar') المهارات @elseif($lang === 'en') Skills & Expertise @else Skills & Keahlian @endif
        </div>
        <table class="skills-grid" cellspacing="0" cellpadding="0">
            @foreach(array_chunk($skills, 5) as $row)
            <tr>
                @foreach($row as $skill)
                <td>
                    <div class="skill-pill">
                        <div class="skill-pill-name">{{ $skill['name'] }}</div>
                        <div class="skill-pill-detail">{{ $skill['detail'] }}</div>
                    </div>
                </td>
                @endforeach
                {{-- Fill empty cells --}}
                @for($i = count($row); $i < 5; $i++)
                <td></td>
                @endfor
            </tr>
            @endforeach
        </table>
    </div>

    {{-- ===== EDUCATION ===== --}}
    <div class="section">
        <div class="section-title">
            <span class="section-title-icon">🎓</span>
            @if($lang === 'ar') التعليم @elseif($lang === 'en') Education @else Pendidikan @endif
        </div>
        @foreach($education as $edu)
        <div class="edu-item">
            <div class="edu-degree">{{ $edu['degree'][$lang] ?? $edu['degree']['id'] }}</div>
            <div class="edu-school">{{ $edu['school'] }}</div>
            <div class="edu-year">📅 {{ $edu['year'] }}</div>
            <div class="edu-desc">{{ $edu['description'][$lang] ?? $edu['description']['id'] }}</div>
        </div>
        @endforeach
    </div>

    {{-- ===== EXPERIENCE ===== --}}
    <div class="section page-break">
        <div class="section-title">
            <span class="section-title-icon">💼</span>
            @if($lang === 'ar') الخبرة العملية @elseif($lang === 'en') Work Experience @else Pengalaman Kerja @endif
        </div>
        @foreach($experience as $exp)
        <div class="exp-item">
            <div>
                <span class="exp-position">{{ $exp['position'][$lang] ?? $exp['position']['id'] }}</span>
                <span class="exp-badge">{{ $exp['badge'][$lang] ?? $exp['badge']['id'] }}</span>
            </div>
            <div class="exp-company">{{ $exp['company'] }}</div>
            <div class="exp-date">📅 {{ $exp['date'][$lang] ?? $exp['date']['id'] }}</div>
            <div class="exp-desc">{{ $exp['description'][$lang] ?? $exp['description']['id'] }}</div>
            @if(!empty($exp['skills']))
            <div class="exp-skills">
                @foreach($exp['skills'] as $skill)
                <span class="exp-skill-tag">{{ $skill }}</span>
                @endforeach
            </div>
            @endif
        </div>
        @endforeach
    </div>

    {{-- ===== PROJECTS ===== --}}
    <div class="section">
        <div class="section-title">
            <span class="section-title-icon">🚀</span>
            @if($lang === 'ar') المشاريع @elseif($lang === 'en') Projects @else Proyek @endif
        </div>
        @foreach($projects as $project)
        <div class="project-item">
            <div>
                <span class="project-title">{{ $project['title'] }}</span>
                <span class="project-category">{{ $project['category'] }}</span>
            </div>
            <div class="project-desc">{{ $project['description'][$lang] ?? $project['description']['id'] }}</div>
            <div class="project-tags">
                @foreach($project['tags'] as $tag)
                <span class="project-tag">{{ $tag }}</span>
                @endforeach
            </div>
            @if(!empty($project['github']) && $project['github'] !== '####' && $project['github'] !== '###')
            <a href="{{ $project['github'] }}" class="project-github">→ {{ $project['github'] }}</a>
            @endif
        </div>
        @endforeach
    </div>

    {{-- ===== ORGANIZATIONS ===== --}}
    <div class="section">
        <div class="section-title">
            <span class="section-title-icon">👥</span>
            @if($lang === 'ar') المنظمات @elseif($lang === 'en') Organizations @else Organisasi @endif
        </div>
        @foreach($organizations as $org)
        <div class="org-item">
            <div class="org-name">
                @if(is_array($org['name']))
                    {{ $org['name'][$lang] ?? $org['name']['id'] }}
                @else
                    {{ $org['name'] }}
                @endif
            </div>
            <div class="org-role">{{ $org['role'][$lang] ?? $org['role']['id'] }}</div>
            <div class="org-period">📅 {{ $org['period'] }}</div>
            <div class="org-desc">{{ $org['description'][$lang] ?? $org['description']['id'] }}</div>
        </div>
        @endforeach
    </div>

    {{-- ===== FOOTER ===== --}}
    <div class="footer">
        @if($lang === 'ar')
            تم إنشاء هذه المحفظة تلقائيًا من <a href="{{ url('/') }}">{{ url('/') }}</a> • {{ now()->format('d M Y') }}
        @elseif($lang === 'en')
            This portfolio was auto-generated from <a href="{{ url('/') }}">{{ url('/') }}</a> • {{ now()->format('d M Y') }}
        @else
            Portfolio ini di-generate otomatis dari <a href="{{ url('/') }}">{{ url('/') }}</a> • {{ now()->format('d M Y') }}
        @endif
    </div>

</body>
</html>
