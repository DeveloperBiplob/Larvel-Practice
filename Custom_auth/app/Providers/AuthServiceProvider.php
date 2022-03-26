<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function(User $user){
            return $user->role === 'admin';
        });

        Gate::define('isEditor', function(User $user){
            return $user->role === 'editor';
        });

        Gate::define('isModerator', function(User $user){
            return $user->role === 'moderator';
        });

        Gate::define('updateCategory', function(User $user, Category $category){
            return $user->id === $category->user_id;
        });
    }
}
