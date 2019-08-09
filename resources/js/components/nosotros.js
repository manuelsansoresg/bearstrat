$(function () { // wait for document ready
    if ( $(".nosotros").length > 0 ) {
        AOS.init();
        animate(200, "linea1");
        animate(200, "linea2");
        animate(200, "linea3");
        animate(200, "linea4");
    }
    $('.js-tilt').tilt({
        axis: x
    })
});
