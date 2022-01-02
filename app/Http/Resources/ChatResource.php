<?php

namespace App\Http\Resources;

use App\Models\Chat;
use Bfg\Resource\BfgResource;
use Bfg\Resource\Traits\EloquentScopesTrait;
use Bfg\Resource\Traits\ModelScopesTrait;

/**
 * @mixin Chat
 */
class ChatResource extends BfgResource
{
    protected array $map = [
        'id',
        'name',
        'message'
    ];

    public function getNameField()
    {
        return $this->resource->user->name;
    }
}
