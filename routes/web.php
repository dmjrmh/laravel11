<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Post', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function ($slug) {
    // dd($id);

    $post = Post::find($slug);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/blog/natus-vincere', function () {
    return view('natus-vincere');
});

Route::get('/blog/carl-johnson', function () {
    return view('carl-johnson');
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'Hehe']);
});

// 2 route baru 
// 1. blog => 
// 2 buah artikel judulnya bebas, judul dan isi 
// 2. contact
// email / sosmed
