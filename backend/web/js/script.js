$(document).ready(function () {
    let confirm = $('.confirm');
    let del = $('.delete');
    let conf = $('.confirm_page');
    let r_upd = $('.confirm_rielr_update');
    let r_del = $('.confirm_rielr_delete');

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

    r_upd.on('submit', function () {
        $.ajax({
            method: "POST",
            url: "updates",
            data: $(this).serialize()
        })  .error(function () {
            alert('false');
        })
            .done(function(data) {
                alert(data);
            });
    });

    r_del.on('click', function () {
        $.ajax({
            method: "POST",
            url: "deletes",
            data: r_del.data()
        })
            .done(function(data) {
                alert(data);
            });
    });

    conf.on('submit', function () {
        window.location.href = 'http://crystalittest.com.ua/admin/update/';
    })

});