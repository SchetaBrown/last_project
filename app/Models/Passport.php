<?php

namespace App\Models;

use App\Models\Status;
use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    protected $fillable = [
        'image',
        'number',
        'series',
        'issue_date',
        'issuer',
        'status_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function status() {
        return $this->belongsTo(Status::class);
    }
}
