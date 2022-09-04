<?php

namespace Nip\Feed\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Nip\Feed\Livewire\CreatePostForm;
use Nip\Feed\Livewire\Posts;
use Nip\Feed\Livewire\Sidebar;

class FeedServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        Livewire::component('core-feed-sidebar', Sidebar::class);
        Livewire::component('core-feed-posts', Posts::class);
        Livewire::component('core-feed-create-post-form', CreatePostForm::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');
        $this->loadRoutesFrom(__DIR__.'/../Routes/route.php');
    }
}
