var editor_config = {
    path_absolute: "{{ URL::to('/') }}/",
    selector: "textarea",
    plugins: ["advlist autolink lists link image charmap print preview hr anchor pagebreak", "searchreplace wordcount visualblocks visualchars code fullscreen", "insertdatetime nonbreaking save table contextmenu directionality", "emoticons template paste textcolor colorpicker textpattern"],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link imageupload",
    relative_urls: false,
    height: 320,
    entity_encoding : "HTML",
    setup: function (editor) {
        initImageUpload(editor);
    }
};
function initImageUpload(editor) {
    // create input and insert in the DOM
    var inp = $('<input id="tinymce-uploader" type="file" name="pic" accept="image/*" style="display:none">');
    $(editor.getElement()).parent().append(inp);

    // add the image upload button to the editor toolbar
    editor.addButton('imageupload', {
        text: '',
        icon: 'image',
        onclick: function (e) { // when toolbar button is clicked, open file select modal
            inp.trigger('click');
        }
    });

    // when a file is selected, upload it to the server
    inp.on("change", function (e) {
        uploadFile($(this), editor);
    });
}

function uploadFile(inp, editor) {
    var input = inp.get(0);
    var data = new FormData();
    data.append('image', input.files[0]);
    var url = "http://localhost:8000/admin/upload/image";
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: url,
        type: 'POST',
        data: data,
        processData: false, // Don't process the files
        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
        success: function (data, textStatus, jqXHR) {
            editor.insertContent('<img class="content-img" src="http://localhost:8000/' + data + '"/>');
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert(errorThrown + textStatus);
            if (jqXHR.responseText) {
                errors = JSON.parse(jqXHR.responseText).errors
                alert('Error uploading image: ' + errors.join(", ") + '. Make sure the file is an image and has extension jpg/jpeg/png.');
            }
        }
    });
}
tinymce.init(editor_config); 