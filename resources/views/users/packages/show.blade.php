@extends('users.layout-new')

@section('user-page')

@forelse ($user->packages as $package)
    pac
@empty
    @include('users.packages.partials.no-packages')
@endforelse

@endsection
