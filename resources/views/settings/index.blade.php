@extends('layouts.app')

@section('content')

<div class="container mx-auto my-16 flex" style="max-width: 1000px">

    <div class="w-3/12 border-solid border rounded shadow mr-5">
        <h2 class="text-sm tracking-tight p-2 bg-gray-200 text-gray-600">Personal Settings</h2>
        <nav class="flex flex-col bg-white py-2">
            <a href="#" class="px-2 hover:bg-gray-200 py-2 hover:no-underline">Profile</a>
            <a href="#" class="px-2 hover:bg-gray-200 py-2 hover:no-underline">Security</a>
        </nav>
    </div>

    <div class="flex-1 w-full">
        Body
    </div>

</div>

@endsection
