$(document).ready(function () {
    let confirm = $('.confirm');
    let del = $('.delete');

    confirm.on('click', function () {
        $.ajax({
            method: "POST",
            url: "confirm",
            data: confirm.data()
        })
            .done(function(data) {
               // alert(data);
                window.location.href = 'nonregistered';
            });
    });

    del.on('click', function () {
        $.ajax({
            method: "POST",
            url: "delete",
            data: del.data()
        })
            .done(function() {
                window.location.href = 'nonregistered';
            });
    });
});