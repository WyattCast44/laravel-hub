<div class="flex items-center mt-2 text-sm leading-5 text-gray-500 sm:mr-4">
    
    @if (auth()->check() && auth()->user()->hasFavorited($template))

        <button class="p-0 m-0 leading-none tracking-tighter text-transparent text-red-300 hover:no-underline" title="Unfavorite this template" wire:click="unfavorite" wire:loading.attr="disabled">
            @svg('heart', 'w-5 h-5 text-red-400 mr-1.5 fill-current hover:text-red-300')
        </button>
        
    @else
        
        <button class="p-0 m-0 leading-none tracking-tighter text-red-300 hover:no-underline" title="Favorite this template" wire:click="favorite" wire:loading.attr="disabled">
            @svg('heart', 'w-5 h-5 text-red-600 mr-1.5 hover:fill-current')
        </button>
        
    @endif
    
    {{ $template->favorites_count }} favorites
    
</div>