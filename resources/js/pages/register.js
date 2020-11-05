$(document).ready(function() {

    $('form[name="form_signup"]').on('submit', function() {

        let formContent = $(this).serialize(),

            password = $('input[name="password"]').val(),

            confirmPassword = $('input[name="confirm_password"]').val();

        if (password != confirmPassword) {

            $('div.validate_error').text('confirm Password And Password Not Matched').removeClass('d-none');

            return false;

        } else {

            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: { formContent },
                dataType: 'JSON',
                beforeSend: function() {

                    $('button.submit_form').text('Waiting');
                },
                success: function(response) {

                    $('input').val('');

                    $('button.submit_form').html('register <i class="fa fa-long-arrow-right"></i>');

                    $('div.validate_error').text(response.status).removeClass('d-none');

                },
            })

            return false;
        }
    });
});