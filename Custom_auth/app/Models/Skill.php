<?php

namespace App\Models;

use App\Events\SkillDeleteEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    protected $dispatchesEvents = [
        'deleted' => SkillDeleteEvent::class,
    ];
}
