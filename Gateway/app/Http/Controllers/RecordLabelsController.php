<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecordLabelsController extends Controller
{
    protected $apiUrl;
    
    public function __construct()
    {
        $this->apiUrl=env('MICROSERVICIO_FLASK');
    }
    
    
    public function generate(int $n){
        $url = $this->apiUrl. "/generate_labels/". $n;
        $response = Http::post($url);
        return $response->json();
    }

    public function index(){
        $url = $this->apiUrl. "/record_labels/";
        $response = Http::get($url);
        return $response->json();
    }
}
