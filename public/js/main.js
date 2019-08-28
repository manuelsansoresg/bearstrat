/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/components/como_trabajamos.js":
/*!****************************************************!*\
  !*** ./resources/js/components/como_trabajamos.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  // wait for document ready
  if ($(".como-trabajamos").length > 0) {
    AOS.init(); // Init ScrollMagic

    var controller = new ScrollMagic.Controller(); // get all slides

    var slides = ["#slide01", "#slide02", "#slide03"]; // get all headers in slides that trigger animation

    var headers = ["#slide01 header", "#slide02 header", "#slide03 header"]; // get all break up sections

    var breakSections = ["#cb01", "#cb02", "#cb03"]; // SCENE 2
    // change color of the nav for dark content blocks

    breakSections.forEach(function (breakSection, index) {
      // number for highlighting scenes
      var breakID = $(breakSection).attr('id'); // make scene

      var breakScene = new ScrollMagic.Scene({
        triggerElement: breakSection,
        // trigger CSS animation when header is in the middle of the viewport
        offset: -95 // offset triggers the animation 95 earlier then middle of the viewport, adjust to your liking

      }).setClassToggle('#' + breakID, 'is-active') // set class to active slide
      .on("enter", function (event) {
        /*$('nav').attr('class','is-light');*/
        animate(200, "linea");
        animate(200, "linea2");
      }).addTo(controller);
    });
  }
});

/***/ }),

/***/ "./resources/js/components/home.js":
/*!*****************************************!*\
  !*** ./resources/js/components/home.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  // wait for document ready
  if ($(".section-mask").length > 0) {
    var controller = new ScrollMagic.Controller();
    var sectionList = new TimelineMax();
    sectionList.staggerFrom('.list li', 1, {
      x: '-50%',
      autoAlpha: 0,
      ease: Power0.easeNone
    }, "-1").staggerTo('.list li', 1, {
      x: '+50%',
      autoAlpha: 0,
      ease: Power0.easeNone
    }, "-1");
    var ourScene = new ScrollMagic.Scene({
      triggerElement: '.section2 .pin-wrapper',
      triggerHook: 0.5,
      duration: '100%'
    }).setTween(sectionList).addTo(controller);
    /**
     * area texto final
     * */

    /*var lastTitles = new TimelineMax();
    lastTitles
        .staggerFrom('.titles h2', 1, { cycle:{x: ["50%","-50%"]}, autoAlpha: 0, ease: Power0.easeNone }, "-1")
    var ourScene = new ScrollMagic.Scene({
        triggerElement: '.section-mask',
        triggerHook: 0.5,
        duration: '50%'
     })
        .setTween(lastTitles)
        .addTo(controller);*/

    /**
     * area de pins
     * */

    /* var bigTitle = new TimelineMax();
     bigTitle
         .from('.title', 0.2, { y: '50%', autoAlpha: 0, ease: Power0.easeNone }, 0)
         .to('.title', 1, { y: '+50%', autoAlpha: 0, ease: Power0.easeNone }, 0.2);*/

    var pinIntroScene = new ScrollMagic.Scene({
      triggerElement: '.section1 .pin-wrapper',
      triggerHook: 0,
      duration: '100%'
    }).setPin('.section1 .pin-wrapper', {
      pushFollowers: false
    }) //.setTween(bigTitle)
    .addTo(controller); // pin 2

    var pinIntroScene = new ScrollMagic.Scene({
      triggerElement: '.section2 .pin-wrapper',
      triggerHook: 1
    }).setPin('.section2 .pin-wrapper', {
      pushFollowers: false
    }).addTo(controller); // pin 3

    var pinIntroScene = new ScrollMagic.Scene({
      triggerElement: '.section3 .pin-wrapper',
      triggerHook: 1
    }).setPin('.section3 .pin-wrapper', {
      pushFollowers: false
    }).addTo(controller);
    /* parallax */

    var parallaxTl = new TimelineMax();
    parallaxTl.from('.content-wrapper', 0.4, {
      autoAlpha: 0,
      ease: Power0.easeNone
    }, 0.4).from('.bcg', 2, {
      y: '-50%',
      ease: Power0.easeNone
    }, 0);
    var slideParallaxScene = new ScrollMagic.Scene({
      triggerElement: '.bcg-parallax',
      triggerHook: 1,
      duration: '100%'
    }).setTween(parallaxTl).addTo(controller);
    /*grafica*/

    var images = [];
    var path1 = '/img/Grafica_1/';

    for (var i = 0; i < 159; i++) {
      images.push(path1 + i + '.png');
    }

    var obj = {
      curImg: 0
    };
    var set_duration = '100%';
    var tween = TweenMax.to(obj, 0.5, {
      curImg: images.length - 1,
      // animate propery curImg to number of images
      roundProps: "curImg",
      // only integers so it can be used as an array index
      repeat: 0,
      // repeat 3 times
      immediateRender: true,
      // load first image automatically
      ease: Linear.easeNone,
      // show every image the same ammount of time
      onUpdate: function onUpdate() {
        $("#myimg").attr("src", images[obj.curImg]); // set the image source
      }
    }); // init controller

    var controller = new ScrollMagic.Controller(); // build scene

    var scene = new ScrollMagic.Scene({
      triggerElement: ".grafica",
      duration: set_duration
    }).setTween(tween).addTo(controller);
    /*grafica*/

    /* area texto movimiento 3d*/

    $('.landing__conocenos-text').tilt({
      maxGlare: .5
    });
    AOS.init();
    /* area texto grafica*/

    /*var $tText = $('#tText');
    var $year = $('.yearText');
    var yearChange = new TimelineMax()
        .to(".year-loader", 1, {
                rotation:'0',
                onStart: function () {
                  /!*  $tText.html("1");
                    $year.html("year")*!/
                    $('#seccion1').hide();
                    $('#seccion2').show();
                    $('#seccion2').addClass('animated animatedFadeInUp fadeInUp');
                    $('.yearCounter').addClass('position-absolute');
                    $('#section').css({ height: "100vh"});
                },
                onReverseComplete: function () {
                   /!* $tText.html("1");
                    $year.html("year")*!/
                    $('#seccion1').addClass('animated animatedFadeInUp fadeInUp');
                    $('#seccion1').show();
                    $('#seccion2').hide();
                 }
            }
        )
      var yearCount = new ScrollMagic.Scene({
        triggerElement:'#section',
        triggerHook:0,
        duration:'100%'
    })
          .setTween(yearChange)
         .setPin('.yearCounter', {pushFollowers: false})
        .addTo(controller);*/
    // init

    var controller = new ScrollMagic.Controller(); // define movement of panels

    var wipeAnimation = new TimelineMax().fromTo(".panel.grafica-content2", 1, {
      y: "100%"
    }, {
      y: "0%",
      ease: Linear.easeNone
    }); // in from left

    /*.fromTo(".panel.grafica-content3",    1, {y:  "100%"}, {y: "0%", ease: Linear.easeNone})  // in from right*/
    // create scene to pin and link animation

    new ScrollMagic.Scene({
      triggerElement: "#pinContainer",
      triggerHook: "onLeave",
      duration: "50%"
    }).setPin("#pinContainer").setTween(wipeAnimation).addTo(controller);
  }
});

/***/ }),

/***/ "./resources/js/components/nosotros.js":
/*!*********************************************!*\
  !*** ./resources/js/components/nosotros.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  // wait for document ready
  if ($(".nosotros").length > 0) {
    AOS.init();
    animate(200, "linea1");
    animate(200, "linea2");
    animate(200, "linea3");
    animate(200, "linea4");
  }

  $('.js-tilt').tilt({
    axis: x
  });
});

/***/ }),

/***/ "./resources/js/components/waves.js":
/*!******************************************!*\
  !*** ./resources/js/components/waves.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  // wait for document ready
  if ($(".como-trabajamos").length > 0) {
    var waves = new SineWaves({
      el: document.getElementById('waves'),
      speed: -8,
      width: function width() {
        return $(window).width();
      },
      height: function height() {
        //return $(window).height();
        return 300;
      },
      rotate: 180,
      ease: 'SineOut',
      waves: [{
        timeModifier: 1,
        lineWidth: 3,
        amplitude: 120,
        wavelength: 200,
        segmentLength: 20
      }, {
        timeModifier: 1,
        lineWidth: 2,
        amplitude: 150,
        wavelength: 120
      }, {
        timeModifier: 1,
        lineWidth: 1,
        amplitude: -150,
        wavelength: 50,
        segmentLength: 10
      }, {
        timeModifier: 1,
        lineWidth: 0.5,
        amplitude: -100,
        wavelength: 100,
        segmentLength: 10
      }],
      initialize: function initialize() {},
      resizeEvent: function resizeEvent() {
        var gradient = this.ctx.createLinearGradient(0, 0, this.width, 0);
        gradient.addColorStop(0, "rgba(219, 173, 70, 80)");
        gradient.addColorStop(1, "rgba(219, 173, 70, 0.5)");
        var index = -1;
        var length = this.waves.length;

        while (++index < length) {
          this.waves[index].strokeStyle = gradient;
        } // Reset values back to 0


        index = void 0;
        length = void 0;
        gradient = void 0;
      }
    });
  }
});

/***/ }),

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/*grafica final*/
if ($("#grafica2").length > 0) {
  var controller = new ScrollMagic.Controller();
  var scene = new ScrollMagic.Scene({
    triggerElement: "#grafica2",
    duration: 200,
    reverse: false
  }).addTo(controller).reverse(false).on("enter", function (e) {
    if (e.type == "enter") {
      animate(200, "grafica2-svg");
    }
  });
}
/*grafica final*/


if ($(".section-mask").length > 0) {
  animate(200, "svg_bienes");
  /*animate(200, "bs");
  animate(200, "financieras");
  animate(200, "negocios");*/
}

__webpack_require__(/*! ./components/home */ "./resources/js/components/home.js");

__webpack_require__(/*! ./components/waves */ "./resources/js/components/waves.js");

__webpack_require__(/*! ./components/como_trabajamos */ "./resources/js/components/como_trabajamos.js");

__webpack_require__(/*! ./components/nosotros */ "./resources/js/components/nosotros.js");

/***/ }),

/***/ 1:
/*!************************************!*\
  !*** multi ./resources/js/main.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\laragon\www\bearstrat\resources\js\main.js */"./resources/js/main.js");


/***/ })

/******/ });