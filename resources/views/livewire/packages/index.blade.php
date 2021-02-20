<div class="shadow">

    <!-- Card Header -->
    <div class="px-4 py-5 bg-white border-b border-gray-200 rounded-t-lg sm:px-6">
        <div class="flex flex-wrap items-center justify-between -mt-2 -ml-4 sm:flex-nowrap">
            <div class="w-full mt-2 ml-4">
                <input class="w-full focus:outline-none focus:ring focus:ring-red-400" type="search" placeholder="Type to search packages... Please '/' to focus..." wire:model="search" role="searchbox" aria-roledescription="search" spellcheck="false">
            </div>
        </div>
    </div>
    
    <!-- Card Body - List of Packages -->
    <div class="overflow-hidden bg-white">
        
        <div>
            
            @foreach ($packages as $package)
                @include('packages.partials.single')
            @endforeach
        
        </div>

    </div>

    <!-- Pagination Links -->
    {{ $packages->links() }}
    
</div>
