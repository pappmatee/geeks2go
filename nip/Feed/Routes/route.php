<?php

use Illuminate\Support\Facades\Route;
use Nip\Feed\Controllers\FeedController;

Route::middleware(['web', 'auth'])
    ->group(function () {
        Route::get('/', [FeedController::class, 'index'])->name('feed');
        Route::get('/create-post', [FeedController::class, 'create'])->name('post.create');
    });
