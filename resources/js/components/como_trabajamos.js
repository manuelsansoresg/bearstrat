$(function () { // wait for document ready
    if ( $(".como-trabajamos").length > 0 ) {
        AOS.init();

        // Init ScrollMagic
        var controller = new ScrollMagic.Controller();
        // get all slides
        var slides = ["#slide01", "#slide02", "#slide03"];

        // get all headers in slides that trigger animation
        var headers = ["#slide01 header", "#slide02 header", "#slide03 header"];

        // get all break up sections
        var breakSections = ["#cb01", "#cb02", "#cb03"];
        // SCENE 2
        // change color of the nav for dark content blocks
        breakSections.forEach(function (breakSection, index) {

            // number for highlighting scenes
            var breakID = $(breakSection).attr('id');

            // make scene
            var breakScene = new ScrollMagic.Scene({
                triggerElement: breakSection, // trigger CSS animation when header is in the middle of the viewport
                offset: -95 // offset triggers the animation 95 earlier then middle of the viewport, adjust to your liking
            })
                .setClassToggle('#'+breakID, 'is-active') // set class to active slide
                .on("enter", function (event) {
                    /*$('nav').attr('class','is-light');*/
                    animate(200, "linea");
                    animate(200, "linea2");
                })
                .addTo(controller);
        });


    }
});
