<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'Oplayer',
        'Xplayer',
        'winner',
        'board',
        'turn',
        'leagelmove',
        'smallboard'
    ];
}
