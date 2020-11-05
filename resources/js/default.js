import 'owl.carousel/dist/assets/owl.carousel.css';

import 'owl.carousel';

$(document).ready(function() {

    /// niceScroll

    $("html").niceScroll({
        zindex: 3,
        cursorborder: 0,
        background: "white",
        cursorcolor: "#00FF00",
        cursorwidth: "8px",
        border: 0,
        overflowX: "hidden",
        cursorborderradius: 0,
    });


    $(document).on('click', 'div.footer-back', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, '500');
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    setTimeout(function() {
        $('.preloader').fadeOut(300);
    }, 500);
});
