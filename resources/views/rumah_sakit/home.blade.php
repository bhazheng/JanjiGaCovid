<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top text-2xl" style="font-family: 'Source Sans Pro', sans-serif; color:white">
                <a class="brand-logo" href="{{ url('/') }}"><span class="" style="color: #358c98">JANJI</span>GACOVID</a>
            </div>

            <ul class="nav">
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ url('/') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="#"><img src="admin/assets/images/logo.png" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
            
                    <ul class="navbar-nav navbar-nav-right">
                        
                        <x-app-layout>
                        </x-app-layout>
            
                    </ul>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="row">

                        <div class="row">


                            <div class="row" style="width: 100%; margin: 0 0 24px;">
                                <div class="grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Pendaftar Vaksin</h5>
                                            <div class="row">
                                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                        <h2 class="mb-0">{{ $pendaftarSum }}</h2>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="icon icon-box-success ">
                                                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row" id="tabel_pendaftar">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Pendaftar Vaksin</h4>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th style="color:white">Nama</th>
                                                            <th style="color:white">NIK</th>
                                                            <th style="color:white">Tanggal Lahir</th>
                                                            <th style="color:white">Jenis Kelamin</th>
                                                            <th style="color:white">Email</th>
                                                            <th style="color:white">Alamat</th>
                                                            <th style="color:white">Provinsi</th>
                                                            <th style="color:white">Kota</th>
                                                            <th style="color:white">Jenis Vaksin</th>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                            
                                                        @foreach($daftars as $data)
                            
                                                        <tr> 
                                                            <td>{{ $data->nama }}</td>
                                                            <td>{{ $data->nik }}</td>
                                                            <td>{{ $data->lahir }}</td>
                                                            <td>{{ $data->jeniskelamin }}</td>
                                                            <td>{{ $data->email }}</td>
                                                            <td>{{ $data->alamat }}</td>
                                                            <td>{{ $data->provinsi }}</td>
                                                            <td>{{ $data->kota }}</td>
                                                            <td>{{ $data->jenisvaksin }}</td>
                                                        </tr>
                            
                                                        @endforeach
                            
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- content-wrapper ends -->
                        <!-- partial:partials/_footer.html -->
                        <footer class="footer">
                            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                                    bootstrapdash.com 2021</span>
                                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                                        href="https://www.bootstrapdash.com/bootstrap-admin-template/"
                                        target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
                            </div>
                        </footer>
                        <!-- partial -->
                    </div>
                    <!-- main-panel ends -->
                </div>
                <!-- page-body-wrapper ends -->
            </div>
            <!-- container-scroller -->
            <!-- plugins:js -->
            @include('rumah_sakit.script')
</body>

</html>
