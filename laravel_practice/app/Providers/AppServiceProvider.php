<?php

namespace App\Providers;

use App\View\Components\AlertComponent;
use App\View\Composers\ViewNameComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        view()->share('globalName', 'Biplob Jabery');


        view()->composer(['Composers.index'], function($view){
            $view->with('name', 'Biplob');
        });

        view()->composer('Composers.index', ViewNameComposer::class);


        Blade::directive('customUpperCase', function ($expression) {
            return "<?php echo ucwords($expression); ?>";
        });


        // Componenets
        Blade::component('alert', AlertComponent::class);
    }
}
