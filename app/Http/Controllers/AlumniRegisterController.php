<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cloudinary\Cloudinary;


class AlumniRegisterController extends Controller
{
    public function showAlumniForm()
    {
        return view('alumni.profile-form');
    }

    public function storeAlumniSession(Request $req)
    {
        $req->validate([
            'name'               => 'required|string|max:255',
            'nickname'           => 'nullable|string|max:255',
            'entry'              => 'required|string|max:10',
            'past_class_captain' => 'nullable|string|max:255',
            'house'              => 'required|string|max:255',
            'old_principal'      => 'nullable|string|max:255',
            'residence'          => 'nullable|string|max:255',
            'country'            => 'nullable|string|max:255',
            'location'           => 'nullable|string|max:255',
            'profession'         => 'nullable|string|max:255',
            'business_category'  => 'nullable|string|max:255',
            'business_interest'  => 'nullable|string|max:255',
            'trade'              => 'nullable|string|max:255',
            'contact'            => 'nullable|string|max:255',
            'email'              => 'required|email|max:255',
            'nin'                => 'nullable|string|max:50',
            'image'              => 'nullable|image|max:5120',
        ]);

           // 2) Upload to Cloudinary (optional)
    $imageUrl = null;
  
    if ($req->hasFile('image')) {
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
                $req->file('image')->getRealPath(),
                ["folder" => "gcu-alumni"]
            );

            // Get secure URL
            $imageUrl = $uploadedFile["secure_url"] ?? null;

        } catch (\Exception $e) {
            return back()->with('error', 'Cloudinary upload failed: ' . $e->getMessage());
        }
    }  


        // Store in session
        session([
            'alumni_data' => [
                'name' => $req->name,
                'nickname' => $req->nickname,
                'entry' => $req->entry,
                'house' => $req->house,
                'profession' => $req->profession,
                'location' => $req->location,
                'country' => $req->country,
                'residence' => $req->residence,
                'trade' => $req->trade,
                'business_category' => $req->business_category,
                'business_interest' => $req->business_interest,
                'contact' => $req->contact,
                'email' => $req->email,
                'old_principal' => $req->old_principal,
                'past_class_captain' => $req->past_class_captain,
                'nin' => $req->nin,
                'image' => $imageUrl
            ]
        ]);
        return redirect('/create-account')->with('success', 'Profile saved. Continue creating your account.');
    }
}
