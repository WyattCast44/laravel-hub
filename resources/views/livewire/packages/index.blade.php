<div>

    <!-- Filters and search -->
    <div class="flex items-center mb-8">

        <input type="search" wire:model="search" class="w-full p-3 border border-gray-400 rounded-none rounded shadow" placeholder="Search packages..." >
                
    </div> 
        
    <div class="overflow-hidden bg-white shadow sm:rounded-md">
        <ul>
            
            @foreach ($packages as $package)
                @include('packages.partials.single')
            @endforeach
            
        </ul>

       
    </div>

    {{ $packages->links('partials.pagination') }}
    
</div>
