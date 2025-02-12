<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog/natus-vincere', function () {
    return view('natus-vincere');
});

Route::get('/blog/carl-johnson', function () {
    return view('carl-johnson');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Hehe']);
});

// 2 route baru 
// 1. blog => 
// 2 buah artikel judulnya bebas, judul dan isi 
// 2. contact
// email / sosmed
