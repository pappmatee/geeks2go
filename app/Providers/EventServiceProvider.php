<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Nip\Feed\Models\Article;
use Nip\Feed\Models\Image;
use Nip\Feed\Models\Video;
use Nip\Feed\Observers\ArticleObserver;
use Nip\Feed\Observers\ImageObserver;
use Nip\Feed\Observers\VideoObserver;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Article::observe(ArticleObserver::class);
        Image::observe(ImageObserver::class);
        Video::observe(VideoObserver::class);
    }
}
