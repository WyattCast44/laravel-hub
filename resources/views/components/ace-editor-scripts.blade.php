@push('head')
    <script src="{{ asset('js/ace.js') }}" defer></script>
    @if ($type == "json")
        <script src="{{ asset('js/ace-json.js') }}" defer></script>
    @elseif($type = "yaml")
        <script src="{{ asset('js/ace-yaml.js') }}" defer></script>
    @endif
@endpush