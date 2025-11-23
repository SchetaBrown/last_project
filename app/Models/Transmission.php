<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transmission extends Model
{
    protected $fillable = [
        'title'
    ];

    public function carGeneration() {
        return $this->hasMany(CarGeneration::class);
    }
}
