<?php

use Illuminate\Support\Facades\Broadcast;

use App\Models\User;

Broadcast::channel('game.{id}', function ($id) {
    return true;
});
Broadcast::channel('onlineusers.{id}', function (User $user,$id) {
    return [
        'id' => $user->id,
        'name' => $user->name,
    ];
});
