<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        $supabaseUrl = rtrim(env('SUPABASE_URL'), '/');
        $supabaseKey = env('SUPABASE_KEY');

        // Fetch user by email
        $response = Http::withHeaders([
            'apikey' => $supabaseKey,
            'Authorization' => 'Bearer ' . $supabaseKey,
        ])->get($supabaseUrl.'/rest/v1/users', [
            'select' => '*',
            'email' => 'eq.'.$request->email,
        ]);

        if ($response->failed() || empty($response->json())) {
            return back()->withErrors(['email' => 'Invalid login credentials'])->withInput();
        }

        $user = $response->json()[0];

        // Check password
        if (!Hash::check($request->password, $user['password'])) {
            return back()->withErrors(['password' => 'Incorrect email or password'])->withInput();
        }

        // Store user in session
        Session::put('user_id', $user['id']);
        Session::put('user_name', $user['username']);
        Session::put('user_email', $user['email']);
        Session::put('role', $user['role']);

        return redirect('/dashboard');
    }

    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }
}

