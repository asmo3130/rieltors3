$(document).ready(function () {
    let confirm = $('.confirm');
    let del = $('.delete');
    let conf_page= $('.confirm_page');

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

    conf_page.on('click', function () {
        $.ajax({
            method: "POST",
            url: "delete",
            data: conf_page.data()
        })
            .done(function() {
                alert("dsgsg");
            });
    });
});