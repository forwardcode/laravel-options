<?php

namespace Forwardcode\LaravelOptions;

use Forwardcode\LaravelOptions\Models\Option;
use Illuminate\Support\ServiceProvider;

class LaravelOptionsServiceProvider extends ServiceProvider
{
    protected $options;

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/Database/migrations');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->bind('option', Option::class);
    }
}
