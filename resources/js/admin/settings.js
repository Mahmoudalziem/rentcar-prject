$(document).ready(function() {

    require('./adminlte.min');

    require('./jquery.overlayScrollbars.min.js');

    $('form[name="form_change_password"]').on('submit', function() {

        let password = $('input[name="password"]').val();

        $.ajax({
            url: $(this).attr('action'),
            data: { password: password },
            method: 'POST',
            beforeSend: function() {

                $(this).find('button.submit_form').text('Waiting');
            },
            success: function() {

                location.reload();
            }
        })

        return false;
    });
});