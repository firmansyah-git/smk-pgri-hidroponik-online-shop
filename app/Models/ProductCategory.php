<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class ProductCategory extends Model
{
    protected $fillable = [
        'name', 
        'slug',
        'description', 
        'image'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = Str::slug($category->name);
        });

        static::updating(function ($category) {
            $category->slug = Str::slug($category->name);
        });
    }

    public function product(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function scopeActive()
    {
        return $query->where('is_active', true);
    }
}
