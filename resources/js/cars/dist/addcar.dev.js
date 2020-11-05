"use strict";

$(document).ready(function () {
  require('../admin/adminlte.min');

  require('../admin/jquery.overlayScrollbars.min.js');

  CKEDITOR.replace('form_course_descri');
  CKEDITOR.instances['form_course_descri'].setData($('div.container_content').attr('data-descri'));

  require("@fancyapps/fancybox/dist/jquery.fancybox"); //  Stylesheet


  require("@fancyapps/fancybox/dist/jquery.fancybox.min.css"); /// Fire FancyBox


  $("a.video").fancybox({
    transitionIn: "elastic",
    transitionOut: "elastic",
    speedIn: 600,
    speedOut: 200,
    overlayShow: true
  });
  $(document).on('click', 'div.form_course_descri_content_head', function () {
    $('div.form_course_descri').toggleClass('active');
  });
  var images = [];
  $('button.import_images_button').on('click', function () {
    $(this).siblings('input').trigger('click');
  });
  $('input[name="images[]"]').on('change', function (e) {
    for (var x = 0; x < images.length; x++) {
      images.shift();
    }

    files($('input[name="images[]"]')[0]);
    this.value = '';
  });

  var files = function files(e) {
    var elements = e.files.length;

    var _loop = function _loop(i) {
      var file = e.files[i],
          reader = new FileReader(),
          name = file.name,
          size = Math.ceil(file.size / 1024);

      reader.onload = function (image) {
        images.push([name, size, image.target.result]);
        var item = "<div class=\"image_item\">\n                            <div class=\"row\">\n                                <div class=\"col-6\">\n                                    <div class=\"image_info\">\n                                        <span>".concat(name, "</span>\n                                        <span>").concat(size, " KB</span>\n                                    </div>\n                                </div>\n                                <!------->\n                                <div class=\"col-6\">\n                                    <div class=\"image_info_progress d-flex\">\n                                        <span>\n                                            <div class=\"progress\">\n                                                <div class=\"progress-bar bg-primary\" style=\"width: 0%\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">0%</div>\n                                            </div>\n                                        </span>\n                                        <span class=\"delete_image\" data-id=\"").concat(i, "\">\n                                            <i class=\"fa fa-trash\" data-id=\"").concat(i, "\"></i>\n                                        </span>\n                                    </div>\n                                </div>\n                                <!------>\n                            </div>\n                        </div>");
        $('div.box_upload_content').append(item);
        $("html").niceScroll().resize();
      };

      reader.readAsDataURL(file);
    };

    for (var i = 0; i < elements; i++) {
      _loop(i);
    }
  };

  $(document).on('click', 'span.delete_image', function (id) {
    id = id.target.attributes[1].value - 1;
    var index = images.indexOf(images[id]);

    if (index > -1) {
      images.splice(index, 1);
    }

    var item = $(this).children('i');
    $.ajax({
      url: $(this).parents('div.box_upload_content').attr('data-action'),
      method: 'POST',
      data: {
        'id': $(this).attr('data-id')
      },
      beforeSend: function beforeSend() {
        $(item).addClass('fa-spinner').removeClass('fa-trash');
      },
      success: function success(response) {
        if (response == 'done') {
          $("span.delete_image[data-id=\"".concat(id + 1, "\"]")).parents('.image_item').remove();
        }
      }
    });
  });

  holder.ondragover = function () {
    $(this).addClass('hover');
    return false;
  };

  holder.ondrop = function (e) {
    e.preventDefault();
    $(this).removeClass('hover');
    files(e.dataTransfer);
  }; /// Adding promo Link


  $(document).on('click', 'div.modal-footer button:first', function () {
    var video = $('input[name="video"]').val();

    if ($('input[name="video"]').val() != '') {
      var promo = video.match(/(?:youtu\.be\/|youtube\.com(?:\/embed\/|\/v\/|\/watch\?v=|\/user\/\S+|\/ytscreeningroom\?v=))([\w\-]{10,12})\b/)[1];
      $('div.branding_video_container a').attr('href', "https://www.youtube.com/embed/".concat(promo, "?autoplay=1"));
      $('div.video_modaling').modal('hide');
      $('input[name="video"]').val('');
    }

    return false;
  }); //// Submit From

  $('form[name="form_car"]').on('submit', function (event) {
    var descri = CKEDITOR.instances['form_course_descri'].getData(),
        promo = $('div.branding_video_container a').attr('href'),
        formContent = new FormData(this);

    for (var i = 0; i < images.length; i++) {
      formContent.append('images[]', images[i].join('**'));
    }

    formContent.append('descri', descri);
    formContent.append('course_id', $(this).attr('data-id'));
    formContent.append('promo', promo);

    if (descri == '') {
      $('div.validate_error').text('Description Required').removeClass('d-none');
      return false;
    } else if ($('div.box_upload_content').children().length == 0) {
      $('div.validate_error').text('Images Required').removeClass('d-none');
      return false;
    } else if (promo == '#') {
      $('div.validate_error').text('Promo Required').removeClass('d-none');
      return false;
    } else {
      event.preventDefault();
      $.ajax({
        url: $(this).attr('action'),
        method: 'POST',
        data: formContent,
        processData: false,
        cache: false,
        contentType: false,
        beforeSend: function beforeSend() {
          $('div.progress-bar').css('width', '100%').text('100%');
          $($('div.course_push_button button span').eq(0)).removeClass('d-none');
          $($('div.course_push_button button span').eq(1)).addClass('d-none');
        },
        success: function success(response) {
          if (response == 'done') {
            location.replace("".concat(window.location.protocol, "//").concat(window.location.hostname, "/admin"));
          }
        }
      });
      return false;
    }

    return false;
  });
});