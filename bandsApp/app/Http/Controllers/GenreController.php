<?php

namespace App\Http\Controllers;
use App\Models\Genre;
use App\Models\Band;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(){
        $genres = Genre::all();

        return view('genres',[
            'genres' => $genres
        ]);
    }
    public function show($id){
        $genre = Genre::find($id);
        $bands = Band::where('genre_id', '=', $id)->get();
        
       
        return view('genre' ,[
            'genre' => $genre,
            'bands' => $bands
        ]);
    }
}
