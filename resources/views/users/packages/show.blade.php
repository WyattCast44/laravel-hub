@extends('users.layout')

@section('page')

@forelse ($user->packages as $package)
    pac
@empty
    @include('users.packages.partials.no-packages')
@endforelse

@endsection
