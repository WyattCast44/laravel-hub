<li class="border-b">
    
    <div class="block">
        
        <div class="px-4 py-4 sm:px-6">
            
            <!-- Top row -->
            <div class="flex items-center justify-between">
                <div class="text-sm text-xl font-medium tracking-tight truncate">
                    <a href="{{ $package->route('show') }}">{{ $package->user->username }}</a>
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
                        <div class="flex items-center mb-2 mr-6 text-sm leading-5 text-gray-500">
                            {{ $package->description }}
                        </div>
                    @endif
                    <div
                        class="flex items-center text-sm leading-5 text-gray-500 sm:mt-0">
                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd" />
                        </svg>
                        Remote
                    </div>
                </div>
                
                <!-- Second Row Right -->
                <div class="flex items-center mt-2 text-sm leading-5 text-gray-500 sm:mt-0">
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                        fill="currentColor"
                        viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>
                        Closing on
                        <time datetime="2020-01-07">January 7, 2020</time>
                    </span>
                </div>
                
            </div>
            
        </div>

    </div>
    
</li>