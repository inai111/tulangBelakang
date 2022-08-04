@extends('admin.template')
@section('title', 'Input Feedback')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Feedback - {{ $laporan->kode }}</h1>
            </div>

            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-center py-2">Hasil Sampling</h5>
                            <div class="row">
                                <div class="col-sm-5 col-md-6">
                                    <table class="table table-bordered table-striped table-sm">
                                        <tbody>
                                            <tr>
                                                <th class="col-5" scope="col">Debit Air Limbah (Inlet)</th>
                                                <td>{{ $laporan->jmlh_inlet }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">Debit Air Limbah (Outlet)</th>
                                                <td>{{ $laporan->jmlh_outlet }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">Debit Air Baku</th>
                                                <td>{{ $laporan->jmlh_debit }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">pH</th>
                                                <td>{{ $laporan->jmlh_ph }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">Suhu</th>
                                                <td>{{ $laporan->jmlh_suhu }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">TSS</th>
                                                <td>{{ $laporan->jmlh_tss }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">TDS</th>
                                                <td>{{ $laporan->jmlh_tds }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">BOD</th>
                                                <td>{{ $laporan->jmlh_bod }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">COD</th>
                                                <td>{{ $laporan->jmlh_cod }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">Amoniak (NH₃₋N)</th>
                                                <td>{{ $laporan->jmlh_amoniak }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">Minyak & Lemak</th>
                                                <td>{{ $laporan->jmlh_minyak }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">Total Caliform</th>
                                                <td>{{ $laporan->jmlh_caliform }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">Bakteri Caliform</th>
                                                <td>{{ $laporan->jmlh_bakteri }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">MBAS</th>
                                                <td>{{ $laporan->jmlh_mbas }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
                                    <table class="table table-bordered table-striped table-sm">
                                        <tbody>
                                            <tr>
                                                <th class="col-5" scope="col">Sulfida (S)</th>
                                                <td>{{ $laporan->jmlh_sulfida }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">Nitrat (NO3-N)</th>
                                                <td>{{ $laporan->jmlh_nitrat }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">Nitrit (NO2-N)</th>
                                                <td>{{ $laporan->jmlh_nitrit }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">Phosphat (PO4-P)</th>
                                                <td>{{ $laporan->jmlh_pshospat }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">Fenol Total</th>
                                                <td>{{ $laporan->jmlh_fenol }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">Khrom Total (Cr)</th>
                                                <td>{{ $laporan->jmlh_khorm }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">Seng (ZN)</th>
                                                <td>{{ $laporan->jmlh_seng }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">Klorida</th>
                                                <td>{{ $laporan->jmlh_klorida }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">Klor Bebas</th>
                                                <td>{{ $laporan->jmlh_klor }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">Fluorida (F)</th>
                                                <td>{{ $laporan->jmlh_fluorida }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">Warna</th>
                                                <td>{{ $laporan->jmlh_warna }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">Jumlah Produksi</th>
                                                <td>{{ $laporan->jmlh_produksi }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">Jumlah Hunian</th>
                                                <td>{{ $laporan->jmlh_hunian }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-5" scope="col">Jumlah Bed</th>
                                                <td>{{ $laporan->jmlh_bed }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-dark">Form Feedback Laporan</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col">
                                    <label>Keterangan</label>
                                    <textarea name="deskripsi" class="form-control" required></textarea>
                                </div>
                                <div class="form-group col">
                                    <label>File Lampiran (Pdf,Doc)</label>
                                    <input name="file_lampiran" type="file" class="form-control">
                                </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-icon btn-success" type="submit">Tambahkan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
