<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function scopeFilter(Builder $query, array $filters): void
    {
        // if (isset($filters['search']) ? $filters['search'] : false) {
        // }
        // $query->where('title', 'like', '%' . request('search') . '%');

        // $query->when($filters['search'] ?? false, fn($query, $search) => $query->where('title', 'like', '%' . request('search) . '%'));

        $query->when($filters['search'] ?? false, fn($query, $search) => $query->where('title', 'like', '%' . $search . '%'));

        $query->when($filters['category'] ?? false, fn($query, $category) => $query->whereHas('category', fn($query) => $query->where('slug', $category)));

        $query->when($filters['author'] ?? false, fn($query, $author) => $query->whereHas('user', fn($query) => $query->where('username', $author)));
    }
}
