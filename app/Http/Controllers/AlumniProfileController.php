<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Cloudinary\Cloudinary;
use Illuminate\Support\Facades\Log;


class AlumniProfileController extends Controller
{
public function edit()
{
    $user = session('alumni_user');

    if (!$user) {
        return redirect('/login')->with('error', 'Please login first');
    }

    $supabaseUrl = rtrim(env('SUPABASE_URL'), '/');
    $supabaseKey = env('SUPABASE_KEY');

    // Fetch the alumni record based on email
    $response = Http::withHeaders([
        'apikey' => $supabaseKey,
        'Authorization' => 'Bearer ' . $supabaseKey,
    ])->get($supabaseUrl . '/rest/v1/alumni', [
        'select' => '*',
        'email'  => 'eq.' . $user['email'],
    ]);

    $alumni = $response->json()[0] ?? null;

    if (!$alumni) {
        return redirect('/dashboard')->with('error', 'Alumni profile not found.');
    }

    return view('alumni.edit', compact('alumni'));
}
public function update(Request $request)
{
    $user = session('alumni_user');
    if (!$user) {
        return redirect('/login');
    }

    // Validate (email cannot change)
    $request->validate([
        'name' => 'required',
        'house' => 'required',
        'entry' => 'required',
        'image' => 'nullable|image|max:4096'
    ]);

    $supabaseUrl = rtrim(env('SUPABASE_URL'), '/');
    $supabaseKey = env('SUPABASE_KEY');

    // Get old image URL
    $oldImage = $request->old_image;

    //-------------------------------------
    // 1) UPLOAD NEW IMAGE IF PROVIDED
    //-------------------------------------
    $imageUrl = $oldImage;

    if ($request->hasFile('image')) {
        try {
            // Initialize Cloudinary instance
            $cloudinary = new \Cloudinary\Cloudinary([
                'cloud' => [
                    'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                    'api_key'    => env('CLOUDINARY_API_KEY'),
                    'api_secret' => env('CLOUDINARY_API_SECRET'),
                ]
            ]);

            // 🔥 A) Delete previous image from Cloudinary
            if ($oldImage) {
                // Extract public ID
                $publicId = pathinfo(parse_url($oldImage, PHP_URL_PATH), PATHINFO_FILENAME);

                // Delete from Cloudinary
                $cloudinary->uploadApi()->destroy("gcu-alumni/" . $publicId);
            }

            // 🔥 B) Upload new profile image
            $upload = $cloudinary->uploadApi()->upload(
                $request->file('image')->getRealPath(),
                ["folder" => "gcu-alumni"]
            );

            $imageUrl = $upload["secure_url"] ?? $oldImage;

        } catch (\Exception $e) {
            return back()->with('error', 'Cloudinary upload failed: ' . $e->getMessage());
        }
    }

    //-------------------------------------
    // 2) UPDATE SUPABASE RECORD
    //-------------------------------------
    Http::withHeaders([
        'apikey' => $supabaseKey,
        'Authorization' => 'Bearer ' . $supabaseKey,
        'Content-Type' => 'application/json',
    ])->patch($supabaseUrl . '/rest/v1/alumni?email=eq.' . $user['email'], [
        'name' => $request->name,
        'nickname' => $request->nickname,
        'house' => $request->house,
        'entry' => $request->entry,
        'profession' => $request->profession,
        'location' => $request->location,
        'country' => $request->country,
        'residence' => $request->residence,
        'business_category' => $request->business_category,
        'business_interest' => $request->business_interest,
        'website_url' => $request->website_url,
        'trade' => $request->trade,
        'contact' => $request->contact,
        'image' => $imageUrl,
        // DO NOT UPDATE EMAIL (you said email must not change)
    ]);

    return redirect('/dashboard')->with('success', 'Profile Updated Successfully!');
}
}

