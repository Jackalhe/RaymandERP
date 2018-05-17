<?php

namespace App\Listeners;

use App\Events\AuthenticatedUser;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class GetSecurableItem
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  AuthenticatedUser  $event
     * @return void
     */
    public function handle(AuthenticatedUser $event)
    {
        session()->put('SecurableItem',$event->seesion_input);
    }
}
