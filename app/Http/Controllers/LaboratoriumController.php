<?php

namespace App\Http\Controllers;

use App\Models\Laboratorium;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LaboratoriumController extends Controller
{
    public function listLaboratorium()
    {
        $user = request()->user();
        $labs = Laboratorium::where('user_id',$user->id)->get();
        return view('laboratorium',compact('labs'));
    }
    public function postLab()
    {
        $user = request()->user();
        Laboratorium::create([
            'user_id' => $user->id,
            'nama_lab' => request('nama_lab'),
            'alamat_lab' => request('alamat_lab'),
            'telf_lab' => request('telf_lab'),
            'email_lab' => request('email_lab'),
        ]);
        return redirect()->back();
    }
    public function editLab($labID)
    {
        $lab = Laboratorium::find($labID);
        $lab->update([
            'nama_lab' => request('nama_lab'),
            'alamat_lab' => request('alamat_lab'),
            'telf_lab' => request('telf_lab'),
            'email_lab' => request('email_lab'),
        ]);
        return redirect()->back();
    }
    public function deleteLab($labID)
    {
        Laboratorium::destroy($labID);
        return redirect()->back();
    }
}
