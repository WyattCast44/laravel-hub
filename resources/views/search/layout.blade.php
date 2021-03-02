@extends('layouts.app')

@section('content')

<div class="container flex flex-col px-4 mx-auto my-6 md:px-0 md:my-16 md:flex-row">

    <div class="w-full md:w-3/12">
        
        <div class="sticky md:mr-8" style="top:25px;">
    
            <div class="block md:mr-8">

                <!-- Search input -->
                <div class="mb-6">
                    <input 
                        autofocus
                        type="search" 
                        spellcheck="false"
                        autocomplete="off"
                        placeholder="Search ..."
                        class="w-full focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-red-300 focus:border-transparent" 
                        >
                </div>
    
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
                        x-show="open"
                        class="flex flex-col mt-2 bg-white divide-y rounded">

                        <label class="inline-flex items-center px-3 py-2 hover:bg-red-200">
                            <input type="checkbox" class="text-red-500 form-checkbox">
                            <span class="ml-2">Packages</span>
                        </label>

                        <label class="inline-flex items-center px-3 py-2 hover:bg-red-200">
                            <input type="checkbox" class="text-red-500 form-checkbox">
                            <span class="ml-2">Templates</span>
                        </label>
                        
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="flex-1 mt-6">
        @yield('page')
    </div>

</div>

@endsection
