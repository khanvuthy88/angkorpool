<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Zoho\Zoho;

class ZohoServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('zoho.recruit', function($app){
            return new Zoho(
                $this->app->config['zoho.recruit.auth_token'],
                $this->app->config['zoho.recruit.format'],
                $this->app->config['zoho.recruit.base_uri']
            );
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return 'zoho.recruit';
    }
}
