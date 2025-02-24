<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
  public static function all()
  {
    return [
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
  }

  public static function find($slug): array
  {

    // classic function 
    // return Arr::first(static::all(), function ($post) use ($slug) {
    //   return $post['slug'] == $slug;
    // });

    // arrow function php
    $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

    if (!$post) {
      abort(404);
    }
    return $post;
  }
}
