<div>
    <button wire:click="getExplanation" wire:loading.attr="disabled"
        style="--c-400:var(--info-400);--c-500:var(--info-500);--c-600:var(--info-600); margin-top:10px; width:100px; height:40px"
        class="fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-color-custom fi-btn-color-primary fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 focus-visible:ring-custom-500/50 dark:bg-custom-500 dark:hover:bg-custom-400 dark:focus-visible:ring-custom-400/50 fi-ac-action fi-ac-btn-action"
    >
        <x-filament::loading-indicator wire:loading class="h-5
        w-5" />
    @if ($loading)
        Loading...
    @else
        Explain
    @endif
    </button>

    @if ($explanation)
        <p class="mt-2 text-sm text-gray-700 italic">
            {{ $explanation }}
        </p>
    @endif
</div>
