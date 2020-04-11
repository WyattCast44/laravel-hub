@extends('packages.show.layout')

@section('package-page')

    <div class="px-10 py-10 markdown-body">
        @if ($package->parsed_readme == null)
            Readme still parsing
        @else
            {!! $package->parsed_readme !!}            
        @endif
    </div>

@endsection