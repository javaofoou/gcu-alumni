<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
//use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller{
    public function showCreateAccount()
    {
        if (!session()->has('alumni_data')) {
            return redirect('/alumni/register')->with('error', 'Please fill the alumni form first.');
        }
        return view('auth.register');
    }

    public function createAccount(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'confirm_password'  => 'required|same:password',
     ], [
            'confirm_password.same' => 'Passwords do not match.',
        ]);

        $alumni = session('alumni_data');

      

    // Ensure email matches
    if ($req->email !== $alumni['email']) {
        return back()->withErrors(['email' => 'Email must match the one used in Alumni Profile Creation.']);
    }

    // check if email already exists in Supabase users
$existingUser = Http::withHeaders([
    'apikey' => env('SUPABASE_KEY'),
    'Authorization' => 'Bearer ' . env('SUPABASE_KEY'),
])->get(env('SUPABASE_URL') . '/rest/v1/users', [
    'select' => 'email',
    'email'  => 'eq.' . $req->email,
]);

if (count($existingUser->json()) > 0) {
    return back()->withErrors(['email' => 'This email is already registered.']);
}



        // 1) Store User
       $userRes = Http::withHeaders([
    'apikey'        => env('SUPABASE_KEY'),
    'Authorization' => 'Bearer ' . env('SUPABASE_KEY'),
    'Prefer'        => 'return=representation',
])->post(env('SUPABASE_URL') . '/rest/v1/users', [
    'email'    => $req->email,
    'password' => Hash::make($req->password),
    'role'     => 'alumni',
    'created_at' => now(),
]);

// Check for Supabase returned error
if (isset($userRes->json()['code'])) {
    return back()->withErrors([
        'email' => $userRes->json()['message']
    ]);
}

$user = $userRes->json()[0] ?? null;

if (!$user) {
    return back()->withErrors([
        'email' => 'User could not be created.'
    ]);
}

        // 2) Store Alumni Profile
        Http::withHeaders([
            'apikey' => env('SUPABASE_KEY'),
            'Authorization' => 'Bearer ' . env('SUPABASE_KEY'),
            'Prefer' => 'return=representation'
        ])->post(env('SUPABASE_URL') . '/rest/v1/alumni', array_merge($alumni, [
            'email' => $req->email,
        ]));

         //3) Email Verification link
        //$token = Str::random(40);
       //session(['verify_token' => $token]);

        //$verifyLink = route('verify', ['token' => $token]);
        //Mail::raw("Click to verify your email: $verifyLink", function ($msg) use ($req) {
           // $msg->to($req->email)->subject('Verify your Alumni Email');
     //});

        return redirect('/login')->with('success', 'Account created.');
    }


    //public function verifyEmail($token)
    //{
        //if ($token != session('verify_token')) {
         //abort(403, 'Invalid token');
        //}

        //session()->forget('verify_token');

        //return redirect('/login')->with('success', 'Email Verified! You can now log in.');
    //}

    public function showLogin() {
        return view('auth.login');
    }

public function login(Request $req){
    $req->validate([
        'email'    => 'required|email',
        'password' => 'required|min:6'
    ]);

    $response = Http::withHeaders([
        'apikey'        => env('SUPABASE_KEY'),
        'Authorization' => 'Bearer ' . env('SUPABASE_KEY')
    ])->get(env('SUPABASE_URL') . '/rest/v1/users', [
        'email'  => 'eq.' . $req->email,
        'select' => '*'
    ]);

    $user = $response->json()[0] ?? null;

    if (!$user || !Hash::check($req->password, $user['password'])) {
        return back()->withErrors(['email' => 'Invalid email or password']);
    }

    // Store full user in session
    session([
        'alumni_user' => $user
    ]);

    return redirect('/dashboard');
}

   public function logout()
{
    session()->flush();
    return redirect('/login')->with('success', 'Logged out successfully!');
}

public function dashboard() 
{
    $user = session('alumni_data');
    if (!$user) {
        return redirect()->route('login')->with('error', 'Please login first');
    }

    // Fetch full alumni profile from Supabase
    $res = Http::withHeaders([
        'apikey' => env('SUPABASE_KEY'),
        'Authorization' => 'Bearer ' . env('SUPABASE_KEY'),
    ])->get(env('SUPABASE_URL') . '/rest/v1/alumni?email=eq.' . $user['email'] . '&select=*');

    $alumni = $res->json()[0] ?? null;

    if (!$alumni) {
        return redirect()->route('login')->with('error', 'Alumni profile not found!');
    }
     // Pass $alumni to view
    return view('dashboard', [
        'alumni' => $alumni
    ]);
}
}
