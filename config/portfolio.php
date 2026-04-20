<?php

/*
|--------------------------------------------------------------------------
| PORTFOLIO CONFIGURATION
|--------------------------------------------------------------------------
|
| File ini adalah satu-satunya file yang perlu Anda edit untuk mengubah
| semua data di portfolio Anda. Edit sesuai kebutuhan Anda.
|
| CARA MENGUBAH:
| 1. Buka file ini di text editor
| 2. Ubah data sesuai kebutuhan
| 3. Simpan file
| 4. Refresh halaman website
|
*/

return [

    /*
    |----------------------------------------------------------------------
    | DATA PRIBADI
    |----------------------------------------------------------------------
    | Ubah informasi pribadi Anda di sini
    */
    'personal' => [
        'name'      => 'Steven Gerrard',
        'title'     => 'Junior Website & Mobile Developer',
        'email'     => 'stevenge1215@gmail.com',
        'phone'     => '+62 812-9723-9300',
        'address'   => 'Wisma Bungurasih II no 20, Sidoarjo',
        'location'  => 'Sidoarjo, Jawa Timur',
        'university'=> 'Universitas Muhammadiyah Sidoarjo',
        'degree'    => 'S1 Teknik Informatika',
        'photo'     => 'images/saya.jpeg', // relative to public/

        // Deskripsi tentang diri Anda (per bahasa)
        'about' => [
            'id' => 'Saya adalah mahasiswa tingkat akhir Teknik Informatika di Universitas Muhammadiyah Sidoarjo dengan minat yang kuat dalam pengembangan web dan Android. Saya berkomitmen untuk terus belajar tentang teknologi dan percaya bahwa ilmu komputer dapat mengubah dunia.',
            'en' => 'I am a final-year Information Engineering student at Muhammadiyah University of Sidoarjo with a strong interest in web and Android development. I am committed to continuously learning about technology and believe that computer science can change the world.',
            'ar' => 'أنا طالب في السنة الأخيرة في هندسة المعلومات بجامعة محمدية سيدوارجو مع اهتمام قوي بتطوير الويب والأندرويد. أنا ملتزم بالتعلم المستمر عن التكنولوجيا وأؤمن أن علوم الكمبيوتر يمكن أن تغير العالم.',
        ],
        'about_short' => [
            'id' => 'Saya senang mendesain, suka membangun website yang bermanfaat, aktif di organisasi kampus, dan bekerja dengan baik dalam tim.',
            'en' => 'I enjoy designing, love building useful websites, am active in campus organizations, and work well in a team.',
            'ar' => 'أستمتع بالتصميم، أحب بناء مواقع مفيدة، نشط في المنظمات الجامعية، وأعمل بشكل جيد ضمن فريق.',
        ],
        'hero_description' => [
            'id' => 'Mahasiswa tingkat akhir Teknik Informatika di Universitas Muhammadiyah Sidoarjo dengan minat yang kuat dalam pengembangan web dan Android. Berkomitmen untuk terus belajar dan membangun solusi digital yang bermanfaat.',
            'en' => 'Final-year Information Engineering student at Muhammadiyah University of Sidoarjo with a strong interest in web and Android development. Committed to continuous learning and building useful digital solutions.',
            'ar' => 'طالب في السنة الأخيرة في هندسة المعلومات بجامعة محمدية سيدوارجو مع اهتمام قوي بتطوير الويب والأندرويد. ملتزم بالتعلم المستمر وبناء حلول رقمية مفيدة.',
        ],

        // Social Media Links (kosongkan jika tidak ada)
        'social' => [
            'github'    => 'https://github.com/Juawir',
            'linkedin'  => 'https://linkedin.com/in/stevengerrard',
            'instagram' => 'https://www.instagram.com/iende22/',
            'whatsapp'  => 'https://wa.me/6281297239300',
            'telegram'  => 'https://t.me/Jawir2233',
        ],
    ],

    /*
    |----------------------------------------------------------------------
    | PENDIDIKAN
    |----------------------------------------------------------------------
    | Tambah atau ubah riwayat pendidikan
    */
    'education' => [
        [
            'degree' => [
                'id' => 'S1 - Teknik Informatika',
                'en' => 'Bachelor - Information Engineering',
                'ar' => 'بكالوريوس - هندسة المعلومات',
            ],
            'school' => 'Universitas Muhammadiyah Sidoarjo',
            'year'   => '2022 - 2026',
            'icon'   => 'fas fa-university',
            'description' => [
                'id' => 'Aktif dalam dua organisasi kampus: Ikatan Mahasiswa Muhammadiyah (IMM) sebagai Kepala Divisi Tabligh, dan Asisten Laboratorium Informatika sebagai Kepala Divisi Training.',
                'en' => 'Active in two campus organizations: Ikatan Mahasiswa Muhammadiyah (IMM) as Head of Tabligh Division, and Informatics Laboratory Assistant as Head of Training Division.',
                'ar' => 'نشط في منظمتين جامعيتين: اتحاد طلاب محمدية كرئيس قسم التبليغ، ومساعد مختبر المعلوماتية كرئيس قسم التدريب.',
            ],
        ],
        [
            'degree' => [
                'id' => 'SMA (IPA)',
                'en' => 'Junior - Senior High School (Science)',
                'ar' => 'المدرسة المتوسطة والثانوية (علوم)',
            ],
            'school' => 'Daarul Mughni Al-Maliki',
            'year'   => '2014 - 2020',
            'icon'   => 'fas fa-school',
            'description' => [
                'id' => 'Belajar selama enam tahun, jurusan IPA di SMA. Aktif dalam organisasi siswa sebagai Kepala Divisi Bahasa di OSIS dan anggota dewan disiplin siswa.',
                'en' => 'Studied for six years, majored in Science in high school. Active in student organization as Head of Language Division and member of the student disciplinary council.',
                'ar' => 'درست لمدة ست سنوات، تخصص العلوم في المدرسة الثانوية. نشط في منظمة الطلاب كرئيس قسم اللغة وعضو مجلس انضباط الطلاب.',
            ],
        ],
        [
            'degree' => [
                'id' => 'SMP ',
                'en' => 'Junior - Senior High School (Science)',
                'ar' => 'المدرسة المتوسطة والثانوية (علوم)',
            ],
            'school' => 'Daarul Mughni Al-Maliki',
            'year'   => '2014 - 2020',
            'icon'   => 'fas fa-school',
            'description' => [
                'id' => 'Belajar selama tiga tahun, jurusan IPA di SMA. Aktif dalam organisasi siswa sebagai Kepala Divisi Bahasa di OSIS dan anggota dewan disiplin siswa.',
                'en' => 'Studied for six years, majored in Science in high school. Active in student organization as Head of Language Division and member of the student disciplinary council.',
                'ar' => 'درست لمدة ست سنوات، تخصص العلوم في المدرسة الثانوية. نشط في منظمة الطلاب كرئيس قسم اللغة وعضو مجلس انضباط الطلاب.',
            ],
        ],
        [
            'degree' => [
                'id' => 'Sekolah Dasar',
                'en' => 'Junior - Senior High School (Science)',
                'ar' => 'المدرسة المتوسطة والثانوية (علوم)',
            ],
            'school' => 'SDN Lambang Sari 04',
            'year'   => '2014 - 2020',
            'icon'   => 'fas fa-school',
            'description' => [
                'id' => 'Belajar selama enam tahun, jurusan IPA di SMA. Aktif dalam organisasi siswa sebagai Kepala Divisi Bahasa di OSIS dan anggota dewan disiplin siswa.',
                'en' => 'Studied for six years, majored in Science in high school. Active in student organization as Head of Language Division and member of the student disciplinary council.',
                'ar' => 'درست لمدة ست سنوات، تخصص العلوم في المدرسة الثانوية. نشط في منظمة الطلاب كرئيس قسم اللغة وعضو مجلس انضباط الطلاب.',
            ],
        ],
    ],

    /*
    |----------------------------------------------------------------------
    | PROYEK
    |----------------------------------------------------------------------
    | Tambah proyek baru dengan menambahkan array baru di bawah ini.
    |
    | Format:
    | [
    |     'title'       => 'Nama Proyek',
    |     'description' => ['id' => '...', 'en' => '...', 'ar' => '...'],
    |     'category'    => 'web' / 'mobile' / 'other',
    |     'tags'        => ['Laravel', 'PHP', ...],
    |     'icon'        => 'fas fa-globe',  // FontAwesome icon
    |     'github'      => 'https://github.com/...',
    | ]
    */
    'projects' => [

         [
            'title'       => 'Jatong App',
            'description' => [
                'id' => 'Aplikasi manajemen tugas untuk Android dengan fitur reminder, kategori, dan sinkronisasi cloud menggunakan Firebase.',
                'en' => 'Task management app for Android with reminder, category, and cloud sync features using Firebase.',
                'ar' => 'تطبيق إدارة المهام لأندرويد مع ميزات التذكير والفئات والمزامنة السحابية باستخدام فايربيس.',
            ],
            'category'    => 'mobile',
            'tags'        => ['Flutter', 'Android','Flutter Material Design','sqflite','image_picker','flutter_local_notifications','permission_handler','intl'],
            'icon'        => 'fas fa-mobile-alt',
            'github'      => 'https://github.com/Juawir/Jatong-App',
        ],
        [
            'title'       => 'Dashboard Pengajuan Alat Tulis Kantor',
            'description' => [
                'id' => 'Dashboard interaktif untuk visualisasi data statistik. Menampilkan grafik dan chart dinamis dengan tampilan modern dan responsif.',
                'en' => 'Interactive dashboard for statistical data visualization. Displays dynamic graphs and charts with a modern, responsive design.',
                'ar' => 'لوحة تحكم تفاعلية لتصور البيانات الإحصائية. تعرض الرسوم البيانية الديناميكية بتصميم حديث ومتجاوب.',
            ],
            'category'    => 'web',
            'tags'        => ['Laravel', 'Php', 'MySQL','Blade UI','Tailwind','Vite','Axios'],
            'icon'        => 'fas fa-chart-bar',
            'github'      => 'https://github.com/Juawir/pengajuan-atk',
        ],
         [
            'title'       => 'Portfolio Website',
            'description' => [
                'id' => 'Website portfolio pribadi dengan desain antarmuka modern (Dark Theme & Glassmorphism). Dilengkapi fitur ganti bahasa dinamis (Multibahasa) dan popup proyek interaktif menggunakan sistem Laravel 11.',
                'en' => 'Personal portfolio website with modern interface design (Dark Theme & Glassmorphism). Equipped with dynamic multi-language features and interactive project popups using the Laravel 11 system.',
                'ar' => 'موقع محفظة شخصي بتصميم واجهة حديث (سمة داكنة وتأثيرات زجاجية). مزود بميزات متعددة اللغات الديناميكية ونوافذ مشاريع تفاعلية باستخدام نظام Laravel 11.',
            ],
            'category'    => 'web',
            'tags'        => ['Laravel 11', 'Blade UI', 'Vanilla CSS', 'JavaScript', 'Glassmorphism'],
            'icon'        => 'fas fa-user-circle',
            'github'      => 'https://github.com/Juawir/portofolio_jawir',
        ],
         [
            'title'       => 'Stress Detection App',
            'description' => [
                'id' => 'Aplikasi deteksi stres berbasis machine learning untuk Android. Menggunakan model ML untuk menganalisis tingkat stres pengguna secara real-time.',
                'en' => 'Machine learning-based stress detection application for Android. Uses ML models to analyze user stress levels in real-time.',
                'ar' => 'تطبيق كشف التوتر القائم على التعلم الآلي لأندرويد. يستخدم نماذج التعلم الآلي لتحليل مستويات التوتر في الوقت الحقيقي.',
            ],
            'category'    => 'mobile',
            'tags'        => ['Kotlin', 'TensorFlow', 'ML','Android','ML Kit','Firebase',],
            'icon'        => 'fas fa-brain',
            'github'      => 'https://github.com/Juawir/Capstone',
        ],
        [
            'title'       => 'Prediksi Kelulusan Mahasiswa',
            'description' => [
                'id' => 'Riset ini bertujuan untuk mengomparasikan performa algoritma Decision Tree (C4.5) dan Naïve Bayes dalam melakukan klasifikasi potensi kelulusan mahasiswa secara tepat waktu.',
                'en' => 'This research aims to compare the performance of the Decision Tree (C4.5) and Naïve Bayes algorithms in classifying the potential for on-time graduation.',
                'ar' => 'يهدف هذا البحث إلى مقارنة أداء خوارزميات شجرة القرار (C4.5) و Naïve Bayes في تصنيف احتمالية تخرج الطلاب في الوقت المحدد..',
            ],
            'category'    => 'other',
            'tags'        => ['Python', 'Prediction', 'Pandas', 'C4.5', 'Naive Bayes'],
            'icon'        => 'fas fa-spider',
            'github'      => '####',
        ],
        [
            'title'       => 'Website Desa Cantik',
            'description' => [
                'id' => 'Sistem informasi desa untuk Kabupaten Sidoarjo. Website ini menyediakan informasi lengkap tentang desa, termasuk profil, layanan, dan data statistik.',
                'en' => 'Village information system for Sidoarjo Regency. This website provides comprehensive village information including profiles, services, and statistical data.',
                'ar' => 'نظام معلومات القرية لمنطقة سيدوارجو. يوفر هذا الموقع معلومات شاملة عن القرية بما في ذلك الملفات الشخصية والخدمات والبيانات الإحصائية.',
            ],
            'category'    => 'web',
            'tags'        => ['React Js', 'Vite JS','Leaflet JS','Chart JS','Axios','Next UI','Ant Design','Material UI'],
            'icon'        => 'fas fa-globe',
            'github'      => 'https://github.com/Juawir/Magang-BPS',
        ],
        [
            'title'       => 'Sistem Informasi Absensi TK',
            'description' => [
                'id' => 'Sistem informasi manajemen absensi harian siswa Taman Kanak-Kanak (TK) Aisyiah. Dibangun dengan memadukan basis data MySQL dan desain antarmuka AdminLTE.',
                'en' => 'Daily student attendance management information system for Aisyiah Kindergarten. Built by combining a MySQL database and the AdminLTE interface design.',
                'ar' => 'نظام معلومات إدارة الحضور اليومي للطلاب لروضة عائشية. تم بناؤه من خلال الجمع بين قاعدة بيانات MySQL وتصميم واجهة AdminLTE.',
            ],
            'category'    => 'web',
            'tags'        => ['PHP Native', 'MySQL', 'AdminLTE', 'HTML', 'JavaScript'],
            'icon'        => 'fas fa-graduation-cap',
            'github'      => 'https://github.com/Juawir/ProyekTK',
        ],
        [
            'title'       => 'Aplikasi Mobile Wisata',
            'description' => [
                'id' => 'Aplikasi eksplorasi destinasi dan pemesanan tiket wisata interaktif untuk perangkat seluler. Dikembangkan menggunakan teknologi modern React Native dan Expo SDK.',
                'en' => 'Interactive tourism destination exploration and ticket booking application for mobile devices. Developed using modern React Native and Expo SDK technologies.',
                'ar' => 'تطبيق استكشاف وجهات سياحية وحجز تذاكر تفاعلي للأجهزة المحمولة. تم تطويره باستخدام تقنيات React Native و Expo SDK الحديثة.',
            ],
            'category'    => 'mobile',
            'tags'        => ['React Native', 'Expo SDK', 'JavaScript', 'Node.js'],
            'icon'        => 'fas fa-plane-departure',
            'github'      => 'https://github.com/Juawir/LiveCoding',
        ],
    ],

    /*
    |----------------------------------------------------------------------
    | PENGALAMAN KERJA
    |----------------------------------------------------------------------
    | Tambah pengalaman kerja baru di sini
    */
    'experience' => [
        [
            'position' => [
                'id' => 'Mobile Development Cohort',
                'en' => 'Mobile Development Cohort',
                'ar' => 'فوج تطوير الهاتف المحمول',
            ],
            'company'  => 'Bangkit Academy by Google, Tokopedia, Gojek, & Traveloka',
            'date'     => [
                'id' => '2024 • 4 Bulan',
                'en' => '2024 • 4 Months',
                'ar' => '٢٠٢٤ • ٤ أشهر',
            ],
            'badge'    => [
                'id' => 'Program',
                'en' => 'Program',
                'ar' => 'برنامج',
            ],
            'badge_type' => 'education',
            'description' => [
                'id' => 'Berpartisipasi dalam program pemerintah MSIB (Kampus Merdeka) di cohort Mobile Development. Belajar implementasi kode di Android Studio, mengintegrasikan machine learning ke aplikasi Android, dan mengembangkan berbagai soft skills. Proyek akhir berupa aplikasi deteksi stres menggunakan machine learning.',
                'en' => 'Participated in the government MSIB program (Independent Campus) in the Mobile Development cohort. Learned code implementation in Android Studio, integrating machine learning into Android apps, and developing various soft skills. Final project was a stress detection app using machine learning.',
                'ar' => 'شاركت في برنامج الحكومة للتعلم المستقل في فوج تطوير الهاتف المحمول. تعلمت تنفيذ الأكواد في أندرويد ستوديو، ودمج التعلم الآلي في تطبيقات أندرويد. المشروع النهائي كان تطبيق كشف التوتر.',
            ],
            'skills'   => ['Kotlin', 'Android Studio', 'TensorFlow Lite', 'Machine Learning', 'Git'],
        ],
         [
            'position' => [
                'id' => 'Wordpress Developer',
                'en' => 'Wordpress Developer',
                'ar' => 'مطور الواجهة الأمامية',
            ],
            'company'  => 'Universitas Muhammadiyah Sidoarjo',
            'date'     => [
                'id' => '2024 • 1 Bulan',
                'en' => '2024 • 1 Months',
                'ar' => '----',
            ],
            'badge'    => [
                'id' => 'Pekerja Lepas',
                'en' => 'Freelance',
                'ar' => '---',
            ],
            'badge_type' => 'work',
            'description' => [
                'id' => 'Saya menyelesaikan program magang di Badan Pusat Statistik (BPS) Sidoarjo, di mana saya bekerja pada website sistem informasi desa "Desa Cantik" untuk Kabupaten Sidoarjo sebagai Front-End Developer. Bertanggung jawab dalam mengembangkan antarmuka pengguna yang intuitif dan responsif.',
                'en' => 'I completed an internship at the Central Bureau of Statistics (BPS) Sidoarjo, where I worked on the "Desa Cantik" village information system website as a Front-End Developer. Responsible for developing intuitive and responsive user interfaces.',
                'ar' => 'أكملت تدريبًا في مكتب الإحصاءات المركزي سيدوارجو، حيث عملت على موقع نظام معلومات القرية كمطور واجهة أمامية. مسؤول عن تطوير واجهات مستخدم سهلة الاستخدام ومتجاوبة.',
            ],
            'skills'   => ['HTML', 'CSS', 'JavaScript', 'Bootstrap', 'UI/UX'],
        ],
        [
            'position' => [
                'id' => 'Front End Developer',
                'en' => 'Front End Developer',
                'ar' => 'مطور الواجهة الأمامية',
            ],
            'company'  => 'BPS (Badan Pusat Statistik) Sidoarjo',
            'date'     => [
                'id' => '2024 • 3 Bulan',
                'en' => '2024 • 3 Months',
                'ar' => '٢٠٢٤ • ٣ أشهر',
            ],
            'badge'    => [
                'id' => 'Magang',
                'en' => 'Internship',
                'ar' => 'تدريب',
            ],
            'badge_type' => 'work',
            'description' => [
                'id' => 'Saya menyelesaikan program magang di Badan Pusat Statistik (BPS) Sidoarjo, di mana saya bekerja pada website sistem informasi desa "Desa Cantik" untuk Kabupaten Sidoarjo sebagai Front-End Developer. Bertanggung jawab dalam mengembangkan antarmuka pengguna yang intuitif dan responsif.',
                'en' => 'I completed an internship at the Central Bureau of Statistics (BPS) Sidoarjo, where I worked on the "Desa Cantik" village information system website as a Front-End Developer. Responsible for developing intuitive and responsive user interfaces.',
                'ar' => 'أكملت تدريبًا في مكتب الإحصاءات المركزي سيدوارجو، حيث عملت على موقع نظام معلومات القرية كمطور واجهة أمامية. مسؤول عن تطوير واجهات مستخدم سهلة الاستخدام ومتجاوبة.',
            ],
            'skills'   => ['HTML', 'CSS', 'JavaScript', 'Bootstrap', 'UI/UX','COMUNICATION'],
        ],
    ],

    /*
    |----------------------------------------------------------------------
    | ORGANISASI
    |----------------------------------------------------------------------
    */
    'organizations' => [
        [
            'name' => [
                'id' => 'Asisten Laboratorium Informatika',
                'en' => 'Informatics Lab Assistant',
                'ar' => 'مساعد مختبر المعلوماتية',
            ],
            'role' => [
                'id' => 'Kepala Divisi Training',
                'en' => 'Head of Training Division',
                'ar' => 'رئيس قسم التدريب',
            ],
            'period' => '2022 - 2026',
            'icon'   => 'fas fa-flask',
            'description' => [
                'id' => 'Memimpin divisi pelatihan untuk membantu mahasiswa dalam praktikum informatika. Merancang materi pelatihan dan membimbing asisten laboratorium baru.',
                'en' => 'Led the training division to help students in informatics practicum. Designed training materials and mentored new laboratory assistants.',
                'ar' => 'قيادة قسم التدريب لمساعدة الطلاب في التطبيق العملي للمعلوماتية. تصميم مواد التدريب وتوجيه مساعدي المختبر الجدد.',
            ],
        ],
        [
            'name' => 'Pojok Statistik Umsida',
            'role' => [
                'id' => 'Ketua',
                'en' => 'Chief Head',
                'ar' => '-----',
            ],
            'period' => '2024 - 2024',
            'icon'   => 'fas fa-mosque',
            'description' => [
                'id' => 'Memimpin divisi tabligh dalam mengorganisir kegiatan dakwah dan kajian keagamaan di lingkungan kampus.',
                'en' => 'Led the tabligh division in organizing outreach and religious study activities on campus.',
                'ar' => 'قيادة قسم التبليغ في تنظيم الأنشطة الدعوية والدراسات الدينية في الحرم الجامعي.',
            ],
        ],
        [
            'name' => 'Ikatan Mahasiswa Muhammadiyah (IMM)',
            'role' => [
                'id' => 'Kepala Divisi Tabligh',
                'en' => 'Head of Tabligh Division',
                'ar' => 'رئيس قسم التبليغ',
            ],
            'period' => '2022 - 2026',
            'icon'   => 'fas fa-mosque',
            'description' => [
                'id' => 'Memimpin divisi tabligh dalam mengorganisir kegiatan dakwah dan kajian keagamaan di lingkungan kampus.',
                'en' => 'Led the tabligh division in organizing outreach and religious study activities on campus.',
                'ar' => 'قيادة قسم التبليغ في تنظيم الأنشطة الدعوية والدراسات الدينية في الحرم الجامعي.',
            ],
        ],
        [
            'name' => 'OSIS Daarul Mughni Al-Maliki',
            'role' => [
                'id' => 'Kepala Mahkamah Divisi Bahasa',
                'en' => 'Head of Language Division',
                'ar' => 'رئيس قسم اللغة',
            ],
            'period' => '2014 - 2020',
            'icon'   => 'fas fa-school',
            'description' => [
                'id' => 'Memimpin program pengembangan bahasa di sekolah dan menjadi anggota dewan disiplin siswa.',
                'en' => 'Led the language development program at school and served as member of the student disciplinary council.',
                'ar' => 'قيادة برنامج تطوير اللغة في المدرسة وعضو مجلس انضباط الطلاب.',
            ],
        ],
    ],

    /*
    |----------------------------------------------------------------------
    | SKILLS
    |----------------------------------------------------------------------
    */
    'skills' => [
        ['icon' => 'fab fa-android',   'name' => 'Android',    'detail' => 'Kotlin & Java'],
        ['icon' => 'fab fa-laravel',   'name' => 'Laravel',    'detail' => 'PHP Framework'],
        ['icon' => 'devicon-react-original', 'name' => 'React', 'detail' => 'Web & Native'],
        ['icon' => 'devicon-tailwindcss-plain', 'name' => 'Tailwind', 'detail' => 'Utility CSS'],
        ['icon' => 'devicon-flutter-plain', 'name' => 'Flutter',   'detail' => 'Mobile Framework'],
        ['icon' => 'fab fa-js',        'name' => 'JavaScript', 'detail' => 'ES6+ & Node.js'],
        ['icon' => 'fas fa-database',  'name' => 'MySQL',      'detail' => 'Database'],
        ['icon' => 'fab fa-python',    'name' => 'Python',     'detail' => 'Data & ML'],
        ['icon' => 'fab fa-git-alt',   'name' => 'Git',        'detail' => 'Version Control'],
        ['icon' => 'fas fa-fire',      'name' => 'Firebase',   'detail' => 'Cloud Backend']
    ],

    'skills_hero' => [
        ['icon' => 'fab fa-android',  'name' => 'Mobile Dev',      'detail' => 'Kotlin, Flutter, React Native'],
        ['icon' => 'fab fa-laravel',  'name' => 'Backend & Web',   'detail' => 'Laravel, Native PHP, Node.js'],
        ['icon' => 'fab fa-react',    'name' => 'Frontend UI',     'detail' => 'React, Tailwind, Bootstrap, Vue'],
        ['icon' => 'fas fa-chart-line','name' => 'Data & Map',     'detail' => 'Chart.js, Leaflet.js, Python'],
        ['icon' => 'fas fa-brain',    'name' => 'Problem Solving', 'detail' => ['id' => 'Analisis & Logika', 'en' => 'Analysis & Logic', 'ar' => 'التحليل والمنطق']],
        ['icon' => 'fas fa-code-branch','name' => 'Version Git',   'detail' => 'GitHub & Code Management'],
    ],
];
