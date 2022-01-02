<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Chat
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Chat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat query()
 * @mixin \Eloquent
 */
class Chat extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'message'];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
