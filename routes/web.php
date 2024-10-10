<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\DiscordController;
use Illuminate\Support\Facades\Auth; 

Route::get('auth/discord', [DiscordController::class, 'redirectToProvider']);
Route::get('auth/discord/callback', [DiscordController::class, 'handleProviderCallback']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home'); 
})->name('home');

Route::get('logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
