<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class reviewsController extends Controller
{
    private $supabaseUrl;
    private $supabaseKey;

    public function __construct()
    {
        $this->supabaseUrl = rtrim(env('SUPABASE_URL'), '/');
        $this->supabaseKey = env('SUPABASE_KEY');
    }

    public function getreview()
    {
        $response = Http::withHeaders([
            'apikey'        => $this->supabaseKey,
            'Authorization' => 'Bearer ' . $this->supabaseKey,
        ])->get("{$this->supabaseUrl}/rest/v1/reviews?select=*");

        $reviews = $response->json() ?? [];

        return view('reviews', compact('reviews'));
    }

    public function storereview(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:100',
            'review_text' => 'required|string',
        ]);

        Http::withHeaders([
            'apikey'        => $this->supabaseKey,
            'Authorization' => 'Bearer ' . $this->supabaseKey,
            'Content-Type'  => 'application/json',
        ])->post("{$this->supabaseUrl}/rest/v1/reviews", [
            'name'        => $request->name,
            'review_text' => $request->review_text,
            'review_date' => now()->toDateString(),
        ]);

        return back()->with('success', 'Review submitted successfully');
    }
}
