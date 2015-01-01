// Where should the countdown count to?
var countTo = '01/15/2015';

/** End configuration **/

$('.countdown').downCount({
    date: countTo
});

$('.show-details').click(function (evt) {
    evt.preventDefault();

    $('.welcome').fadeOut(600, function () {
        $('.details')
            .show()
            .find('>:not(.delay-load)')
            .animate({'opacity': 1}, 600, function () {
                $('.details > .delay-load')
                    .delay(300)
                    .animate({'opacity': 1});
            });
    });
});

$('.hide-details').click(function (evt) {
    evt.preventDefault();

    $('.details').fadeOut(600, function () {
        $('.details p').css('opacity', 0);
        $('.details').hide();

        $('.welcome').fadeIn(600);
    });
});

$('#subscribe').ajaxForm(function (response) {
    if (response.success) {
        $('#subscribe').fadeOut(500, function () {
            $('#signed-up').fadeIn();
        });
    } else {
        // Naughty! Not a valid email.
        $('#validation-error')
            .find('span').text(response.error)
            .parent()
            .fadeIn();
    }
});
