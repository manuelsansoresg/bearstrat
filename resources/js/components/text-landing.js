
/*****************************************************************************/
$(document).ready(function(){
    if ( $(".section-mask").length > 0 ) {
        var controller = new ScrollMagic.Controller();

        /**
         *  area de lista
         * */
            // build a scene
        var sectionList = new TimelineMax();
        sectionList
            .staggerFrom('.list li', 1, { x: '-50%', autoAlpha: 0, ease: Power0.easeNone }, "-1")
            .staggerTo('.list li', 1, { x: '+50%', autoAlpha: 0, ease: Power0.easeNone }, "-1")
        var ourScene = new ScrollMagic.Scene({
            triggerElement: '.section2 .pin-wrapper',
            triggerHook: 0.5,
            duration: '100%'

        })
            .setTween(sectionList)
            .addTo(controller);

        /**
         * area texto final
         * */
        var lastTitles = new TimelineMax();
        lastTitles
            .staggerFrom('.titles h2', 1, { cycle:{x: ["50%","-50%"]}, autoAlpha: 0, ease: Power0.easeNone }, "-1")
        var ourScene = new ScrollMagic.Scene({
            triggerElement: '.section2 .pin-wrapper',
            triggerHook: 0.5,
            duration: '50%'

        })
            .setTween(lastTitles)
            .addTo(controller);

        /**
         * area de pins
         * */
        var bigTitle = new TimelineMax();
        bigTitle
            .from('.title', 0.2, { y: '-50%', autoAlpha: 0, ease: Power0.easeNone }, 0)
            .to('.title', 1, { y: '+50%', autoAlpha: 0, ease: Power0.easeNone }, 0.2);
        var pinIntroScene = new ScrollMagic.Scene({
            triggerElement: '.section1 .pin-wrapper',
            triggerHook: 0,
            duration: '100%'
        })
            .setPin('.section1 .pin-wrapper', { pushFollowers: false })
            .setTween(bigTitle)
            .addTo(controller);
        // pin 2
        var pinIntroScene = new ScrollMagic.Scene({
            triggerElement: '.section2 .pin-wrapper',
            triggerHook: 1

        })
            .setPin('.section2 .pin-wrapper', { pushFollowers: false })
            .addTo(controller);

        // pin 3
        var pinIntroScene = new ScrollMagic.Scene({
            triggerElement: '.section3 .pin-wrapper',
            triggerHook: 1

        })
            .setPin('.section3 .pin-wrapper', { pushFollowers: false })
            .addTo(controller);
        /* parallax */
        var parallaxTl = new TimelineMax();
        parallaxTl
            .from('.content-wrapper', 0.4, {autoAlpha: 0, ease: Power0.easeNone}, 0.4)
            .from('.bcg', 2, {y: '-50%', ease: Power0.easeNone}, 0)
        ;

        var slideParallaxScene = new ScrollMagic.Scene({
            triggerElement: '.bcg-parallax',
            triggerHook: 1,
            duration: '100%'
        })
            .setTween(parallaxTl)
            .addTo(controller);
        /* grafica1 dd*/
        // pin texto 1

        /*var lastTitles = new TimelineMax();
        lastTitles
            .to('.grafica1__description', 1, {y: "-100%", opacity: 1})
        var ourScene = new ScrollMagic.Scene({
            triggerElement: '.pin-grafica',
            triggerHook: 0.5,
            duration: '100%'

        })
            .setTween(lastTitles)
            .addTo(controller);*/

        /*document.querySelectorAll('.textBlock').forEach(function(element, index){
            var ourScene = new ScrollMagic.Scene({
                triggerElement: element,
                duration: '100%',
                triggerHook: 0.5,
                reverse: true,
            })

                .on('start', function(){
                    TweenMax.to(element, 1,{left: 0, opacity: 1})


                })
                .on('end', function(){
                    var x1 = controller.info("scrollDirection");
                    TweenMax.to(element, 1, {left: "-20%", opacity: 0})
                    if(x1 == 'REVERSE'){
                        TweenMax.to(element, 1,{left: 0, opacity: 1})

                    }
                })
                .addIndicators()
                .addTo(controller)
        });*/

        /**/

        var images = [];
        var path1 =  '/img/Grafica_1/';
        for (let i = 0; i < 159 ; i++) {
            images.push(path1+i+'.png');
        }
        var obj = {curImg: 0};
        var set_duration = 350;
        var tween = TweenMax.to(obj, 8,
            {
                curImg: images.length - 1,	// animate propery curImg to number of images
                roundProps: "curImg",				// only integers so it can be used as an array index
                repeat: 0,									// repeat 3 times
                immediateRender: true,			// load first image automatically
                ease: Linear.easeNone,			// show every image the same ammount of time

                onUpdate: function () {
                    $("#myimg").attr("src", images[obj.curImg]); // set the image source
                }
            }
        );
        // init controller
        var controller = new ScrollMagic.Controller();

        // build scene
        var scene = new ScrollMagic.Scene({triggerElement: "#imagesequence", duration: set_duration})
            .setTween(tween)

            .addIndicators()
            .addTo(controller);



        /*var controller = new ScrollMagic.Controller({
            globalSceneOptions: {
                triggerHook: 'onLeave',
                duration: 700
            }
        });*/
        /*new ScrollMagic.Scene({
            triggerElement: '.pin-grafica'
        })
            .setPin('.pin-grafica', {pushFollowers: false})
            .addIndicators()
            .addTo(controller);*/

        /* grafica1 */

        /* texto en movimiento */
        $('.landing__conocenos-text').tilt({
            scale: 1.2,
            maxGlare: .5
        });

        AOS.init();
        /* /texto en movimiento */

    }

    /* texto peunultima seccion*/
    // init
    // init
    var controller = new ScrollMagic.Controller({
        globalSceneOptions: {
            triggerHook: 'onLeave',
            duration: "200%" // this works just fine with duration 0 as well
            // However with large numbers (>20) of pinned sections display errors can occur so every section should be unpinned once it's covered by the next section.
            // Normally 100% would work for this, but here 200% is used, as Panel 3 is shown for more than 100% of scrollheight due to the pause.
        }
    });

    // get all slides
    var slides = document.querySelectorAll(".p-section.panel");

    // create scene for every slide
    for (var i=0; i<slides.length; i++) {
        new ScrollMagic.Scene({
            triggerElement: slides[i]
        })
            .setPin(slides[i], {pushFollowers: false})
            .addIndicators() // add indicators (requires plugin)
            .addTo(controller);
    }
});

/*****************************************************************************/
