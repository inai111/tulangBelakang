@extends('admin.template')
@section('title', 'Daftar Laporan')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Rekapitulasi Bulanan</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-dark">Rekapitulasi Bulanan</h4>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table1">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center sorting_asc">No</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Bulan</th>
                                            <th>Tahun</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    </tbody>
                                    @foreach ($perusahaan as $key => $p)
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $p->nama_perusahaan }}</td>
                                        <td>{{ date_format(date_create($p->tahun . '-' . $p->bulan . '-01'), 'F') }}</td>
                                        <td>{{ $p->tahun }}</td>
                                        <td>{{ $p->laporan > 0 ? 'Sudah Melaporkan' : '-' }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection
