<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class BusinessAdvertController extends Controller
{
    public function create()
    {
        $user = session('alumni_user');

        if (!$user) {
            return redirect()->route('login')->with('error', 'Please login first');
        }

        return view('adverts.create');
    }

    public function store(Request $request)
    {
        $user = session('alumni_user');

        if (!$user) {
            return redirect()->route('login')->with('error', 'Please login first');
        }

        $request->validate([
            'business_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'image' => 'required|image|max:2048',
            'description' => 'nullable|string|max:500',
        ]);

        // Upload image to Cloudinary
        $imageUrl = Cloudinary::upload(
            $request->file('image')->getRealPath(),
            ['folder' => 'business-adverts']
        )->getSecurePath();

        // Insert into Supabase
        $response = Http::withHeaders([
            'apikey' => env('SUPABASE_KEY'),
            'Authorization' => 'Bearer ' . env('SUPABASE_KEY'),
            'Content-Type' => 'application/json',
            'Prefer' => 'return=representation',
        ])->post(env('SUPABASE_URL') . '/rest/v1/business_adverts', [
            'email' => $user['email'],
            'business_name' => $request->business_name,
            'phone' => $request->phone,
            'image' => $imageUrl,
            'description' => $request->description,
            'status' => 'pending',
        ]);

        if ($response->failed()) {
            return back()->with('error', 'Advert upload failed. Try again.');
        }

        return back()->with('success', 'Advert submitted and awaiting approval.');
    }
}
