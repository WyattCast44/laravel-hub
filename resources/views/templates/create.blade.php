@extends('layouts.app')

@section('content')

@include('partials.yaml-editor-scripts')

<div class="mx-6 my-10 md:mx-auto md:my-16" style="max-width: 1000px">
    
    <div class="p-10 bg-white border border-solid rounded-lg shadow">
        
        <h2 class="mb-2 text-3xl font-semibold text-gray-700 font-header">Create Template</h2>

        <p class="pb-6 mb-6 text-gray-600 border-b border-solid">
            Templates are reusable compose files that help you scaffold new Laravel projects. If you need
            more information or just want to brush up, check out the <a href="#">documentation</a>.
        </p>

        <div class="">
            
            <form action="{{ route('app.templates.store') }}" method="POST">

                @csrf            
                
                <!-- Name -->
                <div class="mt-6">
                    <label for="name" class="block pl-1 font-semibold text-gray-700">
                        Name
                    </label>
                    <input class="block w-full my-2 placeholder-gray-600 form-input" placeholder="my-laravel-template" name="name" autocomplete="off">
                    <span class="block pl-1 text-sm text-gray-500">Required. This will show when users are searching the package page</span> 
                </div>

                <!-- Description -->
                <div class="mt-6">
                    <label for="description" class="block pl-1 font-semibold text-gray-700">
                        Description
                    </label>
                    <textarea class="block w-full my-2 placeholder-gray-600 resize-y form-input" rows="3" placeholder="This template is used to scaffold..." name="description"></textarea>
                    <span class="block pl-1 text-sm text-gray-500">Required. Briefly explain what this template is used for</span> 
                </div>

                <!-- Template -->
                <div class="mt-6">
                    <label for="content" class="block pl-1 font-semibold text-gray-700">
                        Content
                    </label>
                    <div 
                        id="ace-editor" 
                        class="block w-full my-2 placeholder-gray-600 bg-gray-200 resize-y form-textarea" 
                        data-ace-lang="yaml"
                        data-ace-min-lines="5"
                        data-ace-max-lines="100"
                        data-ace-content="#content"
                        class="block w-full my-2 placeholder-gray-600 bg-gray-200 resize-y form-input"
                        >name: Laravel
laravel: master</div>
                    <span class="block pl-1 text-sm text-gray-500">Required.</span> 
                    <textarea name="content" id="content" class="hidden"></textarea>
                </div>

                <div class="mt-6">
                    <button type="submit" class="block w-full py-3 font-semibold text-center text-white bg-red-500 rounded hover:no-underline hover:shadow hover:bg-red-600">
                        Create Template
                    </button>
            
                </div>

            </form>

        </div>

    </div>

</div>

@endsection
