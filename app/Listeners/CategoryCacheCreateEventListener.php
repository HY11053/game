<?php

namespace App\Listeners;

use App\Events\CategoryCacheCreateEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CategoryCacheCreateEventListener
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
     * @param  CategoryCacheCreateEvent  $event
     * @return void
     */
    public function handle(CategoryCacheCreateEvent $event)
    {
        //
    }
}
