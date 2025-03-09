<?php

namespace Soluzi\LogiView;

use Illuminate\Support\ServiceProvider;

class LogiViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'logiview');

        $this->publishes([
            __DIR__.'/config/logiview.php' => config_path('logiview.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/logiview.php', 'logiview');
    }
}
