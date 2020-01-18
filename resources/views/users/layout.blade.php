@extends('layouts.app')

@section('content')

<div class="container mx-auto my-6 md:my-16 flex flex-col md:flex-row px-4 md:px-0">

    <label class="block md:hidden mb-8">
        <span class="text-gray-500 uppercase text-xs text-center block">Menu</span>

        <select class="form-select block w-full mt-1" onchange="navigate(this)">
            
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
            <div class="flex justify-center w-32 h-32 md:w-full md:h-auto">
                <img src="{{ $user->avatar }}" alt="{{ $user->username }}" class="rounded-lg md:w-full">
            </div>

            <!-- Name -->
            <h2 class="font-semibold text-2xl my-4 text-center leading-tight">
                {{ $user->name }}
                <span class="font-light text-xl block">{{$user->username }}</span>
            </h2>

        </div>
        
    </div>

    <!-- Main Section -->
    <div class="flex-1 mt-2 md:mt-0 px-4 md:px-0">
        
        <!-- Nav -->
        <div class="mb-8">

            <nav class="flex font-semibold hidden md:flex">

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

                <div class="flex-grow px-4 border-b-2 pb-3"></div>

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