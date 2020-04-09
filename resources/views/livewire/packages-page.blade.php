<div class="container flex mx-auto my-16">

    <div class="w-2/12">
        
        <div class="sticky mr-8" style="top:25px;">
            <a href="{{ route('app.packages.create') }}" class="block w-full py-3 mb-5 font-semibold text-center text-white bg-red-500 rounded hover:no-underline hover:shadow hover:bg-red-600">
                Submit Package
            </a>
    
            <div class="block mr-8">
                
                <span class="text-gray-700">Filters</span>

                <div class="pb-5 mt-2 mb-5 border-b border-solid">
                   
                    @foreach ($filters as $filter)
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="text-red-500 form-checkbox" checked>
                                <span class="ml-2">{{ $filter }} <span class="text-xs tracking-tighter">(13)</span></span>
                            </label>
                        </div>
                    @endforeach

                    {{-- <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="text-red-500 form-checkbox" checked>
                            <span class="ml-2">Official <span class="text-xs tracking-tighter">(13)</span></span>
                        </label>
                    </div>

                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="text-red-500 form-checkbox" checked>
                            <span class="ml-2">Community <span class="text-xs tracking-tighter">(2,201)</span></span>
                        </label>
                    </div> --}}
                    
                </div>

                <span class="block mt-5 text-gray-700">Language</span>

                <div class="mt-2">
                   
                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="text-red-500 form-checkbox">
                            <span class="ml-2">PHP</span>
                        </label>
                    </div>

                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="text-red-500 form-checkbox">
                            <span class="ml-2">Javascript</span>
                        </label>
                    </div>
                    
                </div>

                <span class="block mt-5 text-gray-700">Categories</span>

                <div class="mt-2">
                   
                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="text-red-500 form-checkbox">
                            <span class="ml-2">Database</span>
                        </label>
                    </div>

                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="text-red-500 form-checkbox">
                            <span class="ml-2">Models</span>
                        </label>
                    </div>
                    
                </div>

            </div>

        </div>

    </div>

    <div class="flex-1">

        <div class="overflow-hidden bg-white shadow sm:rounded-md">
            <ul>
                
                @foreach ($packages as $package)
                    
                    <li class="border-b">
                        <a href="{{ $package->route('show') }}"
                        class="block transition duration-150 ease-in-out hover:bg-gray-200 focus:outline-none focus:bg-gray-50 hover:no-underline">
                            <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm text-xl font-medium leading-5 text-indigo-600 truncate">
                                        {{ $package->name }}
                                    </div>
                                    <div class="flex flex-shrink-0 ml-2">
                                        <span
                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                            Full-time
                                        </span>
                                    </div>
                                </div>
                                <div class="mt-2 sm:flex sm:justify-between">
                                    <div class="sm:flex">
                                        <div class="flex items-center mr-6 text-sm leading-5 text-gray-500">
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                            </svg>
                                            Engineering
                                        </div>
                                        <div
                                            class="flex items-center mt-2 text-sm leading-5 text-gray-500 sm:mt-0">
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
                        </a>
                    </li>
        
                @endforeach
                
            </ul>
        </div>
    
        <div class="flex items-center justify-start mt-5 text-sm">
    
            {{ $packages->links() }}
    
        </div>       

    </div>

</div>