<?php

use Illuminate\Support\Facades\Route;
use Nip\Feed\Controllers\FeedController;

Route::middleware(['web', 'auth'])
    ->group(function () {
        Route::get('feed', [FeedController::class])->name('feed');
    });
