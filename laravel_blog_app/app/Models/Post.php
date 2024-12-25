<?php

// app/Models/Post.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'published_at'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Обработчик события, например, для автоматической публикации
    protected static function booted()
    {
        static::created(function ($post) {
            // добавим логику для автоматического публикации по времени
        });
    }
}