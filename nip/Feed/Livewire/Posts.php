<?php

namespace Nip\Feed\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Nip\Category\Models\Category;
use Nip\Feed\Models\Feed;

class Posts extends Component
{
    protected $listeners = ['refresh-table' => '$refresh'];

    public function getPostsProperty()
    {
        return Feed::query()
            ->get();
    }

    public function render(): Factory|View|Application
    {
        return view('feed.livewire.posts');
    }
}
