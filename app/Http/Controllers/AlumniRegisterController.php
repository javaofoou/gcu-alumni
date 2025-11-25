<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
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




    // if ($req->hasFile('image')) {
    //     try {
    //         // Upload to Cloudinary
    //         $uploadedFileUrl = Cloudinary::upload(
    //             $req->file('image')->getRealPath(),
    //             ['folder' => 'gcu-alumni']
    //         )->getSecurePath();
    //         $imageUrl = $uploadedFileUrl;
           
    //     } catch (\Exception $e) {
    //         return back()->withErrors([
    //             'image' => 'Cloudinary upload failed: ' . $e->getMessage()
    //         ]);
    //     }

    //      dd($uploadedFileUrl);
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


//     public function show()
//     {
//         return view('auth.register'); // shows the form
//     }

//     public function submit(Request $request)
//     {
//         // 1) Validate form
//         $data = $request->validate([
//             'name'               => 'required|string|max:255',
//             'nickname'           => 'nullable|string|max:255',
//             'entry'              => 'required|string|max:10',
//             'past_class_captain' => 'nullable|string|max:255',
//             'house'              => 'required|string|max:255',
//             'old_principal'      => 'nullable|string|max:255',
//             'residence'          => 'nullable|string|max:255',
//             'country'            => 'nullable|string|max:255',
//             'location'           => 'nullable|string|max:255',
//             'profession'         => 'nullable|string|max:255',
//             'business_category'  => 'nullable|string|max:255',
//             'business_interest'  => 'nullable|string|max:255',
//             'trade'              => 'nullable|string|max:255',
//             'contact'            => 'nullable|string|max:255',
//             'email'              => 'required|email|max:255',
//             'nin'                => 'nullable|string|max:50',
//             'password'           => 'required|string|min:6|confirmed',
//             'image'              => 'nullable|image|max:5120', // 5MB
//         ]);

//         // 2) Upload to Cloudinary (optional)
//         $imageUrl = null;
//         if ($request->hasFile('image')) {
//             // If using the Cloudinary Laravel package:
//             // composer require cloudinary-labs/cloudinary-laravel
//             // php artisan vendor:publish --provider="CloudinaryLabs\CloudinaryLaravel\CloudinaryServiceProvider" --tag=cloudinary-laravel
//             // Then set CLOUDINARY_URL or individual creds in .env
//             try {
//                 $uploaded = \CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary::upload(
//                     $request->file('image')->getRealPath(),
//                     ['folder' => 'gcu-alumni']
//                 );
//                 $imageUrl = $uploaded->getSecurePath();
//             } catch (\Throwable $e) {
//                 // If Cloudinary isn't configured yet, just ignore the image
//                 $imageUrl = null;
//             }
//         }

//         // 3) Create User in Supabase users table
//         $supabaseUrl = rtrim(env('SUPABASE_URL'), '/');
//         $supabaseKey = env('SUPABASE_KEY');

//         $userResponse = Http::withHeaders([
//             'apikey'        => $supabaseKey,
//             'Authorization' => 'Bearer ' . $supabaseKey,
//             'Content-Type'  => 'application/json',
//             'Prefer'        => 'return=representation',
//         ])->post($supabaseUrl . '/rest/v1/users', [
//             'username'   => $data['name'],
//             'email'      => $data['email'],
//             'password'   => Hash::make($data['password']),
//             'role'       => 'alumni',
//         ]);

//         if ($userResponse->failed()) {
//             return back()
//                 ->withInput()
//                 ->withErrors(['email' => 'Email already in use or Network Error!']);
//                  dd("DEBUG:", $userResponse->status(), $userResponse->body()); 
//         }

//         $userRow = $userResponse->json()[0] ?? null;
//         if (!$userRow || !isset($userRow['id'])) {
//             return back()
//                 ->withInput()
//                 ->withErrors(['email' => 'Could not obtain user id from Supabase.']);
//         }
//         $userId = $userRow['id'];

//         // 4) Create Alumni record linked to user_id
//         $alumniPayload = [
//     'name'               => $data['name'] ?? null,
//     'nickname'           => $data['nickname'] ?? null,
//     'entry'              => $data['entry'] ?? null,
//     'image'              => $imageUrl,
//     'past_class_captain' => $data['past_class_captain'] ?? null,
//     'house'              => $data['house'] ?? null,
//     'old_principal'      => $data['old_principal'] ?? null,
//     'residence'          => $data['residence'] ?? null,
//     'country'            => $data['country'] ?? null,
//     'location'           => $data['location'] ?? null,
//     'profession'         => $data['profession'] ?? null,
//     'business_category'  => $data['business_category'] ?? null,
//     'business_interest'  => $data['business_interest'] ?? null,
//     'trade'              => $data['trade'] ?? null,
//     'contact'            => $data['contact'] ?? null,
//     'email'              => $data['email'],
//     'nin'                => $data['nin'] ?? null,
// ];


// $alumniResponse = Http::withHeaders([
//     'apikey' => env('SUPABASE_KEY'),
//     'Authorization' => 'Bearer ' . env('SUPABASE_KEY'),
//     'Content-Type' => 'application/json',
//     'Prefer' => 'return=representation',
// ])->post(env('SUPABASE_URL') . '/rest/v1/alumni', $alumniPayload);


//         if ($alumniResponse->failed()){
//            dd("DEBUG:", $alumniResponse->status(), $alumniResponse->body());
//            dd("Alumni insert error → ", $alumniResponse->body()); 
//     // dd($alumniResp->body()); // shows exact Supabase error
//     //         return back()
//     //             ->withInput()
//     //             ->withErrors(['general' => 'Alumni profile could not be created.']);
//         }
 
//         // 5) Success — flash message (this replaces your $successMessage var)
// // 5) Success
// return redirect('/login')->with('success','✅ Registration successful! Please login to continue.');
//     }
// }
