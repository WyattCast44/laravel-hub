@extends('layouts.app')

@section('content')

@include('partials.yaml-editor-scripts')

<div class="container mx-auto my-16 flex">

    <div class="bg-white rounded-lg py-10 px-10 border-solid border shadow flex-1 mr-8">
    
        <h2 class="text-3xl font-semibold font-header mb-6 text-gray-700">{{ $template->display_name }}</h2>

        <div class="markdown-body">

            <!-- YAML Code Block -->
            <div 
                id="editor" 
                class="resize-y form-textarea my-2 block w-full bg-gray-200 placeholder-gray-600" 
                style="min-height: 250px" 
                data-lpignore="true"
            >{{  $template->content }}</div>

        </div>
            
    </div>

    <div class="w-3/12">
        
        <div class="bg-white rounded-lg py-10 px-10 border-solid border shadow flex-1">

            @auth
                @if (auth()->user()->hasFavorited($template))
                    <form action="{{ route('app.templates.favorites.delete', $template) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="rounded bg-red-500 text-white font-semibold w-full py-3 block text-center hover:no-underline hover:shadow hover:bg-red-600">
                            Unfavorite
                        </button>
                    </form>
                @else
                    <form action="{{ route('app.templates.favorites.store', $template) }}" method="post">
                        @csrf
                        <button type="submit" class="rounded bg-red-500 text-white font-semibold w-full py-3 block text-center hover:no-underline hover:shadow hover:bg-red-600">
                            Favorite 🔥
                        </button>
                    </form>
                @endif
            @endauth

        </div>

    </div>

</div>

@push('footer')
<script>

    document.addEventListener("DOMContentLoaded", function () {

        window.editor = ace.edit("editor", {
            minLines: 2,
            maxLines: 100,
            autoScrollEditorIntoView: true               
        });

        let YamlMode = ace.require("ace/mode/yaml").Mode;
        window.editor.getSession().setMode(new YamlMode());
        window.editor.setReadOnly(true);

    });

</script>
@endpush

@endsection
