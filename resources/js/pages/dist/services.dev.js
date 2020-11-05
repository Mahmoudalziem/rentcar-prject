"use strict";

$(document).ready(function () {
  //// slider car Images
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
  });
  $(document).on('click', 'div.access-location', function () {
    if (!navigator.geolocation) {// status.textContent = 'Geolocation is not supported by your browser';
    } else {
      navigator.geolocation.getCurrentPosition(success, error);
    }

    function success(position) {
      var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;
      $.ajax({
        url: $('div.access-location').attr('data-action'),
        method: "post",
        data: {
          lat: latitude,
          "long": longitude
        },
        beforeSend: function beforeSend() {},
        success: function success() {}
      });
    }

    function error() {// status.textContent = 'Unable to retrieve your location';
    }
  });
  $(document).on('keyup', 'input[type="search"]', function (event) {
    var inputValue = $(this).val().toLowerCase(),
        x = 0,
        courseName = $('div.body-content-title a');

    for (x; x < courseName.length; x++) {
      if (!$(courseName[x]).html().toLowerCase().includes(inputValue)) {
        $(courseName[x]).parents('.car-body').parent().css('display', 'none');
      } else {
        $(courseName[x]).parents('.car-body').parent().css('display', 'block');
      }
    }
  });
});