<?php

namespace Nip\Category\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Nip\Category\Livewire\CategoriesTable;
use Nip\Category\Livewire\CreateCategoryForm;

class CategoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        /*Livewire::component('core-profile-card', ProfileCard::class);*/
        Livewire::component('core-categories-create-category', CreateCategoryForm::class);
        Livewire::component('core-categories-categories-table', CategoriesTable::class);
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
