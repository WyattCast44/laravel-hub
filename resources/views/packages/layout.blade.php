@extends('layouts.app')

@section('content')

<div class="container flex flex-col px-4 mx-auto my-6 md:px-0 md:my-16 md:flex-row">

    <div class="w-full md:w-2/12">
        
        <div class="sticky mr-8" style="top:25px;">
            <a 
                title="Submit a new package"
                href="{{ route('app.packages.create') }}" 
                class="block w-full py-3 mb-5 font-semibold text-center text-white bg-red-500 rounded hover:no-underline hover:shadow hover:bg-red-600 focus:outline-none focus:ring-2 ring-offset-1 ring-red-400">
                Submit Package
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

                    @foreach ($languages as $language)
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="text-red-500 form-checkbox">
                                <span class="ml-2">{{ $language }}</span>
                            </label>
                        </div>
                    @endforeach
                    
                </div>

            </div>

        </div>

    </div>

    <div class="flex-1">
        @yield('page')
    </div>

</div>

@endsection
