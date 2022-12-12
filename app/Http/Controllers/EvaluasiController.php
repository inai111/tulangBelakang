<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\NIB;
use App\Models\Evaluasi;
use Illuminate\Support\Facades\Validator;

class EvaluasiController extends Controller
{
    public function evalusaha()
    {
        $nib=NIB::all();
        $eval = Evaluasi::all();
        return view('evalusaha', compact('eval','nib'));
    }
}
