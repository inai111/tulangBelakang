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
                                    <a class="nav-link active" data-bs-toggle="tab" href="#airlimbah">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-droplet-half" viewBox="0 0 16 16">
                                            <path
                                                d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                                            <path
                                                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        </svg> Air Limbah</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="airlimbah">
                                    <div class="col-12">
                                        <h4 class="text-center">Air Limbah</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ url('/pertek/airlimbah/store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group col">
                                                <label>Informasi Pengolahan Air Limbah</label>
                                                <input name="informasi_air" type="text" class="form-control" required>
                                            </div>
                                            <div class="form-group col">
                                                <label>Jumlah Air Baku yang Digunakan</label>
                                                <input name="jumlah_airbaku" type="text" class="form-control"
                                                    required>
                                            </div>
                                            <div class="form-group col">
                                                <label>Jumlah Air Limbah yang Dihasilkan</label>
                                                <input name="jumlah_airlimbah" type="text" class="form-control"
                                                    required>
                                            </div>
                                            <div class="form-group col">
                                                <label>Kapasitas IPAL</label>
                                                <input name="kapasitas_ipal" type="text" class="form-control"
                                                    required>
                                            </div>
                                            <div class="form-group col">
                                                <label>Metode Pengolahan</label>
                                                <select name="pengolahan_id" id="pengolahan" class="form-control" required>
                                                    <option value="" disabled selected>Pilih Metode Pengolahan</option>
                                                    @foreach ($pengolahan as $id => $jenis_pengolahan)
                                                    <option value="{{ $id }}">{{ $jenis_pengolahan }}</option>
                                                @endforeach
                                                </select>
                                                {{-- <input name="jenis_pengolahan" type="text" class="form-control"
                                                    required> --}}
                                            </div>
                                            <div class="form-group col">
                                                <label>Titik Pantau</label>
                                                <input name="lokasi_pembuangan" type="text" class="form-control"
                                                    required>
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
     <script>
        @if (session('message'))
            Swal.fire('Perhatian', '{{ session('message') }}', 'warning');
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
