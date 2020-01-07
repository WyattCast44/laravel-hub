@extends('layouts.app')

@section('content')

<div class="container mx-auto my-16 flex" style="max-width: 1000px">

    <div class="w-2/12 mr-5">
        
        <nav class="inline-block mt-5">

            <a href="#" class="hover:no-underline flex items-center font-semibold text-red-700 tracking-tight">
                @svg('user', 'mr-2') Profile
            </a>
            
            <a href="#" class="hover:no-underline flex items-center font-semibold mt-3 tracking-tight text-gray-700 hover:text-red-500">
                @svg('lock', 'mr-2') Security
            </a>

            <a href="#" class="hover:no-underline flex items-center font-semibold mt-3 tracking-tight text-gray-700 hover:text-red-500">
                @svg('tool', 'mr-2') API
            </a>

        </nav>

    </div>

    <div class="flex-1">
        
        <div class="bg-white rounded-lg py-10 px-10 border-solid border shadow">
    
            Name
    
        </div>
        
    </div>

</div>

@endsection
