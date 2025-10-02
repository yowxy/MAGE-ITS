<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('livewire.landing-page');
});

Route::get('/login', function () {
    return view('livewire.auth.login');
<<<<<<< HEAD
=======
});

Route::get('/register', function() {
    return view('livewire.auth.register');
>>>>>>> 07c098361707684c389b186b9dfdbec36e75fc5d
});