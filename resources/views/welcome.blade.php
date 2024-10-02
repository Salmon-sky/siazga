<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Tambahan CSS untuk styling khusus */
        .navbar {
            background-color: #086623;
        }

        .navbar-brand, .nav-link {
            color: #ffffff !important;
        }

        .hero-section {
            background: url('school-banner.jpg') no-repeat center center;
            background-size: cover;
            height: 80vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 4rem;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 1.5rem;
        }

        .footer {
            background-color: #086623;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">SMA AL-AZHAR 3</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">SOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#visi-misi">Visi Misi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <img src="{{asset('assets/img/alazar.jpg')}}" alt="Gambar" class="img-fluid w-100">
        </div>
    </section>    

    <!-- Profil Section -->
    <section id="profil" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="{{asset('assets/img/kepyayasan.jpg')}}" class="img-fluid" alt="Profil Sekolah" style="max-width: 450px;">
                </div>
                <div class="col-md-6">
                    <div class="card" style="min-height: 400px;">
                        <div class="card-body">
                            <h3 class="card-title">Sambutan Kepala Yayasan</h3>
                            <p class="card-text">Assalamu’alaikum wr.wb.

Puji syukur kita panjatkan kehadirat Allah SWT atas segala limpahan rahmat, taufiq dan hidayah-Nya, sehingga kita masih diberi kesempatan untuk berpartisipasi secara aktif dalam dunia pendidikan.

Dalam kesempatan ini kami ingin memperkenalkan website SMA Al-Azhar 3 Bandar Lampung. Pembuatan website ini dimaksudkan untuk memperkenalkan sekolah secara luas kepada masyarakat dan sebagai sarana informasi dan komunikasi antara pihak sekolah dengan siswa, guru, karyawan, alumni dan stakeholders yang memiliki kepedulian, wewenang, dan tanggung jawab dalam memajukan SMA Al-Azhar 3 Bandar Lampung.

Selanjutnya website sekolah ini dapat berfungsi sebagai media pembelajaran yang memuat materi maupun tugas yang dibuat oleh guru,  sehingga akan menunjang kegiatan pembelajaran berbasis Teknologi Informasi dan Komunikasi. Selain itu, semua kegiatan sekolah intra maupun ekstrakurikuler dapat diunggah melalui website dengan harapan masyarakat luas mengetahui kegiatan dan prestasi dari SMA Al-Azhar 3 Bandar Lampung.

Akhirnya, kami mengucapkan terima kasih atas kunjungan, apresiasi, dan masukan dari semua pihak terhadap website SMA Al-Azhar 3 Bandar Lampung.

Wassalamu’alaikum wr.wb.</p>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>

   
    <!-- Visi Misi Section -->
<section id="visi-misi" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Visi dan Misi</h2>
        <div class="row">
            <!-- Card Visi -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Visi</h3>
                        <p class="card-text">Unggul Islami Terpercaya Pilihan Masyarakat Lampung.</p>
                    </div>
                </div>
            </div>
            <!-- Card Misi -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Misi</h3>
                        <ol class="card-text">
                            <li>Membangun lingkungan belajar yang berkualitas dan memiliki keunggulan dalam pendidikan umum dan keislaman.</li>
                            <li>Menciptakan nuansa pembelajaran yang Islami, efektif, kreatif dan menyenangkan.</li>
                            <li>Meningkatkan pendalaman Al Qur’an, sholat dan nilai-nilai keimanan, keagamaan dengan berbagai sajian kegiatan.</li>
                            <li>Mewujudkan kualitas keberhasilan siswa berakhlakul karimah dan berdaya saing tinggi.</li>
                            <li>Menyelenggarakan pola pembelajaran yang professional.</li>
                            <li>Mensinergikan dan menyegarkan budaya disiplin diri, guru dan siswa.</li>
                            <li>Menyalakan pijar berbagai kegiatan ekstrakurikuler yang mempunyai konstribusi terhadap tumbuhnya kedisiplinan di kalangan pelajar.</li>
                            <li>Meningkatkan kerjasama antara sekolah dan masyarakat, dalam rangka mewujudkan aspirasinya terkait output yang berkualitas dan diakui dilingkungan pendidikan</li>
                            <li>Mengapresiasi kepercayaan dengan menyediakan sarana pembelajaran yang modern berkarakter IT</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 SMA AL-AZHAR 3. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
