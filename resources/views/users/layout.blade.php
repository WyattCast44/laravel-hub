@extends('layouts.app')

@section('content')

<div class="container flex flex-col px-4 mx-auto my-6 md:my-16 md:flex-row md:px-0">

    <label class="block mb-8 md:hidden">
        <span class="block text-xs text-center text-gray-500 uppercase">Menu</span>

        <select class="block w-full mt-1 form-select" onchange="navigate(this)">
            
            <option 
                value="{{ route('app.users.show', $user) }}" 
                @if (request()->routeIs('app.users.show')) {{ 'selected' }} @endif
                >
                Overview
            </option>

            <option 
                value="{{ route('app.users.packages.show', $user) }}" 
                @if (request()->routeIs('app.users.packages.show')) {{ 'selected' }} @endif
                >
                Packages
            </option>

            <option 
                value="{{ route('app.users.templates.show', $user) }}" 
                @if (request()->routeIs('app.users.templates.show')) {{ 'selected' }} @endif
                >
                Templates
            </option>

            <option 
                value="{{ route('app.users.favorites.show', $user) }}" 
                @if (request()->routeIs('app.users.favorites.show')) {{ 'selected' }} @endif
                >
                Favorites
            </option>

            
        </select>
    </label>

    <!-- User details -->
    <div class="md:w-2/12 md:mr-8">
        
        <div class="flex flex-col items-center w-full">

            <!-- Avatar -->
            <div class="flex flex-col justify-center md:w-full md:h-auto">
                <img src="{{ $user->avatar }}" alt="{{ $user->username }}" class="w-40 h-40 bg-white border-t border-b border-l border-r rounded-t-lg md:w-full md:h-auto">
                <div class="w-40 px-2 py-1 text-sm text-center text-gray-700 bg-white border-b border-l border-r rounded-b-lg md:w-full">
                    {{ ($user->bio) ? $user->bio : '🙂' }}
                </div>
            </div>

            <!-- Name -->
            <h2 class="my-4 text-2xl font-semibold leading-tight text-center">
                {{ $user->name }}
                <span class="block text-xl font-light">{{$user->username }}</span>
            </h2>

        </div>
        
    </div>

    <!-- Main Section -->
    <div class="flex-1 px-4 mt-2 md:mt-0 md:px-0">
        
        <!-- Nav -->
        <div class="mb-8">

            <nav class="flex hidden font-semibold md:flex">

                <a href="{{ route('app.users.show', $user) }}" class="px-4 border-b-2 pb-3 hover:border-red-500 hover:no-underline @routeIs('app.users.show') border-red-500 @endrouteIs">
                    Overview
                </a>

                <a href="{{ route('app.users.packages.show', $user) }}" class="px-4 border-b-2 pb-3 hover:border-red-500 hover:no-underline @routeIs('app.users.packages.show') border-red-500 @endrouteIs">
                    Packages
                </a>

                <a href="{{ route('app.users.templates.show', $user) }}" class="px-4 border-b-2 pb-3 hover:border-red-500 hover:no-underline @routeIs('app.users.templates.show') border-red-500 @endrouteIs">
                    Templates
                </a>
                
                <a href="{{ route('app.users.favorites.show', $user) }}" class="px-4 border-b-2 pb-3 hover:border-red-500 hover:no-underline @routeIs('app.users.favorites.show') border-red-500 @endrouteIs">
                    Favorites
                </a>

                <div class="flex-grow px-4 pb-3 border-b-2"></div>

            </nav>
        </div>

        <!-- Page content -->
        <div class="">

            @yield('page')

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