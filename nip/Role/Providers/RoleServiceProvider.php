<?php

namespace Nip\Profile\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class RoleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        /*Livewire::component('core-profile-card', ProfileCard::class);*/
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
