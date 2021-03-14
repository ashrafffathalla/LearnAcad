<?php

namespace App\Providers;

use App\Cat;
use Illuminate\Support\ServiceProvider;

class viewserviceprovider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('user.includes.header', function($view)
        {

        $view->with('cats',Cat::select('id', 'name')->get());
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
