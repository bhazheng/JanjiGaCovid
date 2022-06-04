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

        <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')

        <!-- partial -->
        
        <!-- partial:partials/_navbar.html -->

        @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center" style="padding-top: 100px;">
                <form action="{{ url('upload_vaccine') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div style="padding: 15px;">
                        <label>Nama Vaksin</label>
                        <input type="text" style="color: black;" name="vaccineName" placeholder="Masukkan nama vaksin">
                    </div>

                    <div style="padding: 15px;">
                        <label>Deskripsi Vaksin</label>
                        <input type="text" style="color: black;" name="vaccineDesc" placeholder="Masukkan deskripsi singkat vaksin">
                    </div>

                    <div style="padding: 15px;">
                        <label>Logo Vaksin</label>
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
