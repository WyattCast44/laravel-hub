<header>

    <!-- Color badge -->
    <div class="w-full h-1 bg-red-500"></div>

    <!-- Main nav -->
    <div class="py-6 bg-white shadow">
    
        <div class="container flex items-center justify-between px-4 mx-auto md:px-0">
            
            <!-- Left nav -->
            <div class="flex items-center">
                
                <a href="/" class="text-2xl font-bold leading-tight tracking-tighter text-red-500 font-header hover:no-underline" title="Go to the home page">
                    📦 Laravel Hub
                </a>

                <nav class="items-center hidden ml-5 space-x-4 md:flex">

                    <a href="{{ route('app.packages.index') }}" class="text-lg text-gray-700 transition-all duration-100 hover:no-underline hover:text-red-600" title="View the packages page">
                        Packages
                    </a>

                    <a href="{{ route('app.templates.index') }}" class="text-lg text-gray-700 transition-all duration-100 hover:no-underline hover:text-red-600" title="View the templates page">
                        Templates
                    </a>

                    <a href="{{ route('search') }}" class="text-lg text-gray-700 transition-all duration-100 hover:no-underline hover:text-red-600" title="View the search page">
                        Search
                    </a>
                    
                </nav>

            </div>

            <!-- Right nav -->
            <div class="flex items-center">

                <!-- Mobile Nav -->
                <div x-data="{ open: false }">
                    
                    <button class="block mr-3 md:hidden" x-on:click="{ open = true }" title="Open the mobile menu" aria-label="Open the mobile menu">
                        <x-icon-menu class="text-red-500 fill-current" />
                    </button>
                    
                    <nav 
                        x-cloak
                        x-show="open"
                        class="absolute top-0 bottom-0 left-0 right-0 z-50 flex flex-col items-center justify-center space-y-2 text-xl bg-gray-300">
                        
                        <a href="{{ route('index') }}" class="block w-full mx-10 text-center" title="Go to the home page">
                            Home
                        </a>
                        
                        <a href="{{ route('app.packages.index') }}" class="block w-full mx-10 text-center" title="View the packages page">
                            Packages
                        </a>
                        
                        <a href="{{ route('app.templates.index') }}" class="block w-full mx-10 text-center" title="View the templates page">
                            Templates
                        </a>
                        
                        <a href="{{ route('search') }}" class="block w-full mx-10 text-center" title="View the search page">
                            Search
                        </a>
                        
                        @auth
                            <form action="{{ route('auth.logout') }}" method="post" class="block w-full mx-10 text-center">
                                @csrf
                                <button type="submit" class="text-red-500" aria-label="Logout">Logout</a>
                            </form>
                        @else
                            <a href="{{ route('auth.login') }}" class="block w-full mx-10 text-center" title="Login/Register with Github">
                                Login/Register
                            </a>
                        @endauth

                        <button class="absolute top-0 right-0 p-2 mx-8 my-2 text-2xl leading-none" x-on:click="{ open = false }" title="Close the mobile menu" aria-label="Close the mobile menu">
                            <x-icon-x class="text-red-500 fill-current" />
                        </button>

                    </nav>
                    
                </div>            

                @auth

                    <div class="relative flex items-center" x-data="{ open: false }" x-on:keydown.escape="open=false">

                        <button class="flex items-center text-red-500" x-on:click="open = true" aria-label="Open the user profile menu" aria-label="Open the user profile menu">
                            <img src="{{ auth()->user()->avatar }}" alt="{{ auth()->user()->name }}'s avatar" class="w-8 h-8 rounded-lg shadow">
                            <span class="ml-1 text-lg transition-all duration-500 md:text-xl" x-bind:class="{ 'transform rotate-180': open }">&triangledown;</span>
                        </button>     

                        <div x-show="open" x-on:click.away="open = false" class="absolute right-0 z-50 flex flex-col w-48 pb-2 bg-white border border-solid rounded-lg shadow-lg" style="top:38px">

                            <a href="{{ route('app.users.show', auth()->user()) }}" class="px-4 py-3 tracking-tighter text-gray-900 break-words border-b border-solid hover:no-underline" title="Go to your profile page">
                                <span class="block text-sm text-gray-500">Signed in as</span>
                                {{ auth()->user()->name }}
                            </a>

                            <a href="{{ route('app.users.packages.show', auth()->user()) }}" class="px-4 py-1 text-gray-800 hover:bg-red-500 hover:no-underline hover:text-white" alt="View your packages page">
                                My Packages
                            </a>
                            
                            <a href="{{ route('app.users.templates.show', auth()->user()) }}" class="px-4 py-1 text-gray-800 hover:bg-red-500 hover:no-underline hover:text-white" title="View your templates page">
                                My Templates
                            </a>

                            <a href="{{ route('app.users.favorites.show', auth()->user()) }}" class="px-4 py-1 text-gray-800 hover:bg-red-500 hover:no-underline hover:text-white" title="View your favorites page">
                                My Favorites
                            </a>

                            <a href="{{ route('app.settings.index') }}" class="px-4 py-1 text-gray-800 hover:bg-red-500 hover:no-underline hover:text-white" title="View your setting page">
                                Settings
                            </a>
                            
                            <form action="{{ route('auth.logout') }}" method="post" class="block">
                                @csrf
                                <button type="submit" class="w-full px-4 py-1 text-left hover:bg-red-500 hover:no-underline hover:text-white" title="Logout" aria-label="Logout">
                                    Logout
                                </button>
                            </form>
                            
                        </div>

                    </div>
                    
                @else    
                    
                    <a href="{{ route('auth.login') }}" class="hidden text-lg leading-tight hover:no-underline hover:text-red-700 md:inline-block" title="Login/Register with Github" aria-label="Login/Register with Github">
                        Login/Register
                    </a>

                @endauth

            </div>

        </div>
    
    </div>

    @include('partials.flash')

</header>