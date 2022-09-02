
<x-app-layout>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <!-- Navbar -->
    <x-navbar name="Categories"/>
    <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="d-flex flex-column gap-2">
                <livewire:core-categories-create-category/>
                <livewire:core-categories-categories-table/>
            </div>
        </div>
    </div>
</x-app-layout>
