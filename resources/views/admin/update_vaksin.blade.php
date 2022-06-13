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

                <form action="{{ url('editVaksin', $vaksin->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div style="padding: 15px;">
                        <label>Nama Vaksin</label>
                        <input type="text" class="form-control" style="color: black;" name="vaccineName" value="{{ $vaksin->nama_vaksin }}" placeholder="Masukkan nama vaksin" required>
                    </div>

                    <div style="padding: 15px;">
                        <label>Deskripsi Vaksin</label>
                        <input type="text" class="form-control" style="color: black;" name="vaccineDesc" value="{{ $vaksin->deskripsi_vaksin }}" placeholder="Masukkan deskripsi singkat vaksin" required>
                    </div>

                    <div style="padding: 15px;">
                        <label>Gambar vaksin saat ini</label><br>
                        <img src="vaccineimage/{{ $vaksin->image }}">
                    </div>

                    <div style="padding: 15px;">
                        <label>Ganti Gambar</label><br>
                        <input type="file" name="file">
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
