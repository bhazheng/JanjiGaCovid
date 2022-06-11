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

            <div class="container" align="center" style="padding-top: 20px;">

                <!-- upload data success message -->
                @if (session()->has('message'))
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
                        <input type="text" class="form-control" style="color: black;" name="vaccineName"
                            value="{{ $vaksin->nama_vaksin }}" placeholder="Masukkan nama vaksin" required>
                    </div>

                    <div style="padding: 15px;">
                        <label>Deskripsi Vaksin</label>
                        <input type="text" class="form-control" style="color: black;" name="vaccineDesc"
                            value="{{ $vaksin->deskripsi_vaksin }}" placeholder="Masukkan deskripsi singkat vaksin"
                            required>
                    </div>

                    <div style="padding: 15px;">
                        <label>Gambar vaksin saat ini</label>
                        <img class="object-cover w-25" src="vaccineimage/{{ $vaksin->image }}">
                    </div>

                    <!-- <div style="padding: 15px;">
                        <label>Ganti Gambar</label>
                        <input type="file" class="form-control" name="file">
                    </div> -->

                    <div class="form-group">
                        <label>Ganti Gambar</label>
                        <input type="file" name="file" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                                placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-success ml-1" style="background-color: #00D25B;" type="button">Upload</button>
                            </span>
                        </div>
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
