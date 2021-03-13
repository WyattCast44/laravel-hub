@extends('layouts.app')

@section('content')

<!-- Container -->
<div class="max-w-5xl mx-auto my-4 md:my-16">

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
                        <livewire:packages.star :package="$package">

                        <!-- Favorites Count -->
                        <livewire:packages.favorite :package="$package">

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

                    <!-- Button Dropdown -->
                    <span x-data="{ open: false }"
                          class="relative rounded-md shadow-sm">
                        <button x-on:click="open = !open"
                                type="button"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring focus:border-blue-300">
                            Download
                            <x-icon-chevron-down class="w-5 h-5 ml-2 -mr-1 text-gray-500" />
                        </button>

                        <div 
                            x-cloak
                            x-show.transition="open"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 w-48 mt-2 -mr-1 origin-top-right rounded-md shadow-lg">
                            <div class="py-1 bg-white rounded-md ring-1 ring-black ring-opacity-5">
                                <a href="#"
                                   class="block px-4 py-2 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out hover:bg-gray-100 focus:outline-none focus:bg-gray-100 hover:no-underline">Edit</a>
                                <a href="#"
                                   class="block px-4 py-2 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out hover:bg-gray-100 focus:outline-none focus:bg-gray-100 hover:no-underline">View</a>
                            </div>
                        </div>
                    </span>

                </div>
            </div>

        </div>

        <nav class="px-4 py-2 bg-white border-t border-b border-gray-300">
                
            <div>

                <!-- Mobile Tabs -->
                <div class="sm:hidden">
                    
                    <x-nav.select.navigator>
                        
                        <x-nav.select.option route="{{ $package->route('show') }}" active="app.packages.show">
                            Read Me
                        </x-nav.select.option>

                        <x-nav.select.option route="{{ $package->route('screenshots.show') }}" active="app.packages.screenshots.show">
                            Screenshots
                        </x-nav.select.option>

                        <x-nav.select.option route="#" active="app.packages.screenshots.shows">
                            Articles/Tutorials
                        </x-nav.select.option>

                        <x-nav.select.option route="#" active="app.packages.screenshots.shows">
                            Related/Alternatives
                        </x-nav.select.option>
                        
                        @if(auth()->check() && $package->user->id == auth()->id())
                            <x-nav.select.option route="{{ $package->route('edit') }}" active="app.packages.edit">
                                Edit
                            </x-nav.select.option>
                        @endif

                    </x-nav.select.navigator>

                </div>

                <!-- Desktop Tabs -->
                <div class="hidden sm:block">

                    <x-nav.pills.container>

                        <x-nav.pills.pill route="{{ $package->route('show') }}" active="app.packages.show">
                            Read Me
                        </x-nav.pills.pill>

                        <x-nav.pills.pill route="{{ $package->route('screenshots.show') }}" active="app.packages.screenshots.show">
                            Screenshots
                        </x-nav.pills.pill>

                        <x-nav.pills.pill route="#" active="app.packages.screenshots.shows">
                            Articles/Tutorials
                        </x-nav.pills.pill>

                        <x-nav.pills.pill route="#" active="app.packages.screenshots.shows">
                            Related/Alternatives
                        </x-nav.pills.pill>

                        @if(auth()->check() && $package->user->id == auth()->id())
                            <x-nav.pills.pill route="{{ $package->route('edit') }}" active="app.packages.edit">
                                Edit
                            </x-nav.pills.pill>
                        @endif

                    </x-nav.pills.container>
                    
                </div><!-- /desktop tabs -->
                
            </div>
            
        </nav><!-- /tabs -->

        <!-- Content -->
        <div class="px-4 py-5 bg-white sm:p-6">

            @yield('package-page')

        </div>
    </div>

</div>

@endsection