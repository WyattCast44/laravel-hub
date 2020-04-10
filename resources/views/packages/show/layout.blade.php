@extends('layouts.app')

@section('content')

<!-- Container -->
<div class="container mx-auto my-4 md:my-16">

    <!-- Package/Card Header -->
    <div class="mx-3 bg-white rounded-lg shadow md:mx-0">
        <div class="px-4 py-5 sm:px-6">

            <div class="lg:flex lg:items-center lg:justify-between">

                <!-- Left Side -->
                <div class="flex-1 min-w-0">

                    <!-- Package Name -->
                    <h2
                        class="text-xl font-bold leading-7 text-gray-900 sm:text-2xl sm:leading-9 sm:truncate">
                        <a
                           href="{{ route('app.users.show', $package->user) }}">{{ $package->vendor }}</a>
                        /
                        {{ $package->name }}
                    </h2>

                    <!-- Package Badges -->
                    <div class="flex flex-col mt-1 sm:mt-0 sm:flex-row sm:flex-wrap">

                        <!-- Official Package Badge -->
                        @if($package->official)
                            <div class="flex items-center mt-2 text-sm leading-5 text-gray-500 sm:mr-4">
                                @svg('check-circle', 'w-5 h-5 mr-1.5 text-green-500')
                                Official Laravel Package
                            </div>
                        @endif

                        <!-- Star Count -->
                        <livewire:git-hub-star-repo-button :package="$package">
                        {{-- <div class="flex items-center mt-2 text-sm leading-5 text-gray-500 sm:mr-4">
                            @svg('star', 'w-5 h-5 text-yellow-400 mr-1.5')
                            {{ number_format($package->stars_count) }} stars
                        </div> --}}

                        <!-- Favorites Count -->
                        <livewire:package-favorite-button :package="$package">

                        @if($package->language != null)
                            <div class="flex items-center mt-2 text-sm leading-5 text-gray-500 sm:mr-6">
                                @svg('info', 'w-5 h-5 text-gray-600 mr-1.5')
                                {{ $package->language }}
                            </div>
                        @endif

                    </div>
                </div>

                <!-- Right Side -->
                <div class="flex mt-5 lg:mt-0 lg:ml-4">

                    <!-- Btn 1 -->
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

                    <!-- Btn 2 -->
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

                    <!-- Main Btn -->
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

                    <!-- Button Dropdown -->
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

        <!-- Tabs -->
        <div class="px-4 py-2 bg-white border-t border-b">
            <div>

                <!-- Mobile Tabs -->
                <div class="sm:hidden">
                    <select class="block w-full form-select"
                            onchange="navigate(this)">

                        <option value="{{ $package->route('show') }}" @if(request()->routeIs('app.packages.show')) {{ 'selected' }} @endif>
                            Read Me
                        </option>

                        <option value="{{ $package->route('screenshots.show') }}" @if(request()->routeIs('app.packages.screenshots.show')){{ 'selected' }} @endif>
                            Screenshots
                        </option>

                        @if(auth()->check() && $package->user->id == auth()->id())
                            <option value="{{ $package->route('edit') }}">Edit</option>
                        @endif

                    </select>
                </div>

                <!-- Desktop Tabs -->
                <div class="hidden sm:block">

                    <nav class="flex">

                        <!-- Readme -->
                        <a href="{{ $package->route('show') }}"
                           class="px-3 py-2 text-sm font-medium leading-5 text-gray-500 rounded-md hover:text-gray-700 focus:outline-none focus:text-gray-600 focus:bg-gray-100 hover:no-underline hover:bg-red-100 mr-3 @if (request()->routeIs('app.packages.show')) {{ 'bg-red-200 text-red-800' }} @endif">
                            Read Me
                        </a>

                        <!-- Screenshots -->
                        <a href="{{ $package->route('screenshots.show') }}"
                           class="px-3 py-2 text-sm font-medium leading-5 text-gray-500 rounded-md hover:text-gray-700 focus:outline-none focus:text-gray-600 focus:bg-gray-100 hover:no-underline hover:bg-red-100 mr-3 @if (request()->routeIs('app.packages.screenshots.show')) {{ 'bg-red-200 text-red-800' }} @endif">
                            Screenshots
                        </a>
                        
                        <!-- Tutorials -->
                        <a href="#"
                           class="px-3 py-2 mr-3 text-sm font-medium leading-5 text-gray-500 rounded-md hover:text-gray-700 focus:outline-none focus:text-gray-600 focus:bg-gray-100 hover:no-underline hover:bg-red-100">
                            Tutorials
                        </a>
                        
                        <!-- Alternatives -->
                        <a href="#"
                           class="px-3 py-2 mr-3 text-sm font-medium leading-5 text-gray-500 rounded-md hover:text-gray-700 focus:outline-none focus:text-gray-600 focus:bg-gray-100 hover:no-underline hover:bg-red-100">
                            Alternatives
                        </a>

                        <!-- Edit -->
                        @if(auth()->check() && $package->user->id == auth()->id())
                        <a href="{{ $package->route('edit') }}"
                           class="px-3 py-2 text-sm font-medium leading-5 text-gray-500 rounded-md hover:text-gray-700 focus:outline-none focus:text-gray-600 focus:bg-gray-100 hover:no-underline hover:bg-red-100 @if (request()->routeIs('app.packages.edit')) {{ 'bg-red-200 text-red-800' }} @endif">
                            Edit
                        </a>
                        @endif

                    </nav>

                </div><!-- /desktop tabs -->

            </div>

        </div><!-- /tabs -->

        <!-- Content -->
        <div class="px-4 py-5 bg-white sm:p-6">

            @yield('package-page')

        </div>
    </div>

</div>

@push('footer')

<script>
    function navigate(el) {
        window.location.href = el.value;
    }
</script>

@endpush

@endsection