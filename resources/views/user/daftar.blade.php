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

    @include('user.navbar')




    <div class="page-section py-3 mt-md-n5 custom-index">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 py-3 py-md-0">

                </div>
                <div class="col-md-4 py-3 py-md-0">

                </div>
                <div class="col-md-4 py-3 py-md-0">

                </div>
            </div>
        </div>
    </div> <!-- .page-section -->

    <!-- .bg-light -->
    @if (session()->has('message'))
        <div class="alert alert-successs" role="alert">
            <button class="close" data-dismiss="alert">x</button>
            {{ session()->get('message') }}
        </div>
    @else
        
    @endif
    <div class="page-section">
        <div class="container">
            <h1 class="text-center wow fadeInUp" style=color:#fff><strong>FORMULIR PENDAFTARAN VAKSIN</h1>

            <form class="main-form" action="{{route('daftarVaksin')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-5">
                    <div class="col-12 py-2 wow fadeInLeft"
                        style="color:#fff; font-family: 'Cantarell', 'Open Sans', 'Helvetica Neue', sans-serif;">
                        <h6>Nama Lengkap</h6>
                        <input type="text" class="form-control" placeholder="Type Here" name="name" required>
                    </div>
                    <div class="col-12 py-2 wow fadeInLeft"
                        style="color:#fff; font-family: 'Cantarell', 'Open Sans', 'Helvetica Neue', sans-serif;">
                        <h6>NIK</h6>
                        <input type="text" class="form-control" placeholder="Type Here" name="nik" required>
                    </div>
                    <div class="col-12 py-2 wow fadeInLeft"
                        style="color:#fff; font-family: 'Cantarell', 'Open Sans', 'Helvetica Neue', sans-serif;">
                        <h6>Tanggal Lahir</h6>
                        <input type="date" class="form-control" placeholder="Tanggal Lahir" name="lahir" required>
                    </div>
                    <div class="col-12 py-2 wow fadeInLeft"
                        style="color:#fff; font-family: 'Cantarell', 'Open Sans', 'Helvetica Neue', sans-serif;">
                        <h6>Jenis Kelamin</h6>
                        <select name="jeniskelamin" class="custom-select" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-12 py-2 wow fadeInLeft"
                        style="color:#fff; font-family: 'Cantarell', 'Open Sans', 'Helvetica Neue', sans-serif;">
                        <h6>Email Aktif</h6>
                        <input type="email" class="form-control" placeholder="Type Here" name="email" required>
                    </div>
                    <div class="col-12 py-2 wow fadeInLeft"
                        style="color:#fff; font-family: 'Cantarell', 'Open Sans', 'Helvetica Neue', sans-serif;">
                        <h6>Alamat Domisili</h6>
                        <input type="text" class="form-control" placeholder="Type Here" name="alamat" required>
                    </div>
                    <div class="col-12 py-2 wow fadeInLeft"
                        style="color:#fff; font-family: 'Cantarell', 'Open Sans', 'Helvetica Neue', sans-serif;">
                        <h6>Provinsi</h6>
                        <select name="testpro" class="custom-select"  required>
                            <option value="Jawa Timur">Jawa Timur</option>
                        </select>
                    </div>
                    <div class="col-12 py-2 wow fadeInLeft"
                        style="color:#fff; font-family: 'Cantarell', 'Open Sans', 'Helvetica Neue', sans-serif;">
                        <h6>Kota/Kabupaten</h6>
                        <select name="kota" class="custom-select" required>
                            <option value="Kota Malang">Kota Malang</option>
                            <option value="Kabupaten Malang">Kabupaten Malang</option>
                        </select>
                    </div>
                    <div class="col-12 py-2 wow fadeInLeft"
                        style="color:#fff; font-family: 'Cantarell', 'Open Sans', 'Helvetica Neue', sans-serif;">
                        <h6>Pilih Lokasi Vaksin</h6>
                        <select name="lokasi" class="custom-select" required>
                            <option value="RS Saiful Anwar">RS Saiful Anwar</option>
                            <option value="RSUD Kota Malang">RSUD Kota Malang</option>
                            <option value="RS Lavalette">RS Lavalette</option>
                            <option value="RST Soepraoen">RST Soepraoen</option>
                            <option value="RS Hermina">RS Hermina</option>
                            <option value="RSI Unisma">RSI Unisma</option>
                            <option value="Puskesmas Kedungkandang">Puskesmas Kedungkandang</option>
                            <option value="Puskesmas Gribig">Puskesmas Gribig</option>
                            <option value="Puskesmas Arjowinangun">Puskesmas Arjowinangun</option>
                            <option value="Puskesmas Janti">Puskesmas Janti</option>
                            <option value="Puskesmas Ciptomulyo">Puskesmas Ciptomulyo</option>
                            <option value="Puskesmas Mulyorejo">Puskesmas Mulyorejo</option>
                            <option value="Puskesmas Arjuno">Puskesmas Arjuno</option>
                            <option value="Puskesmas Bareng">Puskesmas Bareng</option>
                            <option value="Puskesmas Rampal Celaket">Puskesmas Rampal Celaket</option>
                            <option value="Puskesmas Kendal Kerep">Puskesmas Kendal Kerep</option>
                            <option value="Puskesmas Cisadea">Puskesmas Cisadea</option>
                            <option value="Puskesmas Pandanwangi">Puskesmas Pandanwangi</option>
                            <option value="Puskesmas Dinoyo">Puskesmas Dinoyo</option>
                            <option value="Puskesmas Kendalsari">Puskesmas Kendalsari</option>
                            <option value="Puskesmas Mojolangu">Puskesmas Mojolangu</option>
                            <option value="Puskesmas Polowijen">Puskesmas Polowijen</option>
                        </select>
                    </div>
                    <div class="col-12 py-2 wow fadeInLeft"
                        style="color:#fff; font-family: 'Cantarell', 'Open Sans', 'Helvetica Neue', sans-serif;">
                        <h6>Jenis Vaksin</h6>
                        <select name="jenisvaksin" class="custom-select" required>
                            <option value="Vaksin-1">Vaksin-1</option>
                            <option value="Vaksin-1">Vaksin-2</option>
                            <option value="Vaksin-1">Vaksin Booster</option>
                        </select>
                    </div>
                    <!--<div class="col-12 col-sm-6 py-2 wow fadeInLeft">-->
                    <!--<input type="text" class="form-control" placeholder="Alamat Email">-->
                    <!--</div>-->
                </div>

                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div> <!-- .page-section -->



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
