<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'posts_categories');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
