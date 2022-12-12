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
                font-size:10px;
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
                size: 10cm 10cm;
                margin: 10mm 10mm 10mm 10mm;
            }
    
            @media print {
                @page {
                    size: landscape
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

    <div style="width:350mm;">
        <table class='table table-bordered rekap'>
            <thead>
                <tr style="background-color: lightgrey;">
                        <th class="text-center sorting_asc">No</th>
                        <th>No. Laporan</th>
                        <th>Perusahaan</th>
                        <th>Laboratorium</th>
                        <th>Nama Petugas</th>
                        <th>Lokasi Sampling</th>
                        <th>Jenis Sampel</th>
                        <th>Tgl Sampling</th>
                        <th>Debit Inlet</th>
                        <th>Debit Outlet</th>
                        <th>Debit Air Baku</th>
                        <th>pH</th>
                        <th>Suhu</th>
                        <th>TSS</th>
                        <th>TDS</th>
                        <th>BOD</th>
                        <th>COD</th>
                        <th>NH₃₋N</th>
                        <th>Minyak & Lemak</th>
                        <th>Total Caliform</th>
                        <th>Bakteri Caliform</th>
                        <th>MBAS</th>
                        <th>Sulfida</th>
                        <th>NO3-N</th>
                        <th>NO2-N</th>
                        <th>PO4-P</th>
                        <th>Fenol Total</th>
                        <th>Cr</th>
                        <th>ZN</th>
                        <th>Klorida</th>
                        <th>Klor Bebas</th>
                        <th>Fluorida</th>
                        <th>Warna</th>
                        <th>Produksi</th>
                        <th>Jumlah Hunian</th>
                        <th>Jumlah BED</th>
                    </tr>


                    @foreach ($laporan as $key => $lap)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $lap->kode }}</td>
                            <td>{{ $lap->perusahaan->nib->nama_perusahaan }}</td>
                            <td>{{ $lap->laboratorium->nama_lab }}</td>
                            <td>{{ $lap->nama_petugas }}</td>
                            <td>{{ $lap->jenis_sampling }}</td>
                            <td>{{ $lap->parameter }}</td>
                            <td>{{ $lap->tanggal_sampling }}</td>
                            <td>{{ $lap->jmlh_inlet }}</td>
                            <td>{{ $lap->jmlh_outlet }}</td>
                            <td>{{ $lap->jmlh_debit }}</td>
                            <td>{{ $lap->jmlh_ph }}</td>
                            <td>{{ $lap->jmlh_suhu }}</td>
                            <td>{{ $lap->jmlh_tss }}</td>
                            <td>{{ $lap->jmlh_tds }}</td>
                            <td>{{ $lap->jmlh_bod }}</td>
                            <td>{{ $lap->jmlh_cod }}</td>
                            <td>{{ $lap->jmlh_amoniak }}</td>
                            <td>{{ $lap->jmlh_minyak }}</td>
                            <td>{{ $lap->jmlh_caliform }}</td>
                            <td>{{ $lap->jmlh_bakteri }}</td>
                            <td>{{ $lap->jmlh_mbas }}</td>
                            <td>{{ $lap->jmlh_sulfida }}</td>
                            <td>{{ $lap->jmlh_nitrat }}</td>
                            <td>{{ $lap->jmlh_nitrit }}</td>
                            <td>{{ $lap->jmlh_pshospat }}</td>
                            <td>{{ $lap->jmlh_fenol }}</td>
                            <td>{{ $lap->jmlh_khorm }}</td>
                            <td>{{ $lap->jmlh_seng }}</td>
                            <td>{{ $lap->jmlh_klorida }}</td>
                            <td>{{ $lap->jmlh_klor }}</td>
                            <td>{{ $lap->jmlh_fluorida }}</td>
                            <td>{{ $lap->jmlh_warna }}</td>
                            <td>{{ $lap->jmlh_produksi }}</td>
                            <td>{{ $lap->jmlh_hunian }}</td>
                            <td>{{ $lap->jmlh_bed }}</td>
                        </tr>
                    @endforeach
            </table>
        </div>
        <script type="text/javascript">
            window.print();
        </script>
        </thead>

        </tbody>
</body>

</html>
