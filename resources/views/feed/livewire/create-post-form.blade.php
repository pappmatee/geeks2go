<div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <!-- Navbar -->
    <x-navbar name="Posts"/>
    <!-- End Navbar -->
    <form wire:submit.prevent="store">
        <div class="container-fluid py-4">
            <div class="d-flex flex-column">
                <div class="col-12 col-md-12">
                    <div class="card mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 mb-xl-0 mb-4">
                                    <div class="d-flex flex-column mb-3">
                                        <label>Post type</label>
                                        <div class="mb-0">
                                            <select name="category" wire:model="postType" class="form-control">
                                                <option value="article">Article</option>
                                                <option value="image">Image</option>
                                                <option value="video">Video</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if($this->postType == 'article')
                    <div class="col-12 col-md-12">
                    <div class="card mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 mb-xl-0 mb-4">
                                    <div class="d-flex flex-column">
                                        <label>Title</label>
                                        <div class="mb-3">
                                            <input type="text" name="title" wire:model.defer="state.title" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <label>Body</label>
                                        <div class="mb-3">
                                            <textarea type="text" name="body" wire:model.defer="state.body" class="form-control" rows="8"></textarea>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column mb-3">
                                        <label>Category</label>
                                        <div class="mb-0">
                                            <select name="category" wire:model.defer="state.category" class="form-control">
                                                <option>Select a category...</option>
                                                @foreach($this->categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @if($this->postType == 'image')
                    <div class="col-12 col-md-12">
                        <div class="card mb-4">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 mb-xl-0 mb-4">
                                        <div class="d-flex flex-column">
                                            <label>Title</label>
                                            <div class="mb-3">
                                                <input type="text" name="title" wire:model.defer="state.title" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <label>Image</label>
                                            <div class="mb-3">
                                                <input type="file" name="image" wire:model.defer="state.image" class="form-control" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column mb-3">
                                            <label>Category</label>
                                            <div class="mb-0">
                                                <select name="category" wire:model.defer="state.category" class="form-control">
                                                    <option selected disabled>Select a category...</option>
                                                    @foreach($this->categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if($this->postType == 'video')
                    <div class="col-12 col-md-12">
                        <div class="card mb-4">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 mb-xl-0 mb-4">
                                        <div class="d-flex flex-column">
                                            <label>Title</label>
                                            <div class="mb-3">
                                                <input type="text" name="title" wire:model.defer="state.title" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <label>Video</label>
                                            <div class="mb-3">
                                                <input type="file" name="video" wire:model.defer="state.video" class="form-control" accept="video/*">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column mb-3">
                                            <label>Category</label>
                                            <div class="mb-0">
                                                <select name="category" wire:model.defer="state.category" class="form-control">
                                                    <option selected disabled>Select a category...</option>
                                                    @foreach($this->categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-sm mb-0">Publish</button>
                </div>
            </div>
        </div>
    </form>
