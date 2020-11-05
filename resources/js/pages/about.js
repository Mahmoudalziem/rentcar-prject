$(document).ready(function() {
    require("@fancyapps/fancybox/dist/jquery.fancybox");
    //  Stylesheet
    require("@fancyapps/fancybox/dist/jquery.fancybox.min.css");
    /// Fire FancyBox
    $("a.video").fancybox({
        transitionIn: "elastic",
        transitionOut: "elastic",
        speedIn: 600,
        speedOut: 200,
        overlayShow: true
    });

    $("a.about-body-readmore").fancybox({
        transitionIn: "elastic",
        transitionOut: "elastic",
        speedIn: 600,
        speedOut: 200,
        overlayShow: true
    });

    /// Parteners Slider

    $("#Our_Parteners").owlCarousel({
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
    });

    // Counter

    $(".counter").counterUp({
        delay: 10,
        time: 1000
    });
})
