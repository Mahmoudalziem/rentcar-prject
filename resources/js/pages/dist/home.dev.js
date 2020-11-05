"use strict";

$(document).ready(function () {
  ///Fancybox
  require('@fancyapps/fancybox/dist/jquery.fancybox'); //  Stylesheet


  require('@fancyapps/fancybox/dist/jquery.fancybox.min.css'); /// Fire FancyBox


  $("a.about-body-readmore").fancybox({
    'transitionIn': 'elastic',
    'transitionOut': 'elastic',
    'speedIn': 600,
    'speedOut': 200,
    'overlayShow': true
  }); /// slider Owl Carousel

  $('#home-slider').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    margin: 0,
    lazyLoad: true,
    nav: false,
    dots: 1,
    slideSpeed: 800,
    smartSpeed: 500,
    autoHeight: !0,
    mouseDrag: !0,
    touchDrag: !0,
    responsiveClass: !0,
    items: 1,
    responsive: {
      0: {
        items: 1,
        autoHeight: !0,
        mouseDrag: !1,
        touchDrag: !0
      },
      576: {
        items: 1
      }
    }
  }); //// MixItUp

  var mixitup = require('mixitup');

  var mixer = mixitup(".feature-container-body"); //// slider car Images

  $('.body-image').each(function () {
    $(this).owlCarousel({
      loop: true,
      autoplay: false,
      autoplayTimeout: 4000,
      margin: 0,
      lazyLoad: true,
      nav: true,
      dots: false,
      slideSpeed: 800,
      smartSpeed: 500,
      autoHeight: !0,
      mouseDrag: !0,
      touchDrag: !0,
      responsiveClass: !0,
      items: 1,
      responsive: {
        0: {
          items: 1,
          autoHeight: !0,
          mouseDrag: !1,
          touchDrag: !0
        },
        576: {
          items: 1
        }
      }
    });
  }); /// Testmonials Slider

  $('#testmonials').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000,
    margin: 20,
    nav: false,
    dots: 1,
    slideSpeed: 800,
    smartSpeed: 500,
    autoHeight: !0,
    mouseDrag: !0,
    touchDrag: !0,
    responsiveClass: !0,
    items: 2,
    responsive: {
      0: {
        items: 1,
        autoHeight: !0,
        mouseDrag: !1,
        touchDrag: !0
      },
      576: {
        items: 2
      }
    }
  }); /// Parteners Slider

  $('#Our_Parteners').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000,
    margin: 60,
    nav: false,
    dots: false,
    slideSpeed: 800,
    smartSpeed: 500,
    autoHeight: !0,
    mouseDrag: !0,
    touchDrag: !0,
    responsiveClass: !0,
    items: 5,
    responsive: {
      0: {
        items: 1,
        autoHeight: !0,
        mouseDrag: !1,
        touchDrag: !0
      },
      576: {
        items: 3
      },
      800: {
        items: 5
      }
    }
  }); //// Counter

  $(".counter").counterUp({
    delay: 10,
    time: 1000
  });
});