@extends('layouts.app')

@section('content')

<div class="container flex mx-auto my-16" style="max-width: 1000px">

    <div class="flex-1 mx-4">

        @include('settings._partials.update-account')
        
    </div>

</div>

@endsection
