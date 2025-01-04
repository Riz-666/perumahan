<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> {{ $judul }} </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('storage/default-img/2.png') }}" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <!-- DataTables -->
    <link href="{{ asset('DataTables/datatables.min.css') }}" rel="stylesheet">
    <!-- costume-css -->
    <link href="{{ asset('admin/css/css-costume/style.css') }}" rel="stylesheet">
    {{-- sweetAlert --}}
    <link rel="stylesheet" href="{{ asset('sweetalert2/dist/sweetalert2.all.min.css') }}">
    {{-- select2 --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('select2/dist/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('select2/dist/select2-bootstrap4.css') }}">
    {{-- CkEditor --}}
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.css">
</head>

<body>
    <div class="container-scroller">
        @include('admin.layout.navbar')


        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ Route('admin_dashboard') }}">
                        <i class="mdi mdi-grid-large menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item nav-category">Kelola Data</li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
                        aria-controls="form-elements">
                        <i class="menu-icon mdi mdi-account"></i>
                        <span class="menu-title">User</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="form-elements">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{ Route('admin.data') }}">Admin</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ Route('pembeli.data') }}">Pembeli</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false"
                        aria-controls="charts">
                        <i class="menu-icon mdi mdi-chart-line"></i>
                        <span class="menu-title">Properti</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ Route('properti_data') }}">Rumah</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="{{ Route('fasilitas_data') }}">Fasilitas</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false"
                        aria-controls="tables">
                        <i class="menu-icon mdi mdi-table"></i>
                        <span class="menu-title">Gallery</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ Route('media_data') }}">Foto Gallery</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                      <i class="menu-icon mdi mdi-script-text"></i>
                      <span class="menu-title">Data Transaksi</span>
                      <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="icons">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ Route('transaksi_data') }}">User</a></li>
                      </ul>
                    </div>
                  </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- content-wrapper ends -->
    @include('admin.layout.footer')
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('admin/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/progressbar.js/progressbar.min.js') }}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/js/template.js') }}"></script>
    <script src="{{ asset('admin/js/settings.js') }}"></script>
    <script src="{{ asset('admin/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('admin/js/dashboard.js') }}"></script>
    <script src="{{ asset('admin/js/Chart.roundedBarCharts.js') }}"></script>
    <!-- fontawesome js -->
    <script src="{{ asset('fontawesome/js/all.min.js') }}"></script>
    <!-- End custom js for this page-->
    <!-- dataTables -->
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <!-- Costume-js -->
    <script src="{{ asset('admin/js-costume/style.js') }}"></script>
    {{-- sweetAlert --}}
    <script src="{{ asset('sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
    {{-- Select2 --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/4.4.1/standard/ckeditor.js"></script>
    {{-- Axios --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil !!!',
                text: '{{ session('success') }}'
            });
        </script>
    @endif

    <script type="text/javascript">
        //Konfirmasi delete
        $('#show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var konfdelete = $(this).data("konf-delete");
            event.preventDefault();
            Swal.fire({
                title: 'Konfirmasi Hapus Data?',
                html: "Data yang dihapus <strong>" + konfdelete + "</strong> tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, dihapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire('Terhapus!', 'Data berhasil dihapus.', 'success')
                        .then(() => {
                            form.submit();
                        });
                }
            });
        });
    </script>
    @if(session('status'))
    <script>
        Swal.fire({
            title: 'Selamat Datang',
            text: '{{ session('status') }}-San',
            imageUrl: 'https://i.pinimg.com/736x/9e/22/90/9e2290c9dce085c2f9b1f1dd013f0732.jpg',
            imageWidth: 400,
            imageHeight: 400,
        });
    </script>
    @endif
    <script>
        CKEDITOR.replace('ckeditor', {
            allowedContent: true,
            disallowedContent: 'strong em u p'
        });
    </script>
</body>

</html>
