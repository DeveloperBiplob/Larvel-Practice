<?php

namespace App\Providers;

use App\Events\AdminRegisterEvent;
use App\Events\SkillDeleteEvent;
use App\Listeners\SendAdminRegisterEventNotification;
use App\Listeners\SkillDeleteListener;
use App\Models\Skill;
use App\Observers\SkillObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        AdminRegisterEvent::class => [
            SendAdminRegisterEventNotification::class,
        ],

        SkillDeleteEvent::class => [
            SkillDeleteListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Skill::observe(SkillObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
