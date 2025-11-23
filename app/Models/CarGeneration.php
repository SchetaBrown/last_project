<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarGeneration extends Model
{
    protected $fillable = [
        'title',
        'power',
        'year',
        'seat_quantity',
        'cost_per_day',
        'status_id',
        'car_model_id',
        'gear_id',
        'fuel_id',
        'wheel_id',
        'transmission_id',
        'car_case_id',
    ];

    // Связи
    public function carImage() {
        return $this->hasMany(CarImage::class);
    }

    public function status() {
        return $this->belongsTo(Status::class);
    }
    public function carModel() {
        return $this->belongsTo(CarModel::class);
    }
    public function gear() {
        return $this->belongsTo(Gear::class);
    }
    public function fuel() {
        return $this->belongsTo(Fuel::class);
    }
    public function wheel() {
        return $this->belongsTo(Wheel::class);
    }
    public function transmission() {
        return $this->belongsTo(Transmission::class);
    }
    public function carCase() {
        return $this->belongsTo(CarCase::class);
    }
}
