<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>JANJIGACOVID</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

@include('user.navbar')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"
                    class="rounded-circle mt-100" style="width:150px"><span class="font-weight-bold"
                    style="color: #1C3B48;font-size: 20px;">{{{$users->name}}}</span><span class="text-black-50"
                    style="font-size: 15px;">{{{$users->email}}}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right" style="color: #1C3B48">Profile Settings</h4>
                </div>
                <div>
                    
                </div>
                <form action="{{ url('editprofile', $profile->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-md-6" style="color: #1C3B48"><label class="labels">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap" value="{{ $profile->nama }}" name="namaProfile" required></div>
                        
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12" style="color: #1C3B48"><label class="labels">No. HP</label><input
                                type="text" class="form-control" placeholder="No. HP" value="{{ $profile->nohp }}" name="nohp" required></div>
                        <div class="col-md-12" style="color: #1C3B48"><label class="labels">Alamat</label><input
                                type="text" class="form-control" placeholder="Alamat" value="{{ $profile->alamat }}" name="alamat" required></div>
                        <div class="col-md-12" style="color: #1C3B48"><label class="labels">NIK</label><input
                                type="text" class="form-control" placeholder="NIK" value="{{ $profile->nik }}" name="nik" required></div>
                        <div class="col-md-12" style="color: #1C3B48"><label class="labels">Jenis Kelamin</label><input
                                type="text" class="form-control" placeholder="Laki-laki/Perempuan" value="{{ $profile->jeniskelamin }}" name="jeniskelamin" required></div>
                        <div class="col-md-12" style="color: #1C3B48"><label class="labels">Umur</label><input
                                type="text" class="form-control" placeholder="Umur anda" value="{{ $profile->umur }}" name="umur" required></div>
                    </div>
                    <div class="mt-5 text-center"><button type="submit" class="btn btn-primary profile-button">Save
                            Profile</button></div>

                </form>

                <!--   <div class="row mt-3">
                        <div class="col-md-6" style="color: #1C3B48"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                        <div class="col-md-6" style="color: #1C3B48"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                    </div>-->

            </div>
        </div>

    </div>
</div>
</div>
<style type="text/css">
    body {
        background: #1C3B48(99, 39, 120)
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #095560
    }

    .profile-button {
        background: #1C3B48(99, 39, 120);
        box-shadow: none;
        border: none
    }

    .profile-button:hover {
        background: #095560
    }

    .profile-button:focus {
        background: #095560;
        box-shadow: none
    }

    .profile-button:active {
        background: #095560;
        box-shadow: none
    }

    .back:hover {
        color: #095560;
        cursor: pointer
    }

    .labels {
        font-size: 11px
    }

    .add-experience:hover {
        background: #095560;
        color: #fff;
        cursor: pointer;
        border: solid 1px #095560
    }

</style>
</body>

</html>
