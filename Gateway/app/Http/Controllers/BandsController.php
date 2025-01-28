<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BandsController extends Controller
{
    protected $apiUrl;
    protected $apiKey;
    
    public function __construct()
    {
        $this->apiUrl=env('MICROSERVICIO_LARAVEL');
    }
    
    
    public function index(){
        $url = $this->apiUrl. "/bands/";
        $response = Http::get($url);
        return $response->json();
    }

    public function show(string $id){
        $url = $this->apiUrl. "/bands/". $id;
        $response = Http::get($url);
        return $response->json();
    }
}
