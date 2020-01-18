@extends('layouts.app')

@section('content')

    <div class="bg-gray-200 border-b">

        <div class="container mx-auto py-10 md:py-16 px-4 md:px-0">

            <div class="flex flex-col items-center justify-center">
                
                <img src="{{ asset('logo-2.png') }}" alt="Laravel Hub" class="h-24 md:h-40">

                <div class="text-red-500 mt-6 text-center">
                    <h1 class="text-red-500 font-bold text-4xl md:text-6xl font-header leading-tight hover:no-underline tracking-tighter">
                        Laravel Hub
                    </h1>
                    <p>Your home for Laravel packages, tools, and more</p>
                </div>                

            </div>

        </div>

    </div>


@endsection
