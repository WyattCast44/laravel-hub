@extends('layouts.app')

@section('content')

<div class="container mx-auto my-16 flex" style="max-width: 1000px">

    <div class="flex-1 mx-4">

        @include('settings._partials.update-account')
        
    </div>

</div>

@endsection
