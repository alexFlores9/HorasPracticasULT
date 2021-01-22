$('.eAsociado').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href')
    Swal.fire({
        icon: 'warning',
        title: '¿Esta seguro que desea eliminar a este asociado?',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        CancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar',

    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
})

const flashdata = $('.flash_data').data('flashdata')
if (flashdata) {
    Swal.fire({
        icon: "success",
        title: "Asociado eliminado exitosamente",
    })
}