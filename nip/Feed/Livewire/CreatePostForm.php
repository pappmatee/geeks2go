<?php

namespace Nip\Feed\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;
use Nip\Category\Models\Category;
use Nip\Feed\Actions\StorePost;

class CreatePostForm extends Component
{
    use WithFileUploads;

    public string $postType;
    public array $state = [];

    protected $listeners = ['refresh-table' => '$refresh'];

    public function mount()
    {
        $this->postType = 'article';
    }

    public function getCategoriesProperty()
    {
        return Category::query()
            ->with('parent', 'subCategories')
            ->get();
    }

    public function store(StorePost $storePost)
    {
        $storePost($this->postType, $this->state);
    }

    public function render(): Factory|View|Application
    {
        return view('feed.livewire.create-post-form');
    }
}
