@extends('layouts.app')

@section('content')

<div class="container mx-auto my-16 flex">

    <div class="w-2/12 mr-8">
        
        <div class="flex flex-col items-center">

            <img src="{{ $user->avatar }}" alt="{{ $user->username }}" class="rounded-lg w-full h-auto shadow">

            <h2 class="font-semibold text-2xl my-4 text-center leading-tight">
                {{ $user->name }}
                <span class="font-light text-xl">{{$user->username }}</span>
            </h2>

        </div>
        
    </div>

    <div class="flex-1">
        
        <div>
            <nav class="flex mb-8 font-semibold">
                <a href="#" class="px-4 border-b-2 pb-3 hover:border-red-500 hover:no-underline">Activity</a>
                <a href="#" class="px-4 border-b-2 pb-3 hover:border-red-500 hover:no-underline">Packages</a>
                <a href="#" class="px-4 border-b-2 pb-3 hover:border-red-500 hover:no-underline">Templates</a>
                <a href="#" class="px-4 border-b-2 pb-3 hover:border-red-500 hover:no-underline">Favorites</a>
                <span class="flex-grow px-4 border-b-2 pb-3"></span>
            </nav>
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