<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('livewire.landing-page');
});
// Route::get('/login', function () {
//     return view('livewire.auth.login');
// })->name('login');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');


