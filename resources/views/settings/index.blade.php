@extends('layouts.app')

@section('content')

<div class="container flex mx-auto my-4 md:my-16" style="max-width: 1000px">

    <div class="flex-1 mx-4">

        @include('settings.partials.profile')
        
        <div class="hidden sm:block">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>
        
        @include('settings.partials.notifications')
        
    </div>

</div>

@endsection
