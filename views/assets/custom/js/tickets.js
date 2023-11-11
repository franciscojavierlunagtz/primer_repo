window.onbeforeunload = function() {
    return "Changes you made may not be Saved.";
  };


$(".tableHWCDIMMs tbody").on("click", "button.btnRemoveDIMMs", function(){

    var controles = $(this).parent();
    var texto = $(this).parent().parent().parent();

    var validardimmInfobyID = $(this).attr("idsyshwchange");
    var datos = new FormData();
    datos.append("validardimmInfobyID", validardimmInfobyID);
    $.ajax({
        url: "ajax/dimms.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType:"json",
        success: function (respuesta) {
            console.log(respuesta);
var gdc = respuesta["gdc"];
var model = respuesta["model"];
var item = "DIMM";
            Swal.fire({
                title: 'Remove DIMM',
                text: 'Where will you store the removed DIMM?',
                input: 'select',
                inputOptions: {
                  'Locker 01': 'Locker 01',
                  'Locker 05': 'Locker 05',
                  'Warehouse': 'Warehouse'
                },
                inputPlaceholder: 'Select Location',
                showCancelButton: true,
                inputValidator: function (value) {
                  return new Promise(function (resolve, reject) {
                    if (value !== '') {
                      resolve();
                    } else {
                      resolve('You must select a Location');
                    }
                  });
                }
              }).then(function (result) {
                if (result.isConfirmed) {
                    var location = result.value;
                    $(".itemsLeave").append(
                        '<div class="input-group ingrItemChanged">'+ 
                                '<input class="spanItemchanged infoItemRemToDB" type="text" name="itemRemove" value="'+item+'" readonly>'+
                                '<input class="form-control inforItemChanged infoGDCRemToDB" nametype="text" value="'+gdc+'" readonly>'+
                                '<input class="form-control inforItemChanged infoModelRemToDB" type="text" value="'+model+'" readonly>'+
                                '<input class="form-control inforItemChanged infoLocRemToDB" type="text" value="'+location+'" readonly>'+
                                '<button class="btn btn-danger btn-sm btnItemchanged" idItem="'+validardimmInfobyID+'"> X </button>'+
                            '</div>');
                 controles.addClass('ocultarbotonesItem');   
                 texto.addClass('tacharTexto');   
                 informacionItemRem();    
                }
                
              });

            
        
        }
    }) 

    
})

//quitar item de lista final de cambios y regresarlo a lista general de inventario del sistema




$(".formTickets").on("click", "button.btnItemchanged", function(){
    $(this).parent().remove();
    var idItem = $(this).attr("idItem");

    $("button.btnRemoveDIMMs[idsyshwchange='"+idItem+"']").parent().parent().parent().removeClass('tacharTexto');
    $("button.btnRemoveDIMMs[idsyshwchange='"+idItem+"']").parent().removeClass('ocultarbotonesItem');



})


//agrupar informacion del item para guardarla en el campo item de la base de datos
function informacionItemRem(){
    var infoItemsRem = [];
    var action = "Removed";
    var item = $(".infoItemRemToDB");
    var gdc = $(".infoGDCRemToDB");
    var model = $(".infoModelRemToDB");
    var location = $(".infoLocRemToDB");

    for(var i = 0; i < item.length; i++){
        infoItemsRem.push({ "item": $(item[i]).val(),
                         "gdc": $(gdc[i]).val(),
                         "model": $(model[i]).val(),
                         "location": $(location[i]).val(),
                         "action": action
    
    })
    }
    $("#listaItemstoRemDB").val(JSON.stringify(infoItemsRem));
    console.log(infoItemsRem)
}






