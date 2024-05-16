function verificar() {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger"
        },
        buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
        title: "¿Deseas agregar al usuario?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "¡Sí, agregar!",
        cancelButtonText: "¡No, cancelar!",
    }).then((result) => {
        if (result.isConfirmed) {
            swalWithBootstrapButtons.fire({});
            let defaultAction = document.getElementById('form').action;
            let currentPath = window.location.pathname;
            let newAction = defaultAction + "?from=" + currentPath;
            document.getElementById('form').action = newAction;
            document.getElementById('form').submit();
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire({
                title: "Cancelado!",
                text: "Tu registro ha sido cancelado",
                icon: "info",
            });
        }
    });
}