"use strict";

$(document).ready(function () {
  require('../admin/adminlte.min');

  require('../admin/jquery.overlayScrollbars.min.js');

  CKEDITOR.replace('seller_descri');
  CKEDITOR.instances['seller_descri'].setData($('div.seller_descri').attr('data-descri'));
  $('input[name="image"]').on('change', function (e) {
    var reader = new FileReader(),
        image = this.files[0];

    reader.onload = function (image) {
      var imageContent = image.target.result;
      $('div.seller_image img').removeClass('d-none').attr('src', imageContent);
    };

    reader.readAsDataURL(image);
    this.value = '';
  });
  $('button.add_seller_image').on('click', function () {
    $(this).siblings('input[name="image"]').click();
  });
  $('form[name="add_seller"]').on('submit', function (event) {
    var descri = CKEDITOR.instances['seller_descri'].getData(),
        image = $('div.seller_image img').attr('src'),
        formContent = new FormData(this);
    formContent.append('image', image);
    formContent.append('descri', descri);
    formContent.append('seller_id', $(this).attr('data-id'));

    if (descri == '') {
      $('div.validate_error').text('Description Required').removeClass('d-none');
      return false;
    } else if (image == '#') {
      $('div.validate_error').text('Image Required').removeClass('d-none');
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
          $(this).find('button.btn').text('Waiting');
        },
        success: function success(response) {
          if (response == 'done') {
            location.replace("".concat(window.location.protocol, "//").concat(window.location.hostname, "/admin/viewseller"));
          }
        }
      }); // return false;
    }
  });
});