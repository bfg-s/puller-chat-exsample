<?php

namespace App\Tasks;

use App\Http\Resources\ChatResource;
use App\Models\Chat;
use Bfg\PullerAlpine\AlpineTaskChannel;
use Bfg\Puller\Task;

class UpdateChatList extends Task implements AlpineTaskChannel
{
    protected ?string $name = "chat.list";

    public function handle () {
        return ChatResource::create(
            Chat::orderBy('id', 'desc')->with('user')->paginate()
        );
    }
}
