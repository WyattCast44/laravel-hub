@extends('layouts.app')

@section('content')

<div class="container flex mx-auto my-16">

    <div class="flex-1 px-10 py-10 mr-8 bg-white border border-solid rounded-lg shadow">
    
        <h2 class="mb-6 text-3xl font-semibold text-gray-700 font-header">{{ $package->display_name }}</h2>

        <div class="markdown-body">
            {{-- {!! GitDown::parseAndCache($package->meta['readme'], $seconds = 300) !!} --}}
        </div>
            
    </div>

    <div class="w-3/12">
        
        <div class="flex-1 px-10 py-10 bg-white border border-solid rounded-lg shadow">

            <form action="{{ route('app.packages.favorites.store', ['vendor' => $package->vendor, 'package' => $package]) }}" method="post">
                @csrf
                <button type="submit" class="block w-full py-3 font-semibold text-center text-white bg-red-500 rounded hover:no-underline hover:shadow hover:bg-red-600">
                    Favorite 🔥
                </button>
            </form>

        </div>

    </div>

</div>

{{-- <div class="container mx-auto my-16">

    Show
    - Readme
    - GitHub stats
    - Hub favorites
    - View count
    - Packagist/NPM download count
    - install command(s)
    - repo links
    - download links

</div> --}}

@endsection
