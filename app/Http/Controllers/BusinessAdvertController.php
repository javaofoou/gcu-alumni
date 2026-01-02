<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Cloudinary\Cloudinary;

class BusinessAdvertController extends Controller
{
    public function create()
    {
        $user = session('alumni_user');

        if (!$user) {
            return redirect()->route('login')->with('error', 'Please login first');
        }

        return view('advert-create');
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

        
           // 2) Upload to Cloudinary (optional)
    $imageUrl = null;
  
    if ($request->hasFile('image')) {
        try {
            // Initialize Cloudinary manually
            $cloudinary = new Cloudinary([
                'cloud' => [
                    'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                    'api_key'    => env('CLOUDINARY_API_KEY'),
                    'api_secret' => env('CLOUDINARY_API_SECRET'),
                ]
            ]);

            // Upload to Cloudinary
            $uploadedFile = $cloudinary->uploadApi()->upload(
                $request->file('image')->getRealPath(),
                ["folder" => "business-adverts"]
            );

            // Get secure URL
            $imageUrl = $uploadedFile["secure_url"] ?? null;

        } catch (\Exception $e) {
            return back()->with('error', 'Cloudinary upload failed: ' . $e->getMessage());
        }
    }  

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

<<<<<<< HEAD
        return back()->with('success', 'Advert submitted Successfully.');
=======
        return back()->with('success', 'Advert submitted and awaiting approval.');
>>>>>>> afcb11ac4fb469342ebef470a96095e446ad1d21
    }
}
