@extends('layouts.app')

@section('title', 'Kontak - ' . config('portfolio.personal.name'))

@section('content')
@php
    $p = config('portfolio.personal');
    $social = $p['social'];
@endphp

<section class="section">
    <div class="section-header">
        <div class="section-badge"><i class="fas fa-envelope"></i> <span data-i18n="contact.badge">Kontak</span></div>
        <h2 class="section-title" data-i18n="contact.title">Hubungi Saya</h2>
        <p class="section-subtitle" data-i18n="contact.subtitle">Tertarik untuk bekerja sama? Jangan ragu untuk menghubungi saya!</p>
    </div>

    <div class="contact-grid">
        <!-- Contact Info -->
        <div class="contact-info-section fade-in-left">
            <h3 data-i18n="contact.connect">Mari Terhubung</h3>
            <p data-i18n="contact.connect_desc">
                Saya selalu terbuka untuk peluang baru, kolaborasi menarik, atau sekadar ngobrol tentang teknologi.
                Silakan hubungi saya melalui salah satu channel di bawah ini.
            </p>

            <!-- Contact Items -->
            <div class="contact-items">
                <a href="mailto:{{ $p['email'] }}" class="contact-item">
                    <div class="contact-item-icon"><i class="fas fa-envelope"></i></div>
                    <div class="contact-item-info">
                        <h4 data-i18n="contact.lbl_email">Email</h4>
                        <p>{{ $p['email'] }}</p>
                    </div>
                </a>

                <a href="tel:{{ str_replace([' ', '-'], '', $p['phone']) }}" class="contact-item">
                    <div class="contact-item-icon"><i class="fas fa-phone"></i></div>
                    <div class="contact-item-info">
                        <h4 data-i18n="contact.lbl_phone">Telepon</h4>
                        <p>{{ $p['phone'] }}</p>
                    </div>
                </a>

                <div class="contact-item">
                    <div class="contact-item-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="contact-item-info">
                        <h4 data-i18n="contact.lbl_addr">Alamat</h4>
                        <p>{{ $p['address'] }}</p>
                    </div>
                </div>
            </div>

            <!-- Social Media -->
            <div class="social-media-section">
                <h4 data-i18n="contact.social">Social Media</h4>
                <div class="social-grid">
                    @if(!empty($social['github']))
                    <a href="{{ $social['github'] }}" target="_blank" rel="noopener" class="social-card github">
                        <i class="fab fa-github"></i>
                        <span>GitHub</span>
                    </a>
                    @endif
                    @if(!empty($social['linkedin']))
                    <a href="{{ $social['linkedin'] }}" target="_blank" rel="noopener" class="social-card linkedin">
                        <i class="fab fa-linkedin-in"></i>
                        <span>LinkedIn</span>
                    </a>
                    @endif
                    @if(!empty($social['instagram']))
                    <a href="{{ $social['instagram'] }}" target="_blank" rel="noopener" class="social-card instagram">
                        <i class="fab fa-instagram"></i>
                        <span>Instagram</span>
                    </a>
                    @endif
                    @if(!empty($social['whatsapp']))
                    <a href="{{ $social['whatsapp'] }}" target="_blank" rel="noopener" class="social-card whatsapp">
                        <i class="fab fa-whatsapp"></i>
                        <span>WhatsApp</span>
                    </a>
                    @endif
                    <a href="mailto:{{ $p['email'] }}" class="social-card email">
                        <i class="fas fa-envelope"></i>
                        <span>Email</span>
                    </a>
                    @if(!empty($social['telegram']))
                    <a href="{{ $social['telegram'] }}" target="_blank" rel="noopener" class="social-card telegram">
                        <i class="fab fa-telegram-plane"></i>
                        <span>Telegram</span>
                    </a>
                    @endif
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form-section fade-in-right">
            <h3><i class="fas fa-paper-plane"></i> <span data-i18n="contact.form_title">Kirim Pesan</span></h3>

            <form onsubmit="handleContactForm(event, '{{ $p['email'] }}')" id="contactForm">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label for="name" data-i18n="contact.lbl_name">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama Anda" data-i18n="contact.ph_name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" data-i18n="contact.lbl_email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="email@example.com" data-i18n="contact.ph_email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="subject" data-i18n="contact.lbl_subject">Subjek</label>
                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Perihal pesan Anda" data-i18n="contact.ph_subject" required>
                </div>

                <div class="form-group">
                    <label for="message" data-i18n="contact.lbl_msg">Pesan</label>
                    <textarea id="message" name="message" class="form-control" placeholder="Tulis pesan Anda di sini..." data-i18n="contact.ph_msg" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-submit" data-i18n-html="contact.btn_send">
                    <i class="fas fa-paper-plane"></i> Kirim Pesan
                </button>
            </form>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section" style="background: var(--bg-secondary); text-align: center;">
    <div class="container">
        <div class="section-badge"><i class="fas fa-handshake"></i> <span data-i18n="contact.cta_badge">Kolaborasi</span></div>
        <h2 class="section-title" style="margin-top: 16px;" data-i18n="contact.cta_title">Siap Untuk Bekerja Sama?</h2>
        <p class="section-subtitle" style="margin-bottom: 32px;" data-i18n="contact.cta_desc">
            Saya selalu antusias untuk mengerjakan proyek baru dan menarik.
            Mari berdiskusi tentang bagaimana kita bisa berkolaborasi!
        </p>
        <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
            <a href="mailto:{{ $p['email'] }}" class="btn btn-primary" data-i18n-html="contact.btn_email">
                <i class="fas fa-envelope"></i> Email Saya
            </a>
            @if(!empty($social['whatsapp']))
            <a href="{{ $social['whatsapp'] }}" target="_blank" rel="noopener" class="btn btn-outline">
                <i class="fab fa-whatsapp"></i> WhatsApp
            </a>
            @endif
        </div>
    </div>
</section>
@endsection
