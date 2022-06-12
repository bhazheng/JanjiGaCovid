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

    <!-- .page-section -->

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

                            @foreach($lkesehatans as $lokasi)
                            <option value="{{ $lokasi->layanan_kesehatan }}">{{ $lokasi->layanan_kesehatan }}</option>
                            @endforeach

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

                <input type="submit" class="btn btn-primary" style="background-color: #358C98">
            </form>
        </div>
    </div> <!-- .page-section -->

    @include('user.footer')

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>
