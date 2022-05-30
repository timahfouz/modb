<?php

namespace Segmatech\LaravelModb;

use Illuminate\Support\ServiceProvider;

class ModbServiceProvider extends ServiceProvider
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
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->loadViewsFrom(__DIR__.'/resources/views', 'Modb');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->mergeConfigFrom(__DIR__.'/config/modb.php', 'Modb');

        $this->publishes([
            __DIR__.'/config/modb.php' => config_path('modb.php'),
        ]);
    }
}
