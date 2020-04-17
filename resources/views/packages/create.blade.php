@extends('layouts.app')

@section('content')

<div class="container mx-auto my-4 md:my-16" style="max-width: 1000px">

    <form action="{{ route('app.packages.store') }}" method="post">
    
        <div class="mx-2 overflow-hidden bg-white rounded-lg shadow md:mx-0">
        
            <!-- Header -->
            <div class="px-4 py-5 bg-white border-b border-gray-200 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">
                    Submit Your Package
                </h3>
                <p class="mt-1 text-sm leading-5 text-gray-500">
                    Share your package with the community. Please only submit packages that you own or
                    created.
                </p>
            </div>
        
            <!-- Form -->
            <div class="px-4 py-5 sm:p-6">

                @csrf

                <div>
                    <span class="block mb-2 font-semibold text-gray-700">1. GitHub URL</span>
                    <div class="flex mt-1 rounded-md shadow-sm">
                        <input type="url" class="block w-full mt-1 form-input" placeholder="https://github.com/user/repo" name="url" autocomplete="off">
                    </div>
                </div>

                @error('url')
                    <x-form-error :message="$message"></x-form-error>
                @enderror

                <!-- Type -->
                <div class="mt-6">

                    <span class="font-semibold text-gray-700">2. Package Repository</span>

                    <div class="mt-3">

                        <label class="inline-flex items-center">
                            <input type="radio"
                                class="text-red-500 border-gray-600 form-radio"
                                name="type"
                                value="packagist">
                            <span class="ml-2">Packagist</span>
                        </label>
                    
                        <label class="inline-flex items-center ml-6">
                            <input type="radio"
                                class="text-red-500 border-gray-600 form-radio"
                                name="type"
                                value="npm">
                            <span class="ml-2">NPM/Yarn</span>
                        </label>
                    

                    </div>

                </div>

                @error('type')
                    <x-form-error :message="$message"></x-form-error>
                @enderror
        
            </div>
                
            <!-- Footer -->
            <div class="flex items-center justify-between px-4 py-3 border-t border-gray-200 sm:px-6">
                
                <a href="{{ route('app.packages.index') }}" class="mr-4">Cancel</a>

                <button class="px-4 py-2 font-semibold text-center text-white bg-red-500 rounded hover:no-underline hover:shadow hover:bg-red-600">
                    Submit Package
                </button>

            </div>
            
        </div>
            
    </form>

</div>

@endsection