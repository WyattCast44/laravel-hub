<div class="container flex flex-col justify-center px-4 my-6 md:my-16 md:mx-auto md:px-0 md:flex-row">

    <div class="w-full mb-6 md:w-2/12 md:mb-0">
        
        <div class="sticky md:mr-8" style="top:25px;">

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
                    
                </div>

                <span class="block mt-5 text-gray-700">Language</span>

                <div class="mt-2">

                    @foreach ($languages as $language)
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="text-red-500 form-checkbox">
                                <span class="ml-2">{{ $language }}</span>
                            </label>
                        </div>
                    @endforeach
                   
{{-- 
                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="text-red-500 form-checkbox">
                            <span class="ml-2">Javascript</span>
                        </label>
                    </div>
                     --}}
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
                    
                    @include('packages.partials.single')
        
                @endforeach
                
            </ul>
        </div>
    
        <div class="flex items-center justify-start mt-5 text-sm">
    
            {{ $packages->links() }}
    
        </div>       

    </div>

</div>