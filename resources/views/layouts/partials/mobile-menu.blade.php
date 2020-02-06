<nav class="sm:block md:hidden absolute top-0 left-0 right-0 bottom-0 bg-gray-300 z-50 flex flex-col justify-center items-center text-xl">
    <a href="{{ route('index') }}" class="block w-full mx-10 text-center py-2">Home</a>
    <a href="{{ route('app.packages.index') }}" class="block w-full mx-10 text-center py-2">Packages</a>
    <a href="{{ route('app.templates.index') }}" class="block w-full mx-10 text-center py-2">Templates</a>
    <a href="{{ route('search') }}" class="block w-full mx-10 text-center py-2">Search</a>
    <a href="{{ route('auth.login') }}" class="block w-full mx-10 text-center py-2">Login/Register</a>
</nav>