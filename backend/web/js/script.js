// $(document).ready(function () { $("#content").cleditor(); });
// $(document).ready(function () { $("#title").cleditor(); });

$(document).ready(function () {



    let confirm = $('.confirm');
    let del = $('.delete');
    let conf = $('.confirm_page');
    let r_upd = $('.confirm_rielr_update');
    let r_del = $('.confirm_rielr_delete');
    let u_conf = $('.confirm_user');
    let u_del = $('.delete_user');
    let deact = $('.deactive');

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

    deact.on('click', function () {
        $.ajax({
            method: 'POST',
            url: 'deactive',
            data: deact.data()
        }).done(function (data) {
            window.location.href = "registered";
        });
    });

    u_del.on('click', function () {
        $.ajax({
           method: 'POST',
            url: 'delete',
            data: u_del.data()
        }).done(function (data) {
            console.log(data);
        });
    });

    u_conf.on('click', function (event) {
        form = u_conf.data('button');
        addEventListener('click', u_conf, function () {
            console.log(form);
        })
            console.log(event);
        $.ajax({
            method: "POST",
            url: "confirm",
            data: $('.user_form_' + form).serialize()
        }).done(function(data, form) {
                 alert(form);
            });
        debugger
        return false;
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

    r_upd.on('click', function () {
        $.ajax({
            method: "POST",
            url: "rieltor/updates",
            data: $('form').serialize()
        })  .error(function () {
            alert('false');
        })
            .done(function(data) {
               // alert(data);
            });
        return false;
    });

    r_del.on('click', function () {
        $.ajax({
            method: "POST",
            url: "rieltor/deletes",
            data: r_del.data()
        })
            .done(function(data) {
                alert(data);
            });
        return false;
    });

    conf.on('submit', function () {
        window.location.href = 'http://crystalittest.com.ua/admin/update/';
    })

});