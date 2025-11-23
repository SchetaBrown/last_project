<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'title'
    ];

    public function carGeneration()
    {
        return $this->hasMany(CarGeneration::class);
    }

    public function driveLicense() {
        return $this->hasOne(DriveLicense::class);
    }

    public function passport() {
        return $this->hasOne(Passport::class);
    }
}
