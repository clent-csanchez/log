<?php

namespace Clent\Log;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Authenticated;
use Clent\Log\Listeners\LogUserLoggedIn;

class GlobalLogServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/log.php' => config_path('log.php'),
        ]);

        Event::listen(
            Authenticated::class,
            LogUserLoggedIn::class,
        );
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}