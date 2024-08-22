<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailRental extends Model
{
    use HasFactory;

    protected $fillable = [
        'rental_id',
        'movie_id',
        'quantity',
        'unit_price',
    ];

    
}
