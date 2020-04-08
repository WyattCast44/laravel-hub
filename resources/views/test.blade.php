@extends('layouts.app')

@section('content')

    <div class="container mx-auto my-16">

        <div class="w-3/4 markdown-body">
            {!! $html !!}
        </div>

    </div>

@endsection
