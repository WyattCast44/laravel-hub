@extends('templates.show.layout')

@push('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.59.2/codemirror.min.css" integrity="sha512-MWdvo/Qqcf4pY1ecQUB1uBn0qLp19U/qJ1Rpp2BDZeuBA7YsFEwkvqR/+aG4BroPiAYDunKJ6X8R/Pmdt3p7oA==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.59.2/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.59.2/mode/yaml/yaml.min.js" integrity="sha512-+aXDZ93WyextRiAZpsRuJyiAZ38ztttUyO/H3FZx4gOAOv4/k9C6Um1CvHVtaowHZ2h7kH0d+orWvdBLPVwb4g==" crossorigin="anonymous"></script>
@endpush

@section('template-page')

    <div x-data x-init="function() {
        CodeMirror.fromTextArea(
            document.querySelector('#content'),
            {
                lineNumbers: true,
                indentUnit: 4
            }
        )}">
        <textarea name="content" id="content" class="border-2">{{  $template->content }}</textarea>
    </div>

@endsection