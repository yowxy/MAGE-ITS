<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('livewire.landing-page');
});

Route::get('/login', function () {
    return view('livewire.auth.login');
});

Route::get('/register', function() {
    return view('livewire.auth.register');
});
