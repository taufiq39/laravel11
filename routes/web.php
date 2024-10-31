<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title'=> 'Home Page']);
});



Route::get('/contact', function () {
    return view('contact', ['title'=> 'Contact']);
});

Route::get('/posts', function () {
    return view('posts', ['title'=> 'Blog', 'posts' => [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author' => 'Arif Taufiq',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum, soluta amet. Dicta reiciendis repellat quaerat fugit magni? Maxime inventore sint nam, eligendi maiores id itaque doloremque accusamus libero harum accusantium!'
        ]
    

        ]]);
});