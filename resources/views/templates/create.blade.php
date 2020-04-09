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

                <!-- Display name -->
                <label for="display_name" class="block pl-1 font-semibold text-gray-700">
                    Display Name
                </label>
                <input class="block w-full my-2 placeholder-gray-600 form-input" placeholder="My Laravel Template..." autofocus name="display_name" autocomplete="off">
                <span class="block pl-1 text-sm text-gray-500">Required. This will show when users are searching the package page</span>
                    
                
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
                    <textarea class="block w-full my-2 placeholder-gray-600 form-textarea" rows="3" placeholder="This template is used to scaffold..." name="description" draggable="true"></textarea>
                    <span class="block pl-1 text-sm text-gray-500">Required. Briefly explain what this template is used for</span> 
                </div>

                <!-- Template -->
                <div class="mt-6">
                    <label for="content" class="block pl-1 font-semibold text-gray-700">
                        Content
                    </label>
                    <div id="editor" class="block w-full my-2 placeholder-gray-600 bg-gray-200 resize-y form-textarea" data-lpignore="true"
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

@push('footer')
    <script>

        document.addEventListener("turbolinks:load", function() {

            window.editor = ace.edit("editor", {
                minLines: 5,
                maxLines: 100,
                autoScrollEditorIntoView: true               
            });

            let YamlMode = ace.require("ace/mode/yaml").Mode;
            window.editor.getSession().setMode(new YamlMode());

            let content = document.querySelector("#content");
            content.value = window.editor.getSession().getValue();

            window.editor.getSession().on('change', function () {
                content.value = window.editor.getSession().getValue();
            });

        });

    </script>
@endpush

@endsection
