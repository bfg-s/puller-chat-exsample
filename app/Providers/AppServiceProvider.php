<?php

namespace App\Providers;

use App\Models\Chat;
use App\Tasks\ClearTextarea;
use App\Tasks\UpdateChatList;
use App\Tasks\UpdateOnlineCount;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Puller::onOnlineAndOffline(fn () => UpdateOnlineCount::flux());
        \Puller::onNewTab(fn () => UpdateOnlineCount::flow());
        \Puller::onNewTab(fn () => UpdateChatList::flow());

        UpdateChatList::modelWatchToFlux(Chat::class);
        ClearTextarea::modelWatchToFlow(Chat::class);
    }
}
