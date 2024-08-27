require('./bootstrap');
$(document).ready(function() {
    $('#edit-unidade-form').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        var url = $(this).attr('action');
        $.ajax({
            type: 'PUT',
            url: url,
            data: formData,
            success: function(data) {
                console.log('Unidade atualizada com sucesso!');
                window.location.href = "{{ route('unidades.index') }}";
            },
            error: function(xhr, status, error) {
                console.log('Erro ao atualizar unidade: ' + error);
            }
        });
    });
});
