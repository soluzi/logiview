<?php

namespace Soluzi\LogiView;

use Illuminate\Foundation\Http\Kernel;
use Illuminate\Support\ServiceProvider;
use Soluzi\LogiView\Http\Middleware\CaptureRequestMiddleware;

class LogiViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'logiview');

        $this->app->booted(function () {
            $kernel = $this->app->make(Kernel::class);
            $kernel->pushMiddleware(CaptureRequestMiddleware::class);
        });

        if (function_exists('config_path')) {
            $this->publishes([
                __DIR__.'/config/logiview.php' => config_path('logiview.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/logiview.php', 'logiview');
        $this->mergeConfigFrom(__DIR__.'/config/logging.php', 'logging');
    }
}
