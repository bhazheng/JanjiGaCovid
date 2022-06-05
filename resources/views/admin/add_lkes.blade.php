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

                <form action="{{ url('upload_layanan_kesehatan') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div style="padding: 15px;">
                        <label>Nama layanan Kesehatan</label>
                        <input type="text" style="color: black;" name="layananKesehatan" placeholder="Masukkan nama layanan kesehatan" required>
                    </div>

                    <div style="padding: 15px;">
                        <label>Kecamatan</label>
                        <input type="text" style="color: black;" name="kecamatan" placeholder="Masukkan kecamatan" required>
                    </div>

                    <div style="padding: 15px;">
                        <label>Kelurahan</label>
                        <input type="text" style="color: black;" name="kelurahan" placeholder="Masukkan kelurahan" required>
                    </div>

                    <div style="padding: 15px;">
                        <label>Alamat</label>
                        <input type="text" style="color: black;" name="alamat" placeholder="Masukkan alamat">
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
