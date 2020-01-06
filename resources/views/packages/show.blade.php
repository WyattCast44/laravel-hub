@extends('layouts.app')

@section('content')

<div class="container mx-auto my-16 flex">

    <div class="bg-white rounded-lg py-10 px-10 border-solid border shadow flex-1 mr-8">
    
        <h2 class="text-3xl font-semibold font-header mb-6 text-gray-700">{{ $package->display_name }}</h2>

        <div class="flex">
            Stuff
        </div>

    </div>

    <div class="w-3/12">
        
        <div class="bg-white rounded-lg py-10 px-10 border-solid border shadow flex-1">

            Sidebar

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
