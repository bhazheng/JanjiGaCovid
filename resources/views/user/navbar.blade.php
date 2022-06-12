<header style="position: sticky; top: 0; z-index: 10; background-color:#1C3B48">
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container" style="width: 1140px;">
            <a class="navbar-brand" href="{{ url('/') }}" style="color: #358c98; font-size:20px; font-family: 'Source Sans Pro', sans-serif; margin: 0px 16px 0px 0px; padding: 10px 0px;"><span class="text-primary" style="font-size: 20px; font-family: 'Source Sans Pro', sans-serif">JANJI</span>GACOVID</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto my-auto" style="font-family: 'Source Sans Pro', sans-serif">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('faq') }}">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentangKami">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#jenisVaksin">Jenis Vaksin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                    

                    @if (Route::has('login'))

                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('checkprofile')}}">Profile</a>
                    </li>
                    <x-app-layout>
                    </x-app-layout>

                    @else

                    <li class="nav-item">
                        <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                    </li>

                    @endauth

                    @endif

                </ul>
            </div><!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>