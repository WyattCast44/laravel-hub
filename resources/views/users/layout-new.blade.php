@extends('layouts.app')

@section('content')

<!-- Container -->
<div class="container mx-auto my-4 md:my-16">

    <div x-data="{ show: true }">
        <div class="p-4 mb-10 bg-red-200 rounded-md shadow" x-show="show">
            <div class="flex" >
                <div class="flex-shrink-0">
                    @svg('alert-triangle', 'w-5 h-5 text-red-700')
                </div>
                <div class="ml-3">
                    <p class="text-red-800">
                        This account was automatically created when one of thier packages was submitted. If you are the owner and want to claim this account, all you have to do is sign in with your GitHub account. If you would like this account page removed and your packages removed, please reach out <a href="#">here</a>.
                    </p>
                </div>
                <div class="pl-3 ml-auto">
                    <div class="-mx-1.5 -my-1.5">
                        <button
                                class="inline-flex rounded-md p-1.5 text-red-500 hover:bg-red-300 focus:outline-none focus:bg-red-300 transition ease-in-out duration-150" x-on:click="show = false">
                            <svg class="w-5 h-5"
                                viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Header -->
    <div class="mx-3 bg-white rounded-lg shadow md:mx-0">
        <div class="px-4 py-5 sm:px-6">

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
                
                <!-- Right Side -->
                <div class="flex mt-5 lg:mt-0 lg:ml-4">
                    
                    <!-- Buttons -->
                    
                </div>
            </div>
            
        </div>
        
        <!-- Tabs -->
        <div class="px-4 py-2 bg-white border-t border-b">
            <div>

                <!-- Mobile Tabs -->
                <div class="sm:hidden">
                  <select class="block w-full form-select" onchange="navigate(this)">
                    <option value="{{ route('app.users.show', $user) }}" @if (request()->routeIs('app.users.show')) {{ 'selected' }} @endif>
                        Overview
                    </option>
                    <option value="{{ route('app.users.packages.show', $user) }}" @if (request()->routeIs('app.users.packages.show')) {{ 'selected' }} @endif>
                        Packages
                    </option>
                    <option value="{{ route('app.users.templates.show', $user) }}" @if (request()->routeIs('app.users.templates.show')) {{ 'selected' }} @endif>
                        Templates
                    </option>
                    <option value="{{ route('app.users.favorites.show', $user) }}" @if (request()->routeIs('app.users.favorites.show')) {{ 'selected' }} @endif>
                        Favorites
                    </option>
                  </select>
                </div>

                <!-- Desktop Tabs -->
                <div class="hidden sm:block">
                    
                  <nav class="flex">
                      
                    <a href="{{ route('app.users.show', $user) }}" class="px-3 py-2 text-sm font-medium leading-5 text-gray-500 rounded-md hover:text-gray-700 focus:outline-none focus:text-gray-600 focus:bg-gray-100 hover:no-underline hover:bg-red-100 mr-3 @if (request()->routeIs('app.users.show')) {{ 'bg-red-200 text-red-800' }} @endif">
                      Overview
                    </a>

                    <a href="{{ route('app.users.packages.show', $user) }}" class="px-3 py-2 text-sm font-medium leading-5 text-gray-500 rounded-md hover:text-gray-700 focus:outline-none focus:text-gray-600 focus:bg-gray-100 hover:no-underline hover:bg-red-100 mr-3 @if (request()->routeIs('app.users.packages.show')) {{ 'bg-red-200 text-red-800' }} @endif">
                      Packages
                    </a>

                    <a href="{{ route('app.users.templates.show', $user) }}" class="px-3 py-2 mr-3 text-sm font-medium leading-5 text-gray-500 rounded-md hover:text-gray-700 focus:outline-none focus:text-gray-600 focus:bg-gray-100 hover:no-underline hover:bg-red-100 @if (request()->routeIs('app.users.templates.show')) {{ 'bg-red-200 text-red-800' }} @endif">
                      Templates
                    </a>

                    <a href="{{ route('app.users.favorites.show', $user) }}" class="px-3 py-2 text-sm font-medium leading-5 text-gray-500 rounded-md hover:text-gray-700 focus:outline-none focus:text-gray-600 focus:bg-gray-100 hover:no-underline hover:bg-red-100 @if (request()->routeIs('app.users.favorites.show')) {{ 'bg-red-200 text-red-800' }} @endif">
                      Favorites
                    </a>
                    
                  </nav>
                  
                </div><!-- /desktop tabs -->
                
              </div>
              
        </div><!-- /tabs -->
        
        <!-- Content -->
        <div class="px-4 py-5 bg-white sm:p-6">
            
            @yield('user-page')

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
