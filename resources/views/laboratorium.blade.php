@extends('layout.template')
@section('title', 'Laboratorium')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Pengajuan Laboratorium</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-dark">Laboratorium Pengujian yang Digunakan</h4>
                            <button type="button" class="btn btn-success float-right" data-toggle="modal"
                                data-target="#exampleModal">
                                <i class="fa fa-plus"></i> Tambah
                            </button> &nbsp
                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-md" id="table1">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center sorting_asc">No</th>
                                            <th class="text-center">Nama Laboratorium</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">No Hp</th>
                                            <th class="text-center">E-Mail</th>
                                            <th class="text-center">Akreditasi Lab</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($labs as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item->nama_lab }}</td>
                                                <td>{{ $item->alamat_lab }}</td>
                                                <td>{{ $item->telf_lab }}</td>
                                                <td>{{ $item->email_lab }}</td>
                                                <td>{{ $item->akre_lab }}</td>
                                                @if ($item->status == 'aktif')
                                                    <td><span class="badge badge-success">{{ $item->status }}</span>
                                                    </td>
                                                @elseif ($item->status == 'nonaktif')
                                                    <td><span class="badge badge-warning">{{ $item->status }}</span>
                                                    </td>
                                                @endif
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

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
                    <form action="{{ url('/laboratorium') }}" method="POST" enctype="multipart/form-data">
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
                        <div class="form-group">
                            <label>Akreditasi Lab</label>
                            <select name="akrelab_id" id="akrelab" class="form-control" required>
                                <option value="" disabled selected>Pilih Akreditasi</option>
                                @foreach ($akrelab as $id => $akre_lab)
                                <option value="{{ $id }}">{{ $akre_lab }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="formFile">Upload Bukti Akreditasi Lab <span> (tidak wajib) </span></label>
                            <input name="upload_akrelab" type="file" class="form-control">
                            {{-- value="{{ $item->surat_permohonan }}"> --}}
                        </div>

                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($labs as $item)
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
                        <form action="{{ url('laboratorium/' . $item->id . '/lab-update') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama Laboratorium</label>
                                <input name="nama_lab" type="text" class="form-control"
                                    placeholder="Nama Laboratorium" value="{{ $item->nama_lab }}" readonly>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat_lab" type="text" class="form-control" style="height: 44px;" required>{{ $item->alamat_lab }}</textarea>
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

    @foreach ($labs as $item)
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
                        <a href="{{ url('/laboratorium/' . $item->id . '/lab-delete') }}"
                            class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
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
