<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Friend extends Model
{
    protected $fillable = [
        'user_id',
        'friend_id',
        'status',
        'created_at',
    ];
    function getusername()  {
        return User::find($this->user_id)->name;
        
    }
}
