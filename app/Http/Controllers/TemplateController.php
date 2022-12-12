<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Template;
use Illuminate\Support\Facades\Storage;

class TemplateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $template = Template::all();
        // return $template;
            return view('admin.datatemplate', compact('template'));
        
    }

//     public function create(Request $request){
// // dd($request->all());
//         $this->validate($request, [
//             'template'          => 'required|mimes:doc,docx',
//             'nama' => ['required', 'string', 'max:255'],
            
//         ],

//     );
//          $template           = $request->file('template');

//          //mengambil nama file
//          $nama_template     = $template->getClientOriginalExtension();

//         //memindahkan file ke folder tujuan
//         $template->move('file_template/',$nama_template);

//         $template = new Template;
//         $template->template       = $nama_template;
//         $template->nama = $request->input('nama');
        

//         //menyimpan data ke database
//         $template->save();

//         //kembali ke halaman sebelumnya
//         return back()->with('toast_success', 'Data Berhasil Tersimpan');
//     }

    public function create(Request $request){
        // dd($request->all());
        $this->validate($request, [
            'template'          => 'required|mimes:doc,docx',
            'nama' => ['required', 'string', 'max:255'],
           
        ],

    );
         $template           = $request->file('template');

         //mengambil nama file
         $nama_template     = $template->getClientOriginalName();

        //memindahkan file ke folder tujuan
        $template->move('file_template',$template->getClientOriginalName());

        $template = new Template;
        $template->template       = $nama_template;
        $template->nama = $request->input('nama');

        //menyimpan data ke database
        $template->save();

        //kembali ke halaman sebelumnya
        return redirect()->back()->with('status', 'Template Berhasil Ditambahkan.');
    }

    public function downloadTemplate(Request $request, $template)
    {
        return response()->download(public_path('file_template/' . $template));
    }

    public function edit(Request $request)
    {
        $data = Template::findOrFail($request->get('id'));
        echo json_encode($data);
    }

    public function update(Request $request, $id)
    {
        // $templates = Template::where('id', Auth()->user()->id);
    //     $templates->update([
    //         'template' => $request->input('template'),
    //         'nama' => $request->input('nama'),


    // ]);
    // $template = Template::find($id);
    // $template->update([
    //     'nama_bidang' => request('nama_lab'),
    // ]);
    // return redirect()->back();
    $templates = Template::find($id);
    if($request->file('template') == "") {
        $templates->update([
        'nama' => $request->input('nama'),
        
       
]);
    }

    elseif($template = $request->file('template')){
        $path = public_path().'\file_template/';
         //code for remove old file
         if($templates->template != ''  && $templates->template != null){
            $file_old = $path.$templates->template;
            unlink($file_old);
       }

        $nama_template      = $template->getClientOriginalName();
        $template->move('file_template',$template->getClientOriginalName());
        $input['template'] = "$nama_template";

         $templates->update(['template' => $nama_template]);

    }
    // $templates->update($request->all());
    return redirect()->back()->with('status', 'Template Berhasil Diubah.');

    }

    public function hapustemplate($id){
            $template = Template::find($id);
            $template->delete();
        
            return redirect('admin/template');

    }


}