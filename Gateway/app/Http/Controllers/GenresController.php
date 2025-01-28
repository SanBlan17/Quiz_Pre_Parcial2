<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GenresController extends Controller
{
    protected $apiUrl;
    protected $apiKey;
    
    public function __construct()
    {
        $this->apiUrl=env('MICROSERVICIO_LARAVEL');
        $this->apiKey=env('API_KEY');
    }
    
    
    public function index(){
        $url = $this->apiUrl. "/genres/";
        $response = Http::withHeaders(["X-API-KEY"=>$this->apiKey])->get($url);
        return $response->json();
    }

    public function show(string $id){
        $url = $this->apiUrl. "/genres/". $id;
        $response = Http::withHeaders(["X-API-KEY"=>$this->apiKey])->get($url);
        return $response->json();
    }
}
