<div class="shadow">

    <!-- Card Header -->
    <div class="px-4 py-5 bg-white border-b border-gray-200 rounded-t-lg sm:px-6">
        <div class="flex flex-wrap items-center justify-between -mt-2 -ml-4 sm:flex-no-wrap">
            <div class="w-full mt-2 ml-4">
                <input class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Type to search packages... Please '/' to focus..." wire:model="search" role="searchbox" aria-roledescription="search" autocomplete="none" spellcheck="false" autofocus>
            </div>
        </div>
    </div>
        
    <div class="overflow-hidden bg-white">
        <ul>
            
            @foreach ($packages as $package)
                @include('packages.partials.single')
            @endforeach
            
        </ul>

       
    </div>

    {{ $packages->links() }}
    
</div>
