@extends('layouts.app')

@section('content')

<div class="container mx-auto my-16"
     style="max-width: 1000px">

    <div class="px-10 py-10 bg-white border border-solid rounded-lg shadow">

        <div class="pb-2 border-b">
            <h2 class="mb-2 text-3xl font-semibold text-gray-700 font-header">Submit Your Package
            </h2>
            <p class="text-gray-600">
                Share your package with the community. Please only submit packages that you own or
                created.
            </p>
        </div>

        <div>

            <!-- Form -->
            <div class="mt-8">

                <form action="{{ route('app.packages.store') }}" method="post">

                    @csrf

                    <div>
                        <span class="block mb-2 font-semibold text-gray-700">1. GitHub URL</span>
                        <div class="flex mt-1 rounded-md shadow-sm">
                            <input type="url" class="block w-full mt-1 form-input" placeholder="https://github.com/user/repo" name="url">
                        </div>
                    </div>

                    @error('url')
                        @include('partials.error')
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
                                <span class="ml-2">Packagist/Composer</span>
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
                        @include('partials.error')
                    @enderror

                    <div class="flex items-center justify-between pt-5 mt-8 border-t">

                        <div>
                            <a href="{{ route('app.packages.multiple.create') }}"
                               class="mr-4">Submit Multiple</a>
                        </div>

                        <div>
                            <a href="{{ route('app.packages.index') }}"
                               class="mr-4">Cancel</a>

                            <button
                                    class="px-4 py-3 font-semibold text-center text-white bg-red-500 rounded hover:no-underline hover:shadow hover:bg-red-600">
                                Submit Package
                            </button>
                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection