<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Oplayer');
            $table->unsignedBigInteger('Xplayer');
            $table->unsignedBigInteger('winner')->nullable();
            $table->json('board')->default(json_encode([
                'S0' => [null,null,null,null,null,null,null,null,null],
                'S1' => [null,null,null,null,null,null,null,null,null],
                'S2' => [null,null,null,null,null,null,null,null,null],
                'S3' => [null,null,null,null,null,null,null,null,null],
                'S4' => [null,null,null,null,null,null,null,null,null],
                'S5' => [null,null,null,null,null,null,null,null,null],
                'S6' => [null,null,null,null,null,null,null,null,null],
                'S7' => [null,null,null,null,null,null,null,null,null],
                'S8' => [null,null,null,null,null,null,null,null,null],
            ]));
            $table->json('smallboard')->default(json_encode([
                'S0' => null,
                'S1' => null,
                'S2' => null,
                'S3' => null,
                'S4' => null,
                'S5' => null,
                'S6' => null,
                'S7' => null,
                'S8' => null,
            ]));

            $table->integer('leagelmove')->default(9);
            $table->boolean('turn')->default(0);
            $table->foreign('Oplayer')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('Xplayer')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('winner')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
