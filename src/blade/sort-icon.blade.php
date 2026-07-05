@props([
    'sorted' => false,
    'direction' => 'asc',
])

<span>
    @if ($sorted == false)
        <span class="text-gray-500 w-5 h-5 inline-block">&nbsp;</span>
    @elseif ($direction === 'asc')
        <x-heroicon-o-chevron-up class="text-gray-500 w-5 h-5" />
    @else
        <x-heroicon-o-chevron-down class="text-gray-500 w-5 h-5" />
    @endif
</span>
