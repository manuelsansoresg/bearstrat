

/*grafica final*/
if ( $("#grafica2").length > 0 ) {
    var controller = new ScrollMagic.Controller();
    var scene      = new ScrollMagic.Scene({triggerElement: "#grafica2", duration: 200, reverse: false})
        .addTo(controller)
        .reverse(false)
        .on("enter", function (e) {
            if (e.type == "enter") {
                animate(200, "grafica2-svg");
            }

        })
}
/*grafica final*/

if ( $(".section-mask").length > 0 ) {

    animate(200, "svg_bienes");
    /*animate(200, "bs");
    animate(200, "financieras");
    animate(200, "negocios");*/
}
require('./components/home');
require('./components/waves');
require('./components/como_trabajamos');
require('./components/nosotros');

