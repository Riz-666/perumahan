<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <img class="img-brand" src="{{ asset('storage/default-img/2_3.png') }}" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ Route('user_Dashboard') }}">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ Route('user_Properti') }}">PROPERTI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ Route('user_galleri') }}">
                        MEDIA
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ Route('user_Kontak') }}">KONTAK</a>
                </li>
            </ul>
        </div>
        <div class="d-flex navbar-item">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <div class="container">
                    <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="user-name">{{ Auth::user()->nama }}</span>
                            @if (Auth::user()->foto)
                                <img class="avatar" src="{{ asset('storage/user-img/' . Auth::user()->foto) }}"
                                    class="foto-preview">
                            @else
                                <img class="avatar" src="{{ asset('storage/user-img/default-user.jpg') }}"
                                    class="foto-preview">
                            @endif

                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            @if (Auth::user()->foto)
                                <img class="avatar" src="{{ asset('storage/user-img/' . Auth::user()->foto) }}"
                                    class="foto-preview">
                            @else
                                <img class="avatar" src="{{ asset('storage/user-img/default-user.jpg') }}"
                                    class="foto-preview">
                            @endif
                            <li>
                                <p class="email">{{ Auth::user()->email }}</p>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item edit-title" href="#"><i class="fa fa-pen"></i> Edit
                                    Profile</a></li>
                            <li><a class="dropdown-item logout-title" href="{{ Route('page.logout') }}"><i
                                        class="fa fa-power-off"></i><span> Logout</span></a></li>
                        </ul>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>
