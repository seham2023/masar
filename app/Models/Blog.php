<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'image_path'
    ];

    protected function ImagePath(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => 'images/blog/'.$value
        );
    }
}
