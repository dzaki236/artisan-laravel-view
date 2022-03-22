<?php

namespace Dzaki236\ArtisanLaravelView;

use Dzaki236\ArtisanLaravelView\commands\MakeViewCommand;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        if (env('APP_ENV') != 'production') {
            # code...
            $this->app->singleton('make:view {name}', function ($app) {
                return new MakeViewCommand;
            });
            
            $this->commands([
                'make:view {name}',
            ]);
        }
    }
}
