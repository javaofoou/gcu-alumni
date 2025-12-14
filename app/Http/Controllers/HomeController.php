<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $key = env('SUPABASE_KEY');
        $url = env('SUPABASE_URL');

        // Fetch approved business adverts
        $adverts = Http::withHeaders([
            'apikey' => $key,
            'Authorization' => 'Bearer ' . $key,
        ])->get($url . '/rest/v1/business_adverts?order=created_at.desc')
          ->json();

        return view('alumni-directory', compact('adverts'));
    }
}
