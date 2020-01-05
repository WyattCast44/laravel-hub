@extends('layouts.app')

@section('content')

<div class="container mx-auto my-16" style="max-width: 1000px">
    
    <div class="bg-white rounded-lg py-10 px-10 border-solid border shadow">
        
        <h2 class="text-3xl font-semibold font-header mb-6 text-gray-700">Submit Your Package</h2>

        <div class="">
            <div class="flex -mx-2">

                <div class="w-1/3 px-2">
                    <a href="#" class="flex flex-col items-center py-6 justify-center rounded shadow border-solid border bg-white hover:bg-red-100 hover:no-underline">
                        @svg('edit', 'block h-8')
                        <span class="block font-semibold">
                            Submit Manually
                        </span>
                    </a>
                </div>

                <div class="w-1/3 px-2">
                    <a href="#" class="flex flex-col items-center py-6 justify-center rounded shadow border-solid border bg-white hover:bg-red-100 hover:no-underline">
                        @svg('github', 'block h-8')
                        <span class="block font-semibold">
                            Import from GitHub
                        </span>
                    </a>
                </div>

                {{-- <div class="w-1/3 px-2">
                    <div class="bg-gray-400 h-12">Submit Multiple</div>
                </div> --}}

            </div>
        </div>

        {{-- <form action="">
            <label class="block">
                <span class="text-gray-700 block font-semibold">Display Name</span>
                <input class="form-input mt-1 block w-full my-3" placeholder="Laravel Avengers Package...">
                <span class="text-sm text-gray-600 block">Required. This will show when users are searching the package page</span>
            </label>              
        </form> --}}

    </div>

</div>

@endsection
