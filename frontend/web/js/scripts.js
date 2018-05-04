//alert('Hello');
//$('.container').append('<p>SHOW!!!</p>')

$('.btn-success').on('click', function () {
    $.ajax({
        method: "POST",
        url: "searchResult",
        data: $('#test-form').data(),
    })
        .done(function(data) {
             alert(data);
            window.location.href = 'nonregistered';
        });
});