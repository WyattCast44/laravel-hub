<form action="{{ route('auth.logout') }}" method="post">
    @csrf
    <button type="submit" class="leading-tight tracking-wide font-semibold text-lg text-red-500 hover:underline">Logout</button>
</form>