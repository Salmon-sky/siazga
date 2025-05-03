<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <!-- Bootstrap CSS -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    <script src="https://kit.fontawesome.com/2a99f4df77.js" crossorigin="anonymous"></script>

    @yield('style')

    <!--Favicon-->
    {{-- <link rel="icon" href="{{ asset('favicon/favicon.ico') }}" type="image/x-icon"> --}}
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('favicon/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ asset('favicon/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('favicon/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('favicon/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('favicon/apple-touch-icon-60x60.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120"
        href="{{ asset('favicon/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('favicon/apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152"
        href="{{ asset('favicon/apple-touch-icon-152x152.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-196x196.png') }}" sizes="196x196" />
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-16x16.png') }}" sizes="16x16" />
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-128.png') }}" sizes="128x128" />
    <meta name="msapplication-TileImage" content="{{ asset('favicon/mstile-144x144.png') }}" />
    <meta name="msapplication-square70x70logo" content="{{ asset('favicon/mstile-70x70.png') }}" />
    <meta name="msapplication-square150x150logo" content="{{ asset('favicon/mstile-150x150.png') }}" />
    <meta name="msapplication-wide310x150logo" content="{{ asset('favicon/mstile-310x150.png') }}" />
    <meta name="msapplication-square310x310logo" content="{{ asset('favicon/mstile-310x310.png') }}" />
    <style>
        /* Tambahan CSS untuk styling khusus */
        .navbar {
            background-color: #086623;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 1.2rem;
        }

        @media (max-width: 768px) {

            .hero-section h1 {
                font-size: 2rem;
            }

            .hero-section p {
                font-size: 1rem;
            }

            .footer {
                font-size: 0.9rem;
            }

            .kepsek {
                width: 200px;
            }
        }

        .footer {
            background-color: #086623;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        .card {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="#">SMA AL-AZHAR 3</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#sop">SOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#visi-misi">Visi Misi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <img src="{{ asset('assets/img/alazar.jpg') }}" alt="Gambar" class="img img-fluid w-100">
        </div>
    </section>

    <!-- Profil Section -->
    <section id="profil" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 text-center mb-4">
                    <img src="{{ asset('assets/img/kepyayasan.jpg') }}" class="img-fluid kepsek"
                        alt="Profil Sekolah">
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center mb-4">Sambutan Kepala Yayasan</h2>
                            <p class="text-justify">
                                Assalamu’alaikum wr.wb.<br><br>

                                Puji syukur kita panjatkan kehadirat Allah SWT atas segala limpahan rahmat, taufiq dan
                                hidayah-Nya, sehingga kita masih diberi kesempatan untuk berpartisipasi secara aktif
                                dalam dunia pendidikan.

                                Dalam kesempatan ini kami ingin memperkenalkan website SMA Al-Azhar 3 Bandar Lampung.
                                Pembuatan website ini dimaksudkan untuk memperkenalkan sekolah secara luas kepada
                                masyarakat dan sebagai sarana informasi dan komunikasi antara pihak sekolah dengan
                                siswa, guru, karyawan, alumni dan stakeholders yang memiliki kepedulian, wewenang, dan
                                tanggung jawab dalam memajukan SMA Al-Azhar 3 Bandar Lampung.

                                Selanjutnya website sekolah ini dapat berfungsi sebagai media pembelajaran yang memuat
                                materi maupun tugas yang dibuat oleh guru, sehingga akan menunjang kegiatan pembelajaran
                                berbasis Teknologi Informasi dan Komunikasi. Selain itu, semua kegiatan sekolah intra
                                maupun ekstrakurikuler dapat diunggah melalui website dengan harapan masyarakat luas
                                mengetahui kegiatan dan prestasi dari SMA Al-Azhar 3 Bandar Lampung.

                                Akhirnya, kami mengucapkan terima kasih atas kunjungan, apresiasi, dan masukan dari
                                semua pihak terhadap website SMA Al-Azhar 3 Bandar Lampung.

                                Wassalamu’alaikum wr.wb.
                            </p>
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
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Visi</h3>
                            <p class="card-text">Unggul Islami Terpercaya Pilihan Masyarakat Lampung.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Misi</h3>
                            <ol class="card-text">
                                <li>Membangun lingkungan belajar berkualitas dan memiliki keunggulan dalam pendidikan
                                    umum dan keislaman.</li>
                                <li>Meningkatkan pendalaman Al Qur’an, sholat dan nilai-nilai keimanan.</li>
                                <li>Menciptakan nuansa pembelajaran yang islam, efektif, kreatif dan menyenangkan.</li>
                                <li>Mewujudkan kualitas keberhasilan siswa berakhlakul karimah dan berdaya saing tinggi.
                                </li>
                                <li>Menyelenggarakan pola pembelajaran yang professional.</li>
                                <li>Mensinergikan dan menyegarkan budaya disiplin diri, guru dan siswa.</li>
                                <li>Menyalakan pijar berbagai kegiatan ekstrakurikuler yang mempunyai konstribusi
                                    terhadap tumbuhnya kedisiplinan di kalangan pelajar.</li>
                                <li>Meningkatkan kerjasama antara sekolah dan masyarakat, dalam rangka mewujudkan
                                    aspirasinya terkait output yang berkualitas dan diakui dilingkungan pendidikan.</li>
                                <li>Mengapresiasi kepercayaan dengan menyediakan sarana pembelajaran yang modern
                                    berkarakter IT.</li>
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

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- SweetAlert2 -->
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    {{-- script js bootstrap 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    @yield('script')
</body>

</html>
