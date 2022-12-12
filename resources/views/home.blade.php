@extends('layout.template')
@section('title', 'Dashboard')
@section('breadcrumb', 'Dashboard')
@section('content')
    <style>
        .card-chart {
            background-color: #fff;
            border-radius: 20px;
            border: 1px solid #037639;
            box-shadow: 5px 5px 5px rgb(192, 186, 186);
        }
    </style>

    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">


    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <div class="main-content">

        <section class="section">
            <div class="section-header">
                <h1>
                    <center>SELAMAT DATANG DI SISTEM INFORMASI PELAPORAN DAN PEMANTAUAN KUALITAS AIR
                        LIMBAH DINAS
                        LINGKUNGAN HIDUP SURAKARTA</center>
                </h1>
            </div>

            <span class=" fs-2 d-lg-flex mb-3 mt-2 ">
                <marquee behavior="scroll" bgcolor="#088a2f" onmouseover="this.stop();" onmouseout="this.start();"> &nbsp;
                    <a href="?p=ss&amp;id=1524" class="text-sm" style=" color: #fff;">Sampah Kita adalah Tanggung Jawab
                        Kita</a> &nbsp; || &nbsp; <a href="?p=ss&amp;id=1535" class="text-sm" style=" color: #fff;">Akhir
                        Tahun,
                        PLTSa Putri Cempo Solo Siap Beroperasi Hasilkan 8 MW</a> &nbsp; || &nbsp; <a
                        href="?p=ss&amp;id=1533" class="text-sm" style=" color: #fff;">Hari Lingkungan Hidup Sedunia Tahun
                        2022</a> &nbsp; || &nbsp; <a href="?p=ss&amp;id=1532" class="text-sm" style=" color: #fff;">Hari
                        Bumi Tahun 2022</a> &nbsp;
                </marquee>
            </span>



            {{-- <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Pengguna</h4>
                            </div>
                            <div class="card-body">
                                {{ $user }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Jumlah Perusahaan</h4>
                            </div>
                            <div class="card-body">
                                {{ $pers }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Jumlah Laboratorium</h4>
                            </div>
                            <div class="card-body">
                                {{ $laboratorium }}
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="regis">
                <div class="d-grid gap-200 ">
                    <a class="btn btn-warning btn-rounded" a class="nav-link"
                        href="{{ url('/registrasi-perusahaan/formpimpinan') }}">Registrasi Profil Perusahaan</a>
                </div> --}}
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1 ">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-user-alt"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <a class="nav-link active" aria-current="true"
                                    href="{{ url('/registrasi-perusahaan/formpimpinan') }}">REGISTRASI</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <a class="nav-link active" aria-current="true" href="{{ url('/laporan') }}">PELAPORAN</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-info">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <a class="nav-link active" aria-current="true" href="#">KONSULTASI</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Pilih Bulan</label>
                        <div class="row">
                            <div class="col-6-xs p-2">
                                <input type="month" class="form-control" id="bulan" name="bulan">
                            </div>
                            <div class="col-6-xs p-2">
                                <button class="btn btn-success" onclick="laporanView()">Tampilkan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card-chart">
                        <div class="card-body">
                            <h4 class="card-title">Daftar Laporan</h4>
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card-chart">
                        <div class="card-body">
                            <h4 class="card-title">Line chart</h4>
                            <canvas id="lineChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
    {{-- <div class="row portfolio-container">
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="assets/img/galeri1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="assets/img/galeri2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <div class="portfolio-links">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="assets/img/galeri3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <div class="portfolio-links">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section-body">
                        </div>
                    </div>
                </div>
            </div> --}}
    {{-- <script src="assets/vendor/chart.js/Chart.min.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/off-canvas.js"></script> --}}
@endsection
