<select class="block w-full" onchange="navigate(this)">
    {{ $slot }}
</select>

@push('footer')
    <script>
        function navigate(el) {
            window.location.href = el.value;
        }
    </script>
@endpush