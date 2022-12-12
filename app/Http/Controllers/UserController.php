<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Feedback;
use App\Models\Laporan;
use App\Models\Laboratorium;
use App\Models\User;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexuser()
    {
        $lab = Laboratorium::count();
        $user = User::count();
        $perusahaan = Perusahaan::all();
        $pers = $perusahaan->count();
        $data = [
            'perusahaan' => $perusahaan,
            'user' => $user,
            'laboratorium' => $lab,
            'pers' => $pers,
            'title' => 'Admin'
            
        ];
        
        return view('home', $data);
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
    public function getLaporan(Request $request)
    {
        $user = request()->user();
        if(!$user) return redirect("/");
        $result['status']=$user->roles;
        if($user->roles == 'user'){
            $laporan = Laporan::where('user_id', $user->id)->whereIn('status_id', ['1', '3'])->orderBy('tanggal_sampling')->get();
        }else{
            $perusahaan = $request->get('perusahaan_id');
            if($perusahaan){
                $id_perusahaan = Perusahaan::where('nib_id',$perusahaan)->first();
                if($id_perusahaan)$perusahaan = $id_perusahaan->id;
                else $perusahaan = null;
            }
            $laporan = Laporan::whereIn('status_id', ['1', '3'])->orderBy('perusahaan_id')->orderBy('tanggal_sampling');
            if($perusahaan) $laporan = $laporan->where('perusahaan_id',$perusahaan);
            $laporan = $laporan->get();
        }
        // laporan yang dapat dibuat hanya yang memiliki batas uji
        if($laporan){
            foreach($laporan as $lapor){
                if($lapor->batasuji){
                    $result['laporan'][]=$lapor;
                    $bebanPencemaran=0;
                    $parameter_memenuhi=count($lapor->batasuji);
                    $tanggal = date('d/m/y',strtotime($lapor->tanggal_sampling));
                    $total_parameter = 0;
                    foreach($lapor->batasuji as $batas_uji){
                        $index_batas_uji = $batas_uji['nama_uji'];
                        $value_batas_uji = (float)$lapor->$index_batas_uji;
                        $total_parameter += $value_batas_uji;
                        // dd((float)$batas_uji->batas_bawah > $value_batas_uji);
                        // cek apakah memenuhi atau tidak
                        if($batas_uji->batas_bawah > $value_batas_uji || $batas_uji->batas_atas < $value_batas_uji){
                            $parameter_memenuhi-=1;
                        }
                    }
                    $pemenuhan_baku_mutu = $parameter_memenuhi?number_format($parameter_memenuhi/count($lapor->batasuji),3):0;
                    $parameter_tidak_memenuhi = (count($lapor->batasuji)-$parameter_memenuhi);
                    $parameter_tidak_memenuhi = $parameter_tidak_memenuhi?number_format($parameter_memenuhi/count($lapor->batasuji),3):0;
                    if($user->roles == 'user'){
                        $result['chart'][]=[
                            'tanggal'=>$tanggal,
                            'perusahaan_id'=>$lapor->perusahaan_id,
                            'nama_perusahaan'=>$lapor->perusahaan->nib->nama_perusahaan,
                            'laporan_id'=>$lapor->id,
                            'parameter_total_memenuhi'=>$parameter_memenuhi,
                            'beban_pencemaran'=>$total_parameter*$lapor->jmlh_inlet,
                            'parameter_total'=>count($lapor->batasuji),
                            'parameter_tidak_memenuhi'=>count($lapor->batasuji)-$parameter_memenuhi,
                            'parameter_tidak_memenuhi_persen'=>$parameter_tidak_memenuhi*100,
                            'pemenuhan_baku_mutu'=>$pemenuhan_baku_mutu,
                            'pemenuhan_baku_mutu_persen'=>$pemenuhan_baku_mutu*100,
                        ];
                    }else{
                        // untuk admin
                        $result['chart'][$lapor->perusahaan_id][]=[
                            'tanggal'=>$tanggal,
                            'perusahaan_id'=>$lapor->perusahaan_id,
                            'nama_perusahaan'=>$lapor->perusahaan->nib->nama_perusahaan,
                            'laporan_id'=>$lapor->id,
                            'parameter_total_memenuhi'=>$parameter_memenuhi,
                            'beban_pencemaran'=>$total_parameter*$lapor->jmlh_inlet,
                            'parameter_total'=>count($lapor->batasuji),
                            'parameter_tidak_memenuhi'=>count($lapor->batasuji)-$parameter_memenuhi,
                            'parameter_tidak_memenuhi_persen'=>$parameter_tidak_memenuhi*100,
                            'pemenuhan_baku_mutu'=>$pemenuhan_baku_mutu,
                            'pemenuhan_baku_mutu_persen'=>$pemenuhan_baku_mutu*100,
                        ];
                    }
                        
                    }
                }
        }
        return response()->json($result);

    }
}
