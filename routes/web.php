<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        "title"=>"Home"
    ]) ;
});

Route::get('/about', function () {
    return view('about', [
        "title"=>"About",
        "name" => "Anggi Ramadhan",
        "email" => "AnggiRamadhan@gmail.com",
        "image" => "anggi.jpeg"
    ]);
});

Route::get('/blog', function () {
    return view('posts',[
        "title"=>"Posts"
    ]) ;
});