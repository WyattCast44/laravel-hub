@extends('layouts.app')

@section('content')

<div class="container mx-auto my-16 flex">

    <div class="w-2/12">
        
        <div class="mr-8 sticky" style="top:25px;">
            <a href="{{ route('app.packages.create') }}" class="mb-5 rounded bg-red-500 text-white font-semibold w-full py-3 block text-center hover:no-underline hover:shadow hover:bg-red-600">
                Submit Package
            </a>
    
            <div class="block">
                
                <span class="text-gray-700">Filters</span>

                <div class="border-solid border-b mt-2 mb-5 pb-5">
                   
                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox text-red-500" checked>
                            <span class="ml-2">Official Packages</span>
                        </label>
                    </div>

                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox text-red-500" checked>
                            <span class="ml-2">Community Packages</span>
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

        <div class="w-full flex items-end justify-between mb-8">

            <div>
                Filter
            </div>


            <div>
                Search
            </div>

        </div>
        
        <div>

            @foreach ($packages as $package)
                <div class="rounded shadow p-6 bg-white mb-3 hover:shadow-md">
                    <h3 class="text-lg font-semibold">{{ $package->display_name }}</h3>
                    <div>
                        <p>
                            By <a href="{{ route('app.users.show', $package->user) }}">{{ $package->user->username }}</a>
                        </p>
                    </div>
                    <p></p>
                </div>
            @endforeach

        </div>

    </div>

</div>

@endsection
