<?php

namespace App\Http\Controllers;

use App\Models\Pertek;
use App\Models\User;
use App\Models\NIB;
use App\Models\Pengolahan;
use App\Models\Template;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\File;


class PertekController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function listPertek()
    {
        $user = request()->user();
        $template = Template::all();
        $perusahaan = Perusahaan::all();
        $nib = NIB::all();
        $pertek = Pertek::all();
        // $labs = Pertek::where('user_id', $user->id)->get();
        return view('pertek', compact('user', 'template', 'perusahaan', 'nib', 'pertek'));
    }

    public function tambah()
    {
        $user = User::all();
        $nib = NIB::all();
        $template = Template::all();
        $perusahaan = Perusahaan::all();
        $pertek = Pertek::all();
        return view('datapertek1', compact('user', 'nib', 'template', 'perusahaan', 'pertek'));
    }

    public function tambahMutu()
    {
        $user = User::all();
        $nib = NIB::all();
        $template = Template::all();
        $perusahaan = Perusahaan::all();
        $pertek = Pertek::all();
        return view('datapertek2', compact('user', 'nib', 'template', 'perusahaan', 'pertek'));
    }

    public function tambahLimbah()
    {
        $pengolahan = Pengolahan::pluck('jenis_pengolahan', 'id');
        $user = User::all();
        $nib = NIB::all();
        $template = Template::all();
        $perusahaan = Perusahaan::all();
        $pertek = Pertek::all();
        return view('datapertek3', compact('user', 'nib', 'template', 'perusahaan', 'pertek', 'pengolahan'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        //membuat validasi, jika tidak diisi maka akan menampilkan pesan error
        $this->validate(
            $request,
            [

                'surat_permohonan'          => 'required|mimes:doc,docx,pdf,xls,xlxs',
                'surat_persetujuan_pembuangan_air'          => 'required|mimes:doc,docx,pdf,xls,xlxs',
                'surat_persetujuan_pembuangan_formasi'          => 'required|mimes:doc,docx,pdf,xls,xlxs',
                'surat_persetujuan_pemanfaatan_formasi'    => 'required|mimes:doc,docx,pdf,xls,xlxs',
                // 'status'    => 'required'
            ],
            // [
            //     'id_perusahaan.required' => 'nama perusahaan'
            // ]
        );

        //mengambil data file yang diupload

        $surat_permohonan           = $request->file('surat_permohonan');
        $surat_persetujuan_pembuangan_air           = $request->file('surat_persetujuan_pembuangan_air');
        $surat_persetujuan_pembuangan_formasi          = $request->file('surat_persetujuan_pembuangan_formasi');
        $surat_persetujuan_pemanfaatan_formasi      = $request->file('surat_persetujuan_pemanfaatan_formasi');

        //mengambil nama file
        $nama_surat_permohonan      = $surat_permohonan->hashName();
        $nama_surat_persetujuan_pembuangan_air        = $surat_persetujuan_pembuangan_air->hashName();
        $nama_surat_persetujuan_pembuangan_formasi    = $surat_persetujuan_pembuangan_formasi->hashName();
        $nama_surat_persetujuan_pemanfaatan_formasi      = $surat_persetujuan_pemanfaatan_formasi->hashName();

        //memindahkan file ke folder tujuan
        $surat_permohonan->move('file_upload', $surat_permohonan->hashName());
        $surat_persetujuan_pembuangan_air->move('file_upload', $surat_persetujuan_pembuangan_air->hashName());
        $surat_persetujuan_pembuangan_formasi->move('file_upload', $surat_persetujuan_pembuangan_formasi->hashName());
        $surat_persetujuan_pemanfaatan_formasi->move('file_upload', $surat_persetujuan_pemanfaatan_formasi->hashName());



        $pertek = new Pertek;
        $pertek->id_perusahaan = $request->input('id_perusahaan');
        // $perizinan->perusahaan_pengumpul = $request->input('perusahaan_pengumpul');
        // $perizinan->kategori = $request->input('kategori');

        // $perizinan->status = $request->input('status');
        $pertek->surat_permohonan       = $nama_surat_permohonan;
        $pertek->surat_persetujuan_pembuangan_air       = $nama_surat_persetujuan_pembuangan_air;
        $pertek->surat_persetujuan_pembuangan_formasi      = $nama_surat_persetujuan_pembuangan_formasi;
        $pertek->surat_persetujuan_pemanfaatan_formasi       = $nama_surat_persetujuan_pemanfaatan_formasi;


        //menyimpan data ke database
        $pertek->save();

        //kembali ke halaman sebelumnya
        // return back()->with('toast_success', 'Data Berhasil Tersimpan');
        // return redirect()->route('perizinans')->with('sukses','Data Berhasil Tersimpan');
        return redirect()->route('pertek')->with('toast_success', 'Data Berhasil Tersimpan');

        //    return $request->all();
    }

    // public function tampilkanperizinan($id){
    //     $data = Perizinan::find($id);
    //     //dd($kategori);
    //     return view('fiturAdmin\Kategori\editkategori', compact('kategori'));
    // }

    public function create(Request $request)
    {
        $surat_permohonan         = $request->file('surat_permohonan');
        $surat_persetujuan_pembuangan_air       = $request->file('surat_persetujuan_pembuangan_air');
        $surat_persetujuan_pembuangan_formasi          = $request->file('surat_persetujuan_pembuangan_formasi ');
        $surat_persetujuan_pemanfaatan_formasi = $request->file('surat_persetujuan_pemanfaatan_formasi');

        //mengambil nama file

        $nama_surat_permohonan      = $surat_permohonan->getClientOriginalName();
        $nama_surat_persetujuan_pembuangan_air        = $surat_persetujuan_pembuangan_air->getClientOriginalName();
        $nama_surat_persetujuan_pembuangan_formasi    = $surat_persetujuan_pembuangan_formasi->getClientOriginalName();
        $nama_surat_persetujuan_pemanfaatan_formasi      = $surat_persetujuan_pemanfaatan_formasi->getClientOriginalName();


        //memindahkan file ke folder tujuan
        $surat_permohonan->move('file_upload', $surat_permohonan->getClientOriginalName());
        $surat_persetujuan_pembuangan_air->move('file_upload', $surat_persetujuan_pembuangan_air->getClientOriginalName());
        $surat_persetujuan_pembuangan_formasi->move('file_upload', $surat_persetujuan_pembuangan_formasi->getClientOriginalName());
        $surat_persetujuan_pemanfaatan_formasi->move('file_upload', $surat_persetujuan_pemanfaatan_formasi->getClientOriginalName());


        $pertek = new Pertek;
        // $pertek->id_perusahaan = $request->input('id_perusahaan');

        $pertek->surat_permohonan       = $nama_surat_permohonan;
        $pertek->surat_persetujuan_pembuangan_air       = $nama_surat_persetujuan_pembuangan_air;
        $pertek->surat_persetujuan_pembuangan_formasi      = $nama_surat_persetujuan_pembuangan_formasi;
        $pertek->surat_persetujuan_pemanfaatan_formasi       = $nama_surat_persetujuan_pemanfaatan_formasi;

        $pertek->save();
        return redirect()->back()->with('status', 'Data Berhasil Ditambahkan.');
    }

    public function laporanPertek()
    {
        $user = request()->user();
        $template = Template::all();
        $perusahaan = Perusahaan::all();
        $nib = NIB::all();
        // $pertek = Pertek::all();
        // $labs = Pertek::where('user_id', $user->id)->get();
        return view('admin.laporanpertek', compact('user', 'template', 'perusahaan', 'nib'));
    }

    // public function storePertek(Request $request)
    // {
    //     // dd($request->all());
    //     $pertek = Pertek::all();
    //     $request->validate([
    //         'nama_pertek' => 'required|string|min:1|max:100',
    //         'no_rekomendasi' => 'required|string|min:1|max:100',
    //         'lokasi' => 'required|string|min:1|max:100',
    //         'upload_dokumen' => 'required|max:10240|mimes:pdf',
    //     ]);

    //     $pertek=new Pertek;
    //     $pertek->nama_pertek = $request->nama_pertek;
    //     $pertek->no_rekomendasi = $request->no_rekomendasi;
    //     $pertek->lokasi = $request->lokasi;
    //     $pertek->upload_dokumen = $request->upload_dokumen;

    //     if($pertek->save()) {
    //         return redirect('/registrasi-perusahaan/formpimpinan', $pertek)->with('message', 'Berhasil menambahkan data ');
    //     } else {
    //         return redirect()->back()->with('message', 'Gagal menambahkan data');
    //     }
    // }

}
