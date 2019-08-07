$(function () { // wait for document ready
    if ( $(".nosotros").length > 0 ) {
        AOS.init();

    }
    $('.js-tilt').tilt({
        axis: x
    })
});
