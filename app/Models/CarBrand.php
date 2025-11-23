<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    protected $fillable = [
        'title'
    ];

    // Связи
    public function carModel() {
        return $this->hasMany(CarModel::class);
    }
}
