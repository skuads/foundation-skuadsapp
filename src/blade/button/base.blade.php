@props(['size' => 'md', 'variant' => 'default', 'pill' => false])

@php
    $classes = match ($size) {
        'sm' => ($pill ? 'px-3' : 'px-2.5') . ' py-1.5 text-xs',
        'md' => ($pill ? 'px-3.5' : 'px-3') . ' py-2 text-sm',
        'lg' => ($pill ? 'px-4.5' : 'px-4') . ' py-2 text-base',
    };
    $variant = match ($variant) {
        'default'        => ' shadow-md bg-white/40 text-gray-700 hover:bg-white/60 focus:ring-indigo-500/30 border-transparent ',
        'primary'        => ' shadow-xs bg-indigo-600 text-white hover:bg-indigo-700 focus:ring-indigo-500 border-indigo-600 ',
        'secondary'      => ' shadow-xs bg-gray-200 text-gray-700 hover:bg-gray-300 focus:ring-gray-500 border-gray-300 ',
        'danger'         => ' shadow-xs bg-red-600 text-white hover:bg-red-700 focus:ring-red-500 border-red-600 ',
        'danger-outline' => ' shadow-xs bg-transparent text-red-600 hover:bg-red-50 focus:ring-red-500 border border-red-600 ',
        'pink'           => ' shadow-xs bg-pink-600 text-white hover:bg-pink-700 focus:ring-pink-500 border-pink-600 ',
        'ghost'          => ' bg-transparent text-gray-700 hover:bg-gray-100 focus:ring-gray-500 border border-transparent ',
    };
    $variant .= $pill ? ' rounded-full ' : ' rounded-md ';
@endphp

<button {{
    $attributes->merge([
        'type' => 'submit',
        'class' => implode(' ', [
            $classes,
            $variant,
            'relative inline-flex border items-center font-medium transition',
            'focus:outline-hidden focus:ring-2 disabled:opacity-75 ',
        ]),
    ])
}}>
    {{ $slot }}
</button>
