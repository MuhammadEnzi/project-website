<?php
// config.php
$config = [
    'school_name' => 'Educational Research & Consulting',
    'tagline' => 'Ciptakan Pengalaman Wujudkan Pembaruan Pendidikan',
    'vision' => 'Menjadi institusi pendidikan terkemuka yang menghasilkan lulusan berkualitas dan berintegritas',
];

// Daftar program studi
$programs = [
    [
        'name' => 'Program Reguler',
        'description' => 'Kurikulum standar nasional dengan pengayaan',
        'icon' => '📚'
    ],
    [
        'name' => 'Program Internasional',
        'description' => 'Kurikulum berbasis internasional',
        'icon' => '🌏'
    ],
    [
        'name' => 'Program Keahlian',
        'description' => 'Fokus pada pengembangan skill praktis',
        'icon' => '💡'
    ]
];

// Statistik sekolah
$stats = [
    'siswa' => '1000+',
    'guru' => '100+',
    'alumni' => '5000+',
    'prestasi' => '200+'
];
$facilities = [
  [
      'name' => 'Smart Laboratory',
      'description' => 'Laboratorium modern dilengkapi peralatan berteknologi tinggi',
      'features' => ['Virtual Reality Lab', 'Digital Microscopes', 'Interactive Displays'],
      'icon' => '🧪'
  ],
  [
      'name' => 'Digital Library',
      'description' => 'Perpustakaan digital dengan akses ke ribuan e-book',
      'features' => ['E-Book Collection', '24/7 Online Access', 'Digital Catalogs'],
      'icon' => '📚'
  ],
  [
      'name' => 'Sport Center',
      'description' => 'Fasilitas olahraga lengkap berstandar internasional',
      'features' => ['Olympic Pool', 'Indoor Stadium', 'Fitness Center'],
      'icon' => '🏃'
  ],
  [
      'name' => 'Innovation Hub',
      'description' => 'Ruang kreatif untuk mengembangkan ide dan inovasi',
      'features' => ['3D Printers', 'Robotics Lab', 'Coding Studio'],
      'icon' => '💡'
  ],
  [
      'name' => 'Art Studio',
      'description' => 'Studio seni modern untuk mengembangkan kreativitas',
      'features' => ['Digital Art Lab', 'Music Studio', 'Dance Room'],
      'icon' => '🎨'
  ],
  [
      'name' => 'Research Center',
      'description' => 'Pusat penelitian dengan peralatan modern',
      'features' => ['Research Lab', 'Data Center', 'Conference Room'],
      'icon' => '🔬'
  ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['school_name']; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        /* Gradient Animations */
        .hero-gradient {
            background: linear-gradient(-45deg,#d87b2e,#d87b2e,rgb(31, 53, 88),rgb(16, 9, 141));
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Advanced Floating Animation */
        .floating {
            animation: floating 6s ease-in-out infinite;
        }

        @keyframes floating {
            0% { transform: translate(0, 0px) rotate(0deg); }
            25% { transform: translate(5px, -15px) rotate(2deg); }
            50% { transform: translate(0, -25px) rotate(0deg); }
            75% { transform: translate(-5px, -15px) rotate(-2deg); }
            100% { transform: translate(0, 0px) rotate(0deg); }
        }

        /* Wave Effect */
        .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') repeat-x;
            background-size: 1440px 100px;
            animation: wave 10s linear infinite;
        }

        @keyframes wave {
            0% { background-position-x: 0; }
            100% { background-position-x: 1440px; }
        }

        /* Glowing Effect */
        .glow {
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from { box-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #3b82f6; }
            to { box-shadow: 0 0 20px #fff, 0 0 30px #3b82f6, 0 0 40px #3b82f6; }
        }

        /* Shine Effect */
        .shine {
            position: relative;
            overflow: hidden;
        }

        .shine::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                rgba(255,255,255,0) 0%,
                rgba(255,255,255,0.1) 50%,
                rgba(255,255,255,0) 100%
            );
            transform: rotate(45deg);
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) rotate(45deg); }
            100% { transform: translateX(100%) rotate(45deg); }
        }

        /* Tilt Effect */
        .tilt {
            transform-style: preserve-3d;
            transform: perspective(1000px);
            transition: transform 0.3s;
        }

        /* Cursor Trail Effect */
        .cursor-trail {
            pointer-events: none;
            position: fixed;
            width: 8px;
            height: 8px;
            background-color: rgba(255,255,255,0.5);
            border-radius: 50%;
            z-index: 9999;
        }

        /* Parallax Container */
        .parallax-container {
            transform-style: preserve-3d;
            perspective: 1000px;
        }

        /* Mouse move parallax */
        .parallax-element {
            transition: transform 0.2s ease-out;
        }

        /* Card hover effects */
        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        /* Text gradient animation */
        .text-gradient {
            background: linear-gradient(to right,rgb(239, 240, 241),rgb(138, 138, 150),rgb(70, 72, 77));
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textGradient 3s linear infinite;
        }

        @keyframes textGradient {
            to { background-position: 200% center; }
        }

        /* Morphing shape background */
        .morphing-bg {
            animation: morphing 10s ease-in-out infinite;
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
            transition: all 1s ease-in-out;
       
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Advanced Floating Animation */
        .floating {
            animation: floating 6s ease-in-out infinite;
        }

        @keyframes floating {
            0% { transform: translate(0, 0px) rotate(0deg); }
            25% { transform: translate(5px, -15px) rotate(2deg); }
            50% { transform: translate(0, -25px) rotate(0deg); }
            75% { transform: translate(-5px, -15px) rotate(-2deg); }
            100% { transform: translate(0, 0px) rotate(0deg); }
        }

        /* Wave Effect */
        .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') repeat-x;
            background-size: 1440px 100px;
            animation: wave 10s linear infinite;
        }

        @keyframes wave {
            0% { background-position-x: 0; }
            100% { background-position-x: 1440px; }
        }

        /* Glowing Effect */
        .glow {
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from { box-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #3b82f6; }
            to { box-shadow: 0 0 20px #fff, 0 0 30px #3b82f6, 0 0 40px #3b82f6; }
        }

        /* Shine Effect */
        .shine {
            position: relative;
            overflow: hidden;
        }

        .shine::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                rgba(255,255,255,0) 0%,
                rgba(255,255,255,0.1) 50%,
                rgba(255,255,255,0) 100%
            );
            transform: rotate(45deg);
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) rotate(45deg); }
            100% { transform: translateX(100%) rotate(45deg); }
        }

        /* Tilt Effect */
        .tilt {
            transform-style: preserve-3d;
            transform: perspective(1000px);
            transition: transform 0.3s;
        }

        /* Cursor Trail Effect */
        .cursor-trail {
            pointer-events: none;
            position: fixed;
            width: 8px;
            height: 8px;
            background-color: rgba(255,255,255,0.5);
            border-radius: 50%;
            z-index: 9999;
        }

        /* Parallax Container */
        .parallax-container {
            transform-style: preserve-3d;
            perspective: 1000px;
        }

        /* Mouse move parallax */
        .parallax-element {
            transition: transform 0.2s ease-out;
        }

        /* Card hover effects */
        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        /* Text gradient animation */
        .text-gradient {
            background: linear-gradient(to right,rgb(239, 240, 241),rgb(177, 177, 184),rgb(219, 224, 235));
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textGradient 3s linear infinite;
        }

        @keyframes textGradient {
            to { background-position: 200% center; }
        }

        /* Morphing shape background */
        .morphing-bg {
            animation: morphing 10s ease-in-out infinite;
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
            transition: all 1s ease-in-out;
        }

        @keyframes morphing {
            0% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; } 
            50% { border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%; }
            100% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; }
        }

        .perspective {
            perspective: 2000px;
        }

        .preserve-3d {
            transform-style: preserve-3d;
        }

        .backface-hidden {
            backface-visibility: hidden;
        }

        /* Rotation Utilities */
        .rotate-y-180 {
            transform: rotateY(180deg);
        }

        /* Card Styles */
        .card-program {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.1);
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(209, 213, 219, 0.3);
            height: 100%;
            min-height: 400px;
            margin-bottom: 20px;
        }

        .card-program::before {
            content: '';
            position: absolute;
            inset: 0;
            z-index: -1;
            background: linear-gradient(
                135deg,
                rgba(151, 2, 2, 0.3) 0%,
                rgba(192, 22, 22, 0.1) 100%
            );
            border-radius: inherit;
            transition: opacity 0.5s;
            opacity: 0;
        }

        .card-program:hover::before {
            opacity: 0.5;
        }

        /* Animation Classes */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        /* Hover Effects */
        .group:hover .card-program {
            transform: translateY(-5px);
        }

        .group:hover .card-icon {
            transform: scale(1.1) rotate(10deg);
        }
        .perspective-1000 {
            perspective: 1000px;
            transform-style: preserve-3d;
        }

        .preserve-3d {
            transform-style: preserve-3d;
        }

        .facility-card {
            margin-bottom: 20px;
            transform-origin: center;
            transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .facility-icon {
            animation: floating 3s ease-in-out infinite;
        }

        /* Floating Animation */
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        /* Feature Card Hover Effects */
        .feature-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(45deg, rgba(59, 130, 246, 0.5), rgba(147, 51, 234, 0.5));
            opacity: 0;
            transition: opacity 0.3s;
            border-radius: inherit;
            z-index: -1;
        }

        .feature-card:hover::before {
            opacity: 1;
        }

        /* Glass Morphism */
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Custom Scrollbar */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(59, 130, 246, 0.5);
            border-radius: 3px;
        }
        section {
            scroll-margin-top: 80px; /* Adjust this value based on your navbar height */
            position: relative;
        }

        /* Ensure each section has proper spacing */
        #home {
            padding-top: 80px;
        }

        #programs {
            padding-top: 80px;
            min-height: 100vh;
        }

        #facilities {
            padding-top: 80px;
            min-height: 100vh;
        }
        #goals-mission-achievements-services {
            padding-top: 80px;
            min-height: 100vh;
        }

        #achievements {
            padding-top: 80px;
            min-height: 100vh;
        }

        #registration {
            padding-top: 80px;
            min-height: 100vh;
        }

        /* Modify navbar styles */
        nav {
            height: 80px; /* Set fixed height */
            background: rgba(255, 255, 255, 0.95); /* Add slight transparency */
            backdrop-filter: blur(5px); /* Add blur effect */
        }
        .facilities-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); /* Mengatur kolom */
            gap: 20px; /* Jarak antar kartu */
        }

        .card-facility {
            background: rgba(255, 255, 255, 0.1); /* Latar belakang transparan */
            backdrop-filter: blur(10px); /* Efek blur */
            border-radius: 1rem; /* Sudut melengkung */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2); /* Bayangan lembut */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transisi halus */
            position: relative;
            padding : 20px;
            margin-bottom : 200px/* Mengatur posisi relatif untuk elemen anak */
        }

        .card-facility:hover {
            transform: translateY(-5px); /* Mengangkat kartu saat hover */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); /* Bayangan lebih dalam saat hover */
        }

        .card-facility .icon {
            font-size: 4rem; /* Ukuran ikon yang lebih besar */
            margin-bottom: 1rem; /* Jarak bawah ikon */
            transition: transform 0.3s ease; /* Transisi untuk ikon */
        }

        .card-facility:hover .icon {
            transform: scale(1.1); /* Membesarkan ikon saat hover */
        }

        .card-facility h3 {
            font-size: 1.5rem; /* Ukuran font judul */
            color: #ffffff; /* Warna teks putih */
        }

        .card-facility p {
            color: #d1d5db; /* Warna teks abu-abu */
        }

        .card-facility ul {
            list-style-type: disc; /* Tipe list */
            padding-left: 1.5rem; /* Jarak kiri untuk list */
            color: #d1d5db; /* Warna teks abu-abu */
        }
            /* Morphing Background Animation */
        @keyframes morphing {
            0% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; }
            50% { border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%; }
            100% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; }
        }

        .animate-morphing {
            animation: morphing 10s ease-in-out infinite;
        }

        .animate-morphing-delay {
            animation: morphing 12s ease-in-out infinite;
            animation-delay: 2s;
        }

        /* 3D Flip Card */
        .perspective-1000 {
            perspective: 1000px;
        }

        .preserve-3d {
            transform-style: preserve-3d;
        }

        .backface-hidden {
            backface-visibility: hidden;
        }

        .rotate-y-180 {
            transform: rotateY(180deg);
        }
        .transform-gpu {
            transform: translate3d(0, 0, 0);
        }

        .transition-all {
            transition: all 0.5s ease-in-out;
        }
    
  

        .group:hover .preserve-3d {
            transform: rotateY(180deg);
        }

    

        /* Glassmorphism Effect */
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
            /* Scrollable Content */
        .overflow-y-auto {
            overflow-y: auto;
            scrollbar-width: thin; /* Untuk browser yang mendukung */
            scrollbar-color: rgba(255, 255, 255, 0.5) transparent; /* Warna scrollbar */
        }

        .overflow-y-auto::-webkit-scrollbar {
            width: 6px; /* Lebar scrollbar */
        }

        .overflow-y-auto::-webkit-scrollbar-track {
            background: transparent; /* Latar belakang scrollbar track */
        }

        .overflow-y-auto::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.5); /* Warna scrollbar thumb */
            border-radius: 3px; /* Sudut scrollbar thumb */
        }
        /* Animated Gradient Background */
        @keyframes gradient-x {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .animate-gradient-x {
            background-size: 200% 200%;
            animation: gradient-x 10s ease infinite;
        }

        /* Animated Gradient Overlay */
        @keyframes gradient-overlay {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .animate-gradient-overlay {
            background-size: 200% 200%;
            animation: gradient-overlay 5s ease infinite;
        }

        /* Parallax Effect */
        .parallax-element {
            transition: transform 0.2s ease-out;
        }

        /* Card Hover Effects */
        .group:hover .parallax-element {
            transform: translate3d(5px, -5px, 0);
        }
    </style>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="fixed w-full bg-white shadow-md z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="text-xl font-bold text-blue-800"><?php echo $config['school_name']; ?></div>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="hover:text-blue-600 transition">Beranda</a>
                    <a href="#programs" class="hover:text-blue-600 transition">Program</a>
                    <a href="#facilities" class="hover:text-blue-600 transition">Fasilitas</a>
                    <a href="#achievements" class="hover:text-blue-600 transition">Prestasi</a>
                    <a href="#registration" class="hover:text-blue-600 transition">Pendaftaran</a>
                </div>
                <button class="md:hidden" onclick="toggleMobileMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-16 6h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden fixed w-full bg-white shadow-md z-40 top-16">
        <div class="container mx-auto px-6 py-4">
            <div class="flex flex-col space-y-4">
                <a href="#home" class="hover:text-blue-600 transition">Beranda</a>
                <a href="#programs" class="hover:text-blue-600 transition">Program</a>
                <a href="#facilities" class="hover:text-blue-600 transition">Fasilitas</a>
                <a href="#achievements" class="hover:text-blue-600 transition">Prestasi</a>
                <a href="#registration" class="hover:text-blue-600 transition">Pendaftaran</a>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen hero-gradient text-white relative overflow-hidden">
        <div id="particles-js" class="absolute inset-0"></div>
        
        <div class="container mx-auto px-6 relative z-10 pt-32 pb-20">
            <!-- Main Hero Content -->
            <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                <div class="space-y-8">
                    <h1 class="text-5xl md:text-7xl font-extrabold leading-tight text-gradient animate__animated animate__fadeInLeft">
                        <?php echo $config['tagline']; ?>
                    </h1>
                    <p class="text-xl md:text-2xl opacity-90 animate__animated animate__fadeInLeft animate__delay-1s">
                        <?php echo $config['vision']; ?>
                    </p>
                    <div class="flex space-x-4">
                        <button class="glow bg-white text-blue-600 px-8 py-4 rounded-lg transform hover:scale-105 transition duration-300 font-bold animate__animated animate__fadeInUp animate__delay-2s shine">
                            Daftar Sekarang
                        </button>
                        <button class="border-2 border-white px-8 py-4 rounded-lg hover:bg-white hover:text-blue-600 transform hover:scale-105 transition duration-300 animate__animated animate__fadeInUp animate__delay-2s">
                            Virtual Tour
                        </button>
                    </div>
                </div>
                <div class="relative parallax-container">
                    <div class="morphing-bg bg-blue-500/30 absolute inset-0"></div>
                    <img src="assets/images/partners/Project-planning.png" alt="Students" class="rounded-lg shadow-2xl floating parallax-element relative z-10">
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-yellow-400 rounded-full opacity-20 parallax-element"></div>
                    <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-blue-400 rounded-full opacity-20 parallax-element"></div>
                </div>
            </div>

            <!-- Feature Cards -->
            <div class="grid md:grid-cols-3 gap-8 mt-12">
                <?php
                $features = [
                    ['icon' => '🎓', 'title' => 'Prestasi Akademik', 'desc' => '90% lulusan diterima di perguruan tinggi ternama'],
                    ['icon' => '🌟', 'title' => 'Pengembangan Karakter', 'desc' => 'Program pembentukan karakter terintegrasi'],
                    ['icon' => '🌍', 'title' => 'Wawasan Global', 'desc' => 'Program pertukaran pelajar internasional']
                ];
                
                foreach($features as $index => $feature):
                ?>
                <div class="card-hover bg-white/10 backdrop-blur-lg p-6 rounded-xl tilt animate__animated animate__fadeInUp" 
                    style="animation-delay: <?php echo $index * 200; ?>ms"
                    onmousemove="handleTilt(event, this)"
                    onmouseleave="resetTilt(this)">
                    <div class="text-4xl mb-4"><?php echo $feature['icon']; ?></div>
                    <h3 class="text-xl font-bold mb-2"><?php echo $feature['title']; ?></h3>
                    <p><?php echo $feature['desc']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Animated Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-20 animate__animated animate__fadeInUp">
                <?php foreach ($stats as $label => $value): ?>
                <div class="text-center card-hover">
                    <div class="text-4xl font-bold counter" data-target="<?php echo intval($value); ?>">0</div>
                    <div class="text-lg mt-2"><?php echo ucfirst($label); ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <div class="wave"></div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <?php foreach ($stats as $label => $value): ?>
                <div class="p-4 bg-gray-100 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 transform hover:scale-105" data-aos="zoom-in">
                    <div class="text-3xl font-bold text-blue-600 mb-2"><?php echo $value; ?></div>
                    <div class="text-gray-600 capitalize"><?php echo $label; ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="py-12 md:py-24 bg-gradient-to-br from-blue-50 to-indigo-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-4">Program Unggulan</h2>
            <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Pilih program yang sesuai dengan kebutuhan dan minat Anda</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach ($programs as $index => $program): ?>
                <div class="group perspective mb-6"> <!-- Tambahkan mb-6 untuk jarak -->
                    <div class="relative transform-gpu transition-all duration-500 group-hover:rotate-y-180 preserve-3d">
                        <!-- Card Front -->
                        <div class="card-program p-8 rounded-3xl bg-white absolute backface-hidden w-full">
                            <div class="text-5xl mb-6 transform transition-transform group-hover:scale-110 group-hover:rotate-12">
                                <?php echo $program['icon']; ?>
                            </div>
                            <h3 class="text-2xl font-bold mb-4 text-gray-800"><?php echo $program['name']; ?></h3>
                            <p class="text-gray-600 mb-6"><?php echo $program['description']; ?></p>
                            <div class="absolute bottom-4 right-4">
                                <span class="text-blue-400 group-hover:text-blue-600">Lihat Detail →</span>
                            </div>
                        </div>

                        <!-- Card Back -->
                        <div class="card-program p-8 rounded-3xl bg-blue-950 absolute backface-hidden w-full rotate-y-180 text-white">
                            <h4 class="text-xl font-bold mb-4">Keunggulan Program</h4>
                            <ul class="space-y-3 mb-6">
                                <?php
                                $benefits = [
                                    'Program Reguler' => ['Kurikulum Nasional Plus', 'Ekstrakurikuler Beragam', 'Guru Berpengalaman'],
                                    'Program Internasional' => ['Cambridge Curriculum', 'Native Speakers', 'International Exchange'],
                                    'Program Keahlian' => ['Praktisi Profesional', 'Sertifikasi Industri', ' Kurikulum Terapan']
                                ];
                                foreach ($benefits[$program['name']] as $benefit):?>
                                    <li>✔ <?php echo $benefit; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="absolute bottom-4 right-4">
                                <span class="text-blue-400 group-hover:text-blue-600">Kembali →</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section id="facilities" class="py-20 bg-gradient-to-br from-gray-900 to-blue-900 text-white overflow-hidden">
        <div class="container mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-400">
                    Fasilitas Modern
                </h2>
                <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                    Dilengkapi dengan teknologi terkini untuk mendukung pembelajaran optimal
                </p>
            </div>

            <!-- Facilities Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach($facilities as $facility): ?>
                    <div class="group perspective-1000">
                        <div class="relative transform-gpu transition-all duration-500 group-hover:rotate-y-180 preserve-3d h-full card-facility">
                            <!-- Card Front -->
                            <div class="p-8 rounded-3xl bg-white/10 backdrop-blur-lg absolute backface-hidden w-full border border -transparent shadow-lg">
                                <div class="text-center">
                                    <div class="text-5xl mb-4"><?php echo $facility['icon']; ?></div>
                                    <h3 class="text-2xl font-semibold mb-2"><?php echo $facility['name']; ?></h3>
                                    <p class="text-gray-300"><?php echo $facility['description']; ?></p>
                                </div>
                            </div>
                            <!-- Card Back -->
                            <div class="p-8 rounded-3xl bg-white/10 backdrop-blur-lg absolute backface-hidden w-full border border-transparent shadow-lg rotate-y-180">
                                <h4 class="text-xl font-semibold mb-2">Fitur:</h4>
                                <ul class="list-disc list-inside text-gray-300">
                                    <?php foreach($facility['features'] as $feature): ?>
                                        <li><?php echo $feature; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section id="goals-mission-achievements-services" class="py-20 bg-gradient-to-br from-gray-900 to-blue-900 text-white relative overflow-hidden">
    <!-- Background Animation -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <div class="absolute w-full h-full bg-gradient-to-r from-blue-900/50 to-purple-900/50 animate-morphing"></div>
            <div class="absolute w-full h-full bg-gradient-to-br from-blue-800/30 to-purple-800/30 animate-morphing-delay"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-400">
                    Goals, Mission, Achievements & Services
                </h2>
                <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                    Membantu lembaga pendidikan agar bersahabat dengan perubahan dan perkembangan
                </p>
            </div>

            <!-- Grid for Goals, Mission, Achievements & Services -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Our Goals -->
                <div class="p-8 rounded-3xl bg-white/10 backdrop-blur-lg border border-white/10 shadow-lg" data-aos="fade-right" data-aos-delay="100">
                    <div class="text-center">
                        <div class="text-5xl mb-4">🎯</div>
                        <h3 class="text-2xl font-bold mb-4">Goals</h3>
                        <p class="text-gray-300">
                            Di tahun 2035, 40.000 sekolah menjadi lembaga pendidikan yang relevan dengan kebutuhan kekinian, memiliki guru-guru hebat, dan melahirkan siswa-siswa yang mulia.
                        </p>
                    </div>
                </div>

                <!-- Our Mission -->
                <div class="p-8 rounded-3xl bg-white/10 backdrop-blur-lg border border-white/10 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-center">
                        <div class="text-5xl mb-4">🚀</div>
                        <h3 class="text-2xl font-bold mb-4">Mission</h3>
                        <p class="text-gray-300">
                            Mengidentifikasi dan mencari alternatif penyelesaian berbagai persoalan lembaga pendidikan melalui kegiatan riset, pelatihan, dan kegiatan relevan lainnya.
                        </p>
                    </div>
                </div>

                <!-- Our Achievements -->
                <div class="p-8 rounded-3xl bg-white/10 backdrop-blur-lg border border-white/10 shadow-lg" data-aos="fade-down" data-aos-delay="300">
                    <div class="text-center">
                        <div class="text-5xl mb-4">🏆</div>
                        <h3 class="text-2xl font-bold mb-4">Achievements and Accomplishment</h3>
                        <div class="overflow-y-auto max-h-[300px]">
                            <ul class="text-gray-300 space-y-2 text-left pl-4">
                                <li>✔ Terhubung dengan puluhan guru konten kreator</li>
                                <li>✔ Terhubung dengan puluhan lembaga pendidikan</li>
                                <li>✔ Terhubung dengan puluhan pakar dan peneliti bidang pendidikan</li>
                                <li>✔ Terhubung dengan kepala dinas pendidikan</li>
                                <li>✔ Terhubung dengan Kemendikbud, Kemenko PMK, DPR Komisi X, dan korporasi yang peduli terhadap pendidikan</li>
                                <li>✔ Menciptakan ratusan penelitian, ratusan modul, ratusan tips belajar</li>
                                <li>✔ Membentuk policy brief dan disetujui diberlakukan</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Our Services -->
                <div class="p-8 rounded-3xl bg-white/10 backdrop-blur-lg border border-white/10 shadow-lg" data-aos="fade-left" data-aos-delay="400">
                    <div class="text-center">
                        <div class="text-5xl mb-4">🛠️</div>
                        <h3 class="text-2xl font-bold mb-4">Services</h3>
                        <div class="overflow-y-auto max-h-[300px]">
                            <ul class="text-gray-300 space-y-2 text-left pl-4">
                                <li>✔ Menyediakan data pendidikan: berhubungan dengan angka statistik</li>
                                <li>✔ Menyediakan jurnal pendidikan: berhubungan dengan penyajian masalah dan solusi untuk pendidikan teraktual</li>
                                <li>✔ Menyediakan pelatihan untuk guru dan siswa: online dan offline dengan menggunakan metode menyenangkan</li>
                                <li>✔ Menyediakan beasiswa bhinneka: menyiapkan calon siswa SMA untuk memiliki daya jelajah yang kuat demi menjalani studi di tanah rantau untuk menguatkan semangat kebangsaan.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Partners Section -->
    <section id="partners" class="py-12 md:py-24 bg-white relative overflow-hidden">
        <!-- Background Decoration -->
        <div class="absolute inset-0 z-0">
            <div class="absolute w-full h-full bg-gradient-to-r from-blue-50 to-purple-50 animate-gradient-x"></div>
            <div class="absolute w-1/2 h-full bg-white/50 backdrop-blur-lg"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-600">
                    Mitra Kami
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Kolaborasi kami dengan mitra terpercaya membawa pendidikan ke level yang lebih tinggi.
                </p>
            </div>

            <!-- Partners Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php
                $partners = [
                    ['name' => 'Tokopedia', 'logo' => 'assets/images/partners/logo-tokopedia.jpg', 'url' => '#'],
                    ['name' => 'Kitabisa', 'logo' => 'assets/images/partners/kita.jpg', 'url' => '#'],
                    ['name' => 'DPR Komisi X Kemendikbud', 'logo' => 'assets/images/partners/dpr.png', 'url' => '#'],
                ];

                foreach ($partners as $partner):
                ?>
                <div class="group perspective-1000" data-aos="fade-up" data-aos-delay="<?php echo rand(100, 300); ?>">
                    <div class="relative overflow-hidden rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 h-full transform-gpu">
                        <!-- Logo and Name -->
                        <a href="<?php echo $partner['url']; ?>" target="_blank" class="flex flex-col items-center justify-center p-6 bg-white hover:bg-gray-50 transition duration-300">
                            <img src="<?php echo $partner['logo']; ?>" alt="<?php echo $partner['name']; ?>" class="w-32 h-32 mb-4 transition-transform group-hover:scale-110">
                            <h3 class="text-lg font-semibold text-center text-gray-800"><?php echo $partner['name']; ?></h3>
                        </a>
                        <!-- Animated Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 opacity-0 group-hover:opacity-90 transition-opacity duration-300 animate-gradient-overlay"></div>
                        <!-- Hover Text -->
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="text-white text-center px-4">Kunjungi <?php echo $partner['name']; ?></p>
                        </div>
                        <!-- Parallax Effect -->
                        <div class="absolute inset-0 parallax-element" data-depth="0.1"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4"><?php echo $config['school_name']; ?></h3>
                    <p class="text-gray-100">Membentuk masa depan cerah untuk generasi penerus bangsa.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>info@academia.edu</li>
                        <li>+62 123 4567 890</li>
                        <li>Jl. Pendidikan No. 123, Kota</li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Link Penting</h4>
                    <ul class="space-y-2">
                        <li><a href="#programs" class="text-gray-400 hover:text-white transition">Program</a></li>
                        <li><a href="#facilities" class="text-gray-400 hover:text-white transition">Fasilitas</a></li>
                        <li><a href="#registration" class="text-gray-400 hover:text-white transition">Pendaftaran</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Media Sosial</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition">Facebook</a>
                        <a href="#" class="text-gray-400 hover:text-white transition">Instagram</a>
                        <a href="#" class="text-gray-400 hover:text-white transition">YouTube</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; <?php echo date('Y'); ?> <?php echo $config['school_name']; ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // 3D Carousel functionality
        const carousel = document.querySelector('.carousel-container');
        const cards = document.querySelectorAll('.facility-card');
        let currentRotation = 0;
        const totalCards = cards.length;
        const anglePerCard = 360 / totalCards;

        // Navigation buttons
        document.querySelector('.carousel-prev').addEventListener('click', () => {
            currentRotation += anglePerCard;
            updateCarousel();
        });
        document.addEventListener('DOMContentLoaded', function () {
            const cards = document.querySelectorAll('.group.perspective-1000');

            cards.forEach(card => {
                const scrollableContent = card.querySelector('.overflow-y-auto');

                card.addEventListener('mouseenter', (e) => {
                    // Cek apakah hover terjadi di luar area scrollable
                    if (!scrollableContent.contains(e.target)) {
                        card.querySelector('.preserve-3d').style.transform = 'rotateY(180deg)';
                    }
                });

                card.addEventListener('mouseleave', () => {
                    card.querySelector('.preserve-3d').style.transform = 'rotateY(0deg)';
                });
            });
        });


        document.querySelector('.carousel-next').addEventListener('click', () => {
            currentRotation -= anglePerCard;
            updateCarousel();
        });

        function updateCarousel() {
            cards.forEach((card, index) => {
                const rotation = currentRotation + (index * anglePerCard);
                card.style.transform = `rotateY(${rotation}deg) translateZ(700px)`;
            });
        }

        // Touch and drag functionality
        let startX = 0;
        let isDragging = false;

        carousel.addEventListener('mousedown', (e) => {
            isDragging = true;
            startX = e.clientX;
        });

        carousel.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            const deltaX = e.clientX - startX;
            if (Math.abs(deltaX) > 50) {
                if (deltaX > 0) {
                    currentRotation += anglePerCard;
                } else {
                    currentRotation -= anglePerCard;
                }
                updateCarousel();
                startX = e.clientX;
            }
        });

        carousel.addEventListener('mouseup', () => {
            isDragging = false;
        });

        // Animated counter for stats
        const animateValue = (element, start, end, duration) => {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                element.textContent = Math.floor(progress * (end - start) + start);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        };

        // Parallax effect for feature cards
        document.querySelectorAll('.feature-card').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const angleX = (y - centerY) / 20;
                const angleY = -(x - centerX) / 20;
                
                card.style.transform = `perspective(1000px) rotateX(${angleX}deg) rotateY(${angleY}deg)`;
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
            });
        });
    });
        AOS.init({
            duration: 1000,
            once: true
        });

        // Particles.js
        particlesJS('particles-js', {
            particles: {
                number: { value: 80 },
                color: { value: '#ffffff' },
                shape: { type: 'circle' },
                opacity: {
                    value: 0.5,
                    random: true
                },
                size: {
                    value: 3,
                    random: true
                },
                move: {
                    enable: true,
                    speed: 3
                }
            },
            interactivity: {
                events: {
                    onhover: {
                        enable: true,
                        mode: 'repulse'
                    },
                    onclick: {
                        enable: true,
                        mode: 'push'
                    }
                }
            }
        });

        // Tilt Effect
        function handleTilt(event, element) {
            const box = element.getBoundingClientRect();
            const mouseX = event.clientX - box.left;
            const mouseY = event.clientY - box.top;
            const centerX = box.width / 2;
            const centerY = box.height / 2;
            const tiltX = (mouseY - centerY) / 10;
            const tiltY = -(mouseX - centerX) / 10;
            
            element.style.transform = `perspective(1000px) rotateX(${tiltX}deg) rotateY(${tiltY}deg)`;
        }

        function resetTilt(element) {
            element.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
        }

        // Cursor Trail Effect
        function createTrail(e) {
            const trail = document.createElement('div');
            trail.className = 'cursor-trail';
            trail.style.left = e.pageX + 'px';
            trail.style.top = e.pageY + 'px';
            document.body.appendChild(trail);

            setTimeout(() => {
                trail.remove();
            }, 500);
        }

        document.addEventListener('mousemove', createTrail);

        // Counter Animation
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            const duration = 2000; // 2 seconds
            const increment = target / (duration / 16); // 60fps
            let current = 0;

            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    counter.textContent = Math.ceil(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };

            const observer = new IntersectionObserver((entries) => {
                if (entries[0].isIntersecting) {
                    updateCounter();
                    observer.disconnect();
                }
            });

            observer.observe(counter);
        });

        // Parallax Effect
        document.addEventListener('mousemove', (e) => {
            const elements = document.querySelectorAll('.parallax-element');
            const mouseX = e.clientX / window.innerWidth - 0.5;
            const mouseY = e.clientY / window.innerHeight - 0.5;

            elements.forEach(element => {
                const depth = parseInt(element.getAttribute('data-depth') || 10);
                const moveX = mouseX * depth;
                const moveY = mouseY * depth;
                element.style.transform = `translate3d(${moveX}px, ${moveY}px, 0)`;
            });
            
        });

        // Mobile Menu Toggle
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
            if (!menu.classList.contains('hidden')) {
                menu.style.maxHeight = menu.scrollHeight + "px";
            } else {
                menu.style.maxHeight = "0";
            }
        }

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
                const target = document.querySelector(this.getAttribute('href'));
                
                // Get navbar height for offset
                const navHeight = document.querySelector('nav').offsetHeight;
                
                // Calculate position with offset
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - navHeight;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });

                // Close mobile menu if open
                const mobileMenu = document.getElementById('mobileMenu');
                if (!mobileMenu.classList.contains('hidden')) {
                    toggleMobileMenu();
                }
            });
        });
        function showDetail(id) {
            const detail = document.getElementById(id);
            detail.style.opacity = '1'; // Tampilkan elemen
        }

        function hideDetail(id) {
            const detail = document.getElementById(id);
            detail.style.opacity = '0'; // Sembunyikan elemen
        }

    </script>
</body>
</html>