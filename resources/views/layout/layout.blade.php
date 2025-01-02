<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

    {{-- sweetAlert --}}
    <link rel="stylesheet" href="{{ asset('sweetalert2/dist/sweetalert2.all.min.css') }}">
</head>

<body>


    @include('layout.navbar')

    @yield('content')

    @include('layout.footer')

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- fontawesome js -->
    <script src="{{ asset('fontawesome/js/all.min.js') }}"></script>

    {{-- JS costume --}}
    <script src="{{ asset('js-costume/style.js') }}"></script>

    {{-- sweetAlert --}}
    <script src="{{ asset('sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

    @if (session('status'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Selamat",
                text: '{{ session('status') }}',
                showConfirmButton: false,
                timer: 1500,
                customClass:'swall-size'
            });
        </script>
    @endif
</body>

</html>
