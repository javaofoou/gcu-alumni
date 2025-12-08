<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlumniProfileController;

use App\Http\Controllers\gcuPages;

use App\Http\Controllers\AlumniRegisterController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\AlumniController;


Route::get('/', function(){
    return view('alumni-directory');
});


Route::get('/branch', [gcuPages::class, 'branch'])->name('branch');
Route::get('/values', [gcuPages::class, 'values'])->name('values');
Route::get('/fedt', [gcuPages::class, 'fedt'])->name('fedt');
Route::get('/nec', [gcuPages::class, 'nec'])->name('nec');


Route::get('/hall-of-fame', [gcuPages::class, 'fame'])->name('fame');
Route::get('/events', [gcuPages::class, 'events'])->name('events');
Route::get('/gallery', [gcuPages::class, 'gallery'])->name('gallery');
Route::get('/projects', [gcuPages::class, 'projects'])->name('projects');
Route::get('/archives', [gcuPages::class, 'archives'])->name('archives');

Route::get('/alumni/register', [AlumniRegisterController::class, 'showAlumniForm']);
Route::post('/alumni/register', [AlumniRegisterController::class, 'storeAlumniSession'])->name('alumni.register.store');

Route::get('/create-account', [AuthController::class, 'showCreateAccount'])->name('auth.show.create.account');
Route::post('/create-account', [AuthController::class, 'createAccount'])->name('auth.create.account');

Route::get('/verify/{token}', [AuthController::class, 'verifyEmail'])->name('verify');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth.session');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/https-check', function (Illuminate\Http\Request $request) {
    return $request->header('X-Forwarded-Proto') === 'https'
        ? '✅ HTTPS via proxy'
        : '❌ Not HTTPS';
});


Route::get('/https-test', function () {
    return request()->isSecure() ? '✅ HTTPS detected' : '❌ Not HTTPS';
});


Route::get('/session-test', function () {
    // Store a test value in session
    session(['test_key' => '✅ Session works!']);

    // Retrieve it
    $value = session('test_key', '❌ Session not found');

    return "Session value: " . $value;
});



Route::get('/profile{id}/edit', [AlumniProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [AlumniProfileController::class, 'update'])->name('profile.update');

Route::get('/alumni/classes', [AlumniController::class, 'classes'])->name('alumni.classes');
Route::get('/alumni/class/{entry}', [AlumniController::class, 'viewClass'])->name('alumni.view.class');
Route::get('/alumni/profile/{id}', [AlumniController::class, 'profile'])->name('alumni.profile');
