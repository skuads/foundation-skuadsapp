{{--
    Toaster container. Requires an Alpine store called `toaster` with a
    `toasts` array of shape { show: boolean, type: 'success'|'error', message: string }.
--}}
<div id="toaster-container" x-data aria-live="assertive" class="fixed z-50 flex inset-0 items-end pointer-events-none px-4 py-6 sm:p-6">
    <div class="flex flex-col items-center space-y-4 w-full">
        <template x-for="toast in $store.toaster.toasts">
            <div
                x-show="toast.show"
                x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90"
                class="max-w-sm w-full shadow-lg rounded-lg pointer-events-auto ring-1 overflow-hidden"
                x-bind:class="{
                    'bg-red-500 ring-red-600/5': toast.type === 'error',
                    'bg-indigo-600 ring-indigo-600/10 dark:bg-cyan-400 dark:ring-cyan-400/30': toast.type === 'success'
                }"
            >
                <div class="p-4">
                    <div class="flex items-center">
                        <div class="w-0 flex-1 flex justify-between">
                            <p class="w-0 flex-1 text-sm font-medium"
                                x-bind:class="toast.type === 'success' ? 'text-white dark:text-black' : 'text-white'"
                                x-html="toast.message">
                            </p>
                        </div>
                        <div class="ml-4 shrink-0 flex">
                            <button
                                x-on:click="toast.show = false"
                                class="bg-transparent rounded-md inline-flex focus:outline-hidden focus:ring-2 focus:ring-offset-2"
                                x-bind:class="{
                                    'text-white focus:ring-red-800 hover:text-red-100': toast.type === 'error',
                                    'text-white dark:text-black focus:ring-indigo-500 hover:opacity-80': toast.type === 'success'
                                }"
                            >
                                <span class="sr-only">Close</span>
                                <x-heroicon-s-x class="h-5 w-5" />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>
</div>
