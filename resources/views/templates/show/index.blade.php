@extends('templates.show.layout')

@section('template-page')

    <x-ace-editor-scripts type="yaml"></x-ace-editor-scripts>

    <div 
    id="ace-editor" 
    class="block w-full my-2 placeholder-gray-600 bg-gray-200 resize-y form-textarea" 
    style="min-height: 250px"
    data-ace-lang="yaml"
    data-ace-min-lines="5"
    data-ace-max-lines="100"
    data-ace-readonly="true"
    >{{  $template->content }}</div>

@endsection