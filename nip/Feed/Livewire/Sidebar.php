<?php

namespace Nip\Feed\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Nip\Category\Actions\StoreCategory;
use Nip\Category\Models\Category;

class Sidebar extends Component
{
    protected $listeners = ['refresh-table' => '$refresh'];

    public function getCategoriesProperty()
    {
        return Category::query()
            ->with('parent', 'subCategories')
            ->get();
    }

    public function render(): Factory|View|Application
    {
        return view('feed.livewire.sidebar');
    }
}
