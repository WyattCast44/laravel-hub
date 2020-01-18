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
                            <span class="ml-1 text-xl">&triangledown;</span>
                        </button>     

                        <div x-show="open" x-on:click.away="open = false" class="absolute shadow-lg border border-solid right-0 rounded-lg bg-white w-48 flex flex-col pb-2" style="top:38px">

                            <a href="{{ route('app.users.show', auth()->user()) }}" class="tracking-tighter text-gray-900 hover:no-underline px-4 py-3 border-b border-solid break-words">
                                <span class="text-sm text-gray-500 block">Signed in as</span>
                                {{ auth()->user()->name }}
                            </a>

                            <a href="{{ route('app.users.packages.show', auth()->user()) }}" class="px-4 py-1 hover:bg-gray-200 hover:no-underline">
                                My Packages
                            </a>

                            <a href="{{ route('app.users.templates.show', auth()->user()) }}" class="px-4 py-1 hover:bg-gray-200 hover:no-underline">
                                My Templates
                            </a>

                            <a href="{{ route('app.settings.index') }}" class="px-4 py-1 hover:bg-gray-200 hover:no-underline">
                                Settings
                            </a>
                            
                            <form action="{{ route('auth.logout') }}" method="post" class="block">
                                @csrf
                                <button type="submit" class="px-4 py-1 hover:bg-gray-200 text-left text-red-500 w-full">Logout</button>
                            </form>
                            
                        </div>

                    </div>
                    
                @else    
                    
                    <a href="{{ route('auth.login') }}" class="leading-tight text-lg hover:no-underline hover:text-red-700">
                        Login/Register
                    </a>

                @endauth

            </div>

        </div>
    
    </nav>

    @include('partials.flash')
    
</header>