@extends('layouts.app')

@section('content')

<div class="container mx-auto my-10 md:my-16 flex flex-col md:flex-row">

    <div class="md:w-2/12 md:mr-8">
        
        <div class="flex flex-col items-center w-full">

            <div class="flex justify-center w-32 h-32 md:w-full md:h-auto">
                <img src="{{ $user->avatar }}" alt="{{ $user->username }}" class="rounded-lg md:w-full">
            </div>

            <h2 class="font-semibold text-2xl my-4 text-center leading-tight">
                {{ $user->name }}
                <span class="font-light text-xl block">{{$user->username }}</span>
            </h2>

        </div>
        
    </div>

    <div class="flex-1 mt-8 md:mt-0 px-4 md:px-0">
        
        <div class="mb-8">
            <nav class="flex font-semibold hidden md:block">

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

                <span class="flex-grow px-4 border-b-2 pb-3"></span>

            </nav>
        </div>

        <div class="">

            @yield('page')

        </div>
        
    </div>

</div>

@endsection

<!-- 

    We want to list the 
    - Username
    - Image
    - Github profile
    - Other profiles
    - repos
    - templates
    - favorites?

-->