@extends('layouts.app')

@section('content')

@include('partials.yaml-editor')

<div class="container mx-auto my-16 flex">

    <div class="bg-white rounded-lg py-10 px-10 border-solid border shadow flex-1 mr-8">
    
        <h2 class="text-3xl font-semibold font-header mb-6 text-gray-700">{{ $template->display_name }}</h2>

        <div class="markdown-body">

            <!-- YAML Code Block -->
            <div 
                id="yaml-editor" 
                class="resize-y form-textarea my-2 block w-full bg-gray-200 placeholder-gray-600" 
                style="min-height: 250px" 
                data-lpignore="true"
            >{{  $template->content }}</div>

        </div>
            
    </div>

    <div class="w-3/12">
        
        <div class="bg-white rounded-lg py-10 px-10 border-solid border shadow flex-1">

            Sidebar

        </div>

    </div>

</div>

@push('footer')
    <script>

        document.addEventListener("turbolinks:load", function() {
            var editor = ace.edit("yaml-editor");
            var YamlMode = ace.require("ace/mode/yaml").Mode;
            editor.session.setMode(new YamlMode());
            editor.setReadOnly(true);
        })
        
    </script>
@endpush

@endsection
