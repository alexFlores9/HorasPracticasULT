$('.boton').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href')
    Swal.fire({
        icon: 'warning',
        title: '¿Esta seguro que desea eliminar este usuario?',
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

const flashdata = $('.flash-data').data('flashdata')
if (flashdata) {
    Swal.fire({
        icon: "success",
        title: "Usuario eliminado exitosamente",
    })
}