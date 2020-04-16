require('./ace-lib');

document.addEventListener("turbolinks:load", function () {

    let element = document.querySelector("#ace-editor");

    if (element != null) {

        window.editor = ace.edit("ace-editor", {
            minLines: 5,
            maxLines: 100,
            autoScrollEditorIntoView: true
        });

        let YamlMode = ace.require("ace/mode/yaml").Mode;
        window.editor.getSession().setMode(new YamlMode());

        let readonly = element.getAttribute("data-ace-readonly");

        if (readonly == "true" || readonly == null) {
            window.editor.setReadOnly(true);
        } else {
            let content = document.querySelector("#content");

            content.value = window.editor.getSession().getValue();

            window.editor.getSession().on('change', function () {
                content.value = window.editor.getSession().getValue();
            });
        }

    }

});
