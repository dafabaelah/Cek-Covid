<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CovidApiController extends Controller
{
    public function index() {
        $response = Http::get('https://apicovid19indonesia-v2.vercel.app/api/indonesia/provinsi');
        $data = $response->json();

        $response2 = Http::get('https://api.kawalcorona.com/positif');
        $positif = $response2->json();

        $response3 = Http::get('https://api.kawalcorona.com/sembuh');
        $sembuh = $response3->json();

        $response4 = Http::get('https://api.kawalcorona.com/meninggal');
        $meninggal = $response4->json();

        $response5 = Http::get('https://api.kawalcorona.com/indonesia');
        $indo = $response5->json();

        $response6 = Http::get('https://apicovid19indonesia-v2.vercel.app/api/indonesia');
        $indo2 = $response6->json();

        // ddd($indo);
        return view('home', compact('data', 'positif', 'sembuh', 'meninggal', 'indo', 'indo2'));
    }
}
