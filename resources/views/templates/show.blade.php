@extends('templates.layout-new')

@section('template-page')

@include('partials.yaml-editor-scripts')

<!-- YAML Code Block -->
<div 
id="editor" 
class="block w-full my-2 placeholder-gray-600 bg-gray-200 resize-y form-textarea" 
style="min-height: 250px" 
data-lpignore="true"
>{{  $template->content }}</div>

{{-- <div class="container flex flex-col mx-auto my-16 md:flex-row">

    <!-- Main Content -->
    <div class="flex-1 px-10 py-10 mr-8 bg-white border border-solid rounded-lg shadow">
    
        <h2 class="mb-6 text-3xl font-semibold text-gray-700 font-header">{{ $template->display_name }}</h2>

        <div class="markdown-body">

            <!-- YAML Code Block -->
            <div 
                id="editor" 
                class="block w-full my-2 placeholder-gray-600 bg-gray-200 resize-y form-textarea" 
                style="min-height: 250px" 
                data-lpignore="true"
            >{{  $template->content }}</div>

        </div>
            
    </div>

    <!-- Sidebar -->
    <div class="w-3/12">
        
        <div class="flex-1 px-10 py-10 bg-white border border-solid rounded-lg shadow">

            @auth
                @if (auth()->user()->hasFavorited($template))
                    <form action="{{ route('app.templates.favorites.delete', $template) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="block w-full py-3 font-semibold text-center text-white bg-red-500 rounded hover:no-underline hover:shadow hover:bg-red-600">
                            Unfavorite
                        </button>
                    </form>
                @else
                    <form action="{{ route('app.templates.favorites.store', $template) }}" method="post">
                        @csrf
                        <button type="submit" class="block w-full py-3 font-semibold text-center text-white bg-red-500 rounded hover:no-underline hover:shadow hover:bg-red-600">
                            Favorite 🔥
                        </button>
                    </form>
                @endif
            @endauth

        </div>

    </div>

</div> --}}

    @push('footer')
        <script>

            document.addEventListener("turbolinks:load", function() {
                
                window.editor = ace.edit("editor", {
                    minLines: 2,
                    maxLines: 100,
                    autoScrollEditorIntoView: true               
                });

                let YamlMode = ace.require("ace/mode/yaml").Mode;
                window.editor.getSession().setMode(new YamlMode());
                window.editor.setReadOnly(true);

            })

        </script>
    @endpush

@endsection
