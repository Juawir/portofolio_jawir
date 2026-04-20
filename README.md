# 🌟 Jawir's Interactive Portfolio (Steven Gerrard Portfolio)

Website portofolio pribadi modern yang dirancang untuk menampilkan ragam proyek keahlian dari pengembangan *Mobile* (Android/Flutter) hingga *Web Engineering* (Laravel/Native). Dibangun dengan sentuhan antarmuka premium berkonsep **Glassmorphism** dan dukungan penuh **Sistem Multibahasa** (Indonesia, Inggris, Arab).

## 🚀 Fitur Utama

- **Premium Dark Theme** & **Glassmorphism UI**: Efek tabir kaca (blur) pada *navbar* dan kartu dengan palet warna bernuansa Neon/Cyber (Aksen Gradien Ungu-Biru-Cyan).
- **Centralized Data Configurator**: Tidak perlu menyentuh logic HTML/Blade untuk menambah prestasi, biodata, atau proyek. Semua data diatur sepenuhnya melalui SATU file dinamis, yaitu `config/portfolio.php`.
- **Sistem Translasi Mulus (Multibahasa)**: Mampu berpindah bahasa (ID, EN, AR) *secara instan (real-time)* tanpa me-refresh jendela browser. Teks Arab sudah dioptimalkan otomatis menggunakan tata letak RTL (*Right-to-Left*).
- **Proyek Interaktif Pop-Up (Modal)**: Jelajahi detail proyek di dalam sistem portofolio tanpa berpindah halaman berkat Modal Cerdas yang terintegrasi penuh lintas terjemahan dan teknologi proyek.
- **Smart Contact Hub**: Formulir kontak sudah diarahkan sedemikian rupa agar membuka *mail client* lokal pengguna dengan pesan (subjek + isi) otomatis terisi (*Mailto protocol*). 

## 🛠️ Stack Teknologi

Proyek portofolio mutakhir ini diciptakan murni tanpa library CSS berat, memungkinkan performa yang luar biasa cepat dan kustomisasi tanpa batas.
- **Framework Utama**: Laravel 11 (Blade Template Engine).
- **Pewarnaan (Styling)**: Vanilla CSS3 `app.css` & `portfolio.css` (Native Custom Properties / CSS Variables).
- **Logika Frontend**: Vanilla JavaScript ES6 (`portfolio.js` dan `translations.js`).
- **Ikonografi**: FontAwesome 6 dan DevIcon.

## 📂 Panduan Konfigurasi Data (Cara Ubah Isi Portofolio)

Anda tidak perlu mengedit file *blade* apa pun untuk mengedit biodata pameran Anda. Cukup arahkan ke file sentral berikut:

**👉 `config/portfolio.php`**

Berikut poin-poin yang bisa Anda ganti dari sana:
1. `personal`: Ubah Nama, Alamat Email `stevenge1215@gmail.com`, Deskripsi Singkat, dan Link Sosial Media (yang akan muncul di Navbar & Footer).
2. `education` & `experience`: Isi parameter array (dalam 3 parameter bahasa: 'id', 'en', 'ar') untuk menambah sejarah magang, institusi dan organisasi kampus Anda.
3. `projects`: Tambahkan portofolio hasil karya (*Kategori, Ikon visual, Deskripsi 3 bahasa, Batas limit maksimal tag otomatis, dan tautan live Github API*).
4. `skills`: Modifikasi emblem keahlian (React Native, Laravel, dsb).

---

## 🏃 Memulai (Lokal / Development)

Karena website ini berfondasikan lingkungan Laravel, pastikan Anda telah memasang **Composer** dan **PHP 8.2+**.

1. **Clone repositori**
   ```bash
   git clone https://github.com/Juawir/portofolio_jawir.git
   cd portofolio_jawir
   ```

2. **Pasang Dependensi Backend**
   ```bash
   composer install
   ```
   *(Abaikan `npm install` karena proyek ini tidak menggunakan Vite/Tailwind, semua raw JS & CSS disertakan di map `public`)*.

3. **Duplikat Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Jalankan Aplikasi**
   ```bash
   php artisan serve
   ```
   *Buka http://127.0.0.1:8000 dan saksikan portofolionya bekerja!*

---
**Crafted with ❤️ and Laravel by Steven Gerrard**
