<!DOCTYPE html>
<html lang="{{ $lang }}"{!! $lang === 'ar' ? ' dir="rtl"' : '' !!}>
<head>
    <meta charset="UTF-8">
    <title>Portfolio - {{ $personal['name'] }}</title>
    <style>
        /* ========== DOMPDF SPECIFIC RESETS ========== */
        @page {
            margin: 40px 50px; /* Use native page margin for perfect DOMPDF bounding box */
        }

        body {
            font-family: Arial, Helvetica, sans-serif; /* Explicit fallback order */
            font-size: 10pt;
            color: #111827; 
            line-height: 1.4; /* Tighter, more consistent line height */
            background: #ffffff;
            margin: 0;
            padding: 0;
        }

        h1, h2, h3, h4, h5, h6, p, div, span {
            margin: 0;
            padding: 0;
        }

        /* ========== HEADER ========== */
        .header-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }

        .header-info-cell {
            text-align: center;
            vertical-align: top;
        }

        .header-name {
            font-size: 24pt;
            font-weight: bold;
            color: #000000;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 4px;
        }

        .header-title {
            font-size: 11pt;
            color: #4b5563;
            text-transform: uppercase;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .header-contacts {
            font-size: 9.5pt;
            color: #374151;
        }

        .contact-separator {
            margin: 0 5px;
            color: #9ca3af;
        }

        /* ========== SECTION TITLE ========== */
        .section {
            margin-bottom: 18px;
            width: 100%;
        }

        .section-title {
            font-size: 11.5pt;
            font-weight: bold;
            color: #000000;
            border-bottom: 1px solid #000000;
            padding-bottom: 4px;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* ========== TEXT CONTENT ========== */
        .about-text {
            font-size: 10pt;
            color: #1f2937;
            text-align: left; /* Justify causes awkward spacing in DOMPDF */
            margin-bottom: 5px;
            line-height: 1.5;
        }

        /* ========== ITEM ROWS (EXP, EDU, PROJ) ========== */
        .item-container {
            margin-bottom: 14px;
        }

        .item-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 2px;
        }

        .item-table td {
            vertical-align: top;
            padding: 0;
        }

        .item-title-cell {
            text-align: left;
            width: 75%;
        }

        .item-date-cell {
            text-align: right;
            font-size: 9.5pt;
            color: #111827;
            width: 25%;
        }

        .item-title {
            font-size: 10.5pt;
            font-weight: bold;
            color: #000000;
        }

        .badge {
            font-size: 8.5pt;
            color: #4b5563;
            font-style: italic;
            font-weight: normal;
        }

        .item-subtitle {
            font-size: 10pt;
            font-style: italic;
            color: #374151;
            margin-bottom: 4px;
        }

        .item-desc {
            font-size: 10pt;
            color: #374151;
            text-align: left;
            line-height: 1.5;
        }

        .skills-list {
            margin-top: 3px;
            font-size: 9.5pt;
            color: #4b5563;
        }

        .skills-list strong {
            color: #000000;
        }

        /* ========== SKILLS SECTION ========== */
        .skills-table {
            width: 100%;
            border-collapse: collapse;
        }

        .skills-table td {
            vertical-align: top;
            padding: 3px 0;
            font-size: 10pt;
            color: #1f2937;
        }

        .skill-category {
            font-weight: bold;
            color: #000000;
            width: 200px;
        }
        
        .project-link {
            font-size: 9pt;
            color: #111827;
            text-decoration: underline;
            margin-left: 8px;
            font-style: italic;
            font-weight: normal;
        }

    </style>
</head>
<body>

    {{-- ===== HEADER ===== --}}
    <table class="header-table" cellpadding="0" cellspacing="0">
        <tr>
            <td class="header-info-cell">
                <div class="header-name">{{ $personal['name'] }}</div>
                <div class="header-title">{{ $personal['title'] }}</div>
                <div class="header-contacts">
                    {{ $personal['email'] }}
                    <span class="contact-separator">|</span>
                    {{ $personal['phone'] }}
                    <span class="contact-separator">|</span>
                    {{ $personal['location'] }}
                    @if(!empty($personal['social']['linkedin']))
                    <span class="contact-separator">|</span>
                    {{ str_replace(['https://www.', 'https://'], '', $personal['social']['linkedin']) }}
                    @endif
                    @if(!empty($personal['social']['github']))
                    <span class="contact-separator">|</span>
                    {{ str_replace(['https://www.', 'https://'], '', $personal['social']['github']) }}
                    @endif
                </div>
            </td>
        </tr>
    </table>

    {{-- ===== PROFILE / SUMMARY ===== --}}
    <div class="section">
        <div class="section-title">
            @if($lang === 'ar') ملخص مهني @elseif($lang === 'en') Professional Summary @else Ringkasan Profesional @endif
        </div>
        <div class="about-text">
            {{ $personal['about'][$lang] ?? $personal['about']['id'] }}
            {{ $personal['about_short'][$lang] ?? $personal['about_short']['id'] }}
        </div>
    </div>

    {{-- ===== EXPERIENCE ===== --}}
    <div class="section">
        <div class="section-title">
            @if($lang === 'ar') الخبرة العملية @elseif($lang === 'en') Professional Experience @else Pengalaman Kerja @endif
        </div>
        @foreach($experience as $exp)
        <div class="item-container">
            <table class="item-table" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="item-title-cell">
                        <span class="item-title">{{ $exp['position'][$lang] ?? $exp['position']['id'] }}</span>
                        @if(isset($exp['badge']))
                        <span class="badge">({{ $exp['badge'][$lang] ?? $exp['badge']['id'] }})</span>
                        @endif
                    </td>
                    <td class="item-date-cell">
                        {{ $exp['date'][$lang] ?? $exp['date']['id'] }}
                    </td>
                </tr>
            </table>
            <div class="item-subtitle">{{ $exp['company'] }}</div>
            <div class="item-desc">
                - {{ $exp['description'][$lang] ?? $exp['description']['id'] }}
            </div>
            @if(!empty($exp['skills']))
            <div class="skills-list">
                <strong>Tech Stack:</strong> {{ implode(', ', $exp['skills']) }}
            </div>
            @endif
        </div>
        @endforeach
    </div>

    {{-- ===== PROJECTS ===== --}}
    <div class="section">
        <div class="section-title">
            @if($lang === 'ar') المشاريع @elseif($lang === 'en') Selected Projects @else Proyek Pilihan @endif
        </div>
        @foreach($projects as $project)
        <div class="item-container">
            <table class="item-table" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="item-title-cell">
                        <span class="item-title">{{ $project['title'] }}</span>
                        @if(!empty($project['github']) && $project['github'] !== '####' && $project['github'] !== '###')
                        <a href="{{ $project['github'] }}" class="project-link">Source Code</a>
                        @endif
                    </td>
                    <td class="item-date-cell">
                        {{ $project['category'] }}
                    </td>
                </tr>
            </table>
            <div class="item-desc">
                - {{ $project['description'][$lang] ?? $project['description']['id'] }}
            </div>
            <div class="skills-list">
                <strong>Technologies:</strong> {{ implode(', ', $project['tags']) }}
            </div>
        </div>
        @endforeach
    </div>

    {{-- ===== EDUCATION ===== --}}
    <div class="section">
        <div class="section-title">
            @if($lang === 'ar') التعليم @elseif($lang === 'en') Education @else Pendidikan @endif
        </div>
        @foreach($education as $edu)
        <div class="item-container">
            <table class="item-table" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="item-title-cell">
                        <span class="item-title">{{ $edu['school'] }}</span>
                    </td>
                    <td class="item-date-cell">
                        {{ $edu['year'] }}
                    </td>
                </tr>
            </table>
            <div class="item-subtitle">{{ $edu['degree'][$lang] ?? $edu['degree']['id'] }}</div>
            <div class="item-desc">
                - {{ $edu['description'][$lang] ?? $edu['description']['id'] }}
            </div>
        </div>
        @endforeach
    </div>
    
    {{-- ===== ORGANIZATIONS ===== --}}
    <div class="section">
        <div class="section-title">
            @if($lang === 'ar') المنظمات @elseif($lang === 'en') Leadership & Involvement @else Kepemimpinan & Organisasi @endif
        </div>
        @foreach($organizations as $org)
        <div class="item-container">
            <table class="item-table" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="item-title-cell">
                        <span class="item-title">
                            @if(is_array($org['name']))
                                {{ $org['name'][$lang] ?? $org['name']['id'] }}
                            @else
                                {{ $org['name'] }}
                            @endif
                        </span>
                    </td>
                    <td class="item-date-cell">
                        {{ $org['period'] }}
                    </td>
                </tr>
            </table>
            <div class="item-subtitle">{{ $org['role'][$lang] ?? $org['role']['id'] }}</div>
            <div class="item-desc">
                - {{ $org['description'][$lang] ?? $org['description']['id'] }}
            </div>
        </div>
        @endforeach
    </div>

    {{-- ===== SKILLS ========== --}}
    <div class="section">
        <div class="section-title">
            @if($lang === 'ar') المهارات التقنية @elseif($lang === 'en') Technical Skills @else Keahlian Teknis @endif
        </div>
        <table class="skills-table" cellpadding="0" cellspacing="0">
            @foreach($skills as $skill)
            <tr>
                <td class="skill-category">{{ $skill['name'] }}</td>
                <td>{{ $skill['detail'] }}</td>
            </tr>
            @endforeach
        </table>
    </div>

</body>
</html>
