$(document).ready(function() {

    require('../admin/adminlte.min');

    require('../admin/jquery.overlayScrollbars.min.js');

    $('.table').DataTable({
        "responsive": true,
        "retrieve": true
    });


    $('a.fa-trash').on('click', function() {

        let id = $(this).attr('data-id');

        $('div.modal-footer button:first').attr('data-id', id);
    });

    $('div.modal-footer button:first').on('click', function() {

        let id = $(this).attr('data-id'),

            url = $(this).attr('data-action'),

            item = $(this);

        $.ajax({
            url: url,
            data: { id: id },
            method: 'POST',
            beforeSend: function() {
                $(item).html('Waiting');
            },
            success: function() {

                $('tbody tr').each(function() {

                    if ($(this).attr('data-id') == id) {

                        $('.table#DataTables_Table_0').DataTable().row($(this)).remove().draw();

                        return false;
                    }
                });

                $(`div.car-body[data-id="${id}"]`).parent().remove();

                $('div.deleteing_row').modal('hide');

                $(item).html('Yes');
            }
        })
    });
});