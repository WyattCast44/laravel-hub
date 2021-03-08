@extends('packages.show.layout')

@section('package-page')

    <div class="p-6 overflow-scroll prose md:p-10 markdown-body md:overflow-auto prose-red max-w-none">
        @if ($package->parsed_readme == null)
            Readme still parsing
        @else
            {!! $package->parsed_readme !!}            
        @endif
    </div>

@endsection