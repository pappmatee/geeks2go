<div class="col-12 col-md-12">
    <div class="card mb-4">
        <div class="card-body p-3">
            <div class="row">
                <div class="col-xl-12 col-md-12 mb-xl-0 mb-4">
                    <div class="d-flex flex-column">
                        <ul class="list-group list-group-flush">
                            @foreach($this->categories as $category)
                                @if($category->parent == null)
                                    <li class="list-group-item fw-bold">{{ $category->name }}</li>
                                    @if($category->subCategories != null)
                                        @foreach($category->subCategories as $subCategory)
                                            <li class="list-group-item ps-4">{{ $subCategory->name }}</li>
                                        @endforeach
                                    @endif
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
