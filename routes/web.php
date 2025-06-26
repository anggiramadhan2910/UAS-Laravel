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
    $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Anggi Ramadhan",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae commodi fugiat accusantium dolor libero alias soluta omnis perferendis, 
         aperiam dolorem nemo debitis nobis amet iusto animi dignissimos ducimus quasi illum pariatur mollitia saepe quos?
         Officia distinctio temporibus tempore a eius, consectetur voluptas aut earum vero minima possimus optio nesciunt sit repudiandae mollitia soluta! 
         Quas nesciunt, nobis eos, cum delectus aliquam harum obcaecati recusandae dolorum et ipsa soluta provident reprehenderit nihil!
         Voluptatum necessitatibus pariatur asperiores accusamus id sapiente eligendi autem reprehenderit."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Doddy Ferdiansyah",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque at consequuntur eveniet, necessitatibus molestiae nihil similique ut nemo perferendis qui? 
        Ea eveniet facere exercitationem impedit unde quos corporis tempora blanditiis repellat reprehenderit quibusdam optio dolorum officia nesciunt atque ipsa in recusandae, 
        ducimus eum nulla labore libero et magnam corrupti? Expedita sapiente quaerat libero. Animi enim praesentium beatae quo repellendus, 
        libero blanditiis voluptas? Ea explicabo quaerat quis perferendis repellat, 
        hic aut quia sapiente nisi. Impedit at animi fugit obcaecati ipsam, 
        nostrum harum velit expedita molestias facere, ullam quae sed vitae quo doloremque corrupti reprehenderit praesentium facilis. 
        Quod molestias aspernatur similique iusto."
    ],
];


    return view('posts',[
        "title"=>"Posts",
        "posts" => $blog_posts
    ]) ;
});


//halaman single post
Route::get('posts/{slug}', function($slug){
    return view('post', [
        "title" => "Single Post"
    ]);
});

