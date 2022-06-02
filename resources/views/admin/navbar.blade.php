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
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown"
                    data-bs-toggle="dropdown" aria-expanded="false" href="#">+ Edit Data</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="createbuttonDropdown">

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1">Pendaftar Vaksin</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">

                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1">Jenis Vaksin</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">

                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1">Layanan Kesehatan</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                </div>
            </li>

            <x-app-layout>
            </x-app-layout>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
        </button>
    </div>
</nav>