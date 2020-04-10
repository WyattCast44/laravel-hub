@extends('packages.show.layout')

@section('package-page')

    <form action="{{ $package->route('resync') }}" method="POST">
        
        @csrf

        <button type="submit">Resync</button>

    </form>

@endsection