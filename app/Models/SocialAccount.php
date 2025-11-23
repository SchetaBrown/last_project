<?php

namespace App\Models;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    protected $fillable = [
        'title'
    ];

    public function provider() {
        return $this->belongsTo(Provider::class);
    }
}
