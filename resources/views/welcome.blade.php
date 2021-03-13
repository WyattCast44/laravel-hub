@extends('layouts.app')

@section('content')

    <section class="bg-gray-300 border-b">

        <div class="container px-4 py-10 mx-auto md:py-16 md:px-0">

            <div class="flex flex-col items-center justify-center">
                
                <!-- Logo -->
                <img src="{{ asset('logo.png') }}" alt="Laravel Hub" class="h-24 md:h-40">

                <!-- Title and Tagline -->
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

    </section>

    <section class="py-16 bg-white border-t border-b border-gray-500">
        <div class="max-w-xl px-4 mx-auto sm:px-6 lg:max-w-7xl lg:px-8">
            <dl class="space-y-10 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-8">
                <div>
                    <div class="flex items-center justify-center w-12 h-12 text-white bg-red-500 rounded-md">
                        <x-icon-package class="w-6 h-6" />
                    </div>
                    <div class="mt-5">
                        <dt class="text-lg font-medium leading-6 text-gray-900">
                            Discover Packages
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Partake in the rich Laravel ecosystem by discovering and sharing your favorite packages.
                        </dd>
                    </div>
                </div>
    
                <div>
                    <div class="flex items-center justify-center w-12 h-12 text-white bg-red-500 rounded-md">
                        <x-icon-template class="w-6 h-6" />
                    </div>
                    <div class="mt-5">
                        <dt class="text-lg font-medium leading-6 text-gray-900">
                            Scaffold Applications
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Use our powerful CLI tool to easily create new Laravel projects from community templates.
                        </dd>
                    </div>
                </div>
    
                <div>
                    <div class="flex items-center justify-center w-12 h-12 text-white bg-red-500 rounded-md">
                        <x-icon-lightning-bolt class="w-6 h-6" />
                    </div>
                    <div class="mt-5">
                        <dt class="text-lg font-medium leading-6 text-gray-900">
                            Another Feature
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit
                            perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                        </dd>
                    </div>
                </div>
            </dl>
        </div>
    </section>

@endsection
