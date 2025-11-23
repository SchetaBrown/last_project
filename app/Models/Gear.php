<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gear extends Model
{
    protected $fillable = [
        'title'
    ];

    public function carGeneration() {
        return $this->hasMany(CarGeneration::class);
    }
}
