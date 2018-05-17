<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Foundation\Auth\User;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Support\Facades\DB;

class AuthenticatedUser
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $seesion_input;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $OrganizationRole_id=$user->pluck('OrganizationRoleID')->toarray();
        $Results= DB::table('Access')
            ->select('SecurableID')
            ->where([
                ['OrganizationRoleID', '=', $OrganizationRole_id]
            ])
            ->get()->pluck('SecurableID')->toarray();
        $this->seesion_input = $Results;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
