<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'movie_image',
        'description',
        'price',
        'points_rental',
        'points_required',
        'stock',
        'category',
        'status_movie',
    ];

    protected $casts = [
        'category' => 'array',
    ];
}
