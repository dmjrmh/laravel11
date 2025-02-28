<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    //
    use HasFactory;
    // used for change table name
    // protected $table ='blog_posts';

    // used for change pk
    // protected $primaryKey = 'blog_post_id';

    protected $fillable = ['title', 'user_id', 'slug', 'description'];
    protected $with = ['user', 'category'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
