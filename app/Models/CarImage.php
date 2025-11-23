<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarImage extends Model
{
    protected $fillable = [
        'image',
        'car_generation_id',
    ];

    // Связи
    public function carGeneration() {
        return $this->belongsTo(CarGeneration::class);
    }
}
