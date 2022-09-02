<?php

namespace Nip\Category\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Nip\Category\Actions\StoreCategory;
use Nip\Category\Models\Category;

class CategoriesTable extends Component
{
    protected $listeners = ['refresh-table' => '$refresh'];

    public function getCategoriesProperty()
    {
        return Category::all();
    }

    public function render(): Factory|View|Application
    {
        return view('categories.livewire.categories-table');
    }
}
