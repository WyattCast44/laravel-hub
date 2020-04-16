@extends('packages.show.layout')

@section('package-page')

    <div class="p-6 md:p-10 markdown-body">
        @if ($package->parsed_readme == null)
            Readme still parsing
        @else
            {!! $package->parsed_readme !!}            
        @endif
    </div>

@endsection