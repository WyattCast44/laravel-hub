<header>

    <!-- Color badn -->
    <div class="h-1 bg-red-500 w-full"></div>

    <!-- Main nav -->
    <nav class="bg-white py-6 shadow">
    
        <div class="container mx-auto flex items-center justify-between px-4 md:px-0">
            
            <!-- Left nav -->
            <div class="flex items-center">
                
                <a href="/" class="text-red-500 font-bold text-2xl font-header leading-tight hover:no-underline tracking-tighter">
                    📦 Laravel Hub
                </a>

                <div class="ml-5 hidden md:block">

                    <a href="{{ route('app.packages.index') }}" class="text-lg hover:no-underline hover:text-red-500 text-gray-600">
                        Packages
                    </a>

                    <a href="{{ route('app.templates.index') }}" class="text-lg hover:no-underline hover:text-red-500 mx-2 text-gray-600">
                        Templates
                    </a>

                    <a href="{{ route('search') }}" class="text-lg hover:no-underline hover:text-red-500 text-gray-600">
                        Search
                    </a>
                    
                </div>

            </div>

            <!-- Right nav -->
            <div class="flex items-center">

                @auth

                    <div class="flex items-center relative" x-data="{ open: false }">

                        <button class="text-red-500 flex items-center" x-on:click="open = true">
                            <img src="{{ auth()->user()->avatar }}" alt="{{ auth()->user()->name }}" class="rounded-lg w-8 h-8 shadow">
                            <span class="ml-1 text-lg md:text-xl">&triangledown;</span>
                        </button>     

                        <div x-show="open" x-on:click.away="open = false" class="absolute shadow-lg border border-solid right-0 rounded-lg bg-white w-48 flex flex-col pb-2 z-50" style="top:38px">

                            <a href="{{ route('app.users.show', auth()->user()) }}" class="tracking-tighter text-gray-900 hover:no-underline px-4 py-3 border-b border-solid break-words">
                                <span class="text-sm text-gray-500 block">Signed in as</span>
                                {{ auth()->user()->name }}
                            </a>

                            <a href="{{ route('app.users.packages.show', auth()->user()) }}" class="text-gray-800 px-4 py-1 hover:bg-red-500 hover:no-underline hover:text-white">
                                My Packages
                            </a>
                            
                            <a href="{{ route('app.users.templates.show', auth()->user()) }}" class="text-gray-800 px-4 py-1 hover:bg-red-500 hover:no-underline hover:text-white">
                                My Templates
                            </a>

                            <a href="{{ route('app.users.favorites.show', auth()->user()) }}" class="text-gray-800 px-4 py-1 hover:bg-red-500 hover:no-underline hover:text-white">
                                My Favorites
                            </a>

                            <a href="{{ route('app.settings.index') }}" class="text-gray-800 px-4 py-1 hover:bg-red-500 hover:no-underline hover:text-white">
                                Settings
                            </a>
                            
                            <form action="{{ route('auth.logout') }}" method="post" class="block">
                                @csrf
                                <button type="submit" class="px-4 py-1 hover:bg-red-500 hover:no-underline hover:text-white text-left w-full">Logout</button>
                            </form>
                            
                        </div>

                    </div>
                    
                @else    
                    
                    <a href="{{ route('auth.login') }}" class="leading-tight text-lg hover:no-underline hover:text-red-700">
                        Login/Register
                    </a>

                @endauth

                
                <!-- Mobile Nav -->
                <div x-data="{ open: false }">
                    <button class="block md:hidden" x-on:click="{ open = true }">
                        @svg('menu', 'fill-current text-red-500')
                    </button>
                    
                    <nav class="absolute top-0 left-0 right-0 bottom-0 bg-gray-300 z-50 flex flex-col justify-center items-center text-xl" x-show="open">
                        <a href="{{ route('index') }}" class="block w-full mx-10 text-center py-2">Home</a>
                        <a href="{{ route('app.packages.index') }}" class="block w-full mx-10 text-center py-2">Packages</a>
                        <a href="{{ route('app.templates.index') }}" class="block w-full mx-10 text-center py-2">Templates</a>
                        <a href="{{ route('search') }}" class="block w-full mx-10 text-center py-2">Search</a>
                        <a href="{{ route('auth.login') }}" class="block w-full mx-10 text-center py-2">Login/Register</a>
                        <button class="absolute top-0 mx-8 my-2 p-2 text-2xl leading-none right-0" x-on:click="{ open = false }">
                            @svg('x', 'fill-current text-red-500')
                        </button>
                    </nav>
                </div>

            </div>

        </div>
    
    </nav>

    @include('partials.flash')

    @include('layouts.partials.mobile-menu')
    
</header>