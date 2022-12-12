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
                                    <a class="nav-link active" data-bs-toggle="tab" href="#bakumutu">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                            <path
                                                d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                                            <path
                                                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        </svg> Acuan Baku Mutu Air Limbah</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="bakumutu">
                                    <div class="card-body">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">pH
                                                </label>
                                                <div class="col-sm-12 col-md-3">
                                                    <input name="jmlh_ph[bawah]" type="text" class="form-control"
                                                        placeholder="Batas Minimum">
                                                </div>
                                                <div class="col-sm-12 col-md-3">
                                                    <input name="jmlh_ph[atas]" type="text" class="form-control"
                                                        placeholder="Batas Maksimum">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label
                                                    class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Suhu</label>
                                                <div class="col-sm-12 col-md-3">
                                                    <input name="jmlh_suhu[bawah]" type="text" class="form-control"
                                                        placeholder="Batas Minimum">
                                                </div>
                                                <div class="col-sm-12 col-md-3">
                                                    <input name="jmlh_suhu[atas]" type="text" class="form-control"
                                                        placeholder="Batas Maksimum">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Amoniak
                                                    (NH₃₋N)</label>
                                                <div class="col-sm-12 col-md-3">
                                                    <input name="jmlh_amoniak[bawah]" type="text" class="form-control"
                                                        placeholder="Batas Minimum">
                                                </div>
                                                <div class="col-sm-12 col-md-3">
                                                    <input name="jmlh_amoniak[atas]" type="text" class="form-control"
                                                        placeholder="Batas Maksimum">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label
                                                    class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phosphat
                                                    (PO4-P)</label>
                                                <div class="col-sm-12 col-md-3">
                                                    <input name="jmlh_pshospat[bawah]" type="text" class="form-control"
                                                        placeholder="Batas Minimum">
                                                </div>
                                                <div class="col-sm-12 col-md-3">
                                                    <input name="jmlh_pshospat[atas]" type="text" class="form-control"
                                                        placeholder="Batas Maksimum">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label
                                                    class="col-form-label text-md-right col-12 col-md-3 col-lg-3">TSS</label>
                                                <div class="col-sm-12 col-md-3">
                                                    <input name="jmlh_tss[bawah]" type="text" class="form-control"
                                                        placeholder="Batas Minimum">
                                                </div>
                                                <div class="col-sm-12 col-md-3">
                                                    <input name="jmlh_tss[atas]" type="text" class="form-control"
                                                        placeholder="Batas Maksimum">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label
                                                    class="col-form-label text-md-right col-12 col-md-3 col-lg-3">BOD</label>
                                                <div class="col-sm-12 col-md-3">
                                                    <input name="jmlh_bod[bawah]" type="text" class="form-control"
                                                        placeholder="Batas Minimum">
                                                </div>
                                                <div class="col-sm-12 col-md-3">
                                                    <input name="jmlh_bod[atas]" type="text" class="form-control"
                                                        placeholder="Batas Maksimum">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label
                                                    class="col-form-label text-md-right col-12 col-md-3 col-lg-3">COD</label>
                                                <div class="col-sm-12 col-md-3">
                                                    <input name="jmlh_cod[bawah]" type="text" class="form-control"
                                                        placeholder="Batas Minimum">
                                                </div>
                                                <div class="col-sm-12 col-md-3">
                                                    <input name="jmlh_cod[atas]" type="text" class="form-control"
                                                        placeholder="Batas Maksimum">
                                                </div>
                                            </div>

                                            <div class="card-footer text-right">
                                                <button class="btn btn-icon btn-dark mr-2" type="reset">Reset</button>
                                                <button class="btn btn-icon btn-success" type="submit">Tambahkan</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
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
