<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPlans extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_id';

    function users()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
