<?php

namespace Nip\Category\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Nip\Category\Actions\StoreCategory;
use Nip\Category\Models\Category;

class CreateCategoryForm extends Component
{
    public array $state = [];

    public function getCategoriesProperty()
    {
        return Category::all();
    }

    public function store(StoreCategory $storeCategory)
    {
        $storeCategory($this->state);

        $this->state = [];

        $this->emitTo('core-categories-categories-table', 'refresh-table');
    }

    public function render(): Factory|View|Application
    {
        return view('categories.livewire.create-category');
    }
}
