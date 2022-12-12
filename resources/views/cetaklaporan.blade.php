<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak PDF</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 10px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        table {
            border-collapse: collapse;
        }

        table.rekap tr td,
        table.rekap tr th {
            border: 2px solid black;
            /* Ketebalan, jenis garis, warna */
            padding: 5px;
        }

        table.rekap tr th.angka {
            min-width: 50px;
            max-width: 75px;
        }

        table.rekap tr th.kata {
            min-width: 70px;
            max-width: 100px;
        }

        table.rekap tr.jumlah td {
            font-weight: bolder;
        }

        table.rekap tr.jumlah td:nth-child(1) {
            text-align: right;
        }

        hr {
            border-width: 5px;
            border-color: black;
        }

        th {
            text-align: center;
            vertical-align: middle !important;

        }

        tr.nomor>th {
            width: 55px;
            text-overflow: ellipsis;
            word-wrap: break-word;
        }

        tr.th.td {
            border-color: black;
        }

        @page {
            size: 30cm 30cm;
            margin: 10mm 10mm 10mm 10mm;
        }

        @media print {
            @page {
                size: A4 portrait max-height:2000%;
                max-width: 100%
            }
        }

        table.kop {
            font-family: 'Times New Roman', Times, serif;
        }

        td.tulisankop {
            text-align: center;
            padding-right: 155px;
            line-height: 29px;
        }

        td.tulisanjudul {
            text-align: center;
            padding-right: 45px;
            line-height: 29px;
        }

        table.kategori {
            border-spacing: 0;

        }

        table.sampling {

            border-spacing: 5px;
            text-align: center;
        }

        table.feedback {
            border-spacing: 5px;
            text-align: center;
        }


        tr.background {
            background: rgb(203, 201, 201);
        }

        tr.background2 {
            background: rgb(234, 228, 228);
        }


        td.isi {
            font-weight: bold;
            font-size: 10px;
            padding: 4px;
        }

        td.hasil {
            font-weight: bold;
            font-size: 10px;
            padding: 4px;
        }

        td.sampling {
            font-weight: bold;
            font-size: 10px;
            padding: 10px;
        }

        td.hasilsampling {
            font-weight: bold;
            font-size: 10px;
            padding: 10px;
        }



        .center {
            text-align: center;
        }
    </style>
</head>

<body>

    <table class="kop" align="center">
        <tr>
            <td><img src="{{ asset('assets/img/Surakarta.png') }}" width="120" height="120"></td>
            <td class="tulisankop">
                <font size="5"><b>
                        <center>PEMERINTAH KOTA SURAKARTA</center>
                    </b></font>
                <font size="6"><b>
                        <center>DINAS LINGKUNGAN HIDUP</center>
                    </b></font>
                <font size="4">
                    <center>Jalan Menteri Supeno No.10 Telp.Fax. (0271) 714898</center>
                </font>
                <font size="4">
                    <center>Website : dlh.surakarta.go.id E-mail : dlh@surakarta.go.id Kode Pos 5711339</center>
                </font><br>
                {{-- <font size="3">SURAKARTA</font><br>
                <font size="3">Kode Pos 5711339</font><br> --}}
        </tr>
        <tr>
            <td colspan="4">
                <hr width="900px">
            </td>
        </tr>
    </table>
    <table class="judul" align="center">
        <tr>
            <td class="tulisanjudul">
                <font size="3"><b>PELAPORAN DAN PEMANTAUAN KUALITAS AIR
                        LIMBAH DINAS
                        LINGKUNGAN HIDUP</b></font><br>
                <font size="3"><b>KOTA SURAKARTA</b></font>
                <br><br>
            </td>
        </tr>
    </table>

    <table class="kategori">
        <tr>
            <td class="isi"> No. Laporan </td>
            <td class="hasil">: {{ $laporan->kode }}</td>
        </tr>

        <tr>
            <td class="isi"> Nama Perusahaan </td>
            <td class="hasil">: {{ $laporan->perusahaan->nib->nama_perusahaan }}</td>
        </tr>

        <tr>
            <td class="isi"> Nama Laboratorium </td>
            <td class="hasil">: {{ $laporan->laboratorium->nama_lab }}</td>
        </tr>

        <tr>
            <td class="isi"> Petugas Sampling </td>
            <td class="hasil">: {{ $laporan->nama_petugas }}</td>
        </tr>

        <tr>
            <td class="isi"> Jenis Sample </td>
            <td class="hasil">: {{ $laporan->jenis_sampling }}</td>
        </tr>

        <tr>
            <td class="isi"> Jenis Parameter </td>
            <td class="hasil">: {{ $laporan->parameter }}</td>
        </tr>

        <tr>
            <td class="isi"> Tanggal Pengambilan Sample </td>
            <td class="hasil">: {{ $laporan->tanggal_sampling }}</td>
        </tr>
    </table>

    <table class="judul" align="center">
        <tr>
            <td class="tulisanjudul">
                <font size="2.5"><b>HASIL SAMPLING</b></font><br><br>
            </td>
        </tr>
    </table>

    <div class="row">
        <div class="col-sm-5 col-md-6">
            <table class="sampling">
                <tr class="background">
                    <td class="sampling" width="200px">Debit Air Limbah (Inlet)</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_inlet }}</td>
                </tr>

                <tr class="background2">
                    <td class="sampling" width="200px">Debit Air Limbah (Outlet)</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_outlet }}</td>
                </tr>

                <tr class="background">
                    <td class="sampling" width="200px">Debit Air Baku</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_debit }}</td>
                </tr>

                <tr class="background2">
                    <td class="sampling" width="200px">pH</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_ph }}
                        @if (!$batasuji['jmlh_ph_normal'])
                            <i class="text-danger">- Melebihi Baku Mutu</i>
                        @else
                            <i>- Normal</i>
                        @endif
                    </td>
                </tr>

                <tr class="background">
                    <td class="sampling" width="200px">Suhu</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_suhu }}
                        @if (!$batasuji['jmlh_suhu_normal'])
                            <i class="text-danger">- Melebihi Baku Mutu</i>
                        @else
                            <i>- Normal</i>
                        @endif
                    </td>
                </tr>

                <tr class="background2">
                    <td class="sampling" width="200px">TSS</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_tss }}
                        @if (!$batasuji['jmlh_tss_normal'])
                            <i class="text-danger">- Melebihi Baku Mutu</i>
                        @else
                            <i>- Normal</i>
                        @endif
                    </td>
                </tr>

                <tr class="background">
                    <td class="sampling" width="200px">TDS</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_tds }}</td>
                </tr>


                <tr class="background2">
                    <td class="sampling" width="200px">BOD</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_bod }}
                        @if (!$batasuji['jmlh_bod_normal'])
                            <i class="text-danger">- Melebihi Baku Mutu</i>
                        @else
                            <i>- Normal</i>
                        @endif
                    </td>
                </tr>

                <tr class="background">
                    <td class="sampling" width="200px">COD</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_cod }}
                        @if (!$batasuji['jmlh_cod_normal'])
                            <i class="text-danger">- Melebihi Baku Mutu</i>
                        @else
                            <i>- Normal</i>
                        @endif
                    </td>
                </tr>


                <tr class="background2">
                    <td class="sampling" width="200px">Amoniak (NH₃₋N)</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_amoniak }}
                        @if (!$batasuji['jmlh_amoniak_normal'])
                            <i class="text-danger">- Melebihi Baku Mutu</i>
                        @else
                            <i>- Normal</i>
                        @endif
                    </td>
                </tr>

                <tr class="background">
                    <td class="sampling" width="200px">Minyak & Lemak</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_minyak }}</td>
                </tr>

                <tr class="background2">
                    <td class="sampling" width="200px">Total Caliform</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_caliform }}</td>
                </tr>

                <tr class="background">
                    <td class="sampling" width="200px">Bakteri Caliform</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_bakteri }}</td>
                </tr>

                <tr class="background2">
                    <td class="sampling" width="200px">MBAS</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_mbas }}</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="col-sm-5 col-md-6">
            <table class="sampling">
                <tr class="background">
                    <td class="sampling" width="200px">Sulfida</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_sulfida }}</td>
                </tr>

                <tr class="background2">
                    <td class="sampling" width="200px">Nitrat (NO3-N)</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_nitrat }}</td>
                </tr>

                <tr class="background">
                    <td class="sampling" width="200px">Nitrit (NO2-N)</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_nitrit }}</td>
                </tr>

                <tr class="background2">
                    <td class="sampling" width="200px">Phosphat (PO4-P)</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_pshospat }}
                        @if (!$batasuji['jmlh_pshospat_normal'])
                            <i class="text-danger">- Melebihi Baku Mutu</i>
                        @else
                            <i>- Normal</i>
                        @endif
                    </td>
                </tr>

                <tr class="background">
                    <td class="sampling" width="200px">Fenol Total</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_fenol }}</td>
                </tr>

                <tr class="background2">
                    <td class="sampling" width="200px">Khrom Total (Cr)</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_khorm }}</td>
                </tr>

                <tr class="background">
                    <td class="sampling" width="200px">Seng (ZN)</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_seng }}</td>
                </tr>

                <tr class="background2">
                    <td class="sampling" width="200px">Klorida</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_klorida }}</td>
                </tr>

                <tr class="background">
                    <td class="sampling" width="200px">Klor Bebas</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_klor }}</td>
                </tr>

                <tr class="background2">
                    <td class="sampling" width="200px">Fluorida (F)</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_fluorida }}</td>
                </tr>

                <tr class="background">
                    <td class="sampling" width="200px">Warna</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_warna }}</td>
                </tr>

                <tr class="background2">
                    <td class="sampling" width="200px">Jumlah Produksi</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_produksi }}</td>
                </tr>

                <tr class="background">
                    <td class="sampling" width="200px">Jumlah Hunian</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_hunian }}</td>
                </tr>

                <tr class="background2">
                    <td class="sampling" width="200px">Jumlah Bed</td>
                    <td class="hasilsampling" width="200px">{{ $laporan->jmlh_bed }}</td>
                </tr>

            </table>
        </div>


    </div>
    <br><br><br>
    <table class="judul" align="center">
        <tr>
            <td class="tulisanjudul">
                <font size="2.5"><b>HASIL FEEDBACK</b></font><br><br>
            </td>
        </tr>
    </table>

    {{-- <div class="col">
        <div class="col-sm-12 col-md-12"> --}}
    {{-- <table class="feedback">
                <tr class="background">

                    <th class="text-center sorting_asc">No</th>
                    <th class="text-center">Keterangan</th>
            </tr>
            </table> --}}
    {{-- </div>
    </div> --}}
    <div style="width:297mm;">
        <table class='table table-bordered rekap'>
            <thead>
                <tr style="background-color: lightgrey;">
                    <th class="text-center sorting_asc">No</th>
                    <th>Keterangan</th>
                </tr>

                @foreach ($laporan->feedback as $no => $feedback)
                    <tr>
                        <th>{{ $no + 1 }}</th>
                        <td class="text-center">{{ $feedback->deskripsi }}</td>
                    </tr>
                @endforeach
            </thead>
        </table>
    </div>

    </table>
    </div>
    </div>
    </div>
    </div>
    </div>

    {{-- <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-sm">
                                <tbody>
                                    <tr>
                                        <th class="col-2" scope="col">No. Laporan</th>
                                        <td>{{ $laporan->kode }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-2" scope="col">Nama Perusahaan</th>
                                        <td>{{ $laporan->perusahaan->nib->nama_perusahaan }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-2" scope="col">Nama Laboratorium</th>
                                        <td>{{ $laporan->laboratorium->nama_lab }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-5" scope="col">Petugas Sampling</th>
                                        <td>{{ $laporan->nama_petugas }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-5" scope="col">Jenis Sampel</th>
                                        <td>{{ $laporan->jenis_sampling }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-5" scope="col">Jenis Parameter</th>
                                        <td>{{ $laporan->parameter }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-5" scope="col">Tanggal Pengambilan Sampel</th>
                                        <td>{{ $laporan->tanggal_sampling }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-5" scope="col">Status</th>
                                        @if ($laporan->status_id == 1)
                                            <td><span
                                                    class="badge badge-warning">{{ $laporan->status->status }}</span>
                                            </td>
                                        @elseif ($laporan->status_id == 2)
                                            <td><span class="badge badge-info">{{ $laporan->status->status }}</span>
                                            </td>
                                        @elseif ($laporan->status_id == 3)
                                            <td><span
                                                    class="badge badge-danger">{{ $laporan->status->status }}</span>
                                            </td>
                                        @endif
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </table> --}}
    </div>
    <script type="text/javascript">
        window.print();
    </script>
    </thead>

    </tbody>
</body>

</html>
