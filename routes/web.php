<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Post', 'posts' => [
        [
            'id' => 1,
            'slug' => 'article-1',
            'title' => 'Article 1',
            'author' => 'Kylian Paul',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni perferendis laborum
            fugiat temporibus ut.
            Nostrum dolores eos similique laudantium consequatur! Impedit officia quia rerum molestias labore rem
            voluptas vitae nulla!'
        ],
        [
            'id' => 2,
            'slug' => 'article-2',
            'title' => 'Article 2',
            'author' => 'Kylian Paul',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam natus consequuntur
            nemo alias totam optio? Doloremque fuga qui modi non aliquam dignissimos nam rem architecto soluta veniam
            ipsa deleniti maxime fugiat animi veritatis, quae aspernatur necessitatibus earum suscipit? Libero,
            doloribus!'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    // dd($id);
    $posts = [
        [
            'id' => 1,
            'slug' => 'article-1',
            'title' => 'Article 1',
            'author' => 'Kylian Paul',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni perferendis laborum
            fugiat temporibus ut.
            Nostrum dolores eos similique laudantium consequatur! Impedit officia quia rerum molestias labore rem
            voluptas vitae nulla!'
        ],
        [
            'id' => 2,
            'slug' => 'article-2',
            'title' => 'Article 2',
            'author' => 'Kylian Paul',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam natus consequuntur
            nemo alias totam optio? Doloremque fuga qui modi non aliquam dignissimos nam rem architecto soluta veniam
            ipsa deleniti maxime fugiat animi veritatis, quae aspernatur necessitatibus earum suscipit? Libero,
            doloribus!'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

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
