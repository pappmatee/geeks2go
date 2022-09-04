@props([
    'icon' => null,
    'active' => false,
    'label' => null,
    'can' => null
])


@php
    $navClass = $active ? 'nav-link active' : 'nav-link';
    $iconClass = $active ? $icon . ' active' : $icon;
@endphp

<li class="nav-item">
    <a {{ $attributes->merge(['class' => $navClass]) }}>
        <div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="{{ $iconClass }}"></i>
        </div>
        <span class="nav-link-text ms-1">{{ $label }}</span>
    </a>
</li>

