$('#create-button').on("click", function (event) {
    event.preventDefault();
    $('#myModal').modal('show');
    var url = $(this).attr('href');
    send(url)
});

$('body').on("click", ".update-button", function (event) {
    event.preventDefault();
    $('#myModal').modal('show');
    var url = $(this).attr('href');
    send(url);
});

$('body').on("click", ".view-button", function (event) {
    event.preventDefault();
    $('#myModal').modal('show');
    var url = $(this).attr('href');
    send(url);
});

$('body').on("click", ".cart-button", function (event) {
    event.preventDefault();
    $('#myModal').modal('show');
    var url = $(this).attr('href');
    send(url);
});

function send(_url, formData = null) {
    $.ajax({
        url: _url,
        method: 'POST',
        data: formData,
        dataType: 'json',
        success: function (data) {
            console.log(data);
            if (data.status == false) {
                $('#modal-content').html(data.content);
                $('#save-button').on("click", function (event) {
                    event.preventDefault();

                    var form = $('#create-form').serialize();
                    send(_url, form)
                });

            } else {
                $.pjax.reload({container:"#prl-pjax"});
                $('#myModal').modal('hide');
            }


        }
    })

}