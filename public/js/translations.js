/* ============================================
   TRANSLATIONS - Multi Language Support
   ============================================ */

const translations = {
    // --- NAVIGATION ---
    'nav.home':       { id: 'Home',        en: 'Home',        ar: 'الرئيسية' },
    'nav.projects':   { id: 'Proyek',      en: 'Projects',    ar: 'المشاريع' },
    'nav.experience': { id: 'Pengalaman',  en: 'Experience',  ar: 'الخبرات' },
    'nav.contact':    { id: 'Kontak',      en: 'Contact',     ar: 'اتصل بنا' },

    // --- HOME: HERO ---
    'hero.greeting':     { id: 'Halo, saya',              en: 'Hello, I\'m',              ar: 'مرحبًا، أنا' },
    'hero.btn_projects': { id: 'Lihat Proyek',             en: 'View Projects',            ar: 'عرض المشاريع' },
    'hero.btn_contact':  { id: 'Hubungi Saya',             en: 'Contact Me',               ar: 'اتصل بي' },
    'hero.stat_projects':{ id: 'Proyek',                   en: 'Projects',                 ar: 'مشاريع' },
    'hero.stat_exp':     { id: 'Pengalaman',               en: 'Experience',               ar: 'خبرات' },
    'hero.stat_skills':  { id: 'Skills',                   en: 'Skills',                   ar: 'مهارات' },
    'hero.badge_web':    { id: 'Web Developer',            en: 'Web Developer',            ar: 'مطور ويب' },
    'hero.badge_mobile': { id: 'Mobile Dev',               en: 'Mobile Dev',               ar: 'مطور هاتف' },
    'hero.badge_edu':    { id: 'S1 Informatika',           en: 'CS Student',               ar: 'طالب معلوماتية' },

    // --- HOME: ABOUT ---
    'about.badge':       { id: 'Tentang Saya',             en: 'About Me',                 ar: 'عنّي' },
    'about.title':       { id: 'Mengenal Lebih Dekat',     en: 'Get To Know Me',           ar: 'تعرف عليّ أكثر' },
    'about.subtitle':    { id: 'Seorang developer yang bersemangat dan selalu ingin belajar hal baru', en: 'A passionate developer who always wants to learn new things', ar: 'مطور متحمس يسعى دائمًا لتعلم أشياء جديدة' },
    'about.who':         { id: 'Siapa Saya?',              en: 'Who Am I?',                 ar: 'من أنا؟' },
    'about.skills_title':{ id: 'Skills & Keahlian',        en: 'Skills & Expertise',        ar: 'المهارات والخبرات' },
    'about.lbl_location':{ id: 'Lokasi',                   en: 'Location',                  ar: 'الموقع' },
    'about.lbl_edu':     { id: 'Pendidikan',               en: 'Education',                 ar: 'التعليم' },
    'about.lbl_email':   { id: 'Email',                    en: 'Email',                     ar: 'البريد الإلكتروني' },
    'about.lbl_phone':   { id: 'Telepon',                  en: 'Phone',                     ar: 'الهاتف' },

    // --- HOME: EDUCATION ---
    'edu.badge':         { id: 'Pendidikan',               en: 'Education',                 ar: 'التعليم' },
    'edu.title':         { id: 'Riwayat Pendidikan',       en: 'Education History',         ar: 'التاريخ التعليمي' },
    'edu.subtitle':      { id: 'Perjalanan akademik yang membentuk saya menjadi developer', en: 'The academic journey that shaped me as a developer', ar: 'الرحلة الأكاديمية التي شكّلتني كمطور' },

    // --- PROJECTS ---
    'proj.badge':        { id: 'Portfolio',                 en: 'Portfolio',                 ar: 'محفظة الأعمال' },
    'proj.title':        { id: 'Proyek Saya',              en: 'My Projects',               ar: 'مشاريعي' },
    'proj.subtitle':     { id: 'Koleksi proyek yang telah saya kerjakan, dari web hingga mobile development', en: 'Collection of projects I have worked on, from web to mobile development', ar: 'مجموعة المشاريع التي عملت عليها، من تطوير الويب إلى تطوير الهاتف' },
    'proj.filter_all':   { id: 'Semua',                    en: 'All',                       ar: 'الكل' },
    'proj.filter_web':   { id: 'Web',                      en: 'Web',                       ar: 'ويب' },
    'proj.filter_mobile':{ id: 'Mobile',                   en: 'Mobile',                    ar: 'هاتف' },
    'proj.filter_other': { id: 'Lainnya',                  en: 'Others',                    ar: 'أخرى' },
    'proj.view_code':    { id: 'Lihat Kode',               en: 'View Code',                 ar: 'عرض الكود' },

    // --- EXPERIENCE ---
    'exp.badge':         { id: 'Karir',                    en: 'Career',                    ar: 'المسيرة المهنية' },
    'exp.title':         { id: 'Pengalaman Kerja',         en: 'Work Experience',            ar: 'الخبرة العملية' },
    'exp.subtitle':      { id: 'Perjalanan profesional saya dalam dunia teknologi', en: 'My professional journey in the world of technology', ar: 'رحلتي المهنية في عالم التكنولوجيا' },
    'exp.org_badge':     { id: 'Organisasi',               en: 'Organizations',              ar: 'المنظمات' },
    'exp.org_title':     { id: 'Pengalaman Organisasi',    en: 'Organization Experience',    ar: 'خبرة المنظمات' },
    'exp.org_subtitle':  { id: 'Aktif berkontribusi dalam berbagai organisasi kampus', en: 'Actively contributing to various campus organizations', ar: 'المساهمة النشطة في المنظمات الجامعية المختلفة' },
    'exp.skill_badge':   { id: 'Kemampuan',                en: 'Abilities',                  ar: 'القدرات' },
    'exp.skill_title':   { id: 'Tech Stack & Skills',     en: 'Tech Stack & Skills',        ar: 'التقنيات والمهارات' },
    'exp.skill_subtitle':{ id: 'Teknologi dan keahlian yang saya kuasai', en: 'Technologies and skills I have mastered', ar: 'التقنيات والمهارات التي أتقنها' },

    // --- CONTACT ---
    'contact.badge':     { id: 'Kontak',                   en: 'Contact',                    ar: 'اتصل بنا' },
    'contact.title':     { id: 'Hubungi Saya',             en: 'Contact Me',                 ar: 'تواصل معي' },
    'contact.subtitle':  { id: 'Tertarik untuk bekerja sama? Jangan ragu untuk menghubungi saya!', en: 'Interested in working together? Don\'t hesitate to reach out!', ar: 'مهتم بالتعاون؟ لا تتردد في التواصل!' },
    'contact.connect':   { id: 'Mari Terhubung',           en: 'Let\'s Connect',              ar: 'لنتواصل' },
    'contact.connect_desc': { id: 'Saya selalu terbuka untuk peluang baru, kolaborasi menarik, atau sekadar ngobrol tentang teknologi. Silakan hubungi saya melalui salah satu channel di bawah ini.', en: 'I am always open to new opportunities, exciting collaborations, or just chatting about technology. Feel free to reach me through any channel below.', ar: 'أنا دائمًا منفتح على الفرص الجديدة والتعاون المثير أو مجرد الدردشة حول التكنولوجيا.' },
    'contact.lbl_email': { id: 'Email',                    en: 'Email',                       ar: 'البريد الإلكتروني' },
    'contact.lbl_phone': { id: 'Telepon',                  en: 'Phone',                       ar: 'الهاتف' },
    'contact.lbl_addr':  { id: 'Alamat',                   en: 'Address',                     ar: 'العنوان' },
    'contact.social':    { id: 'Social Media',             en: 'Social Media',                ar: 'وسائل التواصل' },
    'contact.form_title':{ id: 'Kirim Pesan',              en: 'Send Message',                ar: 'إرسال رسالة' },
    'contact.lbl_name':  { id: 'Nama Lengkap',             en: 'Full Name',                   ar: 'الاسم الكامل' },
    'contact.ph_name':   { id: 'Masukkan nama Anda',       en: 'Enter your name',             ar: 'أدخل اسمك' },
    'contact.ph_email':  { id: 'email@example.com',        en: 'email@example.com',           ar: 'email@example.com' },
    'contact.lbl_subject':{ id: 'Subjek',                  en: 'Subject',                     ar: 'الموضوع' },
    'contact.ph_subject':{ id: 'Perihal pesan Anda',       en: 'Your message subject',        ar: 'موضوع رسالتك' },
    'contact.lbl_msg':   { id: 'Pesan',                    en: 'Message',                     ar: 'الرسالة' },
    'contact.ph_msg':    { id: 'Tulis pesan Anda di sini...', en: 'Write your message here...', ar: 'اكتب رسالتك هنا...' },
    'contact.btn_send':  { id: 'Kirim Pesan',              en: 'Send Message',                ar: 'إرسال الرسالة' },
    'contact.cta_badge': { id: 'Kolaborasi',               en: 'Collaboration',               ar: 'تعاون' },
    'contact.cta_title': { id: 'Siap Untuk Bekerja Sama?', en: 'Ready to Collaborate?',       ar: 'مستعد للتعاون؟' },
    'contact.cta_desc':  { id: 'Saya selalu antusias untuk mengerjakan proyek baru dan menarik. Mari berdiskusi tentang bagaimana kita bisa berkolaborasi!', en: 'I am always enthusiastic about working on new and exciting projects. Let\'s discuss how we can collaborate!', ar: 'أنا دائمًا متحمس للعمل على مشاريع جديدة ومثيرة. دعونا نناقش كيف يمكننا التعاون!' },
    'contact.btn_email': { id: 'Email Saya',               en: 'Email Me',                    ar: 'راسلني' },
    'contact.success':   { id: 'Pesan berhasil dikirim! Terima kasih telah menghubungi saya.', en: 'Message sent successfully! Thank you for contacting me.', ar: 'تم إرسال الرسالة بنجاح! شكرًا لتواصلك معي.' },

    // --- FOOTER ---
    'footer.desc':       { id: 'Junior Website & Mobile Developer yang passionate dalam membangun solusi digital.', en: 'A passionate Junior Website & Mobile Developer building digital solutions.', ar: 'مطور ويب وهاتف مبتدئ شغوف ببناء الحلول الرقمية.' },
    'footer.navigation': { id: 'Navigasi',                 en: 'Navigation',                  ar: 'التنقل' },
    'footer.follow':     { id: 'Ikuti Saya',               en: 'Follow Me',                   ar: 'تابعني' },
};

// Make translations globally available
window.i18n = translations;
