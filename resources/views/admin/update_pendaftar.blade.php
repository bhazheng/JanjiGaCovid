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

                <form action="{{ url('editPendaftar', $data->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div style="padding: 15px;">
                        <input type="text" class="form-control" style="color: black;" name="name" value="{{ $data->nama }}" placeholder="Masukkan nama lengkap" required>
                    </div>

                    <div style="padding: 15px;">
                        <input type="text" class="form-control" style="color: black;" name="nik" value="{{ $data->nik }}" placeholder="Masukkan NIK" required>
                    </div>

                    <div style="padding: 15px;">
                        <input type="date" class="form-control" style="color: black;" name="lahir" value="{{  $data->lahir }}" placeholder="Masukkan tanggal lahir" required>
                    </div>

                    <div style="padding: 15px;">
                        <select name="jeniskelamin" class="form-control" class="custom-select" required>
                            <option value="" disabled selected hidden>Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div style="padding: 15px;">
                        <input type="email" class="form-control" style="color: black;" name="email" value="{{ $data->email }}" placeholder="Masukkan Email" required>
                    </div>

                    <div style="padding: 15px;">
                        <input type="text" class="form-control" style="color: black;" name="alamat" value="{{  $data->alamat }}" placeholder="Masukkan Alamat" required>
                    </div>

                    <div style="padding: 15px;">
                        <select name="testpro" class="form-control" class="custom-select"  required>
                            <option value="" disabled selected hidden>Pilih Provinsi</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                        </select>
                    </div>

                    <div style="padding: 15px;">
                        <select name="kota" class="form-control" class="custom-select" required>
                            <option value="" disabled selected hidden>Pilih Kota/Kabupaten</option>
                            <option value="Kota Malang">Kota Malang</option>
                            <option value="Kabupaten Malang">Kabupaten Malang</option>
                        </select>
                    </div>

                    <div style="padding: 15px;">
                        <select name="lokasi" class="form-control" class="custom-select" required>
                            <option value="" disabled selected hidden>Pilih Fasilitas Kesehatan</option>

                            @foreach ($lkesehatans as $lokasi)
                            <option value="{{ $lokasi->layanan_kesehatan }}">{{ $lokasi->layanan_kesehatan }}</option>
                            @endforeach
                            
                        </select>
                    </div>

                    <div style="padding: 15px;">
                        <select name="jenisvaksin" class="form-control" class="custom-select" required>
                            <option value="" disabled selected hidden>Pilih Jenis Vaksin</option>
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
