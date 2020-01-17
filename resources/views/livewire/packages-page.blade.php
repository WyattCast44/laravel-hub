<div class="container mx-auto my-16 flex">

    <div class="w-2/12">
        
        <div class="mr-8 sticky" style="top:25px;">
            <a href="{{ route('app.packages.create') }}" class="mb-5 rounded bg-red-500 text-white font-semibold w-full py-3 block text-center hover:no-underline hover:shadow hover:bg-red-600">
                Submit Package
            </a>
    
            <div class="mr-8 block">
                
                <span class="text-gray-700">Filters</span>

                <div class="border-solid border-b mt-2 mb-5 pb-5">
                   
                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox text-red-500" checked>
                            <span class="ml-2">Official <span class="text-xs tracking-tighter">(13)</span></span>
                        </label>
                    </div>

                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox text-red-500" checked>
                            <span class="ml-2">Community <span class="text-xs tracking-tighter">(2,201)</span></span>
                        </label>
                    </div>
                    
                </div>

                <span class="text-gray-700 mt-5 block">Language</span>

                <div class="mt-2">
                   
                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox text-red-500">
                            <span class="ml-2">PHP</span>
                        </label>
                    </div>

                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox text-red-500">
                            <span class="ml-2">Javascript</span>
                        </label>
                    </div>
                    
                </div>

                <span class="text-gray-700 mt-5 block">Categories</span>

                <div class="mt-2">
                   
                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox text-red-500">
                            <span class="ml-2">Database</span>
                        </label>
                    </div>

                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox text-red-500">
                            <span class="ml-2">Models</span>
                        </label>
                    </div>
                    
                </div>

            </div>

        </div>

    </div>

    <div class="flex-1">

        <div>
            @foreach ($packages as $package)
                <div class="rounded  p-6 bg-white mb-3 shadow hover:shadow-md">
                    <h3 class="text-lg font-semibold">
                        <a href="{{ $package->route('show') }}">{{ $package->display_name }}</a>
                        <span class="text-xs text-gray-600 lowercase">{{ $package->vendor }}/{{ $package->name }}</span>
                    </h3>
                    <p class="my-3 text-gray-600">
                        {{ $package->description }}
                    </p>
                    <p class="text-sm text-gray-500 my-2">
                        Added by <a href="{{ route('app.users.show', $package->user) }}">{{ $package->user->username }}</a> {{ $package->created_at->diffForHumans() }}
                    </p>
                </div>
            @endforeach
        
            <div class="mt-5 flex items-center justify-start text-sm">
        
                {{ $packages->links() }}
        
            </div>
        </div>            

    </div>

</div>