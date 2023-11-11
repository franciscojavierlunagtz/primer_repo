//mostrar foto seleccionada en el formulario registro
$(".classNewUserImg").change(function () {
    var imagen = this.files[0];
    if (imagen["type"] != "image/jpeg" && imagen["type"] != "image/png") {
        $(".classNewUserImg").val("");

        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'The image must be .png or jpeg!'            
          });

    } else if (imagen['size'] > 2000000) {
        $(".classNewUserImg").val("");
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'The image must be smaller than 2MB!'            
          });
    } else {
        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);

        $(datosImagen).on("load", function (event) {
            var rutaImagen = event.target.result;
            $(".previsualizar").attr("src", rutaImagen);
        })
    }
});


//edit user
$(".btnEditarUsuario").click(function () {

    var idUsuario = $(this).attr("idUsuario");
    var datos = new FormData();
    datos.append("idUsuario", idUsuario);

    $.ajax({
        url: "ajax/ajax-user.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function (respuesta) {

            $("#idEditFirstName").val(respuesta["nombre"]);
            $("#idEditLastName").val(respuesta["apellido"]);
            $("#idEditUser").val(respuesta["usuario"]);
            $("#idEditEmail").val(respuesta["email"]);
            $("#idPassActual").val(respuesta["password"]);
            $("#idEditProfile").html(respuesta["perfil"]);
            $("#idEditProfile").val(respuesta["perfil"]);
            $("#idFotoActual").val(respuesta["foto"]);



            if (respuesta["foto"] != "") {
                $(".previsualizar").attr("src", respuesta["foto"]);
            }
        }
    });

});

//activar, desactivar usuarios

$(".btnActivar").click(function() {

    var idUsuario = $(this).attr("idUsuario");
    var estadoUsuario = $(this).attr("estadoUsuario");

    var datos = new FormData();
    datos.append("activarId", idUsuario);
    datos.append("activarUsuario", estadoUsuario);

    $.ajax({

        url: "ajax/ajax-user.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function (respuesta) {
                   }
               })
    if (estadoUsuario == 0) {
        $(this).removeClass('btn-success');
        $(this).addClass('btn-danger');
        $(this).html('Inactive');
        $(this).attr('estadoUsuario', 1);
    } else {
        $(this).addClass('btn-success');
        $(this).removeClass('btn-danger');
        $(this).html('Active');
        $(this).attr('estadoUsuario', 0);

    }

})


/*=============================================
ELIMINAR USUARIO
=============================================*/
$(".btnEliminarUsuario").click(function () {
 
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {

                var idUsuario = $(this).attr("idUsuario");
                var datos = new FormData();
                datos.append("deletetId", idUsuario);
            
               $.ajax({
            
                    url: "ajax/ajax-user.php",
                    method: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(){
                        window.location = 'http://localhost/lastraspinv/users';
                               }
                           })
        }
    })

})
