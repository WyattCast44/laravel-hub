@extends('layouts.app')

@section('content')

<div class="container mx-auto my-16">
    
    <div class="mx-2 bg-white rounded-lg shadow md:mx-0">
        <div class="px-4 py-5 sm:px-6">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                        {{ $package->name }}
                    </h2>
                    <div class="flex flex-col mt-1 sm:mt-0 sm:flex-row sm:flex-wrap">

                        <!-- Official Package Badge -->
                        @if($package->official)
                            <div class="flex items-center mt-2 text-sm leading-5 text-gray-500 sm:mr-6">
                                @svg('check-circle', 'w-5 h-5 mr-1.5 text-green-500')
                                Official Laravel Package
                            </div>
                        @endif

                        <!-- Star Count -->
                        <div class="flex items-center mt-2 text-sm leading-5 text-gray-500 sm:mr-6">
                            @svg('star', 'w-5 h-5 mr-1.5 text-yellow-400')
                            {{ number_format($package->stars_count) }} stars
                        </div>
                        
                    </div>
                </div>
                <div class="flex mt-5 lg:mt-0 lg:ml-4">
                    <span class="hidden rounded-md shadow-sm sm:block">
                        <button type="button"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:text-gray-800 active:bg-gray-50">
                            <svg class="w-5 h-5 mr-2 -ml-1 text-gray-500"
                                fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                            Edit
                        </button>
                    </span>
            
                    <span class="hidden ml-3 rounded-md shadow-sm sm:block">
                        <button type="button"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:text-gray-800 active:bg-gray-50">
                            <svg class="w-5 h-5 mr-2 -ml-1 text-gray-500"
                                fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z"
                                    clip-rule="evenodd" />
                            </svg>
                            View
                        </button>
                    </span>
            
                    <span class="rounded-md shadow-sm sm:ml-3">
                        <button type="button"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700">
                            <svg class="w-5 h-5 mr-2 -ml-1"
                                fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            Publish
                        </button>
                    </span>
            
                    <span x-data="{ open: false }"
                        class="relative ml-3 rounded-md shadow-sm sm:hidden">
                        <button @click="open = !open"
                                type="button"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:shadow-outline focus:border-blue-300">
                            More
                            <svg class="w-5 h-5 ml-2 -mr-1 text-gray-500"
                                fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
            
                        <div x-show="open"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 w-48 mt-2 -mr-1 origin-top-right rounded-md shadow-lg">
                            <div class="py-1 bg-white rounded-md shadow-xs">
                                <a href="#"
                                class="block px-4 py-2 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out hover:bg-gray-100 focus:outline-none focus:bg-gray-100">Edit</a>
                                <a href="#"
                                class="block px-4 py-2 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out hover:bg-gray-100 focus:outline-none focus:bg-gray-100">View</a>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
            
        </div>
        
        <!-- Tabs -->
        <div class="px-4 py-2 bg-white border-t border-b">
            <div>
                <div class="sm:hidden">
                  <select class="block w-full form-select">
                    <option>My Account</option>
                    <option>Company</option>
                    <option selected>Team Members</option>
                    <option>Billing</option>
                  </select>
                </div>
                <div class="hidden sm:block">
                  <nav class="flex">
                    <a href="#" class="px-3 py-2 text-sm font-medium leading-5 text-gray-500 rounded-md hover:text-gray-700 focus:outline-none focus:text-indigo-600 focus:bg-indigo-50 hover:no-underline hover:bg-red-50">
                      Read Me
                    </a>
                    <a href="#" class="px-3 py-2 ml-4 text-sm font-medium leading-5 text-gray-500 rounded-md hover:text-gray-700 focus:outline-none focus:text-indigo-600 focus:bg-indigo-50 hover:no-underline hover:bg-red-50">
                      Screenshots
                    </a>
                    <a href="#" class="px-3 py-2 ml-4 text-sm font-medium leading-5 text-indigo-700 bg-indigo-100 rounded-md focus:outline-none focus:text-indigo-800 focus:bg-indigo-200 hover:no-underline hover:bg-red-50">
                      Stats
                    </a>
                    <a href="#" class="px-3 py-2 ml-4 text-sm font-medium leading-5 text-gray-500 rounded-md hover:text-gray-700 focus:outline-none focus:text-indigo-600 focus:bg-indigo-50 hover:no-underline hover:bg-red-50">
                      Billing
                    </a>
                  </nav>
                </div>
              </div>
        </div>
        
        <!-- Content -->
        <div class="px-4 py-5 bg-gray-50 sm:p-6">
            
           Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, minus tempora. Veritatis quam ipsam doloribus provident fugiat laborum iure vero autem, quo distinctio esse quisquam adipisci quia, voluptates deleniti ducimus?

        </div>
    </div>

</div>

@endsection
