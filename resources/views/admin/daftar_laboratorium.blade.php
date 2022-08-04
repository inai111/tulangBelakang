@extends('admin.template')
@section('title', 'Daftar Laboratorium')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Daftar Laboratorium</h1>
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
                            <h4 class="text-dark">Daftar Laboratorium</h4>
                            <button type="button" class="btn btn-success float-right" data-toggle="modal"
                                data-target="#exampleModal">
                                <i class="fa fa-plus"></i> Tambah
                            </button> &nbsp
                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table1">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center sorting_asc">No</th>
                                            <th>Nama Laboratorium</th>
                                            <th>Alamat</th>
                                            <th>No Handphone</th>
                                            <th>E-Mail</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lab as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item->nama_lab }}</td>
                                                <td>{{ $item->alamat_lab }}</td>
                                                <td>{{ $item->telf_lab }}</td>
                                                <td>{{ $item->email_lab }}</td>
                                                <td>
                                                    <div class="text-center">
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    {{-- modal create --}}
    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Laboratorium</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/perusahaan/laboratorium') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama Laboratorium</label>
                            <input name="nama_lab" type="text" class="form-control" placeholder="Nama Laboratorium"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat_lab" type="text" class="form-control" style="height: 44px;" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>No. Telefon</label>
                            <input name="telf_lab" type="text" class="form-control" placeholder="No Telefon" required>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail4">Email</label>
                            <input name="email_lab" type="email" class="form-control" id="inputEmail4" placeholder="Email"
                                required>
                        </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end of modal create --}}
    @foreach ($lab as $item)
        <div class="modal fade" tabindex="-1" role="dialog" id="updateModal{{ $item->id }}" style="display: none;"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Update Laboratorium</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('admin/' . $item->id . '/lab-update') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama Laboratorium</label>
                                <input name="nama_lab" type="text" class="form-control"
                                    placeholder="Nama Laboratorium" value="{{ $item->nama_lab }}" readonly>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat_lab" type="text" class="form-control" style="height: 44px;" value="" required>{{ $item->alamat_lab }} </textarea>
                            </div>
                            <div class="form-group">
                                <label>No. Telefon</label>
                                <input name="telf_lab" type="text" class="form-control" placeholder="No Telefon"
                                    value="{{ $item->telf_lab }}">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail4">Email</label>
                                <input name="email_lab" type="email" class="form-control" id="inputEmail4"
                                    placeholder="Email" value="{{ $item->email_lab }}">
                            </div>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($lab as $item)
        <div class="modal fade" tabindex="-1" role="dialog" id="deleteModal{{ $item->id }}"
            style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Laboratorium</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah anda yakin untuk menghapus {{ $item->nama_lab }}?</p>
                    </div>
                    <div class="modal-footer br">
                        <a href="{{ url('/admin/' . $item->id . '/lab-delete') }}" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
