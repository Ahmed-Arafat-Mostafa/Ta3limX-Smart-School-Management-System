<?php

namespace App\Events;

use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Broadcasting\Channel;

class TestPusherEvent implements ShouldBroadcastNow
{
    public function broadcastOn()
    {
        return new Channel('test-channel');
    }
}