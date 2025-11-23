<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $fillable = [
        'title'
    ];

    // Связи
    public function carGeneration() {
        return $this->hasMany(CarGeneration::class);
    }
}
