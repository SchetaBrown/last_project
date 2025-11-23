<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarCase extends Model
{
    protected $fillable = [
        'title'
    ];

    // Связи
    public function carGeneration() {
        return $this->hasMany(CarGeneration::class);
    }
}
