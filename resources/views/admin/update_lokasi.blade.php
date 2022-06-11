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
    <base href="/public">  
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">

        <!-- partial -->
        @include('admin.sidebar')
        
        <!-- partial:partials/_navbar.html -->

        @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center">

                <!-- upload data success message -->
                @if(session()->has('message'))

                <div class="alert alert-success">
                    <button class="close" type="button" data-dismiss="alert">
                        x
                    </button>

                    {{ session()->get('message') }}
                </div>

                @endif

                <form action="{{ url('editLokasi', $lokasi->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div style="padding: 15px;">
                        <label>Nama layanan Kesehatan</label>
                        <input type="text" class="form-control" style="color: black;" name="layananKesehatan" value="{{ $lokasi->layanan_kesehatan }}" placeholder="Masukkan nama layanan kesehatan" required>
                    </div>

                    <div style="padding: 15px;">
                        <label>Kecamatan</label>
                        <input type="text" class="form-control" style="color: black;" name="kecamatan" value="{{ $lokasi->kecamatan }}" placeholder="Masukkan kecamatan" required>
                    </div>

                    <div style="padding: 15px;">
                        <label>Kelurahan</label>
                        <input type="text" class="form-control" style="color: black;" name="kelurahan" value="{{ $lokasi->kelurahan }}" placeholder="Masukkan kelurahan" required>
                    </div>

                    <div style="padding: 15px;">
                        <label>Alamat</label>
                        <input type="text" class="form-control" style="color: black;" name="alamat" value="{{ $lokasi->alamat }}" placeholder="Masukkan alamat">
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
