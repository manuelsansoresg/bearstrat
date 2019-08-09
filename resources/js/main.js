

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

require('./components/home');
require('./components/waves');
require('./components/como_trabajamos');
require('./components/nosotros');

