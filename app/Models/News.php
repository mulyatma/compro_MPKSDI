<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'title',
        'image',
        'content',
    ];

    protected static function booted()
    {
        static::saving(function ($news) {
            $news->slug = Str::slug($news->title);
        });
    }
}
