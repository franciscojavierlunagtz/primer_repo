
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

  const select = document.getElementById('selIdNewSysSummary');
    select.addEventListener('change', function handleChange(event) {
    var sel = select.options[select.selectedIndex].text;
      if (sel == "-make your own choice-") {
        document.getElementById("inpIdNewSysSummary").style.display = "block";
        document.getElementById("inpIdNewSysSummary").focus();
        } else {
        document.getElementById("inpIdNewSysSummary").value = "";
        document.getElementById("inpIdNewSysSummary").style.display = "none";
        }
    });

    const select2 = document.getElementById('selIdNewSysState');
    select2.addEventListener('change', function handleChange(event) {
    var sel2 = select2.options[select2.selectedIndex].text;
      if (sel2 == "-make your own choice-") {
        document.getElementById("inpIdNewSysState").style.display = "block";
        document.getElementById("inpIdNewSysState").focus();
        } else {
        document.getElementById("inpIdNewSysState").value = "";
        document.getElementById("inpIdNewSysState").style.display = "none";
        }
    });

    const select3 = document.getElementById('selIdNewSysLoc');
    select3.addEventListener('change', function handleChange(event) {
    var sel3 = select3.options[select3.selectedIndex].text;
      if (sel3 == "-make your own choice-") {
        document.getElementById("inpIdNewSysLoc").style.display = "block";
        document.getElementById("inpIdNewSysLoc").focus();
        } else {
        document.getElementById("inpIdNewSysLoc").value = "";
        document.getElementById("inpIdNewSysLoc").style.display = "none";
        }
    });

    const select4 = document.getElementById('selIdNewSysPlat');
    select4.addEventListener('change', function handleChange(event) {
    var sel4 = select4.options[select4.selectedIndex].text;
      if (sel4 == "-make your own choice-") {
        document.getElementById("inpIdNewSysPlat").style.display = "block";
        document.getElementById("inpIdNewSysPlat").focus();
        } else {
        document.getElementById("inpIdNewSysPlat").value = "";
        document.getElementById("inpIdNewSysPlat").style.display = "none";
        }
    });

    const select5 = document.getElementById('selIdNewSysBN');
    select5.addEventListener('change', function handleChange(event) {
    var sel5 = select5.options[select5.selectedIndex].text;
      if (sel5 == "-make your own choice-") {
        document.getElementById("inpIdNewSysBN").style.display = "block";
        document.getElementById("inpIdNewSysBN").focus();
        } else {
        document.getElementById("inpIdNewSysBN").value = "";
        document.getElementById("inpIdNewSysBN").style.display = "none";
        }
    });

    const select6 = document.getElementById('selIdNewSysCPU');
    select6.addEventListener('change', function handleChange(event) {
    var sel6 = select6.options[select6.selectedIndex].text;
      if (sel6 == "-make your own choice-") {
        document.getElementById("inpIdNewSysCPU").style.display = "block";
        document.getElementById("inpIdNewSysCPU").focus();
        } else {
        document.getElementById("inpIdNewSysCPU").value = "";
        document.getElementById("inpIdNewSysCPU").style.display = "none";
        }
    });


    const select7 = document.getElementById('selIdNewSysTeam');
    select7.addEventListener('change', function handleChange(event) {
    var sel7 = select7.options[select7.selectedIndex].text;
      if (sel7 == "-make your own choice-") {
        document.getElementById("inpIdNewSysTeam").style.display = "block";
        document.getElementById("inpIdNewSysTeam").focus();
        } else {
        document.getElementById("inpIdNewSysTeam").value = "";
        document.getElementById("inpIdNewSysTeam").style.display = "none";
        }
    });



  const selectEd = document.getElementById('selIdEdSysSummary');
  selectEd.addEventListener('change', function handleChange(event) {
    var selEd = selectEd.options[selectEd.selectedIndex].text;
      if (selEd == "-make your own choice-") {
        document.getElementById("inpIdEditSysSummary").style.display = "block";
        document.getElementById("inpIdEditSysSummary").focus();
        } else {
        document.getElementById("inpIdEditSysSummary").value = "";
        document.getElementById("inpIdEditSysSummary").style.display = "none";
        }
    });

    const selectEd2 = document.getElementById('selIdEdSysState');
    selectEd2.addEventListener('change', function handleChange(event) {
    var selEd2 = selectEd2.options[selectEd2.selectedIndex].text;
      if (selEd2 == "-make your own choice-") {
        document.getElementById("inpIdEditSysState").style.display = "block";
        document.getElementById("inpIdEditSysState").focus();
        } else {
        document.getElementById("inpIdEditSysState").value = "";
        document.getElementById("inpIdEditSysState").style.display = "none";
        }
    });

    const selectEd3 = document.getElementById('selIdEdSysLoc');
    selectEd3.addEventListener('change', function handleChange(event) {
    var selEd3 = selectEd3.options[selectEd3.selectedIndex].text;
      if (selEd3 == "-make your own choice-") {
        document.getElementById("inpIdEditSysLoc").style.display = "block";
        document.getElementById("inpIdEditSysLoc").focus();
        } else {
        document.getElementById("inpIdEditSysLoc").value = "";
        document.getElementById("inpIdEditSysLoc").style.display = "none";
        }
    });

    const selectEd4 = document.getElementById('selIdEdSysPlat');
    selectEd4.addEventListener('change', function handleChange(event) {
    var selEd4 = selectEd4.options[selectEd4.selectedIndex].text;
      if (selEd4 == "-make your own choice-") {
        document.getElementById("inpIdEditSysPlat").style.display = "block";
        document.getElementById("inpIdEditSysPlat").focus();
        } else {
        document.getElementById("inpIdEditSysPlat").value = "";
        document.getElementById("inpIdEditSysPlat").style.display = "none";
        }
    });

    const selectEd5 = document.getElementById('selIdEdSysBN');
    selectEd5.addEventListener('change', function handleChange(event) {
    var selEd5 = selectEd5.options[selectEd5.selectedIndex].text;
      if (selEd5 == "-make your own choice-") {
        document.getElementById("inpIdEditSysBN").style.display = "block";
        document.getElementById("inpIdEditSysBN").focus();
        } else {
        document.getElementById("inpIdEditSysBN").value = "";
        document.getElementById("inpIdEditSysBN").style.display = "none";
        }
    });

    const selectEd6 = document.getElementById('selIdEdSysCPU');
    selectEd6.addEventListener('change', function handleChange(event) {
    var selEd6 = selectEd6.options[selectEd6.selectedIndex].text;
      if (selEd6 == "-make your own choice-") {
        document.getElementById("inpIdEditSysCPU").style.display = "block";
        document.getElementById("inpIdEditSysCPU").focus();
        } else {
        document.getElementById("inpIdEditSysCPU").value = "";
        document.getElementById("inpIdEditSysCPU").style.display = "none";
        }
    });


    const selectEd7 = document.getElementById('selIdEdSysTeam');
    selectEd7.addEventListener('change', function handleChange(event) {
    var selEd7 = selectEd7.options[selectEd7.selectedIndex].text;
      if (selEd7 == "-make your own choice-") {
        document.getElementById("inpIdEditSysTeam").style.display = "block";
        document.getElementById("inpIdEditSysTeam").focus();
        } else {
        document.getElementById("inpIdEditSysTeam").value = "";
        document.getElementById("inpIdEditSysTeam").style.display = "none";
        }
    });



    $("#selIdNewSysSummary").change(function () {
        var summary = $(this).val();
        var datos = new FormData();
        datos.append("idSelSysSummary", summary);
    
        $.ajax({
            url: "ajax/ajax-systems.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function (respuesta) {
                if(respuesta !== null){
                const myObjStr = JSON.stringify(respuesta);
                jsonTest = JSON.parse(myObjStr);
                let dropdown = $('#selIdNewSysPlat');
                dropdown.empty();
                $.each(jsonTest, function (key, entry) {
                    dropdown.append($('<option></option>').attr('value', entry.platform).text(entry.platform));
    
                });
                dropdown.append('<option>-make your own choice-</option>');
            }else{

            }
            }
        })
    })


    $("#selIdNewSysSummary").change(function () {
        var summary = $(this).val();
        var datos = new FormData();
        datos.append("idSelSysSummary2", summary);
    
        $.ajax({
            url: "ajax/ajax-systems.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function (respuesta) {
                if(respuesta !== null){
                const myObjStr = JSON.stringify(respuesta);
                jsonTest = JSON.parse(myObjStr);
                let dropdown = $('#selIdNewSysBN');
                dropdown.empty();
                $.each(jsonTest, function (key, entry) {
                    dropdown.append($('<option></option>').attr('value', entry.boardname).text(entry.boardname));
    
                });
                dropdown.append('<option>-make your own choice-</option>');
            }else{

            }
            }
        })
    })


    $("#selIdNewSysSummary").change(function () {
        var summary = $(this).val();
        var datos = new FormData();
        datos.append("idSelSysSummary3", summary);
    
        $.ajax({
            url: "ajax/ajax-systems.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function (respuesta) {
                if(respuesta !== null){
                const myObjStr = JSON.stringify(respuesta);
                jsonTest = JSON.parse(myObjStr);
                let dropdown = $('#selIdNewSysCPU');
                dropdown.empty();
                $.each(jsonTest, function (key, entry) {
                    dropdown.append($('<option></option>').attr('value', entry.processor).text(entry.processor));
    
                });
                dropdown.append('<option>-make your own choice-</option>');
            }else{

            }
            }
        })
    })

    $("#selIdNewSysSummary").change(function () {
        var summary = $(this).val();
        var datos = new FormData();
        datos.append("idSelSysSummary4", summary);
    
        $.ajax({
            url: "ajax/ajax-systems.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function (respuesta) {
                if(respuesta !== null){
                const myObjStr = JSON.stringify(respuesta);
                jsonTest = JSON.parse(myObjStr);
                let dropdown = $('#selIdNewSysLoc');
                dropdown.empty();
                $.each(jsonTest, function (key, entry) {
                    dropdown.append($('<option></option>').attr('value', entry.location).text(entry.location));
    
                });
                dropdown.append('<option>-make your own choice-</option>');
            }else{

            }}
        })
    })


  //validar epic name repetido

  function validateEpicAvailable(event, type){
    if(type == "text"){
      var data = new FormData();
      data.append("dataSysEpic", event.target.value);
      $.ajax({
        url: "ajax/ajax-validate-sys.php",
        method: "POST",
        data: data,
        contentType: false,
        cache: false,
        processData: false,
        dataType: "JSON",
        success: function(response) {
          if (response["epicname"] != "") {
            console.log(response["epicname"]);
            $(event.target).parent().addClass("was-validated");
            $(event.target).parent().children(".invalid-feedback").html("The epic name " + response['epicname'] + " is already taken");
            event.target.value = "";
          }
      }
  });
} 
}


$(".btnEditarSistema").click(function () {
    var idsistema = $(this).attr("idsistema");
    var datos = new FormData();
    datos.append("idEditSys", idsistema);
    $.ajax({
        url: "ajax/ajax-systems.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function (respuesta) {
            $("#idEditSysEpic").val(respuesta["epicname"]);
            $("#selIdEditSysSummary").val(respuesta["summary"]);
            $("#selIdEditSysSummary").html(respuesta["summary"]);
            $("#idEditSysID").val(respuesta["systemID"]);
            $("#selIdEditSysState").val(respuesta["state"]);
            $("#selIdEditSysState").html(respuesta["state"]);
            $("#selIdEditSysLoc").val(respuesta["location"]);
            $("#selIdEditSysLoc").html(respuesta["location"]);
            $("#selIdEditSysPlat").val(respuesta["platform"]);
            $("#selIdEditSysPlat").html(respuesta["platform"]);
            $("#selIdEditSysBN").val(respuesta["boardname"]);
            $("#selIdEditSysBN").html(respuesta["boardname"]);
            $("#selIdEditSysCPU").val(respuesta["processor"]);
            $("#selIdEditSysCPU").html(respuesta["processor"]);
            $("#selIdEditSysTeam").val(respuesta["team"]);
            $("#selIdEditSysTeam").html(respuesta["team"]);
        }
    });

});


/*=============================================
ELIMINAR SISTEMA
=============================================*/
$(".btnEliminarSistema").click(function () {
 
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

                var idSysDel = $(this).attr("idsistema");
                var datos = new FormData();
                datos.append("idSysDel", idSysDel);
            
               $.ajax({
            
                    url: "ajax/ajax-systems.php",
                    method: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(){
                        window.location = 'http://localhost/lastraspinv/systems';
                               }
                           })
        }
    })

})