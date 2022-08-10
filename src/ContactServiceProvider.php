<?php

namespace longggng\contact;

use Illuminate\Support\ServiceProvider;

class ConTactServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this-> loadRoutesFrom(__DIR__.'/routers/web.php');
        $this->loadViewsFrom(__DIR__.'/views','contact');
        $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');
        // return '123';
    }
}
