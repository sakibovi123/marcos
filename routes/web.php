<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("login/", [App\Http\Controllers\auth\AuthController::class, "get_login_page"])
    ->name("login_page");


// facebook
Route::get('/auth/facebook', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('/auth/facebook/callback', function () {
    $facebookUser = Socialite::driver('facebook')->user();   

    $user = User::updateOrCreate([
        'facebook_id' => $facebookUser->id,
    ], [
        'name' => $facebookUser->name,
        'email' => $facebookUser->email,
        'token' => $facebookUser->token,
        'refresh_token' => $facebookUser->refreshToken,
    ]);
 
    Auth::login($user);
 
    return redirect('/');
});

// Google
Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
});
    
Route::get('/auth/google/callback', function () {
    $googleUser = Socialite::driver('google')->user();   

    $user = User::updateOrCreate([
        'facebook_id' => $googleUser->id,
    ], [
        'name' => $googleUser->name,
        'email' => $googleUser->email,
        'token' => $googleUser->token,
        'refresh_token' => $googleUser->refreshToken,
    ]);
 
    Auth::login($user);
 
    return redirect('/');
});

// twitter
Route::get('/auth/twitter', function () {
    return Socialite::driver('twitter')->redirect();
});
    
Route::get('/auth/twitter/callback', function () {
    $twitterUser = Socialite::driver('twitter')->user();   

    $user = User::updateOrCreate([
        'facebook_id' => $twitterUser->id,
    ], [
        'name' => $twitterUser->name,
        'email' => $twitterUser->email,
        'token' => $twitterUser->token,
        'refresh_token' => $twitterUser->refreshToken,
    ]);
 
    Auth::login($user);
 
    return redirect('/');
});

// review urls
Route::get("reviews/", [App\Http\Controllers\ReviewController::class, "index"])
    ->name("ReviewIndex");
Route::get("create-review/", [App\Http\Controllers\ReviewController::class, "create"])
    ->name("ReviewCreate");
Route::post("store-review/", [App\Http\Controllers\ReviewController::class, "store"])
    ->name("ReviewCreate");