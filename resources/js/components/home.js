$(function () { // wait for document ready
    if ( $(".section-mask").length > 0 ) {
        var controller = new ScrollMagic.Controller();
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
            triggerElement: '.section-mask',
            triggerHook: 0.5,
            duration: '50%'

        })
            .setTween(lastTitles)
            .addTo(controller);

        /**
         * area de pins
         * */
        /*var bigTitle = new TimelineMax();
        bigTitle
            .from('.title', 0.2, { y: '-50%', autoAlpha: 0, ease: Power0.easeNone }, 0)
            .to('.title', 1, { y: '+50%', autoAlpha: 0, ease: Power0.easeNone }, 0.2);*/
        var pinIntroScene = new ScrollMagic.Scene({
            triggerElement: '.section1 .pin-wrapper',
            triggerHook: 0,
            duration: '100%'
        })
            .setPin('.section1 .pin-wrapper', { pushFollowers: false })
           /* .setTween(bigTitle)*/
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
        /*grafica*/
        var images = [];
        var path1 =  '/img/Grafica_1/';
        for (let i = 0; i < 159 ; i++) {
            images.push(path1+i+'.png');
        }
        var obj = {curImg: 0};
        var set_duration = '100%';
        var tween = TweenMax.to(obj, 0.5,
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
        var scene = new ScrollMagic.Scene({triggerElement: ".grafica", duration: set_duration})
            .setTween(tween)
            .addIndicators()
            .addTo(controller);
        /*grafica*/



        /* area texto movimiento 3d*/
        $('.landing__conocenos-text').tilt({

            maxGlare: .5
        });

        AOS.init();

        /* area texto grafica*/


/*var yearChange = new TimelineMax()

    .to(".year-loader", 1, {
            rotation:'0',
            onStart: function () {
                /!*  $tText.html("1");
                  $year.html("year")*!/
                $('.seccion1').hide();
                $('.seccion2').show();
                $('.seccion2').addClass('animated animatedFadeInUp fadeInUp');
                $('.yearCounter').addClass('position-absolute');
                $('.section-grafica1').css({ height: "200vh"});



            },
            onReverseComplete: function () {
                /!* $tText.html("1");
                 $year.html("year")*!/
                $('.seccion1').addClass('animated animatedFadeInUp fadeInUp');
                $('.seccion1').show();
                $('.seccion2').hide();

            }
        }
    )
    .to(".year-loader", 1, {
        rotation:'100%',
        onStart: function () {

            $('.seccion3').show();
            $('.seccion2').hide();
            $('.seccion1').hide();


        },
        onReverseComplete: function () {
            $('.seccion3').hide();
        }
    }
)

var yearCount = new ScrollMagic.Scene({
    triggerElement:'.section-grafica1',
    triggerHook:0,
    duration:'200%'
})


    .setTween(yearChange)

    .addIndicators() // add indicators (requires plugin)
    .setPin('.yearCounter', {pushFollowers: false})
    .addTo(controller);*/

        /* area texto grafica*/

        /* area texto movimiento 3d*/
        /* area texto final*/
        // init



        var $tText = $('#tText');
        var $year = $('.yearText');
        var yearChange = new TimelineMax()
            .to(".year-loader", 1, {
                    rotation:'0',
                    onStart: function () {
                      /*  $tText.html("1");
                        $year.html("year")*/
                        $('#seccion1').hide();
                        $('#seccion2').show();
                        $('#seccion2').addClass('animated animatedFadeInUp fadeInUp');
                        $('.yearCounter').addClass('position-absolute');
                        $('#section').css({ height: "100vh"});
                    },
                    onReverseComplete: function () {
                       /* $tText.html("1");
                        $year.html("year")*/
                        $('#seccion1').addClass('animated animatedFadeInUp fadeInUp');
                        $('#seccion1').show();
                        $('#seccion2').hide();

                    }
                }
            )
            /*.to(".year-loader", 1, {
                    rotation:'100%',
                    onStart: function () {
                     /!*   $tText.html("2");
                        $year.html("years")*!/
                        $('#seccion2').show();
                    },
                    onReverseComplete: function () {
                        /!*$tText.html("1");*!/
                        $('#seccion1').hide();
                    }
                }
            )
            .to(".year-loader", 1, {
                    rotation:'360',
                    onStart: function () {
                        $tText.html("3");
                    },
                    onReverseComplete: function () {
                        /!*$tText.html("1");*!/
                    }
                }
            );*/

        var yearCount = new ScrollMagic.Scene({
            triggerElement:'#section',
            triggerHook:0,
            duration:'100%'
        })


            .setTween(yearChange)

            .addIndicators() // add indicators (requires plugin)
            .setPin('.yearCounter', {pushFollowers: false})
            .addTo(controller);



// define movement of panels
        /*var bigTitle = new TimelineMax();
        bigTitle
            .from('.title-slide-opacity', 0.2, { y: '-50%', autoAlpha: 0, ease: Power0.easeNone }, 0)
            .to('.title-slide-opacity', 1, { y: '+50%', autoAlpha: 0, ease: Power0.easeNone }, 0.2);
        var pinIntroScene = new ScrollMagic.Scene({
            triggerElement: '#pinContainer',
            triggerHook: 0,
            duration: '90%'
        })

            .setTween(bigTitle)
            .addTo(controller);

        var wipeAnimation = new TimelineMax()
            .fromTo(".p-section.panel2", 1, {y: "100%"}, {y: "0%", ease: Linear.easeNone})  // in from left
            .fromTo(".p-section.panel3",    1, {y:  "100%"}, {y: "0%", ease: Linear.easeNone})  // in from right


        // create scene to pin and link animation
        new ScrollMagic.Scene({
            triggerElement: "#pinContainer",
            triggerHook: "onLeave",
            duration: "90%"
        })
            .on('start', function(){
                TweenMax.to('.panel1', 1,{top: 0, opacity: 1})


            })
            .setPin("#pinContainer")
            .setTween(wipeAnimation)
            .addIndicators() // add indicators (requires plugin)
            .addTo(controller);*/

        // init
        var controller = new ScrollMagic.Controller();

        // define movement of panels
        var wipeAnimation = new TimelineMax()
            .fromTo(".panel.grafica-content2", 1, {y: "100%"}, {y: "0%", ease: Linear.easeNone})  // in from left
            /*.fromTo(".panel.grafica-content3",    1, {y:  "100%"}, {y: "0%", ease: Linear.easeNone})  // in from right*/


        // create scene to pin and link animation
        new ScrollMagic.Scene({
            triggerElement: "#pinContainer",
            triggerHook: "onLeave",
            duration: "50%"
        })
            .setPin("#pinContainer")
            .setTween(wipeAnimation)
            .addIndicators() // add indicators (requires plugin)
            .addTo(controller);

    }

});
