<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\Game;

class move implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message = ''; 
    public $status ;
    public $SBoard ;

    public function __construct(public User $user,public Game $Game,public $move)
    {
        
        $this->status = json_decode($Game->board, true);
        $leagelmove = $move[2];
        $this->status['S'.$move[1]][(int) $move[2]] = $user->id == $Game->Oplayer ? 'O' : 'X';
        $this->SBoard = json_decode($Game->smallboard,true);

        $s = [];

        for ($i = 1; $i <= 9; $i++) {
            $s[$i] = $this->status['S'.$move[1]][$i - 1];
        }

        if (($s[1] == $s[2] && $s[2] == $s[3] && $s[1] != '') ||
                ($s[1] == $s[4] && $s[4] == $s[7] && $s[1] != '') ||
                ($s[1] == $s[5] && $s[5] == $s[9] && $s[1] != '') ||
                ($s[2] == $s[5] && $s[5] == $s[8] && $s[2] != '') ||
                ($s[3] == $s[6] && $s[6] == $s[9] && $s[3] != '') ||
                ($s[3] == $s[5] && $s[5] == $s[7] && $s[3] != '') ||
                ($s[4] == $s[5] && $s[5] == $s[6] && $s[4] != '') ||
                ($s[7] == $s[8] && $s[8] == $s[9] && $s[7] != '')) {
                $this->SBoard['S'.$move[1]] = $user->id == $Game->Oplayer ? 'O' : 'X';
                $leagelmove = 9;
        }

        if($this->SBoard['S'.$move[2]] != null){
            $leagelmove = 9;
        }
        if (($this->SBoard['S0'] == $this->SBoard['S1'] && $this->SBoard['S1'] == $this->SBoard['S2'] && $this->SBoard['S0'] != null) ||
            ($this->SBoard['S0'] == $this->SBoard['S3'] && $this->SBoard['S3'] == $this->SBoard['S6'] && $this->SBoard['S0'] != null) ||
            ($this->SBoard['S0'] == $this->SBoard['S4'] && $this->SBoard['S4'] == $this->SBoard['S8'] && $this->SBoard['S0'] != null) ||
            ($this->SBoard['S1'] == $this->SBoard['S4'] && $this->SBoard['S4'] == $this->SBoard['S7'] && $this->SBoard['S1'] != null) ||
            ($this->SBoard['S2'] == $this->SBoard['S5'] && $this->SBoard['S5'] == $this->SBoard['S8'] && $this->SBoard['S2'] != null) ||
            ($this->SBoard['S2'] == $this->SBoard['S4'] && $this->SBoard['S4'] == $this->SBoard['S6'] && $this->SBoard['S2'] != null) ||
            ($this->SBoard['S3'] == $this->SBoard['S4'] && $this->SBoard['S4'] == $this->SBoard['S5'] && $this->SBoard['S3'] != null) ||
            ($this->SBoard['S6'] == $this->SBoard['S7'] && $this->SBoard['S7'] == $this->SBoard['S8'] && $this->SBoard['S6'] != null)) {
            $this->message = $user->name.' is the winner';
        }
        $Game->update([
            'board' => $this->status,
            'leagelmove' => $leagelmove,
            'turn' => !$Game->turn,
            'smallboard' => $this->SBoard
        ]); 
        
    }

    
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('game.'.$this->Game->id)
        ];
    }
}
