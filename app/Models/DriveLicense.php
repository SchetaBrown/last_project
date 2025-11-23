<?php

namespace App\Models;

use App\Models\Status;
use Illuminate\Database\Eloquent\Model;

class DriveLicense extends Model
{
    protected $fillable = [
        'image',
        'number',
        'issue_date',
        'issuer',
        'issuer_code',
        'status_id',
        'user_id',
    ];

    // Связи
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'drive_license_categories');
    }
}
