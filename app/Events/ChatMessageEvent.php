<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ChatMessageEvent implements ShouldBroadcast
{
    public $from;
    public $to;
    public $message;

    public function __construct($from,$to,$message)
    {
        $this->from = $from;
        $this->to = $to;
        $this->message = $message;
    }

    public function broadcastOn()
    {
        return new Channel('user-'.$this->to);
    }

    public function broadcastAs()
    {
        return 'message';
    }
}