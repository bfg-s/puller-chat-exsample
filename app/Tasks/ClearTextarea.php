<?php

namespace App\Tasks;

use Bfg\PullerAlpine\AlpineTaskChannel;
use Bfg\Puller\Task;

class ClearTextarea extends Task implements AlpineTaskChannel
{
    protected ?string $name = "chat.message";

    public function handle () {
        return "";
    }
}
