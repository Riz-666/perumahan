<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <img class="img-brand" src="https://img.freepik.com/premium-vector/minimalist-company-logo-template_1283348-94958.jpg" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ Route('index.properti') }}">PROPERTI</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ Route('index.media') }}">
                        MEDIA
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ Route('index.kontak') }}">KONTAK</a>
                </li>
            </ul>
        </div>
        <div class="d-flex navbar-item">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="navbar-item">
                    <a class="nav-link" href="{{ Route('index.login') }}">Login</a>
                </li>
                <li>
                    <a class="nav-link daftar" href="{{ Route('index.daftar') }}">Daftar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
