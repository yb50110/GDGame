<?php

namespace App\Providers;

use App\Observers\SessionUserObserver;
use App\SessionUser;
use Illuminate\Support\ServiceProvider;

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
        SessionUser::observe(SessionUserObserver::class);
    }
}
