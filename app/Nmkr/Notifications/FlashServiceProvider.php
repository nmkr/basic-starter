<?php namespace Nmkr\Notifications;

use Illuminate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider {

    /**
     * Create binding
     */
    public function register()
    {
        $this->app->bindShared('flash', function()
        {
            return $this->app->make('Nmkr\Notifications\FlashNotifier');
        });
    }

}