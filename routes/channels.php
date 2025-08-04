<?php

use Illuminate\Support\Facades\Broadcast;

use App\Models\User;
use App\Models\Game;
Broadcast::channel('game.{id}', function (User $user , $id) {
    $game = Game::find($id);
    if (!$game) {
        return false;
    }
    return (int) $user->id === (int) $game->Oplayer ||(int) $user->id === (int) $game->Xplayer;    
});
Broadcast::channel('onlineusers.{id}', function (User $user,$id) {
    return [
        'id' => $user->id,
        'name' => $user->name,
    ];
});
Broadcast::channel('messages.{roomId}', function () {
    return true;
});
Broadcast::channel('notification.{id}', function (User $user,$id) {
    return (int) $user->id === (int) $id;
});
