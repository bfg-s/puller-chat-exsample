<?php

namespace App\Listeners\SendMessage;

use App\Events\WebMessage\SendMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendHandle
{
    public function handle(SendMessage $event)
    {
        \App\Models\Chat::create($event->request->transform());
    }
}
