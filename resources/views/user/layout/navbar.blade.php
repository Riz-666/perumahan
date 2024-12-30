<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <img class="img-brand"
            src="https://img.freepik.com/premium-vector/minimalist-company-logo-template_1283348-94958.jpg"
            alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ Route('user.dashboard') }}">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ Route('user.index.properti') }}">PROPERTI</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ Route('user.index.media') }}">
                        MEDIA
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ Route('user.index.kontak') }}">KONTAK</a>
                </li>
            </ul>
        </div>
        <div class="d-flex navbar-item">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <div class="container">
                    <div class="dropdown">
                        <div class="profile">
                            <button href="" class="dropbtn">
                                Halo {{ Auth::user()->nama }}
                                <img class="dropbtn" src="#">
                            </button>
                            <div class="dropdown-content dropdown-menu-end">
                                <ul>
                                    <li><a href="" class=""><i class='fa fa-user'></i> <span> profile</span></a></li>
                                    <li><a href="{{ Route('page.logout') }}" class=""><i class='fa fa-power-off'></i> <span> Logout</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>
