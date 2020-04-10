<div class="flex items-center mt-2 text-sm leading-5 text-gray-500 sm:mr-4">
    
    @if (auth()->check())

        <button class="p-0 m-0 leading-none tracking-tighter text-red-300 hover:no-underline" title="Star this repo on GitHub" wire:click="handle" wire:loading.attr="disabled">
            @svg('star', 'w-5 h-5 text-yellow-400 mr-1.5 hover:fill-current')
        </button>
        
    @else
        
        <button class="p-0 m-0 leading-none tracking-tighter text-red-300 hover:no-underline" wire:loading.attr="disabled">
            @svg('star', 'w-5 h-5 text-yellow-400 mr-1.5 hover:fill-current')
        </button>
        
    @endif
    
    {{ number_format($package->stars_count) }} stars
    
</div>