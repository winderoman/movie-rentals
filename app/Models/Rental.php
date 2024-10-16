<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rental extends Model
{
    use HasFactory;
    protected $fillable = [
        'rental_date',
        'return_date',
        'total_price',
    ];

    public function details() : HasMany {
        return $this->hasMany(DetailRental::class);
    }

}
