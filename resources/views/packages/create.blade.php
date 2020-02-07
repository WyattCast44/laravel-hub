@extends('layouts.app')

@section('content')

<div class="container mx-auto my-16" style="max-width: 1000px">
    
    <div class="bg-white rounded-lg py-10 px-10 border-solid border shadow">
        
        <div class="border-b pb-2">
            <h2 class="text-3xl font-semibold font-header mb-2 text-gray-700">Submit Your Package</h2>
            <p class="text-gray-600">
                Share your package with the community. Please only submit packages that you own or created.
            </p>
        </div>

        <div>
    
            <!-- Form -->
            <div class="mt-8">
    
                <form action="{{ route('app.packages.store') }}" method="post">
                
                    @csrf

                    <!-- Github Url -->
                    <label class="block mt-3">
                        <span class="text-gray-700 font-semibold">1. GitHub URL</span>
                        <input type="url" class="form-input mt-3 block w-3/4" placeholder="https://github.com/user/repo" name="url" required autofocus>
                    </label>

                    @error('url')
                        @include('partials.error')
                    @enderror

                    <!-- Type -->
                    <div class="mt-6">

                        <span class="text-gray-700 font-semibold">2. Package Type</span>
                    
                        <div class="mt-3">

                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio border-gray-600 text-red-500" name="type" value="php">
                                <span class="ml-2">PHP</span>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input type="radio" class="form-radio border-gray-600 text-red-500" name="type" value="js">
                                <span class="ml-2">Javascript</span>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input type="radio" class="form-radio border-gray-600 text-red-500" name="type" value="other">
                                <span class="ml-2">Other</span>
                            </label>

                        </div>

                    </div>

                    @error('type')
                        @include('partials.error')
                    @enderror

                    <div class="mt-8 border-t pt-5 flex justify-end items-center">

                        <a href="{{ route('app.packages.index') }}" class="mr-4">Cancel</a>

                        <button class="rounded bg-red-500 text-white font-semibold px-4 py-3 text-center hover:no-underline hover:shadow hover:bg-red-600">
                            Submit Package
                        </button>            

                    </div>

                </form>
    
            </div>

        </div>
        
    </div>

</div>

@endsection
