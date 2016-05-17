<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('elements.admin.navbar', '\App\Composers\UserComposer');
    }

    public function register()
    {
    }
}