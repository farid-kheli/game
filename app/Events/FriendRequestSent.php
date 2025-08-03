<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class FriendRequestSent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $receiverName;
    
    public function __construct(private $receiver,public $id)
    {
        $this->receiverName = $receiver->name;
        
    }

    
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('notification.'.$this->receiver->id),
        ];
    }
}
