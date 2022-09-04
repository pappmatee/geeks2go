<?php

namespace Nip\Feed\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Nip\Category\Models\Category;

class CreatePostForm extends Component
{
    protected $listeners = ['refresh-table' => '$refresh'];

    public function getPostsProperty()
    {
        return Category::query()
            ->with('parent', 'subCategories')
            ->get();
    }

    public function render(): Factory|View|Application
    {
        return view('feed.livewire.create-post-form');
    }
}
