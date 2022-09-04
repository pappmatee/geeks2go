<aside class="sidenav navbar overflow-hidden navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html" target="_blank">
            <img src="{{ asset('assets/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Geeks 2 Go</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <x-sidebar.item
                href="{{ route('feed') }}"
                :active="request()->routeIs('feed')"
                icon="fas fa-stream"
                label="Feed"/>
            @if(request()->routeIs('feed'))
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Categories</h6>
                </li>
                @foreach($this->categories as $category)
                    @if($category->parent == null)
                        <x-sidebar.item
                            icon="fas fa-angle-down"
                            label="{{ $category->name }}"/>
                        @if($category->subCategories != null)
                            @foreach($category->subCategories as $subCategory)
                                <x-sidebar.item
                                    class="ps-5"
                                    icon="fas fa-angle-right"
                                    label="{{ $subCategory->name }}"/>
                            @endforeach
                        @endif
                    @endif
                @endforeach
            @endif
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account</h6>
            </li>
            <x-sidebar.item
                href=""
                :active="request()->routeIs('profile')"
                icon="fas fa-address-card"
                label="Profile"/>
            <x-sidebar.item
                href="{{ route('post.create') }}"
                :active="request()->routeIs('post.create')"
                icon="fas fa-keyboard"
                label="Publish"/>
        </ul>
    </div>
</aside>
