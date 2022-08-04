<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Perusahaan;
use App\Models\Laboratorium;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LaporanController extends Controller
{
    public function listLaporan()
    {
        $user = request()->user();
        $perusahaan = Perusahaan::where('user_id', $user->id)->oldest()->first();
        if (empty($perusahaan)) {
            return redirect('registrasi-perusahaan/formpimpinan')->with('message', 'Silahkan mendaftarkan perusahaan terlebih dahulu');
        } else {
            if ($perusahaan->status_id != 2) {
                return redirect('registrasi-perusahaan/profil')->with('message', 'Status perusahaan belum disetujui');
            }
        }
        $laporan = Laporan::where('user_id', $user->id)->whereIn('status_id', ['1', '3'])->get();
        return view('laporan', ['laporan' => $laporan]);
    }
    public function laporandetail($id)
    {
        $laporan = Laporan::find($id);
        $data = [
            'laporan' => $laporan,
        ];
        return view('detail_laporan', $data);
    }
    public function laporanbaru()
    {
        $user = request()->user();
        $perusahaan = Perusahaan::where('user_id', $user->id)->get();
        $lab = Laboratorium::pluck('nama_lab', 'id');
        $kode = Laporan::kode();
        if (empty($perusahaan[0])) {
            return redirect('registrasi-perusahaan/formpimpinan');
        }
        return view('tambahlaporan', [
            'kode' => $kode,
            'lab' => $lab,
            'perusahaan' => $perusahaan
        ]);
    }
    public function postLaporan()
    {
        $user = request()->user();
        $validator = Validator::make(request()->all(), [
            'filescan_laporan' => 'required|max:10240|mimes:pdf,doc,docx',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        if (request()->hasFile('filescan_laporan')) {
            $filescan = time() . "_" . request()->filescan_laporan->getClientOriginalName();
            request()->filescan_laporan->move(public_path('filelaporan/'), $filescan);
        }

        Laporan::create([
            'user_id' => $user->id,
            'perusahaan_id' => request('perusahaan_id'),
            'laboratorium_id' => request('laboratorium_id'),
            'status_id' => request('status_id'),
            'kode' => request('kode'),
            'nama_petugas' => request('nama_petugas'),
            'jenis_sampling' => request('jenis_sampling'),
            'parameter' => request('parameter'),
            'tanggal_sampling' => request('tanggal_sampling'),
            'filescan_laporan' => $filescan,
            'jmlh_inlet' => request('jmlh_inlet'),
            'jmlh_outlet' => request('jmlh_outlet'),
            'jmlh_debit' => request('jmlh_debit'),
            'jmlh_ph' => request('jmlh_ph'),
            'jmlh_suhu' => request('jmlh_suhu'),
            'jmlh_tss' => request('jmlh_tss'),
            'jmlh_tds' => request('jmlh_tds'),
            'jmlh_bod' => request('jmlh_bod'),
            'jmlh_amoniak' => request('jmlh_amoniak'),
            'jmlh_minyak' => request('jmlh_minyak'),
            'jmlh_caliform' => request('jmlh_caliform'),
            'jmlh_bakteri' => request('jmlh_bakteri'),
            'jmlh_mbas' => request('jmlh_mbas'),
            'jmlh_sulfida' => request('jmlh_sulfida'),
            'jmlh_nitrat' => request('jmlh_nitrat'),
            'jmlh_nitrit' => request('jmlh_nitrit'),
            'jmlh_pshospat' => request('jmlh_pshospat'),
            'jmlh_fenol' => request('jmlh_fenol'),
            'jmlh_khorm' => request('jmlh_khorm'),
            'jmlh_seng' => request('jmlh_seng'),
            'jmlh_klorida' => request('jmlh_klorida'),
            'jmlh_klor' => request('jmlh_klor'),
            'jmlh_fluorida' => request('jmlh_fluorida'),
            'jmlh_warna' => request('jmlh_warna'),
            'jmlh_cod' => request('jmlh_cod'),
            'jmlh_produksi' => request('jmlh_produksi'),
            'jmlh_hunian' => request('jmlh_hunian'),
            'jmlh_bed' => request('jmlh_bed'),
        ]);

        return redirect('laporan');
    }
    public function editLaporan($id)
    {
        $user = request()->user();
        $perusahaan = Perusahaan::where('user_id', $user->id)->get();
        $lab = Laboratorium::pluck('nama_lab', 'id');
        $kode = Laporan::kode();
        $laporan = Laporan::find($id);
        if (empty($perusahaan[0])) {
            return redirect('registrasi-perusahaan/formpimpinan');
        }
        return view('editlaporan', [
            'kode' => $kode,
            'lab' => $lab,
            'perusahaan' => $perusahaan,
            'laporan' => $laporan
        ]);
    }
    public function updateLaporan(Request $request, $id)
    {
        $user = $request->user();
        $validator = Validator::make($request->all(), [
            'filescan_laporan' => 'required|max:10240|mimes:pdf,doc,docx',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        if ($request->hasFile('filescan_laporan')) {
            $filescan = time() . "_" . $request->filescan_laporan->getClientOriginalName();
            $request->filescan_laporan->move(public_path('filelaporan/'), $filescan);
        } else {
            $laporan = Laporan::find($id);
            $filescan = $laporan->filescan_laporan;
        }

        Laporan::where('id', $id)->update([
            'user_id' => $user->id,
            'perusahaan_id' => $request->perusahaan_id,
            'laboratorium_id' => $request->laboratorium_id,
            'status_id' => $request->status_id,
            'kode' => $request->kode,
            'nama_petugas' => $request->nama_petugas,
            'jenis_sampling' => $request->jenis_sampling,
            'parameter' => $request->parameter,
            'tanggal_sampling' => $request->tanggal_sampling,
            'filescan_laporan' => $filescan,
            'jmlh_inlet' => $request->jmlh_inlet,
            'jmlh_outlet' => $request->jmlh_outlet,
            'jmlh_debit' => $request->jmlh_debit,
            'jmlh_ph' => $request->jmlh_ph,
            'jmlh_suhu' => $request->jmlh_suhu,
            'jmlh_tss' => $request->jmlh_tss,
            'jmlh_tds' => $request->jmlh_tds,
            'jmlh_bod' => $request->jmlh_bod,
            'jmlh_amoniak' => $request->jmlh_amoniak,
            'jmlh_minyak' => $request->jmlh_minyak,
            'jmlh_caliform' => $request->jmlh_caliform,
            'jmlh_bakteri' => $request->jmlh_bakteri,
            'jmlh_mbas' => $request->jmlh_mbas,
            'jmlh_sulfida' => $request->jmlh_sulfida,
            'jmlh_nitrat' => $request->jmlh_nitrat,
            'jmlh_nitrit' => $request->jmlh_nitrit,
            'jmlh_pshospat' => $request->jmlh_pshospat,
            'jmlh_fenol' => $request->jmlh_fenol,
            'jmlh_khorm' => $request->jmlh_khorm,
            'jmlh_seng' => $request->jmlh_seng,
            'jmlh_klorida' => $request->jmlh_klorida,
            'jmlh_klor' => $request->jmlh_klor,
            'jmlh_fluorida' => $request->jmlh_fluorida,
            'jmlh_warna' => $request->jmlh_warna,
            'jmlh_cod' => $request->jmlh_cod,
            'jmlh_produksi' => $request->jmlh_produksi,
            'jmlh_hunian' => $request->jmlh_hunian,
            'jmlh_bed' => $request->jmlh_bed,
        ]);

        return redirect('laporan');
    }
    public function deleteLap($laporID)
    {
        Laporan::destroy($laporID);
        return redirect()->back();
    }
}
