@extends('layout.template')
@section('title', 'Form Registrasi Perusahaan')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Registrasi Perusahaan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Registrasi</a></div>
                    <div class="breadcrumb-item"><a href="#">Form Pimpinan</a></div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-dark">Form Registrasi Pimpinan</h4>
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
                    </div>
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
