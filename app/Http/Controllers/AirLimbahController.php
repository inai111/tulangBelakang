<?php

namespace App\Http\Controllers;

use App\Models\AirLimbah;
use Illuminate\Support\Facades\DB;
use App\Models\Perusahaan;
use App\Models\User;
use App\Models\Pengolahan;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class AirLimbahController extends Controller
{
    public function index()
    {
        $airlimbah = AirLimbah::latest()->get();
        return view('datapertek1', compact('airlimbah'));
    }

    public function store(Request $request)
    {
        
        // dd($request->all());
        $user = request()->user();
        $validator = Validator::make(request()->all(), [
        // $this->validate($request, [
            'informasi_air' => 'required|string|max:155',
            'jumlah_airbaku' => 'required|string|max:155',
            'jumlah_airlimbah' => 'required|string|max:155',
            'kapasitas_ipal' => 'required|string|max:155',
            'pengolahan_id' => 'required|string|max:155',
            'lokasi_pembuangan' => 'required|string|max:155',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $airlimbah = AirLimbah::create([
            'user_id' => $user->id,
            // 'perusahaan_id' => $user->perusahaan->id,
            'informasi_air' =>  $request->informasi_air,
            'jumlah_airbaku' =>  $request->jumlah_airbaku,
            'jumlah_airlimbah' =>  $request->jumlah_airlimbah,
            'kapasitas_ipal' => $request->kapasitas_ipal,
            'pengolahan_id' => $request->pengolahan_id,
            'lokasi_pembuangan' => $request->lokasi_pembuangan
        ]);

        if ($airlimbah->save()) {
            return redirect('/pertek/tambah/mutu')->with('status', 'Berhasil menambahkan data informasi umum ');
        } else {
            return redirect()->back()->with('status', 'Gagal menambahkan data');
        }
    }
}
