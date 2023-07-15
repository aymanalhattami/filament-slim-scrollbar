<?php

namespace Aymanalhattami\FilamentSlimScrollbar;

use Illuminate\Support\ServiceProvider;

class FilamentSlimScrollbarServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'filament-slim-scrollbar');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'filament-slim-scrollbar');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('filament-slim-scrollbar.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/filament-slim-scrollbar'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/filament-slim-scrollbar'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/filament-slim-scrollbar'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'filament-slim-scrollbar');

        // Register the main class to use with the facade
        $this->app->singleton('filament-slim-scrollbar', function () {
            return new FilamentSlimScrollbar;
        });
    }
}
