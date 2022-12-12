@extends('layout.template')
@section('title', 'Persetujuan Teknis')
@section('content')

    <style>
        .dimension {
            width: 500px;
            height: 300px;
        }

        .nav-tabs .nav-link.active {
            background-color: #037639;
            color: #fff;
            border: 3px solid #037639;
        }

        .nav-tabs .nav-link {
            background-color: #fff;
            color: #00d362;
            border: 2px solid #00d362;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .nav-tabs .nav-link:hover {
            border: 2px solid #00d362;
        }



        .tab-content {
            border: 1px solid #00d362;
            background-color: #fff;
            padding: 20px;
        }

        .buttons {
            background-color: #fff;
            padding: 20px;
            padding-left: 370px;
        }
    </style>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Persetujuan Teknis</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-dark">Pengajuan Persetujuan Teknis</h4>
                            <div class="dropdown show" style="float: right;">
                                <a class="btn btn-primary btn-sm dropdown-toggle" href="#" role="button"
                                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="fa fa-download"></i>
                                    Download Template
                                </a>

                                <ul class="dropdown-menu">

                                    <li>
                                        @foreach ($template as $item)
                                            <a class="dropdown-item"
                                                href="{{ url('/admin/file_template', $item->template) }}">{{ $item->nama }}</a>
                                    </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                        <div class="container mt-2">
                            <ul class="nav nav-tabs">
                                <li class="col-md-12 p-0">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#informasi">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-house-fill" viewBox="0 0 15 16">
                                            <path fill-rule="evenodd"
                                                d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                            <path fill-rule="evenodd"
                                                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                        </svg> Informasi Umum</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="informasi">
                                    <div class="col-12">
                                        <h4 class="text-center">Informasi Umum Pertek</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ url('/pertek/tambahdata/store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-row justify-content-around">
                                                <div class="form-group col-md-5">
                                                    <label>Jenis Pertek</label>
                                                    <input name="nama_pertek" type="text" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-5">
                                                    <label>Tanggal Pertek</label>
                                                    <input name="tgl_pertek" type="date" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-row justify-content-around">
                                                <div class="form-group col-md-5">
                                                    <label>No SLO</label>
                                                    <input name="no_slo" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group col-md-5">
                                                    <label>Tanggal SLO</label>
                                                    <input name="tgl_slo" type="date" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row justify-content-around">
                                                <div class="form-group col-md-5">
                                                    <label>Media Penerimaan Limbah</label>
                                                    <input name="media_limbah" class="form-control" required></textarea>
                                                </div>
                                                <div class="form-group col-md-5">
                                                    <label>No Rekomendasi</label>
                                                    <input name="no_rekomendasi" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row justify-content-around">
                                                <div class="form-group col-md-5">
                                                    <label>Titik Koordinat IPAL</label>
                                                    <input name="tikor_ipal" type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-5">
                                                    <label>Titik Koordinat OUTFALL</label required>
                                                    <input name="tikor_oval" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-row justify-content-around">
                                                <div class="form-group col-md-5">
                                                    <label>Titik Koordinat PANTAU</label>
                                                    <input name="tikor_pantau" type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-5">
                                                    <label>Titik Koordinat Perusahaan</label>
                                                    <input name="tikor_perusahaan" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="footer text-right">
                                                <button class="btn btn-icon btn-success" type="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
            </script>
    </div>
    </div>
    </div>
    </section>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (session('status'))
            Swal.fire('Update Sukses!', '{{ session('status') }}', 'success');
        @endif
    </script>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            @if ($errors->any() || session('gagal'))
                Swal.fire({
                    icon: "error",
                    title: "Gagal Menambahkan",
                    text: "Data sudah tersedia.",
                    showConfirmButton: true,
                    confirmButtonColor: "#47c363",
                });
            @endif
        });
    </script>
@endpush
