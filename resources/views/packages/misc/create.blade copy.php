@extends('layouts.app')

@section('content')

<div class="container mx-auto my-16" style="max-width: 1000px">
    
    <div class="bg-white rounded-lg py-10 px-10 border-solid border shadow">
        
        <h2 class="text-3xl font-semibold font-header mb-6 text-gray-700">Submit Your Package</h2>

        <div>

            <!-- Selectors -->
            {{-- <div class="flex -mx-2">

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

            </div> --}}
    
            <!-- Form -->
            <div class="mt-8">
    
                <form action="{{ route('app.packages.store') }}" method="post">
                    @csrf
                
                    <ul class="" style="columns:2">

                        <li>
                            @foreach ($repos as $repo)

                                <div class="block"> 
                                    
                                    <label class="inline-flex items-center mb-2">
                                    <input type="checkbox" class="form-checkbox text-red-500 border-gray-400" name="repos[]" value="{{ $repo['full_name'] }}">
                                        <span class="ml-2 text-gray-700 align-middle">
                                            {{ $repo['full_name'] }}
                                            <a href="{{ $repo['html_url'] }}" class="" target="_blank">
                                                @svg('external-link', ' w-4')
                                            </a>
                                        </span>
                                    </label>
                                </div>
                                
                            @endforeach
                        </li>

                    </ul>

                    <button type="submit" class="mt-8">Submit</button>

                </form>
    
            </div>

        </div>
        

    </div>

</div>

@endsection
