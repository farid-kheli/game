<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Game;

class GameController extends Controller
{
    public function create(User $user1,User $user2){
        $table = [$user1, $user2];
        $chosen = random_int(0, 1);
        $gameId = Game::create([
            'Oplayer' => $table[$chosen]->id,
            'Xplayer' =>$table[$chosen == 0? 1 : 0 ]->id,
            'turn' => 1,
        ])->id;
        return to_route('game',$gameId);
    }
}
