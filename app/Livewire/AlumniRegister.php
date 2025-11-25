<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


class AlumniRegister extends Component
{
    use WithFileUploads;
    public $name, $nickname, $entry, $past_class_captain, $house;
    public $old_principal, $residence, $country, $location, $profession;
    public $business_category, $business_interest, $trade, $contact, $email, $nin;
    public $password, $image;
    public $successMessage = '';

    public function register()
    {
        $this->validate([
            'name' => 'required',
            'entry' => 'required',
            'house' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
         
        // Upload image to Cloudinary
$imageUrl = null;

if ($this->image) {
    $uploadedFileUrl = Cloudinary::upload($this->image->getRealPath(), [
        'folder' => 'gcu-alumni'
    ])->getSecurePath();

    $imageUrl = $uploadedFileUrl;
}


        // 1) Create User in Supabase USERS table
        $userResponse = Http::withHeaders([
            'apikey' => env('SUPABASE_KEY'),
            'Authorization' => 'Bearer ' . env('SUPABASE_KEY'),
            'Content-Type' => 'application/json',
        ])->post(env('SUPABASE_URL').'/rest/v1/users', [
            'username' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => 'alumni',
        ]);

        if ($userResponse->failed()) {
            $this->addError('email', 'Email already in use.');
            return;
        }

        $user = $userResponse->json()[0];
        $user_id = $user['id'];

        // 2) Insert ALUMNI profile and link to user
        Http::withHeaders([
            'apikey' => env('SUPABASE_KEY'),
            'Authorization' => 'Bearer ' . env('SUPABASE_KEY'),
            'Content-Type' => 'application/json',
        ])->post(env('SUPABASE_URL').'/rest/v1/alumni', [
            'name' => $this->name,
            'nickname' => $this->nickname,
            'entry' => $this->entry,
            'image' => $imageUrl,
            'past_class_captain' => $this->past_class_captain,
            'house' => $this->house,
            'old_principal' => $this->old_principal,
            'residence' => $this->residence,
            'country' => $this->country,
            'location' => $this->location,
            'profession' => $this->profession,
            'business_category' => $this->business_category,
            'business_interest' => $this->business_interest,
            'trade' => $this->trade,
            'contact' => $this->contact,
            'email' => $this->email,
            'nin' => $this->nin,
            'user_id' => $user_id,
        ]);

        $this->successMessage = "✅ Registration Successful! Please proceed to Login.";
        $this->reset();
    }

    public function render()
    {
        return view('livewire.alumni-register');
    }
}
