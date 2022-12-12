@extends('layout.template')
@section('title', 'Evaluasi')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Evaluasi Laporan</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-dark">Evaluasi Laporan</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="label">Pilih Perusahaan</label>

                                        <select id="nama_perusahaan" name="nama_perusahaan" class="form-control" class="custom-select">
                                            <option selected value="all">Semua Perusahaan</option>
                                            @foreach ($nib as $nib)
                                                <option <?php if (isset($_GET['nib'])) {
                                                    if ($_GET['nib'] == $b->id) {
                                                        echo "selected='selected'";
                                                    }
                                                } ?> value="{{ $nib->id }}">
                                                    {{ $nib->nama_perusahaan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Jenis Evaluasi</label>
                                        <select id="lokasi" name="lokasi" class="form-control" class="custom-select">
                                            <option selected value="all">Semua Evaluasi</option>
                                            <option value="Inlet">Tingkat Pelaporan Tiap Bulan</option>
                                            <option value="Outlet">Beban Pencemaran</option>
                                            <option value="Upstream">Debit Pencemaran</option>
                                        </select>
                                    </div>
                                </div>
                             
                                <div class="col-lg">
                                    <div class="form-group pt-4 mt-1">
                                        <button class="btn btn-success" onclick="laporanView()">Tampilkan</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
