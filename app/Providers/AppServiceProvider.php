<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
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
        \App\Models\Area::creating( function($area){
            $prefix = $area->parent ? $area->parent->name.' ' : ' ';
            $area->slug = Str::slug($prefix . $area->name, '-');

        });
        \App\Models\Category::creating( function($category){
            $prefix = $category->parent ? $category->parent->name.' ' : ' ';
            $category->slug = Str::slug($prefix . $category->name, '-');

        });
    }
}
