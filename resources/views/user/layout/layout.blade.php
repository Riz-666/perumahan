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
    <link rel="stylesheet" href="{{ asset('user/style.css') }}">
    <link rel="stylesheet" href="{{ asset('mahasiswa/style.css') }}">

    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

    {{-- sweetAlert --}}
    <link rel="stylesheet" href="{{ asset('sweetalert2/dist/sweetalert2.all.min.css') }}">

    <!-- DataTables -->
    <link href="{{ asset('DataTables/datatables.min.css') }}" rel="stylesheet">
</head>

<body>


    @include('user.layout.navbar')

    @yield('content')

    @include('user.layout.footer')

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- fontawesome js -->
    <script src="{{ asset('fontawesome/js/all.min.js') }}"></script>

    {{-- JS costume --}}
    <script src="{{ asset('user/style.js') }}"></script>
    <script src="{{ asset('mahasiswa/style.js') }}"></script>

    {{-- sweetAlert --}}
    <script src="{{ asset('sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

    <!-- dataTables -->
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>

    @if (session('status'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Selamat Datang",
                text: '{{ session('status') }}',
                showConfirmButton: false,
                timer: 1500,
                customClass:'swall-size'
            });
        </script>
    @endif

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil !!!',
                text: '{{ session('success') }}'
            });
        </script>
    @endif

    @if (session('pilih'))
    <script>
            Swal.fire({
                title: 'Berhasil !!!',
                text: '{{ session('pilih') }}',
                text: 'Ingin Langsung Cetak Data transaksi?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Lanjutkan',
                cancelButtonText: 'Tidak',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika tombol "Ya" diklik, redirect ke halaman lain
                    window.location.href = '{{ route('cetak_data_riwayat',session('pilih')) }}'; // Ganti URL sesuai kebutuhan
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    // Jika tombol "Tidak" diklik, SweetAlert akan ditutup
                    Swal.fire(
                        'Dibatalkan',
                        'Tindakan Anda telah dibatalkan.',
                        'info'
                    );
                }
            });
    </script>
    @endif
</body>

</html>
