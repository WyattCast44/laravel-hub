@extends('layouts.app')

@section('content')

<div class="container flex mx-auto my-16">

    <div class="w-3/12">
        
        <div class="sticky mr-8" style="top:25px;">

            <a href="{{ route('app.templates.create') }}" class="block w-full py-3 mb-5 font-semibold text-center text-white bg-red-500 rounded hover:no-underline hover:shadow hover:bg-red-600" data-turbolinks="ssss">
                Create Template
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

    <div class="flex-1">
        @yield('page')
    </div>

</div>

@endsection
