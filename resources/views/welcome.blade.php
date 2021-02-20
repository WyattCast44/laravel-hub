@extends('layouts.app')

@section('content')

    <div class="bg-gray-300 border-b">

        <div class="container px-4 py-10 mx-auto md:py-16 md:px-0">

            <div class="flex flex-col items-center justify-center">
                
                <img src="{{ asset('logo.png') }}" alt="Laravel Hub" class="h-24 md:h-40">

                <div class="mt-6 text-center text-red-500">
                    <h1 class="text-5xl font-bold leading-tight tracking-tighter text-red-500 md:text-6xl font-header hover:no-underline">
                        Laravel Hub
                    </h1>
                    <p class="font-semibold">
                        Your home for Laravel packages, tools, and more.
                    </p>
                </div>                

            </div>

        </div>

    </div>

@endsection
