<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title',
    ];

    public function driveLicenses()
    {
        return $this->belongsToMany(DriveLicense::class, 'drive_license_categories');
    }
}
