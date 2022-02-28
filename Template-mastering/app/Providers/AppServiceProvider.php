<?php

namespace App\Providers;

use App\Models\Profile;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Support\Facades\View;
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
        // View::share('global_data', 'This Data is Availabol the hole application');
        // View()->share('global_information', 'This information are avialable in hole application');
        // View()->share('shops', Shop::get());
    }
}
