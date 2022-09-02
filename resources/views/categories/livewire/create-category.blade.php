<div class="col-12 col-md-12">
    <div class="card mb-4">
        <div class="card-body p-3">
            <div class="row">
                <div class="col-xl-12 col-md-12 mb-xl-0 mb-4">
                    <form wire:submit.prevent="store">
                        <div class="d-flex flex-column">
                            <label>Name</label>
                            <div class="mb-3">
                                <input type="text" name="name" wire:model="state.name" class="form-control" required>
                            </div>
                        </div>
                        <div class="d-flex flex-column mb-3">
                            <label>Parent category</label>
                            <div class="mb-3">
                                <select name="parent" wire:model="state.parent_id" class="form-control">
                                    <option>Select a category...</option>
                                    @foreach($this->categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm mb-0">Add category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

