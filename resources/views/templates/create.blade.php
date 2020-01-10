@extends('layouts.app')

@section('content')

@include('partials.yaml-editor')

<div class="container mx-auto my-16" style="max-width: 1000px">
    
    <div class="bg-white rounded-lg py-10 px-10 border-solid border shadow mb-32">
        
        <h2 class="text-3xl font-semibold font-header mb-2 text-gray-700">Create Template</h2>

        <p class="text-gray-600 border-solid border-b pb-6 mb-6">
            Templates are reusable compose files that help you scaffold new Laravel projects. If you need
            more information or just want to brush up, check out the <a href="#">documentation</a>.
        </p>

        <div class="">
            
            <form action="">

                <!-- Display name -->
                <label for="display_name" class="text-gray-700 block font-semibold pl-1">
                    Display Name
                </label>
                <input class="form-input block w-full my-2 bg-gray-200 placeholder-gray-600" placeholder="Laravel Avengers Package..." autofocus>
                <span class="text-sm text-gray-500 block pl-1">Required. This will show when users are searching the package page</span>
                    
                
                <!-- Name -->
                <div class="mt-6">
                    <label for="name" class="text-gray-700 block font-semibold pl-1">
                        Name
                    </label>
                    <input class="form-input block w-full my-2 bg-gray-200 placeholder-gray-600" placeholder="fractal-api-base">
                    <span class="text-sm text-gray-500 block pl-1">Required. This will show when users are searching the package page</span> 
                </div>

                <!-- Description -->
                <div class="mt-6">
                    <label for="description" class="text-gray-700 block font-semibold pl-1">
                        Description
                    </label>
                    <textarea class="form-textarea my-2 block w-full bg-gray-200 placeholder-gray-600" rows="3" placeholder="This template is used to scaffold..."></textarea>
                    <span class="text-sm text-gray-500 block pl-1">Required. Briefly explain what this template is used for</span> 
                </div>

                <!-- Template -->
                <div class="mt-6">
                    <label for="description" class="text-gray-700 block font-semibold pl-1">
                        Content
                    </label>
                    <div id="yaml-editor" class="resize-y form-textarea my-2 block w-full bg-gray-200 placeholder-gray-600" style="min-height: 750px" contenteditable="true">name: my-name
laravel: master # master, dev, auth</div>
                    {{-- <textarea id="yaml-editor" class="form-textarea my-2 block w-full bg-gray-200 placeholder-gray-600" rows="10" placeholder="Define your template here..."></textarea> --}}
                    <span class="text-sm text-gray-500 block pl-1">Required.</span> 
                </div>

            </form>

        </div>

    </div>

</div>

@endsection
