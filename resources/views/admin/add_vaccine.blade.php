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

                <form action="{{ url('upload_vaccine') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div style="padding: 15px;">
                        <input type="text" class="form-control" style="color: black;" name="vaccineName" placeholder="Masukkan nama vaksin" required>
                    </div>

                    <div style="padding: 15px;">
                        <input type="text" class="form-control" style="color: black;" name="vaccineDesc" placeholder="Masukkan deskripsi singkat vaksin" required>
                    </div>

                    <div style="padding: 15px;">
                        <input type="file" name="file" required>
                    </div>

                    <div style="padding: 15px;">
                        <input type="submit" class="form-control" class="btn btn-success" style="background-color: #00D25B;">
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
