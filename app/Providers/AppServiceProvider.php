<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

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

        $this->registerNewBlades();
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

    /**
     * Create new custom blade directives
     *
     * @return void
     */
    public function registerNewBlades()
    {
        // Employee
        Blade::directive('employee', function () {
            return "<?php if(auth()->check() && auth()->user()->user_type == 'CAN'): ?>";
        });
        Blade::directive('endemployee', function () {
            return "<?php endif; ?>";
        });

        // Employer
        Blade::directive('employer', function () {
            return "<?php if(auth()->check() && auth()->user()->user_type == 'EMP'): ?>";
        });
        Blade::directive('endemployer', function () {
            return "<?php endif; ?>";
        });
    }
}
