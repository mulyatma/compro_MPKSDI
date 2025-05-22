<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleriesCategory extends Model
{
    use HasFactory;

    protected $table = 'galleries_category';

    protected $fillable = [
        'name',
    ];
}
