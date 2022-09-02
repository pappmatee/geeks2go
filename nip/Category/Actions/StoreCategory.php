<?php

namespace Nip\Category\Actions;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Validator;
use Nip\Category\Models\Category;

class StoreCategory
{
    public function __invoke(array $inputs): Collection|array
    {
        $validated = Validator::make($inputs, [
            'name' => ['required', 'string', 'max:255'],
            'parent_id' => ['nullable'],
        ])->validate();

        Category::create([
            'name' => $validated['name'],
            'parent_id' => $validated['parent_id'] ?? null,
        ]);

        return Category::all()->fresh();
    }
}
