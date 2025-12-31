<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Http;

class AlumniController extends Controller
{
    
   public function classes()
    {
        // Generate years 1929 - 2019
        $years = range(2019, 1929); // descending

        return view('alumni.classes', compact('years'));
    }
    public function viewClass(Request $request, $entry)
{

    $supabaseUrl = rtrim(env('SUPABASE_URL'), '/');
    $supabaseKey = env('SUPABASE_KEY');

    $page = max(1, (int) $request->query('page', 1));
    $limit = 20;
    $from = ($page - 1) * $limit;
    $to   = $from + $limit - 1;


    $response = Http::withHeaders([
        'apikey'        => $supabaseKey,
        'Authorization' => 'Bearer ' . $supabaseKey,
        'Range'         => "$from-$to",     // ✅ The correct header
        'Range-Unit'    => 'items',
        'Prefer'        => 'count=exact', 
    ])->get("$supabaseUrl/rest/v1/alumni", [
        'select' => '*',
        'entry'  => "eq.$entry",
        'order'  => 'name.asc',
    ]);
    $alumni = $response->json();

    // Extract total count from Content-Range header
    $total = 0;
    if ($response->hasHeader('Content-Range')) {
        $range = explode('/', $response->header('Content-Range'));
        $total = isset($range[1]) ? (int) $range[1] : 0;
    }

    $pages = ceil($total / $limit);

 return view('alumni.class-view', compact('entry', 'alumni', 'page', 'pages'));
}
public function profile($id)
{
    $supabaseUrl = rtrim(env('SUPABASE_URL'), '/');
    $supabaseKey = env('SUPABASE_KEY');

    $response = Http::withHeaders([
        'apikey'        => $supabaseKey,
        'Authorization' => 'Bearer ' . $supabaseKey,
    ])->get("$supabaseUrl/rest/v1/alumni?select=*&id=eq.$id");

    $alumni = $response->json()[0] ?? null;

    abort_if(!$alumni, 404);

    return view('alumni.profile', compact('alumni'));
}
}

