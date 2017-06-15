<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        // \View::composer('*', function ($view) {
        //     $guard = explode('_', collect(session('login_web'))->keys()->first())[0];
        //     $view->with('guard', 'web.' . $guard);
        // });

        // \View::share('company_profile', $company_profile);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
