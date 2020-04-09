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


{{-- @auth
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
@endauth --}}
