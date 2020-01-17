@extends('layouts.app')

@section('content')

@include('partials.yaml-editor-scripts')

<div class="container mx-auto my-16" style="max-width: 1000px">
    
    <div class="bg-white rounded-lg py-10 px-10 border-solid border shadow mb-32">
        
        <h2 class="text-3xl font-semibold font-header mb-2 text-gray-700">Create Template</h2>

        <p class="text-gray-600 border-solid border-b pb-6 mb-6">
            Templates are reusable compose files that help you scaffold new Laravel projects. If you need
            more information or just want to brush up, check out the <a href="#">documentation</a>.
        </p>

        <div class="">
            
            <form action="{{ route('app.templates.store') }}" method="POST">

                @csrf

                <!-- Display name -->
                <label for="display_name" class="text-gray-700 block font-semibold pl-1">
                    Display Name
                </label>
                <input class="form-input block w-full my-2 bg-gray-200 placeholder-gray-600" placeholder="Laravel Avengers Package..." autofocus name="display_name">
                <span class="text-sm text-gray-500 block pl-1">Required. This will show when users are searching the package page</span>
                    
                
                <!-- Name -->
                <div class="mt-6">
                    <label for="name" class="text-gray-700 block font-semibold pl-1">
                        Name
                    </label>
                    <input class="form-input block w-full my-2 bg-gray-200 placeholder-gray-600" placeholder="fractal-api-base" name="name">
                    <span class="text-sm text-gray-500 block pl-1">Required. This will show when users are searching the package page</span> 
                </div>

                <!-- Description -->
                <div class="mt-6">
                    <label for="description" class="text-gray-700 block font-semibold pl-1">
                        Description
                    </label>
                    <textarea class="form-textarea my-2 block w-full bg-gray-200 placeholder-gray-600" rows="3" placeholder="This template is used to scaffold..." name="description"></textarea>
                    <span class="text-sm text-gray-500 block pl-1">Required. Briefly explain what this template is used for</span> 
                </div>

                <!-- Template -->
                <div class="mt-6">
                    <label for="content" class="text-gray-700 block font-semibold pl-1">
                        Content
                    </label>
                    <div id="yaml-editor" class="resize-y form-textarea my-2 block w-full bg-gray-200 placeholder-gray-600" style="min-height: 750px" data-lpignore="true"
                    >name: Laravel
laravel: master</div>
                    <span class="text-sm text-gray-500 block pl-1">Required.</span> 
                    <textarea name="content" id="content" class="block form-textarea my-6"></textarea>
                </div>

                <div class="mt-6">
                    <button type="submit" class="rounded bg-red-500 text-white font-semibold w-full py-3 block text-center hover:no-underline hover:shadow hover:bg-red-600">
                        Create Template
                    </button>
            
                </div>

            </form>

        </div>

    </div>

</div>

@push('footer')
    <script>

        document.addEventListener("turbolinks:load", function() {

            window.editor = ace.edit("yaml-editor");
            let YamlMode = ace.require("ace/mode/yaml").Mode;
            window.editor.getSession().setMode(new YamlMode());
            
            let content = document.querySelector("#content");
            content.value = window.editor.getSession().getValue();

            window.editor.getSession().on('change', function() {
                content.value = window.editor.getSession().getValue();
            });

        })
        
    </script>
@endpush

@endsection
