<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Broadcast;
use App\Events\emaple;


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/game/{gameId}', function () {
        return view('dashboard');
    })->name('game');
    Route::get('/', [MainController::class, 'home'])->name('home');
    Route::get('/game/{user1}/{user2}', [GameController::class, 'create'])->name('game.create');
});
Route::get('/ws', function () {
    broadcast(new emaple());
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
