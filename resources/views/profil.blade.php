@extends('layout.template')
@section('title', 'Profil')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Halaman Profil</h1>
            </div>

            <div class="section-body">

                @foreach ($perusahaan as $p)
                    @if ($p->status->status == 'Pengajuan')
                        <div class="alert alert-warning">
                            Data yang Anda berikan akan ditinjau oleh Admin
                        </div>
                    @else
                        <div class="alert alert-success">
                            Data Anda sudah disetujui oleh Admin
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-dark">Profil</h4>
                        </div>
                        <div class="card-body">
                            <div class="tabel-responsive">
                                <h6>Pimpinan/Pemilik</h6>
                                <table class="table table-bordered table-striped table-sm">
                                    <tbody>
                                        <tr>
                                            <th class="col-2" scope="col">Nama Pemilik</th>
                                            <td>{{ $p->pimpinan->nama_pimpinan }}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-2" scope="col">Alamat</th>
                                            <td>{{ $p->pimpinan->alamat_pimpinan }}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-5" scope="col">Email</th>
                                            <td>{{ $p->pimpinan->telf_pimpinan }}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-5" scope="col">No. Handphone</th>
                                            <td>{{ $p->pimpinan->email_pimpinan }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h6>Perusahaan</h6>
                                <table class="table table-bordered table-striped table-sm">
                                    <tbody>
                                        <tr>
                                            <th class="col-5" scope="col">No. Izin Kegiatan Usaha</th>
                                            <td>{{ $p->nib->no_izin }}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-5" scope="col">Nama Perusahaan</th>
                                            <td>{{ $p->nib->nama_perusahaan }}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-5" scope="col">Alamat Lengkap</th>
                                            <td>{{ $p->alamat_perusahaan }}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-5" scope="col">Kelurahan</th>
                                            <td>{{ $p->kelurahan->nama_kelurahan }}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-5" scope="col">Kecamatan</th>
                                            <td>{{ $p->kecamatan->nama_kecamatan }}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-5" scope="col">Bidang</th>
                                            <td>{{ $p->bidang->nama_bidang }}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-5" scope="col">Email</th>
                                            <td>{{ $p->email_perusahaan }}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-5" scope="col">No. Handphone</th>
                                            <td>{{ $p->telf_perusahaan }}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-5" scope="col">Penanggung Jawab PPA</th>
                                            <td>{{ $p->personil_ppa }}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-5" scope="col">Penanggung Jawab IPAL</th>
                                            <td>{{ $p->personil_ipal }}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-5" scope="col">Titik Koordinat Perusahaan</th>
                                            <td>{{ $p->tikor_perusahaan }}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-5" scope="col">Titik Koordinat IPAL</th>
                                            <td>{{ $p->tikor_ipal }}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-5" scope="col">Titik Koordinat OUTFALL</th>
                                            <td>{{ $p->tikor_oval }}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-5" scope="col">Titik Koordinat PANTAU</th>
                                            <td>{{ $p->tikor_pantau }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ url('registrasi-perusahaan/pimpinan/edit') }}" class="btn btn-lg btn-warning"
                                    type="submit">Update</a>
                            </div>
                        </div>
                    </div>



                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-dark">Perizinan Teknis</h4>
                        </div>

                        <div class="card-body">
                            <div class="tabel-responsive">
                                <h6>Informasi Umum</h6>
                                <table class="table table-bordered table-striped table-sm">
                                    <tbody>
                                        @foreach ($pertek as $q)
                                            <tr>
                                                <th class="col-2" scope="col">Jenis Pertek</th>
                                                <td>{{ $q->nama_pertek }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-2" scope="col">Tgl Pertek</th>
                                                <td>{{ $q->tgl_pertek }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-2" scope="col">No SLO</th>
                                                <td>{{ $q->no_slo }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-2" scope="col">Tgl SLO</th>
                                                <td>{{ $q->tgl_slo }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-2" scope="col">Media Limbah</th>
                                                <td>{{ $q->media_limbah }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-2" scope="col">No Rekomendasi</th>
                                                <td>{{ $q->no_rekomendasi }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <hr>
                                <h6>Air Limbah</h6>
                                <table class="table table-bordered table-striped table-sm">
                                    <tbody>
                                        @foreach ($airlimbah as $r)
                                            <tr>
                                                <th class="col-2" scope="col">Informasi Air</th>
                                                <td>{{ $r->informasi_air }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-2" scope="col">Jumlah Air Baku</th>
                                                <td>{{ $r->jumlah_airbaku }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-2" scope="col">Jumlah Air Limbah</th>
                                                <td>{{ $r->jumlah_airlimbah }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-2" scope="col">Kapasitas IPAL</th>
                                                <td>{{ $r->kapasitas_ipal }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-2" scope="col">Metode Pengolahan</th>
                                                <td>{{ $r->pengolahan->jenis_pengolahan }}</td>
                                            </tr>
                                            <tr>
                                                <th class="col-2" scope="col">Titik Pantau</th>
                                                <td>{{ $r->lokasi_pembuangan }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="card-footer text-right">
                                <a href="{{ url('/pertek/edit/informasi') }}" class="btn btn-lg btn-warning"
                                    type="submit">Update</a>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
    </div>
    </section>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (session('message'))
            Swal.fire('Perhatian', '{{ session('message') }}', 'warning');
        @endif
    </script>
@endsection
