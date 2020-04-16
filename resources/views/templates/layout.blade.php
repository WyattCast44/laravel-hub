@extends('layouts.app')

@section('content')

<div class="container flex mx-auto my-16">

    <div class="w-2/12">
        
        <div class="sticky mr-8" style="top:25px;">

            <a href="{{ route('app.templates.create') }}" class="block w-full py-3 mb-5 font-semibold text-center text-white bg-red-500 rounded hover:no-underline hover:shadow hover:bg-red-600" data-turbolinks="ssss">
                Create Template
            </a>
    
            <div class="block mr-8">
                
                <span class="text-gray-700">Filters</span>

                <div class="pb-5 mt-2 mb-5 border-b border-solid">
                   
                    <div>
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
                    </div>
                    
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

        <!-- Filters and search -->
        {{-- <div class="flex items-end justify-between w-full mb-8">

            <div>
                
                Filters

            </div>

            <div class="relative flex items-center focus-within:text-red-500">

                <span class="relative mr-1" style="top:1px">
                    @svg('search', 'h-4 stroke-current')
                </span>
                <input type="text" placeholder="Search packages..." class="px-1 py-2 text-gray-800 bg-gray-100 border-b border-gray-600 border-solid focus-within:border-red-500 focus:border-red-500 focus-within:outline-none focus:outline-none">

            </div>

        </div> --}}
        
        <div>

           @yield('page')

        </div>

    </div>

</div>

@endsection
