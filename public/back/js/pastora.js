function formActions(block)
{
    $('input, select, button, a, textarea, checkbox').each(function () {
        $(this).attr('disabled', block);
    });
}

function blockForm()
{
    formActions(true);
}

function unblockForm()
{
    formActions(false);
}

function successAlert(msg)
{
    swal("¡Excelente!", msg, "success");
}

function errorAlert(msg)
{
    swal("¡Ups, algo salio mal!", msg, "error");
}

function modalErrors(errorsArray)
{
    var message;

    message = "<p>Haz cometido los siguientes errores:</p><ul>";

    for(var k in errorsArray.errors){
        message += "<li> " + errorsArray.errors[k] + "</li>";
    }

    message += "</ul>";

    swal({
        title: "!Ups, algo salio mal!",
        text: message,
        html: true,
        type: 'error'
    });
}

function asset() {
    var baseUrl = window.location.origin+"/u-erre/public/admin/dashboard/";
    return baseUrl;
}

/**
 * This method make the ajax request to promise
 * @param url full url to make request
 * @param data all data to sent on request
 * @param typeRequest the verb http to make the request
 * @return return the ajax object like promise
 */
function fetchData(url, data, typeRequest) {
    var type = 'POST';
    if(typeRequest) {
        type = typeRequest;
    }
    return $.ajax({
        method: type,
        data: data,
        processData: false,
        contentType: false,
        dataType: 'json',
        url: url,
        beforeSend: function () {
            blockForm();
        }
    }).always(function() {
        unblockForm();
    });
}
