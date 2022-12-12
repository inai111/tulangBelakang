@extends('layout.template')
@section('title', 'Pertek')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Persetujuan Teknis</h1>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-dark">Daftar Persetujuan Teknis</h4>
                            <div class="buttons">
                                <a class="btn btn-success float-right" href="{{ url('pertek/tambah') }}">
                                    <i class="fa fa-plus"></i> Ajukan Persetujuan
                                </a>
                                
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-md" id="table1">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center sorting_asc">No</th>
                                            <th >Surat Permohonan</th>
                                            <th >Surat Persetujuan Pembuangan Air</th>
                                            <th >Surat Persetujuan Pembuangan Formasi</th>
                                            <th >Surat Persetujuan Pemanfaatan Formasi</th>
                                            <th >Action</th>
                                            <th >Status</th>
                                        </tr>
                                    </thead>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endsection
