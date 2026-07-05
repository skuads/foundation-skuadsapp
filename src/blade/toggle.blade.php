@php
    if (! ($attributes->has('x-on:click') || $attributes->has('@click'))) {
        $attributes = $attributes->merge(['x-on:click' => 'on = !on']);
    }
@endphp

<button
    type="button"
    role="switch"
    x-bind:aria-checked="on ? 'true' : 'false'"
    x-bind:class="on
        ? 'bg-indigo-600 shadow-[inset_0_1px_2px_rgba(0,0,0,0.15),0_4px_12px_-2px_rgba(79,70,229,0.45)] dark:bg-cyan-400 dark:shadow-[inset_0_1px_2px_rgba(0,0,0,0.25),0_4px_14px_-2px_rgba(0,249,249,0.55)]'
        : 'bg-slate-400 shadow-[inset_0_1px_2px_rgba(15,23,42,0.2)] ring-1 ring-slate-500/30 dark:bg-slate-600 dark:shadow-[inset_0_1px_2px_rgba(0,0,0,0.4)] dark:ring-slate-400/20'"
    class="relative mt-0.5 inline-block h-7 w-12 shrink-0 rounded-full transition-colors duration-300 ease-out focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-600 dark:focus-visible:ring-cyan-400 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-60"
    {{ $attributes }}
>
    <span class="sr-only">Toggle setting</span>
    <span
        aria-hidden="true"
        x-bind:class="on
            ? 'left-6 shadow-[0_2px_6px_rgba(0,0,0,0.18)] ring-1 ring-indigo-500/10'
            : 'left-1 shadow-[0_1px_3px_rgba(0,0,0,0.2)] ring-1 ring-slate-300/40 dark:ring-slate-900/30'"
        class="absolute top-1/2 -translate-y-1/2 flex h-5 w-5 items-center justify-center rounded-full bg-white transition-[left] duration-300 ease-out"
    >
        <template x-if="on">
            <svg class="h-3 w-3 text-pink-500 dark:text-black" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M2.5 6.5l2.5 2.5 4.5-5" />
            </svg>
        </template>
    </span>
</button>
