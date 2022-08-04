<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Exports\LaporanExport;
use App\Exports\ExportLaporan;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function cetakLaporan()
    {
        $laporan = Laporan::all();
        return view('admin.cetak', [
            'laporan' => Laporan::all()
        ]);
    }

    public function getLaporanBetweenDate($date1, $date2)
    {
        $mulai = date($date1);
        $akhir = date($date2);
        $laporan = Laporan::whereBetween('tanggal_sampling', [$mulai, $akhir])->get();
        return $laporan;
    }
    public function laporanView($date1, $date2)
    {
        $mulai = date($date1);
        $akhir = date($date2);
        $laporan = $this->getLaporanBetweenDate($mulai, $akhir);
        return view('admin.view-laporan', [
            'laporan' => $laporan,
            'mulai' => $mulai,
            'akhir' => $akhir
        ]);
    }

    public function laporanExport($date1, $date2)
    {
        $mulai = date($date1);
        $akhir = date($date2);

        return (new ExportLaporan($mulai, $akhir))->download('Laporan ' . str_replace("-", "", $mulai) . '-' . str_replace("-", "", $akhir) . '.xlsx');
    }
    public function export()
    {
        return Excel::download(new LaporanExport, 'datalaporan.xlsx');
    }
}
