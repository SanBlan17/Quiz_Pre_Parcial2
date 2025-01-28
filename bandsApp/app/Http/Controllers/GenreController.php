<?php

namespace App\Http\Controllers;
use App\Models\Genre;
use App\Models\Band;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(){
        $genre = Genre::with('band')->get();
        return $genre;
    }

    public function show($id){
        $genre = Genre::with('band')->findOrFail($id);
        return $genre;
    }
}
