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
                            <h4 class="text-dark">Form Update Air Limbah</h4>
                        </div>

                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col">
                                    <label>Informasi Pengolahan Air Limbah</label>
                                    <input name="informasi_air" type="text" class="form-control"  value="{{ $airlimbah->informasi_air }}" required>
                                </div>
                                <div class="form-group col">
                                    <label>Jumlah Air Baku yang Digunakan</label>
                                    <input name="jumlah_airbaku" type="text" class="form-control" value="{{ $airlimbah->jumlah_airbaku }}" required>
                                </div>
                                <div class="form-group col">
                                    <label>Jumlah Air Limbah yang Dihasilkan</label>
                                    <input name="jumlah_airlimbah" type="text" class="form-control" value="{{ $airlimbah->jumlah_airlimbah }}" required>
                                </div>
                                <div class="form-group col">
                                    <label>Kapasitas IPAL</label>
                                    <input name="kapasitas_ipal" type="text" class="form-control" value="{{ $airlimbah->kapasitas_ipal }}" required>
                                </div>
                                <div class="form-group col">
                                    <label>Metode Pengolahan</label>
                                    <select name="pengolahan_id" id="pengolahan" class="form-control" class= "custom-select" required>
                                        <option value="" disabled selected>Pilih Metode Pengolahan</option>
                                        @foreach ($pengolahan as $id => $jenis_pengolahan)
                                            <option value="{{ $id }}"
                                        {{ $id == $airlimbah->pengolahan_id ? 'selected' : '' }}>
                                        {{ $jenis_pengolahan }}
                                        </option>
                                        @endforeach
                                    </select>
                                    {{-- <input name="jenis_pengolahan" type="text" class="form-control"
                                        required> --}}
                                </div>
                                <div class="form-group col">
                                    <label>Titik Pantau</label>
                                    <input name="lokasi_pembuangan" type="text" class="form-control" value="{{ $airlimbah->lokasi_pembuangan}}" required>
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
