<?php

namespace Nip\Feed\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Livewire\Component;
use Nip\Category\Models\Category;
use Nip\Feed\Models\Article;
use Nip\Feed\Models\Feed;
use Nip\Feed\Models\Image;
use Nip\Feed\Models\Video;

class Posts extends Component
{
    protected $listeners = ['refresh-table' => '$refresh'];

    public function getPostsProperty()
    {
        return Feed::query()
            ->with('contentable')
            /*->whereHasMorph('contentable', [Article::class, Image::class, Video::class])*/
            ->get();
    }

    public function render(): Factory|View|Application
    {
        return view('feed.livewire.posts');
    }
}
