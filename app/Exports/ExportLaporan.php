<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use App\Models\Laporan;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportLaporan implements FromQuery, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    use Exportable;

    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public function query()
    {
        $data = Laporan::select()
            ->whereDate('tanggal_sampling', '>=', $this->start)
            ->whereDate('tanggal_sampling', '<=', $this->end);
        // dd($data);
        return $data;
    }
    public function headings(): array
    {
        return [
            'No.Laporan',
            'Nama Perusahaan',
            'Nama Laboratorium',
            'Nama Petugas',
            'Jenis Sampling',
            'Paramater',
            'Tanggal Sampling',
            'Debit Inlet',
            'Debit Outler',
            'Debit Air Baku Mutu',
            'pH',
            'Suhu',
            'TSS',
            'TDS',
            'BOD',
            'COD',
            'Amoniak (NH₃₋N)',
            'Minyak & Lemak',
            'Total Caliform',
            'Bakteri Caliform',
            'MBAS',
            'Sulfida (S)',
            'Nitrat (NO3-N)',
            'Nitrit (NO2-N)',
            'Phosphat (PO4-P)',
            'Fenol Total',
            'Khrom Total (Cr)',
            'Seng (ZN)',
            'Klorida',
            'Klor Bebas',
            'Fluorida (F)',
            'Warna',
            'Produksi',
            'Jumlah Hunian',
            'Jumlah BED',
        ];
    }
}
