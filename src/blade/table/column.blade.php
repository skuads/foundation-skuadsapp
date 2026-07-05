@props([
    'sortable' => false,
    'sorted' => false,
    'direction' => 'asc',
    'tooltip' => null,
])

@php
    $baseClass = 'px-1.5 py-3 first:pl-4 last:pr-4';
    if ($sortable) {
        $baseClass .= ' cursor-pointer';
    }
@endphp

<th scope="col" {{ $attributes->merge(['class' => $baseClass]) }}>
    <span class="inline-flex items-center space-x-2">
        <span>{{ $slot }}</span>
        @if ($sortable)
            <x-sort-icon :sorted="$sorted" :direction="$direction" />
        @endif
        @if ($tooltip)
            <span class="relative inline-flex" x-data="{ showTooltip: false }">
                <button type="button" x-on:mouseenter="showTooltip = true" x-on:mouseleave="showTooltip = false"
                    class="text-gray-400 hover:text-gray-600 dark:text-slate-300 dark:hover:text-slate-300">
                    <x-heroicon-o-information-circle class="w-4 h-4" />
                </button>
                <span x-show="showTooltip" x-transition
                    class="absolute z-20 right-0 mt-5 w-64 p-2 text-xs font-normal normal-case text-left text-gray-700 bg-white rounded-lg border border-slate-200 shadow-lg dark:text-slate-200 dark:bg-slate-800 dark:border-slate-700">
                    {{ $tooltip }}
                </span>
            </span>
        @endif
    </span>
</th>
