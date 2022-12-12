@extends('admin.template')
@section('title', 'Daftar Perusahaan')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Template Persetujuan Teknis</h1>
            </div>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-dark">Data Persetujuan Teknis</h4>
                            <button type="button" class="btn btn-success float-right" data-toggle="modal"
                                data-target="#modal-add-pertek">
                                <i class="fa fa-plus"></i> Tambah
                            </button> &nbsp
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table1">

                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center sorting_asc" width="100px">No</th>
                                            <th class="text-center" width="350px">File</th>
                                            <th class="text-center" width="50px">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($template as $item)
                                            {{-- @if ($item->jenis_perizinan == 'Pertek') --}}
                                            <tr>
                                                <td class="text-center">{{ $no++ }}</td>
                                                {{-- <td>{{$item->nama}}</td> --}}
                                                {{-- <td class="text-center">{{$item->template}}</td> --}}
                                                <td class="text-center">
                                                    <a class="btn btn-outline-secondary btn-sm" href="{{ url('/admin/file_template', $item->template) }}"
                                                        >{{ $item->nama }}</a> 
                                                </td>
                                               
                                                <td>
                                                    <div class="text center">
                                                        <button type="button" href="#" class="btn btn-primary"
                                                            data-toggle="modal"
                                                            data-target="#updateModal{{ $item->id }}"><i
                                                                class="far fa-edit"></i></button>
                                                        <button type="button" href="#" class="btn btn-danger"
                                                            data-toggle="modal"
                                                            data-target="#deleteModal{{ $item->id }}"><i
                                                                class="fa fa-trash"></i></button>
                                                    </div>
                                                </td>

                                            </tr>
                                            @endforeach
                                            {{-- @endif --}}
                                        


                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- modal add data Pertek-->
    <div class="modal fade" tabindex="-1" role="dialog" id="modal-add-pertek" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            {{-- <form name="frm_add" id="frm_add" class="form-horizontal" action="tambahtemplate/proses" method="POST"
                enctype="multipart/form-data">
                @csrf --}}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Pertek</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/admin/template') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input name="nama" type="text" class="form-control" placeholder="Nama" required>
                        </div>
                        {{-- <input type="hidden" id="jenis_perizinan" name="jenis_perizinan" class="form-control"
                        value="Pertek"> --}}

                        <div class="form-group">
                            <label>Upload Template<span>(*type file : doc/docx)</span></label>

                            <input name="template" type="file"
                                class="form-control @error('template') is-invalid @enderror " required>
                            @error('template')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal updatek-->
    @foreach ($template as $item)
        <div class="modal fade" tabindex="-1" role="dialog" id="updateModal{{ $item->id }}" style="display: none;"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('updatetemplate/' . $item->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama</label>
                                <input name="nama" type="text" class="form-control" placeholder="Nama" value="{{ $item->nama }}"required>
                            </div>
                            <div class="form-group">
                                <label>Upload Template<span>(*type file : doc/docx)</span></label>
                                <input name="template" type="file"
                                    class="form-control @error('template') is-invalid @enderror" name="template"
                                    value="{{ old('template', $item->template) }}" required autocomplete="template"
                                    autofocus>
                                @error('template')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($template as $item)
        <div class="modal fade" tabindex="-1" role="dialog" id="deleteModal{{ $item->id }}"
            style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah anda yakin untuk menghapus {{ $item->template }}?</p>
                    </div>
                    <div class="modal-footer br">
                        <a href=
                           " {{url('hapustemplate')}}/{{$item->id}}"
                            class="btn btn-danger">Hapus</a>
                            {{-- href="/tps/{{ $tps->id }}/delete" --}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach




@endsection
