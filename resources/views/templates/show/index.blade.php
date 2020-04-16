@extends('templates.show.layout')

@section('template-page')

    @include('partials.yaml-editor-scripts')

    <!-- YAML Code Block -->
    <div 
    id="ace-editor" 
    class="block w-full my-2 placeholder-gray-600 bg-gray-200 resize-y form-textarea" 
    style="min-height: 250px" 
    data-ace-readyonly="true"
    data-lpignore="true"
    >{{  $template->content }}</div>

@endsection