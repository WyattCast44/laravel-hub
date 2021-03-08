@extends('layouts.app')

@section('content')

<div class="container flex flex-col px-4 mx-auto my-6 md:px-0 md:my-16 md:flex-row">

    <div class="w-full md:w-3/12">
        
        <div class="sticky lg:mr-8" style="top:25px;">
            <a 
                title="Submit a new package"
                href="{{ route('app.packages.create') }}" 
                class="block w-full py-3 mb-5 font-semibold text-center text-white bg-red-500 rounded hover:no-underline hover:shadow hover:bg-red-600 focus:outline-none focus:ring-2 ring-offset-1 ring-red-400">
                Submit Package
            </a>
    
            <div class="block">
                
                <!-- Filters -->
                <div x-data="{ open: (window.innerWidth > 900) ? true : false }">

                    <p class="flex items-center justify-between p-3 text-lg font-semibold text-gray-700 bg-white border border-gray-300 border-solid rounded md:mb-4">
                        Filters
                        <button 
                            x-text="(open) ? 'Hide' : 'Show'"    
                            x-on:click="open=!open" 
                            class="text-sm focus:outline-none focus:ring focus:ring-offset-1">
                            Show
                        </button>
                    </p>

                    <div
                        x-cloak 
                        x-show.animate="open"
                        class="flex flex-col mt-2 bg-white divide-y rounded">

                        <label class="inline-flex items-center px-3 py-2 hover:bg-red-200">
                            <input type="checkbox" class="text-red-500 form-checkbox">
                            <span class="ml-2">Official</span>
                        </label>

                        <label class="inline-flex items-center px-3 py-2 hover:bg-red-200">
                            <input type="checkbox" class="text-red-500 form-checkbox">
                            <span class="ml-2">Community</span>
                        </label>
                        
                    </div>

                </div>

                <!-- Languages -->
                <div class="mt-5" x-data="{ open: (window.innerWidth > 900) ? true : false }">

                    <p class="flex items-center justify-between p-3 text-lg font-semibold text-gray-700 bg-white border border-gray-300 border-solid rounded md:mb-4">
                        Languages
                        <button 
                            x-text="(open) ? 'Hide' : 'Show'"    
                            x-on:click="open=!open" 
                            class="text-sm focus:outline-none focus:ring focus:ring-offset-1">
                            Show
                        </button>
                    </p>

                    <div
                        x-cloak 
                        x-show.animate="open"
                        class="flex flex-col mt-2 bg-white divide-y rounded">

                        @foreach ($languages as $language)
                            
                        @endforeach
                        <label class="inline-flex items-center px-3 py-2 hover:bg-red-200">
                            <input type="checkbox" class="text-red-500 form-checkbox">
                            <span class="ml-2">{{ $language }}</span>
                        </label>
                        
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="flex-1">
        @yield('page')
    </div>

</div>

@endsection
