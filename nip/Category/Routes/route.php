<?php

use Illuminate\Support\Facades\Route;
use Nip\Category\Controllers\CategoriesController;
use Nip\Feed\Controllers\FeedController;

Route::middleware(['web', 'role:admin'])
    ->group(function () {
        Route::get('/categories', CategoriesController::class)->name('categories');
    });
