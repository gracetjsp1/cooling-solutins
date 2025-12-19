<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\MainProduct;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*', function ($view) {
            $view->with('mainProducts', MainProduct::all());
        });
    }
}
