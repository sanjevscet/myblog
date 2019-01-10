<?php

namespace Myblog\Blog;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->publishes([
            __DIR__.'/resources/views' => base_path('resources/views/myblog'),
        ]);

        $this->loadViewsFrom(__DIR__.'/resources/views', 'blog');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations/', 'blog');
    }

    public function register()
    {
    }
}
