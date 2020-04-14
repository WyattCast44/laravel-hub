<li class="border-b">
    
    <div class="block">
        
        <div class="px-4 py-4 sm:px-6">
            
            <!-- Top row -->
            <div class="flex items-center justify-between">
                <div class="text-sm text-xl font-medium tracking-tight truncate">
                    <a href="{{ route('app.users.show', $package->user) }}">{{ $package->user->username }}</a>
                    <span class="text-gray-500">/</span>
                    <a href="{{ $package->route('show') }}">{{ $package->name }}</a>
                </div>
                <div class="flex flex-shrink-0 ml-2">

                    @if($package->official)
                        <span
                        class="inline-flex px-2 mr-1 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                            Official Package
                        </span>
                    @endif
                    
                    <span
                        class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                        {{ $package->language }}
                    </span>
                    
                </div>
            </div>
            
            <!-- Second Row -->
            <div class="mt-2 sm:flex sm:justify-between">
                
                <!-- Second Row Left -->
                <div class="sm:flex">
                    
                    @if($package->description)
                        <div class="flex items-center mr-6 text-sm leading-5 text-gray-500">
                            {{ $package->description }}
                        </div>
                    @endif
                   
                </div>
                
            </div>
            
        </div>

    </div>
    
</li>