<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>JANJIGACOVID</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>


        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#"><span class="text-primary">JANJI</span>GACOVID</a>



                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                    aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto my-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="doctors.html">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tentangKami">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#jenisVaksin">Jenis Vaksin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kontak">Kontak</a>
                        </li>

                        @if (Route::has('login'))

                        @auth

                        <x-app-layout>
                        </x-app-layout>

                        @else

                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                        </li>

                        @endauth

                        @endif

                    </ul>
                </div><!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>

    <!-- .page-section -->

    <div class="page-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 py-3 wow fadeInUp">
                    <h1>Cari Lokasi<br>Vaksinmu Di sini</h1>
                    <p class="text-grey mb-4">Cari lokasi vaksin terdekat di Malang <br>dan daftarkan diri anda sekarang
                    </p>
                    <a href="daftar_vaksin.html" class="btn btn-primary" style="color:#fff; font-weight:bold;">Daftar
                        Vaksin</a>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="400ms">
                    <div class="img-place custom-img-1">
                        <img src="../assets/img/Lovepik_com-401863941-medical-personnel.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .bg-light -->

    @include('user.about')

    @include('user.vaccines')

    @include('user.contact')

    <div class="page-section">

    <footer class="page-footer">
        <div class="container">
            <div class="row px-md-3">
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>JANJIGACOVID</h5>
                    <ul class="footer-menu">
                        <li><a>Janjigacovid adalah
                                situs website untuk mendaftar
                                vaksin di sekitaran Malang</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Kebijakan</h5>
                    <ul class="footer-menu">
                        <li><a href="#">Keamanan</a></li>
                        <li><a href="#">Lisensi</a></li>
                        <li><a href="#">Data</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Dukungan</h5>
                    <ul class="footer-menu">
                        <li><a href="#">Pusat</a></li>
                        <li><a href="#">Daerah</a></li>
                        <li><a href="#">Aparat</a></li>
                        <li><a href="#">Masyarakat</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Bantuan</h5>
                    <ul class="footer-menu">
                        <li><a href="#">Pusat Bantuan</a></li>
                        <li><a href="#">Rumah Sakit</a></li>
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="footer-sosmed mt-3">
                <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
            </div>
        </div>
    </footer>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>
