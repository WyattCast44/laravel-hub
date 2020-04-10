@extends('templates.show.layout')

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