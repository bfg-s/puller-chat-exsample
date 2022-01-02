<?php

namespace App\Tasks;

use Bfg\PullerAlpine\AlpineTaskChannel;
use Bfg\Puller\Task;

class UpdateOnlineCount extends Task implements AlpineTaskChannel
{
    protected ?string $name = "chat.online";

    public function handle () {
        return \Puller::online();
    }
}
