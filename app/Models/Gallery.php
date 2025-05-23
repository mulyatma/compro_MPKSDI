<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'galleries';

    protected $fillable = [
        'image',
        'title',
        'description',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(GalleriesCategory::class, 'category_id');
    }
}
