require('./ace-lib');

document.addEventListener("turbolinks:load", function () {

    let element = document.querySelector("#ace-editor");

    if (element == null) {
        return;
    }

    let data = element.dataset;

    // console.log('here', element, data);

    window.editor = ace.edit("ace-editor", {
        minLines: (data.aceMinLines) ? data.aceMinLines : 5,
        maxLines: (data.aceMaxLines) ? data.aceMaxLines : 100,
        autoScrollEditorIntoView: true
    });

    if (data.aceLang == "json") {
        window.editor.session.setMode(new (ace.require("ace/mode/json")).Mode());
    } else if (data.aceLang == "yaml") {
        window.editor.session.setMode(new (ace.require("ace/mode/yaml")).Mode());
    }

    let readonly = (data.aceReadonly == "true") ? true : false;

    if (readonly) {
        window.editor.setReadOnly(true);

        return
    }

    let syncsContent = (data.aceContent) ? true : false;

    if (syncsContent) {
        let content = document.querySelector(data.aceContent);

        content.value = window.editor.getSession().getValue();

        window.editor.getSession().on('change', function () {
            content.value = window.editor.getSession().getValue();
        });
    }
});
