<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referer extends Model
{
    use HasFactory;

    public function referrals()
    {
        return $this->hasMany(Referral::class);
    }

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
