<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Game;
use Illuminate\Support\Facades\Broadcast;
use App\Events\invite;

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
        broadcast(new invite($user1->only('id','name'),$user2,$gameId));
        return to_route('game',$gameId);
    }
}
