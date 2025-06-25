<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home') ;
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Anggi Ramadhan",
        "email" => "AnggiRamadhan@gmail.com",
        "image" => "anggi.jpeg"
    ]);
});

Route::get('/blog', function () {
    return view('posts') ;
});