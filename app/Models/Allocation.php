<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Allocation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'market_id'];

    public function market():HasOne{
        return $this->hasOne(Jodi::class, 'id', 'market_id');
    }

    public function user():HasOne{
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
