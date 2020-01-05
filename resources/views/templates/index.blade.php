@extends('layouts.app')

@section('content')

<div class="container mx-auto my-16 flex">

    <div class="w-2/12">
        
        <div class="mr-8">
            <a href="{{ route('app.templates.create') }}" class="mb-5 rounded bg-red-500 text-white font-semibold w-full py-3 block text-center hover:no-underline hover:shadow hover:bg-red-600">
                Create Template
            </a>
    
            <nav>
    
            </nav>
        </div>

    </div>

    <div class="flex-1 bg-green-200">

        <div class="w-full flex items-end justify-between mb-8">

            <div>
                Filter
            </div>


            <div>
                Search
            </div>

        </div>
        Body
    </div>

</div>

@endsection
