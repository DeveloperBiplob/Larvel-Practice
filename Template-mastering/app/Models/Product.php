<?php

namespace App\Models;

use App\Scopes\ViewScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'price', 'view'];

    protected static function booted()
    {
        static::addGlobalScope(new ViewScope);
    }
}
