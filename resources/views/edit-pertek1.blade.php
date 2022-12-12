@extends('layout.template')
@section('title', 'Persetujuan Teknis')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Update Persetujuan Teknis</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-dark">Form Update Informasi Umum</h4>
                        </div>
                    
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-row justify-content-around">
                                <div class="form-group col-md-5">
                                    <label>Jenis Pertek</label>
                                    <input name="nama_pertek" type="text" class="form-control"
                                        value="{{ $pertek->nama_pertek }}" required>
                                </div>
                                <div class="form-group col-md-5">
                                    <label>Tanggal Pertek</label>
                                    <input name="tgl_pertek" type="date" class="form-control"
                                        value="{{ $pertek->tgl_pertek }}" required>
                                </div>
                            </div>
                            <div class="form-row justify-content-around">
                                <div class="form-group col-md-5">
                                    <label>No SLO</label>
                                    <input name="no_slo" class="form-control" value="{{ $pertek->no_slo }}"></textarea>
                                </div>
                                <div class="form-group col-md-5">
                                    <label>Tanggal SLO</label>
                                    <input name="tgl_slo" type="date" class="form-control"
                                        value="{{ $pertek->tgl_slo }}"></textarea>
                                </div>
                            </div>
                            <div class="form-row justify-content-around">
                                <div class="form-group col-md-5">
                                    <label>Media Penerimaan Limbah</label>
                                    <input name="media_limbah" class="form-control" value="{{ $pertek->media_limbah }}"
                                        required></textarea>
                                </div>
                                <div class="form-group col-md-5">
                                    <label>No Rekomendasi</label>
                                    <input name="no_rekomendasi" class="form-control" value="{{ $pertek->no_rekomendasi }}"
                                        required></textarea>
                                </div>
                            </div>
                            <div class="form-row justify-content-around">
                                <div class="form-group col-md-5">
                                    <label>Titik Koordinat IPAL</label>
                                    <input name="tikor_ipal" type="text" class="form-control"
                                        value="{{ $pertek->tikor_ipal }}">
                                </div>
                                <div class="form-group col-md-5">
                                    <label>Titik Koordinat OUTFALL</label>
                                    <input name="tikor_oval" type="text" class="form-control"
                                        value="{{ $pertek->tikor_oval }}">
                                </div>
                            </div>
                            <div class="form-row justify-content-around">
                                <div class="form-group col-md-5">
                                    <label>Titik Koordinat PANTAU</label>
                                    <input name="tikor_pantau" type="text" class="form-control"
                                        value="{{ $pertek->tikor_pantau }}">
                                </div>
                                <div class="form-group col-md-5">
                                    <label>Titik Koordinat Perusahaan</label>
                                    <input name="tikor_perusahaan" type="text" class="form-control"
                                        value="{{ $pertek->tikor_perusahaan }}">
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
