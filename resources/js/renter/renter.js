$(document).ready(function() {
    $('.body-image').each(function() {
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

    let image_corp_avater = $('#image_crop_avater').croppie({
        enableExif: true,
        viewport: {
            width: 200,
            height: 200,
            type: 'circle',
        },
        boundary: {
            height: 300,
        }
    });

    //// Upload Image

    $(document).on('click', 'span.user_image_upload', function() {

        $('input[name="image_user_content"]').trigger('click');
    });

    /// Change Image

    $('button.crop_user_image').on('click', function() {

        var button = $(this);

        image_corp_avater.croppie('result', {
            type: 'canvas',
            size: 'viewport',
        }).then(function(response) {

            $.ajax({
                url: $(button).attr('data-action'),
                method: 'POST',
                data: { image: response },
                beforeSend: function() {

                    $(button).text('Waiting');
                },
                success: function() {

                    $('img.user_image_avater').attr('src', response);

                    $(button).text('Import Image');

                    $('#user_image').modal('hide');
                }
            })
        });
    });

    /// Filer Reader

    $('input[name="image_user_content"]').change(function() {

        let reader = new FileReader();

        reader.onload = function(event) {

            image_corp_avater.croppie('bind', {

                url: event.target.result

            });
        }
        reader.readAsDataURL(this.files[0]);

        $('#user_image').modal('show');
    });

    //// Search Input

    $(document).on('keyup', 'input[type="search"]', function(event) {

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


    /// Update Info

    $('form[name="formUpdate"]').on('submit', function() {

        let name = $('input[name="name"]').val(),

            password = $('input[name="password"]').val(),

            confirm = $('input[name="confirm_password"]').val();

        if (name == '') {

            $('div.validate_error').text('Name Required').removeClass('d-none');

            return false;

        } else if (password != confirm) {

            $('div.validate_error').text('Password Not Matched').removeClass('d-none');

            return false;

        } else {

            let formContent = new FormData(this);

            $.ajax({
                url: $(this).attr('action'),
                data: formContent,
                method: 'post',
                processData: false,
                dataType: false,
                contentType: false,
                beforeSend: function() {

                    $('button.submit_form').text('Waiting');
                },
                success: function(response) {

                    $('button.submit_form').html('update Info <i class="fa fa-long-arrow-right"></i>');

                    $('div.validate_error').text('Info Update Success').removeClass('d-none');

                    $('input[name="password"]').val('');

                    $('input[name="confirm_password"]').val('');

                    $('div.user_name').text(response);

                    setTimeout(function() {

                        $('div.validate_error').text('').addClass('d-none');

                    }, 1000);
                }
            });

            return false;
        }
    });
})