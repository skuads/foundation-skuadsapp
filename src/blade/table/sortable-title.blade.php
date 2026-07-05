@props(['parameter', 'currentSort', 'currentDirection'])

@php
    $itemClass = 'invisible ml-2 flex-none rounded-sm text-gray-400 group-hover:visible group-focus:visible dark:text-slate-300';
    $url = request()->fullUrlWithQuery(['sort' => $parameter, 'direction' => $currentSort == $parameter ? ($currentDirection == 'asc' ? 'desc' : 'asc') : 'asc']);
    if ($currentSort === $parameter) {
        $itemClass = 'ml-2 flex-none rounded-sm bg-gray-200 text-gray-900 group-hover:bg-gray-300 dark:bg-slate-600 dark:text-slate-100 dark:group-hover:bg-slate-500';
    }
@endphp

<a href="{{ $url }}" class="group inline-flex items-center">
    {{ $slot }}
    <span class="{{ $itemClass }}">
        @if ($currentDirection === 'asc')
            <x-heroicon-s-chevron-down class="h-5 w-5" />
        @else
            <x-heroicon-s-chevron-up class="h-5 w-5" />
        @endif
    </span>
</a>
