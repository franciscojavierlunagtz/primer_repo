//pasar valor systemID s pagina de control de HW por sistema
    $(".tablas").on("click", ".btnEditarSysHWC", function () {
        var idsysHWC = $(this).attr("idSystemHWC");
        var datos = new FormData();
        datos.append("idsysHWC", idsysHWC);
        
        Swal.fire({
                title: "Please enter the ticket number or task name:",
                input: "text",
                inputPlaceholder: "Name must be longer than 8 characters!",
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: "Accept",
                cancelButtonText: "Cancel",
            })
            .then(resultado => {
                if (resultado.value.length > 8)  {
                    var ticketNumber = resultado.value;
                    var datos = new FormData();
                    datos.append("ticketNumber", ticketNumber);
                    $.ajax({
                        url: "ajax/tickets.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: "JSON",
                        success: function (respuesta) {
console.log(respuesta);
                            if (respuesta) {

                                Swal.fire({
                                    html: '<b>'+ ticketNumber +'</b> is already registered for system <b>'+ respuesta["sys_id"] +'</b>!<br>Do you want to continue?',
                                    showCancelButton: true,
                                    showConfirmButton: true,
                                    confirmButtonText: 'Accept',
                                    cancelButtonText: 'Cancel',
                                 })
                                 .then(respuesta => {
                                     if(respuesta.isConfirmed){
                                 window.location = "/lastraspinv/syshwchange?idsysHWC=" + idsysHWC + "&ticketNum=" + ticketNumber;
                             }else if(respuesta.isDenied){
                                 window.location = "/lastraspinv/hwchange";
                             }
                         })
                                
                }else{
                    window.location = "/lastraspinv/syshwchange?idsysHWC=" + idsysHWC + "&ticketNum=" + ticketNumber;
                               
                 
                 }  
            }
        })
    }
    else {
        Swal.fire('Name must be longer than 8 characters!')
        }
})
});