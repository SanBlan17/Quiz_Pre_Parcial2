<?php

namespace App\Http\Controllers;
use App\Models\Band;

use Illuminate\Http\Request;

class BandController extends Controller
{
    public function index(){
        $bands = Band::all();
        return view('bands',[
            'bands' => $bands]);
    }
    public function show($id){
        $bands = Band::find($id);
        return view('band',[
            'band' => $bands
        ]);
    
    }
}
