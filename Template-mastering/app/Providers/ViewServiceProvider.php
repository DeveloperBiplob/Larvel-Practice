<?php

namespace App\Providers;

use App\Models\Profile;
use App\Models\Shop;
use App\Models\User;
use App\View\Composers\UserComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // View Share--//
        View::share('global_data', 'This Data is Availabol the hole application');
        View()->share('global_information', 'This information are avialable in hole application');
        View()->share('shops', Shop::get());



        // View Copmoser----//
        View()->composer(['Backend.index', 'many-to-many'], function($view){
            $view->with('shops', Shop::get());
        });

        // View Composer With Another Class--//
        View()->composer(['Backend.index'], UserComposer::class);
    }
}
