<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        label {
            display: inline-block;
            width: 200px;
        }
    </style>
    <!-- Required meta tags -->
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">

        <!-- partial -->
        
        <!-- partial:partials/_navbar.html -->

        @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center" style="padding-top: 100px;">

                <!-- upload data success message -->
                @if(session()->has('message'))

                <div class="alert alert-success">
                    <button class="close" type="button" data-dismiss="alert">
                        x
                    </button>

                    {{ session()->get('message') }}
                </div>

                @endif

                <form action="{{ url('upload_pendaftar') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div style="padding: 15px;">
                        <label>Nama Lengkap</label>
                        <input type="text" style="color: black;" name="name" placeholder="Masukkan nama vaksin" required>
                    </div>

                    <div style="padding: 15px;">
                        <label>NIK</label>
                        <input type="text" style="color: black;" name="nik" placeholder="Masukkan nama vaksin" required>
                    </div>

                    <div style="padding: 15px;">
                        <label>Tanggal Lahir</label>
                        <input type="date" style="color: black;" name="lahir" placeholder="Masukkan nama vaksin" required>
                    </div>

                    <div style="padding: 15px;">
                        <label>Jenis Kelamin</label>
                        <select name="jeniskelamin" class="custom-select" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div style="padding: 15px;">
                        <label>Email</label>
                        <input type="email" style="color: black;" name="email" placeholder="Masukkan nama vaksin" required>
                    </div>

                    <div style="padding: 15px;">
                        <label>Alamat</label>
                        <input type="text" style="color: black;" name="alamat" placeholder="Masukkan deskripsi singkat vaksin" required>
                    </div>

                    <div style="padding: 15px;">
                        <label>Provinsi</label>
                        <select name="testpro" class="custom-select"  required>
                            <option value="Jawa Timur">Jawa Timur</option>
                        </select>
                    </div>

                    <div style="padding: 15px;">
                        <label>Kota/Kabupaten</label>
                        <select name="kota" class="custom-select" required>
                            <option value="Kota Malang">Kota Malang</option>
                            <option value="Kabupaten Malang">Kabupaten Malang</option>
                        </select>
                    </div>

                    <div style="padding: 15px;">
                        <label>Fasilitas Kesehatan</label>
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

                    <div style="padding: 15px;">
                        <label>Jenis Vaksin</label>
                        <select name="jenisvaksin" class="custom-select" required>
                            <option value="Vaksin-1">Vaksin-1</option>
                            <option value="Vaksin-1">Vaksin-2</option>
                            <option value="Vaksin-1">Vaksin Booster</option>
                        </select>
                    </div>

                    <div style="padding: 15px;">
                        <input type="submit" class="btn btn-success" style="background-color: #00D25B;">
                    </div>

                </form>
            </div>
        </div>

        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
</body>
</html>
