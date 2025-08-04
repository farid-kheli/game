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
    function getfriendname()  {
        $user = auth()->user();
        return $this->friend_id != $user->id ? User::find($this->friend_id)->name : User::find($this->user_id)->name;
    }
}
