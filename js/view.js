var photo = '';

function preload() {
    //получаем значение полей формы
    var form = {
        name      : $("#name").val(),
        email     : $("#email").val(),
        name_text : $("#name_text").val(),
        status    : $("#status").val(),
        text      : $("#text").val(),
        photo     : photo
    };

    renderHtml(form);
}

//отресует html с переданными данными
function renderHtml(form) {
    var html = '<div class="col s12 m12" id="render">'
                    + '<div class="card blue-grey darken-1">'
                        + '<div class="card-content white-text">'
                            + '<div class="row">'
                                + '<div class="col s6">'
                                    + '<img class="activator" src="' + form.photo + '" width="320" height="240"/>'
                                + '</div>'
                                + '<div class="col s6">'
                                    + '<h6>Имя пользвателя: ' + form.name + '</h6>'
                                    + '<h6>Email: ' + form.email + '</h6>'
                                    + '<h6>Статус: ' + form.status + '</h6>'
                                + '</div>'
                            + '</div>'
                            + '<span class="card-title">' + form.name_text + '</span>'
                            + '<p>' + form.text + '</p>'
                        + '</div>'
                    + '</div>'
                + '</div>';

    $('#render').remove();
    $('#preview').append(html);
}

//получаем фото и проверяем вормат
function getPhoto(photo) {

    var files = photo.files;

    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        if ( !file.type.match(/image\/(jpeg|jpg|png|gif)/) ) {
            alert( 'Фотография должна быть в формате jpg, png или gif' );
            continue;
        }
        preview(files[i]);
    }

    this.value = '';
 }

 function preview(file) {
     var reader = new FileReader();
     reader.addEventListener('load', function(event) {
         photo =  event.target.result;
     });
     reader.readAsDataURL(file);
 }