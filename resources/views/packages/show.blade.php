@extends('layouts.app')

@section('content')

<div class="container mx-auto my-12">
    
    <div class="bg-white rounded-lg shadow ">
        <div class="px-4 py-5 sm:px-6">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                        {{ $package->name }}
                    </h2>
                    <div class="flex flex-col mt-1 sm:mt-0 sm:flex-row sm:flex-wrap">
                        <div class="flex items-center mt-2 text-sm leading-5 text-gray-500 sm:mr-6">
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                            </svg>
                            Full-time
                        </div>
                        <div class="flex items-center mt-2 text-sm leading-5 text-gray-500 sm:mr-6">
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Remote
                        </div>
                        <div class="flex items-center mt-2 text-sm leading-5 text-gray-500 sm:mr-6">
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                    clip-rule="evenodd" />
                            </svg>
                            $120k &ndash; $140k
                        </div>
                        <div class="flex items-center mt-2 text-sm leading-5 text-gray-500">
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd" />
                            </svg>
                            Closing on January 9, 2020
                        </div>
                    </div>
                </div>
                <div class="flex mt-5 lg:mt-0 lg:ml-4">
                    <span class="hidden rounded-md shadow-sm sm:block">
                        <button type="button"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:text-gray-800 active:bg-gray-50">
                            <svg class="w-5 h-5 mr-2 -ml-1 text-gray-500"
                                fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                            Edit
                        </button>
                    </span>
            
                    <span class="hidden ml-3 rounded-md shadow-sm sm:block">
                        <button type="button"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:text-gray-800 active:bg-gray-50">
                            <svg class="w-5 h-5 mr-2 -ml-1 text-gray-500"
                                fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z"
                                    clip-rule="evenodd" />
                            </svg>
                            View
                        </button>
                    </span>
            
                    <span class="rounded-md shadow-sm sm:ml-3">
                        <button type="button"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700">
                            <svg class="w-5 h-5 mr-2 -ml-1"
                                fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            Publish
                        </button>
                    </span>
            
                    <span x-data="{ open: false }"
                        class="relative ml-3 rounded-md shadow-sm sm:hidden">
                        <button @click="open = !open"
                                type="button"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:shadow-outline focus:border-blue-300">
                            More
                            <svg class="w-5 h-5 ml-2 -mr-1 text-gray-500"
                                fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
            
                        <div x-show="open"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 w-48 mt-2 -mr-1 origin-top-right rounded-md shadow-lg">
                            <div class="py-1 bg-white rounded-md shadow-xs">
                                <a href="#"
                                class="block px-4 py-2 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out hover:bg-gray-100 focus:outline-none focus:bg-gray-100">Edit</a>
                                <a href="#"
                                class="block px-4 py-2 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out hover:bg-gray-100 focus:outline-none focus:bg-gray-100">View</a>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
            
        </div>
        <div class="px-4 py-5 bg-gray-50 sm:p-6">
            <!-- Content goes here -->
        </div>
    </div>

</div>
  


<div class="container flex mx-auto my-16">

    <div class="flex-1 px-10 py-10 mr-8 bg-white border border-solid rounded-lg shadow">
    
        <h2 class="mb-6 text-3xl font-semibold text-gray-700 font-header">{{ $package->display_name }}</h2>

        <div class="markdown-body">
            {{-- {!! GitDown::parseAndCache($package->meta['readme'], $seconds = 300) !!} --}}
        </div>
            
    </div>

    <div class="w-3/12">
        
        <div class="flex-1 px-10 py-10 bg-white border border-solid rounded-lg shadow">

            <form action="{{ route('app.packages.favorites.store', ['vendor' => $package->vendor, 'package' => $package]) }}" method="post">
                @csrf
                <button type="submit" class="block w-full py-3 font-semibold text-center text-white bg-red-500 rounded hover:no-underline hover:shadow hover:bg-red-600">
                    Favorite 🔥
                </button>
            </form>
            
            <form action="{{ route('app.packages.delete', ['vendor' => $package->vendor, 'package' => $package]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="block w-full py-3 font-semibold text-center text-white bg-red-500 rounded hover:no-underline hover:shadow hover:bg-red-600">
                    Delete
                </button>
            </form>

            

        </div>

    </div>

</div>

{{-- <div class="container mx-auto my-16">

    Show
    - Readme
    - GitHub stats
    - Hub favorites
    - View count
    - Packagist/NPM download count
    - install command(s)
    - repo links
    - download links

</div> --}}

@endsection
