"use strict";

$(document).ready(function () {
  require('./adminlte.min');

  require('./jquery.overlayScrollbars.min.js');

  $('.body-image').each(function () {
    $('.body-image').owlCarousel({
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
  $('span.edit-cars a:last').on('click', function () {
    var id = $(this).attr('data-id');
    $('div.modal-footer button:first').attr('data-id', id);
  });
  $('div.modal-footer button:first').on('click', function () {
    var id = $(this).attr('data-id'),
        url = $(this).attr('data-action'),
        item = $(this);
    $.ajax({
      url: url,
      data: {
        id: id
      },
      method: 'POST',
      beforeSend: function beforeSend() {
        $(item).html('Waiting');
      },
      success: function success() {
        $("div.car-body[data-id=\"".concat(id, "\"]")).parent().remove();
        $('div.deleteing_row').modal('hide');
        $(item).html('Yes');
      }
    });
  });
});