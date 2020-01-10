@push('head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.7/ace.js" integrity="sha256-C7DTYRJLG+B/VEzHGeoPMw699nsTQYPAXHKXZb+q04E=" crossorigin="anonymous" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.7/mode-yaml.js" integrity="sha256-WgdHONNZD/4LA7nlYhFqXqAAvZL4U2vbXDo2g6rWv7s=" crossorigin="anonymous" defer></script>
@endpush

@push('footer')
    <script>

        document.addEventListener("turbolinks:load", function() {
            var editor = ace.edit("yaml-editor");
            var YamlMode = ace.require("ace/mode/yaml").Mode;
            editor.session.setMode(new YamlMode());
        })
        
    </script>
@endpush