<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>DLH Kota Surakarta&mdash; @yield('title')</title>
    <link rel="icon" href="{{ asset('template/assets/img/pemkot.png') }}">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('template/node_modules/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet"
        href="{{ asset('template/node_modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/node_modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/node_modules/selectric/public/selectric.css') }}">
    <link rel="stylesheet"
        href="{{ asset('template/node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet"
        href="{{ asset('template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('template/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/template.css') }}">
    {{-- Leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>

</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg bg-success"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <div class="search-backdrop"></div>
                        <div class="search-result">
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset('template/assets/img/avatar/avatar-1.png') }}"
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ url('/logout') }}" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">
                            <img class="image" src="{{ asset('template/assets/img/logo_baru.jpg') }}" bordered="0"
                                width="170px" style="margin: 1px;padding: 0px color:white;"></a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">
                            <img class="image" src="{{ asset('template/assets/img/pemkot.png') }}" bordered="0"
                                width="36px" style="margin: 1px;padding: 0px color:white;">
                        </a>
                    </div>
                    <div class="dropdown-divider"></div>
                    <ul class="sidebar-menu">
                        <li class=" text-center">
                            <h6 class="nav-link mb-0 pb-0">{{ auth()->user()->nib->nama_perusahaan }}</h6>
                        </li>
                        <li class="nav-item {{ Request::is('user')? 'active':'' }}"><a class="nav-link" href="{{ url('/user') }}"><i class="fa fa-home"></i>
                                <span>Dashboard</span></a>
                        </li>
                        <li class="nav-item {{ Request::is('Profil')? 'active':'' }}"><a class="nav-link" href="{{url('/registrasi-perusahaan/profil') }}"><i class="fa fa-sign-in"></i>
                            <span>Profil Perusahaan</span></a>
                    </li>
                        {{-- <li class="nav-item dropdown">
                            <a href="{{ url('/registrasi-perusahaan/profil') }}" class="nav-link has-dropdown"><i class="fa fa-sign-in"></i>
                                <span>Profil Perusahaan</span></a> --}}
                            {{-- <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ url('/registrasi-perusahaan/profil') }}">Profil</a>
                                </li>
                                <li><a class="nav-link"
                                        href="{{ url('/registrasi-perusahaan/formpimpinan') }}">Registrasi
                                        Perusahaan</a></li>
                            </ul> --}}
                        </li>
                        <li class="nav-item {{ Request::is('laboratorium')? 'active':'' }}"><a class="nav-link" href="{{ url('/laboratorium') }}"><i class="fa fa-flask"></i>
                            <span>Pengajuan Laboratorium</span></a>
                    </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link has-dropdown" href="#"><i class="fa fa-file-text"></i>
                                <span>Pelaporan</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ url('/pertek') }}">Input Persetujuan Teknis</a></li>
                                <li><a class="nav-link" href="{{ url('/laporan') }}">Input Laporan</a></li>
                                <li><a class="nav-link" href="{{ url('/riwayat') }}">Riwayat Laporan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item {{ Request::is('evaluasi')? 'active':'' }}"><a class="nav-link" href="{{ url('/evaluasi') }}"><i class="fa fa-pencil-square-o"></i>
                                <span>Evaluasi Laporan</span></a>
                        </li>

                        {{-- <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-columns"></i> <span>Riwayat Laporan</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ url('/riwayat') }}">Riwayat Laporan</a></li>
                            </ul>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ url('/riwayat') }}">Cetak Laporan</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            @yield('content')
            @include('layout.footer')
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('template/assets/js/stisla.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- JS Libraies -->
    {{-- <script src="{{ asset('template/node_modules/jquery-sparkline/jquery.sparkline.min.js"') }}"></script> --}}
    <script src="{{ asset('template/node_modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('template/node_modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('template/node_modules/jqvmap/dist/maps/jquery.vmap.indonesia.js') }}"></script>
    <script src="{{ asset('template/node_modules/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('template/node_modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('template/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('template/assets/js/custom.js') }}"></script>

    <!-- Page Specific JS File -->
    {{-- <script src="{{ asset('template/assets/js/page/components-statistic.js') }}"></script> --}}
    <script src="{{ asset('template/assets/js/page/modules-ion-icons.js') }}"></script>
    {{-- <script src="{{ asset('template/assets/js/page/forms-advanced-forms.js') }}"></script> --}}
    <script src="assets/vendor/chart.js/Chart.min.js"></script>
    {{-- <script src="assets/js/chart.js"></script> --}}
    <script src="assets/js/off-canvas.js"></script>
    <script>
        let lineChart = document.querySelector(`#lineChart`);
        let lineChart2 = document.querySelector(`#lineChart2`);
        if(lineChart && lineChart2)
        {
            fetch(`/getlaporan`).then(ee=>ee.json())
            .then(res=>{
                console.log(res)
                if(res.chart){
                    let labels = new Array();
                    let dataBebanPencemaran = new Array();
                    let dataPemenuhanBakuMutu = new Array();
                    let dataTidakMemenuhi = new Array();
                    res.chart.forEach(item => {
                        labels.push(item.tanggal);
                        dataBebanPencemaran.push(item.beban_pencemaran);
                        dataPemenuhanBakuMutu.push(item.pemenuhan_baku_mutu_persen);
                        dataTidakMemenuhi.push(item.parameter_tidak_memenuhi_persen);
                    });
                    new Chart(lineChart2, {
                        type: 'line',
                        data: {
                        labels: labels,
                        datasets: [{
                            label: 'Pemenuhan Baku Mutu (%)',
                            data: dataPemenuhanBakuMutu,
                            fill:false,
                            borderColor: 'rgb(75, 192, 192)',
                            tension: 0.1
                        },
                        // {
                        //     label: 'Parameter Tidak Memenuhi (%)',
                        //     data: dataTidakMemenuhi,
                        // }
                        ]
                        },
                        options: {
                        scales: {
                            y: {
                            beginAtZero: true
                            }
                        }
                        }
                    });
                    new Chart(lineChart, {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Beban Pencemaran',
                                data: dataBebanPencemaran,
                                borderColor: 'rgb(75, 192, 192)',
                                tension: 0.1,
                                fill:false
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                beginAtZero: true
                                }
                            }
                        }
                    });
                }
            })
        }
    </script>
    @stack('script')
</body>

</html>
