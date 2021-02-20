@extends('layouts.app')

@section('content')

@push('head')
    <meta name="turbo-cache-control" content="no-cache">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.59.2/codemirror.min.css" integrity="sha512-MWdvo/Qqcf4pY1ecQUB1uBn0qLp19U/qJ1Rpp2BDZeuBA7YsFEwkvqR/+aG4BroPiAYDunKJ6X8R/Pmdt3p7oA==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.59.2/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.59.2/mode/yaml/yaml.min.js" integrity="sha512-+aXDZ93WyextRiAZpsRuJyiAZ38ztttUyO/H3FZx4gOAOv4/k9C6Um1CvHVtaowHZ2h7kH0d+orWvdBLPVwb4g==" crossorigin="anonymous"></script>
@endpush

<div class="mx-6 my-10 md:mx-auto md:my-16" style="max-width: 1000px">
    
    <div class="p-10 bg-white border border-solid rounded-lg shadow">
        
        <h2 class="mb-2 text-3xl font-semibold text-gray-700 font-header">Create Template</h2>

        <p class="pb-6 mb-6 text-gray-600 border-b border-solid">
            Templates are reusable compose files that help you scaffold new Laravel projects. If you need
            more information or just want to brush up, check out the <a href="#">documentation</a>.
        </p>

        <div>
            
            <form action="{{ route('app.templates.store') }}" method="POST">

                @csrf            
                
                <!-- Name -->
                <div class="mt-6">
                    <label for="name" class="block pl-1 font-semibold text-gray-700">
                        Name
                    </label>
                    <input type="text" class="block w-full my-2 placeholder-gray-600 form-input" placeholder="my-laravel-template" name="name" autocomplete="off" spellcheck="false">
                    <span class="block pl-1 text-sm text-gray-500">Required. This will show when users are searching the package page</span> 
                </div>

                @error('name')
                    <x-form-error :message="$message"></x-form-error>
                @enderror

                <!-- Description -->
                <div class="mt-6">
                    <label for="description" class="block pl-1 font-semibold text-gray-700">
                        Description
                    </label>
                    <textarea class="block w-full my-2 placeholder-gray-600 resize-y form-input" rows="3" placeholder="This template is used to scaffold..." name="description"></textarea>
                    <span class="block pl-1 text-sm text-gray-500">Required. Briefly explain what this template is used for</span> 
                </div>

                @error('description')
                    <x-form-error :message="$message"></x-form-error>
                @enderror

                <!-- Template -->
                <div class="mt-6" x-data x-init="function() {
                    CodeMirror.fromTextArea(
                        document.querySelector('#content'),
                        {
                            lineNumbers: true,
                            indentUnit: 4
                        }
                    )}">
                    <label for="content" class="block pl-1 font-semibold text-gray-700">
                        Content
                    </label>
                    <textarea name="content" id="content" class="border-2">name: Laravel
laravel: master</textarea>
                    <span class="block pl-1 text-sm text-gray-500">Required.</span> 
                </div>

                @error('content')
                    <x-form-error :message="$message"></x-form-error>
                @enderror

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
