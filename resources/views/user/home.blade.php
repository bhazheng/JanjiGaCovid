<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">


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

    @include('user.navbar')
    
    <!-- .page-section -->

    <div class="page-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 py-3 wow fadeInUp">
                    <h1>Cari Lokasi<br>Vaksinmu Di sini</h1>
                    <p class="text-grey mb-4">Cari lokasi vaksin terdekat di Malang <br>dan daftarkan diri anda sekarang
                    </p>
                    @if (Route::has('login'))

                        @auth
                        
                            <a href="{{ url('daftar') }}" class="btn btn-primary" style="color:#fff; font-weight:bold;">Daftar
                                Vaksin</a>
                        
                    
                        @else
                
                            <a href="{{ route('login') }}" class="btn btn-primary" style="color:#fff; font-weight:bold;">Daftar
                                Vaksin</a>
                
                        @endauth
                
                    @endif
                    
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

    @include('user.footer')

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>
