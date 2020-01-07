@extends('layouts.app')

@section('content')

<div class="container mx-auto my-16 flex">

    <div class="w-2/12 mr-8">
        
        <div class="flex flex-col">
            <img src="{{ $user->avatar }}" alt="{{ $user->username }}" class="rounded-lg w-full h-auto">

            <h2 class="font-semibold text-2xl my-4">{{$user->username }}</h2>

        </div>
        
    </div>

    <div class="flex-1">
        Content
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