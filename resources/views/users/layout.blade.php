@extends('layouts.app')

@section('content')

    <!-- Container -->
    <div class="container mx-auto my-4 md:my-16">

        <!-- Card Header -->
        <section class="mx-3 bg-white rounded-lg shadow md:mx-0">
            
            <!-- User name/avatar -->
            <header class="px-4 py-5 sm:px-6">

                <div class="lg:flex lg:items-center lg:justify-between">
                    
                    <!-- Left Side -->
                    <div class="flex-1 min-w-0">

                        <div class="flex items-center">
                            <img class="w-auto h-20 mr-3 rounded" src="{{ $user->avatar }}" alt="{{ $user->name }}">
                            <div>
                                <h2 class="text-xl font-bold leading-7 text-gray-900 sm:text-2xl sm:leading-9 sm:truncate">
                                    {{ $user->name }}
                                </h2>
                                <p>
                                    {{ $user->bio }}
                                </p>
                                <div class="flex items-center">
                                    <a href="https://github.com/{{ $user->username }}" title="View on GitHub">
                                        {{ '@' . $user->username }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>
                
            </header>
            
            <!-- Nav -->
            <nav class="px-4 py-2 bg-white border-t border-b border-gray-300">
                
                <div>

                    <!-- Mobile Tabs -->
                    <div class="sm:hidden">
                        
                        <x-nav.select.navigator>
                            <x-nav.select.option route="{{ route('app.users.show', $user) }}" active="app.users.show">
                                Overview
                            </x-nav.select.option>
                            <x-nav.select.option route="{{ route('app.users.packages.show', $user) }}" active="app.users.packages.show">
                                Packages
                            </x-nav.select.option>
                            <x-nav.select.option route="{{ route('app.users.templates.show', $user) }}" active="app.users.templates.show">
                                Templates
                            </x-nav.select.option>
                            <x-nav.select.option route="{{ route('app.users.favorites.show', $user) }}" active="app.users.favorites.show">
                                Favorites
                            </x-nav.select.option>
                        </x-nav.select.navigator>

                    </div>

                    <!-- Desktop Tabs -->
                    <div class="hidden sm:block">

                        <x-nav.pills.container>

                            <x-nav.pills.pill route="{{ route('app.users.show', $user) }}" active="app.users.show">
                                Overview
                            </x-nav.pills.pill>
                            
                            <x-nav.pills.pill route="{{ route('app.users.packages.show', $user) }}" active="app.users.packages.show">
                                Packages
                            </x-nav.pills.pill>

                            <x-nav.pills.pill route="{{ route('app.users.templates.show', $user) }}" active="app.users.templates.show">
                                Templates
                            </x-nav.pills.pill>

                            <x-nav.pills.pill route="{{ route('app.users.favorites.show', $user) }}" active="app.users.favorites.show">
                                Favorites
                            </x-nav.pills.pill>

                        </x-nav.pills.container>
                        
                    </div><!-- /desktop tabs -->
                    
                </div>
                
            </nav><!-- /tabs -->
            
            <!-- Content -->
            <main class="px-4 py-5 bg-white rounded-b-lg sm:p-6">
                
                @yield('user-page')

            </main>
            
        </section>

    </div>

@endsection
