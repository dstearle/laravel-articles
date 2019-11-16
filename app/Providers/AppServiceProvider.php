<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

// For "Resource::withoutWrapping();" in boot
// use Illuminate\Http\Resources\Json\Resource; 

class AppServiceProvider extends ServiceProvider
{
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
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // To prevent error
        Schema::defaultStringLength(191);
        // Removes "data object" wrap when viewing in api
        // Resource::withoutWrapping();
    }
}
