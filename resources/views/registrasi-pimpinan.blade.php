@extends('layout.template')
@section('title', 'Form Registrasi Perusahaan')
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
                <h1>Registrasi Perusahaan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Registrasi</a></div>
                    <div class="breadcrumb-item"><a href="#">Form Pimpinan</a></div>
                </div>
            </div>


            <div class="container mt-2">
                <ul class="nav nav-tabs">
                    <li class="col-md-6 p-0">
                        <a class="nav-link active" data-bs-toggle="tab" href="#registrasipimpinan">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                            </svg> Registrasi Perusahaan</a>
                    </li>
                    <li class="col-md-6 p-0">
                        <a class="nav-link" data-bs-toggle="tab" href="#pertek">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                <path
                                    d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            </svg> Persetujuan Teknis</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="registrasipimpinan">
                        <div class="row border g-0 rounded shadow-sm">

                            <div class="col-12">
                                <h4 class="text-center">Form Registrasi Pimpinan</h4>
                            </div>

                            <div class="card-body">
                                <form action="{{ url('/store-pimpinan') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group col">
                                        <label>Nama Pimpinan / Pemilik</label>
                                        <input name="nama_pimpinan" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group col">
                                        <label>Alamat Lengkap</label>
                                        <textarea name="alamat_pimpinan" class="form-control" required></textarea>
                                    </div>

                                    <div class="form-group col">
                                        <label>Email</label>
                                        <input name="email_pimpinan" type="email" class="form-control" required>
                                    </div>
                                    <div class="form-group col">
                                        <label>No Handphone</label>
                                        <input name="telf_pimpinan" type="text" class="form-control" required>
                                    </div>

                                    <div class="footer text-right">
                                        <button class="btn btn-icon btn-success" type="submit">Selanjutnya</button>
                                    </div>

                                </form>
                            </div>

                        </div>

                    </div>

                    <div class="tab-pane" id="pertek">
                        <div class="row border g-0 rounded shadow-sm">
                            <div class="col-12">
                                <h4 class="text-center">Input Persetujuan Teknis</h4>
                                {{-- <div class="danger">
                                    <h6><center> Anda belum menginputkan Persetujuan Teknis</center></h6>
                                </div>
                                <div class="buttons"> --}}

                                <div class="card-body">
                                    <a class="btn btn-success float" href="{{ url('pertek/tambah') }}">
                                        <i class="fa fa-plus"></i> Ajukan Persetujuan
                                    </a>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-md" id="table1">
                                            <thead class="thead-dark">
                                               <br> <h6> Data Informasi Umum </h6>
                                                <tr>
                                                    <th class="text-center sorting_asc">No</th>
                                                    <th>Nama Pertek</th>
                                                    <th>No Rekomendasi</th>
                                                    <th>Lokasi</th>
                                                    <th>File</th>
                                                    <th>Action</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            </tbody>
                                            {{-- @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($pertek as $p)
                                                <tr>
                                                    <td class="text-center">{{ $key + 1 }}</td>
                                                    <td align="center">{{ $index++ }}</td>
                                                    <td>{{ $p->nama_pertek }}</td>
                                                    <td>{{ $p->no_rekomendasi }}</td>
                                                    <td>{{ $p->lokasi }}</td>
                                                    <td>{{ $p->upload_dokumen }}</td>
                                                </tr>
                                            @endforeach --}}

                                            <tr>
                                                <td align="center" colspan="6">Data tidak tersedia</td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <br> <h6> Data Baku Mutu </h6>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
                </script>

                {{-- <h4 class="text-dark">Form Registrasi Pimpinan</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/store-pimpinan') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col">
                                    <label>Nama Pimpinan / Pemilik</label>
                                    <input name="nama_pimpinan" type="text" class="form-control" required>
                                </div>
                                <div class="form-group col">
                                    <label>Alamat Lengkap</label>
                                    <textarea name="alamat_pimpinan" class="form-control" required></textarea>
                                </div>
                                <div class="form-group col">
                                    <label>Email</label>
                                    <input name="email_pimpinan" type="email" class="form-control" required>
                                </div>
                                <div class="form-group col">
                                    <label>No Handphone</label>
                                    <input name="telf_pimpinan" type="text" class="form-control" required>
                                </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-icon btn-success" type="submit">Selanjutnya</button>
                        </div>
                        </form>
                    </div> --}}
            </div>
    </div>
    </div>
    </section>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (session('message'))
            Swal.fire('Peringatan!', '{{ session('message') }}', 'warning');
        @endif
    </script>
@endsection
