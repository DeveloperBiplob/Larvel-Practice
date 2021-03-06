<?php

namespace App\Models;

use App\Events\ProductCreateEvent;
use App\Scopes\ViewScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'price', 'view'];


    // Global Scopes with Class file----//
    // protected static function booted()
    // {
    //     static::addGlobalScope(new ViewScope);
    // }

    // Anonymous Global Scopes ---//
    // protected static function booted()
    // {
    //     static::addGlobalScope('geterthenFifty', function (Builder $builder) {
    //         $builder->where('view', '>', 50);
    //     });
    // }

    // Local scopes
    // Remove scopes


    // Event ----------//
    // protected $dispatchesEvents = [
    //     'created' => ProductCreateEvent::class
    // ];


    // Event with Using Closures -----//
    protected static function booted()
    {
        static::created(function ($product) {
            info('Data Create Successfully by Closures');
        });
    }






}
