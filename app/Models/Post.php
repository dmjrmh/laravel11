<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    use HasFactory;
    // used for change table name
    // protected $table ='blog_posts';

    // used for change pk
    // protected $primaryKey = 'blog_post_id';

    protected $fillable = ['title', 'author', 'slug', 'description'];
}
