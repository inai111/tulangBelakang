@extends('admin.template')
@section('title', 'Daftar Laporan')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Cetak Rekapitulasi</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-dark">Seleksi Rekapitulasi</h4>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Pilih Bulan</label>
                                        <input type="month" class="form-control" id="bulan" name="bulan">
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="form-group">
                                        <button class="btn btn-success" onclick="laporanView()">Tampilkan</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

                    </div>
                </div>
        </section>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function laporanView() {
            var awal = $('#bulan').val();
            console.log(awal);
            if (awal == '' || awal == null) {
                Swal.fire('Peringatan!', 'Silahkan Pilih Bulan & Tahun', 'warning');
            } else {
                window.open('{{ url('rekapitulasi') }}/' + awal, '_self');
            }

        }
    </script>
@endsection
