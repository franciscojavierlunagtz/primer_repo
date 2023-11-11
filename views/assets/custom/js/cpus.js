(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Get the forms we want to add validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();

const select = document.getElementById('idSelNewProduct');
select.addEventListener('change', function handleChange(event) {
    var sel = select.options[select.selectedIndex].text;
    if (sel == "-make your own choice-") {
      document.getElementById("idInputNewProduct").style.display = "block";
      document.getElementById("idInputNewProduct").focus();
      } else {
      document.getElementById("idInputNewProduct").value = "";
      document.getElementById("idInputNewProduct").style.display = "none";
    }
});
const selectqdf = document.getElementById('idSelNewQDF');
selectqdf.addEventListener('change', function handleChange(event) {
    var selQDF = selectqdf.options[selectqdf.selectedIndex].text;

    if (selQDF == "-make your own choice-") {
      document.getElementById("idInputNewQDF").style.display = "block";
      document.getElementById("idInputNewQDF").focus();
      } else {
      document.getElementById("idInputNewQDF").value = "";
      document.getElementById("idInputNewQDF").style.display = "none";
    }
});
const selectstep = document.getElementById('idSelNewStep');
selectstep.addEventListener('change', function handleChange(event) {
    var selstep = selectstep.options[selectstep.selectedIndex].text;

    if (selstep == "-make your own choice-") {
      document.getElementById("idInputNewStep").style.display = "block";
      document.getElementById("idInputNewStep").focus();
      } else {
      document.getElementById("idInputNewStep").value = "";
      document.getElementById("idInputNewStep").style.display = "none";
    }
});
const selectLoc = document.getElementById('idSelNewLoc');
selectLoc.addEventListener('change', function handleChange(event) {
    var selLoc = selectLoc.options[selectLoc.selectedIndex].text;

    if (selLoc == "-make your own choice-") {
      document.getElementById("idInputNewLoc").style.display = "block";
      document.getElementById("idInputNewLoc").focus();
      } else {
      document.getElementById("idInputNewLoc").value = "";
      document.getElementById("idInputNewLoc").style.display = "none";
    }
});
const selectStat = document.getElementById('idSelNewStat');
selectStat.addEventListener('change', function handleChange(event) {
    var selStat = selectStat.options[selectStat.selectedIndex].text;

    if (selStat == "-make your own choice-") {
      document.getElementById("idInputNewStat").style.display = "block";
      document.getElementById("idInputNewStat").focus();
      } else {
      document.getElementById("idInputNewStat").value = "";
      document.getElementById("idInputNewStat").style.display = "none";
    }
});
const selectTeam = document.getElementById('idSelNewTeam');
selectTeam.addEventListener('change', function handleChange(event) {
    var selTeam = selectTeam.options[selectTeam.selectedIndex].text;

    if (selTeam == "-make your own choice-") {
      document.getElementById("idInputNewTeam").style.display = "block";
      document.getElementById("idInputNewTeam").focus();
      } else {
      document.getElementById("idInputNewTeam").value = "";
      document.getElementById("idInputNewTeam").style.display = "none";
    }
});
const selectReserv = document.getElementById('idSelNewReserv');
selectReserv.addEventListener('change', function handleChange(event) {
    var selReserv = selectReserv.options[selectReserv.selectedIndex].text;

    if (selReserv == "-make your own choice-") {
      document.getElementById("idInputNewReserv").style.display = "block";
      document.getElementById("idInputNewReserv").focus();
      } else {
      document.getElementById("idInputNewReserv").value = "";
      document.getElementById("idInputNewReserv").style.display = "none";
    }
});

//Edit CPU add info extra
const selectEditCPU = document.getElementById('idSelEditProduct');
selectEditCPU.addEventListener('change', function handleChange(event) {
    var selEditCPU = selectEditCPU.options[selectEditCPU.selectedIndex].text;
    if (selEditCPU == "-make your own choice-") {
      document.getElementById("idInputEditProduct").style.display = "block";
      document.getElementById("idInputEditProduct").focus();
    } else {
      document.getElementById("idInputEditProduct").value = "";
      document.getElementById("idInputEditProduct").style.display = "none";
    }    
});

const selectEqdf = document.getElementById('idSelEditQDF');
selectEqdf.addEventListener('change', function handleChange(event) {
    var selEQDF = selectEqdf.options[selectEqdf.selectedIndex].text;
    if (selEQDF == "-make your own choice-") {
      document.getElementById("idInputEditQDF").style.display = "block";
      document.getElementById("idInputEditQDF").focus();
    } else {
      document.getElementById("idInputEditQDF").value = "";
      document.getElementById("idInputEditQDF").style.display = "none";
    }
});

const selectEstep = document.getElementById('idSelEditStep');
selectEstep.addEventListener('change', function handleChange(event) {
    var selEstep = selectEstep.options[selectEstep.selectedIndex].text;
    if (selEstep == "-make your own choice-") {
      document.getElementById("idInputEditStep").style.display = "block";
      document.getElementById("idInputEditStep").focus();
    } else {
      document.getElementById("idInputEditStep").value = "";
      document.getElementById("idInputEditStep").style.display = "none";
    }
});

const selectELoc = document.getElementById('idSelEditLoc');
selectELoc.addEventListener('change', function handleChange(event) {
    var selELoc = selectELoc.options[selectELoc.selectedIndex].text;
    if (selELoc == "-make your own choice-") {
      document.getElementById("idInputEditLoc").style.display = "block";
      document.getElementById("idInputEditLoc").focus();
    } else {
      document.getElementById("idInputEditLoc").value = "";
      document.getElementById("idInputEditLoc").style.display = "none";
    }
});

const selectEStat = document.getElementById('idSelEditStat');
selectEStat.addEventListener('change', function handleChange(event) {
    var selEStat = selectEStat.options[selectEStat.selectedIndex].text;
    if (selEStat == "-make your own choice-") {
      document.getElementById("idInputEditStat").style.display = "block";
      document.getElementById("idInputEditStat").focus();
    } else {
      document.getElementById("idInputEditStat").value = "";
      document.getElementById("idInputEditStat").style.display = "none";
    }
});

const selectETeam = document.getElementById('idSelEditTeam');
selectETeam.addEventListener('change', function handleChange(event) {
    var selETeam = selectETeam.options[selectETeam.selectedIndex].text;
    if (selETeam == "-make your own choice-") {
      document.getElementById("idInputEditTeam").style.display = "block";
      document.getElementById("idInputEditTeam").focus();
    } else {
      document.getElementById("idInputEditTeam").value = "";
      document.getElementById("idInputEditTeam").style.display = "none";
    }
});

const selectEReserv = document.getElementById('idSelEditReserv');
selectEReserv.addEventListener('change', function handleChange(event) {
    var selEReserv = selectEReserv.options[selectEReserv.selectedIndex].text;
    if (selEReserv == "-make your own choice-") {
      document.getElementById("idInputEditReserv").style.display = "block";
      document.getElementById("idInputEditReserv").focus();
    } else {
      document.getElementById("idInputEditReserv").value = "";
      document.getElementById("idInputEditReserv").style.display = "none";
    }
});

//editar CPU
$(".tablas2").on("click", ".btnEditarcpu", function () {
    var idcpu = $(this).attr("idcpu");
    parseInt(idcpu);
    var datos = new FormData();
    datos.append("idcpu", idcpu);
    console.log(idcpu);
   $.ajax({
        url: "ajax/hardware.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function (respuesta) {
            if(respuesta !== null){

            $("#editProductName").html(respuesta["product_name"]);
			$("#editProductName").val(respuesta["product_name"]);			
            $("#editQDF").html(respuesta["qdf"]);
			$("#editQDF").val(respuesta["qdf"]);
            $("#editStep").html(respuesta["step"]);
			$("#editStep").val(respuesta["step"]);
			$("#idInputEditMcode").val(respuesta["mcode"]);
            $("#idInputEditSerial").val(respuesta["serial"]);
            $("#editUbicacion").html(respuesta["ubication"]);
			$("#editUbicacion").val(respuesta["ubication"]);
			$("#editStatus").html(respuesta["status"]);
			$("#editStatus").val(respuesta["status"]);
			$("#editTeam").html(respuesta["team"]);
			$("#editTeam").val(respuesta["team"]);
			$("#idInputEditWaic").val(respuesta["waic"]);
			$("#editReservado").html(respuesta["reserved"]);
			$("#editReservado").val(respuesta["reserved"]);
            $("#idInputEditWIP").val(respuesta["wip"]);
            $("#idInputEditComment").val(respuesta["comments"]);
        }
    else{

    }}
    });
});


//Mostrar los QDFs que corresponden al Producto del CPU seleccionado
$("#idSelNewProduct").change(function () {
    var prod = $(this).val();
    var datos = new FormData();
    datos.append("idSelNewProduct", prod);
console.log(prod);
    $.ajax({
        url: "ajax/hardware.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (respuesta) {
           
            const myObjStr = JSON.stringify(respuesta);
            jsonTest = JSON.parse(myObjStr);
            let dropdown = $('#idSelNewQDF');
            dropdown.empty();
            dropdown.append('<option selected="true">Select QDF</option>');
            dropdown.append('<option selected="false" class="highlightSel">-make your own choice-</option>');
            dropdown.prop('selectedIndex', 2);
            $.each(jsonTest, function (key, entry) {
                    dropdown.append($('<option></option>').attr('value', entry.qdf).text(entry.qdf));
            });
        }
    })
});



//mostrar los Steppings segun los QDFs seleccionados
$("#idSelNewQDF").change(function () {
    var qdf = $(this).val();
    var datos = new FormData();
    datos.append("idSelNewQDF", qdf);

    $.ajax({
        url: "ajax/hardware.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (respuesta) {
            const myObjStr = JSON.stringify(respuesta);
            jsonTest = JSON.parse(myObjStr);
            let dropdown = $('#idSelNewStep');
            dropdown.empty();
            dropdown.append('<option selected="true">Select Stepping</option>');
            dropdown.append('<option selected="false" class="highlightSel">-make your own choice-</option>');

            dropdown.prop('selectedIndex', 2);

            $.each(jsonTest, function (key, entry) {
                dropdown.append($('<option></option>').attr('value', entry.step).text(entry.step));

            });

        }
    })
});


//mostrar localidades segun producto elegido
$("#idSelNewProduct").change(function () {
    var prod = $(this).val();
    var datos = new FormData();
    datos.append("idInputProd", prod);
console.log(prod);
    $.ajax({
        url: "ajax/hardware.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (respuesta) {
           
            const myObjStr = JSON.stringify(respuesta);
            jsonTest = JSON.parse(myObjStr);
            let dropdown = $('#idSelNewLoc');
            dropdown.empty();
            dropdown.append('<option selected="true">Select Location</option>');
            dropdown.append('<option selected="false" class="highlightSel">-make your own choice-</option>');
            dropdown.prop('selectedIndex', 2);
            $.each(jsonTest, function (key, entry) {
                    dropdown.append($('<option></option>').attr('value', entry.ubication).text(entry.ubication));
            });
        }
    })
});


//Mostrar los QDFs segun tipo de CPU seleccionado en la edicion de la informacion de los CPUs
$("#idSelEditProduct").change(function () {
    var prod = $(this).val();
    var datos = new FormData();
    datos.append("idSelEditProduct", prod);

    $.ajax({
        url: "ajax/hardware.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (respuesta) {

            const myObjStr = JSON.stringify(respuesta);
            jsonTest = JSON.parse(myObjStr);
            let dropdown = $('#idSelEditQDF');
            dropdown.empty();
            dropdown.append('<option selected="true">Select QDF</option>');
            dropdown.append('<option selected="false" class="highlightSel">-make your own choice-</option>');
            dropdown.prop('selectedIndex', 2);
            $.each(jsonTest, function (key, entry) {
                dropdown.append($('<option></option>').attr('value', entry.qdf).text(entry.qdf));
            });
        }
    })
});

//mostrar los Steppings segun los QDFs seleccionados en edicion de Info de CPU
$("#idSelEditQDF").change(function () {
    var qdf = $(this).val();
    var datos = new FormData();
    datos.append("idSelEditQDF", qdf);

    $.ajax({
        url: "ajax/hardware.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (respuesta) {
            const myObjStr = JSON.stringify(respuesta);
            jsonTest = JSON.parse(myObjStr);
            let dropdown = $('#idSelEditStep');
            dropdown.empty();
            dropdown.append('<option selected="true">Select Stepping</option>');
            dropdown.append('<option selected="false" class="highlightSel">-make your own choice-</option>');

            dropdown.prop('selectedIndex', 2);

            $.each(jsonTest, function (key, entry) {
                dropdown.append($('<option></option>').attr('value', entry.step).text(entry.step));

            });

        }
    })
});


//Mostrar las ubicaciones que corresponden a los Productos de los CPUs seleccionados
if (document.getElementById("idSelNewProduct")) {
    var inivalLoc = document.getElementById("idInputEProd").value;
    function updateHiddenLoc() {
        document.getElementById("idInputEProd").value = document.getElementById("idSelEditProduct").value;
        if ($("#idInputEProd").val() != inivalLoc) {
            var loc = document.getElementById("idInputEProd").value;
            var datos = new FormData();
            datos.append("idInputEProd", loc);

            console.log(loc);

            $.ajax({
                url: "ajax/hardware.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function (respuesta) {

                    const myObjStr = JSON.stringify(respuesta);
                    jsonTest = JSON.parse(myObjStr);
                    let dropdown = $('#idSelEditLoc');
                    dropdown.empty();
                    dropdown.append('<option selected="true">Select Location</option>');
                    dropdown.append('<option selected="false" class="highlightSel">-make your own choice-</option>');
                    dropdown.prop('selectedIndex', 2);
                    $.each(jsonTest, function (key, entry) {
                        dropdown.append($('<option></option>').attr('value', entry.ubication).text(entry.ubication));
                    });
                }
            })
        }
    }
}

