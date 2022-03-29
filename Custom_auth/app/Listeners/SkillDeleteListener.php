<?php

namespace App\Listeners;

use App\Models\Skill;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Cache;

class SkillDeleteListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        // Cache::forget('skills');
        // Cache::rememberForever('skills', function(){
        //     return Skill::with('user')->get();
        // });
    }
}
