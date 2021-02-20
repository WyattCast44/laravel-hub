@extends('users.layout-new')

@section('user-page')

    <div class="overflow-hidden bg-white sm:rounded-md">
        
        <ul>
            
            @forelse ($user->packages as $package)
                @include('packages.partials.single')
            @empty
                @include('users.packages.partials.no-packages')
            @endforelse

        </ul>

    </div>

@endsection
