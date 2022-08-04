<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Feedback;
use App\Models\Laporan;
use App\Models\Pimpinan;
use App\Models\Sampling;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Perusahaan;
use App\Models\Laboratorium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function indexuser()
    {
        return view('home');
    }

    public function download(Request $request, $file_lampiran)
    {
        return response()->download(public_path('filelampiran/' . $file_lampiran));
    }
    public function riwayatlap()
    {
        $user = request()->user();
        $laporan = Laporan::where('user_id', $user->id)
            ->whereHas('status', function ($q) {
                $q->where('status', 'Disetujui');
            })->get();
        $feedback = Feedback::all();
        return view('riwayat', compact('laporan', 'feedback'));
    }
}
