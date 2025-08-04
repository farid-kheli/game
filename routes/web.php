<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Broadcast;
use App\Events\emaple;


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/game/{game}',[GameController::class, 'game'] )->name('game');
    Route::get('/', [MainController::class, 'home'])->name('home');
    Route::get('/game/{user1}/{user2}', [GameController::class, 'create'])->name('game.create');
    Route::post('/game/move', [GameController::class, 'move'])->name('game.move');
    Route::get('/chat/{User}', [ChatController::class, 'index'])->name('chat.page');
    Route::post('/chat/send', [ChatController::class, 'sendmessage'])->name('chat.send');
    Route::post('/friend/request', [ChatController::class, 'request'])->name('friends.request');
    Route::post('/friend/accept', [ChatController::class, 'accept'])->name('friends.accept');
    Route::post('/friend/decline', [ChatController::class, 'decline'])->name('friends.decline');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
