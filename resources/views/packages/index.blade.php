@extends('packages.layout')

@section('page')

    @foreach ($packages as $package)
        <div class="rounded  p-6 bg-white mb-3 shadow hover:shadow-md">
            <h3 class="text-lg font-semibold">
                <a href="{{ $package->route('show') }}">{{ $package->display_name }}</a>
                <span class="text-xs text-gray-600">{{ $package->vendor }}/{{ $package->name }}</span>
            </h3>
            <p class="my-3 text-gray-600">
                {{ $package->description }}
            </p>
            <p class="text-sm text-gray-500 my-2">
                Added by <a href="{{ route('app.users.show', $package->user) }}">{{ $package->user->username }}</a> {{ $package->created_at->diffForHumans() }}
            </p>
        </div>
    @endforeach

    <div class="mt-5 flex items-center justify-start text-sm">

        {{ $packages->links() }}

    </div>

@endsection
