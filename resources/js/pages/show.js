$(document).ready(function() {
    require("@fancyapps/fancybox/dist/jquery.fancybox");
    //  Stylesheet
    require("@fancyapps/fancybox/dist/jquery.fancybox.min.css");
    /// Fire FancyBox
    $("a.fancybox").fancybox({
        transitionIn: "elastic",
        transitionOut: "elastic",
        speedIn: 600,
        speedOut: 200,
        overlayShow: true
    });

    //// toolTip

    $('[data-toggle="tooltip"]').tooltip();

    ////// Social Js

    $("#shareIcons").jsSocials({
        url: window.location.href,
        text: "Share Course",
        showLabel: false,
        showCount: false,
        shareIn: "popup",
        shares: ["facebook", "linkedin", "twitter", "whatsapp"]
    });

    //// Rating Hover


    $(document).on("mouseenter", "div.rate-btn", function() {
            $(".rate-btn").removeClass("rate-btn-hover");

            var therate = $(this).attr("id");

            for (var i = therate; i >= 0; i--) {
                $(".btn-" + i).addClass("rate-btn-hover");
            }
        })
        .on("mouseleave", "div.rate-btn", function() {
            var therate = $(this).attr("id");

            for (var i = therate; i >= 0; i--) {
                $(".rate-btn").removeClass("rate-btn-hover");
            }
        })
        .on("click", "div.rate-btn", function() {
            var therate = $(this).attr("id");

            $(this)
                .siblings()
                .removeClass("rate-btn-active");

            for (var i = therate; i >= 0; i--) {
                $(".btn-" + i).addClass("rate-btn-active");
            }
        }).on('click', 'div.rate-btn', function() {

            let rate_id = $(this).attr('id'),

                car_id = $(this).parent('.rate').attr('data-id');

            $.ajax({
                url: $(this).parent('.rate').attr('data-action'),
                method: 'post',
                data: { rate: rate_id, car: car_id },
                success: function(response) {

                    for (let x = 1; x <= response.rating.length; x++) {

                        $('span#review_' + x).text(response.rating[x - 1]);
                    }

                    $('h5.number_rating').text(response.ratingSum);
                }
            });

        });

    //// Enroll car

    $('div.add_car').on('click', function() {
        $.ajax({
            url: $(this).attr('data-action'),
            method: 'post',
            data: { car: $(this).attr('data-id') },
            success: function(response) {

                $('div.tooltip-inner').text(response);
            }
        });
    });
})
