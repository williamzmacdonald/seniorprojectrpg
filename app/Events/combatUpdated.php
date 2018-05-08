<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class combatUpdated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

	public $fighter;
    public $action;
    public $index;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($fighter, $action, $index)
    {
        $this->fighter = $fighter;
        $this->action = $action;
        $this->index = $index;
        $this->dontBroadcastToCurrentUser();
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
		return new Channel('combats');
        //return new PrivateChannel('channel-name');
    }
}
