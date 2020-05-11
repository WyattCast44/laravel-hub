@if ($paginator->hasPages())

    <div class="flex items-center justify-between px-4 py-3 bg-white sm:px-6">

        <!-- Mobile previous/next -->
        <div class="flex justify-between flex-1 sm:hidden">
            
            @if(!$paginator->onFirstPage())
                <button type="button" wire:click="previousPage"
                class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700"
                rel="previous"
                aria-label="@lang('pagination.previous')">
                    Previous
                </button>
            @endif
            
            @if($paginator->hasMorePages())
                <button type="button" wire:click="nextPage"
                class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700"
                rel="next"
                aria-label="@lang('pagination.next')">
                    Next
                </button>
            @endif
            
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">

            {{-- <div>
                <p class="text-sm leading-5 text-gray-700">
                    Showing
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    to
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    of
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    results
                </p>
            </div> --}}

            <div>
                <span class="relative z-0 inline-flex shadow-sm">
                    
                    <!-- Previous Button -->
                    <button type="button" wire:click="previousPage"
                            class="relative inline-flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-l-md hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 hover:no-underline ">
                        <svg class="w-5 h-5"
                            fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                    
                        {{-- "Three Dots" Separator --}}
                        {{-- @if (is_string($element))
                            <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-700 bg-white border border-gray-300" aria-disabled="true">
                                {{ $element }}
                            </span>
                        @endif --}}

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <button class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white bg-gray-200 border border-gray-300 cursor-not-allowed hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 hover:no-underline" aria-current="page">
                                        {{ $page }}
                                    </button>
                                @else
                                    <button type="button" wire:click="gotoPage({{ $page }})" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 hover:no-underline hover:bg-gray-100">
                                        {{ $page }}
                                    </button>
                                @endif
                            @endforeach
                            
                        @endif
                        
                    @endforeach
                    
                    <!-- Next Button -->
                    <button type="button" wire:click="nextPage" rel="next"
                            class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-r-md hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 hover:no-underline">
                        <svg class="w-5 h-5"
                            fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                </span>
            </div>

        </div>
    </div>
@endif